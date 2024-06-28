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
                    {{ __("BienVenudo!") }}
                </div>
                <div>
                    <!-- You must be the change you wish to see in the world. - Mahatma Gandhi -->
                    {{-- Tabla para mostrar los datos de la tabla Dispensor --}}
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
                    <table class="table-auto">
                        <thead>
                            <tr>
                                <th>
                                    {{ __("Serial Number") }}
                                </th>
                                <th>
                                    {{ __("Product Name") }}
                                </th>
                                <th>
                                    {{ __("Product Description") }}
                                </th>
                                <th>
                                    {{ __("Product Price") }}
                                </th>
                                <th>
                                    {{ __("Product Photo") }}
                                </th>
                                <th>
                                    {{ __("Actions") }}
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dispensors as $dispensor)
                                <tr>
                                    <td>
                                        <div>{{ $dispensor->serialNumber }}
                                        </div>
                                    </td>
                                    <td>
                                        <div>{{ $dispensor->productName }}
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            {{ $dispensor->productDescription }}
                                        </div>
                                    </td>
                                    <td>
                                        <div>{{ $dispensor->productPrice }}
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-300">
                                        <img src="{{ asset('storage/' . $dispensor->productPhotoFilename) }}"
                                            alt="product photo" class="h-10 w-10 rounded-full">
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <a href="{{ route('dispensors.show', $dispensor->id) }}"
                                            class="text-indigo-600 hover:text-indigo-900 dark:text-indigo-400 dark:hover:text-indigo-600">View</a>
                                        <a href="{{ route('dispensors.edit', $dispensor->id) }}"
                                            class="text-indigo-600 hover:text-indigo-900 dark:text-indigo-400 dark:hover:text-indigo-600">Edit</a>
                                        <form action="{{ route('dispensors.destroy', $dispensor->id) }}" method="POST"
                                            class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="text-indigo-600 hover:text-indigo-900 dark:text-indigo-400 dark:hover:text-indigo-600">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>