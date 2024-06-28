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
    }); --}}
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Serial Number</th>
                <th>Product Name</th>
                <th>Product Description</th>
                <th>Product Price</th>
                <th>Product Photo</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dispensors as $dispensor)
                <tr>
                    <td>{{ $dispensor->serialNumber }}</td>
                    <td>{{ $dispensor->productName }}</td>
                    <td>{{ $dispensor->productDescription }}</td>
                    <td>{{ $dispensor->productPrice }}</td>
                    <td>{{ $dispensor->productPhotoFilename }}</td>
                    <td>
                        <a href="{{ route('dispensors.show', $dispensor->id) }}" class="btn btn-info">Show</a>
                        <a href="{{ route('dispensors.edit', $dispensor->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('dispensors.destroy', $dispensor->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('dispensors.create') }}" class="btn btn-success">Create</a>
    
</div>
