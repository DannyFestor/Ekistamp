<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        City::create([
            "id" => 1,
            "prefecture_id" => 1,
            "name" => "札幌市中央区",
            "romaji" => "sapporoshichuuouku",
            "hiragana" => "さっぽろしちゅうおうく",
            "katakana" => "サッポロシチュウオウク",
            "katakana_half" => "ｻｯﾎﾟﾛｼﾁｭｳｵｳｸ",
        ]);

        City::create([
            "id" => 2,
            "prefecture_id" => 1,
            "name" => "札幌市北区",
            "romaji" => "sapporoshikitaku",
            "hiragana" => "さっぽろしきたく",
            "katakana" => "サッポロシキタク",
            "katakana_half" => "ｻｯﾎﾟﾛｼｷﾀｸ",
        ]);

        City::create([
            "id" => 3,
            "prefecture_id" => 1,
            "name" => "札幌市東区",
            "romaji" => "sapporoshihigashiku",
            "hiragana" => "さっぽろしひがしく",
            "katakana" => "サッポロシヒガシク",
            "katakana_half" => "ｻｯﾎﾟﾛｼﾋｶﾞｼｸ",
        ]);

        City::create([
            "id" => 4,
            "prefecture_id" => 1,
            "name" => "札幌市白石区",
            "romaji" => "sapporoshishiroishiku",
            "hiragana" => "さっぽろししろいしく",
            "katakana" => "サッポロシシロイシク",
            "katakana_half" => "ｻｯﾎﾟﾛｼｼﾛｲｼｸ",
        ]);

        City::create([
            "id" => 5,
            "prefecture_id" => 1,
            "name" => "札幌市豊平区",
            "romaji" => "sapporoshitoyohiraku",
            "hiragana" => "さっぽろしとよひらく",
            "katakana" => "サッポロシトヨヒラク",
            "katakana_half" => "ｻｯﾎﾟﾛｼﾄﾖﾋﾗｸ",
        ]);

        City::create([
            "id" => 6,
            "prefecture_id" => 1,
            "name" => "札幌市南区",
            "romaji" => "sapporoshiminamiku",
            "hiragana" => "さっぽろしみなみく",
            "katakana" => "サッポロシミナミク",
            "katakana_half" => "ｻｯﾎﾟﾛｼﾐﾅﾐｸ",
        ]);

        City::create([
            "id" => 7,
            "prefecture_id" => 1,
            "name" => "札幌市西区",
            "romaji" => "sapporoshinishiku",
            "hiragana" => "さっぽろしにしく",
            "katakana" => "サッポロシニシク",
            "katakana_half" => "ｻｯﾎﾟﾛｼﾆｼｸ",
        ]);

        City::create([
            "id" => 8,
            "prefecture_id" => 1,
            "name" => "札幌市厚別区",
            "romaji" => "sapporoshiatsubetsuku",
            "hiragana" => "さっぽろしあつべつく",
            "katakana" => "サッポロシアツベツク",
            "katakana_half" => "ｻｯﾎﾟﾛｼｱﾂﾍﾞﾂｸ",
        ]);

        City::create([
            "id" => 9,
            "prefecture_id" => 1,
            "name" => "札幌市手稲区",
            "romaji" => "sapporoshiteineku",
            "hiragana" => "さっぽろしていねく",
            "katakana" => "サッポロシテイネク",
            "katakana_half" => "ｻｯﾎﾟﾛｼﾃｲﾈｸ",
        ]);

        City::create([
            "id" => 10,
            "prefecture_id" => 1,
            "name" => "札幌市清田区",
            "romaji" => "sapporoshikiyotaku",
            "hiragana" => "さっぽろしきよたく",
            "katakana" => "サッポロシキヨタク",
            "katakana_half" => "ｻｯﾎﾟﾛｼｷﾖﾀｸ",
        ]);

        City::create([
            "id" => 11,
            "prefecture_id" => 1,
            "name" => "函館市",
            "romaji" => "hakodateshi",
            "hiragana" => "はこだてし",
            "katakana" => "ハコダテシ",
            "katakana_half" => "ﾊｺﾀﾞﾃｼ",
        ]);

        City::create([
            "id" => 12,
            "prefecture_id" => 1,
            "name" => "小樽市",
            "romaji" => "otarushi",
            "hiragana" => "おたるし",
            "katakana" => "オタルシ",
            "katakana_half" => "ｵﾀﾙｼ",
        ]);

        City::create([
            "id" => 13,
            "prefecture_id" => 1,
            "name" => "旭川市",
            "romaji" => "asahikawashi",
            "hiragana" => "あさひかわし",
            "katakana" => "アサヒカワシ",
            "katakana_half" => "ｱｻﾋｶﾜｼ",
        ]);

        City::create([
            "id" => 14,
            "prefecture_id" => 1,
            "name" => "室蘭市",
            "romaji" => "muroranshi",
            "hiragana" => "むろらんし",
            "katakana" => "ムロランシ",
            "katakana_half" => "ﾑﾛﾗﾝｼ",
        ]);

        City::create([
            "id" => 15,
            "prefecture_id" => 1,
            "name" => "釧路市",
            "romaji" => "kushiroshi",
            "hiragana" => "くしろし",
            "katakana" => "クシロシ",
            "katakana_half" => "ｸｼﾛｼ",
        ]);

        City::create([
            "id" => 16,
            "prefecture_id" => 1,
            "name" => "帯広市",
            "romaji" => "obihiroshi",
            "hiragana" => "おびひろし",
            "katakana" => "オビヒロシ",
            "katakana_half" => "ｵﾋﾞﾋﾛｼ",
        ]);

        City::create([
            "id" => 17,
            "prefecture_id" => 1,
            "name" => "北見市",
            "romaji" => "kitamishi",
            "hiragana" => "きたみし",
            "katakana" => "キタミシ",
            "katakana_half" => "ｷﾀﾐｼ",
        ]);

        City::create([
            "id" => 18,
            "prefecture_id" => 1,
            "name" => "夕張市",
            "romaji" => "yuubarishi",
            "hiragana" => "ゆうばりし",
            "katakana" => "ユウバリシ",
            "katakana_half" => "ﾕｳﾊﾞﾘｼ",
        ]);

        City::create([
            "id" => 19,
            "prefecture_id" => 1,
            "name" => "岩見沢市",
            "romaji" => "iwamizawashi",
            "hiragana" => "いわみざわし",
            "katakana" => "イワミザワシ",
            "katakana_half" => "ｲﾜﾐｻﾞﾜｼ",
        ]);

        City::create([
            "id" => 20,
            "prefecture_id" => 1,
            "name" => "網走市",
            "romaji" => "abashirishi",
            "hiragana" => "あばしりし",
            "katakana" => "アバシリシ",
            "katakana_half" => "ｱﾊﾞｼﾘｼ",
        ]);

        City::create([
            "id" => 21,
            "prefecture_id" => 1,
            "name" => "留萌市",
            "romaji" => "rumoishi",
            "hiragana" => "るもいし",
            "katakana" => "ルモイシ",
            "katakana_half" => "ﾙﾓｲｼ",
        ]);

        City::create([
            "id" => 22,
            "prefecture_id" => 1,
            "name" => "苫小牧市",
            "romaji" => "tomakomaishi",
            "hiragana" => "とまこまいし",
            "katakana" => "トマコマイシ",
            "katakana_half" => "ﾄﾏｺﾏｲｼ",
        ]);

        City::create([
            "id" => 23,
            "prefecture_id" => 1,
            "name" => "稚内市",
            "romaji" => "wakkanaishi",
            "hiragana" => "わっかないし",
            "katakana" => "ワッカナイシ",
            "katakana_half" => "ﾜｯｶﾅｲｼ",
        ]);

        City::create([
            "id" => 24,
            "prefecture_id" => 1,
            "name" => "美唄市",
            "romaji" => "bibaishi",
            "hiragana" => "びばいし",
            "katakana" => "ビバイシ",
            "katakana_half" => "ﾋﾞﾊﾞｲｼ",
        ]);

        City::create([
            "id" => 25,
            "prefecture_id" => 1,
            "name" => "芦別市",
            "romaji" => "ashibetsushi",
            "hiragana" => "あしべつし",
            "katakana" => "アシベツシ",
            "katakana_half" => "ｱｼﾍﾞﾂｼ",
        ]);

        City::create([
            "id" => 26,
            "prefecture_id" => 1,
            "name" => "江別市",
            "romaji" => "ebetsushi",
            "hiragana" => "えべつし",
            "katakana" => "エベツシ",
            "katakana_half" => "ｴﾍﾞﾂｼ",
        ]);

        City::create([
            "id" => 27,
            "prefecture_id" => 1,
            "name" => "赤平市",
            "romaji" => "akabirashi",
            "hiragana" => "あかびらし",
            "katakana" => "アカビラシ",
            "katakana_half" => "ｱｶﾋﾞﾗｼ",
        ]);

        City::create([
            "id" => 28,
            "prefecture_id" => 1,
            "name" => "紋別市",
            "romaji" => "monbetsushi",
            "hiragana" => "もんべつし",
            "katakana" => "モンベツシ",
            "katakana_half" => "ﾓﾝﾍﾞﾂｼ",
        ]);

        City::create([
            "id" => 29,
            "prefecture_id" => 1,
            "name" => "士別市",
            "romaji" => "shibetsushi",
            "hiragana" => "しべつし",
            "katakana" => "シベツシ",
            "katakana_half" => "ｼﾍﾞﾂｼ",
        ]);

        City::create([
            "id" => 30,
            "prefecture_id" => 1,
            "name" => "名寄市",
            "romaji" => "nayoroshi",
            "hiragana" => "なよろし",
            "katakana" => "ナヨロシ",
            "katakana_half" => "ﾅﾖﾛｼ",
        ]);

        City::create([
            "id" => 31,
            "prefecture_id" => 1,
            "name" => "三笠市",
            "romaji" => "mikasashi",
            "hiragana" => "みかさし",
            "katakana" => "ミカサシ",
            "katakana_half" => "ﾐｶｻｼ",
        ]);

        City::create([
            "id" => 32,
            "prefecture_id" => 1,
            "name" => "根室市",
            "romaji" => "nemuroshi",
            "hiragana" => "ねむろし",
            "katakana" => "ネムロシ",
            "katakana_half" => "ﾈﾑﾛｼ",
        ]);

        City::create([
            "id" => 33,
            "prefecture_id" => 1,
            "name" => "千歳市",
            "romaji" => "chitoseshi",
            "hiragana" => "ちとせし",
            "katakana" => "チトセシ",
            "katakana_half" => "ﾁﾄｾｼ",
        ]);

        City::create([
            "id" => 34,
            "prefecture_id" => 1,
            "name" => "滝川市",
            "romaji" => "takikawashi",
            "hiragana" => "たきかわし",
            "katakana" => "タキカワシ",
            "katakana_half" => "ﾀｷｶﾜｼ",
        ]);

        City::create([
            "id" => 35,
            "prefecture_id" => 1,
            "name" => "砂川市",
            "romaji" => "sunagawashi",
            "hiragana" => "すながわし",
            "katakana" => "スナガワシ",
            "katakana_half" => "ｽﾅｶﾞﾜｼ",
        ]);

        City::create([
            "id" => 36,
            "prefecture_id" => 1,
            "name" => "歌志内市",
            "romaji" => "utashinaishi",
            "hiragana" => "うたしないし",
            "katakana" => "ウタシナイシ",
            "katakana_half" => "ｳﾀｼﾅｲｼ",
        ]);

        City::create([
            "id" => 37,
            "prefecture_id" => 1,
            "name" => "深川市",
            "romaji" => "fukagawashi",
            "hiragana" => "ふかがわし",
            "katakana" => "フカガワシ",
            "katakana_half" => "ﾌｶｶﾞﾜｼ",
        ]);

        City::create([
            "id" => 38,
            "prefecture_id" => 1,
            "name" => "富良野市",
            "romaji" => "furanoshi",
            "hiragana" => "ふらのし",
            "katakana" => "フラノシ",
            "katakana_half" => "ﾌﾗﾉｼ",
        ]);

        City::create([
            "id" => 39,
            "prefecture_id" => 1,
            "name" => "登別市",
            "romaji" => "noboribetsushi",
            "hiragana" => "のぼりべつし",
            "katakana" => "ノボリベツシ",
            "katakana_half" => "ﾉﾎﾞﾘﾍﾞﾂｼ",
        ]);

        City::create([
            "id" => 40,
            "prefecture_id" => 1,
            "name" => "恵庭市",
            "romaji" => "eniwashi",
            "hiragana" => "えにわし",
            "katakana" => "エニワシ",
            "katakana_half" => "ｴﾆﾜｼ",
        ]);

        City::create([
            "id" => 41,
            "prefecture_id" => 1,
            "name" => "伊達市",
            "romaji" => "dateshi",
            "hiragana" => "だてし",
            "katakana" => "ダテシ",
            "katakana_half" => "ﾀﾞﾃｼ",
        ]);

        City::create([
            "id" => 42,
            "prefecture_id" => 1,
            "name" => "北広島市",
            "romaji" => "kitahiroshimashi",
            "hiragana" => "きたひろしまし",
            "katakana" => "キタヒロシマシ",
            "katakana_half" => "ｷﾀﾋﾛｼﾏｼ",
        ]);

        City::create([
            "id" => 43,
            "prefecture_id" => 1,
            "name" => "石狩市",
            "romaji" => "ishikarishi",
            "hiragana" => "いしかりし",
            "katakana" => "イシカリシ",
            "katakana_half" => "ｲｼｶﾘｼ",
        ]);

        City::create([
            "id" => 44,
            "prefecture_id" => 1,
            "name" => "北斗市",
            "romaji" => "hokutoshi",
            "hiragana" => "ほくとし",
            "katakana" => "ホクトシ",
            "katakana_half" => "ﾎｸﾄｼ",
        ]);

        City::create([
            "id" => 45,
            "prefecture_id" => 1,
            "name" => "石狩郡当別町",
            "romaji" => "ishikariguntoubetsuchou",
            "hiragana" => "いしかりぐんとうべつちょう",
            "katakana" => "イシカリグントウベツチョウ",
            "katakana_half" => "ｲｼｶﾘｸﾞﾝﾄｳﾍﾞﾂﾁｮｳ",
        ]);

        City::create([
            "id" => 46,
            "prefecture_id" => 1,
            "name" => "石狩郡新篠津村",
            "romaji" => "ishikarigunshinshinotsumura",
            "hiragana" => "いしかりぐんしんしのつむら",
            "katakana" => "イシカリグンシンシノツムラ",
            "katakana_half" => "ｲｼｶﾘｸﾞﾝｼﾝｼﾉﾂﾑﾗ",
        ]);

        City::create([
            "id" => 47,
            "prefecture_id" => 1,
            "name" => "松前郡松前町",
            "romaji" => "matsumaegunmatsumaechou",
            "hiragana" => "まつまえぐんまつまえちょう",
            "katakana" => "マツマエグンマツマエチョウ",
            "katakana_half" => "ﾏﾂﾏｴｸﾞﾝﾏﾂﾏｴﾁｮｳ",
        ]);

        City::create([
            "id" => 48,
            "prefecture_id" => 1,
            "name" => "松前郡福島町",
            "romaji" => "matsumaegunfukushimachou",
            "hiragana" => "まつまえぐんふくしまちょう",
            "katakana" => "マツマエグンフクシマチョウ",
            "katakana_half" => "ﾏﾂﾏｴｸﾞﾝﾌｸｼﾏﾁｮｳ",
        ]);

        City::create([
            "id" => 49,
            "prefecture_id" => 1,
            "name" => "上磯郡知内町",
            "romaji" => "kamiisogunshiriuchichou",
            "hiragana" => "かみいそぐんしりうちちょう",
            "katakana" => "カミイソグンシリウチチョウ",
            "katakana_half" => "ｶﾐｲｿｸﾞﾝｼﾘｳﾁﾁｮｳ",
        ]);

        City::create([
            "id" => 50,
            "prefecture_id" => 1,
            "name" => "上磯郡木古内町",
            "romaji" => "kamiisogunkikonaichou",
            "hiragana" => "かみいそぐんきこないちょう",
            "katakana" => "カミイソグンキコナイチョウ",
            "katakana_half" => "ｶﾐｲｿｸﾞﾝｷｺﾅｲﾁｮｳ",
        ]);

        City::create([
            "id" => 51,
            "prefecture_id" => 1,
            "name" => "亀田郡七飯町",
            "romaji" => "kamedagunnanaechou",
            "hiragana" => "かめだぐんななえちょう",
            "katakana" => "カメダグンナナエチョウ",
            "katakana_half" => "ｶﾒﾀﾞｸﾞﾝﾅﾅｴﾁｮｳ",
        ]);

        City::create([
            "id" => 52,
            "prefecture_id" => 1,
            "name" => "茅部郡鹿部町",
            "romaji" => "kayabegunshikabechou",
            "hiragana" => "かやべぐんしかべちょう",
            "katakana" => "カヤベグンシカベチョウ",
            "katakana_half" => "ｶﾔﾍﾞｸﾞﾝｼｶﾍﾞﾁｮｳ",
        ]);

        City::create([
            "id" => 53,
            "prefecture_id" => 1,
            "name" => "茅部郡森町",
            "romaji" => "kayabegunmorimachi",
            "hiragana" => "かやべぐんもりまち",
            "katakana" => "カヤベグンモリマチ",
            "katakana_half" => "ｶﾔﾍﾞｸﾞﾝﾓﾘﾏﾁ",
        ]);

        City::create([
            "id" => 54,
            "prefecture_id" => 1,
            "name" => "二海郡八雲町",
            "romaji" => "futamigunyakumochou",
            "hiragana" => "ふたみぐんやくもちょう",
            "katakana" => "フタミグンヤクモチョウ",
            "katakana_half" => "ﾌﾀﾐｸﾞﾝﾔｸﾓﾁｮｳ",
        ]);

        City::create([
            "id" => 55,
            "prefecture_id" => 1,
            "name" => "山越郡長万部町",
            "romaji" => "yamakoshigunoshamanbechou",
            "hiragana" => "やまこしぐんおしゃまんべちょう",
            "katakana" => "ヤマコシグンオシャマンベチョウ",
            "katakana_half" => "ﾔﾏｺｼｸﾞﾝｵｼｬﾏﾝﾍﾞﾁｮｳ",
        ]);

        City::create([
            "id" => 56,
            "prefecture_id" => 1,
            "name" => "檜山郡江差町",
            "romaji" => "hiyamagunesashichou",
            "hiragana" => "ひやまぐんえさしちょう",
            "katakana" => "ヒヤマグンエサシチョウ",
            "katakana_half" => "ﾋﾔﾏｸﾞﾝｴｻｼﾁｮｳ",
        ]);

        City::create([
            "id" => 57,
            "prefecture_id" => 1,
            "name" => "檜山郡上ノ国町",
            "romaji" => "hiyamagunkaminokunichou",
            "hiragana" => "ひやまぐんかみのくにちょう",
            "katakana" => "ヒヤマグンカミノクニチョウ",
            "katakana_half" => "ﾋﾔﾏｸﾞﾝｶﾐﾉｸﾆﾁｮｳ",
        ]);

        City::create([
            "id" => 58,
            "prefecture_id" => 1,
            "name" => "檜山郡厚沢部町",
            "romaji" => "hiyamagunassabuchou",
            "hiragana" => "ひやまぐんあっさぶちょう",
            "katakana" => "ヒヤマグンアッサブチョウ",
            "katakana_half" => "ﾋﾔﾏｸﾞﾝｱｯｻﾌﾞﾁｮｳ",
        ]);

        City::create([
            "id" => 59,
            "prefecture_id" => 1,
            "name" => "爾志郡乙部町",
            "romaji" => "nishigunotobechou",
            "hiragana" => "にしぐんおとべちょう",
            "katakana" => "ニシグンオトベチョウ",
            "katakana_half" => "ﾆｼｸﾞﾝｵﾄﾍﾞﾁｮｳ",
        ]);

        City::create([
            "id" => 60,
            "prefecture_id" => 1,
            "name" => "奥尻郡奥尻町",
            "romaji" => "okushirigunokushirichou",
            "hiragana" => "おくしりぐんおくしりちょう",
            "katakana" => "オクシリグンオクシリチョウ",
            "katakana_half" => "ｵｸｼﾘｸﾞﾝｵｸｼﾘﾁｮｳ",
        ]);

        City::create([
            "id" => 61,
            "prefecture_id" => 1,
            "name" => "瀬棚郡今金町",
            "romaji" => "setanagunimakanechou",
            "hiragana" => "せたなぐんいまかねちょう",
            "katakana" => "セタナグンイマカネチョウ",
            "katakana_half" => "ｾﾀﾅｸﾞﾝｲﾏｶﾈﾁｮｳ",
        ]);

        City::create([
            "id" => 62,
            "prefecture_id" => 1,
            "name" => "久遠郡せたな町",
            "romaji" => "kudougunsetanachou",
            "hiragana" => "くどうぐんせたなちょう",
            "katakana" => "クドウグンセタナチョウ",
            "katakana_half" => "ｸﾄﾞｳｸﾞﾝｾﾀﾅﾁｮｳ",
        ]);

        City::create([
            "id" => 63,
            "prefecture_id" => 1,
            "name" => "島牧郡島牧村",
            "romaji" => "shimamakigunshimamakimura",
            "hiragana" => "しままきぐんしままきむら",
            "katakana" => "シママキグンシママキムラ",
            "katakana_half" => "ｼﾏﾏｷｸﾞﾝｼﾏﾏｷﾑﾗ",
        ]);

        City::create([
            "id" => 64,
            "prefecture_id" => 1,
            "name" => "寿都郡寿都町",
            "romaji" => "suttsugunsuttsuchou",
            "hiragana" => "すっつぐんすっつちょう",
            "katakana" => "スッツグンスッツチョウ",
            "katakana_half" => "ｽｯﾂｸﾞﾝｽｯﾂﾁｮｳ",
        ]);

        City::create([
            "id" => 65,
            "prefecture_id" => 1,
            "name" => "寿都郡黒松内町",
            "romaji" => "suttsugunkuromatsunaichou",
            "hiragana" => "すっつぐんくろまつないちょう",
            "katakana" => "スッツグンクロマツナイチョウ",
            "katakana_half" => "ｽｯﾂｸﾞﾝｸﾛﾏﾂﾅｲﾁｮｳ",
        ]);

        City::create([
            "id" => 66,
            "prefecture_id" => 1,
            "name" => "磯谷郡蘭越町",
            "romaji" => "isoyagunrankoshichou",
            "hiragana" => "いそやぐんらんこしちょう",
            "katakana" => "イソヤグンランコシチョウ",
            "katakana_half" => "ｲｿﾔｸﾞﾝﾗﾝｺｼﾁｮｳ",
        ]);

        City::create([
            "id" => 67,
            "prefecture_id" => 1,
            "name" => "虻田郡ニセコ町",
            "romaji" => "abutagunnisekochou",
            "hiragana" => "あぶたぐんにせこちょう",
            "katakana" => "アブタグンニセコチョウ",
            "katakana_half" => "ｱﾌﾞﾀｸﾞﾝﾆｾｺﾁｮｳ",
        ]);

        City::create([
            "id" => 68,
            "prefecture_id" => 1,
            "name" => "虻田郡真狩村",
            "romaji" => "abutagunmakkarimura",
            "hiragana" => "あぶたぐんまっかりむら",
            "katakana" => "アブタグンマッカリムラ",
            "katakana_half" => "ｱﾌﾞﾀｸﾞﾝﾏｯｶﾘﾑﾗ",
        ]);

        City::create([
            "id" => 69,
            "prefecture_id" => 1,
            "name" => "虻田郡留寿都村",
            "romaji" => "abutagunrusutsumura",
            "hiragana" => "あぶたぐんるすつむら",
            "katakana" => "アブタグンルスツムラ",
            "katakana_half" => "ｱﾌﾞﾀｸﾞﾝﾙｽﾂﾑﾗ",
        ]);

        City::create([
            "id" => 70,
            "prefecture_id" => 1,
            "name" => "虻田郡喜茂別町",
            "romaji" => "abutagunkimobetsuchou",
            "hiragana" => "あぶたぐんきもべつちょう",
            "katakana" => "アブタグンキモベツチョウ",
            "katakana_half" => "ｱﾌﾞﾀｸﾞﾝｷﾓﾍﾞﾂﾁｮｳ",
        ]);

        City::create([
            "id" => 71,
            "prefecture_id" => 1,
            "name" => "虻田郡京極町",
            "romaji" => "abutagunkyougokuchou",
            "hiragana" => "あぶたぐんきょうごくちょう",
            "katakana" => "アブタグンキョウゴクチョウ",
            "katakana_half" => "ｱﾌﾞﾀｸﾞﾝｷｮｳｺﾞｸﾁｮｳ",
        ]);

        City::create([
            "id" => 72,
            "prefecture_id" => 1,
            "name" => "虻田郡倶知安町",
            "romaji" => "abutagunkucchanchou",
            "hiragana" => "あぶたぐんくっちゃんちょう",
            "katakana" => "アブタグンクッチャンチョウ",
            "katakana_half" => "ｱﾌﾞﾀｸﾞﾝｸｯﾁｬﾝﾁｮｳ",
        ]);

        City::create([
            "id" => 73,
            "prefecture_id" => 1,
            "name" => "岩内郡共和町",
            "romaji" => "iwanaigunkyouwachou",
            "hiragana" => "いわないぐんきょうわちょう",
            "katakana" => "イワナイグンキョウワチョウ",
            "katakana_half" => "ｲﾜﾅｲｸﾞﾝｷｮｳﾜﾁｮｳ",
        ]);

        City::create([
            "id" => 74,
            "prefecture_id" => 1,
            "name" => "岩内郡岩内町",
            "romaji" => "iwanaiguniwanaichou",
            "hiragana" => "いわないぐんいわないちょう",
            "katakana" => "イワナイグンイワナイチョウ",
            "katakana_half" => "ｲﾜﾅｲｸﾞﾝｲﾜﾅｲﾁｮｳ",
        ]);

        City::create([
            "id" => 75,
            "prefecture_id" => 1,
            "name" => "古宇郡泊村",
            "romaji" => "furuuguntomarimura",
            "hiragana" => "ふるうぐんとまりむら",
            "katakana" => "フルウグントマリムラ",
            "katakana_half" => "ﾌﾙｳｸﾞﾝﾄﾏﾘﾑﾗ",
        ]);

        City::create([
            "id" => 76,
            "prefecture_id" => 1,
            "name" => "古宇郡神恵内村",
            "romaji" => "furuugunkamoenaimura",
            "hiragana" => "ふるうぐんかもえないむら",
            "katakana" => "フルウグンカモエナイムラ",
            "katakana_half" => "ﾌﾙｳｸﾞﾝｶﾓｴﾅｲﾑﾗ",
        ]);

        City::create([
            "id" => 77,
            "prefecture_id" => 1,
            "name" => "積丹郡積丹町",
            "romaji" => "shakotangunshakotanchou",
            "hiragana" => "しゃこたんぐんしゃこたんちょう",
            "katakana" => "シャコタングンシャコタンチョウ",
            "katakana_half" => "ｼｬｺﾀﾝｸﾞﾝｼｬｺﾀﾝﾁｮｳ",
        ]);

        City::create([
            "id" => 78,
            "prefecture_id" => 1,
            "name" => "古平郡古平町",
            "romaji" => "furubiragunfurubirachou",
            "hiragana" => "ふるびらぐんふるびらちょう",
            "katakana" => "フルビラグンフルビラチョウ",
            "katakana_half" => "ﾌﾙﾋﾞﾗｸﾞﾝﾌﾙﾋﾞﾗﾁｮｳ",
        ]);

        City::create([
            "id" => 79,
            "prefecture_id" => 1,
            "name" => "余市郡仁木町",
            "romaji" => "yoichigunnikichou",
            "hiragana" => "よいちぐんにきちょう",
            "katakana" => "ヨイチグンニキチョウ",
            "katakana_half" => "ﾖｲﾁｸﾞﾝﾆｷﾁｮｳ",
        ]);

        City::create([
            "id" => 80,
            "prefecture_id" => 1,
            "name" => "余市郡余市町",
            "romaji" => "yoichigunyoichichou",
            "hiragana" => "よいちぐんよいちちょう",
            "katakana" => "ヨイチグンヨイチチョウ",
            "katakana_half" => "ﾖｲﾁｸﾞﾝﾖｲﾁﾁｮｳ",
        ]);

        City::create([
            "id" => 81,
            "prefecture_id" => 1,
            "name" => "余市郡赤井川村",
            "romaji" => "yoichigunakaigawamura",
            "hiragana" => "よいちぐんあかいがわむら",
            "katakana" => "ヨイチグンアカイガワムラ",
            "katakana_half" => "ﾖｲﾁｸﾞﾝｱｶｲｶﾞﾜﾑﾗ",
        ]);

        City::create([
            "id" => 82,
            "prefecture_id" => 1,
            "name" => "空知郡南幌町",
            "romaji" => "sorachigunnanporochou",
            "hiragana" => "そらちぐんなんぽろちょう",
            "katakana" => "ソラチグンナンポロチョウ",
            "katakana_half" => "ｿﾗﾁｸﾞﾝﾅﾝﾎﾟﾛﾁｮｳ",
        ]);

        City::create([
            "id" => 83,
            "prefecture_id" => 1,
            "name" => "空知郡奈井江町",
            "romaji" => "sorachigunnaiechou",
            "hiragana" => "そらちぐんないえちょう",
            "katakana" => "ソラチグンナイエチョウ",
            "katakana_half" => "ｿﾗﾁｸﾞﾝﾅｲｴﾁｮｳ",
        ]);

        City::create([
            "id" => 84,
            "prefecture_id" => 1,
            "name" => "空知郡上砂川町",
            "romaji" => "sorachigunkamisunagawachou",
            "hiragana" => "そらちぐんかみすながわちょう",
            "katakana" => "ソラチグンカミスナガワチョウ",
            "katakana_half" => "ｿﾗﾁｸﾞﾝｶﾐｽﾅｶﾞﾜﾁｮｳ",
        ]);

        City::create([
            "id" => 85,
            "prefecture_id" => 1,
            "name" => "夕張郡由仁町",
            "romaji" => "yuubarigunyunichou",
            "hiragana" => "ゆうばりぐんゆにちょう",
            "katakana" => "ユウバリグンユニチョウ",
            "katakana_half" => "ﾕｳﾊﾞﾘｸﾞﾝﾕﾆﾁｮｳ",
        ]);

        City::create([
            "id" => 86,
            "prefecture_id" => 1,
            "name" => "夕張郡長沼町",
            "romaji" => "yuubarigunnaganumachou",
            "hiragana" => "ゆうばりぐんながぬまちょう",
            "katakana" => "ユウバリグンナガヌマチョウ",
            "katakana_half" => "ﾕｳﾊﾞﾘｸﾞﾝﾅｶﾞﾇﾏﾁｮｳ",
        ]);

        City::create([
            "id" => 87,
            "prefecture_id" => 1,
            "name" => "夕張郡栗山町",
            "romaji" => "yuubarigunkuriyamachou",
            "hiragana" => "ゆうばりぐんくりやまちょう",
            "katakana" => "ユウバリグンクリヤマチョウ",
            "katakana_half" => "ﾕｳﾊﾞﾘｸﾞﾝｸﾘﾔﾏﾁｮｳ",
        ]);

        City::create([
            "id" => 88,
            "prefecture_id" => 1,
            "name" => "樺戸郡月形町",
            "romaji" => "kabatoguntsukigatachou",
            "hiragana" => "かばとぐんつきがたちょう",
            "katakana" => "カバトグンツキガタチョウ",
            "katakana_half" => "ｶﾊﾞﾄｸﾞﾝﾂｷｶﾞﾀﾁｮｳ",
        ]);

        City::create([
            "id" => 89,
            "prefecture_id" => 1,
            "name" => "樺戸郡浦臼町",
            "romaji" => "kabatogunurausuchou",
            "hiragana" => "かばとぐんうらうすちょう",
            "katakana" => "カバトグンウラウスチョウ",
            "katakana_half" => "ｶﾊﾞﾄｸﾞﾝｳﾗｳｽﾁｮｳ",
        ]);

        City::create([
            "id" => 90,
            "prefecture_id" => 1,
            "name" => "樺戸郡新十津川町",
            "romaji" => "kabatogunshintotsukawachou",
            "hiragana" => "かばとぐんしんとつかわちょう",
            "katakana" => "カバトグンシントツカワチョウ",
            "katakana_half" => "ｶﾊﾞﾄｸﾞﾝｼﾝﾄﾂｶﾜﾁｮｳ",
        ]);

        City::create([
            "id" => 91,
            "prefecture_id" => 1,
            "name" => "雨竜郡妹背牛町",
            "romaji" => "uryuugunmoseushichou",
            "hiragana" => "うりゅうぐんもせうしちょう",
            "katakana" => "ウリュウグンモセウシチョウ",
            "katakana_half" => "ｳﾘｭｳｸﾞﾝﾓｾｳｼﾁｮｳ",
        ]);

        City::create([
            "id" => 92,
            "prefecture_id" => 1,
            "name" => "雨竜郡秩父別町",
            "romaji" => "uryuugunchippubetsuchou",
            "hiragana" => "うりゅうぐんちっぷべつちょう",
            "katakana" => "ウリュウグンチップベツチョウ",
            "katakana_half" => "ｳﾘｭｳｸﾞﾝﾁｯﾌﾟﾍﾞﾂﾁｮｳ",
        ]);

        City::create([
            "id" => 93,
            "prefecture_id" => 1,
            "name" => "雨竜郡雨竜町",
            "romaji" => "uryuugunuryuuchou",
            "hiragana" => "うりゅうぐんうりゅうちょう",
            "katakana" => "ウリュウグンウリュウチョウ",
            "katakana_half" => "ｳﾘｭｳｸﾞﾝｳﾘｭｳﾁｮｳ",
        ]);

        City::create([
            "id" => 94,
            "prefecture_id" => 1,
            "name" => "雨竜郡北竜町",
            "romaji" => "uryuugunhokuryuuchou",
            "hiragana" => "うりゅうぐんほくりゅうちょう",
            "katakana" => "ウリュウグンホクリュウチョウ",
            "katakana_half" => "ｳﾘｭｳｸﾞﾝﾎｸﾘｭｳﾁｮｳ",
        ]);

        City::create([
            "id" => 95,
            "prefecture_id" => 1,
            "name" => "雨竜郡沼田町",
            "romaji" => "uryuugunnumatachou",
            "hiragana" => "うりゅうぐんぬまたちょう",
            "katakana" => "ウリュウグンヌマタチョウ",
            "katakana_half" => "ｳﾘｭｳｸﾞﾝﾇﾏﾀﾁｮｳ",
        ]);

        City::create([
            "id" => 96,
            "prefecture_id" => 1,
            "name" => "上川郡鷹栖町",
            "romaji" => "kamikawaguntakasuchou",
            "hiragana" => "かみかわぐんたかすちょう",
            "katakana" => "カミカワグンタカスチョウ",
            "katakana_half" => "ｶﾐｶﾜｸﾞﾝﾀｶｽﾁｮｳ",
        ]);

        City::create([
            "id" => 97,
            "prefecture_id" => 1,
            "name" => "上川郡東神楽町",
            "romaji" => "kamikawagunhigashikagurachou",
            "hiragana" => "かみかわぐんひがしかぐらちょう",
            "katakana" => "カミカワグンヒガシカグラチョウ",
            "katakana_half" => "ｶﾐｶﾜｸﾞﾝﾋｶﾞｼｶｸﾞﾗﾁｮｳ",
        ]);

        City::create([
            "id" => 98,
            "prefecture_id" => 1,
            "name" => "上川郡当麻町",
            "romaji" => "kamikawaguntoumachou",
            "hiragana" => "かみかわぐんとうまちょう",
            "katakana" => "カミカワグントウマチョウ",
            "katakana_half" => "ｶﾐｶﾜｸﾞﾝﾄｳﾏﾁｮｳ",
        ]);

        City::create([
            "id" => 99,
            "prefecture_id" => 1,
            "name" => "上川郡比布町",
            "romaji" => "kamikawagunpippuchou",
            "hiragana" => "かみかわぐんぴっぷちょう",
            "katakana" => "カミカワグンピップチョウ",
            "katakana_half" => "ｶﾐｶﾜｸﾞﾝﾋﾟｯﾌﾟﾁｮｳ",
        ]);

        City::create([
            "id" => 100,
            "prefecture_id" => 1,
            "name" => "上川郡愛別町",
            "romaji" => "kamikawagunaibetsuchou",
            "hiragana" => "かみかわぐんあいべつちょう",
            "katakana" => "カミカワグンアイベツチョウ",
            "katakana_half" => "ｶﾐｶﾜｸﾞﾝｱｲﾍﾞﾂﾁｮｳ",
        ]);

        City::create([
            "id" => 101,
            "prefecture_id" => 1,
            "name" => "上川郡上川町",
            "romaji" => "kamikawagunkamikawachou",
            "hiragana" => "かみかわぐんかみかわちょう",
            "katakana" => "カミカワグンカミカワチョウ",
            "katakana_half" => "ｶﾐｶﾜｸﾞﾝｶﾐｶﾜﾁｮｳ",
        ]);

        City::create([
            "id" => 102,
            "prefecture_id" => 1,
            "name" => "上川郡東川町",
            "romaji" => "kamikawagunhigashikawachou",
            "hiragana" => "かみかわぐんひがしかわちょう",
            "katakana" => "カミカワグンヒガシカワチョウ",
            "katakana_half" => "ｶﾐｶﾜｸﾞﾝﾋｶﾞｼｶﾜﾁｮｳ",
        ]);

        City::create([
            "id" => 103,
            "prefecture_id" => 1,
            "name" => "上川郡美瑛町",
            "romaji" => "kamikawagunbieichou",
            "hiragana" => "かみかわぐんびえいちょう",
            "katakana" => "カミカワグンビエイチョウ",
            "katakana_half" => "ｶﾐｶﾜｸﾞﾝﾋﾞｴｲﾁｮｳ",
        ]);

        City::create([
            "id" => 104,
            "prefecture_id" => 1,
            "name" => "空知郡上富良野町",
            "romaji" => "sorachigunkamifuranochou",
            "hiragana" => "そらちぐんかみふらのちょう",
            "katakana" => "ソラチグンカミフラノチョウ",
            "katakana_half" => "ｿﾗﾁｸﾞﾝｶﾐﾌﾗﾉﾁｮｳ",
        ]);

        City::create([
            "id" => 105,
            "prefecture_id" => 1,
            "name" => "空知郡中富良野町",
            "romaji" => "sorachigunnakafuranochou",
            "hiragana" => "そらちぐんなかふらのちょう",
            "katakana" => "ソラチグンナカフラノチョウ",
            "katakana_half" => "ｿﾗﾁｸﾞﾝﾅｶﾌﾗﾉﾁｮｳ",
        ]);

        City::create([
            "id" => 106,
            "prefecture_id" => 1,
            "name" => "空知郡南富良野町",
            "romaji" => "sorachigunminamifuranochou",
            "hiragana" => "そらちぐんみなみふらのちょう",
            "katakana" => "ソラチグンミナミフラノチョウ",
            "katakana_half" => "ｿﾗﾁｸﾞﾝﾐﾅﾐﾌﾗﾉﾁｮｳ",
        ]);

        City::create([
            "id" => 107,
            "prefecture_id" => 1,
            "name" => "勇払郡占冠村",
            "romaji" => "yuufutsugunshimukappumura",
            "hiragana" => "ゆうふつぐんしむかっぷむら",
            "katakana" => "ユウフツグンシムカップムラ",
            "katakana_half" => "ﾕｳﾌﾂｸﾞﾝｼﾑｶｯﾌﾟﾑﾗ",
        ]);

        City::create([
            "id" => 108,
            "prefecture_id" => 1,
            "name" => "上川郡和寒町",
            "romaji" => "kamikawagunwassamuchou",
            "hiragana" => "かみかわぐんわっさむちょう",
            "katakana" => "カミカワグンワッサムチョウ",
            "katakana_half" => "ｶﾐｶﾜｸﾞﾝﾜｯｻﾑﾁｮｳ",
        ]);

        City::create([
            "id" => 109,
            "prefecture_id" => 1,
            "name" => "上川郡剣淵町",
            "romaji" => "kamikawagunkenbuchichou",
            "hiragana" => "かみかわぐんけんぶちちょう",
            "katakana" => "カミカワグンケンブチチョウ",
            "katakana_half" => "ｶﾐｶﾜｸﾞﾝｹﾝﾌﾞﾁﾁｮｳ",
        ]);

        City::create([
            "id" => 110,
            "prefecture_id" => 1,
            "name" => "上川郡下川町",
            "romaji" => "kamikawagunshimokawachou",
            "hiragana" => "かみかわぐんしもかわちょう",
            "katakana" => "カミカワグンシモカワチョウ",
            "katakana_half" => "ｶﾐｶﾜｸﾞﾝｼﾓｶﾜﾁｮｳ",
        ]);

        City::create([
            "id" => 111,
            "prefecture_id" => 1,
            "name" => "中川郡美深町",
            "romaji" => "nakagawagunbifukachou",
            "hiragana" => "なかがわぐんびふかちょう",
            "katakana" => "ナカガワグンビフカチョウ",
            "katakana_half" => "ﾅｶｶﾞﾜｸﾞﾝﾋﾞﾌｶﾁｮｳ",
        ]);

        City::create([
            "id" => 112,
            "prefecture_id" => 1,
            "name" => "中川郡音威子府村",
            "romaji" => "nakagawagunotoineppumura",
            "hiragana" => "なかがわぐんおといねっぷむら",
            "katakana" => "ナカガワグンオトイネップムラ",
            "katakana_half" => "ﾅｶｶﾞﾜｸﾞﾝｵﾄｲﾈｯﾌﾟﾑﾗ",
        ]);

        City::create([
            "id" => 113,
            "prefecture_id" => 1,
            "name" => "中川郡中川町",
            "romaji" => "nakagawagunnakagawachou",
            "hiragana" => "なかがわぐんなかがわちょう",
            "katakana" => "ナカガワグンナカガワチョウ",
            "katakana_half" => "ﾅｶｶﾞﾜｸﾞﾝﾅｶｶﾞﾜﾁｮｳ",
        ]);

        City::create([
            "id" => 114,
            "prefecture_id" => 1,
            "name" => "雨竜郡幌加内町",
            "romaji" => "uryuugunhorokanaichou",
            "hiragana" => "うりゅうぐんほろかないちょう",
            "katakana" => "ウリュウグンホロカナイチョウ",
            "katakana_half" => "ｳﾘｭｳｸﾞﾝﾎﾛｶﾅｲﾁｮｳ",
        ]);

        City::create([
            "id" => 115,
            "prefecture_id" => 1,
            "name" => "増毛郡増毛町",
            "romaji" => "mashikegunmashikechou",
            "hiragana" => "ましけぐんましけちょう",
            "katakana" => "マシケグンマシケチョウ",
            "katakana_half" => "ﾏｼｹｸﾞﾝﾏｼｹﾁｮｳ",
        ]);

        City::create([
            "id" => 116,
            "prefecture_id" => 1,
            "name" => "留萌郡小平町",
            "romaji" => "rumoigunobirachou",
            "hiragana" => "るもいぐんおびらちょう",
            "katakana" => "ルモイグンオビラチョウ",
            "katakana_half" => "ﾙﾓｲｸﾞﾝｵﾋﾞﾗﾁｮｳ",
        ]);

        City::create([
            "id" => 117,
            "prefecture_id" => 1,
            "name" => "苫前郡苫前町",
            "romaji" => "tomamaeguntomamaechou",
            "hiragana" => "とままえぐんとままえちょう",
            "katakana" => "トママエグントママエチョウ",
            "katakana_half" => "ﾄﾏﾏｴｸﾞﾝﾄﾏﾏｴﾁｮｳ",
        ]);

        City::create([
            "id" => 118,
            "prefecture_id" => 1,
            "name" => "苫前郡羽幌町",
            "romaji" => "tomamaegunhaborochou",
            "hiragana" => "とままえぐんはぼろちょう",
            "katakana" => "トママエグンハボロチョウ",
            "katakana_half" => "ﾄﾏﾏｴｸﾞﾝﾊﾎﾞﾛﾁｮｳ",
        ]);

        City::create([
            "id" => 119,
            "prefecture_id" => 1,
            "name" => "苫前郡初山別村",
            "romaji" => "tomamaegunshosanbetsumura",
            "hiragana" => "とままえぐんしょさんべつむら",
            "katakana" => "トママエグンショサンベツムラ",
            "katakana_half" => "ﾄﾏﾏｴｸﾞﾝｼｮｻﾝﾍﾞﾂﾑﾗ",
        ]);

        City::create([
            "id" => 120,
            "prefecture_id" => 1,
            "name" => "天塩郡遠別町",
            "romaji" => "teshiogunenbetsuchou",
            "hiragana" => "てしおぐんえんべつちょう",
            "katakana" => "テシオグンエンベツチョウ",
            "katakana_half" => "ﾃｼｵｸﾞﾝｴﾝﾍﾞﾂﾁｮｳ",
        ]);

        City::create([
            "id" => 121,
            "prefecture_id" => 1,
            "name" => "天塩郡天塩町",
            "romaji" => "teshiogunteshiochou",
            "hiragana" => "てしおぐんてしおちょう",
            "katakana" => "テシオグンテシオチョウ",
            "katakana_half" => "ﾃｼｵｸﾞﾝﾃｼｵﾁｮｳ",
        ]);

        City::create([
            "id" => 122,
            "prefecture_id" => 1,
            "name" => "宗谷郡猿払村",
            "romaji" => "souyagunsarufutsumura",
            "hiragana" => "そうやぐんさるふつむら",
            "katakana" => "ソウヤグンサルフツムラ",
            "katakana_half" => "ｿｳﾔｸﾞﾝｻﾙﾌﾂﾑﾗ",
        ]);

        City::create([
            "id" => 123,
            "prefecture_id" => 1,
            "name" => "枝幸郡浜頓別町",
            "romaji" => "esashigunhamatonbetsuchou",
            "hiragana" => "えさしぐんはまとんべつちょう",
            "katakana" => "エサシグンハマトンベツチョウ",
            "katakana_half" => "ｴｻｼｸﾞﾝﾊﾏﾄﾝﾍﾞﾂﾁｮｳ",
        ]);

        City::create([
            "id" => 124,
            "prefecture_id" => 1,
            "name" => "枝幸郡中頓別町",
            "romaji" => "esashigunnakatonbetsuchou",
            "hiragana" => "えさしぐんなかとんべつちょう",
            "katakana" => "エサシグンナカトンベツチョウ",
            "katakana_half" => "ｴｻｼｸﾞﾝﾅｶﾄﾝﾍﾞﾂﾁｮｳ",
        ]);

        City::create([
            "id" => 125,
            "prefecture_id" => 1,
            "name" => "枝幸郡枝幸町",
            "romaji" => "esashigunesashichou",
            "hiragana" => "えさしぐんえさしちょう",
            "katakana" => "エサシグンエサシチョウ",
            "katakana_half" => "ｴｻｼｸﾞﾝｴｻｼﾁｮｳ",
        ]);

        City::create([
            "id" => 126,
            "prefecture_id" => 1,
            "name" => "天塩郡豊富町",
            "romaji" => "teshioguntoyotomichou",
            "hiragana" => "てしおぐんとよとみちょう",
            "katakana" => "テシオグントヨトミチョウ",
            "katakana_half" => "ﾃｼｵｸﾞﾝﾄﾖﾄﾐﾁｮｳ",
        ]);

        City::create([
            "id" => 127,
            "prefecture_id" => 1,
            "name" => "礼文郡礼文町",
            "romaji" => "rebungunrebunchou",
            "hiragana" => "れぶんぐんれぶんちょう",
            "katakana" => "レブングンレブンチョウ",
            "katakana_half" => "ﾚﾌﾞﾝｸﾞﾝﾚﾌﾞﾝﾁｮｳ",
        ]);

        City::create([
            "id" => 128,
            "prefecture_id" => 1,
            "name" => "利尻郡利尻町",
            "romaji" => "rishirigunrishirichou",
            "hiragana" => "りしりぐんりしりちょう",
            "katakana" => "リシリグンリシリチョウ",
            "katakana_half" => "ﾘｼﾘｸﾞﾝﾘｼﾘﾁｮｳ",
        ]);

        City::create([
            "id" => 129,
            "prefecture_id" => 1,
            "name" => "利尻郡利尻富士町",
            "romaji" => "rishirigunrishirifujichou",
            "hiragana" => "りしりぐんりしりふじちょう",
            "katakana" => "リシリグンリシリフジチョウ",
            "katakana_half" => "ﾘｼﾘｸﾞﾝﾘｼﾘﾌｼﾞﾁｮｳ",
        ]);

        City::create([
            "id" => 130,
            "prefecture_id" => 1,
            "name" => "天塩郡幌延町",
            "romaji" => "teshiogunhoronobechou",
            "hiragana" => "てしおぐんほろのべちょう",
            "katakana" => "テシオグンホロノベチョウ",
            "katakana_half" => "ﾃｼｵｸﾞﾝﾎﾛﾉﾍﾞﾁｮｳ",
        ]);

        City::create([
            "id" => 131,
            "prefecture_id" => 1,
            "name" => "網走郡美幌町",
            "romaji" => "abashirigunbihorochou",
            "hiragana" => "あばしりぐんびほろちょう",
            "katakana" => "アバシリグンビホロチョウ",
            "katakana_half" => "ｱﾊﾞｼﾘｸﾞﾝﾋﾞﾎﾛﾁｮｳ",
        ]);

        City::create([
            "id" => 132,
            "prefecture_id" => 1,
            "name" => "網走郡津別町",
            "romaji" => "abashiriguntsubetsuchou",
            "hiragana" => "あばしりぐんつべつちょう",
            "katakana" => "アバシリグンツベツチョウ",
            "katakana_half" => "ｱﾊﾞｼﾘｸﾞﾝﾂﾍﾞﾂﾁｮｳ",
        ]);

        City::create([
            "id" => 133,
            "prefecture_id" => 1,
            "name" => "斜里郡斜里町",
            "romaji" => "sharigunsharichou",
            "hiragana" => "しゃりぐんしゃりちょう",
            "katakana" => "シャリグンシャリチョウ",
            "katakana_half" => "ｼｬﾘｸﾞﾝｼｬﾘﾁｮｳ",
        ]);

        City::create([
            "id" => 134,
            "prefecture_id" => 1,
            "name" => "斜里郡清里町",
            "romaji" => "sharigunkiyosatochou",
            "hiragana" => "しゃりぐんきよさとちょう",
            "katakana" => "シャリグンキヨサトチョウ",
            "katakana_half" => "ｼｬﾘｸﾞﾝｷﾖｻﾄﾁｮｳ",
        ]);

        City::create([
            "id" => 135,
            "prefecture_id" => 1,
            "name" => "斜里郡小清水町",
            "romaji" => "sharigunkoshimizuchou",
            "hiragana" => "しゃりぐんこしみずちょう",
            "katakana" => "シャリグンコシミズチョウ",
            "katakana_half" => "ｼｬﾘｸﾞﾝｺｼﾐｽﾞﾁｮｳ",
        ]);

        City::create([
            "id" => 136,
            "prefecture_id" => 1,
            "name" => "常呂郡訓子府町",
            "romaji" => "tokorogunkunneppuchou",
            "hiragana" => "ところぐんくんねっぷちょう",
            "katakana" => "トコログンクンネップチョウ",
            "katakana_half" => "ﾄｺﾛｸﾞﾝｸﾝﾈｯﾌﾟﾁｮｳ",
        ]);

        City::create([
            "id" => 137,
            "prefecture_id" => 1,
            "name" => "常呂郡置戸町",
            "romaji" => "tokorogunoketochou",
            "hiragana" => "ところぐんおけとちょう",
            "katakana" => "トコログンオケトチョウ",
            "katakana_half" => "ﾄｺﾛｸﾞﾝｵｹﾄﾁｮｳ",
        ]);

        City::create([
            "id" => 138,
            "prefecture_id" => 1,
            "name" => "常呂郡佐呂間町",
            "romaji" => "tokorogunsaromachou",
            "hiragana" => "ところぐんさろまちょう",
            "katakana" => "トコログンサロマチョウ",
            "katakana_half" => "ﾄｺﾛｸﾞﾝｻﾛﾏﾁｮｳ",
        ]);

        City::create([
            "id" => 139,
            "prefecture_id" => 1,
            "name" => "紋別郡遠軽町",
            "romaji" => "monbetsugunengaruchou",
            "hiragana" => "もんべつぐんえんがるちょう",
            "katakana" => "モンベツグンエンガルチョウ",
            "katakana_half" => "ﾓﾝﾍﾞﾂｸﾞﾝｴﾝｶﾞﾙﾁｮｳ",
        ]);

        City::create([
            "id" => 140,
            "prefecture_id" => 1,
            "name" => "紋別郡湧別町",
            "romaji" => "monbetsugunyuubetsuchou",
            "hiragana" => "もんべつぐんゆうべつちょう",
            "katakana" => "モンベツグンユウベツチョウ",
            "katakana_half" => "ﾓﾝﾍﾞﾂｸﾞﾝﾕｳﾍﾞﾂﾁｮｳ",
        ]);

        City::create([
            "id" => 141,
            "prefecture_id" => 1,
            "name" => "紋別郡滝上町",
            "romaji" => "monbetsuguntakinouechou",
            "hiragana" => "もんべつぐんたきのうえちょう",
            "katakana" => "モンベツグンタキノウエチョウ",
            "katakana_half" => "ﾓﾝﾍﾞﾂｸﾞﾝﾀｷﾉｳｴﾁｮｳ",
        ]);

        City::create([
            "id" => 142,
            "prefecture_id" => 1,
            "name" => "紋別郡興部町",
            "romaji" => "monbetsugunokoppechou",
            "hiragana" => "もんべつぐんおこっぺちょう",
            "katakana" => "モンベツグンオコッペチョウ",
            "katakana_half" => "ﾓﾝﾍﾞﾂｸﾞﾝｵｺｯﾍﾟﾁｮｳ",
        ]);

        City::create([
            "id" => 143,
            "prefecture_id" => 1,
            "name" => "紋別郡西興部村",
            "romaji" => "monbetsugunnishiokoppemura",
            "hiragana" => "もんべつぐんにしおこっぺむら",
            "katakana" => "モンベツグンニシオコッペムラ",
            "katakana_half" => "ﾓﾝﾍﾞﾂｸﾞﾝﾆｼｵｺｯﾍﾟﾑﾗ",
        ]);

        City::create([
            "id" => 144,
            "prefecture_id" => 1,
            "name" => "紋別郡雄武町",
            "romaji" => "monbetsugunoumuchou",
            "hiragana" => "もんべつぐんおうむちょう",
            "katakana" => "モンベツグンオウムチョウ",
            "katakana_half" => "ﾓﾝﾍﾞﾂｸﾞﾝｵｳﾑﾁｮｳ",
        ]);

        City::create([
            "id" => 145,
            "prefecture_id" => 1,
            "name" => "網走郡大空町",
            "romaji" => "abashirigunoozorachou",
            "hiragana" => "あばしりぐんおおぞらちょう",
            "katakana" => "アバシリグンオオゾラチョウ",
            "katakana_half" => "ｱﾊﾞｼﾘｸﾞﾝｵｵｿﾞﾗﾁｮｳ",
        ]);

        City::create([
            "id" => 146,
            "prefecture_id" => 1,
            "name" => "虻田郡豊浦町",
            "romaji" => "abutaguntoyourachou",
            "hiragana" => "あぶたぐんとようらちょう",
            "katakana" => "アブタグントヨウラチョウ",
            "katakana_half" => "ｱﾌﾞﾀｸﾞﾝﾄﾖｳﾗﾁｮｳ",
        ]);

        City::create([
            "id" => 147,
            "prefecture_id" => 1,
            "name" => "有珠郡壮瞥町",
            "romaji" => "usugunsoubetsuchou",
            "hiragana" => "うすぐんそうべつちょう",
            "katakana" => "ウスグンソウベツチョウ",
            "katakana_half" => "ｳｽｸﾞﾝｿｳﾍﾞﾂﾁｮｳ",
        ]);

        City::create([
            "id" => 148,
            "prefecture_id" => 1,
            "name" => "白老郡白老町",
            "romaji" => "shiraoigunshiraoichou",
            "hiragana" => "しらおいぐんしらおいちょう",
            "katakana" => "シラオイグンシラオイチョウ",
            "katakana_half" => "ｼﾗｵｲｸﾞﾝｼﾗｵｲﾁｮｳ",
        ]);

        City::create([
            "id" => 149,
            "prefecture_id" => 1,
            "name" => "勇払郡厚真町",
            "romaji" => "yuufutsugunatsumachou",
            "hiragana" => "ゆうふつぐんあつまちょう",
            "katakana" => "ユウフツグンアツマチョウ",
            "katakana_half" => "ﾕｳﾌﾂｸﾞﾝｱﾂﾏﾁｮｳ",
        ]);

        City::create([
            "id" => 150,
            "prefecture_id" => 1,
            "name" => "虻田郡洞爺湖町",
            "romaji" => "abutaguntouyakochou",
            "hiragana" => "あぶたぐんとうやこちょう",
            "katakana" => "アブタグントウヤコチョウ",
            "katakana_half" => "ｱﾌﾞﾀｸﾞﾝﾄｳﾔｺﾁｮｳ",
        ]);

        City::create([
            "id" => 151,
            "prefecture_id" => 1,
            "name" => "勇払郡安平町",
            "romaji" => "yuufutsugunabirachou",
            "hiragana" => "ゆうふつぐんあびらちょう",
            "katakana" => "ユウフツグンアビラチョウ",
            "katakana_half" => "ﾕｳﾌﾂｸﾞﾝｱﾋﾞﾗﾁｮｳ",
        ]);

        City::create([
            "id" => 152,
            "prefecture_id" => 1,
            "name" => "勇払郡むかわ町",
            "romaji" => "yuufutsugunmukawachou",
            "hiragana" => "ゆうふつぐんむかわちょう",
            "katakana" => "ユウフツグンムカワチョウ",
            "katakana_half" => "ﾕｳﾌﾂｸﾞﾝﾑｶﾜﾁｮｳ",
        ]);

        City::create([
            "id" => 153,
            "prefecture_id" => 1,
            "name" => "沙流郡日高町",
            "romaji" => "sarugunhidakachou",
            "hiragana" => "さるぐんひだかちょう",
            "katakana" => "サルグンヒダカチョウ",
            "katakana_half" => "ｻﾙｸﾞﾝﾋﾀﾞｶﾁｮｳ",
        ]);

        City::create([
            "id" => 154,
            "prefecture_id" => 1,
            "name" => "沙流郡平取町",
            "romaji" => "sarugunbiratorichou",
            "hiragana" => "さるぐんびらとりちょう",
            "katakana" => "サルグンビラトリチョウ",
            "katakana_half" => "ｻﾙｸﾞﾝﾋﾞﾗﾄﾘﾁｮｳ",
        ]);

        City::create([
            "id" => 155,
            "prefecture_id" => 1,
            "name" => "新冠郡新冠町",
            "romaji" => "niikappugunniikappuchou",
            "hiragana" => "にいかっぷぐんにいかっぷちょう",
            "katakana" => "ニイカップグンニイカップチョウ",
            "katakana_half" => "ﾆｲｶｯﾌﾟｸﾞﾝﾆｲｶｯﾌﾟﾁｮｳ",
        ]);

        City::create([
            "id" => 156,
            "prefecture_id" => 1,
            "name" => "浦河郡浦河町",
            "romaji" => "urakawagunurakawachou",
            "hiragana" => "うらかわぐんうらかわちょう",
            "katakana" => "ウラカワグンウラカワチョウ",
            "katakana_half" => "ｳﾗｶﾜｸﾞﾝｳﾗｶﾜﾁｮｳ",
        ]);

        City::create([
            "id" => 157,
            "prefecture_id" => 1,
            "name" => "様似郡様似町",
            "romaji" => "samanigunsamanichou",
            "hiragana" => "さまにぐんさまにちょう",
            "katakana" => "サマニグンサマニチョウ",
            "katakana_half" => "ｻﾏﾆｸﾞﾝｻﾏﾆﾁｮｳ",
        ]);

        City::create([
            "id" => 158,
            "prefecture_id" => 1,
            "name" => "幌泉郡えりも町",
            "romaji" => "horoizumigunerimochou",
            "hiragana" => "ほろいずみぐんえりもちょう",
            "katakana" => "ホロイズミグンエリモチョウ",
            "katakana_half" => "ﾎﾛｲｽﾞﾐｸﾞﾝｴﾘﾓﾁｮｳ",
        ]);

        City::create([
            "id" => 159,
            "prefecture_id" => 1,
            "name" => "日高郡新ひだか町",
            "romaji" => "hidakagunshinhidakachou",
            "hiragana" => "ひだかぐんしんひだかちょう",
            "katakana" => "ヒダカグンシンヒダカチョウ",
            "katakana_half" => "ﾋﾀﾞｶｸﾞﾝｼﾝﾋﾀﾞｶﾁｮｳ",
        ]);

        City::create([
            "id" => 160,
            "prefecture_id" => 1,
            "name" => "河東郡音更町",
            "romaji" => "katougunotofukechou",
            "hiragana" => "かとうぐんおとふけちょう",
            "katakana" => "カトウグンオトフケチョウ",
            "katakana_half" => "ｶﾄｳｸﾞﾝｵﾄﾌｹﾁｮｳ",
        ]);

        City::create([
            "id" => 161,
            "prefecture_id" => 1,
            "name" => "河東郡士幌町",
            "romaji" => "katougunshihorochou",
            "hiragana" => "かとうぐんしほろちょう",
            "katakana" => "カトウグンシホロチョウ",
            "katakana_half" => "ｶﾄｳｸﾞﾝｼﾎﾛﾁｮｳ",
        ]);

        City::create([
            "id" => 162,
            "prefecture_id" => 1,
            "name" => "河東郡上士幌町",
            "romaji" => "katougunkamishihorochou",
            "hiragana" => "かとうぐんかみしほろちょう",
            "katakana" => "カトウグンカミシホロチョウ",
            "katakana_half" => "ｶﾄｳｸﾞﾝｶﾐｼﾎﾛﾁｮｳ",
        ]);

        City::create([
            "id" => 163,
            "prefecture_id" => 1,
            "name" => "河東郡鹿追町",
            "romaji" => "katougunshikaoichou",
            "hiragana" => "かとうぐんしかおいちょう",
            "katakana" => "カトウグンシカオイチョウ",
            "katakana_half" => "ｶﾄｳｸﾞﾝｼｶｵｲﾁｮｳ",
        ]);

        City::create([
            "id" => 164,
            "prefecture_id" => 1,
            "name" => "上川郡新得町",
            "romaji" => "kamikawagunshintokuchou",
            "hiragana" => "かみかわぐんしんとくちょう",
            "katakana" => "カミカワグンシントクチョウ",
            "katakana_half" => "ｶﾐｶﾜｸﾞﾝｼﾝﾄｸﾁｮｳ",
        ]);

        City::create([
            "id" => 165,
            "prefecture_id" => 1,
            "name" => "上川郡清水町",
            "romaji" => "kamikawagunshimizuchou",
            "hiragana" => "かみかわぐんしみずちょう",
            "katakana" => "カミカワグンシミズチョウ",
            "katakana_half" => "ｶﾐｶﾜｸﾞﾝｼﾐｽﾞﾁｮｳ",
        ]);

        City::create([
            "id" => 166,
            "prefecture_id" => 1,
            "name" => "河西郡芽室町",
            "romaji" => "kasaigunmemurochou",
            "hiragana" => "かさいぐんめむろちょう",
            "katakana" => "カサイグンメムロチョウ",
            "katakana_half" => "ｶｻｲｸﾞﾝﾒﾑﾛﾁｮｳ",
        ]);

        City::create([
            "id" => 167,
            "prefecture_id" => 1,
            "name" => "河西郡中札内村",
            "romaji" => "kasaigunnakasatsunaimura",
            "hiragana" => "かさいぐんなかさつないむら",
            "katakana" => "カサイグンナカサツナイムラ",
            "katakana_half" => "ｶｻｲｸﾞﾝﾅｶｻﾂﾅｲﾑﾗ",
        ]);

        City::create([
            "id" => 168,
            "prefecture_id" => 1,
            "name" => "河西郡更別村",
            "romaji" => "kasaigunsarabetsumura",
            "hiragana" => "かさいぐんさらべつむら",
            "katakana" => "カサイグンサラベツムラ",
            "katakana_half" => "ｶｻｲｸﾞﾝｻﾗﾍﾞﾂﾑﾗ",
        ]);

        City::create([
            "id" => 169,
            "prefecture_id" => 1,
            "name" => "広尾郡大樹町",
            "romaji" => "hirooguntaikichou",
            "hiragana" => "ひろおぐんたいきちょう",
            "katakana" => "ヒロオグンタイキチョウ",
            "katakana_half" => "ﾋﾛｵｸﾞﾝﾀｲｷﾁｮｳ",
        ]);

        City::create([
            "id" => 170,
            "prefecture_id" => 1,
            "name" => "広尾郡広尾町",
            "romaji" => "hiroogunhiroochou",
            "hiragana" => "ひろおぐんひろおちょう",
            "katakana" => "ヒロオグンヒロオチョウ",
            "katakana_half" => "ﾋﾛｵｸﾞﾝﾋﾛｵﾁｮｳ",
        ]);

        City::create([
            "id" => 171,
            "prefecture_id" => 1,
            "name" => "中川郡幕別町",
            "romaji" => "nakagawagunmakubetsuchou",
            "hiragana" => "なかがわぐんまくべつちょう",
            "katakana" => "ナカガワグンマクベツチョウ",
            "katakana_half" => "ﾅｶｶﾞﾜｸﾞﾝﾏｸﾍﾞﾂﾁｮｳ",
        ]);

        City::create([
            "id" => 172,
            "prefecture_id" => 1,
            "name" => "中川郡池田町",
            "romaji" => "nakagawagunikedachou",
            "hiragana" => "なかがわぐんいけだちょう",
            "katakana" => "ナカガワグンイケダチョウ",
            "katakana_half" => "ﾅｶｶﾞﾜｸﾞﾝｲｹﾀﾞﾁｮｳ",
        ]);

        City::create([
            "id" => 173,
            "prefecture_id" => 1,
            "name" => "中川郡豊頃町",
            "romaji" => "nakagawaguntoyokorochou",
            "hiragana" => "なかがわぐんとよころちょう",
            "katakana" => "ナカガワグントヨコロチョウ",
            "katakana_half" => "ﾅｶｶﾞﾜｸﾞﾝﾄﾖｺﾛﾁｮｳ",
        ]);

        City::create([
            "id" => 174,
            "prefecture_id" => 1,
            "name" => "中川郡本別町",
            "romaji" => "nakagawagunhonbetsuchou",
            "hiragana" => "なかがわぐんほんべつちょう",
            "katakana" => "ナカガワグンホンベツチョウ",
            "katakana_half" => "ﾅｶｶﾞﾜｸﾞﾝﾎﾝﾍﾞﾂﾁｮｳ",
        ]);

        City::create([
            "id" => 175,
            "prefecture_id" => 1,
            "name" => "足寄郡足寄町",
            "romaji" => "ashorogunashorochou",
            "hiragana" => "あしょろぐんあしょろちょう",
            "katakana" => "アショログンアショロチョウ",
            "katakana_half" => "ｱｼｮﾛｸﾞﾝｱｼｮﾛﾁｮｳ",
        ]);

        City::create([
            "id" => 176,
            "prefecture_id" => 1,
            "name" => "足寄郡陸別町",
            "romaji" => "ashorogunrikubetsuchou",
            "hiragana" => "あしょろぐんりくべつちょう",
            "katakana" => "アショログンリクベツチョウ",
            "katakana_half" => "ｱｼｮﾛｸﾞﾝﾘｸﾍﾞﾂﾁｮｳ",
        ]);

        City::create([
            "id" => 177,
            "prefecture_id" => 1,
            "name" => "十勝郡浦幌町",
            "romaji" => "tokachigunurahorochou",
            "hiragana" => "とかちぐんうらほろちょう",
            "katakana" => "トカチグンウラホロチョウ",
            "katakana_half" => "ﾄｶﾁｸﾞﾝｳﾗﾎﾛﾁｮｳ",
        ]);

        City::create([
            "id" => 178,
            "prefecture_id" => 1,
            "name" => "釧路郡釧路町",
            "romaji" => "kushirogunkushirochou",
            "hiragana" => "くしろぐんくしろちょう",
            "katakana" => "クシログンクシロチョウ",
            "katakana_half" => "ｸｼﾛｸﾞﾝｸｼﾛﾁｮｳ",
        ]);

        City::create([
            "id" => 179,
            "prefecture_id" => 1,
            "name" => "厚岸郡厚岸町",
            "romaji" => "akkeshigunakkeshichou",
            "hiragana" => "あっけしぐんあっけしちょう",
            "katakana" => "アッケシグンアッケシチョウ",
            "katakana_half" => "ｱｯｹｼｸﾞﾝｱｯｹｼﾁｮｳ",
        ]);

        City::create([
            "id" => 180,
            "prefecture_id" => 1,
            "name" => "厚岸郡浜中町",
            "romaji" => "akkeshigunhamanakachou",
            "hiragana" => "あっけしぐんはまなかちょう",
            "katakana" => "アッケシグンハマナカチョウ",
            "katakana_half" => "ｱｯｹｼｸﾞﾝﾊﾏﾅｶﾁｮｳ",
        ]);

        City::create([
            "id" => 181,
            "prefecture_id" => 1,
            "name" => "川上郡標茶町",
            "romaji" => "kawakamigunshibechachou",
            "hiragana" => "かわかみぐんしべちゃちょう",
            "katakana" => "カワカミグンシベチャチョウ",
            "katakana_half" => "ｶﾜｶﾐｸﾞﾝｼﾍﾞﾁｬﾁｮｳ",
        ]);

        City::create([
            "id" => 182,
            "prefecture_id" => 1,
            "name" => "川上郡弟子屈町",
            "romaji" => "kawakamigunteshikagachou",
            "hiragana" => "かわかみぐんてしかがちょう",
            "katakana" => "カワカミグンテシカガチョウ",
            "katakana_half" => "ｶﾜｶﾐｸﾞﾝﾃｼｶｶﾞﾁｮｳ",
        ]);

        City::create([
            "id" => 183,
            "prefecture_id" => 1,
            "name" => "阿寒郡鶴居村",
            "romaji" => "akanguntsuruimura",
            "hiragana" => "あかんぐんつるいむら",
            "katakana" => "アカングンツルイムラ",
            "katakana_half" => "ｱｶﾝｸﾞﾝﾂﾙｲﾑﾗ",
        ]);

        City::create([
            "id" => 184,
            "prefecture_id" => 1,
            "name" => "白糠郡白糠町",
            "romaji" => "shiranukagunshiranukachou",
            "hiragana" => "しらぬかぐんしらぬかちょう",
            "katakana" => "シラヌカグンシラヌカチョウ",
            "katakana_half" => "ｼﾗﾇｶｸﾞﾝｼﾗﾇｶﾁｮｳ",
        ]);

        City::create([
            "id" => 185,
            "prefecture_id" => 1,
            "name" => "野付郡別海町",
            "romaji" => "notsukegunbetsukaichou",
            "hiragana" => "のつけぐんべつかいちょう",
            "katakana" => "ノツケグンベツカイチョウ",
            "katakana_half" => "ﾉﾂｹｸﾞﾝﾍﾞﾂｶｲﾁｮｳ",
        ]);

        City::create([
            "id" => 186,
            "prefecture_id" => 1,
            "name" => "標津郡中標津町",
            "romaji" => "shibetsugunnakashibetsuchou",
            "hiragana" => "しべつぐんなかしべつちょう",
            "katakana" => "シベツグンナカシベツチョウ",
            "katakana_half" => "ｼﾍﾞﾂｸﾞﾝﾅｶｼﾍﾞﾂﾁｮｳ",
        ]);

        City::create([
            "id" => 187,
            "prefecture_id" => 1,
            "name" => "標津郡標津町",
            "romaji" => "shibetsugunshibetsuchou",
            "hiragana" => "しべつぐんしべつちょう",
            "katakana" => "シベツグンシベツチョウ",
            "katakana_half" => "ｼﾍﾞﾂｸﾞﾝｼﾍﾞﾂﾁｮｳ",
        ]);

        City::create([
            "id" => 188,
            "prefecture_id" => 1,
            "name" => "目梨郡羅臼町",
            "romaji" => "menashigunrausuchou",
            "hiragana" => "めなしぐんらうすちょう",
            "katakana" => "メナシグンラウスチョウ",
            "katakana_half" => "ﾒﾅｼｸﾞﾝﾗｳｽﾁｮｳ",
        ]);

        City::create([
            "id" => 189,
            "prefecture_id" => 2,
            "name" => "青森市",
            "romaji" => "aomorishi",
            "hiragana" => "あおもりし",
            "katakana" => "アオモリシ",
            "katakana_half" => "ｱｵﾓﾘｼ",
        ]);

        City::create([
            "id" => 190,
            "prefecture_id" => 2,
            "name" => "弘前市",
            "romaji" => "hirosakishi",
            "hiragana" => "ひろさきし",
            "katakana" => "ヒロサキシ",
            "katakana_half" => "ﾋﾛｻｷｼ",
        ]);

        City::create([
            "id" => 191,
            "prefecture_id" => 2,
            "name" => "八戸市",
            "romaji" => "hachinoheshi",
            "hiragana" => "はちのへし",
            "katakana" => "ハチノヘシ",
            "katakana_half" => "ﾊﾁﾉﾍｼ",
        ]);

        City::create([
            "id" => 192,
            "prefecture_id" => 2,
            "name" => "黒石市",
            "romaji" => "kuroishishi",
            "hiragana" => "くろいしし",
            "katakana" => "クロイシシ",
            "katakana_half" => "ｸﾛｲｼｼ",
        ]);

        City::create([
            "id" => 193,
            "prefecture_id" => 2,
            "name" => "五所川原市",
            "romaji" => "goshogawarashi",
            "hiragana" => "ごしょがわらし",
            "katakana" => "ゴショガワラシ",
            "katakana_half" => "ｺﾞｼｮｶﾞﾜﾗｼ",
        ]);

        City::create([
            "id" => 194,
            "prefecture_id" => 2,
            "name" => "十和田市",
            "romaji" => "towadashi",
            "hiragana" => "とわだし",
            "katakana" => "トワダシ",
            "katakana_half" => "ﾄﾜﾀﾞｼ",
        ]);

        City::create([
            "id" => 195,
            "prefecture_id" => 2,
            "name" => "三沢市",
            "romaji" => "misawashi",
            "hiragana" => "みさわし",
            "katakana" => "ミサワシ",
            "katakana_half" => "ﾐｻﾜｼ",
        ]);

        City::create([
            "id" => 196,
            "prefecture_id" => 2,
            "name" => "むつ市",
            "romaji" => "mutsushi",
            "hiragana" => "むつし",
            "katakana" => "ムツシ",
            "katakana_half" => "ﾑﾂｼ",
        ]);

        City::create([
            "id" => 197,
            "prefecture_id" => 2,
            "name" => "つがる市",
            "romaji" => "tsugarushi",
            "hiragana" => "つがるし",
            "katakana" => "ツガルシ",
            "katakana_half" => "ﾂｶﾞﾙｼ",
        ]);

        City::create([
            "id" => 198,
            "prefecture_id" => 2,
            "name" => "平川市",
            "romaji" => "hirakawashi",
            "hiragana" => "ひらかわし",
            "katakana" => "ヒラカワシ",
            "katakana_half" => "ﾋﾗｶﾜｼ",
        ]);

        City::create([
            "id" => 199,
            "prefecture_id" => 2,
            "name" => "東津軽郡平内町",
            "romaji" => "higashitsugarugunhiranaimachi",
            "hiragana" => "ひがしつがるぐんひらないまち",
            "katakana" => "ヒガシツガルグンヒラナイマチ",
            "katakana_half" => "ﾋｶﾞｼﾂｶﾞﾙｸﾞﾝﾋﾗﾅｲﾏﾁ",
        ]);

        City::create([
            "id" => 200,
            "prefecture_id" => 2,
            "name" => "東津軽郡今別町",
            "romaji" => "higashitsugarugunimabetsumachi",
            "hiragana" => "ひがしつがるぐんいまべつまち",
            "katakana" => "ヒガシツガルグンイマベツマチ",
            "katakana_half" => "ﾋｶﾞｼﾂｶﾞﾙｸﾞﾝｲﾏﾍﾞﾂﾏﾁ",
        ]);

        City::create([
            "id" => 201,
            "prefecture_id" => 2,
            "name" => "東津軽郡蓬田村",
            "romaji" => "higashitsugarugunyomogitamura",
            "hiragana" => "ひがしつがるぐんよもぎたむら",
            "katakana" => "ヒガシツガルグンヨモギタムラ",
            "katakana_half" => "ﾋｶﾞｼﾂｶﾞﾙｸﾞﾝﾖﾓｷﾞﾀﾑﾗ",
        ]);

        City::create([
            "id" => 202,
            "prefecture_id" => 2,
            "name" => "東津軽郡外ヶ浜町",
            "romaji" => "higashitsugarugunsotogahamamachi",
            "hiragana" => "ひがしつがるぐんそとがはままち",
            "katakana" => "ヒガシツガルグンソトガハママチ",
            "katakana_half" => "ﾋｶﾞｼﾂｶﾞﾙｸﾞﾝｿﾄｶﾞﾊﾏﾏﾁ",
        ]);

        City::create([
            "id" => 203,
            "prefecture_id" => 2,
            "name" => "西津軽郡鰺ヶ沢町",
            "romaji" => "nishitsugarugunajigasawamachi",
            "hiragana" => "にしつがるぐんあじがさわまち",
            "katakana" => "ニシツガルグンアジガサワマチ",
            "katakana_half" => "ﾆｼﾂｶﾞﾙｸﾞﾝｱｼﾞｶﾞｻﾜﾏﾁ",
        ]);

        City::create([
            "id" => 204,
            "prefecture_id" => 2,
            "name" => "西津軽郡深浦町",
            "romaji" => "nishitsugarugunfukauramachi",
            "hiragana" => "にしつがるぐんふかうらまち",
            "katakana" => "ニシツガルグンフカウラマチ",
            "katakana_half" => "ﾆｼﾂｶﾞﾙｸﾞﾝﾌｶｳﾗﾏﾁ",
        ]);

        City::create([
            "id" => 205,
            "prefecture_id" => 2,
            "name" => "中津軽郡西目屋村",
            "romaji" => "nakatsugarugunnishimeyamura",
            "hiragana" => "なかつがるぐんにしめやむら",
            "katakana" => "ナカツガルグンニシメヤムラ",
            "katakana_half" => "ﾅｶﾂｶﾞﾙｸﾞﾝﾆｼﾒﾔﾑﾗ",
        ]);

        City::create([
            "id" => 206,
            "prefecture_id" => 2,
            "name" => "南津軽郡藤崎町",
            "romaji" => "minamitsugarugunfujisakimachi",
            "hiragana" => "みなみつがるぐんふじさきまち",
            "katakana" => "ミナミツガルグンフジサキマチ",
            "katakana_half" => "ﾐﾅﾐﾂｶﾞﾙｸﾞﾝﾌｼﾞｻｷﾏﾁ",
        ]);

        City::create([
            "id" => 207,
            "prefecture_id" => 2,
            "name" => "南津軽郡大鰐町",
            "romaji" => "minamitsugarugunoowanimachi",
            "hiragana" => "みなみつがるぐんおおわにまち",
            "katakana" => "ミナミツガルグンオオワニマチ",
            "katakana_half" => "ﾐﾅﾐﾂｶﾞﾙｸﾞﾝｵｵﾜﾆﾏﾁ",
        ]);

        City::create([
            "id" => 208,
            "prefecture_id" => 2,
            "name" => "南津軽郡田舎館村",
            "romaji" => "minamitsugaruguninakadatemura",
            "hiragana" => "みなみつがるぐんいなかだてむら",
            "katakana" => "ミナミツガルグンイナカダテムラ",
            "katakana_half" => "ﾐﾅﾐﾂｶﾞﾙｸﾞﾝｲﾅｶﾀﾞﾃﾑﾗ",
        ]);

        City::create([
            "id" => 209,
            "prefecture_id" => 2,
            "name" => "北津軽郡板柳町",
            "romaji" => "kitatsugarugunitayanagimachi",
            "hiragana" => "きたつがるぐんいたやなぎまち",
            "katakana" => "キタツガルグンイタヤナギマチ",
            "katakana_half" => "ｷﾀﾂｶﾞﾙｸﾞﾝｲﾀﾔﾅｷﾞﾏﾁ",
        ]);

        City::create([
            "id" => 210,
            "prefecture_id" => 2,
            "name" => "北津軽郡鶴田町",
            "romaji" => "kitatsugaruguntsurutamachi",
            "hiragana" => "きたつがるぐんつるたまち",
            "katakana" => "キタツガルグンツルタマチ",
            "katakana_half" => "ｷﾀﾂｶﾞﾙｸﾞﾝﾂﾙﾀﾏﾁ",
        ]);

        City::create([
            "id" => 211,
            "prefecture_id" => 2,
            "name" => "北津軽郡中泊町",
            "romaji" => "kitatsugarugunnakadomarimachi",
            "hiragana" => "きたつがるぐんなかどまりまち",
            "katakana" => "キタツガルグンナカドマリマチ",
            "katakana_half" => "ｷﾀﾂｶﾞﾙｸﾞﾝﾅｶﾄﾞﾏﾘﾏﾁ",
        ]);

        City::create([
            "id" => 212,
            "prefecture_id" => 2,
            "name" => "上北郡野辺地町",
            "romaji" => "kamikitagunnohejimachi",
            "hiragana" => "かみきたぐんのへじまち",
            "katakana" => "カミキタグンノヘジマチ",
            "katakana_half" => "ｶﾐｷﾀｸﾞﾝﾉﾍｼﾞﾏﾁ",
        ]);

        City::create([
            "id" => 213,
            "prefecture_id" => 2,
            "name" => "上北郡七戸町",
            "romaji" => "kamikitagunshichinohemachi",
            "hiragana" => "かみきたぐんしちのへまち",
            "katakana" => "カミキタグンシチノヘマチ",
            "katakana_half" => "ｶﾐｷﾀｸﾞﾝｼﾁﾉﾍﾏﾁ",
        ]);

        City::create([
            "id" => 214,
            "prefecture_id" => 2,
            "name" => "上北郡六戸町",
            "romaji" => "kamikitagunrokunohemachi",
            "hiragana" => "かみきたぐんろくのへまち",
            "katakana" => "カミキタグンロクノヘマチ",
            "katakana_half" => "ｶﾐｷﾀｸﾞﾝﾛｸﾉﾍﾏﾁ",
        ]);

        City::create([
            "id" => 215,
            "prefecture_id" => 2,
            "name" => "上北郡横浜町",
            "romaji" => "kamikitagunyokohamamachi",
            "hiragana" => "かみきたぐんよこはままち",
            "katakana" => "カミキタグンヨコハママチ",
            "katakana_half" => "ｶﾐｷﾀｸﾞﾝﾖｺﾊﾏﾏﾁ",
        ]);

        City::create([
            "id" => 216,
            "prefecture_id" => 2,
            "name" => "上北郡東北町",
            "romaji" => "kamikitaguntouhokumachi",
            "hiragana" => "かみきたぐんとうほくまち",
            "katakana" => "カミキタグントウホクマチ",
            "katakana_half" => "ｶﾐｷﾀｸﾞﾝﾄｳﾎｸﾏﾁ",
        ]);

        City::create([
            "id" => 217,
            "prefecture_id" => 2,
            "name" => "上北郡六ヶ所村",
            "romaji" => "kamikitagunrokkashomura",
            "hiragana" => "かみきたぐんろっかしょむら",
            "katakana" => "カミキタグンロッカショムラ",
            "katakana_half" => "ｶﾐｷﾀｸﾞﾝﾛｯｶｼｮﾑﾗ",
        ]);

        City::create([
            "id" => 218,
            "prefecture_id" => 2,
            "name" => "上北郡おいらせ町",
            "romaji" => "kamikitagunoirasechou",
            "hiragana" => "かみきたぐんおいらせちょう",
            "katakana" => "カミキタグンオイラセチョウ",
            "katakana_half" => "ｶﾐｷﾀｸﾞﾝｵｲﾗｾﾁｮｳ",
        ]);

        City::create([
            "id" => 219,
            "prefecture_id" => 2,
            "name" => "下北郡大間町",
            "romaji" => "shimokitagunoomamachi",
            "hiragana" => "しもきたぐんおおままち",
            "katakana" => "シモキタグンオオママチ",
            "katakana_half" => "ｼﾓｷﾀｸﾞﾝｵｵﾏﾏﾁ",
        ]);

        City::create([
            "id" => 220,
            "prefecture_id" => 2,
            "name" => "下北郡東通村",
            "romaji" => "shimokitagunhigashidoorimura",
            "hiragana" => "しもきたぐんひがしどおりむら",
            "katakana" => "シモキタグンヒガシドオリムラ",
            "katakana_half" => "ｼﾓｷﾀｸﾞﾝﾋｶﾞｼﾄﾞｵﾘﾑﾗ",
        ]);

        City::create([
            "id" => 221,
            "prefecture_id" => 2,
            "name" => "下北郡風間浦村",
            "romaji" => "shimokitagunkazamauramura",
            "hiragana" => "しもきたぐんかざまうらむら",
            "katakana" => "シモキタグンカザマウラムラ",
            "katakana_half" => "ｼﾓｷﾀｸﾞﾝｶｻﾞﾏｳﾗﾑﾗ",
        ]);

        City::create([
            "id" => 222,
            "prefecture_id" => 2,
            "name" => "下北郡佐井村",
            "romaji" => "shimokitagunsaimura",
            "hiragana" => "しもきたぐんさいむら",
            "katakana" => "シモキタグンサイムラ",
            "katakana_half" => "ｼﾓｷﾀｸﾞﾝｻｲﾑﾗ",
        ]);

        City::create([
            "id" => 223,
            "prefecture_id" => 2,
            "name" => "三戸郡三戸町",
            "romaji" => "sannohegunsannohemachi",
            "hiragana" => "さんのへぐんさんのへまち",
            "katakana" => "サンノヘグンサンノヘマチ",
            "katakana_half" => "ｻﾝﾉﾍｸﾞﾝｻﾝﾉﾍﾏﾁ",
        ]);

        City::create([
            "id" => 224,
            "prefecture_id" => 2,
            "name" => "三戸郡五戸町",
            "romaji" => "sannohegungonohemachi",
            "hiragana" => "さんのへぐんごのへまち",
            "katakana" => "サンノヘグンゴノヘマチ",
            "katakana_half" => "ｻﾝﾉﾍｸﾞﾝｺﾞﾉﾍﾏﾁ",
        ]);

        City::create([
            "id" => 225,
            "prefecture_id" => 2,
            "name" => "三戸郡田子町",
            "romaji" => "sannoheguntakkomachi",
            "hiragana" => "さんのへぐんたっこまち",
            "katakana" => "サンノヘグンタッコマチ",
            "katakana_half" => "ｻﾝﾉﾍｸﾞﾝﾀｯｺﾏﾁ",
        ]);

        City::create([
            "id" => 226,
            "prefecture_id" => 2,
            "name" => "三戸郡南部町",
            "romaji" => "sannohegunnanbuchou",
            "hiragana" => "さんのへぐんなんぶちょう",
            "katakana" => "サンノヘグンナンブチョウ",
            "katakana_half" => "ｻﾝﾉﾍｸﾞﾝﾅﾝﾌﾞﾁｮｳ",
        ]);

        City::create([
            "id" => 227,
            "prefecture_id" => 2,
            "name" => "三戸郡階上町",
            "romaji" => "sannohegunhashikamichou",
            "hiragana" => "さんのへぐんはしかみちょう",
            "katakana" => "サンノヘグンハシカミチョウ",
            "katakana_half" => "ｻﾝﾉﾍｸﾞﾝﾊｼｶﾐﾁｮｳ",
        ]);

        City::create([
            "id" => 228,
            "prefecture_id" => 2,
            "name" => "三戸郡新郷村",
            "romaji" => "sannohegunshingoumura",
            "hiragana" => "さんのへぐんしんごうむら",
            "katakana" => "サンノヘグンシンゴウムラ",
            "katakana_half" => "ｻﾝﾉﾍｸﾞﾝｼﾝｺﾞｳﾑﾗ",
        ]);

        City::create([
            "id" => 229,
            "prefecture_id" => 3,
            "name" => "盛岡市",
            "romaji" => "moriokashi",
            "hiragana" => "もりおかし",
            "katakana" => "モリオカシ",
            "katakana_half" => "ﾓﾘｵｶｼ",
        ]);

        City::create([
            "id" => 230,
            "prefecture_id" => 3,
            "name" => "宮古市",
            "romaji" => "miyakoshi",
            "hiragana" => "みやこし",
            "katakana" => "ミヤコシ",
            "katakana_half" => "ﾐﾔｺｼ",
        ]);

        City::create([
            "id" => 231,
            "prefecture_id" => 3,
            "name" => "大船渡市",
            "romaji" => "oofunatoshi",
            "hiragana" => "おおふなとし",
            "katakana" => "オオフナトシ",
            "katakana_half" => "ｵｵﾌﾅﾄｼ",
        ]);

        City::create([
            "id" => 232,
            "prefecture_id" => 3,
            "name" => "花巻市",
            "romaji" => "hanamakishi",
            "hiragana" => "はなまきし",
            "katakana" => "ハナマキシ",
            "katakana_half" => "ﾊﾅﾏｷｼ",
        ]);

        City::create([
            "id" => 233,
            "prefecture_id" => 3,
            "name" => "北上市",
            "romaji" => "kitakamishi",
            "hiragana" => "きたかみし",
            "katakana" => "キタカミシ",
            "katakana_half" => "ｷﾀｶﾐｼ",
        ]);

        City::create([
            "id" => 234,
            "prefecture_id" => 3,
            "name" => "久慈市",
            "romaji" => "kujishi",
            "hiragana" => "くじし",
            "katakana" => "クジシ",
            "katakana_half" => "ｸｼﾞｼ",
        ]);

        City::create([
            "id" => 235,
            "prefecture_id" => 3,
            "name" => "遠野市",
            "romaji" => "toonoshi",
            "hiragana" => "とおのし",
            "katakana" => "トオノシ",
            "katakana_half" => "ﾄｵﾉｼ",
        ]);

        City::create([
            "id" => 236,
            "prefecture_id" => 3,
            "name" => "一関市",
            "romaji" => "ichinosekishi",
            "hiragana" => "いちのせきし",
            "katakana" => "イチノセキシ",
            "katakana_half" => "ｲﾁﾉｾｷｼ",
        ]);

        City::create([
            "id" => 237,
            "prefecture_id" => 3,
            "name" => "陸前高田市",
            "romaji" => "rikuzentakatashi",
            "hiragana" => "りくぜんたかたし",
            "katakana" => "リクゼンタカタシ",
            "katakana_half" => "ﾘｸｾﾞﾝﾀｶﾀｼ",
        ]);

        City::create([
            "id" => 238,
            "prefecture_id" => 3,
            "name" => "釜石市",
            "romaji" => "kamaishishi",
            "hiragana" => "かまいしし",
            "katakana" => "カマイシシ",
            "katakana_half" => "ｶﾏｲｼｼ",
        ]);

        City::create([
            "id" => 239,
            "prefecture_id" => 3,
            "name" => "二戸市",
            "romaji" => "ninoheshi",
            "hiragana" => "にのへし",
            "katakana" => "ニノヘシ",
            "katakana_half" => "ﾆﾉﾍｼ",
        ]);

        City::create([
            "id" => 240,
            "prefecture_id" => 3,
            "name" => "八幡平市",
            "romaji" => "hachimantaishi",
            "hiragana" => "はちまんたいし",
            "katakana" => "ハチマンタイシ",
            "katakana_half" => "ﾊﾁﾏﾝﾀｲｼ",
        ]);

        City::create([
            "id" => 241,
            "prefecture_id" => 3,
            "name" => "奥州市",
            "romaji" => "oushuushi",
            "hiragana" => "おうしゅうし",
            "katakana" => "オウシュウシ",
            "katakana_half" => "ｵｳｼｭｳｼ",
        ]);

        City::create([
            "id" => 242,
            "prefecture_id" => 3,
            "name" => "滝沢市",
            "romaji" => "takizawashi",
            "hiragana" => "たきざわし",
            "katakana" => "タキザワシ",
            "katakana_half" => "ﾀｷｻﾞﾜｼ",
        ]);

        City::create([
            "id" => 243,
            "prefecture_id" => 3,
            "name" => "岩手郡雫石町",
            "romaji" => "iwategunshizukuishichou",
            "hiragana" => "いわてぐんしずくいしちょう",
            "katakana" => "イワテグンシズクイシチョウ",
            "katakana_half" => "ｲﾜﾃｸﾞﾝｼｽﾞｸｲｼﾁｮｳ",
        ]);

        City::create([
            "id" => 244,
            "prefecture_id" => 3,
            "name" => "岩手郡葛巻町",
            "romaji" => "iwategunkuzumakimachi",
            "hiragana" => "いわてぐんくずまきまち",
            "katakana" => "イワテグンクズマキマチ",
            "katakana_half" => "ｲﾜﾃｸﾞﾝｸｽﾞﾏｷﾏﾁ",
        ]);

        City::create([
            "id" => 245,
            "prefecture_id" => 3,
            "name" => "岩手郡岩手町",
            "romaji" => "iwateguniwatemachi",
            "hiragana" => "いわてぐんいわてまち",
            "katakana" => "イワテグンイワテマチ",
            "katakana_half" => "ｲﾜﾃｸﾞﾝｲﾜﾃﾏﾁ",
        ]);

        City::create([
            "id" => 246,
            "prefecture_id" => 3,
            "name" => "紫波郡紫波町",
            "romaji" => "shiwagunshiwachou",
            "hiragana" => "しわぐんしわちょう",
            "katakana" => "シワグンシワチョウ",
            "katakana_half" => "ｼﾜｸﾞﾝｼﾜﾁｮｳ",
        ]);

        City::create([
            "id" => 247,
            "prefecture_id" => 3,
            "name" => "紫波郡矢巾町",
            "romaji" => "shiwagunyahabachou",
            "hiragana" => "しわぐんやはばちょう",
            "katakana" => "シワグンヤハバチョウ",
            "katakana_half" => "ｼﾜｸﾞﾝﾔﾊﾊﾞﾁｮｳ",
        ]);

        City::create([
            "id" => 248,
            "prefecture_id" => 3,
            "name" => "和賀郡西和賀町",
            "romaji" => "wagagunnishiwagamachi",
            "hiragana" => "わがぐんにしわがまち",
            "katakana" => "ワガグンニシワガマチ",
            "katakana_half" => "ﾜｶﾞｸﾞﾝﾆｼﾜｶﾞﾏﾁ",
        ]);

        City::create([
            "id" => 249,
            "prefecture_id" => 3,
            "name" => "胆沢郡金ケ崎町",
            "romaji" => "isawagunkanegasakichou",
            "hiragana" => "いさわぐんかねがさきちょう",
            "katakana" => "イサワグンカネガサキチョウ",
            "katakana_half" => "ｲｻﾜｸﾞﾝｶﾈｶﾞｻｷﾁｮｳ",
        ]);

        City::create([
            "id" => 250,
            "prefecture_id" => 3,
            "name" => "西磐井郡平泉町",
            "romaji" => "nishiiwaigunhiraizumichou",
            "hiragana" => "にしいわいぐんひらいずみちょう",
            "katakana" => "ニシイワイグンヒライズミチョウ",
            "katakana_half" => "ﾆｼｲﾜｲｸﾞﾝﾋﾗｲｽﾞﾐﾁｮｳ",
        ]);

        City::create([
            "id" => 251,
            "prefecture_id" => 3,
            "name" => "気仙郡住田町",
            "romaji" => "kesengunsumitachou",
            "hiragana" => "けせんぐんすみたちょう",
            "katakana" => "ケセングンスミタチョウ",
            "katakana_half" => "ｹｾﾝｸﾞﾝｽﾐﾀﾁｮｳ",
        ]);

        City::create([
            "id" => 252,
            "prefecture_id" => 3,
            "name" => "上閉伊郡大槌町",
            "romaji" => "kamiheigunootsuchichou",
            "hiragana" => "かみへいぐんおおつちちょう",
            "katakana" => "カミヘイグンオオツチチョウ",
            "katakana_half" => "ｶﾐﾍｲｸﾞﾝｵｵﾂﾁﾁｮｳ",
        ]);

        City::create([
            "id" => 253,
            "prefecture_id" => 3,
            "name" => "下閉伊郡山田町",
            "romaji" => "shimoheigunyamadamachi",
            "hiragana" => "しもへいぐんやまだまち",
            "katakana" => "シモヘイグンヤマダマチ",
            "katakana_half" => "ｼﾓﾍｲｸﾞﾝﾔﾏﾀﾞﾏﾁ",
        ]);

        City::create([
            "id" => 254,
            "prefecture_id" => 3,
            "name" => "下閉伊郡岩泉町",
            "romaji" => "shimoheiguniwaizumichou",
            "hiragana" => "しもへいぐんいわいずみちょう",
            "katakana" => "シモヘイグンイワイズミチョウ",
            "katakana_half" => "ｼﾓﾍｲｸﾞﾝｲﾜｲｽﾞﾐﾁｮｳ",
        ]);

        City::create([
            "id" => 255,
            "prefecture_id" => 3,
            "name" => "下閉伊郡田野畑村",
            "romaji" => "shimoheiguntanohatamura",
            "hiragana" => "しもへいぐんたのはたむら",
            "katakana" => "シモヘイグンタノハタムラ",
            "katakana_half" => "ｼﾓﾍｲｸﾞﾝﾀﾉﾊﾀﾑﾗ",
        ]);

        City::create([
            "id" => 256,
            "prefecture_id" => 3,
            "name" => "下閉伊郡普代村",
            "romaji" => "shimoheigunfudaimura",
            "hiragana" => "しもへいぐんふだいむら",
            "katakana" => "シモヘイグンフダイムラ",
            "katakana_half" => "ｼﾓﾍｲｸﾞﾝﾌﾀﾞｲﾑﾗ",
        ]);

        City::create([
            "id" => 257,
            "prefecture_id" => 3,
            "name" => "九戸郡軽米町",
            "romaji" => "kunohegunkarumaimachi",
            "hiragana" => "くのへぐんかるまいまち",
            "katakana" => "クノヘグンカルマイマチ",
            "katakana_half" => "ｸﾉﾍｸﾞﾝｶﾙﾏｲﾏﾁ",
        ]);

        City::create([
            "id" => 258,
            "prefecture_id" => 3,
            "name" => "九戸郡野田村",
            "romaji" => "kunohegunnodamura",
            "hiragana" => "くのへぐんのだむら",
            "katakana" => "クノヘグンノダムラ",
            "katakana_half" => "ｸﾉﾍｸﾞﾝﾉﾀﾞﾑﾗ",
        ]);

        City::create([
            "id" => 259,
            "prefecture_id" => 3,
            "name" => "九戸郡九戸村",
            "romaji" => "kunohegunkunohemura",
            "hiragana" => "くのへぐんくのへむら",
            "katakana" => "クノヘグンクノヘムラ",
            "katakana_half" => "ｸﾉﾍｸﾞﾝｸﾉﾍﾑﾗ",
        ]);

        City::create([
            "id" => 260,
            "prefecture_id" => 3,
            "name" => "九戸郡洋野町",
            "romaji" => "kunohegunhironochou",
            "hiragana" => "くのへぐんひろのちょう",
            "katakana" => "クノヘグンヒロノチョウ",
            "katakana_half" => "ｸﾉﾍｸﾞﾝﾋﾛﾉﾁｮｳ",
        ]);

        City::create([
            "id" => 261,
            "prefecture_id" => 3,
            "name" => "二戸郡一戸町",
            "romaji" => "ninohegunichinohemachi",
            "hiragana" => "にのへぐんいちのへまち",
            "katakana" => "ニノヘグンイチノヘマチ",
            "katakana_half" => "ﾆﾉﾍｸﾞﾝｲﾁﾉﾍﾏﾁ",
        ]);

        City::create([
            "id" => 262,
            "prefecture_id" => 4,
            "name" => "仙台市青葉区",
            "romaji" => "sendaishiaobaku",
            "hiragana" => "せんだいしあおばく",
            "katakana" => "センダイシアオバク",
            "katakana_half" => "ｾﾝﾀﾞｲｼｱｵﾊﾞｸ",
        ]);

        City::create([
            "id" => 263,
            "prefecture_id" => 4,
            "name" => "仙台市宮城野区",
            "romaji" => "sendaishimiyaginoku",
            "hiragana" => "せんだいしみやぎのく",
            "katakana" => "センダイシミヤギノク",
            "katakana_half" => "ｾﾝﾀﾞｲｼﾐﾔｷﾞﾉｸ",
        ]);

        City::create([
            "id" => 264,
            "prefecture_id" => 4,
            "name" => "仙台市若林区",
            "romaji" => "sendaishiwakabayashiku",
            "hiragana" => "せんだいしわかばやしく",
            "katakana" => "センダイシワカバヤシク",
            "katakana_half" => "ｾﾝﾀﾞｲｼﾜｶﾊﾞﾔｼｸ",
        ]);

        City::create([
            "id" => 265,
            "prefecture_id" => 4,
            "name" => "仙台市太白区",
            "romaji" => "sendaishitaihakuku",
            "hiragana" => "せんだいしたいはくく",
            "katakana" => "センダイシタイハクク",
            "katakana_half" => "ｾﾝﾀﾞｲｼﾀｲﾊｸｸ",
        ]);

        City::create([
            "id" => 266,
            "prefecture_id" => 4,
            "name" => "仙台市泉区",
            "romaji" => "sendaishiizumiku",
            "hiragana" => "せんだいしいずみく",
            "katakana" => "センダイシイズミク",
            "katakana_half" => "ｾﾝﾀﾞｲｼｲｽﾞﾐｸ",
        ]);

        City::create([
            "id" => 267,
            "prefecture_id" => 4,
            "name" => "石巻市",
            "romaji" => "ishinomakishi",
            "hiragana" => "いしのまきし",
            "katakana" => "イシノマキシ",
            "katakana_half" => "ｲｼﾉﾏｷｼ",
        ]);

        City::create([
            "id" => 268,
            "prefecture_id" => 4,
            "name" => "塩竈市",
            "romaji" => "shiogamashi",
            "hiragana" => "しおがまし",
            "katakana" => "シオガマシ",
            "katakana_half" => "ｼｵｶﾞﾏｼ",
        ]);

        City::create([
            "id" => 269,
            "prefecture_id" => 4,
            "name" => "気仙沼市",
            "romaji" => "kesennumashi",
            "hiragana" => "けせんぬまし",
            "katakana" => "ケセンヌマシ",
            "katakana_half" => "ｹｾﾝﾇﾏｼ",
        ]);

        City::create([
            "id" => 270,
            "prefecture_id" => 4,
            "name" => "白石市",
            "romaji" => "shiroishishi",
            "hiragana" => "しろいしし",
            "katakana" => "シロイシシ",
            "katakana_half" => "ｼﾛｲｼｼ",
        ]);

        City::create([
            "id" => 271,
            "prefecture_id" => 4,
            "name" => "名取市",
            "romaji" => "natorishi",
            "hiragana" => "なとりし",
            "katakana" => "ナトリシ",
            "katakana_half" => "ﾅﾄﾘｼ",
        ]);

        City::create([
            "id" => 272,
            "prefecture_id" => 4,
            "name" => "角田市",
            "romaji" => "kakudashi",
            "hiragana" => "かくだし",
            "katakana" => "カクダシ",
            "katakana_half" => "ｶｸﾀﾞｼ",
        ]);

        City::create([
            "id" => 273,
            "prefecture_id" => 4,
            "name" => "多賀城市",
            "romaji" => "tagajoushi",
            "hiragana" => "たがじょうし",
            "katakana" => "タガジョウシ",
            "katakana_half" => "ﾀｶﾞｼﾞｮｳｼ",
        ]);

        City::create([
            "id" => 274,
            "prefecture_id" => 4,
            "name" => "岩沼市",
            "romaji" => "iwanumashi",
            "hiragana" => "いわぬまし",
            "katakana" => "イワヌマシ",
            "katakana_half" => "ｲﾜﾇﾏｼ",
        ]);

        City::create([
            "id" => 275,
            "prefecture_id" => 4,
            "name" => "登米市",
            "romaji" => "tomeshi",
            "hiragana" => "とめし",
            "katakana" => "トメシ",
            "katakana_half" => "ﾄﾒｼ",
        ]);

        City::create([
            "id" => 276,
            "prefecture_id" => 4,
            "name" => "栗原市",
            "romaji" => "kuriharashi",
            "hiragana" => "くりはらし",
            "katakana" => "クリハラシ",
            "katakana_half" => "ｸﾘﾊﾗｼ",
        ]);

        City::create([
            "id" => 277,
            "prefecture_id" => 4,
            "name" => "東松島市",
            "romaji" => "higashimatsushimashi",
            "hiragana" => "ひがしまつしまし",
            "katakana" => "ヒガシマツシマシ",
            "katakana_half" => "ﾋｶﾞｼﾏﾂｼﾏｼ",
        ]);

        City::create([
            "id" => 278,
            "prefecture_id" => 4,
            "name" => "大崎市",
            "romaji" => "oosakishi",
            "hiragana" => "おおさきし",
            "katakana" => "オオサキシ",
            "katakana_half" => "ｵｵｻｷｼ",
        ]);

        City::create([
            "id" => 279,
            "prefecture_id" => 4,
            "name" => "富谷市",
            "romaji" => "tomiyashi",
            "hiragana" => "とみやし",
            "katakana" => "トミヤシ",
            "katakana_half" => "ﾄﾐﾔｼ",
        ]);

        City::create([
            "id" => 280,
            "prefecture_id" => 4,
            "name" => "刈田郡蔵王町",
            "romaji" => "kattagunzaoumachi",
            "hiragana" => "かったぐんざおうまち",
            "katakana" => "カッタグンザオウマチ",
            "katakana_half" => "ｶｯﾀｸﾞﾝｻﾞｵｳﾏﾁ",
        ]);

        City::create([
            "id" => 281,
            "prefecture_id" => 4,
            "name" => "刈田郡七ヶ宿町",
            "romaji" => "kattagunshichikashukumachi",
            "hiragana" => "かったぐんしちかしゅくまち",
            "katakana" => "カッタグンシチカシュクマチ",
            "katakana_half" => "ｶｯﾀｸﾞﾝｼﾁｶｼｭｸﾏﾁ",
        ]);

        City::create([
            "id" => 282,
            "prefecture_id" => 4,
            "name" => "柴田郡大河原町",
            "romaji" => "shibatagunoogawaramachi",
            "hiragana" => "しばたぐんおおがわらまち",
            "katakana" => "シバタグンオオガワラマチ",
            "katakana_half" => "ｼﾊﾞﾀｸﾞﾝｵｵｶﾞﾜﾗﾏﾁ",
        ]);

        City::create([
            "id" => 283,
            "prefecture_id" => 4,
            "name" => "柴田郡村田町",
            "romaji" => "shibatagunmuratamachi",
            "hiragana" => "しばたぐんむらたまち",
            "katakana" => "シバタグンムラタマチ",
            "katakana_half" => "ｼﾊﾞﾀｸﾞﾝﾑﾗﾀﾏﾁ",
        ]);

        City::create([
            "id" => 284,
            "prefecture_id" => 4,
            "name" => "柴田郡柴田町",
            "romaji" => "shibatagunshibatamachi",
            "hiragana" => "しばたぐんしばたまち",
            "katakana" => "シバタグンシバタマチ",
            "katakana_half" => "ｼﾊﾞﾀｸﾞﾝｼﾊﾞﾀﾏﾁ",
        ]);

        City::create([
            "id" => 285,
            "prefecture_id" => 4,
            "name" => "柴田郡川崎町",
            "romaji" => "shibatagunkawasakimachi",
            "hiragana" => "しばたぐんかわさきまち",
            "katakana" => "シバタグンカワサキマチ",
            "katakana_half" => "ｼﾊﾞﾀｸﾞﾝｶﾜｻｷﾏﾁ",
        ]);

        City::create([
            "id" => 286,
            "prefecture_id" => 4,
            "name" => "伊具郡丸森町",
            "romaji" => "igugunmarumorimachi",
            "hiragana" => "いぐぐんまるもりまち",
            "katakana" => "イググンマルモリマチ",
            "katakana_half" => "ｲｸﾞｸﾞﾝﾏﾙﾓﾘﾏﾁ",
        ]);

        City::create([
            "id" => 287,
            "prefecture_id" => 4,
            "name" => "亘理郡亘理町",
            "romaji" => "watarigunwatarichou",
            "hiragana" => "わたりぐんわたりちょう",
            "katakana" => "ワタリグンワタリチョウ",
            "katakana_half" => "ﾜﾀﾘｸﾞﾝﾜﾀﾘﾁｮｳ",
        ]);

        City::create([
            "id" => 288,
            "prefecture_id" => 4,
            "name" => "亘理郡山元町",
            "romaji" => "watarigunyamamotochou",
            "hiragana" => "わたりぐんやまもとちょう",
            "katakana" => "ワタリグンヤマモトチョウ",
            "katakana_half" => "ﾜﾀﾘｸﾞﾝﾔﾏﾓﾄﾁｮｳ",
        ]);

        City::create([
            "id" => 289,
            "prefecture_id" => 4,
            "name" => "宮城郡松島町",
            "romaji" => "miyagigunmatsushimamachi",
            "hiragana" => "みやぎぐんまつしままち",
            "katakana" => "ミヤギグンマツシママチ",
            "katakana_half" => "ﾐﾔｷﾞｸﾞﾝﾏﾂｼﾏﾏﾁ",
        ]);

        City::create([
            "id" => 290,
            "prefecture_id" => 4,
            "name" => "宮城郡七ヶ浜町",
            "romaji" => "miyagigunshichigahamamachi",
            "hiragana" => "みやぎぐんしちがはままち",
            "katakana" => "ミヤギグンシチガハママチ",
            "katakana_half" => "ﾐﾔｷﾞｸﾞﾝｼﾁｶﾞﾊﾏﾏﾁ",
        ]);

        City::create([
            "id" => 291,
            "prefecture_id" => 4,
            "name" => "宮城郡利府町",
            "romaji" => "miyagigunrifuchou",
            "hiragana" => "みやぎぐんりふちょう",
            "katakana" => "ミヤギグンリフチョウ",
            "katakana_half" => "ﾐﾔｷﾞｸﾞﾝﾘﾌﾁｮｳ",
        ]);

        City::create([
            "id" => 292,
            "prefecture_id" => 4,
            "name" => "黒川郡大和町",
            "romaji" => "kurokawaguntaiwachou",
            "hiragana" => "くろかわぐんたいわちょう",
            "katakana" => "クロカワグンタイワチョウ",
            "katakana_half" => "ｸﾛｶﾜｸﾞﾝﾀｲﾜﾁｮｳ",
        ]);

        City::create([
            "id" => 293,
            "prefecture_id" => 4,
            "name" => "黒川郡大郷町",
            "romaji" => "kurokawagunoosatochou",
            "hiragana" => "くろかわぐんおおさとちょう",
            "katakana" => "クロカワグンオオサトチョウ",
            "katakana_half" => "ｸﾛｶﾜｸﾞﾝｵｵｻﾄﾁｮｳ",
        ]);

        City::create([
            "id" => 294,
            "prefecture_id" => 4,
            "name" => "黒川郡大衡村",
            "romaji" => "kurokawagunoohiramura",
            "hiragana" => "くろかわぐんおおひらむら",
            "katakana" => "クロカワグンオオヒラムラ",
            "katakana_half" => "ｸﾛｶﾜｸﾞﾝｵｵﾋﾗﾑﾗ",
        ]);

        City::create([
            "id" => 295,
            "prefecture_id" => 4,
            "name" => "加美郡色麻町",
            "romaji" => "kamigunshikamachou",
            "hiragana" => "かみぐんしかまちょう",
            "katakana" => "カミグンシカマチョウ",
            "katakana_half" => "ｶﾐｸﾞﾝｼｶﾏﾁｮｳ",
        ]);

        City::create([
            "id" => 296,
            "prefecture_id" => 4,
            "name" => "加美郡加美町",
            "romaji" => "kamigunkamimachi",
            "hiragana" => "かみぐんかみまち",
            "katakana" => "カミグンカミマチ",
            "katakana_half" => "ｶﾐｸﾞﾝｶﾐﾏﾁ",
        ]);

        City::create([
            "id" => 297,
            "prefecture_id" => 4,
            "name" => "遠田郡涌谷町",
            "romaji" => "toodagunwakuyachou",
            "hiragana" => "とおだぐんわくやちょう",
            "katakana" => "トオダグンワクヤチョウ",
            "katakana_half" => "ﾄｵﾀﾞｸﾞﾝﾜｸﾔﾁｮｳ",
        ]);

        City::create([
            "id" => 298,
            "prefecture_id" => 4,
            "name" => "遠田郡美里町",
            "romaji" => "toodagunmisatomachi",
            "hiragana" => "とおだぐんみさとまち",
            "katakana" => "トオダグンミサトマチ",
            "katakana_half" => "ﾄｵﾀﾞｸﾞﾝﾐｻﾄﾏﾁ",
        ]);

        City::create([
            "id" => 299,
            "prefecture_id" => 4,
            "name" => "牡鹿郡女川町",
            "romaji" => "oshikagunonagawachou",
            "hiragana" => "おしかぐんおながわちょう",
            "katakana" => "オシカグンオナガワチョウ",
            "katakana_half" => "ｵｼｶｸﾞﾝｵﾅｶﾞﾜﾁｮｳ",
        ]);

        City::create([
            "id" => 300,
            "prefecture_id" => 4,
            "name" => "本吉郡南三陸町",
            "romaji" => "motoyoshigunminamisanrikuchou",
            "hiragana" => "もとよしぐんみなみさんりくちょう",
            "katakana" => "モトヨシグンミナミサンリクチョウ",
            "katakana_half" => "ﾓﾄﾖｼｸﾞﾝﾐﾅﾐｻﾝﾘｸﾁｮｳ",
        ]);

        City::create([
            "id" => 301,
            "prefecture_id" => 5,
            "name" => "秋田市",
            "romaji" => "akitashi",
            "hiragana" => "あきたし",
            "katakana" => "アキタシ",
            "katakana_half" => "ｱｷﾀｼ",
        ]);

        City::create([
            "id" => 302,
            "prefecture_id" => 5,
            "name" => "能代市",
            "romaji" => "noshiroshi",
            "hiragana" => "のしろし",
            "katakana" => "ノシロシ",
            "katakana_half" => "ﾉｼﾛｼ",
        ]);

        City::create([
            "id" => 303,
            "prefecture_id" => 5,
            "name" => "横手市",
            "romaji" => "yokoteshi",
            "hiragana" => "よこてし",
            "katakana" => "ヨコテシ",
            "katakana_half" => "ﾖｺﾃｼ",
        ]);

        City::create([
            "id" => 304,
            "prefecture_id" => 5,
            "name" => "大館市",
            "romaji" => "oodateshi",
            "hiragana" => "おおだてし",
            "katakana" => "オオダテシ",
            "katakana_half" => "ｵｵﾀﾞﾃｼ",
        ]);

        City::create([
            "id" => 305,
            "prefecture_id" => 5,
            "name" => "男鹿市",
            "romaji" => "ogashi",
            "hiragana" => "おがし",
            "katakana" => "オガシ",
            "katakana_half" => "ｵｶﾞｼ",
        ]);

        City::create([
            "id" => 306,
            "prefecture_id" => 5,
            "name" => "湯沢市",
            "romaji" => "yuzawashi",
            "hiragana" => "ゆざわし",
            "katakana" => "ユザワシ",
            "katakana_half" => "ﾕｻﾞﾜｼ",
        ]);

        City::create([
            "id" => 307,
            "prefecture_id" => 5,
            "name" => "鹿角市",
            "romaji" => "kazunoshi",
            "hiragana" => "かづのし",
            "katakana" => "カヅノシ",
            "katakana_half" => "ｶﾂﾞﾉｼ",
        ]);

        City::create([
            "id" => 308,
            "prefecture_id" => 5,
            "name" => "由利本荘市",
            "romaji" => "yurihonjoushi",
            "hiragana" => "ゆりほんじょうし",
            "katakana" => "ユリホンジョウシ",
            "katakana_half" => "ﾕﾘﾎﾝｼﾞｮｳｼ",
        ]);

        City::create([
            "id" => 309,
            "prefecture_id" => 5,
            "name" => "潟上市",
            "romaji" => "katagamishi",
            "hiragana" => "かたがみし",
            "katakana" => "カタガミシ",
            "katakana_half" => "ｶﾀｶﾞﾐｼ",
        ]);

        City::create([
            "id" => 310,
            "prefecture_id" => 5,
            "name" => "大仙市",
            "romaji" => "daisenshi",
            "hiragana" => "だいせんし",
            "katakana" => "ダイセンシ",
            "katakana_half" => "ﾀﾞｲｾﾝｼ",
        ]);

        City::create([
            "id" => 311,
            "prefecture_id" => 5,
            "name" => "北秋田市",
            "romaji" => "kitaakitashi",
            "hiragana" => "きたあきたし",
            "katakana" => "キタアキタシ",
            "katakana_half" => "ｷﾀｱｷﾀｼ",
        ]);

        City::create([
            "id" => 312,
            "prefecture_id" => 5,
            "name" => "にかほ市",
            "romaji" => "nikahoshi",
            "hiragana" => "にかほし",
            "katakana" => "ニカホシ",
            "katakana_half" => "ﾆｶﾎｼ",
        ]);

        City::create([
            "id" => 313,
            "prefecture_id" => 5,
            "name" => "仙北市",
            "romaji" => "senbokushi",
            "hiragana" => "せんぼくし",
            "katakana" => "センボクシ",
            "katakana_half" => "ｾﾝﾎﾞｸｼ",
        ]);

        City::create([
            "id" => 314,
            "prefecture_id" => 5,
            "name" => "鹿角郡小坂町",
            "romaji" => "kazunogunkosakamachi",
            "hiragana" => "かづのぐんこさかまち",
            "katakana" => "カヅノグンコサカマチ",
            "katakana_half" => "ｶﾂﾞﾉｸﾞﾝｺｻｶﾏﾁ",
        ]);

        City::create([
            "id" => 315,
            "prefecture_id" => 5,
            "name" => "北秋田郡上小阿仁村",
            "romaji" => "kitaakitagunkamikoanimura",
            "hiragana" => "きたあきたぐんかみこあにむら",
            "katakana" => "キタアキタグンカミコアニムラ",
            "katakana_half" => "ｷﾀｱｷﾀｸﾞﾝｶﾐｺｱﾆﾑﾗ",
        ]);

        City::create([
            "id" => 316,
            "prefecture_id" => 5,
            "name" => "山本郡藤里町",
            "romaji" => "yamamotogunfujisatomachi",
            "hiragana" => "やまもとぐんふじさとまち",
            "katakana" => "ヤマモトグンフジサトマチ",
            "katakana_half" => "ﾔﾏﾓﾄｸﾞﾝﾌｼﾞｻﾄﾏﾁ",
        ]);

        City::create([
            "id" => 317,
            "prefecture_id" => 5,
            "name" => "山本郡三種町",
            "romaji" => "yamamotogunmitanechou",
            "hiragana" => "やまもとぐんみたねちょう",
            "katakana" => "ヤマモトグンミタネチョウ",
            "katakana_half" => "ﾔﾏﾓﾄｸﾞﾝﾐﾀﾈﾁｮｳ",
        ]);

        City::create([
            "id" => 318,
            "prefecture_id" => 5,
            "name" => "山本郡八峰町",
            "romaji" => "yamamotogunhappouchou",
            "hiragana" => "やまもとぐんはっぽうちょう",
            "katakana" => "ヤマモトグンハッポウチョウ",
            "katakana_half" => "ﾔﾏﾓﾄｸﾞﾝﾊｯﾎﾟｳﾁｮｳ",
        ]);

        City::create([
            "id" => 319,
            "prefecture_id" => 5,
            "name" => "南秋田郡五城目町",
            "romaji" => "minamiakitagungojoumemachi",
            "hiragana" => "みなみあきたぐんごじょうめまち",
            "katakana" => "ミナミアキタグンゴジョウメマチ",
            "katakana_half" => "ﾐﾅﾐｱｷﾀｸﾞﾝｺﾞｼﾞｮｳﾒﾏﾁ",
        ]);

        City::create([
            "id" => 320,
            "prefecture_id" => 5,
            "name" => "南秋田郡八郎潟町",
            "romaji" => "minamiakitagunhachirougatamachi",
            "hiragana" => "みなみあきたぐんはちろうがたまち",
            "katakana" => "ミナミアキタグンハチロウガタマチ",
            "katakana_half" => "ﾐﾅﾐｱｷﾀｸﾞﾝﾊﾁﾛｳｶﾞﾀﾏﾁ",
        ]);

        City::create([
            "id" => 321,
            "prefecture_id" => 5,
            "name" => "南秋田郡井川町",
            "romaji" => "minamiakitagunikawamachi",
            "hiragana" => "みなみあきたぐんいかわまち",
            "katakana" => "ミナミアキタグンイカワマチ",
            "katakana_half" => "ﾐﾅﾐｱｷﾀｸﾞﾝｲｶﾜﾏﾁ",
        ]);

        City::create([
            "id" => 322,
            "prefecture_id" => 5,
            "name" => "南秋田郡大潟村",
            "romaji" => "minamiakitagunoogatamura",
            "hiragana" => "みなみあきたぐんおおがたむら",
            "katakana" => "ミナミアキタグンオオガタムラ",
            "katakana_half" => "ﾐﾅﾐｱｷﾀｸﾞﾝｵｵｶﾞﾀﾑﾗ",
        ]);

        City::create([
            "id" => 323,
            "prefecture_id" => 5,
            "name" => "仙北郡美郷町",
            "romaji" => "senbokugunmisatochou",
            "hiragana" => "せんぼくぐんみさとちょう",
            "katakana" => "センボクグンミサトチョウ",
            "katakana_half" => "ｾﾝﾎﾞｸｸﾞﾝﾐｻﾄﾁｮｳ",
        ]);

        City::create([
            "id" => 324,
            "prefecture_id" => 5,
            "name" => "雄勝郡羽後町",
            "romaji" => "ogachigunugomachi",
            "hiragana" => "おがちぐんうごまち",
            "katakana" => "オガチグンウゴマチ",
            "katakana_half" => "ｵｶﾞﾁｸﾞﾝｳｺﾞﾏﾁ",
        ]);

        City::create([
            "id" => 325,
            "prefecture_id" => 5,
            "name" => "雄勝郡東成瀬村",
            "romaji" => "ogachigunhigashinarusemura",
            "hiragana" => "おがちぐんひがしなるせむら",
            "katakana" => "オガチグンヒガシナルセムラ",
            "katakana_half" => "ｵｶﾞﾁｸﾞﾝﾋｶﾞｼﾅﾙｾﾑﾗ",
        ]);

        City::create([
            "id" => 326,
            "prefecture_id" => 6,
            "name" => "山形市",
            "romaji" => "yamagatashi",
            "hiragana" => "やまがたし",
            "katakana" => "ヤマガタシ",
            "katakana_half" => "ﾔﾏｶﾞﾀｼ",
        ]);

        City::create([
            "id" => 327,
            "prefecture_id" => 6,
            "name" => "米沢市",
            "romaji" => "yonezawashi",
            "hiragana" => "よねざわし",
            "katakana" => "ヨネザワシ",
            "katakana_half" => "ﾖﾈｻﾞﾜｼ",
        ]);

        City::create([
            "id" => 328,
            "prefecture_id" => 6,
            "name" => "鶴岡市",
            "romaji" => "tsuruokashi",
            "hiragana" => "つるおかし",
            "katakana" => "ツルオカシ",
            "katakana_half" => "ﾂﾙｵｶｼ",
        ]);

        City::create([
            "id" => 329,
            "prefecture_id" => 6,
            "name" => "酒田市",
            "romaji" => "sakatashi",
            "hiragana" => "さかたし",
            "katakana" => "サカタシ",
            "katakana_half" => "ｻｶﾀｼ",
        ]);

        City::create([
            "id" => 330,
            "prefecture_id" => 6,
            "name" => "新庄市",
            "romaji" => "shinjoushi",
            "hiragana" => "しんじょうし",
            "katakana" => "シンジョウシ",
            "katakana_half" => "ｼﾝｼﾞｮｳｼ",
        ]);

        City::create([
            "id" => 331,
            "prefecture_id" => 6,
            "name" => "寒河江市",
            "romaji" => "sagaeshi",
            "hiragana" => "さがえし",
            "katakana" => "サガエシ",
            "katakana_half" => "ｻｶﾞｴｼ",
        ]);

        City::create([
            "id" => 332,
            "prefecture_id" => 6,
            "name" => "上山市",
            "romaji" => "kaminoyamashi",
            "hiragana" => "かみのやまし",
            "katakana" => "カミノヤマシ",
            "katakana_half" => "ｶﾐﾉﾔﾏｼ",
        ]);

        City::create([
            "id" => 333,
            "prefecture_id" => 6,
            "name" => "村山市",
            "romaji" => "murayamashi",
            "hiragana" => "むらやまし",
            "katakana" => "ムラヤマシ",
            "katakana_half" => "ﾑﾗﾔﾏｼ",
        ]);

        City::create([
            "id" => 334,
            "prefecture_id" => 6,
            "name" => "長井市",
            "romaji" => "nagaishi",
            "hiragana" => "ながいし",
            "katakana" => "ナガイシ",
            "katakana_half" => "ﾅｶﾞｲｼ",
        ]);

        City::create([
            "id" => 335,
            "prefecture_id" => 6,
            "name" => "天童市",
            "romaji" => "tendoushi",
            "hiragana" => "てんどうし",
            "katakana" => "テンドウシ",
            "katakana_half" => "ﾃﾝﾄﾞｳｼ",
        ]);

        City::create([
            "id" => 336,
            "prefecture_id" => 6,
            "name" => "東根市",
            "romaji" => "higashineshi",
            "hiragana" => "ひがしねし",
            "katakana" => "ヒガシネシ",
            "katakana_half" => "ﾋｶﾞｼﾈｼ",
        ]);

        City::create([
            "id" => 337,
            "prefecture_id" => 6,
            "name" => "尾花沢市",
            "romaji" => "obanazawashi",
            "hiragana" => "おばなざわし",
            "katakana" => "オバナザワシ",
            "katakana_half" => "ｵﾊﾞﾅｻﾞﾜｼ",
        ]);

        City::create([
            "id" => 338,
            "prefecture_id" => 6,
            "name" => "南陽市",
            "romaji" => "nanyoushi",
            "hiragana" => "なんようし",
            "katakana" => "ナンヨウシ",
            "katakana_half" => "ﾅﾝﾖｳｼ",
        ]);

        City::create([
            "id" => 339,
            "prefecture_id" => 6,
            "name" => "東村山郡山辺町",
            "romaji" => "higashimurayamagunyamanobemachi",
            "hiragana" => "ひがしむらやまぐんやまのべまち",
            "katakana" => "ヒガシムラヤマグンヤマノベマチ",
            "katakana_half" => "ﾋｶﾞｼﾑﾗﾔﾏｸﾞﾝﾔﾏﾉﾍﾞﾏﾁ",
        ]);

        City::create([
            "id" => 340,
            "prefecture_id" => 6,
            "name" => "東村山郡中山町",
            "romaji" => "higashimurayamagunnakayamamachi",
            "hiragana" => "ひがしむらやまぐんなかやままち",
            "katakana" => "ヒガシムラヤマグンナカヤママチ",
            "katakana_half" => "ﾋｶﾞｼﾑﾗﾔﾏｸﾞﾝﾅｶﾔﾏﾏﾁ",
        ]);

        City::create([
            "id" => 341,
            "prefecture_id" => 6,
            "name" => "西村山郡河北町",
            "romaji" => "nishimurayamagunkahokuchou",
            "hiragana" => "にしむらやまぐんかほくちょう",
            "katakana" => "ニシムラヤマグンカホクチョウ",
            "katakana_half" => "ﾆｼﾑﾗﾔﾏｸﾞﾝｶﾎｸﾁｮｳ",
        ]);

        City::create([
            "id" => 342,
            "prefecture_id" => 6,
            "name" => "西村山郡西川町",
            "romaji" => "nishimurayamagunnishikawamachi",
            "hiragana" => "にしむらやまぐんにしかわまち",
            "katakana" => "ニシムラヤマグンニシカワマチ",
            "katakana_half" => "ﾆｼﾑﾗﾔﾏｸﾞﾝﾆｼｶﾜﾏﾁ",
        ]);

        City::create([
            "id" => 343,
            "prefecture_id" => 6,
            "name" => "西村山郡朝日町",
            "romaji" => "nishimurayamagunasahimachi",
            "hiragana" => "にしむらやまぐんあさひまち",
            "katakana" => "ニシムラヤマグンアサヒマチ",
            "katakana_half" => "ﾆｼﾑﾗﾔﾏｸﾞﾝｱｻﾋﾏﾁ",
        ]);

        City::create([
            "id" => 344,
            "prefecture_id" => 6,
            "name" => "西村山郡大江町",
            "romaji" => "nishimurayamagunooemachi",
            "hiragana" => "にしむらやまぐんおおえまち",
            "katakana" => "ニシムラヤマグンオオエマチ",
            "katakana_half" => "ﾆｼﾑﾗﾔﾏｸﾞﾝｵｵｴﾏﾁ",
        ]);

        City::create([
            "id" => 345,
            "prefecture_id" => 6,
            "name" => "北村山郡大石田町",
            "romaji" => "kitamurayamagunooishidamachi",
            "hiragana" => "きたむらやまぐんおおいしだまち",
            "katakana" => "キタムラヤマグンオオイシダマチ",
            "katakana_half" => "ｷﾀﾑﾗﾔﾏｸﾞﾝｵｵｲｼﾀﾞﾏﾁ",
        ]);

        City::create([
            "id" => 346,
            "prefecture_id" => 6,
            "name" => "最上郡金山町",
            "romaji" => "mogamigunkaneyamamachi",
            "hiragana" => "もがみぐんかねやままち",
            "katakana" => "モガミグンカネヤママチ",
            "katakana_half" => "ﾓｶﾞﾐｸﾞﾝｶﾈﾔﾏﾏﾁ",
        ]);

        City::create([
            "id" => 347,
            "prefecture_id" => 6,
            "name" => "最上郡最上町",
            "romaji" => "mogamigunmogamimachi",
            "hiragana" => "もがみぐんもがみまち",
            "katakana" => "モガミグンモガミマチ",
            "katakana_half" => "ﾓｶﾞﾐｸﾞﾝﾓｶﾞﾐﾏﾁ",
        ]);

        City::create([
            "id" => 348,
            "prefecture_id" => 6,
            "name" => "最上郡舟形町",
            "romaji" => "mogamigunfunagatamachi",
            "hiragana" => "もがみぐんふながたまち",
            "katakana" => "モガミグンフナガタマチ",
            "katakana_half" => "ﾓｶﾞﾐｸﾞﾝﾌﾅｶﾞﾀﾏﾁ",
        ]);

        City::create([
            "id" => 349,
            "prefecture_id" => 6,
            "name" => "最上郡真室川町",
            "romaji" => "mogamigunmamurogawamachi",
            "hiragana" => "もがみぐんまむろがわまち",
            "katakana" => "モガミグンマムロガワマチ",
            "katakana_half" => "ﾓｶﾞﾐｸﾞﾝﾏﾑﾛｶﾞﾜﾏﾁ",
        ]);

        City::create([
            "id" => 350,
            "prefecture_id" => 6,
            "name" => "最上郡大蔵村",
            "romaji" => "mogamigunookuramura",
            "hiragana" => "もがみぐんおおくらむら",
            "katakana" => "モガミグンオオクラムラ",
            "katakana_half" => "ﾓｶﾞﾐｸﾞﾝｵｵｸﾗﾑﾗ",
        ]);

        City::create([
            "id" => 351,
            "prefecture_id" => 6,
            "name" => "最上郡鮭川村",
            "romaji" => "mogamigunsakegawamura",
            "hiragana" => "もがみぐんさけがわむら",
            "katakana" => "モガミグンサケガワムラ",
            "katakana_half" => "ﾓｶﾞﾐｸﾞﾝｻｹｶﾞﾜﾑﾗ",
        ]);

        City::create([
            "id" => 352,
            "prefecture_id" => 6,
            "name" => "最上郡戸沢村",
            "romaji" => "mogamiguntozawamura",
            "hiragana" => "もがみぐんとざわむら",
            "katakana" => "モガミグントザワムラ",
            "katakana_half" => "ﾓｶﾞﾐｸﾞﾝﾄｻﾞﾜﾑﾗ",
        ]);

        City::create([
            "id" => 353,
            "prefecture_id" => 6,
            "name" => "東置賜郡高畠町",
            "romaji" => "higashiokitamaguntakahatamachi",
            "hiragana" => "ひがしおきたまぐんたかはたまち",
            "katakana" => "ヒガシオキタマグンタカハタマチ",
            "katakana_half" => "ﾋｶﾞｼｵｷﾀﾏｸﾞﾝﾀｶﾊﾀﾏﾁ",
        ]);

        City::create([
            "id" => 354,
            "prefecture_id" => 6,
            "name" => "東置賜郡川西町",
            "romaji" => "higashiokitamagunkawanishimachi",
            "hiragana" => "ひがしおきたまぐんかわにしまち",
            "katakana" => "ヒガシオキタマグンカワニシマチ",
            "katakana_half" => "ﾋｶﾞｼｵｷﾀﾏｸﾞﾝｶﾜﾆｼﾏﾁ",
        ]);

        City::create([
            "id" => 355,
            "prefecture_id" => 6,
            "name" => "西置賜郡小国町",
            "romaji" => "nishiokitamagunogunimachi",
            "hiragana" => "にしおきたまぐんおぐにまち",
            "katakana" => "ニシオキタマグンオグニマチ",
            "katakana_half" => "ﾆｼｵｷﾀﾏｸﾞﾝｵｸﾞﾆﾏﾁ",
        ]);

        City::create([
            "id" => 356,
            "prefecture_id" => 6,
            "name" => "西置賜郡白鷹町",
            "romaji" => "nishiokitamagunshiratakamachi",
            "hiragana" => "にしおきたまぐんしらたかまち",
            "katakana" => "ニシオキタマグンシラタカマチ",
            "katakana_half" => "ﾆｼｵｷﾀﾏｸﾞﾝｼﾗﾀｶﾏﾁ",
        ]);

        City::create([
            "id" => 357,
            "prefecture_id" => 6,
            "name" => "西置賜郡飯豊町",
            "romaji" => "nishiokitamaguniidemachi",
            "hiragana" => "にしおきたまぐんいいでまち",
            "katakana" => "ニシオキタマグンイイデマチ",
            "katakana_half" => "ﾆｼｵｷﾀﾏｸﾞﾝｲｲﾃﾞﾏﾁ",
        ]);

        City::create([
            "id" => 358,
            "prefecture_id" => 6,
            "name" => "東田川郡三川町",
            "romaji" => "higashitagawagunmikawamachi",
            "hiragana" => "ひがしたがわぐんみかわまち",
            "katakana" => "ヒガシタガワグンミカワマチ",
            "katakana_half" => "ﾋｶﾞｼﾀｶﾞﾜｸﾞﾝﾐｶﾜﾏﾁ",
        ]);

        City::create([
            "id" => 359,
            "prefecture_id" => 6,
            "name" => "東田川郡庄内町",
            "romaji" => "higashitagawagunshounaimachi",
            "hiragana" => "ひがしたがわぐんしょうないまち",
            "katakana" => "ヒガシタガワグンショウナイマチ",
            "katakana_half" => "ﾋｶﾞｼﾀｶﾞﾜｸﾞﾝｼｮｳﾅｲﾏﾁ",
        ]);

        City::create([
            "id" => 360,
            "prefecture_id" => 6,
            "name" => "飽海郡遊佐町",
            "romaji" => "akumigunyuzamachi",
            "hiragana" => "あくみぐんゆざまち",
            "katakana" => "アクミグンユザマチ",
            "katakana_half" => "ｱｸﾐｸﾞﾝﾕｻﾞﾏﾁ",
        ]);

        City::create([
            "id" => 361,
            "prefecture_id" => 7,
            "name" => "福島市",
            "romaji" => "fukushimashi",
            "hiragana" => "ふくしまし",
            "katakana" => "フクシマシ",
            "katakana_half" => "ﾌｸｼﾏｼ",
        ]);

        City::create([
            "id" => 362,
            "prefecture_id" => 7,
            "name" => "会津若松市",
            "romaji" => "aizuwakamatsushi",
            "hiragana" => "あいづわかまつし",
            "katakana" => "アイヅワカマツシ",
            "katakana_half" => "ｱｲﾂﾞﾜｶﾏﾂｼ",
        ]);

        City::create([
            "id" => 363,
            "prefecture_id" => 7,
            "name" => "郡山市",
            "romaji" => "kooriyamashi",
            "hiragana" => "こおりやまし",
            "katakana" => "コオリヤマシ",
            "katakana_half" => "ｺｵﾘﾔﾏｼ",
        ]);

        City::create([
            "id" => 364,
            "prefecture_id" => 7,
            "name" => "いわき市",
            "romaji" => "iwakishi",
            "hiragana" => "いわきし",
            "katakana" => "イワキシ",
            "katakana_half" => "ｲﾜｷｼ",
        ]);

        City::create([
            "id" => 365,
            "prefecture_id" => 7,
            "name" => "白河市",
            "romaji" => "shirakawashi",
            "hiragana" => "しらかわし",
            "katakana" => "シラカワシ",
            "katakana_half" => "ｼﾗｶﾜｼ",
        ]);

        City::create([
            "id" => 366,
            "prefecture_id" => 7,
            "name" => "須賀川市",
            "romaji" => "sukagawashi",
            "hiragana" => "すかがわし",
            "katakana" => "スカガワシ",
            "katakana_half" => "ｽｶｶﾞﾜｼ",
        ]);

        City::create([
            "id" => 367,
            "prefecture_id" => 7,
            "name" => "喜多方市",
            "romaji" => "kitakatashi",
            "hiragana" => "きたかたし",
            "katakana" => "キタカタシ",
            "katakana_half" => "ｷﾀｶﾀｼ",
        ]);

        City::create([
            "id" => 368,
            "prefecture_id" => 7,
            "name" => "相馬市",
            "romaji" => "soumashi",
            "hiragana" => "そうまし",
            "katakana" => "ソウマシ",
            "katakana_half" => "ｿｳﾏｼ",
        ]);

        City::create([
            "id" => 369,
            "prefecture_id" => 7,
            "name" => "二本松市",
            "romaji" => "nihonmatsushi",
            "hiragana" => "にほんまつし",
            "katakana" => "ニホンマツシ",
            "katakana_half" => "ﾆﾎﾝﾏﾂｼ",
        ]);

        City::create([
            "id" => 370,
            "prefecture_id" => 7,
            "name" => "田村市",
            "romaji" => "tamurashi",
            "hiragana" => "たむらし",
            "katakana" => "タムラシ",
            "katakana_half" => "ﾀﾑﾗｼ",
        ]);

        City::create([
            "id" => 371,
            "prefecture_id" => 7,
            "name" => "南相馬市",
            "romaji" => "minamisoumashi",
            "hiragana" => "みなみそうまし",
            "katakana" => "ミナミソウマシ",
            "katakana_half" => "ﾐﾅﾐｿｳﾏｼ",
        ]);

        City::create([
            "id" => 372,
            "prefecture_id" => 7,
            "name" => "本宮市",
            "romaji" => "motomiyashi",
            "hiragana" => "もとみやし",
            "katakana" => "モトミヤシ",
            "katakana_half" => "ﾓﾄﾐﾔｼ",
        ]);

        City::create([
            "id" => 373,
            "prefecture_id" => 7,
            "name" => "伊達郡桑折町",
            "romaji" => "dategunkoorimachi",
            "hiragana" => "だてぐんこおりまち",
            "katakana" => "ダテグンコオリマチ",
            "katakana_half" => "ﾀﾞﾃｸﾞﾝｺｵﾘﾏﾁ",
        ]);

        City::create([
            "id" => 374,
            "prefecture_id" => 7,
            "name" => "伊達郡国見町",
            "romaji" => "dategunkunimimachi",
            "hiragana" => "だてぐんくにみまち",
            "katakana" => "ダテグンクニミマチ",
            "katakana_half" => "ﾀﾞﾃｸﾞﾝｸﾆﾐﾏﾁ",
        ]);

        City::create([
            "id" => 375,
            "prefecture_id" => 7,
            "name" => "伊達郡川俣町",
            "romaji" => "dategunkawamatamachi",
            "hiragana" => "だてぐんかわまたまち",
            "katakana" => "ダテグンカワマタマチ",
            "katakana_half" => "ﾀﾞﾃｸﾞﾝｶﾜﾏﾀﾏﾁ",
        ]);

        City::create([
            "id" => 376,
            "prefecture_id" => 7,
            "name" => "安達郡大玉村",
            "romaji" => "adachigunootamamura",
            "hiragana" => "あだちぐんおおたまむら",
            "katakana" => "アダチグンオオタマムラ",
            "katakana_half" => "ｱﾀﾞﾁｸﾞﾝｵｵﾀﾏﾑﾗ",
        ]);

        City::create([
            "id" => 377,
            "prefecture_id" => 7,
            "name" => "岩瀬郡鏡石町",
            "romaji" => "iwasegunkagamiishimachi",
            "hiragana" => "いわせぐんかがみいしまち",
            "katakana" => "イワセグンカガミイシマチ",
            "katakana_half" => "ｲﾜｾｸﾞﾝｶｶﾞﾐｲｼﾏﾁ",
        ]);

        City::create([
            "id" => 378,
            "prefecture_id" => 7,
            "name" => "岩瀬郡天栄村",
            "romaji" => "iwasegunteneimura",
            "hiragana" => "いわせぐんてんえいむら",
            "katakana" => "イワセグンテンエイムラ",
            "katakana_half" => "ｲﾜｾｸﾞﾝﾃﾝｴｲﾑﾗ",
        ]);

        City::create([
            "id" => 379,
            "prefecture_id" => 7,
            "name" => "南会津郡下郷町",
            "romaji" => "minamiaizugunshimogoumachi",
            "hiragana" => "みなみあいづぐんしもごうまち",
            "katakana" => "ミナミアイヅグンシモゴウマチ",
            "katakana_half" => "ﾐﾅﾐｱｲﾂﾞｸﾞﾝｼﾓｺﾞｳﾏﾁ",
        ]);

        City::create([
            "id" => 380,
            "prefecture_id" => 7,
            "name" => "南会津郡檜枝岐村",
            "romaji" => "minamiaizugunhinoematamura",
            "hiragana" => "みなみあいづぐんひのえまたむら",
            "katakana" => "ミナミアイヅグンヒノエマタムラ",
            "katakana_half" => "ﾐﾅﾐｱｲﾂﾞｸﾞﾝﾋﾉｴﾏﾀﾑﾗ",
        ]);

        City::create([
            "id" => 381,
            "prefecture_id" => 7,
            "name" => "南会津郡只見町",
            "romaji" => "minamiaizuguntadamimachi",
            "hiragana" => "みなみあいづぐんただみまち",
            "katakana" => "ミナミアイヅグンタダミマチ",
            "katakana_half" => "ﾐﾅﾐｱｲﾂﾞｸﾞﾝﾀﾀﾞﾐﾏﾁ",
        ]);

        City::create([
            "id" => 382,
            "prefecture_id" => 7,
            "name" => "南会津郡南会津町",
            "romaji" => "minamiaizugunminamiaizumachi",
            "hiragana" => "みなみあいづぐんみなみあいづまち",
            "katakana" => "ミナミアイヅグンミナミアイヅマチ",
            "katakana_half" => "ﾐﾅﾐｱｲﾂﾞｸﾞﾝﾐﾅﾐｱｲﾂﾞﾏﾁ",
        ]);

        City::create([
            "id" => 383,
            "prefecture_id" => 7,
            "name" => "耶麻郡北塩原村",
            "romaji" => "yamagunkitashiobaramura",
            "hiragana" => "やまぐんきたしおばらむら",
            "katakana" => "ヤマグンキタシオバラムラ",
            "katakana_half" => "ﾔﾏｸﾞﾝｷﾀｼｵﾊﾞﾗﾑﾗ",
        ]);

        City::create([
            "id" => 384,
            "prefecture_id" => 7,
            "name" => "耶麻郡西会津町",
            "romaji" => "yamagunnishiaizumachi",
            "hiragana" => "やまぐんにしあいづまち",
            "katakana" => "ヤマグンニシアイヅマチ",
            "katakana_half" => "ﾔﾏｸﾞﾝﾆｼｱｲﾂﾞﾏﾁ",
        ]);

        City::create([
            "id" => 385,
            "prefecture_id" => 7,
            "name" => "耶麻郡磐梯町",
            "romaji" => "yamagunbandaimachi",
            "hiragana" => "やまぐんばんだいまち",
            "katakana" => "ヤマグンバンダイマチ",
            "katakana_half" => "ﾔﾏｸﾞﾝﾊﾞﾝﾀﾞｲﾏﾁ",
        ]);

        City::create([
            "id" => 386,
            "prefecture_id" => 7,
            "name" => "耶麻郡猪苗代町",
            "romaji" => "yamaguninawashiromachi",
            "hiragana" => "やまぐんいなわしろまち",
            "katakana" => "ヤマグンイナワシロマチ",
            "katakana_half" => "ﾔﾏｸﾞﾝｲﾅﾜｼﾛﾏﾁ",
        ]);

        City::create([
            "id" => 387,
            "prefecture_id" => 7,
            "name" => "河沼郡会津坂下町",
            "romaji" => "kawanumagunaizubangemachi",
            "hiragana" => "かわぬまぐんあいづばんげまち",
            "katakana" => "カワヌマグンアイヅバンゲマチ",
            "katakana_half" => "ｶﾜﾇﾏｸﾞﾝｱｲﾂﾞﾊﾞﾝｹﾞﾏﾁ",
        ]);

        City::create([
            "id" => 388,
            "prefecture_id" => 7,
            "name" => "河沼郡湯川村",
            "romaji" => "kawanumagunyugawamura",
            "hiragana" => "かわぬまぐんゆがわむら",
            "katakana" => "カワヌマグンユガワムラ",
            "katakana_half" => "ｶﾜﾇﾏｸﾞﾝﾕｶﾞﾜﾑﾗ",
        ]);

        City::create([
            "id" => 389,
            "prefecture_id" => 7,
            "name" => "河沼郡柳津町",
            "romaji" => "kawanumagunyanaizumachi",
            "hiragana" => "かわぬまぐんやないづまち",
            "katakana" => "カワヌマグンヤナイヅマチ",
            "katakana_half" => "ｶﾜﾇﾏｸﾞﾝﾔﾅｲﾂﾞﾏﾁ",
        ]);

        City::create([
            "id" => 390,
            "prefecture_id" => 7,
            "name" => "大沼郡三島町",
            "romaji" => "oonumagunmishimamachi",
            "hiragana" => "おおぬまぐんみしままち",
            "katakana" => "オオヌマグンミシママチ",
            "katakana_half" => "ｵｵﾇﾏｸﾞﾝﾐｼﾏﾏﾁ",
        ]);

        City::create([
            "id" => 391,
            "prefecture_id" => 7,
            "name" => "大沼郡金山町",
            "romaji" => "oonumagunkaneyamamachi",
            "hiragana" => "おおぬまぐんかねやままち",
            "katakana" => "オオヌマグンカネヤママチ",
            "katakana_half" => "ｵｵﾇﾏｸﾞﾝｶﾈﾔﾏﾏﾁ",
        ]);

        City::create([
            "id" => 392,
            "prefecture_id" => 7,
            "name" => "大沼郡昭和村",
            "romaji" => "oonumagunshouwamura",
            "hiragana" => "おおぬまぐんしょうわむら",
            "katakana" => "オオヌマグンショウワムラ",
            "katakana_half" => "ｵｵﾇﾏｸﾞﾝｼｮｳﾜﾑﾗ",
        ]);

        City::create([
            "id" => 393,
            "prefecture_id" => 7,
            "name" => "大沼郡会津美里町",
            "romaji" => "oonumagunaizumisatomachi",
            "hiragana" => "おおぬまぐんあいづみさとまち",
            "katakana" => "オオヌマグンアイヅミサトマチ",
            "katakana_half" => "ｵｵﾇﾏｸﾞﾝｱｲﾂﾞﾐｻﾄﾏﾁ",
        ]);

        City::create([
            "id" => 394,
            "prefecture_id" => 7,
            "name" => "西白河郡西郷村",
            "romaji" => "nishishirakawagunnishigoumura",
            "hiragana" => "にししらかわぐんにしごうむら",
            "katakana" => "ニシシラカワグンニシゴウムラ",
            "katakana_half" => "ﾆｼｼﾗｶﾜｸﾞﾝﾆｼｺﾞｳﾑﾗ",
        ]);

        City::create([
            "id" => 395,
            "prefecture_id" => 7,
            "name" => "西白河郡泉崎村",
            "romaji" => "nishishirakawagunizumizakimura",
            "hiragana" => "にししらかわぐんいずみざきむら",
            "katakana" => "ニシシラカワグンイズミザキムラ",
            "katakana_half" => "ﾆｼｼﾗｶﾜｸﾞﾝｲｽﾞﾐｻﾞｷﾑﾗ",
        ]);

        City::create([
            "id" => 396,
            "prefecture_id" => 7,
            "name" => "西白河郡中島村",
            "romaji" => "nishishirakawagunnakajimamura",
            "hiragana" => "にししらかわぐんなかじまむら",
            "katakana" => "ニシシラカワグンナカジマムラ",
            "katakana_half" => "ﾆｼｼﾗｶﾜｸﾞﾝﾅｶｼﾞﾏﾑﾗ",
        ]);

        City::create([
            "id" => 397,
            "prefecture_id" => 7,
            "name" => "西白河郡矢吹町",
            "romaji" => "nishishirakawagunyabukimachi",
            "hiragana" => "にししらかわぐんやぶきまち",
            "katakana" => "ニシシラカワグンヤブキマチ",
            "katakana_half" => "ﾆｼｼﾗｶﾜｸﾞﾝﾔﾌﾞｷﾏﾁ",
        ]);

        City::create([
            "id" => 398,
            "prefecture_id" => 7,
            "name" => "東白川郡棚倉町",
            "romaji" => "higashishirakawaguntanaguramachi",
            "hiragana" => "ひがししらかわぐんたなぐらまち",
            "katakana" => "ヒガシシラカワグンタナグラマチ",
            "katakana_half" => "ﾋｶﾞｼｼﾗｶﾜｸﾞﾝﾀﾅｸﾞﾗﾏﾁ",
        ]);

        City::create([
            "id" => 399,
            "prefecture_id" => 7,
            "name" => "東白川郡矢祭町",
            "romaji" => "higashishirakawagunyamatsurimachi",
            "hiragana" => "ひがししらかわぐんやまつりまち",
            "katakana" => "ヒガシシラカワグンヤマツリマチ",
            "katakana_half" => "ﾋｶﾞｼｼﾗｶﾜｸﾞﾝﾔﾏﾂﾘﾏﾁ",
        ]);

        City::create([
            "id" => 400,
            "prefecture_id" => 7,
            "name" => "東白川郡塙町",
            "romaji" => "higashishirakawagunhanawamachi",
            "hiragana" => "ひがししらかわぐんはなわまち",
            "katakana" => "ヒガシシラカワグンハナワマチ",
            "katakana_half" => "ﾋｶﾞｼｼﾗｶﾜｸﾞﾝﾊﾅﾜﾏﾁ",
        ]);

        City::create([
            "id" => 401,
            "prefecture_id" => 7,
            "name" => "東白川郡鮫川村",
            "romaji" => "higashishirakawagunsamegawamura",
            "hiragana" => "ひがししらかわぐんさめがわむら",
            "katakana" => "ヒガシシラカワグンサメガワムラ",
            "katakana_half" => "ﾋｶﾞｼｼﾗｶﾜｸﾞﾝｻﾒｶﾞﾜﾑﾗ",
        ]);

        City::create([
            "id" => 402,
            "prefecture_id" => 7,
            "name" => "石川郡石川町",
            "romaji" => "ishikawagunishikawamachi",
            "hiragana" => "いしかわぐんいしかわまち",
            "katakana" => "イシカワグンイシカワマチ",
            "katakana_half" => "ｲｼｶﾜｸﾞﾝｲｼｶﾜﾏﾁ",
        ]);

        City::create([
            "id" => 403,
            "prefecture_id" => 7,
            "name" => "石川郡玉川村",
            "romaji" => "ishikawaguntamakawamura",
            "hiragana" => "いしかわぐんたまかわむら",
            "katakana" => "イシカワグンタマカワムラ",
            "katakana_half" => "ｲｼｶﾜｸﾞﾝﾀﾏｶﾜﾑﾗ",
        ]);

        City::create([
            "id" => 404,
            "prefecture_id" => 7,
            "name" => "石川郡平田村",
            "romaji" => "ishikawagunhiratamura",
            "hiragana" => "いしかわぐんひらたむら",
            "katakana" => "イシカワグンヒラタムラ",
            "katakana_half" => "ｲｼｶﾜｸﾞﾝﾋﾗﾀﾑﾗ",
        ]);

        City::create([
            "id" => 405,
            "prefecture_id" => 7,
            "name" => "石川郡浅川町",
            "romaji" => "ishikawagunasakawamachi",
            "hiragana" => "いしかわぐんあさかわまち",
            "katakana" => "イシカワグンアサカワマチ",
            "katakana_half" => "ｲｼｶﾜｸﾞﾝｱｻｶﾜﾏﾁ",
        ]);

        City::create([
            "id" => 406,
            "prefecture_id" => 7,
            "name" => "石川郡古殿町",
            "romaji" => "ishikawagunfurudonomachi",
            "hiragana" => "いしかわぐんふるどのまち",
            "katakana" => "イシカワグンフルドノマチ",
            "katakana_half" => "ｲｼｶﾜｸﾞﾝﾌﾙﾄﾞﾉﾏﾁ",
        ]);

        City::create([
            "id" => 407,
            "prefecture_id" => 7,
            "name" => "田村郡三春町",
            "romaji" => "tamuragunmiharumachi",
            "hiragana" => "たむらぐんみはるまち",
            "katakana" => "タムラグンミハルマチ",
            "katakana_half" => "ﾀﾑﾗｸﾞﾝﾐﾊﾙﾏﾁ",
        ]);

        City::create([
            "id" => 408,
            "prefecture_id" => 7,
            "name" => "田村郡小野町",
            "romaji" => "tamuragunonomachi",
            "hiragana" => "たむらぐんおのまち",
            "katakana" => "タムラグンオノマチ",
            "katakana_half" => "ﾀﾑﾗｸﾞﾝｵﾉﾏﾁ",
        ]);

        City::create([
            "id" => 409,
            "prefecture_id" => 7,
            "name" => "双葉郡広野町",
            "romaji" => "futabagunhironomachi",
            "hiragana" => "ふたばぐんひろのまち",
            "katakana" => "フタバグンヒロノマチ",
            "katakana_half" => "ﾌﾀﾊﾞｸﾞﾝﾋﾛﾉﾏﾁ",
        ]);

        City::create([
            "id" => 410,
            "prefecture_id" => 7,
            "name" => "双葉郡楢葉町",
            "romaji" => "futabagunnarahamachi",
            "hiragana" => "ふたばぐんならはまち",
            "katakana" => "フタバグンナラハマチ",
            "katakana_half" => "ﾌﾀﾊﾞｸﾞﾝﾅﾗﾊﾏﾁ",
        ]);

        City::create([
            "id" => 411,
            "prefecture_id" => 7,
            "name" => "双葉郡富岡町",
            "romaji" => "futabaguntomiokamachi",
            "hiragana" => "ふたばぐんとみおかまち",
            "katakana" => "フタバグントミオカマチ",
            "katakana_half" => "ﾌﾀﾊﾞｸﾞﾝﾄﾐｵｶﾏﾁ",
        ]);

        City::create([
            "id" => 412,
            "prefecture_id" => 7,
            "name" => "双葉郡川内村",
            "romaji" => "futabagunkawauchimura",
            "hiragana" => "ふたばぐんかわうちむら",
            "katakana" => "フタバグンカワウチムラ",
            "katakana_half" => "ﾌﾀﾊﾞｸﾞﾝｶﾜｳﾁﾑﾗ",
        ]);

        City::create([
            "id" => 413,
            "prefecture_id" => 7,
            "name" => "双葉郡大熊町",
            "romaji" => "futabagunookumamachi",
            "hiragana" => "ふたばぐんおおくままち",
            "katakana" => "フタバグンオオクママチ",
            "katakana_half" => "ﾌﾀﾊﾞｸﾞﾝｵｵｸﾏﾏﾁ",
        ]);

        City::create([
            "id" => 414,
            "prefecture_id" => 7,
            "name" => "双葉郡双葉町",
            "romaji" => "futabagunfutabamachi",
            "hiragana" => "ふたばぐんふたばまち",
            "katakana" => "フタバグンフタバマチ",
            "katakana_half" => "ﾌﾀﾊﾞｸﾞﾝﾌﾀﾊﾞﾏﾁ",
        ]);

        City::create([
            "id" => 415,
            "prefecture_id" => 7,
            "name" => "双葉郡浪江町",
            "romaji" => "futabagunnamiemachi",
            "hiragana" => "ふたばぐんなみえまち",
            "katakana" => "フタバグンナミエマチ",
            "katakana_half" => "ﾌﾀﾊﾞｸﾞﾝﾅﾐｴﾏﾁ",
        ]);

        City::create([
            "id" => 416,
            "prefecture_id" => 7,
            "name" => "双葉郡葛尾村",
            "romaji" => "futabagunkatsuraomura",
            "hiragana" => "ふたばぐんかつらおむら",
            "katakana" => "フタバグンカツラオムラ",
            "katakana_half" => "ﾌﾀﾊﾞｸﾞﾝｶﾂﾗｵﾑﾗ",
        ]);

        City::create([
            "id" => 417,
            "prefecture_id" => 7,
            "name" => "相馬郡新地町",
            "romaji" => "soumagunshinchimachi",
            "hiragana" => "そうまぐんしんちまち",
            "katakana" => "ソウマグンシンチマチ",
            "katakana_half" => "ｿｳﾏｸﾞﾝｼﾝﾁﾏﾁ",
        ]);

        City::create([
            "id" => 418,
            "prefecture_id" => 7,
            "name" => "相馬郡飯舘村",
            "romaji" => "soumaguniitatemura",
            "hiragana" => "そうまぐんいいたてむら",
            "katakana" => "ソウマグンイイタテムラ",
            "katakana_half" => "ｿｳﾏｸﾞﾝｲｲﾀﾃﾑﾗ",
        ]);

        City::create([
            "id" => 419,
            "prefecture_id" => 8,
            "name" => "水戸市",
            "romaji" => "mitoshi",
            "hiragana" => "みとし",
            "katakana" => "ミトシ",
            "katakana_half" => "ﾐﾄｼ",
        ]);

        City::create([
            "id" => 420,
            "prefecture_id" => 8,
            "name" => "日立市",
            "romaji" => "hitachishi",
            "hiragana" => "ひたちし",
            "katakana" => "ヒタチシ",
            "katakana_half" => "ﾋﾀﾁｼ",
        ]);

        City::create([
            "id" => 421,
            "prefecture_id" => 8,
            "name" => "土浦市",
            "romaji" => "tsuchiurashi",
            "hiragana" => "つちうらし",
            "katakana" => "ツチウラシ",
            "katakana_half" => "ﾂﾁｳﾗｼ",
        ]);

        City::create([
            "id" => 422,
            "prefecture_id" => 8,
            "name" => "古河市",
            "romaji" => "kogashi",
            "hiragana" => "こがし",
            "katakana" => "コガシ",
            "katakana_half" => "ｺｶﾞｼ",
        ]);

        City::create([
            "id" => 423,
            "prefecture_id" => 8,
            "name" => "石岡市",
            "romaji" => "ishiokashi",
            "hiragana" => "いしおかし",
            "katakana" => "イシオカシ",
            "katakana_half" => "ｲｼｵｶｼ",
        ]);

        City::create([
            "id" => 424,
            "prefecture_id" => 8,
            "name" => "結城市",
            "romaji" => "yuukishi",
            "hiragana" => "ゆうきし",
            "katakana" => "ユウキシ",
            "katakana_half" => "ﾕｳｷｼ",
        ]);

        City::create([
            "id" => 425,
            "prefecture_id" => 8,
            "name" => "龍ケ崎市",
            "romaji" => "ryuugasakishi",
            "hiragana" => "りゅうがさきし",
            "katakana" => "リュウガサキシ",
            "katakana_half" => "ﾘｭｳｶﾞｻｷｼ",
        ]);

        City::create([
            "id" => 426,
            "prefecture_id" => 8,
            "name" => "下妻市",
            "romaji" => "shimotsumashi",
            "hiragana" => "しもつまし",
            "katakana" => "シモツマシ",
            "katakana_half" => "ｼﾓﾂﾏｼ",
        ]);

        City::create([
            "id" => 427,
            "prefecture_id" => 8,
            "name" => "常総市",
            "romaji" => "jousoushi",
            "hiragana" => "じょうそうし",
            "katakana" => "ジョウソウシ",
            "katakana_half" => "ｼﾞｮｳｿｳｼ",
        ]);

        City::create([
            "id" => 428,
            "prefecture_id" => 8,
            "name" => "常陸太田市",
            "romaji" => "hitachiootashi",
            "hiragana" => "ひたちおおたし",
            "katakana" => "ヒタチオオタシ",
            "katakana_half" => "ﾋﾀﾁｵｵﾀｼ",
        ]);

        City::create([
            "id" => 429,
            "prefecture_id" => 8,
            "name" => "高萩市",
            "romaji" => "takahagishi",
            "hiragana" => "たかはぎし",
            "katakana" => "タカハギシ",
            "katakana_half" => "ﾀｶﾊｷﾞｼ",
        ]);

        City::create([
            "id" => 430,
            "prefecture_id" => 8,
            "name" => "北茨城市",
            "romaji" => "kitaibarakishi",
            "hiragana" => "きたいばらきし",
            "katakana" => "キタイバラキシ",
            "katakana_half" => "ｷﾀｲﾊﾞﾗｷｼ",
        ]);

        City::create([
            "id" => 431,
            "prefecture_id" => 8,
            "name" => "笠間市",
            "romaji" => "kasamashi",
            "hiragana" => "かさまし",
            "katakana" => "カサマシ",
            "katakana_half" => "ｶｻﾏｼ",
        ]);

        City::create([
            "id" => 432,
            "prefecture_id" => 8,
            "name" => "取手市",
            "romaji" => "torideshi",
            "hiragana" => "とりでし",
            "katakana" => "トリデシ",
            "katakana_half" => "ﾄﾘﾃﾞｼ",
        ]);

        City::create([
            "id" => 433,
            "prefecture_id" => 8,
            "name" => "牛久市",
            "romaji" => "ushikushi",
            "hiragana" => "うしくし",
            "katakana" => "ウシクシ",
            "katakana_half" => "ｳｼｸｼ",
        ]);

        City::create([
            "id" => 434,
            "prefecture_id" => 8,
            "name" => "つくば市",
            "romaji" => "tsukubashi",
            "hiragana" => "つくばし",
            "katakana" => "ツクバシ",
            "katakana_half" => "ﾂｸﾊﾞｼ",
        ]);

        City::create([
            "id" => 435,
            "prefecture_id" => 8,
            "name" => "ひたちなか市",
            "romaji" => "hitachinakashi",
            "hiragana" => "ひたちなかし",
            "katakana" => "ヒタチナカシ",
            "katakana_half" => "ﾋﾀﾁﾅｶｼ",
        ]);

        City::create([
            "id" => 436,
            "prefecture_id" => 8,
            "name" => "鹿嶋市",
            "romaji" => "kashimashi",
            "hiragana" => "かしまし",
            "katakana" => "カシマシ",
            "katakana_half" => "ｶｼﾏｼ",
        ]);

        City::create([
            "id" => 437,
            "prefecture_id" => 8,
            "name" => "潮来市",
            "romaji" => "itakoshi",
            "hiragana" => "いたこし",
            "katakana" => "イタコシ",
            "katakana_half" => "ｲﾀｺｼ",
        ]);

        City::create([
            "id" => 438,
            "prefecture_id" => 8,
            "name" => "守谷市",
            "romaji" => "moriyashi",
            "hiragana" => "もりやし",
            "katakana" => "モリヤシ",
            "katakana_half" => "ﾓﾘﾔｼ",
        ]);

        City::create([
            "id" => 439,
            "prefecture_id" => 8,
            "name" => "常陸大宮市",
            "romaji" => "hitachioomiyashi",
            "hiragana" => "ひたちおおみやし",
            "katakana" => "ヒタチオオミヤシ",
            "katakana_half" => "ﾋﾀﾁｵｵﾐﾔｼ",
        ]);

        City::create([
            "id" => 440,
            "prefecture_id" => 8,
            "name" => "那珂市",
            "romaji" => "nakashi",
            "hiragana" => "なかし",
            "katakana" => "ナカシ",
            "katakana_half" => "ﾅｶｼ",
        ]);

        City::create([
            "id" => 441,
            "prefecture_id" => 8,
            "name" => "筑西市",
            "romaji" => "chikuseishi",
            "hiragana" => "ちくせいし",
            "katakana" => "チクセイシ",
            "katakana_half" => "ﾁｸｾｲｼ",
        ]);

        City::create([
            "id" => 442,
            "prefecture_id" => 8,
            "name" => "坂東市",
            "romaji" => "bandoushi",
            "hiragana" => "ばんどうし",
            "katakana" => "バンドウシ",
            "katakana_half" => "ﾊﾞﾝﾄﾞｳｼ",
        ]);

        City::create([
            "id" => 443,
            "prefecture_id" => 8,
            "name" => "稲敷市",
            "romaji" => "inashikishi",
            "hiragana" => "いなしきし",
            "katakana" => "イナシキシ",
            "katakana_half" => "ｲﾅｼｷｼ",
        ]);

        City::create([
            "id" => 444,
            "prefecture_id" => 8,
            "name" => "かすみがうら市",
            "romaji" => "kasumigaurashi",
            "hiragana" => "かすみがうらし",
            "katakana" => "カスミガウラシ",
            "katakana_half" => "ｶｽﾐｶﾞｳﾗｼ",
        ]);

        City::create([
            "id" => 445,
            "prefecture_id" => 8,
            "name" => "桜川市",
            "romaji" => "sakuragawashi",
            "hiragana" => "さくらがわし",
            "katakana" => "サクラガワシ",
            "katakana_half" => "ｻｸﾗｶﾞﾜｼ",
        ]);

        City::create([
            "id" => 446,
            "prefecture_id" => 8,
            "name" => "神栖市",
            "romaji" => "kamisushi",
            "hiragana" => "かみすし",
            "katakana" => "カミスシ",
            "katakana_half" => "ｶﾐｽｼ",
        ]);

        City::create([
            "id" => 447,
            "prefecture_id" => 8,
            "name" => "行方市",
            "romaji" => "namegatashi",
            "hiragana" => "なめがたし",
            "katakana" => "ナメガタシ",
            "katakana_half" => "ﾅﾒｶﾞﾀｼ",
        ]);

        City::create([
            "id" => 448,
            "prefecture_id" => 8,
            "name" => "鉾田市",
            "romaji" => "hokotashi",
            "hiragana" => "ほこたし",
            "katakana" => "ホコタシ",
            "katakana_half" => "ﾎｺﾀｼ",
        ]);

        City::create([
            "id" => 449,
            "prefecture_id" => 8,
            "name" => "つくばみらい市",
            "romaji" => "tsukubamiraishi",
            "hiragana" => "つくばみらいし",
            "katakana" => "ツクバミライシ",
            "katakana_half" => "ﾂｸﾊﾞﾐﾗｲｼ",
        ]);

        City::create([
            "id" => 450,
            "prefecture_id" => 8,
            "name" => "小美玉市",
            "romaji" => "omitamashi",
            "hiragana" => "おみたまし",
            "katakana" => "オミタマシ",
            "katakana_half" => "ｵﾐﾀﾏｼ",
        ]);

        City::create([
            "id" => 451,
            "prefecture_id" => 8,
            "name" => "東茨城郡茨城町",
            "romaji" => "higashiibarakigunibarakimachi",
            "hiragana" => "ひがしいばらきぐんいばらきまち",
            "katakana" => "ヒガシイバラキグンイバラキマチ",
            "katakana_half" => "ﾋｶﾞｼｲﾊﾞﾗｷｸﾞﾝｲﾊﾞﾗｷﾏﾁ",
        ]);

        City::create([
            "id" => 452,
            "prefecture_id" => 8,
            "name" => "東茨城郡大洗町",
            "romaji" => "higashiibarakigunooaraimachi",
            "hiragana" => "ひがしいばらきぐんおおあらいまち",
            "katakana" => "ヒガシイバラキグンオオアライマチ",
            "katakana_half" => "ﾋｶﾞｼｲﾊﾞﾗｷｸﾞﾝｵｵｱﾗｲﾏﾁ",
        ]);

        City::create([
            "id" => 453,
            "prefecture_id" => 8,
            "name" => "東茨城郡城里町",
            "romaji" => "higashiibarakigunshirosatomachi",
            "hiragana" => "ひがしいばらきぐんしろさとまち",
            "katakana" => "ヒガシイバラキグンシロサトマチ",
            "katakana_half" => "ﾋｶﾞｼｲﾊﾞﾗｷｸﾞﾝｼﾛｻﾄﾏﾁ",
        ]);

        City::create([
            "id" => 454,
            "prefecture_id" => 8,
            "name" => "那珂郡東海村",
            "romaji" => "nakaguntoukaimura",
            "hiragana" => "なかぐんとうかいむら",
            "katakana" => "ナカグントウカイムラ",
            "katakana_half" => "ﾅｶｸﾞﾝﾄｳｶｲﾑﾗ",
        ]);

        City::create([
            "id" => 455,
            "prefecture_id" => 8,
            "name" => "久慈郡大子町",
            "romaji" => "kujigundaigomachi",
            "hiragana" => "くじぐんだいごまち",
            "katakana" => "クジグンダイゴマチ",
            "katakana_half" => "ｸｼﾞｸﾞﾝﾀﾞｲｺﾞﾏﾁ",
        ]);

        City::create([
            "id" => 456,
            "prefecture_id" => 8,
            "name" => "稲敷郡美浦村",
            "romaji" => "inashikigunmihomura",
            "hiragana" => "いなしきぐんみほむら",
            "katakana" => "イナシキグンミホムラ",
            "katakana_half" => "ｲﾅｼｷｸﾞﾝﾐﾎﾑﾗ",
        ]);

        City::create([
            "id" => 457,
            "prefecture_id" => 8,
            "name" => "稲敷郡阿見町",
            "romaji" => "inashikigunamimachi",
            "hiragana" => "いなしきぐんあみまち",
            "katakana" => "イナシキグンアミマチ",
            "katakana_half" => "ｲﾅｼｷｸﾞﾝｱﾐﾏﾁ",
        ]);

        City::create([
            "id" => 458,
            "prefecture_id" => 8,
            "name" => "稲敷郡河内町",
            "romaji" => "inashikigunkawachimachi",
            "hiragana" => "いなしきぐんかわちまち",
            "katakana" => "イナシキグンカワチマチ",
            "katakana_half" => "ｲﾅｼｷｸﾞﾝｶﾜﾁﾏﾁ",
        ]);

        City::create([
            "id" => 459,
            "prefecture_id" => 8,
            "name" => "結城郡八千代町",
            "romaji" => "yuukigunyachiyomachi",
            "hiragana" => "ゆうきぐんやちよまち",
            "katakana" => "ユウキグンヤチヨマチ",
            "katakana_half" => "ﾕｳｷｸﾞﾝﾔﾁﾖﾏﾁ",
        ]);

        City::create([
            "id" => 460,
            "prefecture_id" => 8,
            "name" => "猿島郡五霞町",
            "romaji" => "sashimagungokamachi",
            "hiragana" => "さしまぐんごかまち",
            "katakana" => "サシマグンゴカマチ",
            "katakana_half" => "ｻｼﾏｸﾞﾝｺﾞｶﾏﾁ",
        ]);

        City::create([
            "id" => 461,
            "prefecture_id" => 8,
            "name" => "猿島郡境町",
            "romaji" => "sashimagunsakaimachi",
            "hiragana" => "さしまぐんさかいまち",
            "katakana" => "サシマグンサカイマチ",
            "katakana_half" => "ｻｼﾏｸﾞﾝｻｶｲﾏﾁ",
        ]);

        City::create([
            "id" => 462,
            "prefecture_id" => 8,
            "name" => "北相馬郡利根町",
            "romaji" => "kitasoumaguntonemachi",
            "hiragana" => "きたそうまぐんとねまち",
            "katakana" => "キタソウマグントネマチ",
            "katakana_half" => "ｷﾀｿｳﾏｸﾞﾝﾄﾈﾏﾁ",
        ]);

        City::create([
            "id" => 463,
            "prefecture_id" => 9,
            "name" => "宇都宮市",
            "romaji" => "utsunomiyashi",
            "hiragana" => "うつのみやし",
            "katakana" => "ウツノミヤシ",
            "katakana_half" => "ｳﾂﾉﾐﾔｼ",
        ]);

        City::create([
            "id" => 464,
            "prefecture_id" => 9,
            "name" => "足利市",
            "romaji" => "ashikagashi",
            "hiragana" => "あしかがし",
            "katakana" => "アシカガシ",
            "katakana_half" => "ｱｼｶｶﾞｼ",
        ]);

        City::create([
            "id" => 465,
            "prefecture_id" => 9,
            "name" => "栃木市",
            "romaji" => "tochigishi",
            "hiragana" => "とちぎし",
            "katakana" => "トチギシ",
            "katakana_half" => "ﾄﾁｷﾞｼ",
        ]);

        City::create([
            "id" => 466,
            "prefecture_id" => 9,
            "name" => "佐野市",
            "romaji" => "sanoshi",
            "hiragana" => "さのし",
            "katakana" => "サノシ",
            "katakana_half" => "ｻﾉｼ",
        ]);

        City::create([
            "id" => 467,
            "prefecture_id" => 9,
            "name" => "鹿沼市",
            "romaji" => "kanumashi",
            "hiragana" => "かぬまし",
            "katakana" => "カヌマシ",
            "katakana_half" => "ｶﾇﾏｼ",
        ]);

        City::create([
            "id" => 468,
            "prefecture_id" => 9,
            "name" => "日光市",
            "romaji" => "nikkoushi",
            "hiragana" => "にっこうし",
            "katakana" => "ニッコウシ",
            "katakana_half" => "ﾆｯｺｳｼ",
        ]);

        City::create([
            "id" => 469,
            "prefecture_id" => 9,
            "name" => "小山市",
            "romaji" => "oyamashi",
            "hiragana" => "おやまし",
            "katakana" => "オヤマシ",
            "katakana_half" => "ｵﾔﾏｼ",
        ]);

        City::create([
            "id" => 470,
            "prefecture_id" => 9,
            "name" => "真岡市",
            "romaji" => "mookashi",
            "hiragana" => "もおかし",
            "katakana" => "モオカシ",
            "katakana_half" => "ﾓｵｶｼ",
        ]);

        City::create([
            "id" => 471,
            "prefecture_id" => 9,
            "name" => "大田原市",
            "romaji" => "ootawarashi",
            "hiragana" => "おおたわらし",
            "katakana" => "オオタワラシ",
            "katakana_half" => "ｵｵﾀﾜﾗｼ",
        ]);

        City::create([
            "id" => 472,
            "prefecture_id" => 9,
            "name" => "矢板市",
            "romaji" => "yaitashi",
            "hiragana" => "やいたし",
            "katakana" => "ヤイタシ",
            "katakana_half" => "ﾔｲﾀｼ",
        ]);

        City::create([
            "id" => 473,
            "prefecture_id" => 9,
            "name" => "那須塩原市",
            "romaji" => "nasushiobarashi",
            "hiragana" => "なすしおばらし",
            "katakana" => "ナスシオバラシ",
            "katakana_half" => "ﾅｽｼｵﾊﾞﾗｼ",
        ]);

        City::create([
            "id" => 474,
            "prefecture_id" => 9,
            "name" => "さくら市",
            "romaji" => "sakurashi",
            "hiragana" => "さくらし",
            "katakana" => "サクラシ",
            "katakana_half" => "ｻｸﾗｼ",
        ]);

        City::create([
            "id" => 475,
            "prefecture_id" => 9,
            "name" => "那須烏山市",
            "romaji" => "nasukarasuyamashi",
            "hiragana" => "なすからすやまし",
            "katakana" => "ナスカラスヤマシ",
            "katakana_half" => "ﾅｽｶﾗｽﾔﾏｼ",
        ]);

        City::create([
            "id" => 476,
            "prefecture_id" => 9,
            "name" => "下野市",
            "romaji" => "shimotsukeshi",
            "hiragana" => "しもつけし",
            "katakana" => "シモツケシ",
            "katakana_half" => "ｼﾓﾂｹｼ",
        ]);

        City::create([
            "id" => 477,
            "prefecture_id" => 9,
            "name" => "河内郡上三川町",
            "romaji" => "kawachigunkaminokawamachi",
            "hiragana" => "かわちぐんかみのかわまち",
            "katakana" => "カワチグンカミノカワマチ",
            "katakana_half" => "ｶﾜﾁｸﾞﾝｶﾐﾉｶﾜﾏﾁ",
        ]);

        City::create([
            "id" => 478,
            "prefecture_id" => 9,
            "name" => "芳賀郡益子町",
            "romaji" => "hagagunmashikomachi",
            "hiragana" => "はがぐんましこまち",
            "katakana" => "ハガグンマシコマチ",
            "katakana_half" => "ﾊｶﾞｸﾞﾝﾏｼｺﾏﾁ",
        ]);

        City::create([
            "id" => 479,
            "prefecture_id" => 9,
            "name" => "芳賀郡茂木町",
            "romaji" => "hagagunmotegimachi",
            "hiragana" => "はがぐんもてぎまち",
            "katakana" => "ハガグンモテギマチ",
            "katakana_half" => "ﾊｶﾞｸﾞﾝﾓﾃｷﾞﾏﾁ",
        ]);

        City::create([
            "id" => 480,
            "prefecture_id" => 9,
            "name" => "芳賀郡市貝町",
            "romaji" => "hagagunichikaimachi",
            "hiragana" => "はがぐんいちかいまち",
            "katakana" => "ハガグンイチカイマチ",
            "katakana_half" => "ﾊｶﾞｸﾞﾝｲﾁｶｲﾏﾁ",
        ]);

        City::create([
            "id" => 481,
            "prefecture_id" => 9,
            "name" => "芳賀郡芳賀町",
            "romaji" => "hagagunhagamachi",
            "hiragana" => "はがぐんはがまち",
            "katakana" => "ハガグンハガマチ",
            "katakana_half" => "ﾊｶﾞｸﾞﾝﾊｶﾞﾏﾁ",
        ]);

        City::create([
            "id" => 482,
            "prefecture_id" => 9,
            "name" => "下都賀郡壬生町",
            "romaji" => "shimotsugagunmibumachi",
            "hiragana" => "しもつがぐんみぶまち",
            "katakana" => "シモツガグンミブマチ",
            "katakana_half" => "ｼﾓﾂｶﾞｸﾞﾝﾐﾌﾞﾏﾁ",
        ]);

        City::create([
            "id" => 483,
            "prefecture_id" => 9,
            "name" => "下都賀郡野木町",
            "romaji" => "shimotsugagunnogimachi",
            "hiragana" => "しもつがぐんのぎまち",
            "katakana" => "シモツガグンノギマチ",
            "katakana_half" => "ｼﾓﾂｶﾞｸﾞﾝﾉｷﾞﾏﾁ",
        ]);

        City::create([
            "id" => 484,
            "prefecture_id" => 9,
            "name" => "塩谷郡塩谷町",
            "romaji" => "shioyagunshioyamachi",
            "hiragana" => "しおやぐんしおやまち",
            "katakana" => "シオヤグンシオヤマチ",
            "katakana_half" => "ｼｵﾔｸﾞﾝｼｵﾔﾏﾁ",
        ]);

        City::create([
            "id" => 485,
            "prefecture_id" => 9,
            "name" => "塩谷郡高根沢町",
            "romaji" => "shioyaguntakanezawamachi",
            "hiragana" => "しおやぐんたかねざわまち",
            "katakana" => "シオヤグンタカネザワマチ",
            "katakana_half" => "ｼｵﾔｸﾞﾝﾀｶﾈｻﾞﾜﾏﾁ",
        ]);

        City::create([
            "id" => 486,
            "prefecture_id" => 9,
            "name" => "那須郡那須町",
            "romaji" => "nasugunnasumachi",
            "hiragana" => "なすぐんなすまち",
            "katakana" => "ナスグンナスマチ",
            "katakana_half" => "ﾅｽｸﾞﾝﾅｽﾏﾁ",
        ]);

        City::create([
            "id" => 487,
            "prefecture_id" => 9,
            "name" => "那須郡那珂川町",
            "romaji" => "nasugunnakagawamachi",
            "hiragana" => "なすぐんなかがわまち",
            "katakana" => "ナスグンナカガワマチ",
            "katakana_half" => "ﾅｽｸﾞﾝﾅｶｶﾞﾜﾏﾁ",
        ]);

        City::create([
            "id" => 488,
            "prefecture_id" => 10,
            "name" => "前橋市",
            "romaji" => "maebashishi",
            "hiragana" => "まえばしし",
            "katakana" => "マエバシシ",
            "katakana_half" => "ﾏｴﾊﾞｼｼ",
        ]);

        City::create([
            "id" => 489,
            "prefecture_id" => 10,
            "name" => "高崎市",
            "romaji" => "takasakishi",
            "hiragana" => "たかさきし",
            "katakana" => "タカサキシ",
            "katakana_half" => "ﾀｶｻｷｼ",
        ]);

        City::create([
            "id" => 490,
            "prefecture_id" => 10,
            "name" => "桐生市",
            "romaji" => "kiryuushi",
            "hiragana" => "きりゅうし",
            "katakana" => "キリュウシ",
            "katakana_half" => "ｷﾘｭｳｼ",
        ]);

        City::create([
            "id" => 491,
            "prefecture_id" => 10,
            "name" => "伊勢崎市",
            "romaji" => "isesakishi",
            "hiragana" => "いせさきし",
            "katakana" => "イセサキシ",
            "katakana_half" => "ｲｾｻｷｼ",
        ]);

        City::create([
            "id" => 492,
            "prefecture_id" => 10,
            "name" => "太田市",
            "romaji" => "ootashi",
            "hiragana" => "おおたし",
            "katakana" => "オオタシ",
            "katakana_half" => "ｵｵﾀｼ",
        ]);

        City::create([
            "id" => 493,
            "prefecture_id" => 10,
            "name" => "沼田市",
            "romaji" => "numatashi",
            "hiragana" => "ぬまたし",
            "katakana" => "ヌマタシ",
            "katakana_half" => "ﾇﾏﾀｼ",
        ]);

        City::create([
            "id" => 494,
            "prefecture_id" => 10,
            "name" => "館林市",
            "romaji" => "tatebayashishi",
            "hiragana" => "たてばやしし",
            "katakana" => "タテバヤシシ",
            "katakana_half" => "ﾀﾃﾊﾞﾔｼｼ",
        ]);

        City::create([
            "id" => 495,
            "prefecture_id" => 10,
            "name" => "渋川市",
            "romaji" => "shibukawashi",
            "hiragana" => "しぶかわし",
            "katakana" => "シブカワシ",
            "katakana_half" => "ｼﾌﾞｶﾜｼ",
        ]);

        City::create([
            "id" => 496,
            "prefecture_id" => 10,
            "name" => "藤岡市",
            "romaji" => "fujiokashi",
            "hiragana" => "ふじおかし",
            "katakana" => "フジオカシ",
            "katakana_half" => "ﾌｼﾞｵｶｼ",
        ]);

        City::create([
            "id" => 497,
            "prefecture_id" => 10,
            "name" => "富岡市",
            "romaji" => "tomiokashi",
            "hiragana" => "とみおかし",
            "katakana" => "トミオカシ",
            "katakana_half" => "ﾄﾐｵｶｼ",
        ]);

        City::create([
            "id" => 498,
            "prefecture_id" => 10,
            "name" => "安中市",
            "romaji" => "annakashi",
            "hiragana" => "あんなかし",
            "katakana" => "アンナカシ",
            "katakana_half" => "ｱﾝﾅｶｼ",
        ]);

        City::create([
            "id" => 499,
            "prefecture_id" => 10,
            "name" => "みどり市",
            "romaji" => "midorishi",
            "hiragana" => "みどりし",
            "katakana" => "ミドリシ",
            "katakana_half" => "ﾐﾄﾞﾘｼ",
        ]);

        City::create([
            "id" => 500,
            "prefecture_id" => 10,
            "name" => "北群馬郡榛東村",
            "romaji" => "kitagunmagunshintoumura",
            "hiragana" => "きたぐんまぐんしんとうむら",
            "katakana" => "キタグンマグンシントウムラ",
            "katakana_half" => "ｷﾀｸﾞﾝﾏｸﾞﾝｼﾝﾄｳﾑﾗ",
        ]);

        City::create([
            "id" => 501,
            "prefecture_id" => 10,
            "name" => "北群馬郡吉岡町",
            "romaji" => "kitagunmagunyoshiokamachi",
            "hiragana" => "きたぐんまぐんよしおかまち",
            "katakana" => "キタグンマグンヨシオカマチ",
            "katakana_half" => "ｷﾀｸﾞﾝﾏｸﾞﾝﾖｼｵｶﾏﾁ",
        ]);

        City::create([
            "id" => 502,
            "prefecture_id" => 10,
            "name" => "多野郡上野村",
            "romaji" => "tanogunuenomura",
            "hiragana" => "たのぐんうえのむら",
            "katakana" => "タノグンウエノムラ",
            "katakana_half" => "ﾀﾉｸﾞﾝｳｴﾉﾑﾗ",
        ]);

        City::create([
            "id" => 503,
            "prefecture_id" => 10,
            "name" => "多野郡神流町",
            "romaji" => "tanogunkannamachi",
            "hiragana" => "たのぐんかんなまち",
            "katakana" => "タノグンカンナマチ",
            "katakana_half" => "ﾀﾉｸﾞﾝｶﾝﾅﾏﾁ",
        ]);

        City::create([
            "id" => 504,
            "prefecture_id" => 10,
            "name" => "甘楽郡下仁田町",
            "romaji" => "kanragunshimonitamachi",
            "hiragana" => "かんらぐんしもにたまち",
            "katakana" => "カンラグンシモニタマチ",
            "katakana_half" => "ｶﾝﾗｸﾞﾝｼﾓﾆﾀﾏﾁ",
        ]);

        City::create([
            "id" => 505,
            "prefecture_id" => 10,
            "name" => "甘楽郡南牧村",
            "romaji" => "kanragunnanmokumura",
            "hiragana" => "かんらぐんなんもくむら",
            "katakana" => "カンラグンナンモクムラ",
            "katakana_half" => "ｶﾝﾗｸﾞﾝﾅﾝﾓｸﾑﾗ",
        ]);

        City::create([
            "id" => 506,
            "prefecture_id" => 10,
            "name" => "甘楽郡甘楽町",
            "romaji" => "kanragunkanramachi",
            "hiragana" => "かんらぐんかんらまち",
            "katakana" => "カンラグンカンラマチ",
            "katakana_half" => "ｶﾝﾗｸﾞﾝｶﾝﾗﾏﾁ",
        ]);

        City::create([
            "id" => 507,
            "prefecture_id" => 10,
            "name" => "吾妻郡中之条町",
            "romaji" => "agatsumagunnakanojoumachi",
            "hiragana" => "あがつまぐんなかのじょうまち",
            "katakana" => "アガツマグンナカノジョウマチ",
            "katakana_half" => "ｱｶﾞﾂﾏｸﾞﾝﾅｶﾉｼﾞｮｳﾏﾁ",
        ]);

        City::create([
            "id" => 508,
            "prefecture_id" => 10,
            "name" => "吾妻郡長野原町",
            "romaji" => "agatsumagunnaganoharamachi",
            "hiragana" => "あがつまぐんながのはらまち",
            "katakana" => "アガツマグンナガノハラマチ",
            "katakana_half" => "ｱｶﾞﾂﾏｸﾞﾝﾅｶﾞﾉﾊﾗﾏﾁ",
        ]);

        City::create([
            "id" => 509,
            "prefecture_id" => 10,
            "name" => "吾妻郡嬬恋村",
            "romaji" => "agatsumaguntsumagoimura",
            "hiragana" => "あがつまぐんつまごいむら",
            "katakana" => "アガツマグンツマゴイムラ",
            "katakana_half" => "ｱｶﾞﾂﾏｸﾞﾝﾂﾏｺﾞｲﾑﾗ",
        ]);

        City::create([
            "id" => 510,
            "prefecture_id" => 10,
            "name" => "吾妻郡草津町",
            "romaji" => "agatsumagunkusatsumachi",
            "hiragana" => "あがつまぐんくさつまち",
            "katakana" => "アガツマグンクサツマチ",
            "katakana_half" => "ｱｶﾞﾂﾏｸﾞﾝｸｻﾂﾏﾁ",
        ]);

        City::create([
            "id" => 511,
            "prefecture_id" => 10,
            "name" => "吾妻郡高山村",
            "romaji" => "agatsumaguntakayamamura",
            "hiragana" => "あがつまぐんたかやまむら",
            "katakana" => "アガツマグンタカヤマムラ",
            "katakana_half" => "ｱｶﾞﾂﾏｸﾞﾝﾀｶﾔﾏﾑﾗ",
        ]);

        City::create([
            "id" => 512,
            "prefecture_id" => 10,
            "name" => "吾妻郡東吾妻町",
            "romaji" => "agatsumagunhigashiagatsumamachi",
            "hiragana" => "あがつまぐんひがしあがつままち",
            "katakana" => "アガツマグンヒガシアガツママチ",
            "katakana_half" => "ｱｶﾞﾂﾏｸﾞﾝﾋｶﾞｼｱｶﾞﾂﾏﾏﾁ",
        ]);

        City::create([
            "id" => 513,
            "prefecture_id" => 10,
            "name" => "利根郡片品村",
            "romaji" => "tonegunkatashinamura",
            "hiragana" => "とねぐんかたしなむら",
            "katakana" => "トネグンカタシナムラ",
            "katakana_half" => "ﾄﾈｸﾞﾝｶﾀｼﾅﾑﾗ",
        ]);

        City::create([
            "id" => 514,
            "prefecture_id" => 10,
            "name" => "利根郡川場村",
            "romaji" => "tonegunkawabamura",
            "hiragana" => "とねぐんかわばむら",
            "katakana" => "トネグンカワバムラ",
            "katakana_half" => "ﾄﾈｸﾞﾝｶﾜﾊﾞﾑﾗ",
        ]);

        City::create([
            "id" => 515,
            "prefecture_id" => 10,
            "name" => "利根郡昭和村",
            "romaji" => "tonegunshouwamura",
            "hiragana" => "とねぐんしょうわむら",
            "katakana" => "トネグンショウワムラ",
            "katakana_half" => "ﾄﾈｸﾞﾝｼｮｳﾜﾑﾗ",
        ]);

        City::create([
            "id" => 516,
            "prefecture_id" => 10,
            "name" => "利根郡みなかみ町",
            "romaji" => "tonegunminakamimachi",
            "hiragana" => "とねぐんみなかみまち",
            "katakana" => "トネグンミナカミマチ",
            "katakana_half" => "ﾄﾈｸﾞﾝﾐﾅｶﾐﾏﾁ",
        ]);

        City::create([
            "id" => 517,
            "prefecture_id" => 10,
            "name" => "佐波郡玉村町",
            "romaji" => "sawaguntamamuramachi",
            "hiragana" => "さわぐんたまむらまち",
            "katakana" => "サワグンタマムラマチ",
            "katakana_half" => "ｻﾜｸﾞﾝﾀﾏﾑﾗﾏﾁ",
        ]);

        City::create([
            "id" => 518,
            "prefecture_id" => 10,
            "name" => "邑楽郡板倉町",
            "romaji" => "ouragunitakuramachi",
            "hiragana" => "おうらぐんいたくらまち",
            "katakana" => "オウラグンイタクラマチ",
            "katakana_half" => "ｵｳﾗｸﾞﾝｲﾀｸﾗﾏﾁ",
        ]);

        City::create([
            "id" => 519,
            "prefecture_id" => 10,
            "name" => "邑楽郡明和町",
            "romaji" => "ouragunmeiwamachi",
            "hiragana" => "おうらぐんめいわまち",
            "katakana" => "オウラグンメイワマチ",
            "katakana_half" => "ｵｳﾗｸﾞﾝﾒｲﾜﾏﾁ",
        ]);

        City::create([
            "id" => 520,
            "prefecture_id" => 10,
            "name" => "邑楽郡千代田町",
            "romaji" => "ouragunchiyodamachi",
            "hiragana" => "おうらぐんちよだまち",
            "katakana" => "オウラグンチヨダマチ",
            "katakana_half" => "ｵｳﾗｸﾞﾝﾁﾖﾀﾞﾏﾁ",
        ]);

        City::create([
            "id" => 521,
            "prefecture_id" => 10,
            "name" => "邑楽郡大泉町",
            "romaji" => "ouragunooizumimachi",
            "hiragana" => "おうらぐんおおいずみまち",
            "katakana" => "オウラグンオオイズミマチ",
            "katakana_half" => "ｵｳﾗｸﾞﾝｵｵｲｽﾞﾐﾏﾁ",
        ]);

        City::create([
            "id" => 522,
            "prefecture_id" => 10,
            "name" => "邑楽郡邑楽町",
            "romaji" => "ouragunouramachi",
            "hiragana" => "おうらぐんおうらまち",
            "katakana" => "オウラグンオウラマチ",
            "katakana_half" => "ｵｳﾗｸﾞﾝｵｳﾗﾏﾁ",
        ]);

        City::create([
            "id" => 523,
            "prefecture_id" => 11,
            "name" => "さいたま市西区",
            "romaji" => "saitamashinishiku",
            "hiragana" => "さいたましにしく",
            "katakana" => "サイタマシニシク",
            "katakana_half" => "ｻｲﾀﾏｼﾆｼｸ",
        ]);

        City::create([
            "id" => 524,
            "prefecture_id" => 11,
            "name" => "さいたま市北区",
            "romaji" => "saitamashikitaku",
            "hiragana" => "さいたましきたく",
            "katakana" => "サイタマシキタク",
            "katakana_half" => "ｻｲﾀﾏｼｷﾀｸ",
        ]);

        City::create([
            "id" => 525,
            "prefecture_id" => 11,
            "name" => "さいたま市大宮区",
            "romaji" => "saitamashioomiyaku",
            "hiragana" => "さいたましおおみやく",
            "katakana" => "サイタマシオオミヤク",
            "katakana_half" => "ｻｲﾀﾏｼｵｵﾐﾔｸ",
        ]);

        City::create([
            "id" => 526,
            "prefecture_id" => 11,
            "name" => "さいたま市見沼区",
            "romaji" => "saitamashiminumaku",
            "hiragana" => "さいたましみぬまく",
            "katakana" => "サイタマシミヌマク",
            "katakana_half" => "ｻｲﾀﾏｼﾐﾇﾏｸ",
        ]);

        City::create([
            "id" => 527,
            "prefecture_id" => 11,
            "name" => "さいたま市中央区",
            "romaji" => "saitamashichuuouku",
            "hiragana" => "さいたましちゅうおうく",
            "katakana" => "サイタマシチュウオウク",
            "katakana_half" => "ｻｲﾀﾏｼﾁｭｳｵｳｸ",
        ]);

        City::create([
            "id" => 528,
            "prefecture_id" => 11,
            "name" => "さいたま市桜区",
            "romaji" => "saitamashisakuraku",
            "hiragana" => "さいたましさくらく",
            "katakana" => "サイタマシサクラク",
            "katakana_half" => "ｻｲﾀﾏｼｻｸﾗｸ",
        ]);

        City::create([
            "id" => 529,
            "prefecture_id" => 11,
            "name" => "さいたま市浦和区",
            "romaji" => "saitamashiurawaku",
            "hiragana" => "さいたましうらわく",
            "katakana" => "サイタマシウラワク",
            "katakana_half" => "ｻｲﾀﾏｼｳﾗﾜｸ",
        ]);

        City::create([
            "id" => 530,
            "prefecture_id" => 11,
            "name" => "さいたま市南区",
            "romaji" => "saitamashiminamiku",
            "hiragana" => "さいたましみなみく",
            "katakana" => "サイタマシミナミク",
            "katakana_half" => "ｻｲﾀﾏｼﾐﾅﾐｸ",
        ]);

        City::create([
            "id" => 531,
            "prefecture_id" => 11,
            "name" => "さいたま市緑区",
            "romaji" => "saitamashimidoriku",
            "hiragana" => "さいたましみどりく",
            "katakana" => "サイタマシミドリク",
            "katakana_half" => "ｻｲﾀﾏｼﾐﾄﾞﾘｸ",
        ]);

        City::create([
            "id" => 532,
            "prefecture_id" => 11,
            "name" => "さいたま市岩槻区",
            "romaji" => "saitamashiiwatsukiku",
            "hiragana" => "さいたましいわつきく",
            "katakana" => "サイタマシイワツキク",
            "katakana_half" => "ｻｲﾀﾏｼｲﾜﾂｷｸ",
        ]);

        City::create([
            "id" => 533,
            "prefecture_id" => 11,
            "name" => "川越市",
            "romaji" => "kawagoeshi",
            "hiragana" => "かわごえし",
            "katakana" => "カワゴエシ",
            "katakana_half" => "ｶﾜｺﾞｴｼ",
        ]);

        City::create([
            "id" => 534,
            "prefecture_id" => 11,
            "name" => "熊谷市",
            "romaji" => "kumagayashi",
            "hiragana" => "くまがやし",
            "katakana" => "クマガヤシ",
            "katakana_half" => "ｸﾏｶﾞﾔｼ",
        ]);

        City::create([
            "id" => 535,
            "prefecture_id" => 11,
            "name" => "川口市",
            "romaji" => "kawaguchishi",
            "hiragana" => "かわぐちし",
            "katakana" => "カワグチシ",
            "katakana_half" => "ｶﾜｸﾞﾁｼ",
        ]);

        City::create([
            "id" => 536,
            "prefecture_id" => 11,
            "name" => "行田市",
            "romaji" => "gyoudashi",
            "hiragana" => "ぎょうだし",
            "katakana" => "ギョウダシ",
            "katakana_half" => "ｷﾞｮｳﾀﾞｼ",
        ]);

        City::create([
            "id" => 537,
            "prefecture_id" => 11,
            "name" => "秩父市",
            "romaji" => "chichibushi",
            "hiragana" => "ちちぶし",
            "katakana" => "チチブシ",
            "katakana_half" => "ﾁﾁﾌﾞｼ",
        ]);

        City::create([
            "id" => 538,
            "prefecture_id" => 11,
            "name" => "所沢市",
            "romaji" => "tokorozawashi",
            "hiragana" => "ところざわし",
            "katakana" => "トコロザワシ",
            "katakana_half" => "ﾄｺﾛｻﾞﾜｼ",
        ]);

        City::create([
            "id" => 539,
            "prefecture_id" => 11,
            "name" => "飯能市",
            "romaji" => "hannoushi",
            "hiragana" => "はんのうし",
            "katakana" => "ハンノウシ",
            "katakana_half" => "ﾊﾝﾉｳｼ",
        ]);

        City::create([
            "id" => 540,
            "prefecture_id" => 11,
            "name" => "加須市",
            "romaji" => "kazoshi",
            "hiragana" => "かぞし",
            "katakana" => "カゾシ",
            "katakana_half" => "ｶｿﾞｼ",
        ]);

        City::create([
            "id" => 541,
            "prefecture_id" => 11,
            "name" => "本庄市",
            "romaji" => "honjoushi",
            "hiragana" => "ほんじょうし",
            "katakana" => "ホンジョウシ",
            "katakana_half" => "ﾎﾝｼﾞｮｳｼ",
        ]);

        City::create([
            "id" => 542,
            "prefecture_id" => 11,
            "name" => "東松山市",
            "romaji" => "higashimatsuyamashi",
            "hiragana" => "ひがしまつやまし",
            "katakana" => "ヒガシマツヤマシ",
            "katakana_half" => "ﾋｶﾞｼﾏﾂﾔﾏｼ",
        ]);

        City::create([
            "id" => 543,
            "prefecture_id" => 11,
            "name" => "春日部市",
            "romaji" => "kasukabeshi",
            "hiragana" => "かすかべし",
            "katakana" => "カスカベシ",
            "katakana_half" => "ｶｽｶﾍﾞｼ",
        ]);

        City::create([
            "id" => 544,
            "prefecture_id" => 11,
            "name" => "狭山市",
            "romaji" => "sayamashi",
            "hiragana" => "さやまし",
            "katakana" => "サヤマシ",
            "katakana_half" => "ｻﾔﾏｼ",
        ]);

        City::create([
            "id" => 545,
            "prefecture_id" => 11,
            "name" => "羽生市",
            "romaji" => "hanyuushi",
            "hiragana" => "はにゅうし",
            "katakana" => "ハニュウシ",
            "katakana_half" => "ﾊﾆｭｳｼ",
        ]);

        City::create([
            "id" => 546,
            "prefecture_id" => 11,
            "name" => "鴻巣市",
            "romaji" => "kounosushi",
            "hiragana" => "こうのすし",
            "katakana" => "コウノスシ",
            "katakana_half" => "ｺｳﾉｽｼ",
        ]);

        City::create([
            "id" => 547,
            "prefecture_id" => 11,
            "name" => "深谷市",
            "romaji" => "fukayashi",
            "hiragana" => "ふかやし",
            "katakana" => "フカヤシ",
            "katakana_half" => "ﾌｶﾔｼ",
        ]);

        City::create([
            "id" => 548,
            "prefecture_id" => 11,
            "name" => "上尾市",
            "romaji" => "ageoshi",
            "hiragana" => "あげおし",
            "katakana" => "アゲオシ",
            "katakana_half" => "ｱｹﾞｵｼ",
        ]);

        City::create([
            "id" => 549,
            "prefecture_id" => 11,
            "name" => "草加市",
            "romaji" => "soukashi",
            "hiragana" => "そうかし",
            "katakana" => "ソウカシ",
            "katakana_half" => "ｿｳｶｼ",
        ]);

        City::create([
            "id" => 550,
            "prefecture_id" => 11,
            "name" => "越谷市",
            "romaji" => "koshigayashi",
            "hiragana" => "こしがやし",
            "katakana" => "コシガヤシ",
            "katakana_half" => "ｺｼｶﾞﾔｼ",
        ]);

        City::create([
            "id" => 551,
            "prefecture_id" => 11,
            "name" => "蕨市",
            "romaji" => "warabishi",
            "hiragana" => "わらびし",
            "katakana" => "ワラビシ",
            "katakana_half" => "ﾜﾗﾋﾞｼ",
        ]);

        City::create([
            "id" => 552,
            "prefecture_id" => 11,
            "name" => "戸田市",
            "romaji" => "todashi",
            "hiragana" => "とだし",
            "katakana" => "トダシ",
            "katakana_half" => "ﾄﾀﾞｼ",
        ]);

        City::create([
            "id" => 553,
            "prefecture_id" => 11,
            "name" => "入間市",
            "romaji" => "irumashi",
            "hiragana" => "いるまし",
            "katakana" => "イルマシ",
            "katakana_half" => "ｲﾙﾏｼ",
        ]);

        City::create([
            "id" => 554,
            "prefecture_id" => 11,
            "name" => "朝霞市",
            "romaji" => "asakashi",
            "hiragana" => "あさかし",
            "katakana" => "アサカシ",
            "katakana_half" => "ｱｻｶｼ",
        ]);

        City::create([
            "id" => 555,
            "prefecture_id" => 11,
            "name" => "志木市",
            "romaji" => "shikishi",
            "hiragana" => "しきし",
            "katakana" => "シキシ",
            "katakana_half" => "ｼｷｼ",
        ]);

        City::create([
            "id" => 556,
            "prefecture_id" => 11,
            "name" => "和光市",
            "romaji" => "wakoushi",
            "hiragana" => "わこうし",
            "katakana" => "ワコウシ",
            "katakana_half" => "ﾜｺｳｼ",
        ]);

        City::create([
            "id" => 557,
            "prefecture_id" => 11,
            "name" => "新座市",
            "romaji" => "niizashi",
            "hiragana" => "にいざし",
            "katakana" => "ニイザシ",
            "katakana_half" => "ﾆｲｻﾞｼ",
        ]);

        City::create([
            "id" => 558,
            "prefecture_id" => 11,
            "name" => "桶川市",
            "romaji" => "okegawashi",
            "hiragana" => "おけがわし",
            "katakana" => "オケガワシ",
            "katakana_half" => "ｵｹｶﾞﾜｼ",
        ]);

        City::create([
            "id" => 559,
            "prefecture_id" => 11,
            "name" => "久喜市",
            "romaji" => "kukishi",
            "hiragana" => "くきし",
            "katakana" => "クキシ",
            "katakana_half" => "ｸｷｼ",
        ]);

        City::create([
            "id" => 560,
            "prefecture_id" => 11,
            "name" => "北本市",
            "romaji" => "kitamotoshi",
            "hiragana" => "きたもとし",
            "katakana" => "キタモトシ",
            "katakana_half" => "ｷﾀﾓﾄｼ",
        ]);

        City::create([
            "id" => 561,
            "prefecture_id" => 11,
            "name" => "八潮市",
            "romaji" => "yashioshi",
            "hiragana" => "やしおし",
            "katakana" => "ヤシオシ",
            "katakana_half" => "ﾔｼｵｼ",
        ]);

        City::create([
            "id" => 562,
            "prefecture_id" => 11,
            "name" => "富士見市",
            "romaji" => "fujimishi",
            "hiragana" => "ふじみし",
            "katakana" => "フジミシ",
            "katakana_half" => "ﾌｼﾞﾐｼ",
        ]);

        City::create([
            "id" => 563,
            "prefecture_id" => 11,
            "name" => "三郷市",
            "romaji" => "misatoshi",
            "hiragana" => "みさとし",
            "katakana" => "ミサトシ",
            "katakana_half" => "ﾐｻﾄｼ",
        ]);

        City::create([
            "id" => 564,
            "prefecture_id" => 11,
            "name" => "蓮田市",
            "romaji" => "hasudashi",
            "hiragana" => "はすだし",
            "katakana" => "ハスダシ",
            "katakana_half" => "ﾊｽﾀﾞｼ",
        ]);

        City::create([
            "id" => 565,
            "prefecture_id" => 11,
            "name" => "坂戸市",
            "romaji" => "sakadoshi",
            "hiragana" => "さかどし",
            "katakana" => "サカドシ",
            "katakana_half" => "ｻｶﾄﾞｼ",
        ]);

        City::create([
            "id" => 566,
            "prefecture_id" => 11,
            "name" => "幸手市",
            "romaji" => "satteshi",
            "hiragana" => "さってし",
            "katakana" => "サッテシ",
            "katakana_half" => "ｻｯﾃｼ",
        ]);

        City::create([
            "id" => 567,
            "prefecture_id" => 11,
            "name" => "鶴ヶ島市",
            "romaji" => "tsurugashimashi",
            "hiragana" => "つるがしまし",
            "katakana" => "ツルガシマシ",
            "katakana_half" => "ﾂﾙｶﾞｼﾏｼ",
        ]);

        City::create([
            "id" => 568,
            "prefecture_id" => 11,
            "name" => "日高市",
            "romaji" => "hidakashi",
            "hiragana" => "ひだかし",
            "katakana" => "ヒダカシ",
            "katakana_half" => "ﾋﾀﾞｶｼ",
        ]);

        City::create([
            "id" => 569,
            "prefecture_id" => 11,
            "name" => "吉川市",
            "romaji" => "yoshikawashi",
            "hiragana" => "よしかわし",
            "katakana" => "ヨシカワシ",
            "katakana_half" => "ﾖｼｶﾜｼ",
        ]);

        City::create([
            "id" => 570,
            "prefecture_id" => 11,
            "name" => "ふじみ野市",
            "romaji" => "fujiminoshi",
            "hiragana" => "ふじみのし",
            "katakana" => "フジミノシ",
            "katakana_half" => "ﾌｼﾞﾐﾉｼ",
        ]);

        City::create([
            "id" => 571,
            "prefecture_id" => 11,
            "name" => "白岡市",
            "romaji" => "shiraokashi",
            "hiragana" => "しらおかし",
            "katakana" => "シラオカシ",
            "katakana_half" => "ｼﾗｵｶｼ",
        ]);

        City::create([
            "id" => 572,
            "prefecture_id" => 11,
            "name" => "北足立郡伊奈町",
            "romaji" => "kitaadachiguninamachi",
            "hiragana" => "きたあだちぐんいなまち",
            "katakana" => "キタアダチグンイナマチ",
            "katakana_half" => "ｷﾀｱﾀﾞﾁｸﾞﾝｲﾅﾏﾁ",
        ]);

        City::create([
            "id" => 573,
            "prefecture_id" => 11,
            "name" => "入間郡三芳町",
            "romaji" => "irumagunmiyoshimachi",
            "hiragana" => "いるまぐんみよしまち",
            "katakana" => "イルマグンミヨシマチ",
            "katakana_half" => "ｲﾙﾏｸﾞﾝﾐﾖｼﾏﾁ",
        ]);

        City::create([
            "id" => 574,
            "prefecture_id" => 11,
            "name" => "入間郡毛呂山町",
            "romaji" => "irumagunmoroyamamachi",
            "hiragana" => "いるまぐんもろやままち",
            "katakana" => "イルマグンモロヤママチ",
            "katakana_half" => "ｲﾙﾏｸﾞﾝﾓﾛﾔﾏﾏﾁ",
        ]);

        City::create([
            "id" => 575,
            "prefecture_id" => 11,
            "name" => "入間郡越生町",
            "romaji" => "irumagunogosemachi",
            "hiragana" => "いるまぐんおごせまち",
            "katakana" => "イルマグンオゴセマチ",
            "katakana_half" => "ｲﾙﾏｸﾞﾝｵｺﾞｾﾏﾁ",
        ]);

        City::create([
            "id" => 576,
            "prefecture_id" => 11,
            "name" => "比企郡滑川町",
            "romaji" => "hikigunnamegawamachi",
            "hiragana" => "ひきぐんなめがわまち",
            "katakana" => "ヒキグンナメガワマチ",
            "katakana_half" => "ﾋｷｸﾞﾝﾅﾒｶﾞﾜﾏﾁ",
        ]);

        City::create([
            "id" => 577,
            "prefecture_id" => 11,
            "name" => "比企郡嵐山町",
            "romaji" => "hikigunranzanmachi",
            "hiragana" => "ひきぐんらんざんまち",
            "katakana" => "ヒキグンランザンマチ",
            "katakana_half" => "ﾋｷｸﾞﾝﾗﾝｻﾞﾝﾏﾁ",
        ]);

        City::create([
            "id" => 578,
            "prefecture_id" => 11,
            "name" => "比企郡小川町",
            "romaji" => "hikigunogawamachi",
            "hiragana" => "ひきぐんおがわまち",
            "katakana" => "ヒキグンオガワマチ",
            "katakana_half" => "ﾋｷｸﾞﾝｵｶﾞﾜﾏﾁ",
        ]);

        City::create([
            "id" => 579,
            "prefecture_id" => 11,
            "name" => "比企郡川島町",
            "romaji" => "hikigunkawajimamachi",
            "hiragana" => "ひきぐんかわじままち",
            "katakana" => "ヒキグンカワジママチ",
            "katakana_half" => "ﾋｷｸﾞﾝｶﾜｼﾞﾏﾏﾁ",
        ]);

        City::create([
            "id" => 580,
            "prefecture_id" => 11,
            "name" => "比企郡吉見町",
            "romaji" => "hikigunyoshimimachi",
            "hiragana" => "ひきぐんよしみまち",
            "katakana" => "ヒキグンヨシミマチ",
            "katakana_half" => "ﾋｷｸﾞﾝﾖｼﾐﾏﾁ",
        ]);

        City::create([
            "id" => 581,
            "prefecture_id" => 11,
            "name" => "比企郡鳩山町",
            "romaji" => "hikigunhatoyamamachi",
            "hiragana" => "ひきぐんはとやままち",
            "katakana" => "ヒキグンハトヤママチ",
            "katakana_half" => "ﾋｷｸﾞﾝﾊﾄﾔﾏﾏﾁ",
        ]);

        City::create([
            "id" => 582,
            "prefecture_id" => 11,
            "name" => "比企郡ときがわ町",
            "romaji" => "hikiguntokigawamachi",
            "hiragana" => "ひきぐんときがわまち",
            "katakana" => "ヒキグントキガワマチ",
            "katakana_half" => "ﾋｷｸﾞﾝﾄｷｶﾞﾜﾏﾁ",
        ]);

        City::create([
            "id" => 583,
            "prefecture_id" => 11,
            "name" => "秩父郡横瀬町",
            "romaji" => "chichibugunyokozemachi",
            "hiragana" => "ちちぶぐんよこぜまち",
            "katakana" => "チチブグンヨコゼマチ",
            "katakana_half" => "ﾁﾁﾌﾞｸﾞﾝﾖｺｾﾞﾏﾁ",
        ]);

        City::create([
            "id" => 584,
            "prefecture_id" => 11,
            "name" => "秩父郡皆野町",
            "romaji" => "chichibugunminanomachi",
            "hiragana" => "ちちぶぐんみなのまち",
            "katakana" => "チチブグンミナノマチ",
            "katakana_half" => "ﾁﾁﾌﾞｸﾞﾝﾐﾅﾉﾏﾁ",
        ]);

        City::create([
            "id" => 585,
            "prefecture_id" => 11,
            "name" => "秩父郡長瀞町",
            "romaji" => "chichibugunnagatoromachi",
            "hiragana" => "ちちぶぐんながとろまち",
            "katakana" => "チチブグンナガトロマチ",
            "katakana_half" => "ﾁﾁﾌﾞｸﾞﾝﾅｶﾞﾄﾛﾏﾁ",
        ]);

        City::create([
            "id" => 586,
            "prefecture_id" => 11,
            "name" => "秩父郡小鹿野町",
            "romaji" => "chichibugunoganomachi",
            "hiragana" => "ちちぶぐんおがのまち",
            "katakana" => "チチブグンオガノマチ",
            "katakana_half" => "ﾁﾁﾌﾞｸﾞﾝｵｶﾞﾉﾏﾁ",
        ]);

        City::create([
            "id" => 587,
            "prefecture_id" => 11,
            "name" => "秩父郡東秩父村",
            "romaji" => "chichibugunhigashichichibumura",
            "hiragana" => "ちちぶぐんひがしちちぶむら",
            "katakana" => "チチブグンヒガシチチブムラ",
            "katakana_half" => "ﾁﾁﾌﾞｸﾞﾝﾋｶﾞｼﾁﾁﾌﾞﾑﾗ",
        ]);

        City::create([
            "id" => 588,
            "prefecture_id" => 11,
            "name" => "児玉郡美里町",
            "romaji" => "kodamagunmisatomachi",
            "hiragana" => "こだまぐんみさとまち",
            "katakana" => "コダマグンミサトマチ",
            "katakana_half" => "ｺﾀﾞﾏｸﾞﾝﾐｻﾄﾏﾁ",
        ]);

        City::create([
            "id" => 589,
            "prefecture_id" => 11,
            "name" => "児玉郡神川町",
            "romaji" => "kodamagunkamikawamachi",
            "hiragana" => "こだまぐんかみかわまち",
            "katakana" => "コダマグンカミカワマチ",
            "katakana_half" => "ｺﾀﾞﾏｸﾞﾝｶﾐｶﾜﾏﾁ",
        ]);

        City::create([
            "id" => 590,
            "prefecture_id" => 11,
            "name" => "児玉郡上里町",
            "romaji" => "kodamagunkamisatomachi",
            "hiragana" => "こだまぐんかみさとまち",
            "katakana" => "コダマグンカミサトマチ",
            "katakana_half" => "ｺﾀﾞﾏｸﾞﾝｶﾐｻﾄﾏﾁ",
        ]);

        City::create([
            "id" => 591,
            "prefecture_id" => 11,
            "name" => "大里郡寄居町",
            "romaji" => "oosatogunyoriimachi",
            "hiragana" => "おおさとぐんよりいまち",
            "katakana" => "オオサトグンヨリイマチ",
            "katakana_half" => "ｵｵｻﾄｸﾞﾝﾖﾘｲﾏﾁ",
        ]);

        City::create([
            "id" => 592,
            "prefecture_id" => 11,
            "name" => "南埼玉郡宮代町",
            "romaji" => "minamisaitamagunmiyashiromachi",
            "hiragana" => "みなみさいたまぐんみやしろまち",
            "katakana" => "ミナミサイタマグンミヤシロマチ",
            "katakana_half" => "ﾐﾅﾐｻｲﾀﾏｸﾞﾝﾐﾔｼﾛﾏﾁ",
        ]);

        City::create([
            "id" => 593,
            "prefecture_id" => 11,
            "name" => "北葛飾郡杉戸町",
            "romaji" => "kitakatsushikagunsugitomachi",
            "hiragana" => "きたかつしかぐんすぎとまち",
            "katakana" => "キタカツシカグンスギトマチ",
            "katakana_half" => "ｷﾀｶﾂｼｶｸﾞﾝｽｷﾞﾄﾏﾁ",
        ]);

        City::create([
            "id" => 594,
            "prefecture_id" => 11,
            "name" => "北葛飾郡松伏町",
            "romaji" => "kitakatsushikagunmatsubushimachi",
            "hiragana" => "きたかつしかぐんまつぶしまち",
            "katakana" => "キタカツシカグンマツブシマチ",
            "katakana_half" => "ｷﾀｶﾂｼｶｸﾞﾝﾏﾂﾌﾞｼﾏﾁ",
        ]);

        City::create([
            "id" => 595,
            "prefecture_id" => 12,
            "name" => "千葉市中央区",
            "romaji" => "chibashichuuouku",
            "hiragana" => "ちばしちゅうおうく",
            "katakana" => "チバシチュウオウク",
            "katakana_half" => "ﾁﾊﾞｼﾁｭｳｵｳｸ",
        ]);

        City::create([
            "id" => 596,
            "prefecture_id" => 12,
            "name" => "千葉市花見川区",
            "romaji" => "chibashihanamigawaku",
            "hiragana" => "ちばしはなみがわく",
            "katakana" => "チバシハナミガワク",
            "katakana_half" => "ﾁﾊﾞｼﾊﾅﾐｶﾞﾜｸ",
        ]);

        City::create([
            "id" => 597,
            "prefecture_id" => 12,
            "name" => "千葉市稲毛区",
            "romaji" => "chibashiinageku",
            "hiragana" => "ちばしいなげく",
            "katakana" => "チバシイナゲク",
            "katakana_half" => "ﾁﾊﾞｼｲﾅｹﾞｸ",
        ]);

        City::create([
            "id" => 598,
            "prefecture_id" => 12,
            "name" => "千葉市若葉区",
            "romaji" => "chibashiwakabaku",
            "hiragana" => "ちばしわかばく",
            "katakana" => "チバシワカバク",
            "katakana_half" => "ﾁﾊﾞｼﾜｶﾊﾞｸ",
        ]);

        City::create([
            "id" => 599,
            "prefecture_id" => 12,
            "name" => "千葉市緑区",
            "romaji" => "chibashimidoriku",
            "hiragana" => "ちばしみどりく",
            "katakana" => "チバシミドリク",
            "katakana_half" => "ﾁﾊﾞｼﾐﾄﾞﾘｸ",
        ]);

        City::create([
            "id" => 600,
            "prefecture_id" => 12,
            "name" => "千葉市美浜区",
            "romaji" => "chibashimihamaku",
            "hiragana" => "ちばしみはまく",
            "katakana" => "チバシミハマク",
            "katakana_half" => "ﾁﾊﾞｼﾐﾊﾏｸ",
        ]);

        City::create([
            "id" => 601,
            "prefecture_id" => 12,
            "name" => "銚子市",
            "romaji" => "choushishi",
            "hiragana" => "ちょうしし",
            "katakana" => "チョウシシ",
            "katakana_half" => "ﾁｮｳｼｼ",
        ]);

        City::create([
            "id" => 602,
            "prefecture_id" => 12,
            "name" => "市川市",
            "romaji" => "ichikawashi",
            "hiragana" => "いちかわし",
            "katakana" => "イチカワシ",
            "katakana_half" => "ｲﾁｶﾜｼ",
        ]);

        City::create([
            "id" => 603,
            "prefecture_id" => 12,
            "name" => "船橋市",
            "romaji" => "funabashishi",
            "hiragana" => "ふなばしし",
            "katakana" => "フナバシシ",
            "katakana_half" => "ﾌﾅﾊﾞｼｼ",
        ]);

        City::create([
            "id" => 604,
            "prefecture_id" => 12,
            "name" => "館山市",
            "romaji" => "tateyamashi",
            "hiragana" => "たてやまし",
            "katakana" => "タテヤマシ",
            "katakana_half" => "ﾀﾃﾔﾏｼ",
        ]);

        City::create([
            "id" => 605,
            "prefecture_id" => 12,
            "name" => "木更津市",
            "romaji" => "kisarazushi",
            "hiragana" => "きさらづし",
            "katakana" => "キサラヅシ",
            "katakana_half" => "ｷｻﾗﾂﾞｼ",
        ]);

        City::create([
            "id" => 606,
            "prefecture_id" => 12,
            "name" => "松戸市",
            "romaji" => "matsudoshi",
            "hiragana" => "まつどし",
            "katakana" => "マツドシ",
            "katakana_half" => "ﾏﾂﾄﾞｼ",
        ]);

        City::create([
            "id" => 607,
            "prefecture_id" => 12,
            "name" => "野田市",
            "romaji" => "nodashi",
            "hiragana" => "のだし",
            "katakana" => "ノダシ",
            "katakana_half" => "ﾉﾀﾞｼ",
        ]);

        City::create([
            "id" => 608,
            "prefecture_id" => 12,
            "name" => "茂原市",
            "romaji" => "mobarashi",
            "hiragana" => "もばらし",
            "katakana" => "モバラシ",
            "katakana_half" => "ﾓﾊﾞﾗｼ",
        ]);

        City::create([
            "id" => 609,
            "prefecture_id" => 12,
            "name" => "成田市",
            "romaji" => "naritashi",
            "hiragana" => "なりたし",
            "katakana" => "ナリタシ",
            "katakana_half" => "ﾅﾘﾀｼ",
        ]);

        City::create([
            "id" => 610,
            "prefecture_id" => 12,
            "name" => "佐倉市",
            "romaji" => "sakurashi",
            "hiragana" => "さくらし",
            "katakana" => "サクラシ",
            "katakana_half" => "ｻｸﾗｼ",
        ]);

        City::create([
            "id" => 611,
            "prefecture_id" => 12,
            "name" => "東金市",
            "romaji" => "touganeshi",
            "hiragana" => "とうがねし",
            "katakana" => "トウガネシ",
            "katakana_half" => "ﾄｳｶﾞﾈｼ",
        ]);

        City::create([
            "id" => 612,
            "prefecture_id" => 12,
            "name" => "旭市",
            "romaji" => "asahishi",
            "hiragana" => "あさひし",
            "katakana" => "アサヒシ",
            "katakana_half" => "ｱｻﾋｼ",
        ]);

        City::create([
            "id" => 613,
            "prefecture_id" => 12,
            "name" => "習志野市",
            "romaji" => "narashinoshi",
            "hiragana" => "ならしのし",
            "katakana" => "ナラシノシ",
            "katakana_half" => "ﾅﾗｼﾉｼ",
        ]);

        City::create([
            "id" => 614,
            "prefecture_id" => 12,
            "name" => "柏市",
            "romaji" => "kashiwashi",
            "hiragana" => "かしわし",
            "katakana" => "カシワシ",
            "katakana_half" => "ｶｼﾜｼ",
        ]);

        City::create([
            "id" => 615,
            "prefecture_id" => 12,
            "name" => "勝浦市",
            "romaji" => "katsuurashi",
            "hiragana" => "かつうらし",
            "katakana" => "カツウラシ",
            "katakana_half" => "ｶﾂｳﾗｼ",
        ]);

        City::create([
            "id" => 616,
            "prefecture_id" => 12,
            "name" => "市原市",
            "romaji" => "ichiharashi",
            "hiragana" => "いちはらし",
            "katakana" => "イチハラシ",
            "katakana_half" => "ｲﾁﾊﾗｼ",
        ]);

        City::create([
            "id" => 617,
            "prefecture_id" => 12,
            "name" => "流山市",
            "romaji" => "nagareyamashi",
            "hiragana" => "ながれやまし",
            "katakana" => "ナガレヤマシ",
            "katakana_half" => "ﾅｶﾞﾚﾔﾏｼ",
        ]);

        City::create([
            "id" => 618,
            "prefecture_id" => 12,
            "name" => "八千代市",
            "romaji" => "yachiyoshi",
            "hiragana" => "やちよし",
            "katakana" => "ヤチヨシ",
            "katakana_half" => "ﾔﾁﾖｼ",
        ]);

        City::create([
            "id" => 619,
            "prefecture_id" => 12,
            "name" => "我孫子市",
            "romaji" => "abikoshi",
            "hiragana" => "あびこし",
            "katakana" => "アビコシ",
            "katakana_half" => "ｱﾋﾞｺｼ",
        ]);

        City::create([
            "id" => 620,
            "prefecture_id" => 12,
            "name" => "鴨川市",
            "romaji" => "kamogawashi",
            "hiragana" => "かもがわし",
            "katakana" => "カモガワシ",
            "katakana_half" => "ｶﾓｶﾞﾜｼ",
        ]);

        City::create([
            "id" => 621,
            "prefecture_id" => 12,
            "name" => "鎌ケ谷市",
            "romaji" => "kamagayashi",
            "hiragana" => "かまがやし",
            "katakana" => "カマガヤシ",
            "katakana_half" => "ｶﾏｶﾞﾔｼ",
        ]);

        City::create([
            "id" => 622,
            "prefecture_id" => 12,
            "name" => "君津市",
            "romaji" => "kimitsushi",
            "hiragana" => "きみつし",
            "katakana" => "キミツシ",
            "katakana_half" => "ｷﾐﾂｼ",
        ]);

        City::create([
            "id" => 623,
            "prefecture_id" => 12,
            "name" => "富津市",
            "romaji" => "futtsushi",
            "hiragana" => "ふっつし",
            "katakana" => "フッツシ",
            "katakana_half" => "ﾌｯﾂｼ",
        ]);

        City::create([
            "id" => 624,
            "prefecture_id" => 12,
            "name" => "浦安市",
            "romaji" => "urayasushi",
            "hiragana" => "うらやすし",
            "katakana" => "ウラヤスシ",
            "katakana_half" => "ｳﾗﾔｽｼ",
        ]);

        City::create([
            "id" => 625,
            "prefecture_id" => 12,
            "name" => "四街道市",
            "romaji" => "yotsukaidoushi",
            "hiragana" => "よつかいどうし",
            "katakana" => "ヨツカイドウシ",
            "katakana_half" => "ﾖﾂｶｲﾄﾞｳｼ",
        ]);

        City::create([
            "id" => 626,
            "prefecture_id" => 12,
            "name" => "袖ケ浦市",
            "romaji" => "sodegaurashi",
            "hiragana" => "そでがうらし",
            "katakana" => "ソデガウラシ",
            "katakana_half" => "ｿﾃﾞｶﾞｳﾗｼ",
        ]);

        City::create([
            "id" => 627,
            "prefecture_id" => 12,
            "name" => "八街市",
            "romaji" => "yachimatashi",
            "hiragana" => "やちまたし",
            "katakana" => "ヤチマタシ",
            "katakana_half" => "ﾔﾁﾏﾀｼ",
        ]);

        City::create([
            "id" => 628,
            "prefecture_id" => 12,
            "name" => "印西市",
            "romaji" => "inzaishi",
            "hiragana" => "いんざいし",
            "katakana" => "インザイシ",
            "katakana_half" => "ｲﾝｻﾞｲｼ",
        ]);

        City::create([
            "id" => 629,
            "prefecture_id" => 12,
            "name" => "白井市",
            "romaji" => "shiroishi",
            "hiragana" => "しろいし",
            "katakana" => "シロイシ",
            "katakana_half" => "ｼﾛｲｼ",
        ]);

        City::create([
            "id" => 630,
            "prefecture_id" => 12,
            "name" => "富里市",
            "romaji" => "tomisatoshi",
            "hiragana" => "とみさとし",
            "katakana" => "トミサトシ",
            "katakana_half" => "ﾄﾐｻﾄｼ",
        ]);

        City::create([
            "id" => 631,
            "prefecture_id" => 12,
            "name" => "南房総市",
            "romaji" => "minamibousoushi",
            "hiragana" => "みなみぼうそうし",
            "katakana" => "ミナミボウソウシ",
            "katakana_half" => "ﾐﾅﾐﾎﾞｳｿｳｼ",
        ]);

        City::create([
            "id" => 632,
            "prefecture_id" => 12,
            "name" => "匝瑳市",
            "romaji" => "sousashi",
            "hiragana" => "そうさし",
            "katakana" => "ソウサシ",
            "katakana_half" => "ｿｳｻｼ",
        ]);

        City::create([
            "id" => 633,
            "prefecture_id" => 12,
            "name" => "香取市",
            "romaji" => "katorishi",
            "hiragana" => "かとりし",
            "katakana" => "カトリシ",
            "katakana_half" => "ｶﾄﾘｼ",
        ]);

        City::create([
            "id" => 634,
            "prefecture_id" => 12,
            "name" => "山武市",
            "romaji" => "sanmushi",
            "hiragana" => "さんむし",
            "katakana" => "サンムシ",
            "katakana_half" => "ｻﾝﾑｼ",
        ]);

        City::create([
            "id" => 635,
            "prefecture_id" => 12,
            "name" => "いすみ市",
            "romaji" => "isumishi",
            "hiragana" => "いすみし",
            "katakana" => "イスミシ",
            "katakana_half" => "ｲｽﾐｼ",
        ]);

        City::create([
            "id" => 636,
            "prefecture_id" => 12,
            "name" => "大網白里市",
            "romaji" => "ooamishirasatoshi",
            "hiragana" => "おおあみしらさとし",
            "katakana" => "オオアミシラサトシ",
            "katakana_half" => "ｵｵｱﾐｼﾗｻﾄｼ",
        ]);

        City::create([
            "id" => 637,
            "prefecture_id" => 12,
            "name" => "印旛郡酒々井町",
            "romaji" => "inbagunshisuimachi",
            "hiragana" => "いんばぐんしすいまち",
            "katakana" => "インバグンシスイマチ",
            "katakana_half" => "ｲﾝﾊﾞｸﾞﾝｼｽｲﾏﾁ",
        ]);

        City::create([
            "id" => 638,
            "prefecture_id" => 12,
            "name" => "印旛郡栄町",
            "romaji" => "inbagunsakaemachi",
            "hiragana" => "いんばぐんさかえまち",
            "katakana" => "インバグンサカエマチ",
            "katakana_half" => "ｲﾝﾊﾞｸﾞﾝｻｶｴﾏﾁ",
        ]);

        City::create([
            "id" => 639,
            "prefecture_id" => 12,
            "name" => "香取郡神崎町",
            "romaji" => "katorigunkouzakimachi",
            "hiragana" => "かとりぐんこうざきまち",
            "katakana" => "カトリグンコウザキマチ",
            "katakana_half" => "ｶﾄﾘｸﾞﾝｺｳｻﾞｷﾏﾁ",
        ]);

        City::create([
            "id" => 640,
            "prefecture_id" => 12,
            "name" => "香取郡多古町",
            "romaji" => "katoriguntakomachi",
            "hiragana" => "かとりぐんたこまち",
            "katakana" => "カトリグンタコマチ",
            "katakana_half" => "ｶﾄﾘｸﾞﾝﾀｺﾏﾁ",
        ]);

        City::create([
            "id" => 641,
            "prefecture_id" => 12,
            "name" => "香取郡東庄町",
            "romaji" => "katoriguntounoshoumachi",
            "hiragana" => "かとりぐんとうのしょうまち",
            "katakana" => "カトリグントウノショウマチ",
            "katakana_half" => "ｶﾄﾘｸﾞﾝﾄｳﾉｼｮｳﾏﾁ",
        ]);

        City::create([
            "id" => 642,
            "prefecture_id" => 12,
            "name" => "山武郡九十九里町",
            "romaji" => "sanbugunkujuukurimachi",
            "hiragana" => "さんぶぐんくじゅうくりまち",
            "katakana" => "サンブグンクジュウクリマチ",
            "katakana_half" => "ｻﾝﾌﾞｸﾞﾝｸｼﾞｭｳｸﾘﾏﾁ",
        ]);

        City::create([
            "id" => 643,
            "prefecture_id" => 12,
            "name" => "山武郡芝山町",
            "romaji" => "sanbugunshibayamamachi",
            "hiragana" => "さんぶぐんしばやままち",
            "katakana" => "サンブグンシバヤママチ",
            "katakana_half" => "ｻﾝﾌﾞｸﾞﾝｼﾊﾞﾔﾏﾏﾁ",
        ]);

        City::create([
            "id" => 644,
            "prefecture_id" => 12,
            "name" => "山武郡横芝光町",
            "romaji" => "sanbugunyokoshibahikarimachi",
            "hiragana" => "さんぶぐんよこしばひかりまち",
            "katakana" => "サンブグンヨコシバヒカリマチ",
            "katakana_half" => "ｻﾝﾌﾞｸﾞﾝﾖｺｼﾊﾞﾋｶﾘﾏﾁ",
        ]);

        City::create([
            "id" => 645,
            "prefecture_id" => 12,
            "name" => "長生郡一宮町",
            "romaji" => "chouseigunichinomiyamachi",
            "hiragana" => "ちょうせいぐんいちのみやまち",
            "katakana" => "チョウセイグンイチノミヤマチ",
            "katakana_half" => "ﾁｮｳｾｲｸﾞﾝｲﾁﾉﾐﾔﾏﾁ",
        ]);

        City::create([
            "id" => 646,
            "prefecture_id" => 12,
            "name" => "長生郡睦沢町",
            "romaji" => "chouseigunmutsuzawamachi",
            "hiragana" => "ちょうせいぐんむつざわまち",
            "katakana" => "チョウセイグンムツザワマチ",
            "katakana_half" => "ﾁｮｳｾｲｸﾞﾝﾑﾂｻﾞﾜﾏﾁ",
        ]);

        City::create([
            "id" => 647,
            "prefecture_id" => 12,
            "name" => "長生郡長生村",
            "romaji" => "chouseigunchouseimura",
            "hiragana" => "ちょうせいぐんちょうせいむら",
            "katakana" => "チョウセイグンチョウセイムラ",
            "katakana_half" => "ﾁｮｳｾｲｸﾞﾝﾁｮｳｾｲﾑﾗ",
        ]);

        City::create([
            "id" => 648,
            "prefecture_id" => 12,
            "name" => "長生郡白子町",
            "romaji" => "chouseigunshirakomachi",
            "hiragana" => "ちょうせいぐんしらこまち",
            "katakana" => "チョウセイグンシラコマチ",
            "katakana_half" => "ﾁｮｳｾｲｸﾞﾝｼﾗｺﾏﾁ",
        ]);

        City::create([
            "id" => 649,
            "prefecture_id" => 12,
            "name" => "長生郡長柄町",
            "romaji" => "chouseigunnagaramachi",
            "hiragana" => "ちょうせいぐんながらまち",
            "katakana" => "チョウセイグンナガラマチ",
            "katakana_half" => "ﾁｮｳｾｲｸﾞﾝﾅｶﾞﾗﾏﾁ",
        ]);

        City::create([
            "id" => 650,
            "prefecture_id" => 12,
            "name" => "長生郡長南町",
            "romaji" => "chouseigunchounanmachi",
            "hiragana" => "ちょうせいぐんちょうなんまち",
            "katakana" => "チョウセイグンチョウナンマチ",
            "katakana_half" => "ﾁｮｳｾｲｸﾞﾝﾁｮｳﾅﾝﾏﾁ",
        ]);

        City::create([
            "id" => 651,
            "prefecture_id" => 12,
            "name" => "夷隅郡大多喜町",
            "romaji" => "isumigunootakimachi",
            "hiragana" => "いすみぐんおおたきまち",
            "katakana" => "イスミグンオオタキマチ",
            "katakana_half" => "ｲｽﾐｸﾞﾝｵｵﾀｷﾏﾁ",
        ]);

        City::create([
            "id" => 652,
            "prefecture_id" => 12,
            "name" => "夷隅郡御宿町",
            "romaji" => "isumigunonjukumachi",
            "hiragana" => "いすみぐんおんじゅくまち",
            "katakana" => "イスミグンオンジュクマチ",
            "katakana_half" => "ｲｽﾐｸﾞﾝｵﾝｼﾞｭｸﾏﾁ",
        ]);

        City::create([
            "id" => 653,
            "prefecture_id" => 12,
            "name" => "安房郡鋸南町",
            "romaji" => "awagunkyonanmachi",
            "hiragana" => "あわぐんきょなんまち",
            "katakana" => "アワグンキョナンマチ",
            "katakana_half" => "ｱﾜｸﾞﾝｷｮﾅﾝﾏﾁ",
        ]);

        City::create([
            "id" => 654,
            "prefecture_id" => 13,
            "name" => "千代田区",
            "romaji" => "chiyodaku",
            "hiragana" => "ちよだく",
            "katakana" => "チヨダク",
            "katakana_half" => "ﾁﾖﾀﾞｸ",
        ]);

        City::create([
            "id" => 655,
            "prefecture_id" => 13,
            "name" => "中央区",
            "romaji" => "chuuouku",
            "hiragana" => "ちゅうおうく",
            "katakana" => "チュウオウク",
            "katakana_half" => "ﾁｭｳｵｳｸ",
        ]);

        City::create([
            "id" => 656,
            "prefecture_id" => 13,
            "name" => "港区",
            "romaji" => "minatoku",
            "hiragana" => "みなとく",
            "katakana" => "ミナトク",
            "katakana_half" => "ﾐﾅﾄｸ",
        ]);

        City::create([
            "id" => 657,
            "prefecture_id" => 13,
            "name" => "新宿区",
            "romaji" => "shinjukuku",
            "hiragana" => "しんじゅくく",
            "katakana" => "シンジュクク",
            "katakana_half" => "ｼﾝｼﾞｭｸｸ",
        ]);

        City::create([
            "id" => 658,
            "prefecture_id" => 13,
            "name" => "文京区",
            "romaji" => "bunkyouku",
            "hiragana" => "ぶんきょうく",
            "katakana" => "ブンキョウク",
            "katakana_half" => "ﾌﾞﾝｷｮｳｸ",
        ]);

        City::create([
            "id" => 659,
            "prefecture_id" => 13,
            "name" => "台東区",
            "romaji" => "taitouku",
            "hiragana" => "たいとうく",
            "katakana" => "タイトウク",
            "katakana_half" => "ﾀｲﾄｳｸ",
        ]);

        City::create([
            "id" => 660,
            "prefecture_id" => 13,
            "name" => "墨田区",
            "romaji" => "sumidaku",
            "hiragana" => "すみだく",
            "katakana" => "スミダク",
            "katakana_half" => "ｽﾐﾀﾞｸ",
        ]);

        City::create([
            "id" => 661,
            "prefecture_id" => 13,
            "name" => "江東区",
            "romaji" => "koutouku",
            "hiragana" => "こうとうく",
            "katakana" => "コウトウク",
            "katakana_half" => "ｺｳﾄｳｸ",
        ]);

        City::create([
            "id" => 662,
            "prefecture_id" => 13,
            "name" => "品川区",
            "romaji" => "shinagawaku",
            "hiragana" => "しながわく",
            "katakana" => "シナガワク",
            "katakana_half" => "ｼﾅｶﾞﾜｸ",
        ]);

        City::create([
            "id" => 663,
            "prefecture_id" => 13,
            "name" => "目黒区",
            "romaji" => "meguroku",
            "hiragana" => "めぐろく",
            "katakana" => "メグロク",
            "katakana_half" => "ﾒｸﾞﾛｸ",
        ]);

        City::create([
            "id" => 664,
            "prefecture_id" => 13,
            "name" => "大田区",
            "romaji" => "ootaku",
            "hiragana" => "おおたく",
            "katakana" => "オオタク",
            "katakana_half" => "ｵｵﾀｸ",
        ]);

        City::create([
            "id" => 665,
            "prefecture_id" => 13,
            "name" => "世田谷区",
            "romaji" => "setagayaku",
            "hiragana" => "せたがやく",
            "katakana" => "セタガヤク",
            "katakana_half" => "ｾﾀｶﾞﾔｸ",
        ]);

        City::create([
            "id" => 666,
            "prefecture_id" => 13,
            "name" => "渋谷区",
            "romaji" => "shibuyaku",
            "hiragana" => "しぶやく",
            "katakana" => "シブヤク",
            "katakana_half" => "ｼﾌﾞﾔｸ",
        ]);

        City::create([
            "id" => 667,
            "prefecture_id" => 13,
            "name" => "中野区",
            "romaji" => "nakanoku",
            "hiragana" => "なかのく",
            "katakana" => "ナカノク",
            "katakana_half" => "ﾅｶﾉｸ",
        ]);

        City::create([
            "id" => 668,
            "prefecture_id" => 13,
            "name" => "杉並区",
            "romaji" => "suginamiku",
            "hiragana" => "すぎなみく",
            "katakana" => "スギナミク",
            "katakana_half" => "ｽｷﾞﾅﾐｸ",
        ]);

        City::create([
            "id" => 669,
            "prefecture_id" => 13,
            "name" => "豊島区",
            "romaji" => "toshimaku",
            "hiragana" => "としまく",
            "katakana" => "トシマク",
            "katakana_half" => "ﾄｼﾏｸ",
        ]);

        City::create([
            "id" => 670,
            "prefecture_id" => 13,
            "name" => "北区",
            "romaji" => "kitaku",
            "hiragana" => "きたく",
            "katakana" => "キタク",
            "katakana_half" => "ｷﾀｸ",
        ]);

        City::create([
            "id" => 671,
            "prefecture_id" => 13,
            "name" => "荒川区",
            "romaji" => "arakawaku",
            "hiragana" => "あらかわく",
            "katakana" => "アラカワク",
            "katakana_half" => "ｱﾗｶﾜｸ",
        ]);

        City::create([
            "id" => 672,
            "prefecture_id" => 13,
            "name" => "板橋区",
            "romaji" => "itabashiku",
            "hiragana" => "いたばしく",
            "katakana" => "イタバシク",
            "katakana_half" => "ｲﾀﾊﾞｼｸ",
        ]);

        City::create([
            "id" => 673,
            "prefecture_id" => 13,
            "name" => "練馬区",
            "romaji" => "nerimaku",
            "hiragana" => "ねりまく",
            "katakana" => "ネリマク",
            "katakana_half" => "ﾈﾘﾏｸ",
        ]);

        City::create([
            "id" => 674,
            "prefecture_id" => 13,
            "name" => "足立区",
            "romaji" => "adachiku",
            "hiragana" => "あだちく",
            "katakana" => "アダチク",
            "katakana_half" => "ｱﾀﾞﾁｸ",
        ]);

        City::create([
            "id" => 675,
            "prefecture_id" => 13,
            "name" => "葛飾区",
            "romaji" => "katsushikaku",
            "hiragana" => "かつしかく",
            "katakana" => "カツシカク",
            "katakana_half" => "ｶﾂｼｶｸ",
        ]);

        City::create([
            "id" => 676,
            "prefecture_id" => 13,
            "name" => "江戸川区",
            "romaji" => "edogawaku",
            "hiragana" => "えどがわく",
            "katakana" => "エドガワク",
            "katakana_half" => "ｴﾄﾞｶﾞﾜｸ",
        ]);

        City::create([
            "id" => 677,
            "prefecture_id" => 13,
            "name" => "八王子市",
            "romaji" => "hachioujishi",
            "hiragana" => "はちおうじし",
            "katakana" => "ハチオウジシ",
            "katakana_half" => "ﾊﾁｵｳｼﾞｼ",
        ]);

        City::create([
            "id" => 678,
            "prefecture_id" => 13,
            "name" => "立川市",
            "romaji" => "tachikawashi",
            "hiragana" => "たちかわし",
            "katakana" => "タチカワシ",
            "katakana_half" => "ﾀﾁｶﾜｼ",
        ]);

        City::create([
            "id" => 679,
            "prefecture_id" => 13,
            "name" => "武蔵野市",
            "romaji" => "musashinoshi",
            "hiragana" => "むさしのし",
            "katakana" => "ムサシノシ",
            "katakana_half" => "ﾑｻｼﾉｼ",
        ]);

        City::create([
            "id" => 680,
            "prefecture_id" => 13,
            "name" => "三鷹市",
            "romaji" => "mitakashi",
            "hiragana" => "みたかし",
            "katakana" => "ミタカシ",
            "katakana_half" => "ﾐﾀｶｼ",
        ]);

        City::create([
            "id" => 681,
            "prefecture_id" => 13,
            "name" => "青梅市",
            "romaji" => "oumeshi",
            "hiragana" => "おうめし",
            "katakana" => "オウメシ",
            "katakana_half" => "ｵｳﾒｼ",
        ]);

        City::create([
            "id" => 682,
            "prefecture_id" => 13,
            "name" => "府中市",
            "romaji" => "fuchuushi",
            "hiragana" => "ふちゅうし",
            "katakana" => "フチュウシ",
            "katakana_half" => "ﾌﾁｭｳｼ",
        ]);

        City::create([
            "id" => 683,
            "prefecture_id" => 13,
            "name" => "昭島市",
            "romaji" => "akishimashi",
            "hiragana" => "あきしまし",
            "katakana" => "アキシマシ",
            "katakana_half" => "ｱｷｼﾏｼ",
        ]);

        City::create([
            "id" => 684,
            "prefecture_id" => 13,
            "name" => "調布市",
            "romaji" => "choufushi",
            "hiragana" => "ちょうふし",
            "katakana" => "チョウフシ",
            "katakana_half" => "ﾁｮｳﾌｼ",
        ]);

        City::create([
            "id" => 685,
            "prefecture_id" => 13,
            "name" => "町田市",
            "romaji" => "machidashi",
            "hiragana" => "まちだし",
            "katakana" => "マチダシ",
            "katakana_half" => "ﾏﾁﾀﾞｼ",
        ]);

        City::create([
            "id" => 686,
            "prefecture_id" => 13,
            "name" => "小金井市",
            "romaji" => "koganeishi",
            "hiragana" => "こがねいし",
            "katakana" => "コガネイシ",
            "katakana_half" => "ｺｶﾞﾈｲｼ",
        ]);

        City::create([
            "id" => 687,
            "prefecture_id" => 13,
            "name" => "小平市",
            "romaji" => "kodairashi",
            "hiragana" => "こだいらし",
            "katakana" => "コダイラシ",
            "katakana_half" => "ｺﾀﾞｲﾗｼ",
        ]);

        City::create([
            "id" => 688,
            "prefecture_id" => 13,
            "name" => "日野市",
            "romaji" => "hinoshi",
            "hiragana" => "ひのし",
            "katakana" => "ヒノシ",
            "katakana_half" => "ﾋﾉｼ",
        ]);

        City::create([
            "id" => 689,
            "prefecture_id" => 13,
            "name" => "東村山市",
            "romaji" => "higashimurayamashi",
            "hiragana" => "ひがしむらやまし",
            "katakana" => "ヒガシムラヤマシ",
            "katakana_half" => "ﾋｶﾞｼﾑﾗﾔﾏｼ",
        ]);

        City::create([
            "id" => 690,
            "prefecture_id" => 13,
            "name" => "国分寺市",
            "romaji" => "kokubunjishi",
            "hiragana" => "こくぶんじし",
            "katakana" => "コクブンジシ",
            "katakana_half" => "ｺｸﾌﾞﾝｼﾞｼ",
        ]);

        City::create([
            "id" => 691,
            "prefecture_id" => 13,
            "name" => "国立市",
            "romaji" => "kunitachishi",
            "hiragana" => "くにたちし",
            "katakana" => "クニタチシ",
            "katakana_half" => "ｸﾆﾀﾁｼ",
        ]);

        City::create([
            "id" => 692,
            "prefecture_id" => 13,
            "name" => "福生市",
            "romaji" => "fussashi",
            "hiragana" => "ふっさし",
            "katakana" => "フッサシ",
            "katakana_half" => "ﾌｯｻｼ",
        ]);

        City::create([
            "id" => 693,
            "prefecture_id" => 13,
            "name" => "狛江市",
            "romaji" => "komaeshi",
            "hiragana" => "こまえし",
            "katakana" => "コマエシ",
            "katakana_half" => "ｺﾏｴｼ",
        ]);

        City::create([
            "id" => 694,
            "prefecture_id" => 13,
            "name" => "東大和市",
            "romaji" => "higashiyamatoshi",
            "hiragana" => "ひがしやまとし",
            "katakana" => "ヒガシヤマトシ",
            "katakana_half" => "ﾋｶﾞｼﾔﾏﾄｼ",
        ]);

        City::create([
            "id" => 695,
            "prefecture_id" => 13,
            "name" => "清瀬市",
            "romaji" => "kiyoseshi",
            "hiragana" => "きよせし",
            "katakana" => "キヨセシ",
            "katakana_half" => "ｷﾖｾｼ",
        ]);

        City::create([
            "id" => 696,
            "prefecture_id" => 13,
            "name" => "東久留米市",
            "romaji" => "higashikurumeshi",
            "hiragana" => "ひがしくるめし",
            "katakana" => "ヒガシクルメシ",
            "katakana_half" => "ﾋｶﾞｼｸﾙﾒｼ",
        ]);

        City::create([
            "id" => 697,
            "prefecture_id" => 13,
            "name" => "武蔵村山市",
            "romaji" => "musashimurayamashi",
            "hiragana" => "むさしむらやまし",
            "katakana" => "ムサシムラヤマシ",
            "katakana_half" => "ﾑｻｼﾑﾗﾔﾏｼ",
        ]);

        City::create([
            "id" => 698,
            "prefecture_id" => 13,
            "name" => "多摩市",
            "romaji" => "tamashi",
            "hiragana" => "たまし",
            "katakana" => "タマシ",
            "katakana_half" => "ﾀﾏｼ",
        ]);

        City::create([
            "id" => 699,
            "prefecture_id" => 13,
            "name" => "稲城市",
            "romaji" => "inagishi",
            "hiragana" => "いなぎし",
            "katakana" => "イナギシ",
            "katakana_half" => "ｲﾅｷﾞｼ",
        ]);

        City::create([
            "id" => 700,
            "prefecture_id" => 13,
            "name" => "羽村市",
            "romaji" => "hamurashi",
            "hiragana" => "はむらし",
            "katakana" => "ハムラシ",
            "katakana_half" => "ﾊﾑﾗｼ",
        ]);

        City::create([
            "id" => 701,
            "prefecture_id" => 13,
            "name" => "あきる野市",
            "romaji" => "akirunoshi",
            "hiragana" => "あきるのし",
            "katakana" => "アキルノシ",
            "katakana_half" => "ｱｷﾙﾉｼ",
        ]);

        City::create([
            "id" => 702,
            "prefecture_id" => 13,
            "name" => "西東京市",
            "romaji" => "nishitoukyoushi",
            "hiragana" => "にしとうきょうし",
            "katakana" => "ニシトウキョウシ",
            "katakana_half" => "ﾆｼﾄｳｷｮｳｼ",
        ]);

        City::create([
            "id" => 703,
            "prefecture_id" => 13,
            "name" => "西多摩郡瑞穂町",
            "romaji" => "nishitamagunmizuhomachi",
            "hiragana" => "にしたまぐんみずほまち",
            "katakana" => "ニシタマグンミズホマチ",
            "katakana_half" => "ﾆｼﾀﾏｸﾞﾝﾐｽﾞﾎﾏﾁ",
        ]);

        City::create([
            "id" => 704,
            "prefecture_id" => 13,
            "name" => "西多摩郡日の出町",
            "romaji" => "nishitamagunhinodemachi",
            "hiragana" => "にしたまぐんひのでまち",
            "katakana" => "ニシタマグンヒノデマチ",
            "katakana_half" => "ﾆｼﾀﾏｸﾞﾝﾋﾉﾃﾞﾏﾁ",
        ]);

        City::create([
            "id" => 705,
            "prefecture_id" => 13,
            "name" => "西多摩郡檜原村",
            "romaji" => "nishitamagunhinoharamura",
            "hiragana" => "にしたまぐんひのはらむら",
            "katakana" => "ニシタマグンヒノハラムラ",
            "katakana_half" => "ﾆｼﾀﾏｸﾞﾝﾋﾉﾊﾗﾑﾗ",
        ]);

        City::create([
            "id" => 706,
            "prefecture_id" => 13,
            "name" => "西多摩郡奥多摩町",
            "romaji" => "nishitamagunokutamamachi",
            "hiragana" => "にしたまぐんおくたままち",
            "katakana" => "ニシタマグンオクタママチ",
            "katakana_half" => "ﾆｼﾀﾏｸﾞﾝｵｸﾀﾏﾏﾁ",
        ]);

        City::create([
            "id" => 707,
            "prefecture_id" => 13,
            "name" => "大島町",
            "romaji" => "ooshimamachi",
            "hiragana" => "おおしままち",
            "katakana" => "オオシママチ",
            "katakana_half" => "ｵｵｼﾏﾏﾁ",
        ]);

        City::create([
            "id" => 708,
            "prefecture_id" => 13,
            "name" => "利島村",
            "romaji" => "toshimamura",
            "hiragana" => "としまむら",
            "katakana" => "トシマムラ",
            "katakana_half" => "ﾄｼﾏﾑﾗ",
        ]);

        City::create([
            "id" => 709,
            "prefecture_id" => 13,
            "name" => "新島村",
            "romaji" => "niijimamura",
            "hiragana" => "にいじまむら",
            "katakana" => "ニイジマムラ",
            "katakana_half" => "ﾆｲｼﾞﾏﾑﾗ",
        ]);

        City::create([
            "id" => 710,
            "prefecture_id" => 13,
            "name" => "神津島村",
            "romaji" => "kouzushimamura",
            "hiragana" => "こうづしまむら",
            "katakana" => "コウヅシマムラ",
            "katakana_half" => "ｺｳﾂﾞｼﾏﾑﾗ",
        ]);

        City::create([
            "id" => 711,
            "prefecture_id" => 13,
            "name" => "三宅島三宅村",
            "romaji" => "miyakejimamiyakemura",
            "hiragana" => "みやけじまみやけむら",
            "katakana" => "ミヤケジマミヤケムラ",
            "katakana_half" => "ﾐﾔｹｼﾞﾏﾐﾔｹﾑﾗ",
        ]);

        City::create([
            "id" => 712,
            "prefecture_id" => 13,
            "name" => "御蔵島村",
            "romaji" => "mikurajimamura",
            "hiragana" => "みくらじまむら",
            "katakana" => "ミクラジマムラ",
            "katakana_half" => "ﾐｸﾗｼﾞﾏﾑﾗ",
        ]);

        City::create([
            "id" => 713,
            "prefecture_id" => 13,
            "name" => "八丈島八丈町",
            "romaji" => "hachijoujimahachijoumachi",
            "hiragana" => "はちじょうじまはちじょうまち",
            "katakana" => "ハチジョウジマハチジョウマチ",
            "katakana_half" => "ﾊﾁｼﾞｮｳｼﾞﾏﾊﾁｼﾞｮｳﾏﾁ",
        ]);

        City::create([
            "id" => 714,
            "prefecture_id" => 13,
            "name" => "青ヶ島村",
            "romaji" => "aogashimamura",
            "hiragana" => "あおがしまむら",
            "katakana" => "アオガシマムラ",
            "katakana_half" => "ｱｵｶﾞｼﾏﾑﾗ",
        ]);

        City::create([
            "id" => 715,
            "prefecture_id" => 13,
            "name" => "小笠原村",
            "romaji" => "ogasawaramura",
            "hiragana" => "おがさわらむら",
            "katakana" => "オガサワラムラ",
            "katakana_half" => "ｵｶﾞｻﾜﾗﾑﾗ",
        ]);

        City::create([
            "id" => 716,
            "prefecture_id" => 14,
            "name" => "横浜市鶴見区",
            "romaji" => "yokohamashitsurumiku",
            "hiragana" => "よこはましつるみく",
            "katakana" => "ヨコハマシツルミク",
            "katakana_half" => "ﾖｺﾊﾏｼﾂﾙﾐｸ",
        ]);

        City::create([
            "id" => 717,
            "prefecture_id" => 14,
            "name" => "横浜市神奈川区",
            "romaji" => "yokohamashikanagawaku",
            "hiragana" => "よこはましかながわく",
            "katakana" => "ヨコハマシカナガワク",
            "katakana_half" => "ﾖｺﾊﾏｼｶﾅｶﾞﾜｸ",
        ]);

        City::create([
            "id" => 718,
            "prefecture_id" => 14,
            "name" => "横浜市西区",
            "romaji" => "yokohamashinishiku",
            "hiragana" => "よこはましにしく",
            "katakana" => "ヨコハマシニシク",
            "katakana_half" => "ﾖｺﾊﾏｼﾆｼｸ",
        ]);

        City::create([
            "id" => 719,
            "prefecture_id" => 14,
            "name" => "横浜市中区",
            "romaji" => "yokohamashinakaku",
            "hiragana" => "よこはましなかく",
            "katakana" => "ヨコハマシナカク",
            "katakana_half" => "ﾖｺﾊﾏｼﾅｶｸ",
        ]);

        City::create([
            "id" => 720,
            "prefecture_id" => 14,
            "name" => "横浜市南区",
            "romaji" => "yokohamashiminamiku",
            "hiragana" => "よこはましみなみく",
            "katakana" => "ヨコハマシミナミク",
            "katakana_half" => "ﾖｺﾊﾏｼﾐﾅﾐｸ",
        ]);

        City::create([
            "id" => 721,
            "prefecture_id" => 14,
            "name" => "横浜市保土ケ谷区",
            "romaji" => "yokohamashihodogayaku",
            "hiragana" => "よこはましほどがやく",
            "katakana" => "ヨコハマシホドガヤク",
            "katakana_half" => "ﾖｺﾊﾏｼﾎﾄﾞｶﾞﾔｸ",
        ]);

        City::create([
            "id" => 722,
            "prefecture_id" => 14,
            "name" => "横浜市磯子区",
            "romaji" => "yokohamashiisogoku",
            "hiragana" => "よこはましいそごく",
            "katakana" => "ヨコハマシイソゴク",
            "katakana_half" => "ﾖｺﾊﾏｼｲｿｺﾞｸ",
        ]);

        City::create([
            "id" => 723,
            "prefecture_id" => 14,
            "name" => "横浜市金沢区",
            "romaji" => "yokohamashikanazawaku",
            "hiragana" => "よこはましかなざわく",
            "katakana" => "ヨコハマシカナザワク",
            "katakana_half" => "ﾖｺﾊﾏｼｶﾅｻﾞﾜｸ",
        ]);

        City::create([
            "id" => 724,
            "prefecture_id" => 14,
            "name" => "横浜市港北区",
            "romaji" => "yokohamashikouhokuku",
            "hiragana" => "よこはましこうほくく",
            "katakana" => "ヨコハマシコウホクク",
            "katakana_half" => "ﾖｺﾊﾏｼｺｳﾎｸｸ",
        ]);

        City::create([
            "id" => 725,
            "prefecture_id" => 14,
            "name" => "横浜市戸塚区",
            "romaji" => "yokohamashitotsukaku",
            "hiragana" => "よこはましとつかく",
            "katakana" => "ヨコハマシトツカク",
            "katakana_half" => "ﾖｺﾊﾏｼﾄﾂｶｸ",
        ]);

        City::create([
            "id" => 726,
            "prefecture_id" => 14,
            "name" => "横浜市港南区",
            "romaji" => "yokohamashikounanku",
            "hiragana" => "よこはましこうなんく",
            "katakana" => "ヨコハマシコウナンク",
            "katakana_half" => "ﾖｺﾊﾏｼｺｳﾅﾝｸ",
        ]);

        City::create([
            "id" => 727,
            "prefecture_id" => 14,
            "name" => "横浜市旭区",
            "romaji" => "yokohamashiasahiku",
            "hiragana" => "よこはましあさひく",
            "katakana" => "ヨコハマシアサヒク",
            "katakana_half" => "ﾖｺﾊﾏｼｱｻﾋｸ",
        ]);

        City::create([
            "id" => 728,
            "prefecture_id" => 14,
            "name" => "横浜市緑区",
            "romaji" => "yokohamashimidoriku",
            "hiragana" => "よこはましみどりく",
            "katakana" => "ヨコハマシミドリク",
            "katakana_half" => "ﾖｺﾊﾏｼﾐﾄﾞﾘｸ",
        ]);

        City::create([
            "id" => 729,
            "prefecture_id" => 14,
            "name" => "横浜市瀬谷区",
            "romaji" => "yokohamashiseyaku",
            "hiragana" => "よこはましせやく",
            "katakana" => "ヨコハマシセヤク",
            "katakana_half" => "ﾖｺﾊﾏｼｾﾔｸ",
        ]);

        City::create([
            "id" => 730,
            "prefecture_id" => 14,
            "name" => "横浜市栄区",
            "romaji" => "yokohamashisakaeku",
            "hiragana" => "よこはましさかえく",
            "katakana" => "ヨコハマシサカエク",
            "katakana_half" => "ﾖｺﾊﾏｼｻｶｴｸ",
        ]);

        City::create([
            "id" => 731,
            "prefecture_id" => 14,
            "name" => "横浜市泉区",
            "romaji" => "yokohamashiizumiku",
            "hiragana" => "よこはましいずみく",
            "katakana" => "ヨコハマシイズミク",
            "katakana_half" => "ﾖｺﾊﾏｼｲｽﾞﾐｸ",
        ]);

        City::create([
            "id" => 732,
            "prefecture_id" => 14,
            "name" => "横浜市青葉区",
            "romaji" => "yokohamashiaobaku",
            "hiragana" => "よこはましあおばく",
            "katakana" => "ヨコハマシアオバク",
            "katakana_half" => "ﾖｺﾊﾏｼｱｵﾊﾞｸ",
        ]);

        City::create([
            "id" => 733,
            "prefecture_id" => 14,
            "name" => "横浜市都筑区",
            "romaji" => "yokohamashitsuzukiku",
            "hiragana" => "よこはましつづきく",
            "katakana" => "ヨコハマシツヅキク",
            "katakana_half" => "ﾖｺﾊﾏｼﾂﾂﾞｷｸ",
        ]);

        City::create([
            "id" => 734,
            "prefecture_id" => 14,
            "name" => "川崎市川崎区",
            "romaji" => "kawasakishikawasakiku",
            "hiragana" => "かわさきしかわさきく",
            "katakana" => "カワサキシカワサキク",
            "katakana_half" => "ｶﾜｻｷｼｶﾜｻｷｸ",
        ]);

        City::create([
            "id" => 735,
            "prefecture_id" => 14,
            "name" => "川崎市幸区",
            "romaji" => "kawasakishisaiwaiku",
            "hiragana" => "かわさきしさいわいく",
            "katakana" => "カワサキシサイワイク",
            "katakana_half" => "ｶﾜｻｷｼｻｲﾜｲｸ",
        ]);

        City::create([
            "id" => 736,
            "prefecture_id" => 14,
            "name" => "川崎市中原区",
            "romaji" => "kawasakishinakaharaku",
            "hiragana" => "かわさきしなかはらく",
            "katakana" => "カワサキシナカハラク",
            "katakana_half" => "ｶﾜｻｷｼﾅｶﾊﾗｸ",
        ]);

        City::create([
            "id" => 737,
            "prefecture_id" => 14,
            "name" => "川崎市高津区",
            "romaji" => "kawasakishitakatsuku",
            "hiragana" => "かわさきしたかつく",
            "katakana" => "カワサキシタカツク",
            "katakana_half" => "ｶﾜｻｷｼﾀｶﾂｸ",
        ]);

        City::create([
            "id" => 738,
            "prefecture_id" => 14,
            "name" => "川崎市多摩区",
            "romaji" => "kawasakishitamaku",
            "hiragana" => "かわさきしたまく",
            "katakana" => "カワサキシタマク",
            "katakana_half" => "ｶﾜｻｷｼﾀﾏｸ",
        ]);

        City::create([
            "id" => 739,
            "prefecture_id" => 14,
            "name" => "川崎市宮前区",
            "romaji" => "kawasakishimiyamaeku",
            "hiragana" => "かわさきしみやまえく",
            "katakana" => "カワサキシミヤマエク",
            "katakana_half" => "ｶﾜｻｷｼﾐﾔﾏｴｸ",
        ]);

        City::create([
            "id" => 740,
            "prefecture_id" => 14,
            "name" => "川崎市麻生区",
            "romaji" => "kawasakishiasaoku",
            "hiragana" => "かわさきしあさおく",
            "katakana" => "カワサキシアサオク",
            "katakana_half" => "ｶﾜｻｷｼｱｻｵｸ",
        ]);

        City::create([
            "id" => 741,
            "prefecture_id" => 14,
            "name" => "相模原市緑区",
            "romaji" => "sagamiharashimidoriku",
            "hiragana" => "さがみはらしみどりく",
            "katakana" => "サガミハラシミドリク",
            "katakana_half" => "ｻｶﾞﾐﾊﾗｼﾐﾄﾞﾘｸ",
        ]);

        City::create([
            "id" => 742,
            "prefecture_id" => 14,
            "name" => "相模原市中央区",
            "romaji" => "sagamiharashichuuouku",
            "hiragana" => "さがみはらしちゅうおうく",
            "katakana" => "サガミハラシチュウオウク",
            "katakana_half" => "ｻｶﾞﾐﾊﾗｼﾁｭｳｵｳｸ",
        ]);

        City::create([
            "id" => 743,
            "prefecture_id" => 14,
            "name" => "相模原市南区",
            "romaji" => "sagamiharashiminamiku",
            "hiragana" => "さがみはらしみなみく",
            "katakana" => "サガミハラシミナミク",
            "katakana_half" => "ｻｶﾞﾐﾊﾗｼﾐﾅﾐｸ",
        ]);

        City::create([
            "id" => 744,
            "prefecture_id" => 14,
            "name" => "横須賀市",
            "romaji" => "yokosukashi",
            "hiragana" => "よこすかし",
            "katakana" => "ヨコスカシ",
            "katakana_half" => "ﾖｺｽｶｼ",
        ]);

        City::create([
            "id" => 745,
            "prefecture_id" => 14,
            "name" => "平塚市",
            "romaji" => "hiratsukashi",
            "hiragana" => "ひらつかし",
            "katakana" => "ヒラツカシ",
            "katakana_half" => "ﾋﾗﾂｶｼ",
        ]);

        City::create([
            "id" => 746,
            "prefecture_id" => 14,
            "name" => "鎌倉市",
            "romaji" => "kamakurashi",
            "hiragana" => "かまくらし",
            "katakana" => "カマクラシ",
            "katakana_half" => "ｶﾏｸﾗｼ",
        ]);

        City::create([
            "id" => 747,
            "prefecture_id" => 14,
            "name" => "藤沢市",
            "romaji" => "fujisawashi",
            "hiragana" => "ふじさわし",
            "katakana" => "フジサワシ",
            "katakana_half" => "ﾌｼﾞｻﾜｼ",
        ]);

        City::create([
            "id" => 748,
            "prefecture_id" => 14,
            "name" => "小田原市",
            "romaji" => "odawarashi",
            "hiragana" => "おだわらし",
            "katakana" => "オダワラシ",
            "katakana_half" => "ｵﾀﾞﾜﾗｼ",
        ]);

        City::create([
            "id" => 749,
            "prefecture_id" => 14,
            "name" => "茅ヶ崎市",
            "romaji" => "chigasakishi",
            "hiragana" => "ちがさきし",
            "katakana" => "チガサキシ",
            "katakana_half" => "ﾁｶﾞｻｷｼ",
        ]);

        City::create([
            "id" => 750,
            "prefecture_id" => 14,
            "name" => "逗子市",
            "romaji" => "zushishi",
            "hiragana" => "ずしし",
            "katakana" => "ズシシ",
            "katakana_half" => "ｽﾞｼｼ",
        ]);

        City::create([
            "id" => 751,
            "prefecture_id" => 14,
            "name" => "三浦市",
            "romaji" => "miurashi",
            "hiragana" => "みうらし",
            "katakana" => "ミウラシ",
            "katakana_half" => "ﾐｳﾗｼ",
        ]);

        City::create([
            "id" => 752,
            "prefecture_id" => 14,
            "name" => "秦野市",
            "romaji" => "hadanoshi",
            "hiragana" => "はだのし",
            "katakana" => "ハダノシ",
            "katakana_half" => "ﾊﾀﾞﾉｼ",
        ]);

        City::create([
            "id" => 753,
            "prefecture_id" => 14,
            "name" => "厚木市",
            "romaji" => "atsugishi",
            "hiragana" => "あつぎし",
            "katakana" => "アツギシ",
            "katakana_half" => "ｱﾂｷﾞｼ",
        ]);

        City::create([
            "id" => 754,
            "prefecture_id" => 14,
            "name" => "大和市",
            "romaji" => "yamatoshi",
            "hiragana" => "やまとし",
            "katakana" => "ヤマトシ",
            "katakana_half" => "ﾔﾏﾄｼ",
        ]);

        City::create([
            "id" => 755,
            "prefecture_id" => 14,
            "name" => "伊勢原市",
            "romaji" => "iseharashi",
            "hiragana" => "いせはらし",
            "katakana" => "イセハラシ",
            "katakana_half" => "ｲｾﾊﾗｼ",
        ]);

        City::create([
            "id" => 756,
            "prefecture_id" => 14,
            "name" => "海老名市",
            "romaji" => "ebinashi",
            "hiragana" => "えびなし",
            "katakana" => "エビナシ",
            "katakana_half" => "ｴﾋﾞﾅｼ",
        ]);

        City::create([
            "id" => 757,
            "prefecture_id" => 14,
            "name" => "座間市",
            "romaji" => "zamashi",
            "hiragana" => "ざまし",
            "katakana" => "ザマシ",
            "katakana_half" => "ｻﾞﾏｼ",
        ]);

        City::create([
            "id" => 758,
            "prefecture_id" => 14,
            "name" => "南足柄市",
            "romaji" => "minamiashigarashi",
            "hiragana" => "みなみあしがらし",
            "katakana" => "ミナミアシガラシ",
            "katakana_half" => "ﾐﾅﾐｱｼｶﾞﾗｼ",
        ]);

        City::create([
            "id" => 759,
            "prefecture_id" => 14,
            "name" => "綾瀬市",
            "romaji" => "ayaseshi",
            "hiragana" => "あやせし",
            "katakana" => "アヤセシ",
            "katakana_half" => "ｱﾔｾｼ",
        ]);

        City::create([
            "id" => 760,
            "prefecture_id" => 14,
            "name" => "三浦郡葉山町",
            "romaji" => "miuragunhayamamachi",
            "hiragana" => "みうらぐんはやままち",
            "katakana" => "ミウラグンハヤママチ",
            "katakana_half" => "ﾐｳﾗｸﾞﾝﾊﾔﾏﾏﾁ",
        ]);

        City::create([
            "id" => 761,
            "prefecture_id" => 14,
            "name" => "高座郡寒川町",
            "romaji" => "kouzagunsamukawamachi",
            "hiragana" => "こうざぐんさむかわまち",
            "katakana" => "コウザグンサムカワマチ",
            "katakana_half" => "ｺｳｻﾞｸﾞﾝｻﾑｶﾜﾏﾁ",
        ]);

        City::create([
            "id" => 762,
            "prefecture_id" => 14,
            "name" => "中郡大磯町",
            "romaji" => "nakagunooisomachi",
            "hiragana" => "なかぐんおおいそまち",
            "katakana" => "ナカグンオオイソマチ",
            "katakana_half" => "ﾅｶｸﾞﾝｵｵｲｿﾏﾁ",
        ]);

        City::create([
            "id" => 763,
            "prefecture_id" => 14,
            "name" => "中郡二宮町",
            "romaji" => "nakagunninomiyamachi",
            "hiragana" => "なかぐんにのみやまち",
            "katakana" => "ナカグンニノミヤマチ",
            "katakana_half" => "ﾅｶｸﾞﾝﾆﾉﾐﾔﾏﾁ",
        ]);

        City::create([
            "id" => 764,
            "prefecture_id" => 14,
            "name" => "足柄上郡中井町",
            "romaji" => "ashigarakamigunnakaimachi",
            "hiragana" => "あしがらかみぐんなかいまち",
            "katakana" => "アシガラカミグンナカイマチ",
            "katakana_half" => "ｱｼｶﾞﾗｶﾐｸﾞﾝﾅｶｲﾏﾁ",
        ]);

        City::create([
            "id" => 765,
            "prefecture_id" => 14,
            "name" => "足柄上郡大井町",
            "romaji" => "ashigarakamigunooimachi",
            "hiragana" => "あしがらかみぐんおおいまち",
            "katakana" => "アシガラカミグンオオイマチ",
            "katakana_half" => "ｱｼｶﾞﾗｶﾐｸﾞﾝｵｵｲﾏﾁ",
        ]);

        City::create([
            "id" => 766,
            "prefecture_id" => 14,
            "name" => "足柄上郡松田町",
            "romaji" => "ashigarakamigunmatsudamachi",
            "hiragana" => "あしがらかみぐんまつだまち",
            "katakana" => "アシガラカミグンマツダマチ",
            "katakana_half" => "ｱｼｶﾞﾗｶﾐｸﾞﾝﾏﾂﾀﾞﾏﾁ",
        ]);

        City::create([
            "id" => 767,
            "prefecture_id" => 14,
            "name" => "足柄上郡山北町",
            "romaji" => "ashigarakamigunyamakitamachi",
            "hiragana" => "あしがらかみぐんやまきたまち",
            "katakana" => "アシガラカミグンヤマキタマチ",
            "katakana_half" => "ｱｼｶﾞﾗｶﾐｸﾞﾝﾔﾏｷﾀﾏﾁ",
        ]);

        City::create([
            "id" => 768,
            "prefecture_id" => 14,
            "name" => "足柄上郡開成町",
            "romaji" => "ashigarakamigunkaiseimachi",
            "hiragana" => "あしがらかみぐんかいせいまち",
            "katakana" => "アシガラカミグンカイセイマチ",
            "katakana_half" => "ｱｼｶﾞﾗｶﾐｸﾞﾝｶｲｾｲﾏﾁ",
        ]);

        City::create([
            "id" => 769,
            "prefecture_id" => 14,
            "name" => "足柄下郡箱根町",
            "romaji" => "ashigarashimogunhakonemachi",
            "hiragana" => "あしがらしもぐんはこねまち",
            "katakana" => "アシガラシモグンハコネマチ",
            "katakana_half" => "ｱｼｶﾞﾗｼﾓｸﾞﾝﾊｺﾈﾏﾁ",
        ]);

        City::create([
            "id" => 770,
            "prefecture_id" => 14,
            "name" => "足柄下郡真鶴町",
            "romaji" => "ashigarashimogunmanazurumachi",
            "hiragana" => "あしがらしもぐんまなづるまち",
            "katakana" => "アシガラシモグンマナヅルマチ",
            "katakana_half" => "ｱｼｶﾞﾗｼﾓｸﾞﾝﾏﾅﾂﾞﾙﾏﾁ",
        ]);

        City::create([
            "id" => 771,
            "prefecture_id" => 14,
            "name" => "足柄下郡湯河原町",
            "romaji" => "ashigarashimogunyugawaramachi",
            "hiragana" => "あしがらしもぐんゆがわらまち",
            "katakana" => "アシガラシモグンユガワラマチ",
            "katakana_half" => "ｱｼｶﾞﾗｼﾓｸﾞﾝﾕｶﾞﾜﾗﾏﾁ",
        ]);

        City::create([
            "id" => 772,
            "prefecture_id" => 14,
            "name" => "愛甲郡愛川町",
            "romaji" => "aikougunaikawamachi",
            "hiragana" => "あいこうぐんあいかわまち",
            "katakana" => "アイコウグンアイカワマチ",
            "katakana_half" => "ｱｲｺｳｸﾞﾝｱｲｶﾜﾏﾁ",
        ]);

        City::create([
            "id" => 773,
            "prefecture_id" => 14,
            "name" => "愛甲郡清川村",
            "romaji" => "aikougunkiyokawamura",
            "hiragana" => "あいこうぐんきよかわむら",
            "katakana" => "アイコウグンキヨカワムラ",
            "katakana_half" => "ｱｲｺｳｸﾞﾝｷﾖｶﾜﾑﾗ",
        ]);

        City::create([
            "id" => 774,
            "prefecture_id" => 15,
            "name" => "新潟市北区",
            "romaji" => "niigatashikitaku",
            "hiragana" => "にいがたしきたく",
            "katakana" => "ニイガタシキタク",
            "katakana_half" => "ﾆｲｶﾞﾀｼｷﾀｸ",
        ]);

        City::create([
            "id" => 775,
            "prefecture_id" => 15,
            "name" => "新潟市東区",
            "romaji" => "niigatashihigashiku",
            "hiragana" => "にいがたしひがしく",
            "katakana" => "ニイガタシヒガシク",
            "katakana_half" => "ﾆｲｶﾞﾀｼﾋｶﾞｼｸ",
        ]);

        City::create([
            "id" => 776,
            "prefecture_id" => 15,
            "name" => "新潟市中央区",
            "romaji" => "niigatashichuuouku",
            "hiragana" => "にいがたしちゅうおうく",
            "katakana" => "ニイガタシチュウオウク",
            "katakana_half" => "ﾆｲｶﾞﾀｼﾁｭｳｵｳｸ",
        ]);

        City::create([
            "id" => 777,
            "prefecture_id" => 15,
            "name" => "新潟市江南区",
            "romaji" => "niigatashikounanku",
            "hiragana" => "にいがたしこうなんく",
            "katakana" => "ニイガタシコウナンク",
            "katakana_half" => "ﾆｲｶﾞﾀｼｺｳﾅﾝｸ",
        ]);

        City::create([
            "id" => 778,
            "prefecture_id" => 15,
            "name" => "新潟市秋葉区",
            "romaji" => "niigatashiakihaku",
            "hiragana" => "にいがたしあきはく",
            "katakana" => "ニイガタシアキハク",
            "katakana_half" => "ﾆｲｶﾞﾀｼｱｷﾊｸ",
        ]);

        City::create([
            "id" => 779,
            "prefecture_id" => 15,
            "name" => "新潟市南区",
            "romaji" => "niigatashiminamiku",
            "hiragana" => "にいがたしみなみく",
            "katakana" => "ニイガタシミナミク",
            "katakana_half" => "ﾆｲｶﾞﾀｼﾐﾅﾐｸ",
        ]);

        City::create([
            "id" => 780,
            "prefecture_id" => 15,
            "name" => "新潟市西区",
            "romaji" => "niigatashinishiku",
            "hiragana" => "にいがたしにしく",
            "katakana" => "ニイガタシニシク",
            "katakana_half" => "ﾆｲｶﾞﾀｼﾆｼｸ",
        ]);

        City::create([
            "id" => 781,
            "prefecture_id" => 15,
            "name" => "新潟市西蒲区",
            "romaji" => "niigatashinishikanku",
            "hiragana" => "にいがたしにしかんく",
            "katakana" => "ニイガタシニシカンク",
            "katakana_half" => "ﾆｲｶﾞﾀｼﾆｼｶﾝｸ",
        ]);

        City::create([
            "id" => 782,
            "prefecture_id" => 15,
            "name" => "長岡市",
            "romaji" => "nagaokashi",
            "hiragana" => "ながおかし",
            "katakana" => "ナガオカシ",
            "katakana_half" => "ﾅｶﾞｵｶｼ",
        ]);

        City::create([
            "id" => 783,
            "prefecture_id" => 15,
            "name" => "三条市",
            "romaji" => "sanjoushi",
            "hiragana" => "さんじょうし",
            "katakana" => "サンジョウシ",
            "katakana_half" => "ｻﾝｼﾞｮｳｼ",
        ]);

        City::create([
            "id" => 784,
            "prefecture_id" => 15,
            "name" => "柏崎市",
            "romaji" => "kashiwazakishi",
            "hiragana" => "かしわざきし",
            "katakana" => "カシワザキシ",
            "katakana_half" => "ｶｼﾜｻﾞｷｼ",
        ]);

        City::create([
            "id" => 785,
            "prefecture_id" => 15,
            "name" => "新発田市",
            "romaji" => "shibatashi",
            "hiragana" => "しばたし",
            "katakana" => "シバタシ",
            "katakana_half" => "ｼﾊﾞﾀｼ",
        ]);

        City::create([
            "id" => 786,
            "prefecture_id" => 15,
            "name" => "小千谷市",
            "romaji" => "ojiyashi",
            "hiragana" => "おぢやし",
            "katakana" => "オヂヤシ",
            "katakana_half" => "ｵﾁﾞﾔｼ",
        ]);

        City::create([
            "id" => 787,
            "prefecture_id" => 15,
            "name" => "加茂市",
            "romaji" => "kamoshi",
            "hiragana" => "かもし",
            "katakana" => "カモシ",
            "katakana_half" => "ｶﾓｼ",
        ]);

        City::create([
            "id" => 788,
            "prefecture_id" => 15,
            "name" => "十日町市",
            "romaji" => "tookamachishi",
            "hiragana" => "とおかまちし",
            "katakana" => "トオカマチシ",
            "katakana_half" => "ﾄｵｶﾏﾁｼ",
        ]);

        City::create([
            "id" => 789,
            "prefecture_id" => 15,
            "name" => "見附市",
            "romaji" => "mitsukeshi",
            "hiragana" => "みつけし",
            "katakana" => "ミツケシ",
            "katakana_half" => "ﾐﾂｹｼ",
        ]);

        City::create([
            "id" => 790,
            "prefecture_id" => 15,
            "name" => "村上市",
            "romaji" => "murakamishi",
            "hiragana" => "むらかみし",
            "katakana" => "ムラカミシ",
            "katakana_half" => "ﾑﾗｶﾐｼ",
        ]);

        City::create([
            "id" => 791,
            "prefecture_id" => 15,
            "name" => "燕市",
            "romaji" => "tsubameshi",
            "hiragana" => "つばめし",
            "katakana" => "ツバメシ",
            "katakana_half" => "ﾂﾊﾞﾒｼ",
        ]);

        City::create([
            "id" => 792,
            "prefecture_id" => 15,
            "name" => "糸魚川市",
            "romaji" => "itoigawashi",
            "hiragana" => "いといがわし",
            "katakana" => "イトイガワシ",
            "katakana_half" => "ｲﾄｲｶﾞﾜｼ",
        ]);

        City::create([
            "id" => 793,
            "prefecture_id" => 15,
            "name" => "妙高市",
            "romaji" => "myoukoushi",
            "hiragana" => "みょうこうし",
            "katakana" => "ミョウコウシ",
            "katakana_half" => "ﾐｮｳｺｳｼ",
        ]);

        City::create([
            "id" => 794,
            "prefecture_id" => 15,
            "name" => "五泉市",
            "romaji" => "gosenshi",
            "hiragana" => "ごせんし",
            "katakana" => "ゴセンシ",
            "katakana_half" => "ｺﾞｾﾝｼ",
        ]);

        City::create([
            "id" => 795,
            "prefecture_id" => 15,
            "name" => "上越市",
            "romaji" => "jouetsushi",
            "hiragana" => "じょうえつし",
            "katakana" => "ジョウエツシ",
            "katakana_half" => "ｼﾞｮｳｴﾂｼ",
        ]);

        City::create([
            "id" => 796,
            "prefecture_id" => 15,
            "name" => "阿賀野市",
            "romaji" => "aganoshi",
            "hiragana" => "あがのし",
            "katakana" => "アガノシ",
            "katakana_half" => "ｱｶﾞﾉｼ",
        ]);

        City::create([
            "id" => 797,
            "prefecture_id" => 15,
            "name" => "佐渡市",
            "romaji" => "sadoshi",
            "hiragana" => "さどし",
            "katakana" => "サドシ",
            "katakana_half" => "ｻﾄﾞｼ",
        ]);

        City::create([
            "id" => 798,
            "prefecture_id" => 15,
            "name" => "魚沼市",
            "romaji" => "uonumashi",
            "hiragana" => "うおぬまし",
            "katakana" => "ウオヌマシ",
            "katakana_half" => "ｳｵﾇﾏｼ",
        ]);

        City::create([
            "id" => 799,
            "prefecture_id" => 15,
            "name" => "南魚沼市",
            "romaji" => "minamiuonumashi",
            "hiragana" => "みなみうおぬまし",
            "katakana" => "ミナミウオヌマシ",
            "katakana_half" => "ﾐﾅﾐｳｵﾇﾏｼ",
        ]);

        City::create([
            "id" => 800,
            "prefecture_id" => 15,
            "name" => "胎内市",
            "romaji" => "tainaishi",
            "hiragana" => "たいないし",
            "katakana" => "タイナイシ",
            "katakana_half" => "ﾀｲﾅｲｼ",
        ]);

        City::create([
            "id" => 801,
            "prefecture_id" => 15,
            "name" => "北蒲原郡聖籠町",
            "romaji" => "kitakanbaragunseiroumachi",
            "hiragana" => "きたかんばらぐんせいろうまち",
            "katakana" => "キタカンバラグンセイロウマチ",
            "katakana_half" => "ｷﾀｶﾝﾊﾞﾗｸﾞﾝｾｲﾛｳﾏﾁ",
        ]);

        City::create([
            "id" => 802,
            "prefecture_id" => 15,
            "name" => "西蒲原郡弥彦村",
            "romaji" => "nishikanbaragunyahikomura",
            "hiragana" => "にしかんばらぐんやひこむら",
            "katakana" => "ニシカンバラグンヤヒコムラ",
            "katakana_half" => "ﾆｼｶﾝﾊﾞﾗｸﾞﾝﾔﾋｺﾑﾗ",
        ]);

        City::create([
            "id" => 803,
            "prefecture_id" => 15,
            "name" => "南蒲原郡田上町",
            "romaji" => "minamikanbaraguntagamimachi",
            "hiragana" => "みなみかんばらぐんたがみまち",
            "katakana" => "ミナミカンバラグンタガミマチ",
            "katakana_half" => "ﾐﾅﾐｶﾝﾊﾞﾗｸﾞﾝﾀｶﾞﾐﾏﾁ",
        ]);

        City::create([
            "id" => 804,
            "prefecture_id" => 15,
            "name" => "東蒲原郡阿賀町",
            "romaji" => "higashikanbaragunagamachi",
            "hiragana" => "ひがしかんばらぐんあがまち",
            "katakana" => "ヒガシカンバラグンアガマチ",
            "katakana_half" => "ﾋｶﾞｼｶﾝﾊﾞﾗｸﾞﾝｱｶﾞﾏﾁ",
        ]);

        City::create([
            "id" => 805,
            "prefecture_id" => 15,
            "name" => "三島郡出雲崎町",
            "romaji" => "santougunizumozakimachi",
            "hiragana" => "さんとうぐんいずもざきまち",
            "katakana" => "サントウグンイズモザキマチ",
            "katakana_half" => "ｻﾝﾄｳｸﾞﾝｲｽﾞﾓｻﾞｷﾏﾁ",
        ]);

        City::create([
            "id" => 806,
            "prefecture_id" => 15,
            "name" => "南魚沼郡湯沢町",
            "romaji" => "minamiuonumagunyuzawamachi",
            "hiragana" => "みなみうおぬまぐんゆざわまち",
            "katakana" => "ミナミウオヌマグンユザワマチ",
            "katakana_half" => "ﾐﾅﾐｳｵﾇﾏｸﾞﾝﾕｻﾞﾜﾏﾁ",
        ]);

        City::create([
            "id" => 807,
            "prefecture_id" => 15,
            "name" => "中魚沼郡津南町",
            "romaji" => "nakauonumaguntsunanmachi",
            "hiragana" => "なかうおぬまぐんつなんまち",
            "katakana" => "ナカウオヌマグンツナンマチ",
            "katakana_half" => "ﾅｶｳｵﾇﾏｸﾞﾝﾂﾅﾝﾏﾁ",
        ]);

        City::create([
            "id" => 808,
            "prefecture_id" => 15,
            "name" => "刈羽郡刈羽村",
            "romaji" => "kariwagunkariwamura",
            "hiragana" => "かりわぐんかりわむら",
            "katakana" => "カリワグンカリワムラ",
            "katakana_half" => "ｶﾘﾜｸﾞﾝｶﾘﾜﾑﾗ",
        ]);

        City::create([
            "id" => 809,
            "prefecture_id" => 15,
            "name" => "岩船郡関川村",
            "romaji" => "iwafunegunsekikawamura",
            "hiragana" => "いわふねぐんせきかわむら",
            "katakana" => "イワフネグンセキカワムラ",
            "katakana_half" => "ｲﾜﾌﾈｸﾞﾝｾｷｶﾜﾑﾗ",
        ]);

        City::create([
            "id" => 810,
            "prefecture_id" => 15,
            "name" => "岩船郡粟島浦村",
            "romaji" => "iwafunegunawashimauramura",
            "hiragana" => "いわふねぐんあわしまうらむら",
            "katakana" => "イワフネグンアワシマウラムラ",
            "katakana_half" => "ｲﾜﾌﾈｸﾞﾝｱﾜｼﾏｳﾗﾑﾗ",
        ]);

        City::create([
            "id" => 811,
            "prefecture_id" => 16,
            "name" => "富山市",
            "romaji" => "toyamashi",
            "hiragana" => "とやまし",
            "katakana" => "トヤマシ",
            "katakana_half" => "ﾄﾔﾏｼ",
        ]);

        City::create([
            "id" => 812,
            "prefecture_id" => 16,
            "name" => "高岡市",
            "romaji" => "takaokashi",
            "hiragana" => "たかおかし",
            "katakana" => "タカオカシ",
            "katakana_half" => "ﾀｶｵｶｼ",
        ]);

        City::create([
            "id" => 813,
            "prefecture_id" => 16,
            "name" => "魚津市",
            "romaji" => "uozushi",
            "hiragana" => "うおづし",
            "katakana" => "ウオヅシ",
            "katakana_half" => "ｳｵﾂﾞｼ",
        ]);

        City::create([
            "id" => 814,
            "prefecture_id" => 16,
            "name" => "氷見市",
            "romaji" => "himishi",
            "hiragana" => "ひみし",
            "katakana" => "ヒミシ",
            "katakana_half" => "ﾋﾐｼ",
        ]);

        City::create([
            "id" => 815,
            "prefecture_id" => 16,
            "name" => "滑川市",
            "romaji" => "namerikawashi",
            "hiragana" => "なめりかわし",
            "katakana" => "ナメリカワシ",
            "katakana_half" => "ﾅﾒﾘｶﾜｼ",
        ]);

        City::create([
            "id" => 816,
            "prefecture_id" => 16,
            "name" => "黒部市",
            "romaji" => "kurobeshi",
            "hiragana" => "くろべし",
            "katakana" => "クロベシ",
            "katakana_half" => "ｸﾛﾍﾞｼ",
        ]);

        City::create([
            "id" => 817,
            "prefecture_id" => 16,
            "name" => "砺波市",
            "romaji" => "tonamishi",
            "hiragana" => "となみし",
            "katakana" => "トナミシ",
            "katakana_half" => "ﾄﾅﾐｼ",
        ]);

        City::create([
            "id" => 818,
            "prefecture_id" => 16,
            "name" => "小矢部市",
            "romaji" => "oyabeshi",
            "hiragana" => "おやべし",
            "katakana" => "オヤベシ",
            "katakana_half" => "ｵﾔﾍﾞｼ",
        ]);

        City::create([
            "id" => 819,
            "prefecture_id" => 16,
            "name" => "南砺市",
            "romaji" => "nantoshi",
            "hiragana" => "なんとし",
            "katakana" => "ナントシ",
            "katakana_half" => "ﾅﾝﾄｼ",
        ]);

        City::create([
            "id" => 820,
            "prefecture_id" => 16,
            "name" => "射水市",
            "romaji" => "imizushi",
            "hiragana" => "いみずし",
            "katakana" => "イミズシ",
            "katakana_half" => "ｲﾐｽﾞｼ",
        ]);

        City::create([
            "id" => 821,
            "prefecture_id" => 16,
            "name" => "中新川郡舟橋村",
            "romaji" => "nakaniikawagunfunahashimura",
            "hiragana" => "なかにいかわぐんふなはしむら",
            "katakana" => "ナカニイカワグンフナハシムラ",
            "katakana_half" => "ﾅｶﾆｲｶﾜｸﾞﾝﾌﾅﾊｼﾑﾗ",
        ]);

        City::create([
            "id" => 822,
            "prefecture_id" => 16,
            "name" => "中新川郡上市町",
            "romaji" => "nakaniikawagunkamiichimachi",
            "hiragana" => "なかにいかわぐんかみいちまち",
            "katakana" => "ナカニイカワグンカミイチマチ",
            "katakana_half" => "ﾅｶﾆｲｶﾜｸﾞﾝｶﾐｲﾁﾏﾁ",
        ]);

        City::create([
            "id" => 823,
            "prefecture_id" => 16,
            "name" => "中新川郡立山町",
            "romaji" => "nakaniikawaguntateyamamachi",
            "hiragana" => "なかにいかわぐんたてやままち",
            "katakana" => "ナカニイカワグンタテヤママチ",
            "katakana_half" => "ﾅｶﾆｲｶﾜｸﾞﾝﾀﾃﾔﾏﾏﾁ",
        ]);

        City::create([
            "id" => 824,
            "prefecture_id" => 16,
            "name" => "下新川郡入善町",
            "romaji" => "shimoniikawagunnyuuzenmachi",
            "hiragana" => "しもにいかわぐんにゅうぜんまち",
            "katakana" => "シモニイカワグンニュウゼンマチ",
            "katakana_half" => "ｼﾓﾆｲｶﾜｸﾞﾝﾆｭｳｾﾞﾝﾏﾁ",
        ]);

        City::create([
            "id" => 825,
            "prefecture_id" => 16,
            "name" => "下新川郡朝日町",
            "romaji" => "shimoniikawagunasahimachi",
            "hiragana" => "しもにいかわぐんあさひまち",
            "katakana" => "シモニイカワグンアサヒマチ",
            "katakana_half" => "ｼﾓﾆｲｶﾜｸﾞﾝｱｻﾋﾏﾁ",
        ]);

        City::create([
            "id" => 826,
            "prefecture_id" => 17,
            "name" => "金沢市",
            "romaji" => "kanazawashi",
            "hiragana" => "かなざわし",
            "katakana" => "カナザワシ",
            "katakana_half" => "ｶﾅｻﾞﾜｼ",
        ]);

        City::create([
            "id" => 827,
            "prefecture_id" => 17,
            "name" => "七尾市",
            "romaji" => "nanaoshi",
            "hiragana" => "ななおし",
            "katakana" => "ナナオシ",
            "katakana_half" => "ﾅﾅｵｼ",
        ]);

        City::create([
            "id" => 828,
            "prefecture_id" => 17,
            "name" => "小松市",
            "romaji" => "komatsushi",
            "hiragana" => "こまつし",
            "katakana" => "コマツシ",
            "katakana_half" => "ｺﾏﾂｼ",
        ]);

        City::create([
            "id" => 829,
            "prefecture_id" => 17,
            "name" => "輪島市",
            "romaji" => "wajimashi",
            "hiragana" => "わじまし",
            "katakana" => "ワジマシ",
            "katakana_half" => "ﾜｼﾞﾏｼ",
        ]);

        City::create([
            "id" => 830,
            "prefecture_id" => 17,
            "name" => "珠洲市",
            "romaji" => "suzushi",
            "hiragana" => "すずし",
            "katakana" => "スズシ",
            "katakana_half" => "ｽｽﾞｼ",
        ]);

        City::create([
            "id" => 831,
            "prefecture_id" => 17,
            "name" => "加賀市",
            "romaji" => "kagashi",
            "hiragana" => "かがし",
            "katakana" => "カガシ",
            "katakana_half" => "ｶｶﾞｼ",
        ]);

        City::create([
            "id" => 832,
            "prefecture_id" => 17,
            "name" => "羽咋市",
            "romaji" => "hakuishi",
            "hiragana" => "はくいし",
            "katakana" => "ハクイシ",
            "katakana_half" => "ﾊｸｲｼ",
        ]);

        City::create([
            "id" => 833,
            "prefecture_id" => 17,
            "name" => "かほく市",
            "romaji" => "kahokushi",
            "hiragana" => "かほくし",
            "katakana" => "カホクシ",
            "katakana_half" => "ｶﾎｸｼ",
        ]);

        City::create([
            "id" => 834,
            "prefecture_id" => 17,
            "name" => "白山市",
            "romaji" => "hakusanshi",
            "hiragana" => "はくさんし",
            "katakana" => "ハクサンシ",
            "katakana_half" => "ﾊｸｻﾝｼ",
        ]);

        City::create([
            "id" => 835,
            "prefecture_id" => 17,
            "name" => "能美市",
            "romaji" => "nomishi",
            "hiragana" => "のみし",
            "katakana" => "ノミシ",
            "katakana_half" => "ﾉﾐｼ",
        ]);

        City::create([
            "id" => 836,
            "prefecture_id" => 17,
            "name" => "野々市市",
            "romaji" => "nonoichishi",
            "hiragana" => "ののいちし",
            "katakana" => "ノノイチシ",
            "katakana_half" => "ﾉﾉｲﾁｼ",
        ]);

        City::create([
            "id" => 837,
            "prefecture_id" => 17,
            "name" => "能美郡川北町",
            "romaji" => "nomigunkawakitamachi",
            "hiragana" => "のみぐんかわきたまち",
            "katakana" => "ノミグンカワキタマチ",
            "katakana_half" => "ﾉﾐｸﾞﾝｶﾜｷﾀﾏﾁ",
        ]);

        City::create([
            "id" => 838,
            "prefecture_id" => 17,
            "name" => "河北郡津幡町",
            "romaji" => "kahokuguntsubatamachi",
            "hiragana" => "かほくぐんつばたまち",
            "katakana" => "カホクグンツバタマチ",
            "katakana_half" => "ｶﾎｸｸﾞﾝﾂﾊﾞﾀﾏﾁ",
        ]);

        City::create([
            "id" => 839,
            "prefecture_id" => 17,
            "name" => "河北郡内灘町",
            "romaji" => "kahokugunuchinadamachi",
            "hiragana" => "かほくぐんうちなだまち",
            "katakana" => "カホクグンウチナダマチ",
            "katakana_half" => "ｶﾎｸｸﾞﾝｳﾁﾅﾀﾞﾏﾁ",
        ]);

        City::create([
            "id" => 840,
            "prefecture_id" => 17,
            "name" => "羽咋郡志賀町",
            "romaji" => "hakuigunshikamachi",
            "hiragana" => "はくいぐんしかまち",
            "katakana" => "ハクイグンシカマチ",
            "katakana_half" => "ﾊｸｲｸﾞﾝｼｶﾏﾁ",
        ]);

        City::create([
            "id" => 841,
            "prefecture_id" => 17,
            "name" => "羽咋郡宝達志水町",
            "romaji" => "hakuigunhoudatsushimizuchou",
            "hiragana" => "はくいぐんほうだつしみずちょう",
            "katakana" => "ハクイグンホウダツシミズチョウ",
            "katakana_half" => "ﾊｸｲｸﾞﾝﾎｳﾀﾞﾂｼﾐｽﾞﾁｮｳ",
        ]);

        City::create([
            "id" => 842,
            "prefecture_id" => 17,
            "name" => "鹿島郡中能登町",
            "romaji" => "kashimagunnakanotomachi",
            "hiragana" => "かしまぐんなかのとまち",
            "katakana" => "カシマグンナカノトマチ",
            "katakana_half" => "ｶｼﾏｸﾞﾝﾅｶﾉﾄﾏﾁ",
        ]);

        City::create([
            "id" => 843,
            "prefecture_id" => 17,
            "name" => "鳳珠郡穴水町",
            "romaji" => "housugunanamizumachi",
            "hiragana" => "ほうすぐんあなみずまち",
            "katakana" => "ホウスグンアナミズマチ",
            "katakana_half" => "ﾎｳｽｸﾞﾝｱﾅﾐｽﾞﾏﾁ",
        ]);

        City::create([
            "id" => 844,
            "prefecture_id" => 17,
            "name" => "鳳珠郡能登町",
            "romaji" => "housugunnotochou",
            "hiragana" => "ほうすぐんのとちょう",
            "katakana" => "ホウスグンノトチョウ",
            "katakana_half" => "ﾎｳｽｸﾞﾝﾉﾄﾁｮｳ",
        ]);

        City::create([
            "id" => 845,
            "prefecture_id" => 18,
            "name" => "福井市",
            "romaji" => "fukuishi",
            "hiragana" => "ふくいし",
            "katakana" => "フクイシ",
            "katakana_half" => "ﾌｸｲｼ",
        ]);

        City::create([
            "id" => 846,
            "prefecture_id" => 18,
            "name" => "敦賀市",
            "romaji" => "tsurugashi",
            "hiragana" => "つるがし",
            "katakana" => "ツルガシ",
            "katakana_half" => "ﾂﾙｶﾞｼ",
        ]);

        City::create([
            "id" => 847,
            "prefecture_id" => 18,
            "name" => "小浜市",
            "romaji" => "obamashi",
            "hiragana" => "おばまし",
            "katakana" => "オバマシ",
            "katakana_half" => "ｵﾊﾞﾏｼ",
        ]);

        City::create([
            "id" => 848,
            "prefecture_id" => 18,
            "name" => "大野市",
            "romaji" => "oonoshi",
            "hiragana" => "おおのし",
            "katakana" => "オオノシ",
            "katakana_half" => "ｵｵﾉｼ",
        ]);

        City::create([
            "id" => 849,
            "prefecture_id" => 18,
            "name" => "勝山市",
            "romaji" => "katsuyamashi",
            "hiragana" => "かつやまし",
            "katakana" => "カツヤマシ",
            "katakana_half" => "ｶﾂﾔﾏｼ",
        ]);

        City::create([
            "id" => 850,
            "prefecture_id" => 18,
            "name" => "鯖江市",
            "romaji" => "sabaeshi",
            "hiragana" => "さばえし",
            "katakana" => "サバエシ",
            "katakana_half" => "ｻﾊﾞｴｼ",
        ]);

        City::create([
            "id" => 851,
            "prefecture_id" => 18,
            "name" => "あわら市",
            "romaji" => "awarashi",
            "hiragana" => "あわらし",
            "katakana" => "アワラシ",
            "katakana_half" => "ｱﾜﾗｼ",
        ]);

        City::create([
            "id" => 852,
            "prefecture_id" => 18,
            "name" => "越前市",
            "romaji" => "echizenshi",
            "hiragana" => "えちぜんし",
            "katakana" => "エチゼンシ",
            "katakana_half" => "ｴﾁｾﾞﾝｼ",
        ]);

        City::create([
            "id" => 853,
            "prefecture_id" => 18,
            "name" => "坂井市",
            "romaji" => "sakaishi",
            "hiragana" => "さかいし",
            "katakana" => "サカイシ",
            "katakana_half" => "ｻｶｲｼ",
        ]);

        City::create([
            "id" => 854,
            "prefecture_id" => 18,
            "name" => "吉田郡永平寺町",
            "romaji" => "yoshidaguneiheijichou",
            "hiragana" => "よしだぐんえいへいじちょう",
            "katakana" => "ヨシダグンエイヘイジチョウ",
            "katakana_half" => "ﾖｼﾀﾞｸﾞﾝｴｲﾍｲｼﾞﾁｮｳ",
        ]);

        City::create([
            "id" => 855,
            "prefecture_id" => 18,
            "name" => "今立郡池田町",
            "romaji" => "imadategunikedachou",
            "hiragana" => "いまだてぐんいけだちょう",
            "katakana" => "イマダテグンイケダチョウ",
            "katakana_half" => "ｲﾏﾀﾞﾃｸﾞﾝｲｹﾀﾞﾁｮｳ",
        ]);

        City::create([
            "id" => 856,
            "prefecture_id" => 18,
            "name" => "南条郡南越前町",
            "romaji" => "nanjougunminamiechizenchou",
            "hiragana" => "なんじょうぐんみなみえちぜんちょう",
            "katakana" => "ナンジョウグンミナミエチゼンチョウ",
            "katakana_half" => "ﾅﾝｼﾞｮｳｸﾞﾝﾐﾅﾐｴﾁｾﾞﾝﾁｮｳ",
        ]);

        City::create([
            "id" => 857,
            "prefecture_id" => 18,
            "name" => "丹生郡越前町",
            "romaji" => "nyuugunechizenchou",
            "hiragana" => "にゅうぐんえちぜんちょう",
            "katakana" => "ニュウグンエチゼンチョウ",
            "katakana_half" => "ﾆｭｳｸﾞﾝｴﾁｾﾞﾝﾁｮｳ",
        ]);

        City::create([
            "id" => 858,
            "prefecture_id" => 18,
            "name" => "三方郡美浜町",
            "romaji" => "mikatagunmihamachou",
            "hiragana" => "みかたぐんみはまちょう",
            "katakana" => "ミカタグンミハマチョウ",
            "katakana_half" => "ﾐｶﾀｸﾞﾝﾐﾊﾏﾁｮｳ",
        ]);

        City::create([
            "id" => 859,
            "prefecture_id" => 18,
            "name" => "大飯郡高浜町",
            "romaji" => "ooiguntakahamachou",
            "hiragana" => "おおいぐんたかはまちょう",
            "katakana" => "オオイグンタカハマチョウ",
            "katakana_half" => "ｵｵｲｸﾞﾝﾀｶﾊﾏﾁｮｳ",
        ]);

        City::create([
            "id" => 860,
            "prefecture_id" => 18,
            "name" => "大飯郡おおい町",
            "romaji" => "ooigunooichou",
            "hiragana" => "おおいぐんおおいちょう",
            "katakana" => "オオイグンオオイチョウ",
            "katakana_half" => "ｵｵｲｸﾞﾝｵｵｲﾁｮｳ",
        ]);

        City::create([
            "id" => 861,
            "prefecture_id" => 18,
            "name" => "三方上中郡若狭町",
            "romaji" => "mikatakaminakagunwakasachou",
            "hiragana" => "みかたかみなかぐんわかさちょう",
            "katakana" => "ミカタカミナカグンワカサチョウ",
            "katakana_half" => "ﾐｶﾀｶﾐﾅｶｸﾞﾝﾜｶｻﾁｮｳ",
        ]);

        City::create([
            "id" => 862,
            "prefecture_id" => 19,
            "name" => "甲府市",
            "romaji" => "koufushi",
            "hiragana" => "こうふし",
            "katakana" => "コウフシ",
            "katakana_half" => "ｺｳﾌｼ",
        ]);

        City::create([
            "id" => 863,
            "prefecture_id" => 19,
            "name" => "富士吉田市",
            "romaji" => "fujiyoshidashi",
            "hiragana" => "ふじよしだし",
            "katakana" => "フジヨシダシ",
            "katakana_half" => "ﾌｼﾞﾖｼﾀﾞｼ",
        ]);

        City::create([
            "id" => 864,
            "prefecture_id" => 19,
            "name" => "都留市",
            "romaji" => "tsurushi",
            "hiragana" => "つるし",
            "katakana" => "ツルシ",
            "katakana_half" => "ﾂﾙｼ",
        ]);

        City::create([
            "id" => 865,
            "prefecture_id" => 19,
            "name" => "山梨市",
            "romaji" => "yamanashishi",
            "hiragana" => "やまなしし",
            "katakana" => "ヤマナシシ",
            "katakana_half" => "ﾔﾏﾅｼｼ",
        ]);

        City::create([
            "id" => 866,
            "prefecture_id" => 19,
            "name" => "大月市",
            "romaji" => "ootsukishi",
            "hiragana" => "おおつきし",
            "katakana" => "オオツキシ",
            "katakana_half" => "ｵｵﾂｷｼ",
        ]);

        City::create([
            "id" => 867,
            "prefecture_id" => 19,
            "name" => "韮崎市",
            "romaji" => "nirasakishi",
            "hiragana" => "にらさきし",
            "katakana" => "ニラサキシ",
            "katakana_half" => "ﾆﾗｻｷｼ",
        ]);

        City::create([
            "id" => 868,
            "prefecture_id" => 19,
            "name" => "南アルプス市",
            "romaji" => "minamiarupusushi",
            "hiragana" => "みなみあるぷすし",
            "katakana" => "ミナミアルプスシ",
            "katakana_half" => "ﾐﾅﾐｱﾙﾌﾟｽｼ",
        ]);

        City::create([
            "id" => 869,
            "prefecture_id" => 19,
            "name" => "北杜市",
            "romaji" => "hokutoshi",
            "hiragana" => "ほくとし",
            "katakana" => "ホクトシ",
            "katakana_half" => "ﾎｸﾄｼ",
        ]);

        City::create([
            "id" => 870,
            "prefecture_id" => 19,
            "name" => "甲斐市",
            "romaji" => "kaishi",
            "hiragana" => "かいし",
            "katakana" => "カイシ",
            "katakana_half" => "ｶｲｼ",
        ]);

        City::create([
            "id" => 871,
            "prefecture_id" => 19,
            "name" => "笛吹市",
            "romaji" => "fuefukishi",
            "hiragana" => "ふえふきし",
            "katakana" => "フエフキシ",
            "katakana_half" => "ﾌｴﾌｷｼ",
        ]);

        City::create([
            "id" => 872,
            "prefecture_id" => 19,
            "name" => "上野原市",
            "romaji" => "uenoharashi",
            "hiragana" => "うえのはらし",
            "katakana" => "ウエノハラシ",
            "katakana_half" => "ｳｴﾉﾊﾗｼ",
        ]);

        City::create([
            "id" => 873,
            "prefecture_id" => 19,
            "name" => "甲州市",
            "romaji" => "koushuushi",
            "hiragana" => "こうしゅうし",
            "katakana" => "コウシュウシ",
            "katakana_half" => "ｺｳｼｭｳｼ",
        ]);

        City::create([
            "id" => 874,
            "prefecture_id" => 19,
            "name" => "中央市",
            "romaji" => "chuuoushi",
            "hiragana" => "ちゅうおうし",
            "katakana" => "チュウオウシ",
            "katakana_half" => "ﾁｭｳｵｳｼ",
        ]);

        City::create([
            "id" => 875,
            "prefecture_id" => 19,
            "name" => "西八代郡市川三郷町",
            "romaji" => "nishiyatsushirogunichikawamisatochou",
            "hiragana" => "にしやつしろぐんいちかわみさとちょう",
            "katakana" => "ニシヤツシログンイチカワミサトチョウ",
            "katakana_half" => "ﾆｼﾔﾂｼﾛｸﾞﾝｲﾁｶﾜﾐｻﾄﾁｮｳ",
        ]);

        City::create([
            "id" => 876,
            "prefecture_id" => 19,
            "name" => "南巨摩郡早川町",
            "romaji" => "minamikomagunhayakawachou",
            "hiragana" => "みなみこまぐんはやかわちょう",
            "katakana" => "ミナミコマグンハヤカワチョウ",
            "katakana_half" => "ﾐﾅﾐｺﾏｸﾞﾝﾊﾔｶﾜﾁｮｳ",
        ]);

        City::create([
            "id" => 877,
            "prefecture_id" => 19,
            "name" => "南巨摩郡身延町",
            "romaji" => "minamikomagunminobuchou",
            "hiragana" => "みなみこまぐんみのぶちょう",
            "katakana" => "ミナミコマグンミノブチョウ",
            "katakana_half" => "ﾐﾅﾐｺﾏｸﾞﾝﾐﾉﾌﾞﾁｮｳ",
        ]);

        City::create([
            "id" => 878,
            "prefecture_id" => 19,
            "name" => "南巨摩郡南部町",
            "romaji" => "minamikomagunnanbuchou",
            "hiragana" => "みなみこまぐんなんぶちょう",
            "katakana" => "ミナミコマグンナンブチョウ",
            "katakana_half" => "ﾐﾅﾐｺﾏｸﾞﾝﾅﾝﾌﾞﾁｮｳ",
        ]);

        City::create([
            "id" => 879,
            "prefecture_id" => 19,
            "name" => "南巨摩郡富士川町",
            "romaji" => "minamikomagunfujikawachou",
            "hiragana" => "みなみこまぐんふじかわちょう",
            "katakana" => "ミナミコマグンフジカワチョウ",
            "katakana_half" => "ﾐﾅﾐｺﾏｸﾞﾝﾌｼﾞｶﾜﾁｮｳ",
        ]);

        City::create([
            "id" => 880,
            "prefecture_id" => 19,
            "name" => "中巨摩郡昭和町",
            "romaji" => "nakakomagunshouwachou",
            "hiragana" => "なかこまぐんしょうわちょう",
            "katakana" => "ナカコマグンショウワチョウ",
            "katakana_half" => "ﾅｶｺﾏｸﾞﾝｼｮｳﾜﾁｮｳ",
        ]);

        City::create([
            "id" => 881,
            "prefecture_id" => 19,
            "name" => "南都留郡道志村",
            "romaji" => "minamitsurugundoushimura",
            "hiragana" => "みなみつるぐんどうしむら",
            "katakana" => "ミナミツルグンドウシムラ",
            "katakana_half" => "ﾐﾅﾐﾂﾙｸﾞﾝﾄﾞｳｼﾑﾗ",
        ]);

        City::create([
            "id" => 882,
            "prefecture_id" => 19,
            "name" => "南都留郡西桂町",
            "romaji" => "minamitsurugunnishikatsurachou",
            "hiragana" => "みなみつるぐんにしかつらちょう",
            "katakana" => "ミナミツルグンニシカツラチョウ",
            "katakana_half" => "ﾐﾅﾐﾂﾙｸﾞﾝﾆｼｶﾂﾗﾁｮｳ",
        ]);

        City::create([
            "id" => 883,
            "prefecture_id" => 19,
            "name" => "南都留郡忍野村",
            "romaji" => "minamitsurugunoshinomura",
            "hiragana" => "みなみつるぐんおしのむら",
            "katakana" => "ミナミツルグンオシノムラ",
            "katakana_half" => "ﾐﾅﾐﾂﾙｸﾞﾝｵｼﾉﾑﾗ",
        ]);

        City::create([
            "id" => 884,
            "prefecture_id" => 19,
            "name" => "南都留郡山中湖村",
            "romaji" => "minamitsurugunyamanakakomura",
            "hiragana" => "みなみつるぐんやまなかこむら",
            "katakana" => "ミナミツルグンヤマナカコムラ",
            "katakana_half" => "ﾐﾅﾐﾂﾙｸﾞﾝﾔﾏﾅｶｺﾑﾗ",
        ]);

        City::create([
            "id" => 885,
            "prefecture_id" => 19,
            "name" => "南都留郡鳴沢村",
            "romaji" => "minamitsurugunnarusawamura",
            "hiragana" => "みなみつるぐんなるさわむら",
            "katakana" => "ミナミツルグンナルサワムラ",
            "katakana_half" => "ﾐﾅﾐﾂﾙｸﾞﾝﾅﾙｻﾜﾑﾗ",
        ]);

        City::create([
            "id" => 886,
            "prefecture_id" => 19,
            "name" => "南都留郡富士河口湖町",
            "romaji" => "minamitsurugunfujikawaguchikomachi",
            "hiragana" => "みなみつるぐんふじかわぐちこまち",
            "katakana" => "ミナミツルグンフジカワグチコマチ",
            "katakana_half" => "ﾐﾅﾐﾂﾙｸﾞﾝﾌｼﾞｶﾜｸﾞﾁｺﾏﾁ",
        ]);

        City::create([
            "id" => 887,
            "prefecture_id" => 19,
            "name" => "北都留郡小菅村",
            "romaji" => "kitatsurugunkosugemura",
            "hiragana" => "きたつるぐんこすげむら",
            "katakana" => "キタツルグンコスゲムラ",
            "katakana_half" => "ｷﾀﾂﾙｸﾞﾝｺｽｹﾞﾑﾗ",
        ]);

        City::create([
            "id" => 888,
            "prefecture_id" => 19,
            "name" => "北都留郡丹波山村",
            "romaji" => "kitatsuruguntabayamamura",
            "hiragana" => "きたつるぐんたばやまむら",
            "katakana" => "キタツルグンタバヤマムラ",
            "katakana_half" => "ｷﾀﾂﾙｸﾞﾝﾀﾊﾞﾔﾏﾑﾗ",
        ]);

        City::create([
            "id" => 889,
            "prefecture_id" => 20,
            "name" => "長野市",
            "romaji" => "naganoshi",
            "hiragana" => "ながのし",
            "katakana" => "ナガノシ",
            "katakana_half" => "ﾅｶﾞﾉｼ",
        ]);

        City::create([
            "id" => 890,
            "prefecture_id" => 20,
            "name" => "松本市",
            "romaji" => "matsumotoshi",
            "hiragana" => "まつもとし",
            "katakana" => "マツモトシ",
            "katakana_half" => "ﾏﾂﾓﾄｼ",
        ]);

        City::create([
            "id" => 891,
            "prefecture_id" => 20,
            "name" => "上田市",
            "romaji" => "uedashi",
            "hiragana" => "うえだし",
            "katakana" => "ウエダシ",
            "katakana_half" => "ｳｴﾀﾞｼ",
        ]);

        City::create([
            "id" => 892,
            "prefecture_id" => 20,
            "name" => "岡谷市",
            "romaji" => "okayashi",
            "hiragana" => "おかやし",
            "katakana" => "オカヤシ",
            "katakana_half" => "ｵｶﾔｼ",
        ]);

        City::create([
            "id" => 893,
            "prefecture_id" => 20,
            "name" => "飯田市",
            "romaji" => "iidashi",
            "hiragana" => "いいだし",
            "katakana" => "イイダシ",
            "katakana_half" => "ｲｲﾀﾞｼ",
        ]);

        City::create([
            "id" => 894,
            "prefecture_id" => 20,
            "name" => "諏訪市",
            "romaji" => "suwashi",
            "hiragana" => "すわし",
            "katakana" => "スワシ",
            "katakana_half" => "ｽﾜｼ",
        ]);

        City::create([
            "id" => 895,
            "prefecture_id" => 20,
            "name" => "須坂市",
            "romaji" => "suzakashi",
            "hiragana" => "すざかし",
            "katakana" => "スザカシ",
            "katakana_half" => "ｽｻﾞｶｼ",
        ]);

        City::create([
            "id" => 896,
            "prefecture_id" => 20,
            "name" => "小諸市",
            "romaji" => "komoroshi",
            "hiragana" => "こもろし",
            "katakana" => "コモロシ",
            "katakana_half" => "ｺﾓﾛｼ",
        ]);

        City::create([
            "id" => 897,
            "prefecture_id" => 20,
            "name" => "伊那市",
            "romaji" => "inashi",
            "hiragana" => "いなし",
            "katakana" => "イナシ",
            "katakana_half" => "ｲﾅｼ",
        ]);

        City::create([
            "id" => 898,
            "prefecture_id" => 20,
            "name" => "駒ヶ根市",
            "romaji" => "komaganeshi",
            "hiragana" => "こまがねし",
            "katakana" => "コマガネシ",
            "katakana_half" => "ｺﾏｶﾞﾈｼ",
        ]);

        City::create([
            "id" => 899,
            "prefecture_id" => 20,
            "name" => "中野市",
            "romaji" => "nakanoshi",
            "hiragana" => "なかのし",
            "katakana" => "ナカノシ",
            "katakana_half" => "ﾅｶﾉｼ",
        ]);

        City::create([
            "id" => 900,
            "prefecture_id" => 20,
            "name" => "大町市",
            "romaji" => "oomachishi",
            "hiragana" => "おおまちし",
            "katakana" => "オオマチシ",
            "katakana_half" => "ｵｵﾏﾁｼ",
        ]);

        City::create([
            "id" => 901,
            "prefecture_id" => 20,
            "name" => "飯山市",
            "romaji" => "iiyamashi",
            "hiragana" => "いいやまし",
            "katakana" => "イイヤマシ",
            "katakana_half" => "ｲｲﾔﾏｼ",
        ]);

        City::create([
            "id" => 902,
            "prefecture_id" => 20,
            "name" => "茅野市",
            "romaji" => "chinoshi",
            "hiragana" => "ちのし",
            "katakana" => "チノシ",
            "katakana_half" => "ﾁﾉｼ",
        ]);

        City::create([
            "id" => 903,
            "prefecture_id" => 20,
            "name" => "塩尻市",
            "romaji" => "shiojirishi",
            "hiragana" => "しおじりし",
            "katakana" => "シオジリシ",
            "katakana_half" => "ｼｵｼﾞﾘｼ",
        ]);

        City::create([
            "id" => 904,
            "prefecture_id" => 20,
            "name" => "佐久市",
            "romaji" => "sakushi",
            "hiragana" => "さくし",
            "katakana" => "サクシ",
            "katakana_half" => "ｻｸｼ",
        ]);

        City::create([
            "id" => 905,
            "prefecture_id" => 20,
            "name" => "千曲市",
            "romaji" => "chikumashi",
            "hiragana" => "ちくまし",
            "katakana" => "チクマシ",
            "katakana_half" => "ﾁｸﾏｼ",
        ]);

        City::create([
            "id" => 906,
            "prefecture_id" => 20,
            "name" => "東御市",
            "romaji" => "toumishi",
            "hiragana" => "とうみし",
            "katakana" => "トウミシ",
            "katakana_half" => "ﾄｳﾐｼ",
        ]);

        City::create([
            "id" => 907,
            "prefecture_id" => 20,
            "name" => "安曇野市",
            "romaji" => "azuminoshi",
            "hiragana" => "あづみのし",
            "katakana" => "アヅミノシ",
            "katakana_half" => "ｱﾂﾞﾐﾉｼ",
        ]);

        City::create([
            "id" => 908,
            "prefecture_id" => 20,
            "name" => "南佐久郡小海町",
            "romaji" => "minamisakugunkoumimachi",
            "hiragana" => "みなみさくぐんこうみまち",
            "katakana" => "ミナミサクグンコウミマチ",
            "katakana_half" => "ﾐﾅﾐｻｸｸﾞﾝｺｳﾐﾏﾁ",
        ]);

        City::create([
            "id" => 909,
            "prefecture_id" => 20,
            "name" => "南佐久郡川上村",
            "romaji" => "minamisakugunkawakamimura",
            "hiragana" => "みなみさくぐんかわかみむら",
            "katakana" => "ミナミサクグンカワカミムラ",
            "katakana_half" => "ﾐﾅﾐｻｸｸﾞﾝｶﾜｶﾐﾑﾗ",
        ]);

        City::create([
            "id" => 910,
            "prefecture_id" => 20,
            "name" => "南佐久郡南牧村",
            "romaji" => "minamisakugunminamimakimura",
            "hiragana" => "みなみさくぐんみなみまきむら",
            "katakana" => "ミナミサクグンミナミマキムラ",
            "katakana_half" => "ﾐﾅﾐｻｸｸﾞﾝﾐﾅﾐﾏｷﾑﾗ",
        ]);

        City::create([
            "id" => 911,
            "prefecture_id" => 20,
            "name" => "南佐久郡南相木村",
            "romaji" => "minamisakugunminamiaikimura",
            "hiragana" => "みなみさくぐんみなみあいきむら",
            "katakana" => "ミナミサクグンミナミアイキムラ",
            "katakana_half" => "ﾐﾅﾐｻｸｸﾞﾝﾐﾅﾐｱｲｷﾑﾗ",
        ]);

        City::create([
            "id" => 912,
            "prefecture_id" => 20,
            "name" => "南佐久郡北相木村",
            "romaji" => "minamisakugunkitaaikimura",
            "hiragana" => "みなみさくぐんきたあいきむら",
            "katakana" => "ミナミサクグンキタアイキムラ",
            "katakana_half" => "ﾐﾅﾐｻｸｸﾞﾝｷﾀｱｲｷﾑﾗ",
        ]);

        City::create([
            "id" => 913,
            "prefecture_id" => 20,
            "name" => "南佐久郡佐久穂町",
            "romaji" => "minamisakugunsakuhomachi",
            "hiragana" => "みなみさくぐんさくほまち",
            "katakana" => "ミナミサクグンサクホマチ",
            "katakana_half" => "ﾐﾅﾐｻｸｸﾞﾝｻｸﾎﾏﾁ",
        ]);

        City::create([
            "id" => 914,
            "prefecture_id" => 20,
            "name" => "北佐久郡軽井沢町",
            "romaji" => "kitasakugunkaruizawamachi",
            "hiragana" => "きたさくぐんかるいざわまち",
            "katakana" => "キタサクグンカルイザワマチ",
            "katakana_half" => "ｷﾀｻｸｸﾞﾝｶﾙｲｻﾞﾜﾏﾁ",
        ]);

        City::create([
            "id" => 915,
            "prefecture_id" => 20,
            "name" => "北佐久郡御代田町",
            "romaji" => "kitasakugunmiyotamachi",
            "hiragana" => "きたさくぐんみよたまち",
            "katakana" => "キタサクグンミヨタマチ",
            "katakana_half" => "ｷﾀｻｸｸﾞﾝﾐﾖﾀﾏﾁ",
        ]);

        City::create([
            "id" => 916,
            "prefecture_id" => 20,
            "name" => "北佐久郡立科町",
            "romaji" => "kitasakuguntateshinamachi",
            "hiragana" => "きたさくぐんたてしなまち",
            "katakana" => "キタサクグンタテシナマチ",
            "katakana_half" => "ｷﾀｻｸｸﾞﾝﾀﾃｼﾅﾏﾁ",
        ]);

        City::create([
            "id" => 917,
            "prefecture_id" => 20,
            "name" => "小県郡青木村",
            "romaji" => "chiisagatagunaokimura",
            "hiragana" => "ちいさがたぐんあおきむら",
            "katakana" => "チイサガタグンアオキムラ",
            "katakana_half" => "ﾁｲｻｶﾞﾀｸﾞﾝｱｵｷﾑﾗ",
        ]);

        City::create([
            "id" => 918,
            "prefecture_id" => 20,
            "name" => "小県郡長和町",
            "romaji" => "chiisagatagunnagawamachi",
            "hiragana" => "ちいさがたぐんながわまち",
            "katakana" => "チイサガタグンナガワマチ",
            "katakana_half" => "ﾁｲｻｶﾞﾀｸﾞﾝﾅｶﾞﾜﾏﾁ",
        ]);

        City::create([
            "id" => 919,
            "prefecture_id" => 20,
            "name" => "諏訪郡下諏訪町",
            "romaji" => "suwagunshimosuwamachi",
            "hiragana" => "すわぐんしもすわまち",
            "katakana" => "スワグンシモスワマチ",
            "katakana_half" => "ｽﾜｸﾞﾝｼﾓｽﾜﾏﾁ",
        ]);

        City::create([
            "id" => 920,
            "prefecture_id" => 20,
            "name" => "諏訪郡富士見町",
            "romaji" => "suwagunfujimimachi",
            "hiragana" => "すわぐんふじみまち",
            "katakana" => "スワグンフジミマチ",
            "katakana_half" => "ｽﾜｸﾞﾝﾌｼﾞﾐﾏﾁ",
        ]);

        City::create([
            "id" => 921,
            "prefecture_id" => 20,
            "name" => "諏訪郡原村",
            "romaji" => "suwagunharamura",
            "hiragana" => "すわぐんはらむら",
            "katakana" => "スワグンハラムラ",
            "katakana_half" => "ｽﾜｸﾞﾝﾊﾗﾑﾗ",
        ]);

        City::create([
            "id" => 922,
            "prefecture_id" => 20,
            "name" => "上伊那郡辰野町",
            "romaji" => "kamiinaguntatsunomachi",
            "hiragana" => "かみいなぐんたつのまち",
            "katakana" => "カミイナグンタツノマチ",
            "katakana_half" => "ｶﾐｲﾅｸﾞﾝﾀﾂﾉﾏﾁ",
        ]);

        City::create([
            "id" => 923,
            "prefecture_id" => 20,
            "name" => "上伊那郡箕輪町",
            "romaji" => "kamiinagunminowamachi",
            "hiragana" => "かみいなぐんみのわまち",
            "katakana" => "カミイナグンミノワマチ",
            "katakana_half" => "ｶﾐｲﾅｸﾞﾝﾐﾉﾜﾏﾁ",
        ]);

        City::create([
            "id" => 924,
            "prefecture_id" => 20,
            "name" => "上伊那郡飯島町",
            "romaji" => "kamiinaguniijimamachi",
            "hiragana" => "かみいなぐんいいじままち",
            "katakana" => "カミイナグンイイジママチ",
            "katakana_half" => "ｶﾐｲﾅｸﾞﾝｲｲｼﾞﾏﾏﾁ",
        ]);

        City::create([
            "id" => 925,
            "prefecture_id" => 20,
            "name" => "上伊那郡南箕輪村",
            "romaji" => "kamiinagunminamiminowamura",
            "hiragana" => "かみいなぐんみなみみのわむら",
            "katakana" => "カミイナグンミナミミノワムラ",
            "katakana_half" => "ｶﾐｲﾅｸﾞﾝﾐﾅﾐﾐﾉﾜﾑﾗ",
        ]);

        City::create([
            "id" => 926,
            "prefecture_id" => 20,
            "name" => "上伊那郡中川村",
            "romaji" => "kamiinagunnakagawamura",
            "hiragana" => "かみいなぐんなかがわむら",
            "katakana" => "カミイナグンナカガワムラ",
            "katakana_half" => "ｶﾐｲﾅｸﾞﾝﾅｶｶﾞﾜﾑﾗ",
        ]);

        City::create([
            "id" => 927,
            "prefecture_id" => 20,
            "name" => "上伊那郡宮田村",
            "romaji" => "kamiinagunmiyadamura",
            "hiragana" => "かみいなぐんみやだむら",
            "katakana" => "カミイナグンミヤダムラ",
            "katakana_half" => "ｶﾐｲﾅｸﾞﾝﾐﾔﾀﾞﾑﾗ",
        ]);

        City::create([
            "id" => 928,
            "prefecture_id" => 20,
            "name" => "下伊那郡松川町",
            "romaji" => "shimoinagunmatsukawamachi",
            "hiragana" => "しもいなぐんまつかわまち",
            "katakana" => "シモイナグンマツカワマチ",
            "katakana_half" => "ｼﾓｲﾅｸﾞﾝﾏﾂｶﾜﾏﾁ",
        ]);

        City::create([
            "id" => 929,
            "prefecture_id" => 20,
            "name" => "下伊那郡高森町",
            "romaji" => "shimoinaguntakamorimachi",
            "hiragana" => "しもいなぐんたかもりまち",
            "katakana" => "シモイナグンタカモリマチ",
            "katakana_half" => "ｼﾓｲﾅｸﾞﾝﾀｶﾓﾘﾏﾁ",
        ]);

        City::create([
            "id" => 930,
            "prefecture_id" => 20,
            "name" => "下伊那郡阿南町",
            "romaji" => "shimoinagunananchou",
            "hiragana" => "しもいなぐんあなんちょう",
            "katakana" => "シモイナグンアナンチョウ",
            "katakana_half" => "ｼﾓｲﾅｸﾞﾝｱﾅﾝﾁｮｳ",
        ]);

        City::create([
            "id" => 931,
            "prefecture_id" => 20,
            "name" => "下伊那郡阿智村",
            "romaji" => "shimoinagunachimura",
            "hiragana" => "しもいなぐんあちむら",
            "katakana" => "シモイナグンアチムラ",
            "katakana_half" => "ｼﾓｲﾅｸﾞﾝｱﾁﾑﾗ",
        ]);

        City::create([
            "id" => 932,
            "prefecture_id" => 20,
            "name" => "下伊那郡平谷村",
            "romaji" => "shimoinagunhirayamura",
            "hiragana" => "しもいなぐんひらやむら",
            "katakana" => "シモイナグンヒラヤムラ",
            "katakana_half" => "ｼﾓｲﾅｸﾞﾝﾋﾗﾔﾑﾗ",
        ]);

        City::create([
            "id" => 933,
            "prefecture_id" => 20,
            "name" => "下伊那郡根羽村",
            "romaji" => "shimoinagunnebamura",
            "hiragana" => "しもいなぐんねばむら",
            "katakana" => "シモイナグンネバムラ",
            "katakana_half" => "ｼﾓｲﾅｸﾞﾝﾈﾊﾞﾑﾗ",
        ]);

        City::create([
            "id" => 934,
            "prefecture_id" => 20,
            "name" => "下伊那郡下條村",
            "romaji" => "shimoinagunshimojoumura",
            "hiragana" => "しもいなぐんしもじょうむら",
            "katakana" => "シモイナグンシモジョウムラ",
            "katakana_half" => "ｼﾓｲﾅｸﾞﾝｼﾓｼﾞｮｳﾑﾗ",
        ]);

        City::create([
            "id" => 935,
            "prefecture_id" => 20,
            "name" => "下伊那郡売木村",
            "romaji" => "shimoinagunurugimura",
            "hiragana" => "しもいなぐんうるぎむら",
            "katakana" => "シモイナグンウルギムラ",
            "katakana_half" => "ｼﾓｲﾅｸﾞﾝｳﾙｷﾞﾑﾗ",
        ]);

        City::create([
            "id" => 936,
            "prefecture_id" => 20,
            "name" => "下伊那郡天龍村",
            "romaji" => "shimoinaguntenryuumura",
            "hiragana" => "しもいなぐんてんりゅうむら",
            "katakana" => "シモイナグンテンリュウムラ",
            "katakana_half" => "ｼﾓｲﾅｸﾞﾝﾃﾝﾘｭｳﾑﾗ",
        ]);

        City::create([
            "id" => 937,
            "prefecture_id" => 20,
            "name" => "下伊那郡泰阜村",
            "romaji" => "shimoinagunyasuokamura",
            "hiragana" => "しもいなぐんやすおかむら",
            "katakana" => "シモイナグンヤスオカムラ",
            "katakana_half" => "ｼﾓｲﾅｸﾞﾝﾔｽｵｶﾑﾗ",
        ]);

        City::create([
            "id" => 938,
            "prefecture_id" => 20,
            "name" => "下伊那郡喬木村",
            "romaji" => "shimoinaguntakagimura",
            "hiragana" => "しもいなぐんたかぎむら",
            "katakana" => "シモイナグンタカギムラ",
            "katakana_half" => "ｼﾓｲﾅｸﾞﾝﾀｶｷﾞﾑﾗ",
        ]);

        City::create([
            "id" => 939,
            "prefecture_id" => 20,
            "name" => "下伊那郡豊丘村",
            "romaji" => "shimoinaguntoyookamura",
            "hiragana" => "しもいなぐんとよおかむら",
            "katakana" => "シモイナグントヨオカムラ",
            "katakana_half" => "ｼﾓｲﾅｸﾞﾝﾄﾖｵｶﾑﾗ",
        ]);

        City::create([
            "id" => 940,
            "prefecture_id" => 20,
            "name" => "下伊那郡大鹿村",
            "romaji" => "shimoinagunooshikamura",
            "hiragana" => "しもいなぐんおおしかむら",
            "katakana" => "シモイナグンオオシカムラ",
            "katakana_half" => "ｼﾓｲﾅｸﾞﾝｵｵｼｶﾑﾗ",
        ]);

        City::create([
            "id" => 941,
            "prefecture_id" => 20,
            "name" => "木曽郡上松町",
            "romaji" => "kisogunagematsumachi",
            "hiragana" => "きそぐんあげまつまち",
            "katakana" => "キソグンアゲマツマチ",
            "katakana_half" => "ｷｿｸﾞﾝｱｹﾞﾏﾂﾏﾁ",
        ]);

        City::create([
            "id" => 942,
            "prefecture_id" => 20,
            "name" => "木曽郡南木曽町",
            "romaji" => "kisogunnagisomachi",
            "hiragana" => "きそぐんなぎそまち",
            "katakana" => "キソグンナギソマチ",
            "katakana_half" => "ｷｿｸﾞﾝﾅｷﾞｿﾏﾁ",
        ]);

        City::create([
            "id" => 943,
            "prefecture_id" => 20,
            "name" => "木曽郡木祖村",
            "romaji" => "kisogunkisomura",
            "hiragana" => "きそぐんきそむら",
            "katakana" => "キソグンキソムラ",
            "katakana_half" => "ｷｿｸﾞﾝｷｿﾑﾗ",
        ]);

        City::create([
            "id" => 944,
            "prefecture_id" => 20,
            "name" => "木曽郡王滝村",
            "romaji" => "kisogunoutakimura",
            "hiragana" => "きそぐんおうたきむら",
            "katakana" => "キソグンオウタキムラ",
            "katakana_half" => "ｷｿｸﾞﾝｵｳﾀｷﾑﾗ",
        ]);

        City::create([
            "id" => 945,
            "prefecture_id" => 20,
            "name" => "木曽郡大桑村",
            "romaji" => "kisogunookuwamura",
            "hiragana" => "きそぐんおおくわむら",
            "katakana" => "キソグンオオクワムラ",
            "katakana_half" => "ｷｿｸﾞﾝｵｵｸﾜﾑﾗ",
        ]);

        City::create([
            "id" => 946,
            "prefecture_id" => 20,
            "name" => "木曽郡木曽町",
            "romaji" => "kisogunkisomachi",
            "hiragana" => "きそぐんきそまち",
            "katakana" => "キソグンキソマチ",
            "katakana_half" => "ｷｿｸﾞﾝｷｿﾏﾁ",
        ]);

        City::create([
            "id" => 947,
            "prefecture_id" => 20,
            "name" => "東筑摩郡麻績村",
            "romaji" => "higashichikumagunomimura",
            "hiragana" => "ひがしちくまぐんおみむら",
            "katakana" => "ヒガシチクマグンオミムラ",
            "katakana_half" => "ﾋｶﾞｼﾁｸﾏｸﾞﾝｵﾐﾑﾗ",
        ]);

        City::create([
            "id" => 948,
            "prefecture_id" => 20,
            "name" => "東筑摩郡生坂村",
            "romaji" => "higashichikumagunikusakamura",
            "hiragana" => "ひがしちくまぐんいくさかむら",
            "katakana" => "ヒガシチクマグンイクサカムラ",
            "katakana_half" => "ﾋｶﾞｼﾁｸﾏｸﾞﾝｲｸｻｶﾑﾗ",
        ]);

        City::create([
            "id" => 949,
            "prefecture_id" => 20,
            "name" => "東筑摩郡山形村",
            "romaji" => "higashichikumagunyamagatamura",
            "hiragana" => "ひがしちくまぐんやまがたむら",
            "katakana" => "ヒガシチクマグンヤマガタムラ",
            "katakana_half" => "ﾋｶﾞｼﾁｸﾏｸﾞﾝﾔﾏｶﾞﾀﾑﾗ",
        ]);

        City::create([
            "id" => 950,
            "prefecture_id" => 20,
            "name" => "東筑摩郡朝日村",
            "romaji" => "higashichikumagunasahimura",
            "hiragana" => "ひがしちくまぐんあさひむら",
            "katakana" => "ヒガシチクマグンアサヒムラ",
            "katakana_half" => "ﾋｶﾞｼﾁｸﾏｸﾞﾝｱｻﾋﾑﾗ",
        ]);

        City::create([
            "id" => 951,
            "prefecture_id" => 20,
            "name" => "東筑摩郡筑北村",
            "romaji" => "higashichikumagunchikuhokumura",
            "hiragana" => "ひがしちくまぐんちくほくむら",
            "katakana" => "ヒガシチクマグンチクホクムラ",
            "katakana_half" => "ﾋｶﾞｼﾁｸﾏｸﾞﾝﾁｸﾎｸﾑﾗ",
        ]);

        City::create([
            "id" => 952,
            "prefecture_id" => 20,
            "name" => "北安曇郡池田町",
            "romaji" => "kitaazumigunikedamachi",
            "hiragana" => "きたあづみぐんいけだまち",
            "katakana" => "キタアヅミグンイケダマチ",
            "katakana_half" => "ｷﾀｱﾂﾞﾐｸﾞﾝｲｹﾀﾞﾏﾁ",
        ]);

        City::create([
            "id" => 953,
            "prefecture_id" => 20,
            "name" => "北安曇郡松川村",
            "romaji" => "kitaazumigunmatsukawamura",
            "hiragana" => "きたあづみぐんまつかわむら",
            "katakana" => "キタアヅミグンマツカワムラ",
            "katakana_half" => "ｷﾀｱﾂﾞﾐｸﾞﾝﾏﾂｶﾜﾑﾗ",
        ]);

        City::create([
            "id" => 954,
            "prefecture_id" => 20,
            "name" => "北安曇郡白馬村",
            "romaji" => "kitaazumigunhakubamura",
            "hiragana" => "きたあづみぐんはくばむら",
            "katakana" => "キタアヅミグンハクバムラ",
            "katakana_half" => "ｷﾀｱﾂﾞﾐｸﾞﾝﾊｸﾊﾞﾑﾗ",
        ]);

        City::create([
            "id" => 955,
            "prefecture_id" => 20,
            "name" => "北安曇郡小谷村",
            "romaji" => "kitaazumigunotarimura",
            "hiragana" => "きたあづみぐんおたりむら",
            "katakana" => "キタアヅミグンオタリムラ",
            "katakana_half" => "ｷﾀｱﾂﾞﾐｸﾞﾝｵﾀﾘﾑﾗ",
        ]);

        City::create([
            "id" => 956,
            "prefecture_id" => 20,
            "name" => "埴科郡坂城町",
            "romaji" => "hanishinagunsakakimachi",
            "hiragana" => "はにしなぐんさかきまち",
            "katakana" => "ハニシナグンサカキマチ",
            "katakana_half" => "ﾊﾆｼﾅｸﾞﾝｻｶｷﾏﾁ",
        ]);

        City::create([
            "id" => 957,
            "prefecture_id" => 20,
            "name" => "上高井郡小布施町",
            "romaji" => "kamitakaigunobusemachi",
            "hiragana" => "かみたかいぐんおぶせまち",
            "katakana" => "カミタカイグンオブセマチ",
            "katakana_half" => "ｶﾐﾀｶｲｸﾞﾝｵﾌﾞｾﾏﾁ",
        ]);

        City::create([
            "id" => 958,
            "prefecture_id" => 20,
            "name" => "上高井郡高山村",
            "romaji" => "kamitakaiguntakayamamura",
            "hiragana" => "かみたかいぐんたかやまむら",
            "katakana" => "カミタカイグンタカヤマムラ",
            "katakana_half" => "ｶﾐﾀｶｲｸﾞﾝﾀｶﾔﾏﾑﾗ",
        ]);

        City::create([
            "id" => 959,
            "prefecture_id" => 20,
            "name" => "下高井郡山ノ内町",
            "romaji" => "shimotakaigunyamanouchimachi",
            "hiragana" => "しもたかいぐんやまのうちまち",
            "katakana" => "シモタカイグンヤマノウチマチ",
            "katakana_half" => "ｼﾓﾀｶｲｸﾞﾝﾔﾏﾉｳﾁﾏﾁ",
        ]);

        City::create([
            "id" => 960,
            "prefecture_id" => 20,
            "name" => "下高井郡木島平村",
            "romaji" => "shimotakaigunkijimadairamura",
            "hiragana" => "しもたかいぐんきじまだいらむら",
            "katakana" => "シモタカイグンキジマダイラムラ",
            "katakana_half" => "ｼﾓﾀｶｲｸﾞﾝｷｼﾞﾏﾀﾞｲﾗﾑﾗ",
        ]);

        City::create([
            "id" => 961,
            "prefecture_id" => 20,
            "name" => "下高井郡野沢温泉村",
            "romaji" => "shimotakaigunnozawaonsenmura",
            "hiragana" => "しもたかいぐんのざわおんせんむら",
            "katakana" => "シモタカイグンノザワオンセンムラ",
            "katakana_half" => "ｼﾓﾀｶｲｸﾞﾝﾉｻﾞﾜｵﾝｾﾝﾑﾗ",
        ]);

        City::create([
            "id" => 962,
            "prefecture_id" => 20,
            "name" => "上水内郡信濃町",
            "romaji" => "kamiminochigunshinanomachi",
            "hiragana" => "かみみのちぐんしなのまち",
            "katakana" => "カミミノチグンシナノマチ",
            "katakana_half" => "ｶﾐﾐﾉﾁｸﾞﾝｼﾅﾉﾏﾁ",
        ]);

        City::create([
            "id" => 963,
            "prefecture_id" => 20,
            "name" => "上水内郡小川村",
            "romaji" => "kamiminochigunogawamura",
            "hiragana" => "かみみのちぐんおがわむら",
            "katakana" => "カミミノチグンオガワムラ",
            "katakana_half" => "ｶﾐﾐﾉﾁｸﾞﾝｵｶﾞﾜﾑﾗ",
        ]);

        City::create([
            "id" => 964,
            "prefecture_id" => 20,
            "name" => "上水内郡飯綱町",
            "romaji" => "kamiminochiguniizunamachi",
            "hiragana" => "かみみのちぐんいいづなまち",
            "katakana" => "カミミノチグンイイヅナマチ",
            "katakana_half" => "ｶﾐﾐﾉﾁｸﾞﾝｲｲﾂﾞﾅﾏﾁ",
        ]);

        City::create([
            "id" => 965,
            "prefecture_id" => 20,
            "name" => "下水内郡栄村",
            "romaji" => "shimominochigunsakaemura",
            "hiragana" => "しもみのちぐんさかえむら",
            "katakana" => "シモミノチグンサカエムラ",
            "katakana_half" => "ｼﾓﾐﾉﾁｸﾞﾝｻｶｴﾑﾗ",
        ]);

        City::create([
            "id" => 966,
            "prefecture_id" => 21,
            "name" => "岐阜市",
            "romaji" => "gifushi",
            "hiragana" => "ぎふし",
            "katakana" => "ギフシ",
            "katakana_half" => "ｷﾞﾌｼ",
        ]);

        City::create([
            "id" => 967,
            "prefecture_id" => 21,
            "name" => "大垣市",
            "romaji" => "oogakishi",
            "hiragana" => "おおがきし",
            "katakana" => "オオガキシ",
            "katakana_half" => "ｵｵｶﾞｷｼ",
        ]);

        City::create([
            "id" => 968,
            "prefecture_id" => 21,
            "name" => "高山市",
            "romaji" => "takayamashi",
            "hiragana" => "たかやまし",
            "katakana" => "タカヤマシ",
            "katakana_half" => "ﾀｶﾔﾏｼ",
        ]);

        City::create([
            "id" => 969,
            "prefecture_id" => 21,
            "name" => "多治見市",
            "romaji" => "tajimishi",
            "hiragana" => "たじみし",
            "katakana" => "タジミシ",
            "katakana_half" => "ﾀｼﾞﾐｼ",
        ]);

        City::create([
            "id" => 970,
            "prefecture_id" => 21,
            "name" => "関市",
            "romaji" => "sekishi",
            "hiragana" => "せきし",
            "katakana" => "セキシ",
            "katakana_half" => "ｾｷｼ",
        ]);

        City::create([
            "id" => 971,
            "prefecture_id" => 21,
            "name" => "中津川市",
            "romaji" => "nakatsugawashi",
            "hiragana" => "なかつがわし",
            "katakana" => "ナカツガワシ",
            "katakana_half" => "ﾅｶﾂｶﾞﾜｼ",
        ]);

        City::create([
            "id" => 972,
            "prefecture_id" => 21,
            "name" => "美濃市",
            "romaji" => "minoshi",
            "hiragana" => "みのし",
            "katakana" => "ミノシ",
            "katakana_half" => "ﾐﾉｼ",
        ]);

        City::create([
            "id" => 973,
            "prefecture_id" => 21,
            "name" => "瑞浪市",
            "romaji" => "mizunamishi",
            "hiragana" => "みずなみし",
            "katakana" => "ミズナミシ",
            "katakana_half" => "ﾐｽﾞﾅﾐｼ",
        ]);

        City::create([
            "id" => 974,
            "prefecture_id" => 21,
            "name" => "羽島市",
            "romaji" => "hashimashi",
            "hiragana" => "はしまし",
            "katakana" => "ハシマシ",
            "katakana_half" => "ﾊｼﾏｼ",
        ]);

        City::create([
            "id" => 975,
            "prefecture_id" => 21,
            "name" => "恵那市",
            "romaji" => "enashi",
            "hiragana" => "えなし",
            "katakana" => "エナシ",
            "katakana_half" => "ｴﾅｼ",
        ]);

        City::create([
            "id" => 976,
            "prefecture_id" => 21,
            "name" => "美濃加茂市",
            "romaji" => "minokamoshi",
            "hiragana" => "みのかもし",
            "katakana" => "ミノカモシ",
            "katakana_half" => "ﾐﾉｶﾓｼ",
        ]);

        City::create([
            "id" => 977,
            "prefecture_id" => 21,
            "name" => "土岐市",
            "romaji" => "tokishi",
            "hiragana" => "ときし",
            "katakana" => "トキシ",
            "katakana_half" => "ﾄｷｼ",
        ]);

        City::create([
            "id" => 978,
            "prefecture_id" => 21,
            "name" => "各務原市",
            "romaji" => "kakamigaharashi",
            "hiragana" => "かかみがはらし",
            "katakana" => "カカミガハラシ",
            "katakana_half" => "ｶｶﾐｶﾞﾊﾗｼ",
        ]);

        City::create([
            "id" => 979,
            "prefecture_id" => 21,
            "name" => "可児市",
            "romaji" => "kanishi",
            "hiragana" => "かにし",
            "katakana" => "カニシ",
            "katakana_half" => "ｶﾆｼ",
        ]);

        City::create([
            "id" => 980,
            "prefecture_id" => 21,
            "name" => "山県市",
            "romaji" => "yamagatashi",
            "hiragana" => "やまがたし",
            "katakana" => "ヤマガタシ",
            "katakana_half" => "ﾔﾏｶﾞﾀｼ",
        ]);

        City::create([
            "id" => 981,
            "prefecture_id" => 21,
            "name" => "瑞穂市",
            "romaji" => "mizuhoshi",
            "hiragana" => "みずほし",
            "katakana" => "ミズホシ",
            "katakana_half" => "ﾐｽﾞﾎｼ",
        ]);

        City::create([
            "id" => 982,
            "prefecture_id" => 21,
            "name" => "飛騨市",
            "romaji" => "hidashi",
            "hiragana" => "ひだし",
            "katakana" => "ヒダシ",
            "katakana_half" => "ﾋﾀﾞｼ",
        ]);

        City::create([
            "id" => 983,
            "prefecture_id" => 21,
            "name" => "本巣市",
            "romaji" => "motosushi",
            "hiragana" => "もとすし",
            "katakana" => "モトスシ",
            "katakana_half" => "ﾓﾄｽｼ",
        ]);

        City::create([
            "id" => 984,
            "prefecture_id" => 21,
            "name" => "郡上市",
            "romaji" => "gujoushi",
            "hiragana" => "ぐじょうし",
            "katakana" => "グジョウシ",
            "katakana_half" => "ｸﾞｼﾞｮｳｼ",
        ]);

        City::create([
            "id" => 985,
            "prefecture_id" => 21,
            "name" => "下呂市",
            "romaji" => "geroshi",
            "hiragana" => "げろし",
            "katakana" => "ゲロシ",
            "katakana_half" => "ｹﾞﾛｼ",
        ]);

        City::create([
            "id" => 986,
            "prefecture_id" => 21,
            "name" => "海津市",
            "romaji" => "kaizushi",
            "hiragana" => "かいづし",
            "katakana" => "カイヅシ",
            "katakana_half" => "ｶｲﾂﾞｼ",
        ]);

        City::create([
            "id" => 987,
            "prefecture_id" => 21,
            "name" => "羽島郡岐南町",
            "romaji" => "hashimagunginanchou",
            "hiragana" => "はしまぐんぎなんちょう",
            "katakana" => "ハシマグンギナンチョウ",
            "katakana_half" => "ﾊｼﾏｸﾞﾝｷﾞﾅﾝﾁｮｳ",
        ]);

        City::create([
            "id" => 988,
            "prefecture_id" => 21,
            "name" => "羽島郡笠松町",
            "romaji" => "hashimagunkasamatsuchou",
            "hiragana" => "はしまぐんかさまつちょう",
            "katakana" => "ハシマグンカサマツチョウ",
            "katakana_half" => "ﾊｼﾏｸﾞﾝｶｻﾏﾂﾁｮｳ",
        ]);

        City::create([
            "id" => 989,
            "prefecture_id" => 21,
            "name" => "養老郡養老町",
            "romaji" => "yourougunyourouchou",
            "hiragana" => "ようろうぐんようろうちょう",
            "katakana" => "ヨウロウグンヨウロウチョウ",
            "katakana_half" => "ﾖｳﾛｳｸﾞﾝﾖｳﾛｳﾁｮｳ",
        ]);

        City::create([
            "id" => 990,
            "prefecture_id" => 21,
            "name" => "不破郡垂井町",
            "romaji" => "fuwaguntaruichou",
            "hiragana" => "ふわぐんたるいちょう",
            "katakana" => "フワグンタルイチョウ",
            "katakana_half" => "ﾌﾜｸﾞﾝﾀﾙｲﾁｮｳ",
        ]);

        City::create([
            "id" => 991,
            "prefecture_id" => 21,
            "name" => "不破郡関ケ原町",
            "romaji" => "fuwagunsekigaharachou",
            "hiragana" => "ふわぐんせきがはらちょう",
            "katakana" => "フワグンセキガハラチョウ",
            "katakana_half" => "ﾌﾜｸﾞﾝｾｷｶﾞﾊﾗﾁｮｳ",
        ]);

        City::create([
            "id" => 992,
            "prefecture_id" => 21,
            "name" => "安八郡神戸町",
            "romaji" => "anpachigungoudochou",
            "hiragana" => "あんぱちぐんごうどちょう",
            "katakana" => "アンパチグンゴウドチョウ",
            "katakana_half" => "ｱﾝﾊﾟﾁｸﾞﾝｺﾞｳﾄﾞﾁｮｳ",
        ]);

        City::create([
            "id" => 993,
            "prefecture_id" => 21,
            "name" => "安八郡輪之内町",
            "romaji" => "anpachigunwanouchichou",
            "hiragana" => "あんぱちぐんわのうちちょう",
            "katakana" => "アンパチグンワノウチチョウ",
            "katakana_half" => "ｱﾝﾊﾟﾁｸﾞﾝﾜﾉｳﾁﾁｮｳ",
        ]);

        City::create([
            "id" => 994,
            "prefecture_id" => 21,
            "name" => "安八郡安八町",
            "romaji" => "anpachigunanpachichou",
            "hiragana" => "あんぱちぐんあんぱちちょう",
            "katakana" => "アンパチグンアンパチチョウ",
            "katakana_half" => "ｱﾝﾊﾟﾁｸﾞﾝｱﾝﾊﾟﾁﾁｮｳ",
        ]);

        City::create([
            "id" => 995,
            "prefecture_id" => 21,
            "name" => "揖斐郡揖斐川町",
            "romaji" => "ibigunibigawachou",
            "hiragana" => "いびぐんいびがわちょう",
            "katakana" => "イビグンイビガワチョウ",
            "katakana_half" => "ｲﾋﾞｸﾞﾝｲﾋﾞｶﾞﾜﾁｮｳ",
        ]);

        City::create([
            "id" => 996,
            "prefecture_id" => 21,
            "name" => "揖斐郡大野町",
            "romaji" => "ibigunoonochou",
            "hiragana" => "いびぐんおおのちょう",
            "katakana" => "イビグンオオノチョウ",
            "katakana_half" => "ｲﾋﾞｸﾞﾝｵｵﾉﾁｮｳ",
        ]);

        City::create([
            "id" => 997,
            "prefecture_id" => 21,
            "name" => "揖斐郡池田町",
            "romaji" => "ibigunikedachou",
            "hiragana" => "いびぐんいけだちょう",
            "katakana" => "イビグンイケダチョウ",
            "katakana_half" => "ｲﾋﾞｸﾞﾝｲｹﾀﾞﾁｮｳ",
        ]);

        City::create([
            "id" => 998,
            "prefecture_id" => 21,
            "name" => "本巣郡北方町",
            "romaji" => "motosugunkitagatachou",
            "hiragana" => "もとすぐんきたがたちょう",
            "katakana" => "モトスグンキタガタチョウ",
            "katakana_half" => "ﾓﾄｽｸﾞﾝｷﾀｶﾞﾀﾁｮｳ",
        ]);

        City::create([
            "id" => 999,
            "prefecture_id" => 21,
            "name" => "加茂郡坂祝町",
            "romaji" => "kamogunsakahogichou",
            "hiragana" => "かもぐんさかほぎちょう",
            "katakana" => "カモグンサカホギチョウ",
            "katakana_half" => "ｶﾓｸﾞﾝｻｶﾎｷﾞﾁｮｳ",
        ]);

        City::create([
            "id" => 1000,
            "prefecture_id" => 21,
            "name" => "加茂郡富加町",
            "romaji" => "kamoguntomikachou",
            "hiragana" => "かもぐんとみかちょう",
            "katakana" => "カモグントミカチョウ",
            "katakana_half" => "ｶﾓｸﾞﾝﾄﾐｶﾁｮｳ",
        ]);

        City::create([
            "id" => 1001,
            "prefecture_id" => 21,
            "name" => "加茂郡川辺町",
            "romaji" => "kamogunkawabechou",
            "hiragana" => "かもぐんかわべちょう",
            "katakana" => "カモグンカワベチョウ",
            "katakana_half" => "ｶﾓｸﾞﾝｶﾜﾍﾞﾁｮｳ",
        ]);

        City::create([
            "id" => 1002,
            "prefecture_id" => 21,
            "name" => "加茂郡七宗町",
            "romaji" => "kamogunhichisouchou",
            "hiragana" => "かもぐんひちそうちょう",
            "katakana" => "カモグンヒチソウチョウ",
            "katakana_half" => "ｶﾓｸﾞﾝﾋﾁｿｳﾁｮｳ",
        ]);

        City::create([
            "id" => 1003,
            "prefecture_id" => 21,
            "name" => "加茂郡八百津町",
            "romaji" => "kamogunyaotsuchou",
            "hiragana" => "かもぐんやおつちょう",
            "katakana" => "カモグンヤオツチョウ",
            "katakana_half" => "ｶﾓｸﾞﾝﾔｵﾂﾁｮｳ",
        ]);

        City::create([
            "id" => 1004,
            "prefecture_id" => 21,
            "name" => "加茂郡白川町",
            "romaji" => "kamogunshirakawachou",
            "hiragana" => "かもぐんしらかわちょう",
            "katakana" => "カモグンシラカワチョウ",
            "katakana_half" => "ｶﾓｸﾞﾝｼﾗｶﾜﾁｮｳ",
        ]);

        City::create([
            "id" => 1005,
            "prefecture_id" => 21,
            "name" => "加茂郡東白川村",
            "romaji" => "kamogunhigashishirakawamura",
            "hiragana" => "かもぐんひがししらかわむら",
            "katakana" => "カモグンヒガシシラカワムラ",
            "katakana_half" => "ｶﾓｸﾞﾝﾋｶﾞｼｼﾗｶﾜﾑﾗ",
        ]);

        City::create([
            "id" => 1006,
            "prefecture_id" => 21,
            "name" => "可児郡御嵩町",
            "romaji" => "kanigunmitakechou",
            "hiragana" => "かにぐんみたけちょう",
            "katakana" => "カニグンミタケチョウ",
            "katakana_half" => "ｶﾆｸﾞﾝﾐﾀｹﾁｮｳ",
        ]);

        City::create([
            "id" => 1007,
            "prefecture_id" => 21,
            "name" => "大野郡白川村",
            "romaji" => "oonogunshirakawamura",
            "hiragana" => "おおのぐんしらかわむら",
            "katakana" => "オオノグンシラカワムラ",
            "katakana_half" => "ｵｵﾉｸﾞﾝｼﾗｶﾜﾑﾗ",
        ]);

        City::create([
            "id" => 1008,
            "prefecture_id" => 22,
            "name" => "静岡市葵区",
            "romaji" => "shizuokashiaoiku",
            "hiragana" => "しずおかしあおいく",
            "katakana" => "シズオカシアオイク",
            "katakana_half" => "ｼｽﾞｵｶｼｱｵｲｸ",
        ]);

        City::create([
            "id" => 1009,
            "prefecture_id" => 22,
            "name" => "静岡市駿河区",
            "romaji" => "shizuokashisurugaku",
            "hiragana" => "しずおかしするがく",
            "katakana" => "シズオカシスルガク",
            "katakana_half" => "ｼｽﾞｵｶｼｽﾙｶﾞｸ",
        ]);

        City::create([
            "id" => 1010,
            "prefecture_id" => 22,
            "name" => "静岡市清水区",
            "romaji" => "shizuokashishimizuku",
            "hiragana" => "しずおかししみずく",
            "katakana" => "シズオカシシミズク",
            "katakana_half" => "ｼｽﾞｵｶｼｼﾐｽﾞｸ",
        ]);

        City::create([
            "id" => 1011,
            "prefecture_id" => 22,
            "name" => "浜松市中区",
            "romaji" => "hamamatsushinakaku",
            "hiragana" => "はままつしなかく",
            "katakana" => "ハママツシナカク",
            "katakana_half" => "ﾊﾏﾏﾂｼﾅｶｸ",
        ]);

        City::create([
            "id" => 1012,
            "prefecture_id" => 22,
            "name" => "浜松市東区",
            "romaji" => "hamamatsushihigashiku",
            "hiragana" => "はままつしひがしく",
            "katakana" => "ハママツシヒガシク",
            "katakana_half" => "ﾊﾏﾏﾂｼﾋｶﾞｼｸ",
        ]);

        City::create([
            "id" => 1013,
            "prefecture_id" => 22,
            "name" => "浜松市西区",
            "romaji" => "hamamatsushinishiku",
            "hiragana" => "はままつしにしく",
            "katakana" => "ハママツシニシク",
            "katakana_half" => "ﾊﾏﾏﾂｼﾆｼｸ",
        ]);

        City::create([
            "id" => 1014,
            "prefecture_id" => 22,
            "name" => "浜松市南区",
            "romaji" => "hamamatsushiminamiku",
            "hiragana" => "はままつしみなみく",
            "katakana" => "ハママツシミナミク",
            "katakana_half" => "ﾊﾏﾏﾂｼﾐﾅﾐｸ",
        ]);

        City::create([
            "id" => 1015,
            "prefecture_id" => 22,
            "name" => "浜松市北区",
            "romaji" => "hamamatsushikitaku",
            "hiragana" => "はままつしきたく",
            "katakana" => "ハママツシキタク",
            "katakana_half" => "ﾊﾏﾏﾂｼｷﾀｸ",
        ]);

        City::create([
            "id" => 1016,
            "prefecture_id" => 22,
            "name" => "浜松市浜北区",
            "romaji" => "hamamatsushihamakitaku",
            "hiragana" => "はままつしはまきたく",
            "katakana" => "ハママツシハマキタク",
            "katakana_half" => "ﾊﾏﾏﾂｼﾊﾏｷﾀｸ",
        ]);

        City::create([
            "id" => 1017,
            "prefecture_id" => 22,
            "name" => "浜松市天竜区",
            "romaji" => "hamamatsushitenryuuku",
            "hiragana" => "はままつしてんりゅうく",
            "katakana" => "ハママツシテンリュウク",
            "katakana_half" => "ﾊﾏﾏﾂｼﾃﾝﾘｭｳｸ",
        ]);

        City::create([
            "id" => 1018,
            "prefecture_id" => 22,
            "name" => "沼津市",
            "romaji" => "numazushi",
            "hiragana" => "ぬまづし",
            "katakana" => "ヌマヅシ",
            "katakana_half" => "ﾇﾏﾂﾞｼ",
        ]);

        City::create([
            "id" => 1019,
            "prefecture_id" => 22,
            "name" => "熱海市",
            "romaji" => "atamishi",
            "hiragana" => "あたみし",
            "katakana" => "アタミシ",
            "katakana_half" => "ｱﾀﾐｼ",
        ]);

        City::create([
            "id" => 1020,
            "prefecture_id" => 22,
            "name" => "三島市",
            "romaji" => "mishimashi",
            "hiragana" => "みしまし",
            "katakana" => "ミシマシ",
            "katakana_half" => "ﾐｼﾏｼ",
        ]);

        City::create([
            "id" => 1021,
            "prefecture_id" => 22,
            "name" => "富士宮市",
            "romaji" => "fujinomiyashi",
            "hiragana" => "ふじのみやし",
            "katakana" => "フジノミヤシ",
            "katakana_half" => "ﾌｼﾞﾉﾐﾔｼ",
        ]);

        City::create([
            "id" => 1022,
            "prefecture_id" => 22,
            "name" => "伊東市",
            "romaji" => "itoushi",
            "hiragana" => "いとうし",
            "katakana" => "イトウシ",
            "katakana_half" => "ｲﾄｳｼ",
        ]);

        City::create([
            "id" => 1023,
            "prefecture_id" => 22,
            "name" => "島田市",
            "romaji" => "shimadashi",
            "hiragana" => "しまだし",
            "katakana" => "シマダシ",
            "katakana_half" => "ｼﾏﾀﾞｼ",
        ]);

        City::create([
            "id" => 1024,
            "prefecture_id" => 22,
            "name" => "富士市",
            "romaji" => "fujishi",
            "hiragana" => "ふじし",
            "katakana" => "フジシ",
            "katakana_half" => "ﾌｼﾞｼ",
        ]);

        City::create([
            "id" => 1025,
            "prefecture_id" => 22,
            "name" => "磐田市",
            "romaji" => "iwatashi",
            "hiragana" => "いわたし",
            "katakana" => "イワタシ",
            "katakana_half" => "ｲﾜﾀｼ",
        ]);

        City::create([
            "id" => 1026,
            "prefecture_id" => 22,
            "name" => "焼津市",
            "romaji" => "yaizushi",
            "hiragana" => "やいづし",
            "katakana" => "ヤイヅシ",
            "katakana_half" => "ﾔｲﾂﾞｼ",
        ]);

        City::create([
            "id" => 1027,
            "prefecture_id" => 22,
            "name" => "掛川市",
            "romaji" => "kakegawashi",
            "hiragana" => "かけがわし",
            "katakana" => "カケガワシ",
            "katakana_half" => "ｶｹｶﾞﾜｼ",
        ]);

        City::create([
            "id" => 1028,
            "prefecture_id" => 22,
            "name" => "藤枝市",
            "romaji" => "fujiedashi",
            "hiragana" => "ふじえだし",
            "katakana" => "フジエダシ",
            "katakana_half" => "ﾌｼﾞｴﾀﾞｼ",
        ]);

        City::create([
            "id" => 1029,
            "prefecture_id" => 22,
            "name" => "御殿場市",
            "romaji" => "gotenbashi",
            "hiragana" => "ごてんばし",
            "katakana" => "ゴテンバシ",
            "katakana_half" => "ｺﾞﾃﾝﾊﾞｼ",
        ]);

        City::create([
            "id" => 1030,
            "prefecture_id" => 22,
            "name" => "袋井市",
            "romaji" => "fukuroishi",
            "hiragana" => "ふくろいし",
            "katakana" => "フクロイシ",
            "katakana_half" => "ﾌｸﾛｲｼ",
        ]);

        City::create([
            "id" => 1031,
            "prefecture_id" => 22,
            "name" => "下田市",
            "romaji" => "shimodashi",
            "hiragana" => "しもだし",
            "katakana" => "シモダシ",
            "katakana_half" => "ｼﾓﾀﾞｼ",
        ]);

        City::create([
            "id" => 1032,
            "prefecture_id" => 22,
            "name" => "裾野市",
            "romaji" => "susonoshi",
            "hiragana" => "すそのし",
            "katakana" => "スソノシ",
            "katakana_half" => "ｽｿﾉｼ",
        ]);

        City::create([
            "id" => 1033,
            "prefecture_id" => 22,
            "name" => "湖西市",
            "romaji" => "kosaishi",
            "hiragana" => "こさいし",
            "katakana" => "コサイシ",
            "katakana_half" => "ｺｻｲｼ",
        ]);

        City::create([
            "id" => 1034,
            "prefecture_id" => 22,
            "name" => "伊豆市",
            "romaji" => "izushi",
            "hiragana" => "いずし",
            "katakana" => "イズシ",
            "katakana_half" => "ｲｽﾞｼ",
        ]);

        City::create([
            "id" => 1035,
            "prefecture_id" => 22,
            "name" => "御前崎市",
            "romaji" => "omaezakishi",
            "hiragana" => "おまえざきし",
            "katakana" => "オマエザキシ",
            "katakana_half" => "ｵﾏｴｻﾞｷｼ",
        ]);

        City::create([
            "id" => 1036,
            "prefecture_id" => 22,
            "name" => "菊川市",
            "romaji" => "kikugawashi",
            "hiragana" => "きくがわし",
            "katakana" => "キクガワシ",
            "katakana_half" => "ｷｸｶﾞﾜｼ",
        ]);

        City::create([
            "id" => 1037,
            "prefecture_id" => 22,
            "name" => "伊豆の国市",
            "romaji" => "izunokunishi",
            "hiragana" => "いずのくにし",
            "katakana" => "イズノクニシ",
            "katakana_half" => "ｲｽﾞﾉｸﾆｼ",
        ]);

        City::create([
            "id" => 1038,
            "prefecture_id" => 22,
            "name" => "牧之原市",
            "romaji" => "makinoharashi",
            "hiragana" => "まきのはらし",
            "katakana" => "マキノハラシ",
            "katakana_half" => "ﾏｷﾉﾊﾗｼ",
        ]);

        City::create([
            "id" => 1039,
            "prefecture_id" => 22,
            "name" => "賀茂郡東伊豆町",
            "romaji" => "kamogunhigashiizuchou",
            "hiragana" => "かもぐんひがしいずちょう",
            "katakana" => "カモグンヒガシイズチョウ",
            "katakana_half" => "ｶﾓｸﾞﾝﾋｶﾞｼｲｽﾞﾁｮｳ",
        ]);

        City::create([
            "id" => 1040,
            "prefecture_id" => 22,
            "name" => "賀茂郡河津町",
            "romaji" => "kamogunkawazuchou",
            "hiragana" => "かもぐんかわづちょう",
            "katakana" => "カモグンカワヅチョウ",
            "katakana_half" => "ｶﾓｸﾞﾝｶﾜﾂﾞﾁｮｳ",
        ]);

        City::create([
            "id" => 1041,
            "prefecture_id" => 22,
            "name" => "賀茂郡南伊豆町",
            "romaji" => "kamogunminamiizuchou",
            "hiragana" => "かもぐんみなみいずちょう",
            "katakana" => "カモグンミナミイズチョウ",
            "katakana_half" => "ｶﾓｸﾞﾝﾐﾅﾐｲｽﾞﾁｮｳ",
        ]);

        City::create([
            "id" => 1042,
            "prefecture_id" => 22,
            "name" => "賀茂郡松崎町",
            "romaji" => "kamogunmatsuzakichou",
            "hiragana" => "かもぐんまつざきちょう",
            "katakana" => "カモグンマツザキチョウ",
            "katakana_half" => "ｶﾓｸﾞﾝﾏﾂｻﾞｷﾁｮｳ",
        ]);

        City::create([
            "id" => 1043,
            "prefecture_id" => 22,
            "name" => "賀茂郡西伊豆町",
            "romaji" => "kamogunnishiizuchou",
            "hiragana" => "かもぐんにしいずちょう",
            "katakana" => "カモグンニシイズチョウ",
            "katakana_half" => "ｶﾓｸﾞﾝﾆｼｲｽﾞﾁｮｳ",
        ]);

        City::create([
            "id" => 1044,
            "prefecture_id" => 22,
            "name" => "田方郡函南町",
            "romaji" => "tagatagunkannamichou",
            "hiragana" => "たがたぐんかんなみちょう",
            "katakana" => "タガタグンカンナミチョウ",
            "katakana_half" => "ﾀｶﾞﾀｸﾞﾝｶﾝﾅﾐﾁｮｳ",
        ]);

        City::create([
            "id" => 1045,
            "prefecture_id" => 22,
            "name" => "駿東郡清水町",
            "romaji" => "suntougunshimizuchou",
            "hiragana" => "すんとうぐんしみずちょう",
            "katakana" => "スントウグンシミズチョウ",
            "katakana_half" => "ｽﾝﾄｳｸﾞﾝｼﾐｽﾞﾁｮｳ",
        ]);

        City::create([
            "id" => 1046,
            "prefecture_id" => 22,
            "name" => "駿東郡長泉町",
            "romaji" => "suntougunnagaizumichou",
            "hiragana" => "すんとうぐんながいずみちょう",
            "katakana" => "スントウグンナガイズミチョウ",
            "katakana_half" => "ｽﾝﾄｳｸﾞﾝﾅｶﾞｲｽﾞﾐﾁｮｳ",
        ]);

        City::create([
            "id" => 1047,
            "prefecture_id" => 22,
            "name" => "駿東郡小山町",
            "romaji" => "suntougunoyamachou",
            "hiragana" => "すんとうぐんおやまちょう",
            "katakana" => "スントウグンオヤマチョウ",
            "katakana_half" => "ｽﾝﾄｳｸﾞﾝｵﾔﾏﾁｮｳ",
        ]);

        City::create([
            "id" => 1048,
            "prefecture_id" => 22,
            "name" => "榛原郡吉田町",
            "romaji" => "haibaragunyoshidachou",
            "hiragana" => "はいばらぐんよしだちょう",
            "katakana" => "ハイバラグンヨシダチョウ",
            "katakana_half" => "ﾊｲﾊﾞﾗｸﾞﾝﾖｼﾀﾞﾁｮｳ",
        ]);

        City::create([
            "id" => 1049,
            "prefecture_id" => 22,
            "name" => "榛原郡川根本町",
            "romaji" => "haibaragunkawanehonchou",
            "hiragana" => "はいばらぐんかわねほんちょう",
            "katakana" => "ハイバラグンカワネホンチョウ",
            "katakana_half" => "ﾊｲﾊﾞﾗｸﾞﾝｶﾜﾈﾎﾝﾁｮｳ",
        ]);

        City::create([
            "id" => 1050,
            "prefecture_id" => 22,
            "name" => "周智郡森町",
            "romaji" => "shuuchigunmorimachi",
            "hiragana" => "しゅうちぐんもりまち",
            "katakana" => "シュウチグンモリマチ",
            "katakana_half" => "ｼｭｳﾁｸﾞﾝﾓﾘﾏﾁ",
        ]);

        City::create([
            "id" => 1051,
            "prefecture_id" => 23,
            "name" => "名古屋市千種区",
            "romaji" => "nagoyashichikusaku",
            "hiragana" => "なごやしちくさく",
            "katakana" => "ナゴヤシチクサク",
            "katakana_half" => "ﾅｺﾞﾔｼﾁｸｻｸ",
        ]);

        City::create([
            "id" => 1052,
            "prefecture_id" => 23,
            "name" => "名古屋市東区",
            "romaji" => "nagoyashihigashiku",
            "hiragana" => "なごやしひがしく",
            "katakana" => "ナゴヤシヒガシク",
            "katakana_half" => "ﾅｺﾞﾔｼﾋｶﾞｼｸ",
        ]);

        City::create([
            "id" => 1053,
            "prefecture_id" => 23,
            "name" => "名古屋市北区",
            "romaji" => "nagoyashikitaku",
            "hiragana" => "なごやしきたく",
            "katakana" => "ナゴヤシキタク",
            "katakana_half" => "ﾅｺﾞﾔｼｷﾀｸ",
        ]);

        City::create([
            "id" => 1054,
            "prefecture_id" => 23,
            "name" => "名古屋市西区",
            "romaji" => "nagoyashinishiku",
            "hiragana" => "なごやしにしく",
            "katakana" => "ナゴヤシニシク",
            "katakana_half" => "ﾅｺﾞﾔｼﾆｼｸ",
        ]);

        City::create([
            "id" => 1055,
            "prefecture_id" => 23,
            "name" => "名古屋市中村区",
            "romaji" => "nagoyashinakamuraku",
            "hiragana" => "なごやしなかむらく",
            "katakana" => "ナゴヤシナカムラク",
            "katakana_half" => "ﾅｺﾞﾔｼﾅｶﾑﾗｸ",
        ]);

        City::create([
            "id" => 1056,
            "prefecture_id" => 23,
            "name" => "名古屋市中区",
            "romaji" => "nagoyashinakaku",
            "hiragana" => "なごやしなかく",
            "katakana" => "ナゴヤシナカク",
            "katakana_half" => "ﾅｺﾞﾔｼﾅｶｸ",
        ]);

        City::create([
            "id" => 1057,
            "prefecture_id" => 23,
            "name" => "名古屋市昭和区",
            "romaji" => "nagoyashishouwaku",
            "hiragana" => "なごやししょうわく",
            "katakana" => "ナゴヤシショウワク",
            "katakana_half" => "ﾅｺﾞﾔｼｼｮｳﾜｸ",
        ]);

        City::create([
            "id" => 1058,
            "prefecture_id" => 23,
            "name" => "名古屋市瑞穂区",
            "romaji" => "nagoyashimizuhoku",
            "hiragana" => "なごやしみずほく",
            "katakana" => "ナゴヤシミズホク",
            "katakana_half" => "ﾅｺﾞﾔｼﾐｽﾞﾎｸ",
        ]);

        City::create([
            "id" => 1059,
            "prefecture_id" => 23,
            "name" => "名古屋市熱田区",
            "romaji" => "nagoyashiatsutaku",
            "hiragana" => "なごやしあつたく",
            "katakana" => "ナゴヤシアツタク",
            "katakana_half" => "ﾅｺﾞﾔｼｱﾂﾀｸ",
        ]);

        City::create([
            "id" => 1060,
            "prefecture_id" => 23,
            "name" => "名古屋市中川区",
            "romaji" => "nagoyashinakagawaku",
            "hiragana" => "なごやしなかがわく",
            "katakana" => "ナゴヤシナカガワク",
            "katakana_half" => "ﾅｺﾞﾔｼﾅｶｶﾞﾜｸ",
        ]);

        City::create([
            "id" => 1061,
            "prefecture_id" => 23,
            "name" => "名古屋市港区",
            "romaji" => "nagoyashiminatoku",
            "hiragana" => "なごやしみなとく",
            "katakana" => "ナゴヤシミナトク",
            "katakana_half" => "ﾅｺﾞﾔｼﾐﾅﾄｸ",
        ]);

        City::create([
            "id" => 1062,
            "prefecture_id" => 23,
            "name" => "名古屋市南区",
            "romaji" => "nagoyashiminamiku",
            "hiragana" => "なごやしみなみく",
            "katakana" => "ナゴヤシミナミク",
            "katakana_half" => "ﾅｺﾞﾔｼﾐﾅﾐｸ",
        ]);

        City::create([
            "id" => 1063,
            "prefecture_id" => 23,
            "name" => "名古屋市守山区",
            "romaji" => "nagoyashimoriyamaku",
            "hiragana" => "なごやしもりやまく",
            "katakana" => "ナゴヤシモリヤマク",
            "katakana_half" => "ﾅｺﾞﾔｼﾓﾘﾔﾏｸ",
        ]);

        City::create([
            "id" => 1064,
            "prefecture_id" => 23,
            "name" => "名古屋市緑区",
            "romaji" => "nagoyashimidoriku",
            "hiragana" => "なごやしみどりく",
            "katakana" => "ナゴヤシミドリク",
            "katakana_half" => "ﾅｺﾞﾔｼﾐﾄﾞﾘｸ",
        ]);

        City::create([
            "id" => 1065,
            "prefecture_id" => 23,
            "name" => "名古屋市名東区",
            "romaji" => "nagoyashimeitouku",
            "hiragana" => "なごやしめいとうく",
            "katakana" => "ナゴヤシメイトウク",
            "katakana_half" => "ﾅｺﾞﾔｼﾒｲﾄｳｸ",
        ]);

        City::create([
            "id" => 1066,
            "prefecture_id" => 23,
            "name" => "名古屋市天白区",
            "romaji" => "nagoyashitenpakuku",
            "hiragana" => "なごやしてんぱくく",
            "katakana" => "ナゴヤシテンパクク",
            "katakana_half" => "ﾅｺﾞﾔｼﾃﾝﾊﾟｸｸ",
        ]);

        City::create([
            "id" => 1067,
            "prefecture_id" => 23,
            "name" => "豊橋市",
            "romaji" => "toyohashishi",
            "hiragana" => "とよはしし",
            "katakana" => "トヨハシシ",
            "katakana_half" => "ﾄﾖﾊｼｼ",
        ]);

        City::create([
            "id" => 1068,
            "prefecture_id" => 23,
            "name" => "岡崎市",
            "romaji" => "okazakishi",
            "hiragana" => "おかざきし",
            "katakana" => "オカザキシ",
            "katakana_half" => "ｵｶｻﾞｷｼ",
        ]);

        City::create([
            "id" => 1069,
            "prefecture_id" => 23,
            "name" => "一宮市",
            "romaji" => "ichinomiyashi",
            "hiragana" => "いちのみやし",
            "katakana" => "イチノミヤシ",
            "katakana_half" => "ｲﾁﾉﾐﾔｼ",
        ]);

        City::create([
            "id" => 1070,
            "prefecture_id" => 23,
            "name" => "瀬戸市",
            "romaji" => "setoshi",
            "hiragana" => "せとし",
            "katakana" => "セトシ",
            "katakana_half" => "ｾﾄｼ",
        ]);

        City::create([
            "id" => 1071,
            "prefecture_id" => 23,
            "name" => "半田市",
            "romaji" => "handashi",
            "hiragana" => "はんだし",
            "katakana" => "ハンダシ",
            "katakana_half" => "ﾊﾝﾀﾞｼ",
        ]);

        City::create([
            "id" => 1072,
            "prefecture_id" => 23,
            "name" => "春日井市",
            "romaji" => "kasugaishi",
            "hiragana" => "かすがいし",
            "katakana" => "カスガイシ",
            "katakana_half" => "ｶｽｶﾞｲｼ",
        ]);

        City::create([
            "id" => 1073,
            "prefecture_id" => 23,
            "name" => "豊川市",
            "romaji" => "toyokawashi",
            "hiragana" => "とよかわし",
            "katakana" => "トヨカワシ",
            "katakana_half" => "ﾄﾖｶﾜｼ",
        ]);

        City::create([
            "id" => 1074,
            "prefecture_id" => 23,
            "name" => "津島市",
            "romaji" => "tsushimashi",
            "hiragana" => "つしまし",
            "katakana" => "ツシマシ",
            "katakana_half" => "ﾂｼﾏｼ",
        ]);

        City::create([
            "id" => 1075,
            "prefecture_id" => 23,
            "name" => "碧南市",
            "romaji" => "hekinanshi",
            "hiragana" => "へきなんし",
            "katakana" => "ヘキナンシ",
            "katakana_half" => "ﾍｷﾅﾝｼ",
        ]);

        City::create([
            "id" => 1076,
            "prefecture_id" => 23,
            "name" => "刈谷市",
            "romaji" => "kariyashi",
            "hiragana" => "かりやし",
            "katakana" => "カリヤシ",
            "katakana_half" => "ｶﾘﾔｼ",
        ]);

        City::create([
            "id" => 1077,
            "prefecture_id" => 23,
            "name" => "豊田市",
            "romaji" => "toyotashi",
            "hiragana" => "とよたし",
            "katakana" => "トヨタシ",
            "katakana_half" => "ﾄﾖﾀｼ",
        ]);

        City::create([
            "id" => 1078,
            "prefecture_id" => 23,
            "name" => "安城市",
            "romaji" => "anjoushi",
            "hiragana" => "あんじょうし",
            "katakana" => "アンジョウシ",
            "katakana_half" => "ｱﾝｼﾞｮｳｼ",
        ]);

        City::create([
            "id" => 1079,
            "prefecture_id" => 23,
            "name" => "西尾市",
            "romaji" => "nishioshi",
            "hiragana" => "にしおし",
            "katakana" => "ニシオシ",
            "katakana_half" => "ﾆｼｵｼ",
        ]);

        City::create([
            "id" => 1080,
            "prefecture_id" => 23,
            "name" => "蒲郡市",
            "romaji" => "gamagoorishi",
            "hiragana" => "がまごおりし",
            "katakana" => "ガマゴオリシ",
            "katakana_half" => "ｶﾞﾏｺﾞｵﾘｼ",
        ]);

        City::create([
            "id" => 1081,
            "prefecture_id" => 23,
            "name" => "犬山市",
            "romaji" => "inuyamashi",
            "hiragana" => "いぬやまし",
            "katakana" => "イヌヤマシ",
            "katakana_half" => "ｲﾇﾔﾏｼ",
        ]);

        City::create([
            "id" => 1082,
            "prefecture_id" => 23,
            "name" => "常滑市",
            "romaji" => "tokonameshi",
            "hiragana" => "とこなめし",
            "katakana" => "トコナメシ",
            "katakana_half" => "ﾄｺﾅﾒｼ",
        ]);

        City::create([
            "id" => 1083,
            "prefecture_id" => 23,
            "name" => "江南市",
            "romaji" => "kounanshi",
            "hiragana" => "こうなんし",
            "katakana" => "コウナンシ",
            "katakana_half" => "ｺｳﾅﾝｼ",
        ]);

        City::create([
            "id" => 1084,
            "prefecture_id" => 23,
            "name" => "小牧市",
            "romaji" => "komakishi",
            "hiragana" => "こまきし",
            "katakana" => "コマキシ",
            "katakana_half" => "ｺﾏｷｼ",
        ]);

        City::create([
            "id" => 1085,
            "prefecture_id" => 23,
            "name" => "稲沢市",
            "romaji" => "inazawashi",
            "hiragana" => "いなざわし",
            "katakana" => "イナザワシ",
            "katakana_half" => "ｲﾅｻﾞﾜｼ",
        ]);

        City::create([
            "id" => 1086,
            "prefecture_id" => 23,
            "name" => "新城市",
            "romaji" => "shinshiroshi",
            "hiragana" => "しんしろし",
            "katakana" => "シンシロシ",
            "katakana_half" => "ｼﾝｼﾛｼ",
        ]);

        City::create([
            "id" => 1087,
            "prefecture_id" => 23,
            "name" => "東海市",
            "romaji" => "toukaishi",
            "hiragana" => "とうかいし",
            "katakana" => "トウカイシ",
            "katakana_half" => "ﾄｳｶｲｼ",
        ]);

        City::create([
            "id" => 1088,
            "prefecture_id" => 23,
            "name" => "大府市",
            "romaji" => "oobushi",
            "hiragana" => "おおぶし",
            "katakana" => "オオブシ",
            "katakana_half" => "ｵｵﾌﾞｼ",
        ]);

        City::create([
            "id" => 1089,
            "prefecture_id" => 23,
            "name" => "知多市",
            "romaji" => "chitashi",
            "hiragana" => "ちたし",
            "katakana" => "チタシ",
            "katakana_half" => "ﾁﾀｼ",
        ]);

        City::create([
            "id" => 1090,
            "prefecture_id" => 23,
            "name" => "知立市",
            "romaji" => "chiryuushi",
            "hiragana" => "ちりゅうし",
            "katakana" => "チリュウシ",
            "katakana_half" => "ﾁﾘｭｳｼ",
        ]);

        City::create([
            "id" => 1091,
            "prefecture_id" => 23,
            "name" => "尾張旭市",
            "romaji" => "owariasahishi",
            "hiragana" => "おわりあさひし",
            "katakana" => "オワリアサヒシ",
            "katakana_half" => "ｵﾜﾘｱｻﾋｼ",
        ]);

        City::create([
            "id" => 1092,
            "prefecture_id" => 23,
            "name" => "高浜市",
            "romaji" => "takahamashi",
            "hiragana" => "たかはまし",
            "katakana" => "タカハマシ",
            "katakana_half" => "ﾀｶﾊﾏｼ",
        ]);

        City::create([
            "id" => 1093,
            "prefecture_id" => 23,
            "name" => "岩倉市",
            "romaji" => "iwakurashi",
            "hiragana" => "いわくらし",
            "katakana" => "イワクラシ",
            "katakana_half" => "ｲﾜｸﾗｼ",
        ]);

        City::create([
            "id" => 1094,
            "prefecture_id" => 23,
            "name" => "豊明市",
            "romaji" => "toyoakeshi",
            "hiragana" => "とよあけし",
            "katakana" => "トヨアケシ",
            "katakana_half" => "ﾄﾖｱｹｼ",
        ]);

        City::create([
            "id" => 1095,
            "prefecture_id" => 23,
            "name" => "日進市",
            "romaji" => "nisshinshi",
            "hiragana" => "にっしんし",
            "katakana" => "ニッシンシ",
            "katakana_half" => "ﾆｯｼﾝｼ",
        ]);

        City::create([
            "id" => 1096,
            "prefecture_id" => 23,
            "name" => "田原市",
            "romaji" => "taharashi",
            "hiragana" => "たはらし",
            "katakana" => "タハラシ",
            "katakana_half" => "ﾀﾊﾗｼ",
        ]);

        City::create([
            "id" => 1097,
            "prefecture_id" => 23,
            "name" => "愛西市",
            "romaji" => "aisaishi",
            "hiragana" => "あいさいし",
            "katakana" => "アイサイシ",
            "katakana_half" => "ｱｲｻｲｼ",
        ]);

        City::create([
            "id" => 1098,
            "prefecture_id" => 23,
            "name" => "清須市",
            "romaji" => "kiyosushi",
            "hiragana" => "きよすし",
            "katakana" => "キヨスシ",
            "katakana_half" => "ｷﾖｽｼ",
        ]);

        City::create([
            "id" => 1099,
            "prefecture_id" => 23,
            "name" => "北名古屋市",
            "romaji" => "kitanagoyashi",
            "hiragana" => "きたなごやし",
            "katakana" => "キタナゴヤシ",
            "katakana_half" => "ｷﾀﾅｺﾞﾔｼ",
        ]);

        City::create([
            "id" => 1100,
            "prefecture_id" => 23,
            "name" => "弥富市",
            "romaji" => "yatomishi",
            "hiragana" => "やとみし",
            "katakana" => "ヤトミシ",
            "katakana_half" => "ﾔﾄﾐｼ",
        ]);

        City::create([
            "id" => 1101,
            "prefecture_id" => 23,
            "name" => "みよし市",
            "romaji" => "miyoshishi",
            "hiragana" => "みよしし",
            "katakana" => "ミヨシシ",
            "katakana_half" => "ﾐﾖｼｼ",
        ]);

        City::create([
            "id" => 1102,
            "prefecture_id" => 23,
            "name" => "あま市",
            "romaji" => "amashi",
            "hiragana" => "あまし",
            "katakana" => "アマシ",
            "katakana_half" => "ｱﾏｼ",
        ]);

        City::create([
            "id" => 1103,
            "prefecture_id" => 23,
            "name" => "長久手市",
            "romaji" => "nagakuteshi",
            "hiragana" => "ながくてし",
            "katakana" => "ナガクテシ",
            "katakana_half" => "ﾅｶﾞｸﾃｼ",
        ]);

        City::create([
            "id" => 1104,
            "prefecture_id" => 23,
            "name" => "愛知郡東郷町",
            "romaji" => "aichiguntougouchou",
            "hiragana" => "あいちぐんとうごうちょう",
            "katakana" => "アイチグントウゴウチョウ",
            "katakana_half" => "ｱｲﾁｸﾞﾝﾄｳｺﾞｳﾁｮｳ",
        ]);

        City::create([
            "id" => 1105,
            "prefecture_id" => 23,
            "name" => "西春日井郡豊山町",
            "romaji" => "nishikasugaiguntoyoyamachou",
            "hiragana" => "にしかすがいぐんとよやまちょう",
            "katakana" => "ニシカスガイグントヨヤマチョウ",
            "katakana_half" => "ﾆｼｶｽｶﾞｲｸﾞﾝﾄﾖﾔﾏﾁｮｳ",
        ]);

        City::create([
            "id" => 1106,
            "prefecture_id" => 23,
            "name" => "丹羽郡大口町",
            "romaji" => "niwagunooguchichou",
            "hiragana" => "にわぐんおおぐちちょう",
            "katakana" => "ニワグンオオグチチョウ",
            "katakana_half" => "ﾆﾜｸﾞﾝｵｵｸﾞﾁﾁｮｳ",
        ]);

        City::create([
            "id" => 1107,
            "prefecture_id" => 23,
            "name" => "丹羽郡扶桑町",
            "romaji" => "niwagunfusouchou",
            "hiragana" => "にわぐんふそうちょう",
            "katakana" => "ニワグンフソウチョウ",
            "katakana_half" => "ﾆﾜｸﾞﾝﾌｿｳﾁｮｳ",
        ]);

        City::create([
            "id" => 1108,
            "prefecture_id" => 23,
            "name" => "海部郡大治町",
            "romaji" => "amagunooharuchou",
            "hiragana" => "あまぐんおおはるちょう",
            "katakana" => "アマグンオオハルチョウ",
            "katakana_half" => "ｱﾏｸﾞﾝｵｵﾊﾙﾁｮｳ",
        ]);

        City::create([
            "id" => 1109,
            "prefecture_id" => 23,
            "name" => "海部郡蟹江町",
            "romaji" => "amagunkaniechou",
            "hiragana" => "あまぐんかにえちょう",
            "katakana" => "アマグンカニエチョウ",
            "katakana_half" => "ｱﾏｸﾞﾝｶﾆｴﾁｮｳ",
        ]);

        City::create([
            "id" => 1110,
            "prefecture_id" => 23,
            "name" => "海部郡飛島村",
            "romaji" => "amaguntobishimamura",
            "hiragana" => "あまぐんとびしまむら",
            "katakana" => "アマグントビシマムラ",
            "katakana_half" => "ｱﾏｸﾞﾝﾄﾋﾞｼﾏﾑﾗ",
        ]);

        City::create([
            "id" => 1111,
            "prefecture_id" => 23,
            "name" => "知多郡阿久比町",
            "romaji" => "chitagunaguichou",
            "hiragana" => "ちたぐんあぐいちょう",
            "katakana" => "チタグンアグイチョウ",
            "katakana_half" => "ﾁﾀｸﾞﾝｱｸﾞｲﾁｮｳ",
        ]);

        City::create([
            "id" => 1112,
            "prefecture_id" => 23,
            "name" => "知多郡東浦町",
            "romaji" => "chitagunhigashiurachou",
            "hiragana" => "ちたぐんひがしうらちょう",
            "katakana" => "チタグンヒガシウラチョウ",
            "katakana_half" => "ﾁﾀｸﾞﾝﾋｶﾞｼｳﾗﾁｮｳ",
        ]);

        City::create([
            "id" => 1113,
            "prefecture_id" => 23,
            "name" => "知多郡南知多町",
            "romaji" => "chitagunminamichitachou",
            "hiragana" => "ちたぐんみなみちたちょう",
            "katakana" => "チタグンミナミチタチョウ",
            "katakana_half" => "ﾁﾀｸﾞﾝﾐﾅﾐﾁﾀﾁｮｳ",
        ]);

        City::create([
            "id" => 1114,
            "prefecture_id" => 23,
            "name" => "知多郡美浜町",
            "romaji" => "chitagunmihamachou",
            "hiragana" => "ちたぐんみはまちょう",
            "katakana" => "チタグンミハマチョウ",
            "katakana_half" => "ﾁﾀｸﾞﾝﾐﾊﾏﾁｮｳ",
        ]);

        City::create([
            "id" => 1115,
            "prefecture_id" => 23,
            "name" => "知多郡武豊町",
            "romaji" => "chitaguntaketoyochou",
            "hiragana" => "ちたぐんたけとよちょう",
            "katakana" => "チタグンタケトヨチョウ",
            "katakana_half" => "ﾁﾀｸﾞﾝﾀｹﾄﾖﾁｮｳ",
        ]);

        City::create([
            "id" => 1116,
            "prefecture_id" => 23,
            "name" => "額田郡幸田町",
            "romaji" => "nukatagunkoutachou",
            "hiragana" => "ぬかたぐんこうたちょう",
            "katakana" => "ヌカタグンコウタチョウ",
            "katakana_half" => "ﾇｶﾀｸﾞﾝｺｳﾀﾁｮｳ",
        ]);

        City::create([
            "id" => 1117,
            "prefecture_id" => 23,
            "name" => "北設楽郡設楽町",
            "romaji" => "kitashitaragunshitarachou",
            "hiragana" => "きたしたらぐんしたらちょう",
            "katakana" => "キタシタラグンシタラチョウ",
            "katakana_half" => "ｷﾀｼﾀﾗｸﾞﾝｼﾀﾗﾁｮｳ",
        ]);

        City::create([
            "id" => 1118,
            "prefecture_id" => 23,
            "name" => "北設楽郡東栄町",
            "romaji" => "kitashitaraguntoueichou",
            "hiragana" => "きたしたらぐんとうえいちょう",
            "katakana" => "キタシタラグントウエイチョウ",
            "katakana_half" => "ｷﾀｼﾀﾗｸﾞﾝﾄｳｴｲﾁｮｳ",
        ]);

        City::create([
            "id" => 1119,
            "prefecture_id" => 23,
            "name" => "北設楽郡豊根村",
            "romaji" => "kitashitaraguntoyonemura",
            "hiragana" => "きたしたらぐんとよねむら",
            "katakana" => "キタシタラグントヨネムラ",
            "katakana_half" => "ｷﾀｼﾀﾗｸﾞﾝﾄﾖﾈﾑﾗ",
        ]);

        City::create([
            "id" => 1120,
            "prefecture_id" => 24,
            "name" => "津市",
            "romaji" => "tsushi",
            "hiragana" => "つし",
            "katakana" => "ツシ",
            "katakana_half" => "ﾂｼ",
        ]);

        City::create([
            "id" => 1121,
            "prefecture_id" => 24,
            "name" => "四日市市",
            "romaji" => "yokkaichishi",
            "hiragana" => "よっかいちし",
            "katakana" => "ヨッカイチシ",
            "katakana_half" => "ﾖｯｶｲﾁｼ",
        ]);

        City::create([
            "id" => 1122,
            "prefecture_id" => 24,
            "name" => "伊勢市",
            "romaji" => "iseshi",
            "hiragana" => "いせし",
            "katakana" => "イセシ",
            "katakana_half" => "ｲｾｼ",
        ]);

        City::create([
            "id" => 1123,
            "prefecture_id" => 24,
            "name" => "松阪市",
            "romaji" => "matsusakashi",
            "hiragana" => "まつさかし",
            "katakana" => "マツサカシ",
            "katakana_half" => "ﾏﾂｻｶｼ",
        ]);

        City::create([
            "id" => 1124,
            "prefecture_id" => 24,
            "name" => "桑名市",
            "romaji" => "kuwanashi",
            "hiragana" => "くわなし",
            "katakana" => "クワナシ",
            "katakana_half" => "ｸﾜﾅｼ",
        ]);

        City::create([
            "id" => 1125,
            "prefecture_id" => 24,
            "name" => "鈴鹿市",
            "romaji" => "suzukashi",
            "hiragana" => "すずかし",
            "katakana" => "スズカシ",
            "katakana_half" => "ｽｽﾞｶｼ",
        ]);

        City::create([
            "id" => 1126,
            "prefecture_id" => 24,
            "name" => "名張市",
            "romaji" => "nabarishi",
            "hiragana" => "なばりし",
            "katakana" => "ナバリシ",
            "katakana_half" => "ﾅﾊﾞﾘｼ",
        ]);

        City::create([
            "id" => 1127,
            "prefecture_id" => 24,
            "name" => "尾鷲市",
            "romaji" => "owaseshi",
            "hiragana" => "おわせし",
            "katakana" => "オワセシ",
            "katakana_half" => "ｵﾜｾｼ",
        ]);

        City::create([
            "id" => 1128,
            "prefecture_id" => 24,
            "name" => "亀山市",
            "romaji" => "kameyamashi",
            "hiragana" => "かめやまし",
            "katakana" => "カメヤマシ",
            "katakana_half" => "ｶﾒﾔﾏｼ",
        ]);

        City::create([
            "id" => 1129,
            "prefecture_id" => 24,
            "name" => "鳥羽市",
            "romaji" => "tobashi",
            "hiragana" => "とばし",
            "katakana" => "トバシ",
            "katakana_half" => "ﾄﾊﾞｼ",
        ]);

        City::create([
            "id" => 1130,
            "prefecture_id" => 24,
            "name" => "熊野市",
            "romaji" => "kumanoshi",
            "hiragana" => "くまのし",
            "katakana" => "クマノシ",
            "katakana_half" => "ｸﾏﾉｼ",
        ]);

        City::create([
            "id" => 1131,
            "prefecture_id" => 24,
            "name" => "いなべ市",
            "romaji" => "inabeshi",
            "hiragana" => "いなべし",
            "katakana" => "イナベシ",
            "katakana_half" => "ｲﾅﾍﾞｼ",
        ]);

        City::create([
            "id" => 1132,
            "prefecture_id" => 24,
            "name" => "志摩市",
            "romaji" => "shimashi",
            "hiragana" => "しまし",
            "katakana" => "シマシ",
            "katakana_half" => "ｼﾏｼ",
        ]);

        City::create([
            "id" => 1133,
            "prefecture_id" => 24,
            "name" => "伊賀市",
            "romaji" => "igashi",
            "hiragana" => "いがし",
            "katakana" => "イガシ",
            "katakana_half" => "ｲｶﾞｼ",
        ]);

        City::create([
            "id" => 1134,
            "prefecture_id" => 24,
            "name" => "桑名郡木曽岬町",
            "romaji" => "kuwanagunkisosakichou",
            "hiragana" => "くわなぐんきそさきちょう",
            "katakana" => "クワナグンキソサキチョウ",
            "katakana_half" => "ｸﾜﾅｸﾞﾝｷｿｻｷﾁｮｳ",
        ]);

        City::create([
            "id" => 1135,
            "prefecture_id" => 24,
            "name" => "員弁郡東員町",
            "romaji" => "inabeguntouinchou",
            "hiragana" => "いなべぐんとういんちょう",
            "katakana" => "イナベグントウインチョウ",
            "katakana_half" => "ｲﾅﾍﾞｸﾞﾝﾄｳｲﾝﾁｮｳ",
        ]);

        City::create([
            "id" => 1136,
            "prefecture_id" => 24,
            "name" => "三重郡菰野町",
            "romaji" => "miegunkomonochou",
            "hiragana" => "みえぐんこものちょう",
            "katakana" => "ミエグンコモノチョウ",
            "katakana_half" => "ﾐｴｸﾞﾝｺﾓﾉﾁｮｳ",
        ]);

        City::create([
            "id" => 1137,
            "prefecture_id" => 24,
            "name" => "三重郡朝日町",
            "romaji" => "miegunasahichou",
            "hiragana" => "みえぐんあさひちょう",
            "katakana" => "ミエグンアサヒチョウ",
            "katakana_half" => "ﾐｴｸﾞﾝｱｻﾋﾁｮｳ",
        ]);

        City::create([
            "id" => 1138,
            "prefecture_id" => 24,
            "name" => "三重郡川越町",
            "romaji" => "miegunkawagoechou",
            "hiragana" => "みえぐんかわごえちょう",
            "katakana" => "ミエグンカワゴエチョウ",
            "katakana_half" => "ﾐｴｸﾞﾝｶﾜｺﾞｴﾁｮｳ",
        ]);

        City::create([
            "id" => 1139,
            "prefecture_id" => 24,
            "name" => "多気郡多気町",
            "romaji" => "takiguntakichou",
            "hiragana" => "たきぐんたきちょう",
            "katakana" => "タキグンタキチョウ",
            "katakana_half" => "ﾀｷｸﾞﾝﾀｷﾁｮｳ",
        ]);

        City::create([
            "id" => 1140,
            "prefecture_id" => 24,
            "name" => "多気郡明和町",
            "romaji" => "takigunmeiwachou",
            "hiragana" => "たきぐんめいわちょう",
            "katakana" => "タキグンメイワチョウ",
            "katakana_half" => "ﾀｷｸﾞﾝﾒｲﾜﾁｮｳ",
        ]);

        City::create([
            "id" => 1141,
            "prefecture_id" => 24,
            "name" => "多気郡大台町",
            "romaji" => "takigunoodaichou",
            "hiragana" => "たきぐんおおだいちょう",
            "katakana" => "タキグンオオダイチョウ",
            "katakana_half" => "ﾀｷｸﾞﾝｵｵﾀﾞｲﾁｮｳ",
        ]);

        City::create([
            "id" => 1142,
            "prefecture_id" => 24,
            "name" => "度会郡玉城町",
            "romaji" => "wataraiguntamakichou",
            "hiragana" => "わたらいぐんたまきちょう",
            "katakana" => "ワタライグンタマキチョウ",
            "katakana_half" => "ﾜﾀﾗｲｸﾞﾝﾀﾏｷﾁｮｳ",
        ]);

        City::create([
            "id" => 1143,
            "prefecture_id" => 24,
            "name" => "度会郡度会町",
            "romaji" => "wataraigunwataraichou",
            "hiragana" => "わたらいぐんわたらいちょう",
            "katakana" => "ワタライグンワタライチョウ",
            "katakana_half" => "ﾜﾀﾗｲｸﾞﾝﾜﾀﾗｲﾁｮｳ",
        ]);

        City::create([
            "id" => 1144,
            "prefecture_id" => 24,
            "name" => "度会郡大紀町",
            "romaji" => "wataraiguntaikichou",
            "hiragana" => "わたらいぐんたいきちょう",
            "katakana" => "ワタライグンタイキチョウ",
            "katakana_half" => "ﾜﾀﾗｲｸﾞﾝﾀｲｷﾁｮｳ",
        ]);

        City::create([
            "id" => 1145,
            "prefecture_id" => 24,
            "name" => "度会郡南伊勢町",
            "romaji" => "wataraigunminamiisechou",
            "hiragana" => "わたらいぐんみなみいせちょう",
            "katakana" => "ワタライグンミナミイセチョウ",
            "katakana_half" => "ﾜﾀﾗｲｸﾞﾝﾐﾅﾐｲｾﾁｮｳ",
        ]);

        City::create([
            "id" => 1146,
            "prefecture_id" => 24,
            "name" => "北牟婁郡紀北町",
            "romaji" => "kitamurogunkihokuchou",
            "hiragana" => "きたむろぐんきほくちょう",
            "katakana" => "キタムログンキホクチョウ",
            "katakana_half" => "ｷﾀﾑﾛｸﾞﾝｷﾎｸﾁｮｳ",
        ]);

        City::create([
            "id" => 1147,
            "prefecture_id" => 24,
            "name" => "南牟婁郡御浜町",
            "romaji" => "minamimurogunmihamachou",
            "hiragana" => "みなみむろぐんみはまちょう",
            "katakana" => "ミナミムログンミハマチョウ",
            "katakana_half" => "ﾐﾅﾐﾑﾛｸﾞﾝﾐﾊﾏﾁｮｳ",
        ]);

        City::create([
            "id" => 1148,
            "prefecture_id" => 24,
            "name" => "南牟婁郡紀宝町",
            "romaji" => "minamimurogunkihouchou",
            "hiragana" => "みなみむろぐんきほうちょう",
            "katakana" => "ミナミムログンキホウチョウ",
            "katakana_half" => "ﾐﾅﾐﾑﾛｸﾞﾝｷﾎｳﾁｮｳ",
        ]);

        City::create([
            "id" => 1149,
            "prefecture_id" => 25,
            "name" => "大津市",
            "romaji" => "ootsushi",
            "hiragana" => "おおつし",
            "katakana" => "オオツシ",
            "katakana_half" => "ｵｵﾂｼ",
        ]);

        City::create([
            "id" => 1150,
            "prefecture_id" => 25,
            "name" => "彦根市",
            "romaji" => "hikoneshi",
            "hiragana" => "ひこねし",
            "katakana" => "ヒコネシ",
            "katakana_half" => "ﾋｺﾈｼ",
        ]);

        City::create([
            "id" => 1151,
            "prefecture_id" => 25,
            "name" => "長浜市",
            "romaji" => "nagahamashi",
            "hiragana" => "ながはまし",
            "katakana" => "ナガハマシ",
            "katakana_half" => "ﾅｶﾞﾊﾏｼ",
        ]);

        City::create([
            "id" => 1152,
            "prefecture_id" => 25,
            "name" => "近江八幡市",
            "romaji" => "oumihachimanshi",
            "hiragana" => "おうみはちまんし",
            "katakana" => "オウミハチマンシ",
            "katakana_half" => "ｵｳﾐﾊﾁﾏﾝｼ",
        ]);

        City::create([
            "id" => 1153,
            "prefecture_id" => 25,
            "name" => "草津市",
            "romaji" => "kusatsushi",
            "hiragana" => "くさつし",
            "katakana" => "クサツシ",
            "katakana_half" => "ｸｻﾂｼ",
        ]);

        City::create([
            "id" => 1154,
            "prefecture_id" => 25,
            "name" => "守山市",
            "romaji" => "moriyamashi",
            "hiragana" => "もりやまし",
            "katakana" => "モリヤマシ",
            "katakana_half" => "ﾓﾘﾔﾏｼ",
        ]);

        City::create([
            "id" => 1155,
            "prefecture_id" => 25,
            "name" => "栗東市",
            "romaji" => "rittoushi",
            "hiragana" => "りっとうし",
            "katakana" => "リットウシ",
            "katakana_half" => "ﾘｯﾄｳｼ",
        ]);

        City::create([
            "id" => 1156,
            "prefecture_id" => 25,
            "name" => "甲賀市",
            "romaji" => "koukashi",
            "hiragana" => "こうかし",
            "katakana" => "コウカシ",
            "katakana_half" => "ｺｳｶｼ",
        ]);

        City::create([
            "id" => 1157,
            "prefecture_id" => 25,
            "name" => "野洲市",
            "romaji" => "yasushi",
            "hiragana" => "やすし",
            "katakana" => "ヤスシ",
            "katakana_half" => "ﾔｽｼ",
        ]);

        City::create([
            "id" => 1158,
            "prefecture_id" => 25,
            "name" => "湖南市",
            "romaji" => "konanshi",
            "hiragana" => "こなんし",
            "katakana" => "コナンシ",
            "katakana_half" => "ｺﾅﾝｼ",
        ]);

        City::create([
            "id" => 1159,
            "prefecture_id" => 25,
            "name" => "高島市",
            "romaji" => "takashimashi",
            "hiragana" => "たかしまし",
            "katakana" => "タカシマシ",
            "katakana_half" => "ﾀｶｼﾏｼ",
        ]);

        City::create([
            "id" => 1160,
            "prefecture_id" => 25,
            "name" => "東近江市",
            "romaji" => "higashioumishi",
            "hiragana" => "ひがしおうみし",
            "katakana" => "ヒガシオウミシ",
            "katakana_half" => "ﾋｶﾞｼｵｳﾐｼ",
        ]);

        City::create([
            "id" => 1161,
            "prefecture_id" => 25,
            "name" => "米原市",
            "romaji" => "maibarashi",
            "hiragana" => "まいばらし",
            "katakana" => "マイバラシ",
            "katakana_half" => "ﾏｲﾊﾞﾗｼ",
        ]);

        City::create([
            "id" => 1162,
            "prefecture_id" => 25,
            "name" => "蒲生郡日野町",
            "romaji" => "gamougunhinochou",
            "hiragana" => "がもうぐんひのちょう",
            "katakana" => "ガモウグンヒノチョウ",
            "katakana_half" => "ｶﾞﾓｳｸﾞﾝﾋﾉﾁｮｳ",
        ]);

        City::create([
            "id" => 1163,
            "prefecture_id" => 25,
            "name" => "蒲生郡竜王町",
            "romaji" => "gamougunryuuouchou",
            "hiragana" => "がもうぐんりゅうおうちょう",
            "katakana" => "ガモウグンリュウオウチョウ",
            "katakana_half" => "ｶﾞﾓｳｸﾞﾝﾘｭｳｵｳﾁｮｳ",
        ]);

        City::create([
            "id" => 1164,
            "prefecture_id" => 25,
            "name" => "愛知郡愛荘町",
            "romaji" => "echigunaishouchou",
            "hiragana" => "えちぐんあいしょうちょう",
            "katakana" => "エチグンアイショウチョウ",
            "katakana_half" => "ｴﾁｸﾞﾝｱｲｼｮｳﾁｮｳ",
        ]);

        City::create([
            "id" => 1165,
            "prefecture_id" => 25,
            "name" => "犬上郡豊郷町",
            "romaji" => "inukamiguntoyosatochou",
            "hiragana" => "いぬかみぐんとよさとちょう",
            "katakana" => "イヌカミグントヨサトチョウ",
            "katakana_half" => "ｲﾇｶﾐｸﾞﾝﾄﾖｻﾄﾁｮｳ",
        ]);

        City::create([
            "id" => 1166,
            "prefecture_id" => 25,
            "name" => "犬上郡甲良町",
            "romaji" => "inukamigunkourachou",
            "hiragana" => "いぬかみぐんこうらちょう",
            "katakana" => "イヌカミグンコウラチョウ",
            "katakana_half" => "ｲﾇｶﾐｸﾞﾝｺｳﾗﾁｮｳ",
        ]);

        City::create([
            "id" => 1167,
            "prefecture_id" => 25,
            "name" => "犬上郡多賀町",
            "romaji" => "inukamiguntagachou",
            "hiragana" => "いぬかみぐんたがちょう",
            "katakana" => "イヌカミグンタガチョウ",
            "katakana_half" => "ｲﾇｶﾐｸﾞﾝﾀｶﾞﾁｮｳ",
        ]);

        City::create([
            "id" => 1168,
            "prefecture_id" => 26,
            "name" => "京都市北区",
            "romaji" => "kyoutoshikitaku",
            "hiragana" => "きょうとしきたく",
            "katakana" => "キョウトシキタク",
            "katakana_half" => "ｷｮｳﾄｼｷﾀｸ",
        ]);

        City::create([
            "id" => 1169,
            "prefecture_id" => 26,
            "name" => "京都市上京区",
            "romaji" => "kyoutoshikamigyouku",
            "hiragana" => "きょうとしかみぎょうく",
            "katakana" => "キョウトシカミギョウク",
            "katakana_half" => "ｷｮｳﾄｼｶﾐｷﾞｮｳｸ",
        ]);

        City::create([
            "id" => 1170,
            "prefecture_id" => 26,
            "name" => "京都市左京区",
            "romaji" => "kyoutoshisakyouku",
            "hiragana" => "きょうとしさきょうく",
            "katakana" => "キョウトシサキョウク",
            "katakana_half" => "ｷｮｳﾄｼｻｷｮｳｸ",
        ]);

        City::create([
            "id" => 1171,
            "prefecture_id" => 26,
            "name" => "京都市中京区",
            "romaji" => "kyoutoshinakagyouku",
            "hiragana" => "きょうとしなかぎょうく",
            "katakana" => "キョウトシナカギョウク",
            "katakana_half" => "ｷｮｳﾄｼﾅｶｷﾞｮｳｸ",
        ]);

        City::create([
            "id" => 1172,
            "prefecture_id" => 26,
            "name" => "京都市東山区",
            "romaji" => "kyoutoshihigashiyamaku",
            "hiragana" => "きょうとしひがしやまく",
            "katakana" => "キョウトシヒガシヤマク",
            "katakana_half" => "ｷｮｳﾄｼﾋｶﾞｼﾔﾏｸ",
        ]);

        City::create([
            "id" => 1173,
            "prefecture_id" => 26,
            "name" => "京都市下京区",
            "romaji" => "kyoutoshishimogyouku",
            "hiragana" => "きょうとししもぎょうく",
            "katakana" => "キョウトシシモギョウク",
            "katakana_half" => "ｷｮｳﾄｼｼﾓｷﾞｮｳｸ",
        ]);

        City::create([
            "id" => 1174,
            "prefecture_id" => 26,
            "name" => "京都市南区",
            "romaji" => "kyoutoshiminamiku",
            "hiragana" => "きょうとしみなみく",
            "katakana" => "キョウトシミナミク",
            "katakana_half" => "ｷｮｳﾄｼﾐﾅﾐｸ",
        ]);

        City::create([
            "id" => 1175,
            "prefecture_id" => 26,
            "name" => "京都市右京区",
            "romaji" => "kyoutoshiukyouku",
            "hiragana" => "きょうとしうきょうく",
            "katakana" => "キョウトシウキョウク",
            "katakana_half" => "ｷｮｳﾄｼｳｷｮｳｸ",
        ]);

        City::create([
            "id" => 1176,
            "prefecture_id" => 26,
            "name" => "京都市伏見区",
            "romaji" => "kyoutoshifushimiku",
            "hiragana" => "きょうとしふしみく",
            "katakana" => "キョウトシフシミク",
            "katakana_half" => "ｷｮｳﾄｼﾌｼﾐｸ",
        ]);

        City::create([
            "id" => 1177,
            "prefecture_id" => 26,
            "name" => "京都市山科区",
            "romaji" => "kyoutoshiyamashinaku",
            "hiragana" => "きょうとしやましなく",
            "katakana" => "キョウトシヤマシナク",
            "katakana_half" => "ｷｮｳﾄｼﾔﾏｼﾅｸ",
        ]);

        City::create([
            "id" => 1178,
            "prefecture_id" => 26,
            "name" => "京都市西京区",
            "romaji" => "kyoutoshinishikyouku",
            "hiragana" => "きょうとしにしきょうく",
            "katakana" => "キョウトシニシキョウク",
            "katakana_half" => "ｷｮｳﾄｼﾆｼｷｮｳｸ",
        ]);

        City::create([
            "id" => 1179,
            "prefecture_id" => 26,
            "name" => "福知山市",
            "romaji" => "fukuchiyamashi",
            "hiragana" => "ふくちやまし",
            "katakana" => "フクチヤマシ",
            "katakana_half" => "ﾌｸﾁﾔﾏｼ",
        ]);

        City::create([
            "id" => 1180,
            "prefecture_id" => 26,
            "name" => "舞鶴市",
            "romaji" => "maizurushi",
            "hiragana" => "まいづるし",
            "katakana" => "マイヅルシ",
            "katakana_half" => "ﾏｲﾂﾞﾙｼ",
        ]);

        City::create([
            "id" => 1181,
            "prefecture_id" => 26,
            "name" => "綾部市",
            "romaji" => "ayabeshi",
            "hiragana" => "あやべし",
            "katakana" => "アヤベシ",
            "katakana_half" => "ｱﾔﾍﾞｼ",
        ]);

        City::create([
            "id" => 1182,
            "prefecture_id" => 26,
            "name" => "宇治市",
            "romaji" => "ujishi",
            "hiragana" => "うじし",
            "katakana" => "ウジシ",
            "katakana_half" => "ｳｼﾞｼ",
        ]);

        City::create([
            "id" => 1183,
            "prefecture_id" => 26,
            "name" => "宮津市",
            "romaji" => "miyazushi",
            "hiragana" => "みやづし",
            "katakana" => "ミヤヅシ",
            "katakana_half" => "ﾐﾔﾂﾞｼ",
        ]);

        City::create([
            "id" => 1184,
            "prefecture_id" => 26,
            "name" => "亀岡市",
            "romaji" => "kameokashi",
            "hiragana" => "かめおかし",
            "katakana" => "カメオカシ",
            "katakana_half" => "ｶﾒｵｶｼ",
        ]);

        City::create([
            "id" => 1185,
            "prefecture_id" => 26,
            "name" => "城陽市",
            "romaji" => "jouyoushi",
            "hiragana" => "じょうようし",
            "katakana" => "ジョウヨウシ",
            "katakana_half" => "ｼﾞｮｳﾖｳｼ",
        ]);

        City::create([
            "id" => 1186,
            "prefecture_id" => 26,
            "name" => "向日市",
            "romaji" => "mukoushi",
            "hiragana" => "むこうし",
            "katakana" => "ムコウシ",
            "katakana_half" => "ﾑｺｳｼ",
        ]);

        City::create([
            "id" => 1187,
            "prefecture_id" => 26,
            "name" => "長岡京市",
            "romaji" => "nagaokakyoushi",
            "hiragana" => "ながおかきょうし",
            "katakana" => "ナガオカキョウシ",
            "katakana_half" => "ﾅｶﾞｵｶｷｮｳｼ",
        ]);

        City::create([
            "id" => 1188,
            "prefecture_id" => 26,
            "name" => "八幡市",
            "romaji" => "yawatashi",
            "hiragana" => "やわたし",
            "katakana" => "ヤワタシ",
            "katakana_half" => "ﾔﾜﾀｼ",
        ]);

        City::create([
            "id" => 1189,
            "prefecture_id" => 26,
            "name" => "京田辺市",
            "romaji" => "kyoutanabeshi",
            "hiragana" => "きょうたなべし",
            "katakana" => "キョウタナベシ",
            "katakana_half" => "ｷｮｳﾀﾅﾍﾞｼ",
        ]);

        City::create([
            "id" => 1190,
            "prefecture_id" => 26,
            "name" => "京丹後市",
            "romaji" => "kyoutangoshi",
            "hiragana" => "きょうたんごし",
            "katakana" => "キョウタンゴシ",
            "katakana_half" => "ｷｮｳﾀﾝｺﾞｼ",
        ]);

        City::create([
            "id" => 1191,
            "prefecture_id" => 26,
            "name" => "南丹市",
            "romaji" => "nantanshi",
            "hiragana" => "なんたんし",
            "katakana" => "ナンタンシ",
            "katakana_half" => "ﾅﾝﾀﾝｼ",
        ]);

        City::create([
            "id" => 1192,
            "prefecture_id" => 26,
            "name" => "木津川市",
            "romaji" => "kizugawashi",
            "hiragana" => "きづがわし",
            "katakana" => "キヅガワシ",
            "katakana_half" => "ｷﾂﾞｶﾞﾜｼ",
        ]);

        City::create([
            "id" => 1193,
            "prefecture_id" => 26,
            "name" => "乙訓郡大山崎町",
            "romaji" => "otokunigunooyamazakichou",
            "hiragana" => "おとくにぐんおおやまざきちょう",
            "katakana" => "オトクニグンオオヤマザキチョウ",
            "katakana_half" => "ｵﾄｸﾆｸﾞﾝｵｵﾔﾏｻﾞｷﾁｮｳ",
        ]);

        City::create([
            "id" => 1194,
            "prefecture_id" => 26,
            "name" => "久世郡久御山町",
            "romaji" => "kusegunkumiyamachou",
            "hiragana" => "くせぐんくみやまちょう",
            "katakana" => "クセグンクミヤマチョウ",
            "katakana_half" => "ｸｾｸﾞﾝｸﾐﾔﾏﾁｮｳ",
        ]);

        City::create([
            "id" => 1195,
            "prefecture_id" => 26,
            "name" => "綴喜郡井手町",
            "romaji" => "tsuzukigunidechou",
            "hiragana" => "つづきぐんいでちょう",
            "katakana" => "ツヅキグンイデチョウ",
            "katakana_half" => "ﾂﾂﾞｷｸﾞﾝｲﾃﾞﾁｮｳ",
        ]);

        City::create([
            "id" => 1196,
            "prefecture_id" => 26,
            "name" => "綴喜郡宇治田原町",
            "romaji" => "tsuzukigunujitawarachou",
            "hiragana" => "つづきぐんうじたわらちょう",
            "katakana" => "ツヅキグンウジタワラチョウ",
            "katakana_half" => "ﾂﾂﾞｷｸﾞﾝｳｼﾞﾀﾜﾗﾁｮｳ",
        ]);

        City::create([
            "id" => 1197,
            "prefecture_id" => 26,
            "name" => "相楽郡笠置町",
            "romaji" => "sourakugunkasagichou",
            "hiragana" => "そうらくぐんかさぎちょう",
            "katakana" => "ソウラクグンカサギチョウ",
            "katakana_half" => "ｿｳﾗｸｸﾞﾝｶｻｷﾞﾁｮｳ",
        ]);

        City::create([
            "id" => 1198,
            "prefecture_id" => 26,
            "name" => "相楽郡和束町",
            "romaji" => "sourakugunwazukachou",
            "hiragana" => "そうらくぐんわづかちょう",
            "katakana" => "ソウラクグンワヅカチョウ",
            "katakana_half" => "ｿｳﾗｸｸﾞﾝﾜﾂﾞｶﾁｮｳ",
        ]);

        City::create([
            "id" => 1199,
            "prefecture_id" => 26,
            "name" => "相楽郡精華町",
            "romaji" => "sourakugunseikachou",
            "hiragana" => "そうらくぐんせいかちょう",
            "katakana" => "ソウラクグンセイカチョウ",
            "katakana_half" => "ｿｳﾗｸｸﾞﾝｾｲｶﾁｮｳ",
        ]);

        City::create([
            "id" => 1200,
            "prefecture_id" => 26,
            "name" => "相楽郡南山城村",
            "romaji" => "sourakugunminamiyamashiromura",
            "hiragana" => "そうらくぐんみなみやましろむら",
            "katakana" => "ソウラクグンミナミヤマシロムラ",
            "katakana_half" => "ｿｳﾗｸｸﾞﾝﾐﾅﾐﾔﾏｼﾛﾑﾗ",
        ]);

        City::create([
            "id" => 1201,
            "prefecture_id" => 26,
            "name" => "船井郡京丹波町",
            "romaji" => "funaigunkyoutanbachou",
            "hiragana" => "ふないぐんきょうたんばちょう",
            "katakana" => "フナイグンキョウタンバチョウ",
            "katakana_half" => "ﾌﾅｲｸﾞﾝｷｮｳﾀﾝﾊﾞﾁｮｳ",
        ]);

        City::create([
            "id" => 1202,
            "prefecture_id" => 26,
            "name" => "与謝郡伊根町",
            "romaji" => "yosaguninechou",
            "hiragana" => "よさぐんいねちょう",
            "katakana" => "ヨサグンイネチョウ",
            "katakana_half" => "ﾖｻｸﾞﾝｲﾈﾁｮｳ",
        ]);

        City::create([
            "id" => 1203,
            "prefecture_id" => 26,
            "name" => "与謝郡与謝野町",
            "romaji" => "yosagunyosanochou",
            "hiragana" => "よさぐんよさのちょう",
            "katakana" => "ヨサグンヨサノチョウ",
            "katakana_half" => "ﾖｻｸﾞﾝﾖｻﾉﾁｮｳ",
        ]);

        City::create([
            "id" => 1204,
            "prefecture_id" => 27,
            "name" => "大阪市都島区",
            "romaji" => "oosakashimiyakojimaku",
            "hiragana" => "おおさかしみやこじまく",
            "katakana" => "オオサカシミヤコジマク",
            "katakana_half" => "ｵｵｻｶｼﾐﾔｺｼﾞﾏｸ",
        ]);

        City::create([
            "id" => 1205,
            "prefecture_id" => 27,
            "name" => "大阪市福島区",
            "romaji" => "oosakashifukushimaku",
            "hiragana" => "おおさかしふくしまく",
            "katakana" => "オオサカシフクシマク",
            "katakana_half" => "ｵｵｻｶｼﾌｸｼﾏｸ",
        ]);

        City::create([
            "id" => 1206,
            "prefecture_id" => 27,
            "name" => "大阪市此花区",
            "romaji" => "oosakashikonohanaku",
            "hiragana" => "おおさかしこのはなく",
            "katakana" => "オオサカシコノハナク",
            "katakana_half" => "ｵｵｻｶｼｺﾉﾊﾅｸ",
        ]);

        City::create([
            "id" => 1207,
            "prefecture_id" => 27,
            "name" => "大阪市西区",
            "romaji" => "oosakashinishiku",
            "hiragana" => "おおさかしにしく",
            "katakana" => "オオサカシニシク",
            "katakana_half" => "ｵｵｻｶｼﾆｼｸ",
        ]);

        City::create([
            "id" => 1208,
            "prefecture_id" => 27,
            "name" => "大阪市港区",
            "romaji" => "oosakashiminatoku",
            "hiragana" => "おおさかしみなとく",
            "katakana" => "オオサカシミナトク",
            "katakana_half" => "ｵｵｻｶｼﾐﾅﾄｸ",
        ]);

        City::create([
            "id" => 1209,
            "prefecture_id" => 27,
            "name" => "大阪市大正区",
            "romaji" => "oosakashitaishouku",
            "hiragana" => "おおさかしたいしょうく",
            "katakana" => "オオサカシタイショウク",
            "katakana_half" => "ｵｵｻｶｼﾀｲｼｮｳｸ",
        ]);

        City::create([
            "id" => 1210,
            "prefecture_id" => 27,
            "name" => "大阪市天王寺区",
            "romaji" => "oosakashitennoujiku",
            "hiragana" => "おおさかしてんのうじく",
            "katakana" => "オオサカシテンノウジク",
            "katakana_half" => "ｵｵｻｶｼﾃﾝﾉｳｼﾞｸ",
        ]);

        City::create([
            "id" => 1211,
            "prefecture_id" => 27,
            "name" => "大阪市浪速区",
            "romaji" => "oosakashinaniwaku",
            "hiragana" => "おおさかしなにわく",
            "katakana" => "オオサカシナニワク",
            "katakana_half" => "ｵｵｻｶｼﾅﾆﾜｸ",
        ]);

        City::create([
            "id" => 1212,
            "prefecture_id" => 27,
            "name" => "大阪市西淀川区",
            "romaji" => "oosakashinishiyodogawaku",
            "hiragana" => "おおさかしにしよどがわく",
            "katakana" => "オオサカシニシヨドガワク",
            "katakana_half" => "ｵｵｻｶｼﾆｼﾖﾄﾞｶﾞﾜｸ",
        ]);

        City::create([
            "id" => 1213,
            "prefecture_id" => 27,
            "name" => "大阪市東淀川区",
            "romaji" => "oosakashihigashiyodogawaku",
            "hiragana" => "おおさかしひがしよどがわく",
            "katakana" => "オオサカシヒガシヨドガワク",
            "katakana_half" => "ｵｵｻｶｼﾋｶﾞｼﾖﾄﾞｶﾞﾜｸ",
        ]);

        City::create([
            "id" => 1214,
            "prefecture_id" => 27,
            "name" => "大阪市東成区",
            "romaji" => "oosakashihigashinariku",
            "hiragana" => "おおさかしひがしなりく",
            "katakana" => "オオサカシヒガシナリク",
            "katakana_half" => "ｵｵｻｶｼﾋｶﾞｼﾅﾘｸ",
        ]);

        City::create([
            "id" => 1215,
            "prefecture_id" => 27,
            "name" => "大阪市生野区",
            "romaji" => "oosakashiikunoku",
            "hiragana" => "おおさかしいくのく",
            "katakana" => "オオサカシイクノク",
            "katakana_half" => "ｵｵｻｶｼｲｸﾉｸ",
        ]);

        City::create([
            "id" => 1216,
            "prefecture_id" => 27,
            "name" => "大阪市旭区",
            "romaji" => "oosakashiasahiku",
            "hiragana" => "おおさかしあさひく",
            "katakana" => "オオサカシアサヒク",
            "katakana_half" => "ｵｵｻｶｼｱｻﾋｸ",
        ]);

        City::create([
            "id" => 1217,
            "prefecture_id" => 27,
            "name" => "大阪市城東区",
            "romaji" => "oosakashijoutouku",
            "hiragana" => "おおさかしじょうとうく",
            "katakana" => "オオサカシジョウトウク",
            "katakana_half" => "ｵｵｻｶｼｼﾞｮｳﾄｳｸ",
        ]);

        City::create([
            "id" => 1218,
            "prefecture_id" => 27,
            "name" => "大阪市阿倍野区",
            "romaji" => "oosakashiabenoku",
            "hiragana" => "おおさかしあべのく",
            "katakana" => "オオサカシアベノク",
            "katakana_half" => "ｵｵｻｶｼｱﾍﾞﾉｸ",
        ]);

        City::create([
            "id" => 1219,
            "prefecture_id" => 27,
            "name" => "大阪市住吉区",
            "romaji" => "oosakashisumiyoshiku",
            "hiragana" => "おおさかしすみよしく",
            "katakana" => "オオサカシスミヨシク",
            "katakana_half" => "ｵｵｻｶｼｽﾐﾖｼｸ",
        ]);

        City::create([
            "id" => 1220,
            "prefecture_id" => 27,
            "name" => "大阪市東住吉区",
            "romaji" => "oosakashihigashisumiyoshiku",
            "hiragana" => "おおさかしひがしすみよしく",
            "katakana" => "オオサカシヒガシスミヨシク",
            "katakana_half" => "ｵｵｻｶｼﾋｶﾞｼｽﾐﾖｼｸ",
        ]);

        City::create([
            "id" => 1221,
            "prefecture_id" => 27,
            "name" => "大阪市西成区",
            "romaji" => "oosakashinishinariku",
            "hiragana" => "おおさかしにしなりく",
            "katakana" => "オオサカシニシナリク",
            "katakana_half" => "ｵｵｻｶｼﾆｼﾅﾘｸ",
        ]);

        City::create([
            "id" => 1222,
            "prefecture_id" => 27,
            "name" => "大阪市淀川区",
            "romaji" => "oosakashiyodogawaku",
            "hiragana" => "おおさかしよどがわく",
            "katakana" => "オオサカシヨドガワク",
            "katakana_half" => "ｵｵｻｶｼﾖﾄﾞｶﾞﾜｸ",
        ]);

        City::create([
            "id" => 1223,
            "prefecture_id" => 27,
            "name" => "大阪市鶴見区",
            "romaji" => "oosakashitsurumiku",
            "hiragana" => "おおさかしつるみく",
            "katakana" => "オオサカシツルミク",
            "katakana_half" => "ｵｵｻｶｼﾂﾙﾐｸ",
        ]);

        City::create([
            "id" => 1224,
            "prefecture_id" => 27,
            "name" => "大阪市住之江区",
            "romaji" => "oosakashisuminoeku",
            "hiragana" => "おおさかしすみのえく",
            "katakana" => "オオサカシスミノエク",
            "katakana_half" => "ｵｵｻｶｼｽﾐﾉｴｸ",
        ]);

        City::create([
            "id" => 1225,
            "prefecture_id" => 27,
            "name" => "大阪市平野区",
            "romaji" => "oosakashihiranoku",
            "hiragana" => "おおさかしひらのく",
            "katakana" => "オオサカシヒラノク",
            "katakana_half" => "ｵｵｻｶｼﾋﾗﾉｸ",
        ]);

        City::create([
            "id" => 1226,
            "prefecture_id" => 27,
            "name" => "大阪市北区",
            "romaji" => "oosakashikitaku",
            "hiragana" => "おおさかしきたく",
            "katakana" => "オオサカシキタク",
            "katakana_half" => "ｵｵｻｶｼｷﾀｸ",
        ]);

        City::create([
            "id" => 1227,
            "prefecture_id" => 27,
            "name" => "大阪市中央区",
            "romaji" => "oosakashichuuouku",
            "hiragana" => "おおさかしちゅうおうく",
            "katakana" => "オオサカシチュウオウク",
            "katakana_half" => "ｵｵｻｶｼﾁｭｳｵｳｸ",
        ]);

        City::create([
            "id" => 1228,
            "prefecture_id" => 27,
            "name" => "堺市堺区",
            "romaji" => "sakaishisakaiku",
            "hiragana" => "さかいしさかいく",
            "katakana" => "サカイシサカイク",
            "katakana_half" => "ｻｶｲｼｻｶｲｸ",
        ]);

        City::create([
            "id" => 1229,
            "prefecture_id" => 27,
            "name" => "堺市中区",
            "romaji" => "sakaishinakaku",
            "hiragana" => "さかいしなかく",
            "katakana" => "サカイシナカク",
            "katakana_half" => "ｻｶｲｼﾅｶｸ",
        ]);

        City::create([
            "id" => 1230,
            "prefecture_id" => 27,
            "name" => "堺市東区",
            "romaji" => "sakaishihigashiku",
            "hiragana" => "さかいしひがしく",
            "katakana" => "サカイシヒガシク",
            "katakana_half" => "ｻｶｲｼﾋｶﾞｼｸ",
        ]);

        City::create([
            "id" => 1231,
            "prefecture_id" => 27,
            "name" => "堺市西区",
            "romaji" => "sakaishinishiku",
            "hiragana" => "さかいしにしく",
            "katakana" => "サカイシニシク",
            "katakana_half" => "ｻｶｲｼﾆｼｸ",
        ]);

        City::create([
            "id" => 1232,
            "prefecture_id" => 27,
            "name" => "堺市南区",
            "romaji" => "sakaishiminamiku",
            "hiragana" => "さかいしみなみく",
            "katakana" => "サカイシミナミク",
            "katakana_half" => "ｻｶｲｼﾐﾅﾐｸ",
        ]);

        City::create([
            "id" => 1233,
            "prefecture_id" => 27,
            "name" => "堺市北区",
            "romaji" => "sakaishikitaku",
            "hiragana" => "さかいしきたく",
            "katakana" => "サカイシキタク",
            "katakana_half" => "ｻｶｲｼｷﾀｸ",
        ]);

        City::create([
            "id" => 1234,
            "prefecture_id" => 27,
            "name" => "堺市美原区",
            "romaji" => "sakaishimiharaku",
            "hiragana" => "さかいしみはらく",
            "katakana" => "サカイシミハラク",
            "katakana_half" => "ｻｶｲｼﾐﾊﾗｸ",
        ]);

        City::create([
            "id" => 1235,
            "prefecture_id" => 27,
            "name" => "岸和田市",
            "romaji" => "kishiwadashi",
            "hiragana" => "きしわだし",
            "katakana" => "キシワダシ",
            "katakana_half" => "ｷｼﾜﾀﾞｼ",
        ]);

        City::create([
            "id" => 1236,
            "prefecture_id" => 27,
            "name" => "豊中市",
            "romaji" => "toyonakashi",
            "hiragana" => "とよなかし",
            "katakana" => "トヨナカシ",
            "katakana_half" => "ﾄﾖﾅｶｼ",
        ]);

        City::create([
            "id" => 1237,
            "prefecture_id" => 27,
            "name" => "池田市",
            "romaji" => "ikedashi",
            "hiragana" => "いけだし",
            "katakana" => "イケダシ",
            "katakana_half" => "ｲｹﾀﾞｼ",
        ]);

        City::create([
            "id" => 1238,
            "prefecture_id" => 27,
            "name" => "吹田市",
            "romaji" => "suitashi",
            "hiragana" => "すいたし",
            "katakana" => "スイタシ",
            "katakana_half" => "ｽｲﾀｼ",
        ]);

        City::create([
            "id" => 1239,
            "prefecture_id" => 27,
            "name" => "泉大津市",
            "romaji" => "izumiootsushi",
            "hiragana" => "いずみおおつし",
            "katakana" => "イズミオオツシ",
            "katakana_half" => "ｲｽﾞﾐｵｵﾂｼ",
        ]);

        City::create([
            "id" => 1240,
            "prefecture_id" => 27,
            "name" => "高槻市",
            "romaji" => "takatsukishi",
            "hiragana" => "たかつきし",
            "katakana" => "タカツキシ",
            "katakana_half" => "ﾀｶﾂｷｼ",
        ]);

        City::create([
            "id" => 1241,
            "prefecture_id" => 27,
            "name" => "貝塚市",
            "romaji" => "kaizukashi",
            "hiragana" => "かいづかし",
            "katakana" => "カイヅカシ",
            "katakana_half" => "ｶｲﾂﾞｶｼ",
        ]);

        City::create([
            "id" => 1242,
            "prefecture_id" => 27,
            "name" => "守口市",
            "romaji" => "moriguchishi",
            "hiragana" => "もりぐちし",
            "katakana" => "モリグチシ",
            "katakana_half" => "ﾓﾘｸﾞﾁｼ",
        ]);

        City::create([
            "id" => 1243,
            "prefecture_id" => 27,
            "name" => "枚方市",
            "romaji" => "hirakatashi",
            "hiragana" => "ひらかたし",
            "katakana" => "ヒラカタシ",
            "katakana_half" => "ﾋﾗｶﾀｼ",
        ]);

        City::create([
            "id" => 1244,
            "prefecture_id" => 27,
            "name" => "茨木市",
            "romaji" => "ibarakishi",
            "hiragana" => "いばらきし",
            "katakana" => "イバラキシ",
            "katakana_half" => "ｲﾊﾞﾗｷｼ",
        ]);

        City::create([
            "id" => 1245,
            "prefecture_id" => 27,
            "name" => "八尾市",
            "romaji" => "yaoshi",
            "hiragana" => "やおし",
            "katakana" => "ヤオシ",
            "katakana_half" => "ﾔｵｼ",
        ]);

        City::create([
            "id" => 1246,
            "prefecture_id" => 27,
            "name" => "泉佐野市",
            "romaji" => "izumisanoshi",
            "hiragana" => "いずみさのし",
            "katakana" => "イズミサノシ",
            "katakana_half" => "ｲｽﾞﾐｻﾉｼ",
        ]);

        City::create([
            "id" => 1247,
            "prefecture_id" => 27,
            "name" => "富田林市",
            "romaji" => "tondabayashishi",
            "hiragana" => "とんだばやしし",
            "katakana" => "トンダバヤシシ",
            "katakana_half" => "ﾄﾝﾀﾞﾊﾞﾔｼｼ",
        ]);

        City::create([
            "id" => 1248,
            "prefecture_id" => 27,
            "name" => "寝屋川市",
            "romaji" => "neyagawashi",
            "hiragana" => "ねやがわし",
            "katakana" => "ネヤガワシ",
            "katakana_half" => "ﾈﾔｶﾞﾜｼ",
        ]);

        City::create([
            "id" => 1249,
            "prefecture_id" => 27,
            "name" => "河内長野市",
            "romaji" => "kawachinaganoshi",
            "hiragana" => "かわちながのし",
            "katakana" => "カワチナガノシ",
            "katakana_half" => "ｶﾜﾁﾅｶﾞﾉｼ",
        ]);

        City::create([
            "id" => 1250,
            "prefecture_id" => 27,
            "name" => "松原市",
            "romaji" => "matsubarashi",
            "hiragana" => "まつばらし",
            "katakana" => "マツバラシ",
            "katakana_half" => "ﾏﾂﾊﾞﾗｼ",
        ]);

        City::create([
            "id" => 1251,
            "prefecture_id" => 27,
            "name" => "大東市",
            "romaji" => "daitoushi",
            "hiragana" => "だいとうし",
            "katakana" => "ダイトウシ",
            "katakana_half" => "ﾀﾞｲﾄｳｼ",
        ]);

        City::create([
            "id" => 1252,
            "prefecture_id" => 27,
            "name" => "和泉市",
            "romaji" => "izumishi",
            "hiragana" => "いずみし",
            "katakana" => "イズミシ",
            "katakana_half" => "ｲｽﾞﾐｼ",
        ]);

        City::create([
            "id" => 1253,
            "prefecture_id" => 27,
            "name" => "箕面市",
            "romaji" => "minooshi",
            "hiragana" => "みのおし",
            "katakana" => "ミノオシ",
            "katakana_half" => "ﾐﾉｵｼ",
        ]);

        City::create([
            "id" => 1254,
            "prefecture_id" => 27,
            "name" => "柏原市",
            "romaji" => "kashiwarashi",
            "hiragana" => "かしわらし",
            "katakana" => "カシワラシ",
            "katakana_half" => "ｶｼﾜﾗｼ",
        ]);

        City::create([
            "id" => 1255,
            "prefecture_id" => 27,
            "name" => "羽曳野市",
            "romaji" => "habikinoshi",
            "hiragana" => "はびきのし",
            "katakana" => "ハビキノシ",
            "katakana_half" => "ﾊﾋﾞｷﾉｼ",
        ]);

        City::create([
            "id" => 1256,
            "prefecture_id" => 27,
            "name" => "門真市",
            "romaji" => "kadomashi",
            "hiragana" => "かどまし",
            "katakana" => "カドマシ",
            "katakana_half" => "ｶﾄﾞﾏｼ",
        ]);

        City::create([
            "id" => 1257,
            "prefecture_id" => 27,
            "name" => "摂津市",
            "romaji" => "settsushi",
            "hiragana" => "せっつし",
            "katakana" => "セッツシ",
            "katakana_half" => "ｾｯﾂｼ",
        ]);

        City::create([
            "id" => 1258,
            "prefecture_id" => 27,
            "name" => "高石市",
            "romaji" => "takaishishi",
            "hiragana" => "たかいしし",
            "katakana" => "タカイシシ",
            "katakana_half" => "ﾀｶｲｼｼ",
        ]);

        City::create([
            "id" => 1259,
            "prefecture_id" => 27,
            "name" => "藤井寺市",
            "romaji" => "fujiiderashi",
            "hiragana" => "ふじいでらし",
            "katakana" => "フジイデラシ",
            "katakana_half" => "ﾌｼﾞｲﾃﾞﾗｼ",
        ]);

        City::create([
            "id" => 1260,
            "prefecture_id" => 27,
            "name" => "東大阪市",
            "romaji" => "higashioosakashi",
            "hiragana" => "ひがしおおさかし",
            "katakana" => "ヒガシオオサカシ",
            "katakana_half" => "ﾋｶﾞｼｵｵｻｶｼ",
        ]);

        City::create([
            "id" => 1261,
            "prefecture_id" => 27,
            "name" => "泉南市",
            "romaji" => "sennanshi",
            "hiragana" => "せんなんし",
            "katakana" => "センナンシ",
            "katakana_half" => "ｾﾝﾅﾝｼ",
        ]);

        City::create([
            "id" => 1262,
            "prefecture_id" => 27,
            "name" => "四條畷市",
            "romaji" => "shijounawateshi",
            "hiragana" => "しじょうなわてし",
            "katakana" => "シジョウナワテシ",
            "katakana_half" => "ｼｼﾞｮｳﾅﾜﾃｼ",
        ]);

        City::create([
            "id" => 1263,
            "prefecture_id" => 27,
            "name" => "交野市",
            "romaji" => "katanoshi",
            "hiragana" => "かたのし",
            "katakana" => "カタノシ",
            "katakana_half" => "ｶﾀﾉｼ",
        ]);

        City::create([
            "id" => 1264,
            "prefecture_id" => 27,
            "name" => "大阪狭山市",
            "romaji" => "oosakasayamashi",
            "hiragana" => "おおさかさやまし",
            "katakana" => "オオサカサヤマシ",
            "katakana_half" => "ｵｵｻｶｻﾔﾏｼ",
        ]);

        City::create([
            "id" => 1265,
            "prefecture_id" => 27,
            "name" => "阪南市",
            "romaji" => "hannanshi",
            "hiragana" => "はんなんし",
            "katakana" => "ハンナンシ",
            "katakana_half" => "ﾊﾝﾅﾝｼ",
        ]);

        City::create([
            "id" => 1266,
            "prefecture_id" => 27,
            "name" => "三島郡島本町",
            "romaji" => "mishimagunshimamotochou",
            "hiragana" => "みしまぐんしまもとちょう",
            "katakana" => "ミシマグンシマモトチョウ",
            "katakana_half" => "ﾐｼﾏｸﾞﾝｼﾏﾓﾄﾁｮｳ",
        ]);

        City::create([
            "id" => 1267,
            "prefecture_id" => 27,
            "name" => "豊能郡豊能町",
            "romaji" => "toyonoguntoyonochou",
            "hiragana" => "とよのぐんとよのちょう",
            "katakana" => "トヨノグントヨノチョウ",
            "katakana_half" => "ﾄﾖﾉｸﾞﾝﾄﾖﾉﾁｮｳ",
        ]);

        City::create([
            "id" => 1268,
            "prefecture_id" => 27,
            "name" => "豊能郡能勢町",
            "romaji" => "toyonogunnosechou",
            "hiragana" => "とよのぐんのせちょう",
            "katakana" => "トヨノグンノセチョウ",
            "katakana_half" => "ﾄﾖﾉｸﾞﾝﾉｾﾁｮｳ",
        ]);

        City::create([
            "id" => 1269,
            "prefecture_id" => 27,
            "name" => "泉北郡忠岡町",
            "romaji" => "senbokuguntadaokachou",
            "hiragana" => "せんぼくぐんただおかちょう",
            "katakana" => "センボクグンタダオカチョウ",
            "katakana_half" => "ｾﾝﾎﾞｸｸﾞﾝﾀﾀﾞｵｶﾁｮｳ",
        ]);

        City::create([
            "id" => 1270,
            "prefecture_id" => 27,
            "name" => "泉南郡熊取町",
            "romaji" => "sennangunkumatorichou",
            "hiragana" => "せんなんぐんくまとりちょう",
            "katakana" => "センナングンクマトリチョウ",
            "katakana_half" => "ｾﾝﾅﾝｸﾞﾝｸﾏﾄﾘﾁｮｳ",
        ]);

        City::create([
            "id" => 1271,
            "prefecture_id" => 27,
            "name" => "泉南郡田尻町",
            "romaji" => "sennanguntajirichou",
            "hiragana" => "せんなんぐんたじりちょう",
            "katakana" => "センナングンタジリチョウ",
            "katakana_half" => "ｾﾝﾅﾝｸﾞﾝﾀｼﾞﾘﾁｮｳ",
        ]);

        City::create([
            "id" => 1272,
            "prefecture_id" => 27,
            "name" => "泉南郡岬町",
            "romaji" => "sennangunmisakichou",
            "hiragana" => "せんなんぐんみさきちょう",
            "katakana" => "センナングンミサキチョウ",
            "katakana_half" => "ｾﾝﾅﾝｸﾞﾝﾐｻｷﾁｮｳ",
        ]);

        City::create([
            "id" => 1273,
            "prefecture_id" => 27,
            "name" => "南河内郡太子町",
            "romaji" => "minamikawachiguntaishichou",
            "hiragana" => "みなみかわちぐんたいしちょう",
            "katakana" => "ミナミカワチグンタイシチョウ",
            "katakana_half" => "ﾐﾅﾐｶﾜﾁｸﾞﾝﾀｲｼﾁｮｳ",
        ]);

        City::create([
            "id" => 1274,
            "prefecture_id" => 27,
            "name" => "南河内郡河南町",
            "romaji" => "minamikawachigunkananchou",
            "hiragana" => "みなみかわちぐんかなんちょう",
            "katakana" => "ミナミカワチグンカナンチョウ",
            "katakana_half" => "ﾐﾅﾐｶﾜﾁｸﾞﾝｶﾅﾝﾁｮｳ",
        ]);

        City::create([
            "id" => 1275,
            "prefecture_id" => 27,
            "name" => "南河内郡千早赤阪村",
            "romaji" => "minamikawachigunchihayaakasakamura",
            "hiragana" => "みなみかわちぐんちはやあかさかむら",
            "katakana" => "ミナミカワチグンチハヤアカサカムラ",
            "katakana_half" => "ﾐﾅﾐｶﾜﾁｸﾞﾝﾁﾊﾔｱｶｻｶﾑﾗ",
        ]);

        City::create([
            "id" => 1276,
            "prefecture_id" => 28,
            "name" => "神戸市東灘区",
            "romaji" => "koubeshihigashinadaku",
            "hiragana" => "こうべしひがしなだく",
            "katakana" => "コウベシヒガシナダク",
            "katakana_half" => "ｺｳﾍﾞｼﾋｶﾞｼﾅﾀﾞｸ",
        ]);

        City::create([
            "id" => 1277,
            "prefecture_id" => 28,
            "name" => "神戸市灘区",
            "romaji" => "koubeshinadaku",
            "hiragana" => "こうべしなだく",
            "katakana" => "コウベシナダク",
            "katakana_half" => "ｺｳﾍﾞｼﾅﾀﾞｸ",
        ]);

        City::create([
            "id" => 1278,
            "prefecture_id" => 28,
            "name" => "神戸市兵庫区",
            "romaji" => "koubeshihyougoku",
            "hiragana" => "こうべしひょうごく",
            "katakana" => "コウベシヒョウゴク",
            "katakana_half" => "ｺｳﾍﾞｼﾋｮｳｺﾞｸ",
        ]);

        City::create([
            "id" => 1279,
            "prefecture_id" => 28,
            "name" => "神戸市長田区",
            "romaji" => "koubeshinagataku",
            "hiragana" => "こうべしながたく",
            "katakana" => "コウベシナガタク",
            "katakana_half" => "ｺｳﾍﾞｼﾅｶﾞﾀｸ",
        ]);

        City::create([
            "id" => 1280,
            "prefecture_id" => 28,
            "name" => "神戸市須磨区",
            "romaji" => "koubeshisumaku",
            "hiragana" => "こうべしすまく",
            "katakana" => "コウベシスマク",
            "katakana_half" => "ｺｳﾍﾞｼｽﾏｸ",
        ]);

        City::create([
            "id" => 1281,
            "prefecture_id" => 28,
            "name" => "神戸市垂水区",
            "romaji" => "koubeshitarumiku",
            "hiragana" => "こうべしたるみく",
            "katakana" => "コウベシタルミク",
            "katakana_half" => "ｺｳﾍﾞｼﾀﾙﾐｸ",
        ]);

        City::create([
            "id" => 1282,
            "prefecture_id" => 28,
            "name" => "神戸市北区",
            "romaji" => "koubeshikitaku",
            "hiragana" => "こうべしきたく",
            "katakana" => "コウベシキタク",
            "katakana_half" => "ｺｳﾍﾞｼｷﾀｸ",
        ]);

        City::create([
            "id" => 1283,
            "prefecture_id" => 28,
            "name" => "神戸市中央区",
            "romaji" => "koubeshichuuouku",
            "hiragana" => "こうべしちゅうおうく",
            "katakana" => "コウベシチュウオウク",
            "katakana_half" => "ｺｳﾍﾞｼﾁｭｳｵｳｸ",
        ]);

        City::create([
            "id" => 1284,
            "prefecture_id" => 28,
            "name" => "神戸市西区",
            "romaji" => "koubeshinishiku",
            "hiragana" => "こうべしにしく",
            "katakana" => "コウベシニシク",
            "katakana_half" => "ｺｳﾍﾞｼﾆｼｸ",
        ]);

        City::create([
            "id" => 1285,
            "prefecture_id" => 28,
            "name" => "姫路市",
            "romaji" => "himejishi",
            "hiragana" => "ひめじし",
            "katakana" => "ヒメジシ",
            "katakana_half" => "ﾋﾒｼﾞｼ",
        ]);

        City::create([
            "id" => 1286,
            "prefecture_id" => 28,
            "name" => "尼崎市",
            "romaji" => "amagasakishi",
            "hiragana" => "あまがさきし",
            "katakana" => "アマガサキシ",
            "katakana_half" => "ｱﾏｶﾞｻｷｼ",
        ]);

        City::create([
            "id" => 1287,
            "prefecture_id" => 28,
            "name" => "明石市",
            "romaji" => "akashishi",
            "hiragana" => "あかしし",
            "katakana" => "アカシシ",
            "katakana_half" => "ｱｶｼｼ",
        ]);

        City::create([
            "id" => 1288,
            "prefecture_id" => 28,
            "name" => "西宮市",
            "romaji" => "nishinomiyashi",
            "hiragana" => "にしのみやし",
            "katakana" => "ニシノミヤシ",
            "katakana_half" => "ﾆｼﾉﾐﾔｼ",
        ]);

        City::create([
            "id" => 1289,
            "prefecture_id" => 28,
            "name" => "洲本市",
            "romaji" => "sumotoshi",
            "hiragana" => "すもとし",
            "katakana" => "スモトシ",
            "katakana_half" => "ｽﾓﾄｼ",
        ]);

        City::create([
            "id" => 1290,
            "prefecture_id" => 28,
            "name" => "芦屋市",
            "romaji" => "ashiyashi",
            "hiragana" => "あしやし",
            "katakana" => "アシヤシ",
            "katakana_half" => "ｱｼﾔｼ",
        ]);

        City::create([
            "id" => 1291,
            "prefecture_id" => 28,
            "name" => "伊丹市",
            "romaji" => "itamishi",
            "hiragana" => "いたみし",
            "katakana" => "イタミシ",
            "katakana_half" => "ｲﾀﾐｼ",
        ]);

        City::create([
            "id" => 1292,
            "prefecture_id" => 28,
            "name" => "相生市",
            "romaji" => "aioishi",
            "hiragana" => "あいおいし",
            "katakana" => "アイオイシ",
            "katakana_half" => "ｱｲｵｲｼ",
        ]);

        City::create([
            "id" => 1293,
            "prefecture_id" => 28,
            "name" => "豊岡市",
            "romaji" => "toyookashi",
            "hiragana" => "とよおかし",
            "katakana" => "トヨオカシ",
            "katakana_half" => "ﾄﾖｵｶｼ",
        ]);

        City::create([
            "id" => 1294,
            "prefecture_id" => 28,
            "name" => "加古川市",
            "romaji" => "kakogawashi",
            "hiragana" => "かこがわし",
            "katakana" => "カコガワシ",
            "katakana_half" => "ｶｺｶﾞﾜｼ",
        ]);

        City::create([
            "id" => 1295,
            "prefecture_id" => 28,
            "name" => "赤穂市",
            "romaji" => "akoushi",
            "hiragana" => "あこうし",
            "katakana" => "アコウシ",
            "katakana_half" => "ｱｺｳｼ",
        ]);

        City::create([
            "id" => 1296,
            "prefecture_id" => 28,
            "name" => "西脇市",
            "romaji" => "nishiwakishi",
            "hiragana" => "にしわきし",
            "katakana" => "ニシワキシ",
            "katakana_half" => "ﾆｼﾜｷｼ",
        ]);

        City::create([
            "id" => 1297,
            "prefecture_id" => 28,
            "name" => "宝塚市",
            "romaji" => "takarazukashi",
            "hiragana" => "たからづかし",
            "katakana" => "タカラヅカシ",
            "katakana_half" => "ﾀｶﾗﾂﾞｶｼ",
        ]);

        City::create([
            "id" => 1298,
            "prefecture_id" => 28,
            "name" => "三木市",
            "romaji" => "mikishi",
            "hiragana" => "みきし",
            "katakana" => "ミキシ",
            "katakana_half" => "ﾐｷｼ",
        ]);

        City::create([
            "id" => 1299,
            "prefecture_id" => 28,
            "name" => "高砂市",
            "romaji" => "takasagoshi",
            "hiragana" => "たかさごし",
            "katakana" => "タカサゴシ",
            "katakana_half" => "ﾀｶｻｺﾞｼ",
        ]);

        City::create([
            "id" => 1300,
            "prefecture_id" => 28,
            "name" => "川西市",
            "romaji" => "kawanishishi",
            "hiragana" => "かわにしし",
            "katakana" => "カワニシシ",
            "katakana_half" => "ｶﾜﾆｼｼ",
        ]);

        City::create([
            "id" => 1301,
            "prefecture_id" => 28,
            "name" => "小野市",
            "romaji" => "onoshi",
            "hiragana" => "おのし",
            "katakana" => "オノシ",
            "katakana_half" => "ｵﾉｼ",
        ]);

        City::create([
            "id" => 1302,
            "prefecture_id" => 28,
            "name" => "三田市",
            "romaji" => "sandashi",
            "hiragana" => "さんだし",
            "katakana" => "サンダシ",
            "katakana_half" => "ｻﾝﾀﾞｼ",
        ]);

        City::create([
            "id" => 1303,
            "prefecture_id" => 28,
            "name" => "加西市",
            "romaji" => "kasaishi",
            "hiragana" => "かさいし",
            "katakana" => "カサイシ",
            "katakana_half" => "ｶｻｲｼ",
        ]);

        City::create([
            "id" => 1304,
            "prefecture_id" => 28,
            "name" => "丹波篠山市",
            "romaji" => "tanbasasayamashi",
            "hiragana" => "たんばささやまし",
            "katakana" => "タンバササヤマシ",
            "katakana_half" => "ﾀﾝﾊﾞｻｻﾔﾏｼ",
        ]);

        City::create([
            "id" => 1305,
            "prefecture_id" => 28,
            "name" => "養父市",
            "romaji" => "yabushi",
            "hiragana" => "やぶし",
            "katakana" => "ヤブシ",
            "katakana_half" => "ﾔﾌﾞｼ",
        ]);

        City::create([
            "id" => 1306,
            "prefecture_id" => 28,
            "name" => "丹波市",
            "romaji" => "tanbashi",
            "hiragana" => "たんばし",
            "katakana" => "タンバシ",
            "katakana_half" => "ﾀﾝﾊﾞｼ",
        ]);

        City::create([
            "id" => 1307,
            "prefecture_id" => 28,
            "name" => "南あわじ市",
            "romaji" => "minamiawajishi",
            "hiragana" => "みなみあわじし",
            "katakana" => "ミナミアワジシ",
            "katakana_half" => "ﾐﾅﾐｱﾜｼﾞｼ",
        ]);

        City::create([
            "id" => 1308,
            "prefecture_id" => 28,
            "name" => "朝来市",
            "romaji" => "asagoshi",
            "hiragana" => "あさごし",
            "katakana" => "アサゴシ",
            "katakana_half" => "ｱｻｺﾞｼ",
        ]);

        City::create([
            "id" => 1309,
            "prefecture_id" => 28,
            "name" => "淡路市",
            "romaji" => "awajishi",
            "hiragana" => "あわじし",
            "katakana" => "アワジシ",
            "katakana_half" => "ｱﾜｼﾞｼ",
        ]);

        City::create([
            "id" => 1310,
            "prefecture_id" => 28,
            "name" => "宍粟市",
            "romaji" => "shisoushi",
            "hiragana" => "しそうし",
            "katakana" => "シソウシ",
            "katakana_half" => "ｼｿｳｼ",
        ]);

        City::create([
            "id" => 1311,
            "prefecture_id" => 28,
            "name" => "加東市",
            "romaji" => "katoushi",
            "hiragana" => "かとうし",
            "katakana" => "カトウシ",
            "katakana_half" => "ｶﾄｳｼ",
        ]);

        City::create([
            "id" => 1312,
            "prefecture_id" => 28,
            "name" => "たつの市",
            "romaji" => "tatsunoshi",
            "hiragana" => "たつのし",
            "katakana" => "タツノシ",
            "katakana_half" => "ﾀﾂﾉｼ",
        ]);

        City::create([
            "id" => 1313,
            "prefecture_id" => 28,
            "name" => "川辺郡猪名川町",
            "romaji" => "kawabeguninagawachou",
            "hiragana" => "かわべぐんいながわちょう",
            "katakana" => "カワベグンイナガワチョウ",
            "katakana_half" => "ｶﾜﾍﾞｸﾞﾝｲﾅｶﾞﾜﾁｮｳ",
        ]);

        City::create([
            "id" => 1314,
            "prefecture_id" => 28,
            "name" => "多可郡多可町",
            "romaji" => "takaguntakachou",
            "hiragana" => "たかぐんたかちょう",
            "katakana" => "タカグンタカチョウ",
            "katakana_half" => "ﾀｶｸﾞﾝﾀｶﾁｮｳ",
        ]);

        City::create([
            "id" => 1315,
            "prefecture_id" => 28,
            "name" => "加古郡稲美町",
            "romaji" => "kakoguninamichou",
            "hiragana" => "かこぐんいなみちょう",
            "katakana" => "カコグンイナミチョウ",
            "katakana_half" => "ｶｺｸﾞﾝｲﾅﾐﾁｮｳ",
        ]);

        City::create([
            "id" => 1316,
            "prefecture_id" => 28,
            "name" => "加古郡播磨町",
            "romaji" => "kakogunharimachou",
            "hiragana" => "かこぐんはりまちょう",
            "katakana" => "カコグンハリマチョウ",
            "katakana_half" => "ｶｺｸﾞﾝﾊﾘﾏﾁｮｳ",
        ]);

        City::create([
            "id" => 1317,
            "prefecture_id" => 28,
            "name" => "神崎郡市川町",
            "romaji" => "kanzakigunichikawachou",
            "hiragana" => "かんざきぐんいちかわちょう",
            "katakana" => "カンザキグンイチカワチョウ",
            "katakana_half" => "ｶﾝｻﾞｷｸﾞﾝｲﾁｶﾜﾁｮｳ",
        ]);

        City::create([
            "id" => 1318,
            "prefecture_id" => 28,
            "name" => "神崎郡福崎町",
            "romaji" => "kanzakigunfukusakichou",
            "hiragana" => "かんざきぐんふくさきちょう",
            "katakana" => "カンザキグンフクサキチョウ",
            "katakana_half" => "ｶﾝｻﾞｷｸﾞﾝﾌｸｻｷﾁｮｳ",
        ]);

        City::create([
            "id" => 1319,
            "prefecture_id" => 28,
            "name" => "神崎郡神河町",
            "romaji" => "kanzakigunkamikawachou",
            "hiragana" => "かんざきぐんかみかわちょう",
            "katakana" => "カンザキグンカミカワチョウ",
            "katakana_half" => "ｶﾝｻﾞｷｸﾞﾝｶﾐｶﾜﾁｮｳ",
        ]);

        City::create([
            "id" => 1320,
            "prefecture_id" => 28,
            "name" => "揖保郡太子町",
            "romaji" => "iboguntaishichou",
            "hiragana" => "いぼぐんたいしちょう",
            "katakana" => "イボグンタイシチョウ",
            "katakana_half" => "ｲﾎﾞｸﾞﾝﾀｲｼﾁｮｳ",
        ]);

        City::create([
            "id" => 1321,
            "prefecture_id" => 28,
            "name" => "赤穂郡上郡町",
            "romaji" => "akougunkamigoorichou",
            "hiragana" => "あこうぐんかみごおりちょう",
            "katakana" => "アコウグンカミゴオリチョウ",
            "katakana_half" => "ｱｺｳｸﾞﾝｶﾐｺﾞｵﾘﾁｮｳ",
        ]);

        City::create([
            "id" => 1322,
            "prefecture_id" => 28,
            "name" => "佐用郡佐用町",
            "romaji" => "sayougunsayouchou",
            "hiragana" => "さようぐんさようちょう",
            "katakana" => "サヨウグンサヨウチョウ",
            "katakana_half" => "ｻﾖｳｸﾞﾝｻﾖｳﾁｮｳ",
        ]);

        City::create([
            "id" => 1323,
            "prefecture_id" => 28,
            "name" => "美方郡香美町",
            "romaji" => "mikatagunkamichou",
            "hiragana" => "みかたぐんかみちょう",
            "katakana" => "ミカタグンカミチョウ",
            "katakana_half" => "ﾐｶﾀｸﾞﾝｶﾐﾁｮｳ",
        ]);

        City::create([
            "id" => 1324,
            "prefecture_id" => 28,
            "name" => "美方郡新温泉町",
            "romaji" => "mikatagunshinonsenchou",
            "hiragana" => "みかたぐんしんおんせんちょう",
            "katakana" => "ミカタグンシンオンセンチョウ",
            "katakana_half" => "ﾐｶﾀｸﾞﾝｼﾝｵﾝｾﾝﾁｮｳ",
        ]);

        City::create([
            "id" => 1325,
            "prefecture_id" => 29,
            "name" => "奈良市",
            "romaji" => "narashi",
            "hiragana" => "ならし",
            "katakana" => "ナラシ",
            "katakana_half" => "ﾅﾗｼ",
        ]);

        City::create([
            "id" => 1326,
            "prefecture_id" => 29,
            "name" => "大和高田市",
            "romaji" => "yamatotakadashi",
            "hiragana" => "やまとたかだし",
            "katakana" => "ヤマトタカダシ",
            "katakana_half" => "ﾔﾏﾄﾀｶﾀﾞｼ",
        ]);

        City::create([
            "id" => 1327,
            "prefecture_id" => 29,
            "name" => "大和郡山市",
            "romaji" => "yamatokooriyamashi",
            "hiragana" => "やまとこおりやまし",
            "katakana" => "ヤマトコオリヤマシ",
            "katakana_half" => "ﾔﾏﾄｺｵﾘﾔﾏｼ",
        ]);

        City::create([
            "id" => 1328,
            "prefecture_id" => 29,
            "name" => "天理市",
            "romaji" => "tenrishi",
            "hiragana" => "てんりし",
            "katakana" => "テンリシ",
            "katakana_half" => "ﾃﾝﾘｼ",
        ]);

        City::create([
            "id" => 1329,
            "prefecture_id" => 29,
            "name" => "橿原市",
            "romaji" => "kashiharashi",
            "hiragana" => "かしはらし",
            "katakana" => "カシハラシ",
            "katakana_half" => "ｶｼﾊﾗｼ",
        ]);

        City::create([
            "id" => 1330,
            "prefecture_id" => 29,
            "name" => "桜井市",
            "romaji" => "sakuraishi",
            "hiragana" => "さくらいし",
            "katakana" => "サクライシ",
            "katakana_half" => "ｻｸﾗｲｼ",
        ]);

        City::create([
            "id" => 1331,
            "prefecture_id" => 29,
            "name" => "五條市",
            "romaji" => "gojoushi",
            "hiragana" => "ごじょうし",
            "katakana" => "ゴジョウシ",
            "katakana_half" => "ｺﾞｼﾞｮｳｼ",
        ]);

        City::create([
            "id" => 1332,
            "prefecture_id" => 29,
            "name" => "御所市",
            "romaji" => "goseshi",
            "hiragana" => "ごせし",
            "katakana" => "ゴセシ",
            "katakana_half" => "ｺﾞｾｼ",
        ]);

        City::create([
            "id" => 1333,
            "prefecture_id" => 29,
            "name" => "生駒市",
            "romaji" => "ikomashi",
            "hiragana" => "いこまし",
            "katakana" => "イコマシ",
            "katakana_half" => "ｲｺﾏｼ",
        ]);

        City::create([
            "id" => 1334,
            "prefecture_id" => 29,
            "name" => "香芝市",
            "romaji" => "kashibashi",
            "hiragana" => "かしばし",
            "katakana" => "カシバシ",
            "katakana_half" => "ｶｼﾊﾞｼ",
        ]);

        City::create([
            "id" => 1335,
            "prefecture_id" => 29,
            "name" => "葛城市",
            "romaji" => "katsuragishi",
            "hiragana" => "かつらぎし",
            "katakana" => "カツラギシ",
            "katakana_half" => "ｶﾂﾗｷﾞｼ",
        ]);

        City::create([
            "id" => 1336,
            "prefecture_id" => 29,
            "name" => "宇陀市",
            "romaji" => "udashi",
            "hiragana" => "うだし",
            "katakana" => "ウダシ",
            "katakana_half" => "ｳﾀﾞｼ",
        ]);

        City::create([
            "id" => 1337,
            "prefecture_id" => 29,
            "name" => "山辺郡山添村",
            "romaji" => "yamabegunyamazoemura",
            "hiragana" => "やまべぐんやまぞえむら",
            "katakana" => "ヤマベグンヤマゾエムラ",
            "katakana_half" => "ﾔﾏﾍﾞｸﾞﾝﾔﾏｿﾞｴﾑﾗ",
        ]);

        City::create([
            "id" => 1338,
            "prefecture_id" => 29,
            "name" => "生駒郡平群町",
            "romaji" => "ikomagunhegurichou",
            "hiragana" => "いこまぐんへぐりちょう",
            "katakana" => "イコマグンヘグリチョウ",
            "katakana_half" => "ｲｺﾏｸﾞﾝﾍｸﾞﾘﾁｮｳ",
        ]);

        City::create([
            "id" => 1339,
            "prefecture_id" => 29,
            "name" => "生駒郡三郷町",
            "romaji" => "ikomagunsangouchou",
            "hiragana" => "いこまぐんさんごうちょう",
            "katakana" => "イコマグンサンゴウチョウ",
            "katakana_half" => "ｲｺﾏｸﾞﾝｻﾝｺﾞｳﾁｮｳ",
        ]);

        City::create([
            "id" => 1340,
            "prefecture_id" => 29,
            "name" => "生駒郡斑鳩町",
            "romaji" => "ikomagunikarugachou",
            "hiragana" => "いこまぐんいかるがちょう",
            "katakana" => "イコマグンイカルガチョウ",
            "katakana_half" => "ｲｺﾏｸﾞﾝｲｶﾙｶﾞﾁｮｳ",
        ]);

        City::create([
            "id" => 1341,
            "prefecture_id" => 29,
            "name" => "生駒郡安堵町",
            "romaji" => "ikomagunandochou",
            "hiragana" => "いこまぐんあんどちょう",
            "katakana" => "イコマグンアンドチョウ",
            "katakana_half" => "ｲｺﾏｸﾞﾝｱﾝﾄﾞﾁｮｳ",
        ]);

        City::create([
            "id" => 1342,
            "prefecture_id" => 29,
            "name" => "磯城郡川西町",
            "romaji" => "shikigunkawanishichou",
            "hiragana" => "しきぐんかわにしちょう",
            "katakana" => "シキグンカワニシチョウ",
            "katakana_half" => "ｼｷｸﾞﾝｶﾜﾆｼﾁｮｳ",
        ]);

        City::create([
            "id" => 1343,
            "prefecture_id" => 29,
            "name" => "磯城郡三宅町",
            "romaji" => "shikigunmiyakechou",
            "hiragana" => "しきぐんみやけちょう",
            "katakana" => "シキグンミヤケチョウ",
            "katakana_half" => "ｼｷｸﾞﾝﾐﾔｹﾁｮｳ",
        ]);

        City::create([
            "id" => 1344,
            "prefecture_id" => 29,
            "name" => "磯城郡田原本町",
            "romaji" => "shikiguntawaramotochou",
            "hiragana" => "しきぐんたわらもとちょう",
            "katakana" => "シキグンタワラモトチョウ",
            "katakana_half" => "ｼｷｸﾞﾝﾀﾜﾗﾓﾄﾁｮｳ",
        ]);

        City::create([
            "id" => 1345,
            "prefecture_id" => 29,
            "name" => "宇陀郡曽爾村",
            "romaji" => "udagunsonimura",
            "hiragana" => "うだぐんそにむら",
            "katakana" => "ウダグンソニムラ",
            "katakana_half" => "ｳﾀﾞｸﾞﾝｿﾆﾑﾗ",
        ]);

        City::create([
            "id" => 1346,
            "prefecture_id" => 29,
            "name" => "宇陀郡御杖村",
            "romaji" => "udagunmitsuemura",
            "hiragana" => "うだぐんみつえむら",
            "katakana" => "ウダグンミツエムラ",
            "katakana_half" => "ｳﾀﾞｸﾞﾝﾐﾂｴﾑﾗ",
        ]);

        City::create([
            "id" => 1347,
            "prefecture_id" => 29,
            "name" => "高市郡高取町",
            "romaji" => "takaichiguntakatorichou",
            "hiragana" => "たかいちぐんたかとりちょう",
            "katakana" => "タカイチグンタカトリチョウ",
            "katakana_half" => "ﾀｶｲﾁｸﾞﾝﾀｶﾄﾘﾁｮｳ",
        ]);

        City::create([
            "id" => 1348,
            "prefecture_id" => 29,
            "name" => "高市郡明日香村",
            "romaji" => "takaichigunasukamura",
            "hiragana" => "たかいちぐんあすかむら",
            "katakana" => "タカイチグンアスカムラ",
            "katakana_half" => "ﾀｶｲﾁｸﾞﾝｱｽｶﾑﾗ",
        ]);

        City::create([
            "id" => 1349,
            "prefecture_id" => 29,
            "name" => "北葛城郡上牧町",
            "romaji" => "kitakatsuragigunkanmakichou",
            "hiragana" => "きたかつらぎぐんかんまきちょう",
            "katakana" => "キタカツラギグンカンマキチョウ",
            "katakana_half" => "ｷﾀｶﾂﾗｷﾞｸﾞﾝｶﾝﾏｷﾁｮｳ",
        ]);

        City::create([
            "id" => 1350,
            "prefecture_id" => 29,
            "name" => "北葛城郡王寺町",
            "romaji" => "kitakatsuragigunoujichou",
            "hiragana" => "きたかつらぎぐんおうじちょう",
            "katakana" => "キタカツラギグンオウジチョウ",
            "katakana_half" => "ｷﾀｶﾂﾗｷﾞｸﾞﾝｵｳｼﾞﾁｮｳ",
        ]);

        City::create([
            "id" => 1351,
            "prefecture_id" => 29,
            "name" => "北葛城郡広陵町",
            "romaji" => "kitakatsuragigunkouryouchou",
            "hiragana" => "きたかつらぎぐんこうりょうちょう",
            "katakana" => "キタカツラギグンコウリョウチョウ",
            "katakana_half" => "ｷﾀｶﾂﾗｷﾞｸﾞﾝｺｳﾘｮｳﾁｮｳ",
        ]);

        City::create([
            "id" => 1352,
            "prefecture_id" => 29,
            "name" => "北葛城郡河合町",
            "romaji" => "kitakatsuragigunkawaichou",
            "hiragana" => "きたかつらぎぐんかわいちょう",
            "katakana" => "キタカツラギグンカワイチョウ",
            "katakana_half" => "ｷﾀｶﾂﾗｷﾞｸﾞﾝｶﾜｲﾁｮｳ",
        ]);

        City::create([
            "id" => 1353,
            "prefecture_id" => 29,
            "name" => "吉野郡吉野町",
            "romaji" => "yoshinogunyoshinochou",
            "hiragana" => "よしのぐんよしのちょう",
            "katakana" => "ヨシノグンヨシノチョウ",
            "katakana_half" => "ﾖｼﾉｸﾞﾝﾖｼﾉﾁｮｳ",
        ]);

        City::create([
            "id" => 1354,
            "prefecture_id" => 29,
            "name" => "吉野郡大淀町",
            "romaji" => "yoshinogunooyodochou",
            "hiragana" => "よしのぐんおおよどちょう",
            "katakana" => "ヨシノグンオオヨドチョウ",
            "katakana_half" => "ﾖｼﾉｸﾞﾝｵｵﾖﾄﾞﾁｮｳ",
        ]);

        City::create([
            "id" => 1355,
            "prefecture_id" => 29,
            "name" => "吉野郡下市町",
            "romaji" => "yoshinogunshimoichichou",
            "hiragana" => "よしのぐんしもいちちょう",
            "katakana" => "ヨシノグンシモイチチョウ",
            "katakana_half" => "ﾖｼﾉｸﾞﾝｼﾓｲﾁﾁｮｳ",
        ]);

        City::create([
            "id" => 1356,
            "prefecture_id" => 29,
            "name" => "吉野郡黒滝村",
            "romaji" => "yoshinogunkurotakimura",
            "hiragana" => "よしのぐんくろたきむら",
            "katakana" => "ヨシノグンクロタキムラ",
            "katakana_half" => "ﾖｼﾉｸﾞﾝｸﾛﾀｷﾑﾗ",
        ]);

        City::create([
            "id" => 1357,
            "prefecture_id" => 29,
            "name" => "吉野郡天川村",
            "romaji" => "yoshinoguntenkawamura",
            "hiragana" => "よしのぐんてんかわむら",
            "katakana" => "ヨシノグンテンカワムラ",
            "katakana_half" => "ﾖｼﾉｸﾞﾝﾃﾝｶﾜﾑﾗ",
        ]);

        City::create([
            "id" => 1358,
            "prefecture_id" => 29,
            "name" => "吉野郡野迫川村",
            "romaji" => "yoshinogunnosegawamura",
            "hiragana" => "よしのぐんのせがわむら",
            "katakana" => "ヨシノグンノセガワムラ",
            "katakana_half" => "ﾖｼﾉｸﾞﾝﾉｾｶﾞﾜﾑﾗ",
        ]);

        City::create([
            "id" => 1359,
            "prefecture_id" => 29,
            "name" => "吉野郡十津川村",
            "romaji" => "yoshinoguntotsukawamura",
            "hiragana" => "よしのぐんとつかわむら",
            "katakana" => "ヨシノグントツカワムラ",
            "katakana_half" => "ﾖｼﾉｸﾞﾝﾄﾂｶﾜﾑﾗ",
        ]);

        City::create([
            "id" => 1360,
            "prefecture_id" => 29,
            "name" => "吉野郡下北山村",
            "romaji" => "yoshinogunshimokitayamamura",
            "hiragana" => "よしのぐんしもきたやまむら",
            "katakana" => "ヨシノグンシモキタヤマムラ",
            "katakana_half" => "ﾖｼﾉｸﾞﾝｼﾓｷﾀﾔﾏﾑﾗ",
        ]);

        City::create([
            "id" => 1361,
            "prefecture_id" => 29,
            "name" => "吉野郡上北山村",
            "romaji" => "yoshinogunkamikitayamamura",
            "hiragana" => "よしのぐんかみきたやまむら",
            "katakana" => "ヨシノグンカミキタヤマムラ",
            "katakana_half" => "ﾖｼﾉｸﾞﾝｶﾐｷﾀﾔﾏﾑﾗ",
        ]);

        City::create([
            "id" => 1362,
            "prefecture_id" => 29,
            "name" => "吉野郡川上村",
            "romaji" => "yoshinogunkawakamimura",
            "hiragana" => "よしのぐんかわかみむら",
            "katakana" => "ヨシノグンカワカミムラ",
            "katakana_half" => "ﾖｼﾉｸﾞﾝｶﾜｶﾐﾑﾗ",
        ]);

        City::create([
            "id" => 1363,
            "prefecture_id" => 29,
            "name" => "吉野郡東吉野村",
            "romaji" => "yoshinogunhigashiyoshinomura",
            "hiragana" => "よしのぐんひがしよしのむら",
            "katakana" => "ヨシノグンヒガシヨシノムラ",
            "katakana_half" => "ﾖｼﾉｸﾞﾝﾋｶﾞｼﾖｼﾉﾑﾗ",
        ]);

        City::create([
            "id" => 1364,
            "prefecture_id" => 30,
            "name" => "和歌山市",
            "romaji" => "wakayamashi",
            "hiragana" => "わかやまし",
            "katakana" => "ワカヤマシ",
            "katakana_half" => "ﾜｶﾔﾏｼ",
        ]);

        City::create([
            "id" => 1365,
            "prefecture_id" => 30,
            "name" => "海南市",
            "romaji" => "kainanshi",
            "hiragana" => "かいなんし",
            "katakana" => "カイナンシ",
            "katakana_half" => "ｶｲﾅﾝｼ",
        ]);

        City::create([
            "id" => 1366,
            "prefecture_id" => 30,
            "name" => "橋本市",
            "romaji" => "hashimotoshi",
            "hiragana" => "はしもとし",
            "katakana" => "ハシモトシ",
            "katakana_half" => "ﾊｼﾓﾄｼ",
        ]);

        City::create([
            "id" => 1367,
            "prefecture_id" => 30,
            "name" => "有田市",
            "romaji" => "aridashi",
            "hiragana" => "ありだし",
            "katakana" => "アリダシ",
            "katakana_half" => "ｱﾘﾀﾞｼ",
        ]);

        City::create([
            "id" => 1368,
            "prefecture_id" => 30,
            "name" => "御坊市",
            "romaji" => "goboushi",
            "hiragana" => "ごぼうし",
            "katakana" => "ゴボウシ",
            "katakana_half" => "ｺﾞﾎﾞｳｼ",
        ]);

        City::create([
            "id" => 1369,
            "prefecture_id" => 30,
            "name" => "田辺市",
            "romaji" => "tanabeshi",
            "hiragana" => "たなべし",
            "katakana" => "タナベシ",
            "katakana_half" => "ﾀﾅﾍﾞｼ",
        ]);

        City::create([
            "id" => 1370,
            "prefecture_id" => 30,
            "name" => "新宮市",
            "romaji" => "shinguushi",
            "hiragana" => "しんぐうし",
            "katakana" => "シングウシ",
            "katakana_half" => "ｼﾝｸﾞｳｼ",
        ]);

        City::create([
            "id" => 1371,
            "prefecture_id" => 30,
            "name" => "紀の川市",
            "romaji" => "kinokawashi",
            "hiragana" => "きのかわし",
            "katakana" => "キノカワシ",
            "katakana_half" => "ｷﾉｶﾜｼ",
        ]);

        City::create([
            "id" => 1372,
            "prefecture_id" => 30,
            "name" => "岩出市",
            "romaji" => "iwadeshi",
            "hiragana" => "いわでし",
            "katakana" => "イワデシ",
            "katakana_half" => "ｲﾜﾃﾞｼ",
        ]);

        City::create([
            "id" => 1373,
            "prefecture_id" => 30,
            "name" => "海草郡紀美野町",
            "romaji" => "kaisougunkiminochou",
            "hiragana" => "かいそうぐんきみのちょう",
            "katakana" => "カイソウグンキミノチョウ",
            "katakana_half" => "ｶｲｿｳｸﾞﾝｷﾐﾉﾁｮｳ",
        ]);

        City::create([
            "id" => 1374,
            "prefecture_id" => 30,
            "name" => "伊都郡かつらぎ町",
            "romaji" => "itogunkatsuragichou",
            "hiragana" => "いとぐんかつらぎちょう",
            "katakana" => "イトグンカツラギチョウ",
            "katakana_half" => "ｲﾄｸﾞﾝｶﾂﾗｷﾞﾁｮｳ",
        ]);

        City::create([
            "id" => 1375,
            "prefecture_id" => 30,
            "name" => "伊都郡九度山町",
            "romaji" => "itogunkudoyamachou",
            "hiragana" => "いとぐんくどやまちょう",
            "katakana" => "イトグンクドヤマチョウ",
            "katakana_half" => "ｲﾄｸﾞﾝｸﾄﾞﾔﾏﾁｮｳ",
        ]);

        City::create([
            "id" => 1376,
            "prefecture_id" => 30,
            "name" => "伊都郡高野町",
            "romaji" => "itogunkouyachou",
            "hiragana" => "いとぐんこうやちょう",
            "katakana" => "イトグンコウヤチョウ",
            "katakana_half" => "ｲﾄｸﾞﾝｺｳﾔﾁｮｳ",
        ]);

        City::create([
            "id" => 1377,
            "prefecture_id" => 30,
            "name" => "有田郡湯浅町",
            "romaji" => "aridagunyuasachou",
            "hiragana" => "ありだぐんゆあさちょう",
            "katakana" => "アリダグンユアサチョウ",
            "katakana_half" => "ｱﾘﾀﾞｸﾞﾝﾕｱｻﾁｮｳ",
        ]);

        City::create([
            "id" => 1378,
            "prefecture_id" => 30,
            "name" => "有田郡広川町",
            "romaji" => "aridagunhirogawachou",
            "hiragana" => "ありだぐんひろがわちょう",
            "katakana" => "アリダグンヒロガワチョウ",
            "katakana_half" => "ｱﾘﾀﾞｸﾞﾝﾋﾛｶﾞﾜﾁｮｳ",
        ]);

        City::create([
            "id" => 1379,
            "prefecture_id" => 30,
            "name" => "有田郡有田川町",
            "romaji" => "aridagunaridagawachou",
            "hiragana" => "ありだぐんありだがわちょう",
            "katakana" => "アリダグンアリダガワチョウ",
            "katakana_half" => "ｱﾘﾀﾞｸﾞﾝｱﾘﾀﾞｶﾞﾜﾁｮｳ",
        ]);

        City::create([
            "id" => 1380,
            "prefecture_id" => 30,
            "name" => "日高郡美浜町",
            "romaji" => "hidakagunmihamachou",
            "hiragana" => "ひだかぐんみはまちょう",
            "katakana" => "ヒダカグンミハマチョウ",
            "katakana_half" => "ﾋﾀﾞｶｸﾞﾝﾐﾊﾏﾁｮｳ",
        ]);

        City::create([
            "id" => 1381,
            "prefecture_id" => 30,
            "name" => "日高郡日高町",
            "romaji" => "hidakagunhidakachou",
            "hiragana" => "ひだかぐんひだかちょう",
            "katakana" => "ヒダカグンヒダカチョウ",
            "katakana_half" => "ﾋﾀﾞｶｸﾞﾝﾋﾀﾞｶﾁｮｳ",
        ]);

        City::create([
            "id" => 1382,
            "prefecture_id" => 30,
            "name" => "日高郡由良町",
            "romaji" => "hidakagunyurachou",
            "hiragana" => "ひだかぐんゆらちょう",
            "katakana" => "ヒダカグンユラチョウ",
            "katakana_half" => "ﾋﾀﾞｶｸﾞﾝﾕﾗﾁｮｳ",
        ]);

        City::create([
            "id" => 1383,
            "prefecture_id" => 30,
            "name" => "日高郡印南町",
            "romaji" => "hidakaguninamichou",
            "hiragana" => "ひだかぐんいなみちょう",
            "katakana" => "ヒダカグンイナミチョウ",
            "katakana_half" => "ﾋﾀﾞｶｸﾞﾝｲﾅﾐﾁｮｳ",
        ]);

        City::create([
            "id" => 1384,
            "prefecture_id" => 30,
            "name" => "日高郡みなべ町",
            "romaji" => "hidakagunminabechou",
            "hiragana" => "ひだかぐんみなべちょう",
            "katakana" => "ヒダカグンミナベチョウ",
            "katakana_half" => "ﾋﾀﾞｶｸﾞﾝﾐﾅﾍﾞﾁｮｳ",
        ]);

        City::create([
            "id" => 1385,
            "prefecture_id" => 30,
            "name" => "日高郡日高川町",
            "romaji" => "hidakagunhidakagawachou",
            "hiragana" => "ひだかぐんひだかがわちょう",
            "katakana" => "ヒダカグンヒダカガワチョウ",
            "katakana_half" => "ﾋﾀﾞｶｸﾞﾝﾋﾀﾞｶｶﾞﾜﾁｮｳ",
        ]);

        City::create([
            "id" => 1386,
            "prefecture_id" => 30,
            "name" => "西牟婁郡白浜町",
            "romaji" => "nishimurogunshirahamachou",
            "hiragana" => "にしむろぐんしらはまちょう",
            "katakana" => "ニシムログンシラハマチョウ",
            "katakana_half" => "ﾆｼﾑﾛｸﾞﾝｼﾗﾊﾏﾁｮｳ",
        ]);

        City::create([
            "id" => 1387,
            "prefecture_id" => 30,
            "name" => "西牟婁郡上富田町",
            "romaji" => "nishimurogunkamitondachou",
            "hiragana" => "にしむろぐんかみとんだちょう",
            "katakana" => "ニシムログンカミトンダチョウ",
            "katakana_half" => "ﾆｼﾑﾛｸﾞﾝｶﾐﾄﾝﾀﾞﾁｮｳ",
        ]);

        City::create([
            "id" => 1388,
            "prefecture_id" => 30,
            "name" => "西牟婁郡すさみ町",
            "romaji" => "nishimurogunsusamichou",
            "hiragana" => "にしむろぐんすさみちょう",
            "katakana" => "ニシムログンスサミチョウ",
            "katakana_half" => "ﾆｼﾑﾛｸﾞﾝｽｻﾐﾁｮｳ",
        ]);

        City::create([
            "id" => 1389,
            "prefecture_id" => 30,
            "name" => "東牟婁郡那智勝浦町",
            "romaji" => "higashimurogunnachikatsuurachou",
            "hiragana" => "ひがしむろぐんなちかつうらちょう",
            "katakana" => "ヒガシムログンナチカツウラチョウ",
            "katakana_half" => "ﾋｶﾞｼﾑﾛｸﾞﾝﾅﾁｶﾂｳﾗﾁｮｳ",
        ]);

        City::create([
            "id" => 1390,
            "prefecture_id" => 30,
            "name" => "東牟婁郡太地町",
            "romaji" => "higashimuroguntaijichou",
            "hiragana" => "ひがしむろぐんたいじちょう",
            "katakana" => "ヒガシムログンタイジチョウ",
            "katakana_half" => "ﾋｶﾞｼﾑﾛｸﾞﾝﾀｲｼﾞﾁｮｳ",
        ]);

        City::create([
            "id" => 1391,
            "prefecture_id" => 30,
            "name" => "東牟婁郡古座川町",
            "romaji" => "higashimurogunkozagawachou",
            "hiragana" => "ひがしむろぐんこざがわちょう",
            "katakana" => "ヒガシムログンコザガワチョウ",
            "katakana_half" => "ﾋｶﾞｼﾑﾛｸﾞﾝｺｻﾞｶﾞﾜﾁｮｳ",
        ]);

        City::create([
            "id" => 1392,
            "prefecture_id" => 30,
            "name" => "東牟婁郡北山村",
            "romaji" => "higashimurogunkitayamamura",
            "hiragana" => "ひがしむろぐんきたやまむら",
            "katakana" => "ヒガシムログンキタヤマムラ",
            "katakana_half" => "ﾋｶﾞｼﾑﾛｸﾞﾝｷﾀﾔﾏﾑﾗ",
        ]);

        City::create([
            "id" => 1393,
            "prefecture_id" => 30,
            "name" => "東牟婁郡串本町",
            "romaji" => "higashimurogunkushimotochou",
            "hiragana" => "ひがしむろぐんくしもとちょう",
            "katakana" => "ヒガシムログンクシモトチョウ",
            "katakana_half" => "ﾋｶﾞｼﾑﾛｸﾞﾝｸｼﾓﾄﾁｮｳ",
        ]);

        City::create([
            "id" => 1394,
            "prefecture_id" => 31,
            "name" => "鳥取市",
            "romaji" => "tottorishi",
            "hiragana" => "とっとりし",
            "katakana" => "トットリシ",
            "katakana_half" => "ﾄｯﾄﾘｼ",
        ]);

        City::create([
            "id" => 1395,
            "prefecture_id" => 31,
            "name" => "米子市",
            "romaji" => "yonagoshi",
            "hiragana" => "よなごし",
            "katakana" => "ヨナゴシ",
            "katakana_half" => "ﾖﾅｺﾞｼ",
        ]);

        City::create([
            "id" => 1396,
            "prefecture_id" => 31,
            "name" => "倉吉市",
            "romaji" => "kurayoshishi",
            "hiragana" => "くらよしし",
            "katakana" => "クラヨシシ",
            "katakana_half" => "ｸﾗﾖｼｼ",
        ]);

        City::create([
            "id" => 1397,
            "prefecture_id" => 31,
            "name" => "境港市",
            "romaji" => "sakaiminatoshi",
            "hiragana" => "さかいみなとし",
            "katakana" => "サカイミナトシ",
            "katakana_half" => "ｻｶｲﾐﾅﾄｼ",
        ]);

        City::create([
            "id" => 1398,
            "prefecture_id" => 31,
            "name" => "岩美郡岩美町",
            "romaji" => "iwamiguniwamichou",
            "hiragana" => "いわみぐんいわみちょう",
            "katakana" => "イワミグンイワミチョウ",
            "katakana_half" => "ｲﾜﾐｸﾞﾝｲﾜﾐﾁｮｳ",
        ]);

        City::create([
            "id" => 1399,
            "prefecture_id" => 31,
            "name" => "八頭郡若桜町",
            "romaji" => "yazugunwakasachou",
            "hiragana" => "やずぐんわかさちょう",
            "katakana" => "ヤズグンワカサチョウ",
            "katakana_half" => "ﾔｽﾞｸﾞﾝﾜｶｻﾁｮｳ",
        ]);

        City::create([
            "id" => 1400,
            "prefecture_id" => 31,
            "name" => "八頭郡智頭町",
            "romaji" => "yazugunchizuchou",
            "hiragana" => "やずぐんちづちょう",
            "katakana" => "ヤズグンチヅチョウ",
            "katakana_half" => "ﾔｽﾞｸﾞﾝﾁﾂﾞﾁｮｳ",
        ]);

        City::create([
            "id" => 1401,
            "prefecture_id" => 31,
            "name" => "八頭郡八頭町",
            "romaji" => "yazugunyazuchou",
            "hiragana" => "やずぐんやずちょう",
            "katakana" => "ヤズグンヤズチョウ",
            "katakana_half" => "ﾔｽﾞｸﾞﾝﾔｽﾞﾁｮｳ",
        ]);

        City::create([
            "id" => 1402,
            "prefecture_id" => 31,
            "name" => "東伯郡三朝町",
            "romaji" => "touhakugunmisasachou",
            "hiragana" => "とうはくぐんみささちょう",
            "katakana" => "トウハクグンミササチョウ",
            "katakana_half" => "ﾄｳﾊｸｸﾞﾝﾐｻｻﾁｮｳ",
        ]);

        City::create([
            "id" => 1403,
            "prefecture_id" => 31,
            "name" => "東伯郡湯梨浜町",
            "romaji" => "touhakugunyurihamachou",
            "hiragana" => "とうはくぐんゆりはまちょう",
            "katakana" => "トウハクグンユリハマチョウ",
            "katakana_half" => "ﾄｳﾊｸｸﾞﾝﾕﾘﾊﾏﾁｮｳ",
        ]);

        City::create([
            "id" => 1404,
            "prefecture_id" => 31,
            "name" => "東伯郡琴浦町",
            "romaji" => "touhakugunkotourachou",
            "hiragana" => "とうはくぐんことうらちょう",
            "katakana" => "トウハクグンコトウラチョウ",
            "katakana_half" => "ﾄｳﾊｸｸﾞﾝｺﾄｳﾗﾁｮｳ",
        ]);

        City::create([
            "id" => 1405,
            "prefecture_id" => 31,
            "name" => "東伯郡北栄町",
            "romaji" => "touhakugunhokueichou",
            "hiragana" => "とうはくぐんほくえいちょう",
            "katakana" => "トウハクグンホクエイチョウ",
            "katakana_half" => "ﾄｳﾊｸｸﾞﾝﾎｸｴｲﾁｮｳ",
        ]);

        City::create([
            "id" => 1406,
            "prefecture_id" => 31,
            "name" => "西伯郡日吉津村",
            "romaji" => "saihakugunhiezuson",
            "hiragana" => "さいはくぐんひえづそん",
            "katakana" => "サイハクグンヒエヅソン",
            "katakana_half" => "ｻｲﾊｸｸﾞﾝﾋｴﾂﾞｿﾝ",
        ]);

        City::create([
            "id" => 1407,
            "prefecture_id" => 31,
            "name" => "西伯郡大山町",
            "romaji" => "saihakugundaisenchou",
            "hiragana" => "さいはくぐんだいせんちょう",
            "katakana" => "サイハクグンダイセンチョウ",
            "katakana_half" => "ｻｲﾊｸｸﾞﾝﾀﾞｲｾﾝﾁｮｳ",
        ]);

        City::create([
            "id" => 1408,
            "prefecture_id" => 31,
            "name" => "西伯郡南部町",
            "romaji" => "saihakugunnanbuchou",
            "hiragana" => "さいはくぐんなんぶちょう",
            "katakana" => "サイハクグンナンブチョウ",
            "katakana_half" => "ｻｲﾊｸｸﾞﾝﾅﾝﾌﾞﾁｮｳ",
        ]);

        City::create([
            "id" => 1409,
            "prefecture_id" => 31,
            "name" => "西伯郡伯耆町",
            "romaji" => "saihakugunhoukichou",
            "hiragana" => "さいはくぐんほうきちょう",
            "katakana" => "サイハクグンホウキチョウ",
            "katakana_half" => "ｻｲﾊｸｸﾞﾝﾎｳｷﾁｮｳ",
        ]);

        City::create([
            "id" => 1410,
            "prefecture_id" => 31,
            "name" => "日野郡日南町",
            "romaji" => "hinogunnichinanchou",
            "hiragana" => "ひのぐんにちなんちょう",
            "katakana" => "ヒノグンニチナンチョウ",
            "katakana_half" => "ﾋﾉｸﾞﾝﾆﾁﾅﾝﾁｮｳ",
        ]);

        City::create([
            "id" => 1411,
            "prefecture_id" => 31,
            "name" => "日野郡日野町",
            "romaji" => "hinogunhinochou",
            "hiragana" => "ひのぐんひのちょう",
            "katakana" => "ヒノグンヒノチョウ",
            "katakana_half" => "ﾋﾉｸﾞﾝﾋﾉﾁｮｳ",
        ]);

        City::create([
            "id" => 1412,
            "prefecture_id" => 31,
            "name" => "日野郡江府町",
            "romaji" => "hinogunkoufuchou",
            "hiragana" => "ひのぐんこうふちょう",
            "katakana" => "ヒノグンコウフチョウ",
            "katakana_half" => "ﾋﾉｸﾞﾝｺｳﾌﾁｮｳ",
        ]);

        City::create([
            "id" => 1413,
            "prefecture_id" => 32,
            "name" => "松江市",
            "romaji" => "matsueshi",
            "hiragana" => "まつえし",
            "katakana" => "マツエシ",
            "katakana_half" => "ﾏﾂｴｼ",
        ]);

        City::create([
            "id" => 1414,
            "prefecture_id" => 32,
            "name" => "浜田市",
            "romaji" => "hamadashi",
            "hiragana" => "はまだし",
            "katakana" => "ハマダシ",
            "katakana_half" => "ﾊﾏﾀﾞｼ",
        ]);

        City::create([
            "id" => 1415,
            "prefecture_id" => 32,
            "name" => "出雲市",
            "romaji" => "izumoshi",
            "hiragana" => "いずもし",
            "katakana" => "イズモシ",
            "katakana_half" => "ｲｽﾞﾓｼ",
        ]);

        City::create([
            "id" => 1416,
            "prefecture_id" => 32,
            "name" => "益田市",
            "romaji" => "masudashi",
            "hiragana" => "ますだし",
            "katakana" => "マスダシ",
            "katakana_half" => "ﾏｽﾀﾞｼ",
        ]);

        City::create([
            "id" => 1417,
            "prefecture_id" => 32,
            "name" => "大田市",
            "romaji" => "oodashi",
            "hiragana" => "おおだし",
            "katakana" => "オオダシ",
            "katakana_half" => "ｵｵﾀﾞｼ",
        ]);

        City::create([
            "id" => 1418,
            "prefecture_id" => 32,
            "name" => "安来市",
            "romaji" => "yasugishi",
            "hiragana" => "やすぎし",
            "katakana" => "ヤスギシ",
            "katakana_half" => "ﾔｽｷﾞｼ",
        ]);

        City::create([
            "id" => 1419,
            "prefecture_id" => 32,
            "name" => "江津市",
            "romaji" => "goutsushi",
            "hiragana" => "ごうつし",
            "katakana" => "ゴウツシ",
            "katakana_half" => "ｺﾞｳﾂｼ",
        ]);

        City::create([
            "id" => 1420,
            "prefecture_id" => 32,
            "name" => "雲南市",
            "romaji" => "unnanshi",
            "hiragana" => "うんなんし",
            "katakana" => "ウンナンシ",
            "katakana_half" => "ｳﾝﾅﾝｼ",
        ]);

        City::create([
            "id" => 1421,
            "prefecture_id" => 32,
            "name" => "仁多郡奥出雲町",
            "romaji" => "nitagunokuizumochou",
            "hiragana" => "にたぐんおくいずもちょう",
            "katakana" => "ニタグンオクイズモチョウ",
            "katakana_half" => "ﾆﾀｸﾞﾝｵｸｲｽﾞﾓﾁｮｳ",
        ]);

        City::create([
            "id" => 1422,
            "prefecture_id" => 32,
            "name" => "飯石郡飯南町",
            "romaji" => "iishiguniinanchou",
            "hiragana" => "いいしぐんいいなんちょう",
            "katakana" => "イイシグンイイナンチョウ",
            "katakana_half" => "ｲｲｼｸﾞﾝｲｲﾅﾝﾁｮｳ",
        ]);

        City::create([
            "id" => 1423,
            "prefecture_id" => 32,
            "name" => "邑智郡川本町",
            "romaji" => "oochigunkawamotomachi",
            "hiragana" => "おおちぐんかわもとまち",
            "katakana" => "オオチグンカワモトマチ",
            "katakana_half" => "ｵｵﾁｸﾞﾝｶﾜﾓﾄﾏﾁ",
        ]);

        City::create([
            "id" => 1424,
            "prefecture_id" => 32,
            "name" => "邑智郡美郷町",
            "romaji" => "oochigunmisatochou",
            "hiragana" => "おおちぐんみさとちょう",
            "katakana" => "オオチグンミサトチョウ",
            "katakana_half" => "ｵｵﾁｸﾞﾝﾐｻﾄﾁｮｳ",
        ]);

        City::create([
            "id" => 1425,
            "prefecture_id" => 32,
            "name" => "邑智郡邑南町",
            "romaji" => "oochigunoonanchou",
            "hiragana" => "おおちぐんおおなんちょう",
            "katakana" => "オオチグンオオナンチョウ",
            "katakana_half" => "ｵｵﾁｸﾞﾝｵｵﾅﾝﾁｮｳ",
        ]);

        City::create([
            "id" => 1426,
            "prefecture_id" => 32,
            "name" => "鹿足郡津和野町",
            "romaji" => "kanoashiguntsuwanochou",
            "hiragana" => "かのあしぐんつわのちょう",
            "katakana" => "カノアシグンツワノチョウ",
            "katakana_half" => "ｶﾉｱｼｸﾞﾝﾂﾜﾉﾁｮｳ",
        ]);

        City::create([
            "id" => 1427,
            "prefecture_id" => 32,
            "name" => "鹿足郡吉賀町",
            "romaji" => "kanoashigunyoshikachou",
            "hiragana" => "かのあしぐんよしかちょう",
            "katakana" => "カノアシグンヨシカチョウ",
            "katakana_half" => "ｶﾉｱｼｸﾞﾝﾖｼｶﾁｮｳ",
        ]);

        City::create([
            "id" => 1428,
            "prefecture_id" => 32,
            "name" => "隠岐郡海士町",
            "romaji" => "okigunamachou",
            "hiragana" => "おきぐんあまちょう",
            "katakana" => "オキグンアマチョウ",
            "katakana_half" => "ｵｷｸﾞﾝｱﾏﾁｮｳ",
        ]);

        City::create([
            "id" => 1429,
            "prefecture_id" => 32,
            "name" => "隠岐郡西ノ島町",
            "romaji" => "okigunnishinoshimachou",
            "hiragana" => "おきぐんにしのしまちょう",
            "katakana" => "オキグンニシノシマチョウ",
            "katakana_half" => "ｵｷｸﾞﾝﾆｼﾉｼﾏﾁｮｳ",
        ]);

        City::create([
            "id" => 1430,
            "prefecture_id" => 32,
            "name" => "隠岐郡知夫村",
            "romaji" => "okigunchibumura",
            "hiragana" => "おきぐんちぶむら",
            "katakana" => "オキグンチブムラ",
            "katakana_half" => "ｵｷｸﾞﾝﾁﾌﾞﾑﾗ",
        ]);

        City::create([
            "id" => 1431,
            "prefecture_id" => 32,
            "name" => "隠岐郡隠岐の島町",
            "romaji" => "okigunokinoshimachou",
            "hiragana" => "おきぐんおきのしまちょう",
            "katakana" => "オキグンオキノシマチョウ",
            "katakana_half" => "ｵｷｸﾞﾝｵｷﾉｼﾏﾁｮｳ",
        ]);

        City::create([
            "id" => 1432,
            "prefecture_id" => 33,
            "name" => "岡山市北区",
            "romaji" => "okayamashikitaku",
            "hiragana" => "おかやましきたく",
            "katakana" => "オカヤマシキタク",
            "katakana_half" => "ｵｶﾔﾏｼｷﾀｸ",
        ]);

        City::create([
            "id" => 1433,
            "prefecture_id" => 33,
            "name" => "岡山市中区",
            "romaji" => "okayamashinakaku",
            "hiragana" => "おかやましなかく",
            "katakana" => "オカヤマシナカク",
            "katakana_half" => "ｵｶﾔﾏｼﾅｶｸ",
        ]);

        City::create([
            "id" => 1434,
            "prefecture_id" => 33,
            "name" => "岡山市東区",
            "romaji" => "okayamashihigashiku",
            "hiragana" => "おかやましひがしく",
            "katakana" => "オカヤマシヒガシク",
            "katakana_half" => "ｵｶﾔﾏｼﾋｶﾞｼｸ",
        ]);

        City::create([
            "id" => 1435,
            "prefecture_id" => 33,
            "name" => "岡山市南区",
            "romaji" => "okayamashiminamiku",
            "hiragana" => "おかやましみなみく",
            "katakana" => "オカヤマシミナミク",
            "katakana_half" => "ｵｶﾔﾏｼﾐﾅﾐｸ",
        ]);

        City::create([
            "id" => 1436,
            "prefecture_id" => 33,
            "name" => "倉敷市",
            "romaji" => "kurashikishi",
            "hiragana" => "くらしきし",
            "katakana" => "クラシキシ",
            "katakana_half" => "ｸﾗｼｷｼ",
        ]);

        City::create([
            "id" => 1437,
            "prefecture_id" => 33,
            "name" => "津山市",
            "romaji" => "tsuyamashi",
            "hiragana" => "つやまし",
            "katakana" => "ツヤマシ",
            "katakana_half" => "ﾂﾔﾏｼ",
        ]);

        City::create([
            "id" => 1438,
            "prefecture_id" => 33,
            "name" => "玉野市",
            "romaji" => "tamanoshi",
            "hiragana" => "たまのし",
            "katakana" => "タマノシ",
            "katakana_half" => "ﾀﾏﾉｼ",
        ]);

        City::create([
            "id" => 1439,
            "prefecture_id" => 33,
            "name" => "笠岡市",
            "romaji" => "kasaokashi",
            "hiragana" => "かさおかし",
            "katakana" => "カサオカシ",
            "katakana_half" => "ｶｻｵｶｼ",
        ]);

        City::create([
            "id" => 1440,
            "prefecture_id" => 33,
            "name" => "井原市",
            "romaji" => "ibarashi",
            "hiragana" => "いばらし",
            "katakana" => "イバラシ",
            "katakana_half" => "ｲﾊﾞﾗｼ",
        ]);

        City::create([
            "id" => 1441,
            "prefecture_id" => 33,
            "name" => "総社市",
            "romaji" => "soujashi",
            "hiragana" => "そうじゃし",
            "katakana" => "ソウジャシ",
            "katakana_half" => "ｿｳｼﾞｬｼ",
        ]);

        City::create([
            "id" => 1442,
            "prefecture_id" => 33,
            "name" => "高梁市",
            "romaji" => "takahashishi",
            "hiragana" => "たかはしし",
            "katakana" => "タカハシシ",
            "katakana_half" => "ﾀｶﾊｼｼ",
        ]);

        City::create([
            "id" => 1443,
            "prefecture_id" => 33,
            "name" => "新見市",
            "romaji" => "niimishi",
            "hiragana" => "にいみし",
            "katakana" => "ニイミシ",
            "katakana_half" => "ﾆｲﾐｼ",
        ]);

        City::create([
            "id" => 1444,
            "prefecture_id" => 33,
            "name" => "備前市",
            "romaji" => "bizenshi",
            "hiragana" => "びぜんし",
            "katakana" => "ビゼンシ",
            "katakana_half" => "ﾋﾞｾﾞﾝｼ",
        ]);

        City::create([
            "id" => 1445,
            "prefecture_id" => 33,
            "name" => "瀬戸内市",
            "romaji" => "setouchishi",
            "hiragana" => "せとうちし",
            "katakana" => "セトウチシ",
            "katakana_half" => "ｾﾄｳﾁｼ",
        ]);

        City::create([
            "id" => 1446,
            "prefecture_id" => 33,
            "name" => "赤磐市",
            "romaji" => "akaiwashi",
            "hiragana" => "あかいわし",
            "katakana" => "アカイワシ",
            "katakana_half" => "ｱｶｲﾜｼ",
        ]);

        City::create([
            "id" => 1447,
            "prefecture_id" => 33,
            "name" => "真庭市",
            "romaji" => "maniwashi",
            "hiragana" => "まにわし",
            "katakana" => "マニワシ",
            "katakana_half" => "ﾏﾆﾜｼ",
        ]);

        City::create([
            "id" => 1448,
            "prefecture_id" => 33,
            "name" => "美作市",
            "romaji" => "mimasakashi",
            "hiragana" => "みまさかし",
            "katakana" => "ミマサカシ",
            "katakana_half" => "ﾐﾏｻｶｼ",
        ]);

        City::create([
            "id" => 1449,
            "prefecture_id" => 33,
            "name" => "浅口市",
            "romaji" => "asakuchishi",
            "hiragana" => "あさくちし",
            "katakana" => "アサクチシ",
            "katakana_half" => "ｱｻｸﾁｼ",
        ]);

        City::create([
            "id" => 1450,
            "prefecture_id" => 33,
            "name" => "和気郡和気町",
            "romaji" => "wakegunwakechou",
            "hiragana" => "わけぐんわけちょう",
            "katakana" => "ワケグンワケチョウ",
            "katakana_half" => "ﾜｹｸﾞﾝﾜｹﾁｮｳ",
        ]);

        City::create([
            "id" => 1451,
            "prefecture_id" => 33,
            "name" => "都窪郡早島町",
            "romaji" => "tsukubogunhayashimachou",
            "hiragana" => "つくぼぐんはやしまちょう",
            "katakana" => "ツクボグンハヤシマチョウ",
            "katakana_half" => "ﾂｸﾎﾞｸﾞﾝﾊﾔｼﾏﾁｮｳ",
        ]);

        City::create([
            "id" => 1452,
            "prefecture_id" => 33,
            "name" => "浅口郡里庄町",
            "romaji" => "asakuchigunsatoshouchou",
            "hiragana" => "あさくちぐんさとしょうちょう",
            "katakana" => "アサクチグンサトショウチョウ",
            "katakana_half" => "ｱｻｸﾁｸﾞﾝｻﾄｼｮｳﾁｮｳ",
        ]);

        City::create([
            "id" => 1453,
            "prefecture_id" => 33,
            "name" => "小田郡矢掛町",
            "romaji" => "odagunyakagechou",
            "hiragana" => "おだぐんやかげちょう",
            "katakana" => "オダグンヤカゲチョウ",
            "katakana_half" => "ｵﾀﾞｸﾞﾝﾔｶｹﾞﾁｮｳ",
        ]);

        City::create([
            "id" => 1454,
            "prefecture_id" => 33,
            "name" => "真庭郡新庄村",
            "romaji" => "maniwagunshinjouson",
            "hiragana" => "まにわぐんしんじょうそん",
            "katakana" => "マニワグンシンジョウソン",
            "katakana_half" => "ﾏﾆﾜｸﾞﾝｼﾝｼﾞｮｳｿﾝ",
        ]);

        City::create([
            "id" => 1455,
            "prefecture_id" => 33,
            "name" => "苫田郡鏡野町",
            "romaji" => "tomatagunkagaminochou",
            "hiragana" => "とまたぐんかがみのちょう",
            "katakana" => "トマタグンカガミノチョウ",
            "katakana_half" => "ﾄﾏﾀｸﾞﾝｶｶﾞﾐﾉﾁｮｳ",
        ]);

        City::create([
            "id" => 1456,
            "prefecture_id" => 33,
            "name" => "勝田郡勝央町",
            "romaji" => "katsutagunshououchou",
            "hiragana" => "かつたぐんしょうおうちょう",
            "katakana" => "カツタグンショウオウチョウ",
            "katakana_half" => "ｶﾂﾀｸﾞﾝｼｮｳｵｳﾁｮｳ",
        ]);

        City::create([
            "id" => 1457,
            "prefecture_id" => 33,
            "name" => "勝田郡奈義町",
            "romaji" => "katsutagunnagichou",
            "hiragana" => "かつたぐんなぎちょう",
            "katakana" => "カツタグンナギチョウ",
            "katakana_half" => "ｶﾂﾀｸﾞﾝﾅｷﾞﾁｮｳ",
        ]);

        City::create([
            "id" => 1458,
            "prefecture_id" => 33,
            "name" => "英田郡西粟倉村",
            "romaji" => "aidagunnishiawakurason",
            "hiragana" => "あいだぐんにしあわくらそん",
            "katakana" => "アイダグンニシアワクラソン",
            "katakana_half" => "ｱｲﾀﾞｸﾞﾝﾆｼｱﾜｸﾗｿﾝ",
        ]);

        City::create([
            "id" => 1459,
            "prefecture_id" => 33,
            "name" => "久米郡久米南町",
            "romaji" => "kumegunkumenanchou",
            "hiragana" => "くめぐんくめなんちょう",
            "katakana" => "クメグンクメナンチョウ",
            "katakana_half" => "ｸﾒｸﾞﾝｸﾒﾅﾝﾁｮｳ",
        ]);

        City::create([
            "id" => 1460,
            "prefecture_id" => 33,
            "name" => "久米郡美咲町",
            "romaji" => "kumegunmisakichou",
            "hiragana" => "くめぐんみさきちょう",
            "katakana" => "クメグンミサキチョウ",
            "katakana_half" => "ｸﾒｸﾞﾝﾐｻｷﾁｮｳ",
        ]);

        City::create([
            "id" => 1461,
            "prefecture_id" => 33,
            "name" => "加賀郡吉備中央町",
            "romaji" => "kagagunkibichuuouchou",
            "hiragana" => "かがぐんきびちゅうおうちょう",
            "katakana" => "カガグンキビチュウオウチョウ",
            "katakana_half" => "ｶｶﾞｸﾞﾝｷﾋﾞﾁｭｳｵｳﾁｮｳ",
        ]);

        City::create([
            "id" => 1462,
            "prefecture_id" => 34,
            "name" => "広島市中区",
            "romaji" => "hiroshimashinakaku",
            "hiragana" => "ひろしましなかく",
            "katakana" => "ヒロシマシナカク",
            "katakana_half" => "ﾋﾛｼﾏｼﾅｶｸ",
        ]);

        City::create([
            "id" => 1463,
            "prefecture_id" => 34,
            "name" => "広島市東区",
            "romaji" => "hiroshimashihigashiku",
            "hiragana" => "ひろしましひがしく",
            "katakana" => "ヒロシマシヒガシク",
            "katakana_half" => "ﾋﾛｼﾏｼﾋｶﾞｼｸ",
        ]);

        City::create([
            "id" => 1464,
            "prefecture_id" => 34,
            "name" => "広島市南区",
            "romaji" => "hiroshimashiminamiku",
            "hiragana" => "ひろしましみなみく",
            "katakana" => "ヒロシマシミナミク",
            "katakana_half" => "ﾋﾛｼﾏｼﾐﾅﾐｸ",
        ]);

        City::create([
            "id" => 1465,
            "prefecture_id" => 34,
            "name" => "広島市西区",
            "romaji" => "hiroshimashinishiku",
            "hiragana" => "ひろしましにしく",
            "katakana" => "ヒロシマシニシク",
            "katakana_half" => "ﾋﾛｼﾏｼﾆｼｸ",
        ]);

        City::create([
            "id" => 1466,
            "prefecture_id" => 34,
            "name" => "広島市安佐南区",
            "romaji" => "hiroshimashiasaminamiku",
            "hiragana" => "ひろしましあさみなみく",
            "katakana" => "ヒロシマシアサミナミク",
            "katakana_half" => "ﾋﾛｼﾏｼｱｻﾐﾅﾐｸ",
        ]);

        City::create([
            "id" => 1467,
            "prefecture_id" => 34,
            "name" => "広島市安佐北区",
            "romaji" => "hiroshimashiasakitaku",
            "hiragana" => "ひろしましあさきたく",
            "katakana" => "ヒロシマシアサキタク",
            "katakana_half" => "ﾋﾛｼﾏｼｱｻｷﾀｸ",
        ]);

        City::create([
            "id" => 1468,
            "prefecture_id" => 34,
            "name" => "広島市安芸区",
            "romaji" => "hiroshimashiakiku",
            "hiragana" => "ひろしましあきく",
            "katakana" => "ヒロシマシアキク",
            "katakana_half" => "ﾋﾛｼﾏｼｱｷｸ",
        ]);

        City::create([
            "id" => 1469,
            "prefecture_id" => 34,
            "name" => "広島市佐伯区",
            "romaji" => "hiroshimashisaekiku",
            "hiragana" => "ひろしましさえきく",
            "katakana" => "ヒロシマシサエキク",
            "katakana_half" => "ﾋﾛｼﾏｼｻｴｷｸ",
        ]);

        City::create([
            "id" => 1470,
            "prefecture_id" => 34,
            "name" => "呉市",
            "romaji" => "kureshi",
            "hiragana" => "くれし",
            "katakana" => "クレシ",
            "katakana_half" => "ｸﾚｼ",
        ]);

        City::create([
            "id" => 1471,
            "prefecture_id" => 34,
            "name" => "竹原市",
            "romaji" => "takeharashi",
            "hiragana" => "たけはらし",
            "katakana" => "タケハラシ",
            "katakana_half" => "ﾀｹﾊﾗｼ",
        ]);

        City::create([
            "id" => 1472,
            "prefecture_id" => 34,
            "name" => "三原市",
            "romaji" => "miharashi",
            "hiragana" => "みはらし",
            "katakana" => "ミハラシ",
            "katakana_half" => "ﾐﾊﾗｼ",
        ]);

        City::create([
            "id" => 1473,
            "prefecture_id" => 34,
            "name" => "尾道市",
            "romaji" => "onomichishi",
            "hiragana" => "おのみちし",
            "katakana" => "オノミチシ",
            "katakana_half" => "ｵﾉﾐﾁｼ",
        ]);

        City::create([
            "id" => 1474,
            "prefecture_id" => 34,
            "name" => "福山市",
            "romaji" => "fukuyamashi",
            "hiragana" => "ふくやまし",
            "katakana" => "フクヤマシ",
            "katakana_half" => "ﾌｸﾔﾏｼ",
        ]);

        City::create([
            "id" => 1475,
            "prefecture_id" => 34,
            "name" => "三次市",
            "romaji" => "miyoshishi",
            "hiragana" => "みよしし",
            "katakana" => "ミヨシシ",
            "katakana_half" => "ﾐﾖｼｼ",
        ]);

        City::create([
            "id" => 1476,
            "prefecture_id" => 34,
            "name" => "庄原市",
            "romaji" => "shoubarashi",
            "hiragana" => "しょうばらし",
            "katakana" => "ショウバラシ",
            "katakana_half" => "ｼｮｳﾊﾞﾗｼ",
        ]);

        City::create([
            "id" => 1477,
            "prefecture_id" => 34,
            "name" => "大竹市",
            "romaji" => "ootakeshi",
            "hiragana" => "おおたけし",
            "katakana" => "オオタケシ",
            "katakana_half" => "ｵｵﾀｹｼ",
        ]);

        City::create([
            "id" => 1478,
            "prefecture_id" => 34,
            "name" => "東広島市",
            "romaji" => "higashihiroshimashi",
            "hiragana" => "ひがしひろしまし",
            "katakana" => "ヒガシヒロシマシ",
            "katakana_half" => "ﾋｶﾞｼﾋﾛｼﾏｼ",
        ]);

        City::create([
            "id" => 1479,
            "prefecture_id" => 34,
            "name" => "廿日市市",
            "romaji" => "hatsukaichishi",
            "hiragana" => "はつかいちし",
            "katakana" => "ハツカイチシ",
            "katakana_half" => "ﾊﾂｶｲﾁｼ",
        ]);

        City::create([
            "id" => 1480,
            "prefecture_id" => 34,
            "name" => "安芸高田市",
            "romaji" => "akitakatashi",
            "hiragana" => "あきたかたし",
            "katakana" => "アキタカタシ",
            "katakana_half" => "ｱｷﾀｶﾀｼ",
        ]);

        City::create([
            "id" => 1481,
            "prefecture_id" => 34,
            "name" => "江田島市",
            "romaji" => "etajimashi",
            "hiragana" => "えたじまし",
            "katakana" => "エタジマシ",
            "katakana_half" => "ｴﾀｼﾞﾏｼ",
        ]);

        City::create([
            "id" => 1482,
            "prefecture_id" => 34,
            "name" => "安芸郡府中町",
            "romaji" => "akigunfuchuuchou",
            "hiragana" => "あきぐんふちゅうちょう",
            "katakana" => "アキグンフチュウチョウ",
            "katakana_half" => "ｱｷｸﾞﾝﾌﾁｭｳﾁｮｳ",
        ]);

        City::create([
            "id" => 1483,
            "prefecture_id" => 34,
            "name" => "安芸郡海田町",
            "romaji" => "akigunkaitachou",
            "hiragana" => "あきぐんかいたちょう",
            "katakana" => "アキグンカイタチョウ",
            "katakana_half" => "ｱｷｸﾞﾝｶｲﾀﾁｮｳ",
        ]);

        City::create([
            "id" => 1484,
            "prefecture_id" => 34,
            "name" => "安芸郡熊野町",
            "romaji" => "akigunkumanochou",
            "hiragana" => "あきぐんくまのちょう",
            "katakana" => "アキグンクマノチョウ",
            "katakana_half" => "ｱｷｸﾞﾝｸﾏﾉﾁｮｳ",
        ]);

        City::create([
            "id" => 1485,
            "prefecture_id" => 34,
            "name" => "安芸郡坂町",
            "romaji" => "akigunsakachou",
            "hiragana" => "あきぐんさかちょう",
            "katakana" => "アキグンサカチョウ",
            "katakana_half" => "ｱｷｸﾞﾝｻｶﾁｮｳ",
        ]);

        City::create([
            "id" => 1486,
            "prefecture_id" => 34,
            "name" => "山県郡安芸太田町",
            "romaji" => "yamagatagunakiootachou",
            "hiragana" => "やまがたぐんあきおおたちょう",
            "katakana" => "ヤマガタグンアキオオタチョウ",
            "katakana_half" => "ﾔﾏｶﾞﾀｸﾞﾝｱｷｵｵﾀﾁｮｳ",
        ]);

        City::create([
            "id" => 1487,
            "prefecture_id" => 34,
            "name" => "山県郡北広島町",
            "romaji" => "yamagatagunkitahiroshimachou",
            "hiragana" => "やまがたぐんきたひろしまちょう",
            "katakana" => "ヤマガタグンキタヒロシマチョウ",
            "katakana_half" => "ﾔﾏｶﾞﾀｸﾞﾝｷﾀﾋﾛｼﾏﾁｮｳ",
        ]);

        City::create([
            "id" => 1488,
            "prefecture_id" => 34,
            "name" => "豊田郡大崎上島町",
            "romaji" => "toyotagunoosakikamijimachou",
            "hiragana" => "とよたぐんおおさきかみじまちょう",
            "katakana" => "トヨタグンオオサキカミジマチョウ",
            "katakana_half" => "ﾄﾖﾀｸﾞﾝｵｵｻｷｶﾐｼﾞﾏﾁｮｳ",
        ]);

        City::create([
            "id" => 1489,
            "prefecture_id" => 34,
            "name" => "世羅郡世羅町",
            "romaji" => "seragunserachou",
            "hiragana" => "せらぐんせらちょう",
            "katakana" => "セラグンセラチョウ",
            "katakana_half" => "ｾﾗｸﾞﾝｾﾗﾁｮｳ",
        ]);

        City::create([
            "id" => 1490,
            "prefecture_id" => 34,
            "name" => "神石郡神石高原町",
            "romaji" => "jinsekigunjinsekikougenchou",
            "hiragana" => "じんせきぐんじんせきこうげんちょう",
            "katakana" => "ジンセキグンジンセキコウゲンチョウ",
            "katakana_half" => "ｼﾞﾝｾｷｸﾞﾝｼﾞﾝｾｷｺｳｹﾞﾝﾁｮｳ",
        ]);

        City::create([
            "id" => 1491,
            "prefecture_id" => 35,
            "name" => "下関市",
            "romaji" => "shimonosekishi",
            "hiragana" => "しものせきし",
            "katakana" => "シモノセキシ",
            "katakana_half" => "ｼﾓﾉｾｷｼ",
        ]);

        City::create([
            "id" => 1492,
            "prefecture_id" => 35,
            "name" => "宇部市",
            "romaji" => "ubeshi",
            "hiragana" => "うべし",
            "katakana" => "ウベシ",
            "katakana_half" => "ｳﾍﾞｼ",
        ]);

        City::create([
            "id" => 1493,
            "prefecture_id" => 35,
            "name" => "山口市",
            "romaji" => "yamaguchishi",
            "hiragana" => "やまぐちし",
            "katakana" => "ヤマグチシ",
            "katakana_half" => "ﾔﾏｸﾞﾁｼ",
        ]);

        City::create([
            "id" => 1494,
            "prefecture_id" => 35,
            "name" => "萩市",
            "romaji" => "hagishi",
            "hiragana" => "はぎし",
            "katakana" => "ハギシ",
            "katakana_half" => "ﾊｷﾞｼ",
        ]);

        City::create([
            "id" => 1495,
            "prefecture_id" => 35,
            "name" => "防府市",
            "romaji" => "houfushi",
            "hiragana" => "ほうふし",
            "katakana" => "ホウフシ",
            "katakana_half" => "ﾎｳﾌｼ",
        ]);

        City::create([
            "id" => 1496,
            "prefecture_id" => 35,
            "name" => "下松市",
            "romaji" => "kudamatsushi",
            "hiragana" => "くだまつし",
            "katakana" => "クダマツシ",
            "katakana_half" => "ｸﾀﾞﾏﾂｼ",
        ]);

        City::create([
            "id" => 1497,
            "prefecture_id" => 35,
            "name" => "岩国市",
            "romaji" => "iwakunishi",
            "hiragana" => "いわくにし",
            "katakana" => "イワクニシ",
            "katakana_half" => "ｲﾜｸﾆｼ",
        ]);

        City::create([
            "id" => 1498,
            "prefecture_id" => 35,
            "name" => "光市",
            "romaji" => "hikarishi",
            "hiragana" => "ひかりし",
            "katakana" => "ヒカリシ",
            "katakana_half" => "ﾋｶﾘｼ",
        ]);

        City::create([
            "id" => 1499,
            "prefecture_id" => 35,
            "name" => "長門市",
            "romaji" => "nagatoshi",
            "hiragana" => "ながとし",
            "katakana" => "ナガトシ",
            "katakana_half" => "ﾅｶﾞﾄｼ",
        ]);

        City::create([
            "id" => 1500,
            "prefecture_id" => 35,
            "name" => "柳井市",
            "romaji" => "yanaishi",
            "hiragana" => "やないし",
            "katakana" => "ヤナイシ",
            "katakana_half" => "ﾔﾅｲｼ",
        ]);

        City::create([
            "id" => 1501,
            "prefecture_id" => 35,
            "name" => "美祢市",
            "romaji" => "mineshi",
            "hiragana" => "みねし",
            "katakana" => "ミネシ",
            "katakana_half" => "ﾐﾈｼ",
        ]);

        City::create([
            "id" => 1502,
            "prefecture_id" => 35,
            "name" => "周南市",
            "romaji" => "shuunanshi",
            "hiragana" => "しゅうなんし",
            "katakana" => "シュウナンシ",
            "katakana_half" => "ｼｭｳﾅﾝｼ",
        ]);

        City::create([
            "id" => 1503,
            "prefecture_id" => 35,
            "name" => "山陽小野田市",
            "romaji" => "sanyouonodashi",
            "hiragana" => "さんようおのだし",
            "katakana" => "サンヨウオノダシ",
            "katakana_half" => "ｻﾝﾖｳｵﾉﾀﾞｼ",
        ]);

        City::create([
            "id" => 1504,
            "prefecture_id" => 35,
            "name" => "大島郡周防大島町",
            "romaji" => "ooshimagunsuouooshimachou",
            "hiragana" => "おおしまぐんすおうおおしまちょう",
            "katakana" => "オオシマグンスオウオオシマチョウ",
            "katakana_half" => "ｵｵｼﾏｸﾞﾝｽｵｳｵｵｼﾏﾁｮｳ",
        ]);

        City::create([
            "id" => 1505,
            "prefecture_id" => 35,
            "name" => "玖珂郡和木町",
            "romaji" => "kugagunwakichou",
            "hiragana" => "くがぐんわきちょう",
            "katakana" => "クガグンワキチョウ",
            "katakana_half" => "ｸｶﾞｸﾞﾝﾜｷﾁｮｳ",
        ]);

        City::create([
            "id" => 1506,
            "prefecture_id" => 35,
            "name" => "熊毛郡上関町",
            "romaji" => "kumagegunkaminosekichou",
            "hiragana" => "くまげぐんかみのせきちょう",
            "katakana" => "クマゲグンカミノセキチョウ",
            "katakana_half" => "ｸﾏｹﾞｸﾞﾝｶﾐﾉｾｷﾁｮｳ",
        ]);

        City::create([
            "id" => 1507,
            "prefecture_id" => 35,
            "name" => "熊毛郡田布施町",
            "romaji" => "kumageguntabusechou",
            "hiragana" => "くまげぐんたぶせちょう",
            "katakana" => "クマゲグンタブセチョウ",
            "katakana_half" => "ｸﾏｹﾞｸﾞﾝﾀﾌﾞｾﾁｮｳ",
        ]);

        City::create([
            "id" => 1508,
            "prefecture_id" => 35,
            "name" => "熊毛郡平生町",
            "romaji" => "kumagegunhiraochou",
            "hiragana" => "くまげぐんひらおちょう",
            "katakana" => "クマゲグンヒラオチョウ",
            "katakana_half" => "ｸﾏｹﾞｸﾞﾝﾋﾗｵﾁｮｳ",
        ]);

        City::create([
            "id" => 1509,
            "prefecture_id" => 35,
            "name" => "阿武郡阿武町",
            "romaji" => "abugunabuchou",
            "hiragana" => "あぶぐんあぶちょう",
            "katakana" => "アブグンアブチョウ",
            "katakana_half" => "ｱﾌﾞｸﾞﾝｱﾌﾞﾁｮｳ",
        ]);

        City::create([
            "id" => 1510,
            "prefecture_id" => 36,
            "name" => "徳島市",
            "romaji" => "tokushimashi",
            "hiragana" => "とくしまし",
            "katakana" => "トクシマシ",
            "katakana_half" => "ﾄｸｼﾏｼ",
        ]);

        City::create([
            "id" => 1511,
            "prefecture_id" => 36,
            "name" => "鳴門市",
            "romaji" => "narutoshi",
            "hiragana" => "なるとし",
            "katakana" => "ナルトシ",
            "katakana_half" => "ﾅﾙﾄｼ",
        ]);

        City::create([
            "id" => 1512,
            "prefecture_id" => 36,
            "name" => "小松島市",
            "romaji" => "komatsushimashi",
            "hiragana" => "こまつしまし",
            "katakana" => "コマツシマシ",
            "katakana_half" => "ｺﾏﾂｼﾏｼ",
        ]);

        City::create([
            "id" => 1513,
            "prefecture_id" => 36,
            "name" => "阿南市",
            "romaji" => "ananshi",
            "hiragana" => "あなんし",
            "katakana" => "アナンシ",
            "katakana_half" => "ｱﾅﾝｼ",
        ]);

        City::create([
            "id" => 1514,
            "prefecture_id" => 36,
            "name" => "吉野川市",
            "romaji" => "yoshinogawashi",
            "hiragana" => "よしのがわし",
            "katakana" => "ヨシノガワシ",
            "katakana_half" => "ﾖｼﾉｶﾞﾜｼ",
        ]);

        City::create([
            "id" => 1515,
            "prefecture_id" => 36,
            "name" => "阿波市",
            "romaji" => "awashi",
            "hiragana" => "あわし",
            "katakana" => "アワシ",
            "katakana_half" => "ｱﾜｼ",
        ]);

        City::create([
            "id" => 1516,
            "prefecture_id" => 36,
            "name" => "美馬市",
            "romaji" => "mimashi",
            "hiragana" => "みまし",
            "katakana" => "ミマシ",
            "katakana_half" => "ﾐﾏｼ",
        ]);

        City::create([
            "id" => 1517,
            "prefecture_id" => 36,
            "name" => "三好市",
            "romaji" => "miyoshishi",
            "hiragana" => "みよしし",
            "katakana" => "ミヨシシ",
            "katakana_half" => "ﾐﾖｼｼ",
        ]);

        City::create([
            "id" => 1518,
            "prefecture_id" => 36,
            "name" => "勝浦郡勝浦町",
            "romaji" => "katsuuragunkatsuurachou",
            "hiragana" => "かつうらぐんかつうらちょう",
            "katakana" => "カツウラグンカツウラチョウ",
            "katakana_half" => "ｶﾂｳﾗｸﾞﾝｶﾂｳﾗﾁｮｳ",
        ]);

        City::create([
            "id" => 1519,
            "prefecture_id" => 36,
            "name" => "勝浦郡上勝町",
            "romaji" => "katsuuragunkamikatsuchou",
            "hiragana" => "かつうらぐんかみかつちょう",
            "katakana" => "カツウラグンカミカツチョウ",
            "katakana_half" => "ｶﾂｳﾗｸﾞﾝｶﾐｶﾂﾁｮｳ",
        ]);

        City::create([
            "id" => 1520,
            "prefecture_id" => 36,
            "name" => "名東郡佐那河内村",
            "romaji" => "myoudougunsanagouchison",
            "hiragana" => "みょうどうぐんさなごうちそん",
            "katakana" => "ミョウドウグンサナゴウチソン",
            "katakana_half" => "ﾐｮｳﾄﾞｳｸﾞﾝｻﾅｺﾞｳﾁｿﾝ",
        ]);

        City::create([
            "id" => 1521,
            "prefecture_id" => 36,
            "name" => "名西郡石井町",
            "romaji" => "myouzaigunishiichou",
            "hiragana" => "みょうざいぐんいしいちょう",
            "katakana" => "ミョウザイグンイシイチョウ",
            "katakana_half" => "ﾐｮｳｻﾞｲｸﾞﾝｲｼｲﾁｮｳ",
        ]);

        City::create([
            "id" => 1522,
            "prefecture_id" => 36,
            "name" => "名西郡神山町",
            "romaji" => "myouzaigunkamiyamachou",
            "hiragana" => "みょうざいぐんかみやまちょう",
            "katakana" => "ミョウザイグンカミヤマチョウ",
            "katakana_half" => "ﾐｮｳｻﾞｲｸﾞﾝｶﾐﾔﾏﾁｮｳ",
        ]);

        City::create([
            "id" => 1523,
            "prefecture_id" => 36,
            "name" => "那賀郡那賀町",
            "romaji" => "nakagunnakachou",
            "hiragana" => "なかぐんなかちょう",
            "katakana" => "ナカグンナカチョウ",
            "katakana_half" => "ﾅｶｸﾞﾝﾅｶﾁｮｳ",
        ]);

        City::create([
            "id" => 1524,
            "prefecture_id" => 36,
            "name" => "海部郡牟岐町",
            "romaji" => "kaifugunmugichou",
            "hiragana" => "かいふぐんむぎちょう",
            "katakana" => "カイフグンムギチョウ",
            "katakana_half" => "ｶｲﾌｸﾞﾝﾑｷﾞﾁｮｳ",
        ]);

        City::create([
            "id" => 1525,
            "prefecture_id" => 36,
            "name" => "海部郡美波町",
            "romaji" => "kaifugunminamichou",
            "hiragana" => "かいふぐんみなみちょう",
            "katakana" => "カイフグンミナミチョウ",
            "katakana_half" => "ｶｲﾌｸﾞﾝﾐﾅﾐﾁｮｳ",
        ]);

        City::create([
            "id" => 1526,
            "prefecture_id" => 36,
            "name" => "海部郡海陽町",
            "romaji" => "kaifugunkaiyouchou",
            "hiragana" => "かいふぐんかいようちょう",
            "katakana" => "カイフグンカイヨウチョウ",
            "katakana_half" => "ｶｲﾌｸﾞﾝｶｲﾖｳﾁｮｳ",
        ]);

        City::create([
            "id" => 1527,
            "prefecture_id" => 36,
            "name" => "板野郡松茂町",
            "romaji" => "itanogunmatsushigechou",
            "hiragana" => "いたのぐんまつしげちょう",
            "katakana" => "イタノグンマツシゲチョウ",
            "katakana_half" => "ｲﾀﾉｸﾞﾝﾏﾂｼｹﾞﾁｮｳ",
        ]);

        City::create([
            "id" => 1528,
            "prefecture_id" => 36,
            "name" => "板野郡北島町",
            "romaji" => "itanogunkitajimachou",
            "hiragana" => "いたのぐんきたじまちょう",
            "katakana" => "イタノグンキタジマチョウ",
            "katakana_half" => "ｲﾀﾉｸﾞﾝｷﾀｼﾞﾏﾁｮｳ",
        ]);

        City::create([
            "id" => 1529,
            "prefecture_id" => 36,
            "name" => "板野郡藍住町",
            "romaji" => "itanogunaizumichou",
            "hiragana" => "いたのぐんあいずみちょう",
            "katakana" => "イタノグンアイズミチョウ",
            "katakana_half" => "ｲﾀﾉｸﾞﾝｱｲｽﾞﾐﾁｮｳ",
        ]);

        City::create([
            "id" => 1530,
            "prefecture_id" => 36,
            "name" => "板野郡板野町",
            "romaji" => "itanogunitanochou",
            "hiragana" => "いたのぐんいたのちょう",
            "katakana" => "イタノグンイタノチョウ",
            "katakana_half" => "ｲﾀﾉｸﾞﾝｲﾀﾉﾁｮｳ",
        ]);

        City::create([
            "id" => 1531,
            "prefecture_id" => 36,
            "name" => "板野郡上板町",
            "romaji" => "itanogunkamiitachou",
            "hiragana" => "いたのぐんかみいたちょう",
            "katakana" => "イタノグンカミイタチョウ",
            "katakana_half" => "ｲﾀﾉｸﾞﾝｶﾐｲﾀﾁｮｳ",
        ]);

        City::create([
            "id" => 1532,
            "prefecture_id" => 36,
            "name" => "美馬郡つるぎ町",
            "romaji" => "mimaguntsurugichou",
            "hiragana" => "みまぐんつるぎちょう",
            "katakana" => "ミマグンツルギチョウ",
            "katakana_half" => "ﾐﾏｸﾞﾝﾂﾙｷﾞﾁｮｳ",
        ]);

        City::create([
            "id" => 1533,
            "prefecture_id" => 36,
            "name" => "三好郡東みよし町",
            "romaji" => "miyoshigunhigashimiyoshichou",
            "hiragana" => "みよしぐんひがしみよしちょう",
            "katakana" => "ミヨシグンヒガシミヨシチョウ",
            "katakana_half" => "ﾐﾖｼｸﾞﾝﾋｶﾞｼﾐﾖｼﾁｮｳ",
        ]);

        City::create([
            "id" => 1534,
            "prefecture_id" => 37,
            "name" => "高松市",
            "romaji" => "takamatsushi",
            "hiragana" => "たかまつし",
            "katakana" => "タカマツシ",
            "katakana_half" => "ﾀｶﾏﾂｼ",
        ]);

        City::create([
            "id" => 1535,
            "prefecture_id" => 37,
            "name" => "丸亀市",
            "romaji" => "marugameshi",
            "hiragana" => "まるがめし",
            "katakana" => "マルガメシ",
            "katakana_half" => "ﾏﾙｶﾞﾒｼ",
        ]);

        City::create([
            "id" => 1536,
            "prefecture_id" => 37,
            "name" => "坂出市",
            "romaji" => "sakaideshi",
            "hiragana" => "さかいでし",
            "katakana" => "サカイデシ",
            "katakana_half" => "ｻｶｲﾃﾞｼ",
        ]);

        City::create([
            "id" => 1537,
            "prefecture_id" => 37,
            "name" => "善通寺市",
            "romaji" => "zentsuujishi",
            "hiragana" => "ぜんつうじし",
            "katakana" => "ゼンツウジシ",
            "katakana_half" => "ｾﾞﾝﾂｳｼﾞｼ",
        ]);

        City::create([
            "id" => 1538,
            "prefecture_id" => 37,
            "name" => "観音寺市",
            "romaji" => "kanonjishi",
            "hiragana" => "かんおんじし",
            "katakana" => "カンオンジシ",
            "katakana_half" => "ｶﾝｵﾝｼﾞｼ",
        ]);

        City::create([
            "id" => 1539,
            "prefecture_id" => 37,
            "name" => "さぬき市",
            "romaji" => "sanukishi",
            "hiragana" => "さぬきし",
            "katakana" => "サヌキシ",
            "katakana_half" => "ｻﾇｷｼ",
        ]);

        City::create([
            "id" => 1540,
            "prefecture_id" => 37,
            "name" => "東かがわ市",
            "romaji" => "higashikagawashi",
            "hiragana" => "ひがしかがわし",
            "katakana" => "ヒガシカガワシ",
            "katakana_half" => "ﾋｶﾞｼｶｶﾞﾜｼ",
        ]);

        City::create([
            "id" => 1541,
            "prefecture_id" => 37,
            "name" => "三豊市",
            "romaji" => "mitoyoshi",
            "hiragana" => "みとよし",
            "katakana" => "ミトヨシ",
            "katakana_half" => "ﾐﾄﾖｼ",
        ]);

        City::create([
            "id" => 1542,
            "prefecture_id" => 37,
            "name" => "小豆郡土庄町",
            "romaji" => "shouzuguntonoshouchou",
            "hiragana" => "しょうずぐんとのしょうちょう",
            "katakana" => "ショウズグントノショウチョウ",
            "katakana_half" => "ｼｮｳｽﾞｸﾞﾝﾄﾉｼｮｳﾁｮｳ",
        ]);

        City::create([
            "id" => 1543,
            "prefecture_id" => 37,
            "name" => "小豆郡小豆島町",
            "romaji" => "shouzugunshoudoshimachou",
            "hiragana" => "しょうずぐんしょうどしまちょう",
            "katakana" => "ショウズグンショウドシマチョウ",
            "katakana_half" => "ｼｮｳｽﾞｸﾞﾝｼｮｳﾄﾞｼﾏﾁｮｳ",
        ]);

        City::create([
            "id" => 1544,
            "prefecture_id" => 37,
            "name" => "木田郡三木町",
            "romaji" => "kitagunmikichou",
            "hiragana" => "きたぐんみきちょう",
            "katakana" => "キタグンミキチョウ",
            "katakana_half" => "ｷﾀｸﾞﾝﾐｷﾁｮｳ",
        ]);

        City::create([
            "id" => 1545,
            "prefecture_id" => 37,
            "name" => "香川郡直島町",
            "romaji" => "kagawagunnaoshimachou",
            "hiragana" => "かがわぐんなおしまちょう",
            "katakana" => "カガワグンナオシマチョウ",
            "katakana_half" => "ｶｶﾞﾜｸﾞﾝﾅｵｼﾏﾁｮｳ",
        ]);

        City::create([
            "id" => 1546,
            "prefecture_id" => 37,
            "name" => "綾歌郡宇多津町",
            "romaji" => "ayautagunutazuchou",
            "hiragana" => "あやうたぐんうたづちょう",
            "katakana" => "アヤウタグンウタヅチョウ",
            "katakana_half" => "ｱﾔｳﾀｸﾞﾝｳﾀﾂﾞﾁｮｳ",
        ]);

        City::create([
            "id" => 1547,
            "prefecture_id" => 37,
            "name" => "綾歌郡綾川町",
            "romaji" => "ayautagunayagawachou",
            "hiragana" => "あやうたぐんあやがわちょう",
            "katakana" => "アヤウタグンアヤガワチョウ",
            "katakana_half" => "ｱﾔｳﾀｸﾞﾝｱﾔｶﾞﾜﾁｮｳ",
        ]);

        City::create([
            "id" => 1548,
            "prefecture_id" => 37,
            "name" => "仲多度郡琴平町",
            "romaji" => "nakatadogunkotohirachou",
            "hiragana" => "なかたどぐんことひらちょう",
            "katakana" => "ナカタドグンコトヒラチョウ",
            "katakana_half" => "ﾅｶﾀﾄﾞｸﾞﾝｺﾄﾋﾗﾁｮｳ",
        ]);

        City::create([
            "id" => 1549,
            "prefecture_id" => 37,
            "name" => "仲多度郡多度津町",
            "romaji" => "nakatadoguntadotsuchou",
            "hiragana" => "なかたどぐんたどつちょう",
            "katakana" => "ナカタドグンタドツチョウ",
            "katakana_half" => "ﾅｶﾀﾄﾞｸﾞﾝﾀﾄﾞﾂﾁｮｳ",
        ]);

        City::create([
            "id" => 1550,
            "prefecture_id" => 37,
            "name" => "仲多度郡まんのう町",
            "romaji" => "nakatadogunmannouchou",
            "hiragana" => "なかたどぐんまんのうちょう",
            "katakana" => "ナカタドグンマンノウチョウ",
            "katakana_half" => "ﾅｶﾀﾄﾞｸﾞﾝﾏﾝﾉｳﾁｮｳ",
        ]);

        City::create([
            "id" => 1551,
            "prefecture_id" => 38,
            "name" => "松山市",
            "romaji" => "matsuyamashi",
            "hiragana" => "まつやまし",
            "katakana" => "マツヤマシ",
            "katakana_half" => "ﾏﾂﾔﾏｼ",
        ]);

        City::create([
            "id" => 1552,
            "prefecture_id" => 38,
            "name" => "今治市",
            "romaji" => "imabarishi",
            "hiragana" => "いまばりし",
            "katakana" => "イマバリシ",
            "katakana_half" => "ｲﾏﾊﾞﾘｼ",
        ]);

        City::create([
            "id" => 1553,
            "prefecture_id" => 38,
            "name" => "宇和島市",
            "romaji" => "uwajimashi",
            "hiragana" => "うわじまし",
            "katakana" => "ウワジマシ",
            "katakana_half" => "ｳﾜｼﾞﾏｼ",
        ]);

        City::create([
            "id" => 1554,
            "prefecture_id" => 38,
            "name" => "八幡浜市",
            "romaji" => "yawatahamashi",
            "hiragana" => "やわたはまし",
            "katakana" => "ヤワタハマシ",
            "katakana_half" => "ﾔﾜﾀﾊﾏｼ",
        ]);

        City::create([
            "id" => 1555,
            "prefecture_id" => 38,
            "name" => "新居浜市",
            "romaji" => "niihamashi",
            "hiragana" => "にいはまし",
            "katakana" => "ニイハマシ",
            "katakana_half" => "ﾆｲﾊﾏｼ",
        ]);

        City::create([
            "id" => 1556,
            "prefecture_id" => 38,
            "name" => "西条市",
            "romaji" => "saijoushi",
            "hiragana" => "さいじょうし",
            "katakana" => "サイジョウシ",
            "katakana_half" => "ｻｲｼﾞｮｳｼ",
        ]);

        City::create([
            "id" => 1557,
            "prefecture_id" => 38,
            "name" => "大洲市",
            "romaji" => "oozushi",
            "hiragana" => "おおずし",
            "katakana" => "オオズシ",
            "katakana_half" => "ｵｵｽﾞｼ",
        ]);

        City::create([
            "id" => 1558,
            "prefecture_id" => 38,
            "name" => "伊予市",
            "romaji" => "iyoshi",
            "hiragana" => "いよし",
            "katakana" => "イヨシ",
            "katakana_half" => "ｲﾖｼ",
        ]);

        City::create([
            "id" => 1559,
            "prefecture_id" => 38,
            "name" => "四国中央市",
            "romaji" => "shikokuchuuoushi",
            "hiragana" => "しこくちゅうおうし",
            "katakana" => "シコクチュウオウシ",
            "katakana_half" => "ｼｺｸﾁｭｳｵｳｼ",
        ]);

        City::create([
            "id" => 1560,
            "prefecture_id" => 38,
            "name" => "西予市",
            "romaji" => "seiyoshi",
            "hiragana" => "せいよし",
            "katakana" => "セイヨシ",
            "katakana_half" => "ｾｲﾖｼ",
        ]);

        City::create([
            "id" => 1561,
            "prefecture_id" => 38,
            "name" => "東温市",
            "romaji" => "touonshi",
            "hiragana" => "とうおんし",
            "katakana" => "トウオンシ",
            "katakana_half" => "ﾄｳｵﾝｼ",
        ]);

        City::create([
            "id" => 1562,
            "prefecture_id" => 38,
            "name" => "越智郡上島町",
            "romaji" => "ochigunkamijimachou",
            "hiragana" => "おちぐんかみじまちょう",
            "katakana" => "オチグンカミジマチョウ",
            "katakana_half" => "ｵﾁｸﾞﾝｶﾐｼﾞﾏﾁｮｳ",
        ]);

        City::create([
            "id" => 1563,
            "prefecture_id" => 38,
            "name" => "上浮穴郡久万高原町",
            "romaji" => "kamiukenagunkumakougenchou",
            "hiragana" => "かみうけなぐんくまこうげんちょう",
            "katakana" => "カミウケナグンクマコウゲンチョウ",
            "katakana_half" => "ｶﾐｳｹﾅｸﾞﾝｸﾏｺｳｹﾞﾝﾁｮｳ",
        ]);

        City::create([
            "id" => 1564,
            "prefecture_id" => 38,
            "name" => "伊予郡松前町",
            "romaji" => "iyogunmasakichou",
            "hiragana" => "いよぐんまさきちょう",
            "katakana" => "イヨグンマサキチョウ",
            "katakana_half" => "ｲﾖｸﾞﾝﾏｻｷﾁｮｳ",
        ]);

        City::create([
            "id" => 1565,
            "prefecture_id" => 38,
            "name" => "伊予郡砥部町",
            "romaji" => "iyoguntobechou",
            "hiragana" => "いよぐんとべちょう",
            "katakana" => "イヨグントベチョウ",
            "katakana_half" => "ｲﾖｸﾞﾝﾄﾍﾞﾁｮｳ",
        ]);

        City::create([
            "id" => 1566,
            "prefecture_id" => 38,
            "name" => "喜多郡内子町",
            "romaji" => "kitagunuchikochou",
            "hiragana" => "きたぐんうちこちょう",
            "katakana" => "キタグンウチコチョウ",
            "katakana_half" => "ｷﾀｸﾞﾝｳﾁｺﾁｮｳ",
        ]);

        City::create([
            "id" => 1567,
            "prefecture_id" => 38,
            "name" => "西宇和郡伊方町",
            "romaji" => "nishiuwagunikatachou",
            "hiragana" => "にしうわぐんいかたちょう",
            "katakana" => "ニシウワグンイカタチョウ",
            "katakana_half" => "ﾆｼｳﾜｸﾞﾝｲｶﾀﾁｮｳ",
        ]);

        City::create([
            "id" => 1568,
            "prefecture_id" => 38,
            "name" => "北宇和郡松野町",
            "romaji" => "kitauwagunmatsunochou",
            "hiragana" => "きたうわぐんまつのちょう",
            "katakana" => "キタウワグンマツノチョウ",
            "katakana_half" => "ｷﾀｳﾜｸﾞﾝﾏﾂﾉﾁｮｳ",
        ]);

        City::create([
            "id" => 1569,
            "prefecture_id" => 38,
            "name" => "北宇和郡鬼北町",
            "romaji" => "kitauwagunkihokuchou",
            "hiragana" => "きたうわぐんきほくちょう",
            "katakana" => "キタウワグンキホクチョウ",
            "katakana_half" => "ｷﾀｳﾜｸﾞﾝｷﾎｸﾁｮｳ",
        ]);

        City::create([
            "id" => 1570,
            "prefecture_id" => 38,
            "name" => "南宇和郡愛南町",
            "romaji" => "minamiuwagunainanchou",
            "hiragana" => "みなみうわぐんあいなんちょう",
            "katakana" => "ミナミウワグンアイナンチョウ",
            "katakana_half" => "ﾐﾅﾐｳﾜｸﾞﾝｱｲﾅﾝﾁｮｳ",
        ]);

        City::create([
            "id" => 1571,
            "prefecture_id" => 39,
            "name" => "高知市",
            "romaji" => "kouchishi",
            "hiragana" => "こうちし",
            "katakana" => "コウチシ",
            "katakana_half" => "ｺｳﾁｼ",
        ]);

        City::create([
            "id" => 1572,
            "prefecture_id" => 39,
            "name" => "室戸市",
            "romaji" => "murotoshi",
            "hiragana" => "むろとし",
            "katakana" => "ムロトシ",
            "katakana_half" => "ﾑﾛﾄｼ",
        ]);

        City::create([
            "id" => 1573,
            "prefecture_id" => 39,
            "name" => "安芸市",
            "romaji" => "akishi",
            "hiragana" => "あきし",
            "katakana" => "アキシ",
            "katakana_half" => "ｱｷｼ",
        ]);

        City::create([
            "id" => 1574,
            "prefecture_id" => 39,
            "name" => "南国市",
            "romaji" => "nankokushi",
            "hiragana" => "なんこくし",
            "katakana" => "ナンコクシ",
            "katakana_half" => "ﾅﾝｺｸｼ",
        ]);

        City::create([
            "id" => 1575,
            "prefecture_id" => 39,
            "name" => "土佐市",
            "romaji" => "tosashi",
            "hiragana" => "とさし",
            "katakana" => "トサシ",
            "katakana_half" => "ﾄｻｼ",
        ]);

        City::create([
            "id" => 1576,
            "prefecture_id" => 39,
            "name" => "須崎市",
            "romaji" => "susakishi",
            "hiragana" => "すさきし",
            "katakana" => "スサキシ",
            "katakana_half" => "ｽｻｷｼ",
        ]);

        City::create([
            "id" => 1577,
            "prefecture_id" => 39,
            "name" => "宿毛市",
            "romaji" => "sukumoshi",
            "hiragana" => "すくもし",
            "katakana" => "スクモシ",
            "katakana_half" => "ｽｸﾓｼ",
        ]);

        City::create([
            "id" => 1578,
            "prefecture_id" => 39,
            "name" => "土佐清水市",
            "romaji" => "tosashimizushi",
            "hiragana" => "とさしみずし",
            "katakana" => "トサシミズシ",
            "katakana_half" => "ﾄｻｼﾐｽﾞｼ",
        ]);

        City::create([
            "id" => 1579,
            "prefecture_id" => 39,
            "name" => "四万十市",
            "romaji" => "shimantoshi",
            "hiragana" => "しまんとし",
            "katakana" => "シマントシ",
            "katakana_half" => "ｼﾏﾝﾄｼ",
        ]);

        City::create([
            "id" => 1580,
            "prefecture_id" => 39,
            "name" => "香南市",
            "romaji" => "kounanshi",
            "hiragana" => "こうなんし",
            "katakana" => "コウナンシ",
            "katakana_half" => "ｺｳﾅﾝｼ",
        ]);

        City::create([
            "id" => 1581,
            "prefecture_id" => 39,
            "name" => "香美市",
            "romaji" => "kamishi",
            "hiragana" => "かみし",
            "katakana" => "カミシ",
            "katakana_half" => "ｶﾐｼ",
        ]);

        City::create([
            "id" => 1582,
            "prefecture_id" => 39,
            "name" => "安芸郡東洋町",
            "romaji" => "akiguntouyouchou",
            "hiragana" => "あきぐんとうようちょう",
            "katakana" => "アキグントウヨウチョウ",
            "katakana_half" => "ｱｷｸﾞﾝﾄｳﾖｳﾁｮｳ",
        ]);

        City::create([
            "id" => 1583,
            "prefecture_id" => 39,
            "name" => "安芸郡奈半利町",
            "romaji" => "akigunnaharichou",
            "hiragana" => "あきぐんなはりちょう",
            "katakana" => "アキグンナハリチョウ",
            "katakana_half" => "ｱｷｸﾞﾝﾅﾊﾘﾁｮｳ",
        ]);

        City::create([
            "id" => 1584,
            "prefecture_id" => 39,
            "name" => "安芸郡田野町",
            "romaji" => "akiguntanochou",
            "hiragana" => "あきぐんたのちょう",
            "katakana" => "アキグンタノチョウ",
            "katakana_half" => "ｱｷｸﾞﾝﾀﾉﾁｮｳ",
        ]);

        City::create([
            "id" => 1585,
            "prefecture_id" => 39,
            "name" => "安芸郡安田町",
            "romaji" => "akigunyasudachou",
            "hiragana" => "あきぐんやすだちょう",
            "katakana" => "アキグンヤスダチョウ",
            "katakana_half" => "ｱｷｸﾞﾝﾔｽﾀﾞﾁｮｳ",
        ]);

        City::create([
            "id" => 1586,
            "prefecture_id" => 39,
            "name" => "安芸郡北川村",
            "romaji" => "akigunkitagawamura",
            "hiragana" => "あきぐんきたがわむら",
            "katakana" => "アキグンキタガワムラ",
            "katakana_half" => "ｱｷｸﾞﾝｷﾀｶﾞﾜﾑﾗ",
        ]);

        City::create([
            "id" => 1587,
            "prefecture_id" => 39,
            "name" => "安芸郡馬路村",
            "romaji" => "akigunumajimura",
            "hiragana" => "あきぐんうまじむら",
            "katakana" => "アキグンウマジムラ",
            "katakana_half" => "ｱｷｸﾞﾝｳﾏｼﾞﾑﾗ",
        ]);

        City::create([
            "id" => 1588,
            "prefecture_id" => 39,
            "name" => "安芸郡芸西村",
            "romaji" => "akigungeiseimura",
            "hiragana" => "あきぐんげいせいむら",
            "katakana" => "アキグンゲイセイムラ",
            "katakana_half" => "ｱｷｸﾞﾝｹﾞｲｾｲﾑﾗ",
        ]);

        City::create([
            "id" => 1589,
            "prefecture_id" => 39,
            "name" => "長岡郡本山町",
            "romaji" => "nagaokagunmotoyamachou",
            "hiragana" => "ながおかぐんもとやまちょう",
            "katakana" => "ナガオカグンモトヤマチョウ",
            "katakana_half" => "ﾅｶﾞｵｶｸﾞﾝﾓﾄﾔﾏﾁｮｳ",
        ]);

        City::create([
            "id" => 1590,
            "prefecture_id" => 39,
            "name" => "長岡郡大豊町",
            "romaji" => "nagaokagunootoyochou",
            "hiragana" => "ながおかぐんおおとよちょう",
            "katakana" => "ナガオカグンオオトヨチョウ",
            "katakana_half" => "ﾅｶﾞｵｶｸﾞﾝｵｵﾄﾖﾁｮｳ",
        ]);

        City::create([
            "id" => 1591,
            "prefecture_id" => 39,
            "name" => "土佐郡土佐町",
            "romaji" => "tosaguntosachou",
            "hiragana" => "とさぐんとさちょう",
            "katakana" => "トサグントサチョウ",
            "katakana_half" => "ﾄｻｸﾞﾝﾄｻﾁｮｳ",
        ]);

        City::create([
            "id" => 1592,
            "prefecture_id" => 39,
            "name" => "土佐郡大川村",
            "romaji" => "tosagunookawamura",
            "hiragana" => "とさぐんおおかわむら",
            "katakana" => "トサグンオオカワムラ",
            "katakana_half" => "ﾄｻｸﾞﾝｵｵｶﾜﾑﾗ",
        ]);

        City::create([
            "id" => 1593,
            "prefecture_id" => 39,
            "name" => "吾川郡いの町",
            "romaji" => "agawaguninochou",
            "hiragana" => "あがわぐんいのちょう",
            "katakana" => "アガワグンイノチョウ",
            "katakana_half" => "ｱｶﾞﾜｸﾞﾝｲﾉﾁｮｳ",
        ]);

        City::create([
            "id" => 1594,
            "prefecture_id" => 39,
            "name" => "吾川郡仁淀川町",
            "romaji" => "agawagunniyodogawachou",
            "hiragana" => "あがわぐんによどがわちょう",
            "katakana" => "アガワグンニヨドガワチョウ",
            "katakana_half" => "ｱｶﾞﾜｸﾞﾝﾆﾖﾄﾞｶﾞﾜﾁｮｳ",
        ]);

        City::create([
            "id" => 1595,
            "prefecture_id" => 39,
            "name" => "高岡郡中土佐町",
            "romaji" => "takaokagunnakatosachou",
            "hiragana" => "たかおかぐんなかとさちょう",
            "katakana" => "タカオカグンナカトサチョウ",
            "katakana_half" => "ﾀｶｵｶｸﾞﾝﾅｶﾄｻﾁｮｳ",
        ]);

        City::create([
            "id" => 1596,
            "prefecture_id" => 39,
            "name" => "高岡郡佐川町",
            "romaji" => "takaokagunsakawachou",
            "hiragana" => "たかおかぐんさかわちょう",
            "katakana" => "タカオカグンサカワチョウ",
            "katakana_half" => "ﾀｶｵｶｸﾞﾝｻｶﾜﾁｮｳ",
        ]);

        City::create([
            "id" => 1597,
            "prefecture_id" => 39,
            "name" => "高岡郡越知町",
            "romaji" => "takaokagunochichou",
            "hiragana" => "たかおかぐんおちちょう",
            "katakana" => "タカオカグンオチチョウ",
            "katakana_half" => "ﾀｶｵｶｸﾞﾝｵﾁﾁｮｳ",
        ]);

        City::create([
            "id" => 1598,
            "prefecture_id" => 39,
            "name" => "高岡郡檮原町",
            "romaji" => "takaokagunyusuharachou",
            "hiragana" => "たかおかぐんゆすはらちょう",
            "katakana" => "タカオカグンユスハラチョウ",
            "katakana_half" => "ﾀｶｵｶｸﾞﾝﾕｽﾊﾗﾁｮｳ",
        ]);

        City::create([
            "id" => 1599,
            "prefecture_id" => 39,
            "name" => "高岡郡日高村",
            "romaji" => "takaokagunhidakamura",
            "hiragana" => "たかおかぐんひだかむら",
            "katakana" => "タカオカグンヒダカムラ",
            "katakana_half" => "ﾀｶｵｶｸﾞﾝﾋﾀﾞｶﾑﾗ",
        ]);

        City::create([
            "id" => 1600,
            "prefecture_id" => 39,
            "name" => "高岡郡津野町",
            "romaji" => "takaokaguntsunochou",
            "hiragana" => "たかおかぐんつのちょう",
            "katakana" => "タカオカグンツノチョウ",
            "katakana_half" => "ﾀｶｵｶｸﾞﾝﾂﾉﾁｮｳ",
        ]);

        City::create([
            "id" => 1601,
            "prefecture_id" => 39,
            "name" => "高岡郡四万十町",
            "romaji" => "takaokagunshimantochou",
            "hiragana" => "たかおかぐんしまんとちょう",
            "katakana" => "タカオカグンシマントチョウ",
            "katakana_half" => "ﾀｶｵｶｸﾞﾝｼﾏﾝﾄﾁｮｳ",
        ]);

        City::create([
            "id" => 1602,
            "prefecture_id" => 39,
            "name" => "幡多郡大月町",
            "romaji" => "hatagunootsukichou",
            "hiragana" => "はたぐんおおつきちょう",
            "katakana" => "ハタグンオオツキチョウ",
            "katakana_half" => "ﾊﾀｸﾞﾝｵｵﾂｷﾁｮｳ",
        ]);

        City::create([
            "id" => 1603,
            "prefecture_id" => 39,
            "name" => "幡多郡三原村",
            "romaji" => "hatagunmiharamura",
            "hiragana" => "はたぐんみはらむら",
            "katakana" => "ハタグンミハラムラ",
            "katakana_half" => "ﾊﾀｸﾞﾝﾐﾊﾗﾑﾗ",
        ]);

        City::create([
            "id" => 1604,
            "prefecture_id" => 39,
            "name" => "幡多郡黒潮町",
            "romaji" => "hatagunkuroshiochou",
            "hiragana" => "はたぐんくろしおちょう",
            "katakana" => "ハタグンクロシオチョウ",
            "katakana_half" => "ﾊﾀｸﾞﾝｸﾛｼｵﾁｮｳ",
        ]);

        City::create([
            "id" => 1605,
            "prefecture_id" => 40,
            "name" => "北九州市門司区",
            "romaji" => "kitakyuushuushimojiku",
            "hiragana" => "きたきゅうしゅうしもじく",
            "katakana" => "キタキュウシュウシモジク",
            "katakana_half" => "ｷﾀｷｭｳｼｭｳｼﾓｼﾞｸ",
        ]);

        City::create([
            "id" => 1606,
            "prefecture_id" => 40,
            "name" => "北九州市若松区",
            "romaji" => "kitakyuushuushiwakamatsuku",
            "hiragana" => "きたきゅうしゅうしわかまつく",
            "katakana" => "キタキュウシュウシワカマツク",
            "katakana_half" => "ｷﾀｷｭｳｼｭｳｼﾜｶﾏﾂｸ",
        ]);

        City::create([
            "id" => 1607,
            "prefecture_id" => 40,
            "name" => "北九州市戸畑区",
            "romaji" => "kitakyuushuushitobataku",
            "hiragana" => "きたきゅうしゅうしとばたく",
            "katakana" => "キタキュウシュウシトバタク",
            "katakana_half" => "ｷﾀｷｭｳｼｭｳｼﾄﾊﾞﾀｸ",
        ]);

        City::create([
            "id" => 1608,
            "prefecture_id" => 40,
            "name" => "北九州市小倉北区",
            "romaji" => "kitakyuushuushikokurakitaku",
            "hiragana" => "きたきゅうしゅうしこくらきたく",
            "katakana" => "キタキュウシュウシコクラキタク",
            "katakana_half" => "ｷﾀｷｭｳｼｭｳｼｺｸﾗｷﾀｸ",
        ]);

        City::create([
            "id" => 1609,
            "prefecture_id" => 40,
            "name" => "北九州市小倉南区",
            "romaji" => "kitakyuushuushikokuraminamiku",
            "hiragana" => "きたきゅうしゅうしこくらみなみく",
            "katakana" => "キタキュウシュウシコクラミナミク",
            "katakana_half" => "ｷﾀｷｭｳｼｭｳｼｺｸﾗﾐﾅﾐｸ",
        ]);

        City::create([
            "id" => 1610,
            "prefecture_id" => 40,
            "name" => "北九州市八幡東区",
            "romaji" => "kitakyuushuushiyahatahigashiku",
            "hiragana" => "きたきゅうしゅうしやはたひがしく",
            "katakana" => "キタキュウシュウシヤハタヒガシク",
            "katakana_half" => "ｷﾀｷｭｳｼｭｳｼﾔﾊﾀﾋｶﾞｼｸ",
        ]);

        City::create([
            "id" => 1611,
            "prefecture_id" => 40,
            "name" => "北九州市八幡西区",
            "romaji" => "kitakyuushuushiyahatanishiku",
            "hiragana" => "きたきゅうしゅうしやはたにしく",
            "katakana" => "キタキュウシュウシヤハタニシク",
            "katakana_half" => "ｷﾀｷｭｳｼｭｳｼﾔﾊﾀﾆｼｸ",
        ]);

        City::create([
            "id" => 1612,
            "prefecture_id" => 40,
            "name" => "福岡市東区",
            "romaji" => "fukuokashihigashiku",
            "hiragana" => "ふくおかしひがしく",
            "katakana" => "フクオカシヒガシク",
            "katakana_half" => "ﾌｸｵｶｼﾋｶﾞｼｸ",
        ]);

        City::create([
            "id" => 1613,
            "prefecture_id" => 40,
            "name" => "福岡市博多区",
            "romaji" => "fukuokashihakataku",
            "hiragana" => "ふくおかしはかたく",
            "katakana" => "フクオカシハカタク",
            "katakana_half" => "ﾌｸｵｶｼﾊｶﾀｸ",
        ]);

        City::create([
            "id" => 1614,
            "prefecture_id" => 40,
            "name" => "福岡市中央区",
            "romaji" => "fukuokashichuuouku",
            "hiragana" => "ふくおかしちゅうおうく",
            "katakana" => "フクオカシチュウオウク",
            "katakana_half" => "ﾌｸｵｶｼﾁｭｳｵｳｸ",
        ]);

        City::create([
            "id" => 1615,
            "prefecture_id" => 40,
            "name" => "福岡市南区",
            "romaji" => "fukuokashiminamiku",
            "hiragana" => "ふくおかしみなみく",
            "katakana" => "フクオカシミナミク",
            "katakana_half" => "ﾌｸｵｶｼﾐﾅﾐｸ",
        ]);

        City::create([
            "id" => 1616,
            "prefecture_id" => 40,
            "name" => "福岡市西区",
            "romaji" => "fukuokashinishiku",
            "hiragana" => "ふくおかしにしく",
            "katakana" => "フクオカシニシク",
            "katakana_half" => "ﾌｸｵｶｼﾆｼｸ",
        ]);

        City::create([
            "id" => 1617,
            "prefecture_id" => 40,
            "name" => "福岡市城南区",
            "romaji" => "fukuokashijounanku",
            "hiragana" => "ふくおかしじょうなんく",
            "katakana" => "フクオカシジョウナンク",
            "katakana_half" => "ﾌｸｵｶｼｼﾞｮｳﾅﾝｸ",
        ]);

        City::create([
            "id" => 1618,
            "prefecture_id" => 40,
            "name" => "福岡市早良区",
            "romaji" => "fukuokashisawaraku",
            "hiragana" => "ふくおかしさわらく",
            "katakana" => "フクオカシサワラク",
            "katakana_half" => "ﾌｸｵｶｼｻﾜﾗｸ",
        ]);

        City::create([
            "id" => 1619,
            "prefecture_id" => 40,
            "name" => "大牟田市",
            "romaji" => "oomutashi",
            "hiragana" => "おおむたし",
            "katakana" => "オオムタシ",
            "katakana_half" => "ｵｵﾑﾀｼ",
        ]);

        City::create([
            "id" => 1620,
            "prefecture_id" => 40,
            "name" => "久留米市",
            "romaji" => "kurumeshi",
            "hiragana" => "くるめし",
            "katakana" => "クルメシ",
            "katakana_half" => "ｸﾙﾒｼ",
        ]);

        City::create([
            "id" => 1621,
            "prefecture_id" => 40,
            "name" => "直方市",
            "romaji" => "noogatashi",
            "hiragana" => "のおがたし",
            "katakana" => "ノオガタシ",
            "katakana_half" => "ﾉｵｶﾞﾀｼ",
        ]);

        City::create([
            "id" => 1622,
            "prefecture_id" => 40,
            "name" => "飯塚市",
            "romaji" => "iizukashi",
            "hiragana" => "いいづかし",
            "katakana" => "イイヅカシ",
            "katakana_half" => "ｲｲﾂﾞｶｼ",
        ]);

        City::create([
            "id" => 1623,
            "prefecture_id" => 40,
            "name" => "田川市",
            "romaji" => "tagawashi",
            "hiragana" => "たがわし",
            "katakana" => "タガワシ",
            "katakana_half" => "ﾀｶﾞﾜｼ",
        ]);

        City::create([
            "id" => 1624,
            "prefecture_id" => 40,
            "name" => "柳川市",
            "romaji" => "yanagawashi",
            "hiragana" => "やながわし",
            "katakana" => "ヤナガワシ",
            "katakana_half" => "ﾔﾅｶﾞﾜｼ",
        ]);

        City::create([
            "id" => 1625,
            "prefecture_id" => 40,
            "name" => "八女市",
            "romaji" => "yameshi",
            "hiragana" => "やめし",
            "katakana" => "ヤメシ",
            "katakana_half" => "ﾔﾒｼ",
        ]);

        City::create([
            "id" => 1626,
            "prefecture_id" => 40,
            "name" => "筑後市",
            "romaji" => "chikugoshi",
            "hiragana" => "ちくごし",
            "katakana" => "チクゴシ",
            "katakana_half" => "ﾁｸｺﾞｼ",
        ]);

        City::create([
            "id" => 1627,
            "prefecture_id" => 40,
            "name" => "大川市",
            "romaji" => "ookawashi",
            "hiragana" => "おおかわし",
            "katakana" => "オオカワシ",
            "katakana_half" => "ｵｵｶﾜｼ",
        ]);

        City::create([
            "id" => 1628,
            "prefecture_id" => 40,
            "name" => "行橋市",
            "romaji" => "yukuhashishi",
            "hiragana" => "ゆくはしし",
            "katakana" => "ユクハシシ",
            "katakana_half" => "ﾕｸﾊｼｼ",
        ]);

        City::create([
            "id" => 1629,
            "prefecture_id" => 40,
            "name" => "豊前市",
            "romaji" => "buzenshi",
            "hiragana" => "ぶぜんし",
            "katakana" => "ブゼンシ",
            "katakana_half" => "ﾌﾞｾﾞﾝｼ",
        ]);

        City::create([
            "id" => 1630,
            "prefecture_id" => 40,
            "name" => "中間市",
            "romaji" => "nakamashi",
            "hiragana" => "なかまし",
            "katakana" => "ナカマシ",
            "katakana_half" => "ﾅｶﾏｼ",
        ]);

        City::create([
            "id" => 1631,
            "prefecture_id" => 40,
            "name" => "小郡市",
            "romaji" => "ogoorishi",
            "hiragana" => "おごおりし",
            "katakana" => "オゴオリシ",
            "katakana_half" => "ｵｺﾞｵﾘｼ",
        ]);

        City::create([
            "id" => 1632,
            "prefecture_id" => 40,
            "name" => "筑紫野市",
            "romaji" => "chikushinoshi",
            "hiragana" => "ちくしのし",
            "katakana" => "チクシノシ",
            "katakana_half" => "ﾁｸｼﾉｼ",
        ]);

        City::create([
            "id" => 1633,
            "prefecture_id" => 40,
            "name" => "春日市",
            "romaji" => "kasugashi",
            "hiragana" => "かすがし",
            "katakana" => "カスガシ",
            "katakana_half" => "ｶｽｶﾞｼ",
        ]);

        City::create([
            "id" => 1634,
            "prefecture_id" => 40,
            "name" => "大野城市",
            "romaji" => "oonojoushi",
            "hiragana" => "おおのじょうし",
            "katakana" => "オオノジョウシ",
            "katakana_half" => "ｵｵﾉｼﾞｮｳｼ",
        ]);

        City::create([
            "id" => 1635,
            "prefecture_id" => 40,
            "name" => "宗像市",
            "romaji" => "munakatashi",
            "hiragana" => "むなかたし",
            "katakana" => "ムナカタシ",
            "katakana_half" => "ﾑﾅｶﾀｼ",
        ]);

        City::create([
            "id" => 1636,
            "prefecture_id" => 40,
            "name" => "太宰府市",
            "romaji" => "dazaifushi",
            "hiragana" => "だざいふし",
            "katakana" => "ダザイフシ",
            "katakana_half" => "ﾀﾞｻﾞｲﾌｼ",
        ]);

        City::create([
            "id" => 1637,
            "prefecture_id" => 40,
            "name" => "古賀市",
            "romaji" => "kogashi",
            "hiragana" => "こがし",
            "katakana" => "コガシ",
            "katakana_half" => "ｺｶﾞｼ",
        ]);

        City::create([
            "id" => 1638,
            "prefecture_id" => 40,
            "name" => "福津市",
            "romaji" => "fukutsushi",
            "hiragana" => "ふくつし",
            "katakana" => "フクツシ",
            "katakana_half" => "ﾌｸﾂｼ",
        ]);

        City::create([
            "id" => 1639,
            "prefecture_id" => 40,
            "name" => "うきは市",
            "romaji" => "ukihashi",
            "hiragana" => "うきはし",
            "katakana" => "ウキハシ",
            "katakana_half" => "ｳｷﾊｼ",
        ]);

        City::create([
            "id" => 1640,
            "prefecture_id" => 40,
            "name" => "宮若市",
            "romaji" => "miyawakashi",
            "hiragana" => "みやわかし",
            "katakana" => "ミヤワカシ",
            "katakana_half" => "ﾐﾔﾜｶｼ",
        ]);

        City::create([
            "id" => 1641,
            "prefecture_id" => 40,
            "name" => "嘉麻市",
            "romaji" => "kamashi",
            "hiragana" => "かまし",
            "katakana" => "カマシ",
            "katakana_half" => "ｶﾏｼ",
        ]);

        City::create([
            "id" => 1642,
            "prefecture_id" => 40,
            "name" => "朝倉市",
            "romaji" => "asakurashi",
            "hiragana" => "あさくらし",
            "katakana" => "アサクラシ",
            "katakana_half" => "ｱｻｸﾗｼ",
        ]);

        City::create([
            "id" => 1643,
            "prefecture_id" => 40,
            "name" => "みやま市",
            "romaji" => "miyamashi",
            "hiragana" => "みやまし",
            "katakana" => "ミヤマシ",
            "katakana_half" => "ﾐﾔﾏｼ",
        ]);

        City::create([
            "id" => 1644,
            "prefecture_id" => 40,
            "name" => "糸島市",
            "romaji" => "itoshimashi",
            "hiragana" => "いとしまし",
            "katakana" => "イトシマシ",
            "katakana_half" => "ｲﾄｼﾏｼ",
        ]);

        City::create([
            "id" => 1645,
            "prefecture_id" => 40,
            "name" => "那珂川市",
            "romaji" => "nakagawashi",
            "hiragana" => "なかがわし",
            "katakana" => "ナカガワシ",
            "katakana_half" => "ﾅｶｶﾞﾜｼ",
        ]);

        City::create([
            "id" => 1646,
            "prefecture_id" => 40,
            "name" => "糟屋郡宇美町",
            "romaji" => "kasuyagunumimachi",
            "hiragana" => "かすやぐんうみまち",
            "katakana" => "カスヤグンウミマチ",
            "katakana_half" => "ｶｽﾔｸﾞﾝｳﾐﾏﾁ",
        ]);

        City::create([
            "id" => 1647,
            "prefecture_id" => 40,
            "name" => "糟屋郡篠栗町",
            "romaji" => "kasuyagunsasagurimachi",
            "hiragana" => "かすやぐんささぐりまち",
            "katakana" => "カスヤグンササグリマチ",
            "katakana_half" => "ｶｽﾔｸﾞﾝｻｻｸﾞﾘﾏﾁ",
        ]);

        City::create([
            "id" => 1648,
            "prefecture_id" => 40,
            "name" => "糟屋郡志免町",
            "romaji" => "kasuyagunshimemachi",
            "hiragana" => "かすやぐんしめまち",
            "katakana" => "カスヤグンシメマチ",
            "katakana_half" => "ｶｽﾔｸﾞﾝｼﾒﾏﾁ",
        ]);

        City::create([
            "id" => 1649,
            "prefecture_id" => 40,
            "name" => "糟屋郡須惠町",
            "romaji" => "kasuyagunsuemachi",
            "hiragana" => "かすやぐんすえまち",
            "katakana" => "カスヤグンスエマチ",
            "katakana_half" => "ｶｽﾔｸﾞﾝｽｴﾏﾁ",
        ]);

        City::create([
            "id" => 1650,
            "prefecture_id" => 40,
            "name" => "糟屋郡新宮町",
            "romaji" => "kasuyagunshinguumachi",
            "hiragana" => "かすやぐんしんぐうまち",
            "katakana" => "カスヤグンシングウマチ",
            "katakana_half" => "ｶｽﾔｸﾞﾝｼﾝｸﾞｳﾏﾁ",
        ]);

        City::create([
            "id" => 1651,
            "prefecture_id" => 40,
            "name" => "糟屋郡久山町",
            "romaji" => "kasuyagunhisayamamachi",
            "hiragana" => "かすやぐんひさやままち",
            "katakana" => "カスヤグンヒサヤママチ",
            "katakana_half" => "ｶｽﾔｸﾞﾝﾋｻﾔﾏﾏﾁ",
        ]);

        City::create([
            "id" => 1652,
            "prefecture_id" => 40,
            "name" => "糟屋郡粕屋町",
            "romaji" => "kasuyagunkasuyamachi",
            "hiragana" => "かすやぐんかすやまち",
            "katakana" => "カスヤグンカスヤマチ",
            "katakana_half" => "ｶｽﾔｸﾞﾝｶｽﾔﾏﾁ",
        ]);

        City::create([
            "id" => 1653,
            "prefecture_id" => 40,
            "name" => "遠賀郡芦屋町",
            "romaji" => "ongagunashiyamachi",
            "hiragana" => "おんがぐんあしやまち",
            "katakana" => "オンガグンアシヤマチ",
            "katakana_half" => "ｵﾝｶﾞｸﾞﾝｱｼﾔﾏﾁ",
        ]);

        City::create([
            "id" => 1654,
            "prefecture_id" => 40,
            "name" => "遠賀郡水巻町",
            "romaji" => "ongagunmizumakimachi",
            "hiragana" => "おんがぐんみずまきまち",
            "katakana" => "オンガグンミズマキマチ",
            "katakana_half" => "ｵﾝｶﾞｸﾞﾝﾐｽﾞﾏｷﾏﾁ",
        ]);

        City::create([
            "id" => 1655,
            "prefecture_id" => 40,
            "name" => "遠賀郡岡垣町",
            "romaji" => "ongagunokagakimachi",
            "hiragana" => "おんがぐんおかがきまち",
            "katakana" => "オンガグンオカガキマチ",
            "katakana_half" => "ｵﾝｶﾞｸﾞﾝｵｶｶﾞｷﾏﾁ",
        ]);

        City::create([
            "id" => 1656,
            "prefecture_id" => 40,
            "name" => "遠賀郡遠賀町",
            "romaji" => "ongagunongachou",
            "hiragana" => "おんがぐんおんがちょう",
            "katakana" => "オンガグンオンガチョウ",
            "katakana_half" => "ｵﾝｶﾞｸﾞﾝｵﾝｶﾞﾁｮｳ",
        ]);

        City::create([
            "id" => 1657,
            "prefecture_id" => 40,
            "name" => "鞍手郡小竹町",
            "romaji" => "kurategunkotakemachi",
            "hiragana" => "くらてぐんこたけまち",
            "katakana" => "クラテグンコタケマチ",
            "katakana_half" => "ｸﾗﾃｸﾞﾝｺﾀｹﾏﾁ",
        ]);

        City::create([
            "id" => 1658,
            "prefecture_id" => 40,
            "name" => "鞍手郡鞍手町",
            "romaji" => "kurategunkuratemachi",
            "hiragana" => "くらてぐんくらてまち",
            "katakana" => "クラテグンクラテマチ",
            "katakana_half" => "ｸﾗﾃｸﾞﾝｸﾗﾃﾏﾁ",
        ]);

        City::create([
            "id" => 1659,
            "prefecture_id" => 40,
            "name" => "嘉穂郡桂川町",
            "romaji" => "kahogunkeisenmachi",
            "hiragana" => "かほぐんけいせんまち",
            "katakana" => "カホグンケイセンマチ",
            "katakana_half" => "ｶﾎｸﾞﾝｹｲｾﾝﾏﾁ",
        ]);

        City::create([
            "id" => 1660,
            "prefecture_id" => 40,
            "name" => "朝倉郡筑前町",
            "romaji" => "asakuragunchikuzenmachi",
            "hiragana" => "あさくらぐんちくぜんまち",
            "katakana" => "アサクラグンチクゼンマチ",
            "katakana_half" => "ｱｻｸﾗｸﾞﾝﾁｸｾﾞﾝﾏﾁ",
        ]);

        City::create([
            "id" => 1661,
            "prefecture_id" => 40,
            "name" => "朝倉郡東峰村",
            "romaji" => "asakuraguntouhoumura",
            "hiragana" => "あさくらぐんとうほうむら",
            "katakana" => "アサクラグントウホウムラ",
            "katakana_half" => "ｱｻｸﾗｸﾞﾝﾄｳﾎｳﾑﾗ",
        ]);

        City::create([
            "id" => 1662,
            "prefecture_id" => 40,
            "name" => "三井郡大刀洗町",
            "romaji" => "miiguntachiaraimachi",
            "hiragana" => "みいぐんたちあらいまち",
            "katakana" => "ミイグンタチアライマチ",
            "katakana_half" => "ﾐｲｸﾞﾝﾀﾁｱﾗｲﾏﾁ",
        ]);

        City::create([
            "id" => 1663,
            "prefecture_id" => 40,
            "name" => "三潴郡大木町",
            "romaji" => "mizumagunookimachi",
            "hiragana" => "みずまぐんおおきまち",
            "katakana" => "ミズマグンオオキマチ",
            "katakana_half" => "ﾐｽﾞﾏｸﾞﾝｵｵｷﾏﾁ",
        ]);

        City::create([
            "id" => 1664,
            "prefecture_id" => 40,
            "name" => "八女郡広川町",
            "romaji" => "yamegunhirokawamachi",
            "hiragana" => "やめぐんひろかわまち",
            "katakana" => "ヤメグンヒロカワマチ",
            "katakana_half" => "ﾔﾒｸﾞﾝﾋﾛｶﾜﾏﾁ",
        ]);

        City::create([
            "id" => 1665,
            "prefecture_id" => 40,
            "name" => "田川郡香春町",
            "romaji" => "tagawagunkawaramachi",
            "hiragana" => "たがわぐんかわらまち",
            "katakana" => "タガワグンカワラマチ",
            "katakana_half" => "ﾀｶﾞﾜｸﾞﾝｶﾜﾗﾏﾁ",
        ]);

        City::create([
            "id" => 1666,
            "prefecture_id" => 40,
            "name" => "田川郡添田町",
            "romaji" => "tagawagunsoedamachi",
            "hiragana" => "たがわぐんそえだまち",
            "katakana" => "タガワグンソエダマチ",
            "katakana_half" => "ﾀｶﾞﾜｸﾞﾝｿｴﾀﾞﾏﾁ",
        ]);

        City::create([
            "id" => 1667,
            "prefecture_id" => 40,
            "name" => "田川郡糸田町",
            "romaji" => "tagawagunitodamachi",
            "hiragana" => "たがわぐんいとだまち",
            "katakana" => "タガワグンイトダマチ",
            "katakana_half" => "ﾀｶﾞﾜｸﾞﾝｲﾄﾀﾞﾏﾁ",
        ]);

        City::create([
            "id" => 1668,
            "prefecture_id" => 40,
            "name" => "田川郡川崎町",
            "romaji" => "tagawagunkawasakimachi",
            "hiragana" => "たがわぐんかわさきまち",
            "katakana" => "タガワグンカワサキマチ",
            "katakana_half" => "ﾀｶﾞﾜｸﾞﾝｶﾜｻｷﾏﾁ",
        ]);

        City::create([
            "id" => 1669,
            "prefecture_id" => 40,
            "name" => "田川郡大任町",
            "romaji" => "tagawagunootoumachi",
            "hiragana" => "たがわぐんおおとうまち",
            "katakana" => "タガワグンオオトウマチ",
            "katakana_half" => "ﾀｶﾞﾜｸﾞﾝｵｵﾄｳﾏﾁ",
        ]);

        City::create([
            "id" => 1670,
            "prefecture_id" => 40,
            "name" => "田川郡赤村",
            "romaji" => "tagawagunakamura",
            "hiragana" => "たがわぐんあかむら",
            "katakana" => "タガワグンアカムラ",
            "katakana_half" => "ﾀｶﾞﾜｸﾞﾝｱｶﾑﾗ",
        ]);

        City::create([
            "id" => 1671,
            "prefecture_id" => 40,
            "name" => "田川郡福智町",
            "romaji" => "tagawagunfukuchimachi",
            "hiragana" => "たがわぐんふくちまち",
            "katakana" => "タガワグンフクチマチ",
            "katakana_half" => "ﾀｶﾞﾜｸﾞﾝﾌｸﾁﾏﾁ",
        ]);

        City::create([
            "id" => 1672,
            "prefecture_id" => 40,
            "name" => "京都郡苅田町",
            "romaji" => "miyakogunkandamachi",
            "hiragana" => "みやこぐんかんだまち",
            "katakana" => "ミヤコグンカンダマチ",
            "katakana_half" => "ﾐﾔｺｸﾞﾝｶﾝﾀﾞﾏﾁ",
        ]);

        City::create([
            "id" => 1673,
            "prefecture_id" => 40,
            "name" => "京都郡みやこ町",
            "romaji" => "miyakogunmiyakomachi",
            "hiragana" => "みやこぐんみやこまち",
            "katakana" => "ミヤコグンミヤコマチ",
            "katakana_half" => "ﾐﾔｺｸﾞﾝﾐﾔｺﾏﾁ",
        ]);

        City::create([
            "id" => 1674,
            "prefecture_id" => 40,
            "name" => "築上郡吉富町",
            "romaji" => "chikujougunyoshitomimachi",
            "hiragana" => "ちくじょうぐんよしとみまち",
            "katakana" => "チクジョウグンヨシトミマチ",
            "katakana_half" => "ﾁｸｼﾞｮｳｸﾞﾝﾖｼﾄﾐﾏﾁ",
        ]);

        City::create([
            "id" => 1675,
            "prefecture_id" => 40,
            "name" => "築上郡上毛町",
            "romaji" => "chikujougunkougemachi",
            "hiragana" => "ちくじょうぐんこうげまち",
            "katakana" => "チクジョウグンコウゲマチ",
            "katakana_half" => "ﾁｸｼﾞｮｳｸﾞﾝｺｳｹﾞﾏﾁ",
        ]);

        City::create([
            "id" => 1676,
            "prefecture_id" => 40,
            "name" => "築上郡築上町",
            "romaji" => "chikujougunchikujoumachi",
            "hiragana" => "ちくじょうぐんちくじょうまち",
            "katakana" => "チクジョウグンチクジョウマチ",
            "katakana_half" => "ﾁｸｼﾞｮｳｸﾞﾝﾁｸｼﾞｮｳﾏﾁ",
        ]);

        City::create([
            "id" => 1677,
            "prefecture_id" => 41,
            "name" => "佐賀市",
            "romaji" => "sagashi",
            "hiragana" => "さがし",
            "katakana" => "サガシ",
            "katakana_half" => "ｻｶﾞｼ",
        ]);

        City::create([
            "id" => 1678,
            "prefecture_id" => 41,
            "name" => "唐津市",
            "romaji" => "karatsushi",
            "hiragana" => "からつし",
            "katakana" => "カラツシ",
            "katakana_half" => "ｶﾗﾂｼ",
        ]);

        City::create([
            "id" => 1679,
            "prefecture_id" => 41,
            "name" => "鳥栖市",
            "romaji" => "tosushi",
            "hiragana" => "とすし",
            "katakana" => "トスシ",
            "katakana_half" => "ﾄｽｼ",
        ]);

        City::create([
            "id" => 1680,
            "prefecture_id" => 41,
            "name" => "多久市",
            "romaji" => "takushi",
            "hiragana" => "たくし",
            "katakana" => "タクシ",
            "katakana_half" => "ﾀｸｼ",
        ]);

        City::create([
            "id" => 1681,
            "prefecture_id" => 41,
            "name" => "伊万里市",
            "romaji" => "imarishi",
            "hiragana" => "いまりし",
            "katakana" => "イマリシ",
            "katakana_half" => "ｲﾏﾘｼ",
        ]);

        City::create([
            "id" => 1682,
            "prefecture_id" => 41,
            "name" => "武雄市",
            "romaji" => "takeoshi",
            "hiragana" => "たけおし",
            "katakana" => "タケオシ",
            "katakana_half" => "ﾀｹｵｼ",
        ]);

        City::create([
            "id" => 1683,
            "prefecture_id" => 41,
            "name" => "鹿島市",
            "romaji" => "kashimashi",
            "hiragana" => "かしまし",
            "katakana" => "カシマシ",
            "katakana_half" => "ｶｼﾏｼ",
        ]);

        City::create([
            "id" => 1684,
            "prefecture_id" => 41,
            "name" => "小城市",
            "romaji" => "ogishi",
            "hiragana" => "おぎし",
            "katakana" => "オギシ",
            "katakana_half" => "ｵｷﾞｼ",
        ]);

        City::create([
            "id" => 1685,
            "prefecture_id" => 41,
            "name" => "嬉野市",
            "romaji" => "ureshinoshi",
            "hiragana" => "うれしのし",
            "katakana" => "ウレシノシ",
            "katakana_half" => "ｳﾚｼﾉｼ",
        ]);

        City::create([
            "id" => 1686,
            "prefecture_id" => 41,
            "name" => "神埼市",
            "romaji" => "kanzakishi",
            "hiragana" => "かんざきし",
            "katakana" => "カンザキシ",
            "katakana_half" => "ｶﾝｻﾞｷｼ",
        ]);

        City::create([
            "id" => 1687,
            "prefecture_id" => 41,
            "name" => "神埼郡吉野ヶ里町",
            "romaji" => "kanzakigunyoshinogarichou",
            "hiragana" => "かんざきぐんよしのがりちょう",
            "katakana" => "カンザキグンヨシノガリチョウ",
            "katakana_half" => "ｶﾝｻﾞｷｸﾞﾝﾖｼﾉｶﾞﾘﾁｮｳ",
        ]);

        City::create([
            "id" => 1688,
            "prefecture_id" => 41,
            "name" => "三養基郡基山町",
            "romaji" => "miyakigunkiyamachou",
            "hiragana" => "みやきぐんきやまちょう",
            "katakana" => "ミヤキグンキヤマチョウ",
            "katakana_half" => "ﾐﾔｷｸﾞﾝｷﾔﾏﾁｮｳ",
        ]);

        City::create([
            "id" => 1689,
            "prefecture_id" => 41,
            "name" => "三養基郡上峰町",
            "romaji" => "miyakigunkamiminechou",
            "hiragana" => "みやきぐんかみみねちょう",
            "katakana" => "ミヤキグンカミミネチョウ",
            "katakana_half" => "ﾐﾔｷｸﾞﾝｶﾐﾐﾈﾁｮｳ",
        ]);

        City::create([
            "id" => 1690,
            "prefecture_id" => 41,
            "name" => "三養基郡みやき町",
            "romaji" => "miyakigunmiyakichou",
            "hiragana" => "みやきぐんみやきちょう",
            "katakana" => "ミヤキグンミヤキチョウ",
            "katakana_half" => "ﾐﾔｷｸﾞﾝﾐﾔｷﾁｮｳ",
        ]);

        City::create([
            "id" => 1691,
            "prefecture_id" => 41,
            "name" => "東松浦郡玄海町",
            "romaji" => "higashimatsuuragungenkaichou",
            "hiragana" => "ひがしまつうらぐんげんかいちょう",
            "katakana" => "ヒガシマツウラグンゲンカイチョウ",
            "katakana_half" => "ﾋｶﾞｼﾏﾂｳﾗｸﾞﾝｹﾞﾝｶｲﾁｮｳ",
        ]);

        City::create([
            "id" => 1692,
            "prefecture_id" => 41,
            "name" => "西松浦郡有田町",
            "romaji" => "nishimatsuuragunaritachou",
            "hiragana" => "にしまつうらぐんありたちょう",
            "katakana" => "ニシマツウラグンアリタチョウ",
            "katakana_half" => "ﾆｼﾏﾂｳﾗｸﾞﾝｱﾘﾀﾁｮｳ",
        ]);

        City::create([
            "id" => 1693,
            "prefecture_id" => 41,
            "name" => "杵島郡大町町",
            "romaji" => "kishimagunoomachichou",
            "hiragana" => "きしまぐんおおまちちょう",
            "katakana" => "キシマグンオオマチチョウ",
            "katakana_half" => "ｷｼﾏｸﾞﾝｵｵﾏﾁﾁｮｳ",
        ]);

        City::create([
            "id" => 1694,
            "prefecture_id" => 41,
            "name" => "杵島郡江北町",
            "romaji" => "kishimagunkouhokumachi",
            "hiragana" => "きしまぐんこうほくまち",
            "katakana" => "キシマグンコウホクマチ",
            "katakana_half" => "ｷｼﾏｸﾞﾝｺｳﾎｸﾏﾁ",
        ]);

        City::create([
            "id" => 1695,
            "prefecture_id" => 41,
            "name" => "杵島郡白石町",
            "romaji" => "kishimagunshiroishichou",
            "hiragana" => "きしまぐんしろいしちょう",
            "katakana" => "キシマグンシロイシチョウ",
            "katakana_half" => "ｷｼﾏｸﾞﾝｼﾛｲｼﾁｮｳ",
        ]);

        City::create([
            "id" => 1696,
            "prefecture_id" => 41,
            "name" => "藤津郡太良町",
            "romaji" => "fujitsuguntarachou",
            "hiragana" => "ふじつぐんたらちょう",
            "katakana" => "フジツグンタラチョウ",
            "katakana_half" => "ﾌｼﾞﾂｸﾞﾝﾀﾗﾁｮｳ",
        ]);

        City::create([
            "id" => 1697,
            "prefecture_id" => 42,
            "name" => "長崎市",
            "romaji" => "nagasakishi",
            "hiragana" => "ながさきし",
            "katakana" => "ナガサキシ",
            "katakana_half" => "ﾅｶﾞｻｷｼ",
        ]);

        City::create([
            "id" => 1698,
            "prefecture_id" => 42,
            "name" => "佐世保市",
            "romaji" => "saseboshi",
            "hiragana" => "させぼし",
            "katakana" => "サセボシ",
            "katakana_half" => "ｻｾﾎﾞｼ",
        ]);

        City::create([
            "id" => 1699,
            "prefecture_id" => 42,
            "name" => "島原市",
            "romaji" => "shimabarashi",
            "hiragana" => "しまばらし",
            "katakana" => "シマバラシ",
            "katakana_half" => "ｼﾏﾊﾞﾗｼ",
        ]);

        City::create([
            "id" => 1700,
            "prefecture_id" => 42,
            "name" => "諫早市",
            "romaji" => "isahayashi",
            "hiragana" => "いさはやし",
            "katakana" => "イサハヤシ",
            "katakana_half" => "ｲｻﾊﾔｼ",
        ]);

        City::create([
            "id" => 1701,
            "prefecture_id" => 42,
            "name" => "大村市",
            "romaji" => "oomurashi",
            "hiragana" => "おおむらし",
            "katakana" => "オオムラシ",
            "katakana_half" => "ｵｵﾑﾗｼ",
        ]);

        City::create([
            "id" => 1702,
            "prefecture_id" => 42,
            "name" => "平戸市",
            "romaji" => "hiradoshi",
            "hiragana" => "ひらどし",
            "katakana" => "ヒラドシ",
            "katakana_half" => "ﾋﾗﾄﾞｼ",
        ]);

        City::create([
            "id" => 1703,
            "prefecture_id" => 42,
            "name" => "松浦市",
            "romaji" => "matsuurashi",
            "hiragana" => "まつうらし",
            "katakana" => "マツウラシ",
            "katakana_half" => "ﾏﾂｳﾗｼ",
        ]);

        City::create([
            "id" => 1704,
            "prefecture_id" => 42,
            "name" => "対馬市",
            "romaji" => "tsushimashi",
            "hiragana" => "つしまし",
            "katakana" => "ツシマシ",
            "katakana_half" => "ﾂｼﾏｼ",
        ]);

        City::create([
            "id" => 1705,
            "prefecture_id" => 42,
            "name" => "壱岐市",
            "romaji" => "ikishi",
            "hiragana" => "いきし",
            "katakana" => "イキシ",
            "katakana_half" => "ｲｷｼ",
        ]);

        City::create([
            "id" => 1706,
            "prefecture_id" => 42,
            "name" => "五島市",
            "romaji" => "gotoushi",
            "hiragana" => "ごとうし",
            "katakana" => "ゴトウシ",
            "katakana_half" => "ｺﾞﾄｳｼ",
        ]);

        City::create([
            "id" => 1707,
            "prefecture_id" => 42,
            "name" => "西海市",
            "romaji" => "saikaishi",
            "hiragana" => "さいかいし",
            "katakana" => "サイカイシ",
            "katakana_half" => "ｻｲｶｲｼ",
        ]);

        City::create([
            "id" => 1708,
            "prefecture_id" => 42,
            "name" => "雲仙市",
            "romaji" => "unzenshi",
            "hiragana" => "うんぜんし",
            "katakana" => "ウンゼンシ",
            "katakana_half" => "ｳﾝｾﾞﾝｼ",
        ]);

        City::create([
            "id" => 1709,
            "prefecture_id" => 42,
            "name" => "南島原市",
            "romaji" => "minamishimabarashi",
            "hiragana" => "みなみしまばらし",
            "katakana" => "ミナミシマバラシ",
            "katakana_half" => "ﾐﾅﾐｼﾏﾊﾞﾗｼ",
        ]);

        City::create([
            "id" => 1710,
            "prefecture_id" => 42,
            "name" => "西彼杵郡長与町",
            "romaji" => "nishisonogigunnagayochou",
            "hiragana" => "にしそのぎぐんながよちょう",
            "katakana" => "ニシソノギグンナガヨチョウ",
            "katakana_half" => "ﾆｼｿﾉｷﾞｸﾞﾝﾅｶﾞﾖﾁｮｳ",
        ]);

        City::create([
            "id" => 1711,
            "prefecture_id" => 42,
            "name" => "西彼杵郡時津町",
            "romaji" => "nishisonogiguntogitsuchou",
            "hiragana" => "にしそのぎぐんとぎつちょう",
            "katakana" => "ニシソノギグントギツチョウ",
            "katakana_half" => "ﾆｼｿﾉｷﾞｸﾞﾝﾄｷﾞﾂﾁｮｳ",
        ]);

        City::create([
            "id" => 1712,
            "prefecture_id" => 42,
            "name" => "東彼杵郡東彼杵町",
            "romaji" => "higashisonogigunhigashisonogichou",
            "hiragana" => "ひがしそのぎぐんひがしそのぎちょう",
            "katakana" => "ヒガシソノギグンヒガシソノギチョウ",
            "katakana_half" => "ﾋｶﾞｼｿﾉｷﾞｸﾞﾝﾋｶﾞｼｿﾉｷﾞﾁｮｳ",
        ]);

        City::create([
            "id" => 1713,
            "prefecture_id" => 42,
            "name" => "東彼杵郡川棚町",
            "romaji" => "higashisonogigunkawatanachou",
            "hiragana" => "ひがしそのぎぐんかわたなちょう",
            "katakana" => "ヒガシソノギグンカワタナチョウ",
            "katakana_half" => "ﾋｶﾞｼｿﾉｷﾞｸﾞﾝｶﾜﾀﾅﾁｮｳ",
        ]);

        City::create([
            "id" => 1714,
            "prefecture_id" => 42,
            "name" => "東彼杵郡波佐見町",
            "romaji" => "higashisonogigunhasamichou",
            "hiragana" => "ひがしそのぎぐんはさみちょう",
            "katakana" => "ヒガシソノギグンハサミチョウ",
            "katakana_half" => "ﾋｶﾞｼｿﾉｷﾞｸﾞﾝﾊｻﾐﾁｮｳ",
        ]);

        City::create([
            "id" => 1715,
            "prefecture_id" => 42,
            "name" => "北松浦郡小値賀町",
            "romaji" => "kitamatsuuragunojikachou",
            "hiragana" => "きたまつうらぐんおぢかちょう",
            "katakana" => "キタマツウラグンオヂカチョウ",
            "katakana_half" => "ｷﾀﾏﾂｳﾗｸﾞﾝｵﾁﾞｶﾁｮｳ",
        ]);

        City::create([
            "id" => 1716,
            "prefecture_id" => 42,
            "name" => "北松浦郡佐々町",
            "romaji" => "kitamatsuuragunsazachou",
            "hiragana" => "きたまつうらぐんさざちょう",
            "katakana" => "キタマツウラグンサザチョウ",
            "katakana_half" => "ｷﾀﾏﾂｳﾗｸﾞﾝｻｻﾞﾁｮｳ",
        ]);

        City::create([
            "id" => 1717,
            "prefecture_id" => 42,
            "name" => "南松浦郡新上五島町",
            "romaji" => "minamimatsuuragunshinkamigotouchou",
            "hiragana" => "みなみまつうらぐんしんかみごとうちょう",
            "katakana" => "ミナミマツウラグンシンカミゴトウチョウ",
            "katakana_half" => "ﾐﾅﾐﾏﾂｳﾗｸﾞﾝｼﾝｶﾐｺﾞﾄｳﾁｮｳ",
        ]);

        City::create([
            "id" => 1718,
            "prefecture_id" => 43,
            "name" => "熊本市中央区",
            "romaji" => "kumamotoshichuuouku",
            "hiragana" => "くまもとしちゅうおうく",
            "katakana" => "クマモトシチュウオウク",
            "katakana_half" => "ｸﾏﾓﾄｼﾁｭｳｵｳｸ",
        ]);

        City::create([
            "id" => 1719,
            "prefecture_id" => 43,
            "name" => "熊本市東区",
            "romaji" => "kumamotoshihigashiku",
            "hiragana" => "くまもとしひがしく",
            "katakana" => "クマモトシヒガシク",
            "katakana_half" => "ｸﾏﾓﾄｼﾋｶﾞｼｸ",
        ]);

        City::create([
            "id" => 1720,
            "prefecture_id" => 43,
            "name" => "熊本市西区",
            "romaji" => "kumamotoshinishiku",
            "hiragana" => "くまもとしにしく",
            "katakana" => "クマモトシニシク",
            "katakana_half" => "ｸﾏﾓﾄｼﾆｼｸ",
        ]);

        City::create([
            "id" => 1721,
            "prefecture_id" => 43,
            "name" => "熊本市南区",
            "romaji" => "kumamotoshiminamiku",
            "hiragana" => "くまもとしみなみく",
            "katakana" => "クマモトシミナミク",
            "katakana_half" => "ｸﾏﾓﾄｼﾐﾅﾐｸ",
        ]);

        City::create([
            "id" => 1722,
            "prefecture_id" => 43,
            "name" => "熊本市北区",
            "romaji" => "kumamotoshikitaku",
            "hiragana" => "くまもとしきたく",
            "katakana" => "クマモトシキタク",
            "katakana_half" => "ｸﾏﾓﾄｼｷﾀｸ",
        ]);

        City::create([
            "id" => 1723,
            "prefecture_id" => 43,
            "name" => "八代市",
            "romaji" => "yatsushiroshi",
            "hiragana" => "やつしろし",
            "katakana" => "ヤツシロシ",
            "katakana_half" => "ﾔﾂｼﾛｼ",
        ]);

        City::create([
            "id" => 1724,
            "prefecture_id" => 43,
            "name" => "人吉市",
            "romaji" => "hitoyoshishi",
            "hiragana" => "ひとよしし",
            "katakana" => "ヒトヨシシ",
            "katakana_half" => "ﾋﾄﾖｼｼ",
        ]);

        City::create([
            "id" => 1725,
            "prefecture_id" => 43,
            "name" => "荒尾市",
            "romaji" => "araoshi",
            "hiragana" => "あらおし",
            "katakana" => "アラオシ",
            "katakana_half" => "ｱﾗｵｼ",
        ]);

        City::create([
            "id" => 1726,
            "prefecture_id" => 43,
            "name" => "水俣市",
            "romaji" => "minamatashi",
            "hiragana" => "みなまたし",
            "katakana" => "ミナマタシ",
            "katakana_half" => "ﾐﾅﾏﾀｼ",
        ]);

        City::create([
            "id" => 1727,
            "prefecture_id" => 43,
            "name" => "玉名市",
            "romaji" => "tamanashi",
            "hiragana" => "たまなし",
            "katakana" => "タマナシ",
            "katakana_half" => "ﾀﾏﾅｼ",
        ]);

        City::create([
            "id" => 1728,
            "prefecture_id" => 43,
            "name" => "山鹿市",
            "romaji" => "yamagashi",
            "hiragana" => "やまがし",
            "katakana" => "ヤマガシ",
            "katakana_half" => "ﾔﾏｶﾞｼ",
        ]);

        City::create([
            "id" => 1729,
            "prefecture_id" => 43,
            "name" => "菊池市",
            "romaji" => "kikuchishi",
            "hiragana" => "きくちし",
            "katakana" => "キクチシ",
            "katakana_half" => "ｷｸﾁｼ",
        ]);

        City::create([
            "id" => 1730,
            "prefecture_id" => 43,
            "name" => "宇土市",
            "romaji" => "utoshi",
            "hiragana" => "うとし",
            "katakana" => "ウトシ",
            "katakana_half" => "ｳﾄｼ",
        ]);

        City::create([
            "id" => 1731,
            "prefecture_id" => 43,
            "name" => "上天草市",
            "romaji" => "kamiamakusashi",
            "hiragana" => "かみあまくさし",
            "katakana" => "カミアマクサシ",
            "katakana_half" => "ｶﾐｱﾏｸｻｼ",
        ]);

        City::create([
            "id" => 1732,
            "prefecture_id" => 43,
            "name" => "宇城市",
            "romaji" => "ukishi",
            "hiragana" => "うきし",
            "katakana" => "ウキシ",
            "katakana_half" => "ｳｷｼ",
        ]);

        City::create([
            "id" => 1733,
            "prefecture_id" => 43,
            "name" => "阿蘇市",
            "romaji" => "asoshi",
            "hiragana" => "あそし",
            "katakana" => "アソシ",
            "katakana_half" => "ｱｿｼ",
        ]);

        City::create([
            "id" => 1734,
            "prefecture_id" => 43,
            "name" => "天草市",
            "romaji" => "amakusashi",
            "hiragana" => "あまくさし",
            "katakana" => "アマクサシ",
            "katakana_half" => "ｱﾏｸｻｼ",
        ]);

        City::create([
            "id" => 1735,
            "prefecture_id" => 43,
            "name" => "合志市",
            "romaji" => "koushishi",
            "hiragana" => "こうしし",
            "katakana" => "コウシシ",
            "katakana_half" => "ｺｳｼｼ",
        ]);

        City::create([
            "id" => 1736,
            "prefecture_id" => 43,
            "name" => "下益城郡美里町",
            "romaji" => "shimomashikigunmisatomachi",
            "hiragana" => "しもましきぐんみさとまち",
            "katakana" => "シモマシキグンミサトマチ",
            "katakana_half" => "ｼﾓﾏｼｷｸﾞﾝﾐｻﾄﾏﾁ",
        ]);

        City::create([
            "id" => 1737,
            "prefecture_id" => 43,
            "name" => "玉名郡玉東町",
            "romaji" => "tamanagungyokutoumachi",
            "hiragana" => "たまなぐんぎょくとうまち",
            "katakana" => "タマナグンギョクトウマチ",
            "katakana_half" => "ﾀﾏﾅｸﾞﾝｷﾞｮｸﾄｳﾏﾁ",
        ]);

        City::create([
            "id" => 1738,
            "prefecture_id" => 43,
            "name" => "玉名郡南関町",
            "romaji" => "tamanagunnankanmachi",
            "hiragana" => "たまなぐんなんかんまち",
            "katakana" => "タマナグンナンカンマチ",
            "katakana_half" => "ﾀﾏﾅｸﾞﾝﾅﾝｶﾝﾏﾁ",
        ]);

        City::create([
            "id" => 1739,
            "prefecture_id" => 43,
            "name" => "玉名郡長洲町",
            "romaji" => "tamanagunnagasumachi",
            "hiragana" => "たまなぐんながすまち",
            "katakana" => "タマナグンナガスマチ",
            "katakana_half" => "ﾀﾏﾅｸﾞﾝﾅｶﾞｽﾏﾁ",
        ]);

        City::create([
            "id" => 1740,
            "prefecture_id" => 43,
            "name" => "玉名郡和水町",
            "romaji" => "tamanagunnagomimachi",
            "hiragana" => "たまなぐんなごみまち",
            "katakana" => "タマナグンナゴミマチ",
            "katakana_half" => "ﾀﾏﾅｸﾞﾝﾅｺﾞﾐﾏﾁ",
        ]);

        City::create([
            "id" => 1741,
            "prefecture_id" => 43,
            "name" => "菊池郡大津町",
            "romaji" => "kikuchigunoozumachi",
            "hiragana" => "きくちぐんおおづまち",
            "katakana" => "キクチグンオオヅマチ",
            "katakana_half" => "ｷｸﾁｸﾞﾝｵｵﾂﾞﾏﾁ",
        ]);

        City::create([
            "id" => 1742,
            "prefecture_id" => 43,
            "name" => "菊池郡菊陽町",
            "romaji" => "kikuchigunkikuyoumachi",
            "hiragana" => "きくちぐんきくようまち",
            "katakana" => "キクチグンキクヨウマチ",
            "katakana_half" => "ｷｸﾁｸﾞﾝｷｸﾖｳﾏﾁ",
        ]);

        City::create([
            "id" => 1743,
            "prefecture_id" => 43,
            "name" => "阿蘇郡南小国町",
            "romaji" => "asogunminamiogunimachi",
            "hiragana" => "あそぐんみなみおぐにまち",
            "katakana" => "アソグンミナミオグニマチ",
            "katakana_half" => "ｱｿｸﾞﾝﾐﾅﾐｵｸﾞﾆﾏﾁ",
        ]);

        City::create([
            "id" => 1744,
            "prefecture_id" => 43,
            "name" => "阿蘇郡小国町",
            "romaji" => "asogunogunimachi",
            "hiragana" => "あそぐんおぐにまち",
            "katakana" => "アソグンオグニマチ",
            "katakana_half" => "ｱｿｸﾞﾝｵｸﾞﾆﾏﾁ",
        ]);

        City::create([
            "id" => 1745,
            "prefecture_id" => 43,
            "name" => "阿蘇郡産山村",
            "romaji" => "asogunubuyamamura",
            "hiragana" => "あそぐんうぶやまむら",
            "katakana" => "アソグンウブヤマムラ",
            "katakana_half" => "ｱｿｸﾞﾝｳﾌﾞﾔﾏﾑﾗ",
        ]);

        City::create([
            "id" => 1746,
            "prefecture_id" => 43,
            "name" => "阿蘇郡高森町",
            "romaji" => "asoguntakamorimachi",
            "hiragana" => "あそぐんたかもりまち",
            "katakana" => "アソグンタカモリマチ",
            "katakana_half" => "ｱｿｸﾞﾝﾀｶﾓﾘﾏﾁ",
        ]);

        City::create([
            "id" => 1747,
            "prefecture_id" => 43,
            "name" => "阿蘇郡西原村",
            "romaji" => "asogunnishiharamura",
            "hiragana" => "あそぐんにしはらむら",
            "katakana" => "アソグンニシハラムラ",
            "katakana_half" => "ｱｿｸﾞﾝﾆｼﾊﾗﾑﾗ",
        ]);

        City::create([
            "id" => 1748,
            "prefecture_id" => 43,
            "name" => "阿蘇郡南阿蘇村",
            "romaji" => "asogunminamiasomura",
            "hiragana" => "あそぐんみなみあそむら",
            "katakana" => "アソグンミナミアソムラ",
            "katakana_half" => "ｱｿｸﾞﾝﾐﾅﾐｱｿﾑﾗ",
        ]);

        City::create([
            "id" => 1749,
            "prefecture_id" => 43,
            "name" => "上益城郡御船町",
            "romaji" => "kamimashikigunmifunemachi",
            "hiragana" => "かみましきぐんみふねまち",
            "katakana" => "カミマシキグンミフネマチ",
            "katakana_half" => "ｶﾐﾏｼｷｸﾞﾝﾐﾌﾈﾏﾁ",
        ]);

        City::create([
            "id" => 1750,
            "prefecture_id" => 43,
            "name" => "上益城郡嘉島町",
            "romaji" => "kamimashikigunkashimamachi",
            "hiragana" => "かみましきぐんかしままち",
            "katakana" => "カミマシキグンカシママチ",
            "katakana_half" => "ｶﾐﾏｼｷｸﾞﾝｶｼﾏﾏﾁ",
        ]);

        City::create([
            "id" => 1751,
            "prefecture_id" => 43,
            "name" => "上益城郡益城町",
            "romaji" => "kamimashikigunmashikimachi",
            "hiragana" => "かみましきぐんましきまち",
            "katakana" => "カミマシキグンマシキマチ",
            "katakana_half" => "ｶﾐﾏｼｷｸﾞﾝﾏｼｷﾏﾁ",
        ]);

        City::create([
            "id" => 1752,
            "prefecture_id" => 43,
            "name" => "上益城郡甲佐町",
            "romaji" => "kamimashikigunkousamachi",
            "hiragana" => "かみましきぐんこうさまち",
            "katakana" => "カミマシキグンコウサマチ",
            "katakana_half" => "ｶﾐﾏｼｷｸﾞﾝｺｳｻﾏﾁ",
        ]);

        City::create([
            "id" => 1753,
            "prefecture_id" => 43,
            "name" => "上益城郡山都町",
            "romaji" => "kamimashikigunyamatochou",
            "hiragana" => "かみましきぐんやまとちょう",
            "katakana" => "カミマシキグンヤマトチョウ",
            "katakana_half" => "ｶﾐﾏｼｷｸﾞﾝﾔﾏﾄﾁｮｳ",
        ]);

        City::create([
            "id" => 1754,
            "prefecture_id" => 43,
            "name" => "八代郡氷川町",
            "romaji" => "yatsushirogunhikawachou",
            "hiragana" => "やつしろぐんひかわちょう",
            "katakana" => "ヤツシログンヒカワチョウ",
            "katakana_half" => "ﾔﾂｼﾛｸﾞﾝﾋｶﾜﾁｮｳ",
        ]);

        City::create([
            "id" => 1755,
            "prefecture_id" => 43,
            "name" => "葦北郡芦北町",
            "romaji" => "ashikitagunashikitamachi",
            "hiragana" => "あしきたぐんあしきたまち",
            "katakana" => "アシキタグンアシキタマチ",
            "katakana_half" => "ｱｼｷﾀｸﾞﾝｱｼｷﾀﾏﾁ",
        ]);

        City::create([
            "id" => 1756,
            "prefecture_id" => 43,
            "name" => "葦北郡津奈木町",
            "romaji" => "ashikitaguntsunagimachi",
            "hiragana" => "あしきたぐんつなぎまち",
            "katakana" => "アシキタグンツナギマチ",
            "katakana_half" => "ｱｼｷﾀｸﾞﾝﾂﾅｷﾞﾏﾁ",
        ]);

        City::create([
            "id" => 1757,
            "prefecture_id" => 43,
            "name" => "球磨郡錦町",
            "romaji" => "kumagunnishikimachi",
            "hiragana" => "くまぐんにしきまち",
            "katakana" => "クマグンニシキマチ",
            "katakana_half" => "ｸﾏｸﾞﾝﾆｼｷﾏﾁ",
        ]);

        City::create([
            "id" => 1758,
            "prefecture_id" => 43,
            "name" => "球磨郡多良木町",
            "romaji" => "kumaguntaragimachi",
            "hiragana" => "くまぐんたらぎまち",
            "katakana" => "クマグンタラギマチ",
            "katakana_half" => "ｸﾏｸﾞﾝﾀﾗｷﾞﾏﾁ",
        ]);

        City::create([
            "id" => 1759,
            "prefecture_id" => 43,
            "name" => "球磨郡湯前町",
            "romaji" => "kumagunyunomaemachi",
            "hiragana" => "くまぐんゆのまえまち",
            "katakana" => "クマグンユノマエマチ",
            "katakana_half" => "ｸﾏｸﾞﾝﾕﾉﾏｴﾏﾁ",
        ]);

        City::create([
            "id" => 1760,
            "prefecture_id" => 43,
            "name" => "球磨郡水上村",
            "romaji" => "kumagunmizukamimura",
            "hiragana" => "くまぐんみずかみむら",
            "katakana" => "クマグンミズカミムラ",
            "katakana_half" => "ｸﾏｸﾞﾝﾐｽﾞｶﾐﾑﾗ",
        ]);

        City::create([
            "id" => 1761,
            "prefecture_id" => 43,
            "name" => "球磨郡相良村",
            "romaji" => "kumagunsagaramura",
            "hiragana" => "くまぐんさがらむら",
            "katakana" => "クマグンサガラムラ",
            "katakana_half" => "ｸﾏｸﾞﾝｻｶﾞﾗﾑﾗ",
        ]);

        City::create([
            "id" => 1762,
            "prefecture_id" => 43,
            "name" => "球磨郡五木村",
            "romaji" => "kumagunitsukimura",
            "hiragana" => "くまぐんいつきむら",
            "katakana" => "クマグンイツキムラ",
            "katakana_half" => "ｸﾏｸﾞﾝｲﾂｷﾑﾗ",
        ]);

        City::create([
            "id" => 1763,
            "prefecture_id" => 43,
            "name" => "球磨郡山江村",
            "romaji" => "kumagunyamaemura",
            "hiragana" => "くまぐんやまえむら",
            "katakana" => "クマグンヤマエムラ",
            "katakana_half" => "ｸﾏｸﾞﾝﾔﾏｴﾑﾗ",
        ]);

        City::create([
            "id" => 1764,
            "prefecture_id" => 43,
            "name" => "球磨郡球磨村",
            "romaji" => "kumagunkumamura",
            "hiragana" => "くまぐんくまむら",
            "katakana" => "クマグンクマムラ",
            "katakana_half" => "ｸﾏｸﾞﾝｸﾏﾑﾗ",
        ]);

        City::create([
            "id" => 1765,
            "prefecture_id" => 43,
            "name" => "球磨郡あさぎり町",
            "romaji" => "kumagunasagirichou",
            "hiragana" => "くまぐんあさぎりちょう",
            "katakana" => "クマグンアサギリチョウ",
            "katakana_half" => "ｸﾏｸﾞﾝｱｻｷﾞﾘﾁｮｳ",
        ]);

        City::create([
            "id" => 1766,
            "prefecture_id" => 43,
            "name" => "天草郡苓北町",
            "romaji" => "amakusagunreihokumachi",
            "hiragana" => "あまくさぐんれいほくまち",
            "katakana" => "アマクサグンレイホクマチ",
            "katakana_half" => "ｱﾏｸｻｸﾞﾝﾚｲﾎｸﾏﾁ",
        ]);

        City::create([
            "id" => 1767,
            "prefecture_id" => 44,
            "name" => "大分市",
            "romaji" => "ooitashi",
            "hiragana" => "おおいたし",
            "katakana" => "オオイタシ",
            "katakana_half" => "ｵｵｲﾀｼ",
        ]);

        City::create([
            "id" => 1768,
            "prefecture_id" => 44,
            "name" => "別府市",
            "romaji" => "beppushi",
            "hiragana" => "べっぷし",
            "katakana" => "ベップシ",
            "katakana_half" => "ﾍﾞｯﾌﾟｼ",
        ]);

        City::create([
            "id" => 1769,
            "prefecture_id" => 44,
            "name" => "中津市",
            "romaji" => "nakatsushi",
            "hiragana" => "なかつし",
            "katakana" => "ナカツシ",
            "katakana_half" => "ﾅｶﾂｼ",
        ]);

        City::create([
            "id" => 1770,
            "prefecture_id" => 44,
            "name" => "日田市",
            "romaji" => "hitashi",
            "hiragana" => "ひたし",
            "katakana" => "ヒタシ",
            "katakana_half" => "ﾋﾀｼ",
        ]);

        City::create([
            "id" => 1771,
            "prefecture_id" => 44,
            "name" => "佐伯市",
            "romaji" => "saikishi",
            "hiragana" => "さいきし",
            "katakana" => "サイキシ",
            "katakana_half" => "ｻｲｷｼ",
        ]);

        City::create([
            "id" => 1772,
            "prefecture_id" => 44,
            "name" => "臼杵市",
            "romaji" => "usukishi",
            "hiragana" => "うすきし",
            "katakana" => "ウスキシ",
            "katakana_half" => "ｳｽｷｼ",
        ]);

        City::create([
            "id" => 1773,
            "prefecture_id" => 44,
            "name" => "津久見市",
            "romaji" => "tsukumishi",
            "hiragana" => "つくみし",
            "katakana" => "ツクミシ",
            "katakana_half" => "ﾂｸﾐｼ",
        ]);

        City::create([
            "id" => 1774,
            "prefecture_id" => 44,
            "name" => "竹田市",
            "romaji" => "taketashi",
            "hiragana" => "たけたし",
            "katakana" => "タケタシ",
            "katakana_half" => "ﾀｹﾀｼ",
        ]);

        City::create([
            "id" => 1775,
            "prefecture_id" => 44,
            "name" => "豊後高田市",
            "romaji" => "bungotakadashi",
            "hiragana" => "ぶんごたかだし",
            "katakana" => "ブンゴタカダシ",
            "katakana_half" => "ﾌﾞﾝｺﾞﾀｶﾀﾞｼ",
        ]);

        City::create([
            "id" => 1776,
            "prefecture_id" => 44,
            "name" => "杵築市",
            "romaji" => "kitsukishi",
            "hiragana" => "きつきし",
            "katakana" => "キツキシ",
            "katakana_half" => "ｷﾂｷｼ",
        ]);

        City::create([
            "id" => 1777,
            "prefecture_id" => 44,
            "name" => "宇佐市",
            "romaji" => "usashi",
            "hiragana" => "うさし",
            "katakana" => "ウサシ",
            "katakana_half" => "ｳｻｼ",
        ]);

        City::create([
            "id" => 1778,
            "prefecture_id" => 44,
            "name" => "豊後大野市",
            "romaji" => "bungooonoshi",
            "hiragana" => "ぶんごおおのし",
            "katakana" => "ブンゴオオノシ",
            "katakana_half" => "ﾌﾞﾝｺﾞｵｵﾉｼ",
        ]);

        City::create([
            "id" => 1779,
            "prefecture_id" => 44,
            "name" => "由布市",
            "romaji" => "yufushi",
            "hiragana" => "ゆふし",
            "katakana" => "ユフシ",
            "katakana_half" => "ﾕﾌｼ",
        ]);

        City::create([
            "id" => 1780,
            "prefecture_id" => 44,
            "name" => "国東市",
            "romaji" => "kunisakishi",
            "hiragana" => "くにさきし",
            "katakana" => "クニサキシ",
            "katakana_half" => "ｸﾆｻｷｼ",
        ]);

        City::create([
            "id" => 1781,
            "prefecture_id" => 44,
            "name" => "東国東郡姫島村",
            "romaji" => "higashikunisakigunhimeshimamura",
            "hiragana" => "ひがしくにさきぐんひめしまむら",
            "katakana" => "ヒガシクニサキグンヒメシマムラ",
            "katakana_half" => "ﾋｶﾞｼｸﾆｻｷｸﾞﾝﾋﾒｼﾏﾑﾗ",
        ]);

        City::create([
            "id" => 1782,
            "prefecture_id" => 44,
            "name" => "速見郡日出町",
            "romaji" => "hayamigunhijimachi",
            "hiragana" => "はやみぐんひじまち",
            "katakana" => "ハヤミグンヒジマチ",
            "katakana_half" => "ﾊﾔﾐｸﾞﾝﾋｼﾞﾏﾁ",
        ]);

        City::create([
            "id" => 1783,
            "prefecture_id" => 44,
            "name" => "玖珠郡九重町",
            "romaji" => "kusugunkokonoemachi",
            "hiragana" => "くすぐんここのえまち",
            "katakana" => "クスグンココノエマチ",
            "katakana_half" => "ｸｽｸﾞﾝｺｺﾉｴﾏﾁ",
        ]);

        City::create([
            "id" => 1784,
            "prefecture_id" => 44,
            "name" => "玖珠郡玖珠町",
            "romaji" => "kusugunkusumachi",
            "hiragana" => "くすぐんくすまち",
            "katakana" => "クスグンクスマチ",
            "katakana_half" => "ｸｽｸﾞﾝｸｽﾏﾁ",
        ]);

        City::create([
            "id" => 1785,
            "prefecture_id" => 45,
            "name" => "宮崎市",
            "romaji" => "miyazakishi",
            "hiragana" => "みやざきし",
            "katakana" => "ミヤザキシ",
            "katakana_half" => "ﾐﾔｻﾞｷｼ",
        ]);

        City::create([
            "id" => 1786,
            "prefecture_id" => 45,
            "name" => "都城市",
            "romaji" => "miyakonojoushi",
            "hiragana" => "みやこのじょうし",
            "katakana" => "ミヤコノジョウシ",
            "katakana_half" => "ﾐﾔｺﾉｼﾞｮｳｼ",
        ]);

        City::create([
            "id" => 1787,
            "prefecture_id" => 45,
            "name" => "延岡市",
            "romaji" => "nobeokashi",
            "hiragana" => "のべおかし",
            "katakana" => "ノベオカシ",
            "katakana_half" => "ﾉﾍﾞｵｶｼ",
        ]);

        City::create([
            "id" => 1788,
            "prefecture_id" => 45,
            "name" => "日南市",
            "romaji" => "nichinanshi",
            "hiragana" => "にちなんし",
            "katakana" => "ニチナンシ",
            "katakana_half" => "ﾆﾁﾅﾝｼ",
        ]);

        City::create([
            "id" => 1789,
            "prefecture_id" => 45,
            "name" => "小林市",
            "romaji" => "kobayashishi",
            "hiragana" => "こばやしし",
            "katakana" => "コバヤシシ",
            "katakana_half" => "ｺﾊﾞﾔｼｼ",
        ]);

        City::create([
            "id" => 1790,
            "prefecture_id" => 45,
            "name" => "日向市",
            "romaji" => "hyuugashi",
            "hiragana" => "ひゅうがし",
            "katakana" => "ヒュウガシ",
            "katakana_half" => "ﾋｭｳｶﾞｼ",
        ]);

        City::create([
            "id" => 1791,
            "prefecture_id" => 45,
            "name" => "串間市",
            "romaji" => "kushimashi",
            "hiragana" => "くしまし",
            "katakana" => "クシマシ",
            "katakana_half" => "ｸｼﾏｼ",
        ]);

        City::create([
            "id" => 1792,
            "prefecture_id" => 45,
            "name" => "西都市",
            "romaji" => "saitoshi",
            "hiragana" => "さいとし",
            "katakana" => "サイトシ",
            "katakana_half" => "ｻｲﾄｼ",
        ]);

        City::create([
            "id" => 1793,
            "prefecture_id" => 45,
            "name" => "えびの市",
            "romaji" => "ebinoshi",
            "hiragana" => "えびのし",
            "katakana" => "エビノシ",
            "katakana_half" => "ｴﾋﾞﾉｼ",
        ]);

        City::create([
            "id" => 1794,
            "prefecture_id" => 45,
            "name" => "北諸県郡三股町",
            "romaji" => "kitamorokatagunmimatachou",
            "hiragana" => "きたもろかたぐんみまたちょう",
            "katakana" => "キタモロカタグンミマタチョウ",
            "katakana_half" => "ｷﾀﾓﾛｶﾀｸﾞﾝﾐﾏﾀﾁｮｳ",
        ]);

        City::create([
            "id" => 1795,
            "prefecture_id" => 45,
            "name" => "西諸県郡高原町",
            "romaji" => "nishimorokataguntakaharuchou",
            "hiragana" => "にしもろかたぐんたかはるちょう",
            "katakana" => "ニシモロカタグンタカハルチョウ",
            "katakana_half" => "ﾆｼﾓﾛｶﾀｸﾞﾝﾀｶﾊﾙﾁｮｳ",
        ]);

        City::create([
            "id" => 1796,
            "prefecture_id" => 45,
            "name" => "東諸県郡国富町",
            "romaji" => "higashimorokatagunkunitomichou",
            "hiragana" => "ひがしもろかたぐんくにとみちょう",
            "katakana" => "ヒガシモロカタグンクニトミチョウ",
            "katakana_half" => "ﾋｶﾞｼﾓﾛｶﾀｸﾞﾝｸﾆﾄﾐﾁｮｳ",
        ]);

        City::create([
            "id" => 1797,
            "prefecture_id" => 45,
            "name" => "東諸県郡綾町",
            "romaji" => "higashimorokatagunayachou",
            "hiragana" => "ひがしもろかたぐんあやちょう",
            "katakana" => "ヒガシモロカタグンアヤチョウ",
            "katakana_half" => "ﾋｶﾞｼﾓﾛｶﾀｸﾞﾝｱﾔﾁｮｳ",
        ]);

        City::create([
            "id" => 1798,
            "prefecture_id" => 45,
            "name" => "児湯郡高鍋町",
            "romaji" => "koyuguntakanabechou",
            "hiragana" => "こゆぐんたかなべちょう",
            "katakana" => "コユグンタカナベチョウ",
            "katakana_half" => "ｺﾕｸﾞﾝﾀｶﾅﾍﾞﾁｮｳ",
        ]);

        City::create([
            "id" => 1799,
            "prefecture_id" => 45,
            "name" => "児湯郡新富町",
            "romaji" => "koyugunshintomichou",
            "hiragana" => "こゆぐんしんとみちょう",
            "katakana" => "コユグンシントミチョウ",
            "katakana_half" => "ｺﾕｸﾞﾝｼﾝﾄﾐﾁｮｳ",
        ]);

        City::create([
            "id" => 1800,
            "prefecture_id" => 45,
            "name" => "児湯郡西米良村",
            "romaji" => "koyugunnishimerason",
            "hiragana" => "こゆぐんにしめらそん",
            "katakana" => "コユグンニシメラソン",
            "katakana_half" => "ｺﾕｸﾞﾝﾆｼﾒﾗｿﾝ",
        ]);

        City::create([
            "id" => 1801,
            "prefecture_id" => 45,
            "name" => "児湯郡木城町",
            "romaji" => "koyugunkijouchou",
            "hiragana" => "こゆぐんきじょうちょう",
            "katakana" => "コユグンキジョウチョウ",
            "katakana_half" => "ｺﾕｸﾞﾝｷｼﾞｮｳﾁｮｳ",
        ]);

        City::create([
            "id" => 1802,
            "prefecture_id" => 45,
            "name" => "児湯郡川南町",
            "romaji" => "koyugunkawaminamichou",
            "hiragana" => "こゆぐんかわみなみちょう",
            "katakana" => "コユグンカワミナミチョウ",
            "katakana_half" => "ｺﾕｸﾞﾝｶﾜﾐﾅﾐﾁｮｳ",
        ]);

        City::create([
            "id" => 1803,
            "prefecture_id" => 45,
            "name" => "児湯郡都農町",
            "romaji" => "koyuguntsunochou",
            "hiragana" => "こゆぐんつのちょう",
            "katakana" => "コユグンツノチョウ",
            "katakana_half" => "ｺﾕｸﾞﾝﾂﾉﾁｮｳ",
        ]);

        City::create([
            "id" => 1804,
            "prefecture_id" => 45,
            "name" => "東臼杵郡門川町",
            "romaji" => "higashiusukigunkadogawachou",
            "hiragana" => "ひがしうすきぐんかどがわちょう",
            "katakana" => "ヒガシウスキグンカドガワチョウ",
            "katakana_half" => "ﾋｶﾞｼｳｽｷｸﾞﾝｶﾄﾞｶﾞﾜﾁｮｳ",
        ]);

        City::create([
            "id" => 1805,
            "prefecture_id" => 45,
            "name" => "東臼杵郡諸塚村",
            "romaji" => "higashiusukigunmorotsukason",
            "hiragana" => "ひがしうすきぐんもろつかそん",
            "katakana" => "ヒガシウスキグンモロツカソン",
            "katakana_half" => "ﾋｶﾞｼｳｽｷｸﾞﾝﾓﾛﾂｶｿﾝ",
        ]);

        City::create([
            "id" => 1806,
            "prefecture_id" => 45,
            "name" => "東臼杵郡椎葉村",
            "romaji" => "higashiusukigunshiibason",
            "hiragana" => "ひがしうすきぐんしいばそん",
            "katakana" => "ヒガシウスキグンシイバソン",
            "katakana_half" => "ﾋｶﾞｼｳｽｷｸﾞﾝｼｲﾊﾞｿﾝ",
        ]);

        City::create([
            "id" => 1807,
            "prefecture_id" => 45,
            "name" => "東臼杵郡美郷町",
            "romaji" => "higashiusukigunmisatochou",
            "hiragana" => "ひがしうすきぐんみさとちょう",
            "katakana" => "ヒガシウスキグンミサトチョウ",
            "katakana_half" => "ﾋｶﾞｼｳｽｷｸﾞﾝﾐｻﾄﾁｮｳ",
        ]);

        City::create([
            "id" => 1808,
            "prefecture_id" => 45,
            "name" => "西臼杵郡高千穂町",
            "romaji" => "nishiusukiguntakachihochou",
            "hiragana" => "にしうすきぐんたかちほちょう",
            "katakana" => "ニシウスキグンタカチホチョウ",
            "katakana_half" => "ﾆｼｳｽｷｸﾞﾝﾀｶﾁﾎﾁｮｳ",
        ]);

        City::create([
            "id" => 1809,
            "prefecture_id" => 45,
            "name" => "西臼杵郡日之影町",
            "romaji" => "nishiusukigunhinokagechou",
            "hiragana" => "にしうすきぐんひのかげちょう",
            "katakana" => "ニシウスキグンヒノカゲチョウ",
            "katakana_half" => "ﾆｼｳｽｷｸﾞﾝﾋﾉｶｹﾞﾁｮｳ",
        ]);

        City::create([
            "id" => 1810,
            "prefecture_id" => 45,
            "name" => "西臼杵郡五ヶ瀬町",
            "romaji" => "nishiusukigungokasechou",
            "hiragana" => "にしうすきぐんごかせちょう",
            "katakana" => "ニシウスキグンゴカセチョウ",
            "katakana_half" => "ﾆｼｳｽｷｸﾞﾝｺﾞｶｾﾁｮｳ",
        ]);

        City::create([
            "id" => 1811,
            "prefecture_id" => 46,
            "name" => "鹿児島市",
            "romaji" => "kagoshimashi",
            "hiragana" => "かごしまし",
            "katakana" => "カゴシマシ",
            "katakana_half" => "ｶｺﾞｼﾏｼ",
        ]);

        City::create([
            "id" => 1812,
            "prefecture_id" => 46,
            "name" => "鹿屋市",
            "romaji" => "kanoyashi",
            "hiragana" => "かのやし",
            "katakana" => "カノヤシ",
            "katakana_half" => "ｶﾉﾔｼ",
        ]);

        City::create([
            "id" => 1813,
            "prefecture_id" => 46,
            "name" => "枕崎市",
            "romaji" => "makurazakishi",
            "hiragana" => "まくらざきし",
            "katakana" => "マクラザキシ",
            "katakana_half" => "ﾏｸﾗｻﾞｷｼ",
        ]);

        City::create([
            "id" => 1814,
            "prefecture_id" => 46,
            "name" => "阿久根市",
            "romaji" => "akuneshi",
            "hiragana" => "あくねし",
            "katakana" => "アクネシ",
            "katakana_half" => "ｱｸﾈｼ",
        ]);

        City::create([
            "id" => 1815,
            "prefecture_id" => 46,
            "name" => "出水市",
            "romaji" => "izumishi",
            "hiragana" => "いずみし",
            "katakana" => "イズミシ",
            "katakana_half" => "ｲｽﾞﾐｼ",
        ]);

        City::create([
            "id" => 1816,
            "prefecture_id" => 46,
            "name" => "指宿市",
            "romaji" => "ibusukishi",
            "hiragana" => "いぶすきし",
            "katakana" => "イブスキシ",
            "katakana_half" => "ｲﾌﾞｽｷｼ",
        ]);

        City::create([
            "id" => 1817,
            "prefecture_id" => 46,
            "name" => "西之表市",
            "romaji" => "nishinoomoteshi",
            "hiragana" => "にしのおもてし",
            "katakana" => "ニシノオモテシ",
            "katakana_half" => "ﾆｼﾉｵﾓﾃｼ",
        ]);

        City::create([
            "id" => 1818,
            "prefecture_id" => 46,
            "name" => "垂水市",
            "romaji" => "tarumizushi",
            "hiragana" => "たるみずし",
            "katakana" => "タルミズシ",
            "katakana_half" => "ﾀﾙﾐｽﾞｼ",
        ]);

        City::create([
            "id" => 1819,
            "prefecture_id" => 46,
            "name" => "薩摩川内市",
            "romaji" => "satsumasendaishi",
            "hiragana" => "さつませんだいし",
            "katakana" => "サツマセンダイシ",
            "katakana_half" => "ｻﾂﾏｾﾝﾀﾞｲｼ",
        ]);

        City::create([
            "id" => 1820,
            "prefecture_id" => 46,
            "name" => "日置市",
            "romaji" => "hiokishi",
            "hiragana" => "ひおきし",
            "katakana" => "ヒオキシ",
            "katakana_half" => "ﾋｵｷｼ",
        ]);

        City::create([
            "id" => 1821,
            "prefecture_id" => 46,
            "name" => "曽於市",
            "romaji" => "sooshi",
            "hiragana" => "そおし",
            "katakana" => "ソオシ",
            "katakana_half" => "ｿｵｼ",
        ]);

        City::create([
            "id" => 1822,
            "prefecture_id" => 46,
            "name" => "霧島市",
            "romaji" => "kirishimashi",
            "hiragana" => "きりしまし",
            "katakana" => "キリシマシ",
            "katakana_half" => "ｷﾘｼﾏｼ",
        ]);

        City::create([
            "id" => 1823,
            "prefecture_id" => 46,
            "name" => "いちき串木野市",
            "romaji" => "ichikikushikinoshi",
            "hiragana" => "いちきくしきのし",
            "katakana" => "イチキクシキノシ",
            "katakana_half" => "ｲﾁｷｸｼｷﾉｼ",
        ]);

        City::create([
            "id" => 1824,
            "prefecture_id" => 46,
            "name" => "南さつま市",
            "romaji" => "minamisatsumashi",
            "hiragana" => "みなみさつまし",
            "katakana" => "ミナミサツマシ",
            "katakana_half" => "ﾐﾅﾐｻﾂﾏｼ",
        ]);

        City::create([
            "id" => 1825,
            "prefecture_id" => 46,
            "name" => "志布志市",
            "romaji" => "shibushishi",
            "hiragana" => "しぶしし",
            "katakana" => "シブシシ",
            "katakana_half" => "ｼﾌﾞｼｼ",
        ]);

        City::create([
            "id" => 1826,
            "prefecture_id" => 46,
            "name" => "奄美市",
            "romaji" => "amamishi",
            "hiragana" => "あまみし",
            "katakana" => "アマミシ",
            "katakana_half" => "ｱﾏﾐｼ",
        ]);

        City::create([
            "id" => 1827,
            "prefecture_id" => 46,
            "name" => "南九州市",
            "romaji" => "minamikyuushuushi",
            "hiragana" => "みなみきゅうしゅうし",
            "katakana" => "ミナミキュウシュウシ",
            "katakana_half" => "ﾐﾅﾐｷｭｳｼｭｳｼ",
        ]);

        City::create([
            "id" => 1828,
            "prefecture_id" => 46,
            "name" => "伊佐市",
            "romaji" => "isashi",
            "hiragana" => "いさし",
            "katakana" => "イサシ",
            "katakana_half" => "ｲｻｼ",
        ]);

        City::create([
            "id" => 1829,
            "prefecture_id" => 46,
            "name" => "姶良市",
            "romaji" => "airashi",
            "hiragana" => "あいらし",
            "katakana" => "アイラシ",
            "katakana_half" => "ｱｲﾗｼ",
        ]);

        City::create([
            "id" => 1830,
            "prefecture_id" => 46,
            "name" => "鹿児島郡三島村",
            "romaji" => "kagoshimagunmishimamura",
            "hiragana" => "かごしまぐんみしまむら",
            "katakana" => "カゴシマグンミシマムラ",
            "katakana_half" => "ｶｺﾞｼﾏｸﾞﾝﾐｼﾏﾑﾗ",
        ]);

        City::create([
            "id" => 1831,
            "prefecture_id" => 46,
            "name" => "鹿児島郡十島村",
            "romaji" => "kagoshimaguntoshimamura",
            "hiragana" => "かごしまぐんとしまむら",
            "katakana" => "カゴシマグントシマムラ",
            "katakana_half" => "ｶｺﾞｼﾏｸﾞﾝﾄｼﾏﾑﾗ",
        ]);

        City::create([
            "id" => 1832,
            "prefecture_id" => 46,
            "name" => "薩摩郡さつま町",
            "romaji" => "satsumagunsatsumachou",
            "hiragana" => "さつまぐんさつまちょう",
            "katakana" => "サツマグンサツマチョウ",
            "katakana_half" => "ｻﾂﾏｸﾞﾝｻﾂﾏﾁｮｳ",
        ]);

        City::create([
            "id" => 1833,
            "prefecture_id" => 46,
            "name" => "出水郡長島町",
            "romaji" => "izumigunnagashimachou",
            "hiragana" => "いずみぐんながしまちょう",
            "katakana" => "イズミグンナガシマチョウ",
            "katakana_half" => "ｲｽﾞﾐｸﾞﾝﾅｶﾞｼﾏﾁｮｳ",
        ]);

        City::create([
            "id" => 1834,
            "prefecture_id" => 46,
            "name" => "姶良郡湧水町",
            "romaji" => "airagunyuusuichou",
            "hiragana" => "あいらぐんゆうすいちょう",
            "katakana" => "アイラグンユウスイチョウ",
            "katakana_half" => "ｱｲﾗｸﾞﾝﾕｳｽｲﾁｮｳ",
        ]);

        City::create([
            "id" => 1835,
            "prefecture_id" => 46,
            "name" => "曽於郡大崎町",
            "romaji" => "soogunoosakichou",
            "hiragana" => "そおぐんおおさきちょう",
            "katakana" => "ソオグンオオサキチョウ",
            "katakana_half" => "ｿｵｸﾞﾝｵｵｻｷﾁｮｳ",
        ]);

        City::create([
            "id" => 1836,
            "prefecture_id" => 46,
            "name" => "肝属郡東串良町",
            "romaji" => "kimotsukigunhigashikushirachou",
            "hiragana" => "きもつきぐんひがしくしらちょう",
            "katakana" => "キモツキグンヒガシクシラチョウ",
            "katakana_half" => "ｷﾓﾂｷｸﾞﾝﾋｶﾞｼｸｼﾗﾁｮｳ",
        ]);

        City::create([
            "id" => 1837,
            "prefecture_id" => 46,
            "name" => "肝属郡錦江町",
            "romaji" => "kimotsukigunkinkouchou",
            "hiragana" => "きもつきぐんきんこうちょう",
            "katakana" => "キモツキグンキンコウチョウ",
            "katakana_half" => "ｷﾓﾂｷｸﾞﾝｷﾝｺｳﾁｮｳ",
        ]);

        City::create([
            "id" => 1838,
            "prefecture_id" => 46,
            "name" => "肝属郡南大隅町",
            "romaji" => "kimotsukigunminamioosumichou",
            "hiragana" => "きもつきぐんみなみおおすみちょう",
            "katakana" => "キモツキグンミナミオオスミチョウ",
            "katakana_half" => "ｷﾓﾂｷｸﾞﾝﾐﾅﾐｵｵｽﾐﾁｮｳ",
        ]);

        City::create([
            "id" => 1839,
            "prefecture_id" => 46,
            "name" => "肝属郡肝付町",
            "romaji" => "kimotsukigunkimotsukichou",
            "hiragana" => "きもつきぐんきもつきちょう",
            "katakana" => "キモツキグンキモツキチョウ",
            "katakana_half" => "ｷﾓﾂｷｸﾞﾝｷﾓﾂｷﾁｮｳ",
        ]);

        City::create([
            "id" => 1840,
            "prefecture_id" => 46,
            "name" => "熊毛郡中種子町",
            "romaji" => "kumagegunnakatanechou",
            "hiragana" => "くまげぐんなかたねちょう",
            "katakana" => "クマゲグンナカタネチョウ",
            "katakana_half" => "ｸﾏｹﾞｸﾞﾝﾅｶﾀﾈﾁｮｳ",
        ]);

        City::create([
            "id" => 1841,
            "prefecture_id" => 46,
            "name" => "熊毛郡南種子町",
            "romaji" => "kumagegunminamitanechou",
            "hiragana" => "くまげぐんみなみたねちょう",
            "katakana" => "クマゲグンミナミタネチョウ",
            "katakana_half" => "ｸﾏｹﾞｸﾞﾝﾐﾅﾐﾀﾈﾁｮｳ",
        ]);

        City::create([
            "id" => 1842,
            "prefecture_id" => 46,
            "name" => "熊毛郡屋久島町",
            "romaji" => "kumagegunyakushimachou",
            "hiragana" => "くまげぐんやくしまちょう",
            "katakana" => "クマゲグンヤクシマチョウ",
            "katakana_half" => "ｸﾏｹﾞｸﾞﾝﾔｸｼﾏﾁｮｳ",
        ]);

        City::create([
            "id" => 1843,
            "prefecture_id" => 46,
            "name" => "大島郡大和村",
            "romaji" => "ooshimagunyamatoson",
            "hiragana" => "おおしまぐんやまとそん",
            "katakana" => "オオシマグンヤマトソン",
            "katakana_half" => "ｵｵｼﾏｸﾞﾝﾔﾏﾄｿﾝ",
        ]);

        City::create([
            "id" => 1844,
            "prefecture_id" => 46,
            "name" => "大島郡宇検村",
            "romaji" => "ooshimagunukenson",
            "hiragana" => "おおしまぐんうけんそん",
            "katakana" => "オオシマグンウケンソン",
            "katakana_half" => "ｵｵｼﾏｸﾞﾝｳｹﾝｿﾝ",
        ]);

        City::create([
            "id" => 1845,
            "prefecture_id" => 46,
            "name" => "大島郡瀬戸内町",
            "romaji" => "ooshimagunsetouchichou",
            "hiragana" => "おおしまぐんせとうちちょう",
            "katakana" => "オオシマグンセトウチチョウ",
            "katakana_half" => "ｵｵｼﾏｸﾞﾝｾﾄｳﾁﾁｮｳ",
        ]);

        City::create([
            "id" => 1846,
            "prefecture_id" => 46,
            "name" => "大島郡龍郷町",
            "romaji" => "ooshimaguntatsugouchou",
            "hiragana" => "おおしまぐんたつごうちょう",
            "katakana" => "オオシマグンタツゴウチョウ",
            "katakana_half" => "ｵｵｼﾏｸﾞﾝﾀﾂｺﾞｳﾁｮｳ",
        ]);

        City::create([
            "id" => 1847,
            "prefecture_id" => 46,
            "name" => "大島郡喜界町",
            "romaji" => "ooshimagunkikaichou",
            "hiragana" => "おおしまぐんきかいちょう",
            "katakana" => "オオシマグンキカイチョウ",
            "katakana_half" => "ｵｵｼﾏｸﾞﾝｷｶｲﾁｮｳ",
        ]);

        City::create([
            "id" => 1848,
            "prefecture_id" => 46,
            "name" => "大島郡徳之島町",
            "romaji" => "ooshimaguntokunoshimachou",
            "hiragana" => "おおしまぐんとくのしまちょう",
            "katakana" => "オオシマグントクノシマチョウ",
            "katakana_half" => "ｵｵｼﾏｸﾞﾝﾄｸﾉｼﾏﾁｮｳ",
        ]);

        City::create([
            "id" => 1849,
            "prefecture_id" => 46,
            "name" => "大島郡天城町",
            "romaji" => "ooshimagunamagichou",
            "hiragana" => "おおしまぐんあまぎちょう",
            "katakana" => "オオシマグンアマギチョウ",
            "katakana_half" => "ｵｵｼﾏｸﾞﾝｱﾏｷﾞﾁｮｳ",
        ]);

        City::create([
            "id" => 1850,
            "prefecture_id" => 46,
            "name" => "大島郡伊仙町",
            "romaji" => "ooshimagunisenchou",
            "hiragana" => "おおしまぐんいせんちょう",
            "katakana" => "オオシマグンイセンチョウ",
            "katakana_half" => "ｵｵｼﾏｸﾞﾝｲｾﾝﾁｮｳ",
        ]);

        City::create([
            "id" => 1851,
            "prefecture_id" => 46,
            "name" => "大島郡和泊町",
            "romaji" => "ooshimagunwadomarichou",
            "hiragana" => "おおしまぐんわどまりちょう",
            "katakana" => "オオシマグンワドマリチョウ",
            "katakana_half" => "ｵｵｼﾏｸﾞﾝﾜﾄﾞﾏﾘﾁｮｳ",
        ]);

        City::create([
            "id" => 1852,
            "prefecture_id" => 46,
            "name" => "大島郡知名町",
            "romaji" => "ooshimagunchinachou",
            "hiragana" => "おおしまぐんちなちょう",
            "katakana" => "オオシマグンチナチョウ",
            "katakana_half" => "ｵｵｼﾏｸﾞﾝﾁﾅﾁｮｳ",
        ]);

        City::create([
            "id" => 1853,
            "prefecture_id" => 46,
            "name" => "大島郡与論町",
            "romaji" => "ooshimagunyoronchou",
            "hiragana" => "おおしまぐんよろんちょう",
            "katakana" => "オオシマグンヨロンチョウ",
            "katakana_half" => "ｵｵｼﾏｸﾞﾝﾖﾛﾝﾁｮｳ",
        ]);

        City::create([
            "id" => 1854,
            "prefecture_id" => 47,
            "name" => "那覇市",
            "romaji" => "nahashi",
            "hiragana" => "なはし",
            "katakana" => "ナハシ",
            "katakana_half" => "ﾅﾊｼ",
        ]);

        City::create([
            "id" => 1855,
            "prefecture_id" => 47,
            "name" => "宜野湾市",
            "romaji" => "ginowanshi",
            "hiragana" => "ぎのわんし",
            "katakana" => "ギノワンシ",
            "katakana_half" => "ｷﾞﾉﾜﾝｼ",
        ]);

        City::create([
            "id" => 1856,
            "prefecture_id" => 47,
            "name" => "石垣市",
            "romaji" => "ishigakishi",
            "hiragana" => "いしがきし",
            "katakana" => "イシガキシ",
            "katakana_half" => "ｲｼｶﾞｷｼ",
        ]);

        City::create([
            "id" => 1857,
            "prefecture_id" => 47,
            "name" => "浦添市",
            "romaji" => "urasoeshi",
            "hiragana" => "うらそえし",
            "katakana" => "ウラソエシ",
            "katakana_half" => "ｳﾗｿｴｼ",
        ]);

        City::create([
            "id" => 1858,
            "prefecture_id" => 47,
            "name" => "名護市",
            "romaji" => "nagoshi",
            "hiragana" => "なごし",
            "katakana" => "ナゴシ",
            "katakana_half" => "ﾅｺﾞｼ",
        ]);

        City::create([
            "id" => 1859,
            "prefecture_id" => 47,
            "name" => "糸満市",
            "romaji" => "itomanshi",
            "hiragana" => "いとまんし",
            "katakana" => "イトマンシ",
            "katakana_half" => "ｲﾄﾏﾝｼ",
        ]);

        City::create([
            "id" => 1860,
            "prefecture_id" => 47,
            "name" => "沖縄市",
            "romaji" => "okinawashi",
            "hiragana" => "おきなわし",
            "katakana" => "オキナワシ",
            "katakana_half" => "ｵｷﾅﾜｼ",
        ]);

        City::create([
            "id" => 1861,
            "prefecture_id" => 47,
            "name" => "豊見城市",
            "romaji" => "tomigusukushi",
            "hiragana" => "とみぐすくし",
            "katakana" => "トミグスクシ",
            "katakana_half" => "ﾄﾐｸﾞｽｸｼ",
        ]);

        City::create([
            "id" => 1862,
            "prefecture_id" => 47,
            "name" => "うるま市",
            "romaji" => "urumashi",
            "hiragana" => "うるまし",
            "katakana" => "ウルマシ",
            "katakana_half" => "ｳﾙﾏｼ",
        ]);

        City::create([
            "id" => 1863,
            "prefecture_id" => 47,
            "name" => "宮古島市",
            "romaji" => "miyakojimashi",
            "hiragana" => "みやこじまし",
            "katakana" => "ミヤコジマシ",
            "katakana_half" => "ﾐﾔｺｼﾞﾏｼ",
        ]);

        City::create([
            "id" => 1864,
            "prefecture_id" => 47,
            "name" => "南城市",
            "romaji" => "nanjoushi",
            "hiragana" => "なんじょうし",
            "katakana" => "ナンジョウシ",
            "katakana_half" => "ﾅﾝｼﾞｮｳｼ",
        ]);

        City::create([
            "id" => 1865,
            "prefecture_id" => 47,
            "name" => "国頭郡国頭村",
            "romaji" => "kunigamigunkunigamison",
            "hiragana" => "くにがみぐんくにがみそん",
            "katakana" => "クニガミグンクニガミソン",
            "katakana_half" => "ｸﾆｶﾞﾐｸﾞﾝｸﾆｶﾞﾐｿﾝ",
        ]);

        City::create([
            "id" => 1866,
            "prefecture_id" => 47,
            "name" => "国頭郡大宜味村",
            "romaji" => "kunigamigunoogimison",
            "hiragana" => "くにがみぐんおおぎみそん",
            "katakana" => "クニガミグンオオギミソン",
            "katakana_half" => "ｸﾆｶﾞﾐｸﾞﾝｵｵｷﾞﾐｿﾝ",
        ]);

        City::create([
            "id" => 1867,
            "prefecture_id" => 47,
            "name" => "国頭郡東村",
            "romaji" => "kunigamigunhigashison",
            "hiragana" => "くにがみぐんひがしそん",
            "katakana" => "クニガミグンヒガシソン",
            "katakana_half" => "ｸﾆｶﾞﾐｸﾞﾝﾋｶﾞｼｿﾝ",
        ]);

        City::create([
            "id" => 1868,
            "prefecture_id" => 47,
            "name" => "国頭郡今帰仁村",
            "romaji" => "kunigamigunnakijinson",
            "hiragana" => "くにがみぐんなきじんそん",
            "katakana" => "クニガミグンナキジンソン",
            "katakana_half" => "ｸﾆｶﾞﾐｸﾞﾝﾅｷｼﾞﾝｿﾝ",
        ]);

        City::create([
            "id" => 1869,
            "prefecture_id" => 47,
            "name" => "国頭郡本部町",
            "romaji" => "kunigamigunmotobuchou",
            "hiragana" => "くにがみぐんもとぶちょう",
            "katakana" => "クニガミグンモトブチョウ",
            "katakana_half" => "ｸﾆｶﾞﾐｸﾞﾝﾓﾄﾌﾞﾁｮｳ",
        ]);

        City::create([
            "id" => 1870,
            "prefecture_id" => 47,
            "name" => "国頭郡恩納村",
            "romaji" => "kunigamigunonnason",
            "hiragana" => "くにがみぐんおんなそん",
            "katakana" => "クニガミグンオンナソン",
            "katakana_half" => "ｸﾆｶﾞﾐｸﾞﾝｵﾝﾅｿﾝ",
        ]);

        City::create([
            "id" => 1871,
            "prefecture_id" => 47,
            "name" => "国頭郡宜野座村",
            "romaji" => "kunigamigunginozason",
            "hiragana" => "くにがみぐんぎのざそん",
            "katakana" => "クニガミグンギノザソン",
            "katakana_half" => "ｸﾆｶﾞﾐｸﾞﾝｷﾞﾉｻﾞｿﾝ",
        ]);

        City::create([
            "id" => 1872,
            "prefecture_id" => 47,
            "name" => "国頭郡金武町",
            "romaji" => "kunigamigunkinchou",
            "hiragana" => "くにがみぐんきんちょう",
            "katakana" => "クニガミグンキンチョウ",
            "katakana_half" => "ｸﾆｶﾞﾐｸﾞﾝｷﾝﾁｮｳ",
        ]);

        City::create([
            "id" => 1873,
            "prefecture_id" => 47,
            "name" => "国頭郡伊江村",
            "romaji" => "kunigamigunieson",
            "hiragana" => "くにがみぐんいえそん",
            "katakana" => "クニガミグンイエソン",
            "katakana_half" => "ｸﾆｶﾞﾐｸﾞﾝｲｴｿﾝ",
        ]);

        City::create([
            "id" => 1874,
            "prefecture_id" => 47,
            "name" => "中頭郡読谷村",
            "romaji" => "nakagamigunyomitanson",
            "hiragana" => "なかがみぐんよみたんそん",
            "katakana" => "ナカガミグンヨミタンソン",
            "katakana_half" => "ﾅｶｶﾞﾐｸﾞﾝﾖﾐﾀﾝｿﾝ",
        ]);

        City::create([
            "id" => 1875,
            "prefecture_id" => 47,
            "name" => "中頭郡嘉手納町",
            "romaji" => "nakagamigunkadenachou",
            "hiragana" => "なかがみぐんかでなちょう",
            "katakana" => "ナカガミグンカデナチョウ",
            "katakana_half" => "ﾅｶｶﾞﾐｸﾞﾝｶﾃﾞﾅﾁｮｳ",
        ]);

        City::create([
            "id" => 1876,
            "prefecture_id" => 47,
            "name" => "中頭郡北谷町",
            "romaji" => "nakagamigunchatanchou",
            "hiragana" => "なかがみぐんちゃたんちょう",
            "katakana" => "ナカガミグンチャタンチョウ",
            "katakana_half" => "ﾅｶｶﾞﾐｸﾞﾝﾁｬﾀﾝﾁｮｳ",
        ]);

        City::create([
            "id" => 1877,
            "prefecture_id" => 47,
            "name" => "中頭郡北中城村",
            "romaji" => "nakagamigunkitanakagusukuson",
            "hiragana" => "なかがみぐんきたなかぐすくそん",
            "katakana" => "ナカガミグンキタナカグスクソン",
            "katakana_half" => "ﾅｶｶﾞﾐｸﾞﾝｷﾀﾅｶｸﾞｽｸｿﾝ",
        ]);

        City::create([
            "id" => 1878,
            "prefecture_id" => 47,
            "name" => "中頭郡中城村",
            "romaji" => "nakagamigunnakagusukuson",
            "hiragana" => "なかがみぐんなかぐすくそん",
            "katakana" => "ナカガミグンナカグスクソン",
            "katakana_half" => "ﾅｶｶﾞﾐｸﾞﾝﾅｶｸﾞｽｸｿﾝ",
        ]);

        City::create([
            "id" => 1879,
            "prefecture_id" => 47,
            "name" => "中頭郡西原町",
            "romaji" => "nakagamigunnishiharachou",
            "hiragana" => "なかがみぐんにしはらちょう",
            "katakana" => "ナカガミグンニシハラチョウ",
            "katakana_half" => "ﾅｶｶﾞﾐｸﾞﾝﾆｼﾊﾗﾁｮｳ",
        ]);

        City::create([
            "id" => 1880,
            "prefecture_id" => 47,
            "name" => "島尻郡与那原町",
            "romaji" => "shimajirigunyonabaruchou",
            "hiragana" => "しまじりぐんよなばるちょう",
            "katakana" => "シマジリグンヨナバルチョウ",
            "katakana_half" => "ｼﾏｼﾞﾘｸﾞﾝﾖﾅﾊﾞﾙﾁｮｳ",
        ]);

        City::create([
            "id" => 1881,
            "prefecture_id" => 47,
            "name" => "島尻郡南風原町",
            "romaji" => "shimajirigunhaebaruchou",
            "hiragana" => "しまじりぐんはえばるちょう",
            "katakana" => "シマジリグンハエバルチョウ",
            "katakana_half" => "ｼﾏｼﾞﾘｸﾞﾝﾊｴﾊﾞﾙﾁｮｳ",
        ]);

        City::create([
            "id" => 1882,
            "prefecture_id" => 47,
            "name" => "島尻郡渡嘉敷村",
            "romaji" => "shimajiriguntokashikison",
            "hiragana" => "しまじりぐんとかしきそん",
            "katakana" => "シマジリグントカシキソン",
            "katakana_half" => "ｼﾏｼﾞﾘｸﾞﾝﾄｶｼｷｿﾝ",
        ]);

        City::create([
            "id" => 1883,
            "prefecture_id" => 47,
            "name" => "島尻郡座間味村",
            "romaji" => "shimajirigunzamamison",
            "hiragana" => "しまじりぐんざまみそん",
            "katakana" => "シマジリグンザマミソン",
            "katakana_half" => "ｼﾏｼﾞﾘｸﾞﾝｻﾞﾏﾐｿﾝ",
        ]);

        City::create([
            "id" => 1884,
            "prefecture_id" => 47,
            "name" => "島尻郡粟国村",
            "romaji" => "shimajirigunagunison",
            "hiragana" => "しまじりぐんあぐにそん",
            "katakana" => "シマジリグンアグニソン",
            "katakana_half" => "ｼﾏｼﾞﾘｸﾞﾝｱｸﾞﾆｿﾝ",
        ]);

        City::create([
            "id" => 1885,
            "prefecture_id" => 47,
            "name" => "島尻郡渡名喜村",
            "romaji" => "shimajiriguntonakison",
            "hiragana" => "しまじりぐんとなきそん",
            "katakana" => "シマジリグントナキソン",
            "katakana_half" => "ｼﾏｼﾞﾘｸﾞﾝﾄﾅｷｿﾝ",
        ]);

        City::create([
            "id" => 1886,
            "prefecture_id" => 47,
            "name" => "島尻郡南大東村",
            "romaji" => "shimajirigunminamidaitouson",
            "hiragana" => "しまじりぐんみなみだいとうそん",
            "katakana" => "シマジリグンミナミダイトウソン",
            "katakana_half" => "ｼﾏｼﾞﾘｸﾞﾝﾐﾅﾐﾀﾞｲﾄｳｿﾝ",
        ]);

        City::create([
            "id" => 1887,
            "prefecture_id" => 47,
            "name" => "島尻郡北大東村",
            "romaji" => "shimajirigunkitadaitouson",
            "hiragana" => "しまじりぐんきただいとうそん",
            "katakana" => "シマジリグンキタダイトウソン",
            "katakana_half" => "ｼﾏｼﾞﾘｸﾞﾝｷﾀﾀﾞｲﾄｳｿﾝ",
        ]);

        City::create([
            "id" => 1888,
            "prefecture_id" => 47,
            "name" => "島尻郡伊平屋村",
            "romaji" => "shimajiriguniheyason",
            "hiragana" => "しまじりぐんいへやそん",
            "katakana" => "シマジリグンイヘヤソン",
            "katakana_half" => "ｼﾏｼﾞﾘｸﾞﾝｲﾍﾔｿﾝ",
        ]);

        City::create([
            "id" => 1889,
            "prefecture_id" => 47,
            "name" => "島尻郡伊是名村",
            "romaji" => "shimajirigunizenason",
            "hiragana" => "しまじりぐんいぜなそん",
            "katakana" => "シマジリグンイゼナソン",
            "katakana_half" => "ｼﾏｼﾞﾘｸﾞﾝｲｾﾞﾅｿﾝ",
        ]);

        City::create([
            "id" => 1890,
            "prefecture_id" => 47,
            "name" => "島尻郡久米島町",
            "romaji" => "shimajirigunkumejimachou",
            "hiragana" => "しまじりぐんくめじまちょう",
            "katakana" => "シマジリグンクメジマチョウ",
            "katakana_half" => "ｼﾏｼﾞﾘｸﾞﾝｸﾒｼﾞﾏﾁｮｳ",
        ]);

        City::create([
            "id" => 1891,
            "prefecture_id" => 47,
            "name" => "島尻郡八重瀬町",
            "romaji" => "shimajirigunyaesechou",
            "hiragana" => "しまじりぐんやえせちょう",
            "katakana" => "シマジリグンヤエセチョウ",
            "katakana_half" => "ｼﾏｼﾞﾘｸﾞﾝﾔｴｾﾁｮｳ",
        ]);

        City::create([
            "id" => 1892,
            "prefecture_id" => 47,
            "name" => "宮古郡多良間村",
            "romaji" => "miyakoguntaramason",
            "hiragana" => "みやこぐんたらまそん",
            "katakana" => "ミヤコグンタラマソン",
            "katakana_half" => "ﾐﾔｺｸﾞﾝﾀﾗﾏｿﾝ",
        ]);

        City::create([
            "id" => 1893,
            "prefecture_id" => 47,
            "name" => "八重山郡竹富町",
            "romaji" => "yaeyamaguntaketomichou",
            "hiragana" => "やえやまぐんたけとみちょう",
            "katakana" => "ヤエヤマグンタケトミチョウ",
            "katakana_half" => "ﾔｴﾔﾏｸﾞﾝﾀｹﾄﾐﾁｮｳ",
        ]);

        City::create([
            "id" => 1894,
            "prefecture_id" => 47,
            "name" => "八重山郡与那国町",
            "romaji" => "yaeyamagunyonagunichou",
            "hiragana" => "やえやまぐんよなぐにちょう",
            "katakana" => "ヤエヤマグンヨナグニチョウ",
            "katakana_half" => "ﾔｴﾔﾏｸﾞﾝﾖﾅｸﾞﾆﾁｮｳ",
        ]);
    }
}
