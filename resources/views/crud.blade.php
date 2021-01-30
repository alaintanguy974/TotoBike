@extends('template')


@section('contenu')


<a href="{{ url('/') }}">
    <button type="button" class="btn btn-primary mb-1">Ajouter</button>
</a>

<a href="{{ url('/') }}">
    <button type="button" class="btn btn-secondary mb-1">Modifier</button>
</a>
<a href="{{ url('/home') }}">
    <button type="button" class="btn btn-danger mb-1">Suprimer</button>
</a>

@stop
