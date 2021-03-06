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
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="utilisateur" role="tabpanel">

                        <!-- UTILISATEURS -->
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-7">
                                    <h4>Liste des utilisateurs</h4>
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
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Toto</td>
                                                <td>Marc</td>
                                                <td>@.net</td>
                                                <td>0692</td>
                                                <td>Santa-Cruz</td>
                                                <td>Alain</td>
                                            </tr>
                                             <tr>
                                                 <th scope="row">2</th>
                                                 <td>Coco</td>
                                                 <td>Yann</td>
                                                 <td>@twit</td>
                                                 <td>0262</td>
                                                 <td>Santa-Cruz</td>
                                                 <td>Alain</td>
                                             </tr>

                                            <tr>
                                                <th scope="row">3</th>
                                                <td>Jaco</td>
                                                <td>Tonton</td>
                                                <td>@.mail</td>
                                                <td>0262</td>
                                                <td>Santa-Cruz</td>
                                                <td>Ray</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">4</th>
                                                <td colspan="2">Larry</td>
                                                <td>@twit</td>
                                                <td>0262</td>
                                                <td>Santa-Cruz</td>
                                                <td>Alain</td>
                                            </tr>
                                               
                                        </tbody>
                                    </table>
                                </div>

                                <div class="col-xl-5">

                                    <div class="card-body">
                                        <h4>Enregistrer un utilisateur</h4>
                                        <form class="user">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-user" id="first_name" aria-describedby="firstNameHelp" placeholder="Prénom">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-user" id="last_name" aria-describedby="lastNameHelp" placeholder="Nom">
                                            </div>
                                            <div class="form-group">
                                                <input type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="email">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-user" id="phone" aria-describedby="phoneHelp" placeholder="téléphone">
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Mot de passe">
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Confirmer le mot de passe">
                                            </div>

                                            <div class="form-group">
                                                <select id="magasin" class="form-control" value="{{ old('magasin') }}" required>
                                                    <option selected>Magasin</option>
                                                    <option>Santa Cruz</option>
                                                    <option>Baldwin</option>
                                                    <option>Rowlett</option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <select id="manager" class="form-control" value="{{ old('profil') }}" required>
                                                    <option selected>Responsable direct</option>
                                                    <option>Vendeur</option>
                                                    <option>Administratif</option>
                                                    <option>Préparateur</option>
                                                    <option>Réparateur</option>
                                                    <option>Direction</option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <p class="form-control form-control-user">
                                                    Personnel en activité &nbsp;? &nbsp;&nbsp;&nbsp;
                                                    <label class="radio-inline"><input type="radio" name="active" checked> &nbsp; Oui</label>&nbsp;&nbsp;&nbsp;
                                                    <label class="radio-inline"><input type="radio" name="active"> &nbsp; Non</label>
                                                </p>
                                            </div>

                                            <a href="index.html" class="btn btn-primary btn-user btn-block">
                                                Enregistrer
                                            </a>

                                        </form>
                                        <hr>
                                    </div>
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
