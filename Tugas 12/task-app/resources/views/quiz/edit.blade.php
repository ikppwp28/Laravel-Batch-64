<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        <title>Edit Data</title>
    </head>
    
    <body>
        <h2>Edit Data Game</h2>
        <form method= "POST", action="/games/{{$game->id}}">
        @csrf
        @method('PUT')

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <div class="mb-3">
            <label class="form-label">Games Name</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="mb-3">
            <label class="form-label">Games Gameplay</label>
            <textarea name="gameplay" class="form-control" cols="30" rows="10"></textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Developer Games</label>
            <input type="text" class="form-control" name="developer" maxlength="45" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Year</label>
            <input type="number" class="form-control" name="year" min="1900" max="2099" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    </body>

</html>