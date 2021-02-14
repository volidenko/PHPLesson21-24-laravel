@extends('layouts.app')
@section('menu')
    @parent
@show
@section('content')
    <div class="row">
        <div class="badge badge-info py-2" style="display: inline-block; width: 100%"> {{$page}}</div>
    </div>
    {{-- {!!Form::model($block, array("route"=>"block/create", "files"=>true, "class"=>"form"))!!} --}}
    {{-- {!! Form::model($block, ["action"=>"BlockController@store", "files"=>true, "class"=>"form"]) !!} --}}
    {!! Form::model($block, ["route"=>"block.store", "files"=>true, "class"=>"form"]) !!}


    <div class="row offset-1 py-3">
        {!!Form::label("topicid", "Выберите раздел:", ["class"=>"col-2"])!!}
        {!!Form::select("topicid", $topics, "", ["class"=>"col-4"])!!}
        <a href="{{url("topic/create")}}" class="btn btn-sm btn-success col-3 offset-1">Добавить раздел</a>
    </div>
    <div class="row offset-1">
        {!!Form::label("title", "Введите заголовок:", ["class"=>"col-2"])!!}
        {!!Form::text("title", "", ["type"=>"text", "class"=>"form-control col-4"])!!}
    </div>
    <div class="row offset-1 mt-3">
        {!!Form::label("content", "Введите текст:", ["class"=>"col-2"])!!}
        {!!Form::textarea("content", "", ["class"=>"form-control col-4", "rows"=>"8"])!!}
    </div>
    <div class="row offset-1 mt-3">
        {!!Form::label("imagePath", "Выберите файл:", ["class"=>"col-2"])!!}
        {!!Form::file("imagePath", ["class"=>"form-control col-4", "accept"=>"image/*"])!!}
        {!!Form::submit("Добавить блок", ["class"=>"btn btn-sm btn-success col-2 offset-1"])!!}
    </div>
    {!!Form::close()!!}
@endsection
