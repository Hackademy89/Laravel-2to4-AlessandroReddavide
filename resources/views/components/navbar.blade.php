
{{-- richiamata in layout.blade --}}

<nav class="navbar">
  <div class="container">
      <div class="logo">
          <a href="{{ route('home') }}"> <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40">
            <path d="M20 2C10.05 2 2 10.05 2 20s8.05 18 18 18 18-8.05 18-18S29.95 2 20 2zm0 32c-8.82 0-16-7.18-16-16s7.18-16 16-16 16 7.18 16 16-7.18 16-16 16z" fill="#007bff"/>
            <path d="M20 6c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm0 22c-5.259 0-10-4.741-10-10s4.741-10 10-10 10 4.741 10 10-4.741 10-10 10z" fill="#fff"/>
        </svg> 
        Blog Laravel</a>
      </div>
      <div class="menu-toggle">
          <i class="fas fa-bars"></i>
      </div>
      <ul class="nav-list">
          <li class="nav-item"><a href="{{ route('home') }}">Home</a></li>
          <li class="nav-item"><a href="{{ route('pc') }}">PC</a></li>
          <li class="nav-item"><a href="{{ route('smartphone') }}">Smartphone</a></li>
          <li class="nav-item"><a href="{{ route('monitor') }}">Monitor</a></li>
          <li class="nav-item"><a href="{{ route('contactUs') }}">Contattaci</a></li>
      </ul>
      <button class="btn custom-button" id="day-mode-button">Light mode</button>
  </div>
</nav>