<form action="{{ route('animals.search') }}" method="get">
    {{-- @csrf not neeeded for get --}}
    <select name="search" id="search">
        <option value="animal">Pet</option>
        <option value="owner">Owner</option>
    </select>
    <input type="text" name="name" id="name">
    <input type="submit" value="search">
</form>