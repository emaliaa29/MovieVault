<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Create a movies</h1>
  <div>
        @if($errors->any())
        <ul>
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
        </ul>


        @endif
    </div>
  <form method="post" action="{{route('movies.store')}} ">
    @csrf
    @method('post')
    <div>
      <label>Name</label>
      <input type="text" name="name" placeholder="Name" />
    <div>
        <label>title</label>
        <input type="text" name="title" placeholder="title" />
        </div>
    <div>
        <label>genre</label>
        <input type="text" name="genre" placeholder="genre" />
        </div>
    <div>
        <label>duration</label>
        <input type="text" name="duration" placeholder="duration" />
        </div>
    <div>
        <label>release</label>
        <input type="text" name="release" placeholder="release" />
        </div>
    <div>
        <label>Description</label>
        <input type="text" name="description" placeholder="Description" />
        </div>
    <div>
        <input type="submit" value="Save a New movie" />
        </div>
    </div>
  </form>
</body>
</html>
