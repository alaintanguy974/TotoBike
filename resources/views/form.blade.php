@extends('template')

@section('contenu')

 
 <table class="table table-sm table-hover">
    
     <tbody>
         @yield('create')
     </tbody>
 </table>

 <table class="table table-sm table-hover">

     <tbody>
         @yield('update')
     </tbody>
 </table>


@stop

