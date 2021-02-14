<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Block;
use App\Topic;
use Illuminate\Http\Request;

class BlockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (!Auth::check())
        {
            return redirect('login');
        }
        $topics = Topic::all()->pluck("topicname", "id");
        $page = "Добавление блока";
        $block = new Block;
        return view("block.create", ["block"=>$block, "topics"=>$topics, "page"=>$page]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $block = new Block;
        $block->topicid = $request->topicid;
        $block->title = $request->title;
        $block->content = $request->content;
        $file = $request->file("imagePath");
        if($file!=null)
        {
            $originalName = $request->file("imagePath")->getClientOriginalName();
            $dirname = "images/";
            $file->move($dirname, $originalName);
            $block->imagePath = $dirname . $originalName;
        }
        $block->save();
        return redirect("topic");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (!Auth::check())
        {
            return redirect('login');
        }
        $block = Block::find($id);
        $page = "Добавление блока";
        $topics = Topic::pluck("topicname", "id");
        return view("block.edit", ["block"=>$block, "topics"=>$topics, "page"=>$page]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if (!Auth::check())
        {
            return redirect('login');
        }
        $block = Block::find($id);
        $block->topicid = $request->topicid;
        $block->title = $request->title;
        $block->content = $request->content;
        $file = $request->file("imagePath");
        if($file!=null)
        {
            $originalName = $request->file("imagePath")->getClientOriginalName();
            $dirname = "images/";
            $file->move($dirname, $originalName);
            $block->imagePath = $dirname . $originalName;
        }
        else
        {
            $block->imagePath = "";
        }
        $block->update();
        return redirect("topic");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!Auth::check())
        {
            return redirect('login');
        }
        $block = Block::find($id);
        $block->delete();
        return redirect("topic");
    }
}
