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
            <div id="replies" class="card" data-last-floor="18">
                <div class="total card-header hide-ios">
                    共收到 <b>17</b> 条回复
                </div>
                <div class="items card-body">
                    <div class="reply" data-id="348444" id="reply1">
                        <div id="reply-348444" data-floor="1">
                            <div class="avatar"><a title="chenge (chenge)" href="/chenge"><img class="media-object avatar-48" src="https://l.ruby-china.com/user/avatar/4215.jpg!md" /></a></div>
                            <div class="infos">
                                <div class="info">
          <span class="name">
            <a class="user-name" data-name="chenge" href="/chenge">chenge</a>
          </span>
                                    <span class="sub-info">
            <span class='floor'>#1</span> ·
            <a class="time" href="#reply-348444"><abbr class="timeago" title="2018-11-11T19:10:05+08:00">2018年11月11日</abbr></a>
          </span>
                                    <span class="opts pull-right">
              <span class="hideable">
              <a class="edit fa fa-pencil" data-uid="4215" title="修改回帖" href="/topics/37750/replies/348444/edit"></a>
              <a data-id="348444" data-login="chenge" title="回复此楼" class="btn-reply fa fa-mail-reply" href="#"></a>
              </span>
              <a title="赞" data-count="1" data-state="deactive" data-type="Reply" data-id="348444" class="likeable deactive" href="#"><i class='fa fa-heart'></i> <span>1 个赞</span></a>
          </span>
                                </div>

                                <div class="markdown">
                                    <p>不错，通过Ruby可以更快捷地了解Erlang。学习下。</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="reply reply-system" data-id="348449" id="reply2">
                        <div id="reply-348449" data-floor="2">
                            <a title="jasl (Jasl)" href="/jasl"><img class="media-object avatar-16" src="https://l.ruby-china.com/user/avatar/1107.jpg!xs" /></a> <a class="user-name" data-name="Jasl" href="/jasl">jasl</a>
                            将本帖设为了精华贴

                            <span class='time'>11月12日 04:03</span>

                        </div>
                    </div>
                    <div class="reply" data-id="348468" id="reply3">
                        <div id="reply-348468" data-floor="3">
                            <div class="avatar"><a title="lilijreey (chuanshuo)" href="/lilijreey"><img class="media-object avatar-48" src="https://l.ruby-china.com/user/avatar/24996.jpg!md" /></a></div>
                            <div class="infos">
                                <div class="info">
          <span class="name">
            <a class="user-name" data-name="chuanshuo" href="/lilijreey">lilijreey</a>
          </span>
                                    <span class="sub-info">
            <span class='floor'>#3</span> ·
            <a class="time" href="#reply-348468"><abbr class="timeago" title="2018-11-12T23:53:01+08:00">2018年11月12日</abbr></a>
          </span>
                                    <span class="opts pull-right">
              <span class="hideable">
              <a class="edit fa fa-pencil" data-uid="24996" title="修改回帖" href="/topics/37750/replies/348468/edit"></a>
              <a data-id="348468" data-login="lilijreey" title="回复此楼" class="btn-reply fa fa-mail-reply" href="#"></a>
              </span>
              <a title="赞" data-count="1" data-state="deactive" data-type="Reply" data-id="348468" class="likeable deactive" href="#"><i class='fa fa-heart'></i> <span>1 个赞</span></a>
          </span>
                                </div>

                                <div class="markdown">
                                    <p>天壤之别， erlang的精髓在实现上。</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="reply" data-id="348470" id="reply4">
                        <div id="reply-348470" data-floor="4">
                            <div class="avatar"><a title="yfractal (yang)" href="/yfractal"><img class="media-object avatar-48" src="https://l.ruby-china.com/user/avatar/7072.jpg!md" /></a></div>
                            <div class="infos">
                                <div class="info">
          <span class="name">
            <a class="user-name" data-name="yang" href="/yfractal">yfractal</a>
          </span>
                                    <span class="sub-info">
            <span class='floor'>#4</span> ·
            <a class="time" href="#reply-348470"><abbr class="timeago" title="2018-11-13T07:44:17+08:00">2018年11月13日</abbr></a>
          </span>
                                    <span class="opts pull-right">
              <span class="hideable">
              <a class="edit fa fa-pencil" data-uid="7072" title="修改回帖" href="/topics/37750/replies/348470/edit"></a>
              <a data-id="348470" data-login="yfractal" title="回复此楼" class="btn-reply fa fa-mail-reply" href="#"></a>
              </span>
              <a title="赞" data-count="1" data-state="deactive" data-type="Reply" data-id="348470" class="likeable deactive" href="#"><i class='fa fa-heart'></i> <span>1 个赞</span></a>
          </span>
                                </div>
                                <div class="reply-to-block" data-reply-to-id="348468">
                                    <div class="info">
                                        对
                                        <a data-remote="true" href="/topics/37750/replies/348470/reply_to">
                                            <img class="media-object avatar-16" src="https://l.ruby-china.com/user/avatar/24996.jpg!xs" /><span class="user-name">lilijreey</span>
                                            <span class='reply-floor'></span>
                                        </a>      回复
                                    </div>
                                </div>

                                <div class="markdown">
                                    <p>一看你就特别了解 Erlang，来来具体说说？</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="reply" data-id="348534" id="reply5">
                        <div id="reply-348534" data-floor="5">
                            <div class="avatar"><a title="jimrokliu (Liujiang)" href="/jimrokliu"><img class="media-object avatar-48" src="https://ruby-china.org/system/letter_avatars/2/J/82_188_137/96.png" /></a></div>
                            <div class="infos">
                                <div class="info">
          <span class="name">
            <a class="user-name" data-name="Liujiang" href="/jimrokliu">jimrokliu</a>
          </span>
                                    <span class="sub-info">
            <span class='floor'>#5</span> ·
            <a class="time" href="#reply-348534"><abbr class="timeago" title="2018-11-14T13:28:32+08:00">2018年11月14日</abbr></a>
          </span>
                                    <span class="opts pull-right">
              <span class="hideable">
              <a class="edit fa fa-pencil" data-uid="1337" title="修改回帖" href="/topics/37750/replies/348534/edit"></a>
              <a data-id="348534" data-login="jimrokliu" title="回复此楼" class="btn-reply fa fa-mail-reply" href="#"></a>
              </span>
              <a title="赞" data-count="0" data-state="deactive" data-type="Reply" data-id="348534" class="likeable deactive" href="#"><i class='fa fa-heart'></i> <span></span></a>
          </span>
                                </div>

                                <div class="markdown">
                                    <p>erlang的调度是cpu时间片的，你不可以用for循环占住cpu，这是erlang的vm实现的，ruby这种完全做不到。</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="reply" data-id="348537" id="reply6">
                        <div id="reply-348537" data-floor="6">
                            <div class="avatar"><a title="jimrokliu (Liujiang)" href="/jimrokliu"><img class="media-object avatar-48" src="https://ruby-china.org/system/letter_avatars/2/J/82_188_137/96.png" /></a></div>
                            <div class="infos">
                                <div class="info">
          <span class="name">
            <a class="user-name" data-name="Liujiang" href="/jimrokliu">jimrokliu</a>
          </span>
                                    <span class="sub-info">
            <span class='floor'>#6</span> ·
            <a class="time" href="#reply-348537"><abbr class="timeago" title="2018-11-14T13:43:11+08:00">2018年11月14日</abbr></a>
          </span>
                                    <span class="opts pull-right">
              <span class="hideable">
              <a class="edit fa fa-pencil" data-uid="1337" title="修改回帖" href="/topics/37750/replies/348537/edit"></a>
              <a data-id="348537" data-login="jimrokliu" title="回复此楼" class="btn-reply fa fa-mail-reply" href="#"></a>
              </span>
              <a title="赞" data-count="0" data-state="deactive" data-type="Reply" data-id="348537" class="likeable deactive" href="#"><i class='fa fa-heart'></i> <span></span></a>
          </span>
                                </div>

                                <div class="markdown">
                                    <p>另外，erlang有一个大不一样的地方是actor 的崩溃不会危害整个vm，而且actor可以建立监督机制，监督的actor会收到子actor崩溃的信息。ruby没有这种机制，弄不好，整个程序栈都崩溃了，会让整个进程崩掉。</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="reply" data-id="348541" id="reply7">
                        <div id="reply-348541" data-floor="7">
                            <div class="avatar"><a title="yfractal (yang)" href="/yfractal"><img class="media-object avatar-48" src="https://l.ruby-china.com/user/avatar/7072.jpg!md" /></a></div>
                            <div class="infos">
                                <div class="info">
          <span class="name">
            <a class="user-name" data-name="yang" href="/yfractal">yfractal</a>
          </span>
                                    <span class="sub-info">
            <span class='floor'>#7</span> ·
            <a class="time" href="#reply-348541"><abbr class="timeago" title="2018-11-14T15:52:31+08:00">2018年11月14日</abbr></a>
          </span>
                                    <span class="opts pull-right">
              <span class="hideable">
              <a class="edit fa fa-pencil" data-uid="7072" title="修改回帖" href="/topics/37750/replies/348541/edit"></a>
              <a data-id="348541" data-login="yfractal" title="回复此楼" class="btn-reply fa fa-mail-reply" href="#"></a>
              </span>
              <a title="赞" data-count="0" data-state="deactive" data-type="Reply" data-id="348541" class="likeable deactive" href="#"><i class='fa fa-heart'></i> <span></span></a>
          </span>
                                </div>
                                <div class="reply-to-block" data-reply-to-id="348534">
                                    <div class="info">
                                        对
                                        <a data-remote="true" href="/topics/37750/replies/348541/reply_to">
                                            <img class="media-object avatar-16" src="https://ruby-china.org/system/letter_avatars/2/J/82_188_137/32.png" /><span class="user-name">jimrokliu</span>
                                            <span class='reply-floor'></span>
                                        </a>      回复
                                    </div>
                                </div>

                                <div class="markdown">
                                    <blockquote>
                                        <p>erlang 的调度是 cpu 时间片的</p>
                                    </blockquote>

                                    <p>这个是怎么得到的？The beam book 里写的是根据 reductions 做的，而 reductions 简单来说，是方法调用次数。OTP 里也能找到 <code>erts_current_reductions</code> 之类的方法。</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="reply" data-id="348544" id="reply8">
                        <div id="reply-348544" data-floor="8">
                            <div class="avatar"><a title="yfractal (yang)" href="/yfractal"><img class="media-object avatar-48" src="https://l.ruby-china.com/user/avatar/7072.jpg!md" /></a></div>
                            <div class="infos">
                                <div class="info">
          <span class="name">
            <a class="user-name" data-name="yang" href="/yfractal">yfractal</a>
          </span>
                                    <span class="sub-info">
            <span class='floor'>#8</span> ·
            <a class="time" href="#reply-348544"><abbr class="timeago" title="2018-11-14T16:08:26+08:00">2018年11月14日</abbr></a>
          </span>
                                    <span class="opts pull-right">
              <span class="hideable">
              <a class="edit fa fa-pencil" data-uid="7072" title="修改回帖" href="/topics/37750/replies/348544/edit"></a>
              <a data-id="348544" data-login="yfractal" title="回复此楼" class="btn-reply fa fa-mail-reply" href="#"></a>
              </span>
              <a title="赞" data-count="0" data-state="deactive" data-type="Reply" data-id="348544" class="likeable deactive" href="#"><i class='fa fa-heart'></i> <span></span></a>
          </span>
                                </div>
                                <div class="reply-to-block" data-reply-to-id="348537">
                                    <div class="info">
                                        对
                                        <a data-remote="true" href="/topics/37750/replies/348544/reply_to">
                                            <img class="media-object avatar-16" src="https://ruby-china.org/system/letter_avatars/2/J/82_188_137/32.png" /><span class="user-name">jimrokliu</span>
                                            <span class='reply-floor'></span>
                                        </a>      回复
                                    </div>
                                </div>

                                <div class="markdown">
                                    <p>哈哈，是这样的。如果 process 有异常的话，整个程序都会挂掉。不过处理起来也比较容易，执行的时候 catch 所有的异常就可以了，有异常，直接让 process 挂掉就可以。</p>

                                    <p>moitor 和 link 其实也可以实现。process resume 之后的状态如果是 dead 的话，这个 process 有 monitor 的话，就发 EXIT 消息就可以了。</p>

                                    <p>这些问题有想过，不过都没去实现。。。我目前觉得异步 I/O 是缺少的最关键的 feature。</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="reply" data-id="348573" id="reply9">
                        <div id="reply-348573" data-floor="9">
                            <div class="avatar"><a title="lanzhiheng (蓝智恒)" href="/lanzhiheng"><img class="media-object avatar-48" src="https://l.ruby-china.com/user/avatar/25043/744a59.png!md" /></a></div>
                            <div class="infos">
                                <div class="info">
          <span class="name">
            <a class="user-name" data-name="蓝智恒" href="/lanzhiheng">lanzhiheng</a>
          </span>
                                    <span class="sub-info">
            <span class='floor'>#9</span> ·
            <a class="time" href="#reply-348573"><abbr class="timeago" title="2018-11-15T08:26:40+08:00">2018年11月15日</abbr></a>
          </span>
                                    <span class="opts pull-right">
              <span class="hideable">
              <a class="edit fa fa-pencil" data-uid="25043" title="修改回帖" href="/topics/37750/replies/348573/edit"></a>
              <a data-id="348573" data-login="lanzhiheng" title="回复此楼" class="btn-reply fa fa-mail-reply" href="#"></a>
              </span>
              <a title="赞" data-count="0" data-state="deactive" data-type="Reply" data-id="348573" class="likeable deactive" href="#"><i class='fa fa-heart'></i> <span></span></a>
          </span>
                                </div>

                                <div class="markdown">
                                    <p><img title=":laughing:" alt="😆" src="https://twemoji.b0.upaiyun.com/2/svg/1f606.svg" class="twemoji"> 刚上Erlang的车7天。</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="reply" data-id="348585" id="reply10">
                        <div id="reply-348585" data-floor="10">
                            <div class="avatar"><a title="yfractal (yang)" href="/yfractal"><img class="media-object avatar-48" src="https://l.ruby-china.com/user/avatar/7072.jpg!md" /></a></div>
                            <div class="infos">
                                <div class="info">
          <span class="name">
            <a class="user-name" data-name="yang" href="/yfractal">yfractal</a>
          </span>
                                    <span class="sub-info">
            <span class='floor'>#10</span> ·
            <a class="time" href="#reply-348585"><abbr class="timeago" title="2018-11-15T12:17:45+08:00">2018年11月15日</abbr></a>
          </span>
                                    <span class="opts pull-right">
              <span class="hideable">
              <a class="edit fa fa-pencil" data-uid="7072" title="修改回帖" href="/topics/37750/replies/348585/edit"></a>
              <a data-id="348585" data-login="yfractal" title="回复此楼" class="btn-reply fa fa-mail-reply" href="#"></a>
              </span>
              <a title="赞" data-count="0" data-state="deactive" data-type="Reply" data-id="348585" class="likeable deactive" href="#"><i class='fa fa-heart'></i> <span></span></a>
          </span>
                                </div>
                                <div class="reply-to-block" data-reply-to-id="348573">
                                    <div class="info">
                                        对
                                        <a data-remote="true" href="/topics/37750/replies/348585/reply_to">
                                            <img class="media-object avatar-16" src="https://l.ruby-china.com/user/avatar/25043/744a59.png!xs" /><span class="user-name">lanzhiheng</span>
                                            <span class='reply-floor'></span>
                                        </a>      回复
                                    </div>
                                </div>

                                <div class="markdown">
                                    <p>欢迎入坑，其实 Elixir 挺好的。Erlang 语法太个性了。</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="reply" data-id="348595" id="reply11">
                        <div id="reply-348595" data-floor="11">
                            <div class="avatar"><a title="jimrokliu (Liujiang)" href="/jimrokliu"><img class="media-object avatar-48" src="https://ruby-china.org/system/letter_avatars/2/J/82_188_137/96.png" /></a></div>
                            <div class="infos">
                                <div class="info">
          <span class="name">
            <a class="user-name" data-name="Liujiang" href="/jimrokliu">jimrokliu</a>
          </span>
                                    <span class="sub-info">
            <span class='floor'>#11</span> ·
            <a class="time" href="#reply-348595"><abbr class="timeago" title="2018-11-15T22:06:42+08:00">2018年11月15日</abbr></a>
          </span>
                                    <span class="opts pull-right">
              <span class="hideable">
              <a class="edit fa fa-pencil" data-uid="1337" title="修改回帖" href="/topics/37750/replies/348595/edit"></a>
              <a data-id="348595" data-login="jimrokliu" title="回复此楼" class="btn-reply fa fa-mail-reply" href="#"></a>
              </span>
              <a title="赞" data-count="0" data-state="deactive" data-type="Reply" data-id="348595" class="likeable deactive" href="#"><i class='fa fa-heart'></i> <span></span></a>
          </span>
                                </div>
                                <div class="reply-to-block" data-reply-to-id="348541">
                                    <div class="info">
                                        对
                                        <a data-remote="true" href="/topics/37750/replies/348595/reply_to">
                                            <img class="media-object avatar-16" src="https://l.ruby-china.com/user/avatar/7072.jpg!xs" /><span class="user-name">yfractal</span>
                                            <span class='reply-floor'></span>
                                        </a>      回复
                                    </div>
                                </div>

                                <div class="markdown">
                                    <p>erlang是reductions，不是时间片，跟操作系统的调度混了。</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="reply" data-id="348598" id="reply12">
                        <div id="reply-348598" data-floor="12">
                            <div class="avatar"><a title="jjym (2622)" href="/jjym"><img class="media-object avatar-48" src="https://l.ruby-china.com/user/avatar/2622/6c4f25.jpg!md" /></a></div>
                            <div class="infos">
                                <div class="info">
          <span class="name">
            <a class="user-name" data-name="2622" href="/jjym">jjym</a>
          </span>
                                    <span class="sub-info">
            <span class='floor'>#12</span> ·
            <a class="time" href="#reply-348598"><abbr class="timeago" title="2018-11-16T00:25:00+08:00">2018年11月16日</abbr></a>
          </span>
                                    <span class="opts pull-right">
              <span class="hideable">
              <a class="edit fa fa-pencil" data-uid="2622" title="修改回帖" href="/topics/37750/replies/348598/edit"></a>
              <a data-id="348598" data-login="jjym" title="回复此楼" class="btn-reply fa fa-mail-reply" href="#"></a>
              </span>
              <a title="赞" data-count="1" data-state="deactive" data-type="Reply" data-id="348598" class="likeable deactive" href="#"><i class='fa fa-heart'></i> <span>1 个赞</span></a>
          </span>
                                </div>

                                <div class="markdown">
                                    <p>异步 IO 和轻量线程的两个 gem 可以了解下 </p>

                                    <p><a href="https://github.com/socketry/async" rel="nofollow" target="_blank">https://github.com/socketry/async</a></p>

                                    <p><a href="https://github.com/socketry/lightio" rel="nofollow" target="_blank">https://github.com/socketry/lightio</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="reply" data-id="348603" id="reply13">
                        <div id="reply-348603" data-floor="13">
                            <div class="avatar"><a title="yfractal (yang)" href="/yfractal"><img class="media-object avatar-48" src="https://l.ruby-china.com/user/avatar/7072.jpg!md" /></a></div>
                            <div class="infos">
                                <div class="info">
          <span class="name">
            <a class="user-name" data-name="yang" href="/yfractal">yfractal</a>
          </span>
                                    <span class="sub-info">
            <span class='floor'>#13</span> ·
            <a class="time" href="#reply-348603"><abbr class="timeago" title="2018-11-16T09:35:29+08:00">2018年11月16日</abbr></a>
          </span>
                                    <span class="opts pull-right">
              <span class="hideable">
              <a class="edit fa fa-pencil" data-uid="7072" title="修改回帖" href="/topics/37750/replies/348603/edit"></a>
              <a data-id="348603" data-login="yfractal" title="回复此楼" class="btn-reply fa fa-mail-reply" href="#"></a>
              </span>
              <a title="赞" data-count="0" data-state="deactive" data-type="Reply" data-id="348603" class="likeable deactive" href="#"><i class='fa fa-heart'></i> <span></span></a>
          </span>
                                </div>
                                <div class="reply-to-block" data-reply-to-id="348598">
                                    <div class="info">
                                        对
                                        <a data-remote="true" href="/topics/37750/replies/348603/reply_to">
                                            <img class="media-object avatar-16" src="https://l.ruby-china.com/user/avatar/2622/6c4f25.jpg!xs" /><span class="user-name">jjym</span>
                                            <span class='reply-floor'></span>
                                        </a>      回复
                                    </div>
                                </div>

                                <div class="markdown">
                                    <p>thx，第一个跑 demo 跑不起来，就放弃了…</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="reply" data-id="348606" id="reply14">
                        <div id="reply-348606" data-floor="14">
                            <div class="avatar"><a title="jjym (2622)" href="/jjym"><img class="media-object avatar-48" src="https://l.ruby-china.com/user/avatar/2622/6c4f25.jpg!md" /></a></div>
                            <div class="infos">
                                <div class="info">
          <span class="name">
            <a class="user-name" data-name="2622" href="/jjym">jjym</a>
          </span>
                                    <span class="sub-info">
            <span class='floor'>#14</span> ·
            <a class="time" href="#reply-348606"><abbr class="timeago" title="2018-11-16T11:33:14+08:00">2018年11月16日</abbr></a>
          </span>
                                    <span class="opts pull-right">
              <span class="hideable">
              <a class="edit fa fa-pencil" data-uid="2622" title="修改回帖" href="/topics/37750/replies/348606/edit"></a>
              <a data-id="348606" data-login="jjym" title="回复此楼" class="btn-reply fa fa-mail-reply" href="#"></a>
              </span>
              <a title="赞" data-count="0" data-state="deactive" data-type="Reply" data-id="348606" class="likeable deactive" href="#"><i class='fa fa-heart'></i> <span></span></a>
          </span>
                                </div>
                                <div class="reply-to-block" data-reply-to-id="348603">
                                    <div class="info">
                                        对
                                        <a data-remote="true" href="/topics/37750/replies/348606/reply_to">
                                            <img class="media-object avatar-16" src="https://l.ruby-china.com/user/avatar/7072.jpg!xs" /><span class="user-name">yfractal</span>
                                            <span class='reply-floor'></span>
                                        </a>      回复
                                    </div>
                                </div>

                                <div class="markdown">
                                    <p>应该没问题啊，这个库还是很稳定的，别用 master 分支，用 release 的 gem 来跑试试</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="reply" data-id="348607" id="reply15">
                        <div id="reply-348607" data-floor="15">
                            <div class="avatar"><a title="yfractal (yang)" href="/yfractal"><img class="media-object avatar-48" src="https://l.ruby-china.com/user/avatar/7072.jpg!md" /></a></div>
                            <div class="infos">
                                <div class="info">
          <span class="name">
            <a class="user-name" data-name="yang" href="/yfractal">yfractal</a>
          </span>
                                    <span class="sub-info">
            <span class='floor'>#15</span> ·
            <a class="time" href="#reply-348607"><abbr class="timeago" title="2018-11-16T11:45:09+08:00">2018年11月16日</abbr></a>
          </span>
                                    <span class="opts pull-right">
              <span class="hideable">
              <a class="edit fa fa-pencil" data-uid="7072" title="修改回帖" href="/topics/37750/replies/348607/edit"></a>
              <a data-id="348607" data-login="yfractal" title="回复此楼" class="btn-reply fa fa-mail-reply" href="#"></a>
              </span>
              <a title="赞" data-count="0" data-state="deactive" data-type="Reply" data-id="348607" class="likeable deactive" href="#"><i class='fa fa-heart'></i> <span></span></a>
          </span>
                                </div>
                                <div class="reply-to-block" data-reply-to-id="348606">
                                    <div class="info">
                                        对
                                        <a data-remote="true" href="/topics/37750/replies/348607/reply_to">
                                            <img class="media-object avatar-16" src="https://l.ruby-china.com/user/avatar/2622/6c4f25.jpg!xs" /><span class="user-name">jjym</span>
                                            <span class='reply-floor'></span>
                                        </a>      回复
                                    </div>
                                </div>

                                <div class="markdown">
                                    <p>哈，可能是 master 的原因，thx again。</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="reply" data-id="348676" id="reply17">
                        <div id="reply-348676" data-floor="17">
                            <div class="avatar"><a title="gehao (葛浩)" href="/gehao"><img class="media-object avatar-48" src="https://l.ruby-china.com/user/avatar/21568.jpg!md" /></a></div>
                            <div class="infos">
                                <div class="info">
          <span class="name">
            <a class="user-name" data-name="葛浩" href="/gehao">gehao</a>
          </span>
                                    <span class="sub-info">
            <span class='floor'>#17</span> ·
            <a class="time" href="#reply-348676"><abbr class="timeago" title="2018-11-19T00:09:05+08:00">2018年11月19日</abbr></a>
          </span>
                                    <span class="opts pull-right">
              <span class="hideable">
              <a class="edit fa fa-pencil" data-uid="21568" title="修改回帖" href="/topics/37750/replies/348676/edit"></a>
              <a data-id="348676" data-login="gehao" title="回复此楼" class="btn-reply fa fa-mail-reply" href="#"></a>
              </span>
              <a title="赞" data-count="0" data-state="deactive" data-type="Reply" data-id="348676" class="likeable deactive" href="#"><i class='fa fa-heart'></i> <span></span></a>
          </span>
                                </div>

                                <div class="markdown">
                                    <p><a href="/jasl" class="user-mention" title="@jasl"><i>@</i>jasl</a> <a href="/huacnlee" class="user-mention" title="@huacnlee"><i>@</i>huacnlee</a> 楼上广告赶紧删掉<img title=":joy:" alt="😂" src="https://twemoji.b0.upaiyun.com/2/svg/1f602.svg" class="twemoji"> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="reply" data-id="348677" id="reply18">
                        <div id="reply-348677" data-floor="18">
                            <div class="avatar"><a title="jasl (Jasl)" href="/jasl"><img class="media-object avatar-48" src="https://l.ruby-china.com/user/avatar/1107.jpg!md" /></a></div>
                            <div class="infos">
                                <div class="info">
          <span class="name">
            <a class="user-name" data-name="Jasl" href="/jasl">jasl</a>
          </span>
                                    <span class="sub-info">
            <span class='floor'>#18</span> ·
            <a class="time" href="#reply-348677"><abbr class="timeago" title="2018-11-19T00:17:38+08:00">2018年11月19日</abbr></a>
          </span>
                                    <span class="opts pull-right">
              <span class="hideable">
              <a class="edit fa fa-pencil" data-uid="1107" title="修改回帖" href="/topics/37750/replies/348677/edit"></a>
              <a data-id="348677" data-login="jasl" title="回复此楼" class="btn-reply fa fa-mail-reply" href="#"></a>
              </span>
              <a title="赞" data-count="0" data-state="deactive" data-type="Reply" data-id="348677" class="likeable deactive" href="#"><i class='fa fa-heart'></i> <span></span></a>
          </span>
                                </div>
                                <div class="reply-to-block" data-reply-to-id="348676">
                                    <div class="info">
                                        对
                                        <a data-remote="true" href="/topics/37750/replies/348677/reply_to">
                                            <img class="media-object avatar-16" src="https://l.ruby-china.com/user/avatar/21568.jpg!xs" /><span class="user-name">gehao</span>
                                            <span class='reply-floor'></span>
                                        </a>      回复
                                    </div>
                                </div>

                                <div class="markdown">
                                    <p>处理了。。。</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="reply" data-id="348678" id="reply18">
                        <div id="reply-348678" data-floor="18">
                            <div class="avatar"><a title="lanzhiheng (蓝智恒)" href="/lanzhiheng"><img class="media-object avatar-48" src="https://l.ruby-china.com/user/avatar/25043/744a59.png!md" /></a></div>
                            <div class="infos">
                                <div class="info">
          <span class="name">
            <a class="user-name" data-name="蓝智恒" href="/lanzhiheng">lanzhiheng</a>
          </span>
                                    <span class="sub-info">
            <span class='floor'>#18</span> ·
            <a class="time" href="#reply-348678"><abbr class="timeago" title="2018-11-19T00:34:17+08:00">2018年11月19日</abbr></a>
          </span>
                                    <span class="opts pull-right">
              <span class="hideable">
              <a class="edit fa fa-pencil" data-uid="25043" title="修改回帖" href="/topics/37750/replies/348678/edit"></a>
              <a data-id="348678" data-login="lanzhiheng" title="回复此楼" class="btn-reply fa fa-mail-reply" href="#"></a>
              </span>
              <a title="赞" data-count="1" data-state="deactive" data-type="Reply" data-id="348678" class="likeable deactive" href="#"><i class='fa fa-heart'></i> <span>1 个赞</span></a>
          </span>
                                </div>
                                <div class="reply-to-block" data-reply-to-id="348585">
                                    <div class="info">
                                        对
                                        <a data-remote="true" href="/topics/37750/replies/348678/reply_to">
                                            <img class="media-object avatar-16" src="https://l.ruby-china.com/user/avatar/7072.jpg!xs" /><span class="user-name">yfractal</span>
                                            <span class='reply-floor'></span>
                                        </a>      回复
                                    </div>
                                </div>

                                <div class="markdown">
                                    <p>之前有看过一下Elixir，看起来比较舒服。不过感觉如果上Elixir早晚还得回来看Erlang就干脆上Erlang先了。</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

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
                        <div class="reply-buttons">
                            <div class="total">
                                共收到 <b>17</b> 条回复
                            </div>

                        </div>
                        <hr />
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