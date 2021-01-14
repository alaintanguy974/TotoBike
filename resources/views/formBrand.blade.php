@extends('template')

@section('contenu')

<h4>MODIFIER le nom de la marque</h4>

<form class="col-md-6" name="brands" action="{{ !empty($brands) ? url('/brands/'.$brands->getId().'/edit') : url('/brands/create')}}" method="post">
    @csrf
    <div class="form-group row, form-brands">

        <label for="brand" class="col-md-3 col-form-label">Nom :</label>
        <div class="col-md-9">
            <input name="brand" type="text" class="form-control form-control-user" id="brand" placeholder="New brand" value="{{ !empty($brands) ? $brands->getName()  : "" }}">
        </div>
    </div>
    <div class="form-group row">
        <div class="col">
            <input class="btn btn-primary btn-user btn-block" type="submit" value="submit">
        </div>
    </div>
</form>

@stop

