<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="{{asset('bootstrap-5/css/bootstrap.min.css')}}">
    <script src="{{asset('bootstrap-5/js/bootstrap.bundle.min.js')}}"></script>
    <style>
        .blog {
            padding: 5px;
            border-bottom: 1px solid lightgrey;
        }

        small {
            color: grey;
        }
    </style>
</head>

<body>


    <div class="container">
        <h1>
            Blog Codepolitan
            <a class="btn btn-success" href="{{url('posts/create')}}">+ Buat Postingan</a>
        </h1>
        @foreach($posts as $post)
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">{{$post->title}}</h5>
                <p class="card-text">{{$post->content}}</p>
                <p class="card-text"><small class="text-body-secondary">Last updated at {{date("d M Y H:i",strtotime($post->created_at)) }}</small></p>
                <a href="{{url("posts/$post->id")}}" class="btn btn-primary">Selengkapnya</a>
                <a href="{{url("posts/$post->id/edit")}}" class="btn btn-warning">Edit</a>
            </div>
        </div>

        @endforeach
    </div>

</body>

</html>