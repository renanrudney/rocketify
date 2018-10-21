<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Data;
use App\Local;
use Illuminate\Support\Facades\DB;

class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $launchers = Data::paginate(15);
      //Quem sabe um dia, abaixo
      // $url="https://launchlibrary.net/1.4/launch?startdate=2018-10-21";
      // $json = file_get_contents($url);
      // $launchers = json_decode($json, TRUE);
      // return $launchers;
       return view('launcher.index',compact('launchers'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      // $launchers = Data::all();
      // return $launchers;

      // $launcher = $id;
      $launcher = Data::find($id);
      $def = $launcher->countryCode;
      // $local = Local::all();
      $local = DB::table('local')->where('countryCode', $def)->get();
      // dd ($local);
      return view('launcher.show', compact('launcher', 'local'));
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
