<?php
namespace Database\Seeders;

use App\Models\Station;
use Illuminate\Database\Seeder;

class StationSeeder5 extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        
            Station::create([
                "id" => 1024,
                "prefecture_id" => 5,
                "city_id" => 313,
                "street_id" => 18069,
                "name" => "田沢湖",
                "hiragana" => "たざわこ",
                "katakana" => "タザワコ",
                "katakana_half" => "ﾀｻﾞﾜｺ",
                "romaji" => "tazawako",
                "memo" => "",
                "latitude" => "39.700424",
                "altitude" => "140.722221",
            ]);
            
            Station::create([
                "id" => 1025,
                "prefecture_id" => 5,
                "city_id" => 313,
                "street_id" => 18010,
                "name" => "角館",
                "hiragana" => "かくのだて",
                "katakana" => "カクノダテ",
                "katakana_half" => "ｶｸﾉﾀﾞﾃ",
                "romaji" => "kakunodate",
                "memo" => "",
                "latitude" => "39.591767",
                "altitude" => "140.571127",
            ]);
            
            Station::create([
                "id" => 1026,
                "prefecture_id" => 5,
                "city_id" => 302,
                "street_id" => 16544,
                "name" => "大曲",
                "hiragana" => "おおまがり",
                "katakana" => "オオマガリ",
                "katakana_half" => "ｵｵﾏｶﾞﾘ",
                "romaji" => "oomagari",
                "memo" => "秋田県",
                "latitude" => "39.465751",
                "altitude" => "140.479640",
            ]);
            
            Station::create([
                "id" => 1027,
                "prefecture_id" => 5,
                "city_id" => 301,
                "street_id" => null,
                "name" => "秋田",
                "hiragana" => "あきた",
                "katakana" => "アキタ",
                "katakana_half" => "ｱｷﾀ",
                "romaji" => "akita",
                "memo" => "",
                "latitude" => "39.717024",
                "altitude" => "140.129685",
            ]);
            
            Station::create([
                "id" => 1028,
                "prefecture_id" => 5,
                "city_id" => 325,
                "street_id" => null,
                "name" => "東能代",
                "hiragana" => "ひがしのしろ",
                "katakana" => "ヒガシノシロ",
                "katakana_half" => "ﾋｶﾞｼﾉｼﾛ",
                "romaji" => "higashinoshiro",
                "memo" => "",
                "latitude" => "40.191639",
                "altitude" => "140.065752",
            ]);
            
            Station::create([
                "id" => 1029,
                "prefecture_id" => 5,
                "city_id" => 302,
                "street_id" => null,
                "name" => "能代",
                "hiragana" => "のしろ",
                "katakana" => "ノシロ",
                "katakana_half" => "ﾉｼﾛ",
                "romaji" => "noshiro",
                "memo" => "",
                "latitude" => "40.206359",
                "altitude" => "140.033227",
            ]);
            
            Station::create([
                "id" => 1030,
                "prefecture_id" => 5,
                "city_id" => 302,
                "street_id" => 16712,
                "name" => "向能代",
                "hiragana" => "むかいのしろ",
                "katakana" => "ムカイノシロ",
                "katakana_half" => "ﾑｶｲﾉｼﾛ",
                "romaji" => "mukainoshiro",
                "memo" => "",
                "latitude" => "40.225745",
                "altitude" => "140.039169",
            ]);
            
            Station::create([
                "id" => 1031,
                "prefecture_id" => 5,
                "city_id" => 311,
                "street_id" => null,
                "name" => "北能代",
                "hiragana" => "きたのしろ",
                "katakana" => "キタノシロ",
                "katakana_half" => "ｷﾀﾉｼﾛ",
                "romaji" => "kitanoshiro",
                "memo" => "",
                "latitude" => "40.254242",
                "altitude" => "140.033724",
            ]);
            
            Station::create([
                "id" => 1032,
                "prefecture_id" => 5,
                "city_id" => 301,
                "street_id" => 16218,
                "name" => "鳥形",
                "hiragana" => "とりがた",
                "katakana" => "トリガタ",
                "katakana_half" => "ﾄﾘｶﾞﾀ",
                "romaji" => "torigata",
                "memo" => "",
                "latitude" => "40.271324",
                "altitude" => "140.036890",
            ]);
            
            Station::create([
                "id" => 1033,
                "prefecture_id" => 5,
                "city_id" => 306,
                "street_id" => null,
                "name" => "沢目",
                "hiragana" => "さわめ",
                "katakana" => "サワメ",
                "katakana_half" => "ｻﾜﾒ",
                "romaji" => "sawame",
                "memo" => "",
                "latitude" => "40.296127",
                "altitude" => "140.037833",
            ]);
            
            Station::create([
                "id" => 1034,
                "prefecture_id" => 5,
                "city_id" => 325,
                "street_id" => null,
                "name" => "東八森",
                "hiragana" => "ひがしはちもり",
                "katakana" => "ヒガシハチモリ",
                "katakana_half" => "ﾋｶﾞｼﾊﾁﾓﾘ",
                "romaji" => "higashihachimori",
                "memo" => "",
                "latitude" => "40.332206",
                "altitude" => "140.032498",
            ]);
            
            Station::create([
                "id" => 1035,
                "prefecture_id" => 5,
                "city_id" => 318,
                "street_id" => 18129,
                "name" => "八森",
                "hiragana" => "はちもり",
                "katakana" => "ハチモリ",
                "katakana_half" => "ﾊﾁﾓﾘ",
                "romaji" => "hachimori",
                "memo" => "",
                "latitude" => "40.371396",
                "altitude" => "140.017970",
            ]);
            
            Station::create([
                "id" => 1036,
                "prefecture_id" => 5,
                "city_id" => 318,
                "street_id" => 18159,
                "name" => "滝ノ間",
                "hiragana" => "たきのま",
                "katakana" => "タキノマ",
                "katakana_half" => "ﾀｷﾉﾏ",
                "romaji" => "takinoma",
                "memo" => "",
                "latitude" => "40.379894",
                "altitude" => "140.002221",
            ]);
            
            Station::create([
                "id" => 1037,
                "prefecture_id" => 5,
                "city_id" => 310,
                "street_id" => 17637,
                "name" => "あきた白神",
                "hiragana" => "あきたしらかみ",
                "katakana" => "アキタシラカミ",
                "katakana_half" => "ｱｷﾀｼﾗｶﾐ",
                "romaji" => "akitashirakami",
                "memo" => "",
                "latitude" => "40.386894",
                "altitude" => "139.987111",
            ]);
            
            Station::create([
                "id" => 1038,
                "prefecture_id" => 5,
                "city_id" => 318,
                "street_id" => 18134,
                "name" => "岩館",
                "hiragana" => "いわだて",
                "katakana" => "イワダテ",
                "katakana_half" => "ｲﾜﾀﾞﾃ",
                "romaji" => "iwadate",
                "memo" => "",
                "latitude" => "40.406224",
                "altitude" => "139.966334",
            ]);
            
            Station::create([
                "id" => 1039,
                "prefecture_id" => 5,
                "city_id" => 306,
                "street_id" => 17251,
                "name" => "院内",
                "hiragana" => "いんない",
                "katakana" => "インナイ",
                "katakana_half" => "ｲﾝﾅｲ",
                "romaji" => "innai",
                "memo" => "",
                "latitude" => "39.049433",
                "altitude" => "140.413970",
            ]);
            
            Station::create([
                "id" => 1040,
                "prefecture_id" => 5,
                "city_id" => 306,
                "street_id" => 17344,
                "name" => "横堀",
                "hiragana" => "よこぼり",
                "katakana" => "ヨコボリ",
                "katakana_half" => "ﾖｺﾎﾞﾘ",
                "romaji" => "yokobori",
                "memo" => "",
                "latitude" => "39.064654",
                "altitude" => "140.451550",
            ]);
            
            Station::create([
                "id" => 1041,
                "prefecture_id" => 5,
                "city_id" => 317,
                "street_id" => null,
                "name" => "三関",
                "hiragana" => "みつせき",
                "katakana" => "ミツセキ",
                "katakana_half" => "ﾐﾂｾｷ",
                "romaji" => "mitsuseki",
                "memo" => "",
                "latitude" => "39.110177",
                "altitude" => "140.483767",
            ]);
            
            Station::create([
                "id" => 1042,
                "prefecture_id" => 5,
                "city_id" => 309,
                "street_id" => null,
                "name" => "上湯沢",
                "hiragana" => "かみゆざわ",
                "katakana" => "カミユザワ",
                "katakana_half" => "ｶﾐﾕｻﾞﾜ",
                "romaji" => "kamiyuzawa",
                "memo" => "",
                "latitude" => "39.134120",
                "altitude" => "140.485183",
            ]);
            
            Station::create([
                "id" => 1043,
                "prefecture_id" => 5,
                "city_id" => 306,
                "street_id" => null,
                "name" => "湯沢",
                "hiragana" => "ゆざわ",
                "katakana" => "ユザワ",
                "katakana_half" => "ﾕｻﾞﾜ",
                "romaji" => "yuzawa",
                "memo" => "",
                "latitude" => "39.163644",
                "altitude" => "140.486959",
            ]);
            
            Station::create([
                "id" => 1044,
                "prefecture_id" => 5,
                "city_id" => 310,
                "street_id" => 17765,
                "name" => "下湯沢",
                "hiragana" => "しもゆざわ",
                "katakana" => "シモユザワ",
                "katakana_half" => "ｼﾓﾕｻﾞﾜ",
                "romaji" => "shimoyuzawa",
                "memo" => "",
                "latitude" => "39.197225",
                "altitude" => "140.502428",
            ]);
            
            Station::create([
                "id" => 1045,
                "prefecture_id" => 5,
                "city_id" => 303,
                "street_id" => 16819,
                "name" => "十文字",
                "hiragana" => "じゅうもんじ",
                "katakana" => "ジュウモンジ",
                "katakana_half" => "ｼﾞｭｳﾓﾝｼﾞ",
                "romaji" => "juumonji",
                "memo" => "",
                "latitude" => "39.221250",
                "altitude" => "140.526453",
            ]);
            
            Station::create([
                "id" => 1046,
                "prefecture_id" => 5,
                "city_id" => 303,
                "street_id" => 17011,
                "name" => "醍醐",
                "hiragana" => "だいご",
                "katakana" => "ダイゴ",
                "katakana_half" => "ﾀﾞｲｺﾞ",
                "romaji" => "daigo",
                "memo" => "秋田県",
                "latitude" => "39.248609",
                "altitude" => "140.538534",
            ]);
            
            Station::create([
                "id" => 1047,
                "prefecture_id" => 5,
                "city_id" => 301,
                "street_id" => 16484,
                "name" => "柳田",
                "hiragana" => "やなぎた",
                "katakana" => "ヤナギタ",
                "katakana_half" => "ﾔﾅｷﾞﾀ",
                "romaji" => "yanagita",
                "memo" => "",
                "latitude" => "39.276078",
                "altitude" => "140.553615",
            ]);
            
            Station::create([
                "id" => 1048,
                "prefecture_id" => 5,
                "city_id" => 303,
                "street_id" => null,
                "name" => "横手",
                "hiragana" => "よこて",
                "katakana" => "ヨコテ",
                "katakana_half" => "ﾖｺﾃ",
                "romaji" => "yokote",
                "memo" => "",
                "latitude" => "39.310047",
                "altitude" => "140.560502",
            ]);
            
            Station::create([
                "id" => 1049,
                "prefecture_id" => 5,
                "city_id" => 324,
                "street_id" => null,
                "name" => "後三年",
                "hiragana" => "ごさんねん",
                "katakana" => "ゴサンネン",
                "katakana_half" => "ｺﾞｻﾝﾈﾝ",
                "romaji" => "gosannen",
                "memo" => "",
                "latitude" => "39.364985",
                "altitude" => "140.538418",
            ]);
            
            Station::create([
                "id" => 1050,
                "prefecture_id" => 5,
                "city_id" => 323,
                "street_id" => 18296,
                "name" => "飯詰",
                "hiragana" => "いいづめ",
                "katakana" => "イイヅメ",
                "katakana_half" => "ｲｲﾂﾞﾒ",
                "romaji" => "iizume",
                "memo" => "",
                "latitude" => "39.406036",
                "altitude" => "140.515307",
            ]);
            
            Station::create([
                "id" => 1051,
                "prefecture_id" => 5,
                "city_id" => 310,
                "street_id" => 17695,
                "name" => "神宮寺",
                "hiragana" => "じんぐうじ",
                "katakana" => "ジングウジ",
                "katakana_half" => "ｼﾞﾝｸﾞｳｼﾞ",
                "romaji" => "jinguuji",
                "memo" => "",
                "latitude" => "39.495274",
                "altitude" => "140.425893",
            ]);
            
            Station::create([
                "id" => 1052,
                "prefecture_id" => 5,
                "city_id" => 310,
                "street_id" => 17669,
                "name" => "刈和野",
                "hiragana" => "かりわの",
                "katakana" => "カリワノ",
                "katakana_half" => "ｶﾘﾜﾉ",
                "romaji" => "kariwano",
                "memo" => "",
                "latitude" => "39.548102",
                "altitude" => "140.371951",
            ]);
            
            Station::create([
                "id" => 1053,
                "prefecture_id" => 5,
                "city_id" => 310,
                "street_id" => 17684,
                "name" => "峰吉川",
                "hiragana" => "みねよしかわ",
                "katakana" => "ミネヨシカワ",
                "katakana_half" => "ﾐﾈﾖｼｶﾜ",
                "romaji" => "mineyoshikawa",
                "memo" => "",
                "latitude" => "39.566626",
                "altitude" => "140.322981",
            ]);
            
            Station::create([
                "id" => 1054,
                "prefecture_id" => 5,
                "city_id" => 324,
                "street_id" => null,
                "name" => "羽後境",
                "hiragana" => "うごさかい",
                "katakana" => "ウゴサカイ",
                "katakana_half" => "ｳｺﾞｻｶｲ",
                "romaji" => "ugosakai",
                "memo" => "",
                "latitude" => "39.619260",
                "altitude" => "140.320563",
            ]);
            
            Station::create([
                "id" => 1055,
                "prefecture_id" => 5,
                "city_id" => 301,
                "street_id" => 16309,
                "name" => "大張野",
                "hiragana" => "おおばりの",
                "katakana" => "オオバリノ",
                "katakana_half" => "ｵｵﾊﾞﾘﾉ",
                "romaji" => "oobarino",
                "memo" => "",
                "latitude" => "39.663643",
                "altitude" => "140.274176",
            ]);
            
            Station::create([
                "id" => 1056,
                "prefecture_id" => 5,
                "city_id" => 301,
                "street_id" => 16319,
                "name" => "和田",
                "hiragana" => "わだ",
                "katakana" => "ワダ",
                "katakana_half" => "ﾜﾀﾞ",
                "romaji" => "wada",
                "memo" => "",
                "latitude" => "39.650866",
                "altitude" => "140.218792",
            ]);
            
            Station::create([
                "id" => 1057,
                "prefecture_id" => 5,
                "city_id" => 301,
                "street_id" => 16518,
                "name" => "四ツ小屋",
                "hiragana" => "よつごや",
                "katakana" => "ヨツゴヤ",
                "katakana_half" => "ﾖﾂｺﾞﾔ",
                "romaji" => "yotsugoya",
                "memo" => "",
                "latitude" => "39.661335",
                "altitude" => "140.144881",
            ]);
            
            Station::create([
                "id" => 1058,
                "prefecture_id" => 5,
                "city_id" => 301,
                "street_id" => 16392,
                "name" => "土崎",
                "hiragana" => "つちざき",
                "katakana" => "ツチザキ",
                "katakana_half" => "ﾂﾁｻﾞｷ",
                "romaji" => "tsuchizaki",
                "memo" => "",
                "latitude" => "39.759046",
                "altitude" => "140.073355",
            ]);
            
            Station::create([
                "id" => 1059,
                "prefecture_id" => 5,
                "city_id" => 309,
                "street_id" => null,
                "name" => "上飯島",
                "hiragana" => "かみいいじま",
                "katakana" => "カミイイジマ",
                "katakana_half" => "ｶﾐｲｲｼﾞﾏ",
                "romaji" => "kamiiijima",
                "memo" => "",
                "latitude" => "39.779265",
                "altitude" => "140.068409",
            ]);
            
            Station::create([
                "id" => 1060,
                "prefecture_id" => 5,
                "city_id" => 301,
                "street_id" => 16271,
                "name" => "追分",
                "hiragana" => "おいわけ",
                "katakana" => "オイワケ",
                "katakana_half" => "ｵｲﾜｹ",
                "romaji" => "oiwake",
                "memo" => "秋田県",
                "latitude" => "39.810068",
                "altitude" => "140.057743",
            ]);
            
            Station::create([
                "id" => 1061,
                "prefecture_id" => 5,
                "city_id" => 309,
                "street_id" => 17602,
                "name" => "大久保",
                "hiragana" => "おおくぼ",
                "katakana" => "オオクボ",
                "katakana_half" => "ｵｵｸﾎﾞ",
                "romaji" => "ookubo",
                "memo" => "秋田県",
                "latitude" => "39.870978",
                "altitude" => "140.063017",
            ]);
            
            Station::create([
                "id" => 1062,
                "prefecture_id" => 5,
                "city_id" => 324,
                "street_id" => null,
                "name" => "羽後飯塚",
                "hiragana" => "うごいいづか",
                "katakana" => "ウゴイイヅカ",
                "katakana_half" => "ｳｺﾞｲｲﾂﾞｶ",
                "romaji" => "ugoiizuka",
                "memo" => "",
                "latitude" => "39.898836",
                "altitude" => "140.073376",
            ]);
            
            Station::create([
                "id" => 1063,
                "prefecture_id" => 5,
                "city_id" => 321,
                "street_id" => null,
                "name" => "井川さくら",
                "hiragana" => "いかわさくら",
                "katakana" => "イカワサクラ",
                "katakana_half" => "ｲｶﾜｻｸﾗ",
                "romaji" => "ikawasakura",
                "memo" => "",
                "latitude" => "39.911974",
                "altitude" => "140.075653",
            ]);
            
            Station::create([
                "id" => 1064,
                "prefecture_id" => 5,
                "city_id" => 320,
                "street_id" => null,
                "name" => "八郎潟",
                "hiragana" => "はちろうがた",
                "katakana" => "ハチロウガタ",
                "katakana_half" => "ﾊﾁﾛｳｶﾞﾀ",
                "romaji" => "hachirougata",
                "memo" => "",
                "latitude" => "39.947997",
                "altitude" => "140.078513",
            ]);
            
            Station::create([
                "id" => 1065,
                "prefecture_id" => 5,
                "city_id" => 317,
                "street_id" => 18120,
                "name" => "鯉川",
                "hiragana" => "こいかわ",
                "katakana" => "コイカワ",
                "katakana_half" => "ｺｲｶﾜ",
                "romaji" => "koikawa",
                "memo" => "",
                "latitude" => "39.996382",
                "altitude" => "140.077510",
            ]);
            
            Station::create([
                "id" => 1066,
                "prefecture_id" => 5,
                "city_id" => 317,
                "street_id" => 18116,
                "name" => "鹿渡",
                "hiragana" => "かど",
                "katakana" => "カド",
                "katakana_half" => "ｶﾄﾞ",
                "romaji" => "kado",
                "memo" => "",
                "latitude" => "40.044765",
                "altitude" => "140.082618",
            ]);
            
            Station::create([
                "id" => 1067,
                "prefecture_id" => 5,
                "city_id" => 317,
                "street_id" => 18127,
                "name" => "森岳",
                "hiragana" => "もりたけ",
                "katakana" => "モリタケ",
                "katakana_half" => "ﾓﾘﾀｹ",
                "romaji" => "moritake",
                "memo" => "",
                "latitude" => "40.103119",
                "altitude" => "140.070839",
            ]);
            
            Station::create([
                "id" => 1068,
                "prefecture_id" => 5,
                "city_id" => 311,
                "street_id" => null,
                "name" => "北金岡",
                "hiragana" => "きたかなおか",
                "katakana" => "キタカナオカ",
                "katakana_half" => "ｷﾀｶﾅｵｶ",
                "romaji" => "kitakanaoka",
                "memo" => "",
                "latitude" => "40.141699",
                "altitude" => "140.063449",
            ]);
            
            Station::create([
                "id" => 1069,
                "prefecture_id" => 5,
                "city_id" => 302,
                "street_id" => 16605,
                "name" => "鶴形",
                "hiragana" => "つるがた",
                "katakana" => "ツルガタ",
                "katakana_half" => "ﾂﾙｶﾞﾀ",
                "romaji" => "tsurugata",
                "memo" => "",
                "latitude" => "40.203943",
                "altitude" => "140.118498",
            ]);
            
            Station::create([
                "id" => 1070,
                "prefecture_id" => 5,
                "city_id" => 302,
                "street_id" => 16683,
                "name" => "富根",
                "hiragana" => "とみね",
                "katakana" => "トミネ",
                "katakana_half" => "ﾄﾐﾈ",
                "romaji" => "tomine",
                "memo" => "",
                "latitude" => "40.217998",
                "altitude" => "140.172798",
            ]);
            
            Station::create([
                "id" => 1071,
                "prefecture_id" => 5,
                "city_id" => 302,
                "street_id" => 16652,
                "name" => "二ツ井",
                "hiragana" => "ふたつい",
                "katakana" => "フタツイ",
                "katakana_half" => "ﾌﾀﾂｲ",
                "romaji" => "futatsui",
                "memo" => "",
                "latitude" => "40.212500",
                "altitude" => "140.235710",
            ]);
            
            Station::create([
                "id" => 1072,
                "prefecture_id" => 5,
                "city_id" => 311,
                "street_id" => 17906,
                "name" => "前山",
                "hiragana" => "まえやま",
                "katakana" => "マエヤマ",
                "katakana_half" => "ﾏｴﾔﾏ",
                "romaji" => "maeyama",
                "memo" => "",
                "latitude" => "40.214668",
                "altitude" => "140.312342",
            ]);
            
            Station::create([
                "id" => 1073,
                "prefecture_id" => 5,
                "city_id" => 311,
                "street_id" => 17891,
                "name" => "鷹ノ巣",
                "hiragana" => "たかのす",
                "katakana" => "タカノス",
                "katakana_half" => "ﾀｶﾉｽ",
                "romaji" => "takanosu",
                "memo" => "",
                "latitude" => "40.232195",
                "altitude" => "140.369309",
            ]);
            
            Station::create([
                "id" => 1074,
                "prefecture_id" => 5,
                "city_id" => 324,
                "street_id" => 18344,
                "name" => "糠沢",
                "hiragana" => "ぬかざわ",
                "katakana" => "ヌカザワ",
                "katakana_half" => "ﾇｶｻﾞﾜ",
                "romaji" => "nukazawa",
                "memo" => "",
                "latitude" => "40.250666",
                "altitude" => "140.397527",
            ]);
            
            Station::create([
                "id" => 1075,
                "prefecture_id" => 5,
                "city_id" => 304,
                "street_id" => 17149,
                "name" => "早口",
                "hiragana" => "はやぐち",
                "katakana" => "ハヤグチ",
                "katakana_half" => "ﾊﾔｸﾞﾁ",
                "romaji" => "hayaguchi",
                "memo" => "",
                "latitude" => "40.271359",
                "altitude" => "140.447467",
            ]);
            
            Station::create([
                "id" => 1076,
                "prefecture_id" => 5,
                "city_id" => 301,
                "street_id" => 16211,
                "name" => "下川沿",
                "hiragana" => "しもかわぞい",
                "katakana" => "シモカワゾイ",
                "katakana_half" => "ｼﾓｶﾜｿﾞｲ",
                "romaji" => "shimokawazoi",
                "memo" => "",
                "latitude" => "40.276359",
                "altitude" => "140.496796",
            ]);
            
            Station::create([
                "id" => 1077,
                "prefecture_id" => 5,
                "city_id" => 304,
                "street_id" => null,
                "name" => "大館",
                "hiragana" => "おおだて",
                "katakana" => "オオダテ",
                "katakana_half" => "ｵｵﾀﾞﾃ",
                "romaji" => "oodate",
                "memo" => "",
                "latitude" => "40.288026",
                "altitude" => "140.555680",
            ]);
            
            Station::create([
                "id" => 1078,
                "prefecture_id" => 5,
                "city_id" => 304,
                "street_id" => 17109,
                "name" => "白沢",
                "hiragana" => "しらさわ",
                "katakana" => "シラサワ",
                "katakana_half" => "ｼﾗｻﾜ",
                "romaji" => "shirasawa",
                "memo" => "秋田県",
                "latitude" => "40.337993",
                "altitude" => "140.591563",
            ]);
            
            Station::create([
                "id" => 1079,
                "prefecture_id" => 5,
                "city_id" => 308,
                "street_id" => 17467,
                "name" => "陣場",
                "hiragana" => "じんば",
                "katakana" => "ジンバ",
                "katakana_half" => "ｼﾞﾝﾊﾞ",
                "romaji" => "jinba",
                "memo" => "",
                "latitude" => "40.399126",
                "altitude" => "140.607642",
            ]);
            
            Station::create([
                "id" => 1080,
                "prefecture_id" => 5,
                "city_id" => 302,
                "street_id" => 16606,
                "name" => "出戸浜",
                "hiragana" => "でとはま",
                "katakana" => "デトハマ",
                "katakana_half" => "ﾃﾞﾄﾊﾏ",
                "romaji" => "detohama",
                "memo" => "",
                "latitude" => "39.844202",
                "altitude" => "140.024772",
            ]);
            
            Station::create([
                "id" => 1081,
                "prefecture_id" => 5,
                "city_id" => 306,
                "street_id" => 17275,
                "name" => "上二田",
                "hiragana" => "かみふただ",
                "katakana" => "カミフタダ",
                "katakana_half" => "ｶﾐﾌﾀﾀﾞ",
                "romaji" => "kamifutada",
                "memo" => "",
                "latitude" => "39.868755",
                "altitude" => "140.004299",
            ]);
            
            Station::create([
                "id" => 1082,
                "prefecture_id" => 5,
                "city_id" => 301,
                "street_id" => 16453,
                "name" => "二田",
                "hiragana" => "ふただ",
                "katakana" => "フタダ",
                "katakana_half" => "ﾌﾀﾀﾞ",
                "romaji" => "futada",
                "memo" => "",
                "latitude" => "39.881226",
                "altitude" => "139.987578",
            ]);
            
            Station::create([
                "id" => 1083,
                "prefecture_id" => 5,
                "city_id" => 309,
                "street_id" => 17611,
                "name" => "天王",
                "hiragana" => "てんのう",
                "katakana" => "テンノウ",
                "katakana_half" => "ﾃﾝﾉｳ",
                "romaji" => "tennou",
                "memo" => "",
                "latitude" => "39.898751",
                "altitude" => "139.963802",
            ]);
            
            Station::create([
                "id" => 1084,
                "prefecture_id" => 5,
                "city_id" => 305,
                "street_id" => 17229,
                "name" => "船越",
                "hiragana" => "ふなこし",
                "katakana" => "フナコシ",
                "katakana_half" => "ﾌﾅｺｼ",
                "romaji" => "funakoshi",
                "memo" => "",
                "latitude" => "39.904778",
                "altitude" => "139.946859",
            ]);
            
            Station::create([
                "id" => 1085,
                "prefecture_id" => 5,
                "city_id" => 305,
                "street_id" => 17232,
                "name" => "脇本",
                "hiragana" => "わきもと",
                "katakana" => "ワキモト",
                "katakana_half" => "ﾜｷﾓﾄ",
                "romaji" => "wakimoto",
                "memo" => "",
                "latitude" => "39.915303",
                "altitude" => "139.902557",
            ]);
            
            Station::create([
                "id" => 1086,
                "prefecture_id" => 5,
                "city_id" => 324,
                "street_id" => null,
                "name" => "羽立",
                "hiragana" => "はだち",
                "katakana" => "ハダチ",
                "katakana_half" => "ﾊﾀﾞﾁ",
                "romaji" => "hadachi",
                "memo" => "",
                "latitude" => "39.904443",
                "altitude" => "139.862005",
            ]);
            
            Station::create([
                "id" => 1087,
                "prefecture_id" => 5,
                "city_id" => 305,
                "street_id" => null,
                "name" => "男鹿",
                "hiragana" => "おが",
                "katakana" => "オガ",
                "katakana_half" => "ｵｶﾞ",
                "romaji" => "oga",
                "memo" => "",
                "latitude" => "39.883972",
                "altitude" => "139.848257",
            ]);
            
            Station::create([
                "id" => 1088,
                "prefecture_id" => 5,
                "city_id" => 306,
                "street_id" => null,
                "name" => "湯瀬温泉",
                "hiragana" => "ゆぜおんせん",
                "katakana" => "ユゼオンセン",
                "katakana_half" => "ﾕｾﾞｵﾝｾﾝ",
                "romaji" => "yuzeonsen",
                "memo" => "",
                "latitude" => "40.122493",
                "altitude" => "140.840386",
            ]);
            
            Station::create([
                "id" => 1089,
                "prefecture_id" => 5,
                "city_id" => 307,
                "street_id" => 17358,
                "name" => "八幡平",
                "hiragana" => "はちまんたい",
                "katakana" => "ハチマンタイ",
                "katakana_half" => "ﾊﾁﾏﾝﾀｲ",
                "romaji" => "hachimantai",
                "memo" => "",
                "latitude" => "40.142934",
                "altitude" => "140.804359",
            ]);
            
            Station::create([
                "id" => 1090,
                "prefecture_id" => 5,
                "city_id" => 301,
                "street_id" => null,
                "name" => "陸中大里",
                "hiragana" => "りくちゅうおおさと",
                "katakana" => "リクチュウオオサト",
                "katakana_half" => "ﾘｸﾁｭｳｵｵｻﾄ",
                "romaji" => "rikuchuuoosato",
                "memo" => "",
                "latitude" => "40.158543",
                "altitude" => "140.793360",
            ]);
            
            Station::create([
                "id" => 1091,
                "prefecture_id" => 5,
                "city_id" => 307,
                "street_id" => null,
                "name" => "鹿角花輪",
                "hiragana" => "かづのはなわ",
                "katakana" => "カヅノハナワ",
                "katakana_half" => "ｶﾂﾞﾉﾊﾅﾜ",
                "romaji" => "kazunohanawa",
                "memo" => "",
                "latitude" => "40.188623",
                "altitude" => "140.785165",
            ]);
            
            Station::create([
                "id" => 1092,
                "prefecture_id" => 5,
                "city_id" => 301,
                "street_id" => null,
                "name" => "柴平",
                "hiragana" => "しばひら",
                "katakana" => "シバヒラ",
                "katakana_half" => "ｼﾊﾞﾋﾗ",
                "romaji" => "shibahira",
                "memo" => "",
                "latitude" => "40.230757",
                "altitude" => "140.788051",
            ]);
            
            Station::create([
                "id" => 1093,
                "prefecture_id" => 5,
                "city_id" => 307,
                "street_id" => 17349,
                "name" => "十和田南",
                "hiragana" => "とわだみなみ",
                "katakana" => "トワダミナミ",
                "katakana_half" => "ﾄﾜﾀﾞﾐﾅﾐ",
                "romaji" => "towadaminami",
                "memo" => "",
                "latitude" => "40.256005",
                "altitude" => "140.770580",
            ]);
            
            Station::create([
                "id" => 1094,
                "prefecture_id" => 5,
                "city_id" => 302,
                "street_id" => 16589,
                "name" => "末広",
                "hiragana" => "すえひろ",
                "katakana" => "スエヒロ",
                "katakana_half" => "ｽｴﾋﾛ",
                "romaji" => "suehiro",
                "memo" => "",
                "latitude" => "40.229951",
                "altitude" => "140.737334",
            ]);
            
            Station::create([
                "id" => 1095,
                "prefecture_id" => 5,
                "city_id" => 301,
                "street_id" => 16392,
                "name" => "土深井",
                "hiragana" => "どぶかい",
                "katakana" => "ドブカイ",
                "katakana_half" => "ﾄﾞﾌﾞｶｲ",
                "romaji" => "dobukai",
                "memo" => "",
                "latitude" => "40.222452",
                "altitude" => "140.712974",
            ]);
            
            Station::create([
                "id" => 1096,
                "prefecture_id" => 5,
                "city_id" => 306,
                "street_id" => null,
                "name" => "沢尻",
                "hiragana" => "さわじり",
                "katakana" => "サワジリ",
                "katakana_half" => "ｻﾜｼﾞﾘ",
                "romaji" => "sawajiri",
                "memo" => "",
                "latitude" => "40.230284",
                "altitude" => "140.693310",
            ]);
            
            Station::create([
                "id" => 1097,
                "prefecture_id" => 5,
                "city_id" => 304,
                "street_id" => 17107,
                "name" => "十二所",
                "hiragana" => "じゅうにしょ",
                "katakana" => "ジュウニショ",
                "katakana_half" => "ｼﾞｭｳﾆｼｮ",
                "romaji" => "juunisho",
                "memo" => "",
                "latitude" => "40.214396",
                "altitude" => "140.668174",
            ]);
            
            Station::create([
                "id" => 1098,
                "prefecture_id" => 5,
                "city_id" => 304,
                "street_id" => null,
                "name" => "大滝温泉",
                "hiragana" => "おおたきおんせん",
                "katakana" => "オオタキオンセン",
                "katakana_half" => "ｵｵﾀｷｵﾝｾﾝ",
                "romaji" => "ootakionsen",
                "memo" => "",
                "latitude" => "40.209813",
                "altitude" => "140.639731",
            ]);
            
            Station::create([
                "id" => 1099,
                "prefecture_id" => 5,
                "city_id" => 302,
                "street_id" => 16539,
                "name" => "扇田",
                "hiragana" => "おうぎた",
                "katakana" => "オウギタ",
                "katakana_half" => "ｵｳｷﾞﾀ",
                "romaji" => "ougita",
                "memo" => "",
                "latitude" => "40.229199",
                "altitude" => "140.572486",
            ]);
            
            Station::create([
                "id" => 1100,
                "prefecture_id" => 5,
                "city_id" => 302,
                "street_id" => 16644,
                "name" => "東大館",
                "hiragana" => "ひがしおおだて",
                "katakana" => "ヒガシオオダテ",
                "katakana_half" => "ﾋｶﾞｼｵｵﾀﾞﾃ",
                "romaji" => "higashioodate",
                "memo" => "",
                "latitude" => "40.266222",
                "altitude" => "140.554570",
            ]);
            
            Station::create([
                "id" => 1101,
                "prefecture_id" => 5,
                "city_id" => 312,
                "street_id" => 17953,
                "name" => "小砂川",
                "hiragana" => "こさがわ",
                "katakana" => "コサガワ",
                "katakana_half" => "ｺｻｶﾞﾜ",
                "romaji" => "kosagawa",
                "memo" => "",
                "latitude" => "39.137525",
                "altitude" => "139.885538",
            ]);
            
            Station::create([
                "id" => 1102,
                "prefecture_id" => 5,
                "city_id" => 309,
                "street_id" => null,
                "name" => "上浜",
                "hiragana" => "かみはま",
                "katakana" => "カミハマ",
                "katakana_half" => "ｶﾐﾊﾏ",
                "romaji" => "kamihama",
                "memo" => "",
                "latitude" => "39.164579",
                "altitude" => "139.902730",
            ]);
            
            Station::create([
                "id" => 1103,
                "prefecture_id" => 5,
                "city_id" => 312,
                "street_id" => 17923,
                "name" => "象潟",
                "hiragana" => "きさかた",
                "katakana" => "キサカタ",
                "katakana_half" => "ｷｻｶﾀ",
                "romaji" => "kisakata",
                "memo" => "",
                "latitude" => "39.207574",
                "altitude" => "139.902283",
            ]);
            
            Station::create([
                "id" => 1104,
                "prefecture_id" => 5,
                "city_id" => 312,
                "street_id" => 17994,
                "name" => "金浦",
                "hiragana" => "このうら",
                "katakana" => "コノウラ",
                "katakana_half" => "ｺﾉｳﾗ",
                "romaji" => "konoura",
                "memo" => "",
                "latitude" => "39.256208",
                "altitude" => "139.920557",
            ]);
            
            Station::create([
                "id" => 1105,
                "prefecture_id" => 5,
                "city_id" => 315,
                "street_id" => null,
                "name" => "仁賀保",
                "hiragana" => "にかほ",
                "katakana" => "ニカホ",
                "katakana_half" => "ﾆｶﾎ",
                "romaji" => "nikaho",
                "memo" => "",
                "latitude" => "39.289732",
                "altitude" => "139.964496",
            ]);
            
            Station::create([
                "id" => 1106,
                "prefecture_id" => 5,
                "city_id" => 308,
                "street_id" => 17521,
                "name" => "西目",
                "hiragana" => "にしめ",
                "katakana" => "ニシメ",
                "katakana_half" => "ﾆｼﾒ",
                "romaji" => "nishime",
                "memo" => "",
                "latitude" => "39.347727",
                "altitude" => "140.018684",
            ]);
            
            Station::create([
                "id" => 1107,
                "prefecture_id" => 5,
                "city_id" => 324,
                "street_id" => null,
                "name" => "羽後本荘",
                "hiragana" => "うごほんじょう",
                "katakana" => "ウゴホンジョウ",
                "katakana_half" => "ｳｺﾞﾎﾝｼﾞｮｳ",
                "romaji" => "ugohonjou",
                "memo" => "",
                "latitude" => "39.386863",
                "altitude" => "140.057679",
            ]);
            
            Station::create([
                "id" => 1108,
                "prefecture_id" => 5,
                "city_id" => 324,
                "street_id" => null,
                "name" => "羽後岩谷",
                "hiragana" => "うごいわや",
                "katakana" => "ウゴイワヤ",
                "katakana_half" => "ｳｺﾞｲﾜﾔ",
                "romaji" => "ugoiwaya",
                "memo" => "",
                "latitude" => "39.442136",
                "altitude" => "140.090479",
            ]);
            
            Station::create([
                "id" => 1109,
                "prefecture_id" => 5,
                "city_id" => 303,
                "street_id" => 16877,
                "name" => "折渡",
                "hiragana" => "おりわたり",
                "katakana" => "オリワタリ",
                "katakana_half" => "ｵﾘﾜﾀﾘ",
                "romaji" => "oriwatari",
                "memo" => "",
                "latitude" => "39.476465",
                "altitude" => "140.091144",
            ]);
            
            Station::create([
                "id" => 1110,
                "prefecture_id" => 5,
                "city_id" => 324,
                "street_id" => null,
                "name" => "羽後亀田",
                "hiragana" => "うごかめだ",
                "katakana" => "ウゴカメダ",
                "katakana_half" => "ｳｺﾞｶﾒﾀﾞ",
                "romaji" => "ugokameda",
                "memo" => "",
                "latitude" => "39.493796",
                "altitude" => "140.062896",
            ]);
            
            Station::create([
                "id" => 1111,
                "prefecture_id" => 5,
                "city_id" => 301,
                "street_id" => 16357,
                "name" => "岩城みなと",
                "hiragana" => "いわきみなと",
                "katakana" => "イワキミナト",
                "katakana_half" => "ｲﾜｷﾐﾅﾄ",
                "romaji" => "iwakiminato",
                "memo" => "",
                "latitude" => "39.545041",
                "altitude" => "140.054922",
            ]);
            
            Station::create([
                "id" => 1112,
                "prefecture_id" => 5,
                "city_id" => 301,
                "street_id" => 16296,
                "name" => "道川",
                "hiragana" => "みちかわ",
                "katakana" => "ミチカワ",
                "katakana_half" => "ﾐﾁｶﾜ",
                "romaji" => "michikawa",
                "memo" => "",
                "latitude" => "39.560538",
                "altitude" => "140.057060",
            ]);
            
            Station::create([
                "id" => 1113,
                "prefecture_id" => 5,
                "city_id" => 301,
                "street_id" => 16362,
                "name" => "下浜",
                "hiragana" => "しもはま",
                "katakana" => "シモハマ",
                "katakana_half" => "ｼﾓﾊﾏ",
                "romaji" => "shimohama",
                "memo" => "",
                "latitude" => "39.619588",
                "altitude" => "140.064584",
            ]);
            
            Station::create([
                "id" => 1114,
                "prefecture_id" => 5,
                "city_id" => 301,
                "street_id" => 16362,
                "name" => "桂根",
                "hiragana" => "かつらね",
                "katakana" => "カツラネ",
                "katakana_half" => "ｶﾂﾗﾈ",
                "romaji" => "katsurane",
                "memo" => "",
                "latitude" => "39.647808",
                "altitude" => "140.066361",
            ]);
            
            Station::create([
                "id" => 1115,
                "prefecture_id" => 5,
                "city_id" => 301,
                "street_id" => 16201,
                "name" => "新屋",
                "hiragana" => "あらや",
                "katakana" => "アラヤ",
                "katakana_half" => "ｱﾗﾔ",
                "romaji" => "araya",
                "memo" => "秋田県",
                "latitude" => "39.677388",
                "altitude" => "140.087746",
            ]);
            
            Station::create([
                "id" => 1116,
                "prefecture_id" => 5,
                "city_id" => 324,
                "street_id" => null,
                "name" => "羽後牛島",
                "hiragana" => "うごうしじま",
                "katakana" => "ウゴウシジマ",
                "katakana_half" => "ｳｺﾞｳｼｼﾞﾏ",
                "romaji" => "ugoushijima",
                "memo" => "",
                "latitude" => "39.695970",
                "altitude" => "140.116520",
            ]);
            
            Station::create([
                "id" => 1117,
                "prefecture_id" => 5,
                "city_id" => 313,
                "street_id" => 18075,
                "name" => "刺巻",
                "hiragana" => "さしまき",
                "katakana" => "サシマキ",
                "katakana_half" => "ｻｼﾏｷ",
                "romaji" => "sashimaki",
                "memo" => "",
                "latitude" => "39.668483",
                "altitude" => "140.691890",
            ]);
            
            Station::create([
                "id" => 1118,
                "prefecture_id" => 5,
                "city_id" => 313,
                "street_id" => 18076,
                "name" => "神代",
                "hiragana" => "じんだい",
                "katakana" => "ジンダイ",
                "katakana_half" => "ｼﾞﾝﾀﾞｲ",
                "romaji" => "jindai",
                "memo" => "秋田県",
                "latitude" => "39.622737",
                "altitude" => "140.627371",
            ]);
            
            Station::create([
                "id" => 1119,
                "prefecture_id" => 5,
                "city_id" => 303,
                "street_id" => 16750,
                "name" => "生田",
                "hiragana" => "しょうでん",
                "katakana" => "ショウデン",
                "katakana_half" => "ｼｮｳﾃﾞﾝ",
                "romaji" => "shouden",
                "memo" => "秋田県",
                "latitude" => "39.612154",
                "altitude" => "140.601318",
            ]);
            
            Station::create([
                "id" => 1120,
                "prefecture_id" => 5,
                "city_id" => 310,
                "street_id" => 17668,
                "name" => "鶯野",
                "hiragana" => "うぐいすの",
                "katakana" => "ウグイスノ",
                "katakana_half" => "ｳｸﾞｲｽﾉ",
                "romaji" => "uguisuno",
                "memo" => "",
                "latitude" => "39.568519",
                "altitude" => "140.557907",
            ]);
            
            Station::create([
                "id" => 1121,
                "prefecture_id" => 5,
                "city_id" => 324,
                "street_id" => null,
                "name" => "羽後長野",
                "hiragana" => "うごながの",
                "katakana" => "ウゴナガノ",
                "katakana_half" => "ｳｺﾞﾅｶﾞﾉ",
                "romaji" => "ugonagano",
                "memo" => "",
                "latitude" => "39.545965",
                "altitude" => "140.540909",
            ]);
            
            Station::create([
                "id" => 1122,
                "prefecture_id" => 5,
                "city_id" => 310,
                "street_id" => 17840,
                "name" => "鑓見内",
                "hiragana" => "やりみない",
                "katakana" => "ヤリミナイ",
                "katakana_half" => "ﾔﾘﾐﾅｲ",
                "romaji" => "yariminai",
                "memo" => "",
                "latitude" => "39.519246",
                "altitude" => "140.527605",
            ]);
            
            Station::create([
                "id" => 1123,
                "prefecture_id" => 5,
                "city_id" => 324,
                "street_id" => null,
                "name" => "羽後四ツ屋",
                "hiragana" => "うごよつや",
                "katakana" => "ウゴヨツヤ",
                "katakana_half" => "ｳｺﾞﾖﾂﾔ",
                "romaji" => "ugoyotsuya",
                "memo" => "",
                "latitude" => "39.501720",
                "altitude" => "140.511831",
            ]);
            
            Station::create([
                "id" => 1124,
                "prefecture_id" => 5,
                "city_id" => 311,
                "street_id" => null,
                "name" => "北大曲",
                "hiragana" => "きたおおまがり",
                "katakana" => "キタオオマガリ",
                "katakana_half" => "ｷﾀｵｵﾏｶﾞﾘ",
                "romaji" => "kitaoomagari",
                "memo" => "",
                "latitude" => "39.489499",
                "altitude" => "140.497943",
            ]);
            
            Station::create([
                "id" => 1125,
                "prefecture_id" => 5,
                "city_id" => 301,
                "street_id" => 16386,
                "name" => "黒沢",
                "hiragana" => "くろさわ",
                "katakana" => "クロサワ",
                "katakana_half" => "ｸﾛｻﾜ",
                "romaji" => "kurosawa",
                "memo" => "北上線",
                "latitude" => "39.276053",
                "altitude" => "140.699714",
            ]);
            
            Station::create([
                "id" => 1126,
                "prefecture_id" => 5,
                "city_id" => 303,
                "street_id" => 16807,
                "name" => "小松川",
                "hiragana" => "こまつかわ",
                "katakana" => "コマツカワ",
                "katakana_half" => "ｺﾏﾂｶﾜ",
                "romaji" => "komatsukawa",
                "memo" => "",
                "latitude" => "39.293411",
                "altitude" => "140.646273",
            ]);
            
            Station::create([
                "id" => 1127,
                "prefecture_id" => 5,
                "city_id" => 308,
                "street_id" => 17547,
                "name" => "平石",
                "hiragana" => "ひらいし",
                "katakana" => "ヒライシ",
                "katakana_half" => "ﾋﾗｲｼ",
                "romaji" => "hiraishi",
                "memo" => "",
                "latitude" => "39.291633",
                "altitude" => "140.628441",
            ]);
            
            Station::create([
                "id" => 1128,
                "prefecture_id" => 5,
                "city_id" => 301,
                "street_id" => 16393,
                "name" => "相野々",
                "hiragana" => "あいのの",
                "katakana" => "アイノノ",
                "katakana_half" => "ｱｲﾉﾉ",
                "romaji" => "ainono",
                "memo" => "",
                "latitude" => "39.278051",
                "altitude" => "140.618803",
            ]);
            
            Station::create([
                "id" => 1129,
                "prefecture_id" => 5,
                "city_id" => 301,
                "street_id" => 16381,
                "name" => "矢美津",
                "hiragana" => "やびつ",
                "katakana" => "ヤビツ",
                "katakana_half" => "ﾔﾋﾞﾂ",
                "romaji" => "yabitsu",
                "memo" => "",
                "latitude" => "39.291189",
                "altitude" => "140.592000",
            ]);
            
            Station::create([
                "id" => 1130,
                "prefecture_id" => 5,
                "city_id" => 311,
                "street_id" => 17891,
                "name" => "鷹巣",
                "hiragana" => "たかのす",
                "katakana" => "タカノス",
                "katakana_half" => "ﾀｶﾉｽ",
                "romaji" => "takanosu",
                "memo" => "",
                "latitude" => "40.231917",
                "altitude" => "140.368753",
            ]);
            
            Station::create([
                "id" => 1131,
                "prefecture_id" => 5,
                "city_id" => 301,
                "street_id" => 16199,
                "name" => "西鷹巣",
                "hiragana" => "にしたかのす",
                "katakana" => "ニシタカノス",
                "katakana_half" => "ﾆｼﾀｶﾉｽ",
                "romaji" => "nishitakanosu",
                "memo" => "",
                "latitude" => "40.224639",
                "altitude" => "140.357865",
            ]);
            
            Station::create([
                "id" => 1132,
                "prefecture_id" => 5,
                "city_id" => 314,
                "street_id" => null,
                "name" => "小ケ田",
                "hiragana" => "おがた",
                "katakana" => "オガタ",
                "katakana_half" => "ｵｶﾞﾀ",
                "romaji" => "ogata",
                "memo" => "",
                "latitude" => "40.205003",
                "altitude" => "140.349200",
            ]);
            
            Station::create([
                "id" => 1133,
                "prefecture_id" => 5,
                "city_id" => 308,
                "street_id" => 17429,
                "name" => "大野台",
                "hiragana" => "おおのだい",
                "katakana" => "オオノダイ",
                "katakana_half" => "ｵｵﾉﾀﾞｲ",
                "romaji" => "oonodai",
                "memo" => "",
                "latitude" => "40.186865",
                "altitude" => "140.340507",
            ]);
            
            Station::create([
                "id" => 1134,
                "prefecture_id" => 5,
                "city_id" => 301,
                "street_id" => 16196,
                "name" => "合川",
                "hiragana" => "あいかわ",
                "katakana" => "アイカワ",
                "katakana_half" => "ｱｲｶﾜ",
                "romaji" => "aikawa",
                "memo" => "",
                "latitude" => "40.161146",
                "altitude" => "140.330092",
            ]);
            
            Station::create([
                "id" => 1135,
                "prefecture_id" => 5,
                "city_id" => 311,
                "street_id" => 17877,
                "name" => "上杉",
                "hiragana" => "かみすぎ",
                "katakana" => "カミスギ",
                "katakana_half" => "ｶﾐｽｷﾞ",
                "romaji" => "kamisugi",
                "memo" => "",
                "latitude" => "40.146259",
                "altitude" => "140.349675",
            ]);
            
            Station::create([
                "id" => 1136,
                "prefecture_id" => 5,
                "city_id" => 311,
                "street_id" => 17914,
                "name" => "米内沢",
                "hiragana" => "よないざわ",
                "katakana" => "ヨナイザワ",
                "katakana_half" => "ﾖﾅｲｻﾞﾜ",
                "romaji" => "yonaizawa",
                "memo" => "",
                "latitude" => "40.128400",
                "altitude" => "140.373313",
            ]);
            
            Station::create([
                "id" => 1137,
                "prefecture_id" => 5,
                "city_id" => 311,
                "street_id" => 17875,
                "name" => "桂瀬",
                "hiragana" => "かつらせ",
                "katakana" => "カツラセ",
                "katakana_half" => "ｶﾂﾗｾ",
                "romaji" => "katsurase",
                "memo" => "",
                "latitude" => "40.101459",
                "altitude" => "140.417699",
            ]);
            
            Station::create([
                "id" => 1138,
                "prefecture_id" => 5,
                "city_id" => 311,
                "street_id" => 17867,
                "name" => "阿仁前田",
                "hiragana" => "あにまえだ",
                "katakana" => "アニマエダ",
                "katakana_half" => "ｱﾆﾏｴﾀﾞ",
                "romaji" => "animaeda",
                "memo" => "",
                "latitude" => "40.061547",
                "altitude" => "140.417840",
            ]);
            
            Station::create([
                "id" => 1139,
                "prefecture_id" => 5,
                "city_id" => 304,
                "street_id" => 17152,
                "name" => "前田南",
                "hiragana" => "まえだみなみ",
                "katakana" => "マエダミナミ",
                "katakana_half" => "ﾏｴﾀﾞﾐﾅﾐ",
                "romaji" => "maedaminami",
                "memo" => "",
                "latitude" => "40.050548",
                "altitude" => "140.402481",
            ]);
            
            Station::create([
                "id" => 1140,
                "prefecture_id" => 5,
                "city_id" => 311,
                "street_id" => 17859,
                "name" => "小渕",
                "hiragana" => "こぶち",
                "katakana" => "コブチ",
                "katakana_half" => "ｺﾌﾞﾁ",
                "romaji" => "kobuchi",
                "memo" => "",
                "latitude" => "40.033716",
                "altitude" => "140.401148",
            ]);
            
            Station::create([
                "id" => 1141,
                "prefecture_id" => 5,
                "city_id" => 315,
                "street_id" => null,
                "name" => "阿仁合",
                "hiragana" => "あにあい",
                "katakana" => "アニアイ",
                "katakana_half" => "ｱﾆｱｲ",
                "romaji" => "aniai",
                "memo" => "",
                "latitude" => "40.000054",
                "altitude" => "140.401122",
            ]);
            
            Station::create([
                "id" => 1142,
                "prefecture_id" => 5,
                "city_id" => 311,
                "street_id" => 17848,
                "name" => "荒瀬",
                "hiragana" => "あらせ",
                "katakana" => "アラセ",
                "katakana_half" => "ｱﾗｾ",
                "romaji" => "arase",
                "memo" => "",
                "latitude" => "39.979917",
                "altitude" => "140.402373",
            ]);
            
            Station::create([
                "id" => 1143,
                "prefecture_id" => 5,
                "city_id" => 311,
                "street_id" => 17853,
                "name" => "萱草",
                "hiragana" => "かやくさ",
                "katakana" => "カヤクサ",
                "katakana_half" => "ｶﾔｸｻ",
                "romaji" => "kayakusa",
                "memo" => "",
                "latitude" => "39.958419",
                "altitude" => "140.412429",
            ]);
            
            Station::create([
                "id" => 1144,
                "prefecture_id" => 5,
                "city_id" => 311,
                "street_id" => 17851,
                "name" => "笑内",
                "hiragana" => "おかしない",
                "katakana" => "オカシナイ",
                "katakana_half" => "ｵｶｼﾅｲ",
                "romaji" => "okashinai",
                "memo" => "",
                "latitude" => "39.935005",
                "altitude" => "140.413012",
            ]);
            
            Station::create([
                "id" => 1145,
                "prefecture_id" => 5,
                "city_id" => 308,
                "street_id" => 17397,
                "name" => "岩野目",
                "hiragana" => "いわのめ",
                "katakana" => "イワノメ",
                "katakana_half" => "ｲﾜﾉﾒ",
                "romaji" => "iwanome",
                "memo" => "",
                "latitude" => "39.921007",
                "altitude" => "140.430762",
            ]);
            
            Station::create([
                "id" => 1146,
                "prefecture_id" => 5,
                "city_id" => 311,
                "street_id" => 17865,
                "name" => "比立内",
                "hiragana" => "ひたちない",
                "katakana" => "ヒタチナイ",
                "katakana_half" => "ﾋﾀﾁﾅｲ",
                "romaji" => "hitachinai",
                "memo" => "",
                "latitude" => "39.904759",
                "altitude" => "140.453233",
            ]);
            
            Station::create([
                "id" => 1147,
                "prefecture_id" => 5,
                "city_id" => 301,
                "street_id" => null,
                "name" => "奥阿仁",
                "hiragana" => "おくあに",
                "katakana" => "オクアニ",
                "katakana_half" => "ｵｸｱﾆ",
                "romaji" => "okuani",
                "memo" => "",
                "latitude" => "39.911009",
                "altitude" => "140.488785",
            ]);
            
            Station::create([
                "id" => 1148,
                "prefecture_id" => 5,
                "city_id" => 315,
                "street_id" => null,
                "name" => "阿仁マタギ",
                "hiragana" => "あにまたぎ",
                "katakana" => "アニマタギ",
                "katakana_half" => "ｱﾆﾏﾀｷﾞ",
                "romaji" => "animatagi",
                "memo" => "",
                "latitude" => "39.919731",
                "altitude" => "140.515672",
            ]);
            
            Station::create([
                "id" => 1149,
                "prefecture_id" => 5,
                "city_id" => 302,
                "street_id" => 16641,
                "name" => "戸沢",
                "hiragana" => "とざわ",
                "katakana" => "トザワ",
                "katakana_half" => "ﾄｻﾞﾜ",
                "romaji" => "tozawa",
                "memo" => "",
                "latitude" => "39.859071",
                "altitude" => "140.581141",
            ]);
            
            Station::create([
                "id" => 1150,
                "prefecture_id" => 5,
                "city_id" => 313,
                "street_id" => 18082,
                "name" => "上桧木内",
                "hiragana" => "かみひのきない",
                "katakana" => "カミヒノキナイ",
                "katakana_half" => "ｶﾐﾋﾉｷﾅｲ",
                "romaji" => "kamihinokinai",
                "memo" => "",
                "latitude" => "39.817881",
                "altitude" => "140.582615",
            ]);
            
            Station::create([
                "id" => 1151,
                "prefecture_id" => 5,
                "city_id" => 301,
                "street_id" => 16503,
                "name" => "左通",
                "hiragana" => "さどおり",
                "katakana" => "サドオリ",
                "katakana_half" => "ｻﾄﾞｵﾘ",
                "romaji" => "sadoori",
                "memo" => "",
                "latitude" => "39.801939",
                "altitude" => "140.586060",
            ]);
            
            Station::create([
                "id" => 1152,
                "prefecture_id" => 5,
                "city_id" => 324,
                "street_id" => null,
                "name" => "羽後中里",
                "hiragana" => "うごなかざと",
                "katakana" => "ウゴナカザト",
                "katakana_half" => "ｳｺﾞﾅｶｻﾞﾄ",
                "romaji" => "ugonakazato",
                "memo" => "",
                "latitude" => "39.771526",
                "altitude" => "140.603255",
            ]);
            
            Station::create([
                "id" => 1153,
                "prefecture_id" => 5,
                "city_id" => 311,
                "street_id" => 17908,
                "name" => "松葉",
                "hiragana" => "まつば",
                "katakana" => "マツバ",
                "katakana_half" => "ﾏﾂﾊﾞ",
                "romaji" => "matsuba",
                "memo" => "",
                "latitude" => "39.744028",
                "altitude" => "140.590229",
            ]);
            
            Station::create([
                "id" => 1154,
                "prefecture_id" => 5,
                "city_id" => 324,
                "street_id" => null,
                "name" => "羽後長戸呂",
                "hiragana" => "うごながとろ",
                "katakana" => "ウゴナガトロ",
                "katakana_half" => "ｳｺﾞﾅｶﾞﾄﾛ",
                "romaji" => "ugonagatoro",
                "memo" => "",
                "latitude" => "39.727696",
                "altitude" => "140.565260",
            ]);
            
            Station::create([
                "id" => 1155,
                "prefecture_id" => 5,
                "city_id" => 318,
                "street_id" => null,
                "name" => "八津",
                "hiragana" => "やつ",
                "katakana" => "ヤツ",
                "katakana_half" => "ﾔﾂ",
                "romaji" => "yatsu",
                "memo" => "",
                "latitude" => "39.687617",
                "altitude" => "140.552846",
            ]);
            
            Station::create([
                "id" => 1156,
                "prefecture_id" => 5,
                "city_id" => 313,
                "street_id" => 18085,
                "name" => "西明寺",
                "hiragana" => "さいみょうじ",
                "katakana" => "サイミョウジ",
                "katakana_half" => "ｻｲﾐｮｳｼﾞ",
                "romaji" => "saimyouji",
                "memo" => "",
                "latitude" => "39.653149",
                "altitude" => "140.563013",
            ]);
            
            Station::create([
                "id" => 1157,
                "prefecture_id" => 5,
                "city_id" => 324,
                "street_id" => null,
                "name" => "羽後太田",
                "hiragana" => "うごおおた",
                "katakana" => "ウゴオオタ",
                "katakana_half" => "ｳｺﾞｵｵﾀ",
                "romaji" => "ugooota",
                "memo" => "",
                "latitude" => "39.627207",
                "altitude" => "140.574208",
            ]);
            
            Station::create([
                "id" => 1158,
                "prefecture_id" => 5,
                "city_id" => 308,
                "street_id" => 17575,
                "name" => "薬師堂",
                "hiragana" => "やくしどう",
                "katakana" => "ヤクシドウ",
                "katakana_half" => "ﾔｸｼﾄﾞｳ",
                "romaji" => "yakushidou",
                "memo" => "",
                "latitude" => "39.368059",
                "altitude" => "140.048930",
            ]);
            
            Station::create([
                "id" => 1159,
                "prefecture_id" => 5,
                "city_id" => 301,
                "street_id" => 16503,
                "name" => "子吉",
                "hiragana" => "こよし",
                "katakana" => "コヨシ",
                "katakana_half" => "ｺﾖｼ",
                "romaji" => "koyoshi",
                "memo" => "",
                "latitude" => "39.350256",
                "altitude" => "140.059902",
            ]);
            
            Station::create([
                "id" => 1160,
                "prefecture_id" => 5,
                "city_id" => 308,
                "street_id" => 17534,
                "name" => "鮎川",
                "hiragana" => "あゆかわ",
                "katakana" => "アユカワ",
                "katakana_half" => "ｱﾕｶﾜ",
                "romaji" => "ayukawa",
                "memo" => "秋田県",
                "latitude" => "39.328537",
                "altitude" => "140.071320",
            ]);
            
            Station::create([
                "id" => 1161,
                "prefecture_id" => 5,
                "city_id" => 308,
                "street_id" => 17561,
                "name" => "曲沢",
                "hiragana" => "まがりさわ",
                "katakana" => "マガリサワ",
                "katakana_half" => "ﾏｶﾞﾘｻﾜ",
                "romaji" => "magarisawa",
                "memo" => "",
                "latitude" => "39.320843",
                "altitude" => "140.102372",
            ]);
            
            Station::create([
                "id" => 1162,
                "prefecture_id" => 5,
                "city_id" => 303,
                "street_id" => 17019,
                "name" => "前郷",
                "hiragana" => "まえごう",
                "katakana" => "マエゴウ",
                "katakana_half" => "ﾏｴｺﾞｳ",
                "romaji" => "maegou",
                "memo" => "",
                "latitude" => "39.312733",
                "altitude" => "140.112761",
            ]);
            
            Station::create([
                "id" => 1163,
                "prefecture_id" => 5,
                "city_id" => 301,
                "street_id" => 16376,
                "name" => "久保田",
                "hiragana" => "くぼた",
                "katakana" => "クボタ",
                "katakana_half" => "ｸﾎﾞﾀ",
                "romaji" => "kubota",
                "memo" => "秋田県",
                "latitude" => "39.296180",
                "altitude" => "140.111122",
            ]);
            
            Station::create([
                "id" => 1164,
                "prefecture_id" => 5,
                "city_id" => 301,
                "street_id" => 16199,
                "name" => "西滝沢",
                "hiragana" => "にしたきさわ",
                "katakana" => "ニシタキサワ",
                "katakana_half" => "ﾆｼﾀｷｻﾜ",
                "romaji" => "nishitakisawa",
                "memo" => "",
                "latitude" => "39.278431",
                "altitude" => "140.116651",
            ]);
            
            Station::create([
                "id" => 1165,
                "prefecture_id" => 5,
                "city_id" => 308,
                "street_id" => 17594,
                "name" => "吉沢",
                "hiragana" => "よしざわ",
                "katakana" => "ヨシザワ",
                "katakana_half" => "ﾖｼｻﾞﾜ",
                "romaji" => "yoshizawa",
                "memo" => "",
                "latitude" => "39.268626",
                "altitude" => "140.114235",
            ]);
            
            Station::create([
                "id" => 1166,
                "prefecture_id" => 5,
                "city_id" => 308,
                "street_id" => 17577,
                "name" => "川辺",
                "hiragana" => "かわべ",
                "katakana" => "カワベ",
                "katakana_half" => "ｶﾜﾍﾞ",
                "romaji" => "kawabe",
                "memo" => "",
                "latitude" => "39.248879",
                "altitude" => "140.120513",
            ]);
            
            Station::create([
                "id" => 1167,
                "prefecture_id" => 5,
                "city_id" => 308,
                "street_id" => 17576,
                "name" => "矢島",
                "hiragana" => "やしま",
                "katakana" => "ヤシマ",
                "katakana_half" => "ﾔｼﾏ",
                "romaji" => "yashima",
                "memo" => "",
                "latitude" => "39.230242",
                "altitude" => "140.139152",
            ]);
            
    }
}
