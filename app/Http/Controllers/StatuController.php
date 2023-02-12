<?php

namespace App\Http\Controllers;

use App\Models\Statu;
use App\Http\Requests\StoreStatuRequest;
use App\Http\Requests\UpdateStatuRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class StatuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $status = Statu::all()->toArray();
        
        return array_reverse($status);
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
     * @param  \App\Http\Requests\StoreStatuRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $statu = new Statu;
        $statu->name = $request->name;
        $statu->save();

        return "created";
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Statu  $statu
     * @return \Illuminate\Http\Response
     */
    public function show(Statu $statu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Statu  $statu
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $statu = Statu::find($id);
        return response()->json($statu);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStatuRequest  $request
     * @param  \App\Models\Statu  $statu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $statu = new Statu;
        $statu->name = $request->name;
        $statu->save();

        return 'Updated';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Statu  $statu
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Statu::find($id);
        $project->delete();
        
        return response()->json('The project successfully deleted');
    }
}
