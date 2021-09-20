<?php

namespace App\Http\Controllers;

use App\Models\Parcel;
use Illuminate\Http\Request;
use App\Models\Post;

class ParcelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parcels = Parcel::all();
       return view('parcel.index', ['parcels' => $parcels]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $posts = Post::all();
       return view('parcel.create', ['posts' => $posts]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $parcel = new Parcel;
       $parcel->weight = $request->parcel_weight;
       $parcel->phone = $request->parcel_phone;
       $parcel->info = $request->parcel_info;
       $parcel->post_id = $request->post_id;
       $parcel->save();
       return redirect()->route('parcel.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Parcel  $parcel
     * @return \Illuminate\Http\Response
     */
    public function show(Parcel $parcel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Parcel  $parcel
     * @return \Illuminate\Http\Response
     */
    public function edit(Parcel $parcel)
    {
        $posts = Post::all();
       return view('parcel.edit', ['parcel' => $parcel, 'posts' => $posts]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Parcel  $parcel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Parcel $parcel)
    {
        $parcel->weight = $request->parcel_weight;
       $parcel->phone = $request->parcel_phone;
       $parcel->info = $request->parcel_info;
       $parcel->post_id = $request->post_id;
       $parcel->save();
       return redirect()->route('parcel.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Parcel  $parcel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Parcel $parcel)
    {
    //   if($parcel->postParcels->count()){
    //        return 'Trinti negalima, nes turi knygų';
    //    }
       $parcel->delete();
       return redirect()->route('parcel.index');


    }
}
