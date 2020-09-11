<?php

namespace App\Http\Controllers;

use App\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags =Tag::all();
        return view('tag.index')->with([
            'tags'=>$tags
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tag.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|min:3',
            'style'=>'required|min:5'
        ]);

        $tag = New Tag([
            'name'=>$request->name,
            'style'=>$request->style
        ]);

        $tag->save();
        return $this->index()->with([
                'message_success' => 'The tag <b>'. $tag->name .'</b> was created succesfully.'
            ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function show(Tag $tag)
    {
        /* return view('tag.show')->with([
            'name'=>$tag->name,
            'style'=>$tag->style
        ]); */
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function edit(Tag $tag)
    {
        return view('tag.edit')->with([
            'tag'=> $tag
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tag $tag)
    {
        
        
        $request->validate([
            'name'=>'required|min:3',
            'style'=>'required|min:5'
        ]);

        $tag ->update([
            'name'=>$request->name,
            'style'=>$request->style
        ]);

        return $this->index()->with([
                'message_success' => 'The tag <b>'. $tag->name .'</b> was updated succesfully.'
            ]);

           
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tag $tag)
    {
        $oldtag = $tag->name;
        $tag->delete();
        return $this->index()->with([
            'message_success' => 'The tag <b>'. $tag->name .'</b> was deleted succesfully.'
        ]);
    }
}
