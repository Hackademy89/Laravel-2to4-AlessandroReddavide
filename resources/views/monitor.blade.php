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
    <x-card title="{{$monitor['title']}}" img="{{$monitor['img']}}" specific="{{$monitor['specific']}}" route="show.monitor" /> 
   </div>
   @endforeach
   
  </div>
</x-layout>