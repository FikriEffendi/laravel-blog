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
        @php($post=explode(",",$post))
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">{{$post[1]}}</h5>
                <p class="card-text">{{$post[2]}}</p>
                <p class="card-text"><small class="text-body-secondary">Last updated at {{date("d M Y H:i",strtotime($post[3])) }}</small></p>
                <a href="{{url('posts/$post[0]')}}" class="btn btn-primary">Selengkapnya</a>
            </div>
        </div>

        @endforeach
    </div>

</body>

</html>