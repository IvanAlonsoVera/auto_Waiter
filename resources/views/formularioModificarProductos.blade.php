<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Gestión de Productos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!-- ver cómo pasar $producto aquí-->
                    @isset($producto)                                    <!-- por esta ruta en el navigation-->
                        <form enctype="multipart/form-data" action="{{ url('gestionProductos') }}" method="post">
                        @csrf
                            <x-label for="nombre">Nombre del Producto:</x-label>
                            <x-input type="text" id="nombre" name="nombre" value="{{$producto->nombre}}"></x-input>
                            <br><br>
                            <!-- pensar si poner esto como un select-->
                            <x-label for="tipo">Tipo:</x-label>
                            <x-input type="text" id="tipo" name="tipo" value="{{$producto->tipo}}"></x-input>
                            <br><br>

                            <!-- hay que cambiar el tipo de input a number? o se cambia el string a integer luego?-->
                            <x-label for="precio">Precio:</x-label>
                            <x-input type="text" id="precio" name="precio" value="{{$producto->precio}}"></x-input>
                            <br><br>

                            <x-label for="img">Ruta imagen tipo: "../img/cocacola.png" :</x-label>
                            <x-input type="text" id="img" name="img" value="{{$producto->img}}"></x-input>
                            <br><br>

                            <x-button>{{ __('Modificar Producto')}}</x-button>
                        </form>
                    @else
                        <form enctype="multipart/form-data" action="{{ url('crearJugador') }}" method="post">
                        @csrf
                        <x-label for="nombre">Nombre del Producto:</x-label>
                            <x-input type="text" id="nombre" name="nombre" ></x-input>
                            <br><br>

                            <!-- pensar si poner esto como un select-->
                            <x-label for="tipo">Tipo:</x-label>
                            <x-input type="text" id="tipo" name="tipo"></x-input>
                            <br><br>

                            <x-label for="precio">Precio:</x-label>
                            <x-input type="text" id="precio" name="precio"></x-input>
                            <br><br>

                            <x-label for="img">Ruta imagen tipo: "../img/cocacola.png" :</x-label>
                            <x-input type="text" id="img" name="img"></x-input>
                            <br><br>

                            <x-button>{{ __('Crear Producto')}}</x-button>
                        </form>
                    @endisset

                    <!-- revisar esta parte de código -->
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif         
                </div>
            </div>
        </div>
    </div>
</x-app-layout>