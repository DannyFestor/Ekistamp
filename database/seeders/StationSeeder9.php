<?php
namespace Database\Seeders;

use App\Models\Station;
use Illuminate\Database\Seeder;

class StationSeeder9 extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        
            Station::create([
                "id" => 1600,
                "prefecture_id" => 9,
                "city_id" => 469,
                "street_id" => null,
                "name" => "小山",
                "hiragana" => "おやま",
                "katakana" => "オヤマ",
                "katakana_half" => "ｵﾔﾏ",
                "romaji" => "oyama",
                "memo" => "",
                "latitude" => "36.312938",
                "altitude" => "139.806258",
            ]);
            
            Station::create([
                "id" => 1601,
                "prefecture_id" => 9,
                "city_id" => 463,
                "street_id" => null,
                "name" => "宇都宮",
                "hiragana" => "うつのみや",
                "katakana" => "ウツノミヤ",
                "katakana_half" => "ｳﾂﾉﾐﾔ",
                "romaji" => "utsunomiya",
                "memo" => "",
                "latitude" => "36.558830",
                "altitude" => "139.898183",
            ]);
            
            Station::create([
                "id" => 1602,
                "prefecture_id" => 9,
                "city_id" => 473,
                "street_id" => null,
                "name" => "那須塩原",
                "hiragana" => "なすしおばら",
                "katakana" => "ナスシオバラ",
                "katakana_half" => "ﾅｽｼｵﾊﾞﾗ",
                "romaji" => "nasushiobara",
                "memo" => "",
                "latitude" => "36.931625",
                "altitude" => "140.020656",
            ]);
            
            Station::create([
                "id" => 1603,
                "prefecture_id" => 9,
                "city_id" => 483,
                "street_id" => null,
                "name" => "野木",
                "hiragana" => "のぎ",
                "katakana" => "ノギ",
                "katakana_half" => "ﾉｷﾞ",
                "romaji" => "nogi",
                "memo" => "",
                "latitude" => "36.230333",
                "altitude" => "139.735045",
            ]);
            
            Station::create([
                "id" => 1604,
                "prefecture_id" => 9,
                "city_id" => 469,
                "street_id" => 28122,
                "name" => "間々田",
                "hiragana" => "ままだ",
                "katakana" => "ママダ",
                "katakana_half" => "ﾏﾏﾀﾞ",
                "romaji" => "mamada",
                "memo" => "",
                "latitude" => "36.257887",
                "altitude" => "139.760986",
            ]);
            
            Station::create([
                "id" => 1605,
                "prefecture_id" => 9,
                "city_id" => 476,
                "street_id" => 28645,
                "name" => "小金井",
                "hiragana" => "こがねい",
                "katakana" => "コガネイ",
                "katakana_half" => "ｺｶﾞﾈｲ",
                "romaji" => "koganei",
                "memo" => "",
                "latitude" => "36.374431",
                "altitude" => "139.842057",
            ]);
            
            Station::create([
                "id" => 1606,
                "prefecture_id" => 9,
                "city_id" => 463,
                "street_id" => null,
                "name" => "自治医大",
                "hiragana" => "じちいだい",
                "katakana" => "ジチイダイ",
                "katakana_half" => "ｼﾞﾁｲﾀﾞｲ",
                "romaji" => "jichiidai",
                "memo" => "",
                "latitude" => "36.395179",
                "altitude" => "139.854528",
            ]);
            
            Station::create([
                "id" => 1607,
                "prefecture_id" => 9,
                "city_id" => 467,
                "street_id" => 27786,
                "name" => "石橋",
                "hiragana" => "いしばし",
                "katakana" => "イシバシ",
                "katakana_half" => "ｲｼﾊﾞｼ",
                "romaji" => "ishibashi",
                "memo" => "栃木県",
                "latitude" => "36.436481",
                "altitude" => "139.866525",
            ]);
            
            Station::create([
                "id" => 1608,
                "prefecture_id" => 9,
                "city_id" => 463,
                "street_id" => 27252,
                "name" => "雀宮",
                "hiragana" => "すずめのみや",
                "katakana" => "スズメノミヤ",
                "katakana_half" => "ｽｽﾞﾒﾉﾐﾔ",
                "romaji" => "suzumenomiya",
                "memo" => "",
                "latitude" => "36.493836",
                "altitude" => "139.876799",
            ]);
            
            Station::create([
                "id" => 1609,
                "prefecture_id" => 9,
                "city_id" => 463,
                "street_id" => 27224,
                "name" => "岡本",
                "hiragana" => "おかもと",
                "katakana" => "オカモト",
                "katakana_half" => "ｵｶﾓﾄ",
                "romaji" => "okamoto",
                "memo" => "栃木県",
                "latitude" => "36.598410",
                "altitude" => "139.944483",
            ]);
            
            Station::create([
                "id" => 1610,
                "prefecture_id" => 9,
                "city_id" => 485,
                "street_id" => 28901,
                "name" => "宝積寺",
                "hiragana" => "ほうしゃくじ",
                "katakana" => "ホウシャクジ",
                "katakana_half" => "ﾎｳｼｬｸｼﾞ",
                "romaji" => "houshakuji",
                "memo" => "",
                "latitude" => "36.631462",
                "altitude" => "139.979423",
            ]);
            
            Station::create([
                "id" => 1611,
                "prefecture_id" => 9,
                "city_id" => 474,
                "street_id" => 28539,
                "name" => "氏家",
                "hiragana" => "うじいえ",
                "katakana" => "ウジイエ",
                "katakana_half" => "ｳｼﾞｲｴ",
                "romaji" => "ujiie",
                "memo" => "",
                "latitude" => "36.681553",
                "altitude" => "139.962311",
            ]);
            
            Station::create([
                "id" => 1612,
                "prefecture_id" => 9,
                "city_id" => 474,
                "street_id" => 28552,
                "name" => "蒲須坂",
                "hiragana" => "かますさか",
                "katakana" => "カマスサカ",
                "katakana_half" => "ｶﾏｽｻｶ",
                "romaji" => "kamasusaka",
                "memo" => "",
                "latitude" => "36.721202",
                "altitude" => "139.950505",
            ]);
            
            Station::create([
                "id" => 1613,
                "prefecture_id" => 9,
                "city_id" => 472,
                "street_id" => 28348,
                "name" => "片岡",
                "hiragana" => "かたおか",
                "katakana" => "カタオカ",
                "katakana_half" => "ｶﾀｵｶ",
                "romaji" => "kataoka",
                "memo" => "",
                "latitude" => "36.754337",
                "altitude" => "139.945920",
            ]);
            
            Station::create([
                "id" => 1614,
                "prefecture_id" => 9,
                "city_id" => 472,
                "street_id" => null,
                "name" => "矢板",
                "hiragana" => "やいた",
                "katakana" => "ヤイタ",
                "katakana_half" => "ﾔｲﾀ",
                "romaji" => "yaita",
                "memo" => "",
                "latitude" => "36.806859",
                "altitude" => "139.932947",
            ]);
            
            Station::create([
                "id" => 1615,
                "prefecture_id" => 9,
                "city_id" => 471,
                "street_id" => 28310,
                "name" => "野崎",
                "hiragana" => "のざき",
                "katakana" => "ノザキ",
                "katakana_half" => "ﾉｻﾞｷ",
                "romaji" => "nozaki",
                "memo" => "栃木県",
                "latitude" => "36.843717",
                "altitude" => "139.957720",
            ]);
            
            Station::create([
                "id" => 1616,
                "prefecture_id" => 9,
                "city_id" => 463,
                "street_id" => 27299,
                "name" => "西那須野",
                "hiragana" => "にしなすの",
                "katakana" => "ニシナスノ",
                "katakana_half" => "ﾆｼﾅｽﾉ",
                "romaji" => "nishinasuno",
                "memo" => "",
                "latitude" => "36.884463",
                "altitude" => "139.986494",
            ]);
            
            Station::create([
                "id" => 1617,
                "prefecture_id" => 9,
                "city_id" => 473,
                "street_id" => 28424,
                "name" => "黒磯",
                "hiragana" => "くろいそ",
                "katakana" => "クロイソ",
                "katakana_half" => "ｸﾛｲｿ",
                "romaji" => "kuroiso",
                "memo" => "",
                "latitude" => "36.970010",
                "altitude" => "140.059512",
            ]);
            
            Station::create([
                "id" => 1618,
                "prefecture_id" => 9,
                "city_id" => 486,
                "street_id" => 28912,
                "name" => "高久",
                "hiragana" => "たかく",
                "katakana" => "タカク",
                "katakana_half" => "ﾀｶｸ",
                "romaji" => "takaku",
                "memo" => "",
                "latitude" => "36.996646",
                "altitude" => "140.087314",
            ]);
            
            Station::create([
                "id" => 1619,
                "prefecture_id" => 9,
                "city_id" => 469,
                "street_id" => 28109,
                "name" => "黒田原",
                "hiragana" => "くろだはら",
                "katakana" => "クロダハラ",
                "katakana_half" => "ｸﾛﾀﾞﾊﾗ",
                "romaji" => "kurodahara",
                "memo" => "",
                "latitude" => "37.022812",
                "altitude" => "140.119616",
            ]);
            
            Station::create([
                "id" => 1620,
                "prefecture_id" => 9,
                "city_id" => 486,
                "street_id" => 28923,
                "name" => "豊原",
                "hiragana" => "とよはら",
                "katakana" => "トヨハラ",
                "katakana_half" => "ﾄﾖﾊﾗ",
                "romaji" => "toyohara",
                "memo" => "",
                "latitude" => "37.055003",
                "altitude" => "140.155250",
            ]);
            
            Station::create([
                "id" => 1621,
                "prefecture_id" => 9,
                "city_id" => 476,
                "street_id" => null,
                "name" => "下野花岡",
                "hiragana" => "しもつけはなおか",
                "katakana" => "シモツケハナオカ",
                "katakana_half" => "ｼﾓﾂｹﾊﾅｵｶ",
                "romaji" => "shimotsukehanaoka",
                "memo" => "",
                "latitude" => "36.649850",
                "altitude" => "140.008614",
            ]);
            
            Station::create([
                "id" => 1622,
                "prefecture_id" => 9,
                "city_id" => 467,
                "street_id" => 27860,
                "name" => "仁井田",
                "hiragana" => "にいた",
                "katakana" => "ニイタ",
                "katakana_half" => "ﾆｲﾀ",
                "romaji" => "niita",
                "memo" => "栃木県",
                "latitude" => "36.657210",
                "altitude" => "140.029668",
            ]);
            
            Station::create([
                "id" => 1623,
                "prefecture_id" => 9,
                "city_id" => 475,
                "street_id" => 28594,
                "name" => "鴻野山",
                "hiragana" => "こうのやま",
                "katakana" => "コウノヤマ",
                "katakana_half" => "ｺｳﾉﾔﾏ",
                "romaji" => "kounoyama",
                "memo" => "",
                "latitude" => "36.666487",
                "altitude" => "140.051832",
            ]);
            
            Station::create([
                "id" => 1624,
                "prefecture_id" => 9,
                "city_id" => 475,
                "street_id" => 28580,
                "name" => "大金",
                "hiragana" => "おおがね",
                "katakana" => "オオガネ",
                "katakana_half" => "ｵｵｶﾞﾈ",
                "romaji" => "oogane",
                "memo" => "",
                "latitude" => "36.656433",
                "altitude" => "140.095690",
            ]);
            
            Station::create([
                "id" => 1625,
                "prefecture_id" => 9,
                "city_id" => 475,
                "street_id" => 28598,
                "name" => "小塙",
                "hiragana" => "こばな",
                "katakana" => "コバナ",
                "katakana_half" => "ｺﾊﾞﾅ",
                "romaji" => "kobana",
                "memo" => "",
                "latitude" => "36.642824",
                "altitude" => "140.116939",
            ]);
            
            Station::create([
                "id" => 1626,
                "prefecture_id" => 9,
                "city_id" => 463,
                "street_id" => 27265,
                "name" => "滝",
                "hiragana" => "たき",
                "katakana" => "タキ",
                "katakana_half" => "ﾀｷ",
                "romaji" => "taki",
                "memo" => "栃木県",
                "latitude" => "36.648824",
                "altitude" => "140.138076",
            ]);
            
            Station::create([
                "id" => 1627,
                "prefecture_id" => 9,
                "city_id" => 475,
                "street_id" => null,
                "name" => "烏山",
                "hiragana" => "からすやま",
                "katakana" => "カラスヤマ",
                "katakana_half" => "ｶﾗｽﾔﾏ",
                "romaji" => "karasuyama",
                "memo" => "",
                "latitude" => "36.650435",
                "altitude" => "140.154963",
            ]);
            
            Station::create([
                "id" => 1628,
                "prefecture_id" => 9,
                "city_id" => 463,
                "street_id" => 27273,
                "name" => "鶴田",
                "hiragana" => "つるた",
                "katakana" => "ツルタ",
                "katakana_half" => "ﾂﾙﾀ",
                "romaji" => "tsuruta",
                "memo" => "",
                "latitude" => "36.538276",
                "altitude" => "139.857771",
            ]);
            
            Station::create([
                "id" => 1629,
                "prefecture_id" => 9,
                "city_id" => 467,
                "street_id" => null,
                "name" => "鹿沼",
                "hiragana" => "かぬま",
                "katakana" => "カヌマ",
                "katakana_half" => "ｶﾇﾏ",
                "romaji" => "kanuma",
                "memo" => "",
                "latitude" => "36.570992",
                "altitude" => "139.762861",
            ]);
            
            Station::create([
                "id" => 1630,
                "prefecture_id" => 9,
                "city_id" => 468,
                "street_id" => 28014,
                "name" => "文挾",
                "hiragana" => "ふばさみ",
                "katakana" => "フバサミ",
                "katakana_half" => "ﾌﾊﾞｻﾐ",
                "romaji" => "fubasami",
                "memo" => "",
                "latitude" => "36.637207",
                "altitude" => "139.728027",
            ]);
            
            Station::create([
                "id" => 1631,
                "prefecture_id" => 9,
                "city_id" => 476,
                "street_id" => null,
                "name" => "下野大沢",
                "hiragana" => "しもつけおおさわ",
                "katakana" => "シモツケオオサワ",
                "katakana_half" => "ｼﾓﾂｹｵｵｻﾜ",
                "romaji" => "shimotsukeoosawa",
                "memo" => "",
                "latitude" => "36.686479",
                "altitude" => "139.732497",
            ]);
            
            Station::create([
                "id" => 1632,
                "prefecture_id" => 9,
                "city_id" => 468,
                "street_id" => 27919,
                "name" => "今市",
                "hiragana" => "いまいち",
                "katakana" => "イマイチ",
                "katakana_half" => "ｲﾏｲﾁ",
                "romaji" => "imaichi",
                "memo" => "",
                "latitude" => "36.720864",
                "altitude" => "139.686915",
            ]);
            
            Station::create([
                "id" => 1633,
                "prefecture_id" => 9,
                "city_id" => 468,
                "street_id" => null,
                "name" => "日光",
                "hiragana" => "にっこう",
                "katakana" => "ニッコウ",
                "katakana_half" => "ﾆｯｺｳ",
                "romaji" => "nikkou",
                "memo" => "",
                "latitude" => "36.747193",
                "altitude" => "139.622087",
            ]);
            
            Station::create([
                "id" => 1634,
                "prefecture_id" => 9,
                "city_id" => 463,
                "street_id" => null,
                "name" => "思川",
                "hiragana" => "おもいがわ",
                "katakana" => "オモイガワ",
                "katakana_half" => "ｵﾓｲｶﾞﾜ",
                "romaji" => "omoigawa",
                "memo" => "",
                "latitude" => "36.350627",
                "altitude" => "139.781536",
            ]);
            
            Station::create([
                "id" => 1635,
                "prefecture_id" => 9,
                "city_id" => 465,
                "street_id" => null,
                "name" => "栃木",
                "hiragana" => "とちぎ",
                "katakana" => "トチギ",
                "katakana_half" => "ﾄﾁｷﾞ",
                "romaji" => "tochigi",
                "memo" => "",
                "latitude" => "36.371707",
                "altitude" => "139.731011",
            ]);
            
            Station::create([
                "id" => 1636,
                "prefecture_id" => 9,
                "city_id" => 465,
                "street_id" => 27560,
                "name" => "大平下",
                "hiragana" => "おおひらした",
                "katakana" => "オオヒラシタ",
                "katakana_half" => "ｵｵﾋﾗｼﾀ",
                "romaji" => "oohirashita",
                "memo" => "",
                "latitude" => "36.344321",
                "altitude" => "139.697599",
            ]);
            
            Station::create([
                "id" => 1637,
                "prefecture_id" => 9,
                "city_id" => 465,
                "street_id" => 27542,
                "name" => "岩舟",
                "hiragana" => "いわふね",
                "katakana" => "イワフネ",
                "katakana_half" => "ｲﾜﾌﾈ",
                "romaji" => "iwafune",
                "memo" => "",
                "latitude" => "36.326739",
                "altitude" => "139.657714",
            ]);
            
            Station::create([
                "id" => 1638,
                "prefecture_id" => 9,
                "city_id" => 466,
                "street_id" => null,
                "name" => "佐野",
                "hiragana" => "さの",
                "katakana" => "サノ",
                "katakana_half" => "ｻﾉ",
                "romaji" => "sano",
                "memo" => "",
                "latitude" => "36.316683",
                "altitude" => "139.578999",
            ]);
            
            Station::create([
                "id" => 1639,
                "prefecture_id" => 9,
                "city_id" => 465,
                "street_id" => 27569,
                "name" => "富田",
                "hiragana" => "とみた",
                "katakana" => "トミタ",
                "katakana_half" => "ﾄﾐﾀ",
                "romaji" => "tomita",
                "memo" => "栃木県",
                "latitude" => "36.316099",
                "altitude" => "139.528808",
            ]);
            
            Station::create([
                "id" => 1640,
                "prefecture_id" => 9,
                "city_id" => 466,
                "street_id" => 27671,
                "name" => "あしかがフラワーパーク",
                "hiragana" => "あしかがふらわーぱーく",
                "katakana" => "アシカガフラワーパーク",
                "katakana_half" => "ｱｼｶｶﾞﾌﾗﾜｰﾊﾟｰｸ",
                "romaji" => "ashikagafurawaｰpaｰku",
                "memo" => "",
                "latitude" => "36.315099",
                "altitude" => "139.518476",
            ]);
            
            Station::create([
                "id" => 1641,
                "prefecture_id" => 9,
                "city_id" => 464,
                "street_id" => null,
                "name" => "足利",
                "hiragana" => "あしかが",
                "katakana" => "アシカガ",
                "katakana_half" => "ｱｼｶｶﾞ",
                "romaji" => "ashikaga",
                "memo" => "",
                "latitude" => "36.332151",
                "altitude" => "139.456092",
            ]);
            
            Station::create([
                "id" => 1642,
                "prefecture_id" => 9,
                "city_id" => 469,
                "street_id" => null,
                "name" => "山前",
                "hiragana" => "やままえ",
                "katakana" => "ヤママエ",
                "katakana_half" => "ﾔﾏﾏｴ",
                "romaji" => "yamamae",
                "memo" => "",
                "latitude" => "36.347316",
                "altitude" => "139.411150",
            ]);
            
            Station::create([
                "id" => 1643,
                "prefecture_id" => 9,
                "city_id" => 464,
                "street_id" => 27443,
                "name" => "小俣",
                "hiragana" => "おまた",
                "katakana" => "オマタ",
                "katakana_half" => "ｵﾏﾀ",
                "romaji" => "omata",
                "memo" => "栃木県",
                "latitude" => "36.375201",
                "altitude" => "139.374041",
            ]);
            
            Station::create([
                "id" => 1644,
                "prefecture_id" => 9,
                "city_id" => 464,
                "street_id" => 27473,
                "name" => "田島",
                "hiragana" => "たじま",
                "katakana" => "タジマ",
                "katakana_half" => "ﾀｼﾞﾏ",
                "romaji" => "tajima",
                "memo" => "",
                "latitude" => "36.290546",
                "altitude" => "139.564945",
            ]);
            
            Station::create([
                "id" => 1645,
                "prefecture_id" => 9,
                "city_id" => 466,
                "street_id" => null,
                "name" => "佐野市",
                "hiragana" => "さのし",
                "katakana" => "サノシ",
                "katakana_half" => "ｻﾉｼ",
                "romaji" => "sanoshi",
                "memo" => "",
                "latitude" => "36.306045",
                "altitude" => "139.575166",
            ]);
            
            Station::create([
                "id" => 1646,
                "prefecture_id" => 9,
                "city_id" => 466,
                "street_id" => 27757,
                "name" => "堀米",
                "hiragana" => "ほりごめ",
                "katakana" => "ホリゴメ",
                "katakana_half" => "ﾎﾘｺﾞﾒ",
                "romaji" => "horigome",
                "memo" => "",
                "latitude" => "36.328293",
                "altitude" => "139.580387",
            ]);
            
            Station::create([
                "id" => 1647,
                "prefecture_id" => 9,
                "city_id" => 466,
                "street_id" => 27721,
                "name" => "吉水",
                "hiragana" => "よしみず",
                "katakana" => "ヨシミズ",
                "katakana_half" => "ﾖｼﾐｽﾞ",
                "romaji" => "yoshimizu",
                "memo" => "",
                "latitude" => "36.345208",
                "altitude" => "139.579164",
            ]);
            
            Station::create([
                "id" => 1648,
                "prefecture_id" => 9,
                "city_id" => 466,
                "street_id" => 27733,
                "name" => "田沼",
                "hiragana" => "たぬま",
                "katakana" => "タヌマ",
                "katakana_half" => "ﾀﾇﾏ",
                "romaji" => "tanuma",
                "memo" => "",
                "latitude" => "36.366927",
                "altitude" => "139.581579",
            ]);
            
            Station::create([
                "id" => 1649,
                "prefecture_id" => 9,
                "city_id" => 464,
                "street_id" => 27474,
                "name" => "多田",
                "hiragana" => "ただ",
                "katakana" => "タダ",
                "katakana_half" => "ﾀﾀﾞ",
                "romaji" => "tada",
                "memo" => "栃木県",
                "latitude" => "36.378232",
                "altitude" => "139.593217",
            ]);
            
            Station::create([
                "id" => 1650,
                "prefecture_id" => 9,
                "city_id" => 466,
                "street_id" => 27708,
                "name" => "葛生",
                "hiragana" => "くずう",
                "katakana" => "クズウ",
                "katakana_half" => "ｸｽﾞｳ",
                "romaji" => "kuzuu",
                "memo" => "",
                "latitude" => "36.398147",
                "altitude" => "139.608936",
            ]);
            
            Station::create([
                "id" => 1651,
                "prefecture_id" => 9,
                "city_id" => 465,
                "street_id" => 27632,
                "name" => "藤岡",
                "hiragana" => "ふじおか",
                "katakana" => "フジオカ",
                "katakana_half" => "ﾌｼﾞｵｶ",
                "romaji" => "fujioka",
                "memo" => "",
                "latitude" => "36.255996",
                "altitude" => "139.645857",
            ]);
            
            Station::create([
                "id" => 1652,
                "prefecture_id" => 9,
                "city_id" => 465,
                "street_id" => 27548,
                "name" => "静和",
                "hiragana" => "しずわ",
                "katakana" => "シズワ",
                "katakana_half" => "ｼｽﾞﾜ",
                "romaji" => "shizuwa",
                "memo" => "",
                "latitude" => "36.316990",
                "altitude" => "139.685128",
            ]);
            
            Station::create([
                "id" => 1653,
                "prefecture_id" => 9,
                "city_id" => 465,
                "street_id" => 27560,
                "name" => "新大平下",
                "hiragana" => "しんおおひらした",
                "katakana" => "シンオオヒラシタ",
                "katakana_half" => "ｼﾝｵｵﾋﾗｼﾀ",
                "romaji" => "shinoohirashita",
                "memo" => "",
                "latitude" => "36.338599",
                "altitude" => "139.701460",
            ]);
            
            Station::create([
                "id" => 1654,
                "prefecture_id" => 9,
                "city_id" => 465,
                "street_id" => null,
                "name" => "新栃木",
                "hiragana" => "しんとちぎ",
                "katakana" => "シントチギ",
                "katakana_half" => "ｼﾝﾄﾁｷﾞ",
                "romaji" => "shintochigi",
                "memo" => "",
                "latitude" => "36.389734",
                "altitude" => "139.742259",
            ]);
            
            Station::create([
                "id" => 1655,
                "prefecture_id" => 9,
                "city_id" => 465,
                "street_id" => 27607,
                "name" => "合戦場",
                "hiragana" => "かっせんば",
                "katakana" => "カッセンバ",
                "katakana_half" => "ｶｯｾﾝﾊﾞ",
                "romaji" => "kassenba",
                "memo" => "",
                "latitude" => "36.407953",
                "altitude" => "139.741343",
            ]);
            
            Station::create([
                "id" => 1656,
                "prefecture_id" => 9,
                "city_id" => 465,
                "street_id" => 27603,
                "name" => "家中",
                "hiragana" => "いえなか",
                "katakana" => "イエナカ",
                "katakana_half" => "ｲｴﾅｶ",
                "romaji" => "ienaka",
                "memo" => "",
                "latitude" => "36.429452",
                "altitude" => "139.747369",
            ]);
            
            Station::create([
                "id" => 1657,
                "prefecture_id" => 9,
                "city_id" => 463,
                "street_id" => 27243,
                "name" => "東武金崎",
                "hiragana" => "とうぶかなさき",
                "katakana" => "トウブカナサキ",
                "katakana_half" => "ﾄｳﾌﾞｶﾅｻｷ",
                "romaji" => "toubukanasaki",
                "memo" => "",
                "latitude" => "36.466281",
                "altitude" => "139.749395",
            ]);
            
            Station::create([
                "id" => 1658,
                "prefecture_id" => 9,
                "city_id" => 467,
                "street_id" => 27865,
                "name" => "楡木",
                "hiragana" => "にれぎ",
                "katakana" => "ニレギ",
                "katakana_half" => "ﾆﾚｷﾞ",
                "romaji" => "niregi",
                "memo" => "",
                "latitude" => "36.507166",
                "altitude" => "139.745421",
            ]);
            
            Station::create([
                "id" => 1659,
                "prefecture_id" => 9,
                "city_id" => 467,
                "street_id" => 27888,
                "name" => "樅山",
                "hiragana" => "もみやま",
                "katakana" => "モミヤマ",
                "katakana_half" => "ﾓﾐﾔﾏ",
                "romaji" => "momiyama",
                "memo" => "",
                "latitude" => "36.533246",
                "altitude" => "139.741892",
            ]);
            
            Station::create([
                "id" => 1660,
                "prefecture_id" => 9,
                "city_id" => 467,
                "street_id" => null,
                "name" => "新鹿沼",
                "hiragana" => "しんかぬま",
                "katakana" => "シンカヌマ",
                "katakana_half" => "ｼﾝｶﾇﾏ",
                "romaji" => "shinkanuma",
                "memo" => "",
                "latitude" => "36.557243",
                "altitude" => "139.744946",
            ]);
            
            Station::create([
                "id" => 1661,
                "prefecture_id" => 9,
                "city_id" => 463,
                "street_id" => 27198,
                "name" => "北鹿沼",
                "hiragana" => "きたかぬま",
                "katakana" => "キタカヌマ",
                "katakana_half" => "ｷﾀｶﾇﾏ",
                "romaji" => "kitakanuma",
                "memo" => "",
                "latitude" => "36.581325",
                "altitude" => "139.737418",
            ]);
            
            Station::create([
                "id" => 1662,
                "prefecture_id" => 9,
                "city_id" => 467,
                "street_id" => 27789,
                "name" => "板荷",
                "hiragana" => "いたが",
                "katakana" => "イタガ",
                "katakana_half" => "ｲﾀｶﾞ",
                "romaji" => "itaga",
                "memo" => "",
                "latitude" => "36.619931",
                "altitude" => "139.707780",
            ]);
            
            Station::create([
                "id" => 1663,
                "prefecture_id" => 9,
                "city_id" => 463,
                "street_id" => 27233,
                "name" => "下小代",
                "hiragana" => "しもごしろ",
                "katakana" => "シモゴシロ",
                "katakana_half" => "ｼﾓｺﾞｼﾛ",
                "romaji" => "shimogoshiro",
                "memo" => "",
                "latitude" => "36.651011",
                "altitude" => "139.713750",
            ]);
            
            Station::create([
                "id" => 1664,
                "prefecture_id" => 9,
                "city_id" => 468,
                "street_id" => 28023,
                "name" => "明神",
                "hiragana" => "みょうじん",
                "katakana" => "ミョウジン",
                "katakana_half" => "ﾐｮｳｼﾞﾝ",
                "romaji" => "myoujin",
                "memo" => "",
                "latitude" => "36.676341",
                "altitude" => "139.712221",
            ]);
            
            Station::create([
                "id" => 1665,
                "prefecture_id" => 9,
                "city_id" => 476,
                "street_id" => null,
                "name" => "下今市",
                "hiragana" => "しもいまいち",
                "katakana" => "シモイマイチ",
                "katakana_half" => "ｼﾓｲﾏｲﾁ",
                "romaji" => "shimoimaichi",
                "memo" => "",
                "latitude" => "36.725557",
                "altitude" => "139.692221",
            ]);
            
            Station::create([
                "id" => 1666,
                "prefecture_id" => 9,
                "city_id" => 477,
                "street_id" => null,
                "name" => "上今市",
                "hiragana" => "かみいまいち",
                "katakana" => "カミイマイチ",
                "katakana_half" => "ｶﾐｲﾏｲﾁ",
                "romaji" => "kamiimaichi",
                "memo" => "",
                "latitude" => "36.727779",
                "altitude" => "139.681554",
            ]);
            
            Station::create([
                "id" => 1667,
                "prefecture_id" => 9,
                "city_id" => 463,
                "street_id" => 27243,
                "name" => "東武日光",
                "hiragana" => "とうぶにっこう",
                "katakana" => "トウブニッコウ",
                "katakana_half" => "ﾄｳﾌﾞﾆｯｺｳ",
                "romaji" => "toubunikkou",
                "memo" => "",
                "latitude" => "36.747915",
                "altitude" => "139.619475",
            ]);
            
            Station::create([
                "id" => 1668,
                "prefecture_id" => 9,
                "city_id" => 466,
                "street_id" => null,
                "name" => "野州平川",
                "hiragana" => "やしゅうひらかわ",
                "katakana" => "ヤシュウヒラカワ",
                "katakana_half" => "ﾔｼｭｳﾋﾗｶﾜ",
                "romaji" => "yashuuhirakawa",
                "memo" => "",
                "latitude" => "36.401704",
                "altitude" => "139.753842",
            ]);
            
            Station::create([
                "id" => 1669,
                "prefecture_id" => 9,
                "city_id" => 466,
                "street_id" => null,
                "name" => "野州大塚",
                "hiragana" => "やしゅうおおつか",
                "katakana" => "ヤシュウオオツカ",
                "katakana_half" => "ﾔｼｭｳｵｵﾂｶ",
                "romaji" => "yashuuootsuka",
                "memo" => "",
                "latitude" => "36.408844",
                "altitude" => "139.773117",
            ]);
            
            Station::create([
                "id" => 1670,
                "prefecture_id" => 9,
                "city_id" => 482,
                "street_id" => null,
                "name" => "壬生",
                "hiragana" => "みぶ",
                "katakana" => "ミブ",
                "katakana_half" => "ﾐﾌﾞ",
                "romaji" => "mibu",
                "memo" => "",
                "latitude" => "36.422870",
                "altitude" => "139.805114",
            ]);
            
            Station::create([
                "id" => 1671,
                "prefecture_id" => 9,
                "city_id" => 482,
                "street_id" => 28818,
                "name" => "国谷",
                "hiragana" => "くにや",
                "katakana" => "クニヤ",
                "katakana_half" => "ｸﾆﾔ",
                "romaji" => "kuniya",
                "memo" => "",
                "latitude" => "36.451534",
                "altitude" => "139.823777",
            ]);
            
            Station::create([
                "id" => 1672,
                "prefecture_id" => 9,
                "city_id" => 482,
                "street_id" => 28813,
                "name" => "おもちゃのまち",
                "hiragana" => "おもちゃのまち",
                "katakana" => "オモチャノマチ",
                "katakana_half" => "ｵﾓﾁｬﾉﾏﾁ",
                "romaji" => "omochanomachi",
                "memo" => "",
                "latitude" => "36.466143",
                "altitude" => "139.829499",
            ]);
            
            Station::create([
                "id" => 1673,
                "prefecture_id" => 9,
                "city_id" => 482,
                "street_id" => 28839,
                "name" => "安塚",
                "hiragana" => "やすづか",
                "katakana" => "ヤスヅカ",
                "katakana_half" => "ﾔｽﾂﾞｶ",
                "romaji" => "yasuzuka",
                "memo" => "",
                "latitude" => "36.485447",
                "altitude" => "139.835414",
            ]);
            
            Station::create([
                "id" => 1674,
                "prefecture_id" => 9,
                "city_id" => 463,
                "street_id" => 27302,
                "name" => "西川田",
                "hiragana" => "にしかわだ",
                "katakana" => "ニシカワダ",
                "katakana_half" => "ﾆｼｶﾜﾀﾞ",
                "romaji" => "nishikawada",
                "memo" => "",
                "latitude" => "36.514749",
                "altitude" => "139.850745",
            ]);
            
            Station::create([
                "id" => 1675,
                "prefecture_id" => 9,
                "city_id" => 463,
                "street_id" => 27161,
                "name" => "江曽島",
                "hiragana" => "えそじま",
                "katakana" => "エソジマ",
                "katakana_half" => "ｴｿｼﾞﾏ",
                "romaji" => "esojima",
                "memo" => "",
                "latitude" => "36.530554",
                "altitude" => "139.860576",
            ]);
            
            Station::create([
                "id" => 1676,
                "prefecture_id" => 9,
                "city_id" => 463,
                "street_id" => 27244,
                "name" => "南宇都宮",
                "hiragana" => "みなみうつのみや",
                "katakana" => "ミナミウツノミヤ",
                "katakana_half" => "ﾐﾅﾐｳﾂﾉﾐﾔ",
                "romaji" => "minamiutsunomiya",
                "memo" => "",
                "latitude" => "36.544136",
                "altitude" => "139.872325",
            ]);
            
            Station::create([
                "id" => 1677,
                "prefecture_id" => 9,
                "city_id" => 463,
                "street_id" => 27243,
                "name" => "東武宇都宮",
                "hiragana" => "とうぶうつのみや",
                "katakana" => "トウブウツノミヤ",
                "katakana_half" => "ﾄｳﾌﾞｳﾂﾉﾐﾔ",
                "romaji" => "toubuutsunomiya",
                "memo" => "",
                "latitude" => "36.559079",
                "altitude" => "139.880407",
            ]);
            
            Station::create([
                "id" => 1678,
                "prefecture_id" => 9,
                "city_id" => 463,
                "street_id" => 27169,
                "name" => "大谷向",
                "hiragana" => "だいやむこう",
                "katakana" => "ダイヤムコウ",
                "katakana_half" => "ﾀﾞｲﾔﾑｺｳ",
                "romaji" => "daiyamukou",
                "memo" => "",
                "latitude" => "36.732501",
                "altitude" => "139.691887",
            ]);
            
            Station::create([
                "id" => 1679,
                "prefecture_id" => 9,
                "city_id" => 468,
                "street_id" => 27923,
                "name" => "大桑",
                "hiragana" => "おおくわ",
                "katakana" => "オオクワ",
                "katakana_half" => "ｵｵｸﾜ",
                "romaji" => "ookuwa",
                "memo" => "栃木県",
                "latitude" => "36.760554",
                "altitude" => "139.713328",
            ]);
            
            Station::create([
                "id" => 1680,
                "prefecture_id" => 9,
                "city_id" => 468,
                "street_id" => 27977,
                "name" => "新高徳",
                "hiragana" => "しんたかとく",
                "katakana" => "シンタカトク",
                "katakana_half" => "ｼﾝﾀｶﾄｸ",
                "romaji" => "shintakatoku",
                "memo" => "",
                "latitude" => "36.779524",
                "altitude" => "139.711105",
            ]);
            
            Station::create([
                "id" => 1681,
                "prefecture_id" => 9,
                "city_id" => 468,
                "street_id" => 27957,
                "name" => "小佐越",
                "hiragana" => "こさごえ",
                "katakana" => "コサゴエ",
                "katakana_half" => "ｺｻｺﾞｴ",
                "romaji" => "kosagoe",
                "memo" => "",
                "latitude" => "36.802300",
                "altitude" => "139.706605",
            ]);
            
            Station::create([
                "id" => 1682,
                "prefecture_id" => 9,
                "city_id" => 463,
                "street_id" => 27243,
                "name" => "東武ワールドスクウェア",
                "hiragana" => "とうぶわーるどすくうぇあ",
                "katakana" => "トウブワールドスクウェア",
                "katakana_half" => "ﾄｳﾌﾞﾜｰﾙﾄﾞｽｸｳｪｱ",
                "romaji" => "toubuwaｰrudosukuuea",
                "memo" => "",
                "latitude" => "36.808855",
                "altitude" => "139.709299",
            ]);
            
            Station::create([
                "id" => 1683,
                "prefecture_id" => 9,
                "city_id" => 468,
                "street_id" => 27939,
                "name" => "鬼怒川温泉",
                "hiragana" => "きぬがわおんせん",
                "katakana" => "キヌガワオンセン",
                "katakana_half" => "ｷﾇｶﾞﾜｵﾝｾﾝ",
                "romaji" => "kinugawaonsen",
                "memo" => "",
                "latitude" => "36.823270",
                "altitude" => "139.716659",
            ]);
            
            Station::create([
                "id" => 1684,
                "prefecture_id" => 9,
                "city_id" => 468,
                "street_id" => 27939,
                "name" => "鬼怒川公園",
                "hiragana" => "きぬがわこうえん",
                "katakana" => "キヌガワコウエン",
                "katakana_half" => "ｷﾇｶﾞﾜｺｳｴﾝ",
                "romaji" => "kinugawakouen",
                "memo" => "",
                "latitude" => "36.841407",
                "altitude" => "139.722740",
            ]);
            
            Station::create([
                "id" => 1685,
                "prefecture_id" => 9,
                "city_id" => 468,
                "street_id" => 28012,
                "name" => "新藤原",
                "hiragana" => "しんふじわら",
                "katakana" => "シンフジワラ",
                "katakana_half" => "ｼﾝﾌｼﾞﾜﾗ",
                "romaji" => "shinfujiwara",
                "memo" => "",
                "latitude" => "36.852823",
                "altitude" => "139.732794",
            ]);
            
            Station::create([
                "id" => 1686,
                "prefecture_id" => 9,
                "city_id" => 464,
                "street_id" => 27418,
                "name" => "県",
                "hiragana" => "あがた",
                "katakana" => "アガタ",
                "katakana_half" => "ｱｶﾞﾀ",
                "romaji" => "agata",
                "memo" => "",
                "latitude" => "36.290878",
                "altitude" => "139.471787",
            ]);
            
            Station::create([
                "id" => 1687,
                "prefecture_id" => 9,
                "city_id" => 464,
                "street_id" => 27502,
                "name" => "福居",
                "hiragana" => "ふくい",
                "katakana" => "フクイ",
                "katakana_half" => "ﾌｸｲ",
                "romaji" => "fukui",
                "memo" => "",
                "latitude" => "36.305488",
                "altitude" => "139.458342",
            ]);
            
            Station::create([
                "id" => 1688,
                "prefecture_id" => 9,
                "city_id" => 463,
                "street_id" => 27243,
                "name" => "東武和泉",
                "hiragana" => "とうぶいずみ",
                "katakana" => "トウブイズミ",
                "katakana_half" => "ﾄｳﾌﾞｲｽﾞﾐ",
                "romaji" => "toubuizumi",
                "memo" => "",
                "latitude" => "36.315125",
                "altitude" => "139.455315",
            ]);
            
            Station::create([
                "id" => 1689,
                "prefecture_id" => 9,
                "city_id" => 464,
                "street_id" => null,
                "name" => "足利市",
                "hiragana" => "あしかがし",
                "katakana" => "アシカガシ",
                "katakana_half" => "ｱｼｶｶﾞｼ",
                "romaji" => "ashikagashi",
                "memo" => "",
                "latitude" => "36.329484",
                "altitude" => "139.448064",
            ]);
            
            Station::create([
                "id" => 1690,
                "prefecture_id" => 9,
                "city_id" => 466,
                "street_id" => null,
                "name" => "野州山辺",
                "hiragana" => "やしゅうやまべ",
                "katakana" => "ヤシュウヤマベ",
                "katakana_half" => "ﾔｼｭｳﾔﾏﾍﾞ",
                "romaji" => "yashuuyamabe",
                "memo" => "",
                "latitude" => "36.326318",
                "altitude" => "139.431899",
            ]);
            
            Station::create([
                "id" => 1691,
                "prefecture_id" => 9,
                "city_id" => 463,
                "street_id" => null,
                "name" => "龍王峡",
                "hiragana" => "りゅうおうきょう",
                "katakana" => "リュウオウキョウ",
                "katakana_half" => "ﾘｭｳｵｳｷｮｳ",
                "romaji" => "ryuuoukyou",
                "memo" => "",
                "latitude" => "36.860849",
                "altitude" => "139.718601",
            ]);
            
            Station::create([
                "id" => 1692,
                "prefecture_id" => 9,
                "city_id" => 468,
                "street_id" => 27933,
                "name" => "川治温泉",
                "hiragana" => "かわじおんせん",
                "katakana" => "カワジオンセン",
                "katakana_half" => "ｶﾜｼﾞｵﾝｾﾝ",
                "romaji" => "kawajionsen",
                "memo" => "",
                "latitude" => "36.884208",
                "altitude" => "139.703740",
            ]);
            
            Station::create([
                "id" => 1693,
                "prefecture_id" => 9,
                "city_id" => 468,
                "street_id" => 27933,
                "name" => "川治湯元",
                "hiragana" => "かわじゆもと",
                "katakana" => "カワジユモト",
                "katakana_half" => "ｶﾜｼﾞﾕﾓﾄ",
                "romaji" => "kawajiyumoto",
                "memo" => "",
                "latitude" => "36.895179",
                "altitude" => "139.702656",
            ]);
            
            Station::create([
                "id" => 1694,
                "prefecture_id" => 9,
                "city_id" => 468,
                "street_id" => 28030,
                "name" => "湯西川温泉",
                "hiragana" => "ゆにしがわおんせん",
                "katakana" => "ユニシガワオンセン",
                "katakana_half" => "ﾕﾆｼｶﾞﾜｵﾝｾﾝ",
                "romaji" => "yunishigawaonsen",
                "memo" => "",
                "latitude" => "36.929481",
                "altitude" => "139.688600",
            ]);
            
            Station::create([
                "id" => 1695,
                "prefecture_id" => 9,
                "city_id" => 468,
                "street_id" => 27995,
                "name" => "中三依温泉",
                "hiragana" => "なかみよりおんせん",
                "katakana" => "ナカミヨリオンセン",
                "katakana_half" => "ﾅｶﾐﾖﾘｵﾝｾﾝ",
                "romaji" => "nakamiyorionsen",
                "memo" => "",
                "latitude" => "36.985141",
                "altitude" => "139.699291",
            ]);
            
            Station::create([
                "id" => 1696,
                "prefecture_id" => 9,
                "city_id" => 468,
                "street_id" => 27931,
                "name" => "上三依塩原温泉口",
                "hiragana" => "かみみよりしおばらおんせんぐち",
                "katakana" => "カミミヨリシオバラオンセングチ",
                "katakana_half" => "ｶﾐﾐﾖﾘｼｵﾊﾞﾗｵﾝｾﾝｸﾞﾁ",
                "romaji" => "kamimiyorishiobaraonsenguchi",
                "memo" => "",
                "latitude" => "37.014334",
                "altitude" => "139.727260",
            ]);
            
            Station::create([
                "id" => 1697,
                "prefecture_id" => 9,
                "city_id" => 463,
                "street_id" => null,
                "name" => "男鹿高原",
                "hiragana" => "おじかこうげん",
                "katakana" => "オジカコウゲン",
                "katakana_half" => "ｵｼﾞｶｺｳｹﾞﾝ",
                "romaji" => "ojikakougen",
                "memo" => "",
                "latitude" => "37.047858",
                "altitude" => "139.723758",
            ]);
            
            Station::create([
                "id" => 1698,
                "prefecture_id" => 9,
                "city_id" => 470,
                "street_id" => 28180,
                "name" => "久下田",
                "hiragana" => "くげた",
                "katakana" => "クゲタ",
                "katakana_half" => "ｸｹﾞﾀ",
                "romaji" => "kugeta",
                "memo" => "",
                "latitude" => "36.375989",
                "altitude" => "139.971713",
            ]);
            
            Station::create([
                "id" => 1699,
                "prefecture_id" => 9,
                "city_id" => 470,
                "street_id" => 28209,
                "name" => "寺内",
                "hiragana" => "てらうち",
                "katakana" => "テラウチ",
                "katakana_half" => "ﾃﾗｳﾁ",
                "romaji" => "terauchi",
                "memo" => "",
                "latitude" => "36.411013",
                "altitude" => "139.980155",
            ]);
            
            Station::create([
                "id" => 1700,
                "prefecture_id" => 9,
                "city_id" => 470,
                "street_id" => null,
                "name" => "真岡",
                "hiragana" => "もおか",
                "katakana" => "モオカ",
                "katakana_half" => "ﾓｵｶ",
                "romaji" => "mooka",
                "memo" => "",
                "latitude" => "36.439066",
                "altitude" => "140.002791",
            ]);
            
            Station::create([
                "id" => 1701,
                "prefecture_id" => 9,
                "city_id" => 463,
                "street_id" => 27198,
                "name" => "北真岡",
                "hiragana" => "きたもおか",
                "katakana" => "キタモオカ",
                "katakana_half" => "ｷﾀﾓｵｶ",
                "romaji" => "kitamooka",
                "memo" => "",
                "latitude" => "36.448982",
                "altitude" => "140.013984",
            ]);
            
            Station::create([
                "id" => 1702,
                "prefecture_id" => 9,
                "city_id" => 470,
                "street_id" => 28222,
                "name" => "西田井",
                "hiragana" => "にしだい",
                "katakana" => "ニシダイ",
                "katakana_half" => "ﾆｼﾀﾞｲ",
                "romaji" => "nishidai",
                "memo" => "",
                "latitude" => "36.453315",
                "altitude" => "140.048731",
            ]);
            
            Station::create([
                "id" => 1703,
                "prefecture_id" => 9,
                "city_id" => 463,
                "street_id" => 27198,
                "name" => "北山",
                "hiragana" => "きたやま",
                "katakana" => "キタヤマ",
                "katakana_half" => "ｷﾀﾔﾏ",
                "romaji" => "kitayama",
                "memo" => "栃木県",
                "latitude" => "36.455732",
                "altitude" => "140.067980",
            ]);
            
            Station::create([
                "id" => 1704,
                "prefecture_id" => 9,
                "city_id" => 478,
                "street_id" => null,
                "name" => "益子",
                "hiragana" => "ましこ",
                "katakana" => "マシコ",
                "katakana_half" => "ﾏｼｺ",
                "romaji" => "mashiko",
                "memo" => "",
                "latitude" => "36.462676",
                "altitude" => "140.088450",
            ]);
            
            Station::create([
                "id" => 1705,
                "prefecture_id" => 9,
                "city_id" => 478,
                "street_id" => 28719,
                "name" => "七井",
                "hiragana" => "なない",
                "katakana" => "ナナイ",
                "katakana_half" => "ﾅﾅｲ",
                "romaji" => "nanai",
                "memo" => "",
                "latitude" => "36.491923",
                "altitude" => "140.094281",
            ]);
            
            Station::create([
                "id" => 1706,
                "prefecture_id" => 9,
                "city_id" => 480,
                "street_id" => 28783,
                "name" => "多田羅",
                "hiragana" => "たたら",
                "katakana" => "タタラ",
                "katakana_half" => "ﾀﾀﾗ",
                "romaji" => "tatara",
                "memo" => "",
                "latitude" => "36.515865",
                "altitude" => "140.089669",
            ]);
            
            Station::create([
                "id" => 1707,
                "prefecture_id" => 9,
                "city_id" => 480,
                "street_id" => 28774,
                "name" => "市塙",
                "hiragana" => "いちはな",
                "katakana" => "イチハナ",
                "katakana_half" => "ｲﾁﾊﾅ",
                "romaji" => "ichihana",
                "memo" => "",
                "latitude" => "36.538002",
                "altitude" => "140.110334",
            ]);
            
            Station::create([
                "id" => 1708,
                "prefecture_id" => 9,
                "city_id" => 467,
                "street_id" => 27824,
                "name" => "笹原田",
                "hiragana" => "ささはらだ",
                "katakana" => "ササハラダ",
                "katakana_half" => "ｻｻﾊﾗﾀﾞ",
                "romaji" => "sasaharada",
                "memo" => "",
                "latitude" => "36.533837",
                "altitude" => "140.145331",
            ]);
            
            Station::create([
                "id" => 1709,
                "prefecture_id" => 9,
                "city_id" => 463,
                "street_id" => 27275,
                "name" => "天矢場",
                "hiragana" => "てんやば",
                "katakana" => "テンヤバ",
                "katakana_half" => "ﾃﾝﾔﾊﾞ",
                "romaji" => "tenyaba",
                "memo" => "",
                "latitude" => "36.529254",
                "altitude" => "140.156080",
            ]);
            
            Station::create([
                "id" => 1710,
                "prefecture_id" => 9,
                "city_id" => 479,
                "street_id" => null,
                "name" => "茂木",
                "hiragana" => "もてぎ",
                "katakana" => "モテギ",
                "katakana_half" => "ﾓﾃｷﾞ",
                "romaji" => "motegi",
                "memo" => "",
                "latitude" => "36.530615",
                "altitude" => "140.181466",
            ]);
            
            Station::create([
                "id" => 1711,
                "prefecture_id" => 9,
                "city_id" => 471,
                "street_id" => null,
                "name" => "原向",
                "hiragana" => "はらむこう",
                "katakana" => "ハラムコウ",
                "katakana_half" => "ﾊﾗﾑｺｳ",
                "romaji" => "haramukou",
                "memo" => "",
                "latitude" => "36.617204",
                "altitude" => "139.419832",
            ]);
            
            Station::create([
                "id" => 1712,
                "prefecture_id" => 9,
                "city_id" => 468,
                "street_id" => 27904,
                "name" => "通洞",
                "hiragana" => "つうどう",
                "katakana" => "ツウドウ",
                "katakana_half" => "ﾂｳﾄﾞｳ",
                "romaji" => "tsuudou",
                "memo" => "",
                "latitude" => "36.636980",
                "altitude" => "139.439995",
            ]);
            
            Station::create([
                "id" => 1713,
                "prefecture_id" => 9,
                "city_id" => 468,
                "street_id" => 27895,
                "name" => "足尾",
                "hiragana" => "あしお",
                "katakana" => "アシオ",
                "katakana_half" => "ｱｼｵ",
                "romaji" => "ashio",
                "memo" => "",
                "latitude" => "36.641673",
                "altitude" => "139.447966",
            ]);
            
            Station::create([
                "id" => 1714,
                "prefecture_id" => 9,
                "city_id" => 468,
                "street_id" => 27901,
                "name" => "間藤",
                "hiragana" => "まとう",
                "katakana" => "マトウ",
                "katakana_half" => "ﾏﾄｳ",
                "romaji" => "matou",
                "memo" => "",
                "latitude" => "36.652644",
                "altitude" => "139.449910",
            ]);
            
    }
}
