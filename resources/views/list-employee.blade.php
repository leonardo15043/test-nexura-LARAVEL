@extends('layouts.app')
@section('content')
<h1 class="display-6 mb-5">Lista de Empleados</h1>
<a href="{{ url('/employee/create') }}" class="btn btn-primary">Agregar</a>
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Email</th>
            <th scope="col">Sexo</th>
            <th scope="col">Área</th>
            <th scope="col">Boletín</th>
            <th scope="col">Modificar</th>
            <th scope="col">Eliminar</th>
        </tr>
    </thead>
    <tbody>
        @foreach( $employees as $employee )
            <tr>  
                <td>{{ $employee->name }}</td>
                <td>{{ $employee->email }}</td>
                <td>{{ $employee->sex == 'F' ? 'Femenino':'Masculino' }}</td>
                <td>{{ $employee->name_area }}</td>
                <td>{{ $employee->bulletin == 1 ? 'Si':'No' }}</td>
                <td>
                    <a class="btn btn-primary" href="{{ route('employee.edit',$employee->id) }}">Editar</a>
                </td>
                <td>
                    <a class="btn btn-danger">Eliminar</a>
                </td>
            </tr>
        @endforeach
    </tbody>
  </table>
@endsection