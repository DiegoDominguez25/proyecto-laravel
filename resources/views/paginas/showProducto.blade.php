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
                                <td class="text-center text-dark font-medium text-base py-5 px-2 bg-white border-b border-r border-[#E8E8E8]">
                                    <form action="{{ route('pintura.destroy', $pintura) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="border border-primary py-2 px-6 text-primary inline-block rounded hover:bg-primary hover:text-white" type="submit">Borrar</button>
                                
                                    </form>
                                </td>
                                
                            </tr>
                    
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</section>

</x-layout>