<div class="panel panel-default">
	<div class="panel-body">

		@include('layouts.errors')

		<form action="{{ url('task') }}" method="POST" class="form-horizontal">
			{{ csrf_field() }}
			<div class="form-group">
				<label for="name" class="col-sm-3 control-label">Task</label>
				<div class="col-sm-6">
					
					<input type="text" name="name" id="name" class="form-control" >
				</div>
			</div>
			<div class="form-group">
				<div class=" col-sm-offset-3 col-sm-6">
					<button type="submit" class="btn btn-default">Add task</button>
				</div>
			</div>
		</form>
	</div>
</div>
	
	@if($tasks->count())
		<div class="panel panel-default">
			<div class="panel-heading">
				Current Tasks
			</div>
			<div class="panel-body">
				<table class="table table-hover">
					<tbody>
						@foreach($tasks as $task)
						<tr>
							<td>
								<p>	
									{{ $task->name }}
								</p>
							</td>
							<td>
								<form action="{{ url('task/' .$task->id ) }}" method="POST">
									<button type="submit" class="btn btn-info pull-right">Konfirmd</button>
									{{ csrf_field() }}
								</form>
							</td>
							<td>
								<form action="{{ url('task/' .$task->id ) }}" method="POST">
									<button type="submit" class="btn btn-danger pull-right">Delete</button>
									{{ method_field('DELETE') }}
									{{ csrf_field() }}
								</form>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	@endif