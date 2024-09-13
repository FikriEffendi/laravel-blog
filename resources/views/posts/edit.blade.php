<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog| ubah postingan</title>
    <link rel="stylesheet" href="{{asset('bootstrap-5/css/bootstrap.min.css')}}">
    <script src="{{asset('bootstrap-5/js/bootstrap.bundle.min.js')}}"></script>
</head>

<body>
    <h1>Ubah Postingan</h1>
    <form action="{{url("posts/$post->id")}}" method="post" class="form-control">
        @method('PATCH')
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">judul</label>
            <input type="text" class="form-control" id="title" name="title" value="{{$post->title}}">
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Konten</label>
            <textarea class="form-control" id="content" name="content" rows="3">{{$post->content}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">simpan</button>
    </form>
    <form method="post" action="{{url("posts/$post->id")}}">
        @method('DELETE')
        @csrf
        <button type="submit" class="btn btn-danger">Hapus</button>
    </form>
</body>

</html>