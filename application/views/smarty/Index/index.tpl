<html >
<head>
    <title>{{$title}}</title>
    {{include './header.tpl'}}
</head>
<body>
    {{include './header1.tpl'}}

<article>
    <!--banner begin-->
    <div class="picsbox">
        <div class="banner">
            <div id="ban" class="fader">
                <li class="slide" ><a href="/" target="_blank"><img src="public/index/images/banner01.jpg"><span class="imginfo">别让这些闹心的套路，毁了你的网页设计!</span></a></li>
                <li class="slide" ><a href="/" target="_blank"><img src="public/index/images/banner02.jpg "><span class="imginfo">网页中图片属性固定宽度，如何用js改变大小</span></a></li>
                <li class="slide" ><a href="/" target="_blank"><img src="public/index/images/banner03.jpg"><span class="imginfo">个人博客，属于我的小世界！</span></a></li>
                <div class="fader_controls">
                    <div class="page prev" data-target="prev">&lsaquo;</div>
                    <div class="page next" data-target="next">&rsaquo;</div>
                    <ul class="pager_list">
                    </ul>
                </div>
            </div>
        </div>
        <!--banner end-->
        <div class="toppic">
            <li> <a href="/" target="_blank"> <i><img src="public/index/images/toppic01.jpg"></i>
                    <h2>别让这些闹心的套路，毁了你的网页设计!</h2>
                    <span>学无止境</span> </a> </li>
            <li> <a href="/" target="_blank"> <i><img src="public/index/images/zd01.jpg"></i>
                    <h2>个人博客，属于我的小世界！</h2>
                    <span>学无止境</span> </a> </li>
        </div>
    </div>
    <div class="blank"></div>

    <!--blogsbox begin-->
    <div class="blogsbox">


        {{foreach $data as $dataA}}

        <div class="blogs" data-scroll-reveal="enter bottom over 1s" >
            <h3 class="blogtitle"><a href="index/detail?id={{$dataA['id']}}" target=""> {{$dataA['small_title']}}</a></h3>
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

</article>
    {{include './footer.tpl'}}
<a href="#" class="cd-top">Top</a>
</body>
</html>
