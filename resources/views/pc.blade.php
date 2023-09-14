<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    
    <!-- LINK BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</head>
<body>

    {{-- Inizio navbar     --}}
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{route('home')}}"><h1>Home</h1></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" href="{{route('pc')}}"><h2>I nostri Pc</h2></a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="{{route('smartphone')}}"><h2>Smartphone</h2></a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="{{route('monitor')}}"><h2>Monitor</h2></a>
              </li>
            </ul>
           

            
           
          </div>
        </div>
      </nav>    
{{-- Fine navbar --}}

{{-- SEZIONE CARD PC --}}
<div class="container my-5">
    <div class="row ">
      <div class="col-12 d-flex flex-column justfify-content-center align-items-center">
        <h1 class="textcenter">Selezione PC</h1>
      </div>
    </div>
  </div>
  
  {{-- Creazione card pc --}}
  <div class="row">
  
  @foreach($computers as $computer)
   <div class="col-4 d-flex justify-content-evenly">
     <div class="card" style="width: 18rem;">
       <img src="{{$computer ['img'] }}" class="card-img-top" alt="...">
         <div class="card-body">
           <h5 class="card-title">{{$computer ['title'] }}</h5>
           <p class="card-text">{{$computer ['specific'] }}</p>
           <a href="{{ route('show.pc', ['title'=>$computer['title']]) }}" class="btn btn-primary">Guarda</a>
         </div>
      </div>
   </div>
   @endforeach
   
  </div>
</body>

</html>
