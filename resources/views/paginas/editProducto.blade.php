<!--
    <h1>Editar producto</h1>
    <form action="{{ route('pintura.update', $pintura) }}" method="POST">
        @method('PATCH')
        @csrf
            <br> <br>
            <label for="nombre">Nombre</label>
            <input placeholder="Roja" id="nombre" name="nombre" type="text" value="{{ old('nombre') ?? $pintura->nombre }}">
            @error('nombre')
                <i>{{ $message }}</i>
            @enderror
            <br> <br>
            <label for="desc">Descripción</label>
            <input placeholder="Pintura_roja" id="desc" name="desc" type="text" value="{{ old('desc') ?? $pintura->descripcion }}">
            @error('desc')
                <i>{{ $message }}</i>
            @enderror
            <br> <br>
            <label for="precio">Precio</label>
            <input placeholder="55" id="precio" name="precio" type="number" value="{{ old('precio') ?? $pintura->precio }}">
            @error('precio')
                <i>{{ $message }}</i>
            @enderror
            <br>
            <button type="submit">Guardar</button>

    </form>
-->

<x-layout>

<x-slot:title>
        Editar
</x-slot>

<h2>Editar productos</h2>
<br>


<form action="{{ route('pintura.update', $pintura) }}" method="POST" class="formulario-editar">
    @method('PATCH')
        @csrf
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="relative z-0 w-full mb-6 group">
                    <input type="text" name="nombre" id="nombre" value="{{ old('nombre') ?? $pintura->nombre }}" class="block py-2.5 px-0 w-full text-lg text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-dark dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"/>
                    <label for="nombre" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        Nombre
                    </label>
                    @error('nombre')
                        <i>{{ $message }}</i>
                    @enderror
                </div>
                <div class="relative z-0 w-full mb-6 group">
                    <input type="number" name="precio" id="precio" value="{{ old('precio') ?? $pintura->precio }}" class="block py-2.5 px-0 w-full text-lg text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-dark dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"/>
                    <label for="precio" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        Precio
                    </label>
                    @error('precio')
                        <i>{{ $message }}</i>
                    @enderror
                </div>
            </div>

            <div class="relative z-0 w-full mb-6 group">
                <input type="text" name="descripcion" id="descripcion" value="{{ old('descripcion') ?? $pintura->descripcion }}" class="block py-2.5 px-0 w-full text-lg text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-dark dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"/>
                <label for="descripcion" class="peer-focus:font-absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                    Descripción
                </label>
                @error('descripcion')
                        <i>{{ $message }}</i>
                @enderror
            </div>
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-700">
                Guardar
            </button>
</form>

@section('script')

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <script language="JavaScript" type="text/javascript">
    $(".formulario-editar").submit(function(ev){
        ev.preventDefault();

        Swal.fire({
            title: '¿Quieres guardar los cambios?',
            text: "Puedes volver a editar los cambios",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            cancelButtonText: 'Cancelar',
            confirmButtonText: 'Sí, guardar'
            }).then((result) => {
                if (result.isConfirmed) {
                    this.submit();
            }
        })
    });
    </script>

@endsection

</x-layout>
