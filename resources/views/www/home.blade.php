@extends('www.layout')
@section('content')
    <div id="main" class="main-container container">


        <div class="hide-ios">
            <div class="card hidden-xs">
                <div class="card-body" style="text-align: center;">
                    <div class="media" style="width: 480px; margin:0px auto; text-align: left;">
                        <div class="media-left">
                            <img src="//twemoji.b0.upaiyun.com/2/svg/1f381.svg"  style="width: 55px;" />
                        </div>
                        <div class="media-body" style="line-height: 200%; text-align: center;">
                            <div style="font-size: 15px">
                                Ruby China 官方 <a href="https://gems.ruby-china.com" target="_blank">RubyGems 镜像</a>、<a href="/wiki/ruby-mirror">Ruby 镜像</a> 正式上线！
                            </div>
                            <div>
                                <code style="padding: 4px 10px;">gem source -a https://gems.ruby-china.com</code>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row home-icons hidden-sm hidden-xs">
                <div class="col-md-3">
                    <div class="item item1">
                        <div class="icon">
                            <a href="/topics"><i class="fa fa-comments-o"></i></a>
                        </div>
                        <div class="text">
                            <a href="/topics">Ruby 社区 <i class="pull-right fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="item item2">
                        <div class="icon">
                            <a href="/wiki"><i class="fa fa-support"></i></a>
                        </div>
                        <div class="text">
                            <a href="/wiki">技术文档 <i class="pull-right fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="item item3">
                        <div class="icon">
                            <a href="/jobs"><i class="fa fa-users"></i></a>
                        </div>
                        <div class="text">
                            <a href="/jobs" title="Ruby 相关的招聘与求职">招聘与求职 <i class="pull-right fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="item item4">
                        <div class="icon">
                            <a href="/topics/popular"><i class="fa fa-diamond"></i></a>
                        </div>
                        <div class="text">
                            <a href="/topics/popular">精华文章 <i class="pull-right fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="home_suggest_topics card">
            <div class="card-header hidden-mobile">社区精华帖</div>
            <div class="card-body topics row">
                <div class="col-md-6 topics-group">
                    @foreach($topicsList_l as $value)
                    <div class="topic media topic-{{$value->id}}">
                        <div class="avatar"><a title="@if($value->belongsToUser->nickname){{$value->belongsToUser->nickname}}@else{{$value->belongsToUser->name}}@endif" href="{{route('ucenter', ['id'=>$value->users_id])}}"><img class="media-object avatar-48" src="{{$value->belongsToUser->face}}" /></a></div>
                        <div class="infos media-body">
                            <div class="title media-heading"><a title="{{$value->title}}" href="{{route('topics.detail', ['id'=>$value->id])}}"><span class="node">{{$value->belongsToCategorys->title}}</span>{{$value->title}}</a></div>
                            <div class="info">
                                <a class="user-name" data-name="@if($value->belongsToUser->nickname){{$value->belongsToUser->nickname}}@else{{$value->belongsToUser->name}}@endif" href="{{route('ucenter', ['id'=>$value->users_id])}}">@if($value->belongsToUser->nickname){{$value->belongsToUser->nickname}}@else{{$value->belongsToUser->name}}@endif</a>
                                @if($value->last_comment_users_id)
                                <span class="hidden-mobile"> • 最后由 <a class="user-name" data-name="@if($value->belongsToCommentsUser->nickname){{$value->belongsToCommentsUser->nickname}}@else{{$value->belongsToCommentsUser->name}}@endif" href="{{route('ucenter', ['id'=>$value->last_comment_users_id])}}">@if($value->belongsToCommentsUser->nickname){{$value->belongsToCommentsUser->nickname}}@else{{$value->belongsToCommentsUser->name}}@endif</a> 回复于 <abbr class="timeago" title="{{$value->last_comment_at}}">{{date('Y-m-d', strtotime($value->last_comment_at))}}</abbr></span>
                                @else
                                <span>• 发布于 {{$value->created_at}}</span>
                                @endif
                            </div>
                        </div>
                        <div class="count media-right"><a class="state-false" href="{{route('topics.detail', ['id'=>$value->id])}}">1</a></div>
                    </div>
                    @endforeach
                </div>
                <div class="col-md-6 topics-group">
                    @foreach($topicsList_r as $value)
                        <div class="topic media topic-{{$value->id}}">
                            <div class="avatar"><a title="@if($value->belongsToUser->nickname){{$value->belongsToUser->nickname}}@else{{$value->belongsToUser->name}}@endif" href="{{route('ucenter', ['id'=>$value->users_id])}}"><img class="media-object avatar-48" src="{{$value->belongsToUser->face}}" /></a></div>
                            <div class="infos media-body">
                                <div class="title media-heading"><a title="{{$value->title}}" href="{{route('topics.detail', ['id'=>$value->id])}}"><span class="node">{{$value->belongsToCategorys->title}}</span>{{$value->title}}</a></div>
                                <div class="info">
                                    <a class="user-name" data-name="@if($value->belongsToUser->nickname){{$value->belongsToUser->nickname}}@else{{$value->belongsToUser->name}}@endif" href="{{route('ucenter', ['id'=>$value->users_id])}}">@if($value->belongsToUser->nickname){{$value->belongsToUser->nickname}}@else{{$value->belongsToUser->name}}@endif</a>
                                    @if($value->last_comment_users_id)
                                        <span class="hidden-mobile"> • 最后由 <a class="user-name" data-name="@if($value->belongsToCommentsUser->nickname){{$value->belongsToCommentsUser->nickname}}@else{{$value->belongsToCommentsUser->name}}@endif" href="{{route('ucenter', ['id'=>$value->last_comment_users_id])}}">@if($value->belongsToCommentsUser->nickname){{$value->belongsToCommentsUser->nickname}}@else{{$value->belongsToCommentsUser->name}}@endif</a> 回复于 <abbr class="timeago" title="{{$value->last_comment_at}}">{{date('Y-m-d', strtotime($value->last_comment_at))}}</abbr></span>
                                    @else
                                        <span>• 发布于 {{$value->created_at}}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="count media-right"><a class="state-false" href="{{route('topics.detail', ['id'=>$value->id])}}">1</a></div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="card-footer hidden-mobile"><a href="/topics/excellent">查看更多帖子...</a></div>
        </div>

        <div class="index-sections card">
            <div class="card-header">讨论节点分类导航</div>
            <div class="card-body">
                <div class="row node-list">
                    <div class="node media">
                        <label class="mr-2 media-left">Ruby</label>
                        <span class="nodes media-body">
            <span class="name"><a title="新手问题" data-id="52" href="/topics/node52">新手问题</a></span>
            <span class="name"><a title="招聘" data-id="25" href="/topics/node25">招聘</a></span>
            <span class="name"><a title="Rails" data-id="2" href="/topics/node2">Rails</a></span>
            <span class="name"><a title="Gem" data-id="3" href="/topics/node3">Gem</a></span>
            <span class="name"><a title="部署" data-id="44" href="/topics/node44">部署</a></span>
            <span class="name"><a title="JRuby" data-id="54" href="/topics/node54">JRuby</a></span>
            <span class="name"><a title="重构" data-id="29" href="/topics/node29">重构</a></span>
            <span class="name"><a title="Sinatra" data-id="43" href="/topics/node43">Sinatra</a></span>
            <span class="name"><a title="Ruby" data-id="1" href="/topics/node1">Ruby</a></span>
            <span class="name"><a title="测试" data-id="37" href="/topics/node37">测试</a></span>
            <span class="name"><a title="开源项目" data-id="47" href="/topics/node47">开源项目</a></span>
            <span class="name"><a title="求职" data-id="64" href="/topics/node64">求职</a></span>
            <span class="name"><a title="RVM/rbenv" data-id="45" href="/topics/node45">RVM/rbenv</a></span>
            <span class="name"><a title="mRuby" data-id="66" href="/topics/node66">mRuby</a></span>
        </span>
                    </div>
                    <div class="node media">
                        <label class="mr-2 media-left">其他语言</label>
                        <span class="nodes media-body">
            <span class="name"><a title="Crystal" data-id="67" href="/topics/node67">Crystal</a></span>
            <span class="name"><a title="Rust" data-id="70" href="/topics/node70">Rust</a></span>
            <span class="name"><a title="Erlang/Elixir" data-id="35" href="/topics/node35">Erlang/Elixir</a></span>
            <span class="name"><a title="Go" data-id="34" href="/topics/node34">Go</a></span>
            <span class="name"><a title="Haskell" data-id="59" href="/topics/node59">Haskell</a></span>
            <span class="name"><a title="Clojure" data-id="58" href="/topics/node58">Clojure</a></span>
            <span class="name"><a title="Dotnet" data-id="76" href="/topics/node76">Dotnet</a></span>
            <span class="name"><a title="Node.js" data-id="75" href="/topics/node75">Node.js</a></span>
            <span class="name"><a title="ObjC/Swift" data-id="48" href="/topics/node48">ObjC/Swift</a></span>
            <span class="name"><a title="Python" data-id="4" href="/topics/node4">Python</a></span>
        </span>
                    </div>
                    <div class="node media">
                        <label class="mr-2 media-left">Front-End</label>
                        <span class="nodes media-body">
            <span class="name"><a title="React" data-id="72" href="/topics/node72">React</a></span>
            <span class="name"><a title="EmberJS" data-id="73" href="/topics/node73">EmberJS</a></span>
            <span class="name"><a title="AngularJS" data-id="71" href="/topics/node71">AngularJS</a></span>
            <span class="name"><a title="HTML/CSS" data-id="41" href="/topics/node41">HTML/CSS</a></span>
            <span class="name"><a title="Vue" data-id="77" href="/topics/node77">Vue</a></span>
            <span class="name"><a title="JavaScript" data-id="5" href="/topics/node5">JavaScript</a></span>
        </span>
                    </div>
                    <div class="node media">
                        <label class="mr-2 media-left">Back-End</label>
                        <span class="nodes media-body">
            <span class="name"><a title="Git" data-id="11" href="/topics/node11">Git</a></span>
            <span class="name"><a title="运维" data-id="55" href="/topics/node55">运维</a></span>
            <span class="name"><a title="安全" data-id="60" href="/topics/node60">安全</a></span>
            <span class="name"><a title="搜索引擎" data-id="39" href="/topics/node39">搜索引擎</a></span>
            <span class="name"><a title="Redis" data-id="10" href="/topics/node10">Redis</a></span>
            <span class="name"><a title="云服务" data-id="20" href="/topics/node20">云服务</a></span>
            <span class="name"><a title="Mailer" data-id="46" href="/topics/node46">Mailer</a></span>
            <span class="name"><a title="Nginx" data-id="18" href="/topics/node18">Nginx</a></span>
            <span class="name"><a title="Linux" data-id="17" href="/topics/node17">Linux</a></span>
            <span class="name"><a title="数据库" data-id="12" href="/topics/node12">数据库</a></span>
            <span class="name"><a title="算法" data-id="40" href="/topics/node40">算法</a></span>
            <span class="name"><a title="MongoDB" data-id="9" href="/topics/node9">MongoDB</a></span>
        </span>
                    </div>
                    <div class="node media">
                        <label class="mr-2 media-left">Mobile</label>
                        <span class="nodes media-body">
            <span class="name"><a title="RubyMotion" data-id="74" href="/topics/node74">RubyMotion</a></span>
            <span class="name"><a title="Android" data-id="33" href="/topics/node33">Android</a></span>
            <span class="name"><a title="iOS" data-id="32" href="/topics/node32">iOS</a></span>
        </span>
                    </div>
                    <div class="node media">
                        <label class="mr-2 media-left">分享</label>
                        <span class="nodes media-body">
            <span class="name"><a title="瞎扯淡" data-id="27" href="/topics/node27">瞎扯淡</a></span>
            <span class="name"><a title="分享" data-id="26" href="/topics/node26">分享</a></span>
            <span class="name"><a title="开发工具" data-id="24" href="/topics/node24">开发工具</a></span>
            <span class="name"><a title="数学" data-id="53" href="/topics/node53">数学</a></span>
            <span class="name"><a title="健康" data-id="63" href="/topics/node63">健康</a></span>
            <span class="name"><a title="翻译" data-id="68" href="/topics/node68">翻译</a></span>
            <span class="name"><a title="产品推广" data-id="69" href="/topics/node69">产品推广</a></span>
            <span class="name"><a title="产品控" data-id="30" href="/topics/node30">产品控</a></span>
            <span class="name"><a title="移民" data-id="62" href="/topics/node62">移民</a></span>
            <span class="name"><a title="插画 / 设计" data-id="50" href="/topics/node50">插画 / 设计</a></span>
            <span class="name"><a title="书籍" data-id="38" href="/topics/node38">书籍</a></span>
            <span class="name"><a title="Mac" data-id="42" href="/topics/node42">Mac</a></span>
            <span class="name"><a title="创业" data-id="56" href="/topics/node56">创业</a></span>
            <span class="name"><a title="音乐" data-id="78" href="/topics/node78">音乐</a></span>
            <span class="name"><a title="其他" data-id="28" href="/topics/node28">其他</a></span>
        </span>
                    </div>
                    <div class="node media">
                        <label class="mr-2 media-left">Ruby China</label>
                        <span class="nodes media-body">
            <span class="name"><a title="公告" data-id="21" href="/topics/node21">公告</a></span>
            <span class="name"><a title="反馈" data-id="22" href="/topics/node22">反馈</a></span>
            <span class="name"><a title="Homeland" data-id="23" href="/topics/node23">Homeland</a></span>
            <span class="name"><a title="NoPoint" data-id="61" href="/topics/node61">NoPoint</a></span>
        </span>
                    </div>
                    <div class="node media">
                        <label class="mr-2 media-left">活动</label>
                        <span class="nodes media-body">
            <span class="name"><a title="RubyTuesday" data-id="31" href="/topics/node31">RubyTuesday</a></span>
            <span class="name"><a title="线下活动" data-id="57" href="/topics/node57">线下活动</a></span>
            <span class="name"><a title="RubyConf" data-id="51" href="/topics/node51">RubyConf</a></span>
        </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="index-locations card">
            <div class="card-header">热门城市</div>
            <div class="card-body location-list" style="text-align:center;">
                <span class="name"><a href="/users/city/%E5%8C%97%E4%BA%AC">北京</a></span>
                <span class="name"><a href="/users/city/%E4%B8%8A%E6%B5%B7">上海</a></span>
                <span class="name"><a href="/users/city/%E6%B7%B1%E5%9C%B3">深圳</a></span>
                <span class="name"><a href="/users/city/%E6%9D%AD%E5%B7%9E">杭州</a></span>
                <span class="name"><a href="/users/city/%E6%88%90%E9%83%BD">成都</a></span>
                <span class="name"><a href="/users/city/%E5%B9%BF%E5%B7%9E">广州</a></span>
                <span class="name"><a href="/users/city/%E6%AD%A6%E6%B1%89">武汉</a></span>
                <span class="name"><a href="/users/city/%E8%A5%BF%E5%AE%89">西安</a></span>
                <span class="name"><a href="/users/city/%E5%8D%97%E4%BA%AC">南京</a></span>
                <span class="name"><a href="/users/city/%E5%A4%A7%E8%BF%9E">大连</a></span>
                <span class="name"><a href="/users/city/%E9%95%BF%E6%B2%99">长沙</a></span>
                <span class="name"><a href="/users/city/%E5%8E%A6%E9%97%A8">厦门</a></span>
            </div>
        </div>


    </div>
@endsection