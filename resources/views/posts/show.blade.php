<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog| judul: {{$post->title}}</title>
    <link rel="stylesheet" href="{{asset('bootstrap-5/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/blog.css')}}">
    <script src="{{asset('bootstrap-5/js/bootstrap.bundle.min.js')}}"></script>
</head>

<body>
    <div class="container">
        <article class="blog-post">
            <h2 class="display-5 link-body-emphasis mb-1">{{$post->title}}</h2>
            <p class="blog-post-meta">{{date("D M Y H:i",strtotime($post->created_at))}}</p>

            <p>{{$post->content}}</p>

            @foreach ($comments as $comment)
            <div class="card mb-3">
                <div class="card-body">
                    <p style="font-size: 8pt;">{{ $comment->comment }}</p>
                </div>
            </div>
            @endforeach
        </article>

        <a href="{{url("posts")}}">
            < Kembali
                </a>
    </div>
</body>

</html>