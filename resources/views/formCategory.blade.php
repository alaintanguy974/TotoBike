@extends('template')

@section('contenu')

<h4>MODIFIER le nom de la catégorie</h4>

<form class="col-md-6" name="categorY" action="{{ !empty($category) ? url('/category/'.$category->getId().'/edit') : url('/category/create')}}" method="post">
    @csrf
    <div class="form-group row, form-categorY">
        <label for="categories" class="col-md-3 col-form-label">Nom :</label>
        <div class="col-md-9">
            <input name="categorY" type="text" class="form-control form-control-user" id="categorY" placeholder= "Nouvelle categorie" value="{{ !empty($category) ? $category->getName()  : "" }}">
        </div>
    </div>
    <div class="form-group row">
        <div class="col">
           <input class="btn btn-primary btn-user btn-block" type="submit" value="submit">
        </div>
    </div>
</form>

@stop






