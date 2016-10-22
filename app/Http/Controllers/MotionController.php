<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Validator;
use Redirect;
class MotionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $motions = \App\Motion::paginate(6);
        return view('motion/motion', compact('motions'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rounds = \App\Round::all();
        $tournaments = \App\Tournament::all();
        return view('motion/motion-create', compact('rounds', 'tournaments'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, \App\Motion $motion)
    {
        $validator = Validator::make($request->all(),[
            'round' => 'required|int',
            'tournament' => 'required|int',
        ]);
        
        if($validator->fails()){
            return Redirect::back()->withInput()
                ->withErrors($validator);
        }
        
        $motion->motion = $request->name;
        $motion->round_id = $request->round;
        $motion->tournament_id = $request->tournament;
        $motion->user_id = 1;
        $motion->status = 1;
        
        $motion->save();

        return redirect('/motion')->with('status', 'Motion added!');;
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
