@extends('template')

@section('contenu')

 <h4>Liste des marques</h4>
 <table class="table table-sm table-hover">
     <thead>
         <tr>
             <th scope="col"></th>
             
         </tr>
     </thead>
     <tbody>
         @yield('create')
     </tbody>
 </table>

@stop

