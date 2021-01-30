@extends('homeTemplate')

@section('liste_des_marques')
@foreach($brand as $b)
<tr>
    <th>{{ $b->getId() }}</th>
    <td>{{ $b->getName() }}</td>
    <td>
        <a href="{{ url('/brand/create') }}">
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
        <a href="{{ url('/category/create') }}">
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

    <li><mark>QUANTITE : </mark>{{$sto->getQuantity()}}</li>
    <li><mark>MAGASIN  : </mark>{{$sto->getStore()->getName()}} </li>
    <li><mark>ARTICLE  :</mark>{{$sto->getProduct()->getName()}} </li>
    <hr>

    @endforeach
</ul>

@stop

@section('liste_des_clients')
@foreach($customer as $cl)
<tr>
    <th>{{ $cl->getId() }}</th>
    <td>{{ $cl->getNames() }}</td>
    <td>{{ $cl->getName() }}</td>
    <td>{{ $cl->getPhone() }}</td>
    <td>{{ $cl->getEmail() }}</td>
    <td>{{ $cl->getStreet() }}</td>
    <td>{{ $cl->getCity() }}</td>
    <td>{{ $cl->getState() }}</td>
    <td>{{ $cl->getZipCode() }}</td>
    <td>
    <div><br><br>

        <a href="{{ url('/customer/'.$cl->getId().'/create') }}">
            <button type="button" class="btn btn-primary mb-1">Ajouter</button>
        </a>
        <a href="{{ url('/customer/'.$cl->getId().'/edit') }}">
            <button type="button" class="btn btn-secondary mb-1">Modifier</button>
        </a>
        <a href="{{ url('/customer/'.$cl->getId().'/delete') }}">
            <button type="button" class="btn btn-danger mb-1">Suprimer</button>
        </a>
    </td>
    </div>
</tr>
@endforeach
@stop





