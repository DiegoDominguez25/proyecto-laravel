<x-layout>
    <h1>Detalles del producto</h1>
    <br>
    <section>
    <div class="container">
        <div class="flex flex-wrap -mx-4">
            <div class="w-full px-4">
                <div class="max-w-full overflow-x-auto">
                <table class="table-auto w-full">
                    <thead>
                        <tr class="bg-primary text-center">
                            <th class="w-1/6 min-w-[160px] text-lg font-semibold text-white py-4 lg:py-7 px-3 lg:px-4 border-l border-transparent">
                            ID
                            </th>
                            <th class="w-1/6 min-w-[160px] text-lg font-semibold text-white py-4 lg:py-7 px-3 lg:px-4">
                            Nombre
                            </th>
                            <th class="w-1/6 min-w-[160px] text-lg font-semibold text-white py-4 lg:py-7 px-3 lg:px-4">
                            Descripción
                            </th>
                            <th class="w-1/6 min-w-[160px] text-lg font-semibold text-white py-4 lg:py-7 px-3 lg:px-4">
                            Precio
                            </th>
                            <th class="w-1/6 min-w-[160px] text-lg font-semibold text-white py-4 lg:py-7 px-3 lg:px-4 border-r border-transparent">
                            Opciones
                            </th>
                        </tr>
                    </thead>
                    <tbody>

                            <tr>
                                <td class="text-center text-dark font-medium text-base py-5 px-2 bg-[#F3F6FF] border-b border-l border-[#E8E8E8]">
                                    {{ $pintura->id }}
                                </td>
                                <td class="text-center text-dark font-medium text-base py-5 px-2 bg-white border-b border-[#E8E8E8]">
                                    {{ $pintura->nombre }}
                                </td>
                                <td class="text-center text-dark font-medium text-base py-5 px-2 bg-[#F3F6FF] border-b border-[#E8E8E8]">
                                    {{ $pintura->descripcion }}
                                </td>
                                <td class="text-center text-dark font-medium text-base py-5 px-2 bg-white border-b border-[#E8E8E8]">
                                    {{ $pintura->precio }}
                                </td>
                                <td class="text-center text-dark font-medium text-base py-5 px-2 bg-[#F3F6FF] border-b border-[#E8E8E8]">
                                    <form class="formulario-eliminar" action="{{ route('pintura.destroy', $pintura) }}" method="POST">
                                    @method('DELETE')
                                        @csrf
                                        <button class="border border-primary py-2 px-6 text-primary inline-block rounded hover:bg-primary hover:text-white" type="submit">Borrar</button>

                                    </form>
                                </td>

                            </tr>

                    </tbody>
                </table>
                <br>
                    <div class="relative z-0 w-full mb-6 group">
                        <label class="peer-focus:font- absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-120 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                            Cargar archivos
                        </label>
                        <br>
                        {!! Form::open(['route' => ['archivo.store'], 'files' => true]) !!}
                            {!! Form::hidden('pintura_id', $pintura->id) !!}
                            {!! Form::file('archivos[]',['multiple' => 'multiple']) !!}
                            <br><br>
                            {!! Form::submit('Guardar',['class' => 'text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-700']) !!}
                        {!! Form::close() !!}
                    </div>
                    <div class="relative z-0 w-full mb-6 group">
                        <h3>Lista de archivos</h3>
                        <table class="table-auto w-full">
                                <thead>
                                    <tr class="bg-primary text-center">
                                        <th class="w-1/6 min-w-[160px] text-lg font-semibold text-white py-4 lg:py-7 px-3 lg:px-4 border-l border-transparent">
                                            Nombre
                                        </th>
                                        <th class="w-1/6 min-w-[160px] text-lg font-semibold text-white py-4 lg:py-7 px-3 lg:px-4 border-l border-transparent">
                                            Archivo
                                        </th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($pintura->archivos as $archivo)
                                        <tr>

                                            <td class="text-center text-dark font-medium text-base py-5 px-2 bg-[#F3F6FF] border-b border-l border-[#E8E8E8]">
                                                <a href="{{ route('archivo.descargar', $archivo->id) }}">
                                                    {{ $archivo->nombre }}
                                                </a>
                                            </td>
                                            <td>
                                                <img class ="w-1/6 min-w-[160px] py-4 lg:py-7 px-3 lg:px-4 border-l border-transparent" src="data:image/jpeg;base64, {{ base64_encode(Storage::get($archivo->nombre_hash)) }}" />
                                            </td>
                                            
                                        </tr>
                                    @endforeach
                                </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@section('script')

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <script language="JavaScript" type="text/javascript">
    $(".formulario-eliminar").submit(function(ev){
        ev.preventDefault();

        Swal.fire({
            title: '¿Estás seguro?',
            text: "No podrás revertir esto",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            cancelButtonText: 'Cancelar',
            confirmButtonText: 'Sí, borrar'
            }).then((result) => {
                if (result.isConfirmed) {
                    this.submit();
            }
        })
    });
    </script>


@endsection

</x-layout>
