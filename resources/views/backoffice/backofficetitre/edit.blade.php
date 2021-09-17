@extends('templateback')
@section('content')
@if ($errors->any())
<div class="alert alert-danger" >
    <ul>
        @foreach ($errors->all() as $error )
        <li>{{ $error }}</li>
        @endforeach
    </ul>
    
</div>
@endif
<h1 class="text-center"  style="margin: 150px"> BACK OFFICE | Edit Titres</h1>

    <form class="d-flex flex-column" action="{{route('titres.update', $titre->id)}}" method="post">
        @csrf
        @method('PUT')
        <span class="fw-bold fs-5">titre1 :</span>  <input class="w-25" value="{{$titre->titre1}} " type="text" name="titre1">
        <span class="fw-bold fs-5">titre2 :</span> <input class="w-25" value="{{$titre->titre2}} " type="text" name="titre2">
        <span class="fw-bold fs-5">titre3 :</span> <input class="w-25" value="{{$titre->titre3}} " type="text" name="titre3">
        <span class="fw-bold fs-5">titre4 :</span> <input class="w-25" value="{{$titre->titre4}} " type="text" name="titre4">
        
        <button type="submit" class="btn btn-info " style="width: 100px; margin:20px;">SAVE</button>
        <a href="/Modif/header" class="text-center" style="width:200px;  background-color: rgb(126, 123, 123); padding: 20px; color:white; margin:15px">Retours vers Header a modifier</a>

    </form>
    
    
    



@endsection