<form action="/tasks" method="POST">
	{{csrf_field()}}
	<label for="task_name">Name</label>
	<input type="text" id="task_name" name="name" value="{{$task->name}}">

	<label for="task_when">When</label>
	<input type="datetime" id="task_when" name="when" value="{{$task->when}}">
	
	<button type="submit" name="submit">Criar</button>
</form>