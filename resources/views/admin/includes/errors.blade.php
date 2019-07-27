@if(count($errors) > 0)

<ul class="list-group mb-3">

    @foreach($errors->all() as $error)

    <div class="alert alert-danger" role="alert">
        <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
        <span class="sr-only">Error:</span>
        {{ $error }}
    </div>

    @endforeach

</ul>
@endif
