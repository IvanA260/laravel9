<?php

namespace App\Http\Controllers;

use App\Models\CoctelesApi;
use Illuminate\Http\Request;
use App\Models\Project;

class CoctelesApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Project::all();
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CoctelesApi  $coctelesApi
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
            $project = Project::find($id);
            return $project;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CoctelesApi  $coctelesApi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CoctelesApi $coctelesApi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CoctelesApi  $coctelesApi
     * @return \Illuminate\Http\Response
     */
    public function destroy(CoctelesApi $coctelesApi)
    {
        //
    }
}
