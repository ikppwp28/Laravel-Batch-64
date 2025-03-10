<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" 
          integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" 
          crossorigin="anonymous">

    <title>Game List</title>
</head>

<body>
    <div class="container mt-4">
        <h2>List Game</h2>

        <!-- Tombol Tambah Data -->
        <a href="games/create" class="btn btn-primary mb-2">Tambah Game</a>

        <!-- Tampilkan pesan sukses jika ada -->
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Table Data Game -->
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Gameplay</th>
                    <th scope="col">Developer</th>
                    <th scope="col">Year</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($games as $game)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $game->name }}</td>
                    <td>{{ Str::limit($game->gameplay, 50) }}</td>
                    <td>{{ $game->developer }}</td>
                    <td>{{ $game->year }}</td>
                    <td>
                    <form action="/games/{{$item->id}}"" method="POST" style="display:inline-block;">
                        <a href="/games/{{$item->id}}" class="btn btn-info btn-sm">Detail</a>
                        <a href="/games/{{$item->id}}" class="btn btn-warning btn-sm">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" 
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" 
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" 
            crossorigin="anonymous"></script>

</body>
</html>
