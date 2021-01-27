@extends('template')

@section('contenu')
     <ul>
        @foreach($brands as $b)
            <li>
                {{ $b->getName() }}
            </li>
            <li>
                {{ $b->getId() }}
            </li>
        @endforeach
    </ul>
@stop

@section('contenu_bis')
   
    Coucou
@stop