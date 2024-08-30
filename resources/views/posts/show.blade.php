<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog| judul: {{$post[1]}}</title>
    <link rel="stylesheet" href="{{asset('bootstrap-5/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/blog.css')}}">
    <script src="{{asset('bootstrap-5/js/bootstrap.bundle.min.js')}}"></script>
</head>

<body>
    <div class="container">
        <article class="blog-post">
            <h2 class="display-5 link-body-emphasis mb-1">{{$post[1]}}</h2>
            <p class="blog-post-meta">{{date("D M Y H:i",strtotime($post[3]))}}</p>

            <p>{{$post[2]}}</p>
        </article>

        <a href="{{url('posts')}}">
            < Kembali
                </a>
    </div>
</body>

</html>