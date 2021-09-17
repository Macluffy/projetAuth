
@extends('templateback')

@section('content')
    <h1 class="text-center"  style="margin: 150px"> BACK OFFICE | Porfolio</h1>


    
    <section style="width: 100%; display:flex; flex-direction:column;  align-items:center; " >

        @foreach ($data as $value)
            
        <div class="col-md-6 col-lg-4 mb-5">
            <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal1">
                <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                    <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                </div>
                <img class="img-fluid" src="{{  asset('img/'.$value->img)}}" alt="..." />
            </div>
            <a class="text-center" href="{{route('portfolios.show',$value->id)}} " style="width:200px;  background-color: rgb(70, 199, 98); padding: 20px; color:white;" >Show</a>
        </div>
        </div>
@endforeach


<div>
            <a href="/dashboard" class="text-center" style="width:250px;  background-color: rgb(126, 123, 123); padding: 20px; color:white; margin:auto">Retours vers Backoffice Home</a>
</div>        
        




    
@endsection



