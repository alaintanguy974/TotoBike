@extends('template')

@section('contenu')

<div class="p-t-15">
<div class="col-md-10">
    <div class="card">
        <div class="card-body">
            <!--<h4>“L'abondance est le fruit d'une bonne administration.”</h4>
            <h4 class="card-title">Custom Tab 1</h4>-->
            <!-- Nav tabs -->
            <div class="custom-tab-1">
                <ul class="nav nav-tabs mb-3">
                    <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#utilisateur">Utilisateur</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#profil">Profil</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#historique">Historique</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#register">Enregistrement</a>
                    </li>

                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="utilisateur" role="tabpanel">

                        <!-- UTILISATEURS -->
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-7">
                                    <h4>Liste du personnel</h4>
                                    <table class="table table-sm table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Nom</th>
                                                <th scope="col">Prénom</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Phone</th>
                                                <th scope="col">Magasin</th>
                                                <th scope="col">Responsable</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           
                                        foreach($staff as $sta)
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
                                        </tbody>
                                    </table>
                                </div>
                                <div  id="register">
                                    @include('register')
                                </div>


                               
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="profil">
                        <!-- PROFILE -->
                        <div class="container">
                            <div class="row">

                            </div>
                        </div>

                        <div class="tab-pane fade" id="historique">
                            <!-- HISTORIQUE -->
                            <div class="container">
                                <div class="row">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
