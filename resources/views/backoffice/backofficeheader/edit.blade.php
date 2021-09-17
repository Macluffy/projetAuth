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
<h1 class="text-center"  style="margin: 150px"> BACK OFFICE | Edit Header</h1>

    <form class="d-flex flex-column" action="{{route('headers.update', $header->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <span class="fw-bold fs-5">btn1 :</span>  <input class="w-25" value="{{$header->btn1}} " type="text" name="btn1">
        <span class="fw-bold fs-5">btn2 :</span> <input class="w-25" value="{{$header->btn2}} " type="text" name="btn2">
        <span class="fw-bold fs-5">btn3 :</span> <input class="w-25" value="{{$header->btn3}} " type="text" name="btn3">
        <span class="fw-bold fs-5">btn4 :</span> <input class="w-25" value="{{$header->btn4}} " type="text" name="btn4">
        <span class="fw-bold fs-5">btn5 :</span> <input class="w-25" value="{{$header->btn5}} " type="text" name="btn5">
        <span class="fw-bold fs-5">img1 :</span> <input class="w-25" value="{{$header->img1}} " type="file" name="img1">
        <span class="fw-bold fs-5">btn6 :</span> <input class="w-25" value="{{$header->btn6}} " type="text" name="btn6">
        <span class="fw-bold fs-5">btn7 :</span> <input class="w-25" value="{{$header->btn7}} " type="text" name="btn7">
        <button type="submit" class="btn btn-info " style="width: 100px; margin:20px;">SAVE</button>
        <a href="/Modif/header" class="text-center" style="width:200px;  background-color: rgb(126, 123, 123); padding: 20px; color:white; margin:15px">Retours vers Header a modifier</a>

    </form>
    
    
    



@endsection