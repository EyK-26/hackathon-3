<h1>Owner details</h1>
<h2> {{ $owner->first_name . ' ' . $owner->surname }} </h2>
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

<h2>{{ $owner->first_name . "'s pets: "}}</h2>
@foreach ($owner->animals as $pet)
<li> {{ $pet->name }} </li>
@endforeach
