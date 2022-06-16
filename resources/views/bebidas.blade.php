<x-app-layout>
    <div class=" container">
        <div class="col-12 row">
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
            @foreach ($listaBebidas as $bebida)
                <div class="card producto" style="width: 18rem;">
                    <img class="card-img-top" src="{{ $bebida->img }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title text-center text-white">
                            <x-label for="nom" class="tnara">Nombre</x-label>
                            <x-input name="nom" type="text" placeholder="{{ $bebida->nombre }}"></x-input>
                            <x-label for="pre" class="tnara">Precio</x-label>
                            <x-input name="pre" type="text" placeholder="{{ $bebida->precio }}"></x-input>
                            <x-label for="img" class="tnara">Ruta de la imagen</x-label>
                            <x-input name="img" type="text" placeholder="{{ $bebida->img }}"></x-input></h5>
                       <!-- <a href="#" class="btn btntabern col-12">Añadir a la bandeja</a>-->
                       <a class="btn btntabern col-12 text-white" onclick="window.location.href='{{ url('/modificar/'.$bebida->id)}}'">{{__('Modificar')}}</a>
                       <a class="btn btntabern col-12 text-white" onclick="window.location.href='{{ url('/borrar/'.$bebida->id)}}'">{{__('Borrar')}}</a>
                    </div>
                </div>   
            @endforeach
            <a class="btn btntabern col-12 text-white" href="{{route('formCrear')}}">Crear nuevo producto</a>
        </div>
    </div>
</x-app-layout>