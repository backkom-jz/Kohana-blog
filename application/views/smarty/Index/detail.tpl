<html>
{{include './header.tpl'}}
<body>
{{include './header1.tpl'}}


<div class="container">
    <h1 class="t_nav"><span>像“草根”一样，紧贴着地面，低调的存在，冬去春来，枯荣无恙。</span><a href="/" class="n1">网站首页</a><a href="/" class="n2">关于我</a></h1>
    <div class="news_infos">
        <ul>
            <p>{{$data[0]['title']}}</p>
        </ul>
    </div>
   {{include './sidebar.tpl'}}
</div>
{{include './footer.tpl'}}
<a href="#" class="cd-top">Top</a>
</body>
</html>