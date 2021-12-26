<?php
namespace Database\Seeders;

use App\Models\Station;
use Illuminate\Database\Seeder;

class StationSeeder4 extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        
            Station::create([
                "id" => 849,
                "prefecture_id" => 4,
                "city_id" => 270,
                "street_id" => null,
                "name" => "白石蔵王",
                "hiragana" => "しろいしざおう",
                "katakana" => "シロイシザオウ",
                "katakana_half" => "ｼﾛｲｼｻﾞｵｳ",
                "romaji" => "shiroishizaou",
                "memo" => "",
                "latitude" => "37.994883",
                "altitude" => "140.632889",
            ]);
            
            Station::create([
                "id" => 850,
                "prefecture_id" => 4,
                "city_id" => 262,
                "street_id" => null,
                "name" => "仙台",
                "hiragana" => "せんだい",
                "katakana" => "センダイ",
                "katakana_half" => "ｾﾝﾀﾞｲ",
                "romaji" => "sendai",
                "memo" => "",
                "latitude" => "38.260303",
                "altitude" => "140.882023",
            ]);
            
            Station::create([
                "id" => 851,
                "prefecture_id" => 4,
                "city_id" => 278,
                "street_id" => 15016,
                "name" => "古川",
                "hiragana" => "ふるかわ",
                "katakana" => "フルカワ",
                "katakana_half" => "ﾌﾙｶﾜ",
                "romaji" => "furukawa",
                "memo" => "",
                "latitude" => "38.570633",
                "altitude" => "140.967612",
            ]);
            
            Station::create([
                "id" => 852,
                "prefecture_id" => 4,
                "city_id" => 262,
                "street_id" => 12861,
                "name" => "くりこま高原",
                "hiragana" => "くりこまこうげん",
                "katakana" => "クリコマコウゲン",
                "katakana_half" => "ｸﾘｺﾏｺｳｹﾞﾝ",
                "romaji" => "kurikomakougen",
                "memo" => "",
                "latitude" => "38.749671",
                "altitude" => "141.071819",
            ]);
            
            Station::create([
                "id" => 853,
                "prefecture_id" => 4,
                "city_id" => 269,
                "street_id" => null,
                "name" => "気仙沼",
                "hiragana" => "けせんぬま",
                "katakana" => "ケセンヌマ",
                "katakana_half" => "ｹｾﾝﾇﾏ",
                "romaji" => "kesennuma",
                "memo" => "",
                "latitude" => "38.909718",
                "altitude" => "141.559132",
            ]);
            
            Station::create([
                "id" => 854,
                "prefecture_id" => 4,
                "city_id" => 299,
                "street_id" => null,
                "name" => "鹿折唐桑",
                "hiragana" => "ししおりからくわ",
                "katakana" => "シシオリカラクワ",
                "katakana_half" => "ｼｼｵﾘｶﾗｸﾜ",
                "romaji" => "shishiorikarakuwa",
                "memo" => "",
                "latitude" => "38.915552",
                "altitude" => "141.580935",
            ]);
            
            Station::create([
                "id" => 855,
                "prefecture_id" => 4,
                "city_id" => 262,
                "street_id" => 12814,
                "name" => "上鹿折",
                "hiragana" => "かみししおり",
                "katakana" => "カミシシオリ",
                "katakana_half" => "ｶﾐｼｼｵﾘ",
                "romaji" => "kamishishiori",
                "memo" => "",
                "latitude" => "38.960269",
                "altitude" => "141.566768",
            ]);
            
            Station::create([
                "id" => 856,
                "prefecture_id" => 4,
                "city_id" => 278,
                "street_id" => 14926,
                "name" => "小牛田",
                "hiragana" => "こごた",
                "katakana" => "コゴタ",
                "katakana_half" => "ｺｺﾞﾀ",
                "romaji" => "kogota",
                "memo" => "",
                "latitude" => "38.540610",
                "altitude" => "141.064356",
            ]);
            
            Station::create([
                "id" => 857,
                "prefecture_id" => 4,
                "city_id" => 262,
                "street_id" => 12814,
                "name" => "上涌谷",
                "hiragana" => "かみわくや",
                "katakana" => "カミワクヤ",
                "katakana_half" => "ｶﾐﾜｸﾔ",
                "romaji" => "kamiwakuya",
                "memo" => "",
                "latitude" => "38.549137",
                "altitude" => "141.099436",
            ]);
            
            Station::create([
                "id" => 858,
                "prefecture_id" => 4,
                "city_id" => 297,
                "street_id" => null,
                "name" => "涌谷",
                "hiragana" => "わくや",
                "katakana" => "ワクヤ",
                "katakana_half" => "ﾜｸﾔ",
                "romaji" => "wakuya",
                "memo" => "",
                "latitude" => "38.538000",
                "altitude" => "141.127268",
            ]);
            
            Station::create([
                "id" => 859,
                "prefecture_id" => 4,
                "city_id" => 267,
                "street_id" => 13414,
                "name" => "前谷地",
                "hiragana" => "まえやち",
                "katakana" => "マエヤチ",
                "katakana_half" => "ﾏｴﾔﾁ",
                "romaji" => "maeyachi",
                "memo" => "",
                "latitude" => "38.512059",
                "altitude" => "141.194263",
            ]);
            
            Station::create([
                "id" => 860,
                "prefecture_id" => 4,
                "city_id" => 267,
                "street_id" => 13463,
                "name" => "和渕",
                "hiragana" => "わぶち",
                "katakana" => "ワブチ",
                "katakana_half" => "ﾜﾌﾞﾁ",
                "romaji" => "wabuchi",
                "memo" => "",
                "latitude" => "38.525781",
                "altitude" => "141.220510",
            ]);
            
            Station::create([
                "id" => 861,
                "prefecture_id" => 4,
                "city_id" => 262,
                "street_id" => 12788,
                "name" => "のの岳",
                "hiragana" => "ののだけ",
                "katakana" => "ノノダケ",
                "katakana_half" => "ﾉﾉﾀﾞｹ",
                "romaji" => "nonodake",
                "memo" => "",
                "latitude" => "38.552584",
                "altitude" => "141.225731",
            ]);
            
            Station::create([
                "id" => 862,
                "prefecture_id" => 4,
                "city_id" => 300,
                "street_id" => null,
                "name" => "陸前豊里",
                "hiragana" => "りくぜんとよさと",
                "katakana" => "リクゼントヨサト",
                "katakana_half" => "ﾘｸｾﾞﾝﾄﾖｻﾄ",
                "romaji" => "rikuzentoyosato",
                "memo" => "",
                "latitude" => "38.582220",
                "altitude" => "141.243561",
            ]);
            
            Station::create([
                "id" => 863,
                "prefecture_id" => 4,
                "city_id" => 265,
                "street_id" => 13183,
                "name" => "御岳堂",
                "hiragana" => "みたけどう",
                "katakana" => "ミタケドウ",
                "katakana_half" => "ﾐﾀｹﾄﾞｳ",
                "romaji" => "mitakedou",
                "memo" => "",
                "latitude" => "38.605662",
                "altitude" => "141.264669",
            ]);
            
            Station::create([
                "id" => 864,
                "prefecture_id" => 4,
                "city_id" => 275,
                "street_id" => 14114,
                "name" => "柳津",
                "hiragana" => "やないづ",
                "katakana" => "ヤナイヅ",
                "katakana_half" => "ﾔﾅｲﾂﾞ",
                "romaji" => "yanaizu",
                "memo" => "宮城県",
                "latitude" => "38.611690",
                "altitude" => "141.305833",
            ]);
            
            Station::create([
                "id" => 865,
                "prefecture_id" => 4,
                "city_id" => 300,
                "street_id" => null,
                "name" => "陸前横山",
                "hiragana" => "りくぜんよこやま",
                "katakana" => "リクゼンヨコヤマ",
                "katakana_half" => "ﾘｸｾﾞﾝﾖｺﾔﾏ",
                "romaji" => "rikuzenyokoyama",
                "memo" => "",
                "latitude" => "38.630966",
                "altitude" => "141.353606",
            ]);
            
            Station::create([
                "id" => 866,
                "prefecture_id" => 4,
                "city_id" => 300,
                "street_id" => null,
                "name" => "陸前戸倉",
                "hiragana" => "りくぜんとぐら",
                "katakana" => "リクゼントグラ",
                "katakana_half" => "ﾘｸｾﾞﾝﾄｸﾞﾗ",
                "romaji" => "rikuzentogura",
                "memo" => "",
                "latitude" => "38.647939",
                "altitude" => "141.433460",
            ]);
            
            Station::create([
                "id" => 867,
                "prefecture_id" => 4,
                "city_id" => 300,
                "street_id" => 16142,
                "name" => "志津川",
                "hiragana" => "しづがわ",
                "katakana" => "シヅガワ",
                "katakana_half" => "ｼﾂﾞｶﾞﾜ",
                "romaji" => "shizugawa",
                "memo" => "",
                "latitude" => "38.676686",
                "altitude" => "141.449651",
            ]);
            
            Station::create([
                "id" => 868,
                "prefecture_id" => 4,
                "city_id" => 300,
                "street_id" => null,
                "name" => "南三陸町役場・病院前",
                "hiragana" => "みなみさんりくちょうやくばびょういんまえ",
                "katakana" => "ミナミサンリクチョウヤクバビョウインマエ",
                "katakana_half" => "ﾐﾅﾐｻﾝﾘｸﾁｮｳﾔｸﾊﾞﾋﾞｮｳｲﾝﾏｴ",
                "romaji" => "minamisanrikuchouyakubabyouinmae",
                "memo" => "",
                "latitude" => "38.679047",
                "altitude" => "141.462762",
            ]);
            
            Station::create([
                "id" => 869,
                "prefecture_id" => 4,
                "city_id" => 300,
                "street_id" => 16179,
                "name" => "志津川中央団地",
                "hiragana" => "しづがわちゅうおうだんち",
                "katakana" => "シヅガワチュウオウダンチ",
                "katakana_half" => "ｼﾂﾞｶﾞﾜﾁｭｳｵｳﾀﾞﾝﾁ",
                "romaji" => "shizugawachuuoudanchi",
                "memo" => "",
                "latitude" => "38.683796",
                "altitude" => "141.450457",
            ]);
            
            Station::create([
                "id" => 870,
                "prefecture_id" => 4,
                "city_id" => 300,
                "street_id" => 16166,
                "name" => "清水浜",
                "hiragana" => "しずはま",
                "katakana" => "シズハマ",
                "katakana_half" => "ｼｽﾞﾊﾏ",
                "romaji" => "shizuhama",
                "memo" => "",
                "latitude" => "38.692240",
                "altitude" => "141.488176",
            ]);
            
            Station::create([
                "id" => 871,
                "prefecture_id" => 4,
                "city_id" => 300,
                "street_id" => 16090,
                "name" => "歌津",
                "hiragana" => "うたつ",
                "katakana" => "ウタツ",
                "katakana_half" => "ｳﾀﾂ",
                "romaji" => "utatsu",
                "memo" => "",
                "latitude" => "38.717655",
                "altitude" => "141.519422",
            ]);
            
            Station::create([
                "id" => 872,
                "prefecture_id" => 4,
                "city_id" => 300,
                "street_id" => null,
                "name" => "陸前港",
                "hiragana" => "りくぜんみなと",
                "katakana" => "リクゼンミナト",
                "katakana_half" => "ﾘｸｾﾞﾝﾐﾅﾄ",
                "romaji" => "rikuzenminato",
                "memo" => "",
                "latitude" => "38.738625",
                "altitude" => "141.530948",
            ]);
            
            Station::create([
                "id" => 873,
                "prefecture_id" => 4,
                "city_id" => 269,
                "street_id" => 13810,
                "name" => "蔵内",
                "hiragana" => "くらうち",
                "katakana" => "クラウチ",
                "katakana_half" => "ｸﾗｳﾁ",
                "romaji" => "kurauchi",
                "memo" => "",
                "latitude" => "38.754040",
                "altitude" => "141.524281",
            ]);
            
            Station::create([
                "id" => 874,
                "prefecture_id" => 4,
                "city_id" => 300,
                "street_id" => null,
                "name" => "陸前小泉",
                "hiragana" => "りくぜんこいずみ",
                "katakana" => "リクゼンコイズミ",
                "katakana_half" => "ﾘｸｾﾞﾝｺｲｽﾞﾐ",
                "romaji" => "rikuzenkoizumi",
                "memo" => "",
                "latitude" => "38.765705",
                "altitude" => "141.509143",
            ]);
            
            Station::create([
                "id" => 875,
                "prefecture_id" => 4,
                "city_id" => 300,
                "street_id" => null,
                "name" => "本吉",
                "hiragana" => "もとよし",
                "katakana" => "モトヨシ",
                "katakana_half" => "ﾓﾄﾖｼ",
                "romaji" => "motoyoshi",
                "memo" => "",
                "latitude" => "38.786536",
                "altitude" => "141.502476",
            ]);
            
            Station::create([
                "id" => 876,
                "prefecture_id" => 4,
                "city_id" => 269,
                "street_id" => 13814,
                "name" => "小金沢",
                "hiragana" => "こがねざわ",
                "katakana" => "コガネザワ",
                "katakana_half" => "ｺｶﾞﾈｻﾞﾜ",
                "romaji" => "koganezawa",
                "memo" => "",
                "latitude" => "38.796119",
                "altitude" => "141.533445",
            ]);
            
            Station::create([
                "id" => 877,
                "prefecture_id" => 4,
                "city_id" => 265,
                "street_id" => 13135,
                "name" => "大谷海岸",
                "hiragana" => "おおやかいがん",
                "katakana" => "オオヤカイガン",
                "katakana_half" => "ｵｵﾔｶｲｶﾞﾝ",
                "romaji" => "ooyakaigan",
                "memo" => "",
                "latitude" => "38.814312",
                "altitude" => "141.566497",
            ]);
            
            Station::create([
                "id" => 878,
                "prefecture_id" => 4,
                "city_id" => 300,
                "street_id" => null,
                "name" => "陸前階上",
                "hiragana" => "りくぜんはしかみ",
                "katakana" => "リクゼンハシカミ",
                "katakana_half" => "ﾘｸｾﾞﾝﾊｼｶﾐ",
                "romaji" => "rikuzenhashikami",
                "memo" => "",
                "latitude" => "38.837115",
                "altitude" => "141.580383",
            ]);
            
            Station::create([
                "id" => 879,
                "prefecture_id" => 4,
                "city_id" => 269,
                "street_id" => 13649,
                "name" => "最知",
                "hiragana" => "さいち",
                "katakana" => "サイチ",
                "katakana_half" => "ｻｲﾁ",
                "romaji" => "saichi",
                "memo" => "",
                "latitude" => "38.853502",
                "altitude" => "141.581382",
            ]);
            
            Station::create([
                "id" => 880,
                "prefecture_id" => 4,
                "city_id" => 277,
                "street_id" => null,
                "name" => "松岩",
                "hiragana" => "まついわ",
                "katakana" => "マツイワ",
                "katakana_half" => "ﾏﾂｲﾜ",
                "romaji" => "matsuiwa",
                "memo" => "",
                "latitude" => "38.873916",
                "altitude" => "141.583603",
            ]);
            
            Station::create([
                "id" => 881,
                "prefecture_id" => 4,
                "city_id" => 269,
                "street_id" => null,
                "name" => "気仙沼市立病院",
                "hiragana" => "けせんぬましりつびょういん",
                "katakana" => "ケセンヌマシリツビョウイン",
                "katakana_half" => "ｹｾﾝﾇﾏｼﾘﾂﾋﾞｮｳｲﾝ",
                "romaji" => "kesennumashiritsubyouin",
                "memo" => "",
                "latitude" => "38.887638",
                "altitude" => "141.565660",
            ]);
            
            Station::create([
                "id" => 882,
                "prefecture_id" => 4,
                "city_id" => 300,
                "street_id" => null,
                "name" => "南気仙沼",
                "hiragana" => "みなみけせんぬま",
                "katakana" => "ミナミケセンヌマ",
                "katakana_half" => "ﾐﾅﾐｹｾﾝﾇﾏ",
                "romaji" => "minamikesennuma",
                "memo" => "",
                "latitude" => "38.894859",
                "altitude" => "141.567326",
            ]);
            
            Station::create([
                "id" => 883,
                "prefecture_id" => 4,
                "city_id" => 267,
                "street_id" => 13411,
                "name" => "不動の沢",
                "hiragana" => "ふどうのさわ",
                "katakana" => "フドウノサワ",
                "katakana_half" => "ﾌﾄﾞｳﾉｻﾜ",
                "romaji" => "fudounosawa",
                "memo" => "",
                "latitude" => "38.898470",
                "altitude" => "141.562465",
            ]);
            
            Station::create([
                "id" => 884,
                "prefecture_id" => 4,
                "city_id" => 262,
                "street_id" => null,
                "name" => "佳景山",
                "hiragana" => "かけやま",
                "katakana" => "カケヤマ",
                "katakana_half" => "ｶｹﾔﾏ",
                "romaji" => "kakeyama",
                "memo" => "",
                "latitude" => "38.498007",
                "altitude" => "141.239760",
            ]);
            
            Station::create([
                "id" => 885,
                "prefecture_id" => 4,
                "city_id" => 267,
                "street_id" => 13320,
                "name" => "鹿又",
                "hiragana" => "かのまた",
                "katakana" => "カノマタ",
                "katakana_half" => "ｶﾉﾏﾀ",
                "romaji" => "kanomata",
                "memo" => "",
                "latitude" => "38.485842",
                "altitude" => "141.282924",
            ]);
            
            Station::create([
                "id" => 886,
                "prefecture_id" => 4,
                "city_id" => 300,
                "street_id" => 16144,
                "name" => "曽波神",
                "hiragana" => "そばのかみ",
                "katakana" => "ソバノカミ",
                "katakana_half" => "ｿﾊﾞﾉｶﾐ",
                "romaji" => "sobanokami",
                "memo" => "",
                "latitude" => "38.465622",
                "altitude" => "141.287758",
            ]);
            
            Station::create([
                "id" => 887,
                "prefecture_id" => 4,
                "city_id" => 267,
                "street_id" => null,
                "name" => "石巻",
                "hiragana" => "いしのまき",
                "katakana" => "イシノマキ",
                "katakana_half" => "ｲｼﾉﾏｷ",
                "romaji" => "ishinomaki",
                "memo" => "",
                "latitude" => "38.435320",
                "altitude" => "141.303591",
            ]);
            
            Station::create([
                "id" => 888,
                "prefecture_id" => 4,
                "city_id" => 300,
                "street_id" => null,
                "name" => "陸前稲井",
                "hiragana" => "りくぜんいない",
                "katakana" => "リクゼンイナイ",
                "katakana_half" => "ﾘｸｾﾞﾝｲﾅｲ",
                "romaji" => "rikuzeninai",
                "memo" => "",
                "latitude" => "38.445375",
                "altitude" => "141.334949",
            ]);
            
            Station::create([
                "id" => 889,
                "prefecture_id" => 4,
                "city_id" => 267,
                "street_id" => 13461,
                "name" => "渡波",
                "hiragana" => "わたのは",
                "katakana" => "ワタノハ",
                "katakana_half" => "ﾜﾀﾉﾊ",
                "romaji" => "watanoha",
                "memo" => "",
                "latitude" => "38.419906",
                "altitude" => "141.365143",
            ]);
            
            Station::create([
                "id" => 890,
                "prefecture_id" => 4,
                "city_id" => 267,
                "street_id" => 13421,
                "name" => "万石浦",
                "hiragana" => "まんごくうら",
                "katakana" => "マンゴクウラ",
                "katakana_half" => "ﾏﾝｺﾞｸｳﾗ",
                "romaji" => "mangokuura",
                "memo" => "",
                "latitude" => "38.428933",
                "altitude" => "141.369003",
            ]);
            
            Station::create([
                "id" => 891,
                "prefecture_id" => 4,
                "city_id" => 267,
                "street_id" => 13346,
                "name" => "沢田",
                "hiragana" => "さわだ",
                "katakana" => "サワダ",
                "katakana_half" => "ｻﾜﾀﾞ",
                "romaji" => "sawada",
                "memo" => "",
                "latitude" => "38.432349",
                "altitude" => "141.382445",
            ]);
            
            Station::create([
                "id" => 892,
                "prefecture_id" => 4,
                "city_id" => 299,
                "street_id" => 16062,
                "name" => "浦宿",
                "hiragana" => "うらしゅく",
                "katakana" => "ウラシュク",
                "katakana_half" => "ｳﾗｼｭｸ",
                "romaji" => "urashuku",
                "memo" => "",
                "latitude" => "38.436516",
                "altitude" => "141.421443",
            ]);
            
            Station::create([
                "id" => 893,
                "prefecture_id" => 4,
                "city_id" => 299,
                "street_id" => null,
                "name" => "女川",
                "hiragana" => "おながわ",
                "katakana" => "オナガワ",
                "katakana_half" => "ｵﾅｶﾞﾜ",
                "romaji" => "onagawa",
                "memo" => "",
                "latitude" => "38.447127",
                "altitude" => "141.444079",
            ]);
            
            Station::create([
                "id" => 894,
                "prefecture_id" => 4,
                "city_id" => 296,
                "street_id" => 15836,
                "name" => "北浦",
                "hiragana" => "きたうら",
                "katakana" => "キタウラ",
                "katakana_half" => "ｷﾀｳﾗ",
                "romaji" => "kitaura",
                "memo" => "宮城県",
                "latitude" => "38.559885",
                "altitude" => "141.023220",
            ]);
            
            Station::create([
                "id" => 895,
                "prefecture_id" => 4,
                "city_id" => 300,
                "street_id" => null,
                "name" => "陸前谷地",
                "hiragana" => "りくぜんやち",
                "katakana" => "リクゼンヤチ",
                "katakana_half" => "ﾘｸｾﾞﾝﾔﾁ",
                "romaji" => "rikuzenyachi",
                "memo" => "",
                "latitude" => "38.565440",
                "altitude" => "140.999333",
            ]);
            
            Station::create([
                "id" => 896,
                "prefecture_id" => 4,
                "city_id" => 278,
                "street_id" => 15068,
                "name" => "塚目",
                "hiragana" => "つかのめ",
                "katakana" => "ツカノメ",
                "katakana_half" => "ﾂｶﾉﾒ",
                "romaji" => "tsukanome",
                "memo" => "",
                "latitude" => "38.572660",
                "altitude" => "140.937394",
            ]);
            
            Station::create([
                "id" => 897,
                "prefecture_id" => 4,
                "city_id" => 262,
                "street_id" => 12792,
                "name" => "西古川",
                "hiragana" => "にしふるかわ",
                "katakana" => "ニシフルカワ",
                "katakana_half" => "ﾆｼﾌﾙｶﾜ",
                "romaji" => "nishifurukawa",
                "memo" => "",
                "latitude" => "38.578215",
                "altitude" => "140.895452",
            ]);
            
            Station::create([
                "id" => 898,
                "prefecture_id" => 4,
                "city_id" => 265,
                "street_id" => 13174,
                "name" => "東大崎",
                "hiragana" => "ひがしおおさき",
                "katakana" => "ヒガシオオサキ",
                "katakana_half" => "ﾋｶﾞｼｵｵｻｷ",
                "romaji" => "higashioosaki",
                "memo" => "",
                "latitude" => "38.605516",
                "altitude" => "140.897034",
            ]);
            
            Station::create([
                "id" => 899,
                "prefecture_id" => 4,
                "city_id" => 262,
                "street_id" => 12792,
                "name" => "西大崎",
                "hiragana" => "にしおおさき",
                "katakana" => "ニシオオサキ",
                "katakana_half" => "ﾆｼｵｵｻｷ",
                "romaji" => "nishioosaki",
                "memo" => "",
                "latitude" => "38.630014",
                "altitude" => "140.889505",
            ]);
            
            Station::create([
                "id" => 900,
                "prefecture_id" => 4,
                "city_id" => 278,
                "street_id" => 14862,
                "name" => "岩出山",
                "hiragana" => "いわでやま",
                "katakana" => "イワデヤマ",
                "katakana_half" => "ｲﾜﾃﾞﾔﾏ",
                "romaji" => "iwadeyama",
                "memo" => "",
                "latitude" => "38.652289",
                "altitude" => "140.871840",
            ]);
            
            Station::create([
                "id" => 901,
                "prefecture_id" => 4,
                "city_id" => 276,
                "street_id" => 14493,
                "name" => "有備館",
                "hiragana" => "ゆうびかん",
                "katakana" => "ユウビカン",
                "katakana_half" => "ﾕｳﾋﾞｶﾝ",
                "romaji" => "yuubikan",
                "memo" => "",
                "latitude" => "38.658316",
                "altitude" => "140.863701",
            ]);
            
            Station::create([
                "id" => 902,
                "prefecture_id" => 4,
                "city_id" => 278,
                "street_id" => 14871,
                "name" => "上野目",
                "hiragana" => "かみのめ",
                "katakana" => "カミノメ",
                "katakana_half" => "ｶﾐﾉﾒ",
                "romaji" => "kaminome",
                "memo" => "",
                "latitude" => "38.680564",
                "altitude" => "140.859339",
            ]);
            
            Station::create([
                "id" => 903,
                "prefecture_id" => 4,
                "city_id" => 278,
                "street_id" => 14863,
                "name" => "池月",
                "hiragana" => "いけづき",
                "katakana" => "イケヅキ",
                "katakana_half" => "ｲｹﾂﾞｷ",
                "romaji" => "ikezuki",
                "memo" => "",
                "latitude" => "38.709033",
                "altitude" => "140.835645",
            ]);
            
            Station::create([
                "id" => 904,
                "prefecture_id" => 4,
                "city_id" => 278,
                "street_id" => 14951,
                "name" => "川渡温泉",
                "hiragana" => "かわたびおんせん",
                "katakana" => "カワタビオンセン",
                "katakana_half" => "ｶﾜﾀﾋﾞｵﾝｾﾝ",
                "romaji" => "kawatabionsen",
                "memo" => "",
                "latitude" => "38.736889",
                "altitude" => "140.779038",
            ]);
            
            Station::create([
                "id" => 905,
                "prefecture_id" => 4,
                "city_id" => 278,
                "street_id" => 14937,
                "name" => "鳴子御殿湯",
                "hiragana" => "なるこごてんゆ",
                "katakana" => "ナルコゴテンユ",
                "katakana_half" => "ﾅﾙｺｺﾞﾃﾝﾕ",
                "romaji" => "narukogotenyu",
                "memo" => "",
                "latitude" => "38.744444",
                "altitude" => "140.737568",
            ]);
            
            Station::create([
                "id" => 906,
                "prefecture_id" => 4,
                "city_id" => 278,
                "street_id" => 14937,
                "name" => "鳴子温泉",
                "hiragana" => "なるこおんせん",
                "katakana" => "ナルコオンセン",
                "katakana_half" => "ﾅﾙｺｵﾝｾﾝ",
                "romaji" => "narukoonsen",
                "memo" => "",
                "latitude" => "38.743388",
                "altitude" => "140.715903",
            ]);
            
            Station::create([
                "id" => 907,
                "prefecture_id" => 4,
                "city_id" => 262,
                "street_id" => 12933,
                "name" => "中山平温泉",
                "hiragana" => "なかやまだいらおんせん",
                "katakana" => "ナカヤマダイラオンセン",
                "katakana_half" => "ﾅｶﾔﾏﾀﾞｲﾗｵﾝｾﾝ",
                "romaji" => "nakayamadairaonsen",
                "memo" => "",
                "latitude" => "38.726528",
                "altitude" => "140.667964",
            ]);
            
            Station::create([
                "id" => 908,
                "prefecture_id" => 4,
                "city_id" => 277,
                "street_id" => 14839,
                "name" => "あおば通",
                "hiragana" => "あおばどおり",
                "katakana" => "アオバドオリ",
                "katakana_half" => "ｱｵﾊﾞﾄﾞｵﾘ",
                "romaji" => "aobadoori",
                "memo" => "",
                "latitude" => "38.260748",
                "altitude" => "140.878524",
            ]);
            
            Station::create([
                "id" => 909,
                "prefecture_id" => 4,
                "city_id" => 263,
                "street_id" => 12998,
                "name" => "榴ケ岡",
                "hiragana" => "つつじがおか",
                "katakana" => "ツツジガオカ",
                "katakana_half" => "ﾂﾂｼﾞｶﾞｵｶ",
                "romaji" => "tsutsujigaoka",
                "memo" => "",
                "latitude" => "38.258804",
                "altitude" => "140.893856",
            ]);
            
            Station::create([
                "id" => 910,
                "prefecture_id" => 4,
                "city_id" => 263,
                "street_id" => null,
                "name" => "宮城野原",
                "hiragana" => "みやぎのはら",
                "katakana" => "ミヤギノハラ",
                "katakana_half" => "ﾐﾔｷﾞﾉﾊﾗ",
                "romaji" => "miyaginohara",
                "memo" => "",
                "latitude" => "38.261082",
                "altitude" => "140.905132",
            ]);
            
            Station::create([
                "id" => 911,
                "prefecture_id" => 4,
                "city_id" => 300,
                "street_id" => null,
                "name" => "陸前原ノ町",
                "hiragana" => "りくぜんはらのまち",
                "katakana" => "リクゼンハラノマチ",
                "katakana_half" => "ﾘｸｾﾞﾝﾊﾗﾉﾏﾁ",
                "romaji" => "rikuzenharanomachi",
                "memo" => "",
                "latitude" => "38.266081",
                "altitude" => "140.910799",
            ]);
            
            Station::create([
                "id" => 912,
                "prefecture_id" => 4,
                "city_id" => 263,
                "street_id" => 13012,
                "name" => "苦竹",
                "hiragana" => "にがたけ",
                "katakana" => "ニガタケ",
                "katakana_half" => "ﾆｶﾞﾀｹ",
                "romaji" => "nigatake",
                "memo" => "",
                "latitude" => "38.268692",
                "altitude" => "140.919047",
            ]);
            
            Station::create([
                "id" => 913,
                "prefecture_id" => 4,
                "city_id" => 263,
                "street_id" => 12984,
                "name" => "小鶴新田",
                "hiragana" => "こづるしんでん",
                "katakana" => "コヅルシンデン",
                "katakana_half" => "ｺﾂﾞﾙｼﾝﾃﾞﾝ",
                "romaji" => "kozurushinden",
                "memo" => "",
                "latitude" => "38.273526",
                "altitude" => "140.934630",
            ]);
            
            Station::create([
                "id" => 914,
                "prefecture_id" => 4,
                "city_id" => 263,
                "street_id" => 13026,
                "name" => "福田町",
                "hiragana" => "ふくだまち",
                "katakana" => "フクダマチ",
                "katakana_half" => "ﾌｸﾀﾞﾏﾁ",
                "romaji" => "fukudamachi",
                "memo" => "",
                "latitude" => "38.274997",
                "altitude" => "140.958239",
            ]);
            
            Station::create([
                "id" => 915,
                "prefecture_id" => 4,
                "city_id" => 300,
                "street_id" => null,
                "name" => "陸前高砂",
                "hiragana" => "りくぜんたかさご",
                "katakana" => "リクゼンタカサゴ",
                "katakana_half" => "ﾘｸｾﾞﾝﾀｶｻｺﾞ",
                "romaji" => "rikuzentakasago",
                "memo" => "",
                "latitude" => "38.273359",
                "altitude" => "140.967571",
            ]);
            
            Station::create([
                "id" => 916,
                "prefecture_id" => 4,
                "city_id" => 263,
                "street_id" => 13011,
                "name" => "中野栄",
                "hiragana" => "なかのさかえ",
                "katakana" => "ナカノサカエ",
                "katakana_half" => "ﾅｶﾉｻｶｴ",
                "romaji" => "nakanosakae",
                "memo" => "",
                "latitude" => "38.280887",
                "altitude" => "140.985208",
            ]);
            
            Station::create([
                "id" => 917,
                "prefecture_id" => 4,
                "city_id" => 273,
                "street_id" => null,
                "name" => "多賀城",
                "hiragana" => "たがじょう",
                "katakana" => "タガジョウ",
                "katakana_half" => "ﾀｶﾞｼﾞｮｳ",
                "romaji" => "tagajou",
                "memo" => "",
                "latitude" => "38.291608",
                "altitude" => "141.005428",
            ]);
            
            Station::create([
                "id" => 918,
                "prefecture_id" => 4,
                "city_id" => 273,
                "street_id" => 14042,
                "name" => "下馬",
                "hiragana" => "げば",
                "katakana" => "ゲバ",
                "katakana_half" => "ｹﾞﾊﾞ",
                "romaji" => "geba",
                "memo" => "",
                "latitude" => "38.305995",
                "altitude" => "141.014871",
            ]);
            
            Station::create([
                "id" => 919,
                "prefecture_id" => 4,
                "city_id" => 262,
                "street_id" => 12792,
                "name" => "西塩釜",
                "hiragana" => "にししおがま",
                "katakana" => "ニシシオガマ",
                "katakana_half" => "ﾆｼｼｵｶﾞﾏ",
                "romaji" => "nishishiogama",
                "memo" => "",
                "latitude" => "38.311883",
                "altitude" => "141.018204",
            ]);
            
            Station::create([
                "id" => 920,
                "prefecture_id" => 4,
                "city_id" => 300,
                "street_id" => null,
                "name" => "本塩釜",
                "hiragana" => "ほんしおがま",
                "katakana" => "ホンシオガマ",
                "katakana_half" => "ﾎﾝｼｵｶﾞﾏ",
                "romaji" => "honshiogama",
                "memo" => "",
                "latitude" => "38.317633",
                "altitude" => "141.022342",
            ]);
            
            Station::create([
                "id" => 921,
                "prefecture_id" => 4,
                "city_id" => 277,
                "street_id" => null,
                "name" => "東塩釜",
                "hiragana" => "ひがししおがま",
                "katakana" => "ヒガシシオガマ",
                "katakana_half" => "ﾋｶﾞｼｼｵｶﾞﾏ",
                "romaji" => "higashishiogama",
                "memo" => "",
                "latitude" => "38.325327",
                "altitude" => "141.031480",
            ]);
            
            Station::create([
                "id" => 922,
                "prefecture_id" => 4,
                "city_id" => 300,
                "street_id" => null,
                "name" => "陸前浜田",
                "hiragana" => "りくぜんはまだ",
                "katakana" => "リクゼンハマダ",
                "katakana_half" => "ﾘｸｾﾞﾝﾊﾏﾀﾞ",
                "romaji" => "rikuzenhamada",
                "memo" => "",
                "latitude" => "38.350713",
                "altitude" => "141.041701",
            ]);
            
            Station::create([
                "id" => 923,
                "prefecture_id" => 4,
                "city_id" => 277,
                "street_id" => null,
                "name" => "松島海岸",
                "hiragana" => "まつしまかいがん",
                "katakana" => "マツシマカイガン",
                "katakana_half" => "ﾏﾂｼﾏｶｲｶﾞﾝ",
                "romaji" => "matsushimakaigan",
                "memo" => "",
                "latitude" => "38.368240",
                "altitude" => "141.058725",
            ]);
            
            Station::create([
                "id" => 924,
                "prefecture_id" => 4,
                "city_id" => 278,
                "street_id" => 14927,
                "name" => "高城町",
                "hiragana" => "たかぎまち",
                "katakana" => "タカギマチ",
                "katakana_half" => "ﾀｶｷﾞﾏﾁ",
                "romaji" => "takagimachi",
                "memo" => "",
                "latitude" => "38.382765",
                "altitude" => "141.073474",
            ]);
            
            Station::create([
                "id" => 925,
                "prefecture_id" => 4,
                "city_id" => 289,
                "street_id" => 15684,
                "name" => "手樽",
                "hiragana" => "てたる",
                "katakana" => "テタル",
                "katakana_half" => "ﾃﾀﾙ",
                "romaji" => "tetaru",
                "memo" => "",
                "latitude" => "38.387127",
                "altitude" => "141.092639",
            ]);
            
            Station::create([
                "id" => 926,
                "prefecture_id" => 4,
                "city_id" => 300,
                "street_id" => null,
                "name" => "陸前富山",
                "hiragana" => "りくぜんとみやま",
                "katakana" => "リクゼントミヤマ",
                "katakana_half" => "ﾘｸｾﾞﾝﾄﾐﾔﾏ",
                "romaji" => "rikuzentomiyama",
                "memo" => "",
                "latitude" => "38.386183",
                "altitude" => "141.107332",
            ]);
            
            Station::create([
                "id" => 927,
                "prefecture_id" => 4,
                "city_id" => 300,
                "street_id" => null,
                "name" => "陸前大塚",
                "hiragana" => "りくぜんおおつか",
                "katakana" => "リクゼンオオツカ",
                "katakana_half" => "ﾘｸｾﾞﾝｵｵﾂｶ",
                "romaji" => "rikuzenootsuka",
                "memo" => "",
                "latitude" => "38.379017",
                "altitude" => "141.129080",
            ]);
            
            Station::create([
                "id" => 928,
                "prefecture_id" => 4,
                "city_id" => 277,
                "street_id" => 14850,
                "name" => "東名",
                "hiragana" => "とうな",
                "katakana" => "トウナ",
                "katakana_half" => "ﾄｳﾅ",
                "romaji" => "touna",
                "memo" => "",
                "latitude" => "38.375296",
                "altitude" => "141.144079",
            ]);
            
            Station::create([
                "id" => 929,
                "prefecture_id" => 4,
                "city_id" => 277,
                "street_id" => 14855,
                "name" => "野蒜",
                "hiragana" => "のびる",
                "katakana" => "ノビル",
                "katakana_half" => "ﾉﾋﾞﾙ",
                "romaji" => "nobiru",
                "memo" => "",
                "latitude" => "38.379295",
                "altitude" => "141.157162",
            ]);
            
            Station::create([
                "id" => 930,
                "prefecture_id" => 4,
                "city_id" => 300,
                "street_id" => null,
                "name" => "陸前小野",
                "hiragana" => "りくぜんおの",
                "katakana" => "リクゼンオノ",
                "katakana_half" => "ﾘｸｾﾞﾝｵﾉ",
                "romaji" => "rikuzenono",
                "memo" => "",
                "latitude" => "38.395878",
                "altitude" => "141.174743",
            ]);
            
            Station::create([
                "id" => 931,
                "prefecture_id" => 4,
                "city_id" => 267,
                "street_id" => 13315,
                "name" => "鹿妻",
                "hiragana" => "かづま",
                "katakana" => "カヅマ",
                "katakana_half" => "ｶﾂﾞﾏ",
                "romaji" => "kazuma",
                "memo" => "",
                "latitude" => "38.403377",
                "altitude" => "141.190019",
            ]);
            
            Station::create([
                "id" => 932,
                "prefecture_id" => 4,
                "city_id" => 277,
                "street_id" => 14860,
                "name" => "矢本",
                "hiragana" => "やもと",
                "katakana" => "ヤモト",
                "katakana_half" => "ﾔﾓﾄ",
                "romaji" => "yamoto",
                "memo" => "",
                "latitude" => "38.420376",
                "altitude" => "141.209211",
            ]);
            
            Station::create([
                "id" => 933,
                "prefecture_id" => 4,
                "city_id" => 277,
                "street_id" => null,
                "name" => "東矢本",
                "hiragana" => "ひがしやもと",
                "katakana" => "ヒガシヤモト",
                "katakana_half" => "ﾋｶﾞｼﾔﾓﾄ",
                "romaji" => "higashiyamoto",
                "memo" => "",
                "latitude" => "38.427959",
                "altitude" => "141.222377",
            ]);
            
            Station::create([
                "id" => 934,
                "prefecture_id" => 4,
                "city_id" => 300,
                "street_id" => null,
                "name" => "陸前赤井",
                "hiragana" => "りくぜんあかい",
                "katakana" => "リクゼンアカイ",
                "katakana_half" => "ﾘｸｾﾞﾝｱｶｲ",
                "romaji" => "rikuzenakai",
                "memo" => "",
                "latitude" => "38.432403",
                "altitude" => "141.238930",
            ]);
            
            Station::create([
                "id" => 935,
                "prefecture_id" => 4,
                "city_id" => 267,
                "street_id" => null,
                "name" => "石巻あゆみ野",
                "hiragana" => "いしのまきあゆみの",
                "katakana" => "イシノマキアユミノ",
                "katakana_half" => "ｲｼﾉﾏｷｱﾕﾐﾉ",
                "romaji" => "ishinomakiayumino",
                "memo" => "",
                "latitude" => "38.436014",
                "altitude" => "141.259400",
            ]);
            
            Station::create([
                "id" => 936,
                "prefecture_id" => 4,
                "city_id" => 267,
                "street_id" => 13412,
                "name" => "蛇田",
                "hiragana" => "へびた",
                "katakana" => "ヘビタ",
                "katakana_half" => "ﾍﾋﾞﾀ",
                "romaji" => "hebita",
                "memo" => "",
                "latitude" => "38.438153",
                "altitude" => "141.277705",
            ]);
            
            Station::create([
                "id" => 937,
                "prefecture_id" => 4,
                "city_id" => 300,
                "street_id" => null,
                "name" => "陸前山下",
                "hiragana" => "りくぜんやました",
                "katakana" => "リクゼンヤマシタ",
                "katakana_half" => "ﾘｸｾﾞﾝﾔﾏｼﾀ",
                "romaji" => "rikuzenyamashita",
                "memo" => "",
                "latitude" => "38.437624",
                "altitude" => "141.288954",
            ]);
            
            Station::create([
                "id" => 938,
                "prefecture_id" => 4,
                "city_id" => 262,
                "street_id" => 12930,
                "name" => "東照宮",
                "hiragana" => "とうしょうぐう",
                "katakana" => "トウショウグウ",
                "katakana_half" => "ﾄｳｼｮｳｸﾞｳ",
                "romaji" => "toushouguu",
                "memo" => "",
                "latitude" => "38.277469",
                "altitude" => "140.886133",
            ]);
            
            Station::create([
                "id" => 939,
                "prefecture_id" => 4,
                "city_id" => 262,
                "street_id" => 12818,
                "name" => "北仙台",
                "hiragana" => "きたせんだい",
                "katakana" => "キタセンダイ",
                "katakana_half" => "ｷﾀｾﾝﾀﾞｲ",
                "romaji" => "kitasendai",
                "memo" => "",
                "latitude" => "38.282106",
                "altitude" => "140.868896",
            ]);
            
            Station::create([
                "id" => 940,
                "prefecture_id" => 4,
                "city_id" => 262,
                "street_id" => 12833,
                "name" => "北山",
                "hiragana" => "きたやま",
                "katakana" => "キタヤマ",
                "katakana_half" => "ｷﾀﾔﾏ",
                "romaji" => "kitayama",
                "memo" => "宮城県",
                "latitude" => "38.285190",
                "altitude" => "140.851025",
            ]);
            
            Station::create([
                "id" => 941,
                "prefecture_id" => 4,
                "city_id" => 277,
                "street_id" => null,
                "name" => "東北福祉大前",
                "hiragana" => "とうほくふくしだいまえ",
                "katakana" => "トウホクフクシダイマエ",
                "katakana_half" => "ﾄｳﾎｸﾌｸｼﾀﾞｲﾏｴ",
                "romaji" => "touhokufukushidaimae",
                "memo" => "",
                "latitude" => "38.280468",
                "altitude" => "140.842693",
            ]);
            
            Station::create([
                "id" => 942,
                "prefecture_id" => 4,
                "city_id" => 262,
                "street_id" => 12836,
                "name" => "国見",
                "hiragana" => "くにみ",
                "katakana" => "クニミ",
                "katakana_half" => "ｸﾆﾐ",
                "romaji" => "kunimi",
                "memo" => "宮城県",
                "latitude" => "38.274774",
                "altitude" => "140.833360",
            ]);
            
            Station::create([
                "id" => 943,
                "prefecture_id" => 4,
                "city_id" => 278,
                "street_id" => 14897,
                "name" => "葛岡",
                "hiragana" => "くずおか",
                "katakana" => "クズオカ",
                "katakana_half" => "ｸｽﾞｵｶ",
                "romaji" => "kuzuoka",
                "memo" => "",
                "latitude" => "38.268745",
                "altitude" => "140.817334",
            ]);
            
            Station::create([
                "id" => 944,
                "prefecture_id" => 4,
                "city_id" => 300,
                "street_id" => null,
                "name" => "陸前落合",
                "hiragana" => "りくぜんおちあい",
                "katakana" => "リクゼンオチアイ",
                "katakana_half" => "ﾘｸｾﾞﾝｵﾁｱｲ",
                "romaji" => "rikuzenochiai",
                "memo" => "",
                "latitude" => "38.273411",
                "altitude" => "140.790169",
            ]);
            
            Station::create([
                "id" => 945,
                "prefecture_id" => 4,
                "city_id" => 262,
                "street_id" => 12790,
                "name" => "愛子",
                "hiragana" => "あやし",
                "katakana" => "アヤシ",
                "katakana_half" => "ｱﾔｼ",
                "romaji" => "ayashi",
                "memo" => "",
                "latitude" => "38.272633",
                "altitude" => "140.761450",
            ]);
            
            Station::create([
                "id" => 946,
                "prefecture_id" => 4,
                "city_id" => 300,
                "street_id" => null,
                "name" => "陸前白沢",
                "hiragana" => "りくぜんしらさわ",
                "katakana" => "リクゼンシラサワ",
                "katakana_half" => "ﾘｸｾﾞﾝｼﾗｻﾜ",
                "romaji" => "rikuzenshirasawa",
                "memo" => "",
                "latitude" => "38.278076",
                "altitude" => "140.702204",
            ]);
            
            Station::create([
                "id" => 947,
                "prefecture_id" => 4,
                "city_id" => 262,
                "street_id" => 12838,
                "name" => "熊ケ根",
                "hiragana" => "くまがね",
                "katakana" => "クマガネ",
                "katakana_half" => "ｸﾏｶﾞﾈ",
                "romaji" => "kumagane",
                "memo" => "",
                "latitude" => "38.297851",
                "altitude" => "140.680538",
            ]);
            
            Station::create([
                "id" => 948,
                "prefecture_id" => 4,
                "city_id" => 262,
                "street_id" => 12846,
                "name" => "作並",
                "hiragana" => "さくなみ",
                "katakana" => "サクナミ",
                "katakana_half" => "ｻｸﾅﾐ",
                "romaji" => "sakunami",
                "memo" => "",
                "latitude" => "38.317821",
                "altitude" => "140.632431",
            ]);
            
            Station::create([
                "id" => 949,
                "prefecture_id" => 4,
                "city_id" => 270,
                "street_id" => 13932,
                "name" => "奥新川",
                "hiragana" => "おくにっかわ",
                "katakana" => "オクニッカワ",
                "katakana_half" => "ｵｸﾆｯｶﾜ",
                "romaji" => "okunikkawa",
                "memo" => "",
                "latitude" => "38.325819",
                "altitude" => "140.594433",
            ]);
            
            Station::create([
                "id" => 950,
                "prefecture_id" => 4,
                "city_id" => 270,
                "street_id" => 13916,
                "name" => "越河",
                "hiragana" => "こすごう",
                "katakana" => "コスゴウ",
                "katakana_half" => "ｺｽｺﾞｳ",
                "romaji" => "kosugou",
                "memo" => "",
                "latitude" => "37.933639",
                "altitude" => "140.604561",
            ]);
            
            Station::create([
                "id" => 951,
                "prefecture_id" => 4,
                "city_id" => 270,
                "street_id" => null,
                "name" => "白石",
                "hiragana" => "しろいし",
                "katakana" => "シロイシ",
                "katakana_half" => "ｼﾛｲｼ",
                "romaji" => "shiroishi",
                "memo" => "宮城県",
                "latitude" => "38.002716",
                "altitude" => "140.626057",
            ]);
            
            Station::create([
                "id" => 952,
                "prefecture_id" => 4,
                "city_id" => 277,
                "street_id" => null,
                "name" => "東白石",
                "hiragana" => "ひがししろいし",
                "katakana" => "ヒガシシロイシ",
                "katakana_half" => "ﾋｶﾞｼｼﾛｲｼ",
                "romaji" => "higashishiroishi",
                "memo" => "",
                "latitude" => "38.034990",
                "altitude" => "140.650914",
            ]);
            
            Station::create([
                "id" => 953,
                "prefecture_id" => 4,
                "city_id" => 262,
                "street_id" => 12818,
                "name" => "北白川",
                "hiragana" => "きたしらかわ",
                "katakana" => "キタシラカワ",
                "katakana_half" => "ｷﾀｼﾗｶﾜ",
                "romaji" => "kitashirakawa",
                "memo" => "",
                "latitude" => "38.032408",
                "altitude" => "140.692633",
            ]);
            
            Station::create([
                "id" => 954,
                "prefecture_id" => 4,
                "city_id" => 282,
                "street_id" => null,
                "name" => "大河原",
                "hiragana" => "おおがわら",
                "katakana" => "オオガワラ",
                "katakana_half" => "ｵｵｶﾞﾜﾗ",
                "romaji" => "oogawara",
                "memo" => "宮城県",
                "latitude" => "38.047601",
                "altitude" => "140.740545",
            ]);
            
            Station::create([
                "id" => 955,
                "prefecture_id" => 4,
                "city_id" => 284,
                "street_id" => 15336,
                "name" => "船岡",
                "hiragana" => "ふなおか",
                "katakana" => "フナオカ",
                "katakana_half" => "ﾌﾅｵｶ",
                "romaji" => "funaoka",
                "memo" => "宮城県",
                "latitude" => "38.059295",
                "altitude" => "140.767431",
            ]);
            
            Station::create([
                "id" => 956,
                "prefecture_id" => 4,
                "city_id" => 284,
                "street_id" => 15340,
                "name" => "槻木",
                "hiragana" => "つきのき",
                "katakana" => "ツキノキ",
                "katakana_half" => "ﾂｷﾉｷ",
                "romaji" => "tsukinoki",
                "memo" => "",
                "latitude" => "38.078961",
                "altitude" => "140.810009",
            ]);
            
            Station::create([
                "id" => 957,
                "prefecture_id" => 4,
                "city_id" => 274,
                "street_id" => null,
                "name" => "岩沼",
                "hiragana" => "いわぬま",
                "katakana" => "イワヌマ",
                "katakana_half" => "ｲﾜﾇﾏ",
                "romaji" => "iwanuma",
                "memo" => "",
                "latitude" => "38.112153",
                "altitude" => "140.863810",
            ]);
            
            Station::create([
                "id" => 958,
                "prefecture_id" => 4,
                "city_id" => 263,
                "street_id" => 13034,
                "name" => "館腰",
                "hiragana" => "たてこし",
                "katakana" => "タテコシ",
                "katakana_half" => "ﾀﾃｺｼ",
                "romaji" => "tatekoshi",
                "memo" => "",
                "latitude" => "38.142955",
                "altitude" => "140.880057",
            ]);
            
            Station::create([
                "id" => 959,
                "prefecture_id" => 4,
                "city_id" => 271,
                "street_id" => null,
                "name" => "名取",
                "hiragana" => "なとり",
                "katakana" => "ナトリ",
                "katakana_half" => "ﾅﾄﾘ",
                "romaji" => "natori",
                "memo" => "",
                "latitude" => "38.173035",
                "altitude" => "140.882721",
            ]);
            
            Station::create([
                "id" => 960,
                "prefecture_id" => 4,
                "city_id" => 300,
                "street_id" => null,
                "name" => "南仙台",
                "hiragana" => "みなみせんだい",
                "katakana" => "ミナミセンダイ",
                "katakana_half" => "ﾐﾅﾐｾﾝﾀﾞｲ",
                "romaji" => "minamisendai",
                "memo" => "",
                "latitude" => "38.197171",
                "altitude" => "140.883249",
            ]);
            
            Station::create([
                "id" => 961,
                "prefecture_id" => 4,
                "city_id" => 265,
                "street_id" => 13151,
                "name" => "太子堂",
                "hiragana" => "たいしどう",
                "katakana" => "タイシドウ",
                "katakana_half" => "ﾀｲｼﾄﾞｳ",
                "romaji" => "taishidou",
                "memo" => "",
                "latitude" => "38.217975",
                "altitude" => "140.883525",
            ]);
            
            Station::create([
                "id" => 962,
                "prefecture_id" => 4,
                "city_id" => 265,
                "street_id" => 13130,
                "name" => "長町",
                "hiragana" => "ながまち",
                "katakana" => "ナガマチ",
                "katakana_half" => "ﾅｶﾞﾏﾁ",
                "romaji" => "nagamachi",
                "memo" => "",
                "latitude" => "38.227419",
                "altitude" => "140.885469",
            ]);
            
            Station::create([
                "id" => 963,
                "prefecture_id" => 4,
                "city_id" => 263,
                "street_id" => 12966,
                "name" => "岩切",
                "hiragana" => "いわきり",
                "katakana" => "イワキリ",
                "katakana_half" => "ｲﾜｷﾘ",
                "romaji" => "iwakiri",
                "memo" => "",
                "latitude" => "38.301023",
                "altitude" => "140.955460",
            ]);
            
            Station::create([
                "id" => 964,
                "prefecture_id" => 4,
                "city_id" => 291,
                "street_id" => null,
                "name" => "新利府",
                "hiragana" => "しんりふ",
                "katakana" => "シンリフ",
                "katakana_half" => "ｼﾝﾘﾌ",
                "romaji" => "shinrifu",
                "memo" => "",
                "latitude" => "38.317354",
                "altitude" => "140.973236",
            ]);
            
            Station::create([
                "id" => 965,
                "prefecture_id" => 4,
                "city_id" => 291,
                "street_id" => null,
                "name" => "利府",
                "hiragana" => "りふ",
                "katakana" => "リフ",
                "katakana_half" => "ﾘﾌ",
                "romaji" => "rifu",
                "memo" => "",
                "latitude" => "38.329436",
                "altitude" => "140.984956",
            ]);
            
            Station::create([
                "id" => 966,
                "prefecture_id" => 4,
                "city_id" => 288,
                "street_id" => 15671,
                "name" => "坂元",
                "hiragana" => "さかもと",
                "katakana" => "サカモト",
                "katakana_half" => "ｻｶﾓﾄ",
                "romaji" => "sakamoto",
                "memo" => "",
                "latitude" => "37.924284",
                "altitude" => "140.900899",
            ]);
            
            Station::create([
                "id" => 967,
                "prefecture_id" => 4,
                "city_id" => 267,
                "street_id" => 13456,
                "name" => "山下",
                "hiragana" => "やました",
                "katakana" => "ヤマシタ",
                "katakana_half" => "ﾔﾏｼﾀ",
                "romaji" => "yamashita",
                "memo" => "宮城県",
                "latitude" => "37.966391",
                "altitude" => "140.888897",
            ]);
            
            Station::create([
                "id" => 968,
                "prefecture_id" => 4,
                "city_id" => 290,
                "street_id" => null,
                "name" => "浜吉田",
                "hiragana" => "はまよしだ",
                "katakana" => "ハマヨシダ",
                "katakana_half" => "ﾊﾏﾖｼﾀﾞ",
                "romaji" => "hamayoshida",
                "memo" => "",
                "latitude" => "38.002081",
                "altitude" => "140.890006",
            ]);
            
            Station::create([
                "id" => 969,
                "prefecture_id" => 4,
                "city_id" => 287,
                "street_id" => null,
                "name" => "亘理",
                "hiragana" => "わたり",
                "katakana" => "ワタリ",
                "katakana_half" => "ﾜﾀﾘ",
                "romaji" => "watari",
                "memo" => "",
                "latitude" => "38.039910",
                "altitude" => "140.861230",
            ]);
            
            Station::create([
                "id" => 970,
                "prefecture_id" => 4,
                "city_id" => 287,
                "street_id" => 15610,
                "name" => "逢隈",
                "hiragana" => "おおくま",
                "katakana" => "オオクマ",
                "katakana_half" => "ｵｵｸﾏ",
                "romaji" => "ookuma",
                "memo" => "",
                "latitude" => "38.067435",
                "altitude" => "140.854646",
            ]);
            
            Station::create([
                "id" => 971,
                "prefecture_id" => 4,
                "city_id" => 263,
                "street_id" => 13021,
                "name" => "東仙台",
                "hiragana" => "ひがしせんだい",
                "katakana" => "ヒガシセンダイ",
                "katakana_half" => "ﾋｶﾞｼｾﾝﾀﾞｲ",
                "romaji" => "higashisendai",
                "memo" => "",
                "latitude" => "38.276303",
                "altitude" => "140.919909",
            ]);
            
            Station::create([
                "id" => 972,
                "prefecture_id" => 4,
                "city_id" => 300,
                "street_id" => null,
                "name" => "陸前山王",
                "hiragana" => "りくぜんさんのう",
                "katakana" => "リクゼンサンノウ",
                "katakana_half" => "ﾘｸｾﾞﾝｻﾝﾉｳ",
                "romaji" => "rikuzensannou",
                "memo" => "",
                "latitude" => "38.299606",
                "altitude" => "140.979458",
            ]);
            
            Station::create([
                "id" => 973,
                "prefecture_id" => 4,
                "city_id" => 262,
                "street_id" => 12836,
                "name" => "国府多賀城",
                "hiragana" => "こくふたがじょう",
                "katakana" => "コクフタガジョウ",
                "katakana_half" => "ｺｸﾌﾀｶﾞｼﾞｮｳ",
                "romaji" => "kokufutagajou",
                "memo" => "",
                "latitude" => "38.301024",
                "altitude" => "140.994068",
            ]);
            
            Station::create([
                "id" => 974,
                "prefecture_id" => 4,
                "city_id" => 298,
                "street_id" => 16015,
                "name" => "塩釜",
                "hiragana" => "しおがま",
                "katakana" => "シオガマ",
                "katakana_half" => "ｼｵｶﾞﾏ",
                "romaji" => "shiogama",
                "memo" => "",
                "latitude" => "38.309551",
                "altitude" => "141.009510",
            ]);
            
            Station::create([
                "id" => 975,
                "prefecture_id" => 4,
                "city_id" => 277,
                "street_id" => null,
                "name" => "松島",
                "hiragana" => "まつしま",
                "katakana" => "マツシマ",
                "katakana_half" => "ﾏﾂｼﾏ",
                "romaji" => "matsushima",
                "memo" => "",
                "latitude" => "38.379822",
                "altitude" => "141.066113",
            ]);
            
            Station::create([
                "id" => 976,
                "prefecture_id" => 4,
                "city_id" => 275,
                "street_id" => 14394,
                "name" => "愛宕",
                "hiragana" => "あたご",
                "katakana" => "アタゴ",
                "katakana_half" => "ｱﾀｺﾞ",
                "romaji" => "atago",
                "memo" => "宮城県",
                "latitude" => "38.397514",
                "altitude" => "141.065169",
            ]);
            
            Station::create([
                "id" => 977,
                "prefecture_id" => 4,
                "city_id" => 262,
                "street_id" => null,
                "name" => "品井沼",
                "hiragana" => "しないぬま",
                "katakana" => "シナイヌマ",
                "katakana_half" => "ｼﾅｲﾇﾏ",
                "romaji" => "shinainuma",
                "memo" => "",
                "latitude" => "38.431510",
                "altitude" => "141.082443",
            ]);
            
            Station::create([
                "id" => 978,
                "prefecture_id" => 4,
                "city_id" => 278,
                "street_id" => 14899,
                "name" => "鹿島台",
                "hiragana" => "かしまだい",
                "katakana" => "カシマダイ",
                "katakana_half" => "ｶｼﾏﾀﾞｲ",
                "romaji" => "kashimadai",
                "memo" => "",
                "latitude" => "38.474618",
                "altitude" => "141.097940",
            ]);
            
            Station::create([
                "id" => 979,
                "prefecture_id" => 4,
                "city_id" => 278,
                "street_id" => 15111,
                "name" => "松山町",
                "hiragana" => "まつやままち",
                "katakana" => "マツヤママチ",
                "katakana_half" => "ﾏﾂﾔﾏﾏﾁ",
                "romaji" => "matsuyamamachi",
                "memo" => "宮城県",
                "latitude" => "38.512780",
                "altitude" => "141.074912",
            ]);
            
            Station::create([
                "id" => 980,
                "prefecture_id" => 4,
                "city_id" => 269,
                "street_id" => 13681,
                "name" => "田尻",
                "hiragana" => "たじり",
                "katakana" => "タジリ",
                "katakana_half" => "ﾀｼﾞﾘ",
                "romaji" => "tajiri",
                "memo" => "宮城県",
                "latitude" => "38.596549",
                "altitude" => "141.059049",
            ]);
            
            Station::create([
                "id" => 981,
                "prefecture_id" => 4,
                "city_id" => 276,
                "street_id" => 14593,
                "name" => "瀬峰",
                "hiragana" => "せみね",
                "katakana" => "セミネ",
                "katakana_half" => "ｾﾐﾈ",
                "romaji" => "semine",
                "memo" => "",
                "latitude" => "38.655514",
                "altitude" => "141.073850",
            ]);
            
            Station::create([
                "id" => 982,
                "prefecture_id" => 4,
                "city_id" => 262,
                "street_id" => 12800,
                "name" => "梅ケ沢",
                "hiragana" => "うめがさわ",
                "katakana" => "ウメガサワ",
                "katakana_half" => "ｳﾒｶﾞｻﾜ",
                "romaji" => "umegasawa",
                "memo" => "",
                "latitude" => "38.681651",
                "altitude" => "141.085348",
            ]);
            
            Station::create([
                "id" => 983,
                "prefecture_id" => 4,
                "city_id" => 263,
                "street_id" => 12991,
                "name" => "新田",
                "hiragana" => "にった",
                "katakana" => "ニッタ",
                "katakana_half" => "ﾆｯﾀ",
                "romaji" => "nitta",
                "memo" => "宮城県",
                "latitude" => "38.711481",
                "altitude" => "141.119344",
            ]);
            
            Station::create([
                "id" => 984,
                "prefecture_id" => 4,
                "city_id" => 275,
                "street_id" => 14111,
                "name" => "石越",
                "hiragana" => "いしこし",
                "katakana" => "イシコシ",
                "katakana_half" => "ｲｼｺｼ",
                "romaji" => "ishikoshi",
                "memo" => "",
                "latitude" => "38.769032",
                "altitude" => "141.159033",
            ]);
            
            Station::create([
                "id" => 985,
                "prefecture_id" => 4,
                "city_id" => 276,
                "street_id" => 14493,
                "name" => "有壁",
                "hiragana" => "ありかべ",
                "katakana" => "アリカベ",
                "katakana_half" => "ｱﾘｶﾍﾞ",
                "romaji" => "arikabe",
                "memo" => "",
                "latitude" => "38.867354",
                "altitude" => "141.120698",
            ]);
            
            Station::create([
                "id" => 986,
                "prefecture_id" => 4,
                "city_id" => 262,
                "street_id" => 12944,
                "name" => "八幡大橋",
                "hiragana" => "はちまんおおはし",
                "katakana" => "ハチマンオオハシ",
                "katakana_half" => "ﾊﾁﾏﾝｵｵﾊｼ",
                "romaji" => "hachimanoohashi",
                "memo" => "",
                "latitude" => "38.920939",
                "altitude" => "141.585157",
            ]);
            
            Station::create([
                "id" => 987,
                "prefecture_id" => 4,
                "city_id" => 266,
                "street_id" => 13213,
                "name" => "泉中央",
                "hiragana" => "いずみちゅうおう",
                "katakana" => "イズミチュウオウ",
                "katakana_half" => "ｲｽﾞﾐﾁｭｳｵｳ",
                "romaji" => "izumichuuou",
                "memo" => "",
                "latitude" => "38.323103",
                "altitude" => "140.880798",
            ]);
            
            Station::create([
                "id" => 988,
                "prefecture_id" => 4,
                "city_id" => 266,
                "street_id" => 13259,
                "name" => "八乙女",
                "hiragana" => "やおとめ",
                "katakana" => "ヤオトメ",
                "katakana_half" => "ﾔｵﾄﾒ",
                "romaji" => "yaotome",
                "memo" => "",
                "latitude" => "38.312908",
                "altitude" => "140.884020",
            ]);
            
            Station::create([
                "id" => 989,
                "prefecture_id" => 4,
                "city_id" => 262,
                "street_id" => 12831,
                "name" => "黒松",
                "hiragana" => "くろまつ",
                "katakana" => "クロマツ",
                "katakana_half" => "ｸﾛﾏﾂ",
                "romaji" => "kuromatsu",
                "memo" => "宮城県",
                "latitude" => "38.303187",
                "altitude" => "140.886381",
            ]);
            
            Station::create([
                "id" => 990,
                "prefecture_id" => 4,
                "city_id" => 262,
                "street_id" => 12789,
                "name" => "旭ケ丘",
                "hiragana" => "あさひがおか",
                "katakana" => "アサヒガオカ",
                "katakana_half" => "ｱｻﾋｶﾞｵｶ",
                "romaji" => "asahigaoka",
                "memo" => "宮城県",
                "latitude" => "38.295577",
                "altitude" => "140.883661",
            ]);
            
            Station::create([
                "id" => 991,
                "prefecture_id" => 4,
                "city_id" => 262,
                "street_id" => 12855,
                "name" => "台原",
                "hiragana" => "だいのはら",
                "katakana" => "ダイノハラ",
                "katakana_half" => "ﾀﾞｲﾉﾊﾗ",
                "romaji" => "dainohara",
                "memo" => "",
                "latitude" => "38.288495",
                "altitude" => "140.878578",
            ]);
            
            Station::create([
                "id" => 992,
                "prefecture_id" => 4,
                "city_id" => 262,
                "street_id" => 12818,
                "name" => "北四番丁",
                "hiragana" => "きたよばんちょう",
                "katakana" => "キタヨバンチョウ",
                "katakana_half" => "ｷﾀﾖﾊﾞﾝﾁｮｳ",
                "romaji" => "kitayobanchou",
                "memo" => "",
                "latitude" => "38.272163",
                "altitude" => "140.869051",
            ]);
            
            Station::create([
                "id" => 993,
                "prefecture_id" => 4,
                "city_id" => 262,
                "street_id" => null,
                "name" => "勾当台公園",
                "hiragana" => "こうとうだいこうえん",
                "katakana" => "コウトウダイコウエン",
                "katakana_half" => "ｺｳﾄｳﾀﾞｲｺｳｴﾝ",
                "romaji" => "koutoudaikouen",
                "memo" => "",
                "latitude" => "38.266886",
                "altitude" => "140.871163",
            ]);
            
            Station::create([
                "id" => 994,
                "prefecture_id" => 4,
                "city_id" => 262,
                "street_id" => 12947,
                "name" => "広瀬通",
                "hiragana" => "ひろせどおり",
                "katakana" => "ヒロセドオリ",
                "katakana_half" => "ﾋﾛｾﾄﾞｵﾘ",
                "romaji" => "hirosedoori",
                "memo" => "",
                "latitude" => "38.262887",
                "altitude" => "140.875468",
            ]);
            
            Station::create([
                "id" => 995,
                "prefecture_id" => 4,
                "city_id" => 262,
                "street_id" => 12798,
                "name" => "五橋",
                "hiragana" => "いつつばし",
                "katakana" => "イツツバシ",
                "katakana_half" => "ｲﾂﾂﾊﾞｼ",
                "romaji" => "itsutsubashi",
                "memo" => "",
                "latitude" => "38.251777",
                "altitude" => "140.881079",
            ]);
            
            Station::create([
                "id" => 996,
                "prefecture_id" => 4,
                "city_id" => 275,
                "street_id" => 14394,
                "name" => "愛宕橋",
                "hiragana" => "あたごばし",
                "katakana" => "アタゴバシ",
                "katakana_half" => "ｱﾀｺﾞﾊﾞｼ",
                "romaji" => "atagobashi",
                "memo" => "",
                "latitude" => "38.247388",
                "altitude" => "140.881690",
            ]);
            
            Station::create([
                "id" => 997,
                "prefecture_id" => 4,
                "city_id" => 282,
                "street_id" => null,
                "name" => "河原町",
                "hiragana" => "かわらまち",
                "katakana" => "カワラマチ",
                "katakana_half" => "ｶﾜﾗﾏﾁ",
                "romaji" => "kawaramachi",
                "memo" => "宮城県",
                "latitude" => "38.241028",
                "altitude" => "140.887746",
            ]);
            
            Station::create([
                "id" => 998,
                "prefecture_id" => 4,
                "city_id" => 265,
                "street_id" => 13130,
                "name" => "長町一丁目",
                "hiragana" => "ながまちいっちょうめ",
                "katakana" => "ナガマチイッチョウメ",
                "katakana_half" => "ﾅｶﾞﾏﾁｲｯﾁｮｳﾒ",
                "romaji" => "nagamachiicchoume",
                "memo" => "",
                "latitude" => "38.234306",
                "altitude" => "140.887440",
            ]);
            
            Station::create([
                "id" => 999,
                "prefecture_id" => 4,
                "city_id" => 265,
                "street_id" => 13163,
                "name" => "長町南",
                "hiragana" => "ながまちみなみ",
                "katakana" => "ナガマチミナミ",
                "katakana_half" => "ﾅｶﾞﾏﾁﾐﾅﾐ",
                "romaji" => "nagamachiminami",
                "memo" => "",
                "latitude" => "38.224613",
                "altitude" => "140.876442",
            ]);
            
            Station::create([
                "id" => 1000,
                "prefecture_id" => 4,
                "city_id" => 265,
                "street_id" => 13155,
                "name" => "富沢",
                "hiragana" => "とみざわ",
                "katakana" => "トミザワ",
                "katakana_half" => "ﾄﾐｻﾞﾜ",
                "romaji" => "tomizawa",
                "memo" => "",
                "latitude" => "38.214086",
                "altitude" => "140.870582",
            ]);
            
            Station::create([
                "id" => 1001,
                "prefecture_id" => 4,
                "city_id" => 265,
                "street_id" => 13191,
                "name" => "八木山動物公園",
                "hiragana" => "やぎやまどうぶつこうえん",
                "katakana" => "ヤギヤマドウブツコウエン",
                "katakana_half" => "ﾔｷﾞﾔﾏﾄﾞｳﾌﾞﾂｺｳｴﾝ",
                "romaji" => "yagiyamadoubutsukouen",
                "memo" => "",
                "latitude" => "38.242943",
                "altitude" => "140.843694",
            ]);
            
            Station::create([
                "id" => 1002,
                "prefecture_id" => 4,
                "city_id" => 262,
                "street_id" => 12786,
                "name" => "青葉山",
                "hiragana" => "あおばやま",
                "katakana" => "アオバヤマ",
                "katakana_half" => "ｱｵﾊﾞﾔﾏ",
                "romaji" => "aobayama",
                "memo" => "",
                "latitude" => "38.255636",
                "altitude" => "140.835527",
            ]);
            
            Station::create([
                "id" => 1003,
                "prefecture_id" => 4,
                "city_id" => 262,
                "street_id" => 12816,
                "name" => "川内",
                "hiragana" => "かわうち",
                "katakana" => "カワウチ",
                "katakana_half" => "ｶﾜｳﾁ",
                "romaji" => "kawauchi",
                "memo" => "宮城県",
                "latitude" => "38.260969",
                "altitude" => "140.850136",
            ]);
            
            Station::create([
                "id" => 1004,
                "prefecture_id" => 4,
                "city_id" => 262,
                "street_id" => 12836,
                "name" => "国際センター",
                "hiragana" => "こくさいせんたー",
                "katakana" => "コクサイセンター",
                "katakana_half" => "ｺｸｻｲｾﾝﾀｰ",
                "romaji" => "kokusaisentaｰ",
                "memo" => "宮城県",
                "latitude" => "38.260219",
                "altitude" => "140.856859",
            ]);
            
            Station::create([
                "id" => 1005,
                "prefecture_id" => 4,
                "city_id" => 262,
                "street_id" => 12803,
                "name" => "大町西公園",
                "hiragana" => "おおまちにしこうえん",
                "katakana" => "オオマチニシコウエン",
                "katakana_half" => "ｵｵﾏﾁﾆｼｺｳｴﾝ",
                "romaji" => "oomachinishikouen",
                "memo" => "",
                "latitude" => "38.258970",
                "altitude" => "140.864247",
            ]);
            
            Station::create([
                "id" => 1006,
                "prefecture_id" => 4,
                "city_id" => 262,
                "street_id" => null,
                "name" => "青葉通一番町",
                "hiragana" => "あおばどおりいちばんちょう",
                "katakana" => "アオバドオリイチバンチョウ",
                "katakana_half" => "ｱｵﾊﾞﾄﾞｵﾘｲﾁﾊﾞﾝﾁｮｳ",
                "romaji" => "aobadooriichibanchou",
                "memo" => "",
                "latitude" => "38.259664",
                "altitude" => "140.872246",
            ]);
            
            Station::create([
                "id" => 1007,
                "prefecture_id" => 4,
                "city_id" => 263,
                "street_id" => null,
                "name" => "宮城野通",
                "hiragana" => "みやぎのどおり",
                "katakana" => "ミヤギノドオリ",
                "katakana_half" => "ﾐﾔｷﾞﾉﾄﾞｵﾘ",
                "romaji" => "miyaginodoori",
                "memo" => "",
                "latitude" => "38.258026",
                "altitude" => "140.885828",
            ]);
            
            Station::create([
                "id" => 1008,
                "prefecture_id" => 4,
                "city_id" => 264,
                "street_id" => 13110,
                "name" => "連坊",
                "hiragana" => "れんぼう",
                "katakana" => "レンボウ",
                "katakana_half" => "ﾚﾝﾎﾞｳ",
                "romaji" => "renbou",
                "memo" => "",
                "latitude" => "38.251138",
                "altitude" => "140.893245",
            ]);
            
            Station::create([
                "id" => 1009,
                "prefecture_id" => 4,
                "city_id" => 276,
                "street_id" => 14670,
                "name" => "薬師堂",
                "hiragana" => "やくしどう",
                "katakana" => "ヤクシドウ",
                "katakana_half" => "ﾔｸｼﾄﾞｳ",
                "romaji" => "yakushidou",
                "memo" => "宮城県",
                "latitude" => "38.249582",
                "altitude" => "140.906049",
            ]);
            
            Station::create([
                "id" => 1010,
                "prefecture_id" => 4,
                "city_id" => 264,
                "street_id" => 13056,
                "name" => "卸町",
                "hiragana" => "おろしまち",
                "katakana" => "オロシマチ",
                "katakana_half" => "ｵﾛｼﾏﾁ",
                "romaji" => "oroshimachi",
                "memo" => "宮城県",
                "latitude" => "38.251500",
                "altitude" => "140.921021",
            ]);
            
            Station::create([
                "id" => 1011,
                "prefecture_id" => 4,
                "city_id" => 264,
                "street_id" => 13115,
                "name" => "六丁の目",
                "hiragana" => "ろくちょうのめ",
                "katakana" => "ロクチョウノメ",
                "katakana_half" => "ﾛｸﾁｮｳﾉﾒ",
                "romaji" => "rokuchounome",
                "memo" => "",
                "latitude" => "38.250916",
                "altitude" => "140.935575",
            ]);
            
            Station::create([
                "id" => 1012,
                "prefecture_id" => 4,
                "city_id" => 264,
                "street_id" => 13039,
                "name" => "荒井",
                "hiragana" => "あらい",
                "katakana" => "アライ",
                "katakana_half" => "ｱﾗｲ",
                "romaji" => "arai",
                "memo" => "宮城県",
                "latitude" => "38.245000",
                "altitude" => "140.948407",
            ]);
            
            Station::create([
                "id" => 1013,
                "prefecture_id" => 4,
                "city_id" => 262,
                "street_id" => 12788,
                "name" => "あぶくま",
                "hiragana" => "あぶくま",
                "katakana" => "アブクマ",
                "katakana_half" => "ｱﾌﾞｸﾏ",
                "romaji" => "abukuma",
                "memo" => "",
                "latitude" => "37.914393",
                "altitude" => "140.686694",
            ]);
            
            Station::create([
                "id" => 1014,
                "prefecture_id" => 4,
                "city_id" => 286,
                "street_id" => null,
                "name" => "丸森",
                "hiragana" => "まるもり",
                "katakana" => "マルモリ",
                "katakana_half" => "ﾏﾙﾓﾘ",
                "romaji" => "marumori",
                "memo" => "",
                "latitude" => "37.930781",
                "altitude" => "140.761631",
            ]);
            
            Station::create([
                "id" => 1015,
                "prefecture_id" => 4,
                "city_id" => 262,
                "street_id" => 12818,
                "name" => "北丸森",
                "hiragana" => "きたまるもり",
                "katakana" => "キタマルモリ",
                "katakana_half" => "ｷﾀﾏﾙﾓﾘ",
                "romaji" => "kitamarumori",
                "memo" => "",
                "latitude" => "37.943003",
                "altitude" => "140.771852",
            ]);
            
            Station::create([
                "id" => 1016,
                "prefecture_id" => 4,
                "city_id" => 300,
                "street_id" => null,
                "name" => "南角田",
                "hiragana" => "みなみかくだ",
                "katakana" => "ミナミカクダ",
                "katakana_half" => "ﾐﾅﾐｶｸﾀﾞ",
                "romaji" => "minamikakuda",
                "memo" => "",
                "latitude" => "37.964861",
                "altitude" => "140.769546",
            ]);
            
            Station::create([
                "id" => 1017,
                "prefecture_id" => 4,
                "city_id" => 272,
                "street_id" => null,
                "name" => "角田",
                "hiragana" => "かくだ",
                "katakana" => "カクダ",
                "katakana_half" => "ｶｸﾀﾞ",
                "romaji" => "kakuda",
                "memo" => "",
                "latitude" => "37.979359",
                "altitude" => "140.772517",
            ]);
            
            Station::create([
                "id" => 1018,
                "prefecture_id" => 4,
                "city_id" => 272,
                "street_id" => 14036,
                "name" => "横倉",
                "hiragana" => "よこくら",
                "katakana" => "ヨコクラ",
                "katakana_half" => "ﾖｺｸﾗ",
                "romaji" => "yokokura",
                "memo" => "宮城県",
                "latitude" => "37.997135",
                "altitude" => "140.776045",
            ]);
            
            Station::create([
                "id" => 1019,
                "prefecture_id" => 4,
                "city_id" => 262,
                "street_id" => 12818,
                "name" => "岡",
                "hiragana" => "おか",
                "katakana" => "オカ",
                "katakana_half" => "ｵｶ",
                "romaji" => "oka",
                "memo" => "",
                "latitude" => "38.018910",
                "altitude" => "140.780431",
            ]);
            
            Station::create([
                "id" => 1020,
                "prefecture_id" => 4,
                "city_id" => 284,
                "street_id" => 15353,
                "name" => "東船岡",
                "hiragana" => "ひがしふなおか",
                "katakana" => "ヒガシフナオカ",
                "katakana_half" => "ﾋｶﾞｼﾌﾅｵｶ",
                "romaji" => "higashifunaoka",
                "memo" => "",
                "latitude" => "38.050046",
                "altitude" => "140.789679",
            ]);
            
            Station::create([
                "id" => 1021,
                "prefecture_id" => 4,
                "city_id" => 271,
                "street_id" => 14007,
                "name" => "杜せきのした",
                "hiragana" => "もりせきのした",
                "katakana" => "モリセキノシタ",
                "katakana_half" => "ﾓﾘｾｷﾉｼﾀ",
                "romaji" => "morisekinoshita",
                "memo" => "",
                "latitude" => "38.165481",
                "altitude" => "140.895749",
            ]);
            
            Station::create([
                "id" => 1022,
                "prefecture_id" => 4,
                "city_id" => 271,
                "street_id" => 13998,
                "name" => "美田園",
                "hiragana" => "みたぞの",
                "katakana" => "ミタゾノ",
                "katakana_half" => "ﾐﾀｿﾞﾉ",
                "romaji" => "mitazono",
                "memo" => "",
                "latitude" => "38.159649",
                "altitude" => "140.917414",
            ]);
            
            Station::create([
                "id" => 1023,
                "prefecture_id" => 4,
                "city_id" => 271,
                "street_id" => 13980,
                "name" => "仙台空港",
                "hiragana" => "せんだいくうこう",
                "katakana" => "センダイクウコウ",
                "katakana_half" => "ｾﾝﾀﾞｲｸｳｺｳ",
                "romaji" => "sendaikuukou",
                "memo" => "鉄道",
                "latitude" => "38.137151",
                "altitude" => "140.929359",
            ]);
            
    }
}
