<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewpophp artisan preset:ui bootstraprt" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Model Controller</title>
    @vite('resources/js/app.js')
</head>
<body>
    <div class="container justify-content-center align-items-center">
        <h1 class="text-center text-danger py-4">Trains</h1>
        {{-- @dump($movies) --}}
        @foreach ($trains as $train) 
        @if ($train->data_di_partenza === '2023-01-24')
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Stazione di partenza: {{$train->stazione_di_partenza}}</h5>    
                    <h5 class="card-title">Stazione di arrivo: {{$train->stazione_di_arrivo}}</h5>    
                    <p class="card-text">Data di partenza: <b>{{$train->data_di_partenza}}</b></p>
                    <p class="card-text">Orario di partenza: <b>{{$train->orario_di_partenza}}</b></p>
                    <p class="card-text">Orario d'arrivo: <b>{{$train->orario_di_arrivo}}</b></p>
                    <p class="card-text">Codice treno: <b>{{$train->codice_treno}}</b></p>
                    <p class="card-text">Numero di carrozze: <b>{{$train->numero_di_carrozze}}</b></p>
                    <p class="card-text">In orario: <b>
                        @if ($train->in_orario === 1)
                        true
                        @else 
                        false
                        @endif
                    </b></p>
                    <p class="card-text">Cancellato: <b>
                        @if ($train->cancellato === 1)
                        true
                        @else 
                        false
                        @endif
                    </b></p>
                </div>
            </div>
        @endif   
        @endforeach
    </div>
</body>
</html>