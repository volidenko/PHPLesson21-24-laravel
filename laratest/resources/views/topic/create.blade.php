@extends('layouts.app')
@section('menu')
    @parent
@endsection
@section('content')
<div class="row">
    <div class="badge badge-info py-2" style="width: 100%; display: inline-block;"> {{ $page }}</div>
</div>
@if (count($errors)>0)
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $e)
            <li> {{ $e}} </li>
        @endforeach
    </ul>
</div>
@endif
@if (session("message"))
    <div class="alert alert-info">
        {{ session("message")}}
    </div>
@endif
<div class="row">
    {{-- {!! Form::model($topic, array("action"=>"TopicController@store", "class"=>"form-inline")) !!} --}}
    {!! Form::model($topic, ["route"=>"topic.store", "class"=>"form-inline"]) !!}
    <div class="form-group offset-1">
    {!! Form::label("topicname", "Название раздела:", ["class"=>"col-4"]) !!}
    {!! Form::text("topicname", "", ["class"=>"form-control col-5"]) !!}
    {!! Form::submit("Создать раздел", ["class"=>"btn btn-sm btn-success"]) !!}
    </div>
    {!! Form::close() !!}
</div>
@endsection
