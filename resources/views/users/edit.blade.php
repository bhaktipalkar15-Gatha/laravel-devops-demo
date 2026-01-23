
<h1>Edit User</h1>
<form method="POST" action="/users/{{ $user->id }}">
@csrf @method('PUT')
<input name="name" value="{{ $user->name }}">
<input name="email" value="{{ $user->email }}">
<input type="password" name="password">
<button>Save</button>
</form>
