@extends('template')

@section('contenu')


<h4>{{ !empty($brand) ? "Modifier" : "Créer" }} </h4>



<form class="col-md-6" name="brand" action="{{ !empty($brand) ? url('/brand/'.$brand->getId().'/edit') : url('/brand/create')}}" method="POST">
    @csrf
    <div class="form-group row, form-brand">
       
        <div class="col-md-9">
            <input name="brand" type="text" class="form-control form-control-user" id="brand" placeholder="New brand" value="{{ !empty($brand) ? $brand->getName() : "" }}">
        </div>
    </div>
    <div class="form-group row">
        <div class="col">
            <input class="btn btn-primary btn-user btn-block" type="submit" value="submit">
        </div>
    </div>
</form>

@stop


.



