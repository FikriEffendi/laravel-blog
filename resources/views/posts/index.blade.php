<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
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
    <h1>Blog Codepolitan</h1>

    <div>
        @php($number=1)
        @foreach($posts as $post)
        <div class="blog">
            <h3>{{$post[0]}} <small>#{{$number}}</small></h3>
            <p>{{$post[1]}}</p>
        </div>
        @php($number++)
        @endforeach
    </div>

</body>

</html>