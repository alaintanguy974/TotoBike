@extends('template')


@section('create')

<h4>MODIFIER le nom du produit</h4>

<form class="col-md-6" name="product" action="{{ !empty($product) ? url('/product/'.$category->getId().'/edit') : url('/product/create')}}" method="POST">
    @csrf
    <div class="form-group row, form-product">
        <label for="product" class="col-md-3 col-form-label">Nom :</label>
        <div class="col-md-9">
            <input name="product" type="text" class="form-control col-md-3 col form-control-user" id="product" placeholder="Nouveau produit" value="{{ !empty($product) ? $product->getName()  : "" }}">
        </div>
    </div>
    <div class="form-group row">
        <div class="col">
            <input class="btn btn-primary btn-user btn-block" type="submit" value="submit">
        </div>
    </div>
</form>