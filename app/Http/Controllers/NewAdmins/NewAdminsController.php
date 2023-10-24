<?php

namespace App\Http\Controllers\NewAdmins;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Admin;

use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Support\Facades\Validator;

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
     $admins = Admin::paginate(5);
      $admin = Admin::count();
      $role = Role::count();

      return view('New_Admins.index', compact('admins'), [
        'role' => $role,
        'admin' =>$admin
    ])
    ->with('i', (request()->input('page', 1) - 1) * $admins->perPage());

    }

    public function create()
    {

      $roles = Role::pluck('name','name')->all();
      return view('New_Admins.create',compact('roles'));

    }
    public function store(Request $request)
    {
     // dd($request->all());


    $input = $request->all();
    $input['password'] = Hash::make($input['password']);
    $admin = Admin::create($input);
    $admin->assignRole($request->input('roles'));

    return redirect()->route('newAdmins.index')
        ->with('success', 'Usuario creado con éxito.');

  }
}
