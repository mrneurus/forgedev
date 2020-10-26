@component('mail::message')


Tus credenciales para acceder a Extranet

@component('mail::table')
    |Usuario | Contraseña Provisoria|
    |--------|----------------------|
    | {{$usuario->email}} | {{$password}} |


@endcomponent

@component('mail::button', ['url' => url('login')])
Login
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
