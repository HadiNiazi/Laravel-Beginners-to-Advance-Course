<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/parsley.css') }}">
    <style>
        #outer
        {
            text-align: center;
        }
        .inner
        {
            display: inline-block;
        }
    </style>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>

   <div class="row">
       <div class="col-md-6 offset-3 mt-5">
        <h3 class="text-center">Post</h3>


        @if ($post)
            <span><b>Title:</b> {{ $post->title }} </span> <br>
            <span><b>Description:</b> {{ $post->description }} </span> <br>
            <span><b>Publish:</b> {{ $post->is_publish }} </span> <br>
            <span><b>Active:</b> {{ $post->is_active }} </span>
        @else
        <h4 class="text-center text-danger">No post found</h4>
        @endif



       </div>
   </div>


   {{-- <a href="{{ route('test.1') }}" class="btn btn-info">go</a> --}}

   <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js" ></script>
   <script>
       $('#form').parsley();
   </script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>
