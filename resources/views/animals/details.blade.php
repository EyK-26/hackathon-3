<h1>Animal details</h1>

<h2> {{ $animal->name }} </h2>
<h3> owner: {{ $animal->owner->first_name }} </h3>
<br>

<img href="/images/pets/{{ $animal->image->path }}" alt="{{ $animal->name }}" />

<span> species: {{ $animal->species }} </span>
<br>
<span> breed: {{ $animal->breed }} </span>
<br>
<span> age: {{ $animal->age }} </span>
<br>
<span> weight: {{ $animal->weight }} </span>
<br>
