<?php
namespace Database\Seeders;

use App\Models\Station;
use Illuminate\Database\Seeder;

class StationSeeder6 extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        
            Station::create([
                "id" => 1168,
                "prefecture_id" => 6,
                "city_id" => 327,
                "street_id" => null,
                "name" => "米沢",
                "hiragana" => "よねざわ",
                "katakana" => "ヨネザワ",
                "katakana_half" => "ﾖﾈｻﾞﾜ",
                "romaji" => "yonezawa",
                "memo" => "",
                "latitude" => "37.909605",
                "altitude" => "140.128325",
            ]);
            
            Station::create([
                "id" => 1169,
                "prefecture_id" => 6,
                "city_id" => 353,
                "street_id" => null,
                "name" => "高畠",
                "hiragana" => "たかはた",
                "katakana" => "タカハタ",
                "katakana_half" => "ﾀｶﾊﾀ",
                "romaji" => "takahata",
                "memo" => "",
                "latitude" => "37.992292",
                "altitude" => "140.152819",
            ]);
            
            Station::create([
                "id" => 1170,
                "prefecture_id" => 6,
                "city_id" => 338,
                "street_id" => 19763,
                "name" => "赤湯",
                "hiragana" => "あかゆ",
                "katakana" => "アカユ",
                "katakana_half" => "ｱｶﾕ",
                "romaji" => "akayu",
                "memo" => "",
                "latitude" => "38.047174",
                "altitude" => "140.149093",
            ]);
            
            Station::create([
                "id" => 1171,
                "prefecture_id" => 6,
                "city_id" => 326,
                "street_id" => 18362,
                "name" => "かみのやま温泉",
                "hiragana" => "かみのやまおんせん",
                "katakana" => "カミノヤマオンセン",
                "katakana_half" => "ｶﾐﾉﾔﾏｵﾝｾﾝ",
                "romaji" => "kaminoyamaonsen",
                "memo" => "",
                "latitude" => "38.152026",
                "altitude" => "140.278661",
            ]);
            
            Station::create([
                "id" => 1172,
                "prefecture_id" => 6,
                "city_id" => 326,
                "street_id" => null,
                "name" => "山形",
                "hiragana" => "やまがた",
                "katakana" => "ヤマガタ",
                "katakana_half" => "ﾔﾏｶﾞﾀ",
                "romaji" => "yamagata",
                "memo" => "",
                "latitude" => "38.248295",
                "altitude" => "140.327486",
            ]);
            
            Station::create([
                "id" => 1173,
                "prefecture_id" => 6,
                "city_id" => 335,
                "street_id" => null,
                "name" => "天童",
                "hiragana" => "てんどう",
                "katakana" => "テンドウ",
                "katakana_half" => "ﾃﾝﾄﾞｳ",
                "romaji" => "tendou",
                "memo" => "",
                "latitude" => "38.359978",
                "altitude" => "140.369256",
            ]);
            
            Station::create([
                "id" => 1174,
                "prefecture_id" => 6,
                "city_id" => 336,
                "street_id" => 19671,
                "name" => "さくらんぼ東根",
                "hiragana" => "さくらんぼひがしね",
                "katakana" => "サクランボヒガシネ",
                "katakana_half" => "ｻｸﾗﾝﾎﾞﾋｶﾞｼﾈ",
                "romaji" => "sakuranbohigashine",
                "memo" => "",
                "latitude" => "38.428222",
                "altitude" => "140.380780",
            ]);
            
            Station::create([
                "id" => 1175,
                "prefecture_id" => 6,
                "city_id" => 333,
                "street_id" => null,
                "name" => "村山",
                "hiragana" => "むらやま",
                "katakana" => "ムラヤマ",
                "katakana_half" => "ﾑﾗﾔﾏ",
                "romaji" => "murayama",
                "memo" => "山形県",
                "latitude" => "38.477132",
                "altitude" => "140.386443",
            ]);
            
            Station::create([
                "id" => 1176,
                "prefecture_id" => 6,
                "city_id" => 345,
                "street_id" => null,
                "name" => "大石田",
                "hiragana" => "おおいしだ",
                "katakana" => "オオイシダ",
                "katakana_half" => "ｵｵｲｼﾀﾞ",
                "romaji" => "ooishida",
                "memo" => "",
                "latitude" => "38.595870",
                "altitude" => "140.375299",
            ]);
            
            Station::create([
                "id" => 1177,
                "prefecture_id" => 6,
                "city_id" => 330,
                "street_id" => null,
                "name" => "新庄",
                "hiragana" => "しんじょう",
                "katakana" => "シンジョウ",
                "katakana_half" => "ｼﾝｼﾞｮｳ",
                "romaji" => "shinjou",
                "memo" => "",
                "latitude" => "38.762407",
                "altitude" => "140.306020",
            ]);
            
            Station::create([
                "id" => 1178,
                "prefecture_id" => 6,
                "city_id" => 327,
                "street_id" => 18651,
                "name" => "板谷",
                "hiragana" => "いたや",
                "katakana" => "イタヤ",
                "katakana_half" => "ｲﾀﾔ",
                "romaji" => "itaya",
                "memo" => "",
                "latitude" => "37.811341",
                "altitude" => "140.268040",
            ]);
            
            Station::create([
                "id" => 1179,
                "prefecture_id" => 6,
                "city_id" => 326,
                "street_id" => null,
                "name" => "峠",
                "hiragana" => "とうげ",
                "katakana" => "トウゲ",
                "katakana_half" => "ﾄｳｹﾞ",
                "romaji" => "touge",
                "memo" => "",
                "latitude" => "37.812395",
                "altitude" => "140.235208",
            ]);
            
            Station::create([
                "id" => 1180,
                "prefecture_id" => 6,
                "city_id" => 327,
                "street_id" => 18655,
                "name" => "大沢",
                "hiragana" => "おおさわ",
                "katakana" => "オオサワ",
                "katakana_half" => "ｵｵｻﾜ",
                "romaji" => "oosawa",
                "memo" => "山形県",
                "latitude" => "37.837226",
                "altitude" => "140.200405",
            ]);
            
            Station::create([
                "id" => 1181,
                "prefecture_id" => 6,
                "city_id" => 327,
                "street_id" => 18696,
                "name" => "関根",
                "hiragana" => "せきね",
                "katakana" => "セキネ",
                "katakana_half" => "ｾｷﾈ",
                "romaji" => "sekine",
                "memo" => "",
                "latitude" => "37.864638",
                "altitude" => "140.146130",
            ]);
            
            Station::create([
                "id" => 1182,
                "prefecture_id" => 6,
                "city_id" => 353,
                "street_id" => null,
                "name" => "置賜",
                "hiragana" => "おいたま",
                "katakana" => "オイタマ",
                "katakana_half" => "ｵｲﾀﾏ",
                "romaji" => "oitama",
                "memo" => "",
                "latitude" => "37.953963",
                "altitude" => "140.142488",
            ]);
            
            Station::create([
                "id" => 1183,
                "prefecture_id" => 6,
                "city_id" => 340,
                "street_id" => null,
                "name" => "中川",
                "hiragana" => "なかがわ",
                "katakana" => "ナカガワ",
                "katakana_half" => "ﾅｶｶﾞﾜ",
                "romaji" => "nakagawa",
                "memo" => "山形県",
                "latitude" => "38.093310",
                "altitude" => "140.203421",
            ]);
            
            Station::create([
                "id" => 1184,
                "prefecture_id" => 6,
                "city_id" => 326,
                "street_id" => 18556,
                "name" => "羽前中山",
                "hiragana" => "うぜんなかやま",
                "katakana" => "ウゼンナカヤマ",
                "katakana_half" => "ｳｾﾞﾝﾅｶﾔﾏ",
                "romaji" => "uzennakayama",
                "memo" => "",
                "latitude" => "38.124028",
                "altitude" => "140.218224",
            ]);
            
            Station::create([
                "id" => 1185,
                "prefecture_id" => 6,
                "city_id" => 328,
                "street_id" => 18812,
                "name" => "茂吉記念館前",
                "hiragana" => "もきちきねんかんまえ",
                "katakana" => "モキチキネンカンマエ",
                "katakana_half" => "ﾓｷﾁｷﾈﾝｶﾝﾏｴ",
                "romaji" => "mokichikinenkanmae",
                "memo" => "",
                "latitude" => "38.170997",
                "altitude" => "140.298131",
            ]);
            
            Station::create([
                "id" => 1186,
                "prefecture_id" => 6,
                "city_id" => 326,
                "street_id" => 18396,
                "name" => "蔵王",
                "hiragana" => "ざおう",
                "katakana" => "ザオウ",
                "katakana_half" => "ｻﾞｵｳ",
                "romaji" => "zaou",
                "memo" => "",
                "latitude" => "38.205771",
                "altitude" => "140.303352",
            ]);
            
            Station::create([
                "id" => 1187,
                "prefecture_id" => 6,
                "city_id" => 326,
                "street_id" => 18416,
                "name" => "北山形",
                "hiragana" => "きたやまがた",
                "katakana" => "キタヤマガタ",
                "katakana_half" => "ｷﾀﾔﾏｶﾞﾀ",
                "romaji" => "kitayamagata",
                "memo" => "",
                "latitude" => "38.265543",
                "altitude" => "140.332458",
            ]);
            
            Station::create([
                "id" => 1188,
                "prefecture_id" => 6,
                "city_id" => 326,
                "street_id" => 18556,
                "name" => "羽前千歳",
                "hiragana" => "うぜんちとせ",
                "katakana" => "ウゼンチトセ",
                "katakana_half" => "ｳｾﾞﾝﾁﾄｾ",
                "romaji" => "uzenchitose",
                "memo" => "",
                "latitude" => "38.287597",
                "altitude" => "140.342178",
            ]);
            
            Station::create([
                "id" => 1189,
                "prefecture_id" => 6,
                "city_id" => 338,
                "street_id" => null,
                "name" => "南出羽",
                "hiragana" => "みなみでわ",
                "katakana" => "ミナミデワ",
                "katakana_half" => "ﾐﾅﾐﾃﾞﾜ",
                "romaji" => "minamidewa",
                "memo" => "",
                "latitude" => "38.302928",
                "altitude" => "140.344649",
            ]);
            
            Station::create([
                "id" => 1190,
                "prefecture_id" => 6,
                "city_id" => 326,
                "street_id" => 18385,
                "name" => "漆山",
                "hiragana" => "うるしやま",
                "katakana" => "ウルシヤマ",
                "katakana_half" => "ｳﾙｼﾔﾏ",
                "romaji" => "urushiyama",
                "memo" => "山形県",
                "latitude" => "38.314538",
                "altitude" => "140.347565",
            ]);
            
            Station::create([
                "id" => 1191,
                "prefecture_id" => 6,
                "city_id" => 335,
                "street_id" => 19601,
                "name" => "高擶",
                "hiragana" => "たかたま",
                "katakana" => "タカタマ",
                "katakana_half" => "ﾀｶﾀﾏ",
                "romaji" => "takatama",
                "memo" => "",
                "latitude" => "38.330953",
                "altitude" => "140.358813",
            ]);
            
            Station::create([
                "id" => 1192,
                "prefecture_id" => 6,
                "city_id" => 335,
                "street_id" => null,
                "name" => "天童南",
                "hiragana" => "てんどうみなみ",
                "katakana" => "テンドウミナミ",
                "katakana_half" => "ﾃﾝﾄﾞｳﾐﾅﾐ",
                "romaji" => "tendouminami",
                "memo" => "",
                "latitude" => "38.342119",
                "altitude" => "140.365812",
            ]);
            
            Station::create([
                "id" => 1193,
                "prefecture_id" => 6,
                "city_id" => 335,
                "street_id" => 19633,
                "name" => "乱川",
                "hiragana" => "みだれがわ",
                "katakana" => "ミダレガワ",
                "katakana_half" => "ﾐﾀﾞﾚｶﾞﾜ",
                "romaji" => "midaregawa",
                "memo" => "",
                "latitude" => "38.386892",
                "altitude" => "140.374810",
            ]);
            
            Station::create([
                "id" => 1194,
                "prefecture_id" => 6,
                "city_id" => 326,
                "street_id" => 18515,
                "name" => "神町",
                "hiragana" => "じんまち",
                "katakana" => "ジンマチ",
                "katakana_half" => "ｼﾞﾝﾏﾁ",
                "romaji" => "jinmachi",
                "memo" => "",
                "latitude" => "38.412390",
                "altitude" => "140.378475",
            ]);
            
            Station::create([
                "id" => 1195,
                "prefecture_id" => 6,
                "city_id" => 336,
                "street_id" => null,
                "name" => "東根",
                "hiragana" => "ひがしね",
                "katakana" => "ヒガシネ",
                "katakana_half" => "ﾋｶﾞｼﾈ",
                "romaji" => "higashine",
                "memo" => "",
                "latitude" => "38.450746",
                "altitude" => "140.384112",
            ]);
            
            Station::create([
                "id" => 1196,
                "prefecture_id" => 6,
                "city_id" => 326,
                "street_id" => null,
                "name" => "袖崎",
                "hiragana" => "そでさき",
                "katakana" => "ソデサキ",
                "katakana_half" => "ｿﾃﾞｻｷ",
                "romaji" => "sodesaki",
                "memo" => "",
                "latitude" => "38.548264",
                "altitude" => "140.391550",
            ]);
            
            Station::create([
                "id" => 1197,
                "prefecture_id" => 6,
                "city_id" => 341,
                "street_id" => null,
                "name" => "北大石田",
                "hiragana" => "きたおおいしだ",
                "katakana" => "キタオオイシダ",
                "katakana_half" => "ｷﾀｵｵｲｼﾀﾞ",
                "romaji" => "kitaooishida",
                "memo" => "",
                "latitude" => "38.629671",
                "altitude" => "140.371188",
            ]);
            
            Station::create([
                "id" => 1198,
                "prefecture_id" => 6,
                "city_id" => 334,
                "street_id" => 19528,
                "name" => "芦沢",
                "hiragana" => "あしさわ",
                "katakana" => "アシサワ",
                "katakana_half" => "ｱｼｻﾜ",
                "romaji" => "ashisawa",
                "memo" => "",
                "latitude" => "38.655474",
                "altitude" => "140.361159",
            ]);
            
            Station::create([
                "id" => 1199,
                "prefecture_id" => 6,
                "city_id" => 348,
                "street_id" => null,
                "name" => "舟形",
                "hiragana" => "ふながた",
                "katakana" => "フナガタ",
                "katakana_half" => "ﾌﾅｶﾞﾀ",
                "romaji" => "funagata",
                "memo" => "",
                "latitude" => "38.691720",
                "altitude" => "140.316078",
            ]);
            
            Station::create([
                "id" => 1200,
                "prefecture_id" => 6,
                "city_id" => 330,
                "street_id" => 19295,
                "name" => "泉田",
                "hiragana" => "いずみた",
                "katakana" => "イズミタ",
                "katakana_half" => "ｲｽﾞﾐﾀ",
                "romaji" => "izumita",
                "memo" => "",
                "latitude" => "38.811623",
                "altitude" => "140.310101",
            ]);
            
            Station::create([
                "id" => 1201,
                "prefecture_id" => 6,
                "city_id" => 326,
                "street_id" => 18556,
                "name" => "羽前豊里",
                "hiragana" => "うぜんとよさと",
                "katakana" => "ウゼントヨサト",
                "katakana_half" => "ｳｾﾞﾝﾄﾖｻﾄ",
                "romaji" => "uzentoyosato",
                "memo" => "",
                "latitude" => "38.836730",
                "altitude" => "140.242244",
            ]);
            
            Station::create([
                "id" => 1202,
                "prefecture_id" => 6,
                "city_id" => 349,
                "street_id" => null,
                "name" => "真室川",
                "hiragana" => "まむろがわ",
                "katakana" => "マムロガワ",
                "katakana_half" => "ﾏﾑﾛｶﾞﾜ",
                "romaji" => "mamurogawa",
                "memo" => "",
                "latitude" => "38.858173",
                "altitude" => "140.254770",
            ]);
            
            Station::create([
                "id" => 1203,
                "prefecture_id" => 6,
                "city_id" => 338,
                "street_id" => 19771,
                "name" => "釜淵",
                "hiragana" => "かまぶち",
                "katakana" => "カマブチ",
                "katakana_half" => "ｶﾏﾌﾞﾁ",
                "romaji" => "kamabuchi",
                "memo" => "",
                "latitude" => "38.932970",
                "altitude" => "140.263904",
            ]);
            
            Station::create([
                "id" => 1204,
                "prefecture_id" => 6,
                "city_id" => 343,
                "street_id" => 19872,
                "name" => "大滝",
                "hiragana" => "おおたき",
                "katakana" => "オオタキ",
                "katakana_half" => "ｵｵﾀｷ",
                "romaji" => "ootaki",
                "memo" => "",
                "latitude" => "38.971468",
                "altitude" => "140.320121",
            ]);
            
            Station::create([
                "id" => 1205,
                "prefecture_id" => 6,
                "city_id" => 349,
                "street_id" => 19993,
                "name" => "及位",
                "hiragana" => "のぞき",
                "katakana" => "ノゾキ",
                "katakana_half" => "ﾉｿﾞｷ",
                "romaji" => "nozoki",
                "memo" => "",
                "latitude" => "38.992994",
                "altitude" => "140.361172",
            ]);
            
            Station::create([
                "id" => 1206,
                "prefecture_id" => 6,
                "city_id" => 328,
                "street_id" => 18928,
                "name" => "鼠ケ関",
                "hiragana" => "ねずがせき",
                "katakana" => "ネズガセキ",
                "katakana_half" => "ﾈｽﾞｶﾞｾｷ",
                "romaji" => "nezugaseki",
                "memo" => "",
                "latitude" => "38.555220",
                "altitude" => "139.548703",
            ]);
            
            Station::create([
                "id" => 1207,
                "prefecture_id" => 6,
                "city_id" => 328,
                "street_id" => 18823,
                "name" => "小岩川",
                "hiragana" => "こいわがわ",
                "katakana" => "コイワガワ",
                "katakana_half" => "ｺｲﾜｶﾞﾜ",
                "romaji" => "koiwagawa",
                "memo" => "",
                "latitude" => "38.590162",
                "altitude" => "139.565701",
            ]);
            
            Station::create([
                "id" => 1208,
                "prefecture_id" => 6,
                "city_id" => 326,
                "street_id" => 18362,
                "name" => "あつみ温泉",
                "hiragana" => "あつみおんせん",
                "katakana" => "アツミオンセン",
                "katakana_half" => "ｱﾂﾐｵﾝｾﾝ",
                "romaji" => "atsumionsen",
                "memo" => "",
                "latitude" => "38.624353",
                "altitude" => "139.587863",
            ]);
            
            Station::create([
                "id" => 1209,
                "prefecture_id" => 6,
                "city_id" => 328,
                "street_id" => 18776,
                "name" => "五十川",
                "hiragana" => "いらがわ",
                "katakana" => "イラガワ",
                "katakana_half" => "ｲﾗｶﾞﾜ",
                "romaji" => "iragawa",
                "memo" => "",
                "latitude" => "38.670654",
                "altitude" => "139.615998",
            ]);
            
            Station::create([
                "id" => 1210,
                "prefecture_id" => 6,
                "city_id" => 328,
                "street_id" => 18829,
                "name" => "小波渡",
                "hiragana" => "こばと",
                "katakana" => "コバト",
                "katakana_half" => "ｺﾊﾞﾄ",
                "romaji" => "kobato",
                "memo" => "",
                "latitude" => "38.692319",
                "altitude" => "139.649911",
            ]);
            
            Station::create([
                "id" => 1211,
                "prefecture_id" => 6,
                "city_id" => 328,
                "street_id" => 18837,
                "name" => "三瀬",
                "hiragana" => "さんぜ",
                "katakana" => "サンゼ",
                "katakana_half" => "ｻﾝｾﾞ",
                "romaji" => "sanze",
                "memo" => "",
                "latitude" => "38.699486",
                "altitude" => "139.673408",
            ]);
            
            Station::create([
                "id" => 1212,
                "prefecture_id" => 6,
                "city_id" => 326,
                "street_id" => 18556,
                "name" => "羽前水沢",
                "hiragana" => "うぜんみずさわ",
                "katakana" => "ウゼンミズサワ",
                "katakana_half" => "ｳｾﾞﾝﾐｽﾞｻﾜ",
                "romaji" => "uzenmizusawa",
                "memo" => "",
                "latitude" => "38.713596",
                "altitude" => "139.731487",
            ]);
            
            Station::create([
                "id" => 1213,
                "prefecture_id" => 6,
                "city_id" => 326,
                "street_id" => 18556,
                "name" => "羽前大山",
                "hiragana" => "うぜんおおやま",
                "katakana" => "ウゼンオオヤマ",
                "katakana_half" => "ｳｾﾞﾝｵｵﾔﾏ",
                "romaji" => "uzenooyama",
                "memo" => "",
                "latitude" => "38.741954",
                "altitude" => "139.768094",
            ]);
            
            Station::create([
                "id" => 1214,
                "prefecture_id" => 6,
                "city_id" => 328,
                "street_id" => null,
                "name" => "鶴岡",
                "hiragana" => "つるおか",
                "katakana" => "ツルオカ",
                "katakana_half" => "ﾂﾙｵｶ",
                "romaji" => "tsuruoka",
                "memo" => "",
                "latitude" => "38.739984",
                "altitude" => "139.835282",
            ]);
            
            Station::create([
                "id" => 1215,
                "prefecture_id" => 6,
                "city_id" => 328,
                "street_id" => 18809,
                "name" => "藤島",
                "hiragana" => "ふじしま",
                "katakana" => "フジシマ",
                "katakana_half" => "ﾌｼﾞｼﾏ",
                "romaji" => "fujishima",
                "memo" => "",
                "latitude" => "38.768565",
                "altitude" => "139.893971",
            ]);
            
            Station::create([
                "id" => 1216,
                "prefecture_id" => 6,
                "city_id" => 359,
                "street_id" => 20267,
                "name" => "西袋",
                "hiragana" => "にしぶくろ",
                "katakana" => "ニシブクロ",
                "katakana_half" => "ﾆｼﾌﾞｸﾛ",
                "romaji" => "nishibukuro",
                "memo" => "",
                "latitude" => "38.811700",
                "altitude" => "139.907689",
            ]);
            
            Station::create([
                "id" => 1217,
                "prefecture_id" => 6,
                "city_id" => 359,
                "street_id" => 20230,
                "name" => "余目",
                "hiragana" => "あまるめ",
                "katakana" => "アマルメ",
                "katakana_half" => "ｱﾏﾙﾒ",
                "romaji" => "amarume",
                "memo" => "",
                "latitude" => "38.844307",
                "altitude" => "139.911299",
            ]);
            
            Station::create([
                "id" => 1218,
                "prefecture_id" => 6,
                "city_id" => 341,
                "street_id" => null,
                "name" => "北余目",
                "hiragana" => "きたあまるめ",
                "katakana" => "キタアマルメ",
                "katakana_half" => "ｷﾀｱﾏﾙﾒ",
                "romaji" => "kitaamarume",
                "memo" => "",
                "latitude" => "38.867305",
                "altitude" => "139.907993",
            ]);
            
            Station::create([
                "id" => 1219,
                "prefecture_id" => 6,
                "city_id" => 329,
                "street_id" => 19153,
                "name" => "砂越",
                "hiragana" => "さごし",
                "katakana" => "サゴシ",
                "katakana_half" => "ｻｺﾞｼ",
                "romaji" => "sagoshi",
                "memo" => "",
                "latitude" => "38.895163",
                "altitude" => "139.907242",
            ]);
            
            Station::create([
                "id" => 1220,
                "prefecture_id" => 6,
                "city_id" => 336,
                "street_id" => null,
                "name" => "東酒田",
                "hiragana" => "ひがしさかた",
                "katakana" => "ヒガシサカタ",
                "katakana_half" => "ﾋｶﾞｼｻｶﾀ",
                "romaji" => "higashisakata",
                "memo" => "",
                "latitude" => "38.907688",
                "altitude" => "139.875438",
            ]);
            
            Station::create([
                "id" => 1221,
                "prefecture_id" => 6,
                "city_id" => 329,
                "street_id" => null,
                "name" => "酒田",
                "hiragana" => "さかた",
                "katakana" => "サカタ",
                "katakana_half" => "ｻｶﾀ",
                "romaji" => "sakata",
                "memo" => "",
                "latitude" => "38.922298",
                "altitude" => "139.845745",
            ]);
            
            Station::create([
                "id" => 1222,
                "prefecture_id" => 6,
                "city_id" => 329,
                "street_id" => 19271,
                "name" => "本楯",
                "hiragana" => "もとたて",
                "katakana" => "モトタテ",
                "katakana_half" => "ﾓﾄﾀﾃ",
                "romaji" => "mototate",
                "memo" => "",
                "latitude" => "38.968515",
                "altitude" => "139.881796",
            ]);
            
            Station::create([
                "id" => 1223,
                "prefecture_id" => 6,
                "city_id" => 338,
                "street_id" => null,
                "name" => "南鳥海",
                "hiragana" => "みなみちょうかい",
                "katakana" => "ミナミチョウカイ",
                "katakana_half" => "ﾐﾅﾐﾁｮｳｶｲ",
                "romaji" => "minamichoukai",
                "memo" => "",
                "latitude" => "38.987514",
                "altitude" => "139.898711",
            ]);
            
            Station::create([
                "id" => 1224,
                "prefecture_id" => 6,
                "city_id" => 360,
                "street_id" => null,
                "name" => "遊佐",
                "hiragana" => "ゆざ",
                "katakana" => "ユザ",
                "katakana_half" => "ﾕｻﾞ",
                "romaji" => "yuza",
                "memo" => "",
                "latitude" => "39.015900",
                "altitude" => "139.905125",
            ]);
            
            Station::create([
                "id" => 1225,
                "prefecture_id" => 6,
                "city_id" => 360,
                "street_id" => 20309,
                "name" => "吹浦",
                "hiragana" => "ふくら",
                "katakana" => "フクラ",
                "katakana_half" => "ﾌｸﾗ",
                "romaji" => "fukura",
                "memo" => "",
                "latitude" => "39.070089",
                "altitude" => "139.878847",
            ]);
            
            Station::create([
                "id" => 1226,
                "prefecture_id" => 6,
                "city_id" => 326,
                "street_id" => 18443,
                "name" => "女鹿",
                "hiragana" => "めが",
                "katakana" => "メガ",
                "katakana_half" => "ﾒｶﾞ",
                "romaji" => "mega",
                "memo" => "",
                "latitude" => "39.098752",
                "altitude" => "139.880956",
            ]);
            
            Station::create([
                "id" => 1227,
                "prefecture_id" => 6,
                "city_id" => 347,
                "street_id" => 19966,
                "name" => "堺田",
                "hiragana" => "さかいだ",
                "katakana" => "サカイダ",
                "katakana_half" => "ｻｶｲﾀﾞ",
                "romaji" => "sakaida",
                "memo" => "",
                "latitude" => "38.735415",
                "altitude" => "140.613051",
            ]);
            
            Station::create([
                "id" => 1228,
                "prefecture_id" => 6,
                "city_id" => 327,
                "street_id" => 18643,
                "name" => "赤倉温泉",
                "hiragana" => "あかくらおんせん",
                "katakana" => "アカクラオンセン",
                "katakana_half" => "ｱｶｸﾗｵﾝｾﾝ",
                "romaji" => "akakuraonsen",
                "memo" => "",
                "latitude" => "38.730442",
                "altitude" => "140.553612",
            ]);
            
            Station::create([
                "id" => 1229,
                "prefecture_id" => 6,
                "city_id" => 326,
                "street_id" => 18393,
                "name" => "立小路",
                "hiragana" => "たちこうじ",
                "katakana" => "タチコウジ",
                "katakana_half" => "ﾀﾁｺｳｼﾞ",
                "romaji" => "tachikouji",
                "memo" => "",
                "latitude" => "38.742107",
                "altitude" => "140.542613",
            ]);
            
            Station::create([
                "id" => 1230,
                "prefecture_id" => 6,
                "city_id" => 346,
                "street_id" => null,
                "name" => "最上",
                "hiragana" => "もがみ",
                "katakana" => "モガミ",
                "katakana_half" => "ﾓｶﾞﾐ",
                "romaji" => "mogami",
                "memo" => "",
                "latitude" => "38.755828",
                "altitude" => "140.517531",
            ]);
            
            Station::create([
                "id" => 1231,
                "prefecture_id" => 6,
                "city_id" => 336,
                "street_id" => 19672,
                "name" => "大堀",
                "hiragana" => "おおほり",
                "katakana" => "オオホリ",
                "katakana_half" => "ｵｵﾎﾘ",
                "romaji" => "oohori",
                "memo" => "",
                "latitude" => "38.765937",
                "altitude" => "140.475422",
            ]);
            
            Station::create([
                "id" => 1232,
                "prefecture_id" => 6,
                "city_id" => 326,
                "street_id" => null,
                "name" => "鵜杉",
                "hiragana" => "うすぎ",
                "katakana" => "ウスギ",
                "katakana_half" => "ｳｽｷﾞ",
                "romaji" => "usugi",
                "memo" => "",
                "latitude" => "38.765131",
                "altitude" => "140.453814",
            ]);
            
            Station::create([
                "id" => 1233,
                "prefecture_id" => 6,
                "city_id" => 347,
                "street_id" => 19968,
                "name" => "瀬見温泉",
                "hiragana" => "せみおんせん",
                "katakana" => "セミオンセン",
                "katakana_half" => "ｾﾐｵﾝｾﾝ",
                "romaji" => "semionsen",
                "memo" => "",
                "latitude" => "38.755409",
                "altitude" => "140.419650",
            ]);
            
            Station::create([
                "id" => 1234,
                "prefecture_id" => 6,
                "city_id" => 335,
                "street_id" => 19625,
                "name" => "東長沢",
                "hiragana" => "ひがしながさわ",
                "katakana" => "ヒガシナガサワ",
                "katakana_half" => "ﾋｶﾞｼﾅｶﾞｻﾜ",
                "romaji" => "higashinagasawa",
                "memo" => "",
                "latitude" => "38.718829",
                "altitude" => "140.382043",
            ]);
            
            Station::create([
                "id" => 1235,
                "prefecture_id" => 6,
                "city_id" => 348,
                "street_id" => 19980,
                "name" => "長沢",
                "hiragana" => "ながさわ",
                "katakana" => "ナガサワ",
                "katakana_half" => "ﾅｶﾞｻﾜ",
                "romaji" => "nagasawa",
                "memo" => "",
                "latitude" => "38.709830",
                "altitude" => "140.365934",
            ]);
            
            Station::create([
                "id" => 1236,
                "prefecture_id" => 6,
                "city_id" => 329,
                "street_id" => 19261,
                "name" => "南新庄",
                "hiragana" => "みなみしんじょう",
                "katakana" => "ミナミシンジョウ",
                "katakana_half" => "ﾐﾅﾐｼﾝｼﾞｮｳ",
                "romaji" => "minamishinjou",
                "memo" => "",
                "latitude" => "38.721578",
                "altitude" => "140.316299",
            ]);
            
            Station::create([
                "id" => 1237,
                "prefecture_id" => 6,
                "city_id" => 330,
                "street_id" => 19333,
                "name" => "升形",
                "hiragana" => "ますかた",
                "katakana" => "マスカタ",
                "katakana_half" => "ﾏｽｶﾀ",
                "romaji" => "masukata",
                "memo" => "山形県",
                "latitude" => "38.751796",
                "altitude" => "140.244387",
            ]);
            
            Station::create([
                "id" => 1238,
                "prefecture_id" => 6,
                "city_id" => 326,
                "street_id" => 18556,
                "name" => "羽前前波",
                "hiragana" => "うぜんぜんなみ",
                "katakana" => "ウゼンゼンナミ",
                "katakana_half" => "ｳｾﾞﾝｾﾞﾝﾅﾐ",
                "romaji" => "uzenzennami",
                "memo" => "",
                "latitude" => "38.747907",
                "altitude" => "140.209390",
            ]);
            
            Station::create([
                "id" => 1239,
                "prefecture_id" => 6,
                "city_id" => 352,
                "street_id" => 20017,
                "name" => "津谷",
                "hiragana" => "つや",
                "katakana" => "ツヤ",
                "katakana_half" => "ﾂﾔ",
                "romaji" => "tsuya",
                "memo" => "",
                "latitude" => "38.737518",
                "altitude" => "140.186420",
            ]);
            
            Station::create([
                "id" => 1240,
                "prefecture_id" => 6,
                "city_id" => 352,
                "street_id" => 20019,
                "name" => "古口",
                "hiragana" => "ふるくち",
                "katakana" => "フルクチ",
                "katakana_half" => "ﾌﾙｸﾁ",
                "romaji" => "furukuchi",
                "memo" => "",
                "latitude" => "38.737351",
                "altitude" => "140.145785",
            ]);
            
            Station::create([
                "id" => 1241,
                "prefecture_id" => 6,
                "city_id" => 331,
                "street_id" => 19364,
                "name" => "高屋",
                "hiragana" => "たかや",
                "katakana" => "タカヤ",
                "katakana_half" => "ﾀｶﾔ",
                "romaji" => "takaya",
                "memo" => "",
                "latitude" => "38.752487",
                "altitude" => "140.070873",
            ]);
            
            Station::create([
                "id" => 1242,
                "prefecture_id" => 6,
                "city_id" => 359,
                "street_id" => 20244,
                "name" => "清川",
                "hiragana" => "きよかわ",
                "katakana" => "キヨカワ",
                "katakana_half" => "ｷﾖｶﾜ",
                "romaji" => "kiyokawa",
                "memo" => "",
                "latitude" => "38.790121",
                "altitude" => "140.020515",
            ]);
            
            Station::create([
                "id" => 1243,
                "prefecture_id" => 6,
                "city_id" => 359,
                "street_id" => 20240,
                "name" => "狩川",
                "hiragana" => "かりかわ",
                "katakana" => "カリカワ",
                "katakana_half" => "ｶﾘｶﾜ",
                "romaji" => "karikawa",
                "memo" => "",
                "latitude" => "38.793619",
                "altitude" => "139.976769",
            ]);
            
            Station::create([
                "id" => 1244,
                "prefecture_id" => 6,
                "city_id" => 359,
                "street_id" => 20281,
                "name" => "南野",
                "hiragana" => "みなみの",
                "katakana" => "ミナミノ",
                "katakana_half" => "ﾐﾅﾐﾉ",
                "romaji" => "minamino",
                "memo" => "",
                "latitude" => "38.818172",
                "altitude" => "139.944687",
            ]);
            
            Station::create([
                "id" => 1245,
                "prefecture_id" => 6,
                "city_id" => 328,
                "street_id" => 18797,
                "name" => "面白山高原",
                "hiragana" => "おもしろやまこうげん",
                "katakana" => "オモシロヤマコウゲン",
                "katakana_half" => "ｵﾓｼﾛﾔﾏｺｳｹﾞﾝ",
                "romaji" => "omoshiroyamakougen",
                "memo" => "",
                "latitude" => "38.332928",
                "altitude" => "140.497246",
            ]);
            
            Station::create([
                "id" => 1246,
                "prefecture_id" => 6,
                "city_id" => 326,
                "street_id" => 18624,
                "name" => "山寺",
                "hiragana" => "やまでら",
                "katakana" => "ヤマデラ",
                "katakana_half" => "ﾔﾏﾃﾞﾗ",
                "romaji" => "yamadera",
                "memo" => "",
                "latitude" => "38.309541",
                "altitude" => "140.434474",
            ]);
            
            Station::create([
                "id" => 1247,
                "prefecture_id" => 6,
                "city_id" => 353,
                "street_id" => null,
                "name" => "高瀬",
                "hiragana" => "たかせ",
                "katakana" => "タカセ",
                "katakana_half" => "ﾀｶｾ",
                "romaji" => "takase",
                "memo" => "山形県",
                "latitude" => "38.301291",
                "altitude" => "140.395840",
            ]);
            
            Station::create([
                "id" => 1248,
                "prefecture_id" => 6,
                "city_id" => 329,
                "street_id" => 19182,
                "name" => "楯山",
                "hiragana" => "たてやま",
                "katakana" => "タテヤマ",
                "katakana_half" => "ﾀﾃﾔﾏ",
                "romaji" => "tateyama",
                "memo" => "",
                "latitude" => "38.301734",
                "altitude" => "140.370758",
            ]);
            
            Station::create([
                "id" => 1249,
                "prefecture_id" => 6,
                "city_id" => 336,
                "street_id" => null,
                "name" => "東金井",
                "hiragana" => "ひがしかない",
                "katakana" => "ヒガシカナイ",
                "katakana_half" => "ﾋｶﾞｼｶﾅｲ",
                "romaji" => "higashikanai",
                "memo" => "",
                "latitude" => "38.276986",
                "altitude" => "140.302793",
            ]);
            
            Station::create([
                "id" => 1250,
                "prefecture_id" => 6,
                "city_id" => 326,
                "street_id" => 18556,
                "name" => "羽前山辺",
                "hiragana" => "うぜんやまべ",
                "katakana" => "ウゼンヤマベ",
                "katakana_half" => "ｳｾﾞﾝﾔﾏﾍﾞ",
                "romaji" => "uzenyamabe",
                "memo" => "",
                "latitude" => "38.294566",
                "altitude" => "140.271545",
            ]);
            
            Station::create([
                "id" => 1251,
                "prefecture_id" => 6,
                "city_id" => 326,
                "street_id" => 18556,
                "name" => "羽前金沢",
                "hiragana" => "うぜんかねざわ",
                "katakana" => "ウゼンカネザワ",
                "katakana_half" => "ｳｾﾞﾝｶﾈｻﾞﾜ",
                "romaji" => "uzenkanezawa",
                "memo" => "",
                "latitude" => "38.320981",
                "altitude" => "140.270571",
            ]);
            
            Station::create([
                "id" => 1252,
                "prefecture_id" => 6,
                "city_id" => 326,
                "street_id" => 18556,
                "name" => "羽前長崎",
                "hiragana" => "うぜんながさき",
                "katakana" => "ウゼンナガサキ",
                "katakana_half" => "ｳｾﾞﾝﾅｶﾞｻｷ",
                "romaji" => "uzennagasaki",
                "memo" => "",
                "latitude" => "38.333118",
                "altitude" => "140.273126",
            ]);
            
            Station::create([
                "id" => 1253,
                "prefecture_id" => 6,
                "city_id" => 338,
                "street_id" => null,
                "name" => "南寒河江",
                "hiragana" => "みなみさがえ",
                "katakana" => "ミナミサガエ",
                "katakana_half" => "ﾐﾅﾐｻｶﾞｴ",
                "romaji" => "minamisagae",
                "memo" => "",
                "latitude" => "38.356088",
                "altitude" => "140.277347",
            ]);
            
            Station::create([
                "id" => 1254,
                "prefecture_id" => 6,
                "city_id" => 331,
                "street_id" => null,
                "name" => "寒河江",
                "hiragana" => "さがえ",
                "katakana" => "サガエ",
                "katakana_half" => "ｻｶﾞｴ",
                "romaji" => "sagae",
                "memo" => "",
                "latitude" => "38.372115",
                "altitude" => "140.274680",
            ]);
            
            Station::create([
                "id" => 1255,
                "prefecture_id" => 6,
                "city_id" => 341,
                "street_id" => null,
                "name" => "西寒河江",
                "hiragana" => "にしさがえ",
                "katakana" => "ニシサガエ",
                "katakana_half" => "ﾆｼｻｶﾞｴ",
                "romaji" => "nishisagae",
                "memo" => "",
                "latitude" => "38.379530",
                "altitude" => "140.266486",
            ]);
            
            Station::create([
                "id" => 1256,
                "prefecture_id" => 6,
                "city_id" => 326,
                "street_id" => 18556,
                "name" => "羽前高松",
                "hiragana" => "うぜんたかまつ",
                "katakana" => "ウゼンタカマツ",
                "katakana_half" => "ｳｾﾞﾝﾀｶﾏﾂ",
                "romaji" => "uzentakamatsu",
                "memo" => "",
                "latitude" => "38.397472",
                "altitude" => "140.248709",
            ]);
            
            Station::create([
                "id" => 1257,
                "prefecture_id" => 6,
                "city_id" => 331,
                "street_id" => 19354,
                "name" => "柴橋",
                "hiragana" => "しばはし",
                "katakana" => "シバハシ",
                "katakana_half" => "ｼﾊﾞﾊｼ",
                "romaji" => "shibahashi",
                "memo" => "",
                "latitude" => "38.380307",
                "altitude" => "140.227739",
            ]);
            
            Station::create([
                "id" => 1258,
                "prefecture_id" => 6,
                "city_id" => 344,
                "street_id" => 19899,
                "name" => "左沢",
                "hiragana" => "あてらざわ",
                "katakana" => "アテラザワ",
                "katakana_half" => "ｱﾃﾗｻﾞﾜ",
                "romaji" => "aterazawa",
                "memo" => "",
                "latitude" => "38.382139",
                "altitude" => "140.207962",
            ]);
            
            Station::create([
                "id" => 1259,
                "prefecture_id" => 6,
                "city_id" => 338,
                "street_id" => null,
                "name" => "南米沢",
                "hiragana" => "みなみよねざわ",
                "katakana" => "ミナミヨネザワ",
                "katakana_half" => "ﾐﾅﾐﾖﾈｻﾞﾜ",
                "romaji" => "minamiyonezawa",
                "memo" => "",
                "latitude" => "37.896052",
                "altitude" => "140.108270",
            ]);
            
            Station::create([
                "id" => 1260,
                "prefecture_id" => 6,
                "city_id" => 341,
                "street_id" => null,
                "name" => "西米沢",
                "hiragana" => "にしよねざわ",
                "katakana" => "ニシヨネザワ",
                "katakana_half" => "ﾆｼﾖﾈｻﾞﾜ",
                "romaji" => "nishiyonezawa",
                "memo" => "",
                "latitude" => "37.917299",
                "altitude" => "140.084799",
            ]);
            
            Station::create([
                "id" => 1261,
                "prefecture_id" => 6,
                "city_id" => 327,
                "street_id" => 18712,
                "name" => "成島",
                "hiragana" => "なるしま",
                "katakana" => "ナルシマ",
                "katakana_half" => "ﾅﾙｼﾏ",
                "romaji" => "narushima",
                "memo" => "山形県",
                "latitude" => "37.943546",
                "altitude" => "140.075550",
            ]);
            
            Station::create([
                "id" => 1262,
                "prefecture_id" => 6,
                "city_id" => 340,
                "street_id" => null,
                "name" => "中郡",
                "hiragana" => "ちゅうぐん",
                "katakana" => "チュウグン",
                "katakana_half" => "ﾁｭｳｸﾞﾝ",
                "romaji" => "chuugun",
                "memo" => "山形県",
                "latitude" => "37.969099",
                "altitude" => "140.067494",
            ]);
            
            Station::create([
                "id" => 1263,
                "prefecture_id" => 6,
                "city_id" => 326,
                "street_id" => 18556,
                "name" => "羽前小松",
                "hiragana" => "うぜんこまつ",
                "katakana" => "ウゼンコマツ",
                "katakana_half" => "ｳｾﾞﾝｺﾏﾂ",
                "romaji" => "uzenkomatsu",
                "memo" => "",
                "latitude" => "38.004928",
                "altitude" => "140.048605",
            ]);
            
            Station::create([
                "id" => 1264,
                "prefecture_id" => 6,
                "city_id" => 326,
                "street_id" => null,
                "name" => "犬川",
                "hiragana" => "いぬかわ",
                "katakana" => "イヌカワ",
                "katakana_half" => "ｲﾇｶﾜ",
                "romaji" => "inukawa",
                "memo" => "",
                "latitude" => "38.025425",
                "altitude" => "140.052047",
            ]);
            
            Station::create([
                "id" => 1265,
                "prefecture_id" => 6,
                "city_id" => 328,
                "street_id" => 18775,
                "name" => "今泉",
                "hiragana" => "いまいずみ",
                "katakana" => "イマイズミ",
                "katakana_half" => "ｲﾏｲｽﾞﾐ",
                "romaji" => "imaizumi",
                "memo" => "山形県",
                "latitude" => "38.056867",
                "altitude" => "140.044158",
            ]);
            
            Station::create([
                "id" => 1266,
                "prefecture_id" => 6,
                "city_id" => 338,
                "street_id" => 19796,
                "name" => "萩生",
                "hiragana" => "はぎゅう",
                "katakana" => "ハギュウ",
                "katakana_half" => "ﾊｷﾞｭｳ",
                "romaji" => "hagyuu",
                "memo" => "",
                "latitude" => "38.062143",
                "altitude" => "140.004439",
            ]);
            
            Station::create([
                "id" => 1267,
                "prefecture_id" => 6,
                "city_id" => 326,
                "street_id" => 18556,
                "name" => "羽前椿",
                "hiragana" => "うぜんつばき",
                "katakana" => "ウゼンツバキ",
                "katakana_half" => "ｳｾﾞﾝﾂﾊﾞｷ",
                "romaji" => "uzentsubaki",
                "memo" => "",
                "latitude" => "38.038534",
                "altitude" => "139.994246",
            ]);
            
            Station::create([
                "id" => 1268,
                "prefecture_id" => 6,
                "city_id" => 357,
                "street_id" => 20202,
                "name" => "手ノ子",
                "hiragana" => "てのこ",
                "katakana" => "テノコ",
                "katakana_half" => "ﾃﾉｺ",
                "romaji" => "tenoko",
                "memo" => "",
                "latitude" => "38.011619",
                "altitude" => "139.961222",
            ]);
            
            Station::create([
                "id" => 1269,
                "prefecture_id" => 6,
                "city_id" => 326,
                "street_id" => 18556,
                "name" => "羽前沼沢",
                "hiragana" => "うぜんぬまざわ",
                "katakana" => "ウゼンヌマザワ",
                "katakana_half" => "ｳｾﾞﾝﾇﾏｻﾞﾜ",
                "romaji" => "uzennumazawa",
                "memo" => "",
                "latitude" => "38.028811",
                "altitude" => "139.872562",
            ]);
            
            Station::create([
                "id" => 1270,
                "prefecture_id" => 6,
                "city_id" => 355,
                "street_id" => 20091,
                "name" => "伊佐領",
                "hiragana" => "いさりょう",
                "katakana" => "イサリョウ",
                "katakana_half" => "ｲｻﾘｮｳ",
                "romaji" => "isaryou",
                "memo" => "",
                "latitude" => "38.051030",
                "altitude" => "139.823066",
            ]);
            
            Station::create([
                "id" => 1271,
                "prefecture_id" => 6,
                "city_id" => 326,
                "street_id" => 18556,
                "name" => "羽前松岡",
                "hiragana" => "うぜんまつおか",
                "katakana" => "ウゼンマツオカ",
                "katakana_half" => "ｳｾﾞﾝﾏﾂｵｶ",
                "romaji" => "uzenmatsuoka",
                "memo" => "",
                "latitude" => "38.045391",
                "altitude" => "139.780431",
            ]);
            
            Station::create([
                "id" => 1272,
                "prefecture_id" => 6,
                "city_id" => 355,
                "street_id" => null,
                "name" => "小国",
                "hiragana" => "おぐに",
                "katakana" => "オグニ",
                "katakana_half" => "ｵｸﾞﾆ",
                "romaji" => "oguni",
                "memo" => "",
                "latitude" => "38.061444",
                "altitude" => "139.750155",
            ]);
            
            Station::create([
                "id" => 1273,
                "prefecture_id" => 6,
                "city_id" => 338,
                "street_id" => null,
                "name" => "南陽市役所",
                "hiragana" => "なんようしやくしょ",
                "katakana" => "ナンヨウシヤクショ",
                "katakana_half" => "ﾅﾝﾖｳｼﾔｸｼｮ",
                "romaji" => "nanyoushiyakusho",
                "memo" => "",
                "latitude" => "38.055729",
                "altitude" => "140.148899",
            ]);
            
            Station::create([
                "id" => 1274,
                "prefecture_id" => 6,
                "city_id" => 329,
                "street_id" => 19266,
                "name" => "宮内",
                "hiragana" => "みやうち",
                "katakana" => "ミヤウチ",
                "katakana_half" => "ﾐﾔｳﾁ",
                "romaji" => "miyauchi",
                "memo" => "山形県",
                "latitude" => "38.070811",
                "altitude" => "140.135261",
            ]);
            
            Station::create([
                "id" => 1275,
                "prefecture_id" => 6,
                "city_id" => 340,
                "street_id" => 19827,
                "name" => "おりはた",
                "hiragana" => "おりはた",
                "katakana" => "オリハタ",
                "katakana_half" => "ｵﾘﾊﾀ",
                "romaji" => "orihata",
                "memo" => "",
                "latitude" => "38.066477",
                "altitude" => "140.122484",
            ]);
            
            Station::create([
                "id" => 1276,
                "prefecture_id" => 6,
                "city_id" => 338,
                "street_id" => 19805,
                "name" => "梨郷",
                "hiragana" => "りんごう",
                "katakana" => "リンゴウ",
                "katakana_half" => "ﾘﾝｺﾞｳ",
                "romaji" => "ringou",
                "memo" => "",
                "latitude" => "38.057256",
                "altitude" => "140.098070",
            ]);
            
            Station::create([
                "id" => 1277,
                "prefecture_id" => 6,
                "city_id" => 354,
                "street_id" => 20077,
                "name" => "西大塚",
                "hiragana" => "にしおおつか",
                "katakana" => "ニシオオツカ",
                "katakana_half" => "ﾆｼｵｵﾂｶ",
                "romaji" => "nishiootsuka",
                "memo" => "",
                "latitude" => "38.055366",
                "altitude" => "140.064406",
            ]);
            
            Station::create([
                "id" => 1278,
                "prefecture_id" => 6,
                "city_id" => 334,
                "street_id" => 19556,
                "name" => "時庭",
                "hiragana" => "ときにわ",
                "katakana" => "トキニワ",
                "katakana_half" => "ﾄｷﾆﾜ",
                "romaji" => "tokiniwa",
                "memo" => "",
                "latitude" => "38.076669",
                "altitude" => "140.029602",
            ]);
            
            Station::create([
                "id" => 1279,
                "prefecture_id" => 6,
                "city_id" => 338,
                "street_id" => null,
                "name" => "南長井",
                "hiragana" => "みなみながい",
                "katakana" => "ミナミナガイ",
                "katakana_half" => "ﾐﾅﾐﾅｶﾞｲ",
                "romaji" => "minaminagai",
                "memo" => "",
                "latitude" => "38.097612",
                "altitude" => "140.034574",
            ]);
            
            Station::create([
                "id" => 1280,
                "prefecture_id" => 6,
                "city_id" => 334,
                "street_id" => null,
                "name" => "長井",
                "hiragana" => "ながい",
                "katakana" => "ナガイ",
                "katakana_half" => "ﾅｶﾞｲ",
                "romaji" => "nagai",
                "memo" => "",
                "latitude" => "38.106500",
                "altitude" => "140.033518",
            ]);
            
            Station::create([
                "id" => 1281,
                "prefecture_id" => 6,
                "city_id" => 326,
                "street_id" => 18362,
                "name" => "あやめ公園",
                "hiragana" => "あやめこうえん",
                "katakana" => "アヤメコウエン",
                "katakana_half" => "ｱﾔﾒｺｳｴﾝ",
                "romaji" => "ayamekouen",
                "memo" => "",
                "latitude" => "38.114082",
                "altitude" => "140.032768",
            ]);
            
            Station::create([
                "id" => 1282,
                "prefecture_id" => 6,
                "city_id" => 326,
                "street_id" => 18556,
                "name" => "羽前成田",
                "hiragana" => "うぜんなりた",
                "katakana" => "ウゼンナリタ",
                "katakana_half" => "ｳｾﾞﾝﾅﾘﾀ",
                "romaji" => "uzennarita",
                "memo" => "",
                "latitude" => "38.131080",
                "altitude" => "140.035071",
            ]);
            
            Station::create([
                "id" => 1283,
                "prefecture_id" => 6,
                "city_id" => 334,
                "street_id" => 19548,
                "name" => "白兎",
                "hiragana" => "しろうさぎ",
                "katakana" => "シロウサギ",
                "katakana_half" => "ｼﾛｳｻｷﾞ",
                "romaji" => "shirousagi",
                "memo" => "",
                "latitude" => "38.150300",
                "altitude" => "140.041181",
            ]);
            
            Station::create([
                "id" => 1284,
                "prefecture_id" => 6,
                "city_id" => 326,
                "street_id" => null,
                "name" => "蚕桑",
                "hiragana" => "こぐわ",
                "katakana" => "コグワ",
                "katakana_half" => "ｺｸﾞﾜ",
                "romaji" => "koguwa",
                "memo" => "",
                "latitude" => "38.161521",
                "altitude" => "140.046764",
            ]);
            
            Station::create([
                "id" => 1285,
                "prefecture_id" => 6,
                "city_id" => 356,
                "street_id" => 20162,
                "name" => "鮎貝",
                "hiragana" => "あゆかい",
                "katakana" => "アユカイ",
                "katakana_half" => "ｱﾕｶｲ",
                "romaji" => "ayukai",
                "memo" => "",
                "latitude" => "38.182548",
                "altitude" => "140.070983",
            ]);
            
            Station::create([
                "id" => 1286,
                "prefecture_id" => 6,
                "city_id" => 326,
                "street_id" => 18601,
                "name" => "四季の郷",
                "hiragana" => "しきのさと",
                "katakana" => "シキノサト",
                "katakana_half" => "ｼｷﾉｻﾄ",
                "romaji" => "shikinosato",
                "memo" => "",
                "latitude" => "38.185742",
                "altitude" => "140.077483",
            ]);
            
            Station::create([
                "id" => 1287,
                "prefecture_id" => 6,
                "city_id" => 356,
                "street_id" => 20163,
                "name" => "荒砥",
                "hiragana" => "あらと",
                "katakana" => "アラト",
                "katakana_half" => "ｱﾗﾄ",
                "romaji" => "arato",
                "memo" => "",
                "latitude" => "38.187992",
                "altitude" => "140.097397",
            ]);
            
    }
}
