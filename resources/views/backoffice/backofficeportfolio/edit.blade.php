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
<h1 class="text-center"  style="margin: 150px"> BACK OFFICE | Edit Portfolio</h1>

    <form class="d-flex flex-column" action="{{route('portfolios.update', $portfolio->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <span class="fw-bold fs-5">Image :</span>  <input class="w-25" value="{{$portfolio->img}} " type="file" name="btn1">
        <button type="submit" class="btn btn-info " style="width: 100px; margin:20px;">SAVE</button>
        <a href="/Modif/header" class="text-center" style="width:200px;  background-color: rgb(126, 123, 123); padding: 20px; color:white; margin:15px">Retours vers Portfolio a modifier</a>

    </form>
    
    
    



@endsection