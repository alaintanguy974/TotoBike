@extends('template')

@section('contenu')
    Coucou
@stop

@section('contenu_bis')

    <ul>
        @foreach($brands as $b)
            <li>
                {{ $b->getName() }}
            </li>
            <li>
                {{ $b->getId() }}
            </li>
             <a href="{{ url('/brands/'.$b->getId().'/create') }}">
                 <button type="button" class="btn btn-primary mb-1">Ajouter</button>
             </a>
             <!--<a href="{{ url('/brands/'.$b->getId().'/read') }}">
                        <button type="button" class="btn btn-info mb-1">Lire</button>
             </a>-->
             <a href="{{ url('/brands/'.$b->getId().'/edit') }}">
                 <button type="button" class="btn btn-secondary mb-1">Modifier</button>
             </a>
             <a href="{{ url('/brands/'.$b->getId().'/delete') }}">
                 <button type="button" class="btn btn-danger mb-1">Suprimer</button>
             </a>

        @endforeach
    </ul>
@stop