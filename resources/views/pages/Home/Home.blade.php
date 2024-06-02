
    @extends('layouts.app')
    @section('page')
    <h1>This is home</h1>
     <a href=" {{route("contactus")}}"> ContactUs </a>
     <a href=" {{route("aboutus")}}"> AboutUs </a>
    <h1>Hello, world!</h1>

    <form action="{{route('home.store')}}" method="post">
        @csrf
        <div class="input-group flex-nowrap">
            <input type="text" class="form-control" placeholder="title" name="title"><br>
            <input type="number" class="form-control" placeholder="price" name="price"><br>
            <input type="textarea" class="form-control" placeholder="description" name="description">
            <button type="submit">submit</button>
          </div>
        </form>

    @endsection





