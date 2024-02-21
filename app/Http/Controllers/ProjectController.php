<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $memberList = Project::all();
    
        return view('welcome', compact('memberList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        // $memberList = [
        //     [
        //         'name'  => 'alalalal',
        //         'description' => 'lorem ipsum',
        //         'author' => 'Giorgio Belardelli',
        //         'img_path' => '{{ mix("public/img/Gio.jpg") }}',
        //     ],
        //     [
        //         'name'  => 'Mimmo',
        //         'description' => 'lorem ipsum',
        //         'author' => 'Giorgio Belardelli',
        //         'img_path' => '{{ mix("public/img/Gio.jpg") }}',
        //     ],
        //     [
        //         'name'  => 'Brie',
        //         'description' => 'lorem ipsum',
        //         'author' => 'Giorgio Belardelli',
        //         'img_path' => '{{ mix("public/img/Gio.jpg") }}',
        //     ],
        // ];



        // $data = $request -> all();

        // foreach($memberList as $member){

        //     foreach($member as $singleMember ){

                
        //         $newProject = new Project();
                
        //         $newProject -> $singleMember -> name = $data['name'];
        //         $newProject -> $singleMember -> description = $data['description'];
        //         $newProject -> $singleMember -> author = $data['author'];
        //         $newProject -> $singleMember -> img_path = $data['img_path'];
                
        //         $newProject -> save();
        //     }
        // }

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $project = Project::find($id);
        return view('pages.show', compact('project') );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
