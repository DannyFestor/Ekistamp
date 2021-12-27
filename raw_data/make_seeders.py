import json

def make_seeder(model, content, suffix=""):
    return f"""<?php
namespace Database\Seeders;

use App\Models\{model};
use Illuminate\Database\Seeder;

class {model}Seeder{suffix} extends Seeder
{{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {{
        {content}
    }}
}}
"""

with open('./raw_data/address/prefectures.json', 'r', encoding='utf8') as f:
    prefectures = json.loads(f.read())

with open('./database/seeders/PrefectureSeeder.php', 'w', encoding='utf8') as f:
    content = ""
    name = "Prefecture"
    for prefecture in prefectures:
        content = content + f"""
        {name}::create([
            "id" => {prefectures[prefecture]["id"]},
            "name" => "{prefecture}",
            "romaji" => "{prefectures[prefecture]["romaji"]}",
            "hiragana" => "{prefectures[prefecture]["hiragana"]}",
            "katakana" => "{prefectures[prefecture]["katakana"]}",
            "katakana_half" => "{prefectures[prefecture]["katakana_half"]}",
        ]);
        """
    seeder = make_seeder(name, content)
    f.write(seeder)

with open('./raw_data/address/cities.json', 'r', encoding='utf8') as f:
    cities = json.loads(f.read())

with open('./database/seeders/CitySeeder.php', 'w', encoding='utf8') as f:
    content = ""
    name = "City"
    for city in cities:
        content = content + f"""
        {name}::create([
            "id" => {cities[city]["id"]},
            "prefecture_id" => {cities[city]["prefecture_id"]},
            "name" => "{city}",
            "romaji" => "{cities[city]["romaji"]}",
            "hiragana" => "{cities[city]["hiragana"]}",
            "katakana" => "{cities[city]["katakana"]}",
            "katakana_half" => "{cities[city]["katakana_half"]}",
        ]);
        """
    seeder = make_seeder(name, content)
    f.write(seeder)

with open('./raw_data/address/post_codes.json', 'r', encoding='utf8') as f:
    post_codes = json.loads(f.read())

with open('./database/seeders/PostCodeSeeder.php', 'w', encoding='utf8') as f:
    content = ""
    name = "PostCode"
    for post_code in post_codes:
        content = content + f"""
        {name}::create([
            "id" => {post_codes[post_code]["id"]},
            "prefecture_id" => {post_codes[post_code]["prefecture_id"]},
            "city_id" => {post_codes[post_code]["city_id"]},
            "post_code" => "{post_code}",
            "post_code_prefix" => "{post_codes[post_code]["post_code_prefix"]}",
        ]);
        """
    seeder = make_seeder(name, content)
    f.write(seeder)

with open('./raw_data/address/streets.json', 'r', encoding='utf8') as f:
    streets = json.loads(f.read())

with open('./database/seeders/StreetSeeder.php', 'w', encoding='utf8') as f:
    content = ""
    name = "Street"
    for street in streets:
        content = content + f"""
        {name}::create([
            "id" => {streets[street]["id"]},
            "prefecture_id" => {streets[street]["prefecture_id"]},
            "city_id" => {streets[street]["city_id"]},
            "post_code_id" => {streets[street]["post_code_id"]},
            "name" => "{streets[street]["name"]}",
            "romaji" => "{streets[street]["romaji"]}",
            "hiragana" => "{streets[street]["hiragana"]}",
            "katakana" => "{streets[street]["katakana"]}",
            "katakana_half" => "{streets[street]["katakana_half"]}",
        ]);
        """
    seeder = make_seeder(name, content)
    f.write(seeder)

with open('./raw_data/station/companies.json', 'r', encoding='utf8') as f:
    companies = json.loads(f.read())

with open('./database/seeders/CompanySeeder.php', 'w', encoding='utf8') as f:
    content = ""
    name = "Company"
    for company in companies:
        content = content + f"""
        {name}::create([
            "id" => {companies[company]["id"]},
            "name" => "{company}",
        ]);
        """
    seeder = make_seeder(name, content)
    f.write(seeder)

with open('./raw_data/station/lines.json', 'r', encoding='utf8') as f:
    lines = json.loads(f.read())

with open('./database/seeders/LineSeeder.php', 'w', encoding='utf8') as f:
    content = ""
    name = "Line"
    for line in lines:
        content = content + f"""
        {name}::create([
            "id" => {lines[line]["id"]},
            "prefecture_id" => {lines[line]["prefecture_id"]},
            "company_id" => {lines[line]["company_id"]},
            "name" => "{line}",
        ]);
        """
    seeder = make_seeder(name, content)
    f.write(seeder)

with open('./raw_data/station/stations.json', 'r', encoding='utf8') as f:
    stations = json.loads(f.read())

for prefecture in stations:
    with open('./database/seeders/StationSeeder{}.php'.format(prefecture), 'w', encoding='utf8') as f:
        content = ""
        name = "Station"
        for station in stations[prefecture]:
            content = content + f"""
            {name}::create([
                "id" => {stations[prefecture][station]["id"]},
                "prefecture_id" => {stations[prefecture][station]["prefecture_id"]},
                "city_id" => {stations[prefecture][station]["city_id"]},
                "street_id" => {stations[prefecture][station]["street_id"] if stations[prefecture][station]["street_id"] != None else 'null'},
                "name" => "{stations[prefecture][station]["name"]}",
                "hiragana" => "{stations[prefecture][station]["hiragana"]}",
                "katakana" => "{stations[prefecture][station]["katakana"]}",
                "katakana_half" => "{stations[prefecture][station]["katakana_half"]}",
                "romaji" => "{stations[prefecture][station]["romaji"]}",
                "memo" => "{stations[prefecture][station]["memo"]}",
                "latitude" => "{stations[prefecture][station]["latitude"]}",
                "altitude" => "{stations[prefecture][station]["altitude"]}",
            ]);
            """
        seeder = make_seeder(name, content, prefecture)
        f.write(seeder)

with open('./raw_data/station/line_station.json', 'r', encoding='utf8') as f:
    line_station = json.loads(f.read())

with open('./database/seeders/LineStationSeeder.php', 'w', encoding='utf8') as f:
    content = ""
    name = "LineStation"
    for ls in line_station:
        content = content + f"""
        {name}::create([
            "line_id" => {ls["line_id"]},
            "station_id" => {ls["station_id"]},
            "order" => {ls["order"]},
        ]);
        """
    seeder = make_seeder(name, content)
    f.write(seeder)
