<?php
namespace Database\Seeders;

use App\Models\Station;
use Illuminate\Database\Seeder;

class StationSeeder10 extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        
            Station::create([
                "id" => 1715,
                "prefecture_id" => 10,
                "city_id" => 489,
                "street_id" => null,
                "name" => "高崎",
                "hiragana" => "たかさき",
                "katakana" => "タカサキ",
                "katakana_half" => "ﾀｶｻｷ",
                "romaji" => "takasaki",
                "memo" => "",
                "latitude" => "36.322034",
                "altitude" => "139.012657",
            ]);
            
            Station::create([
                "id" => 1716,
                "prefecture_id" => 10,
                "city_id" => 502,
                "street_id" => null,
                "name" => "上毛高原",
                "hiragana" => "じょうもうこうげん",
                "katakana" => "ジョウモウコウゲン",
                "katakana_half" => "ｼﾞｮｳﾓｳｺｳｹﾞﾝ",
                "romaji" => "joumoukougen",
                "memo" => "",
                "latitude" => "36.693048",
                "altitude" => "138.977476",
            ]);
            
            Station::create([
                "id" => 1717,
                "prefecture_id" => 10,
                "city_id" => 498,
                "street_id" => null,
                "name" => "安中榛名",
                "hiragana" => "あんなかはるな",
                "katakana" => "アンナカハルナ",
                "katakana_half" => "ｱﾝﾅｶﾊﾙﾅ",
                "romaji" => "annakaharuna",
                "memo" => "",
                "latitude" => "36.362582",
                "altitude" => "138.849613",
            ]);
            
            Station::create([
                "id" => 1718,
                "prefecture_id" => 10,
                "city_id" => 500,
                "street_id" => null,
                "name" => "北高崎",
                "hiragana" => "きたたかさき",
                "katakana" => "キタタカサキ",
                "katakana_half" => "ｷﾀﾀｶｻｷ",
                "romaji" => "kitatakasaki",
                "memo" => "",
                "latitude" => "36.338699",
                "altitude" => "139.001268",
            ]);
            
            Station::create([
                "id" => 1719,
                "prefecture_id" => 10,
                "city_id" => 500,
                "street_id" => null,
                "name" => "群馬八幡",
                "hiragana" => "ぐんまやわた",
                "katakana" => "グンマヤワタ",
                "katakana_half" => "ｸﾞﾝﾏﾔﾜﾀ",
                "romaji" => "gunmayawata",
                "memo" => "",
                "latitude" => "36.337865",
                "altitude" => "138.957438",
            ]);
            
            Station::create([
                "id" => 1720,
                "prefecture_id" => 10,
                "city_id" => 498,
                "street_id" => null,
                "name" => "安中",
                "hiragana" => "あんなか",
                "katakana" => "アンナカ",
                "katakana_half" => "ｱﾝﾅｶ",
                "romaji" => "annaka",
                "memo" => "",
                "latitude" => "36.331781",
                "altitude" => "138.913637",
            ]);
            
            Station::create([
                "id" => 1721,
                "prefecture_id" => 10,
                "city_id" => 498,
                "street_id" => 30023,
                "name" => "磯部",
                "hiragana" => "いそべ",
                "katakana" => "イソベ",
                "katakana_half" => "ｲｿﾍﾞ",
                "romaji" => "isobe",
                "memo" => "群馬県",
                "latitude" => "36.298505",
                "altitude" => "138.849504",
            ]);
            
            Station::create([
                "id" => 1722,
                "prefecture_id" => 10,
                "city_id" => 498,
                "street_id" => 30049,
                "name" => "松井田",
                "hiragana" => "まついだ",
                "katakana" => "マツイダ",
                "katakana_half" => "ﾏﾂｲﾀﾞ",
                "romaji" => "matsuida",
                "memo" => "",
                "latitude" => "36.309254",
                "altitude" => "138.797675",
            ]);
            
            Station::create([
                "id" => 1723,
                "prefecture_id" => 10,
                "city_id" => 488,
                "street_id" => 29011,
                "name" => "西松井田",
                "hiragana" => "にしまついだ",
                "katakana" => "ニシマツイダ",
                "katakana_half" => "ﾆｼﾏﾂｲﾀﾞ",
                "romaji" => "nishimatsuida",
                "memo" => "",
                "latitude" => "36.316225",
                "altitude" => "138.786370",
            ]);
            
            Station::create([
                "id" => 1724,
                "prefecture_id" => 10,
                "city_id" => 498,
                "street_id" => 30069,
                "name" => "横川",
                "hiragana" => "よこかわ",
                "katakana" => "ヨコカワ",
                "katakana_half" => "ﾖｺｶﾜ",
                "romaji" => "yokokawa",
                "memo" => "群馬県",
                "latitude" => "36.335917",
                "altitude" => "138.737873",
            ]);
            
            Station::create([
                "id" => 1725,
                "prefecture_id" => 10,
                "city_id" => 490,
                "street_id" => null,
                "name" => "桐生",
                "hiragana" => "きりゅう",
                "katakana" => "キリュウ",
                "katakana_half" => "ｷﾘｭｳ",
                "romaji" => "kiryuu",
                "memo" => "",
                "latitude" => "36.411224",
                "altitude" => "139.332765",
            ]);
            
            Station::create([
                "id" => 1726,
                "prefecture_id" => 10,
                "city_id" => 488,
                "street_id" => 28987,
                "name" => "岩宿",
                "hiragana" => "いわじゅく",
                "katakana" => "イワジュク",
                "katakana_half" => "ｲﾜｼﾞｭｸ",
                "romaji" => "iwajuku",
                "memo" => "",
                "latitude" => "36.395808",
                "altitude" => "139.296768",
            ]);
            
            Station::create([
                "id" => 1727,
                "prefecture_id" => 10,
                "city_id" => 491,
                "street_id" => 29469,
                "name" => "国定",
                "hiragana" => "くにさだ",
                "katakana" => "クニサダ",
                "katakana_half" => "ｸﾆｻﾀﾞ",
                "romaji" => "kunisada",
                "memo" => "",
                "latitude" => "36.358783",
                "altitude" => "139.241969",
            ]);
            
            Station::create([
                "id" => 1728,
                "prefecture_id" => 10,
                "city_id" => 491,
                "street_id" => null,
                "name" => "伊勢崎",
                "hiragana" => "いせさき",
                "katakana" => "イセサキ",
                "katakana_half" => "ｲｾｻｷ",
                "romaji" => "isesaki",
                "memo" => "",
                "latitude" => "36.326841",
                "altitude" => "139.194169",
            ]);
            
            Station::create([
                "id" => 1729,
                "prefecture_id" => 10,
                "city_id" => 488,
                "street_id" => 29049,
                "name" => "駒形",
                "hiragana" => "こまがた",
                "katakana" => "コマガタ",
                "katakana_half" => "ｺﾏｶﾞﾀ",
                "romaji" => "komagata",
                "memo" => "",
                "latitude" => "36.354033",
                "altitude" => "139.139811",
            ]);
            
            Station::create([
                "id" => 1730,
                "prefecture_id" => 10,
                "city_id" => 488,
                "street_id" => null,
                "name" => "前橋大島",
                "hiragana" => "まえばしおおしま",
                "katakana" => "マエバシオオシマ",
                "katakana_half" => "ﾏｴﾊﾞｼｵｵｼﾏ",
                "romaji" => "maebashiooshima",
                "memo" => "",
                "latitude" => "36.370530",
                "altitude" => "139.109674",
            ]);
            
            Station::create([
                "id" => 1731,
                "prefecture_id" => 10,
                "city_id" => 488,
                "street_id" => null,
                "name" => "前橋",
                "hiragana" => "まえばし",
                "katakana" => "マエバシ",
                "katakana_half" => "ﾏｴﾊﾞｼ",
                "romaji" => "maebashi",
                "memo" => "",
                "latitude" => "36.383195",
                "altitude" => "139.073205",
            ]);
            
            Station::create([
                "id" => 1732,
                "prefecture_id" => 10,
                "city_id" => 488,
                "street_id" => 29067,
                "name" => "新前橋",
                "hiragana" => "しんまえばし",
                "katakana" => "シンマエバシ",
                "katakana_half" => "ｼﾝﾏｴﾊﾞｼ",
                "romaji" => "shinmaebashi",
                "memo" => "",
                "latitude" => "36.378973",
                "altitude" => "139.047096",
            ]);
            
            Station::create([
                "id" => 1733,
                "prefecture_id" => 10,
                "city_id" => 489,
                "street_id" => 29163,
                "name" => "井野",
                "hiragana" => "いの",
                "katakana" => "イノ",
                "katakana_half" => "ｲﾉ",
                "romaji" => "ino",
                "memo" => "群馬県",
                "latitude" => "36.357308",
                "altitude" => "139.022932",
            ]);
            
            Station::create([
                "id" => 1734,
                "prefecture_id" => 10,
                "city_id" => 489,
                "street_id" => null,
                "name" => "高崎問屋町",
                "hiragana" => "たかさきとんやまち",
                "katakana" => "タカサキトンヤマチ",
                "katakana_half" => "ﾀｶｻｷﾄﾝﾔﾏﾁ",
                "romaji" => "takasakitonyamachi",
                "memo" => "",
                "latitude" => "36.346086",
                "altitude" => "139.017100",
            ]);
            
            Station::create([
                "id" => 1735,
                "prefecture_id" => 10,
                "city_id" => 500,
                "street_id" => null,
                "name" => "群馬総社",
                "hiragana" => "ぐんまそうじゃ",
                "katakana" => "グンマソウジャ",
                "katakana_half" => "ｸﾞﾝﾏｿｳｼﾞｬ",
                "romaji" => "gunmasouja",
                "memo" => "",
                "latitude" => "36.415830",
                "altitude" => "139.032373",
            ]);
            
            Station::create([
                "id" => 1736,
                "prefecture_id" => 10,
                "city_id" => 490,
                "street_id" => 29403,
                "name" => "八木原",
                "hiragana" => "やぎはら",
                "katakana" => "ヤギハラ",
                "katakana_half" => "ﾔｷﾞﾊﾗ",
                "romaji" => "yagihara",
                "memo" => "",
                "latitude" => "36.463602",
                "altitude" => "139.019094",
            ]);
            
            Station::create([
                "id" => 1737,
                "prefecture_id" => 10,
                "city_id" => 495,
                "street_id" => null,
                "name" => "渋川",
                "hiragana" => "しぶかわ",
                "katakana" => "シブカワ",
                "katakana_half" => "ｼﾌﾞｶﾜ",
                "romaji" => "shibukawa",
                "memo" => "",
                "latitude" => "36.490709",
                "altitude" => "139.008399",
            ]);
            
            Station::create([
                "id" => 1738,
                "prefecture_id" => 10,
                "city_id" => 488,
                "street_id" => 29052,
                "name" => "敷島",
                "hiragana" => "しきしま",
                "katakana" => "シキシマ",
                "katakana_half" => "ｼｷｼﾏ",
                "romaji" => "shikishima",
                "memo" => "",
                "latitude" => "36.538594",
                "altitude" => "139.034006",
            ]);
            
            Station::create([
                "id" => 1739,
                "prefecture_id" => 10,
                "city_id" => 495,
                "street_id" => 29879,
                "name" => "津久田",
                "hiragana" => "つくだ",
                "katakana" => "ツクダ",
                "katakana_half" => "ﾂｸﾀﾞ",
                "romaji" => "tsukuda",
                "memo" => "",
                "latitude" => "36.561009",
                "altitude" => "139.042726",
            ]);
            
            Station::create([
                "id" => 1740,
                "prefecture_id" => 10,
                "city_id" => 493,
                "street_id" => 29723,
                "name" => "岩本",
                "hiragana" => "いわもと",
                "katakana" => "イワモト",
                "katakana_half" => "ｲﾜﾓﾄ",
                "romaji" => "iwamoto",
                "memo" => "",
                "latitude" => "36.603255",
                "altitude" => "139.047168",
            ]);
            
            Station::create([
                "id" => 1741,
                "prefecture_id" => 10,
                "city_id" => 493,
                "street_id" => null,
                "name" => "沼田",
                "hiragana" => "ぬまた",
                "katakana" => "ヌマタ",
                "katakana_half" => "ﾇﾏﾀ",
                "romaji" => "numata",
                "memo" => "",
                "latitude" => "36.642528",
                "altitude" => "139.035751",
            ]);
            
            Station::create([
                "id" => 1742,
                "prefecture_id" => 10,
                "city_id" => 488,
                "street_id" => 29042,
                "name" => "後閑",
                "hiragana" => "ごかん",
                "katakana" => "ゴカン",
                "katakana_half" => "ｺﾞｶﾝ",
                "romaji" => "gokan",
                "memo" => "",
                "latitude" => "36.679300",
                "altitude" => "139.000113",
            ]);
            
            Station::create([
                "id" => 1743,
                "prefecture_id" => 10,
                "city_id" => 516,
                "street_id" => 30325,
                "name" => "上牧",
                "hiragana" => "かみもく",
                "katakana" => "カミモク",
                "katakana_half" => "ｶﾐﾓｸ",
                "romaji" => "kamimoku",
                "memo" => "群馬県",
                "latitude" => "36.735462",
                "altitude" => "138.984168",
            ]);
            
            Station::create([
                "id" => 1744,
                "prefecture_id" => 10,
                "city_id" => 489,
                "street_id" => 29207,
                "name" => "水上",
                "hiragana" => "みなかみ",
                "katakana" => "ミナカミ",
                "katakana_half" => "ﾐﾅｶﾐ",
                "romaji" => "minakami",
                "memo" => "",
                "latitude" => "36.778623",
                "altitude" => "138.968806",
            ]);
            
            Station::create([
                "id" => 1745,
                "prefecture_id" => 10,
                "city_id" => 495,
                "street_id" => 29892,
                "name" => "湯檜曽",
                "hiragana" => "ゆびそ",
                "katakana" => "ユビソ",
                "katakana_half" => "ﾕﾋﾞｿ",
                "romaji" => "yubiso",
                "memo" => "",
                "latitude" => "36.802704",
                "altitude" => "138.986498",
            ]);
            
            Station::create([
                "id" => 1746,
                "prefecture_id" => 10,
                "city_id" => 488,
                "street_id" => 28980,
                "name" => "土合",
                "hiragana" => "どあい",
                "katakana" => "ドアイ",
                "katakana_half" => "ﾄﾞｱｲ",
                "romaji" => "doai",
                "memo" => "",
                "latitude" => "36.831367",
                "altitude" => "138.967109",
            ]);
            
            Station::create([
                "id" => 1747,
                "prefecture_id" => 10,
                "city_id" => 488,
                "street_id" => 29017,
                "name" => "金島",
                "hiragana" => "かなしま",
                "katakana" => "カナシマ",
                "katakana_half" => "ｶﾅｼﾏ",
                "romaji" => "kanashima",
                "memo" => "群馬県",
                "latitude" => "36.529344",
                "altitude" => "138.976456",
            ]);
            
            Station::create([
                "id" => 1748,
                "prefecture_id" => 10,
                "city_id" => 495,
                "street_id" => 29894,
                "name" => "祖母島",
                "hiragana" => "うばしま",
                "katakana" => "ウバシマ",
                "katakana_half" => "ｳﾊﾞｼﾏ",
                "romaji" => "ubashima",
                "memo" => "",
                "latitude" => "36.540621",
                "altitude" => "138.957068",
            ]);
            
            Station::create([
                "id" => 1749,
                "prefecture_id" => 10,
                "city_id" => 495,
                "street_id" => 29895,
                "name" => "小野上",
                "hiragana" => "おのがみ",
                "katakana" => "オノガミ",
                "katakana_half" => "ｵﾉｶﾞﾐ",
                "romaji" => "onogami",
                "memo" => "",
                "latitude" => "36.552424",
                "altitude" => "138.922181",
            ]);
            
            Station::create([
                "id" => 1750,
                "prefecture_id" => 10,
                "city_id" => 495,
                "street_id" => 29895,
                "name" => "小野上温泉",
                "hiragana" => "おのがみおんせん",
                "katakana" => "オノガミオンセン",
                "katakana_half" => "ｵﾉｶﾞﾐｵﾝｾﾝ",
                "romaji" => "onogamionsen",
                "memo" => "",
                "latitude" => "36.556840",
                "altitude" => "138.904349",
            ]);
            
            Station::create([
                "id" => 1751,
                "prefecture_id" => 10,
                "city_id" => 507,
                "street_id" => 30187,
                "name" => "市城",
                "hiragana" => "いちしろ",
                "katakana" => "イチシロ",
                "katakana_half" => "ｲﾁｼﾛ",
                "romaji" => "ichishiro",
                "memo" => "",
                "latitude" => "36.570643",
                "altitude" => "138.882295",
            ]);
            
            Station::create([
                "id" => 1752,
                "prefecture_id" => 10,
                "city_id" => 507,
                "street_id" => null,
                "name" => "中之条",
                "hiragana" => "なかのじょう",
                "katakana" => "ナカノジョウ",
                "katakana_half" => "ﾅｶﾉｼﾞｮｳ",
                "romaji" => "nakanojou",
                "memo" => "",
                "latitude" => "36.585558",
                "altitude" => "138.850880",
            ]);
            
            Station::create([
                "id" => 1753,
                "prefecture_id" => 10,
                "city_id" => 500,
                "street_id" => null,
                "name" => "群馬原町",
                "hiragana" => "ぐんまはらまち",
                "katakana" => "グンマハラマチ",
                "katakana_half" => "ｸﾞﾝﾏﾊﾗﾏﾁ",
                "romaji" => "gunmaharamachi",
                "memo" => "",
                "latitude" => "36.571698",
                "altitude" => "138.824410",
            ]);
            
            Station::create([
                "id" => 1754,
                "prefecture_id" => 10,
                "city_id" => 498,
                "street_id" => 30031,
                "name" => "郷原",
                "hiragana" => "ごうばら",
                "katakana" => "ゴウバラ",
                "katakana_half" => "ｺﾞｳﾊﾞﾗ",
                "romaji" => "goubara",
                "memo" => "",
                "latitude" => "36.548700",
                "altitude" => "138.801108",
            ]);
            
            Station::create([
                "id" => 1755,
                "prefecture_id" => 10,
                "city_id" => 512,
                "street_id" => 30277,
                "name" => "矢倉",
                "hiragana" => "やぐら",
                "katakana" => "ヤグラ",
                "katakana_half" => "ﾔｸﾞﾗ",
                "romaji" => "yagura",
                "memo" => "",
                "latitude" => "36.552672",
                "altitude" => "138.784137",
            ]);
            
            Station::create([
                "id" => 1756,
                "prefecture_id" => 10,
                "city_id" => 488,
                "street_id" => 28987,
                "name" => "岩島",
                "hiragana" => "いわしま",
                "katakana" => "イワシマ",
                "katakana_half" => "ｲﾜｼﾏ",
                "romaji" => "iwashima",
                "memo" => "",
                "latitude" => "36.563197",
                "altitude" => "138.759889",
            ]);
            
            Station::create([
                "id" => 1757,
                "prefecture_id" => 10,
                "city_id" => 508,
                "street_id" => 30214,
                "name" => "川原湯温泉",
                "hiragana" => "かわらゆおんせん",
                "katakana" => "カワラユオンセン",
                "katakana_half" => "ｶﾜﾗﾕｵﾝｾﾝ",
                "romaji" => "kawarayuonsen",
                "memo" => "",
                "latitude" => "36.545116",
                "altitude" => "138.697200",
            ]);
            
            Station::create([
                "id" => 1758,
                "prefecture_id" => 10,
                "city_id" => 508,
                "street_id" => null,
                "name" => "長野原草津口",
                "hiragana" => "ながのはらくさつぐち",
                "katakana" => "ナガノハラクサツグチ",
                "katakana_half" => "ﾅｶﾞﾉﾊﾗｸｻﾂｸﾞﾁ",
                "romaji" => "naganoharakusatsuguchi",
                "memo" => "",
                "latitude" => "36.546531",
                "altitude" => "138.649871",
            ]);
            
            Station::create([
                "id" => 1759,
                "prefecture_id" => 10,
                "city_id" => 500,
                "street_id" => null,
                "name" => "群馬大津",
                "hiragana" => "ぐんまおおつ",
                "katakana" => "グンマオオツ",
                "katakana_half" => "ｸﾞﾝﾏｵｵﾂ",
                "romaji" => "gunmaootsu",
                "memo" => "",
                "latitude" => "36.553835",
                "altitude" => "138.628038",
            ]);
            
            Station::create([
                "id" => 1760,
                "prefecture_id" => 10,
                "city_id" => 508,
                "street_id" => 30217,
                "name" => "羽根尾",
                "hiragana" => "はねお",
                "katakana" => "ハネオ",
                "katakana_half" => "ﾊﾈｵ",
                "romaji" => "haneo",
                "memo" => "",
                "latitude" => "36.550169",
                "altitude" => "138.605485",
            ]);
            
            Station::create([
                "id" => 1761,
                "prefecture_id" => 10,
                "city_id" => 509,
                "street_id" => 30241,
                "name" => "袋倉",
                "hiragana" => "ふくろぐら",
                "katakana" => "フクログラ",
                "katakana_half" => "ﾌｸﾛｸﾞﾗ",
                "romaji" => "fukurogura",
                "memo" => "",
                "latitude" => "36.544113",
                "altitude" => "138.578876",
            ]);
            
            Station::create([
                "id" => 1762,
                "prefecture_id" => 10,
                "city_id" => 509,
                "street_id" => 30242,
                "name" => "万座・鹿沢口",
                "hiragana" => "まんざかざわぐち",
                "katakana" => "マンザカザワグチ",
                "katakana_half" => "ﾏﾝｻﾞｶｻﾞﾜｸﾞﾁ",
                "romaji" => "manzakazawaguchi",
                "memo" => "",
                "latitude" => "36.532059",
                "altitude" => "138.551240",
            ]);
            
            Station::create([
                "id" => 1763,
                "prefecture_id" => 10,
                "city_id" => 488,
                "street_id" => 28995,
                "name" => "大前",
                "hiragana" => "おおまえ",
                "katakana" => "オオマエ",
                "katakana_half" => "ｵｵﾏｴ",
                "romaji" => "oomae",
                "memo" => "",
                "latitude" => "36.513754",
                "altitude" => "138.529021",
            ]);
            
            Station::create([
                "id" => 1764,
                "prefecture_id" => 10,
                "city_id" => 489,
                "street_id" => 29246,
                "name" => "新町",
                "hiragana" => "しんまち",
                "katakana" => "シンマチ",
                "katakana_half" => "ｼﾝﾏﾁ",
                "romaji" => "shinmachi",
                "memo" => "群馬県",
                "latitude" => "36.273179",
                "altitude" => "139.105485",
            ]);
            
            Station::create([
                "id" => 1765,
                "prefecture_id" => 10,
                "city_id" => 489,
                "street_id" => 29202,
                "name" => "倉賀野",
                "hiragana" => "くらがの",
                "katakana" => "クラガノ",
                "katakana_half" => "ｸﾗｶﾞﾉ",
                "romaji" => "kuragano",
                "memo" => "",
                "latitude" => "36.300259",
                "altitude" => "139.049183",
            ]);
            
            Station::create([
                "id" => 1766,
                "prefecture_id" => 10,
                "city_id" => 500,
                "street_id" => null,
                "name" => "群馬藤岡",
                "hiragana" => "ぐんまふじおか",
                "katakana" => "グンマフジオカ",
                "katakana_half" => "ｸﾞﾝﾏﾌｼﾞｵｶ",
                "romaji" => "gunmafujioka",
                "memo" => "",
                "latitude" => "36.250209",
                "altitude" => "139.083292",
            ]);
            
            Station::create([
                "id" => 1767,
                "prefecture_id" => 10,
                "city_id" => 500,
                "street_id" => null,
                "name" => "北藤岡",
                "hiragana" => "きたふじおか",
                "katakana" => "キタフジオカ",
                "katakana_half" => "ｷﾀﾌｼﾞｵｶ",
                "romaji" => "kitafujioka",
                "memo" => "",
                "latitude" => "36.282400",
                "altitude" => "139.080903",
            ]);
            
            Station::create([
                "id" => 1768,
                "prefecture_id" => 10,
                "city_id" => 494,
                "street_id" => null,
                "name" => "館林",
                "hiragana" => "たてばやし",
                "katakana" => "タテバヤシ",
                "katakana_half" => "ﾀﾃﾊﾞﾔｼ",
                "romaji" => "tatebayashi",
                "memo" => "",
                "latitude" => "36.246300",
                "altitude" => "139.527978",
            ]);
            
            Station::create([
                "id" => 1769,
                "prefecture_id" => 10,
                "city_id" => 488,
                "street_id" => 28996,
                "name" => "渡瀬",
                "hiragana" => "わたらせ",
                "katakana" => "ワタラセ",
                "katakana_half" => "ﾜﾀﾗｾ",
                "romaji" => "watarase",
                "memo" => "群馬県",
                "latitude" => "36.261744",
                "altitude" => "139.536922",
            ]);
            
            Station::create([
                "id" => 1770,
                "prefecture_id" => 10,
                "city_id" => 492,
                "street_id" => null,
                "name" => "太田",
                "hiragana" => "おおた",
                "katakana" => "オオタ",
                "katakana_half" => "ｵｵﾀ",
                "romaji" => "oota",
                "memo" => "群馬県",
                "latitude" => "36.294070",
                "altitude" => "139.378739",
            ]);
            
            Station::create([
                "id" => 1771,
                "prefecture_id" => 10,
                "city_id" => 488,
                "street_id" => 29135,
                "name" => "三枚橋",
                "hiragana" => "さんまいばし",
                "katakana" => "サンマイバシ",
                "katakana_half" => "ｻﾝﾏｲﾊﾞｼ",
                "romaji" => "sanmaibashi",
                "memo" => "",
                "latitude" => "36.313540",
                "altitude" => "139.354851",
            ]);
            
            Station::create([
                "id" => 1772,
                "prefecture_id" => 10,
                "city_id" => 488,
                "street_id" => null,
                "name" => "治良門橋",
                "hiragana" => "じろえんばし",
                "katakana" => "ジロエンバシ",
                "katakana_half" => "ｼﾞﾛｴﾝﾊﾞｼ",
                "romaji" => "jiroenbashi",
                "memo" => "",
                "latitude" => "36.333066",
                "altitude" => "139.341073",
            ]);
            
            Station::create([
                "id" => 1773,
                "prefecture_id" => 10,
                "city_id" => 492,
                "street_id" => 29709,
                "name" => "藪塚",
                "hiragana" => "やぶづか",
                "katakana" => "ヤブヅカ",
                "katakana_half" => "ﾔﾌﾞﾂﾞｶ",
                "romaji" => "yabuzuka",
                "memo" => "",
                "latitude" => "36.358980",
                "altitude" => "139.315269",
            ]);
            
            Station::create([
                "id" => 1774,
                "prefecture_id" => 10,
                "city_id" => 499,
                "street_id" => 30091,
                "name" => "阿左美",
                "hiragana" => "あざみ",
                "katakana" => "アザミ",
                "katakana_half" => "ｱｻﾞﾐ",
                "romaji" => "azami",
                "memo" => "",
                "latitude" => "36.385560",
                "altitude" => "139.306657",
            ]);
            
            Station::create([
                "id" => 1775,
                "prefecture_id" => 10,
                "city_id" => 490,
                "street_id" => null,
                "name" => "新桐生",
                "hiragana" => "しんきりゅう",
                "katakana" => "シンキリュウ",
                "katakana_half" => "ｼﾝｷﾘｭｳ",
                "romaji" => "shinkiryuu",
                "memo" => "",
                "latitude" => "36.395114",
                "altitude" => "139.320045",
            ]);
            
            Station::create([
                "id" => 1776,
                "prefecture_id" => 10,
                "city_id" => 488,
                "street_id" => 29039,
                "name" => "相老",
                "hiragana" => "あいおい",
                "katakana" => "アイオイ",
                "katakana_half" => "ｱｲｵｲ",
                "romaji" => "aioi",
                "memo" => "",
                "latitude" => "36.410476",
                "altitude" => "139.304434",
            ]);
            
            Station::create([
                "id" => 1777,
                "prefecture_id" => 10,
                "city_id" => 488,
                "street_id" => 29113,
                "name" => "赤城",
                "hiragana" => "あかぎ",
                "katakana" => "アカギ",
                "katakana_half" => "ｱｶｷﾞ",
                "romaji" => "akagi",
                "memo" => "",
                "latitude" => "36.425749",
                "altitude" => "139.276269",
            ]);
            
            Station::create([
                "id" => 1778,
                "prefecture_id" => 10,
                "city_id" => 494,
                "street_id" => 29819,
                "name" => "成島",
                "hiragana" => "なるしま",
                "katakana" => "ナルシマ",
                "katakana_half" => "ﾅﾙｼﾏ",
                "romaji" => "narushima",
                "memo" => "群馬県",
                "latitude" => "36.249134",
                "altitude" => "139.505841",
            ]);
            
            Station::create([
                "id" => 1779,
                "prefecture_id" => 10,
                "city_id" => 488,
                "street_id" => 29133,
                "name" => "本中野",
                "hiragana" => "ほんなかの",
                "katakana" => "ホンナカノ",
                "katakana_half" => "ﾎﾝﾅｶﾉ",
                "romaji" => "honnakano",
                "memo" => "",
                "latitude" => "36.258520",
                "altitude" => "139.469761",
            ]);
            
            Station::create([
                "id" => 1780,
                "prefecture_id" => 10,
                "city_id" => 496,
                "street_id" => 29937,
                "name" => "篠塚",
                "hiragana" => "しのづか",
                "katakana" => "シノヅカ",
                "katakana_half" => "ｼﾉﾂﾞｶ",
                "romaji" => "shinozuka",
                "memo" => "",
                "latitude" => "36.256659",
                "altitude" => "139.446624",
            ]);
            
            Station::create([
                "id" => 1781,
                "prefecture_id" => 10,
                "city_id" => 521,
                "street_id" => 30448,
                "name" => "東小泉",
                "hiragana" => "ひがしこいずみ",
                "katakana" => "ヒガシコイズミ",
                "katakana_half" => "ﾋｶﾞｼｺｲｽﾞﾐ",
                "romaji" => "higashikoizumi",
                "memo" => "",
                "latitude" => "36.259436",
                "altitude" => "139.429070",
            ]);
            
            Station::create([
                "id" => 1782,
                "prefecture_id" => 10,
                "city_id" => 491,
                "street_id" => 29473,
                "name" => "小泉町",
                "hiragana" => "こいずみまち",
                "katakana" => "コイズミマチ",
                "katakana_half" => "ｺｲｽﾞﾐﾏﾁ",
                "romaji" => "koizumimachi",
                "memo" => "群馬県",
                "latitude" => "36.261492",
                "altitude" => "139.419959",
            ]);
            
            Station::create([
                "id" => 1783,
                "prefecture_id" => 10,
                "city_id" => 521,
                "street_id" => 30447,
                "name" => "西小泉",
                "hiragana" => "にしこいずみ",
                "katakana" => "ニシコイズミ",
                "katakana_half" => "ﾆｼｺｲｽﾞﾐ",
                "romaji" => "nishikoizumi",
                "memo" => "",
                "latitude" => "36.258241",
                "altitude" => "139.408377",
            ]);
            
            Station::create([
                "id" => 1784,
                "prefecture_id" => 10,
                "city_id" => 489,
                "street_id" => 29258,
                "name" => "竜舞",
                "hiragana" => "りゅうまい",
                "katakana" => "リュウマイ",
                "katakana_half" => "ﾘｭｳﾏｲ",
                "romaji" => "ryuumai",
                "memo" => "",
                "latitude" => "36.279184",
                "altitude" => "139.408931",
            ]);
            
            Station::create([
                "id" => 1785,
                "prefecture_id" => 10,
                "city_id" => 518,
                "street_id" => null,
                "name" => "板倉東洋大前",
                "hiragana" => "いたくらとうようだいまえ",
                "katakana" => "イタクラトウヨウダイマエ",
                "katakana_half" => "ｲﾀｸﾗﾄｳﾖｳﾀﾞｲﾏｴ",
                "romaji" => "itakuratouyoudaimae",
                "memo" => "",
                "latitude" => "36.222056",
                "altitude" => "139.648581",
            ]);
            
            Station::create([
                "id" => 1786,
                "prefecture_id" => 10,
                "city_id" => 519,
                "street_id" => 30409,
                "name" => "川俣",
                "hiragana" => "かわまた",
                "katakana" => "カワマタ",
                "katakana_half" => "ｶﾜﾏﾀ",
                "romaji" => "kawamata",
                "memo" => "",
                "latitude" => "36.208861",
                "altitude" => "139.526508",
            ]);
            
            Station::create([
                "id" => 1787,
                "prefecture_id" => 10,
                "city_id" => 488,
                "street_id" => 29142,
                "name" => "茂林寺前",
                "hiragana" => "もりんじまえ",
                "katakana" => "モリンジマエ",
                "katakana_half" => "ﾓﾘﾝｼﾞﾏｴ",
                "romaji" => "morinjimae",
                "memo" => "",
                "latitude" => "36.225526",
                "altitude" => "139.527118",
            ]);
            
            Station::create([
                "id" => 1788,
                "prefecture_id" => 10,
                "city_id" => 502,
                "street_id" => null,
                "name" => "多々良",
                "hiragana" => "たたら",
                "katakana" => "タタラ",
                "katakana_half" => "ﾀﾀﾗ",
                "romaji" => "tatara",
                "memo" => "",
                "latitude" => "36.273408",
                "altitude" => "139.500535",
            ]);
            
            Station::create([
                "id" => 1789,
                "prefecture_id" => 10,
                "city_id" => 492,
                "street_id" => 29675,
                "name" => "韮川",
                "hiragana" => "にらがわ",
                "katakana" => "ニラガワ",
                "katakana_half" => "ﾆﾗｶﾞﾜ",
                "romaji" => "niragawa",
                "memo" => "",
                "latitude" => "36.307903",
                "altitude" => "139.401708",
            ]);
            
            Station::create([
                "id" => 1790,
                "prefecture_id" => 10,
                "city_id" => 492,
                "street_id" => 29693,
                "name" => "細谷",
                "hiragana" => "ほそや",
                "katakana" => "ホソヤ",
                "katakana_half" => "ﾎｿﾔ",
                "romaji" => "hosoya",
                "memo" => "群馬県",
                "latitude" => "36.282516",
                "altitude" => "139.348520",
            ]);
            
            Station::create([
                "id" => 1791,
                "prefecture_id" => 10,
                "city_id" => 492,
                "street_id" => 29658,
                "name" => "木崎",
                "hiragana" => "きざき",
                "katakana" => "キザキ",
                "katakana_half" => "ｷｻﾞｷ",
                "romaji" => "kizaki",
                "memo" => "",
                "latitude" => "36.271128",
                "altitude" => "139.312467",
            ]);
            
            Station::create([
                "id" => 1792,
                "prefecture_id" => 10,
                "city_id" => 492,
                "street_id" => 29616,
                "name" => "世良田",
                "hiragana" => "せらだ",
                "katakana" => "セラダ",
                "katakana_half" => "ｾﾗﾀﾞ",
                "romaji" => "serada",
                "memo" => "",
                "latitude" => "36.272988",
                "altitude" => "139.281303",
            ]);
            
            Station::create([
                "id" => 1793,
                "prefecture_id" => 10,
                "city_id" => 490,
                "street_id" => 29407,
                "name" => "境町",
                "hiragana" => "さかいまち",
                "katakana" => "サカイマチ",
                "katakana_half" => "ｻｶｲﾏﾁ",
                "romaji" => "sakaimachi",
                "memo" => "",
                "latitude" => "36.277043",
                "altitude" => "139.256583",
            ]);
            
            Station::create([
                "id" => 1794,
                "prefecture_id" => 10,
                "city_id" => 488,
                "street_id" => null,
                "name" => "剛志",
                "hiragana" => "ごうし",
                "katakana" => "ゴウシ",
                "katakana_half" => "ｺﾞｳｼ",
                "romaji" => "goushi",
                "memo" => "",
                "latitude" => "36.295513",
                "altitude" => "139.224085",
            ]);
            
            Station::create([
                "id" => 1795,
                "prefecture_id" => 10,
                "city_id" => 491,
                "street_id" => null,
                "name" => "新伊勢崎",
                "hiragana" => "しんいせさき",
                "katakana" => "シンイセサキ",
                "katakana_half" => "ｼﾝｲｾｻｷ",
                "romaji" => "shinisesaki",
                "memo" => "",
                "latitude" => "36.318231",
                "altitude" => "139.201863",
            ]);
            
            Station::create([
                "id" => 1796,
                "prefecture_id" => 10,
                "city_id" => 488,
                "street_id" => 29061,
                "name" => "下新田",
                "hiragana" => "しもしんでん",
                "katakana" => "シモシンデン",
                "katakana_half" => "ｼﾓｼﾝﾃﾞﾝ",
                "romaji" => "shimoshinden",
                "memo" => "",
                "latitude" => "36.407641",
                "altitude" => "139.315239",
            ]);
            
            Station::create([
                "id" => 1797,
                "prefecture_id" => 10,
                "city_id" => 488,
                "street_id" => null,
                "name" => "運動公園",
                "hiragana" => "うんどうこうえん",
                "katakana" => "ウンドウコウエン",
                "katakana_half" => "ｳﾝﾄﾞｳｺｳｴﾝ",
                "romaji" => "undoukouen",
                "memo" => "群馬県",
                "latitude" => "36.420501",
                "altitude" => "139.300878",
            ]);
            
            Station::create([
                "id" => 1798,
                "prefecture_id" => 10,
                "city_id" => 499,
                "street_id" => 30081,
                "name" => "大間々",
                "hiragana" => "おおまま",
                "katakana" => "オオママ",
                "katakana_half" => "ｵｵﾏﾏ",
                "romaji" => "oomama",
                "memo" => "",
                "latitude" => "36.434609",
                "altitude" => "139.277463",
            ]);
            
            Station::create([
                "id" => 1799,
                "prefecture_id" => 10,
                "city_id" => 499,
                "street_id" => 30084,
                "name" => "上神梅",
                "hiragana" => "かみかんばい",
                "katakana" => "カミカンバイ",
                "katakana_half" => "ｶﾐｶﾝﾊﾞｲ",
                "romaji" => "kamikanbai",
                "memo" => "",
                "latitude" => "36.469966",
                "altitude" => "139.257685",
            ]);
            
            Station::create([
                "id" => 1800,
                "prefecture_id" => 10,
                "city_id" => 504,
                "street_id" => 30152,
                "name" => "本宿",
                "hiragana" => "もとじゅく",
                "katakana" => "モトジュク",
                "katakana_half" => "ﾓﾄｼﾞｭｸ",
                "romaji" => "motojuku",
                "memo" => "群馬県",
                "latitude" => "36.481548",
                "altitude" => "139.259073",
            ]);
            
            Station::create([
                "id" => 1801,
                "prefecture_id" => 10,
                "city_id" => 489,
                "street_id" => 29207,
                "name" => "水沼",
                "hiragana" => "みずぬま",
                "katakana" => "ミズヌマ",
                "katakana_half" => "ﾐｽﾞﾇﾏ",
                "romaji" => "mizunuma",
                "memo" => "",
                "latitude" => "36.500019",
                "altitude" => "139.277460",
            ]);
            
            Station::create([
                "id" => 1802,
                "prefecture_id" => 10,
                "city_id" => 499,
                "street_id" => 30080,
                "name" => "花輪",
                "hiragana" => "はなわ",
                "katakana" => "ハナワ",
                "katakana_half" => "ﾊﾅﾜ",
                "romaji" => "hanawa",
                "memo" => "",
                "latitude" => "36.520795",
                "altitude" => "139.307873",
            ]);
            
            Station::create([
                "id" => 1803,
                "prefecture_id" => 10,
                "city_id" => 489,
                "street_id" => 29317,
                "name" => "中野",
                "hiragana" => "なかの",
                "katakana" => "ナカノ",
                "katakana_half" => "ﾅｶﾉ",
                "romaji" => "nakano",
                "memo" => "群馬県",
                "latitude" => "36.524156",
                "altitude" => "139.317149",
            ]);
            
            Station::create([
                "id" => 1804,
                "prefecture_id" => 10,
                "city_id" => 499,
                "street_id" => 30076,
                "name" => "小中",
                "hiragana" => "こなか",
                "katakana" => "コナカ",
                "katakana_half" => "ｺﾅｶ",
                "romaji" => "konaka",
                "memo" => "",
                "latitude" => "36.535739",
                "altitude" => "139.337731",
            ]);
            
            Station::create([
                "id" => 1805,
                "prefecture_id" => 10,
                "city_id" => 489,
                "street_id" => 29210,
                "name" => "神戸",
                "hiragana" => "ごうど",
                "katakana" => "ゴウド",
                "katakana_half" => "ｺﾞｳﾄﾞ",
                "romaji" => "goudo",
                "memo" => "群馬県",
                "latitude" => "36.537434",
                "altitude" => "139.356702",
            ]);
            
            Station::create([
                "id" => 1806,
                "prefecture_id" => 10,
                "city_id" => 499,
                "street_id" => 30079,
                "name" => "沢入",
                "hiragana" => "そうり",
                "katakana" => "ソウリ",
                "katakana_half" => "ｿｳﾘ",
                "romaji" => "souri",
                "memo" => "",
                "latitude" => "36.580596",
                "altitude" => "139.396363",
            ]);
            
            Station::create([
                "id" => 1807,
                "prefecture_id" => 10,
                "city_id" => 491,
                "street_id" => 29517,
                "name" => "中央前橋",
                "hiragana" => "ちゅうおうまえばし",
                "katakana" => "チュウオウマエバシ",
                "katakana_half" => "ﾁｭｳｵｳﾏｴﾊﾞｼ",
                "romaji" => "chuuoumaebashi",
                "memo" => "",
                "latitude" => "36.390860",
                "altitude" => "139.075315",
            ]);
            
            Station::create([
                "id" => 1808,
                "prefecture_id" => 10,
                "city_id" => 488,
                "street_id" => 29065,
                "name" => "城東",
                "hiragana" => "じょうとう",
                "katakana" => "ジョウトウ",
                "katakana_half" => "ｼﾞｮｳﾄｳ",
                "romaji" => "joutou",
                "memo" => "",
                "latitude" => "36.391195",
                "altitude" => "139.081176",
            ]);
            
            Station::create([
                "id" => 1809,
                "prefecture_id" => 10,
                "city_id" => 488,
                "street_id" => 29136,
                "name" => "三俣",
                "hiragana" => "みつまた",
                "katakana" => "ミツマタ",
                "katakana_half" => "ﾐﾂﾏﾀ",
                "romaji" => "mitsumata",
                "memo" => "",
                "latitude" => "36.393750",
                "altitude" => "139.088953",
            ]);
            
            Station::create([
                "id" => 1810,
                "prefecture_id" => 10,
                "city_id" => 488,
                "street_id" => 29094,
                "name" => "片貝",
                "hiragana" => "かたかい",
                "katakana" => "カタカイ",
                "katakana_half" => "ｶﾀｶｲ",
                "romaji" => "katakai",
                "memo" => "",
                "latitude" => "36.393889",
                "altitude" => "139.095619",
            ]);
            
            Station::create([
                "id" => 1811,
                "prefecture_id" => 10,
                "city_id" => 488,
                "street_id" => 29019,
                "name" => "上泉",
                "hiragana" => "かみいずみ",
                "katakana" => "カミイズミ",
                "katakana_half" => "ｶﾐｲｽﾞﾐ",
                "romaji" => "kamiizumi",
                "memo" => "",
                "latitude" => "36.394222",
                "altitude" => "139.106562",
            ]);
            
            Station::create([
                "id" => 1812,
                "prefecture_id" => 10,
                "city_id" => 489,
                "street_id" => 29152,
                "name" => "赤坂",
                "hiragana" => "あかさか",
                "katakana" => "アカサカ",
                "katakana_half" => "ｱｶｻｶ",
                "romaji" => "akasaka",
                "memo" => "群馬県",
                "latitude" => "36.397139",
                "altitude" => "139.117284",
            ]);
            
            Station::create([
                "id" => 1813,
                "prefecture_id" => 10,
                "city_id" => 488,
                "street_id" => null,
                "name" => "心臓血管センター",
                "hiragana" => "しんぞうけっかんせんたー",
                "katakana" => "シンゾウケッカンセンター",
                "katakana_half" => "ｼﾝｿﾞｳｹｯｶﾝｾﾝﾀｰ",
                "romaji" => "shinzoukekkansentaｰ",
                "memo" => "",
                "latitude" => "36.405083",
                "altitude" => "139.128755",
            ]);
            
            Station::create([
                "id" => 1814,
                "prefecture_id" => 10,
                "city_id" => 488,
                "street_id" => 28989,
                "name" => "江木",
                "hiragana" => "えぎ",
                "katakana" => "エギ",
                "katakana_half" => "ｴｷﾞ",
                "romaji" => "egi",
                "memo" => "",
                "latitude" => "36.407248",
                "altitude" => "139.133532",
            ]);
            
            Station::create([
                "id" => 1815,
                "prefecture_id" => 10,
                "city_id" => 488,
                "street_id" => 28991,
                "name" => "大胡",
                "hiragana" => "おおご",
                "katakana" => "オオゴ",
                "katakana_half" => "ｵｵｺﾞ",
                "romaji" => "oogo",
                "memo" => "",
                "latitude" => "36.412748",
                "altitude" => "139.156334",
            ]);
            
            Station::create([
                "id" => 1816,
                "prefecture_id" => 10,
                "city_id" => 488,
                "street_id" => 29110,
                "name" => "樋越",
                "hiragana" => "ひごし",
                "katakana" => "ヒゴシ",
                "katakana_half" => "ﾋｺﾞｼ",
                "romaji" => "higoshi",
                "memo" => "",
                "latitude" => "36.415471",
                "altitude" => "139.173250",
            ]);
            
            Station::create([
                "id" => 1817,
                "prefecture_id" => 10,
                "city_id" => 489,
                "street_id" => 29196,
                "name" => "北原",
                "hiragana" => "きたはら",
                "katakana" => "キタハラ",
                "katakana_half" => "ｷﾀﾊﾗ",
                "romaji" => "kitahara",
                "memo" => "",
                "latitude" => "36.413666",
                "altitude" => "139.184749",
            ]);
            
            Station::create([
                "id" => 1818,
                "prefecture_id" => 10,
                "city_id" => 488,
                "street_id" => 29001,
                "name" => "新屋",
                "hiragana" => "あらや",
                "katakana" => "アラヤ",
                "katakana_half" => "ｱﾗﾔ",
                "romaji" => "araya",
                "memo" => "群馬県",
                "latitude" => "36.413694",
                "altitude" => "139.196665",
            ]);
            
            Station::create([
                "id" => 1819,
                "prefecture_id" => 10,
                "city_id" => 488,
                "street_id" => 29001,
                "name" => "粕川",
                "hiragana" => "かすかわ",
                "katakana" => "カスカワ",
                "katakana_half" => "ｶｽｶﾜ",
                "romaji" => "kasukawa",
                "memo" => "",
                "latitude" => "36.416777",
                "altitude" => "139.210886",
            ]);
            
            Station::create([
                "id" => 1820,
                "prefecture_id" => 10,
                "city_id" => 488,
                "street_id" => 29007,
                "name" => "膳",
                "hiragana" => "ぜん",
                "katakana" => "ゼン",
                "katakana_half" => "ｾﾞﾝ",
                "romaji" => "zen",
                "memo" => "",
                "latitude" => "36.416944",
                "altitude" => "139.222023",
            ]);
            
            Station::create([
                "id" => 1821,
                "prefecture_id" => 10,
                "city_id" => 490,
                "street_id" => 29416,
                "name" => "新里",
                "hiragana" => "にいさと",
                "katakana" => "ニイサト",
                "katakana_half" => "ﾆｲｻﾄ",
                "romaji" => "niisato",
                "memo" => "群馬県",
                "latitude" => "36.418472",
                "altitude" => "139.236995",
            ]);
            
            Station::create([
                "id" => 1822,
                "prefecture_id" => 10,
                "city_id" => 490,
                "street_id" => 29425,
                "name" => "新川",
                "hiragana" => "にっかわ",
                "katakana" => "ニッカワ",
                "katakana_half" => "ﾆｯｶﾜ",
                "romaji" => "nikkawa",
                "memo" => "群馬県",
                "latitude" => "36.418139",
                "altitude" => "139.257910",
            ]);
            
            Station::create([
                "id" => 1823,
                "prefecture_id" => 10,
                "city_id" => 491,
                "street_id" => 29497,
                "name" => "東新川",
                "hiragana" => "ひがしにっかわ",
                "katakana" => "ヒガシニッカワ",
                "katakana_half" => "ﾋｶﾞｼﾆｯｶﾜ",
                "romaji" => "higashinikkawa",
                "memo" => "群馬県",
                "latitude" => "36.422028",
                "altitude" => "139.267631",
            ]);
            
            Station::create([
                "id" => 1824,
                "prefecture_id" => 10,
                "city_id" => 490,
                "street_id" => null,
                "name" => "桐生球場前",
                "hiragana" => "きりゅうきゅうじょうまえ",
                "katakana" => "キリュウキュウジョウマエ",
                "katakana_half" => "ｷﾘｭｳｷｭｳｼﾞｮｳﾏｴ",
                "romaji" => "kiryuukyuujoumae",
                "memo" => "",
                "latitude" => "36.419251",
                "altitude" => "139.298045",
            ]);
            
            Station::create([
                "id" => 1825,
                "prefecture_id" => 10,
                "city_id" => 488,
                "street_id" => 28973,
                "name" => "天王宿",
                "hiragana" => "てんのうじゅく",
                "katakana" => "テンノウジュク",
                "katakana_half" => "ﾃﾝﾉｳｼﾞｭｸ",
                "romaji" => "tennoujuku",
                "memo" => "",
                "latitude" => "36.415085",
                "altitude" => "139.308184",
            ]);
            
            Station::create([
                "id" => 1826,
                "prefecture_id" => 10,
                "city_id" => 488,
                "street_id" => 29113,
                "name" => "富士山下",
                "hiragana" => "ふじやました",
                "katakana" => "フジヤマシタ",
                "katakana_half" => "ﾌｼﾞﾔﾏｼﾀ",
                "romaji" => "fujiyamashita",
                "memo" => "",
                "latitude" => "36.413974",
                "altitude" => "139.315822",
            ]);
            
            Station::create([
                "id" => 1827,
                "prefecture_id" => 10,
                "city_id" => 492,
                "street_id" => 29698,
                "name" => "丸山下",
                "hiragana" => "まるやました",
                "katakana" => "マルヤマシタ",
                "katakana_half" => "ﾏﾙﾔﾏｼﾀ",
                "romaji" => "maruyamashita",
                "memo" => "",
                "latitude" => "36.416834",
                "altitude" => "139.321321",
            ]);
            
            Station::create([
                "id" => 1828,
                "prefecture_id" => 10,
                "city_id" => 488,
                "street_id" => 29011,
                "name" => "西桐生",
                "hiragana" => "にしきりゅう",
                "katakana" => "ニシキリュウ",
                "katakana_half" => "ﾆｼｷﾘｭｳ",
                "romaji" => "nishikiryuu",
                "memo" => "",
                "latitude" => "36.414113",
                "altitude" => "139.333015",
            ]);
            
            Station::create([
                "id" => 1829,
                "prefecture_id" => 10,
                "city_id" => 505,
                "street_id" => null,
                "name" => "南高崎",
                "hiragana" => "みなみたかさき",
                "katakana" => "ミナミタカサキ",
                "katakana_half" => "ﾐﾅﾐﾀｶｻｷ",
                "romaji" => "minamitakasaki",
                "memo" => "",
                "latitude" => "36.312340",
                "altitude" => "139.012268",
            ]);
            
            Station::create([
                "id" => 1830,
                "prefecture_id" => 10,
                "city_id" => 489,
                "street_id" => 29185,
                "name" => "佐野のわたし",
                "hiragana" => "さののわたし",
                "katakana" => "サノノワタシ",
                "katakana_half" => "ｻﾉﾉﾜﾀｼ",
                "romaji" => "sanonowatashi",
                "memo" => "",
                "latitude" => "36.302535",
                "altitude" => "139.018295",
            ]);
            
            Station::create([
                "id" => 1831,
                "prefecture_id" => 10,
                "city_id" => 489,
                "street_id" => 29287,
                "name" => "根小屋",
                "hiragana" => "ねごや",
                "katakana" => "ネゴヤ",
                "katakana_half" => "ﾈｺﾞﾔ",
                "romaji" => "negoya",
                "memo" => "",
                "latitude" => "36.291425",
                "altitude" => "139.018769",
            ]);
            
            Station::create([
                "id" => 1832,
                "prefecture_id" => 10,
                "city_id" => 489,
                "street_id" => null,
                "name" => "高崎商科大学前",
                "hiragana" => "たかさきしょうかだいがくまえ",
                "katakana" => "タカサキショウカダイガクマエ",
                "katakana_half" => "ﾀｶｻｷｼｮｳｶﾀﾞｲｶﾞｸﾏｴ",
                "romaji" => "takasakishoukadaigakumae",
                "memo" => "",
                "latitude" => "36.284538",
                "altitude" => "139.029324",
            ]);
            
            Station::create([
                "id" => 1833,
                "prefecture_id" => 10,
                "city_id" => 489,
                "street_id" => 29342,
                "name" => "山名",
                "hiragana" => "やまな",
                "katakana" => "ヤマナ",
                "katakana_half" => "ﾔﾏﾅ",
                "romaji" => "yamana",
                "memo" => "",
                "latitude" => "36.277538",
                "altitude" => "139.038129",
            ]);
            
            Station::create([
                "id" => 1834,
                "prefecture_id" => 10,
                "city_id" => 488,
                "street_id" => 29011,
                "name" => "西山名",
                "hiragana" => "にしやまな",
                "katakana" => "ニシヤマナ",
                "katakana_half" => "ﾆｼﾔﾏﾅ",
                "romaji" => "nishiyamana",
                "memo" => "",
                "latitude" => "36.271011",
                "altitude" => "139.032380",
            ]);
            
            Station::create([
                "id" => 1835,
                "prefecture_id" => 10,
                "city_id" => 489,
                "street_id" => 29372,
                "name" => "馬庭",
                "hiragana" => "まにわ",
                "katakana" => "マニワ",
                "katakana_half" => "ﾏﾆﾜ",
                "romaji" => "maniwa",
                "memo" => "",
                "latitude" => "36.261401",
                "altitude" => "139.009604",
            ]);
            
            Station::create([
                "id" => 1836,
                "prefecture_id" => 10,
                "city_id" => 489,
                "street_id" => 29346,
                "name" => "吉井",
                "hiragana" => "よしい",
                "katakana" => "ヨシイ",
                "katakana_half" => "ﾖｼｲ",
                "romaji" => "yoshii",
                "memo" => "群馬県",
                "latitude" => "36.256124",
                "altitude" => "138.984440",
            ]);
            
            Station::create([
                "id" => 1837,
                "prefecture_id" => 10,
                "city_id" => 488,
                "street_id" => 29011,
                "name" => "西吉井",
                "hiragana" => "にしよしい",
                "katakana" => "ニシヨシイ",
                "katakana_half" => "ﾆｼﾖｼｲ",
                "romaji" => "nishiyoshii",
                "memo" => "",
                "latitude" => "36.255707",
                "altitude" => "138.965802",
            ]);
            
            Station::create([
                "id" => 1838,
                "prefecture_id" => 10,
                "city_id" => 502,
                "street_id" => null,
                "name" => "上州新屋",
                "hiragana" => "じょうしゅうにいや",
                "katakana" => "ジョウシュウニイヤ",
                "katakana_half" => "ｼﾞｮｳｼｭｳﾆｲﾔ",
                "romaji" => "joushuuniiya",
                "memo" => "",
                "latitude" => "36.255956",
                "altitude" => "138.951859",
            ]);
            
            Station::create([
                "id" => 1839,
                "prefecture_id" => 10,
                "city_id" => 502,
                "street_id" => null,
                "name" => "上州福島",
                "hiragana" => "じょうしゅうふくしま",
                "katakana" => "ジョウシュウフクシマ",
                "katakana_half" => "ｼﾞｮｳｼｭｳﾌｸｼﾏ",
                "romaji" => "joushuufukushima",
                "memo" => "",
                "latitude" => "36.256372",
                "altitude" => "138.929416",
            ]);
            
            Station::create([
                "id" => 1840,
                "prefecture_id" => 10,
                "city_id" => 500,
                "street_id" => null,
                "name" => "東富岡",
                "hiragana" => "ひがしとみおか",
                "katakana" => "ヒガシトミオカ",
                "katakana_half" => "ﾋｶﾞｼﾄﾐｵｶ",
                "romaji" => "higashitomioka",
                "memo" => "",
                "latitude" => "36.260844",
                "altitude" => "138.901863",
            ]);
            
            Station::create([
                "id" => 1841,
                "prefecture_id" => 10,
                "city_id" => 502,
                "street_id" => null,
                "name" => "上州富岡",
                "hiragana" => "じょうしゅうとみおか",
                "katakana" => "ジョウシュウトミオカ",
                "katakana_half" => "ｼﾞｮｳｼｭｳﾄﾐｵｶ",
                "romaji" => "joushuutomioka",
                "memo" => "",
                "latitude" => "36.260454",
                "altitude" => "138.891919",
            ]);
            
            Station::create([
                "id" => 1842,
                "prefecture_id" => 10,
                "city_id" => 488,
                "street_id" => 29011,
                "name" => "西富岡",
                "hiragana" => "にしとみおか",
                "katakana" => "ニシトミオカ",
                "katakana_half" => "ﾆｼﾄﾐｵｶ",
                "romaji" => "nishitomioka",
                "memo" => "",
                "latitude" => "36.260121",
                "altitude" => "138.882810",
            ]);
            
            Station::create([
                "id" => 1843,
                "prefecture_id" => 10,
                "city_id" => 502,
                "street_id" => null,
                "name" => "上州七日市",
                "hiragana" => "じょうしゅうなのかいち",
                "katakana" => "ジョウシュウナノカイチ",
                "katakana_half" => "ｼﾞｮｳｼｭｳﾅﾉｶｲﾁ",
                "romaji" => "joushuunanokaichi",
                "memo" => "",
                "latitude" => "36.258705",
                "altitude" => "138.874643",
            ]);
            
            Station::create([
                "id" => 1844,
                "prefecture_id" => 10,
                "city_id" => 502,
                "street_id" => null,
                "name" => "上州一ノ宮",
                "hiragana" => "じょうしゅういちのみや",
                "katakana" => "ジョウシュウイチノミヤ",
                "katakana_half" => "ｼﾞｮｳｼｭｳｲﾁﾉﾐﾔ",
                "romaji" => "joushuuichinomiya",
                "memo" => "",
                "latitude" => "36.252928",
                "altitude" => "138.863839",
            ]);
            
            Station::create([
                "id" => 1845,
                "prefecture_id" => 10,
                "city_id" => 497,
                "street_id" => 29974,
                "name" => "神農原",
                "hiragana" => "かのはら",
                "katakana" => "カノハラ",
                "katakana_half" => "ｶﾉﾊﾗ",
                "romaji" => "kanohara",
                "memo" => "",
                "latitude" => "36.242622",
                "altitude" => "138.843729",
            ]);
            
            Station::create([
                "id" => 1846,
                "prefecture_id" => 10,
                "city_id" => 497,
                "street_id" => 29999,
                "name" => "南蛇井",
                "hiragana" => "なんじゃい",
                "katakana" => "ナンジャイ",
                "katakana_half" => "ﾅﾝｼﾞｬｲ",
                "romaji" => "nanjai",
                "memo" => "",
                "latitude" => "36.238206",
                "altitude" => "138.813844",
            ]);
            
            Station::create([
                "id" => 1847,
                "prefecture_id" => 10,
                "city_id" => 520,
                "street_id" => null,
                "name" => "千平",
                "hiragana" => "せんだいら",
                "katakana" => "センダイラ",
                "katakana_half" => "ｾﾝﾀﾞｲﾗ",
                "romaji" => "sendaira",
                "memo" => "",
                "latitude" => "36.230373",
                "altitude" => "138.798901",
            ]);
            
            Station::create([
                "id" => 1848,
                "prefecture_id" => 10,
                "city_id" => 504,
                "street_id" => null,
                "name" => "下仁田",
                "hiragana" => "しもにた",
                "katakana" => "シモニタ",
                "katakana_half" => "ｼﾓﾆﾀ",
                "romaji" => "shimonita",
                "memo" => "",
                "latitude" => "36.210514",
                "altitude" => "138.786597",
            ]);
            
    }
}
