@extends('layouts.master')

@section('content')
	<header>
		<form action="{{ url('task') }}" method="POST">
			{{ csrf_field() }}
			<input type="text" name="name" placeholder="Enter an activity.." id="item">
			<button type="submit" id="add"/>
		</form>
			<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 16 16" style="enable-background:new 0 0 16 16;" xml:space="preserve"><g><g><path class="fill" d="M16,8c0,0.5-0.5,1-1,1H9v6c0,0.5-0.5,1-1,1s-1-0.5-1-1V9H1C0.5,9,0,8.5,0,8s0.5-1,1-1h6V1c0-0.5,0.5-1,1-1
			s1,0.5,1,1v6h6C15.5,7,16,7.5,16,8z"/></g></g>
			</svg>
		</button>
	</header>
	<div class="container" id="todoList" >
	
		@include('tasks.todo')
	
	</div>
	
	@include('layouts.errors')
@endsection
