import glob
import json
import csv
import jaconv

with open('../address/prefectures.json', 'r', encoding='utf8') as file:
    prefectures = json.loads(file.read())
with open('../address/cities.json', 'r', encoding='utf8') as file:
    cities = json.loads(file.read())
with open('../address/streets.json', 'r', encoding='utf8') as file:
    streets = json.loads(file.read())

files = sorted(glob.glob('*.csv'))


station_count = 0
line_count = 0
company_count = 0

line_station = []

companies = {}
lines = {}
stations = {}

# company: [name]
# line: [name, company_id]
# line_station: [line_id, station_id, order]
# station: [prefecture_id, city_id (possible?), name, reading, note, latitude, altitude]
# 
# 8   line_code
# 9   line_name
# 10  order
# 11  company_code
# 12  c.company_name

found_count = 0
not_found_count = 0

for file in files:
    print('Now processing', file)
    with open(file, 'r', encoding='utf8') as f:
        csv_reader = csv.reader(f, delimiter=',')
        for row in csv_reader:
            found = False
            prefecture_name = row[1]
            if prefecture_name not in prefectures:
                continue

            station_name = row[3]
            station_hiragana = row[4]
            station_katakana_full = jaconv.hira2kata(station_hiragana)
            station_katakana_half = jaconv.zen2han(station_katakana_full)
            station_romaji = jaconv.z2h(jaconv.kana2alphabet(station_hiragana))
            station_note = row[5]
            station_latitude = row[6]
            station_altitude = row[7]
            
            line_name = row[9]
            line_order = row[10]
            company_name = row[12]

            prefecture_id = prefectures[prefecture_name]["id"]
            
            filtered_cities = [(city, cities[city]["id"]) for city in cities if cities[city]['prefecture_id'] == prefecture_id]
            filtered_streets = [(streets[street]["name"], streets[street]["city_id"], streets[street]["id"]) for street in streets if streets[street]['prefecture_id'] == prefecture_id]

            original_station_name = station_name

            city_id = None
            street_id = None

            if company_name not in companies:
                company_count += 1
                companies[company_name] = {
                    "id": company_count
                }

            if line_name not in lines:
                line_count += 1
                lines[line_name] = {
                    "id": line_count,
                    "prefecture_id": prefecture_id,
                    "company_id": companies[company_name]["id"]
                }

            while not found and len(station_name) > 0:
                for (filtered_city, filtered_city_id) in filtered_cities:
                    if station_name in filtered_city:
                        found = True
                        city_id = filtered_city_id
                        break
                if not found:
                    for (filtered_street, filtered_city_id, filtered_street_id) in filtered_streets:
                        if station_name in filtered_street:
                            found = True
                            city_id = filtered_city_id
                            street_id = filtered_street_id
                            break
                if not found:
                    if station_name.startswith('新'):
                        station_name = station_name[1:]
                    else:
                        station_name = station_name[:-1]
            if not found:
                city_id = filtered_cities[0][1]
            
            if not prefecture_id in stations:
                stations[prefecture_id] = {}
            if original_station_name not in stations[prefecture_id]:

                station_count += 1
                stations[prefecture_id][original_station_name] = {
                    'id': station_count,
                    'prefecture_id': prefecture_id, 
                    'city_id': city_id,
                    'street_id': street_id,
                    'name': original_station_name,
                    'hiragana': station_hiragana,
                    'katakana': station_katakana_full,
                    'katakana_half': station_katakana_half,
                    'romaji': station_romaji,
                    'memo': station_note,
                    'latitude': station_latitude,
                    'altitude': station_altitude
                }

            line_station.append({
                "line_id": lines[line_name]["id"],
                "station_id": stations[prefecture_id][original_station_name]["id"],
                "order": line_order
            })


with open("stations.json", "w", encoding="utf8") as file:
    json.dump(stations, file, indent=4,ensure_ascii=False)

with open("companies.json", "w", encoding="utf8") as file:
    json.dump(companies, file, indent=4,ensure_ascii=False)

with open("lines.json", "w", encoding="utf8") as file:
    json.dump(lines, file, indent=4,ensure_ascii=False)

with open("line_station.json", "w", encoding="utf8") as file:
    json.dump(line_station, file, indent=4,ensure_ascii=False)