<html>
{{include './header.tpl'}}
<body>
{{include './header1.tpl'}}


<div class="container">
    <h1 class="t_nav"><span>不要轻易放弃。学习成长的路上，我们长路漫漫，只因学无止境。 </span><a href="/" class="n1">网站首页</a><a href="/" class="n2">学无止境</a></h1>
    <!--blogsbox begin-->
    <div class="blogsbox">

        {{foreach $data as $dataA}}

        <div class="blogs" data-scroll-reveal="enter bottom over 1s" >
            <h3 class="blogtitle"><a href="detail?id={{$dataA['id']}}" target=""> {{$dataA['small_title']}}</a></h3>
            <span class="blogpic"><a href="/" title=""><img src="/public/index/images/toppic01.jpg" alt=""></a></span>
            <p class="blogtext">{{$dataA['content']}}</p>
            <div class="bloginfo">
                <ul>
                    <li class="author"><a href="index/detail?id="."{{$dataA['id']}}"> {{$dataA['name']}}</a></li>
                    <li class="lmname"><a href="/">学无止境</a></li>
                    <li class="timer">{{$dataA['updated_at']}}</li>
                    <li class="view">4567已阅读</li>
                    <li class="like">9999</li>
                </ul>
            </div>
        </div>

        {{/foreach }}
        {{$pagination}}



    </div>
    <!--blogsbox end-->
    {{include './sidebar.tpl'}}
</div>
{{include './footer.tpl'}}
<a href="#" class="cd-top">Top</a>
</body>
</html>