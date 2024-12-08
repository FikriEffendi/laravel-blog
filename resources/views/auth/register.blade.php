@extends('layouts.app')

@section('title','register')

@section('content')
    <div class="row">
        <div class="col-md-4"></div>

        <div class="card col-md-4">
            <div class="card-body">
                <h1 class="text-center">Register</h1>

                @if (session()->has('error_massage'))
                {{-- has hanya pengecekannya saja sedangkan get mencetak --}}
                    <div class="alert alert-danger">
                        {{session()->get('error_massage')}}
                    </div>
                @endif

                <form action="{{url('register')}}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="name" class="form-label">nama</label>
                        <input type="text" class="form-control" name="name" id="name">
                        @if ($errors->has('name'))
                            <span class="text-danger">{{$errors->first('name')}}</span>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" id="email">
                        @if ($errors->has('email'))
                            <span class="text-danger">{{$errors->first('email')}}</span>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">password</label>
                        <input type="password" class="form-control" name="password" id="password">
                        @if ($errors->has('password'))
                            <span class="text-danger">{{$errors->first('password')}}</span>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Konfirmasi password</label>
                        <input type="password" class="form-control" name="password_confirmation" id="password">
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Daftar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection