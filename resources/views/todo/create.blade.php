@extends('todo.index')
@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{url('/todos/store')}}" method="POST">
@csrf
  <div class="form-group">
    <label for="exampleFormControlInput1">Name Todo</label>
    <input type="text" name="name" class="form-control" placeholder="enter to do name ">
  </div>
   <div class="form-group">
    <label for="exampleFormControlTextarea1">Description</label>
    <textarea class="form-control" name="description" rows="3" placeholder="enter to do name"></textarea>
  </div>
  <input type="hidden" name="completed" value="0">

  <button type="submit" class="btn btn-primary btn-sm">Submit</button>
</form>
@endsection