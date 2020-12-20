<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Guru;
class SupervisorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Guru::latest()->paginate(5);
        return view('supervisor.index', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function edit($id)
    // {
    //     $data = Guru::findOrFail($id);
    //     return view('supervisor.edit', compact('data'));
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, $id)
    // {
    //     $data = Guru::findOrFail($id);
    //     $data->user_id = $request->user_id;
    //     $data->mapel = $request->mapel;
    //     $data->file = $request->file;
    //     $data->status = $request->status;
    //     $data->save();
    //     session()->flash('success', 'Data Berhasil di Proses');
    //     return redirect()->route('supervisor.index');
    // }

    public function lulus($id)
    {
        $data = Guru::findOrFail($id);
        $data->update([
            'status' => 1
        ]);
        session()->flash('success', 'Data Berhasil diubah');
        return back();
    }

    public function Tidaklulus($id)
    {
        $data = Guru::findOrFail($id);
        $data->update([
            'status' => 2
        ]);
        session()->flash('success', 'Data Berhasil diubah');
        return back();
    }
}
