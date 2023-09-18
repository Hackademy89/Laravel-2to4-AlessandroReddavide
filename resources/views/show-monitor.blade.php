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
      <x-cardshow title="{{$monitor['title']}}" img="{{$monitor['img']}}" specific="{{$monitor['specific']}}" price="{{$monitor['price']}}" description="{{$monitor['description']}}"  /> 

    </div>

  </div>
</div>
</x-layout>