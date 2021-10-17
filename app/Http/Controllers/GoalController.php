<?php

namespace App\Http\Controllers;

use App\Goal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GoalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $goals = Auth::user()->goals;
        
        //All Goals are returned as a response in JSON format
        return response()->json($goals);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Create a new Goal
        $goal = new Goal();
        $goal->title = request('title');
        $goal->user_id = Auth::id();
        $goal->save();

        $goals = Auth::user()->goals;

        //Returns the response in JSON format
        return response()->json($goals);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Goal  $goal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Goal $goal)
    {   
        //Update Goal
        $goal->title = request('title');
        $goal->user_id = Auth::id();
        $goal->save();

        $goals = Auth::user()->goals;

        return response()->json($goals);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Goal  $goal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Goal $goal)
    {   
        //The destroy action uses the value of the request sent to delete the existing Goal
        $goal->delete();

        $goals = Auth::user()->goals;

        return response()->json($goals);
    }
}
