<?php

namespace App\Http\Controllers;

use \App\Guru, \App\Kurikulum;
class KurikulumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function validateReq()
    {
        // validate Req
        return $this->validate(request(), [
            'hari' => ['required'],
            'nama_guru' => ['required', 'max:50'],
            'mapel' => ['required', 'max:50']
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function day()
    {
        // For days
        return ['senin', 'selasa', 'rabu', 'kamis', 'jumat', 'sabtu', 'minggu'];
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $day = $this->day();
        $data = Kurikulum::latest()->paginate(5);
        return view('kurikulum.index', compact('data', 'day'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function supervisor()
    {
        $data = Guru::where('status', 1)->paginate(5);
        return view('kurikulum.supervisor', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $data = $this->validateReq();
        Kurikulum::create($data);
        session()->flash('success', 'Jadwal Berhasil di Buat');
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
        $data = Kurikulum::findOrFail($id);
        $data->delete();
        session()->flash('success', 'Data Berhasil di Hapus!');
        return back();
    }
}
