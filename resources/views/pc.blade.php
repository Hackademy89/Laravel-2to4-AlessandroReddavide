<x-layout title="pc">
{{-- SEZIONE CARD PC --}}
<div class="container my-5">
    <div class="row ">
      <div class="col-12 d-flex flex-column justfify-content-center align-items-center">
        <h2 class="neon-title">La nostra selezione di PC</h2>
      </div>
    </div>
  </div>
  {{-- Creazione card pc --}}
  <div class="row">
  
  @foreach($computers as $computer)
   <div class="col-4 d-flex justify-content-evenly">
      <x-card title="{{$computer['title']}}" img="{{$computer['img']}}" specific="{{$computer['specific']}}" route="show.pc" /> 
      {{-- <x-card :data="$computer" /> --}}
   </div>
   @endforeach
  </div>


</x-layout>
