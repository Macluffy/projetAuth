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
<h1 class="text-center"  style="margin: 150px"> BACK OFFICE | Edit Footer</h1>

    <form class="d-flex flex-column" action="{{route('footers.update', $footer->id)}}" method="post">
        @csrf
        @method('PUT')
        <span class="fw-bold fs-5">btn1 :</span>  <input class="w-25" value="{{$footer->btn1}} " type="text" name="btn1">
        <span class="fw-bold fs-5">btn2 :</span> <input class="w-25" value="{{$footer->btn2}} " type="text" name="btn2">
        <span class="fw-bold fs-5">btn3 :</span> <input class="w-25" value="{{$footer->btn3}} " type="text" name="btn3">
        <span class="fw-bold fs-5">btn4 :</span> <input class="w-25" value="{{$footer->btn4}} " type="text" name="btn4">
        <span class="fw-bold fs-5">btn5 :</span> <input class="w-25" value="{{$footer->btn5}} " type="text" name="btn5">
        <span class="fw-bold fs-5">btn6 :</span> <input class="w-25" value="{{$footer->btn6}} " type="text" name="btn6">
        <span class="fw-bold fs-5">btn7 :</span> <input class="w-25" value="{{$footer->btn7}} " type="text" name="btn7">
        <span class="fw-bold fs-5">btn8 :</span> <input class="w-25" value="{{$footer->btn8}} " type="text" name="btn8">
        <span class="fw-bold fs-5">btn9 :</span> <input class="w-25" value="{{$footer->btn9}} " type="text" name="btn9">
        <button type="submit" class="btn btn-info " style="width: 100px; margin:20px;">SAVE</button>
        <a href="/Modif/footer" class="text-center" style="width:200px;  background-color: rgb(126, 123, 123); padding: 20px; color:white; margin:15px">Retours vers Header a modifier</a>

    </form>
    
    
    



@endsection