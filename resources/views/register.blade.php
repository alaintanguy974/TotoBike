@extends('template')

@section('contenu')

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
@stop
