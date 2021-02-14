@extends('layouts.master')
@section('menu')
    @parent
@show
@section('content')
<div class="row">
    <div class="badge badge-info py-2" style="display: inline-block; width: 100%"> {{$page }}</div>
</div>
    {!! Form::model($block, ["route"=>array("block.update", $block->id), "files"=>true, "method"=>"PUT", "class"=>"form"]) !!}
        <div class="row offset-1 py-3">
    {!! Form::label("topicid", "Выберите раздел:", ["class"=>"col-2"]) !!}
    {!! Form::select("topicid", $topics, $block->topicid, ["class"=>"col-4"]) !!}
    <a href="{{url("topic/create") }}" class="btn btn-sm btn-success col-3 offset-1">Добавить раздел</a>
    </div>
    <div class="row offset-1">
        {!! Form::label("title", "Введите заголовок:", ["class"=>"col-2"]) !!}
        {!! Form::text("title", $block->title, ["type"=>"text", "class"=>"col-4 form-control"]) !!}
    </div>
    <div class="row offset-1 mt-3">
        {!! Form::label("content", "Введите текст:", ["class"=>"col-2"]) !!}
        {!! Form::textarea("content", $block->content, ["class"=>"col-4 form-control", "rows"=>"8"]) !!}
    </div>
    <div class="row offset-1 mt-3">
        {!! Form::label("imagePath", "Выберите файл", ["class"=>"col-2"]) !!}
        {!! Form::file("imagePath", ["class"=>"col-4 form-control", "accept"=>"image/*"]) !!}
        {!! Form::submit("Добавить блок", ["class"=>"btn btn-sm btn-success col-2 offset-1"]) !!}
    </div>
    {!! Form::close() !!}
@endsection
