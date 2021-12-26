<?php
namespace Database\Seeders;

use App\Models\Station;
use Illuminate\Database\Seeder;

class StationSeeder3 extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        
            Station::create([
                "id" => 670,
                "prefecture_id" => 3,
                "city_id" => 236,
                "street_id" => 11445,
                "name" => "一ノ関",
                "hiragana" => "いちのせき",
                "katakana" => "イチノセキ",
                "katakana_half" => "ｲﾁﾉｾｷ",
                "romaji" => "ichinoseki",
                "memo" => "",
                "latitude" => "38.926542",
                "altitude" => "141.138499",
            ]);
            
            Station::create([
                "id" => 671,
                "prefecture_id" => 3,
                "city_id" => 230,
                "street_id" => 10974,
                "name" => "水沢江刺",
                "hiragana" => "みずさわえさし",
                "katakana" => "ミズサワエサシ",
                "katakana_half" => "ﾐｽﾞｻﾜｴｻｼ",
                "romaji" => "mizusawaesashi",
                "memo" => "",
                "latitude" => "39.145047",
                "altitude" => "141.188790",
            ]);
            
            Station::create([
                "id" => 672,
                "prefecture_id" => 3,
                "city_id" => 233,
                "street_id" => null,
                "name" => "北上",
                "hiragana" => "きたかみ",
                "katakana" => "キタカミ",
                "katakana_half" => "ｷﾀｶﾐ",
                "romaji" => "kitakami",
                "memo" => "",
                "latitude" => "39.282087",
                "altitude" => "141.122345",
            ]);
            
            Station::create([
                "id" => 673,
                "prefecture_id" => 3,
                "city_id" => 232,
                "street_id" => null,
                "name" => "新花巻",
                "hiragana" => "しんはなまき",
                "katakana" => "シンハナマキ",
                "katakana_half" => "ｼﾝﾊﾅﾏｷ",
                "romaji" => "shinhanamaki",
                "memo" => "",
                "latitude" => "39.405825",
                "altitude" => "141.173335",
            ]);
            
            Station::create([
                "id" => 674,
                "prefecture_id" => 3,
                "city_id" => 229,
                "street_id" => null,
                "name" => "盛岡",
                "hiragana" => "もりおか",
                "katakana" => "モリオカ",
                "katakana_half" => "ﾓﾘｵｶ",
                "romaji" => "morioka",
                "memo" => "",
                "latitude" => "39.701432",
                "altitude" => "141.136741",
            ]);
            
            Station::create([
                "id" => 675,
                "prefecture_id" => 3,
                "city_id" => 229,
                "street_id" => 10709,
                "name" => "いわて沼宮内",
                "hiragana" => "いわてぬまくない",
                "katakana" => "イワテヌマクナイ",
                "katakana_half" => "ｲﾜﾃﾇﾏｸﾅｲ",
                "romaji" => "iwatenumakunai",
                "memo" => "",
                "latitude" => "39.960322",
                "altitude" => "141.217111",
            ]);
            
            Station::create([
                "id" => 676,
                "prefecture_id" => 3,
                "city_id" => 239,
                "street_id" => null,
                "name" => "二戸",
                "hiragana" => "にのへ",
                "katakana" => "ニノヘ",
                "katakana_half" => "ﾆﾉﾍ",
                "romaji" => "ninohe",
                "memo" => "",
                "latitude" => "40.259625",
                "altitude" => "141.285814",
            ]);
            
            Station::create([
                "id" => 677,
                "prefecture_id" => 3,
                "city_id" => 243,
                "street_id" => null,
                "name" => "雫石",
                "hiragana" => "しずくいし",
                "katakana" => "シズクイシ",
                "katakana_half" => "ｼｽﾞｸｲｼ",
                "romaji" => "shizukuishi",
                "memo" => "",
                "latitude" => "39.689125",
                "altitude" => "140.974783",
            ]);
            
            Station::create([
                "id" => 678,
                "prefecture_id" => 3,
                "city_id" => 260,
                "street_id" => 12754,
                "name" => "角の浜",
                "hiragana" => "かどのはま",
                "katakana" => "カドノハマ",
                "katakana_half" => "ｶﾄﾞﾉﾊﾏ",
                "romaji" => "kadonohama",
                "memo" => "",
                "latitude" => "40.444418",
                "altitude" => "141.681968",
            ]);
            
            Station::create([
                "id" => 679,
                "prefecture_id" => 3,
                "city_id" => 260,
                "street_id" => 12753,
                "name" => "平内",
                "hiragana" => "ひらない",
                "katakana" => "ヒラナイ",
                "katakana_half" => "ﾋﾗﾅｲ",
                "romaji" => "hiranai",
                "memo" => "",
                "latitude" => "40.425531",
                "altitude" => "141.699467",
            ]);
            
            Station::create([
                "id" => 680,
                "prefecture_id" => 3,
                "city_id" => 260,
                "street_id" => 12749,
                "name" => "種市",
                "hiragana" => "たねいち",
                "katakana" => "タネイチ",
                "katakana_half" => "ﾀﾈｲﾁ",
                "romaji" => "taneichi",
                "memo" => "",
                "latitude" => "40.410255",
                "altitude" => "141.715188",
            ]);
            
            Station::create([
                "id" => 681,
                "prefecture_id" => 3,
                "city_id" => 258,
                "street_id" => 12730,
                "name" => "玉川",
                "hiragana" => "たまがわ",
                "katakana" => "タマガワ",
                "katakana_half" => "ﾀﾏｶﾞﾜ",
                "romaji" => "tamagawa",
                "memo" => "岩手県",
                "latitude" => "40.380536",
                "altitude" => "141.735022",
            ]);
            
            Station::create([
                "id" => 682,
                "prefecture_id" => 3,
                "city_id" => 260,
                "street_id" => 12756,
                "name" => "宿戸",
                "hiragana" => "しゅくのへ",
                "katakana" => "シュクノヘ",
                "katakana_half" => "ｼｭｸﾉﾍ",
                "romaji" => "shukunohe",
                "memo" => "",
                "latitude" => "40.366094",
                "altitude" => "141.746966",
            ]);
            
            Station::create([
                "id" => 683,
                "prefecture_id" => 3,
                "city_id" => 237,
                "street_id" => null,
                "name" => "陸中八木",
                "hiragana" => "りくちゅうやぎ",
                "katakana" => "リクチュウヤギ",
                "katakana_half" => "ﾘｸﾁｭｳﾔｷﾞ",
                "romaji" => "rikuchuuyagi",
                "memo" => "",
                "latitude" => "40.345541",
                "altitude" => "141.766687",
            ]);
            
            Station::create([
                "id" => 684,
                "prefecture_id" => 3,
                "city_id" => 260,
                "street_id" => 12744,
                "name" => "有家",
                "hiragana" => "うげ",
                "katakana" => "ウゲ",
                "katakana_half" => "ｳｹﾞ",
                "romaji" => "uge",
                "memo" => "岩手県",
                "latitude" => "40.324432",
                "altitude" => "141.773077",
            ]);
            
            Station::create([
                "id" => 685,
                "prefecture_id" => 3,
                "city_id" => 237,
                "street_id" => null,
                "name" => "陸中中野",
                "hiragana" => "りくちゅうなかの",
                "katakana" => "リクチュウナカノ",
                "katakana_half" => "ﾘｸﾁｭｳﾅｶﾉ",
                "romaji" => "rikuchuunakano",
                "memo" => "",
                "latitude" => "40.304933",
                "altitude" => "141.787770",
            ]);
            
            Station::create([
                "id" => 686,
                "prefecture_id" => 3,
                "city_id" => 234,
                "street_id" => 11285,
                "name" => "侍浜",
                "hiragana" => "さむらいはま",
                "katakana" => "サムライハマ",
                "katakana_half" => "ｻﾑﾗｲﾊﾏ",
                "romaji" => "samuraihama",
                "memo" => "",
                "latitude" => "40.261632",
                "altitude" => "141.760691",
            ]);
            
            Station::create([
                "id" => 687,
                "prefecture_id" => 3,
                "city_id" => 237,
                "street_id" => null,
                "name" => "陸中夏井",
                "hiragana" => "りくちゅうなつい",
                "katakana" => "リクチュウナツイ",
                "katakana_half" => "ﾘｸﾁｭｳﾅﾂｲ",
                "romaji" => "rikuchuunatsui",
                "memo" => "",
                "latitude" => "40.207778",
                "altitude" => "141.791969",
            ]);
            
            Station::create([
                "id" => 688,
                "prefecture_id" => 3,
                "city_id" => 234,
                "street_id" => null,
                "name" => "久慈",
                "hiragana" => "くじ",
                "katakana" => "クジ",
                "katakana_half" => "ｸｼﾞ",
                "romaji" => "kuji",
                "memo" => "",
                "latitude" => "40.190474",
                "altitude" => "141.770833",
            ]);
            
            Station::create([
                "id" => 689,
                "prefecture_id" => 3,
                "city_id" => 229,
                "street_id" => 10710,
                "name" => "青山",
                "hiragana" => "あおやま",
                "katakana" => "アオヤマ",
                "katakana_half" => "ｱｵﾔﾏ",
                "romaji" => "aoyama",
                "memo" => "岩手県",
                "latitude" => "39.725040",
                "altitude" => "141.118437",
            ]);
            
            Station::create([
                "id" => 690,
                "prefecture_id" => 3,
                "city_id" => 229,
                "street_id" => 10738,
                "name" => "厨川",
                "hiragana" => "くりやがわ",
                "katakana" => "クリヤガワ",
                "katakana_half" => "ｸﾘﾔｶﾞﾜ",
                "romaji" => "kuriyagawa",
                "memo" => "",
                "latitude" => "39.744232",
                "altitude" => "141.128851",
            ]);
            
            Station::create([
                "id" => 691,
                "prefecture_id" => 3,
                "city_id" => 242,
                "street_id" => 12356,
                "name" => "巣子",
                "hiragana" => "すご",
                "katakana" => "スゴ",
                "katakana_half" => "ｽｺﾞ",
                "romaji" => "sugo",
                "memo" => "",
                "latitude" => "39.783646",
                "altitude" => "141.148987",
            ]);
            
            Station::create([
                "id" => 692,
                "prefecture_id" => 3,
                "city_id" => 242,
                "street_id" => null,
                "name" => "滝沢",
                "hiragana" => "たきざわ",
                "katakana" => "タキザワ",
                "katakana_half" => "ﾀｷｻﾞﾜ",
                "romaji" => "takizawa",
                "memo" => "",
                "latitude" => "39.798922",
                "altitude" => "141.149542",
            ]);
            
            Station::create([
                "id" => 693,
                "prefecture_id" => 3,
                "city_id" => 229,
                "street_id" => 10766,
                "name" => "渋民",
                "hiragana" => "しぶたみ",
                "katakana" => "シブタミ",
                "katakana_half" => "ｼﾌﾞﾀﾐ",
                "romaji" => "shibutami",
                "memo" => "",
                "latitude" => "39.834751",
                "altitude" => "141.154262",
            ]);
            
            Station::create([
                "id" => 694,
                "prefecture_id" => 3,
                "city_id" => 229,
                "street_id" => 10754,
                "name" => "好摩",
                "hiragana" => "こうま",
                "katakana" => "コウマ",
                "katakana_half" => "ｺｳﾏ",
                "romaji" => "kouma",
                "memo" => "",
                "latitude" => "39.874053",
                "altitude" => "141.173703",
            ]);
            
            Station::create([
                "id" => 695,
                "prefecture_id" => 3,
                "city_id" => 241,
                "street_id" => 12205,
                "name" => "東大更",
                "hiragana" => "ひがしおおぶけ",
                "katakana" => "ヒガシオオブケ",
                "katakana_half" => "ﾋｶﾞｼｵｵﾌﾞｹ",
                "romaji" => "higashioobuke",
                "memo" => "",
                "latitude" => "39.902522",
                "altitude" => "141.142203",
            ]);
            
            Station::create([
                "id" => 696,
                "prefecture_id" => 3,
                "city_id" => 240,
                "street_id" => 11736,
                "name" => "大更",
                "hiragana" => "おおぶけ",
                "katakana" => "オオブケ",
                "katakana_half" => "ｵｵﾌﾞｹ",
                "romaji" => "oobuke",
                "memo" => "",
                "latitude" => "39.914186",
                "altitude" => "141.100873",
            ]);
            
            Station::create([
                "id" => 697,
                "prefecture_id" => 3,
                "city_id" => 240,
                "street_id" => null,
                "name" => "平館",
                "hiragana" => "たいらだて",
                "katakana" => "タイラダテ",
                "katakana_half" => "ﾀｲﾗﾀﾞﾃ",
                "romaji" => "tairadate",
                "memo" => "",
                "latitude" => "39.950849",
                "altitude" => "141.085012",
            ]);
            
            Station::create([
                "id" => 698,
                "prefecture_id" => 3,
                "city_id" => 233,
                "street_id" => null,
                "name" => "北森",
                "hiragana" => "きたもり",
                "katakana" => "キタモリ",
                "katakana_half" => "ｷﾀﾓﾘ",
                "romaji" => "kitamori",
                "memo" => "",
                "latitude" => "39.956625",
                "altitude" => "141.071984",
            ]);
            
            Station::create([
                "id" => 699,
                "prefecture_id" => 3,
                "city_id" => 229,
                "street_id" => 10845,
                "name" => "松尾八幡平",
                "hiragana" => "まつおはちまんたい",
                "katakana" => "マツオハチマンタイ",
                "katakana_half" => "ﾏﾂｵﾊﾁﾏﾝﾀｲ",
                "romaji" => "matsuohachimantai",
                "memo" => "",
                "latitude" => "39.969207",
                "altitude" => "141.043903",
            ]);
            
            Station::create([
                "id" => 700,
                "prefecture_id" => 3,
                "city_id" => 240,
                "street_id" => 11711,
                "name" => "安比高原",
                "hiragana" => "あっぴこうげん",
                "katakana" => "アッピコウゲン",
                "katakana_half" => "ｱｯﾋﾟｺｳｹﾞﾝ",
                "romaji" => "appikougen",
                "memo" => "",
                "latitude" => "40.012590",
                "altitude" => "140.997266",
            ]);
            
            Station::create([
                "id" => 701,
                "prefecture_id" => 3,
                "city_id" => 240,
                "street_id" => 11707,
                "name" => "赤坂田",
                "hiragana" => "あかさかた",
                "katakana" => "アカサカタ",
                "katakana_half" => "ｱｶｻｶﾀ",
                "romaji" => "akasakata",
                "memo" => "",
                "latitude" => "40.048615",
                "altitude" => "141.003987",
            ]);
            
            Station::create([
                "id" => 702,
                "prefecture_id" => 3,
                "city_id" => 240,
                "street_id" => 11756,
                "name" => "小屋の畑",
                "hiragana" => "こやのはた",
                "katakana" => "コヤノハタ",
                "katakana_half" => "ｺﾔﾉﾊﾀ",
                "romaji" => "koyanohata",
                "memo" => "",
                "latitude" => "40.076390",
                "altitude" => "141.020373",
            ]);
            
            Station::create([
                "id" => 703,
                "prefecture_id" => 3,
                "city_id" => 240,
                "street_id" => 11715,
                "name" => "荒屋新町",
                "hiragana" => "あらやしんまち",
                "katakana" => "アラヤシンマチ",
                "katakana_half" => "ｱﾗﾔｼﾝﾏﾁ",
                "romaji" => "arayashinmachi",
                "memo" => "",
                "latitude" => "40.097665",
                "altitude" => "141.049230",
            ]);
            
            Station::create([
                "id" => 704,
                "prefecture_id" => 3,
                "city_id" => 230,
                "street_id" => 11023,
                "name" => "横間",
                "hiragana" => "よこま",
                "katakana" => "ヨコマ",
                "katakana_half" => "ﾖｺﾏ",
                "romaji" => "yokoma",
                "memo" => "",
                "latitude" => "40.107498",
                "altitude" => "141.027148",
            ]);
            
            Station::create([
                "id" => 705,
                "prefecture_id" => 3,
                "city_id" => 236,
                "street_id" => 11492,
                "name" => "田山",
                "hiragana" => "たやま",
                "katakana" => "タヤマ",
                "katakana_half" => "ﾀﾔﾏ",
                "romaji" => "tayama",
                "memo" => "",
                "latitude" => "40.139687",
                "altitude" => "140.943959",
            ]);
            
            Station::create([
                "id" => 706,
                "prefecture_id" => 3,
                "city_id" => 240,
                "street_id" => 11713,
                "name" => "兄畑",
                "hiragana" => "あにはた",
                "katakana" => "アニハタ",
                "katakana_half" => "ｱﾆﾊﾀ",
                "romaji" => "anihata",
                "memo" => "",
                "latitude" => "40.116105",
                "altitude" => "140.882883",
            ]);
            
            Station::create([
                "id" => 707,
                "prefecture_id" => 3,
                "city_id" => 242,
                "street_id" => 12279,
                "name" => "大釜",
                "hiragana" => "おおかま",
                "katakana" => "オオカマ",
                "katakana_half" => "ｵｵｶﾏ",
                "romaji" => "ookama",
                "memo" => "",
                "latitude" => "39.711624",
                "altitude" => "141.071913",
            ]);
            
            Station::create([
                "id" => 708,
                "prefecture_id" => 3,
                "city_id" => 240,
                "street_id" => 11750,
                "name" => "小岩井",
                "hiragana" => "こいわい",
                "katakana" => "コイワイ",
                "katakana_half" => "ｺｲﾜｲ",
                "romaji" => "koiwai",
                "memo" => "",
                "latitude" => "39.709651",
                "altitude" => "141.024750",
            ]);
            
            Station::create([
                "id" => 709,
                "prefecture_id" => 3,
                "city_id" => 229,
                "street_id" => null,
                "name" => "春木場",
                "hiragana" => "はるきば",
                "katakana" => "ハルキバ",
                "katakana_half" => "ﾊﾙｷﾊﾞ",
                "romaji" => "harukiba",
                "memo" => "",
                "latitude" => "39.693429",
                "altitude" => "140.943730",
            ]);
            
            Station::create([
                "id" => 710,
                "prefecture_id" => 3,
                "city_id" => 230,
                "street_id" => 10873,
                "name" => "赤渕",
                "hiragana" => "あかぶち",
                "katakana" => "アカブチ",
                "katakana_half" => "ｱｶﾌﾞﾁ",
                "romaji" => "akabuchi",
                "memo" => "",
                "latitude" => "39.685123",
                "altitude" => "140.907067",
            ]);
            
            Station::create([
                "id" => 711,
                "prefecture_id" => 3,
                "city_id" => 233,
                "street_id" => null,
                "name" => "上盛岡",
                "hiragana" => "かみもりおか",
                "katakana" => "カミモリオカ",
                "katakana_half" => "ｶﾐﾓﾘｵｶ",
                "romaji" => "kamimorioka",
                "memo" => "",
                "latitude" => "39.711486",
                "altitude" => "141.147906",
            ]);
            
            Station::create([
                "id" => 712,
                "prefecture_id" => 3,
                "city_id" => 229,
                "street_id" => 10864,
                "name" => "山岸",
                "hiragana" => "やまぎし",
                "katakana" => "ヤマギシ",
                "katakana_half" => "ﾔﾏｷﾞｼ",
                "romaji" => "yamagishi",
                "memo" => "",
                "latitude" => "39.715986",
                "altitude" => "141.171376",
            ]);
            
            Station::create([
                "id" => 713,
                "prefecture_id" => 3,
                "city_id" => 229,
                "street_id" => 10741,
                "name" => "上米内",
                "hiragana" => "かみよない",
                "katakana" => "カミヨナイ",
                "katakana_half" => "ｶﾐﾖﾅｲ",
                "romaji" => "kamiyonai",
                "memo" => "",
                "latitude" => "39.743984",
                "altitude" => "141.203762",
            ]);
            
            Station::create([
                "id" => 714,
                "prefecture_id" => 3,
                "city_id" => 230,
                "street_id" => 10896,
                "name" => "区界",
                "hiragana" => "くざかい",
                "katakana" => "クザカイ",
                "katakana_half" => "ｸｻﾞｶｲ",
                "romaji" => "kuzakai",
                "memo" => "",
                "latitude" => "39.651607",
                "altitude" => "141.351364",
            ]);
            
            Station::create([
                "id" => 715,
                "prefecture_id" => 3,
                "city_id" => 229,
                "street_id" => 10723,
                "name" => "松草",
                "hiragana" => "まつくさ",
                "katakana" => "マツクサ",
                "katakana_half" => "ﾏﾂｸｻ",
                "romaji" => "matsukusa",
                "memo" => "",
                "latitude" => "39.635889",
                "altitude" => "141.437859",
            ]);
            
            Station::create([
                "id" => 716,
                "prefecture_id" => 3,
                "city_id" => 230,
                "street_id" => 11004,
                "name" => "平津戸",
                "hiragana" => "ひらつと",
                "katakana" => "ヒラツト",
                "katakana_half" => "ﾋﾗﾂﾄ",
                "romaji" => "hiratsuto",
                "memo" => "",
                "latitude" => "39.623308",
                "altitude" => "141.511186",
            ]);
            
            Station::create([
                "id" => 717,
                "prefecture_id" => 3,
                "city_id" => 230,
                "street_id" => 10892,
                "name" => "川内",
                "hiragana" => "かわうち",
                "katakana" => "カワウチ",
                "katakana_half" => "ｶﾜｳﾁ",
                "romaji" => "kawauchi",
                "memo" => "岩手県",
                "latitude" => "39.640807",
                "altitude" => "141.597594",
            ]);
            
            Station::create([
                "id" => 718,
                "prefecture_id" => 3,
                "city_id" => 230,
                "street_id" => 10996,
                "name" => "箱石",
                "hiragana" => "はこいし",
                "katakana" => "ハコイシ",
                "katakana_half" => "ﾊｺｲｼ",
                "romaji" => "hakoishi",
                "memo" => "",
                "latitude" => "39.617005",
                "altitude" => "141.626177",
            ]);
            
            Station::create([
                "id" => 719,
                "prefecture_id" => 3,
                "city_id" => 237,
                "street_id" => null,
                "name" => "陸中川井",
                "hiragana" => "りくちゅうかわい",
                "katakana" => "リクチュウカワイ",
                "katakana_half" => "ﾘｸﾁｭｳｶﾜｲ",
                "romaji" => "rikuchuukawai",
                "memo" => "",
                "latitude" => "39.597258",
                "altitude" => "141.681534",
            ]);
            
            Station::create([
                "id" => 720,
                "prefecture_id" => 3,
                "city_id" => 230,
                "street_id" => 10999,
                "name" => "腹帯",
                "hiragana" => "はらたい",
                "katakana" => "ハラタイ",
                "katakana_half" => "ﾊﾗﾀｲ",
                "romaji" => "haratai",
                "memo" => "",
                "latitude" => "39.604509",
                "altitude" => "141.766999",
            ]);
            
            Station::create([
                "id" => 721,
                "prefecture_id" => 3,
                "city_id" => 230,
                "street_id" => 11018,
                "name" => "茂市",
                "hiragana" => "もいち",
                "katakana" => "モイチ",
                "katakana_half" => "ﾓｲﾁ",
                "romaji" => "moichi",
                "memo" => "",
                "latitude" => "39.620562",
                "altitude" => "141.799190",
            ]);
            
            Station::create([
                "id" => 722,
                "prefecture_id" => 3,
                "city_id" => 230,
                "street_id" => 11001,
                "name" => "蟇目",
                "hiragana" => "ひきめ",
                "katakana" => "ヒキメ",
                "katakana_half" => "ﾋｷﾒ",
                "romaji" => "hikime",
                "memo" => "",
                "latitude" => "39.629507",
                "altitude" => "141.838937",
            ]);
            
            Station::create([
                "id" => 723,
                "prefecture_id" => 3,
                "city_id" => 230,
                "street_id" => 10901,
                "name" => "花原市",
                "hiragana" => "けばらいち",
                "katakana" => "ケバライチ",
                "katakana_half" => "ｹﾊﾞﾗｲﾁ",
                "romaji" => "kebaraichi",
                "memo" => "",
                "latitude" => "39.630396",
                "altitude" => "141.861407",
            ]);
            
            Station::create([
                "id" => 724,
                "prefecture_id" => 3,
                "city_id" => 230,
                "street_id" => 10915,
                "name" => "千徳",
                "hiragana" => "せんとく",
                "katakana" => "セントク",
                "katakana_half" => "ｾﾝﾄｸ",
                "romaji" => "sentoku",
                "memo" => "",
                "latitude" => "39.632286",
                "altitude" => "141.911708",
            ]);
            
            Station::create([
                "id" => 725,
                "prefecture_id" => 3,
                "city_id" => 230,
                "street_id" => null,
                "name" => "宮古",
                "hiragana" => "みやこ",
                "katakana" => "ミヤコ",
                "katakana_half" => "ﾐﾔｺ",
                "romaji" => "miyako",
                "memo" => "",
                "latitude" => "39.640064",
                "altitude" => "141.947538",
            ]);
            
            Station::create([
                "id" => 726,
                "prefecture_id" => 3,
                "city_id" => 230,
                "street_id" => 10917,
                "name" => "磯鶏",
                "hiragana" => "そけい",
                "katakana" => "ソケイ",
                "katakana_half" => "ｿｹｲ",
                "romaji" => "sokei",
                "memo" => "",
                "latitude" => "39.630425",
                "altitude" => "141.961010",
            ]);
            
            Station::create([
                "id" => 727,
                "prefecture_id" => 3,
                "city_id" => 230,
                "street_id" => 10986,
                "name" => "津軽石",
                "hiragana" => "つがるいし",
                "katakana" => "ツガルイシ",
                "katakana_half" => "ﾂｶﾞﾙｲｼ",
                "romaji" => "tsugaruishi",
                "memo" => "",
                "latitude" => "39.581402",
                "altitude" => "141.937820",
            ]);
            
            Station::create([
                "id" => 728,
                "prefecture_id" => 3,
                "city_id" => 253,
                "street_id" => 12619,
                "name" => "豊間根",
                "hiragana" => "とよまね",
                "katakana" => "トヨマネ",
                "katakana_half" => "ﾄﾖﾏﾈ",
                "romaji" => "toyomane",
                "memo" => "",
                "latitude" => "39.534297",
                "altitude" => "141.924767",
            ]);
            
            Station::create([
                "id" => 729,
                "prefecture_id" => 3,
                "city_id" => 237,
                "street_id" => null,
                "name" => "陸中山田",
                "hiragana" => "りくちゅうやまだ",
                "katakana" => "リクチュウヤマダ",
                "katakana_half" => "ﾘｸﾁｭｳﾔﾏﾀﾞ",
                "romaji" => "rikuchuuyamada",
                "memo" => "",
                "latitude" => "39.463416",
                "altitude" => "141.951435",
            ]);
            
            Station::create([
                "id" => 730,
                "prefecture_id" => 3,
                "city_id" => 253,
                "street_id" => 12613,
                "name" => "織笠",
                "hiragana" => "おりかさ",
                "katakana" => "オリカサ",
                "katakana_half" => "ｵﾘｶｻ",
                "romaji" => "orikasa",
                "memo" => "",
                "latitude" => "39.447250",
                "altitude" => "141.959657",
            ]);
            
            Station::create([
                "id" => 731,
                "prefecture_id" => 3,
                "city_id" => 243,
                "street_id" => null,
                "name" => "岩手船越",
                "hiragana" => "いわてふなこし",
                "katakana" => "イワテフナコシ",
                "katakana_half" => "ｲﾜﾃﾌﾅｺｼ",
                "romaji" => "iwatefunakoshi",
                "memo" => "",
                "latitude" => "39.431253",
                "altitude" => "141.974101",
            ]);
            
            Station::create([
                "id" => 732,
                "prefecture_id" => 3,
                "city_id" => 241,
                "street_id" => 12060,
                "name" => "浪板海岸",
                "hiragana" => "なみいたかいがん",
                "katakana" => "ナミイタカイガン",
                "katakana_half" => "ﾅﾐｲﾀｶｲｶﾞﾝ",
                "romaji" => "namiitakaigan",
                "memo" => "",
                "latitude" => "39.383424",
                "altitude" => "141.935051",
            ]);
            
            Station::create([
                "id" => 733,
                "prefecture_id" => 3,
                "city_id" => 252,
                "street_id" => 12598,
                "name" => "吉里吉里",
                "hiragana" => "きりきり",
                "katakana" => "キリキリ",
                "katakana_half" => "ｷﾘｷﾘ",
                "romaji" => "kirikiri",
                "memo" => "",
                "latitude" => "39.369815",
                "altitude" => "141.938663",
            ]);
            
            Station::create([
                "id" => 734,
                "prefecture_id" => 3,
                "city_id" => 252,
                "street_id" => null,
                "name" => "大槌",
                "hiragana" => "おおつち",
                "katakana" => "オオツチ",
                "katakana_half" => "ｵｵﾂﾁ",
                "romaji" => "ootsuchi",
                "memo" => "",
                "latitude" => "39.356760",
                "altitude" => "141.903111",
            ]);
            
            Station::create([
                "id" => 735,
                "prefecture_id" => 3,
                "city_id" => 238,
                "street_id" => 11511,
                "name" => "鵜住居",
                "hiragana" => "うのすまい",
                "katakana" => "ウノスマイ",
                "katakana_half" => "ｳﾉｽﾏｲ",
                "romaji" => "unosumai",
                "memo" => "",
                "latitude" => "39.326651",
                "altitude" => "141.887807",
            ]);
            
            Station::create([
                "id" => 736,
                "prefecture_id" => 3,
                "city_id" => 238,
                "street_id" => 11548,
                "name" => "両石",
                "hiragana" => "りょういし",
                "katakana" => "リョウイシ",
                "katakana_half" => "ﾘｮｳｲｼ",
                "romaji" => "ryouishi",
                "memo" => "",
                "latitude" => "39.308070",
                "altitude" => "141.889030",
            ]);
            
            Station::create([
                "id" => 737,
                "prefecture_id" => 3,
                "city_id" => 238,
                "street_id" => null,
                "name" => "釜石",
                "hiragana" => "かまいし",
                "katakana" => "カマイシ",
                "katakana_half" => "ｶﾏｲｼ",
                "romaji" => "kamaishi",
                "memo" => "",
                "latitude" => "39.273184",
                "altitude" => "141.872617",
            ]);
            
            Station::create([
                "id" => 738,
                "prefecture_id" => 3,
                "city_id" => 232,
                "street_id" => null,
                "name" => "花巻",
                "hiragana" => "はなまき",
                "katakana" => "ハナマキ",
                "katakana_half" => "ﾊﾅﾏｷ",
                "romaji" => "hanamaki",
                "memo" => "",
                "latitude" => "39.393714",
                "altitude" => "141.110258",
            ]);
            
            Station::create([
                "id" => 739,
                "prefecture_id" => 3,
                "city_id" => 232,
                "street_id" => 11088,
                "name" => "似内",
                "hiragana" => "にたない",
                "katakana" => "ニタナイ",
                "katakana_half" => "ﾆﾀﾅｲ",
                "romaji" => "nitanai",
                "memo" => "",
                "latitude" => "39.406797",
                "altitude" => "141.140782",
            ]);
            
            Station::create([
                "id" => 740,
                "prefecture_id" => 3,
                "city_id" => 230,
                "street_id" => 10904,
                "name" => "小山田",
                "hiragana" => "おやまだ",
                "katakana" => "オヤマダ",
                "katakana_half" => "ｵﾔﾏﾀﾞ",
                "romaji" => "oyamada",
                "memo" => "",
                "latitude" => "39.408464",
                "altitude" => "141.194000",
            ]);
            
            Station::create([
                "id" => 741,
                "prefecture_id" => 3,
                "city_id" => 232,
                "street_id" => 11146,
                "name" => "土沢",
                "hiragana" => "つちざわ",
                "katakana" => "ツチザワ",
                "katakana_half" => "ﾂﾁｻﾞﾜ",
                "romaji" => "tsuchizawa",
                "memo" => "",
                "latitude" => "39.383273",
                "altitude" => "141.232442",
            ]);
            
            Station::create([
                "id" => 742,
                "prefecture_id" => 3,
                "city_id" => 232,
                "street_id" => 11149,
                "name" => "晴山",
                "hiragana" => "はるやま",
                "katakana" => "ハルヤマ",
                "katakana_half" => "ﾊﾙﾔﾏ",
                "romaji" => "haruyama",
                "memo" => "",
                "latitude" => "39.366748",
                "altitude" => "141.257552",
            ]);
            
            Station::create([
                "id" => 743,
                "prefecture_id" => 3,
                "city_id" => 243,
                "street_id" => null,
                "name" => "岩根橋",
                "hiragana" => "いわねばし",
                "katakana" => "イワネバシ",
                "katakana_half" => "ｲﾜﾈﾊﾞｼ",
                "romaji" => "iwanebashi",
                "memo" => "",
                "latitude" => "39.355277",
                "altitude" => "141.318854",
            ]);
            
            Station::create([
                "id" => 744,
                "prefecture_id" => 3,
                "city_id" => 235,
                "street_id" => 11357,
                "name" => "宮守",
                "hiragana" => "みやもり",
                "katakana" => "ミヤモリ",
                "katakana_half" => "ﾐﾔﾓﾘ",
                "romaji" => "miyamori",
                "memo" => "",
                "latitude" => "39.351195",
                "altitude" => "141.350212",
            ]);
            
            Station::create([
                "id" => 745,
                "prefecture_id" => 3,
                "city_id" => 256,
                "street_id" => 12693,
                "name" => "柏木平",
                "hiragana" => "かしわぎだいら",
                "katakana" => "カシワギダイラ",
                "katakana_half" => "ｶｼﾜｷﾞﾀﾞｲﾗ",
                "romaji" => "kashiwagidaira",
                "memo" => "",
                "latitude" => "39.306089",
                "altitude" => "141.379878",
            ]);
            
            Station::create([
                "id" => 746,
                "prefecture_id" => 3,
                "city_id" => 235,
                "street_id" => 11357,
                "name" => "鱒沢",
                "hiragana" => "ますざわ",
                "katakana" => "マスザワ",
                "katakana_half" => "ﾏｽｻﾞﾜ",
                "romaji" => "masuzawa",
                "memo" => "",
                "latitude" => "39.300368",
                "altitude" => "141.398988",
            ]);
            
            Station::create([
                "id" => 747,
                "prefecture_id" => 3,
                "city_id" => 230,
                "street_id" => 10933,
                "name" => "荒谷前",
                "hiragana" => "あらやまえ",
                "katakana" => "アラヤマエ",
                "katakana_half" => "ｱﾗﾔﾏｴ",
                "romaji" => "arayamae",
                "memo" => "",
                "latitude" => "39.309812",
                "altitude" => "141.428430",
            ]);
            
            Station::create([
                "id" => 748,
                "prefecture_id" => 3,
                "city_id" => 243,
                "street_id" => null,
                "name" => "岩手二日町",
                "hiragana" => "いわてふつかまち",
                "katakana" => "イワテフツカマチ",
                "katakana_half" => "ｲﾜﾃﾌﾂｶﾏﾁ",
                "romaji" => "iwatefutsukamachi",
                "memo" => "",
                "latitude" => "39.323422",
                "altitude" => "141.455899",
            ]);
            
            Station::create([
                "id" => 749,
                "prefecture_id" => 3,
                "city_id" => 235,
                "street_id" => 11319,
                "name" => "綾織",
                "hiragana" => "あやおり",
                "katakana" => "アヤオリ",
                "katakana_half" => "ｱﾔｵﾘ",
                "romaji" => "ayaori",
                "memo" => "",
                "latitude" => "39.328366",
                "altitude" => "141.476814",
            ]);
            
            Station::create([
                "id" => 750,
                "prefecture_id" => 3,
                "city_id" => 235,
                "street_id" => null,
                "name" => "遠野",
                "hiragana" => "とおの",
                "katakana" => "トオノ",
                "katakana_half" => "ﾄｵﾉ",
                "romaji" => "toono",
                "memo" => "",
                "latitude" => "39.332561",
                "altitude" => "141.530586",
            ]);
            
            Station::create([
                "id" => 751,
                "prefecture_id" => 3,
                "city_id" => 235,
                "street_id" => 11316,
                "name" => "青笹",
                "hiragana" => "あおざさ",
                "katakana" => "アオザサ",
                "katakana_half" => "ｱｵｻﾞｻ",
                "romaji" => "aozasa",
                "memo" => "",
                "latitude" => "39.311481",
                "altitude" => "141.568917",
            ]);
            
            Station::create([
                "id" => 752,
                "prefecture_id" => 3,
                "city_id" => 243,
                "street_id" => null,
                "name" => "岩手上郷",
                "hiragana" => "いわてかみごう",
                "katakana" => "イワテカミゴウ",
                "katakana_half" => "ｲﾜﾃｶﾐｺﾞｳ",
                "romaji" => "iwatekamigou",
                "memo" => "",
                "latitude" => "39.284483",
                "altitude" => "141.585945",
            ]);
            
            Station::create([
                "id" => 753,
                "prefecture_id" => 3,
                "city_id" => 235,
                "street_id" => 11328,
                "name" => "平倉",
                "hiragana" => "ひらくら",
                "katakana" => "ヒラクラ",
                "katakana_half" => "ﾋﾗｸﾗ",
                "romaji" => "hirakura",
                "memo" => "",
                "latitude" => "39.264653",
                "altitude" => "141.595640",
            ]);
            
            Station::create([
                "id" => 754,
                "prefecture_id" => 3,
                "city_id" => 239,
                "street_id" => 11695,
                "name" => "足ケ瀬",
                "hiragana" => "あしがせ",
                "katakana" => "アシガセ",
                "katakana_half" => "ｱｼｶﾞｾ",
                "romaji" => "ashigase",
                "memo" => "",
                "latitude" => "39.254544",
                "altitude" => "141.645886",
            ]);
            
            Station::create([
                "id" => 755,
                "prefecture_id" => 3,
                "city_id" => 251,
                "street_id" => 12587,
                "name" => "上有住",
                "hiragana" => "かみありす",
                "katakana" => "カミアリス",
                "katakana_half" => "ｶﾐｱﾘｽ",
                "romaji" => "kamiarisu",
                "memo" => "",
                "latitude" => "39.242324",
                "altitude" => "141.681745",
            ]);
            
            Station::create([
                "id" => 756,
                "prefecture_id" => 3,
                "city_id" => 237,
                "street_id" => null,
                "name" => "陸中大橋",
                "hiragana" => "りくちゅうおおはし",
                "katakana" => "リクチュウオオハシ",
                "katakana_half" => "ﾘｸﾁｭｳｵｵﾊｼ",
                "romaji" => "rikuchuuoohashi",
                "memo" => "",
                "latitude" => "39.280348",
                "altitude" => "141.718685",
            ]);
            
            Station::create([
                "id" => 757,
                "prefecture_id" => 3,
                "city_id" => 242,
                "street_id" => 12255,
                "name" => "洞泉",
                "hiragana" => "どうせん",
                "katakana" => "ドウセン",
                "katakana_half" => "ﾄﾞｳｾﾝ",
                "romaji" => "dousen",
                "memo" => "",
                "latitude" => "39.250435",
                "altitude" => "141.760182",
            ]);
            
            Station::create([
                "id" => 758,
                "prefecture_id" => 3,
                "city_id" => 229,
                "street_id" => 10723,
                "name" => "松倉",
                "hiragana" => "まつくら",
                "katakana" => "マツクラ",
                "katakana_half" => "ﾏﾂｸﾗ",
                "romaji" => "matsukura",
                "memo" => "",
                "latitude" => "39.256408",
                "altitude" => "141.801651",
            ]);
            
            Station::create([
                "id" => 759,
                "prefecture_id" => 3,
                "city_id" => 238,
                "street_id" => 11524,
                "name" => "小佐野",
                "hiragana" => "こさの",
                "katakana" => "コサノ",
                "katakana_half" => "ｺｻﾉ",
                "romaji" => "kosano",
                "memo" => "",
                "latitude" => "39.264490",
                "altitude" => "141.836536",
            ]);
            
            Station::create([
                "id" => 760,
                "prefecture_id" => 3,
                "city_id" => 233,
                "street_id" => 11254,
                "name" => "柳原",
                "hiragana" => "やなぎはら",
                "katakana" => "ヤナギハラ",
                "katakana_half" => "ﾔﾅｷﾞﾊﾗ",
                "romaji" => "yanagihara",
                "memo" => "岩手県",
                "latitude" => "39.294669",
                "altitude" => "141.111540",
            ]);
            
            Station::create([
                "id" => 761,
                "prefecture_id" => 3,
                "city_id" => 233,
                "street_id" => 11217,
                "name" => "江釣子",
                "hiragana" => "えづりこ",
                "katakana" => "エヅリコ",
                "katakana_half" => "ｴﾂﾞﾘｺ",
                "romaji" => "ezuriko",
                "memo" => "",
                "latitude" => "39.298418",
                "altitude" => "141.075793",
            ]);
            
            Station::create([
                "id" => 762,
                "prefecture_id" => 3,
                "city_id" => 233,
                "street_id" => 11267,
                "name" => "藤根",
                "hiragana" => "ふじね",
                "katakana" => "フジネ",
                "katakana_half" => "ﾌｼﾞﾈ",
                "romaji" => "fujine",
                "memo" => "",
                "latitude" => "39.301056",
                "altitude" => "141.039517",
            ]);
            
            Station::create([
                "id" => 763,
                "prefecture_id" => 3,
                "city_id" => 230,
                "street_id" => 10963,
                "name" => "立川目",
                "hiragana" => "たてかわめ",
                "katakana" => "タテカワメ",
                "katakana_half" => "ﾀﾃｶﾜﾒ",
                "romaji" => "tatekawame",
                "memo" => "",
                "latitude" => "39.307860",
                "altitude" => "140.997188",
            ]);
            
            Station::create([
                "id" => 764,
                "prefecture_id" => 3,
                "city_id" => 233,
                "street_id" => 11269,
                "name" => "横川目",
                "hiragana" => "よこかわめ",
                "katakana" => "ヨコカワメ",
                "katakana_half" => "ﾖｺｶﾜﾒ",
                "romaji" => "yokokawame",
                "memo" => "",
                "latitude" => "39.309165",
                "altitude" => "140.971995",
            ]);
            
            Station::create([
                "id" => 765,
                "prefecture_id" => 3,
                "city_id" => 233,
                "street_id" => 11261,
                "name" => "岩沢",
                "hiragana" => "いわさわ",
                "katakana" => "イワサワ",
                "katakana_half" => "ｲﾜｻﾜ",
                "romaji" => "iwasawa",
                "memo" => "",
                "latitude" => "39.301193",
                "altitude" => "140.931527",
            ]);
            
            Station::create([
                "id" => 766,
                "prefecture_id" => 3,
                "city_id" => 248,
                "street_id" => null,
                "name" => "和賀仙人",
                "hiragana" => "わかせんにん",
                "katakana" => "ワカセンニン",
                "katakana_half" => "ﾜｶｾﾝﾆﾝ",
                "romaji" => "wakasennin",
                "memo" => "",
                "latitude" => "39.308414",
                "altitude" => "140.909862",
            ]);
            
            Station::create([
                "id" => 767,
                "prefecture_id" => 3,
                "city_id" => 229,
                "street_id" => null,
                "name" => "ゆだ錦秋湖",
                "hiragana" => "ゆだきんしゅうこ",
                "katakana" => "ユダキンシュウコ",
                "katakana_half" => "ﾕﾀﾞｷﾝｼｭｳｺ",
                "romaji" => "yudakinshuuko",
                "memo" => "",
                "latitude" => "39.295441",
                "altitude" => "140.835341",
            ]);
            
            Station::create([
                "id" => 768,
                "prefecture_id" => 3,
                "city_id" => 236,
                "street_id" => 11380,
                "name" => "ほっとゆだ",
                "hiragana" => "ほっとゆだ",
                "katakana" => "ホットユダ",
                "katakana_half" => "ﾎｯﾄﾕﾀﾞ",
                "romaji" => "hottoyuda",
                "memo" => "",
                "latitude" => "39.314411",
                "altitude" => "140.775623",
            ]);
            
            Station::create([
                "id" => 769,
                "prefecture_id" => 3,
                "city_id" => 229,
                "street_id" => null,
                "name" => "ゆだ高原",
                "hiragana" => "ゆだこうげん",
                "katakana" => "ユダコウゲン",
                "katakana_half" => "ﾕﾀﾞｺｳｹﾞﾝ",
                "romaji" => "yudakougen",
                "memo" => "",
                "latitude" => "39.301051",
                "altitude" => "140.737071",
            ]);
            
            Station::create([
                "id" => 770,
                "prefecture_id" => 3,
                "city_id" => 236,
                "street_id" => 11467,
                "name" => "真滝",
                "hiragana" => "またき",
                "katakana" => "マタキ",
                "katakana_half" => "ﾏﾀｷ",
                "romaji" => "mataki",
                "memo" => "",
                "latitude" => "38.908211",
                "altitude" => "141.177885",
            ]);
            
            Station::create([
                "id" => 771,
                "prefecture_id" => 3,
                "city_id" => 237,
                "street_id" => null,
                "name" => "陸中門崎",
                "hiragana" => "りくちゅうかんざき",
                "katakana" => "リクチュウカンザキ",
                "katakana_half" => "ﾘｸﾁｭｳｶﾝｻﾞｷ",
                "romaji" => "rikuchuukanzaki",
                "memo" => "",
                "latitude" => "38.916906",
                "altitude" => "141.251129",
            ]);
            
            Station::create([
                "id" => 772,
                "prefecture_id" => 3,
                "city_id" => 243,
                "street_id" => null,
                "name" => "岩ノ下",
                "hiragana" => "いわのした",
                "katakana" => "イワノシタ",
                "katakana_half" => "ｲﾜﾉｼﾀ",
                "romaji" => "iwanoshita",
                "memo" => "",
                "latitude" => "38.947820",
                "altitude" => "141.245489",
            ]);
            
            Station::create([
                "id" => 773,
                "prefecture_id" => 3,
                "city_id" => 237,
                "street_id" => null,
                "name" => "陸中松川",
                "hiragana" => "りくちゅうまつかわ",
                "katakana" => "リクチュウマツカワ",
                "katakana_half" => "ﾘｸﾁｭｳﾏﾂｶﾜ",
                "romaji" => "rikuchuumatsukawa",
                "memo" => "",
                "latitude" => "38.977206",
                "altitude" => "141.238100",
            ]);
            
            Station::create([
                "id" => 774,
                "prefecture_id" => 3,
                "city_id" => 229,
                "street_id" => null,
                "name" => "猊鼻渓",
                "hiragana" => "げいびけい",
                "katakana" => "ゲイビケイ",
                "katakana_half" => "ｹﾞｲﾋﾞｹｲ",
                "romaji" => "geibikei",
                "memo" => "",
                "latitude" => "38.988815",
                "altitude" => "141.253264",
            ]);
            
            Station::create([
                "id" => 775,
                "prefecture_id" => 3,
                "city_id" => 236,
                "street_id" => 11467,
                "name" => "柴宿",
                "hiragana" => "しばじゅく",
                "katakana" => "シバジュク",
                "katakana_half" => "ｼﾊﾞｼﾞｭｸ",
                "romaji" => "shibajuku",
                "memo" => "",
                "latitude" => "38.996815",
                "altitude" => "141.272151",
            ]);
            
            Station::create([
                "id" => 776,
                "prefecture_id" => 3,
                "city_id" => 236,
                "street_id" => 11411,
                "name" => "摺沢",
                "hiragana" => "すりさわ",
                "katakana" => "スリサワ",
                "katakana_half" => "ｽﾘｻﾜ",
                "romaji" => "surisawa",
                "memo" => "",
                "latitude" => "38.995982",
                "altitude" => "141.321092",
            ]);
            
            Station::create([
                "id" => 777,
                "prefecture_id" => 3,
                "city_id" => 236,
                "street_id" => 11402,
                "name" => "千厩",
                "hiragana" => "せんまや",
                "katakana" => "センマヤ",
                "katakana_half" => "ｾﾝﾏﾔ",
                "romaji" => "senmaya",
                "memo" => "",
                "latitude" => "38.924879",
                "altitude" => "141.345816",
            ]);
            
            Station::create([
                "id" => 778,
                "prefecture_id" => 3,
                "city_id" => 236,
                "street_id" => 11405,
                "name" => "小梨",
                "hiragana" => "こなし",
                "katakana" => "コナシ",
                "katakana_half" => "ｺﾅｼ",
                "romaji" => "konashi",
                "memo" => "",
                "latitude" => "38.932434",
                "altitude" => "141.384340",
            ]);
            
            Station::create([
                "id" => 779,
                "prefecture_id" => 3,
                "city_id" => 236,
                "street_id" => 11478,
                "name" => "矢越",
                "hiragana" => "やごし",
                "katakana" => "ヤゴシ",
                "katakana_half" => "ﾔｺﾞｼ",
                "romaji" => "yagoshi",
                "memo" => "",
                "latitude" => "38.935185",
                "altitude" => "141.429113",
            ]);
            
            Station::create([
                "id" => 780,
                "prefecture_id" => 3,
                "city_id" => 236,
                "street_id" => 11476,
                "name" => "折壁",
                "hiragana" => "おりかべ",
                "katakana" => "オリカベ",
                "katakana_half" => "ｵﾘｶﾍﾞ",
                "romaji" => "orikabe",
                "memo" => "",
                "latitude" => "38.939379",
                "altitude" => "141.452195",
            ]);
            
            Station::create([
                "id" => 781,
                "prefecture_id" => 3,
                "city_id" => 229,
                "street_id" => 10794,
                "name" => "新月",
                "hiragana" => "にいつき",
                "katakana" => "ニイツキ",
                "katakana_half" => "ﾆｲﾂｷ",
                "romaji" => "niitsuki",
                "memo" => "",
                "latitude" => "38.915550",
                "altitude" => "141.488887",
            ]);
            
            Station::create([
                "id" => 782,
                "prefecture_id" => 3,
                "city_id" => 237,
                "street_id" => null,
                "name" => "陸前矢作",
                "hiragana" => "りくぜんやはぎ",
                "katakana" => "リクゼンヤハギ",
                "katakana_half" => "ﾘｸｾﾞﾝﾔﾊｷﾞ",
                "romaji" => "rikuzenyahagi",
                "memo" => "",
                "latitude" => "39.026651",
                "altitude" => "141.587874",
            ]);
            
            Station::create([
                "id" => 783,
                "prefecture_id" => 3,
                "city_id" => 237,
                "street_id" => 11504,
                "name" => "竹駒",
                "hiragana" => "たけこま",
                "katakana" => "タケコマ",
                "katakana_half" => "ﾀｹｺﾏ",
                "romaji" => "takekoma",
                "memo" => "",
                "latitude" => "39.033595",
                "altitude" => "141.609733",
            ]);
            
            Station::create([
                "id" => 784,
                "prefecture_id" => 3,
                "city_id" => 237,
                "street_id" => null,
                "name" => "陸前高田",
                "hiragana" => "りくぜんたかた",
                "katakana" => "リクゼンタカタ",
                "katakana_half" => "ﾘｸｾﾞﾝﾀｶﾀ",
                "romaji" => "rikuzentakata",
                "memo" => "",
                "latitude" => "39.014708",
                "altitude" => "141.629260",
            ]);
            
            Station::create([
                "id" => 785,
                "prefecture_id" => 3,
                "city_id" => 229,
                "street_id" => 10721,
                "name" => "脇ノ沢",
                "hiragana" => "わきのさわ",
                "katakana" => "ワキノサワ",
                "katakana_half" => "ﾜｷﾉｻﾜ",
                "romaji" => "wakinosawa",
                "memo" => "",
                "latitude" => "39.010126",
                "altitude" => "141.675645",
            ]);
            
            Station::create([
                "id" => 786,
                "prefecture_id" => 3,
                "city_id" => 232,
                "street_id" => 11129,
                "name" => "小友",
                "hiragana" => "おとも",
                "katakana" => "オトモ",
                "katakana_half" => "ｵﾄﾓ",
                "romaji" => "otomo",
                "memo" => "",
                "latitude" => "38.989018",
                "altitude" => "141.699672",
            ]);
            
            Station::create([
                "id" => 787,
                "prefecture_id" => 3,
                "city_id" => 235,
                "street_id" => 11330,
                "name" => "細浦",
                "hiragana" => "ほそうら",
                "katakana" => "ホソウラ",
                "katakana_half" => "ﾎｿｳﾗ",
                "romaji" => "hosoura",
                "memo" => "",
                "latitude" => "39.015070",
                "altitude" => "141.714114",
            ]);
            
            Station::create([
                "id" => 788,
                "prefecture_id" => 3,
                "city_id" => 253,
                "street_id" => null,
                "name" => "下船渡",
                "hiragana" => "しもふなと",
                "katakana" => "シモフナト",
                "katakana_half" => "ｼﾓﾌﾅﾄ",
                "romaji" => "shimofunato",
                "memo" => "",
                "latitude" => "39.038319",
                "altitude" => "141.721057",
            ]);
            
            Station::create([
                "id" => 789,
                "prefecture_id" => 3,
                "city_id" => 231,
                "street_id" => null,
                "name" => "大船渡",
                "hiragana" => "おおふなと",
                "katakana" => "オオフナト",
                "katakana_half" => "ｵｵﾌﾅﾄ",
                "romaji" => "oofunato",
                "memo" => "",
                "latitude" => "39.063594",
                "altitude" => "141.720778",
            ]);
            
            Station::create([
                "id" => 790,
                "prefecture_id" => 3,
                "city_id" => 229,
                "street_id" => null,
                "name" => "盛",
                "hiragana" => "さかり",
                "katakana" => "サカリ",
                "katakana_half" => "ｻｶﾘ",
                "romaji" => "sakari",
                "memo" => "",
                "latitude" => "39.085813",
                "altitude" => "141.710778",
            ]);
            
            Station::create([
                "id" => 791,
                "prefecture_id" => 3,
                "city_id" => 236,
                "street_id" => 11435,
                "name" => "山ノ目",
                "hiragana" => "やまのめ",
                "katakana" => "ヤマノメ",
                "katakana_half" => "ﾔﾏﾉﾒ",
                "romaji" => "yamanome",
                "memo" => "",
                "latitude" => "38.951234",
                "altitude" => "141.132082",
            ]);
            
            Station::create([
                "id" => 792,
                "prefecture_id" => 3,
                "city_id" => 250,
                "street_id" => null,
                "name" => "平泉",
                "hiragana" => "ひらいずみ",
                "katakana" => "ヒライズミ",
                "katakana_half" => "ﾋﾗｲｽﾞﾐ",
                "romaji" => "hiraizumi",
                "memo" => "",
                "latitude" => "38.988091",
                "altitude" => "141.117748",
            ]);
            
            Station::create([
                "id" => 793,
                "prefecture_id" => 3,
                "city_id" => 241,
                "street_id" => 11989,
                "name" => "前沢",
                "hiragana" => "まえさわ",
                "katakana" => "マエサワ",
                "katakana_half" => "ﾏｴｻﾜ",
                "romaji" => "maesawa",
                "memo" => "",
                "latitude" => "39.049279",
                "altitude" => "141.126245",
            ]);
            
            Station::create([
                "id" => 794,
                "prefecture_id" => 3,
                "city_id" => 237,
                "street_id" => null,
                "name" => "陸中折居",
                "hiragana" => "りくちゅうおりい",
                "katakana" => "リクチュウオリイ",
                "katakana_half" => "ﾘｸﾁｭｳｵﾘｲ",
                "romaji" => "rikuchuuorii",
                "memo" => "",
                "latitude" => "39.093885",
                "altitude" => "141.140935",
            ]);
            
            Station::create([
                "id" => 795,
                "prefecture_id" => 3,
                "city_id" => 230,
                "street_id" => 10974,
                "name" => "水沢",
                "hiragana" => "みずさわ",
                "katakana" => "ミズサワ",
                "katakana_half" => "ﾐｽﾞｻﾜ",
                "romaji" => "mizusawa",
                "memo" => "",
                "latitude" => "39.139325",
                "altitude" => "141.146350",
            ]);
            
            Station::create([
                "id" => 796,
                "prefecture_id" => 3,
                "city_id" => 249,
                "street_id" => null,
                "name" => "金ケ崎",
                "hiragana" => "かねがさき",
                "katakana" => "カネガサキ",
                "katakana_half" => "ｶﾈｶﾞｻｷ",
                "romaji" => "kanegasaki",
                "memo" => "",
                "latitude" => "39.199651",
                "altitude" => "141.112849",
            ]);
            
            Station::create([
                "id" => 797,
                "prefecture_id" => 3,
                "city_id" => 249,
                "street_id" => 12582,
                "name" => "六原",
                "hiragana" => "ろくはら",
                "katakana" => "ロクハラ",
                "katakana_half" => "ﾛｸﾊﾗ",
                "romaji" => "rokuhara",
                "memo" => "",
                "latitude" => "39.227898",
                "altitude" => "141.097738",
            ]);
            
            Station::create([
                "id" => 798,
                "prefecture_id" => 3,
                "city_id" => 233,
                "street_id" => 11253,
                "name" => "村崎野",
                "hiragana" => "むらさきの",
                "katakana" => "ムラサキノ",
                "katakana_half" => "ﾑﾗｻｷﾉ",
                "romaji" => "murasakino",
                "memo" => "",
                "latitude" => "39.322694",
                "altitude" => "141.120343",
            ]);
            
            Station::create([
                "id" => 799,
                "prefecture_id" => 3,
                "city_id" => 232,
                "street_id" => null,
                "name" => "花巻空港",
                "hiragana" => "はなまきくうこう",
                "katakana" => "ハナマキクウコウ",
                "katakana_half" => "ﾊﾅﾏｷｸｳｺｳ",
                "romaji" => "hanamakikuukou",
                "memo" => "東北本線",
                "latitude" => "39.442209",
                "altitude" => "141.127226",
            ]);
            
            Station::create([
                "id" => 800,
                "prefecture_id" => 3,
                "city_id" => 232,
                "street_id" => 11045,
                "name" => "石鳥谷",
                "hiragana" => "いしどりや",
                "katakana" => "イシドリヤ",
                "katakana_half" => "ｲｼﾄﾞﾘﾔ",
                "romaji" => "ishidoriya",
                "memo" => "",
                "latitude" => "39.490899",
                "altitude" => "141.146972",
            ]);
            
            Station::create([
                "id" => 801,
                "prefecture_id" => 3,
                "city_id" => 246,
                "street_id" => 12471,
                "name" => "日詰",
                "hiragana" => "ひづめ",
                "katakana" => "ヒヅメ",
                "katakana_half" => "ﾋﾂﾞﾒ",
                "romaji" => "hizume",
                "memo" => "",
                "latitude" => "39.538450",
                "altitude" => "141.160691",
            ]);
            
            Station::create([
                "id" => 802,
                "prefecture_id" => 3,
                "city_id" => 246,
                "street_id" => 12478,
                "name" => "紫波中央",
                "hiragana" => "しわちゅうおう",
                "katakana" => "シワチュウオウ",
                "katakana_half" => "ｼﾜﾁｭｳｵｳ",
                "romaji" => "shiwachuuou",
                "memo" => "",
                "latitude" => "39.554837",
                "altitude" => "141.159773",
            ]);
            
            Station::create([
                "id" => 803,
                "prefecture_id" => 3,
                "city_id" => 241,
                "street_id" => 11965,
                "name" => "古館",
                "hiragana" => "ふるだて",
                "katakana" => "フルダテ",
                "katakana_half" => "ﾌﾙﾀﾞﾃ",
                "romaji" => "furudate",
                "memo" => "岩手県",
                "latitude" => "39.580612",
                "altitude" => "141.154551",
            ]);
            
            Station::create([
                "id" => 804,
                "prefecture_id" => 3,
                "city_id" => 247,
                "street_id" => 12511,
                "name" => "矢幅",
                "hiragana" => "やはば",
                "katakana" => "ヤハバ",
                "katakana_half" => "ﾔﾊﾊﾞ",
                "romaji" => "yahaba",
                "memo" => "",
                "latitude" => "39.612830",
                "altitude" => "141.147884",
            ]);
            
            Station::create([
                "id" => 805,
                "prefecture_id" => 3,
                "city_id" => 243,
                "street_id" => null,
                "name" => "岩手飯岡",
                "hiragana" => "いわていいおか",
                "katakana" => "イワテイイオカ",
                "katakana_half" => "ｲﾜﾃｲｲｵｶ",
                "romaji" => "iwateiioka",
                "memo" => "",
                "latitude" => "39.653659",
                "altitude" => "141.146215",
            ]);
            
            Station::create([
                "id" => 806,
                "prefecture_id" => 3,
                "city_id" => 229,
                "street_id" => 10783,
                "name" => "仙北町",
                "hiragana" => "せんぼくちょう",
                "katakana" => "センボクチョウ",
                "katakana_half" => "ｾﾝﾎﾞｸﾁｮｳ",
                "romaji" => "senbokuchou",
                "memo" => "",
                "latitude" => "39.687517",
                "altitude" => "141.148880",
            ]);
            
            Station::create([
                "id" => 807,
                "prefecture_id" => 3,
                "city_id" => 236,
                "street_id" => 11444,
                "name" => "油島",
                "hiragana" => "ゆしま",
                "katakana" => "ユシマ",
                "katakana_half" => "ﾕｼﾏ",
                "romaji" => "yushima",
                "memo" => "",
                "latitude" => "38.796973",
                "altitude" => "141.175613",
            ]);
            
            Station::create([
                "id" => 808,
                "prefecture_id" => 3,
                "city_id" => 236,
                "street_id" => 11439,
                "name" => "花泉",
                "hiragana" => "はないずみ",
                "katakana" => "ハナイズミ",
                "katakana_half" => "ﾊﾅｲｽﾞﾐ",
                "romaji" => "hanaizumi",
                "memo" => "",
                "latitude" => "38.833053",
                "altitude" => "141.180166",
            ]);
            
            Station::create([
                "id" => 809,
                "prefecture_id" => 3,
                "city_id" => 229,
                "street_id" => 10720,
                "name" => "清水原",
                "hiragana" => "しみずはら",
                "katakana" => "シミズハラ",
                "katakana_half" => "ｼﾐｽﾞﾊﾗ",
                "romaji" => "shimizuhara",
                "memo" => "",
                "latitude" => "38.854967",
                "altitude" => "141.156473",
            ]);
            
            Station::create([
                "id" => 810,
                "prefecture_id" => 3,
                "city_id" => 229,
                "street_id" => 10814,
                "name" => "長部",
                "hiragana" => "おさべ",
                "katakana" => "オサベ",
                "katakana_half" => "ｵｻﾍﾞ",
                "romaji" => "osabe",
                "memo" => "",
                "latitude" => "38.986100",
                "altitude" => "141.618707",
            ]);
            
            Station::create([
                "id" => 811,
                "prefecture_id" => 3,
                "city_id" => 229,
                "street_id" => null,
                "name" => "奇跡の一本松",
                "hiragana" => "きせきのいっぽんまつ",
                "katakana" => "キセキノイッポンマツ",
                "katakana_half" => "ｷｾｷﾉｲｯﾎﾟﾝﾏﾂ",
                "romaji" => "kisekinoipponmatsu",
                "memo" => "",
                "latitude" => "39.010542",
                "altitude" => "141.623177",
            ]);
            
            Station::create([
                "id" => 812,
                "prefecture_id" => 3,
                "city_id" => 229,
                "street_id" => null,
                "name" => "まちなか陸前高田",
                "hiragana" => "まちなかりくぜんたかた",
                "katakana" => "マチナカリクゼンタカタ",
                "katakana_half" => "ﾏﾁﾅｶﾘｸｾﾞﾝﾀｶﾀ",
                "romaji" => "machinakarikuzentakata",
                "memo" => "",
                "latitude" => "39.015264",
                "altitude" => "141.629816",
            ]);
            
            Station::create([
                "id" => 813,
                "prefecture_id" => 3,
                "city_id" => 237,
                "street_id" => null,
                "name" => "高田高校前",
                "hiragana" => "たかたこうこうまえ",
                "katakana" => "タカタコウコウマエ",
                "katakana_half" => "ﾀｶﾀｺｳｺｳﾏｴ",
                "romaji" => "takatakoukoumae",
                "memo" => "",
                "latitude" => "39.020068",
                "altitude" => "141.640036",
            ]);
            
            Station::create([
                "id" => 814,
                "prefecture_id" => 3,
                "city_id" => 237,
                "street_id" => null,
                "name" => "高田病院",
                "hiragana" => "たかたびょういん",
                "katakana" => "タカタビョウイン",
                "katakana_half" => "ﾀｶﾀﾋﾞｮｳｲﾝ",
                "romaji" => "takatabyouin",
                "memo" => "",
                "latitude" => "39.025541",
                "altitude" => "141.641592",
            ]);
            
            Station::create([
                "id" => 815,
                "prefecture_id" => 3,
                "city_id" => 229,
                "street_id" => null,
                "name" => "碁石海岸口",
                "hiragana" => "ごいしかいがんぐち",
                "katakana" => "ゴイシカイガングチ",
                "katakana_half" => "ｺﾞｲｼｶｲｶﾞﾝｸﾞﾁ",
                "romaji" => "goishikaiganguchi",
                "memo" => "",
                "latitude" => "39.002767",
                "altitude" => "141.711059",
            ]);
            
            Station::create([
                "id" => 816,
                "prefecture_id" => 3,
                "city_id" => 231,
                "street_id" => null,
                "name" => "大船渡魚市場前",
                "hiragana" => "おおふなとうおいちばまえ",
                "katakana" => "オオフナトウオイチバマエ",
                "katakana_half" => "ｵｵﾌﾅﾄｳｵｲﾁﾊﾞﾏｴ",
                "romaji" => "oofunatouoichibamae",
                "memo" => "",
                "latitude" => "39.051400",
                "altitude" => "141.720750",
            ]);
            
            Station::create([
                "id" => 817,
                "prefecture_id" => 3,
                "city_id" => 232,
                "street_id" => 11156,
                "name" => "栃ケ沢公園",
                "hiragana" => "とちがさわこうえん",
                "katakana" => "トチガサワコウエン",
                "katakana_half" => "ﾄﾁｶﾞｻﾜｺｳｴﾝ",
                "romaji" => "tochigasawakouen",
                "memo" => "",
                "latitude" => "39.027040",
                "altitude" => "141.625510",
            ]);
            
            Station::create([
                "id" => 818,
                "prefecture_id" => 3,
                "city_id" => 230,
                "street_id" => 11021,
                "name" => "山口団地",
                "hiragana" => "やまぐちだんち",
                "katakana" => "ヤマグチダンチ",
                "katakana_half" => "ﾔﾏｸﾞﾁﾀﾞﾝﾁ",
                "romaji" => "yamaguchidanchi",
                "memo" => "",
                "latitude" => "39.646313",
                "altitude" => "141.933234",
            ]);
            
            Station::create([
                "id" => 819,
                "prefecture_id" => 3,
                "city_id" => 255,
                "street_id" => 12647,
                "name" => "一の渡",
                "hiragana" => "いちのわたり",
                "katakana" => "イチノワタリ",
                "katakana_half" => "ｲﾁﾉﾜﾀﾘ",
                "romaji" => "ichinowatari",
                "memo" => "",
                "latitude" => "39.686697",
                "altitude" => "141.942592",
            ]);
            
            Station::create([
                "id" => 820,
                "prefecture_id" => 3,
                "city_id" => 230,
                "street_id" => 10909,
                "name" => "佐羽根",
                "hiragana" => "さばね",
                "katakana" => "サバネ",
                "katakana_half" => "ｻﾊﾞﾈ",
                "romaji" => "sabane",
                "memo" => "",
                "latitude" => "39.710972",
                "altitude" => "141.935841",
            ]);
            
            Station::create([
                "id" => 821,
                "prefecture_id" => 3,
                "city_id" => 230,
                "street_id" => 10927,
                "name" => "田老",
                "hiragana" => "たろう",
                "katakana" => "タロウ",
                "katakana_half" => "ﾀﾛｳ",
                "romaji" => "tarou",
                "memo" => "",
                "latitude" => "39.731832",
                "altitude" => "141.964755",
            ]);
            
            Station::create([
                "id" => 822,
                "prefecture_id" => 3,
                "city_id" => 230,
                "street_id" => 10942,
                "name" => "摂待",
                "hiragana" => "せったい",
                "katakana" => "セッタイ",
                "katakana_half" => "ｾｯﾀｲ",
                "romaji" => "settai",
                "memo" => "",
                "latitude" => "39.809462",
                "altitude" => "141.962056",
            ]);
            
            Station::create([
                "id" => 823,
                "prefecture_id" => 3,
                "city_id" => 254,
                "street_id" => null,
                "name" => "岩泉小本",
                "hiragana" => "いわいずみおもと",
                "katakana" => "イワイズミオモト",
                "katakana_half" => "ｲﾜｲｽﾞﾐｵﾓﾄ",
                "romaji" => "iwaizumiomoto",
                "memo" => "",
                "latitude" => "39.842736",
                "altitude" => "141.958417",
            ]);
            
            Station::create([
                "id" => 824,
                "prefecture_id" => 3,
                "city_id" => 255,
                "street_id" => 12659,
                "name" => "島越",
                "hiragana" => "しまのこし",
                "katakana" => "シマノコシ",
                "katakana_half" => "ｼﾏﾉｺｼ",
                "romaji" => "shimanokoshi",
                "memo" => "",
                "latitude" => "39.915645",
                "altitude" => "141.939665",
            ]);
            
            Station::create([
                "id" => 825,
                "prefecture_id" => 3,
                "city_id" => 255,
                "street_id" => null,
                "name" => "田野畑",
                "hiragana" => "たのはた",
                "katakana" => "タノハタ",
                "katakana_half" => "ﾀﾉﾊﾀ",
                "romaji" => "tanohata",
                "memo" => "",
                "latitude" => "39.934115",
                "altitude" => "141.933831",
            ]);
            
            Station::create([
                "id" => 826,
                "prefecture_id" => 3,
                "city_id" => 256,
                "street_id" => null,
                "name" => "普代",
                "hiragana" => "ふだい",
                "katakana" => "フダイ",
                "katakana_half" => "ﾌﾀﾞｲ",
                "romaji" => "fudai",
                "memo" => "",
                "latitude" => "40.002551",
                "altitude" => "141.886138",
            ]);
            
            Station::create([
                "id" => 827,
                "prefecture_id" => 3,
                "city_id" => 256,
                "street_id" => 12700,
                "name" => "白井海岸",
                "hiragana" => "しらいかいがん",
                "katakana" => "シライカイガン",
                "katakana_half" => "ｼﾗｲｶｲｶﾞﾝ",
                "romaji" => "shiraikaigan",
                "memo" => "",
                "latitude" => "40.032576",
                "altitude" => "141.883220",
            ]);
            
            Station::create([
                "id" => 828,
                "prefecture_id" => 3,
                "city_id" => 230,
                "street_id" => 10949,
                "name" => "堀内",
                "hiragana" => "ほりない",
                "katakana" => "ホリナイ",
                "katakana_half" => "ﾎﾘﾅｲ",
                "romaji" => "horinai",
                "memo" => "",
                "latitude" => "40.051824",
                "altitude" => "141.859553",
            ]);
            
            Station::create([
                "id" => 829,
                "prefecture_id" => 3,
                "city_id" => 258,
                "street_id" => null,
                "name" => "野田玉川",
                "hiragana" => "のだたまがわ",
                "katakana" => "ノダタマガワ",
                "katakana_half" => "ﾉﾀﾞﾀﾏｶﾞﾜ",
                "romaji" => "nodatamagawa",
                "memo" => "",
                "latitude" => "40.082680",
                "altitude" => "141.828999",
            ]);
            
            Station::create([
                "id" => 830,
                "prefecture_id" => 3,
                "city_id" => 232,
                "street_id" => 11111,
                "name" => "十府ケ浦海岸",
                "hiragana" => "とふがうらかいがん",
                "katakana" => "トフガウラカイガン",
                "katakana_half" => "ﾄﾌｶﾞｳﾗｶｲｶﾞﾝ",
                "romaji" => "tofugaurakaigan",
                "memo" => "",
                "latitude" => "40.096845",
                "altitude" => "141.824166",
            ]);
            
            Station::create([
                "id" => 831,
                "prefecture_id" => 3,
                "city_id" => 237,
                "street_id" => null,
                "name" => "陸中野田",
                "hiragana" => "りくちゅうのだ",
                "katakana" => "リクチュウノダ",
                "katakana_half" => "ﾘｸﾁｭｳﾉﾀﾞ",
                "romaji" => "rikuchuunoda",
                "memo" => "",
                "latitude" => "40.116038",
                "altitude" => "141.819110",
            ]);
            
            Station::create([
                "id" => 832,
                "prefecture_id" => 3,
                "city_id" => 237,
                "street_id" => null,
                "name" => "陸中宇部",
                "hiragana" => "りくちゅううべ",
                "katakana" => "リクチュウウベ",
                "katakana_half" => "ﾘｸﾁｭｳｳﾍﾞ",
                "romaji" => "rikuchuuube",
                "memo" => "",
                "latitude" => "40.132286",
                "altitude" => "141.785918",
            ]);
            
            Station::create([
                "id" => 833,
                "prefecture_id" => 3,
                "city_id" => 237,
                "street_id" => null,
                "name" => "陸前赤崎",
                "hiragana" => "りくぜんあかさき",
                "katakana" => "リクゼンアカサキ",
                "katakana_half" => "ﾘｸｾﾞﾝｱｶｻｷ",
                "romaji" => "rikuzenakasaki",
                "memo" => "",
                "latitude" => "39.068316",
                "altitude" => "141.741748",
            ]);
            
            Station::create([
                "id" => 834,
                "prefecture_id" => 3,
                "city_id" => 231,
                "street_id" => 11036,
                "name" => "綾里",
                "hiragana" => "りょうり",
                "katakana" => "リョウリ",
                "katakana_half" => "ﾘｮｳﾘ",
                "romaji" => "ryouri",
                "memo" => "",
                "latitude" => "39.054068",
                "altitude" => "141.799383",
            ]);
            
            Station::create([
                "id" => 835,
                "prefecture_id" => 3,
                "city_id" => 229,
                "street_id" => null,
                "name" => "恋し浜",
                "hiragana" => "こいしはま",
                "katakana" => "コイシハマ",
                "katakana_half" => "ｺｲｼﾊﾏ",
                "romaji" => "koishihama",
                "memo" => "",
                "latitude" => "39.074399",
                "altitude" => "141.816103",
            ]);
            
            Station::create([
                "id" => 836,
                "prefecture_id" => 3,
                "city_id" => 229,
                "street_id" => null,
                "name" => "甫嶺",
                "hiragana" => "ほれい",
                "katakana" => "ホレイ",
                "katakana_half" => "ﾎﾚｲ",
                "romaji" => "horei",
                "memo" => "",
                "latitude" => "39.093231",
                "altitude" => "141.806769",
            ]);
            
            Station::create([
                "id" => 837,
                "prefecture_id" => 3,
                "city_id" => 231,
                "street_id" => 11034,
                "name" => "三陸",
                "hiragana" => "さんりく",
                "katakana" => "サンリク",
                "katakana_half" => "ｻﾝﾘｸ",
                "romaji" => "sanriku",
                "memo" => "",
                "latitude" => "39.117201",
                "altitude" => "141.809962",
            ]);
            
            Station::create([
                "id" => 838,
                "prefecture_id" => 3,
                "city_id" => 231,
                "street_id" => 11035,
                "name" => "吉浜",
                "hiragana" => "よしはま",
                "katakana" => "ヨシハマ",
                "katakana_half" => "ﾖｼﾊﾏ",
                "romaji" => "yoshihama",
                "memo" => "岩手県",
                "latitude" => "39.151086",
                "altitude" => "141.836347",
            ]);
            
            Station::create([
                "id" => 839,
                "prefecture_id" => 3,
                "city_id" => 238,
                "street_id" => 11535,
                "name" => "唐丹",
                "hiragana" => "とうに",
                "katakana" => "トウニ",
                "katakana_half" => "ﾄｳﾆ",
                "romaji" => "touni",
                "memo" => "",
                "latitude" => "39.201776",
                "altitude" => "141.861287",
            ]);
            
            Station::create([
                "id" => 840,
                "prefecture_id" => 3,
                "city_id" => 238,
                "street_id" => 11543,
                "name" => "平田",
                "hiragana" => "へいた",
                "katakana" => "ヘイタ",
                "katakana_half" => "ﾍｲﾀ",
                "romaji" => "heita",
                "memo" => "岩手県",
                "latitude" => "39.245549",
                "altitude" => "141.886228",
            ]);
            
            Station::create([
                "id" => 841,
                "prefecture_id" => 3,
                "city_id" => 243,
                "street_id" => null,
                "name" => "岩手川口",
                "hiragana" => "いわてかわぐち",
                "katakana" => "イワテカワグチ",
                "katakana_half" => "ｲﾜﾃｶﾜｸﾞﾁ",
                "romaji" => "iwatekawaguchi",
                "memo" => "",
                "latitude" => "39.918910",
                "altitude" => "141.199254",
            ]);
            
            Station::create([
                "id" => 842,
                "prefecture_id" => 3,
                "city_id" => 245,
                "street_id" => 12458,
                "name" => "御堂",
                "hiragana" => "みどう",
                "katakana" => "ミドウ",
                "katakana_half" => "ﾐﾄﾞｳ",
                "romaji" => "midou",
                "memo" => "",
                "latitude" => "40.004345",
                "altitude" => "141.237107",
            ]);
            
            Station::create([
                "id" => 843,
                "prefecture_id" => 3,
                "city_id" => 261,
                "street_id" => 12768,
                "name" => "奥中山高原",
                "hiragana" => "おくなかやまこうげん",
                "katakana" => "オクナカヤマコウゲン",
                "katakana_half" => "ｵｸﾅｶﾔﾏｺｳｹﾞﾝ",
                "romaji" => "okunakayamakougen",
                "memo" => "",
                "latitude" => "40.066394",
                "altitude" => "141.228689",
            ]);
            
            Station::create([
                "id" => 844,
                "prefecture_id" => 3,
                "city_id" => 248,
                "street_id" => 12538,
                "name" => "小繋",
                "hiragana" => "こつなぎ",
                "katakana" => "コツナギ",
                "katakana_half" => "ｺﾂﾅｷﾞ",
                "romaji" => "kotsunagi",
                "memo" => "",
                "latitude" => "40.123138",
                "altitude" => "141.260378",
            ]);
            
            Station::create([
                "id" => 845,
                "prefecture_id" => 3,
                "city_id" => 261,
                "street_id" => 12772,
                "name" => "小鳥谷",
                "hiragana" => "こずや",
                "katakana" => "コズヤ",
                "katakana_half" => "ｺｽﾞﾔ",
                "romaji" => "kozuya",
                "memo" => "",
                "latitude" => "40.170995",
                "altitude" => "141.307622",
            ]);
            
            Station::create([
                "id" => 846,
                "prefecture_id" => 3,
                "city_id" => 261,
                "street_id" => null,
                "name" => "一戸",
                "hiragana" => "いちのへ",
                "katakana" => "イチノヘ",
                "katakana_half" => "ｲﾁﾉﾍ",
                "romaji" => "ichinohe",
                "memo" => "",
                "latitude" => "40.210074",
                "altitude" => "141.297315",
            ]);
            
            Station::create([
                "id" => 847,
                "prefecture_id" => 3,
                "city_id" => 239,
                "street_id" => 11554,
                "name" => "斗米",
                "hiragana" => "とまい",
                "katakana" => "トマイ",
                "katakana_half" => "ﾄﾏｲ",
                "romaji" => "tomai",
                "memo" => "",
                "latitude" => "40.285149",
                "altitude" => "141.290896",
            ]);
            
            Station::create([
                "id" => 848,
                "prefecture_id" => 3,
                "city_id" => 239,
                "street_id" => 11555,
                "name" => "金田一温泉",
                "hiragana" => "きんたいちおんせん",
                "katakana" => "キンタイチオンセン",
                "katakana_half" => "ｷﾝﾀｲﾁｵﾝｾﾝ",
                "romaji" => "kintaichionsen",
                "memo" => "",
                "latitude" => "40.322923",
                "altitude" => "141.303727",
            ]);
            
    }
}
