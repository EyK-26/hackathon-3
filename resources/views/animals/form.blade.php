<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
    <style>
        .alert-success {
            color: darkgreen;
            background-color: lightgreen;
        }
        .alert-error {
            color: darkred;
            background-color: rgb(226, 161, 161);
            font-size: 2rem;
        }
    </style>
</head>
<body>

    

@if($animal->id)
    <h1>Edit details</h1>
    @else
    <h1>Enter details</h1>
    @endif
    @if ($animal->id)
    <form action="{{ route('animals.update', $animal->id) }}" method="post">
        @method('PUT')

        @else
        <form action="{{ route('animals.store') }}" method="post">
    @endif
    @csrf

    @include('components.messages')

    <label for="name">Name</label>
    <br>
    <input type="text" id="name" name="name" value = {{ old('name', $animal->name)}}>
    <br>
    <label for="species">Species</label>
    <br>
    <input type="text" id="species" name="species" value = {{ old('species', $animal->species)}}>
    <br>
    <label for="breed">Breed</label>
    <br>
    <select name="breed" id="breed">
@foreach($breeds as $breed)

<option value={{ $breed }}> {{ $breed }}</option>

@endforeach
</select>

    <br>
    <label for="age">Age</label>
    <br>
    <input type="text" id="age" name="age" value = {{ old('age', $animal->age)}}>
    <br>
    <label for="weight">Weight</label>
    <br>
    <input type="text" id="weight" name="weight" value = {{ old('weight', $animal->weight)}}>
    <br>
    <button type="submit">Save</button>

    </form>


        
    
</body>
</html>