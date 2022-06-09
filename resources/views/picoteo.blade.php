<x-app-layout>
    <div class=" container">
        <div class="row">
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
        </div>
    </div>
</x-app-layout>