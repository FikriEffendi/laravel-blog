@extends('layouts.app')

@section('title','Buat postingan')

@section('content')
    <h1>Buat Postingan Baru</h1>
    <form action="{{url('posts')}}" method="post" class="form-control">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">judul</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Konten</label>
            <textarea class="form-control" id="content" name="content" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">simpan</button>
    </form>
@endsection