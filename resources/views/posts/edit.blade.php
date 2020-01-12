@extends('layouts.master')
@section('content')
<div class="col-sm-8 blog-main">
    <form action="/posts/{{$posts->post_id}}" method="POST">
        {{method_field("PUT")}}
        {{csrf_field()}}
        <input type="hidden" name="post_id" value="{{$posts->post_id}}">
        <div class="form-group">
            <label>标题</label>
            <input name="title" type="text" class="form-control" placeholder="这里是标题" value="{{$posts->title}}">
        </div>
        <div class="form-group">
            <label>内容</label>
            <textarea id="content" name="content" class="form-control" style="height:400px;max-height:500px;" placeholder="这里是内容">{!!$posts->content!!}</textarea>
        </div>
         @include('layouts.error')
        <button type="submit" class="btn btn-default">提交</button>
    </form>
    <br>
</div>
@endsection
