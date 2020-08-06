<h1>Detallas de la Computadora</h1>

<a href="{{ route("computadora.edit", $computadora) }}">Editar computadora</a>
<form action="{{ route("computadora.destroy", $computadora) }}" method="POST">
    @csrf
    @method("DELETE")
    <input type="submit" value="Eliminar">
</form>

<p>Marca: {{ $computadora->marca }}</p>
<p>Modelo: {{ $computadora->modelo }}</p>
<p>Cantidad de RAM: {{ $computadora->cantidadRam }} GB</p>
<p>Procesador: {{ $computadora->procesador }}</p>
<img src="{{ $computadora->imagen }}" alt="{{ $computadora->modelo }}">
<br>

<a href="{{ route("computadora.index") }}">Regresar al menú</a>
