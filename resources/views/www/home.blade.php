@extends('www.layout')
@section('content')
<div id="main" class="main-container container">
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
                    <div class="count media-right"><a class="state-false" href="{{route('topics.detail', ['id'=>$value->id])}}">{{$value->comments}}</a></div>
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
                        <div class="count media-right"><a class="state-false" href="{{route('topics.detail', ['id'=>$value->id])}}">{{$value->comments}}</a></div>
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
                @foreach($allNodes as $value)
                <div class="node media">
                    <label class="mr-2 media-left">{{$value['title']}}</label>
                    @if(isset($value['sonNodes']) && $value['sonNodes'])
                    <span class="nodes media-body">
                        @foreach($value['sonNodes'] as $v)<span class="name"><a title="{{$v['title']}}" data-id="{{$v['id']}}" href="{{route('topics.list', ['id'=>$v['id']])}}">{{$v['title']}}</a></span>@endforeach
                    </span>
                    @endif
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection