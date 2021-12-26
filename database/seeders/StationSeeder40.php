<?php
namespace Database\Seeders;

use App\Models\Station;
use Illuminate\Database\Seeder;

class StationSeeder40 extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        
            Station::create([
                "id" => 8025,
                "prefecture_id" => 40,
                "city_id" => 1608,
                "street_id" => null,
                "name" => "小倉",
                "hiragana" => "こくら",
                "katakana" => "コクラ",
                "katakana_half" => "ｺｸﾗ",
                "romaji" => "kokura",
                "memo" => "福岡県",
                "latitude" => "33.886930",
                "altitude" => "130.882527",
            ]);
            
            Station::create([
                "id" => 8026,
                "prefecture_id" => 40,
                "city_id" => 1613,
                "street_id" => null,
                "name" => "博多",
                "hiragana" => "はかた",
                "katakana" => "ハカタ",
                "katakana_half" => "ﾊｶﾀ",
                "romaji" => "hakata",
                "memo" => "",
                "latitude" => "33.589732",
                "altitude" => "130.420523",
            ]);
            
            Station::create([
                "id" => 8027,
                "prefecture_id" => 40,
                "city_id" => 1613,
                "street_id" => null,
                "name" => "博多南",
                "hiragana" => "はかたみなみ",
                "katakana" => "ハカタミナミ",
                "katakana_half" => "ﾊｶﾀﾐﾅﾐ",
                "romaji" => "hakataminami",
                "memo" => "",
                "latitude" => "33.517795",
                "altitude" => "130.436998",
            ]);
            
            Station::create([
                "id" => 8028,
                "prefecture_id" => 40,
                "city_id" => 1620,
                "street_id" => null,
                "name" => "久留米",
                "hiragana" => "くるめ",
                "katakana" => "クルメ",
                "katakana_half" => "ｸﾙﾒ",
                "romaji" => "kurume",
                "memo" => "",
                "latitude" => "33.319984",
                "altitude" => "130.501419",
            ]);
            
            Station::create([
                "id" => 8029,
                "prefecture_id" => 40,
                "city_id" => 1626,
                "street_id" => null,
                "name" => "筑後船小屋",
                "hiragana" => "ちくごふなごや",
                "katakana" => "チクゴフナゴヤ",
                "katakana_half" => "ﾁｸｺﾞﾌﾅｺﾞﾔ",
                "romaji" => "chikugofunagoya",
                "memo" => "",
                "latitude" => "33.177916",
                "altitude" => "130.492121",
            ]);
            
            Station::create([
                "id" => 8030,
                "prefecture_id" => 40,
                "city_id" => 1619,
                "street_id" => null,
                "name" => "新大牟田",
                "hiragana" => "しんおおむた",
                "katakana" => "シンオオムタ",
                "katakana_half" => "ｼﾝｵｵﾑﾀ",
                "romaji" => "shinoomuta",
                "memo" => "",
                "latitude" => "33.071122",
                "altitude" => "130.488792",
            ]);
            
            Station::create([
                "id" => 8031,
                "prefecture_id" => 40,
                "city_id" => 1605,
                "street_id" => null,
                "name" => "門司",
                "hiragana" => "もじ",
                "katakana" => "モジ",
                "katakana_half" => "ﾓｼﾞ",
                "romaji" => "moji",
                "memo" => "",
                "latitude" => "33.904262",
                "altitude" => "130.932411",
            ]);
            
            Station::create([
                "id" => 8032,
                "prefecture_id" => 40,
                "city_id" => 1605,
                "street_id" => null,
                "name" => "門司港",
                "hiragana" => "もじこう",
                "katakana" => "モジコウ",
                "katakana_half" => "ﾓｼﾞｺｳ",
                "romaji" => "mojikou",
                "memo" => "",
                "latitude" => "33.944092",
                "altitude" => "130.960657",
            ]);
            
            Station::create([
                "id" => 8033,
                "prefecture_id" => 40,
                "city_id" => 1605,
                "street_id" => 111583,
                "name" => "小森江",
                "hiragana" => "こもりえ",
                "katakana" => "コモリエ",
                "katakana_half" => "ｺﾓﾘｴ",
                "romaji" => "komorie",
                "memo" => "",
                "latitude" => "33.916456",
                "altitude" => "130.938994",
            ]);
            
            Station::create([
                "id" => 8034,
                "prefecture_id" => 40,
                "city_id" => 1606,
                "street_id" => 111712,
                "name" => "西小倉",
                "hiragana" => "にしこくら",
                "katakana" => "ニシコクラ",
                "katakana_half" => "ﾆｼｺｸﾗ",
                "romaji" => "nishikokura",
                "memo" => "",
                "latitude" => "33.888541",
                "altitude" => "130.874001",
            ]);
            
            Station::create([
                "id" => 8035,
                "prefecture_id" => 40,
                "city_id" => 1605,
                "street_id" => null,
                "name" => "九州工大前",
                "hiragana" => "きゅうしゅうこうだいまえ",
                "katakana" => "キュウシュウコウダイマエ",
                "katakana_half" => "ｷｭｳｼｭｳｺｳﾀﾞｲﾏｴ",
                "romaji" => "kyuushuukoudaimae",
                "memo" => "",
                "latitude" => "33.900484",
                "altitude" => "130.839836",
            ]);
            
            Station::create([
                "id" => 8036,
                "prefecture_id" => 40,
                "city_id" => 1607,
                "street_id" => null,
                "name" => "戸畑",
                "hiragana" => "とばた",
                "katakana" => "トバタ",
                "katakana_half" => "ﾄﾊﾞﾀ",
                "romaji" => "tobata",
                "memo" => "",
                "latitude" => "33.897428",
                "altitude" => "130.820949",
            ]);
            
            Station::create([
                "id" => 8037,
                "prefecture_id" => 40,
                "city_id" => 1610,
                "street_id" => 112030,
                "name" => "枝光",
                "hiragana" => "えだみつ",
                "katakana" => "エダミツ",
                "katakana_half" => "ｴﾀﾞﾐﾂ",
                "romaji" => "edamitsu",
                "memo" => "",
                "latitude" => "33.879152",
                "altitude" => "130.812950",
            ]);
            
            Station::create([
                "id" => 8038,
                "prefecture_id" => 40,
                "city_id" => 1635,
                "street_id" => 113722,
                "name" => "スペースワールド",
                "hiragana" => "すぺーすわーるど",
                "katakana" => "スペースワールド",
                "katakana_half" => "ｽﾍﾟｰｽﾜｰﾙﾄﾞ",
                "romaji" => "supeｰsuwaｰrudo",
                "memo" => "",
                "latitude" => "33.871042",
                "altitude" => "130.805951",
            ]);
            
            Station::create([
                "id" => 8039,
                "prefecture_id" => 40,
                "city_id" => 1610,
                "street_id" => null,
                "name" => "八幡",
                "hiragana" => "やはた",
                "katakana" => "ヤハタ",
                "katakana_half" => "ﾔﾊﾀ",
                "romaji" => "yahata",
                "memo" => "福岡県",
                "latitude" => "33.869097",
                "altitude" => "130.795201",
            ]);
            
            Station::create([
                "id" => 8040,
                "prefecture_id" => 40,
                "city_id" => 1611,
                "street_id" => 112138,
                "name" => "黒崎",
                "hiragana" => "くろさき",
                "katakana" => "クロサキ",
                "katakana_half" => "ｸﾛｻｷ",
                "romaji" => "kurosaki",
                "memo" => "",
                "latitude" => "33.866875",
                "altitude" => "130.766233",
            ]);
            
            Station::create([
                "id" => 8041,
                "prefecture_id" => 40,
                "city_id" => 1611,
                "street_id" => 112162,
                "name" => "陣原",
                "hiragana" => "じんのはる",
                "katakana" => "ジンノハル",
                "katakana_half" => "ｼﾞﾝﾉﾊﾙ",
                "romaji" => "jinnoharu",
                "memo" => "",
                "latitude" => "33.867985",
                "altitude" => "130.743179",
            ]);
            
            Station::create([
                "id" => 8042,
                "prefecture_id" => 40,
                "city_id" => 1611,
                "street_id" => 112115,
                "name" => "折尾",
                "hiragana" => "おりお",
                "katakana" => "オリオ",
                "katakana_half" => "ｵﾘｵ",
                "romaji" => "orio",
                "memo" => "",
                "latitude" => "33.863819",
                "altitude" => "130.713182",
            ]);
            
            Station::create([
                "id" => 8043,
                "prefecture_id" => 40,
                "city_id" => 1654,
                "street_id" => null,
                "name" => "水巻",
                "hiragana" => "みずまき",
                "katakana" => "ミズマキ",
                "katakana_half" => "ﾐｽﾞﾏｷ",
                "romaji" => "mizumaki",
                "memo" => "",
                "latitude" => "33.852597",
                "altitude" => "130.696433",
            ]);
            
            Station::create([
                "id" => 8044,
                "prefecture_id" => 40,
                "city_id" => 1656,
                "street_id" => 114473,
                "name" => "遠賀川",
                "hiragana" => "おんががわ",
                "katakana" => "オンガガワ",
                "katakana_half" => "ｵﾝｶﾞｶﾞﾜ",
                "romaji" => "ongagawa",
                "memo" => "",
                "latitude" => "33.846736",
                "altitude" => "130.673435",
            ]);
            
            Station::create([
                "id" => 8045,
                "prefecture_id" => 40,
                "city_id" => 1655,
                "street_id" => 114436,
                "name" => "海老津",
                "hiragana" => "えびつ",
                "katakana" => "エビツ",
                "katakana_half" => "ｴﾋﾞﾂ",
                "romaji" => "ebitsu",
                "memo" => "",
                "latitude" => "33.840264",
                "altitude" => "130.623579",
            ]);
            
            Station::create([
                "id" => 8046,
                "prefecture_id" => 40,
                "city_id" => 1619,
                "street_id" => 112678,
                "name" => "教育大前",
                "hiragana" => "きょういくだいまえ",
                "katakana" => "キョウイクダイマエ",
                "katakana_half" => "ｷｮｳｲｸﾀﾞｲﾏｴ",
                "romaji" => "kyouikudaimae",
                "memo" => "",
                "latitude" => "33.808267",
                "altitude" => "130.591528",
            ]);
            
            Station::create([
                "id" => 8047,
                "prefecture_id" => 40,
                "city_id" => 1635,
                "street_id" => 113716,
                "name" => "赤間",
                "hiragana" => "あかま",
                "katakana" => "アカマ",
                "katakana_half" => "ｱｶﾏ",
                "romaji" => "akama",
                "memo" => "",
                "latitude" => "33.808044",
                "altitude" => "130.569612",
            ]);
            
            Station::create([
                "id" => 8048,
                "prefecture_id" => 40,
                "city_id" => 1635,
                "street_id" => 113766,
                "name" => "東郷",
                "hiragana" => "とうごう",
                "katakana" => "トウゴウ",
                "katakana_half" => "ﾄｳｺﾞｳ",
                "romaji" => "tougou",
                "memo" => "",
                "latitude" => "33.794489",
                "altitude" => "130.528783",
            ]);
            
            Station::create([
                "id" => 8049,
                "prefecture_id" => 40,
                "city_id" => 1638,
                "street_id" => 113877,
                "name" => "東福間",
                "hiragana" => "ひがしふくま",
                "katakana" => "ヒガシフクマ",
                "katakana_half" => "ﾋｶﾞｼﾌｸﾏ",
                "romaji" => "higashifukuma",
                "memo" => "",
                "latitude" => "33.773907",
                "altitude" => "130.510674",
            ]);
            
            Station::create([
                "id" => 8050,
                "prefecture_id" => 40,
                "city_id" => 1638,
                "street_id" => 113872,
                "name" => "福間",
                "hiragana" => "ふくま",
                "katakana" => "フクマ",
                "katakana_half" => "ﾌｸﾏ",
                "romaji" => "fukuma",
                "memo" => "",
                "latitude" => "33.763881",
                "altitude" => "130.487233",
            ]);
            
            Station::create([
                "id" => 8051,
                "prefecture_id" => 40,
                "city_id" => 1637,
                "street_id" => 113839,
                "name" => "千鳥",
                "hiragana" => "ちどり",
                "katakana" => "チドリ",
                "katakana_half" => "ﾁﾄﾞﾘ",
                "romaji" => "chidori",
                "memo" => "",
                "latitude" => "33.749687",
                "altitude" => "130.476651",
            ]);
            
            Station::create([
                "id" => 8052,
                "prefecture_id" => 40,
                "city_id" => 1637,
                "street_id" => null,
                "name" => "古賀",
                "hiragana" => "こが",
                "katakana" => "コガ",
                "katakana_half" => "ｺｶﾞ",
                "romaji" => "koga",
                "memo" => "",
                "latitude" => "33.732828",
                "altitude" => "130.466902",
            ]);
            
            Station::create([
                "id" => 8053,
                "prefecture_id" => 40,
                "city_id" => 1632,
                "street_id" => 113586,
                "name" => "ししぶ",
                "hiragana" => "ししぶ",
                "katakana" => "シシブ",
                "katakana_half" => "ｼｼﾌﾞ",
                "romaji" => "shishibu",
                "memo" => "",
                "latitude" => "33.721885",
                "altitude" => "130.458487",
            ]);
            
            Station::create([
                "id" => 8054,
                "prefecture_id" => 40,
                "city_id" => 1640,
                "street_id" => null,
                "name" => "新宮中央",
                "hiragana" => "しんぐうちゅうおう",
                "katakana" => "シングウチュウオウ",
                "katakana_half" => "ｼﾝｸﾞｳﾁｭｳｵｳ",
                "romaji" => "shinguuchuuou",
                "memo" => "",
                "latitude" => "33.711608",
                "altitude" => "130.449183",
            ]);
            
            Station::create([
                "id" => 8055,
                "prefecture_id" => 40,
                "city_id" => 1612,
                "street_id" => null,
                "name" => "福工大前",
                "hiragana" => "ふっこうだいまえ",
                "katakana" => "フッコウダイマエ",
                "katakana_half" => "ﾌｯｺｳﾀﾞｲﾏｴ",
                "romaji" => "fukkoudaimae",
                "memo" => "",
                "latitude" => "33.698359",
                "altitude" => "130.440434",
            ]);
            
            Station::create([
                "id" => 8056,
                "prefecture_id" => 40,
                "city_id" => 1605,
                "street_id" => null,
                "name" => "九産大前",
                "hiragana" => "きゅうさんだいまえ",
                "katakana" => "キュウサンダイマエ",
                "katakana_half" => "ｷｭｳｻﾝﾀﾞｲﾏｴ",
                "romaji" => "kyuusandaimae",
                "memo" => "",
                "latitude" => "33.673667",
                "altitude" => "130.441101",
            ]);
            
            Station::create([
                "id" => 8057,
                "prefecture_id" => 40,
                "city_id" => 1612,
                "street_id" => 112258,
                "name" => "香椎",
                "hiragana" => "かしい",
                "katakana" => "カシイ",
                "katakana_half" => "ｶｼｲ",
                "romaji" => "kashii",
                "memo" => "",
                "latitude" => "33.659530",
                "altitude" => "130.444047",
            ]);
            
            Station::create([
                "id" => 8058,
                "prefecture_id" => 40,
                "city_id" => 1612,
                "street_id" => 112281,
                "name" => "千早",
                "hiragana" => "ちはや",
                "katakana" => "チハヤ",
                "katakana_half" => "ﾁﾊﾔ",
                "romaji" => "chihaya",
                "memo" => "",
                "latitude" => "33.649392",
                "altitude" => "130.440714",
            ]);
            
            Station::create([
                "id" => 8059,
                "prefecture_id" => 40,
                "city_id" => 1612,
                "street_id" => 112288,
                "name" => "箱崎",
                "hiragana" => "はこざき",
                "katakana" => "ハコザキ",
                "katakana_half" => "ﾊｺｻﾞｷ",
                "romaji" => "hakozaki",
                "memo" => "",
                "latitude" => "33.618007",
                "altitude" => "130.426828",
            ]);
            
            Station::create([
                "id" => 8060,
                "prefecture_id" => 40,
                "city_id" => 1613,
                "street_id" => 112390,
                "name" => "吉塚",
                "hiragana" => "よしづか",
                "katakana" => "ヨシヅカ",
                "katakana_half" => "ﾖｼﾂﾞｶ",
                "romaji" => "yoshizuka",
                "memo" => "",
                "latitude" => "33.607146",
                "altitude" => "130.423634",
            ]);
            
            Station::create([
                "id" => 8061,
                "prefecture_id" => 40,
                "city_id" => 1610,
                "street_id" => 112056,
                "name" => "竹下",
                "hiragana" => "たけした",
                "katakana" => "タケシタ",
                "katakana_half" => "ﾀｹｼﾀ",
                "romaji" => "takeshita",
                "memo" => "",
                "latitude" => "33.568568",
                "altitude" => "130.431552",
            ]);
            
            Station::create([
                "id" => 8062,
                "prefecture_id" => 40,
                "city_id" => 1619,
                "street_id" => 112691,
                "name" => "笹原",
                "hiragana" => "ささばる",
                "katakana" => "ササバル",
                "katakana_half" => "ｻｻﾊﾞﾙ",
                "romaji" => "sasabaru",
                "memo" => "",
                "latitude" => "33.552930",
                "altitude" => "130.448829",
            ]);
            
            Station::create([
                "id" => 8063,
                "prefecture_id" => 40,
                "city_id" => 1609,
                "street_id" => null,
                "name" => "南福岡",
                "hiragana" => "みなみふくおか",
                "katakana" => "ミナミフクオカ",
                "katakana_half" => "ﾐﾅﾐﾌｸｵｶ",
                "romaji" => "minamifukuoka",
                "memo" => "",
                "latitude" => "33.542043",
                "altitude" => "130.460356",
            ]);
            
            Station::create([
                "id" => 8064,
                "prefecture_id" => 40,
                "city_id" => 1633,
                "street_id" => null,
                "name" => "春日",
                "hiragana" => "かすが",
                "katakana" => "カスガ",
                "katakana_half" => "ｶｽｶﾞ",
                "romaji" => "kasuga",
                "memo" => "福岡県",
                "latitude" => "33.534627",
                "altitude" => "130.469411",
            ]);
            
            Station::create([
                "id" => 8065,
                "prefecture_id" => 40,
                "city_id" => 1634,
                "street_id" => null,
                "name" => "大野城",
                "hiragana" => "おおのじょう",
                "katakana" => "オオノジョウ",
                "katakana_half" => "ｵｵﾉｼﾞｮｳ",
                "romaji" => "oonojou",
                "memo" => "",
                "latitude" => "33.524711",
                "altitude" => "130.480272",
            ]);
            
            Station::create([
                "id" => 8066,
                "prefecture_id" => 40,
                "city_id" => 1636,
                "street_id" => 113815,
                "name" => "水城",
                "hiragana" => "みずき",
                "katakana" => "ミズキ",
                "katakana_half" => "ﾐｽﾞｷ",
                "romaji" => "mizuki",
                "memo" => "",
                "latitude" => "33.517741",
                "altitude" => "130.490022",
            ]);
            
            Station::create([
                "id" => 8067,
                "prefecture_id" => 40,
                "city_id" => 1636,
                "street_id" => 113811,
                "name" => "都府楼南",
                "hiragana" => "とふろうみなみ",
                "katakana" => "トフロウミナミ",
                "katakana_half" => "ﾄﾌﾛｳﾐﾅﾐ",
                "romaji" => "tofurouminami",
                "memo" => "",
                "latitude" => "33.503548",
                "altitude" => "130.506049",
            ]);
            
            Station::create([
                "id" => 8068,
                "prefecture_id" => 40,
                "city_id" => 1632,
                "street_id" => 113617,
                "name" => "二日市",
                "hiragana" => "ふつかいち",
                "katakana" => "フツカイチ",
                "katakana_half" => "ﾌﾂｶｲﾁ",
                "romaji" => "futsukaichi",
                "memo" => "",
                "latitude" => "33.494493",
                "altitude" => "130.518659",
            ]);
            
            Station::create([
                "id" => 8069,
                "prefecture_id" => 40,
                "city_id" => 1632,
                "street_id" => 113601,
                "name" => "天拝山",
                "hiragana" => "てんぱいざん",
                "katakana" => "テンパイザン",
                "katakana_half" => "ﾃﾝﾊﾟｲｻﾞﾝ",
                "romaji" => "tenpaizan",
                "memo" => "",
                "latitude" => "33.481495",
                "altitude" => "130.530658",
            ]);
            
            Station::create([
                "id" => 8070,
                "prefecture_id" => 40,
                "city_id" => 1612,
                "street_id" => 112293,
                "name" => "原田",
                "hiragana" => "はるだ",
                "katakana" => "ハルダ",
                "katakana_half" => "ﾊﾙﾀﾞ",
                "romaji" => "haruda",
                "memo" => "福岡県",
                "latitude" => "33.451832",
                "altitude" => "130.539326",
            ]);
            
            Station::create([
                "id" => 8071,
                "prefecture_id" => 40,
                "city_id" => 1620,
                "street_id" => 112808,
                "name" => "荒木",
                "hiragana" => "あらき",
                "katakana" => "アラキ",
                "katakana_half" => "ｱﾗｷ",
                "romaji" => "araki",
                "memo" => "",
                "latitude" => "33.277128",
                "altitude" => "130.502726",
            ]);
            
            Station::create([
                "id" => 8072,
                "prefecture_id" => 40,
                "city_id" => 1620,
                "street_id" => 112963,
                "name" => "西牟田",
                "hiragana" => "にしむた",
                "katakana" => "ニシムタ",
                "katakana_half" => "ﾆｼﾑﾀ",
                "romaji" => "nishimuta",
                "memo" => "",
                "latitude" => "33.246659",
                "altitude" => "130.501005",
            ]);
            
            Station::create([
                "id" => 8073,
                "prefecture_id" => 40,
                "city_id" => 1626,
                "street_id" => 113346,
                "name" => "羽犬塚",
                "hiragana" => "はいぬづか",
                "katakana" => "ハイヌヅカ",
                "katakana_half" => "ﾊｲﾇﾂﾞｶ",
                "romaji" => "hainuzuka",
                "memo" => "",
                "latitude" => "33.209718",
                "altitude" => "130.497674",
            ]);
            
            Station::create([
                "id" => 8074,
                "prefecture_id" => 40,
                "city_id" => 1643,
                "street_id" => 114089,
                "name" => "瀬高",
                "hiragana" => "せたか",
                "katakana" => "セタカ",
                "katakana_half" => "ｾﾀｶ",
                "romaji" => "setaka",
                "memo" => "",
                "latitude" => "33.157001",
                "altitude" => "130.485511",
            ]);
            
            Station::create([
                "id" => 8075,
                "prefecture_id" => 40,
                "city_id" => 1609,
                "street_id" => null,
                "name" => "南瀬高",
                "hiragana" => "みなみせたか",
                "katakana" => "ミナミセタカ",
                "katakana_half" => "ﾐﾅﾐｾﾀｶ",
                "romaji" => "minamisetaka",
                "memo" => "",
                "latitude" => "33.133642",
                "altitude" => "130.471263",
            ]);
            
            Station::create([
                "id" => 8076,
                "prefecture_id" => 40,
                "city_id" => 1614,
                "street_id" => 112446,
                "name" => "渡瀬",
                "hiragana" => "わたぜ",
                "katakana" => "ワタゼ",
                "katakana_half" => "ﾜﾀｾﾞ",
                "romaji" => "wataze",
                "memo" => "福岡県",
                "latitude" => "33.099590",
                "altitude" => "130.460182",
            ]);
            
            Station::create([
                "id" => 8077,
                "prefecture_id" => 40,
                "city_id" => 1605,
                "street_id" => 111647,
                "name" => "吉野",
                "hiragana" => "よしの",
                "katakana" => "ヨシノ",
                "katakana_half" => "ﾖｼﾉ",
                "romaji" => "yoshino",
                "memo" => "福岡県",
                "latitude" => "33.075704",
                "altitude" => "130.466321",
            ]);
            
            Station::create([
                "id" => 8078,
                "prefecture_id" => 40,
                "city_id" => 1607,
                "street_id" => 111753,
                "name" => "銀水",
                "hiragana" => "ぎんすい",
                "katakana" => "ギンスイ",
                "katakana_half" => "ｷﾞﾝｽｲ",
                "romaji" => "ginsui",
                "memo" => "",
                "latitude" => "33.054900",
                "altitude" => "130.460961",
            ]);
            
            Station::create([
                "id" => 8079,
                "prefecture_id" => 40,
                "city_id" => 1619,
                "street_id" => null,
                "name" => "大牟田",
                "hiragana" => "おおむた",
                "katakana" => "オオムタ",
                "katakana_half" => "ｵｵﾑﾀ",
                "romaji" => "oomuta",
                "memo" => "",
                "latitude" => "33.029459",
                "altitude" => "130.443520",
            ]);
            
            Station::create([
                "id" => 8080,
                "prefecture_id" => 40,
                "city_id" => 1612,
                "street_id" => 112272,
                "name" => "西戸崎",
                "hiragana" => "さいとざき",
                "katakana" => "サイトザキ",
                "katakana_half" => "ｻｲﾄｻﾞｷ",
                "romaji" => "saitozaki",
                "memo" => "",
                "latitude" => "33.650196",
                "altitude" => "130.357860",
            ]);
            
            Station::create([
                "id" => 8081,
                "prefecture_id" => 40,
                "city_id" => 1605,
                "street_id" => 111562,
                "name" => "海ノ中道",
                "hiragana" => "うみのなかみち",
                "katakana" => "ウミノナカミチ",
                "katakana_half" => "ｳﾐﾉﾅｶﾐﾁ",
                "romaji" => "uminonakamichi",
                "memo" => "",
                "latitude" => "33.664112",
                "altitude" => "130.361553",
            ]);
            
            Station::create([
                "id" => 8082,
                "prefecture_id" => 40,
                "city_id" => 1612,
                "street_id" => 112270,
                "name" => "雁ノ巣",
                "hiragana" => "がんのす",
                "katakana" => "ガンノス",
                "katakana_half" => "ｶﾞﾝﾉｽ",
                "romaji" => "gannosu",
                "memo" => "",
                "latitude" => "33.683776",
                "altitude" => "130.403159",
            ]);
            
            Station::create([
                "id" => 8083,
                "prefecture_id" => 40,
                "city_id" => 1612,
                "street_id" => 112286,
                "name" => "奈多",
                "hiragana" => "なた",
                "katakana" => "ナタ",
                "katakana_half" => "ﾅﾀ",
                "romaji" => "nata",
                "memo" => "",
                "latitude" => "33.686388",
                "altitude" => "130.412104",
            ]);
            
            Station::create([
                "id" => 8084,
                "prefecture_id" => 40,
                "city_id" => 1612,
                "street_id" => 112269,
                "name" => "和白",
                "hiragana" => "わじろ",
                "katakana" => "ワジロ",
                "katakana_half" => "ﾜｼﾞﾛ",
                "romaji" => "wajiro",
                "memo" => "",
                "latitude" => "33.688832",
                "altitude" => "130.429880",
            ]);
            
            Station::create([
                "id" => 8085,
                "prefecture_id" => 40,
                "city_id" => 1612,
                "street_id" => 112258,
                "name" => "香椎神宮",
                "hiragana" => "かしいじんぐう",
                "katakana" => "カシイジングウ",
                "katakana_half" => "ｶｼｲｼﾞﾝｸﾞｳ",
                "romaji" => "kashiijinguu",
                "memo" => "",
                "latitude" => "33.649614",
                "altitude" => "130.452713",
            ]);
            
            Station::create([
                "id" => 8086,
                "prefecture_id" => 40,
                "city_id" => 1612,
                "street_id" => 112299,
                "name" => "舞松原",
                "hiragana" => "まいまつばら",
                "katakana" => "マイマツバラ",
                "katakana_half" => "ﾏｲﾏﾂﾊﾞﾗ",
                "romaji" => "maimatsubara",
                "memo" => "",
                "latitude" => "33.644671",
                "altitude" => "130.455546",
            ]);
            
            Station::create([
                "id" => 8087,
                "prefecture_id" => 40,
                "city_id" => 1612,
                "street_id" => 112282,
                "name" => "土井",
                "hiragana" => "どい",
                "katakana" => "ドイ",
                "katakana_half" => "ﾄﾞｲ",
                "romaji" => "doi",
                "memo" => "",
                "latitude" => "33.635116",
                "altitude" => "130.465907",
            ]);
            
            Station::create([
                "id" => 8088,
                "prefecture_id" => 40,
                "city_id" => 1605,
                "street_id" => 111549,
                "name" => "伊賀",
                "hiragana" => "いが",
                "katakana" => "イガ",
                "katakana_half" => "ｲｶﾞ",
                "romaji" => "iga",
                "memo" => "",
                "latitude" => "33.620924",
                "altitude" => "130.473379",
            ]);
            
            Station::create([
                "id" => 8089,
                "prefecture_id" => 40,
                "city_id" => 1652,
                "street_id" => 114375,
                "name" => "長者原",
                "hiragana" => "ちょうじゃばる",
                "katakana" => "チョウジャバル",
                "katakana_half" => "ﾁｮｳｼﾞｬﾊﾞﾙ",
                "romaji" => "choujabaru",
                "memo" => "",
                "latitude" => "33.613147",
                "altitude" => "130.477435",
            ]);
            
            Station::create([
                "id" => 8090,
                "prefecture_id" => 40,
                "city_id" => 1652,
                "street_id" => 114374,
                "name" => "酒殿",
                "hiragana" => "さかど",
                "katakana" => "サカド",
                "katakana_half" => "ｻｶﾄﾞ",
                "romaji" => "sakado",
                "memo" => "",
                "latitude" => "33.602620",
                "altitude" => "130.486101",
            ]);
            
            Station::create([
                "id" => 8091,
                "prefecture_id" => 40,
                "city_id" => 1635,
                "street_id" => 113757,
                "name" => "須恵",
                "hiragana" => "すえ",
                "katakana" => "スエ",
                "katakana_half" => "ｽｴ",
                "romaji" => "sue",
                "memo" => "",
                "latitude" => "33.596926",
                "altitude" => "130.498100",
            ]);
            
            Station::create([
                "id" => 8092,
                "prefecture_id" => 40,
                "city_id" => 1635,
                "street_id" => 113757,
                "name" => "須恵中央",
                "hiragana" => "すえちゅうおう",
                "katakana" => "スエチュウオウ",
                "katakana_half" => "ｽｴﾁｭｳｵｳ",
                "romaji" => "suechuuou",
                "memo" => "",
                "latitude" => "33.587150",
                "altitude" => "130.505073",
            ]);
            
            Station::create([
                "id" => 8093,
                "prefecture_id" => 40,
                "city_id" => 1605,
                "street_id" => 111594,
                "name" => "新原",
                "hiragana" => "しんばる",
                "katakana" => "シンバル",
                "katakana_half" => "ｼﾝﾊﾞﾙ",
                "romaji" => "shinbaru",
                "memo" => "",
                "latitude" => "33.579123",
                "altitude" => "130.508767",
            ]);
            
            Station::create([
                "id" => 8094,
                "prefecture_id" => 40,
                "city_id" => 1646,
                "street_id" => null,
                "name" => "宇美",
                "hiragana" => "うみ",
                "katakana" => "ウミ",
                "katakana_half" => "ｳﾐ",
                "romaji" => "umi",
                "memo" => "",
                "latitude" => "33.569068",
                "altitude" => "130.513378",
            ]);
            
            Station::create([
                "id" => 8095,
                "prefecture_id" => 40,
                "city_id" => 1609,
                "street_id" => 111998,
                "name" => "東水巻",
                "hiragana" => "ひがしみずまき",
                "katakana" => "ヒガシミズマキ",
                "katakana_half" => "ﾋｶﾞｼﾐｽﾞﾏｷ",
                "romaji" => "higashimizumaki",
                "memo" => "",
                "latitude" => "33.840488",
                "altitude" => "130.708183",
            ]);
            
            Station::create([
                "id" => 8096,
                "prefecture_id" => 40,
                "city_id" => 1630,
                "street_id" => null,
                "name" => "中間",
                "hiragana" => "なかま",
                "katakana" => "ナカマ",
                "katakana_half" => "ﾅｶﾏ",
                "romaji" => "nakama",
                "memo" => "",
                "latitude" => "33.828267",
                "altitude" => "130.709295",
            ]);
            
            Station::create([
                "id" => 8097,
                "prefecture_id" => 40,
                "city_id" => 1660,
                "street_id" => null,
                "name" => "筑前垣生",
                "hiragana" => "ちくぜんはぶ",
                "katakana" => "チクゼンハブ",
                "katakana_half" => "ﾁｸｾﾞﾝﾊﾌﾞ",
                "romaji" => "chikuzenhabu",
                "memo" => "",
                "latitude" => "33.818546",
                "altitude" => "130.702351",
            ]);
            
            Station::create([
                "id" => 8098,
                "prefecture_id" => 40,
                "city_id" => 1657,
                "street_id" => null,
                "name" => "鞍手",
                "hiragana" => "くらて",
                "katakana" => "クラテ",
                "katakana_half" => "ｸﾗﾃ",
                "romaji" => "kurate",
                "memo" => "",
                "latitude" => "33.797714",
                "altitude" => "130.699575",
            ]);
            
            Station::create([
                "id" => 8099,
                "prefecture_id" => 40,
                "city_id" => 1660,
                "street_id" => null,
                "name" => "筑前植木",
                "hiragana" => "ちくぜんうえき",
                "katakana" => "チクゼンウエキ",
                "katakana_half" => "ﾁｸｾﾞﾝｳｴｷ",
                "romaji" => "chikuzenueki",
                "memo" => "",
                "latitude" => "33.776606",
                "altitude" => "130.708186",
            ]);
            
            Station::create([
                "id" => 8100,
                "prefecture_id" => 40,
                "city_id" => 1621,
                "street_id" => 112992,
                "name" => "新入",
                "hiragana" => "しんにゅう",
                "katakana" => "シンニュウ",
                "katakana_half" => "ｼﾝﾆｭｳ",
                "romaji" => "shinnyuu",
                "memo" => "",
                "latitude" => "33.763829",
                "altitude" => "130.713742",
            ]);
            
            Station::create([
                "id" => 8101,
                "prefecture_id" => 40,
                "city_id" => 1621,
                "street_id" => null,
                "name" => "直方",
                "hiragana" => "のおがた",
                "katakana" => "ノオガタ",
                "katakana_half" => "ﾉｵｶﾞﾀ",
                "romaji" => "noogata",
                "memo" => "",
                "latitude" => "33.747720",
                "altitude" => "130.725130",
            ]);
            
            Station::create([
                "id" => 8102,
                "prefecture_id" => 40,
                "city_id" => 1657,
                "street_id" => 114491,
                "name" => "勝野",
                "hiragana" => "かつの",
                "katakana" => "カツノ",
                "katakana_half" => "ｶﾂﾉ",
                "romaji" => "katsuno",
                "memo" => "",
                "latitude" => "33.728249",
                "altitude" => "130.715770",
            ]);
            
            Station::create([
                "id" => 8103,
                "prefecture_id" => 40,
                "city_id" => 1657,
                "street_id" => null,
                "name" => "小竹",
                "hiragana" => "こたけ",
                "katakana" => "コタケ",
                "katakana_half" => "ｺﾀｹ",
                "romaji" => "kotake",
                "memo" => "",
                "latitude" => "33.697197",
                "altitude" => "130.710134",
            ]);
            
            Station::create([
                "id" => 8104,
                "prefecture_id" => 40,
                "city_id" => 1622,
                "street_id" => 113074,
                "name" => "鯰田",
                "hiragana" => "なまずた",
                "katakana" => "ナマズタ",
                "katakana_half" => "ﾅﾏｽﾞﾀ",
                "romaji" => "namazuta",
                "memo" => "",
                "latitude" => "33.669395",
                "altitude" => "130.703191",
            ]);
            
            Station::create([
                "id" => 8105,
                "prefecture_id" => 40,
                "city_id" => 1613,
                "street_id" => 112321,
                "name" => "浦田",
                "hiragana" => "うらた",
                "katakana" => "ウラタ",
                "katakana_half" => "ｳﾗﾀ",
                "romaji" => "urata",
                "memo" => "福岡県",
                "latitude" => "33.655785",
                "altitude" => "130.699386",
            ]);
            
            Station::create([
                "id" => 8106,
                "prefecture_id" => 40,
                "city_id" => 1622,
                "street_id" => 113051,
                "name" => "新飯塚",
                "hiragana" => "しんいいづか",
                "katakana" => "シンイイヅカ",
                "katakana_half" => "ｼﾝｲｲﾂﾞｶ",
                "romaji" => "shiniizuka",
                "memo" => "",
                "latitude" => "33.644259",
                "altitude" => "130.694221",
            ]);
            
            Station::create([
                "id" => 8107,
                "prefecture_id" => 40,
                "city_id" => 1622,
                "street_id" => null,
                "name" => "飯塚",
                "hiragana" => "いいづか",
                "katakana" => "イイヅカ",
                "katakana_half" => "ｲｲﾂﾞｶ",
                "romaji" => "iizuka",
                "memo" => "",
                "latitude" => "33.628454",
                "altitude" => "130.689472",
            ]);
            
            Station::create([
                "id" => 8108,
                "prefecture_id" => 40,
                "city_id" => 1619,
                "street_id" => 112733,
                "name" => "天道",
                "hiragana" => "てんとう",
                "katakana" => "テントウ",
                "katakana_half" => "ﾃﾝﾄｳ",
                "romaji" => "tentou",
                "memo" => "",
                "latitude" => "33.605235",
                "altitude" => "130.677919",
            ]);
            
            Station::create([
                "id" => 8109,
                "prefecture_id" => 40,
                "city_id" => 1659,
                "street_id" => null,
                "name" => "桂川",
                "hiragana" => "けいせん",
                "katakana" => "ケイセン",
                "katakana_half" => "ｹｲｾﾝ",
                "romaji" => "keisen",
                "memo" => "福岡県",
                "latitude" => "33.584681",
                "altitude" => "130.662921",
            ]);
            
            Station::create([
                "id" => 8110,
                "prefecture_id" => 40,
                "city_id" => 1660,
                "street_id" => null,
                "name" => "筑前大分",
                "hiragana" => "ちくぜんだいぶ",
                "katakana" => "チクゼンダイブ",
                "katakana_half" => "ﾁｸｾﾞﾝﾀﾞｲﾌﾞ",
                "romaji" => "chikuzendaibu",
                "memo" => "",
                "latitude" => "33.590068",
                "altitude" => "130.630256",
            ]);
            
            Station::create([
                "id" => 8111,
                "prefecture_id" => 40,
                "city_id" => 1641,
                "street_id" => 113982,
                "name" => "九郎原",
                "hiragana" => "くろうばる",
                "katakana" => "クロウバル",
                "katakana_half" => "ｸﾛｳﾊﾞﾙ",
                "romaji" => "kuroubaru",
                "memo" => "",
                "latitude" => "33.592457",
                "altitude" => "130.612369",
            ]);
            
            Station::create([
                "id" => 8112,
                "prefecture_id" => 40,
                "city_id" => 1617,
                "street_id" => null,
                "name" => "城戸南蔵院前",
                "hiragana" => "きどなんぞういんまえ",
                "katakana" => "キドナンゾウインマエ",
                "katakana_half" => "ｷﾄﾞﾅﾝｿﾞｳｲﾝﾏｴ",
                "romaji" => "kidonanzouinmae",
                "memo" => "",
                "latitude" => "33.618009",
                "altitude" => "130.572094",
            ]);
            
            Station::create([
                "id" => 8113,
                "prefecture_id" => 40,
                "city_id" => 1660,
                "street_id" => null,
                "name" => "筑前山手",
                "hiragana" => "ちくぜんやまて",
                "katakana" => "チクゼンヤマテ",
                "katakana_half" => "ﾁｸｾﾞﾝﾔﾏﾃ",
                "romaji" => "chikuzenyamate",
                "memo" => "",
                "latitude" => "33.622202",
                "altitude" => "130.557011",
            ]);
            
            Station::create([
                "id" => 8114,
                "prefecture_id" => 40,
                "city_id" => 1647,
                "street_id" => null,
                "name" => "篠栗",
                "hiragana" => "ささぐり",
                "katakana" => "ササグリ",
                "katakana_half" => "ｻｻｸﾞﾘ",
                "romaji" => "sasaguri",
                "memo" => "",
                "latitude" => "33.623952",
                "altitude" => "130.523875",
            ]);
            
            Station::create([
                "id" => 8115,
                "prefecture_id" => 40,
                "city_id" => 1605,
                "street_id" => null,
                "name" => "門松",
                "hiragana" => "かどまつ",
                "katakana" => "カドマツ",
                "katakana_half" => "ｶﾄﾞﾏﾂ",
                "romaji" => "kadomatsu",
                "memo" => "",
                "latitude" => "33.620674",
                "altitude" => "130.496516",
            ]);
            
            Station::create([
                "id" => 8116,
                "prefecture_id" => 40,
                "city_id" => 1605,
                "street_id" => 111594,
                "name" => "原町",
                "hiragana" => "はるまち",
                "katakana" => "ハルマチ",
                "katakana_half" => "ﾊﾙﾏﾁ",
                "romaji" => "harumachi",
                "memo" => "",
                "latitude" => "33.611924",
                "altitude" => "130.471880",
            ]);
            
            Station::create([
                "id" => 8117,
                "prefecture_id" => 40,
                "city_id" => 1632,
                "street_id" => 113629,
                "name" => "柚須",
                "hiragana" => "ゆす",
                "katakana" => "ユス",
                "katakana_half" => "ﾕｽ",
                "romaji" => "yusu",
                "memo" => "",
                "latitude" => "33.613341",
                "altitude" => "130.444632",
            ]);
            
            Station::create([
                "id" => 8118,
                "prefecture_id" => 40,
                "city_id" => 1616,
                "street_id" => 112560,
                "name" => "姪浜",
                "hiragana" => "めいのはま",
                "katakana" => "メイノハマ",
                "katakana_half" => "ﾒｲﾉﾊﾏ",
                "romaji" => "meinohama",
                "memo" => "",
                "latitude" => "33.583564",
                "altitude" => "130.325171",
            ]);
            
            Station::create([
                "id" => 8119,
                "prefecture_id" => 40,
                "city_id" => 1616,
                "street_id" => 112529,
                "name" => "下山門",
                "hiragana" => "しもやまと",
                "katakana" => "シモヤマト",
                "katakana_half" => "ｼﾓﾔﾏﾄ",
                "romaji" => "shimoyamato",
                "memo" => "",
                "latitude" => "33.581647",
                "altitude" => "130.308006",
            ]);
            
            Station::create([
                "id" => 8120,
                "prefecture_id" => 40,
                "city_id" => 1616,
                "street_id" => 112507,
                "name" => "今宿",
                "hiragana" => "いまじゅく",
                "katakana" => "イマジュク",
                "katakana_half" => "ｲﾏｼﾞｭｸ",
                "romaji" => "imajuku",
                "memo" => "",
                "latitude" => "33.579397",
                "altitude" => "130.274065",
            ]);
            
            Station::create([
                "id" => 8121,
                "prefecture_id" => 40,
                "city_id" => 1616,
                "street_id" => 112523,
                "name" => "九大学研都市",
                "hiragana" => "きゅうだいがっけんとし",
                "katakana" => "キュウダイガッケントシ",
                "katakana_half" => "ｷｭｳﾀﾞｲｶﾞｯｹﾝﾄｼ",
                "romaji" => "kyuudaigakkentoshi",
                "memo" => "",
                "latitude" => "33.578008",
                "altitude" => "130.259621",
            ]);
            
            Station::create([
                "id" => 8122,
                "prefecture_id" => 40,
                "city_id" => 1616,
                "street_id" => 112535,
                "name" => "周船寺",
                "hiragana" => "すせんじ",
                "katakana" => "スセンジ",
                "katakana_half" => "ｽｾﾝｼﾞ",
                "romaji" => "susenji",
                "memo" => "",
                "latitude" => "33.570786",
                "altitude" => "130.246567",
            ]);
            
            Station::create([
                "id" => 8123,
                "prefecture_id" => 40,
                "city_id" => 1644,
                "street_id" => 114224,
                "name" => "波多江",
                "hiragana" => "はたえ",
                "katakana" => "ハタエ",
                "katakana_half" => "ﾊﾀｴ",
                "romaji" => "hatae",
                "memo" => "",
                "latitude" => "33.563731",
                "altitude" => "130.226319",
            ]);
            
            Station::create([
                "id" => 8124,
                "prefecture_id" => 40,
                "city_id" => 1660,
                "street_id" => null,
                "name" => "筑前前原",
                "hiragana" => "ちくぜんまえばる",
                "katakana" => "チクゼンマエバル",
                "katakana_half" => "ﾁｸｾﾞﾝﾏｴﾊﾞﾙ",
                "romaji" => "chikuzenmaebaru",
                "memo" => "",
                "latitude" => "33.556981",
                "altitude" => "130.198877",
            ]);
            
            Station::create([
                "id" => 8125,
                "prefecture_id" => 40,
                "city_id" => 1644,
                "street_id" => 114238,
                "name" => "美咲が丘",
                "hiragana" => "みさきがおか",
                "katakana" => "ミサキガオカ",
                "katakana_half" => "ﾐｻｷｶﾞｵｶ",
                "romaji" => "misakigaoka",
                "memo" => "",
                "latitude" => "33.550148",
                "altitude" => "130.185656",
            ]);
            
            Station::create([
                "id" => 8126,
                "prefecture_id" => 40,
                "city_id" => 1644,
                "street_id" => 114155,
                "name" => "加布里",
                "hiragana" => "かふり",
                "katakana" => "カフリ",
                "katakana_half" => "ｶﾌﾘ",
                "romaji" => "kafuri",
                "memo" => "",
                "latitude" => "33.543648",
                "altitude" => "130.176630",
            ]);
            
            Station::create([
                "id" => 8127,
                "prefecture_id" => 40,
                "city_id" => 1644,
                "street_id" => 114207,
                "name" => "一貴山",
                "hiragana" => "いきさん",
                "katakana" => "イキサン",
                "katakana_half" => "ｲｷｻﾝ",
                "romaji" => "ikisan",
                "memo" => "",
                "latitude" => "33.534233",
                "altitude" => "130.168214",
            ]);
            
            Station::create([
                "id" => 8128,
                "prefecture_id" => 40,
                "city_id" => 1660,
                "street_id" => null,
                "name" => "筑前深江",
                "hiragana" => "ちくぜんふかえ",
                "katakana" => "チクゼンフカエ",
                "katakana_half" => "ﾁｸｾﾞﾝﾌｶｴ",
                "romaji" => "chikuzenfukae",
                "memo" => "",
                "latitude" => "33.515484",
                "altitude" => "130.139800",
            ]);
            
            Station::create([
                "id" => 8129,
                "prefecture_id" => 40,
                "city_id" => 1619,
                "street_id" => null,
                "name" => "大入",
                "hiragana" => "だいにゅう",
                "katakana" => "ダイニュウ",
                "katakana_half" => "ﾀﾞｲﾆｭｳ",
                "romaji" => "dainyuu",
                "memo" => "",
                "latitude" => "33.508818",
                "altitude" => "130.105387",
            ]);
            
            Station::create([
                "id" => 8130,
                "prefecture_id" => 40,
                "city_id" => 1612,
                "street_id" => null,
                "name" => "福吉",
                "hiragana" => "ふくよし",
                "katakana" => "フクヨシ",
                "katakana_half" => "ﾌｸﾖｼ",
                "romaji" => "fukuyoshi",
                "memo" => "",
                "latitude" => "33.501651",
                "altitude" => "130.080361",
            ]);
            
            Station::create([
                "id" => 8131,
                "prefecture_id" => 40,
                "city_id" => 1644,
                "street_id" => 114211,
                "name" => "鹿家",
                "hiragana" => "しかか",
                "katakana" => "シカカ",
                "katakana_half" => "ｼｶｶ",
                "romaji" => "shikaka",
                "memo" => "",
                "latitude" => "33.484375",
                "altitude" => "130.048087",
            ]);
            
            Station::create([
                "id" => 8132,
                "prefecture_id" => 40,
                "city_id" => 1620,
                "street_id" => null,
                "name" => "久留米高校前",
                "hiragana" => "くるめこうこうまえ",
                "katakana" => "クルメコウコウマエ",
                "katakana_half" => "ｸﾙﾒｺｳｺｳﾏｴ",
                "romaji" => "kurumekoukoumae",
                "memo" => "",
                "latitude" => "33.298459",
                "altitude" => "130.516280",
            ]);
            
            Station::create([
                "id" => 8133,
                "prefecture_id" => 40,
                "city_id" => 1609,
                "street_id" => null,
                "name" => "南久留米",
                "hiragana" => "みなみくるめ",
                "katakana" => "ミナミクルメ",
                "katakana_half" => "ﾐﾅﾐｸﾙﾒ",
                "romaji" => "minamikurume",
                "memo" => "",
                "latitude" => "33.302764",
                "altitude" => "130.532111",
            ]);
            
            Station::create([
                "id" => 8134,
                "prefecture_id" => 40,
                "city_id" => 1620,
                "street_id" => null,
                "name" => "久留米大学前",
                "hiragana" => "くるめだいがくまえ",
                "katakana" => "クルメダイガクマエ",
                "katakana_half" => "ｸﾙﾒﾀﾞｲｶﾞｸﾏｴ",
                "romaji" => "kurumedaigakumae",
                "memo" => "",
                "latitude" => "33.311097",
                "altitude" => "130.548776",
            ]);
            
            Station::create([
                "id" => 8135,
                "prefecture_id" => 40,
                "city_id" => 1620,
                "street_id" => 112953,
                "name" => "御井",
                "hiragana" => "みい",
                "katakana" => "ミイ",
                "katakana_half" => "ﾐｲ",
                "romaji" => "mii",
                "memo" => "",
                "latitude" => "33.312625",
                "altitude" => "130.562580",
            ]);
            
            Station::create([
                "id" => 8136,
                "prefecture_id" => 40,
                "city_id" => 1620,
                "street_id" => 112882,
                "name" => "善導寺",
                "hiragana" => "ぜんどうじ",
                "katakana" => "ゼンドウジ",
                "katakana_half" => "ｾﾞﾝﾄﾞｳｼﾞ",
                "romaji" => "zendouji",
                "memo" => "",
                "latitude" => "33.320013",
                "altitude" => "130.608771",
            ]);
            
            Station::create([
                "id" => 8137,
                "prefecture_id" => 40,
                "city_id" => 1626,
                "street_id" => null,
                "name" => "筑後草野",
                "hiragana" => "ちくごくさの",
                "katakana" => "チクゴクサノ",
                "katakana_half" => "ﾁｸｺﾞｸｻﾉ",
                "romaji" => "chikugokusano",
                "memo" => "",
                "latitude" => "33.322070",
                "altitude" => "130.642101",
            ]);
            
            Station::create([
                "id" => 8138,
                "prefecture_id" => 40,
                "city_id" => 1620,
                "street_id" => 112895,
                "name" => "田主丸",
                "hiragana" => "たぬしまる",
                "katakana" => "タヌシマル",
                "katakana_half" => "ﾀﾇｼﾏﾙ",
                "romaji" => "tanushimaru",
                "memo" => "",
                "latitude" => "33.338791",
                "altitude" => "130.692596",
            ]);
            
            Station::create([
                "id" => 8139,
                "prefecture_id" => 40,
                "city_id" => 1626,
                "street_id" => null,
                "name" => "筑後吉井",
                "hiragana" => "ちくごよしい",
                "katakana" => "チクゴヨシイ",
                "katakana_half" => "ﾁｸｺﾞﾖｼｲ",
                "romaji" => "chikugoyoshii",
                "memo" => "",
                "latitude" => "33.340820",
                "altitude" => "130.752952",
            ]);
            
            Station::create([
                "id" => 8140,
                "prefecture_id" => 40,
                "city_id" => 1639,
                "street_id" => null,
                "name" => "うきは",
                "hiragana" => "うきは",
                "katakana" => "ウキハ",
                "katakana_half" => "ｳｷﾊ",
                "romaji" => "ukiha",
                "memo" => "",
                "latitude" => "33.335043",
                "altitude" => "130.789033",
            ]);
            
            Station::create([
                "id" => 8141,
                "prefecture_id" => 40,
                "city_id" => 1626,
                "street_id" => null,
                "name" => "筑後大石",
                "hiragana" => "ちくごおおいし",
                "katakana" => "チクゴオオイシ",
                "katakana_half" => "ﾁｸｺﾞｵｵｲｼ",
                "romaji" => "chikugoooishi",
                "memo" => "",
                "latitude" => "33.347126",
                "altitude" => "130.816890",
            ]);
            
            Station::create([
                "id" => 8142,
                "prefecture_id" => 40,
                "city_id" => 1609,
                "street_id" => null,
                "name" => "南小倉",
                "hiragana" => "みなみこくら",
                "katakana" => "ミナミコクラ",
                "katakana_half" => "ﾐﾅﾐｺｸﾗ",
                "romaji" => "minamikokura",
                "memo" => "",
                "latitude" => "33.869932",
                "altitude" => "130.864807",
            ]);
            
            Station::create([
                "id" => 8143,
                "prefecture_id" => 40,
                "city_id" => 1608,
                "street_id" => 111849,
                "name" => "城野",
                "hiragana" => "じょうの",
                "katakana" => "ジョウノ",
                "katakana_half" => "ｼﾞｮｳﾉ",
                "romaji" => "jouno",
                "memo" => "日豊本線",
                "latitude" => "33.857989",
                "altitude" => "130.886501",
            ]);
            
            Station::create([
                "id" => 8144,
                "prefecture_id" => 40,
                "city_id" => 1609,
                "street_id" => 111902,
                "name" => "安部山公園",
                "hiragana" => "あべやまこうえん",
                "katakana" => "アベヤマコウエン",
                "katakana_half" => "ｱﾍﾞﾔﾏｺｳｴﾝ",
                "romaji" => "abeyamakouen",
                "memo" => "",
                "latitude" => "33.843963",
                "altitude" => "130.904333",
            ]);
            
            Station::create([
                "id" => 8145,
                "prefecture_id" => 40,
                "city_id" => 1609,
                "street_id" => 111941,
                "name" => "下曽根",
                "hiragana" => "しもそね",
                "katakana" => "シモソネ",
                "katakana_half" => "ｼﾓｿﾈ",
                "romaji" => "shimosone",
                "memo" => "",
                "latitude" => "33.832159",
                "altitude" => "130.934831",
            ]);
            
            Station::create([
                "id" => 8146,
                "prefecture_id" => 40,
                "city_id" => 1609,
                "street_id" => 111925,
                "name" => "朽網",
                "hiragana" => "くさみ",
                "katakana" => "クサミ",
                "katakana_half" => "ｸｻﾐ",
                "romaji" => "kusami",
                "memo" => "",
                "latitude" => "33.807773",
                "altitude" => "130.954774",
            ]);
            
            Station::create([
                "id" => 8147,
                "prefecture_id" => 40,
                "city_id" => 1672,
                "street_id" => null,
                "name" => "苅田",
                "hiragana" => "かんだ",
                "katakana" => "カンダ",
                "katakana_half" => "ｶﾝﾀﾞ",
                "romaji" => "kanda",
                "memo" => "",
                "latitude" => "33.785221",
                "altitude" => "130.978719",
            ]);
            
            Station::create([
                "id" => 8148,
                "prefecture_id" => 40,
                "city_id" => 1672,
                "street_id" => 114678,
                "name" => "小波瀬西工大前",
                "hiragana" => "おばせにしこうだいまえ",
                "katakana" => "オバセニシコウダイマエ",
                "katakana_half" => "ｵﾊﾞｾﾆｼｺｳﾀﾞｲﾏｴ",
                "romaji" => "obasenishikoudaimae",
                "memo" => "",
                "latitude" => "33.752640",
                "altitude" => "130.971832",
            ]);
            
            Station::create([
                "id" => 8149,
                "prefecture_id" => 40,
                "city_id" => 1628,
                "street_id" => null,
                "name" => "行橋",
                "hiragana" => "ゆくはし",
                "katakana" => "ユクハシ",
                "katakana_half" => "ﾕｸﾊｼ",
                "romaji" => "yukuhashi",
                "memo" => "",
                "latitude" => "33.728282",
                "altitude" => "130.970667",
            ]);
            
            Station::create([
                "id" => 8150,
                "prefecture_id" => 40,
                "city_id" => 1609,
                "street_id" => null,
                "name" => "南行橋",
                "hiragana" => "みなみゆくはし",
                "katakana" => "ミナミユクハシ",
                "katakana_half" => "ﾐﾅﾐﾕｸﾊｼ",
                "romaji" => "minamiyukuhashi",
                "memo" => "",
                "latitude" => "33.716339",
                "altitude" => "130.981222",
            ]);
            
            Station::create([
                "id" => 8151,
                "prefecture_id" => 40,
                "city_id" => 1609,
                "street_id" => 111958,
                "name" => "新田原",
                "hiragana" => "しんでんばる",
                "katakana" => "シンデンバル",
                "katakana_half" => "ｼﾝﾃﾞﾝﾊﾞﾙ",
                "romaji" => "shindenbaru",
                "memo" => "",
                "latitude" => "33.695231",
                "altitude" => "131.008443",
            ]);
            
            Station::create([
                "id" => 8152,
                "prefecture_id" => 40,
                "city_id" => 1676,
                "street_id" => 114833,
                "name" => "築城",
                "hiragana" => "ついき",
                "katakana" => "ツイキ",
                "katakana_half" => "ﾂｲｷ",
                "romaji" => "tsuiki",
                "memo" => "",
                "latitude" => "33.673011",
                "altitude" => "131.038163",
            ]);
            
            Station::create([
                "id" => 8153,
                "prefecture_id" => 40,
                "city_id" => 1676,
                "street_id" => 114827,
                "name" => "椎田",
                "hiragana" => "しいだ",
                "katakana" => "シイダ",
                "katakana_half" => "ｼｲﾀﾞ",
                "romaji" => "shiida",
                "memo" => "",
                "latitude" => "33.653569",
                "altitude" => "131.057885",
            ]);
            
            Station::create([
                "id" => 8154,
                "prefecture_id" => 40,
                "city_id" => 1629,
                "street_id" => null,
                "name" => "豊前松江",
                "hiragana" => "ぶぜんしょうえ",
                "katakana" => "ブゼンショウエ",
                "katakana_half" => "ﾌﾞｾﾞﾝｼｮｳｴ",
                "romaji" => "buzenshoue",
                "memo" => "",
                "latitude" => "33.622462",
                "altitude" => "131.095105",
            ]);
            
            Station::create([
                "id" => 8155,
                "prefecture_id" => 40,
                "city_id" => 1629,
                "street_id" => 113462,
                "name" => "宇島",
                "hiragana" => "うのしま",
                "katakana" => "ウノシマ",
                "katakana_half" => "ｳﾉｼﾏ",
                "romaji" => "unoshima",
                "memo" => "",
                "latitude" => "33.621324",
                "altitude" => "131.126547",
            ]);
            
            Station::create([
                "id" => 8156,
                "prefecture_id" => 40,
                "city_id" => 1629,
                "street_id" => 113506,
                "name" => "三毛門",
                "hiragana" => "みけかど",
                "katakana" => "ミケカド",
                "katakana_half" => "ﾐｹｶﾄﾞ",
                "romaji" => "mikekado",
                "memo" => "",
                "latitude" => "33.614630",
                "altitude" => "131.156739",
            ]);
            
            Station::create([
                "id" => 8157,
                "prefecture_id" => 40,
                "city_id" => 1674,
                "street_id" => null,
                "name" => "吉富",
                "hiragana" => "よしとみ",
                "katakana" => "ヨシトミ",
                "katakana_half" => "ﾖｼﾄﾐ",
                "romaji" => "yoshitomi",
                "memo" => "福岡県",
                "latitude" => "33.604966",
                "altitude" => "131.173433",
            ]);
            
            Station::create([
                "id" => 8158,
                "prefecture_id" => 40,
                "city_id" => 1609,
                "street_id" => 111903,
                "name" => "石田",
                "hiragana" => "いしだ",
                "katakana" => "イシダ",
                "katakana_half" => "ｲｼﾀﾞ",
                "romaji" => "ishida",
                "memo" => "",
                "latitude" => "33.832214",
                "altitude" => "130.889251",
            ]);
            
            Station::create([
                "id" => 8159,
                "prefecture_id" => 40,
                "city_id" => 1609,
                "street_id" => 111935,
                "name" => "志井公園",
                "hiragana" => "しいこうえん",
                "katakana" => "シイコウエン",
                "katakana_half" => "ｼｲｺｳｴﾝ",
                "romaji" => "shiikouen",
                "memo" => "",
                "latitude" => "33.818132",
                "altitude" => "130.879725",
            ]);
            
            Station::create([
                "id" => 8160,
                "prefecture_id" => 40,
                "city_id" => 1609,
                "street_id" => 111934,
                "name" => "志井",
                "hiragana" => "しい",
                "katakana" => "シイ",
                "katakana_half" => "ｼｲ",
                "romaji" => "shii",
                "memo" => "日田彦山線",
                "latitude" => "33.803828",
                "altitude" => "130.874838",
            ]);
            
            Station::create([
                "id" => 8161,
                "prefecture_id" => 40,
                "city_id" => 1609,
                "street_id" => 111905,
                "name" => "石原町",
                "hiragana" => "いしはらまち",
                "katakana" => "イシハラマチ",
                "katakana_half" => "ｲｼﾊﾗﾏﾁ",
                "romaji" => "ishiharamachi",
                "memo" => "",
                "latitude" => "33.784690",
                "altitude" => "130.865894",
            ]);
            
            Station::create([
                "id" => 8162,
                "prefecture_id" => 40,
                "city_id" => 1609,
                "street_id" => 112022,
                "name" => "呼野",
                "hiragana" => "よぶの",
                "katakana" => "ヨブノ",
                "katakana_half" => "ﾖﾌﾞﾉ",
                "romaji" => "yobuno",
                "memo" => "",
                "latitude" => "33.754944",
                "altitude" => "130.861785",
            ]);
            
            Station::create([
                "id" => 8163,
                "prefecture_id" => 40,
                "city_id" => 1665,
                "street_id" => 114616,
                "name" => "採銅所",
                "hiragana" => "さいどうしょ",
                "katakana" => "サイドウショ",
                "katakana_half" => "ｻｲﾄﾞｳｼｮ",
                "romaji" => "saidousho",
                "memo" => "",
                "latitude" => "33.707337",
                "altitude" => "130.853121",
            ]);
            
            Station::create([
                "id" => 8164,
                "prefecture_id" => 40,
                "city_id" => 1665,
                "street_id" => null,
                "name" => "香春",
                "hiragana" => "かわら",
                "katakana" => "カワラ",
                "katakana_half" => "ｶﾜﾗ",
                "romaji" => "kawara",
                "memo" => "",
                "latitude" => "33.665926",
                "altitude" => "130.846846",
            ]);
            
            Station::create([
                "id" => 8165,
                "prefecture_id" => 40,
                "city_id" => 1619,
                "street_id" => 112652,
                "name" => "一本松",
                "hiragana" => "いっぽんまつ",
                "katakana" => "イッポンマツ",
                "katakana_half" => "ｲｯﾎﾟﾝﾏﾂ",
                "romaji" => "ipponmatsu",
                "memo" => "福岡県",
                "latitude" => "33.656065",
                "altitude" => "130.835681",
            ]);
            
            Station::create([
                "id" => 8166,
                "prefecture_id" => 40,
                "city_id" => 1623,
                "street_id" => null,
                "name" => "田川伊田",
                "hiragana" => "たがわいた",
                "katakana" => "タガワイタ",
                "katakana_half" => "ﾀｶﾞﾜｲﾀ",
                "romaji" => "tagawaita",
                "memo" => "",
                "latitude" => "33.642094",
                "altitude" => "130.817544",
            ]);
            
            Station::create([
                "id" => 8167,
                "prefecture_id" => 40,
                "city_id" => 1623,
                "street_id" => null,
                "name" => "田川後藤寺",
                "hiragana" => "たがわごとうじ",
                "katakana" => "タガワゴトウジ",
                "katakana_half" => "ﾀｶﾞﾜｺﾞﾄｳｼﾞ",
                "romaji" => "tagawagotouji",
                "memo" => "",
                "latitude" => "33.630234",
                "altitude" => "130.800407",
            ]);
            
            Station::create([
                "id" => 8168,
                "prefecture_id" => 40,
                "city_id" => 1668,
                "street_id" => 114652,
                "name" => "池尻",
                "hiragana" => "いけじり",
                "katakana" => "イケジリ",
                "katakana_half" => "ｲｹｼﾞﾘ",
                "romaji" => "ikejiri",
                "memo" => "",
                "latitude" => "33.613014",
                "altitude" => "130.805963",
            ]);
            
            Station::create([
                "id" => 8169,
                "prefecture_id" => 40,
                "city_id" => 1629,
                "street_id" => null,
                "name" => "豊前川崎",
                "hiragana" => "ぶぜんかわさき",
                "katakana" => "ブゼンカワサキ",
                "katakana_half" => "ﾌﾞｾﾞﾝｶﾜｻｷ",
                "romaji" => "buzenkawasaki",
                "memo" => "",
                "latitude" => "33.596905",
                "altitude" => "130.822074",
            ]);
            
            Station::create([
                "id" => 8170,
                "prefecture_id" => 40,
                "city_id" => 1611,
                "street_id" => null,
                "name" => "西添田",
                "hiragana" => "にしそえだ",
                "katakana" => "ニシソエダ",
                "katakana_half" => "ﾆｼｿｴﾀﾞ",
                "romaji" => "nishisoeda",
                "memo" => "",
                "latitude" => "33.573297",
                "altitude" => "130.847351",
            ]);
            
            Station::create([
                "id" => 8171,
                "prefecture_id" => 40,
                "city_id" => 1666,
                "street_id" => null,
                "name" => "添田",
                "hiragana" => "そえだ",
                "katakana" => "ソエダ",
                "katakana_half" => "ｿｴﾀﾞ",
                "romaji" => "soeda",
                "memo" => "",
                "latitude" => "33.567186",
                "altitude" => "130.856517",
            ]);
            
            Station::create([
                "id" => 8172,
                "prefecture_id" => 40,
                "city_id" => 1605,
                "street_id" => null,
                "name" => "歓遊舎ひこさん",
                "hiragana" => "かんゆうしゃひこさん",
                "katakana" => "カンユウシャヒコサン",
                "katakana_half" => "ｶﾝﾕｳｼｬﾋｺｻﾝ",
                "romaji" => "kanyuushahikosan",
                "memo" => "",
                "latitude" => "33.548855",
                "altitude" => "130.859573",
            ]);
            
            Station::create([
                "id" => 8173,
                "prefecture_id" => 40,
                "city_id" => 1629,
                "street_id" => null,
                "name" => "豊前桝田",
                "hiragana" => "ぶぜんますだ",
                "katakana" => "ブゼンマスダ",
                "katakana_half" => "ﾌﾞｾﾞﾝﾏｽﾀﾞ",
                "romaji" => "buzenmasuda",
                "memo" => "",
                "latitude" => "33.535801",
                "altitude" => "130.862351",
            ]);
            
            Station::create([
                "id" => 8174,
                "prefecture_id" => 40,
                "city_id" => 1666,
                "street_id" => 114626,
                "name" => "彦山",
                "hiragana" => "ひこさん",
                "katakana" => "ヒコサン",
                "katakana_half" => "ﾋｺｻﾝ",
                "romaji" => "hikosan",
                "memo" => "",
                "latitude" => "33.500805",
                "altitude" => "130.869297",
            ]);
            
            Station::create([
                "id" => 8175,
                "prefecture_id" => 40,
                "city_id" => 1660,
                "street_id" => null,
                "name" => "筑前岩屋",
                "hiragana" => "ちくぜんいわや",
                "katakana" => "チクゼンイワヤ",
                "katakana_half" => "ﾁｸｾﾞﾝｲﾜﾔ",
                "romaji" => "chikuzeniwaya",
                "memo" => "",
                "latitude" => "33.430812",
                "altitude" => "130.881521",
            ]);
            
            Station::create([
                "id" => 8176,
                "prefecture_id" => 40,
                "city_id" => 1669,
                "street_id" => 114658,
                "name" => "大行司",
                "hiragana" => "だいぎょうじ",
                "katakana" => "ダイギョウジ",
                "katakana_half" => "ﾀﾞｲｷﾞｮｳｼﾞ",
                "romaji" => "daigyouji",
                "memo" => "",
                "latitude" => "33.396871",
                "altitude" => "130.874718",
            ]);
            
            Station::create([
                "id" => 8177,
                "prefecture_id" => 40,
                "city_id" => 1661,
                "street_id" => 114561,
                "name" => "宝珠山",
                "hiragana" => "ほうしゅやま",
                "katakana" => "ホウシュヤマ",
                "katakana_half" => "ﾎｳｼｭﾔﾏ",
                "romaji" => "houshuyama",
                "memo" => "",
                "latitude" => "33.378762",
                "altitude" => "130.879496",
            ]);
            
            Station::create([
                "id" => 8178,
                "prefecture_id" => 40,
                "city_id" => 1606,
                "street_id" => null,
                "name" => "若松",
                "hiragana" => "わかまつ",
                "katakana" => "ワカマツ",
                "katakana_half" => "ﾜｶﾏﾂ",
                "romaji" => "wakamatsu",
                "memo" => "",
                "latitude" => "33.900371",
                "altitude" => "130.805505",
            ]);
            
            Station::create([
                "id" => 8179,
                "prefecture_id" => 40,
                "city_id" => 1606,
                "street_id" => 111732,
                "name" => "藤ノ木",
                "hiragana" => "ふじのき",
                "katakana" => "フジノキ",
                "katakana_half" => "ﾌｼﾞﾉｷ",
                "romaji" => "fujinoki",
                "memo" => "",
                "latitude" => "33.893261",
                "altitude" => "130.781786",
            ]);
            
            Station::create([
                "id" => 8180,
                "prefecture_id" => 40,
                "city_id" => 1605,
                "street_id" => 111557,
                "name" => "奥洞海",
                "hiragana" => "おくどうかい",
                "katakana" => "オクドウカイ",
                "katakana_half" => "ｵｸﾄﾞｳｶｲ",
                "romaji" => "okudoukai",
                "memo" => "",
                "latitude" => "33.888928",
                "altitude" => "130.764120",
            ]);
            
            Station::create([
                "id" => 8181,
                "prefecture_id" => 40,
                "city_id" => 1606,
                "street_id" => 111725,
                "name" => "二島",
                "hiragana" => "ふたじま",
                "katakana" => "フタジマ",
                "katakana_half" => "ﾌﾀｼﾞﾏ",
                "romaji" => "futajima",
                "memo" => "",
                "latitude" => "33.889316",
                "altitude" => "130.748788",
            ]);
            
            Station::create([
                "id" => 8182,
                "prefecture_id" => 40,
                "city_id" => 1611,
                "street_id" => 112227,
                "name" => "本城",
                "hiragana" => "ほんじょう",
                "katakana" => "ホンジョウ",
                "katakana_half" => "ﾎﾝｼﾞｮｳ",
                "romaji" => "honjou",
                "memo" => "",
                "latitude" => "33.874929",
                "altitude" => "130.722903",
            ]);
            
            Station::create([
                "id" => 8183,
                "prefecture_id" => 40,
                "city_id" => 1674,
                "street_id" => null,
                "name" => "上穂波",
                "hiragana" => "かみほなみ",
                "katakana" => "カミホナミ",
                "katakana_half" => "ｶﾐﾎﾅﾐ",
                "romaji" => "kamihonami",
                "memo" => "",
                "latitude" => "33.566654",
                "altitude" => "130.645034",
            ]);
            
            Station::create([
                "id" => 8184,
                "prefecture_id" => 40,
                "city_id" => 1660,
                "street_id" => null,
                "name" => "筑前内野",
                "hiragana" => "ちくぜんうちの",
                "katakana" => "チクゼンウチノ",
                "katakana_half" => "ﾁｸｾﾞﾝｳﾁﾉ",
                "romaji" => "chikuzenuchino",
                "memo" => "",
                "latitude" => "33.539602",
                "altitude" => "130.637980",
            ]);
            
            Station::create([
                "id" => 8185,
                "prefecture_id" => 40,
                "city_id" => 1660,
                "street_id" => null,
                "name" => "筑前山家",
                "hiragana" => "ちくぜんやまえ",
                "katakana" => "チクゼンヤマエ",
                "katakana_half" => "ﾁｸｾﾞﾝﾔﾏｴ",
                "romaji" => "chikuzenyamae",
                "memo" => "",
                "latitude" => "33.477302",
                "altitude" => "130.574100",
            ]);
            
            Station::create([
                "id" => 8186,
                "prefecture_id" => 40,
                "city_id" => 1623,
                "street_id" => 113132,
                "name" => "船尾",
                "hiragana" => "ふなお",
                "katakana" => "フナオ",
                "katakana_half" => "ﾌﾅｵ",
                "romaji" => "funao",
                "memo" => "福岡県",
                "latitude" => "33.630095",
                "altitude" => "130.767298",
            ]);
            
            Station::create([
                "id" => 8187,
                "prefecture_id" => 40,
                "city_id" => 1660,
                "street_id" => null,
                "name" => "筑前庄内",
                "hiragana" => "ちくぜんしょうない",
                "katakana" => "チクゼンショウナイ",
                "katakana_half" => "ﾁｸｾﾞﾝｼｮｳﾅｲ",
                "romaji" => "chikuzenshounai",
                "memo" => "",
                "latitude" => "33.616484",
                "altitude" => "130.738469",
            ]);
            
            Station::create([
                "id" => 8188,
                "prefecture_id" => 40,
                "city_id" => 1605,
                "street_id" => 111547,
                "name" => "下鴨生",
                "hiragana" => "しもかもお",
                "katakana" => "シモカモオ",
                "katakana_half" => "ｼﾓｶﾓｵ",
                "romaji" => "shimokamoo",
                "memo" => "",
                "latitude" => "33.614595",
                "altitude" => "130.728303",
            ]);
            
            Station::create([
                "id" => 8189,
                "prefecture_id" => 40,
                "city_id" => 1622,
                "street_id" => 113032,
                "name" => "上三緒",
                "hiragana" => "かみみお",
                "katakana" => "カミミオ",
                "katakana_half" => "ｶﾐﾐｵ",
                "romaji" => "kamimio",
                "memo" => "",
                "latitude" => "33.622233",
                "altitude" => "130.713804",
            ]);
            
            Station::create([
                "id" => 8190,
                "prefecture_id" => 40,
                "city_id" => 1611,
                "street_id" => null,
                "name" => "西鉄福岡",
                "hiragana" => "にしてつふくおか",
                "katakana" => "ニシテツフクオカ",
                "katakana_half" => "ﾆｼﾃﾂﾌｸｵｶ",
                "romaji" => "nishitetsufukuoka",
                "memo" => "",
                "latitude" => "33.590175",
                "altitude" => "130.398831",
            ]);
            
            Station::create([
                "id" => 8191,
                "prefecture_id" => 40,
                "city_id" => 1614,
                "street_id" => 112443,
                "name" => "薬院",
                "hiragana" => "やくいん",
                "katakana" => "ヤクイン",
                "katakana_half" => "ﾔｸｲﾝ",
                "romaji" => "yakuin",
                "memo" => "",
                "latitude" => "33.581899",
                "altitude" => "130.401832",
            ]);
            
            Station::create([
                "id" => 8192,
                "prefecture_id" => 40,
                "city_id" => 1611,
                "street_id" => null,
                "name" => "西鉄平尾",
                "hiragana" => "にしてつひらお",
                "katakana" => "ニシテツヒラオ",
                "katakana_half" => "ﾆｼﾃﾂﾋﾗｵ",
                "romaji" => "nishitetsuhirao",
                "memo" => "",
                "latitude" => "33.573622",
                "altitude" => "130.406193",
            ]);
            
            Station::create([
                "id" => 8193,
                "prefecture_id" => 40,
                "city_id" => 1615,
                "street_id" => 112464,
                "name" => "高宮",
                "hiragana" => "たかみや",
                "katakana" => "タカミヤ",
                "katakana_half" => "ﾀｶﾐﾔ",
                "romaji" => "takamiya",
                "memo" => "福岡県",
                "latitude" => "33.566983",
                "altitude" => "130.414525",
            ]);
            
            Station::create([
                "id" => 8194,
                "prefecture_id" => 40,
                "city_id" => 1615,
                "street_id" => 112452,
                "name" => "大橋",
                "hiragana" => "おおはし",
                "katakana" => "オオハシ",
                "katakana_half" => "ｵｵﾊｼ",
                "romaji" => "oohashi",
                "memo" => "福岡県",
                "latitude" => "33.558985",
                "altitude" => "130.426580",
            ]);
            
            Station::create([
                "id" => 8195,
                "prefecture_id" => 40,
                "city_id" => 1615,
                "street_id" => 112448,
                "name" => "井尻",
                "hiragana" => "いじり",
                "katakana" => "イジリ",
                "katakana_half" => "ｲｼﾞﾘ",
                "romaji" => "ijiri",
                "memo" => "",
                "latitude" => "33.552014",
                "altitude" => "130.442912",
            ]);
            
            Station::create([
                "id" => 8196,
                "prefecture_id" => 40,
                "city_id" => 1634,
                "street_id" => 113690,
                "name" => "雑餉隈",
                "hiragana" => "ざっしょのくま",
                "katakana" => "ザッショノクマ",
                "katakana_half" => "ｻﾞｯｼｮﾉｸﾏ",
                "romaji" => "zasshonokuma",
                "memo" => "",
                "latitude" => "33.547182",
                "altitude" => "130.462188",
            ]);
            
            Station::create([
                "id" => 8197,
                "prefecture_id" => 40,
                "city_id" => 1633,
                "street_id" => 113642,
                "name" => "春日原",
                "hiragana" => "かすがばる",
                "katakana" => "カスガバル",
                "katakana_half" => "ｶｽｶﾞﾊﾞﾙ",
                "romaji" => "kasugabaru",
                "memo" => "",
                "latitude" => "33.537849",
                "altitude" => "130.473188",
            ]);
            
            Station::create([
                "id" => 8198,
                "prefecture_id" => 40,
                "city_id" => 1634,
                "street_id" => 113693,
                "name" => "白木原",
                "hiragana" => "しらきばる",
                "katakana" => "シラキバル",
                "katakana_half" => "ｼﾗｷﾊﾞﾙ",
                "romaji" => "shirakibaru",
                "memo" => "",
                "latitude" => "33.528377",
                "altitude" => "130.482882",
            ]);
            
            Station::create([
                "id" => 8199,
                "prefecture_id" => 40,
                "city_id" => 1634,
                "street_id" => 113691,
                "name" => "下大利",
                "hiragana" => "しもおおり",
                "katakana" => "シモオオリ",
                "katakana_half" => "ｼﾓｵｵﾘ",
                "romaji" => "shimooori",
                "memo" => "",
                "latitude" => "33.522379",
                "altitude" => "130.489160",
            ]);
            
            Station::create([
                "id" => 8200,
                "prefecture_id" => 40,
                "city_id" => 1636,
                "street_id" => 113811,
                "name" => "都府楼前",
                "hiragana" => "とふろうまえ",
                "katakana" => "トフロウマエ",
                "katakana_half" => "ﾄﾌﾛｳﾏｴ",
                "romaji" => "tofuroumae",
                "memo" => "",
                "latitude" => "33.511908",
                "altitude" => "130.507659",
            ]);
            
            Station::create([
                "id" => 8201,
                "prefecture_id" => 40,
                "city_id" => 1611,
                "street_id" => null,
                "name" => "西鉄二日市",
                "hiragana" => "にしてつふつかいち",
                "katakana" => "ニシテツフツカイチ",
                "katakana_half" => "ﾆｼﾃﾂﾌﾂｶｲﾁ",
                "romaji" => "nishitetsufutsukaichi",
                "memo" => "",
                "latitude" => "33.502104",
                "altitude" => "130.518047",
            ]);
            
            Station::create([
                "id" => 8202,
                "prefecture_id" => 40,
                "city_id" => 1632,
                "street_id" => null,
                "name" => "紫",
                "hiragana" => "むらさき",
                "katakana" => "ムラサキ",
                "katakana_half" => "ﾑﾗｻｷ",
                "romaji" => "murasaki",
                "memo" => "",
                "latitude" => "33.496077",
                "altitude" => "130.522381",
            ]);
            
            Station::create([
                "id" => 8203,
                "prefecture_id" => 40,
                "city_id" => 1642,
                "street_id" => null,
                "name" => "朝倉街道",
                "hiragana" => "あさくらがいどう",
                "katakana" => "アサクラガイドウ",
                "katakana_half" => "ｱｻｸﾗｶﾞｲﾄﾞｳ",
                "romaji" => "asakuragaidou",
                "memo" => "",
                "latitude" => "33.484077",
                "altitude" => "130.532520",
            ]);
            
            Station::create([
                "id" => 8204,
                "prefecture_id" => 40,
                "city_id" => 1630,
                "street_id" => 113523,
                "name" => "桜台",
                "hiragana" => "さくらだい",
                "katakana" => "サクラダイ",
                "katakana_half" => "ｻｸﾗﾀﾞｲ",
                "romaji" => "sakuradai",
                "memo" => "福岡県",
                "latitude" => "33.471497",
                "altitude" => "130.542324",
            ]);
            
            Station::create([
                "id" => 8205,
                "prefecture_id" => 40,
                "city_id" => 1632,
                "street_id" => null,
                "name" => "筑紫",
                "hiragana" => "ちくし",
                "katakana" => "チクシ",
                "katakana_half" => "ﾁｸｼ",
                "romaji" => "chikushi",
                "memo" => "",
                "latitude" => "33.462830",
                "altitude" => "130.553018",
            ]);
            
            Station::create([
                "id" => 8206,
                "prefecture_id" => 40,
                "city_id" => 1631,
                "street_id" => 113561,
                "name" => "津古",
                "hiragana" => "つこ",
                "katakana" => "ツコ",
                "katakana_half" => "ﾂｺ",
                "romaji" => "tsuko",
                "memo" => "",
                "latitude" => "33.446443",
                "altitude" => "130.565518",
            ]);
            
            Station::create([
                "id" => 8207,
                "prefecture_id" => 40,
                "city_id" => 1631,
                "street_id" => 113572,
                "name" => "三国が丘",
                "hiragana" => "みくにがおか",
                "katakana" => "ミクニガオカ",
                "katakana_half" => "ﾐｸﾆｶﾞｵｶ",
                "romaji" => "mikunigaoka",
                "memo" => "福岡県",
                "latitude" => "33.437083",
                "altitude" => "130.563408",
            ]);
            
            Station::create([
                "id" => 8208,
                "prefecture_id" => 40,
                "city_id" => 1631,
                "street_id" => 113575,
                "name" => "三沢",
                "hiragana" => "みつさわ",
                "katakana" => "ミツサワ",
                "katakana_half" => "ﾐﾂｻﾜ",
                "romaji" => "mitsusawa",
                "memo" => "福岡県",
                "latitude" => "33.422724",
                "altitude" => "130.560270",
            ]);
            
            Station::create([
                "id" => 8209,
                "prefecture_id" => 40,
                "city_id" => 1631,
                "street_id" => 113552,
                "name" => "大保",
                "hiragana" => "おおほ",
                "katakana" => "オオホ",
                "katakana_half" => "ｵｵﾎ",
                "romaji" => "ooho",
                "memo" => "",
                "latitude" => "33.411364",
                "altitude" => "130.557938",
            ]);
            
            Station::create([
                "id" => 8210,
                "prefecture_id" => 40,
                "city_id" => 1611,
                "street_id" => null,
                "name" => "西鉄小郡",
                "hiragana" => "にしてつおごおり",
                "katakana" => "ニシテツオゴオリ",
                "katakana_half" => "ﾆｼﾃﾂｵｺﾞｵﾘ",
                "romaji" => "nishitetsuogoori",
                "memo" => "",
                "latitude" => "33.396143",
                "altitude" => "130.553327",
            ]);
            
            Station::create([
                "id" => 8211,
                "prefecture_id" => 40,
                "city_id" => 1613,
                "street_id" => 112328,
                "name" => "端間",
                "hiragana" => "はたま",
                "katakana" => "ハタマ",
                "katakana_half" => "ﾊﾀﾏ",
                "romaji" => "hatama",
                "memo" => "",
                "latitude" => "33.378756",
                "altitude" => "130.550773",
            ]);
            
            Station::create([
                "id" => 8212,
                "prefecture_id" => 40,
                "city_id" => 1605,
                "street_id" => null,
                "name" => "味坂",
                "hiragana" => "あじさか",
                "katakana" => "アジサカ",
                "katakana_half" => "ｱｼﾞｻｶ",
                "romaji" => "ajisaka",
                "memo" => "",
                "latitude" => "33.353009",
                "altitude" => "130.540524",
            ]);
            
            Station::create([
                "id" => 8213,
                "prefecture_id" => 40,
                "city_id" => 1610,
                "street_id" => 112084,
                "name" => "宮の陣",
                "hiragana" => "みやのじん",
                "katakana" => "ミヤノジン",
                "katakana_half" => "ﾐﾔﾉｼﾞﾝ",
                "romaji" => "miyanojin",
                "memo" => "",
                "latitude" => "33.329622",
                "altitude" => "130.530971",
            ]);
            
            Station::create([
                "id" => 8214,
                "prefecture_id" => 40,
                "city_id" => 1620,
                "street_id" => 112848,
                "name" => "櫛原",
                "hiragana" => "くしわら",
                "katakana" => "クシワラ",
                "katakana_half" => "ｸｼﾜﾗ",
                "romaji" => "kushiwara",
                "memo" => "",
                "latitude" => "33.319346",
                "altitude" => "130.524389",
            ]);
            
            Station::create([
                "id" => 8215,
                "prefecture_id" => 40,
                "city_id" => 1611,
                "street_id" => null,
                "name" => "西鉄久留米",
                "hiragana" => "にしてつくるめ",
                "katakana" => "ニシテツクルメ",
                "katakana_half" => "ﾆｼﾃﾂｸﾙﾒ",
                "romaji" => "nishitetsukurume",
                "memo" => "",
                "latitude" => "33.312208",
                "altitude" => "130.521056",
            ]);
            
            Station::create([
                "id" => 8216,
                "prefecture_id" => 40,
                "city_id" => 1615,
                "street_id" => 112477,
                "name" => "花畑",
                "hiragana" => "はなばたけ",
                "katakana" => "ハナバタケ",
                "katakana_half" => "ﾊﾅﾊﾞﾀｹ",
                "romaji" => "hanabatake",
                "memo" => "",
                "latitude" => "33.306097",
                "altitude" => "130.515168",
            ]);
            
            Station::create([
                "id" => 8217,
                "prefecture_id" => 40,
                "city_id" => 1605,
                "street_id" => null,
                "name" => "試験場前",
                "hiragana" => "しけんじょうまえ",
                "katakana" => "シケンジョウマエ",
                "katakana_half" => "ｼｹﾝｼﾞｮｳﾏｴ",
                "romaji" => "shikenjoumae",
                "memo" => "",
                "latitude" => "33.301931",
                "altitude" => "130.509891",
            ]);
            
            Station::create([
                "id" => 8218,
                "prefecture_id" => 40,
                "city_id" => 1620,
                "street_id" => 112920,
                "name" => "津福",
                "hiragana" => "つぶく",
                "katakana" => "ツブク",
                "katakana_half" => "ﾂﾌﾞｸ",
                "romaji" => "tsubuku",
                "memo" => "",
                "latitude" => "33.296653",
                "altitude" => "130.497948",
            ]);
            
            Station::create([
                "id" => 8219,
                "prefecture_id" => 40,
                "city_id" => 1620,
                "street_id" => 112975,
                "name" => "安武",
                "hiragana" => "やすたけ",
                "katakana" => "ヤスタケ",
                "katakana_half" => "ﾔｽﾀｹ",
                "romaji" => "yasutake",
                "memo" => "",
                "latitude" => "33.286377",
                "altitude" => "130.489060",
            ]);
            
            Station::create([
                "id" => 8220,
                "prefecture_id" => 40,
                "city_id" => 1620,
                "street_id" => 112886,
                "name" => "大善寺",
                "hiragana" => "だいぜんじ",
                "katakana" => "ダイゼンジ",
                "katakana_half" => "ﾀﾞｲｾﾞﾝｼﾞ",
                "romaji" => "daizenji",
                "memo" => "",
                "latitude" => "33.270822",
                "altitude" => "130.474062",
            ]);
            
            Station::create([
                "id" => 8221,
                "prefecture_id" => 40,
                "city_id" => 1663,
                "street_id" => null,
                "name" => "三潴",
                "hiragana" => "みずま",
                "katakana" => "ミズマ",
                "katakana_half" => "ﾐｽﾞﾏ",
                "romaji" => "mizuma",
                "memo" => "",
                "latitude" => "33.255935",
                "altitude" => "130.469562",
            ]);
            
            Station::create([
                "id" => 8222,
                "prefecture_id" => 40,
                "city_id" => 1626,
                "street_id" => 113346,
                "name" => "犬塚",
                "hiragana" => "いぬづか",
                "katakana" => "イヌヅカ",
                "katakana_half" => "ｲﾇﾂﾞｶ",
                "romaji" => "inuzuka",
                "memo" => "",
                "latitude" => "33.247214",
                "altitude" => "130.462953",
            ]);
            
            Station::create([
                "id" => 8223,
                "prefecture_id" => 40,
                "city_id" => 1619,
                "street_id" => null,
                "name" => "大溝",
                "hiragana" => "おおみぞ",
                "katakana" => "オオミゾ",
                "katakana_half" => "ｵｵﾐｿﾞ",
                "romaji" => "oomizo",
                "memo" => "",
                "latitude" => "33.226881",
                "altitude" => "130.449788",
            ]);
            
            Station::create([
                "id" => 8224,
                "prefecture_id" => 40,
                "city_id" => 1620,
                "street_id" => 112971,
                "name" => "八丁牟田",
                "hiragana" => "はっちょうむた",
                "katakana" => "ハッチョウムタ",
                "katakana_half" => "ﾊｯﾁｮｳﾑﾀ",
                "romaji" => "hacchoumuta",
                "memo" => "",
                "latitude" => "33.208856",
                "altitude" => "130.437623",
            ]);
            
            Station::create([
                "id" => 8225,
                "prefecture_id" => 40,
                "city_id" => 1624,
                "street_id" => 113180,
                "name" => "蒲池",
                "hiragana" => "かまち",
                "katakana" => "カマチ",
                "katakana_half" => "ｶﾏﾁ",
                "romaji" => "kamachi",
                "memo" => "福岡県",
                "latitude" => "33.189885",
                "altitude" => "130.422847",
            ]);
            
            Station::create([
                "id" => 8226,
                "prefecture_id" => 40,
                "city_id" => 1624,
                "street_id" => 113219,
                "name" => "矢加部",
                "hiragana" => "やかべ",
                "katakana" => "ヤカベ",
                "katakana_half" => "ﾔｶﾍﾞ",
                "romaji" => "yakabe",
                "memo" => "",
                "latitude" => "33.173720",
                "altitude" => "130.415988",
            ]);
            
            Station::create([
                "id" => 8227,
                "prefecture_id" => 40,
                "city_id" => 1611,
                "street_id" => null,
                "name" => "西鉄柳川",
                "hiragana" => "にしてつやながわ",
                "katakana" => "ニシテツヤナガワ",
                "katakana_half" => "ﾆｼﾃﾂﾔﾅｶﾞﾜ",
                "romaji" => "nishitetsuyanagawa",
                "memo" => "",
                "latitude" => "33.165027",
                "altitude" => "130.419293",
            ]);
            
            Station::create([
                "id" => 8228,
                "prefecture_id" => 40,
                "city_id" => 1624,
                "street_id" => 113231,
                "name" => "徳益",
                "hiragana" => "とくます",
                "katakana" => "トクマス",
                "katakana_half" => "ﾄｸﾏｽ",
                "romaji" => "tokumasu",
                "memo" => "",
                "latitude" => "33.155417",
                "altitude" => "130.426599",
            ]);
            
            Station::create([
                "id" => 8229,
                "prefecture_id" => 40,
                "city_id" => 1624,
                "street_id" => 113228,
                "name" => "塩塚",
                "hiragana" => "しおつか",
                "katakana" => "シオツカ",
                "katakana_half" => "ｼｵﾂｶ",
                "romaji" => "shiotsuka",
                "memo" => "",
                "latitude" => "33.143863",
                "altitude" => "130.430932",
            ]);
            
            Station::create([
                "id" => 8230,
                "prefecture_id" => 40,
                "city_id" => 1611,
                "street_id" => null,
                "name" => "西鉄中島",
                "hiragana" => "にしてつなかしま",
                "katakana" => "ニシテツナカシマ",
                "katakana_half" => "ﾆｼﾃﾂﾅｶｼﾏ",
                "romaji" => "nishitetsunakashima",
                "memo" => "",
                "latitude" => "33.122421",
                "altitude" => "130.440238",
            ]);
            
            Station::create([
                "id" => 8231,
                "prefecture_id" => 40,
                "city_id" => 1605,
                "street_id" => 111583,
                "name" => "江の浦",
                "hiragana" => "えのうら",
                "katakana" => "エノウラ",
                "katakana_half" => "ｴﾉｳﾗ",
                "romaji" => "enoura",
                "memo" => "",
                "latitude" => "33.108977",
                "altitude" => "130.446738",
            ]);
            
            Station::create([
                "id" => 8232,
                "prefecture_id" => 40,
                "city_id" => 1605,
                "street_id" => 111593,
                "name" => "開",
                "hiragana" => "ひらき",
                "katakana" => "ヒラキ",
                "katakana_half" => "ﾋﾗｷ",
                "romaji" => "hiraki",
                "memo" => "",
                "latitude" => "33.097285",
                "altitude" => "130.453210",
            ]);
            
            Station::create([
                "id" => 8233,
                "prefecture_id" => 40,
                "city_id" => 1611,
                "street_id" => null,
                "name" => "西鉄渡瀬",
                "hiragana" => "にしてつわたぜ",
                "katakana" => "ニシテツワタゼ",
                "katakana_half" => "ﾆｼﾃﾂﾜﾀｾﾞ",
                "romaji" => "nishitetsuwataze",
                "memo" => "",
                "latitude" => "33.086369",
                "altitude" => "130.458960",
            ]);
            
            Station::create([
                "id" => 8234,
                "prefecture_id" => 40,
                "city_id" => 1619,
                "street_id" => 112683,
                "name" => "倉永",
                "hiragana" => "くらなが",
                "katakana" => "クラナガ",
                "katakana_half" => "ｸﾗﾅｶﾞ",
                "romaji" => "kuranaga",
                "memo" => "",
                "latitude" => "33.071620",
                "altitude" => "130.463850",
            ]);
            
            Station::create([
                "id" => 8235,
                "prefecture_id" => 40,
                "city_id" => 1610,
                "street_id" => null,
                "name" => "東甘木",
                "hiragana" => "ひがしあまぎ",
                "katakana" => "ヒガシアマギ",
                "katakana_half" => "ﾋｶﾞｼｱﾏｷﾞ",
                "romaji" => "higashiamagi",
                "memo" => "",
                "latitude" => "33.062261",
                "altitude" => "130.464377",
            ]);
            
            Station::create([
                "id" => 8236,
                "prefecture_id" => 40,
                "city_id" => 1611,
                "street_id" => null,
                "name" => "西鉄銀水",
                "hiragana" => "にしてつぎんすい",
                "katakana" => "ニシテツギンスイ",
                "katakana_half" => "ﾆｼﾃﾂｷﾞﾝｽｲ",
                "romaji" => "nishitetsuginsui",
                "memo" => "",
                "latitude" => "33.050956",
                "altitude" => "130.458157",
            ]);
            
            Station::create([
                "id" => 8237,
                "prefecture_id" => 40,
                "city_id" => 1619,
                "street_id" => 112712,
                "name" => "新栄町",
                "hiragana" => "しんさかえまち",
                "katakana" => "シンサカエマチ",
                "katakana_half" => "ｼﾝｻｶｴﾏﾁ",
                "romaji" => "shinsakaemachi",
                "memo" => "福岡県",
                "latitude" => "33.038457",
                "altitude" => "130.449935",
            ]);
            
            Station::create([
                "id" => 8238,
                "prefecture_id" => 40,
                "city_id" => 1611,
                "street_id" => null,
                "name" => "西鉄五条",
                "hiragana" => "にしてつごじょう",
                "katakana" => "ニシテツゴジョウ",
                "katakana_half" => "ﾆｼﾃﾂｺﾞｼﾞｮｳ",
                "romaji" => "nishitetsugojou",
                "memo" => "",
                "latitude" => "33.511102",
                "altitude" => "130.526408",
            ]);
            
            Station::create([
                "id" => 8239,
                "prefecture_id" => 40,
                "city_id" => 1636,
                "street_id" => null,
                "name" => "太宰府",
                "hiragana" => "だざいふ",
                "katakana" => "ダザイフ",
                "katakana_half" => "ﾀﾞｻﾞｲﾌ",
                "romaji" => "dazaifu",
                "memo" => "",
                "latitude" => "33.518436",
                "altitude" => "130.531156",
            ]);
            
            Station::create([
                "id" => 8240,
                "prefecture_id" => 40,
                "city_id" => 1619,
                "street_id" => 112645,
                "name" => "甘木",
                "hiragana" => "あまぎ",
                "katakana" => "アマギ",
                "katakana_half" => "ｱﾏｷﾞ",
                "romaji" => "amagi",
                "memo" => "西鉄線",
                "latitude" => "33.418114",
                "altitude" => "130.654596",
            ]);
            
            Station::create([
                "id" => 8241,
                "prefecture_id" => 40,
                "city_id" => 1642,
                "street_id" => 114076,
                "name" => "馬田",
                "hiragana" => "まだ",
                "katakana" => "マダ",
                "katakana_half" => "ﾏﾀﾞ",
                "romaji" => "mada",
                "memo" => "",
                "latitude" => "33.407755",
                "altitude" => "130.640709",
            ]);
            
            Station::create([
                "id" => 8242,
                "prefecture_id" => 40,
                "city_id" => 1642,
                "street_id" => 114023,
                "name" => "上浦",
                "hiragana" => "かみうら",
                "katakana" => "カミウラ",
                "katakana_half" => "ｶﾐｳﾗ",
                "romaji" => "kamiura",
                "memo" => "",
                "latitude" => "33.398589",
                "altitude" => "130.637098",
            ]);
            
            Station::create([
                "id" => 8243,
                "prefecture_id" => 40,
                "city_id" => 1643,
                "street_id" => 114106,
                "name" => "本郷",
                "hiragana" => "ほんごう",
                "katakana" => "ホンゴウ",
                "katakana_half" => "ﾎﾝｺﾞｳ",
                "romaji" => "hongou",
                "memo" => "福岡県",
                "latitude" => "33.384980",
                "altitude" => "130.629044",
            ]);
            
            Station::create([
                "id" => 8244,
                "prefecture_id" => 40,
                "city_id" => 1619,
                "street_id" => null,
                "name" => "大堰",
                "hiragana" => "おおぜき",
                "katakana" => "オオゼキ",
                "katakana_half" => "ｵｵｾﾞｷ",
                "romaji" => "oozeki",
                "memo" => "",
                "latitude" => "33.372203",
                "altitude" => "130.624045",
            ]);
            
            Station::create([
                "id" => 8245,
                "prefecture_id" => 40,
                "city_id" => 1620,
                "street_id" => 112829,
                "name" => "金島",
                "hiragana" => "かねしま",
                "katakana" => "カネシマ",
                "katakana_half" => "ｶﾈｼﾏ",
                "romaji" => "kaneshima",
                "memo" => "福岡県",
                "latitude" => "33.353233",
                "altitude" => "130.623046",
            ]);
            
            Station::create([
                "id" => 8246,
                "prefecture_id" => 40,
                "city_id" => 1620,
                "street_id" => 112826,
                "name" => "大城",
                "hiragana" => "おおき",
                "katakana" => "オオキ",
                "katakana_half" => "ｵｵｷ",
                "romaji" => "ooki",
                "memo" => "",
                "latitude" => "33.350982",
                "altitude" => "130.607936",
            ]);
            
            Station::create([
                "id" => 8247,
                "prefecture_id" => 40,
                "city_id" => 1620,
                "street_id" => 112822,
                "name" => "北野",
                "hiragana" => "きたの",
                "katakana" => "キタノ",
                "katakana_half" => "ｷﾀﾉ",
                "romaji" => "kitano",
                "memo" => "福岡県",
                "latitude" => "33.345400",
                "altitude" => "130.582743",
            ]);
            
            Station::create([
                "id" => 8248,
                "prefecture_id" => 40,
                "city_id" => 1637,
                "street_id" => null,
                "name" => "古賀茶屋",
                "hiragana" => "こがんちゃや",
                "katakana" => "コガンチャヤ",
                "katakana_half" => "ｺｶﾞﾝﾁｬﾔ",
                "romaji" => "koganchaya",
                "memo" => "",
                "latitude" => "33.343594",
                "altitude" => "130.566829",
            ]);
            
            Station::create([
                "id" => 8249,
                "prefecture_id" => 40,
                "city_id" => 1611,
                "street_id" => 112092,
                "name" => "学校前",
                "hiragana" => "がっこうまえ",
                "katakana" => "ガッコウマエ",
                "katakana_half" => "ｶﾞｯｺｳﾏｴ",
                "romaji" => "gakkoumae",
                "memo" => "福岡県",
                "latitude" => "33.336372",
                "altitude" => "130.547386",
            ]);
            
            Station::create([
                "id" => 8250,
                "prefecture_id" => 40,
                "city_id" => 1620,
                "street_id" => 112970,
                "name" => "五郎丸",
                "hiragana" => "ごろうまる",
                "katakana" => "ゴロウマル",
                "katakana_half" => "ｺﾞﾛｳﾏﾙ",
                "romaji" => "goroumaru",
                "memo" => "",
                "latitude" => "33.330372",
                "altitude" => "130.539914",
            ]);
            
            Station::create([
                "id" => 8251,
                "prefecture_id" => 40,
                "city_id" => 1612,
                "street_id" => 112257,
                "name" => "貝塚",
                "hiragana" => "かいづか",
                "katakana" => "カイヅカ",
                "katakana_half" => "ｶｲﾂﾞｶ",
                "romaji" => "kaizuka",
                "memo" => "福岡県",
                "latitude" => "33.631116",
                "altitude" => "130.425355",
            ]);
            
            Station::create([
                "id" => 8252,
                "prefecture_id" => 40,
                "city_id" => 1612,
                "street_id" => 112285,
                "name" => "名島",
                "hiragana" => "なじま",
                "katakana" => "ナジマ",
                "katakana_half" => "ﾅｼﾞﾏ",
                "romaji" => "najima",
                "memo" => "",
                "latitude" => "33.642726",
                "altitude" => "130.431826",
            ]);
            
            Station::create([
                "id" => 8253,
                "prefecture_id" => 40,
                "city_id" => 1611,
                "street_id" => null,
                "name" => "西鉄千早",
                "hiragana" => "にしてつちはや",
                "katakana" => "ニシテツチハヤ",
                "katakana_half" => "ﾆｼﾃﾂﾁﾊﾔ",
                "romaji" => "nishitetsuchihaya",
                "memo" => "",
                "latitude" => "33.649670",
                "altitude" => "130.440436",
            ]);
            
            Station::create([
                "id" => 8254,
                "prefecture_id" => 40,
                "city_id" => 1612,
                "street_id" => 112258,
                "name" => "香椎宮前",
                "hiragana" => "かしいみやまえ",
                "katakana" => "カシイミヤマエ",
                "katakana_half" => "ｶｼｲﾐﾔﾏｴ",
                "romaji" => "kashiimiyamae",
                "memo" => "",
                "latitude" => "33.654670",
                "altitude" => "130.442380",
            ]);
            
            Station::create([
                "id" => 8255,
                "prefecture_id" => 40,
                "city_id" => 1611,
                "street_id" => null,
                "name" => "西鉄香椎",
                "hiragana" => "にしてつかしい",
                "katakana" => "ニシテツカシイ",
                "katakana_half" => "ﾆｼﾃﾂｶｼｲ",
                "romaji" => "nishitetsukashii",
                "memo" => "",
                "latitude" => "33.659391",
                "altitude" => "130.441825",
            ]);
            
            Station::create([
                "id" => 8256,
                "prefecture_id" => 40,
                "city_id" => 1612,
                "street_id" => 112258,
                "name" => "香椎花園前",
                "hiragana" => "かしいかえんまえ",
                "katakana" => "カシイカエンマエ",
                "katakana_half" => "ｶｼｲｶｴﾝﾏｴ",
                "romaji" => "kashiikaenmae",
                "memo" => "",
                "latitude" => "33.669668",
                "altitude" => "130.434546",
            ]);
            
            Station::create([
                "id" => 8257,
                "prefecture_id" => 40,
                "city_id" => 1606,
                "street_id" => 111676,
                "name" => "唐の原",
                "hiragana" => "とうのはる",
                "katakana" => "トウノハル",
                "katakana_half" => "ﾄｳﾉﾊﾙ",
                "romaji" => "tounoharu",
                "memo" => "",
                "latitude" => "33.679972",
                "altitude" => "130.434380",
            ]);
            
            Station::create([
                "id" => 8258,
                "prefecture_id" => 40,
                "city_id" => 1612,
                "street_id" => 112307,
                "name" => "三苫",
                "hiragana" => "みとま",
                "katakana" => "ミトマ",
                "katakana_half" => "ﾐﾄﾏ",
                "romaji" => "mitoma",
                "memo" => "",
                "latitude" => "33.702497",
                "altitude" => "130.422546",
            ]);
            
            Station::create([
                "id" => 8259,
                "prefecture_id" => 40,
                "city_id" => 1611,
                "street_id" => null,
                "name" => "西鉄新宮",
                "hiragana" => "にしてつしんぐう",
                "katakana" => "ニシテツシングウ",
                "katakana_half" => "ﾆｼﾃﾂｼﾝｸﾞｳ",
                "romaji" => "nishitetsushinguu",
                "memo" => "",
                "latitude" => "33.713912",
                "altitude" => "130.436600",
            ]);
            
            Station::create([
                "id" => 8260,
                "prefecture_id" => 40,
                "city_id" => 1611,
                "street_id" => 112138,
                "name" => "黒崎駅前",
                "hiragana" => "くろさきえきまえ",
                "katakana" => "クロサキエキマエ",
                "katakana_half" => "ｸﾛｻｷｴｷﾏｴ",
                "romaji" => "kurosakiekimae",
                "memo" => "",
                "latitude" => "33.866597",
                "altitude" => "130.765122",
            ]);
            
            Station::create([
                "id" => 8261,
                "prefecture_id" => 40,
                "city_id" => 1611,
                "street_id" => null,
                "name" => "西黒崎",
                "hiragana" => "にしくろさき",
                "katakana" => "ニシクロサキ",
                "katakana_half" => "ﾆｼｸﾛｻｷ",
                "romaji" => "nishikurosaki",
                "memo" => "",
                "latitude" => "33.866458",
                "altitude" => "130.762483",
            ]);
            
            Station::create([
                "id" => 8262,
                "prefecture_id" => 40,
                "city_id" => 1611,
                "street_id" => 112137,
                "name" => "熊西",
                "hiragana" => "くまにし",
                "katakana" => "クマニシ",
                "katakana_half" => "ｸﾏﾆｼ",
                "romaji" => "kumanishi",
                "memo" => "",
                "latitude" => "33.865985",
                "altitude" => "130.758066",
            ]);
            
            Station::create([
                "id" => 8263,
                "prefecture_id" => 40,
                "city_id" => 1611,
                "street_id" => 112199,
                "name" => "萩原",
                "hiragana" => "はぎわら",
                "katakana" => "ハギワラ",
                "katakana_half" => "ﾊｷﾞﾜﾗ",
                "romaji" => "hagiwara",
                "memo" => "福岡県",
                "latitude" => "33.861042",
                "altitude" => "130.749290",
            ]);
            
            Station::create([
                "id" => 8264,
                "prefecture_id" => 40,
                "city_id" => 1611,
                "street_id" => 112096,
                "name" => "穴生",
                "hiragana" => "あのお",
                "katakana" => "アノオ",
                "katakana_half" => "ｱﾉｵ",
                "romaji" => "anoo",
                "memo" => "",
                "latitude" => "33.857153",
                "altitude" => "130.744846",
            ]);
            
            Station::create([
                "id" => 8265,
                "prefecture_id" => 40,
                "city_id" => 1611,
                "street_id" => 112244,
                "name" => "森下",
                "hiragana" => "もりした",
                "katakana" => "モリシタ",
                "katakana_half" => "ﾓﾘｼﾀ",
                "romaji" => "morishita",
                "memo" => "福岡県",
                "latitude" => "33.853903",
                "altitude" => "130.740958",
            ]);
            
            Station::create([
                "id" => 8266,
                "prefecture_id" => 40,
                "city_id" => 1605,
                "street_id" => 111552,
                "name" => "今池",
                "hiragana" => "いまいけ",
                "katakana" => "イマイケ",
                "katakana_half" => "ｲﾏｲｹ",
                "romaji" => "imaike",
                "memo" => "福岡県",
                "latitude" => "33.845543",
                "altitude" => "130.739791",
            ]);
            
            Station::create([
                "id" => 8267,
                "prefecture_id" => 40,
                "city_id" => 1611,
                "street_id" => 112104,
                "name" => "永犬丸",
                "hiragana" => "えいのまる",
                "katakana" => "エイノマル",
                "katakana_half" => "ｴｲﾉﾏﾙ",
                "romaji" => "einomaru",
                "memo" => "",
                "latitude" => "33.839043",
                "altitude" => "130.738014",
            ]);
            
            Station::create([
                "id" => 8268,
                "prefecture_id" => 40,
                "city_id" => 1611,
                "street_id" => 112155,
                "name" => "三ケ森",
                "hiragana" => "さんがもり",
                "katakana" => "サンガモリ",
                "katakana_half" => "ｻﾝｶﾞﾓﾘ",
                "romaji" => "sangamori",
                "memo" => "",
                "latitude" => "33.834822",
                "altitude" => "130.735986",
            ]);
            
            Station::create([
                "id" => 8269,
                "prefecture_id" => 40,
                "city_id" => 1611,
                "street_id" => null,
                "name" => "西山",
                "hiragana" => "にしやま",
                "katakana" => "ニシヤマ",
                "katakana_half" => "ﾆｼﾔﾏ",
                "romaji" => "nishiyama",
                "memo" => "福岡県",
                "latitude" => "33.829877",
                "altitude" => "130.732404",
            ]);
            
            Station::create([
                "id" => 8270,
                "prefecture_id" => 40,
                "city_id" => 1630,
                "street_id" => 113529,
                "name" => "通谷",
                "hiragana" => "とおりたに",
                "katakana" => "トオリタニ",
                "katakana_half" => "ﾄｵﾘﾀﾆ",
                "romaji" => "tooritani",
                "memo" => "",
                "latitude" => "33.822962",
                "altitude" => "130.726932",
            ]);
            
            Station::create([
                "id" => 8271,
                "prefecture_id" => 40,
                "city_id" => 1630,
                "street_id" => 113539,
                "name" => "東中間",
                "hiragana" => "ひがしなかま",
                "katakana" => "ヒガシナカマ",
                "katakana_half" => "ﾋｶﾞｼﾅｶﾏ",
                "romaji" => "higashinakama",
                "memo" => "",
                "latitude" => "33.820351",
                "altitude" => "130.721794",
            ]);
            
            Station::create([
                "id" => 8272,
                "prefecture_id" => 40,
                "city_id" => 1626,
                "street_id" => null,
                "name" => "筑豊中間",
                "hiragana" => "ちくほうなかま",
                "katakana" => "チクホウナカマ",
                "katakana_half" => "ﾁｸﾎｳﾅｶﾏ",
                "romaji" => "chikuhounakama",
                "memo" => "",
                "latitude" => "33.816879",
                "altitude" => "130.716599",
            ]);
            
            Station::create([
                "id" => 8273,
                "prefecture_id" => 40,
                "city_id" => 1623,
                "street_id" => 113122,
                "name" => "希望が丘高校前",
                "hiragana" => "きぼうがおかこうこうまえ",
                "katakana" => "キボウガオカコウコウマエ",
                "katakana_half" => "ｷﾎﾞｳｶﾞｵｶｺｳｺｳﾏｴ",
                "romaji" => "kibougaokakoukoumae",
                "memo" => "",
                "latitude" => "33.808574",
                "altitude" => "130.711489",
            ]);
            
            Station::create([
                "id" => 8274,
                "prefecture_id" => 40,
                "city_id" => 1626,
                "street_id" => null,
                "name" => "筑豊香月",
                "hiragana" => "ちくほうかつき",
                "katakana" => "チクホウカツキ",
                "katakana_half" => "ﾁｸﾎｳｶﾂｷ",
                "romaji" => "chikuhoukatsuki",
                "memo" => "",
                "latitude" => "33.799437",
                "altitude" => "130.718822",
            ]);
            
            Station::create([
                "id" => 8275,
                "prefecture_id" => 40,
                "city_id" => 1611,
                "street_id" => 112130,
                "name" => "楠橋",
                "hiragana" => "くすばし",
                "katakana" => "クスバシ",
                "katakana_half" => "ｸｽﾊﾞｼ",
                "romaji" => "kusubashi",
                "memo" => "",
                "latitude" => "33.789244",
                "altitude" => "130.724489",
            ]);
            
            Station::create([
                "id" => 8276,
                "prefecture_id" => 40,
                "city_id" => 1611,
                "street_id" => 112147,
                "name" => "新木屋瀬",
                "hiragana" => "しんこやのせ",
                "katakana" => "シンコヤノセ",
                "katakana_half" => "ｼﾝｺﾔﾉｾ",
                "romaji" => "shinkoyanose",
                "memo" => "",
                "latitude" => "33.783550",
                "altitude" => "130.724573",
            ]);
            
            Station::create([
                "id" => 8277,
                "prefecture_id" => 40,
                "city_id" => 1611,
                "street_id" => 112147,
                "name" => "木屋瀬",
                "hiragana" => "こやのせ",
                "katakana" => "コヤノセ",
                "katakana_half" => "ｺﾔﾉｾ",
                "romaji" => "koyanose",
                "memo" => "",
                "latitude" => "33.778550",
                "altitude" => "130.724907",
            ]);
            
            Station::create([
                "id" => 8278,
                "prefecture_id" => 40,
                "city_id" => 1653,
                "street_id" => null,
                "name" => "遠賀野",
                "hiragana" => "おんがの",
                "katakana" => "オンガノ",
                "katakana_half" => "ｵﾝｶﾞﾉ",
                "romaji" => "ongano",
                "memo" => "",
                "latitude" => "33.768690",
                "altitude" => "130.730795",
            ]);
            
            Station::create([
                "id" => 8279,
                "prefecture_id" => 40,
                "city_id" => 1621,
                "street_id" => 112994,
                "name" => "感田",
                "hiragana" => "がんだ",
                "katakana" => "ガンダ",
                "katakana_half" => "ｶﾞﾝﾀﾞ",
                "romaji" => "ganda",
                "memo" => "",
                "latitude" => "33.758857",
                "altitude" => "130.733157",
            ]);
            
            Station::create([
                "id" => 8280,
                "prefecture_id" => 40,
                "city_id" => 1626,
                "street_id" => null,
                "name" => "筑豊直方",
                "hiragana" => "ちくほうのおがた",
                "katakana" => "チクホウノオガタ",
                "katakana_half" => "ﾁｸﾎｳﾉｵｶﾞﾀ",
                "romaji" => "chikuhounoogata",
                "memo" => "",
                "latitude" => "33.753441",
                "altitude" => "130.726241",
            ]);
            
            Station::create([
                "id" => 8281,
                "prefecture_id" => 40,
                "city_id" => 1614,
                "street_id" => 112439,
                "name" => "平和通",
                "hiragana" => "へいわどおり",
                "katakana" => "ヘイワドオリ",
                "katakana_half" => "ﾍｲﾜﾄﾞｵﾘ",
                "romaji" => "heiwadoori",
                "memo" => "",
                "latitude" => "33.883180",
                "altitude" => "130.881194",
            ]);
            
            Station::create([
                "id" => 8282,
                "prefecture_id" => 40,
                "city_id" => 1605,
                "street_id" => null,
                "name" => "旦過",
                "hiragana" => "たんが",
                "katakana" => "タンガ",
                "katakana_half" => "ﾀﾝｶﾞ",
                "romaji" => "tanga",
                "memo" => "",
                "latitude" => "33.880514",
                "altitude" => "130.880000",
            ]);
            
            Station::create([
                "id" => 8283,
                "prefecture_id" => 40,
                "city_id" => 1608,
                "street_id" => 111821,
                "name" => "香春口三萩野",
                "hiragana" => "かわらぐちみはぎの",
                "katakana" => "カワラグチミハギノ",
                "katakana_half" => "ｶﾜﾗｸﾞﾁﾐﾊｷﾞﾉ",
                "romaji" => "kawaraguchimihagino",
                "memo" => "",
                "latitude" => "33.873070",
                "altitude" => "130.880694",
            ]);
            
            Station::create([
                "id" => 8284,
                "prefecture_id" => 40,
                "city_id" => 1608,
                "street_id" => 111816,
                "name" => "片野",
                "hiragana" => "かたの",
                "katakana" => "カタノ",
                "katakana_half" => "ｶﾀﾉ",
                "romaji" => "katano",
                "memo" => "",
                "latitude" => "33.865237",
                "altitude" => "130.880139",
            ]);
            
            Station::create([
                "id" => 8285,
                "prefecture_id" => 40,
                "city_id" => 1609,
                "street_id" => 111922,
                "name" => "北方",
                "hiragana" => "きたがた",
                "katakana" => "キタガタ",
                "katakana_half" => "ｷﾀｶﾞﾀ",
                "romaji" => "kitagata",
                "memo" => "福岡県",
                "latitude" => "33.849017",
                "altitude" => "130.877696",
            ]);
            
            Station::create([
                "id" => 8286,
                "prefecture_id" => 40,
                "city_id" => 1605,
                "street_id" => null,
                "name" => "競馬場前",
                "hiragana" => "けいばじょうまえ",
                "katakana" => "ケイバジョウマエ",
                "katakana_half" => "ｹｲﾊﾞｼﾞｮｳﾏｴ",
                "romaji" => "keibajoumae",
                "memo" => "福岡県",
                "latitude" => "33.842823",
                "altitude" => "130.876419",
            ]);
            
            Station::create([
                "id" => 8287,
                "prefecture_id" => 40,
                "city_id" => 1609,
                "street_id" => 112008,
                "name" => "守恒",
                "hiragana" => "もりつね",
                "katakana" => "モリツネ",
                "katakana_half" => "ﾓﾘﾂﾈ",
                "romaji" => "moritsune",
                "memo" => "",
                "latitude" => "33.836823",
                "altitude" => "130.873058",
            ]);
            
            Station::create([
                "id" => 8288,
                "prefecture_id" => 40,
                "city_id" => 1609,
                "street_id" => 111969,
                "name" => "徳力公団前",
                "hiragana" => "とくりきこうだんまえ",
                "katakana" => "トクリキコウダンマエ",
                "katakana_half" => "ﾄｸﾘｷｺｳﾀﾞﾝﾏｴ",
                "romaji" => "tokurikikoudanmae",
                "memo" => "",
                "latitude" => "33.830519",
                "altitude" => "130.867670",
            ]);
            
            Station::create([
                "id" => 8289,
                "prefecture_id" => 40,
                "city_id" => 1609,
                "street_id" => 111969,
                "name" => "徳力嵐山口",
                "hiragana" => "とくりきあらしやまぐち",
                "katakana" => "トクリキアラシヤマグチ",
                "katakana_half" => "ﾄｸﾘｷｱﾗｼﾔﾏｸﾞﾁ",
                "romaji" => "tokurikiarashiyamaguchi",
                "memo" => "",
                "latitude" => "33.824575",
                "altitude" => "130.863727",
            ]);
            
            Station::create([
                "id" => 8290,
                "prefecture_id" => 40,
                "city_id" => 1609,
                "street_id" => 111921,
                "name" => "企救丘",
                "hiragana" => "きくがおか",
                "katakana" => "キクガオカ",
                "katakana_half" => "ｷｸｶﾞｵｶ",
                "romaji" => "kikugaoka",
                "memo" => "",
                "latitude" => "33.819798",
                "altitude" => "130.877419",
            ]);
            
            Station::create([
                "id" => 8291,
                "prefecture_id" => 40,
                "city_id" => 1609,
                "street_id" => null,
                "name" => "南直方御殿口",
                "hiragana" => "みなみのおがたごてんぐち",
                "katakana" => "ミナミノオガタゴテングチ",
                "katakana_half" => "ﾐﾅﾐﾉｵｶﾞﾀｺﾞﾃﾝｸﾞﾁ",
                "romaji" => "minaminoogatagotenguchi",
                "memo" => "",
                "latitude" => "33.738832",
                "altitude" => "130.724853",
            ]);
            
            Station::create([
                "id" => 8292,
                "prefecture_id" => 40,
                "city_id" => 1631,
                "street_id" => 113547,
                "name" => "あかぢ",
                "hiragana" => "あかぢ",
                "katakana" => "アカヂ",
                "katakana_half" => "ｱｶﾁﾞ",
                "romaji" => "akaji",
                "memo" => "",
                "latitude" => "33.727333",
                "altitude" => "130.724548",
            ]);
            
            Station::create([
                "id" => 8293,
                "prefecture_id" => 40,
                "city_id" => 1605,
                "street_id" => 111565,
                "name" => "藤棚",
                "hiragana" => "ふじたな",
                "katakana" => "フジタナ",
                "katakana_half" => "ﾌｼﾞﾀﾅ",
                "romaji" => "fujitana",
                "memo" => "",
                "latitude" => "33.722029",
                "altitude" => "130.735213",
            ]);
            
            Station::create([
                "id" => 8294,
                "prefecture_id" => 40,
                "city_id" => 1621,
                "street_id" => 113005,
                "name" => "中泉",
                "hiragana" => "なかいずみ",
                "katakana" => "ナカイズミ",
                "katakana_half" => "ﾅｶｲｽﾞﾐ",
                "romaji" => "nakaizumi",
                "memo" => "",
                "latitude" => "33.720723",
                "altitude" => "130.743519",
            ]);
            
            Station::create([
                "id" => 8295,
                "prefecture_id" => 40,
                "city_id" => 1671,
                "street_id" => 114666,
                "name" => "市場",
                "hiragana" => "いちば",
                "katakana" => "イチバ",
                "katakana_half" => "ｲﾁﾊﾞ",
                "romaji" => "ichiba",
                "memo" => "福岡県",
                "latitude" => "33.708030",
                "altitude" => "130.759351",
            ]);
            
            Station::create([
                "id" => 8296,
                "prefecture_id" => 40,
                "city_id" => 1612,
                "street_id" => 112265,
                "name" => "ふれあい生力",
                "hiragana" => "ふれあいしょうりき",
                "katakana" => "フレアイショウリキ",
                "katakana_half" => "ﾌﾚｱｲｼｮｳﾘｷ",
                "romaji" => "fureaishouriki",
                "memo" => "",
                "latitude" => "33.699948",
                "altitude" => "130.765685",
            ]);
            
            Station::create([
                "id" => 8297,
                "prefecture_id" => 40,
                "city_id" => 1671,
                "street_id" => 114663,
                "name" => "赤池",
                "hiragana" => "あかいけ",
                "katakana" => "アカイケ",
                "katakana_half" => "ｱｶｲｹ",
                "romaji" => "akaike",
                "memo" => "福岡県",
                "latitude" => "33.692198",
                "altitude" => "130.768629",
            ]);
            
            Station::create([
                "id" => 8298,
                "prefecture_id" => 40,
                "city_id" => 1614,
                "street_id" => 112424,
                "name" => "人見",
                "hiragana" => "ひとみ",
                "katakana" => "ヒトミ",
                "katakana_half" => "ﾋﾄﾐ",
                "romaji" => "hitomi",
                "memo" => "",
                "latitude" => "33.687477",
                "altitude" => "130.770906",
            ]);
            
            Station::create([
                "id" => 8299,
                "prefecture_id" => 40,
                "city_id" => 1608,
                "street_id" => 111818,
                "name" => "金田",
                "hiragana" => "かなだ",
                "katakana" => "カナダ",
                "katakana_half" => "ｶﾅﾀﾞ",
                "romaji" => "kanada",
                "memo" => "",
                "latitude" => "33.682616",
                "altitude" => "130.776768",
            ]);
            
            Station::create([
                "id" => 8300,
                "prefecture_id" => 40,
                "city_id" => 1674,
                "street_id" => null,
                "name" => "上金田",
                "hiragana" => "かみかなだ",
                "katakana" => "カミカナダ",
                "katakana_half" => "ｶﾐｶﾅﾀﾞ",
                "romaji" => "kamikanada",
                "memo" => "",
                "latitude" => "33.672479",
                "altitude" => "130.789322",
            ]);
            
            Station::create([
                "id" => 8301,
                "prefecture_id" => 40,
                "city_id" => 1623,
                "street_id" => 113128,
                "name" => "糒",
                "hiragana" => "ほしい",
                "katakana" => "ホシイ",
                "katakana_half" => "ﾎｼｲ",
                "romaji" => "hoshii",
                "memo" => "",
                "latitude" => "33.664730",
                "altitude" => "130.799183",
            ]);
            
            Station::create([
                "id" => 8302,
                "prefecture_id" => 40,
                "city_id" => 1623,
                "street_id" => null,
                "name" => "田川市立病院",
                "hiragana" => "たがわしりつびょういん",
                "katakana" => "タガワシリツビョウイン",
                "katakana_half" => "ﾀｶﾞﾜｼﾘﾂﾋﾞｮｳｲﾝ",
                "romaji" => "tagawashiritsubyouin",
                "memo" => "",
                "latitude" => "33.660509",
                "altitude" => "130.802628",
            ]);
            
            Station::create([
                "id" => 8303,
                "prefecture_id" => 40,
                "city_id" => 1673,
                "street_id" => 114749,
                "name" => "下伊田",
                "hiragana" => "しもいた",
                "katakana" => "シモイタ",
                "katakana_half" => "ｼﾓｲﾀ",
                "romaji" => "shimoita",
                "memo" => "",
                "latitude" => "33.652148",
                "altitude" => "130.806795",
            ]);
            
            Station::create([
                "id" => 8304,
                "prefecture_id" => 40,
                "city_id" => 1629,
                "street_id" => null,
                "name" => "豊前大熊",
                "hiragana" => "ぶぜんおおくま",
                "katakana" => "ブゼンオオクマ",
                "katakana_half" => "ﾌﾞｾﾞﾝｵｵｸﾏ",
                "romaji" => "buzenookuma",
                "memo" => "",
                "latitude" => "33.672590",
                "altitude" => "130.780324",
            ]);
            
            Station::create([
                "id" => 8305,
                "prefecture_id" => 40,
                "city_id" => 1617,
                "street_id" => 112590,
                "name" => "松山",
                "hiragana" => "まつやま",
                "katakana" => "マツヤマ",
                "katakana_half" => "ﾏﾂﾔﾏ",
                "romaji" => "matsuyama",
                "memo" => "福岡県",
                "latitude" => "33.668035",
                "altitude" => "130.780740",
            ]);
            
            Station::create([
                "id" => 8306,
                "prefecture_id" => 40,
                "city_id" => 1667,
                "street_id" => null,
                "name" => "糸田",
                "hiragana" => "いとだ",
                "katakana" => "イトダ",
                "katakana_half" => "ｲﾄﾀﾞ",
                "romaji" => "itoda",
                "memo" => "",
                "latitude" => "33.656759",
                "altitude" => "130.785906",
            ]);
            
            Station::create([
                "id" => 8307,
                "prefecture_id" => 40,
                "city_id" => 1623,
                "street_id" => 113112,
                "name" => "大藪",
                "hiragana" => "おおやぶ",
                "katakana" => "オオヤブ",
                "katakana_half" => "ｵｵﾔﾌﾞ",
                "romaji" => "ooyabu",
                "memo" => "",
                "latitude" => "33.647454",
                "altitude" => "130.797323",
            ]);
            
            Station::create([
                "id" => 8308,
                "prefecture_id" => 40,
                "city_id" => 1646,
                "street_id" => null,
                "name" => "美夜古泉",
                "hiragana" => "みやこいずみ",
                "katakana" => "ミヤコイズミ",
                "katakana_half" => "ﾐﾔｺｲｽﾞﾐ",
                "romaji" => "miyakoizumi",
                "memo" => "",
                "latitude" => "33.708840",
                "altitude" => "130.969028",
            ]);
            
            Station::create([
                "id" => 8309,
                "prefecture_id" => 40,
                "city_id" => 1614,
                "street_id" => 112400,
                "name" => "今川河童",
                "hiragana" => "いまがわかっぱ",
                "katakana" => "イマガワカッパ",
                "katakana_half" => "ｲﾏｶﾞﾜｶｯﾊﾟ",
                "romaji" => "imagawakappa",
                "memo" => "",
                "latitude" => "33.703034",
                "altitude" => "130.965556",
            ]);
            
            Station::create([
                "id" => 8310,
                "prefecture_id" => 40,
                "city_id" => 1673,
                "street_id" => 114771,
                "name" => "豊津",
                "hiragana" => "とよつ",
                "katakana" => "トヨツ",
                "katakana_half" => "ﾄﾖﾂ",
                "romaji" => "toyotsu",
                "memo" => "福岡県",
                "latitude" => "33.687480",
                "altitude" => "130.962974",
            ]);
            
            Station::create([
                "id" => 8311,
                "prefecture_id" => 40,
                "city_id" => 1673,
                "street_id" => 114771,
                "name" => "新豊津",
                "hiragana" => "しんとよつ",
                "katakana" => "シントヨツ",
                "katakana_half" => "ｼﾝﾄﾖﾂ",
                "romaji" => "shintoyotsu",
                "memo" => "",
                "latitude" => "33.679648",
                "altitude" => "130.963836",
            ]);
            
            Station::create([
                "id" => 8312,
                "prefecture_id" => 40,
                "city_id" => 1610,
                "street_id" => null,
                "name" => "東犀川三四郎",
                "hiragana" => "ひがしさいがわさんしろう",
                "katakana" => "ヒガシサイガワサンシロウ",
                "katakana_half" => "ﾋｶﾞｼｻｲｶﾞﾜｻﾝｼﾛｳ",
                "romaji" => "higashisaigawasanshirou",
                "memo" => "",
                "latitude" => "33.661427",
                "altitude" => "130.949060",
            ]);
            
            Station::create([
                "id" => 8313,
                "prefecture_id" => 40,
                "city_id" => 1673,
                "street_id" => 114735,
                "name" => "犀川",
                "hiragana" => "さいがわ",
                "katakana" => "サイガワ",
                "katakana_half" => "ｻｲｶﾞﾜ",
                "romaji" => "saigawa",
                "memo" => "",
                "latitude" => "33.650595",
                "altitude" => "130.939227",
            ]);
            
            Station::create([
                "id" => 8314,
                "prefecture_id" => 40,
                "city_id" => 1673,
                "street_id" => 114748,
                "name" => "崎山",
                "hiragana" => "さきやま",
                "katakana" => "サキヤマ",
                "katakana_half" => "ｻｷﾔﾏ",
                "romaji" => "sakiyama",
                "memo" => "",
                "latitude" => "33.636179",
                "altitude" => "130.917841",
            ]);
            
            Station::create([
                "id" => 8315,
                "prefecture_id" => 40,
                "city_id" => 1605,
                "street_id" => null,
                "name" => "源じいの森",
                "hiragana" => "げんじいのもり",
                "katakana" => "ゲンジイノモリ",
                "katakana_half" => "ｹﾞﾝｼﾞｲﾉﾓﾘ",
                "romaji" => "genjiinomori",
                "memo" => "",
                "latitude" => "33.616126",
                "altitude" => "130.895760",
            ]);
            
            Station::create([
                "id" => 8316,
                "prefecture_id" => 40,
                "city_id" => 1617,
                "street_id" => 112586,
                "name" => "油須原",
                "hiragana" => "ゆすばる",
                "katakana" => "ユスバル",
                "katakana_half" => "ﾕｽﾊﾞﾙ",
                "romaji" => "yusubaru",
                "memo" => "",
                "latitude" => "33.612848",
                "altitude" => "130.884039",
            ]);
            
            Station::create([
                "id" => 8317,
                "prefecture_id" => 40,
                "city_id" => 1670,
                "street_id" => null,
                "name" => "赤",
                "hiragana" => "あか",
                "katakana" => "アカ",
                "katakana_half" => "ｱｶ",
                "romaji" => "aka",
                "memo" => "",
                "latitude" => "33.617737",
                "altitude" => "130.871791",
            ]);
            
            Station::create([
                "id" => 8318,
                "prefecture_id" => 40,
                "city_id" => 1670,
                "street_id" => 114661,
                "name" => "内田",
                "hiragana" => "うちだ",
                "katakana" => "ウチダ",
                "katakana_half" => "ｳﾁﾀﾞ",
                "romaji" => "uchida",
                "memo" => "",
                "latitude" => "33.637929",
                "altitude" => "130.864234",
            ]);
            
            Station::create([
                "id" => 8319,
                "prefecture_id" => 40,
                "city_id" => 1665,
                "street_id" => 114614,
                "name" => "柿下温泉口",
                "hiragana" => "かきしたおんせんぐち",
                "katakana" => "カキシタオンセングチ",
                "katakana_half" => "ｶｷｼﾀｵﾝｾﾝｸﾞﾁ",
                "romaji" => "kakishitaonsenguchi",
                "memo" => "",
                "latitude" => "33.651704",
                "altitude" => "130.854068",
            ]);
            
            Station::create([
                "id" => 8320,
                "prefecture_id" => 40,
                "city_id" => 1605,
                "street_id" => null,
                "name" => "勾金",
                "hiragana" => "まがりかね",
                "katakana" => "マガリカネ",
                "katakana_half" => "ﾏｶﾞﾘｶﾈ",
                "romaji" => "magarikane",
                "memo" => "",
                "latitude" => "33.651649",
                "altitude" => "130.842013",
            ]);
            
            Station::create([
                "id" => 8321,
                "prefecture_id" => 40,
                "city_id" => 1673,
                "street_id" => 114743,
                "name" => "上伊田",
                "hiragana" => "かみいた",
                "katakana" => "カミイタ",
                "katakana_half" => "ｶﾐｲﾀ",
                "romaji" => "kamiita",
                "memo" => "",
                "latitude" => "33.648010",
                "altitude" => "130.829849",
            ]);
            
            Station::create([
                "id" => 8322,
                "prefecture_id" => 40,
                "city_id" => 1605,
                "street_id" => null,
                "name" => "九州鉄道記念館",
                "hiragana" => "きゅうしゅうてつどうきねんかん",
                "katakana" => "キュウシュウテツドウキネンカン",
                "katakana_half" => "ｷｭｳｼｭｳﾃﾂﾄﾞｳｷﾈﾝｶﾝ",
                "romaji" => "kyuushuutetsudoukinenkan",
                "memo" => "",
                "latitude" => "33.944509",
                "altitude" => "130.962602",
            ]);
            
            Station::create([
                "id" => 8323,
                "prefecture_id" => 40,
                "city_id" => 1609,
                "street_id" => 111999,
                "name" => "出光美術館",
                "hiragana" => "いでみつびじゅつかん",
                "katakana" => "イデミツビジュツカン",
                "katakana_half" => "ｲﾃﾞﾐﾂﾋﾞｼﾞｭﾂｶﾝ",
                "romaji" => "idemitsubijutsukan",
                "memo" => "",
                "latitude" => "33.947981",
                "altitude" => "130.965379",
            ]);
            
            Station::create([
                "id" => 8324,
                "prefecture_id" => 40,
                "city_id" => 1605,
                "street_id" => 111553,
                "name" => "ノーフォーク広場",
                "hiragana" => "のーふぉーくひろば",
                "katakana" => "ノーフォークヒロバ",
                "katakana_half" => "ﾉｰﾌｫｰｸﾋﾛﾊﾞ",
                "romaji" => "noｰfoｰkuhiroba",
                "memo" => "",
                "latitude" => "33.955758",
                "altitude" => "130.964268",
            ]);
            
            Station::create([
                "id" => 8325,
                "prefecture_id" => 40,
                "city_id" => 1643,
                "street_id" => 114133,
                "name" => "関門海峡めかり",
                "hiragana" => "かんもんかいきょうめかり",
                "katakana" => "カンモンカイキョウメカリ",
                "katakana_half" => "ｶﾝﾓﾝｶｲｷｮｳﾒｶﾘ",
                "romaji" => "kanmonkaikyoumekari",
                "memo" => "",
                "latitude" => "33.960618",
                "altitude" => "130.967323",
            ]);
            
            Station::create([
                "id" => 8326,
                "prefecture_id" => 40,
                "city_id" => 1616,
                "street_id" => 112558,
                "name" => "室見",
                "hiragana" => "むろみ",
                "katakana" => "ムロミ",
                "katakana_half" => "ﾑﾛﾐ",
                "romaji" => "muromi",
                "memo" => "",
                "latitude" => "33.581065",
                "altitude" => "130.339892",
            ]);
            
            Station::create([
                "id" => 8327,
                "prefecture_id" => 40,
                "city_id" => 1618,
                "street_id" => 112629,
                "name" => "藤崎",
                "hiragana" => "ふじさき",
                "katakana" => "フジサキ",
                "katakana_half" => "ﾌｼﾞｻｷ",
                "romaji" => "fujisaki",
                "memo" => "福岡県",
                "latitude" => "33.581175",
                "altitude" => "130.347447",
            ]);
            
            Station::create([
                "id" => 8328,
                "prefecture_id" => 40,
                "city_id" => 1605,
                "street_id" => 111623,
                "name" => "西新",
                "hiragana" => "にしじん",
                "katakana" => "ニシジン",
                "katakana_half" => "ﾆｼｼﾞﾝ",
                "romaji" => "nishijin",
                "memo" => "",
                "latitude" => "33.583565",
                "altitude" => "130.359446",
            ]);
            
            Station::create([
                "id" => 8329,
                "prefecture_id" => 40,
                "city_id" => 1614,
                "street_id" => 112424,
                "name" => "唐人町",
                "hiragana" => "とうじんまち",
                "katakana" => "トウジンマチ",
                "katakana_half" => "ﾄｳｼﾞﾝﾏﾁ",
                "romaji" => "toujinmachi",
                "memo" => "",
                "latitude" => "33.590231",
                "altitude" => "130.370445",
            ]);
            
            Station::create([
                "id" => 8330,
                "prefecture_id" => 40,
                "city_id" => 1614,
                "street_id" => 112403,
                "name" => "大濠公園",
                "hiragana" => "おおほりこうえん",
                "katakana" => "オオホリコウエン",
                "katakana_half" => "ｵｵﾎﾘｺｳｴﾝ",
                "romaji" => "oohorikouen",
                "memo" => "",
                "latitude" => "33.589953",
                "altitude" => "130.379055",
            ]);
            
            Station::create([
                "id" => 8331,
                "prefecture_id" => 40,
                "city_id" => 1608,
                "street_id" => 111796,
                "name" => "赤坂",
                "hiragana" => "あかさか",
                "katakana" => "アカサカ",
                "katakana_half" => "ｱｶｻｶ",
                "romaji" => "akasaka",
                "memo" => "福岡県",
                "latitude" => "33.588814",
                "altitude" => "130.390360",
            ]);
            
            Station::create([
                "id" => 8332,
                "prefecture_id" => 40,
                "city_id" => 1606,
                "street_id" => 111714,
                "name" => "天神",
                "hiragana" => "てんじん",
                "katakana" => "テンジン",
                "katakana_half" => "ﾃﾝｼﾞﾝ",
                "romaji" => "tenjin",
                "memo" => "",
                "latitude" => "33.591203",
                "altitude" => "130.398776",
            ]);
            
            Station::create([
                "id" => 8333,
                "prefecture_id" => 40,
                "city_id" => 1613,
                "street_id" => 112364,
                "name" => "中洲川端",
                "hiragana" => "なかすかわばた",
                "katakana" => "ナカスカワバタ",
                "katakana_half" => "ﾅｶｽｶﾜﾊﾞﾀ",
                "romaji" => "nakasukawabata",
                "memo" => "",
                "latitude" => "33.593925",
                "altitude" => "130.405663",
            ]);
            
            Station::create([
                "id" => 8334,
                "prefecture_id" => 40,
                "city_id" => 1610,
                "street_id" => 112043,
                "name" => "祇園",
                "hiragana" => "ぎおん",
                "katakana" => "ギオン",
                "katakana_half" => "ｷﾞｵﾝ",
                "romaji" => "gion",
                "memo" => "福岡県",
                "latitude" => "33.594120",
                "altitude" => "130.414608",
            ]);
            
            Station::create([
                "id" => 8335,
                "prefecture_id" => 40,
                "city_id" => 1613,
                "street_id" => 112380,
                "name" => "東比恵",
                "hiragana" => "ひがしひえ",
                "katakana" => "ヒガシヒエ",
                "katakana_half" => "ﾋｶﾞｼﾋｴ",
                "romaji" => "higashihie",
                "memo" => "",
                "latitude" => "33.589842",
                "altitude" => "130.431217",
            ]);
            
            Station::create([
                "id" => 8336,
                "prefecture_id" => 40,
                "city_id" => 1612,
                "street_id" => null,
                "name" => "福岡空港",
                "hiragana" => "ふくおかくうこう",
                "katakana" => "フクオカクウコウ",
                "katakana_half" => "ﾌｸｵｶｸｳｺｳ",
                "romaji" => "fukuokakuukou",
                "memo" => "鉄道",
                "latitude" => "33.597119",
                "altitude" => "130.448298",
            ]);
            
            Station::create([
                "id" => 8337,
                "prefecture_id" => 40,
                "city_id" => 1613,
                "street_id" => 112329,
                "name" => "呉服町",
                "hiragana" => "ごふくまち",
                "katakana" => "ゴフクマチ",
                "katakana_half" => "ｺﾞﾌｸﾏﾁ",
                "romaji" => "gofukumachi",
                "memo" => "福岡県",
                "latitude" => "33.597925",
                "altitude" => "130.409580",
            ]);
            
            Station::create([
                "id" => 8338,
                "prefecture_id" => 40,
                "city_id" => 1611,
                "street_id" => 112176,
                "name" => "千代県庁口",
                "hiragana" => "ちよけんちょうぐち",
                "katakana" => "チヨケンチョウグチ",
                "katakana_half" => "ﾁﾖｹﾝﾁｮｳｸﾞﾁ",
                "romaji" => "chiyokenchouguchi",
                "memo" => "",
                "latitude" => "33.602453",
                "altitude" => "130.414330",
            ]);
            
            Station::create([
                "id" => 8339,
                "prefecture_id" => 40,
                "city_id" => 1612,
                "street_id" => 112298,
                "name" => "馬出九大病院前",
                "hiragana" => "まいだしきゅうだいびょういんまえ",
                "katakana" => "マイダシキュウダイビョウインマエ",
                "katakana_half" => "ﾏｲﾀﾞｼｷｭｳﾀﾞｲﾋﾞｮｳｲﾝﾏｴ",
                "romaji" => "maidashikyuudaibyouinmae",
                "memo" => "",
                "latitude" => "33.609119",
                "altitude" => "130.419329",
            ]);
            
            Station::create([
                "id" => 8340,
                "prefecture_id" => 40,
                "city_id" => 1612,
                "street_id" => 112288,
                "name" => "箱崎宮前",
                "hiragana" => "はこざきみやまえ",
                "katakana" => "ハコザキミヤマエ",
                "katakana_half" => "ﾊｺｻﾞｷﾐﾔﾏｴ",
                "romaji" => "hakozakimiyamae",
                "memo" => "",
                "latitude" => "33.616062",
                "altitude" => "130.419190",
            ]);
            
            Station::create([
                "id" => 8341,
                "prefecture_id" => 40,
                "city_id" => 1612,
                "street_id" => 112288,
                "name" => "箱崎九大前",
                "hiragana" => "はこざききゅうだいまえ",
                "katakana" => "ハコザキキュウダイマエ",
                "katakana_half" => "ﾊｺｻﾞｷｷｭｳﾀﾞｲﾏｴ",
                "romaji" => "hakozakikyuudaimae",
                "memo" => "",
                "latitude" => "33.621839",
                "altitude" => "130.421077",
            ]);
            
            Station::create([
                "id" => 8342,
                "prefecture_id" => 40,
                "city_id" => 1616,
                "street_id" => 112549,
                "name" => "橋本",
                "hiragana" => "はしもと",
                "katakana" => "ハシモト",
                "katakana_half" => "ﾊｼﾓﾄ",
                "romaji" => "hashimoto",
                "memo" => "福岡県",
                "latitude" => "33.555234",
                "altitude" => "130.320728",
            ]);
            
            Station::create([
                "id" => 8343,
                "prefecture_id" => 40,
                "city_id" => 1618,
                "street_id" => 112615,
                "name" => "次郎丸",
                "hiragana" => "じろうまる",
                "katakana" => "ジロウマル",
                "katakana_half" => "ｼﾞﾛｳﾏﾙ",
                "romaji" => "jiroumaru",
                "memo" => "",
                "latitude" => "33.552456",
                "altitude" => "130.329895",
            ]);
            
            Station::create([
                "id" => 8344,
                "prefecture_id" => 40,
                "city_id" => 1618,
                "street_id" => 112606,
                "name" => "賀茂",
                "hiragana" => "かも",
                "katakana" => "カモ",
                "katakana_half" => "ｶﾓ",
                "romaji" => "kamo",
                "memo" => "",
                "latitude" => "33.550512",
                "altitude" => "130.337949",
            ]);
            
            Station::create([
                "id" => 8345,
                "prefecture_id" => 40,
                "city_id" => 1618,
                "street_id" => 112625,
                "name" => "野芥",
                "hiragana" => "のけ",
                "katakana" => "ノケ",
                "katakana_half" => "ﾉｹ",
                "romaji" => "noke",
                "memo" => "",
                "latitude" => "33.548290",
                "altitude" => "130.346560",
            ]);
            
            Station::create([
                "id" => 8346,
                "prefecture_id" => 40,
                "city_id" => 1617,
                "street_id" => 112570,
                "name" => "梅林",
                "hiragana" => "うめばやし",
                "katakana" => "ウメバヤシ",
                "katakana_half" => "ｳﾒﾊﾞﾔｼ",
                "romaji" => "umebayashi",
                "memo" => "福岡県",
                "latitude" => "33.545791",
                "altitude" => "130.354893",
            ]);
            
            Station::create([
                "id" => 8347,
                "prefecture_id" => 40,
                "city_id" => 1612,
                "street_id" => null,
                "name" => "福大前",
                "hiragana" => "ふくだいまえ",
                "katakana" => "フクダイマエ",
                "katakana_half" => "ﾌｸﾀﾞｲﾏｴ",
                "romaji" => "fukudaimae",
                "memo" => "",
                "latitude" => "33.547458",
                "altitude" => "130.362392",
            ]);
            
            Station::create([
                "id" => 8348,
                "prefecture_id" => 40,
                "city_id" => 1617,
                "street_id" => 112583,
                "name" => "七隈",
                "hiragana" => "ななくま",
                "katakana" => "ナナクマ",
                "katakana_half" => "ﾅﾅｸﾏ",
                "romaji" => "nanakuma",
                "memo" => "",
                "latitude" => "33.552735",
                "altitude" => "130.361836",
            ]);
            
            Station::create([
                "id" => 8349,
                "prefecture_id" => 40,
                "city_id" => 1617,
                "street_id" => 112572,
                "name" => "金山",
                "hiragana" => "かなやま",
                "katakana" => "カナヤマ",
                "katakana_half" => "ｶﾅﾔﾏ",
                "romaji" => "kanayama",
                "memo" => "福岡県",
                "latitude" => "33.559678",
                "altitude" => "130.361836",
            ]);
            
            Station::create([
                "id" => 8350,
                "prefecture_id" => 40,
                "city_id" => 1617,
                "street_id" => 112577,
                "name" => "茶山",
                "hiragana" => "ちゃやま",
                "katakana" => "チャヤマ",
                "katakana_half" => "ﾁｬﾔﾏ",
                "romaji" => "chayama",
                "memo" => "福岡県",
                "latitude" => "33.566067",
                "altitude" => "130.365446",
            ]);
            
            Station::create([
                "id" => 8351,
                "prefecture_id" => 40,
                "city_id" => 1617,
                "street_id" => 112587,
                "name" => "別府",
                "hiragana" => "べふ",
                "katakana" => "ベフ",
                "katakana_half" => "ﾍﾞﾌ",
                "romaji" => "befu",
                "memo" => "福岡県",
                "latitude" => "33.574121",
                "altitude" => "130.369612",
            ]);
            
            Station::create([
                "id" => 8352,
                "prefecture_id" => 40,
                "city_id" => 1614,
                "street_id" => 112445,
                "name" => "六本松",
                "hiragana" => "ろっぽんまつ",
                "katakana" => "ロッポンマツ",
                "katakana_half" => "ﾛｯﾎﾟﾝﾏﾂ",
                "romaji" => "ropponmatsu",
                "memo" => "",
                "latitude" => "33.577732",
                "altitude" => "130.377389",
            ]);
            
            Station::create([
                "id" => 8353,
                "prefecture_id" => 40,
                "city_id" => 1614,
                "street_id" => 112411,
                "name" => "桜坂",
                "hiragana" => "さくらざか",
                "katakana" => "サクラザカ",
                "katakana_half" => "ｻｸﾗｻﾞｶ",
                "romaji" => "sakurazaka",
                "memo" => "",
                "latitude" => "33.577177",
                "altitude" => "130.387111",
            ]);
            
            Station::create([
                "id" => 8354,
                "prefecture_id" => 40,
                "city_id" => 1614,
                "street_id" => 112443,
                "name" => "薬院大通",
                "hiragana" => "やくいんおおどおり",
                "katakana" => "ヤクインオオドオリ",
                "katakana_half" => "ﾔｸｲﾝｵｵﾄﾞｵﾘ",
                "romaji" => "yakuinoodoori",
                "memo" => "",
                "latitude" => "33.580510",
                "altitude" => "130.396277",
            ]);
            
            Station::create([
                "id" => 8355,
                "prefecture_id" => 40,
                "city_id" => 1614,
                "street_id" => 112446,
                "name" => "渡辺通",
                "hiragana" => "わたなべどおり",
                "katakana" => "ワタナベドオリ",
                "katakana_half" => "ﾜﾀﾅﾍﾞﾄﾞｵﾘ",
                "romaji" => "watanabedoori",
                "memo" => "",
                "latitude" => "33.584121",
                "altitude" => "130.404609",
            ]);
            
            Station::create([
                "id" => 8356,
                "prefecture_id" => 40,
                "city_id" => 1606,
                "street_id" => 111714,
                "name" => "天神南",
                "hiragana" => "てんじんみなみ",
                "katakana" => "テンジンミナミ",
                "katakana_half" => "ﾃﾝｼﾞﾝﾐﾅﾐ",
                "romaji" => "tenjinminami",
                "memo" => "",
                "latitude" => "33.588565",
                "altitude" => "130.402387",
            ]);
            
            Station::create([
                "id" => 8357,
                "prefecture_id" => 40,
                "city_id" => 1631,
                "street_id" => null,
                "name" => "小郡",
                "hiragana" => "おごおり",
                "katakana" => "オゴオリ",
                "katakana_half" => "ｵｺﾞｵﾘ",
                "romaji" => "ogoori",
                "memo" => "福岡県",
                "latitude" => "33.397477",
                "altitude" => "130.553494",
            ]);
            
            Station::create([
                "id" => 8358,
                "prefecture_id" => 40,
                "city_id" => 1631,
                "street_id" => 113550,
                "name" => "大板井",
                "hiragana" => "おおいたい",
                "katakana" => "オオイタイ",
                "katakana_half" => "ｵｵｲﾀｲ",
                "romaji" => "ooitai",
                "memo" => "",
                "latitude" => "33.398588",
                "altitude" => "130.560994",
            ]);
            
            Station::create([
                "id" => 8359,
                "prefecture_id" => 40,
                "city_id" => 1605,
                "street_id" => 111644,
                "name" => "松崎",
                "hiragana" => "まつざき",
                "katakana" => "マツザキ",
                "katakana_half" => "ﾏﾂｻﾞｷ",
                "romaji" => "matsuzaki",
                "memo" => "福岡県",
                "latitude" => "33.399699",
                "altitude" => "130.582019",
            ]);
            
            Station::create([
                "id" => 8360,
                "prefecture_id" => 40,
                "city_id" => 1605,
                "street_id" => 111552,
                "name" => "今隈",
                "hiragana" => "いまぐま",
                "katakana" => "イマグマ",
                "katakana_half" => "ｲﾏｸﾞﾏ",
                "romaji" => "imaguma",
                "memo" => "",
                "latitude" => "33.404144",
                "altitude" => "130.594324",
            ]);
            
            Station::create([
                "id" => 8361,
                "prefecture_id" => 40,
                "city_id" => 1611,
                "street_id" => null,
                "name" => "西太刀洗",
                "hiragana" => "にしたちあらい",
                "katakana" => "ニシタチアライ",
                "katakana_half" => "ﾆｼﾀﾁｱﾗｲ",
                "romaji" => "nishitachiarai",
                "memo" => "",
                "latitude" => "33.407754",
                "altitude" => "130.599128",
            ]);
            
            Station::create([
                "id" => 8362,
                "prefecture_id" => 40,
                "city_id" => 1631,
                "street_id" => 113578,
                "name" => "山隈",
                "hiragana" => "やまぐま",
                "katakana" => "ヤマグマ",
                "katakana_half" => "ﾔﾏｸﾞﾏ",
                "romaji" => "yamaguma",
                "memo" => "",
                "latitude" => "33.414143",
                "altitude" => "130.610155",
            ]);
            
            Station::create([
                "id" => 8363,
                "prefecture_id" => 40,
                "city_id" => 1605,
                "street_id" => 111610,
                "name" => "太刀洗",
                "hiragana" => "たちあらい",
                "katakana" => "タチアライ",
                "katakana_half" => "ﾀﾁｱﾗｲ",
                "romaji" => "tachiarai",
                "memo" => "",
                "latitude" => "33.413865",
                "altitude" => "130.618766",
            ]);
            
            Station::create([
                "id" => 8364,
                "prefecture_id" => 40,
                "city_id" => 1605,
                "street_id" => 111609,
                "name" => "高田",
                "hiragana" => "たかた",
                "katakana" => "タカタ",
                "katakana_half" => "ﾀｶﾀ",
                "romaji" => "takata",
                "memo" => "福岡県",
                "latitude" => "33.414143",
                "altitude" => "130.633765",
            ]);
            
    }
}
