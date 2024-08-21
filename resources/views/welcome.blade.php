
@extends('layout.master')
@section('contant')
    <div class="container p-2 d-flex align-middle justify-center gap-3">
        <div class="card" style="width: 20rem;">
            <div class="card-body">
              <h5 class="card-title">market</h5>
              <h6 class="card-subtitle mb-2 text-body-secondary">welcome</h6>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="card-link">Card link</a>
              <a href="#" class="card-link">Another link</a>
            </div>
        </div>
        <div class="card" style="width: 20rem;">
            <div class="card-body">
              <h5 class="card-title">market</h5>
              <h6 class="card-subtitle mb-2 text-body-secondary">welcome</h6>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="card-link">Card link</a>
              <a href="#" class="card-link">Another link</a>
            </div>
        </div>
    </div>
    <div class="continer d-flex p-2 grid gap-3 flex-wrap justify-center text-center">
        @foreach ($categores as $item )
            <div class="card p-2 justify-center d-flex flex-column rounded" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$item->cat_name}}</h5>
                    <a href="#" class="btn btn-primary text-light">GO</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
