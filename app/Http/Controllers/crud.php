<?php

namespace App\Http\Controllers;

use Request;

use App\Http\Requests;

use App\edsharemodel;

use Illuminate\Support\Facades\Input;


class crud extends Controller
{
    /**
     * Display a listing of the resource.
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function registro(Request $request)
    {

    //edsharemodel::create(Request::all()); ---> si funciona pero crea el usuario dos veces con la de abajo
    
     $users = new edsharemodel;
        $users->name = Input::get("name");
        $users->LastName = Input::get("LastName");
        $users->email = Input::get("email");
        $users->password = Input::get("password");
        $users->save();

        echo "<h1>Datos guardados correctamente</h1>";
        echo "<br><br>";
        echo "<h2>Bienvenido </h2> ". $users->name." ".$users->LastName;
        echo "<br>";
        
       echo "<a href='index'>Volver</a>";
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
