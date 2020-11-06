<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Guru, \App\Kurikulum;
class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Guru::where('user_id', auth()->user()->id)->latest()->paginate(5);
        return view('guru.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function jadwal()
    {
        $data = Kurikulum::latest()->paginate(5);
        return view('guru.jadwal', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(), [
			'mapel' => 'required',
            'user_id' => 'required|max:70|string',
            'file' => 'required'
        ]);
        $nm = $request->file;
        $namaFile = time().rand(100,999).".".$nm->getClientOriginalName();
        $data = new Guru;
        $data->mapel = $request->mapel;
        $data->user_id = $request->user_id;
        $data->status = $request->status;
        $data->file = $namaFile;
        $nm->move(public_path().'/files', $namaFile);
        $data->save();
        session()->flash('success', 'Data Berhasil di Upload');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Guru::findOrFail($id);
        $file = 'files/'.$data->file;
        if(is_file($file))
        {
            unlink($file);
        }
        $data->delete();
        session()->flash('success', 'Data Berhasil di Hapus!');
        return back();
    }
}
