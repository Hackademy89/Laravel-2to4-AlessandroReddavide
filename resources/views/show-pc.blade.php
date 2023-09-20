<x-layout title="PcWiew">
{{-- creazione dettaglio pc --}}
<div class="container my-5">

  <div class="row ">
    <div class="col-12 d-flex flex-column justfify-content-center align-items-center">
      <h2 class="neon-title">{{$computer['title']}}</h2>
    </div>
  </div>

  <div class="row">
    <div class="col-12 d-flex flex-column justfify-content-center align-items-center">
      <x-cardshow title="{{$computer['title']}}" img="{{$computer['img']}}" specific="{{$computer['specific']}}" price="{{$computer['price']}}" description="{{$computer['description']}}"  /> 
      </div>

  </div>
</div>
</x-layout>