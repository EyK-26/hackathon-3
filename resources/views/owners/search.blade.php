@include('components.htmlopen')

<body>
    @include('components.topmenu')
    @include('search.searchbar')
    <h1>Searched Owner</h1>
    @if (count($owners) > 0)
    <ul style="list-style: none">
        @foreach ($owners as $owner)
        <h2>
            {{ $owner->first_name }}
            {{ $owner->surname }}
            <br>
            <a href="{{ route('owners.show', $owner->id) }}">Owner's profile</a>
            @foreach ($owner->animals as $animal)
            <li>
                <a href="{{ route('animals.show', $animal->id) }}">{{ $animal->name }}</a>
            </li>
            @endforeach
        </h2>
        <hr>
        @endforeach
    </ul>
    @else
    <h1>Not found</h1>
    @endif
</body>
@include('components.htmlclose')