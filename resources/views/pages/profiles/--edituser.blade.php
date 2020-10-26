{{-- Extends layout --}}
@extends('layout.default')

@section('styles')
<link  rel="stylesheet" href="{{ asset('css/pages/wizard/wizard-4.css') }}">

@endsection

{{-- Content --}}
@section('content')


@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Datos personales</h3>
                </div>
                

                <div class="box-body">
                    @if ($errors->any())
                        <ul class="list-group">
                            @foreach ( $errors ->all() as $error )
                                   <li class="list-group-item list-group-item-danger">
                                       {{$error}}
                                        </li> 
                            @endforeach

                        </ul>
                        
                    @endif
                    
                <form method="POST" action="{{ route('usuarios.update' , $usuario)   }}">
                        {{ csrf_field() }} {{ method_field('PUT') }}

                        <div class="form-group">
                            <label for="name">Nombre:</label>
                            <input name="name" value="{{ old('name', $usuario->name) }}" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input name="email" value="{{ old('email', $usuario->email) }}" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="password">Contraseña:</label>
                            <input type="password" name="password" class="form-control" placeholder="Contraseña">
                            <span class="help-block">Dejar en blanco si no quieres cambiar la contraseña</span>
                        </div>

                        <div class="form-group">
                            <label for="password_confirmation">Repetir contraseña:</label>
                            <input type="password" name="password_confirmation" class="form-control" placeholder="Repite la contraseña">
                        </div>

                        <button class="btn btn-primary btn-block">Actualizar usuario</button>
                    </form>
                </div>
            </div>
        </div>
    
    </div>
@endsection






@endsection

{{-- Scripts Section --}}
@section('scripts')
    <script src="{{ asset('js/pages/custom/user/edit-user.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/pages/custom/user/list-datatable.js') }}" type="text/javascript"></script>
@endsection