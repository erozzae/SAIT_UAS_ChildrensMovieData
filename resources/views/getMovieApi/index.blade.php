<!DOCTYPE html>
<html>

<head>
    <title>Film Untuk Anak</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
</head>

<body>

    <div class="container mt-3">



        <div class="row justify-content-center" id="movie-list">
            @foreach ($movieKids as $movie)
                <div class="col-md-4">
                    <div class="card mb-3">
                        <img src="{{ $movie['Poster'] }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"> {{ $movie['Title'] }} </h5>
                            <p class="card-text"> Year: {{ $movie['Year'] }}</p>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                style="text-decoration: none;">Detail</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
    <script src="js/script.js"></script>
</body>

</html>
