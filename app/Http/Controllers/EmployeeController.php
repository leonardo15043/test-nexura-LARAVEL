<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Employee_rol;
use App\Models\Rol;
use App\Models\Area;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::select('employees.*','areas.name AS name_area')
        ->join('areas', 'employees.area_id', '=', 'areas.id')
        ->get();

        return view('list-employee', [ "employees" => $employees ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create( Employee $employee )
    {
        $areas = Area::all(); 
        $roles = Rol::all(); 
        $listRoles = [];
        return view('action-employee', [ 'employee'=>$employee, 'areas' => $areas, 'roles' => $roles, 'listRoles'=> $listRoles ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:15',
            'email' => 'required',
            'sex' => 'required',
            'area_id' => 'required',
            'description' => 'required',
            'rol' => 'required',
        ]);

        $id_employee = Employee::create($request->all())->id;

        for ($i=0; $i < count($request->rol); $i++) { 
            Employee_rol::create(array(
                'empleado_id' => $id_employee,
                'rol_id' => $request->rol[$i]
            ));
        }

        return redirect()->route('employee.index')->with('success','Empleado creado correctamente.');
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee = Employee::find($id); 
        $areas = Area::all(); 
        $roles = Rol::all(); 
        $listRoles = [];
        $employeeRol = Employee_rol::where('empleado_id',$id)->get();
        foreach ($employeeRol as $key => $value) {
            array_push($listRoles, $employeeRol[$key]['rol_id']);
        }

        return view('action-employee', [ 'employee' => $employee, 'areas' => $areas, 'roles' => $roles, 'listRoles' => $listRoles ]);
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        $request->validate([
            'name' => 'required|max:15',
            'email' => 'required',
            'sex' => 'required',
            'area_id' => 'required',
            'description' => 'required',
            'rol' => 'required',
        ]);

        $employee->update($request->all());

        return redirect()->route('employee.index')->with('success','Empleado actualizado correctamente.');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();
        return redirect()->route('employee.index')->with('success','Empleado eliminado correctamente.');
    }
}
