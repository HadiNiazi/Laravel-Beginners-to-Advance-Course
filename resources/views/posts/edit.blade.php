<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/parsley.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>

   <div class="row">
       <div class="col-md-6 offset-3 mt-5">
        <h3 class="text-center">Edit Post</h3>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif




        @if (Session::has('alert-success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong> {{ session::get('alert-success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <form method="post" action="{{ route('posts.update', $post->id) }}" style="margin-top: 35px" id="form">
           @csrf
           @method('PATCH')
            <div class="mb-3">
              <label>Title</label>
              <input type="text" name="title" class="form-control" placeholder="title" value="{{ old('title', $post->title) }}">
            </div>

            <div class="mb-3">
                <label>Description</label>
                <textarea class="form-control" name="description" placeholder="enter a message here...">{{ old('description', $post->description) }}</textarea>
            </div>

            <div class="mb-3">
                <label>Published</label>
                <select name="is_publish" class="form-control">
                    <option value="" disabled selected>Choose Option</option>
                    <option value="1" @selected( old('is_publish', $post->is_publish) == 1 ) >Yes</option>
                    <option value="0" @selected( old('is_publish', $post->is_publish) == 0 ) >No</option>
                </select>
            </div>

            <div class="mb-3">
                <label>Active</label>
                <select name="is_active" class="form-control">
                    <option value="" disabled selected>Choose Option</option>
                     <option @selected( old('is_active', $post->is_active) == 1 ) value="1">Yes</option>
                    <option @selected( old('is_active', $post->is_active) == 0 ) value="0">No</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
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
