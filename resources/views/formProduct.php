@extends('template')


@section('create')

<h4>CREATION d'une nouveau produit</h4>
<form name="brand" action="">
    <div class="form-produit">
        <input type="text" class="form-control form-control-user" id="brand" placeholder="Nom du produit">
    </div><br>
    <select name="" id="" class="form-control form-control-user">
        <option value="allBrands">Choisir une marques</option>
    </select><br>
    <select name="" id="" class="form-control form-control-user">
        <option value="allCategory">Choisir une catégorie</option>
    </select>
    <br>
    <button type="submite" class="btn btn-primary btn-user btn-block">Enregistrer</button>
</form>