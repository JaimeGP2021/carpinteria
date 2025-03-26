<x-app-layout>
    <div class="flex justify-center w-full mt-4">
        <form action="{{ route('muebles.create') }}" method="GET">
            <button type="submit" class="text-white p-2 bg-purple-600 rounded-lg text-center">
                Añadir mueble
            </button>
        </form>
    </div>

    <div class="flex w-10/12 mx-auto justify-center space-x-8">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 mt-6">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Denominación
                    </th><th scope="col" class="px-6 py-3">
                        Precio/u
                    </th><th scope="col" class="px-6 py-3">
                        Proporciones
                    <th scope="col" colspan="2" class="px-6 py-3">
                        Acciones
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($muebles as $mueble)
                <tr class="odd:bg-white even:bg-gray-50 borden-b">
                    <td class="px-6 py-4">{{ $mueble->denominacion }}</td>

                    <td class="px-6 py-4">{{ $mueble->precioCalculado() }} € </td>

                    @if ($mueble->muebleable::Class == 'App\Models\Fabricado')
                        <td class="px-6 py-4">
                            {{ $mueble->muebleable->ancho}} x {{ $mueble->muebleable->alto}}
                        </td>
                    @else
                        <td>{{ " " }}</td>
                    @endif

                    <td class="px-6 py-4">
                        <form action="{{ route('muebles.edit', $mueble) }}" method="get">
                            <x-primary-button>Editar</x-primary-button>
                        </form>
                    </td>
                    <td class="px-6 py-4">
                        <form action="{{ route('muebles.destroy', $mueble) }}" method="post">
                            @csrf
                            @method('delete')
                            <x-primary-button onclick="event.preventDefault(); if (confirm('¿Está seguro?')) this.closest('form').submit();">Eliminar</x-primary-button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
