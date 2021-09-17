
@extends('templateback')

@section('content')
    <h1 class="text-center"  style="margin: 150px"> BACK OFFICE | titre</h1>

    <a class="navbar-brand" href="#page-top">{{$data7[0]->titre1}} </a>

    <!-- Portfolio Section Heading-->
    <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">{{$data7[0]->titre2}}</h2>
    
     <!-- About Section Heading-->
     <h2 class="page-section-heading text-center text-uppercase text-white">{{$data7[0]->titre3}}</h2>

     <!-- Contact Section Heading-->
     <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">{{$data7[0]->titre4}}</h2>

    
        <div class="m-3 d-flex">
            <a href="/dashboard" class="text-center" style="width:250px;  background-color: rgb(126, 123, 123); padding: 20px; color:white; margin:auto">Retours vers Backoffice Home</a>
        <a class="text-center" href="{{route('titres.edit',$data7[0]->id)}} " style="width:200px;  background-color: rgb(70, 199, 98); padding: 20px; color:white;" >Edit</a>
        </div>
    
@endsection



