<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Our patients</h1>
    @if (count($animals) > 0)
    <ul>
        @foreach ($animals as $animal)
        <h2>
            {{ $animal->name }}
            <a href="{{ route('animals.show', $animal->id) }}">Animal Details</a>
        </h2>
        <hr>
        <h3>
            Owner:
            {{ $animal->owner->first_name }} {{ $animal->owner->surname }}
            <a href="{{ route('owners.show', $animal->owner->id)  }}">Owner Details</a>
        </h3>
        <hr>
        <img src="/images/pets/{{ $animal->image->path }}" alt="{{ $animal->name }}">
        <hr>
        @endforeach
    </ul>
    @endif
</body>

</html>