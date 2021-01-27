@extends('template')

@section('contenu')

<form name="category" action="{{ url('category/create')  }}" method="POST">
    @csrf
    <div class="form">
        <div class="error">{{ $errors->has("category") ? $errors->first("category") : "" }}</div>
        <input name="category" type="text" class="form-control form-control-user" id="category" placeholder="New category">
    </div>
    <br>
    <button type="submit" class="btn btn-primary btn-user btn-block">Enregistrer</button>
</form>

@stop

