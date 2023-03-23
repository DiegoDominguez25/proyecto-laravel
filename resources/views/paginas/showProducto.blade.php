<x-layout>
    <h1>Detalles del producto</h1>
    <h3> {{ $pintura->nombre  }} </h3>
    <h3> {{ $pintura->descripcion }} </h3>
    <h3> {{ $pintura->precio }} </h3>

    <form action="{{ route('pintura.destroy', $pintura) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Borrar</button>

    </form>
</x-layout>