<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class DonationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $donations = Donation::paginate(10);
        $total = Donation::sum('amount');

        return view('dashboard', compact('donations','total'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            "donor" => 'required',
            "amount" => 'required'
        ]);

        Donation::create($data);

        return back()->with('success', 'Donation recorded successfully!');
    }

    /**
     * Display all donations
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        $donations = Donation::get();
        $total = Donation::sum('amount');
        $percentage = ($total / env('GOAL', 40000)) * 100;

        return view('welcome', compact('donations', 'total', 'percentage'));
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
