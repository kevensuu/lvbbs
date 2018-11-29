@extends('www.layout')
@section('content')
@if(in_array($pageType, ['newest', 'recommend', 'excellent', 'noReply', 'lastReply']))
    @include('www.topics.nodes')
@elseif($pageType == 'nodes')
    @include('www.topics.node')
@endif
<div id="main" class="main-container container">
    <div class="row">
        <div class="col-md-9">
            <div class="topic-detail card">
                <div class="card-header media clearfix">
                    <div class="media-body">
                        <h1 class="media-heading">
                            <a class="node" href="{{route('topics.nodes', ['id'=>$detail->categorys_id])}}">{{$detail->belongsToCategorys->title}}</a>
                            <span class="title">{{$detail->title}}</span>
                        </h1>
                        <div class="info">
                            <a data-author="true" class="user-name" data-name="@if($detail->belongsToUser->nickname){{$detail->belongsToUser->nickname}}@else{{$detail->belongsToUser->name}}@endif" href="{{route('ucenter', ['id'=>$detail->users_id])}}">@if($detail->belongsToUser->nickname){{$detail->belongsToUser->nickname}}@else{{$detail->belongsToUser->name}}@endif</a>
                            <span class="hidden-mobile"></span><span> · </span>
                            <abbr class="timeago" title="{{$detail->created_at}}">{{date('Y-m-d', strtotime($detail->created_at))}}</abbr>
                            @if($detail->last_comment_users_id)
                            <span class="hidden-mobile"><span> · </span>最后由 <a class="user-name" data-name="@if($detail->belongsToCommentsUser->nickname){{$detail->belongsToCommentsUser->nickname}}@else{{$detail->belongsToCommentsUser->name}}@endif" href="/lanzhiheng">@if($detail->belongsToCommentsUser->nickname){{$detail->belongsToCommentsUser->nickname}}@else{{$detail->belongsToCommentsUser->name}}@endif</a> 回复于 <abbr class="timeago" title="{{$detail->last_comment_at}}">{{date('Y-m-d', strtotime($detail->last_comment_at))}}</abbr></span>
                            @endif
                            <span> · </span>{{$detail->views}} 次阅读
                        </div>
                    </div>
                    <div class="avatar media-right"><a title="yfractal (yang)" href="{{route('ucenter', ['id'=>$detail->users_id])}}"><img class="media-object avatar-48" src="{{$detail->belongsToUser->face}}" /></a></div>
                </div>
                @if($detail->is_recommend) <div class="label-awesome"><i class="fa fa-diamond awesome"></i> 本帖已被设为精华帖！</div> @endif
                <div class="card-body markdown markdown-toc">{!! $detail->hasoneTopicsDetail->topics_content !!}</div>
                <div class="card-footer clearfix">
                    <div class="opts">
                        <a title="赞" data-count="{{$detail->likes}}" data-state="deactive" data-type="Topic" data-id="{{$detail->id}}" class="likeable deactive" href="#"><i class='fa fa-heart'></i> <span>{{$detail->likes}} 个赞</span></a>
                        <a title="收藏" class="bookmark " data-id="{{$detail->id}}" href="#"><i class="fa fa-bookmark"></i> {{$detail->favorites}} 收藏</a>
                        <span class="pull-right opts"></span>
                    </div>
                </div>
            </div>
            @if($commentsList->count())
            <div id="replies" class="card">
                <div class="total card-header hide-ios">共收到 <b>{{$commentsTotal}}</b> 条回复</div>
                <div class="items card-body">
                    @foreach($commentsList as $value)
                    @if($value->is_delete == 0)
                    <div class="reply" data-id="{{$value->id}}" id="reply{{$value->floor}}">
                        <div id="reply-{{$value->id}}" data-floor="{{$value->floor}}">
                            <div class="avatar"><a title="@if($value->belongsToUser->nickname){{$value->belongsToUser->nickname}}@else{{$value->belongsToUser->name}}@endif" href="{{route('ucenter', ['id'=>$value->users_id])}}"><img class="media-object avatar-48" src="{{$value->belongsToUser->face}}" /></a></div>
                            <div class="infos">
                                <div class="info">
                                    <span class="name"><a class="user-name" data-name="@if($value->belongsToUser->nickname){{$value->belongsToUser->nickname}}@else{{$value->belongsToUser->name}}@endif" href="{{route('ucenter', ['id'=>$value->users_id])}}">@if($value->belongsToUser->nickname){{$value->belongsToUser->nickname}}@else{{$value->belongsToUser->name}}@endif</a></span>
                                    <span class="sub-info">
                                        <span class='floor'>#{{$value->floor}}</span> ·
                                        <a class="time" href="#"><abbr class="timeago" title="{{$value->created_at}}">{{date('Y-m-d', strtotime($value->created_at))}}</abbr></a>
                                    </span>
                                    <span class="opts pull-right">
                                      <span class="hideable">
                                        <a data-id="{{$value->id}}" data-login="chenge" title="回复此楼" class="btn-reply fa fa-mail-reply" href="#"></a>
                                      </span>
                                      <a title="赞" data-count="0" data-state="deactive" data-type="Reply" data-id="{{$value->id}}" class="likeable deactive" href="#"><i class='fa fa-heart'></i> <span>0 个赞</span></a>
                                    </span>
                                </div>
                                <div class="markdown">{!! $value->content !!}</div>
                            </div>
                        </div>
                    </div>
                    @else
                    <div class="reply reply-deleted" data-id="{{$value->id}}" id="reply{{$value->floor}}"><div id="reply-{{$value->id}}" data-floor="{{$value->floor}}"><div class="deleted text-center">{{$value->floor}}楼 已被删除</div></div></div>
                    @endif
                    @endforeach
                </div>
                <div class="card-footer clearfix">{!! $fpage !!}</div>
            </div>
            @else
            <div class="no-result">暂无回复。</div>
            @endif
            <div id="reply" class="card">
                <div class="card-header hide-ios">回帖</div>
                <div class="card-body">
                    <div class="editor-toolbar clearfix">
                        <div class="reply-to pull-right" style="display:none;">
                            <i class="fa fa-mail-reply" title="回复"></i>
                            <a href="#" class="user"></a>
                            <a href="#" class="close"><i class="fa fa-close"></i></a>
                        </div>
                        <div class="opts">
                            <a href="#" class="nav-link pickup-emoji"><i class="fa fa-smile-o"></i></a>
                            <span class="dropdown" id="dropdown-insert-codes">
      <a href="#editor-toolbar-insert-code" class="nav-link dropdown-toggle" data-toggle="dropdown" title="插入代码"><i class="fa fa-code"></i></a>
      <div class="dropdown-menu insert-codes" aria-labelledby="dropdown-insert-codes">
        <a class="dropdown-item" data-lang="ruby" href="#">Ruby</a><a class="dropdown-item" data-lang="erb" href="#">HTML / ERB</a><a class="dropdown-item" data-lang="scss" href="#">CSS / SCSS</a><a class="dropdown-item" data-lang="js" href="#">JavaScript</a><a class="dropdown-item" data-lang="yml" href="#">YAML</i></a><a class="dropdown-item" data-lang="coffee" href="#">CoffeeScript</a><a class="dropdown-item" data-lang="conf" href="#">Nginx / Redis <i>(.conf)</i></a><a class="dropdown-item" data-lang="python" href="#">Python</a><a class="dropdown-item" data-lang="php" href="#">PHP</a><a class="dropdown-item" data-lang="java" href="#">Java</a><a class="dropdown-item" data-lang="erlang" href="#">Erlang</a><a class="dropdown-item" data-lang="shell" href="#">Shell / Bash</a>
      </div>
    </span>
                            <a id="editor-upload-image" title="上传图片" class="nav-link" href="#"><i class='fa fa-image'></i> </a>
                            <a href="#" class="nav-link preview">预览</a>
                        </div>
                    </div>

                    <form id="new_reply" action="/topics/37750/replies" accept-charset="UTF-8" data-remote="true" method="post"><input name="utf8" type="hidden" value="&#x2713;" /><input type="hidden" name="authenticity_token" value="hL4ovWX/folImwBDjnMTYG/TzmFvaFWb+stMVkawizJvlJ8zvDGvv0vNgNr3ccm1zUqK1y6gReuQvcCW4t6NRQ==" />

                        <div class="form-group">
    <textarea class="topic-editor form-control" rows="4" tabindex="1" name="reply[body]" id="reply_body">
