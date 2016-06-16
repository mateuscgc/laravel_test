<table>
	<tr>
		<th>Name</th>
		<th>When</th>
		<!-- <th>Created at</th> -->
	</tr>

	@foreach($tasks as $task)
	<tr>
		<td><a href="/tasks/edit/{{$task->id}}">{{$task->name}}</a></td>
		<td>{{$task->when->format('d/m/Y')}}</td>
		<!-- <td>{{$task->created_at}}</td> -->
	</tr>
	@endforeach
</table>