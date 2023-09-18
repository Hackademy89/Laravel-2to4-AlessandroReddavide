<x-layout title="monitordetails">
{{-- creazione dettaglio monitor --}}
<div class="container my-5">

  <div class="row ">
    <div class="col-12 d-flex flex-column justfify-content-center align-items-center">
      <h1 class="textcenter">{{$monitor ['title'] }}</h1>
    </div>
  </div>

  <div class="row">
    <div class="col-12 d-flex flex-column justfify-content-center align-items-center">

      <div class="card mb-3">
        <img src="{{$monitor ['img'] }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{$monitor ['title'] }}</h5>
          <p class="card-text">{{$monitor ['specific'] }}</p>
          <p class="card-text">{{$monitor ['description'] }}</p>
          <p class="card-text">{{$monitor ['price'] }}</p>
        </div>
      </div>
    </div>

  </div>
</div>
</x-layout>