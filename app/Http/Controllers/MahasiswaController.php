<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

//model
use App\Student;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$mhs = DB::table('students')->get();
        //elqount
        $mhs = Student::all();
        return view('mahasiswa/index', ['mhs' => $mhs]);
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
       /* DB::table('students')->insert([
        'nama' => $request->nama,
        'npm' => $request->npm,
        'email' => $request->email,
        'jurusan' => $request->jurusan
        ]);
            */
        $mhs = new Student;

        $mhs->nama = $request->nama;        
        $mhs->npm = $request->npm;
        $mhs->email = $request->email;
        $mhs->jurusan = $request->jurusan;
        
        $mhs->save();        

        return redirect('/mahasiswa')->with('status','data berhasil disimpan');
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
        $mhs = Student::find($id);
       
        return view('/mahasiswa/edit', ['mhs' => $mhs]);

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
    /*  Student::where('id', $mhs->id)
          ->update([
            'nama' => $request->nama,
            'npm' => $request->npm,
            'email' => $request->email,
            'jurusan' => $request->jurusan
          ]);
        return redirect('/mahasiswa')->with('status','data berhasil di ubah'); */

    $mhs = Student::find($id);
    $mhs->nama = $request->nama;
    $mhs->npm = $request->npm;
    $mhs->email = $request->email;
    $mhs->jurusan = $request->jurusan;
    
    $mhs->save();
    return redirect('/mahasiswa')->with('status','data berhasil di ubah');

    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
         DB::table('students')->where('id',$id)->delete();

         return redirect('/mahasiswa');
    }

    public function input()
    {
        return view('mahasiswa/input');
    }


}
