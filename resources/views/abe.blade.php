@extends($params["layout"])

@section('title')
    {{ $params["title"] }}
@endsection

@section('content')
    @if($params["page"] == "top")
        <div class="flex h-full mb-8">
            <section class="w-3/12">
                <div class="mx-auto w-80">
                    <div class="mt-24 mb-12">
                        <img src="http://abehiroshi.la.coocan.jp/abe-top-20190328-2.jpg" class="w-full" alt="">
                    </div>
                    <p>阿部 寛（あべ ひろし）</p>
                    <p>Hiroshi Abe</p>
                    <p>1964年6月22日生まれ</p>
                    <p>血液型 A型</p>
                    <p><a href="" class="text-blue-500 underline">プロフィール</a></p>
                    <p class="mt-4">
                        If you have any enquiries regarding my TV drama or film, or would like to make an enquiry concerning future projects, please do not hesitate to contact me through the following email address.
                    </p>
                    <p class="mt-4">
                        mail:<span class="underline text-blue-500">abe@exam-mail</span>
                    </p>
                    <p>所属:</p>
                    <p>株式会社オフィスA</p>
                    <p>107-0052</p>
                    <p>東京都港区赤坂9-5-29</p>
                    <p>赤坂ロイヤルマンション301</p>
                    <p>TEL : +81-3-6434-7140</p>
                    <p>FAX : +81-3-6434-7141</p>
                </div>
            </section>
            <section class="w-9/12">
                <h1 class="text-center text-4xl py-8">阿部 寛のホームページ</h1>
                <p class="text-right w-96 mx-auto mb-8">★★★　最新情報　★★★</p>
                <hr class="border-t-2 border-black">
                <div class="my-3">
                    <div class="flex gap-2 items-center">
                        <div class="w-1 h-1 rounded-full bg-white"></div>
                        <p>映画</p>
                    </div>
                    <div class="pl-20">
                        <p>「ショウタイムセブン」<strong class="font-bold text-red-600">New!</strong></p>
                        <p>2025年2月7日公開</p>
                    </div>
                </div>
                <hr class="border-t-2 border-black">
                <div class="my-3">
                    <div class="flex gap-2 items-center">
                        <div class="w-1 h-1 rounded-full bg-white"></div>
                        <p>TV</p>
                    </div>
                    <div class="pl-20 flex flex-col gap-4 mb-4">
                        <div>
                            <p>土曜ドラマ「<a href="" class="text-blue-600 underline">水平線のうた</a>」<strong class="font-bold text-red-600">New!</strong></p>
                        </div>
                        <div>
                            <p>◎本放送：ＮＨＫ総合2025年3月1日(土),8日(土) 22時～</p>
                            <p>◎再放送：総合2025年3月5日(水) 0:35～,12日(水) 0:35～</p>
                            <p class="pl-20">本放送の翌週火曜日の深夜になります。</p>
                            <p>◎BSP4K放送：2025年3月1日(土),8日(土) 9:25～</p>
                        </div>
                        <div>
                            <p class="text-blue-500 underline">スペシャルドラマ「坂の上の雲」</p>
                            <p>再放送のお知らせ</p>
                        </div>
                        <div>
                            <p>＜44分版＞</p>
                            <p>2024年9月8日より 毎週日曜日</p>
                            <p>午後11時から午後11時44分</p>
                            <p>全26回 総合テレビ</p>
                            <p>NHKプラスでもご覧いただけます。</p>
                        </div>
                        <div>
                            <p>＜89分版＞</p>
                            <p>2024年10月4日より 毎週金曜日</p>
                            <p>午後8時15分から午後9時44分</p>
                            <p>全13回</p>
                            <p>BSプレミアム4K</p>
                        </div>
                    </div>
                    <hr class="border-t-2 border-black">
                    <div class="my-3 flex flex-col gap-4">
                        <div>
                            <p>当サイトの内容、テキスト、画像等の無断転載・無断使用を固く禁じます。</p>
                            <p>また、まとめサイト等への引用を厳禁致します。</p>
                            <p>お問い合わせはメールでご連絡をお願い致します。</p>
                        </div>
                        <div>
                            <p>※最近、SNS上で阿部寛を名乗るアカウントがあるといった“なりすまし”の報告が寄せられておりますが、阿部本人は一切行っておりませんので、ご注意ください</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    @elseif($params["page"] == "movie")
        <p>映画出演</p>
    @elseif($params["page"] == "drama")
        <p>ドラマ出演</p>
    @elseif($params["page"] == "stage")
        <p>舞台出演</p>
    @elseif($params["page"] == "photo")
        <p>写真集</p>
    @elseif($params["page"] == "book")
        <p>出版本</p>
    @elseif($params["page"] == "admin")
        <p>管理者</p>
    @else
        <p>ページが見つかりません</p>
    @endif
@endsection