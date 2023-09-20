<div class="col-4 d-flex justify-content-center align-items-center my-5">

<div class="card cardcus " style="width: 18rem;">
    <div><img src="{{$img }}" class="card-img-top"></div>
      <div class="card-body cardbodycus">
        <h5 class="">{{ $title }}</h5>
        <p class="">{{ $specific }}</p>
        <a href="{{ route($route, ['title'=> $title]) }}" class="btn btn-primary">Guarda</a>
      </div>
   </div>

</div>   