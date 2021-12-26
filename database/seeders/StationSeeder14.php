<?php
namespace Database\Seeders;

use App\Models\Station;
use Illuminate\Database\Seeder;

class StationSeeder14 extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        
            Station::create([
                "id" => 3059,
                "prefecture_id" => 14,
                "city_id" => 746,
                "street_id" => 42628,
                "name" => "大船",
                "hiragana" => "おおふな",
                "katakana" => "オオフナ",
                "katakana_half" => "ｵｵﾌﾅ",
                "romaji" => "oofuna",
                "memo" => "",
                "latitude" => "35.353813",
                "altitude" => "139.531241",
            ]);
            
            Station::create([
                "id" => 3060,
                "prefecture_id" => 14,
                "city_id" => 725,
                "street_id" => null,
                "name" => "戸塚",
                "hiragana" => "とつか",
                "katakana" => "トツカ",
                "katakana_half" => "ﾄﾂｶ",
                "romaji" => "totsuka",
                "memo" => "",
                "latitude" => "35.400475",
                "altitude" => "139.534323",
            ]);
            
            Station::create([
                "id" => 3061,
                "prefecture_id" => 14,
                "city_id" => 716,
                "street_id" => 41089,
                "name" => "東戸塚",
                "hiragana" => "ひがしとつか",
                "katakana" => "ヒガシトツカ",
                "katakana_half" => "ﾋｶﾞｼﾄﾂｶ",
                "romaji" => "higashitotsuka",
                "memo" => "",
                "latitude" => "35.430472",
                "altitude" => "139.556763",
            ]);
            
            Station::create([
                "id" => 3062,
                "prefecture_id" => 14,
                "city_id" => 721,
                "street_id" => null,
                "name" => "保土ケ谷",
                "hiragana" => "ほどがや",
                "katakana" => "ホドガヤ",
                "katakana_half" => "ﾎﾄﾞｶﾞﾔ",
                "romaji" => "hodogaya",
                "memo" => "",
                "latitude" => "35.446721",
                "altitude" => "139.599620",
            ]);
            
            Station::create([
                "id" => 3063,
                "prefecture_id" => 14,
                "city_id" => 716,
                "street_id" => null,
                "name" => "横浜",
                "hiragana" => "よこはま",
                "katakana" => "ヨコハマ",
                "katakana_half" => "ﾖｺﾊﾏ",
                "romaji" => "yokohama",
                "memo" => "",
                "latitude" => "35.465470",
                "altitude" => "139.621257",
            ]);
            
            Station::create([
                "id" => 3064,
                "prefecture_id" => 14,
                "city_id" => 735,
                "street_id" => 42113,
                "name" => "新川崎",
                "hiragana" => "しんかわさき",
                "katakana" => "シンカワサキ",
                "katakana_half" => "ｼﾝｶﾜｻｷ",
                "romaji" => "shinkawasaki",
                "memo" => "",
                "latitude" => "35.551377",
                "altitude" => "139.671748",
            ]);
            
            Station::create([
                "id" => 3065,
                "prefecture_id" => 14,
                "city_id" => 743,
                "street_id" => 42390,
                "name" => "武蔵小杉",
                "hiragana" => "むさしこすぎ",
                "katakana" => "ムサシコスギ",
                "katakana_half" => "ﾑｻｼｺｽｷﾞ",
                "romaji" => "musashikosugi",
                "memo" => "",
                "latitude" => "35.575736",
                "altitude" => "139.659665",
            ]);
            
            Station::create([
                "id" => 3066,
                "prefecture_id" => 14,
                "city_id" => 741,
                "street_id" => null,
                "name" => "相模湖",
                "hiragana" => "さがみこ",
                "katakana" => "サガミコ",
                "katakana_half" => "ｻｶﾞﾐｺ",
                "romaji" => "sagamiko",
                "memo" => "",
                "latitude" => "35.617195",
                "altitude" => "139.188508",
            ]);
            
            Station::create([
                "id" => 3067,
                "prefecture_id" => 14,
                "city_id" => 747,
                "street_id" => null,
                "name" => "藤野",
                "hiragana" => "ふじの",
                "katakana" => "フジノ",
                "katakana_half" => "ﾌｼﾞﾉ",
                "romaji" => "fujino",
                "memo" => "",
                "latitude" => "35.615862",
                "altitude" => "139.152539",
            ]);
            
            Station::create([
                "id" => 3068,
                "prefecture_id" => 14,
                "city_id" => 734,
                "street_id" => null,
                "name" => "川崎",
                "hiragana" => "かわさき",
                "katakana" => "カワサキ",
                "katakana_half" => "ｶﾜｻｷ",
                "romaji" => "kawasaki",
                "memo" => "",
                "latitude" => "35.531408",
                "altitude" => "139.696886",
            ]);
            
            Station::create([
                "id" => 3069,
                "prefecture_id" => 14,
                "city_id" => 716,
                "street_id" => null,
                "name" => "鶴見",
                "hiragana" => "つるみ",
                "katakana" => "ツルミ",
                "katakana_half" => "ﾂﾙﾐ",
                "romaji" => "tsurumi",
                "memo" => "",
                "latitude" => "35.508549",
                "altitude" => "139.676028",
            ]);
            
            Station::create([
                "id" => 3070,
                "prefecture_id" => 14,
                "city_id" => 717,
                "street_id" => 41174,
                "name" => "新子安",
                "hiragana" => "しんこやす",
                "katakana" => "シンコヤス",
                "katakana_half" => "ｼﾝｺﾔｽ",
                "romaji" => "shinkoyasu",
                "memo" => "",
                "latitude" => "35.487051",
                "altitude" => "139.654781",
            ]);
            
            Station::create([
                "id" => 3071,
                "prefecture_id" => 14,
                "city_id" => 717,
                "street_id" => 41197,
                "name" => "東神奈川",
                "hiragana" => "ひがしかながわ",
                "katakana" => "ヒガシカナガワ",
                "katakana_half" => "ﾋｶﾞｼｶﾅｶﾞﾜ",
                "romaji" => "higashikanagawa",
                "memo" => "",
                "latitude" => "35.477885",
                "altitude" => "139.633339",
            ]);
            
            Station::create([
                "id" => 3072,
                "prefecture_id" => 14,
                "city_id" => 724,
                "street_id" => null,
                "name" => "北鎌倉",
                "hiragana" => "きたかまくら",
                "katakana" => "キタカマクラ",
                "katakana_half" => "ｷﾀｶﾏｸﾗ",
                "romaji" => "kitakamakura",
                "memo" => "",
                "latitude" => "35.337176",
                "altitude" => "139.545158",
            ]);
            
            Station::create([
                "id" => 3073,
                "prefecture_id" => 14,
                "city_id" => 746,
                "street_id" => null,
                "name" => "鎌倉",
                "hiragana" => "かまくら",
                "katakana" => "カマクラ",
                "katakana_half" => "ｶﾏｸﾗ",
                "romaji" => "kamakura",
                "memo" => "",
                "latitude" => "35.319095",
                "altitude" => "139.550436",
            ]);
            
            Station::create([
                "id" => 3074,
                "prefecture_id" => 14,
                "city_id" => 750,
                "street_id" => null,
                "name" => "逗子",
                "hiragana" => "ずし",
                "katakana" => "ズシ",
                "katakana_half" => "ｽﾞｼ",
                "romaji" => "zushi",
                "memo" => "",
                "latitude" => "35.297514",
                "altitude" => "139.579545",
            ]);
            
            Station::create([
                "id" => 3075,
                "prefecture_id" => 14,
                "city_id" => 716,
                "street_id" => 41089,
                "name" => "東逗子",
                "hiragana" => "ひがしずし",
                "katakana" => "ヒガシズシ",
                "katakana_half" => "ﾋｶﾞｼｽﾞｼ",
                "romaji" => "higashizushi",
                "memo" => "",
                "latitude" => "35.298653",
                "altitude" => "139.601127",
            ]);
            
            Station::create([
                "id" => 3076,
                "prefecture_id" => 14,
                "city_id" => 744,
                "street_id" => 42460,
                "name" => "田浦",
                "hiragana" => "たうら",
                "katakana" => "タウラ",
                "katakana_half" => "ﾀｳﾗ",
                "romaji" => "taura",
                "memo" => "",
                "latitude" => "35.292766",
                "altitude" => "139.637541",
            ]);
            
            Station::create([
                "id" => 3077,
                "prefecture_id" => 14,
                "city_id" => 744,
                "street_id" => null,
                "name" => "横須賀",
                "hiragana" => "よこすか",
                "katakana" => "ヨコスカ",
                "katakana_half" => "ﾖｺｽｶ",
                "romaji" => "yokosuka",
                "memo" => "",
                "latitude" => "35.284101",
                "altitude" => "139.655901",
            ]);
            
            Station::create([
                "id" => 3078,
                "prefecture_id" => 14,
                "city_id" => 744,
                "street_id" => 42434,
                "name" => "衣笠",
                "hiragana" => "きぬがさ",
                "katakana" => "キヌガサ",
                "katakana_half" => "ｷﾇｶﾞｻ",
                "romaji" => "kinugasa",
                "memo" => "",
                "latitude" => "35.257353",
                "altitude" => "139.661374",
            ]);
            
            Station::create([
                "id" => 3079,
                "prefecture_id" => 14,
                "city_id" => 744,
                "street_id" => 42440,
                "name" => "久里浜",
                "hiragana" => "くりはま",
                "katakana" => "クリハマ",
                "katakana_half" => "ｸﾘﾊﾏ",
                "romaji" => "kurihama",
                "memo" => "",
                "latitude" => "35.233051",
                "altitude" => "139.701316",
            ]);
            
            Station::create([
                "id" => 3080,
                "prefecture_id" => 14,
                "city_id" => 747,
                "street_id" => null,
                "name" => "藤沢",
                "hiragana" => "ふじさわ",
                "katakana" => "フジサワ",
                "katakana_half" => "ﾌｼﾞｻﾜ",
                "romaji" => "fujisawa",
                "memo" => "",
                "latitude" => "35.338841",
                "altitude" => "139.487329",
            ]);
            
            Station::create([
                "id" => 3081,
                "prefecture_id" => 14,
                "city_id" => 747,
                "street_id" => 42710,
                "name" => "辻堂",
                "hiragana" => "つじどう",
                "katakana" => "ツジドウ",
                "katakana_half" => "ﾂｼﾞﾄﾞｳ",
                "romaji" => "tsujidou",
                "memo" => "",
                "latitude" => "35.336841",
                "altitude" => "139.447083",
            ]);
            
            Station::create([
                "id" => 3082,
                "prefecture_id" => 14,
                "city_id" => 733,
                "street_id" => 42004,
                "name" => "茅ケ崎",
                "hiragana" => "ちがさき",
                "katakana" => "チガサキ",
                "katakana_half" => "ﾁｶﾞｻｷ",
                "romaji" => "chigasaki",
                "memo" => "",
                "latitude" => "35.330285",
                "altitude" => "139.406753",
            ]);
            
            Station::create([
                "id" => 3083,
                "prefecture_id" => 14,
                "city_id" => 745,
                "street_id" => null,
                "name" => "平塚",
                "hiragana" => "ひらつか",
                "katakana" => "ヒラツカ",
                "katakana_half" => "ﾋﾗﾂｶ",
                "romaji" => "hiratsuka",
                "memo" => "",
                "latitude" => "35.327896",
                "altitude" => "139.350591",
            ]);
            
            Station::create([
                "id" => 3084,
                "prefecture_id" => 14,
                "city_id" => 762,
                "street_id" => null,
                "name" => "大磯",
                "hiragana" => "おおいそ",
                "katakana" => "オオイソ",
                "katakana_half" => "ｵｵｲｿ",
                "romaji" => "ooiso",
                "memo" => "",
                "latitude" => "35.311202",
                "altitude" => "139.313512",
            ]);
            
            Station::create([
                "id" => 3085,
                "prefecture_id" => 14,
                "city_id" => 763,
                "street_id" => null,
                "name" => "二宮",
                "hiragana" => "にのみや",
                "katakana" => "ニノミヤ",
                "katakana_half" => "ﾆﾉﾐﾔ",
                "romaji" => "ninomiya",
                "memo" => "",
                "latitude" => "35.298758",
                "altitude" => "139.257794",
            ]);
            
            Station::create([
                "id" => 3086,
                "prefecture_id" => 14,
                "city_id" => 748,
                "street_id" => 42764,
                "name" => "国府津",
                "hiragana" => "こうづ",
                "katakana" => "コウヅ",
                "katakana_half" => "ｺｳﾂﾞ",
                "romaji" => "kouzu",
                "memo" => "",
                "latitude" => "35.280815",
                "altitude" => "139.212938",
            ]);
            
            Station::create([
                "id" => 3087,
                "prefecture_id" => 14,
                "city_id" => 748,
                "street_id" => 42758,
                "name" => "鴨宮",
                "hiragana" => "かものみや",
                "katakana" => "カモノミヤ",
                "katakana_half" => "ｶﾓﾉﾐﾔ",
                "romaji" => "kamonomiya",
                "memo" => "",
                "latitude" => "35.275815",
                "altitude" => "139.180218",
            ]);
            
            Station::create([
                "id" => 3088,
                "prefecture_id" => 14,
                "city_id" => 748,
                "street_id" => null,
                "name" => "小田原",
                "hiragana" => "おだわら",
                "katakana" => "オダワラ",
                "katakana_half" => "ｵﾀﾞﾜﾗ",
                "romaji" => "odawara",
                "memo" => "",
                "latitude" => "35.256400",
                "altitude" => "139.154916",
            ]);
            
            Station::create([
                "id" => 3089,
                "prefecture_id" => 14,
                "city_id" => 748,
                "street_id" => 42803,
                "name" => "早川",
                "hiragana" => "はやかわ",
                "katakana" => "ハヤカワ",
                "katakana_half" => "ﾊﾔｶﾜ",
                "romaji" => "hayakawa",
                "memo" => "",
                "latitude" => "35.239068",
                "altitude" => "139.145390",
            ]);
            
            Station::create([
                "id" => 3090,
                "prefecture_id" => 14,
                "city_id" => 748,
                "street_id" => 42799,
                "name" => "根府川",
                "hiragana" => "ねぶかわ",
                "katakana" => "ネブカワ",
                "katakana_half" => "ﾈﾌﾞｶﾜ",
                "romaji" => "nebukawa",
                "memo" => "",
                "latitude" => "35.202712",
                "altitude" => "139.138503",
            ]);
            
            Station::create([
                "id" => 3091,
                "prefecture_id" => 14,
                "city_id" => 770,
                "street_id" => null,
                "name" => "真鶴",
                "hiragana" => "まなづる",
                "katakana" => "マナヅル",
                "katakana_half" => "ﾏﾅﾂﾞﾙ",
                "romaji" => "manazuru",
                "memo" => "",
                "latitude" => "35.156771",
                "altitude" => "139.132505",
            ]);
            
            Station::create([
                "id" => 3092,
                "prefecture_id" => 14,
                "city_id" => 771,
                "street_id" => null,
                "name" => "湯河原",
                "hiragana" => "ゆがわら",
                "katakana" => "ユガワラ",
                "katakana_half" => "ﾕｶﾞﾜﾗ",
                "romaji" => "yugawara",
                "memo" => "",
                "latitude" => "35.145939",
                "altitude" => "139.102203",
            ]);
            
            Station::create([
                "id" => 3093,
                "prefecture_id" => 14,
                "city_id" => 744,
                "street_id" => 42455,
                "name" => "国道",
                "hiragana" => "こくどう",
                "katakana" => "コクドウ",
                "katakana_half" => "ｺｸﾄﾞｳ",
                "romaji" => "kokudou",
                "memo" => "",
                "latitude" => "35.500745",
                "altitude" => "139.675695",
            ]);
            
            Station::create([
                "id" => 3094,
                "prefecture_id" => 14,
                "city_id" => 716,
                "street_id" => null,
                "name" => "鶴見小野",
                "hiragana" => "つるみおの",
                "katakana" => "ツルミオノ",
                "katakana_half" => "ﾂﾙﾐｵﾉ",
                "romaji" => "tsurumiono",
                "memo" => "",
                "latitude" => "35.497134",
                "altitude" => "139.681055",
            ]);
            
            Station::create([
                "id" => 3095,
                "prefecture_id" => 14,
                "city_id" => 716,
                "street_id" => 41130,
                "name" => "弁天橋",
                "hiragana" => "べんてんばし",
                "katakana" => "ベンテンバシ",
                "katakana_half" => "ﾍﾞﾝﾃﾝﾊﾞｼ",
                "romaji" => "bentenbashi",
                "memo" => "",
                "latitude" => "35.495967",
                "altitude" => "139.689777",
            ]);
            
            Station::create([
                "id" => 3096,
                "prefecture_id" => 14,
                "city_id" => 734,
                "street_id" => 42024,
                "name" => "浅野",
                "hiragana" => "あさの",
                "katakana" => "アサノ",
                "katakana_half" => "ｱｻﾉ",
                "romaji" => "asano",
                "memo" => "",
                "latitude" => "35.497467",
                "altitude" => "139.696054",
            ]);
            
            Station::create([
                "id" => 3097,
                "prefecture_id" => 14,
                "city_id" => 716,
                "street_id" => 41086,
                "name" => "安善",
                "hiragana" => "あんぜん",
                "katakana" => "アンゼン",
                "katakana_half" => "ｱﾝｾﾞﾝ",
                "romaji" => "anzen",
                "memo" => "",
                "latitude" => "35.499661",
                "altitude" => "139.701249",
            ]);
            
            Station::create([
                "id" => 3098,
                "prefecture_id" => 14,
                "city_id" => 743,
                "street_id" => 42390,
                "name" => "武蔵白石",
                "hiragana" => "むさししらいし",
                "katakana" => "ムサシシライシ",
                "katakana_half" => "ﾑｻｼｼﾗｲｼ",
                "romaji" => "musashishiraishi",
                "memo" => "",
                "latitude" => "35.501689",
                "altitude" => "139.705832",
            ]);
            
            Station::create([
                "id" => 3099,
                "prefecture_id" => 14,
                "city_id" => 716,
                "street_id" => null,
                "name" => "浜川崎",
                "hiragana" => "はまかわさき",
                "katakana" => "ハマカワサキ",
                "katakana_half" => "ﾊﾏｶﾜｻｷ",
                "romaji" => "hamakawasaki",
                "memo" => "",
                "latitude" => "35.510410",
                "altitude" => "139.713497",
            ]);
            
            Station::create([
                "id" => 3100,
                "prefecture_id" => 14,
                "city_id" => 723,
                "street_id" => 41663,
                "name" => "昭和",
                "hiragana" => "しょうわ",
                "katakana" => "ショウワ",
                "katakana_half" => "ｼｮｳﾜ",
                "romaji" => "shouwa",
                "memo" => "",
                "latitude" => "35.506495",
                "altitude" => "139.724024",
            ]);
            
            Station::create([
                "id" => 3101,
                "prefecture_id" => 14,
                "city_id" => 719,
                "street_id" => 41420,
                "name" => "扇町",
                "hiragana" => "おうぎまち",
                "katakana" => "オウギマチ",
                "katakana_half" => "ｵｳｷﾞﾏﾁ",
                "romaji" => "ougimachi",
                "memo" => "神奈川県",
                "latitude" => "35.501356",
                "altitude" => "139.722413",
            ]);
            
            Station::create([
                "id" => 3102,
                "prefecture_id" => 14,
                "city_id" => 719,
                "street_id" => 41421,
                "name" => "新芝浦",
                "hiragana" => "しんしばうら",
                "katakana" => "シンシバウラ",
                "katakana_half" => "ｼﾝｼﾊﾞｳﾗ",
                "romaji" => "shinshibaura",
                "memo" => "",
                "latitude" => "35.491635",
                "altitude" => "139.700249",
            ]);
            
            Station::create([
                "id" => 3103,
                "prefecture_id" => 14,
                "city_id" => 756,
                "street_id" => null,
                "name" => "海芝浦",
                "hiragana" => "うみしばうら",
                "katakana" => "ウミシバウラ",
                "katakana_half" => "ｳﾐｼﾊﾞｳﾗ",
                "romaji" => "umishibaura",
                "memo" => "",
                "latitude" => "35.485886",
                "altitude" => "139.700249",
            ]);
            
            Station::create([
                "id" => 3104,
                "prefecture_id" => 14,
                "city_id" => 716,
                "street_id" => 41108,
                "name" => "尻手",
                "hiragana" => "しって",
                "katakana" => "シッテ",
                "katakana_half" => "ｼｯﾃ",
                "romaji" => "shitte",
                "memo" => "",
                "latitude" => "35.531046",
                "altitude" => "139.684387",
            ]);
            
            Station::create([
                "id" => 3105,
                "prefecture_id" => 14,
                "city_id" => 716,
                "street_id" => 41135,
                "name" => "矢向",
                "hiragana" => "やこう",
                "katakana" => "ヤコウ",
                "katakana_half" => "ﾔｺｳ",
                "romaji" => "yakou",
                "memo" => "",
                "latitude" => "35.538907",
                "altitude" => "139.680442",
            ]);
            
            Station::create([
                "id" => 3106,
                "prefecture_id" => 14,
                "city_id" => 735,
                "street_id" => 42102,
                "name" => "鹿島田",
                "hiragana" => "かしまだ",
                "katakana" => "カシマダ",
                "katakana_half" => "ｶｼﾏﾀﾞ",
                "romaji" => "kashimada",
                "memo" => "",
                "latitude" => "35.551322",
                "altitude" => "139.675165",
            ]);
            
            Station::create([
                "id" => 3107,
                "prefecture_id" => 14,
                "city_id" => 735,
                "street_id" => 42111,
                "name" => "平間",
                "hiragana" => "ひらま",
                "katakana" => "ヒラマ",
                "katakana_half" => "ﾋﾗﾏ",
                "romaji" => "hirama",
                "memo" => "",
                "latitude" => "35.561016",
                "altitude" => "139.671053",
            ]);
            
            Station::create([
                "id" => 3108,
                "prefecture_id" => 14,
                "city_id" => 716,
                "street_id" => 41133,
                "name" => "向河原",
                "hiragana" => "むかいがわら",
                "katakana" => "ムカイガワラ",
                "katakana_half" => "ﾑｶｲｶﾞﾜﾗ",
                "romaji" => "mukaigawara",
                "memo" => "",
                "latitude" => "35.572903",
                "altitude" => "139.667276",
            ]);
            
            Station::create([
                "id" => 3109,
                "prefecture_id" => 14,
                "city_id" => 743,
                "street_id" => 42390,
                "name" => "武蔵中原",
                "hiragana" => "むさしなかはら",
                "katakana" => "ムサシナカハラ",
                "katakana_half" => "ﾑｻｼﾅｶﾊﾗ",
                "romaji" => "musashinakahara",
                "memo" => "",
                "latitude" => "35.581124",
                "altitude" => "139.641471",
            ]);
            
            Station::create([
                "id" => 3110,
                "prefecture_id" => 14,
                "city_id" => 743,
                "street_id" => 42390,
                "name" => "武蔵新城",
                "hiragana" => "むさししんじょう",
                "katakana" => "ムサシシンジョウ",
                "katakana_half" => "ﾑｻｼｼﾝｼﾞｮｳ",
                "romaji" => "musashishinjou",
                "memo" => "",
                "latitude" => "35.587234",
                "altitude" => "139.629695",
            ]);
            
            Station::create([
                "id" => 3111,
                "prefecture_id" => 14,
                "city_id" => 743,
                "street_id" => 42390,
                "name" => "武蔵溝ノ口",
                "hiragana" => "むさしみぞのくち",
                "katakana" => "ムサシミゾノクチ",
                "katakana_half" => "ﾑｻｼﾐｿﾞﾉｸﾁ",
                "romaji" => "musashimizonokuchi",
                "memo" => "",
                "latitude" => "35.599010",
                "altitude" => "139.611223",
            ]);
            
            Station::create([
                "id" => 3112,
                "prefecture_id" => 14,
                "city_id" => 728,
                "street_id" => 41838,
                "name" => "津田山",
                "hiragana" => "つだやま",
                "katakana" => "ツダヤマ",
                "katakana_half" => "ﾂﾀﾞﾔﾏ",
                "romaji" => "tsudayama",
                "memo" => "",
                "latitude" => "35.604260",
                "altitude" => "139.600029",
            ]);
            
            Station::create([
                "id" => 3113,
                "prefecture_id" => 14,
                "city_id" => 737,
                "street_id" => 42180,
                "name" => "久地",
                "hiragana" => "くじ",
                "katakana" => "クジ",
                "katakana_half" => "ｸｼﾞ",
                "romaji" => "kuji",
                "memo" => "",
                "latitude" => "35.610536",
                "altitude" => "139.592558",
            ]);
            
            Station::create([
                "id" => 3114,
                "prefecture_id" => 14,
                "city_id" => 738,
                "street_id" => 42200,
                "name" => "宿河原",
                "hiragana" => "しゅくがわら",
                "katakana" => "シュクガワラ",
                "katakana_half" => "ｼｭｸｶﾞﾜﾗ",
                "romaji" => "shukugawara",
                "memo" => "",
                "latitude" => "35.615286",
                "altitude" => "139.579448",
            ]);
            
            Station::create([
                "id" => 3115,
                "prefecture_id" => 14,
                "city_id" => 738,
                "street_id" => 42214,
                "name" => "登戸",
                "hiragana" => "のぼりと",
                "katakana" => "ノボリト",
                "katakana_half" => "ﾉﾎﾞﾘﾄ",
                "romaji" => "noborito",
                "memo" => "",
                "latitude" => "35.620757",
                "altitude" => "139.569892",
            ]);
            
            Station::create([
                "id" => 3116,
                "prefecture_id" => 14,
                "city_id" => 738,
                "street_id" => 42210,
                "name" => "中野島",
                "hiragana" => "なかのしま",
                "katakana" => "ナカノシマ",
                "katakana_half" => "ﾅｶﾉｼﾏ",
                "romaji" => "nakanoshima",
                "memo" => "",
                "latitude" => "35.630117",
                "altitude" => "139.550116",
            ]);
            
            Station::create([
                "id" => 3117,
                "prefecture_id" => 14,
                "city_id" => 738,
                "street_id" => 42202,
                "name" => "稲田堤",
                "hiragana" => "いなだづつみ",
                "katakana" => "イナダヅツミ",
                "katakana_half" => "ｲﾅﾀﾞﾂﾞﾂﾐ",
                "romaji" => "inadazutsumi",
                "memo" => "",
                "latitude" => "35.633645",
                "altitude" => "139.535256",
            ]);
            
            Station::create([
                "id" => 3118,
                "prefecture_id" => 14,
                "city_id" => 720,
                "street_id" => 41551,
                "name" => "八丁畷",
                "hiragana" => "はっちょうなわて",
                "katakana" => "ハッチョウナワテ",
                "katakana_half" => "ﾊｯﾁｮｳﾅﾜﾃ",
                "romaji" => "hacchounawate",
                "memo" => "",
                "latitude" => "35.522992",
                "altitude" => "139.691387",
            ]);
            
            Station::create([
                "id" => 3119,
                "prefecture_id" => 14,
                "city_id" => 734,
                "street_id" => null,
                "name" => "川崎新町",
                "hiragana" => "かわさきしんまち",
                "katakana" => "カワサキシンマチ",
                "katakana_half" => "ｶﾜｻｷｼﾝﾏﾁ",
                "romaji" => "kawasakishinmachi",
                "memo" => "",
                "latitude" => "35.518131",
                "altitude" => "139.699247",
            ]);
            
            Station::create([
                "id" => 3120,
                "prefecture_id" => 14,
                "city_id" => 734,
                "street_id" => 42043,
                "name" => "小田栄",
                "hiragana" => "おださかえ",
                "katakana" => "オダサカエ",
                "katakana_half" => "ｵﾀﾞｻｶｴ",
                "romaji" => "odasakae",
                "memo" => "",
                "latitude" => "35.514418",
                "altitude" => "139.705080",
            ]);
            
            Station::create([
                "id" => 3121,
                "prefecture_id" => 14,
                "city_id" => 717,
                "street_id" => 41145,
                "name" => "大口",
                "hiragana" => "おおぐち",
                "katakana" => "オオグチ",
                "katakana_half" => "ｵｵｸﾞﾁ",
                "romaji" => "ooguchi",
                "memo" => "",
                "latitude" => "35.492134",
                "altitude" => "139.646142",
            ]);
            
            Station::create([
                "id" => 3122,
                "prefecture_id" => 14,
                "city_id" => 724,
                "street_id" => 41699,
                "name" => "菊名",
                "hiragana" => "きくな",
                "katakana" => "キクナ",
                "katakana_half" => "ｷｸﾅ",
                "romaji" => "kikuna",
                "memo" => "",
                "latitude" => "35.509798",
                "altitude" => "139.631337",
            ]);
            
            Station::create([
                "id" => 3123,
                "prefecture_id" => 14,
                "city_id" => 724,
                "street_id" => 41701,
                "name" => "新横浜",
                "hiragana" => "しんよこはま",
                "katakana" => "シンヨコハマ",
                "katakana_half" => "ｼﾝﾖｺﾊﾏ",
                "romaji" => "shinyokohama",
                "memo" => "",
                "latitude" => "35.507410",
                "altitude" => "139.617644",
            ]);
            
            Station::create([
                "id" => 3124,
                "prefecture_id" => 14,
                "city_id" => 724,
                "street_id" => 41702,
                "name" => "小机",
                "hiragana" => "こづくえ",
                "katakana" => "コヅクエ",
                "katakana_half" => "ｺﾂﾞｸｴ",
                "romaji" => "kozukue",
                "memo" => "",
                "latitude" => "35.508520",
                "altitude" => "139.600062",
            ]);
            
            Station::create([
                "id" => 3125,
                "prefecture_id" => 14,
                "city_id" => 728,
                "street_id" => 41828,
                "name" => "鴨居",
                "hiragana" => "かもい",
                "katakana" => "カモイ",
                "katakana_half" => "ｶﾓｲ",
                "romaji" => "kamoi",
                "memo" => "",
                "latitude" => "35.510881",
                "altitude" => "139.567093",
            ]);
            
            Station::create([
                "id" => 3126,
                "prefecture_id" => 14,
                "city_id" => 728,
                "street_id" => 41837,
                "name" => "中山",
                "hiragana" => "なかやま",
                "katakana" => "ナカヤマ",
                "katakana_half" => "ﾅｶﾔﾏ",
                "romaji" => "nakayama",
                "memo" => "神奈川県",
                "latitude" => "35.514768",
                "altitude" => "139.539317",
            ]);
            
            Station::create([
                "id" => 3127,
                "prefecture_id" => 14,
                "city_id" => 728,
                "street_id" => 41836,
                "name" => "十日市場",
                "hiragana" => "とおかいちば",
                "katakana" => "トオカイチバ",
                "katakana_half" => "ﾄｵｶｲﾁﾊﾞ",
                "romaji" => "tookaichiba",
                "memo" => "神奈川県",
                "latitude" => "35.526266",
                "altitude" => "139.516596",
            ]);
            
            Station::create([
                "id" => 3128,
                "prefecture_id" => 14,
                "city_id" => 728,
                "street_id" => 41838,
                "name" => "長津田",
                "hiragana" => "ながつた",
                "katakana" => "ナガツタ",
                "katakana_half" => "ﾅｶﾞﾂﾀ",
                "romaji" => "nagatsuta",
                "memo" => "",
                "latitude" => "35.531849",
                "altitude" => "139.494598",
            ]);
            
            Station::create([
                "id" => 3129,
                "prefecture_id" => 14,
                "city_id" => 743,
                "street_id" => 42381,
                "name" => "古淵",
                "hiragana" => "こぶち",
                "katakana" => "コブチ",
                "katakana_half" => "ｺﾌﾞﾁ",
                "romaji" => "kobuchi",
                "memo" => "",
                "latitude" => "35.555984",
                "altitude" => "139.419269",
            ]);
            
            Station::create([
                "id" => 3130,
                "prefecture_id" => 14,
                "city_id" => 742,
                "street_id" => 42351,
                "name" => "淵野辺",
                "hiragana" => "ふちのべ",
                "katakana" => "フチノベ",
                "katakana_half" => "ﾌﾁﾉﾍﾞ",
                "romaji" => "fuchinobe",
                "memo" => "",
                "latitude" => "35.568760",
                "altitude" => "139.395076",
            ]);
            
            Station::create([
                "id" => 3131,
                "prefecture_id" => 14,
                "city_id" => 725,
                "street_id" => 41737,
                "name" => "矢部",
                "hiragana" => "やべ",
                "katakana" => "ヤベ",
                "katakana_half" => "ﾔﾍﾞ",
                "romaji" => "yabe",
                "memo" => "",
                "latitude" => "35.573065",
                "altitude" => "139.386771",
            ]);
            
            Station::create([
                "id" => 3132,
                "prefecture_id" => 14,
                "city_id" => 741,
                "street_id" => null,
                "name" => "相模原",
                "hiragana" => "さがみはら",
                "katakana" => "サガミハラ",
                "katakana_half" => "ｻｶﾞﾐﾊﾗ",
                "romaji" => "sagamihara",
                "memo" => "",
                "latitude" => "35.581064",
                "altitude" => "139.370995",
            ]);
            
            Station::create([
                "id" => 3133,
                "prefecture_id" => 14,
                "city_id" => 717,
                "street_id" => 41196,
                "name" => "橋本",
                "hiragana" => "はしもと",
                "katakana" => "ハシモト",
                "katakana_half" => "ﾊｼﾓﾄ",
                "romaji" => "hashimoto",
                "memo" => "神奈川県",
                "latitude" => "35.594895",
                "altitude" => "139.344330",
            ]);
            
            Station::create([
                "id" => 3134,
                "prefecture_id" => 14,
                "city_id" => 718,
                "street_id" => 41228,
                "name" => "桜木町",
                "hiragana" => "さくらぎちょう",
                "katakana" => "サクラギチョウ",
                "katakana_half" => "ｻｸﾗｷﾞﾁｮｳ",
                "romaji" => "sakuragichou",
                "memo" => "",
                "latitude" => "35.450194",
                "altitude" => "139.630979",
            ]);
            
            Station::create([
                "id" => 3135,
                "prefecture_id" => 14,
                "city_id" => 746,
                "street_id" => 42648,
                "name" => "関内",
                "hiragana" => "かんない",
                "katakana" => "カンナイ",
                "katakana_half" => "ｶﾝﾅｲ",
                "romaji" => "kannai",
                "memo" => "",
                "latitude" => "35.445638",
                "altitude" => "139.635951",
            ]);
            
            Station::create([
                "id" => 3136,
                "prefecture_id" => 14,
                "city_id" => 719,
                "street_id" => 41415,
                "name" => "石川町",
                "hiragana" => "いしかわちょう",
                "katakana" => "イシカワチョウ",
                "katakana_half" => "ｲｼｶﾜﾁｮｳ",
                "romaji" => "ishikawachou",
                "memo" => "",
                "latitude" => "35.438222",
                "altitude" => "139.643173",
            ]);
            
            Station::create([
                "id" => 3137,
                "prefecture_id" => 14,
                "city_id" => 719,
                "street_id" => 41507,
                "name" => "山手",
                "hiragana" => "やまて",
                "katakana" => "ヤマテ",
                "katakana_half" => "ﾔﾏﾃ",
                "romaji" => "yamate",
                "memo" => "",
                "latitude" => "35.427446",
                "altitude" => "139.646200",
            ]);
            
            Station::create([
                "id" => 3138,
                "prefecture_id" => 14,
                "city_id" => 719,
                "street_id" => 41458,
                "name" => "根岸",
                "hiragana" => "ねぎし",
                "katakana" => "ネギシ",
                "katakana_half" => "ﾈｷﾞｼ",
                "romaji" => "negishi",
                "memo" => "神奈川県",
                "latitude" => "35.415780",
                "altitude" => "139.635063",
            ]);
            
            Station::create([
                "id" => 3139,
                "prefecture_id" => 14,
                "city_id" => 722,
                "street_id" => null,
                "name" => "磯子",
                "hiragana" => "いそご",
                "katakana" => "イソゴ",
                "katakana_half" => "ｲｿｺﾞ",
                "romaji" => "isogo",
                "memo" => "",
                "latitude" => "35.399865",
                "altitude" => "139.617927",
            ]);
            
            Station::create([
                "id" => 3140,
                "prefecture_id" => 14,
                "city_id" => 722,
                "street_id" => 41629,
                "name" => "新杉田",
                "hiragana" => "しんすぎた",
                "katakana" => "シンスギタ",
                "katakana_half" => "ｼﾝｽｷﾞﾀ",
                "romaji" => "shinsugita",
                "memo" => "",
                "latitude" => "35.386810",
                "altitude" => "139.619511",
            ]);
            
            Station::create([
                "id" => 3141,
                "prefecture_id" => 14,
                "city_id" => 722,
                "street_id" => 41649,
                "name" => "洋光台",
                "hiragana" => "ようこうだい",
                "katakana" => "ヨウコウダイ",
                "katakana_half" => "ﾖｳｺｳﾀﾞｲ",
                "romaji" => "youkoudai",
                "memo" => "",
                "latitude" => "35.378728",
                "altitude" => "139.596707",
            ]);
            
            Station::create([
                "id" => 3142,
                "prefecture_id" => 14,
                "city_id" => 726,
                "street_id" => 41765,
                "name" => "港南台",
                "hiragana" => "こうなんだい",
                "katakana" => "コウナンダイ",
                "katakana_half" => "ｺｳﾅﾝﾀﾞｲ",
                "romaji" => "kounandai",
                "memo" => "",
                "latitude" => "35.375256",
                "altitude" => "139.576709",
            ]);
            
            Station::create([
                "id" => 3143,
                "prefecture_id" => 14,
                "city_id" => 730,
                "street_id" => 41904,
                "name" => "本郷台",
                "hiragana" => "ほんごうだい",
                "katakana" => "ホンゴウダイ",
                "katakana_half" => "ﾎﾝｺﾞｳﾀﾞｲ",
                "romaji" => "hongoudai",
                "memo" => "",
                "latitude" => "35.367423",
                "altitude" => "139.550295",
            ]);
            
            Station::create([
                "id" => 3144,
                "prefecture_id" => 14,
                "city_id" => 724,
                "street_id" => null,
                "name" => "北茅ケ崎",
                "hiragana" => "きたちがさき",
                "katakana" => "キタチガサキ",
                "katakana_half" => "ｷﾀﾁｶﾞｻｷ",
                "romaji" => "kitachigasaki",
                "memo" => "",
                "latitude" => "35.339118",
                "altitude" => "139.407613",
            ]);
            
            Station::create([
                "id" => 3145,
                "prefecture_id" => 14,
                "city_id" => 749,
                "street_id" => 42829,
                "name" => "香川",
                "hiragana" => "かがわ",
                "katakana" => "カガワ",
                "katakana_half" => "ｶｶﾞﾜ",
                "romaji" => "kagawa",
                "memo" => "",
                "latitude" => "35.356477",
                "altitude" => "139.399780",
            ]);
            
            Station::create([
                "id" => 3146,
                "prefecture_id" => 14,
                "city_id" => 761,
                "street_id" => null,
                "name" => "寒川",
                "hiragana" => "さむかわ",
                "katakana" => "サムカワ",
                "katakana_half" => "ｻﾑｶﾜ",
                "romaji" => "samukawa",
                "memo" => "",
                "latitude" => "35.367559",
                "altitude" => "139.387474",
            ]);
            
            Station::create([
                "id" => 3147,
                "prefecture_id" => 14,
                "city_id" => 761,
                "street_id" => 43251,
                "name" => "宮山",
                "hiragana" => "みややま",
                "katakana" => "ミヤヤマ",
                "katakana_half" => "ﾐﾔﾔﾏ",
                "romaji" => "miyayama",
                "memo" => "",
                "latitude" => "35.382280",
                "altitude" => "139.379725",
            ]);
            
            Station::create([
                "id" => 3148,
                "prefecture_id" => 14,
                "city_id" => 761,
                "street_id" => 43246,
                "name" => "倉見",
                "hiragana" => "くらみ",
                "katakana" => "クラミ",
                "katakana_half" => "ｸﾗﾐ",
                "romaji" => "kurami",
                "memo" => "",
                "latitude" => "35.394917",
                "altitude" => "139.378503",
            ]);
            
            Station::create([
                "id" => 3149,
                "prefecture_id" => 14,
                "city_id" => 756,
                "street_id" => 43134,
                "name" => "門沢橋",
                "hiragana" => "かどさわばし",
                "katakana" => "カドサワバシ",
                "katakana_half" => "ｶﾄﾞｻﾜﾊﾞｼ",
                "romaji" => "kadosawabashi",
                "memo" => "",
                "latitude" => "35.406583",
                "altitude" => "139.380196",
            ]);
            
            Station::create([
                "id" => 3150,
                "prefecture_id" => 14,
                "city_id" => 756,
                "street_id" => 43144,
                "name" => "社家",
                "hiragana" => "しゃけ",
                "katakana" => "シャケ",
                "katakana_half" => "ｼｬｹ",
                "romaji" => "shake",
                "memo" => "",
                "latitude" => "35.420748",
                "altitude" => "139.377446",
            ]);
            
            Station::create([
                "id" => 3151,
                "prefecture_id" => 14,
                "city_id" => 753,
                "street_id" => null,
                "name" => "厚木",
                "hiragana" => "あつぎ",
                "katakana" => "アツギ",
                "katakana_half" => "ｱﾂｷﾞ",
                "romaji" => "atsugi",
                "memo" => "",
                "latitude" => "35.443301",
                "altitude" => "139.378444",
            ]);
            
            Station::create([
                "id" => 3152,
                "prefecture_id" => 14,
                "city_id" => 756,
                "street_id" => null,
                "name" => "海老名",
                "hiragana" => "えびな",
                "katakana" => "エビナ",
                "katakana_half" => "ｴﾋﾞﾅ",
                "romaji" => "ebina",
                "memo" => "相模線",
                "latitude" => "35.454217",
                "altitude" => "139.389359",
            ]);
            
            Station::create([
                "id" => 3153,
                "prefecture_id" => 14,
                "city_id" => 757,
                "street_id" => 43158,
                "name" => "入谷",
                "hiragana" => "いりや",
                "katakana" => "イリヤ",
                "katakana_half" => "ｲﾘﾔ",
                "romaji" => "iriya",
                "memo" => "神奈川県",
                "latitude" => "35.478520",
                "altitude" => "139.391831",
            ]);
            
            Station::create([
                "id" => 3154,
                "prefecture_id" => 14,
                "city_id" => 743,
                "street_id" => 42390,
                "name" => "相武台下",
                "hiragana" => "そうぶだいした",
                "katakana" => "ソウブダイシタ",
                "katakana_half" => "ｿｳﾌﾞﾀﾞｲｼﾀ",
                "romaji" => "soubudaishita",
                "memo" => "",
                "latitude" => "35.493406",
                "altitude" => "139.386469",
            ]);
            
            Station::create([
                "id" => 3155,
                "prefecture_id" => 14,
                "city_id" => 743,
                "street_id" => 42387,
                "name" => "下溝",
                "hiragana" => "しもみぞ",
                "katakana" => "シモミゾ",
                "katakana_half" => "ｼﾓﾐｿﾞ",
                "romaji" => "shimomizo",
                "memo" => "",
                "latitude" => "35.518154",
                "altitude" => "139.380524",
            ]);
            
            Station::create([
                "id" => 3156,
                "prefecture_id" => 14,
                "city_id" => 736,
                "street_id" => null,
                "name" => "原当麻",
                "hiragana" => "はらたいま",
                "katakana" => "ハラタイマ",
                "katakana_half" => "ﾊﾗﾀｲﾏ",
                "romaji" => "harataima",
                "memo" => "",
                "latitude" => "35.529097",
                "altitude" => "139.375246",
            ]);
            
            Station::create([
                "id" => 3157,
                "prefecture_id" => 14,
                "city_id" => 752,
                "street_id" => 42957,
                "name" => "番田",
                "hiragana" => "ばんだ",
                "katakana" => "バンダ",
                "katakana_half" => "ﾊﾞﾝﾀﾞ",
                "romaji" => "banda",
                "memo" => "神奈川県",
                "latitude" => "35.545345",
                "altitude" => "139.362941",
            ]);
            
            Station::create([
                "id" => 3158,
                "prefecture_id" => 14,
                "city_id" => 742,
                "street_id" => 42335,
                "name" => "上溝",
                "hiragana" => "かみみぞ",
                "katakana" => "カミミゾ",
                "katakana_half" => "ｶﾐﾐｿﾞ",
                "romaji" => "kamimizo",
                "memo" => "",
                "latitude" => "35.557649",
                "altitude" => "139.363301",
            ]);
            
            Station::create([
                "id" => 3159,
                "prefecture_id" => 14,
                "city_id" => 742,
                "street_id" => 42360,
                "name" => "南橋本",
                "hiragana" => "みなみはしもと",
                "katakana" => "ミナミハシモト",
                "katakana_half" => "ﾐﾅﾐﾊｼﾓﾄ",
                "romaji" => "minamihashimoto",
                "memo" => "",
                "latitude" => "35.580147",
                "altitude" => "139.352510",
            ]);
            
            Station::create([
                "id" => 3160,
                "prefecture_id" => 14,
                "city_id" => 769,
                "street_id" => null,
                "name" => "下曽我",
                "hiragana" => "しもそが",
                "katakana" => "シモソガ",
                "katakana_half" => "ｼﾓｿｶﾞ",
                "romaji" => "shimosoga",
                "memo" => "",
                "latitude" => "35.303507",
                "altitude" => "139.183411",
            ]);
            
            Station::create([
                "id" => 3161,
                "prefecture_id" => 14,
                "city_id" => 765,
                "street_id" => 43298,
                "name" => "上大井",
                "hiragana" => "かみおおい",
                "katakana" => "カミオオイ",
                "katakana_half" => "ｶﾐｵｵｲ",
                "romaji" => "kamiooi",
                "memo" => "",
                "latitude" => "35.321866",
                "altitude" => "139.163635",
            ]);
            
            Station::create([
                "id" => 3162,
                "prefecture_id" => 14,
                "city_id" => 741,
                "street_id" => null,
                "name" => "相模金子",
                "hiragana" => "さがみかねこ",
                "katakana" => "サガミカネコ",
                "katakana_half" => "ｻｶﾞﾐｶﾈｺ",
                "romaji" => "sagamikaneko",
                "memo" => "",
                "latitude" => "35.333752",
                "altitude" => "139.150690",
            ]);
            
            Station::create([
                "id" => 3163,
                "prefecture_id" => 14,
                "city_id" => 766,
                "street_id" => null,
                "name" => "松田",
                "hiragana" => "まつだ",
                "katakana" => "マツダ",
                "katakana_half" => "ﾏﾂﾀﾞ",
                "romaji" => "matsuda",
                "memo" => "",
                "latitude" => "35.346863",
                "altitude" => "139.137414",
            ]);
            
            Station::create([
                "id" => 3164,
                "prefecture_id" => 14,
                "city_id" => 733,
                "street_id" => 42015,
                "name" => "東山北",
                "hiragana" => "ひがしやまきた",
                "katakana" => "ヒガシヤマキタ",
                "katakana_half" => "ﾋｶﾞｼﾔﾏｷﾀ",
                "romaji" => "higashiyamakita",
                "memo" => "",
                "latitude" => "35.357694",
                "altitude" => "139.107832",
            ]);
            
            Station::create([
                "id" => 3165,
                "prefecture_id" => 14,
                "city_id" => 767,
                "street_id" => null,
                "name" => "山北",
                "hiragana" => "やまきた",
                "katakana" => "ヤマキタ",
                "katakana_half" => "ﾔﾏｷﾀ",
                "romaji" => "yamakita",
                "memo" => "",
                "latitude" => "35.360666",
                "altitude" => "139.080390",
            ]);
            
            Station::create([
                "id" => 3166,
                "prefecture_id" => 14,
                "city_id" => 721,
                "street_id" => null,
                "name" => "谷峨",
                "hiragana" => "やが",
                "katakana" => "ヤガ",
                "katakana_half" => "ﾔｶﾞ",
                "romaji" => "yaga",
                "memo" => "",
                "latitude" => "35.365470",
                "altitude" => "139.038532",
            ]);
            
            Station::create([
                "id" => 3167,
                "prefecture_id" => 14,
                "city_id" => 723,
                "street_id" => 41653,
                "name" => "大川",
                "hiragana" => "おおかわ",
                "katakana" => "オオカワ",
                "katakana_half" => "ｵｵｶﾜ",
                "romaji" => "ookawa",
                "memo" => "",
                "latitude" => "35.495523",
                "altitude" => "139.711109",
            ]);
            
            Station::create([
                "id" => 3168,
                "prefecture_id" => 14,
                "city_id" => 734,
                "street_id" => 42047,
                "name" => "京王稲田堤",
                "hiragana" => "けいおういなだづつみ",
                "katakana" => "ケイオウイナダヅツミ",
                "katakana_half" => "ｹｲｵｳｲﾅﾀﾞﾂﾞﾂﾐ",
                "romaji" => "keiouinadazutsumi",
                "memo" => "",
                "latitude" => "35.633894",
                "altitude" => "139.531118",
            ]);
            
            Station::create([
                "id" => 3169,
                "prefecture_id" => 14,
                "city_id" => 727,
                "street_id" => 41823,
                "name" => "若葉台",
                "hiragana" => "わかばだい",
                "katakana" => "ワカバダイ",
                "katakana_half" => "ﾜｶﾊﾞﾀﾞｲ",
                "romaji" => "wakabadai",
                "memo" => "",
                "latitude" => "35.619228",
                "altitude" => "139.472568",
            ]);
            
            Station::create([
                "id" => 3170,
                "prefecture_id" => 14,
                "city_id" => 737,
                "street_id" => 42196,
                "name" => "向ケ丘遊園",
                "hiragana" => "むこうがおかゆうえん",
                "katakana" => "ムコウガオカユウエン",
                "katakana_half" => "ﾑｺｳｶﾞｵｶﾕｳｴﾝ",
                "romaji" => "mukougaokayuuen",
                "memo" => "",
                "latitude" => "35.617536",
                "altitude" => "139.564838",
            ]);
            
            Station::create([
                "id" => 3171,
                "prefecture_id" => 14,
                "city_id" => 738,
                "street_id" => 42198,
                "name" => "生田",
                "hiragana" => "いくた",
                "katakana" => "イクタ",
                "katakana_half" => "ｲｸﾀ",
                "romaji" => "ikuta",
                "memo" => "神奈川県",
                "latitude" => "35.615007",
                "altitude" => "139.542340",
            ]);
            
            Station::create([
                "id" => 3172,
                "prefecture_id" => 14,
                "city_id" => 716,
                "street_id" => null,
                "name" => "読売ランド前",
                "hiragana" => "よみうりらんどまえ",
                "katakana" => "ヨミウリランドマエ",
                "katakana_half" => "ﾖﾐｳﾘﾗﾝﾄﾞﾏｴ",
                "romaji" => "yomiurirandomae",
                "memo" => "",
                "latitude" => "35.614729",
                "altitude" => "139.528202",
            ]);
            
            Station::create([
                "id" => 3173,
                "prefecture_id" => 14,
                "city_id" => 731,
                "street_id" => 41918,
                "name" => "百合ケ丘",
                "hiragana" => "ゆりがおか",
                "katakana" => "ユリガオカ",
                "katakana_half" => "ﾕﾘｶﾞｵｶ",
                "romaji" => "yurigaoka",
                "memo" => "",
                "latitude" => "35.609007",
                "altitude" => "139.516176",
            ]);
            
            Station::create([
                "id" => 3174,
                "prefecture_id" => 14,
                "city_id" => 731,
                "street_id" => 41918,
                "name" => "新百合ケ丘",
                "hiragana" => "しんゆりがおか",
                "katakana" => "シンユリガオカ",
                "katakana_half" => "ｼﾝﾕﾘｶﾞｵｶ",
                "romaji" => "shinyurigaoka",
                "memo" => "",
                "latitude" => "35.603730",
                "altitude" => "139.507537",
            ]);
            
            Station::create([
                "id" => 3175,
                "prefecture_id" => 14,
                "city_id" => 732,
                "street_id" => 41945,
                "name" => "柿生",
                "hiragana" => "かきお",
                "katakana" => "カキオ",
                "katakana_half" => "ｶｷｵ",
                "romaji" => "kakio",
                "memo" => "",
                "latitude" => "35.589815",
                "altitude" => "139.497955",
            ]);
            
            Station::create([
                "id" => 3176,
                "prefecture_id" => 14,
                "city_id" => 743,
                "street_id" => 42383,
                "name" => "相模大野",
                "hiragana" => "さがみおおの",
                "katakana" => "サガミオオノ",
                "katakana_half" => "ｻｶﾞﾐｵｵﾉ",
                "romaji" => "sagamioono",
                "memo" => "",
                "latitude" => "35.531904",
                "altitude" => "139.437546",
            ]);
            
            Station::create([
                "id" => 3177,
                "prefecture_id" => 14,
                "city_id" => 748,
                "street_id" => null,
                "name" => "小田急相模原",
                "hiragana" => "おだきゅうさがみはら",
                "katakana" => "オダキュウサガミハラ",
                "katakana_half" => "ｵﾀﾞｷｭｳｻｶﾞﾐﾊﾗ",
                "romaji" => "odakyuusagamihara",
                "memo" => "",
                "latitude" => "35.515127",
                "altitude" => "139.422604",
            ]);
            
            Station::create([
                "id" => 3178,
                "prefecture_id" => 14,
                "city_id" => 743,
                "street_id" => 42390,
                "name" => "相武台前",
                "hiragana" => "そうぶだいまえ",
                "katakana" => "ソウブダイマエ",
                "katakana_half" => "ｿｳﾌﾞﾀﾞｲﾏｴ",
                "romaji" => "soubudaimae",
                "memo" => "",
                "latitude" => "35.499129",
                "altitude" => "139.408412",
            ]);
            
            Station::create([
                "id" => 3179,
                "prefecture_id" => 14,
                "city_id" => 757,
                "street_id" => null,
                "name" => "座間",
                "hiragana" => "ざま",
                "katakana" => "ザマ",
                "katakana_half" => "ｻﾞﾏ",
                "romaji" => "zama",
                "memo" => "",
                "latitude" => "35.480685",
                "altitude" => "139.399941",
            ]);
            
            Station::create([
                "id" => 3180,
                "prefecture_id" => 14,
                "city_id" => 716,
                "street_id" => 41131,
                "name" => "本厚木",
                "hiragana" => "ほんあつぎ",
                "katakana" => "ホンアツギ",
                "katakana_half" => "ﾎﾝｱﾂｷﾞ",
                "romaji" => "honatsugi",
                "memo" => "",
                "latitude" => "35.439357",
                "altitude" => "139.364307",
            ]);
            
            Station::create([
                "id" => 3181,
                "prefecture_id" => 14,
                "city_id" => 772,
                "street_id" => null,
                "name" => "愛甲石田",
                "hiragana" => "あいこういしだ",
                "katakana" => "アイコウイシダ",
                "katakana_half" => "ｱｲｺｳｲｼﾀﾞ",
                "romaji" => "aikouishida",
                "memo" => "",
                "latitude" => "35.417664",
                "altitude" => "139.344087",
            ]);
            
            Station::create([
                "id" => 3182,
                "prefecture_id" => 14,
                "city_id" => 755,
                "street_id" => null,
                "name" => "伊勢原",
                "hiragana" => "いせはら",
                "katakana" => "イセハラ",
                "katakana_half" => "ｲｾﾊﾗ",
                "romaji" => "isehara",
                "memo" => "",
                "latitude" => "35.396027",
                "altitude" => "139.313508",
            ]);
            
            Station::create([
                "id" => 3183,
                "prefecture_id" => 14,
                "city_id" => 752,
                "street_id" => 42952,
                "name" => "鶴巻温泉",
                "hiragana" => "つるまきおんせん",
                "katakana" => "ツルマキオンセン",
                "katakana_half" => "ﾂﾙﾏｷｵﾝｾﾝ",
                "romaji" => "tsurumakionsen",
                "memo" => "",
                "latitude" => "35.381111",
                "altitude" => "139.277844",
            ]);
            
            Station::create([
                "id" => 3184,
                "prefecture_id" => 14,
                "city_id" => 747,
                "street_id" => 42714,
                "name" => "東海大学前",
                "hiragana" => "とうかいだいがくまえ",
                "katakana" => "トウカイダイガクマエ",
                "katakana_half" => "ﾄｳｶｲﾀﾞｲｶﾞｸﾏｴ",
                "romaji" => "toukaidaigakumae",
                "memo" => "",
                "latitude" => "35.373139",
                "altitude" => "139.271262",
            ]);
            
            Station::create([
                "id" => 3185,
                "prefecture_id" => 14,
                "city_id" => 752,
                "street_id" => null,
                "name" => "秦野",
                "hiragana" => "はだの",
                "katakana" => "ハダノ",
                "katakana_half" => "ﾊﾀﾞﾉ",
                "romaji" => "hadano",
                "memo" => "",
                "latitude" => "35.370112",
                "altitude" => "139.225878",
            ]);
            
            Station::create([
                "id" => 3186,
                "prefecture_id" => 14,
                "city_id" => 752,
                "street_id" => 42938,
                "name" => "渋沢",
                "hiragana" => "しぶさわ",
                "katakana" => "シブサワ",
                "katakana_half" => "ｼﾌﾞｻﾜ",
                "romaji" => "shibusawa",
                "memo" => "",
                "latitude" => "35.374138",
                "altitude" => "139.184519",
            ]);
            
            Station::create([
                "id" => 3187,
                "prefecture_id" => 14,
                "city_id" => 766,
                "street_id" => null,
                "name" => "新松田",
                "hiragana" => "しんまつだ",
                "katakana" => "シンマツダ",
                "katakana_half" => "ｼﾝﾏﾂﾀﾞ",
                "romaji" => "shinmatsuda",
                "memo" => "",
                "latitude" => "35.345085",
                "altitude" => "139.139885",
            ]);
            
            Station::create([
                "id" => 3188,
                "prefecture_id" => 14,
                "city_id" => 768,
                "street_id" => null,
                "name" => "開成",
                "hiragana" => "かいせい",
                "katakana" => "カイセイ",
                "katakana_half" => "ｶｲｾｲ",
                "romaji" => "kaisei",
                "memo" => "",
                "latitude" => "35.326253",
                "altitude" => "139.135914",
            ]);
            
            Station::create([
                "id" => 3189,
                "prefecture_id" => 14,
                "city_id" => 748,
                "street_id" => 42759,
                "name" => "栢山",
                "hiragana" => "かやま",
                "katakana" => "カヤマ",
                "katakana_half" => "ｶﾔﾏ",
                "romaji" => "kayama",
                "memo" => "",
                "latitude" => "35.310339",
                "altitude" => "139.142720",
            ]);
            
            Station::create([
                "id" => 3190,
                "prefecture_id" => 14,
                "city_id" => 716,
                "street_id" => 41091,
                "name" => "富水",
                "hiragana" => "とみず",
                "katakana" => "トミズ",
                "katakana_half" => "ﾄﾐｽﾞ",
                "romaji" => "tomizu",
                "memo" => "",
                "latitude" => "35.296174",
                "altitude" => "139.145553",
            ]);
            
            Station::create([
                "id" => 3191,
                "prefecture_id" => 14,
                "city_id" => 716,
                "street_id" => null,
                "name" => "螢田",
                "hiragana" => "ほたるだ",
                "katakana" => "ホタルダ",
                "katakana_half" => "ﾎﾀﾙﾀﾞ",
                "romaji" => "hotaruda",
                "memo" => "",
                "latitude" => "35.284981",
                "altitude" => "139.151999",
            ]);
            
            Station::create([
                "id" => 3192,
                "prefecture_id" => 14,
                "city_id" => 758,
                "street_id" => null,
                "name" => "足柄",
                "hiragana" => "あしがら",
                "katakana" => "アシガラ",
                "katakana_half" => "ｱｼｶﾞﾗ",
                "romaji" => "ashigara",
                "memo" => "神奈川県",
                "latitude" => "35.272204",
                "altitude" => "139.154526",
            ]);
            
            Station::create([
                "id" => 3193,
                "prefecture_id" => 14,
                "city_id" => 743,
                "street_id" => 42395,
                "name" => "東林間",
                "hiragana" => "ひがしりんかん",
                "katakana" => "ヒガシリンカン",
                "katakana_half" => "ﾋｶﾞｼﾘﾝｶﾝ",
                "romaji" => "higashirinkan",
                "memo" => "",
                "latitude" => "35.520488",
                "altitude" => "139.438909",
            ]);
            
            Station::create([
                "id" => 3194,
                "prefecture_id" => 14,
                "city_id" => 754,
                "street_id" => 43071,
                "name" => "中央林間",
                "hiragana" => "ちゅうおうりんかん",
                "katakana" => "チュウオウリンカン",
                "katakana_half" => "ﾁｭｳｵｳﾘﾝｶﾝ",
                "romaji" => "chuuourinkan",
                "memo" => "",
                "latitude" => "35.507684",
                "altitude" => "139.444603",
            ]);
            
            Station::create([
                "id" => 3195,
                "prefecture_id" => 14,
                "city_id" => 754,
                "street_id" => 43081,
                "name" => "南林間",
                "hiragana" => "みなみりんかん",
                "katakana" => "ミナミリンカン",
                "katakana_half" => "ﾐﾅﾐﾘﾝｶﾝ",
                "romaji" => "minamirinkan",
                "memo" => "",
                "latitude" => "35.495713",
                "altitude" => "139.448019",
            ]);
            
            Station::create([
                "id" => 3196,
                "prefecture_id" => 14,
                "city_id" => 743,
                "street_id" => 42378,
                "name" => "鶴間",
                "hiragana" => "つるま",
                "katakana" => "ツルマ",
                "katakana_half" => "ﾂﾙﾏ",
                "romaji" => "tsuruma",
                "memo" => "",
                "latitude" => "35.490213",
                "altitude" => "139.450853",
            ]);
            
            Station::create([
                "id" => 3197,
                "prefecture_id" => 14,
                "city_id" => 754,
                "street_id" => null,
                "name" => "大和",
                "hiragana" => "やまと",
                "katakana" => "ヤマト",
                "katakana_half" => "ﾔﾏﾄ",
                "romaji" => "yamato",
                "memo" => "神奈川県",
                "latitude" => "35.469688",
                "altitude" => "139.461409",
            ]);
            
            Station::create([
                "id" => 3198,
                "prefecture_id" => 14,
                "city_id" => 721,
                "street_id" => 41594,
                "name" => "桜ケ丘",
                "hiragana" => "さくらがおか",
                "katakana" => "サクラガオカ",
                "katakana_half" => "ｻｸﾗｶﾞｵｶ",
                "romaji" => "sakuragaoka",
                "memo" => "",
                "latitude" => "35.450469",
                "altitude" => "139.465632",
            ]);
            
            Station::create([
                "id" => 3199,
                "prefecture_id" => 14,
                "city_id" => 761,
                "street_id" => null,
                "name" => "高座渋谷",
                "hiragana" => "こうざしぶや",
                "katakana" => "コウザシブヤ",
                "katakana_half" => "ｺｳｻﾞｼﾌﾞﾔ",
                "romaji" => "kouzashibuya",
                "memo" => "",
                "latitude" => "35.432497",
                "altitude" => "139.464883",
            ]);
            
            Station::create([
                "id" => 3200,
                "prefecture_id" => 14,
                "city_id" => 747,
                "street_id" => 42709,
                "name" => "長後",
                "hiragana" => "ちょうご",
                "katakana" => "チョウゴ",
                "katakana_half" => "ﾁｮｳｺﾞ",
                "romaji" => "chougo",
                "memo" => "",
                "latitude" => "35.412528",
                "altitude" => "139.465521",
            ]);
            
            Station::create([
                "id" => 3201,
                "prefecture_id" => 14,
                "city_id" => 747,
                "street_id" => 42699,
                "name" => "湘南台",
                "hiragana" => "しょうなんだい",
                "katakana" => "ショウナンダイ",
                "katakana_half" => "ｼｮｳﾅﾝﾀﾞｲ",
                "romaji" => "shounandai",
                "memo" => "",
                "latitude" => "35.396196",
                "altitude" => "139.466412",
            ]);
            
            Station::create([
                "id" => 3202,
                "prefecture_id" => 14,
                "city_id" => 717,
                "street_id" => 41214,
                "name" => "六会日大前",
                "hiragana" => "むつあいにちだいまえ",
                "katakana" => "ムツアイニチダイマエ",
                "katakana_half" => "ﾑﾂｱｲﾆﾁﾀﾞｲﾏｴ",
                "romaji" => "mutsuainichidaimae",
                "memo" => "",
                "latitude" => "35.383558",
                "altitude" => "139.470828",
            ]);
            
            Station::create([
                "id" => 3203,
                "prefecture_id" => 14,
                "city_id" => 747,
                "street_id" => 42702,
                "name" => "善行",
                "hiragana" => "ぜんぎょう",
                "katakana" => "ゼンギョウ",
                "katakana_half" => "ｾﾞﾝｷﾞｮｳ",
                "romaji" => "zengyou",
                "memo" => "",
                "latitude" => "35.362783",
                "altitude" => "139.473246",
            ]);
            
            Station::create([
                "id" => 3204,
                "prefecture_id" => 14,
                "city_id" => 747,
                "street_id" => null,
                "name" => "藤沢本町",
                "hiragana" => "ふじさわほんまち",
                "katakana" => "フジサワホンマチ",
                "katakana_half" => "ﾌｼﾞｻﾜﾎﾝﾏﾁ",
                "romaji" => "fujisawahonmachi",
                "memo" => "",
                "latitude" => "35.347980",
                "altitude" => "139.476274",
            ]);
            
            Station::create([
                "id" => 3205,
                "prefecture_id" => 14,
                "city_id" => 747,
                "street_id" => 42726,
                "name" => "本鵠沼",
                "hiragana" => "ほんくげぬま",
                "katakana" => "ホンクゲヌマ",
                "katakana_half" => "ﾎﾝｸｹﾞﾇﾏ",
                "romaji" => "honkugenuma",
                "memo" => "",
                "latitude" => "35.331064",
                "altitude" => "139.475303",
            ]);
            
            Station::create([
                "id" => 3206,
                "prefecture_id" => 14,
                "city_id" => 747,
                "street_id" => 42687,
                "name" => "鵠沼海岸",
                "hiragana" => "くげぬまかいがん",
                "katakana" => "クゲヌマカイガン",
                "katakana_half" => "ｸｹﾞﾇﾏｶｲｶﾞﾝ",
                "romaji" => "kugenumakaigan",
                "memo" => "",
                "latitude" => "35.320704",
                "altitude" => "139.471081",
            ]);
            
            Station::create([
                "id" => 3207,
                "prefecture_id" => 14,
                "city_id" => 747,
                "street_id" => 42677,
                "name" => "片瀬江ノ島",
                "hiragana" => "かたせえのしま",
                "katakana" => "カタセエノシマ",
                "katakana_half" => "ｶﾀｾｴﾉｼﾏ",
                "romaji" => "kataseenoshima",
                "memo" => "",
                "latitude" => "35.308789",
                "altitude" => "139.483498",
            ]);
            
            Station::create([
                "id" => 3208,
                "prefecture_id" => 14,
                "city_id" => 729,
                "street_id" => 41859,
                "name" => "五月台",
                "hiragana" => "さつきだい",
                "katakana" => "サツキダイ",
                "katakana_half" => "ｻﾂｷﾀﾞｲ",
                "romaji" => "satsukidai",
                "memo" => "",
                "latitude" => "35.600119",
                "altitude" => "139.493650",
            ]);
            
            Station::create([
                "id" => 3209,
                "prefecture_id" => 14,
                "city_id" => 740,
                "street_id" => 42259,
                "name" => "栗平",
                "hiragana" => "くりひら",
                "katakana" => "クリヒラ",
                "katakana_half" => "ｸﾘﾋﾗ",
                "romaji" => "kurihira",
                "memo" => "",
                "latitude" => "35.605979",
                "altitude" => "139.480928",
            ]);
            
            Station::create([
                "id" => 3210,
                "prefecture_id" => 14,
                "city_id" => 740,
                "street_id" => 42260,
                "name" => "黒川",
                "hiragana" => "くろかわ",
                "katakana" => "クロカワ",
                "katakana_half" => "ｸﾛｶﾜ",
                "romaji" => "kurokawa",
                "memo" => "神奈川県",
                "latitude" => "35.613145",
                "altitude" => "139.470790",
            ]);
            
            Station::create([
                "id" => 3211,
                "prefecture_id" => 14,
                "city_id" => 740,
                "street_id" => 42270,
                "name" => "はるひ野",
                "hiragana" => "はるひの",
                "katakana" => "ハルヒノ",
                "katakana_half" => "ﾊﾙﾋﾉ",
                "romaji" => "haruhino",
                "memo" => "",
                "latitude" => "35.618784",
                "altitude" => "139.464596",
            ]);
            
            Station::create([
                "id" => 3212,
                "prefecture_id" => 14,
                "city_id" => 736,
                "street_id" => 42164,
                "name" => "新丸子",
                "hiragana" => "しんまるこ",
                "katakana" => "シンマルコ",
                "katakana_half" => "ｼﾝﾏﾙｺ",
                "romaji" => "shinmaruko",
                "memo" => "",
                "latitude" => "35.580597",
                "altitude" => "139.661943",
            ]);
            
            Station::create([
                "id" => 3213,
                "prefecture_id" => 14,
                "city_id" => 716,
                "street_id" => 41134,
                "name" => "元住吉",
                "hiragana" => "もとすみよし",
                "katakana" => "モトスミヨシ",
                "katakana_half" => "ﾓﾄｽﾐﾖｼ",
                "romaji" => "motosumiyoshi",
                "memo" => "",
                "latitude" => "35.564292",
                "altitude" => "139.654028",
            ]);
            
            Station::create([
                "id" => 3214,
                "prefecture_id" => 14,
                "city_id" => 724,
                "street_id" => 41724,
                "name" => "日吉",
                "hiragana" => "ひよし",
                "katakana" => "ヒヨシ",
                "katakana_half" => "ﾋﾖｼ",
                "romaji" => "hiyoshi",
                "memo" => "神奈川県",
                "latitude" => "35.553043",
                "altitude" => "139.646778",
            ]);
            
            Station::create([
                "id" => 3215,
                "prefecture_id" => 14,
                "city_id" => 724,
                "street_id" => 41716,
                "name" => "綱島",
                "hiragana" => "つなしま",
                "katakana" => "ツナシマ",
                "katakana_half" => "ﾂﾅｼﾏ",
                "romaji" => "tsunashima",
                "memo" => "",
                "latitude" => "35.536990",
                "altitude" => "139.634946",
            ]);
            
            Station::create([
                "id" => 3216,
                "prefecture_id" => 14,
                "city_id" => 724,
                "street_id" => 41696,
                "name" => "大倉山",
                "hiragana" => "おおくらやま",
                "katakana" => "オオクラヤマ",
                "katakana_half" => "ｵｵｸﾗﾔﾏ",
                "romaji" => "ookurayama",
                "memo" => "神奈川県",
                "latitude" => "35.521992",
                "altitude" => "139.629865",
            ]);
            
            Station::create([
                "id" => 3217,
                "prefecture_id" => 14,
                "city_id" => 719,
                "street_id" => 41499,
                "name" => "妙蓮寺",
                "hiragana" => "みょうれんじ",
                "katakana" => "ミョウレンジ",
                "katakana_half" => "ﾐｮｳﾚﾝｼﾞ",
                "romaji" => "myourenji",
                "memo" => "",
                "latitude" => "35.498465",
                "altitude" => "139.633171",
            ]);
            
            Station::create([
                "id" => 3218,
                "prefecture_id" => 14,
                "city_id" => 717,
                "street_id" => 41193,
                "name" => "白楽",
                "hiragana" => "はくらく",
                "katakana" => "ハクラク",
                "katakana_half" => "ﾊｸﾗｸ",
                "romaji" => "hakuraku",
                "memo" => "",
                "latitude" => "35.489689",
                "altitude" => "139.627894",
            ]);
            
            Station::create([
                "id" => 3219,
                "prefecture_id" => 14,
                "city_id" => 716,
                "street_id" => 41089,
                "name" => "東白楽",
                "hiragana" => "ひがしはくらく",
                "katakana" => "ヒガシハクラク",
                "katakana_half" => "ﾋｶﾞｼﾊｸﾗｸ",
                "romaji" => "higashihakuraku",
                "memo" => "",
                "latitude" => "35.483189",
                "altitude" => "139.629561",
            ]);
            
            Station::create([
                "id" => 3220,
                "prefecture_id" => 14,
                "city_id" => 717,
                "street_id" => 41151,
                "name" => "反町",
                "hiragana" => "たんまち",
                "katakana" => "タンマチ",
                "katakana_half" => "ﾀﾝﾏﾁ",
                "romaji" => "tanmachi",
                "memo" => "",
                "latitude" => "35.474691",
                "altitude" => "139.625339",
            ]);
            
            Station::create([
                "id" => 3221,
                "prefecture_id" => 14,
                "city_id" => 737,
                "street_id" => 42194,
                "name" => "二子新地",
                "hiragana" => "ふたこしんち",
                "katakana" => "フタコシンチ",
                "katakana_half" => "ﾌﾀｺｼﾝﾁ",
                "romaji" => "futakoshinchi",
                "memo" => "",
                "latitude" => "35.607121",
                "altitude" => "139.622417",
            ]);
            
            Station::create([
                "id" => 3222,
                "prefecture_id" => 14,
                "city_id" => 737,
                "street_id" => null,
                "name" => "高津",
                "hiragana" => "たかつ",
                "katakana" => "タカツ",
                "katakana_half" => "ﾀｶﾂ",
                "romaji" => "takatsu",
                "memo" => "神奈川県",
                "latitude" => "35.603537",
                "altitude" => "139.617473",
            ]);
            
            Station::create([
                "id" => 3223,
                "prefecture_id" => 14,
                "city_id" => 737,
                "street_id" => 42195,
                "name" => "溝の口",
                "hiragana" => "みぞのくち",
                "katakana" => "ミゾノクチ",
                "katakana_half" => "ﾐｿﾞﾉｸﾁ",
                "romaji" => "mizonokuchi",
                "memo" => "",
                "latitude" => "35.599843",
                "altitude" => "139.610529",
            ]);
            
            Station::create([
                "id" => 3224,
                "prefecture_id" => 14,
                "city_id" => 716,
                "street_id" => 41097,
                "name" => "梶が谷",
                "hiragana" => "かじがや",
                "katakana" => "カジガヤ",
                "katakana_half" => "ｶｼﾞｶﾞﾔ",
                "romaji" => "kajigaya",
                "memo" => "",
                "latitude" => "35.593789",
                "altitude" => "139.605697",
            ]);
            
            Station::create([
                "id" => 3225,
                "prefecture_id" => 14,
                "city_id" => 718,
                "street_id" => 41407,
                "name" => "宮崎台",
                "hiragana" => "みやざきだい",
                "katakana" => "ミヤザキダイ",
                "katakana_half" => "ﾐﾔｻﾞｷﾀﾞｲ",
                "romaji" => "miyazakidai",
                "memo" => "",
                "latitude" => "35.587317",
                "altitude" => "139.591365",
            ]);
            
            Station::create([
                "id" => 3226,
                "prefecture_id" => 14,
                "city_id" => 739,
                "street_id" => 42248,
                "name" => "宮前平",
                "hiragana" => "みやまえだいら",
                "katakana" => "ミヤマエダイラ",
                "katakana_half" => "ﾐﾔﾏｴﾀﾞｲﾗ",
                "romaji" => "miyamaedaira",
                "memo" => "",
                "latitude" => "35.584928",
                "altitude" => "139.581921",
            ]);
            
            Station::create([
                "id" => 3227,
                "prefecture_id" => 14,
                "city_id" => 739,
                "street_id" => 42229,
                "name" => "鷺沼",
                "hiragana" => "さぎぬま",
                "katakana" => "サギヌマ",
                "katakana_half" => "ｻｷﾞﾇﾏ",
                "romaji" => "saginuma",
                "memo" => "",
                "latitude" => "35.579567",
                "altitude" => "139.573005",
            ]);
            
            Station::create([
                "id" => 3228,
                "prefecture_id" => 14,
                "city_id" => 732,
                "street_id" => 41959,
                "name" => "たまプラーザ",
                "hiragana" => "たまぷらーざ",
                "katakana" => "タマプラーザ",
                "katakana_half" => "ﾀﾏﾌﾟﾗｰｻﾞ",
                "romaji" => "tamapuraｰza",
                "memo" => "",
                "latitude" => "35.577401",
                "altitude" => "139.558618",
            ]);
            
            Station::create([
                "id" => 3229,
                "prefecture_id" => 14,
                "city_id" => 732,
                "street_id" => 41932,
                "name" => "あざみ野",
                "hiragana" => "あざみの",
                "katakana" => "アザミノ",
                "katakana_half" => "ｱｻﾞﾐﾉ",
                "romaji" => "azamino",
                "memo" => "",
                "latitude" => "35.568707",
                "altitude" => "139.553535",
            ]);
            
            Station::create([
                "id" => 3230,
                "prefecture_id" => 14,
                "city_id" => 716,
                "street_id" => 41094,
                "name" => "江田",
                "hiragana" => "えだ",
                "katakana" => "エダ",
                "katakana_half" => "ｴﾀﾞ",
                "romaji" => "eda",
                "memo" => "神奈川県",
                "latitude" => "35.558625",
                "altitude" => "139.551508",
            ]);
            
            Station::create([
                "id" => 3231,
                "prefecture_id" => 14,
                "city_id" => 716,
                "street_id" => null,
                "name" => "市が尾",
                "hiragana" => "いちがお",
                "katakana" => "イチガオ",
                "katakana_half" => "ｲﾁｶﾞｵ",
                "romaji" => "ichigao",
                "memo" => "",
                "latitude" => "35.551431",
                "altitude" => "139.541454",
            ]);
            
            Station::create([
                "id" => 3232,
                "prefecture_id" => 14,
                "city_id" => 732,
                "street_id" => 41966,
                "name" => "藤が丘",
                "hiragana" => "ふじがおか",
                "katakana" => "フジガオカ",
                "katakana_half" => "ﾌｼﾞｶﾞｵｶ",
                "romaji" => "fujigaoka",
                "memo" => "神奈川県",
                "latitude" => "35.543571",
                "altitude" => "139.527900",
            ]);
            
            Station::create([
                "id" => 3233,
                "prefecture_id" => 14,
                "city_id" => 732,
                "street_id" => 41930,
                "name" => "青葉台",
                "hiragana" => "あおばだい",
                "katakana" => "アオバダイ",
                "katakana_half" => "ｱｵﾊﾞﾀﾞｲ",
                "romaji" => "aobadai",
                "memo" => "",
                "latitude" => "35.542931",
                "altitude" => "139.517178",
            ]);
            
            Station::create([
                "id" => 3234,
                "prefecture_id" => 14,
                "city_id" => 732,
                "street_id" => 41960,
                "name" => "田奈",
                "hiragana" => "たな",
                "katakana" => "タナ",
                "katakana_half" => "ﾀﾅ",
                "romaji" => "tana",
                "memo" => "",
                "latitude" => "35.536154",
                "altitude" => "139.504846",
            ]);
            
            Station::create([
                "id" => 3235,
                "prefecture_id" => 14,
                "city_id" => 754,
                "street_id" => 43073,
                "name" => "つきみ野",
                "hiragana" => "つきみの",
                "katakana" => "ツキミノ",
                "katakana_half" => "ﾂｷﾐﾉ",
                "romaji" => "tsukimino",
                "memo" => "",
                "latitude" => "35.510323",
                "altitude" => "139.458046",
            ]);
            
            Station::create([
                "id" => 3236,
                "prefecture_id" => 14,
                "city_id" => 732,
                "street_id" => 41944,
                "name" => "恩田",
                "hiragana" => "おんだ",
                "katakana" => "オンダ",
                "katakana_half" => "ｵﾝﾀﾞ",
                "romaji" => "onda",
                "memo" => "",
                "latitude" => "35.545569",
                "altitude" => "139.492097",
            ]);
            
            Station::create([
                "id" => 3237,
                "prefecture_id" => 14,
                "city_id" => 716,
                "street_id" => null,
                "name" => "こどもの国",
                "hiragana" => "こどものくに",
                "katakana" => "コドモノクニ",
                "katakana_half" => "ｺﾄﾞﾓﾉｸﾆ",
                "romaji" => "kodomonokuni",
                "memo" => "神奈川県",
                "latitude" => "35.558401",
                "altitude" => "139.486375",
            ]);
            
            Station::create([
                "id" => 3238,
                "prefecture_id" => 14,
                "city_id" => 734,
                "street_id" => 42047,
                "name" => "京急川崎",
                "hiragana" => "けいきゅうかわさき",
                "katakana" => "ケイキュウカワサキ",
                "katakana_half" => "ｹｲｷｭｳｶﾜｻｷ",
                "romaji" => "keikyuukawasaki",
                "memo" => "",
                "latitude" => "35.532825",
                "altitude" => "139.700941",
            ]);
            
            Station::create([
                "id" => 3239,
                "prefecture_id" => 14,
                "city_id" => 716,
                "street_id" => null,
                "name" => "鶴見市場",
                "hiragana" => "つるみいちば",
                "katakana" => "ツルミイチバ",
                "katakana_half" => "ﾂﾙﾐｲﾁﾊﾞ",
                "romaji" => "tsurumiichiba",
                "memo" => "",
                "latitude" => "35.517798",
                "altitude" => "139.686609",
            ]);
            
            Station::create([
                "id" => 3240,
                "prefecture_id" => 14,
                "city_id" => 734,
                "street_id" => 42047,
                "name" => "京急鶴見",
                "hiragana" => "けいきゅうつるみ",
                "katakana" => "ケイキュウツルミ",
                "katakana_half" => "ｹｲｷｭｳﾂﾙﾐ",
                "romaji" => "keikyuutsurumi",
                "memo" => "",
                "latitude" => "35.507272",
                "altitude" => "139.678111",
            ]);
            
            Station::create([
                "id" => 3241,
                "prefecture_id" => 14,
                "city_id" => 718,
                "street_id" => 41238,
                "name" => "花月園前",
                "hiragana" => "かげつえんまえ",
                "katakana" => "カゲツエンマエ",
                "katakana_half" => "ｶｹﾞﾂｴﾝﾏｴ",
                "romaji" => "kagetsuenmae",
                "memo" => "",
                "latitude" => "35.500383",
                "altitude" => "139.673028",
            ]);
            
            Station::create([
                "id" => 3242,
                "prefecture_id" => 14,
                "city_id" => 716,
                "street_id" => 41122,
                "name" => "生麦",
                "hiragana" => "なまむぎ",
                "katakana" => "ナマムギ",
                "katakana_half" => "ﾅﾏﾑｷﾞ",
                "romaji" => "namamugi",
                "memo" => "",
                "latitude" => "35.495272",
                "altitude" => "139.667002",
            ]);
            
            Station::create([
                "id" => 3243,
                "prefecture_id" => 14,
                "city_id" => 734,
                "street_id" => 42047,
                "name" => "京急新子安",
                "hiragana" => "けいきゅうしんこやす",
                "katakana" => "ケイキュウシンコヤス",
                "katakana_half" => "ｹｲｷｭｳｼﾝｺﾔｽ",
                "romaji" => "keikyuushinkoyasu",
                "memo" => "",
                "latitude" => "35.487078",
                "altitude" => "139.655559",
            ]);
            
            Station::create([
                "id" => 3244,
                "prefecture_id" => 14,
                "city_id" => 717,
                "street_id" => 41160,
                "name" => "子安",
                "hiragana" => "こやす",
                "katakana" => "コヤス",
                "katakana_half" => "ｺﾔｽ",
                "romaji" => "koyasu",
                "memo" => "",
                "latitude" => "35.484940",
                "altitude" => "139.645642",
            ]);
            
            Station::create([
                "id" => 3245,
                "prefecture_id" => 14,
                "city_id" => 717,
                "street_id" => null,
                "name" => "神奈川新町",
                "hiragana" => "かながわしんまち",
                "katakana" => "カナガワシンマチ",
                "katakana_half" => "ｶﾅｶﾞﾜｼﾝﾏﾁ",
                "romaji" => "kanagawashinmachi",
                "memo" => "",
                "latitude" => "35.481468",
                "altitude" => "139.640060",
            ]);
            
            Station::create([
                "id" => 3246,
                "prefecture_id" => 14,
                "city_id" => 716,
                "street_id" => 41121,
                "name" => "仲木戸",
                "hiragana" => "なかきど",
                "katakana" => "ナカキド",
                "katakana_half" => "ﾅｶｷﾄﾞ",
                "romaji" => "nakakido",
                "memo" => "",
                "latitude" => "35.477274",
                "altitude" => "139.634393",
            ]);
            
            Station::create([
                "id" => 3247,
                "prefecture_id" => 14,
                "city_id" => 717,
                "street_id" => null,
                "name" => "神奈川",
                "hiragana" => "かながわ",
                "katakana" => "カナガワ",
                "katakana_half" => "ｶﾅｶﾞﾜ",
                "romaji" => "kanagawa",
                "memo" => "",
                "latitude" => "35.470968",
                "altitude" => "139.627090",
            ]);
            
            Station::create([
                "id" => 3248,
                "prefecture_id" => 14,
                "city_id" => 718,
                "street_id" => 41233,
                "name" => "戸部",
                "hiragana" => "とべ",
                "katakana" => "トベ",
                "katakana_half" => "ﾄﾍﾞ",
                "romaji" => "tobe",
                "memo" => "",
                "latitude" => "35.456748",
                "altitude" => "139.619534",
            ]);
            
            Station::create([
                "id" => 3249,
                "prefecture_id" => 14,
                "city_id" => 719,
                "street_id" => 41468,
                "name" => "日ノ出町",
                "hiragana" => "ひのでちょう",
                "katakana" => "ヒノデチョウ",
                "katakana_half" => "ﾋﾉﾃﾞﾁｮｳ",
                "romaji" => "hinodechou",
                "memo" => "",
                "latitude" => "35.445583",
                "altitude" => "139.626840",
            ]);
            
            Station::create([
                "id" => 3250,
                "prefecture_id" => 14,
                "city_id" => 719,
                "street_id" => 41431,
                "name" => "黄金町",
                "hiragana" => "こがねちょう",
                "katakana" => "コガネチョウ",
                "katakana_half" => "ｺｶﾞﾈﾁｮｳ",
                "romaji" => "koganechou",
                "memo" => "",
                "latitude" => "35.439750",
                "altitude" => "139.622729",
            ]);
            
            Station::create([
                "id" => 3251,
                "prefecture_id" => 14,
                "city_id" => 720,
                "street_id" => 41565,
                "name" => "南太田",
                "hiragana" => "みなみおおた",
                "katakana" => "ミナミオオタ",
                "katakana_half" => "ﾐﾅﾐｵｵﾀ",
                "romaji" => "minamioota",
                "memo" => "",
                "latitude" => "35.436889",
                "altitude" => "139.613453",
            ]);
            
            Station::create([
                "id" => 3252,
                "prefecture_id" => 14,
                "city_id" => 720,
                "street_id" => 41518,
                "name" => "井土ケ谷",
                "hiragana" => "いどがや",
                "katakana" => "イドガヤ",
                "katakana_half" => "ｲﾄﾞｶﾞﾔ",
                "romaji" => "idogaya",
                "memo" => "",
                "latitude" => "35.433917",
                "altitude" => "139.600926",
            ]);
            
            Station::create([
                "id" => 3253,
                "prefecture_id" => 14,
                "city_id" => 720,
                "street_id" => 41529,
                "name" => "弘明寺",
                "hiragana" => "ぐみょうじ",
                "katakana" => "グミョウジ",
                "katakana_half" => "ｸﾞﾐｮｳｼﾞ",
                "romaji" => "gumyouji",
                "memo" => "京急線",
                "latitude" => "35.424362",
                "altitude" => "139.596816",
            ]);
            
            Station::create([
                "id" => 3254,
                "prefecture_id" => 14,
                "city_id" => 726,
                "street_id" => 41760,
                "name" => "上大岡",
                "hiragana" => "かみおおおか",
                "katakana" => "カミオオオカ",
                "katakana_half" => "ｶﾐｵｵｵｶ",
                "romaji" => "kamioooka",
                "memo" => "",
                "latitude" => "35.409197",
                "altitude" => "139.596595",
            ]);
            
            Station::create([
                "id" => 3255,
                "prefecture_id" => 14,
                "city_id" => 716,
                "street_id" => null,
                "name" => "屏風浦",
                "hiragana" => "びょうぶがうら",
                "katakana" => "ビョウブガウラ",
                "katakana_half" => "ﾋﾞｮｳﾌﾞｶﾞｳﾗ",
                "romaji" => "byoubugaura",
                "memo" => "",
                "latitude" => "35.394587",
                "altitude" => "139.610205",
            ]);
            
            Station::create([
                "id" => 3256,
                "prefecture_id" => 14,
                "city_id" => 722,
                "street_id" => 41629,
                "name" => "杉田",
                "hiragana" => "すぎた",
                "katakana" => "スギタ",
                "katakana_half" => "ｽｷﾞﾀ",
                "romaji" => "sugita",
                "memo" => "神奈川県",
                "latitude" => "35.383534",
                "altitude" => "139.615872",
            ]);
            
            Station::create([
                "id" => 3257,
                "prefecture_id" => 14,
                "city_id" => 734,
                "street_id" => 42047,
                "name" => "京急富岡",
                "hiragana" => "けいきゅうとみおか",
                "katakana" => "ケイキュウトミオカ",
                "katakana_half" => "ｹｲｷｭｳﾄﾐｵｶ",
                "romaji" => "keikyuutomioka",
                "memo" => "",
                "latitude" => "35.367063",
                "altitude" => "139.629872",
            ]);
            
            Station::create([
                "id" => 3258,
                "prefecture_id" => 14,
                "city_id" => 723,
                "street_id" => 41677,
                "name" => "能見台",
                "hiragana" => "のうけんだい",
                "katakana" => "ノウケンダイ",
                "katakana_half" => "ﾉｳｹﾝﾀﾞｲ",
                "romaji" => "noukendai",
                "memo" => "",
                "latitude" => "35.360841",
                "altitude" => "139.629456",
            ]);
            
            Station::create([
                "id" => 3259,
                "prefecture_id" => 14,
                "city_id" => 723,
                "street_id" => null,
                "name" => "金沢文庫",
                "hiragana" => "かなざわぶんこ",
                "katakana" => "カナザワブンコ",
                "katakana_half" => "ｶﾅｻﾞﾜﾌﾞﾝｺ",
                "romaji" => "kanazawabunko",
                "memo" => "",
                "latitude" => "35.342955",
                "altitude" => "139.621651",
            ]);
            
            Station::create([
                "id" => 3260,
                "prefecture_id" => 14,
                "city_id" => 723,
                "street_id" => null,
                "name" => "金沢八景",
                "hiragana" => "かなざわはっけい",
                "katakana" => "カナザワハッケイ",
                "katakana_half" => "ｶﾅｻﾞﾜﾊｯｹｲ",
                "romaji" => "kanazawahakkei",
                "memo" => "京急線",
                "latitude" => "35.331234",
                "altitude" => "139.620124",
            ]);
            
            Station::create([
                "id" => 3261,
                "prefecture_id" => 14,
                "city_id" => 744,
                "street_id" => 42427,
                "name" => "追浜",
                "hiragana" => "おっぱま",
                "katakana" => "オッパマ",
                "katakana_half" => "ｵｯﾊﾟﾏ",
                "romaji" => "oppama",
                "memo" => "",
                "latitude" => "35.315707",
                "altitude" => "139.624902",
            ]);
            
            Station::create([
                "id" => 3262,
                "prefecture_id" => 14,
                "city_id" => 734,
                "street_id" => 42047,
                "name" => "京急田浦",
                "hiragana" => "けいきゅうたうら",
                "katakana" => "ケイキュウタウラ",
                "katakana_half" => "ｹｲｷｭｳﾀｳﾗ",
                "romaji" => "keikyuutaura",
                "memo" => "",
                "latitude" => "35.300876",
                "altitude" => "139.625542",
            ]);
            
            Station::create([
                "id" => 3263,
                "prefecture_id" => 14,
                "city_id" => 744,
                "street_id" => 42408,
                "name" => "安針塚",
                "hiragana" => "あんじんづか",
                "katakana" => "アンジンヅカ",
                "katakana_half" => "ｱﾝｼﾞﾝﾂﾞｶ",
                "romaji" => "anjinzuka",
                "memo" => "",
                "latitude" => "35.286739",
                "altitude" => "139.642957",
            ]);
            
            Station::create([
                "id" => 3264,
                "prefecture_id" => 14,
                "city_id" => 744,
                "street_id" => 42477,
                "name" => "逸見",
                "hiragana" => "へみ",
                "katakana" => "ヘミ",
                "katakana_half" => "ﾍﾐ",
                "romaji" => "hemi",
                "memo" => "",
                "latitude" => "35.280656",
                "altitude" => "139.652846",
            ]);
            
            Station::create([
                "id" => 3265,
                "prefecture_id" => 14,
                "city_id" => 716,
                "street_id" => 41105,
                "name" => "汐入",
                "hiragana" => "しおいり",
                "katakana" => "シオイリ",
                "katakana_half" => "ｼｵｲﾘ",
                "romaji" => "shioiri",
                "memo" => "",
                "latitude" => "35.280212",
                "altitude" => "139.661928",
            ]);
            
            Station::create([
                "id" => 3266,
                "prefecture_id" => 14,
                "city_id" => 744,
                "street_id" => null,
                "name" => "横須賀中央",
                "hiragana" => "よこすかちゅうおう",
                "katakana" => "ヨコスカチュウオウ",
                "katakana_half" => "ﾖｺｽｶﾁｭｳｵｳ",
                "romaji" => "yokosukachuuou",
                "memo" => "",
                "latitude" => "35.278490",
                "altitude" => "139.670650",
            ]);
            
            Station::create([
                "id" => 3267,
                "prefecture_id" => 14,
                "city_id" => 716,
                "street_id" => null,
                "name" => "県立大学",
                "hiragana" => "けんりつだいがく",
                "katakana" => "ケンリツダイガク",
                "katakana_half" => "ｹﾝﾘﾂﾀﾞｲｶﾞｸ",
                "romaji" => "kenritsudaigaku",
                "memo" => "",
                "latitude" => "35.269741",
                "altitude" => "139.677011",
            ]);
            
            Station::create([
                "id" => 3268,
                "prefecture_id" => 14,
                "city_id" => 720,
                "street_id" => 41560,
                "name" => "堀ノ内",
                "hiragana" => "ほりのうち",
                "katakana" => "ホリノウチ",
                "katakana_half" => "ﾎﾘﾉｳﾁ",
                "romaji" => "horinouchi",
                "memo" => "",
                "latitude" => "35.263131",
                "altitude" => "139.686927",
            ]);
            
            Station::create([
                "id" => 3269,
                "prefecture_id" => 14,
                "city_id" => 734,
                "street_id" => 42047,
                "name" => "京急大津",
                "hiragana" => "けいきゅうおおつ",
                "katakana" => "ケイキュウオオツ",
                "katakana_half" => "ｹｲｷｭｳｵｵﾂ",
                "romaji" => "keikyuuootsu",
                "memo" => "",
                "latitude" => "35.260992",
                "altitude" => "139.695399",
            ]);
            
            Station::create([
                "id" => 3270,
                "prefecture_id" => 14,
                "city_id" => 744,
                "street_id" => 42500,
                "name" => "馬堀海岸",
                "hiragana" => "まぼりかいがん",
                "katakana" => "マボリカイガン",
                "katakana_half" => "ﾏﾎﾞﾘｶｲｶﾞﾝ",
                "romaji" => "maborikaigan",
                "memo" => "",
                "latitude" => "35.259493",
                "altitude" => "139.707898",
            ]);
            
            Station::create([
                "id" => 3271,
                "prefecture_id" => 14,
                "city_id" => 744,
                "street_id" => 42416,
                "name" => "浦賀",
                "hiragana" => "うらが",
                "katakana" => "ウラガ",
                "katakana_half" => "ｳﾗｶﾞ",
                "romaji" => "uraga",
                "memo" => "",
                "latitude" => "35.251910",
                "altitude" => "139.715091",
            ]);
            
            Station::create([
                "id" => 3272,
                "prefecture_id" => 14,
                "city_id" => 717,
                "street_id" => 41157,
                "name" => "港町",
                "hiragana" => "みなとちょう",
                "katakana" => "ミナトチョウ",
                "katakana_half" => "ﾐﾅﾄﾁｮｳ",
                "romaji" => "minatochou",
                "memo" => "",
                "latitude" => "35.534964",
                "altitude" => "139.712885",
            ]);
            
            Station::create([
                "id" => 3273,
                "prefecture_id" => 14,
                "city_id" => 734,
                "street_id" => 42057,
                "name" => "鈴木町",
                "hiragana" => "すずきちょう",
                "katakana" => "スズキチョウ",
                "katakana_half" => "ｽｽﾞｷﾁｮｳ",
                "romaji" => "suzukichou",
                "memo" => "",
                "latitude" => "35.535241",
                "altitude" => "139.720717",
            ]);
            
            Station::create([
                "id" => 3274,
                "prefecture_id" => 14,
                "city_id" => 734,
                "street_id" => null,
                "name" => "川崎大師",
                "hiragana" => "かわさきだいし",
                "katakana" => "カワサキダイシ",
                "katakana_half" => "ｶﾜｻｷﾀﾞｲｼ",
                "romaji" => "kawasakidaishi",
                "memo" => "",
                "latitude" => "35.535714",
                "altitude" => "139.725994",
            ]);
            
            Station::create([
                "id" => 3275,
                "prefecture_id" => 14,
                "city_id" => 734,
                "street_id" => 42077,
                "name" => "東門前",
                "hiragana" => "ひがしもんぜん",
                "katakana" => "ヒガシモンゼン",
                "katakana_half" => "ﾋｶﾞｼﾓﾝｾﾞﾝ",
                "romaji" => "higashimonzen",
                "memo" => "",
                "latitude" => "35.536602",
                "altitude" => "139.734327",
            ]);
            
            Station::create([
                "id" => 3276,
                "prefecture_id" => 14,
                "city_id" => 716,
                "street_id" => null,
                "name" => "産業道路",
                "hiragana" => "さんぎょうどうろ",
                "katakana" => "サンギョウドウロ",
                "katakana_half" => "ｻﾝｷﾞｮｳﾄﾞｳﾛ",
                "romaji" => "sangyoudouro",
                "memo" => "",
                "latitude" => "35.536602",
                "altitude" => "139.740410",
            ]);
            
            Station::create([
                "id" => 3277,
                "prefecture_id" => 14,
                "city_id" => 734,
                "street_id" => 42049,
                "name" => "小島新田",
                "hiragana" => "こじましんでん",
                "katakana" => "コジマシンデン",
                "katakana_half" => "ｺｼﾞﾏｼﾝﾃﾞﾝ",
                "romaji" => "kojimashinden",
                "memo" => "",
                "latitude" => "35.534714",
                "altitude" => "139.747688",
            ]);
            
            Station::create([
                "id" => 3278,
                "prefecture_id" => 14,
                "city_id" => 723,
                "street_id" => 41689,
                "name" => "六浦",
                "hiragana" => "むつうら",
                "katakana" => "ムツウラ",
                "katakana_half" => "ﾑﾂｳﾗ",
                "romaji" => "mutsuura",
                "memo" => "",
                "latitude" => "35.322679",
                "altitude" => "139.611514",
            ]);
            
            Station::create([
                "id" => 3279,
                "prefecture_id" => 14,
                "city_id" => 717,
                "street_id" => null,
                "name" => "神武寺",
                "hiragana" => "じんむじ",
                "katakana" => "ジンムジ",
                "katakana_half" => "ｼﾞﾝﾑｼﾞ",
                "romaji" => "jinmuji",
                "memo" => "",
                "latitude" => "35.306263",
                "altitude" => "139.592794",
            ]);
            
            Station::create([
                "id" => 3280,
                "prefecture_id" => 14,
                "city_id" => 750,
                "street_id" => null,
                "name" => "新逗子",
                "hiragana" => "しんずし",
                "katakana" => "シンズシ",
                "katakana_half" => "ｼﾝｽﾞｼ",
                "romaji" => "shinzushi",
                "memo" => "",
                "latitude" => "35.294736",
                "altitude" => "139.580546",
            ]);
            
            Station::create([
                "id" => 3281,
                "prefecture_id" => 14,
                "city_id" => 744,
                "street_id" => 42423,
                "name" => "新大津",
                "hiragana" => "しんおおつ",
                "katakana" => "シンオオツ",
                "katakana_half" => "ｼﾝｵｵﾂ",
                "romaji" => "shinootsu",
                "memo" => "",
                "latitude" => "35.256798",
                "altitude" => "139.690122",
            ]);
            
            Station::create([
                "id" => 3282,
                "prefecture_id" => 14,
                "city_id" => 724,
                "street_id" => null,
                "name" => "北久里浜",
                "hiragana" => "きたくりはま",
                "katakana" => "キタクリハマ",
                "katakana_half" => "ｷﾀｸﾘﾊﾏ",
                "romaji" => "kitakurihama",
                "memo" => "",
                "latitude" => "35.249105",
                "altitude" => "139.686344",
            ]);
            
            Station::create([
                "id" => 3283,
                "prefecture_id" => 14,
                "city_id" => 734,
                "street_id" => 42047,
                "name" => "京急久里浜",
                "hiragana" => "けいきゅうくりはま",
                "katakana" => "ケイキュウクリハマ",
                "katakana_half" => "ｹｲｷｭｳｸﾘﾊﾏ",
                "romaji" => "keikyuukurihama",
                "memo" => "",
                "latitude" => "35.231468",
                "altitude" => "139.702177",
            ]);
            
            Station::create([
                "id" => 3284,
                "prefecture_id" => 14,
                "city_id" => 716,
                "street_id" => null,
                "name" => "ＹＲＰ野比",
                "hiragana" => "わいあーるぴーのび",
                "katakana" => "ワイアールピーノビ",
                "katakana_half" => "ﾜｲｱｰﾙﾋﾟｰﾉﾋﾞ",
                "romaji" => "waiaｰrupiｰnobi",
                "memo" => "",
                "latitude" => "35.212636",
                "altitude" => "139.685318",
            ]);
            
            Station::create([
                "id" => 3285,
                "prefecture_id" => 14,
                "city_id" => 734,
                "street_id" => 42047,
                "name" => "京急長沢",
                "hiragana" => "けいきゅうながさわ",
                "katakana" => "ケイキュウナガサワ",
                "katakana_half" => "ｹｲｷｭｳﾅｶﾞｻﾜ",
                "romaji" => "keikyuunagasawa",
                "memo" => "",
                "latitude" => "35.205303",
                "altitude" => "139.674098",
            ]);
            
            Station::create([
                "id" => 3286,
                "prefecture_id" => 14,
                "city_id" => 744,
                "street_id" => 42467,
                "name" => "津久井浜",
                "hiragana" => "つくいはま",
                "katakana" => "ツクイハマ",
                "katakana_half" => "ﾂｸｲﾊﾏ",
                "romaji" => "tsukuihama",
                "memo" => "",
                "latitude" => "35.198693",
                "altitude" => "139.665849",
            ]);
            
            Station::create([
                "id" => 3287,
                "prefecture_id" => 14,
                "city_id" => 751,
                "street_id" => null,
                "name" => "三浦海岸",
                "hiragana" => "みうらかいがん",
                "katakana" => "ミウラカイガン",
                "katakana_half" => "ﾐｳﾗｶｲｶﾞﾝ",
                "romaji" => "miurakaigan",
                "memo" => "",
                "latitude" => "35.188360",
                "altitude" => "139.653433",
            ]);
            
            Station::create([
                "id" => 3288,
                "prefecture_id" => 14,
                "city_id" => 751,
                "street_id" => 42908,
                "name" => "三崎口",
                "hiragana" => "みさきぐち",
                "katakana" => "ミサキグチ",
                "katakana_half" => "ﾐｻｷｸﾞﾁ",
                "romaji" => "misakiguchi",
                "memo" => "",
                "latitude" => "35.178250",
                "altitude" => "139.633296",
            ]);
            
            Station::create([
                "id" => 3289,
                "prefecture_id" => 14,
                "city_id" => 718,
                "street_id" => 41236,
                "name" => "平沼橋",
                "hiragana" => "ひらぬまばし",
                "katakana" => "ヒラヌマバシ",
                "katakana_half" => "ﾋﾗﾇﾏﾊﾞｼ",
                "romaji" => "hiranumabashi",
                "memo" => "",
                "latitude" => "35.459886",
                "altitude" => "139.616535",
            ]);
            
            Station::create([
                "id" => 3290,
                "prefecture_id" => 14,
                "city_id" => 718,
                "street_id" => null,
                "name" => "西横浜",
                "hiragana" => "にしよこはま",
                "katakana" => "ニシヨコハマ",
                "katakana_half" => "ﾆｼﾖｺﾊﾏ",
                "romaji" => "nishiyokohama",
                "memo" => "",
                "latitude" => "35.453526",
                "altitude" => "139.608591",
            ]);
            
            Station::create([
                "id" => 3291,
                "prefecture_id" => 14,
                "city_id" => 721,
                "street_id" => 41598,
                "name" => "天王町",
                "hiragana" => "てんのうちょう",
                "katakana" => "テンノウチョウ",
                "katakana_half" => "ﾃﾝﾉｳﾁｮｳ",
                "romaji" => "tennouchou",
                "memo" => "",
                "latitude" => "35.453943",
                "altitude" => "139.602620",
            ]);
            
            Station::create([
                "id" => 3292,
                "prefecture_id" => 14,
                "city_id" => 721,
                "street_id" => 41585,
                "name" => "星川",
                "hiragana" => "ほしかわ",
                "katakana" => "ホシカワ",
                "katakana_half" => "ﾎｼｶﾜ",
                "romaji" => "hoshikawa",
                "memo" => "",
                "latitude" => "35.458052",
                "altitude" => "139.595370",
            ]);
            
            Station::create([
                "id" => 3293,
                "prefecture_id" => 14,
                "city_id" => 719,
                "street_id" => 41489,
                "name" => "和田町",
                "hiragana" => "わだまち",
                "katakana" => "ワダマチ",
                "katakana_half" => "ﾜﾀﾞﾏﾁ",
                "romaji" => "wadamachi",
                "memo" => "",
                "latitude" => "35.463803",
                "altitude" => "139.586593",
            ]);
            
            Station::create([
                "id" => 3294,
                "prefecture_id" => 14,
                "city_id" => 721,
                "street_id" => 41585,
                "name" => "上星川",
                "hiragana" => "かみほしかわ",
                "katakana" => "カミホシカワ",
                "katakana_half" => "ｶﾐﾎｼｶﾜ",
                "romaji" => "kamihoshikawa",
                "memo" => "",
                "latitude" => "35.467246",
                "altitude" => "139.580509",
            ]);
            
            Station::create([
                "id" => 3295,
                "prefecture_id" => 14,
                "city_id" => 721,
                "street_id" => 41601,
                "name" => "西谷",
                "hiragana" => "にしや",
                "katakana" => "ニシヤ",
                "katakana_half" => "ﾆｼﾔ",
                "romaji" => "nishiya",
                "memo" => "",
                "latitude" => "35.478023",
                "altitude" => "139.565205",
            ]);
            
            Station::create([
                "id" => 3296,
                "prefecture_id" => 14,
                "city_id" => 727,
                "street_id" => 41808,
                "name" => "鶴ケ峰",
                "hiragana" => "つるがみね",
                "katakana" => "ツルガミネ",
                "katakana_half" => "ﾂﾙｶﾞﾐﾈ",
                "romaji" => "tsurugamine",
                "memo" => "",
                "latitude" => "35.475051",
                "altitude" => "139.550234",
            ]);
            
            Station::create([
                "id" => 3297,
                "prefecture_id" => 14,
                "city_id" => 727,
                "street_id" => 41816,
                "name" => "二俣川",
                "hiragana" => "ふたまたがわ",
                "katakana" => "フタマタガワ",
                "katakana_half" => "ﾌﾀﾏﾀｶﾞﾜ",
                "romaji" => "futamatagawa",
                "memo" => "",
                "latitude" => "35.463301",
                "altitude" => "139.532041",
            ]);
            
            Station::create([
                "id" => 3298,
                "prefecture_id" => 14,
                "city_id" => 727,
                "street_id" => 41811,
                "name" => "希望ケ丘",
                "hiragana" => "きぼうがおか",
                "katakana" => "キボウガオカ",
                "katakana_half" => "ｷﾎﾞｳｶﾞｵｶ",
                "romaji" => "kibougaoka",
                "memo" => "",
                "latitude" => "35.460357",
                "altitude" => "139.513710",
            ]);
            
            Station::create([
                "id" => 3299,
                "prefecture_id" => 14,
                "city_id" => 729,
                "street_id" => 41869,
                "name" => "三ツ境",
                "hiragana" => "みつきょう",
                "katakana" => "ミツキョウ",
                "katakana_half" => "ﾐﾂｷｮｳ",
                "romaji" => "mitsukyou",
                "memo" => "",
                "latitude" => "35.467661",
                "altitude" => "139.502656",
            ]);
            
            Station::create([
                "id" => 3300,
                "prefecture_id" => 14,
                "city_id" => 729,
                "street_id" => null,
                "name" => "瀬谷",
                "hiragana" => "せや",
                "katakana" => "セヤ",
                "katakana_half" => "ｾﾔ",
                "romaji" => "seya",
                "memo" => "",
                "latitude" => "35.470271",
                "altitude" => "139.482518",
            ]);
            
            Station::create([
                "id" => 3301,
                "prefecture_id" => 14,
                "city_id" => 743,
                "street_id" => 42383,
                "name" => "相模大塚",
                "hiragana" => "さがみおおつか",
                "katakana" => "サガミオオツカ",
                "katakana_half" => "ｻｶﾞﾐｵｵﾂｶ",
                "romaji" => "sagamiootsuka",
                "memo" => "",
                "latitude" => "35.470466",
                "altitude" => "139.441354",
            ]);
            
            Station::create([
                "id" => 3302,
                "prefecture_id" => 14,
                "city_id" => 757,
                "street_id" => 43164,
                "name" => "さがみ野",
                "hiragana" => "さがみの",
                "katakana" => "サガミノ",
                "katakana_half" => "ｻｶﾞﾐﾉ",
                "romaji" => "sagamino",
                "memo" => "",
                "latitude" => "35.471520",
                "altitude" => "139.429133",
            ]);
            
            Station::create([
                "id" => 3303,
                "prefecture_id" => 14,
                "city_id" => 719,
                "street_id" => 41428,
                "name" => "かしわ台",
                "hiragana" => "かしわだい",
                "katakana" => "カシワダイ",
                "katakana_half" => "ｶｼﾜﾀﾞｲ",
                "romaji" => "kashiwadai",
                "memo" => "",
                "latitude" => "35.466798",
                "altitude" => "139.416107",
            ]);
            
            Station::create([
                "id" => 3304,
                "prefecture_id" => 14,
                "city_id" => 720,
                "street_id" => null,
                "name" => "南万騎が原",
                "hiragana" => "みなみまきがはら",
                "katakana" => "ミナミマキガハラ",
                "katakana_half" => "ﾐﾅﾐﾏｷｶﾞﾊﾗ",
                "romaji" => "minamimakigahara",
                "memo" => "",
                "latitude" => "35.452469",
                "altitude" => "139.526487",
            ]);
            
            Station::create([
                "id" => 3305,
                "prefecture_id" => 14,
                "city_id" => 731,
                "street_id" => 41928,
                "name" => "緑園都市",
                "hiragana" => "りょくえんとし",
                "katakana" => "リョクエントシ",
                "katakana_half" => "ﾘｮｸｴﾝﾄｼ",
                "romaji" => "ryokuentoshi",
                "memo" => "",
                "latitude" => "35.439137",
                "altitude" => "139.521571",
            ]);
            
            Station::create([
                "id" => 3306,
                "prefecture_id" => 14,
                "city_id" => 731,
                "street_id" => 41926,
                "name" => "弥生台",
                "hiragana" => "やよいだい",
                "katakana" => "ヤヨイダイ",
                "katakana_half" => "ﾔﾖｲﾀﾞｲ",
                "romaji" => "yayoidai",
                "memo" => "",
                "latitude" => "35.429721",
                "altitude" => "139.506712",
            ]);
            
            Station::create([
                "id" => 3307,
                "prefecture_id" => 14,
                "city_id" => 716,
                "street_id" => 41084,
                "name" => "いずみ野",
                "hiragana" => "いずみの",
                "katakana" => "イズミノ",
                "katakana_half" => "ｲｽﾞﾐﾉ",
                "romaji" => "izumino",
                "memo" => "",
                "latitude" => "35.429416",
                "altitude" => "139.495213",
            ]);
            
            Station::create([
                "id" => 3308,
                "prefecture_id" => 14,
                "city_id" => 716,
                "street_id" => 41084,
                "name" => "いずみ中央",
                "hiragana" => "いずみちゅうおう",
                "katakana" => "イズミチュウオウ",
                "katakana_half" => "ｲｽﾞﾐﾁｭｳｵｳ",
                "romaji" => "izumichuuou",
                "memo" => "",
                "latitude" => "35.415500",
                "altitude" => "139.487104",
            ]);
            
            Station::create([
                "id" => 3309,
                "prefecture_id" => 14,
                "city_id" => 733,
                "street_id" => 41976,
                "name" => "ゆめが丘",
                "hiragana" => "ゆめがおか",
                "katakana" => "ユメガオカ",
                "katakana_half" => "ﾕﾒｶﾞｵｶ",
                "romaji" => "yumegaoka",
                "memo" => "",
                "latitude" => "35.405613",
                "altitude" => "139.482382",
            ]);
            
            Station::create([
                "id" => 3310,
                "prefecture_id" => 14,
                "city_id" => 731,
                "street_id" => 41916,
                "name" => "下飯田",
                "hiragana" => "しもいいだ",
                "katakana" => "シモイイダ",
                "katakana_half" => "ｼﾓｲｲﾀﾞ",
                "romaji" => "shimoiida",
                "memo" => "",
                "latitude" => "35.403056",
                "altitude" => "139.482383",
            ]);
            
            Station::create([
                "id" => 3311,
                "prefecture_id" => 14,
                "city_id" => 717,
                "street_id" => 41181,
                "name" => "立場",
                "hiragana" => "たてば",
                "katakana" => "タテバ",
                "katakana_half" => "ﾀﾃﾊﾞ",
                "romaji" => "tateba",
                "memo" => "",
                "latitude" => "35.414501",
                "altitude" => "139.500992",
            ]);
            
            Station::create([
                "id" => 3312,
                "prefecture_id" => 14,
                "city_id" => 731,
                "street_id" => 41920,
                "name" => "中田",
                "hiragana" => "なかだ",
                "katakana" => "ナカダ",
                "katakana_half" => "ﾅｶﾀﾞ",
                "romaji" => "nakada",
                "memo" => "神奈川県",
                "latitude" => "35.411001",
                "altitude" => "139.511657",
            ]);
            
            Station::create([
                "id" => 3313,
                "prefecture_id" => 14,
                "city_id" => 716,
                "street_id" => null,
                "name" => "踊場",
                "hiragana" => "おどりば",
                "katakana" => "オドリバ",
                "katakana_half" => "ｵﾄﾞﾘﾊﾞ",
                "romaji" => "odoriba",
                "memo" => "",
                "latitude" => "35.405891",
                "altitude" => "139.518156",
            ]);
            
            Station::create([
                "id" => 3314,
                "prefecture_id" => 14,
                "city_id" => 725,
                "street_id" => 41752,
                "name" => "舞岡",
                "hiragana" => "まいおか",
                "katakana" => "マイオカ",
                "katakana_half" => "ﾏｲｵｶ",
                "romaji" => "maioka",
                "memo" => "",
                "latitude" => "35.402530",
                "altitude" => "139.551515",
            ]);
            
            Station::create([
                "id" => 3315,
                "prefecture_id" => 14,
                "city_id" => 726,
                "street_id" => 41769,
                "name" => "下永谷",
                "hiragana" => "しもながや",
                "katakana" => "シモナガヤ",
                "katakana_half" => "ｼﾓﾅｶﾞﾔ",
                "romaji" => "shimonagaya",
                "memo" => "",
                "latitude" => "35.402836",
                "altitude" => "139.559292",
            ]);
            
            Station::create([
                "id" => 3316,
                "prefecture_id" => 14,
                "city_id" => 726,
                "street_id" => 41762,
                "name" => "上永谷",
                "hiragana" => "かみながや",
                "katakana" => "カミナガヤ",
                "katakana_half" => "ｶﾐﾅｶﾞﾔ",
                "romaji" => "kaminagaya",
                "memo" => "",
                "latitude" => "35.401448",
                "altitude" => "139.573097",
            ]);
            
            Station::create([
                "id" => 3317,
                "prefecture_id" => 14,
                "city_id" => 726,
                "street_id" => 41766,
                "name" => "港南中央",
                "hiragana" => "こうなんちゅうおう",
                "katakana" => "コウナンチュウオウ",
                "katakana_half" => "ｺｳﾅﾝﾁｭｳｵｳ",
                "romaji" => "kounanchuuou",
                "memo" => "",
                "latitude" => "35.401032",
                "altitude" => "139.590846",
            ]);
            
            Station::create([
                "id" => 3318,
                "prefecture_id" => 14,
                "city_id" => 720,
                "street_id" => 41554,
                "name" => "蒔田",
                "hiragana" => "まいた",
                "katakana" => "マイタ",
                "katakana_half" => "ﾏｲﾀ",
                "romaji" => "maita",
                "memo" => "",
                "latitude" => "35.430195",
                "altitude" => "139.610482",
            ]);
            
            Station::create([
                "id" => 3319,
                "prefecture_id" => 14,
                "city_id" => 720,
                "street_id" => 41571,
                "name" => "吉野町",
                "hiragana" => "よしのちょう",
                "katakana" => "ヨシノチョウ",
                "katakana_half" => "ﾖｼﾉﾁｮｳ",
                "romaji" => "yoshinochou",
                "memo" => "",
                "latitude" => "35.435416",
                "altitude" => "139.618897",
            ]);
            
            Station::create([
                "id" => 3320,
                "prefecture_id" => 14,
                "city_id" => 716,
                "street_id" => null,
                "name" => "阪東橋",
                "hiragana" => "ばんどうばし",
                "katakana" => "バンドウバシ",
                "katakana_half" => "ﾊﾞﾝﾄﾞｳﾊﾞｼ",
                "romaji" => "bandoubashi",
                "memo" => "",
                "latitude" => "35.437638",
                "altitude" => "139.625313",
            ]);
            
            Station::create([
                "id" => 3321,
                "prefecture_id" => 14,
                "city_id" => 719,
                "street_id" => 41416,
                "name" => "伊勢佐木長者町",
                "hiragana" => "いせざきちょうじゃまち",
                "katakana" => "イセザキチョウジャマチ",
                "katakana_half" => "ｲｾｻﾞｷﾁｮｳｼﾞｬﾏﾁ",
                "romaji" => "isezakichoujamachi",
                "memo" => "",
                "latitude" => "35.441000",
                "altitude" => "139.632618",
            ]);
            
            Station::create([
                "id" => 3322,
                "prefecture_id" => 14,
                "city_id" => 717,
                "street_id" => 41179,
                "name" => "高島町",
                "hiragana" => "たかしまちょう",
                "katakana" => "タカシマチョウ",
                "katakana_half" => "ﾀｶｼﾏﾁｮｳ",
                "romaji" => "takashimachou",
                "memo" => "",
                "latitude" => "35.459081",
                "altitude" => "139.623340",
            ]);
            
            Station::create([
                "id" => 3323,
                "prefecture_id" => 14,
                "city_id" => 717,
                "street_id" => 41208,
                "name" => "三ツ沢下町",
                "hiragana" => "みつざわしもちょう",
                "katakana" => "ミツザワシモチョウ",
                "katakana_half" => "ﾐﾂｻﾞﾜｼﾓﾁｮｳ",
                "romaji" => "mitsuzawashimochou",
                "memo" => "",
                "latitude" => "35.476579",
                "altitude" => "139.615424",
            ]);
            
            Station::create([
                "id" => 3324,
                "prefecture_id" => 14,
                "city_id" => 717,
                "street_id" => 41206,
                "name" => "三ツ沢上町",
                "hiragana" => "みつざわかみちょう",
                "katakana" => "ミツザワカミチョウ",
                "katakana_half" => "ﾐﾂｻﾞﾜｶﾐﾁｮｳ",
                "romaji" => "mitsuzawakamichou",
                "memo" => "",
                "latitude" => "35.476579",
                "altitude" => "139.605424",
            ]);
            
            Station::create([
                "id" => 3325,
                "prefecture_id" => 14,
                "city_id" => 717,
                "street_id" => 41148,
                "name" => "片倉町",
                "hiragana" => "かたくらちょう",
                "katakana" => "カタクラチョウ",
                "katakana_half" => "ｶﾀｸﾗﾁｮｳ",
                "romaji" => "katakurachou",
                "memo" => "",
                "latitude" => "35.490189",
                "altitude" => "139.606535",
            ]);
            
            Station::create([
                "id" => 3326,
                "prefecture_id" => 14,
                "city_id" => 724,
                "street_id" => 41700,
                "name" => "岸根公園",
                "hiragana" => "きしねこうえん",
                "katakana" => "キシネコウエン",
                "katakana_half" => "ｷｼﾈｺｳｴﾝ",
                "romaji" => "kishinekouen",
                "memo" => "",
                "latitude" => "35.495744",
                "altitude" => "139.616812",
            ]);
            
            Station::create([
                "id" => 3327,
                "prefecture_id" => 14,
                "city_id" => 724,
                "street_id" => 41701,
                "name" => "北新横浜",
                "hiragana" => "きたしんよこはま",
                "katakana" => "キタシンヨコハマ",
                "katakana_half" => "ｷﾀｼﾝﾖｺﾊﾏ",
                "romaji" => "kitashinyokohama",
                "memo" => "",
                "latitude" => "35.519075",
                "altitude" => "139.612922",
            ]);
            
            Station::create([
                "id" => 3328,
                "prefecture_id" => 14,
                "city_id" => 724,
                "street_id" => 41723,
                "name" => "新羽",
                "hiragana" => "にっぱ",
                "katakana" => "ニッパ",
                "katakana_half" => "ﾆｯﾊﾟ",
                "romaji" => "nippa",
                "memo" => "",
                "latitude" => "35.527407",
                "altitude" => "139.612088",
            ]);
            
            Station::create([
                "id" => 3329,
                "prefecture_id" => 14,
                "city_id" => 733,
                "street_id" => 42010,
                "name" => "仲町台",
                "hiragana" => "なかまちだい",
                "katakana" => "ナカマチダイ",
                "katakana_half" => "ﾅｶﾏﾁﾀﾞｲ",
                "romaji" => "nakamachidai",
                "memo" => "",
                "latitude" => "35.535184",
                "altitude" => "139.589868",
            ]);
            
            Station::create([
                "id" => 3330,
                "prefecture_id" => 14,
                "city_id" => 716,
                "street_id" => null,
                "name" => "センター南",
                "hiragana" => "せんたーみなみ",
                "katakana" => "センターミナミ",
                "katakana_half" => "ｾﾝﾀｰﾐﾅﾐ",
                "romaji" => "sentaｰminami",
                "memo" => "",
                "latitude" => "35.545460",
                "altitude" => "139.574591",
            ]);
            
            Station::create([
                "id" => 3331,
                "prefecture_id" => 14,
                "city_id" => 716,
                "street_id" => null,
                "name" => "センター北",
                "hiragana" => "せんたーきた",
                "katakana" => "センターキタ",
                "katakana_half" => "ｾﾝﾀｰｷﾀ",
                "romaji" => "sentaｰkita",
                "memo" => "",
                "latitude" => "35.553237",
                "altitude" => "139.578479",
            ]);
            
            Station::create([
                "id" => 3332,
                "prefecture_id" => 14,
                "city_id" => 733,
                "street_id" => 42008,
                "name" => "中川",
                "hiragana" => "なかがわ",
                "katakana" => "ナカガワ",
                "katakana_half" => "ﾅｶｶﾞﾜ",
                "romaji" => "nakagawa",
                "memo" => "神奈川県",
                "latitude" => "35.562681",
                "altitude" => "139.570146",
            ]);
            
            Station::create([
                "id" => 3333,
                "prefecture_id" => 14,
                "city_id" => 724,
                "street_id" => 41725,
                "name" => "日吉本町",
                "hiragana" => "ひよしほんちょう",
                "katakana" => "ヒヨシホンチョウ",
                "katakana_half" => "ﾋﾖｼﾎﾝﾁｮｳ",
                "romaji" => "hiyoshihonchou",
                "memo" => "",
                "latitude" => "35.549905",
                "altitude" => "139.633474",
            ]);
            
            Station::create([
                "id" => 3334,
                "prefecture_id" => 14,
                "city_id" => 724,
                "street_id" => 41712,
                "name" => "高田",
                "hiragana" => "たかた",
                "katakana" => "タカタ",
                "katakana_half" => "ﾀｶﾀ",
                "romaji" => "takata",
                "memo" => "神奈川県",
                "latitude" => "35.549627",
                "altitude" => "139.620142",
            ]);
            
            Station::create([
                "id" => 3335,
                "prefecture_id" => 14,
                "city_id" => 733,
                "street_id" => 42015,
                "name" => "東山田",
                "hiragana" => "ひがしやまた",
                "katakana" => "ヒガシヤマタ",
                "katakana_half" => "ﾋｶﾞｼﾔﾏﾀ",
                "romaji" => "higashiyamata",
                "memo" => "",
                "latitude" => "35.554071",
                "altitude" => "139.604865",
            ]);
            
            Station::create([
                "id" => 3336,
                "prefecture_id" => 14,
                "city_id" => 733,
                "street_id" => 41997,
                "name" => "北山田",
                "hiragana" => "きたやまた",
                "katakana" => "キタヤマタ",
                "katakana_half" => "ｷﾀﾔﾏﾀ",
                "romaji" => "kitayamata",
                "memo" => "神奈川県",
                "latitude" => "35.561014",
                "altitude" => "139.592644",
            ]);
            
            Station::create([
                "id" => 3337,
                "prefecture_id" => 14,
                "city_id" => 733,
                "street_id" => null,
                "name" => "都筑ふれあいの丘",
                "hiragana" => "つづきふれあいのおか",
                "katakana" => "ツヅキフレアイノオカ",
                "katakana_half" => "ﾂﾂﾞｷﾌﾚｱｲﾉｵｶ",
                "romaji" => "tsuzukifureainooka",
                "memo" => "",
                "latitude" => "35.536572",
                "altitude" => "139.561259",
            ]);
            
            Station::create([
                "id" => 3338,
                "prefecture_id" => 14,
                "city_id" => 733,
                "street_id" => 41996,
                "name" => "川和町",
                "hiragana" => "かわわちょう",
                "katakana" => "カワワチョウ",
                "katakana_half" => "ｶﾜﾜﾁｮｳ",
                "romaji" => "kawawachou",
                "memo" => "",
                "latitude" => "35.528517",
                "altitude" => "139.549316",
            ]);
            
            Station::create([
                "id" => 3339,
                "prefecture_id" => 14,
                "city_id" => 720,
                "street_id" => null,
                "name" => "南部市場",
                "hiragana" => "なんぶしじょう",
                "katakana" => "ナンブシジョウ",
                "katakana_half" => "ﾅﾝﾌﾞｼｼﾞｮｳ",
                "romaji" => "nanbushijou",
                "memo" => "",
                "latitude" => "35.380145",
                "altitude" => "139.633148",
            ]);
            
            Station::create([
                "id" => 3340,
                "prefecture_id" => 14,
                "city_id" => 723,
                "street_id" => 41673,
                "name" => "鳥浜",
                "hiragana" => "とりはま",
                "katakana" => "トリハマ",
                "katakana_half" => "ﾄﾘﾊﾏ",
                "romaji" => "torihama",
                "memo" => "",
                "latitude" => "35.377173",
                "altitude" => "139.641842",
            ]);
            
            Station::create([
                "id" => 3341,
                "prefecture_id" => 14,
                "city_id" => 723,
                "street_id" => 41675,
                "name" => "並木北",
                "hiragana" => "なみききた",
                "katakana" => "ナミキキタ",
                "katakana_half" => "ﾅﾐｷｷﾀ",
                "romaji" => "namikikita",
                "memo" => "",
                "latitude" => "35.372008",
                "altitude" => "139.642759",
            ]);
            
            Station::create([
                "id" => 3342,
                "prefecture_id" => 14,
                "city_id" => 723,
                "street_id" => 41675,
                "name" => "並木中央",
                "hiragana" => "なみきちゅうおう",
                "katakana" => "ナミキチュウオウ",
                "katakana_half" => "ﾅﾐｷﾁｭｳｵｳ",
                "romaji" => "namikichuuou",
                "memo" => "",
                "latitude" => "35.365452",
                "altitude" => "139.643009",
            ]);
            
            Station::create([
                "id" => 3343,
                "prefecture_id" => 14,
                "city_id" => 723,
                "street_id" => 41661,
                "name" => "幸浦",
                "hiragana" => "さちうら",
                "katakana" => "サチウラ",
                "katakana_half" => "ｻﾁｳﾗ",
                "romaji" => "sachiura",
                "memo" => "",
                "latitude" => "35.358398",
                "altitude" => "139.643621",
            ]);
            
            Station::create([
                "id" => 3344,
                "prefecture_id" => 14,
                "city_id" => 716,
                "street_id" => null,
                "name" => "産業振興センター",
                "hiragana" => "さんぎょうしんこうせんたー",
                "katakana" => "サンギョウシンコウセンター",
                "katakana_half" => "ｻﾝｷﾞｮｳｼﾝｺｳｾﾝﾀｰ",
                "romaji" => "sangyoushinkousentaｰ",
                "memo" => "",
                "latitude" => "35.353426",
                "altitude" => "139.646371",
            ]);
            
            Station::create([
                "id" => 3345,
                "prefecture_id" => 14,
                "city_id" => 723,
                "street_id" => 41685,
                "name" => "福浦",
                "hiragana" => "ふくうら",
                "katakana" => "フクウラ",
                "katakana_half" => "ﾌｸｳﾗ",
                "romaji" => "fukuura",
                "memo" => "",
                "latitude" => "35.349621",
                "altitude" => "139.648538",
            ]);
            
            Station::create([
                "id" => 3346,
                "prefecture_id" => 14,
                "city_id" => 716,
                "street_id" => null,
                "name" => "市大医学部",
                "hiragana" => "しだいいがくぶ",
                "katakana" => "シダイイガクブ",
                "katakana_half" => "ｼﾀﾞｲｲｶﾞｸﾌﾞ",
                "romaji" => "shidaiigakubu",
                "memo" => "",
                "latitude" => "35.343872",
                "altitude" => "139.650121",
            ]);
            
            Station::create([
                "id" => 3347,
                "prefecture_id" => 14,
                "city_id" => 723,
                "street_id" => 41682,
                "name" => "八景島",
                "hiragana" => "はっけいじま",
                "katakana" => "ハッケイジマ",
                "katakana_half" => "ﾊｯｹｲｼﾞﾏ",
                "romaji" => "hakkeijima",
                "memo" => "",
                "latitude" => "35.340900",
                "altitude" => "139.640816",
            ]);
            
            Station::create([
                "id" => 3348,
                "prefecture_id" => 14,
                "city_id" => 723,
                "street_id" => 41652,
                "name" => "海の公園柴口",
                "hiragana" => "うみのこうえんしばぐち",
                "katakana" => "ウミノコウエンシバグチ",
                "katakana_half" => "ｳﾐﾉｺｳｴﾝｼﾊﾞｸﾞﾁ",
                "romaji" => "uminokouenshibaguchi",
                "memo" => "",
                "latitude" => "35.342093",
                "altitude" => "139.635900",
            ]);
            
            Station::create([
                "id" => 3349,
                "prefecture_id" => 14,
                "city_id" => 723,
                "street_id" => 41652,
                "name" => "海の公園南口",
                "hiragana" => "うみのこうえんみなみぐち",
                "katakana" => "ウミノコウエンミナミグチ",
                "katakana_half" => "ｳﾐﾉｺｳｴﾝﾐﾅﾐｸﾞﾁ",
                "romaji" => "uminokouenminamiguchi",
                "memo" => "",
                "latitude" => "35.337206",
                "altitude" => "139.632151",
            ]);
            
            Station::create([
                "id" => 3350,
                "prefecture_id" => 14,
                "city_id" => 723,
                "street_id" => 41681,
                "name" => "野島公園",
                "hiragana" => "のじまこうえん",
                "katakana" => "ノジマコウエン",
                "katakana_half" => "ﾉｼﾞﾏｺｳｴﾝ",
                "romaji" => "nojimakouen",
                "memo" => "",
                "latitude" => "35.330567",
                "altitude" => "139.631567",
            ]);
            
            Station::create([
                "id" => 3351,
                "prefecture_id" => 14,
                "city_id" => 716,
                "street_id" => 41091,
                "name" => "富士見町",
                "hiragana" => "ふじみちょう",
                "katakana" => "フジミチョウ",
                "katakana_half" => "ﾌｼﾞﾐﾁｮｳ",
                "romaji" => "fujimichou",
                "memo" => "神奈川県",
                "latitude" => "35.345258",
                "altitude" => "139.529298",
            ]);
            
            Station::create([
                "id" => 3352,
                "prefecture_id" => 14,
                "city_id" => 744,
                "street_id" => 42455,
                "name" => "湘南町屋",
                "hiragana" => "しょうなんまちや",
                "katakana" => "ショウナンマチヤ",
                "katakana_half" => "ｼｮｳﾅﾝﾏﾁﾔ",
                "romaji" => "shounanmachiya",
                "memo" => "",
                "latitude" => "35.337870",
                "altitude" => "139.522771",
            ]);
            
            Station::create([
                "id" => 3353,
                "prefecture_id" => 14,
                "city_id" => 744,
                "street_id" => 42455,
                "name" => "湘南深沢",
                "hiragana" => "しょうなんふかさわ",
                "katakana" => "ショウナンフカサワ",
                "katakana_half" => "ｼｮｳﾅﾝﾌｶｻﾜ",
                "romaji" => "shounanfukasawa",
                "memo" => "",
                "latitude" => "35.332954",
                "altitude" => "139.518827",
            ]);
            
            Station::create([
                "id" => 3354,
                "prefecture_id" => 14,
                "city_id" => 746,
                "street_id" => 42658,
                "name" => "西鎌倉",
                "hiragana" => "にしかまくら",
                "katakana" => "ニシカマクラ",
                "katakana_half" => "ﾆｼｶﾏｸﾗ",
                "romaji" => "nishikamakura",
                "memo" => "",
                "latitude" => "35.319427",
                "altitude" => "139.504384",
            ]);
            
            Station::create([
                "id" => 3355,
                "prefecture_id" => 14,
                "city_id" => 747,
                "street_id" => 42680,
                "name" => "片瀬山",
                "hiragana" => "かたせやま",
                "katakana" => "カタセヤマ",
                "katakana_half" => "ｶﾀｾﾔﾏ",
                "romaji" => "kataseyama",
                "memo" => "",
                "latitude" => "35.317344",
                "altitude" => "139.496301",
            ]);
            
            Station::create([
                "id" => 3356,
                "prefecture_id" => 14,
                "city_id" => 747,
                "street_id" => 42679,
                "name" => "目白山下",
                "hiragana" => "めじろやました",
                "katakana" => "メジロヤマシタ",
                "katakana_half" => "ﾒｼﾞﾛﾔﾏｼﾀ",
                "romaji" => "mejiroyamashita",
                "memo" => "",
                "latitude" => "35.314122",
                "altitude" => "139.491524",
            ]);
            
            Station::create([
                "id" => 3357,
                "prefecture_id" => 14,
                "city_id" => 744,
                "street_id" => 42455,
                "name" => "湘南江の島",
                "hiragana" => "しょうなんえのしま",
                "katakana" => "ショウナンエノシマ",
                "katakana_half" => "ｼｮｳﾅﾝｴﾉｼﾏ",
                "romaji" => "shounanenoshima",
                "memo" => "",
                "latitude" => "35.311928",
                "altitude" => "139.487830",
            ]);
            
            Station::create([
                "id" => 3358,
                "prefecture_id" => 14,
                "city_id" => 747,
                "street_id" => 42686,
                "name" => "石上",
                "hiragana" => "いしがみ",
                "katakana" => "イシガミ",
                "katakana_half" => "ｲｼｶﾞﾐ",
                "romaji" => "ishigami",
                "memo" => "",
                "latitude" => "35.332481",
                "altitude" => "139.485580",
            ]);
            
            Station::create([
                "id" => 3359,
                "prefecture_id" => 14,
                "city_id" => 723,
                "street_id" => 41694,
                "name" => "柳小路",
                "hiragana" => "やなぎこうじ",
                "katakana" => "ヤナギコウジ",
                "katakana_half" => "ﾔﾅｷﾞｺｳｼﾞ",
                "romaji" => "yanagikouji",
                "memo" => "",
                "latitude" => "35.327343",
                "altitude" => "139.485219",
            ]);
            
            Station::create([
                "id" => 3360,
                "prefecture_id" => 14,
                "city_id" => 747,
                "street_id" => 42685,
                "name" => "鵠沼",
                "hiragana" => "くげぬま",
                "katakana" => "クゲヌマ",
                "katakana_half" => "ｸｹﾞﾇﾏ",
                "romaji" => "kugenuma",
                "memo" => "",
                "latitude" => "35.321482",
                "altitude" => "139.482719",
            ]);
            
            Station::create([
                "id" => 3361,
                "prefecture_id" => 14,
                "city_id" => 744,
                "street_id" => 42455,
                "name" => "湘南海岸公園",
                "hiragana" => "しょうなんかいがんこうえん",
                "katakana" => "ショウナンカイガンコウエン",
                "katakana_half" => "ｼｮｳﾅﾝｶｲｶﾞﾝｺｳｴﾝ",
                "romaji" => "shounankaigankouen",
                "memo" => "",
                "latitude" => "35.315288",
                "altitude" => "139.483359",
            ]);
            
            Station::create([
                "id" => 3362,
                "prefecture_id" => 14,
                "city_id" => 716,
                "street_id" => 41094,
                "name" => "江ノ島",
                "hiragana" => "えのしま",
                "katakana" => "エノシマ",
                "katakana_half" => "ｴﾉｼﾏ",
                "romaji" => "enoshima",
                "memo" => "",
                "latitude" => "35.310983",
                "altitude" => "139.487581",
            ]);
            
            Station::create([
                "id" => 3363,
                "prefecture_id" => 14,
                "city_id" => 746,
                "street_id" => 42636,
                "name" => "腰越",
                "hiragana" => "こしごえ",
                "katakana" => "コシゴエ",
                "katakana_half" => "ｺｼｺﾞｴ",
                "romaji" => "koshigoe",
                "memo" => "",
                "latitude" => "35.308317",
                "altitude" => "139.493414",
            ]);
            
            Station::create([
                "id" => 3364,
                "prefecture_id" => 14,
                "city_id" => 746,
                "street_id" => null,
                "name" => "鎌倉高校前",
                "hiragana" => "かまくらこうこうまえ",
                "katakana" => "カマクラコウコウマエ",
                "katakana_half" => "ｶﾏｸﾗｺｳｺｳﾏｴ",
                "romaji" => "kamakurakoukoumae",
                "memo" => "",
                "latitude" => "35.306735",
                "altitude" => "139.500413",
            ]);
            
            Station::create([
                "id" => 3365,
                "prefecture_id" => 14,
                "city_id" => 730,
                "street_id" => 41901,
                "name" => "七里ケ浜",
                "hiragana" => "しちりがはま",
                "katakana" => "シチリガハマ",
                "katakana_half" => "ｼﾁﾘｶﾞﾊﾏ",
                "romaji" => "shichirigahama",
                "memo" => "",
                "latitude" => "35.306206",
                "altitude" => "139.509912",
            ]);
            
            Station::create([
                "id" => 3366,
                "prefecture_id" => 14,
                "city_id" => 746,
                "street_id" => 42622,
                "name" => "稲村ケ崎",
                "hiragana" => "いなむらがさき",
                "katakana" => "イナムラガサキ",
                "katakana_half" => "ｲﾅﾑﾗｶﾞｻｷ",
                "romaji" => "inamuragasaki",
                "memo" => "",
                "latitude" => "35.304262",
                "altitude" => "139.522245",
            ]);
            
            Station::create([
                "id" => 3367,
                "prefecture_id" => 14,
                "city_id" => 746,
                "street_id" => 42635,
                "name" => "極楽寺",
                "hiragana" => "ごくらくじ",
                "katakana" => "ゴクラクジ",
                "katakana_half" => "ｺﾞｸﾗｸｼﾞ",
                "romaji" => "gokurakuji",
                "memo" => "",
                "latitude" => "35.309068",
                "altitude" => "139.528438",
            ]);
            
            Station::create([
                "id" => 3368,
                "prefecture_id" => 14,
                "city_id" => 746,
                "street_id" => 42660,
                "name" => "長谷",
                "hiragana" => "はせ",
                "katakana" => "ハセ",
                "katakana_half" => "ﾊｾ",
                "romaji" => "hase",
                "memo" => "神奈川県",
                "latitude" => "35.311318",
                "altitude" => "139.536076",
            ]);
            
            Station::create([
                "id" => 3369,
                "prefecture_id" => 14,
                "city_id" => 746,
                "street_id" => 42664,
                "name" => "由比ケ浜",
                "hiragana" => "ゆいがはま",
                "katakana" => "ユイガハマ",
                "katakana_half" => "ﾕｲｶﾞﾊﾏ",
                "romaji" => "yuigahama",
                "memo" => "",
                "latitude" => "35.312817",
                "altitude" => "139.541520",
            ]);
            
            Station::create([
                "id" => 3370,
                "prefecture_id" => 14,
                "city_id" => 719,
                "street_id" => 41489,
                "name" => "和田塚",
                "hiragana" => "わだづか",
                "katakana" => "ワダヅカ",
                "katakana_half" => "ﾜﾀﾞﾂﾞｶ",
                "romaji" => "wadazuka",
                "memo" => "",
                "latitude" => "35.313595",
                "altitude" => "139.545325",
            ]);
            
            Station::create([
                "id" => 3371,
                "prefecture_id" => 14,
                "city_id" => 718,
                "street_id" => 41243,
                "name" => "緑町",
                "hiragana" => "みどりちょう",
                "katakana" => "ミドリチョウ",
                "katakana_half" => "ﾐﾄﾞﾘﾁｮｳ",
                "romaji" => "midorichou",
                "memo" => "",
                "latitude" => "35.259122",
                "altitude" => "139.158638",
            ]);
            
            Station::create([
                "id" => 3372,
                "prefecture_id" => 14,
                "city_id" => 748,
                "street_id" => 42744,
                "name" => "井細田",
                "hiragana" => "いさいだ",
                "katakana" => "イサイダ",
                "katakana_half" => "ｲｻｲﾀﾞ",
                "romaji" => "isaida",
                "memo" => "",
                "latitude" => "35.269149",
                "altitude" => "139.157471",
            ]);
            
            Station::create([
                "id" => 3373,
                "prefecture_id" => 14,
                "city_id" => 729,
                "street_id" => 41859,
                "name" => "五百羅漢",
                "hiragana" => "ごひゃくらかん",
                "katakana" => "ゴヒャクラカン",
                "katakana_half" => "ｺﾞﾋｬｸﾗｶﾝ",
                "romaji" => "gohyakurakan",
                "memo" => "",
                "latitude" => "35.275121",
                "altitude" => "139.155692",
            ]);
            
            Station::create([
                "id" => 3374,
                "prefecture_id" => 14,
                "city_id" => 748,
                "street_id" => 42738,
                "name" => "穴部",
                "hiragana" => "あなべ",
                "katakana" => "アナベ",
                "katakana_half" => "ｱﾅﾍﾞ",
                "romaji" => "anabe",
                "memo" => "",
                "latitude" => "35.279842",
                "altitude" => "139.148887",
            ]);
            
            Station::create([
                "id" => 3375,
                "prefecture_id" => 14,
                "city_id" => 748,
                "street_id" => 42742,
                "name" => "飯田岡",
                "hiragana" => "いいだおか",
                "katakana" => "イイダオカ",
                "katakana_half" => "ｲｲﾀﾞｵｶ",
                "romaji" => "iidaoka",
                "memo" => "",
                "latitude" => "35.287813",
                "altitude" => "139.139333",
            ]);
            
            Station::create([
                "id" => 3376,
                "prefecture_id" => 14,
                "city_id" => 741,
                "street_id" => null,
                "name" => "相模沼田",
                "hiragana" => "さがみぬまた",
                "katakana" => "サガミヌマタ",
                "katakana_half" => "ｻｶﾞﾐﾇﾏﾀ",
                "romaji" => "sagaminumata",
                "memo" => "",
                "latitude" => "35.292257",
                "altitude" => "139.133916",
            ]);
            
            Station::create([
                "id" => 3377,
                "prefecture_id" => 14,
                "city_id" => 758,
                "street_id" => 43181,
                "name" => "岩原",
                "hiragana" => "いわはら",
                "katakana" => "イワハラ",
                "katakana_half" => "ｲﾜﾊﾗ",
                "romaji" => "iwahara",
                "memo" => "",
                "latitude" => "35.298756",
                "altitude" => "139.128888",
            ]);
            
            Station::create([
                "id" => 3378,
                "prefecture_id" => 14,
                "city_id" => 758,
                "street_id" => 43193,
                "name" => "塚原",
                "hiragana" => "つかはら",
                "katakana" => "ツカハラ",
                "katakana_half" => "ﾂｶﾊﾗ",
                "romaji" => "tsukahara",
                "memo" => "",
                "latitude" => "35.301255",
                "altitude" => "139.126861",
            ]);
            
            Station::create([
                "id" => 3379,
                "prefecture_id" => 14,
                "city_id" => 758,
                "street_id" => 43204,
                "name" => "和田河原",
                "hiragana" => "わだがはら",
                "katakana" => "ワダガハラ",
                "katakana_half" => "ﾜﾀﾞｶﾞﾊﾗ",
                "romaji" => "wadagahara",
                "memo" => "",
                "latitude" => "35.316004",
                "altitude" => "139.118111",
            ]);
            
            Station::create([
                "id" => 3380,
                "prefecture_id" => 14,
                "city_id" => 716,
                "street_id" => 41091,
                "name" => "富士フイルム前",
                "hiragana" => "ふじふいるむまえ",
                "katakana" => "フジフイルムマエ",
                "katakana_half" => "ﾌｼﾞﾌｲﾙﾑﾏｴ",
                "romaji" => "fujifuirumumae",
                "memo" => "",
                "latitude" => "35.317809",
                "altitude" => "139.109444",
            ]);
            
            Station::create([
                "id" => 3381,
                "prefecture_id" => 14,
                "city_id" => 758,
                "street_id" => 43191,
                "name" => "大雄山",
                "hiragana" => "だいゆうざん",
                "katakana" => "ダイユウザン",
                "katakana_half" => "ﾀﾞｲﾕｳｻﾞﾝ",
                "romaji" => "daiyuuzan",
                "memo" => "",
                "latitude" => "35.319114",
                "altitude" => "139.103640",
            ]);
            
            Station::create([
                "id" => 3382,
                "prefecture_id" => 14,
                "city_id" => 769,
                "street_id" => null,
                "name" => "箱根板橋",
                "hiragana" => "はこねいたばし",
                "katakana" => "ハコネイタバシ",
                "katakana_half" => "ﾊｺﾈｲﾀﾊﾞｼ",
                "romaji" => "hakoneitabashi",
                "memo" => "",
                "latitude" => "35.245207",
                "altitude" => "139.145223",
            ]);
            
            Station::create([
                "id" => 3383,
                "prefecture_id" => 14,
                "city_id" => 748,
                "street_id" => 42754,
                "name" => "風祭",
                "hiragana" => "かざまつり",
                "katakana" => "カザマツリ",
                "katakana_half" => "ｶｻﾞﾏﾂﾘ",
                "romaji" => "kazamatsuri",
                "memo" => "",
                "latitude" => "35.246206",
                "altitude" => "139.129196",
            ]);
            
            Station::create([
                "id" => 3384,
                "prefecture_id" => 14,
                "city_id" => 748,
                "street_id" => 42747,
                "name" => "入生田",
                "hiragana" => "いりうだ",
                "katakana" => "イリウダ",
                "katakana_half" => "ｲﾘｳﾀﾞ",
                "romaji" => "iriuda",
                "memo" => "",
                "latitude" => "35.240679",
                "altitude" => "139.121031",
            ]);
            
            Station::create([
                "id" => 3385,
                "prefecture_id" => 14,
                "city_id" => 769,
                "street_id" => null,
                "name" => "箱根湯本",
                "hiragana" => "はこねゆもと",
                "katakana" => "ハコネユモト",
                "katakana_half" => "ﾊｺﾈﾕﾓﾄ",
                "romaji" => "hakoneyumoto",
                "memo" => "",
                "latitude" => "35.233485",
                "altitude" => "139.103727",
            ]);
            
            Station::create([
                "id" => 3386,
                "prefecture_id" => 14,
                "city_id" => 769,
                "street_id" => 43344,
                "name" => "塔ノ沢",
                "hiragana" => "とうのさわ",
                "katakana" => "トウノサワ",
                "katakana_half" => "ﾄｳﾉｻﾜ",
                "romaji" => "tounosawa",
                "memo" => "",
                "latitude" => "35.234485",
                "altitude" => "139.093977",
            ]);
            
            Station::create([
                "id" => 3387,
                "prefecture_id" => 14,
                "city_id" => 769,
                "street_id" => 43337,
                "name" => "大平台",
                "hiragana" => "おおひらだい",
                "katakana" => "オオヒラダイ",
                "katakana_half" => "ｵｵﾋﾗﾀﾞｲ",
                "romaji" => "oohiradai",
                "memo" => "",
                "latitude" => "35.238622",
                "altitude" => "139.073952",
            ]);
            
            Station::create([
                "id" => 3388,
                "prefecture_id" => 14,
                "city_id" => 769,
                "street_id" => 43349,
                "name" => "宮ノ下",
                "hiragana" => "みやのした",
                "katakana" => "ミヤノシタ",
                "katakana_half" => "ﾐﾔﾉｼﾀ",
                "romaji" => "miyanoshita",
                "memo" => "",
                "latitude" => "35.242012",
                "altitude" => "139.062952",
            ]);
            
            Station::create([
                "id" => 3389,
                "prefecture_id" => 14,
                "city_id" => 769,
                "street_id" => 43339,
                "name" => "小涌谷",
                "hiragana" => "こわきだに",
                "katakana" => "コワキダニ",
                "katakana_half" => "ｺﾜｷﾀﾞﾆ",
                "romaji" => "kowakidani",
                "memo" => "",
                "latitude" => "35.240288",
                "altitude" => "139.053231",
            ]);
            
            Station::create([
                "id" => 3390,
                "prefecture_id" => 14,
                "city_id" => 716,
                "street_id" => null,
                "name" => "彫刻の森",
                "hiragana" => "ちょうこくのもり",
                "katakana" => "チョウコクノモリ",
                "katakana_half" => "ﾁｮｳｺｸﾉﾓﾘ",
                "romaji" => "choukokunomori",
                "memo" => "",
                "latitude" => "35.246677",
                "altitude" => "139.050759",
            ]);
            
            Station::create([
                "id" => 3391,
                "prefecture_id" => 14,
                "city_id" => 769,
                "street_id" => 43340,
                "name" => "強羅",
                "hiragana" => "ごうら",
                "katakana" => "ゴウラ",
                "katakana_half" => "ｺﾞｳﾗ",
                "romaji" => "goura",
                "memo" => "",
                "latitude" => "35.250899",
                "altitude" => "139.048259",
            ]);
            
            Station::create([
                "id" => 3392,
                "prefecture_id" => 14,
                "city_id" => 716,
                "street_id" => 41132,
                "name" => "公園下",
                "hiragana" => "こうえんしも",
                "katakana" => "コウエンシモ",
                "katakana_half" => "ｺｳｴﾝｼﾓ",
                "romaji" => "kouenshimo",
                "memo" => "",
                "latitude" => "35.249899",
                "altitude" => "139.045647",
            ]);
            
            Station::create([
                "id" => 3393,
                "prefecture_id" => 14,
                "city_id" => 716,
                "street_id" => 41132,
                "name" => "公園上",
                "hiragana" => "こうえんかみ",
                "katakana" => "コウエンカミ",
                "katakana_half" => "ｺｳｴﾝｶﾐ",
                "romaji" => "kouenkami",
                "memo" => "",
                "latitude" => "35.249037",
                "altitude" => "139.043148",
            ]);
            
            Station::create([
                "id" => 3394,
                "prefecture_id" => 14,
                "city_id" => 719,
                "street_id" => null,
                "name" => "中強羅",
                "hiragana" => "なかごうら",
                "katakana" => "ナカゴウラ",
                "katakana_half" => "ﾅｶｺﾞｳﾗ",
                "romaji" => "nakagoura",
                "memo" => "",
                "latitude" => "35.248122",
                "altitude" => "139.040593",
            ]);
            
            Station::create([
                "id" => 3395,
                "prefecture_id" => 14,
                "city_id" => 764,
                "street_id" => null,
                "name" => "上強羅",
                "hiragana" => "かみごうら",
                "katakana" => "カミゴウラ",
                "katakana_half" => "ｶﾐｺﾞｳﾗ",
                "romaji" => "kamigoura",
                "memo" => "",
                "latitude" => "35.247260",
                "altitude" => "139.038093",
            ]);
            
            Station::create([
                "id" => 3396,
                "prefecture_id" => 14,
                "city_id" => 733,
                "street_id" => 42013,
                "name" => "早雲山",
                "hiragana" => "そううんざん",
                "katakana" => "ソウウンザン",
                "katakana_half" => "ｿｳｳﾝｻﾞﾝ",
                "romaji" => "souunzan",
                "memo" => "",
                "latitude" => "35.246399",
                "altitude" => "139.035593",
            ]);
            
            Station::create([
                "id" => 3397,
                "prefecture_id" => 14,
                "city_id" => 717,
                "street_id" => 41179,
                "name" => "新高島",
                "hiragana" => "しんたかしま",
                "katakana" => "シンタカシマ",
                "katakana_half" => "ｼﾝﾀｶｼﾏ",
                "romaji" => "shintakashima",
                "memo" => "",
                "latitude" => "35.461859",
                "altitude" => "139.626535",
            ]);
            
            Station::create([
                "id" => 3398,
                "prefecture_id" => 14,
                "city_id" => 718,
                "street_id" => 41244,
                "name" => "みなとみらい",
                "hiragana" => "みなとみらい",
                "katakana" => "ミナトミライ",
                "katakana_half" => "ﾐﾅﾄﾐﾗｲ",
                "romaji" => "minatomirai",
                "memo" => "",
                "latitude" => "35.457971",
                "altitude" => "139.632368",
            ]);
            
            Station::create([
                "id" => 3399,
                "prefecture_id" => 14,
                "city_id" => 716,
                "street_id" => 41123,
                "name" => "馬車道",
                "hiragana" => "ばしゃみち",
                "katakana" => "バシャミチ",
                "katakana_half" => "ﾊﾞｼｬﾐﾁ",
                "romaji" => "bashamichi",
                "memo" => "",
                "latitude" => "35.450249",
                "altitude" => "139.635979",
            ]);
            
            Station::create([
                "id" => 3400,
                "prefecture_id" => 14,
                "city_id" => 719,
                "street_id" => 41457,
                "name" => "日本大通り",
                "hiragana" => "にほんおおどおり",
                "katakana" => "ニホンオオドオリ",
                "katakana_half" => "ﾆﾎﾝｵｵﾄﾞｵﾘ",
                "romaji" => "nihonoodoori",
                "memo" => "",
                "latitude" => "35.446861",
                "altitude" => "139.642367",
            ]);
            
            Station::create([
                "id" => 3401,
                "prefecture_id" => 14,
                "city_id" => 719,
                "street_id" => 41488,
                "name" => "元町・中華街",
                "hiragana" => "もとまちちゅうかがい",
                "katakana" => "モトマチチュウカガイ",
                "katakana_half" => "ﾓﾄﾏﾁﾁｭｳｶｶﾞｲ",
                "romaji" => "motomachichuukagai",
                "memo" => "",
                "latitude" => "35.442417",
                "altitude" => "139.650422",
            ]);
            
            Station::create([
                "id" => 3402,
                "prefecture_id" => 14,
                "city_id" => 754,
                "street_id" => null,
                "name" => "大涌谷",
                "hiragana" => "おおわくだに",
                "katakana" => "オオワクダニ",
                "katakana_half" => "ｵｵﾜｸﾀﾞﾆ",
                "romaji" => "oowakudani",
                "memo" => "",
                "latitude" => "35.244315",
                "altitude" => "139.019984",
            ]);
            
            Station::create([
                "id" => 3403,
                "prefecture_id" => 14,
                "city_id" => 716,
                "street_id" => null,
                "name" => "姥子",
                "hiragana" => "うばこ",
                "katakana" => "ウバコ",
                "katakana_half" => "ｳﾊﾞｺ",
                "romaji" => "ubako",
                "memo" => "",
                "latitude" => "35.244537",
                "altitude" => "139.005984",
            ]);
            
            Station::create([
                "id" => 3404,
                "prefecture_id" => 14,
                "city_id" => 745,
                "street_id" => 42612,
                "name" => "桃源台",
                "hiragana" => "とうげんだい",
                "katakana" => "トウゲンダイ",
                "katakana_half" => "ﾄｳｹﾞﾝﾀﾞｲ",
                "romaji" => "tougendai",
                "memo" => "",
                "latitude" => "35.237844",
                "altitude" => "138.994596",
            ]);
            
    }
}
