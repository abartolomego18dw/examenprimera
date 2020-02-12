<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
    <form method="POST" action="{{route('inventario.store')}}">
            @csrf
            <label>Descripcion: </label><input type="text" name="descripcion" value="{{old('descripcion')}}">
            @error('descripcion')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                        <label>Cantidad: </label><input type="number" name="cantidad" value="{{old('cantidad')}}">
            @error('cantidad')
            <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
            <input type="submit" name="inventarioNuevo" value="Enviar">
        </form>
    </body>
</html>
