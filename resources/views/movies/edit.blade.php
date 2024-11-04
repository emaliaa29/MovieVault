<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Movie</title>
</head>
<body>
  <h1>Edit Movie</h1>

  <div>
    @if($errors->any())
      <ul>
        @foreach($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    @endif
  </div>

  <form method="post" action="{{ route('movies.update', $movies->id) }}">
    @csrf
    @method('PUT')

    <div>
      <label>Title</label>
      <input type="text" name="title" value="{{ $movies->title }}" placeholder="Title" />
    </div>

    <div>
      <label>Genre</label>
      <input type="text" name="genre" value="{{ $movies->genre }}" placeholder="Genre" />
    </div>

    <div>
      <label>Release</label>
      <input type="text" name="release" value="{{ $movies->release }}" placeholder="Release Date" />
    </div>

    <div>
      <label>Duration</label>
      <input type="text" name="duration" value="{{ $movies->duration }}" placeholder="Duration" />
    </div>

    <div>
      <label>Description</label>
      <input type="text" name="description" value="{{ $movies->description }}" placeholder="Description" />
    </div>

    <div>
      <input type="submit" value="Update Movie" />
    </div>
  </form>
</body>
</html>
