@extends('template')

@section('contenu')
<link rel="icon" type="image/png" alt="logo Bike Store" href="../../public/img/icons/LogoHaro.png" />

<div class="card-body" style="background-image: url('../img/bg-02.png');">

    <h4 class="card-title">Bikes Stores</h4>
    <!------------ PREMIERE LIGNE (PRODUCTION VENTE REPORTING ADMINISTRATION) --------------------------------------------->
    <div class="default-tab">
        <ul class="nav nav-tabs mb-8" role="tablist">
            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#production">PRODUCTION</a>
            </li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#ventes">VENTES</a>
            </li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#reporting">REPORTING</a>
            </li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#administration">ADMINISTRATION</a>
            </li>
        </ul>
        <div class="tab-content">
            <!--FENETRE  PRODUCTION  ---------------------------------------------------------------------------->
            <div class="tab-pane fade show active" id="production" role="tabpanel">
                <div class="p-t-1">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-body">
                                <h4>“La réussite de la production repose sur les attentions prêtées aux détails.”</h4>
                                <div class="custom-tab-1">
                                    <ul class="nav nav-tabs mb-8">
                                        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#marque">Marque</a>
                                        </li>
                                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#category">Catégorie</a>
                                        </li>
                                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#product">Produits</a>
                                        </li>
                                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#stock">Stock</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="marque" role="tabpanel">
                                            <!-- MARQUE -->
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-xl-8">
                                                        <h4>Liste des marques</h4>                                                        
                                                        <table class="table table-sm table-hover">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col"></th>
                                                                    <th scope="col">Choisir une marque</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @yield('liste_des_marques')
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="category">
                                            <!-- CATEGORIE -->
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-xl-8">
                                                        <h4>Liste des catégories</h4>
                                                        <table class="table table-sm table-hover">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col"></th>
                                                                    <th scope="col">Choisir une catégorie</th>
                                                                    <th scope="col"></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @yield('liste_des_categories')
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="product">
                                            <!-- PRODUITS -->
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-xl-12">
                                                        <h4>Liste des produits</h4>
                                                        <table class="table table-sm table-hover">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col -4"></th>
                                                                    <th scope="col">Nom</th>
                                                                    <th scope="col">Millesime</th>
                                                                    <th scope="col">Marque</th>
                                                                    <th scope="col">Catégorie</th>
                                                                    <th scope="col">Prix €</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @yield('liste_des_produits')
                                                            </tbody>
                                                        </table>

                                                    </div>                                                    
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="stock">
                                            <!-- STOCK -->
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-xl-12">
                                                        <h4>Liste des stocks</h4>
                                                        <table class="table table-sm table-hover">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col"></th>
                                                                    <th scope="col">Nom</th>
                                                                    <th scope="col">Stocks</th>
                                                                    <th scope="col">Magasin</th>
                                                                    <th scope="col">Production</th>
                                                                    <th scope="col">Prix €</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @yield('liste_des_stocks') 
                                                                
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--FENETRE VENTE   ---------------------------------------------------------------------->
            <div class="tab-pane fade" id="ventes">
                <div class="p-t-15">
                    <div class="col-md-7">
                        <div class="card">
                            <div class="card-body">
                                <h4>“Les yeux de celui qui achète sont dans la main de celui qui vend.”</h4>
                                <div class="custom-tab-1">
                                    <ul class="nav nav-tabs mb-6">
                                        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#marqueBis">Marque</a>
                                        </li>
                                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#categorieBis">Catégorie</a>
                                        </li>
                                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#produitsBis">Produits</a>
                                        </li>
                                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#stockBis">Stock</a>
                                        </li>
                                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#client">Client</a>
                                        </li>
                                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#vente">Vente</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="marqueBis" role="tabpanel">
                                            <!-- MARQUE -->
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-xl-10">
                                                        <h4>Liste des marques</h4>
                                                        <table class="table table-sm table-hover">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col"></th>
                                                                    <th scope="col">Nom</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                               @yield('liste_des_marques')
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="categorieBis">
                                            <!-- CATEGORIE -->
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-xl-12">
                                                        <h4>Liste des catégories</h4>
                                                        <table class="table table-sm table-hover">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col"></th>
                                                                    <th scope="col">Choisir une catégorie</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @yield('liste_des_categories')
                                                            </tbody>
                                                        </table>
                                                    </div>                                                    
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="produitsBis">
                                            <!-- PRODUITS -->
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-xl-12">
                                                        <h4>Liste des produits</h4>
                                                        <table class="table table-sm table-hover">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col"></th>
                                                                    <th scope="col">Nom</th>
                                                                    <th scope="col">Millesime</th>
                                                                    <th scope="col">Marque</th>
                                                                    <th scope="col">Catégorie</th>
                                                                    <th scope="col">Prix €</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @yield('liste_des_produits')
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="stockBis">
                                            <!-- STOCK -->
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-xl-6">
                                                        <h4>Liste des stocks</h4>
                                                        <table class="table table-sm table-hover">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col"></th>
                                                                    <th scope="col">Nom</th>
                                                                    <th scope="col">Stocks</th>
                                                                    <th scope="col">Magasin</th>
                                                                    <th scope="col">Production</th>
                                                                    <th scope="col">Prix €</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @yield('liste_des_stocks')
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="client">
                                            <!-- PRODUITS -->
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-xl-12">
                                                        <h4>Liste des clients</h4>
                                                        <table class="table table-sm table-hover">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col"></th>
                                                                    <th scope="col">Nom</th>
                                                                    <th scope="col">prénom</th>
                                                                    <th scope="col">Téléphone</th>
                                                                    <th scope="col">Email</th>
                                                                    <th scope="col">Rue</th>
                                                                    <th scope="col">Ville</th>
                                                                    <th scope="col">Pay</th>
                                                                    <th scope="col">CodePostal</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @yield('liste_des_clients')
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>


                                        <div class="tab-pane fade" id="vente">
                                        <!-- VENTES -->
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
            </div>
        </div>
            <!--FENETRE  REPORTING   ----------------------------------------------------------------->
            <div class="tab-pane fade" id="reporting" role="tabpanel" style="background-color: white;">

                @include('reporting')
            </div>
            
            <!--FENETRE  ADMINISTRATION   ----------------------------------------------------------------->

            <div class="tab-pane fade"  id="administration">
                @include('admin')
            </div>

            <!-------------------------------------FIN-------------------------------------------------------->
        </div>
    </div>
</div>

@stop