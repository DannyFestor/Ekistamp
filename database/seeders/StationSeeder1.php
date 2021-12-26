<?php
namespace Database\Seeders;

use App\Models\Station;
use Illuminate\Database\Seeder;

class StationSeeder1 extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        
            Station::create([
                "id" => 1,
                "prefecture_id" => 1,
                "city_id" => 11,
                "street_id" => null,
                "name" => "函館",
                "hiragana" => "はこだて",
                "katakana" => "ハコダテ",
                "katakana_half" => "ﾊｺﾀﾞﾃ",
                "romaji" => "hakodate",
                "memo" => "",
                "latitude" => "41.773758",
                "altitude" => "140.726374",
            ]);
            
            Station::create([
                "id" => 2,
                "prefecture_id" => 1,
                "city_id" => 11,
                "street_id" => 883,
                "name" => "五稜郭",
                "hiragana" => "ごりょうかく",
                "katakana" => "ゴリョウカク",
                "katakana_half" => "ｺﾞﾘｮｳｶｸ",
                "romaji" => "goryoukaku",
                "memo" => "",
                "latitude" => "41.803449",
                "altitude" => "140.733872",
            ]);
            
            Station::create([
                "id" => 3,
                "prefecture_id" => 1,
                "city_id" => 11,
                "street_id" => 875,
                "name" => "桔梗",
                "hiragana" => "ききょう",
                "katakana" => "キキョウ",
                "katakana_half" => "ｷｷｮｳ",
                "romaji" => "kikyou",
                "memo" => "",
                "latitude" => "41.846751",
                "altitude" => "140.723037",
            ]);
            
            Station::create([
                "id" => 4,
                "prefecture_id" => 1,
                "city_id" => 51,
                "street_id" => 3944,
                "name" => "大中山",
                "hiragana" => "おおなかやま",
                "katakana" => "オオナカヤマ",
                "katakana_half" => "ｵｵﾅｶﾔﾏ",
                "romaji" => "oonakayama",
                "memo" => "",
                "latitude" => "41.864804",
                "altitude" => "140.713399",
            ]);
            
            Station::create([
                "id" => 5,
                "prefecture_id" => 1,
                "city_id" => 51,
                "street_id" => null,
                "name" => "七飯",
                "hiragana" => "ななえ",
                "katakana" => "ナナエ",
                "katakana_half" => "ﾅﾅｴ",
                "romaji" => "nanae",
                "memo" => "",
                "latitude" => "41.887718",
                "altitude" => "140.688177",
            ]);
            
            Station::create([
                "id" => 6,
                "prefecture_id" => 1,
                "city_id" => 11,
                "street_id" => null,
                "name" => "新函館北斗",
                "hiragana" => "しんはこだてほくと",
                "katakana" => "シンハコダテホクト",
                "katakana_half" => "ｼﾝﾊｺﾀﾞﾃﾎｸﾄ",
                "romaji" => "shinhakodatehokuto",
                "memo" => "",
                "latitude" => "41.904742",
                "altitude" => "140.648236",
            ]);
            
            Station::create([
                "id" => 7,
                "prefecture_id" => 1,
                "city_id" => 51,
                "street_id" => 3957,
                "name" => "仁山",
                "hiragana" => "にやま",
                "katakana" => "ニヤマ",
                "katakana_half" => "ﾆﾔﾏ",
                "romaji" => "niyama",
                "memo" => "",
                "latitude" => "41.930074",
                "altitude" => "140.635152",
            ]);
            
            Station::create([
                "id" => 8,
                "prefecture_id" => 1,
                "city_id" => 38,
                "street_id" => 3325,
                "name" => "大沼",
                "hiragana" => "おおぬま",
                "katakana" => "オオヌマ",
                "katakana_half" => "ｵｵﾇﾏ",
                "romaji" => "oonuma",
                "memo" => "北海道",
                "latitude" => "41.972097",
                "altitude" => "140.669398",
            ]);
            
            Station::create([
                "id" => 9,
                "prefecture_id" => 1,
                "city_id" => 38,
                "street_id" => 3325,
                "name" => "大沼公園",
                "hiragana" => "おおぬまこうえん",
                "katakana" => "オオヌマコウエン",
                "katakana_half" => "ｵｵﾇﾏｺｳｴﾝ",
                "romaji" => "oonumakouen",
                "memo" => "",
                "latitude" => "41.981068",
                "altitude" => "140.669731",
            ]);
            
            Station::create([
                "id" => 10,
                "prefecture_id" => 1,
                "city_id" => 81,
                "street_id" => null,
                "name" => "赤井川",
                "hiragana" => "あかいがわ",
                "katakana" => "アカイガワ",
                "katakana_half" => "ｱｶｲｶﾞﾜ",
                "romaji" => "akaigawa",
                "memo" => "",
                "latitude" => "42.003316",
                "altitude" => "140.642759",
            ]);
            
            Station::create([
                "id" => 11,
                "prefecture_id" => 1,
                "city_id" => 53,
                "street_id" => 3977,
                "name" => "駒ケ岳",
                "hiragana" => "こまがたけ",
                "katakana" => "コマガタケ",
                "katakana_half" => "ｺﾏｶﾞﾀｹ",
                "romaji" => "komagatake",
                "memo" => "",
                "latitude" => "42.038755",
                "altitude" => "140.610621",
            ]);
            
            Station::create([
                "id" => 12,
                "prefecture_id" => 1,
                "city_id" => 53,
                "street_id" => null,
                "name" => "森",
                "hiragana" => "もり",
                "katakana" => "モリ",
                "katakana_half" => "ﾓﾘ",
                "romaji" => "mori",
                "memo" => "北海道",
                "latitude" => "42.108886",
                "altitude" => "140.573871",
            ]);
            
            Station::create([
                "id" => 13,
                "prefecture_id" => 1,
                "city_id" => 4,
                "street_id" => null,
                "name" => "石谷",
                "hiragana" => "いしや",
                "katakana" => "イシヤ",
                "katakana_half" => "ｲｼﾔ",
                "romaji" => "ishiya",
                "memo" => "",
                "latitude" => "42.135605",
                "altitude" => "140.506432",
            ]);
            
            Station::create([
                "id" => 14,
                "prefecture_id" => 1,
                "city_id" => 174,
                "street_id" => null,
                "name" => "本石倉",
                "hiragana" => "ほんいしくら",
                "katakana" => "ホンイシクラ",
                "katakana_half" => "ﾎﾝｲｼｸﾗ",
                "romaji" => "honishikura",
                "memo" => "",
                "latitude" => "42.159712",
                "altitude" => "140.471989",
            ]);
            
            Station::create([
                "id" => 15,
                "prefecture_id" => 1,
                "city_id" => 11,
                "street_id" => 834,
                "name" => "石倉",
                "hiragana" => "いしくら",
                "katakana" => "イシクラ",
                "katakana_half" => "ｲｼｸﾗ",
                "romaji" => "ishikura",
                "memo" => "",
                "latitude" => "42.172850",
                "altitude" => "140.458518",
            ]);
            
            Station::create([
                "id" => 16,
                "prefecture_id" => 1,
                "city_id" => 54,
                "street_id" => 4005,
                "name" => "落部",
                "hiragana" => "おとしべ",
                "katakana" => "オトシベ",
                "katakana_half" => "ｵﾄｼﾍﾞ",
                "romaji" => "otoshibe",
                "memo" => "",
                "latitude" => "42.187737",
                "altitude" => "140.420659",
            ]);
            
            Station::create([
                "id" => 17,
                "prefecture_id" => 1,
                "city_id" => 54,
                "street_id" => 4036,
                "name" => "野田生",
                "hiragana" => "のだおい",
                "katakana" => "ノダオイ",
                "katakana_half" => "ﾉﾀﾞｵｲ",
                "romaji" => "nodaoi",
                "memo" => "",
                "latitude" => "42.217094",
                "altitude" => "140.375855",
            ]);
            
            Station::create([
                "id" => 18,
                "prefecture_id" => 1,
                "city_id" => 55,
                "street_id" => null,
                "name" => "山越",
                "hiragana" => "やまこし",
                "katakana" => "ヤマコシ",
                "katakana_half" => "ﾔﾏｺｼ",
                "romaji" => "yamakoshi",
                "memo" => "",
                "latitude" => "42.231008",
                "altitude" => "140.326637",
            ]);
            
            Station::create([
                "id" => 19,
                "prefecture_id" => 1,
                "city_id" => 54,
                "street_id" => null,
                "name" => "八雲",
                "hiragana" => "やくも",
                "katakana" => "ヤクモ",
                "katakana_half" => "ﾔｸﾓ",
                "romaji" => "yakumo",
                "memo" => "",
                "latitude" => "42.253810",
                "altitude" => "140.272945",
            ]);
            
            Station::create([
                "id" => 20,
                "prefecture_id" => 1,
                "city_id" => 54,
                "street_id" => 4048,
                "name" => "山崎",
                "hiragana" => "やまさき",
                "katakana" => "ヤマサキ",
                "katakana_half" => "ﾔﾏｻｷ",
                "romaji" => "yamasaki",
                "memo" => "北海道",
                "latitude" => "42.314637",
                "altitude" => "140.274664",
            ]);
            
            Station::create([
                "id" => 21,
                "prefecture_id" => 1,
                "city_id" => 54,
                "street_id" => 4014,
                "name" => "黒岩",
                "hiragana" => "くろいわ",
                "katakana" => "クロイワ",
                "katakana_half" => "ｸﾛｲﾜ",
                "romaji" => "kuroiwa",
                "memo" => "",
                "latitude" => "42.368436",
                "altitude" => "140.288188",
            ]);
            
            Station::create([
                "id" => 22,
                "prefecture_id" => 1,
                "city_id" => 55,
                "street_id" => 4060,
                "name" => "国縫",
                "hiragana" => "くんぬい",
                "katakana" => "クンヌイ",
                "katakana_half" => "ｸﾝﾇｲ",
                "romaji" => "kunnui",
                "memo" => "",
                "latitude" => "42.439319",
                "altitude" => "140.320766",
            ]);
            
            Station::create([
                "id" => 23,
                "prefecture_id" => 1,
                "city_id" => 6,
                "street_id" => 533,
                "name" => "中ノ沢",
                "hiragana" => "なかのさわ",
                "katakana" => "ナカノサワ",
                "katakana_half" => "ﾅｶﾉｻﾜ",
                "romaji" => "nakanosawa",
                "memo" => "",
                "latitude" => "42.478009",
                "altitude" => "140.345985",
            ]);
            
            Station::create([
                "id" => 24,
                "prefecture_id" => 1,
                "city_id" => 55,
                "street_id" => null,
                "name" => "長万部",
                "hiragana" => "おしゃまんべ",
                "katakana" => "オシャマンベ",
                "katakana_half" => "ｵｼｬﾏﾝﾍﾞ",
                "romaji" => "oshamanbe",
                "memo" => "",
                "latitude" => "42.512256",
                "altitude" => "140.374786",
            ]);
            
            Station::create([
                "id" => 25,
                "prefecture_id" => 1,
                "city_id" => 172,
                "street_id" => null,
                "name" => "池田園",
                "hiragana" => "いけだえん",
                "katakana" => "イケダエン",
                "katakana_half" => "ｲｹﾀﾞｴﾝ",
                "romaji" => "ikedaen",
                "memo" => "",
                "latitude" => "41.990735",
                "altitude" => "140.700394",
            ]);
            
            Station::create([
                "id" => 26,
                "prefecture_id" => 1,
                "city_id" => 153,
                "street_id" => null,
                "name" => "流山温泉",
                "hiragana" => "ながれやまおんせん",
                "katakana" => "ナガレヤマオンセン",
                "katakana_half" => "ﾅｶﾞﾚﾔﾏｵﾝｾﾝ",
                "romaji" => "nagareyamaonsen",
                "memo" => "",
                "latitude" => "42.003678",
                "altitude" => "140.716698",
            ]);
            
            Station::create([
                "id" => 27,
                "prefecture_id" => 1,
                "city_id" => 11,
                "street_id" => 916,
                "name" => "銚子口",
                "hiragana" => "ちょうしぐち",
                "katakana" => "チョウシグチ",
                "katakana_half" => "ﾁｮｳｼｸﾞﾁ",
                "romaji" => "choushiguchi",
                "memo" => "",
                "latitude" => "42.015622",
                "altitude" => "140.720781",
            ]);
            
            Station::create([
                "id" => 28,
                "prefecture_id" => 1,
                "city_id" => 52,
                "street_id" => null,
                "name" => "鹿部",
                "hiragana" => "しかべ",
                "katakana" => "シカベ",
                "katakana_half" => "ｼｶﾍﾞ",
                "romaji" => "shikabe",
                "memo" => "",
                "latitude" => "42.064589",
                "altitude" => "140.771440",
            ]);
            
            Station::create([
                "id" => 29,
                "prefecture_id" => 1,
                "city_id" => 64,
                "street_id" => 4317,
                "name" => "渡島沼尻",
                "hiragana" => "おしまぬまじり",
                "katakana" => "オシマヌマジリ",
                "katakana_half" => "ｵｼﾏﾇﾏｼﾞﾘ",
                "romaji" => "oshimanumajiri",
                "memo" => "",
                "latitude" => "42.107028",
                "altitude" => "140.747551",
            ]);
            
            Station::create([
                "id" => 30,
                "prefecture_id" => 1,
                "city_id" => 64,
                "street_id" => 4317,
                "name" => "渡島砂原",
                "hiragana" => "おしまさわら",
                "katakana" => "オシマサワラ",
                "katakana_half" => "ｵｼﾏｻﾜﾗ",
                "romaji" => "oshimasawara",
                "memo" => "",
                "latitude" => "42.121748",
                "altitude" => "140.689528",
            ]);
            
            Station::create([
                "id" => 31,
                "prefecture_id" => 1,
                "city_id" => 1,
                "street_id" => null,
                "name" => "掛澗",
                "hiragana" => "かかりま",
                "katakana" => "カカリマ",
                "katakana_half" => "ｶｶﾘﾏ",
                "romaji" => "kakarima",
                "memo" => "",
                "latitude" => "42.119247",
                "altitude" => "140.646115",
            ]);
            
            Station::create([
                "id" => 32,
                "prefecture_id" => 1,
                "city_id" => 53,
                "street_id" => 3973,
                "name" => "尾白内",
                "hiragana" => "おしろない",
                "katakana" => "オシロナイ",
                "katakana_half" => "ｵｼﾛﾅｲ",
                "romaji" => "oshironai",
                "memo" => "",
                "latitude" => "42.111247",
                "altitude" => "140.613590",
            ]);
            
            Station::create([
                "id" => 33,
                "prefecture_id" => 1,
                "city_id" => 53,
                "street_id" => 3988,
                "name" => "東森",
                "hiragana" => "ひがしもり",
                "katakana" => "ヒガシモリ",
                "katakana_half" => "ﾋｶﾞｼﾓﾘ",
                "romaji" => "higashimori",
                "memo" => "",
                "latitude" => "42.106803",
                "altitude" => "140.593481",
            ]);
            
            Station::create([
                "id" => 34,
                "prefecture_id" => 1,
                "city_id" => 103,
                "street_id" => 5233,
                "name" => "二股",
                "hiragana" => "ふたまた",
                "katakana" => "フタマタ",
                "katakana_half" => "ﾌﾀﾏﾀ",
                "romaji" => "futamata",
                "memo" => "",
                "latitude" => "42.575943",
                "altitude" => "140.320733",
            ]);
            
            Station::create([
                "id" => 35,
                "prefecture_id" => 1,
                "city_id" => 65,
                "street_id" => null,
                "name" => "黒松内",
                "hiragana" => "くろまつない",
                "katakana" => "クロマツナイ",
                "katakana_half" => "ｸﾛﾏﾂﾅｲ",
                "romaji" => "kuromatsunai",
                "memo" => "",
                "latitude" => "42.669655",
                "altitude" => "140.305646",
            ]);
            
            Station::create([
                "id" => 36,
                "prefecture_id" => 1,
                "city_id" => 65,
                "street_id" => 4343,
                "name" => "熱郛",
                "hiragana" => "ねっぷ",
                "katakana" => "ネップ",
                "katakana_half" => "ﾈｯﾌﾟ",
                "romaji" => "neppu",
                "memo" => "",
                "latitude" => "42.675711",
                "altitude" => "140.375168",
            ]);
            
            Station::create([
                "id" => 37,
                "prefecture_id" => 1,
                "city_id" => 65,
                "street_id" => 4349,
                "name" => "目名",
                "hiragana" => "めな",
                "katakana" => "メナ",
                "katakana_half" => "ﾒﾅ",
                "romaji" => "mena",
                "memo" => "",
                "latitude" => "42.761426",
                "altitude" => "140.465712",
            ]);
            
            Station::create([
                "id" => 38,
                "prefecture_id" => 1,
                "city_id" => 66,
                "street_id" => null,
                "name" => "蘭越",
                "hiragana" => "らんこし",
                "katakana" => "ランコシ",
                "katakana_half" => "ﾗﾝｺｼ",
                "romaji" => "rankoshi",
                "memo" => "",
                "latitude" => "42.804562",
                "altitude" => "140.528899",
            ]);
            
            Station::create([
                "id" => 39,
                "prefecture_id" => 1,
                "city_id" => 32,
                "street_id" => 3021,
                "name" => "昆布",
                "hiragana" => "こんぶ",
                "katakana" => "コンブ",
                "katakana_half" => "ｺﾝﾌﾞ",
                "romaji" => "konbu",
                "memo" => "",
                "latitude" => "42.797924",
                "altitude" => "140.596199",
            ]);
            
            Station::create([
                "id" => 40,
                "prefecture_id" => 1,
                "city_id" => 67,
                "street_id" => null,
                "name" => "ニセコ",
                "hiragana" => "にせこ",
                "katakana" => "ニセコ",
                "katakana_half" => "ﾆｾｺ",
                "romaji" => "niseko",
                "memo" => "",
                "latitude" => "42.808702",
                "altitude" => "140.684497",
            ]);
            
            Station::create([
                "id" => 41,
                "prefecture_id" => 1,
                "city_id" => 72,
                "street_id" => 4499,
                "name" => "比羅夫",
                "hiragana" => "ひらふ",
                "katakana" => "ヒラフ",
                "katakana_half" => "ﾋﾗﾌ",
                "romaji" => "hirafu",
                "memo" => "",
                "latitude" => "42.848643",
                "altitude" => "140.722631",
            ]);
            
            Station::create([
                "id" => 42,
                "prefecture_id" => 1,
                "city_id" => 72,
                "street_id" => null,
                "name" => "倶知安",
                "hiragana" => "くっちゃん",
                "katakana" => "クッチャン",
                "katakana_half" => "ｸｯﾁｬﾝ",
                "romaji" => "kucchan",
                "memo" => "",
                "latitude" => "42.901749",
                "altitude" => "140.745487",
            ]);
            
            Station::create([
                "id" => 43,
                "prefecture_id" => 1,
                "city_id" => 73,
                "street_id" => 4532,
                "name" => "小沢",
                "hiragana" => "こざわ",
                "katakana" => "コザワ",
                "katakana_half" => "ｺｻﾞﾜ",
                "romaji" => "kozawa",
                "memo" => "北海道",
                "latitude" => "42.971907",
                "altitude" => "140.677629",
            ]);
            
            Station::create([
                "id" => 44,
                "prefecture_id" => 1,
                "city_id" => 79,
                "street_id" => 4594,
                "name" => "銀山",
                "hiragana" => "ぎんざん",
                "katakana" => "ギンザン",
                "katakana_half" => "ｷﾞﾝｻﾞﾝ",
                "romaji" => "ginzan",
                "memo" => "",
                "latitude" => "43.041039",
                "altitude" => "140.715289",
            ]);
            
            Station::create([
                "id" => 45,
                "prefecture_id" => 1,
                "city_id" => 79,
                "street_id" => 4595,
                "name" => "然別",
                "hiragana" => "しかりべつ",
                "katakana" => "シカリベツ",
                "katakana_half" => "ｼｶﾘﾍﾞﾂ",
                "romaji" => "shikaribetsu",
                "memo" => "",
                "latitude" => "43.125614",
                "altitude" => "140.737200",
            ]);
            
            Station::create([
                "id" => 46,
                "prefecture_id" => 1,
                "city_id" => 79,
                "street_id" => null,
                "name" => "仁木",
                "hiragana" => "にき",
                "katakana" => "ニキ",
                "katakana_half" => "ﾆｷ",
                "romaji" => "niki",
                "memo" => "",
                "latitude" => "43.154167",
                "altitude" => "140.770918",
            ]);
            
            Station::create([
                "id" => 47,
                "prefecture_id" => 1,
                "city_id" => 79,
                "street_id" => null,
                "name" => "余市",
                "hiragana" => "よいち",
                "katakana" => "ヨイチ",
                "katakana_half" => "ﾖｲﾁ",
                "romaji" => "yoichi",
                "memo" => "",
                "latitude" => "43.186552",
                "altitude" => "140.794554",
            ]);
            
            Station::create([
                "id" => 48,
                "prefecture_id" => 1,
                "city_id" => 12,
                "street_id" => 1049,
                "name" => "蘭島",
                "hiragana" => "らんしま",
                "katakana" => "ランシマ",
                "katakana_half" => "ﾗﾝｼﾏ",
                "romaji" => "ranshima",
                "memo" => "",
                "latitude" => "43.196525",
                "altitude" => "140.854798",
            ]);
            
            Station::create([
                "id" => 49,
                "prefecture_id" => 1,
                "city_id" => 12,
                "street_id" => 1013,
                "name" => "塩谷",
                "hiragana" => "しおや",
                "katakana" => "シオヤ",
                "katakana_half" => "ｼｵﾔ",
                "romaji" => "shioya",
                "memo" => "",
                "latitude" => "43.202359",
                "altitude" => "140.924459",
            ]);
            
            Station::create([
                "id" => 50,
                "prefecture_id" => 1,
                "city_id" => 12,
                "street_id" => null,
                "name" => "小樽",
                "hiragana" => "おたる",
                "katakana" => "オタル",
                "katakana_half" => "ｵﾀﾙ",
                "romaji" => "otaru",
                "memo" => "",
                "latitude" => "43.197167",
                "altitude" => "140.993565",
            ]);
            
            Station::create([
                "id" => 51,
                "prefecture_id" => 1,
                "city_id" => 6,
                "street_id" => null,
                "name" => "南小樽",
                "hiragana" => "みなみおたる",
                "katakana" => "ミナミオタル",
                "katakana_half" => "ﾐﾅﾐｵﾀﾙ",
                "romaji" => "minamiotaru",
                "memo" => "",
                "latitude" => "43.186584",
                "altitude" => "141.007925",
            ]);
            
            Station::create([
                "id" => 52,
                "prefecture_id" => 1,
                "city_id" => 12,
                "street_id" => null,
                "name" => "小樽築港",
                "hiragana" => "おたるちっこう",
                "katakana" => "オタルチッコウ",
                "katakana_half" => "ｵﾀﾙﾁｯｺｳ",
                "romaji" => "otaruchikkou",
                "memo" => "",
                "latitude" => "43.180780",
                "altitude" => "141.028590",
            ]);
            
            Station::create([
                "id" => 53,
                "prefecture_id" => 1,
                "city_id" => 12,
                "street_id" => 996,
                "name" => "朝里",
                "hiragana" => "あさり",
                "katakana" => "アサリ",
                "katakana_half" => "ｱｻﾘ",
                "romaji" => "asari",
                "memo" => "",
                "latitude" => "43.176864",
                "altitude" => "141.063977",
            ]);
            
            Station::create([
                "id" => 54,
                "prefecture_id" => 1,
                "city_id" => 12,
                "street_id" => 1023,
                "name" => "銭函",
                "hiragana" => "ぜにばこ",
                "katakana" => "ゼニバコ",
                "katakana_half" => "ｾﾞﾆﾊﾞｺ",
                "romaji" => "zenibako",
                "memo" => "",
                "latitude" => "43.143369",
                "altitude" => "141.159775",
            ]);
            
            Station::create([
                "id" => 55,
                "prefecture_id" => 1,
                "city_id" => 46,
                "street_id" => 3817,
                "name" => "ほしみ",
                "hiragana" => "ほしみ",
                "katakana" => "ホシミ",
                "katakana_half" => "ﾎｼﾐ",
                "romaji" => "hoshimi",
                "memo" => "",
                "latitude" => "43.133760",
                "altitude" => "141.191412",
            ]);
            
            Station::create([
                "id" => 56,
                "prefecture_id" => 1,
                "city_id" => 9,
                "street_id" => 733,
                "name" => "星置",
                "hiragana" => "ほしおき",
                "katakana" => "ホシオキ",
                "katakana_half" => "ﾎｼｵｷ",
                "romaji" => "hoshioki",
                "memo" => "",
                "latitude" => "43.132149",
                "altitude" => "141.210438",
            ]);
            
            Station::create([
                "id" => 57,
                "prefecture_id" => 1,
                "city_id" => 9,
                "street_id" => 715,
                "name" => "稲穂",
                "hiragana" => "いなほ",
                "katakana" => "イナホ",
                "katakana_half" => "ｲﾅﾎ",
                "romaji" => "inaho",
                "memo" => "",
                "latitude" => "43.128261",
                "altitude" => "141.222687",
            ]);
            
            Station::create([
                "id" => 58,
                "prefecture_id" => 1,
                "city_id" => 9,
                "street_id" => null,
                "name" => "手稲",
                "hiragana" => "ていね",
                "katakana" => "テイネ",
                "katakana_half" => "ﾃｲﾈ",
                "romaji" => "teine",
                "memo" => "",
                "latitude" => "43.120151",
                "altitude" => "141.243908",
            ]);
            
            Station::create([
                "id" => 59,
                "prefecture_id" => 1,
                "city_id" => 9,
                "street_id" => null,
                "name" => "稲積公園",
                "hiragana" => "いなづみこうえん",
                "katakana" => "イナヅミコウエン",
                "katakana_half" => "ｲﾅﾂﾞﾐｺｳｴﾝ",
                "romaji" => "inazumikouen",
                "memo" => "",
                "latitude" => "43.112458",
                "altitude" => "141.256630",
            ]);
            
            Station::create([
                "id" => 60,
                "prefecture_id" => 1,
                "city_id" => 7,
                "street_id" => 627,
                "name" => "発寒",
                "hiragana" => "はっさむ",
                "katakana" => "ハッサム",
                "katakana_half" => "ﾊｯｻﾑ",
                "romaji" => "hassamu",
                "memo" => "",
                "latitude" => "43.100237",
                "altitude" => "141.276601",
            ]);
            
            Station::create([
                "id" => 61,
                "prefecture_id" => 1,
                "city_id" => 7,
                "street_id" => 627,
                "name" => "発寒中央",
                "hiragana" => "はっさむちゅうおう",
                "katakana" => "ハッサムチュウオウ",
                "katakana_half" => "ﾊｯｻﾑﾁｭｳｵｳ",
                "romaji" => "hassamuchuuou",
                "memo" => "",
                "latitude" => "43.089406",
                "altitude" => "141.294378",
            ]);
            
            Station::create([
                "id" => 62,
                "prefecture_id" => 1,
                "city_id" => 2,
                "street_id" => 172,
                "name" => "琴似",
                "hiragana" => "ことに",
                "katakana" => "コトニ",
                "katakana_half" => "ｺﾄﾆ",
                "romaji" => "kotoni",
                "memo" => "函館本線",
                "latitude" => "43.081351",
                "altitude" => "141.307460",
            ]);
            
            Station::create([
                "id" => 63,
                "prefecture_id" => 1,
                "city_id" => 116,
                "street_id" => 5558,
                "name" => "桑園",
                "hiragana" => "そうえん",
                "katakana" => "ソウエン",
                "katakana_half" => "ｿｳｴﾝ",
                "romaji" => "souen",
                "memo" => "",
                "latitude" => "43.070769",
                "altitude" => "141.331931",
            ]);
            
            Station::create([
                "id" => 64,
                "prefecture_id" => 1,
                "city_id" => 1,
                "street_id" => null,
                "name" => "札幌",
                "hiragana" => "さっぽろ",
                "katakana" => "サッポロ",
                "katakana_half" => "ｻｯﾎﾟﾛ",
                "romaji" => "sapporo",
                "memo" => "",
                "latitude" => "43.068686",
                "altitude" => "141.350790",
            ]);
            
            Station::create([
                "id" => 65,
                "prefecture_id" => 1,
                "city_id" => 3,
                "street_id" => 294,
                "name" => "苗穂",
                "hiragana" => "なえぼ",
                "katakana" => "ナエボ",
                "katakana_half" => "ﾅｴﾎﾞ",
                "romaji" => "naebo",
                "memo" => "",
                "latitude" => "43.068936",
                "altitude" => "141.376344",
            ]);
            
            Station::create([
                "id" => 66,
                "prefecture_id" => 1,
                "city_id" => 4,
                "street_id" => null,
                "name" => "白石",
                "hiragana" => "しろいし",
                "katakana" => "シロイシ",
                "katakana_half" => "ｼﾛｲｼ",
                "romaji" => "shiroishi",
                "memo" => "函館本線",
                "latitude" => "43.054800",
                "altitude" => "141.414064",
            ]);
            
            Station::create([
                "id" => 67,
                "prefecture_id" => 1,
                "city_id" => 8,
                "street_id" => null,
                "name" => "厚別",
                "hiragana" => "あつべつ",
                "katakana" => "アツベツ",
                "katakana_half" => "ｱﾂﾍﾞﾂ",
                "romaji" => "atsubetsu",
                "memo" => "",
                "latitude" => "43.045080",
                "altitude" => "141.463282",
            ]);
            
            Station::create([
                "id" => 68,
                "prefecture_id" => 1,
                "city_id" => 53,
                "street_id" => null,
                "name" => "森林公園",
                "hiragana" => "しんりんこうえん",
                "katakana" => "シンリンコウエン",
                "katakana_half" => "ｼﾝﾘﾝｺｳｴﾝ",
                "romaji" => "shinrinkouen",
                "memo" => "北海道",
                "latitude" => "43.056578",
                "altitude" => "141.481447",
            ]);
            
            Station::create([
                "id" => 69,
                "prefecture_id" => 1,
                "city_id" => 26,
                "street_id" => 2638,
                "name" => "大麻",
                "hiragana" => "おおあさ",
                "katakana" => "オオアサ",
                "katakana_half" => "ｵｵｱｻ",
                "romaji" => "ooasa",
                "memo" => "",
                "latitude" => "43.072216",
                "altitude" => "141.496862",
            ]);
            
            Station::create([
                "id" => 70,
                "prefecture_id" => 1,
                "city_id" => 8,
                "street_id" => 675,
                "name" => "野幌",
                "hiragana" => "のっぽろ",
                "katakana" => "ノッポロ",
                "katakana_half" => "ﾉｯﾎﾟﾛ",
                "romaji" => "nopporo",
                "memo" => "",
                "latitude" => "43.092631",
                "altitude" => "141.529886",
            ]);
            
            Station::create([
                "id" => 71,
                "prefecture_id" => 1,
                "city_id" => 13,
                "street_id" => 1183,
                "name" => "高砂",
                "hiragana" => "たかさご",
                "katakana" => "タカサゴ",
                "katakana_half" => "ﾀｶｻｺﾞ",
                "romaji" => "takasago",
                "memo" => "北海道",
                "latitude" => "43.100242",
                "altitude" => "141.540746",
            ]);
            
            Station::create([
                "id" => 72,
                "prefecture_id" => 1,
                "city_id" => 26,
                "street_id" => null,
                "name" => "江別",
                "hiragana" => "えべつ",
                "katakana" => "エベツ",
                "katakana_half" => "ｴﾍﾞﾂ",
                "romaji" => "ebetsu",
                "memo" => "",
                "latitude" => "43.110241",
                "altitude" => "141.556578",
            ]);
            
            Station::create([
                "id" => 73,
                "prefecture_id" => 1,
                "city_id" => 26,
                "street_id" => 2669,
                "name" => "豊幌",
                "hiragana" => "とよほろ",
                "katakana" => "トヨホロ",
                "katakana_half" => "ﾄﾖﾎﾛ",
                "romaji" => "toyohoro",
                "memo" => "",
                "latitude" => "43.136461",
                "altitude" => "141.624876",
            ]);
            
            Station::create([
                "id" => 74,
                "prefecture_id" => 1,
                "city_id" => 19,
                "street_id" => 2002,
                "name" => "幌向",
                "hiragana" => "ほろむい",
                "katakana" => "ホロムイ",
                "katakana_half" => "ﾎﾛﾑｲ",
                "romaji" => "horomui",
                "memo" => "",
                "latitude" => "43.151683",
                "altitude" => "141.655539",
            ]);
            
            Station::create([
                "id" => 75,
                "prefecture_id" => 1,
                "city_id" => 19,
                "street_id" => 2002,
                "name" => "上幌向",
                "hiragana" => "かみほろむい",
                "katakana" => "カミホロムイ",
                "katakana_half" => "ｶﾐﾎﾛﾑｲ",
                "romaji" => "kamihoromui",
                "memo" => "",
                "latitude" => "43.181791",
                "altitude" => "141.715311",
            ]);
            
            Station::create([
                "id" => 76,
                "prefecture_id" => 1,
                "city_id" => 19,
                "street_id" => null,
                "name" => "岩見沢",
                "hiragana" => "いわみざわ",
                "katakana" => "イワミザワ",
                "katakana_half" => "ｲﾜﾐｻﾞﾜ",
                "romaji" => "iwamizawa",
                "memo" => "",
                "latitude" => "43.204067",
                "altitude" => "141.759139",
            ]);
            
            Station::create([
                "id" => 77,
                "prefecture_id" => 1,
                "city_id" => 19,
                "street_id" => 2134,
                "name" => "峰延",
                "hiragana" => "みねのぶ",
                "katakana" => "ミネノブ",
                "katakana_half" => "ﾐﾈﾉﾌﾞ",
                "romaji" => "minenobu",
                "memo" => "",
                "latitude" => "43.264674",
                "altitude" => "141.814605",
            ]);
            
            Station::create([
                "id" => 78,
                "prefecture_id" => 1,
                "city_id" => 24,
                "street_id" => 2498,
                "name" => "光珠内",
                "hiragana" => "こうしゅない",
                "katakana" => "コウシュナイ",
                "katakana_half" => "ｺｳｼｭﾅｲ",
                "romaji" => "koushunai",
                "memo" => "",
                "latitude" => "43.292670",
                "altitude" => "141.844601",
            ]);
            
            Station::create([
                "id" => 79,
                "prefecture_id" => 1,
                "city_id" => 24,
                "street_id" => null,
                "name" => "美唄",
                "hiragana" => "びばい",
                "katakana" => "ビバイ",
                "katakana_half" => "ﾋﾞﾊﾞｲ",
                "romaji" => "bibai",
                "memo" => "",
                "latitude" => "43.330501",
                "altitude" => "141.862098",
            ]);
            
            Station::create([
                "id" => 80,
                "prefecture_id" => 1,
                "city_id" => 24,
                "street_id" => 2509,
                "name" => "茶志内",
                "hiragana" => "ちゃしない",
                "katakana" => "チャシナイ",
                "katakana_half" => "ﾁｬｼﾅｲ",
                "romaji" => "chashinai",
                "memo" => "",
                "latitude" => "43.369830",
                "altitude" => "141.873427",
            ]);
            
            Station::create([
                "id" => 81,
                "prefecture_id" => 1,
                "city_id" => 83,
                "street_id" => null,
                "name" => "奈井江",
                "hiragana" => "ないえ",
                "katakana" => "ナイエ",
                "katakana_half" => "ﾅｲｴ",
                "romaji" => "naie",
                "memo" => "",
                "latitude" => "43.423964",
                "altitude" => "141.889285",
            ]);
            
            Station::create([
                "id" => 82,
                "prefecture_id" => 1,
                "city_id" => 35,
                "street_id" => 3211,
                "name" => "豊沼",
                "hiragana" => "とよぬま",
                "katakana" => "トヨヌマ",
                "katakana_half" => "ﾄﾖﾇﾏ",
                "romaji" => "toyonuma",
                "memo" => "",
                "latitude" => "43.464209",
                "altitude" => "141.901032",
            ]);
            
            Station::create([
                "id" => 83,
                "prefecture_id" => 1,
                "city_id" => 35,
                "street_id" => null,
                "name" => "砂川",
                "hiragana" => "すながわ",
                "katakana" => "スナガワ",
                "katakana_half" => "ｽﾅｶﾞﾜ",
                "romaji" => "sunagawa",
                "memo" => "",
                "latitude" => "43.493540",
                "altitude" => "141.909586",
            ]);
            
            Station::create([
                "id" => 84,
                "prefecture_id" => 1,
                "city_id" => 34,
                "street_id" => null,
                "name" => "滝川",
                "hiragana" => "たきかわ",
                "katakana" => "タキカワ",
                "katakana_half" => "ﾀｷｶﾜ",
                "romaji" => "takikawa",
                "memo" => "",
                "latitude" => "43.555143",
                "altitude" => "141.900751",
            ]);
            
            Station::create([
                "id" => 85,
                "prefecture_id" => 1,
                "city_id" => 34,
                "street_id" => 3162,
                "name" => "江部乙",
                "hiragana" => "えべおつ",
                "katakana" => "エベオツ",
                "katakana_half" => "ｴﾍﾞｵﾂ",
                "romaji" => "ebeotsu",
                "memo" => "",
                "latitude" => "43.627720",
                "altitude" => "141.935967",
            ]);
            
            Station::create([
                "id" => 86,
                "prefecture_id" => 1,
                "city_id" => 91,
                "street_id" => null,
                "name" => "妹背牛",
                "hiragana" => "もせうし",
                "katakana" => "モセウシ",
                "katakana_half" => "ﾓｾｳｼ",
                "romaji" => "moseushi",
                "memo" => "",
                "latitude" => "43.690881",
                "altitude" => "141.966711",
            ]);
            
            Station::create([
                "id" => 87,
                "prefecture_id" => 1,
                "city_id" => 37,
                "street_id" => null,
                "name" => "深川",
                "hiragana" => "ふかがわ",
                "katakana" => "フカガワ",
                "katakana_half" => "ﾌｶｶﾞﾜ",
                "romaji" => "fukagawa",
                "memo" => "",
                "latitude" => "43.721212",
                "altitude" => "142.041203",
            ]);
            
            Station::create([
                "id" => 88,
                "prefecture_id" => 1,
                "city_id" => 37,
                "street_id" => 3282,
                "name" => "納内",
                "hiragana" => "おさむない",
                "katakana" => "オサムナイ",
                "katakana_half" => "ｵｻﾑﾅｲ",
                "romaji" => "osamunai",
                "memo" => "",
                "latitude" => "43.732407",
                "altitude" => "142.130195",
            ]);
            
            Station::create([
                "id" => 89,
                "prefecture_id" => 1,
                "city_id" => 41,
                "street_id" => null,
                "name" => "伊納",
                "hiragana" => "いのう",
                "katakana" => "イノウ",
                "katakana_half" => "ｲﾉｳ",
                "romaji" => "inou",
                "memo" => "",
                "latitude" => "43.763240",
                "altitude" => "142.271709",
            ]);
            
            Station::create([
                "id" => 90,
                "prefecture_id" => 1,
                "city_id" => 13,
                "street_id" => 1184,
                "name" => "近文",
                "hiragana" => "ちかぶみ",
                "katakana" => "チカブミ",
                "katakana_half" => "ﾁｶﾌﾞﾐ",
                "romaji" => "chikabumi",
                "memo" => "",
                "latitude" => "43.789459",
                "altitude" => "142.325398",
            ]);
            
            Station::create([
                "id" => 91,
                "prefecture_id" => 1,
                "city_id" => 13,
                "street_id" => null,
                "name" => "旭川",
                "hiragana" => "あさひかわ",
                "katakana" => "アサヒカワ",
                "katakana_half" => "ｱｻﾋｶﾜ",
                "romaji" => "asahikawa",
                "memo" => "",
                "latitude" => "43.762963",
                "altitude" => "142.358148",
            ]);
            
            Station::create([
                "id" => 92,
                "prefecture_id" => 1,
                "city_id" => 7,
                "street_id" => 607,
                "name" => "八軒",
                "hiragana" => "はちけん",
                "katakana" => "ハチケン",
                "katakana_half" => "ﾊﾁｹﾝ",
                "romaji" => "hachiken",
                "memo" => "",
                "latitude" => "43.086351",
                "altitude" => "141.319098",
            ]);
            
            Station::create([
                "id" => 93,
                "prefecture_id" => 1,
                "city_id" => 2,
                "street_id" => 158,
                "name" => "新川",
                "hiragana" => "しんかわ",
                "katakana" => "シンカワ",
                "katakana_half" => "ｼﾝｶﾜ",
                "romaji" => "shinkawa",
                "memo" => "北海道",
                "latitude" => "43.098572",
                "altitude" => "141.323820",
            ]);
            
            Station::create([
                "id" => 94,
                "prefecture_id" => 1,
                "city_id" => 2,
                "street_id" => 172,
                "name" => "新琴似",
                "hiragana" => "しんことに",
                "katakana" => "シンコトニ",
                "katakana_half" => "ｼﾝｺﾄﾆ",
                "romaji" => "shinkotoni",
                "memo" => "",
                "latitude" => "43.113154",
                "altitude" => "141.335207",
            ]);
            
            Station::create([
                "id" => 95,
                "prefecture_id" => 1,
                "city_id" => 2,
                "street_id" => 155,
                "name" => "太平",
                "hiragana" => "たいへい",
                "katakana" => "タイヘイ",
                "katakana_half" => "ﾀｲﾍｲ",
                "romaji" => "taihei",
                "memo" => "",
                "latitude" => "43.123903",
                "altitude" => "141.348899",
            ]);
            
            Station::create([
                "id" => 96,
                "prefecture_id" => 1,
                "city_id" => 2,
                "street_id" => 231,
                "name" => "百合が原",
                "hiragana" => "ゆりがはら",
                "katakana" => "ユリガハラ",
                "katakana_half" => "ﾕﾘｶﾞﾊﾗ",
                "romaji" => "yurigahara",
                "memo" => "",
                "latitude" => "43.131347",
                "altitude" => "141.360760",
            ]);
            
            Station::create([
                "id" => 97,
                "prefecture_id" => 1,
                "city_id" => 2,
                "street_id" => 143,
                "name" => "篠路",
                "hiragana" => "しのろ",
                "katakana" => "シノロ",
                "katakana_half" => "ｼﾉﾛ",
                "romaji" => "shinoro",
                "memo" => "",
                "latitude" => "43.145234",
                "altitude" => "141.364231",
            ]);
            
            Station::create([
                "id" => 98,
                "prefecture_id" => 1,
                "city_id" => 2,
                "street_id" => 156,
                "name" => "拓北",
                "hiragana" => "たくほく",
                "katakana" => "タクホク",
                "katakana_half" => "ﾀｸﾎｸ",
                "romaji" => "takuhoku",
                "memo" => "",
                "latitude" => "43.155511",
                "altitude" => "141.381173",
            ]);
            
            Station::create([
                "id" => 99,
                "prefecture_id" => 1,
                "city_id" => 2,
                "street_id" => 91,
                "name" => "あいの里教育大",
                "hiragana" => "あいのさときょういくだい",
                "katakana" => "アイノサトキョウイクダイ",
                "katakana_half" => "ｱｲﾉｻﾄｷｮｳｲｸﾀﾞｲ",
                "romaji" => "ainosatokyouikudai",
                "memo" => "",
                "latitude" => "43.155234",
                "altitude" => "141.398533",
            ]);
            
            Station::create([
                "id" => 100,
                "prefecture_id" => 1,
                "city_id" => 2,
                "street_id" => 91,
                "name" => "あいの里公園",
                "hiragana" => "あいのさとこうえん",
                "katakana" => "アイノサトコウエン",
                "katakana_half" => "ｱｲﾉｻﾄｺｳｴﾝ",
                "romaji" => "ainosatokouen",
                "memo" => "",
                "latitude" => "43.160816",
                "altitude" => "141.412976",
            ]);
            
            Station::create([
                "id" => 101,
                "prefecture_id" => 1,
                "city_id" => 43,
                "street_id" => null,
                "name" => "石狩太美",
                "hiragana" => "いしかりふとみ",
                "katakana" => "イシカリフトミ",
                "katakana_half" => "ｲｼｶﾘﾌﾄﾐ",
                "romaji" => "ishikarifutomi",
                "memo" => "",
                "latitude" => "43.189675",
                "altitude" => "141.448805",
            ]);
            
            Station::create([
                "id" => 102,
                "prefecture_id" => 1,
                "city_id" => 43,
                "street_id" => null,
                "name" => "石狩当別",
                "hiragana" => "いしかりとうべつ",
                "katakana" => "イシカリトウベツ",
                "katakana_half" => "ｲｼｶﾘﾄｳﾍﾞﾂ",
                "romaji" => "ishikaritoubetsu",
                "memo" => "",
                "latitude" => "43.222173",
                "altitude" => "141.513798",
            ]);
            
            Station::create([
                "id" => 103,
                "prefecture_id" => 1,
                "city_id" => 2,
                "street_id" => null,
                "name" => "北海道医療大学",
                "hiragana" => "ほっかいどういりょうだいがく",
                "katakana" => "ホッカイドウイリョウダイガク",
                "katakana_half" => "ﾎｯｶｲﾄﾞｳｲﾘｮｳﾀﾞｲｶﾞｸ",
                "romaji" => "hokkaidouiryoudaigaku",
                "memo" => "",
                "latitude" => "43.231339",
                "altitude" => "141.550378",
            ]);
            
            Station::create([
                "id" => 104,
                "prefecture_id" => 1,
                "city_id" => 43,
                "street_id" => null,
                "name" => "石狩金沢",
                "hiragana" => "いしかりかなざわ",
                "katakana" => "イシカリカナザワ",
                "katakana_half" => "ｲｼｶﾘｶﾅｻﾞﾜ",
                "romaji" => "ishikarikanazawa",
                "memo" => "",
                "latitude" => "43.245505",
                "altitude" => "141.569348",
            ]);
            
            Station::create([
                "id" => 105,
                "prefecture_id" => 1,
                "city_id" => 174,
                "street_id" => null,
                "name" => "本中小屋",
                "hiragana" => "もとなかごや",
                "katakana" => "モトナカゴヤ",
                "katakana_half" => "ﾓﾄﾅｶｺﾞﾔ",
                "romaji" => "motonakagoya",
                "memo" => "",
                "latitude" => "43.280167",
                "altitude" => "141.591733",
            ]);
            
            Station::create([
                "id" => 106,
                "prefecture_id" => 1,
                "city_id" => 19,
                "street_id" => 2021,
                "name" => "中小屋",
                "hiragana" => "なかごや",
                "katakana" => "ナカゴヤ",
                "katakana_half" => "ﾅｶｺﾞﾔ",
                "romaji" => "nakagoya",
                "memo" => "",
                "latitude" => "43.306721",
                "altitude" => "141.602259",
            ]);
            
            Station::create([
                "id" => 107,
                "prefecture_id" => 1,
                "city_id" => 88,
                "street_id" => 4854,
                "name" => "月ケ岡",
                "hiragana" => "つきがおか",
                "katakana" => "ツキガオカ",
                "katakana_half" => "ﾂｷｶﾞｵｶ",
                "romaji" => "tsukigaoka",
                "memo" => "",
                "latitude" => "43.324969",
                "altitude" => "141.618007",
            ]);
            
            Station::create([
                "id" => 108,
                "prefecture_id" => 1,
                "city_id" => 88,
                "street_id" => 4853,
                "name" => "知来乙",
                "hiragana" => "ちらいおつ",
                "katakana" => "チライオツ",
                "katakana_half" => "ﾁﾗｲｵﾂ",
                "romaji" => "chiraiotsu",
                "memo" => "",
                "latitude" => "43.331496",
                "altitude" => "141.649199",
            ]);
            
            Station::create([
                "id" => 109,
                "prefecture_id" => 1,
                "city_id" => 43,
                "street_id" => null,
                "name" => "石狩月形",
                "hiragana" => "いしかりつきがた",
                "katakana" => "イシカリツキガタ",
                "katakana_half" => "ｲｼｶﾘﾂｷｶﾞﾀ",
                "romaji" => "ishikaritsukigata",
                "memo" => "",
                "latitude" => "43.340774",
                "altitude" => "141.670169",
            ]);
            
            Station::create([
                "id" => 110,
                "prefecture_id" => 1,
                "city_id" => 46,
                "street_id" => 3834,
                "name" => "豊ケ岡",
                "hiragana" => "とよがおか",
                "katakana" => "トヨガオカ",
                "katakana_half" => "ﾄﾖｶﾞｵｶ",
                "romaji" => "toyogaoka",
                "memo" => "",
                "latitude" => "43.366661",
                "altitude" => "141.714053",
            ]);
            
            Station::create([
                "id" => 111,
                "prefecture_id" => 1,
                "city_id" => 88,
                "street_id" => 4844,
                "name" => "札比内",
                "hiragana" => "さっぴない",
                "katakana" => "サッピナイ",
                "katakana_half" => "ｻｯﾋﾟﾅｲ",
                "romaji" => "sappinai",
                "memo" => "",
                "latitude" => "43.370883",
                "altitude" => "141.742717",
            ]);
            
            Station::create([
                "id" => 112,
                "prefecture_id" => 1,
                "city_id" => 89,
                "street_id" => 4871,
                "name" => "晩生内",
                "hiragana" => "おそきない",
                "katakana" => "オソキナイ",
                "katakana_half" => "ｵｿｷﾅｲ",
                "romaji" => "osokinai",
                "memo" => "",
                "latitude" => "43.399964",
                "altitude" => "141.779073",
            ]);
            
            Station::create([
                "id" => 113,
                "prefecture_id" => 1,
                "city_id" => 1,
                "street_id" => null,
                "name" => "札的",
                "hiragana" => "さってき",
                "katakana" => "サッテキ",
                "katakana_half" => "ｻｯﾃｷ",
                "romaji" => "satteki",
                "memo" => "",
                "latitude" => "43.419018",
                "altitude" => "141.803459",
            ]);
            
            Station::create([
                "id" => 114,
                "prefecture_id" => 1,
                "city_id" => 89,
                "street_id" => null,
                "name" => "浦臼",
                "hiragana" => "うらうす",
                "katakana" => "ウラウス",
                "katakana_half" => "ｳﾗｳｽ",
                "romaji" => "urausu",
                "memo" => "",
                "latitude" => "43.431045",
                "altitude" => "141.817374",
            ]);
            
            Station::create([
                "id" => 115,
                "prefecture_id" => 1,
                "city_id" => 89,
                "street_id" => 4874,
                "name" => "鶴沼",
                "hiragana" => "つるぬま",
                "katakana" => "ツルヌマ",
                "katakana_half" => "ﾂﾙﾇﾏ",
                "romaji" => "tsurunuma",
                "memo" => "",
                "latitude" => "43.457681",
                "altitude" => "141.840705",
            ]);
            
            Station::create([
                "id" => 116,
                "prefecture_id" => 1,
                "city_id" => 1,
                "street_id" => null,
                "name" => "於札内",
                "hiragana" => "おさつない",
                "katakana" => "オサツナイ",
                "katakana_half" => "ｵｻﾂﾅｲ",
                "romaji" => "osatsunai",
                "memo" => "",
                "latitude" => "43.473484",
                "altitude" => "141.840010",
            ]);
            
            Station::create([
                "id" => 117,
                "prefecture_id" => 1,
                "city_id" => 6,
                "street_id" => null,
                "name" => "南下徳富",
                "hiragana" => "みなみしもとっぷ",
                "katakana" => "ミナミシモトップ",
                "katakana_half" => "ﾐﾅﾐｼﾓﾄｯﾌﾟ",
                "romaji" => "minamishimotoppu",
                "memo" => "",
                "latitude" => "43.485678",
                "altitude" => "141.844592",
            ]);
            
            Station::create([
                "id" => 118,
                "prefecture_id" => 1,
                "city_id" => 110,
                "street_id" => null,
                "name" => "下徳富",
                "hiragana" => "しもとっぷ",
                "katakana" => "シモトップ",
                "katakana_half" => "ｼﾓﾄｯﾌﾟ",
                "romaji" => "shimotoppu",
                "memo" => "",
                "latitude" => "43.502454",
                "altitude" => "141.855424",
            ]);
            
            Station::create([
                "id" => 119,
                "prefecture_id" => 1,
                "city_id" => 90,
                "street_id" => null,
                "name" => "新十津川",
                "hiragana" => "しんとつかわ",
                "katakana" => "シントツカワ",
                "katakana_half" => "ｼﾝﾄﾂｶﾜ",
                "romaji" => "shintotsukawa",
                "memo" => "",
                "latitude" => "43.545838",
                "altitude" => "141.874225",
            ]);
            
            Station::create([
                "id" => 120,
                "prefecture_id" => 1,
                "city_id" => 22,
                "street_id" => null,
                "name" => "苫小牧",
                "hiragana" => "とまこまい",
                "katakana" => "トマコマイ",
                "katakana_half" => "ﾄﾏｺﾏｲ",
                "romaji" => "tomakomai",
                "memo" => "",
                "latitude" => "42.639237",
                "altitude" => "141.595845",
            ]);
            
            Station::create([
                "id" => 121,
                "prefecture_id" => 1,
                "city_id" => 22,
                "street_id" => 2376,
                "name" => "沼ノ端",
                "hiragana" => "ぬまのはた",
                "katakana" => "ヌマノハタ",
                "katakana_half" => "ﾇﾏﾉﾊﾀ",
                "romaji" => "numanohata",
                "memo" => "",
                "latitude" => "42.671957",
                "altitude" => "141.692975",
            ]);
            
            Station::create([
                "id" => 122,
                "prefecture_id" => 1,
                "city_id" => 22,
                "street_id" => 2327,
                "name" => "植苗",
                "hiragana" => "うえなえ",
                "katakana" => "ウエナエ",
                "katakana_half" => "ｳｴﾅｴ",
                "romaji" => "uenae",
                "memo" => "",
                "latitude" => "42.713620",
                "altitude" => "141.735219",
            ]);
            
            Station::create([
                "id" => 123,
                "prefecture_id" => 1,
                "city_id" => 6,
                "street_id" => null,
                "name" => "南千歳",
                "hiragana" => "みなみちとせ",
                "katakana" => "ミナミチトセ",
                "katakana_half" => "ﾐﾅﾐﾁﾄｾ",
                "romaji" => "minamichitose",
                "memo" => "",
                "latitude" => "42.808053",
                "altitude" => "141.675193",
            ]);
            
            Station::create([
                "id" => 124,
                "prefecture_id" => 1,
                "city_id" => 33,
                "street_id" => null,
                "name" => "千歳",
                "hiragana" => "ちとせ",
                "katakana" => "チトセ",
                "katakana_half" => "ﾁﾄｾ",
                "romaji" => "chitose",
                "memo" => "北海道",
                "latitude" => "42.828133",
                "altitude" => "141.652110",
            ]);
            
            Station::create([
                "id" => 125,
                "prefecture_id" => 1,
                "city_id" => 33,
                "street_id" => 3081,
                "name" => "長都",
                "hiragana" => "おさつ",
                "katakana" => "オサツ",
                "katakana_half" => "ｵｻﾂ",
                "romaji" => "osatsu",
                "memo" => "",
                "latitude" => "42.851937",
                "altitude" => "141.622973",
            ]);
            
            Station::create([
                "id" => 126,
                "prefecture_id" => 1,
                "city_id" => 179,
                "street_id" => 7617,
                "name" => "サッポロビール庭園",
                "hiragana" => "さっぽろびーるていえん",
                "katakana" => "サッポロビールテイエン",
                "katakana_half" => "ｻｯﾎﾟﾛﾋﾞｰﾙﾃｲｴﾝ",
                "romaji" => "sapporobiｰruteien",
                "memo" => "",
                "latitude" => "42.866935",
                "altitude" => "141.605474",
            ]);
            
            Station::create([
                "id" => 127,
                "prefecture_id" => 1,
                "city_id" => 40,
                "street_id" => null,
                "name" => "恵庭",
                "hiragana" => "えにわ",
                "katakana" => "エニワ",
                "katakana_half" => "ｴﾆﾜ",
                "romaji" => "eniwa",
                "memo" => "",
                "latitude" => "42.883126",
                "altitude" => "141.586418",
            ]);
            
            Station::create([
                "id" => 128,
                "prefecture_id" => 1,
                "city_id" => 40,
                "street_id" => 3511,
                "name" => "恵み野",
                "hiragana" => "めぐみの",
                "katakana" => "メグミノ",
                "katakana_half" => "ﾒｸﾞﾐﾉ",
                "romaji" => "megumino",
                "memo" => "",
                "latitude" => "42.902791",
                "altitude" => "141.574363",
            ]);
            
            Station::create([
                "id" => 129,
                "prefecture_id" => 1,
                "city_id" => 40,
                "street_id" => 3485,
                "name" => "島松",
                "hiragana" => "しままつ",
                "katakana" => "シママツ",
                "katakana_half" => "ｼﾏﾏﾂ",
                "romaji" => "shimamatsu",
                "memo" => "",
                "latitude" => "42.922484",
                "altitude" => "141.573168",
            ]);
            
            Station::create([
                "id" => 130,
                "prefecture_id" => 1,
                "city_id" => 42,
                "street_id" => null,
                "name" => "北広島",
                "hiragana" => "きたひろしま",
                "katakana" => "キタヒロシマ",
                "katakana_half" => "ｷﾀﾋﾛｼﾏ",
                "romaji" => "kitahiroshima",
                "memo" => "",
                "latitude" => "42.979310",
                "altitude" => "141.563111",
            ]);
            
            Station::create([
                "id" => 131,
                "prefecture_id" => 1,
                "city_id" => 8,
                "street_id" => 675,
                "name" => "上野幌",
                "hiragana" => "かみのっぽろ",
                "katakana" => "カミノッポロ",
                "katakana_half" => "ｶﾐﾉｯﾎﾟﾛ",
                "romaji" => "kaminopporo",
                "memo" => "",
                "latitude" => "43.016305",
                "altitude" => "141.487031",
            ]);
            
            Station::create([
                "id" => 132,
                "prefecture_id" => 1,
                "city_id" => 1,
                "street_id" => null,
                "name" => "新札幌",
                "hiragana" => "しんさっぽろ",
                "katakana" => "シンサッポロ",
                "katakana_half" => "ｼﾝｻｯﾎﾟﾛ",
                "romaji" => "shinsapporo",
                "memo" => "",
                "latitude" => "43.038775",
                "altitude" => "141.472338",
            ]);
            
            Station::create([
                "id" => 133,
                "prefecture_id" => 1,
                "city_id" => 4,
                "street_id" => 415,
                "name" => "平和",
                "hiragana" => "へいわ",
                "katakana" => "ヘイワ",
                "katakana_half" => "ﾍｲﾜ",
                "romaji" => "heiwa",
                "memo" => "",
                "latitude" => "43.046913",
                "altitude" => "141.437979",
            ]);
            
            Station::create([
                "id" => 134,
                "prefecture_id" => 1,
                "city_id" => 33,
                "street_id" => null,
                "name" => "新千歳空港",
                "hiragana" => "しんちとせくうこう",
                "katakana" => "シンチトセクウコウ",
                "katakana_half" => "ｼﾝﾁﾄｾｸｳｺｳ",
                "romaji" => "shinchitosekuukou",
                "memo" => "鉄道",
                "latitude" => "42.787583",
                "altitude" => "141.680749",
            ]);
            
            Station::create([
                "id" => 135,
                "prefecture_id" => 1,
                "city_id" => 11,
                "street_id" => 845,
                "name" => "追分",
                "hiragana" => "おいわけ",
                "katakana" => "オイワケ",
                "katakana_half" => "ｵｲﾜｹ",
                "romaji" => "oiwake",
                "memo" => "北海道",
                "latitude" => "42.873298",
                "altitude" => "141.810706",
            ]);
            
            Station::create([
                "id" => 136,
                "prefecture_id" => 1,
                "city_id" => 13,
                "street_id" => 1128,
                "name" => "川端",
                "hiragana" => "かわばた",
                "katakana" => "カワバタ",
                "katakana_half" => "ｶﾜﾊﾞﾀ",
                "romaji" => "kawabata",
                "memo" => "",
                "latitude" => "42.914574",
                "altitude" => "141.894725",
            ]);
            
            Station::create([
                "id" => 137,
                "prefecture_id" => 1,
                "city_id" => 18,
                "street_id" => 1964,
                "name" => "滝ノ上",
                "hiragana" => "たきのうえ",
                "katakana" => "タキノウエ",
                "katakana_half" => "ﾀｷﾉｳｴ",
                "romaji" => "takinoue",
                "memo" => "",
                "latitude" => "42.910325",
                "altitude" => "141.975774",
            ]);
            
            Station::create([
                "id" => 138,
                "prefecture_id" => 1,
                "city_id" => 18,
                "street_id" => null,
                "name" => "新夕張",
                "hiragana" => "しんゆうばり",
                "katakana" => "シンユウバリ",
                "katakana_half" => "ｼﾝﾕｳﾊﾞﾘ",
                "romaji" => "shinyuubari",
                "memo" => "",
                "latitude" => "42.936435",
                "altitude" => "142.036129",
            ]);
            
            Station::create([
                "id" => 139,
                "prefecture_id" => 1,
                "city_id" => 107,
                "street_id" => null,
                "name" => "占冠",
                "hiragana" => "しむかっぷ",
                "katakana" => "シムカップ",
                "katakana_half" => "ｼﾑｶｯﾌﾟ",
                "romaji" => "shimukappu",
                "memo" => "",
                "latitude" => "42.992907",
                "altitude" => "142.399902",
            ]);
            
            Station::create([
                "id" => 140,
                "prefecture_id" => 1,
                "city_id" => 107,
                "street_id" => 5370,
                "name" => "トマム",
                "hiragana" => "とまむ",
                "katakana" => "トマム",
                "katakana_half" => "ﾄﾏﾑ",
                "romaji" => "tomamu",
                "memo" => "",
                "latitude" => "43.055848",
                "altitude" => "142.610798",
            ]);
            
            Station::create([
                "id" => 141,
                "prefecture_id" => 1,
                "city_id" => 164,
                "street_id" => null,
                "name" => "新得",
                "hiragana" => "しんとく",
                "katakana" => "シントク",
                "katakana_half" => "ｼﾝﾄｸ",
                "romaji" => "shintoku",
                "memo" => "",
                "latitude" => "43.082211",
                "altitude" => "142.832584",
            ]);
            
            Station::create([
                "id" => 142,
                "prefecture_id" => 1,
                "city_id" => 18,
                "street_id" => 1981,
                "name" => "沼ノ沢",
                "hiragana" => "ぬまのさわ",
                "katakana" => "ヌマノサワ",
                "katakana_half" => "ﾇﾏﾉｻﾜ",
                "romaji" => "numanosawa",
                "memo" => "",
                "latitude" => "42.957821",
                "altitude" => "142.031017",
            ]);
            
            Station::create([
                "id" => 143,
                "prefecture_id" => 1,
                "city_id" => 18,
                "street_id" => 1988,
                "name" => "南清水沢",
                "hiragana" => "みなみしみずさわ",
                "katakana" => "ミナミシミズサワ",
                "katakana_half" => "ﾐﾅﾐｼﾐｽﾞｻﾜ",
                "romaji" => "minamishimizusawa",
                "memo" => "",
                "latitude" => "42.985401",
                "altitude" => "142.006712",
            ]);
            
            Station::create([
                "id" => 144,
                "prefecture_id" => 1,
                "city_id" => 18,
                "street_id" => 1954,
                "name" => "清水沢",
                "hiragana" => "しみずさわ",
                "katakana" => "シミズサワ",
                "katakana_half" => "ｼﾐｽﾞｻﾜ",
                "romaji" => "shimizusawa",
                "memo" => "",
                "latitude" => "42.998121",
                "altitude" => "142.007240",
            ]);
            
            Station::create([
                "id" => 145,
                "prefecture_id" => 1,
                "city_id" => 52,
                "street_id" => null,
                "name" => "鹿ノ谷",
                "hiragana" => "しかのたに",
                "katakana" => "シカノタニ",
                "katakana_half" => "ｼｶﾉﾀﾆ",
                "romaji" => "shikanotani",
                "memo" => "",
                "latitude" => "43.039423",
                "altitude" => "141.964658",
            ]);
            
            Station::create([
                "id" => 146,
                "prefecture_id" => 1,
                "city_id" => 18,
                "street_id" => null,
                "name" => "夕張",
                "hiragana" => "ゆうばり",
                "katakana" => "ユウバリ",
                "katakana_half" => "ﾕｳﾊﾞﾘ",
                "romaji" => "yuubari",
                "memo" => "",
                "latitude" => "43.050810",
                "altitude" => "141.967380",
            ]);
            
            Station::create([
                "id" => 147,
                "prefecture_id" => 1,
                "city_id" => 55,
                "street_id" => 4062,
                "name" => "静狩",
                "hiragana" => "しずかり",
                "katakana" => "シズカリ",
                "katakana_half" => "ｼｽﾞｶﾘ",
                "romaji" => "shizukari",
                "memo" => "",
                "latitude" => "42.584084",
                "altitude" => "140.459998",
            ]);
            
            Station::create([
                "id" => 148,
                "prefecture_id" => 1,
                "city_id" => 12,
                "street_id" => null,
                "name" => "小幌",
                "hiragana" => "こぼろ",
                "katakana" => "コボロ",
                "katakana_half" => "ｺﾎﾞﾛ",
                "romaji" => "koboro",
                "memo" => "",
                "latitude" => "42.589667",
                "altitude" => "140.537324",
            ]);
            
            Station::create([
                "id" => 149,
                "prefecture_id" => 1,
                "city_id" => 127,
                "street_id" => null,
                "name" => "礼文",
                "hiragana" => "れぶん",
                "katakana" => "レブン",
                "katakana_half" => "ﾚﾌﾞﾝ",
                "romaji" => "rebun",
                "memo" => "",
                "latitude" => "42.580475",
                "altitude" => "140.595042",
            ]);
            
            Station::create([
                "id" => 150,
                "prefecture_id" => 1,
                "city_id" => 146,
                "street_id" => 6332,
                "name" => "大岸",
                "hiragana" => "おおきし",
                "katakana" => "オオキシ",
                "katakana_half" => "ｵｵｷｼ",
                "romaji" => "ookishi",
                "memo" => "",
                "latitude" => "42.585837",
                "altitude" => "140.638372",
            ]);
            
            Station::create([
                "id" => 151,
                "prefecture_id" => 1,
                "city_id" => 146,
                "street_id" => null,
                "name" => "豊浦",
                "hiragana" => "とようら",
                "katakana" => "トヨウラ",
                "katakana_half" => "ﾄﾖｳﾗ",
                "romaji" => "toyoura",
                "memo" => "",
                "latitude" => "42.580255",
                "altitude" => "140.715477",
            ]);
            
            Station::create([
                "id" => 152,
                "prefecture_id" => 1,
                "city_id" => 150,
                "street_id" => null,
                "name" => "洞爺",
                "hiragana" => "とうや",
                "katakana" => "トウヤ",
                "katakana_half" => "ﾄｳﾔ",
                "romaji" => "touya",
                "memo" => "",
                "latitude" => "42.550898",
                "altitude" => "140.763614",
            ]);
            
            Station::create([
                "id" => 153,
                "prefecture_id" => 1,
                "city_id" => 147,
                "street_id" => null,
                "name" => "有珠",
                "hiragana" => "うす",
                "katakana" => "ウス",
                "katakana_half" => "ｳｽ",
                "romaji" => "usu",
                "memo" => "",
                "latitude" => "42.513070",
                "altitude" => "140.793891",
            ]);
            
            Station::create([
                "id" => 154,
                "prefecture_id" => 1,
                "city_id" => 41,
                "street_id" => 3542,
                "name" => "長和",
                "hiragana" => "ながわ",
                "katakana" => "ナガワ",
                "katakana_half" => "ﾅｶﾞﾜ",
                "romaji" => "nagawa",
                "memo" => "",
                "latitude" => "42.488545",
                "altitude" => "140.833582",
            ]);
            
            Station::create([
                "id" => 155,
                "prefecture_id" => 1,
                "city_id" => 41,
                "street_id" => null,
                "name" => "伊達紋別",
                "hiragana" => "だてもんべつ",
                "katakana" => "ダテモンベツ",
                "katakana_half" => "ﾀﾞﾃﾓﾝﾍﾞﾂ",
                "romaji" => "datemonbetsu",
                "memo" => "",
                "latitude" => "42.469353",
                "altitude" => "140.856165",
            ]);
            
            Station::create([
                "id" => 156,
                "prefecture_id" => 1,
                "city_id" => 2,
                "street_id" => null,
                "name" => "北舟岡",
                "hiragana" => "きたふなおか",
                "katakana" => "キタフナオカ",
                "katakana_half" => "ｷﾀﾌﾅｵｶ",
                "romaji" => "kitafunaoka",
                "memo" => "",
                "latitude" => "42.450327",
                "altitude" => "140.880664",
            ]);
            
            Station::create([
                "id" => 157,
                "prefecture_id" => 1,
                "city_id" => 41,
                "street_id" => 3545,
                "name" => "稀府",
                "hiragana" => "まれっぷ",
                "katakana" => "マレップ",
                "katakana_half" => "ﾏﾚｯﾌﾟ",
                "romaji" => "mareppu",
                "memo" => "",
                "latitude" => "42.425941",
                "altitude" => "140.898886",
            ]);
            
            Station::create([
                "id" => 158,
                "prefecture_id" => 1,
                "city_id" => 25,
                "street_id" => 2603,
                "name" => "黄金",
                "hiragana" => "こがね",
                "katakana" => "コガネ",
                "katakana_half" => "ｺｶﾞﾈ",
                "romaji" => "kogane",
                "memo" => "北海道",
                "latitude" => "42.386640",
                "altitude" => "140.908054",
            ]);
            
            Station::create([
                "id" => 159,
                "prefecture_id" => 1,
                "city_id" => 14,
                "street_id" => 1415,
                "name" => "崎守",
                "hiragana" => "さきもり",
                "katakana" => "サキモリ",
                "katakana_half" => "ｻｷﾓﾘ",
                "romaji" => "sakimori",
                "memo" => "",
                "latitude" => "42.374114",
                "altitude" => "140.926774",
            ]);
            
            Station::create([
                "id" => 160,
                "prefecture_id" => 1,
                "city_id" => 14,
                "street_id" => 1449,
                "name" => "本輪西",
                "hiragana" => "もとわにし",
                "katakana" => "モトワニシ",
                "katakana_half" => "ﾓﾄﾜﾆｼ",
                "romaji" => "motowanishi",
                "memo" => "",
                "latitude" => "42.359062",
                "altitude" => "140.977688",
            ]);
            
            Station::create([
                "id" => 161,
                "prefecture_id" => 1,
                "city_id" => 3,
                "street_id" => null,
                "name" => "東室蘭",
                "hiragana" => "ひがしむろらん",
                "katakana" => "ヒガシムロラン",
                "katakana_half" => "ﾋｶﾞｼﾑﾛﾗﾝ",
                "romaji" => "higashimuroran",
                "memo" => "",
                "latitude" => "42.348841",
                "altitude" => "141.025379",
            ]);
            
            Station::create([
                "id" => 162,
                "prefecture_id" => 1,
                "city_id" => 39,
                "street_id" => 3430,
                "name" => "鷲別",
                "hiragana" => "わしべつ",
                "katakana" => "ワシベツ",
                "katakana_half" => "ﾜｼﾍﾞﾂ",
                "romaji" => "washibetsu",
                "memo" => "",
                "latitude" => "42.359479",
                "altitude" => "141.043044",
            ]);
            
            Station::create([
                "id" => 163,
                "prefecture_id" => 1,
                "city_id" => 39,
                "street_id" => 3454,
                "name" => "幌別",
                "hiragana" => "ほろべつ",
                "katakana" => "ホロベツ",
                "katakana_half" => "ﾎﾛﾍﾞﾂ",
                "romaji" => "horobetsu",
                "memo" => "",
                "latitude" => "42.409392",
                "altitude" => "141.106897",
            ]);
            
            Station::create([
                "id" => 164,
                "prefecture_id" => 1,
                "city_id" => 11,
                "street_id" => 924,
                "name" => "富浦",
                "hiragana" => "とみうら",
                "katakana" => "トミウラ",
                "katakana_half" => "ﾄﾐｳﾗ",
                "romaji" => "tomiura",
                "memo" => "北海道",
                "latitude" => "42.441916",
                "altitude" => "141.156558",
            ]);
            
            Station::create([
                "id" => 165,
                "prefecture_id" => 1,
                "city_id" => 39,
                "street_id" => null,
                "name" => "登別",
                "hiragana" => "のぼりべつ",
                "katakana" => "ノボリベツ",
                "katakana_half" => "ﾉﾎﾞﾘﾍﾞﾂ",
                "romaji" => "noboribetsu",
                "memo" => "",
                "latitude" => "42.451999",
                "altitude" => "141.180722",
            ]);
            
            Station::create([
                "id" => 166,
                "prefecture_id" => 1,
                "city_id" => 148,
                "street_id" => 6368,
                "name" => "虎杖浜",
                "hiragana" => "こじょうはま",
                "katakana" => "コジョウハマ",
                "katakana_half" => "ｺｼﾞｮｳﾊﾏ",
                "romaji" => "kojouhama",
                "memo" => "",
                "latitude" => "42.464859",
                "altitude" => "141.215247",
            ]);
            
            Station::create([
                "id" => 167,
                "prefecture_id" => 1,
                "city_id" => 148,
                "street_id" => 6374,
                "name" => "竹浦",
                "hiragana" => "たけうら",
                "katakana" => "タケウラ",
                "katakana_half" => "ﾀｹｳﾗ",
                "romaji" => "takeura",
                "memo" => "",
                "latitude" => "42.492802",
                "altitude" => "141.260242",
            ]);
            
            Station::create([
                "id" => 168,
                "prefecture_id" => 1,
                "city_id" => 148,
                "street_id" => 6367,
                "name" => "北吉原",
                "hiragana" => "きたよしはら",
                "katakana" => "キタヨシハラ",
                "katakana_half" => "ｷﾀﾖｼﾊﾗ",
                "romaji" => "kitayoshihara",
                "memo" => "",
                "latitude" => "42.508856",
                "altitude" => "141.285794",
            ]);
            
            Station::create([
                "id" => 169,
                "prefecture_id" => 1,
                "city_id" => 44,
                "street_id" => 3751,
                "name" => "萩野",
                "hiragana" => "はぎの",
                "katakana" => "ハギノ",
                "katakana_half" => "ﾊｷﾞﾉ",
                "romaji" => "hagino",
                "memo" => "",
                "latitude" => "42.521411",
                "altitude" => "141.306070",
            ]);
            
            Station::create([
                "id" => 170,
                "prefecture_id" => 1,
                "city_id" => 148,
                "street_id" => null,
                "name" => "白老",
                "hiragana" => "しらおい",
                "katakana" => "シラオイ",
                "katakana_half" => "ｼﾗｵｲ",
                "romaji" => "shiraoi",
                "memo" => "",
                "latitude" => "42.554742",
                "altitude" => "141.359953",
            ]);
            
            Station::create([
                "id" => 171,
                "prefecture_id" => 1,
                "city_id" => 148,
                "street_id" => 6370,
                "name" => "社台",
                "hiragana" => "しゃだい",
                "katakana" => "シャダイ",
                "katakana_half" => "ｼｬﾀﾞｲ",
                "romaji" => "shadai",
                "memo" => "",
                "latitude" => "42.579185",
                "altitude" => "141.418002",
            ]);
            
            Station::create([
                "id" => 172,
                "prefecture_id" => 1,
                "city_id" => 22,
                "street_id" => 2373,
                "name" => "錦岡",
                "hiragana" => "にしきおか",
                "katakana" => "ニシキオカ",
                "katakana_half" => "ﾆｼｷｵｶ",
                "romaji" => "nishikioka",
                "memo" => "",
                "latitude" => "42.602517",
                "altitude" => "141.487384",
            ]);
            
            Station::create([
                "id" => 173,
                "prefecture_id" => 1,
                "city_id" => 22,
                "street_id" => 2325,
                "name" => "糸井",
                "hiragana" => "いとい",
                "katakana" => "イトイ",
                "katakana_half" => "ｲﾄｲ",
                "romaji" => "itoi",
                "memo" => "",
                "latitude" => "42.622516",
                "altitude" => "141.546323",
            ]);
            
            Station::create([
                "id" => 174,
                "prefecture_id" => 1,
                "city_id" => 8,
                "street_id" => 663,
                "name" => "青葉",
                "hiragana" => "あおば",
                "katakana" => "アオバ",
                "katakana_half" => "ｱｵﾊﾞ",
                "romaji" => "aoba",
                "memo" => "",
                "latitude" => "42.630626",
                "altitude" => "141.570043",
            ]);
            
            Station::create([
                "id" => 175,
                "prefecture_id" => 1,
                "city_id" => 151,
                "street_id" => 6457,
                "name" => "遠浅",
                "hiragana" => "とあさ",
                "katakana" => "トアサ",
                "katakana_half" => "ﾄｱｻ",
                "romaji" => "toasa",
                "memo" => "",
                "latitude" => "42.729314",
                "altitude" => "141.769105",
            ]);
            
            Station::create([
                "id" => 176,
                "prefecture_id" => 1,
                "city_id" => 151,
                "street_id" => 6458,
                "name" => "早来",
                "hiragana" => "はやきた",
                "katakana" => "ハヤキタ",
                "katakana_half" => "ﾊﾔｷﾀ",
                "romaji" => "hayakita",
                "memo" => "",
                "latitude" => "42.765283",
                "altitude" => "141.814127",
            ]);
            
            Station::create([
                "id" => 177,
                "prefecture_id" => 1,
                "city_id" => 151,
                "street_id" => null,
                "name" => "安平",
                "hiragana" => "あびら",
                "katakana" => "アビラ",
                "katakana_half" => "ｱﾋﾞﾗ",
                "romaji" => "abira",
                "memo" => "",
                "latitude" => "42.814361",
                "altitude" => "141.825235",
            ]);
            
            Station::create([
                "id" => 178,
                "prefecture_id" => 1,
                "city_id" => 85,
                "street_id" => 4696,
                "name" => "三川",
                "hiragana" => "みかわ",
                "katakana" => "ミカワ",
                "katakana_half" => "ﾐｶﾜ",
                "romaji" => "mikawa",
                "memo" => "北海道",
                "latitude" => "42.945068",
                "altitude" => "141.800732",
            ]);
            
            Station::create([
                "id" => 179,
                "prefecture_id" => 1,
                "city_id" => 85,
                "street_id" => 4702,
                "name" => "古山",
                "hiragana" => "ふるさん",
                "katakana" => "フルサン",
                "katakana_half" => "ﾌﾙｻﾝ",
                "romaji" => "furusan",
                "memo" => "",
                "latitude" => "42.975315",
                "altitude" => "141.793813",
            ]);
            
            Station::create([
                "id" => 180,
                "prefecture_id" => 1,
                "city_id" => 85,
                "street_id" => null,
                "name" => "由仁",
                "hiragana" => "ゆに",
                "katakana" => "ユニ",
                "katakana_half" => "ﾕﾆ",
                "romaji" => "yuni",
                "memo" => "",
                "latitude" => "43.012394",
                "altitude" => "141.785812",
            ]);
            
            Station::create([
                "id" => 181,
                "prefecture_id" => 1,
                "city_id" => 87,
                "street_id" => null,
                "name" => "栗山",
                "hiragana" => "くりやま",
                "katakana" => "クリヤマ",
                "katakana_half" => "ｸﾘﾔﾏ",
                "romaji" => "kuriyama",
                "memo" => "",
                "latitude" => "43.058194",
                "altitude" => "141.775590",
            ]);
            
            Station::create([
                "id" => 182,
                "prefecture_id" => 1,
                "city_id" => 19,
                "street_id" => 2033,
                "name" => "栗丘",
                "hiragana" => "くりおか",
                "katakana" => "クリオカ",
                "katakana_half" => "ｸﾘｵｶ",
                "romaji" => "kurioka",
                "memo" => "",
                "latitude" => "43.085803",
                "altitude" => "141.744341",
            ]);
            
            Station::create([
                "id" => 183,
                "prefecture_id" => 1,
                "city_id" => 19,
                "street_id" => 2027,
                "name" => "栗沢",
                "hiragana" => "くりさわ",
                "katakana" => "クリサワ",
                "katakana_half" => "ｸﾘｻﾜ",
                "romaji" => "kurisawa",
                "memo" => "",
                "latitude" => "43.120548",
                "altitude" => "141.739728",
            ]);
            
            Station::create([
                "id" => 184,
                "prefecture_id" => 1,
                "city_id" => 19,
                "street_id" => 2001,
                "name" => "志文",
                "hiragana" => "しぶん",
                "katakana" => "シブン",
                "katakana_half" => "ｼﾌﾞﾝ",
                "romaji" => "shibun",
                "memo" => "",
                "latitude" => "43.159045",
                "altitude" => "141.744448",
            ]);
            
            Station::create([
                "id" => 185,
                "prefecture_id" => 1,
                "city_id" => 14,
                "street_id" => 1449,
                "name" => "輪西",
                "hiragana" => "わにし",
                "katakana" => "ワニシ",
                "katakana_half" => "ﾜﾆｼ",
                "romaji" => "wanishi",
                "memo" => "",
                "latitude" => "42.334037",
                "altitude" => "141.007270",
            ]);
            
            Station::create([
                "id" => 186,
                "prefecture_id" => 1,
                "city_id" => 11,
                "street_id" => 972,
                "name" => "御崎",
                "hiragana" => "みさき",
                "katakana" => "ミサキ",
                "katakana_half" => "ﾐｻｷ",
                "romaji" => "misaki",
                "memo" => "",
                "latitude" => "42.329204",
                "altitude" => "140.993854",
            ]);
            
            Station::create([
                "id" => 187,
                "prefecture_id" => 1,
                "city_id" => 14,
                "street_id" => 1438,
                "name" => "母恋",
                "hiragana" => "ぼこい",
                "katakana" => "ボコイ",
                "katakana_half" => "ﾎﾞｺｲ",
                "romaji" => "bokoi",
                "memo" => "",
                "latitude" => "42.317232",
                "altitude" => "140.989355",
            ]);
            
            Station::create([
                "id" => 188,
                "prefecture_id" => 1,
                "city_id" => 14,
                "street_id" => null,
                "name" => "室蘭",
                "hiragana" => "むろらん",
                "katakana" => "ムロラン",
                "katakana_half" => "ﾑﾛﾗﾝ",
                "romaji" => "muroran",
                "memo" => "",
                "latitude" => "42.318010",
                "altitude" => "140.974412",
            ]);
            
            Station::create([
                "id" => 189,
                "prefecture_id" => 1,
                "city_id" => 107,
                "street_id" => null,
                "name" => "勇払",
                "hiragana" => "ゆうふつ",
                "katakana" => "ユウフツ",
                "katakana_half" => "ﾕｳﾌﾂ",
                "romaji" => "yuufutsu",
                "memo" => "",
                "latitude" => "42.632767",
                "altitude" => "141.727752",
            ]);
            
            Station::create([
                "id" => 190,
                "prefecture_id" => 1,
                "city_id" => 149,
                "street_id" => 6407,
                "name" => "浜厚真",
                "hiragana" => "はまあつま",
                "katakana" => "ハマアツマ",
                "katakana_half" => "ﾊﾏｱﾂﾏ",
                "romaji" => "hamaatsuma",
                "memo" => "",
                "latitude" => "42.606716",
                "altitude" => "141.836938",
            ]);
            
            Station::create([
                "id" => 191,
                "prefecture_id" => 1,
                "city_id" => 123,
                "street_id" => null,
                "name" => "浜田浦",
                "hiragana" => "はまたうら",
                "katakana" => "ハマタウラ",
                "katakana_half" => "ﾊﾏﾀｳﾗ",
                "romaji" => "hamataura",
                "memo" => "",
                "latitude" => "42.590746",
                "altitude" => "141.883546",
            ]);
            
            Station::create([
                "id" => 192,
                "prefecture_id" => 1,
                "city_id" => 1,
                "street_id" => null,
                "name" => "鵡川",
                "hiragana" => "むかわ",
                "katakana" => "ムカワ",
                "katakana_half" => "ﾑｶﾜ",
                "romaji" => "mukawa",
                "memo" => "",
                "latitude" => "42.578832",
                "altitude" => "141.923794",
            ]);
            
            Station::create([
                "id" => 193,
                "prefecture_id" => 1,
                "city_id" => 22,
                "street_id" => 2351,
                "name" => "汐見",
                "hiragana" => "しおみ",
                "katakana" => "シオミ",
                "katakana_half" => "ｼｵﾐ",
                "romaji" => "shiomi",
                "memo" => "",
                "latitude" => "42.550224",
                "altitude" => "141.945154",
            ]);
            
            Station::create([
                "id" => 194,
                "prefecture_id" => 1,
                "city_id" => 44,
                "street_id" => 3745,
                "name" => "富川",
                "hiragana" => "とみかわ",
                "katakana" => "トミカワ",
                "katakana_half" => "ﾄﾐｶﾜ",
                "romaji" => "tomikawa",
                "memo" => "",
                "latitude" => "42.516896",
                "altitude" => "142.020844",
            ]);
            
            Station::create([
                "id" => 195,
                "prefecture_id" => 1,
                "city_id" => 153,
                "street_id" => null,
                "name" => "日高門別",
                "hiragana" => "ひだかもんべつ",
                "katakana" => "ヒダカモンベツ",
                "katakana_half" => "ﾋﾀﾞｶﾓﾝﾍﾞﾂ",
                "romaji" => "hidakamonbetsu",
                "memo" => "",
                "latitude" => "42.481178",
                "altitude" => "142.072536",
            ]);
            
            Station::create([
                "id" => 196,
                "prefecture_id" => 1,
                "city_id" => 20,
                "street_id" => 2221,
                "name" => "豊郷",
                "hiragana" => "とよさと",
                "katakana" => "トヨサト",
                "katakana_half" => "ﾄﾖｻﾄ",
                "romaji" => "toyosato",
                "memo" => "北海道",
                "latitude" => "42.470181",
                "altitude" => "142.122421",
            ]);
            
            Station::create([
                "id" => 197,
                "prefecture_id" => 1,
                "city_id" => 153,
                "street_id" => 6512,
                "name" => "清畠",
                "hiragana" => "きよはた",
                "katakana" => "キヨハタ",
                "katakana_half" => "ｷﾖﾊﾀ",
                "romaji" => "kiyohata",
                "memo" => "",
                "latitude" => "42.455682",
                "altitude" => "142.176500",
            ]);
            
            Station::create([
                "id" => 198,
                "prefecture_id" => 1,
                "city_id" => 153,
                "street_id" => 6509,
                "name" => "厚賀",
                "hiragana" => "あつが",
                "katakana" => "アツガ",
                "katakana_half" => "ｱﾂｶﾞ",
                "romaji" => "atsuga",
                "memo" => "",
                "latitude" => "42.430603",
                "altitude" => "142.215721",
            ]);
            
            Station::create([
                "id" => 199,
                "prefecture_id" => 1,
                "city_id" => 155,
                "street_id" => 6568,
                "name" => "大狩部",
                "hiragana" => "おおかりべ",
                "katakana" => "オオカリベ",
                "katakana_half" => "ｵｵｶﾘﾍﾞ",
                "romaji" => "ookaribe",
                "memo" => "",
                "latitude" => "42.395608",
                "altitude" => "142.259330",
            ]);
            
            Station::create([
                "id" => 200,
                "prefecture_id" => 1,
                "city_id" => 155,
                "street_id" => 6574,
                "name" => "節婦",
                "hiragana" => "せっぷ",
                "katakana" => "セップ",
                "katakana_half" => "ｾｯﾌﾟ",
                "romaji" => "seppu",
                "memo" => "",
                "latitude" => "42.382554",
                "altitude" => "142.275718",
            ]);
            
            Station::create([
                "id" => 201,
                "prefecture_id" => 1,
                "city_id" => 155,
                "street_id" => null,
                "name" => "新冠",
                "hiragana" => "にいかっぷ",
                "katakana" => "ニイカップ",
                "katakana_half" => "ﾆｲｶｯﾌﾟ",
                "romaji" => "niikappu",
                "memo" => "",
                "latitude" => "42.360890",
                "altitude" => "142.312660",
            ]);
            
            Station::create([
                "id" => 202,
                "prefecture_id" => 1,
                "city_id" => 159,
                "street_id" => 6661,
                "name" => "静内",
                "hiragana" => "しずない",
                "katakana" => "シズナイ",
                "katakana_half" => "ｼｽﾞﾅｲ",
                "romaji" => "shizunai",
                "memo" => "",
                "latitude" => "42.336449",
                "altitude" => "142.360352",
            ]);
            
            Station::create([
                "id" => 203,
                "prefecture_id" => 1,
                "city_id" => 159,
                "street_id" => 6695,
                "name" => "東静内",
                "hiragana" => "ひがししずない",
                "katakana" => "ヒガシシズナイ",
                "katakana_half" => "ﾋｶﾞｼｼｽﾞﾅｲ",
                "romaji" => "higashishizunai",
                "memo" => "",
                "latitude" => "42.304287",
                "altitude" => "142.450568",
            ]);
            
            Station::create([
                "id" => 204,
                "prefecture_id" => 1,
                "city_id" => 159,
                "street_id" => 6684,
                "name" => "春立",
                "hiragana" => "はるたち",
                "katakana" => "ハルタチ",
                "katakana_half" => "ﾊﾙﾀﾁ",
                "romaji" => "harutachi",
                "memo" => "",
                "latitude" => "42.268542",
                "altitude" => "142.499038",
            ]);
            
            Station::create([
                "id" => 205,
                "prefecture_id" => 1,
                "city_id" => 153,
                "street_id" => null,
                "name" => "日高東別",
                "hiragana" => "ひだかとうべつ",
                "katakana" => "ヒダカトウベツ",
                "katakana_half" => "ﾋﾀﾞｶﾄｳﾍﾞﾂ",
                "romaji" => "hidakatoubetsu",
                "memo" => "",
                "latitude" => "42.280846",
                "altitude" => "142.521230",
            ]);
            
            Station::create([
                "id" => 206,
                "prefecture_id" => 1,
                "city_id" => 153,
                "street_id" => null,
                "name" => "日高三石",
                "hiragana" => "ひだかみついし",
                "katakana" => "ヒダカミツイシ",
                "katakana_half" => "ﾋﾀﾞｶﾐﾂｲｼ",
                "romaji" => "hidakamitsuishi",
                "memo" => "",
                "latitude" => "42.247129",
                "altitude" => "142.566838",
            ]);
            
            Station::create([
                "id" => 207,
                "prefecture_id" => 1,
                "city_id" => 159,
                "street_id" => 6709,
                "name" => "蓬栄",
                "hiragana" => "ほうえい",
                "katakana" => "ホウエイ",
                "katakana_half" => "ﾎｳｴｲ",
                "romaji" => "houei",
                "memo" => "",
                "latitude" => "42.264599",
                "altitude" => "142.604557",
            ]);
            
            Station::create([
                "id" => 208,
                "prefecture_id" => 1,
                "city_id" => 159,
                "street_id" => 6710,
                "name" => "本桐",
                "hiragana" => "ほんきり",
                "katakana" => "ホンキリ",
                "katakana_half" => "ﾎﾝｷﾘ",
                "romaji" => "honkiri",
                "memo" => "",
                "latitude" => "42.248130",
                "altitude" => "142.630417",
            ]);
            
            Station::create([
                "id" => 209,
                "prefecture_id" => 1,
                "city_id" => 156,
                "street_id" => 6597,
                "name" => "荻伏",
                "hiragana" => "おぎふし",
                "katakana" => "オギフシ",
                "katakana_half" => "ｵｷﾞﾌｼ",
                "romaji" => "ogifushi",
                "memo" => "",
                "latitude" => "42.206108",
                "altitude" => "142.689303",
            ]);
            
            Station::create([
                "id" => 210,
                "prefecture_id" => 1,
                "city_id" => 156,
                "street_id" => 6595,
                "name" => "絵笛",
                "hiragana" => "えふえ",
                "katakana" => "エフエ",
                "katakana_half" => "ｴﾌｴ",
                "romaji" => "efue",
                "memo" => "",
                "latitude" => "42.198442",
                "altitude" => "142.736105",
            ]);
            
            Station::create([
                "id" => 211,
                "prefecture_id" => 1,
                "city_id" => 156,
                "street_id" => null,
                "name" => "浦河",
                "hiragana" => "うらかわ",
                "katakana" => "ウラカワ",
                "katakana_half" => "ｳﾗｶﾜ",
                "romaji" => "urakawa",
                "memo" => "",
                "latitude" => "42.168362",
                "altitude" => "142.769881",
            ]);
            
            Station::create([
                "id" => 212,
                "prefecture_id" => 1,
                "city_id" => 6,
                "street_id" => 549,
                "name" => "東町",
                "hiragana" => "ひがしちょう",
                "katakana" => "ヒガシチョウ",
                "katakana_half" => "ﾋｶﾞｼﾁｮｳ",
                "romaji" => "higashichou",
                "memo" => "",
                "latitude" => "42.156531",
                "altitude" => "142.788797",
            ]);
            
            Station::create([
                "id" => 213,
                "prefecture_id" => 1,
                "city_id" => 153,
                "street_id" => null,
                "name" => "日高幌別",
                "hiragana" => "ひだかほろべつ",
                "katakana" => "ヒダカホロベツ",
                "katakana_half" => "ﾋﾀﾞｶﾎﾛﾍﾞﾂ",
                "romaji" => "hidakahorobetsu",
                "memo" => "",
                "latitude" => "42.142312",
                "altitude" => "142.834460",
            ]);
            
            Station::create([
                "id" => 214,
                "prefecture_id" => 1,
                "city_id" => 157,
                "street_id" => 6630,
                "name" => "鵜苫",
                "hiragana" => "うとま",
                "katakana" => "ウトマ",
                "katakana_half" => "ｳﾄﾏ",
                "romaji" => "utoma",
                "memo" => "",
                "latitude" => "42.134536",
                "altitude" => "142.882624",
            ]);
            
            Station::create([
                "id" => 215,
                "prefecture_id" => 1,
                "city_id" => 157,
                "street_id" => 6639,
                "name" => "西様似",
                "hiragana" => "にしさまに",
                "katakana" => "ニシサマニ",
                "katakana_half" => "ﾆｼｻﾏﾆ",
                "romaji" => "nishisamani",
                "memo" => "",
                "latitude" => "42.138286",
                "altitude" => "142.908510",
            ]);
            
            Station::create([
                "id" => 216,
                "prefecture_id" => 1,
                "city_id" => 157,
                "street_id" => null,
                "name" => "様似",
                "hiragana" => "さまに",
                "katakana" => "サマニ",
                "katakana_half" => "ｻﾏﾆ",
                "romaji" => "samani",
                "memo" => "",
                "latitude" => "42.127870",
                "altitude" => "142.936092",
            ]);
            
            Station::create([
                "id" => 217,
                "prefecture_id" => 1,
                "city_id" => 1,
                "street_id" => 6,
                "name" => "北一已",
                "hiragana" => "きたいちやん",
                "katakana" => "キタイチヤン",
                "katakana_half" => "ｷﾀｲﾁﾔﾝ",
                "romaji" => "kitaichiyan",
                "memo" => "",
                "latitude" => "43.742070",
                "altitude" => "142.014648",
            ]);
            
            Station::create([
                "id" => 218,
                "prefecture_id" => 1,
                "city_id" => 92,
                "street_id" => null,
                "name" => "秩父別",
                "hiragana" => "ちっぷべつ",
                "katakana" => "チップベツ",
                "katakana_half" => "ﾁｯﾌﾟﾍﾞﾂ",
                "romaji" => "chippubetsu",
                "memo" => "",
                "latitude" => "43.769010",
                "altitude" => "141.967651",
            ]);
            
            Station::create([
                "id" => 219,
                "prefecture_id" => 1,
                "city_id" => 2,
                "street_id" => null,
                "name" => "北秩父別",
                "hiragana" => "きたちっぷべつ",
                "katakana" => "キタチップベツ",
                "katakana_half" => "ｷﾀﾁｯﾌﾟﾍﾞﾂ",
                "romaji" => "kitachippubetsu",
                "memo" => "",
                "latitude" => "43.789398",
                "altitude" => "141.961068",
            ]);
            
            Station::create([
                "id" => 220,
                "prefecture_id" => 1,
                "city_id" => 43,
                "street_id" => null,
                "name" => "石狩沼田",
                "hiragana" => "いしかりぬまた",
                "katakana" => "イシカリヌマタ",
                "katakana_half" => "ｲｼｶﾘﾇﾏﾀ",
                "romaji" => "ishikarinumata",
                "memo" => "",
                "latitude" => "43.810173",
                "altitude" => "141.934014",
            ]);
            
            Station::create([
                "id" => 221,
                "prefecture_id" => 1,
                "city_id" => 21,
                "street_id" => 2286,
                "name" => "真布",
                "hiragana" => "まっぷ",
                "katakana" => "マップ",
                "katakana_half" => "ﾏｯﾌﾟ",
                "romaji" => "mappu",
                "memo" => "",
                "latitude" => "43.833169",
                "altitude" => "141.906681",
            ]);
            
            Station::create([
                "id" => 222,
                "prefecture_id" => 1,
                "city_id" => 95,
                "street_id" => 4943,
                "name" => "恵比島",
                "hiragana" => "えびしま",
                "katakana" => "エビシマ",
                "katakana_half" => "ｴﾋﾞｼﾏ",
                "romaji" => "ebishima",
                "memo" => "",
                "latitude" => "43.851279",
                "altitude" => "141.881266",
            ]);
            
            Station::create([
                "id" => 223,
                "prefecture_id" => 1,
                "city_id" => 21,
                "street_id" => 2309,
                "name" => "峠下",
                "hiragana" => "とうげした",
                "katakana" => "トウゲシタ",
                "katakana_half" => "ﾄｳｹﾞｼﾀ",
                "romaji" => "tougeshita",
                "memo" => "",
                "latitude" => "43.851278",
                "altitude" => "141.818744",
            ]);
            
            Station::create([
                "id" => 224,
                "prefecture_id" => 1,
                "city_id" => 21,
                "street_id" => 2299,
                "name" => "幌糠",
                "hiragana" => "ほろぬか",
                "katakana" => "ホロヌカ",
                "katakana_half" => "ﾎﾛﾇｶ",
                "romaji" => "horonuka",
                "memo" => "",
                "latitude" => "43.855498",
                "altitude" => "141.758249",
            ]);
            
            Station::create([
                "id" => 225,
                "prefecture_id" => 1,
                "city_id" => 21,
                "street_id" => 2295,
                "name" => "藤山",
                "hiragana" => "ふじやま",
                "katakana" => "フジヤマ",
                "katakana_half" => "ﾌｼﾞﾔﾏ",
                "romaji" => "fujiyama",
                "memo" => "",
                "latitude" => "43.887216",
                "altitude" => "141.720250",
            ]);
            
            Station::create([
                "id" => 226,
                "prefecture_id" => 1,
                "city_id" => 21,
                "street_id" => 2272,
                "name" => "大和田",
                "hiragana" => "おおわだ",
                "katakana" => "オオワダ",
                "katakana_half" => "ｵｵﾜﾀﾞ",
                "romaji" => "oowada",
                "memo" => "北海道",
                "latitude" => "43.913379",
                "altitude" => "141.696529",
            ]);
            
            Station::create([
                "id" => 227,
                "prefecture_id" => 1,
                "city_id" => 21,
                "street_id" => null,
                "name" => "留萌",
                "hiragana" => "るもい",
                "katakana" => "ルモイ",
                "katakana_half" => "ﾙﾓｲ",
                "romaji" => "rumoi",
                "memo" => "",
                "latitude" => "43.942932",
                "altitude" => "141.651809",
            ]);
            
            Station::create([
                "id" => 228,
                "prefecture_id" => 1,
                "city_id" => 13,
                "street_id" => 1077,
                "name" => "神楽岡",
                "hiragana" => "かぐらおか",
                "katakana" => "カグラオカ",
                "katakana_half" => "ｶｸﾞﾗｵｶ",
                "romaji" => "kaguraoka",
                "memo" => "",
                "latitude" => "43.745215",
                "altitude" => "142.358287",
            ]);
            
            Station::create([
                "id" => 229,
                "prefecture_id" => 1,
                "city_id" => 13,
                "street_id" => 1331,
                "name" => "緑が丘",
                "hiragana" => "みどりがおか",
                "katakana" => "ミドリガオカ",
                "katakana_half" => "ﾐﾄﾞﾘｶﾞｵｶ",
                "romaji" => "midorigaoka",
                "memo" => "北海道",
                "latitude" => "43.730189",
                "altitude" => "142.366204",
            ]);
            
            Station::create([
                "id" => 230,
                "prefecture_id" => 1,
                "city_id" => 13,
                "street_id" => 1270,
                "name" => "西御料",
                "hiragana" => "にしごりょう",
                "katakana" => "ニシゴリョウ",
                "katakana_half" => "ﾆｼｺﾞﾘｮｳ",
                "romaji" => "nishigoryou",
                "memo" => "",
                "latitude" => "43.720689",
                "altitude" => "142.371676",
            ]);
            
            Station::create([
                "id" => 231,
                "prefecture_id" => 1,
                "city_id" => 7,
                "street_id" => null,
                "name" => "西瑞穂",
                "hiragana" => "にしみずほ",
                "katakana" => "ニシミズホ",
                "katakana_half" => "ﾆｼﾐｽﾞﾎ",
                "romaji" => "nishimizuho",
                "memo" => "",
                "latitude" => "43.702442",
                "altitude" => "142.382093",
            ]);
            
            Station::create([
                "id" => 232,
                "prefecture_id" => 1,
                "city_id" => 13,
                "street_id" => 1259,
                "name" => "西神楽",
                "hiragana" => "にしかぐら",
                "katakana" => "ニシカグラ",
                "katakana_half" => "ﾆｼｶｸﾞﾗ",
                "romaji" => "nishikagura",
                "memo" => "",
                "latitude" => "43.682166",
                "altitude" => "142.393704",
            ]);
            
            Station::create([
                "id" => 233,
                "prefecture_id" => 1,
                "city_id" => 7,
                "street_id" => null,
                "name" => "西聖和",
                "hiragana" => "にしせいわ",
                "katakana" => "ニシセイワ",
                "katakana_half" => "ﾆｼｾｲﾜ",
                "romaji" => "nishiseiwa",
                "memo" => "",
                "latitude" => "43.668890",
                "altitude" => "142.415119",
            ]);
            
            Station::create([
                "id" => 234,
                "prefecture_id" => 1,
                "city_id" => 97,
                "street_id" => 5022,
                "name" => "千代ケ岡",
                "hiragana" => "ちよがおか",
                "katakana" => "チヨガオカ",
                "katakana_half" => "ﾁﾖｶﾞｵｶ",
                "romaji" => "chiyogaoka",
                "memo" => "",
                "latitude" => "43.643811",
                "altitude" => "142.451173",
            ]);
            
            Station::create([
                "id" => 235,
                "prefecture_id" => 1,
                "city_id" => 11,
                "street_id" => 878,
                "name" => "北美瑛",
                "hiragana" => "きたびえい",
                "katakana" => "キタビエイ",
                "katakana_half" => "ｷﾀﾋﾞｴｲ",
                "romaji" => "kitabiei",
                "memo" => "",
                "latitude" => "43.617897",
                "altitude" => "142.479560",
            ]);
            
            Station::create([
                "id" => 236,
                "prefecture_id" => 1,
                "city_id" => 103,
                "street_id" => null,
                "name" => "美瑛",
                "hiragana" => "びえい",
                "katakana" => "ビエイ",
                "katakana_half" => "ﾋﾞｴｲ",
                "romaji" => "biei",
                "memo" => "",
                "latitude" => "43.591233",
                "altitude" => "142.461619",
            ]);
            
            Station::create([
                "id" => 237,
                "prefecture_id" => 1,
                "city_id" => 103,
                "street_id" => 5223,
                "name" => "美馬牛",
                "hiragana" => "びばうし",
                "katakana" => "ビバウシ",
                "katakana_half" => "ﾋﾞﾊﾞｳｼ",
                "romaji" => "bibaushi",
                "memo" => "",
                "latitude" => "43.537405",
                "altitude" => "142.447150",
            ]);
            
            Station::create([
                "id" => 238,
                "prefecture_id" => 1,
                "city_id" => 104,
                "street_id" => null,
                "name" => "上富良野",
                "hiragana" => "かみふらの",
                "katakana" => "カミフラノ",
                "katakana_half" => "ｶﾐﾌﾗﾉ",
                "romaji" => "kamifurano",
                "memo" => "",
                "latitude" => "43.464135",
                "altitude" => "142.468763",
            ]);
            
            Station::create([
                "id" => 239,
                "prefecture_id" => 1,
                "city_id" => 160,
                "street_id" => 6770,
                "name" => "西中",
                "hiragana" => "にしなか",
                "katakana" => "ニシナカ",
                "katakana_half" => "ﾆｼﾅｶ",
                "romaji" => "nishinaka",
                "memo" => "",
                "latitude" => "43.429667",
                "altitude" => "142.442045",
            ]);
            
            Station::create([
                "id" => 240,
                "prefecture_id" => 1,
                "city_id" => 33,
                "street_id" => 3148,
                "name" => "ラベンダー畑",
                "hiragana" => "らべんだーばたけ",
                "katakana" => "ラベンダーバタケ",
                "katakana_half" => "ﾗﾍﾞﾝﾀﾞｰﾊﾞﾀｹ",
                "romaji" => "rabendaｰbatake",
                "memo" => "",
                "latitude" => "43.416890",
                "altitude" => "142.430740",
            ]);
            
            Station::create([
                "id" => 241,
                "prefecture_id" => 1,
                "city_id" => 105,
                "street_id" => null,
                "name" => "中富良野",
                "hiragana" => "なかふらの",
                "katakana" => "ナカフラノ",
                "katakana_half" => "ﾅｶﾌﾗﾉ",
                "romaji" => "nakafurano",
                "memo" => "",
                "latitude" => "43.405724",
                "altitude" => "142.420880",
            ]);
            
            Station::create([
                "id" => 242,
                "prefecture_id" => 1,
                "city_id" => 105,
                "street_id" => 5321,
                "name" => "鹿討",
                "hiragana" => "しかうち",
                "katakana" => "シカウチ",
                "katakana_half" => "ｼｶｳﾁ",
                "romaji" => "shikauchi",
                "memo" => "",
                "latitude" => "43.387559",
                "altitude" => "142.404910",
            ]);
            
            Station::create([
                "id" => 243,
                "prefecture_id" => 1,
                "city_id" => 29,
                "street_id" => 2819,
                "name" => "学田",
                "hiragana" => "がくでん",
                "katakana" => "ガクデン",
                "katakana_half" => "ｶﾞｸﾃﾞﾝ",
                "romaji" => "gakuden",
                "memo" => "",
                "latitude" => "43.366534",
                "altitude" => "142.386413",
            ]);
            
            Station::create([
                "id" => 244,
                "prefecture_id" => 1,
                "city_id" => 38,
                "street_id" => null,
                "name" => "富良野",
                "hiragana" => "ふらの",
                "katakana" => "フラノ",
                "katakana_half" => "ﾌﾗﾉ",
                "romaji" => "furano",
                "memo" => "",
                "latitude" => "43.347175",
                "altitude" => "142.391414",
            ]);
            
            Station::create([
                "id" => 245,
                "prefecture_id" => 1,
                "city_id" => 34,
                "street_id" => 3183,
                "name" => "東滝川",
                "hiragana" => "ひがしたきかわ",
                "katakana" => "ヒガシタキカワ",
                "katakana_half" => "ﾋｶﾞｼﾀｷｶﾜ",
                "romaji" => "higashitakikawa",
                "memo" => "",
                "latitude" => "43.573949",
                "altitude" => "141.980271",
            ]);
            
            Station::create([
                "id" => 246,
                "prefecture_id" => 1,
                "city_id" => 27,
                "street_id" => null,
                "name" => "赤平",
                "hiragana" => "あかびら",
                "katakana" => "アカビラ",
                "katakana_half" => "ｱｶﾋﾞﾗ",
                "romaji" => "akabira",
                "memo" => "",
                "latitude" => "43.554925",
                "altitude" => "142.048738",
            ]);
            
            Station::create([
                "id" => 247,
                "prefecture_id" => 1,
                "city_id" => 27,
                "street_id" => 2748,
                "name" => "茂尻",
                "hiragana" => "もしり",
                "katakana" => "モシリ",
                "katakana_half" => "ﾓｼﾘ",
                "romaji" => "moshiri",
                "memo" => "",
                "latitude" => "43.536954",
                "altitude" => "142.082181",
            ]);
            
            Station::create([
                "id" => 248,
                "prefecture_id" => 1,
                "city_id" => 5,
                "street_id" => 459,
                "name" => "平岸",
                "hiragana" => "ひらぎし",
                "katakana" => "ヒラギシ",
                "katakana_half" => "ﾋﾗｷﾞｼ",
                "romaji" => "hiragishi",
                "memo" => "根室本線",
                "latitude" => "43.541316",
                "altitude" => "142.125232",
            ]);
            
            Station::create([
                "id" => 249,
                "prefecture_id" => 1,
                "city_id" => 25,
                "street_id" => null,
                "name" => "芦別",
                "hiragana" => "あしべつ",
                "katakana" => "アシベツ",
                "katakana_half" => "ｱｼﾍﾞﾂ",
                "romaji" => "ashibetsu",
                "memo" => "",
                "latitude" => "43.516792",
                "altitude" => "142.184062",
            ]);
            
            Station::create([
                "id" => 250,
                "prefecture_id" => 1,
                "city_id" => 25,
                "street_id" => 2588,
                "name" => "上芦別",
                "hiragana" => "かみあしべつ",
                "katakana" => "カミアシベツ",
                "katakana_half" => "ｶﾐｱｼﾍﾞﾂ",
                "romaji" => "kamiashibetsu",
                "memo" => "",
                "latitude" => "43.488517",
                "altitude" => "142.211006",
            ]);
            
            Station::create([
                "id" => 251,
                "prefecture_id" => 1,
                "city_id" => 25,
                "street_id" => 2611,
                "name" => "野花南",
                "hiragana" => "のかなん",
                "katakana" => "ノカナン",
                "katakana_half" => "ﾉｶﾅﾝ",
                "romaji" => "nokanan",
                "memo" => "",
                "latitude" => "43.474437",
                "altitude" => "142.261668",
            ]);
            
            Station::create([
                "id" => 252,
                "prefecture_id" => 1,
                "city_id" => 38,
                "street_id" => 3356,
                "name" => "布部",
                "hiragana" => "ぬのべ",
                "katakana" => "ヌノベ",
                "katakana_half" => "ﾇﾉﾍﾞ",
                "romaji" => "nunobe",
                "memo" => "",
                "latitude" => "43.291959",
                "altitude" => "142.400554",
            ]);
            
            Station::create([
                "id" => 253,
                "prefecture_id" => 1,
                "city_id" => 38,
                "street_id" => 3382,
                "name" => "山部",
                "hiragana" => "やまべ",
                "katakana" => "ヤマベ",
                "katakana_half" => "ﾔﾏﾍﾞ",
                "romaji" => "yamabe",
                "memo" => "",
                "latitude" => "43.244686",
                "altitude" => "142.381503",
            ]);
            
            Station::create([
                "id" => 254,
                "prefecture_id" => 1,
                "city_id" => 106,
                "street_id" => 5366,
                "name" => "下金山",
                "hiragana" => "しもかなやま",
                "katakana" => "シモカナヤマ",
                "katakana_half" => "ｼﾓｶﾅﾔﾏ",
                "romaji" => "shimokanayama",
                "memo" => "",
                "latitude" => "43.197357",
                "altitude" => "142.415502",
            ]);
            
            Station::create([
                "id" => 255,
                "prefecture_id" => 1,
                "city_id" => 9,
                "street_id" => 720,
                "name" => "金山",
                "hiragana" => "かなやま",
                "katakana" => "カナヤマ",
                "katakana_half" => "ｶﾅﾔﾏ",
                "romaji" => "kanayama",
                "memo" => "北海道",
                "latitude" => "43.136030",
                "altitude" => "142.416310",
            ]);
            
            Station::create([
                "id" => 256,
                "prefecture_id" => 1,
                "city_id" => 106,
                "street_id" => 5368,
                "name" => "東鹿越",
                "hiragana" => "ひがししかごえ",
                "katakana" => "ヒガシシカゴエ",
                "katakana_half" => "ﾋｶﾞｼｼｶｺﾞｴ",
                "romaji" => "higashishikagoe",
                "memo" => "",
                "latitude" => "43.163946",
                "altitude" => "142.523411",
            ]);
            
            Station::create([
                "id" => 257,
                "prefecture_id" => 1,
                "city_id" => 106,
                "street_id" => 5350,
                "name" => "幾寅",
                "hiragana" => "いくとら",
                "katakana" => "イクトラ",
                "katakana_half" => "ｲｸﾄﾗ",
                "romaji" => "ikutora",
                "memo" => "",
                "latitude" => "43.161531",
                "altitude" => "142.569324",
            ]);
            
            Station::create([
                "id" => 258,
                "prefecture_id" => 1,
                "city_id" => 24,
                "street_id" => 2473,
                "name" => "落合",
                "hiragana" => "おちあい",
                "katakana" => "オチアイ",
                "katakana_half" => "ｵﾁｱｲ",
                "romaji" => "ochiai",
                "memo" => "北海道",
                "latitude" => "43.125008",
                "altitude" => "142.669040",
            ]);
            
            Station::create([
                "id" => 259,
                "prefecture_id" => 1,
                "city_id" => 177,
                "street_id" => null,
                "name" => "十勝清水",
                "hiragana" => "とかちしみず",
                "katakana" => "トカチシミズ",
                "katakana_half" => "ﾄｶﾁｼﾐｽﾞ",
                "romaji" => "tokachishimizu",
                "memo" => "",
                "latitude" => "43.012830",
                "altitude" => "142.879555",
            ]);
            
            Station::create([
                "id" => 260,
                "prefecture_id" => 1,
                "city_id" => 165,
                "street_id" => 6919,
                "name" => "羽帯",
                "hiragana" => "はおび",
                "katakana" => "ハオビ",
                "katakana_half" => "ﾊｵﾋﾞ",
                "romaji" => "haobi",
                "memo" => "",
                "latitude" => "42.957503",
                "altitude" => "142.906722",
            ]);
            
            Station::create([
                "id" => 261,
                "prefecture_id" => 1,
                "city_id" => 61,
                "street_id" => 4238,
                "name" => "御影",
                "hiragana" => "みかげ",
                "katakana" => "ミカゲ",
                "katakana_half" => "ﾐｶｹﾞ",
                "romaji" => "mikage",
                "memo" => "北海道",
                "latitude" => "42.942394",
                "altitude" => "142.935971",
            ]);
            
            Station::create([
                "id" => 262,
                "prefecture_id" => 1,
                "city_id" => 166,
                "street_id" => null,
                "name" => "芽室",
                "hiragana" => "めむろ",
                "katakana" => "メムロ",
                "katakana_half" => "ﾒﾑﾛ",
                "romaji" => "memuro",
                "memo" => "",
                "latitude" => "42.909760",
                "altitude" => "143.047907",
            ]);
            
            Station::create([
                "id" => 263,
                "prefecture_id" => 1,
                "city_id" => 22,
                "street_id" => 2364,
                "name" => "大成",
                "hiragana" => "たいせい",
                "katakana" => "タイセイ",
                "katakana_half" => "ﾀｲｾｲ",
                "romaji" => "taisei",
                "memo" => "北海道",
                "latitude" => "42.915566",
                "altitude" => "143.069516",
            ]);
            
            Station::create([
                "id" => 264,
                "prefecture_id" => 1,
                "city_id" => 7,
                "street_id" => null,
                "name" => "西帯広",
                "hiragana" => "にしおびひろ",
                "katakana" => "ニシオビヒロ",
                "katakana_half" => "ﾆｼｵﾋﾞﾋﾛ",
                "romaji" => "nishiobihiro",
                "memo" => "",
                "latitude" => "42.923900",
                "altitude" => "143.126178",
            ]);
            
            Station::create([
                "id" => 265,
                "prefecture_id" => 1,
                "city_id" => 16,
                "street_id" => 1731,
                "name" => "柏林台",
                "hiragana" => "はくりんだい",
                "katakana" => "ハクリンダイ",
                "katakana_half" => "ﾊｸﾘﾝﾀﾞｲ",
                "romaji" => "hakurindai",
                "memo" => "",
                "latitude" => "42.928900",
                "altitude" => "143.164508",
            ]);
            
            Station::create([
                "id" => 266,
                "prefecture_id" => 1,
                "city_id" => 16,
                "street_id" => null,
                "name" => "帯広",
                "hiragana" => "おびひろ",
                "katakana" => "オビヒロ",
                "katakana_half" => "ｵﾋﾞﾋﾛ",
                "romaji" => "obihiro",
                "memo" => "",
                "latitude" => "42.918068",
                "altitude" => "143.202005",
            ]);
            
            Station::create([
                "id" => 267,
                "prefecture_id" => 1,
                "city_id" => 167,
                "street_id" => null,
                "name" => "札内",
                "hiragana" => "さつない",
                "katakana" => "サツナイ",
                "katakana_half" => "ｻﾂﾅｲ",
                "romaji" => "satsunai",
                "memo" => "",
                "latitude" => "42.912709",
                "altitude" => "143.256250",
            ]);
            
            Station::create([
                "id" => 268,
                "prefecture_id" => 1,
                "city_id" => 171,
                "street_id" => null,
                "name" => "幕別",
                "hiragana" => "まくべつ",
                "katakana" => "マクベツ",
                "katakana_half" => "ﾏｸﾍﾞﾂ",
                "romaji" => "makubetsu",
                "memo" => "",
                "latitude" => "42.907960",
                "altitude" => "143.359493",
            ]);
            
            Station::create([
                "id" => 269,
                "prefecture_id" => 1,
                "city_id" => 14,
                "street_id" => 1425,
                "name" => "利別",
                "hiragana" => "としべつ",
                "katakana" => "トシベツ",
                "katakana_half" => "ﾄｼﾍﾞﾂ",
                "romaji" => "toshibetsu",
                "memo" => "",
                "latitude" => "42.934737",
                "altitude" => "143.424486",
            ]);
            
            Station::create([
                "id" => 270,
                "prefecture_id" => 1,
                "city_id" => 172,
                "street_id" => null,
                "name" => "池田",
                "hiragana" => "いけだ",
                "katakana" => "イケダ",
                "katakana_half" => "ｲｹﾀﾞ",
                "romaji" => "ikeda",
                "memo" => "北海道",
                "latitude" => "42.922239",
                "altitude" => "143.453095",
            ]);
            
            Station::create([
                "id" => 271,
                "prefecture_id" => 1,
                "city_id" => 173,
                "street_id" => 7320,
                "name" => "十弗",
                "hiragana" => "とおふつ",
                "katakana" => "トオフツ",
                "katakana_half" => "ﾄｵﾌﾂ",
                "romaji" => "toofutsu",
                "memo" => "",
                "latitude" => "42.855830",
                "altitude" => "143.500844",
            ]);
            
            Station::create([
                "id" => 272,
                "prefecture_id" => 1,
                "city_id" => 173,
                "street_id" => null,
                "name" => "豊頃",
                "hiragana" => "とよころ",
                "katakana" => "トヨコロ",
                "katakana_half" => "ﾄﾖｺﾛ",
                "romaji" => "toyokoro",
                "memo" => "",
                "latitude" => "42.817529",
                "altitude" => "143.538926",
            ]);
            
            Station::create([
                "id" => 273,
                "prefecture_id" => 1,
                "city_id" => 17,
                "street_id" => 1860,
                "name" => "新吉野",
                "hiragana" => "しんよしの",
                "katakana" => "シンヨシノ",
                "katakana_half" => "ｼﾝﾖｼﾉ",
                "romaji" => "shinyoshino",
                "memo" => "",
                "latitude" => "42.778285",
                "altitude" => "143.608310",
            ]);
            
            Station::create([
                "id" => 274,
                "prefecture_id" => 1,
                "city_id" => 177,
                "street_id" => null,
                "name" => "浦幌",
                "hiragana" => "うらほろ",
                "katakana" => "ウラホロ",
                "katakana_half" => "ｳﾗﾎﾛ",
                "romaji" => "urahoro",
                "memo" => "",
                "latitude" => "42.810504",
                "altitude" => "143.651500",
            ]);
            
            Station::create([
                "id" => 275,
                "prefecture_id" => 1,
                "city_id" => 177,
                "street_id" => 7477,
                "name" => "厚内",
                "hiragana" => "あつない",
                "katakana" => "アツナイ",
                "katakana_half" => "ｱﾂﾅｲ",
                "romaji" => "atsunai",
                "memo" => "",
                "latitude" => "42.809480",
                "altitude" => "143.814737",
            ]);
            
            Station::create([
                "id" => 276,
                "prefecture_id" => 1,
                "city_id" => 15,
                "street_id" => 1518,
                "name" => "直別",
                "hiragana" => "ちょくべつ",
                "katakana" => "チョクベツ",
                "katakana_half" => "ﾁｮｸﾍﾞﾂ",
                "romaji" => "chokubetsu",
                "memo" => "",
                "latitude" => "42.852254",
                "altitude" => "143.864176",
            ]);
            
            Station::create([
                "id" => 277,
                "prefecture_id" => 1,
                "city_id" => 15,
                "street_id" => 1515,
                "name" => "尺別",
                "hiragana" => "しゃくべつ",
                "katakana" => "シャクベツ",
                "katakana_half" => "ｼｬｸﾍﾞﾂ",
                "romaji" => "shakubetsu",
                "memo" => "",
                "latitude" => "42.868641",
                "altitude" => "143.903616",
            ]);
            
            Station::create([
                "id" => 278,
                "prefecture_id" => 1,
                "city_id" => 15,
                "street_id" => 1505,
                "name" => "音別",
                "hiragana" => "おんべつ",
                "katakana" => "オンベツ",
                "katakana_half" => "ｵﾝﾍﾞﾂ",
                "romaji" => "onbetsu",
                "memo" => "",
                "latitude" => "42.888945",
                "altitude" => "143.931946",
            ]);
            
            Station::create([
                "id" => 279,
                "prefecture_id" => 1,
                "city_id" => 50,
                "street_id" => null,
                "name" => "古瀬",
                "hiragana" => "ふるせ",
                "katakana" => "フルセ",
                "katakana_half" => "ﾌﾙｾ",
                "romaji" => "furuse",
                "memo" => "",
                "latitude" => "42.947857",
                "altitude" => "144.008520",
            ]);
            
            Station::create([
                "id" => 280,
                "prefecture_id" => 1,
                "city_id" => 184,
                "street_id" => null,
                "name" => "白糠",
                "hiragana" => "しらぬか",
                "katakana" => "シラヌカ",
                "katakana_half" => "ｼﾗﾇｶ",
                "romaji" => "shiranuka",
                "memo" => "",
                "latitude" => "42.956052",
                "altitude" => "144.076819",
            ]);
            
            Station::create([
                "id" => 281,
                "prefecture_id" => 1,
                "city_id" => 184,
                "street_id" => 7887,
                "name" => "西庶路",
                "hiragana" => "にししょろ",
                "katakana" => "ニシショロ",
                "katakana_half" => "ﾆｼｼｮﾛ",
                "romaji" => "nishishoro",
                "memo" => "",
                "latitude" => "42.976022",
                "altitude" => "144.129759",
            ]);
            
            Station::create([
                "id" => 282,
                "prefecture_id" => 1,
                "city_id" => 184,
                "street_id" => 7853,
                "name" => "庶路",
                "hiragana" => "しょろ",
                "katakana" => "ショロ",
                "katakana_half" => "ｼｮﾛ",
                "romaji" => "shoro",
                "memo" => "",
                "latitude" => "42.983466",
                "altitude" => "144.149951",
            ]);
            
            Station::create([
                "id" => 283,
                "prefecture_id" => 1,
                "city_id" => 15,
                "street_id" => 1501,
                "name" => "大楽毛",
                "hiragana" => "おたのしけ",
                "katakana" => "オタノシケ",
                "katakana_half" => "ｵﾀﾉｼｹ",
                "romaji" => "otanoshike",
                "memo" => "",
                "latitude" => "43.009188",
                "altitude" => "144.272746",
            ]);
            
            Station::create([
                "id" => 284,
                "prefecture_id" => 1,
                "city_id" => 15,
                "street_id" => 1501,
                "name" => "新大楽毛",
                "hiragana" => "しんおたのしけ",
                "katakana" => "シンオタノシケ",
                "katakana_half" => "ｼﾝｵﾀﾉｼｹ",
                "romaji" => "shinotanoshike",
                "memo" => "",
                "latitude" => "43.009299",
                "altitude" => "144.294771",
            ]);
            
            Station::create([
                "id" => 285,
                "prefecture_id" => 1,
                "city_id" => 15,
                "street_id" => 1572,
                "name" => "新富士",
                "hiragana" => "しんふじ",
                "katakana" => "シンフジ",
                "katakana_half" => "ｼﾝﾌｼﾞ",
                "romaji" => "shinfuji",
                "memo" => "北海道",
                "latitude" => "43.001634",
                "altitude" => "144.350850",
            ]);
            
            Station::create([
                "id" => 286,
                "prefecture_id" => 1,
                "city_id" => 15,
                "street_id" => null,
                "name" => "釧路",
                "hiragana" => "くしろ",
                "katakana" => "クシロ",
                "katakana_half" => "ｸｼﾛ",
                "romaji" => "kushiro",
                "memo" => "",
                "latitude" => "42.990581",
                "altitude" => "144.382098",
            ]);
            
            Station::create([
                "id" => 287,
                "prefecture_id" => 1,
                "city_id" => 3,
                "street_id" => null,
                "name" => "東釧路",
                "hiragana" => "ひがしくしろ",
                "katakana" => "ヒガシクシロ",
                "katakana_half" => "ﾋｶﾞｼｸｼﾛ",
                "romaji" => "higashikushiro",
                "memo" => "",
                "latitude" => "42.995192",
                "altitude" => "144.411540",
            ]);
            
            Station::create([
                "id" => 288,
                "prefecture_id" => 1,
                "city_id" => 15,
                "street_id" => 1622,
                "name" => "武佐",
                "hiragana" => "むさ",
                "katakana" => "ムサ",
                "katakana_half" => "ﾑｻ",
                "romaji" => "musa",
                "memo" => "北海道",
                "latitude" => "42.991693",
                "altitude" => "144.425789",
            ]);
            
            Station::create([
                "id" => 289,
                "prefecture_id" => 1,
                "city_id" => 178,
                "street_id" => 7546,
                "name" => "別保",
                "hiragana" => "べっぽ",
                "katakana" => "ベッポ",
                "katakana_half" => "ﾍﾞｯﾎﾟ",
                "romaji" => "beppo",
                "memo" => "",
                "latitude" => "42.994249",
                "altitude" => "144.469785",
            ]);
            
            Station::create([
                "id" => 290,
                "prefecture_id" => 1,
                "city_id" => 179,
                "street_id" => 7613,
                "name" => "上尾幌",
                "hiragana" => "かみおぼろ",
                "katakana" => "カミオボロ",
                "katakana_half" => "ｶﾐｵﾎﾞﾛ",
                "romaji" => "kamioboro",
                "memo" => "",
                "latitude" => "43.032969",
                "altitude" => "144.612382",
            ]);
            
            Station::create([
                "id" => 291,
                "prefecture_id" => 1,
                "city_id" => 179,
                "street_id" => 7611,
                "name" => "尾幌",
                "hiragana" => "おぼろ",
                "katakana" => "オボロ",
                "katakana_half" => "ｵﾎﾞﾛ",
                "romaji" => "oboro",
                "memo" => "",
                "latitude" => "43.018389",
                "altitude" => "144.703848",
            ]);
            
            Station::create([
                "id" => 292,
                "prefecture_id" => 1,
                "city_id" => 179,
                "street_id" => 7640,
                "name" => "門静",
                "hiragana" => "もんしず",
                "katakana" => "モンシズ",
                "katakana_half" => "ﾓﾝｼｽﾞ",
                "romaji" => "monshizu",
                "memo" => "",
                "latitude" => "43.057497",
                "altitude" => "144.782783",
            ]);
            
            Station::create([
                "id" => 293,
                "prefecture_id" => 1,
                "city_id" => 179,
                "street_id" => null,
                "name" => "厚岸",
                "hiragana" => "あっけし",
                "katakana" => "アッケシ",
                "katakana_half" => "ｱｯｹｼ",
                "romaji" => "akkeshi",
                "memo" => "",
                "latitude" => "43.056220",
                "altitude" => "144.841307",
            ]);
            
            Station::create([
                "id" => 294,
                "prefecture_id" => 1,
                "city_id" => 179,
                "street_id" => 7591,
                "name" => "糸魚沢",
                "hiragana" => "いといざわ",
                "katakana" => "イトイザワ",
                "katakana_half" => "ｲﾄｲｻﾞﾜ",
                "romaji" => "itoizawa",
                "memo" => "",
                "latitude" => "43.103634",
                "altitude" => "144.925743",
            ]);
            
            Station::create([
                "id" => 295,
                "prefecture_id" => 1,
                "city_id" => 180,
                "street_id" => 7682,
                "name" => "茶内",
                "hiragana" => "ちゃない",
                "katakana" => "チャナイ",
                "katakana_half" => "ﾁｬﾅｲ",
                "romaji" => "chanai",
                "memo" => "",
                "latitude" => "43.129328",
                "altitude" => "145.027899",
            ]);
            
            Station::create([
                "id" => 296,
                "prefecture_id" => 1,
                "city_id" => 180,
                "street_id" => null,
                "name" => "浜中",
                "hiragana" => "はまなか",
                "katakana" => "ハマナカ",
                "katakana_half" => "ﾊﾏﾅｶ",
                "romaji" => "hamanaka",
                "memo" => "",
                "latitude" => "43.157492",
                "altitude" => "145.099725",
            ]);
            
            Station::create([
                "id" => 297,
                "prefecture_id" => 1,
                "city_id" => 180,
                "street_id" => 7652,
                "name" => "姉別",
                "hiragana" => "あねべつ",
                "katakana" => "アネベツ",
                "katakana_half" => "ｱﾈﾍﾞﾂ",
                "romaji" => "anebetsu",
                "memo" => "",
                "latitude" => "43.196184",
                "altitude" => "145.194687",
            ]);
            
            Station::create([
                "id" => 298,
                "prefecture_id" => 1,
                "city_id" => 32,
                "street_id" => 3003,
                "name" => "厚床",
                "hiragana" => "あっとこ",
                "katakana" => "アットコ",
                "katakana_half" => "ｱｯﾄｺ",
                "romaji" => "attoko",
                "memo" => "",
                "latitude" => "43.228182",
                "altitude" => "145.252237",
            ]);
            
            Station::create([
                "id" => 299,
                "prefecture_id" => 1,
                "city_id" => 32,
                "street_id" => 3043,
                "name" => "初田牛",
                "hiragana" => "はったうし",
                "katakana" => "ハッタウシ",
                "katakana_half" => "ﾊｯﾀｳｼ",
                "romaji" => "hattaushi",
                "memo" => "",
                "latitude" => "43.204519",
                "altitude" => "145.322732",
            ]);
            
            Station::create([
                "id" => 300,
                "prefecture_id" => 1,
                "city_id" => 32,
                "street_id" => 3053,
                "name" => "別当賀",
                "hiragana" => "べっとが",
                "katakana" => "ベットガ",
                "katakana_half" => "ﾍﾞｯﾄｶﾞ",
                "romaji" => "bettoga",
                "memo" => "",
                "latitude" => "43.218353",
                "altitude" => "145.423751",
            ]);
            
            Station::create([
                "id" => 301,
                "prefecture_id" => 1,
                "city_id" => 28,
                "street_id" => 2767,
                "name" => "落石",
                "hiragana" => "おちいし",
                "katakana" => "オチイシ",
                "katakana_half" => "ｵﾁｲｼ",
                "romaji" => "ochiishi",
                "memo" => "",
                "latitude" => "43.198079",
                "altitude" => "145.519578",
            ]);
            
            Station::create([
                "id" => 302,
                "prefecture_id" => 1,
                "city_id" => 32,
                "street_id" => 3021,
                "name" => "昆布盛",
                "hiragana" => "こんぶもり",
                "katakana" => "コンブモリ",
                "katakana_half" => "ｺﾝﾌﾞﾓﾘ",
                "romaji" => "konbumori",
                "memo" => "",
                "latitude" => "43.228632",
                "altitude" => "145.542352",
            ]);
            
            Station::create([
                "id" => 303,
                "prefecture_id" => 1,
                "city_id" => 32,
                "street_id" => 3041,
                "name" => "西和田",
                "hiragana" => "にしわだ",
                "katakana" => "ニシワダ",
                "katakana_half" => "ﾆｼﾜﾀﾞ",
                "romaji" => "nishiwada",
                "memo" => "",
                "latitude" => "43.267905",
                "altitude" => "145.541934",
            ]);
            
            Station::create([
                "id" => 304,
                "prefecture_id" => 1,
                "city_id" => 3,
                "street_id" => null,
                "name" => "東根室",
                "hiragana" => "ひがしねむろ",
                "katakana" => "ヒガシネムロ",
                "katakana_half" => "ﾋｶﾞｼﾈﾑﾛ",
                "romaji" => "higashinemuro",
                "memo" => "",
                "latitude" => "43.323594",
                "altitude" => "145.597176",
            ]);
            
            Station::create([
                "id" => 305,
                "prefecture_id" => 1,
                "city_id" => 32,
                "street_id" => null,
                "name" => "根室",
                "hiragana" => "ねむろ",
                "katakana" => "ネムロ",
                "katakana_half" => "ﾈﾑﾛ",
                "romaji" => "nemuro",
                "memo" => "",
                "latitude" => "43.326733",
                "altitude" => "145.583094",
            ]);
            
            Station::create([
                "id" => 306,
                "prefecture_id" => 1,
                "city_id" => 13,
                "street_id" => null,
                "name" => "旭川四条",
                "hiragana" => "あさひかわよじょう",
                "katakana" => "アサヒカワヨジョウ",
                "katakana_half" => "ｱｻﾋｶﾜﾖｼﾞｮｳ",
                "romaji" => "asahikawayojou",
                "memo" => "",
                "latitude" => "43.764075",
                "altitude" => "142.375924",
            ]);
            
            Station::create([
                "id" => 307,
                "prefecture_id" => 1,
                "city_id" => 13,
                "street_id" => null,
                "name" => "新旭川",
                "hiragana" => "しんあさひかわ",
                "katakana" => "シンアサヒカワ",
                "katakana_half" => "ｼﾝｱｻﾋｶﾜ",
                "romaji" => "shinasahikawa",
                "memo" => "",
                "latitude" => "43.780156",
                "altitude" => "142.384700",
            ]);
            
            Station::create([
                "id" => 308,
                "prefecture_id" => 1,
                "city_id" => 13,
                "street_id" => 1240,
                "name" => "永山",
                "hiragana" => "ながやま",
                "katakana" => "ナガヤマ",
                "katakana_half" => "ﾅｶﾞﾔﾏ",
                "romaji" => "nagayama",
                "memo" => "",
                "latitude" => "43.814264",
                "altitude" => "142.434361",
            ]);
            
            Station::create([
                "id" => 309,
                "prefecture_id" => 1,
                "city_id" => 2,
                "street_id" => null,
                "name" => "北永山",
                "hiragana" => "きたながやま",
                "katakana" => "キタナガヤマ",
                "katakana_half" => "ｷﾀﾅｶﾞﾔﾏ",
                "romaji" => "kitanagayama",
                "memo" => "",
                "latitude" => "43.826847",
                "altitude" => "142.454526",
            ]);
            
            Station::create([
                "id" => 310,
                "prefecture_id" => 1,
                "city_id" => 6,
                "street_id" => null,
                "name" => "南比布",
                "hiragana" => "みなみぴっぷ",
                "katakana" => "ミナミピップ",
                "katakana_half" => "ﾐﾅﾐﾋﾟｯﾌﾟ",
                "romaji" => "minamipippu",
                "memo" => "",
                "latitude" => "43.853511",
                "altitude" => "142.467301",
            ]);
            
            Station::create([
                "id" => 311,
                "prefecture_id" => 1,
                "city_id" => 99,
                "street_id" => null,
                "name" => "比布",
                "hiragana" => "ぴっぷ",
                "katakana" => "ピップ",
                "katakana_half" => "ﾋﾟｯﾌﾟ",
                "romaji" => "pippu",
                "memo" => "",
                "latitude" => "43.874620",
                "altitude" => "142.471466",
            ]);
            
            Station::create([
                "id" => 312,
                "prefecture_id" => 1,
                "city_id" => 2,
                "street_id" => null,
                "name" => "北比布",
                "hiragana" => "きたぴっぷ",
                "katakana" => "キタピップ",
                "katakana_half" => "ｷﾀﾋﾟｯﾌﾟ",
                "romaji" => "kitapippu",
                "memo" => "",
                "latitude" => "43.901756",
                "altitude" => "142.476604",
            ]);
            
            Station::create([
                "id" => 313,
                "prefecture_id" => 1,
                "city_id" => 14,
                "street_id" => null,
                "name" => "蘭留",
                "hiragana" => "らんる",
                "katakana" => "ランル",
                "katakana_half" => "ﾗﾝﾙ",
                "romaji" => "ranru",
                "memo" => "",
                "latitude" => "43.924892",
                "altitude" => "142.473408",
            ]);
            
            Station::create([
                "id" => 314,
                "prefecture_id" => 1,
                "city_id" => 108,
                "street_id" => 5384,
                "name" => "塩狩",
                "hiragana" => "しおかり",
                "katakana" => "シオカリ",
                "katakana_half" => "ｼｵｶﾘ",
                "romaji" => "shiokari",
                "memo" => "",
                "latitude" => "43.968082",
                "altitude" => "142.454936",
            ]);
            
            Station::create([
                "id" => 315,
                "prefecture_id" => 1,
                "city_id" => 108,
                "street_id" => null,
                "name" => "和寒",
                "hiragana" => "わっさむ",
                "katakana" => "ワッサム",
                "katakana_half" => "ﾜｯｻﾑ",
                "romaji" => "wassamu",
                "memo" => "",
                "latitude" => "44.027380",
                "altitude" => "142.415353",
            ]);
            
            Station::create([
                "id" => 316,
                "prefecture_id" => 1,
                "city_id" => 16,
                "street_id" => 1747,
                "name" => "東六線",
                "hiragana" => "ひがしろくせん",
                "katakana" => "ヒガシロクセン",
                "katakana_half" => "ﾋｶﾞｼﾛｸｾﾝ",
                "romaji" => "higashirokusen",
                "memo" => "",
                "latitude" => "44.068487",
                "altitude" => "142.388409",
            ]);
            
            Station::create([
                "id" => 317,
                "prefecture_id" => 1,
                "city_id" => 109,
                "street_id" => null,
                "name" => "剣淵",
                "hiragana" => "けんぶち",
                "katakana" => "ケンブチ",
                "katakana_half" => "ｹﾝﾌﾞﾁ",
                "romaji" => "kenbuchi",
                "memo" => "",
                "latitude" => "44.096261",
                "altitude" => "142.364521",
            ]);
            
            Station::create([
                "id" => 318,
                "prefecture_id" => 1,
                "city_id" => 2,
                "street_id" => null,
                "name" => "北剣淵",
                "hiragana" => "きたけんぶち",
                "katakana" => "キタケンブチ",
                "katakana_half" => "ｷﾀｹﾝﾌﾞﾁ",
                "romaji" => "kitakenbuchi",
                "memo" => "",
                "latitude" => "44.139590",
                "altitude" => "142.378017",
            ]);
            
            Station::create([
                "id" => 319,
                "prefecture_id" => 1,
                "city_id" => 29,
                "street_id" => null,
                "name" => "士別",
                "hiragana" => "しべつ",
                "katakana" => "シベツ",
                "katakana_half" => "ｼﾍﾞﾂ",
                "romaji" => "shibetsu",
                "memo" => "",
                "latitude" => "44.172197",
                "altitude" => "142.387737",
            ]);
            
            Station::create([
                "id" => 320,
                "prefecture_id" => 1,
                "city_id" => 29,
                "street_id" => 2823,
                "name" => "下士別",
                "hiragana" => "しもしべつ",
                "katakana" => "シモシベツ",
                "katakana_half" => "ｼﾓｼﾍﾞﾂ",
                "romaji" => "shimoshibetsu",
                "memo" => "",
                "latitude" => "44.210304",
                "altitude" => "142.396484",
            ]);
            
            Station::create([
                "id" => 321,
                "prefecture_id" => 1,
                "city_id" => 29,
                "street_id" => 2825,
                "name" => "多寄",
                "hiragana" => "たよろ",
                "katakana" => "タヨロ",
                "katakana_half" => "ﾀﾖﾛ",
                "romaji" => "tayoro",
                "memo" => "",
                "latitude" => "44.241218",
                "altitude" => "142.396317",
            ]);
            
            Station::create([
                "id" => 322,
                "prefecture_id" => 1,
                "city_id" => 13,
                "street_id" => 1294,
                "name" => "瑞穂",
                "hiragana" => "みずほ",
                "katakana" => "ミズホ",
                "katakana_half" => "ﾐｽﾞﾎ",
                "romaji" => "mizuho",
                "memo" => "",
                "latitude" => "44.266521",
                "altitude" => "142.396455",
            ]);
            
            Station::create([
                "id" => 323,
                "prefecture_id" => 1,
                "city_id" => 15,
                "street_id" => 1528,
                "name" => "風連",
                "hiragana" => "ふうれん",
                "katakana" => "フウレン",
                "katakana_half" => "ﾌｳﾚﾝ",
                "romaji" => "fuuren",
                "memo" => "",
                "latitude" => "44.292352",
                "altitude" => "142.421729",
            ]);
            
            Station::create([
                "id" => 324,
                "prefecture_id" => 1,
                "city_id" => 30,
                "street_id" => 2934,
                "name" => "東風連",
                "hiragana" => "ひがしふうれん",
                "katakana" => "ヒガシフウレン",
                "katakana_half" => "ﾋｶﾞｼﾌｳﾚﾝ",
                "romaji" => "higashifuuren",
                "memo" => "",
                "latitude" => "44.316795",
                "altitude" => "142.463113",
            ]);
            
            Station::create([
                "id" => 325,
                "prefecture_id" => 1,
                "city_id" => 30,
                "street_id" => null,
                "name" => "名寄",
                "hiragana" => "なよろ",
                "katakana" => "ナヨロ",
                "katakana_half" => "ﾅﾖﾛ",
                "romaji" => "nayoro",
                "memo" => "",
                "latitude" => "44.349235",
                "altitude" => "142.465445",
            ]);
            
            Station::create([
                "id" => 326,
                "prefecture_id" => 1,
                "city_id" => 30,
                "street_id" => 2906,
                "name" => "日進",
                "hiragana" => "にっしん",
                "katakana" => "ニッシン",
                "katakana_half" => "ﾆｯｼﾝ",
                "romaji" => "nisshin",
                "memo" => "北海道",
                "latitude" => "44.381788",
                "altitude" => "142.467277",
            ]);
            
            Station::create([
                "id" => 327,
                "prefecture_id" => 1,
                "city_id" => 22,
                "street_id" => 2391,
                "name" => "北星",
                "hiragana" => "ほくせい",
                "katakana" => "ホクセイ",
                "katakana_half" => "ﾎｸｾｲ",
                "romaji" => "hokusei",
                "memo" => "",
                "latitude" => "44.441558",
                "altitude" => "142.427888",
            ]);
            
            Station::create([
                "id" => 328,
                "prefecture_id" => 1,
                "city_id" => 30,
                "street_id" => 2873,
                "name" => "智恵文",
                "hiragana" => "ちえぶん",
                "katakana" => "チエブン",
                "katakana_half" => "ﾁｴﾌﾞﾝ",
                "romaji" => "chiebun",
                "memo" => "",
                "latitude" => "44.455112",
                "altitude" => "142.415055",
            ]);
            
            Station::create([
                "id" => 329,
                "prefecture_id" => 1,
                "city_id" => 30,
                "street_id" => 2873,
                "name" => "智北",
                "hiragana" => "ちほく",
                "katakana" => "チホク",
                "katakana_half" => "ﾁﾎｸ",
                "romaji" => "chihoku",
                "memo" => "",
                "latitude" => "44.461223",
                "altitude" => "142.394501",
            ]);
            
            Station::create([
                "id" => 330,
                "prefecture_id" => 1,
                "city_id" => 24,
                "street_id" => 2565,
                "name" => "南美深",
                "hiragana" => "みなみびふか",
                "katakana" => "ミナミビフカ",
                "katakana_half" => "ﾐﾅﾐﾋﾞﾌｶ",
                "romaji" => "minamibifuka",
                "memo" => "",
                "latitude" => "44.462333",
                "altitude" => "142.368392",
            ]);
            
            Station::create([
                "id" => 331,
                "prefecture_id" => 1,
                "city_id" => 111,
                "street_id" => null,
                "name" => "美深",
                "hiragana" => "びふか",
                "katakana" => "ビフカ",
                "katakana_half" => "ﾋﾞﾌｶ",
                "romaji" => "bifuka",
                "memo" => "",
                "latitude" => "44.483164",
                "altitude" => "142.350615",
            ]);
            
            Station::create([
                "id" => 332,
                "prefecture_id" => 1,
                "city_id" => 119,
                "street_id" => null,
                "name" => "初野",
                "hiragana" => "はつの",
                "katakana" => "ハツノ",
                "katakana_half" => "ﾊﾂﾉ",
                "romaji" => "hatsuno",
                "memo" => "",
                "latitude" => "44.512605",
                "altitude" => "142.336170",
            ]);
            
            Station::create([
                "id" => 333,
                "prefecture_id" => 1,
                "city_id" => 111,
                "street_id" => 5466,
                "name" => "紋穂内",
                "hiragana" => "もんぽない",
                "katakana" => "モンポナイ",
                "katakana_half" => "ﾓﾝﾎﾟﾅｲ",
                "romaji" => "monponai",
                "memo" => "",
                "latitude" => "44.539546",
                "altitude" => "142.333392",
            ]);
            
            Station::create([
                "id" => 334,
                "prefecture_id" => 1,
                "city_id" => 111,
                "street_id" => 5432,
                "name" => "恩根内",
                "hiragana" => "おんねない",
                "katakana" => "オンネナイ",
                "katakana_half" => "ｵﾝﾈﾅｲ",
                "romaji" => "onnenai",
                "memo" => "",
                "latitude" => "44.598456",
                "altitude" => "142.309224",
            ]);
            
            Station::create([
                "id" => 335,
                "prefecture_id" => 1,
                "city_id" => 5,
                "street_id" => null,
                "name" => "豊清水",
                "hiragana" => "とよしみず",
                "katakana" => "トヨシミズ",
                "katakana_half" => "ﾄﾖｼﾐｽﾞ",
                "romaji" => "toyoshimizu",
                "memo" => "",
                "latitude" => "44.639478",
                "altitude" => "142.270253",
            ]);
            
            Station::create([
                "id" => 336,
                "prefecture_id" => 1,
                "city_id" => 120,
                "street_id" => null,
                "name" => "天塩川温泉",
                "hiragana" => "てしおがわおんせん",
                "katakana" => "テシオガワオンセン",
                "katakana_half" => "ﾃｼｵｶﾞﾜｵﾝｾﾝ",
                "romaji" => "teshiogawaonsen",
                "memo" => "",
                "latitude" => "44.665365",
                "altitude" => "142.258670",
            ]);
            
            Station::create([
                "id" => 337,
                "prefecture_id" => 1,
                "city_id" => 112,
                "street_id" => 5472,
                "name" => "咲来",
                "hiragana" => "さっくる",
                "katakana" => "サックル",
                "katakana_half" => "ｻｯｸﾙ",
                "romaji" => "sakkuru",
                "memo" => "",
                "latitude" => "44.692862",
                "altitude" => "142.267557",
            ]);
            
            Station::create([
                "id" => 338,
                "prefecture_id" => 1,
                "city_id" => 112,
                "street_id" => null,
                "name" => "音威子府",
                "hiragana" => "おといねっぷ",
                "katakana" => "オトイネップ",
                "katakana_half" => "ｵﾄｲﾈｯﾌﾟ",
                "romaji" => "otoineppu",
                "memo" => "",
                "latitude" => "44.729525",
                "altitude" => "142.259778",
            ]);
            
            Station::create([
                "id" => 339,
                "prefecture_id" => 1,
                "city_id" => 1,
                "street_id" => null,
                "name" => "筬島",
                "hiragana" => "おさしま",
                "katakana" => "オサシマ",
                "katakana_half" => "ｵｻｼﾏ",
                "romaji" => "osashima",
                "memo" => "",
                "latitude" => "44.738689",
                "altitude" => "142.197838",
            ]);
            
            Station::create([
                "id" => 340,
                "prefecture_id" => 1,
                "city_id" => 113,
                "street_id" => 5479,
                "name" => "佐久",
                "hiragana" => "さく",
                "katakana" => "サク",
                "katakana_half" => "ｻｸ",
                "romaji" => "saku",
                "memo" => "",
                "latitude" => "44.743686",
                "altitude" => "142.048961",
            ]);
            
            Station::create([
                "id" => 341,
                "prefecture_id" => 1,
                "city_id" => 120,
                "street_id" => null,
                "name" => "天塩中川",
                "hiragana" => "てしおなかがわ",
                "katakana" => "テシオナカガワ",
                "katakana_half" => "ﾃｼｵﾅｶｶﾞﾜ",
                "romaji" => "teshionakagawa",
                "memo" => "",
                "latitude" => "44.811929",
                "altitude" => "142.075372",
            ]);
            
            Station::create([
                "id" => 342,
                "prefecture_id" => 1,
                "city_id" => 113,
                "street_id" => 5474,
                "name" => "歌内",
                "hiragana" => "うたない",
                "katakana" => "ウタナイ",
                "katakana_half" => "ｳﾀﾅｲ",
                "romaji" => "utanai",
                "memo" => "",
                "latitude" => "44.880366",
                "altitude" => "142.052232",
            ]);
            
            Station::create([
                "id" => 343,
                "prefecture_id" => 1,
                "city_id" => 130,
                "street_id" => 5850,
                "name" => "問寒別",
                "hiragana" => "といかんべつ",
                "katakana" => "トイカンベツ",
                "katakana_half" => "ﾄｲｶﾝﾍﾞﾂ",
                "romaji" => "toikanbetsu",
                "memo" => "",
                "latitude" => "44.912279",
                "altitude" => "142.025345",
            ]);
            
            Station::create([
                "id" => 344,
                "prefecture_id" => 1,
                "city_id" => 184,
                "street_id" => null,
                "name" => "糠南",
                "hiragana" => "ぬかなん",
                "katakana" => "ヌカナン",
                "katakana_half" => "ﾇｶﾅﾝ",
                "romaji" => "nukanan",
                "memo" => "",
                "latitude" => "44.921166",
                "altitude" => "142.001180",
            ]);
            
            Station::create([
                "id" => 345,
                "prefecture_id" => 1,
                "city_id" => 121,
                "street_id" => 5658,
                "name" => "雄信内",
                "hiragana" => "おのっぷない",
                "katakana" => "オノップナイ",
                "katakana_half" => "ｵﾉｯﾌﾟﾅｲ",
                "romaji" => "onoppunai",
                "memo" => "",
                "latitude" => "44.911777",
                "altitude" => "141.936046",
            ]);
            
            Station::create([
                "id" => 346,
                "prefecture_id" => 1,
                "city_id" => 72,
                "street_id" => null,
                "name" => "安牛",
                "hiragana" => "やすうし",
                "katakana" => "ヤスウシ",
                "katakana_half" => "ﾔｽｳｼ",
                "romaji" => "yasuushi",
                "memo" => "",
                "latitude" => "44.949773",
                "altitude" => "141.894243",
            ]);
            
            Station::create([
                "id" => 347,
                "prefecture_id" => 1,
                "city_id" => 82,
                "street_id" => null,
                "name" => "南幌延",
                "hiragana" => "みなみほろのべ",
                "katakana" => "ミナミホロノベ",
                "katakana_half" => "ﾐﾅﾐﾎﾛﾉﾍﾞ",
                "romaji" => "minamihoronobe",
                "memo" => "",
                "latitude" => "44.965326",
                "altitude" => "141.884798",
            ]);
            
            Station::create([
                "id" => 348,
                "prefecture_id" => 1,
                "city_id" => 130,
                "street_id" => 5847,
                "name" => "上幌延",
                "hiragana" => "かみほろのべ",
                "katakana" => "カミホロノベ",
                "katakana_half" => "ｶﾐﾎﾛﾉﾍﾞ",
                "romaji" => "kamihoronobe",
                "memo" => "",
                "latitude" => "44.985823",
                "altitude" => "141.881019",
            ]);
            
            Station::create([
                "id" => 349,
                "prefecture_id" => 1,
                "city_id" => 130,
                "street_id" => null,
                "name" => "幌延",
                "hiragana" => "ほろのべ",
                "katakana" => "ホロノベ",
                "katakana_half" => "ﾎﾛﾉﾍﾞ",
                "romaji" => "horonobe",
                "memo" => "",
                "latitude" => "45.014209",
                "altitude" => "141.846188",
            ]);
            
            Station::create([
                "id" => 350,
                "prefecture_id" => 1,
                "city_id" => 130,
                "street_id" => 5849,
                "name" => "下沼",
                "hiragana" => "しもぬま",
                "katakana" => "シモヌマ",
                "katakana_half" => "ｼﾓﾇﾏ",
                "romaji" => "shimonuma",
                "memo" => "",
                "latitude" => "45.037204",
                "altitude" => "141.758166",
            ]);
            
            Station::create([
                "id" => 351,
                "prefecture_id" => 1,
                "city_id" => 126,
                "street_id" => null,
                "name" => "豊富",
                "hiragana" => "とよとみ",
                "katakana" => "トヨトミ",
                "katakana_half" => "ﾄﾖﾄﾐ",
                "romaji" => "toyotomi",
                "memo" => "",
                "latitude" => "45.104726",
                "altitude" => "141.772051",
            ]);
            
            Station::create([
                "id" => 352,
                "prefecture_id" => 1,
                "city_id" => 126,
                "street_id" => 5805,
                "name" => "徳満",
                "hiragana" => "とくみつ",
                "katakana" => "トクミツ",
                "katakana_half" => "ﾄｸﾐﾂ",
                "romaji" => "tokumitsu",
                "memo" => "",
                "latitude" => "45.145583",
                "altitude" => "141.750912",
            ]);
            
            Station::create([
                "id" => 353,
                "prefecture_id" => 1,
                "city_id" => 126,
                "street_id" => 5799,
                "name" => "兜沼",
                "hiragana" => "かぶとぬま",
                "katakana" => "カブトヌマ",
                "katakana_half" => "ｶﾌﾞﾄﾇﾏ",
                "romaji" => "kabutonuma",
                "memo" => "",
                "latitude" => "45.220239",
                "altitude" => "141.697107",
            ]);
            
            Station::create([
                "id" => 354,
                "prefecture_id" => 1,
                "city_id" => 23,
                "street_id" => 2458,
                "name" => "勇知",
                "hiragana" => "ゆうち",
                "katakana" => "ユウチ",
                "katakana_half" => "ﾕｳﾁ",
                "romaji" => "yuuchi",
                "memo" => "",
                "latitude" => "45.259180",
                "altitude" => "141.685357",
            ]);
            
            Station::create([
                "id" => 355,
                "prefecture_id" => 1,
                "city_id" => 23,
                "street_id" => 2458,
                "name" => "抜海",
                "hiragana" => "ばっかい",
                "katakana" => "バッカイ",
                "katakana_half" => "ﾊﾞｯｶｲ",
                "romaji" => "bakkai",
                "memo" => "",
                "latitude" => "45.316674",
                "altitude" => "141.644802",
            ]);
            
            Station::create([
                "id" => 356,
                "prefecture_id" => 1,
                "city_id" => 6,
                "street_id" => null,
                "name" => "南稚内",
                "hiragana" => "みなみわっかない",
                "katakana" => "ミナミワッカナイ",
                "katakana_half" => "ﾐﾅﾐﾜｯｶﾅｲ",
                "romaji" => "minamiwakkanai",
                "memo" => "",
                "latitude" => "45.398054",
                "altitude" => "141.682851",
            ]);
            
            Station::create([
                "id" => 357,
                "prefecture_id" => 1,
                "city_id" => 23,
                "street_id" => null,
                "name" => "稚内",
                "hiragana" => "わっかない",
                "katakana" => "ワッカナイ",
                "katakana_half" => "ﾜｯｶﾅｲ",
                "romaji" => "wakkanai",
                "memo" => "",
                "latitude" => "45.416386",
                "altitude" => "141.677295",
            ]);
            
            Station::create([
                "id" => 358,
                "prefecture_id" => 1,
                "city_id" => 115,
                "street_id" => 5536,
                "name" => "南永山",
                "hiragana" => "みなみながやま",
                "katakana" => "ミナミナガヤマ",
                "katakana_half" => "ﾐﾅﾐﾅｶﾞﾔﾏ",
                "romaji" => "minaminagayama",
                "memo" => "",
                "latitude" => "43.780601",
                "altitude" => "142.408559",
            ]);
            
            Station::create([
                "id" => 359,
                "prefecture_id" => 1,
                "city_id" => 13,
                "street_id" => 1279,
                "name" => "東旭川",
                "hiragana" => "ひがしあさひかわ",
                "katakana" => "ヒガシアサヒカワ",
                "katakana_half" => "ﾋｶﾞｼｱｻﾋｶﾜ",
                "romaji" => "higashiasahikawa",
                "memo" => "",
                "latitude" => "43.776491",
                "altitude" => "142.441556",
            ]);
            
            Station::create([
                "id" => 360,
                "prefecture_id" => 1,
                "city_id" => 2,
                "street_id" => null,
                "name" => "北日ノ出",
                "hiragana" => "きたひので",
                "katakana" => "キタヒノデ",
                "katakana_half" => "ｷﾀﾋﾉﾃﾞ",
                "romaji" => "kitahinode",
                "memo" => "",
                "latitude" => "43.781934",
                "altitude" => "142.466193",
            ]);
            
            Station::create([
                "id" => 361,
                "prefecture_id" => 1,
                "city_id" => 13,
                "street_id" => 1287,
                "name" => "桜岡",
                "hiragana" => "さくらおか",
                "katakana" => "サクラオカ",
                "katakana_half" => "ｻｸﾗｵｶ",
                "romaji" => "sakuraoka",
                "memo" => "",
                "latitude" => "43.801767",
                "altitude" => "142.486802",
            ]);
            
            Station::create([
                "id" => 362,
                "prefecture_id" => 1,
                "city_id" => 98,
                "street_id" => null,
                "name" => "当麻",
                "hiragana" => "とうま",
                "katakana" => "トウマ",
                "katakana_half" => "ﾄｳﾏ",
                "romaji" => "touma",
                "memo" => "",
                "latitude" => "43.825542",
                "altitude" => "142.516882",
            ]);
            
            Station::create([
                "id" => 363,
                "prefecture_id" => 1,
                "city_id" => 1,
                "street_id" => null,
                "name" => "将軍山",
                "hiragana" => "しょうぐんざん",
                "katakana" => "ショウグンザン",
                "katakana_half" => "ｼｮｳｸﾞﾝｻﾞﾝ",
                "romaji" => "shougunzan",
                "memo" => "",
                "latitude" => "43.857400",
                "altitude" => "142.521713",
            ]);
            
            Station::create([
                "id" => 364,
                "prefecture_id" => 1,
                "city_id" => 98,
                "street_id" => 5049,
                "name" => "伊香牛",
                "hiragana" => "いかうし",
                "katakana" => "イカウシ",
                "katakana_half" => "ｲｶｳｼ",
                "romaji" => "ikaushi",
                "memo" => "",
                "latitude" => "43.875898",
                "altitude" => "142.525212",
            ]);
            
            Station::create([
                "id" => 365,
                "prefecture_id" => 1,
                "city_id" => 100,
                "street_id" => null,
                "name" => "愛別",
                "hiragana" => "あいべつ",
                "katakana" => "アイベツ",
                "katakana_half" => "ｱｲﾍﾞﾂ",
                "romaji" => "aibetsu",
                "memo" => "",
                "latitude" => "43.898647",
                "altitude" => "142.582067",
            ]);
            
            Station::create([
                "id" => 366,
                "prefecture_id" => 1,
                "city_id" => 1,
                "street_id" => null,
                "name" => "中愛別",
                "hiragana" => "なかあいべつ",
                "katakana" => "ナカアイベツ",
                "katakana_half" => "ﾅｶｱｲﾍﾞﾂ",
                "romaji" => "nakaaibetsu",
                "memo" => "",
                "latitude" => "43.896259",
                "altitude" => "142.655589",
            ]);
            
            Station::create([
                "id" => 367,
                "prefecture_id" => 1,
                "city_id" => 100,
                "street_id" => 5093,
                "name" => "愛山",
                "hiragana" => "あいざん",
                "katakana" => "アイザン",
                "katakana_half" => "ｱｲｻﾞﾝ",
                "romaji" => "aizan",
                "memo" => "",
                "latitude" => "43.866291",
                "altitude" => "142.680894",
            ]);
            
            Station::create([
                "id" => 368,
                "prefecture_id" => 1,
                "city_id" => 72,
                "street_id" => null,
                "name" => "安足間",
                "hiragana" => "あんたろま",
                "katakana" => "アンタロマ",
                "katakana_half" => "ｱﾝﾀﾛﾏ",
                "romaji" => "antaroma",
                "memo" => "",
                "latitude" => "43.852070",
                "altitude" => "142.693754",
            ]);
            
            Station::create([
                "id" => 369,
                "prefecture_id" => 1,
                "city_id" => 11,
                "street_id" => 886,
                "name" => "東雲",
                "hiragana" => "とううん",
                "katakana" => "トウウン",
                "katakana_half" => "ﾄｳｳﾝ",
                "romaji" => "touun",
                "memo" => "北海道",
                "latitude" => "43.843627",
                "altitude" => "142.716669",
            ]);
            
            Station::create([
                "id" => 370,
                "prefecture_id" => 1,
                "city_id" => 96,
                "street_id" => null,
                "name" => "上川",
                "hiragana" => "かみかわ",
                "katakana" => "カミカワ",
                "katakana_half" => "ｶﾐｶﾜ",
                "romaji" => "kamikawa",
                "memo" => "",
                "latitude" => "43.848489",
                "altitude" => "142.766832",
            ]);
            
            Station::create([
                "id" => 371,
                "prefecture_id" => 1,
                "city_id" => 139,
                "street_id" => 6131,
                "name" => "白滝",
                "hiragana" => "しらたき",
                "katakana" => "シラタキ",
                "katakana_half" => "ｼﾗﾀｷ",
                "romaji" => "shirataki",
                "memo" => "",
                "latitude" => "43.884548",
                "altitude" => "143.181073",
            ]);
            
            Station::create([
                "id" => 372,
                "prefecture_id" => 1,
                "city_id" => 139,
                "street_id" => 6156,
                "name" => "丸瀬布",
                "hiragana" => "まるせっぷ",
                "katakana" => "マルセップ",
                "katakana_half" => "ﾏﾙｾｯﾌﾟ",
                "romaji" => "maruseppu",
                "memo" => "",
                "latitude" => "44.006315",
                "altitude" => "143.335777",
            ]);
            
            Station::create([
                "id" => 373,
                "prefecture_id" => 1,
                "city_id" => 139,
                "street_id" => 6146,
                "name" => "瀬戸瀬",
                "hiragana" => "せとせ",
                "katakana" => "セトセ",
                "katakana_half" => "ｾﾄｾ",
                "romaji" => "setose",
                "memo" => "",
                "latitude" => "44.008789",
                "altitude" => "143.421104",
            ]);
            
            Station::create([
                "id" => 374,
                "prefecture_id" => 1,
                "city_id" => 139,
                "street_id" => null,
                "name" => "遠軽",
                "hiragana" => "えんがる",
                "katakana" => "エンガル",
                "katakana_half" => "ｴﾝｶﾞﾙ",
                "romaji" => "engaru",
                "memo" => "",
                "latitude" => "44.059923",
                "altitude" => "143.520260",
            ]);
            
            Station::create([
                "id" => 375,
                "prefecture_id" => 1,
                "city_id" => 139,
                "street_id" => 6126,
                "name" => "安国",
                "hiragana" => "やすくに",
                "katakana" => "ヤスクニ",
                "katakana_half" => "ﾔｽｸﾆ",
                "romaji" => "yasukuni",
                "memo" => "",
                "latitude" => "43.993431",
                "altitude" => "143.535899",
            ]);
            
            Station::create([
                "id" => 376,
                "prefecture_id" => 1,
                "city_id" => 2,
                "street_id" => 96,
                "name" => "生野",
                "hiragana" => "いくの",
                "katakana" => "イクノ",
                "katakana_half" => "ｲｸﾉ",
                "romaji" => "ikuno",
                "memo" => "北海道",
                "latitude" => "43.959907",
                "altitude" => "143.532763",
            ]);
            
            Station::create([
                "id" => 377,
                "prefecture_id" => 1,
                "city_id" => 139,
                "street_id" => 6118,
                "name" => "生田原",
                "hiragana" => "いくたはら",
                "katakana" => "イクタハラ",
                "katakana_half" => "ｲｸﾀﾊﾗ",
                "romaji" => "ikutahara",
                "memo" => "",
                "latitude" => "43.923800",
                "altitude" => "143.534709",
            ]);
            
            Station::create([
                "id" => 378,
                "prefecture_id" => 1,
                "city_id" => 7,
                "street_id" => null,
                "name" => "西留辺蘂",
                "hiragana" => "にしるべしべ",
                "katakana" => "ニシルベシベ",
                "katakana_half" => "ﾆｼﾙﾍﾞｼﾍﾞ",
                "romaji" => "nishirubeshibe",
                "memo" => "",
                "latitude" => "43.785371",
                "altitude" => "143.603348",
            ]);
            
            Station::create([
                "id" => 379,
                "prefecture_id" => 1,
                "city_id" => 17,
                "street_id" => 1904,
                "name" => "留辺蘂",
                "hiragana" => "るべしべ",
                "katakana" => "ルベシベ",
                "katakana_half" => "ﾙﾍﾞｼﾍﾞ",
                "romaji" => "rubeshibe",
                "memo" => "",
                "latitude" => "43.785288",
                "altitude" => "143.622430",
            ]);
            
            Station::create([
                "id" => 380,
                "prefecture_id" => 1,
                "city_id" => 17,
                "street_id" => 1775,
                "name" => "相内",
                "hiragana" => "あいのない",
                "katakana" => "アイノナイ",
                "katakana_half" => "ｱｲﾉﾅｲ",
                "romaji" => "ainonai",
                "memo" => "",
                "latitude" => "43.796040",
                "altitude" => "143.755530",
            ]);
            
            Station::create([
                "id" => 381,
                "prefecture_id" => 1,
                "city_id" => 17,
                "street_id" => 1875,
                "name" => "東相内",
                "hiragana" => "ひがしあいのない",
                "katakana" => "ヒガシアイノナイ",
                "katakana_half" => "ﾋｶﾞｼｱｲﾉﾅｲ",
                "romaji" => "higashiainonai",
                "memo" => "",
                "latitude" => "43.805289",
                "altitude" => "143.810080",
            ]);
            
            Station::create([
                "id" => 382,
                "prefecture_id" => 1,
                "city_id" => 7,
                "street_id" => null,
                "name" => "西北見",
                "hiragana" => "にしきたみ",
                "katakana" => "ニシキタミ",
                "katakana_half" => "ﾆｼｷﾀﾐ",
                "romaji" => "nishikitami",
                "memo" => "",
                "latitude" => "43.803096",
                "altitude" => "143.842189",
            ]);
            
            Station::create([
                "id" => 383,
                "prefecture_id" => 1,
                "city_id" => 17,
                "street_id" => null,
                "name" => "北見",
                "hiragana" => "きたみ",
                "katakana" => "キタミ",
                "katakana_half" => "ｷﾀﾐ",
                "romaji" => "kitami",
                "memo" => "",
                "latitude" => "43.804902",
                "altitude" => "143.897934",
            ]);
            
            Station::create([
                "id" => 384,
                "prefecture_id" => 1,
                "city_id" => 17,
                "street_id" => 1872,
                "name" => "柏陽",
                "hiragana" => "はくよう",
                "katakana" => "ハクヨウ",
                "katakana_half" => "ﾊｸﾖｳ",
                "romaji" => "hakuyou",
                "memo" => "",
                "latitude" => "43.824373",
                "altitude" => "143.916349",
            ]);
            
            Station::create([
                "id" => 385,
                "prefecture_id" => 1,
                "city_id" => 100,
                "street_id" => null,
                "name" => "愛し野",
                "hiragana" => "いとしの",
                "katakana" => "イトシノ",
                "katakana_half" => "ｲﾄｼﾉ",
                "romaji" => "itoshino",
                "memo" => "",
                "latitude" => "43.841316",
                "altitude" => "143.932735",
            ]);
            
            Station::create([
                "id" => 386,
                "prefecture_id" => 1,
                "city_id" => 17,
                "street_id" => 1834,
                "name" => "端野",
                "hiragana" => "たんの",
                "katakana" => "タンノ",
                "katakana_half" => "ﾀﾝﾉ",
                "romaji" => "tanno",
                "memo" => "",
                "latitude" => "43.851064",
                "altitude" => "143.942373",
            ]);
            
            Station::create([
                "id" => 387,
                "prefecture_id" => 1,
                "city_id" => 17,
                "street_id" => 1842,
                "name" => "緋牛内",
                "hiragana" => "ひうしない",
                "katakana" => "ヒウシナイ",
                "katakana_half" => "ﾋｳｼﾅｲ",
                "romaji" => "hiushinai",
                "memo" => "",
                "latitude" => "43.880423",
                "altitude" => "143.999395",
            ]);
            
            Station::create([
                "id" => 388,
                "prefecture_id" => 1,
                "city_id" => 131,
                "street_id" => null,
                "name" => "美幌",
                "hiragana" => "びほろ",
                "katakana" => "ビホロ",
                "katakana_half" => "ﾋﾞﾎﾛ",
                "romaji" => "bihoro",
                "memo" => "",
                "latitude" => "43.836541",
                "altitude" => "144.105888",
            ]);
            
            Station::create([
                "id" => 389,
                "prefecture_id" => 1,
                "city_id" => 7,
                "street_id" => null,
                "name" => "西女満別",
                "hiragana" => "にしめまんべつ",
                "katakana" => "ニシメマンベツ",
                "katakana_half" => "ﾆｼﾒﾏﾝﾍﾞﾂ",
                "romaji" => "nishimemanbetsu",
                "memo" => "",
                "latitude" => "43.879982",
                "altitude" => "144.148410",
            ]);
            
            Station::create([
                "id" => 390,
                "prefecture_id" => 1,
                "city_id" => 145,
                "street_id" => 6302,
                "name" => "女満別",
                "hiragana" => "めまんべつ",
                "katakana" => "メマンベツ",
                "katakana_half" => "ﾒﾏﾝﾍﾞﾂ",
                "romaji" => "memanbetsu",
                "memo" => "",
                "latitude" => "43.915951",
                "altitude" => "144.171101",
            ]);
            
            Station::create([
                "id" => 391,
                "prefecture_id" => 1,
                "city_id" => 20,
                "street_id" => 2265,
                "name" => "呼人",
                "hiragana" => "よびと",
                "katakana" => "ヨビト",
                "katakana_half" => "ﾖﾋﾞﾄ",
                "romaji" => "yobito",
                "memo" => "",
                "latitude" => "43.963557",
                "altitude" => "144.219067",
            ]);
            
            Station::create([
                "id" => 392,
                "prefecture_id" => 1,
                "city_id" => 20,
                "street_id" => null,
                "name" => "網走",
                "hiragana" => "あばしり",
                "katakana" => "アバシリ",
                "katakana_half" => "ｱﾊﾞｼﾘ",
                "romaji" => "abashiri",
                "memo" => "",
                "latitude" => "44.019913",
                "altitude" => "144.254450",
            ]);
            
            Station::create([
                "id" => 393,
                "prefecture_id" => 1,
                "city_id" => 67,
                "street_id" => 4387,
                "name" => "桂台",
                "hiragana" => "かつらだい",
                "katakana" => "カツラダイ",
                "katakana_half" => "ｶﾂﾗﾀﾞｲ",
                "romaji" => "katsuradai",
                "memo" => "",
                "latitude" => "44.017080",
                "altitude" => "144.273143",
            ]);
            
            Station::create([
                "id" => 394,
                "prefecture_id" => 1,
                "city_id" => 20,
                "street_id" => 2231,
                "name" => "鱒浦",
                "hiragana" => "ますうら",
                "katakana" => "マスウラ",
                "katakana_half" => "ﾏｽｳﾗ",
                "romaji" => "masuura",
                "memo" => "",
                "latitude" => "43.983056",
                "altitude" => "144.296504",
            ]);
            
            Station::create([
                "id" => 395,
                "prefecture_id" => 1,
                "city_id" => 20,
                "street_id" => 2262,
                "name" => "藻琴",
                "hiragana" => "もこと",
                "katakana" => "モコト",
                "katakana_half" => "ﾓｺﾄ",
                "romaji" => "mokoto",
                "memo" => "",
                "latitude" => "43.968253",
                "altitude" => "144.320197",
            ]);
            
            Station::create([
                "id" => 396,
                "prefecture_id" => 1,
                "city_id" => 11,
                "street_id" => 877,
                "name" => "北浜",
                "hiragana" => "きたはま",
                "katakana" => "キタハマ",
                "katakana_half" => "ｷﾀﾊﾏ",
                "romaji" => "kitahama",
                "memo" => "北海道",
                "latitude" => "43.958560",
                "altitude" => "144.352889",
            ]);
            
            Station::create([
                "id" => 397,
                "prefecture_id" => 1,
                "city_id" => 2,
                "street_id" => 231,
                "name" => "原生花園",
                "hiragana" => "げんせいかえん",
                "katakana" => "ゲンセイカエン",
                "katakana_half" => "ｹﾞﾝｾｲｶｴﾝ",
                "romaji" => "genseikaen",
                "memo" => "",
                "latitude" => "43.940813",
                "altitude" => "144.415273",
            ]);
            
            Station::create([
                "id" => 398,
                "prefecture_id" => 1,
                "city_id" => 135,
                "street_id" => 6016,
                "name" => "浜小清水",
                "hiragana" => "はまこしみず",
                "katakana" => "ハマコシミズ",
                "katakana_half" => "ﾊﾏｺｼﾐｽﾞ",
                "romaji" => "hamakoshimizu",
                "memo" => "",
                "latitude" => "43.933870",
                "altitude" => "144.453048",
            ]);
            
            Station::create([
                "id" => 399,
                "prefecture_id" => 1,
                "city_id" => 135,
                "street_id" => 6024,
                "name" => "止別",
                "hiragana" => "やむべつ",
                "katakana" => "ヤムベツ",
                "katakana_half" => "ﾔﾑﾍﾞﾂ",
                "romaji" => "yamubetsu",
                "memo" => "",
                "latitude" => "43.921456",
                "altitude" => "144.520044",
            ]);
            
            Station::create([
                "id" => 400,
                "prefecture_id" => 1,
                "city_id" => 188,
                "street_id" => 8176,
                "name" => "知床斜里",
                "hiragana" => "しれとこしゃり",
                "katakana" => "シレトコシャリ",
                "katakana_half" => "ｼﾚﾄｺｼｬﾘ",
                "romaji" => "shiretokoshari",
                "memo" => "",
                "latitude" => "43.910765",
                "altitude" => "144.661561",
            ]);
            
            Station::create([
                "id" => 401,
                "prefecture_id" => 1,
                "city_id" => 133,
                "street_id" => 5979,
                "name" => "中斜里",
                "hiragana" => "なかしゃり",
                "katakana" => "ナカシャリ",
                "katakana_half" => "ﾅｶｼｬﾘ",
                "romaji" => "nakashari",
                "memo" => "",
                "latitude" => "43.874463",
                "altitude" => "144.658867",
            ]);
            
            Station::create([
                "id" => 402,
                "prefecture_id" => 1,
                "city_id" => 6,
                "street_id" => null,
                "name" => "南斜里",
                "hiragana" => "みなみしゃり",
                "katakana" => "ミナミシャリ",
                "katakana_half" => "ﾐﾅﾐｼｬﾘ",
                "romaji" => "minamishari",
                "memo" => "",
                "latitude" => "43.867353",
                "altitude" => "144.634120",
            ]);
            
            Station::create([
                "id" => 403,
                "prefecture_id" => 1,
                "city_id" => 134,
                "street_id" => null,
                "name" => "清里町",
                "hiragana" => "きよさとちょう",
                "katakana" => "キヨサトチョウ",
                "katakana_half" => "ｷﾖｻﾄﾁｮｳ",
                "romaji" => "kiyosatochou",
                "memo" => "",
                "latitude" => "43.838466",
                "altitude" => "144.593708",
            ]);
            
            Station::create([
                "id" => 404,
                "prefecture_id" => 1,
                "city_id" => 134,
                "street_id" => 6001,
                "name" => "札弦",
                "hiragana" => "さっつる",
                "katakana" => "サッツル",
                "katakana_half" => "ｻｯﾂﾙ",
                "romaji" => "sattsuru",
                "memo" => "",
                "latitude" => "43.786359",
                "altitude" => "144.531327",
            ]);
            
            Station::create([
                "id" => 405,
                "prefecture_id" => 1,
                "city_id" => 6,
                "street_id" => 551,
                "name" => "緑",
                "hiragana" => "みどり",
                "katakana" => "ミドリ",
                "katakana_half" => "ﾐﾄﾞﾘ",
                "romaji" => "midori",
                "memo" => "",
                "latitude" => "43.718116",
                "altitude" => "144.505332",
            ]);
            
            Station::create([
                "id" => 406,
                "prefecture_id" => 1,
                "city_id" => 182,
                "street_id" => 7796,
                "name" => "川湯温泉",
                "hiragana" => "かわゆおんせん",
                "katakana" => "カワユオンセン",
                "katakana_half" => "ｶﾜﾕｵﾝｾﾝ",
                "romaji" => "kawayuonsen",
                "memo" => "",
                "latitude" => "43.616182",
                "altitude" => "144.457674",
            ]);
            
            Station::create([
                "id" => 407,
                "prefecture_id" => 1,
                "city_id" => 182,
                "street_id" => 7813,
                "name" => "美留和",
                "hiragana" => "びるわ",
                "katakana" => "ビルワ",
                "katakana_half" => "ﾋﾞﾙﾜ",
                "romaji" => "biruwa",
                "memo" => "",
                "latitude" => "43.555132",
                "altitude" => "144.437650",
            ]);
            
            Station::create([
                "id" => 408,
                "prefecture_id" => 1,
                "city_id" => 182,
                "street_id" => 7816,
                "name" => "摩周",
                "hiragana" => "ましゅう",
                "katakana" => "マシュウ",
                "katakana_half" => "ﾏｼｭｳ",
                "romaji" => "mashuu",
                "memo" => "",
                "latitude" => "43.487390",
                "altitude" => "144.464040",
            ]);
            
            Station::create([
                "id" => 409,
                "prefecture_id" => 1,
                "city_id" => 182,
                "street_id" => 7818,
                "name" => "南弟子屈",
                "hiragana" => "みなみてしかが",
                "katakana" => "ミナミテシカガ",
                "katakana_half" => "ﾐﾅﾐﾃｼｶｶﾞ",
                "romaji" => "minamiteshikaga",
                "memo" => "",
                "latitude" => "43.428592",
                "altitude" => "144.514651",
            ]);
            
            Station::create([
                "id" => 410,
                "prefecture_id" => 1,
                "city_id" => 181,
                "street_id" => 7725,
                "name" => "磯分内",
                "hiragana" => "いそぶんない",
                "katakana" => "イソブンナイ",
                "katakana_half" => "ｲｿﾌﾞﾝﾅｲ",
                "romaji" => "isobunnai",
                "memo" => "",
                "latitude" => "43.379514",
                "altitude" => "144.554149",
            ]);
            
            Station::create([
                "id" => 411,
                "prefecture_id" => 1,
                "city_id" => 181,
                "street_id" => null,
                "name" => "標茶",
                "hiragana" => "しべちゃ",
                "katakana" => "シベチャ",
                "katakana_half" => "ｼﾍﾞﾁｬ",
                "romaji" => "shibecha",
                "memo" => "",
                "latitude" => "43.298330",
                "altitude" => "144.608342",
            ]);
            
            Station::create([
                "id" => 412,
                "prefecture_id" => 1,
                "city_id" => 75,
                "street_id" => 4555,
                "name" => "茅沼",
                "hiragana" => "かやぬま",
                "katakana" => "カヤヌマ",
                "katakana_half" => "ｶﾔﾇﾏ",
                "romaji" => "kayanuma",
                "memo" => "",
                "latitude" => "43.202060",
                "altitude" => "144.503745",
            ]);
            
            Station::create([
                "id" => 413,
                "prefecture_id" => 1,
                "city_id" => 181,
                "street_id" => 7763,
                "name" => "塘路",
                "hiragana" => "とうろ",
                "katakana" => "トウロ",
                "katakana_half" => "ﾄｳﾛ",
                "romaji" => "touro",
                "memo" => "",
                "latitude" => "43.151760",
                "altitude" => "144.496720",
            ]);
            
            Station::create([
                "id" => 414,
                "prefecture_id" => 1,
                "city_id" => 178,
                "street_id" => 7582,
                "name" => "細岡",
                "hiragana" => "ほそおか",
                "katakana" => "ホソオカ",
                "katakana_half" => "ﾎｿｵｶ",
                "romaji" => "hosooka",
                "memo" => "",
                "latitude" => "43.104931",
                "altitude" => "144.469586",
            ]);
            
            Station::create([
                "id" => 415,
                "prefecture_id" => 1,
                "city_id" => 15,
                "street_id" => null,
                "name" => "釧路湿原",
                "hiragana" => "くしろしつげん",
                "katakana" => "クシロシツゲン",
                "katakana_half" => "ｸｼﾛｼﾂｹﾞﾝ",
                "romaji" => "kushiroshitsugen",
                "memo" => "",
                "latitude" => "43.100571",
                "altitude" => "144.448005",
            ]);
            
            Station::create([
                "id" => 416,
                "prefecture_id" => 1,
                "city_id" => 178,
                "street_id" => 7567,
                "name" => "遠矢",
                "hiragana" => "とおや",
                "katakana" => "トオヤ",
                "katakana_half" => "ﾄｵﾔ",
                "romaji" => "tooya",
                "memo" => "",
                "latitude" => "43.047409",
                "altitude" => "144.458117",
            ]);
            
            Station::create([
                "id" => 417,
                "prefecture_id" => 1,
                "city_id" => 50,
                "street_id" => null,
                "name" => "木古内",
                "hiragana" => "きこない",
                "katakana" => "キコナイ",
                "katakana_half" => "ｷｺﾅｲ",
                "romaji" => "kikonai",
                "memo" => "",
                "latitude" => "41.677541",
                "altitude" => "140.433792",
            ]);
            
            Station::create([
                "id" => 418,
                "prefecture_id" => 1,
                "city_id" => 2,
                "street_id" => 96,
                "name" => "麻生",
                "hiragana" => "あさぶ",
                "katakana" => "アサブ",
                "katakana_half" => "ｱｻﾌﾞ",
                "romaji" => "asabu",
                "memo" => "",
                "latitude" => "43.108349",
                "altitude" => "141.338401",
            ]);
            
            Station::create([
                "id" => 419,
                "prefecture_id" => 1,
                "city_id" => 13,
                "street_id" => 1057,
                "name" => "北３４条",
                "hiragana" => "きたさんじゅうよじょう",
                "katakana" => "キタサンジュウヨジョウ",
                "katakana_half" => "ｷﾀｻﾝｼﾞｭｳﾖｼﾞｮｳ",
                "romaji" => "kitasanjuuyojou",
                "memo" => "",
                "latitude" => "43.100182",
                "altitude" => "141.342123",
            ]);
            
            Station::create([
                "id" => 420,
                "prefecture_id" => 1,
                "city_id" => 13,
                "street_id" => 1056,
                "name" => "北２４条",
                "hiragana" => "きたにじゅうよじょう",
                "katakana" => "キタニジュウヨジョウ",
                "katakana_half" => "ｷﾀﾆｼﾞｭｳﾖｼﾞｮｳ",
                "romaji" => "kitanijuuyojou",
                "memo" => "",
                "latitude" => "43.089850",
                "altitude" => "141.344791",
            ]);
            
            Station::create([
                "id" => 421,
                "prefecture_id" => 1,
                "city_id" => 13,
                "street_id" => 1254,
                "name" => "北１８条",
                "hiragana" => "きたじゅうはちじょう",
                "katakana" => "キタジュウハチジョウ",
                "katakana_half" => "ｷﾀｼﾞｭｳﾊﾁｼﾞｮｳ",
                "romaji" => "kitajuuhachijou",
                "memo" => "",
                "latitude" => "43.081712",
                "altitude" => "141.346762",
            ]);
            
            Station::create([
                "id" => 422,
                "prefecture_id" => 1,
                "city_id" => 99,
                "street_id" => 5079,
                "name" => "北１２条",
                "hiragana" => "きたじゅうにじょう",
                "katakana" => "キタジュウニジョウ",
                "katakana_half" => "ｷﾀｼﾞｭｳﾆｼﾞｮｳ",
                "romaji" => "kitajuunijou",
                "memo" => "",
                "latitude" => "43.074825",
                "altitude" => "141.348457",
            ]);
            
            Station::create([
                "id" => 423,
                "prefecture_id" => 1,
                "city_id" => 26,
                "street_id" => 2632,
                "name" => "さっぽろ",
                "hiragana" => "さっぽろ",
                "katakana" => "サッポロ",
                "katakana_half" => "ｻｯﾎﾟﾛ",
                "romaji" => "sapporo",
                "memo" => "",
                "latitude" => "43.066186",
                "altitude" => "141.350680",
            ]);
            
            Station::create([
                "id" => 424,
                "prefecture_id" => 1,
                "city_id" => 1,
                "street_id" => 3,
                "name" => "大通",
                "hiragana" => "おおどおり",
                "katakana" => "オオドオリ",
                "katakana_half" => "ｵｵﾄﾞｵﾘ",
                "romaji" => "oodoori",
                "memo" => "",
                "latitude" => "43.059965",
                "altitude" => "141.352152",
            ]);
            
            Station::create([
                "id" => 425,
                "prefecture_id" => 1,
                "city_id" => 22,
                "street_id" => 2381,
                "name" => "すすきの",
                "hiragana" => "すすきの",
                "katakana" => "ススキノ",
                "katakana_half" => "ｽｽｷﾉ",
                "romaji" => "susukino",
                "memo" => "",
                "latitude" => "43.055577",
                "altitude" => "141.352763",
            ]);
            
            Station::create([
                "id" => 426,
                "prefecture_id" => 1,
                "city_id" => 1,
                "street_id" => 39,
                "name" => "中島公園",
                "hiragana" => "なかじまこうえん",
                "katakana" => "ナカジマコウエン",
                "katakana_half" => "ﾅｶｼﾞﾏｺｳｴﾝ",
                "romaji" => "nakajimakouen",
                "memo" => "",
                "latitude" => "43.048521",
                "altitude" => "141.355013",
            ]);
            
            Station::create([
                "id" => 427,
                "prefecture_id" => 1,
                "city_id" => 1,
                "street_id" => null,
                "name" => "幌平橋",
                "hiragana" => "ほろひらばし",
                "katakana" => "ホロヒラバシ",
                "katakana_half" => "ﾎﾛﾋﾗﾊﾞｼ",
                "romaji" => "horohirabashi",
                "memo" => "",
                "latitude" => "43.040272",
                "altitude" => "141.355903",
            ]);
            
            Station::create([
                "id" => 428,
                "prefecture_id" => 1,
                "city_id" => 5,
                "street_id" => 450,
                "name" => "中の島",
                "hiragana" => "なかのしま",
                "katakana" => "ナカノシマ",
                "katakana_half" => "ﾅｶﾉｼﾏ",
                "romaji" => "nakanoshima",
                "memo" => "",
                "latitude" => "43.037550",
                "altitude" => "141.361069",
            ]);
            
            Station::create([
                "id" => 429,
                "prefecture_id" => 1,
                "city_id" => 6,
                "street_id" => null,
                "name" => "南平岸",
                "hiragana" => "みなみひらぎし",
                "katakana" => "ミナミヒラギシ",
                "katakana_half" => "ﾐﾅﾐﾋﾗｷﾞｼ",
                "romaji" => "minamihiragishi",
                "memo" => "",
                "latitude" => "43.026802",
                "altitude" => "141.371374",
            ]);
            
            Station::create([
                "id" => 430,
                "prefecture_id" => 1,
                "city_id" => 6,
                "street_id" => 514,
                "name" => "澄川",
                "hiragana" => "すみかわ",
                "katakana" => "スミカワ",
                "katakana_half" => "ｽﾐｶﾜ",
                "romaji" => "sumikawa",
                "memo" => "",
                "latitude" => "43.016858",
                "altitude" => "141.367374",
            ]);
            
            Station::create([
                "id" => 431,
                "prefecture_id" => 1,
                "city_id" => 16,
                "street_id" => 1664,
                "name" => "自衛隊前",
                "hiragana" => "じえいたいまえ",
                "katakana" => "ジエイタイマエ",
                "katakana_half" => "ｼﾞｴｲﾀｲﾏｴ",
                "romaji" => "jieitaimae",
                "memo" => "",
                "latitude" => "43.005999",
                "altitude" => "141.364903",
            ]);
            
            Station::create([
                "id" => 432,
                "prefecture_id" => 1,
                "city_id" => 6,
                "street_id" => 542,
                "name" => "真駒内",
                "hiragana" => "まこまない",
                "katakana" => "マコマナイ",
                "katakana_half" => "ﾏｺﾏﾅｲ",
                "romaji" => "makomanai",
                "memo" => "",
                "latitude" => "42.991250",
                "altitude" => "141.358571",
            ]);
            
            Station::create([
                "id" => 433,
                "prefecture_id" => 1,
                "city_id" => 7,
                "street_id" => 649,
                "name" => "宮の沢",
                "hiragana" => "みやのさわ",
                "katakana" => "ミヤノサワ",
                "katakana_half" => "ﾐﾔﾉｻﾜ",
                "romaji" => "miyanosawa",
                "memo" => "",
                "latitude" => "43.090377",
                "altitude" => "141.276463",
            ]);
            
            Station::create([
                "id" => 434,
                "prefecture_id" => 1,
                "city_id" => 7,
                "street_id" => 627,
                "name" => "発寒南",
                "hiragana" => "はっさむみなみ",
                "katakana" => "ハッサムミナミ",
                "katakana_half" => "ﾊｯｻﾑﾐﾅﾐ",
                "romaji" => "hassamuminami",
                "memo" => "",
                "latitude" => "43.081767",
                "altitude" => "141.289796",
            ]);
            
            Station::create([
                "id" => 435,
                "prefecture_id" => 1,
                "city_id" => 7,
                "street_id" => 603,
                "name" => "二十四軒",
                "hiragana" => "にじゅうよんけん",
                "katakana" => "ニジュウヨンケン",
                "katakana_half" => "ﾆｼﾞｭｳﾖﾝｹﾝ",
                "romaji" => "nijuuyonken",
                "memo" => "",
                "latitude" => "43.070463",
                "altitude" => "141.313461",
            ]);
            
            Station::create([
                "id" => 436,
                "prefecture_id" => 1,
                "city_id" => 38,
                "street_id" => 3400,
                "name" => "西２８丁目",
                "hiragana" => "にしにじゅうはっちょうめ",
                "katakana" => "ニシニジュウハッチョウメ",
                "katakana_half" => "ﾆｼﾆｼﾞｭｳﾊｯﾁｮｳﾒ",
                "romaji" => "nishinijuuhacchoume",
                "memo" => "",
                "latitude" => "43.060992",
                "altitude" => "141.314544",
            ]);
            
            Station::create([
                "id" => 437,
                "prefecture_id" => 1,
                "city_id" => 1,
                "street_id" => 43,
                "name" => "円山公園",
                "hiragana" => "まるやまこうえん",
                "katakana" => "マルヤマコウエン",
                "katakana_half" => "ﾏﾙﾔﾏｺｳｴﾝ",
                "romaji" => "maruyamakouen",
                "memo" => "",
                "latitude" => "43.055854",
                "altitude" => "141.319239",
            ]);
            
            Station::create([
                "id" => 438,
                "prefecture_id" => 1,
                "city_id" => 38,
                "street_id" => 3390,
                "name" => "西１８丁目",
                "hiragana" => "にしじゅうはっちょうめ",
                "katakana" => "ニシジュウハッチョウメ",
                "katakana_half" => "ﾆｼｼﾞｭｳﾊｯﾁｮｳﾒ",
                "romaji" => "nishijuuhacchoume",
                "memo" => "",
                "latitude" => "43.057270",
                "altitude" => "141.330292",
            ]);
            
            Station::create([
                "id" => 439,
                "prefecture_id" => 1,
                "city_id" => 86,
                "street_id" => 4750,
                "name" => "西１１丁目",
                "hiragana" => "にしじゅういっちょうめ",
                "katakana" => "ニシジュウイッチョウメ",
                "katakana_half" => "ﾆｼｼﾞｭｳｲｯﾁｮｳﾒ",
                "romaji" => "nishijuuicchoume",
                "memo" => "",
                "latitude" => "43.058798",
                "altitude" => "141.341292",
            ]);
            
            Station::create([
                "id" => 440,
                "prefecture_id" => 1,
                "city_id" => 23,
                "street_id" => 2460,
                "name" => "バスセンター前",
                "hiragana" => "ばすせんたーまえ",
                "katakana" => "バスセンターマエ",
                "katakana_half" => "ﾊﾞｽｾﾝﾀｰﾏｴ",
                "romaji" => "basusentaｰmae",
                "memo" => "",
                "latitude" => "43.061687",
                "altitude" => "141.361846",
            ]);
            
            Station::create([
                "id" => 441,
                "prefecture_id" => 1,
                "city_id" => 4,
                "street_id" => 368,
                "name" => "菊水",
                "hiragana" => "きくすい",
                "katakana" => "キクスイ",
                "katakana_half" => "ｷｸｽｲ",
                "romaji" => "kikusui",
                "memo" => "",
                "latitude" => "43.057132",
                "altitude" => "141.372511",
            ]);
            
            Station::create([
                "id" => 442,
                "prefecture_id" => 1,
                "city_id" => 4,
                "street_id" => 408,
                "name" => "東札幌",
                "hiragana" => "ひがしさっぽろ",
                "katakana" => "ヒガシサッポロ",
                "katakana_half" => "ﾋｶﾞｼｻｯﾎﾟﾛ",
                "romaji" => "higashisapporo",
                "memo" => "",
                "latitude" => "43.051716",
                "altitude" => "141.384733",
            ]);
            
            Station::create([
                "id" => 443,
                "prefecture_id" => 1,
                "city_id" => 4,
                "street_id" => 406,
                "name" => "南郷７丁目",
                "hiragana" => "なんごうななちょうめ",
                "katakana" => "ナンゴウナナチョウメ",
                "katakana_half" => "ﾅﾝｺﾞｳﾅﾅﾁｮｳﾒ",
                "romaji" => "nangounanachoume",
                "memo" => "",
                "latitude" => "43.040412",
                "altitude" => "141.410731",
            ]);
            
            Station::create([
                "id" => 444,
                "prefecture_id" => 1,
                "city_id" => 4,
                "street_id" => 406,
                "name" => "南郷１３丁目",
                "hiragana" => "なんごうじゅうさんちょうめ",
                "katakana" => "ナンゴウジュウサンチョウメ",
                "katakana_half" => "ﾅﾝｺﾞｳｼﾞｭｳｻﾝﾁｮｳﾒ",
                "romaji" => "nangoujuusanchoume",
                "memo" => "",
                "latitude" => "43.035830",
                "altitude" => "141.422591",
            ]);
            
            Station::create([
                "id" => 445,
                "prefecture_id" => 1,
                "city_id" => 4,
                "street_id" => 406,
                "name" => "南郷１８丁目",
                "hiragana" => "なんごうじゅうはっちょうめ",
                "katakana" => "ナンゴウジュウハッチョウメ",
                "katakana_half" => "ﾅﾝｺﾞｳｼﾞｭｳﾊｯﾁｮｳﾒ",
                "romaji" => "nangoujuuhacchoume",
                "memo" => "",
                "latitude" => "43.030275",
                "altitude" => "141.434952",
            ]);
            
            Station::create([
                "id" => 446,
                "prefecture_id" => 1,
                "city_id" => 8,
                "street_id" => 691,
                "name" => "大谷地",
                "hiragana" => "おおやち",
                "katakana" => "オオヤチ",
                "katakana_half" => "ｵｵﾔﾁ",
                "romaji" => "ooyachi",
                "memo" => "",
                "latitude" => "43.027775",
                "altitude" => "141.453006",
            ]);
            
            Station::create([
                "id" => 447,
                "prefecture_id" => 1,
                "city_id" => 159,
                "street_id" => null,
                "name" => "ひばりが丘",
                "hiragana" => "ひばりがおか",
                "katakana" => "ヒバリガオカ",
                "katakana_half" => "ﾋﾊﾞﾘｶﾞｵｶ",
                "romaji" => "hibarigaoka",
                "memo" => "北海道",
                "latitude" => "43.032054",
                "altitude" => "141.464367",
            ]);
            
            Station::create([
                "id" => 448,
                "prefecture_id" => 1,
                "city_id" => 26,
                "street_id" => 2632,
                "name" => "新さっぽろ",
                "hiragana" => "しんさっぽろ",
                "katakana" => "シンサッポロ",
                "katakana_half" => "ｼﾝｻｯﾎﾟﾛ",
                "romaji" => "shinsapporo",
                "memo" => "",
                "latitude" => "43.039163",
                "altitude" => "141.473949",
            ]);
            
            Station::create([
                "id" => 449,
                "prefecture_id" => 1,
                "city_id" => 3,
                "street_id" => 293,
                "name" => "栄町",
                "hiragana" => "さかえまち",
                "katakana" => "サカエマチ",
                "katakana_half" => "ｻｶｴﾏﾁ",
                "romaji" => "sakaemachi",
                "memo" => "北海道",
                "latitude" => "43.113015",
                "altitude" => "141.367092",
            ]);
            
            Station::create([
                "id" => 450,
                "prefecture_id" => 1,
                "city_id" => 11,
                "street_id" => 933,
                "name" => "新道東",
                "hiragana" => "しんどうひがし",
                "katakana" => "シンドウヒガシ",
                "katakana_half" => "ｼﾝﾄﾞｳﾋｶﾞｼ",
                "romaji" => "shindouhigashi",
                "memo" => "",
                "latitude" => "43.104738",
                "altitude" => "141.369149",
            ]);
            
            Station::create([
                "id" => 451,
                "prefecture_id" => 1,
                "city_id" => 4,
                "street_id" => 381,
                "name" => "元町",
                "hiragana" => "もとまち",
                "katakana" => "モトマチ",
                "katakana_half" => "ﾓﾄﾏﾁ",
                "romaji" => "motomachi",
                "memo" => "北海道",
                "latitude" => "43.094184",
                "altitude" => "141.371760",
            ]);
            
            Station::create([
                "id" => 452,
                "prefecture_id" => 1,
                "city_id" => 1,
                "street_id" => null,
                "name" => "環状通東",
                "hiragana" => "かんじょうどおりひがし",
                "katakana" => "カンジョウドオリヒガシ",
                "katakana_half" => "ｶﾝｼﾞｮｳﾄﾞｵﾘﾋｶﾞｼ",
                "romaji" => "kanjoudoorihigashi",
                "memo" => "",
                "latitude" => "43.082296",
                "altitude" => "141.374399",
            ]);
            
            Station::create([
                "id" => 453,
                "prefecture_id" => 1,
                "city_id" => 3,
                "street_id" => null,
                "name" => "東区役所前",
                "hiragana" => "ひがしくやくしょまえ",
                "katakana" => "ヒガシクヤクショマエ",
                "katakana_half" => "ﾋｶﾞｼｸﾔｸｼｮﾏｴ",
                "romaji" => "higashikuyakushomae",
                "memo" => "",
                "latitude" => "43.078324",
                "altitude" => "141.365289",
            ]);
            
            Station::create([
                "id" => 454,
                "prefecture_id" => 1,
                "city_id" => 99,
                "street_id" => 5080,
                "name" => "北１３条東",
                "hiragana" => "きたじゅうさんじょうひがし",
                "katakana" => "キタジュウサンジョウヒガシ",
                "katakana_half" => "ｷﾀｼﾞｭｳｻﾝｼﾞｮｳﾋｶﾞｼ",
                "romaji" => "kitajuusanjouhigashi",
                "memo" => "",
                "latitude" => "43.076908",
                "altitude" => "141.354929",
            ]);
            
            Station::create([
                "id" => 455,
                "prefecture_id" => 1,
                "city_id" => 5,
                "street_id" => null,
                "name" => "豊水すすきの",
                "hiragana" => "ほうすいすすきの",
                "katakana" => "ホウスイススキノ",
                "katakana_half" => "ﾎｳｽｲｽｽｷﾉ",
                "romaji" => "housuisusukino",
                "memo" => "",
                "latitude" => "43.054188",
                "altitude" => "141.356957",
            ]);
            
            Station::create([
                "id" => 456,
                "prefecture_id" => 1,
                "city_id" => 90,
                "street_id" => 4878,
                "name" => "学園前",
                "hiragana" => "がくえんまえ",
                "katakana" => "ガクエンマエ",
                "katakana_half" => "ｶﾞｸｴﾝﾏｴ",
                "romaji" => "gakuenmae",
                "memo" => "北海道",
                "latitude" => "43.047439",
                "altitude" => "141.368957",
            ]);
            
            Station::create([
                "id" => 457,
                "prefecture_id" => 1,
                "city_id" => 5,
                "street_id" => null,
                "name" => "豊平公園",
                "hiragana" => "とよひらこうえん",
                "katakana" => "トヨヒラコウエン",
                "katakana_half" => "ﾄﾖﾋﾗｺｳｴﾝ",
                "romaji" => "toyohirakouen",
                "memo" => "",
                "latitude" => "43.042245",
                "altitude" => "141.375818",
            ]);
            
            Station::create([
                "id" => 458,
                "prefecture_id" => 1,
                "city_id" => 5,
                "street_id" => 470,
                "name" => "美園",
                "hiragana" => "みその",
                "katakana" => "ミソノ",
                "katakana_half" => "ﾐｿﾉ",
                "romaji" => "misono",
                "memo" => "",
                "latitude" => "43.036246",
                "altitude" => "141.385539",
            ]);
            
            Station::create([
                "id" => 459,
                "prefecture_id" => 1,
                "city_id" => 5,
                "street_id" => 430,
                "name" => "月寒中央",
                "hiragana" => "つきさむちゅうおう",
                "katakana" => "ツキサムチュウオウ",
                "katakana_half" => "ﾂｷｻﾑﾁｭｳｵｳ",
                "romaji" => "tsukisamuchuuou",
                "memo" => "",
                "latitude" => "43.029663",
                "altitude" => "141.396872",
            ]);
            
            Station::create([
                "id" => 460,
                "prefecture_id" => 1,
                "city_id" => 5,
                "street_id" => 467,
                "name" => "福住",
                "hiragana" => "ふくずみ",
                "katakana" => "フクズミ",
                "katakana_half" => "ﾌｸｽﾞﾐ",
                "romaji" => "fukuzumi",
                "memo" => "",
                "latitude" => "43.021053",
                "altitude" => "141.403650",
            ]);
            
            Station::create([
                "id" => 461,
                "prefecture_id" => 1,
                "city_id" => 16,
                "street_id" => 1758,
                "name" => "西４丁目",
                "hiragana" => "にしよんちょうめ",
                "katakana" => "ニシヨンチョウメ",
                "katakana_half" => "ﾆｼﾖﾝﾁｮｳﾒ",
                "romaji" => "nishiyonchoume",
                "memo" => "",
                "latitude" => "43.058910",
                "altitude" => "141.351791",
            ]);
            
            Station::create([
                "id" => 462,
                "prefecture_id" => 1,
                "city_id" => 86,
                "street_id" => 4746,
                "name" => "西８丁目",
                "hiragana" => "にしはっちょうめ",
                "katakana" => "ニシハッチョウメ",
                "katakana_half" => "ﾆｼﾊｯﾁｮｳﾒ",
                "romaji" => "nishihacchoume",
                "memo" => "",
                "latitude" => "43.058187",
                "altitude" => "141.346597",
            ]);
            
            Station::create([
                "id" => 463,
                "prefecture_id" => 1,
                "city_id" => 1,
                "street_id" => null,
                "name" => "中央区役所前",
                "hiragana" => "ちゅうおうくやくしょまえ",
                "katakana" => "チュウオウクヤクショマエ",
                "katakana_half" => "ﾁｭｳｵｳｸﾔｸｼｮﾏｴ",
                "romaji" => "chuuoukuyakushomae",
                "memo" => "",
                "latitude" => "43.057521",
                "altitude" => "141.341764",
            ]);
            
            Station::create([
                "id" => 464,
                "prefecture_id" => 1,
                "city_id" => 38,
                "street_id" => 3387,
                "name" => "西１５丁目",
                "hiragana" => "にしじゅうごちょうめ",
                "katakana" => "ニシジュウゴチョウメ",
                "katakana_half" => "ﾆｼｼﾞｭｳｺﾞﾁｮｳﾒ",
                "romaji" => "nishijuugochoume",
                "memo" => "",
                "latitude" => "43.056132",
                "altitude" => "141.335042",
            ]);
            
            Station::create([
                "id" => 465,
                "prefecture_id" => 1,
                "city_id" => 7,
                "street_id" => null,
                "name" => "西線６条",
                "hiragana" => "にしせんろくじょう",
                "katakana" => "ニシセンロクジョウ",
                "katakana_half" => "ﾆｼｾﾝﾛｸｼﾞｮｳ",
                "romaji" => "nishisenrokujou",
                "memo" => "",
                "latitude" => "43.051494",
                "altitude" => "141.334904",
            ]);
            
            Station::create([
                "id" => 466,
                "prefecture_id" => 1,
                "city_id" => 7,
                "street_id" => null,
                "name" => "西線９条旭山公園通",
                "hiragana" => "にしせんくじょうあさひやまこうえんどおり",
                "katakana" => "ニシセンクジョウアサヒヤマコウエンドオリ",
                "katakana_half" => "ﾆｼｾﾝｸｼﾞｮｳｱｻﾋﾔﾏｺｳｴﾝﾄﾞｵﾘ",
                "romaji" => "nishisenkujouasahiyamakouendoori",
                "memo" => "",
                "latitude" => "43.048243",
                "altitude" => "141.335292",
            ]);
            
            Station::create([
                "id" => 467,
                "prefecture_id" => 1,
                "city_id" => 7,
                "street_id" => null,
                "name" => "西線１１条",
                "hiragana" => "にしせんじゅういちじょう",
                "katakana" => "ニシセンジュウイチジョウ",
                "katakana_half" => "ﾆｼｾﾝｼﾞｭｳｲﾁｼﾞｮｳ",
                "romaji" => "nishisenjuuichijou",
                "memo" => "",
                "latitude" => "43.044910",
                "altitude" => "141.335737",
            ]);
            
            Station::create([
                "id" => 468,
                "prefecture_id" => 1,
                "city_id" => 7,
                "street_id" => null,
                "name" => "西線１４条",
                "hiragana" => "にしせんじゅうよじょう",
                "katakana" => "ニシセンジュウヨジョウ",
                "katakana_half" => "ﾆｼｾﾝｼﾞｭｳﾖｼﾞｮｳ",
                "romaji" => "nishisenjuuyojou",
                "memo" => "",
                "latitude" => "43.040523",
                "altitude" => "141.336210",
            ]);
            
            Station::create([
                "id" => 469,
                "prefecture_id" => 1,
                "city_id" => 7,
                "street_id" => null,
                "name" => "西線１６条",
                "hiragana" => "にしせんじゅうろくじょう",
                "katakana" => "ニシセンジュウロクジョウ",
                "katakana_half" => "ﾆｼｾﾝｼﾞｭｳﾛｸｼﾞｮｳ",
                "romaji" => "nishisenjuurokujou",
                "memo" => "",
                "latitude" => "43.037356",
                "altitude" => "141.336571",
            ]);
            
            Station::create([
                "id" => 470,
                "prefecture_id" => 1,
                "city_id" => 15,
                "street_id" => 1525,
                "name" => "ロープウェイ入口",
                "hiragana" => "ろーぷうぇいいりぐち",
                "katakana" => "ロープウェイイリグチ",
                "katakana_half" => "ﾛｰﾌﾟｳｪｲｲﾘｸﾞﾁ",
                "romaji" => "roｰpuueiiriguchi",
                "memo" => "",
                "latitude" => "43.033829",
                "altitude" => "141.336988",
            ]);
            
            Station::create([
                "id" => 471,
                "prefecture_id" => 1,
                "city_id" => 1,
                "street_id" => null,
                "name" => "電車事業所前",
                "hiragana" => "でんしゃじぎょうしょまえ",
                "katakana" => "デンシャジギョウショマエ",
                "katakana_half" => "ﾃﾞﾝｼｬｼﾞｷﾞｮｳｼｮﾏｴ",
                "romaji" => "denshajigyoushomae",
                "memo" => "",
                "latitude" => "43.030634",
                "altitude" => "141.337433",
            ]);
            
            Station::create([
                "id" => 472,
                "prefecture_id" => 1,
                "city_id" => 1,
                "street_id" => null,
                "name" => "中央図書館前",
                "hiragana" => "ちゅうおうとしょかんまえ",
                "katakana" => "チュウオウトショカンマエ",
                "katakana_half" => "ﾁｭｳｵｳﾄｼｮｶﾝﾏｴ",
                "romaji" => "chuuoutoshokanmae",
                "memo" => "",
                "latitude" => "43.030440",
                "altitude" => "141.339933",
            ]);
            
            Station::create([
                "id" => 473,
                "prefecture_id" => 1,
                "city_id" => 6,
                "street_id" => 483,
                "name" => "石山通",
                "hiragana" => "いしやまどおり",
                "katakana" => "イシヤマドオリ",
                "katakana_half" => "ｲｼﾔﾏﾄﾞｵﾘ",
                "romaji" => "ishiyamadoori",
                "memo" => "",
                "latitude" => "43.030718",
                "altitude" => "141.344071",
            ]);
            
            Station::create([
                "id" => 474,
                "prefecture_id" => 1,
                "city_id" => 3,
                "street_id" => null,
                "name" => "東屯田通",
                "hiragana" => "ひがしとんでんどおり",
                "katakana" => "ヒガシトンデンドオリ",
                "katakana_half" => "ﾋｶﾞｼﾄﾝﾃﾞﾝﾄﾞｵﾘ",
                "romaji" => "higashitondendoori",
                "memo" => "",
                "latitude" => "43.031023",
                "altitude" => "141.348654",
            ]);
            
            Station::create([
                "id" => 475,
                "prefecture_id" => 1,
                "city_id" => 18,
                "street_id" => 1975,
                "name" => "幌南小学校前",
                "hiragana" => "こうなんしょうがっこうまえ",
                "katakana" => "コウナンショウガッコウマエ",
                "katakana_half" => "ｺｳﾅﾝｼｮｳｶﾞｯｺｳﾏｴ",
                "romaji" => "kounanshougakkoumae",
                "memo" => "",
                "latitude" => "43.032134",
                "altitude" => "141.351737",
            ]);
            
            Station::create([
                "id" => 476,
                "prefecture_id" => 1,
                "city_id" => 55,
                "street_id" => null,
                "name" => "山鼻１９条",
                "hiragana" => "やまはなじゅうくじょう",
                "katakana" => "ヤマハナジュウクジョウ",
                "katakana_half" => "ﾔﾏﾊﾅｼﾞｭｳｸｼﾞｮｳ",
                "romaji" => "yamahanajuukujou",
                "memo" => "",
                "latitude" => "43.034912",
                "altitude" => "141.351431",
            ]);
            
            Station::create([
                "id" => 477,
                "prefecture_id" => 1,
                "city_id" => 21,
                "street_id" => 2288,
                "name" => "静修学園前",
                "hiragana" => "せいしゅうがくえんまえ",
                "katakana" => "セイシュウガクエンマエ",
                "katakana_half" => "ｾｲｼｭｳｶﾞｸｴﾝﾏｴ",
                "romaji" => "seishuugakuenmae",
                "memo" => "",
                "latitude" => "43.038162",
                "altitude" => "141.350959",
            ]);
            
            Station::create([
                "id" => 478,
                "prefecture_id" => 1,
                "city_id" => 185,
                "street_id" => 7932,
                "name" => "行啓通",
                "hiragana" => "ぎょうけいどおり",
                "katakana" => "ギョウケイドオリ",
                "katakana_half" => "ｷﾞｮｳｹｲﾄﾞｵﾘ",
                "romaji" => "gyoukeidoori",
                "memo" => "",
                "latitude" => "43.041550",
                "altitude" => "141.350514",
            ]);
            
            Station::create([
                "id" => 479,
                "prefecture_id" => 1,
                "city_id" => 1,
                "street_id" => 39,
                "name" => "中島公園通",
                "hiragana" => "なかじまこうえんどおり",
                "katakana" => "ナカジマコウエンドオリ",
                "katakana_half" => "ﾅｶｼﾞﾏｺｳｴﾝﾄﾞｵﾘ",
                "romaji" => "nakajimakouendoori",
                "memo" => "",
                "latitude" => "43.045855",
                "altitude" => "141.349986",
            ]);
            
            Station::create([
                "id" => 480,
                "prefecture_id" => 1,
                "city_id" => 55,
                "street_id" => null,
                "name" => "山鼻９条",
                "hiragana" => "やまはなくじょう",
                "katakana" => "ヤマハナクジョウ",
                "katakana_half" => "ﾔﾏﾊﾅｸｼﾞｮｳ",
                "romaji" => "yamahanakujou",
                "memo" => "",
                "latitude" => "43.049077",
                "altitude" => "141.349541",
            ]);
            
            Station::create([
                "id" => 481,
                "prefecture_id" => 1,
                "city_id" => 19,
                "street_id" => 2042,
                "name" => "東本願寺前",
                "hiragana" => "ひがしほんがんじまえ",
                "katakana" => "ヒガシホンガンジマエ",
                "katakana_half" => "ﾋｶﾞｼﾎﾝｶﾞﾝｼﾞﾏｴ",
                "romaji" => "higashihonganjimae",
                "memo" => "",
                "latitude" => "43.051715",
                "altitude" => "141.349153",
            ]);
            
            Station::create([
                "id" => 482,
                "prefecture_id" => 1,
                "city_id" => 1,
                "street_id" => null,
                "name" => "資生館小学校前",
                "hiragana" => "しせいかんしょうがっこうまえ",
                "katakana" => "シセイカンショウガッコウマエ",
                "katakana_half" => "ｼｾｲｶﾝｼｮｳｶﾞｯｺｳﾏｴ",
                "romaji" => "shiseikanshougakkoumae",
                "memo" => "",
                "latitude" => "43.055132",
                "altitude" => "141.349041",
            ]);
            
            Station::create([
                "id" => 483,
                "prefecture_id" => 1,
                "city_id" => 1,
                "street_id" => null,
                "name" => "狸小路",
                "hiragana" => "たぬきこうじ",
                "katakana" => "タヌキコウジ",
                "katakana_half" => "ﾀﾇｷｺｳｼﾞ",
                "romaji" => "tanukikouji",
                "memo" => "",
                "latitude" => "43.057299",
                "altitude" => "141.352929",
            ]);
            
            Station::create([
                "id" => 484,
                "prefecture_id" => 1,
                "city_id" => 115,
                "street_id" => 5540,
                "name" => "湯の川",
                "hiragana" => "ゆのかわ",
                "katakana" => "ユノカワ",
                "katakana_half" => "ﾕﾉｶﾜ",
                "romaji" => "yunokawa",
                "memo" => "",
                "latitude" => "41.781120",
                "altitude" => "140.790118",
            ]);
            
            Station::create([
                "id" => 485,
                "prefecture_id" => 1,
                "city_id" => 115,
                "street_id" => 5540,
                "name" => "湯の川温泉",
                "hiragana" => "ゆのかわおんせん",
                "katakana" => "ユノカワオンセン",
                "katakana_half" => "ﾕﾉｶﾜｵﾝｾﾝ",
                "romaji" => "yunokawaonsen",
                "memo" => "",
                "latitude" => "41.780036",
                "altitude" => "140.785202",
            ]);
            
            Station::create([
                "id" => 486,
                "prefecture_id" => 1,
                "city_id" => 11,
                "street_id" => null,
                "name" => "函館アリーナ前",
                "hiragana" => "はこだてありーなまえ",
                "katakana" => "ハコダテアリーナマエ",
                "katakana_half" => "ﾊｺﾀﾞﾃｱﾘｰﾅﾏｴ",
                "romaji" => "hakodateariｰnamae",
                "memo" => "",
                "latitude" => "41.781925",
                "altitude" => "140.782341",
            ]);
            
            Station::create([
                "id" => 487,
                "prefecture_id" => 1,
                "city_id" => 11,
                "street_id" => 882,
                "name" => "駒場車庫前",
                "hiragana" => "こまばしゃこまえ",
                "katakana" => "コマバシャコマエ",
                "katakana_half" => "ｺﾏﾊﾞｼｬｺﾏｴ",
                "romaji" => "komabashakomae",
                "memo" => "",
                "latitude" => "41.783203",
                "altitude" => "140.779397",
            ]);
            
            Station::create([
                "id" => 488,
                "prefecture_id" => 1,
                "city_id" => 1,
                "street_id" => null,
                "name" => "競馬場前",
                "hiragana" => "けいばじょうまえ",
                "katakana" => "ケイバジョウマエ",
                "katakana_half" => "ｹｲﾊﾞｼﾞｮｳﾏｴ",
                "romaji" => "keibajoumae",
                "memo" => "北海道",
                "latitude" => "41.784202",
                "altitude" => "140.776536",
            ]);
            
            Station::create([
                "id" => 489,
                "prefecture_id" => 1,
                "city_id" => 11,
                "street_id" => 954,
                "name" => "深堀町",
                "hiragana" => "ふかぼりちょう",
                "katakana" => "フカボリチョウ",
                "katakana_half" => "ﾌｶﾎﾞﾘﾁｮｳ",
                "romaji" => "fukaborichou",
                "memo" => "",
                "latitude" => "41.787146",
                "altitude" => "140.770037",
            ]);
            
            Station::create([
                "id" => 490,
                "prefecture_id" => 1,
                "city_id" => 11,
                "street_id" => 857,
                "name" => "柏木町",
                "hiragana" => "かしわぎちょう",
                "katakana" => "カシワギチョウ",
                "katakana_half" => "ｶｼﾜｷﾞﾁｮｳ",
                "romaji" => "kashiwagichou",
                "memo" => "",
                "latitude" => "41.787951",
                "altitude" => "140.765315",
            ]);
            
            Station::create([
                "id" => 491,
                "prefecture_id" => 1,
                "city_id" => 11,
                "street_id" => 902,
                "name" => "杉並町",
                "hiragana" => "すぎなみちょう",
                "katakana" => "スギナミチョウ",
                "katakana_half" => "ｽｷﾞﾅﾐﾁｮｳ",
                "romaji" => "suginamichou",
                "memo" => "",
                "latitude" => "41.788702",
                "altitude" => "140.758843",
            ]);
            
            Station::create([
                "id" => 492,
                "prefecture_id" => 1,
                "city_id" => 11,
                "street_id" => 883,
                "name" => "五稜郭公園前",
                "hiragana" => "ごりょうかくこうえんまえ",
                "katakana" => "ゴリョウカクコウエンマエ",
                "katakana_half" => "ｺﾞﾘｮｳｶｸｺｳｴﾝﾏｴ",
                "romaji" => "goryoukakukouenmae",
                "memo" => "",
                "latitude" => "41.789257",
                "altitude" => "140.752204",
            ]);
            
            Station::create([
                "id" => 493,
                "prefecture_id" => 1,
                "city_id" => 1,
                "street_id" => null,
                "name" => "中央病院前",
                "hiragana" => "ちゅうおうびょういんまえ",
                "katakana" => "チュウオウビョウインマエ",
                "katakana_half" => "ﾁｭｳｵｳﾋﾞｮｳｲﾝﾏｴ",
                "romaji" => "chuuoubyouinmae",
                "memo" => "",
                "latitude" => "41.786562",
                "altitude" => "140.750927",
            ]);
            
            Station::create([
                "id" => 494,
                "prefecture_id" => 1,
                "city_id" => 11,
                "street_id" => 917,
                "name" => "千代台",
                "hiragana" => "ちよがだい",
                "katakana" => "チヨガダイ",
                "katakana_half" => "ﾁﾖｶﾞﾀﾞｲ",
                "romaji" => "chiyogadai",
                "memo" => "",
                "latitude" => "41.784007",
                "altitude" => "140.748455",
            ]);
            
            Station::create([
                "id" => 495,
                "prefecture_id" => 1,
                "city_id" => 11,
                "street_id" => 962,
                "name" => "堀川町",
                "hiragana" => "ほりかわちょう",
                "katakana" => "ホリカワチョウ",
                "katakana_half" => "ﾎﾘｶﾜﾁｮｳ",
                "romaji" => "horikawachou",
                "memo" => "",
                "latitude" => "41.780702",
                "altitude" => "140.744317",
            ]);
            
            Station::create([
                "id" => 496,
                "prefecture_id" => 1,
                "city_id" => 11,
                "street_id" => 889,
                "name" => "昭和橋",
                "hiragana" => "しょうわばし",
                "katakana" => "ショウワバシ",
                "katakana_half" => "ｼｮｳﾜﾊﾞｼ",
                "romaji" => "shouwabashi",
                "memo" => "",
                "latitude" => "41.777925",
                "altitude" => "140.740790",
            ]);
            
            Station::create([
                "id" => 497,
                "prefecture_id" => 1,
                "city_id" => 11,
                "street_id" => 915,
                "name" => "千歳町",
                "hiragana" => "ちとせちょう",
                "katakana" => "チトセチョウ",
                "katakana_half" => "ﾁﾄｾﾁｮｳ",
                "romaji" => "chitosechou",
                "memo" => "北海道",
                "latitude" => "41.776008",
                "altitude" => "140.738374",
            ]);
            
            Station::create([
                "id" => 498,
                "prefecture_id" => 1,
                "city_id" => 11,
                "street_id" => 864,
                "name" => "新川町",
                "hiragana" => "しんかわちょう",
                "katakana" => "シンカワチョウ",
                "katakana_half" => "ｼﾝｶﾜﾁｮｳ",
                "romaji" => "shinkawachou",
                "memo" => "北海道",
                "latitude" => "41.773759",
                "altitude" => "140.735596",
            ]);
            
            Station::create([
                "id" => 499,
                "prefecture_id" => 1,
                "city_id" => 11,
                "street_id" => 968,
                "name" => "松風町",
                "hiragana" => "まつかぜちょう",
                "katakana" => "マツカゼチョウ",
                "katakana_half" => "ﾏﾂｶｾﾞﾁｮｳ",
                "romaji" => "matsukazechou",
                "memo" => "",
                "latitude" => "41.771369",
                "altitude" => "140.733068",
            ]);
            
            Station::create([
                "id" => 500,
                "prefecture_id" => 1,
                "city_id" => 11,
                "street_id" => null,
                "name" => "函館駅前",
                "hiragana" => "はこだてえきまえ",
                "katakana" => "ハコダテエキマエ",
                "katakana_half" => "ﾊｺﾀﾞﾃｴｷﾏｴ",
                "romaji" => "hakodateekimae",
                "memo" => "",
                "latitude" => "41.772370",
                "altitude" => "140.727874",
            ]);
            
            Station::create([
                "id" => 501,
                "prefecture_id" => 1,
                "city_id" => 1,
                "street_id" => null,
                "name" => "市役所前",
                "hiragana" => "しやくしょまえ",
                "katakana" => "シヤクショマエ",
                "katakana_half" => "ｼﾔｸｼｮﾏｴ",
                "romaji" => "shiyakushomae",
                "memo" => "北海道",
                "latitude" => "41.769480",
                "altitude" => "140.725597",
            ]);
            
            Station::create([
                "id" => 502,
                "prefecture_id" => 1,
                "city_id" => 179,
                "street_id" => 7591,
                "name" => "魚市場通",
                "hiragana" => "うおいちばどおり",
                "katakana" => "ウオイチバドオリ",
                "katakana_half" => "ｳｵｲﾁﾊﾞﾄﾞｵﾘ",
                "romaji" => "uoichibadoori",
                "memo" => "",
                "latitude" => "41.766815",
                "altitude" => "140.722959",
            ]);
            
            Station::create([
                "id" => 503,
                "prefecture_id" => 1,
                "city_id" => 90,
                "street_id" => null,
                "name" => "十字街",
                "hiragana" => "じゅうじがい",
                "katakana" => "ジュウジガイ",
                "katakana_half" => "ｼﾞｭｳｼﾞｶﾞｲ",
                "romaji" => "juujigai",
                "memo" => "",
                "latitude" => "41.764148",
                "altitude" => "140.718654",
            ]);
            
            Station::create([
                "id" => 504,
                "prefecture_id" => 1,
                "city_id" => 11,
                "street_id" => 961,
                "name" => "宝来町",
                "hiragana" => "ほうらいちょう",
                "katakana" => "ホウライチョウ",
                "katakana_half" => "ﾎｳﾗｲﾁｮｳ",
                "romaji" => "houraichou",
                "memo" => "",
                "latitude" => "41.760815",
                "altitude" => "140.720070",
            ]);
            
            Station::create([
                "id" => 505,
                "prefecture_id" => 1,
                "city_id" => 11,
                "street_id" => 825,
                "name" => "青柳町",
                "hiragana" => "あおやぎちょう",
                "katakana" => "アオヤギチョウ",
                "katakana_half" => "ｱｵﾔｷﾞﾁｮｳ",
                "romaji" => "aoyagichou",
                "memo" => "",
                "latitude" => "41.756483",
                "altitude" => "140.718432",
            ]);
            
            Station::create([
                "id" => 506,
                "prefecture_id" => 1,
                "city_id" => 11,
                "street_id" => 983,
                "name" => "谷地頭",
                "hiragana" => "やちがしら",
                "katakana" => "ヤチガシラ",
                "katakana_half" => "ﾔﾁｶﾞｼﾗ",
                "romaji" => "yachigashira",
                "memo" => "",
                "latitude" => "41.753316",
                "altitude" => "140.716404",
            ]);
            
            Station::create([
                "id" => 507,
                "prefecture_id" => 1,
                "city_id" => 11,
                "street_id" => 901,
                "name" => "末広町",
                "hiragana" => "すえひろちょう",
                "katakana" => "スエヒロチョウ",
                "katakana_half" => "ｽｴﾋﾛﾁｮｳ",
                "romaji" => "suehirochou",
                "memo" => "北海道",
                "latitude" => "41.766592",
                "altitude" => "140.712486",
            ]);
            
            Station::create([
                "id" => 508,
                "prefecture_id" => 1,
                "city_id" => 11,
                "street_id" => 850,
                "name" => "大町",
                "hiragana" => "おおまち",
                "katakana" => "オオマチ",
                "katakana_half" => "ｵｵﾏﾁ",
                "romaji" => "oomachi",
                "memo" => "北海道",
                "latitude" => "41.770009",
                "altitude" => "140.709349",
            ]);
            
            Station::create([
                "id" => 509,
                "prefecture_id" => 1,
                "city_id" => 11,
                "street_id" => null,
                "name" => "函館どつく前",
                "hiragana" => "はこだてどっくまえ",
                "katakana" => "ハコダテドックマエ",
                "katakana_half" => "ﾊｺﾀﾞﾃﾄﾞｯｸﾏｴ",
                "romaji" => "hakodatedokkumae",
                "memo" => "",
                "latitude" => "41.773147",
                "altitude" => "140.704265",
            ]);
            
            Station::create([
                "id" => 510,
                "prefecture_id" => 1,
                "city_id" => 44,
                "street_id" => 3749,
                "name" => "七重浜",
                "hiragana" => "ななえはま",
                "katakana" => "ナナエハマ",
                "katakana_half" => "ﾅﾅｴﾊﾏ",
                "romaji" => "nanaehama",
                "memo" => "",
                "latitude" => "41.817392",
                "altitude" => "140.708818",
            ]);
            
            Station::create([
                "id" => 511,
                "prefecture_id" => 1,
                "city_id" => 3,
                "street_id" => null,
                "name" => "東久根別",
                "hiragana" => "ひがしくねべつ",
                "katakana" => "ヒガシクネベツ",
                "katakana_half" => "ﾋｶﾞｼｸﾈﾍﾞﾂ",
                "romaji" => "higashikunebetsu",
                "memo" => "",
                "latitude" => "41.826085",
                "altitude" => "140.679959",
            ]);
            
            Station::create([
                "id" => 512,
                "prefecture_id" => 1,
                "city_id" => 44,
                "street_id" => 3731,
                "name" => "久根別",
                "hiragana" => "くねべつ",
                "katakana" => "クネベツ",
                "katakana_half" => "ｸﾈﾍﾞﾂ",
                "romaji" => "kunebetsu",
                "memo" => "",
                "latitude" => "41.826530",
                "altitude" => "140.665988",
            ]);
            
            Station::create([
                "id" => 513,
                "prefecture_id" => 1,
                "city_id" => 16,
                "street_id" => 1648,
                "name" => "清川口",
                "hiragana" => "きよかわぐち",
                "katakana" => "キヨカワグチ",
                "katakana_half" => "ｷﾖｶﾜｸﾞﾁ",
                "romaji" => "kiyokawaguchi",
                "memo" => "",
                "latitude" => "41.824501",
                "altitude" => "140.652656",
            ]);
            
            Station::create([
                "id" => 514,
                "prefecture_id" => 1,
                "city_id" => 49,
                "street_id" => null,
                "name" => "上磯",
                "hiragana" => "かみいそ",
                "katakana" => "カミイソ",
                "katakana_half" => "ｶﾐｲｿ",
                "romaji" => "kamiiso",
                "memo" => "",
                "latitude" => "41.819863",
                "altitude" => "140.641574",
            ]);
            
            Station::create([
                "id" => 515,
                "prefecture_id" => 1,
                "city_id" => 44,
                "street_id" => 3765,
                "name" => "茂辺地",
                "hiragana" => "もへじ",
                "katakana" => "モヘジ",
                "katakana_half" => "ﾓﾍｼﾞ",
                "romaji" => "moheji",
                "memo" => "",
                "latitude" => "41.766535",
                "altitude" => "140.600829",
            ]);
            
            Station::create([
                "id" => 516,
                "prefecture_id" => 1,
                "city_id" => 64,
                "street_id" => 4317,
                "name" => "渡島当別",
                "hiragana" => "おしまとうべつ",
                "katakana" => "オシマトウベツ",
                "katakana_half" => "ｵｼﾏﾄｳﾍﾞﾂ",
                "romaji" => "oshimatoubetsu",
                "memo" => "",
                "latitude" => "41.737565",
                "altitude" => "140.579472",
            ]);
            
            Station::create([
                "id" => 517,
                "prefecture_id" => 1,
                "city_id" => 11,
                "street_id" => 863,
                "name" => "釜谷",
                "hiragana" => "かまや",
                "katakana" => "カマヤ",
                "katakana_half" => "ｶﾏﾔ",
                "romaji" => "kamaya",
                "memo" => "",
                "latitude" => "41.712150",
                "altitude" => "140.537170",
            ]);
            
            Station::create([
                "id" => 518,
                "prefecture_id" => 1,
                "city_id" => 33,
                "street_id" => 3077,
                "name" => "泉沢",
                "hiragana" => "いずみさわ",
                "katakana" => "イズミサワ",
                "katakana_half" => "ｲｽﾞﾐｻﾜ",
                "romaji" => "izumisawa",
                "memo" => "",
                "latitude" => "41.700929",
                "altitude" => "140.506730",
            ]);
            
            Station::create([
                "id" => 519,
                "prefecture_id" => 1,
                "city_id" => 50,
                "street_id" => 3931,
                "name" => "札苅",
                "hiragana" => "さつかり",
                "katakana" => "サツカリ",
                "katakana_half" => "ｻﾂｶﾘ",
                "romaji" => "satsukari",
                "memo" => "",
                "latitude" => "41.699317",
                "altitude" => "140.468010",
            ]);
            
    }
}
