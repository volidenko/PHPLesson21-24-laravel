@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-2 offset-1">
        <ul style="list-style-type: none">
            @foreach ($topics as $topic)
                <li> <a href="{{url("topic/". $topic->id)}}" class="badge badge-light">{{$topic->topicname}}</a></li>
            @endforeach
        </ul>
    </div>
    <div class="col-9 float-right">
        @if ($id!=0)
            @foreach ($blocks as $block)
                <div class="row">
                    <div>
                        <h3>{{$block->title}}</h3>
                        @if ($block->imagePath!="")
                            <a href="{{url($block->imagePath)}}" target="_blank" style="margin-right: 20px; float:left;">
                                <img src="{{asset($block->imagePath)}}" alt="{{$block->title}}" class="image-fluid" style="height: 150px;">
                            </a>
                        @endif
                        <div>{{$block->content}}
                            <div class="float-right">
                                {!!Form::open(array("route"=>array("block.destroy", $block->id), "method"=>"DELETE"))!!}
                                <button type="submit" class="btn btn-sm btn-danger">
                                    <img src="{{asset("img/trash.svg")}}">
                                </button>
                                {!!Form::close()!!}
                            </div>
                            <div class="float-right">
                                <a href="{{url("block/".$block->id."/edit")}}" class="btn btn-sm btn-info">
                                    <img src="{{asset("img/pencil.svg")}}">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
</div>
@endsection
