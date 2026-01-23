
<h1>Users</h1>
<a href="/users/create">Create</a>
<table border="1">
@foreach($users as $u)
<tr>
<td>{{ $u->id }}</td>
<td>{{ $u->name }}</td>
<td>{{ $u->email }}</td>
<td>
<a href="/users/{{ $u->id }}">View</a>
<a href="/users/{{ $u->id }}/edit">Edit</a>
<form method="POST" action="/users/{{ $u->id }}">
@csrf @method('DELETE')
<button>Delete</button>
</form>
</td>
</tr>
@endforeach
</table>
