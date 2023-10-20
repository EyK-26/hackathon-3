@if (Session::has('success_message'))

<div class="alert alert-success">
    {{ Session::get('success_message') }}
</div>

@endif

@if (count($errors) > 0)
<div class="alert alert-error">

    @foreach ($errors->all() as $error)
    {{ $error }}
    @endforeach

</div>
@endif