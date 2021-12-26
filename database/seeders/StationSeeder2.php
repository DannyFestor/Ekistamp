<?php
namespace Database\Seeders;

use App\Models\Station;
use Illuminate\Database\Seeder;

class StationSeeder2 extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        
            Station::create([
                "id" => 520,
                "prefecture_id" => 2,
                "city_id" => 191,
                "street_id" => null,
                "name" => "八戸",
                "hiragana" => "はちのへ",
                "katakana" => "ハチノヘ",
                "katakana_half" => "ﾊﾁﾉﾍ",
                "romaji" => "hachinohe",
                "memo" => "",
                "latitude" => "40.509100",
                "altitude" => "141.431291",
            ]);
            
            Station::create([
                "id" => 521,
                "prefecture_id" => 2,
                "city_id" => 213,
                "street_id" => null,
                "name" => "七戸十和田",
                "hiragana" => "しちのへとわだ",
                "katakana" => "シチノヘトワダ",
                "katakana_half" => "ｼﾁﾉﾍﾄﾜﾀﾞ",
                "romaji" => "shichinohetowada",
                "memo" => "",
                "latitude" => "40.719934",
                "altitude" => "141.153943",
            ]);
            
            Station::create([
                "id" => 522,
                "prefecture_id" => 2,
                "city_id" => 189,
                "street_id" => null,
                "name" => "新青森",
                "hiragana" => "しんあおもり",
                "katakana" => "シンアオモリ",
                "katakana_half" => "ｼﾝｱｵﾓﾘ",
                "romaji" => "shinaomori",
                "memo" => "",
                "latitude" => "40.827415",
                "altitude" => "140.693421",
            ]);
            
            Station::create([
                "id" => 523,
                "prefecture_id" => 2,
                "city_id" => 204,
                "street_id" => 9732,
                "name" => "大間越",
                "hiragana" => "おおまごし",
                "katakana" => "オオマゴシ",
                "katakana_half" => "ｵｵﾏｺﾞｼ",
                "romaji" => "oomagoshi",
                "memo" => "",
                "latitude" => "40.492354",
                "altitude" => "139.950081",
            ]);
            
            Station::create([
                "id" => 524,
                "prefecture_id" => 2,
                "city_id" => 189,
                "street_id" => 8317,
                "name" => "白神岳登山口",
                "hiragana" => "しらかみだけとざんぐち",
                "katakana" => "シラカミダケトザングチ",
                "katakana_half" => "ｼﾗｶﾐﾀﾞｹﾄｻﾞﾝｸﾞﾁ",
                "romaji" => "shirakamidaketozanguchi",
                "memo" => "",
                "latitude" => "40.513490",
                "altitude" => "139.950330",
            ]);
            
            Station::create([
                "id" => 525,
                "prefecture_id" => 2,
                "city_id" => 204,
                "street_id" => 9748,
                "name" => "松神",
                "hiragana" => "まつかみ",
                "katakana" => "マツカミ",
                "katakana_half" => "ﾏﾂｶﾐ",
                "romaji" => "matsukami",
                "memo" => "",
                "latitude" => "40.535183",
                "altitude" => "139.946524",
            ]);
            
            Station::create([
                "id" => 526,
                "prefecture_id" => 2,
                "city_id" => 194,
                "street_id" => 8980,
                "name" => "十二湖",
                "hiragana" => "じゅうにこ",
                "katakana" => "ジュウニコ",
                "katakana_half" => "ｼﾞｭｳﾆｺ",
                "romaji" => "juuniko",
                "memo" => "",
                "latitude" => "40.551486",
                "altitude" => "139.941996",
            ]);
            
            Station::create([
                "id" => 527,
                "prefecture_id" => 2,
                "city_id" => 189,
                "street_id" => null,
                "name" => "陸奥岩崎",
                "hiragana" => "むついわさき",
                "katakana" => "ムツイワサキ",
                "katakana_half" => "ﾑﾂｲﾜｻｷ",
                "romaji" => "mutsuiwasaki",
                "memo" => "",
                "latitude" => "40.583343",
                "altitude" => "139.924218",
            ]);
            
            Station::create([
                "id" => 528,
                "prefecture_id" => 2,
                "city_id" => 189,
                "street_id" => null,
                "name" => "陸奥沢辺",
                "hiragana" => "むつさわべ",
                "katakana" => "ムツサワベ",
                "katakana_half" => "ﾑﾂｻﾜﾍﾞ",
                "romaji" => "mutsusawabe",
                "memo" => "",
                "latitude" => "40.586177",
                "altitude" => "139.894332",
            ]);
            
            Station::create([
                "id" => 529,
                "prefecture_id" => 2,
                "city_id" => 224,
                "street_id" => 10520,
                "name" => "ウェスパ椿山",
                "hiragana" => "うぇすぱつばきやま",
                "katakana" => "ウェスパツバキヤマ",
                "katakana_half" => "ｳｪｽﾊﾟﾂﾊﾞｷﾔﾏ",
                "romaji" => "uesupatsubakiyama",
                "memo" => "",
                "latitude" => "40.593537",
                "altitude" => "139.871278",
            ]);
            
            Station::create([
                "id" => 530,
                "prefecture_id" => 2,
                "city_id" => 189,
                "street_id" => null,
                "name" => "艫作",
                "hiragana" => "へなし",
                "katakana" => "ヘナシ",
                "katakana_half" => "ﾍﾅｼ",
                "romaji" => "henashi",
                "memo" => "",
                "latitude" => "40.608423",
                "altitude" => "139.864944",
            ]);
            
            Station::create([
                "id" => 531,
                "prefecture_id" => 2,
                "city_id" => 204,
                "street_id" => 9751,
                "name" => "横磯",
                "hiragana" => "よこいそ",
                "katakana" => "ヨコイソ",
                "katakana_half" => "ﾖｺｲｿ",
                "romaji" => "yokoiso",
                "memo" => "",
                "latitude" => "40.629949",
                "altitude" => "139.890913",
            ]);
            
            Station::create([
                "id" => 532,
                "prefecture_id" => 2,
                "city_id" => 204,
                "street_id" => null,
                "name" => "深浦",
                "hiragana" => "ふかうら",
                "katakana" => "フカウラ",
                "katakana_half" => "ﾌｶｳﾗ",
                "romaji" => "fukaura",
                "memo" => "",
                "latitude" => "40.650281",
                "altitude" => "139.929547",
            ]);
            
            Station::create([
                "id" => 533,
                "prefecture_id" => 2,
                "city_id" => 204,
                "street_id" => 9745,
                "name" => "広戸",
                "hiragana" => "ひろと",
                "katakana" => "ヒロト",
                "katakana_half" => "ﾋﾛﾄ",
                "romaji" => "hiroto",
                "memo" => "",
                "latitude" => "40.674279",
                "altitude" => "139.955600",
            ]);
            
            Station::create([
                "id" => 534,
                "prefecture_id" => 2,
                "city_id" => 204,
                "street_id" => 9731,
                "name" => "追良瀬",
                "hiragana" => "おいらせ",
                "katakana" => "オイラセ",
                "katakana_half" => "ｵｲﾗｾ",
                "romaji" => "oirase",
                "memo" => "",
                "latitude" => "40.686056",
                "altitude" => "139.970320",
            ]);
            
            Station::create([
                "id" => 535,
                "prefecture_id" => 2,
                "city_id" => 204,
                "street_id" => 9743,
                "name" => "驫木",
                "hiragana" => "とどろき",
                "katakana" => "トドロキ",
                "katakana_half" => "ﾄﾄﾞﾛｷ",
                "romaji" => "todoroki",
                "memo" => "",
                "latitude" => "40.707054",
                "altitude" => "139.982874",
            ]);
            
            Station::create([
                "id" => 536,
                "prefecture_id" => 2,
                "city_id" => 204,
                "street_id" => 9733,
                "name" => "風合瀬",
                "hiragana" => "かそせ",
                "katakana" => "カソセ",
                "katakana_half" => "ｶｿｾ",
                "romaji" => "kasose",
                "memo" => "",
                "latitude" => "40.732107",
                "altitude" => "139.994511",
            ]);
            
            Station::create([
                "id" => 537,
                "prefecture_id" => 2,
                "city_id" => 207,
                "street_id" => null,
                "name" => "大戸瀬",
                "hiragana" => "おおどせ",
                "katakana" => "オオドセ",
                "katakana_half" => "ｵｵﾄﾞｾ",
                "romaji" => "oodose",
                "memo" => "",
                "latitude" => "40.759243",
                "altitude" => "140.033367",
            ]);
            
            Station::create([
                "id" => 538,
                "prefecture_id" => 2,
                "city_id" => 189,
                "street_id" => 8255,
                "name" => "千畳敷",
                "hiragana" => "せんじょうじき",
                "katakana" => "センジョウジキ",
                "katakana_half" => "ｾﾝｼﾞｮｳｼﾞｷ",
                "romaji" => "senjoujiki",
                "memo" => "",
                "latitude" => "40.767660",
                "altitude" => "140.054754",
            ]);
            
            Station::create([
                "id" => 539,
                "prefecture_id" => 2,
                "city_id" => 204,
                "street_id" => 9735,
                "name" => "北金ケ沢",
                "hiragana" => "きたかねがさわ",
                "katakana" => "キタカネガサワ",
                "katakana_half" => "ｷﾀｶﾈｶﾞｻﾜ",
                "romaji" => "kitakanegasawa",
                "memo" => "",
                "latitude" => "40.746024",
                "altitude" => "140.095141",
            ]);
            
            Station::create([
                "id" => 540,
                "prefecture_id" => 2,
                "city_id" => 189,
                "street_id" => null,
                "name" => "陸奥柳田",
                "hiragana" => "むつやなぎた",
                "katakana" => "ムツヤナギタ",
                "katakana_half" => "ﾑﾂﾔﾅｷﾞﾀ",
                "romaji" => "mutsuyanagita",
                "memo" => "",
                "latitude" => "40.740525",
                "altitude" => "140.123305",
            ]);
            
            Station::create([
                "id" => 541,
                "prefecture_id" => 2,
                "city_id" => 189,
                "street_id" => null,
                "name" => "陸奥赤石",
                "hiragana" => "むつあかいし",
                "katakana" => "ムツアカイシ",
                "katakana_half" => "ﾑﾂｱｶｲｼ",
                "romaji" => "mutsuakaishi",
                "memo" => "",
                "latitude" => "40.761690",
                "altitude" => "140.162135",
            ]);
            
            Station::create([
                "id" => 542,
                "prefecture_id" => 2,
                "city_id" => 203,
                "street_id" => null,
                "name" => "鰺ケ沢",
                "hiragana" => "あじがさわ",
                "katakana" => "アジガサワ",
                "katakana_half" => "ｱｼﾞｶﾞｻﾜ",
                "romaji" => "ajigasawa",
                "memo" => "",
                "latitude" => "40.775272",
                "altitude" => "140.220601",
            ]);
            
            Station::create([
                "id" => 543,
                "prefecture_id" => 2,
                "city_id" => 212,
                "street_id" => 9972,
                "name" => "鳴沢",
                "hiragana" => "なるさわ",
                "katakana" => "ナルサワ",
                "katakana_half" => "ﾅﾙｻﾜ",
                "romaji" => "narusawa",
                "memo" => "",
                "latitude" => "40.782412",
                "altitude" => "140.267625",
            ]);
            
            Station::create([
                "id" => 544,
                "prefecture_id" => 2,
                "city_id" => 197,
                "street_id" => 9180,
                "name" => "越水",
                "hiragana" => "こしみず",
                "katakana" => "コシミズ",
                "katakana_half" => "ｺｼﾐｽﾞ",
                "romaji" => "koshimizu",
                "memo" => "",
                "latitude" => "40.787300",
                "altitude" => "140.298622",
            ]);
            
            Station::create([
                "id" => 545,
                "prefecture_id" => 2,
                "city_id" => 189,
                "street_id" => null,
                "name" => "陸奥森田",
                "hiragana" => "むつもりた",
                "katakana" => "ムツモリタ",
                "katakana_half" => "ﾑﾂﾓﾘﾀ",
                "romaji" => "mutsumorita",
                "memo" => "",
                "latitude" => "40.781719",
                "altitude" => "140.338896",
            ]);
            
            Station::create([
                "id" => 546,
                "prefecture_id" => 2,
                "city_id" => 197,
                "street_id" => 9239,
                "name" => "中田",
                "hiragana" => "なかた",
                "katakana" => "ナカタ",
                "katakana_half" => "ﾅｶﾀ",
                "romaji" => "nakata",
                "memo" => "青森県",
                "latitude" => "40.787413",
                "altitude" => "140.364561",
            ]);
            
            Station::create([
                "id" => 547,
                "prefecture_id" => 2,
                "city_id" => 197,
                "street_id" => 9165,
                "name" => "木造",
                "hiragana" => "きづくり",
                "katakana" => "キヅクリ",
                "katakana_half" => "ｷﾂﾞｸﾘ",
                "romaji" => "kizukuri",
                "memo" => "",
                "latitude" => "40.802412",
                "altitude" => "140.388225",
            ]);
            
            Station::create([
                "id" => 548,
                "prefecture_id" => 2,
                "city_id" => 193,
                "street_id" => null,
                "name" => "五所川原",
                "hiragana" => "ごしょがわら",
                "katakana" => "ゴショガワラ",
                "katakana_half" => "ｺﾞｼｮｶﾞﾜﾗ",
                "romaji" => "goshogawara",
                "memo" => "",
                "latitude" => "40.808829",
                "altitude" => "140.447830",
            ]);
            
            Station::create([
                "id" => 549,
                "prefecture_id" => 2,
                "city_id" => 189,
                "street_id" => null,
                "name" => "陸奥鶴田",
                "hiragana" => "むつつるだ",
                "katakana" => "ムツツルダ",
                "katakana_half" => "ﾑﾂﾂﾙﾀﾞ",
                "romaji" => "mutsutsuruda",
                "memo" => "",
                "latitude" => "40.757306",
                "altitude" => "140.435251",
            ]);
            
            Station::create([
                "id" => 550,
                "prefecture_id" => 2,
                "city_id" => 197,
                "street_id" => 9195,
                "name" => "鶴泊",
                "hiragana" => "つるどまり",
                "katakana" => "ツルドマリ",
                "katakana_half" => "ﾂﾙﾄﾞﾏﾘ",
                "romaji" => "tsurudomari",
                "memo" => "",
                "latitude" => "40.735919",
                "altitude" => "140.437530",
            ]);
            
            Station::create([
                "id" => 551,
                "prefecture_id" => 2,
                "city_id" => 209,
                "street_id" => null,
                "name" => "板柳",
                "hiragana" => "いたやなぎ",
                "katakana" => "イタヤナギ",
                "katakana_half" => "ｲﾀﾔﾅｷﾞ",
                "romaji" => "itayanagi",
                "memo" => "",
                "latitude" => "40.697286",
                "altitude" => "140.461918",
            ]);
            
            Station::create([
                "id" => 552,
                "prefecture_id" => 2,
                "city_id" => 206,
                "street_id" => 9780,
                "name" => "林崎",
                "hiragana" => "はやしざき",
                "katakana" => "ハヤシザキ",
                "katakana_half" => "ﾊﾔｼｻﾞｷ",
                "romaji" => "hayashizaki",
                "memo" => "",
                "latitude" => "40.675344",
                "altitude" => "140.480334",
            ]);
            
            Station::create([
                "id" => 553,
                "prefecture_id" => 2,
                "city_id" => 206,
                "street_id" => null,
                "name" => "藤崎",
                "hiragana" => "ふじさき",
                "katakana" => "フジサキ",
                "katakana_half" => "ﾌｼﾞｻｷ",
                "romaji" => "fujisaki",
                "memo" => "青森県",
                "latitude" => "40.653568",
                "altitude" => "140.500167",
            ]);
            
            Station::create([
                "id" => 554,
                "prefecture_id" => 2,
                "city_id" => 208,
                "street_id" => 9816,
                "name" => "川部",
                "hiragana" => "かわべ",
                "katakana" => "カワベ",
                "katakana_half" => "ｶﾜﾍﾞ",
                "romaji" => "kawabe",
                "memo" => "",
                "latitude" => "40.647014",
                "altitude" => "140.521499",
            ]);
            
            Station::create([
                "id" => 555,
                "prefecture_id" => 2,
                "city_id" => 190,
                "street_id" => 8530,
                "name" => "撫牛子",
                "hiragana" => "ないじょうし",
                "katakana" => "ナイジョウシ",
                "katakana_half" => "ﾅｲｼﾞｮｳｼ",
                "romaji" => "naijoushi",
                "memo" => "",
                "latitude" => "40.621572",
                "altitude" => "140.497696",
            ]);
            
            Station::create([
                "id" => 556,
                "prefecture_id" => 2,
                "city_id" => 190,
                "street_id" => null,
                "name" => "弘前",
                "hiragana" => "ひろさき",
                "katakana" => "ヒロサキ",
                "katakana_half" => "ﾋﾛｻｷ",
                "romaji" => "hirosaki",
                "memo" => "",
                "latitude" => "40.599713",
                "altitude" => "140.485032",
            ]);
            
            Station::create([
                "id" => 557,
                "prefecture_id" => 2,
                "city_id" => 189,
                "street_id" => null,
                "name" => "青森",
                "hiragana" => "あおもり",
                "katakana" => "アオモリ",
                "katakana_half" => "ｱｵﾓﾘ",
                "romaji" => "aomori",
                "memo" => "",
                "latitude" => "40.829360",
                "altitude" => "140.734251",
            ]);
            
            Station::create([
                "id" => 558,
                "prefecture_id" => 2,
                "city_id" => 189,
                "street_id" => 8200,
                "name" => "油川",
                "hiragana" => "あぶらかわ",
                "katakana" => "アブラカワ",
                "katakana_half" => "ｱﾌﾞﾗｶﾜ",
                "romaji" => "aburakawa",
                "memo" => "",
                "latitude" => "40.856856",
                "altitude" => "140.690503",
            ]);
            
            Station::create([
                "id" => 559,
                "prefecture_id" => 2,
                "city_id" => 199,
                "street_id" => null,
                "name" => "津軽宮田",
                "hiragana" => "つがるみやた",
                "katakana" => "ツガルミヤタ",
                "katakana_half" => "ﾂｶﾞﾙﾐﾔﾀ",
                "romaji" => "tsugarumiyata",
                "memo" => "",
                "latitude" => "40.887130",
                "altitude" => "140.674392",
            ]);
            
            Station::create([
                "id" => 560,
                "prefecture_id" => 2,
                "city_id" => 189,
                "street_id" => 8218,
                "name" => "奥内",
                "hiragana" => "おくない",
                "katakana" => "オクナイ",
                "katakana_half" => "ｵｸﾅｲ",
                "romaji" => "okunai",
                "memo" => "",
                "latitude" => "40.903240",
                "altitude" => "140.672141",
            ]);
            
            Station::create([
                "id" => 561,
                "prefecture_id" => 2,
                "city_id" => 189,
                "street_id" => 8325,
                "name" => "左堰",
                "hiragana" => "ひだりせき",
                "katakana" => "ヒダリセキ",
                "katakana_half" => "ﾋﾀﾞﾘｾｷ",
                "romaji" => "hidariseki",
                "memo" => "",
                "latitude" => "40.917682",
                "altitude" => "140.665724",
            ]);
            
            Station::create([
                "id" => 562,
                "prefecture_id" => 2,
                "city_id" => 189,
                "street_id" => 8206,
                "name" => "後潟",
                "hiragana" => "うしろがた",
                "katakana" => "ウシロガタ",
                "katakana_half" => "ｳｼﾛｶﾞﾀ",
                "romaji" => "ushirogata",
                "memo" => "",
                "latitude" => "40.931292",
                "altitude" => "140.662308",
            ]);
            
            Station::create([
                "id" => 563,
                "prefecture_id" => 2,
                "city_id" => 201,
                "street_id" => 9644,
                "name" => "中沢",
                "hiragana" => "なかさわ",
                "katakana" => "ナカサワ",
                "katakana_half" => "ﾅｶｻﾜ",
                "romaji" => "nakasawa",
                "memo" => "",
                "latitude" => "40.949262",
                "altitude" => "140.655974",
            ]);
            
            Station::create([
                "id" => 564,
                "prefecture_id" => 2,
                "city_id" => 201,
                "street_id" => null,
                "name" => "蓬田",
                "hiragana" => "よもぎた",
                "katakana" => "ヨモギタ",
                "katakana_half" => "ﾖﾓｷﾞﾀ",
                "romaji" => "yomogita",
                "memo" => "",
                "latitude" => "40.969176",
                "altitude" => "140.654417",
            ]);
            
            Station::create([
                "id" => 565,
                "prefecture_id" => 2,
                "city_id" => 201,
                "street_id" => 9642,
                "name" => "郷沢",
                "hiragana" => "ごうさわ",
                "katakana" => "ゴウサワ",
                "katakana_half" => "ｺﾞｳｻﾜ",
                "romaji" => "gousawa",
                "memo" => "",
                "latitude" => "40.987675",
                "altitude" => "140.652194",
            ]);
            
            Station::create([
                "id" => 566,
                "prefecture_id" => 2,
                "city_id" => 201,
                "street_id" => 9643,
                "name" => "瀬辺地",
                "hiragana" => "せへじ",
                "katakana" => "セヘジ",
                "katakana_half" => "ｾﾍｼﾞ",
                "romaji" => "seheji",
                "memo" => "",
                "latitude" => "41.007755",
                "altitude" => "140.648194",
            ]);
            
            Station::create([
                "id" => 567,
                "prefecture_id" => 2,
                "city_id" => 202,
                "street_id" => 9649,
                "name" => "蟹田",
                "hiragana" => "かにた",
                "katakana" => "カニタ",
                "katakana_half" => "ｶﾆﾀ",
                "romaji" => "kanita",
                "memo" => "",
                "latitude" => "41.038280",
                "altitude" => "140.642554",
            ]);
            
            Station::create([
                "id" => 568,
                "prefecture_id" => 2,
                "city_id" => 212,
                "street_id" => 9967,
                "name" => "中小国",
                "hiragana" => "なかおぐに",
                "katakana" => "ナカオグニ",
                "katakana_half" => "ﾅｶｵｸﾞﾆ",
                "romaji" => "nakaoguni",
                "memo" => "",
                "latitude" => "41.051556",
                "altitude" => "140.596807",
            ]);
            
            Station::create([
                "id" => 569,
                "prefecture_id" => 2,
                "city_id" => 196,
                "street_id" => 9074,
                "name" => "大平",
                "hiragana" => "おおだい",
                "katakana" => "オオダイ",
                "katakana_half" => "ｵｵﾀﾞｲ",
                "romaji" => "oodai",
                "memo" => "",
                "latitude" => "41.065886",
                "altitude" => "140.559476",
            ]);
            
            Station::create([
                "id" => 570,
                "prefecture_id" => 2,
                "city_id" => 199,
                "street_id" => null,
                "name" => "津軽二股",
                "hiragana" => "つがるふたまた",
                "katakana" => "ツガルフタマタ",
                "katakana_half" => "ﾂｶﾞﾙﾌﾀﾏﾀ",
                "romaji" => "tsugarufutamata",
                "memo" => "",
                "latitude" => "41.145850",
                "altitude" => "140.514059",
            ]);
            
            Station::create([
                "id" => 571,
                "prefecture_id" => 2,
                "city_id" => 200,
                "street_id" => 9631,
                "name" => "大川平",
                "hiragana" => "おおかわだい",
                "katakana" => "オオカワダイ",
                "katakana_half" => "ｵｵｶﾜﾀﾞｲ",
                "romaji" => "ookawadai",
                "memo" => "",
                "latitude" => "41.163125",
                "altitude" => "140.507615",
            ]);
            
            Station::create([
                "id" => 572,
                "prefecture_id" => 2,
                "city_id" => 200,
                "street_id" => null,
                "name" => "今別",
                "hiragana" => "いまべつ",
                "katakana" => "イマベツ",
                "katakana_half" => "ｲﾏﾍﾞﾂ",
                "romaji" => "imabetsu",
                "memo" => "",
                "latitude" => "41.179596",
                "altitude" => "140.490922",
            ]);
            
            Station::create([
                "id" => 573,
                "prefecture_id" => 2,
                "city_id" => 199,
                "street_id" => null,
                "name" => "津軽浜名",
                "hiragana" => "つがるはまな",
                "katakana" => "ツガルハマナ",
                "katakana_half" => "ﾂｶﾞﾙﾊﾏﾅ",
                "romaji" => "tsugaruhamana",
                "memo" => "",
                "latitude" => "41.180707",
                "altitude" => "140.472034",
            ]);
            
            Station::create([
                "id" => 574,
                "prefecture_id" => 2,
                "city_id" => 202,
                "street_id" => 9668,
                "name" => "三厩",
                "hiragana" => "みんまや",
                "katakana" => "ミンマヤ",
                "katakana_half" => "ﾐﾝﾏﾔ",
                "romaji" => "minmaya",
                "memo" => "",
                "latitude" => "41.185706",
                "altitude" => "140.444536",
            ]);
            
            Station::create([
                "id" => 575,
                "prefecture_id" => 2,
                "city_id" => 212,
                "street_id" => null,
                "name" => "野辺地",
                "hiragana" => "のへじ",
                "katakana" => "ノヘジ",
                "katakana_half" => "ﾉﾍｼﾞ",
                "romaji" => "noheji",
                "memo" => "",
                "latitude" => "40.855308",
                "altitude" => "141.119496",
            ]);
            
            Station::create([
                "id" => 576,
                "prefecture_id" => 2,
                "city_id" => 209,
                "street_id" => null,
                "name" => "北野辺地",
                "hiragana" => "きたのへじ",
                "katakana" => "キタノヘジ",
                "katakana_half" => "ｷﾀﾉﾍｼﾞ",
                "romaji" => "kitanoheji",
                "memo" => "",
                "latitude" => "40.871056",
                "altitude" => "141.133993",
            ]);
            
            Station::create([
                "id" => 577,
                "prefecture_id" => 2,
                "city_id" => 212,
                "street_id" => 9917,
                "name" => "有戸",
                "hiragana" => "ありと",
                "katakana" => "アリト",
                "katakana_half" => "ｱﾘﾄ",
                "romaji" => "arito",
                "memo" => "",
                "latitude" => "40.913886",
                "altitude" => "141.189292",
            ]);
            
            Station::create([
                "id" => 578,
                "prefecture_id" => 2,
                "city_id" => 215,
                "street_id" => 10226,
                "name" => "吹越",
                "hiragana" => "ふっこし",
                "katakana" => "フッコシ",
                "katakana_half" => "ﾌｯｺｼ",
                "romaji" => "fukkoshi",
                "memo" => "",
                "latitude" => "41.021848",
                "altitude" => "141.246532",
            ]);
            
            Station::create([
                "id" => 579,
                "prefecture_id" => 2,
                "city_id" => 189,
                "street_id" => null,
                "name" => "陸奥横浜",
                "hiragana" => "むつよこはま",
                "katakana" => "ムツヨコハマ",
                "katakana_half" => "ﾑﾂﾖｺﾊﾏ",
                "romaji" => "mutsuyokohama",
                "memo" => "",
                "latitude" => "41.086674",
                "altitude" => "141.249779",
            ]);
            
            Station::create([
                "id" => 580,
                "prefecture_id" => 2,
                "city_id" => 215,
                "street_id" => 10196,
                "name" => "有畑",
                "hiragana" => "ありはた",
                "katakana" => "アリハタ",
                "katakana_half" => "ｱﾘﾊﾀ",
                "romaji" => "arihata",
                "memo" => "",
                "latitude" => "41.131919",
                "altitude" => "141.276414",
            ]);
            
            Station::create([
                "id" => 581,
                "prefecture_id" => 2,
                "city_id" => 189,
                "street_id" => null,
                "name" => "近川",
                "hiragana" => "ちかがわ",
                "katakana" => "チカガワ",
                "katakana_half" => "ﾁｶｶﾞﾜ",
                "romaji" => "chikagawa",
                "memo" => "",
                "latitude" => "41.191330",
                "altitude" => "141.279300",
            ]);
            
            Station::create([
                "id" => 582,
                "prefecture_id" => 2,
                "city_id" => 196,
                "street_id" => 9086,
                "name" => "金谷沢",
                "hiragana" => "かなやさわ",
                "katakana" => "カナヤサワ",
                "katakana_half" => "ｶﾅﾔｻﾜ",
                "romaji" => "kanayasawa",
                "memo" => "",
                "latitude" => "41.229020",
                "altitude" => "141.248384",
            ]);
            
            Station::create([
                "id" => 583,
                "prefecture_id" => 2,
                "city_id" => 196,
                "street_id" => 9069,
                "name" => "赤川",
                "hiragana" => "あかがわ",
                "katakana" => "アカガワ",
                "katakana_half" => "ｱｶｶﾞﾜ",
                "romaji" => "akagawa",
                "memo" => "",
                "latitude" => "41.267876",
                "altitude" => "141.209218",
            ]);
            
            Station::create([
                "id" => 584,
                "prefecture_id" => 2,
                "city_id" => 219,
                "street_id" => null,
                "name" => "下北",
                "hiragana" => "しもきた",
                "katakana" => "シモキタ",
                "katakana_half" => "ｼﾓｷﾀ",
                "romaji" => "shimokita",
                "memo" => "",
                "latitude" => "41.282874",
                "altitude" => "141.189914",
            ]);
            
            Station::create([
                "id" => 585,
                "prefecture_id" => 2,
                "city_id" => 196,
                "street_id" => 9079,
                "name" => "大湊",
                "hiragana" => "おおみなと",
                "katakana" => "オオミナト",
                "katakana_half" => "ｵｵﾐﾅﾄ",
                "romaji" => "oominato",
                "memo" => "",
                "latitude" => "41.280152",
                "altitude" => "141.161417",
            ]);
            
            Station::create([
                "id" => 586,
                "prefecture_id" => 2,
                "city_id" => 191,
                "street_id" => 8709,
                "name" => "長苗代",
                "hiragana" => "ながなわしろ",
                "katakana" => "ナガナワシロ",
                "katakana_half" => "ﾅｶﾞﾅﾜｼﾛ",
                "romaji" => "naganawashiro",
                "memo" => "",
                "latitude" => "40.521350",
                "altitude" => "141.465871",
            ]);
            
            Station::create([
                "id" => 587,
                "prefecture_id" => 2,
                "city_id" => 189,
                "street_id" => 8245,
                "name" => "本八戸",
                "hiragana" => "ほんはちのへ",
                "katakana" => "ホンハチノヘ",
                "katakana_half" => "ﾎﾝﾊﾁﾉﾍ",
                "romaji" => "honhachinohe",
                "memo" => "",
                "latitude" => "40.516378",
                "altitude" => "141.488868",
            ]);
            
            Station::create([
                "id" => 588,
                "prefecture_id" => 2,
                "city_id" => 191,
                "street_id" => 8672,
                "name" => "小中野",
                "hiragana" => "こなかの",
                "katakana" => "コナカノ",
                "katakana_half" => "ｺﾅｶﾉ",
                "romaji" => "konakano",
                "memo" => "",
                "latitude" => "40.518739",
                "altitude" => "141.510173",
            ]);
            
            Station::create([
                "id" => 589,
                "prefecture_id" => 2,
                "city_id" => 189,
                "street_id" => null,
                "name" => "陸奥湊",
                "hiragana" => "むつみなと",
                "katakana" => "ムツミナト",
                "katakana_half" => "ﾑﾂﾐﾅﾄ",
                "romaji" => "mutsuminato",
                "memo" => "",
                "latitude" => "40.523128",
                "altitude" => "141.527449",
            ]);
            
            Station::create([
                "id" => 590,
                "prefecture_id" => 2,
                "city_id" => 190,
                "street_id" => 8409,
                "name" => "白銀",
                "hiragana" => "しろがね",
                "katakana" => "シロガネ",
                "katakana_half" => "ｼﾛｶﾞﾈ",
                "romaji" => "shirogane",
                "memo" => "",
                "latitude" => "40.521989",
                "altitude" => "141.541725",
            ]);
            
            Station::create([
                "id" => 591,
                "prefecture_id" => 2,
                "city_id" => 191,
                "street_id" => 8676,
                "name" => "鮫",
                "hiragana" => "さめ",
                "katakana" => "サメ",
                "katakana_half" => "ｻﾒ",
                "romaji" => "same",
                "memo" => "",
                "latitude" => "40.530239",
                "altitude" => "141.554973",
            ]);
            
            Station::create([
                "id" => 592,
                "prefecture_id" => 2,
                "city_id" => 189,
                "street_id" => null,
                "name" => "陸奥白浜",
                "hiragana" => "むつしらはま",
                "katakana" => "ムツシラハマ",
                "katakana_half" => "ﾑﾂｼﾗﾊﾏ",
                "romaji" => "mutsushirahama",
                "memo" => "",
                "latitude" => "40.516602",
                "altitude" => "141.592332",
            ]);
            
            Station::create([
                "id" => 593,
                "prefecture_id" => 2,
                "city_id" => 190,
                "street_id" => 8500,
                "name" => "種差海岸",
                "hiragana" => "たねさしかいがん",
                "katakana" => "タネサシカイガン",
                "katakana_half" => "ﾀﾈｻｼｶｲｶﾞﾝ",
                "romaji" => "tanesashikaigan",
                "memo" => "",
                "latitude" => "40.506937",
                "altitude" => "141.607415",
            ]);
            
            Station::create([
                "id" => 594,
                "prefecture_id" => 2,
                "city_id" => 190,
                "street_id" => 8381,
                "name" => "大久喜",
                "hiragana" => "おおくき",
                "katakana" => "オオクキ",
                "katakana_half" => "ｵｵｸｷ",
                "romaji" => "ookuki",
                "memo" => "",
                "latitude" => "40.495133",
                "altitude" => "141.622998",
            ]);
            
            Station::create([
                "id" => 595,
                "prefecture_id" => 2,
                "city_id" => 189,
                "street_id" => 8226,
                "name" => "金浜",
                "hiragana" => "かねはま",
                "katakana" => "カネハマ",
                "katakana_half" => "ｶﾈﾊﾏ",
                "romaji" => "kanehama",
                "memo" => "",
                "latitude" => "40.476080",
                "altitude" => "141.637525",
            ]);
            
            Station::create([
                "id" => 596,
                "prefecture_id" => 2,
                "city_id" => 207,
                "street_id" => null,
                "name" => "大蛇",
                "hiragana" => "おおじゃ",
                "katakana" => "オオジャ",
                "katakana_half" => "ｵｵｼﾞｬ",
                "romaji" => "ooja",
                "memo" => "",
                "latitude" => "40.467192",
                "altitude" => "141.650858",
            ]);
            
            Station::create([
                "id" => 597,
                "prefecture_id" => 2,
                "city_id" => 227,
                "street_id" => null,
                "name" => "階上",
                "hiragana" => "はしかみ",
                "katakana" => "ハシカミ",
                "katakana_half" => "ﾊｼｶﾐ",
                "romaji" => "hashikami",
                "memo" => "",
                "latitude" => "40.456998",
                "altitude" => "141.664912",
            ]);
            
            Station::create([
                "id" => 598,
                "prefecture_id" => 2,
                "city_id" => 199,
                "street_id" => null,
                "name" => "津軽湯の沢",
                "hiragana" => "つがるゆのさわ",
                "katakana" => "ツガルユノサワ",
                "katakana_half" => "ﾂｶﾞﾙﾕﾉｻﾜ",
                "romaji" => "tsugaruyunosawa",
                "memo" => "",
                "latitude" => "40.442177",
                "altitude" => "140.632055",
            ]);
            
            Station::create([
                "id" => 599,
                "prefecture_id" => 2,
                "city_id" => 198,
                "street_id" => 9269,
                "name" => "碇ケ関",
                "hiragana" => "いかりがせき",
                "katakana" => "イカリガセキ",
                "katakana_half" => "ｲｶﾘｶﾞｾｷ",
                "romaji" => "ikarigaseki",
                "memo" => "",
                "latitude" => "40.478979",
                "altitude" => "140.622359",
            ]);
            
            Station::create([
                "id" => 600,
                "prefecture_id" => 2,
                "city_id" => 207,
                "street_id" => 9802,
                "name" => "長峰",
                "hiragana" => "ながみね",
                "katakana" => "ナガミネ",
                "katakana_half" => "ﾅｶﾞﾐﾈ",
                "romaji" => "nagamine",
                "memo" => "",
                "latitude" => "40.516029",
                "altitude" => "140.603109",
            ]);
            
            Station::create([
                "id" => 601,
                "prefecture_id" => 2,
                "city_id" => 207,
                "street_id" => null,
                "name" => "大鰐温泉",
                "hiragana" => "おおわにおんせん",
                "katakana" => "オオワニオンセン",
                "katakana_half" => "ｵｵﾜﾆｵﾝｾﾝ",
                "romaji" => "oowanionsen",
                "memo" => "",
                "latitude" => "40.521667",
                "altitude" => "140.567167",
            ]);
            
            Station::create([
                "id" => 602,
                "prefecture_id" => 2,
                "city_id" => 189,
                "street_id" => 8288,
                "name" => "石川",
                "hiragana" => "いしかわ",
                "katakana" => "イシカワ",
                "katakana_half" => "ｲｼｶﾜ",
                "romaji" => "ishikawa",
                "memo" => "奥羽本線",
                "latitude" => "40.556107",
                "altitude" => "140.530835",
            ]);
            
            Station::create([
                "id" => 603,
                "prefecture_id" => 2,
                "city_id" => 209,
                "street_id" => null,
                "name" => "北常盤",
                "hiragana" => "きたときわ",
                "katakana" => "キタトキワ",
                "katakana_half" => "ｷﾀﾄｷﾜ",
                "romaji" => "kitatokiwa",
                "memo" => "",
                "latitude" => "40.670789",
                "altitude" => "140.543690",
            ]);
            
            Station::create([
                "id" => 604,
                "prefecture_id" => 2,
                "city_id" => 189,
                "street_id" => 8282,
                "name" => "浪岡",
                "hiragana" => "なみおか",
                "katakana" => "ナミオカ",
                "katakana_half" => "ﾅﾐｵｶ",
                "romaji" => "namioka",
                "memo" => "",
                "latitude" => "40.710453",
                "altitude" => "140.580797",
            ]);
            
            Station::create([
                "id" => 605,
                "prefecture_id" => 2,
                "city_id" => 189,
                "street_id" => 8292,
                "name" => "大釈迦",
                "hiragana" => "だいしゃか",
                "katakana" => "ダイシャカ",
                "katakana_half" => "ﾀﾞｲｼｬｶ",
                "romaji" => "daishaka",
                "memo" => "",
                "latitude" => "40.756587",
                "altitude" => "140.587821",
            ]);
            
            Station::create([
                "id" => 606,
                "prefecture_id" => 2,
                "city_id" => 189,
                "street_id" => 8272,
                "name" => "鶴ケ坂",
                "hiragana" => "つるがさか",
                "katakana" => "ツルガサカ",
                "katakana_half" => "ﾂﾙｶﾞｻｶ",
                "romaji" => "tsurugasaka",
                "memo" => "",
                "latitude" => "40.791139",
                "altitude" => "140.635150",
            ]);
            
            Station::create([
                "id" => 607,
                "prefecture_id" => 2,
                "city_id" => 199,
                "street_id" => null,
                "name" => "津軽新城",
                "hiragana" => "つがるしんじょう",
                "katakana" => "ツガルシンジョウ",
                "katakana_half" => "ﾂｶﾞﾙｼﾝｼﾞｮｳ",
                "romaji" => "tsugarushinjou",
                "memo" => "",
                "latitude" => "40.827831",
                "altitude" => "140.671589",
            ]);
            
            Station::create([
                "id" => 608,
                "prefecture_id" => 2,
                "city_id" => 189,
                "street_id" => 8218,
                "name" => "奥津軽いまべつ",
                "hiragana" => "おくつがるいまべつ",
                "katakana" => "オクツガルイマベツ",
                "katakana_half" => "ｵｸﾂｶﾞﾙｲﾏﾍﾞﾂ",
                "romaji" => "okutsugaruimabetsu",
                "memo" => "",
                "latitude" => "41.144878",
                "altitude" => "140.515643",
            ]);
            
            Station::create([
                "id" => 609,
                "prefecture_id" => 2,
                "city_id" => 199,
                "street_id" => null,
                "name" => "津軽五所川原",
                "hiragana" => "つがるごしょがわら",
                "katakana" => "ツガルゴショガワラ",
                "katakana_half" => "ﾂｶﾞﾙｺﾞｼｮｶﾞﾜﾗ",
                "romaji" => "tsugarugoshogawara",
                "memo" => "",
                "latitude" => "40.809995",
                "altitude" => "140.448525",
            ]);
            
            Station::create([
                "id" => 610,
                "prefecture_id" => 2,
                "city_id" => 189,
                "street_id" => 8289,
                "name" => "十川",
                "hiragana" => "とがわ",
                "katakana" => "トガワ",
                "katakana_half" => "ﾄｶﾞﾜ",
                "romaji" => "togawa",
                "memo" => "青森県",
                "latitude" => "40.817606",
                "altitude" => "140.457163",
            ]);
            
            Station::create([
                "id" => 611,
                "prefecture_id" => 2,
                "city_id" => 193,
                "street_id" => null,
                "name" => "五農校前",
                "hiragana" => "ごのうこうまえ",
                "katakana" => "ゴノウコウマエ",
                "katakana_half" => "ｺﾞﾉｳｺｳﾏｴ",
                "romaji" => "gonoukoumae",
                "memo" => "",
                "latitude" => "40.821272",
                "altitude" => "140.478522",
            ]);
            
            Station::create([
                "id" => 612,
                "prefecture_id" => 2,
                "city_id" => 199,
                "street_id" => null,
                "name" => "津軽飯詰",
                "hiragana" => "つがるいいづめ",
                "katakana" => "ツガルイイヅメ",
                "katakana_half" => "ﾂｶﾞﾙｲｲﾂﾞﾒ",
                "romaji" => "tsugaruiizume",
                "memo" => "",
                "latitude" => "40.829772",
                "altitude" => "140.479438",
            ]);
            
            Station::create([
                "id" => 613,
                "prefecture_id" => 2,
                "city_id" => 193,
                "street_id" => 8933,
                "name" => "毘沙門",
                "hiragana" => "びしゃもん",
                "katakana" => "ビシャモン",
                "katakana_half" => "ﾋﾞｼｬﾓﾝ",
                "romaji" => "bishamon",
                "memo" => "",
                "latitude" => "40.858129",
                "altitude" => "140.477854",
            ]);
            
            Station::create([
                "id" => 614,
                "prefecture_id" => 2,
                "city_id" => 193,
                "street_id" => 8882,
                "name" => "嘉瀬",
                "hiragana" => "かせ",
                "katakana" => "カセ",
                "katakana_half" => "ｶｾ",
                "romaji" => "kase",
                "memo" => "",
                "latitude" => "40.880988",
                "altitude" => "140.469381",
            ]);
            
            Station::create([
                "id" => 615,
                "prefecture_id" => 2,
                "city_id" => 193,
                "street_id" => 8881,
                "name" => "金木",
                "hiragana" => "かなぎ",
                "katakana" => "カナギ",
                "katakana_half" => "ｶﾅｷﾞ",
                "romaji" => "kanagi",
                "memo" => "",
                "latitude" => "40.902985",
                "altitude" => "140.459826",
            ]);
            
            Station::create([
                "id" => 616,
                "prefecture_id" => 2,
                "city_id" => 211,
                "street_id" => 9877,
                "name" => "芦野公園",
                "hiragana" => "あしのこうえん",
                "katakana" => "アシノコウエン",
                "katakana_half" => "ｱｼﾉｺｳｴﾝ",
                "romaji" => "ashinokouen",
                "memo" => "",
                "latitude" => "40.912263",
                "altitude" => "140.451771",
            ]);
            
            Station::create([
                "id" => 617,
                "prefecture_id" => 2,
                "city_id" => 193,
                "street_id" => 8883,
                "name" => "川倉",
                "hiragana" => "かわくら",
                "katakana" => "カワクラ",
                "katakana_half" => "ｶﾜｸﾗ",
                "romaji" => "kawakura",
                "memo" => "",
                "latitude" => "40.926205",
                "altitude" => "140.443631",
            ]);
            
            Station::create([
                "id" => 618,
                "prefecture_id" => 2,
                "city_id" => 211,
                "street_id" => 9880,
                "name" => "大沢内",
                "hiragana" => "おおざわない",
                "katakana" => "オオザワナイ",
                "katakana_half" => "ｵｵｻﾞﾜﾅｲ",
                "romaji" => "oozawanai",
                "memo" => "",
                "latitude" => "40.940037",
                "altitude" => "140.437353",
            ]);
            
            Station::create([
                "id" => 619,
                "prefecture_id" => 2,
                "city_id" => 211,
                "street_id" => 9912,
                "name" => "深郷田",
                "hiragana" => "ふこうだ",
                "katakana" => "フコウダ",
                "katakana_half" => "ﾌｺｳﾀﾞ",
                "romaji" => "fukouda",
                "memo" => "",
                "latitude" => "40.951119",
                "altitude" => "140.441019",
            ]);
            
            Station::create([
                "id" => 620,
                "prefecture_id" => 2,
                "city_id" => 199,
                "street_id" => null,
                "name" => "津軽中里",
                "hiragana" => "つがるなかさと",
                "katakana" => "ツガルナカサト",
                "katakana_half" => "ﾂｶﾞﾙﾅｶｻﾄ",
                "romaji" => "tsugarunakasato",
                "memo" => "",
                "latitude" => "40.964812",
                "altitude" => "140.441075",
            ]);
            
            Station::create([
                "id" => 621,
                "prefecture_id" => 2,
                "city_id" => 207,
                "street_id" => null,
                "name" => "大鰐",
                "hiragana" => "おおわに",
                "katakana" => "オオワニ",
                "katakana_half" => "ｵｵﾜﾆ",
                "romaji" => "oowani",
                "memo" => "",
                "latitude" => "40.521667",
                "altitude" => "140.567251",
            ]);
            
            Station::create([
                "id" => 622,
                "prefecture_id" => 2,
                "city_id" => 207,
                "street_id" => 9801,
                "name" => "宿川原",
                "hiragana" => "しゅくがわら",
                "katakana" => "シュクガワラ",
                "katakana_half" => "ｼｭｸｶﾞﾜﾗ",
                "romaji" => "shukugawara",
                "memo" => "",
                "latitude" => "40.525223",
                "altitude" => "140.557613",
            ]);
            
            Station::create([
                "id" => 623,
                "prefecture_id" => 2,
                "city_id" => 207,
                "street_id" => 9799,
                "name" => "鯖石",
                "hiragana" => "さばいし",
                "katakana" => "サバイシ",
                "katakana_half" => "ｻﾊﾞｲｼ",
                "romaji" => "sabaishi",
                "memo" => "",
                "latitude" => "40.535555",
                "altitude" => "140.552834",
            ]);
            
            Station::create([
                "id" => 624,
                "prefecture_id" => 2,
                "city_id" => 189,
                "street_id" => 8288,
                "name" => "石川プール前",
                "hiragana" => "いしかわぷーるまえ",
                "katakana" => "イシカワプールマエ",
                "katakana_half" => "ｲｼｶﾜﾌﾟｰﾙﾏｴ",
                "romaji" => "ishikawapuｰrumae",
                "memo" => "",
                "latitude" => "40.543276",
                "altitude" => "140.550390",
            ]);
            
            Station::create([
                "id" => 625,
                "prefecture_id" => 2,
                "city_id" => 189,
                "street_id" => null,
                "name" => "義塾高校前",
                "hiragana" => "ぎじゅくこうこうまえ",
                "katakana" => "ギジュクコウコウマエ",
                "katakana_half" => "ｷﾞｼﾞｭｸｺｳｺｳﾏｴ",
                "romaji" => "gijukukoukoumae",
                "memo" => "",
                "latitude" => "40.555801",
                "altitude" => "140.527419",
            ]);
            
            Station::create([
                "id" => 626,
                "prefecture_id" => 2,
                "city_id" => 199,
                "street_id" => null,
                "name" => "津軽大沢",
                "hiragana" => "つがるおおさわ",
                "katakana" => "ツガルオオサワ",
                "katakana_half" => "ﾂｶﾞﾙｵｵｻﾜ",
                "romaji" => "tsugaruoosawa",
                "memo" => "",
                "latitude" => "40.557857",
                "altitude" => "140.516586",
            ]);
            
            Station::create([
                "id" => 627,
                "prefecture_id" => 2,
                "city_id" => 190,
                "street_id" => 8588,
                "name" => "松木平",
                "hiragana" => "まつきたい",
                "katakana" => "マツキタイ",
                "katakana_half" => "ﾏﾂｷﾀｲ",
                "romaji" => "matsukitai",
                "memo" => "",
                "latitude" => "40.560717",
                "altitude" => "140.497116",
            ]);
            
            Station::create([
                "id" => 628,
                "prefecture_id" => 2,
                "city_id" => 190,
                "street_id" => 8438,
                "name" => "小栗山",
                "hiragana" => "こぐりやま",
                "katakana" => "コグリヤマ",
                "katakana_half" => "ｺｸﾞﾘﾔﾏ",
                "romaji" => "koguriyama",
                "memo" => "",
                "latitude" => "40.564356",
                "altitude" => "140.486533",
            ]);
            
            Station::create([
                "id" => 629,
                "prefecture_id" => 2,
                "city_id" => 190,
                "street_id" => 8504,
                "name" => "千年",
                "hiragana" => "ちとせ",
                "katakana" => "チトセ",
                "katakana_half" => "ﾁﾄｾ",
                "romaji" => "chitose",
                "memo" => "",
                "latitude" => "40.567217",
                "altitude" => "140.480145",
            ]);
            
            Station::create([
                "id" => 630,
                "prefecture_id" => 2,
                "city_id" => 189,
                "street_id" => null,
                "name" => "聖愛中高前",
                "hiragana" => "せいあいちゅうこうまえ",
                "katakana" => "セイアイチュウコウマエ",
                "katakana_half" => "ｾｲｱｲﾁｭｳｺｳﾏｴ",
                "romaji" => "seiaichuukoumae",
                "memo" => "",
                "latitude" => "40.577104",
                "altitude" => "140.472645",
            ]);
            
            Station::create([
                "id" => 631,
                "prefecture_id" => 2,
                "city_id" => 190,
                "street_id" => null,
                "name" => "弘前学院大前",
                "hiragana" => "ひろさきがくいんだいまえ",
                "katakana" => "ヒロサキガクインダイマエ",
                "katakana_half" => "ﾋﾛｻｷｶﾞｸｲﾝﾀﾞｲﾏｴ",
                "romaji" => "hirosakigakuindaimae",
                "memo" => "",
                "latitude" => "40.583326",
                "altitude" => "140.470617",
            ]);
            
            Station::create([
                "id" => 632,
                "prefecture_id" => 2,
                "city_id" => 190,
                "street_id" => null,
                "name" => "弘高下",
                "hiragana" => "ひろこうした",
                "katakana" => "ヒロコウシタ",
                "katakana_half" => "ﾋﾛｺｳｼﾀ",
                "romaji" => "hirokoushita",
                "memo" => "",
                "latitude" => "40.592935",
                "altitude" => "140.468228",
            ]);
            
            Station::create([
                "id" => 633,
                "prefecture_id" => 2,
                "city_id" => 189,
                "street_id" => 8265,
                "name" => "中央弘前",
                "hiragana" => "ちゅうおうひろさき",
                "katakana" => "チュウオウヒロサキ",
                "katakana_half" => "ﾁｭｳｵｳﾋﾛｻｷ",
                "romaji" => "chuuouhirosaki",
                "memo" => "",
                "latitude" => "40.599213",
                "altitude" => "140.472143",
            ]);
            
            Station::create([
                "id" => 634,
                "prefecture_id" => 2,
                "city_id" => 190,
                "street_id" => null,
                "name" => "弘前東高前",
                "hiragana" => "ひろさきひがしこうまえ",
                "katakana" => "ヒロサキヒガシコウマエ",
                "katakana_half" => "ﾋﾛｻｷﾋｶﾞｼｺｳﾏｴ",
                "romaji" => "hirosakihigashikoumae",
                "memo" => "",
                "latitude" => "40.592298",
                "altitude" => "140.488171",
            ]);
            
            Station::create([
                "id" => 635,
                "prefecture_id" => 2,
                "city_id" => 189,
                "street_id" => null,
                "name" => "運動公園前",
                "hiragana" => "うんどうこうえんまえ",
                "katakana" => "ウンドウコウエンマエ",
                "katakana_half" => "ｳﾝﾄﾞｳｺｳｴﾝﾏｴ",
                "romaji" => "undoukouenmae",
                "memo" => "青森県",
                "latitude" => "40.589547",
                "altitude" => "140.502975",
            ]);
            
            Station::create([
                "id" => 636,
                "prefecture_id" => 2,
                "city_id" => 190,
                "street_id" => 8541,
                "name" => "新里",
                "hiragana" => "にさと",
                "katakana" => "ニサト",
                "katakana_half" => "ﾆｻﾄ",
                "romaji" => "nisato",
                "memo" => "青森県",
                "latitude" => "40.587493",
                "altitude" => "140.520808",
            ]);
            
            Station::create([
                "id" => 637,
                "prefecture_id" => 2,
                "city_id" => 198,
                "street_id" => 9487,
                "name" => "館田",
                "hiragana" => "たちた",
                "katakana" => "タチタ",
                "katakana_half" => "ﾀﾁﾀ",
                "romaji" => "tachita",
                "memo" => "",
                "latitude" => "40.585159",
                "altitude" => "140.538028",
            ]);
            
            Station::create([
                "id" => 638,
                "prefecture_id" => 2,
                "city_id" => 198,
                "street_id" => null,
                "name" => "平賀",
                "hiragana" => "ひらか",
                "katakana" => "ヒラカ",
                "katakana_half" => "ﾋﾗｶ",
                "romaji" => "hiraka",
                "memo" => "",
                "latitude" => "40.584855",
                "altitude" => "140.561054",
            ]);
            
            Station::create([
                "id" => 639,
                "prefecture_id" => 2,
                "city_id" => 191,
                "street_id" => 8657,
                "name" => "柏農高校前",
                "hiragana" => "はくのうこうこうまえ",
                "katakana" => "ハクノウコウコウマエ",
                "katakana_half" => "ﾊｸﾉｳｺｳｺｳﾏｴ",
                "romaji" => "hakunoukoukoumae",
                "memo" => "",
                "latitude" => "40.601936",
                "altitude" => "140.564441",
            ]);
            
            Station::create([
                "id" => 640,
                "prefecture_id" => 2,
                "city_id" => 199,
                "street_id" => null,
                "name" => "津軽尾上",
                "hiragana" => "つがるおのえ",
                "katakana" => "ツガルオノエ",
                "katakana_half" => "ﾂｶﾞﾙｵﾉｴ",
                "romaji" => "tsugaruonoe",
                "memo" => "",
                "latitude" => "40.614241",
                "altitude" => "140.576635",
            ]);
            
            Station::create([
                "id" => 641,
                "prefecture_id" => 2,
                "city_id" => 198,
                "street_id" => 9348,
                "name" => "尾上高校前",
                "hiragana" => "おのえこうこうまえ",
                "katakana" => "オノエコウコウマエ",
                "katakana_half" => "ｵﾉｴｺｳｺｳﾏｴ",
                "romaji" => "onoekoukoumae",
                "memo" => "",
                "latitude" => "40.625351",
                "altitude" => "140.577468",
            ]);
            
            Station::create([
                "id" => 642,
                "prefecture_id" => 2,
                "city_id" => 194,
                "street_id" => null,
                "name" => "田んぼアート",
                "hiragana" => "たんぼあーと",
                "katakana" => "タンボアート",
                "katakana_half" => "ﾀﾝﾎﾞｱｰﾄ",
                "romaji" => "tanboaｰto",
                "memo" => "",
                "latitude" => "40.632850",
                "altitude" => "140.573718",
            ]);
            
            Station::create([
                "id" => 643,
                "prefecture_id" => 2,
                "city_id" => 208,
                "street_id" => null,
                "name" => "田舎館",
                "hiragana" => "いなかだて",
                "katakana" => "イナカダテ",
                "katakana_half" => "ｲﾅｶﾀﾞﾃ",
                "romaji" => "inakadate",
                "memo" => "",
                "latitude" => "40.637211",
                "altitude" => "140.570940",
            ]);
            
            Station::create([
                "id" => 644,
                "prefecture_id" => 2,
                "city_id" => 192,
                "street_id" => 8799,
                "name" => "境松",
                "hiragana" => "さかいまつ",
                "katakana" => "サカイマツ",
                "katakana_half" => "ｻｶｲﾏﾂ",
                "romaji" => "sakaimatsu",
                "memo" => "",
                "latitude" => "40.649237",
                "altitude" => "140.576078",
            ]);
            
            Station::create([
                "id" => 645,
                "prefecture_id" => 2,
                "city_id" => 192,
                "street_id" => null,
                "name" => "黒石",
                "hiragana" => "くろいし",
                "katakana" => "クロイシ",
                "katakana_half" => "ｸﾛｲｼ",
                "romaji" => "kuroishi",
                "memo" => "青森県",
                "latitude" => "40.648266",
                "altitude" => "140.591771",
            ]);
            
            Station::create([
                "id" => 646,
                "prefecture_id" => 2,
                "city_id" => 223,
                "street_id" => 10490,
                "name" => "目時",
                "hiragana" => "めとき",
                "katakana" => "メトキ",
                "katakana_half" => "ﾒﾄｷ",
                "romaji" => "metoki",
                "memo" => "",
                "latitude" => "40.351892",
                "altitude" => "141.289532",
            ]);
            
            Station::create([
                "id" => 647,
                "prefecture_id" => 2,
                "city_id" => 223,
                "street_id" => null,
                "name" => "三戸",
                "hiragana" => "さんのへ",
                "katakana" => "サンノヘ",
                "katakana_half" => "ｻﾝﾉﾍ",
                "romaji" => "sannohe",
                "memo" => "",
                "latitude" => "40.395721",
                "altitude" => "141.273087",
            ]);
            
            Station::create([
                "id" => 648,
                "prefecture_id" => 2,
                "city_id" => 189,
                "street_id" => 8253,
                "name" => "諏訪ノ平",
                "hiragana" => "すわのたいら",
                "katakana" => "スワノタイラ",
                "katakana_half" => "ｽﾜﾉﾀｲﾗ",
                "romaji" => "suwanotaira",
                "memo" => "",
                "latitude" => "40.414970",
                "altitude" => "141.304750",
            ]);
            
            Station::create([
                "id" => 649,
                "prefecture_id" => 2,
                "city_id" => 226,
                "street_id" => 10675,
                "name" => "剣吉",
                "hiragana" => "けんよし",
                "katakana" => "ケンヨシ",
                "katakana_half" => "ｹﾝﾖｼ",
                "romaji" => "kenyoshi",
                "memo" => "",
                "latitude" => "40.448966",
                "altitude" => "141.346773",
            ]);
            
            Station::create([
                "id" => 650,
                "prefecture_id" => 2,
                "city_id" => 226,
                "street_id" => 10687,
                "name" => "苫米地",
                "hiragana" => "とまべち",
                "katakana" => "トマベチ",
                "katakana_half" => "ﾄﾏﾍﾞﾁ",
                "romaji" => "tomabechi",
                "memo" => "",
                "latitude" => "40.466826",
                "altitude" => "141.374825",
            ]);
            
            Station::create([
                "id" => 651,
                "prefecture_id" => 2,
                "city_id" => 209,
                "street_id" => null,
                "name" => "北高岩",
                "hiragana" => "きたたかいわ",
                "katakana" => "キタタカイワ",
                "katakana_half" => "ｷﾀﾀｶｲﾜ",
                "romaji" => "kitatakaiwa",
                "memo" => "",
                "latitude" => "40.475325",
                "altitude" => "141.405933",
            ]);
            
            Station::create([
                "id" => 652,
                "prefecture_id" => 2,
                "city_id" => 189,
                "street_id" => null,
                "name" => "陸奥市川",
                "hiragana" => "むついちかわ",
                "katakana" => "ムツイチカワ",
                "katakana_half" => "ﾑﾂｲﾁｶﾜ",
                "romaji" => "mutsuichikawa",
                "memo" => "",
                "latitude" => "40.563012",
                "altitude" => "141.439205",
            ]);
            
            Station::create([
                "id" => 653,
                "prefecture_id" => 2,
                "city_id" => 198,
                "street_id" => 9415,
                "name" => "下田",
                "hiragana" => "しもだ",
                "katakana" => "シモダ",
                "katakana_half" => "ｼﾓﾀﾞ",
                "romaji" => "shimoda",
                "memo" => "青森県",
                "latitude" => "40.591897",
                "altitude" => "141.407678",
            ]);
            
            Station::create([
                "id" => 654,
                "prefecture_id" => 2,
                "city_id" => 218,
                "street_id" => 10443,
                "name" => "向山",
                "hiragana" => "むかいやま",
                "katakana" => "ムカイヤマ",
                "katakana_half" => "ﾑｶｲﾔﾏ",
                "romaji" => "mukaiyama",
                "memo" => "",
                "latitude" => "40.630226",
                "altitude" => "141.370318",
            ]);
            
            Station::create([
                "id" => 655,
                "prefecture_id" => 2,
                "city_id" => 195,
                "street_id" => null,
                "name" => "三沢",
                "hiragana" => "みさわ",
                "katakana" => "ミサワ",
                "katakana_half" => "ﾐｻﾜ",
                "romaji" => "misawa",
                "memo" => "青森県",
                "latitude" => "40.668832",
                "altitude" => "141.353929",
            ]);
            
            Station::create([
                "id" => 656,
                "prefecture_id" => 2,
                "city_id" => 196,
                "street_id" => 9096,
                "name" => "小川原",
                "hiragana" => "こがわら",
                "katakana" => "コガワラ",
                "katakana_half" => "ｺｶﾞﾜﾗ",
                "romaji" => "kogawara",
                "memo" => "",
                "latitude" => "40.709771",
                "altitude" => "141.299959",
            ]);
            
            Station::create([
                "id" => 657,
                "prefecture_id" => 2,
                "city_id" => 212,
                "street_id" => null,
                "name" => "上北町",
                "hiragana" => "かみきたちょう",
                "katakana" => "カミキタチョウ",
                "katakana_half" => "ｶﾐｷﾀﾁｮｳ",
                "romaji" => "kamikitachou",
                "memo" => "",
                "latitude" => "40.733212",
                "altitude" => "141.264461",
            ]);
            
            Station::create([
                "id" => 658,
                "prefecture_id" => 2,
                "city_id" => 216,
                "street_id" => 10261,
                "name" => "乙供",
                "hiragana" => "おっとも",
                "katakana" => "オットモ",
                "katakana_half" => "ｵｯﾄﾓ",
                "romaji" => "ottomo",
                "memo" => "",
                "latitude" => "40.780040",
                "altitude" => "141.213158",
            ]);
            
            Station::create([
                "id" => 659,
                "prefecture_id" => 2,
                "city_id" => 216,
                "street_id" => 10301,
                "name" => "千曳",
                "hiragana" => "ちびき",
                "katakana" => "チビキ",
                "katakana_half" => "ﾁﾋﾞｷ",
                "romaji" => "chibiki",
                "memo" => "",
                "latitude" => "40.804536",
                "altitude" => "141.152939",
            ]);
            
            Station::create([
                "id" => 660,
                "prefecture_id" => 2,
                "city_id" => 199,
                "street_id" => 9606,
                "name" => "狩場沢",
                "hiragana" => "かりばさわ",
                "katakana" => "カリバサワ",
                "katakana_half" => "ｶﾘﾊﾞｻﾜ",
                "romaji" => "karibasawa",
                "memo" => "",
                "latitude" => "40.900525",
                "altitude" => "141.071081",
            ]);
            
            Station::create([
                "id" => 661,
                "prefecture_id" => 2,
                "city_id" => 199,
                "street_id" => 9609,
                "name" => "清水川",
                "hiragana" => "しみずがわ",
                "katakana" => "シミズガワ",
                "katakana_half" => "ｼﾐｽﾞｶﾞﾜ",
                "romaji" => "shimizugawa",
                "memo" => "",
                "latitude" => "40.921716",
                "altitude" => "141.024778",
            ]);
            
            Station::create([
                "id" => 662,
                "prefecture_id" => 2,
                "city_id" => 199,
                "street_id" => 9608,
                "name" => "小湊",
                "hiragana" => "こみなと",
                "katakana" => "コミナト",
                "katakana_half" => "ｺﾐﾅﾄ",
                "romaji" => "kominato",
                "memo" => "",
                "latitude" => "40.929713",
                "altitude" => "140.954006",
            ]);
            
            Station::create([
                "id" => 663,
                "prefecture_id" => 2,
                "city_id" => 216,
                "street_id" => 10292,
                "name" => "西平内",
                "hiragana" => "にしひらない",
                "katakana" => "ニシヒラナイ",
                "katakana_half" => "ﾆｼﾋﾗﾅｲ",
                "romaji" => "nishihiranai",
                "memo" => "",
                "latitude" => "40.918186",
                "altitude" => "140.913093",
            ]);
            
            Station::create([
                "id" => 664,
                "prefecture_id" => 2,
                "city_id" => 189,
                "street_id" => 8198,
                "name" => "浅虫温泉",
                "hiragana" => "あさむしおんせん",
                "katakana" => "アサムシオンセン",
                "katakana_half" => "ｱｻﾑｼｵﾝｾﾝ",
                "romaji" => "asamushionsen",
                "memo" => "",
                "latitude" => "40.891466",
                "altitude" => "140.862459",
            ]);
            
            Station::create([
                "id" => 665,
                "prefecture_id" => 2,
                "city_id" => 189,
                "street_id" => 8315,
                "name" => "野内",
                "hiragana" => "のない",
                "katakana" => "ノナイ",
                "katakana_half" => "ﾉﾅｲ",
                "romaji" => "nonai",
                "memo" => "",
                "latitude" => "40.846026",
                "altitude" => "140.816743",
            ]);
            
            Station::create([
                "id" => 666,
                "prefecture_id" => 2,
                "city_id" => 189,
                "street_id" => 8349,
                "name" => "矢田前",
                "hiragana" => "やだまえ",
                "katakana" => "ヤダマエ",
                "katakana_half" => "ﾔﾀﾞﾏｴ",
                "romaji" => "yadamae",
                "memo" => "",
                "latitude" => "40.834083",
                "altitude" => "140.807300",
            ]);
            
            Station::create([
                "id" => 667,
                "prefecture_id" => 2,
                "city_id" => 189,
                "street_id" => 8239,
                "name" => "小柳",
                "hiragana" => "こやなぎ",
                "katakana" => "コヤナギ",
                "katakana_half" => "ｺﾔﾅｷﾞ",
                "romaji" => "koyanagi",
                "memo" => "青森県",
                "latitude" => "40.817945",
                "altitude" => "140.797662",
            ]);
            
            Station::create([
                "id" => 668,
                "prefecture_id" => 2,
                "city_id" => 199,
                "street_id" => null,
                "name" => "東青森",
                "hiragana" => "ひがしあおもり",
                "katakana" => "ヒガシアオモリ",
                "katakana_half" => "ﾋｶﾞｼｱｵﾓﾘ",
                "romaji" => "higashiaomori",
                "memo" => "",
                "latitude" => "40.810668",
                "altitude" => "140.783470",
            ]);
            
            Station::create([
                "id" => 669,
                "prefecture_id" => 2,
                "city_id" => 189,
                "street_id" => 8270,
                "name" => "筒井",
                "hiragana" => "つつい",
                "katakana" => "ツツイ",
                "katakana_half" => "ﾂﾂｲ",
                "romaji" => "tsutsui",
                "memo" => "青森県",
                "latitude" => "40.805668",
                "altitude" => "140.769609",
            ]);
            
    }
}
