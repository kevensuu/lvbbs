<div class="sub-navbar node-header hide-ios">
    <div class="container">
        <div class="modal" id="node-selector" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="modal-title">讨论区节点</div>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="index-sections card">
                            <div class="card-header">讨论节点分类导航</div>
                            <div class="card-body">
                                <div class="row node-list">
                                    @foreach($allNodes as $value)
                                        <div class="node media">
                                            <label class="mr-2 media-left">{{$value['title']}}</label>
                                            @if(isset($value['sonNodes']) && $value['sonNodes'])
                                                <span class="nodes media-body">
                                                    @foreach($value['sonNodes'] as $v)<span class="name"><a title="{{$v['title']}}" data-id="{{$v['id']}}" href="{{route('topics.nodes', ['id'=>$v['id']])}}">{{$v['title']}}</a></span>@endforeach
                                                </span>
                                            @endif
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <ul class="filter nav nav-pills">
            <li><a href="#" class="all-nodes" data-toggle="modal" data-target="#node-selector">所有节点 <span class="caret-right"></span></a></li>
            <li class="@if($pageType=='newest') active @endif"><a href="{{route('topics.newest')}}" data-turbolinks-action="replace">默认</a></li>
            <li class="@if($pageType=='recommend') active @endif"><a href="{{route('topics.recommend')}}" data-turbolinks-action="replace"><i class="fa fa-diamond"></i> 精华帖</a></li>
            <li class="@if($pageType=='excellent') active @endif"><a href="{{route('topics.excellent')}}" data-turbolinks-action="replace">优质帖子</a></li>
            <li class="@if($pageType=='noReply') active @endif"><a data-turbolinks-action="replace" href="{{route('topics.no_reply')}}">无人问津</a></li>
            <li class="@if($pageType=='lastReply') active @endif"><a data-turbolinks-action="replace" href="{{route('topics.last_reply')}}">最新回复</a></li>
        </ul>
    </div>
</div>