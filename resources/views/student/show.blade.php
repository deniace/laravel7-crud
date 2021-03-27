@extends('layout.main')

@section('title', 'Student Detail')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="mt-2">Student Detail</h1>

            <div class='card'>
                <div class="card-body">
                    <h5 class="card-title">{{$student->nama}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{$student->nrp}}</h6>
                    <p class="card-text">{{$student->email}}</p>
                    <p class="card-text">{{$student->jurusan}}</p>
                    <a href="{{$student->id}}/edit" class="btn btn-primary" type="submit">Edit</a>
                    <form action="/students/{{$student->id}}" method="POST" class="d-inline">
                        @method("delete")
                        @csrf
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                    <a href="/students" class="card-link">Kembali</a>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection