@extends('layouts.app')

@section('content')
    <h1>Edit Post</h1>
    {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title', ['class' => 'form-control'])}}
            {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('body', 'Body', ['class' => 'form-control'])}}
            {{Form::textarea('body', $post->body, ['class' => 'form-control', 'placeholder' => 'body', 'id' => 'article-ckeditor'])}}
        </div>

        <div class="form-group">
            {!!Form::file('cover_image')!!}
        </div>

        <div class="form-group">
            {{Form::hidden('_method', 'PUT')}}
            {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
        </div>
    {!! Form::close() !!}
@endsection