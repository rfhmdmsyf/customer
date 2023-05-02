<?php

namespace App\Http\Controllers;
use App\Models\Home;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Home::all();
        
        
    
         return view('home' ,compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Home::all();
        return view ('create',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Home::create($request->all());

        $rules = [
            'nama' => 'required|min:3|max:20',
            'alamat' => 'required',
            'kota' => 'required',
            'email' => 'required',
            'hp' => 'required',
            'perusahaan' => 'required'

    


        ];
        $messages = [
            'required' => " :attribute g boleh kosong woi"
         
        ];
        $this->validate($request, $rules, $messages);

        $this->Customer->nama_customer = $request->nama;
        $this->Customer->alamat = $request->alamat;
        $this->Customer->kota = $request->kota;
        $this->Customer->email = $request->email;
        $this->Customer->hp = $request->hp;
        $this->Customer->perusahaan = $request->perusahaan;

        $this->Customer->save();

        return redirect()->route('home')->with('status', 'Data Customer berhasil ditambahkan');
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
