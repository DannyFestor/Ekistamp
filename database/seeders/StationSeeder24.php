<?php
namespace Database\Seeders;

use App\Models\Station;
use Illuminate\Database\Seeder;

class StationSeeder24 extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        
            Station::create([
                "id" => 5171,
                "prefecture_id" => 24,
                "city_id" => 1124,
                "street_id" => 74662,
                "name" => "長島",
                "hiragana" => "ながしま",
                "katakana" => "ナガシマ",
                "katakana_half" => "ﾅｶﾞｼﾏ",
                "romaji" => "nagashima",
                "memo" => "",
                "latitude" => "35.098457",
                "altitude" => "136.696294",
            ]);
            
            Station::create([
                "id" => 5172,
                "prefecture_id" => 24,
                "city_id" => 1124,
                "street_id" => null,
                "name" => "桑名",
                "hiragana" => "くわな",
                "katakana" => "クワナ",
                "katakana_half" => "ｸﾜﾅ",
                "romaji" => "kuwana",
                "memo" => "",
                "latitude" => "35.067405",
                "altitude" => "136.683658",
            ]);
            
            Station::create([
                "id" => 5173,
                "prefecture_id" => 24,
                "city_id" => 1137,
                "street_id" => null,
                "name" => "朝日",
                "hiragana" => "あさひ",
                "katakana" => "アサヒ",
                "katakana_half" => "ｱｻﾋ",
                "romaji" => "asahi",
                "memo" => "",
                "latitude" => "35.033880",
                "altitude" => "136.658051",
            ]);
            
            Station::create([
                "id" => 5174,
                "prefecture_id" => 24,
                "city_id" => 1121,
                "street_id" => 74068,
                "name" => "富田",
                "hiragana" => "とみだ",
                "katakana" => "トミダ",
                "katakana_half" => "ﾄﾐﾀﾞ",
                "romaji" => "tomida",
                "memo" => "三重県",
                "latitude" => "35.007577",
                "altitude" => "136.653524",
            ]);
            
            Station::create([
                "id" => 5175,
                "prefecture_id" => 24,
                "city_id" => 1121,
                "street_id" => 74071,
                "name" => "富田浜",
                "hiragana" => "とみだはま",
                "katakana" => "トミダハマ",
                "katakana_half" => "ﾄﾐﾀﾞﾊﾏ",
                "romaji" => "tomidahama",
                "memo" => "",
                "latitude" => "34.997162",
                "altitude" => "136.650441",
            ]);
            
            Station::create([
                "id" => 5176,
                "prefecture_id" => 24,
                "city_id" => 1121,
                "street_id" => null,
                "name" => "四日市",
                "hiragana" => "よっかいち",
                "katakana" => "ヨッカイチ",
                "katakana_half" => "ﾖｯｶｲﾁ",
                "romaji" => "yokkaichi",
                "memo" => "",
                "latitude" => "34.963082",
                "altitude" => "136.629639",
            ]);
            
            Station::create([
                "id" => 5177,
                "prefecture_id" => 24,
                "city_id" => 1145,
                "street_id" => null,
                "name" => "南四日市",
                "hiragana" => "みなみよっかいち",
                "katakana" => "ミナミヨッカイチ",
                "katakana_half" => "ﾐﾅﾐﾖｯｶｲﾁ",
                "romaji" => "minamiyokkaichi",
                "memo" => "",
                "latitude" => "34.941111",
                "altitude" => "136.608697",
            ]);
            
            Station::create([
                "id" => 5178,
                "prefecture_id" => 24,
                "city_id" => 1121,
                "street_id" => 73964,
                "name" => "河原田",
                "hiragana" => "かわらだ",
                "katakana" => "カワラダ",
                "katakana_half" => "ｶﾜﾗﾀﾞ",
                "romaji" => "kawarada",
                "memo" => "",
                "latitude" => "34.910532",
                "altitude" => "136.598283",
            ]);
            
            Station::create([
                "id" => 5179,
                "prefecture_id" => 24,
                "city_id" => 1120,
                "street_id" => 73704,
                "name" => "河曲",
                "hiragana" => "かわの",
                "katakana" => "カワノ",
                "katakana_half" => "ｶﾜﾉ",
                "romaji" => "kawano",
                "memo" => "",
                "latitude" => "34.897838",
                "altitude" => "136.568008",
            ]);
            
            Station::create([
                "id" => 5180,
                "prefecture_id" => 24,
                "city_id" => 1125,
                "street_id" => 74797,
                "name" => "加佐登",
                "hiragana" => "かさど",
                "katakana" => "カサド",
                "katakana_half" => "ｶｻﾄﾞ",
                "romaji" => "kasado",
                "memo" => "",
                "latitude" => "34.890504",
                "altitude" => "136.530262",
            ]);
            
            Station::create([
                "id" => 5181,
                "prefecture_id" => 24,
                "city_id" => 1128,
                "street_id" => 75170,
                "name" => "井田川",
                "hiragana" => "いだがわ",
                "katakana" => "イダガワ",
                "katakana_half" => "ｲﾀﾞｶﾞﾜ",
                "romaji" => "idagawa",
                "memo" => "",
                "latitude" => "34.868367",
                "altitude" => "136.492488",
            ]);
            
            Station::create([
                "id" => 5182,
                "prefecture_id" => 24,
                "city_id" => 1128,
                "street_id" => null,
                "name" => "亀山",
                "hiragana" => "かめやま",
                "katakana" => "カメヤマ",
                "katakana_half" => "ｶﾒﾔﾏ",
                "romaji" => "kameyama",
                "memo" => "三重県",
                "latitude" => "34.850368",
                "altitude" => "136.449854",
            ]);
            
            Station::create([
                "id" => 5183,
                "prefecture_id" => 24,
                "city_id" => 1128,
                "street_id" => 75196,
                "name" => "下庄",
                "hiragana" => "しものしょう",
                "katakana" => "シモノショウ",
                "katakana_half" => "ｼﾓﾉｼｮｳ",
                "romaji" => "shimonoshou",
                "memo" => "",
                "latitude" => "34.814567",
                "altitude" => "136.479714",
            ]);
            
            Station::create([
                "id" => 5184,
                "prefecture_id" => 24,
                "city_id" => 1120,
                "street_id" => 73632,
                "name" => "一身田",
                "hiragana" => "いしんでん",
                "katakana" => "イシンデン",
                "katakana_half" => "ｲｼﾝﾃﾞﾝ",
                "romaji" => "ishinden",
                "memo" => "",
                "latitude" => "34.762740",
                "altitude" => "136.499631",
            ]);
            
            Station::create([
                "id" => 5185,
                "prefecture_id" => 24,
                "city_id" => 1120,
                "street_id" => null,
                "name" => "津",
                "hiragana" => "つ",
                "katakana" => "ツ",
                "katakana_half" => "ﾂ",
                "romaji" => "tsu",
                "memo" => "",
                "latitude" => "34.733993",
                "altitude" => "136.510520",
            ]);
            
            Station::create([
                "id" => 5186,
                "prefecture_id" => 24,
                "city_id" => 1120,
                "street_id" => 73604,
                "name" => "阿漕",
                "hiragana" => "あこぎ",
                "katakana" => "アコギ",
                "katakana_half" => "ｱｺｷﾞ",
                "romaji" => "akogi",
                "memo" => "",
                "latitude" => "34.703635",
                "altitude" => "136.504356",
            ]);
            
            Station::create([
                "id" => 5187,
                "prefecture_id" => 24,
                "city_id" => 1120,
                "street_id" => 73772,
                "name" => "高茶屋",
                "hiragana" => "たかちゃや",
                "katakana" => "タカチャヤ",
                "katakana_half" => "ﾀｶﾁｬﾔ",
                "romaji" => "takachaya",
                "memo" => "",
                "latitude" => "34.667417",
                "altitude" => "136.512524",
            ]);
            
            Station::create([
                "id" => 5188,
                "prefecture_id" => 24,
                "city_id" => 1123,
                "street_id" => 74536,
                "name" => "六軒",
                "hiragana" => "ろっけん",
                "katakana" => "ロッケン",
                "katakana_half" => "ﾛｯｹﾝ",
                "romaji" => "rokken",
                "memo" => "三重県",
                "latitude" => "34.617450",
                "altitude" => "136.507527",
            ]);
            
            Station::create([
                "id" => 5189,
                "prefecture_id" => 24,
                "city_id" => 1123,
                "street_id" => null,
                "name" => "松阪",
                "hiragana" => "まつさか",
                "katakana" => "マツサカ",
                "katakana_half" => "ﾏﾂｻｶ",
                "romaji" => "matsusaka",
                "memo" => "",
                "latitude" => "34.577039",
                "altitude" => "136.536081",
            ]);
            
            Station::create([
                "id" => 5190,
                "prefecture_id" => 24,
                "city_id" => 1120,
                "street_id" => 73617,
                "name" => "徳和",
                "hiragana" => "とくわ",
                "katakana" => "トクワ",
                "katakana_half" => "ﾄｸﾜ",
                "romaji" => "tokuwa",
                "memo" => "",
                "latitude" => "34.554707",
                "altitude" => "136.553164",
            ]);
            
            Station::create([
                "id" => 5191,
                "prefecture_id" => 24,
                "city_id" => 1139,
                "street_id" => null,
                "name" => "多気",
                "hiragana" => "たき",
                "katakana" => "タキ",
                "katakana_half" => "ﾀｷ",
                "romaji" => "taki",
                "memo" => "",
                "latitude" => "34.516295",
                "altitude" => "136.572804",
            ]);
            
            Station::create([
                "id" => 5192,
                "prefecture_id" => 24,
                "city_id" => 1139,
                "street_id" => 75788,
                "name" => "相可",
                "hiragana" => "おうか",
                "katakana" => "オウカ",
                "katakana_half" => "ｵｳｶ",
                "romaji" => "ouka",
                "memo" => "",
                "latitude" => "34.502713",
                "altitude" => "136.545528",
            ]);
            
            Station::create([
                "id" => 5193,
                "prefecture_id" => 24,
                "city_id" => 1139,
                "street_id" => 75800,
                "name" => "佐奈",
                "hiragana" => "さな",
                "katakana" => "サナ",
                "katakana_half" => "ｻﾅ",
                "romaji" => "sana",
                "memo" => "",
                "latitude" => "34.478577",
                "altitude" => "136.539114",
            ]);
            
            Station::create([
                "id" => 5194,
                "prefecture_id" => 24,
                "city_id" => 1141,
                "street_id" => 75898,
                "name" => "栃原",
                "hiragana" => "とちはら",
                "katakana" => "トチハラ",
                "katakana_half" => "ﾄﾁﾊﾗ",
                "romaji" => "tochihara",
                "memo" => "",
                "latitude" => "34.444413",
                "altitude" => "136.509423",
            ]);
            
            Station::create([
                "id" => 5195,
                "prefecture_id" => 24,
                "city_id" => 1120,
                "street_id" => 73720,
                "name" => "川添",
                "hiragana" => "かわぞえ",
                "katakana" => "カワゾエ",
                "katakana_half" => "ｶﾜｿﾞｴ",
                "romaji" => "kawazoe",
                "memo" => "",
                "latitude" => "34.419665",
                "altitude" => "136.473344",
            ]);
            
            Station::create([
                "id" => 5196,
                "prefecture_id" => 24,
                "city_id" => 1141,
                "street_id" => 75874,
                "name" => "三瀬谷",
                "hiragana" => "みせだに",
                "katakana" => "ミセダニ",
                "katakana_half" => "ﾐｾﾀﾞﾆ",
                "romaji" => "misedani",
                "memo" => "",
                "latitude" => "34.394750",
                "altitude" => "136.409100",
            ]);
            
            Station::create([
                "id" => 5197,
                "prefecture_id" => 24,
                "city_id" => 1144,
                "street_id" => 75980,
                "name" => "滝原",
                "hiragana" => "たきはら",
                "katakana" => "タキハラ",
                "katakana_half" => "ﾀｷﾊﾗ",
                "romaji" => "takihara",
                "memo" => "",
                "latitude" => "34.360142",
                "altitude" => "136.412046",
            ]);
            
            Station::create([
                "id" => 5198,
                "prefecture_id" => 24,
                "city_id" => 1144,
                "street_id" => 75972,
                "name" => "阿曽",
                "hiragana" => "あそ",
                "katakana" => "アソ",
                "katakana_half" => "ｱｿ",
                "romaji" => "aso",
                "memo" => "",
                "latitude" => "34.331118",
                "altitude" => "136.411159",
            ]);
            
            Station::create([
                "id" => 5199,
                "prefecture_id" => 24,
                "city_id" => 1122,
                "street_id" => null,
                "name" => "伊勢柏崎",
                "hiragana" => "いせかしわざき",
                "katakana" => "イセカシワザキ",
                "katakana_half" => "ｲｾｶｼﾜｻﾞｷ",
                "romaji" => "isekashiwazaki",
                "memo" => "",
                "latitude" => "34.299705",
                "altitude" => "136.395467",
            ]);
            
            Station::create([
                "id" => 5200,
                "prefecture_id" => 24,
                "city_id" => 1144,
                "street_id" => 75975,
                "name" => "大内山",
                "hiragana" => "おおうちやま",
                "katakana" => "オオウチヤマ",
                "katakana_half" => "ｵｵｳﾁﾔﾏ",
                "romaji" => "oouchiyama",
                "memo" => "",
                "latitude" => "34.278095",
                "altitude" => "136.359304",
            ]);
            
            Station::create([
                "id" => 5201,
                "prefecture_id" => 24,
                "city_id" => 1124,
                "street_id" => 74559,
                "name" => "梅ケ谷",
                "hiragana" => "うめがだに",
                "katakana" => "ウメガダニ",
                "katakana_half" => "ｳﾒｶﾞﾀﾞﾆ",
                "romaji" => "umegadani",
                "memo" => "",
                "latitude" => "34.258320",
                "altitude" => "136.356584",
            ]);
            
            Station::create([
                "id" => 5202,
                "prefecture_id" => 24,
                "city_id" => 1144,
                "street_id" => null,
                "name" => "紀伊長島",
                "hiragana" => "きいながしま",
                "katakana" => "キイナガシマ",
                "katakana_half" => "ｷｲﾅｶﾞｼﾏ",
                "romaji" => "kiinagashima",
                "memo" => "",
                "latitude" => "34.209379",
                "altitude" => "136.339976",
            ]);
            
            Station::create([
                "id" => 5203,
                "prefecture_id" => 24,
                "city_id" => 1136,
                "street_id" => null,
                "name" => "三野瀬",
                "hiragana" => "みのせ",
                "katakana" => "ミノセ",
                "katakana_half" => "ﾐﾉｾ",
                "romaji" => "minose",
                "memo" => "",
                "latitude" => "34.167495",
                "altitude" => "136.282427",
            ]);
            
            Station::create([
                "id" => 5204,
                "prefecture_id" => 24,
                "city_id" => 1129,
                "street_id" => 75280,
                "name" => "船津",
                "hiragana" => "ふなつ",
                "katakana" => "フナツ",
                "katakana_half" => "ﾌﾅﾂ",
                "romaji" => "funatsu",
                "memo" => "紀勢線",
                "latitude" => "34.142190",
                "altitude" => "136.228988",
            ]);
            
            Station::create([
                "id" => 5205,
                "prefecture_id" => 24,
                "city_id" => 1145,
                "street_id" => 75990,
                "name" => "相賀",
                "hiragana" => "あいが",
                "katakana" => "アイガ",
                "katakana_half" => "ｱｲｶﾞ",
                "romaji" => "aiga",
                "memo" => "",
                "latitude" => "34.111722",
                "altitude" => "136.227239",
            ]);
            
            Station::create([
                "id" => 5206,
                "prefecture_id" => 24,
                "city_id" => 1127,
                "street_id" => null,
                "name" => "尾鷲",
                "hiragana" => "おわせ",
                "katakana" => "オワセ",
                "katakana_half" => "ｵﾜｾ",
                "romaji" => "owase",
                "memo" => "",
                "latitude" => "34.074725",
                "altitude" => "136.190328",
            ]);
            
            Station::create([
                "id" => 5207,
                "prefecture_id" => 24,
                "city_id" => 1127,
                "street_id" => 75109,
                "name" => "大曽根浦",
                "hiragana" => "おおそねうら",
                "katakana" => "オオソネウラ",
                "katakana_half" => "ｵｵｿﾈｳﾗ",
                "romaji" => "oosoneura",
                "memo" => "",
                "latitude" => "34.062088",
                "altitude" => "136.222854",
            ]);
            
            Station::create([
                "id" => 5208,
                "prefecture_id" => 24,
                "city_id" => 1127,
                "street_id" => 75117,
                "name" => "九鬼",
                "hiragana" => "くき",
                "katakana" => "クキ",
                "katakana_half" => "ｸｷ",
                "romaji" => "kuki",
                "memo" => "",
                "latitude" => "34.016677",
                "altitude" => "136.243076",
            ]);
            
            Station::create([
                "id" => 5209,
                "prefecture_id" => 24,
                "city_id" => 1127,
                "street_id" => 75149,
                "name" => "三木里",
                "hiragana" => "みきさと",
                "katakana" => "ミキサト",
                "katakana_half" => "ﾐｷｻﾄ",
                "romaji" => "mikisato",
                "memo" => "",
                "latitude" => "34.001511",
                "altitude" => "136.202997",
            ]);
            
            Station::create([
                "id" => 5210,
                "prefecture_id" => 24,
                "city_id" => 1127,
                "street_id" => 75112,
                "name" => "賀田",
                "hiragana" => "かた",
                "katakana" => "カタ",
                "katakana_half" => "ｶﾀ",
                "romaji" => "kata",
                "memo" => "",
                "latitude" => "33.971985",
                "altitude" => "136.189555",
            ]);
            
            Station::create([
                "id" => 5211,
                "prefecture_id" => 24,
                "city_id" => 1130,
                "street_id" => 75333,
                "name" => "二木島",
                "hiragana" => "にぎしま",
                "katakana" => "ニギシマ",
                "katakana_half" => "ﾆｷﾞｼﾏ",
                "romaji" => "nigishima",
                "memo" => "",
                "latitude" => "33.939517",
                "altitude" => "136.180919",
            ]);
            
            Station::create([
                "id" => 5212,
                "prefecture_id" => 24,
                "city_id" => 1130,
                "street_id" => 75292,
                "name" => "新鹿",
                "hiragana" => "あたしか",
                "katakana" => "アタシカ",
                "katakana_half" => "ｱﾀｼｶ",
                "romaji" => "atashika",
                "memo" => "",
                "latitude" => "33.928295",
                "altitude" => "136.144172",
            ]);
            
            Station::create([
                "id" => 5213,
                "prefecture_id" => 24,
                "city_id" => 1130,
                "street_id" => 75335,
                "name" => "波田須",
                "hiragana" => "はだす",
                "katakana" => "ハダス",
                "katakana_half" => "ﾊﾀﾞｽ",
                "romaji" => "hadasu",
                "memo" => "",
                "latitude" => "33.910269",
                "altitude" => "136.138367",
            ]);
            
            Station::create([
                "id" => 5214,
                "prefecture_id" => 24,
                "city_id" => 1130,
                "street_id" => 75306,
                "name" => "大泊",
                "hiragana" => "おおどまり",
                "katakana" => "オオドマリ",
                "katakana_half" => "ｵｵﾄﾞﾏﾘ",
                "romaji" => "oodomari",
                "memo" => "",
                "latitude" => "33.902325",
                "altitude" => "136.118869",
            ]);
            
            Station::create([
                "id" => 5215,
                "prefecture_id" => 24,
                "city_id" => 1130,
                "street_id" => null,
                "name" => "熊野市",
                "hiragana" => "くまのし",
                "katakana" => "クマノシ",
                "katakana_half" => "ｸﾏﾉｼ",
                "romaji" => "kumanoshi",
                "memo" => "",
                "latitude" => "33.889687",
                "altitude" => "136.098983",
            ]);
            
            Station::create([
                "id" => 5216,
                "prefecture_id" => 24,
                "city_id" => 1122,
                "street_id" => 74185,
                "name" => "有井",
                "hiragana" => "ありい",
                "katakana" => "アリイ",
                "katakana_half" => "ｱﾘｲ",
                "romaji" => "arii",
                "memo" => "",
                "latitude" => "33.876077",
                "altitude" => "136.085568",
            ]);
            
            Station::create([
                "id" => 5217,
                "prefecture_id" => 24,
                "city_id" => 1120,
                "street_id" => 73615,
                "name" => "神志山",
                "hiragana" => "こうしやま",
                "katakana" => "コウシヤマ",
                "katakana_half" => "ｺｳｼﾔﾏ",
                "romaji" => "koushiyama",
                "memo" => "",
                "latitude" => "33.840165",
                "altitude" => "136.062571",
            ]);
            
            Station::create([
                "id" => 5218,
                "prefecture_id" => 24,
                "city_id" => 1144,
                "street_id" => null,
                "name" => "紀伊市木",
                "hiragana" => "きいいちぎ",
                "katakana" => "キイイチギ",
                "katakana_half" => "ｷｲｲﾁｷﾞ",
                "romaji" => "kiiichigi",
                "memo" => "",
                "latitude" => "33.828165",
                "altitude" => "136.055322",
            ]);
            
            Station::create([
                "id" => 5219,
                "prefecture_id" => 24,
                "city_id" => 1147,
                "street_id" => 76048,
                "name" => "阿田和",
                "hiragana" => "あたわ",
                "katakana" => "アタワ",
                "katakana_half" => "ｱﾀﾜ",
                "romaji" => "atawa",
                "memo" => "",
                "latitude" => "33.805362",
                "altitude" => "136.043047",
            ]);
            
            Station::create([
                "id" => 5220,
                "prefecture_id" => 24,
                "city_id" => 1144,
                "street_id" => null,
                "name" => "紀伊井田",
                "hiragana" => "きいいだ",
                "katakana" => "キイイダ",
                "katakana_half" => "ｷｲｲﾀﾞ",
                "romaji" => "kiiida",
                "memo" => "",
                "latitude" => "33.760200",
                "altitude" => "136.024022",
            ]);
            
            Station::create([
                "id" => 5221,
                "prefecture_id" => 24,
                "city_id" => 1148,
                "street_id" => 76069,
                "name" => "鵜殿",
                "hiragana" => "うどの",
                "katakana" => "ウドノ",
                "katakana_half" => "ｳﾄﾞﾉ",
                "romaji" => "udono",
                "memo" => "",
                "latitude" => "33.736646",
                "altitude" => "136.015580",
            ]);
            
            Station::create([
                "id" => 5222,
                "prefecture_id" => 24,
                "city_id" => 1123,
                "street_id" => 74452,
                "name" => "外城田",
                "hiragana" => "ときだ",
                "katakana" => "トキダ",
                "katakana_half" => "ﾄｷﾀﾞ",
                "romaji" => "tokida",
                "memo" => "",
                "latitude" => "34.497631",
                "altitude" => "136.597108",
            ]);
            
            Station::create([
                "id" => 5223,
                "prefecture_id" => 24,
                "city_id" => 1142,
                "street_id" => 75921,
                "name" => "田丸",
                "hiragana" => "たまる",
                "katakana" => "タマル",
                "katakana_half" => "ﾀﾏﾙ",
                "romaji" => "tamaru",
                "memo" => "",
                "latitude" => "34.488439",
                "altitude" => "136.634022",
            ]);
            
            Station::create([
                "id" => 5224,
                "prefecture_id" => 24,
                "city_id" => 1122,
                "street_id" => 74277,
                "name" => "宮川",
                "hiragana" => "みやがわ",
                "katakana" => "ミヤガワ",
                "katakana_half" => "ﾐﾔｶﾞﾜ",
                "romaji" => "miyagawa",
                "memo" => "",
                "latitude" => "34.503187",
                "altitude" => "136.672490",
            ]);
            
            Station::create([
                "id" => 5225,
                "prefecture_id" => 24,
                "city_id" => 1120,
                "street_id" => 73817,
                "name" => "山田上口",
                "hiragana" => "やまだかみぐち",
                "katakana" => "ヤマダカミグチ",
                "katakana_half" => "ﾔﾏﾀﾞｶﾐｸﾞﾁ",
                "romaji" => "yamadakamiguchi",
                "memo" => "",
                "latitude" => "34.495744",
                "altitude" => "136.693988",
            ]);
            
            Station::create([
                "id" => 5226,
                "prefecture_id" => 24,
                "city_id" => 1122,
                "street_id" => null,
                "name" => "伊勢市",
                "hiragana" => "いせし",
                "katakana" => "イセシ",
                "katakana_half" => "ｲｾｼ",
                "romaji" => "iseshi",
                "memo" => "",
                "latitude" => "34.491634",
                "altitude" => "136.709877",
            ]);
            
            Station::create([
                "id" => 5227,
                "prefecture_id" => 24,
                "city_id" => 1123,
                "street_id" => 74329,
                "name" => "五十鈴ケ丘",
                "hiragana" => "いすずがおか",
                "katakana" => "イスズガオカ",
                "katakana_half" => "ｲｽｽﾞｶﾞｵｶ",
                "romaji" => "isuzugaoka",
                "memo" => "",
                "latitude" => "34.495828",
                "altitude" => "136.739540",
            ]);
            
            Station::create([
                "id" => 5228,
                "prefecture_id" => 24,
                "city_id" => 1122,
                "street_id" => 74255,
                "name" => "二見浦",
                "hiragana" => "ふたみのうら",
                "katakana" => "フタミノウラ",
                "katakana_half" => "ﾌﾀﾐﾉｳﾗ",
                "romaji" => "futaminoura",
                "memo" => "",
                "latitude" => "34.503939",
                "altitude" => "136.777148",
            ]);
            
            Station::create([
                "id" => 5229,
                "prefecture_id" => 24,
                "city_id" => 1122,
                "street_id" => 74261,
                "name" => "松下",
                "hiragana" => "まつした",
                "katakana" => "マツシタ",
                "katakana_half" => "ﾏﾂｼﾀ",
                "romaji" => "matsushita",
                "memo" => "",
                "latitude" => "34.496468",
                "altitude" => "136.798869",
            ]);
            
            Station::create([
                "id" => 5230,
                "prefecture_id" => 24,
                "city_id" => 1122,
                "street_id" => 74183,
                "name" => "池の浦シーサイド",
                "hiragana" => "いけのうらしーさいど",
                "katakana" => "イケノウラシーサイド",
                "katakana_half" => "ｲｹﾉｳﾗｼｰｻｲﾄﾞ",
                "romaji" => "ikenourashiｰsaido",
                "memo" => "",
                "latitude" => "34.491385",
                "altitude" => "136.813229",
            ]);
            
            Station::create([
                "id" => 5231,
                "prefecture_id" => 24,
                "city_id" => 1129,
                "street_id" => null,
                "name" => "鳥羽",
                "hiragana" => "とば",
                "katakana" => "トバ",
                "katakana_half" => "ﾄﾊﾞ",
                "romaji" => "toba",
                "memo" => "",
                "latitude" => "34.486915",
                "altitude" => "136.842366",
            ]);
            
            Station::create([
                "id" => 5232,
                "prefecture_id" => 24,
                "city_id" => 1123,
                "street_id" => 74410,
                "name" => "上ノ庄",
                "hiragana" => "かみのしょう",
                "katakana" => "カミノショウ",
                "katakana_half" => "ｶﾐﾉｼｮｳ",
                "romaji" => "kaminoshou",
                "memo" => "",
                "latitude" => "34.598090",
                "altitude" => "136.499147",
            ]);
            
            Station::create([
                "id" => 5233,
                "prefecture_id" => 24,
                "city_id" => 1123,
                "street_id" => 74358,
                "name" => "権現前",
                "hiragana" => "ごんげんまえ",
                "katakana" => "ゴンゲンマエ",
                "katakana_half" => "ｺﾞﾝｹﾞﾝﾏｴ",
                "romaji" => "gongenmae",
                "memo" => "",
                "latitude" => "34.617894",
                "altitude" => "136.482139",
            ]);
            
            Station::create([
                "id" => 5234,
                "prefecture_id" => 24,
                "city_id" => 1122,
                "street_id" => null,
                "name" => "伊勢八太",
                "hiragana" => "いせはた",
                "katakana" => "イセハタ",
                "katakana_half" => "ｲｾﾊﾀ",
                "romaji" => "isehata",
                "memo" => "",
                "latitude" => "34.647585",
                "altitude" => "136.446836",
            ]);
            
            Station::create([
                "id" => 5235,
                "prefecture_id" => 24,
                "city_id" => 1120,
                "street_id" => 73638,
                "name" => "一志",
                "hiragana" => "いちし",
                "katakana" => "イチシ",
                "katakana_half" => "ｲﾁｼ",
                "romaji" => "ichishi",
                "memo" => "",
                "latitude" => "34.654972",
                "altitude" => "136.436308",
            ]);
            
            Station::create([
                "id" => 5236,
                "prefecture_id" => 24,
                "city_id" => 1120,
                "street_id" => 73640,
                "name" => "井関",
                "hiragana" => "いせぎ",
                "katakana" => "イセギ",
                "katakana_half" => "ｲｾｷﾞ",
                "romaji" => "isegi",
                "memo" => "",
                "latitude" => "34.642446",
                "altitude" => "136.412700",
            ]);
            
            Station::create([
                "id" => 5237,
                "prefecture_id" => 24,
                "city_id" => 1122,
                "street_id" => null,
                "name" => "伊勢大井",
                "hiragana" => "いせおおい",
                "katakana" => "イセオオイ",
                "katakana_half" => "ｲｾｵｵｲ",
                "romaji" => "iseooi",
                "memo" => "",
                "latitude" => "34.650027",
                "altitude" => "136.385202",
            ]);
            
            Station::create([
                "id" => 5238,
                "prefecture_id" => 24,
                "city_id" => 1122,
                "street_id" => null,
                "name" => "伊勢川口",
                "hiragana" => "いせかわぐち",
                "katakana" => "イセカワグチ",
                "katakana_half" => "ｲｾｶﾜｸﾞﾁ",
                "romaji" => "isekawaguchi",
                "memo" => "",
                "latitude" => "34.647555",
                "altitude" => "136.356787",
            ]);
            
            Station::create([
                "id" => 5239,
                "prefecture_id" => 24,
                "city_id" => 1120,
                "street_id" => 73640,
                "name" => "関ノ宮",
                "hiragana" => "せきのみや",
                "katakana" => "セキノミヤ",
                "katakana_half" => "ｾｷﾉﾐﾔ",
                "romaji" => "sekinomiya",
                "memo" => "",
                "latitude" => "34.637778",
                "altitude" => "136.339706",
            ]);
            
            Station::create([
                "id" => 5240,
                "prefecture_id" => 24,
                "city_id" => 1120,
                "street_id" => 73802,
                "name" => "家城",
                "hiragana" => "いえき",
                "katakana" => "イエキ",
                "katakana_half" => "ｲｴｷ",
                "romaji" => "ieki",
                "memo" => "",
                "latitude" => "34.625668",
                "altitude" => "136.319209",
            ]);
            
            Station::create([
                "id" => 5241,
                "prefecture_id" => 24,
                "city_id" => 1122,
                "street_id" => null,
                "name" => "伊勢竹原",
                "hiragana" => "いせたけはら",
                "katakana" => "イセタケハラ",
                "katakana_half" => "ｲｾﾀｹﾊﾗ",
                "romaji" => "isetakehara",
                "memo" => "",
                "latitude" => "34.599810",
                "altitude" => "136.309211",
            ]);
            
            Station::create([
                "id" => 5242,
                "prefecture_id" => 24,
                "city_id" => 1122,
                "street_id" => null,
                "name" => "伊勢鎌倉",
                "hiragana" => "いせかまくら",
                "katakana" => "イセカマクラ",
                "katakana_half" => "ｲｾｶﾏｸﾗ",
                "romaji" => "isekamakura",
                "memo" => "",
                "latitude" => "34.574089",
                "altitude" => "136.278269",
            ]);
            
            Station::create([
                "id" => 5243,
                "prefecture_id" => 24,
                "city_id" => 1122,
                "street_id" => null,
                "name" => "伊勢八知",
                "hiragana" => "いせやち",
                "katakana" => "イセヤチ",
                "katakana_half" => "ｲｾﾔﾁ",
                "romaji" => "iseyachi",
                "memo" => "",
                "latitude" => "34.555147",
                "altitude" => "136.263772",
            ]);
            
            Station::create([
                "id" => 5244,
                "prefecture_id" => 24,
                "city_id" => 1126,
                "street_id" => 74967,
                "name" => "比津",
                "hiragana" => "ひつ",
                "katakana" => "ヒツ",
                "katakana_half" => "ﾋﾂ",
                "romaji" => "hitsu",
                "memo" => "",
                "latitude" => "34.531982",
                "altitude" => "136.270633",
            ]);
            
            Station::create([
                "id" => 5245,
                "prefecture_id" => 24,
                "city_id" => 1122,
                "street_id" => null,
                "name" => "伊勢奥津",
                "hiragana" => "いせおきつ",
                "katakana" => "イセオキツ",
                "katakana_half" => "ｲｾｵｷﾂ",
                "romaji" => "iseokitsu",
                "memo" => "",
                "latitude" => "34.512180",
                "altitude" => "136.260191",
            ]);
            
            Station::create([
                "id" => 5246,
                "prefecture_id" => 24,
                "city_id" => 1120,
                "street_id" => 73640,
                "name" => "関",
                "hiragana" => "せき",
                "katakana" => "セキ",
                "katakana_half" => "ｾｷ",
                "romaji" => "seki",
                "memo" => "三重県",
                "latitude" => "34.849173",
                "altitude" => "136.394552",
            ]);
            
            Station::create([
                "id" => 5247,
                "prefecture_id" => 24,
                "city_id" => 1128,
                "street_id" => 75177,
                "name" => "加太",
                "hiragana" => "かぶと",
                "katakana" => "カブト",
                "katakana_half" => "ｶﾌﾞﾄ",
                "romaji" => "kabuto",
                "memo" => "三重県",
                "latitude" => "34.842589",
                "altitude" => "136.340308",
            ]);
            
            Station::create([
                "id" => 5248,
                "prefecture_id" => 24,
                "city_id" => 1133,
                "street_id" => 75588,
                "name" => "柘植",
                "hiragana" => "つげ",
                "katakana" => "ツゲ",
                "katakana_half" => "ﾂｹﾞ",
                "romaji" => "tsuge",
                "memo" => "",
                "latitude" => "34.846977",
                "altitude" => "136.255703",
            ]);
            
            Station::create([
                "id" => 5249,
                "prefecture_id" => 24,
                "city_id" => 1133,
                "street_id" => 75593,
                "name" => "新堂",
                "hiragana" => "しんどう",
                "katakana" => "シンドウ",
                "katakana_half" => "ｼﾝﾄﾞｳ",
                "romaji" => "shindou",
                "memo" => "",
                "latitude" => "34.821117",
                "altitude" => "136.206820",
            ]);
            
            Station::create([
                "id" => 5250,
                "prefecture_id" => 24,
                "city_id" => 1133,
                "street_id" => 75572,
                "name" => "佐那具",
                "hiragana" => "さなぐ",
                "katakana" => "サナグ",
                "katakana_half" => "ｻﾅｸﾞ",
                "romaji" => "sanagu",
                "memo" => "",
                "latitude" => "34.804424",
                "altitude" => "136.163936",
            ]);
            
            Station::create([
                "id" => 5251,
                "prefecture_id" => 24,
                "city_id" => 1133,
                "street_id" => null,
                "name" => "伊賀上野",
                "hiragana" => "いがうえの",
                "katakana" => "イガウエノ",
                "katakana_half" => "ｲｶﾞｳｴﾉ",
                "romaji" => "igaueno",
                "memo" => "",
                "latitude" => "34.789036",
                "altitude" => "136.123550",
            ]);
            
            Station::create([
                "id" => 5252,
                "prefecture_id" => 24,
                "city_id" => 1133,
                "street_id" => 75575,
                "name" => "島ケ原",
                "hiragana" => "しまがはら",
                "katakana" => "シマガハラ",
                "katakana_half" => "ｼﾏｶﾞﾊﾗ",
                "romaji" => "shimagahara",
                "memo" => "",
                "latitude" => "34.767676",
                "altitude" => "136.054168",
            ]);
            
            Station::create([
                "id" => 5253,
                "prefecture_id" => 24,
                "city_id" => 1126,
                "street_id" => 74930,
                "name" => "赤目口",
                "hiragana" => "あかめぐち",
                "katakana" => "アカメグチ",
                "katakana_half" => "ｱｶﾒｸﾞﾁ",
                "romaji" => "akameguchi",
                "memo" => "",
                "latitude" => "34.599416",
                "altitude" => "136.073785",
            ]);
            
            Station::create([
                "id" => 5254,
                "prefecture_id" => 24,
                "city_id" => 1126,
                "street_id" => null,
                "name" => "名張",
                "hiragana" => "なばり",
                "katakana" => "ナバリ",
                "katakana_half" => "ﾅﾊﾞﾘ",
                "romaji" => "nabari",
                "memo" => "",
                "latitude" => "34.621498",
                "altitude" => "136.095755",
            ]);
            
            Station::create([
                "id" => 5255,
                "prefecture_id" => 24,
                "city_id" => 1126,
                "street_id" => 74975,
                "name" => "桔梗が丘",
                "hiragana" => "ききょうがおか",
                "katakana" => "キキョウガオカ",
                "katakana_half" => "ｷｷｮｳｶﾞｵｶ",
                "romaji" => "kikyougaoka",
                "memo" => "",
                "latitude" => "34.641024",
                "altitude" => "136.112753",
            ]);
            
            Station::create([
                "id" => 5256,
                "prefecture_id" => 24,
                "city_id" => 1126,
                "street_id" => 75077,
                "name" => "美旗",
                "hiragana" => "みはた",
                "katakana" => "ミハタ",
                "katakana_half" => "ﾐﾊﾀ",
                "romaji" => "mihata",
                "memo" => "",
                "latitude" => "34.662856",
                "altitude" => "136.133111",
            ]);
            
            Station::create([
                "id" => 5257,
                "prefecture_id" => 24,
                "city_id" => 1133,
                "street_id" => null,
                "name" => "伊賀神戸",
                "hiragana" => "いがかんべ",
                "katakana" => "イガカンベ",
                "katakana_half" => "ｲｶﾞｶﾝﾍﾞ",
                "romaji" => "igakanbe",
                "memo" => "",
                "latitude" => "34.674105",
                "altitude" => "136.151942",
            ]);
            
            Station::create([
                "id" => 5258,
                "prefecture_id" => 24,
                "city_id" => 1133,
                "street_id" => 75472,
                "name" => "青山町",
                "hiragana" => "あおやまちょう",
                "katakana" => "アオヤマチョウ",
                "katakana_half" => "ｱｵﾔﾏﾁｮｳ",
                "romaji" => "aoyamachou",
                "memo" => "",
                "latitude" => "34.672994",
                "altitude" => "136.177356",
            ]);
            
            Station::create([
                "id" => 5259,
                "prefecture_id" => 24,
                "city_id" => 1133,
                "street_id" => null,
                "name" => "伊賀上津",
                "hiragana" => "いがこうづ",
                "katakana" => "イガコウヅ",
                "katakana_half" => "ｲｶﾞｺｳﾂﾞ",
                "romaji" => "igakouzu",
                "memo" => "",
                "latitude" => "34.682771",
                "altitude" => "136.204688",
            ]);
            
            Station::create([
                "id" => 5260,
                "prefecture_id" => 24,
                "city_id" => 1120,
                "street_id" => 73613,
                "name" => "西青山",
                "hiragana" => "にしあおやま",
                "katakana" => "ニシアオヤマ",
                "katakana_half" => "ﾆｼｱｵﾔﾏ",
                "romaji" => "nishiaoyama",
                "memo" => "",
                "latitude" => "34.676384",
                "altitude" => "136.238268",
            ]);
            
            Station::create([
                "id" => 5261,
                "prefecture_id" => 24,
                "city_id" => 1135,
                "street_id" => null,
                "name" => "東青山",
                "hiragana" => "ひがしあおやま",
                "katakana" => "ヒガシアオヤマ",
                "katakana_half" => "ﾋｶﾞｼｱｵﾔﾏ",
                "romaji" => "higashiaoyama",
                "memo" => "三重県",
                "latitude" => "34.675607",
                "altitude" => "136.321484",
            ]);
            
            Station::create([
                "id" => 5262,
                "prefecture_id" => 24,
                "city_id" => 1120,
                "street_id" => 73734,
                "name" => "榊原温泉口",
                "hiragana" => "さかきばらおんせんぐち",
                "katakana" => "サカキバラオンセングチ",
                "katakana_half" => "ｻｶｷﾊﾞﾗｵﾝｾﾝｸﾞﾁ",
                "romaji" => "sakakibaraonsenguchi",
                "memo" => "",
                "latitude" => "34.674830",
                "altitude" => "136.348759",
            ]);
            
            Station::create([
                "id" => 5263,
                "prefecture_id" => 24,
                "city_id" => 1141,
                "street_id" => null,
                "name" => "大三",
                "hiragana" => "おおみつ",
                "katakana" => "オオミツ",
                "katakana_half" => "ｵｵﾐﾂ",
                "romaji" => "oomitsu",
                "memo" => "",
                "latitude" => "34.664137",
                "altitude" => "136.369036",
            ]);
            
            Station::create([
                "id" => 5264,
                "prefecture_id" => 24,
                "city_id" => 1122,
                "street_id" => null,
                "name" => "伊勢石橋",
                "hiragana" => "いせいしばし",
                "katakana" => "イセイシバシ",
                "katakana_half" => "ｲｾｲｼﾊﾞｼ",
                "romaji" => "iseishibashi",
                "memo" => "",
                "latitude" => "34.656944",
                "altitude" => "136.408588",
            ]);
            
            Station::create([
                "id" => 5265,
                "prefecture_id" => 24,
                "city_id" => 1121,
                "street_id" => 73959,
                "name" => "川合高岡",
                "hiragana" => "かわいたかおか",
                "katakana" => "カワイタカオカ",
                "katakana_half" => "ｶﾜｲﾀｶｵｶ",
                "romaji" => "kawaitakaoka",
                "memo" => "",
                "latitude" => "34.656500",
                "altitude" => "136.436586",
            ]);
            
            Station::create([
                "id" => 5266,
                "prefecture_id" => 24,
                "city_id" => 1122,
                "street_id" => null,
                "name" => "伊勢中川",
                "hiragana" => "いせなかがわ",
                "katakana" => "イセナカガワ",
                "katakana_half" => "ｲｾﾅｶｶﾞﾜ",
                "romaji" => "isenakagawa",
                "memo" => "",
                "latitude" => "34.635003",
                "altitude" => "136.477889",
            ]);
            
            Station::create([
                "id" => 5267,
                "prefecture_id" => 24,
                "city_id" => 1129,
                "street_id" => 75282,
                "name" => "桃園",
                "hiragana" => "ももぞの",
                "katakana" => "モモゾノ",
                "katakana_half" => "ﾓﾓｿﾞﾉ",
                "romaji" => "momozono",
                "memo" => "",
                "latitude" => "34.663111",
                "altitude" => "136.477554",
            ]);
            
            Station::create([
                "id" => 5268,
                "prefecture_id" => 24,
                "city_id" => 1120,
                "street_id" => 73824,
                "name" => "久居",
                "hiragana" => "ひさい",
                "katakana" => "ヒサイ",
                "katakana_half" => "ﾋｻｲ",
                "romaji" => "hisai",
                "memo" => "",
                "latitude" => "34.675804",
                "altitude" => "136.477804",
            ]);
            
            Station::create([
                "id" => 5269,
                "prefecture_id" => 24,
                "city_id" => 1120,
                "street_id" => 73886,
                "name" => "南が丘",
                "hiragana" => "みなみがおか",
                "katakana" => "ミナミガオカ",
                "katakana_half" => "ﾐﾅﾐｶﾞｵｶ",
                "romaji" => "minamigaoka",
                "memo" => "",
                "latitude" => "34.692469",
                "altitude" => "136.496969",
            ]);
            
            Station::create([
                "id" => 5270,
                "prefecture_id" => 24,
                "city_id" => 1121,
                "street_id" => 74130,
                "name" => "津新町",
                "hiragana" => "つしんまち",
                "katakana" => "ツシンマチ",
                "katakana_half" => "ﾂｼﾝﾏﾁ",
                "romaji" => "tsushinmachi",
                "memo" => "",
                "latitude" => "34.715967",
                "altitude" => "136.499828",
            ]);
            
            Station::create([
                "id" => 5271,
                "prefecture_id" => 24,
                "city_id" => 1120,
                "street_id" => 73664,
                "name" => "江戸橋",
                "hiragana" => "えどばし",
                "katakana" => "エドバシ",
                "katakana_half" => "ｴﾄﾞﾊﾞｼ",
                "romaji" => "edobashi",
                "memo" => "",
                "latitude" => "34.743631",
                "altitude" => "136.514048",
            ]);
            
            Station::create([
                "id" => 5272,
                "prefecture_id" => 24,
                "city_id" => 1120,
                "street_id" => 73650,
                "name" => "高田本山",
                "hiragana" => "たかだほんざん",
                "katakana" => "タカダホンザン",
                "katakana_half" => "ﾀｶﾀﾞﾎﾝｻﾞﾝ",
                "romaji" => "takadahonzan",
                "memo" => "",
                "latitude" => "34.755574",
                "altitude" => "136.516409",
            ]);
            
            Station::create([
                "id" => 5273,
                "prefecture_id" => 24,
                "city_id" => 1120,
                "street_id" => 73761,
                "name" => "白塚",
                "hiragana" => "しらつか",
                "katakana" => "シラツカ",
                "katakana_half" => "ｼﾗﾂｶ",
                "romaji" => "shiratsuka",
                "memo" => "",
                "latitude" => "34.770351",
                "altitude" => "136.532461",
            ]);
            
            Station::create([
                "id" => 5274,
                "prefecture_id" => 24,
                "city_id" => 1120,
                "street_id" => 73634,
                "name" => "豊津上野",
                "hiragana" => "とよつうえの",
                "katakana" => "トヨツウエノ",
                "katakana_half" => "ﾄﾖﾂｳｴﾉ",
                "romaji" => "toyotsuueno",
                "memo" => "",
                "latitude" => "34.785516",
                "altitude" => "136.543738",
            ]);
            
            Station::create([
                "id" => 5275,
                "prefecture_id" => 24,
                "city_id" => 1120,
                "street_id" => 73711,
                "name" => "千里",
                "hiragana" => "ちさと",
                "katakana" => "チサト",
                "katakana_half" => "ﾁｻﾄ",
                "romaji" => "chisato",
                "memo" => "三重県",
                "latitude" => "34.798515",
                "altitude" => "136.556126",
            ]);
            
            Station::create([
                "id" => 5276,
                "prefecture_id" => 24,
                "city_id" => 1125,
                "street_id" => 74772,
                "name" => "磯山",
                "hiragana" => "いそやま",
                "katakana" => "イソヤマ",
                "katakana_half" => "ｲｿﾔﾏ",
                "romaji" => "isoyama",
                "memo" => "",
                "latitude" => "34.812431",
                "altitude" => "136.568540",
            ]);
            
            Station::create([
                "id" => 5277,
                "prefecture_id" => 24,
                "city_id" => 1120,
                "street_id" => null,
                "name" => "鼓ケ浦",
                "hiragana" => "つづみがうら",
                "katakana" => "ツヅミガウラ",
                "katakana_half" => "ﾂﾂﾞﾐｶﾞｳﾗ",
                "romaji" => "tsuzumigaura",
                "memo" => "",
                "latitude" => "34.826012",
                "altitude" => "136.581178",
            ]);
            
            Station::create([
                "id" => 5278,
                "prefecture_id" => 24,
                "city_id" => 1125,
                "street_id" => 74832,
                "name" => "白子",
                "hiragana" => "しろこ",
                "katakana" => "シロコ",
                "katakana_half" => "ｼﾛｺ",
                "romaji" => "shiroko",
                "memo" => "",
                "latitude" => "34.834012",
                "altitude" => "136.589426",
            ]);
            
            Station::create([
                "id" => 5279,
                "prefecture_id" => 24,
                "city_id" => 1121,
                "street_id" => 74056,
                "name" => "千代崎",
                "hiragana" => "ちよざき",
                "katakana" => "チヨザキ",
                "katakana_half" => "ﾁﾖｻﾞｷ",
                "romaji" => "chiyozaki",
                "memo" => "",
                "latitude" => "34.854343",
                "altitude" => "136.607924",
            ]);
            
            Station::create([
                "id" => 5280,
                "prefecture_id" => 24,
                "city_id" => 1122,
                "street_id" => null,
                "name" => "伊勢若松",
                "hiragana" => "いせわかまつ",
                "katakana" => "イセワカマツ",
                "katakana_half" => "ｲｾﾜｶﾏﾂ",
                "romaji" => "isewakamatsu",
                "memo" => "",
                "latitude" => "34.869147",
                "altitude" => "136.616312",
            ]);
            
            Station::create([
                "id" => 5281,
                "prefecture_id" => 24,
                "city_id" => 1125,
                "street_id" => 74799,
                "name" => "箕田",
                "hiragana" => "みだ",
                "katakana" => "ミダ",
                "katakana_half" => "ﾐﾀﾞ",
                "romaji" => "mida",
                "memo" => "",
                "latitude" => "34.879980",
                "altitude" => "136.622116",
            ]);
            
            Station::create([
                "id" => 5282,
                "prefecture_id" => 24,
                "city_id" => 1125,
                "street_id" => 74807,
                "name" => "長太ノ浦",
                "hiragana" => "なごのうら",
                "katakana" => "ナゴノウラ",
                "katakana_half" => "ﾅｺﾞﾉｳﾗ",
                "romaji" => "nagonoura",
                "memo" => "",
                "latitude" => "34.891923",
                "altitude" => "136.626420",
            ]);
            
            Station::create([
                "id" => 5283,
                "prefecture_id" => 24,
                "city_id" => 1120,
                "street_id" => 73740,
                "name" => "楠",
                "hiragana" => "くす",
                "katakana" => "クス",
                "katakana_half" => "ｸｽ",
                "romaji" => "kusu",
                "memo" => "",
                "latitude" => "34.904393",
                "altitude" => "136.631114",
            ]);
            
            Station::create([
                "id" => 5284,
                "prefecture_id" => 24,
                "city_id" => 1146,
                "street_id" => null,
                "name" => "北楠",
                "hiragana" => "きたくす",
                "katakana" => "キタクス",
                "katakana_half" => "ｷﾀｸｽ",
                "romaji" => "kitakusu",
                "memo" => "",
                "latitude" => "34.916032",
                "altitude" => "136.625003",
            ]);
            
            Station::create([
                "id" => 5285,
                "prefecture_id" => 24,
                "city_id" => 1121,
                "street_id" => 74007,
                "name" => "塩浜",
                "hiragana" => "しおはま",
                "katakana" => "シオハマ",
                "katakana_half" => "ｼｵﾊﾏ",
                "romaji" => "shiohama",
                "memo" => "",
                "latitude" => "34.932390",
                "altitude" => "136.622142",
            ]);
            
            Station::create([
                "id" => 5286,
                "prefecture_id" => 24,
                "city_id" => 1121,
                "street_id" => 74161,
                "name" => "海山道",
                "hiragana" => "みやまど",
                "katakana" => "ミヤマド",
                "katakana_half" => "ﾐﾔﾏﾄﾞ",
                "romaji" => "miyamado",
                "memo" => "",
                "latitude" => "34.942917",
                "altitude" => "136.622891",
            ]);
            
            Station::create([
                "id" => 5287,
                "prefecture_id" => 24,
                "city_id" => 1121,
                "street_id" => 74024,
                "name" => "新正",
                "hiragana" => "しんしょう",
                "katakana" => "シンショウ",
                "katakana_half" => "ｼﾝｼｮｳ",
                "romaji" => "shinshou",
                "memo" => "",
                "latitude" => "34.955554",
                "altitude" => "136.618640",
            ]);
            
            Station::create([
                "id" => 5288,
                "prefecture_id" => 24,
                "city_id" => 1134,
                "street_id" => 75694,
                "name" => "近鉄四日市",
                "hiragana" => "きんてつよっかいち",
                "katakana" => "キンテツヨッカイチ",
                "katakana_half" => "ｷﾝﾃﾂﾖｯｶｲﾁ",
                "romaji" => "kintetsuyokkaichi",
                "memo" => "",
                "latitude" => "34.966998",
                "altitude" => "136.618613",
            ]);
            
            Station::create([
                "id" => 5289,
                "prefecture_id" => 24,
                "city_id" => 1121,
                "street_id" => 73965,
                "name" => "川原町",
                "hiragana" => "かわらまち",
                "katakana" => "カワラマチ",
                "katakana_half" => "ｶﾜﾗﾏﾁ",
                "romaji" => "kawaramachi",
                "memo" => "",
                "latitude" => "34.976775",
                "altitude" => "136.622640",
            ]);
            
            Station::create([
                "id" => 5290,
                "prefecture_id" => 24,
                "city_id" => 1121,
                "street_id" => 73905,
                "name" => "阿倉川",
                "hiragana" => "あくらがわ",
                "katakana" => "アクラガワ",
                "katakana_half" => "ｱｸﾗｶﾞﾜ",
                "romaji" => "akuragawa",
                "memo" => "",
                "latitude" => "34.984691",
                "altitude" => "136.628722",
            ]);
            
            Station::create([
                "id" => 5291,
                "prefecture_id" => 24,
                "city_id" => 1121,
                "street_id" => 73955,
                "name" => "霞ケ浦",
                "hiragana" => "かすみがうら",
                "katakana" => "カスミガウラ",
                "katakana_half" => "ｶｽﾐｶﾞｳﾗ",
                "romaji" => "kasumigaura",
                "memo" => "",
                "latitude" => "34.992829",
                "altitude" => "136.636554",
            ]);
            
            Station::create([
                "id" => 5292,
                "prefecture_id" => 24,
                "city_id" => 1134,
                "street_id" => 75694,
                "name" => "近鉄富田",
                "hiragana" => "きんてつとみだ",
                "katakana" => "キンテツトミダ",
                "katakana_half" => "ｷﾝﾃﾂﾄﾐﾀﾞ",
                "romaji" => "kintetsutomida",
                "memo" => "",
                "latitude" => "35.006827",
                "altitude" => "136.649691",
            ]);
            
            Station::create([
                "id" => 5293,
                "prefecture_id" => 24,
                "city_id" => 1138,
                "street_id" => null,
                "name" => "川越富洲原",
                "hiragana" => "かわごえとみすはら",
                "katakana" => "カワゴエトミスハラ",
                "katakana_half" => "ｶﾜｺﾞｴﾄﾐｽﾊﾗ",
                "romaji" => "kawagoetomisuhara",
                "memo" => "",
                "latitude" => "35.016716",
                "altitude" => "136.660190",
            ]);
            
            Station::create([
                "id" => 5294,
                "prefecture_id" => 24,
                "city_id" => 1122,
                "street_id" => null,
                "name" => "伊勢朝日",
                "hiragana" => "いせあさひ",
                "katakana" => "イセアサヒ",
                "katakana_half" => "ｲｾｱｻﾋ",
                "romaji" => "iseasahi",
                "memo" => "",
                "latitude" => "35.038213",
                "altitude" => "136.668855",
            ]);
            
            Station::create([
                "id" => 5295,
                "prefecture_id" => 24,
                "city_id" => 1124,
                "street_id" => 74743,
                "name" => "益生",
                "hiragana" => "ますお",
                "katakana" => "マスオ",
                "katakana_half" => "ﾏｽｵ",
                "romaji" => "masuo",
                "memo" => "",
                "latitude" => "35.058934",
                "altitude" => "136.678937",
            ]);
            
            Station::create([
                "id" => 5296,
                "prefecture_id" => 24,
                "city_id" => 1134,
                "street_id" => 75694,
                "name" => "近鉄長島",
                "hiragana" => "きんてつながしま",
                "katakana" => "キンテツナガシマ",
                "katakana_half" => "ｷﾝﾃﾂﾅｶﾞｼﾏ",
                "romaji" => "kintetsunagashima",
                "memo" => "",
                "latitude" => "35.097819",
                "altitude" => "136.696683",
            ]);
            
            Station::create([
                "id" => 5297,
                "prefecture_id" => 24,
                "city_id" => 1121,
                "street_id" => 74073,
                "name" => "中川原",
                "hiragana" => "なかがわら",
                "katakana" => "ナカガワラ",
                "katakana_half" => "ﾅｶｶﾞﾜﾗ",
                "romaji" => "nakagawara",
                "memo" => "",
                "latitude" => "34.969386",
                "altitude" => "136.603363",
            ]);
            
            Station::create([
                "id" => 5298,
                "prefecture_id" => 24,
                "city_id" => 1122,
                "street_id" => null,
                "name" => "伊勢松本",
                "hiragana" => "いせまつもと",
                "katakana" => "イセマツモト",
                "katakana_half" => "ｲｾﾏﾂﾓﾄ",
                "romaji" => "isematsumoto",
                "memo" => "",
                "latitude" => "34.969636",
                "altitude" => "136.590698",
            ]);
            
            Station::create([
                "id" => 5299,
                "prefecture_id" => 24,
                "city_id" => 1122,
                "street_id" => null,
                "name" => "伊勢川島",
                "hiragana" => "いせかわしま",
                "katakana" => "イセカワシマ",
                "katakana_half" => "ｲｾｶﾜｼﾏ",
                "romaji" => "isekawashima",
                "memo" => "",
                "latitude" => "34.977746",
                "altitude" => "136.567032",
            ]);
            
            Station::create([
                "id" => 5300,
                "prefecture_id" => 24,
                "city_id" => 1121,
                "street_id" => 74044,
                "name" => "高角",
                "hiragana" => "たかつの",
                "katakana" => "タカツノ",
                "katakana_half" => "ﾀｶﾂﾉ",
                "romaji" => "takatsuno",
                "memo" => "",
                "latitude" => "34.983273",
                "altitude" => "136.554394",
            ]);
            
            Station::create([
                "id" => 5301,
                "prefecture_id" => 24,
                "city_id" => 1120,
                "street_id" => 73696,
                "name" => "桜",
                "hiragana" => "さくら",
                "katakana" => "サクラ",
                "katakana_half" => "ｻｸﾗ",
                "romaji" => "sakura",
                "memo" => "三重県",
                "latitude" => "34.996577",
                "altitude" => "136.541784",
            ]);
            
            Station::create([
                "id" => 5302,
                "prefecture_id" => 24,
                "city_id" => 1136,
                "street_id" => null,
                "name" => "菰野",
                "hiragana" => "こもの",
                "katakana" => "コモノ",
                "katakana_half" => "ｺﾓﾉ",
                "romaji" => "komono",
                "memo" => "",
                "latitude" => "35.008769",
                "altitude" => "136.517396",
            ]);
            
            Station::create([
                "id" => 5303,
                "prefecture_id" => 24,
                "city_id" => 1120,
                "street_id" => 73625,
                "name" => "中菰野",
                "hiragana" => "なかこもの",
                "katakana" => "ナカコモノ",
                "katakana_half" => "ﾅｶｺﾓﾉ",
                "romaji" => "nakakomono",
                "memo" => "",
                "latitude" => "35.012296",
                "altitude" => "136.504231",
            ]);
            
            Station::create([
                "id" => 5304,
                "prefecture_id" => 24,
                "city_id" => 1136,
                "street_id" => 75736,
                "name" => "大羽根園",
                "hiragana" => "おおばねえん",
                "katakana" => "オオバネエン",
                "katakana_half" => "ｵｵﾊﾞﾈｴﾝ",
                "romaji" => "oobaneen",
                "memo" => "",
                "latitude" => "35.012574",
                "altitude" => "136.494176",
            ]);
            
            Station::create([
                "id" => 5305,
                "prefecture_id" => 24,
                "city_id" => 1122,
                "street_id" => 74215,
                "name" => "湯の山温泉",
                "hiragana" => "ゆのやまおんせん",
                "katakana" => "ユノヤマオンセン",
                "katakana_half" => "ﾕﾉﾔﾏｵﾝｾﾝ",
                "romaji" => "yunoyamaonsen",
                "memo" => "",
                "latitude" => "35.011657",
                "altitude" => "136.473566",
            ]);
            
            Station::create([
                "id" => 5306,
                "prefecture_id" => 24,
                "city_id" => 1120,
                "street_id" => 73892,
                "name" => "柳",
                "hiragana" => "やなぎ",
                "katakana" => "ヤナギ",
                "katakana_half" => "ﾔﾅｷﾞ",
                "romaji" => "yanagi",
                "memo" => "",
                "latitude" => "34.871369",
                "altitude" => "136.595897",
            ]);
            
            Station::create([
                "id" => 5307,
                "prefecture_id" => 24,
                "city_id" => 1125,
                "street_id" => null,
                "name" => "鈴鹿市",
                "hiragana" => "すずかし",
                "katakana" => "スズカシ",
                "katakana_half" => "ｽｽﾞｶｼ",
                "romaji" => "suzukashi",
                "memo" => "",
                "latitude" => "34.884006",
                "altitude" => "136.582674",
            ]);
            
            Station::create([
                "id" => 5308,
                "prefecture_id" => 24,
                "city_id" => 1125,
                "street_id" => 74904,
                "name" => "三日市",
                "hiragana" => "みっかいち",
                "katakana" => "ミッカイチ",
                "katakana_half" => "ﾐｯｶｲﾁ",
                "romaji" => "mikkaichi",
                "memo" => "",
                "latitude" => "34.880228",
                "altitude" => "136.562204",
            ]);
            
            Station::create([
                "id" => 5309,
                "prefecture_id" => 24,
                "city_id" => 1125,
                "street_id" => 74896,
                "name" => "平田町",
                "hiragana" => "ひらたちょう",
                "katakana" => "ヒラタチョウ",
                "katakana_half" => "ﾋﾗﾀﾁｮｳ",
                "romaji" => "hiratachou",
                "memo" => "",
                "latitude" => "34.875173",
                "altitude" => "136.542317",
            ]);
            
            Station::create([
                "id" => 5310,
                "prefecture_id" => 24,
                "city_id" => 1122,
                "street_id" => null,
                "name" => "伊勢中原",
                "hiragana" => "いせなかはら",
                "katakana" => "イセナカハラ",
                "katakana_half" => "ｲｾﾅｶﾊﾗ",
                "romaji" => "isenakahara",
                "memo" => "",
                "latitude" => "34.614673",
                "altitude" => "136.497888",
            ]);
            
            Station::create([
                "id" => 5311,
                "prefecture_id" => 24,
                "city_id" => 1123,
                "street_id" => 74446,
                "name" => "松ケ崎",
                "hiragana" => "まつがさき",
                "katakana" => "マツガサキ",
                "katakana_half" => "ﾏﾂｶﾞｻｷ",
                "romaji" => "matsugasaki",
                "memo" => "三重県",
                "latitude" => "34.596452",
                "altitude" => "136.518859",
            ]);
            
            Station::create([
                "id" => 5312,
                "prefecture_id" => 24,
                "city_id" => 1135,
                "street_id" => null,
                "name" => "東松阪",
                "hiragana" => "ひがしまつさか",
                "katakana" => "ヒガシマツサカ",
                "katakana_half" => "ﾋｶﾞｼﾏﾂｻｶ",
                "romaji" => "higashimatsusaka",
                "memo" => "",
                "latitude" => "34.565595",
                "altitude" => "136.546109",
            ]);
            
            Station::create([
                "id" => 5313,
                "prefecture_id" => 24,
                "city_id" => 1123,
                "street_id" => 74418,
                "name" => "櫛田",
                "hiragana" => "くしだ",
                "katakana" => "クシダ",
                "katakana_half" => "ｸｼﾀﾞ",
                "romaji" => "kushida",
                "memo" => "",
                "latitude" => "34.548820",
                "altitude" => "136.582996",
            ]);
            
            Station::create([
                "id" => 5314,
                "prefecture_id" => 24,
                "city_id" => 1120,
                "street_id" => 73604,
                "name" => "漕代",
                "hiragana" => "こいしろ",
                "katakana" => "コイシロ",
                "katakana_half" => "ｺｲｼﾛ",
                "romaji" => "koishiro",
                "memo" => "",
                "latitude" => "34.540876",
                "altitude" => "136.601161",
            ]);
            
            Station::create([
                "id" => 5315,
                "prefecture_id" => 24,
                "city_id" => 1140,
                "street_id" => 75839,
                "name" => "斎宮",
                "hiragana" => "さいくう",
                "katakana" => "サイクウ",
                "katakana_half" => "ｻｲｸｳ",
                "romaji" => "saikuu",
                "memo" => "",
                "latitude" => "34.537933",
                "altitude" => "136.615326",
            ]);
            
            Station::create([
                "id" => 5316,
                "prefecture_id" => 24,
                "city_id" => 1140,
                "street_id" => 75855,
                "name" => "明星",
                "hiragana" => "みょうじょう",
                "katakana" => "ミョウジョウ",
                "katakana_half" => "ﾐｮｳｼﾞｮｳ",
                "romaji" => "myoujou",
                "memo" => "",
                "latitude" => "34.531351",
                "altitude" => "136.642463",
            ]);
            
            Station::create([
                "id" => 5317,
                "prefecture_id" => 24,
                "city_id" => 1122,
                "street_id" => 74209,
                "name" => "明野",
                "hiragana" => "あけの",
                "katakana" => "アケノ",
                "katakana_half" => "ｱｹﾉ",
                "romaji" => "akeno",
                "memo" => "",
                "latitude" => "34.521547",
                "altitude" => "136.668795",
            ]);
            
            Station::create([
                "id" => 5318,
                "prefecture_id" => 24,
                "city_id" => 1122,
                "street_id" => 74209,
                "name" => "小俣",
                "hiragana" => "おばた",
                "katakana" => "オバタ",
                "katakana_half" => "ｵﾊﾞﾀ",
                "romaji" => "obata",
                "memo" => "三重県",
                "latitude" => "34.512742",
                "altitude" => "136.684544",
            ]);
            
            Station::create([
                "id" => 5319,
                "prefecture_id" => 24,
                "city_id" => 1121,
                "street_id" => 73941,
                "name" => "宮町",
                "hiragana" => "みやまち",
                "katakana" => "ミヤマチ",
                "katakana_half" => "ﾐﾔﾏﾁ",
                "romaji" => "miyamachi",
                "memo" => "",
                "latitude" => "34.497883",
                "altitude" => "136.698683",
            ]);
            
            Station::create([
                "id" => 5320,
                "prefecture_id" => 24,
                "city_id" => 1122,
                "street_id" => 74197,
                "name" => "宇治山田",
                "hiragana" => "うじやまだ",
                "katakana" => "ウジヤマダ",
                "katakana_half" => "ｳｼﾞﾔﾏﾀﾞ",
                "romaji" => "ujiyamada",
                "memo" => "",
                "latitude" => "34.488273",
                "altitude" => "136.714015",
            ]);
            
            Station::create([
                "id" => 5321,
                "prefecture_id" => 24,
                "city_id" => 1123,
                "street_id" => 74329,
                "name" => "五十鈴川",
                "hiragana" => "いすずがわ",
                "katakana" => "イスズガワ",
                "katakana_half" => "ｲｽｽﾞｶﾞﾜ",
                "romaji" => "isuzugawa",
                "memo" => "",
                "latitude" => "34.476663",
                "altitude" => "136.727403",
            ]);
            
            Station::create([
                "id" => 5322,
                "prefecture_id" => 24,
                "city_id" => 1122,
                "street_id" => 74183,
                "name" => "朝熊",
                "hiragana" => "あさま",
                "katakana" => "アサマ",
                "katakana_half" => "ｱｻﾏ",
                "romaji" => "asama",
                "memo" => "",
                "latitude" => "34.477274",
                "altitude" => "136.757623",
            ]);
            
            Station::create([
                "id" => 5323,
                "prefecture_id" => 24,
                "city_id" => 1122,
                "street_id" => 74183,
                "name" => "池の浦",
                "hiragana" => "いけのうら",
                "katakana" => "イケノウラ",
                "katakana_half" => "ｲｹﾉｳﾗ",
                "romaji" => "ikenoura",
                "memo" => "",
                "latitude" => "34.479026",
                "altitude" => "136.818507",
            ]);
            
            Station::create([
                "id" => 5324,
                "prefecture_id" => 24,
                "city_id" => 1143,
                "street_id" => 75959,
                "name" => "中之郷",
                "hiragana" => "なかのごう",
                "katakana" => "ナカノゴウ",
                "katakana_half" => "ﾅｶﾉｺﾞｳ",
                "romaji" => "nakanogou",
                "memo" => "",
                "latitude" => "34.479443",
                "altitude" => "136.845532",
            ]);
            
            Station::create([
                "id" => 5325,
                "prefecture_id" => 24,
                "city_id" => 1132,
                "street_id" => null,
                "name" => "志摩赤崎",
                "hiragana" => "しまあかさき",
                "katakana" => "シマアカサキ",
                "katakana_half" => "ｼﾏｱｶｻｷ",
                "romaji" => "shimaakasaki",
                "memo" => "",
                "latitude" => "34.469916",
                "altitude" => "136.841977",
            ]);
            
            Station::create([
                "id" => 5326,
                "prefecture_id" => 24,
                "city_id" => 1120,
                "street_id" => 73610,
                "name" => "加茂",
                "hiragana" => "かも",
                "katakana" => "カモ",
                "katakana_half" => "ｶﾓ",
                "romaji" => "kamo",
                "memo" => "三重県",
                "latitude" => "34.444058",
                "altitude" => "136.846534",
            ]);
            
            Station::create([
                "id" => 5327,
                "prefecture_id" => 24,
                "city_id" => 1129,
                "street_id" => 75281,
                "name" => "松尾",
                "hiragana" => "まつお",
                "katakana" => "マツオ",
                "katakana_half" => "ﾏﾂｵ",
                "romaji" => "matsuo",
                "memo" => "三重県",
                "latitude" => "34.432836",
                "altitude" => "136.840368",
            ]);
            
            Station::create([
                "id" => 5328,
                "prefecture_id" => 24,
                "city_id" => 1128,
                "street_id" => 75197,
                "name" => "白木",
                "hiragana" => "しらき",
                "katakana" => "シラキ",
                "katakana_half" => "ｼﾗｷ",
                "romaji" => "shiraki",
                "memo" => "",
                "latitude" => "34.429004",
                "altitude" => "136.830620",
            ]);
            
            Station::create([
                "id" => 5329,
                "prefecture_id" => 24,
                "city_id" => 1132,
                "street_id" => 75444,
                "name" => "五知",
                "hiragana" => "ごち",
                "katakana" => "ゴチ",
                "katakana_half" => "ｺﾞﾁ",
                "romaji" => "gochi",
                "memo" => "",
                "latitude" => "34.406950",
                "altitude" => "136.810206",
            ]);
            
            Station::create([
                "id" => 5330,
                "prefecture_id" => 24,
                "city_id" => 1128,
                "street_id" => 75208,
                "name" => "沓掛",
                "hiragana" => "くつかけ",
                "katakana" => "クツカケ",
                "katakana_half" => "ｸﾂｶｹ",
                "romaji" => "kutsukake",
                "memo" => "",
                "latitude" => "34.394368",
                "altitude" => "136.814261",
            ]);
            
            Station::create([
                "id" => 5331,
                "prefecture_id" => 24,
                "city_id" => 1124,
                "street_id" => 74636,
                "name" => "上之郷",
                "hiragana" => "かみのごう",
                "katakana" => "カミノゴウ",
                "katakana_half" => "ｶﾐﾉｺﾞｳ",
                "romaji" => "kaminogou",
                "memo" => "",
                "latitude" => "34.379564",
                "altitude" => "136.811484",
            ]);
            
            Station::create([
                "id" => 5332,
                "prefecture_id" => 24,
                "city_id" => 1132,
                "street_id" => null,
                "name" => "志摩磯部",
                "hiragana" => "しまいそべ",
                "katakana" => "シマイソベ",
                "katakana_half" => "ｼﾏｲｿﾍﾞ",
                "romaji" => "shimaisobe",
                "memo" => "",
                "latitude" => "34.369899",
                "altitude" => "136.805457",
            ]);
            
            Station::create([
                "id" => 5333,
                "prefecture_id" => 24,
                "city_id" => 1132,
                "street_id" => 75438,
                "name" => "穴川",
                "hiragana" => "あながわ",
                "katakana" => "アナガワ",
                "katakana_half" => "ｱﾅｶﾞﾜ",
                "romaji" => "anagawa",
                "memo" => "三重県",
                "latitude" => "34.359011",
                "altitude" => "136.815985",
            ]);
            
            Station::create([
                "id" => 5334,
                "prefecture_id" => 24,
                "city_id" => 1132,
                "street_id" => null,
                "name" => "志摩横山",
                "hiragana" => "しまよこやま",
                "katakana" => "シマヨコヤマ",
                "katakana_half" => "ｼﾏﾖｺﾔﾏ",
                "romaji" => "shimayokoyama",
                "memo" => "",
                "latitude" => "34.334153",
                "altitude" => "136.818125",
            ]);
            
            Station::create([
                "id" => 5335,
                "prefecture_id" => 24,
                "city_id" => 1132,
                "street_id" => 75432,
                "name" => "鵜方",
                "hiragana" => "うがた",
                "katakana" => "ウガタ",
                "katakana_half" => "ｳｶﾞﾀ",
                "romaji" => "ugata",
                "memo" => "",
                "latitude" => "34.329348",
                "altitude" => "136.825929",
            ]);
            
            Station::create([
                "id" => 5336,
                "prefecture_id" => 24,
                "city_id" => 1132,
                "street_id" => null,
                "name" => "志摩神明",
                "hiragana" => "しましんめい",
                "katakana" => "シマシンメイ",
                "katakana_half" => "ｼﾏｼﾝﾒｲ",
                "romaji" => "shimashinmei",
                "memo" => "",
                "latitude" => "34.316155",
                "altitude" => "136.829930",
            ]);
            
            Station::create([
                "id" => 5337,
                "prefecture_id" => 24,
                "city_id" => 1120,
                "street_id" => null,
                "name" => "賢島",
                "hiragana" => "かしこじま",
                "katakana" => "カシコジマ",
                "katakana_half" => "ｶｼｺｼﾞﾏ",
                "romaji" => "kashikojima",
                "memo" => "",
                "latitude" => "34.308488",
                "altitude" => "136.818626",
            ]);
            
            Station::create([
                "id" => 5338,
                "prefecture_id" => 24,
                "city_id" => 1121,
                "street_id" => 73943,
                "name" => "大矢知",
                "hiragana" => "おおやち",
                "katakana" => "オオヤチ",
                "katakana_half" => "ｵｵﾔﾁ",
                "romaji" => "ooyachi",
                "memo" => "",
                "latitude" => "35.022159",
                "altitude" => "136.633442",
            ]);
            
            Station::create([
                "id" => 5339,
                "prefecture_id" => 24,
                "city_id" => 1121,
                "street_id" => 74130,
                "name" => "平津",
                "hiragana" => "へいづ",
                "katakana" => "ヘイヅ",
                "katakana_half" => "ﾍｲﾂﾞ",
                "romaji" => "heizu",
                "memo" => "",
                "latitude" => "35.028408",
                "altitude" => "136.618387",
            ]);
            
            Station::create([
                "id" => 5340,
                "prefecture_id" => 24,
                "city_id" => 1120,
                "street_id" => null,
                "name" => "暁学園前",
                "hiragana" => "あかつきがくえんまえ",
                "katakana" => "アカツキガクエンマエ",
                "katakana_half" => "ｱｶﾂｷｶﾞｸｴﾝﾏｴ",
                "romaji" => "akatsukigakuenmae",
                "memo" => "",
                "latitude" => "35.032824",
                "altitude" => "136.605860",
            ]);
            
            Station::create([
                "id" => 5341,
                "prefecture_id" => 24,
                "city_id" => 1121,
                "street_id" => 74173,
                "name" => "山城",
                "hiragana" => "やまじょう",
                "katakana" => "ヤマジョウ",
                "katakana_half" => "ﾔﾏｼﾞｮｳ",
                "romaji" => "yamajou",
                "memo" => "",
                "latitude" => "35.035296",
                "altitude" => "136.588390",
            ]);
            
            Station::create([
                "id" => 5342,
                "prefecture_id" => 24,
                "city_id" => 1120,
                "street_id" => 73680,
                "name" => "保々",
                "hiragana" => "ほぼ",
                "katakana" => "ホボ",
                "katakana_half" => "ﾎﾎﾞ",
                "romaji" => "hobo",
                "memo" => "",
                "latitude" => "35.046877",
                "altitude" => "136.565974",
            ]);
            
            Station::create([
                "id" => 5343,
                "prefecture_id" => 24,
                "city_id" => 1131,
                "street_id" => 75400,
                "name" => "北勢中央公園口",
                "hiragana" => "ほくせいちゅうおうこうえんぐち",
                "katakana" => "ホクセイチュウオウコウエングチ",
                "katakana_half" => "ﾎｸｾｲﾁｭｳｵｳｺｳｴﾝｸﾞﾁ",
                "romaji" => "hokuseichuuoukouenguchi",
                "memo" => "",
                "latitude" => "35.061432",
                "altitude" => "136.565917",
            ]);
            
            Station::create([
                "id" => 5344,
                "prefecture_id" => 24,
                "city_id" => 1131,
                "street_id" => 75366,
                "name" => "梅戸井",
                "hiragana" => "うめどい",
                "katakana" => "ウメドイ",
                "katakana_half" => "ｳﾒﾄﾞｲ",
                "romaji" => "umedoi",
                "memo" => "",
                "latitude" => "35.075097",
                "altitude" => "136.557085",
            ]);
            
            Station::create([
                "id" => 5345,
                "prefecture_id" => 24,
                "city_id" => 1131,
                "street_id" => 75359,
                "name" => "大安",
                "hiragana" => "だいあん",
                "katakana" => "ダイアン",
                "katakana_half" => "ﾀﾞｲｱﾝ",
                "romaji" => "daian",
                "memo" => "",
                "latitude" => "35.091455",
                "altitude" => "136.545723",
            ]);
            
            Station::create([
                "id" => 5346,
                "prefecture_id" => 24,
                "city_id" => 1136,
                "street_id" => null,
                "name" => "三里",
                "hiragana" => "みさと",
                "katakana" => "ミサト",
                "katakana_half" => "ﾐｻﾄ",
                "romaji" => "misato",
                "memo" => "",
                "latitude" => "35.107176",
                "altitude" => "136.538362",
            ]);
            
            Station::create([
                "id" => 5347,
                "prefecture_id" => 24,
                "city_id" => 1131,
                "street_id" => 75373,
                "name" => "丹生川",
                "hiragana" => "にゅうがわ",
                "katakana" => "ニュウガワ",
                "katakana_half" => "ﾆｭｳｶﾞﾜ",
                "romaji" => "nyuugawa",
                "memo" => "",
                "latitude" => "35.122674",
                "altitude" => "136.519474",
            ]);
            
            Station::create([
                "id" => 5348,
                "prefecture_id" => 24,
                "city_id" => 1122,
                "street_id" => null,
                "name" => "伊勢治田",
                "hiragana" => "いせはった",
                "katakana" => "イセハッタ",
                "katakana_half" => "ｲｾﾊｯﾀ",
                "romaji" => "isehatta",
                "memo" => "",
                "latitude" => "35.132784",
                "altitude" => "136.514697",
            ]);
            
            Station::create([
                "id" => 5349,
                "prefecture_id" => 24,
                "city_id" => 1135,
                "street_id" => null,
                "name" => "東藤原",
                "hiragana" => "ひがしふじわら",
                "katakana" => "ヒガシフジワラ",
                "katakana_half" => "ﾋｶﾞｼﾌｼﾞﾜﾗ",
                "romaji" => "higashifujiwara",
                "memo" => "",
                "latitude" => "35.147449",
                "altitude" => "136.498780",
            ]);
            
            Station::create([
                "id" => 5350,
                "prefecture_id" => 24,
                "city_id" => 1131,
                "street_id" => 75393,
                "name" => "西野尻",
                "hiragana" => "にしのじり",
                "katakana" => "ニシノジリ",
                "katakana_half" => "ﾆｼﾉｼﾞﾘ",
                "romaji" => "nishinojiri",
                "memo" => "",
                "latitude" => "35.164002",
                "altitude" => "136.487781",
            ]);
            
            Station::create([
                "id" => 5351,
                "prefecture_id" => 24,
                "city_id" => 1120,
                "street_id" => 73613,
                "name" => "西藤原",
                "hiragana" => "にしふじわら",
                "katakana" => "ニシフジワラ",
                "katakana_half" => "ﾆｼﾌｼﾞﾜﾗ",
                "romaji" => "nishifujiwara",
                "memo" => "",
                "latitude" => "35.170169",
                "altitude" => "136.478115",
            ]);
            
            Station::create([
                "id" => 5352,
                "prefecture_id" => 24,
                "city_id" => 1120,
                "street_id" => 73613,
                "name" => "西桑名",
                "hiragana" => "にしくわな",
                "katakana" => "ニシクワナ",
                "katakana_half" => "ﾆｼｸﾜﾅ",
                "romaji" => "nishikuwana",
                "memo" => "",
                "latitude" => "35.065516",
                "altitude" => "136.683824",
            ]);
            
            Station::create([
                "id" => 5353,
                "prefecture_id" => 24,
                "city_id" => 1124,
                "street_id" => 74558,
                "name" => "馬道",
                "hiragana" => "うまみち",
                "katakana" => "ウマミチ",
                "katakana_half" => "ｳﾏﾐﾁ",
                "romaji" => "umamichi",
                "memo" => "",
                "latitude" => "35.060628",
                "altitude" => "136.676547",
            ]);
            
            Station::create([
                "id" => 5354,
                "prefecture_id" => 24,
                "city_id" => 1124,
                "street_id" => 74706,
                "name" => "西別所",
                "hiragana" => "にしべっしょ",
                "katakana" => "ニシベッショ",
                "katakana_half" => "ﾆｼﾍﾞｯｼｮ",
                "romaji" => "nishibessho",
                "memo" => "",
                "latitude" => "35.059711",
                "altitude" => "136.665743",
            ]);
            
            Station::create([
                "id" => 5355,
                "prefecture_id" => 24,
                "city_id" => 1123,
                "street_id" => 74534,
                "name" => "蓮花寺",
                "hiragana" => "れんげじ",
                "katakana" => "レンゲジ",
                "katakana_half" => "ﾚﾝｹﾞｼﾞ",
                "romaji" => "rengeji",
                "memo" => "",
                "latitude" => "35.059628",
                "altitude" => "136.650967",
            ]);
            
            Station::create([
                "id" => 5356,
                "prefecture_id" => 24,
                "city_id" => 1122,
                "street_id" => 74197,
                "name" => "在良",
                "hiragana" => "ありよし",
                "katakana" => "アリヨシ",
                "katakana_half" => "ｱﾘﾖｼ",
                "romaji" => "ariyoshi",
                "memo" => "",
                "latitude" => "35.060710",
                "altitude" => "136.643523",
            ]);
            
            Station::create([
                "id" => 5357,
                "prefecture_id" => 24,
                "city_id" => 1124,
                "street_id" => 74739,
                "name" => "星川",
                "hiragana" => "ほしかわ",
                "katakana" => "ホシカワ",
                "katakana_half" => "ﾎｼｶﾜ",
                "romaji" => "hoshikawa",
                "memo" => "三重県",
                "latitude" => "35.064349",
                "altitude" => "136.630135",
            ]);
            
            Station::create([
                "id" => 5358,
                "prefecture_id" => 24,
                "city_id" => 1121,
                "street_id" => 74028,
                "name" => "七和",
                "hiragana" => "ななわ",
                "katakana" => "ナナワ",
                "katakana_half" => "ﾅﾅﾜ",
                "romaji" => "nanawa",
                "memo" => "",
                "latitude" => "35.069292",
                "altitude" => "136.615469",
            ]);
            
            Station::create([
                "id" => 5359,
                "prefecture_id" => 24,
                "city_id" => 1135,
                "street_id" => 75716,
                "name" => "穴太",
                "hiragana" => "あのう",
                "katakana" => "アノウ",
                "katakana_half" => "ｱﾉｳ",
                "romaji" => "anou",
                "memo" => "三重県",
                "latitude" => "35.073014",
                "altitude" => "136.605331",
            ]);
            
            Station::create([
                "id" => 5360,
                "prefecture_id" => 24,
                "city_id" => 1135,
                "street_id" => null,
                "name" => "東員",
                "hiragana" => "とういん",
                "katakana" => "トウイン",
                "katakana_half" => "ﾄｳｲﾝ",
                "romaji" => "touin",
                "memo" => "",
                "latitude" => "35.078236",
                "altitude" => "136.587082",
            ]);
            
            Station::create([
                "id" => 5361,
                "prefecture_id" => 24,
                "city_id" => 1131,
                "street_id" => 75342,
                "name" => "大泉",
                "hiragana" => "おおいずみ",
                "katakana" => "オオイズミ",
                "katakana_half" => "ｵｵｲｽﾞﾐ",
                "romaji" => "ooizumi",
                "memo" => "三重県",
                "latitude" => "35.094900",
                "altitude" => "136.569861",
            ]);
            
            Station::create([
                "id" => 5362,
                "prefecture_id" => 24,
                "city_id" => 1131,
                "street_id" => 75350,
                "name" => "楚原",
                "hiragana" => "そはら",
                "katakana" => "ソハラ",
                "katakana_half" => "ｿﾊﾗ",
                "romaji" => "sohara",
                "memo" => "",
                "latitude" => "35.110843",
                "altitude" => "136.560249",
            ]);
            
            Station::create([
                "id" => 5363,
                "prefecture_id" => 24,
                "city_id" => 1131,
                "street_id" => 75402,
                "name" => "麻生田",
                "hiragana" => "おうだ",
                "katakana" => "オウダ",
                "katakana_half" => "ｵｳﾀﾞ",
                "romaji" => "ouda",
                "memo" => "",
                "latitude" => "35.133562",
                "altitude" => "136.535528",
            ]);
            
            Station::create([
                "id" => 5364,
                "prefecture_id" => 24,
                "city_id" => 1131,
                "street_id" => 75400,
                "name" => "阿下喜",
                "hiragana" => "あげき",
                "katakana" => "アゲキ",
                "katakana_half" => "ｱｹﾞｷ",
                "romaji" => "ageki",
                "memo" => "",
                "latitude" => "35.146283",
                "altitude" => "136.519085",
            ]);
            
            Station::create([
                "id" => 5365,
                "prefecture_id" => 24,
                "city_id" => 1125,
                "street_id" => null,
                "name" => "鈴鹿",
                "hiragana" => "すずか",
                "katakana" => "スズカ",
                "katakana_half" => "ｽｽﾞｶ",
                "romaji" => "suzuka",
                "memo" => "",
                "latitude" => "34.878313",
                "altitude" => "136.588813",
            ]);
            
            Station::create([
                "id" => 5366,
                "prefecture_id" => 24,
                "city_id" => 1125,
                "street_id" => 74806,
                "name" => "玉垣",
                "hiragana" => "たまがき",
                "katakana" => "タマガキ",
                "katakana_half" => "ﾀﾏｶﾞｷ",
                "romaji" => "tamagaki",
                "memo" => "",
                "latitude" => "34.855120",
                "altitude" => "136.570232",
            ]);
            
            Station::create([
                "id" => 5367,
                "prefecture_id" => 24,
                "city_id" => 1125,
                "street_id" => null,
                "name" => "鈴鹿サーキット稲生",
                "hiragana" => "すずかさーきっといのう",
                "katakana" => "スズカサーキットイノウ",
                "katakana_half" => "ｽｽﾞｶｻｰｷｯﾄｲﾉｳ",
                "romaji" => "suzukasaｰkittoinou",
                "memo" => "",
                "latitude" => "34.841010",
                "altitude" => "136.555013",
            ]);
            
            Station::create([
                "id" => 5368,
                "prefecture_id" => 24,
                "city_id" => 1125,
                "street_id" => 74857,
                "name" => "徳田",
                "hiragana" => "とくだ",
                "katakana" => "トクダ",
                "katakana_half" => "ﾄｸﾀﾞ",
                "romaji" => "tokuda",
                "memo" => "三重県",
                "latitude" => "34.825956",
                "altitude" => "136.543958",
            ]);
            
            Station::create([
                "id" => 5369,
                "prefecture_id" => 24,
                "city_id" => 1125,
                "street_id" => 74862,
                "name" => "中瀬古",
                "hiragana" => "なかせこ",
                "katakana" => "ナカセコ",
                "katakana_half" => "ﾅｶｾｺ",
                "romaji" => "nakaseko",
                "memo" => "",
                "latitude" => "34.812485",
                "altitude" => "136.542987",
            ]);
            
            Station::create([
                "id" => 5370,
                "prefecture_id" => 24,
                "city_id" => 1122,
                "street_id" => null,
                "name" => "伊勢上野",
                "hiragana" => "いせうえの",
                "katakana" => "イセウエノ",
                "katakana_half" => "ｲｾｳｴﾉ",
                "romaji" => "iseueno",
                "memo" => "",
                "latitude" => "34.800459",
                "altitude" => "136.542432",
            ]);
            
            Station::create([
                "id" => 5371,
                "prefecture_id" => 24,
                "city_id" => 1120,
                "street_id" => 73704,
                "name" => "河芸",
                "hiragana" => "かわげ",
                "katakana" => "カワゲ",
                "katakana_half" => "ｶﾜｹﾞ",
                "romaji" => "kawage",
                "memo" => "",
                "latitude" => "34.781349",
                "altitude" => "136.531184",
            ]);
            
            Station::create([
                "id" => 5372,
                "prefecture_id" => 24,
                "city_id" => 1131,
                "street_id" => 75354,
                "name" => "東一身田",
                "hiragana" => "ひがしいしんでん",
                "katakana" => "ヒガシイシンデン",
                "katakana_half" => "ﾋｶﾞｼｲｼﾝﾃﾞﾝ",
                "romaji" => "higashiishinden",
                "memo" => "",
                "latitude" => "34.758602",
                "altitude" => "136.512130",
            ]);
            
            Station::create([
                "id" => 5373,
                "prefecture_id" => 24,
                "city_id" => 1120,
                "street_id" => 73781,
                "name" => "新居",
                "hiragana" => "にい",
                "katakana" => "ニイ",
                "katakana_half" => "ﾆｲ",
                "romaji" => "nii",
                "memo" => "",
                "latitude" => "34.786341",
                "altitude" => "136.115801",
            ]);
            
            Station::create([
                "id" => 5374,
                "prefecture_id" => 24,
                "city_id" => 1133,
                "street_id" => 75510,
                "name" => "西大手",
                "hiragana" => "にしおおて",
                "katakana" => "ニシオオテ",
                "katakana_half" => "ﾆｼｵｵﾃ",
                "romaji" => "nishioote",
                "memo" => "",
                "latitude" => "34.766928",
                "altitude" => "136.124635",
            ]);
            
            Station::create([
                "id" => 5375,
                "prefecture_id" => 24,
                "city_id" => 1120,
                "street_id" => 73621,
                "name" => "上野市",
                "hiragana" => "うえのし",
                "katakana" => "ウエノシ",
                "katakana_half" => "ｳｴﾉｼ",
                "romaji" => "uenoshi",
                "memo" => "",
                "latitude" => "34.767622",
                "altitude" => "136.129496",
            ]);
            
            Station::create([
                "id" => 5376,
                "prefecture_id" => 24,
                "city_id" => 1120,
                "street_id" => 73748,
                "name" => "広小路",
                "hiragana" => "ひろこうじ",
                "katakana" => "ヒロコウジ",
                "katakana_half" => "ﾋﾛｺｳｼﾞ",
                "romaji" => "hirokouji",
                "memo" => "三重県",
                "latitude" => "34.766983",
                "altitude" => "136.134439",
            ]);
            
            Station::create([
                "id" => 5377,
                "prefecture_id" => 24,
                "city_id" => 1133,
                "street_id" => 75494,
                "name" => "茅町",
                "hiragana" => "かやまち",
                "katakana" => "カヤマチ",
                "katakana_half" => "ｶﾔﾏﾁ",
                "romaji" => "kayamachi",
                "memo" => "",
                "latitude" => "34.761456",
                "altitude" => "136.135662",
            ]);
            
            Station::create([
                "id" => 5378,
                "prefecture_id" => 24,
                "city_id" => 1121,
                "street_id" => 73915,
                "name" => "桑町",
                "hiragana" => "くわまち",
                "katakana" => "クワマチ",
                "katakana_half" => "ｸﾜﾏﾁ",
                "romaji" => "kuwamachi",
                "memo" => "",
                "latitude" => "34.754123",
                "altitude" => "136.136690",
            ]);
            
            Station::create([
                "id" => 5379,
                "prefecture_id" => 24,
                "city_id" => 1133,
                "street_id" => 75573,
                "name" => "四十九",
                "hiragana" => "しじゅく",
                "katakana" => "シジュク",
                "katakana_half" => "ｼｼﾞｭｸ",
                "romaji" => "shijuku",
                "memo" => "",
                "latitude" => "34.748513",
                "altitude" => "136.136884",
            ]);
            
            Station::create([
                "id" => 5380,
                "prefecture_id" => 24,
                "city_id" => 1133,
                "street_id" => 75480,
                "name" => "猪田道",
                "hiragana" => "いだみち",
                "katakana" => "イダミチ",
                "katakana_half" => "ｲﾀﾞﾐﾁ",
                "romaji" => "idamichi",
                "memo" => "",
                "latitude" => "34.735153",
                "altitude" => "136.140469",
            ]);
            
            Station::create([
                "id" => 5381,
                "prefecture_id" => 24,
                "city_id" => 1133,
                "street_id" => 75482,
                "name" => "市部",
                "hiragana" => "いちべ",
                "katakana" => "イチベ",
                "katakana_half" => "ｲﾁﾍﾞ",
                "romaji" => "ichibe",
                "memo" => "",
                "latitude" => "34.726487",
                "altitude" => "136.148663",
            ]);
            
            Station::create([
                "id" => 5382,
                "prefecture_id" => 24,
                "city_id" => 1133,
                "street_id" => 75483,
                "name" => "依那古",
                "hiragana" => "いなこ",
                "katakana" => "イナコ",
                "katakana_half" => "ｲﾅｺ",
                "romaji" => "inako",
                "memo" => "",
                "latitude" => "34.715516",
                "altitude" => "136.153079",
            ]);
            
            Station::create([
                "id" => 5383,
                "prefecture_id" => 24,
                "city_id" => 1130,
                "street_id" => 75325,
                "name" => "丸山",
                "hiragana" => "まるやま",
                "katakana" => "マルヤマ",
                "katakana_half" => "ﾏﾙﾔﾏ",
                "romaji" => "maruyama",
                "memo" => "三重県",
                "latitude" => "34.704435",
                "altitude" => "136.157413",
            ]);
            
            Station::create([
                "id" => 5384,
                "prefecture_id" => 24,
                "city_id" => 1133,
                "street_id" => 75520,
                "name" => "上林",
                "hiragana" => "うえばやし",
                "katakana" => "ウエバヤシ",
                "katakana_half" => "ｳｴﾊﾞﾔｼ",
                "romaji" => "uebayashi",
                "memo" => "",
                "latitude" => "34.695241",
                "altitude" => "136.161107",
            ]);
            
            Station::create([
                "id" => 5385,
                "prefecture_id" => 24,
                "city_id" => 1133,
                "street_id" => 75643,
                "name" => "比土",
                "hiragana" => "ひど",
                "katakana" => "ヒド",
                "katakana_half" => "ﾋﾄﾞ",
                "romaji" => "hido",
                "memo" => "",
                "latitude" => "34.676215",
                "altitude" => "136.160636",
            ]);
            
            Station::create([
                "id" => 5386,
                "prefecture_id" => 24,
                "city_id" => 1124,
                "street_id" => 74716,
                "name" => "播磨",
                "hiragana" => "はりま",
                "katakana" => "ハリマ",
                "katakana_half" => "ﾊﾘﾏ",
                "romaji" => "harima",
                "memo" => "",
                "latitude" => "35.078293",
                "altitude" => "136.674602",
            ]);
            
            Station::create([
                "id" => 5387,
                "prefecture_id" => 24,
                "city_id" => 1124,
                "street_id" => 74608,
                "name" => "下深谷",
                "hiragana" => "しもふかや",
                "katakana" => "シモフカヤ",
                "katakana_half" => "ｼﾓﾌｶﾔ",
                "romaji" => "shimofukaya",
                "memo" => "",
                "latitude" => "35.096068",
                "altitude" => "136.661463",
            ]);
            
            Station::create([
                "id" => 5388,
                "prefecture_id" => 24,
                "city_id" => 1124,
                "street_id" => 74639,
                "name" => "下野代",
                "hiragana" => "しものしろ",
                "katakana" => "シモノシロ",
                "katakana_half" => "ｼﾓﾉｼﾛ",
                "romaji" => "shimonoshiro",
                "memo" => "",
                "latitude" => "35.115927",
                "altitude" => "136.647215",
            ]);
            
            Station::create([
                "id" => 5389,
                "prefecture_id" => 24,
                "city_id" => 1124,
                "street_id" => 74632,
                "name" => "多度",
                "hiragana" => "たど",
                "katakana" => "タド",
                "katakana_half" => "ﾀﾄﾞ",
                "romaji" => "tado",
                "memo" => "",
                "latitude" => "35.133952",
                "altitude" => "136.640658",
            ]);
            
            Station::create([
                "id" => 5390,
                "prefecture_id" => 24,
                "city_id" => 1120,
                "street_id" => 73630,
                "name" => "あすなろう四日市",
                "hiragana" => "あすなろうよっかいち",
                "katakana" => "アスナロウヨッカイチ",
                "katakana_half" => "ｱｽﾅﾛｳﾖｯｶｲﾁ",
                "romaji" => "asunarouyokkaichi",
                "memo" => "",
                "latitude" => "34.965776",
                "altitude" => "136.618307",
            ]);
            
            Station::create([
                "id" => 5391,
                "prefecture_id" => 24,
                "city_id" => 1121,
                "street_id" => 73901,
                "name" => "赤堀",
                "hiragana" => "あかほり",
                "katakana" => "アカホリ",
                "katakana_half" => "ｱｶﾎﾘ",
                "romaji" => "akahori",
                "memo" => "",
                "latitude" => "34.959248",
                "altitude" => "136.610446",
            ]);
            
            Station::create([
                "id" => 5392,
                "prefecture_id" => 24,
                "city_id" => 1121,
                "street_id" => 74123,
                "name" => "日永",
                "hiragana" => "ひなが",
                "katakana" => "ヒナガ",
                "katakana_half" => "ﾋﾅｶﾞ",
                "romaji" => "hinaga",
                "memo" => "",
                "latitude" => "34.955943",
                "altitude" => "136.604225",
            ]);
            
            Station::create([
                "id" => 5393,
                "prefecture_id" => 24,
                "city_id" => 1145,
                "street_id" => null,
                "name" => "南日永",
                "hiragana" => "みなみひなが",
                "katakana" => "ミナミヒナガ",
                "katakana_half" => "ﾐﾅﾐﾋﾅｶﾞ",
                "romaji" => "minamihinaga",
                "memo" => "",
                "latitude" => "34.949860",
                "altitude" => "136.601003",
            ]);
            
            Station::create([
                "id" => 5394,
                "prefecture_id" => 24,
                "city_id" => 1121,
                "street_id" => 74063,
                "name" => "泊",
                "hiragana" => "とまり",
                "katakana" => "トマリ",
                "katakana_half" => "ﾄﾏﾘ",
                "romaji" => "tomari",
                "memo" => "三重県",
                "latitude" => "34.940389",
                "altitude" => "136.598420",
            ]);
            
            Station::create([
                "id" => 5395,
                "prefecture_id" => 24,
                "city_id" => 1121,
                "street_id" => 73932,
                "name" => "追分",
                "hiragana" => "おいわけ",
                "katakana" => "オイワケ",
                "katakana_half" => "ｵｲﾜｹ",
                "romaji" => "oiwake",
                "memo" => "三重県",
                "latitude" => "34.933918",
                "altitude" => "136.596060",
            ]);
            
            Station::create([
                "id" => 5396,
                "prefecture_id" => 24,
                "city_id" => 1121,
                "street_id" => 73946,
                "name" => "小古曽",
                "hiragana" => "おごそ",
                "katakana" => "オゴソ",
                "katakana_half" => "ｵｺﾞｿ",
                "romaji" => "ogoso",
                "memo" => "",
                "latitude" => "34.928751",
                "altitude" => "136.592116",
            ]);
            
            Station::create([
                "id" => 5397,
                "prefecture_id" => 24,
                "city_id" => 1120,
                "street_id" => 73609,
                "name" => "内部",
                "hiragana" => "うつべ",
                "katakana" => "ウツベ",
                "katakana_half" => "ｳﾂﾍﾞ",
                "romaji" => "utsube",
                "memo" => "",
                "latitude" => "34.925613",
                "altitude" => "136.586894",
            ]);
            
            Station::create([
                "id" => 5398,
                "prefecture_id" => 24,
                "city_id" => 1121,
                "street_id" => 74091,
                "name" => "西日野",
                "hiragana" => "にしひの",
                "katakana" => "ニシヒノ",
                "katakana_half" => "ﾆｼﾋﾉ",
                "romaji" => "nishihino",
                "memo" => "",
                "latitude" => "34.953027",
                "altitude" => "136.591198",
            ]);
            
    }
}
