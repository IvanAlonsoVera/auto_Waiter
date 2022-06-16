<x-app-layout>
    <div class=" container">
        <div class="col-12 row">
        @if((Auth::check()) && (Auth::user()->rango == "admin"))
            @foreach ($listaBebidas as $bebida)
                <div class="card producto" style="width: 18rem;">
                    <img class="card-img-top" src="{{ $bebida->img }}" alt="Card image cap">
                    <div class="card-body">
                        <form action="{{ url('/modificar/'.$bebida->id)}}">
                            <h5 class="card-title text-center text-white">
                            <x-label for="nombre" class="tnara">Nombre</x-label>
                            <x-input name="nombre" type="text" value="{{ $bebida->nombre }}"></x-input>
                            <x-label for="precio" class="tnara">Precio</x-label>
                            <x-input name="precio" type="text" value="{{ $bebida->precio }}"></x-input>
                            <x-label for="img" class="tnara">Ruta de la imagen</x-label>
                            <x-input name="img" type="text" value="{{ $bebida->img }}"></x-input></h5>
                            <x-button class="btn btntabern col-12 text-white">{{ __('Modificar producto')}}</x-button>
                            <x-button class="btn btntabern col-12 text-white" onclick="window.location.href='{{ url('/borrar/'.$bebida->id)}}'">{{__('Borrar')}}</x-button>
                        </form>
                    </div>
                </div>   
            @endforeach
            <a class="btn btntabern col-12 text-white" href="{{route('formCrear')}}">Crear nuevo producto</a>
        @else
            @foreach ($listaBebidas as $bebida)
                <div class="card producto" style="width: 18rem;">
                    <img class="card-img-top" src="{{ $bebida->img }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title text-center text-white">{{ $bebida->nombre }}  {{ $bebida->precio }} €</h5>
                       <!-- <a href="#" class="btn btntabern col-12">Añadir a la bandeja</a>-->
                        <a href="{{ route('add.to.cart', $bebida->id) }}" class="btn btntabern col-12" role="button">Añadir al carrito</a>
                    </div>
                </div>    
            @endforeach
        @endif
        </div>
    </div>
</x-app-layout>