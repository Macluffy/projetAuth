@extends('templateback')
@section('content')

<h1 class="text-center" style="margin: 150px"> BACK OFFICE | Show Portfolio</h1>

<div class="container d-flex flex-column align-items-center">


<div class="col-md-6 col-lg-4 mb-5">
    <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal1">
        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
            <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
        </div>
        <img class="img-fluid" src="{{  asset('img/'.$portfolio->img)}}" alt="..." />
    </div>
</div>
<div class="d-flex mx-5">

    <a class="text-center" href="{{route('portfolios.edit',$portfolio->id)}} "  ><button class="btn btn-warning">Edit</button> </a>
    <form action="{{route('portfolios.destroy', $portfolio->id)}} " method="POST">
        @csrf
        @method('DELETE')
        <button type="submit"  class="btn btn-danger"  >DELETE</button>
    </form>
    </div>

</div>

<div class="d-flex justify-content-center m-5">
    <a href="/Modif/portfolio" class="text-center" style="width:200px;  background-color: rgb(126, 123, 123); padding: 20px; color:white; margin:15px">Retours vers Portfolio a modifier</a>
</div>
</div>
@endsection