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
    public function create()
    {
        $areas = Area::all(); 
        $roles = Rol::all(); 
        return view('action-employee', [ 'areas' => $areas, 'roles' => $roles ]);
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
            'bulletin' => 'required',
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
    
}
