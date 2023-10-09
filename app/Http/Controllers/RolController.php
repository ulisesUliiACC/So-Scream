<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\DB;
use Spatie\Permissions\Models\Permission as ContractsPermission;

class RolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        $this->middleware('permission:ver-rol|crear-rol|editar-rol|borrar-rol', ['only'=>['index']]);
        $this->middleware('permission:crear-rol', ['only'=>['create','store']]);
        $this->middleware('permission:editar-rol', ['only'=>['edit','update']]);
        $this->middleware('permission:borrar-rol', ['only'=>['destroy']]);
    }

    public function index()
    {
        $roles=Role::paginate(12);
            return view('admin_roles.index',compact('roles'))

            ->with('i', (request()->input('page', 1) - 1) * $roles->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permissions = Permission::all();
        return view('admin_roles.create', compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


     public function store(Request $request)
     {
         $this->validate($request, [
             'name' => 'required|unique:roles,name',
             'permissions' => 'required|array',
         ]);
     
         // Obtén los IDs de permisos seleccionados en el formulario
         $permissionIds = $request->input('permissions');
     
         // Filtra los IDs de permisos para asegurarte de que existan en la base de datos
         $existingPermissions = Permission::whereIn('id', $permissionIds)->get();
     
         // Verifica si todos los permisos seleccionados existen
         if ($existingPermissions->count() !== count($permissionIds)) {
             // Alguno de los permisos seleccionados no existe en la base de datos
             return redirect()->back()->with('error', 'Alguno de los permisos seleccionados no existe.');
         }
     
         // Crea el rol
         $role = Role::create(['name' => $request->input('name')]);
     
         // Asigna los permisos al rol
         $role->syncPermissions($permissionIds);
     
         return redirect()->route('roles.index')->with('success', 'Rol creado con éxito.');
     }
     
    
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $role= Role::find($id);
        $permission = Permission::get();
        $rolePermissions = DB::table('role_has_permissions')->where('role_has_permissions.role_id', $id)
        ->pluck('role_has_permissions.permission_id', 'role_has_permissions.permission_id')
        ->all();
        return view('admin_roles.edit', compact('role', 'permission', 'rolePermissions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,['name' => 'required','permission'=>'required']);
        $role = Role::find($id);
        $role ->name = $request ->input('name');
        $role -> save();
        $role -> syncPermissions($request->input('permission'));
        return redirect()->route('admin_roles.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $id)
    {
        $id->delete();
        return redirect()->route('roles.index');
    }
}
