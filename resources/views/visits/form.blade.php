@if($visit->id)
<h1>Edit visit details</h1>
@else
<h1>Enter visit details</h1>
@endif
@if ($visit->id)
<form action="{{ route('visits.update', $visit->id) }}" method="post">
    @method('PUT')
    @else
    <form action="{{ route('visits.store') }}" method="post">
        @endif
        @csrf
        @include('components.messages')
        <label for="name">Your Name</label>
        <input type="text" id="name" name="name" value={{ old('name', $owner->first_name)}}>
        <br>
        <label for="petname">Your Pet's name</label>
        <input type="text" id="petname" name="petname" value={{ old('name', $pet->name)}}>
        <br>
        <label for="description">Description</label>
        <input type="text" name="description">
        <br>
        <label for="date">Visit Date</label>
        <input type="date" name="visit_date" id="visit_date">
        <br>
        <button type="submit">Save</button>
        <br>
    </form>