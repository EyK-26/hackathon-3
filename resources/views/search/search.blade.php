<form action="{{ route('animals.index', ) }}" method="get">
    @csrf
    <select name="search" id="search" value=>
        <option value="" disabled>Search by</option>
        <option value="animal">Pet</option>
        <option value="owner">Owner</option>
    </select>
    <input type="text" name="name" id="name">
    <input type="submit" value="search">
</form>