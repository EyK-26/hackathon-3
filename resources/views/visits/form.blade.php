<h1>Enter visit details</h1>
<form action="{{ route('visits.store') }}" method="post">
    @php
    $animalId = $_GET['animal_id'] ?? null;
    $ownerId = $_GET['owner_id'] ?? null;
    @endphp
    @csrf
    @include('components.messages')
    <input type="hidden" name="ownerId" value="{{ $ownerId }}">
    <input type="hidden" name="animalId" value="{{ $animalId }}">
    <label for="name">Your Name</label>
    <input type="text" id="name" name="name" value="">
    <br>
    <label for="petname">Your Pet's name</label>
    <input type="text" id="petname" name="petname" value="">
    <br>
    <label for="description">Description</label>
    <textarea name="description" id="" cols="30" rows="10"></textarea>
    <br>
    <label for="date">Visit Date</label>
    <input type="date" name="visit_date" id="visit_date">
    <br>
    <button type="submit">Save</button>
    <br>
</form>