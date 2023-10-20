@include('components.htmlopen')

<body>
    @include('components.topmenu')
    @include('search.searchbar')
    <h1>Searched Patient</h1>

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
    @else
    <h1>Not found</h1>
    @endif
</body>
@include('components.htmlclose')