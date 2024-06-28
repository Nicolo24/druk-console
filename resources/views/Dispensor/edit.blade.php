<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Edit Dispensor") }}
                </div>
                <div>
                    <!-- You must be the change you wish to see in the world. - Mahatma Gandhi -->
                    {{-- Formulario para editar los datos de la tabla Dispensor --}}
                    {{-- Schema::create('dispensors', function (Blueprint $table) {
                    $table->id();
                    $table->string('serialNumber')->unique();
                    $table->string('productName') ->nullable();
                    $table->string('productDescription')->nullable();
                    //productPrice
                    $table->decimal('productPrice', 8, 2)->nullable();
                    //store product photo in db with blob and file name
                    $table->string('productPhotoFilename')->nullable();
                    $table->binary('productPhoto')->nullable();
                    $table->timestamps();
                    }); tailwind css --}}
                    <form action="{{ route('dispensors.update', $dispensor->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-4">
                            <label for="serialNumber"
                                class="block text-gray-700 text-sm font-bold mb-2">{{ __("Serial Number") }}</label>
                            <input type="text" name="serialNumber" id="serialNumber"
                                value="{{ $dispensor->serialNumber }}"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        </div>
                        <div class="mb-4">
                            <label for="productName"
                                class="block text-gray-700 text-sm font-bold mb-2">{{ __("Product Name") }}</label>
                            <input type="text" name="productName" id="productName" value="{{ $dispensor->productName }}"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        </div>
                        <div class="mb-4">
                            <label for="productDescription"
                                class="block text-gray-700 text-sm font-bold mb-2">{{ __("Product Description") }}</label>
                            <input type="text" name="productDescription" id="productDescription"
                                value="{{ $dispensor->productDescription }}"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        </div>
                        <div class="mb-4">
                            <label for="productPrice" class="block text
                            -gray-700 text-sm font-bold mb-2">{{ __("Product Price") }}</label>
                            <input type="text" name="productPrice" id="productPrice"
                                value="{{ $dispensor->productPrice }}"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        </div>
                        <div class="mb-4">
                            <button type="submit">{{ __("Update Dispensor") }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>