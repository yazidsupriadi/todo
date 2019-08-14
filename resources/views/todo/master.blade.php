@extends('todo.index')

@section('content')
<div class="row justify-content-center">
	<div class="col-md-6">
		<div class="card card-default">
		<div class="card-header text-center bg-primary ">
			<h6>To Do </h6>
		</div>
		<div class="card-body">
			<ul>
				@foreach($todos as $todo)
				<li>
					{{$todo->name}}
				<a class="btn btn-primary btn-sm text-white float-right">view</a>
				</li>
				@endforeach
			</ul>
		</div>
		
	</div>	

	</div>
		
</div>
	

@endsection