<x-app-layout>
    <div class="flex w-10/12 mx-auto justify-center space-x-8">
        <form method="POST" action="{{ route('muebles.store') }}" class="max-w-sm mx-auto mt-6">
            @csrf
            <div class="mb-5">
                <x-input-label for="denominacion" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">
                    Denominacion
                </x-input-label>
                <x-text-input name="denominacion" type="text" id="denominacion"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    :value="old('denominacion')" />
                <x-input-error :messages="$errors->get('denominacion')" class="mt-2" />
            </div>

            <div class="mb-5">
                <x-input-label for="precio" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">
                    Precio
                </x-input-label>
                <x-text-input name="precio" type="text" min="1" id="precio"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    :value="old('precio')" />
                <x-input-error :messages="$errors->get('precio')" class="mt-2" />
            </div>

            <div class="mb-5">
                <x-input-label for="tipo" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">
                    Tipo de mueble
                </x-input-label>
                <select name="tipo" type="text" id="tipo"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    onchange="this.value=='fabricado' ? document.getElementById('dimension').style.display='block' : document.getElementById('dimension').style.display='none';">
                    <option>Elige un tipo</option>
                    <option value="fabricado">Fabricado</option>
                    <option value="prefabricado">Prefabricado</option>
                </select>
                <x-input-error :messages="$errors->get('tipo')" class="mt-2" />
            </div>

            <div id="dimension" class="mb-5" style="display:none">
                <x-input-label for="ancho" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">
                    Ancho
                </x-input-label>
                <x-text-input name="ancho" type="text" min="0.01" id="ancho"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    :value="old('ancho')" />
                <x-input-error :messages="$errors->get('ancho')" class="mt-2" />

                <x-input-label for="alto" class="block mb-1 mt-2 text-sm font-medium text-gray-900 dark:text-white">
                    Alto
                </x-input-label>
                <x-text-input name="alto" type="text" min="0.01" id="alto"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    :value="old('alto')" />
                <x-input-error :messages="$errors->get('alto')" class="mt-2" />
            </div>


            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Crear
            </button>

        </form>
    </div>
</x-app-layout>
