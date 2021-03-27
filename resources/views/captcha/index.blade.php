@extends('layout.main')

@section('title', 'Student Create')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="mt-2">laravel chaptcha</h1>

            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
            <br>

            @endif

            <form action="{{url('captcha-validation')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                        placeholder="Masukan name" value="{{old("name")}}">
                    @error('name')<div class="invalid-feedback">{{$message}}</div>@enderror
                </div>
                <div class="form-group">
                    <label for="username">username</label>
                    <input type="text" class="form-control @error('username') is-invalid @enderror" id="username"
                        name="username" placeholder="Masukan username" value="{{old("username")}}">
                    @error('username')<div class="invalid-feedback">{{$message}}</div>@enderror
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email"
                        placeholder="Masukan Email" value="{{old("email")}}">
                    @error('email')<div class="invalid-feedback">{{$message}}</div>@enderror
                </div>
                <div class="form-group">
                    <div class="captcha">
                        <span id="captcha_span">{!! captcha_img()!!}</span>
                        <button type="button" class="btn btn-danger" class="reload" id="reload">&#x21bb</button>
                    </div>
                </div>
                <div class="form-group">
                    <label for="captcha">Masukan captcha</label>
                    <input type="text" class="form-control @error('captcha') is-invalid @enderror" id="captcha"
                        name="captcha" placeholder="Masukan captcha" value="{{old('captcha')}}">
                    @error('captcha')<div class="invalid-feedback">{{$message}}</div>@enderror
                </div>

                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>

        </div>
    </div>
</div>
@endsection


<script type="text/javascript">
    $.('#reload').click(function(){
        $.ajax({
            type: 'GET',
            url: 'reload-captcha',
            success: function(data){
                $.("#captcha_span").html(data.captcha);
            }
        });
    });
</script>