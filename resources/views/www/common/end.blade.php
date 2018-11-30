@if($pageType=='topicDetail')
<script src="{{config('app.static_url')}}/common/js/jquery.form.min.js"></script>
<script src="{{config('app.static_url')}}/common/js/spop.min.js"></script>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.13.1/styles/default.min.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.13.1/highlight.min.js"></script>
<script>
    var comment_preview_url = "{{route('comments.preview')}}";
</script>
<script src="{{config('app.static_url')}}/js/detail.js"></script>
@endif