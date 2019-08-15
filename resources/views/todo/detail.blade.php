@extends('todo.index')

@section('content')
<div class="row justify-content-center">
	<div class="col-md-6">
		<div class="card card-default">
		<div class="card-header text-center bg-primary ">
			<h6>To Do Details</h6>
		</div>
		<div class="card-header">
			{{$todos->name}}
		</div>
		<div class="card-body">
			{{$todos->description}}
		</div>
		<a href="{{url('/todos/'.$todos->id.'/edit')}}" class="btn btn-success">edit</a>
		<a href="{{url('/todos/'.$todos->id.'/delete')}}" class="btn btn-danger">delete</a>
		
	</div>	

	</div>
		
</div>
	

@endsection