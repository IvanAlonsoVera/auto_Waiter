<x-app-layout>
    <div class=" container">
        <div class="m-3 row">
            @foreach ($listaComida as $comida)
                <div class="card producto">
                    <img class="card-img-top" src="{{ $comida->img }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title text-center text-white">{{ $comida->nombre }}  {{ $comida->precio }} €</h5>
                       <!-- <a href="#" class="btn btntabern col-12">Añadir a la bandeja</a>-->
                       <a href="{{ route('add.to.cart', $comida->id) }}" class="btn btntabern col-12" role="button">Añadir al carrito</a>

                    </div>
                </div>    
            @endforeach
        </div>
    </div>
</x-app-layout>