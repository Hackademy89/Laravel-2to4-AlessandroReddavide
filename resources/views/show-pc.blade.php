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
      <x-cardshow title="{{$computer['title']}}" img="{{$computer['img']}}" specific="{{$computer['specific']}}" price="{{$computer['price']}}" description="{{$computer['description']}}"  /> 
      </div>

  </div>
</div>
</x-layout>