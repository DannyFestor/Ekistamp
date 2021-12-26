<?php
namespace Database\Seeders;

use App\Models\Station;
use Illuminate\Database\Seeder;

class StationSeeder13 extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        
            Station::create([
                "id" => 2409,
                "prefecture_id" => 13,
                "city_id" => 702,
                "street_id" => null,
                "name" => "東京",
                "hiragana" => "とうきょう",
                "katakana" => "トウキョウ",
                "katakana_half" => "ﾄｳｷｮｳ",
                "romaji" => "toukyou",
                "memo" => "",
                "latitude" => "35.681310",
                "altitude" => "139.767234",
            ]);
            
            Station::create([
                "id" => 2410,
                "prefecture_id" => 13,
                "city_id" => 659,
                "street_id" => 39399,
                "name" => "上野",
                "hiragana" => "うえの",
                "katakana" => "ウエノ",
                "katakana_half" => "ｳｴﾉ",
                "romaji" => "ueno",
                "memo" => "",
                "latitude" => "35.713557",
                "altitude" => "139.776788",
            ]);
            
            Station::create([
                "id" => 2411,
                "prefecture_id" => 13,
                "city_id" => 671,
                "street_id" => 40047,
                "name" => "尾久",
                "hiragana" => "おく",
                "katakana" => "オク",
                "katakana_half" => "ｵｸ",
                "romaji" => "oku",
                "memo" => "",
                "latitude" => "35.746774",
                "altitude" => "139.753844",
            ]);
            
            Station::create([
                "id" => 2412,
                "prefecture_id" => 13,
                "city_id" => 670,
                "street_id" => 40015,
                "name" => "赤羽",
                "hiragana" => "あかばね",
                "katakana" => "アカバネ",
                "katakana_half" => "ｱｶﾊﾞﾈ",
                "romaji" => "akabane",
                "memo" => "",
                "latitude" => "35.777660",
                "altitude" => "139.720957",
            ]);
            
            Station::create([
                "id" => 2413,
                "prefecture_id" => 13,
                "city_id" => 671,
                "street_id" => 40048,
                "name" => "日暮里",
                "hiragana" => "にっぽり",
                "katakana" => "ニッポリ",
                "katakana_half" => "ﾆｯﾎﾟﾘ",
                "romaji" => "nippori",
                "memo" => "",
                "latitude" => "35.728083",
                "altitude" => "139.770704",
            ]);
            
            Station::create([
                "id" => 2414,
                "prefecture_id" => 13,
                "city_id" => 680,
                "street_id" => null,
                "name" => "三河島",
                "hiragana" => "みかわしま",
                "katakana" => "ミカワシマ",
                "katakana_half" => "ﾐｶﾜｼﾏ",
                "romaji" => "mikawashima",
                "memo" => "",
                "latitude" => "35.733304",
                "altitude" => "139.777676",
            ]);
            
            Station::create([
                "id" => 2415,
                "prefecture_id" => 13,
                "city_id" => 671,
                "street_id" => 40052,
                "name" => "南千住",
                "hiragana" => "みなみせんじゅ",
                "katakana" => "ミナミセンジュ",
                "katakana_half" => "ﾐﾅﾐｾﾝｼﾞｭ",
                "romaji" => "minamisenju",
                "memo" => "",
                "latitude" => "35.732944",
                "altitude" => "139.799008",
            ]);
            
            Station::create([
                "id" => 2416,
                "prefecture_id" => 13,
                "city_id" => 664,
                "street_id" => 39642,
                "name" => "北千住",
                "hiragana" => "きたせんじゅ",
                "katakana" => "キタセンジュ",
                "katakana_half" => "ｷﾀｾﾝｼﾞｭ",
                "romaji" => "kitasenju",
                "memo" => "",
                "latitude" => "35.749609",
                "altitude" => "139.805118",
            ]);
            
            Station::create([
                "id" => 2417,
                "prefecture_id" => 13,
                "city_id" => 655,
                "street_id" => 37535,
                "name" => "新日本橋",
                "hiragana" => "しんにほんばし",
                "katakana" => "シンニホンバシ",
                "katakana_half" => "ｼﾝﾆﾎﾝﾊﾞｼ",
                "romaji" => "shinnihonbashi",
                "memo" => "",
                "latitude" => "35.688921",
                "altitude" => "139.774012",
            ]);
            
            Station::create([
                "id" => 2418,
                "prefecture_id" => 13,
                "city_id" => 655,
                "street_id" => 37617,
                "name" => "馬喰町",
                "hiragana" => "ばくろちょう",
                "katakana" => "バクロチョウ",
                "katakana_half" => "ﾊﾞｸﾛﾁｮｳ",
                "romaji" => "bakurochou",
                "memo" => "",
                "latitude" => "35.693392",
                "altitude" => "139.782483",
            ]);
            
            Station::create([
                "id" => 2419,
                "prefecture_id" => 13,
                "city_id" => 660,
                "street_id" => 39434,
                "name" => "錦糸町",
                "hiragana" => "きんしちょう",
                "katakana" => "キンシチョウ",
                "katakana_half" => "ｷﾝｼﾁｮｳ",
                "romaji" => "kinshichou",
                "memo" => "",
                "latitude" => "35.696421",
                "altitude" => "139.813952",
            ]);
            
            Station::create([
                "id" => 2420,
                "prefecture_id" => 13,
                "city_id" => 661,
                "street_id" => 39465,
                "name" => "亀戸",
                "hiragana" => "かめいど",
                "katakana" => "カメイド",
                "katakana_half" => "ｶﾒｲﾄﾞ",
                "romaji" => "kameido",
                "memo" => "",
                "latitude" => "35.697587",
                "altitude" => "139.826090",
            ]);
            
            Station::create([
                "id" => 2421,
                "prefecture_id" => 13,
                "city_id" => 676,
                "street_id" => 40321,
                "name" => "平井",
                "hiragana" => "ひらい",
                "katakana" => "ヒライ",
                "katakana_half" => "ﾋﾗｲ",
                "romaji" => "hirai",
                "memo" => "東京都",
                "latitude" => "35.706447",
                "altitude" => "139.842755",
            ]);
            
            Station::create([
                "id" => 2422,
                "prefecture_id" => 13,
                "city_id" => 675,
                "street_id" => 40261,
                "name" => "新小岩",
                "hiragana" => "しんこいわ",
                "katakana" => "シンコイワ",
                "katakana_half" => "ｼﾝｺｲﾜ",
                "romaji" => "shinkoiwa",
                "memo" => "",
                "latitude" => "35.716779",
                "altitude" => "139.858281",
            ]);
            
            Station::create([
                "id" => 2423,
                "prefecture_id" => 13,
                "city_id" => 675,
                "street_id" => 40261,
                "name" => "小岩",
                "hiragana" => "こいわ",
                "katakana" => "コイワ",
                "katakana_half" => "ｺｲﾜ",
                "romaji" => "koiwa",
                "memo" => "",
                "latitude" => "35.732946",
                "altitude" => "139.881695",
            ]);
            
            Station::create([
                "id" => 2424,
                "prefecture_id" => 13,
                "city_id" => 655,
                "street_id" => 37624,
                "name" => "八丁堀",
                "hiragana" => "はっちょうぼり",
                "katakana" => "ハッチョウボリ",
                "katakana_half" => "ﾊｯﾁｮｳﾎﾞﾘ",
                "romaji" => "hacchoubori",
                "memo" => "東京都",
                "latitude" => "35.674588",
                "altitude" => "139.777706",
            ]);
            
            Station::create([
                "id" => 2425,
                "prefecture_id" => 13,
                "city_id" => 661,
                "street_id" => 39462,
                "name" => "越中島",
                "hiragana" => "えっちゅうじま",
                "katakana" => "エッチュウジマ",
                "katakana_half" => "ｴｯﾁｭｳｼﾞﾏ",
                "romaji" => "ecchuujima",
                "memo" => "",
                "latitude" => "35.667951",
                "altitude" => "139.792622",
            ]);
            
            Station::create([
                "id" => 2426,
                "prefecture_id" => 13,
                "city_id" => 661,
                "street_id" => 39472,
                "name" => "潮見",
                "hiragana" => "しおみ",
                "katakana" => "シオミ",
                "katakana_half" => "ｼｵﾐ",
                "romaji" => "shiomi",
                "memo" => "",
                "latitude" => "35.658702",
                "altitude" => "139.817370",
            ]);
            
            Station::create([
                "id" => 2427,
                "prefecture_id" => 13,
                "city_id" => 661,
                "street_id" => 39476,
                "name" => "新木場",
                "hiragana" => "しんきば",
                "katakana" => "シンキバ",
                "katakana_half" => "ｼﾝｷﾊﾞ",
                "romaji" => "shinkiba",
                "memo" => "",
                "latitude" => "35.646148",
                "altitude" => "139.827425",
            ]);
            
            Station::create([
                "id" => 2428,
                "prefecture_id" => 13,
                "city_id" => 676,
                "street_id" => 40292,
                "name" => "葛西臨海公園",
                "hiragana" => "かさいりんかいこうえん",
                "katakana" => "カサイリンカイコウエン",
                "katakana_half" => "ｶｻｲﾘﾝｶｲｺｳｴﾝ",
                "romaji" => "kasairinkaikouen",
                "memo" => "",
                "latitude" => "35.644399",
                "altitude" => "139.861617",
            ]);
            
            Station::create([
                "id" => 2429,
                "prefecture_id" => 13,
                "city_id" => 682,
                "street_id" => null,
                "name" => "府中本町",
                "hiragana" => "ふちゅうほんまち",
                "katakana" => "フチュウホンマチ",
                "katakana_half" => "ﾌﾁｭｳﾎﾝﾏﾁ",
                "romaji" => "fuchuuhonmachi",
                "memo" => "",
                "latitude" => "35.666195",
                "altitude" => "139.477204",
            ]);
            
            Station::create([
                "id" => 2430,
                "prefecture_id" => 13,
                "city_id" => 670,
                "street_id" => null,
                "name" => "北府中",
                "hiragana" => "きたふちゅう",
                "katakana" => "キタフチュウ",
                "katakana_half" => "ｷﾀﾌﾁｭｳ",
                "romaji" => "kitafuchuu",
                "memo" => "",
                "latitude" => "35.680777",
                "altitude" => "139.471815",
            ]);
            
            Station::create([
                "id" => 2431,
                "prefecture_id" => 13,
                "city_id" => 702,
                "street_id" => null,
                "name" => "西国分寺",
                "hiragana" => "にしこくぶんじ",
                "katakana" => "ニシコクブンジ",
                "katakana_half" => "ﾆｼｺｸﾌﾞﾝｼﾞ",
                "romaji" => "nishikokubunji",
                "memo" => "",
                "latitude" => "35.699775",
                "altitude" => "139.465704",
            ]);
            
            Station::create([
                "id" => 2432,
                "prefecture_id" => 13,
                "city_id" => 687,
                "street_id" => null,
                "name" => "新小平",
                "hiragana" => "しんこだいら",
                "katakana" => "シンコダイラ",
                "katakana_half" => "ｼﾝｺﾀﾞｲﾗ",
                "romaji" => "shinkodaira",
                "memo" => "",
                "latitude" => "35.730799",
                "altitude" => "139.470506",
            ]);
            
            Station::create([
                "id" => 2433,
                "prefecture_id" => 13,
                "city_id" => 689,
                "street_id" => 40751,
                "name" => "新秋津",
                "hiragana" => "しんあきつ",
                "katakana" => "シンアキツ",
                "katakana_half" => "ｼﾝｱｷﾂ",
                "romaji" => "shinakitsu",
                "memo" => "",
                "latitude" => "35.777850",
                "altitude" => "139.493392",
            ]);
            
            Station::create([
                "id" => 2434,
                "prefecture_id" => 13,
                "city_id" => 674,
                "street_id" => 40163,
                "name" => "綾瀬",
                "hiragana" => "あやせ",
                "katakana" => "アヤセ",
                "katakana_half" => "ｱﾔｾ",
                "romaji" => "ayase",
                "memo" => "",
                "latitude" => "35.762163",
                "altitude" => "139.825171",
            ]);
            
            Station::create([
                "id" => 2435,
                "prefecture_id" => 13,
                "city_id" => 675,
                "street_id" => 40257,
                "name" => "亀有",
                "hiragana" => "かめあり",
                "katakana" => "カメアリ",
                "katakana_half" => "ｶﾒｱﾘ",
                "romaji" => "kameari",
                "memo" => "",
                "latitude" => "35.766552",
                "altitude" => "139.847474",
            ]);
            
            Station::create([
                "id" => 2436,
                "prefecture_id" => 13,
                "city_id" => 675,
                "street_id" => 40254,
                "name" => "金町",
                "hiragana" => "かなまち",
                "katakana" => "カナマチ",
                "katakana_half" => "ｶﾅﾏﾁ",
                "romaji" => "kanamachi",
                "memo" => "東京都",
                "latitude" => "35.769525",
                "altitude" => "139.870277",
            ]);
            
            Station::create([
                "id" => 2437,
                "prefecture_id" => 13,
                "city_id" => 677,
                "street_id" => null,
                "name" => "八王子",
                "hiragana" => "はちおうじ",
                "katakana" => "ハチオウジ",
                "katakana_half" => "ﾊﾁｵｳｼﾞ",
                "romaji" => "hachiouji",
                "memo" => "",
                "latitude" => "35.655639",
                "altitude" => "139.338966",
            ]);
            
            Station::create([
                "id" => 2438,
                "prefecture_id" => 13,
                "city_id" => 670,
                "street_id" => null,
                "name" => "北八王子",
                "hiragana" => "きたはちおうじ",
                "katakana" => "キタハチオウジ",
                "katakana_half" => "ｷﾀﾊﾁｵｳｼﾞ",
                "romaji" => "kitahachiouji",
                "memo" => "",
                "latitude" => "35.669332",
                "altitude" => "139.363491",
            ]);
            
            Station::create([
                "id" => 2439,
                "prefecture_id" => 13,
                "city_id" => 677,
                "street_id" => 40374,
                "name" => "小宮",
                "hiragana" => "こみや",
                "katakana" => "コミヤ",
                "katakana_half" => "ｺﾐﾔ",
                "romaji" => "komiya",
                "memo" => "",
                "latitude" => "35.685469",
                "altitude" => "139.368795",
            ]);
            
            Station::create([
                "id" => 2440,
                "prefecture_id" => 13,
                "city_id" => 683,
                "street_id" => 40593,
                "name" => "拝島",
                "hiragana" => "はいじま",
                "katakana" => "ハイジマ",
                "katakana_half" => "ﾊｲｼﾞﾏ",
                "romaji" => "haijima",
                "memo" => "",
                "latitude" => "35.721132",
                "altitude" => "139.343657",
            ]);
            
            Station::create([
                "id" => 2441,
                "prefecture_id" => 13,
                "city_id" => 659,
                "street_id" => null,
                "name" => "東福生",
                "hiragana" => "ひがしふっさ",
                "katakana" => "ヒガシフッサ",
                "katakana_half" => "ﾋｶﾞｼﾌｯｻ",
                "romaji" => "higashifussa",
                "memo" => "",
                "latitude" => "35.745823",
                "altitude" => "139.335878",
            ]);
            
            Station::create([
                "id" => 2442,
                "prefecture_id" => 13,
                "city_id" => 703,
                "street_id" => 41014,
                "name" => "箱根ケ崎",
                "hiragana" => "はこねがさき",
                "katakana" => "ハコネガサキ",
                "katakana_half" => "ﾊｺﾈｶﾞｻｷ",
                "romaji" => "hakonegasaki",
                "memo" => "",
                "latitude" => "35.771376",
                "altitude" => "139.346709",
            ]);
            
            Station::create([
                "id" => 2443,
                "prefecture_id" => 13,
                "city_id" => 662,
                "street_id" => 39583,
                "name" => "西大井",
                "hiragana" => "にしおおい",
                "katakana" => "ニシオオイ",
                "katakana_half" => "ﾆｼｵｵｲ",
                "romaji" => "nishiooi",
                "memo" => "",
                "latitude" => "35.601789",
                "altitude" => "139.721825",
            ]);
            
            Station::create([
                "id" => 2444,
                "prefecture_id" => 13,
                "city_id" => 662,
                "street_id" => 39543,
                "name" => "大崎",
                "hiragana" => "おおさき",
                "katakana" => "オオサキ",
                "katakana_half" => "ｵｵｻｷ",
                "romaji" => "oosaki",
                "memo" => "",
                "latitude" => "35.619899",
                "altitude" => "139.728185",
            ]);
            
            Station::create([
                "id" => 2445,
                "prefecture_id" => 13,
                "city_id" => 666,
                "street_id" => 39757,
                "name" => "恵比寿",
                "hiragana" => "えびす",
                "katakana" => "エビス",
                "katakana_half" => "ｴﾋﾞｽ",
                "romaji" => "ebisu",
                "memo" => "",
                "latitude" => "35.646841",
                "altitude" => "139.709297",
            ]);
            
            Station::create([
                "id" => 2446,
                "prefecture_id" => 13,
                "city_id" => 666,
                "street_id" => null,
                "name" => "渋谷",
                "hiragana" => "しぶや",
                "katakana" => "シブヤ",
                "katakana_half" => "ｼﾌﾞﾔ",
                "romaji" => "shibuya",
                "memo" => "",
                "latitude" => "35.658506",
                "altitude" => "139.701797",
            ]);
            
            Station::create([
                "id" => 2447,
                "prefecture_id" => 13,
                "city_id" => 657,
                "street_id" => null,
                "name" => "新宿",
                "hiragana" => "しんじゅく",
                "katakana" => "シンジュク",
                "katakana_half" => "ｼﾝｼﾞｭｸ",
                "romaji" => "shinjuku",
                "memo" => "",
                "latitude" => "35.690725",
                "altitude" => "139.699851",
            ]);
            
            Station::create([
                "id" => 2448,
                "prefecture_id" => 13,
                "city_id" => 669,
                "street_id" => 39932,
                "name" => "池袋",
                "hiragana" => "いけぶくろ",
                "katakana" => "イケブクロ",
                "katakana_half" => "ｲｹﾌﾞｸﾛ",
                "romaji" => "ikebukuro",
                "memo" => "",
                "latitude" => "35.729914",
                "altitude" => "139.711154",
            ]);
            
            Station::create([
                "id" => 2449,
                "prefecture_id" => 13,
                "city_id" => 672,
                "street_id" => null,
                "name" => "板橋",
                "hiragana" => "いたばし",
                "katakana" => "イタバシ",
                "katakana_half" => "ｲﾀﾊﾞｼ",
                "romaji" => "itabashi",
                "memo" => "",
                "latitude" => "35.746024",
                "altitude" => "139.719569",
            ]);
            
            Station::create([
                "id" => 2450,
                "prefecture_id" => 13,
                "city_id" => 670,
                "street_id" => 40024,
                "name" => "十条",
                "hiragana" => "じゅうじょう",
                "katakana" => "ジュウジョウ",
                "katakana_half" => "ｼﾞｭｳｼﾞｮｳ",
                "romaji" => "juujou",
                "memo" => "東京都",
                "latitude" => "35.760551",
                "altitude" => "139.722179",
            ]);
            
            Station::create([
                "id" => 2451,
                "prefecture_id" => 13,
                "city_id" => 670,
                "street_id" => null,
                "name" => "北赤羽",
                "hiragana" => "きたあかばね",
                "katakana" => "キタアカバネ",
                "katakana_half" => "ｷﾀｱｶﾊﾞﾈ",
                "romaji" => "kitaakabane",
                "memo" => "",
                "latitude" => "35.786687",
                "altitude" => "139.706207",
            ]);
            
            Station::create([
                "id" => 2452,
                "prefecture_id" => 13,
                "city_id" => 670,
                "street_id" => 40021,
                "name" => "浮間舟渡",
                "hiragana" => "うきまふなど",
                "katakana" => "ウキマフナド",
                "katakana_half" => "ｳｷﾏﾌﾅﾄﾞ",
                "romaji" => "ukimafunado",
                "memo" => "",
                "latitude" => "35.791213",
                "altitude" => "139.691375",
            ]);
            
            Station::create([
                "id" => 2453,
                "prefecture_id" => 13,
                "city_id" => 654,
                "street_id" => 37042,
                "name" => "神田",
                "hiragana" => "かんだ",
                "katakana" => "カンダ",
                "katakana_half" => "ｶﾝﾀﾞ",
                "romaji" => "kanda",
                "memo" => "東京都",
                "latitude" => "35.692948",
                "altitude" => "139.770956",
            ]);
            
            Station::create([
                "id" => 2454,
                "prefecture_id" => 13,
                "city_id" => 712,
                "street_id" => null,
                "name" => "御茶ノ水",
                "hiragana" => "おちゃのみず",
                "katakana" => "オチャノミズ",
                "katakana_half" => "ｵﾁｬﾉﾐｽﾞ",
                "romaji" => "ochanomizu",
                "memo" => "",
                "latitude" => "35.699835",
                "altitude" => "139.763790",
            ]);
            
            Station::create([
                "id" => 2455,
                "prefecture_id" => 13,
                "city_id" => 657,
                "street_id" => 38719,
                "name" => "水道橋",
                "hiragana" => "すいどうばし",
                "katakana" => "スイドウバシ",
                "katakana_half" => "ｽｲﾄﾞｳﾊﾞｼ",
                "romaji" => "suidoubashi",
                "memo" => "",
                "latitude" => "35.702057",
                "altitude" => "139.754512",
            ]);
            
            Station::create([
                "id" => 2456,
                "prefecture_id" => 13,
                "city_id" => 654,
                "street_id" => 37039,
                "name" => "飯田橋",
                "hiragana" => "いいだばし",
                "katakana" => "イイダバシ",
                "katakana_half" => "ｲｲﾀﾞﾊﾞｼ",
                "romaji" => "iidabashi",
                "memo" => "",
                "latitude" => "35.702113",
                "altitude" => "139.744847",
            ]);
            
            Station::create([
                "id" => 2457,
                "prefecture_id" => 13,
                "city_id" => 677,
                "street_id" => null,
                "name" => "市ケ谷",
                "hiragana" => "いちがや",
                "katakana" => "イチガヤ",
                "katakana_half" => "ｲﾁｶﾞﾔ",
                "romaji" => "ichigaya",
                "memo" => "",
                "latitude" => "35.691003",
                "altitude" => "139.735598",
            ]);
            
            Station::create([
                "id" => 2458,
                "prefecture_id" => 13,
                "city_id" => 654,
                "street_id" => 37521,
                "name" => "四ツ谷",
                "hiragana" => "よつや",
                "katakana" => "ヨツヤ",
                "katakana_half" => "ﾖﾂﾔ",
                "romaji" => "yotsuya",
                "memo" => "",
                "latitude" => "35.686004",
                "altitude" => "139.730654",
            ]);
            
            Station::create([
                "id" => 2459,
                "prefecture_id" => 13,
                "city_id" => 657,
                "street_id" => 38713,
                "name" => "信濃町",
                "hiragana" => "しなのまち",
                "katakana" => "シナノマチ",
                "katakana_half" => "ｼﾅﾉﾏﾁ",
                "romaji" => "shinanomachi",
                "memo" => "",
                "latitude" => "35.680087",
                "altitude" => "139.720238",
            ]);
            
            Station::create([
                "id" => 2460,
                "prefecture_id" => 13,
                "city_id" => 658,
                "street_id" => 39381,
                "name" => "千駄ケ谷",
                "hiragana" => "せんだがや",
                "katakana" => "センダガヤ",
                "katakana_half" => "ｾﾝﾀﾞｶﾞﾔ",
                "romaji" => "sendagaya",
                "memo" => "",
                "latitude" => "35.681198",
                "altitude" => "139.711489",
            ]);
            
            Station::create([
                "id" => 2461,
                "prefecture_id" => 13,
                "city_id" => 666,
                "street_id" => 39871,
                "name" => "代々木",
                "hiragana" => "よよぎ",
                "katakana" => "ヨヨギ",
                "katakana_half" => "ﾖﾖｷﾞ",
                "romaji" => "yoyogi",
                "memo" => "",
                "latitude" => "35.683058",
                "altitude" => "139.702045",
            ]);
            
            Station::create([
                "id" => 2462,
                "prefecture_id" => 13,
                "city_id" => 657,
                "street_id" => 38698,
                "name" => "大久保",
                "hiragana" => "おおくぼ",
                "katakana" => "オオクボ",
                "katakana_half" => "ｵｵｸﾎﾞ",
                "romaji" => "ookubo",
                "memo" => "東京都",
                "latitude" => "35.700724",
                "altitude" => "139.697378",
            ]);
            
            Station::create([
                "id" => 2463,
                "prefecture_id" => 13,
                "city_id" => 667,
                "street_id" => 39886,
                "name" => "東中野",
                "hiragana" => "ひがしなかの",
                "katakana" => "ヒガシナカノ",
                "katakana_half" => "ﾋｶﾞｼﾅｶﾉ",
                "romaji" => "higashinakano",
                "memo" => "",
                "latitude" => "35.706278",
                "altitude" => "139.683602",
            ]);
            
            Station::create([
                "id" => 2464,
                "prefecture_id" => 13,
                "city_id" => 667,
                "street_id" => null,
                "name" => "中野",
                "hiragana" => "なかの",
                "katakana" => "ナカノ",
                "katakana_half" => "ﾅｶﾉ",
                "romaji" => "nakano",
                "memo" => "東京都",
                "latitude" => "35.705805",
                "altitude" => "139.665964",
            ]);
            
            Station::create([
                "id" => 2465,
                "prefecture_id" => 13,
                "city_id" => 668,
                "street_id" => 39909,
                "name" => "高円寺",
                "hiragana" => "こうえんじ",
                "katakana" => "コウエンジ",
                "katakana_half" => "ｺｳｴﾝｼﾞ",
                "romaji" => "kouenji",
                "memo" => "",
                "latitude" => "35.705333",
                "altitude" => "139.649826",
            ]);
            
            Station::create([
                "id" => 2466,
                "prefecture_id" => 13,
                "city_id" => 668,
                "street_id" => 39895,
                "name" => "阿佐ケ谷",
                "hiragana" => "あさがや",
                "katakana" => "アサガヤ",
                "katakana_half" => "ｱｻｶﾞﾔ",
                "romaji" => "asagaya",
                "memo" => "",
                "latitude" => "35.704889",
                "altitude" => "139.636327",
            ]);
            
            Station::create([
                "id" => 2467,
                "prefecture_id" => 13,
                "city_id" => 668,
                "street_id" => 39904,
                "name" => "荻窪",
                "hiragana" => "おぎくぼ",
                "katakana" => "オギクボ",
                "katakana_half" => "ｵｷﾞｸﾎﾞ",
                "romaji" => "ogikubo",
                "memo" => "",
                "latitude" => "35.704611",
                "altitude" => "139.619968",
            ]);
            
            Station::create([
                "id" => 2468,
                "prefecture_id" => 13,
                "city_id" => 668,
                "street_id" => 39920,
                "name" => "西荻窪",
                "hiragana" => "にしおぎくぼ",
                "katakana" => "ニシオギクボ",
                "katakana_half" => "ﾆｼｵｷﾞｸﾎﾞ",
                "romaji" => "nishiogikubo",
                "memo" => "",
                "latitude" => "35.703777",
                "altitude" => "139.599636",
            ]);
            
            Station::create([
                "id" => 2469,
                "prefecture_id" => 13,
                "city_id" => 679,
                "street_id" => 40472,
                "name" => "吉祥寺",
                "hiragana" => "きちじょうじ",
                "katakana" => "キチジョウジ",
                "katakana_half" => "ｷﾁｼﾞｮｳｼﾞ",
                "romaji" => "kichijouji",
                "memo" => "",
                "latitude" => "35.702944",
                "altitude" => "139.579861",
            ]);
            
            Station::create([
                "id" => 2470,
                "prefecture_id" => 13,
                "city_id" => 680,
                "street_id" => null,
                "name" => "三鷹",
                "hiragana" => "みたか",
                "katakana" => "ミタカ",
                "katakana_half" => "ﾐﾀｶ",
                "romaji" => "mitaka",
                "memo" => "",
                "latitude" => "35.702665",
                "altitude" => "139.560696",
            ]);
            
            Station::create([
                "id" => 2471,
                "prefecture_id" => 13,
                "city_id" => 679,
                "street_id" => null,
                "name" => "武蔵境",
                "hiragana" => "むさしさかい",
                "katakana" => "ムサシサカイ",
                "katakana_half" => "ﾑｻｼｻｶｲ",
                "romaji" => "musashisakai",
                "memo" => "",
                "latitude" => "35.701998",
                "altitude" => "139.543947",
            ]);
            
            Station::create([
                "id" => 2472,
                "prefecture_id" => 13,
                "city_id" => 676,
                "street_id" => 40315,
                "name" => "東小金井",
                "hiragana" => "ひがしこがねい",
                "katakana" => "ヒガシコガネイ",
                "katakana_half" => "ﾋｶﾞｼｺｶﾞﾈｲ",
                "romaji" => "higashikoganei",
                "memo" => "",
                "latitude" => "35.701554",
                "altitude" => "139.523754",
            ]);
            
            Station::create([
                "id" => 2473,
                "prefecture_id" => 13,
                "city_id" => 679,
                "street_id" => null,
                "name" => "武蔵小金井",
                "hiragana" => "むさしこがねい",
                "katakana" => "ムサシコガネイ",
                "katakana_half" => "ﾑｻｼｺｶﾞﾈｲ",
                "romaji" => "musashikoganei",
                "memo" => "",
                "latitude" => "35.701109",
                "altitude" => "139.506338",
            ]);
            
            Station::create([
                "id" => 2474,
                "prefecture_id" => 13,
                "city_id" => 690,
                "street_id" => null,
                "name" => "国分寺",
                "hiragana" => "こくぶんじ",
                "katakana" => "コクブンジ",
                "katakana_half" => "ｺｸﾌﾞﾝｼﾞ",
                "romaji" => "kokubunji",
                "memo" => "",
                "latitude" => "35.700247",
                "altitude" => "139.480257",
            ]);
            
            Station::create([
                "id" => 2475,
                "prefecture_id" => 13,
                "city_id" => 691,
                "street_id" => null,
                "name" => "国立",
                "hiragana" => "くにたち",
                "katakana" => "クニタチ",
                "katakana_half" => "ｸﾆﾀﾁ",
                "romaji" => "kunitachi",
                "memo" => "",
                "latitude" => "35.699135",
                "altitude" => "139.446400",
            ]);
            
            Station::create([
                "id" => 2476,
                "prefecture_id" => 13,
                "city_id" => 678,
                "street_id" => null,
                "name" => "立川",
                "hiragana" => "たちかわ",
                "katakana" => "タチカワ",
                "katakana_half" => "ﾀﾁｶﾜ",
                "romaji" => "tachikawa",
                "memo" => "",
                "latitude" => "35.698024",
                "altitude" => "139.413930",
            ]);
            
            Station::create([
                "id" => 2477,
                "prefecture_id" => 13,
                "city_id" => 688,
                "street_id" => null,
                "name" => "日野",
                "hiragana" => "ひの",
                "katakana" => "ヒノ",
                "katakana_half" => "ﾋﾉ",
                "romaji" => "hino",
                "memo" => "東京都",
                "latitude" => "35.679248",
                "altitude" => "139.393987",
            ]);
            
            Station::create([
                "id" => 2478,
                "prefecture_id" => 13,
                "city_id" => 688,
                "street_id" => 40733,
                "name" => "豊田",
                "hiragana" => "とよだ",
                "katakana" => "トヨダ",
                "katakana_half" => "ﾄﾖﾀﾞ",
                "romaji" => "toyoda",
                "memo" => "",
                "latitude" => "35.659500",
                "altitude" => "139.381489",
            ]);
            
            Station::create([
                "id" => 2479,
                "prefecture_id" => 13,
                "city_id" => 702,
                "street_id" => null,
                "name" => "西八王子",
                "hiragana" => "にしはちおうじ",
                "katakana" => "ニシハチオウジ",
                "katakana_half" => "ﾆｼﾊﾁｵｳｼﾞ",
                "romaji" => "nishihachiouji",
                "memo" => "",
                "latitude" => "35.656498",
                "altitude" => "139.312440",
            ]);
            
            Station::create([
                "id" => 2480,
                "prefecture_id" => 13,
                "city_id" => 677,
                "street_id" => 40346,
                "name" => "高尾",
                "hiragana" => "たかお",
                "katakana" => "タカオ",
                "katakana_half" => "ﾀｶｵ",
                "romaji" => "takao",
                "memo" => "東京都",
                "latitude" => "35.642194",
                "altitude" => "139.281776",
            ]);
            
            Station::create([
                "id" => 2481,
                "prefecture_id" => 13,
                "city_id" => 660,
                "street_id" => 39453,
                "name" => "両国",
                "hiragana" => "りょうごく",
                "katakana" => "リョウゴク",
                "katakana_half" => "ﾘｮｳｺﾞｸ",
                "romaji" => "ryougoku",
                "memo" => "",
                "latitude" => "35.696114",
                "altitude" => "139.792537",
            ]);
            
            Station::create([
                "id" => 2482,
                "prefecture_id" => 13,
                "city_id" => 659,
                "street_id" => 39395,
                "name" => "浅草橋",
                "hiragana" => "あさくさばし",
                "katakana" => "アサクサバシ",
                "katakana_half" => "ｱｻｸｻﾊﾞｼ",
                "romaji" => "asakusabashi",
                "memo" => "",
                "latitude" => "35.697447",
                "altitude" => "139.785982",
            ]);
            
            Station::create([
                "id" => 2483,
                "prefecture_id" => 13,
                "city_id" => 659,
                "street_id" => 39393,
                "name" => "秋葉原",
                "hiragana" => "あきはばら",
                "katakana" => "アキハバラ",
                "katakana_half" => "ｱｷﾊﾊﾞﾗ",
                "romaji" => "akihabara",
                "memo" => "",
                "latitude" => "35.698530",
                "altitude" => "139.773095",
            ]);
            
            Station::create([
                "id" => 2484,
                "prefecture_id" => 13,
                "city_id" => 702,
                "street_id" => null,
                "name" => "西立川",
                "hiragana" => "にしたちかわ",
                "katakana" => "ニシタチカワ",
                "katakana_half" => "ﾆｼﾀﾁｶﾜ",
                "romaji" => "nishitachikawa",
                "memo" => "",
                "latitude" => "35.703578",
                "altitude" => "139.393681",
            ]);
            
            Station::create([
                "id" => 2485,
                "prefecture_id" => 13,
                "city_id" => 662,
                "street_id" => 39591,
                "name" => "東中神",
                "hiragana" => "ひがしなかがみ",
                "katakana" => "ヒガシナカガミ",
                "katakana_half" => "ﾋｶﾞｼﾅｶｶﾞﾐ",
                "romaji" => "higashinakagami",
                "memo" => "",
                "latitude" => "35.706356",
                "altitude" => "139.384487",
            ]);
            
            Station::create([
                "id" => 2486,
                "prefecture_id" => 13,
                "city_id" => 683,
                "street_id" => 40592,
                "name" => "中神",
                "hiragana" => "なかがみ",
                "katakana" => "ナカガミ",
                "katakana_half" => "ﾅｶｶﾞﾐ",
                "romaji" => "nakagami",
                "memo" => "",
                "latitude" => "35.709050",
                "altitude" => "139.375821",
            ]);
            
            Station::create([
                "id" => 2487,
                "prefecture_id" => 13,
                "city_id" => 683,
                "street_id" => null,
                "name" => "昭島",
                "hiragana" => "あきしま",
                "katakana" => "アキシマ",
                "katakana_half" => "ｱｷｼﾏ",
                "romaji" => "akishima",
                "memo" => "",
                "latitude" => "35.713549",
                "altitude" => "139.360906",
            ]);
            
            Station::create([
                "id" => 2488,
                "prefecture_id" => 13,
                "city_id" => 692,
                "street_id" => 40795,
                "name" => "牛浜",
                "hiragana" => "うしはま",
                "katakana" => "ウシハマ",
                "katakana_half" => "ｳｼﾊﾏ",
                "romaji" => "ushihama",
                "memo" => "",
                "latitude" => "35.734602",
                "altitude" => "139.333434",
            ]);
            
            Station::create([
                "id" => 2489,
                "prefecture_id" => 13,
                "city_id" => 692,
                "street_id" => null,
                "name" => "福生",
                "hiragana" => "ふっさ",
                "katakana" => "フッサ",
                "katakana_half" => "ﾌｯｻ",
                "romaji" => "fussa",
                "memo" => "",
                "latitude" => "35.742351",
                "altitude" => "139.327962",
            ]);
            
            Station::create([
                "id" => 2490,
                "prefecture_id" => 13,
                "city_id" => 700,
                "street_id" => null,
                "name" => "羽村",
                "hiragana" => "はむら",
                "katakana" => "ハムラ",
                "katakana_half" => "ﾊﾑﾗ",
                "romaji" => "hamura",
                "memo" => "",
                "latitude" => "35.758432",
                "altitude" => "139.315935",
            ]);
            
            Station::create([
                "id" => 2491,
                "prefecture_id" => 13,
                "city_id" => 700,
                "street_id" => 40925,
                "name" => "小作",
                "hiragana" => "おざく",
                "katakana" => "オザク",
                "katakana_half" => "ｵｻﾞｸ",
                "romaji" => "ozaku",
                "memo" => "",
                "latitude" => "35.776291",
                "altitude" => "139.301935",
            ]);
            
            Station::create([
                "id" => 2492,
                "prefecture_id" => 13,
                "city_id" => 681,
                "street_id" => 40505,
                "name" => "河辺",
                "hiragana" => "かべ",
                "katakana" => "カベ",
                "katakana_half" => "ｶﾍﾞ",
                "romaji" => "kabe",
                "memo" => "",
                "latitude" => "35.784540",
                "altitude" => "139.284798",
            ]);
            
            Station::create([
                "id" => 2493,
                "prefecture_id" => 13,
                "city_id" => 681,
                "street_id" => 40528,
                "name" => "東青梅",
                "hiragana" => "ひがしおうめ",
                "katakana" => "ヒガシオウメ",
                "katakana_half" => "ﾋｶﾞｼｵｳﾒ",
                "romaji" => "higashioume",
                "memo" => "",
                "latitude" => "35.789900",
                "altitude" => "139.272326",
            ]);
            
            Station::create([
                "id" => 2494,
                "prefecture_id" => 13,
                "city_id" => 681,
                "street_id" => null,
                "name" => "青梅",
                "hiragana" => "おうめ",
                "katakana" => "オウメ",
                "katakana_half" => "ｵｳﾒ",
                "romaji" => "oume",
                "memo" => "",
                "latitude" => "35.790290",
                "altitude" => "139.258383",
            ]);
            
            Station::create([
                "id" => 2495,
                "prefecture_id" => 13,
                "city_id" => 655,
                "street_id" => 37625,
                "name" => "宮ノ平",
                "hiragana" => "みやのひら",
                "katakana" => "ミヤノヒラ",
                "katakana_half" => "ﾐﾔﾉﾋﾗ",
                "romaji" => "miyanohira",
                "memo" => "",
                "latitude" => "35.787345",
                "altitude" => "139.236885",
            ]);
            
            Station::create([
                "id" => 2496,
                "prefecture_id" => 13,
                "city_id" => 681,
                "street_id" => 40529,
                "name" => "日向和田",
                "hiragana" => "ひなたわだ",
                "katakana" => "ヒナタワダ",
                "katakana_half" => "ﾋﾅﾀﾜﾀﾞ",
                "romaji" => "hinatawada",
                "memo" => "",
                "latitude" => "35.787928",
                "altitude" => "139.230025",
            ]);
            
            Station::create([
                "id" => 2497,
                "prefecture_id" => 13,
                "city_id" => 673,
                "street_id" => 40118,
                "name" => "石神前",
                "hiragana" => "いしがみまえ",
                "katakana" => "イシガミマエ",
                "katakana_half" => "ｲｼｶﾞﾐﾏｴ",
                "romaji" => "ishigamimae",
                "memo" => "",
                "latitude" => "35.796733",
                "altitude" => "139.225052",
            ]);
            
            Station::create([
                "id" => 2498,
                "prefecture_id" => 13,
                "city_id" => 681,
                "street_id" => 40532,
                "name" => "二俣尾",
                "hiragana" => "ふたまたお",
                "katakana" => "フタマタオ",
                "katakana_half" => "ﾌﾀﾏﾀｵ",
                "romaji" => "futamatao",
                "memo" => "",
                "latitude" => "35.804454",
                "altitude" => "139.215636",
            ]);
            
            Station::create([
                "id" => 2499,
                "prefecture_id" => 13,
                "city_id" => 654,
                "street_id" => null,
                "name" => "軍畑",
                "hiragana" => "いくさばた",
                "katakana" => "イクサバタ",
                "katakana_half" => "ｲｸｻﾊﾞﾀ",
                "romaji" => "ikusabata",
                "memo" => "",
                "latitude" => "35.807592",
                "altitude" => "139.207664",
            ]);
            
            Station::create([
                "id" => 2500,
                "prefecture_id" => 13,
                "city_id" => 681,
                "street_id" => 40510,
                "name" => "沢井",
                "hiragana" => "さわい",
                "katakana" => "サワイ",
                "katakana_half" => "ｻﾜｲ",
                "romaji" => "sawai",
                "memo" => "",
                "latitude" => "35.805786",
                "altitude" => "139.194055",
            ]);
            
            Station::create([
                "id" => 2501,
                "prefecture_id" => 13,
                "city_id" => 712,
                "street_id" => null,
                "name" => "御嶽",
                "hiragana" => "みたけ",
                "katakana" => "ミタケ",
                "katakana_half" => "ﾐﾀｹ",
                "romaji" => "mitake",
                "memo" => "",
                "latitude" => "35.801425",
                "altitude" => "139.182916",
            ]);
            
            Station::create([
                "id" => 2502,
                "prefecture_id" => 13,
                "city_id" => 706,
                "street_id" => 41041,
                "name" => "川井",
                "hiragana" => "かわい",
                "katakana" => "カワイ",
                "katakana_half" => "ｶﾜｲ",
                "romaji" => "kawai",
                "memo" => "",
                "latitude" => "35.813824",
                "altitude" => "139.164028",
            ]);
            
            Station::create([
                "id" => 2503,
                "prefecture_id" => 13,
                "city_id" => 661,
                "street_id" => 39531,
                "name" => "古里",
                "hiragana" => "こり",
                "katakana" => "コリ",
                "katakana_half" => "ｺﾘ",
                "romaji" => "kori",
                "memo" => "東京都",
                "latitude" => "35.816257",
                "altitude" => "139.152113",
            ]);
            
            Station::create([
                "id" => 2504,
                "prefecture_id" => 13,
                "city_id" => 654,
                "street_id" => null,
                "name" => "鳩ノ巣",
                "hiragana" => "はとのす",
                "katakana" => "ハトノス",
                "katakana_half" => "ﾊﾄﾉｽ",
                "romaji" => "hatonosu",
                "memo" => "",
                "latitude" => "35.814923",
                "altitude" => "139.128754",
            ]);
            
            Station::create([
                "id" => 2505,
                "prefecture_id" => 13,
                "city_id" => 706,
                "street_id" => 41046,
                "name" => "白丸",
                "hiragana" => "しろまる",
                "katakana" => "シロマル",
                "katakana_half" => "ｼﾛﾏﾙ",
                "romaji" => "shiromaru",
                "memo" => "東京都",
                "latitude" => "35.811813",
                "altitude" => "139.114782",
            ]);
            
            Station::create([
                "id" => 2506,
                "prefecture_id" => 13,
                "city_id" => 706,
                "street_id" => null,
                "name" => "奥多摩",
                "hiragana" => "おくたま",
                "katakana" => "オクタマ",
                "katakana_half" => "ｵｸﾀﾏ",
                "romaji" => "okutama",
                "memo" => "",
                "latitude" => "35.809174",
                "altitude" => "139.096701",
            ]);
            
            Station::create([
                "id" => 2507,
                "prefecture_id" => 13,
                "city_id" => 692,
                "street_id" => 40798,
                "name" => "熊川",
                "hiragana" => "くまがわ",
                "katakana" => "クマガワ",
                "katakana_half" => "ｸﾏｶﾞﾜ",
                "romaji" => "kumagawa",
                "memo" => "",
                "latitude" => "35.728436",
                "altitude" => "139.335407",
            ]);
            
            Station::create([
                "id" => 2508,
                "prefecture_id" => 13,
                "city_id" => 659,
                "street_id" => null,
                "name" => "東秋留",
                "hiragana" => "ひがしあきる",
                "katakana" => "ヒガシアキル",
                "katakana_half" => "ﾋｶﾞｼｱｷﾙ",
                "romaji" => "higashiakiru",
                "memo" => "",
                "latitude" => "35.725908",
                "altitude" => "139.310909",
            ]);
            
            Station::create([
                "id" => 2509,
                "prefecture_id" => 13,
                "city_id" => 701,
                "street_id" => 40940,
                "name" => "秋川",
                "hiragana" => "あきがわ",
                "katakana" => "アキガワ",
                "katakana_half" => "ｱｷｶﾞﾜ",
                "romaji" => "akigawa",
                "memo" => "",
                "latitude" => "35.728046",
                "altitude" => "139.286689",
            ]);
            
            Station::create([
                "id" => 2510,
                "prefecture_id" => 13,
                "city_id" => 679,
                "street_id" => null,
                "name" => "武蔵引田",
                "hiragana" => "むさしひきだ",
                "katakana" => "ムサシヒキダ",
                "katakana_half" => "ﾑｻｼﾋｷﾀﾞ",
                "romaji" => "musashihikida",
                "memo" => "",
                "latitude" => "35.729768",
                "altitude" => "139.270245",
            ]);
            
            Station::create([
                "id" => 2511,
                "prefecture_id" => 13,
                "city_id" => 679,
                "street_id" => null,
                "name" => "武蔵増戸",
                "hiragana" => "むさしますこ",
                "katakana" => "ムサシマスコ",
                "katakana_half" => "ﾑｻｼﾏｽｺ",
                "romaji" => "musashimasuko",
                "memo" => "",
                "latitude" => "35.730852",
                "altitude" => "139.255914",
            ]);
            
            Station::create([
                "id" => 2512,
                "prefecture_id" => 13,
                "city_id" => 679,
                "street_id" => null,
                "name" => "武蔵五日市",
                "hiragana" => "むさしいつかいち",
                "katakana" => "ムサシイツカイチ",
                "katakana_half" => "ﾑｻｼｲﾂｶｲﾁ",
                "romaji" => "musashiitsukaichi",
                "memo" => "",
                "latitude" => "35.732240",
                "altitude" => "139.228083",
            ]);
            
            Station::create([
                "id" => 2513,
                "prefecture_id" => 13,
                "city_id" => 662,
                "street_id" => null,
                "name" => "品川",
                "hiragana" => "しながわ",
                "katakana" => "シナガワ",
                "katakana_half" => "ｼﾅｶﾞﾜ",
                "romaji" => "shinagawa",
                "memo" => "",
                "latitude" => "35.628510",
                "altitude" => "139.738740",
            ]);
            
            Station::create([
                "id" => 2514,
                "prefecture_id" => 13,
                "city_id" => 654,
                "street_id" => 37134,
                "name" => "田町",
                "hiragana" => "たまち",
                "katakana" => "タマチ",
                "katakana_half" => "ﾀﾏﾁ",
                "romaji" => "tamachi",
                "memo" => "東京都",
                "latitude" => "35.645730",
                "altitude" => "139.747544",
            ]);
            
            Station::create([
                "id" => 2515,
                "prefecture_id" => 13,
                "city_id" => 656,
                "street_id" => 38253,
                "name" => "浜松町",
                "hiragana" => "はままつちょう",
                "katakana" => "ハママツチョウ",
                "katakana_half" => "ﾊﾏﾏﾂﾁｮｳ",
                "romaji" => "hamamatsuchou",
                "memo" => "",
                "latitude" => "35.655452",
                "altitude" => "139.757070",
            ]);
            
            Station::create([
                "id" => 2516,
                "prefecture_id" => 13,
                "city_id" => 656,
                "street_id" => 38104,
                "name" => "新橋",
                "hiragana" => "しんばし",
                "katakana" => "シンバシ",
                "katakana_half" => "ｼﾝﾊﾞｼ",
                "romaji" => "shinbashi",
                "memo" => "",
                "latitude" => "35.666562",
                "altitude" => "139.758181",
            ]);
            
            Station::create([
                "id" => 2517,
                "prefecture_id" => 13,
                "city_id" => 654,
                "street_id" => 37520,
                "name" => "有楽町",
                "hiragana" => "ゆうらくちょう",
                "katakana" => "ユウラクチョウ",
                "katakana_half" => "ﾕｳﾗｸﾁｮｳ",
                "romaji" => "yuurakuchou",
                "memo" => "",
                "latitude" => "35.675450",
                "altitude" => "139.762624",
            ]);
            
            Station::create([
                "id" => 2518,
                "prefecture_id" => 13,
                "city_id" => 712,
                "street_id" => null,
                "name" => "御徒町",
                "hiragana" => "おかちまち",
                "katakana" => "オカチマチ",
                "katakana_half" => "ｵｶﾁﾏﾁ",
                "romaji" => "okachimachi",
                "memo" => "",
                "latitude" => "35.707391",
                "altitude" => "139.774844",
            ]);
            
            Station::create([
                "id" => 2519,
                "prefecture_id" => 13,
                "city_id" => 666,
                "street_id" => 39755,
                "name" => "鶯谷",
                "hiragana" => "うぐいすだに",
                "katakana" => "ウグイスダニ",
                "katakana_half" => "ｳｸﾞｲｽﾀﾞﾆ",
                "romaji" => "uguisudani",
                "memo" => "",
                "latitude" => "35.720306",
                "altitude" => "139.779092",
            ]);
            
            Station::create([
                "id" => 2520,
                "prefecture_id" => 13,
                "city_id" => 671,
                "street_id" => 40048,
                "name" => "西日暮里",
                "hiragana" => "にしにっぽり",
                "katakana" => "ニシニッポリ",
                "katakana_half" => "ﾆｼﾆｯﾎﾟﾘ",
                "romaji" => "nishinippori",
                "memo" => "",
                "latitude" => "35.732110",
                "altitude" => "139.766788",
            ]);
            
            Station::create([
                "id" => 2521,
                "prefecture_id" => 13,
                "city_id" => 670,
                "street_id" => 40035,
                "name" => "田端",
                "hiragana" => "たばた",
                "katakana" => "タバタ",
                "katakana_half" => "ﾀﾊﾞﾀ",
                "romaji" => "tabata",
                "memo" => "",
                "latitude" => "35.738109",
                "altitude" => "139.760733",
            ]);
            
            Station::create([
                "id" => 2522,
                "prefecture_id" => 13,
                "city_id" => 658,
                "street_id" => 39386,
                "name" => "駒込",
                "hiragana" => "こまごめ",
                "katakana" => "コマゴメ",
                "katakana_half" => "ｺﾏｺﾞﾒ",
                "romaji" => "komagome",
                "memo" => "",
                "latitude" => "35.736470",
                "altitude" => "139.746872",
            ]);
            
            Station::create([
                "id" => 2523,
                "prefecture_id" => 13,
                "city_id" => 669,
                "street_id" => 39939,
                "name" => "巣鴨",
                "hiragana" => "すがも",
                "katakana" => "スガモ",
                "katakana_half" => "ｽｶﾞﾓ",
                "romaji" => "sugamo",
                "memo" => "",
                "latitude" => "35.733470",
                "altitude" => "139.739346",
            ]);
            
            Station::create([
                "id" => 2524,
                "prefecture_id" => 13,
                "city_id" => 658,
                "street_id" => 39372,
                "name" => "大塚",
                "hiragana" => "おおつか",
                "katakana" => "オオツカ",
                "katakana_half" => "ｵｵﾂｶ",
                "romaji" => "ootsuka",
                "memo" => "東京都",
                "latitude" => "35.731775",
                "altitude" => "139.728124",
            ]);
            
            Station::create([
                "id" => 2525,
                "prefecture_id" => 13,
                "city_id" => 658,
                "street_id" => 39389,
                "name" => "目白",
                "hiragana" => "めじろ",
                "katakana" => "メジロ",
                "katakana_half" => "ﾒｼﾞﾛ",
                "romaji" => "mejiro",
                "memo" => "",
                "latitude" => "35.721194",
                "altitude" => "139.706598",
            ]);
            
            Station::create([
                "id" => 2526,
                "prefecture_id" => 13,
                "city_id" => 657,
                "street_id" => 38723,
                "name" => "高田馬場",
                "hiragana" => "たかだのばば",
                "katakana" => "タカダノババ",
                "katakana_half" => "ﾀｶﾀﾞﾉﾊﾞﾊﾞ",
                "romaji" => "takadanobaba",
                "memo" => "",
                "latitude" => "35.713333",
                "altitude" => "139.704294",
            ]);
            
            Station::create([
                "id" => 2527,
                "prefecture_id" => 13,
                "city_id" => 657,
                "street_id" => 38698,
                "name" => "新大久保",
                "hiragana" => "しんおおくぼ",
                "katakana" => "シンオオクボ",
                "katakana_half" => "ｼﾝｵｵｸﾎﾞ",
                "romaji" => "shinookubo",
                "memo" => "",
                "latitude" => "35.701028",
                "altitude" => "139.700211",
            ]);
            
            Station::create([
                "id" => 2528,
                "prefecture_id" => 13,
                "city_id" => 705,
                "street_id" => null,
                "name" => "原宿",
                "hiragana" => "はらじゅく",
                "katakana" => "ハラジュク",
                "katakana_half" => "ﾊﾗｼﾞｭｸ",
                "romaji" => "harajuku",
                "memo" => "",
                "latitude" => "35.671282",
                "altitude" => "139.702907",
            ]);
            
            Station::create([
                "id" => 2529,
                "prefecture_id" => 13,
                "city_id" => 663,
                "street_id" => null,
                "name" => "目黒",
                "hiragana" => "めぐろ",
                "katakana" => "メグロ",
                "katakana_half" => "ﾒｸﾞﾛ",
                "romaji" => "meguro",
                "memo" => "",
                "latitude" => "35.633509",
                "altitude" => "139.715686",
            ]);
            
            Station::create([
                "id" => 2530,
                "prefecture_id" => 13,
                "city_id" => 662,
                "street_id" => 39584,
                "name" => "五反田",
                "hiragana" => "ごたんだ",
                "katakana" => "ゴタンダ",
                "katakana_half" => "ｺﾞﾀﾝﾀﾞ",
                "romaji" => "gotanda",
                "memo" => "",
                "latitude" => "35.626288",
                "altitude" => "139.724297",
            ]);
            
            Station::create([
                "id" => 2531,
                "prefecture_id" => 13,
                "city_id" => 670,
                "street_id" => 40042,
                "name" => "東十条",
                "hiragana" => "ひがしじゅうじょう",
                "katakana" => "ヒガシジュウジョウ",
                "katakana_half" => "ﾋｶﾞｼｼﾞｭｳｼﾞｮｳ",
                "romaji" => "higashijuujou",
                "memo" => "",
                "latitude" => "35.762940",
                "altitude" => "139.727706",
            ]);
            
            Station::create([
                "id" => 2532,
                "prefecture_id" => 13,
                "city_id" => 677,
                "street_id" => null,
                "name" => "王子",
                "hiragana" => "おうじ",
                "katakana" => "オウジ",
                "katakana_half" => "ｵｳｼﾞ",
                "romaji" => "ouji",
                "memo" => "",
                "latitude" => "35.753219",
                "altitude" => "139.737901",
            ]);
            
            Station::create([
                "id" => 2533,
                "prefecture_id" => 13,
                "city_id" => 670,
                "street_id" => 40025,
                "name" => "上中里",
                "hiragana" => "かみなかざと",
                "katakana" => "カミナカザト",
                "katakana_half" => "ｶﾐﾅｶｻﾞﾄ",
                "romaji" => "kaminakazato",
                "memo" => "",
                "latitude" => "35.746580",
                "altitude" => "139.746955",
            ]);
            
            Station::create([
                "id" => 2534,
                "prefecture_id" => 13,
                "city_id" => 662,
                "street_id" => 39542,
                "name" => "大井町",
                "hiragana" => "おおいまち",
                "katakana" => "オオイマチ",
                "katakana_half" => "ｵｵｲﾏﾁ",
                "romaji" => "ooimachi",
                "memo" => "",
                "latitude" => "35.607123",
                "altitude" => "139.734574",
            ]);
            
            Station::create([
                "id" => 2535,
                "prefecture_id" => 13,
                "city_id" => 664,
                "street_id" => 39632,
                "name" => "大森",
                "hiragana" => "おおもり",
                "katakana" => "オオモリ",
                "katakana_half" => "ｵｵﾓﾘ",
                "romaji" => "oomori",
                "memo" => "東京都",
                "latitude" => "35.588375",
                "altitude" => "139.727936",
            ]);
            
            Station::create([
                "id" => 2536,
                "prefecture_id" => 13,
                "city_id" => 664,
                "street_id" => 39638,
                "name" => "蒲田",
                "hiragana" => "かまた",
                "katakana" => "カマタ",
                "katakana_half" => "ｶﾏﾀ",
                "romaji" => "kamata",
                "memo" => "",
                "latitude" => "35.562155",
                "altitude" => "139.715550",
            ]);
            
            Station::create([
                "id" => 2537,
                "prefecture_id" => 13,
                "city_id" => 699,
                "street_id" => 40922,
                "name" => "矢野口",
                "hiragana" => "やのくち",
                "katakana" => "ヤノクチ",
                "katakana_half" => "ﾔﾉｸﾁ",
                "romaji" => "yanokuchi",
                "memo" => "",
                "latitude" => "35.641671",
                "altitude" => "139.520451",
            ]);
            
            Station::create([
                "id" => 2538,
                "prefecture_id" => 13,
                "city_id" => 699,
                "street_id" => null,
                "name" => "稲城長沼",
                "hiragana" => "いなぎながぬま",
                "katakana" => "イナギナガヌマ",
                "katakana_half" => "ｲﾅｷﾞﾅｶﾞﾇﾏ",
                "romaji" => "inaginaganuma",
                "memo" => "",
                "latitude" => "35.644226",
                "altitude" => "139.502703",
            ]);
            
            Station::create([
                "id" => 2539,
                "prefecture_id" => 13,
                "city_id" => 654,
                "street_id" => 37152,
                "name" => "南多摩",
                "hiragana" => "みなみたま",
                "katakana" => "ミナミタマ",
                "katakana_half" => "ﾐﾅﾐﾀﾏ",
                "romaji" => "minamitama",
                "memo" => "",
                "latitude" => "35.649280",
                "altitude" => "139.489898",
            ]);
            
            Station::create([
                "id" => 2540,
                "prefecture_id" => 13,
                "city_id" => 690,
                "street_id" => null,
                "name" => "分倍河原",
                "hiragana" => "ぶばいがわら",
                "katakana" => "ブバイガワラ",
                "katakana_half" => "ﾌﾞﾊﾞｲｶﾞﾜﾗ",
                "romaji" => "bubaigawara",
                "memo" => "",
                "latitude" => "35.668556",
                "altitude" => "139.468732",
            ]);
            
            Station::create([
                "id" => 2541,
                "prefecture_id" => 13,
                "city_id" => 682,
                "street_id" => 40561,
                "name" => "西府",
                "hiragana" => "にしふ",
                "katakana" => "ニシフ",
                "katakana_half" => "ﾆｼﾌ",
                "romaji" => "nishifu",
                "memo" => "",
                "latitude" => "35.671000",
                "altitude" => "139.457372",
            ]);
            
            Station::create([
                "id" => 2542,
                "prefecture_id" => 13,
                "city_id" => 691,
                "street_id" => 40793,
                "name" => "谷保",
                "hiragana" => "やほ",
                "katakana" => "ヤホ",
                "katakana_half" => "ﾔﾎ",
                "romaji" => "yaho",
                "memo" => "",
                "latitude" => "35.681416",
                "altitude" => "139.446734",
            ]);
            
            Station::create([
                "id" => 2543,
                "prefecture_id" => 13,
                "city_id" => 691,
                "street_id" => 40792,
                "name" => "矢川",
                "hiragana" => "やがわ",
                "katakana" => "ヤガワ",
                "katakana_half" => "ﾔｶﾞﾜ",
                "romaji" => "yagawa",
                "memo" => "",
                "latitude" => "35.684970",
                "altitude" => "139.431957",
            ]);
            
            Station::create([
                "id" => 2544,
                "prefecture_id" => 13,
                "city_id" => 702,
                "street_id" => null,
                "name" => "西国立",
                "hiragana" => "にしくにたち",
                "katakana" => "ニシクニタチ",
                "katakana_half" => "ﾆｼｸﾆﾀﾁ",
                "romaji" => "nishikunitachi",
                "memo" => "",
                "latitude" => "35.693469",
                "altitude" => "139.424235",
            ]);
            
            Station::create([
                "id" => 2545,
                "prefecture_id" => 13,
                "city_id" => 685,
                "street_id" => 40658,
                "name" => "成瀬",
                "hiragana" => "なるせ",
                "katakana" => "ナルセ",
                "katakana_half" => "ﾅﾙｾ",
                "romaji" => "naruse",
                "memo" => "",
                "latitude" => "35.535348",
                "altitude" => "139.472794",
            ]);
            
            Station::create([
                "id" => 2546,
                "prefecture_id" => 13,
                "city_id" => 685,
                "street_id" => null,
                "name" => "町田",
                "hiragana" => "まちだ",
                "katakana" => "マチダ",
                "katakana_half" => "ﾏﾁﾀﾞ",
                "romaji" => "machida",
                "memo" => "",
                "latitude" => "35.542403",
                "altitude" => "139.445157",
            ]);
            
            Station::create([
                "id" => 2547,
                "prefecture_id" => 13,
                "city_id" => 685,
                "street_id" => 40629,
                "name" => "相原",
                "hiragana" => "あいはら",
                "katakana" => "アイハラ",
                "katakana_half" => "ｱｲﾊﾗ",
                "romaji" => "aihara",
                "memo" => "",
                "latitude" => "35.606921",
                "altitude" => "139.331635",
            ]);
            
            Station::create([
                "id" => 2548,
                "prefecture_id" => 13,
                "city_id" => 677,
                "street_id" => null,
                "name" => "八王子みなみ野",
                "hiragana" => "はちおうじみなみの",
                "katakana" => "ハチオウジミナミノ",
                "katakana_half" => "ﾊﾁｵｳｼﾞﾐﾅﾐﾉ",
                "romaji" => "hachioujiminamino",
                "memo" => "",
                "latitude" => "35.631363",
                "altitude" => "139.330967",
            ]);
            
            Station::create([
                "id" => 2549,
                "prefecture_id" => 13,
                "city_id" => 677,
                "street_id" => 40358,
                "name" => "片倉",
                "hiragana" => "かたくら",
                "katakana" => "カタクラ",
                "katakana_half" => "ｶﾀｸﾗ",
                "romaji" => "katakura",
                "memo" => "",
                "latitude" => "35.639695",
                "altitude" => "139.341438",
            ]);
            
            Station::create([
                "id" => 2550,
                "prefecture_id" => 13,
                "city_id" => 659,
                "street_id" => 39394,
                "name" => "浅草",
                "hiragana" => "あさくさ",
                "katakana" => "アサクサ",
                "katakana_half" => "ｱｻｸｻ",
                "romaji" => "asakusa",
                "memo" => "",
                "latitude" => "35.710668",
                "altitude" => "139.797647",
            ]);
            
            Station::create([
                "id" => 2551,
                "prefecture_id" => 13,
                "city_id" => 664,
                "street_id" => 39678,
                "name" => "とうきょうスカイツリー",
                "hiragana" => "とうきょうすかいつりー",
                "katakana" => "トウキョウスカイツリー",
                "katakana_half" => "ﾄｳｷｮｳｽｶｲﾂﾘｰ",
                "romaji" => "toukyousukaitsuriｰ",
                "memo" => "",
                "latitude" => "35.710335",
                "altitude" => "139.809063",
            ]);
            
            Station::create([
                "id" => 2552,
                "prefecture_id" => 13,
                "city_id" => 654,
                "street_id" => null,
                "name" => "曳舟",
                "hiragana" => "ひきふね",
                "katakana" => "ヒキフネ",
                "katakana_half" => "ﾋｷﾌﾈ",
                "romaji" => "hikifune",
                "memo" => "",
                "latitude" => "35.718363",
                "altitude" => "139.816701",
            ]);
            
            Station::create([
                "id" => 2553,
                "prefecture_id" => 13,
                "city_id" => 660,
                "street_id" => 39445,
                "name" => "東向島",
                "hiragana" => "ひがしむこうじま",
                "katakana" => "ヒガシムコウジマ",
                "katakana_half" => "ﾋｶﾞｼﾑｺｳｼﾞﾏ",
                "romaji" => "higashimukoujima",
                "memo" => "",
                "latitude" => "35.725029",
                "altitude" => "139.819423",
            ]);
            
            Station::create([
                "id" => 2554,
                "prefecture_id" => 13,
                "city_id" => 654,
                "street_id" => null,
                "name" => "鐘ケ淵",
                "hiragana" => "かねがふち",
                "katakana" => "カネガフチ",
                "katakana_half" => "ｶﾈｶﾞﾌﾁ",
                "romaji" => "kanegafuchi",
                "memo" => "",
                "latitude" => "35.733416",
                "altitude" => "139.820005",
            ]);
            
            Station::create([
                "id" => 2555,
                "prefecture_id" => 13,
                "city_id" => 675,
                "street_id" => 40273,
                "name" => "堀切",
                "hiragana" => "ほりきり",
                "katakana" => "ホリキリ",
                "katakana_half" => "ﾎﾘｷﾘ",
                "romaji" => "horikiri",
                "memo" => "",
                "latitude" => "35.742943",
                "altitude" => "139.817756",
            ]);
            
            Station::create([
                "id" => 2556,
                "prefecture_id" => 13,
                "city_id" => 692,
                "street_id" => 40795,
                "name" => "牛田",
                "hiragana" => "うしだ",
                "katakana" => "ウシダ",
                "katakana_half" => "ｳｼﾀﾞ",
                "romaji" => "ushida",
                "memo" => "東京都",
                "latitude" => "35.744387",
                "altitude" => "139.811284",
            ]);
            
            Station::create([
                "id" => 2557,
                "prefecture_id" => 13,
                "city_id" => 675,
                "street_id" => 40258,
                "name" => "小菅",
                "hiragana" => "こすげ",
                "katakana" => "コスゲ",
                "katakana_half" => "ｺｽｹﾞ",
                "romaji" => "kosuge",
                "memo" => "",
                "latitude" => "35.758941",
                "altitude" => "139.812866",
            ]);
            
            Station::create([
                "id" => 2558,
                "prefecture_id" => 13,
                "city_id" => 662,
                "street_id" => 39584,
                "name" => "五反野",
                "hiragana" => "ごたんの",
                "katakana" => "ゴタンノ",
                "katakana_half" => "ｺﾞﾀﾝﾉ",
                "romaji" => "gotanno",
                "memo" => "",
                "latitude" => "35.766079",
                "altitude" => "139.809310",
            ]);
            
            Station::create([
                "id" => 2559,
                "prefecture_id" => 13,
                "city_id" => 674,
                "street_id" => 40168,
                "name" => "梅島",
                "hiragana" => "うめじま",
                "katakana" => "ウメジマ",
                "katakana_half" => "ｳﾒｼﾞﾏ",
                "romaji" => "umejima",
                "memo" => "",
                "latitude" => "35.772579",
                "altitude" => "139.797644",
            ]);
            
            Station::create([
                "id" => 2560,
                "prefecture_id" => 13,
                "city_id" => 674,
                "street_id" => 40218,
                "name" => "西新井",
                "hiragana" => "にしあらい",
                "katakana" => "ニシアライ",
                "katakana_half" => "ﾆｼｱﾗｲ",
                "romaji" => "nishiarai",
                "memo" => "",
                "latitude" => "35.777217",
                "altitude" => "139.790451",
            ]);
            
            Station::create([
                "id" => 2561,
                "prefecture_id" => 13,
                "city_id" => 656,
                "street_id" => 37957,
                "name" => "竹ノ塚",
                "hiragana" => "たけのつか",
                "katakana" => "タケノツカ",
                "katakana_half" => "ﾀｹﾉﾂｶ",
                "romaji" => "takenotsuka",
                "memo" => "",
                "latitude" => "35.794492",
                "altitude" => "139.790811",
            ]);
            
            Station::create([
                "id" => 2562,
                "prefecture_id" => 13,
                "city_id" => 660,
                "street_id" => 39430,
                "name" => "押上",
                "hiragana" => "おしあげ",
                "katakana" => "オシアゲ",
                "katakana_half" => "ｵｼｱｹﾞ",
                "romaji" => "oshiage",
                "memo" => "",
                "latitude" => "35.710613",
                "altitude" => "139.813313",
            ]);
            
            Station::create([
                "id" => 2563,
                "prefecture_id" => 13,
                "city_id" => 686,
                "street_id" => null,
                "name" => "小村井",
                "hiragana" => "おむらい",
                "katakana" => "オムライ",
                "katakana_half" => "ｵﾑﾗｲ",
                "romaji" => "omurai",
                "memo" => "",
                "latitude" => "35.710113",
                "altitude" => "139.828034",
            ]);
            
            Station::create([
                "id" => 2564,
                "prefecture_id" => 13,
                "city_id" => 659,
                "street_id" => null,
                "name" => "東あずま",
                "hiragana" => "ひがしあずま",
                "katakana" => "ヒガシアズマ",
                "katakana_half" => "ﾋｶﾞｼｱｽﾞﾏ",
                "romaji" => "higashiazuma",
                "memo" => "",
                "latitude" => "35.707058",
                "altitude" => "139.831923",
            ]);
            
            Station::create([
                "id" => 2565,
                "prefecture_id" => 13,
                "city_id" => 661,
                "street_id" => 39465,
                "name" => "亀戸水神",
                "hiragana" => "かめいどすいじん",
                "katakana" => "カメイドスイジン",
                "katakana_half" => "ｶﾒｲﾄﾞｽｲｼﾞﾝ",
                "romaji" => "kameidosuijin",
                "memo" => "",
                "latitude" => "35.700281",
                "altitude" => "139.833700",
            ]);
            
            Station::create([
                "id" => 2566,
                "prefecture_id" => 13,
                "city_id" => 664,
                "street_id" => null,
                "name" => "大師前",
                "hiragana" => "だいしまえ",
                "katakana" => "ダイシマエ",
                "katakana_half" => "ﾀﾞｲｼﾏｴ",
                "romaji" => "daishimae",
                "memo" => "",
                "latitude" => "35.778855",
                "altitude" => "139.781507",
            ]);
            
            Station::create([
                "id" => 2567,
                "prefecture_id" => 13,
                "city_id" => 670,
                "street_id" => null,
                "name" => "北池袋",
                "hiragana" => "きたいけぶくろ",
                "katakana" => "キタイケブクロ",
                "katakana_half" => "ｷﾀｲｹﾌﾞｸﾛ",
                "romaji" => "kitaikebukuro",
                "memo" => "",
                "latitude" => "35.741275",
                "altitude" => "139.716764",
            ]);
            
            Station::create([
                "id" => 2568,
                "prefecture_id" => 13,
                "city_id" => 654,
                "street_id" => 37038,
                "name" => "下板橋",
                "hiragana" => "しもいたばし",
                "katakana" => "シモイタバシ",
                "katakana_half" => "ｼﾓｲﾀﾊﾞｼ",
                "romaji" => "shimoitabashi",
                "memo" => "",
                "latitude" => "35.745663",
                "altitude" => "139.714875",
            ]);
            
            Station::create([
                "id" => 2569,
                "prefecture_id" => 13,
                "city_id" => 666,
                "street_id" => 39800,
                "name" => "大山",
                "hiragana" => "おおやま",
                "katakana" => "オオヤマ",
                "katakana_half" => "ｵｵﾔﾏ",
                "romaji" => "ooyama",
                "memo" => "東京都",
                "latitude" => "35.748440",
                "altitude" => "139.702681",
            ]);
            
            Station::create([
                "id" => 2570,
                "prefecture_id" => 13,
                "city_id" => 672,
                "street_id" => 40085,
                "name" => "中板橋",
                "hiragana" => "なかいたばし",
                "katakana" => "ナカイタバシ",
                "katakana_half" => "ﾅｶｲﾀﾊﾞｼ",
                "romaji" => "nakaitabashi",
                "memo" => "",
                "latitude" => "35.756134",
                "altitude" => "139.694710",
            ]);
            
            Station::create([
                "id" => 2571,
                "prefecture_id" => 13,
                "city_id" => 664,
                "street_id" => 39678,
                "name" => "ときわ台",
                "hiragana" => "ときわだい",
                "katakana" => "トキワダイ",
                "katakana_half" => "ﾄｷﾜﾀﾞｲ",
                "romaji" => "tokiwadai",
                "memo" => "東京都",
                "latitude" => "35.758661",
                "altitude" => "139.689682",
            ]);
            
            Station::create([
                "id" => 2572,
                "prefecture_id" => 13,
                "city_id" => 672,
                "street_id" => 40070,
                "name" => "上板橋",
                "hiragana" => "かみいたばし",
                "katakana" => "カミイタバシ",
                "katakana_half" => "ｶﾐｲﾀﾊﾞｼ",
                "romaji" => "kamiitabashi",
                "memo" => "",
                "latitude" => "35.763494",
                "altitude" => "139.676433",
            ]);
            
            Station::create([
                "id" => 2573,
                "prefecture_id" => 13,
                "city_id" => 659,
                "street_id" => null,
                "name" => "東武練馬",
                "hiragana" => "とうぶねりま",
                "katakana" => "トウブネリマ",
                "katakana_half" => "ﾄｳﾌﾞﾈﾘﾏ",
                "romaji" => "toubunerima",
                "memo" => "",
                "latitude" => "35.768604",
                "altitude" => "139.661878",
            ]);
            
            Station::create([
                "id" => 2574,
                "prefecture_id" => 13,
                "city_id" => 654,
                "street_id" => 37038,
                "name" => "下赤塚",
                "hiragana" => "しもあかつか",
                "katakana" => "シモアカツカ",
                "katakana_half" => "ｼﾓｱｶﾂｶ",
                "romaji" => "shimoakatsuka",
                "memo" => "",
                "latitude" => "35.770520",
                "altitude" => "139.644574",
            ]);
            
            Station::create([
                "id" => 2575,
                "prefecture_id" => 13,
                "city_id" => 672,
                "street_id" => 40090,
                "name" => "成増",
                "hiragana" => "なります",
                "katakana" => "ナリマス",
                "katakana_half" => "ﾅﾘﾏｽ",
                "romaji" => "narimasu",
                "memo" => "",
                "latitude" => "35.777575",
                "altitude" => "139.632935",
            ]);
            
            Station::create([
                "id" => 2576,
                "prefecture_id" => 13,
                "city_id" => 654,
                "street_id" => null,
                "name" => "椎名町",
                "hiragana" => "しいなまち",
                "katakana" => "シイナマチ",
                "katakana_half" => "ｼｲﾅﾏﾁ",
                "romaji" => "shiinamachi",
                "memo" => "",
                "latitude" => "35.726442",
                "altitude" => "139.695016",
            ]);
            
            Station::create([
                "id" => 2577,
                "prefecture_id" => 13,
                "city_id" => 699,
                "street_id" => 40919,
                "name" => "東長崎",
                "hiragana" => "ひがしながさき",
                "katakana" => "ヒガシナガサキ",
                "katakana_half" => "ﾋｶﾞｼﾅｶﾞｻｷ",
                "romaji" => "higashinagasaki",
                "memo" => "",
                "latitude" => "35.730192",
                "altitude" => "139.683017",
            ]);
            
            Station::create([
                "id" => 2578,
                "prefecture_id" => 13,
                "city_id" => 667,
                "street_id" => 39876,
                "name" => "江古田",
                "hiragana" => "えこだ",
                "katakana" => "エコダ",
                "katakana_half" => "ｴｺﾀﾞ",
                "romaji" => "ekoda",
                "memo" => "",
                "latitude" => "35.737552",
                "altitude" => "139.672823",
            ]);
            
            Station::create([
                "id" => 2579,
                "prefecture_id" => 13,
                "city_id" => 673,
                "street_id" => 40124,
                "name" => "桜台",
                "hiragana" => "さくらだい",
                "katakana" => "サクラダイ",
                "katakana_half" => "ｻｸﾗﾀﾞｲ",
                "romaji" => "sakuradai",
                "memo" => "東京都",
                "latitude" => "35.738691",
                "altitude" => "139.662379",
            ]);
            
            Station::create([
                "id" => 2580,
                "prefecture_id" => 13,
                "city_id" => 673,
                "street_id" => null,
                "name" => "練馬",
                "hiragana" => "ねりま",
                "katakana" => "ネリマ",
                "katakana_half" => "ﾈﾘﾏ",
                "romaji" => "nerima",
                "memo" => "",
                "latitude" => "35.737858",
                "altitude" => "139.654491",
            ]);
            
            Station::create([
                "id" => 2581,
                "prefecture_id" => 13,
                "city_id" => 673,
                "street_id" => 40140,
                "name" => "中村橋",
                "hiragana" => "なかむらばし",
                "katakana" => "ナカムラバシ",
                "katakana_half" => "ﾅｶﾑﾗﾊﾞｼ",
                "romaji" => "nakamurabashi",
                "memo" => "",
                "latitude" => "35.736802",
                "altitude" => "139.637798",
            ]);
            
            Station::create([
                "id" => 2582,
                "prefecture_id" => 13,
                "city_id" => 673,
                "street_id" => 40153,
                "name" => "富士見台",
                "hiragana" => "ふじみだい",
                "katakana" => "フジミダイ",
                "katakana_half" => "ﾌｼﾞﾐﾀﾞｲ",
                "romaji" => "fujimidai",
                "memo" => "",
                "latitude" => "35.735913",
                "altitude" => "139.629994",
            ]);
            
            Station::create([
                "id" => 2583,
                "prefecture_id" => 13,
                "city_id" => 673,
                "street_id" => null,
                "name" => "練馬高野台",
                "hiragana" => "ねりまたかのだい",
                "katakana" => "ネリマタカノダイ",
                "katakana_half" => "ﾈﾘﾏﾀｶﾉﾀﾞｲ",
                "romaji" => "nerimatakanodai",
                "memo" => "",
                "latitude" => "35.740579",
                "altitude" => "139.616939",
            ]);
            
            Station::create([
                "id" => 2584,
                "prefecture_id" => 13,
                "city_id" => 673,
                "street_id" => 40118,
                "name" => "石神井公園",
                "hiragana" => "しゃくじいこうえん",
                "katakana" => "シャクジイコウエン",
                "katakana_half" => "ｼｬｸｼﾞｲｺｳｴﾝ",
                "romaji" => "shakujiikouen",
                "memo" => "",
                "latitude" => "35.743745",
                "altitude" => "139.606107",
            ]);
            
            Station::create([
                "id" => 2585,
                "prefecture_id" => 13,
                "city_id" => 673,
                "street_id" => 40115,
                "name" => "大泉学園",
                "hiragana" => "おおいずみがくえん",
                "katakana" => "オオイズミガクエン",
                "katakana_half" => "ｵｵｲｽﾞﾐｶﾞｸｴﾝ",
                "romaji" => "ooizumigakuen",
                "memo" => "",
                "latitude" => "35.749522",
                "altitude" => "139.586552",
            ]);
            
            Station::create([
                "id" => 2586,
                "prefecture_id" => 13,
                "city_id" => 702,
                "street_id" => 40987,
                "name" => "保谷",
                "hiragana" => "ほうや",
                "katakana" => "ホウヤ",
                "katakana_half" => "ﾎｳﾔ",
                "romaji" => "houya",
                "memo" => "",
                "latitude" => "35.748327",
                "altitude" => "139.567554",
            ]);
            
            Station::create([
                "id" => 2587,
                "prefecture_id" => 13,
                "city_id" => 696,
                "street_id" => 40867,
                "name" => "ひばりケ丘",
                "hiragana" => "ひばりがおか",
                "katakana" => "ヒバリガオカ",
                "katakana_half" => "ﾋﾊﾞﾘｶﾞｵｶ",
                "romaji" => "hibarigaoka",
                "memo" => "東京都",
                "latitude" => "35.751576",
                "altitude" => "139.545527",
            ]);
            
            Station::create([
                "id" => 2588,
                "prefecture_id" => 13,
                "city_id" => 696,
                "street_id" => null,
                "name" => "東久留米",
                "hiragana" => "ひがしくるめ",
                "katakana" => "ヒガシクルメ",
                "katakana_half" => "ﾋｶﾞｼｸﾙﾒ",
                "romaji" => "higashikurume",
                "memo" => "",
                "latitude" => "35.760298",
                "altitude" => "139.533945",
            ]);
            
            Station::create([
                "id" => 2589,
                "prefecture_id" => 13,
                "city_id" => 695,
                "street_id" => null,
                "name" => "清瀬",
                "hiragana" => "きよせ",
                "katakana" => "キヨセ",
                "katakana_half" => "ｷﾖｾ",
                "romaji" => "kiyose",
                "memo" => "",
                "latitude" => "35.772102",
                "altitude" => "139.519918",
            ]);
            
            Station::create([
                "id" => 2590,
                "prefecture_id" => 13,
                "city_id" => 689,
                "street_id" => 40751,
                "name" => "秋津",
                "hiragana" => "あきつ",
                "katakana" => "アキツ",
                "katakana_half" => "ｱｷﾂ",
                "romaji" => "akitsu",
                "memo" => "",
                "latitude" => "35.778267",
                "altitude" => "139.496808",
            ]);
            
            Station::create([
                "id" => 2591,
                "prefecture_id" => 13,
                "city_id" => 673,
                "street_id" => 40124,
                "name" => "新桜台",
                "hiragana" => "しんさくらだい",
                "katakana" => "シンサクラダイ",
                "katakana_half" => "ｼﾝｻｸﾗﾀﾞｲ",
                "romaji" => "shinsakuradai",
                "memo" => "",
                "latitude" => "35.741330",
                "altitude" => "139.669018",
            ]);
            
            Station::create([
                "id" => 2592,
                "prefecture_id" => 13,
                "city_id" => 673,
                "street_id" => 40122,
                "name" => "小竹向原",
                "hiragana" => "こたけむかいはら",
                "katakana" => "コタケムカイハラ",
                "katakana_half" => "ｺﾀｹﾑｶｲﾊﾗ",
                "romaji" => "kotakemukaihara",
                "memo" => "",
                "latitude" => "35.743329",
                "altitude" => "139.679489",
            ]);
            
            Station::create([
                "id" => 2593,
                "prefecture_id" => 13,
                "city_id" => 669,
                "street_id" => null,
                "name" => "豊島園",
                "hiragana" => "としまえん",
                "katakana" => "トシマエン",
                "katakana_half" => "ﾄｼﾏｴﾝ",
                "romaji" => "toshimaen",
                "memo" => "西武線",
                "latitude" => "35.741940",
                "altitude" => "139.647936",
            ]);
            
            Station::create([
                "id" => 2594,
                "prefecture_id" => 13,
                "city_id" => 702,
                "street_id" => null,
                "name" => "西武新宿",
                "hiragana" => "せいぶしんじゅく",
                "katakana" => "セイブシンジュク",
                "katakana_half" => "ｾｲﾌﾞｼﾝｼﾞｭｸ",
                "romaji" => "seibushinjuku",
                "memo" => "",
                "latitude" => "35.695335",
                "altitude" => "139.700017",
            ]);
            
            Station::create([
                "id" => 2595,
                "prefecture_id" => 13,
                "city_id" => 657,
                "street_id" => 38714,
                "name" => "下落合",
                "hiragana" => "しもおちあい",
                "katakana" => "シモオチアイ",
                "katakana_half" => "ｼﾓｵﾁｱｲ",
                "romaji" => "shimoochiai",
                "memo" => "",
                "latitude" => "35.715833",
                "altitude" => "139.695155",
            ]);
            
            Station::create([
                "id" => 2596,
                "prefecture_id" => 13,
                "city_id" => 657,
                "street_id" => 38734,
                "name" => "中井",
                "hiragana" => "なかい",
                "katakana" => "ナカイ",
                "katakana_half" => "ﾅｶｲ",
                "romaji" => "nakai",
                "memo" => "",
                "latitude" => "35.715027",
                "altitude" => "139.686823",
            ]);
            
            Station::create([
                "id" => 2597,
                "prefecture_id" => 13,
                "city_id" => 686,
                "street_id" => null,
                "name" => "新井薬師前",
                "hiragana" => "あらいやくしまえ",
                "katakana" => "アライヤクシマエ",
                "katakana_half" => "ｱﾗｲﾔｸｼﾏｴ",
                "romaji" => "araiyakushimae",
                "memo" => "",
                "latitude" => "35.715777",
                "altitude" => "139.671907",
            ]);
            
            Station::create([
                "id" => 2598,
                "prefecture_id" => 13,
                "city_id" => 667,
                "street_id" => 39884,
                "name" => "沼袋",
                "hiragana" => "ぬまぶくろ",
                "katakana" => "ヌマブクロ",
                "katakana_half" => "ﾇﾏﾌﾞｸﾛ",
                "romaji" => "numabukuro",
                "memo" => "",
                "latitude" => "35.719443",
                "altitude" => "139.663852",
            ]);
            
            Station::create([
                "id" => 2599,
                "prefecture_id" => 13,
                "city_id" => 667,
                "street_id" => 39885,
                "name" => "野方",
                "hiragana" => "のがた",
                "katakana" => "ノガタ",
                "katakana_half" => "ﾉｶﾞﾀ",
                "romaji" => "nogata",
                "memo" => "",
                "latitude" => "35.719720",
                "altitude" => "139.653048",
            ]);
            
            Station::create([
                "id" => 2600,
                "prefecture_id" => 13,
                "city_id" => 705,
                "street_id" => 41035,
                "name" => "都立家政",
                "hiragana" => "とりつかせい",
                "katakana" => "トリツカセイ",
                "katakana_half" => "ﾄﾘﾂｶｾｲ",
                "romaji" => "toritsukasei",
                "memo" => "",
                "latitude" => "35.722331",
                "altitude" => "139.644604",
            ]);
            
            Station::create([
                "id" => 2601,
                "prefecture_id" => 13,
                "city_id" => 667,
                "street_id" => 39878,
                "name" => "鷺ノ宮",
                "hiragana" => "さぎのみや",
                "katakana" => "サギノミヤ",
                "katakana_half" => "ｻｷﾞﾉﾐﾔ",
                "romaji" => "saginomiya",
                "memo" => "",
                "latitude" => "35.722608",
                "altitude" => "139.638938",
            ]);
            
            Station::create([
                "id" => 2602,
                "prefecture_id" => 13,
                "city_id" => 668,
                "street_id" => 39912,
                "name" => "下井草",
                "hiragana" => "しもいぐさ",
                "katakana" => "シモイグサ",
                "katakana_half" => "ｼﾓｲｸﾞｻ",
                "romaji" => "shimoigusa",
                "memo" => "",
                "latitude" => "35.723941",
                "altitude" => "139.624328",
            ]);
            
            Station::create([
                "id" => 2603,
                "prefecture_id" => 13,
                "city_id" => 686,
                "street_id" => null,
                "name" => "井荻",
                "hiragana" => "いおぎ",
                "katakana" => "イオギ",
                "katakana_half" => "ｲｵｷﾞ",
                "romaji" => "iogi",
                "memo" => "",
                "latitude" => "35.724525",
                "altitude" => "139.614661",
            ]);
            
            Station::create([
                "id" => 2604,
                "prefecture_id" => 13,
                "city_id" => 668,
                "street_id" => 39905,
                "name" => "上井草",
                "hiragana" => "かみいぐさ",
                "katakana" => "カミイグサ",
                "katakana_half" => "ｶﾐｲｸﾞｻ",
                "romaji" => "kamiigusa",
                "memo" => "",
                "latitude" => "35.725107",
                "altitude" => "139.603579",
            ]);
            
            Station::create([
                "id" => 2605,
                "prefecture_id" => 13,
                "city_id" => 673,
                "street_id" => 40118,
                "name" => "上石神井",
                "hiragana" => "かみしゃくじい",
                "katakana" => "カミシャクジイ",
                "katakana_half" => "ｶﾐｼｬｸｼﾞｲ",
                "romaji" => "kamishakujii",
                "memo" => "",
                "latitude" => "35.726218",
                "altitude" => "139.592081",
            ]);
            
            Station::create([
                "id" => 2606,
                "prefecture_id" => 13,
                "city_id" => 679,
                "street_id" => null,
                "name" => "武蔵関",
                "hiragana" => "むさしせき",
                "katakana" => "ムサシセキ",
                "katakana_half" => "ﾑｻｼｾｷ",
                "romaji" => "musashiseki",
                "memo" => "",
                "latitude" => "35.727524",
                "altitude" => "139.576887",
            ]);
            
            Station::create([
                "id" => 2607,
                "prefecture_id" => 13,
                "city_id" => 702,
                "street_id" => 40994,
                "name" => "東伏見",
                "hiragana" => "ひがしふしみ",
                "katakana" => "ヒガシフシミ",
                "katakana_half" => "ﾋｶﾞｼﾌｼﾐ",
                "romaji" => "higashifushimi",
                "memo" => "",
                "latitude" => "35.728662",
                "altitude" => "139.564222",
            ]);
            
            Station::create([
                "id" => 2608,
                "prefecture_id" => 13,
                "city_id" => 702,
                "street_id" => null,
                "name" => "西武柳沢",
                "hiragana" => "せいぶやぎさわ",
                "katakana" => "セイブヤギサワ",
                "katakana_half" => "ｾｲﾌﾞﾔｷﾞｻﾜ",
                "romaji" => "seibuyagisawa",
                "memo" => "",
                "latitude" => "35.728635",
                "altitude" => "139.552611",
            ]);
            
            Station::create([
                "id" => 2609,
                "prefecture_id" => 13,
                "city_id" => 702,
                "street_id" => 40990,
                "name" => "田無",
                "hiragana" => "たなし",
                "katakana" => "タナシ",
                "katakana_half" => "ﾀﾅｼ",
                "romaji" => "tanashi",
                "memo" => "",
                "latitude" => "35.727356",
                "altitude" => "139.539251",
            ]);
            
            Station::create([
                "id" => 2610,
                "prefecture_id" => 13,
                "city_id" => 687,
                "street_id" => 40713,
                "name" => "花小金井",
                "hiragana" => "はなこがねい",
                "katakana" => "ハナコガネイ",
                "katakana_half" => "ﾊﾅｺｶﾞﾈｲ",
                "romaji" => "hanakoganei",
                "memo" => "",
                "latitude" => "35.726106",
                "altitude" => "139.513226",
            ]);
            
            Station::create([
                "id" => 2611,
                "prefecture_id" => 13,
                "city_id" => 687,
                "street_id" => null,
                "name" => "小平",
                "hiragana" => "こだいら",
                "katakana" => "コダイラ",
                "katakana_half" => "ｺﾀﾞｲﾗ",
                "romaji" => "kodaira",
                "memo" => "",
                "latitude" => "35.737105",
                "altitude" => "139.488200",
            ]);
            
            Station::create([
                "id" => 2612,
                "prefecture_id" => 13,
                "city_id" => 689,
                "street_id" => 40753,
                "name" => "久米川",
                "hiragana" => "くめがわ",
                "katakana" => "クメガワ",
                "katakana_half" => "ｸﾒｶﾞﾜ",
                "romaji" => "kumegawa",
                "memo" => "",
                "latitude" => "35.750020",
                "altitude" => "139.472006",
            ]);
            
            Station::create([
                "id" => 2613,
                "prefecture_id" => 13,
                "city_id" => 689,
                "street_id" => null,
                "name" => "東村山",
                "hiragana" => "ひがしむらやま",
                "katakana" => "ヒガシムラヤマ",
                "katakana_half" => "ﾋｶﾞｼﾑﾗﾔﾏ",
                "romaji" => "higashimurayama",
                "memo" => "",
                "latitude" => "35.760491",
                "altitude" => "139.465840",
            ]);
            
            Station::create([
                "id" => 2614,
                "prefecture_id" => 13,
                "city_id" => 702,
                "street_id" => null,
                "name" => "西武園",
                "hiragana" => "せいぶえん",
                "katakana" => "セイブエン",
                "katakana_half" => "ｾｲﾌﾞｴﾝ",
                "romaji" => "seibuen",
                "memo" => "",
                "latitude" => "35.768045",
                "altitude" => "139.448701",
            ]);
            
            Station::create([
                "id" => 2615,
                "prefecture_id" => 13,
                "city_id" => 689,
                "street_id" => 40758,
                "name" => "萩山",
                "hiragana" => "はぎやま",
                "katakana" => "ハギヤマ",
                "katakana_half" => "ﾊｷﾞﾔﾏ",
                "romaji" => "hagiyama",
                "memo" => "",
                "latitude" => "35.740409",
                "altitude" => "139.477450",
            ]);
            
            Station::create([
                "id" => 2616,
                "prefecture_id" => 13,
                "city_id" => 654,
                "street_id" => 37126,
                "name" => "小川",
                "hiragana" => "おがわ",
                "katakana" => "オガワ",
                "katakana_half" => "ｵｶﾞﾜ",
                "romaji" => "ogawa",
                "memo" => "東京都",
                "latitude" => "35.737493",
                "altitude" => "139.463562",
            ]);
            
            Station::create([
                "id" => 2617,
                "prefecture_id" => 13,
                "city_id" => 694,
                "street_id" => null,
                "name" => "東大和市",
                "hiragana" => "ひがしやまとし",
                "katakana" => "ヒガシヤマトシ",
                "katakana_half" => "ﾋｶﾞｼﾔﾏﾄｼ",
                "romaji" => "higashiyamatoshi",
                "memo" => "",
                "latitude" => "35.732938",
                "altitude" => "139.434510",
            ]);
            
            Station::create([
                "id" => 2618,
                "prefecture_id" => 13,
                "city_id" => 665,
                "street_id" => 39732,
                "name" => "玉川上水",
                "hiragana" => "たまがわじょうすい",
                "katakana" => "タマガワジョウスイ",
                "katakana_half" => "ﾀﾏｶﾞﾜｼﾞｮｳｽｲ",
                "romaji" => "tamagawajousui",
                "memo" => "",
                "latitude" => "35.731937",
                "altitude" => "139.418261",
            ]);
            
            Station::create([
                "id" => 2619,
                "prefecture_id" => 13,
                "city_id" => 679,
                "street_id" => null,
                "name" => "武蔵砂川",
                "hiragana" => "むさしすながわ",
                "katakana" => "ムサシスナガワ",
                "katakana_half" => "ﾑｻｼｽﾅｶﾞﾜ",
                "romaji" => "musashisunagawa",
                "memo" => "",
                "latitude" => "35.729020",
                "altitude" => "139.392236",
            ]);
            
            Station::create([
                "id" => 2620,
                "prefecture_id" => 13,
                "city_id" => 702,
                "street_id" => null,
                "name" => "西武立川",
                "hiragana" => "せいぶたちかわ",
                "katakana" => "セイブタチカワ",
                "katakana_half" => "ｾｲﾌﾞﾀﾁｶﾜ",
                "romaji" => "seibutachikawa",
                "memo" => "",
                "latitude" => "35.726271",
                "altitude" => "139.370515",
            ]);
            
            Station::create([
                "id" => 2621,
                "prefecture_id" => 13,
                "city_id" => 654,
                "street_id" => 37040,
                "name" => "一橋学園",
                "hiragana" => "ひとつばしがくえん",
                "katakana" => "ヒトツバシガクエン",
                "katakana_half" => "ﾋﾄﾂﾊﾞｼｶﾞｸｴﾝ",
                "romaji" => "hitotsubashigakuen",
                "memo" => "",
                "latitude" => "35.722245",
                "altitude" => "139.480089",
            ]);
            
            Station::create([
                "id" => 2622,
                "prefecture_id" => 13,
                "city_id" => 681,
                "street_id" => null,
                "name" => "青梅街道",
                "hiragana" => "おうめかいどう",
                "katakana" => "オウメカイドウ",
                "katakana_half" => "ｵｳﾒｶｲﾄﾞｳ",
                "romaji" => "oumekaidou",
                "memo" => "",
                "latitude" => "35.730605",
                "altitude" => "139.476562",
            ]);
            
            Station::create([
                "id" => 2623,
                "prefecture_id" => 13,
                "city_id" => 677,
                "street_id" => null,
                "name" => "八坂",
                "hiragana" => "やさか",
                "katakana" => "ヤサカ",
                "katakana_half" => "ﾔｻｶ",
                "romaji" => "yasaka",
                "memo" => "",
                "latitude" => "35.745131",
                "altitude" => "139.467450",
            ]);
            
            Station::create([
                "id" => 2624,
                "prefecture_id" => 13,
                "city_id" => 679,
                "street_id" => null,
                "name" => "武蔵大和",
                "hiragana" => "むさしやまと",
                "katakana" => "ムサシヤマト",
                "katakana_half" => "ﾑｻｼﾔﾏﾄ",
                "romaji" => "musashiyamato",
                "memo" => "",
                "latitude" => "35.756185",
                "altitude" => "139.444175",
            ]);
            
            Station::create([
                "id" => 2625,
                "prefecture_id" => 13,
                "city_id" => 702,
                "street_id" => null,
                "name" => "西武遊園地",
                "hiragana" => "せいぶゆうえんち",
                "katakana" => "セイブユウエンチ",
                "katakana_half" => "ｾｲﾌﾞﾕｳｴﾝﾁ",
                "romaji" => "seibuyuuenchi",
                "memo" => "",
                "latitude" => "35.765962",
                "altitude" => "139.442647",
            ]);
            
            Station::create([
                "id" => 2626,
                "prefecture_id" => 13,
                "city_id" => 690,
                "street_id" => 40771,
                "name" => "恋ケ窪",
                "hiragana" => "こいがくぼ",
                "katakana" => "コイガクボ",
                "katakana_half" => "ｺｲｶﾞｸﾎﾞ",
                "romaji" => "koigakubo",
                "memo" => "",
                "latitude" => "35.710940",
                "altitude" => "139.464175",
            ]);
            
            Station::create([
                "id" => 2627,
                "prefecture_id" => 13,
                "city_id" => 680,
                "street_id" => null,
                "name" => "鷹の台",
                "hiragana" => "たかのだい",
                "katakana" => "タカノダイ",
                "katakana_half" => "ﾀｶﾉﾀﾞｲ",
                "romaji" => "takanodai",
                "memo" => "",
                "latitude" => "35.723411",
                "altitude" => "139.461063",
            ]);
            
            Station::create([
                "id" => 2628,
                "prefecture_id" => 13,
                "city_id" => 686,
                "street_id" => null,
                "name" => "新小金井",
                "hiragana" => "しんこがねい",
                "katakana" => "シンコガネイ",
                "katakana_half" => "ｼﾝｺｶﾞﾈｲ",
                "romaji" => "shinkoganei",
                "memo" => "",
                "latitude" => "35.695693",
                "altitude" => "139.526281",
            ]);
            
            Station::create([
                "id" => 2629,
                "prefecture_id" => 13,
                "city_id" => 682,
                "street_id" => 40557,
                "name" => "多磨",
                "hiragana" => "たま",
                "katakana" => "タマ",
                "katakana_half" => "ﾀﾏ",
                "romaji" => "tama",
                "memo" => "",
                "latitude" => "35.677251",
                "altitude" => "139.517200",
            ]);
            
            Station::create([
                "id" => 2630,
                "prefecture_id" => 13,
                "city_id" => 682,
                "street_id" => 40553,
                "name" => "白糸台",
                "hiragana" => "しらいとだい",
                "katakana" => "シライトダイ",
                "katakana_half" => "ｼﾗｲﾄﾀﾞｲ",
                "romaji" => "shiraitodai",
                "memo" => "",
                "latitude" => "35.666474",
                "altitude" => "139.509868",
            ]);
            
            Station::create([
                "id" => 2631,
                "prefecture_id" => 13,
                "city_id" => 654,
                "street_id" => null,
                "name" => "競艇場前",
                "hiragana" => "きょうていじょうまえ",
                "katakana" => "キョウテイジョウマエ",
                "katakana_half" => "ｷｮｳﾃｲｼﾞｮｳﾏｴ",
                "romaji" => "kyouteijoumae",
                "memo" => "",
                "latitude" => "35.656169",
                "altitude" => "139.499592",
            ]);
            
            Station::create([
                "id" => 2632,
                "prefecture_id" => 13,
                "city_id" => 682,
                "street_id" => 40549,
                "name" => "是政",
                "hiragana" => "これまさ",
                "katakana" => "コレマサ",
                "katakana_half" => "ｺﾚﾏｻ",
                "romaji" => "koremasa",
                "memo" => "",
                "latitude" => "35.656307",
                "altitude" => "139.488786",
            ]);
            
            Station::create([
                "id" => 2633,
                "prefecture_id" => 13,
                "city_id" => 658,
                "street_id" => null,
                "name" => "京成上野",
                "hiragana" => "けいせいうえの",
                "katakana" => "ケイセイウエノ",
                "katakana_half" => "ｹｲｾｲｳｴﾉ",
                "romaji" => "keiseiueno",
                "memo" => "",
                "latitude" => "35.711196",
                "altitude" => "139.773427",
            ]);
            
            Station::create([
                "id" => 2634,
                "prefecture_id" => 13,
                "city_id" => 680,
                "street_id" => null,
                "name" => "新三河島",
                "hiragana" => "しんみかわしま",
                "katakana" => "シンミカワシマ",
                "katakana_half" => "ｼﾝﾐｶﾜｼﾏ",
                "romaji" => "shinmikawashima",
                "memo" => "",
                "latitude" => "35.737221",
                "altitude" => "139.774037",
            ]);
            
            Station::create([
                "id" => 2635,
                "prefecture_id" => 13,
                "city_id" => 671,
                "street_id" => 40051,
                "name" => "町屋",
                "hiragana" => "まちや",
                "katakana" => "マチヤ",
                "katakana_half" => "ﾏﾁﾔ",
                "romaji" => "machiya",
                "memo" => "京成線",
                "latitude" => "35.742248",
                "altitude" => "139.781452",
            ]);
            
            Station::create([
                "id" => 2636,
                "prefecture_id" => 13,
                "city_id" => 674,
                "street_id" => 40194,
                "name" => "千住大橋",
                "hiragana" => "せんじゅおおはし",
                "katakana" => "センジュオオハシ",
                "katakana_half" => "ｾﾝｼﾞｭｵｵﾊｼ",
                "romaji" => "senjuoohashi",
                "memo" => "",
                "latitude" => "35.742388",
                "altitude" => "139.796673",
            ]);
            
            Station::create([
                "id" => 2637,
                "prefecture_id" => 13,
                "city_id" => 658,
                "street_id" => null,
                "name" => "京成関屋",
                "hiragana" => "けいせいせきや",
                "katakana" => "ケイセイセキヤ",
                "katakana_half" => "ｹｲｾｲｾｷﾔ",
                "romaji" => "keiseisekiya",
                "memo" => "",
                "latitude" => "35.743998",
                "altitude" => "139.811561",
            ]);
            
            Station::create([
                "id" => 2638,
                "prefecture_id" => 13,
                "city_id" => 675,
                "street_id" => 40273,
                "name" => "堀切菖蒲園",
                "hiragana" => "ほりきりしょうぶえん",
                "katakana" => "ホリキリショウブエン",
                "katakana_half" => "ﾎﾘｷﾘｼｮｳﾌﾞｴﾝ",
                "romaji" => "horikirishoubuen",
                "memo" => "",
                "latitude" => "35.747637",
                "altitude" => "139.827532",
            ]);
            
            Station::create([
                "id" => 2639,
                "prefecture_id" => 13,
                "city_id" => 675,
                "street_id" => 40253,
                "name" => "お花茶屋",
                "hiragana" => "おはなぢゃや",
                "katakana" => "オハナヂャヤ",
                "katakana_half" => "ｵﾊﾅﾁﾞｬﾔ",
                "romaji" => "ohanajiゃya",
                "memo" => "",
                "latitude" => "35.747582",
                "altitude" => "139.840225",
            ]);
            
            Station::create([
                "id" => 2640,
                "prefecture_id" => 13,
                "city_id" => 681,
                "street_id" => null,
                "name" => "青砥",
                "hiragana" => "あおと",
                "katakana" => "アオト",
                "katakana_half" => "ｱｵﾄ",
                "romaji" => "aoto",
                "memo" => "",
                "latitude" => "35.745722",
                "altitude" => "139.856168",
            ]);
            
            Station::create([
                "id" => 2641,
                "prefecture_id" => 13,
                "city_id" => 658,
                "street_id" => null,
                "name" => "京成高砂",
                "hiragana" => "けいせいたかさご",
                "katakana" => "ケイセイタカサゴ",
                "katakana_half" => "ｹｲｾｲﾀｶｻｺﾞ",
                "romaji" => "keiseitakasago",
                "memo" => "",
                "latitude" => "35.750943",
                "altitude" => "139.866945",
            ]);
            
            Station::create([
                "id" => 2642,
                "prefecture_id" => 13,
                "city_id" => 658,
                "street_id" => null,
                "name" => "京成小岩",
                "hiragana" => "けいせいこいわ",
                "katakana" => "ケイセイコイワ",
                "katakana_half" => "ｹｲｾｲｺｲﾜ",
                "romaji" => "keiseikoiwa",
                "memo" => "",
                "latitude" => "35.742055",
                "altitude" => "139.883888",
            ]);
            
            Station::create([
                "id" => 2643,
                "prefecture_id" => 13,
                "city_id" => 676,
                "street_id" => null,
                "name" => "江戸川",
                "hiragana" => "えどがわ",
                "katakana" => "エドガワ",
                "katakana_half" => "ｴﾄﾞｶﾞﾜ",
                "romaji" => "edogawa",
                "memo" => "",
                "latitude" => "35.737723",
                "altitude" => "139.896222",
            ]);
            
            Station::create([
                "id" => 2644,
                "prefecture_id" => 13,
                "city_id" => 658,
                "street_id" => null,
                "name" => "京成曳舟",
                "hiragana" => "けいせいひきふね",
                "katakana" => "ケイセイヒキフネ",
                "katakana_half" => "ｹｲｾｲﾋｷﾌﾈ",
                "romaji" => "keiseihikifune",
                "memo" => "",
                "latitude" => "35.718029",
                "altitude" => "139.819645",
            ]);
            
            Station::create([
                "id" => 2645,
                "prefecture_id" => 13,
                "city_id" => 660,
                "street_id" => 39450,
                "name" => "八広",
                "hiragana" => "やひろ",
                "katakana" => "ヤヒロ",
                "katakana_half" => "ﾔﾋﾛ",
                "romaji" => "yahiro",
                "memo" => "",
                "latitude" => "35.727223",
                "altitude" => "139.828283",
            ]);
            
            Station::create([
                "id" => 2646,
                "prefecture_id" => 13,
                "city_id" => 654,
                "street_id" => 37521,
                "name" => "四ツ木",
                "hiragana" => "よつぎ",
                "katakana" => "ヨツギ",
                "katakana_half" => "ﾖﾂｷﾞ",
                "romaji" => "yotsugi",
                "memo" => "",
                "latitude" => "35.731889",
                "altitude" => "139.834977",
            ]);
            
            Station::create([
                "id" => 2647,
                "prefecture_id" => 13,
                "city_id" => 658,
                "street_id" => null,
                "name" => "京成立石",
                "hiragana" => "けいせいたていし",
                "katakana" => "ケイセイタテイシ",
                "katakana_half" => "ｹｲｾｲﾀﾃｲｼ",
                "romaji" => "keiseitateishi",
                "memo" => "",
                "latitude" => "35.738278",
                "altitude" => "139.848614",
            ]);
            
            Station::create([
                "id" => 2648,
                "prefecture_id" => 13,
                "city_id" => 675,
                "street_id" => 40259,
                "name" => "柴又",
                "hiragana" => "しばまた",
                "katakana" => "シバマタ",
                "katakana_half" => "ｼﾊﾞﾏﾀ",
                "romaji" => "shibamata",
                "memo" => "",
                "latitude" => "35.756665",
                "altitude" => "139.875500",
            ]);
            
            Station::create([
                "id" => 2649,
                "prefecture_id" => 13,
                "city_id" => 658,
                "street_id" => null,
                "name" => "京成金町",
                "hiragana" => "けいせいかなまち",
                "katakana" => "ケイセイカナマチ",
                "katakana_half" => "ｹｲｾｲｶﾅﾏﾁ",
                "romaji" => "keiseikanamachi",
                "memo" => "",
                "latitude" => "35.768469",
                "altitude" => "139.870500",
            ]);
            
            Station::create([
                "id" => 2650,
                "prefecture_id" => 13,
                "city_id" => 666,
                "street_id" => 39803,
                "name" => "笹塚",
                "hiragana" => "ささづか",
                "katakana" => "ササヅカ",
                "katakana_half" => "ｻｻﾂﾞｶ",
                "romaji" => "sasazuka",
                "memo" => "",
                "latitude" => "35.673670",
                "altitude" => "139.667326",
            ]);
            
            Station::create([
                "id" => 2651,
                "prefecture_id" => 13,
                "city_id" => 654,
                "street_id" => null,
                "name" => "代田橋",
                "hiragana" => "だいたばし",
                "katakana" => "ダイタバシ",
                "katakana_half" => "ﾀﾞｲﾀﾊﾞｼ",
                "romaji" => "daitabashi",
                "memo" => "",
                "latitude" => "35.670947",
                "altitude" => "139.658827",
            ]);
            
            Station::create([
                "id" => 2652,
                "prefecture_id" => 13,
                "city_id" => 654,
                "street_id" => 37045,
                "name" => "明大前",
                "hiragana" => "めいだいまえ",
                "katakana" => "メイダイマエ",
                "katakana_half" => "ﾒｲﾀﾞｲﾏｴ",
                "romaji" => "meidaimae",
                "memo" => "",
                "latitude" => "35.668365",
                "altitude" => "139.650412",
            ]);
            
            Station::create([
                "id" => 2653,
                "prefecture_id" => 13,
                "city_id" => 668,
                "street_id" => 39913,
                "name" => "下高井戸",
                "hiragana" => "しもたかいど",
                "katakana" => "シモタカイド",
                "katakana_half" => "ｼﾓﾀｶｲﾄﾞ",
                "romaji" => "shimotakaido",
                "memo" => "",
                "latitude" => "35.666143",
                "altitude" => "139.641385",
            ]);
            
            Station::create([
                "id" => 2654,
                "prefecture_id" => 13,
                "city_id" => 665,
                "street_id" => 39721,
                "name" => "桜上水",
                "hiragana" => "さくらじょうすい",
                "katakana" => "サクラジョウスイ",
                "katakana_half" => "ｻｸﾗｼﾞｮｳｽｲ",
                "romaji" => "sakurajousui",
                "memo" => "",
                "latitude" => "35.667559",
                "altitude" => "139.631913",
            ]);
            
            Station::create([
                "id" => 2655,
                "prefecture_id" => 13,
                "city_id" => 665,
                "street_id" => 39704,
                "name" => "上北沢",
                "hiragana" => "かみきたざわ",
                "katakana" => "カミキタザワ",
                "katakana_half" => "ｶﾐｷﾀｻﾞﾜ",
                "romaji" => "kamikitazawa",
                "memo" => "",
                "latitude" => "35.668837",
                "altitude" => "139.623497",
            ]);
            
            Station::create([
                "id" => 2656,
                "prefecture_id" => 13,
                "city_id" => 665,
                "street_id" => 39742,
                "name" => "八幡山",
                "hiragana" => "はちまんやま",
                "katakana" => "ハチマンヤマ",
                "katakana_half" => "ﾊﾁﾏﾝﾔﾏ",
                "romaji" => "hachimanyama",
                "memo" => "",
                "latitude" => "35.669892",
                "altitude" => "139.615748",
            ]);
            
            Station::create([
                "id" => 2657,
                "prefecture_id" => 13,
                "city_id" => 654,
                "street_id" => null,
                "name" => "芦花公園",
                "hiragana" => "ろかこうえん",
                "katakana" => "ロカコウエン",
                "katakana_half" => "ﾛｶｺｳｴﾝ",
                "romaji" => "rokakouen",
                "memo" => "",
                "latitude" => "35.670586",
                "altitude" => "139.608749",
            ]);
            
            Station::create([
                "id" => 2658,
                "prefecture_id" => 13,
                "city_id" => 660,
                "street_id" => 39440,
                "name" => "千歳烏山",
                "hiragana" => "ちとせからすやま",
                "katakana" => "チトセカラスヤマ",
                "katakana_half" => "ﾁﾄｾｶﾗｽﾔﾏ",
                "romaji" => "chitosekarasuyama",
                "memo" => "",
                "latitude" => "35.668197",
                "altitude" => "139.601138",
            ]);
            
            Station::create([
                "id" => 2659,
                "prefecture_id" => 13,
                "city_id" => 684,
                "street_id" => 40614,
                "name" => "仙川",
                "hiragana" => "せんがわ",
                "katakana" => "センガワ",
                "katakana_half" => "ｾﾝｶﾞﾜ",
                "romaji" => "sengawa",
                "memo" => "",
                "latitude" => "35.662309",
                "altitude" => "139.584917",
            ]);
            
            Station::create([
                "id" => 2660,
                "prefecture_id" => 13,
                "city_id" => 684,
                "street_id" => 40619,
                "name" => "つつじケ丘",
                "hiragana" => "つつじがおか",
                "katakana" => "ツツジガオカ",
                "katakana_half" => "ﾂﾂｼﾞｶﾞｵｶ",
                "romaji" => "tsutsujigaoka",
                "memo" => "",
                "latitude" => "35.658114",
                "altitude" => "139.575223",
            ]);
            
            Station::create([
                "id" => 2661,
                "prefecture_id" => 13,
                "city_id" => 678,
                "street_id" => 40462,
                "name" => "柴崎",
                "hiragana" => "しばさき",
                "katakana" => "シバサキ",
                "katakana_half" => "ｼﾊﾞｻｷ",
                "romaji" => "shibasaki",
                "memo" => "",
                "latitude" => "35.654170",
                "altitude" => "139.566835",
            ]);
            
            Station::create([
                "id" => 2662,
                "prefecture_id" => 13,
                "city_id" => 684,
                "street_id" => 40605,
                "name" => "国領",
                "hiragana" => "こくりょう",
                "katakana" => "コクリョウ",
                "katakana_half" => "ｺｸﾘｮｳ",
                "romaji" => "kokuryou",
                "memo" => "",
                "latitude" => "35.650253",
                "altitude" => "139.558615",
            ]);
            
            Station::create([
                "id" => 2663,
                "prefecture_id" => 13,
                "city_id" => 684,
                "street_id" => 40624,
                "name" => "布田",
                "hiragana" => "ふだ",
                "katakana" => "フダ",
                "katakana_half" => "ﾌﾀﾞ",
                "romaji" => "fuda",
                "memo" => "",
                "latitude" => "35.649865",
                "altitude" => "139.551865",
            ]);
            
            Station::create([
                "id" => 2664,
                "prefecture_id" => 13,
                "city_id" => 684,
                "street_id" => null,
                "name" => "調布",
                "hiragana" => "ちょうふ",
                "katakana" => "チョウフ",
                "katakana_half" => "ﾁｮｳﾌ",
                "romaji" => "choufu",
                "memo" => "",
                "latitude" => "35.651864",
                "altitude" => "139.544421",
            ]);
            
            Station::create([
                "id" => 2665,
                "prefecture_id" => 13,
                "city_id" => 702,
                "street_id" => null,
                "name" => "西調布",
                "hiragana" => "にしちょうふ",
                "katakana" => "ニシチョウフ",
                "katakana_half" => "ﾆｼﾁｮｳﾌ",
                "romaji" => "nishichoufu",
                "memo" => "",
                "latitude" => "35.657058",
                "altitude" => "139.530088",
            ]);
            
            Station::create([
                "id" => 2666,
                "prefecture_id" => 13,
                "city_id" => 684,
                "street_id" => 40618,
                "name" => "飛田給",
                "hiragana" => "とびたきゅう",
                "katakana" => "トビタキュウ",
                "katakana_half" => "ﾄﾋﾞﾀｷｭｳ",
                "romaji" => "tobitakyuu",
                "memo" => "",
                "latitude" => "35.660196",
                "altitude" => "139.523311",
            ]);
            
            Station::create([
                "id" => 2667,
                "prefecture_id" => 13,
                "city_id" => 692,
                "street_id" => 40806,
                "name" => "武蔵野台",
                "hiragana" => "むさしのだい",
                "katakana" => "ムサシノダイ",
                "katakana_half" => "ﾑｻｼﾉﾀﾞｲ",
                "romaji" => "musashinodai",
                "memo" => "",
                "latitude" => "35.664196",
                "altitude" => "139.511118",
            ]);
            
            Station::create([
                "id" => 2668,
                "prefecture_id" => 13,
                "city_id" => 682,
                "street_id" => 40557,
                "name" => "多磨霊園",
                "hiragana" => "たまれいえん",
                "katakana" => "タマレイエン",
                "katakana_half" => "ﾀﾏﾚｲｴﾝ",
                "romaji" => "tamareien",
                "memo" => "",
                "latitude" => "35.666084",
                "altitude" => "139.503118",
            ]);
            
            Station::create([
                "id" => 2669,
                "prefecture_id" => 13,
                "city_id" => 659,
                "street_id" => null,
                "name" => "東府中",
                "hiragana" => "ひがしふちゅう",
                "katakana" => "ヒガシフチュウ",
                "katakana_half" => "ﾋｶﾞｼﾌﾁｭｳ",
                "romaji" => "higashifuchuu",
                "memo" => "",
                "latitude" => "35.669029",
                "altitude" => "139.495229",
            ]);
            
            Station::create([
                "id" => 2670,
                "prefecture_id" => 13,
                "city_id" => 682,
                "street_id" => null,
                "name" => "府中",
                "hiragana" => "ふちゅう",
                "katakana" => "フチュウ",
                "katakana_half" => "ﾌﾁｭｳ",
                "romaji" => "fuchuu",
                "memo" => "東京都",
                "latitude" => "35.672222",
                "altitude" => "139.480453",
            ]);
            
            Station::create([
                "id" => 2671,
                "prefecture_id" => 13,
                "city_id" => 655,
                "street_id" => null,
                "name" => "中河原",
                "hiragana" => "なかがわら",
                "katakana" => "ナカガワラ",
                "katakana_half" => "ﾅｶｶﾞﾜﾗ",
                "romaji" => "nakagawara",
                "memo" => "",
                "latitude" => "35.659529",
                "altitude" => "139.457567",
            ]);
            
            Station::create([
                "id" => 2672,
                "prefecture_id" => 13,
                "city_id" => 698,
                "street_id" => 40907,
                "name" => "聖蹟桜ケ丘",
                "hiragana" => "せいせきさくらがおか",
                "katakana" => "セイセキサクラガオカ",
                "katakana_half" => "ｾｲｾｷｻｸﾗｶﾞｵｶ",
                "romaji" => "seisekisakuragaoka",
                "memo" => "",
                "latitude" => "35.650752",
                "altitude" => "139.447040",
            ]);
            
            Station::create([
                "id" => 2673,
                "prefecture_id" => 13,
                "city_id" => 688,
                "street_id" => 40748,
                "name" => "百草園",
                "hiragana" => "もぐさえん",
                "katakana" => "モグサエン",
                "katakana_half" => "ﾓｸﾞｻｴﾝ",
                "romaji" => "mogusaen",
                "memo" => "",
                "latitude" => "35.657501",
                "altitude" => "139.430847",
            ]);
            
            Station::create([
                "id" => 2674,
                "prefecture_id" => 13,
                "city_id" => 688,
                "street_id" => 40731,
                "name" => "高幡不動",
                "hiragana" => "たかはたふどう",
                "katakana" => "タカハタフドウ",
                "katakana_half" => "ﾀｶﾊﾀﾌﾄﾞｳ",
                "romaji" => "takahatafudou",
                "memo" => "",
                "latitude" => "35.661834",
                "altitude" => "139.414321",
            ]);
            
            Station::create([
                "id" => 2675,
                "prefecture_id" => 13,
                "city_id" => 666,
                "street_id" => 39862,
                "name" => "南平",
                "hiragana" => "みなみだいら",
                "katakana" => "ミナミダイラ",
                "katakana_half" => "ﾐﾅﾐﾀﾞｲﾗ",
                "romaji" => "minamidaira",
                "memo" => "",
                "latitude" => "35.654556",
                "altitude" => "139.392017",
            ]);
            
            Station::create([
                "id" => 2676,
                "prefecture_id" => 13,
                "city_id" => 688,
                "street_id" => 40735,
                "name" => "平山城址公園",
                "hiragana" => "ひらやまじょうしこうえん",
                "katakana" => "ヒラヤマジョウシコウエン",
                "katakana_half" => "ﾋﾗﾔﾏｼﾞｮｳｼｺｳｴﾝ",
                "romaji" => "hirayamajoushikouen",
                "memo" => "",
                "latitude" => "35.647529",
                "altitude" => "139.380352",
            ]);
            
            Station::create([
                "id" => 2677,
                "prefecture_id" => 13,
                "city_id" => 677,
                "street_id" => 40404,
                "name" => "長沼",
                "hiragana" => "ながぬま",
                "katakana" => "ナガヌマ",
                "katakana_half" => "ﾅｶﾞﾇﾏ",
                "romaji" => "naganuma",
                "memo" => "東京都",
                "latitude" => "35.642807",
                "altitude" => "139.366214",
            ]);
            
            Station::create([
                "id" => 2678,
                "prefecture_id" => 13,
                "city_id" => 677,
                "street_id" => 40366,
                "name" => "北野",
                "hiragana" => "きたの",
                "katakana" => "キタノ",
                "katakana_half" => "ｷﾀﾉ",
                "romaji" => "kitano",
                "memo" => "東京都",
                "latitude" => "35.644417",
                "altitude" => "139.354660",
            ]);
            
            Station::create([
                "id" => 2679,
                "prefecture_id" => 13,
                "city_id" => 658,
                "street_id" => null,
                "name" => "京王八王子",
                "hiragana" => "けいおうはちおうじ",
                "katakana" => "ケイオウハチオウジ",
                "katakana_half" => "ｹｲｵｳﾊﾁｵｳｼﾞ",
                "romaji" => "keiouhachiouji",
                "memo" => "",
                "latitude" => "35.658222",
                "altitude" => "139.342938",
            ]);
            
            Station::create([
                "id" => 2680,
                "prefecture_id" => 13,
                "city_id" => 666,
                "street_id" => 39866,
                "name" => "初台",
                "hiragana" => "はつだい",
                "katakana" => "ハツダイ",
                "katakana_half" => "ﾊﾂﾀﾞｲ",
                "romaji" => "hatsudai",
                "memo" => "",
                "latitude" => "35.681281",
                "altitude" => "139.686519",
            ]);
            
            Station::create([
                "id" => 2681,
                "prefecture_id" => 13,
                "city_id" => 657,
                "street_id" => 38690,
                "name" => "幡ケ谷",
                "hiragana" => "はたがや",
                "katakana" => "ハタガヤ",
                "katakana_half" => "ﾊﾀｶﾞﾔ",
                "romaji" => "hatagaya",
                "memo" => "",
                "latitude" => "35.677115",
                "altitude" => "139.676520",
            ]);
            
            Station::create([
                "id" => 2682,
                "prefecture_id" => 13,
                "city_id" => 658,
                "street_id" => null,
                "name" => "京王多摩川",
                "hiragana" => "けいおうたまがわ",
                "katakana" => "ケイオウタマガワ",
                "katakana_half" => "ｹｲｵｳﾀﾏｶﾞﾜ",
                "romaji" => "keioutamagawa",
                "memo" => "",
                "latitude" => "35.644782",
                "altitude" => "139.537061",
            ]);
            
            Station::create([
                "id" => 2683,
                "prefecture_id" => 13,
                "city_id" => 658,
                "street_id" => null,
                "name" => "京王よみうりランド",
                "hiragana" => "けいおうよみうりらんど",
                "katakana" => "ケイオウヨミウリランド",
                "katakana_half" => "ｹｲｵｳﾖﾐｳﾘﾗﾝﾄﾞ",
                "romaji" => "keiouyomiurirando",
                "memo" => "",
                "latitude" => "35.632866",
                "altitude" => "139.516785",
            ]);
            
            Station::create([
                "id" => 2684,
                "prefecture_id" => 13,
                "city_id" => 699,
                "street_id" => null,
                "name" => "稲城",
                "hiragana" => "いなぎ",
                "katakana" => "イナギ",
                "katakana_half" => "ｲﾅｷﾞ",
                "romaji" => "inagi",
                "memo" => "",
                "latitude" => "35.636171",
                "altitude" => "139.500203",
            ]);
            
            Station::create([
                "id" => 2685,
                "prefecture_id" => 13,
                "city_id" => 658,
                "street_id" => null,
                "name" => "京王永山",
                "hiragana" => "けいおうながやま",
                "katakana" => "ケイオウナガヤマ",
                "katakana_half" => "ｹｲｵｳﾅｶﾞﾔﾏ",
                "romaji" => "keiounagayama",
                "memo" => "",
                "latitude" => "35.630310",
                "altitude" => "139.448264",
            ]);
            
            Station::create([
                "id" => 2686,
                "prefecture_id" => 13,
                "city_id" => 658,
                "street_id" => null,
                "name" => "京王多摩センター",
                "hiragana" => "けいおうたませんたー",
                "katakana" => "ケイオウタマセンター",
                "katakana_half" => "ｹｲｵｳﾀﾏｾﾝﾀｰ",
                "romaji" => "keioutamasentaｰ",
                "memo" => "",
                "latitude" => "35.625171",
                "altitude" => "139.424322",
            ]);
            
            Station::create([
                "id" => 2687,
                "prefecture_id" => 13,
                "city_id" => 658,
                "street_id" => null,
                "name" => "京王堀之内",
                "hiragana" => "けいおうほりのうち",
                "katakana" => "ケイオウホリノウチ",
                "katakana_half" => "ｹｲｵｳﾎﾘﾉｳﾁ",
                "romaji" => "keiouhorinouchi",
                "memo" => "",
                "latitude" => "35.624448",
                "altitude" => "139.400323",
            ]);
            
            Station::create([
                "id" => 2688,
                "prefecture_id" => 13,
                "city_id" => 677,
                "street_id" => 40434,
                "name" => "南大沢",
                "hiragana" => "みなみおおさわ",
                "katakana" => "ミナミオオサワ",
                "katakana_half" => "ﾐﾅﾐｵｵｻﾜ",
                "romaji" => "minamioosawa",
                "memo" => "",
                "latitude" => "35.614116",
                "altitude" => "139.380076",
            ]);
            
            Station::create([
                "id" => 2689,
                "prefecture_id" => 13,
                "city_id" => 698,
                "street_id" => null,
                "name" => "多摩境",
                "hiragana" => "たまさかい",
                "katakana" => "タマサカイ",
                "katakana_half" => "ﾀﾏｻｶｲ",
                "romaji" => "tamasakai",
                "memo" => "",
                "latitude" => "35.601839",
                "altitude" => "139.366966",
            ]);
            
            Station::create([
                "id" => 2690,
                "prefecture_id" => 13,
                "city_id" => 682,
                "street_id" => null,
                "name" => "府中競馬正門前",
                "hiragana" => "ふちゅうけいばせいもんまえ",
                "katakana" => "フチュウケイバセイモンマエ",
                "katakana_half" => "ﾌﾁｭｳｹｲﾊﾞｾｲﾓﾝﾏｴ",
                "romaji" => "fuchuukeibaseimonmae",
                "memo" => "",
                "latitude" => "35.668334",
                "altitude" => "139.485148",
            ]);
            
            Station::create([
                "id" => 2691,
                "prefecture_id" => 13,
                "city_id" => 698,
                "street_id" => null,
                "name" => "多摩動物公園",
                "hiragana" => "たまどうぶつこうえん",
                "katakana" => "タマドウブツコウエン",
                "katakana_half" => "ﾀﾏﾄﾞｳﾌﾞﾂｺｳｴﾝ",
                "romaji" => "tamadoubutsukouen",
                "memo" => "",
                "latitude" => "35.649057",
                "altitude" => "139.404516",
            ]);
            
            Station::create([
                "id" => 2692,
                "prefecture_id" => 13,
                "city_id" => 658,
                "street_id" => null,
                "name" => "京王片倉",
                "hiragana" => "けいおうかたくら",
                "katakana" => "ケイオウカタクラ",
                "katakana_half" => "ｹｲｵｳｶﾀｸﾗ",
                "romaji" => "keioukatakura",
                "memo" => "",
                "latitude" => "35.644362",
                "altitude" => "139.337355",
            ]);
            
            Station::create([
                "id" => 2693,
                "prefecture_id" => 13,
                "city_id" => 677,
                "street_id" => 40447,
                "name" => "山田",
                "hiragana" => "やまだ",
                "katakana" => "ヤマダ",
                "katakana_half" => "ﾔﾏﾀﾞ",
                "romaji" => "yamada",
                "memo" => "東京都",
                "latitude" => "35.644334",
                "altitude" => "139.321135",
            ]);
            
            Station::create([
                "id" => 2694,
                "prefecture_id" => 13,
                "city_id" => 677,
                "street_id" => 40441,
                "name" => "めじろ台",
                "hiragana" => "めじろだい",
                "katakana" => "メジロダイ",
                "katakana_half" => "ﾒｼﾞﾛﾀﾞｲ",
                "romaji" => "mejirodai",
                "memo" => "",
                "latitude" => "35.643362",
                "altitude" => "139.307719",
            ]);
            
            Station::create([
                "id" => 2695,
                "prefecture_id" => 13,
                "city_id" => 677,
                "street_id" => 40414,
                "name" => "狭間",
                "hiragana" => "はざま",
                "katakana" => "ハザマ",
                "katakana_half" => "ﾊｻﾞﾏ",
                "romaji" => "hazama",
                "memo" => "",
                "latitude" => "35.640556",
                "altitude" => "139.293331",
            ]);
            
            Station::create([
                "id" => 2696,
                "prefecture_id" => 13,
                "city_id" => 677,
                "street_id" => 40346,
                "name" => "高尾山口",
                "hiragana" => "たかおさんぐち",
                "katakana" => "タカオサングチ",
                "katakana_half" => "ﾀｶｵｻﾝｸﾞﾁ",
                "romaji" => "takaosanguchi",
                "memo" => "",
                "latitude" => "35.632223",
                "altitude" => "139.269945",
            ]);
            
            Station::create([
                "id" => 2697,
                "prefecture_id" => 13,
                "city_id" => 666,
                "street_id" => 39856,
                "name" => "神泉",
                "hiragana" => "しんせん",
                "katakana" => "シンセン",
                "katakana_half" => "ｼﾝｾﾝ",
                "romaji" => "shinsen",
                "memo" => "",
                "latitude" => "35.657228",
                "altitude" => "139.693659",
            ]);
            
            Station::create([
                "id" => 2698,
                "prefecture_id" => 13,
                "city_id" => 663,
                "street_id" => 39607,
                "name" => "駒場東大前",
                "hiragana" => "こまばとうだいまえ",
                "katakana" => "コマバトウダイマエ",
                "katakana_half" => "ｺﾏﾊﾞﾄｳﾀﾞｲﾏｴ",
                "romaji" => "komabatoudaimae",
                "memo" => "",
                "latitude" => "35.658645",
                "altitude" => "139.684493",
            ]);
            
            Station::create([
                "id" => 2699,
                "prefecture_id" => 13,
                "city_id" => 659,
                "street_id" => 39396,
                "name" => "池ノ上",
                "hiragana" => "いけのうえ",
                "katakana" => "イケノウエ",
                "katakana_half" => "ｲｹﾉｳｴ",
                "romaji" => "ikenoue",
                "memo" => "",
                "latitude" => "35.660450",
                "altitude" => "139.673132",
            ]);
            
            Station::create([
                "id" => 2700,
                "prefecture_id" => 13,
                "city_id" => 654,
                "street_id" => 37038,
                "name" => "下北沢",
                "hiragana" => "しもきたざわ",
                "katakana" => "シモキタザワ",
                "katakana_half" => "ｼﾓｷﾀｻﾞﾜ",
                "romaji" => "shimokitazawa",
                "memo" => "",
                "latitude" => "35.661310",
                "altitude" => "139.667494",
            ]);
            
            Station::create([
                "id" => 2701,
                "prefecture_id" => 13,
                "city_id" => 654,
                "street_id" => null,
                "name" => "新代田",
                "hiragana" => "しんだいた",
                "katakana" => "シンダイタ",
                "katakana_half" => "ｼﾝﾀﾞｲﾀ",
                "romaji" => "shindaita",
                "memo" => "",
                "latitude" => "35.662588",
                "altitude" => "139.660522",
            ]);
            
            Station::create([
                "id" => 2702,
                "prefecture_id" => 13,
                "city_id" => 703,
                "street_id" => 41015,
                "name" => "東松原",
                "hiragana" => "ひがしまつばら",
                "katakana" => "ヒガシマツバラ",
                "katakana_half" => "ﾋｶﾞｼﾏﾂﾊﾞﾗ",
                "romaji" => "higashimatsubara",
                "memo" => "",
                "latitude" => "35.662643",
                "altitude" => "139.655661",
            ]);
            
            Station::create([
                "id" => 2703,
                "prefecture_id" => 13,
                "city_id" => 668,
                "street_id" => 39902,
                "name" => "永福町",
                "hiragana" => "えいふくちょう",
                "katakana" => "エイフクチョウ",
                "katakana_half" => "ｴｲﾌｸﾁｮｳ",
                "romaji" => "eifukuchou",
                "memo" => "",
                "latitude" => "35.676224",
                "altitude" => "139.642662",
            ]);
            
            Station::create([
                "id" => 2704,
                "prefecture_id" => 13,
                "city_id" => 702,
                "street_id" => null,
                "name" => "西永福",
                "hiragana" => "にしえいふく",
                "katakana" => "ニシエイフク",
                "katakana_half" => "ﾆｼｴｲﾌｸ",
                "romaji" => "nishieifuku",
                "memo" => "",
                "latitude" => "35.678780",
                "altitude" => "139.635384",
            ]);
            
            Station::create([
                "id" => 2705,
                "prefecture_id" => 13,
                "city_id" => 668,
                "street_id" => 39922,
                "name" => "浜田山",
                "hiragana" => "はまだやま",
                "katakana" => "ハマダヤマ",
                "katakana_half" => "ﾊﾏﾀﾞﾔﾏ",
                "romaji" => "hamadayama",
                "memo" => "",
                "latitude" => "35.681613",
                "altitude" => "139.627524",
            ]);
            
            Station::create([
                "id" => 2706,
                "prefecture_id" => 13,
                "city_id" => 668,
                "street_id" => 39907,
                "name" => "高井戸",
                "hiragana" => "たかいど",
                "katakana" => "タカイド",
                "katakana_half" => "ﾀｶｲﾄﾞ",
                "romaji" => "takaido",
                "memo" => "",
                "latitude" => "35.683306",
                "altitude" => "139.615025",
            ]);
            
            Station::create([
                "id" => 2707,
                "prefecture_id" => 13,
                "city_id" => 654,
                "street_id" => 37214,
                "name" => "富士見ケ丘",
                "hiragana" => "ふじみがおか",
                "katakana" => "フジミガオカ",
                "katakana_half" => "ﾌｼﾞﾐｶﾞｵｶ",
                "romaji" => "fujimigaoka",
                "memo" => "",
                "latitude" => "35.684834",
                "altitude" => "139.607081",
            ]);
            
            Station::create([
                "id" => 2708,
                "prefecture_id" => 13,
                "city_id" => 668,
                "street_id" => 39908,
                "name" => "久我山",
                "hiragana" => "くがやま",
                "katakana" => "クガヤマ",
                "katakana_half" => "ｸｶﾞﾔﾏ",
                "romaji" => "kugayama",
                "memo" => "",
                "latitude" => "35.687778",
                "altitude" => "139.599721",
            ]);
            
            Station::create([
                "id" => 2709,
                "prefecture_id" => 13,
                "city_id" => 680,
                "street_id" => null,
                "name" => "三鷹台",
                "hiragana" => "みたかだい",
                "katakana" => "ミタカダイ",
                "katakana_half" => "ﾐﾀｶﾀﾞｲ",
                "romaji" => "mitakadai",
                "memo" => "",
                "latitude" => "35.692222",
                "altitude" => "139.588915",
            ]);
            
            Station::create([
                "id" => 2710,
                "prefecture_id" => 13,
                "city_id" => 680,
                "street_id" => 40487,
                "name" => "井の頭公園",
                "hiragana" => "いのかしらこうえん",
                "katakana" => "イノカシラコウエン",
                "katakana_half" => "ｲﾉｶｼﾗｺｳｴﾝ",
                "romaji" => "inokashirakouen",
                "memo" => "",
                "latitude" => "35.697499",
                "altitude" => "139.582721",
            ]);
            
            Station::create([
                "id" => 2711,
                "prefecture_id" => 13,
                "city_id" => 677,
                "street_id" => 40435,
                "name" => "南新宿",
                "hiragana" => "みなみしんじゅく",
                "katakana" => "ミナミシンジュク",
                "katakana_half" => "ﾐﾅﾐｼﾝｼﾞｭｸ",
                "romaji" => "minamishinjuku",
                "memo" => "",
                "latitude" => "35.683447",
                "altitude" => "139.698545",
            ]);
            
            Station::create([
                "id" => 2712,
                "prefecture_id" => 13,
                "city_id" => 654,
                "street_id" => null,
                "name" => "参宮橋",
                "hiragana" => "さんぐうばし",
                "katakana" => "サングウバシ",
                "katakana_half" => "ｻﾝｸﾞｳﾊﾞｼ",
                "romaji" => "sanguubashi",
                "memo" => "",
                "latitude" => "35.678698",
                "altitude" => "139.693574",
            ]);
            
            Station::create([
                "id" => 2713,
                "prefecture_id" => 13,
                "city_id" => 666,
                "street_id" => 39871,
                "name" => "代々木八幡",
                "hiragana" => "よよぎはちまん",
                "katakana" => "ヨヨギハチマン",
                "katakana_half" => "ﾖﾖｷﾞﾊﾁﾏﾝ",
                "romaji" => "yoyogihachiman",
                "memo" => "",
                "latitude" => "35.669477",
                "altitude" => "139.688603",
            ]);
            
            Station::create([
                "id" => 2714,
                "prefecture_id" => 13,
                "city_id" => 666,
                "street_id" => 39871,
                "name" => "代々木上原",
                "hiragana" => "よよぎうえはら",
                "katakana" => "ヨヨギウエハラ",
                "katakana_half" => "ﾖﾖｷﾞｳｴﾊﾗ",
                "romaji" => "yoyogiuehara",
                "memo" => "",
                "latitude" => "35.669060",
                "altitude" => "139.679687",
            ]);
            
            Station::create([
                "id" => 2715,
                "prefecture_id" => 13,
                "city_id" => 659,
                "street_id" => null,
                "name" => "東北沢",
                "hiragana" => "ひがしきたざわ",
                "katakana" => "ヒガシキタザワ",
                "katakana_half" => "ﾋｶﾞｼｷﾀｻﾞﾜ",
                "romaji" => "higashikitazawa",
                "memo" => "",
                "latitude" => "35.665504",
                "altitude" => "139.672993",
            ]);
            
            Station::create([
                "id" => 2716,
                "prefecture_id" => 13,
                "city_id" => 665,
                "street_id" => null,
                "name" => "世田谷代田",
                "hiragana" => "せたがやだいた",
                "katakana" => "セタガヤダイタ",
                "katakana_half" => "ｾﾀｶﾞﾔﾀﾞｲﾀ",
                "romaji" => "setagayadaita",
                "memo" => "",
                "latitude" => "35.658171",
                "altitude" => "139.661245",
            ]);
            
            Station::create([
                "id" => 2717,
                "prefecture_id" => 13,
                "city_id" => 681,
                "street_id" => null,
                "name" => "梅ケ丘",
                "hiragana" => "うめがおか",
                "katakana" => "ウメガオカ",
                "katakana_half" => "ｳﾒｶﾞｵｶ",
                "romaji" => "umegaoka",
                "memo" => "",
                "latitude" => "35.655922",
                "altitude" => "139.653634",
            ]);
            
            Station::create([
                "id" => 2718,
                "prefecture_id" => 13,
                "city_id" => 665,
                "street_id" => 39715,
                "name" => "豪徳寺",
                "hiragana" => "ごうとくじ",
                "katakana" => "ゴウトクジ",
                "katakana_half" => "ｺﾞｳﾄｸｼﾞ",
                "romaji" => "goutokuji",
                "memo" => "",
                "latitude" => "35.653672",
                "altitude" => "139.647523",
            ]);
            
            Station::create([
                "id" => 2719,
                "prefecture_id" => 13,
                "city_id" => 665,
                "street_id" => 39714,
                "name" => "経堂",
                "hiragana" => "きょうどう",
                "katakana" => "キョウドウ",
                "katakana_half" => "ｷｮｳﾄﾞｳ",
                "romaji" => "kyoudou",
                "memo" => "",
                "latitude" => "35.651310",
                "altitude" => "139.636441",
            ]);
            
            Station::create([
                "id" => 2720,
                "prefecture_id" => 13,
                "city_id" => 660,
                "street_id" => 39440,
                "name" => "千歳船橋",
                "hiragana" => "ちとせふなばし",
                "katakana" => "チトセフナバシ",
                "katakana_half" => "ﾁﾄｾﾌﾅﾊﾞｼ",
                "romaji" => "chitosefunabashi",
                "memo" => "",
                "latitude" => "35.647338",
                "altitude" => "139.624082",
            ]);
            
            Station::create([
                "id" => 2721,
                "prefecture_id" => 13,
                "city_id" => 665,
                "street_id" => 39705,
                "name" => "祖師ケ谷大蔵",
                "hiragana" => "そしがやおおくら",
                "katakana" => "ソシガヤオオクラ",
                "katakana_half" => "ｿｼｶﾞﾔｵｵｸﾗ",
                "romaji" => "soshigayaookura",
                "memo" => "",
                "latitude" => "35.643200",
                "altitude" => "139.609305",
            ]);
            
            Station::create([
                "id" => 2722,
                "prefecture_id" => 13,
                "city_id" => 665,
                "street_id" => 39725,
                "name" => "成城学園前",
                "hiragana" => "せいじょうがくえんまえ",
                "katakana" => "セイジョウガクエンマエ",
                "katakana_half" => "ｾｲｼﾞｮｳｶﾞｸｴﾝﾏｴ",
                "romaji" => "seijougakuenmae",
                "memo" => "",
                "latitude" => "35.640173",
                "altitude" => "139.598945",
            ]);
            
            Station::create([
                "id" => 2723,
                "prefecture_id" => 13,
                "city_id" => 665,
                "street_id" => 39710,
                "name" => "喜多見",
                "hiragana" => "きたみ",
                "katakana" => "キタミ",
                "katakana_half" => "ｷﾀﾐ",
                "romaji" => "kitami",
                "memo" => "",
                "latitude" => "35.636673",
                "altitude" => "139.587112",
            ]);
            
            Station::create([
                "id" => 2724,
                "prefecture_id" => 13,
                "city_id" => 693,
                "street_id" => null,
                "name" => "狛江",
                "hiragana" => "こまえ",
                "katakana" => "コマエ",
                "katakana_half" => "ｺﾏｴ",
                "romaji" => "komae",
                "memo" => "",
                "latitude" => "35.632145",
                "altitude" => "139.577419",
            ]);
            
            Station::create([
                "id" => 2725,
                "prefecture_id" => 13,
                "city_id" => 654,
                "street_id" => 37124,
                "name" => "和泉多摩川",
                "hiragana" => "いずみたまがわ",
                "katakana" => "イズミタマガワ",
                "katakana_half" => "ｲｽﾞﾐﾀﾏｶﾞﾜ",
                "romaji" => "izumitamagawa",
                "memo" => "",
                "latitude" => "35.627257",
                "altitude" => "139.573642",
            ]);
            
            Station::create([
                "id" => 2726,
                "prefecture_id" => 13,
                "city_id" => 685,
                "street_id" => 40654,
                "name" => "鶴川",
                "hiragana" => "つるかわ",
                "katakana" => "ツルカワ",
                "katakana_half" => "ﾂﾙｶﾜ",
                "romaji" => "tsurukawa",
                "memo" => "",
                "latitude" => "35.583121",
                "altitude" => "139.480929",
            ]);
            
            Station::create([
                "id" => 2727,
                "prefecture_id" => 13,
                "city_id" => 685,
                "street_id" => 40652,
                "name" => "玉川学園前",
                "hiragana" => "たまがわがくえんまえ",
                "katakana" => "タマガワガクエンマエ",
                "katakana_half" => "ﾀﾏｶﾞﾜｶﾞｸｴﾝﾏｴ",
                "romaji" => "tamagawagakuenmae",
                "memo" => "",
                "latitude" => "35.563317",
                "altitude" => "139.463349",
            ]);
            
            Station::create([
                "id" => 2728,
                "prefecture_id" => 13,
                "city_id" => 657,
                "street_id" => 38742,
                "name" => "小田急永山",
                "hiragana" => "おだきゅうながやま",
                "katakana" => "オダキュウナガヤマ",
                "katakana_half" => "ｵﾀﾞｷｭｳﾅｶﾞﾔﾏ",
                "romaji" => "odakyuunagayama",
                "memo" => "",
                "latitude" => "35.629810",
                "altitude" => "139.448235",
            ]);
            
            Station::create([
                "id" => 2729,
                "prefecture_id" => 13,
                "city_id" => 657,
                "street_id" => 38742,
                "name" => "小田急多摩センター",
                "hiragana" => "おだきゅうたませんたー",
                "katakana" => "オダキュウタマセンター",
                "katakana_half" => "ｵﾀﾞｷｭｳﾀﾏｾﾝﾀｰ",
                "romaji" => "odakyuutamasentaｰ",
                "memo" => "",
                "latitude" => "35.625060",
                "altitude" => "139.424599",
            ]);
            
            Station::create([
                "id" => 2730,
                "prefecture_id" => 13,
                "city_id" => 698,
                "street_id" => 40896,
                "name" => "唐木田",
                "hiragana" => "からきだ",
                "katakana" => "カラキダ",
                "katakana_half" => "ｶﾗｷﾀﾞ",
                "romaji" => "karakida",
                "memo" => "",
                "latitude" => "35.615838",
                "altitude" => "139.411129",
            ]);
            
            Station::create([
                "id" => 2731,
                "prefecture_id" => 13,
                "city_id" => 666,
                "street_id" => 39859,
                "name" => "代官山",
                "hiragana" => "だいかんやま",
                "katakana" => "ダイカンヤマ",
                "katakana_half" => "ﾀﾞｲｶﾝﾔﾏ",
                "romaji" => "daikanyama",
                "memo" => "",
                "latitude" => "35.648090",
                "altitude" => "139.703186",
            ]);
            
            Station::create([
                "id" => 2732,
                "prefecture_id" => 13,
                "city_id" => 663,
                "street_id" => 39616,
                "name" => "中目黒",
                "hiragana" => "なかめぐろ",
                "katakana" => "ナカメグロ",
                "katakana_half" => "ﾅｶﾒｸﾞﾛ",
                "romaji" => "nakameguro",
                "memo" => "",
                "latitude" => "35.644284",
                "altitude" => "139.698881",
            ]);
            
            Station::create([
                "id" => 2733,
                "prefecture_id" => 13,
                "city_id" => 663,
                "street_id" => 39627,
                "name" => "祐天寺",
                "hiragana" => "ゆうてんじ",
                "katakana" => "ユウテンジ",
                "katakana_half" => "ﾕｳﾃﾝｼﾞ",
                "romaji" => "yuutenji",
                "memo" => "",
                "latitude" => "35.637618",
                "altitude" => "139.691048",
            ]);
            
            Station::create([
                "id" => 2734,
                "prefecture_id" => 13,
                "city_id" => 673,
                "street_id" => 40115,
                "name" => "学芸大学",
                "hiragana" => "がくげいだいがく",
                "katakana" => "ガクゲイダイガク",
                "katakana_half" => "ｶﾞｸｹﾞｲﾀﾞｲｶﾞｸ",
                "romaji" => "gakugeidaigaku",
                "memo" => "",
                "latitude" => "35.628842",
                "altitude" => "139.685299",
            ]);
            
            Station::create([
                "id" => 2735,
                "prefecture_id" => 13,
                "city_id" => 705,
                "street_id" => 41035,
                "name" => "都立大学",
                "hiragana" => "とりつだいがく",
                "katakana" => "トリツダイガク",
                "katakana_half" => "ﾄﾘﾂﾀﾞｲｶﾞｸ",
                "romaji" => "toritsudaigaku",
                "memo" => "",
                "latitude" => "35.617815",
                "altitude" => "139.676467",
            ]);
            
            Station::create([
                "id" => 2736,
                "prefecture_id" => 13,
                "city_id" => 663,
                "street_id" => 39609,
                "name" => "自由が丘",
                "hiragana" => "じゆうがおか",
                "katakana" => "ジユウガオカ",
                "katakana_half" => "ｼﾞﾕｳｶﾞｵｶ",
                "romaji" => "jiyuugaoka",
                "memo" => "",
                "latitude" => "35.607566",
                "altitude" => "139.669080",
            ]);
            
            Station::create([
                "id" => 2737,
                "prefecture_id" => 13,
                "city_id" => 664,
                "street_id" => 39655,
                "name" => "田園調布",
                "hiragana" => "でんえんちょうふ",
                "katakana" => "デンエンチョウフ",
                "katakana_half" => "ﾃﾞﾝｴﾝﾁｮｳﾌ",
                "romaji" => "denenchoufu",
                "memo" => "",
                "latitude" => "35.596872",
                "altitude" => "139.667330",
            ]);
            
            Station::create([
                "id" => 2738,
                "prefecture_id" => 13,
                "city_id" => 664,
                "street_id" => 39652,
                "name" => "多摩川",
                "hiragana" => "たまがわ",
                "katakana" => "タマガワ",
                "katakana_half" => "ﾀﾏｶﾞﾜ",
                "romaji" => "tamagawa",
                "memo" => "",
                "latitude" => "35.589763",
                "altitude" => "139.668858",
            ]);
            
            Station::create([
                "id" => 2739,
                "prefecture_id" => 13,
                "city_id" => 656,
                "street_id" => 38494,
                "name" => "不動前",
                "hiragana" => "ふどうまえ",
                "katakana" => "フドウマエ",
                "katakana_half" => "ﾌﾄﾞｳﾏｴ",
                "romaji" => "fudoumae",
                "memo" => "",
                "latitude" => "35.625675",
                "altitude" => "139.713436",
            ]);
            
            Station::create([
                "id" => 2740,
                "prefecture_id" => 13,
                "city_id" => 679,
                "street_id" => null,
                "name" => "武蔵小山",
                "hiragana" => "むさしこやま",
                "katakana" => "ムサシコヤマ",
                "katakana_half" => "ﾑｻｼｺﾔﾏ",
                "romaji" => "musashikoyama",
                "memo" => "",
                "latitude" => "35.620398",
                "altitude" => "139.704409",
            ]);
            
            Station::create([
                "id" => 2741,
                "prefecture_id" => 13,
                "city_id" => 676,
                "street_id" => 40306,
                "name" => "西小山",
                "hiragana" => "にしこやま",
                "katakana" => "ニシコヤマ",
                "katakana_half" => "ﾆｼｺﾔﾏ",
                "romaji" => "nishikoyama",
                "memo" => "",
                "latitude" => "35.615676",
                "altitude" => "139.698883",
            ]);
            
            Station::create([
                "id" => 2742,
                "prefecture_id" => 13,
                "city_id" => 663,
                "street_id" => 39610,
                "name" => "洗足",
                "hiragana" => "せんぞく",
                "katakana" => "センゾク",
                "katakana_half" => "ｾﾝｿﾞｸ",
                "romaji" => "senzoku",
                "memo" => "",
                "latitude" => "35.610427",
                "altitude" => "139.694382",
            ]);
            
            Station::create([
                "id" => 2743,
                "prefecture_id" => 13,
                "city_id" => 663,
                "street_id" => 39602,
                "name" => "大岡山",
                "hiragana" => "おおおかやま",
                "katakana" => "オオオカヤマ",
                "katakana_half" => "ｵｵｵｶﾔﾏ",
                "romaji" => "oookayama",
                "memo" => "",
                "latitude" => "35.607511",
                "altitude" => "139.685633",
            ]);
            
            Station::create([
                "id" => 2744,
                "prefecture_id" => 13,
                "city_id" => 665,
                "street_id" => 39699,
                "name" => "奥沢",
                "hiragana" => "おくさわ",
                "katakana" => "オクサワ",
                "katakana_half" => "ｵｸｻﾜ",
                "romaji" => "okusawa",
                "memo" => "",
                "latitude" => "35.603844",
                "altitude" => "139.671968",
            ]);
            
            Station::create([
                "id" => 2745,
                "prefecture_id" => 13,
                "city_id" => 665,
                "street_id" => 39693,
                "name" => "池尻大橋",
                "hiragana" => "いけじりおおはし",
                "katakana" => "イケジリオオハシ",
                "katakana_half" => "ｲｹｼﾞﾘｵｵﾊｼ",
                "romaji" => "ikejirioohashi",
                "memo" => "",
                "latitude" => "35.650645",
                "altitude" => "139.684577",
            ]);
            
            Station::create([
                "id" => 2746,
                "prefecture_id" => 13,
                "city_id" => 665,
                "street_id" => 39722,
                "name" => "三軒茶屋",
                "hiragana" => "さんげんぢゃや",
                "katakana" => "サンゲンヂャヤ",
                "katakana_half" => "ｻﾝｹﾞﾝﾁﾞｬﾔ",
                "romaji" => "sangenjiゃya",
                "memo" => "",
                "latitude" => "35.643507",
                "altitude" => "139.671022",
            ]);
            
            Station::create([
                "id" => 2747,
                "prefecture_id" => 13,
                "city_id" => 665,
                "street_id" => 39716,
                "name" => "駒沢大学",
                "hiragana" => "こまざわだいがく",
                "katakana" => "コマザワダイガク",
                "katakana_half" => "ｺﾏｻﾞﾜﾀﾞｲｶﾞｸ",
                "romaji" => "komazawadaigaku",
                "memo" => "",
                "latitude" => "35.633508",
                "altitude" => "139.661801",
            ]);
            
            Station::create([
                "id" => 2748,
                "prefecture_id" => 13,
                "city_id" => 665,
                "street_id" => 39720,
                "name" => "桜新町",
                "hiragana" => "さくらしんまち",
                "katakana" => "サクラシンマチ",
                "katakana_half" => "ｻｸﾗｼﾝﾏﾁ",
                "romaji" => "sakurashinmachi",
                "memo" => "",
                "latitude" => "35.631674",
                "altitude" => "139.645219",
            ]);
            
            Station::create([
                "id" => 2749,
                "prefecture_id" => 13,
                "city_id" => 665,
                "street_id" => 39707,
                "name" => "用賀",
                "hiragana" => "ようが",
                "katakana" => "ヨウガ",
                "katakana_half" => "ﾖｳｶﾞ",
                "romaji" => "youga",
                "memo" => "",
                "latitude" => "35.626507",
                "altitude" => "139.634026",
            ]);
            
            Station::create([
                "id" => 2750,
                "prefecture_id" => 13,
                "city_id" => 654,
                "street_id" => 37207,
                "name" => "二子玉川",
                "hiragana" => "ふたこたまがわ",
                "katakana" => "フタコタマガワ",
                "katakana_half" => "ﾌﾀｺﾀﾏｶﾞﾜ",
                "romaji" => "futakotamagawa",
                "memo" => "",
                "latitude" => "35.612009",
                "altitude" => "139.627277",
            ]);
            
            Station::create([
                "id" => 2751,
                "prefecture_id" => 13,
                "city_id" => 685,
                "street_id" => 40653,
                "name" => "つくし野",
                "hiragana" => "つくしの",
                "katakana" => "ツクシノ",
                "katakana_half" => "ﾂｸｼﾉ",
                "romaji" => "tsukushino",
                "memo" => "",
                "latitude" => "35.527599",
                "altitude" => "139.485126",
            ]);
            
            Station::create([
                "id" => 2752,
                "prefecture_id" => 13,
                "city_id" => 654,
                "street_id" => null,
                "name" => "すずかけ台",
                "hiragana" => "すずかけだい",
                "katakana" => "スズカケダイ",
                "katakana_half" => "ｽｽﾞｶｹﾀﾞｲ",
                "romaji" => "suzukakedai",
                "memo" => "",
                "latitude" => "35.516933",
                "altitude" => "139.481488",
            ]);
            
            Station::create([
                "id" => 2753,
                "prefecture_id" => 13,
                "city_id" => 685,
                "street_id" => 40676,
                "name" => "南町田",
                "hiragana" => "みなみまちだ",
                "katakana" => "ミナミマチダ",
                "katakana_half" => "ﾐﾅﾐﾏﾁﾀﾞ",
                "romaji" => "minamimachida",
                "memo" => "",
                "latitude" => "35.511378",
                "altitude" => "139.470767",
            ]);
            
            Station::create([
                "id" => 2754,
                "prefecture_id" => 13,
                "city_id" => 654,
                "street_id" => 37038,
                "name" => "下神明",
                "hiragana" => "しもしんめい",
                "katakana" => "シモシンメイ",
                "katakana_half" => "ｼﾓｼﾝﾒｲ",
                "romaji" => "shimoshinmei",
                "memo" => "",
                "latitude" => "35.608817",
                "altitude" => "139.726324",
            ]);
            
            Station::create([
                "id" => 2755,
                "prefecture_id" => 13,
                "city_id" => 662,
                "street_id" => 39581,
                "name" => "戸越公園",
                "hiragana" => "とごしこうえん",
                "katakana" => "トゴシコウエン",
                "katakana_half" => "ﾄｺﾞｼｺｳｴﾝ",
                "romaji" => "togoshikouen",
                "memo" => "",
                "latitude" => "35.608789",
                "altitude" => "139.718075",
            ]);
            
            Station::create([
                "id" => 2756,
                "prefecture_id" => 13,
                "city_id" => 662,
                "street_id" => 39582,
                "name" => "中延",
                "hiragana" => "なかのぶ",
                "katakana" => "ナカノブ",
                "katakana_half" => "ﾅｶﾉﾌﾞ",
                "romaji" => "nakanobu",
                "memo" => "",
                "latitude" => "35.605706",
                "altitude" => "139.712714",
            ]);
            
            Station::create([
                "id" => 2757,
                "prefecture_id" => 13,
                "city_id" => 662,
                "street_id" => 39541,
                "name" => "荏原町",
                "hiragana" => "えばらまち",
                "katakana" => "エバラマチ",
                "katakana_half" => "ｴﾊﾞﾗﾏﾁ",
                "romaji" => "ebaramachi",
                "memo" => "",
                "latitude" => "35.603761",
                "altitude" => "139.707827",
            ]);
            
            Station::create([
                "id" => 2758,
                "prefecture_id" => 13,
                "city_id" => 662,
                "street_id" => 39587,
                "name" => "旗の台",
                "hiragana" => "はたのだい",
                "katakana" => "ハタノダイ",
                "katakana_half" => "ﾊﾀﾉﾀﾞｲ",
                "romaji" => "hatanodai",
                "memo" => "",
                "latitude" => "35.604817",
                "altitude" => "139.702521",
            ]);
            
            Station::create([
                "id" => 2759,
                "prefecture_id" => 13,
                "city_id" => 664,
                "street_id" => 39642,
                "name" => "北千束",
                "hiragana" => "きたせんぞく",
                "katakana" => "キタセンゾク",
                "katakana_half" => "ｷﾀｾﾝｿﾞｸ",
                "romaji" => "kitasenzoku",
                "memo" => "",
                "latitude" => "35.606316",
                "altitude" => "139.693216",
            ]);
            
            Station::create([
                "id" => 2760,
                "prefecture_id" => 13,
                "city_id" => 663,
                "street_id" => 39622,
                "name" => "緑が丘",
                "hiragana" => "みどりがおか",
                "katakana" => "ミドリガオカ",
                "katakana_half" => "ﾐﾄﾞﾘｶﾞｵｶ",
                "romaji" => "midorigaoka",
                "memo" => "東京都",
                "latitude" => "35.606455",
                "altitude" => "139.679162",
            ]);
            
            Station::create([
                "id" => 2761,
                "prefecture_id" => 13,
                "city_id" => 654,
                "street_id" => 37152,
                "name" => "九品仏",
                "hiragana" => "くほんぶつ",
                "katakana" => "クホンブツ",
                "katakana_half" => "ｸﾎﾝﾌﾞﾂ",
                "romaji" => "kuhonbutsu",
                "memo" => "",
                "latitude" => "35.605399",
                "altitude" => "139.661025",
            ]);
            
            Station::create([
                "id" => 2762,
                "prefecture_id" => 13,
                "city_id" => 665,
                "street_id" => 39700,
                "name" => "尾山台",
                "hiragana" => "おやまだい",
                "katakana" => "オヤマダイ",
                "katakana_half" => "ｵﾔﾏﾀﾞｲ",
                "romaji" => "oyamadai",
                "memo" => "",
                "latitude" => "35.606871",
                "altitude" => "139.654081",
            ]);
            
            Station::create([
                "id" => 2763,
                "prefecture_id" => 13,
                "city_id" => 665,
                "street_id" => 39738,
                "name" => "等々力",
                "hiragana" => "とどろき",
                "katakana" => "トドロキ",
                "katakana_half" => "ﾄﾄﾞﾛｷ",
                "romaji" => "todoroki",
                "memo" => "",
                "latitude" => "35.608454",
                "altitude" => "139.647498",
            ]);
            
            Station::create([
                "id" => 2764,
                "prefecture_id" => 13,
                "city_id" => 665,
                "street_id" => 39706,
                "name" => "上野毛",
                "hiragana" => "かみのげ",
                "katakana" => "カミノゲ",
                "katakana_half" => "ｶﾐﾉｹﾞ",
                "romaji" => "kaminoge",
                "memo" => "",
                "latitude" => "35.612009",
                "altitude" => "139.638859",
            ]);
            
            Station::create([
                "id" => 2765,
                "prefecture_id" => 13,
                "city_id" => 662,
                "street_id" => 39543,
                "name" => "大崎広小路",
                "hiragana" => "おおさきひろこうじ",
                "katakana" => "オオサキヒロコウジ",
                "katakana_half" => "ｵｵｻｷﾋﾛｺｳｼﾞ",
                "romaji" => "oosakihirokouji",
                "memo" => "",
                "latitude" => "35.622677",
                "altitude" => "139.722741",
            ]);
            
            Station::create([
                "id" => 2766,
                "prefecture_id" => 13,
                "city_id" => 662,
                "street_id" => 39581,
                "name" => "戸越銀座",
                "hiragana" => "とごしぎんざ",
                "katakana" => "トゴシギンザ",
                "katakana_half" => "ﾄｺﾞｼｷﾞﾝｻﾞ",
                "romaji" => "togoshiginza",
                "memo" => "",
                "latitude" => "35.615983",
                "altitude" => "139.714964",
            ]);
            
            Station::create([
                "id" => 2767,
                "prefecture_id" => 13,
                "city_id" => 662,
                "street_id" => 39541,
                "name" => "荏原中延",
                "hiragana" => "えばらなかのぶ",
                "katakana" => "エバラナカノブ",
                "katakana_half" => "ｴﾊﾞﾗﾅｶﾉﾌﾞ",
                "romaji" => "ebaranakanobu",
                "memo" => "",
                "latitude" => "35.609927",
                "altitude" => "139.711964",
            ]);
            
            Station::create([
                "id" => 2768,
                "prefecture_id" => 13,
                "city_id" => 657,
                "street_id" => 38688,
                "name" => "長原",
                "hiragana" => "ながはら",
                "katakana" => "ナガハラ",
                "katakana_half" => "ﾅｶﾞﾊﾗ",
                "romaji" => "nagahara",
                "memo" => "東京都",
                "latitude" => "35.602262",
                "altitude" => "139.697799",
            ]);
            
            Station::create([
                "id" => 2769,
                "prefecture_id" => 13,
                "city_id" => 663,
                "street_id" => 39610,
                "name" => "洗足池",
                "hiragana" => "せんぞくいけ",
                "katakana" => "センゾクイケ",
                "katakana_half" => "ｾﾝｿﾞｸｲｹ",
                "romaji" => "senzokuike",
                "memo" => "",
                "latitude" => "35.599928",
                "altitude" => "139.691411",
            ]);
            
            Station::create([
                "id" => 2770,
                "prefecture_id" => 13,
                "city_id" => 658,
                "street_id" => 39375,
                "name" => "石川台",
                "hiragana" => "いしかわだい",
                "katakana" => "イシカワダイ",
                "katakana_half" => "ｲｼｶﾜﾀﾞｲ",
                "romaji" => "ishikawadai",
                "memo" => "",
                "latitude" => "35.597040",
                "altitude" => "139.685551",
            ]);
            
            Station::create([
                "id" => 2771,
                "prefecture_id" => 13,
                "city_id" => 664,
                "street_id" => 39676,
                "name" => "雪が谷大塚",
                "hiragana" => "ゆきがやおおつか",
                "katakana" => "ユキガヤオオツカ",
                "katakana_half" => "ﾕｷｶﾞﾔｵｵﾂｶ",
                "romaji" => "yukigayaootsuka",
                "memo" => "",
                "latitude" => "35.591985",
                "altitude" => "139.680996",
            ]);
            
            Station::create([
                "id" => 2772,
                "prefecture_id" => 13,
                "city_id" => 712,
                "street_id" => null,
                "name" => "御嶽山",
                "hiragana" => "おんたけさん",
                "katakana" => "オンタケサン",
                "katakana_half" => "ｵﾝﾀｹｻﾝ",
                "romaji" => "ontakesan",
                "memo" => "",
                "latitude" => "35.585263",
                "altitude" => "139.682413",
            ]);
            
            Station::create([
                "id" => 2773,
                "prefecture_id" => 13,
                "city_id" => 664,
                "street_id" => 39645,
                "name" => "久が原",
                "hiragana" => "くがはら",
                "katakana" => "クガハラ",
                "katakana_half" => "ｸｶﾞﾊﾗ",
                "romaji" => "kugahara",
                "memo" => "",
                "latitude" => "35.579819",
                "altitude" => "139.685357",
            ]);
            
            Station::create([
                "id" => 2774,
                "prefecture_id" => 13,
                "city_id" => 664,
                "street_id" => 39653,
                "name" => "千鳥町",
                "hiragana" => "ちどりちょう",
                "katakana" => "チドリチョウ",
                "katakana_half" => "ﾁﾄﾞﾘﾁｮｳ",
                "romaji" => "chidorichou",
                "memo" => "",
                "latitude" => "35.572959",
                "altitude" => "139.691524",
            ]);
            
            Station::create([
                "id" => 2775,
                "prefecture_id" => 13,
                "city_id" => 664,
                "street_id" => 39629,
                "name" => "池上",
                "hiragana" => "いけがみ",
                "katakana" => "イケガミ",
                "katakana_half" => "ｲｹｶﾞﾐ",
                "romaji" => "ikegami",
                "memo" => "",
                "latitude" => "35.572043",
                "altitude" => "139.703272",
            ]);
            
            Station::create([
                "id" => 2776,
                "prefecture_id" => 13,
                "city_id" => 672,
                "street_id" => 40093,
                "name" => "蓮沼",
                "hiragana" => "はすぬま",
                "katakana" => "ハスヌマ",
                "katakana_half" => "ﾊｽﾇﾏ",
                "romaji" => "hasunuma",
                "memo" => "",
                "latitude" => "35.564349",
                "altitude" => "139.708467",
            ]);
            
            Station::create([
                "id" => 2777,
                "prefecture_id" => 13,
                "city_id" => 667,
                "street_id" => 39884,
                "name" => "沼部",
                "hiragana" => "ぬまべ",
                "katakana" => "ヌマベ",
                "katakana_half" => "ﾇﾏﾍﾞ",
                "romaji" => "numabe",
                "memo" => "",
                "latitude" => "35.582791",
                "altitude" => "139.673108",
            ]);
            
            Station::create([
                "id" => 2778,
                "prefecture_id" => 13,
                "city_id" => 664,
                "street_id" => 39631,
                "name" => "鵜の木",
                "hiragana" => "うのき",
                "katakana" => "ウノキ",
                "katakana_half" => "ｳﾉｷ",
                "romaji" => "unoki",
                "memo" => "",
                "latitude" => "35.575347",
                "altitude" => "139.680830",
            ]);
            
            Station::create([
                "id" => 2779,
                "prefecture_id" => 13,
                "city_id" => 664,
                "street_id" => 39648,
                "name" => "下丸子",
                "hiragana" => "しもまるこ",
                "katakana" => "シモマルコ",
                "katakana_half" => "ｼﾓﾏﾙｺ",
                "romaji" => "shimomaruko",
                "memo" => "",
                "latitude" => "35.571154",
                "altitude" => "139.685774",
            ]);
            
            Station::create([
                "id" => 2780,
                "prefecture_id" => 13,
                "city_id" => 679,
                "street_id" => null,
                "name" => "武蔵新田",
                "hiragana" => "むさしにった",
                "katakana" => "ムサシニッタ",
                "katakana_half" => "ﾑｻｼﾆｯﾀ",
                "romaji" => "musashinitta",
                "memo" => "",
                "latitude" => "35.567960",
                "altitude" => "139.692162",
            ]);
            
            Station::create([
                "id" => 2781,
                "prefecture_id" => 13,
                "city_id" => 664,
                "street_id" => 39675,
                "name" => "矢口渡",
                "hiragana" => "やぐちのわたし",
                "katakana" => "ヤグチノワタシ",
                "katakana_half" => "ﾔｸﾞﾁﾉﾜﾀｼ",
                "romaji" => "yaguchinowatashi",
                "memo" => "",
                "latitude" => "35.562599",
                "altitude" => "139.699940",
            ]);
            
            Station::create([
                "id" => 2782,
                "prefecture_id" => 13,
                "city_id" => 702,
                "street_id" => null,
                "name" => "西太子堂",
                "hiragana" => "にしたいしどう",
                "katakana" => "ニシタイシドウ",
                "katakana_half" => "ﾆｼﾀｲｼﾄﾞｳ",
                "romaji" => "nishitaishidou",
                "memo" => "",
                "latitude" => "35.644645",
                "altitude" => "139.666245",
            ]);
            
            Station::create([
                "id" => 2783,
                "prefecture_id" => 13,
                "city_id" => 665,
                "street_id" => 39752,
                "name" => "若林",
                "hiragana" => "わかばやし",
                "katakana" => "ワカバヤシ",
                "katakana_half" => "ﾜｶﾊﾞﾔｼ",
                "romaji" => "wakabayashi",
                "memo" => "東京都",
                "latitude" => "35.645978",
                "altitude" => "139.659912",
            ]);
            
            Station::create([
                "id" => 2784,
                "prefecture_id" => 13,
                "city_id" => 654,
                "street_id" => 37144,
                "name" => "松陰神社前",
                "hiragana" => "しょういんじんじゃまえ",
                "katakana" => "ショウインジンジャマエ",
                "katakana_half" => "ｼｮｳｲﾝｼﾞﾝｼﾞｬﾏｴ",
                "romaji" => "shouinjinjamae",
                "memo" => "",
                "latitude" => "35.643979",
                "altitude" => "139.655274",
            ]);
            
            Station::create([
                "id" => 2785,
                "prefecture_id" => 13,
                "city_id" => 665,
                "street_id" => null,
                "name" => "世田谷",
                "hiragana" => "せたがや",
                "katakana" => "セタガヤ",
                "katakana_half" => "ｾﾀｶﾞﾔ",
                "romaji" => "setagaya",
                "memo" => "",
                "latitude" => "35.643423",
                "altitude" => "139.650634",
            ]);
            
            Station::create([
                "id" => 2786,
                "prefecture_id" => 13,
                "city_id" => 672,
                "street_id" => 40063,
                "name" => "上町",
                "hiragana" => "かみまち",
                "katakana" => "カミマチ",
                "katakana_half" => "ｶﾐﾏﾁ",
                "romaji" => "kamimachi",
                "memo" => "",
                "latitude" => "35.643395",
                "altitude" => "139.646635",
            ]);
            
            Station::create([
                "id" => 2787,
                "prefecture_id" => 13,
                "city_id" => 655,
                "street_id" => 37625,
                "name" => "宮の坂",
                "hiragana" => "みやのさか",
                "katakana" => "ミヤノサカ",
                "katakana_half" => "ﾐﾔﾉｻｶ",
                "romaji" => "miyanosaka",
                "memo" => "",
                "latitude" => "35.647812",
                "altitude" => "139.644968",
            ]);
            
            Station::create([
                "id" => 2788,
                "prefecture_id" => 13,
                "city_id" => 689,
                "street_id" => null,
                "name" => "山下",
                "hiragana" => "やました",
                "katakana" => "ヤマシタ",
                "katakana_half" => "ﾔﾏｼﾀ",
                "romaji" => "yamashita",
                "memo" => "東京都",
                "latitude" => "35.653894",
                "altitude" => "139.646579",
            ]);
            
            Station::create([
                "id" => 2789,
                "prefecture_id" => 13,
                "city_id" => 665,
                "street_id" => 39747,
                "name" => "松原",
                "hiragana" => "まつばら",
                "katakana" => "マツバラ",
                "katakana_half" => "ﾏﾂﾊﾞﾗ",
                "romaji" => "matsubara",
                "memo" => "東京都",
                "latitude" => "35.660033",
                "altitude" => "139.642023",
            ]);
            
            Station::create([
                "id" => 2790,
                "prefecture_id" => 13,
                "city_id" => 654,
                "street_id" => 37124,
                "name" => "泉岳寺",
                "hiragana" => "せんがくじ",
                "katakana" => "センガクジ",
                "katakana_half" => "ｾﾝｶﾞｸｼﾞ",
                "romaji" => "sengakuji",
                "memo" => "",
                "latitude" => "35.638231",
                "altitude" => "139.739850",
            ]);
            
            Station::create([
                "id" => 2791,
                "prefecture_id" => 13,
                "city_id" => 662,
                "street_id" => 39577,
                "name" => "北品川",
                "hiragana" => "きたしながわ",
                "katakana" => "キタシナガワ",
                "katakana_half" => "ｷﾀｼﾅｶﾞﾜ",
                "romaji" => "kitashinagawa",
                "memo" => "",
                "latitude" => "35.622482",
                "altitude" => "139.739378",
            ]);
            
            Station::create([
                "id" => 2792,
                "prefecture_id" => 13,
                "city_id" => 657,
                "street_id" => 38723,
                "name" => "新馬場",
                "hiragana" => "しんばんば",
                "katakana" => "シンバンバ",
                "katakana_half" => "ｼﾝﾊﾞﾝﾊﾞ",
                "romaji" => "shinbanba",
                "memo" => "",
                "latitude" => "35.617594",
                "altitude" => "139.741379",
            ]);
            
            Station::create([
                "id" => 2793,
                "prefecture_id" => 13,
                "city_id" => 681,
                "street_id" => null,
                "name" => "青物横丁",
                "hiragana" => "あおものよこちょう",
                "katakana" => "アオモノヨコチョウ",
                "katakana_half" => "ｱｵﾓﾉﾖｺﾁｮｳ",
                "romaji" => "aomonoyokochou",
                "memo" => "",
                "latitude" => "35.609345",
                "altitude" => "139.742989",
            ]);
            
            Station::create([
                "id" => 2794,
                "prefecture_id" => 13,
                "city_id" => 654,
                "street_id" => null,
                "name" => "鮫洲",
                "hiragana" => "さめず",
                "katakana" => "サメズ",
                "katakana_half" => "ｻﾒｽﾞ",
                "romaji" => "samezu",
                "memo" => "",
                "latitude" => "35.605123",
                "altitude" => "139.742546",
            ]);
            
            Station::create([
                "id" => 2795,
                "prefecture_id" => 13,
                "city_id" => 674,
                "street_id" => null,
                "name" => "立会川",
                "hiragana" => "たちあいがわ",
                "katakana" => "タチアイガワ",
                "katakana_half" => "ﾀﾁｱｲｶﾞﾜ",
                "romaji" => "tachiaigawa",
                "memo" => "",
                "latitude" => "35.598374",
                "altitude" => "139.738796",
            ]);
            
            Station::create([
                "id" => 2796,
                "prefecture_id" => 13,
                "city_id" => 664,
                "street_id" => 39632,
                "name" => "大森海岸",
                "hiragana" => "おおもりかいがん",
                "katakana" => "オオモリカイガン",
                "katakana_half" => "ｵｵﾓﾘｶｲｶﾞﾝ",
                "romaji" => "oomorikaigan",
                "memo" => "",
                "latitude" => "35.587681",
                "altitude" => "139.735464",
            ]);
            
            Station::create([
                "id" => 2797,
                "prefecture_id" => 13,
                "city_id" => 664,
                "street_id" => 39679,
                "name" => "平和島",
                "hiragana" => "へいわじま",
                "katakana" => "ヘイワジマ",
                "katakana_half" => "ﾍｲﾜｼﾞﾏ",
                "romaji" => "heiwajima",
                "memo" => "",
                "latitude" => "35.578793",
                "altitude" => "139.734964",
            ]);
            
            Station::create([
                "id" => 2798,
                "prefecture_id" => 13,
                "city_id" => 664,
                "street_id" => 39632,
                "name" => "大森町",
                "hiragana" => "おおもりまち",
                "katakana" => "オオモリマチ",
                "katakana_half" => "ｵｵﾓﾘﾏﾁ",
                "romaji" => "oomorimachi",
                "memo" => "",
                "latitude" => "35.572571",
                "altitude" => "139.732103",
            ]);
            
            Station::create([
                "id" => 2799,
                "prefecture_id" => 13,
                "city_id" => 681,
                "street_id" => null,
                "name" => "梅屋敷",
                "hiragana" => "うめやしき",
                "katakana" => "ウメヤシキ",
                "katakana_half" => "ｳﾒﾔｼｷ",
                "romaji" => "umeyashiki",
                "memo" => "東京都",
                "latitude" => "35.566793",
                "altitude" => "139.728188",
            ]);
            
            Station::create([
                "id" => 2800,
                "prefecture_id" => 13,
                "city_id" => 658,
                "street_id" => null,
                "name" => "京急蒲田",
                "hiragana" => "けいきゅうかまた",
                "katakana" => "ケイキュウカマタ",
                "katakana_half" => "ｹｲｷｭｳｶﾏﾀ",
                "romaji" => "keikyuukamata",
                "memo" => "",
                "latitude" => "35.560794",
                "altitude" => "139.723771",
            ]);
            
            Station::create([
                "id" => 2801,
                "prefecture_id" => 13,
                "city_id" => 669,
                "street_id" => 39941,
                "name" => "雑色",
                "hiragana" => "ぞうしき",
                "katakana" => "ゾウシキ",
                "katakana_half" => "ｿﾞｳｼｷ",
                "romaji" => "zoushiki",
                "memo" => "",
                "latitude" => "35.549684",
                "altitude" => "139.714967",
            ]);
            
            Station::create([
                "id" => 2802,
                "prefecture_id" => 13,
                "city_id" => 664,
                "street_id" => 39661,
                "name" => "六郷土手",
                "hiragana" => "ろくごうどて",
                "katakana" => "ロクゴウドテ",
                "katakana_half" => "ﾛｸｺﾞｳﾄﾞﾃ",
                "romaji" => "rokugoudote",
                "memo" => "",
                "latitude" => "35.540684",
                "altitude" => "139.707801",
            ]);
            
            Station::create([
                "id" => 2803,
                "prefecture_id" => 13,
                "city_id" => 664,
                "street_id" => 39641,
                "name" => "糀谷",
                "hiragana" => "こうじや",
                "katakana" => "コウジヤ",
                "katakana_half" => "ｺｳｼﾞﾔ",
                "romaji" => "koujiya",
                "memo" => "",
                "latitude" => "35.554490",
                "altitude" => "139.729633",
            ]);
            
            Station::create([
                "id" => 2804,
                "prefecture_id" => 13,
                "city_id" => 664,
                "street_id" => null,
                "name" => "大鳥居",
                "hiragana" => "おおとりい",
                "katakana" => "オオトリイ",
                "katakana_half" => "ｵｵﾄﾘｲ",
                "romaji" => "ootorii",
                "memo" => "",
                "latitude" => "35.552407",
                "altitude" => "139.739993",
            ]);
            
            Station::create([
                "id" => 2805,
                "prefecture_id" => 13,
                "city_id" => 656,
                "street_id" => 37910,
                "name" => "穴守稲荷",
                "hiragana" => "あなもりいなり",
                "katakana" => "アナモリイナリ",
                "katakana_half" => "ｱﾅﾓﾘｲﾅﾘ",
                "romaji" => "anamoriinari",
                "memo" => "",
                "latitude" => "35.550406",
                "altitude" => "139.746464",
            ]);
            
            Station::create([
                "id" => 2806,
                "prefecture_id" => 13,
                "city_id" => 657,
                "street_id" => 38728,
                "name" => "天空橋",
                "hiragana" => "てんくうばし",
                "katakana" => "テンクウバシ",
                "katakana_half" => "ﾃﾝｸｳﾊﾞｼ",
                "romaji" => "tenkuubashi",
                "memo" => "",
                "latitude" => "35.548184",
                "altitude" => "139.754186",
            ]);
            
            Station::create([
                "id" => 2807,
                "prefecture_id" => 13,
                "city_id" => 664,
                "street_id" => 39670,
                "name" => "羽田空港国際線ターミナル",
                "hiragana" => "はねだくうこうこくさいせんたーみなる",
                "katakana" => "ハネダクウコウコクサイセンターミナル",
                "katakana_half" => "ﾊﾈﾀﾞｸｳｺｳｺｸｻｲｾﾝﾀｰﾐﾅﾙ",
                "romaji" => "hanedakuukoukokusaisentaｰminaru",
                "memo" => "京急",
                "latitude" => "35.544908",
                "altitude" => "139.767908",
            ]);
            
            Station::create([
                "id" => 2808,
                "prefecture_id" => 13,
                "city_id" => 664,
                "street_id" => 39670,
                "name" => "羽田空港国内線ターミナル",
                "hiragana" => "はねだくうこうこくないせんたーみなる",
                "katakana" => "ハネダクウコウコクナイセンターミナル",
                "katakana_half" => "ﾊﾈﾀﾞｸｳｺｳｺｸﾅｲｾﾝﾀｰﾐﾅﾙ",
                "romaji" => "hanedakuukoukokunaisentaｰminaru",
                "memo" => "京急",
                "latitude" => "35.549908",
                "altitude" => "139.786239",
            ]);
            
            Station::create([
                "id" => 2809,
                "prefecture_id" => 13,
                "city_id" => 654,
                "street_id" => null,
                "name" => "田原町",
                "hiragana" => "たわらまち",
                "katakana" => "タワラマチ",
                "katakana_half" => "ﾀﾜﾗﾏﾁ",
                "romaji" => "tawaramachi",
                "memo" => "東京都",
                "latitude" => "35.709918",
                "altitude" => "139.790398",
            ]);
            
            Station::create([
                "id" => 2810,
                "prefecture_id" => 13,
                "city_id" => 672,
                "street_id" => 40060,
                "name" => "稲荷町",
                "hiragana" => "いなりちょう",
                "katakana" => "イナリチョウ",
                "katakana_half" => "ｲﾅﾘﾁｮｳ",
                "romaji" => "inarichou",
                "memo" => "東京都",
                "latitude" => "35.711362",
                "altitude" => "139.782176",
            ]);
            
            Station::create([
                "id" => 2811,
                "prefecture_id" => 13,
                "city_id" => 659,
                "street_id" => 39399,
                "name" => "上野広小路",
                "hiragana" => "うえのひろこうじ",
                "katakana" => "ウエノヒロコウジ",
                "katakana_half" => "ｳｴﾉﾋﾛｺｳｼﾞ",
                "romaji" => "uenohirokouji",
                "memo" => "",
                "latitude" => "35.707640",
                "altitude" => "139.773039",
            ]);
            
            Station::create([
                "id" => 2812,
                "prefecture_id" => 13,
                "city_id" => 681,
                "street_id" => 40513,
                "name" => "末広町",
                "hiragana" => "すえひろちょう",
                "katakana" => "スエヒロチョウ",
                "katakana_half" => "ｽｴﾋﾛﾁｮｳ",
                "romaji" => "suehirochou",
                "memo" => "東京都",
                "latitude" => "35.702724",
                "altitude" => "139.771789",
            ]);
            
            Station::create([
                "id" => 2813,
                "prefecture_id" => 13,
                "city_id" => 680,
                "street_id" => null,
                "name" => "三越前",
                "hiragana" => "みつこしまえ",
                "katakana" => "ミツコシマエ",
                "katakana_half" => "ﾐﾂｺｼﾏｴ",
                "romaji" => "mitsukoshimae",
                "memo" => "",
                "latitude" => "35.685449",
                "altitude" => "139.773456",
            ]);
            
            Station::create([
                "id" => 2814,
                "prefecture_id" => 13,
                "city_id" => 655,
                "street_id" => 37535,
                "name" => "日本橋",
                "hiragana" => "にほんばし",
                "katakana" => "ニホンバシ",
                "katakana_half" => "ﾆﾎﾝﾊﾞｼ",
                "romaji" => "nihonbashi",
                "memo" => "東京都",
                "latitude" => "35.681838",
                "altitude" => "139.774568",
            ]);
            
            Station::create([
                "id" => 2815,
                "prefecture_id" => 13,
                "city_id" => 655,
                "street_id" => 37527,
                "name" => "京橋",
                "hiragana" => "きょうばし",
                "katakana" => "キョウバシ",
                "katakana_half" => "ｷｮｳﾊﾞｼ",
                "romaji" => "kyoubashi",
                "memo" => "東京都",
                "latitude" => "35.676810",
                "altitude" => "139.770124",
            ]);
            
            Station::create([
                "id" => 2816,
                "prefecture_id" => 13,
                "city_id" => 655,
                "street_id" => 37528,
                "name" => "銀座",
                "hiragana" => "ぎんざ",
                "katakana" => "ギンザ",
                "katakana_half" => "ｷﾞﾝｻﾞ",
                "romaji" => "ginza",
                "memo" => "",
                "latitude" => "35.672117",
                "altitude" => "139.764569",
            ]);
            
            Station::create([
                "id" => 2817,
                "prefecture_id" => 13,
                "city_id" => 656,
                "street_id" => 38107,
                "name" => "虎ノ門",
                "hiragana" => "とらのもん",
                "katakana" => "トラノモン",
                "katakana_half" => "ﾄﾗﾉﾓﾝ",
                "romaji" => "toranomon",
                "memo" => "",
                "latitude" => "35.670172",
                "altitude" => "139.750098",
            ]);
            
            Station::create([
                "id" => 2818,
                "prefecture_id" => 13,
                "city_id" => 654,
                "street_id" => null,
                "name" => "溜池山王",
                "hiragana" => "ためいけさんのう",
                "katakana" => "タメイケサンノウ",
                "katakana_half" => "ﾀﾒｲｹｻﾝﾉｳ",
                "romaji" => "tameikesannou",
                "memo" => "",
                "latitude" => "35.671839",
                "altitude" => "139.741238",
            ]);
            
            Station::create([
                "id" => 2819,
                "prefecture_id" => 13,
                "city_id" => 656,
                "street_id" => 37751,
                "name" => "赤坂見附",
                "hiragana" => "あかさかみつけ",
                "katakana" => "アカサカミツケ",
                "katakana_half" => "ｱｶｻｶﾐﾂｹ",
                "romaji" => "akasakamitsuke",
                "memo" => "",
                "latitude" => "35.676893",
                "altitude" => "139.737321",
            ]);
            
            Station::create([
                "id" => 2820,
                "prefecture_id" => 13,
                "city_id" => 656,
                "street_id" => 37997,
                "name" => "青山一丁目",
                "hiragana" => "あおやまいっちょうめ",
                "katakana" => "アオヤマイッチョウメ",
                "katakana_half" => "ｱｵﾔﾏｲｯﾁｮｳﾒ",
                "romaji" => "aoyamaicchoume",
                "memo" => "",
                "latitude" => "35.672810",
                "altitude" => "139.724017",
            ]);
            
            Station::create([
                "id" => 2821,
                "prefecture_id" => 13,
                "city_id" => 654,
                "street_id" => 37154,
                "name" => "外苑前",
                "hiragana" => "がいえんまえ",
                "katakana" => "ガイエンマエ",
                "katakana_half" => "ｶﾞｲｴﾝﾏｴ",
                "romaji" => "gaienmae",
                "memo" => "",
                "latitude" => "35.670311",
                "altitude" => "139.717656",
            ]);
            
            Station::create([
                "id" => 2822,
                "prefecture_id" => 13,
                "city_id" => 654,
                "street_id" => null,
                "name" => "表参道",
                "hiragana" => "おもてさんどう",
                "katakana" => "オモテサンドウ",
                "katakana_half" => "ｵﾓﾃｻﾝﾄﾞｳ",
                "romaji" => "omotesandou",
                "memo" => "",
                "latitude" => "35.665450",
                "altitude" => "139.712074",
            ]);
            
            Station::create([
                "id" => 2823,
                "prefecture_id" => 13,
                "city_id" => 658,
                "street_id" => 39372,
                "name" => "新大塚",
                "hiragana" => "しんおおつか",
                "katakana" => "シンオオツカ",
                "katakana_half" => "ｼﾝｵｵﾂｶ",
                "romaji" => "shinootsuka",
                "memo" => "",
                "latitude" => "35.726110",
                "altitude" => "139.729402",
            ]);
            
            Station::create([
                "id" => 2824,
                "prefecture_id" => 13,
                "city_id" => 654,
                "street_id" => null,
                "name" => "茗荷谷",
                "hiragana" => "みょうがだに",
                "katakana" => "ミョウガダニ",
                "katakana_half" => "ﾐｮｳｶﾞﾀﾞﾆ",
                "romaji" => "myougadani",
                "memo" => "",
                "latitude" => "35.716805",
                "altitude" => "139.737235",
            ]);
            
            Station::create([
                "id" => 2825,
                "prefecture_id" => 13,
                "city_id" => 658,
                "street_id" => 39376,
                "name" => "後楽園",
                "hiragana" => "こうらくえん",
                "katakana" => "コウラクエン",
                "katakana_half" => "ｺｳﾗｸｴﾝ",
                "romaji" => "kourakuen",
                "memo" => "",
                "latitude" => "35.707390",
                "altitude" => "139.751791",
            ]);
            
            Station::create([
                "id" => 2826,
                "prefecture_id" => 13,
                "city_id" => 658,
                "street_id" => 39387,
                "name" => "本郷三丁目",
                "hiragana" => "ほんごうさんちょうめ",
                "katakana" => "ホンゴウサンチョウメ",
                "katakana_half" => "ﾎﾝｺﾞｳｻﾝﾁｮｳﾒ",
                "romaji" => "hongousanchoume",
                "memo" => "",
                "latitude" => "35.707113",
                "altitude" => "139.759984",
            ]);
            
            Station::create([
                "id" => 2827,
                "prefecture_id" => 13,
                "city_id" => 654,
                "street_id" => 37123,
                "name" => "淡路町",
                "hiragana" => "あわじちょう",
                "katakana" => "アワジチョウ",
                "katakana_half" => "ｱﾜｼﾞﾁｮｳ",
                "romaji" => "awajichou",
                "memo" => "",
                "latitude" => "35.694892",
                "altitude" => "139.767623",
            ]);
            
            Station::create([
                "id" => 2828,
                "prefecture_id" => 13,
                "city_id" => 654,
                "street_id" => 37044,
                "name" => "大手町",
                "hiragana" => "おおてまち",
                "katakana" => "オオテマチ",
                "katakana_half" => "ｵｵﾃﾏﾁ",
                "romaji" => "ootemachi",
                "memo" => "東京都",
                "latitude" => "35.685726",
                "altitude" => "139.764291",
            ]);
            
            Station::create([
                "id" => 2829,
                "prefecture_id" => 13,
                "city_id" => 657,
                "street_id" => 38702,
                "name" => "霞ケ関",
                "hiragana" => "かすみがせき",
                "katakana" => "カスミガセキ",
                "katakana_half" => "ｶｽﾐｶﾞｾｷ",
                "romaji" => "kasumigaseki",
                "memo" => "東京都",
                "latitude" => "35.673505",
                "altitude" => "139.751792",
            ]);
            
            Station::create([
                "id" => 2830,
                "prefecture_id" => 13,
                "city_id" => 690,
                "street_id" => null,
                "name" => "国会議事堂前",
                "hiragana" => "こっかいぎじどうまえ",
                "katakana" => "コッカイギジドウマエ",
                "katakana_half" => "ｺｯｶｲｷﾞｼﾞﾄﾞｳﾏｴ",
                "romaji" => "kokkaigijidoumae",
                "memo" => "",
                "latitude" => "35.674338",
                "altitude" => "139.744848",
            ]);
            
            Station::create([
                "id" => 2831,
                "prefecture_id" => 13,
                "city_id" => 657,
                "street_id" => 39363,
                "name" => "四谷三丁目",
                "hiragana" => "よつやさんちょうめ",
                "katakana" => "ヨツヤサンチョウメ",
                "katakana_half" => "ﾖﾂﾔｻﾝﾁｮｳﾒ",
                "romaji" => "yotsuyasanchoume",
                "memo" => "",
                "latitude" => "35.687809",
                "altitude" => "139.719683",
            ]);
            
            Station::create([
                "id" => 2832,
                "prefecture_id" => 13,
                "city_id" => 657,
                "street_id" => null,
                "name" => "新宿御苑前",
                "hiragana" => "しんじゅくぎょえんまえ",
                "katakana" => "シンジュクギョエンマエ",
                "katakana_half" => "ｼﾝｼﾞｭｸｷﾞｮｴﾝﾏｴ",
                "romaji" => "shinjukugyoenmae",
                "memo" => "",
                "latitude" => "35.688475",
                "altitude" => "139.710989",
            ]);
            
            Station::create([
                "id" => 2833,
                "prefecture_id" => 13,
                "city_id" => 657,
                "street_id" => 39120,
                "name" => "新宿三丁目",
                "hiragana" => "しんじゅくさんちょうめ",
                "katakana" => "シンジュクサンチョウメ",
                "katakana_half" => "ｼﾝｼﾞｭｸｻﾝﾁｮｳﾒ",
                "romaji" => "shinjukusanchoume",
                "memo" => "",
                "latitude" => "35.690447",
                "altitude" => "139.705129",
            ]);
            
            Station::create([
                "id" => 2834,
                "prefecture_id" => 13,
                "city_id" => 657,
                "street_id" => 38741,
                "name" => "西新宿",
                "hiragana" => "にししんじゅく",
                "katakana" => "ニシシンジュク",
                "katakana_half" => "ﾆｼｼﾝｼﾞｭｸ",
                "romaji" => "nishishinjuku",
                "memo" => "",
                "latitude" => "35.694446",
                "altitude" => "139.692573",
            ]);
            
            Station::create([
                "id" => 2835,
                "prefecture_id" => 13,
                "city_id" => 667,
                "street_id" => null,
                "name" => "中野坂上",
                "hiragana" => "なかのさかうえ",
                "katakana" => "ナカノサカウエ",
                "katakana_half" => "ﾅｶﾉｻｶｳｴ",
                "romaji" => "nakanosakaue",
                "memo" => "",
                "latitude" => "35.697113",
                "altitude" => "139.682630",
            ]);
            
            Station::create([
                "id" => 2836,
                "prefecture_id" => 13,
                "city_id" => 667,
                "street_id" => null,
                "name" => "新中野",
                "hiragana" => "しんなかの",
                "katakana" => "シンナカノ",
                "katakana_half" => "ｼﾝﾅｶﾉ",
                "romaji" => "shinnakano",
                "memo" => "",
                "latitude" => "35.697445",
                "altitude" => "139.669492",
            ]);
            
            Station::create([
                "id" => 2837,
                "prefecture_id" => 13,
                "city_id" => 659,
                "street_id" => null,
                "name" => "東高円寺",
                "hiragana" => "ひがしこうえんじ",
                "katakana" => "ヒガシコウエンジ",
                "katakana_half" => "ﾋｶﾞｼｺｳｴﾝｼﾞ",
                "romaji" => "higashikouenji",
                "memo" => "",
                "latitude" => "35.697917",
                "altitude" => "139.658298",
            ]);
            
            Station::create([
                "id" => 2838,
                "prefecture_id" => 13,
                "city_id" => 668,
                "street_id" => 39909,
                "name" => "新高円寺",
                "hiragana" => "しんこうえんじ",
                "katakana" => "シンコウエンジ",
                "katakana_half" => "ｼﾝｺｳｴﾝｼﾞ",
                "romaji" => "shinkouenji",
                "memo" => "",
                "latitude" => "35.697750",
                "altitude" => "139.648299",
            ]);
            
            Station::create([
                "id" => 2839,
                "prefecture_id" => 13,
                "city_id" => 654,
                "street_id" => 37152,
                "name" => "南阿佐ケ谷",
                "hiragana" => "みなみあさがや",
                "katakana" => "ミナミアサガヤ",
                "katakana_half" => "ﾐﾅﾐｱｻｶﾞﾔ",
                "romaji" => "minamiasagaya",
                "memo" => "",
                "latitude" => "35.699444",
                "altitude" => "139.635606",
            ]);
            
            Station::create([
                "id" => 2840,
                "prefecture_id" => 13,
                "city_id" => 667,
                "street_id" => null,
                "name" => "中野新橋",
                "hiragana" => "なかのしんばし",
                "katakana" => "ナカノシンバシ",
                "katakana_half" => "ﾅｶﾉｼﾝﾊﾞｼ",
                "romaji" => "nakanoshinbashi",
                "memo" => "",
                "latitude" => "35.692252",
                "altitude" => "139.674020",
            ]);
            
            Station::create([
                "id" => 2841,
                "prefecture_id" => 13,
                "city_id" => 667,
                "street_id" => null,
                "name" => "中野富士見町",
                "hiragana" => "なかのふじみちょう",
                "katakana" => "ナカノフジミチョウ",
                "katakana_half" => "ﾅｶﾉﾌｼﾞﾐﾁｮｳ",
                "romaji" => "nakanofujimichou",
                "memo" => "",
                "latitude" => "35.690585",
                "altitude" => "139.667215",
            ]);
            
            Station::create([
                "id" => 2842,
                "prefecture_id" => 13,
                "city_id" => 668,
                "street_id" => 39923,
                "name" => "方南町",
                "hiragana" => "ほうなんちょう",
                "katakana" => "ホウナンチョウ",
                "katakana_half" => "ﾎｳﾅﾝﾁｮｳ",
                "romaji" => "hounanchou",
                "memo" => "",
                "latitude" => "35.683446",
                "altitude" => "139.657494",
            ]);
            
            Station::create([
                "id" => 2843,
                "prefecture_id" => 13,
                "city_id" => 659,
                "street_id" => 39422,
                "name" => "三ノ輪",
                "hiragana" => "みのわ",
                "katakana" => "ミノワ",
                "katakana_half" => "ﾐﾉﾜ",
                "romaji" => "minowa",
                "memo" => "",
                "latitude" => "35.729360",
                "altitude" => "139.791231",
            ]);
            
            Station::create([
                "id" => 2844,
                "prefecture_id" => 13,
                "city_id" => 659,
                "street_id" => 39398,
                "name" => "入谷",
                "hiragana" => "いりや",
                "katakana" => "イリヤ",
                "katakana_half" => "ｲﾘﾔ",
                "romaji" => "iriya",
                "memo" => "東京都",
                "latitude" => "35.720306",
                "altitude" => "139.784204",
            ]);
            
            Station::create([
                "id" => 2845,
                "prefecture_id" => 13,
                "city_id" => 657,
                "street_id" => 38689,
                "name" => "仲御徒町",
                "hiragana" => "なかおかちまち",
                "katakana" => "ナカオカチマチ",
                "katakana_half" => "ﾅｶｵｶﾁﾏﾁ",
                "romaji" => "nakaokachimachi",
                "memo" => "",
                "latitude" => "35.706640",
                "altitude" => "139.776121",
            ]);
            
            Station::create([
                "id" => 2846,
                "prefecture_id" => 13,
                "city_id" => 655,
                "street_id" => 37610,
                "name" => "小伝馬町",
                "hiragana" => "こでんまちょう",
                "katakana" => "コデンマチョウ",
                "katakana_half" => "ｺﾃﾞﾝﾏﾁｮｳ",
                "romaji" => "kodenmachou",
                "memo" => "",
                "latitude" => "35.690309",
                "altitude" => "139.778789",
            ]);
            
            Station::create([
                "id" => 2847,
                "prefecture_id" => 13,
                "city_id" => 655,
                "street_id" => 37614,
                "name" => "人形町",
                "hiragana" => "にんぎょうちょう",
                "katakana" => "ニンギョウチョウ",
                "katakana_half" => "ﾆﾝｷﾞｮｳﾁｮｳ",
                "romaji" => "ningyouchou",
                "memo" => "",
                "latitude" => "35.686365",
                "altitude" => "139.782233",
            ]);
            
            Station::create([
                "id" => 2848,
                "prefecture_id" => 13,
                "city_id" => 655,
                "street_id" => 37608,
                "name" => "茅場町",
                "hiragana" => "かやばちょう",
                "katakana" => "カヤバチョウ",
                "katakana_half" => "ｶﾔﾊﾞﾁｮｳ",
                "romaji" => "kayabachou",
                "memo" => "",
                "latitude" => "35.679921",
                "altitude" => "139.780066",
            ]);
            
            Station::create([
                "id" => 2849,
                "prefecture_id" => 13,
                "city_id" => 655,
                "street_id" => 37532,
                "name" => "築地",
                "hiragana" => "つきじ",
                "katakana" => "ツキジ",
                "katakana_half" => "ﾂｷｼﾞ",
                "romaji" => "tsukiji",
                "memo" => "",
                "latitude" => "35.667894",
                "altitude" => "139.772373",
            ]);
            
            Station::create([
                "id" => 2850,
                "prefecture_id" => 13,
                "city_id" => 659,
                "street_id" => null,
                "name" => "東銀座",
                "hiragana" => "ひがしぎんざ",
                "katakana" => "ヒガシギンザ",
                "katakana_half" => "ﾋｶﾞｼｷﾞﾝｻﾞ",
                "romaji" => "higashiginza",
                "memo" => "",
                "latitude" => "35.669617",
                "altitude" => "139.767069",
            ]);
            
            Station::create([
                "id" => 2851,
                "prefecture_id" => 13,
                "city_id" => 654,
                "street_id" => 37212,
                "name" => "日比谷",
                "hiragana" => "ひびや",
                "katakana" => "ヒビヤ",
                "katakana_half" => "ﾋﾋﾞﾔ",
                "romaji" => "hibiya",
                "memo" => "",
                "latitude" => "35.675172",
                "altitude" => "139.759847",
            ]);
            
            Station::create([
                "id" => 2852,
                "prefecture_id" => 13,
                "city_id" => 656,
                "street_id" => 38108,
                "name" => "神谷町",
                "hiragana" => "かみやちょう",
                "katakana" => "カミヤチョウ",
                "katakana_half" => "ｶﾐﾔﾁｮｳ",
                "romaji" => "kamiyachou",
                "memo" => "",
                "latitude" => "35.662616",
                "altitude" => "139.745015",
            ]);
            
            Station::create([
                "id" => 2853,
                "prefecture_id" => 13,
                "city_id" => 656,
                "street_id" => 38529,
                "name" => "六本木",
                "hiragana" => "ろっぽんぎ",
                "katakana" => "ロッポンギ",
                "katakana_half" => "ﾛｯﾎﾟﾝｷﾞ",
                "romaji" => "roppongi",
                "memo" => "",
                "latitude" => "35.663367",
                "altitude" => "139.731794",
            ]);
            
            Station::create([
                "id" => 2854,
                "prefecture_id" => 13,
                "city_id" => 666,
                "street_id" => 39868,
                "name" => "広尾",
                "hiragana" => "ひろお",
                "katakana" => "ヒロオ",
                "katakana_half" => "ﾋﾛｵ",
                "romaji" => "hiroo",
                "memo" => "",
                "latitude" => "35.651257",
                "altitude" => "139.722268",
            ]);
            
            Station::create([
                "id" => 2855,
                "prefecture_id" => 13,
                "city_id" => 657,
                "street_id" => 38705,
                "name" => "落合",
                "hiragana" => "おちあい",
                "katakana" => "オチアイ",
                "katakana_half" => "ｵﾁｱｲ",
                "romaji" => "ochiai",
                "memo" => "東京都",
                "latitude" => "35.710722",
                "altitude" => "139.686073",
            ]);
            
            Station::create([
                "id" => 2856,
                "prefecture_id" => 13,
                "city_id" => 657,
                "street_id" => 39342,
                "name" => "早稲田",
                "hiragana" => "わせだ",
                "katakana" => "ワセダ",
                "katakana_half" => "ﾜｾﾀﾞ",
                "romaji" => "waseda",
                "memo" => "東京メトロ",
                "latitude" => "35.705667",
                "altitude" => "139.722237",
            ]);
            
            Station::create([
                "id" => 2857,
                "prefecture_id" => 13,
                "city_id" => 657,
                "street_id" => 38701,
                "name" => "神楽坂",
                "hiragana" => "かぐらざか",
                "katakana" => "カグラザカ",
                "katakana_half" => "ｶｸﾞﾗｻﾞｶ",
                "romaji" => "kagurazaka",
                "memo" => "",
                "latitude" => "35.703807",
                "altitude" => "139.734681",
            ]);
            
            Station::create([
                "id" => 2858,
                "prefecture_id" => 13,
                "city_id" => 654,
                "street_id" => 37152,
                "name" => "九段下",
                "hiragana" => "くだんした",
                "katakana" => "クダンシタ",
                "katakana_half" => "ｸﾀﾞﾝｼﾀ",
                "romaji" => "kudanshita",
                "memo" => "",
                "latitude" => "35.695474",
                "altitude" => "139.751485",
            ]);
            
            Station::create([
                "id" => 2859,
                "prefecture_id" => 13,
                "city_id" => 656,
                "street_id" => 37957,
                "name" => "竹橋",
                "hiragana" => "たけばし",
                "katakana" => "タケバシ",
                "katakana_half" => "ﾀｹﾊﾞｼ",
                "romaji" => "takebashi",
                "memo" => "",
                "latitude" => "35.690448",
                "altitude" => "139.757457",
            ]);
            
            Station::create([
                "id" => 2860,
                "prefecture_id" => 13,
                "city_id" => 661,
                "street_id" => 39537,
                "name" => "門前仲町",
                "hiragana" => "もんぜんなかちょう",
                "katakana" => "モンゼンナカチョウ",
                "katakana_half" => "ﾓﾝｾﾞﾝﾅｶﾁｮｳ",
                "romaji" => "monzennakachou",
                "memo" => "",
                "latitude" => "35.672395",
                "altitude" => "139.795122",
            ]);
            
            Station::create([
                "id" => 2861,
                "prefecture_id" => 13,
                "city_id" => 661,
                "street_id" => 39467,
                "name" => "木場",
                "hiragana" => "きば",
                "katakana" => "キバ",
                "katakana_half" => "ｷﾊﾞ",
                "romaji" => "kiba",
                "memo" => "東京都",
                "latitude" => "35.669367",
                "altitude" => "139.806760",
            ]);
            
            Station::create([
                "id" => 2862,
                "prefecture_id" => 13,
                "city_id" => 661,
                "street_id" => 39484,
                "name" => "東陽町",
                "hiragana" => "とうようちょう",
                "katakana" => "トウヨウチョウ",
                "katakana_half" => "ﾄｳﾖｳﾁｮｳ",
                "romaji" => "touyouchou",
                "memo" => "",
                "latitude" => "35.669618",
                "altitude" => "139.817731",
            ]);
            
            Station::create([
                "id" => 2863,
                "prefecture_id" => 13,
                "city_id" => 661,
                "street_id" => 39533,
                "name" => "南砂町",
                "hiragana" => "みなみすなまち",
                "katakana" => "ミナミスナマチ",
                "katakana_half" => "ﾐﾅﾐｽﾅﾏﾁ",
                "romaji" => "minamisunamachi",
                "memo" => "",
                "latitude" => "35.668785",
                "altitude" => "139.830675",
            ]);
            
            Station::create([
                "id" => 2864,
                "prefecture_id" => 13,
                "city_id" => 676,
                "street_id" => 40305,
                "name" => "西葛西",
                "hiragana" => "にしかさい",
                "katakana" => "ニシカサイ",
                "katakana_half" => "ﾆｼｶｻｲ",
                "romaji" => "nishikasai",
                "memo" => "",
                "latitude" => "35.664424",
                "altitude" => "139.859756",
            ]);
            
            Station::create([
                "id" => 2865,
                "prefecture_id" => 13,
                "city_id" => 676,
                "street_id" => 40292,
                "name" => "葛西",
                "hiragana" => "かさい",
                "katakana" => "カサイ",
                "katakana_half" => "ｶｻｲ",
                "romaji" => "kasai",
                "memo" => "",
                "latitude" => "35.663591",
                "altitude" => "139.872143",
            ]);
            
            Station::create([
                "id" => 2866,
                "prefecture_id" => 13,
                "city_id" => 658,
                "street_id" => 39381,
                "name" => "千駄木",
                "hiragana" => "せんだぎ",
                "katakana" => "センダギ",
                "katakana_half" => "ｾﾝﾀﾞｷﾞ",
                "romaji" => "sendagi",
                "memo" => "",
                "latitude" => "35.725666",
                "altitude" => "139.763260",
            ]);
            
            Station::create([
                "id" => 2867,
                "prefecture_id" => 13,
                "city_id" => 658,
                "street_id" => 39383,
                "name" => "根津",
                "hiragana" => "ねづ",
                "katakana" => "ネヅ",
                "katakana_half" => "ﾈﾂﾞ",
                "romaji" => "nezu",
                "memo" => "",
                "latitude" => "35.717417",
                "altitude" => "139.765650",
            ]);
            
            Station::create([
                "id" => 2868,
                "prefecture_id" => 13,
                "city_id" => 658,
                "street_id" => 39391,
                "name" => "湯島",
                "hiragana" => "ゆしま",
                "katakana" => "ユシマ",
                "katakana_half" => "ﾕｼﾏ",
                "romaji" => "yushima",
                "memo" => "",
                "latitude" => "35.706862",
                "altitude" => "139.769900",
            ]);
            
            Station::create([
                "id" => 2869,
                "prefecture_id" => 13,
                "city_id" => 712,
                "street_id" => null,
                "name" => "新御茶ノ水",
                "hiragana" => "しんおちゃのみず",
                "katakana" => "シンオチャノミズ",
                "katakana_half" => "ｼﾝｵﾁｬﾉﾐｽﾞ",
                "romaji" => "shinochanomizu",
                "memo" => "",
                "latitude" => "35.696892",
                "altitude" => "139.765401",
            ]);
            
            Station::create([
                "id" => 2870,
                "prefecture_id" => 13,
                "city_id" => 654,
                "street_id" => 37207,
                "name" => "二重橋前",
                "hiragana" => "にじゅうばしまえ",
                "katakana" => "ニジュウバシマエ",
                "katakana_half" => "ﾆｼﾞｭｳﾊﾞｼﾏｴ",
                "romaji" => "nijuubashimae",
                "memo" => "",
                "latitude" => "35.680421",
                "altitude" => "139.761624",
            ]);
            
            Station::create([
                "id" => 2871,
                "prefecture_id" => 13,
                "city_id" => 656,
                "street_id" => 37751,
                "name" => "赤坂",
                "hiragana" => "あかさか",
                "katakana" => "アカサカ",
                "katakana_half" => "ｱｶｻｶ",
                "romaji" => "akasaka",
                "memo" => "東京都",
                "latitude" => "35.672060",
                "altitude" => "139.736404",
            ]);
            
            Station::create([
                "id" => 2872,
                "prefecture_id" => 13,
                "city_id" => 654,
                "street_id" => null,
                "name" => "乃木坂",
                "hiragana" => "のぎざか",
                "katakana" => "ノギザカ",
                "katakana_half" => "ﾉｷﾞｻﾞｶ",
                "romaji" => "nogizaka",
                "memo" => "",
                "latitude" => "35.666394",
                "altitude" => "139.726239",
            ]);
            
            Station::create([
                "id" => 2873,
                "prefecture_id" => 13,
                "city_id" => 654,
                "street_id" => 37045,
                "name" => "明治神宮前",
                "hiragana" => "めいじじんぐうまえ",
                "katakana" => "メイジジングウマエ",
                "katakana_half" => "ﾒｲｼﾞｼﾞﾝｸﾞｳﾏｴ",
                "romaji" => "meijijinguumae",
                "memo" => "",
                "latitude" => "35.668505",
                "altitude" => "139.705130",
            ]);
            
            Station::create([
                "id" => 2874,
                "prefecture_id" => 13,
                "city_id" => 666,
                "street_id" => 39871,
                "name" => "代々木公園",
                "hiragana" => "よよぎこうえん",
                "katakana" => "ヨヨギコウエン",
                "katakana_half" => "ﾖﾖｷﾞｺｳｴﾝ",
                "romaji" => "yoyogikouen",
                "memo" => "",
                "latitude" => "35.669060",
                "altitude" => "139.689853",
            ]);
            
            Station::create([
                "id" => 2875,
                "prefecture_id" => 13,
                "city_id" => 670,
                "street_id" => null,
                "name" => "北綾瀬",
                "hiragana" => "きたあやせ",
                "katakana" => "キタアヤセ",
                "katakana_half" => "ｷﾀｱﾔｾ",
                "romaji" => "kitaayase",
                "memo" => "",
                "latitude" => "35.776968",
                "altitude" => "139.832086",
            ]);
            
            Station::create([
                "id" => 2876,
                "prefecture_id" => 13,
                "city_id" => 654,
                "street_id" => 37045,
                "name" => "地下鉄成増",
                "hiragana" => "ちかてつなります",
                "katakana" => "チカテツナリマス",
                "katakana_half" => "ﾁｶﾃﾂﾅﾘﾏｽ",
                "romaji" => "chikatetsunarimasu",
                "memo" => "",
                "latitude" => "35.776548",
                "altitude" => "139.631547",
            ]);
            
            Station::create([
                "id" => 2877,
                "prefecture_id" => 13,
                "city_id" => 654,
                "street_id" => 37045,
                "name" => "地下鉄赤塚",
                "hiragana" => "ちかてつあかつか",
                "katakana" => "チカテツアカツカ",
                "katakana_half" => "ﾁｶﾃﾂｱｶﾂｶ",
                "romaji" => "chikatetsuakatsuka",
                "memo" => "",
                "latitude" => "35.769770",
                "altitude" => "139.644101",
            ]);
            
            Station::create([
                "id" => 2878,
                "prefecture_id" => 13,
                "city_id" => 673,
                "street_id" => 40154,
                "name" => "平和台",
                "hiragana" => "へいわだい",
                "katakana" => "ヘイワダイ",
                "katakana_half" => "ﾍｲﾜﾀﾞｲ",
                "romaji" => "heiwadai",
                "memo" => "東京都",
                "latitude" => "35.757688",
                "altitude" => "139.654379",
            ]);
            
            Station::create([
                "id" => 2879,
                "prefecture_id" => 13,
                "city_id" => 673,
                "street_id" => 40151,
                "name" => "氷川台",
                "hiragana" => "ひかわだい",
                "katakana" => "ヒカワダイ",
                "katakana_half" => "ﾋｶﾜﾀﾞｲ",
                "romaji" => "hikawadai",
                "memo" => "",
                "latitude" => "35.749634",
                "altitude" => "139.665462",
            ]);
            
            Station::create([
                "id" => 2880,
                "prefecture_id" => 13,
                "city_id" => 669,
                "street_id" => 39940,
                "name" => "千川",
                "hiragana" => "せんかわ",
                "katakana" => "センカワ",
                "katakana_half" => "ｾﾝｶﾜ",
                "romaji" => "senkawa",
                "memo" => "",
                "latitude" => "35.738191",
                "altitude" => "139.689321",
            ]);
            
            Station::create([
                "id" => 2881,
                "prefecture_id" => 13,
                "city_id" => 669,
                "street_id" => 39935,
                "name" => "要町",
                "hiragana" => "かなめちょう",
                "katakana" => "カナメチョウ",
                "katakana_half" => "ｶﾅﾒﾁｮｳ",
                "romaji" => "kanamechou",
                "memo" => "",
                "latitude" => "35.733137",
                "altitude" => "139.698265",
            ]);
            
            Station::create([
                "id" => 2882,
                "prefecture_id" => 13,
                "city_id" => 669,
                "street_id" => 39948,
                "name" => "東池袋",
                "hiragana" => "ひがしいけぶくろ",
                "katakana" => "ヒガシイケブクロ",
                "katakana_half" => "ﾋｶﾞｼｲｹﾌﾞｸﾛ",
                "romaji" => "higashiikebukuro",
                "memo" => "",
                "latitude" => "35.725860",
                "altitude" => "139.718986",
            ]);
            
            Station::create([
                "id" => 2883,
                "prefecture_id" => 13,
                "city_id" => 654,
                "street_id" => null,
                "name" => "護国寺",
                "hiragana" => "ごこくじ",
                "katakana" => "ゴコクジ",
                "katakana_half" => "ｺﾞｺｸｼﾞ",
                "romaji" => "gokokuji",
                "memo" => "",
                "latitude" => "35.719166",
                "altitude" => "139.727319",
            ]);
            
            Station::create([
                "id" => 2884,
                "prefecture_id" => 13,
                "city_id" => 676,
                "street_id" => null,
                "name" => "江戸川橋",
                "hiragana" => "えどがわばし",
                "katakana" => "エドガワバシ",
                "katakana_half" => "ｴﾄﾞｶﾞﾜﾊﾞｼ",
                "romaji" => "edogawabashi",
                "memo" => "",
                "latitude" => "35.709251",
                "altitude" => "139.734041",
            ]);
            
            Station::create([
                "id" => 2885,
                "prefecture_id" => 13,
                "city_id" => 654,
                "street_id" => 37155,
                "name" => "麹町",
                "hiragana" => "こうじまち",
                "katakana" => "コウジマチ",
                "katakana_half" => "ｺｳｼﾞﾏﾁ",
                "romaji" => "koujimachi",
                "memo" => "",
                "latitude" => "35.684781",
                "altitude" => "139.737459",
            ]);
            
            Station::create([
                "id" => 2886,
                "prefecture_id" => 13,
                "city_id" => 654,
                "street_id" => 37160,
                "name" => "永田町",
                "hiragana" => "ながたちょう",
                "katakana" => "ナガタチョウ",
                "katakana_half" => "ﾅｶﾞﾀﾁｮｳ",
                "romaji" => "nagatachou",
                "memo" => "",
                "latitude" => "35.678421",
                "altitude" => "139.739071",
            ]);
            
            Station::create([
                "id" => 2887,
                "prefecture_id" => 13,
                "city_id" => 659,
                "street_id" => 39401,
                "name" => "桜田門",
                "hiragana" => "さくらだもん",
                "katakana" => "サクラダモン",
                "katakana_half" => "ｻｸﾗﾀﾞﾓﾝ",
                "romaji" => "sakuradamon",
                "memo" => "",
                "latitude" => "35.677421",
                "altitude" => "139.752097",
            ]);
            
            Station::create([
                "id" => 2888,
                "prefecture_id" => 13,
                "city_id" => 655,
                "street_id" => 37528,
                "name" => "銀座一丁目",
                "hiragana" => "ぎんざいっちょうめ",
                "katakana" => "ギンザイッチョウメ",
                "katakana_half" => "ｷﾞﾝｻﾞｲｯﾁｮｳﾒ",
                "romaji" => "ginzaicchoume",
                "memo" => "",
                "latitude" => "35.674560",
                "altitude" => "139.766679",
            ]);
            
            Station::create([
                "id" => 2889,
                "prefecture_id" => 13,
                "city_id" => 654,
                "street_id" => 37138,
                "name" => "新富町",
                "hiragana" => "しんとみちょう",
                "katakana" => "シントミチョウ",
                "katakana_half" => "ｼﾝﾄﾐﾁｮｳ",
                "romaji" => "shintomichou",
                "memo" => "東京都",
                "latitude" => "35.670672",
                "altitude" => "139.773568",
            ]);
            
            Station::create([
                "id" => 2890,
                "prefecture_id" => 13,
                "city_id" => 655,
                "street_id" => 37531,
                "name" => "月島",
                "hiragana" => "つきしま",
                "katakana" => "ツキシマ",
                "katakana_half" => "ﾂｷｼﾏ",
                "romaji" => "tsukishima",
                "memo" => "",
                "latitude" => "35.664479",
                "altitude" => "139.784568",
            ]);
            
            Station::create([
                "id" => 2891,
                "prefecture_id" => 13,
                "city_id" => 661,
                "street_id" => 39487,
                "name" => "豊洲",
                "hiragana" => "とよす",
                "katakana" => "トヨス",
                "katakana_half" => "ﾄﾖｽ",
                "romaji" => "toyosu",
                "memo" => "",
                "latitude" => "35.655479",
                "altitude" => "139.795595",
            ]);
            
            Station::create([
                "id" => 2892,
                "prefecture_id" => 13,
                "city_id" => 661,
                "street_id" => 39482,
                "name" => "辰巳",
                "hiragana" => "たつみ",
                "katakana" => "タツミ",
                "katakana_half" => "ﾀﾂﾐ",
                "romaji" => "tatsumi",
                "memo" => "",
                "latitude" => "35.645593",
                "altitude" => "139.810539",
            ]);
            
            Station::create([
                "id" => 2893,
                "prefecture_id" => 13,
                "city_id" => 654,
                "street_id" => null,
                "name" => "半蔵門",
                "hiragana" => "はんぞうもん",
                "katakana" => "ハンゾウモン",
                "katakana_half" => "ﾊﾝｿﾞｳﾓﾝ",
                "romaji" => "hanzoumon",
                "memo" => "",
                "latitude" => "35.685365",
                "altitude" => "139.741736",
            ]);
            
            Station::create([
                "id" => 2894,
                "prefecture_id" => 13,
                "city_id" => 654,
                "street_id" => 37133,
                "name" => "神保町",
                "hiragana" => "じんぼうちょう",
                "katakana" => "ジンボウチョウ",
                "katakana_half" => "ｼﾞﾝﾎﾞｳﾁｮｳ",
                "romaji" => "jinbouchou",
                "memo" => "",
                "latitude" => "35.695725",
                "altitude" => "139.757902",
            ]);
            
            Station::create([
                "id" => 2895,
                "prefecture_id" => 13,
                "city_id" => 657,
                "street_id" => 38719,
                "name" => "水天宮前",
                "hiragana" => "すいてんぐうまえ",
                "katakana" => "スイテングウマエ",
                "katakana_half" => "ｽｲﾃﾝｸﾞｳﾏｴ",
                "romaji" => "suitenguumae",
                "memo" => "",
                "latitude" => "35.683754",
                "altitude" => "139.784567",
            ]);
            
            Station::create([
                "id" => 2896,
                "prefecture_id" => 13,
                "city_id" => 661,
                "street_id" => 39468,
                "name" => "清澄白河",
                "hiragana" => "きよすみしらかわ",
                "katakana" => "キヨスミシラカワ",
                "katakana_half" => "ｷﾖｽﾐｼﾗｶﾜ",
                "romaji" => "kiyosumishirakawa",
                "memo" => "",
                "latitude" => "35.682116",
                "altitude" => "139.798732",
            ]);
            
            Station::create([
                "id" => 2897,
                "prefecture_id" => 13,
                "city_id" => 657,
                "street_id" => 38721,
                "name" => "住吉",
                "hiragana" => "すみよし",
                "katakana" => "スミヨシ",
                "katakana_half" => "ｽﾐﾖｼ",
                "romaji" => "sumiyoshi",
                "memo" => "東京都",
                "latitude" => "35.688782",
                "altitude" => "139.815591",
            ]);
            
            Station::create([
                "id" => 2898,
                "prefecture_id" => 13,
                "city_id" => 656,
                "street_id" => 38103,
                "name" => "白金台",
                "hiragana" => "しろかねだい",
                "katakana" => "シロカネダイ",
                "katakana_half" => "ｼﾛｶﾈﾀﾞｲ",
                "romaji" => "shirokanedai",
                "memo" => "",
                "latitude" => "35.637953",
                "altitude" => "139.726240",
            ]);
            
            Station::create([
                "id" => 2899,
                "prefecture_id" => 13,
                "city_id" => 656,
                "street_id" => 38102,
                "name" => "白金高輪",
                "hiragana" => "しろかねたかなわ",
                "katakana" => "シロカネタカナワ",
                "katakana_half" => "ｼﾛｶﾈﾀｶﾅﾜ",
                "romaji" => "shirokanetakanawa",
                "memo" => "",
                "latitude" => "35.642675",
                "altitude" => "139.734017",
            ]);
            
            Station::create([
                "id" => 2900,
                "prefecture_id" => 13,
                "city_id" => 656,
                "street_id" => 37907,
                "name" => "麻布十番",
                "hiragana" => "あざぶじゅうばん",
                "katakana" => "アザブジュウバン",
                "katakana_half" => "ｱｻﾞﾌﾞｼﾞｭｳﾊﾞﾝ",
                "romaji" => "azabujuuban",
                "memo" => "",
                "latitude" => "35.656007",
                "altitude" => "139.737072",
            ]);
            
            Station::create([
                "id" => 2901,
                "prefecture_id" => 13,
                "city_id" => 656,
                "street_id" => 38529,
                "name" => "六本木一丁目",
                "hiragana" => "ろっぽんぎいっちょうめ",
                "katakana" => "ロッポンギイッチョウメ",
                "katakana_half" => "ﾛｯﾎﾟﾝｷﾞｲｯﾁｮｳﾒ",
                "romaji" => "roppongiicchoume",
                "memo" => "",
                "latitude" => "35.665173",
                "altitude" => "139.739016",
            ]);
            
            Station::create([
                "id" => 2902,
                "prefecture_id" => 13,
                "city_id" => 694,
                "street_id" => null,
                "name" => "東大前",
                "hiragana" => "とうだいまえ",
                "katakana" => "トウダイマエ",
                "katakana_half" => "ﾄｳﾀﾞｲﾏｴ",
                "romaji" => "toudaimae",
                "memo" => "",
                "latitude" => "35.717000",
                "altitude" => "139.758289",
            ]);
            
            Station::create([
                "id" => 2903,
                "prefecture_id" => 13,
                "city_id" => 658,
                "street_id" => 39386,
                "name" => "本駒込",
                "hiragana" => "ほんこまごめ",
                "katakana" => "ホンコマゴメ",
                "katakana_half" => "ﾎﾝｺﾏｺﾞﾒ",
                "romaji" => "honkomagome",
                "memo" => "",
                "latitude" => "35.724527",
                "altitude" => "139.753761",
            ]);
            
            Station::create([
                "id" => 2904,
                "prefecture_id" => 13,
                "city_id" => 670,
                "street_id" => 40041,
                "name" => "西ケ原",
                "hiragana" => "にしがはら",
                "katakana" => "ニシガハラ",
                "katakana_half" => "ﾆｼｶﾞﾊﾗ",
                "romaji" => "nishigahara",
                "memo" => "",
                "latitude" => "35.745663",
                "altitude" => "139.742428",
            ]);
            
            Station::create([
                "id" => 2905,
                "prefecture_id" => 13,
                "city_id" => 677,
                "street_id" => null,
                "name" => "王子神谷",
                "hiragana" => "おうじかみや",
                "katakana" => "オウジカミヤ",
                "katakana_half" => "ｵｳｼﾞｶﾐﾔ",
                "romaji" => "oujikamiya",
                "memo" => "",
                "latitude" => "35.765328",
                "altitude" => "139.735566",
            ]);
            
            Station::create([
                "id" => 2906,
                "prefecture_id" => 13,
                "city_id" => 670,
                "street_id" => 40030,
                "name" => "志茂",
                "hiragana" => "しも",
                "katakana" => "シモ",
                "katakana_half" => "ｼﾓ",
                "romaji" => "shimo",
                "memo" => "",
                "latitude" => "35.777826",
                "altitude" => "139.732788",
            ]);
            
            Station::create([
                "id" => 2907,
                "prefecture_id" => 13,
                "city_id" => 670,
                "street_id" => 40015,
                "name" => "赤羽岩淵",
                "hiragana" => "あかばねいわぶち",
                "katakana" => "アカバネイワブチ",
                "katakana_half" => "ｱｶﾊﾞﾈｲﾜﾌﾞﾁ",
                "romaji" => "akabaneiwabuchi",
                "memo" => "",
                "latitude" => "35.783436",
                "altitude" => "139.721122",
            ]);
            
            Station::create([
                "id" => 2908,
                "prefecture_id" => 13,
                "city_id" => 669,
                "street_id" => 39941,
                "name" => "雑司が谷",
                "hiragana" => "ぞうしがや",
                "katakana" => "ゾウシガヤ",
                "katakana_half" => "ｿﾞｳｼｶﾞﾔ",
                "romaji" => "zoushigaya",
                "memo" => "",
                "latitude" => "35.720444",
                "altitude" => "139.714849",
            ]);
            
            Station::create([
                "id" => 2909,
                "prefecture_id" => 13,
                "city_id" => 657,
                "street_id" => 39342,
                "name" => "西早稲田",
                "hiragana" => "にしわせだ",
                "katakana" => "ニシワセダ",
                "katakana_half" => "ﾆｼﾜｾﾀﾞ",
                "romaji" => "nishiwaseda",
                "memo" => "",
                "latitude" => "35.707390",
                "altitude" => "139.709016",
            ]);
            
            Station::create([
                "id" => 2910,
                "prefecture_id" => 13,
                "city_id" => 656,
                "street_id" => 38294,
                "name" => "東新宿",
                "hiragana" => "ひがししんじゅく",
                "katakana" => "ヒガシシンジュク",
                "katakana_half" => "ﾋｶﾞｼｼﾝｼﾞｭｸ",
                "romaji" => "higashishinjuku",
                "memo" => "",
                "latitude" => "35.698780",
                "altitude" => "139.707628",
            ]);
            
            Station::create([
                "id" => 2911,
                "prefecture_id" => 13,
                "city_id" => 670,
                "street_id" => null,
                "name" => "北参道",
                "hiragana" => "きたさんどう",
                "katakana" => "キタサンドウ",
                "katakana_half" => "ｷﾀｻﾝﾄﾞｳ",
                "romaji" => "kitasandou",
                "memo" => "",
                "latitude" => "35.678504",
                "altitude" => "139.705407",
            ]);
            
            Station::create([
                "id" => 2912,
                "prefecture_id" => 13,
                "city_id" => 664,
                "street_id" => 39664,
                "name" => "西馬込",
                "hiragana" => "にしまごめ",
                "katakana" => "ニシマゴメ",
                "katakana_half" => "ﾆｼﾏｺﾞﾒ",
                "romaji" => "nishimagome",
                "memo" => "",
                "latitude" => "35.587264",
                "altitude" => "139.706327",
            ]);
            
            Station::create([
                "id" => 2913,
                "prefecture_id" => 13,
                "city_id" => 664,
                "street_id" => 39643,
                "name" => "馬込",
                "hiragana" => "まごめ",
                "katakana" => "マゴメ",
                "katakana_half" => "ﾏｺﾞﾒ",
                "romaji" => "magome",
                "memo" => "",
                "latitude" => "35.596485",
                "altitude" => "139.711771",
            ]);
            
            Station::create([
                "id" => 2914,
                "prefecture_id" => 13,
                "city_id" => 662,
                "street_id" => 39581,
                "name" => "戸越",
                "hiragana" => "とごし",
                "katakana" => "トゴシ",
                "katakana_half" => "ﾄｺﾞｼ",
                "romaji" => "togoshi",
                "memo" => "",
                "latitude" => "35.614316",
                "altitude" => "139.716186",
            ]);
            
            Station::create([
                "id" => 2915,
                "prefecture_id" => 13,
                "city_id" => 656,
                "street_id" => 38106,
                "name" => "高輪台",
                "hiragana" => "たかなわだい",
                "katakana" => "タカナワダイ",
                "katakana_half" => "ﾀｶﾅﾜﾀﾞｲ",
                "romaji" => "takanawadai",
                "memo" => "",
                "latitude" => "35.631342",
                "altitude" => "139.730073",
            ]);
            
            Station::create([
                "id" => 2916,
                "prefecture_id" => 13,
                "city_id" => 656,
                "street_id" => 38493,
                "name" => "三田",
                "hiragana" => "みた",
                "katakana" => "ミタ",
                "katakana_half" => "ﾐﾀ",
                "romaji" => "mita",
                "memo" => "東京都",
                "latitude" => "35.647675",
                "altitude" => "139.748460",
            ]);
            
            Station::create([
                "id" => 2917,
                "prefecture_id" => 13,
                "city_id" => 656,
                "street_id" => 38101,
                "name" => "大門",
                "hiragana" => "だいもん",
                "katakana" => "ダイモン",
                "katakana_half" => "ﾀﾞｲﾓﾝ",
                "romaji" => "daimon",
                "memo" => "東京都",
                "latitude" => "35.656645",
                "altitude" => "139.754626",
            ]);
            
            Station::create([
                "id" => 2918,
                "prefecture_id" => 13,
                "city_id" => 675,
                "street_id" => 40263,
                "name" => "宝町",
                "hiragana" => "たからちょう",
                "katakana" => "タカラチョウ",
                "katakana_half" => "ﾀｶﾗﾁｮｳ",
                "romaji" => "takarachou",
                "memo" => "東京都",
                "latitude" => "35.675644",
                "altitude" => "139.772068",
            ]);
            
            Station::create([
                "id" => 2919,
                "prefecture_id" => 13,
                "city_id" => 655,
                "street_id" => 37746,
                "name" => "東日本橋",
                "hiragana" => "ひがしにほんばし",
                "katakana" => "ヒガシニホンバシ",
                "katakana_half" => "ﾋｶﾞｼﾆﾎﾝﾊﾞｼ",
                "romaji" => "higashinihonbashi",
                "memo" => "",
                "latitude" => "35.692170",
                "altitude" => "139.784844",
            ]);
            
            Station::create([
                "id" => 2920,
                "prefecture_id" => 13,
                "city_id" => 659,
                "street_id" => 39405,
                "name" => "蔵前",
                "hiragana" => "くらまえ",
                "katakana" => "クラマエ",
                "katakana_half" => "ｸﾗﾏｴ",
                "romaji" => "kuramae",
                "memo" => "",
                "latitude" => "35.704475",
                "altitude" => "139.792065",
            ]);
            
            Station::create([
                "id" => 2921,
                "prefecture_id" => 13,
                "city_id" => 660,
                "street_id" => 39447,
                "name" => "本所吾妻橋",
                "hiragana" => "ほんじょあづまばし",
                "katakana" => "ホンジョアヅマバシ",
                "katakana_half" => "ﾎﾝｼﾞｮｱﾂﾞﾏﾊﾞｼ",
                "romaji" => "honjoazumabashi",
                "memo" => "",
                "latitude" => "35.708502",
                "altitude" => "139.804313",
            ]);
            
            Station::create([
                "id" => 2922,
                "prefecture_id" => 13,
                "city_id" => 656,
                "street_id" => 38100,
                "name" => "芝公園",
                "hiragana" => "しばこうえん",
                "katakana" => "シバコウエン",
                "katakana_half" => "ｼﾊﾞｺｳｴﾝ",
                "romaji" => "shibakouen",
                "memo" => "",
                "latitude" => "35.653451",
                "altitude" => "139.749737",
            ]);
            
            Station::create([
                "id" => 2923,
                "prefecture_id" => 13,
                "city_id" => 712,
                "street_id" => null,
                "name" => "御成門",
                "hiragana" => "おなりもん",
                "katakana" => "オナリモン",
                "katakana_half" => "ｵﾅﾘﾓﾝ",
                "romaji" => "onarimon",
                "memo" => "",
                "latitude" => "35.661007",
                "altitude" => "139.751403",
            ]);
            
            Station::create([
                "id" => 2924,
                "prefecture_id" => 13,
                "city_id" => 654,
                "street_id" => 37043,
                "name" => "内幸町",
                "hiragana" => "うちさいわいちょう",
                "katakana" => "ウチサイワイチョウ",
                "katakana_half" => "ｳﾁｻｲﾜｲﾁｮｳ",
                "romaji" => "uchisaiwaichou",
                "memo" => "",
                "latitude" => "35.670172",
                "altitude" => "139.755681",
            ]);
            
            Station::create([
                "id" => 2925,
                "prefecture_id" => 13,
                "city_id" => 658,
                "street_id" => 39374,
                "name" => "春日",
                "hiragana" => "かすが",
                "katakana" => "カスガ",
                "katakana_half" => "ｶｽｶﾞ",
                "romaji" => "kasuga",
                "memo" => "東京都",
                "latitude" => "35.708779",
                "altitude" => "139.753179",
            ]);
            
            Station::create([
                "id" => 2926,
                "prefecture_id" => 13,
                "city_id" => 658,
                "street_id" => 39384,
                "name" => "白山",
                "hiragana" => "はくさん",
                "katakana" => "ハクサン",
                "katakana_half" => "ﾊｸｻﾝ",
                "romaji" => "hakusan",
                "memo" => "東京都",
                "latitude" => "35.721360",
                "altitude" => "139.752095",
            ]);
            
            Station::create([
                "id" => 2927,
                "prefecture_id" => 13,
                "city_id" => 658,
                "street_id" => 39380,
                "name" => "千石",
                "hiragana" => "せんごく",
                "katakana" => "センゴク",
                "katakana_half" => "ｾﾝｺﾞｸ",
                "romaji" => "sengoku",
                "memo" => "",
                "latitude" => "35.727999",
                "altitude" => "139.744707",
            ]);
            
            Station::create([
                "id" => 2928,
                "prefecture_id" => 13,
                "city_id" => 669,
                "street_id" => 39947,
                "name" => "西巣鴨",
                "hiragana" => "にしすがも",
                "katakana" => "ニシスガモ",
                "katakana_half" => "ﾆｼｽｶﾞﾓ",
                "romaji" => "nishisugamo",
                "memo" => "",
                "latitude" => "35.743414",
                "altitude" => "139.728818",
            ]);
            
            Station::create([
                "id" => 2929,
                "prefecture_id" => 13,
                "city_id" => 672,
                "street_id" => null,
                "name" => "新板橋",
                "hiragana" => "しんいたばし",
                "katakana" => "シンイタバシ",
                "katakana_half" => "ｼﾝｲﾀﾊﾞｼ",
                "romaji" => "shinitabashi",
                "memo" => "",
                "latitude" => "35.748801",
                "altitude" => "139.719486",
            ]);
            
            Station::create([
                "id" => 2930,
                "prefecture_id" => 13,
                "city_id" => 672,
                "street_id" => null,
                "name" => "板橋区役所前",
                "hiragana" => "いたばしくやくしょまえ",
                "katakana" => "イタバシクヤクショマエ",
                "katakana_half" => "ｲﾀﾊﾞｼｸﾔｸｼｮﾏｴ",
                "romaji" => "itabashikuyakushomae",
                "memo" => "",
                "latitude" => "35.751246",
                "altitude" => "139.710264",
            ]);
            
            Station::create([
                "id" => 2931,
                "prefecture_id" => 13,
                "city_id" => 672,
                "street_id" => null,
                "name" => "板橋本町",
                "hiragana" => "いたばしほんちょう",
                "katakana" => "イタバシホンチョウ",
                "katakana_half" => "ｲﾀﾊﾞｼﾎﾝﾁｮｳ",
                "romaji" => "itabashihonchou",
                "memo" => "",
                "latitude" => "35.761050",
                "altitude" => "139.705653",
            ]);
            
            Station::create([
                "id" => 2932,
                "prefecture_id" => 13,
                "city_id" => 654,
                "street_id" => 37041,
                "name" => "本蓮沼",
                "hiragana" => "もとはすぬま",
                "katakana" => "モトハスヌマ",
                "katakana_half" => "ﾓﾄﾊｽﾇﾏ",
                "romaji" => "motohasunuma",
                "memo" => "",
                "latitude" => "35.768799",
                "altitude" => "139.702209",
            ]);
            
            Station::create([
                "id" => 2933,
                "prefecture_id" => 13,
                "city_id" => 672,
                "street_id" => 40078,
                "name" => "志村坂上",
                "hiragana" => "しむらさかうえ",
                "katakana" => "シムラサカウエ",
                "katakana_half" => "ｼﾑﾗｻｶｳｴ",
                "romaji" => "shimurasakaue",
                "memo" => "",
                "latitude" => "35.776298",
                "altitude" => "139.694875",
            ]);
            
            Station::create([
                "id" => 2934,
                "prefecture_id" => 13,
                "city_id" => 672,
                "street_id" => 40078,
                "name" => "志村三丁目",
                "hiragana" => "しむらさんちょうめ",
                "katakana" => "シムラサンチョウメ",
                "katakana_half" => "ｼﾑﾗｻﾝﾁｮｳﾒ",
                "romaji" => "shimurasanchoume",
                "memo" => "",
                "latitude" => "35.777521",
                "altitude" => "139.686264",
            ]);
            
            Station::create([
                "id" => 2935,
                "prefecture_id" => 13,
                "city_id" => 672,
                "street_id" => 40094,
                "name" => "蓮根",
                "hiragana" => "はすね",
                "katakana" => "ハスネ",
                "katakana_half" => "ﾊｽﾈ",
                "romaji" => "hasune",
                "memo" => "",
                "latitude" => "35.784048",
                "altitude" => "139.679015",
            ]);
            
            Station::create([
                "id" => 2936,
                "prefecture_id" => 13,
                "city_id" => 672,
                "street_id" => 40091,
                "name" => "西台",
                "hiragana" => "にしだい",
                "katakana" => "ニシダイ",
                "katakana_half" => "ﾆｼﾀﾞｲ",
                "romaji" => "nishidai",
                "memo" => "",
                "latitude" => "35.786908",
                "altitude" => "139.673543",
            ]);
            
            Station::create([
                "id" => 2937,
                "prefecture_id" => 13,
                "city_id" => 672,
                "street_id" => 40081,
                "name" => "高島平",
                "hiragana" => "たかしまだいら",
                "katakana" => "タカシマダイラ",
                "katakana_half" => "ﾀｶｼﾏﾀﾞｲﾗ",
                "romaji" => "takashimadaira",
                "memo" => "",
                "latitude" => "35.788824",
                "altitude" => "139.661321",
            ]);
            
            Station::create([
                "id" => 2938,
                "prefecture_id" => 13,
                "city_id" => 672,
                "street_id" => 40081,
                "name" => "新高島平",
                "hiragana" => "しんたかしまだいら",
                "katakana" => "シンタカシマダイラ",
                "katakana_half" => "ｼﾝﾀｶｼﾏﾀﾞｲﾗ",
                "romaji" => "shintakashimadaira",
                "memo" => "",
                "latitude" => "35.790046",
                "altitude" => "139.654516",
            ]);
            
            Station::create([
                "id" => 2939,
                "prefecture_id" => 13,
                "city_id" => 702,
                "street_id" => null,
                "name" => "西高島平",
                "hiragana" => "にしたかしまだいら",
                "katakana" => "ニシタカシマダイラ",
                "katakana_half" => "ﾆｼﾀｶｼﾏﾀﾞｲﾗ",
                "romaji" => "nishitakashimadaira",
                "memo" => "",
                "latitude" => "35.791990",
                "altitude" => "139.645906",
            ]);
            
            Station::create([
                "id" => 2940,
                "prefecture_id" => 13,
                "city_id" => 674,
                "street_id" => 40191,
                "name" => "曙橋",
                "hiragana" => "あけぼのばし",
                "katakana" => "アケボノバシ",
                "katakana_half" => "ｱｹﾎﾞﾉﾊﾞｼ",
                "romaji" => "akebonobashi",
                "memo" => "",
                "latitude" => "35.692308",
                "altitude" => "139.722571",
            ]);
            
            Station::create([
                "id" => 2941,
                "prefecture_id" => 13,
                "city_id" => 654,
                "street_id" => 37126,
                "name" => "小川町",
                "hiragana" => "おがわまち",
                "katakana" => "オガワマチ",
                "katakana_half" => "ｵｶﾞﾜﾏﾁ",
                "romaji" => "ogawamachi",
                "memo" => "東京都",
                "latitude" => "35.695225",
                "altitude" => "139.767150",
            ]);
            
            Station::create([
                "id" => 2942,
                "prefecture_id" => 13,
                "city_id" => 654,
                "street_id" => 37041,
                "name" => "岩本町",
                "hiragana" => "いわもとちょう",
                "katakana" => "イワモトチョウ",
                "katakana_half" => "ｲﾜﾓﾄﾁｮｳ",
                "romaji" => "iwamotochou",
                "memo" => "",
                "latitude" => "35.695530",
                "altitude" => "139.775039",
            ]);
            
            Station::create([
                "id" => 2943,
                "prefecture_id" => 13,
                "city_id" => 655,
                "street_id" => 37617,
                "name" => "馬喰横山",
                "hiragana" => "ばくろよこやま",
                "katakana" => "バクロヨコヤマ",
                "katakana_half" => "ﾊﾞｸﾛﾖｺﾔﾏ",
                "romaji" => "bakuroyokoyama",
                "memo" => "",
                "latitude" => "35.692058",
                "altitude" => "139.782733",
            ]);
            
            Station::create([
                "id" => 2944,
                "prefecture_id" => 13,
                "city_id" => 655,
                "street_id" => 37616,
                "name" => "浜町",
                "hiragana" => "はまちょう",
                "katakana" => "ハマチョウ",
                "katakana_half" => "ﾊﾏﾁｮｳ",
                "romaji" => "hamachou",
                "memo" => "",
                "latitude" => "35.688560",
                "altitude" => "139.787816",
            ]);
            
            Station::create([
                "id" => 2945,
                "prefecture_id" => 13,
                "city_id" => 661,
                "street_id" => 39536,
                "name" => "森下",
                "hiragana" => "もりした",
                "katakana" => "モリシタ",
                "katakana_half" => "ﾓﾘｼﾀ",
                "romaji" => "morishita",
                "memo" => "東京都",
                "latitude" => "35.687976",
                "altitude" => "139.798148",
            ]);
            
            Station::create([
                "id" => 2946,
                "prefecture_id" => 13,
                "city_id" => 660,
                "street_id" => 39432,
                "name" => "菊川",
                "hiragana" => "きくかわ",
                "katakana" => "キクカワ",
                "katakana_half" => "ｷｸｶﾜ",
                "romaji" => "kikukawa",
                "memo" => "東京都",
                "latitude" => "35.688337",
                "altitude" => "139.806093",
            ]);
            
            Station::create([
                "id" => 2947,
                "prefecture_id" => 13,
                "city_id" => 662,
                "street_id" => 39583,
                "name" => "西大島",
                "hiragana" => "にしおおじま",
                "katakana" => "ニシオオジマ",
                "katakana_half" => "ﾆｼｵｵｼﾞﾏ",
                "romaji" => "nishioojima",
                "memo" => "",
                "latitude" => "35.689310",
                "altitude" => "139.826285",
            ]);
            
            Station::create([
                "id" => 2948,
                "prefecture_id" => 13,
                "city_id" => 707,
                "street_id" => null,
                "name" => "大島",
                "hiragana" => "おおじま",
                "katakana" => "オオジマ",
                "katakana_half" => "ｵｵｼﾞﾏ",
                "romaji" => "oojima",
                "memo" => "東京都",
                "latitude" => "35.689894",
                "altitude" => "139.835673",
            ]);
            
            Station::create([
                "id" => 2949,
                "prefecture_id" => 13,
                "city_id" => 694,
                "street_id" => null,
                "name" => "東大島",
                "hiragana" => "ひがしおおじま",
                "katakana" => "ヒガシオオジマ",
                "katakana_half" => "ﾋｶﾞｼｵｵｼﾞﾏ",
                "romaji" => "higashioojima",
                "memo" => "",
                "latitude" => "35.689755",
                "altitude" => "139.847172",
            ]);
            
            Station::create([
                "id" => 2950,
                "prefecture_id" => 13,
                "city_id" => 676,
                "street_id" => 40322,
                "name" => "船堀",
                "hiragana" => "ふなぼり",
                "katakana" => "フナボリ",
                "katakana_half" => "ﾌﾅﾎﾞﾘ",
                "romaji" => "funabori",
                "memo" => "",
                "latitude" => "35.683727",
                "altitude" => "139.863727",
            ]);
            
            Station::create([
                "id" => 2951,
                "prefecture_id" => 13,
                "city_id" => 676,
                "street_id" => 40283,
                "name" => "一之江",
                "hiragana" => "いちのえ",
                "katakana" => "イチノエ",
                "katakana_half" => "ｲﾁﾉｴ",
                "romaji" => "ichinoe",
                "memo" => "",
                "latitude" => "35.686006",
                "altitude" => "139.882892",
            ]);
            
            Station::create([
                "id" => 2952,
                "prefecture_id" => 13,
                "city_id" => 676,
                "street_id" => 40309,
                "name" => "瑞江",
                "hiragana" => "みずえ",
                "katakana" => "ミズエ",
                "katakana_half" => "ﾐｽﾞｴ",
                "romaji" => "mizue",
                "memo" => "",
                "latitude" => "35.693506",
                "altitude" => "139.897890",
            ]);
            
            Station::create([
                "id" => 2953,
                "prefecture_id" => 13,
                "city_id" => 676,
                "street_id" => 40291,
                "name" => "篠崎",
                "hiragana" => "しのざき",
                "katakana" => "シノザキ",
                "katakana_half" => "ｼﾉｻﾞｷ",
                "romaji" => "shinozaki",
                "memo" => "",
                "latitude" => "35.706087",
                "altitude" => "139.903750",
            ]);
            
            Station::create([
                "id" => 2954,
                "prefecture_id" => 13,
                "city_id" => 659,
                "street_id" => 39422,
                "name" => "三ノ輪橋",
                "hiragana" => "みのわばし",
                "katakana" => "ミノワバシ",
                "katakana_half" => "ﾐﾉﾜﾊﾞｼ",
                "romaji" => "minowabashi",
                "memo" => "",
                "latitude" => "35.732193",
                "altitude" => "139.791397",
            ]);
            
            Station::create([
                "id" => 2955,
                "prefecture_id" => 13,
                "city_id" => 671,
                "street_id" => null,
                "name" => "荒川一中前",
                "hiragana" => "あらかわいっちゅうまえ",
                "katakana" => "アラカワイッチュウマエ",
                "katakana_half" => "ｱﾗｶﾜｲｯﾁｭｳﾏｴ",
                "romaji" => "arakawaicchuumae",
                "memo" => "",
                "latitude" => "35.733777",
                "altitude" => "139.787897",
            ]);
            
            Station::create([
                "id" => 2956,
                "prefecture_id" => 13,
                "city_id" => 671,
                "street_id" => null,
                "name" => "荒川区役所前",
                "hiragana" => "あらかわくやくしょまえ",
                "katakana" => "アラカワクヤクショマエ",
                "katakana_half" => "ｱﾗｶﾜｸﾔｸｼｮﾏｴ",
                "romaji" => "arakawakuyakushomae",
                "memo" => "",
                "latitude" => "35.735166",
                "altitude" => "139.786231",
            ]);
            
            Station::create([
                "id" => 2957,
                "prefecture_id" => 13,
                "city_id" => 671,
                "street_id" => null,
                "name" => "荒川二丁目",
                "hiragana" => "あらかわにちょうめ",
                "katakana" => "アラカワニチョウメ",
                "katakana_half" => "ｱﾗｶﾜﾆﾁｮｳﾒ",
                "romaji" => "arakawanichoume",
                "memo" => "",
                "latitude" => "35.738720",
                "altitude" => "139.784564",
            ]);
            
            Station::create([
                "id" => 2958,
                "prefecture_id" => 13,
                "city_id" => 671,
                "street_id" => null,
                "name" => "荒川七丁目",
                "hiragana" => "あらかわななちょうめ",
                "katakana" => "アラカワナナチョウメ",
                "katakana_half" => "ｱﾗｶﾜﾅﾅﾁｮｳﾒ",
                "romaji" => "arakawananachoume",
                "memo" => "",
                "latitude" => "35.741832",
                "altitude" => "139.784286",
            ]);
            
            Station::create([
                "id" => 2959,
                "prefecture_id" => 13,
                "city_id" => 671,
                "street_id" => 40051,
                "name" => "町屋駅前",
                "hiragana" => "まちやえきまえ",
                "katakana" => "マチヤエキマエ",
                "katakana_half" => "ﾏﾁﾔｴｷﾏｴ",
                "romaji" => "machiyaekimae",
                "memo" => "",
                "latitude" => "35.742943",
                "altitude" => "139.780675",
            ]);
            
            Station::create([
                "id" => 2960,
                "prefecture_id" => 13,
                "city_id" => 671,
                "street_id" => 40051,
                "name" => "町屋二丁目",
                "hiragana" => "まちやにちょうめ",
                "katakana" => "マチヤニチョウメ",
                "katakana_half" => "ﾏﾁﾔﾆﾁｮｳﾒ",
                "romaji" => "machiyanichoume",
                "memo" => "",
                "latitude" => "35.743776",
                "altitude" => "139.776787",
            ]);
            
            Station::create([
                "id" => 2961,
                "prefecture_id" => 13,
                "city_id" => 671,
                "street_id" => 40049,
                "name" => "東尾久三丁目",
                "hiragana" => "ひがしおぐさんちょうめ",
                "katakana" => "ヒガシオグサンチョウメ",
                "katakana_half" => "ﾋｶﾞｼｵｸﾞｻﾝﾁｮｳﾒ",
                "romaji" => "higashiogusanchoume",
                "memo" => "",
                "latitude" => "35.745442",
                "altitude" => "139.774009",
            ]);
            
            Station::create([
                "id" => 2962,
                "prefecture_id" => 13,
                "city_id" => 672,
                "street_id" => 40071,
                "name" => "熊野前",
                "hiragana" => "くまのまえ",
                "katakana" => "クマノマエ",
                "katakana_half" => "ｸﾏﾉﾏｴ",
                "romaji" => "kumanomae",
                "memo" => "",
                "latitude" => "35.749053",
                "altitude" => "139.769565",
            ]);
            
            Station::create([
                "id" => 2963,
                "prefecture_id" => 13,
                "city_id" => 655,
                "street_id" => 37625,
                "name" => "宮ノ前",
                "hiragana" => "みやのまえ",
                "katakana" => "ミヤノマエ",
                "katakana_half" => "ﾐﾔﾉﾏｴ",
                "romaji" => "miyanomae",
                "memo" => "",
                "latitude" => "35.750164",
                "altitude" => "139.765121",
            ]);
            
            Station::create([
                "id" => 2964,
                "prefecture_id" => 13,
                "city_id" => 674,
                "street_id" => 40173,
                "name" => "小台",
                "hiragana" => "おだい",
                "katakana" => "オダイ",
                "katakana_half" => "ｵﾀﾞｲ",
                "romaji" => "odai",
                "memo" => "",
                "latitude" => "35.750442",
                "altitude" => "139.761592",
            ]);
            
            Station::create([
                "id" => 2965,
                "prefecture_id" => 13,
                "city_id" => 671,
                "street_id" => null,
                "name" => "荒川遊園地前",
                "hiragana" => "あらかわゆうえんちまえ",
                "katakana" => "アラカワユウエンチマエ",
                "katakana_half" => "ｱﾗｶﾜﾕｳｴﾝﾁﾏｴ",
                "romaji" => "arakawayuuenchimae",
                "memo" => "",
                "latitude" => "35.750719",
                "altitude" => "139.757899",
            ]);
            
            Station::create([
                "id" => 2966,
                "prefecture_id" => 13,
                "city_id" => 671,
                "street_id" => null,
                "name" => "荒川車庫前",
                "hiragana" => "あらかわしゃこまえ",
                "katakana" => "アラカワシャコマエ",
                "katakana_half" => "ｱﾗｶﾜｼｬｺﾏｴ",
                "romaji" => "arakawashakomae",
                "memo" => "",
                "latitude" => "35.750997",
                "altitude" => "139.752622",
            ]);
            
            Station::create([
                "id" => 2967,
                "prefecture_id" => 13,
                "city_id" => 686,
                "street_id" => 40685,
                "name" => "梶原",
                "hiragana" => "かじわら",
                "katakana" => "カジワラ",
                "katakana_half" => "ｶｼﾞﾜﾗ",
                "romaji" => "kajiwara",
                "memo" => "",
                "latitude" => "35.750997",
                "altitude" => "139.747900",
            ]);
            
            Station::create([
                "id" => 2968,
                "prefecture_id" => 13,
                "city_id" => 657,
                "street_id" => 39363,
                "name" => "栄町",
                "hiragana" => "さかえちょう",
                "katakana" => "サカエチョウ",
                "katakana_half" => "ｻｶｴﾁｮｳ",
                "romaji" => "sakaechou",
                "memo" => "東京都",
                "latitude" => "35.750997",
                "altitude" => "139.742345",
            ]);
            
            Station::create([
                "id" => 2969,
                "prefecture_id" => 13,
                "city_id" => 677,
                "street_id" => null,
                "name" => "王子駅前",
                "hiragana" => "おうじえきまえ",
                "katakana" => "オウジエキマエ",
                "katakana_half" => "ｵｳｼﾞｴｷﾏｴ",
                "romaji" => "oujiekimae",
                "memo" => "",
                "latitude" => "35.752941",
                "altitude" => "139.737901",
            ]);
            
            Station::create([
                "id" => 2970,
                "prefecture_id" => 13,
                "city_id" => 684,
                "street_id" => 40618,
                "name" => "飛鳥山",
                "hiragana" => "あすかやま",
                "katakana" => "アスカヤマ",
                "katakana_half" => "ｱｽｶﾔﾏ",
                "romaji" => "asukayama",
                "memo" => "",
                "latitude" => "35.750441",
                "altitude" => "139.737623",
            ]);
            
            Station::create([
                "id" => 2971,
                "prefecture_id" => 13,
                "city_id" => 670,
                "street_id" => 40034,
                "name" => "滝野川一丁目",
                "hiragana" => "たきのがわいっちょうめ",
                "katakana" => "タキノガワイッチョウメ",
                "katakana_half" => "ﾀｷﾉｶﾞﾜｲｯﾁｮｳﾒ",
                "romaji" => "takinogawaicchoume",
                "memo" => "",
                "latitude" => "35.747108",
                "altitude" => "139.735401",
            ]);
            
            Station::create([
                "id" => 2972,
                "prefecture_id" => 13,
                "city_id" => 670,
                "street_id" => 40041,
                "name" => "西ケ原四丁目",
                "hiragana" => "にしがはらよんちょうめ",
                "katakana" => "ニシガハラヨンチョウメ",
                "katakana_half" => "ﾆｼｶﾞﾊﾗﾖﾝﾁｮｳﾒ",
                "romaji" => "nishigaharayonchoume",
                "memo" => "",
                "latitude" => "35.744608",
                "altitude" => "139.732902",
            ]);
            
            Station::create([
                "id" => 2973,
                "prefecture_id" => 13,
                "city_id" => 654,
                "street_id" => null,
                "name" => "新庚申塚",
                "hiragana" => "しんこうしんづか",
                "katakana" => "シンコウシンヅカ",
                "katakana_half" => "ｼﾝｺｳｼﾝﾂﾞｶ",
                "romaji" => "shinkoushinzuka",
                "memo" => "",
                "latitude" => "35.741553",
                "altitude" => "139.730680",
            ]);
            
            Station::create([
                "id" => 2974,
                "prefecture_id" => 13,
                "city_id" => 654,
                "street_id" => null,
                "name" => "庚申塚",
                "hiragana" => "こうしんづか",
                "katakana" => "コウシンヅカ",
                "katakana_half" => "ｺｳｼﾝﾂﾞｶ",
                "romaji" => "koushinzuka",
                "memo" => "",
                "latitude" => "35.739609",
                "altitude" => "139.729846",
            ]);
            
            Station::create([
                "id" => 2975,
                "prefecture_id" => 13,
                "city_id" => 669,
                "street_id" => 39939,
                "name" => "巣鴨新田",
                "hiragana" => "すがもしんでん",
                "katakana" => "スガモシンデン",
                "katakana_half" => "ｽｶﾞﾓｼﾝﾃﾞﾝ",
                "romaji" => "sugamoshinden",
                "memo" => "",
                "latitude" => "35.735192",
                "altitude" => "139.727735",
            ]);
            
            Station::create([
                "id" => 2976,
                "prefecture_id" => 13,
                "city_id" => 658,
                "street_id" => 39372,
                "name" => "大塚駅前",
                "hiragana" => "おおつかえきまえ",
                "katakana" => "オオツカエキマエ",
                "katakana_half" => "ｵｵﾂｶｴｷﾏｴ",
                "romaji" => "ootsukaekimae",
                "memo" => "",
                "latitude" => "35.731637",
                "altitude" => "139.729347",
            ]);
            
            Station::create([
                "id" => 2977,
                "prefecture_id" => 13,
                "city_id" => 672,
                "street_id" => 40107,
                "name" => "向原",
                "hiragana" => "むこうはら",
                "katakana" => "ムコウハラ",
                "katakana_half" => "ﾑｺｳﾊﾗ",
                "romaji" => "mukouhara",
                "memo" => "東京都",
                "latitude" => "35.729054",
                "altitude" => "139.725125",
            ]);
            
            Station::create([
                "id" => 2978,
                "prefecture_id" => 13,
                "city_id" => 669,
                "street_id" => 39948,
                "name" => "東池袋四丁目",
                "hiragana" => "ひがしいけぶくろよんちょうめ",
                "katakana" => "ヒガシイケブクロヨンチョウメ",
                "katakana_half" => "ﾋｶﾞｼｲｹﾌﾞｸﾛﾖﾝﾁｮｳﾒ",
                "romaji" => "higashiikebukuroyonchoume",
                "memo" => "",
                "latitude" => "35.725444",
                "altitude" => "139.720403",
            ]);
            
            Station::create([
                "id" => 2979,
                "prefecture_id" => 13,
                "city_id" => 705,
                "street_id" => 41035,
                "name" => "都電雑司ケ谷",
                "hiragana" => "とでんぞうしがや",
                "katakana" => "トデンゾウシガヤ",
                "katakana_half" => "ﾄﾃﾞﾝｿﾞｳｼｶﾞﾔ",
                "romaji" => "todenzoushigaya",
                "memo" => "",
                "latitude" => "35.724333",
                "altitude" => "139.717986",
            ]);
            
            Station::create([
                "id" => 2980,
                "prefecture_id" => 13,
                "city_id" => 654,
                "street_id" => null,
                "name" => "鬼子母神前",
                "hiragana" => "きしぼじんまえ",
                "katakana" => "キシボジンマエ",
                "katakana_half" => "ｷｼﾎﾞｼﾞﾝﾏｴ",
                "romaji" => "kishibojinmae",
                "memo" => "",
                "latitude" => "35.720166",
                "altitude" => "139.714849",
            ]);
            
            Station::create([
                "id" => 2981,
                "prefecture_id" => 13,
                "city_id" => 673,
                "street_id" => 40115,
                "name" => "学習院下",
                "hiragana" => "がくしゅういんした",
                "katakana" => "ガクシュウインシタ",
                "katakana_half" => "ｶﾞｸｼｭｳｲﾝｼﾀ",
                "romaji" => "gakushuuinshita",
                "memo" => "",
                "latitude" => "35.716278",
                "altitude" => "139.712349",
            ]);
            
            Station::create([
                "id" => 2982,
                "prefecture_id" => 13,
                "city_id" => 654,
                "street_id" => null,
                "name" => "面影橋",
                "hiragana" => "おもかげばし",
                "katakana" => "オモカゲバシ",
                "katakana_half" => "ｵﾓｶｹﾞﾊﾞｼ",
                "romaji" => "omokagebashi",
                "memo" => "",
                "latitude" => "35.712945",
                "altitude" => "139.714293",
            ]);
            
            Station::create([
                "id" => 2983,
                "prefecture_id" => 13,
                "city_id" => 656,
                "street_id" => 37751,
                "name" => "赤土小学校前",
                "hiragana" => "あかどしょうがっこうまえ",
                "katakana" => "アカドショウガッコウマエ",
                "katakana_half" => "ｱｶﾄﾞｼｮｳｶﾞｯｺｳﾏｴ",
                "romaji" => "akadoshougakkoumae",
                "memo" => "",
                "latitude" => "35.742943",
                "altitude" => "139.769010",
            ]);
            
            Station::create([
                "id" => 2984,
                "prefecture_id" => 13,
                "city_id" => 674,
                "street_id" => null,
                "name" => "足立小台",
                "hiragana" => "あだちおだい",
                "katakana" => "アダチオダイ",
                "katakana_half" => "ｱﾀﾞﾁｵﾀﾞｲ",
                "romaji" => "adachiodai",
                "memo" => "",
                "latitude" => "35.754608",
                "altitude" => "139.770398",
            ]);
            
            Station::create([
                "id" => 2985,
                "prefecture_id" => 13,
                "city_id" => 661,
                "street_id" => 39463,
                "name" => "扇大橋",
                "hiragana" => "おうぎおおはし",
                "katakana" => "オウギオオハシ",
                "katakana_half" => "ｵｳｷﾞｵｵﾊｼ",
                "romaji" => "ougioohashi",
                "memo" => "",
                "latitude" => "35.763774",
                "altitude" => "139.770814",
            ]);
            
            Station::create([
                "id" => 2986,
                "prefecture_id" => 13,
                "city_id" => 673,
                "street_id" => 40131,
                "name" => "高野",
                "hiragana" => "こうや",
                "katakana" => "コウヤ",
                "katakana_half" => "ｺｳﾔ",
                "romaji" => "kouya",
                "memo" => "東京都",
                "latitude" => "35.768495",
                "altitude" => "139.770675",
            ]);
            
            Station::create([
                "id" => 2987,
                "prefecture_id" => 13,
                "city_id" => 674,
                "street_id" => 40179,
                "name" => "江北",
                "hiragana" => "こうほく",
                "katakana" => "コウホク",
                "katakana_half" => "ｺｳﾎｸ",
                "romaji" => "kouhoku",
                "memo" => "",
                "latitude" => "35.773773",
                "altitude" => "139.770397",
            ]);
            
            Station::create([
                "id" => 2988,
                "prefecture_id" => 13,
                "city_id" => 674,
                "street_id" => 40218,
                "name" => "西新井大師西",
                "hiragana" => "にしあらいだいしにし",
                "katakana" => "ニシアライダイシニシ",
                "katakana_half" => "ﾆｼｱﾗｲﾀﾞｲｼﾆｼ",
                "romaji" => "nishiaraidaishinishi",
                "memo" => "",
                "latitude" => "35.781550",
                "altitude" => "139.770119",
            ]);
            
            Station::create([
                "id" => 2989,
                "prefecture_id" => 13,
                "city_id" => 674,
                "street_id" => 40245,
                "name" => "谷在家",
                "hiragana" => "やざいけ",
                "katakana" => "ヤザイケ",
                "katakana_half" => "ﾔｻﾞｲｹ",
                "romaji" => "yazaike",
                "memo" => "",
                "latitude" => "35.788771",
                "altitude" => "139.770119",
            ]);
            
            Station::create([
                "id" => 2990,
                "prefecture_id" => 13,
                "city_id" => 674,
                "street_id" => 40214,
                "name" => "舎人公園",
                "hiragana" => "とねりこうえん",
                "katakana" => "トネリコウエン",
                "katakana_half" => "ﾄﾈﾘｺｳｴﾝ",
                "romaji" => "tonerikouen",
                "memo" => "",
                "latitude" => "35.796826",
                "altitude" => "139.770118",
            ]);
            
            Station::create([
                "id" => 2991,
                "prefecture_id" => 13,
                "city_id" => 674,
                "street_id" => 40213,
                "name" => "舎人",
                "hiragana" => "とねり",
                "katakana" => "トネリ",
                "katakana_half" => "ﾄﾈﾘ",
                "romaji" => "toneri",
                "memo" => "",
                "latitude" => "35.805714",
                "altitude" => "139.770118",
            ]);
            
            Station::create([
                "id" => 2992,
                "prefecture_id" => 13,
                "city_id" => 654,
                "street_id" => 37214,
                "name" => "見沼代親水公園",
                "hiragana" => "みぬまだいしんすいこうえん",
                "katakana" => "ミヌマダイシンスイコウエン",
                "katakana_half" => "ﾐﾇﾏﾀﾞｲｼﾝｽｲｺｳｴﾝ",
                "romaji" => "minumadaishinsuikouen",
                "memo" => "",
                "latitude" => "35.814602",
                "altitude" => "139.770673",
            ]);
            
            Station::create([
                "id" => 2993,
                "prefecture_id" => 13,
                "city_id" => 657,
                "street_id" => null,
                "name" => "新宿西口",
                "hiragana" => "しんじゅくにしぐち",
                "katakana" => "シンジュクニシグチ",
                "katakana_half" => "ｼﾝｼﾞｭｸﾆｼｸﾞﾁ",
                "romaji" => "shinjukunishiguchi",
                "memo" => "",
                "latitude" => "35.693780",
                "altitude" => "139.699018",
            ]);
            
            Station::create([
                "id" => 2994,
                "prefecture_id" => 13,
                "city_id" => 657,
                "street_id" => 39366,
                "name" => "若松河田",
                "hiragana" => "わかまつかわだ",
                "katakana" => "ワカマツカワダ",
                "katakana_half" => "ﾜｶﾏﾂｶﾜﾀﾞ",
                "romaji" => "wakamatsukawada",
                "memo" => "",
                "latitude" => "35.699057",
                "altitude" => "139.717905",
            ]);
            
            Station::create([
                "id" => 2995,
                "prefecture_id" => 13,
                "city_id" => 692,
                "street_id" => 40795,
                "name" => "牛込柳町",
                "hiragana" => "うしごめやなぎちょう",
                "katakana" => "ウシゴメヤナギチョウ",
                "katakana_half" => "ｳｼｺﾞﾒﾔﾅｷﾞﾁｮｳ",
                "romaji" => "ushigomeyanagichou",
                "memo" => "",
                "latitude" => "35.699613",
                "altitude" => "139.725126",
            ]);
            
            Station::create([
                "id" => 2996,
                "prefecture_id" => 13,
                "city_id" => 692,
                "street_id" => 40795,
                "name" => "牛込神楽坂",
                "hiragana" => "うしごめかぐらざか",
                "katakana" => "ウシゴメカグラザカ",
                "katakana_half" => "ｳｼｺﾞﾒｶｸﾞﾗｻﾞｶ",
                "romaji" => "ushigomekagurazaka",
                "memo" => "",
                "latitude" => "35.700724",
                "altitude" => "139.735403",
            ]);
            
            Station::create([
                "id" => 2997,
                "prefecture_id" => 13,
                "city_id" => 659,
                "street_id" => 39399,
                "name" => "上野御徒町",
                "hiragana" => "うえのおかちまち",
                "katakana" => "ウエノオカチマチ",
                "katakana_half" => "ｳｴﾉｵｶﾁﾏﾁ",
                "romaji" => "uenookachimachi",
                "memo" => "",
                "latitude" => "35.707946",
                "altitude" => "139.773733",
            ]);
            
            Station::create([
                "id" => 2998,
                "prefecture_id" => 13,
                "city_id" => 712,
                "street_id" => null,
                "name" => "新御徒町",
                "hiragana" => "しんおかちまち",
                "katakana" => "シンオカチマチ",
                "katakana_half" => "ｼﾝｵｶﾁﾏﾁ",
                "romaji" => "shinokachimachi",
                "memo" => "",
                "latitude" => "35.706836",
                "altitude" => "139.783177",
            ]);
            
            Station::create([
                "id" => 2999,
                "prefecture_id" => 13,
                "city_id" => 655,
                "street_id" => 37526,
                "name" => "勝どき",
                "hiragana" => "かちどき",
                "katakana" => "カチドキ",
                "katakana_half" => "ｶﾁﾄﾞｷ",
                "romaji" => "kachidoki",
                "memo" => "",
                "latitude" => "35.659341",
                "altitude" => "139.777624",
            ]);
            
            Station::create([
                "id" => 3000,
                "prefecture_id" => 13,
                "city_id" => 655,
                "street_id" => 37532,
                "name" => "築地市場",
                "hiragana" => "つきじしじょう",
                "katakana" => "ツキジシジョウ",
                "katakana_half" => "ﾂｷｼﾞｼｼﾞｮｳ",
                "romaji" => "tsukijishijou",
                "memo" => "",
                "latitude" => "35.664895",
                "altitude" => "139.766791",
            ]);
            
            Station::create([
                "id" => 3001,
                "prefecture_id" => 13,
                "city_id" => 656,
                "street_id" => 38295,
                "name" => "汐留",
                "hiragana" => "しおどめ",
                "katakana" => "シオドメ",
                "katakana_half" => "ｼｵﾄﾞﾒ",
                "romaji" => "shiodome",
                "memo" => "",
                "latitude" => "35.662951",
                "altitude" => "139.760125",
            ]);
            
            Station::create([
                "id" => 3002,
                "prefecture_id" => 13,
                "city_id" => 670,
                "street_id" => 40015,
                "name" => "赤羽橋",
                "hiragana" => "あかばねばし",
                "katakana" => "アカバネバシ",
                "katakana_half" => "ｱｶﾊﾞﾈﾊﾞｼ",
                "romaji" => "akabanebashi",
                "memo" => "",
                "latitude" => "35.654896",
                "altitude" => "139.744016",
            ]);
            
            Station::create([
                "id" => 3003,
                "prefecture_id" => 13,
                "city_id" => 691,
                "street_id" => null,
                "name" => "国立競技場",
                "hiragana" => "こくりつきょうぎじょう",
                "katakana" => "コクリツキョウギジョウ",
                "katakana_half" => "ｺｸﾘﾂｷｮｳｷﾞｼﾞｮｳ",
                "romaji" => "kokuritsukyougijou",
                "memo" => "",
                "latitude" => "35.679893",
                "altitude" => "139.714295",
            ]);
            
            Station::create([
                "id" => 3004,
                "prefecture_id" => 13,
                "city_id" => 705,
                "street_id" => 41035,
                "name" => "都庁前",
                "hiragana" => "とちょうまえ",
                "katakana" => "トチョウマエ",
                "katakana_half" => "ﾄﾁｮｳﾏｴ",
                "romaji" => "tochoumae",
                "memo" => "",
                "latitude" => "35.690447",
                "altitude" => "139.691519",
            ]);
            
            Station::create([
                "id" => 3005,
                "prefecture_id" => 13,
                "city_id" => 657,
                "street_id" => 38741,
                "name" => "西新宿五丁目",
                "hiragana" => "にししんじゅくごちょうめ",
                "katakana" => "ニシシンジュクゴチョウメ",
                "katakana_half" => "ﾆｼｼﾝｼﾞｭｸｺﾞﾁｮｳﾒ",
                "romaji" => "nishishinjukugochoume",
                "memo" => "",
                "latitude" => "35.689613",
                "altitude" => "139.684019",
            ]);
            
            Station::create([
                "id" => 3006,
                "prefecture_id" => 13,
                "city_id" => 657,
                "street_id" => 38705,
                "name" => "落合南長崎",
                "hiragana" => "おちあいみなみながさき",
                "katakana" => "オチアイミナミナガサキ",
                "katakana_half" => "ｵﾁｱｲﾐﾅﾐﾅｶﾞｻｷ",
                "romaji" => "ochiaiminaminagasaki",
                "memo" => "",
                "latitude" => "35.722943",
                "altitude" => "139.683740",
            ]);
            
            Station::create([
                "id" => 3007,
                "prefecture_id" => 13,
                "city_id" => 667,
                "street_id" => 39876,
                "name" => "新江古田",
                "hiragana" => "しんえごた",
                "katakana" => "シンエゴタ",
                "katakana_half" => "ｼﾝｴｺﾞﾀ",
                "romaji" => "shinegota",
                "memo" => "",
                "latitude" => "35.732664",
                "altitude" => "139.670130",
            ]);
            
            Station::create([
                "id" => 3008,
                "prefecture_id" => 13,
                "city_id" => 673,
                "street_id" => null,
                "name" => "練馬春日町",
                "hiragana" => "ねりまかすがちょう",
                "katakana" => "ネリマカスガチョウ",
                "katakana_half" => "ﾈﾘﾏｶｽｶﾞﾁｮｳ",
                "romaji" => "nerimakasugachou",
                "memo" => "",
                "latitude" => "35.751355",
                "altitude" => "139.640242",
            ]);
            
            Station::create([
                "id" => 3009,
                "prefecture_id" => 13,
                "city_id" => 673,
                "street_id" => 40150,
                "name" => "光が丘",
                "hiragana" => "ひかりがおか",
                "katakana" => "ヒカリガオカ",
                "katakana_half" => "ﾋｶﾘｶﾞｵｶ",
                "romaji" => "hikarigaoka",
                "memo" => "",
                "latitude" => "35.758494",
                "altitude" => "139.628465",
            ]);
            
            Station::create([
                "id" => 3010,
                "prefecture_id" => 13,
                "city_id" => 675,
                "street_id" => 40259,
                "name" => "新柴又",
                "hiragana" => "しんしばまた",
                "katakana" => "シンシバマタ",
                "katakana_half" => "ｼﾝｼﾊﾞﾏﾀ",
                "romaji" => "shinshibamata",
                "memo" => "",
                "latitude" => "35.751359",
                "altitude" => "139.880333",
            ]);
            
            Station::create([
                "id" => 3011,
                "prefecture_id" => 13,
                "city_id" => 657,
                "street_id" => 38728,
                "name" => "天王洲アイル",
                "hiragana" => "てんのうずあいる",
                "katakana" => "テンノウズアイル",
                "katakana_half" => "ﾃﾝﾉｳｽﾞｱｲﾙ",
                "romaji" => "tennouzuairu",
                "memo" => "",
                "latitude" => "35.621844",
                "altitude" => "139.750961",
            ]);
            
            Station::create([
                "id" => 3012,
                "prefecture_id" => 13,
                "city_id" => 662,
                "street_id" => 39542,
                "name" => "大井競馬場前",
                "hiragana" => "おおいけいばじょうまえ",
                "katakana" => "オオイケイバジョウマエ",
                "katakana_half" => "ｵｵｲｹｲﾊﾞｼﾞｮｳﾏｴ",
                "romaji" => "ooikeibajoumae",
                "memo" => "",
                "latitude" => "35.595041",
                "altitude" => "139.747101",
            ]);
            
            Station::create([
                "id" => 3013,
                "prefecture_id" => 13,
                "city_id" => 654,
                "street_id" => null,
                "name" => "流通センター",
                "hiragana" => "りゅうつうせんたー",
                "katakana" => "リュウツウセンター",
                "katakana_half" => "ﾘｭｳﾂｳｾﾝﾀｰ",
                "romaji" => "ryuutsuusentaｰ",
                "memo" => "",
                "latitude" => "35.581293",
                "altitude" => "139.749297",
            ]);
            
            Station::create([
                "id" => 3014,
                "prefecture_id" => 13,
                "city_id" => 664,
                "street_id" => 39650,
                "name" => "昭和島",
                "hiragana" => "しょうわじま",
                "katakana" => "ショウワジマ",
                "katakana_half" => "ｼｮｳﾜｼﾞﾏ",
                "romaji" => "shouwajima",
                "memo" => "",
                "latitude" => "35.570461",
                "altitude" => "139.749853",
            ]);
            
            Station::create([
                "id" => 3015,
                "prefecture_id" => 13,
                "city_id" => 654,
                "street_id" => null,
                "name" => "整備場",
                "hiragana" => "せいびじょう",
                "katakana" => "セイビジョウ",
                "katakana_half" => "ｾｲﾋﾞｼﾞｮｳ",
                "romaji" => "seibijou",
                "memo" => "",
                "latitude" => "35.555017",
                "altitude" => "139.753519",
            ]);
            
            Station::create([
                "id" => 3016,
                "prefecture_id" => 13,
                "city_id" => 664,
                "street_id" => 39670,
                "name" => "羽田空港国際線ビル",
                "hiragana" => "はねだくうこうこくさいせんびる",
                "katakana" => "ハネダクウコウコクサイセンビル",
                "katakana_half" => "ﾊﾈﾀﾞｸｳｺｳｺｸｻｲｾﾝﾋﾞﾙ",
                "romaji" => "hanedakuukoukokusaisenbiru",
                "memo" => "東京モノレール",
                "latitude" => "35.544353",
                "altitude" => "139.768186",
            ]);
            
            Station::create([
                "id" => 3017,
                "prefecture_id" => 13,
                "city_id" => 654,
                "street_id" => null,
                "name" => "新整備場",
                "hiragana" => "しんせいびじょう",
                "katakana" => "シンセイビジョウ",
                "katakana_half" => "ｼﾝｾｲﾋﾞｼﾞｮｳ",
                "romaji" => "shinseibijou",
                "memo" => "",
                "latitude" => "35.542797",
                "altitude" => "139.787323",
            ]);
            
            Station::create([
                "id" => 3018,
                "prefecture_id" => 13,
                "city_id" => 664,
                "street_id" => 39670,
                "name" => "羽田空港第１ビル",
                "hiragana" => "はねだくうこうだいいちびる",
                "katakana" => "ハネダクウコウダイイチビル",
                "katakana_half" => "ﾊﾈﾀﾞｸｳｺｳﾀﾞｲｲﾁﾋﾞﾙ",
                "romaji" => "hanedakuukoudaiichibiru",
                "memo" => "東京モノレール・ＪＡＬ利用",
                "latitude" => "35.549075",
                "altitude" => "139.784851",
            ]);
            
            Station::create([
                "id" => 3019,
                "prefecture_id" => 13,
                "city_id" => 664,
                "street_id" => 39670,
                "name" => "羽田空港第２ビル",
                "hiragana" => "はねだくうこうだいにびる",
                "katakana" => "ハネダクウコウダイニビル",
                "katakana_half" => "ﾊﾈﾀﾞｸｳｺｳﾀﾞｲﾆﾋﾞﾙ",
                "romaji" => "hanedakuukoudainibiru",
                "memo" => "東京モノレール・ＡＮＡ利用",
                "latitude" => "35.550741",
                "altitude" => "139.788184",
            ]);
            
            Station::create([
                "id" => 3020,
                "prefecture_id" => 13,
                "city_id" => 656,
                "street_id" => 37957,
                "name" => "竹芝",
                "hiragana" => "たけしば",
                "katakana" => "タケシバ",
                "katakana_half" => "ﾀｹｼﾊﾞ",
                "romaji" => "takeshiba",
                "memo" => "",
                "latitude" => "35.654174",
                "altitude" => "139.761903",
            ]);
            
            Station::create([
                "id" => 3021,
                "prefecture_id" => 13,
                "city_id" => 704,
                "street_id" => null,
                "name" => "日の出",
                "hiragana" => "ひので",
                "katakana" => "ヒノデ",
                "katakana_half" => "ﾋﾉﾃﾞ",
                "romaji" => "hinode",
                "memo" => "東京都",
                "latitude" => "35.649064",
                "altitude" => "139.759015",
            ]);
            
            Station::create([
                "id" => 3022,
                "prefecture_id" => 13,
                "city_id" => 656,
                "street_id" => 38098,
                "name" => "芝浦ふ頭",
                "hiragana" => "しばうらふとう",
                "katakana" => "シバウラフトウ",
                "katakana_half" => "ｼﾊﾞｳﾗﾌﾄｳ",
                "romaji" => "shibaurafutou",
                "memo" => "",
                "latitude" => "35.642314",
                "altitude" => "139.757848",
            ]);
            
            Station::create([
                "id" => 3023,
                "prefecture_id" => 13,
                "city_id" => 675,
                "street_id" => 40253,
                "name" => "お台場海浜公園",
                "hiragana" => "おだいばかいひんこうえん",
                "katakana" => "オダイバカイヒンコウエン",
                "katakana_half" => "ｵﾀﾞｲﾊﾞｶｲﾋﾝｺｳｴﾝ",
                "romaji" => "odaibakaihinkouen",
                "memo" => "",
                "latitude" => "35.629899",
                "altitude" => "139.778736",
            ]);
            
            Station::create([
                "id" => 3024,
                "prefecture_id" => 13,
                "city_id" => 656,
                "street_id" => 38105,
                "name" => "台場",
                "hiragana" => "だいば",
                "katakana" => "ダイバ",
                "katakana_half" => "ﾀﾞｲﾊﾞ",
                "romaji" => "daiba",
                "memo" => "",
                "latitude" => "35.626011",
                "altitude" => "139.771515",
            ]);
            
            Station::create([
                "id" => 3025,
                "prefecture_id" => 13,
                "city_id" => 655,
                "street_id" => 37525,
                "name" => "船の科学館",
                "hiragana" => "ふねのかがくかん",
                "katakana" => "フネノカガクカン",
                "katakana_half" => "ﾌﾈﾉｶｶﾞｸｶﾝ",
                "romaji" => "funenokagakukan",
                "memo" => "",
                "latitude" => "35.621316",
                "altitude" => "139.773209",
            ]);
            
            Station::create([
                "id" => 3026,
                "prefecture_id" => 13,
                "city_id" => 656,
                "street_id" => 38460,
                "name" => "テレコムセンター",
                "hiragana" => "てれこむせんたー",
                "katakana" => "テレコムセンター",
                "katakana_half" => "ﾃﾚｺﾑｾﾝﾀｰ",
                "romaji" => "terekomusentaｰ",
                "memo" => "",
                "latitude" => "35.617678",
                "altitude" => "139.779570",
            ]);
            
            Station::create([
                "id" => 3027,
                "prefecture_id" => 13,
                "city_id" => 661,
                "street_id" => 39455,
                "name" => "青海",
                "hiragana" => "あおみ",
                "katakana" => "アオミ",
                "katakana_half" => "ｱｵﾐ",
                "romaji" => "aomi",
                "memo" => "東京都",
                "latitude" => "35.624900",
                "altitude" => "139.781514",
            ]);
            
            Station::create([
                "id" => 3028,
                "prefecture_id" => 13,
                "city_id" => 690,
                "street_id" => null,
                "name" => "国際展示場正門",
                "hiragana" => "こくさいてんじじょうせいもん",
                "katakana" => "コクサイテンジジョウセイモン",
                "katakana_half" => "ｺｸｻｲﾃﾝｼﾞｼﾞｮｳｾｲﾓﾝ",
                "romaji" => "kokusaitenjijouseimon",
                "memo" => "",
                "latitude" => "35.630177",
                "altitude" => "139.791513",
            ]);
            
            Station::create([
                "id" => 3029,
                "prefecture_id" => 13,
                "city_id" => 661,
                "street_id" => 39456,
                "name" => "有明",
                "hiragana" => "ありあけ",
                "katakana" => "アリアケ",
                "katakana_half" => "ｱﾘｱｹ",
                "romaji" => "ariake",
                "memo" => "東京都",
                "latitude" => "35.634343",
                "altitude" => "139.793457",
            ]);
            
            Station::create([
                "id" => 3030,
                "prefecture_id" => 13,
                "city_id" => 661,
                "street_id" => 39456,
                "name" => "有明テニスの森",
                "hiragana" => "ありあけてにすのもり",
                "katakana" => "アリアケテニスノモリ",
                "katakana_half" => "ｱﾘｱｹﾃﾆｽﾉﾓﾘ",
                "romaji" => "ariaketenisunomori",
                "memo" => "",
                "latitude" => "35.639898",
                "altitude" => "139.789013",
            ]);
            
            Station::create([
                "id" => 3031,
                "prefecture_id" => 13,
                "city_id" => 677,
                "street_id" => null,
                "name" => "市場前",
                "hiragana" => "しじょうまえ",
                "katakana" => "シジョウマエ",
                "katakana_half" => "ｼｼﾞｮｳﾏｴ",
                "romaji" => "shijoumae",
                "memo" => "",
                "latitude" => "35.645731",
                "altitude" => "139.785679",
            ]);
            
            Station::create([
                "id" => 3032,
                "prefecture_id" => 13,
                "city_id" => 661,
                "street_id" => 39487,
                "name" => "新豊洲",
                "hiragana" => "しんとよす",
                "katakana" => "シントヨス",
                "katakana_half" => "ｼﾝﾄﾖｽ",
                "romaji" => "shintoyosu",
                "memo" => "",
                "latitude" => "35.648786",
                "altitude" => "139.790123",
            ]);
            
            Station::create([
                "id" => 3033,
                "prefecture_id" => 13,
                "city_id" => 661,
                "street_id" => 39473,
                "name" => "東雲",
                "hiragana" => "しののめ",
                "katakana" => "シノノメ",
                "katakana_half" => "ｼﾉﾉﾒ",
                "romaji" => "shinonome",
                "memo" => "東京都",
                "latitude" => "35.640732",
                "altitude" => "139.804012",
            ]);
            
            Station::create([
                "id" => 3034,
                "prefecture_id" => 13,
                "city_id" => 690,
                "street_id" => null,
                "name" => "国際展示場",
                "hiragana" => "こくさいてんじじょう",
                "katakana" => "コクサイテンジジョウ",
                "katakana_half" => "ｺｸｻｲﾃﾝｼﾞｼﾞｮｳ",
                "romaji" => "kokusaitenjijou",
                "memo" => "",
                "latitude" => "35.635065",
                "altitude" => "139.792290",
            ]);
            
            Station::create([
                "id" => 3035,
                "prefecture_id" => 13,
                "city_id" => 702,
                "street_id" => null,
                "name" => "東京テレポート",
                "hiragana" => "とうきょうてれぽーと",
                "katakana" => "トウキョウテレポート",
                "katakana_half" => "ﾄｳｷｮｳﾃﾚﾎﾟｰﾄ",
                "romaji" => "toukyouterepoｰto",
                "memo" => "",
                "latitude" => "35.627427",
                "altitude" => "139.778125",
            ]);
            
            Station::create([
                "id" => 3036,
                "prefecture_id" => 13,
                "city_id" => 662,
                "street_id" => null,
                "name" => "品川シーサイド",
                "hiragana" => "しながわしーさいど",
                "katakana" => "シナガワシーサイド",
                "katakana_half" => "ｼﾅｶﾞﾜｼｰｻｲﾄﾞ",
                "romaji" => "shinagawashiｰsaido",
                "memo" => "",
                "latitude" => "35.609623",
                "altitude" => "139.749851",
            ]);
            
            Station::create([
                "id" => 3037,
                "prefecture_id" => 13,
                "city_id" => 694,
                "street_id" => 40822,
                "name" => "上北台",
                "hiragana" => "かみきただい",
                "katakana" => "カミキタダイ",
                "katakana_half" => "ｶﾐｷﾀﾀﾞｲ",
                "romaji" => "kamikitadai",
                "memo" => "",
                "latitude" => "35.745714",
                "altitude" => "139.415844",
            ]);
            
            Station::create([
                "id" => 3038,
                "prefecture_id" => 13,
                "city_id" => 659,
                "street_id" => 39401,
                "name" => "桜街道",
                "hiragana" => "さくらかいどう",
                "katakana" => "サクラカイドウ",
                "katakana_half" => "ｻｸﾗｶｲﾄﾞｳ",
                "romaji" => "sakurakaidou",
                "memo" => "",
                "latitude" => "35.738770",
                "altitude" => "139.416678",
            ]);
            
            Station::create([
                "id" => 3039,
                "prefecture_id" => 13,
                "city_id" => 678,
                "street_id" => 40463,
                "name" => "砂川七番",
                "hiragana" => "すながわななばん",
                "katakana" => "スナガワナナバン",
                "katakana_half" => "ｽﾅｶﾞﾜﾅﾅﾊﾞﾝ",
                "romaji" => "sunagawananaban",
                "memo" => "",
                "latitude" => "35.723216",
                "altitude" => "139.418178",
            ]);
            
            Station::create([
                "id" => 3040,
                "prefecture_id" => 13,
                "city_id" => 654,
                "street_id" => 37124,
                "name" => "泉体育館",
                "hiragana" => "いずみたいいくかん",
                "katakana" => "イズミタイイクカン",
                "katakana_half" => "ｲｽﾞﾐﾀｲｲｸｶﾝ",
                "romaji" => "izumitaiikukan",
                "memo" => "",
                "latitude" => "35.718772",
                "altitude" => "139.419595",
            ]);
            
            Station::create([
                "id" => 3041,
                "prefecture_id" => 13,
                "city_id" => 674,
                "street_id" => null,
                "name" => "立飛",
                "hiragana" => "たちひ",
                "katakana" => "タチヒ",
                "katakana_half" => "ﾀﾁﾋ",
                "romaji" => "tachihi",
                "memo" => "",
                "latitude" => "35.714328",
                "altitude" => "139.417096",
            ]);
            
            Station::create([
                "id" => 3042,
                "prefecture_id" => 13,
                "city_id" => 669,
                "street_id" => 39943,
                "name" => "高松",
                "hiragana" => "たかまつ",
                "katakana" => "タカマツ",
                "katakana_half" => "ﾀｶﾏﾂ",
                "romaji" => "takamatsu",
                "memo" => "東京都",
                "latitude" => "35.709884",
                "altitude" => "139.413207",
            ]);
            
            Station::create([
                "id" => 3043,
                "prefecture_id" => 13,
                "city_id" => 678,
                "street_id" => null,
                "name" => "立川北",
                "hiragana" => "たちかわきた",
                "katakana" => "タチカワキタ",
                "katakana_half" => "ﾀﾁｶﾜｷﾀ",
                "romaji" => "tachikawakita",
                "memo" => "",
                "latitude" => "35.699469",
                "altitude" => "139.412514",
            ]);
            
            Station::create([
                "id" => 3044,
                "prefecture_id" => 13,
                "city_id" => 678,
                "street_id" => null,
                "name" => "立川南",
                "hiragana" => "たちかわみなみ",
                "katakana" => "タチカワミナミ",
                "katakana_half" => "ﾀﾁｶﾜﾐﾅﾐ",
                "romaji" => "tachikawaminami",
                "memo" => "",
                "latitude" => "35.696275",
                "altitude" => "139.412653",
            ]);
            
            Station::create([
                "id" => 3045,
                "prefecture_id" => 13,
                "city_id" => 678,
                "street_id" => 40462,
                "name" => "柴崎体育館",
                "hiragana" => "しばさきたいいくかん",
                "katakana" => "シバサキタイイクカン",
                "katakana_half" => "ｼﾊﾞｻｷﾀｲｲｸｶﾝ",
                "romaji" => "shibasakitaiikukan",
                "memo" => "",
                "latitude" => "35.689803",
                "altitude" => "139.409320",
            ]);
            
            Station::create([
                "id" => 3046,
                "prefecture_id" => 13,
                "city_id" => 657,
                "street_id" => 38682,
                "name" => "甲州街道",
                "hiragana" => "こうしゅうかいどう",
                "katakana" => "コウシュウカイドウ",
                "katakana_half" => "ｺｳｼｭｳｶｲﾄﾞｳ",
                "romaji" => "koushuukaidou",
                "memo" => "",
                "latitude" => "35.678221",
                "altitude" => "139.409320",
            ]);
            
            Station::create([
                "id" => 3047,
                "prefecture_id" => 13,
                "city_id" => 688,
                "street_id" => 40744,
                "name" => "万願寺",
                "hiragana" => "まんがんじ",
                "katakana" => "マンガンジ",
                "katakana_half" => "ﾏﾝｶﾞﾝｼﾞ",
                "romaji" => "manganji",
                "memo" => "",
                "latitude" => "35.671000",
                "altitude" => "139.420153",
            ]);
            
            Station::create([
                "id" => 3048,
                "prefecture_id" => 13,
                "city_id" => 688,
                "street_id" => 40743,
                "name" => "程久保",
                "hiragana" => "ほどくぼ",
                "katakana" => "ホドクボ",
                "katakana_half" => "ﾎﾄﾞｸﾎﾞ",
                "romaji" => "hodokubo",
                "memo" => "",
                "latitude" => "35.655446",
                "altitude" => "139.410988",
            ]);
            
            Station::create([
                "id" => 3049,
                "prefecture_id" => 13,
                "city_id" => 655,
                "street_id" => null,
                "name" => "中央大学・明星大学",
                "hiragana" => "ちゅうおうだいがくめいせいだいがく",
                "katakana" => "チュウオウダイガクメイセイダイガク",
                "katakana_half" => "ﾁｭｳｵｳﾀﾞｲｶﾞｸﾒｲｾｲﾀﾞｲｶﾞｸ",
                "romaji" => "chuuoudaigakumeiseidaigaku",
                "memo" => "",
                "latitude" => "35.642114",
                "altitude" => "139.408211",
            ]);
            
            Station::create([
                "id" => 3050,
                "prefecture_id" => 13,
                "city_id" => 658,
                "street_id" => 39372,
                "name" => "大塚・帝京大学",
                "hiragana" => "おおつかていきょうだいがく",
                "katakana" => "オオツカテイキョウダイガク",
                "katakana_half" => "ｵｵﾂｶﾃｲｷｮｳﾀﾞｲｶﾞｸ",
                "romaji" => "ootsukateikyoudaigaku",
                "memo" => "",
                "latitude" => "35.636837",
                "altitude" => "139.416544",
            ]);
            
            Station::create([
                "id" => 3051,
                "prefecture_id" => 13,
                "city_id" => 659,
                "street_id" => 39420,
                "name" => "松が谷",
                "hiragana" => "まつがや",
                "katakana" => "マツガヤ",
                "katakana_half" => "ﾏﾂｶﾞﾔ",
                "romaji" => "matsugaya",
                "memo" => "",
                "latitude" => "35.631837",
                "altitude" => "139.422099",
            ]);
            
            Station::create([
                "id" => 3052,
                "prefecture_id" => 13,
                "city_id" => 698,
                "street_id" => null,
                "name" => "多摩センター",
                "hiragana" => "たませんたー",
                "katakana" => "タマセンター",
                "katakana_half" => "ﾀﾏｾﾝﾀｰ",
                "romaji" => "tamasentaｰ",
                "memo" => "",
                "latitude" => "35.623783",
                "altitude" => "139.422933",
            ]);
            
            Station::create([
                "id" => 3053,
                "prefecture_id" => 13,
                "city_id" => 674,
                "street_id" => 40160,
                "name" => "青井",
                "hiragana" => "あおい",
                "katakana" => "アオイ",
                "katakana_half" => "ｱｵｲ",
                "romaji" => "aoi",
                "memo" => "",
                "latitude" => "35.772662",
                "altitude" => "139.820393",
            ]);
            
            Station::create([
                "id" => 3054,
                "prefecture_id" => 13,
                "city_id" => 674,
                "street_id" => 40249,
                "name" => "六町",
                "hiragana" => "ろくちょう",
                "katakana" => "ロクチョウ",
                "katakana_half" => "ﾛｸﾁｮｳ",
                "romaji" => "rokuchou",
                "memo" => "",
                "latitude" => "35.784606",
                "altitude" => "139.821781",
            ]);
            
            Station::create([
                "id" => 3055,
                "prefecture_id" => 13,
                "city_id" => 695,
                "street_id" => null,
                "name" => "清滝",
                "hiragana" => "きよたき",
                "katakana" => "キヨタキ",
                "katakana_half" => "ｷﾖﾀｷ",
                "romaji" => "kiyotaki",
                "memo" => "",
                "latitude" => "35.631084",
                "altitude" => "139.266834",
            ]);
            
            Station::create([
                "id" => 3056,
                "prefecture_id" => 13,
                "city_id" => 677,
                "street_id" => 40346,
                "name" => "高尾山",
                "hiragana" => "たかおさん",
                "katakana" => "タカオサン",
                "katakana_half" => "ﾀｶｵｻﾝ",
                "romaji" => "takaosan",
                "memo" => "",
                "latitude" => "35.631084",
                "altitude" => "139.256084",
            ]);
            
            Station::create([
                "id" => 3057,
                "prefecture_id" => 13,
                "city_id" => 670,
                "street_id" => 40034,
                "name" => "滝本",
                "hiragana" => "たきもと",
                "katakana" => "タキモト",
                "katakana_half" => "ﾀｷﾓﾄ",
                "romaji" => "takimoto",
                "memo" => "",
                "latitude" => "35.796064",
                "altitude" => "139.161280",
            ]);
            
            Station::create([
                "id" => 3058,
                "prefecture_id" => 13,
                "city_id" => 681,
                "street_id" => 40535,
                "name" => "御岳山",
                "hiragana" => "みたけさん",
                "katakana" => "ミタケサン",
                "katakana_half" => "ﾐﾀｹｻﾝ",
                "romaji" => "mitakesan",
                "memo" => "",
                "latitude" => "35.789593",
                "altitude" => "139.153475",
            ]);
            
    }
}
