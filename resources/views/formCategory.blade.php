


@extends('template')

@section('contenu')


<form name="category" action="{{ url('category/create')  }}" method="POST">
    @csrf
    <div class="form">
        <label for="category" class="col-md-3 col-form-label">Nom :</label>
        <div class="col-md-9">
            <div class="error">{{ $errors->has("category") ? $errors->first("category") : "" }}
            </div>
            <input name="category" type="text" class="form-control form-control-user" id="category" placeholder="New category"value="{{ !empty($category) ? $category->getName()  : "" }}">
        </div>

    </div>
    <br>
    <button type="submit" class="btn btn-primary btn-user btn-block">Enregistrer</button>
</form>


@stop






