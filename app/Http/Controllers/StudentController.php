<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Barryvdh\DomPDF\Facade\pdf;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $data = Student::all();
        return view ('Student.index', ['data' => $data]);
    }

    public function create()
    {
        return view('Student.create');
    }

    public function store(Request $request)
    {
        $CheckRegistrationNumber = Student::where('no', $request->no)->exists();
        if (!$CheckRegistrationNumber){
           Student::create([
            'no' =>$request->no,
            'name' =>$request->name,
            'gender' =>$request->gender,
            'address' =>$request->address,
            'religion' =>$request->religion,
            'school' =>$request->school,
            'major' =>$request->major,
        ]); 

            return redirect('/students')->with('success','Selamat, Registrasi Berhasil');
        }
            return back()->with('error', 'Nomor Registrasi Sudah Terdaftar');
    }

    public function edit($id)
    {
        $data = Student::find($id);
        return view('Student.edit', ['data'=> $data]);
    }

    public function update(Request $request, $id)
    {
        $data = Student::find($id);
        $data -> update([
            'no' =>$request->no,
            'name' =>$request->name,
            'gender' =>$request->gender,
            'address' =>$request->address,
            'religion' =>$request->religion,
            'school' =>$request->school,
            'major' =>$request->major,
        ]);

        return redirect('/students')->with('update', 'Data Berhasil Diubah !');
    }

    public function delete($id)
    {
        $data = Student::find($id);
        $data->delete();

        return redirect('/students')->with('delete', 'Data Sudah Dihapus');
    }


    public function export($id)
    {
        $cetak = Student::where('id',$id)->first();

        return view('cetak',compact('cetak'));
    }

    public function cetak(){
        $data = Student::all();

        view()->share('data', $data);
        $pdf = PDF::loadView('cetakpdf');
        return $pdf->download('datasiswa.pdf');

    }
}
