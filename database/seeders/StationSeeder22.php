<?php
namespace Database\Seeders;

use App\Models\Station;
use Illuminate\Database\Seeder;

class StationSeeder22 extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        
            Station::create([
                "id" => 4491,
                "prefecture_id" => 22,
                "city_id" => 1019,
                "street_id" => null,
                "name" => "熱海",
                "hiragana" => "あたみ",
                "katakana" => "アタミ",
                "katakana_half" => "ｱﾀﾐ",
                "romaji" => "atami",
                "memo" => "",
                "latitude" => "35.103720",
                "altitude" => "139.077735",
            ]);
            
            Station::create([
                "id" => 4492,
                "prefecture_id" => 22,
                "city_id" => 1009,
                "street_id" => null,
                "name" => "駿河小山",
                "hiragana" => "するがおやま",
                "katakana" => "スルガオヤマ",
                "katakana_half" => "ｽﾙｶﾞｵﾔﾏ",
                "romaji" => "surugaoyama",
                "memo" => "",
                "latitude" => "35.358969",
                "altitude" => "138.997980",
            ]);
            
            Station::create([
                "id" => 4493,
                "prefecture_id" => 22,
                "city_id" => 1008,
                "street_id" => 62946,
                "name" => "足柄",
                "hiragana" => "あしがら",
                "katakana" => "アシガラ",
                "katakana_half" => "ｱｼｶﾞﾗ",
                "romaji" => "ashigara",
                "memo" => "静岡県",
                "latitude" => "35.332139",
                "altitude" => "138.981733",
            ]);
            
            Station::create([
                "id" => 4494,
                "prefecture_id" => 22,
                "city_id" => 1029,
                "street_id" => null,
                "name" => "御殿場",
                "hiragana" => "ごてんば",
                "katakana" => "ゴテンバ",
                "katakana_half" => "ｺﾞﾃﾝﾊﾞ",
                "romaji" => "gotenba",
                "memo" => "",
                "latitude" => "35.300114",
                "altitude" => "138.934377",
            ]);
            
            Station::create([
                "id" => 4495,
                "prefecture_id" => 22,
                "city_id" => 1014,
                "street_id" => null,
                "name" => "南御殿場",
                "hiragana" => "みなみごてんば",
                "katakana" => "ミナミゴテンバ",
                "katakana_half" => "ﾐﾅﾐｺﾞﾃﾝﾊﾞ",
                "romaji" => "minamigotenba",
                "memo" => "",
                "latitude" => "35.277227",
                "altitude" => "138.925684",
            ]);
            
            Station::create([
                "id" => 4496,
                "prefecture_id" => 22,
                "city_id" => 1024,
                "street_id" => 64647,
                "name" => "富士岡",
                "hiragana" => "ふじおか",
                "katakana" => "フジオカ",
                "katakana_half" => "ﾌｼﾞｵｶ",
                "romaji" => "fujioka",
                "memo" => "",
                "latitude" => "35.256035",
                "altitude" => "138.920214",
            ]);
            
            Station::create([
                "id" => 4497,
                "prefecture_id" => 22,
                "city_id" => 1032,
                "street_id" => 65413,
                "name" => "岩波",
                "hiragana" => "いわなみ",
                "katakana" => "イワナミ",
                "katakana_half" => "ｲﾜﾅﾐ",
                "romaji" => "iwanami",
                "memo" => "",
                "latitude" => "35.216040",
                "altitude" => "138.919105",
            ]);
            
            Station::create([
                "id" => 4498,
                "prefecture_id" => 22,
                "city_id" => 1032,
                "street_id" => null,
                "name" => "裾野",
                "hiragana" => "すその",
                "katakana" => "スソノ",
                "katakana_half" => "ｽｿﾉ",
                "romaji" => "susono",
                "memo" => "",
                "latitude" => "35.171572",
                "altitude" => "138.909496",
            ]);
            
            Station::create([
                "id" => 4499,
                "prefecture_id" => 22,
                "city_id" => 1046,
                "street_id" => null,
                "name" => "長泉なめり",
                "hiragana" => "ながいずみなめり",
                "katakana" => "ナガイズミナメリ",
                "katakana_half" => "ﾅｶﾞｲｽﾞﾐﾅﾒﾘ",
                "romaji" => "nagaizuminameri",
                "memo" => "",
                "latitude" => "35.147435",
                "altitude" => "138.899387",
            ]);
            
            Station::create([
                "id" => 4500,
                "prefecture_id" => 22,
                "city_id" => 1046,
                "street_id" => 65800,
                "name" => "下土狩",
                "hiragana" => "しもとがり",
                "katakana" => "シモトガリ",
                "katakana_half" => "ｼﾓﾄｶﾞﾘ",
                "romaji" => "shimotogari",
                "memo" => "",
                "latitude" => "35.128798",
                "altitude" => "138.895083",
            ]);
            
            Station::create([
                "id" => 4501,
                "prefecture_id" => 22,
                "city_id" => 1018,
                "street_id" => 64023,
                "name" => "大岡",
                "hiragana" => "おおおか",
                "katakana" => "オオオカ",
                "katakana_half" => "ｵｵｵｶ",
                "romaji" => "oooka",
                "memo" => "静岡県",
                "latitude" => "35.115772",
                "altitude" => "138.880918",
            ]);
            
            Station::create([
                "id" => 4502,
                "prefecture_id" => 22,
                "city_id" => 1018,
                "street_id" => null,
                "name" => "沼津",
                "hiragana" => "ぬまづ",
                "katakana" => "ヌマヅ",
                "katakana_half" => "ﾇﾏﾂﾞ",
                "romaji" => "numazu",
                "memo" => "",
                "latitude" => "35.103078",
                "altitude" => "138.859559",
            ]);
            
            Station::create([
                "id" => 4503,
                "prefecture_id" => 22,
                "city_id" => 1017,
                "street_id" => 63950,
                "name" => "来宮",
                "hiragana" => "きのみや",
                "katakana" => "キノミヤ",
                "katakana_half" => "ｷﾉﾐﾔ",
                "romaji" => "kinomiya",
                "memo" => "",
                "latitude" => "35.098582",
                "altitude" => "139.065430",
            ]);
            
            Station::create([
                "id" => 4504,
                "prefecture_id" => 22,
                "city_id" => 1034,
                "street_id" => null,
                "name" => "伊豆多賀",
                "hiragana" => "いずたが",
                "katakana" => "イズタガ",
                "katakana_half" => "ｲｽﾞﾀｶﾞ",
                "romaji" => "izutaga",
                "memo" => "",
                "latitude" => "35.059586",
                "altitude" => "139.066904",
            ]);
            
            Station::create([
                "id" => 4505,
                "prefecture_id" => 22,
                "city_id" => 1019,
                "street_id" => 64169,
                "name" => "網代",
                "hiragana" => "あじろ",
                "katakana" => "アジロ",
                "katakana_half" => "ｱｼﾞﾛ",
                "romaji" => "ajiro",
                "memo" => "",
                "latitude" => "35.043533",
                "altitude" => "139.081154",
            ]);
            
            Station::create([
                "id" => 4506,
                "prefecture_id" => 22,
                "city_id" => 1022,
                "street_id" => 64381,
                "name" => "宇佐美",
                "hiragana" => "うさみ",
                "katakana" => "ウサミ",
                "katakana_half" => "ｳｻﾐ",
                "romaji" => "usami",
                "memo" => "",
                "latitude" => "35.005675",
                "altitude" => "139.079822",
            ]);
            
            Station::create([
                "id" => 4507,
                "prefecture_id" => 22,
                "city_id" => 1022,
                "street_id" => null,
                "name" => "伊東",
                "hiragana" => "いとう",
                "katakana" => "イトウ",
                "katakana_half" => "ｲﾄｳ",
                "romaji" => "itou",
                "memo" => "",
                "latitude" => "34.974929",
                "altitude" => "139.092212",
            ]);
            
            Station::create([
                "id" => 4508,
                "prefecture_id" => 22,
                "city_id" => 1021,
                "street_id" => null,
                "name" => "富士",
                "hiragana" => "ふじ",
                "katakana" => "フジ",
                "katakana_half" => "ﾌｼﾞ",
                "romaji" => "fuji",
                "memo" => "",
                "latitude" => "35.151320",
                "altitude" => "138.652185",
            ]);
            
            Station::create([
                "id" => 4509,
                "prefecture_id" => 22,
                "city_id" => 1008,
                "street_id" => 63183,
                "name" => "柚木",
                "hiragana" => "ゆのき",
                "katakana" => "ユノキ",
                "katakana_half" => "ﾕﾉｷ",
                "romaji" => "yunoki",
                "memo" => "身延線",
                "latitude" => "35.157179",
                "altitude" => "138.639131",
            ]);
            
            Station::create([
                "id" => 4510,
                "prefecture_id" => 22,
                "city_id" => 1008,
                "street_id" => null,
                "name" => "竪堀",
                "hiragana" => "たてぼり",
                "katakana" => "タテボリ",
                "katakana_half" => "ﾀﾃﾎﾞﾘ",
                "romaji" => "tatebori",
                "memo" => "",
                "latitude" => "35.167901",
                "altitude" => "138.645684",
            ]);
            
            Station::create([
                "id" => 4511,
                "prefecture_id" => 22,
                "city_id" => 1024,
                "street_id" => 64557,
                "name" => "入山瀬",
                "hiragana" => "いりやませ",
                "katakana" => "イリヤマセ",
                "katakana_half" => "ｲﾘﾔﾏｾ",
                "romaji" => "iriyamase",
                "memo" => "",
                "latitude" => "35.188287",
                "altitude" => "138.647601",
            ]);
            
            Station::create([
                "id" => 4512,
                "prefecture_id" => 22,
                "city_id" => 1021,
                "street_id" => null,
                "name" => "富士根",
                "hiragana" => "ふじね",
                "katakana" => "フジネ",
                "katakana_half" => "ﾌｼﾞﾈ",
                "romaji" => "fujine",
                "memo" => "",
                "latitude" => "35.205202",
                "altitude" => "138.635795",
            ]);
            
            Station::create([
                "id" => 4513,
                "prefecture_id" => 22,
                "city_id" => 1021,
                "street_id" => 64315,
                "name" => "源道寺",
                "hiragana" => "げんどうじ",
                "katakana" => "ゲンドウジ",
                "katakana_half" => "ｹﾞﾝﾄﾞｳｼﾞ",
                "romaji" => "gendouji",
                "memo" => "",
                "latitude" => "35.214450",
                "altitude" => "138.626989",
            ]);
            
            Station::create([
                "id" => 4514,
                "prefecture_id" => 22,
                "city_id" => 1021,
                "street_id" => null,
                "name" => "富士宮",
                "hiragana" => "ふじのみや",
                "katakana" => "フジノミヤ",
                "katakana_half" => "ﾌｼﾞﾉﾐﾔ",
                "romaji" => "fujinomiya",
                "memo" => "",
                "latitude" => "35.221312",
                "altitude" => "138.615518",
            ]);
            
            Station::create([
                "id" => 4515,
                "prefecture_id" => 22,
                "city_id" => 1013,
                "street_id" => null,
                "name" => "西富士宮",
                "hiragana" => "にしふじのみや",
                "katakana" => "ニシフジノミヤ",
                "katakana_half" => "ﾆｼﾌｼﾞﾉﾐﾔ",
                "romaji" => "nishifujinomiya",
                "memo" => "",
                "latitude" => "35.225505",
                "altitude" => "138.602546",
            ]);
            
            Station::create([
                "id" => 4516,
                "prefecture_id" => 22,
                "city_id" => 1021,
                "street_id" => 64340,
                "name" => "沼久保",
                "hiragana" => "ぬまくぼ",
                "katakana" => "ヌマクボ",
                "katakana_half" => "ﾇﾏｸﾎﾞ",
                "romaji" => "numakubo",
                "memo" => "",
                "latitude" => "35.199285",
                "altitude" => "138.584327",
            ]);
            
            Station::create([
                "id" => 4517,
                "prefecture_id" => 22,
                "city_id" => 1008,
                "street_id" => 63045,
                "name" => "芝川",
                "hiragana" => "しばかわ",
                "katakana" => "シバカワ",
                "katakana_half" => "ｼﾊﾞｶﾜ",
                "romaji" => "shibakawa",
                "memo" => "",
                "latitude" => "35.197229",
                "altitude" => "138.563801",
            ]);
            
            Station::create([
                "id" => 4518,
                "prefecture_id" => 22,
                "city_id" => 1021,
                "street_id" => 64306,
                "name" => "稲子",
                "hiragana" => "いなこ",
                "katakana" => "イナコ",
                "katakana_half" => "ｲﾅｺ",
                "romaji" => "inako",
                "memo" => "",
                "latitude" => "35.230476",
                "altitude" => "138.536969",
            ]);
            
            Station::create([
                "id" => 4519,
                "prefecture_id" => 22,
                "city_id" => 1008,
                "street_id" => 63140,
                "name" => "出馬",
                "hiragana" => "いずんま",
                "katakana" => "イズンマ",
                "katakana_half" => "ｲｽﾞﾝﾏ",
                "romaji" => "izunma",
                "memo" => "",
                "latitude" => "35.049314",
                "altitude" => "137.744265",
            ]);
            
            Station::create([
                "id" => 4520,
                "prefecture_id" => 22,
                "city_id" => 1008,
                "street_id" => 62943,
                "name" => "上市場",
                "hiragana" => "かみいちば",
                "katakana" => "カミイチバ",
                "katakana_half" => "ｶﾐｲﾁﾊﾞ",
                "romaji" => "kamiichiba",
                "memo" => "",
                "latitude" => "35.050008",
                "altitude" => "137.752459",
            ]);
            
            Station::create([
                "id" => 4521,
                "prefecture_id" => 22,
                "city_id" => 1017,
                "street_id" => 63939,
                "name" => "浦川",
                "hiragana" => "うらかわ",
                "katakana" => "ウラカワ",
                "katakana_half" => "ｳﾗｶﾜ",
                "romaji" => "urakawa",
                "memo" => "",
                "latitude" => "35.056231",
                "altitude" => "137.763708",
            ]);
            
            Station::create([
                "id" => 4522,
                "prefecture_id" => 22,
                "city_id" => 1011,
                "street_id" => 63612,
                "name" => "早瀬",
                "hiragana" => "はやせ",
                "katakana" => "ハヤセ",
                "katakana_half" => "ﾊﾔｾ",
                "romaji" => "hayase",
                "memo" => "",
                "latitude" => "35.060508",
                "altitude" => "137.775095",
            ]);
            
            Station::create([
                "id" => 4523,
                "prefecture_id" => 22,
                "city_id" => 1009,
                "street_id" => 63231,
                "name" => "下川合",
                "hiragana" => "しもかわい",
                "katakana" => "シモカワイ",
                "katakana_half" => "ｼﾓｶﾜｲ",
                "romaji" => "shimokawai",
                "memo" => "",
                "latitude" => "35.069369",
                "altitude" => "137.786232",
            ]);
            
            Station::create([
                "id" => 4524,
                "prefecture_id" => 22,
                "city_id" => 1017,
                "street_id" => 63946,
                "name" => "中部天竜",
                "hiragana" => "ちゅうぶてんりゅう",
                "katakana" => "チュウブテンリュウ",
                "katakana_half" => "ﾁｭｳﾌﾞﾃﾝﾘｭｳ",
                "romaji" => "chuubutenryuu",
                "memo" => "",
                "latitude" => "35.085395",
                "altitude" => "137.802814",
            ]);
            
            Station::create([
                "id" => 4525,
                "prefecture_id" => 22,
                "city_id" => 1017,
                "street_id" => 63938,
                "name" => "佐久間",
                "hiragana" => "さくま",
                "katakana" => "サクマ",
                "katakana_half" => "ｻｸﾏ",
                "romaji" => "sakuma",
                "memo" => "",
                "latitude" => "35.091755",
                "altitude" => "137.809758",
            ]);
            
            Station::create([
                "id" => 4526,
                "prefecture_id" => 22,
                "city_id" => 1017,
                "street_id" => 63938,
                "name" => "相月",
                "hiragana" => "あいづき",
                "katakana" => "アイヅキ",
                "katakana_half" => "ｱｲﾂﾞｷ",
                "romaji" => "aizuki",
                "memo" => "",
                "latitude" => "35.114754",
                "altitude" => "137.854198",
            ]);
            
            Station::create([
                "id" => 4527,
                "prefecture_id" => 22,
                "city_id" => 1027,
                "street_id" => 65063,
                "name" => "城西",
                "hiragana" => "しろにし",
                "katakana" => "シロニシ",
                "katakana_half" => "ｼﾛﾆｼ",
                "romaji" => "shironishi",
                "memo" => "",
                "latitude" => "35.131419",
                "altitude" => "137.862001",
            ]);
            
            Station::create([
                "id" => 4528,
                "prefecture_id" => 22,
                "city_id" => 1008,
                "street_id" => 63139,
                "name" => "向市場",
                "hiragana" => "むかいちば",
                "katakana" => "ムカイチバ",
                "katakana_half" => "ﾑｶｲﾁﾊﾞ",
                "romaji" => "mukaichiba",
                "memo" => "",
                "latitude" => "35.154166",
                "altitude" => "137.869472",
            ]);
            
            Station::create([
                "id" => 4529,
                "prefecture_id" => 22,
                "city_id" => 1017,
                "street_id" => 63991,
                "name" => "水窪",
                "hiragana" => "みさくぼ",
                "katakana" => "ミサクボ",
                "katakana_half" => "ﾐｻｸﾎﾞ",
                "romaji" => "misakubo",
                "memo" => "",
                "latitude" => "35.163221",
                "altitude" => "137.870665",
            ]);
            
            Station::create([
                "id" => 4530,
                "prefecture_id" => 22,
                "city_id" => 1008,
                "street_id" => 62974,
                "name" => "大嵐",
                "hiragana" => "おおぞれ",
                "katakana" => "オオゾレ",
                "katakana_half" => "ｵｵｿﾞﾚ",
                "romaji" => "oozore",
                "memo" => "",
                "latitude" => "35.190411",
                "altitude" => "137.818446",
            ]);
            
            Station::create([
                "id" => 4531,
                "prefecture_id" => 22,
                "city_id" => 1047,
                "street_id" => null,
                "name" => "小和田",
                "hiragana" => "こわだ",
                "katakana" => "コワダ",
                "katakana_half" => "ｺﾜﾀﾞ",
                "romaji" => "kowada",
                "memo" => "",
                "latitude" => "35.209910",
                "altitude" => "137.835944",
            ]);
            
            Station::create([
                "id" => 4532,
                "prefecture_id" => 22,
                "city_id" => 1020,
                "street_id" => null,
                "name" => "三島",
                "hiragana" => "みしま",
                "katakana" => "ミシマ",
                "katakana_half" => "ﾐｼﾏ",
                "romaji" => "mishima",
                "memo" => "",
                "latitude" => "35.126327",
                "altitude" => "138.909943",
            ]);
            
            Station::create([
                "id" => 4533,
                "prefecture_id" => 22,
                "city_id" => 1021,
                "street_id" => null,
                "name" => "新富士",
                "hiragana" => "しんふじ",
                "katakana" => "シンフジ",
                "katakana_half" => "ｼﾝﾌｼﾞ",
                "romaji" => "shinfuji",
                "memo" => "静岡県",
                "latitude" => "35.142098",
                "altitude" => "138.663407",
            ]);
            
            Station::create([
                "id" => 4534,
                "prefecture_id" => 22,
                "city_id" => 1008,
                "street_id" => null,
                "name" => "静岡",
                "hiragana" => "しずおか",
                "katakana" => "シズオカ",
                "katakana_half" => "ｼｽﾞｵｶ",
                "romaji" => "shizuoka",
                "memo" => "",
                "latitude" => "34.971806",
                "altitude" => "138.389937",
            ]);
            
            Station::create([
                "id" => 4535,
                "prefecture_id" => 22,
                "city_id" => 1027,
                "street_id" => null,
                "name" => "掛川",
                "hiragana" => "かけがわ",
                "katakana" => "カケガワ",
                "katakana_half" => "ｶｹｶﾞﾜ",
                "romaji" => "kakegawa",
                "memo" => "",
                "latitude" => "34.769405",
                "altitude" => "138.015394",
            ]);
            
            Station::create([
                "id" => 4536,
                "prefecture_id" => 22,
                "city_id" => 1011,
                "street_id" => null,
                "name" => "浜松",
                "hiragana" => "はままつ",
                "katakana" => "ハママツ",
                "katakana_half" => "ﾊﾏﾏﾂ",
                "romaji" => "hamamatsu",
                "memo" => "",
                "latitude" => "34.703962",
                "altitude" => "137.735115",
            ]);
            
            Station::create([
                "id" => 4537,
                "prefecture_id" => 22,
                "city_id" => 1044,
                "street_id" => null,
                "name" => "函南",
                "hiragana" => "かんなみ",
                "katakana" => "カンナミ",
                "katakana_half" => "ｶﾝﾅﾐ",
                "romaji" => "kannami",
                "memo" => "",
                "latitude" => "35.108746",
                "altitude" => "138.971050",
            ]);
            
            Station::create([
                "id" => 4538,
                "prefecture_id" => 22,
                "city_id" => 1038,
                "street_id" => 65632,
                "name" => "片浜",
                "hiragana" => "かたはま",
                "katakana" => "カタハマ",
                "katakana_half" => "ｶﾀﾊﾏ",
                "romaji" => "katahama",
                "memo" => "",
                "latitude" => "35.118214",
                "altitude" => "138.819228",
            ]);
            
            Station::create([
                "id" => 4539,
                "prefecture_id" => 22,
                "city_id" => 1038,
                "street_id" => null,
                "name" => "原",
                "hiragana" => "はら",
                "katakana" => "ハラ",
                "katakana_half" => "ﾊﾗ",
                "romaji" => "hara",
                "memo" => "静岡県",
                "latitude" => "35.124824",
                "altitude" => "138.793507",
            ]);
            
            Station::create([
                "id" => 4540,
                "prefecture_id" => 22,
                "city_id" => 1011,
                "street_id" => 63649,
                "name" => "東田子の浦",
                "hiragana" => "ひがしたごのうら",
                "katakana" => "ヒガシタゴノウラ",
                "katakana_half" => "ﾋｶﾞｼﾀｺﾞﾉｳﾗ",
                "romaji" => "higashitagonoura",
                "memo" => "",
                "latitude" => "35.136211",
                "altitude" => "138.745512",
            ]);
            
            Station::create([
                "id" => 4541,
                "prefecture_id" => 22,
                "city_id" => 1010,
                "street_id" => 63520,
                "name" => "吉原",
                "hiragana" => "よしわら",
                "katakana" => "ヨシワラ",
                "katakana_half" => "ﾖｼﾜﾗ",
                "romaji" => "yoshiwara",
                "memo" => "",
                "latitude" => "35.144099",
                "altitude" => "138.702181",
            ]);
            
            Station::create([
                "id" => 4542,
                "prefecture_id" => 22,
                "city_id" => 1021,
                "street_id" => null,
                "name" => "富士川",
                "hiragana" => "ふじかわ",
                "katakana" => "フジカワ",
                "katakana_half" => "ﾌｼﾞｶﾜ",
                "romaji" => "fujikawa",
                "memo" => "",
                "latitude" => "35.141153",
                "altitude" => "138.618633",
            ]);
            
            Station::create([
                "id" => 4543,
                "prefecture_id" => 22,
                "city_id" => 1010,
                "street_id" => 63348,
                "name" => "新蒲原",
                "hiragana" => "しんかんばら",
                "katakana" => "シンカンバラ",
                "katakana_half" => "ｼﾝｶﾝﾊﾞﾗ",
                "romaji" => "shinkanbara",
                "memo" => "",
                "latitude" => "35.119321",
                "altitude" => "138.607912",
            ]);
            
            Station::create([
                "id" => 4544,
                "prefecture_id" => 22,
                "city_id" => 1010,
                "street_id" => 63348,
                "name" => "蒲原",
                "hiragana" => "かんばら",
                "katakana" => "カンバラ",
                "katakana_half" => "ｶﾝﾊﾞﾗ",
                "romaji" => "kanbara",
                "memo" => "",
                "latitude" => "35.114044",
                "altitude" => "138.582887",
            ]);
            
            Station::create([
                "id" => 4545,
                "prefecture_id" => 22,
                "city_id" => 1010,
                "street_id" => 63503,
                "name" => "由比",
                "hiragana" => "ゆい",
                "katakana" => "ユイ",
                "katakana_half" => "ﾕｲ",
                "romaji" => "yui",
                "memo" => "",
                "latitude" => "35.097101",
                "altitude" => "138.552752",
            ]);
            
            Station::create([
                "id" => 4546,
                "prefecture_id" => 22,
                "city_id" => 1010,
                "street_id" => 63331,
                "name" => "興津",
                "hiragana" => "おきつ",
                "katakana" => "オキツ",
                "katakana_half" => "ｵｷﾂ",
                "romaji" => "okitsu",
                "memo" => "",
                "latitude" => "35.052578",
                "altitude" => "138.522062",
            ]);
            
            Station::create([
                "id" => 4547,
                "prefecture_id" => 22,
                "city_id" => 1010,
                "street_id" => null,
                "name" => "清水",
                "hiragana" => "しみず",
                "katakana" => "シミズ",
                "katakana_half" => "ｼﾐｽﾞ",
                "romaji" => "shimizu",
                "memo" => "静岡県",
                "latitude" => "35.023357",
                "altitude" => "138.488954",
            ]);
            
            Station::create([
                "id" => 4548,
                "prefecture_id" => 22,
                "city_id" => 1010,
                "street_id" => 63365,
                "name" => "草薙",
                "hiragana" => "くさなぎ",
                "katakana" => "クサナギ",
                "katakana_half" => "ｸｻﾅｷﾞ",
                "romaji" => "kusanagi",
                "memo" => "東海道本線",
                "latitude" => "35.002248",
                "altitude" => "138.441154",
            ]);
            
            Station::create([
                "id" => 4549,
                "prefecture_id" => 22,
                "city_id" => 1008,
                "street_id" => 63134,
                "name" => "東静岡",
                "hiragana" => "ひがししずおか",
                "katakana" => "ヒガシシズオカ",
                "katakana_half" => "ﾋｶﾞｼｼｽﾞｵｶ",
                "romaji" => "higashishizuoka",
                "memo" => "",
                "latitude" => "34.984667",
                "altitude" => "138.413324",
            ]);
            
            Station::create([
                "id" => 4550,
                "prefecture_id" => 22,
                "city_id" => 1008,
                "street_id" => 62949,
                "name" => "安倍川",
                "hiragana" => "あべかわ",
                "katakana" => "アベカワ",
                "katakana_half" => "ｱﾍﾞｶﾜ",
                "romaji" => "abekawa",
                "memo" => "",
                "latitude" => "34.941170",
                "altitude" => "138.364107",
            ]);
            
            Station::create([
                "id" => 4551,
                "prefecture_id" => 22,
                "city_id" => 1009,
                "street_id" => 63282,
                "name" => "用宗",
                "hiragana" => "もちむね",
                "katakana" => "モチムネ",
                "katakana_half" => "ﾓﾁﾑﾈ",
                "romaji" => "mochimune",
                "memo" => "",
                "latitude" => "34.921895",
                "altitude" => "138.359442",
            ]);
            
            Station::create([
                "id" => 4552,
                "prefecture_id" => 22,
                "city_id" => 1026,
                "street_id" => null,
                "name" => "焼津",
                "hiragana" => "やいづ",
                "katakana" => "ヤイヅ",
                "katakana_half" => "ﾔｲﾂﾞ",
                "romaji" => "yaizu",
                "memo" => "",
                "latitude" => "34.872177",
                "altitude" => "138.318615",
            ]);
            
            Station::create([
                "id" => 4553,
                "prefecture_id" => 22,
                "city_id" => 1026,
                "street_id" => 64958,
                "name" => "西焼津",
                "hiragana" => "にしやいづ",
                "katakana" => "ニシヤイヅ",
                "katakana_half" => "ﾆｼﾔｲﾂﾞ",
                "romaji" => "nishiyaizu",
                "memo" => "",
                "latitude" => "34.859956",
                "altitude" => "138.285562",
            ]);
            
            Station::create([
                "id" => 4554,
                "prefecture_id" => 22,
                "city_id" => 1028,
                "street_id" => null,
                "name" => "藤枝",
                "hiragana" => "ふじえだ",
                "katakana" => "フジエダ",
                "katakana_half" => "ﾌｼﾞｴﾀﾞ",
                "romaji" => "fujieda",
                "memo" => "",
                "latitude" => "34.849678",
                "altitude" => "138.252788",
            ]);
            
            Station::create([
                "id" => 4555,
                "prefecture_id" => 22,
                "city_id" => 1008,
                "street_id" => 63200,
                "name" => "六合",
                "hiragana" => "ろくごう",
                "katakana" => "ロクゴウ",
                "katakana_half" => "ﾛｸｺﾞｳ",
                "romaji" => "rokugou",
                "memo" => "",
                "latitude" => "34.836345",
                "altitude" => "138.203348",
            ]);
            
            Station::create([
                "id" => 4556,
                "prefecture_id" => 22,
                "city_id" => 1023,
                "street_id" => null,
                "name" => "島田",
                "hiragana" => "しまだ",
                "katakana" => "シマダ",
                "katakana_half" => "ｼﾏﾀﾞ",
                "romaji" => "shimada",
                "memo" => "静岡県",
                "latitude" => "34.830067",
                "altitude" => "138.173517",
            ]);
            
            Station::create([
                "id" => 4557,
                "prefecture_id" => 22,
                "city_id" => 1023,
                "street_id" => 64448,
                "name" => "金谷",
                "hiragana" => "かなや",
                "katakana" => "カナヤ",
                "katakana_half" => "ｶﾅﾔ",
                "romaji" => "kanaya",
                "memo" => "",
                "latitude" => "34.819234",
                "altitude" => "138.125772",
            ]);
            
            Station::create([
                "id" => 4558,
                "prefecture_id" => 22,
                "city_id" => 1036,
                "street_id" => null,
                "name" => "菊川",
                "hiragana" => "きくがわ",
                "katakana" => "キクガワ",
                "katakana_half" => "ｷｸｶﾞﾜ",
                "romaji" => "kikugawa",
                "memo" => "静岡県",
                "latitude" => "34.761879",
                "altitude" => "138.085944",
            ]);
            
            Station::create([
                "id" => 4559,
                "prefecture_id" => 22,
                "city_id" => 1030,
                "street_id" => 65286,
                "name" => "愛野",
                "hiragana" => "あいの",
                "katakana" => "アイノ",
                "katakana_half" => "ｱｲﾉ",
                "romaji" => "aino",
                "memo" => "静岡県",
                "latitude" => "34.752184",
                "altitude" => "137.961983",
            ]);
            
            Station::create([
                "id" => 4560,
                "prefecture_id" => 22,
                "city_id" => 1030,
                "street_id" => null,
                "name" => "袋井",
                "hiragana" => "ふくろい",
                "katakana" => "フクロイ",
                "katakana_half" => "ﾌｸﾛｲ",
                "romaji" => "fukuroi",
                "memo" => "",
                "latitude" => "34.741351",
                "altitude" => "137.926153",
            ]);
            
            Station::create([
                "id" => 4561,
                "prefecture_id" => 22,
                "city_id" => 1025,
                "street_id" => null,
                "name" => "磐田",
                "hiragana" => "いわた",
                "katakana" => "イワタ",
                "katakana_half" => "ｲﾜﾀ",
                "romaji" => "iwata",
                "memo" => "",
                "latitude" => "34.710242",
                "altitude" => "137.852272",
            ]);
            
            Station::create([
                "id" => 4562,
                "prefecture_id" => 22,
                "city_id" => 1009,
                "street_id" => 63242,
                "name" => "豊田町",
                "hiragana" => "とよだちょう",
                "katakana" => "トヨダチョウ",
                "katakana_half" => "ﾄﾖﾀﾞﾁｮｳ",
                "romaji" => "toyodachou",
                "memo" => "",
                "latitude" => "34.712185",
                "altitude" => "137.819775",
            ]);
            
            Station::create([
                "id" => 4563,
                "prefecture_id" => 22,
                "city_id" => 1017,
                "street_id" => null,
                "name" => "天竜川",
                "hiragana" => "てんりゅうがわ",
                "katakana" => "テンリュウガワ",
                "katakana_half" => "ﾃﾝﾘｭｳｶﾞﾜ",
                "romaji" => "tenryuugawa",
                "memo" => "",
                "latitude" => "34.716906",
                "altitude" => "137.779388",
            ]);
            
            Station::create([
                "id" => 4564,
                "prefecture_id" => 22,
                "city_id" => 1014,
                "street_id" => 63794,
                "name" => "高塚",
                "hiragana" => "たかつか",
                "katakana" => "タカツカ",
                "katakana_half" => "ﾀｶﾂｶ",
                "romaji" => "takatsuka",
                "memo" => "",
                "latitude" => "34.690490",
                "altitude" => "137.681509",
            ]);
            
            Station::create([
                "id" => 4565,
                "prefecture_id" => 22,
                "city_id" => 1013,
                "street_id" => 63755,
                "name" => "舞阪",
                "hiragana" => "まいさか",
                "katakana" => "マイサカ",
                "katakana_half" => "ﾏｲｻｶ",
                "romaji" => "maisaka",
                "memo" => "",
                "latitude" => "34.685601",
                "altitude" => "137.626459",
            ]);
            
            Station::create([
                "id" => 4566,
                "prefecture_id" => 22,
                "city_id" => 1013,
                "street_id" => 63757,
                "name" => "弁天島",
                "hiragana" => "べんてんじま",
                "katakana" => "ベンテンジマ",
                "katakana_half" => "ﾍﾞﾝﾃﾝｼﾞﾏ",
                "romaji" => "bentenjima",
                "memo" => "",
                "latitude" => "34.690101",
                "altitude" => "137.603043",
            ]);
            
            Station::create([
                "id" => 4567,
                "prefecture_id" => 22,
                "city_id" => 1033,
                "street_id" => 65435,
                "name" => "新居町",
                "hiragana" => "あらいまち",
                "katakana" => "アライマチ",
                "katakana_half" => "ｱﾗｲﾏﾁ",
                "romaji" => "araimachi",
                "memo" => "",
                "latitude" => "34.694210",
                "altitude" => "137.568907",
            ]);
            
            Station::create([
                "id" => 4568,
                "prefecture_id" => 22,
                "city_id" => 1033,
                "street_id" => 65462,
                "name" => "鷲津",
                "hiragana" => "わしづ",
                "katakana" => "ワシヅ",
                "katakana_half" => "ﾜｼﾂﾞ",
                "romaji" => "washizu",
                "memo" => "",
                "latitude" => "34.716735",
                "altitude" => "137.546186",
            ]);
            
            Station::create([
                "id" => 4569,
                "prefecture_id" => 22,
                "city_id" => 1033,
                "street_id" => 65454,
                "name" => "新所原",
                "hiragana" => "しんじょはら",
                "katakana" => "シンジョハラ",
                "katakana_half" => "ｼﾝｼﾞｮﾊﾗ",
                "romaji" => "shinjohara",
                "memo" => "",
                "latitude" => "34.723289",
                "altitude" => "137.484441",
            ]);
            
            Station::create([
                "id" => 4570,
                "prefecture_id" => 22,
                "city_id" => 1020,
                "street_id" => null,
                "name" => "三島広小路",
                "hiragana" => "みしまひろこうじ",
                "katakana" => "ミシマヒロコウジ",
                "katakana_half" => "ﾐｼﾏﾋﾛｺｳｼﾞ",
                "romaji" => "mishimahirokouji",
                "memo" => "",
                "latitude" => "35.119161",
                "altitude" => "138.911359",
            ]);
            
            Station::create([
                "id" => 4571,
                "prefecture_id" => 22,
                "city_id" => 1020,
                "street_id" => null,
                "name" => "三島田町",
                "hiragana" => "みしまたまち",
                "katakana" => "ミシマタマチ",
                "katakana_half" => "ﾐｼﾏﾀﾏﾁ",
                "romaji" => "mishimatamachi",
                "memo" => "",
                "latitude" => "35.116189",
                "altitude" => "138.918748",
            ]);
            
            Station::create([
                "id" => 4572,
                "prefecture_id" => 22,
                "city_id" => 1020,
                "street_id" => null,
                "name" => "三島二日町",
                "hiragana" => "みしまふつかまち",
                "katakana" => "ミシマフツカマチ",
                "katakana_half" => "ﾐｼﾏﾌﾂｶﾏﾁ",
                "romaji" => "mishimafutsukamachi",
                "memo" => "",
                "latitude" => "35.110995",
                "altitude" => "138.925997",
            ]);
            
            Station::create([
                "id" => 4573,
                "prefecture_id" => 22,
                "city_id" => 1020,
                "street_id" => 64234,
                "name" => "大場",
                "hiragana" => "だいば",
                "katakana" => "ダイバ",
                "katakana_half" => "ﾀﾞｲﾊﾞ",
                "romaji" => "daiba",
                "memo" => "",
                "latitude" => "35.092164",
                "altitude" => "138.939330",
            ]);
            
            Station::create([
                "id" => 4574,
                "prefecture_id" => 22,
                "city_id" => 1034,
                "street_id" => null,
                "name" => "伊豆仁田",
                "hiragana" => "いずにった",
                "katakana" => "イズニッタ",
                "katakana_half" => "ｲｽﾞﾆｯﾀ",
                "romaji" => "izunitta",
                "memo" => "",
                "latitude" => "35.078721",
                "altitude" => "138.941664",
            ]);
            
            Station::create([
                "id" => 4575,
                "prefecture_id" => 22,
                "city_id" => 1037,
                "street_id" => 65615,
                "name" => "原木",
                "hiragana" => "ばらき",
                "katakana" => "バラキ",
                "katakana_half" => "ﾊﾞﾗｷ",
                "romaji" => "baraki",
                "memo" => "",
                "latitude" => "35.065362",
                "altitude" => "138.943665",
            ]);
            
            Station::create([
                "id" => 4576,
                "prefecture_id" => 22,
                "city_id" => 1037,
                "street_id" => 65609,
                "name" => "韮山",
                "hiragana" => "にらやま",
                "katakana" => "ニラヤマ",
                "katakana_half" => "ﾆﾗﾔﾏ",
                "romaji" => "nirayama",
                "memo" => "",
                "latitude" => "35.053084",
                "altitude" => "138.945526",
            ]);
            
            Station::create([
                "id" => 4577,
                "prefecture_id" => 22,
                "city_id" => 1034,
                "street_id" => null,
                "name" => "伊豆長岡",
                "hiragana" => "いずながおか",
                "katakana" => "イズナガオカ",
                "katakana_half" => "ｲｽﾞﾅｶﾞｵｶ",
                "romaji" => "izunagaoka",
                "memo" => "",
                "latitude" => "35.039670",
                "altitude" => "138.947526",
            ]);
            
            Station::create([
                "id" => 4578,
                "prefecture_id" => 22,
                "city_id" => 1037,
                "street_id" => 65594,
                "name" => "田京",
                "hiragana" => "たきょう",
                "katakana" => "タキョウ",
                "katakana_half" => "ﾀｷｮｳ",
                "romaji" => "takyou",
                "memo" => "",
                "latitude" => "35.014506",
                "altitude" => "138.945805",
            ]);
            
            Station::create([
                "id" => 4579,
                "prefecture_id" => 22,
                "city_id" => 1037,
                "street_id" => 65583,
                "name" => "大仁",
                "hiragana" => "おおひと",
                "katakana" => "オオヒト",
                "katakana_half" => "ｵｵﾋﾄ",
                "romaji" => "oohito",
                "memo" => "",
                "latitude" => "34.994285",
                "altitude" => "138.937418",
            ]);
            
            Station::create([
                "id" => 4580,
                "prefecture_id" => 22,
                "city_id" => 1034,
                "street_id" => 65507,
                "name" => "牧之郷",
                "hiragana" => "まきのこう",
                "katakana" => "マキノコウ",
                "katakana_half" => "ﾏｷﾉｺｳ",
                "romaji" => "makinokou",
                "memo" => "",
                "latitude" => "34.988842",
                "altitude" => "138.954417",
            ]);
            
            Station::create([
                "id" => 4581,
                "prefecture_id" => 22,
                "city_id" => 1034,
                "street_id" => 65488,
                "name" => "修善寺",
                "hiragana" => "しゅぜんじ",
                "katakana" => "シュゼンジ",
                "katakana_half" => "ｼｭｾﾞﾝｼﾞ",
                "romaji" => "shuzenji",
                "memo" => "",
                "latitude" => "34.979287",
                "altitude" => "138.951113",
            ]);
            
            Station::create([
                "id" => 4582,
                "prefecture_id" => 22,
                "city_id" => 1041,
                "street_id" => null,
                "name" => "南伊東",
                "hiragana" => "みなみいとう",
                "katakana" => "ミナミイトウ",
                "katakana_half" => "ﾐﾅﾐｲﾄｳ",
                "romaji" => "minamiitou",
                "memo" => "",
                "latitude" => "34.957653",
                "altitude" => "139.088018",
            ]);
            
            Station::create([
                "id" => 4583,
                "prefecture_id" => 22,
                "city_id" => 1022,
                "street_id" => 64390,
                "name" => "川奈",
                "hiragana" => "かわな",
                "katakana" => "カワナ",
                "katakana_half" => "ｶﾜﾅ",
                "romaji" => "kawana",
                "memo" => "",
                "latitude" => "34.950849",
                "altitude" => "139.124988",
            ]);
            
            Station::create([
                "id" => 4584,
                "prefecture_id" => 22,
                "city_id" => 1022,
                "street_id" => 64411,
                "name" => "富戸",
                "hiragana" => "ふと",
                "katakana" => "フト",
                "katakana_half" => "ﾌﾄ",
                "romaji" => "futo",
                "memo" => "",
                "latitude" => "34.910047",
                "altitude" => "139.131656",
            ]);
            
            Station::create([
                "id" => 4585,
                "prefecture_id" => 22,
                "city_id" => 1008,
                "street_id" => 63047,
                "name" => "城ケ崎海岸",
                "hiragana" => "じょうがさきかいがん",
                "katakana" => "ジョウガサキカイガン",
                "katakana_half" => "ｼﾞｮｳｶﾞｻｷｶｲｶﾞﾝ",
                "romaji" => "jougasakikaigan",
                "memo" => "",
                "latitude" => "34.889411",
                "altitude" => "139.121603",
            ]);
            
            Station::create([
                "id" => 4586,
                "prefecture_id" => 22,
                "city_id" => 1034,
                "street_id" => null,
                "name" => "伊豆高原",
                "hiragana" => "いずこうげん",
                "katakana" => "イズコウゲン",
                "katakana_half" => "ｲｽﾞｺｳｹﾞﾝ",
                "romaji" => "izukougen",
                "memo" => "",
                "latitude" => "34.877550",
                "altitude" => "139.108188",
            ]);
            
            Station::create([
                "id" => 4587,
                "prefecture_id" => 22,
                "city_id" => 1034,
                "street_id" => null,
                "name" => "伊豆大川",
                "hiragana" => "いずおおかわ",
                "katakana" => "イズオオカワ",
                "katakana_half" => "ｲｽﾞｵｵｶﾜ",
                "romaji" => "izuookawa",
                "memo" => "",
                "latitude" => "34.843332",
                "altitude" => "139.074052",
            ]);
            
            Station::create([
                "id" => 4588,
                "prefecture_id" => 22,
                "city_id" => 1034,
                "street_id" => null,
                "name" => "伊豆北川",
                "hiragana" => "いずほっかわ",
                "katakana" => "イズホッカワ",
                "katakana_half" => "ｲｽﾞﾎｯｶﾜ",
                "romaji" => "izuhokkawa",
                "memo" => "",
                "latitude" => "34.827334",
                "altitude" => "139.075664",
            ]);
            
            Station::create([
                "id" => 4589,
                "prefecture_id" => 22,
                "city_id" => 1034,
                "street_id" => null,
                "name" => "伊豆熱川",
                "hiragana" => "いずあたがわ",
                "katakana" => "イズアタガワ",
                "katakana_half" => "ｲｽﾞｱﾀｶﾞﾜ",
                "romaji" => "izuatagawa",
                "memo" => "",
                "latitude" => "34.816806",
                "altitude" => "139.069054",
            ]);
            
            Station::create([
                "id" => 4590,
                "prefecture_id" => 22,
                "city_id" => 1039,
                "street_id" => 65673,
                "name" => "片瀬白田",
                "hiragana" => "かたせしらた",
                "katakana" => "カタセシラタ",
                "katakana_half" => "ｶﾀｾｼﾗﾀ",
                "romaji" => "kataseshirata",
                "memo" => "",
                "latitude" => "34.801781",
                "altitude" => "139.061139",
            ]);
            
            Station::create([
                "id" => 4591,
                "prefecture_id" => 22,
                "city_id" => 1034,
                "street_id" => null,
                "name" => "伊豆稲取",
                "hiragana" => "いずいなとり",
                "katakana" => "イズイナトリ",
                "katakana_half" => "ｲｽﾞｲﾅﾄﾘ",
                "romaji" => "izuinatori",
                "memo" => "",
                "latitude" => "34.774561",
                "altitude" => "139.037365",
            ]);
            
            Station::create([
                "id" => 4592,
                "prefecture_id" => 22,
                "city_id" => 1024,
                "street_id" => 64554,
                "name" => "今井浜海岸",
                "hiragana" => "いまいはまかいがん",
                "katakana" => "イマイハマカイガン",
                "katakana_half" => "ｲﾏｲﾊﾏｶｲｶﾞﾝ",
                "romaji" => "imaihamakaigan",
                "memo" => "",
                "latitude" => "34.753729",
                "altitude" => "139.004785",
            ]);
            
            Station::create([
                "id" => 4593,
                "prefecture_id" => 22,
                "city_id" => 1040,
                "street_id" => null,
                "name" => "河津",
                "hiragana" => "かわづ",
                "katakana" => "カワヅ",
                "katakana_half" => "ｶﾜﾂﾞ",
                "romaji" => "kawazu",
                "memo" => "",
                "latitude" => "34.747424",
                "altitude" => "138.996008",
            ]);
            
            Station::create([
                "id" => 4594,
                "prefecture_id" => 22,
                "city_id" => 1009,
                "street_id" => 63211,
                "name" => "稲梓",
                "hiragana" => "いなずさ",
                "katakana" => "イナズサ",
                "katakana_half" => "ｲﾅｽﾞｻ",
                "romaji" => "inazusa",
                "memo" => "",
                "latitude" => "34.722065",
                "altitude" => "138.949235",
            ]);
            
            Station::create([
                "id" => 4595,
                "prefecture_id" => 22,
                "city_id" => 1031,
                "street_id" => 65405,
                "name" => "蓮台寺",
                "hiragana" => "れんだいじ",
                "katakana" => "レンダイジ",
                "katakana_half" => "ﾚﾝﾀﾞｲｼﾞ",
                "romaji" => "rendaiji",
                "memo" => "",
                "latitude" => "34.699678",
                "altitude" => "138.941292",
            ]);
            
            Station::create([
                "id" => 4596,
                "prefecture_id" => 22,
                "city_id" => 1034,
                "street_id" => null,
                "name" => "伊豆急下田",
                "hiragana" => "いずきゅうしもだ",
                "katakana" => "イズキュウシモダ",
                "katakana_half" => "ｲｽﾞｷｭｳｼﾓﾀﾞ",
                "romaji" => "izukyuushimoda",
                "memo" => "",
                "latitude" => "34.679680",
                "altitude" => "138.944293",
            ]);
            
            Station::create([
                "id" => 4597,
                "prefecture_id" => 22,
                "city_id" => 1020,
                "street_id" => 64264,
                "name" => "ジヤトコ前",
                "hiragana" => "じゃとこまえ",
                "katakana" => "ジャトコマエ",
                "katakana_half" => "ｼﾞｬﾄｺﾏｴ",
                "romaji" => "jatokomae",
                "memo" => "",
                "latitude" => "35.157680",
                "altitude" => "138.690154",
            ]);
            
            Station::create([
                "id" => 4598,
                "prefecture_id" => 22,
                "city_id" => 1010,
                "street_id" => 63520,
                "name" => "吉原本町",
                "hiragana" => "よしわらほんちょう",
                "katakana" => "ヨシワラホンチョウ",
                "katakana_half" => "ﾖｼﾜﾗﾎﾝﾁｮｳ",
                "romaji" => "yoshiwarahonchou",
                "memo" => "",
                "latitude" => "35.160652",
                "altitude" => "138.689737",
            ]);
            
            Station::create([
                "id" => 4599,
                "prefecture_id" => 22,
                "city_id" => 1049,
                "street_id" => null,
                "name" => "本吉原",
                "hiragana" => "ほんよしわら",
                "katakana" => "ホンヨシワラ",
                "katakana_half" => "ﾎﾝﾖｼﾜﾗ",
                "romaji" => "honyoshiwara",
                "memo" => "",
                "latitude" => "35.161875",
                "altitude" => "138.692848",
            ]);
            
            Station::create([
                "id" => 4600,
                "prefecture_id" => 22,
                "city_id" => 1008,
                "street_id" => 63077,
                "name" => "岳南原田",
                "hiragana" => "がくなんはらだ",
                "katakana" => "ガクナンハラダ",
                "katakana_half" => "ｶﾞｸﾅﾝﾊﾗﾀﾞ",
                "romaji" => "gakunanharada",
                "memo" => "",
                "latitude" => "35.166013",
                "altitude" => "138.704791",
            ]);
            
            Station::create([
                "id" => 4601,
                "prefecture_id" => 22,
                "city_id" => 1024,
                "street_id" => 64641,
                "name" => "比奈",
                "hiragana" => "ひな",
                "katakana" => "ヒナ",
                "katakana_half" => "ﾋﾅ",
                "romaji" => "hina",
                "memo" => "",
                "latitude" => "35.161430",
                "altitude" => "138.713818",
            ]);
            
            Station::create([
                "id" => 4602,
                "prefecture_id" => 22,
                "city_id" => 1008,
                "street_id" => 63077,
                "name" => "岳南富士岡",
                "hiragana" => "がくなんふじおか",
                "katakana" => "ガクナンフジオカ",
                "katakana_half" => "ｶﾞｸﾅﾝﾌｼﾞｵｶ",
                "romaji" => "gakunanfujioka",
                "memo" => "",
                "latitude" => "35.160847",
                "altitude" => "138.723540",
            ]);
            
            Station::create([
                "id" => 4603,
                "prefecture_id" => 22,
                "city_id" => 1016,
                "street_id" => 63921,
                "name" => "須津",
                "hiragana" => "すど",
                "katakana" => "スド",
                "katakana_half" => "ｽﾄﾞ",
                "romaji" => "sudo",
                "memo" => "",
                "latitude" => "35.160403",
                "altitude" => "138.734011",
            ]);
            
            Station::create([
                "id" => 4604,
                "prefecture_id" => 22,
                "city_id" => 1023,
                "street_id" => 64474,
                "name" => "神谷",
                "hiragana" => "かみや",
                "katakana" => "カミヤ",
                "katakana_half" => "ｶﾐﾔ",
                "romaji" => "kamiya",
                "memo" => "",
                "latitude" => "35.160959",
                "altitude" => "138.743093",
            ]);
            
            Station::create([
                "id" => 4605,
                "prefecture_id" => 22,
                "city_id" => 1008,
                "street_id" => 63077,
                "name" => "岳南江尾",
                "hiragana" => "がくなんえのお",
                "katakana" => "ガクナンエノオ",
                "katakana_half" => "ｶﾞｸﾅﾝｴﾉｵ",
                "romaji" => "gakunanenoo",
                "memo" => "",
                "latitude" => "35.155265",
                "altitude" => "138.751787",
            ]);
            
            Station::create([
                "id" => 4606,
                "prefecture_id" => 22,
                "city_id" => 1008,
                "street_id" => null,
                "name" => "新静岡",
                "hiragana" => "しんしずおか",
                "katakana" => "シンシズオカ",
                "katakana_half" => "ｼﾝｼｽﾞｵｶ",
                "romaji" => "shinshizuoka",
                "memo" => "",
                "latitude" => "34.975834",
                "altitude" => "138.387687",
            ]);
            
            Station::create([
                "id" => 4607,
                "prefecture_id" => 22,
                "city_id" => 1008,
                "street_id" => 62990,
                "name" => "日吉町",
                "hiragana" => "ひよしちょう",
                "katakana" => "ヒヨシチョウ",
                "katakana_half" => "ﾋﾖｼﾁｮｳ",
                "romaji" => "hiyoshichou",
                "memo" => "",
                "latitude" => "34.976889",
                "altitude" => "138.391243",
            ]);
            
            Station::create([
                "id" => 4608,
                "prefecture_id" => 22,
                "city_id" => 1008,
                "street_id" => 62986,
                "name" => "音羽町",
                "hiragana" => "おとわちょう",
                "katakana" => "オトワチョウ",
                "katakana_half" => "ｵﾄﾜﾁｮｳ",
                "romaji" => "otowachou",
                "memo" => "",
                "latitude" => "34.978389",
                "altitude" => "138.395826",
            ]);
            
            Station::create([
                "id" => 4609,
                "prefecture_id" => 22,
                "city_id" => 1008,
                "street_id" => 62991,
                "name" => "春日町",
                "hiragana" => "かすがちょう",
                "katakana" => "カスガチョウ",
                "katakana_half" => "ｶｽｶﾞﾁｮｳ",
                "romaji" => "kasugachou",
                "memo" => "",
                "latitude" => "34.978389",
                "altitude" => "138.400881",
            ]);
            
            Station::create([
                "id" => 4610,
                "prefecture_id" => 22,
                "city_id" => 1008,
                "street_id" => 63106,
                "name" => "長沼",
                "hiragana" => "ながぬま",
                "katakana" => "ナガヌマ",
                "katakana_half" => "ﾅｶﾞﾇﾏ",
                "romaji" => "naganuma",
                "memo" => "静岡県",
                "latitude" => "34.988999",
                "altitude" => "138.413018",
            ]);
            
            Station::create([
                "id" => 4611,
                "prefecture_id" => 22,
                "city_id" => 1008,
                "street_id" => 63149,
                "name" => "古庄",
                "hiragana" => "ふるしょう",
                "katakana" => "フルショウ",
                "katakana_half" => "ﾌﾙｼｮｳ",
                "romaji" => "furushou",
                "memo" => "",
                "latitude" => "34.992916",
                "altitude" => "138.419517",
            ]);
            
            Station::create([
                "id" => 4612,
                "prefecture_id" => 22,
                "city_id" => 1008,
                "street_id" => null,
                "name" => "県総合運動場",
                "hiragana" => "けんそうごううんどうじょう",
                "katakana" => "ケンソウゴウウンドウジョウ",
                "katakana_half" => "ｹﾝｿｳｺﾞｳｳﾝﾄﾞｳｼﾞｮｳ",
                "romaji" => "kensougouundoujou",
                "memo" => "",
                "latitude" => "34.993332",
                "altitude" => "138.430267",
            ]);
            
            Station::create([
                "id" => 4613,
                "prefecture_id" => 22,
                "city_id" => 1008,
                "street_id" => null,
                "name" => "県立美術館前",
                "hiragana" => "けんりつびじゅつかんまえ",
                "katakana" => "ケンリツビジュツカンマエ",
                "katakana_half" => "ｹﾝﾘﾂﾋﾞｼﾞｭﾂｶﾝﾏｴ",
                "romaji" => "kenritsubijutsukanmae",
                "memo" => "",
                "latitude" => "34.997526",
                "altitude" => "138.438293",
            ]);
            
            Station::create([
                "id" => 4614,
                "prefecture_id" => 22,
                "city_id" => 1010,
                "street_id" => 63473,
                "name" => "御門台",
                "hiragana" => "みかどだい",
                "katakana" => "ミカドダイ",
                "katakana_half" => "ﾐｶﾄﾞﾀﾞｲ",
                "romaji" => "mikadodai",
                "memo" => "",
                "latitude" => "35.007915",
                "altitude" => "138.452597",
            ]);
            
            Station::create([
                "id" => 4615,
                "prefecture_id" => 22,
                "city_id" => 1008,
                "street_id" => null,
                "name" => "狐ケ崎",
                "hiragana" => "きつねがさき",
                "katakana" => "キツネガサキ",
                "katakana_half" => "ｷﾂﾈｶﾞｻｷ",
                "romaji" => "kitsunegasaki",
                "memo" => "",
                "latitude" => "35.011414",
                "altitude" => "138.459708",
            ]);
            
            Station::create([
                "id" => 4616,
                "prefecture_id" => 22,
                "city_id" => 1010,
                "street_id" => 63382,
                "name" => "桜橋",
                "hiragana" => "さくらばし",
                "katakana" => "サクラバシ",
                "katakana_half" => "ｻｸﾗﾊﾞｼ",
                "romaji" => "sakurabashi",
                "memo" => "静岡県",
                "latitude" => "35.013109",
                "altitude" => "138.477595",
            ]);
            
            Station::create([
                "id" => 4617,
                "prefecture_id" => 22,
                "city_id" => 1010,
                "street_id" => 63309,
                "name" => "入江岡",
                "hiragana" => "いりえおか",
                "katakana" => "イリエオカ",
                "katakana_half" => "ｲﾘｴｵｶ",
                "romaji" => "irieoka",
                "memo" => "",
                "latitude" => "35.015025",
                "altitude" => "138.481289",
            ]);
            
            Station::create([
                "id" => 4618,
                "prefecture_id" => 22,
                "city_id" => 1010,
                "street_id" => null,
                "name" => "新清水",
                "hiragana" => "しんしみず",
                "katakana" => "シンシミズ",
                "katakana_half" => "ｼﾝｼﾐｽﾞ",
                "romaji" => "shinshimizu",
                "memo" => "",
                "latitude" => "35.017053",
                "altitude" => "138.487483",
            ]);
            
            Station::create([
                "id" => 4619,
                "prefecture_id" => 22,
                "city_id" => 1023,
                "street_id" => 64448,
                "name" => "新金谷",
                "hiragana" => "しんかなや",
                "katakana" => "シンカナヤ",
                "katakana_half" => "ｼﾝｶﾅﾔ",
                "romaji" => "shinkanaya",
                "memo" => "",
                "latitude" => "34.825651",
                "altitude" => "138.137687",
            ]);
            
            Station::create([
                "id" => 4620,
                "prefecture_id" => 22,
                "city_id" => 1023,
                "street_id" => 64460,
                "name" => "代官町",
                "hiragana" => "だいかんちょう",
                "katakana" => "ダイカンチョウ",
                "katakana_half" => "ﾀﾞｲｶﾝﾁｮｳ",
                "romaji" => "daikanchou",
                "memo" => "",
                "latitude" => "34.835399",
                "altitude" => "138.126243",
            ]);
            
            Station::create([
                "id" => 4621,
                "prefecture_id" => 22,
                "city_id" => 1008,
                "street_id" => 62990,
                "name" => "日切",
                "hiragana" => "ひぎり",
                "katakana" => "ヒギリ",
                "katakana_half" => "ﾋｷﾞﾘ",
                "romaji" => "higiri",
                "memo" => "",
                "latitude" => "34.839399",
                "altitude" => "138.122438",
            ]);
            
            Station::create([
                "id" => 4622,
                "prefecture_id" => 22,
                "city_id" => 1017,
                "street_id" => 63970,
                "name" => "五和",
                "hiragana" => "ごか",
                "katakana" => "ゴカ",
                "katakana_half" => "ｺﾞｶ",
                "romaji" => "goka",
                "memo" => "",
                "latitude" => "34.844842",
                "altitude" => "138.120771",
            ]);
            
            Station::create([
                "id" => 4623,
                "prefecture_id" => 22,
                "city_id" => 1023,
                "street_id" => 64473,
                "name" => "神尾",
                "hiragana" => "かみお",
                "katakana" => "カミオ",
                "katakana_half" => "ｶﾐｵ",
                "romaji" => "kamio",
                "memo" => "",
                "latitude" => "34.882949",
                "altitude" => "138.101660",
            ]);
            
            Station::create([
                "id" => 4624,
                "prefecture_id" => 22,
                "city_id" => 1023,
                "street_id" => 64519,
                "name" => "福用",
                "hiragana" => "ふくよう",
                "katakana" => "フクヨウ",
                "katakana_half" => "ﾌｸﾖｳ",
                "romaji" => "fukuyou",
                "memo" => "",
                "latitude" => "34.901864",
                "altitude" => "138.090077",
            ]);
            
            Station::create([
                "id" => 4625,
                "prefecture_id" => 22,
                "city_id" => 1009,
                "street_id" => 63216,
                "name" => "大和田",
                "hiragana" => "おわだ",
                "katakana" => "オワダ",
                "katakana_half" => "ｵﾜﾀﾞ",
                "romaji" => "owada",
                "memo" => "静岡県",
                "latitude" => "34.921057",
                "altitude" => "138.082160",
            ]);
            
            Station::create([
                "id" => 4626,
                "prefecture_id" => 22,
                "city_id" => 1023,
                "street_id" => 64475,
                "name" => "家山",
                "hiragana" => "いえやま",
                "katakana" => "イエヤマ",
                "katakana_half" => "ｲｴﾔﾏ",
                "romaji" => "ieyama",
                "memo" => "",
                "latitude" => "34.939943",
                "altitude" => "138.077798",
            ]);
            
            Station::create([
                "id" => 4627,
                "prefecture_id" => 22,
                "city_id" => 1023,
                "street_id" => 64481,
                "name" => "抜里",
                "hiragana" => "ぬくり",
                "katakana" => "ヌクリ",
                "katakana_half" => "ﾇｸﾘ",
                "romaji" => "nukuri",
                "memo" => "",
                "latitude" => "34.953414",
                "altitude" => "138.087658",
            ]);
            
            Station::create([
                "id" => 4628,
                "prefecture_id" => 22,
                "city_id" => 1049,
                "street_id" => null,
                "name" => "川根温泉笹間渡",
                "hiragana" => "かわねおんせんささまど",
                "katakana" => "カワネオンセンササマド",
                "katakana_half" => "ｶﾜﾈｵﾝｾﾝｻｻﾏﾄﾞ",
                "romaji" => "kawaneonsensasamado",
                "memo" => "",
                "latitude" => "34.962329",
                "altitude" => "138.086130",
            ]);
            
            Station::create([
                "id" => 4629,
                "prefecture_id" => 22,
                "city_id" => 1049,
                "street_id" => 65851,
                "name" => "地名",
                "hiragana" => "じな",
                "katakana" => "ジナ",
                "katakana_half" => "ｼﾞﾅ",
                "romaji" => "jina",
                "memo" => "",
                "latitude" => "34.985854",
                "altitude" => "138.087267",
            ]);
            
            Station::create([
                "id" => 4630,
                "prefecture_id" => 22,
                "city_id" => 1011,
                "street_id" => 63600,
                "name" => "塩郷",
                "hiragana" => "しおごう",
                "katakana" => "シオゴウ",
                "katakana_half" => "ｼｵｺﾞｳ",
                "romaji" => "shiogou",
                "memo" => "",
                "latitude" => "34.997603",
                "altitude" => "138.090599",
            ]);
            
            Station::create([
                "id" => 4631,
                "prefecture_id" => 22,
                "city_id" => 1049,
                "street_id" => 65852,
                "name" => "下泉",
                "hiragana" => "しもいずみ",
                "katakana" => "シモイズミ",
                "katakana_half" => "ｼﾓｲｽﾞﾐ",
                "romaji" => "shimoizumi",
                "memo" => "",
                "latitude" => "35.022184",
                "altitude" => "138.090071",
            ]);
            
            Station::create([
                "id" => 4632,
                "prefecture_id" => 22,
                "city_id" => 1049,
                "street_id" => 65856,
                "name" => "田野口",
                "hiragana" => "たのくち",
                "katakana" => "タノクチ",
                "katakana_half" => "ﾀﾉｸﾁ",
                "romaji" => "tanokuchi",
                "memo" => "",
                "latitude" => "35.051264",
                "altitude" => "138.095458",
            ]);
            
            Station::create([
                "id" => 4633,
                "prefecture_id" => 22,
                "city_id" => 1009,
                "street_id" => null,
                "name" => "駿河徳山",
                "hiragana" => "するがとくやま",
                "katakana" => "スルガトクヤマ",
                "katakana_half" => "ｽﾙｶﾞﾄｸﾔﾏ",
                "romaji" => "surugatokuyama",
                "memo" => "",
                "latitude" => "35.074652",
                "altitude" => "138.110594",
            ]);
            
            Station::create([
                "id" => 4634,
                "prefecture_id" => 22,
                "city_id" => 1049,
                "street_id" => 65841,
                "name" => "青部",
                "hiragana" => "あおべ",
                "katakana" => "アオベ",
                "katakana_half" => "ｱｵﾍﾞ",
                "romaji" => "aobe",
                "memo" => "",
                "latitude" => "35.089567",
                "altitude" => "138.115482",
            ]);
            
            Station::create([
                "id" => 4635,
                "prefecture_id" => 22,
                "city_id" => 1049,
                "street_id" => 65850,
                "name" => "崎平",
                "hiragana" => "さきだいら",
                "katakana" => "サキダイラ",
                "katakana_half" => "ｻｷﾀﾞｲﾗ",
                "romaji" => "sakidaira",
                "memo" => "",
                "latitude" => "35.091566",
                "altitude" => "138.127232",
            ]);
            
            Station::create([
                "id" => 4636,
                "prefecture_id" => 22,
                "city_id" => 1049,
                "street_id" => 65854,
                "name" => "千頭",
                "hiragana" => "せんず",
                "katakana" => "センズ",
                "katakana_half" => "ｾﾝｽﾞ",
                "romaji" => "senzu",
                "memo" => "",
                "latitude" => "35.107731",
                "altitude" => "138.136563",
            ]);
            
            Station::create([
                "id" => 4637,
                "prefecture_id" => 22,
                "city_id" => 1049,
                "street_id" => null,
                "name" => "川根両国",
                "hiragana" => "かわねりょうごく",
                "katakana" => "カワネリョウゴク",
                "katakana_half" => "ｶﾜﾈﾘｮｳｺﾞｸ",
                "romaji" => "kawaneryougoku",
                "memo" => "",
                "latitude" => "35.116675",
                "altitude" => "138.140534",
            ]);
            
            Station::create([
                "id" => 4638,
                "prefecture_id" => 22,
                "city_id" => 1008,
                "street_id" => 62940,
                "name" => "沢間",
                "hiragana" => "さわま",
                "katakana" => "サワマ",
                "katakana_half" => "ｻﾜﾏ",
                "romaji" => "sawama",
                "memo" => "",
                "latitude" => "35.124508",
                "altitude" => "138.134035",
            ]);
            
            Station::create([
                "id" => 4639,
                "prefecture_id" => 22,
                "city_id" => 1008,
                "street_id" => 62943,
                "name" => "土本",
                "hiragana" => "どもと",
                "katakana" => "ドモト",
                "katakana_half" => "ﾄﾞﾓﾄ",
                "romaji" => "domoto",
                "memo" => "",
                "latitude" => "35.135867",
                "altitude" => "138.139089",
            ]);
            
            Station::create([
                "id" => 4640,
                "prefecture_id" => 22,
                "city_id" => 1049,
                "street_id" => null,
                "name" => "川根小山",
                "hiragana" => "かわねこやま",
                "katakana" => "カワネコヤマ",
                "katakana_half" => "ｶﾜﾈｺﾔﾏ",
                "romaji" => "kawanekoyama",
                "memo" => "",
                "latitude" => "35.141533",
                "altitude" => "138.141005",
            ]);
            
            Station::create([
                "id" => 4641,
                "prefecture_id" => 22,
                "city_id" => 1049,
                "street_id" => 65845,
                "name" => "奥泉",
                "hiragana" => "おくいずみ",
                "katakana" => "オクイズミ",
                "katakana_half" => "ｵｸｲｽﾞﾐ",
                "romaji" => "okuizumi",
                "memo" => "",
                "latitude" => "35.149588",
                "altitude" => "138.147616",
            ]);
            
            Station::create([
                "id" => 4642,
                "prefecture_id" => 22,
                "city_id" => 1011,
                "street_id" => 63533,
                "name" => "アプトいちしろ",
                "hiragana" => "あぷといちしろ",
                "katakana" => "アプトイチシロ",
                "katakana_half" => "ｱﾌﾟﾄｲﾁｼﾛ",
                "romaji" => "aputoichishiro",
                "memo" => "",
                "latitude" => "35.167004",
                "altitude" => "138.145004",
            ]);
            
            Station::create([
                "id" => 4643,
                "prefecture_id" => 22,
                "city_id" => 1046,
                "street_id" => null,
                "name" => "長島ダム",
                "hiragana" => "ながしまだむ",
                "katakana" => "ナガシマダム",
                "katakana_half" => "ﾅｶﾞｼﾏﾀﾞﾑ",
                "romaji" => "nagashimadamu",
                "memo" => "",
                "latitude" => "35.167143",
                "altitude" => "138.158253",
            ]);
            
            Station::create([
                "id" => 4644,
                "prefecture_id" => 22,
                "city_id" => 1021,
                "street_id" => 64353,
                "name" => "ひらんだ",
                "hiragana" => "ひらんだ",
                "katakana" => "ヒランダ",
                "katakana_half" => "ﾋﾗﾝﾀﾞ",
                "romaji" => "hiranda",
                "memo" => "",
                "latitude" => "35.164004",
                "altitude" => "138.168808",
            ]);
            
            Station::create([
                "id" => 4645,
                "prefecture_id" => 22,
                "city_id" => 1008,
                "street_id" => 62946,
                "name" => "奥大井湖上",
                "hiragana" => "おくおおいこじょう",
                "katakana" => "オクオオイコジョウ",
                "katakana_half" => "ｵｸｵｵｲｺｼﾞｮｳ",
                "romaji" => "okuooikojou",
                "memo" => "",
                "latitude" => "35.168336",
                "altitude" => "138.181113",
            ]);
            
            Station::create([
                "id" => 4646,
                "prefecture_id" => 22,
                "city_id" => 1008,
                "street_id" => null,
                "name" => "接岨峡温泉",
                "hiragana" => "せっそきょうおんせん",
                "katakana" => "セッソキョウオンセン",
                "katakana_half" => "ｾｯｿｷｮｳｵﾝｾﾝ",
                "romaji" => "sessokyouonsen",
                "memo" => "",
                "latitude" => "35.178780",
                "altitude" => "138.185334",
            ]);
            
            Station::create([
                "id" => 4647,
                "prefecture_id" => 22,
                "city_id" => 1008,
                "street_id" => 63042,
                "name" => "尾盛",
                "hiragana" => "おもり",
                "katakana" => "オモリ",
                "katakana_half" => "ｵﾓﾘ",
                "romaji" => "omori",
                "memo" => "",
                "latitude" => "35.192084",
                "altitude" => "138.174472",
            ]);
            
            Station::create([
                "id" => 4648,
                "prefecture_id" => 22,
                "city_id" => 1008,
                "street_id" => 63066,
                "name" => "閑蔵",
                "hiragana" => "かんぞう",
                "katakana" => "カンゾウ",
                "katakana_half" => "ｶﾝｿﾞｳ",
                "romaji" => "kanzou",
                "memo" => "",
                "latitude" => "35.191696",
                "altitude" => "138.194277",
            ]);
            
            Station::create([
                "id" => 4649,
                "prefecture_id" => 22,
                "city_id" => 1008,
                "street_id" => 62957,
                "name" => "井川",
                "hiragana" => "いかわ",
                "katakana" => "イカワ",
                "katakana_half" => "ｲｶﾜ",
                "romaji" => "ikawa",
                "memo" => "",
                "latitude" => "35.212305",
                "altitude" => "138.221107",
            ]);
            
            Station::create([
                "id" => 4650,
                "prefecture_id" => 22,
                "city_id" => 1027,
                "street_id" => null,
                "name" => "掛川市役所前",
                "hiragana" => "かけがわしやくしょまえ",
                "katakana" => "カケガワシヤクショマエ",
                "katakana_half" => "ｶｹｶﾞﾜｼﾔｸｼｮﾏｴ",
                "romaji" => "kakegawashiyakushomae",
                "memo" => "",
                "latitude" => "34.769765",
                "altitude" => "138.001256",
            ]);
            
            Station::create([
                "id" => 4651,
                "prefecture_id" => 22,
                "city_id" => 1013,
                "street_id" => null,
                "name" => "西掛川",
                "hiragana" => "にしかけがわ",
                "katakana" => "ニシカケガワ",
                "katakana_half" => "ﾆｼｶｹｶﾞﾜ",
                "romaji" => "nishikakegawa",
                "memo" => "",
                "latitude" => "34.772043",
                "altitude" => "137.994952",
            ]);
            
            Station::create([
                "id" => 4652,
                "prefecture_id" => 22,
                "city_id" => 1008,
                "street_id" => 63039,
                "name" => "桜木",
                "hiragana" => "さくらぎ",
                "katakana" => "サクラギ",
                "katakana_half" => "ｻｸﾗｷﾞ",
                "romaji" => "sakuragi",
                "memo" => "静岡県",
                "latitude" => "34.778097",
                "altitude" => "137.972619",
            ]);
            
            Station::create([
                "id" => 4653,
                "prefecture_id" => 22,
                "city_id" => 1008,
                "street_id" => 62935,
                "name" => "いこいの広場",
                "hiragana" => "いこいのひろば",
                "katakana" => "イコイノヒロバ",
                "katakana_half" => "ｲｺｲﾉﾋﾛﾊﾞ",
                "romaji" => "ikoinohiroba",
                "memo" => "",
                "latitude" => "34.787679",
                "altitude" => "137.963981",
            ]);
            
            Station::create([
                "id" => 4654,
                "prefecture_id" => 22,
                "city_id" => 1027,
                "street_id" => 65111,
                "name" => "細谷",
                "hiragana" => "ほそや",
                "katakana" => "ホソヤ",
                "katakana_half" => "ﾎｿﾔ",
                "romaji" => "hosoya",
                "memo" => "静岡県",
                "latitude" => "34.792651",
                "altitude" => "137.961565",
            ]);
            
            Station::create([
                "id" => 4655,
                "prefecture_id" => 22,
                "city_id" => 1038,
                "street_id" => null,
                "name" => "原谷",
                "hiragana" => "はらのや",
                "katakana" => "ハラノヤ",
                "katakana_half" => "ﾊﾗﾉﾔ",
                "romaji" => "haranoya",
                "memo" => "",
                "latitude" => "34.808483",
                "altitude" => "137.954898",
            ]);
            
            Station::create([
                "id" => 4656,
                "prefecture_id" => 22,
                "city_id" => 1024,
                "street_id" => 64639,
                "name" => "原田",
                "hiragana" => "はらだ",
                "katakana" => "ハラダ",
                "katakana_half" => "ﾊﾗﾀﾞ",
                "romaji" => "harada",
                "memo" => "静岡県",
                "latitude" => "34.820704",
                "altitude" => "137.952731",
            ]);
            
            Station::create([
                "id" => 4657,
                "prefecture_id" => 22,
                "city_id" => 1008,
                "street_id" => 63029,
                "name" => "戸綿",
                "hiragana" => "とわた",
                "katakana" => "トワタ",
                "katakana_half" => "ﾄﾜﾀ",
                "romaji" => "towata",
                "memo" => "",
                "latitude" => "34.831397",
                "altitude" => "137.931121",
            ]);
            
            Station::create([
                "id" => 4658,
                "prefecture_id" => 22,
                "city_id" => 1014,
                "street_id" => 63772,
                "name" => "遠州森",
                "hiragana" => "えんしゅうもり",
                "katakana" => "エンシュウモリ",
                "katakana_half" => "ｴﾝｼｭｳﾓﾘ",
                "romaji" => "enshuumori",
                "memo" => "",
                "latitude" => "34.831341",
                "altitude" => "137.924426",
            ]);
            
            Station::create([
                "id" => 4659,
                "prefecture_id" => 22,
                "city_id" => 1050,
                "street_id" => null,
                "name" => "森町病院前",
                "hiragana" => "もりまちびょういんまえ",
                "katakana" => "モリマチビョウインマエ",
                "katakana_half" => "ﾓﾘﾏﾁﾋﾞｮｳｲﾝﾏｴ",
                "romaji" => "morimachibyouinmae",
                "memo" => "",
                "latitude" => "34.826203",
                "altitude" => "137.917733",
            ]);
            
            Station::create([
                "id" => 4660,
                "prefecture_id" => 22,
                "city_id" => 1050,
                "street_id" => 65868,
                "name" => "円田",
                "hiragana" => "えんでん",
                "katakana" => "エンデン",
                "katakana_half" => "ｴﾝﾃﾞﾝ",
                "romaji" => "enden",
                "memo" => "",
                "latitude" => "34.820814",
                "altitude" => "137.907623",
            ]);
            
            Station::create([
                "id" => 4661,
                "prefecture_id" => 22,
                "city_id" => 1008,
                "street_id" => 62972,
                "name" => "遠江一宮",
                "hiragana" => "とおとうみいちのみや",
                "katakana" => "トオトウミイチノミヤ",
                "katakana_half" => "ﾄｵﾄｳﾐｲﾁﾉﾐﾔ",
                "romaji" => "tootoumiichinomiya",
                "memo" => "",
                "latitude" => "34.817897",
                "altitude" => "137.888931",
            ]);
            
            Station::create([
                "id" => 4662,
                "prefecture_id" => 22,
                "city_id" => 1009,
                "street_id" => 63230,
                "name" => "敷地",
                "hiragana" => "しきじ",
                "katakana" => "シキジ",
                "katakana_half" => "ｼｷｼﾞ",
                "romaji" => "shikiji",
                "memo" => "",
                "latitude" => "34.826507",
                "altitude" => "137.864098",
            ]);
            
            Station::create([
                "id" => 4663,
                "prefecture_id" => 22,
                "city_id" => 1015,
                "street_id" => 63853,
                "name" => "豊岡",
                "hiragana" => "とよおか",
                "katakana" => "トヨオカ",
                "katakana_half" => "ﾄﾖｵｶ",
                "romaji" => "toyooka",
                "memo" => "静岡県",
                "latitude" => "34.836950",
                "altitude" => "137.839711",
            ]);
            
            Station::create([
                "id" => 4664,
                "prefecture_id" => 22,
                "city_id" => 1025,
                "street_id" => 64731,
                "name" => "上野部",
                "hiragana" => "かみのべ",
                "katakana" => "カミノベ",
                "katakana_half" => "ｶﾐﾉﾍﾞ",
                "romaji" => "kaminobe",
                "memo" => "",
                "latitude" => "34.847226",
                "altitude" => "137.830240",
            ]);
            
            Station::create([
                "id" => 4665,
                "prefecture_id" => 22,
                "city_id" => 1017,
                "street_id" => null,
                "name" => "天竜二俣",
                "hiragana" => "てんりゅうふたまた",
                "katakana" => "テンリュウフタマタ",
                "katakana_half" => "ﾃﾝﾘｭｳﾌﾀﾏﾀ",
                "romaji" => "tenryuufutamata",
                "memo" => "",
                "latitude" => "34.859086",
                "altitude" => "137.820128",
            ]);
            
            Station::create([
                "id" => 4666,
                "prefecture_id" => 22,
                "city_id" => 1017,
                "street_id" => 63984,
                "name" => "二俣本町",
                "hiragana" => "ふたまたほんまち",
                "katakana" => "フタマタホンマチ",
                "katakana_half" => "ﾌﾀﾏﾀﾎﾝﾏﾁ",
                "romaji" => "futamatahonmachi",
                "memo" => "",
                "latitude" => "34.859169",
                "altitude" => "137.812740",
            ]);
            
            Station::create([
                "id" => 4667,
                "prefecture_id" => 22,
                "city_id" => 1013,
                "street_id" => null,
                "name" => "西鹿島",
                "hiragana" => "にしかじま",
                "katakana" => "ニシカジマ",
                "katakana_half" => "ﾆｼｶｼﾞﾏ",
                "romaji" => "nishikajima",
                "memo" => "",
                "latitude" => "34.846587",
                "altitude" => "137.807964",
            ]);
            
            Station::create([
                "id" => 4668,
                "prefecture_id" => 22,
                "city_id" => 1008,
                "street_id" => 62963,
                "name" => "岩水寺",
                "hiragana" => "がんすいじ",
                "katakana" => "ガンスイジ",
                "katakana_half" => "ｶﾞﾝｽｲｼﾞ",
                "romaji" => "gansuiji",
                "memo" => "",
                "latitude" => "34.837948",
                "altitude" => "137.792715",
            ]);
            
            Station::create([
                "id" => 4669,
                "prefecture_id" => 22,
                "city_id" => 1016,
                "street_id" => 63919,
                "name" => "宮口",
                "hiragana" => "みやぐち",
                "katakana" => "ミヤグチ",
                "katakana_half" => "ﾐﾔｸﾞﾁ",
                "romaji" => "miyaguchi",
                "memo" => "",
                "latitude" => "34.830422",
                "altitude" => "137.773828",
            ]);
            
            Station::create([
                "id" => 4670,
                "prefecture_id" => 22,
                "city_id" => 1008,
                "street_id" => null,
                "name" => "フルーツパーク",
                "hiragana" => "ふるーつぱーく",
                "katakana" => "フルーツパーク",
                "katakana_half" => "ﾌﾙｰﾂﾊﾟｰｸ",
                "romaji" => "furuｰtsupaｰku",
                "memo" => "",
                "latitude" => "34.835031",
                "altitude" => "137.733304",
            ]);
            
            Station::create([
                "id" => 4671,
                "prefecture_id" => 22,
                "city_id" => 1015,
                "street_id" => 63851,
                "name" => "都田",
                "hiragana" => "みやこだ",
                "katakana" => "ミヤコダ",
                "katakana_half" => "ﾐﾔｺﾀﾞ",
                "romaji" => "miyakoda",
                "memo" => "",
                "latitude" => "34.828087",
                "altitude" => "137.718250",
            ]);
            
            Station::create([
                "id" => 4672,
                "prefecture_id" => 22,
                "city_id" => 1008,
                "street_id" => 63095,
                "name" => "常葉大学前",
                "hiragana" => "とこはだいがくまえ",
                "katakana" => "トコハダイガクマエ",
                "katakana_half" => "ﾄｺﾊﾀﾞｲｶﾞｸﾏｴ",
                "romaji" => "tokohadaigakumae",
                "memo" => "",
                "latitude" => "34.819727",
                "altitude" => "137.708917",
            ]);
            
            Station::create([
                "id" => 4673,
                "prefecture_id" => 22,
                "city_id" => 1015,
                "street_id" => 63827,
                "name" => "金指",
                "hiragana" => "かなさし",
                "katakana" => "カナサシ",
                "katakana_half" => "ｶﾅｻｼ",
                "romaji" => "kanasashi",
                "memo" => "",
                "latitude" => "34.816838",
                "altitude" => "137.681087",
            ]);
            
            Station::create([
                "id" => 4674,
                "prefecture_id" => 22,
                "city_id" => 1008,
                "street_id" => null,
                "name" => "岡地",
                "hiragana" => "おかじ",
                "katakana" => "オカジ",
                "katakana_half" => "ｵｶｼﾞ",
                "romaji" => "okaji",
                "memo" => "",
                "latitude" => "34.811811",
                "altitude" => "137.664865",
            ]);
            
            Station::create([
                "id" => 4675,
                "prefecture_id" => 22,
                "city_id" => 1015,
                "street_id" => 63858,
                "name" => "気賀",
                "hiragana" => "きが",
                "katakana" => "キガ",
                "katakana_half" => "ｷｶﾞ",
                "romaji" => "kiga",
                "memo" => "",
                "latitude" => "34.807061",
                "altitude" => "137.651978",
            ]);
            
            Station::create([
                "id" => 4676,
                "prefecture_id" => 22,
                "city_id" => 1013,
                "street_id" => null,
                "name" => "西気賀",
                "hiragana" => "にしきが",
                "katakana" => "ニシキガ",
                "katakana_half" => "ﾆｼｷｶﾞ",
                "romaji" => "nishikiga",
                "memo" => "",
                "latitude" => "34.802367",
                "altitude" => "137.621203",
            ]);
            
            Station::create([
                "id" => 4677,
                "prefecture_id" => 22,
                "city_id" => 1008,
                "street_id" => null,
                "name" => "寸座",
                "hiragana" => "すんざ",
                "katakana" => "スンザ",
                "katakana_half" => "ｽﾝｻﾞ",
                "romaji" => "sunza",
                "memo" => "",
                "latitude" => "34.789895",
                "altitude" => "137.612538",
            ]);
            
            Station::create([
                "id" => 4678,
                "prefecture_id" => 22,
                "city_id" => 1033,
                "street_id" => 65438,
                "name" => "浜名湖佐久米",
                "hiragana" => "はまなこさくめ",
                "katakana" => "ハマナコサクメ",
                "katakana_half" => "ﾊﾏﾅｺｻｸﾒ",
                "romaji" => "hamanakosakume",
                "memo" => "",
                "latitude" => "34.789145",
                "altitude" => "137.599177",
            ]);
            
            Station::create([
                "id" => 4679,
                "prefecture_id" => 22,
                "city_id" => 1012,
                "street_id" => null,
                "name" => "東都筑",
                "hiragana" => "ひがしつづき",
                "katakana" => "ヒガシツヅキ",
                "katakana_half" => "ﾋｶﾞｼﾂﾂﾞｷ",
                "romaji" => "higashitsuzuki",
                "memo" => "",
                "latitude" => "34.790229",
                "altitude" => "137.586290",
            ]);
            
            Station::create([
                "id" => 4680,
                "prefecture_id" => 22,
                "city_id" => 1015,
                "street_id" => 63872,
                "name" => "都筑",
                "hiragana" => "つづき",
                "katakana" => "ツヅキ",
                "katakana_half" => "ﾂﾂﾞｷ",
                "romaji" => "tsuzuki",
                "memo" => "",
                "latitude" => "34.795783",
                "altitude" => "137.574430",
            ]);
            
            Station::create([
                "id" => 4681,
                "prefecture_id" => 22,
                "city_id" => 1025,
                "street_id" => 64866,
                "name" => "三ケ日",
                "hiragana" => "みっかび",
                "katakana" => "ミッカビ",
                "katakana_half" => "ﾐｯｶﾋﾞ",
                "romaji" => "mikkabi",
                "memo" => "",
                "latitude" => "34.802615",
                "altitude" => "137.551764",
            ]);
            
            Station::create([
                "id" => 4682,
                "prefecture_id" => 22,
                "city_id" => 1008,
                "street_id" => 62946,
                "name" => "奥浜名湖",
                "hiragana" => "おくはまなこ",
                "katakana" => "オクハマナコ",
                "katakana_half" => "ｵｸﾊﾏﾅｺ",
                "romaji" => "okuhamanako",
                "memo" => "",
                "latitude" => "34.794588",
                "altitude" => "137.545821",
            ]);
            
            Station::create([
                "id" => 4683,
                "prefecture_id" => 22,
                "city_id" => 1015,
                "street_id" => 63867,
                "name" => "尾奈",
                "hiragana" => "おな",
                "katakana" => "オナ",
                "katakana_half" => "ｵﾅ",
                "romaji" => "ona",
                "memo" => "",
                "latitude" => "34.783783",
                "altitude" => "137.541766",
            ]);
            
            Station::create([
                "id" => 4684,
                "prefecture_id" => 22,
                "city_id" => 1033,
                "street_id" => 65444,
                "name" => "知波田",
                "hiragana" => "ちばた",
                "katakana" => "チバタ",
                "katakana_half" => "ﾁﾊﾞﾀ",
                "romaji" => "chibata",
                "memo" => "",
                "latitude" => "34.753786",
                "altitude" => "137.512076",
            ]);
            
            Station::create([
                "id" => 4685,
                "prefecture_id" => 22,
                "city_id" => 1008,
                "street_id" => 62974,
                "name" => "大森",
                "hiragana" => "おおもり",
                "katakana" => "オオモリ",
                "katakana_half" => "ｵｵﾓﾘ",
                "romaji" => "oomori",
                "memo" => "静岡県",
                "latitude" => "34.737733",
                "altitude" => "137.509521",
            ]);
            
            Station::create([
                "id" => 4686,
                "prefecture_id" => 22,
                "city_id" => 1011,
                "street_id" => 63533,
                "name" => "アスモ前",
                "hiragana" => "あすもまえ",
                "katakana" => "アスモマエ",
                "katakana_half" => "ｱｽﾓﾏｴ",
                "romaji" => "asumomae",
                "memo" => "",
                "latitude" => "34.727872",
                "altitude" => "137.494245",
            ]);
            
            Station::create([
                "id" => 4687,
                "prefecture_id" => 22,
                "city_id" => 1011,
                "street_id" => null,
                "name" => "新浜松",
                "hiragana" => "しんはままつ",
                "katakana" => "シンハママツ",
                "katakana_half" => "ｼﾝﾊﾏﾏﾂ",
                "romaji" => "shinhamamatsu",
                "memo" => "",
                "latitude" => "34.703378",
                "altitude" => "137.732421",
            ]);
            
            Station::create([
                "id" => 4688,
                "prefecture_id" => 22,
                "city_id" => 1008,
                "street_id" => null,
                "name" => "第一通り",
                "hiragana" => "だいいちどおり",
                "katakana" => "ダイイチドオリ",
                "katakana_half" => "ﾀﾞｲｲﾁﾄﾞｵﾘ",
                "romaji" => "daiichidoori",
                "memo" => "",
                "latitude" => "34.707656",
                "altitude" => "137.732809",
            ]);
            
            Station::create([
                "id" => 4689,
                "prefecture_id" => 22,
                "city_id" => 1014,
                "street_id" => 63772,
                "name" => "遠州病院",
                "hiragana" => "えんしゅうびょういん",
                "katakana" => "エンシュウビョウイン",
                "katakana_half" => "ｴﾝｼｭｳﾋﾞｮｳｲﾝ",
                "romaji" => "enshuubyouin",
                "memo" => "",
                "latitude" => "34.710600",
                "altitude" => "137.733393",
            ]);
            
            Station::create([
                "id" => 4690,
                "prefecture_id" => 22,
                "city_id" => 1009,
                "street_id" => 63276,
                "name" => "八幡",
                "hiragana" => "はちまん",
                "katakana" => "ハチマン",
                "katakana_half" => "ﾊﾁﾏﾝ",
                "romaji" => "hachiman",
                "memo" => "静岡県",
                "latitude" => "34.717045",
                "altitude" => "137.735948",
            ]);
            
            Station::create([
                "id" => 4691,
                "prefecture_id" => 22,
                "city_id" => 1011,
                "street_id" => 63609,
                "name" => "助信",
                "hiragana" => "すけのぶ",
                "katakana" => "スケノブ",
                "katakana_half" => "ｽｹﾉﾌﾞ",
                "romaji" => "sukenobu",
                "memo" => "",
                "latitude" => "34.724293",
                "altitude" => "137.738780",
            ]);
            
            Station::create([
                "id" => 4692,
                "prefecture_id" => 22,
                "city_id" => 1011,
                "street_id" => 63650,
                "name" => "曳馬",
                "hiragana" => "ひくま",
                "katakana" => "ヒクマ",
                "katakana_half" => "ﾋｸﾏ",
                "romaji" => "hikuma",
                "memo" => "",
                "latitude" => "34.733181",
                "altitude" => "137.741474",
            ]);
            
            Station::create([
                "id" => 4693,
                "prefecture_id" => 22,
                "city_id" => 1011,
                "street_id" => 63586,
                "name" => "上島",
                "hiragana" => "かみじま",
                "katakana" => "カミジマ",
                "katakana_half" => "ｶﾐｼﾞﾏ",
                "romaji" => "kamijima",
                "memo" => "",
                "latitude" => "34.741458",
                "altitude" => "137.745585",
            ]);
            
            Station::create([
                "id" => 4694,
                "prefecture_id" => 22,
                "city_id" => 1047,
                "street_id" => 65820,
                "name" => "自動車学校前",
                "hiragana" => "じどうしゃがっこうまえ",
                "katakana" => "ジドウシャガッコウマエ",
                "katakana_half" => "ｼﾞﾄﾞｳｼｬｶﾞｯｺｳﾏｴ",
                "romaji" => "jidoushagakkoumae",
                "memo" => "",
                "latitude" => "34.747514",
                "altitude" => "137.751640",
            ]);
            
            Station::create([
                "id" => 4695,
                "prefecture_id" => 22,
                "city_id" => 1008,
                "street_id" => 62945,
                "name" => "さぎの宮",
                "hiragana" => "さぎのみや",
                "katakana" => "サギノミヤ",
                "katakana_half" => "ｻｷﾞﾉﾐﾔ",
                "romaji" => "saginomiya",
                "memo" => "",
                "latitude" => "34.757207",
                "altitude" => "137.757388",
            ]);
            
            Station::create([
                "id" => 4696,
                "prefecture_id" => 22,
                "city_id" => 1012,
                "street_id" => 63703,
                "name" => "積志",
                "hiragana" => "せきし",
                "katakana" => "セキシ",
                "katakana_half" => "ｾｷｼ",
                "romaji" => "sekishi",
                "memo" => "",
                "latitude" => "34.767928",
                "altitude" => "137.763443",
            ]);
            
            Station::create([
                "id" => 4697,
                "prefecture_id" => 22,
                "city_id" => 1014,
                "street_id" => 63772,
                "name" => "遠州西ケ崎",
                "hiragana" => "えんしゅうにしがさき",
                "katakana" => "エンシュウニシガサキ",
                "katakana_half" => "ｴﾝｼｭｳﾆｼｶﾞｻｷ",
                "romaji" => "enshuunishigasaki",
                "memo" => "",
                "latitude" => "34.776705",
                "altitude" => "137.773969",
            ]);
            
            Station::create([
                "id" => 4698,
                "prefecture_id" => 22,
                "city_id" => 1014,
                "street_id" => 63772,
                "name" => "遠州小松",
                "hiragana" => "えんしゅうこまつ",
                "katakana" => "エンシュウコマツ",
                "katakana_half" => "ｴﾝｼｭｳｺﾏﾂ",
                "romaji" => "enshuukomatsu",
                "memo" => "",
                "latitude" => "34.784149",
                "altitude" => "137.777886",
            ]);
            
            Station::create([
                "id" => 4699,
                "prefecture_id" => 22,
                "city_id" => 1016,
                "street_id" => null,
                "name" => "浜北",
                "hiragana" => "はまきた",
                "katakana" => "ハマキタ",
                "katakana_half" => "ﾊﾏｷﾀ",
                "romaji" => "hamakita",
                "memo" => "",
                "latitude" => "34.791176",
                "altitude" => "137.784274",
            ]);
            
            Station::create([
                "id" => 4700,
                "prefecture_id" => 22,
                "city_id" => 1016,
                "street_id" => 63911,
                "name" => "美薗中央公園",
                "hiragana" => "みそのちゅうおうこうえん",
                "katakana" => "ミソノチュウオウコウエン",
                "katakana_half" => "ﾐｿﾉﾁｭｳｵｳｺｳｴﾝ",
                "romaji" => "misonochuuoukouen",
                "memo" => "",
                "latitude" => "34.798091",
                "altitude" => "137.789551",
            ]);
            
            Station::create([
                "id" => 4701,
                "prefecture_id" => 22,
                "city_id" => 1014,
                "street_id" => 63772,
                "name" => "遠州小林",
                "hiragana" => "えんしゅうこばやし",
                "katakana" => "エンシュウコバヤシ",
                "katakana_half" => "ｴﾝｼｭｳｺﾊﾞﾔｼ",
                "romaji" => "enshuukobayashi",
                "memo" => "",
                "latitude" => "34.808174",
                "altitude" => "137.795633",
            ]);
            
            Station::create([
                "id" => 4702,
                "prefecture_id" => 22,
                "city_id" => 1014,
                "street_id" => 63772,
                "name" => "遠州芝本",
                "hiragana" => "えんしゅうしばもと",
                "katakana" => "エンシュウシバモト",
                "katakana_half" => "ｴﾝｼｭｳｼﾊﾞﾓﾄ",
                "romaji" => "enshuushibamoto",
                "memo" => "",
                "latitude" => "34.823950",
                "altitude" => "137.798632",
            ]);
            
            Station::create([
                "id" => 4703,
                "prefecture_id" => 22,
                "city_id" => 1014,
                "street_id" => 63772,
                "name" => "遠州岩水寺",
                "hiragana" => "えんしゅうがんすいじ",
                "katakana" => "エンシュウガンスイジ",
                "katakana_half" => "ｴﾝｼｭｳｶﾞﾝｽｲｼﾞ",
                "romaji" => "enshuugansuiji",
                "memo" => "",
                "latitude" => "34.834394",
                "altitude" => "137.801021",
            ]);
            
    }
}
