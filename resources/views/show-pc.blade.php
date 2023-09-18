<x-layout title="PcWiew">
{{-- creazione dettaglio pc --}}
<div class="container my-5">

  <div class="row ">
    <div class="col-12 d-flex flex-column justfify-content-center align-items-center">
      <h1 class="textcenter">{{$computer['title']}}</h1>
    </div>
  </div>

  <div class="row">
    <div class="col-12 d-flex flex-column justfify-content-center align-items-center">

      <div class="card mb-3">
        <img src="{{$computer['img']}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{$computer['title']}}</h5>
          <p class="card-text">{{$computer['specific']}}</p>
          <p class="card-text">{{$computer['description']}}</p>
          <p class="card-text">{{$computer['price']}}</p>
        </div>
      </div>
    </div>

  </div>
</div>
</x-layout>