<div class="form">
    <form action="{{ route('computadora.update', $computadora) }}" method="POST">
        @csrf

        @method("PATCH")

        <label for="marca">Marca</label>
        <input type="text" name="marca" value="{{ $computadora->marca }}">

        <label for="modelo">Modelo</label>
        <input type="text" name="modelo" value="{{ $computadora->modelo }}">

        <label for="cantidadRam">Cantidad de RAM</label>
        <input type="number" name="cantidadRam" value="{{ $computadora->cantidadRam }}">

        <label for="procesador">Procesador</label>
        <input type="text" name="procesador" value="{{ $computadora->procesador }}">

        <label for="imagen">Imagen</label>
        <input type="text" name="imagen" value="{{ $computadora->imagen }}">

        <input type="submit" value="Guardar">
    </form>
    <a href=" {{ route("computadora.index")  }}">Cancelar</a>
</div>
