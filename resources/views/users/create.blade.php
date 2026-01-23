
<h1>Create User</h1>
<form method="POST" action="/users">
@csrf
<input name="name" placeholder="Name">
<input name="email" placeholder="Email">
<input type="password" name="password" placeholder="Password">
<button>Create</button>
</form>
