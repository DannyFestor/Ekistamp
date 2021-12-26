<?php
namespace Database\Seeders;

use App\Models\Station;
use Illuminate\Database\Seeder;

class StationSeeder8 extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        
            Station::create([
                "id" => 1472,
                "prefecture_id" => 8,
                "city_id" => 422,
                "street_id" => null,
                "name" => "古河",
                "hiragana" => "こが",
                "katakana" => "コガ",
                "katakana_half" => "ｺｶﾞ",
                "romaji" => "koga",
                "memo" => "",
                "latitude" => "36.194393",
                "altitude" => "139.709771",
            ]);
            
            Station::create([
                "id" => 1473,
                "prefecture_id" => 8,
                "city_id" => 432,
                "street_id" => null,
                "name" => "取手",
                "hiragana" => "とりで",
                "katakana" => "トリデ",
                "katakana_half" => "ﾄﾘﾃﾞ",
                "romaji" => "toride",
                "memo" => "",
                "latitude" => "35.896459",
                "altitude" => "140.063117",
            ]);
            
            Station::create([
                "id" => 1474,
                "prefecture_id" => 8,
                "city_id" => 432,
                "street_id" => 25367,
                "name" => "藤代",
                "hiragana" => "ふじしろ",
                "katakana" => "フジシロ",
                "katakana_half" => "ﾌｼﾞｼﾛ",
                "romaji" => "fujishiro",
                "memo" => "",
                "latitude" => "35.920569",
                "altitude" => "140.118278",
            ]);
            
            Station::create([
                "id" => 1475,
                "prefecture_id" => 8,
                "city_id" => 425,
                "street_id" => 24865,
                "name" => "佐貫",
                "hiragana" => "さぬき",
                "katakana" => "サヌキ",
                "katakana_half" => "ｻﾇｷ",
                "romaji" => "sanuki",
                "memo" => "",
                "latitude" => "35.930068",
                "altitude" => "140.138220",
            ]);
            
            Station::create([
                "id" => 1476,
                "prefecture_id" => 8,
                "city_id" => 433,
                "street_id" => null,
                "name" => "牛久",
                "hiragana" => "うしく",
                "katakana" => "ウシク",
                "katakana_half" => "ｳｼｸ",
                "romaji" => "ushiku",
                "memo" => "",
                "latitude" => "35.975618",
                "altitude" => "140.140968",
            ]);
            
            Station::create([
                "id" => 1477,
                "prefecture_id" => 8,
                "city_id" => 433,
                "street_id" => 25408,
                "name" => "ひたち野うしく",
                "hiragana" => "ひたちのうしく",
                "katakana" => "ヒタチノウシク",
                "katakana_half" => "ﾋﾀﾁﾉｳｼｸ",
                "romaji" => "hitachinoushiku",
                "memo" => "",
                "latitude" => "36.007393",
                "altitude" => "140.158381",
            ]);
            
            Station::create([
                "id" => 1478,
                "prefecture_id" => 8,
                "city_id" => 421,
                "street_id" => 24494,
                "name" => "荒川沖",
                "hiragana" => "あらかわおき",
                "katakana" => "アラカワオキ",
                "katakana_half" => "ｱﾗｶﾜｵｷ",
                "romaji" => "arakawaoki",
                "memo" => "",
                "latitude" => "36.030696",
                "altitude" => "140.166186",
            ]);
            
            Station::create([
                "id" => 1479,
                "prefecture_id" => 8,
                "city_id" => 421,
                "street_id" => null,
                "name" => "土浦",
                "hiragana" => "つちうら",
                "katakana" => "ツチウラ",
                "katakana_half" => "ﾂﾁｳﾗ",
                "romaji" => "tsuchiura",
                "memo" => "",
                "latitude" => "36.077997",
                "altitude" => "140.206013",
            ]);
            
            Station::create([
                "id" => 1480,
                "prefecture_id" => 8,
                "city_id" => 421,
                "street_id" => 24526,
                "name" => "神立",
                "hiragana" => "かんだつ",
                "katakana" => "カンダツ",
                "katakana_half" => "ｶﾝﾀﾞﾂ",
                "romaji" => "kandatsu",
                "memo" => "",
                "latitude" => "36.120549",
                "altitude" => "140.248814",
            ]);
            
            Station::create([
                "id" => 1481,
                "prefecture_id" => 8,
                "city_id" => 423,
                "street_id" => 24756,
                "name" => "高浜",
                "hiragana" => "たかはま",
                "katakana" => "タカハマ",
                "katakana_half" => "ﾀｶﾊﾏ",
                "romaji" => "takahama",
                "memo" => "茨城県",
                "latitude" => "36.163767",
                "altitude" => "140.294862",
            ]);
            
            Station::create([
                "id" => 1482,
                "prefecture_id" => 8,
                "city_id" => 423,
                "street_id" => null,
                "name" => "石岡",
                "hiragana" => "いしおか",
                "katakana" => "イシオカ",
                "katakana_half" => "ｲｼｵｶ",
                "romaji" => "ishioka",
                "memo" => "",
                "latitude" => "36.190931",
                "altitude" => "140.280252",
            ]);
            
            Station::create([
                "id" => 1483,
                "prefecture_id" => 8,
                "city_id" => 445,
                "street_id" => 26442,
                "name" => "羽鳥",
                "hiragana" => "はとり",
                "katakana" => "ハトリ",
                "katakana_half" => "ﾊﾄﾘ",
                "romaji" => "hatori",
                "memo" => "",
                "latitude" => "36.247286",
                "altitude" => "140.286804",
            ]);
            
            Station::create([
                "id" => 1484,
                "prefecture_id" => 8,
                "city_id" => 419,
                "street_id" => 24287,
                "name" => "岩間",
                "hiragana" => "いわま",
                "katakana" => "イワマ",
                "katakana_half" => "ｲﾜﾏ",
                "romaji" => "iwama",
                "memo" => "",
                "latitude" => "36.295448",
                "altitude" => "140.276581",
            ]);
            
            Station::create([
                "id" => 1485,
                "prefecture_id" => 8,
                "city_id" => 420,
                "street_id" => 24451,
                "name" => "友部",
                "hiragana" => "ともべ",
                "katakana" => "トモベ",
                "katakana_half" => "ﾄﾓﾍﾞ",
                "romaji" => "tomobe",
                "memo" => "",
                "latitude" => "36.350720",
                "altitude" => "140.306492",
            ]);
            
            Station::create([
                "id" => 1486,
                "prefecture_id" => 8,
                "city_id" => 419,
                "street_id" => 24289,
                "name" => "内原",
                "hiragana" => "うちはら",
                "katakana" => "ウチハラ",
                "katakana_half" => "ｳﾁﾊﾗ",
                "romaji" => "uchihara",
                "memo" => "",
                "latitude" => "36.370552",
                "altitude" => "140.353265",
            ]);
            
            Station::create([
                "id" => 1487,
                "prefecture_id" => 8,
                "city_id" => 419,
                "street_id" => 24274,
                "name" => "赤塚",
                "hiragana" => "あかつか",
                "katakana" => "アカツカ",
                "katakana_half" => "ｱｶﾂｶ",
                "romaji" => "akatsuka",
                "memo" => "",
                "latitude" => "36.381885",
                "altitude" => "140.415232",
            ]);
            
            Station::create([
                "id" => 1488,
                "prefecture_id" => 8,
                "city_id" => 419,
                "street_id" => null,
                "name" => "偕楽園",
                "hiragana" => "かいらくえん",
                "katakana" => "カイラクエン",
                "katakana_half" => "ｶｲﾗｸｴﾝ",
                "romaji" => "kairakuen",
                "memo" => "",
                "latitude" => "36.373165",
                "altitude" => "140.456146",
            ]);
            
            Station::create([
                "id" => 1489,
                "prefecture_id" => 8,
                "city_id" => 419,
                "street_id" => null,
                "name" => "水戸",
                "hiragana" => "みと",
                "katakana" => "ミト",
                "katakana_half" => "ﾐﾄ",
                "romaji" => "mito",
                "memo" => "",
                "latitude" => "36.371082",
                "altitude" => "140.476227",
            ]);
            
            Station::create([
                "id" => 1490,
                "prefecture_id" => 8,
                "city_id" => 435,
                "street_id" => 25686,
                "name" => "勝田",
                "hiragana" => "かつた",
                "katakana" => "カツタ",
                "katakana_half" => "ｶﾂﾀ",
                "romaji" => "katsuta",
                "memo" => "",
                "latitude" => "36.394496",
                "altitude" => "140.524334",
            ]);
            
            Station::create([
                "id" => 1491,
                "prefecture_id" => 8,
                "city_id" => 435,
                "street_id" => 25704,
                "name" => "佐和",
                "hiragana" => "さわ",
                "katakana" => "サワ",
                "katakana_half" => "ｻﾜ",
                "romaji" => "sawa",
                "memo" => "",
                "latitude" => "36.430021",
                "altitude" => "140.540219",
            ]);
            
            Station::create([
                "id" => 1492,
                "prefecture_id" => 8,
                "city_id" => 454,
                "street_id" => null,
                "name" => "東海",
                "hiragana" => "とうかい",
                "katakana" => "トウカイ",
                "katakana_half" => "ﾄｳｶｲ",
                "romaji" => "toukai",
                "memo" => "",
                "latitude" => "36.465379",
                "altitude" => "140.565855",
            ]);
            
            Station::create([
                "id" => 1493,
                "prefecture_id" => 8,
                "city_id" => 439,
                "street_id" => null,
                "name" => "大甕",
                "hiragana" => "おおみか",
                "katakana" => "オオミカ",
                "katakana_half" => "ｵｵﾐｶ",
                "romaji" => "oomika",
                "memo" => "",
                "latitude" => "36.513153",
                "altitude" => "140.619459",
            ]);
            
            Station::create([
                "id" => 1494,
                "prefecture_id" => 8,
                "city_id" => 428,
                "street_id" => null,
                "name" => "常陸多賀",
                "hiragana" => "ひたちたが",
                "katakana" => "ヒタチタガ",
                "katakana_half" => "ﾋﾀﾁﾀｶﾞ",
                "romaji" => "hitachitaga",
                "memo" => "",
                "latitude" => "36.552093",
                "altitude" => "140.632373",
            ]);
            
            Station::create([
                "id" => 1495,
                "prefecture_id" => 8,
                "city_id" => 420,
                "street_id" => null,
                "name" => "日立",
                "hiragana" => "ひたち",
                "katakana" => "ヒタチ",
                "katakana_half" => "ﾋﾀﾁ",
                "romaji" => "hitachi",
                "memo" => "",
                "latitude" => "36.590811",
                "altitude" => "140.662118",
            ]);
            
            Station::create([
                "id" => 1496,
                "prefecture_id" => 8,
                "city_id" => 420,
                "street_id" => 24431,
                "name" => "小木津",
                "hiragana" => "おぎつ",
                "katakana" => "オギツ",
                "katakana_half" => "ｵｷﾞﾂ",
                "romaji" => "ogitsu",
                "memo" => "",
                "latitude" => "36.636779",
                "altitude" => "140.675199",
            ]);
            
            Station::create([
                "id" => 1497,
                "prefecture_id" => 8,
                "city_id" => 420,
                "street_id" => 24446,
                "name" => "十王",
                "hiragana" => "じゅうおう",
                "katakana" => "ジュウオウ",
                "katakana_half" => "ｼﾞｭｳｵｳ",
                "romaji" => "juuou",
                "memo" => "",
                "latitude" => "36.671387",
                "altitude" => "140.686224",
            ]);
            
            Station::create([
                "id" => 1498,
                "prefecture_id" => 8,
                "city_id" => 429,
                "street_id" => null,
                "name" => "高萩",
                "hiragana" => "たかはぎ",
                "katakana" => "タカハギ",
                "katakana_half" => "ﾀｶﾊｷﾞ",
                "romaji" => "takahagi",
                "memo" => "",
                "latitude" => "36.714771",
                "altitude" => "140.716664",
            ]);
            
            Station::create([
                "id" => 1499,
                "prefecture_id" => 8,
                "city_id" => 425,
                "street_id" => 24909,
                "name" => "南中郷",
                "hiragana" => "みなみなかごう",
                "katakana" => "ミナミナカゴウ",
                "katakana_half" => "ﾐﾅﾐﾅｶｺﾞｳ",
                "romaji" => "minaminakagou",
                "memo" => "",
                "latitude" => "36.753211",
                "altitude" => "140.729133",
            ]);
            
            Station::create([
                "id" => 1500,
                "prefecture_id" => 8,
                "city_id" => 430,
                "street_id" => 25208,
                "name" => "磯原",
                "hiragana" => "いそはら",
                "katakana" => "イソハラ",
                "katakana_half" => "ｲｿﾊﾗ",
                "romaji" => "isohara",
                "memo" => "",
                "latitude" => "36.790430",
                "altitude" => "140.746046",
            ]);
            
            Station::create([
                "id" => 1501,
                "prefecture_id" => 8,
                "city_id" => 430,
                "street_id" => 25215,
                "name" => "大津港",
                "hiragana" => "おおつこう",
                "katakana" => "オオツコウ",
                "katakana_half" => "ｵｵﾂｺｳ",
                "romaji" => "ootsukou",
                "memo" => "",
                "latitude" => "36.846509",
                "altitude" => "140.778236",
            ]);
            
            Station::create([
                "id" => 1502,
                "prefecture_id" => 8,
                "city_id" => 428,
                "street_id" => null,
                "name" => "常陸青柳",
                "hiragana" => "ひたちあおやぎ",
                "katakana" => "ヒタチアオヤギ",
                "katakana_half" => "ﾋﾀﾁｱｵﾔｷﾞ",
                "romaji" => "hitachiaoyagi",
                "memo" => "",
                "latitude" => "36.384080",
                "altitude" => "140.484532",
            ]);
            
            Station::create([
                "id" => 1503,
                "prefecture_id" => 8,
                "city_id" => 428,
                "street_id" => null,
                "name" => "常陸津田",
                "hiragana" => "ひたちつだ",
                "katakana" => "ヒタチツダ",
                "katakana_half" => "ﾋﾀﾁﾂﾀﾞ",
                "romaji" => "hitachitsuda",
                "memo" => "",
                "latitude" => "36.403912",
                "altitude" => "140.482891",
            ]);
            
            Station::create([
                "id" => 1504,
                "prefecture_id" => 8,
                "city_id" => 435,
                "street_id" => 25698,
                "name" => "後台",
                "hiragana" => "ごだい",
                "katakana" => "ゴダイ",
                "katakana_half" => "ｺﾞﾀﾞｲ",
                "romaji" => "godai",
                "memo" => "",
                "latitude" => "36.423771",
                "altitude" => "140.489918",
            ]);
            
            Station::create([
                "id" => 1505,
                "prefecture_id" => 8,
                "city_id" => 426,
                "street_id" => null,
                "name" => "下菅谷",
                "hiragana" => "しもすがや",
                "katakana" => "シモスガヤ",
                "katakana_half" => "ｼﾓｽｶﾞﾔ",
                "romaji" => "shimosugaya",
                "memo" => "",
                "latitude" => "36.435353",
                "altitude" => "140.494028",
            ]);
            
            Station::create([
                "id" => 1506,
                "prefecture_id" => 8,
                "city_id" => 434,
                "street_id" => 25575,
                "name" => "中菅谷",
                "hiragana" => "なかすがや",
                "katakana" => "ナカスガヤ",
                "katakana_half" => "ﾅｶｽｶﾞﾔ",
                "romaji" => "nakasugaya",
                "memo" => "",
                "latitude" => "36.445630",
                "altitude" => "140.492723",
            ]);
            
            Station::create([
                "id" => 1507,
                "prefecture_id" => 8,
                "city_id" => 434,
                "street_id" => 25483,
                "name" => "上菅谷",
                "hiragana" => "かみすがや",
                "katakana" => "カミスガヤ",
                "katakana_half" => "ｶﾐｽｶﾞﾔ",
                "romaji" => "kamisugaya",
                "memo" => "",
                "latitude" => "36.455295",
                "altitude" => "140.492555",
            ]);
            
            Station::create([
                "id" => 1508,
                "prefecture_id" => 8,
                "city_id" => 428,
                "street_id" => null,
                "name" => "常陸鴻巣",
                "hiragana" => "ひたちこうのす",
                "katakana" => "ヒタチコウノス",
                "katakana_half" => "ﾋﾀﾁｺｳﾉｽ",
                "romaji" => "hitachikounosu",
                "memo" => "",
                "latitude" => "36.472487",
                "altitude" => "140.467417",
            ]);
            
            Station::create([
                "id" => 1509,
                "prefecture_id" => 8,
                "city_id" => 440,
                "street_id" => 25978,
                "name" => "瓜連",
                "hiragana" => "うりづら",
                "katakana" => "ウリヅラ",
                "katakana_half" => "ｳﾘﾂﾞﾗ",
                "romaji" => "urizura",
                "memo" => "",
                "latitude" => "36.498095",
                "altitude" => "140.449779",
            ]);
            
            Station::create([
                "id" => 1510,
                "prefecture_id" => 8,
                "city_id" => 422,
                "street_id" => 24650,
                "name" => "静",
                "hiragana" => "しず",
                "katakana" => "シズ",
                "katakana_half" => "ｼｽﾞ",
                "romaji" => "shizu",
                "memo" => "",
                "latitude" => "36.506011",
                "altitude" => "140.438113",
            ]);
            
            Station::create([
                "id" => 1511,
                "prefecture_id" => 8,
                "city_id" => 439,
                "street_id" => null,
                "name" => "常陸大宮",
                "hiragana" => "ひたちおおみや",
                "katakana" => "ヒタチオオミヤ",
                "katakana_half" => "ﾋﾀﾁｵｵﾐﾔ",
                "romaji" => "hitachioomiya",
                "memo" => "",
                "latitude" => "36.547562",
                "altitude" => "140.412447",
            ]);
            
            Station::create([
                "id" => 1512,
                "prefecture_id" => 8,
                "city_id" => 450,
                "street_id" => null,
                "name" => "玉川村",
                "hiragana" => "たまがわむら",
                "katakana" => "タマガワムラ",
                "katakana_half" => "ﾀﾏｶﾞﾜﾑﾗ",
                "romaji" => "tamagawamura",
                "memo" => "",
                "latitude" => "36.579196",
                "altitude" => "140.374448",
            ]);
            
            Station::create([
                "id" => 1513,
                "prefecture_id" => 8,
                "city_id" => 439,
                "street_id" => 25954,
                "name" => "野上原",
                "hiragana" => "のがみはら",
                "katakana" => "ノガミハラ",
                "katakana_half" => "ﾉｶﾞﾐﾊﾗ",
                "romaji" => "nogamihara",
                "memo" => "",
                "latitude" => "36.605888",
                "altitude" => "140.390307",
            ]);
            
            Station::create([
                "id" => 1514,
                "prefecture_id" => 8,
                "city_id" => 439,
                "street_id" => 25970,
                "name" => "山方宿",
                "hiragana" => "やまがたじゅく",
                "katakana" => "ヤマガタジュク",
                "katakana_half" => "ﾔﾏｶﾞﾀｼﾞｭｸ",
                "romaji" => "yamagatajuku",
                "memo" => "",
                "latitude" => "36.624608",
                "altitude" => "140.401250",
            ]);
            
            Station::create([
                "id" => 1515,
                "prefecture_id" => 8,
                "city_id" => 419,
                "street_id" => 24350,
                "name" => "中舟生",
                "hiragana" => "なかふにゅう",
                "katakana" => "ナカフニュウ",
                "katakana_half" => "ﾅｶﾌﾆｭｳ",
                "romaji" => "nakafunyuu",
                "memo" => "",
                "latitude" => "36.645523",
                "altitude" => "140.392250",
            ]);
            
            Station::create([
                "id" => 1516,
                "prefecture_id" => 8,
                "city_id" => 430,
                "street_id" => 25242,
                "name" => "下小川",
                "hiragana" => "しもおがわ",
                "katakana" => "シモオガワ",
                "katakana_half" => "ｼﾓｵｶﾞﾜ",
                "romaji" => "shimoogawa",
                "memo" => "",
                "latitude" => "36.669131",
                "altitude" => "140.387027",
            ]);
            
            Station::create([
                "id" => 1517,
                "prefecture_id" => 8,
                "city_id" => 455,
                "street_id" => 26893,
                "name" => "西金",
                "hiragana" => "さいがね",
                "katakana" => "サイガネ",
                "katakana_half" => "ｻｲｶﾞﾈ",
                "romaji" => "saigane",
                "memo" => "",
                "latitude" => "36.695351",
                "altitude" => "140.386692",
            ]);
            
            Station::create([
                "id" => 1518,
                "prefecture_id" => 8,
                "city_id" => 430,
                "street_id" => 25241,
                "name" => "上小川",
                "hiragana" => "かみおがわ",
                "katakana" => "カミオガワ",
                "katakana_half" => "ｶﾐｵｶﾞﾜ",
                "romaji" => "kamiogawa",
                "memo" => "",
                "latitude" => "36.719265",
                "altitude" => "140.378608",
            ]);
            
            Station::create([
                "id" => 1519,
                "prefecture_id" => 8,
                "city_id" => 455,
                "street_id" => 26907,
                "name" => "袋田",
                "hiragana" => "ふくろだ",
                "katakana" => "フクロダ",
                "katakana_half" => "ﾌｸﾛﾀﾞ",
                "romaji" => "fukuroda",
                "memo" => "",
                "latitude" => "36.754761",
                "altitude" => "140.379550",
            ]);
            
            Station::create([
                "id" => 1520,
                "prefecture_id" => 8,
                "city_id" => 439,
                "street_id" => null,
                "name" => "常陸大子",
                "hiragana" => "ひたちだいご",
                "katakana" => "ヒタチダイゴ",
                "katakana_half" => "ﾋﾀﾁﾀﾞｲｺﾞ",
                "romaji" => "hitachidaigo",
                "memo" => "",
                "latitude" => "36.770676",
                "altitude" => "140.350747",
            ]);
            
            Station::create([
                "id" => 1521,
                "prefecture_id" => 8,
                "city_id" => 455,
                "street_id" => 26897,
                "name" => "下野宮",
                "hiragana" => "しものみや",
                "katakana" => "シモノミヤ",
                "katakana_half" => "ｼﾓﾉﾐﾔ",
                "romaji" => "shimonomiya",
                "memo" => "",
                "latitude" => "36.815672",
                "altitude" => "140.375687",
            ]);
            
            Station::create([
                "id" => 1522,
                "prefecture_id" => 8,
                "city_id" => 440,
                "street_id" => 26009,
                "name" => "南酒出",
                "hiragana" => "みなみさかいで",
                "katakana" => "ミナミサカイデ",
                "katakana_half" => "ﾐﾅﾐｻｶｲﾃﾞ",
                "romaji" => "minamisakaide",
                "memo" => "",
                "latitude" => "36.477377",
                "altitude" => "140.498499",
            ]);
            
            Station::create([
                "id" => 1523,
                "prefecture_id" => 8,
                "city_id" => 440,
                "street_id" => 26003,
                "name" => "額田",
                "hiragana" => "ぬかだ",
                "katakana" => "ヌカダ",
                "katakana_half" => "ﾇｶﾀﾞ",
                "romaji" => "nukada",
                "memo" => "茨城県",
                "latitude" => "36.485709",
                "altitude" => "140.503470",
            ]);
            
            Station::create([
                "id" => 1524,
                "prefecture_id" => 8,
                "city_id" => 428,
                "street_id" => 25103,
                "name" => "河合",
                "hiragana" => "かわい",
                "katakana" => "カワイ",
                "katakana_half" => "ｶﾜｲ",
                "romaji" => "kawai",
                "memo" => "",
                "latitude" => "36.508290",
                "altitude" => "140.517079",
            ]);
            
            Station::create([
                "id" => 1525,
                "prefecture_id" => 8,
                "city_id" => 428,
                "street_id" => 25178,
                "name" => "谷河原",
                "hiragana" => "やがわら",
                "katakana" => "ヤガワラ",
                "katakana_half" => "ﾔｶﾞﾜﾗ",
                "romaji" => "yagawara",
                "memo" => "",
                "latitude" => "36.519900",
                "altitude" => "140.525049",
            ]);
            
            Station::create([
                "id" => 1526,
                "prefecture_id" => 8,
                "city_id" => 428,
                "street_id" => null,
                "name" => "常陸太田",
                "hiragana" => "ひたちおおた",
                "katakana" => "ヒタチオオタ",
                "katakana_half" => "ﾋﾀﾁｵｵﾀ",
                "romaji" => "hitachioota",
                "memo" => "",
                "latitude" => "36.530871",
                "altitude" => "140.527994",
            ]);
            
            Station::create([
                "id" => 1527,
                "prefecture_id" => 8,
                "city_id" => 424,
                "street_id" => 24801,
                "name" => "小田林",
                "hiragana" => "おたばやし",
                "katakana" => "オタバヤシ",
                "katakana_half" => "ｵﾀﾊﾞﾔｼ",
                "romaji" => "otabayashi",
                "memo" => "",
                "latitude" => "36.300745",
                "altitude" => "139.853838",
            ]);
            
            Station::create([
                "id" => 1528,
                "prefecture_id" => 8,
                "city_id" => 424,
                "street_id" => null,
                "name" => "結城",
                "hiragana" => "ゆうき",
                "katakana" => "ユウキ",
                "katakana_half" => "ﾕｳｷ",
                "romaji" => "yuuki",
                "memo" => "",
                "latitude" => "36.298218",
                "altitude" => "139.872336",
            ]);
            
            Station::create([
                "id" => 1529,
                "prefecture_id" => 8,
                "city_id" => 442,
                "street_id" => null,
                "name" => "東結城",
                "hiragana" => "ひがしゆうき",
                "katakana" => "ヒガシユウキ",
                "katakana_half" => "ﾋｶﾞｼﾕｳｷ",
                "romaji" => "higashiyuuki",
                "memo" => "",
                "latitude" => "36.296691",
                "altitude" => "139.891223",
            ]);
            
            Station::create([
                "id" => 1530,
                "prefecture_id" => 8,
                "city_id" => 441,
                "street_id" => 26087,
                "name" => "川島",
                "hiragana" => "かわしま",
                "katakana" => "カワシマ",
                "katakana_half" => "ｶﾜｼﾏ",
                "romaji" => "kawashima",
                "memo" => "",
                "latitude" => "36.295858",
                "altitude" => "139.915416",
            ]);
            
            Station::create([
                "id" => 1531,
                "prefecture_id" => 8,
                "city_id" => 441,
                "street_id" => 26108,
                "name" => "玉戸",
                "hiragana" => "たまど",
                "katakana" => "タマド",
                "katakana_half" => "ﾀﾏﾄﾞ",
                "romaji" => "tamado",
                "memo" => "",
                "latitude" => "36.298608",
                "altitude" => "139.938914",
            ]);
            
            Station::create([
                "id" => 1532,
                "prefecture_id" => 8,
                "city_id" => 426,
                "street_id" => null,
                "name" => "下館",
                "hiragana" => "しもだて",
                "katakana" => "シモダテ",
                "katakana_half" => "ｼﾓﾀﾞﾃ",
                "romaji" => "shimodate",
                "memo" => "",
                "latitude" => "36.303886",
                "altitude" => "139.978355",
            ]);
            
            Station::create([
                "id" => 1533,
                "prefecture_id" => 8,
                "city_id" => 441,
                "street_id" => 26125,
                "name" => "新治",
                "hiragana" => "にいはり",
                "katakana" => "ニイハリ",
                "katakana_half" => "ﾆｲﾊﾘ",
                "romaji" => "niihari",
                "memo" => "",
                "latitude" => "36.328051",
                "altitude" => "140.039126",
            ]);
            
            Station::create([
                "id" => 1534,
                "prefecture_id" => 8,
                "city_id" => 420,
                "street_id" => 24430,
                "name" => "大和",
                "hiragana" => "やまと",
                "katakana" => "ヤマト",
                "katakana_half" => "ﾔﾏﾄ",
                "romaji" => "yamato",
                "memo" => "茨城県",
                "latitude" => "36.345661",
                "altitude" => "140.073401",
            ]);
            
            Station::create([
                "id" => 1535,
                "prefecture_id" => 8,
                "city_id" => 439,
                "street_id" => 25912,
                "name" => "岩瀬",
                "hiragana" => "いわせ",
                "katakana" => "イワセ",
                "katakana_half" => "ｲﾜｾ",
                "romaji" => "iwase",
                "memo" => "",
                "latitude" => "36.359605",
                "altitude" => "140.108259",
            ]);
            
            Station::create([
                "id" => 1536,
                "prefecture_id" => 8,
                "city_id" => 425,
                "street_id" => 24895,
                "name" => "羽黒",
                "hiragana" => "はぐろ",
                "katakana" => "ハグロ",
                "katakana_half" => "ﾊｸﾞﾛ",
                "romaji" => "haguro",
                "memo" => "茨城県",
                "latitude" => "36.355355",
                "altitude" => "140.143395",
            ]);
            
            Station::create([
                "id" => 1537,
                "prefecture_id" => 8,
                "city_id" => 431,
                "street_id" => 25302,
                "name" => "福原",
                "hiragana" => "ふくはら",
                "katakana" => "フクハラ",
                "katakana_half" => "ﾌｸﾊﾗ",
                "romaji" => "fukuhara",
                "memo" => "",
                "latitude" => "36.351551",
                "altitude" => "140.187113",
            ]);
            
            Station::create([
                "id" => 1538,
                "prefecture_id" => 8,
                "city_id" => 431,
                "street_id" => 25260,
                "name" => "稲田",
                "hiragana" => "いなだ",
                "katakana" => "イナダ",
                "katakana_half" => "ｲﾅﾀﾞ",
                "romaji" => "inada",
                "memo" => "",
                "latitude" => "36.368550",
                "altitude" => "140.214304",
            ]);
            
            Station::create([
                "id" => 1539,
                "prefecture_id" => 8,
                "city_id" => 431,
                "street_id" => null,
                "name" => "笠間",
                "hiragana" => "かさま",
                "katakana" => "カサマ",
                "katakana_half" => "ｶｻﾏ",
                "romaji" => "kasama",
                "memo" => "",
                "latitude" => "36.373300",
                "altitude" => "140.246052",
            ]);
            
            Station::create([
                "id" => 1540,
                "prefecture_id" => 8,
                "city_id" => 421,
                "street_id" => 24546,
                "name" => "宍戸",
                "hiragana" => "ししど",
                "katakana" => "シシド",
                "katakana_half" => "ｼｼﾄﾞ",
                "romaji" => "shishido",
                "memo" => "",
                "latitude" => "36.344609",
                "altitude" => "140.289355",
            ]);
            
            Station::create([
                "id" => 1541,
                "prefecture_id" => 8,
                "city_id" => 437,
                "street_id" => null,
                "name" => "潮来",
                "hiragana" => "いたこ",
                "katakana" => "イタコ",
                "katakana_half" => "ｲﾀｺ",
                "romaji" => "itako",
                "memo" => "",
                "latitude" => "35.936963",
                "altitude" => "140.549519",
            ]);
            
            Station::create([
                "id" => 1542,
                "prefecture_id" => 8,
                "city_id" => 437,
                "street_id" => 25850,
                "name" => "延方",
                "hiragana" => "のぶかた",
                "katakana" => "ノブカタ",
                "katakana_half" => "ﾉﾌﾞｶﾀ",
                "romaji" => "nobukata",
                "memo" => "",
                "latitude" => "35.958100",
                "altitude" => "140.588765",
            ]);
            
            Station::create([
                "id" => 1543,
                "prefecture_id" => 8,
                "city_id" => 420,
                "street_id" => 24433,
                "name" => "鹿島神宮",
                "hiragana" => "かしまじんぐう",
                "katakana" => "カシマジングウ",
                "katakana_half" => "ｶｼﾏｼﾞﾝｸﾞｳ",
                "romaji" => "kashimajinguu",
                "memo" => "",
                "latitude" => "35.970654",
                "altitude" => "140.625955",
            ]);
            
            Station::create([
                "id" => 1544,
                "prefecture_id" => 8,
                "city_id" => 420,
                "street_id" => 24433,
                "name" => "鹿島サッカースタジアム",
                "hiragana" => "かしまさっかーすたじあむ",
                "katakana" => "カシマサッカースタジアム",
                "katakana_half" => "ｶｼﾏｻｯｶｰｽﾀｼﾞｱﾑ",
                "romaji" => "kashimasakkaｰsutajiamu",
                "memo" => "",
                "latitude" => "35.992180",
                "altitude" => "140.636343",
            ]);
            
            Station::create([
                "id" => 1545,
                "prefecture_id" => 8,
                "city_id" => 420,
                "street_id" => null,
                "name" => "日工前",
                "hiragana" => "にっこうまえ",
                "katakana" => "ニッコウマエ",
                "katakana_half" => "ﾆｯｺｳﾏｴ",
                "romaji" => "nikkoumae",
                "memo" => "",
                "latitude" => "36.388165",
                "altitude" => "140.524612",
            ]);
            
            Station::create([
                "id" => 1546,
                "prefecture_id" => 8,
                "city_id" => 435,
                "street_id" => 25690,
                "name" => "金上",
                "hiragana" => "かねあげ",
                "katakana" => "カネアゲ",
                "katakana_half" => "ｶﾈｱｹﾞ",
                "romaji" => "kaneage",
                "memo" => "",
                "latitude" => "36.382526",
                "altitude" => "140.533917",
            ]);
            
            Station::create([
                "id" => 1547,
                "prefecture_id" => 8,
                "city_id" => 425,
                "street_id" => 24885,
                "name" => "中根",
                "hiragana" => "なかね",
                "katakana" => "ナカネ",
                "katakana_half" => "ﾅｶﾈ",
                "romaji" => "nakane",
                "memo" => "",
                "latitude" => "36.367473",
                "altitude" => "140.562137",
            ]);
            
            Station::create([
                "id" => 1548,
                "prefecture_id" => 8,
                "city_id" => 419,
                "street_id" => 24345,
                "name" => "高田の鉄橋",
                "hiragana" => "たかだのてっきょう",
                "katakana" => "タカダノテッキョウ",
                "katakana_half" => "ﾀｶﾀﾞﾉﾃｯｷｮｳ",
                "romaji" => "takadanotekkyou",
                "memo" => "",
                "latitude" => "36.352530",
                "altitude" => "140.580108",
            ]);
            
            Station::create([
                "id" => 1549,
                "prefecture_id" => 8,
                "city_id" => 440,
                "street_id" => null,
                "name" => "那珂湊",
                "hiragana" => "なかみなと",
                "katakana" => "ナカミナト",
                "katakana_half" => "ﾅｶﾐﾅﾄ",
                "romaji" => "nakaminato",
                "memo" => "",
                "latitude" => "36.345558",
                "altitude" => "140.587746",
            ]);
            
            Station::create([
                "id" => 1550,
                "prefecture_id" => 8,
                "city_id" => 435,
                "street_id" => 25727,
                "name" => "殿山",
                "hiragana" => "とのやま",
                "katakana" => "トノヤマ",
                "katakana_half" => "ﾄﾉﾔﾏ",
                "romaji" => "tonoyama",
                "memo" => "",
                "latitude" => "36.349919",
                "altitude" => "140.601995",
            ]);
            
            Station::create([
                "id" => 1551,
                "prefecture_id" => 8,
                "city_id" => 435,
                "street_id" => 25740,
                "name" => "平磯",
                "hiragana" => "ひらいそ",
                "katakana" => "ヒライソ",
                "katakana_half" => "ﾋﾗｲｿ",
                "romaji" => "hiraiso",
                "memo" => "",
                "latitude" => "36.357418",
                "altitude" => "140.607578",
            ]);
            
            Station::create([
                "id" => 1552,
                "prefecture_id" => 8,
                "city_id" => 435,
                "street_id" => 25673,
                "name" => "磯崎",
                "hiragana" => "いそざき",
                "katakana" => "イソザキ",
                "katakana_half" => "ｲｿｻﾞｷ",
                "romaji" => "isozaki",
                "memo" => "",
                "latitude" => "36.377722",
                "altitude" => "140.618020",
            ]);
            
            Station::create([
                "id" => 1553,
                "prefecture_id" => 8,
                "city_id" => 435,
                "street_id" => 25670,
                "name" => "阿字ケ浦",
                "hiragana" => "あじがうら",
                "katakana" => "アジガウラ",
                "katakana_half" => "ｱｼﾞｶﾞｳﾗ",
                "romaji" => "ajigaura",
                "memo" => "",
                "latitude" => "36.383388",
                "altitude" => "140.612382",
            ]);
            
            Station::create([
                "id" => 1554,
                "prefecture_id" => 8,
                "city_id" => 441,
                "street_id" => null,
                "name" => "西取手",
                "hiragana" => "にしとりで",
                "katakana" => "ニシトリデ",
                "katakana_half" => "ﾆｼﾄﾘﾃﾞ",
                "romaji" => "nishitoride",
                "memo" => "",
                "latitude" => "35.908902",
                "altitude" => "140.059144",
            ]);
            
            Station::create([
                "id" => 1555,
                "prefecture_id" => 8,
                "city_id" => 421,
                "street_id" => 24566,
                "name" => "寺原",
                "hiragana" => "てらはら",
                "katakana" => "テラハラ",
                "katakana_half" => "ﾃﾗﾊﾗ",
                "romaji" => "terahara",
                "memo" => "",
                "latitude" => "35.911679",
                "altitude" => "140.054755",
            ]);
            
            Station::create([
                "id" => 1556,
                "prefecture_id" => 8,
                "city_id" => 432,
                "street_id" => 25348,
                "name" => "新取手",
                "hiragana" => "しんとりで",
                "katakana" => "シントリデ",
                "katakana_half" => "ｼﾝﾄﾘﾃﾞ",
                "romaji" => "shintoride",
                "memo" => "",
                "latitude" => "35.917594",
                "altitude" => "140.042339",
            ]);
            
            Station::create([
                "id" => 1557,
                "prefecture_id" => 8,
                "city_id" => 432,
                "street_id" => 25373,
                "name" => "ゆめみ野",
                "hiragana" => "ゆめみの",
                "katakana" => "ユメミノ",
                "katakana_half" => "ﾕﾒﾐﾉ",
                "romaji" => "yumemino",
                "memo" => "",
                "latitude" => "35.921123",
                "altitude" => "140.034813",
            ]);
            
            Station::create([
                "id" => 1558,
                "prefecture_id" => 8,
                "city_id" => 443,
                "street_id" => null,
                "name" => "稲戸井",
                "hiragana" => "いなとい",
                "katakana" => "イナトイ",
                "katakana_half" => "ｲﾅﾄｲ",
                "romaji" => "inatoi",
                "memo" => "",
                "latitude" => "35.926094",
                "altitude" => "140.022647",
            ]);
            
            Station::create([
                "id" => 1559,
                "prefecture_id" => 8,
                "city_id" => 432,
                "street_id" => 25355,
                "name" => "戸頭",
                "hiragana" => "とがしら",
                "katakana" => "トガシラ",
                "katakana_half" => "ﾄｶﾞｼﾗ",
                "romaji" => "togashira",
                "memo" => "",
                "latitude" => "35.929316",
                "altitude" => "140.014008",
            ]);
            
            Station::create([
                "id" => 1560,
                "prefecture_id" => 8,
                "city_id" => 419,
                "street_id" => 24335,
                "name" => "南守谷",
                "hiragana" => "みなみもりや",
                "katakana" => "ミナミモリヤ",
                "katakana_half" => "ﾐﾅﾐﾓﾘﾔ",
                "romaji" => "minamimoriya",
                "memo" => "",
                "latitude" => "35.933731",
                "altitude" => "140.003481",
            ]);
            
            Station::create([
                "id" => 1561,
                "prefecture_id" => 8,
                "city_id" => 438,
                "street_id" => null,
                "name" => "守谷",
                "hiragana" => "もりや",
                "katakana" => "モリヤ",
                "katakana_half" => "ﾓﾘﾔ",
                "romaji" => "moriya",
                "memo" => "",
                "latitude" => "35.950424",
                "altitude" => "139.992315",
            ]);
            
            Station::create([
                "id" => 1562,
                "prefecture_id" => 8,
                "city_id" => 438,
                "street_id" => null,
                "name" => "新守谷",
                "hiragana" => "しんもりや",
                "katakana" => "シンモリヤ",
                "katakana_half" => "ｼﾝﾓﾘﾔ",
                "romaji" => "shinmoriya",
                "memo" => "",
                "latitude" => "35.966283",
                "altitude" => "139.985648",
            ]);
            
            Station::create([
                "id" => 1563,
                "prefecture_id" => 8,
                "city_id" => 449,
                "street_id" => 26654,
                "name" => "小絹",
                "hiragana" => "こきぬ",
                "katakana" => "コキヌ",
                "katakana_half" => "ｺｷﾇ",
                "romaji" => "kokinu",
                "memo" => "",
                "latitude" => "35.981115",
                "altitude" => "139.983287",
            ]);
            
            Station::create([
                "id" => 1564,
                "prefecture_id" => 8,
                "city_id" => 424,
                "street_id" => 24830,
                "name" => "水海道",
                "hiragana" => "みつかいどう",
                "katakana" => "ミツカイドウ",
                "katakana_half" => "ﾐﾂｶｲﾄﾞｳ",
                "romaji" => "mitsukaidou",
                "memo" => "",
                "latitude" => "36.017889",
                "altitude" => "139.991422",
            ]);
            
            Station::create([
                "id" => 1565,
                "prefecture_id" => 8,
                "city_id" => 430,
                "street_id" => null,
                "name" => "北水海道",
                "hiragana" => "きたみつかいどう",
                "katakana" => "キタミツカイドウ",
                "katakana_half" => "ｷﾀﾐﾂｶｲﾄﾞｳ",
                "romaji" => "kitamitsukaidou",
                "memo" => "",
                "latitude" => "36.032165",
                "altitude" => "139.992838",
            ]);
            
            Station::create([
                "id" => 1566,
                "prefecture_id" => 8,
                "city_id" => 427,
                "street_id" => 25038,
                "name" => "中妻",
                "hiragana" => "なかつま",
                "katakana" => "ナカツマ",
                "katakana_half" => "ﾅｶﾂﾏ",
                "romaji" => "nakatsuma",
                "memo" => "",
                "latitude" => "36.047414",
                "altitude" => "139.990726",
            ]);
            
            Station::create([
                "id" => 1567,
                "prefecture_id" => 8,
                "city_id" => 419,
                "street_id" => 24324,
                "name" => "三妻",
                "hiragana" => "みつま",
                "katakana" => "ミツマ",
                "katakana_half" => "ﾐﾂﾏ",
                "romaji" => "mitsuma",
                "memo" => "",
                "latitude" => "36.073522",
                "altitude" => "139.983060",
            ]);
            
            Station::create([
                "id" => 1568,
                "prefecture_id" => 8,
                "city_id" => 419,
                "street_id" => 24335,
                "name" => "南石下",
                "hiragana" => "みなみいしげ",
                "katakana" => "ミナミイシゲ",
                "katakana_half" => "ﾐﾅﾐｲｼｹﾞ",
                "romaji" => "minamiishige",
                "memo" => "",
                "latitude" => "36.102296",
                "altitude" => "139.973920",
            ]);
            
            Station::create([
                "id" => 1569,
                "prefecture_id" => 8,
                "city_id" => 427,
                "street_id" => 25028,
                "name" => "石下",
                "hiragana" => "いしげ",
                "katakana" => "イシゲ",
                "katakana_half" => "ｲｼｹﾞ",
                "romaji" => "ishige",
                "memo" => "",
                "latitude" => "36.116934",
                "altitude" => "139.974336",
            ]);
            
            Station::create([
                "id" => 1570,
                "prefecture_id" => 8,
                "city_id" => 450,
                "street_id" => null,
                "name" => "玉村",
                "hiragana" => "たまむら",
                "katakana" => "タマムラ",
                "katakana_half" => "ﾀﾏﾑﾗ",
                "romaji" => "tamamura",
                "memo" => "",
                "latitude" => "36.135598",
                "altitude" => "139.970003",
            ]);
            
            Station::create([
                "id" => 1571,
                "prefecture_id" => 8,
                "city_id" => 426,
                "street_id" => 24957,
                "name" => "宗道",
                "hiragana" => "そうどう",
                "katakana" => "ソウドウ",
                "katakana_half" => "ｿｳﾄﾞｳ",
                "romaji" => "soudou",
                "memo" => "",
                "latitude" => "36.153624",
                "altitude" => "139.970502",
            ]);
            
            Station::create([
                "id" => 1572,
                "prefecture_id" => 8,
                "city_id" => 426,
                "street_id" => null,
                "name" => "下妻",
                "hiragana" => "しもつま",
                "katakana" => "シモツマ",
                "katakana_half" => "ｼﾓﾂﾏ",
                "romaji" => "shimotsuma",
                "memo" => "",
                "latitude" => "36.182287",
                "altitude" => "139.964584",
            ]);
            
            Station::create([
                "id" => 1573,
                "prefecture_id" => 8,
                "city_id" => 426,
                "street_id" => 24933,
                "name" => "大宝",
                "hiragana" => "だいほう",
                "katakana" => "ダイホウ",
                "katakana_half" => "ﾀﾞｲﾎｳ",
                "romaji" => "daihou",
                "memo" => "",
                "latitude" => "36.203202",
                "altitude" => "139.970083",
            ]);
            
            Station::create([
                "id" => 1574,
                "prefecture_id" => 8,
                "city_id" => 419,
                "street_id" => null,
                "name" => "騰波ノ江",
                "hiragana" => "とばのえ",
                "katakana" => "トバノエ",
                "katakana_half" => "ﾄﾊﾞﾉｴ",
                "romaji" => "tobanoe",
                "memo" => "",
                "latitude" => "36.223173",
                "altitude" => "139.976248",
            ]);
            
            Station::create([
                "id" => 1575,
                "prefecture_id" => 8,
                "city_id" => 441,
                "street_id" => 26070,
                "name" => "黒子",
                "hiragana" => "くろご",
                "katakana" => "クロゴ",
                "katakana_half" => "ｸﾛｺﾞ",
                "romaji" => "kurogo",
                "memo" => "",
                "latitude" => "36.247198",
                "altitude" => "139.975052",
            ]);
            
            Station::create([
                "id" => 1576,
                "prefecture_id" => 8,
                "city_id" => 431,
                "street_id" => 25263,
                "name" => "大田郷",
                "hiragana" => "おおたごう",
                "katakana" => "オオタゴウ",
                "katakana_half" => "ｵｵﾀｺﾞｳ",
                "romaji" => "ootagou",
                "memo" => "",
                "latitude" => "36.278194",
                "altitude" => "139.959719",
            ]);
            
            Station::create([
                "id" => 1577,
                "prefecture_id" => 8,
                "city_id" => 425,
                "street_id" => 24844,
                "name" => "入地",
                "hiragana" => "いれじ",
                "katakana" => "イレジ",
                "katakana_half" => "ｲﾚｼﾞ",
                "romaji" => "ireji",
                "memo" => "",
                "latitude" => "35.918958",
                "altitude" => "140.157219",
            ]);
            
            Station::create([
                "id" => 1578,
                "prefecture_id" => 8,
                "city_id" => 458,
                "street_id" => 27013,
                "name" => "竜ケ崎",
                "hiragana" => "りゅうがさき",
                "katakana" => "リュウガサキ",
                "katakana_half" => "ﾘｭｳｶﾞｻｷ",
                "romaji" => "ryuugasaki",
                "memo" => "",
                "latitude" => "35.908654",
                "altitude" => "140.178912",
            ]);
            
            Station::create([
                "id" => 1579,
                "prefecture_id" => 8,
                "city_id" => 442,
                "street_id" => null,
                "name" => "東水戸",
                "hiragana" => "ひがしみと",
                "katakana" => "ヒガシミト",
                "katakana_half" => "ﾋｶﾞｼﾐﾄ",
                "romaji" => "higashimito",
                "memo" => "",
                "latitude" => "36.361805",
                "altitude" => "140.516058",
            ]);
            
            Station::create([
                "id" => 1580,
                "prefecture_id" => 8,
                "city_id" => 427,
                "street_id" => null,
                "name" => "常澄",
                "hiragana" => "つねずみ",
                "katakana" => "ツネズミ",
                "katakana_half" => "ﾂﾈｽﾞﾐ",
                "romaji" => "tsunezumi",
                "memo" => "",
                "latitude" => "36.340809",
                "altitude" => "140.558917",
            ]);
            
            Station::create([
                "id" => 1581,
                "prefecture_id" => 8,
                "city_id" => 452,
                "street_id" => null,
                "name" => "大洗",
                "hiragana" => "おおあらい",
                "katakana" => "オオアライ",
                "katakana_half" => "ｵｵｱﾗｲ",
                "romaji" => "ooarai",
                "memo" => "",
                "latitude" => "36.315200",
                "altitude" => "140.562529",
            ]);
            
            Station::create([
                "id" => 1582,
                "prefecture_id" => 8,
                "city_id" => 419,
                "street_id" => null,
                "name" => "涸沼",
                "hiragana" => "ひぬま",
                "katakana" => "ヒヌマ",
                "katakana_half" => "ﾋﾇﾏ",
                "romaji" => "hinuma",
                "memo" => "",
                "latitude" => "36.265872",
                "altitude" => "140.527228",
            ]);
            
            Station::create([
                "id" => 1583,
                "prefecture_id" => 8,
                "city_id" => 420,
                "street_id" => 24433,
                "name" => "鹿島旭",
                "hiragana" => "かしまあさひ",
                "katakana" => "カシマアサヒ",
                "katakana_half" => "ｶｼﾏｱｻﾋ",
                "romaji" => "kashimaasahi",
                "memo" => "",
                "latitude" => "36.224542",
                "altitude" => "140.512509",
            ]);
            
            Station::create([
                "id" => 1584,
                "prefecture_id" => 8,
                "city_id" => 448,
                "street_id" => 26613,
                "name" => "徳宿",
                "hiragana" => "とくしゅく",
                "katakana" => "トクシュク",
                "katakana_half" => "ﾄｸｼｭｸ",
                "romaji" => "tokushuku",
                "memo" => "",
                "latitude" => "36.190241",
                "altitude" => "140.514510",
            ]);
            
            Station::create([
                "id" => 1585,
                "prefecture_id" => 8,
                "city_id" => 448,
                "street_id" => 26601,
                "name" => "新鉾田",
                "hiragana" => "しんほこた",
                "katakana" => "シンホコタ",
                "katakana_half" => "ｼﾝﾎｺﾀ",
                "romaji" => "shinhokota",
                "memo" => "",
                "latitude" => "36.152467",
                "altitude" => "140.520373",
            ]);
            
            Station::create([
                "id" => 1586,
                "prefecture_id" => 8,
                "city_id" => 430,
                "street_id" => null,
                "name" => "北浦湖畔",
                "hiragana" => "きたうらこはん",
                "katakana" => "キタウラコハン",
                "katakana_half" => "ｷﾀｳﾗｺﾊﾝ",
                "romaji" => "kitaurakohan",
                "memo" => "",
                "latitude" => "36.120332",
                "altitude" => "140.536872",
            ]);
            
            Station::create([
                "id" => 1587,
                "prefecture_id" => 8,
                "city_id" => 439,
                "street_id" => null,
                "name" => "大洋",
                "hiragana" => "たいよう",
                "katakana" => "タイヨウ",
                "katakana_half" => "ﾀｲﾖｳ",
                "romaji" => "taiyou",
                "memo" => "",
                "latitude" => "36.108195",
                "altitude" => "140.576453",
            ]);
            
            Station::create([
                "id" => 1588,
                "prefecture_id" => 8,
                "city_id" => 420,
                "street_id" => 24433,
                "name" => "鹿島灘",
                "hiragana" => "かしまなだ",
                "katakana" => "カシマナダ",
                "katakana_half" => "ｶｼﾏﾅﾀﾞ",
                "romaji" => "kashimanada",
                "memo" => "",
                "latitude" => "36.075587",
                "altitude" => "140.597008",
            ]);
            
            Station::create([
                "id" => 1589,
                "prefecture_id" => 8,
                "city_id" => 420,
                "street_id" => 24433,
                "name" => "鹿島大野",
                "hiragana" => "かしまおおの",
                "katakana" => "カシマオオノ",
                "katakana_half" => "ｶｼﾏｵｵﾉ",
                "romaji" => "kashimaoono",
                "memo" => "",
                "latitude" => "36.050674",
                "altitude" => "140.609953",
            ]);
            
            Station::create([
                "id" => 1590,
                "prefecture_id" => 8,
                "city_id" => 422,
                "street_id" => 24661,
                "name" => "長者ケ浜潮騒はまなす公園前",
                "hiragana" => "ちょうじゃがはましおさいはまなすこうえんまえ",
                "katakana" => "チョウジャガハマシオサイハマナスコウエンマエ",
                "katakana_half" => "ﾁｮｳｼﾞｬｶﾞﾊﾏｼｵｻｲﾊﾏﾅｽｺｳｴﾝﾏｴ",
                "romaji" => "choujagahamashiosaihamanasukouenmae",
                "memo" => "",
                "latitude" => "36.031593",
                "altitude" => "140.618703",
            ]);
            
            Station::create([
                "id" => 1591,
                "prefecture_id" => 8,
                "city_id" => 436,
                "street_id" => 25783,
                "name" => "荒野台",
                "hiragana" => "こうやだい",
                "katakana" => "コウヤダイ",
                "katakana_half" => "ｺｳﾔﾀﾞｲ",
                "romaji" => "kouyadai",
                "memo" => "",
                "latitude" => "36.016678",
                "altitude" => "140.625370",
            ]);
            
            Station::create([
                "id" => 1592,
                "prefecture_id" => 8,
                "city_id" => 426,
                "street_id" => null,
                "name" => "下館二高前",
                "hiragana" => "しもだてにこうまえ",
                "katakana" => "シモダテニコウマエ",
                "katakana_half" => "ｼﾓﾀﾞﾃﾆｺｳﾏｴ",
                "romaji" => "shimodatenikoumae",
                "memo" => "",
                "latitude" => "36.319273",
                "altitude" => "139.972077",
            ]);
            
            Station::create([
                "id" => 1593,
                "prefecture_id" => 8,
                "city_id" => 441,
                "street_id" => 26052,
                "name" => "折本",
                "hiragana" => "おりもと",
                "katakana" => "オリモト",
                "katakana_half" => "ｵﾘﾓﾄ",
                "romaji" => "orimoto",
                "memo" => "",
                "latitude" => "36.340632",
                "altitude" => "139.971159",
            ]);
            
            Station::create([
                "id" => 1594,
                "prefecture_id" => 8,
                "city_id" => 435,
                "street_id" => null,
                "name" => "ひぐち",
                "hiragana" => "ひぐち",
                "katakana" => "ヒグチ",
                "katakana_half" => "ﾋｸﾞﾁ",
                "romaji" => "higuchi",
                "memo" => "",
                "latitude" => "36.358602",
                "altitude" => "139.970354",
            ]);
            
            Station::create([
                "id" => 1595,
                "prefecture_id" => 8,
                "city_id" => 449,
                "street_id" => null,
                "name" => "みらい平",
                "hiragana" => "みらいだいら",
                "katakana" => "ミライダイラ",
                "katakana_half" => "ﾐﾗｲﾀﾞｲﾗ",
                "romaji" => "miraidaira",
                "memo" => "",
                "latitude" => "35.994587",
                "altitude" => "140.038420",
            ]);
            
            Station::create([
                "id" => 1596,
                "prefecture_id" => 8,
                "city_id" => 434,
                "street_id" => 25642,
                "name" => "みどりの",
                "hiragana" => "みどりの",
                "katakana" => "ミドリノ",
                "katakana_half" => "ﾐﾄﾞﾘﾉ",
                "romaji" => "midorino",
                "memo" => "",
                "latitude" => "36.029584",
                "altitude" => "140.056195",
            ]);
            
            Station::create([
                "id" => 1597,
                "prefecture_id" => 8,
                "city_id" => 434,
                "street_id" => 25613,
                "name" => "万博記念公園",
                "hiragana" => "ばんぱくきねんこうえん",
                "katakana" => "バンパクキネンコウエン",
                "katakana_half" => "ﾊﾞﾝﾊﾟｸｷﾈﾝｺｳｴﾝ",
                "romaji" => "banpakukinenkouen",
                "memo" => "茨城県",
                "latitude" => "36.058331",
                "altitude" => "140.059388",
            ]);
            
            Station::create([
                "id" => 1598,
                "prefecture_id" => 8,
                "city_id" => 434,
                "street_id" => 25502,
                "name" => "研究学園",
                "hiragana" => "けんきゅうがくえん",
                "katakana" => "ケンキュウガクエン",
                "katakana_half" => "ｹﾝｷｭｳｶﾞｸｴﾝ",
                "romaji" => "kenkyuugakuen",
                "memo" => "",
                "latitude" => "36.082078",
                "altitude" => "140.082579",
            ]);
            
            Station::create([
                "id" => 1599,
                "prefecture_id" => 8,
                "city_id" => 434,
                "street_id" => null,
                "name" => "つくば",
                "hiragana" => "つくば",
                "katakana" => "ツクバ",
                "katakana_half" => "ﾂｸﾊﾞ",
                "romaji" => "tsukuba",
                "memo" => "",
                "latitude" => "36.082634",
                "altitude" => "140.111466",
            ]);
            
    }
}
