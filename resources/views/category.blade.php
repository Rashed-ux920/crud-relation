@extends('layout.master')
@section('contant')

    <div class="continer">
        <form method="POST" action="{{route('store')}}">
            @csrf
            <div class="mb-3 justify-center">
              <label for="name" class="form-label">Name</label>
              <input type="text" class="form-control" id="name" aria-describedby="textHelp" name="name">
              {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
            </div>
            {{-- <div class="mb-3 justify-center">
              <label for="description" class="form-label justify-center">description</label>
              <input type="textarea" class="form-control" id="description" aria-describedby="textHelp" name="description">
            </div>
            <div class="mb-3 justify-center">
              <label for="price" class="form-label justify-center">Price</label>
              <input type="number" class="form-control" id="price" name="price">
            </div> --}}
            {{-- <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div> --}}
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


@endsection

