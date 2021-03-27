<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // menampilkan seluruh data student
        $student = Student::all();
        return view("student.index", ["students" => $student]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // menapilkan form tambah data
        return view("student/create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // menangkap data cara 1
        // $student = new Student();
        // $student->nama = $request->nama;
        // $student->nrp = $request->nrp;
        // $student->jurusan = $request->jurusan;
        // $student->email = $request->email;

        // $student->save();

        // menyimpan data cara 2
        // Student::create([
        //     "nama" => $request->nama,
        //     "nrp" => $request->nrp,
        //     "email" => $request->email,
        //     "jurusan" => $request->jurusan
        // ]);

        // validasi inpit
        $request->validate([
            'nama' => 'required',
            'nrp' => 'required',
            'email' => 'email|required',
            'jurusan' => 'required'
        ], [
            // jika ingin mengcustom error message
            'nama.required' => 'nama harus di isi',
            'nrp.required' => 'nrp harus di isi',
            'jurusan.required' => 'jurusan harus di isi',
            'email.required' => 'email harus di isi'
        ]);

        // cara 3 jika $fillable yang di model sudah di isi maka bisa seperti ini
        Student::create($request->all());

        return redirect("/students")->with('status', 'data berhasil disimpan'); // dengan flashdata / flash session
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
        return view('student.show', ['student' => $student]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        // menapilkan form edit data
        return view("student/edit", ["student" => $student]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        // validasi inpit
        $request->validate([
            'nama' => 'required',
            'nrp' => 'required',
            'email' => 'email|required',
            'jurusan' => 'required'
        ], [
            // jika ingin mengcustom error message
            'nama.required' => 'nama harus di isi',
            'nrp.required' => 'nrp harus di isi',
            'jurusan.required' => 'jurusan harus di isi',
            'email.required' => 'email harus di isi'
        ]);

        // menyimpan perubahan 
        Student::where('id', $student->id)
            ->update([
                'nama' => $request->nama,
                'nrp' => $request->nrp,
                'email' => $request->email,
                'jurusan' => $request->jurusan
            ]);
        return redirect("/students")->with('status', 'data berhasil diubah'); // dengan flashdata / flash session
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        // menghapus data
        Student::destroy($student->id);
        return redirect("/students")->with('status', 'data berhasil dihapus'); // dengan flashdata / flash session
    }
}
