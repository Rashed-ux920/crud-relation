@extends('layout.master')
@section('contant')
    <div class="continer d-flex p-2 grid gap-3 flex-wrap justify-center text-center">
        <form action="{{route('update',$productes->id)}}" method="post">
            @csrf

            {{-- @foreach ($productes as $product) --}}
                <div class="mb-3 justify-center">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" @required(true) id="name" placeholder="{{$productes->p_name}}" aria-describedby="textHelp" name="name" >
                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                </div>

                <div class="mb-3 justify-center">
                <label for="description" class="form-label justify-center">description</label>
                <input type="textarea" class="form-control" id="description" @required(true) aria-describedby="textHelp" name="description" placeholder="{{$productes->p_description}}">
                </div>
                <select class="form-select" aria-label="Default select example" name="type">
                    <option selected @required(true)>chouse one of the category</option>
                    <option value="1">wooden</option>
                    <option value="2">painter</option>
                    <option value="3">blacksmith</option>
                </select>
                <div class="mb-3 justify-center">
                <label for="price" class="form-label justify-center">Price</label>
                <input type="number" class="form-control" id="price" name="price" @required(true) placeholder="{{$productes->p_price}}">
                </div>
            {{-- @endforeach --}}
                {{-- <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div> --}}

                <button type="submit" class="btn btn-primary">Submit</button>

        </form>
    </div>
@endsection
