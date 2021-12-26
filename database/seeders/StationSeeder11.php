<?php
namespace Database\Seeders;

use App\Models\Station;
use Illuminate\Database\Seeder;

class StationSeeder11 extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        
            Station::create([
                "id" => 1849,
                "prefecture_id" => 11,
                "city_id" => 525,
                "street_id" => null,
                "name" => "大宮",
                "hiragana" => "おおみや",
                "katakana" => "オオミヤ",
                "katakana_half" => "ｵｵﾐﾔ",
                "romaji" => "oomiya",
                "memo" => "埼玉県",
                "latitude" => "35.906256",
                "altitude" => "139.623625",
            ]);
            
            Station::create([
                "id" => 1850,
                "prefecture_id" => 11,
                "city_id" => 534,
                "street_id" => null,
                "name" => "熊谷",
                "hiragana" => "くまがや",
                "katakana" => "クマガヤ",
                "katakana_half" => "ｸﾏｶﾞﾔ",
                "romaji" => "kumagaya",
                "memo" => "",
                "latitude" => "36.139699",
                "altitude" => "139.389912",
            ]);
            
            Station::create([
                "id" => 1851,
                "prefecture_id" => 11,
                "city_id" => 541,
                "street_id" => null,
                "name" => "本庄早稲田",
                "hiragana" => "ほんじょうわせだ",
                "katakana" => "ホンジョウワセダ",
                "katakana_half" => "ﾎﾝｼﾞｮｳﾜｾﾀﾞ",
                "romaji" => "honjouwaseda",
                "memo" => "",
                "latitude" => "36.218992",
                "altitude" => "139.179315",
            ]);
            
            Station::create([
                "id" => 1852,
                "prefecture_id" => 11,
                "city_id" => 529,
                "street_id" => null,
                "name" => "浦和",
                "hiragana" => "うらわ",
                "katakana" => "ウラワ",
                "katakana_half" => "ｳﾗﾜ",
                "romaji" => "urawa",
                "memo" => "",
                "latitude" => "35.858484",
                "altitude" => "139.657069",
            ]);
            
            Station::create([
                "id" => 1853,
                "prefecture_id" => 11,
                "city_id" => 527,
                "street_id" => 30582,
                "name" => "さいたま新都心",
                "hiragana" => "さいたましんとしん",
                "katakana" => "サイタマシントシン",
                "katakana_half" => "ｻｲﾀﾏｼﾝﾄｼﾝ",
                "romaji" => "saitamashintoshin",
                "memo" => "",
                "latitude" => "35.893840",
                "altitude" => "139.633569",
            ]);
            
            Station::create([
                "id" => 1854,
                "prefecture_id" => 11,
                "city_id" => 524,
                "street_id" => 30505,
                "name" => "土呂",
                "hiragana" => "とろ",
                "katakana" => "トロ",
                "katakana_half" => "ﾄﾛ",
                "romaji" => "toro",
                "memo" => "",
                "latitude" => "35.931725",
                "altitude" => "139.632207",
            ]);
            
            Station::create([
                "id" => 1855,
                "prefecture_id" => 11,
                "city_id" => 526,
                "street_id" => 30559,
                "name" => "東大宮",
                "hiragana" => "ひがしおおみや",
                "katakana" => "ヒガシオオミヤ",
                "katakana_half" => "ﾋｶﾞｼｵｵﾐﾔ",
                "romaji" => "higashioomiya",
                "memo" => "",
                "latitude" => "35.948723",
                "altitude" => "139.640316",
            ]);
            
            Station::create([
                "id" => 1856,
                "prefecture_id" => 11,
                "city_id" => 564,
                "street_id" => null,
                "name" => "蓮田",
                "hiragana" => "はすだ",
                "katakana" => "ハスダ",
                "katakana_half" => "ﾊｽﾀﾞ",
                "romaji" => "hasuda",
                "memo" => "",
                "latitude" => "35.981248",
                "altitude" => "139.652897",
            ]);
            
            Station::create([
                "id" => 1857,
                "prefecture_id" => 11,
                "city_id" => 571,
                "street_id" => null,
                "name" => "白岡",
                "hiragana" => "しらおか",
                "katakana" => "シラオカ",
                "katakana_half" => "ｼﾗｵｶ",
                "romaji" => "shiraoka",
                "memo" => "",
                "latitude" => "36.017411",
                "altitude" => "139.666810",
            ]);
            
            Station::create([
                "id" => 1858,
                "prefecture_id" => 11,
                "city_id" => 571,
                "street_id" => 32966,
                "name" => "新白岡",
                "hiragana" => "しんしらおか",
                "katakana" => "シンシラオカ",
                "katakana_half" => "ｼﾝｼﾗｵｶ",
                "romaji" => "shinshiraoka",
                "memo" => "",
                "latitude" => "36.038714",
                "altitude" => "139.672115",
            ]);
            
            Station::create([
                "id" => 1859,
                "prefecture_id" => 11,
                "city_id" => 559,
                "street_id" => null,
                "name" => "久喜",
                "hiragana" => "くき",
                "katakana" => "クキ",
                "katakana_half" => "ｸｷ",
                "romaji" => "kuki",
                "memo" => "",
                "latitude" => "36.065684",
                "altitude" => "139.677614",
            ]);
            
            Station::create([
                "id" => 1860,
                "prefecture_id" => 11,
                "city_id" => 542,
                "street_id" => null,
                "name" => "東鷲宮",
                "hiragana" => "ひがしわしのみや",
                "katakana" => "ヒガシワシノミヤ",
                "katakana_half" => "ﾋｶﾞｼﾜｼﾉﾐﾔ",
                "romaji" => "higashiwashinomiya",
                "memo" => "",
                "latitude" => "36.089459",
                "altitude" => "139.679223",
            ]);
            
            Station::create([
                "id" => 1861,
                "prefecture_id" => 11,
                "city_id" => 559,
                "street_id" => 32468,
                "name" => "栗橋",
                "hiragana" => "くりはし",
                "katakana" => "クリハシ",
                "katakana_half" => "ｸﾘﾊｼ",
                "romaji" => "kurihashi",
                "memo" => "",
                "latitude" => "36.136788",
                "altitude" => "139.694219",
            ]);
            
            Station::create([
                "id" => 1862,
                "prefecture_id" => 11,
                "city_id" => 538,
                "street_id" => 31395,
                "name" => "東所沢",
                "hiragana" => "ひがしところざわ",
                "katakana" => "ヒガシトコロザワ",
                "katakana_half" => "ﾋｶﾞｼﾄｺﾛｻﾞﾜ",
                "romaji" => "higashitokorozawa",
                "memo" => "",
                "latitude" => "35.794599",
                "altitude" => "139.513806",
            ]);
            
            Station::create([
                "id" => 1863,
                "prefecture_id" => 11,
                "city_id" => 557,
                "street_id" => null,
                "name" => "新座",
                "hiragana" => "にいざ",
                "katakana" => "ニイザ",
                "katakana_half" => "ﾆｲｻﾞ",
                "romaji" => "niiza",
                "memo" => "",
                "latitude" => "35.803766",
                "altitude" => "139.556247",
            ]);
            
            Station::create([
                "id" => 1864,
                "prefecture_id" => 11,
                "city_id" => 524,
                "street_id" => null,
                "name" => "北朝霞",
                "hiragana" => "きたあさか",
                "katakana" => "キタアサカ",
                "katakana_half" => "ｷﾀｱｻｶ",
                "romaji" => "kitaasaka",
                "memo" => "",
                "latitude" => "35.815403",
                "altitude" => "139.587188",
            ]);
            
            Station::create([
                "id" => 1865,
                "prefecture_id" => 11,
                "city_id" => 523,
                "street_id" => null,
                "name" => "西浦和",
                "hiragana" => "にしうらわ",
                "katakana" => "ニシウラワ",
                "katakana_half" => "ﾆｼｳﾗﾜ",
                "romaji" => "nishiurawa",
                "memo" => "",
                "latitude" => "35.844206",
                "altitude" => "139.627906",
            ]);
            
            Station::create([
                "id" => 1866,
                "prefecture_id" => 11,
                "city_id" => 547,
                "street_id" => 32081,
                "name" => "武蔵浦和",
                "hiragana" => "むさしうらわ",
                "katakana" => "ムサシウラワ",
                "katakana_half" => "ﾑｻｼｳﾗﾜ",
                "romaji" => "musashiurawa",
                "memo" => "",
                "latitude" => "35.845624",
                "altitude" => "139.646654",
            ]);
            
            Station::create([
                "id" => 1867,
                "prefecture_id" => 11,
                "city_id" => 530,
                "street_id" => 30686,
                "name" => "南浦和",
                "hiragana" => "みなみうらわ",
                "katakana" => "ミナミウラワ",
                "katakana_half" => "ﾐﾅﾐｳﾗﾜ",
                "romaji" => "minamiurawa",
                "memo" => "",
                "latitude" => "35.847679",
                "altitude" => "139.669152",
            ]);
            
            Station::create([
                "id" => 1868,
                "prefecture_id" => 11,
                "city_id" => 531,
                "street_id" => 30715,
                "name" => "東浦和",
                "hiragana" => "ひがしうらわ",
                "katakana" => "ヒガシウラワ",
                "katakana_half" => "ﾋｶﾞｼｳﾗﾜ",
                "romaji" => "higashiurawa",
                "memo" => "",
                "latitude" => "35.864122",
                "altitude" => "139.704647",
            ]);
            
            Station::create([
                "id" => 1869,
                "prefecture_id" => 11,
                "city_id" => 535,
                "street_id" => 31189,
                "name" => "東川口",
                "hiragana" => "ひがしかわぐち",
                "katakana" => "ヒガシカワグチ",
                "katakana_half" => "ﾋｶﾞｼｶﾜｸﾞﾁ",
                "romaji" => "higashikawaguchi",
                "memo" => "",
                "latitude" => "35.875233",
                "altitude" => "139.744145",
            ]);
            
            Station::create([
                "id" => 1870,
                "prefecture_id" => 11,
                "city_id" => 550,
                "street_id" => 32261,
                "name" => "南越谷",
                "hiragana" => "みなみこしがや",
                "katakana" => "ミナミコシガヤ",
                "katakana_half" => "ﾐﾅﾐｺｼｶﾞﾔ",
                "romaji" => "minamikoshigaya",
                "memo" => "",
                "latitude" => "35.875984",
                "altitude" => "139.791224",
            ]);
            
            Station::create([
                "id" => 1871,
                "prefecture_id" => 11,
                "city_id" => 550,
                "street_id" => null,
                "name" => "越谷レイクタウン",
                "hiragana" => "こしがやれいくたうん",
                "katakana" => "コシガヤレイクタウン",
                "katakana_half" => "ｺｼｶﾞﾔﾚｲｸﾀｳﾝ",
                "romaji" => "koshigayareikutaun",
                "memo" => "",
                "latitude" => "35.876290",
                "altitude" => "139.822194",
            ]);
            
            Station::create([
                "id" => 1872,
                "prefecture_id" => 11,
                "city_id" => 569,
                "street_id" => null,
                "name" => "吉川",
                "hiragana" => "よしかわ",
                "katakana" => "ヨシカワ",
                "katakana_half" => "ﾖｼｶﾜ",
                "romaji" => "yoshikawa",
                "memo" => "",
                "latitude" => "35.876541",
                "altitude" => "139.843442",
            ]);
            
            Station::create([
                "id" => 1873,
                "prefecture_id" => 11,
                "city_id" => 569,
                "street_id" => null,
                "name" => "吉川美南",
                "hiragana" => "よしかわみなみ",
                "katakana" => "ヨシカワミナミ",
                "katakana_half" => "ﾖｼｶﾜﾐﾅﾐ",
                "romaji" => "yoshikawaminami",
                "memo" => "",
                "latitude" => "35.868070",
                "altitude" => "139.858163",
            ]);
            
            Station::create([
                "id" => 1874,
                "prefecture_id" => 11,
                "city_id" => 563,
                "street_id" => 32616,
                "name" => "新三郷",
                "hiragana" => "しんみさと",
                "katakana" => "シンミサト",
                "katakana_half" => "ｼﾝﾐｻﾄ",
                "romaji" => "shinmisato",
                "memo" => "",
                "latitude" => "35.858626",
                "altitude" => "139.869356",
            ]);
            
            Station::create([
                "id" => 1875,
                "prefecture_id" => 11,
                "city_id" => 563,
                "street_id" => null,
                "name" => "三郷",
                "hiragana" => "みさと",
                "katakana" => "ミサト",
                "katakana_half" => "ﾐｻﾄ",
                "romaji" => "misato",
                "memo" => "埼玉県",
                "latitude" => "35.844878",
                "altitude" => "139.886773",
            ]);
            
            Station::create([
                "id" => 1876,
                "prefecture_id" => 11,
                "city_id" => 524,
                "street_id" => 30513,
                "name" => "宮原",
                "hiragana" => "みやはら",
                "katakana" => "ミヤハラ",
                "katakana_half" => "ﾐﾔﾊﾗ",
                "romaji" => "miyahara",
                "memo" => "",
                "latitude" => "35.940252",
                "altitude" => "139.609569",
            ]);
            
            Station::create([
                "id" => 1877,
                "prefecture_id" => 11,
                "city_id" => 548,
                "street_id" => null,
                "name" => "上尾",
                "hiragana" => "あげお",
                "katakana" => "アゲオ",
                "katakana_half" => "ｱｹﾞｵ",
                "romaji" => "ageo",
                "memo" => "",
                "latitude" => "35.973526",
                "altitude" => "139.588459",
            ]);
            
            Station::create([
                "id" => 1878,
                "prefecture_id" => 11,
                "city_id" => 524,
                "street_id" => null,
                "name" => "北上尾",
                "hiragana" => "きたあげお",
                "katakana" => "キタアゲオ",
                "katakana_half" => "ｷﾀｱｹﾞｵ",
                "romaji" => "kitaageo",
                "memo" => "",
                "latitude" => "35.985635",
                "altitude" => "139.577236",
            ]);
            
            Station::create([
                "id" => 1879,
                "prefecture_id" => 11,
                "city_id" => 558,
                "street_id" => null,
                "name" => "桶川",
                "hiragana" => "おけがわ",
                "katakana" => "オケガワ",
                "katakana_half" => "ｵｹｶﾞﾜ",
                "romaji" => "okegawa",
                "memo" => "",
                "latitude" => "35.998800",
                "altitude" => "139.564042",
            ]);
            
            Station::create([
                "id" => 1880,
                "prefecture_id" => 11,
                "city_id" => 560,
                "street_id" => null,
                "name" => "北本",
                "hiragana" => "きたもと",
                "katakana" => "キタモト",
                "katakana_half" => "ｷﾀﾓﾄ",
                "romaji" => "kitamoto",
                "memo" => "",
                "latitude" => "36.031601",
                "altitude" => "139.533988",
            ]);
            
            Station::create([
                "id" => 1881,
                "prefecture_id" => 11,
                "city_id" => 546,
                "street_id" => null,
                "name" => "鴻巣",
                "hiragana" => "こうのす",
                "katakana" => "コウノス",
                "katakana_half" => "ｺｳﾉｽ",
                "romaji" => "kounosu",
                "memo" => "",
                "latitude" => "36.059237",
                "altitude" => "139.509655",
            ]);
            
            Station::create([
                "id" => 1882,
                "prefecture_id" => 11,
                "city_id" => 524,
                "street_id" => null,
                "name" => "北鴻巣",
                "hiragana" => "きたこうのす",
                "katakana" => "キタコウノス",
                "katakana_half" => "ｷﾀｺｳﾉｽ",
                "romaji" => "kitakounosu",
                "memo" => "",
                "latitude" => "36.085567",
                "altitude" => "139.477046",
            ]);
            
            Station::create([
                "id" => 1883,
                "prefecture_id" => 11,
                "city_id" => 546,
                "street_id" => 31967,
                "name" => "吹上",
                "hiragana" => "ふきあげ",
                "katakana" => "フキアゲ",
                "katakana_half" => "ﾌｷｱｹﾞ",
                "romaji" => "fukiage",
                "memo" => "埼玉県",
                "latitude" => "36.103232",
                "altitude" => "139.453158",
            ]);
            
            Station::create([
                "id" => 1884,
                "prefecture_id" => 11,
                "city_id" => 536,
                "street_id" => null,
                "name" => "行田",
                "hiragana" => "ぎょうだ",
                "katakana" => "ギョウダ",
                "katakana_half" => "ｷﾞｮｳﾀﾞ",
                "romaji" => "gyouda",
                "memo" => "",
                "latitude" => "36.113869",
                "altitude" => "139.432270",
            ]);
            
            Station::create([
                "id" => 1885,
                "prefecture_id" => 11,
                "city_id" => 534,
                "street_id" => 30981,
                "name" => "籠原",
                "hiragana" => "かごはら",
                "katakana" => "カゴハラ",
                "katakana_half" => "ｶｺﾞﾊﾗ",
                "romaji" => "kagohara",
                "memo" => "",
                "latitude" => "36.174666",
                "altitude" => "139.330526",
            ]);
            
            Station::create([
                "id" => 1886,
                "prefecture_id" => 11,
                "city_id" => 547,
                "street_id" => null,
                "name" => "深谷",
                "hiragana" => "ふかや",
                "katakana" => "フカヤ",
                "katakana_half" => "ﾌｶﾔ",
                "romaji" => "fukaya",
                "memo" => "",
                "latitude" => "36.191497",
                "altitude" => "139.281001",
            ]);
            
            Station::create([
                "id" => 1887,
                "prefecture_id" => 11,
                "city_id" => 547,
                "street_id" => 32003,
                "name" => "岡部",
                "hiragana" => "おかべ",
                "katakana" => "オカベ",
                "katakana_half" => "ｵｶﾍﾞ",
                "romaji" => "okabe",
                "memo" => "",
                "latitude" => "36.205883",
                "altitude" => "139.237644",
            ]);
            
            Station::create([
                "id" => 1888,
                "prefecture_id" => 11,
                "city_id" => 541,
                "street_id" => null,
                "name" => "本庄",
                "hiragana" => "ほんじょう",
                "katakana" => "ホンジョウ",
                "katakana_half" => "ﾎﾝｼﾞｮｳ",
                "romaji" => "honjou",
                "memo" => "",
                "latitude" => "36.236129",
                "altitude" => "139.188619",
            ]);
            
            Station::create([
                "id" => 1889,
                "prefecture_id" => 11,
                "city_id" => 590,
                "street_id" => 33331,
                "name" => "神保原",
                "hiragana" => "じんぼはら",
                "katakana" => "ジンボハラ",
                "katakana_half" => "ｼﾞﾝﾎﾞﾊﾗ",
                "romaji" => "jinbohara",
                "memo" => "",
                "latitude" => "36.253738",
                "altitude" => "139.149287",
            ]);
            
            Station::create([
                "id" => 1890,
                "prefecture_id" => 11,
                "city_id" => 553,
                "street_id" => 32311,
                "name" => "金子",
                "hiragana" => "かねこ",
                "katakana" => "カネコ",
                "katakana_half" => "ｶﾈｺ",
                "romaji" => "kaneko",
                "memo" => "",
                "latitude" => "35.811038",
                "altitude" => "139.328682",
            ]);
            
            Station::create([
                "id" => 1891,
                "prefecture_id" => 11,
                "city_id" => 542,
                "street_id" => null,
                "name" => "東飯能",
                "hiragana" => "ひがしはんのう",
                "katakana" => "ヒガシハンノウ",
                "katakana_half" => "ﾋｶﾞｼﾊﾝﾉｳ",
                "romaji" => "higashihannou",
                "memo" => "",
                "latitude" => "35.852672",
                "altitude" => "139.325986",
            ]);
            
            Station::create([
                "id" => 1892,
                "prefecture_id" => 11,
                "city_id" => 568,
                "street_id" => 32823,
                "name" => "高麗川",
                "hiragana" => "こまがわ",
                "katakana" => "コマガワ",
                "katakana_half" => "ｺﾏｶﾞﾜ",
                "romaji" => "komagawa",
                "memo" => "",
                "latitude" => "35.896279",
                "altitude" => "139.337954",
            ]);
            
            Station::create([
                "id" => 1893,
                "prefecture_id" => 11,
                "city_id" => 574,
                "street_id" => null,
                "name" => "毛呂",
                "hiragana" => "もろ",
                "katakana" => "モロ",
                "katakana_half" => "ﾓﾛ",
                "romaji" => "moro",
                "memo" => "",
                "latitude" => "35.940413",
                "altitude" => "139.309288",
            ]);
            
            Station::create([
                "id" => 1894,
                "prefecture_id" => 11,
                "city_id" => 575,
                "street_id" => null,
                "name" => "越生",
                "hiragana" => "おごせ",
                "katakana" => "オゴセ",
                "katakana_half" => "ｵｺﾞｾ",
                "romaji" => "ogose",
                "memo" => "",
                "latitude" => "35.962160",
                "altitude" => "139.299344",
            ]);
            
            Station::create([
                "id" => 1895,
                "prefecture_id" => 11,
                "city_id" => 527,
                "street_id" => 30582,
                "name" => "明覚",
                "hiragana" => "みょうかく",
                "katakana" => "ミョウカク",
                "katakana_half" => "ﾐｮｳｶｸ",
                "romaji" => "myoukaku",
                "memo" => "",
                "latitude" => "36.003295",
                "altitude" => "139.288787",
            ]);
            
            Station::create([
                "id" => 1896,
                "prefecture_id" => 11,
                "city_id" => 578,
                "street_id" => null,
                "name" => "小川町",
                "hiragana" => "おがわまち",
                "katakana" => "オガワマチ",
                "katakana_half" => "ｵｶﾞﾜﾏﾁ",
                "romaji" => "ogawamachi",
                "memo" => "埼玉県",
                "latitude" => "36.058455",
                "altitude" => "139.261121",
            ]);
            
            Station::create([
                "id" => 1897,
                "prefecture_id" => 11,
                "city_id" => 524,
                "street_id" => 30500,
                "name" => "竹沢",
                "hiragana" => "たけざわ",
                "katakana" => "タケザワ",
                "katakana_half" => "ﾀｹｻﾞﾜ",
                "romaji" => "takezawa",
                "memo" => "",
                "latitude" => "36.075453",
                "altitude" => "139.229983",
            ]);
            
            Station::create([
                "id" => 1898,
                "prefecture_id" => 11,
                "city_id" => 591,
                "street_id" => 33345,
                "name" => "折原",
                "hiragana" => "おりはら",
                "katakana" => "オリハラ",
                "katakana_half" => "ｵﾘﾊﾗ",
                "romaji" => "orihara",
                "memo" => "",
                "latitude" => "36.096310",
                "altitude" => "139.195208",
            ]);
            
            Station::create([
                "id" => 1899,
                "prefecture_id" => 11,
                "city_id" => 591,
                "street_id" => null,
                "name" => "寄居",
                "hiragana" => "よりい",
                "katakana" => "ヨリイ",
                "katakana_half" => "ﾖﾘｲ",
                "romaji" => "yorii",
                "memo" => "",
                "latitude" => "36.117892",
                "altitude" => "139.194512",
            ]);
            
            Station::create([
                "id" => 1900,
                "prefecture_id" => 11,
                "city_id" => 591,
                "street_id" => 33363,
                "name" => "用土",
                "hiragana" => "ようど",
                "katakana" => "ヨウド",
                "katakana_half" => "ﾖｳﾄﾞ",
                "romaji" => "youdo",
                "memo" => "",
                "latitude" => "36.153471",
                "altitude" => "139.200871",
            ]);
            
            Station::create([
                "id" => 1901,
                "prefecture_id" => 11,
                "city_id" => 542,
                "street_id" => null,
                "name" => "松久",
                "hiragana" => "まつひさ",
                "katakana" => "マツヒサ",
                "katakana_half" => "ﾏﾂﾋｻ",
                "romaji" => "matsuhisa",
                "memo" => "",
                "latitude" => "36.172969",
                "altitude" => "139.182150",
            ]);
            
            Station::create([
                "id" => 1902,
                "prefecture_id" => 11,
                "city_id" => 588,
                "street_id" => null,
                "name" => "児玉",
                "hiragana" => "こだま",
                "katakana" => "コダマ",
                "katakana_half" => "ｺﾀﾞﾏ",
                "romaji" => "kodama",
                "memo" => "",
                "latitude" => "36.192633",
                "altitude" => "139.135847",
            ]);
            
            Station::create([
                "id" => 1903,
                "prefecture_id" => 11,
                "city_id" => 563,
                "street_id" => 32622,
                "name" => "丹荘",
                "hiragana" => "たんしょう",
                "katakana" => "タンショウ",
                "katakana_half" => "ﾀﾝｼｮｳ",
                "romaji" => "tanshou",
                "memo" => "",
                "latitude" => "36.216852",
                "altitude" => "139.102265",
            ]);
            
            Station::create([
                "id" => 1904,
                "prefecture_id" => 11,
                "city_id" => 524,
                "street_id" => 30507,
                "name" => "日進",
                "hiragana" => "にっしん",
                "katakana" => "ニッシン",
                "katakana_half" => "ﾆｯｼﾝ",
                "romaji" => "nisshin",
                "memo" => "埼玉県",
                "latitude" => "35.931558",
                "altitude" => "139.606180",
            ]);
            
            Station::create([
                "id" => 1905,
                "prefecture_id" => 11,
                "city_id" => 523,
                "street_id" => 30489,
                "name" => "西大宮",
                "hiragana" => "にしおおみや",
                "katakana" => "ニシオオミヤ",
                "katakana_half" => "ﾆｼｵｵﾐﾔ",
                "romaji" => "nishioomiya",
                "memo" => "",
                "latitude" => "35.922308",
                "altitude" => "139.579878",
            ]);
            
            Station::create([
                "id" => 1906,
                "prefecture_id" => 11,
                "city_id" => 523,
                "street_id" => 30473,
                "name" => "指扇",
                "hiragana" => "さしおうぎ",
                "katakana" => "サシオウギ",
                "katakana_half" => "ｻｼｵｳｷﾞ",
                "romaji" => "sashiougi",
                "memo" => "",
                "latitude" => "35.917142",
                "altitude" => "139.565102",
            ]);
            
            Station::create([
                "id" => 1907,
                "prefecture_id" => 11,
                "city_id" => 530,
                "street_id" => null,
                "name" => "南古谷",
                "hiragana" => "みなみふるや",
                "katakana" => "ミナミフルヤ",
                "katakana_half" => "ﾐﾅﾐﾌﾙﾔ",
                "romaji" => "minamifuruya",
                "memo" => "",
                "latitude" => "35.903226",
                "altitude" => "139.519440",
            ]);
            
            Station::create([
                "id" => 1908,
                "prefecture_id" => 11,
                "city_id" => 533,
                "street_id" => null,
                "name" => "川越",
                "hiragana" => "かわごえ",
                "katakana" => "カワゴエ",
                "katakana_half" => "ｶﾜｺﾞｴ",
                "romaji" => "kawagoe",
                "memo" => "",
                "latitude" => "35.906975",
                "altitude" => "139.482915",
            ]);
            
            Station::create([
                "id" => 1909,
                "prefecture_id" => 11,
                "city_id" => 535,
                "street_id" => 31179,
                "name" => "西川越",
                "hiragana" => "にしかわごえ",
                "katakana" => "ニシカワゴエ",
                "katakana_half" => "ﾆｼｶﾜｺﾞｴ",
                "romaji" => "nishikawagoe",
                "memo" => "",
                "latitude" => "35.919168",
                "altitude" => "139.459499",
            ]);
            
            Station::create([
                "id" => 1910,
                "prefecture_id" => 11,
                "city_id" => 533,
                "street_id" => 30932,
                "name" => "的場",
                "hiragana" => "まとば",
                "katakana" => "マトバ",
                "katakana_half" => "ﾏﾄﾊﾞ",
                "romaji" => "matoba",
                "memo" => "",
                "latitude" => "35.917640",
                "altitude" => "139.436084",
            ]);
            
            Station::create([
                "id" => 1911,
                "prefecture_id" => 11,
                "city_id" => 533,
                "street_id" => 30827,
                "name" => "笠幡",
                "hiragana" => "かさはた",
                "katakana" => "カサハタ",
                "katakana_half" => "ｶｻﾊﾀ",
                "romaji" => "kasahata",
                "memo" => "",
                "latitude" => "35.907557",
                "altitude" => "139.406476",
            ]);
            
            Station::create([
                "id" => 1912,
                "prefecture_id" => 11,
                "city_id" => 547,
                "street_id" => 32081,
                "name" => "武蔵高萩",
                "hiragana" => "むさしたかはぎ",
                "katakana" => "ムサシタカハギ",
                "katakana_half" => "ﾑｻｼﾀｶﾊｷﾞ",
                "romaji" => "musashitakahagi",
                "memo" => "",
                "latitude" => "35.901751",
                "altitude" => "139.371479",
            ]);
            
            Station::create([
                "id" => 1913,
                "prefecture_id" => 11,
                "city_id" => 552,
                "street_id" => 32291,
                "name" => "戸田公園",
                "hiragana" => "とだこうえん",
                "katakana" => "トダコウエン",
                "katakana_half" => "ﾄﾀﾞｺｳｴﾝ",
                "romaji" => "todakouen",
                "memo" => "",
                "latitude" => "35.808045",
                "altitude" => "139.678042",
            ]);
            
            Station::create([
                "id" => 1914,
                "prefecture_id" => 11,
                "city_id" => 552,
                "street_id" => null,
                "name" => "戸田",
                "hiragana" => "とだ",
                "katakana" => "トダ",
                "katakana_half" => "ﾄﾀﾞ",
                "romaji" => "toda",
                "memo" => "埼玉県",
                "latitude" => "35.817655",
                "altitude" => "139.669597",
            ]);
            
            Station::create([
                "id" => 1915,
                "prefecture_id" => 11,
                "city_id" => 524,
                "street_id" => null,
                "name" => "北戸田",
                "hiragana" => "きたとだ",
                "katakana" => "キタトダ",
                "katakana_half" => "ｷﾀﾄﾀﾞ",
                "romaji" => "kitatoda",
                "memo" => "",
                "latitude" => "35.827515",
                "altitude" => "139.660237",
            ]);
            
            Station::create([
                "id" => 1916,
                "prefecture_id" => 11,
                "city_id" => 527,
                "street_id" => null,
                "name" => "中浦和",
                "hiragana" => "なかうらわ",
                "katakana" => "ナカウラワ",
                "katakana_half" => "ﾅｶｳﾗﾜ",
                "romaji" => "nakaurawa",
                "memo" => "",
                "latitude" => "35.853901",
                "altitude" => "139.637321",
            ]);
            
            Station::create([
                "id" => 1917,
                "prefecture_id" => 11,
                "city_id" => 530,
                "street_id" => null,
                "name" => "南与野",
                "hiragana" => "みなみよの",
                "katakana" => "ミナミヨノ",
                "katakana_half" => "ﾐﾅﾐﾖﾉ",
                "romaji" => "minamiyono",
                "memo" => "",
                "latitude" => "35.867427",
                "altitude" => "139.631209",
            ]);
            
            Station::create([
                "id" => 1918,
                "prefecture_id" => 11,
                "city_id" => 545,
                "street_id" => 31907,
                "name" => "与野本町",
                "hiragana" => "よのほんまち",
                "katakana" => "ヨノホンマチ",
                "katakana_half" => "ﾖﾉﾎﾝﾏﾁ",
                "romaji" => "yonohonmachi",
                "memo" => "",
                "latitude" => "35.881147",
                "altitude" => "139.626042",
            ]);
            
            Station::create([
                "id" => 1919,
                "prefecture_id" => 11,
                "city_id" => 524,
                "street_id" => null,
                "name" => "北与野",
                "hiragana" => "きたよの",
                "katakana" => "キタヨノ",
                "katakana_half" => "ｷﾀﾖﾉ",
                "romaji" => "kitayono",
                "memo" => "",
                "latitude" => "35.890813",
                "altitude" => "139.628680",
            ]);
            
            Station::create([
                "id" => 1920,
                "prefecture_id" => 11,
                "city_id" => 545,
                "street_id" => 31907,
                "name" => "与野",
                "hiragana" => "よの",
                "katakana" => "ヨノ",
                "katakana_half" => "ﾖﾉ",
                "romaji" => "yono",
                "memo" => "",
                "latitude" => "35.884314",
                "altitude" => "139.639014",
            ]);
            
            Station::create([
                "id" => 1921,
                "prefecture_id" => 11,
                "city_id" => 529,
                "street_id" => 30649,
                "name" => "北浦和",
                "hiragana" => "きたうらわ",
                "katakana" => "キタウラワ",
                "katakana_half" => "ｷﾀｳﾗﾜ",
                "romaji" => "kitaurawa",
                "memo" => "",
                "latitude" => "35.872149",
                "altitude" => "139.646208",
            ]);
            
            Station::create([
                "id" => 1922,
                "prefecture_id" => 11,
                "city_id" => 551,
                "street_id" => null,
                "name" => "蕨",
                "hiragana" => "わらび",
                "katakana" => "ワラビ",
                "katakana_half" => "ﾜﾗﾋﾞ",
                "romaji" => "warabi",
                "memo" => "",
                "latitude" => "35.828153",
                "altitude" => "139.690457",
            ]);
            
            Station::create([
                "id" => 1923,
                "prefecture_id" => 11,
                "city_id" => 535,
                "street_id" => 31179,
                "name" => "西川口",
                "hiragana" => "にしかわぐち",
                "katakana" => "ニシカワグチ",
                "katakana_half" => "ﾆｼｶﾜｸﾞﾁ",
                "romaji" => "nishikawaguchi",
                "memo" => "",
                "latitude" => "35.815711",
                "altitude" => "139.704400",
            ]);
            
            Station::create([
                "id" => 1924,
                "prefecture_id" => 11,
                "city_id" => 535,
                "street_id" => null,
                "name" => "川口",
                "hiragana" => "かわぐち",
                "katakana" => "カワグチ",
                "katakana_half" => "ｶﾜｸﾞﾁ",
                "romaji" => "kawaguchi",
                "memo" => "",
                "latitude" => "35.801880",
                "altitude" => "139.717566",
            ]);
            
            Station::create([
                "id" => 1925,
                "prefecture_id" => 11,
                "city_id" => 549,
                "street_id" => 32185,
                "name" => "谷塚",
                "hiragana" => "やつか",
                "katakana" => "ヤツカ",
                "katakana_half" => "ﾔﾂｶ",
                "romaji" => "yatsuka",
                "memo" => "",
                "latitude" => "35.814157",
                "altitude" => "139.801308",
            ]);
            
            Station::create([
                "id" => 1926,
                "prefecture_id" => 11,
                "city_id" => 549,
                "street_id" => null,
                "name" => "草加",
                "hiragana" => "そうか",
                "katakana" => "ソウカ",
                "katakana_half" => "ｿｳｶ",
                "romaji" => "souka",
                "memo" => "",
                "latitude" => "35.828490",
                "altitude" => "139.803447",
            ]);
            
            Station::create([
                "id" => 1927,
                "prefecture_id" => 11,
                "city_id" => 523,
                "street_id" => null,
                "name" => "獨協大学前",
                "hiragana" => "どっきょうだいがくまえ",
                "katakana" => "ドッキョウダイガクマエ",
                "katakana_half" => "ﾄﾞｯｷｮｳﾀﾞｲｶﾞｸﾏｴ",
                "romaji" => "dokkyoudaigakumae",
                "memo" => "",
                "latitude" => "35.843182",
                "altitude" => "139.800724",
            ]);
            
            Station::create([
                "id" => 1928,
                "prefecture_id" => 11,
                "city_id" => 523,
                "street_id" => 30469,
                "name" => "新田",
                "hiragana" => "しんでん",
                "katakana" => "シンデン",
                "katakana_half" => "ｼﾝﾃﾞﾝ",
                "romaji" => "shinden",
                "memo" => "埼玉県",
                "latitude" => "35.853875",
                "altitude" => "139.795724",
            ]);
            
            Station::create([
                "id" => 1929,
                "prefecture_id" => 11,
                "city_id" => 550,
                "street_id" => 32214,
                "name" => "蒲生",
                "hiragana" => "がもう",
                "katakana" => "ガモウ",
                "katakana_half" => "ｶﾞﾓｳ",
                "romaji" => "gamou",
                "memo" => "",
                "latitude" => "35.867013",
                "altitude" => "139.791641",
            ]);
            
            Station::create([
                "id" => 1930,
                "prefecture_id" => 11,
                "city_id" => 550,
                "street_id" => 32237,
                "name" => "新越谷",
                "hiragana" => "しんこしがや",
                "katakana" => "シンコシガヤ",
                "katakana_half" => "ｼﾝｺｼｶﾞﾔ",
                "romaji" => "shinkoshigaya",
                "memo" => "",
                "latitude" => "35.875178",
                "altitude" => "139.789918",
            ]);
            
            Station::create([
                "id" => 1931,
                "prefecture_id" => 11,
                "city_id" => 550,
                "street_id" => null,
                "name" => "越谷",
                "hiragana" => "こしがや",
                "katakana" => "コシガヤ",
                "katakana_half" => "ｺｼｶﾞﾔ",
                "romaji" => "koshigaya",
                "memo" => "",
                "latitude" => "35.888260",
                "altitude" => "139.786057",
            ]);
            
            Station::create([
                "id" => 1932,
                "prefecture_id" => 11,
                "city_id" => 550,
                "street_id" => 32227,
                "name" => "北越谷",
                "hiragana" => "きたこしがや",
                "katakana" => "キタコシガヤ",
                "katakana_half" => "ｷﾀｺｼｶﾞﾔ",
                "romaji" => "kitakoshigaya",
                "memo" => "",
                "latitude" => "35.902036",
                "altitude" => "139.779917",
            ]);
            
            Station::create([
                "id" => 1933,
                "prefecture_id" => 11,
                "city_id" => 533,
                "street_id" => 30822,
                "name" => "大袋",
                "hiragana" => "おおぶくろ",
                "katakana" => "オオブクロ",
                "katakana_half" => "ｵｵﾌﾞｸﾛ",
                "romaji" => "oobukuro",
                "memo" => "",
                "latitude" => "35.924145",
                "altitude" => "139.777972",
            ]);
            
            Station::create([
                "id" => 1934,
                "prefecture_id" => 11,
                "city_id" => 523,
                "street_id" => null,
                "name" => "せんげん台",
                "hiragana" => "せんげんだい",
                "katakana" => "センゲンダイ",
                "katakana_half" => "ｾﾝｹﾞﾝﾀﾞｲ",
                "romaji" => "sengendai",
                "memo" => "",
                "latitude" => "35.935755",
                "altitude" => "139.774583",
            ]);
            
            Station::create([
                "id" => 1935,
                "prefecture_id" => 11,
                "city_id" => 543,
                "street_id" => 31785,
                "name" => "武里",
                "hiragana" => "たけさと",
                "katakana" => "タケサト",
                "katakana_half" => "ﾀｹｻﾄ",
                "romaji" => "takesato",
                "memo" => "",
                "latitude" => "35.949032",
                "altitude" => "139.770610",
            ]);
            
            Station::create([
                "id" => 1936,
                "prefecture_id" => 11,
                "city_id" => 543,
                "street_id" => 31748,
                "name" => "一ノ割",
                "hiragana" => "いちのわり",
                "katakana" => "イチノワリ",
                "katakana_half" => "ｲﾁﾉﾜﾘ",
                "romaji" => "ichinowari",
                "memo" => "",
                "latitude" => "35.964141",
                "altitude" => "139.766304",
            ]);
            
            Station::create([
                "id" => 1937,
                "prefecture_id" => 11,
                "city_id" => 543,
                "street_id" => null,
                "name" => "春日部",
                "hiragana" => "かすかべ",
                "katakana" => "カスカベ",
                "katakana_half" => "ｶｽｶﾍﾞ",
                "romaji" => "kasukabe",
                "memo" => "",
                "latitude" => "35.979750",
                "altitude" => "139.752361",
            ]);
            
            Station::create([
                "id" => 1938,
                "prefecture_id" => 11,
                "city_id" => 524,
                "street_id" => null,
                "name" => "北春日部",
                "hiragana" => "きたかすかべ",
                "katakana" => "キタカスカベ",
                "katakana_half" => "ｷﾀｶｽｶﾍﾞ",
                "romaji" => "kitakasukabe",
                "memo" => "",
                "latitude" => "35.990637",
                "altitude" => "139.744000",
            ]);
            
            Station::create([
                "id" => 1939,
                "prefecture_id" => 11,
                "city_id" => 592,
                "street_id" => 33381,
                "name" => "姫宮",
                "hiragana" => "ひめみや",
                "katakana" => "ヒメミヤ",
                "katakana_half" => "ﾋﾒﾐﾔ",
                "romaji" => "himemiya",
                "memo" => "",
                "latitude" => "36.004081",
                "altitude" => "139.738833",
            ]);
            
            Station::create([
                "id" => 1940,
                "prefecture_id" => 11,
                "city_id" => 542,
                "street_id" => null,
                "name" => "東武動物公園",
                "hiragana" => "とうぶどうぶつこうえん",
                "katakana" => "トウブドウブツコウエン",
                "katakana_half" => "ﾄｳﾌﾞﾄﾞｳﾌﾞﾂｺｳｴﾝ",
                "romaji" => "toubudoubutsukouen",
                "memo" => "",
                "latitude" => "36.024856",
                "altitude" => "139.726694",
            ]);
            
            Station::create([
                "id" => 1941,
                "prefecture_id" => 11,
                "city_id" => 593,
                "street_id" => null,
                "name" => "杉戸高野台",
                "hiragana" => "すぎとたかのだい",
                "katakana" => "スギトタカノダイ",
                "katakana_half" => "ｽｷﾞﾄﾀｶﾉﾀﾞｲ",
                "romaji" => "sugitotakanodai",
                "memo" => "",
                "latitude" => "36.051547",
                "altitude" => "139.714638",
            ]);
            
            Station::create([
                "id" => 1942,
                "prefecture_id" => 11,
                "city_id" => 566,
                "street_id" => null,
                "name" => "幸手",
                "hiragana" => "さって",
                "katakana" => "サッテ",
                "katakana_half" => "ｻｯﾃ",
                "romaji" => "satte",
                "memo" => "",
                "latitude" => "36.074545",
                "altitude" => "139.714859",
            ]);
            
            Station::create([
                "id" => 1943,
                "prefecture_id" => 11,
                "city_id" => 559,
                "street_id" => 32510,
                "name" => "南栗橋",
                "hiragana" => "みなみくりはし",
                "katakana" => "ミナミクリハシ",
                "katakana_half" => "ﾐﾅﾐｸﾘﾊｼ",
                "romaji" => "minamikurihashi",
                "memo" => "",
                "latitude" => "36.113180",
                "altitude" => "139.712886",
            ]);
            
            Station::create([
                "id" => 1944,
                "prefecture_id" => 11,
                "city_id" => 540,
                "street_id" => 31589,
                "name" => "新古河",
                "hiragana" => "しんこが",
                "katakana" => "シンコガ",
                "katakana_half" => "ｼﾝｺｶﾞ",
                "romaji" => "shinkoga",
                "memo" => "",
                "latitude" => "36.192726",
                "altitude" => "139.686913",
            ]);
            
            Station::create([
                "id" => 1945,
                "prefecture_id" => 11,
                "city_id" => 540,
                "street_id" => 31595,
                "name" => "柳生",
                "hiragana" => "やぎゅう",
                "katakana" => "ヤギュウ",
                "katakana_half" => "ﾔｷﾞｭｳ",
                "romaji" => "yagyuu",
                "memo" => "",
                "latitude" => "36.206641",
                "altitude" => "139.659553",
            ]);
            
            Station::create([
                "id" => 1946,
                "prefecture_id" => 11,
                "city_id" => 540,
                "street_id" => 31518,
                "name" => "北大宮",
                "hiragana" => "きたおおみや",
                "katakana" => "キタオオミヤ",
                "katakana_half" => "ｷﾀｵｵﾐﾔ",
                "romaji" => "kitaoomiya",
                "memo" => "",
                "latitude" => "35.917143",
                "altitude" => "139.624735",
            ]);
            
            Station::create([
                "id" => 1947,
                "prefecture_id" => 11,
                "city_id" => 525,
                "street_id" => null,
                "name" => "大宮公園",
                "hiragana" => "おおみやこうえん",
                "katakana" => "オオミヤコウエン",
                "katakana_half" => "ｵｵﾐﾔｺｳｴﾝ",
                "romaji" => "oomiyakouen",
                "memo" => "",
                "latitude" => "35.923504",
                "altitude" => "139.632179",
            ]);
            
            Station::create([
                "id" => 1948,
                "prefecture_id" => 11,
                "city_id" => 526,
                "street_id" => 30538,
                "name" => "大和田",
                "hiragana" => "おおわだ",
                "katakana" => "オオワダ",
                "katakana_half" => "ｵｵﾜﾀﾞ",
                "romaji" => "oowada",
                "memo" => "埼玉県",
                "latitude" => "35.929337",
                "altitude" => "139.650400",
            ]);
            
            Station::create([
                "id" => 1949,
                "prefecture_id" => 11,
                "city_id" => 550,
                "street_id" => 32234,
                "name" => "七里",
                "hiragana" => "ななさと",
                "katakana" => "ナナサト",
                "katakana_half" => "ﾅﾅｻﾄ",
                "romaji" => "nanasato",
                "memo" => "",
                "latitude" => "35.936281",
                "altitude" => "139.665759",
            ]);
            
            Station::create([
                "id" => 1950,
                "prefecture_id" => 11,
                "city_id" => 532,
                "street_id" => null,
                "name" => "岩槻",
                "hiragana" => "いわつき",
                "katakana" => "イワツキ",
                "katakana_half" => "ｲﾜﾂｷ",
                "romaji" => "iwatsuki",
                "memo" => "",
                "latitude" => "35.950085",
                "altitude" => "139.692923",
            ]);
            
            Station::create([
                "id" => 1951,
                "prefecture_id" => 11,
                "city_id" => 532,
                "street_id" => 30773,
                "name" => "東岩槻",
                "hiragana" => "ひがしいわつき",
                "katakana" => "ヒガシイワツキ",
                "katakana_half" => "ﾋｶﾞｼｲﾜﾂｷ",
                "romaji" => "higashiiwatsuki",
                "memo" => "",
                "latitude" => "35.963335",
                "altitude" => "139.712254",
            ]);
            
            Station::create([
                "id" => 1952,
                "prefecture_id" => 11,
                "city_id" => 533,
                "street_id" => 30893,
                "name" => "豊春",
                "hiragana" => "とよはる",
                "katakana" => "トヨハル",
                "katakana_half" => "ﾄﾖﾊﾙ",
                "romaji" => "toyoharu",
                "memo" => "",
                "latitude" => "35.967973",
                "altitude" => "139.726169",
            ]);
            
            Station::create([
                "id" => 1953,
                "prefecture_id" => 11,
                "city_id" => 543,
                "street_id" => 31797,
                "name" => "八木崎",
                "hiragana" => "やぎさき",
                "katakana" => "ヤギサキ",
                "katakana_half" => "ﾔｷﾞｻｷ",
                "romaji" => "yagisaki",
                "memo" => "",
                "latitude" => "35.978361",
                "altitude" => "139.741806",
            ]);
            
            Station::create([
                "id" => 1954,
                "prefecture_id" => 11,
                "city_id" => 533,
                "street_id" => 30920,
                "name" => "藤の牛島",
                "hiragana" => "ふじのうしじま",
                "katakana" => "フジノウシジマ",
                "katakana_half" => "ﾌｼﾞﾉｳｼｼﾞﾏ",
                "romaji" => "fujinoushijima",
                "memo" => "",
                "latitude" => "35.980167",
                "altitude" => "139.777665",
            ]);
            
            Station::create([
                "id" => 1955,
                "prefecture_id" => 11,
                "city_id" => 530,
                "street_id" => null,
                "name" => "南桜井",
                "hiragana" => "みなみさくらい",
                "katakana" => "ミナミサクライ",
                "katakana_half" => "ﾐﾅﾐｻｸﾗｲ",
                "romaji" => "minamisakurai",
                "memo" => "",
                "latitude" => "35.980445",
                "altitude" => "139.807995",
            ]);
            
            Station::create([
                "id" => 1956,
                "prefecture_id" => 11,
                "city_id" => 556,
                "street_id" => null,
                "name" => "和光市",
                "hiragana" => "わこうし",
                "katakana" => "ワコウシ",
                "katakana_half" => "ﾜｺｳｼ",
                "romaji" => "wakoushi",
                "memo" => "",
                "latitude" => "35.788434",
                "altitude" => "139.612354",
            ]);
            
            Station::create([
                "id" => 1957,
                "prefecture_id" => 11,
                "city_id" => 554,
                "street_id" => null,
                "name" => "朝霞",
                "hiragana" => "あさか",
                "katakana" => "アサカ",
                "katakana_half" => "ｱｻｶ",
                "romaji" => "asaka",
                "memo" => "",
                "latitude" => "35.797100",
                "altitude" => "139.600188",
            ]);
            
            Station::create([
                "id" => 1958,
                "prefecture_id" => 11,
                "city_id" => 554,
                "street_id" => null,
                "name" => "朝霞台",
                "hiragana" => "あさかだい",
                "katakana" => "アサカダイ",
                "katakana_half" => "ｱｻｶﾀﾞｲ",
                "romaji" => "asakadai",
                "memo" => "",
                "latitude" => "35.814625",
                "altitude" => "139.586855",
            ]);
            
            Station::create([
                "id" => 1959,
                "prefecture_id" => 11,
                "city_id" => 555,
                "street_id" => null,
                "name" => "志木",
                "hiragana" => "しき",
                "katakana" => "シキ",
                "katakana_half" => "ｼｷ",
                "romaji" => "shiki",
                "memo" => "",
                "latitude" => "35.822236",
                "altitude" => "139.575216",
            ]);
            
            Station::create([
                "id" => 1960,
                "prefecture_id" => 11,
                "city_id" => 526,
                "street_id" => 30542,
                "name" => "柳瀬川",
                "hiragana" => "やなせがわ",
                "katakana" => "ヤナセガワ",
                "katakana_half" => "ﾔﾅｾｶﾞﾜ",
                "romaji" => "yanasegawa",
                "memo" => "",
                "latitude" => "35.830679",
                "altitude" => "139.562022",
            ]);
            
            Station::create([
                "id" => 1961,
                "prefecture_id" => 11,
                "city_id" => 562,
                "street_id" => 32580,
                "name" => "みずほ台",
                "hiragana" => "みずほだい",
                "katakana" => "ミズホダイ",
                "katakana_half" => "ﾐｽﾞﾎﾀﾞｲ",
                "romaji" => "mizuhodai",
                "memo" => "",
                "latitude" => "35.838233",
                "altitude" => "139.550856",
            ]);
            
            Station::create([
                "id" => 1962,
                "prefecture_id" => 11,
                "city_id" => 562,
                "street_id" => 32576,
                "name" => "鶴瀬",
                "hiragana" => "つるせ",
                "katakana" => "ツルセ",
                "katakana_half" => "ﾂﾙｾ",
                "romaji" => "tsuruse",
                "memo" => "",
                "latitude" => "35.845788",
                "altitude" => "139.539496",
            ]);
            
            Station::create([
                "id" => 1963,
                "prefecture_id" => 11,
                "city_id" => 570,
                "street_id" => null,
                "name" => "ふじみ野",
                "hiragana" => "ふじみの",
                "katakana" => "フジミノ",
                "katakana_half" => "ﾌｼﾞﾐﾉ",
                "romaji" => "fujimino",
                "memo" => "",
                "latitude" => "35.860814",
                "altitude" => "139.523108",
            ]);
            
            Station::create([
                "id" => 1964,
                "prefecture_id" => 11,
                "city_id" => 570,
                "street_id" => 32913,
                "name" => "上福岡",
                "hiragana" => "かみふくおか",
                "katakana" => "カミフクオカ",
                "katakana_half" => "ｶﾐﾌｸｵｶ",
                "romaji" => "kamifukuoka",
                "memo" => "",
                "latitude" => "35.873896",
                "altitude" => "139.511691",
            ]);
            
            Station::create([
                "id" => 1965,
                "prefecture_id" => 11,
                "city_id" => 533,
                "street_id" => 30833,
                "name" => "新河岸",
                "hiragana" => "しんがし",
                "katakana" => "シンガシ",
                "katakana_half" => "ｼﾝｶﾞｼ",
                "romaji" => "shingashi",
                "memo" => "",
                "latitude" => "35.890643",
                "altitude" => "139.497275",
            ]);
            
            Station::create([
                "id" => 1966,
                "prefecture_id" => 11,
                "city_id" => 533,
                "street_id" => null,
                "name" => "川越市",
                "hiragana" => "かわごえし",
                "katakana" => "カワゴエシ",
                "katakana_half" => "ｶﾜｺﾞｴｼ",
                "romaji" => "kawagoeshi",
                "memo" => "",
                "latitude" => "35.914141",
                "altitude" => "139.477387",
            ]);
            
            Station::create([
                "id" => 1967,
                "prefecture_id" => 11,
                "city_id" => 533,
                "street_id" => 30829,
                "name" => "霞ケ関",
                "hiragana" => "かすみがせき",
                "katakana" => "カスミガセキ",
                "katakana_half" => "ｶｽﾐｶﾞｾｷ",
                "romaji" => "kasumigaseki",
                "memo" => "埼玉県",
                "latitude" => "35.925612",
                "altitude" => "139.443139",
            ]);
            
            Station::create([
                "id" => 1968,
                "prefecture_id" => 11,
                "city_id" => 561,
                "street_id" => 32556,
                "name" => "鶴ケ島",
                "hiragana" => "つるがしま",
                "katakana" => "ツルガシマ",
                "katakana_half" => "ﾂﾙｶﾞｼﾏ",
                "romaji" => "tsurugashima",
                "memo" => "",
                "latitude" => "35.936915",
                "altitude" => "139.423723",
            ]);
            
            Station::create([
                "id" => 1969,
                "prefecture_id" => 11,
                "city_id" => 536,
                "street_id" => 31273,
                "name" => "若葉",
                "hiragana" => "わかば",
                "katakana" => "ワカバ",
                "katakana_half" => "ﾜｶﾊﾞ",
                "romaji" => "wakaba",
                "memo" => "",
                "latitude" => "35.949108",
                "altitude" => "139.408752",
            ]);
            
            Station::create([
                "id" => 1970,
                "prefecture_id" => 11,
                "city_id" => 565,
                "street_id" => null,
                "name" => "坂戸",
                "hiragana" => "さかど",
                "katakana" => "サカド",
                "katakana_half" => "ｻｶﾄﾞ",
                "romaji" => "sakado",
                "memo" => "埼玉県",
                "latitude" => "35.957080",
                "altitude" => "139.393947",
            ]);
            
            Station::create([
                "id" => 1971,
                "prefecture_id" => 11,
                "city_id" => 524,
                "street_id" => null,
                "name" => "北坂戸",
                "hiragana" => "きたさかど",
                "katakana" => "キタサカド",
                "katakana_half" => "ｷﾀｻｶﾄﾞ",
                "romaji" => "kitasakado",
                "memo" => "",
                "latitude" => "35.972189",
                "altitude" => "139.396808",
            ]);
            
            Station::create([
                "id" => 1972,
                "prefecture_id" => 11,
                "city_id" => 542,
                "street_id" => 31716,
                "name" => "高坂",
                "hiragana" => "たかさか",
                "katakana" => "タカサカ",
                "katakana_half" => "ﾀｶｻｶ",
                "romaji" => "takasaka",
                "memo" => "",
                "latitude" => "36.002658",
                "altitude" => "139.397640",
            ]);
            
            Station::create([
                "id" => 1973,
                "prefecture_id" => 11,
                "city_id" => 542,
                "street_id" => null,
                "name" => "東松山",
                "hiragana" => "ひがしまつやま",
                "katakana" => "ヒガシマツヤマ",
                "katakana_half" => "ﾋｶﾞｼﾏﾂﾔﾏ",
                "romaji" => "higashimatsuyama",
                "memo" => "",
                "latitude" => "36.034849",
                "altitude" => "139.401721",
            ]);
            
            Station::create([
                "id" => 1974,
                "prefecture_id" => 11,
                "city_id" => 532,
                "street_id" => 30738,
                "name" => "森林公園",
                "hiragana" => "しんりんこうえん",
                "katakana" => "シンリンコウエン",
                "katakana_half" => "ｼﾝﾘﾝｺｳｴﾝ",
                "romaji" => "shinrinkouen",
                "memo" => "埼玉県",
                "latitude" => "36.045236",
                "altitude" => "139.374944",
            ]);
            
            Station::create([
                "id" => 1975,
                "prefecture_id" => 11,
                "city_id" => 563,
                "street_id" => 32614,
                "name" => "つきのわ",
                "hiragana" => "つきのわ",
                "katakana" => "ツキノワ",
                "katakana_half" => "ﾂｷﾉﾜ",
                "romaji" => "tsukinowa",
                "memo" => "",
                "latitude" => "36.043459",
                "altitude" => "139.345420",
            ]);
            
            Station::create([
                "id" => 1976,
                "prefecture_id" => 11,
                "city_id" => 547,
                "street_id" => 32081,
                "name" => "武蔵嵐山",
                "hiragana" => "むさしらんざん",
                "katakana" => "ムサシランザン",
                "katakana_half" => "ﾑｻｼﾗﾝｻﾞﾝ",
                "romaji" => "musashiranzan",
                "memo" => "",
                "latitude" => "36.044374",
                "altitude" => "139.327893",
            ]);
            
            Station::create([
                "id" => 1977,
                "prefecture_id" => 11,
                "city_id" => 542,
                "street_id" => null,
                "name" => "東武竹沢",
                "hiragana" => "とうぶたけざわ",
                "katakana" => "トウブタケザワ",
                "katakana_half" => "ﾄｳﾌﾞﾀｹｻﾞﾜ",
                "romaji" => "toubutakezawa",
                "memo" => "",
                "latitude" => "36.075480",
                "altitude" => "139.237566",
            ]);
            
            Station::create([
                "id" => 1978,
                "prefecture_id" => 11,
                "city_id" => 534,
                "street_id" => 30979,
                "name" => "男衾",
                "hiragana" => "おぶすま",
                "katakana" => "オブスマ",
                "katakana_half" => "ｵﾌﾞｽﾏ",
                "romaji" => "obusuma",
                "memo" => "",
                "latitude" => "36.107310",
                "altitude" => "139.234342",
            ]);
            
            Station::create([
                "id" => 1979,
                "prefecture_id" => 11,
                "city_id" => 591,
                "street_id" => 33356,
                "name" => "鉢形",
                "hiragana" => "はちがた",
                "katakana" => "ハチガタ",
                "katakana_half" => "ﾊﾁｶﾞﾀ",
                "romaji" => "hachigata",
                "memo" => "",
                "latitude" => "36.113754",
                "altitude" => "139.209344",
            ]);
            
            Station::create([
                "id" => 1980,
                "prefecture_id" => 11,
                "city_id" => 588,
                "street_id" => null,
                "name" => "玉淀",
                "hiragana" => "たまよど",
                "katakana" => "タマヨド",
                "katakana_half" => "ﾀﾏﾖﾄﾞ",
                "romaji" => "tamayodo",
                "memo" => "",
                "latitude" => "36.117086",
                "altitude" => "139.200067",
            ]);
            
            Station::create([
                "id" => 1981,
                "prefecture_id" => 11,
                "city_id" => 579,
                "street_id" => 33110,
                "name" => "一本松",
                "hiragana" => "いっぽんまつ",
                "katakana" => "イッポンマツ",
                "katakana_half" => "ｲｯﾎﾟﾝﾏﾂ",
                "romaji" => "ipponmatsu",
                "memo" => "埼玉県",
                "latitude" => "35.940386",
                "altitude" => "139.370284",
            ]);
            
            Station::create([
                "id" => 1982,
                "prefecture_id" => 11,
                "city_id" => 523,
                "street_id" => 30489,
                "name" => "西大家",
                "hiragana" => "にしおおや",
                "katakana" => "ニシオオヤ",
                "katakana_half" => "ﾆｼｵｵﾔ",
                "romaji" => "nishiooya",
                "memo" => "",
                "latitude" => "35.931692",
                "altitude" => "139.356340",
            ]);
            
            Station::create([
                "id" => 1983,
                "prefecture_id" => 11,
                "city_id" => 574,
                "street_id" => 33003,
                "name" => "川角",
                "hiragana" => "かわかど",
                "katakana" => "カワカド",
                "katakana_half" => "ｶﾜｶﾄﾞ",
                "romaji" => "kawakado",
                "memo" => "",
                "latitude" => "35.937553",
                "altitude" => "139.346841",
            ]);
            
            Station::create([
                "id" => 1984,
                "prefecture_id" => 11,
                "city_id" => 534,
                "street_id" => 31067,
                "name" => "武州長瀬",
                "hiragana" => "ぶしゅうながせ",
                "katakana" => "ブシュウナガセ",
                "katakana_half" => "ﾌﾞｼｭｳﾅｶﾞｾ",
                "romaji" => "bushuunagase",
                "memo" => "",
                "latitude" => "35.941941",
                "altitude" => "139.325704",
            ]);
            
            Station::create([
                "id" => 1985,
                "prefecture_id" => 11,
                "city_id" => 542,
                "street_id" => null,
                "name" => "東毛呂",
                "hiragana" => "ひがしもろ",
                "katakana" => "ヒガシモロ",
                "katakana_half" => "ﾋｶﾞｼﾓﾛ",
                "romaji" => "higashimoro",
                "memo" => "",
                "latitude" => "35.946884",
                "altitude" => "139.315399",
            ]);
            
            Station::create([
                "id" => 1986,
                "prefecture_id" => 11,
                "city_id" => 534,
                "street_id" => 31067,
                "name" => "武州唐沢",
                "hiragana" => "ぶしゅうからさわ",
                "katakana" => "ブシュウカラサワ",
                "katakana_half" => "ﾌﾞｼｭｳｶﾗｻﾜ",
                "romaji" => "bushuukarasawa",
                "memo" => "",
                "latitude" => "35.951940",
                "altitude" => "139.309316",
            ]);
            
            Station::create([
                "id" => 1987,
                "prefecture_id" => 11,
                "city_id" => 592,
                "street_id" => 33389,
                "name" => "和戸",
                "hiragana" => "わど",
                "katakana" => "ワド",
                "katakana_half" => "ﾜﾄﾞ",
                "romaji" => "wado",
                "memo" => "",
                "latitude" => "36.040242",
                "altitude" => "139.700612",
            ]);
            
            Station::create([
                "id" => 1988,
                "prefecture_id" => 11,
                "city_id" => 559,
                "street_id" => 32514,
                "name" => "鷲宮",
                "hiragana" => "わしのみや",
                "katakana" => "ワシノミヤ",
                "katakana_half" => "ﾜｼﾉﾐﾔ",
                "romaji" => "washinomiya",
                "memo" => "",
                "latitude" => "36.096430",
                "altitude" => "139.656947",
            ]);
            
            Station::create([
                "id" => 1989,
                "prefecture_id" => 11,
                "city_id" => 540,
                "street_id" => 31568,
                "name" => "花崎",
                "hiragana" => "はなさき",
                "katakana" => "ハナサキ",
                "katakana_half" => "ﾊﾅｻｷ",
                "romaji" => "hanasaki",
                "memo" => "",
                "latitude" => "36.109928",
                "altitude" => "139.633615",
            ]);
            
            Station::create([
                "id" => 1990,
                "prefecture_id" => 11,
                "city_id" => 540,
                "street_id" => null,
                "name" => "加須",
                "hiragana" => "かぞ",
                "katakana" => "カゾ",
                "katakana_half" => "ｶｿﾞ",
                "romaji" => "kazo",
                "memo" => "",
                "latitude" => "36.122981",
                "altitude" => "139.595729",
            ]);
            
            Station::create([
                "id" => 1991,
                "prefecture_id" => 11,
                "city_id" => 545,
                "street_id" => 31904,
                "name" => "南羽生",
                "hiragana" => "みなみはにゅう",
                "katakana" => "ミナミハニュウ",
                "katakana_half" => "ﾐﾅﾐﾊﾆｭｳ",
                "romaji" => "minamihanyuu",
                "memo" => "",
                "latitude" => "36.149979",
                "altitude" => "139.556231",
            ]);
            
            Station::create([
                "id" => 1992,
                "prefecture_id" => 11,
                "city_id" => 545,
                "street_id" => null,
                "name" => "羽生",
                "hiragana" => "はにゅう",
                "katakana" => "ハニュウ",
                "katakana_half" => "ﾊﾆｭｳ",
                "romaji" => "hanyuu",
                "memo" => "",
                "latitude" => "36.170364",
                "altitude" => "139.534065",
            ]);
            
            Station::create([
                "id" => 1993,
                "prefecture_id" => 11,
                "city_id" => 538,
                "street_id" => null,
                "name" => "所沢",
                "hiragana" => "ところざわ",
                "katakana" => "トコロザワ",
                "katakana_half" => "ﾄｺﾛｻﾞﾜ",
                "romaji" => "tokorozawa",
                "memo" => "",
                "latitude" => "35.786544",
                "altitude" => "139.473338",
            ]);
            
            Station::create([
                "id" => 1994,
                "prefecture_id" => 11,
                "city_id" => 538,
                "street_id" => 31388,
                "name" => "西所沢",
                "hiragana" => "にしところざわ",
                "katakana" => "ニシトコロザワ",
                "katakana_half" => "ﾆｼﾄｺﾛｻﾞﾜ",
                "romaji" => "nishitokorozawa",
                "memo" => "",
                "latitude" => "35.789265",
                "altitude" => "139.456005",
            ]);
            
            Station::create([
                "id" => 1995,
                "prefecture_id" => 11,
                "city_id" => 538,
                "street_id" => 31366,
                "name" => "小手指",
                "hiragana" => "こてさし",
                "katakana" => "コテサシ",
                "katakana_half" => "ｺﾃｻｼ",
                "romaji" => "kotesashi",
                "memo" => "",
                "latitude" => "35.800569",
                "altitude" => "139.438006",
            ]);
            
            Station::create([
                "id" => 1996,
                "prefecture_id" => 11,
                "city_id" => 538,
                "street_id" => 31373,
                "name" => "狭山ケ丘",
                "hiragana" => "さやまがおか",
                "katakana" => "サヤマガオカ",
                "katakana_half" => "ｻﾔﾏｶﾞｵｶ",
                "romaji" => "sayamagaoka",
                "memo" => "",
                "latitude" => "35.810456",
                "altitude" => "139.416757",
            ]);
            
            Station::create([
                "id" => 1997,
                "prefecture_id" => 11,
                "city_id" => 547,
                "street_id" => 32081,
                "name" => "武蔵藤沢",
                "hiragana" => "むさしふじさわ",
                "katakana" => "ムサシフジサワ",
                "katakana_half" => "ﾑｻｼﾌｼﾞｻﾜ",
                "romaji" => "musashifujisawa",
                "memo" => "",
                "latitude" => "35.821205",
                "altitude" => "139.412590",
            ]);
            
            Station::create([
                "id" => 1998,
                "prefecture_id" => 11,
                "city_id" => 544,
                "street_id" => 31825,
                "name" => "稲荷山公園",
                "hiragana" => "いなりやまこうえん",
                "katakana" => "イナリヤマコウエン",
                "katakana_half" => "ｲﾅﾘﾔﾏｺｳｴﾝ",
                "romaji" => "inariyamakouen",
                "memo" => "",
                "latitude" => "35.845147",
                "altitude" => "139.398397",
            ]);
            
            Station::create([
                "id" => 1999,
                "prefecture_id" => 11,
                "city_id" => 553,
                "street_id" => null,
                "name" => "入間市",
                "hiragana" => "いるまし",
                "katakana" => "イルマシ",
                "katakana_half" => "ｲﾙﾏｼ",
                "romaji" => "irumashi",
                "memo" => "",
                "latitude" => "35.841980",
                "altitude" => "139.389536",
            ]);
            
            Station::create([
                "id" => 2000,
                "prefecture_id" => 11,
                "city_id" => 553,
                "street_id" => 32337,
                "name" => "仏子",
                "hiragana" => "ぶし",
                "katakana" => "ブシ",
                "katakana_half" => "ﾌﾞｼ",
                "romaji" => "bushi",
                "memo" => "",
                "latitude" => "35.837869",
                "altitude" => "139.360039",
            ]);
            
            Station::create([
                "id" => 2001,
                "prefecture_id" => 11,
                "city_id" => 528,
                "street_id" => 30642,
                "name" => "元加治",
                "hiragana" => "もとかじ",
                "katakana" => "モトカジ",
                "katakana_half" => "ﾓﾄｶｼﾞ",
                "romaji" => "motokaji",
                "memo" => "",
                "latitude" => "35.840535",
                "altitude" => "139.345734",
            ]);
            
            Station::create([
                "id" => 2002,
                "prefecture_id" => 11,
                "city_id" => 539,
                "street_id" => null,
                "name" => "飯能",
                "hiragana" => "はんのう",
                "katakana" => "ハンノウ",
                "katakana_half" => "ﾊﾝﾉｳ",
                "romaji" => "hannou",
                "memo" => "",
                "latitude" => "35.851089",
                "altitude" => "139.319069",
            ]);
            
            Station::create([
                "id" => 2003,
                "prefecture_id" => 11,
                "city_id" => 568,
                "street_id" => 32823,
                "name" => "高麗",
                "hiragana" => "こま",
                "katakana" => "コマ",
                "katakana_half" => "ｺﾏ",
                "romaji" => "koma",
                "memo" => "",
                "latitude" => "35.881752",
                "altitude" => "139.304430",
            ]);
            
            Station::create([
                "id" => 2004,
                "prefecture_id" => 11,
                "city_id" => 547,
                "street_id" => 32081,
                "name" => "武蔵横手",
                "hiragana" => "むさしよこて",
                "katakana" => "ムサシヨコテ",
                "katakana_half" => "ﾑｻｼﾖｺﾃ",
                "romaji" => "musashiyokote",
                "memo" => "",
                "latitude" => "35.885391",
                "altitude" => "139.280710",
            ]);
            
            Station::create([
                "id" => 2005,
                "prefecture_id" => 11,
                "city_id" => 542,
                "street_id" => null,
                "name" => "東吾野",
                "hiragana" => "ひがしあがの",
                "katakana" => "ヒガシアガノ",
                "katakana_half" => "ﾋｶﾞｼｱｶﾞﾉ",
                "romaji" => "higashiagano",
                "memo" => "",
                "latitude" => "35.892084",
                "altitude" => "139.260712",
            ]);
            
            Station::create([
                "id" => 2006,
                "prefecture_id" => 11,
                "city_id" => 539,
                "street_id" => 31423,
                "name" => "吾野",
                "hiragana" => "あがの",
                "katakana" => "アガノ",
                "katakana_half" => "ｱｶﾞﾉ",
                "romaji" => "agano",
                "memo" => "",
                "latitude" => "35.908471",
                "altitude" => "139.226713",
            ]);
            
            Station::create([
                "id" => 2007,
                "prefecture_id" => 11,
                "city_id" => 523,
                "street_id" => null,
                "name" => "西吾野",
                "hiragana" => "にしあがの",
                "katakana" => "ニシアガノ",
                "katakana_half" => "ﾆｼｱｶﾞﾉ",
                "romaji" => "nishiagano",
                "memo" => "",
                "latitude" => "35.926385",
                "altitude" => "139.202186",
            ]);
            
            Station::create([
                "id" => 2008,
                "prefecture_id" => 11,
                "city_id" => 530,
                "street_id" => 30669,
                "name" => "正丸",
                "hiragana" => "しょうまる",
                "katakana" => "ショウマル",
                "katakana_half" => "ｼｮｳﾏﾙ",
                "romaji" => "shoumaru",
                "memo" => "",
                "latitude" => "35.938300",
                "altitude" => "139.182105",
            ]);
            
            Station::create([
                "id" => 2009,
                "prefecture_id" => 11,
                "city_id" => 583,
                "street_id" => 33242,
                "name" => "芦ケ久保",
                "hiragana" => "あしがくぼ",
                "katakana" => "アシガクボ",
                "katakana_half" => "ｱｼｶﾞｸﾎﾞ",
                "romaji" => "ashigakubo",
                "memo" => "",
                "latitude" => "35.976906",
                "altitude" => "139.136940",
            ]);
            
            Station::create([
                "id" => 2010,
                "prefecture_id" => 11,
                "city_id" => 583,
                "street_id" => null,
                "name" => "横瀬",
                "hiragana" => "よこぜ",
                "katakana" => "ヨコゼ",
                "katakana_half" => "ﾖｺｾﾞ",
                "romaji" => "yokoze",
                "memo" => "",
                "latitude" => "35.985544",
                "altitude" => "139.097831",
            ]);
            
            Station::create([
                "id" => 2011,
                "prefecture_id" => 11,
                "city_id" => 523,
                "street_id" => null,
                "name" => "西武秩父",
                "hiragana" => "せいぶちちぶ",
                "katakana" => "セイブチチブ",
                "katakana_half" => "ｾｲﾌﾞﾁﾁﾌﾞ",
                "romaji" => "seibuchichibu",
                "memo" => "",
                "latitude" => "35.989682",
                "altitude" => "139.083388",
            ]);
            
            Station::create([
                "id" => 2012,
                "prefecture_id" => 11,
                "city_id" => 526,
                "street_id" => 30568,
                "name" => "御花畑",
                "hiragana" => "おはなばたけ",
                "katakana" => "オハナバタケ",
                "katakana_half" => "ｵﾊﾅﾊﾞﾀｹ",
                "romaji" => "ohanabatake",
                "memo" => "",
                "latitude" => "35.992431",
                "altitude" => "139.083777",
            ]);
            
            Station::create([
                "id" => 2013,
                "prefecture_id" => 11,
                "city_id" => 531,
                "street_id" => 30701,
                "name" => "下山口",
                "hiragana" => "しもやまぐち",
                "katakana" => "シモヤマグチ",
                "katakana_half" => "ｼﾓﾔﾏｸﾞﾁ",
                "romaji" => "shimoyamaguchi",
                "memo" => "",
                "latitude" => "35.779349",
                "altitude" => "139.440841",
            ]);
            
            Station::create([
                "id" => 2014,
                "prefecture_id" => 11,
                "city_id" => 523,
                "street_id" => null,
                "name" => "西武球場前",
                "hiragana" => "せいぶきゅうじょうまえ",
                "katakana" => "セイブキュウジョウマエ",
                "katakana_half" => "ｾｲﾌﾞｷｭｳｼﾞｮｳﾏｴ",
                "romaji" => "seibukyuujoumae",
                "memo" => "",
                "latitude" => "35.770850",
                "altitude" => "139.419454",
            ]);
            
            Station::create([
                "id" => 2015,
                "prefecture_id" => 11,
                "city_id" => 523,
                "street_id" => null,
                "name" => "航空公園",
                "hiragana" => "こうくうこうえん",
                "katakana" => "コウクウコウエン",
                "katakana_half" => "ｺｳｸｳｺｳｴﾝ",
                "romaji" => "koukuukouen",
                "memo" => "",
                "latitude" => "35.798459",
                "altitude" => "139.465560",
            ]);
            
            Station::create([
                "id" => 2016,
                "prefecture_id" => 11,
                "city_id" => 538,
                "street_id" => null,
                "name" => "新所沢",
                "hiragana" => "しんところざわ",
                "katakana" => "シントコロザワ",
                "katakana_half" => "ｼﾝﾄｺﾛｻﾞﾜ",
                "romaji" => "shintokorozawa",
                "memo" => "",
                "latitude" => "35.806763",
                "altitude" => "139.456116",
            ]);
            
            Station::create([
                "id" => 2017,
                "prefecture_id" => 11,
                "city_id" => 544,
                "street_id" => 31835,
                "name" => "入曽",
                "hiragana" => "いりそ",
                "katakana" => "イリソ",
                "katakana_half" => "ｲﾘｿ",
                "romaji" => "iriso",
                "memo" => "",
                "latitude" => "35.832482",
                "altitude" => "139.427284",
            ]);
            
            Station::create([
                "id" => 2018,
                "prefecture_id" => 11,
                "city_id" => 544,
                "street_id" => null,
                "name" => "狭山市",
                "hiragana" => "さやまし",
                "katakana" => "サヤマシ",
                "katakana_half" => "ｻﾔﾏｼ",
                "romaji" => "sayamashi",
                "memo" => "",
                "latitude" => "35.857369",
                "altitude" => "139.413311",
            ]);
            
            Station::create([
                "id" => 2019,
                "prefecture_id" => 11,
                "city_id" => 544,
                "street_id" => 31842,
                "name" => "新狭山",
                "hiragana" => "しんさやま",
                "katakana" => "シンサヤマ",
                "katakana_half" => "ｼﾝｻﾔﾏ",
                "romaji" => "shinsayama",
                "memo" => "",
                "latitude" => "35.873977",
                "altitude" => "139.433503",
            ]);
            
            Station::create([
                "id" => 2020,
                "prefecture_id" => 11,
                "city_id" => 533,
                "street_id" => 30935,
                "name" => "南大塚",
                "hiragana" => "みなみおおつか",
                "katakana" => "ミナミオオツカ",
                "katakana_half" => "ﾐﾅﾐｵｵﾂｶ",
                "romaji" => "minamiootsuka",
                "memo" => "",
                "latitude" => "35.889782",
                "altitude" => "139.454307",
            ]);
            
            Station::create([
                "id" => 2021,
                "prefecture_id" => 11,
                "city_id" => 545,
                "street_id" => 31900,
                "name" => "本川越",
                "hiragana" => "ほんかわごえ",
                "katakana" => "ホンカワゴエ",
                "katakana_half" => "ﾎﾝｶﾜｺﾞｴ",
                "romaji" => "honkawagoe",
                "memo" => "",
                "latitude" => "35.914113",
                "altitude" => "139.481387",
            ]);
            
            Station::create([
                "id" => 2022,
                "prefecture_id" => 11,
                "city_id" => 523,
                "street_id" => 30487,
                "name" => "遊園地西",
                "hiragana" => "ゆうえんちにし",
                "katakana" => "ユウエンチニシ",
                "katakana_half" => "ﾕｳｴﾝﾁﾆｼ",
                "romaji" => "yuuenchinishi",
                "memo" => "",
                "latitude" => "35.769378",
                "altitude" => "139.440035",
            ]);
            
            Station::create([
                "id" => 2023,
                "prefecture_id" => 11,
                "city_id" => 523,
                "street_id" => null,
                "name" => "西羽生",
                "hiragana" => "にしはにゅう",
                "katakana" => "ニシハニュウ",
                "katakana_half" => "ﾆｼﾊﾆｭｳ",
                "romaji" => "nishihanyuu",
                "memo" => "",
                "latitude" => "36.176558",
                "altitude" => "139.524482",
            ]);
            
            Station::create([
                "id" => 2024,
                "prefecture_id" => 11,
                "city_id" => 538,
                "street_id" => 31379,
                "name" => "新郷",
                "hiragana" => "しんごう",
                "katakana" => "シンゴウ",
                "katakana_half" => "ｼﾝｺﾞｳ",
                "romaji" => "shingou",
                "memo" => "埼玉県",
                "latitude" => "36.171197",
                "altitude" => "139.510511",
            ]);
            
            Station::create([
                "id" => 2025,
                "prefecture_id" => 11,
                "city_id" => 534,
                "street_id" => 31067,
                "name" => "武州荒木",
                "hiragana" => "ぶしゅうあらき",
                "katakana" => "ブシュウアラキ",
                "katakana_half" => "ﾌﾞｼｭｳｱﾗｷ",
                "romaji" => "bushuuaraki",
                "memo" => "",
                "latitude" => "36.162531",
                "altitude" => "139.488652",
            ]);
            
            Station::create([
                "id" => 2026,
                "prefecture_id" => 11,
                "city_id" => 542,
                "street_id" => null,
                "name" => "東行田",
                "hiragana" => "ひがしぎょうだ",
                "katakana" => "ヒガシギョウダ",
                "katakana_half" => "ﾋｶﾞｼｷﾞｮｳﾀﾞ",
                "romaji" => "higashigyouda",
                "memo" => "",
                "latitude" => "36.147477",
                "altitude" => "139.468293",
            ]);
            
            Station::create([
                "id" => 2027,
                "prefecture_id" => 11,
                "city_id" => 536,
                "street_id" => null,
                "name" => "行田市",
                "hiragana" => "ぎょうだし",
                "katakana" => "ギョウダシ",
                "katakana_half" => "ｷﾞｮｳﾀﾞｼ",
                "romaji" => "gyoudashi",
                "memo" => "",
                "latitude" => "36.143699",
                "altitude" => "139.458878",
            ]);
            
            Station::create([
                "id" => 2028,
                "prefecture_id" => 11,
                "city_id" => 536,
                "street_id" => 31270,
                "name" => "持田",
                "hiragana" => "もちだ",
                "katakana" => "モチダ",
                "katakana_half" => "ﾓﾁﾀﾞ",
                "romaji" => "mochida",
                "memo" => "",
                "latitude" => "36.137672",
                "altitude" => "139.441629",
            ]);
            
            Station::create([
                "id" => 2029,
                "prefecture_id" => 11,
                "city_id" => 523,
                "street_id" => null,
                "name" => "ソシオ流通センター",
                "hiragana" => "そしおりゅうつうせんたー",
                "katakana" => "ソシオリュウツウセンター",
                "katakana_half" => "ｿｼｵﾘｭｳﾂｳｾﾝﾀｰ",
                "romaji" => "soshioryuutsuusentaｰ",
                "memo" => "",
                "latitude" => "36.136506",
                "altitude" => "139.424380",
            ]);
            
            Station::create([
                "id" => 2030,
                "prefecture_id" => 11,
                "city_id" => 548,
                "street_id" => null,
                "name" => "上熊谷",
                "hiragana" => "かみくまがや",
                "katakana" => "カミクマガヤ",
                "katakana_half" => "ｶﾐｸﾏｶﾞﾔ",
                "romaji" => "kamikumagaya",
                "memo" => "",
                "latitude" => "36.142893",
                "altitude" => "139.380801",
            ]);
            
            Station::create([
                "id" => 2031,
                "prefecture_id" => 11,
                "city_id" => 533,
                "street_id" => 30804,
                "name" => "石原",
                "hiragana" => "いしわら",
                "katakana" => "イシワラ",
                "katakana_half" => "ｲｼﾜﾗ",
                "romaji" => "ishiwara",
                "memo" => "埼玉県",
                "latitude" => "36.147670",
                "altitude" => "139.368996",
            ]);
            
            Station::create([
                "id" => 2032,
                "prefecture_id" => 11,
                "city_id" => 546,
                "street_id" => 31965,
                "name" => "ひろせ野鳥の森",
                "hiragana" => "ひろせやちょうのもり",
                "katakana" => "ヒロセヤチョウノモリ",
                "katakana_half" => "ﾋﾛｾﾔﾁｮｳﾉﾓﾘ",
                "romaji" => "hiroseyachounomori",
                "memo" => "",
                "latitude" => "36.146225",
                "altitude" => "139.351804",
            ]);
            
            Station::create([
                "id" => 2033,
                "prefecture_id" => 11,
                "city_id" => 534,
                "street_id" => 30972,
                "name" => "大麻生",
                "hiragana" => "おおあそう",
                "katakana" => "オオアソウ",
                "katakana_half" => "ｵｵｱｿｳ",
                "romaji" => "ooasou",
                "memo" => "",
                "latitude" => "36.144614",
                "altitude" => "139.331861",
            ]);
            
            Station::create([
                "id" => 2034,
                "prefecture_id" => 11,
                "city_id" => 534,
                "street_id" => 30993,
                "name" => "明戸",
                "hiragana" => "あけと",
                "katakana" => "アケト",
                "katakana_half" => "ｱｹﾄ",
                "romaji" => "aketo",
                "memo" => "",
                "latitude" => "36.142919",
                "altitude" => "139.303252",
            ]);
            
            Station::create([
                "id" => 2035,
                "prefecture_id" => 11,
                "city_id" => 547,
                "street_id" => 32037,
                "name" => "武川",
                "hiragana" => "たけかわ",
                "katakana" => "タケカワ",
                "katakana_half" => "ﾀｹｶﾜ",
                "romaji" => "takekawa",
                "memo" => "",
                "latitude" => "36.142224",
                "altitude" => "139.281698",
            ]);
            
            Station::create([
                "id" => 2036,
                "prefecture_id" => 11,
                "city_id" => 537,
                "street_id" => 31319,
                "name" => "永田",
                "hiragana" => "ながた",
                "katakana" => "ナガタ",
                "katakana_half" => "ﾅｶﾞﾀ",
                "romaji" => "nagata",
                "memo" => "埼玉県",
                "latitude" => "36.135253",
                "altitude" => "139.259533",
            ]);
            
            Station::create([
                "id" => 2037,
                "prefecture_id" => 11,
                "city_id" => 547,
                "street_id" => 32005,
                "name" => "小前田",
                "hiragana" => "おまえだ",
                "katakana" => "オマエダ",
                "katakana_half" => "ｵﾏｴﾀﾞ",
                "romaji" => "omaeda",
                "memo" => "",
                "latitude" => "36.128919",
                "altitude" => "139.222398",
            ]);
            
            Station::create([
                "id" => 2038,
                "prefecture_id" => 11,
                "city_id" => 591,
                "street_id" => 33348,
                "name" => "桜沢",
                "hiragana" => "さくらざわ",
                "katakana" => "サクラザワ",
                "katakana_half" => "ｻｸﾗｻﾞﾜ",
                "romaji" => "sakurazawa",
                "memo" => "埼玉県",
                "latitude" => "36.128668",
                "altitude" => "139.208232",
            ]);
            
            Station::create([
                "id" => 2039,
                "prefecture_id" => 11,
                "city_id" => 533,
                "street_id" => 30815,
                "name" => "波久礼",
                "hiragana" => "はぐれ",
                "katakana" => "ハグレ",
                "katakana_half" => "ﾊｸﾞﾚ",
                "romaji" => "hagure",
                "memo" => "",
                "latitude" => "36.126723",
                "altitude" => "139.158153",
            ]);
            
            Station::create([
                "id" => 2040,
                "prefecture_id" => 11,
                "city_id" => 534,
                "street_id" => 31063,
                "name" => "樋口",
                "hiragana" => "ひぐち",
                "katakana" => "ヒグチ",
                "katakana_half" => "ﾋｸﾞﾁ",
                "romaji" => "higuchi",
                "memo" => "",
                "latitude" => "36.130972",
                "altitude" => "139.122739",
            ]);
            
            Station::create([
                "id" => 2041,
                "prefecture_id" => 11,
                "city_id" => 585,
                "street_id" => 33258,
                "name" => "野上",
                "hiragana" => "のがみ",
                "katakana" => "ノガミ",
                "katakana_half" => "ﾉｶﾞﾐ",
                "romaji" => "nogami",
                "memo" => "",
                "latitude" => "36.111585",
                "altitude" => "139.110853",
            ]);
            
            Station::create([
                "id" => 2042,
                "prefecture_id" => 11,
                "city_id" => 585,
                "street_id" => null,
                "name" => "長瀞",
                "hiragana" => "ながとろ",
                "katakana" => "ナガトロ",
                "katakana_half" => "ﾅｶﾞﾄﾛ",
                "romaji" => "nagatoro",
                "memo" => "",
                "latitude" => "36.095588",
                "altitude" => "139.112075",
            ]);
            
            Station::create([
                "id" => 2043,
                "prefecture_id" => 11,
                "city_id" => 539,
                "street_id" => 31437,
                "name" => "上長瀞",
                "hiragana" => "かみながとろ",
                "katakana" => "カミナガトロ",
                "katakana_half" => "ｶﾐﾅｶﾞﾄﾛ",
                "romaji" => "kaminagatoro",
                "memo" => "",
                "latitude" => "36.085977",
                "altitude" => "139.113326",
            ]);
            
            Station::create([
                "id" => 2044,
                "prefecture_id" => 11,
                "city_id" => 543,
                "street_id" => 31795,
                "name" => "親鼻",
                "hiragana" => "おやはな",
                "katakana" => "オヤハナ",
                "katakana_half" => "ｵﾔﾊﾅ",
                "romaji" => "oyahana",
                "memo" => "",
                "latitude" => "36.077617",
                "altitude" => "139.106133",
            ]);
            
            Station::create([
                "id" => 2045,
                "prefecture_id" => 11,
                "city_id" => 584,
                "street_id" => null,
                "name" => "皆野",
                "hiragana" => "みなの",
                "katakana" => "ミナノ",
                "katakana_half" => "ﾐﾅﾉ",
                "romaji" => "minano",
                "memo" => "",
                "latitude" => "36.068617",
                "altitude" => "139.093855",
            ]);
            
            Station::create([
                "id" => 2046,
                "prefecture_id" => 11,
                "city_id" => 529,
                "street_id" => null,
                "name" => "和銅黒谷",
                "hiragana" => "わどうくろや",
                "katakana" => "ワドウクロヤ",
                "katakana_half" => "ﾜﾄﾞｳｸﾛﾔ",
                "romaji" => "wadoukuroya",
                "memo" => "",
                "latitude" => "36.046787",
                "altitude" => "139.101578",
            ]);
            
            Station::create([
                "id" => 2047,
                "prefecture_id" => 11,
                "city_id" => 537,
                "street_id" => 31291,
                "name" => "大野原",
                "hiragana" => "おおのはら",
                "katakana" => "オオノハラ",
                "katakana_half" => "ｵｵﾉﾊﾗ",
                "romaji" => "oonohara",
                "memo" => "",
                "latitude" => "36.018678",
                "altitude" => "139.093997",
            ]);
            
            Station::create([
                "id" => 2048,
                "prefecture_id" => 11,
                "city_id" => 537,
                "street_id" => null,
                "name" => "秩父",
                "hiragana" => "ちちぶ",
                "katakana" => "チチブ",
                "katakana_half" => "ﾁﾁﾌﾞ",
                "romaji" => "chichibu",
                "memo" => "",
                "latitude" => "35.998764",
                "altitude" => "139.086082",
            ]);
            
            Station::create([
                "id" => 2049,
                "prefecture_id" => 11,
                "city_id" => 537,
                "street_id" => 31296,
                "name" => "影森",
                "hiragana" => "かげもり",
                "katakana" => "カゲモリ",
                "katakana_half" => "ｶｹﾞﾓﾘ",
                "romaji" => "kagemori",
                "memo" => "",
                "latitude" => "35.971989",
                "altitude" => "139.068251",
            ]);
            
            Station::create([
                "id" => 2050,
                "prefecture_id" => 11,
                "city_id" => 537,
                "street_id" => 31288,
                "name" => "浦山口",
                "hiragana" => "うらやまぐち",
                "katakana" => "ウラヤマグチ",
                "katakana_half" => "ｳﾗﾔﾏｸﾞﾁ",
                "romaji" => "urayamaguchi",
                "memo" => "",
                "latitude" => "35.963850",
                "altitude" => "139.058336",
            ]);
            
            Station::create([
                "id" => 2051,
                "prefecture_id" => 11,
                "city_id" => 534,
                "street_id" => 31067,
                "name" => "武州中川",
                "hiragana" => "ぶしゅうなかがわ",
                "katakana" => "ブシュウナカガワ",
                "katakana_half" => "ﾌﾞｼｭｳﾅｶｶﾞﾜ",
                "romaji" => "bushuunakagawa",
                "memo" => "",
                "latitude" => "35.958295",
                "altitude" => "139.035393",
            ]);
            
            Station::create([
                "id" => 2052,
                "prefecture_id" => 11,
                "city_id" => 534,
                "street_id" => 31067,
                "name" => "武州日野",
                "hiragana" => "ぶしゅうひの",
                "katakana" => "ブシュウヒノ",
                "katakana_half" => "ﾌﾞｼｭｳﾋﾉ",
                "romaji" => "bushuuhino",
                "memo" => "",
                "latitude" => "35.953851",
                "altitude" => "139.022089",
            ]);
            
            Station::create([
                "id" => 2053,
                "prefecture_id" => 11,
                "city_id" => 537,
                "street_id" => 31282,
                "name" => "白久",
                "hiragana" => "しろく",
                "katakana" => "シロク",
                "katakana_half" => "ｼﾛｸ",
                "romaji" => "shiroku",
                "memo" => "",
                "latitude" => "35.958989",
                "altitude" => "138.993231",
            ]);
            
            Station::create([
                "id" => 2054,
                "prefecture_id" => 11,
                "city_id" => 537,
                "street_id" => 31327,
                "name" => "三峰口",
                "hiragana" => "みつみねぐち",
                "katakana" => "ミツミネグチ",
                "katakana_half" => "ﾐﾂﾐﾈｸﾞﾁ",
                "romaji" => "mitsumineguchi",
                "memo" => "",
                "latitude" => "35.960099",
                "altitude" => "138.977787",
            ]);
            
            Station::create([
                "id" => 2055,
                "prefecture_id" => 11,
                "city_id" => 523,
                "street_id" => null,
                "name" => "鉄道博物館",
                "hiragana" => "てつどうはくぶつかん",
                "katakana" => "テツドウハクブツカン",
                "katakana_half" => "ﾃﾂﾄﾞｳﾊｸﾌﾞﾂｶﾝ",
                "romaji" => "tetsudouhakubutsukan",
                "memo" => "",
                "latitude" => "35.920254",
                "altitude" => "139.617652",
            ]);
            
            Station::create([
                "id" => 2056,
                "prefecture_id" => 11,
                "city_id" => 540,
                "street_id" => null,
                "name" => "加茂宮",
                "hiragana" => "かものみや",
                "katakana" => "カモノミヤ",
                "katakana_half" => "ｶﾓﾉﾐﾔ",
                "romaji" => "kamonomiya",
                "memo" => "",
                "latitude" => "35.935613",
                "altitude" => "139.616652",
            ]);
            
            Station::create([
                "id" => 2057,
                "prefecture_id" => 11,
                "city_id" => 526,
                "street_id" => 30560,
                "name" => "東宮原",
                "hiragana" => "ひがしみやはら",
                "katakana" => "ヒガシミヤハラ",
                "katakana_half" => "ﾋｶﾞｼﾐﾔﾊﾗ",
                "romaji" => "higashimiyahara",
                "memo" => "",
                "latitude" => "35.942668",
                "altitude" => "139.618123",
            ]);
            
            Station::create([
                "id" => 2058,
                "prefecture_id" => 11,
                "city_id" => 524,
                "street_id" => 30504,
                "name" => "今羽",
                "hiragana" => "こんば",
                "katakana" => "コンバ",
                "katakana_half" => "ｺﾝﾊﾞ",
                "romaji" => "konba",
                "memo" => "",
                "latitude" => "35.950056",
                "altitude" => "139.619540",
            ]);
            
            Station::create([
                "id" => 2059,
                "prefecture_id" => 11,
                "city_id" => 524,
                "street_id" => 30514,
                "name" => "吉野原",
                "hiragana" => "よしのはら",
                "katakana" => "ヨシノハラ",
                "katakana_half" => "ﾖｼﾉﾊﾗ",
                "romaji" => "yoshinohara",
                "memo" => "",
                "latitude" => "35.956917",
                "altitude" => "139.620706",
            ]);
            
            Station::create([
                "id" => 2060,
                "prefecture_id" => 11,
                "city_id" => 539,
                "street_id" => 31477,
                "name" => "原市",
                "hiragana" => "はらいち",
                "katakana" => "ハライチ",
                "katakana_half" => "ﾊﾗｲﾁ",
                "romaji" => "haraichi",
                "memo" => "",
                "latitude" => "35.963805",
                "altitude" => "139.622150",
            ]);
            
            Station::create([
                "id" => 2061,
                "prefecture_id" => 11,
                "city_id" => 526,
                "street_id" => null,
                "name" => "沼南",
                "hiragana" => "しょうなん",
                "katakana" => "ショウナン",
                "katakana_half" => "ｼｮｳﾅﾝ",
                "romaji" => "shounan",
                "memo" => "",
                "latitude" => "35.970998",
                "altitude" => "139.623483",
            ]);
            
            Station::create([
                "id" => 2062,
                "prefecture_id" => 11,
                "city_id" => 556,
                "street_id" => 32389,
                "name" => "丸山",
                "hiragana" => "まるやま",
                "katakana" => "マルヤマ",
                "katakana_half" => "ﾏﾙﾔﾏ",
                "romaji" => "maruyama",
                "memo" => "埼玉県",
                "latitude" => "35.979553",
                "altitude" => "139.624428",
            ]);
            
            Station::create([
                "id" => 2063,
                "prefecture_id" => 11,
                "city_id" => 555,
                "street_id" => null,
                "name" => "志久",
                "hiragana" => "しく",
                "katakana" => "シク",
                "katakana_half" => "ｼｸ",
                "romaji" => "shiku",
                "memo" => "",
                "latitude" => "35.990969",
                "altitude" => "139.622260",
            ]);
            
            Station::create([
                "id" => 2064,
                "prefecture_id" => 11,
                "city_id" => 572,
                "street_id" => null,
                "name" => "伊奈中央",
                "hiragana" => "いなちゅうおう",
                "katakana" => "イナチュウオウ",
                "katakana_half" => "ｲﾅﾁｭｳｵｳ",
                "romaji" => "inachuuou",
                "memo" => "",
                "latitude" => "35.999328",
                "altitude" => "139.617205",
            ]);
            
            Station::create([
                "id" => 2065,
                "prefecture_id" => 11,
                "city_id" => 572,
                "street_id" => 32985,
                "name" => "羽貫",
                "hiragana" => "はぬき",
                "katakana" => "ハヌキ",
                "katakana_half" => "ﾊﾇｷ",
                "romaji" => "hanuki",
                "memo" => "",
                "latitude" => "36.007133",
                "altitude" => "139.608538",
            ]);
            
            Station::create([
                "id" => 2066,
                "prefecture_id" => 11,
                "city_id" => 572,
                "street_id" => 32975,
                "name" => "内宿",
                "hiragana" => "うちじゅく",
                "katakana" => "ウチジュク",
                "katakana_half" => "ｳﾁｼﾞｭｸ",
                "romaji" => "uchijuku",
                "memo" => "",
                "latitude" => "36.014022",
                "altitude" => "139.599567",
            ]);
            
            Station::create([
                "id" => 2067,
                "prefecture_id" => 11,
                "city_id" => 535,
                "street_id" => null,
                "name" => "川口元郷",
                "hiragana" => "かわぐちもとごう",
                "katakana" => "カワグチモトゴウ",
                "katakana_half" => "ｶﾜｸﾞﾁﾓﾄｺﾞｳ",
                "romaji" => "kawaguchimotogou",
                "memo" => "",
                "latitude" => "35.800158",
                "altitude" => "139.730121",
            ]);
            
            Station::create([
                "id" => 2068,
                "prefecture_id" => 11,
                "city_id" => 535,
                "street_id" => 31205,
                "name" => "南鳩ケ谷",
                "hiragana" => "みなみはとがや",
                "katakana" => "ミナミハトガヤ",
                "katakana_half" => "ﾐﾅﾐﾊﾄｶﾞﾔ",
                "romaji" => "minamihatogaya",
                "memo" => "",
                "latitude" => "35.816545",
                "altitude" => "139.736231",
            ]);
            
            Station::create([
                "id" => 2069,
                "prefecture_id" => 11,
                "city_id" => 581,
                "street_id" => 33219,
                "name" => "鳩ケ谷",
                "hiragana" => "はとがや",
                "katakana" => "ハトガヤ",
                "katakana_half" => "ﾊﾄｶﾞﾔ",
                "romaji" => "hatogaya",
                "memo" => "",
                "latitude" => "35.830710",
                "altitude" => "139.736231",
            ]);
            
            Station::create([
                "id" => 2070,
                "prefecture_id" => 11,
                "city_id" => 535,
                "street_id" => 31106,
                "name" => "新井宿",
                "hiragana" => "あらいじゅく",
                "katakana" => "アライジュク",
                "katakana_half" => "ｱﾗｲｼﾞｭｸ",
                "romaji" => "araijuku",
                "memo" => "",
                "latitude" => "35.842931",
                "altitude" => "139.738174",
            ]);
            
            Station::create([
                "id" => 2071,
                "prefecture_id" => 11,
                "city_id" => 535,
                "street_id" => 31166,
                "name" => "戸塚安行",
                "hiragana" => "とづかあんぎょう",
                "katakana" => "トヅカアンギョウ",
                "katakana_half" => "ﾄﾂﾞｶｱﾝｷﾞｮｳ",
                "romaji" => "tozukaangyou",
                "memo" => "",
                "latitude" => "35.858763",
                "altitude" => "139.753728",
            ]);
            
            Station::create([
                "id" => 2072,
                "prefecture_id" => 11,
                "city_id" => 529,
                "street_id" => null,
                "name" => "浦和美園",
                "hiragana" => "うらわみその",
                "katakana" => "ウラワミソノ",
                "katakana_half" => "ｳﾗﾜﾐｿﾉ",
                "romaji" => "urawamisono",
                "memo" => "",
                "latitude" => "35.894037",
                "altitude" => "139.727617",
            ]);
            
            Station::create([
                "id" => 2073,
                "prefecture_id" => 11,
                "city_id" => 561,
                "street_id" => null,
                "name" => "八潮",
                "hiragana" => "やしお",
                "katakana" => "ヤシオ",
                "katakana_half" => "ﾔｼｵ",
                "romaji" => "yashio",
                "memo" => "",
                "latitude" => "35.807798",
                "altitude" => "139.844973",
            ]);
            
            Station::create([
                "id" => 2074,
                "prefecture_id" => 11,
                "city_id" => 563,
                "street_id" => null,
                "name" => "三郷中央",
                "hiragana" => "みさとちゅうおう",
                "katakana" => "ミサトチュウオウ",
                "katakana_half" => "ﾐｻﾄﾁｭｳｵｳ",
                "romaji" => "misatochuuou",
                "memo" => "",
                "latitude" => "35.824047",
                "altitude" => "139.878164",
            ]);
            
    }
}
