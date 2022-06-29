<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <h1>Homepage</h1>

    <h2>Trains</h2>

    <ol>
        @foreach ($trains as $train)
            <li>
                <p><strong>Agenzia:</strong> {{ ucfirst($train->agency) }}</p>
                <p><strong>Stazione di partenza:</strong> {{ $train->departure_station }}</p>
                <p><strong>Stazione di arrivo:</strong> {{ $train->arrival_station }}</p>
                <p><strong>Data/ora partenza:</strong> {{ $train->departure_time }}</p>
                <p><strong>Data/ora arrivo:</strong> {{ $train->arrival_time }}</p>
                <p><strong>Codice: </strong> {{ $train->train_code }}</p>
                <p><strong>Numero di carrozze:</strong> {{ $train->carriages_number }}</p>
                <p><strong>In orario:</strong> {{ $train->on_time == true ? 'Si' : 'No' }}</p>
                <p><strong>Cancellato:</strong> {{ $train->deleted == true ? 'Si' : 'No' }}</p>
            </li>
        @endforeach
    </ol>

</body>

</html>
