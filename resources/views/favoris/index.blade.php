<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Favoris</title>
</head>

<body>
    <div class="row">
        <div class="container mt-5">
            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Categories</th>
                                <th scope="col">Choix</th>
                            </tr>
                        </thead>
                        <form action="" method="post">
                            @csrf
                            <tbody>

                             <tr>
                                 <th scope="row"></th>
                                <td>
                                     <div class="form-check">
                                        <input class="form-check-input" type="radio" name="categorie_id" id=""
                                            value="" required>
                                    </div>

                                     <div>
                                        <input type="hidden" value="{{Auth::user()->id}}" name='user_id'>
                                    </div>

                                </td>
                            </tr>

                            </tbody>
                    </table>
                    <button type="submit" class="btn btn-primary">Valider</button>
                    </form>
                </div>
            </div>

            <div class="dropdown">
                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-expanded="false">
                  Dropdown link
                </a>

                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </div>



@foreach ($biblios as $biblio)

{{ $biblio->books->titre }}
<img src="{{ asset('image' . '/' . $biblio->books->photo) }}" alt="{{ $biblio->books->titre }}"
class="w-25 h-25">
{{$biblio->books->document}}
@endforeach



        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
</html>
