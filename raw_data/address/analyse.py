import csv
import json
import jaconv

test = jaconv.hira2kata('ともえまみ')

prefectures = {}
prefecture_count = 0

cities = {}
city_count = 0

post_code_prefixes = {}
post_code_prefix_count = 0

city_post_code_prefix = []

post_codes = {}
post_code_count = 0

streets = {}
street_count = 0

with open('KEN_ALL.CSV') as csv_file:
    csv_reader = csv.reader(csv_file, delimiter=',')
    line_count = 0
    for row in csv_reader:
        prefecture = row[6]
        prefecture_kana_half = row[3]
        prefecture_kana_full = jaconv.h2z(prefecture_kana_half)
        prefecture_hiragana = jaconv.kata2hira(prefecture_kana_full)
        prefecture_romaji = jaconv.kata2alphabet(prefecture_kana_full)
        # print(prefecture, prefecture_kana_half, prefecture_kana_full, prefecture_hiragana, prefecture_romaji)
        if prefecture not in prefectures:
            prefecture_count+=1
            prefectures[prefecture] = {
                "id": prefecture_count,
                "romaji": prefecture_romaji,
                "hiragana": prefecture_hiragana,
                "katakana": prefecture_kana_full,
                "katakana_half": prefecture_kana_half
            }

        city = row[7]
        city_kana_half = row[4]
        city_kana_full = jaconv.h2z(city_kana_half)
        city_hiragana = jaconv.kata2hira(city_kana_full)
        city_romaji = jaconv.kata2alphabet(city_kana_full)
        city_prefecture_id = prefectures[prefecture]["id"]
        if city not in cities:
            city_count+=1
            cities[city] = {
                "id": city_count,
                "prefecture_id": city_prefecture_id,
                "romaji": city_romaji,
                "hiragana": city_hiragana,
                "katakana": city_kana_full,
                "katakana_half": city_kana_half
            }

        post_code_prefix = row[1]
        post_code = row[2]
        if post_code not in post_codes:
            post_code_count += 1
            post_codes[post_code] = {
                "id": post_code_count,
                "prefecture_id": prefectures[prefecture]["id"],
                "city_id": cities[city]["id"],
                "post_code_prefix": post_code_prefix,
            }

        street = row[8]
        street_kana_half = row[5]
        street_kana_full = jaconv.h2z(street_kana_half)
        street_hiragana = jaconv.kata2hira(street_kana_full)
        street_romaji = jaconv.kata2alphabet(street_kana_full)
        street_prefecture_id = prefectures[prefecture]["id"]
        street_city_id = cities[city]["id"]
        street_post_code_id = post_codes[post_code]["id"]
        street_count+=1
        streets[street_count] = {
            "id": street_count,
            "prefecture_id": street_prefecture_id,
            "city_id": street_city_id,
            "post_code_id": street_post_code_id,
            "romaji": street_romaji,
            "hiragana": street_hiragana,
            "katakana": street_kana_full,
            "katakana_half": street_kana_half,
            "name": street,
        }


with open("prefectures.json", "w", encoding="utf8") as file:
    json.dump(prefectures, file, indent=4,ensure_ascii=False)
with open("cities.json", "w", encoding="utf8") as file:
    json.dump(cities, file, indent=4,ensure_ascii=False)
with open("post_codes.json", "w", encoding="utf8") as file:
    json.dump(post_codes, file, indent=4,ensure_ascii=False)
with open("streets.json", "w", encoding="utf8") as file:
    json.dump(streets, file, indent=4,ensure_ascii=False)