</textarea>
                        </div>
                        <input type="hidden" name="reply[reply_to_id]" id="reply_reply_to_id" />
                        <div class="submit-buttons">
                            <button type="submit" id="reply-button" class="btn btn-primary" tabindex="2", data-disable-with='提交回复'>提交回复</button>
                            <span class="help-inline" style="padding-left: 5px;" title="或者 Ctrl + Enter"><kbd>Command</kbd> + <kbd>Enter</kbd></span>

                            <div class="pull-right"><a href="/markdown" target="_blank">排版说明</a></div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="card">
                <div class="card-header">相关话题</div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><a href="/topics/37504">Erlang 入坑笔记 -- Erlang Process</a></li>
                    <li class="list-group-item"><a href="/topics/27419">Puppet Hacking Guide —— Puppet 的启动：守护进程</a></li>
                    <li class="list-group-item"><a href="/topics/33677">Erlang 的 RPC 模块代码分析</a></li>
                    <li class="list-group-item"><a href="/topics/33987">Ruby 的并发, 进程, 线程, GIL, EventMachine, Celluloid</a></li>
                    <li class="list-group-item"><a href="/topics/30208">Ruby 中的多进程与多线程</a></li>
                </ul>
            </div>

        </div>

        <div class="sidebar hidden-mobile col-md-3">
            <div id="topic-sidebar" data-spy="affix" data-offset-bottom="65">
                <div class="card">
                    <div class="card-body">
                        <a href="#" class="btn btn-default btn-block btn-sm btn-move-page" data-type="top"><i class="fa fa-arrow-up"></i></a>
                        <div class="buttons">
                            <div class="group likes opts">
                                <a title="赞" data-count="19" data-state="deactive" data-type="Topic" data-id="37750" class="likeable deactive" href="#"><i class='fa fa-heart'></i> <span>19 个赞</span></a>
                            </div>
                            <div class="group">
                                <div class="btn-group" role="group">
                                    <a data-id="37750" class="follow btn btn-default" href="#"><i class="fa fa-eye"></i> 关注</a>
                                    <a title="收藏" class="bookmark  btn btn-default" data-id="37750" href="#"><i class="fa fa-bookmark"></i> 收藏</a>
                                </div>
                            </div>
                        </div>
                        <hr />
                        <div class="group">
                            <div class='social-share-button' data-title='使用 Ruby 实现 Erlang Process -- 8s spawn 一百万 “process”' data-img=''
                                 data-url='' data-desc='' data-via=''>
                                <a rel="nofollow " data-site="twitter" class="ssb-icon ssb-twitter" onclick="return SocialShareButton.share(this);" title="分享到 Twitter" href="#"></a>
                                <a rel="nofollow " data-site="wechat" class="ssb-icon ssb-wechat" onclick="return SocialShareButton.share(this);" title="分享到 微信" data-wechat-footer="打开微信，点击底部的 “发现”，&lt;br/&gt; 使用 “扫一扫” 即可将网页分享至朋友圈。" href="#"></a>
                                <a rel="nofollow " data-site="facebook" class="ssb-icon ssb-facebook" onclick="return SocialShareButton.share(this);" title="分享到 Facebook" href="#"></a>
                                <a rel="nofollow " data-site="google_plus" class="ssb-icon ssb-google_plus" onclick="return SocialShareButton.share(this);" title="分享到 Google+" href="#"></a>
                                <a rel="nofollow " data-site="weibo" class="ssb-icon ssb-weibo" onclick="return SocialShareButton.share(this);" title="分享到 新浪微博" href="#"></a>
                                <a rel="nofollow " data-site="douban" class="ssb-icon ssb-douban" onclick="return SocialShareButton.share(this);" title="分享到 豆瓣" href="#"></a>
                            </div>
                        </div>
                        <hr />
                        <div class="reply-buttons"><div class="total">共收到 <b>{{$commentsTotal}}</b> 条回复</div></div><hr />
                        <div class="group opts">

                        </div>
                        <a href="#" class="btn btn-default btn-sm btn-block btn-move-page" data-type="bottom"><i class="fa fa-arrow-down"></i></a>
                    </div>
                </div>

                <div class="notify-updated">
                    <a class="update" href="#"><i class="fa fa-bell-o"></i> <b>有新回复！</b>点击这里立即载入</a>
                </div>
            </div>

        </div>
    </div>

</div>
@endsection