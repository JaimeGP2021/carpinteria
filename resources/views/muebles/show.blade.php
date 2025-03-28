<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Ver mueble
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <dl class="max-w-md text-gray-900 divide-y divide-gray-200 dark:text-white dark:divide-gray-700">
                        <div class="flex flex-col pb-3">
                            <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">
                                Denominación
                            </dt>
                            <dd class="text-lg font-semibold">
                                {{ $mueble->denominacion }}
                            </dd>
                        </div>
                        <div class="flex flex-col py-3">
                            <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">
                                Precio
                            </dt>
                            <dd class="text-lg font-semibold">
                                {{ $mueble->precioCalculado() }}
                            </dd>
                        </div>
                    </dl>
                    @if ($mueble->muebleable::Class == 'App\Models\Fabricado')
                        <br>
                        <h2 class="mb-2 text-lg font-semibold text-gray-900 dark:text-white">Dimensiones:</h2>
                        <ul class="max-w-screen-2xl space-y-1 text-gray-500 list-inside dark:text-gray-400">
                            <li>
                                <span class="font-semibold text-gray-900 dark:text-white">Ancho: {{$mueble->muebleable->ancho}}m²</span>
                            </li>
                            <li>
                                <span class="font-semibold text-gray-900 dark:text-white">Alto: {{$mueble->muebleable->alto}}m²</span>
                            </li>
                        </ul>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
