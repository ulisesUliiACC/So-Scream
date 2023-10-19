<?php

namespace App\Http\Controllers\NewAdmins;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Admin;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

use Spatie\Permission\Traits\HasRoles;

class NewAdminsController extends Controller
{
    //
    function __construct()
    {
         $this->middleware('permission:ver-usuario|crear-usuario|editar-usuario|borrar-usuario')->only('index');
         $this->middleware('permission:crear-usuario', ['only' => ['create','store']]);
         $this->middleware('permission:editar-usuario', ['only' => ['edit','update']]);
         $this->middleware('permission:borrar-usuario', ['only' => ['destroy']]);
    }

    public function index(Admin $model)
    {
      $admins = User::paginate(5);
      $admin = User::count();
      $role = Role::count();

      return view('New_Admins.index', compact('admins'), [
        'role' => $role,
        'admin' => $admin
    ])
    ->with('i', (request()->input('page', 1) - 1) * $admins->perPage());

    }

    public function create()
    {

      $roles = Role::pluck('name','name')->all();
      return view('New_Admins.created',compact('roles'));

    }
    public function store(Request $request)
    {
      $this->validate($request, [
        'name' => 'required',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|same:confirm-password',
        'roles' => 'required'
    ]);

    $input = $request->all();
    $input['password'] = Hash::make($input['password']);
    $user = User::create($input);
    $user->assignRole($request->input('roles'));

    return redirect()->route('New_Admins.index')
        ->with('success', 'Usuario creado con éxito.');

  }
}
