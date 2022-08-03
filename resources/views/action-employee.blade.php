@extends('layouts.app')
@section('content')
<h1 class="display-6 mb-5"> @if ($employee['id']) Editar @else Crear @endif  Empleado</h1>

@if ($employee['id'])
<form action="{{ route('employee.update',$employee['id']) }}" method="POST" class="row g-3">
@method('PUT')
@else
<form action="{{ route('employee.store') }}" method="POST" class="row g-3">
@endif
@csrf
    <div class="mb-3 row">
        <label for="name" class="col-sm-2 col-form-label">Nombre completo</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="name" name="name" placeholder="Nombre completo del empleado" value="{{ $employee['name'] }}">
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="mb-3 row">
        <label for="email" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="email" name="email" placeholder="Correo electrónico" value="{{ $employee['email'] }}">
            @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="mb-3 row">
        <label for="email" class="col-sm-2 col-form-label">Sexo</label>
        <div class="col-sm-10">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="sex" id="male" value="M" {{ $employee['sex'] == "M" ? "checked" : "" }}>
                <label class="form-check-label" for="male">
                    Masculino
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="sex" id="female" value="F" {{ $employee['sex'] == "F" ? "checked" : "" }}>
                <label class="form-check-label" for="female">
                    Femenino
                </label>
            </div>
            @error('sex')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="mb-3 row">
        <label for="email" class="col-sm-2 col-form-label">Area</label>
        <div class="col-sm-10">
            <select class="form-select" name="area_id">
                <option value="">Seleccionar area</option>
                @foreach( $areas as $area )
                    <option value="{{ $area->id }}" {{ $employee['area_id'] == $area->id ? 'selected' : '' }}>{{ $area->name }}</option>
                @endforeach
            </select>
            @error('area_id')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="mb-3 row">
        <label for="description" class="col-sm-2 col-form-label">Descripción</label>
        <div class="col-sm-10">
            <textarea class="form-control" id="description" name="description" rows="3">{{ $employee['description'] }}</textarea>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="bulletin" name="bulletin" value="1" {{ $employee['bulletin'] == '1' ? "checked" : "" }}>
                <label class="form-check-label" for="bulletin">
                    Deseo recibir boletín iformativo
                </label>
            </div>
            @error('bulletin')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="mb-3 row">
        <label for="email" class="col-sm-2 col-form-label">Roles</label>
        <div class="col-sm-10">
            @foreach( $roles as $rol )
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="{{$rol->id}}" id="rol-{{$rol->id}}" name="rol[]"  {{ in_array( $rol->id , $listRoles ) ? 'checked' : '' }}>
                    <label class="form-check-label" for="rol-{{$rol->id}}">
                        {{ $rol->name}}
                    </label>
                </div>
            @endforeach
            @error('rol')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="col-12">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</form>
@endsection