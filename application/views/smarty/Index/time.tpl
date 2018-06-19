<!doctype html>
<html>
{{include './header.tpl'}}
<body>
{{include './header1.tpl'}}
<div class="pagebg timer"> </div>
<div class="container">
    <h1 class="t_nav"><span>时光飞逝，机会就在我们眼前，何时找到了灵感，就要把握机遇，我们需要智慧和勇气去把握机会。</span><a href="/" class="n1">网站首页</a><a href="/" class="n2">时间轴</a></h1>
    <div class="timebox">
        <ul id="list" style="display:none;">
            {{foreach $data as $dataA}}
            <li>
                <span>{{date("Y-m-d",strtotime($dataA['created_at']))}}</span>
                <a href="index/detail?id="."{{$dataA['id']}}" title="{{$dataA['title']}}">
                {{$dataA['title']}}
                </a>
            </li>
            {{/foreach}}
        </ul>
        <ul id="list2">
        </ul>
        <script src="/public/index/js/page2.js"></script>
    </div>
</div>
{{include './footer.tpl'}}
<a href="#" class="cd-top">Top</a>
</body>
</html>
