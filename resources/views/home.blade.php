@extends('homeTemplate')

@section('liste_des_marques')
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

@stop

@section('liste_des_categories')

@foreach($category as $cat)
<tr>
    <th>{{ $cat->getId() }}</th>
    <td>{{ $cat->getName() }}</td>
    <td>
        <a href="{{ url('/category/'.$cat->getId().'/create') }}">
            <button type="button" class="btn btn-primary mb-1">Ajouter</button>
        </a>

        <a href="{{ url('/category/'.$cat->getId().'/edit') }}">
            <button type="button" class="btn btn-secondary mb-1">Modifier</button>
        </a>
        <a href="{{ url('/category/'.$cat->getId().'/delete') }}">
            <button type="button" class="btn btn-danger mb-1">Suprimer</button>
        </a>
    </td>
</tr>
@endforeach

@stop

@section('liste_des_produits')
@foreach($product as $p)
<tr>
    <th>{{ $p->getId() }}</th>
    <td>{{ $p->getName() }}</td>
    <td>{{ $p->getYear() }}</td>
    <td>{{ $p->getBrand()->getName() }}</td>
    <td>{{ $p->getCategory()->getName() }}</td>
    <td>{{ $p->getPrice() }}</td>
    <td class="col -5">

        <a href="{{ url('/product/'.$p->getId().'/create') }}">
            <button type="button" class="btn btn-primary mb-1">Ajouter</button>
        </a>

        <a href="{{ url('/product/'.$p->getId().'/edit') }}">
            <button type="button" class="btn btn-secondary mb-1">Modifier</button>
        </a>
        <a href="{{ url('/product/'.$p->getId().'/delete') }}">
            <button type="button" class="btn btn-danger mb-1">Suprimer</button>
        </a>
    </td>

</tr>
@endforeach
@stop

@section('liste_du personnel')
@foreach($staff as $sta)
<tr>
    <th>{{ $sta->getId() }}</th>
    <td>{{ $sta->getNames() }}</td>
    <td>{{ $sta->getName() }}</td>
    <td>{{ $sta->getEmail() }}</td>
    <td>{{ $sta->getPhone() }}</td>
    <td>{{ $sta->getActive() }}</td>
    <td>{{ $sta->getStore()->getName() }}</td>
    <td>{{ $sta->getManager() }}</td>

    <td class="col -5">

        <a href="{{ url('/staff/'.$p->getId().'/create') }}">
            <button type="button" class="btn btn-primary mb-1">Ajouter</button>
        </a>

        <a href="{{ url('/staff/'.$p->getId().'/edit') }}">
            <button type="button" class="btn btn-secondary mb-1">Modifier</button>
        </a>
        <a href="{{ url('/staff/'.$p->getId().'/delete') }}">
            <button type="button" class="btn btn-danger mb-1">Suprimer</button>
        </a>
    </td>

</tr>
@endforeach
@stop


@section('liste_des_stocks')

<ul>
    @foreach($stock as $sto )

    <li>{{$sto->getQuantity()}}</li>
    <li>{{$sto->getStore()->getName()}} </li>
    <li>{{$sto->getProduct()->getName()}} </li>
    <li>
        <a href="{{ url('/stock/'.$sto->getStore()->getId() .'/'.$sto->getProduct()->getId().'/create') }}">
            <button type="button" class="btn btn-primary mb-1">Ajouter</button>
        </a>
        <a href="{{ url('/stock/'.$sto->getStore()->getId() .'/'.$sto->getProduct()->getId().'/edit') }}">
            <button type="button" class="btn btn-secondary mb-1">Modifier</button>
        </a>
        <a href="{{ url('/stock/'.$sto->getStore()->getId() .'/'.$sto->getProduct()->getId().'/delete') }}">
            <button type="button" class="btn btn-danger mb-1">Suprimer</button>
        </a>
    </li>

    @endforeach
</ul>

@stop


