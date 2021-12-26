<?php
namespace Database\Seeders;

use App\Models\Station;
use Illuminate\Database\Seeder;

class StationSeeder12 extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        
            Station::create([
                "id" => 2075,
                "prefecture_id" => 12,
                "city_id" => 606,
                "street_id" => null,
                "name" => "松戸",
                "hiragana" => "まつど",
                "katakana" => "マツド",
                "katakana_half" => "ﾏﾂﾄﾞ",
                "romaji" => "matsudo",
                "memo" => "",
                "latitude" => "35.784329",
                "altitude" => "139.900664",
            ]);
            
            Station::create([
                "id" => 2076,
                "prefecture_id" => 12,
                "city_id" => 614,
                "street_id" => null,
                "name" => "柏",
                "hiragana" => "かしわ",
                "katakana" => "カシワ",
                "katakana_half" => "ｶｼﾜ",
                "romaji" => "kashiwa",
                "memo" => "",
                "latitude" => "35.862100",
                "altitude" => "139.970932",
            ]);
            
            Station::create([
                "id" => 2077,
                "prefecture_id" => 12,
                "city_id" => 619,
                "street_id" => null,
                "name" => "我孫子",
                "hiragana" => "あびこ",
                "katakana" => "アビコ",
                "katakana_half" => "ｱﾋﾞｺ",
                "romaji" => "abiko",
                "memo" => "",
                "latitude" => "35.872627",
                "altitude" => "140.010789",
            ]);
            
            Station::create([
                "id" => 2078,
                "prefecture_id" => 12,
                "city_id" => 601,
                "street_id" => 33772,
                "name" => "天王台",
                "hiragana" => "てんのうだい",
                "katakana" => "テンノウダイ",
                "katakana_half" => "ﾃﾝﾉｳﾀﾞｲ",
                "romaji" => "tennoudai",
                "memo" => "",
                "latitude" => "35.872544",
                "altitude" => "140.040926",
            ]);
            
            Station::create([
                "id" => 2079,
                "prefecture_id" => 12,
                "city_id" => 633,
                "street_id" => 36317,
                "name" => "佐原",
                "hiragana" => "さわら",
                "katakana" => "サワラ",
                "katakana_half" => "ｻﾜﾗ",
                "romaji" => "sawara",
                "memo" => "",
                "latitude" => "35.894549",
                "altitude" => "140.494053",
            ]);
            
            Station::create([
                "id" => 2080,
                "prefecture_id" => 12,
                "city_id" => 633,
                "street_id" => null,
                "name" => "香取",
                "hiragana" => "かとり",
                "katakana" => "カトリ",
                "katakana_half" => "ｶﾄﾘ",
                "romaji" => "katori",
                "memo" => "",
                "latitude" => "35.897995",
                "altitude" => "140.531995",
            ]);
            
            Station::create([
                "id" => 2081,
                "prefecture_id" => 12,
                "city_id" => 642,
                "street_id" => null,
                "name" => "十二橋",
                "hiragana" => "じゅうにきょう",
                "katakana" => "ジュウニキョウ",
                "katakana_half" => "ｼﾞｭｳﾆｷｮｳ",
                "romaji" => "juunikyou",
                "memo" => "",
                "latitude" => "35.917409",
                "altitude" => "140.545770",
            ]);
            
            Station::create([
                "id" => 2082,
                "prefecture_id" => 12,
                "city_id" => 595,
                "street_id" => null,
                "name" => "千葉",
                "hiragana" => "ちば",
                "katakana" => "チバ",
                "katakana_half" => "ﾁﾊﾞ",
                "romaji" => "chiba",
                "memo" => "",
                "latitude" => "35.612685",
                "altitude" => "140.113987",
            ]);
            
            Station::create([
                "id" => 2083,
                "prefecture_id" => 12,
                "city_id" => 595,
                "street_id" => 33485,
                "name" => "東千葉",
                "hiragana" => "ひがしちば",
                "katakana" => "ヒガシチバ",
                "katakana_half" => "ﾋｶﾞｼﾁﾊﾞ",
                "romaji" => "higashichiba",
                "memo" => "",
                "latitude" => "35.616851",
                "altitude" => "140.122097",
            ]);
            
            Station::create([
                "id" => 2084,
                "prefecture_id" => 12,
                "city_id" => 598,
                "street_id" => 33607,
                "name" => "都賀",
                "hiragana" => "つが",
                "katakana" => "ツガ",
                "katakana_half" => "ﾂｶﾞ",
                "romaji" => "tsuga",
                "memo" => "",
                "latitude" => "35.636072",
                "altitude" => "140.149372",
            ]);
            
            Station::create([
                "id" => 2085,
                "prefecture_id" => 12,
                "city_id" => 625,
                "street_id" => null,
                "name" => "四街道",
                "hiragana" => "よつかいどう",
                "katakana" => "ヨツカイドウ",
                "katakana_half" => "ﾖﾂｶｲﾄﾞｳ",
                "romaji" => "yotsukaidou",
                "memo" => "",
                "latitude" => "35.662985",
                "altitude" => "140.165591",
            ]);
            
            Station::create([
                "id" => 2086,
                "prefecture_id" => 12,
                "city_id" => 625,
                "street_id" => 35849,
                "name" => "物井",
                "hiragana" => "ものい",
                "katakana" => "モノイ",
                "katakana_half" => "ﾓﾉｲ",
                "romaji" => "monoi",
                "memo" => "",
                "latitude" => "35.685706",
                "altitude" => "140.200365",
            ]);
            
            Station::create([
                "id" => 2087,
                "prefecture_id" => 12,
                "city_id" => 610,
                "street_id" => null,
                "name" => "佐倉",
                "hiragana" => "さくら",
                "katakana" => "サクラ",
                "katakana_half" => "ｻｸﾗ",
                "romaji" => "sakura",
                "memo" => "",
                "latitude" => "35.709703",
                "altitude" => "140.226084",
            ]);
            
            Station::create([
                "id" => 2088,
                "prefecture_id" => 12,
                "city_id" => 637,
                "street_id" => null,
                "name" => "酒々井",
                "hiragana" => "しすい",
                "katakana" => "シスイ",
                "katakana_half" => "ｼｽｲ",
                "romaji" => "shisui",
                "memo" => "",
                "latitude" => "35.731841",
                "altitude" => "140.275357",
            ]);
            
            Station::create([
                "id" => 2089,
                "prefecture_id" => 12,
                "city_id" => 609,
                "street_id" => null,
                "name" => "成田",
                "hiragana" => "なりた",
                "katakana" => "ナリタ",
                "katakana_half" => "ﾅﾘﾀ",
                "romaji" => "narita",
                "memo" => "",
                "latitude" => "35.777837",
                "altitude" => "140.314102",
            ]);
            
            Station::create([
                "id" => 2090,
                "prefecture_id" => 12,
                "city_id" => 609,
                "street_id" => 34488,
                "name" => "久住",
                "hiragana" => "くずみ",
                "katakana" => "クズミ",
                "katakana_half" => "ｸｽﾞﾐ",
                "romaji" => "kuzumi",
                "memo" => "",
                "latitude" => "35.832387",
                "altitude" => "140.338930",
            ]);
            
            Station::create([
                "id" => 2091,
                "prefecture_id" => 12,
                "city_id" => 609,
                "street_id" => 34562,
                "name" => "滑河",
                "hiragana" => "なめがわ",
                "katakana" => "ナメガワ",
                "katakana_half" => "ﾅﾒｶﾞﾜ",
                "romaji" => "namegawa",
                "memo" => "",
                "latitude" => "35.877216",
                "altitude" => "140.348122",
            ]);
            
            Station::create([
                "id" => 2092,
                "prefecture_id" => 12,
                "city_id" => 595,
                "street_id" => 33435,
                "name" => "下総神崎",
                "hiragana" => "しもうさこうざき",
                "katakana" => "シモウサコウザキ",
                "katakana_half" => "ｼﾓｳｻｺｳｻﾞｷ",
                "romaji" => "shimousakouzaki",
                "memo" => "",
                "latitude" => "35.894882",
                "altitude" => "140.410560",
            ]);
            
            Station::create([
                "id" => 2093,
                "prefecture_id" => 12,
                "city_id" => 604,
                "street_id" => 34012,
                "name" => "大戸",
                "hiragana" => "おおと",
                "katakana" => "オオト",
                "katakana_half" => "ｵｵﾄ",
                "romaji" => "ooto",
                "memo" => "",
                "latitude" => "35.890272",
                "altitude" => "140.458390",
            ]);
            
            Station::create([
                "id" => 2094,
                "prefecture_id" => 12,
                "city_id" => 601,
                "street_id" => 33754,
                "name" => "水郷",
                "hiragana" => "すいごう",
                "katakana" => "スイゴウ",
                "katakana_half" => "ｽｲｺﾞｳ",
                "romaji" => "suigou",
                "memo" => "",
                "latitude" => "35.886246",
                "altitude" => "140.569797",
            ]);
            
            Station::create([
                "id" => 2095,
                "prefecture_id" => 12,
                "city_id" => 633,
                "street_id" => 36286,
                "name" => "小見川",
                "hiragana" => "おみがわ",
                "katakana" => "オミガワ",
                "katakana_half" => "ｵﾐｶﾞﾜ",
                "romaji" => "omigawa",
                "memo" => "",
                "latitude" => "35.850111",
                "altitude" => "140.604657",
            ]);
            
            Station::create([
                "id" => 2096,
                "prefecture_id" => 12,
                "city_id" => 641,
                "street_id" => 36714,
                "name" => "笹川",
                "hiragana" => "ささがわ",
                "katakana" => "ササガワ",
                "katakana_half" => "ｻｻｶﾞﾜ",
                "romaji" => "sasagawa",
                "memo" => "",
                "latitude" => "35.839753",
                "altitude" => "140.655737",
            ]);
            
            Station::create([
                "id" => 2097,
                "prefecture_id" => 12,
                "city_id" => 595,
                "street_id" => 33435,
                "name" => "下総橘",
                "hiragana" => "しもうさたちばな",
                "katakana" => "シモウサタチバナ",
                "katakana_half" => "ｼﾓｳｻﾀﾁﾊﾞﾅ",
                "romaji" => "shimousatachibana",
                "memo" => "",
                "latitude" => "35.818645",
                "altitude" => "140.702317",
            ]);
            
            Station::create([
                "id" => 2098,
                "prefecture_id" => 12,
                "city_id" => 595,
                "street_id" => 33435,
                "name" => "下総豊里",
                "hiragana" => "しもうさとよさと",
                "katakana" => "シモウサトヨサト",
                "katakana_half" => "ｼﾓｳｻﾄﾖｻﾄ",
                "romaji" => "shimousatoyosato",
                "memo" => "",
                "latitude" => "35.793093",
                "altitude" => "140.720706",
            ]);
            
            Station::create([
                "id" => 2099,
                "prefecture_id" => 12,
                "city_id" => 599,
                "street_id" => 33628,
                "name" => "椎柴",
                "hiragana" => "しいしば",
                "katakana" => "シイシバ",
                "katakana_half" => "ｼｲｼﾊﾞ",
                "romaji" => "shiishiba",
                "memo" => "",
                "latitude" => "35.765319",
                "altitude" => "140.758815",
            ]);
            
            Station::create([
                "id" => 2100,
                "prefecture_id" => 12,
                "city_id" => 601,
                "street_id" => 33799,
                "name" => "松岸",
                "hiragana" => "まつぎし",
                "katakana" => "マツギシ",
                "katakana_half" => "ﾏﾂｷﾞｼ",
                "romaji" => "matsugishi",
                "memo" => "",
                "latitude" => "35.739544",
                "altitude" => "140.795285",
            ]);
            
            Station::create([
                "id" => 2101,
                "prefecture_id" => 12,
                "city_id" => 601,
                "street_id" => null,
                "name" => "銚子",
                "hiragana" => "ちょうし",
                "katakana" => "チョウシ",
                "katakana_half" => "ﾁｮｳｼ",
                "romaji" => "choushi",
                "memo" => "",
                "latitude" => "35.729684",
                "altitude" => "140.827311",
            ]);
            
            Station::create([
                "id" => 2102,
                "prefecture_id" => 12,
                "city_id" => 619,
                "street_id" => 35453,
                "name" => "東我孫子",
                "hiragana" => "ひがしあびこ",
                "katakana" => "ヒガシアビコ",
                "katakana_half" => "ﾋｶﾞｼｱﾋﾞｺ",
                "romaji" => "higashiabiko",
                "memo" => "",
                "latitude" => "35.868933",
                "altitude" => "140.047564",
            ]);
            
            Station::create([
                "id" => 2103,
                "prefecture_id" => 12,
                "city_id" => 619,
                "street_id" => 35432,
                "name" => "湖北",
                "hiragana" => "こほく",
                "katakana" => "コホク",
                "katakana_half" => "ｺﾎｸ",
                "romaji" => "kohoku",
                "memo" => "",
                "latitude" => "35.867240",
                "altitude" => "140.077784",
            ]);
            
            Station::create([
                "id" => 2104,
                "prefecture_id" => 12,
                "city_id" => 619,
                "street_id" => 35415,
                "name" => "新木",
                "hiragana" => "あらき",
                "katakana" => "アラキ",
                "katakana_half" => "ｱﾗｷ",
                "romaji" => "araki",
                "memo" => "千葉県",
                "latitude" => "35.862352",
                "altitude" => "140.106948",
            ]);
            
            Station::create([
                "id" => 2105,
                "prefecture_id" => 12,
                "city_id" => 619,
                "street_id" => 35457,
                "name" => "布佐",
                "hiragana" => "ふさ",
                "katakana" => "フサ",
                "katakana_half" => "ﾌｻ",
                "romaji" => "fusa",
                "memo" => "",
                "latitude" => "35.849076",
                "altitude" => "140.133085",
            ]);
            
            Station::create([
                "id" => 2106,
                "prefecture_id" => 12,
                "city_id" => 628,
                "street_id" => 35963,
                "name" => "木下",
                "hiragana" => "きおろし",
                "katakana" => "キオロシ",
                "katakana_half" => "ｷｵﾛｼ",
                "romaji" => "kioroshi",
                "memo" => "",
                "latitude" => "35.838938",
                "altitude" => "140.148418",
            ]);
            
            Station::create([
                "id" => 2107,
                "prefecture_id" => 12,
                "city_id" => 608,
                "street_id" => 34385,
                "name" => "小林",
                "hiragana" => "こばやし",
                "katakana" => "コバヤシ",
                "katakana_half" => "ｺﾊﾞﾔｼ",
                "romaji" => "kobayashi",
                "memo" => "千葉県",
                "latitude" => "35.830884",
                "altitude" => "140.192998",
            ]);
            
            Station::create([
                "id" => 2108,
                "prefecture_id" => 12,
                "city_id" => 628,
                "street_id" => 35941,
                "name" => "安食",
                "hiragana" => "あじき",
                "katakana" => "アジキ",
                "katakana_half" => "ｱｼﾞｷ",
                "romaji" => "ajiki",
                "memo" => "",
                "latitude" => "35.835690",
                "altitude" => "140.242077",
            ]);
            
            Station::create([
                "id" => 2109,
                "prefecture_id" => 12,
                "city_id" => 595,
                "street_id" => 33435,
                "name" => "下総松崎",
                "hiragana" => "しもうさまんざき",
                "katakana" => "シモウサマンザキ",
                "katakana_half" => "ｼﾓｳｻﾏﾝｻﾞｷ",
                "romaji" => "shimousamanzaki",
                "memo" => "",
                "latitude" => "35.807639",
                "altitude" => "140.277936",
            ]);
            
            Station::create([
                "id" => 2110,
                "prefecture_id" => 12,
                "city_id" => 609,
                "street_id" => 34483,
                "name" => "空港第２ビル",
                "hiragana" => "くうこうだいにびる",
                "katakana" => "クウコウダイニビル",
                "katakana_half" => "ｸｳｺｳﾀﾞｲﾆﾋﾞﾙ",
                "romaji" => "kuukoudainibiru",
                "memo" => "鉄道",
                "latitude" => "35.773171",
                "altitude" => "140.387123",
            ]);
            
            Station::create([
                "id" => 2111,
                "prefecture_id" => 12,
                "city_id" => 609,
                "street_id" => null,
                "name" => "成田空港",
                "hiragana" => "なりたくうこう",
                "katakana" => "ナリタクウコウ",
                "katakana_half" => "ﾅﾘﾀｸｳｺｳ",
                "romaji" => "naritakuukou",
                "memo" => "鉄道",
                "latitude" => "35.766006",
                "altitude" => "140.386457",
            ]);
            
            Station::create([
                "id" => 2112,
                "prefecture_id" => 12,
                "city_id" => 636,
                "street_id" => null,
                "name" => "大網",
                "hiragana" => "おおあみ",
                "katakana" => "オオアミ",
                "katakana_half" => "ｵｵｱﾐ",
                "romaji" => "ooami",
                "memo" => "",
                "latitude" => "35.522725",
                "altitude" => "140.311085",
            ]);
            
            Station::create([
                "id" => 2113,
                "prefecture_id" => 12,
                "city_id" => 611,
                "street_id" => 34771,
                "name" => "福俵",
                "hiragana" => "ふくたわら",
                "katakana" => "フクタワラ",
                "katakana_half" => "ﾌｸﾀﾜﾗ",
                "romaji" => "fukutawara",
                "memo" => "",
                "latitude" => "35.545807",
                "altitude" => "140.341388",
            ]);
            
            Station::create([
                "id" => 2114,
                "prefecture_id" => 12,
                "city_id" => 611,
                "street_id" => null,
                "name" => "東金",
                "hiragana" => "とうがね",
                "katakana" => "トウガネ",
                "katakana_half" => "ﾄｳｶﾞﾈ",
                "romaji" => "tougane",
                "memo" => "",
                "latitude" => "35.560250",
                "altitude" => "140.363607",
            ]);
            
            Station::create([
                "id" => 2115,
                "prefecture_id" => 12,
                "city_id" => 611,
                "street_id" => 34746,
                "name" => "求名",
                "hiragana" => "ぐみょう",
                "katakana" => "グミョウ",
                "katakana_half" => "ｸﾞﾐｮｳ",
                "romaji" => "gumyou",
                "memo" => "",
                "latitude" => "35.579832",
                "altitude" => "140.396159",
            ]);
            
            Station::create([
                "id" => 2116,
                "prefecture_id" => 12,
                "city_id" => 634,
                "street_id" => 36427,
                "name" => "成東",
                "hiragana" => "なるとう",
                "katakana" => "ナルトウ",
                "katakana_half" => "ﾅﾙﾄｳ",
                "romaji" => "narutou",
                "memo" => "",
                "latitude" => "35.608385",
                "altitude" => "140.410851",
            ]);
            
            Station::create([
                "id" => 2117,
                "prefecture_id" => 12,
                "city_id" => 595,
                "street_id" => 33490,
                "name" => "本千葉",
                "hiragana" => "ほんちば",
                "katakana" => "ホンチバ",
                "katakana_half" => "ﾎﾝﾁﾊﾞ",
                "romaji" => "honchiba",
                "memo" => "",
                "latitude" => "35.601075",
                "altitude" => "140.121042",
            ]);
            
            Station::create([
                "id" => 2118,
                "prefecture_id" => 12,
                "city_id" => 595,
                "street_id" => 33466,
                "name" => "蘇我",
                "hiragana" => "そが",
                "katakana" => "ソガ",
                "katakana_half" => "ｿｶﾞ",
                "romaji" => "soga",
                "memo" => "",
                "latitude" => "35.581465",
                "altitude" => "140.131153",
            ]);
            
            Station::create([
                "id" => 2119,
                "prefecture_id" => 12,
                "city_id" => 599,
                "street_id" => 33638,
                "name" => "鎌取",
                "hiragana" => "かまとり",
                "katakana" => "カマトリ",
                "katakana_half" => "ｶﾏﾄﾘ",
                "romaji" => "kamatori",
                "memo" => "",
                "latitude" => "35.562802",
                "altitude" => "140.178484",
            ]);
            
            Station::create([
                "id" => 2120,
                "prefecture_id" => 12,
                "city_id" => 599,
                "street_id" => 33655,
                "name" => "誉田",
                "hiragana" => "ほんだ",
                "katakana" => "ホンダ",
                "katakana_half" => "ﾎﾝﾀﾞ",
                "romaji" => "honda",
                "memo" => "",
                "latitude" => "35.546971",
                "altitude" => "140.213815",
            ]);
            
            Station::create([
                "id" => 2121,
                "prefecture_id" => 12,
                "city_id" => 599,
                "street_id" => 33647,
                "name" => "土気",
                "hiragana" => "とけ",
                "katakana" => "トケ",
                "katakana_half" => "ﾄｹ",
                "romaji" => "toke",
                "memo" => "",
                "latitude" => "35.530862",
                "altitude" => "140.269728",
            ]);
            
            Station::create([
                "id" => 2122,
                "prefecture_id" => 12,
                "city_id" => 636,
                "street_id" => 36573,
                "name" => "永田",
                "hiragana" => "ながた",
                "katakana" => "ナガタ",
                "katakana_half" => "ﾅｶﾞﾀ",
                "romaji" => "nagata",
                "memo" => "千葉県",
                "latitude" => "35.503366",
                "altitude" => "140.311086",
            ]);
            
            Station::create([
                "id" => 2123,
                "prefecture_id" => 12,
                "city_id" => 608,
                "street_id" => 34425,
                "name" => "本納",
                "hiragana" => "ほんのう",
                "katakana" => "ホンノウ",
                "katakana_half" => "ﾎﾝﾉｳ",
                "romaji" => "honnou",
                "memo" => "",
                "latitude" => "35.482118",
                "altitude" => "140.307421",
            ]);
            
            Station::create([
                "id" => 2124,
                "prefecture_id" => 12,
                "city_id" => 608,
                "street_id" => null,
                "name" => "新茂原",
                "hiragana" => "しんもばら",
                "katakana" => "シンモバラ",
                "katakana_half" => "ｼﾝﾓﾊﾞﾗ",
                "romaji" => "shinmobara",
                "memo" => "",
                "latitude" => "35.449538",
                "altitude" => "140.300007",
            ]);
            
            Station::create([
                "id" => 2125,
                "prefecture_id" => 12,
                "city_id" => 608,
                "street_id" => null,
                "name" => "茂原",
                "hiragana" => "もばら",
                "katakana" => "モバラ",
                "katakana_half" => "ﾓﾊﾞﾗ",
                "romaji" => "mobara",
                "memo" => "",
                "latitude" => "35.426875",
                "altitude" => "140.303952",
            ]);
            
            Station::create([
                "id" => 2126,
                "prefecture_id" => 12,
                "city_id" => 618,
                "street_id" => null,
                "name" => "八積",
                "hiragana" => "やつみ",
                "katakana" => "ヤツミ",
                "katakana_half" => "ﾔﾂﾐ",
                "romaji" => "yatsumi",
                "memo" => "",
                "latitude" => "35.403739",
                "altitude" => "140.345588",
            ]);
            
            Station::create([
                "id" => 2127,
                "prefecture_id" => 12,
                "city_id" => 606,
                "street_id" => 34181,
                "name" => "上総一ノ宮",
                "hiragana" => "かずさいちのみや",
                "katakana" => "カズサイチノミヤ",
                "katakana_half" => "ｶｽﾞｻｲﾁﾉﾐﾔ",
                "romaji" => "kazusaichinomiya",
                "memo" => "",
                "latitude" => "35.373659",
                "altitude" => "140.365060",
            ]);
            
            Station::create([
                "id" => 2128,
                "prefecture_id" => 12,
                "city_id" => 645,
                "street_id" => 36827,
                "name" => "東浪見",
                "hiragana" => "とらみ",
                "katakana" => "トラミ",
                "katakana_half" => "ﾄﾗﾐ",
                "romaji" => "torami",
                "memo" => "",
                "latitude" => "35.347106",
                "altitude" => "140.376699",
            ]);
            
            Station::create([
                "id" => 2129,
                "prefecture_id" => 12,
                "city_id" => 598,
                "street_id" => 33574,
                "name" => "太東",
                "hiragana" => "たいとう",
                "katakana" => "タイトウ",
                "katakana_half" => "ﾀｲﾄｳ",
                "romaji" => "taitou",
                "memo" => "",
                "latitude" => "35.319915",
                "altitude" => "140.381089",
            ]);
            
            Station::create([
                "id" => 2130,
                "prefecture_id" => 12,
                "city_id" => 635,
                "street_id" => 36532,
                "name" => "長者町",
                "hiragana" => "ちょうじゃまち",
                "katakana" => "チョウジャマチ",
                "katakana_half" => "ﾁｮｳｼﾞｬﾏﾁ",
                "romaji" => "choujamachi",
                "memo" => "",
                "latitude" => "35.295861",
                "altitude" => "140.385062",
            ]);
            
            Station::create([
                "id" => 2131,
                "prefecture_id" => 12,
                "city_id" => 601,
                "street_id" => 33802,
                "name" => "三門",
                "hiragana" => "みかど",
                "katakana" => "ミカド",
                "katakana_half" => "ﾐｶﾄﾞ",
                "romaji" => "mikado",
                "memo" => "",
                "latitude" => "35.282335",
                "altitude" => "140.391590",
            ]);
            
            Station::create([
                "id" => 2132,
                "prefecture_id" => 12,
                "city_id" => 635,
                "street_id" => 36482,
                "name" => "大原",
                "hiragana" => "おおはら",
                "katakana" => "オオハラ",
                "katakana_half" => "ｵｵﾊﾗ",
                "romaji" => "oohara",
                "memo" => "千葉県",
                "latitude" => "35.251062",
                "altitude" => "140.390925",
            ]);
            
            Station::create([
                "id" => 2133,
                "prefecture_id" => 12,
                "city_id" => 596,
                "street_id" => 33523,
                "name" => "浪花",
                "hiragana" => "なみはな",
                "katakana" => "ナミハナ",
                "katakana_half" => "ﾅﾐﾊﾅ",
                "romaji" => "namihana",
                "memo" => "",
                "latitude" => "35.222648",
                "altitude" => "140.379455",
            ]);
            
            Station::create([
                "id" => 2134,
                "prefecture_id" => 12,
                "city_id" => 652,
                "street_id" => null,
                "name" => "御宿",
                "hiragana" => "おんじゅく",
                "katakana" => "オンジュク",
                "katakana_half" => "ｵﾝｼﾞｭｸ",
                "romaji" => "onjuku",
                "memo" => "",
                "latitude" => "35.188012",
                "altitude" => "140.351986",
            ]);
            
            Station::create([
                "id" => 2135,
                "prefecture_id" => 12,
                "city_id" => 615,
                "street_id" => null,
                "name" => "勝浦",
                "hiragana" => "かつうら",
                "katakana" => "カツウラ",
                "katakana_half" => "ｶﾂｳﾗ",
                "romaji" => "katsuura",
                "memo" => "",
                "latitude" => "35.153042",
                "altitude" => "140.312936",
            ]);
            
            Station::create([
                "id" => 2136,
                "prefecture_id" => 12,
                "city_id" => 615,
                "street_id" => 35042,
                "name" => "鵜原",
                "hiragana" => "うばら",
                "katakana" => "ウバラ",
                "katakana_half" => "ｳﾊﾞﾗ",
                "romaji" => "ubara",
                "memo" => "",
                "latitude" => "35.140821",
                "altitude" => "140.278495",
            ]);
            
            Station::create([
                "id" => 2137,
                "prefecture_id" => 12,
                "city_id" => 606,
                "street_id" => 34181,
                "name" => "上総興津",
                "hiragana" => "かずさおきつ",
                "katakana" => "カズサオキツ",
                "katakana_half" => "ｶｽﾞｻｵｷﾂ",
                "romaji" => "kazusaokitsu",
                "memo" => "",
                "latitude" => "35.137210",
                "altitude" => "140.250942",
            ]);
            
            Station::create([
                "id" => 2138,
                "prefecture_id" => 12,
                "city_id" => 615,
                "street_id" => 35076,
                "name" => "行川アイランド",
                "hiragana" => "なめがわあいらんど",
                "katakana" => "ナメガワアイランド",
                "katakana_half" => "ﾅﾒｶﾞﾜｱｲﾗﾝﾄﾞ",
                "romaji" => "namegawaairando",
                "memo" => "",
                "latitude" => "35.118295",
                "altitude" => "140.226223",
            ]);
            
            Station::create([
                "id" => 2139,
                "prefecture_id" => 12,
                "city_id" => 653,
                "street_id" => null,
                "name" => "安房小湊",
                "hiragana" => "あわこみなと",
                "katakana" => "アワコミナト",
                "katakana_half" => "ｱﾜｺﾐﾅﾄ",
                "romaji" => "awakominato",
                "memo" => "",
                "latitude" => "35.128571",
                "altitude" => "140.190364",
            ]);
            
            Station::create([
                "id" => 2140,
                "prefecture_id" => 12,
                "city_id" => 653,
                "street_id" => null,
                "name" => "安房天津",
                "hiragana" => "あわあまつ",
                "katakana" => "アワアマツ",
                "katakana_half" => "ｱﾜｱﾏﾂ",
                "romaji" => "awaamatsu",
                "memo" => "",
                "latitude" => "35.125459",
                "altitude" => "140.154505",
            ]);
            
            Station::create([
                "id" => 2141,
                "prefecture_id" => 12,
                "city_id" => 653,
                "street_id" => null,
                "name" => "安房鴨川",
                "hiragana" => "あわかもがわ",
                "katakana" => "アワカモガワ",
                "katakana_half" => "ｱﾜｶﾓｶﾞﾜ",
                "romaji" => "awakamogawa",
                "memo" => "",
                "latitude" => "35.107571",
                "altitude" => "140.103816",
            ]);
            
            Station::create([
                "id" => 2142,
                "prefecture_id" => 12,
                "city_id" => 595,
                "street_id" => 33484,
                "name" => "浜野",
                "hiragana" => "はまの",
                "katakana" => "ハマノ",
                "katakana_half" => "ﾊﾏﾉ",
                "romaji" => "hamano",
                "memo" => "",
                "latitude" => "35.551997",
                "altitude" => "140.132238",
            ]);
            
            Station::create([
                "id" => 2143,
                "prefecture_id" => 12,
                "city_id" => 601,
                "street_id" => 33815,
                "name" => "八幡宿",
                "hiragana" => "やわたじゅく",
                "katakana" => "ヤワタジュク",
                "katakana_half" => "ﾔﾜﾀｼﾞｭｸ",
                "romaji" => "yawatajuku",
                "memo" => "",
                "latitude" => "35.536331",
                "altitude" => "140.120073",
            ]);
            
            Station::create([
                "id" => 2144,
                "prefecture_id" => 12,
                "city_id" => 616,
                "street_id" => 35165,
                "name" => "五井",
                "hiragana" => "ごい",
                "katakana" => "ゴイ",
                "katakana_half" => "ｺﾞｲ",
                "romaji" => "goi",
                "memo" => "",
                "latitude" => "35.513306",
                "altitude" => "140.089632",
            ]);
            
            Station::create([
                "id" => 2145,
                "prefecture_id" => 12,
                "city_id" => 616,
                "street_id" => 35096,
                "name" => "姉ケ崎",
                "hiragana" => "あねがさき",
                "katakana" => "アネガサキ",
                "katakana_half" => "ｱﾈｶﾞｻｷ",
                "romaji" => "anegasaki",
                "memo" => "",
                "latitude" => "35.478614",
                "altitude" => "140.041749",
            ]);
            
            Station::create([
                "id" => 2146,
                "prefecture_id" => 12,
                "city_id" => 626,
                "street_id" => 35890,
                "name" => "長浦",
                "hiragana" => "ながうら",
                "katakana" => "ナガウラ",
                "katakana_half" => "ﾅｶﾞｳﾗ",
                "romaji" => "nagaura",
                "memo" => "千葉県",
                "latitude" => "35.450478",
                "altitude" => "139.995671",
            ]);
            
            Station::create([
                "id" => 2147,
                "prefecture_id" => 12,
                "city_id" => 626,
                "street_id" => null,
                "name" => "袖ケ浦",
                "hiragana" => "そでがうら",
                "katakana" => "ソデガウラ",
                "katakana_half" => "ｿﾃﾞｶﾞｳﾗ",
                "romaji" => "sodegaura",
                "memo" => "",
                "latitude" => "35.432173",
                "altitude" => "139.957869",
            ]);
            
            Station::create([
                "id" => 2148,
                "prefecture_id" => 12,
                "city_id" => 595,
                "street_id" => 33468,
                "name" => "巌根",
                "hiragana" => "いわね",
                "katakana" => "イワネ",
                "katakana_half" => "ｲﾜﾈ",
                "romaji" => "iwane",
                "memo" => "",
                "latitude" => "35.414286",
                "altitude" => "139.933260",
            ]);
            
            Station::create([
                "id" => 2149,
                "prefecture_id" => 12,
                "city_id" => 605,
                "street_id" => null,
                "name" => "木更津",
                "hiragana" => "きさらづ",
                "katakana" => "キサラヅ",
                "katakana_half" => "ｷｻﾗﾂﾞ",
                "romaji" => "kisarazu",
                "memo" => "",
                "latitude" => "35.381595",
                "altitude" => "139.926236",
            ]);
            
            Station::create([
                "id" => 2150,
                "prefecture_id" => 12,
                "city_id" => 622,
                "street_id" => null,
                "name" => "君津",
                "hiragana" => "きみつ",
                "katakana" => "キミツ",
                "katakana_half" => "ｷﾐﾂ",
                "romaji" => "kimitsu",
                "memo" => "",
                "latitude" => "35.333627",
                "altitude" => "139.895185",
            ]);
            
            Station::create([
                "id" => 2151,
                "prefecture_id" => 12,
                "city_id" => 595,
                "street_id" => 33436,
                "name" => "青堀",
                "hiragana" => "あおほり",
                "katakana" => "アオホリ",
                "katakana_half" => "ｱｵﾎﾘ",
                "romaji" => "aohori",
                "memo" => "",
                "latitude" => "35.330405",
                "altitude" => "139.858270",
            ]);
            
            Station::create([
                "id" => 2152,
                "prefecture_id" => 12,
                "city_id" => 631,
                "street_id" => 36123,
                "name" => "大貫",
                "hiragana" => "おおぬき",
                "katakana" => "オオヌキ",
                "katakana_half" => "ｵｵﾇｷ",
                "romaji" => "oonuki",
                "memo" => "",
                "latitude" => "35.290992",
                "altitude" => "139.855634",
            ]);
            
            Station::create([
                "id" => 2153,
                "prefecture_id" => 12,
                "city_id" => 623,
                "street_id" => 35759,
                "name" => "佐貫町",
                "hiragana" => "さぬきまち",
                "katakana" => "サヌキマチ",
                "katakana_half" => "ｻﾇｷﾏﾁ",
                "romaji" => "sanukimachi",
                "memo" => "",
                "latitude" => "35.260578",
                "altitude" => "139.876078",
            ]);
            
            Station::create([
                "id" => 2154,
                "prefecture_id" => 12,
                "city_id" => 606,
                "street_id" => 34181,
                "name" => "上総湊",
                "hiragana" => "かずさみなと",
                "katakana" => "カズサミナト",
                "katakana_half" => "ｶｽﾞｻﾐﾅﾄ",
                "romaji" => "kazusaminato",
                "memo" => "",
                "latitude" => "35.222249",
                "altitude" => "139.871330",
            ]);
            
            Station::create([
                "id" => 2155,
                "prefecture_id" => 12,
                "city_id" => 623,
                "street_id" => 35771,
                "name" => "竹岡",
                "hiragana" => "たけおか",
                "katakana" => "タケオカ",
                "katakana_half" => "ﾀｹｵｶ",
                "romaji" => "takeoka",
                "memo" => "",
                "latitude" => "35.197641",
                "altitude" => "139.829890",
            ]);
            
            Station::create([
                "id" => 2156,
                "prefecture_id" => 12,
                "city_id" => 600,
                "street_id" => null,
                "name" => "浜金谷",
                "hiragana" => "はまかなや",
                "katakana" => "ハマカナヤ",
                "katakana_half" => "ﾊﾏｶﾅﾔ",
                "romaji" => "hamakanaya",
                "memo" => "",
                "latitude" => "35.168087",
                "altitude" => "139.822337",
            ]);
            
            Station::create([
                "id" => 2157,
                "prefecture_id" => 12,
                "city_id" => 626,
                "street_id" => 35872,
                "name" => "保田",
                "hiragana" => "ほた",
                "katakana" => "ホタ",
                "katakana_half" => "ﾎﾀ",
                "romaji" => "hota",
                "memo" => "千葉県",
                "latitude" => "35.141007",
                "altitude" => "139.838393",
            ]);
            
            Station::create([
                "id" => 2158,
                "prefecture_id" => 12,
                "city_id" => 653,
                "street_id" => null,
                "name" => "安房勝山",
                "hiragana" => "あわかつやま",
                "katakana" => "アワカツヤマ",
                "katakana_half" => "ｱﾜｶﾂﾔﾏ",
                "romaji" => "awakatsuyama",
                "memo" => "",
                "latitude" => "35.113705",
                "altitude" => "139.833339",
            ]);
            
            Station::create([
                "id" => 2159,
                "prefecture_id" => 12,
                "city_id" => 612,
                "street_id" => 34810,
                "name" => "岩井",
                "hiragana" => "いわい",
                "katakana" => "イワイ",
                "katakana_half" => "ｲﾜｲ",
                "romaji" => "iwai",
                "memo" => "",
                "latitude" => "35.092569",
                "altitude" => "139.849671",
            ]);
            
            Station::create([
                "id" => 2160,
                "prefecture_id" => 12,
                "city_id" => 609,
                "street_id" => 34535,
                "name" => "富浦",
                "hiragana" => "とみうら",
                "katakana" => "トミウラ",
                "katakana_half" => "ﾄﾐｳﾗ",
                "romaji" => "tomiura",
                "memo" => "千葉県",
                "latitude" => "35.045268",
                "altitude" => "139.837813",
            ]);
            
            Station::create([
                "id" => 2161,
                "prefecture_id" => 12,
                "city_id" => 604,
                "street_id" => 34043,
                "name" => "那古船形",
                "hiragana" => "なこふなかた",
                "katakana" => "ナコフナカタ",
                "katakana_half" => "ﾅｺﾌﾅｶﾀ",
                "romaji" => "nakofunakata",
                "memo" => "",
                "latitude" => "35.028464",
                "altitude" => "139.851618",
            ]);
            
            Station::create([
                "id" => 2162,
                "prefecture_id" => 12,
                "city_id" => 604,
                "street_id" => null,
                "name" => "館山",
                "hiragana" => "たてやま",
                "katakana" => "タテヤマ",
                "katakana_half" => "ﾀﾃﾔﾏ",
                "romaji" => "tateyama",
                "memo" => "",
                "latitude" => "34.995857",
                "altitude" => "139.861980",
            ]);
            
            Station::create([
                "id" => 2163,
                "prefecture_id" => 12,
                "city_id" => 642,
                "street_id" => null,
                "name" => "九重",
                "hiragana" => "ここのえ",
                "katakana" => "ココノエ",
                "katakana_half" => "ｺｺﾉｴ",
                "romaji" => "kokonoe",
                "memo" => "",
                "latitude" => "34.997635",
                "altitude" => "139.911143",
            ]);
            
            Station::create([
                "id" => 2164,
                "prefecture_id" => 12,
                "city_id" => 631,
                "street_id" => 36121,
                "name" => "千倉",
                "hiragana" => "ちくら",
                "katakana" => "チクラ",
                "katakana_half" => "ﾁｸﾗ",
                "romaji" => "chikura",
                "memo" => "",
                "latitude" => "34.976694",
                "altitude" => "139.954502",
            ]);
            
            Station::create([
                "id" => 2165,
                "prefecture_id" => 12,
                "city_id" => 595,
                "street_id" => null,
                "name" => "千歳",
                "hiragana" => "ちとせ",
                "katakana" => "チトセ",
                "katakana_half" => "ﾁﾄｾ",
                "romaji" => "chitose",
                "memo" => "千葉県",
                "latitude" => "34.991609",
                "altitude" => "139.966528",
            ]);
            
            Station::create([
                "id" => 2166,
                "prefecture_id" => 12,
                "city_id" => 603,
                "street_id" => 33986,
                "name" => "南三原",
                "hiragana" => "みなみはら",
                "katakana" => "ミナミハラ",
                "katakana_half" => "ﾐﾅﾐﾊﾗ",
                "romaji" => "minamihara",
                "memo" => "",
                "latitude" => "35.021023",
                "altitude" => "139.979220",
            ]);
            
            Station::create([
                "id" => 2167,
                "prefecture_id" => 12,
                "city_id" => 599,
                "street_id" => 33639,
                "name" => "和田浦",
                "hiragana" => "わだうら",
                "katakana" => "ワダウラ",
                "katakana_half" => "ﾜﾀﾞｳﾗ",
                "romaji" => "wadaura",
                "memo" => "",
                "latitude" => "35.041827",
                "altitude" => "140.019549",
            ]);
            
            Station::create([
                "id" => 2168,
                "prefecture_id" => 12,
                "city_id" => 620,
                "street_id" => 35483,
                "name" => "江見",
                "hiragana" => "えみ",
                "katakana" => "エミ",
                "katakana_half" => "ｴﾐ",
                "romaji" => "emi",
                "memo" => "",
                "latitude" => "35.062437",
                "altitude" => "140.061211",
            ]);
            
            Station::create([
                "id" => 2169,
                "prefecture_id" => 12,
                "city_id" => 620,
                "street_id" => 35536,
                "name" => "太海",
                "hiragana" => "ふとみ",
                "katakana" => "フトミ",
                "katakana_half" => "ﾌﾄﾐ",
                "romaji" => "futomi",
                "memo" => "",
                "latitude" => "35.081824",
                "altitude" => "140.096262",
            ]);
            
            Station::create([
                "id" => 2170,
                "prefecture_id" => 12,
                "city_id" => 605,
                "street_id" => 34099,
                "name" => "祇園",
                "hiragana" => "ぎおん",
                "katakana" => "ギオン",
                "katakana_half" => "ｷﾞｵﾝ",
                "romaji" => "gion",
                "memo" => "千葉県",
                "latitude" => "35.391511",
                "altitude" => "139.948317",
            ]);
            
            Station::create([
                "id" => 2171,
                "prefecture_id" => 12,
                "city_id" => 606,
                "street_id" => 34181,
                "name" => "上総清川",
                "hiragana" => "かずさきよかわ",
                "katakana" => "カズサキヨカワ",
                "katakana_half" => "ｶｽﾞｻｷﾖｶﾜ",
                "romaji" => "kazusakiyokawa",
                "memo" => "",
                "latitude" => "35.390927",
                "altitude" => "139.965565",
            ]);
            
            Station::create([
                "id" => 2172,
                "prefecture_id" => 12,
                "city_id" => 611,
                "street_id" => null,
                "name" => "東清川",
                "hiragana" => "ひがしきよかわ",
                "katakana" => "ヒガシキヨカワ",
                "katakana_half" => "ﾋｶﾞｼｷﾖｶﾜ",
                "romaji" => "higashikiyokawa",
                "memo" => "",
                "latitude" => "35.390011",
                "altitude" => "139.985814",
            ]);
            
            Station::create([
                "id" => 2173,
                "prefecture_id" => 12,
                "city_id" => 626,
                "street_id" => 35903,
                "name" => "横田",
                "hiragana" => "よこた",
                "katakana" => "ヨコタ",
                "katakana_half" => "ﾖｺﾀ",
                "romaji" => "yokota",
                "memo" => "",
                "latitude" => "35.386068",
                "altitude" => "140.020311",
            ]);
            
            Station::create([
                "id" => 2174,
                "prefecture_id" => 12,
                "city_id" => 611,
                "street_id" => null,
                "name" => "東横田",
                "hiragana" => "ひがしよこた",
                "katakana" => "ヒガシヨコタ",
                "katakana_half" => "ﾋｶﾞｼﾖｺﾀ",
                "romaji" => "higashiyokota",
                "memo" => "",
                "latitude" => "35.386235",
                "altitude" => "140.036448",
            ]);
            
            Station::create([
                "id" => 2175,
                "prefecture_id" => 12,
                "city_id" => 601,
                "street_id" => 33790,
                "name" => "馬来田",
                "hiragana" => "まくた",
                "katakana" => "マクタ",
                "katakana_half" => "ﾏｸﾀ",
                "romaji" => "makuta",
                "memo" => "",
                "latitude" => "35.366654",
                "altitude" => "140.058669",
            ]);
            
            Station::create([
                "id" => 2176,
                "prefecture_id" => 12,
                "city_id" => 605,
                "street_id" => 34122,
                "name" => "下郡",
                "hiragana" => "しもごおり",
                "katakana" => "シモゴオリ",
                "katakana_half" => "ｼﾓｺﾞｵﾘ",
                "romaji" => "shimogoori",
                "memo" => "",
                "latitude" => "35.355211",
                "altitude" => "140.055475",
            ]);
            
            Station::create([
                "id" => 2177,
                "prefecture_id" => 12,
                "city_id" => 622,
                "street_id" => 35609,
                "name" => "小櫃",
                "hiragana" => "おびつ",
                "katakana" => "オビツ",
                "katakana_half" => "ｵﾋﾞﾂ",
                "romaji" => "obitsu",
                "memo" => "",
                "latitude" => "35.328352",
                "altitude" => "140.059920",
            ]);
            
            Station::create([
                "id" => 2178,
                "prefecture_id" => 12,
                "city_id" => 622,
                "street_id" => 35663,
                "name" => "俵田",
                "hiragana" => "たわらだ",
                "katakana" => "タワラダ",
                "katakana_half" => "ﾀﾜﾗﾀﾞ",
                "romaji" => "tawarada",
                "memo" => "",
                "latitude" => "35.314493",
                "altitude" => "140.061422",
            ]);
            
            Station::create([
                "id" => 2179,
                "prefecture_id" => 12,
                "city_id" => 622,
                "street_id" => 35633,
                "name" => "久留里",
                "hiragana" => "くるり",
                "katakana" => "クルリ",
                "katakana_half" => "ｸﾙﾘ",
                "romaji" => "kururi",
                "memo" => "",
                "latitude" => "35.295829",
                "altitude" => "140.075782",
            ]);
            
            Station::create([
                "id" => 2180,
                "prefecture_id" => 12,
                "city_id" => 599,
                "street_id" => 33652,
                "name" => "平山",
                "hiragana" => "ひらやま",
                "katakana" => "ヒラヤマ",
                "katakana_half" => "ﾋﾗﾔﾏ",
                "romaji" => "hirayama",
                "memo" => "",
                "latitude" => "35.274303",
                "altitude" => "140.064867",
            ]);
            
            Station::create([
                "id" => 2181,
                "prefecture_id" => 12,
                "city_id" => 606,
                "street_id" => 34181,
                "name" => "上総松丘",
                "hiragana" => "かずさまつおか",
                "katakana" => "カズサマツオカ",
                "katakana_half" => "ｶｽﾞｻﾏﾂｵｶ",
                "romaji" => "kazusamatsuoka",
                "memo" => "",
                "latitude" => "35.257804",
                "altitude" => "140.064035",
            ]);
            
            Station::create([
                "id" => 2182,
                "prefecture_id" => 12,
                "city_id" => 606,
                "street_id" => 34181,
                "name" => "上総亀山",
                "hiragana" => "かずさかめやま",
                "katakana" => "カズサカメヤマ",
                "katakana_half" => "ｶｽﾞｻｶﾒﾔﾏ",
                "romaji" => "kazusakameyama",
                "memo" => "",
                "latitude" => "35.233058",
                "altitude" => "140.089840",
            ]);
            
            Station::create([
                "id" => 2183,
                "prefecture_id" => 12,
                "city_id" => 602,
                "street_id" => null,
                "name" => "市川",
                "hiragana" => "いちかわ",
                "katakana" => "イチカワ",
                "katakana_half" => "ｲﾁｶﾜ",
                "romaji" => "ichikawa",
                "memo" => "",
                "latitude" => "35.729279",
                "altitude" => "139.907804",
            ]);
            
            Station::create([
                "id" => 2184,
                "prefecture_id" => 12,
                "city_id" => 595,
                "street_id" => 33486,
                "name" => "本八幡",
                "hiragana" => "もとやわた",
                "katakana" => "モトヤワタ",
                "katakana_half" => "ﾓﾄﾔﾜﾀ",
                "romaji" => "motoyawata",
                "memo" => "総武線",
                "latitude" => "35.720920",
                "altitude" => "139.927192",
            ]);
            
            Station::create([
                "id" => 2185,
                "prefecture_id" => 12,
                "city_id" => 595,
                "street_id" => 33435,
                "name" => "下総中山",
                "hiragana" => "しもうさなかやま",
                "katakana" => "シモウサナカヤマ",
                "katakana_half" => "ｼﾓｳｻﾅｶﾔﾏ",
                "romaji" => "shimousanakayama",
                "memo" => "",
                "latitude" => "35.714281",
                "altitude" => "139.943107",
            ]);
            
            Station::create([
                "id" => 2186,
                "prefecture_id" => 12,
                "city_id" => 603,
                "street_id" => 33960,
                "name" => "西船橋",
                "hiragana" => "にしふなばし",
                "katakana" => "ニシフナバシ",
                "katakana_half" => "ﾆｼﾌﾅﾊﾞｼ",
                "romaji" => "nishifunabashi",
                "memo" => "",
                "latitude" => "35.707199",
                "altitude" => "139.959412",
            ]);
            
            Station::create([
                "id" => 2187,
                "prefecture_id" => 12,
                "city_id" => 603,
                "street_id" => null,
                "name" => "船橋",
                "hiragana" => "ふなばし",
                "katakana" => "フナバシ",
                "katakana_half" => "ﾌﾅﾊﾞｼ",
                "romaji" => "funabashi",
                "memo" => "",
                "latitude" => "35.701701",
                "altitude" => "139.985105",
            ]);
            
            Station::create([
                "id" => 2188,
                "prefecture_id" => 12,
                "city_id" => 603,
                "street_id" => 33965,
                "name" => "東船橋",
                "hiragana" => "ひがしふなばし",
                "katakana" => "ヒガシフナバシ",
                "katakana_half" => "ﾋｶﾞｼﾌﾅﾊﾞｼ",
                "romaji" => "higashifunabashi",
                "memo" => "",
                "latitude" => "35.699839",
                "altitude" => "140.004436",
            ]);
            
            Station::create([
                "id" => 2189,
                "prefecture_id" => 12,
                "city_id" => 613,
                "street_id" => 34878,
                "name" => "津田沼",
                "hiragana" => "つだぬま",
                "katakana" => "ツダヌマ",
                "katakana_half" => "ﾂﾀﾞﾇﾏ",
                "romaji" => "tsudanuma",
                "memo" => "",
                "latitude" => "35.691286",
                "altitude" => "140.020380",
            ]);
            
            Station::create([
                "id" => 2190,
                "prefecture_id" => 12,
                "city_id" => 596,
                "street_id" => 33531,
                "name" => "幕張本郷",
                "hiragana" => "まくはりほんごう",
                "katakana" => "マクハリホンゴウ",
                "katakana_half" => "ﾏｸﾊﾘﾎﾝｺﾞｳ",
                "romaji" => "makuharihongou",
                "memo" => "",
                "latitude" => "35.672788",
                "altitude" => "140.042240",
            ]);
            
            Station::create([
                "id" => 2191,
                "prefecture_id" => 12,
                "city_id" => 596,
                "street_id" => 33530,
                "name" => "幕張",
                "hiragana" => "まくはり",
                "katakana" => "マクハリ",
                "katakana_half" => "ﾏｸﾊﾘ",
                "romaji" => "makuhari",
                "memo" => "",
                "latitude" => "35.659373",
                "altitude" => "140.057961",
            ]);
            
            Station::create([
                "id" => 2192,
                "prefecture_id" => 12,
                "city_id" => 596,
                "street_id" => 33512,
                "name" => "新検見川",
                "hiragana" => "しんけみがわ",
                "katakana" => "シンケミガワ",
                "katakana_half" => "ｼﾝｹﾐｶﾞﾜ",
                "romaji" => "shinkemigawa",
                "memo" => "",
                "latitude" => "35.651818",
                "altitude" => "140.072960",
            ]);
            
            Station::create([
                "id" => 2193,
                "prefecture_id" => 12,
                "city_id" => 597,
                "street_id" => null,
                "name" => "稲毛",
                "hiragana" => "いなげ",
                "katakana" => "イナゲ",
                "katakana_half" => "ｲﾅｹﾞ",
                "romaji" => "inage",
                "memo" => "",
                "latitude" => "35.637182",
                "altitude" => "140.092542",
            ]);
            
            Station::create([
                "id" => 2194,
                "prefecture_id" => 12,
                "city_id" => 628,
                "street_id" => null,
                "name" => "西千葉",
                "hiragana" => "にしちば",
                "katakana" => "ニシチバ",
                "katakana_half" => "ﾆｼﾁﾊﾞ",
                "romaji" => "nishichiba",
                "memo" => "",
                "latitude" => "35.622545",
                "altitude" => "140.103320",
            ]);
            
            Station::create([
                "id" => 2195,
                "prefecture_id" => 12,
                "city_id" => 631,
                "street_id" => null,
                "name" => "南酒々井",
                "hiragana" => "みなみしすい",
                "katakana" => "ミナミシスイ",
                "katakana_half" => "ﾐﾅﾐｼｽｲ",
                "romaji" => "minamishisui",
                "memo" => "",
                "latitude" => "35.704400",
                "altitude" => "140.268192",
            ]);
            
            Station::create([
                "id" => 2196,
                "prefecture_id" => 12,
                "city_id" => 627,
                "street_id" => 35909,
                "name" => "榎戸",
                "hiragana" => "えのきど",
                "katakana" => "エノキド",
                "katakana_half" => "ｴﾉｷﾄﾞ",
                "romaji" => "enokido",
                "memo" => "千葉県",
                "latitude" => "35.684069",
                "altitude" => "140.288136",
            ]);
            
            Station::create([
                "id" => 2197,
                "prefecture_id" => 12,
                "city_id" => 627,
                "street_id" => null,
                "name" => "八街",
                "hiragana" => "やちまた",
                "katakana" => "ヤチマタ",
                "katakana_half" => "ﾔﾁﾏﾀ",
                "romaji" => "yachimata",
                "memo" => "",
                "latitude" => "35.663071",
                "altitude" => "140.317661",
            ]);
            
            Station::create([
                "id" => 2198,
                "prefecture_id" => 12,
                "city_id" => 634,
                "street_id" => 36439,
                "name" => "日向",
                "hiragana" => "ひゅうが",
                "katakana" => "ヒュウガ",
                "katakana_half" => "ﾋｭｳｶﾞ",
                "romaji" => "hyuuga",
                "memo" => "",
                "latitude" => "35.628354",
                "altitude" => "140.362798",
            ]);
            
            Station::create([
                "id" => 2199,
                "prefecture_id" => 12,
                "city_id" => 620,
                "street_id" => 35541,
                "name" => "松尾",
                "hiragana" => "まつお",
                "katakana" => "マツオ",
                "katakana_half" => "ﾏﾂｵ",
                "romaji" => "matsuo",
                "memo" => "千葉県",
                "latitude" => "35.635965",
                "altitude" => "140.457679",
            ]);
            
            Station::create([
                "id" => 2200,
                "prefecture_id" => 12,
                "city_id" => 644,
                "street_id" => null,
                "name" => "横芝",
                "hiragana" => "よこしば",
                "katakana" => "ヨコシバ",
                "katakana_half" => "ﾖｺｼﾊﾞ",
                "romaji" => "yokoshiba",
                "memo" => "",
                "latitude" => "35.661741",
                "altitude" => "140.491258",
            ]);
            
            Station::create([
                "id" => 2201,
                "prefecture_id" => 12,
                "city_id" => 632,
                "street_id" => 36195,
                "name" => "飯倉",
                "hiragana" => "いいぐら",
                "katakana" => "イイグラ",
                "katakana_half" => "ｲｲｸﾞﾗ",
                "romaji" => "iigura",
                "memo" => "",
                "latitude" => "35.685711",
                "altitude" => "140.522422",
            ]);
            
            Station::create([
                "id" => 2202,
                "prefecture_id" => 12,
                "city_id" => 632,
                "street_id" => 36248,
                "name" => "八日市場",
                "hiragana" => "ようかいちば",
                "katakana" => "ヨウカイチバ",
                "katakana_half" => "ﾖｳｶｲﾁﾊﾞ",
                "romaji" => "youkaichiba",
                "memo" => "",
                "latitude" => "35.699266",
                "altitude" => "140.552141",
            ]);
            
            Station::create([
                "id" => 2203,
                "prefecture_id" => 12,
                "city_id" => 610,
                "street_id" => 34655,
                "name" => "干潟",
                "hiragana" => "ひがた",
                "katakana" => "ヒガタ",
                "katakana_half" => "ﾋｶﾞﾀ",
                "romaji" => "higata",
                "memo" => "",
                "latitude" => "35.718293",
                "altitude" => "140.602913",
            ]);
            
            Station::create([
                "id" => 2204,
                "prefecture_id" => 12,
                "city_id" => 612,
                "street_id" => null,
                "name" => "旭",
                "hiragana" => "あさひ",
                "katakana" => "アサヒ",
                "katakana_half" => "ｱｻﾋ",
                "romaji" => "asahi",
                "memo" => "千葉県",
                "latitude" => "35.721821",
                "altitude" => "140.655131",
            ]);
            
            Station::create([
                "id" => 2205,
                "prefecture_id" => 12,
                "city_id" => 609,
                "street_id" => 34460,
                "name" => "飯岡",
                "hiragana" => "いいおか",
                "katakana" => "イイオカ",
                "katakana_half" => "ｲｲｵｶ",
                "romaji" => "iioka",
                "memo" => "",
                "latitude" => "35.729321",
                "altitude" => "140.683712",
            ]);
            
            Station::create([
                "id" => 2206,
                "prefecture_id" => 12,
                "city_id" => 612,
                "street_id" => 34824,
                "name" => "倉橋",
                "hiragana" => "くらはし",
                "katakana" => "クラハシ",
                "katakana_half" => "ｸﾗﾊｼ",
                "romaji" => "kurahashi",
                "memo" => "",
                "latitude" => "35.738042",
                "altitude" => "140.714514",
            ]);
            
            Station::create([
                "id" => 2207,
                "prefecture_id" => 12,
                "city_id" => 601,
                "street_id" => 33749,
                "name" => "猿田",
                "hiragana" => "さるだ",
                "katakana" => "サルダ",
                "katakana_half" => "ｻﾙﾀﾞ",
                "romaji" => "saruda",
                "memo" => "",
                "latitude" => "35.747292",
                "altitude" => "140.737457",
            ]);
            
            Station::create([
                "id" => 2208,
                "prefecture_id" => 12,
                "city_id" => 624,
                "street_id" => 35818,
                "name" => "舞浜",
                "hiragana" => "まいはま",
                "katakana" => "マイハマ",
                "katakana_half" => "ﾏｲﾊﾏ",
                "romaji" => "maihama",
                "memo" => "",
                "latitude" => "35.636122",
                "altitude" => "139.883727",
            ]);
            
            Station::create([
                "id" => 2209,
                "prefecture_id" => 12,
                "city_id" => 624,
                "street_id" => null,
                "name" => "新浦安",
                "hiragana" => "しんうらやす",
                "katakana" => "シンウラヤス",
                "katakana_half" => "ｼﾝｳﾗﾔｽ",
                "romaji" => "shinurayasu",
                "memo" => "",
                "latitude" => "35.649649",
                "altitude" => "139.912918",
            ]);
            
            Station::create([
                "id" => 2210,
                "prefecture_id" => 12,
                "city_id" => 602,
                "street_id" => null,
                "name" => "市川塩浜",
                "hiragana" => "いちかわしおはま",
                "katakana" => "イチカワシオハマ",
                "katakana_half" => "ｲﾁｶﾜｼｵﾊﾏ",
                "romaji" => "ichikawashiohama",
                "memo" => "",
                "latitude" => "35.666565",
                "altitude" => "139.923723",
            ]);
            
            Station::create([
                "id" => 2211,
                "prefecture_id" => 12,
                "city_id" => 602,
                "street_id" => 33883,
                "name" => "二俣新町",
                "hiragana" => "ふたまたしんまち",
                "katakana" => "フタマタシンマチ",
                "katakana_half" => "ﾌﾀﾏﾀｼﾝﾏﾁ",
                "romaji" => "futamatashinmachi",
                "memo" => "",
                "latitude" => "35.691285",
                "altitude" => "139.959468",
            ]);
            
            Station::create([
                "id" => 2212,
                "prefecture_id" => 12,
                "city_id" => 631,
                "street_id" => null,
                "name" => "南船橋",
                "hiragana" => "みなみふなばし",
                "katakana" => "ミナミフナバシ",
                "katakana_half" => "ﾐﾅﾐﾌﾅﾊﾞｼ",
                "romaji" => "minamifunabashi",
                "memo" => "",
                "latitude" => "35.682008",
                "altitude" => "139.995465",
            ]);
            
            Station::create([
                "id" => 2213,
                "prefecture_id" => 12,
                "city_id" => 613,
                "street_id" => null,
                "name" => "新習志野",
                "hiragana" => "しんならしの",
                "katakana" => "シンナラシノ",
                "katakana_half" => "ｼﾝﾅﾗｼﾉ",
                "romaji" => "shinnarashino",
                "memo" => "",
                "latitude" => "35.667426",
                "altitude" => "140.012964",
            ]);
            
            Station::create([
                "id" => 2214,
                "prefecture_id" => 12,
                "city_id" => 620,
                "street_id" => 35537,
                "name" => "海浜幕張",
                "hiragana" => "かいひんまくはり",
                "katakana" => "カイヒンマクハリ",
                "katakana_half" => "ｶｲﾋﾝﾏｸﾊﾘ",
                "romaji" => "kaihinmakuhari",
                "memo" => "",
                "latitude" => "35.648262",
                "altitude" => "140.041963",
            ]);
            
            Station::create([
                "id" => 2215,
                "prefecture_id" => 12,
                "city_id" => 596,
                "street_id" => 33512,
                "name" => "検見川浜",
                "hiragana" => "けみがわはま",
                "katakana" => "ケミガワハマ",
                "katakana_half" => "ｹﾐｶﾞﾜﾊﾏ",
                "romaji" => "kemigawahama",
                "memo" => "",
                "latitude" => "35.637126",
                "altitude" => "140.059212",
            ]);
            
            Station::create([
                "id" => 2216,
                "prefecture_id" => 12,
                "city_id" => 600,
                "street_id" => 33660,
                "name" => "稲毛海岸",
                "hiragana" => "いなげかいがん",
                "katakana" => "イナゲカイガン",
                "katakana_half" => "ｲﾅｹﾞｶｲｶﾞﾝ",
                "romaji" => "inagekaigan",
                "memo" => "",
                "latitude" => "35.629431",
                "altitude" => "140.073933",
            ]);
            
            Station::create([
                "id" => 2217,
                "prefecture_id" => 12,
                "city_id" => 595,
                "street_id" => null,
                "name" => "千葉みなと",
                "hiragana" => "ちばみなと",
                "katakana" => "チバミナト",
                "katakana_half" => "ﾁﾊﾞﾐﾅﾄ",
                "romaji" => "chibaminato",
                "memo" => "",
                "latitude" => "35.606879",
                "altitude" => "140.102682",
            ]);
            
            Station::create([
                "id" => 2218,
                "prefecture_id" => 12,
                "city_id" => 617,
                "street_id" => 35359,
                "name" => "南流山",
                "hiragana" => "みなみながれやま",
                "katakana" => "ミナミナガレヤマ",
                "katakana_half" => "ﾐﾅﾐﾅｶﾞﾚﾔﾏ",
                "romaji" => "minaminagareyama",
                "memo" => "",
                "latitude" => "35.838490",
                "altitude" => "139.903439",
            ]);
            
            Station::create([
                "id" => 2219,
                "prefecture_id" => 12,
                "city_id" => 606,
                "street_id" => 34213,
                "name" => "新松戸",
                "hiragana" => "しんまつど",
                "katakana" => "シンマツド",
                "katakana_half" => "ｼﾝﾏﾂﾄﾞ",
                "romaji" => "shinmatsudo",
                "memo" => "",
                "latitude" => "35.825436",
                "altitude" => "139.921216",
            ]);
            
            Station::create([
                "id" => 2220,
                "prefecture_id" => 12,
                "city_id" => 618,
                "street_id" => null,
                "name" => "新八柱",
                "hiragana" => "しんやはしら",
                "katakana" => "シンヤハシラ",
                "katakana_half" => "ｼﾝﾔﾊｼﾗ",
                "romaji" => "shinyahashira",
                "memo" => "",
                "latitude" => "35.791940",
                "altitude" => "139.938381",
            ]);
            
            Station::create([
                "id" => 2221,
                "prefecture_id" => 12,
                "city_id" => 606,
                "street_id" => 34256,
                "name" => "東松戸",
                "hiragana" => "ひがしまつど",
                "katakana" => "ヒガシマツド",
                "katakana_half" => "ﾋｶﾞｼﾏﾂﾄﾞ",
                "romaji" => "higashimatsudo",
                "memo" => "",
                "latitude" => "35.770443",
                "altitude" => "139.943994",
            ]);
            
            Station::create([
                "id" => 2222,
                "prefecture_id" => 12,
                "city_id" => 602,
                "street_id" => null,
                "name" => "市川大野",
                "hiragana" => "いちかわおおの",
                "katakana" => "イチカワオオノ",
                "katakana_half" => "ｲﾁｶﾜｵｵﾉ",
                "romaji" => "ichikawaoono",
                "memo" => "",
                "latitude" => "35.755138",
                "altitude" => "139.951576",
            ]);
            
            Station::create([
                "id" => 2223,
                "prefecture_id" => 12,
                "city_id" => 603,
                "street_id" => null,
                "name" => "船橋法典",
                "hiragana" => "ふなばしほうてん",
                "katakana" => "フナバシホウテン",
                "katakana_half" => "ﾌﾅﾊﾞｼﾎｳﾃﾝ",
                "romaji" => "funabashihouten",
                "memo" => "",
                "latitude" => "35.730836",
                "altitude" => "139.966576",
            ]);
            
            Station::create([
                "id" => 2224,
                "prefecture_id" => 12,
                "city_id" => 606,
                "street_id" => 34187,
                "name" => "北松戸",
                "hiragana" => "きたまつど",
                "katakana" => "キタマツド",
                "katakana_half" => "ｷﾀﾏﾂﾄﾞ",
                "romaji" => "kitamatsudo",
                "memo" => "",
                "latitude" => "35.800550",
                "altitude" => "139.911828",
            ]);
            
            Station::create([
                "id" => 2225,
                "prefecture_id" => 12,
                "city_id" => 606,
                "street_id" => 34237,
                "name" => "馬橋",
                "hiragana" => "まばし",
                "katakana" => "マバシ",
                "katakana_half" => "ﾏﾊﾞｼ",
                "romaji" => "mabashi",
                "memo" => "",
                "latitude" => "35.811604",
                "altitude" => "139.917355",
            ]);
            
            Station::create([
                "id" => 2226,
                "prefecture_id" => 12,
                "city_id" => 601,
                "street_id" => 33735,
                "name" => "北小金",
                "hiragana" => "きたこがね",
                "katakana" => "キタコガネ",
                "katakana_half" => "ｷﾀｺｶﾞﾈ",
                "romaji" => "kitakogane",
                "memo" => "",
                "latitude" => "35.833408",
                "altitude" => "139.931297",
            ]);
            
            Station::create([
                "id" => 2227,
                "prefecture_id" => 12,
                "city_id" => 614,
                "street_id" => 35014,
                "name" => "南柏",
                "hiragana" => "みなみかしわ",
                "katakana" => "ミナミカシワ",
                "katakana_half" => "ﾐﾅﾐｶｼﾜ",
                "romaji" => "minamikashiwa",
                "memo" => "",
                "latitude" => "35.844602",
                "altitude" => "139.954267",
            ]);
            
            Station::create([
                "id" => 2228,
                "prefecture_id" => 12,
                "city_id" => 614,
                "street_id" => 34930,
                "name" => "北柏",
                "hiragana" => "きたかしわ",
                "katakana" => "キタカシワ",
                "katakana_half" => "ｷﾀｶｼﾜ",
                "romaji" => "kitakashiwa",
                "memo" => "",
                "latitude" => "35.875598",
                "altitude" => "139.988040",
            ]);
            
            Station::create([
                "id" => 2229,
                "prefecture_id" => 12,
                "city_id" => 596,
                "street_id" => null,
                "name" => "川間",
                "hiragana" => "かわま",
                "katakana" => "カワマ",
                "katakana_half" => "ｶﾜﾏ",
                "romaji" => "kawama",
                "memo" => "",
                "latitude" => "35.979168",
                "altitude" => "139.833855",
            ]);
            
            Station::create([
                "id" => 2230,
                "prefecture_id" => 12,
                "city_id" => 607,
                "street_id" => 34327,
                "name" => "七光台",
                "hiragana" => "ななこうだい",
                "katakana" => "ナナコウダイ",
                "katakana_half" => "ﾅﾅｺｳﾀﾞｲ",
                "romaji" => "nanakoudai",
                "memo" => "",
                "latitude" => "35.970808",
                "altitude" => "139.852798",
            ]);
            
            Station::create([
                "id" => 2231,
                "prefecture_id" => 12,
                "city_id" => 607,
                "street_id" => 34309,
                "name" => "清水公園",
                "hiragana" => "しみずこうえん",
                "katakana" => "シミズコウエン",
                "katakana_half" => "ｼﾐｽﾞｺｳｴﾝ",
                "romaji" => "shimizukouen",
                "memo" => "",
                "latitude" => "35.959253",
                "altitude" => "139.860047",
            ]);
            
            Station::create([
                "id" => 2232,
                "prefecture_id" => 12,
                "city_id" => 601,
                "street_id" => 33714,
                "name" => "愛宕",
                "hiragana" => "あたご",
                "katakana" => "アタゴ",
                "katakana_half" => "ｱﾀｺﾞ",
                "romaji" => "atago",
                "memo" => "千葉県",
                "latitude" => "35.950144",
                "altitude" => "139.864826",
            ]);
            
            Station::create([
                "id" => 2233,
                "prefecture_id" => 12,
                "city_id" => 607,
                "street_id" => null,
                "name" => "野田市",
                "hiragana" => "のだし",
                "katakana" => "ノダシ",
                "katakana_half" => "ﾉﾀﾞｼ",
                "romaji" => "nodashi",
                "memo" => "",
                "latitude" => "35.943395",
                "altitude" => "139.870798",
            ]);
            
            Station::create([
                "id" => 2234,
                "prefecture_id" => 12,
                "city_id" => 607,
                "street_id" => 34353,
                "name" => "梅郷",
                "hiragana" => "うめさと",
                "katakana" => "ウメサト",
                "katakana_half" => "ｳﾒｻﾄ",
                "romaji" => "umesato",
                "memo" => "",
                "latitude" => "35.931313",
                "altitude" => "139.891268",
            ]);
            
            Station::create([
                "id" => 2235,
                "prefecture_id" => 12,
                "city_id" => 595,
                "street_id" => null,
                "name" => "運河",
                "hiragana" => "うんが",
                "katakana" => "ウンガ",
                "katakana_half" => "ｳﾝｶﾞ",
                "romaji" => "unga",
                "memo" => "",
                "latitude" => "35.914038",
                "altitude" => "139.906129",
            ]);
            
            Station::create([
                "id" => 2236,
                "prefecture_id" => 12,
                "city_id" => 617,
                "street_id" => 35312,
                "name" => "江戸川台",
                "hiragana" => "えどがわだい",
                "katakana" => "エドガワダイ",
                "katakana_half" => "ｴﾄﾞｶﾞﾜﾀﾞｲ",
                "romaji" => "edogawadai",
                "memo" => "",
                "latitude" => "35.897484",
                "altitude" => "139.910352",
            ]);
            
            Station::create([
                "id" => 2237,
                "prefecture_id" => 12,
                "city_id" => 617,
                "street_id" => 35340,
                "name" => "初石",
                "hiragana" => "はついし",
                "katakana" => "ハツイシ",
                "katakana_half" => "ﾊﾂｲｼ",
                "romaji" => "hatsuishi",
                "memo" => "",
                "latitude" => "35.884068",
                "altitude" => "139.917602",
            ]);
            
            Station::create([
                "id" => 2238,
                "prefecture_id" => 12,
                "city_id" => 617,
                "street_id" => null,
                "name" => "流山おおたかの森",
                "hiragana" => "ながれやまおおたかのもり",
                "katakana" => "ナガレヤマオオタカノモリ",
                "katakana_half" => "ﾅｶﾞﾚﾔﾏｵｵﾀｶﾉﾓﾘ",
                "romaji" => "nagareyamaootakanomori",
                "memo" => "",
                "latitude" => "35.872098",
                "altitude" => "139.925657",
            ]);
            
            Station::create([
                "id" => 2239,
                "prefecture_id" => 12,
                "city_id" => 614,
                "street_id" => 34969,
                "name" => "豊四季",
                "hiragana" => "とよしき",
                "katakana" => "トヨシキ",
                "katakana_half" => "ﾄﾖｼｷ",
                "romaji" => "toyoshiki",
                "memo" => "",
                "latitude" => "35.866543",
                "altitude" => "139.939573",
            ]);
            
            Station::create([
                "id" => 2240,
                "prefecture_id" => 12,
                "city_id" => 614,
                "street_id" => 34944,
                "name" => "新柏",
                "hiragana" => "しんかしわ",
                "katakana" => "シンカシワ",
                "katakana_half" => "ｼﾝｶｼﾜ",
                "romaji" => "shinkashiwa",
                "memo" => "",
                "latitude" => "35.838463",
                "altitude" => "139.966571",
            ]);
            
            Station::create([
                "id" => 2241,
                "prefecture_id" => 12,
                "city_id" => 614,
                "street_id" => 35006,
                "name" => "増尾",
                "hiragana" => "ますお",
                "katakana" => "マスオ",
                "katakana_half" => "ﾏｽｵ",
                "romaji" => "masuo",
                "memo" => "",
                "latitude" => "35.829575",
                "altitude" => "139.976766",
            ]);
            
            Station::create([
                "id" => 2242,
                "prefecture_id" => 12,
                "city_id" => 614,
                "street_id" => 34937,
                "name" => "逆井",
                "hiragana" => "さかさい",
                "katakana" => "サカサイ",
                "katakana_half" => "ｻｶｻｲ",
                "romaji" => "sakasai",
                "memo" => "",
                "latitude" => "35.823215",
                "altitude" => "139.983905",
            ]);
            
            Station::create([
                "id" => 2243,
                "prefecture_id" => 12,
                "city_id" => 605,
                "street_id" => 34135,
                "name" => "高柳",
                "hiragana" => "たかやなぎ",
                "katakana" => "タカヤナギ",
                "katakana_half" => "ﾀｶﾔﾅｷﾞ",
                "romaji" => "takayanagi",
                "memo" => "",
                "latitude" => "35.808439",
                "altitude" => "139.999043",
            ]);
            
            Station::create([
                "id" => 2244,
                "prefecture_id" => 12,
                "city_id" => 606,
                "street_id" => 34204,
                "name" => "六実",
                "hiragana" => "むつみ",
                "katakana" => "ムツミ",
                "katakana_half" => "ﾑﾂﾐ",
                "romaji" => "mutsumi",
                "memo" => "",
                "latitude" => "35.793691",
                "altitude" => "139.999099",
            ]);
            
            Station::create([
                "id" => 2245,
                "prefecture_id" => 12,
                "city_id" => 621,
                "street_id" => 35562,
                "name" => "新鎌ケ谷",
                "hiragana" => "しんかまがや",
                "katakana" => "シンカマガヤ",
                "katakana_half" => "ｼﾝｶﾏｶﾞﾔ",
                "romaji" => "shinkamagaya",
                "memo" => "",
                "latitude" => "35.779609",
                "altitude" => "139.998989",
            ]);
            
            Station::create([
                "id" => 2246,
                "prefecture_id" => 12,
                "city_id" => 621,
                "street_id" => null,
                "name" => "鎌ケ谷",
                "hiragana" => "かまがや",
                "katakana" => "カマガヤ",
                "katakana_half" => "ｶﾏｶﾞﾔ",
                "romaji" => "kamagaya",
                "memo" => "",
                "latitude" => "35.763721",
                "altitude" => "139.997295",
            ]);
            
            Station::create([
                "id" => 2247,
                "prefecture_id" => 12,
                "city_id" => 621,
                "street_id" => 35576,
                "name" => "馬込沢",
                "hiragana" => "まごめざわ",
                "katakana" => "マゴメザワ",
                "katakana_half" => "ﾏｺﾞﾒｻﾞﾜ",
                "romaji" => "magomezawa",
                "memo" => "",
                "latitude" => "35.742057",
                "altitude" => "139.992463",
            ]);
            
            Station::create([
                "id" => 2248,
                "prefecture_id" => 12,
                "city_id" => 598,
                "street_id" => 33582,
                "name" => "塚田",
                "hiragana" => "つかだ",
                "katakana" => "ツカダ",
                "katakana_half" => "ﾂｶﾀﾞ",
                "romaji" => "tsukada",
                "memo" => "",
                "latitude" => "35.722003",
                "altitude" => "139.982825",
            ]);
            
            Station::create([
                "id" => 2249,
                "prefecture_id" => 12,
                "city_id" => 603,
                "street_id" => null,
                "name" => "新船橋",
                "hiragana" => "しんふなばし",
                "katakana" => "シンフナバシ",
                "katakana_half" => "ｼﾝﾌﾅﾊﾞｼ",
                "romaji" => "shinfunabashi",
                "memo" => "",
                "latitude" => "35.711338",
                "altitude" => "139.979799",
            ]);
            
            Station::create([
                "id" => 2250,
                "prefecture_id" => 12,
                "city_id" => 602,
                "street_id" => 33846,
                "name" => "国府台",
                "hiragana" => "こうのだい",
                "katakana" => "コウノダイ",
                "katakana_half" => "ｺｳﾉﾀﾞｲ",
                "romaji" => "kounodai",
                "memo" => "",
                "latitude" => "35.736390",
                "altitude" => "139.902970",
            ]);
            
            Station::create([
                "id" => 2251,
                "prefecture_id" => 12,
                "city_id" => 602,
                "street_id" => null,
                "name" => "市川真間",
                "hiragana" => "いちかわまま",
                "katakana" => "イチカワママ",
                "katakana_half" => "ｲﾁｶﾜﾏﾏ",
                "romaji" => "ichikawamama",
                "memo" => "",
                "latitude" => "35.731362",
                "altitude" => "139.911609",
            ]);
            
            Station::create([
                "id" => 2252,
                "prefecture_id" => 12,
                "city_id" => 602,
                "street_id" => 33859,
                "name" => "菅野",
                "hiragana" => "すがの",
                "katakana" => "スガノ",
                "katakana_half" => "ｽｶﾞﾉ",
                "romaji" => "sugano",
                "memo" => "",
                "latitude" => "35.728196",
                "altitude" => "139.919553",
            ]);
            
            Station::create([
                "id" => 2253,
                "prefecture_id" => 12,
                "city_id" => 605,
                "street_id" => 34161,
                "name" => "京成八幡",
                "hiragana" => "けいせいやわた",
                "katakana" => "ケイセイヤワタ",
                "katakana_half" => "ｹｲｾｲﾔﾜﾀ",
                "romaji" => "keiseiyawata",
                "memo" => "",
                "latitude" => "35.723863",
                "altitude" => "139.928081",
            ]);
            
            Station::create([
                "id" => 2254,
                "prefecture_id" => 12,
                "city_id" => 602,
                "street_id" => 33834,
                "name" => "鬼越",
                "hiragana" => "おにごえ",
                "katakana" => "オニゴエ",
                "katakana_half" => "ｵﾆｺﾞｴ",
                "romaji" => "onigoe",
                "memo" => "",
                "latitude" => "35.720003",
                "altitude" => "139.937218",
            ]);
            
            Station::create([
                "id" => 2255,
                "prefecture_id" => 12,
                "city_id" => 605,
                "street_id" => 34161,
                "name" => "京成中山",
                "hiragana" => "けいせいなかやま",
                "katakana" => "ケイセイナカヤマ",
                "katakana_half" => "ｹｲｾｲﾅｶﾔﾏ",
                "romaji" => "keiseinakayama",
                "memo" => "",
                "latitude" => "35.716726",
                "altitude" => "139.944912",
            ]);
            
            Station::create([
                "id" => 2256,
                "prefecture_id" => 12,
                "city_id" => 603,
                "street_id" => 33964,
                "name" => "東中山",
                "hiragana" => "ひがしなかやま",
                "katakana" => "ヒガシナカヤマ",
                "katakana_half" => "ﾋｶﾞｼﾅｶﾔﾏ",
                "romaji" => "higashinakayama",
                "memo" => "",
                "latitude" => "35.714393",
                "altitude" => "139.952885",
            ]);
            
            Station::create([
                "id" => 2257,
                "prefecture_id" => 12,
                "city_id" => 605,
                "street_id" => 34161,
                "name" => "京成西船",
                "hiragana" => "けいせいにしふな",
                "katakana" => "ケイセイニシフナ",
                "katakana_half" => "ｹｲｾｲﾆｼﾌﾅ",
                "romaji" => "keiseinishifuna",
                "memo" => "",
                "latitude" => "35.711532",
                "altitude" => "139.958967",
            ]);
            
            Station::create([
                "id" => 2258,
                "prefecture_id" => 12,
                "city_id" => 603,
                "street_id" => 33910,
                "name" => "海神",
                "hiragana" => "かいじん",
                "katakana" => "カイジン",
                "katakana_half" => "ｶｲｼﾞﾝ",
                "romaji" => "kaijin",
                "memo" => "",
                "latitude" => "35.705783",
                "altitude" => "139.972161",
            ]);
            
            Station::create([
                "id" => 2259,
                "prefecture_id" => 12,
                "city_id" => 605,
                "street_id" => 34161,
                "name" => "京成船橋",
                "hiragana" => "けいせいふなばし",
                "katakana" => "ケイセイフナバシ",
                "katakana_half" => "ｹｲｾｲﾌﾅﾊﾞｼ",
                "romaji" => "keiseifunabashi",
                "memo" => "",
                "latitude" => "35.700173",
                "altitude" => "139.985577",
            ]);
            
            Station::create([
                "id" => 2260,
                "prefecture_id" => 12,
                "city_id" => 604,
                "street_id" => 34037,
                "name" => "大神宮下",
                "hiragana" => "だいじんぐうした",
                "katakana" => "ダイジングウシタ",
                "katakana_half" => "ﾀﾞｲｼﾞﾝｸﾞｳｼﾀ",
                "romaji" => "daijinguushita",
                "memo" => "",
                "latitude" => "35.694006",
                "altitude" => "139.991410",
            ]);
            
            Station::create([
                "id" => 2261,
                "prefecture_id" => 12,
                "city_id" => 603,
                "street_id" => null,
                "name" => "船橋競馬場",
                "hiragana" => "ふなばしけいばじょう",
                "katakana" => "フナバシケイバジョウ",
                "katakana_half" => "ﾌﾅﾊﾞｼｹｲﾊﾞｼﾞｮｳ",
                "romaji" => "funabashikeibajou",
                "memo" => "",
                "latitude" => "35.689758",
                "altitude" => "139.997937",
            ]);
            
            Station::create([
                "id" => 2262,
                "prefecture_id" => 12,
                "city_id" => 598,
                "street_id" => 33589,
                "name" => "谷津",
                "hiragana" => "やつ",
                "katakana" => "ヤツ",
                "katakana_half" => "ﾔﾂ",
                "romaji" => "yatsu",
                "memo" => "",
                "latitude" => "35.685314",
                "altitude" => "140.007575",
            ]);
            
            Station::create([
                "id" => 2263,
                "prefecture_id" => 12,
                "city_id" => 605,
                "street_id" => 34161,
                "name" => "京成津田沼",
                "hiragana" => "けいせいつだぬま",
                "katakana" => "ケイセイツダヌマ",
                "katakana_half" => "ｹｲｾｲﾂﾀﾞﾇﾏ",
                "romaji" => "keiseitsudanuma",
                "memo" => "",
                "latitude" => "35.683648",
                "altitude" => "140.024463",
            ]);
            
            Station::create([
                "id" => 2264,
                "prefecture_id" => 12,
                "city_id" => 605,
                "street_id" => 34161,
                "name" => "京成大久保",
                "hiragana" => "けいせいおおくぼ",
                "katakana" => "ケイセイオオクボ",
                "katakana_half" => "ｹｲｾｲｵｵｸﾎﾞ",
                "romaji" => "keiseiookubo",
                "memo" => "",
                "latitude" => "35.685953",
                "altitude" => "140.048600",
            ]);
            
            Station::create([
                "id" => 2265,
                "prefecture_id" => 12,
                "city_id" => 613,
                "street_id" => 34882,
                "name" => "実籾",
                "hiragana" => "みもみ",
                "katakana" => "ミモミ",
                "katakana_half" => "ﾐﾓﾐ",
                "romaji" => "mimomi",
                "memo" => "",
                "latitude" => "35.686925",
                "altitude" => "140.068432",
            ]);
            
            Station::create([
                "id" => 2266,
                "prefecture_id" => 12,
                "city_id" => 618,
                "street_id" => 35401,
                "name" => "八千代台",
                "hiragana" => "やちよだい",
                "katakana" => "ヤチヨダイ",
                "katakana_half" => "ﾔﾁﾖﾀﾞｲ",
                "romaji" => "yachiyodai",
                "memo" => "",
                "latitude" => "35.701425",
                "altitude" => "140.090873",
            ]);
            
            Station::create([
                "id" => 2267,
                "prefecture_id" => 12,
                "city_id" => 605,
                "street_id" => 34161,
                "name" => "京成大和田",
                "hiragana" => "けいせいおおわだ",
                "katakana" => "ケイセイオオワダ",
                "katakana_half" => "ｹｲｾｲｵｵﾜﾀﾞ",
                "romaji" => "keiseioowada",
                "memo" => "",
                "latitude" => "35.712007",
                "altitude" => "140.108011",
            ]);
            
            Station::create([
                "id" => 2268,
                "prefecture_id" => 12,
                "city_id" => 618,
                "street_id" => 35372,
                "name" => "勝田台",
                "hiragana" => "かつただい",
                "katakana" => "カツタダイ",
                "katakana_half" => "ｶﾂﾀﾀﾞｲ",
                "romaji" => "katsutadai",
                "memo" => "",
                "latitude" => "35.715424",
                "altitude" => "140.126314",
            ]);
            
            Station::create([
                "id" => 2269,
                "prefecture_id" => 12,
                "city_id" => 610,
                "street_id" => 34659,
                "name" => "志津",
                "hiragana" => "しづ",
                "katakana" => "シヅ",
                "katakana_half" => "ｼﾂﾞ",
                "romaji" => "shizu",
                "memo" => "",
                "latitude" => "35.717452",
                "altitude" => "140.145007",
            ]);
            
            Station::create([
                "id" => 2270,
                "prefecture_id" => 12,
                "city_id" => 610,
                "street_id" => 34702,
                "name" => "ユーカリが丘",
                "hiragana" => "ゆーかりがおか",
                "katakana" => "ユーカリガオカ",
                "katakana_half" => "ﾕｰｶﾘｶﾞｵｶ",
                "romaji" => "yuｰkarigaoka",
                "memo" => "",
                "latitude" => "35.721757",
                "altitude" => "140.156367",
            ]);
            
            Station::create([
                "id" => 2271,
                "prefecture_id" => 12,
                "city_id" => 605,
                "street_id" => 34161,
                "name" => "京成臼井",
                "hiragana" => "けいせいうすい",
                "katakana" => "ケイセイウスイ",
                "katakana_half" => "ｹｲｾｲｳｽｲ",
                "romaji" => "keiseiusui",
                "memo" => "",
                "latitude" => "35.729923",
                "altitude" => "140.180753",
            ]);
            
            Station::create([
                "id" => 2272,
                "prefecture_id" => 12,
                "city_id" => 605,
                "street_id" => 34161,
                "name" => "京成佐倉",
                "hiragana" => "けいせいさくら",
                "katakana" => "ケイセイサクラ",
                "katakana_half" => "ｹｲｾｲｻｸﾗ",
                "romaji" => "keiseisakura",
                "memo" => "",
                "latitude" => "35.725175",
                "altitude" => "140.229722",
            ]);
            
            Station::create([
                "id" => 2273,
                "prefecture_id" => 12,
                "city_id" => 610,
                "street_id" => 34646,
                "name" => "大佐倉",
                "hiragana" => "おおさくら",
                "katakana" => "オオサクラ",
                "katakana_half" => "ｵｵｻｸﾗ",
                "romaji" => "oosakura",
                "memo" => "",
                "latitude" => "35.730118",
                "altitude" => "140.251081",
            ]);
            
            Station::create([
                "id" => 2274,
                "prefecture_id" => 12,
                "city_id" => 605,
                "street_id" => 34161,
                "name" => "京成酒々井",
                "hiragana" => "けいせいしすい",
                "katakana" => "ケイセイシスイ",
                "katakana_half" => "ｹｲｾｲｼｽｲ",
                "romaji" => "keiseishisui",
                "memo" => "",
                "latitude" => "35.736896",
                "altitude" => "140.270162",
            ]);
            
            Station::create([
                "id" => 2275,
                "prefecture_id" => 12,
                "city_id" => 609,
                "street_id" => 34522,
                "name" => "宗吾参道",
                "hiragana" => "そうごさんどう",
                "katakana" => "ソウゴサンドウ",
                "katakana_half" => "ｿｳｺﾞｻﾝﾄﾞｳ",
                "romaji" => "sougosandou",
                "memo" => "",
                "latitude" => "35.752644",
                "altitude" => "140.281022",
            ]);
            
            Station::create([
                "id" => 2276,
                "prefecture_id" => 12,
                "city_id" => 609,
                "street_id" => 34493,
                "name" => "公津の杜",
                "hiragana" => "こうづのもり",
                "katakana" => "コウヅノモリ",
                "katakana_half" => "ｺｳﾂﾞﾉﾓﾘ",
                "romaji" => "kouzunomori",
                "memo" => "",
                "latitude" => "35.760477",
                "altitude" => "140.295132",
            ]);
            
            Station::create([
                "id" => 2277,
                "prefecture_id" => 12,
                "city_id" => 605,
                "street_id" => 34161,
                "name" => "京成成田",
                "hiragana" => "けいせいなりた",
                "katakana" => "ケイセイナリタ",
                "katakana_half" => "ｹｲｾｲﾅﾘﾀ",
                "romaji" => "keiseinarita",
                "memo" => "",
                "latitude" => "35.776726",
                "altitude" => "140.315657",
            ]);
            
            Station::create([
                "id" => 2278,
                "prefecture_id" => 12,
                "city_id" => 611,
                "street_id" => null,
                "name" => "東成田",
                "hiragana" => "ひがしなりた",
                "katakana" => "ヒガシナリタ",
                "katakana_half" => "ﾋｶﾞｼﾅﾘﾀ",
                "romaji" => "higashinarita",
                "memo" => "",
                "latitude" => "35.770061",
                "altitude" => "140.387262",
            ]);
            
            Station::create([
                "id" => 2279,
                "prefecture_id" => 12,
                "city_id" => 605,
                "street_id" => 34161,
                "name" => "京成幕張本郷",
                "hiragana" => "けいせいまくはりほんごう",
                "katakana" => "ケイセイマクハリホンゴウ",
                "katakana_half" => "ｹｲｾｲﾏｸﾊﾘﾎﾝｺﾞｳ",
                "romaji" => "keiseimakuharihongou",
                "memo" => "",
                "latitude" => "35.672649",
                "altitude" => "140.042101",
            ]);
            
            Station::create([
                "id" => 2280,
                "prefecture_id" => 12,
                "city_id" => 605,
                "street_id" => 34161,
                "name" => "京成幕張",
                "hiragana" => "けいせいまくはり",
                "katakana" => "ケイセイマクハリ",
                "katakana_half" => "ｹｲｾｲﾏｸﾊﾘ",
                "romaji" => "keiseimakuhari",
                "memo" => "",
                "latitude" => "35.660955",
                "altitude" => "140.055683",
            ]);
            
            Station::create([
                "id" => 2281,
                "prefecture_id" => 12,
                "city_id" => 596,
                "street_id" => 33512,
                "name" => "検見川",
                "hiragana" => "けみがわ",
                "katakana" => "ケミガワ",
                "katakana_half" => "ｹﾐｶﾞﾜ",
                "romaji" => "kemigawa",
                "memo" => "",
                "latitude" => "35.652623",
                "altitude" => "140.066322",
            ]);
            
            Station::create([
                "id" => 2282,
                "prefecture_id" => 12,
                "city_id" => 605,
                "street_id" => 34161,
                "name" => "京成稲毛",
                "hiragana" => "けいせいいなげ",
                "katakana" => "ケイセイイナゲ",
                "katakana_half" => "ｹｲｾｲｲﾅｹﾞ",
                "romaji" => "keiseiinage",
                "memo" => "",
                "latitude" => "35.637764",
                "altitude" => "140.085516",
            ]);
            
            Station::create([
                "id" => 2283,
                "prefecture_id" => 12,
                "city_id" => 614,
                "street_id" => 35012,
                "name" => "みどり台",
                "hiragana" => "みどりだい",
                "katakana" => "ミドリダイ",
                "katakana_half" => "ﾐﾄﾞﾘﾀﾞｲ",
                "romaji" => "midoridai",
                "memo" => "",
                "latitude" => "35.624794",
                "altitude" => "140.097710",
            ]);
            
            Station::create([
                "id" => 2284,
                "prefecture_id" => 12,
                "city_id" => 628,
                "street_id" => null,
                "name" => "西登戸",
                "hiragana" => "にしのぶと",
                "katakana" => "ニシノブト",
                "katakana_half" => "ﾆｼﾉﾌﾞﾄ",
                "romaji" => "nishinobuto",
                "memo" => "",
                "latitude" => "35.617489",
                "altitude" => "140.102848",
            ]);
            
            Station::create([
                "id" => 2285,
                "prefecture_id" => 12,
                "city_id" => 595,
                "street_id" => 33461,
                "name" => "新千葉",
                "hiragana" => "しんちば",
                "katakana" => "シンチバ",
                "katakana_half" => "ｼﾝﾁﾊﾞ",
                "romaji" => "shinchiba",
                "memo" => "",
                "latitude" => "35.612434",
                "altitude" => "140.108265",
            ]);
            
            Station::create([
                "id" => 2286,
                "prefecture_id" => 12,
                "city_id" => 605,
                "street_id" => 34161,
                "name" => "京成千葉",
                "hiragana" => "けいせいちば",
                "katakana" => "ケイセイチバ",
                "katakana_half" => "ｹｲｾｲﾁﾊﾞ",
                "romaji" => "keiseichiba",
                "memo" => "",
                "latitude" => "35.611684",
                "altitude" => "140.114292",
            ]);
            
            Station::create([
                "id" => 2287,
                "prefecture_id" => 12,
                "city_id" => 595,
                "street_id" => null,
                "name" => "千葉中央",
                "hiragana" => "ちばちゅうおう",
                "katakana" => "チバチュウオウ",
                "katakana_half" => "ﾁﾊﾞﾁｭｳｵｳ",
                "romaji" => "chibachuuou",
                "memo" => "",
                "latitude" => "35.607324",
                "altitude" => "140.117819",
            ]);
            
            Station::create([
                "id" => 2288,
                "prefecture_id" => 12,
                "city_id" => 595,
                "street_id" => 33469,
                "name" => "千葉寺",
                "hiragana" => "ちばでら",
                "katakana" => "チバデラ",
                "katakana_half" => "ﾁﾊﾞﾃﾞﾗ",
                "romaji" => "chibadera",
                "memo" => "",
                "latitude" => "35.590298",
                "altitude" => "140.132236",
            ]);
            
            Station::create([
                "id" => 2289,
                "prefecture_id" => 12,
                "city_id" => 595,
                "street_id" => 33446,
                "name" => "大森台",
                "hiragana" => "おおもりだい",
                "katakana" => "オオモリダイ",
                "katakana_half" => "ｵｵﾓﾘﾀﾞｲ",
                "romaji" => "oomoridai",
                "memo" => "",
                "latitude" => "35.584133",
                "altitude" => "140.149402",
            ]);
            
            Station::create([
                "id" => 2290,
                "prefecture_id" => 12,
                "city_id" => 628,
                "street_id" => 36011,
                "name" => "学園前",
                "hiragana" => "がくえんまえ",
                "katakana" => "ガクエンマエ",
                "katakana_half" => "ｶﾞｸｴﾝﾏｴ",
                "romaji" => "gakuenmae",
                "memo" => "千葉県",
                "latitude" => "35.560802",
                "altitude" => "140.158457",
            ]);
            
            Station::create([
                "id" => 2291,
                "prefecture_id" => 12,
                "city_id" => 599,
                "street_id" => 33634,
                "name" => "おゆみ野",
                "hiragana" => "おゆみの",
                "katakana" => "オユミノ",
                "katakana_half" => "ｵﾕﾐﾉ",
                "romaji" => "oyumino",
                "memo" => "",
                "latitude" => "35.549997",
                "altitude" => "140.166290",
            ]);
            
            Station::create([
                "id" => 2292,
                "prefecture_id" => 12,
                "city_id" => 616,
                "street_id" => 35222,
                "name" => "ちはら台",
                "hiragana" => "ちはらだい",
                "katakana" => "チハラダイ",
                "katakana_half" => "ﾁﾊﾗﾀﾞｲ",
                "romaji" => "chiharadai",
                "memo" => "",
                "latitude" => "35.533805",
                "altitude" => "140.170236",
            ]);
            
            Station::create([
                "id" => 2293,
                "prefecture_id" => 12,
                "city_id" => 595,
                "street_id" => null,
                "name" => "千葉ニュータウン中央",
                "hiragana" => "ちばにゅーたうんちゅうおう",
                "katakana" => "チバニュータウンチュウオウ",
                "katakana_half" => "ﾁﾊﾞﾆｭｰﾀｳﾝﾁｭｳｵｳ",
                "romaji" => "chibanyuｰtaunchuuou",
                "memo" => "",
                "latitude" => "35.800247",
                "altitude" => "140.116228",
            ]);
            
            Station::create([
                "id" => 2294,
                "prefecture_id" => 12,
                "city_id" => 637,
                "street_id" => null,
                "name" => "印旛日本医大",
                "hiragana" => "いんばにほんいだい",
                "katakana" => "インバニホンイダイ",
                "katakana_half" => "ｲﾝﾊﾞﾆﾎﾝｲﾀﾞｲ",
                "romaji" => "inbanihonidai",
                "memo" => "",
                "latitude" => "35.787390",
                "altitude" => "140.203694",
            ]);
            
            Station::create([
                "id" => 2295,
                "prefecture_id" => 12,
                "city_id" => 609,
                "street_id" => null,
                "name" => "成田湯川",
                "hiragana" => "なりたゆかわ",
                "katakana" => "ナリタユカワ",
                "katakana_half" => "ﾅﾘﾀﾕｶﾜ",
                "romaji" => "naritayukawa",
                "memo" => "",
                "latitude" => "35.799612",
                "altitude" => "140.291186",
            ]);
            
            Station::create([
                "id" => 2296,
                "prefecture_id" => 12,
                "city_id" => 624,
                "street_id" => null,
                "name" => "浦安",
                "hiragana" => "うらやす",
                "katakana" => "ウラヤス",
                "katakana_half" => "ｳﾗﾔｽ",
                "romaji" => "urayasu",
                "memo" => "千葉県",
                "latitude" => "35.665897",
                "altitude" => "139.893031",
            ]);
            
            Station::create([
                "id" => 2297,
                "prefecture_id" => 12,
                "city_id" => 602,
                "street_id" => 33893,
                "name" => "南行徳",
                "hiragana" => "みなみぎょうとく",
                "katakana" => "ミナミギョウトク",
                "katakana_half" => "ﾐﾅﾐｷﾞｮｳﾄｸ",
                "romaji" => "minamigyoutoku",
                "memo" => "",
                "latitude" => "35.672952",
                "altitude" => "139.902252",
            ]);
            
            Station::create([
                "id" => 2298,
                "prefecture_id" => 12,
                "city_id" => 602,
                "street_id" => 33845,
                "name" => "行徳",
                "hiragana" => "ぎょうとく",
                "katakana" => "ギョウトク",
                "katakana_half" => "ｷﾞｮｳﾄｸ",
                "romaji" => "gyoutoku",
                "memo" => "",
                "latitude" => "35.682813",
                "altitude" => "139.914750",
            ]);
            
            Station::create([
                "id" => 2299,
                "prefecture_id" => 12,
                "city_id" => 602,
                "street_id" => 33839,
                "name" => "妙典",
                "hiragana" => "みょうでん",
                "katakana" => "ミョウデン",
                "katakana_half" => "ﾐｮｳﾃﾞﾝ",
                "romaji" => "myouden",
                "memo" => "",
                "latitude" => "35.691006",
                "altitude" => "139.924277",
            ]);
            
            Station::create([
                "id" => 2300,
                "prefecture_id" => 12,
                "city_id" => 602,
                "street_id" => 33873,
                "name" => "原木中山",
                "hiragana" => "ばらきなかやま",
                "katakana" => "バラキナカヤマ",
                "katakana_half" => "ﾊﾞﾗｷﾅｶﾔﾏ",
                "romaji" => "barakinakayama",
                "memo" => "",
                "latitude" => "35.703032",
                "altitude" => "139.941691",
            ]);
            
            Station::create([
                "id" => 2301,
                "prefecture_id" => 12,
                "city_id" => 606,
                "street_id" => 34194,
                "name" => "幸谷",
                "hiragana" => "こうや",
                "katakana" => "コウヤ",
                "katakana_half" => "ｺｳﾔ",
                "romaji" => "kouya",
                "memo" => "",
                "latitude" => "35.826547",
                "altitude" => "139.919966",
            ]);
            
            Station::create([
                "id" => 2302,
                "prefecture_id" => 12,
                "city_id" => 599,
                "street_id" => 33641,
                "name" => "小金城趾",
                "hiragana" => "こがねじょうし",
                "katakana" => "コガネジョウシ",
                "katakana_half" => "ｺｶﾞﾈｼﾞｮｳｼ",
                "romaji" => "koganejoushi",
                "memo" => "",
                "latitude" => "35.835991",
                "altitude" => "139.916992",
            ]);
            
            Station::create([
                "id" => 2303,
                "prefecture_id" => 12,
                "city_id" => 617,
                "street_id" => 35349,
                "name" => "鰭ケ崎",
                "hiragana" => "ひれがさき",
                "katakana" => "ヒレガサキ",
                "katakana_half" => "ﾋﾚｶﾞｻｷ",
                "romaji" => "hiregasaki",
                "memo" => "",
                "latitude" => "35.841017",
                "altitude" => "139.911159",
            ]);
            
            Station::create([
                "id" => 2304,
                "prefecture_id" => 12,
                "city_id" => 617,
                "street_id" => 35353,
                "name" => "平和台",
                "hiragana" => "へいわだい",
                "katakana" => "ヘイワダイ",
                "katakana_half" => "ﾍｲﾜﾀﾞｲ",
                "romaji" => "heiwadai",
                "memo" => "千葉県",
                "latitude" => "35.851155",
                "altitude" => "139.901132",
            ]);
            
            Station::create([
                "id" => 2305,
                "prefecture_id" => 12,
                "city_id" => 617,
                "street_id" => null,
                "name" => "流山",
                "hiragana" => "ながれやま",
                "katakana" => "ナガレヤマ",
                "katakana_half" => "ﾅｶﾞﾚﾔﾏ",
                "romaji" => "nagareyama",
                "memo" => "",
                "latitude" => "35.855738",
                "altitude" => "139.901827",
            ]);
            
            Station::create([
                "id" => 2306,
                "prefecture_id" => 12,
                "city_id" => 606,
                "street_id" => 34184,
                "name" => "上本郷",
                "hiragana" => "かみほんごう",
                "katakana" => "カミホンゴウ",
                "katakana_half" => "ｶﾐﾎﾝｺﾞｳ",
                "romaji" => "kamihongou",
                "memo" => "",
                "latitude" => "35.789523",
                "altitude" => "139.916273",
            ]);
            
            Station::create([
                "id" => 2307,
                "prefecture_id" => 12,
                "city_id" => 606,
                "street_id" => 34265,
                "name" => "松戸新田",
                "hiragana" => "まつどしんでん",
                "katakana" => "マツドシンデン",
                "katakana_half" => "ﾏﾂﾄﾞｼﾝﾃﾞﾝ",
                "romaji" => "matsudoshinden",
                "memo" => "",
                "latitude" => "35.790661",
                "altitude" => "139.922439",
            ]);
            
            Station::create([
                "id" => 2308,
                "prefecture_id" => 12,
                "city_id" => 625,
                "street_id" => 35846,
                "name" => "みのり台",
                "hiragana" => "みのりだい",
                "katakana" => "ミノリダイ",
                "katakana_half" => "ﾐﾉﾘﾀﾞｲ",
                "romaji" => "minoridai",
                "memo" => "",
                "latitude" => "35.789273",
                "altitude" => "139.929021",
            ]);
            
            Station::create([
                "id" => 2309,
                "prefecture_id" => 12,
                "city_id" => 618,
                "street_id" => null,
                "name" => "八柱",
                "hiragana" => "やばしら",
                "katakana" => "ヤバシラ",
                "katakana_half" => "ﾔﾊﾞｼﾗ",
                "romaji" => "yabashira",
                "memo" => "",
                "latitude" => "35.791440",
                "altitude" => "139.937605",
            ]);
            
            Station::create([
                "id" => 2310,
                "prefecture_id" => 12,
                "city_id" => 606,
                "street_id" => 34224,
                "name" => "常盤平",
                "hiragana" => "ときわだいら",
                "katakana" => "トキワダイラ",
                "katakana_half" => "ﾄｷﾜﾀﾞｲﾗ",
                "romaji" => "tokiwadaira",
                "memo" => "",
                "latitude" => "35.803411",
                "altitude" => "139.949852",
            ]);
            
            Station::create([
                "id" => 2311,
                "prefecture_id" => 12,
                "city_id" => 606,
                "street_id" => 34201,
                "name" => "五香",
                "hiragana" => "ごこう",
                "katakana" => "ゴコウ",
                "katakana_half" => "ｺﾞｺｳ",
                "romaji" => "gokou",
                "memo" => "",
                "latitude" => "35.797385",
                "altitude" => "139.965768",
            ]);
            
            Station::create([
                "id" => 2312,
                "prefecture_id" => 12,
                "city_id" => 606,
                "street_id" => 34239,
                "name" => "元山",
                "hiragana" => "もとやま",
                "katakana" => "モトヤマ",
                "katakana_half" => "ﾓﾄﾔﾏ",
                "romaji" => "motoyama",
                "memo" => "千葉県",
                "latitude" => "35.790329",
                "altitude" => "139.975629",
            ]);
            
            Station::create([
                "id" => 2313,
                "prefecture_id" => 12,
                "city_id" => 621,
                "street_id" => 35560,
                "name" => "くぬぎ山",
                "hiragana" => "くぬぎやま",
                "katakana" => "クヌギヤマ",
                "katakana_half" => "ｸﾇｷﾞﾔﾏ",
                "romaji" => "kunugiyama",
                "memo" => "",
                "latitude" => "35.782413",
                "altitude" => "139.975657",
            ]);
            
            Station::create([
                "id" => 2314,
                "prefecture_id" => 12,
                "city_id" => 621,
                "street_id" => 35558,
                "name" => "北初富",
                "hiragana" => "きたはつとみ",
                "katakana" => "キタハツトミ",
                "katakana_half" => "ｷﾀﾊﾂﾄﾐ",
                "romaji" => "kitahatsutomi",
                "memo" => "",
                "latitude" => "35.777026",
                "altitude" => "139.991906",
            ]);
            
            Station::create([
                "id" => 2315,
                "prefecture_id" => 12,
                "city_id" => 606,
                "street_id" => 34254,
                "name" => "初富",
                "hiragana" => "はつとみ",
                "katakana" => "ハツトミ",
                "katakana_half" => "ﾊﾂﾄﾐ",
                "romaji" => "hatsutomi",
                "memo" => "",
                "latitude" => "35.772082",
                "altitude" => "140.000433",
            ]);
            
            Station::create([
                "id" => 2316,
                "prefecture_id" => 12,
                "city_id" => 621,
                "street_id" => null,
                "name" => "鎌ケ谷大仏",
                "hiragana" => "かまがやだいぶつ",
                "katakana" => "カマガヤダイブツ",
                "katakana_half" => "ｶﾏｶﾞﾔﾀﾞｲﾌﾞﾂ",
                "romaji" => "kamagayadaibutsu",
                "memo" => "",
                "latitude" => "35.757917",
                "altitude" => "140.013822",
            ]);
            
            Station::create([
                "id" => 2317,
                "prefecture_id" => 12,
                "city_id" => 603,
                "street_id" => 33969,
                "name" => "二和向台",
                "hiragana" => "ふたわむこうだい",
                "katakana" => "フタワムコウダイ",
                "katakana_half" => "ﾌﾀﾜﾑｺｳﾀﾞｲ",
                "romaji" => "futawamukoudai",
                "memo" => "",
                "latitude" => "35.753973",
                "altitude" => "140.023515",
            ]);
            
            Station::create([
                "id" => 2318,
                "prefecture_id" => 12,
                "city_id" => 603,
                "street_id" => 33980,
                "name" => "三咲",
                "hiragana" => "みさき",
                "katakana" => "ミサキ",
                "katakana_half" => "ﾐｻｷ",
                "romaji" => "misaki",
                "memo" => "",
                "latitude" => "35.749113",
                "altitude" => "140.028627",
            ]);
            
            Station::create([
                "id" => 2319,
                "prefecture_id" => 12,
                "city_id" => 603,
                "street_id" => 33944,
                "name" => "滝不動",
                "hiragana" => "たきふどう",
                "katakana" => "タキフドウ",
                "katakana_half" => "ﾀｷﾌﾄﾞｳ",
                "romaji" => "takifudou",
                "memo" => "",
                "latitude" => "35.738086",
                "altitude" => "140.026321",
            ]);
            
            Station::create([
                "id" => 2320,
                "prefecture_id" => 12,
                "city_id" => 598,
                "street_id" => 33600,
                "name" => "高根公団",
                "hiragana" => "たかねこうだん",
                "katakana" => "タカネコウダン",
                "katakana_half" => "ﾀｶﾈｺｳﾀﾞﾝ",
                "romaji" => "takanekoudan",
                "memo" => "",
                "latitude" => "35.730643",
                "altitude" => "140.029377",
            ]);
            
            Station::create([
                "id" => 2321,
                "prefecture_id" => 12,
                "city_id" => 598,
                "street_id" => 33600,
                "name" => "高根木戸",
                "hiragana" => "たかねきど",
                "katakana" => "タカネキド",
                "katakana_half" => "ﾀｶﾈｷﾄﾞ",
                "romaji" => "takanekido",
                "memo" => "",
                "latitude" => "35.726699",
                "altitude" => "140.034961",
            ]);
            
            Station::create([
                "id" => 2322,
                "prefecture_id" => 12,
                "city_id" => 595,
                "street_id" => 33477,
                "name" => "北習志野",
                "hiragana" => "きたならしの",
                "katakana" => "キタナラシノ",
                "katakana_half" => "ｷﾀﾅﾗｼﾉ",
                "romaji" => "kitanarashino",
                "memo" => "",
                "latitude" => "35.721394",
                "altitude" => "140.042210",
            ]);
            
            Station::create([
                "id" => 2323,
                "prefecture_id" => 12,
                "city_id" => 613,
                "street_id" => null,
                "name" => "習志野",
                "hiragana" => "ならしの",
                "katakana" => "ナラシノ",
                "katakana_half" => "ﾅﾗｼﾉ",
                "romaji" => "narashino",
                "memo" => "",
                "latitude" => "35.715394",
                "altitude" => "140.042738",
            ]);
            
            Station::create([
                "id" => 2324,
                "prefecture_id" => 12,
                "city_id" => 603,
                "street_id" => 33994,
                "name" => "薬園台",
                "hiragana" => "やくえんだい",
                "katakana" => "ヤクエンダイ",
                "katakana_half" => "ﾔｸｴﾝﾀﾞｲ",
                "romaji" => "yakuendai",
                "memo" => "",
                "latitude" => "35.710173",
                "altitude" => "140.037878",
            ]);
            
            Station::create([
                "id" => 2325,
                "prefecture_id" => 12,
                "city_id" => 603,
                "street_id" => 33973,
                "name" => "前原",
                "hiragana" => "まえばら",
                "katakana" => "マエバラ",
                "katakana_half" => "ﾏｴﾊﾞﾗ",
                "romaji" => "maebara",
                "memo" => "",
                "latitude" => "35.700729",
                "altitude" => "140.027601",
            ]);
            
            Station::create([
                "id" => 2326,
                "prefecture_id" => 12,
                "city_id" => 613,
                "street_id" => 34878,
                "name" => "新津田沼",
                "hiragana" => "しんつだぬま",
                "katakana" => "シンツダヌマ",
                "katakana_half" => "ｼﾝﾂﾀﾞﾇﾏ",
                "romaji" => "shintsudanuma",
                "memo" => "",
                "latitude" => "35.690202",
                "altitude" => "140.023796",
            ]);
            
            Station::create([
                "id" => 2327,
                "prefecture_id" => 12,
                "city_id" => 606,
                "street_id" => 34185,
                "name" => "矢切",
                "hiragana" => "やぎり",
                "katakana" => "ヤギリ",
                "katakana_half" => "ﾔｷﾞﾘ",
                "romaji" => "yagiri",
                "memo" => "",
                "latitude" => "35.757082",
                "altitude" => "139.900026",
            ]);
            
            Station::create([
                "id" => 2328,
                "prefecture_id" => 12,
                "city_id" => 602,
                "street_id" => 33844,
                "name" => "北国分",
                "hiragana" => "きたこくぶん",
                "katakana" => "キタコクブン",
                "katakana_half" => "ｷﾀｺｸﾌﾞﾝ",
                "romaji" => "kitakokubun",
                "memo" => "",
                "latitude" => "35.762804",
                "altitude" => "139.914469",
            ]);
            
            Station::create([
                "id" => 2329,
                "prefecture_id" => 12,
                "city_id" => 606,
                "street_id" => 34174,
                "name" => "秋山",
                "hiragana" => "あきやま",
                "katakana" => "アキヤマ",
                "katakana_half" => "ｱｷﾔﾏ",
                "romaji" => "akiyama",
                "memo" => "",
                "latitude" => "35.765443",
                "altitude" => "139.931634",
            ]);
            
            Station::create([
                "id" => 2330,
                "prefecture_id" => 12,
                "city_id" => 606,
                "street_id" => 34266,
                "name" => "松飛台",
                "hiragana" => "まつひだい",
                "katakana" => "マツヒダイ",
                "katakana_half" => "ﾏﾂﾋﾀﾞｲ",
                "romaji" => "matsuhidai",
                "memo" => "",
                "latitude" => "35.775081",
                "altitude" => "139.957520",
            ]);
            
            Station::create([
                "id" => 2331,
                "prefecture_id" => 12,
                "city_id" => 602,
                "street_id" => 33831,
                "name" => "大町",
                "hiragana" => "おおまち",
                "katakana" => "オオマチ",
                "katakana_half" => "ｵｵﾏﾁ",
                "romaji" => "oomachi",
                "memo" => "千葉県",
                "latitude" => "35.774887",
                "altitude" => "139.972852",
            ]);
            
            Station::create([
                "id" => 2332,
                "prefecture_id" => 12,
                "city_id" => 629,
                "street_id" => 36055,
                "name" => "西白井",
                "hiragana" => "にししろい",
                "katakana" => "ニシシロイ",
                "katakana_half" => "ﾆｼｼﾛｲ",
                "romaji" => "nishishiroi",
                "memo" => "",
                "latitude" => "35.784387",
                "altitude" => "140.031402",
            ]);
            
            Station::create([
                "id" => 2333,
                "prefecture_id" => 12,
                "city_id" => 629,
                "street_id" => null,
                "name" => "白井",
                "hiragana" => "しろい",
                "katakana" => "シロイ",
                "katakana_half" => "ｼﾛｲ",
                "romaji" => "shiroi",
                "memo" => "",
                "latitude" => "35.784692",
                "altitude" => "140.053817",
            ]);
            
            Station::create([
                "id" => 2334,
                "prefecture_id" => 12,
                "city_id" => 603,
                "street_id" => 33930,
                "name" => "小室",
                "hiragana" => "こむろ",
                "katakana" => "コムロ",
                "katakana_half" => "ｺﾑﾛ",
                "romaji" => "komuro",
                "memo" => "",
                "latitude" => "35.786915",
                "altitude" => "140.076148",
            ]);
            
            Station::create([
                "id" => 2335,
                "prefecture_id" => 12,
                "city_id" => 628,
                "street_id" => null,
                "name" => "印西牧の原",
                "hiragana" => "いんざいまきのはら",
                "katakana" => "インザイマキノハラ",
                "katakana_half" => "ｲﾝｻﾞｲﾏｷﾉﾊﾗ",
                "romaji" => "inzaimakinohara",
                "memo" => "",
                "latitude" => "35.803637",
                "altitude" => "140.167001",
            ]);
            
            Station::create([
                "id" => 2336,
                "prefecture_id" => 12,
                "city_id" => 600,
                "street_id" => 33668,
                "name" => "地区センター",
                "hiragana" => "ちくせんたー",
                "katakana" => "チクセンター",
                "katakana_half" => "ﾁｸｾﾝﾀｰ",
                "romaji" => "chikusentaｰ",
                "memo" => "",
                "latitude" => "35.725950",
                "altitude" => "140.155200",
            ]);
            
            Station::create([
                "id" => 2337,
                "prefecture_id" => 12,
                "city_id" => 607,
                "street_id" => 34309,
                "name" => "公園",
                "hiragana" => "こうえん",
                "katakana" => "コウエン",
                "katakana_half" => "ｺｳｴﾝ",
                "romaji" => "kouen",
                "memo" => "",
                "latitude" => "35.730839",
                "altitude" => "140.153811",
            ]);
            
            Station::create([
                "id" => 2338,
                "prefecture_id" => 12,
                "city_id" => 635,
                "street_id" => 36539,
                "name" => "女子大",
                "hiragana" => "じょしだい",
                "katakana" => "ジョシダイ",
                "katakana_half" => "ｼﾞｮｼﾀﾞｲ",
                "romaji" => "joshidai",
                "memo" => "",
                "latitude" => "35.738116",
                "altitude" => "140.155200",
            ]);
            
            Station::create([
                "id" => 2339,
                "prefecture_id" => 12,
                "city_id" => 595,
                "street_id" => null,
                "name" => "中学校",
                "hiragana" => "ちゅうがっこう",
                "katakana" => "チュウガッコウ",
                "katakana_half" => "ﾁｭｳｶﾞｯｺｳ",
                "romaji" => "chuugakkou",
                "memo" => "",
                "latitude" => "35.740088",
                "altitude" => "140.148395",
            ]);
            
            Station::create([
                "id" => 2340,
                "prefecture_id" => 12,
                "city_id" => 609,
                "street_id" => 34499,
                "name" => "井野",
                "hiragana" => "いの",
                "katakana" => "イノ",
                "katakana_half" => "ｲﾉ",
                "romaji" => "ino",
                "memo" => "千葉県",
                "latitude" => "35.732894",
                "altitude" => "140.148617",
            ]);
            
            Station::create([
                "id" => 2341,
                "prefecture_id" => 12,
                "city_id" => 595,
                "street_id" => null,
                "name" => "市役所前",
                "hiragana" => "しやくしょまえ",
                "katakana" => "シヤクショマエ",
                "katakana_half" => "ｼﾔｸｼｮﾏｴ",
                "romaji" => "shiyakushomae",
                "memo" => "千葉県",
                "latitude" => "35.607269",
                "altitude" => "140.107987",
            ]);
            
            Station::create([
                "id" => 2342,
                "prefecture_id" => 12,
                "city_id" => 638,
                "street_id" => null,
                "name" => "栄町",
                "hiragana" => "さかえちょう",
                "katakana" => "サカエチョウ",
                "katakana_half" => "ｻｶｴﾁｮｳ",
                "romaji" => "sakaechou",
                "memo" => "千葉県",
                "latitude" => "35.612824",
                "altitude" => "140.118570",
            ]);
            
            Station::create([
                "id" => 2343,
                "prefecture_id" => 12,
                "city_id" => 595,
                "street_id" => null,
                "name" => "葭川公園",
                "hiragana" => "よしかわこうえん",
                "katakana" => "ヨシカワコウエン",
                "katakana_half" => "ﾖｼｶﾜｺｳｴﾝ",
                "romaji" => "yoshikawakouen",
                "memo" => "",
                "latitude" => "35.608796",
                "altitude" => "140.119959",
            ]);
            
            Station::create([
                "id" => 2344,
                "prefecture_id" => 12,
                "city_id" => 595,
                "street_id" => null,
                "name" => "県庁前",
                "hiragana" => "けんちょうまえ",
                "katakana" => "ケンチョウマエ",
                "katakana_half" => "ｹﾝﾁｮｳﾏｴ",
                "romaji" => "kenchoumae",
                "memo" => "千葉県",
                "latitude" => "35.603519",
                "altitude" => "140.122181",
            ]);
            
            Station::create([
                "id" => 2345,
                "prefecture_id" => 12,
                "city_id" => 595,
                "street_id" => null,
                "name" => "千葉公園",
                "hiragana" => "ちばこうえん",
                "katakana" => "チバコウエン",
                "katakana_half" => "ﾁﾊﾞｺｳｴﾝ",
                "romaji" => "chibakouen",
                "memo" => "",
                "latitude" => "35.619711",
                "altitude" => "140.117958",
            ]);
            
            Station::create([
                "id" => 2346,
                "prefecture_id" => 12,
                "city_id" => 597,
                "street_id" => 33553,
                "name" => "作草部",
                "hiragana" => "さくさべ",
                "katakana" => "サクサベ",
                "katakana_half" => "ｻｸｻﾍﾞ",
                "romaji" => "sakusabe",
                "memo" => "",
                "latitude" => "35.625655",
                "altitude" => "140.115292",
            ]);
            
            Station::create([
                "id" => 2347,
                "prefecture_id" => 12,
                "city_id" => 597,
                "street_id" => 33558,
                "name" => "天台",
                "hiragana" => "てんだい",
                "katakana" => "テンダイ",
                "katakana_half" => "ﾃﾝﾀﾞｲ",
                "romaji" => "tendai",
                "memo" => "",
                "latitude" => "35.631627",
                "altitude" => "140.112792",
            ]);
            
            Station::create([
                "id" => 2348,
                "prefecture_id" => 12,
                "city_id" => 597,
                "street_id" => 33539,
                "name" => "穴川",
                "hiragana" => "あながわ",
                "katakana" => "アナガワ",
                "katakana_half" => "ｱﾅｶﾞﾜ",
                "romaji" => "anagawa",
                "memo" => "千葉県",
                "latitude" => "35.639514",
                "altitude" => "140.111903",
            ]);
            
            Station::create([
                "id" => 2349,
                "prefecture_id" => 12,
                "city_id" => 600,
                "street_id" => 33668,
                "name" => "スポーツセンター",
                "hiragana" => "すぽーつせんたー",
                "katakana" => "スポーツセンター",
                "katakana_half" => "ｽﾎﾟｰﾂｾﾝﾀｰ",
                "romaji" => "supoｰtsusentaｰ",
                "memo" => "",
                "latitude" => "35.643264",
                "altitude" => "140.116096",
            ]);
            
            Station::create([
                "id" => 2350,
                "prefecture_id" => 12,
                "city_id" => 609,
                "street_id" => 34586,
                "name" => "動物公園",
                "hiragana" => "どうぶつこうえん",
                "katakana" => "ドウブツコウエン",
                "katakana_half" => "ﾄﾞｳﾌﾞﾂｺｳｴﾝ",
                "romaji" => "doubutsukouen",
                "memo" => "",
                "latitude" => "35.642682",
                "altitude" => "140.125540",
            ]);
            
            Station::create([
                "id" => 2351,
                "prefecture_id" => 12,
                "city_id" => 598,
                "street_id" => 33617,
                "name" => "みつわ台",
                "hiragana" => "みつわだい",
                "katakana" => "ミツワダイ",
                "katakana_half" => "ﾐﾂﾜﾀﾞｲ",
                "romaji" => "mitsuwadai",
                "memo" => "",
                "latitude" => "35.638682",
                "altitude" => "140.134928",
            ]);
            
            Station::create([
                "id" => 2352,
                "prefecture_id" => 12,
                "city_id" => 598,
                "street_id" => 33593,
                "name" => "桜木",
                "hiragana" => "さくらぎ",
                "katakana" => "サクラギ",
                "katakana_half" => "ｻｸﾗｷﾞ",
                "romaji" => "sakuragi",
                "memo" => "千葉県",
                "latitude" => "35.631350",
                "altitude" => "140.161066",
            ]);
            
            Station::create([
                "id" => 2353,
                "prefecture_id" => 12,
                "city_id" => 598,
                "street_id" => 33578,
                "name" => "小倉台",
                "hiragana" => "おぐらだい",
                "katakana" => "オグラダイ",
                "katakana_half" => "ｵｸﾞﾗﾀﾞｲ",
                "romaji" => "oguradai",
                "memo" => "",
                "latitude" => "35.627739",
                "altitude" => "140.171925",
            ]);
            
            Station::create([
                "id" => 2354,
                "prefecture_id" => 12,
                "city_id" => 598,
                "street_id" => 33606,
                "name" => "千城台北",
                "hiragana" => "ちしろだいきた",
                "katakana" => "チシロダイキタ",
                "katakana_half" => "ﾁｼﾛﾀﾞｲｷﾀ",
                "romaji" => "chishirodaikita",
                "memo" => "",
                "latitude" => "35.627517",
                "altitude" => "140.182092",
            ]);
            
            Station::create([
                "id" => 2355,
                "prefecture_id" => 12,
                "city_id" => 598,
                "street_id" => 33603,
                "name" => "千城台",
                "hiragana" => "ちしろだい",
                "katakana" => "チシロダイ",
                "katakana_half" => "ﾁｼﾛﾀﾞｲ",
                "romaji" => "chishirodai",
                "memo" => "",
                "latitude" => "35.622379",
                "altitude" => "140.188564",
            ]);
            
            Station::create([
                "id" => 2356,
                "prefecture_id" => 12,
                "city_id" => 606,
                "street_id" => 34181,
                "name" => "上総村上",
                "hiragana" => "かずさむらかみ",
                "katakana" => "カズサムラカミ",
                "katakana_half" => "ｶｽﾞｻﾑﾗｶﾐ",
                "romaji" => "kazusamurakami",
                "memo" => "",
                "latitude" => "35.496113",
                "altitude" => "140.100299",
            ]);
            
            Station::create([
                "id" => 2357,
                "prefecture_id" => 12,
                "city_id" => 616,
                "street_id" => 35100,
                "name" => "海士有木",
                "hiragana" => "あまありき",
                "katakana" => "アマアリキ",
                "katakana_half" => "ｱﾏｱﾘｷ",
                "romaji" => "amaariki",
                "memo" => "",
                "latitude" => "35.481698",
                "altitude" => "140.124325",
            ]);
            
            Station::create([
                "id" => 2358,
                "prefecture_id" => 12,
                "city_id" => 606,
                "street_id" => 34181,
                "name" => "上総三又",
                "hiragana" => "かずさみつまた",
                "katakana" => "カズサミツマタ",
                "katakana_half" => "ｶｽﾞｻﾐﾂﾏﾀ",
                "romaji" => "kazusamitsumata",
                "memo" => "",
                "latitude" => "35.465839",
                "altitude" => "140.126798",
            ]);
            
            Station::create([
                "id" => 2359,
                "prefecture_id" => 12,
                "city_id" => 606,
                "street_id" => 34181,
                "name" => "上総山田",
                "hiragana" => "かずさやまだ",
                "katakana" => "カズサヤマダ",
                "katakana_half" => "ｶｽﾞｻﾔﾏﾀﾞ",
                "romaji" => "kazusayamada",
                "memo" => "",
                "latitude" => "35.454091",
                "altitude" => "140.126271",
            ]);
            
            Station::create([
                "id" => 2360,
                "prefecture_id" => 12,
                "city_id" => 616,
                "street_id" => 35175,
                "name" => "光風台",
                "hiragana" => "こうふうだい",
                "katakana" => "コウフウダイ",
                "katakana_half" => "ｺｳﾌｳﾀﾞｲ",
                "romaji" => "koufuudai",
                "memo" => "千葉県",
                "latitude" => "35.439536",
                "altitude" => "140.114106",
            ]);
            
            Station::create([
                "id" => 2361,
                "prefecture_id" => 12,
                "city_id" => 616,
                "street_id" => 35126,
                "name" => "馬立",
                "hiragana" => "うまたて",
                "katakana" => "ウマタテ",
                "katakana_half" => "ｳﾏﾀﾃ",
                "romaji" => "umatate",
                "memo" => "",
                "latitude" => "35.423788",
                "altitude" => "140.114634",
            ]);
            
            Station::create([
                "id" => 2362,
                "prefecture_id" => 12,
                "city_id" => 606,
                "street_id" => 34181,
                "name" => "上総牛久",
                "hiragana" => "かずさうしく",
                "katakana" => "カズサウシク",
                "katakana_half" => "ｶｽﾞｻｳｼｸ",
                "romaji" => "kazusaushiku",
                "memo" => "",
                "latitude" => "35.400208",
                "altitude" => "140.142022",
            ]);
            
            Station::create([
                "id" => 2363,
                "prefecture_id" => 12,
                "city_id" => 606,
                "street_id" => 34181,
                "name" => "上総川間",
                "hiragana" => "かずさかわま",
                "katakana" => "カズサカワマ",
                "katakana_half" => "ｶｽﾞｻｶﾜﾏ",
                "romaji" => "kazusakawama",
                "memo" => "",
                "latitude" => "35.388014",
                "altitude" => "140.150827",
            ]);
            
            Station::create([
                "id" => 2364,
                "prefecture_id" => 12,
                "city_id" => 606,
                "street_id" => 34181,
                "name" => "上総鶴舞",
                "hiragana" => "かずさつるまい",
                "katakana" => "カズサツルマイ",
                "katakana_half" => "ｶｽﾞｻﾂﾙﾏｲ",
                "romaji" => "kazusatsurumai",
                "memo" => "",
                "latitude" => "35.381265",
                "altitude" => "140.164966",
            ]);
            
            Station::create([
                "id" => 2365,
                "prefecture_id" => 12,
                "city_id" => 606,
                "street_id" => 34181,
                "name" => "上総久保",
                "hiragana" => "かずさくぼ",
                "katakana" => "カズサクボ",
                "katakana_half" => "ｶｽﾞｻｸﾎﾞ",
                "romaji" => "kazusakubo",
                "memo" => "",
                "latitude" => "35.367377",
                "altitude" => "140.154412",
            ]);
            
            Station::create([
                "id" => 2366,
                "prefecture_id" => 12,
                "city_id" => 616,
                "street_id" => 35208,
                "name" => "高滝",
                "hiragana" => "たかたき",
                "katakana" => "タカタキ",
                "katakana_half" => "ﾀｶﾀｷ",
                "romaji" => "takataki",
                "memo" => "",
                "latitude" => "35.353046",
                "altitude" => "140.150273",
            ]);
            
            Station::create([
                "id" => 2367,
                "prefecture_id" => 12,
                "city_id" => 630,
                "street_id" => null,
                "name" => "里見",
                "hiragana" => "さとみ",
                "katakana" => "サトミ",
                "katakana_half" => "ｻﾄﾐ",
                "romaji" => "satomi",
                "memo" => "",
                "latitude" => "35.337215",
                "altitude" => "140.145386",
            ]);
            
            Station::create([
                "id" => 2368,
                "prefecture_id" => 12,
                "city_id" => 616,
                "street_id" => 35112,
                "name" => "飯給",
                "hiragana" => "いたぶ",
                "katakana" => "イタブ",
                "katakana_half" => "ｲﾀﾌﾞ",
                "romaji" => "itabu",
                "memo" => "",
                "latitude" => "35.320411",
                "altitude" => "140.142498",
            ]);
            
            Station::create([
                "id" => 2369,
                "prefecture_id" => 12,
                "city_id" => 616,
                "street_id" => 35226,
                "name" => "月崎",
                "hiragana" => "つきざき",
                "katakana" => "ツキザキ",
                "katakana_half" => "ﾂｷｻﾞｷ",
                "romaji" => "tsukizaki",
                "memo" => "",
                "latitude" => "35.302051",
                "altitude" => "140.139471",
            ]);
            
            Station::create([
                "id" => 2370,
                "prefecture_id" => 12,
                "city_id" => 606,
                "street_id" => 34181,
                "name" => "上総大久保",
                "hiragana" => "かずさおおくぼ",
                "katakana" => "カズサオオクボ",
                "katakana_half" => "ｶｽﾞｻｵｵｸﾎﾞ",
                "romaji" => "kazusaookubo",
                "memo" => "",
                "latitude" => "35.283359",
                "altitude" => "140.145860",
            ]);
            
            Station::create([
                "id" => 2371,
                "prefecture_id" => 12,
                "city_id" => 616,
                "street_id" => 35303,
                "name" => "養老渓谷",
                "hiragana" => "ようろうけいこく",
                "katakana" => "ヨウロウケイコク",
                "katakana_half" => "ﾖｳﾛｳｹｲｺｸ",
                "romaji" => "youroukeikoku",
                "memo" => "",
                "latitude" => "35.266361",
                "altitude" => "140.159221",
            ]);
            
            Station::create([
                "id" => 2372,
                "prefecture_id" => 12,
                "city_id" => 606,
                "street_id" => 34181,
                "name" => "上総中野",
                "hiragana" => "かずさなかの",
                "katakana" => "カズサナカノ",
                "katakana_half" => "ｶｽﾞｻﾅｶﾉ",
                "romaji" => "kazusanakano",
                "memo" => "",
                "latitude" => "35.250113",
                "altitude" => "140.199579",
            ]);
            
            Station::create([
                "id" => 2373,
                "prefecture_id" => 12,
                "city_id" => 609,
                "street_id" => 34569,
                "name" => "西大原",
                "hiragana" => "にしおおはら",
                "katakana" => "ニシオオハラ",
                "katakana_half" => "ﾆｼｵｵﾊﾗ",
                "romaji" => "nishioohara",
                "memo" => "",
                "latitude" => "35.260366",
                "altitude" => "140.377897",
            ]);
            
            Station::create([
                "id" => 2374,
                "prefecture_id" => 12,
                "city_id" => 606,
                "street_id" => 34181,
                "name" => "上総東",
                "hiragana" => "かずさあずま",
                "katakana" => "カズサアズマ",
                "katakana_half" => "ｶｽﾞｻｱｽﾞﾏ",
                "romaji" => "kazusaazuma",
                "memo" => "",
                "latitude" => "35.263170",
                "altitude" => "140.344734",
            ]);
            
            Station::create([
                "id" => 2375,
                "prefecture_id" => 12,
                "city_id" => 635,
                "street_id" => 36509,
                "name" => "新田野",
                "hiragana" => "にったの",
                "katakana" => "ニッタノ",
                "katakana_half" => "ﾆｯﾀﾉ",
                "romaji" => "nittano",
                "memo" => "",
                "latitude" => "35.276030",
                "altitude" => "140.328317",
            ]);
            
            Station::create([
                "id" => 2376,
                "prefecture_id" => 12,
                "city_id" => 616,
                "street_id" => 35243,
                "name" => "国吉",
                "hiragana" => "くによし",
                "katakana" => "クニヨシ",
                "katakana_half" => "ｸﾆﾖｼ",
                "romaji" => "kuniyoshi",
                "memo" => "",
                "latitude" => "35.280418",
                "altitude" => "140.313958",
            ]);
            
            Station::create([
                "id" => 2377,
                "prefecture_id" => 12,
                "city_id" => 606,
                "street_id" => 34181,
                "name" => "上総中川",
                "hiragana" => "かずさなかがわ",
                "katakana" => "カズサナカガワ",
                "katakana_half" => "ｶｽﾞｻﾅｶｶﾞﾜ",
                "romaji" => "kazusanakagawa",
                "memo" => "",
                "latitude" => "35.282584",
                "altitude" => "140.280433",
            ]);
            
            Station::create([
                "id" => 2378,
                "prefecture_id" => 12,
                "city_id" => 595,
                "street_id" => 33449,
                "name" => "城見ケ丘",
                "hiragana" => "しろみがおか",
                "katakana" => "シロミガオカ",
                "katakana_half" => "ｼﾛﾐｶﾞｵｶ",
                "romaji" => "shiromigaoka",
                "memo" => "",
                "latitude" => "35.291610",
                "altitude" => "140.252324",
            ]);
            
            Station::create([
                "id" => 2379,
                "prefecture_id" => 12,
                "city_id" => 651,
                "street_id" => null,
                "name" => "大多喜",
                "hiragana" => "おおたき",
                "katakana" => "オオタキ",
                "katakana_half" => "ｵｵﾀｷ",
                "romaji" => "ootaki",
                "memo" => "",
                "latitude" => "35.286499",
                "altitude" => "140.243852",
            ]);
            
            Station::create([
                "id" => 2380,
                "prefecture_id" => 12,
                "city_id" => 651,
                "street_id" => 36977,
                "name" => "小谷松",
                "hiragana" => "こやまつ",
                "katakana" => "コヤマツ",
                "katakana_half" => "ｺﾔﾏﾂ",
                "romaji" => "koyamatsu",
                "memo" => "",
                "latitude" => "35.268974",
                "altitude" => "140.251186",
            ]);
            
            Station::create([
                "id" => 2381,
                "prefecture_id" => 12,
                "city_id" => 611,
                "street_id" => null,
                "name" => "東総元",
                "hiragana" => "ひがしふさもと",
                "katakana" => "ヒガシフサモト",
                "katakana_half" => "ﾋｶﾞｼﾌｻﾓﾄ",
                "romaji" => "higashifusamoto",
                "memo" => "",
                "latitude" => "35.259474",
                "altitude" => "140.247603",
            ]);
            
            Station::create([
                "id" => 2382,
                "prefecture_id" => 12,
                "city_id" => 651,
                "street_id" => 36967,
                "name" => "久我原",
                "hiragana" => "くがはら",
                "katakana" => "クガハラ",
                "katakana_half" => "ｸｶﾞﾊﾗ",
                "romaji" => "kugahara",
                "memo" => "",
                "latitude" => "35.250114",
                "altitude" => "140.247825",
            ]);
            
            Station::create([
                "id" => 2383,
                "prefecture_id" => 12,
                "city_id" => 631,
                "street_id" => null,
                "name" => "総元",
                "hiragana" => "ふさもと",
                "katakana" => "フサモト",
                "katakana_half" => "ﾌｻﾓﾄ",
                "romaji" => "fusamoto",
                "memo" => "",
                "latitude" => "35.240505",
                "altitude" => "140.240354",
            ]);
            
            Station::create([
                "id" => 2384,
                "prefecture_id" => 12,
                "city_id" => 628,
                "street_id" => null,
                "name" => "西畑",
                "hiragana" => "にしはた",
                "katakana" => "ニシハタ",
                "katakana_half" => "ﾆｼﾊﾀ",
                "romaji" => "nishihata",
                "memo" => "",
                "latitude" => "35.250419",
                "altitude" => "140.215217",
            ]);
            
            Station::create([
                "id" => 2385,
                "prefecture_id" => 12,
                "city_id" => 597,
                "street_id" => 33550,
                "name" => "仲ノ町",
                "hiragana" => "なかのちょう",
                "katakana" => "ナカノチョウ",
                "katakana_half" => "ﾅｶﾉﾁｮｳ",
                "romaji" => "nakanochou",
                "memo" => "",
                "latitude" => "35.728740",
                "altitude" => "140.833700",
            ]);
            
            Station::create([
                "id" => 2386,
                "prefecture_id" => 12,
                "city_id" => 633,
                "street_id" => 36300,
                "name" => "観音",
                "hiragana" => "かんのん",
                "katakana" => "カンノン",
                "katakana_half" => "ｶﾝﾉﾝ",
                "romaji" => "kannon",
                "memo" => "",
                "latitude" => "35.728879",
                "altitude" => "140.839837",
            ]);
            
            Station::create([
                "id" => 2387,
                "prefecture_id" => 12,
                "city_id" => 595,
                "street_id" => 33486,
                "name" => "本銚子",
                "hiragana" => "もとちょうし",
                "katakana" => "モトチョウシ",
                "katakana_half" => "ﾓﾄﾁｮｳｼ",
                "romaji" => "motochoushi",
                "memo" => "",
                "latitude" => "35.730906",
                "altitude" => "140.847226",
            ]);
            
            Station::create([
                "id" => 2388,
                "prefecture_id" => 12,
                "city_id" => 601,
                "street_id" => 33730,
                "name" => "笠上黒生",
                "hiragana" => "かさがみくろはえ",
                "katakana" => "カサガミクロハエ",
                "katakana_half" => "ｶｻｶﾞﾐｸﾛﾊｴ",
                "romaji" => "kasagamikurohae",
                "memo" => "",
                "latitude" => "35.728352",
                "altitude" => "140.856976",
            ]);
            
            Station::create([
                "id" => 2389,
                "prefecture_id" => 12,
                "city_id" => 628,
                "street_id" => null,
                "name" => "西海鹿島",
                "hiragana" => "にしあしかじま",
                "katakana" => "ニシアシカジマ",
                "katakana_half" => "ﾆｼｱｼｶｼﾞﾏ",
                "romaji" => "nishiashikajima",
                "memo" => "",
                "latitude" => "35.725074",
                "altitude" => "140.860170",
            ]);
            
            Station::create([
                "id" => 2390,
                "prefecture_id" => 12,
                "city_id" => 601,
                "street_id" => 33712,
                "name" => "海鹿島",
                "hiragana" => "あしかじま",
                "katakana" => "アシカジマ",
                "katakana_half" => "ｱｼｶｼﾞﾏ",
                "romaji" => "ashikajima",
                "memo" => "",
                "latitude" => "35.722186",
                "altitude" => "140.863197",
            ]);
            
            Station::create([
                "id" => 2391,
                "prefecture_id" => 12,
                "city_id" => 601,
                "street_id" => 33736,
                "name" => "君ケ浜",
                "hiragana" => "きみがはま",
                "katakana" => "キミガハマ",
                "katakana_half" => "ｷﾐｶﾞﾊﾏ",
                "romaji" => "kimigahama",
                "memo" => "",
                "latitude" => "35.713964",
                "altitude" => "140.860475",
            ]);
            
            Station::create([
                "id" => 2392,
                "prefecture_id" => 12,
                "city_id" => 601,
                "street_id" => 33718,
                "name" => "犬吠",
                "hiragana" => "いぬぼう",
                "katakana" => "イヌボウ",
                "katakana_half" => "ｲﾇﾎﾞｳ",
                "romaji" => "inubou",
                "memo" => "",
                "latitude" => "35.706242",
                "altitude" => "140.861004",
            ]);
            
            Station::create([
                "id" => 2393,
                "prefecture_id" => 12,
                "city_id" => 601,
                "street_id" => 33774,
                "name" => "外川",
                "hiragana" => "とかわ",
                "katakana" => "トカワ",
                "katakana_half" => "ﾄｶﾜ",
                "romaji" => "tokawa",
                "memo" => "",
                "latitude" => "35.699243",
                "altitude" => "140.857337",
            ]);
            
            Station::create([
                "id" => 2394,
                "prefecture_id" => 12,
                "city_id" => 611,
                "street_id" => null,
                "name" => "東海神",
                "hiragana" => "ひがしかいじん",
                "katakana" => "ヒガシカイジン",
                "katakana_half" => "ﾋｶﾞｼｶｲｼﾞﾝ",
                "romaji" => "higashikaijin",
                "memo" => "",
                "latitude" => "35.705867",
                "altitude" => "139.980577",
            ]);
            
            Station::create([
                "id" => 2395,
                "prefecture_id" => 12,
                "city_id" => 603,
                "street_id" => 33962,
                "name" => "飯山満",
                "hiragana" => "はさま",
                "katakana" => "ハサマ",
                "katakana_half" => "ﾊｻﾏ",
                "romaji" => "hasama",
                "memo" => "",
                "latitude" => "35.714033",
                "altitude" => "140.022295",
            ]);
            
            Station::create([
                "id" => 2396,
                "prefecture_id" => 12,
                "city_id" => 603,
                "street_id" => null,
                "name" => "船橋日大前",
                "hiragana" => "ふなばしにちだいまえ",
                "katakana" => "フナバシニチダイマエ",
                "katakana_half" => "ﾌﾅﾊﾞｼﾆﾁﾀﾞｲﾏｴ",
                "romaji" => "funabashinichidaimae",
                "memo" => "",
                "latitude" => "35.727116",
                "altitude" => "140.059681",
            ]);
            
            Station::create([
                "id" => 2397,
                "prefecture_id" => 12,
                "city_id" => 618,
                "street_id" => null,
                "name" => "八千代緑が丘",
                "hiragana" => "やちよみどりがおか",
                "katakana" => "ヤチヨミドリガオカ",
                "katakana_half" => "ﾔﾁﾖﾐﾄﾞﾘｶﾞｵｶ",
                "romaji" => "yachiyomidorigaoka",
                "memo" => "",
                "latitude" => "35.728726",
                "altitude" => "140.072429",
            ]);
            
            Station::create([
                "id" => 2398,
                "prefecture_id" => 12,
                "city_id" => 618,
                "street_id" => null,
                "name" => "八千代中央",
                "hiragana" => "やちよちゅうおう",
                "katakana" => "ヤチヨチュウオウ",
                "katakana_half" => "ﾔﾁﾖﾁｭｳｵｳ",
                "romaji" => "yachiyochuuou",
                "memo" => "",
                "latitude" => "35.727866",
                "altitude" => "140.104065",
            ]);
            
            Station::create([
                "id" => 2399,
                "prefecture_id" => 12,
                "city_id" => 616,
                "street_id" => 35284,
                "name" => "村上",
                "hiragana" => "むらかみ",
                "katakana" => "ムラカミ",
                "katakana_half" => "ﾑﾗｶﾐ",
                "romaji" => "murakami",
                "memo" => "千葉県",
                "latitude" => "35.723645",
                "altitude" => "140.118426",
            ]);
            
            Station::create([
                "id" => 2400,
                "prefecture_id" => 12,
                "city_id" => 611,
                "street_id" => null,
                "name" => "東葉勝田台",
                "hiragana" => "とうようかつただい",
                "katakana" => "トウヨウカツタダイ",
                "katakana_half" => "ﾄｳﾖｳｶﾂﾀﾀﾞｲ",
                "romaji" => "touyoukatsutadai",
                "memo" => "",
                "latitude" => "35.715895",
                "altitude" => "140.125759",
            ]);
            
            Station::create([
                "id" => 2401,
                "prefecture_id" => 12,
                "city_id" => 610,
                "street_id" => 34702,
                "name" => "リゾートゲートウェイ・ステーション",
                "hiragana" => "りぞーとげーとうぇいすてーしょん",
                "katakana" => "リゾートゲートウェイステーション",
                "katakana_half" => "ﾘｿﾞｰﾄｹﾞｰﾄｳｪｲｽﾃｰｼｮﾝ",
                "romaji" => "rizoｰtogeｰtoueisuteｰshon",
                "memo" => "",
                "latitude" => "35.635178",
                "altitude" => "139.885116",
            ]);
            
            Station::create([
                "id" => 2402,
                "prefecture_id" => 12,
                "city_id" => 611,
                "street_id" => null,
                "name" => "東京ディズニーランド・ステーション",
                "hiragana" => "とうきょうでぃずにーらんどすてーしょん",
                "katakana" => "トウキョウディズニーランドステーション",
                "katakana_half" => "ﾄｳｷｮｳﾃﾞｨｽﾞﾆｰﾗﾝﾄﾞｽﾃｰｼｮﾝ",
                "romaji" => "toukyoudeizuniｰrandosuteｰshon",
                "memo" => "",
                "latitude" => "35.636011",
                "altitude" => "139.878728",
            ]);
            
            Station::create([
                "id" => 2403,
                "prefecture_id" => 12,
                "city_id" => 595,
                "street_id" => null,
                "name" => "ベイサイド・ステーション",
                "hiragana" => "べいさいどすてーしょん",
                "katakana" => "ベイサイドステーション",
                "katakana_half" => "ﾍﾞｲｻｲﾄﾞｽﾃｰｼｮﾝ",
                "romaji" => "beisaidosuteｰshon",
                "memo" => "",
                "latitude" => "35.627957",
                "altitude" => "139.876506",
            ]);
            
            Station::create([
                "id" => 2404,
                "prefecture_id" => 12,
                "city_id" => 611,
                "street_id" => null,
                "name" => "東京ディズニーシー・ステーション",
                "hiragana" => "とうきょうでぃずにーしーすてーしょん",
                "katakana" => "トウキョウディズニーシーステーション",
                "katakana_half" => "ﾄｳｷｮｳﾃﾞｨｽﾞﾆｰｼｰｽﾃｰｼｮﾝ",
                "romaji" => "toukyoudeizuniｰshiｰsuteｰshon",
                "memo" => "",
                "latitude" => "35.627401",
                "altitude" => "139.889561",
            ]);
            
            Station::create([
                "id" => 2405,
                "prefecture_id" => 12,
                "city_id" => 643,
                "street_id" => null,
                "name" => "芝山千代田",
                "hiragana" => "しばやまちよだ",
                "katakana" => "シバヤマチヨダ",
                "katakana_half" => "ｼﾊﾞﾔﾏﾁﾖﾀﾞ",
                "romaji" => "shibayamachiyoda",
                "memo" => "",
                "latitude" => "35.754063",
                "altitude" => "140.399512",
            ]);
            
            Station::create([
                "id" => 2406,
                "prefecture_id" => 12,
                "city_id" => 617,
                "street_id" => null,
                "name" => "流山セントラルパーク",
                "hiragana" => "ながれやませんとらるぱーく",
                "katakana" => "ナガレヤマセントラルパーク",
                "katakana_half" => "ﾅｶﾞﾚﾔﾏｾﾝﾄﾗﾙﾊﾟｰｸ",
                "romaji" => "nagareyamasentorarupaｰku",
                "memo" => "",
                "latitude" => "35.854322",
                "altitude" => "139.915104",
            ]);
            
            Station::create([
                "id" => 2407,
                "prefecture_id" => 12,
                "city_id" => 614,
                "street_id" => 34923,
                "name" => "柏の葉キャンパス",
                "hiragana" => "かしわのはきゃんぱす",
                "katakana" => "カシワノハキャンパス",
                "katakana_half" => "ｶｼﾜﾉﾊｷｬﾝﾊﾟｽ",
                "romaji" => "kashiwanohakyanpasu",
                "memo" => "",
                "latitude" => "35.892930",
                "altitude" => "139.952321",
            ]);
            
            Station::create([
                "id" => 2408,
                "prefecture_id" => 12,
                "city_id" => 614,
                "street_id" => null,
                "name" => "柏たなか",
                "hiragana" => "かしわたなか",
                "katakana" => "カシワタナカ",
                "katakana_half" => "ｶｼﾜﾀﾅｶ",
                "romaji" => "kashiwatanaka",
                "memo" => "",
                "latitude" => "35.910706",
                "altitude" => "139.957597",
            ]);
            
    }
}
