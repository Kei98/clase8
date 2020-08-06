<h1>Computadoras</h1>

<a href="{{route("computadora.create")}}">Insertar Computadora</a>

<ul>
    @forelse($computadora as $computador)
        <li>
            <a href="{{ route("computadora.show", $computador) }}">{{ $computador->id . ". " . $computador->marca}}></a>
        </li>
    @empty
        <li>No hay computadoras para mostrar</li>
    @endforelse
</ul>
