<?php

namespace Database\Seeders;

use App\Models\Prefecture;
use Illuminate\Database\Seeder;

class PrefectureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Prefecture::create([
            "id" => 1,
            "name" => "北海道",
            "romaji" => "hokkaidou",
            "hiragana" => "ほっかいどう",
            "katakana" => "ホッカイドウ",
            "katakana_half" => "ﾎｯｶｲﾄﾞｳ",
        ]);

        Prefecture::create([
            "id" => 2,
            "name" => "青森県",
            "romaji" => "aomoriken",
            "hiragana" => "あおもりけん",
            "katakana" => "アオモリケン",
            "katakana_half" => "ｱｵﾓﾘｹﾝ",
        ]);

        Prefecture::create([
            "id" => 3,
            "name" => "岩手県",
            "romaji" => "iwateken",
            "hiragana" => "いわてけん",
            "katakana" => "イワテケン",
            "katakana_half" => "ｲﾜﾃｹﾝ",
        ]);

        Prefecture::create([
            "id" => 4,
            "name" => "宮城県",
            "romaji" => "miyagiken",
            "hiragana" => "みやぎけん",
            "katakana" => "ミヤギケン",
            "katakana_half" => "ﾐﾔｷﾞｹﾝ",
        ]);

        Prefecture::create([
            "id" => 5,
            "name" => "秋田県",
            "romaji" => "akitaken",
            "hiragana" => "あきたけん",
            "katakana" => "アキタケン",
            "katakana_half" => "ｱｷﾀｹﾝ",
        ]);

        Prefecture::create([
            "id" => 6,
            "name" => "山形県",
            "romaji" => "yamagataken",
            "hiragana" => "やまがたけん",
            "katakana" => "ヤマガタケン",
            "katakana_half" => "ﾔﾏｶﾞﾀｹﾝ",
        ]);

        Prefecture::create([
            "id" => 7,
            "name" => "福島県",
            "romaji" => "fukushimaken",
            "hiragana" => "ふくしまけん",
            "katakana" => "フクシマケン",
            "katakana_half" => "ﾌｸｼﾏｹﾝ",
        ]);

        Prefecture::create([
            "id" => 8,
            "name" => "茨城県",
            "romaji" => "ibarakiken",
            "hiragana" => "いばらきけん",
            "katakana" => "イバラキケン",
            "katakana_half" => "ｲﾊﾞﾗｷｹﾝ",
        ]);

        Prefecture::create([
            "id" => 9,
            "name" => "栃木県",
            "romaji" => "tochigiken",
            "hiragana" => "とちぎけん",
            "katakana" => "トチギケン",
            "katakana_half" => "ﾄﾁｷﾞｹﾝ",
        ]);

        Prefecture::create([
            "id" => 10,
            "name" => "群馬県",
            "romaji" => "gunmaken",
            "hiragana" => "ぐんまけん",
            "katakana" => "グンマケン",
            "katakana_half" => "ｸﾞﾝﾏｹﾝ",
        ]);

        Prefecture::create([
            "id" => 11,
            "name" => "埼玉県",
            "romaji" => "saitamaken",
            "hiragana" => "さいたまけん",
            "katakana" => "サイタマケン",
            "katakana_half" => "ｻｲﾀﾏｹﾝ",
        ]);

        Prefecture::create([
            "id" => 12,
            "name" => "千葉県",
            "romaji" => "chibaken",
            "hiragana" => "ちばけん",
            "katakana" => "チバケン",
            "katakana_half" => "ﾁﾊﾞｹﾝ",
        ]);

        Prefecture::create([
            "id" => 13,
            "name" => "東京都",
            "romaji" => "toukyouto",
            "hiragana" => "とうきょうと",
            "katakana" => "トウキョウト",
            "katakana_half" => "ﾄｳｷｮｳﾄ",
        ]);

        Prefecture::create([
            "id" => 14,
            "name" => "神奈川県",
            "romaji" => "kanagawaken",
            "hiragana" => "かながわけん",
            "katakana" => "カナガワケン",
            "katakana_half" => "ｶﾅｶﾞﾜｹﾝ",
        ]);

        Prefecture::create([
            "id" => 15,
            "name" => "新潟県",
            "romaji" => "niigataken",
            "hiragana" => "にいがたけん",
            "katakana" => "ニイガタケン",
            "katakana_half" => "ﾆｲｶﾞﾀｹﾝ",
        ]);

        Prefecture::create([
            "id" => 16,
            "name" => "富山県",
            "romaji" => "toyamaken",
            "hiragana" => "とやまけん",
            "katakana" => "トヤマケン",
            "katakana_half" => "ﾄﾔﾏｹﾝ",
        ]);

        Prefecture::create([
            "id" => 17,
            "name" => "石川県",
            "romaji" => "ishikawaken",
            "hiragana" => "いしかわけん",
            "katakana" => "イシカワケン",
            "katakana_half" => "ｲｼｶﾜｹﾝ",
        ]);

        Prefecture::create([
            "id" => 18,
            "name" => "福井県",
            "romaji" => "fukuiken",
            "hiragana" => "ふくいけん",
            "katakana" => "フクイケン",
            "katakana_half" => "ﾌｸｲｹﾝ",
        ]);

        Prefecture::create([
            "id" => 19,
            "name" => "山梨県",
            "romaji" => "yamanashiken",
            "hiragana" => "やまなしけん",
            "katakana" => "ヤマナシケン",
            "katakana_half" => "ﾔﾏﾅｼｹﾝ",
        ]);

        Prefecture::create([
            "id" => 20,
            "name" => "長野県",
            "romaji" => "naganoken",
            "hiragana" => "ながのけん",
            "katakana" => "ナガノケン",
            "katakana_half" => "ﾅｶﾞﾉｹﾝ",
        ]);

        Prefecture::create([
            "id" => 21,
            "name" => "岐阜県",
            "romaji" => "gifuken",
            "hiragana" => "ぎふけん",
            "katakana" => "ギフケン",
            "katakana_half" => "ｷﾞﾌｹﾝ",
        ]);

        Prefecture::create([
            "id" => 22,
            "name" => "静岡県",
            "romaji" => "shizuokaken",
            "hiragana" => "しずおかけん",
            "katakana" => "シズオカケン",
            "katakana_half" => "ｼｽﾞｵｶｹﾝ",
        ]);

        Prefecture::create([
            "id" => 23,
            "name" => "愛知県",
            "romaji" => "aichiken",
            "hiragana" => "あいちけん",
            "katakana" => "アイチケン",
            "katakana_half" => "ｱｲﾁｹﾝ",
        ]);

        Prefecture::create([
            "id" => 24,
            "name" => "三重県",
            "romaji" => "mieken",
            "hiragana" => "みえけん",
            "katakana" => "ミエケン",
            "katakana_half" => "ﾐｴｹﾝ",
        ]);

        Prefecture::create([
            "id" => 25,
            "name" => "滋賀県",
            "romaji" => "shigaken",
            "hiragana" => "しがけん",
            "katakana" => "シガケン",
            "katakana_half" => "ｼｶﾞｹﾝ",
        ]);

        Prefecture::create([
            "id" => 26,
            "name" => "京都府",
            "romaji" => "kyoutofu",
            "hiragana" => "きょうとふ",
            "katakana" => "キョウトフ",
            "katakana_half" => "ｷｮｳﾄﾌ",
        ]);

        Prefecture::create([
            "id" => 27,
            "name" => "大阪府",
            "romaji" => "oosakafu",
            "hiragana" => "おおさかふ",
            "katakana" => "オオサカフ",
            "katakana_half" => "ｵｵｻｶﾌ",
        ]);

        Prefecture::create([
            "id" => 28,
            "name" => "兵庫県",
            "romaji" => "hyougoken",
            "hiragana" => "ひょうごけん",
            "katakana" => "ヒョウゴケン",
            "katakana_half" => "ﾋｮｳｺﾞｹﾝ",
        ]);

        Prefecture::create([
            "id" => 29,
            "name" => "奈良県",
            "romaji" => "naraken",
            "hiragana" => "ならけん",
            "katakana" => "ナラケン",
            "katakana_half" => "ﾅﾗｹﾝ",
        ]);

        Prefecture::create([
            "id" => 30,
            "name" => "和歌山県",
            "romaji" => "wakayamaken",
            "hiragana" => "わかやまけん",
            "katakana" => "ワカヤマケン",
            "katakana_half" => "ﾜｶﾔﾏｹﾝ",
        ]);

        Prefecture::create([
            "id" => 31,
            "name" => "鳥取県",
            "romaji" => "tottoriken",
            "hiragana" => "とっとりけん",
            "katakana" => "トットリケン",
            "katakana_half" => "ﾄｯﾄﾘｹﾝ",
        ]);

        Prefecture::create([
            "id" => 32,
            "name" => "島根県",
            "romaji" => "shimaneken",
            "hiragana" => "しまねけん",
            "katakana" => "シマネケン",
            "katakana_half" => "ｼﾏﾈｹﾝ",
        ]);

        Prefecture::create([
            "id" => 33,
            "name" => "岡山県",
            "romaji" => "okayamaken",
            "hiragana" => "おかやまけん",
            "katakana" => "オカヤマケン",
            "katakana_half" => "ｵｶﾔﾏｹﾝ",
        ]);

        Prefecture::create([
            "id" => 34,
            "name" => "広島県",
            "romaji" => "hiroshimaken",
            "hiragana" => "ひろしまけん",
            "katakana" => "ヒロシマケン",
            "katakana_half" => "ﾋﾛｼﾏｹﾝ",
        ]);

        Prefecture::create([
            "id" => 35,
            "name" => "山口県",
            "romaji" => "yamaguchiken",
            "hiragana" => "やまぐちけん",
            "katakana" => "ヤマグチケン",
            "katakana_half" => "ﾔﾏｸﾞﾁｹﾝ",
        ]);

        Prefecture::create([
            "id" => 36,
            "name" => "徳島県",
            "romaji" => "tokushimaken",
            "hiragana" => "とくしまけん",
            "katakana" => "トクシマケン",
            "katakana_half" => "ﾄｸｼﾏｹﾝ",
        ]);

        Prefecture::create([
            "id" => 37,
            "name" => "香川県",
            "romaji" => "kagawaken",
            "hiragana" => "かがわけん",
            "katakana" => "カガワケン",
            "katakana_half" => "ｶｶﾞﾜｹﾝ",
        ]);

        Prefecture::create([
            "id" => 38,
            "name" => "愛媛県",
            "romaji" => "ehimeken",
            "hiragana" => "えひめけん",
            "katakana" => "エヒメケン",
            "katakana_half" => "ｴﾋﾒｹﾝ",
        ]);

        Prefecture::create([
            "id" => 39,
            "name" => "高知県",
            "romaji" => "kouchiken",
            "hiragana" => "こうちけん",
            "katakana" => "コウチケン",
            "katakana_half" => "ｺｳﾁｹﾝ",
        ]);

        Prefecture::create([
            "id" => 40,
            "name" => "福岡県",
            "romaji" => "fukuokaken",
            "hiragana" => "ふくおかけん",
            "katakana" => "フクオカケン",
            "katakana_half" => "ﾌｸｵｶｹﾝ",
        ]);

        Prefecture::create([
            "id" => 41,
            "name" => "佐賀県",
            "romaji" => "sagaken",
            "hiragana" => "さがけん",
            "katakana" => "サガケン",
            "katakana_half" => "ｻｶﾞｹﾝ",
        ]);

        Prefecture::create([
            "id" => 42,
            "name" => "長崎県",
            "romaji" => "nagasakiken",
            "hiragana" => "ながさきけん",
            "katakana" => "ナガサキケン",
            "katakana_half" => "ﾅｶﾞｻｷｹﾝ",
        ]);

        Prefecture::create([
            "id" => 43,
            "name" => "熊本県",
            "romaji" => "kumamotoken",
            "hiragana" => "くまもとけん",
            "katakana" => "クマモトケン",
            "katakana_half" => "ｸﾏﾓﾄｹﾝ",
        ]);

        Prefecture::create([
            "id" => 44,
            "name" => "大分県",
            "romaji" => "ooitaken",
            "hiragana" => "おおいたけん",
            "katakana" => "オオイタケン",
            "katakana_half" => "ｵｵｲﾀｹﾝ",
        ]);

        Prefecture::create([
            "id" => 45,
            "name" => "宮崎県",
            "romaji" => "miyazakiken",
            "hiragana" => "みやざきけん",
            "katakana" => "ミヤザキケン",
            "katakana_half" => "ﾐﾔｻﾞｷｹﾝ",
        ]);

        Prefecture::create([
            "id" => 46,
            "name" => "鹿児島県",
            "romaji" => "kagoshimaken",
            "hiragana" => "かごしまけん",
            "katakana" => "カゴシマケン",
            "katakana_half" => "ｶｺﾞｼﾏｹﾝ",
        ]);

        Prefecture::create([
            "id" => 47,
            "name" => "沖縄県",
            "romaji" => "okinawaken",
            "hiragana" => "おきなわけん",
            "katakana" => "オキナワケン",
            "katakana_half" => "ｵｷﾅﾜｹﾝ",
        ]);
    }
}
