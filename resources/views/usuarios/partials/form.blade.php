@csrf
<div class="form-group row">
    <label for="name" class="col-md-4 col-form-label text-md-right">{{
        __('Nombre') }}</label>

    <div class="col-md-6">
        <input id="name" type="text" class="form-control @error('name')
            is-invalid @enderror" name="name" value="{{(isset($usuarios))?$usuarios->name:old('name')}}" required autocomplete="name" autofocus> @error('name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span> @enderror
    </div>
</div>

<div class="form-group row">
    <label for="email" class="col-md-4 col-form-label text-md-right">{{
        __('Correo Electronico') }}</label>

    <div class="col-md-6">
        <input id="email" type="email" class="form-control @error('email')
            is-invalid @enderror" name="email" value="{{(isset($usuarios))?$usuarios->email:old('email')}}" required autocomplete="email"> @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span> @enderror
    </div>
</div>

<div class="form-group row">
    <label for="password" class="col-md-4 col-form-label text-md-right">{{
        __('Contraseña') }}</label>

    <div class="col-md-6">
        <input id="password" type="password" class="form-control
            @error('password') is-invalid @enderror" name="password" value="{{(isset($usuarios))?$usuarios->password:old('password')}}" required autocomplete="new-password"> @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span> @enderror
    </div>
</div>

<div class="form-group row">
    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{
        __('Confirmar Contraseña') }}</label>

    <div class="col-md-6">
        <input id="password-confirm" type="password" class="form-control" value="{{(isset($usuarios))?$usuarios->password:old('password')}}" name="password_confirmation" required autocomplete="new-password">
    </div>
</div>
<div class="form-group row">
    <label for="Apellido_Pa_Usuario" class="col-md-4 col-form-label
        text-md-right">{{ __('Apellido Paterno') }}</label>

    <div class="col-md-6">
        <input id="password-confirm" type="text" class="form-control" value="{{(isset($usuarios))?$usuarios->Apellido_Pa_Usuario:old('Apellido_Pa_Usuario')}}" name="Apellido_Pa_Usuario" required autocomplete="Apellido Paterno">
    </div>
</div>
<div class="form-group row">
    <label for="Apellido_Ma_Usuario" class="col-md-4 col-form-label
        text-md-right">{{ __('Apellido_Materno') }}</label>

    <div class="col-md-6">
        <input id="password-confirm" type="text" class="form-control" value="{{(isset($usuarios))?$usuarios->Apellido_Ma_Usuario:old('Apellido_Ma_Usuario')}}" name="Apellido_Ma_Usuario" required autocomplete="Apellido Materno">
    </div>
</div>

<div class="form-group row">
    <label for="Edad" class="col-md-4 col-form-label text-md-right">{{
        __('Edad') }}</label>

    <div class="col-md-6">
        <input id="password-confirm" type="number" value="{{(isset($usuarios))?$usuarios->Edad:old('Edad')}}" class="form-control" name="Edad" required autocomplete="Edad">
    </div>
</div>
<div class="form-group row">
    <label for="Sexo" class="col-md-4 col-form-label text-md-right">{{
        __('Sexo') }}</label>

    <div class="col-md-6">
        <input id="password-confirm" type="text" value="{{(isset($usuarios))?$usuarios->Sexo:old('Sexo')}}" class="form-control" name="Sexo" required autocomplete="Sexo" v>
    </div>
</div>