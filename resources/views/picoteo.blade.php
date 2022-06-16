<x-app-layout>
    <div class=" container">
        <div class="row">
        @if(Auth::user()->rango == "admin")
                @foreach ($listaPicoteo as $picoteo)
                <div class="card producto" style="width: 40%;">
                        <img class="card-img-top" src="{{ $picoteo->img }}" alt="Card image cap">
                        <div class="card-body">
                            <form action="{{ url('/modificar/'.$picoteo->id)}}">
                                <h5 class="card-title text-center text-white">
                                <x-label for="nombre" class="tnara">Nombre</x-label>
                                <x-input name="nombre" type="text" value="{{ $picoteo->nombre }}"></x-input><br>
                                <x-label for="precio" class="tnara">Precio</x-label>
                                <x-input name="precio" type="text" value="{{ $picoteo->precio }}"></x-input><br>
                                <x-label for="img" class="tnara">Ruta de la imagen</x-label>
                                <x-input name="img" type="text" value="{{ $picoteo->img }}"></x-input><br></h5>
                                <x-button class="btn btntabern col-12 text-white">{{ __('Modificar producto')}}</x-button>
                                <x-button class="btn btntabern col-12 text-white" onclick="window.location.href='{{ url('/borrar/'.$picoteo->id)}}'">{{__('Borrar')}}</x-button>
                            </form>
                        </div>
                    </div>   
                @endforeach
                <a class="btn btntabern col-12 text-white" href="{{route('formCrear')}}">Crear nuevo producto</a>
            @else
                @foreach ($listaPicoteo as $picoteo)
                    <div class="card producto" style="width: 40%;">
                        <img class="card-img-top" src="{{ $picoteo->img }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title text-center text-white">{{ $picoteo->nombre }} {{ $picoteo->precio }} €</h5>
                        <!-- <a href="#" class="btn btntabern col-12">Añadir a la bandeja</a> -->
                            <a href="{{ route('add.to.cart', $picoteo->id) }}" class="btn btntabern col-12" role="button">Añadir al carrito</a>
                        </div>
                    </div>    
                @endforeach
            @endif
        </div>
    </div>
</x-app-layout>