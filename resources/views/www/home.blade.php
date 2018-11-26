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
                    <div class="topic media topic-37790">
                        <div class="avatar">
                            <a title="tuliang (涂亮)" href="/tuliang"><img class="media-object avatar-48" src="https://l.ruby-china.com/user/avatar/4482/e7a76c.jpg!md" /></a>
                        </div>
                        <div class="infos media-body">
                            <div class="title media-heading">
                                <a title="浅谈 Markdown 编译器" href="/topics/37790">
                                    <span class="node">瞎扯淡</span>
                                    浅谈 Markdown 编译器
                                </a>      <i title="精华帖" class="fa fa-diamond" data-toggle="tooltip"></i>

                            </div>
                            <div class="info">
                                <a class="user-name" data-name="涂亮" href="/tuliang">tuliang</a>
                                <span class="hidden-mobile">
      •
        最后由 <a class="user-name" data-name="lanzhiheng" href="/lanzhiheng">lanzhiheng</a> 回复于 <abbr class="timeago" title="2018-11-19T10:14:01+08:00">2018年11月19日</abbr>
      </span>
                            </div>
                        </div>
                        <div class="count media-right">
                            <a class="state-false" href="/topics/37790#reply-348685">1</a>
                        </div>
                    </div>
                    <div class="topic media topic-37750">
                        <div class="avatar">
                            <a title="yfractal (yang)" href="/yfractal"><img class="media-object avatar-48" src="https://l.ruby-china.com/user/avatar/7072.jpg!md" /></a>
                        </div>
                        <div class="infos media-body">
                            <div class="title media-heading">
                                <a title="使用 Ruby 实现 Erlang Process -- 8s spawn 一百万 “process”" href="/topics/37750">
                                    <span class="node">Ruby</span>
                                    使用 Ruby 实现 Erlang Process -- 8s spawn 一百万 “process”
                                </a>      <i title="精华帖" class="fa fa-diamond" data-toggle="tooltip"></i>

                            </div>
                            <div class="info">
                                <a class="user-name" data-name="yang" href="/yfractal">yfractal</a>
                                <span class="hidden-mobile">
      •
        最后由 <a class="user-name" data-name="lanzhiheng" href="/lanzhiheng">lanzhiheng</a> 回复于 <abbr class="timeago" title="2018-11-19T00:34:17+08:00">2018年11月19日</abbr>
      </span>
                            </div>
                        </div>
                        <div class="count media-right">
                            <a class="state-false" href="/topics/37750#reply-348678">17</a>
                        </div>
                    </div>
                    <div class="topic media topic-37712">
                        <div class="avatar">
                            <a title="hooopo (Hooopo)" href="/hooopo"><img class="media-object avatar-48" src="https://l.ruby-china.com/user/avatar/8.jpg!md" /></a>
                        </div>
                        <div class="infos media-body">
                            <div class="title media-heading">
                                <a title="一招秒杀 N+1 agg 问题" href="/topics/37712">
                                    <span class="node">Rails</span>
                                    一招秒杀 N+1 agg 问题
                                </a>      <i title="精华帖" class="fa fa-diamond" data-toggle="tooltip"></i>

                            </div>
                            <div class="info">
                                <a class="user-name" data-name="Hooopo" href="/hooopo">hooopo</a>
                                <span class="hidden-mobile">
      •
        最后由 <a class="user-name" data-name="ksec" href="/ksec">ksec</a> 回复于 <abbr class="timeago" title="2018-11-19T01:18:50+08:00">2018年11月19日</abbr>
      </span>
                            </div>
                        </div>
                        <div class="count media-right">
                            <a class="state-false" href="/topics/37712#reply-348679">25</a>
                        </div>
                    </div>
                    <div class="topic media topic-37638">
                        <div class="avatar">
                            <a title="freefishz (jacky.zhang)" href="/freefishz"><img class="media-object avatar-48" src="https://l.ruby-china.com/user/avatar/18852.jpg!md" /></a>
                        </div>
                        <div class="infos media-body">
                            <div class="title media-heading">
                                <a title="GitLab, Docker, Ruby on Rails CI/CD 实践" href="/topics/37638">
                                    <span class="node">运维</span>
                                    GitLab, Docker, Ruby on Rails CI/CD 实践
                                </a>      <i title="精华帖" class="fa fa-diamond" data-toggle="tooltip"></i>

                            </div>
                            <div class="info">
                                <a class="user-name" data-name="jacky.zhang" href="/freefishz">freefishz</a>
                                <span class="hidden-mobile">
      •
        最后由 <a class="user-name" data-name="HDJ" href="/HDJ">HDJ</a> 回复于 <abbr class="timeago" title="2018-10-21T20:38:58+08:00">2018年10月21日</abbr>
      </span>
                            </div>
                        </div>
                        <div class="count media-right">
                            <a class="state-false" href="/topics/37638#reply-347815">14</a>
                        </div>
                    </div>
                    <div class="topic media topic-37598">
                        <div class="avatar">
                            <a title="heroyct (yang)" href="/heroyct"><img class="media-object avatar-48" src="https://ruby-china.org/system/letter_avatars/2/H/69_208_226/96.png" /></a>
                        </div>
                        <div class="infos media-body">
                            <div class="title media-heading">
                                <a title="修改 Ruby 核心类和模块的方法" href="/topics/37598">
                                    <span class="node">Rails</span>
                                    修改 Ruby 核心类和模块的方法
                                </a>      <i title="精华帖" class="fa fa-diamond" data-toggle="tooltip"></i>

                            </div>
                            <div class="info">
                                <a class="user-name" data-name="yang" href="/heroyct">heroyct</a>
                                <span class="hidden-mobile">
      •
        最后由 <a class="user-name" data-name="heroyct" href="/heroyct">heroyct</a> 回复于 <abbr class="timeago" title="2018-10-31T21:18:27+08:00">2018年10月31日</abbr>
      </span>
                            </div>
                        </div>
                        <div class="count media-right">
                            <a class="state-false" href="/topics/37598#reply-348168">2</a>
                        </div>
                    </div>
                    <div class="topic media topic-37555">
                        <div class="avatar">
                            <a title="jasl (Jasl)" href="/jasl"><img class="media-object avatar-48" src="https://l.ruby-china.com/user/avatar/1107.jpg!md" /></a>
                        </div>
                        <div class="infos media-body">
                            <div class="title media-heading">
                                <a title="WorkflowCore —— SaaS 快速开发套件之工作流引擎" href="/topics/37555">
                                    <span class="node">Gem</span>
                                    WorkflowCore —— SaaS 快速开发套件之工作流引擎
                                </a>      <i title="精华帖" class="fa fa-diamond" data-toggle="tooltip"></i>

                            </div>
                            <div class="info">
                                <a class="user-name" data-name="Jasl" href="/jasl">jasl</a>
                                <span class="hidden-mobile">
      •
        最后由 <a class="user-name" data-name="jasl" href="/jasl">jasl</a> 回复于 <abbr class="timeago" title="2018-11-13T19:57:58+08:00">2018年11月13日</abbr>
      </span>
                            </div>
                        </div>
                        <div class="count media-right">
                            <a class="state-false" href="/topics/37555#reply-348512">32</a>
                        </div>
                    </div>
                    <div class="topic media topic-37548">
                        <div class="avatar">
                            <a title="xiaoronglv (Ryan Lv)" href="/xiaoronglv"><img class="media-object avatar-48" src="https://l.ruby-china.com/user/avatar/1638.jpg!md" /></a>
                        </div>
                        <div class="infos media-body">
                            <div class="title media-heading">
                                <a title="Feed 流设计 (一)：如何对多态内容进行抽象？" href="/topics/37548">
                                    <span class="node">分享</span>
                                    Feed 流设计 (一)：如何对多态内容进行抽象？
                                </a>      <i title="精华帖" class="fa fa-diamond" data-toggle="tooltip"></i>

                            </div>
                            <div class="info">
                                <a class="user-name" data-name="Ryan Lv" href="/xiaoronglv">xiaoronglv</a>
                                <span class="hidden-mobile">
      •
        最后由 <a class="user-name" data-name="yakjuly" href="/yakjuly">yakjuly</a> 回复于 <abbr class="timeago" title="2018-10-02T23:21:50+08:00">2018年10月02日</abbr>
      </span>
                            </div>
                        </div>
                        <div class="count media-right">
                            <a class="state-false" href="/topics/37548#reply-347179">3</a>
                        </div>
                    </div>
                    <div class="topic media topic-37522">
                        <div class="avatar">
                            <a title="hooopo (Hooopo)" href="/hooopo"><img class="media-object avatar-48" src="https://l.ruby-china.com/user/avatar/8.jpg!md" /></a>
                        </div>
                        <div class="infos media-body">
                            <div class="title media-heading">
                                <a title="基于 Postgres 实现一个推荐系统" href="/topics/37522">
                                    <span class="node">数据库</span>
                                    基于 Postgres 实现一个推荐系统
                                </a>      <i title="精华帖" class="fa fa-diamond" data-toggle="tooltip"></i>

                            </div>
                            <div class="info">
                                <a class="user-name" data-name="Hooopo" href="/hooopo">hooopo</a>
                                <span class="hidden-mobile">
      •
        最后由 <a class="user-name" data-name="posee" href="/posee">posee</a> 回复于 <abbr class="timeago" title="2018-10-25T09:51:16+08:00">2018年10月25日</abbr>
      </span>
                            </div>
                        </div>
                        <div class="count media-right">
                            <a class="state-false" href="/topics/37522#reply-347916">23</a>
                        </div>
                    </div>
                    <div class="topic media topic-37277">
                        <div class="avatar">
                            <a title="so_zengtao (我天真无邪)" href="/so_zengtao"><img class="media-object avatar-48" src="https://l.ruby-china.com/user/avatar/8658/abca79.jpg!md" /></a>
                        </div>
                        <div class="infos media-body">
                            <div class="title media-heading">
                                <a title="RabbitMQ Ruby 客户端 Bunny 部分源码解读 " href="/topics/37277">
                                    <span class="node">Ruby</span>
                                    RabbitMQ Ruby 客户端 Bunny 部分源码解读
                                </a>      <i title="精华帖" class="fa fa-diamond" data-toggle="tooltip"></i>

                            </div>
                            <div class="info">
                                <a class="user-name" data-name="我天真无邪" href="/so_zengtao">so_zengtao</a>
                                <span class="hidden-mobile">
      •
        最后由 <a class="user-name" data-name="imtoken" href="/imtoken">imtoken</a> 回复于 <abbr class="timeago" title="2018-09-11T17:55:57+08:00">2018年09月11日</abbr>
      </span>
                            </div>
                        </div>
                        <div class="count media-right">
                            <a class="state-false" href="/topics/37277#reply-346492">2</a>
                        </div>
                    </div>
                    <div class="topic media topic-37185">
                        <div class="avatar">
                            <a title="joho2017 (小冀)" href="/joho2017"><img class="media-object avatar-48" src="https://l.ruby-china.com/user/avatar/32218/f5ab0b.jpg!md" /></a>
                        </div>
                        <div class="infos media-body">
                            <div class="title media-heading">
                                <a title="Windows 下一键安装 Redmine" href="/topics/37185">
                                    <span class="node">部署</span>
                                    Windows 下一键安装 Redmine
                                </a>      <i title="精华帖" class="fa fa-diamond" data-toggle="tooltip"></i>

                            </div>
                            <div class="info">
                                <a class="user-name" data-name="小冀" href="/joho2017">joho2017</a>
                                <span class="hidden-mobile">
      •
        最后由 <a class="user-name" data-name="jwei" href="/jwei">jwei</a> 回复于 <abbr class="timeago" title="2018-07-20T16:15:53+08:00">2018年07月20日</abbr>
      </span>
                            </div>
                        </div>
                        <div class="count media-right">
                            <a class="state-false" href="/topics/37185#reply-344654">6</a>
                        </div>
                    </div>

                </div>

                <div class="col-md-6 topics-group">
                    <div class="topic media topic-37756">
                        <div class="avatar">
                            <a title="xiaocui (Evan)" href="/xiaocui"><img class="media-object avatar-48" src="https://l.ruby-china.com/user/avatar/10903.jpg!md" /></a>
                        </div>
                        <div class="infos media-body">
                            <div class="title media-heading">
                                <a title="Goreplay - 使用真实流量测试你的应用" href="/topics/37756">
                                    <span class="node">测试</span>
                                    Goreplay - 使用真实流量测试你的应用
                                </a>      <i title="精华帖" class="fa fa-diamond" data-toggle="tooltip"></i>

                            </div>
                            <div class="info">
                                <a class="user-name" data-name="Evan" href="/xiaocui">xiaocui</a>
                                <span class="hidden-mobile">
      •
        最后由 <a class="user-name" data-name="IDbbnn345" href="/IDbbnn345">IDbbnn345</a> 回复于 <abbr class="timeago" title="2018-11-18T21:21:16+08:00">2018年11月18日</abbr>
      </span>
                            </div>
                        </div>
                        <div class="count media-right">
                            <a class="state-false" href="/topics/37756#reply-348664">1</a>
                        </div>
                    </div>
                    <div class="topic media topic-37718">
                        <div class="avatar">
                            <a title="fredwu (Fred Wu)" href="/fredwu"><img class="media-object avatar-48" src="https://l.ruby-china.com/user/avatar/188.jpg!md" /></a>
                        </div>
                        <div class="infos media-body">
                            <div class="title media-heading">
                                <a title="&quot;Elixir Things&quot; - 今天在公司内部做的演讲，对 Elixir 感兴趣的可以来看看" href="/topics/37718">
                                    <span class="node">Erlang/Elixir</span>
                                    &quot;Elixir Things&quot; - 今天在公司内部做的演讲，对 Elixir 感兴趣的可以来看看
                                </a>      <i title="精华帖" class="fa fa-diamond" data-toggle="tooltip"></i>

                            </div>
                            <div class="info">
                                <a class="user-name" data-name="Fred Wu" href="/fredwu">fredwu</a>
                                <span class="hidden-mobile">
      •
        最后由 <a class="user-name" data-name="IDbbnn345" href="/IDbbnn345">IDbbnn345</a> 回复于 <abbr class="timeago" title="2018-11-18T21:22:45+08:00">2018年11月18日</abbr>
      </span>
                            </div>
                        </div>
                        <div class="count media-right">
                            <a class="state-false" href="/topics/37718#reply-348665">5</a>
                        </div>
                    </div>
                    <div class="topic media topic-37699">
                        <div class="avatar">
                            <a title="early (新手)" href="/early"><img class="media-object avatar-48" src="https://l.ruby-china.com/user/avatar/24967.jpg!md" /></a>
                        </div>
                        <div class="infos media-body">
                            <div class="title media-heading">
                                <a title="Ruby 的好朋友 -- jemalloc" href="/topics/37699">
                                    <span class="node">Ruby</span>
                                    Ruby 的好朋友 -- jemalloc
                                </a>      <i title="精华帖" class="fa fa-diamond" data-toggle="tooltip"></i>

                            </div>
                            <div class="info">
                                <a class="user-name" data-name="新手" href="/early">early</a>
                                <span class="hidden-mobile">
      •
        最后由 <a class="user-name" data-name="charleszhang" href="/charleszhang">charleszhang</a> 回复于 <abbr class="timeago" title="2018-11-15T20:56:48+08:00">2018年11月15日</abbr>
      </span>
                            </div>
                        </div>
                        <div class="count media-right">
                            <a class="state-false" href="/topics/37699#reply-348593">21</a>
                        </div>
                    </div>
                    <div class="topic media topic-37629">
                        <div class="avatar">
                            <a title="hooopo (Hooopo)" href="/hooopo"><img class="media-object avatar-48" src="https://l.ruby-china.com/user/avatar/8.jpg!md" /></a>
                        </div>
                        <div class="infos media-body">
                            <div class="title media-heading">
                                <a title="基于 Postgres 实现一个热度算法" href="/topics/37629">
                                    <span class="node">数据库</span>
                                    基于 Postgres 实现一个热度算法
                                </a>      <i title="精华帖" class="fa fa-diamond" data-toggle="tooltip"></i>

                            </div>
                            <div class="info">
                                <a class="user-name" data-name="Hooopo" href="/hooopo">hooopo</a>
                                <span class="hidden-mobile">
      •
        最后由 <a class="user-name" data-name="early" href="/early">early</a> 回复于 <abbr class="timeago" title="2018-10-16T16:48:24+08:00">2018年10月16日</abbr>
      </span>
                            </div>
                        </div>
                        <div class="count media-right">
                            <a class="state-false" href="/topics/37629#reply-347612">1</a>
                        </div>
                    </div>
                    <div class="topic media topic-37587">
                        <div class="avatar">
                            <a title="early (新手)" href="/early"><img class="media-object avatar-48" src="https://l.ruby-china.com/user/avatar/24967.jpg!md" /></a>
                        </div>
                        <div class="infos media-body">
                            <div class="title media-heading">
                                <a title="RabbitMQ / Sneaker 工作方式简析" href="/topics/37587">
                                    <span class="node">分享</span>
                                    RabbitMQ / Sneaker 工作方式简析
                                </a>      <i title="精华帖" class="fa fa-diamond" data-toggle="tooltip"></i>

                            </div>
                            <div class="info">
                                <a class="user-name" data-name="新手" href="/early">early</a>
                                <span class="hidden-mobile">
      •
        最后由 <a class="user-name" data-name="xjh0319" href="/xjh0319">xjh0319</a> 回复于 <abbr class="timeago" title="2018-10-08T15:37:58+08:00">2018年10月08日</abbr>
      </span>
                            </div>
                        </div>
                        <div class="count media-right">
                            <a class="state-false" href="/topics/37587#reply-347348">2</a>
                        </div>
                    </div>
                    <div class="topic media topic-37549">
                        <div class="avatar">
                            <a title="xiaoronglv (Ryan Lv)" href="/xiaoronglv"><img class="media-object avatar-48" src="https://l.ruby-china.com/user/avatar/1638.jpg!md" /></a>
                        </div>
                        <div class="infos media-body">
                            <div class="title media-heading">
                                <a title="Feed 流设计 (二)：拉模式 Vs 推模式" href="/topics/37549">
                                    <span class="node">分享</span>
                                    Feed 流设计 (二)：拉模式 Vs 推模式
                                </a>      <i title="精华帖" class="fa fa-diamond" data-toggle="tooltip"></i>

                            </div>
                            <div class="info">
                                <a class="user-name" data-name="Ryan Lv" href="/xiaoronglv">xiaoronglv</a>
                                <span class="hidden-mobile">
      •
        最后由 <a class="user-name" data-name="nxy23" href="/nxy23">nxy23</a> 回复于 <abbr class="timeago" title="2018-10-12T11:09:42+08:00">2018年10月12日</abbr>
      </span>
                            </div>
                        </div>
                        <div class="count media-right">
                            <a class="state-false" href="/topics/37549#reply-347514">16</a>
                        </div>
                    </div>
                    <div class="topic media topic-37531">
                        <div class="avatar">
                            <a title="JGpirateKing (naifenG)" href="/JGpirateKing"><img class="media-object avatar-48" src="https://l.ruby-china.com/user/avatar/6121/51fdab.png!md" /></a>
                        </div>
                        <div class="infos media-body">
                            <div class="title media-heading">
                                <a title="用现代 Rails 逃离单页面应用 “兔子洞”" href="/topics/37531">
                                    <span class="node">Rails</span>
                                    用现代 Rails 逃离单页面应用 “兔子洞”
                                </a>      <i title="精华帖" class="fa fa-diamond" data-toggle="tooltip"></i>

                            </div>
                            <div class="info">
                                <a class="user-name" data-name="naifenG" href="/JGpirateKing">JGpirateKing</a>
                                <span class="hidden-mobile">
      •
        最后由 <a class="user-name" data-name="IDbbnn345" href="/IDbbnn345">IDbbnn345</a> 回复于 <abbr class="timeago" title="2018-11-18T21:23:37+08:00">2018年11月18日</abbr>
      </span>
                            </div>
                        </div>
                        <div class="count media-right">
                            <a class="state-false" href="/topics/37531#reply-348667">38</a>
                        </div>
                    </div>
                    <div class="topic media topic-37464">
                        <div class="avatar">
                            <a title="hooopo (Hooopo)" href="/hooopo"><img class="media-object avatar-48" src="https://l.ruby-china.com/user/avatar/8.jpg!md" /></a>
                        </div>
                        <div class="infos media-body">
                            <div class="title media-heading">
                                <a title="SQL Style Guide" href="/topics/37464">
                                    <span class="node">分享</span>
                                    SQL Style Guide
                                </a>      <i title="精华帖" class="fa fa-diamond" data-toggle="tooltip"></i>

                            </div>
                            <div class="info">
                                <a class="user-name" data-name="Hooopo" href="/hooopo">hooopo</a>
                                <span class="hidden-mobile">
      •
        最后由 <a class="user-name" data-name="IDbbnn345" href="/IDbbnn345">IDbbnn345</a> 回复于 <abbr class="timeago" title="2018-11-18T21:24:20+08:00">2018年11月18日</abbr>
      </span>
                            </div>
                        </div>
                        <div class="count media-right">
                            <a class="state-false" href="/topics/37464#reply-348668">11</a>
                        </div>
                    </div>
                    <div class="topic media topic-37189">
                        <div class="avatar">
                            <a title="chrishyman (Madao)" href="/chrishyman"><img class="media-object avatar-48" src="https://l.ruby-china.com/user/avatar/930/48b8c0.png!md" /></a>
                        </div>
                        <div class="infos media-body">
                            <div class="title media-heading">
                                <a title="[译] 再见微服务，从 100 多个问题儿童到一个超级明星" href="/topics/37189">
                                    <span class="node">分享</span>
                                    [译] 再见微服务，从 100 多个问题儿童到一个超级明星
                                </a>      <i title="精华帖" class="fa fa-diamond" data-toggle="tooltip"></i>

                            </div>
                            <div class="info">
                                <a class="user-name" data-name="Madao" href="/chrishyman">chrishyman</a>
                                <span class="hidden-mobile">
      •
        最后由 <a class="user-name" data-name="pynix" href="/pynix">pynix</a> 回复于 <abbr class="timeago" title="2018-09-24T10:35:09+08:00">2018年09月24日</abbr>
      </span>
                            </div>
                        </div>
                        <div class="count media-right">
                            <a class="state-false" href="/topics/37189#reply-346879">21</a>
                        </div>
                    </div>
                    <div class="topic media topic-37133">
                        <div class="avatar">
                            <a title="dsh0416 (Delton Ding)" href="/dsh0416"><img class="media-object avatar-48" src="https://l.ruby-china.com/user/avatar/21472/0b45a6.png!md" /></a>
                        </div>
                        <div class="infos media-body">
                            <div class="title media-heading">
                                <a title="在 Ruby 中实现一个 WebSocket 掩码" href="/topics/37133">
                                    <span class="node">Ruby</span>
                                    在 Ruby 中实现一个 WebSocket 掩码
                                </a>      <i title="精华帖" class="fa fa-diamond" data-toggle="tooltip"></i>

                            </div>
                            <div class="info">
                                <a class="user-name" data-name="Delton Ding" href="/dsh0416">dsh0416</a>
                                <span class="hidden-mobile">
      •
        最后由 <a class="user-name" data-name="luikore" href="/luikore">luikore</a> 回复于 <abbr class="timeago" title="2018-07-11T15:02:23+08:00">2018年07月11日</abbr>
      </span>
                            </div>
                        </div>
                        <div class="count media-right">
                            <a class="state-false" href="/topics/37133#reply-344289">2</a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="card-footer hidden-mobile">
                <a href="/topics/excellent">查看更多精华帖...</a>
            </div>
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