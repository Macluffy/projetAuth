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
<h1 class="text-center"  style="margin: 150px"> BACK OFFICE | Edit About</h1>

    <form class="d-flex flex-column" action="{{route('abouts.update', $about->id)}}" method="post">
        @csrf
        @method('PUT')
        <span class="fw-bold fs-5">btn1 :</span>  <input class="w-25" value="{{$about->btn1}} " type="text" name="btn1">
        <span class="fw-bold fs-5">btn2 :</span> <input class="w-25" value="{{$about->btn2}} " type="text" name="btn2">
        <span class="fw-bold fs-5">btn3 :</span> <input class="w-25" value="{{$about->btn3}} " type="text" name="btn3">
        <span class="fw-bold fs-5">btn4 :</span> <input class="w-25" value="{{$about->btn4}} " type="text" name="btn4">
        <button type="submit" class="btn btn-info " style="width: 100px; margin:20px;">SAVE</button>
        <a href="/Modif/about" class="text-center" style="width:200px;  background-color: rgb(126, 123, 123); padding: 20px; color:white; margin:15px">Retours vers about a modifier</a>

    </form>
    
    



@endsection