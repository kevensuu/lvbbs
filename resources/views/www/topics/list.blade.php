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
            <div class="topics topics-index card">
                @if($topicsList->count())
                <div class="card-body item-list">
                    @foreach($topicsList as $value)
                        <div class="topic media topic-{{$value->id}}">
                            <div class="avatar"><a title="@if($value->belongsToUser->nickname){{$value->belongsToUser->nickname}}@else{{$value->belongsToUser->name}}@endif" href="{{route('ucenter', ['id'=>$value->users_id])}}"><img class="media-object avatar-48" src="{{$value->belongsToUser->face}}" /></a></div>
                            <div class="infos media-body">
                                <div class="title media-heading"><a href="{{route('topics.nodes', ['id'=>$value->categorys_id])}}"><span class="node">{{$value->belongsToCategorys->title}}</span></a><a title="{{$value->title}}" href="{{route('topics.detail', ['id'=>$value->id])}}">{{$value->title}}</a></div>
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
                <div class="card-footer clearfix">{!! $fpage !!}</div>
                @else
                    <div class="text-center">暂无内容</div>
                @endif
            </div>
        </div>
        @include('www.topics.right')
    </div>
</div>
@endsection