{{ $owner->first_name }}

<h1>Owner details</h1>
<h2> {{ $owner->first_name . ' ' . $owner->surname }} </h2>
@if (!empty($owner->email))
<span> email: {{ $owner->email }} jakub53k@gmail.com </span>
@else
<span> No email </span>
@endif

@if (!empty($owner->phone))
<span> tel: {{ $owner->phone }} +421 948 171 031 </span>
@else
<span> No phone number </span>
@endif

<br>
@if (!empty($owner->address))
<h3> {{ $owner->address }} </h3>
@else
<h3> No Adress </h3>
@endif


<p> Short Info </p>
