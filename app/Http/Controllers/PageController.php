<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
use Illuminate\Database\MySqlConnection;
use DB;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = Page::all();
        return view('pageManagement', compact('pages'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //This will load create.blade.php
        return view('createPage');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = request()->validate([
            'title'            =>  'required',
            'URI'              =>  'required|min:5|max:10|',
            'pageContent'      =>  'required',
        ]);
        $page = new Page([
            'title'            =>    $request->get('title'),
            'URI'              =>    $request->get('URI'),
            'pageContent'      =>    $request->get('pageContent'),
        ]);
        $page->save();
        return redirect('/p');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($URI)
    {
        $pageContent = DB::table('pages')->where('URI',$URI)->first();
        return view('page.dynamic', ['pageContent' => $pageContent]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($URI)
    {
        $pageContent = DB::table('pages')->where('URI',$URI)->first();
        return view('editPage', ['pageContent' => $pageContent]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
{
    $data = $request->validate([
        'title' => 'required',
        'URI' => 'required|min:5|max:10',
        'pageContent' => 'required'
    ]);

    $obj = \App\Page::where('URI', $request->URI)
        ->update([
            'title' => $request->title, 
            'pageContent' => $request->pageContent
        ]);

    return redirect('/p');
}
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $obj = \App\Page::where('URI', $request->URI)
        ->delete();
        return redirect('/p');
    }
}
