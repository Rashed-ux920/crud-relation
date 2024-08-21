@extends('layout.master')
@section('contant')
    <div class="continer d-flex p-2 grid gap-3 flex-wrap justify-center text-center">
        @foreach ( $productes as $product)

            <div class="card p-2 justify-center d-flex flex-column rounded" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$product->p_name}}</h5>
                    <div class="mb-3 justify-center">
                        {{$product->p_description}}
                    </div>
                    <div class="mb-3 justify-center">
                        {{$product->p_price . " JD"}}
                    </div>
                    <a href="#" class="btn btn-primary text-light">GO</a>
                </div>
            </div>

        @endforeach
    </div>
@endsection
