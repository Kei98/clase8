<div class="form">
    <form action="{{route('computadora.store')}}" method="POST">
        @csrf

        <label for="marca">Marca</label>
        <input type="text" name="marca">

        <label for="modelo">Modelo</label>
        <input type="text" name="modelo">

        <label for="cantidadRam">Cantidad de RAM</label>
        <input type="number" name="cantidadRam">

        <label for="procesador">Procesador</label>
        <input type="text" name="procesador">

        <label for="imagen">Imagen</label>
        <input type="text" name="imagen">

        <input type="submit" value="Guardar">
    </form>
</div>
