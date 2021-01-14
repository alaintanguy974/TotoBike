@extends('template')

@section('contenu')

<ul>
    @foreach($stock as $sto)
    <li>
        {{$sto->getName()}}
    </li>
    <li>
        {{$sto->getId()}}
    </li>
    <li>
        {{$sto->getName()}}
    </li>
    <li>
        {{$sto->getId()}}
    </li>

    @endforeach
</ul>

@endsection
