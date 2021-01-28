@extends('form')

@section('create')

<h4>MODIFIER le nom de la marque</h4>
@foreach($brand as $b)

<tr>
    <th>{{ $b->getId() }}</th>
    <td>{{ $b->getName() }}</td>
    <td>
        <a href="{{ url('/brand/'.$b->getId().'/create') }}">
            <button type="button" class="btn btn-primary mb-1">Ajouter</button>
        </a>
        <a href="{{ url('/brand/'.$b->getId().'/edit') }}">
            <button type="button" class="btn btn-secondary mb-1">Modifier</button>
        </a>
        <a href="{{ url('/brand/'.$b->getId().'/delete') }}">
            <button type="button" class="btn btn-danger mb-1">Suprimer</button>
        </a>
    </td>
</tr>
@endforeach


<form class="col-md-6" name="brand" action="{{ !empty($brand) ? url('/brand/'.$brand->getId().'/edit') : url('/brand/create')}}" method="post">
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

