<x-app-layout>
<div class="py-12 text-center">
        <div class="m-3 row">
            <form enctype="multipart/form-data" action="{{ url('crearProducto') }}" method="post">
            @csrf
                <x-label for="nombre" class="tnara col-2">Nombre del producto</x-label>
                <x-input class="col-2 text-left" type="text" id="nombre" name="nombre"></x-input>
                <br>
                <x-label for="tipo" class="tnara col-2">Tipo del producto</x-label>
                <select name="tipo" class="fondoGris tnara md-6 col-2 " aria-label="Default select example">
                    <option selected value="bebida">bebida</option>
                    <option value="picoteo">picoteo</option>
                    <option value="comida">comida</option>
                    <option value="novedad">novedad</option>
                </select>
                <br>
                <x-label for="precio" class="tnara col-2 ">Precio</x-label>
                <x-input class="col-2" type="text" id="precio" name="precio"></x-input>
                <br>
                <x-label for="img" class="tnara col-2">Ruta de la imagen</x-label>
                <x-input class="col-2" type="text" id="img" name="img"></x-input>
                <br>
                <x-button class="btn btntabern col-4 text-white">{{ __('Crear producto')}}</x-button>
            </form>
        </div>
    </div>
</x-app-layout>