<x-layout title="monitor">

{{-- titolomonitor --}}
<div class="container my-5">
  <div class="row ">
    <div class="col-12 d-flex flex-column justfify-content-center align-items-center">
      <h1 class="textcenter">Selezione Monitor</h1>
    </div>
  </div>
</div>
{{-- card monitor --}}
<div class="row my-5">
  
  @foreach($monitors as $monitor)
   <div class="col-4 d-flex justify-content-evenly">
     <div class="card" style="width: 18rem;">
       <img src="{{$monitor ['img'] }}" class="card-img-top" alt="...">
         <div class="card-body">
           <h5 class="card-title">{{$monitor ['title'] }}</h5>
           <p class="card-text">{{$monitor ['specific'] }}</p>
           <a href="{{ route('show.monitor', ['title'=>$monitor['title']]) }}" class="btn btn-primary">Guarda</a>
         </div>
      </div>
   </div>
   @endforeach
   
  </div>
</x-layout>