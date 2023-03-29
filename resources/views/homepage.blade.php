<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Model Controller</title>
    @vite('resources/js/app.js')
</head>

<body>

    <main>
        <section class="movies-card container mt-5">

            <div class="row row-cols-4 g-3">

                @foreach ($movies as $movie)
                <div class="col">
                    <div class="card text-bg-dark mb-3">
                        <div class="card-header">Voto: {{$movie->vote}}</div>
                        <div class="card-body">
                          <h5 class="card-title">{{$movie->title}}</h5>
                          <p class="card-text">Titolo originale: {{$movie->original_title}}</p>
                          <p class="card-text">Data di uscita: {{$movie->date}}</p>
                          <p class="card-text">Nazione: {{$movie->nationality}}</p>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </section>
    </main>

    
</body>

</html>