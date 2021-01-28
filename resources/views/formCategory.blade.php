


@extends('template')

@section('contenu')

<h4>CREATION d'une nouvelle catégorie</h4>
<form name="category" action="{{ !empty($category) ? url('/category/'.$category->getId().'/edit') : url('/category/create')}}" method="post">
    @csrf
    <div class="form-category">
        <input name="category" type="text" class="form-control form-control-user" id="category" placeholder="New category" value="{{ !empty($category) ? $category->getName()  : "" }}">
    </div>
    <br>
    <input class="btn btn-primary btn-user btn-block" type="submit" value="submit">
</form>

@stop







