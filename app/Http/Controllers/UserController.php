<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function index() {
        return view('users.index', ['users' => User::all()]);
    }

    public function create() {
        return view('users.create');
    }

    public function store(Request $r) {
        $data = $r->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:6'
        ]);
        $data['password'] = bcrypt($data['password']);
        User::create($data);
        return redirect('/users');
    }

    public function show(User $user) {
        return view('users.show', compact('user'));
    }

    public function edit(User $user) {
        return view('users.edit', compact('user'));
    }

    public function update(Request $r, User $user) {
        $data = $r->validate([
            'name'=>'required',
            'email'=>['required','email',Rule::unique('users')->ignore($user->id)],
            'password'=>'nullable|min:6'
        ]);
        if(!empty($data['password'])) {
            $data['password'] = bcrypt($data['password']);
        } else {
            unset($data['password']);
        }
        $user->update($data);
        return redirect('/users');
    }

    public function destroy(User $user) {
        $user->delete();
        return redirect('/users');
    }
}
