@extends('layouts.app')
@section('content')
<h1 class="display-6 mb-5">Lista de Empleados</h1>
<a href="" class="btn btn-primary">Agregar</a>
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
        <tr>  
            <td>leonardo</td>
            <td>lahernandez15043@gmail.com</td>
            <td>Masculino</td>
            <td>Calidad</td>
            <td>Si</td>
            <td>
                <a class="btn btn-primary" >Editar</a>
            </td>
            <td>
                <a class="btn btn-danger">Eliminar</a>
            </td>
        </tr>
        <tr>  
            <td>leonardo</td>
            <td>lahernandez15043@gmail.com</td>
            <td>Masculino</td>
            <td>Calidad</td>
            <td>Si</td>
            <td>
                <a class="btn btn-primary" >Editar</a>
            </td>
            <td>
                <a class="btn btn-danger">Eliminar</a>
            </td>
        </tr>
        <tr>  
            <td>leonardo</td>
            <td>lahernandez15043@gmail.com</td>
            <td>Masculino</td>
            <td>Calidad</td>
            <td>Si</td>
            <td>
                <a class="btn btn-primary" >Editar</a>
            </td>
            <td>
                <a class="btn btn-danger">Eliminar</a>
            </td>
        </tr>
    </tbody>
  </table>
@endsection