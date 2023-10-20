<body style="background-color: #d1d1d1; padding: 0; margin: 0;">

    @include('components.topmenu')
    <div style="padding-left: 2em;">
        <h1> {{ $owner->first_name . ' ' . $owner->surname }} </h1>
        @if (!empty($owner->email))
        <span> email: {{ $owner->email }} </span>
        @else
        <span> No email </span>
        @endif

        @if (!empty($owner->phone))
        <span> tel: {{ $owner->phone }} </span>
        @else
        <span> No phone number </span>
        @endif

        <br>
        @if (!empty($owner->address))
        <h3> {{ $owner->address }} </h3>
        @else
        <h3> No Adress </h3>
        @endif
    </div>
    <div style="display: flex;">
        <div class="pets" style="background-color: #afafaf; max-width: 70em; padding-bottom: 5em; padding-top: 0.1em; padding-left: 2em;">
            <h2>{{ $owner->first_name . "'s pets: "}}</h2>
            @foreach ($owner->animals as $animal)
            <div style="margin: 20px;">
                @include('animals.details')
            </div>
            @endforeach
        </div>
        <div>
            <style>
                table,
                th,
                td {
                    border: 1px solid black;
                    border-collapse: collapse;
                }

                td {
                    padding: 0 1em;
                }
            </style>
            <table style="margin: 2em;">
                <tr>
                    <th>Date</th>
                    <th>Pet</th>
                    <th>Detail</th>
                    <tr />
                    @foreach ($owner->visits as $visit)
                <tr>
                    <td>{{ $visit->visit_date }}</td>
                    <td>{{ $visit->animal->name }}</td>
                    <td>{{ $visit->description }}</td>
                    <tr />
                    @endforeach
            </table>
        </div>
    </div>
</body>
