
{{-- richiamata in layout.blade --}}

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