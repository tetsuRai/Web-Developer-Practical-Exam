<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paintjob;

class JobsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paint_job = Paintjob::where('completed', false)->get();

        $total = Paintjob::where('completed', true)->get();
        $painted_cars = $total->count();

        $red_total = Paintjob::where('completed', true)->where('target_color', 'Red')->get();
        $red = $red_total->count();
        $blue_total = Paintjob::where('completed', true)->where('target_color', 'Blue')->get();
        $blue = $blue_total->count();
        $green_total = Paintjob::where('completed', true)->where('target_color', 'Green')->get();
        $green = $green_total->count();

        return view('paint', [
            'paintjobs' => $paint_job,
            'painted_cars' => $painted_cars,
            'red' => $red,
            'blue' => $blue,
            'green' => $green

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $paint_job = Paintjob::create([
            'plate_number' => $request->input('plate_number'),
            'current_color' =>$request->input('current_color'),
            'target_color' => $request->input('target_color'),
            'completed' => false
        ]);

        return redirect('/paint');

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
        $paint_job = Paintjob::where('id', $id)
                    ->update([
                       'completed' => true    
                    ]);
        return redirect('/paint');
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
