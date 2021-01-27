@extends('template')

@section('contenu')


<form class="col-md-6" name="categorY" action="{{ !empty($category) ? url('/category/'.$category->getId().'/edit') : url('/category/create')}}" method="post">

    @csrf
    <div class="form">
        
        <input name="category" type="text" class="form-control form-control-user" id="category" placeholder="New category" value="{{ !empty($category) ? $category->getName()  : "" }}">

    </div>
    <br>
    <button type="submit" class="btn btn-primary btn-user btn-block">Enregistrer</button>
</form>


@stop
