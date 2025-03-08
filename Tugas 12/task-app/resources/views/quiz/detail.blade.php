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
        <div class="container mt-4">
            <h1>Detail Data Game</h1>
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">{{ $game->name }}</h2>
                    <p><strong>Gameplay:</strong> {{ $game->gameplay }}</p>
                    <p><strong>Developer:</strong> {{ $game->developer }}</p>
                    <p><strong>Year:</strong> {{ $game->year }}</p>
                </div>
            </div>
            <a href="/games" class="btn btn-primary btn-sm mt-3">Kembali</a>
        </div>
        
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    </body>

</html>