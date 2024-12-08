@extends('layouts.app')

@section('title','login')

@section('content')
    <div class="row">
        <div class="col-md-4"></div>

        <div class="card col-md-4">
            <div class="card-body">
                <h1 class="text-center">Login</h1>

                @if (session()->has('error_massage'))
                {{-- has hanya pengecekannya saja sedangkan get mencetak --}}
                    <div class="alert alert-danger">
                        {{session()->get('error_massage')}}
                    </div>
                @endif

                <form action="{{url('login')}}" method="POST" class="form-control">
                    @csrf

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" id="email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">password</label>
                        <input type="password" class="form-control" name="password" id="password">
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Log in</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection