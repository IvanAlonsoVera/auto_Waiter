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
                        <h5 class="card-title text-center text-white"><x-input type="text" placeholder="{{ $bebida->nombre }}"></x-input><x-input type="text" placeholder="{{ $bebida->precio }}"></x-input></h5>
                       <!-- <a href="#" class="btn btntabern col-12">Añadir a la bandeja</a>-->
                       <a class="btn btntabern col-12" onclick="window.location.href='{{ url('/borrar/'.$bebida->id)}}'">{{__('Borrar')}}</a>
                    </div>
                </div>   
            @endforeach
        </div>
    </div>
</x-app-layout>