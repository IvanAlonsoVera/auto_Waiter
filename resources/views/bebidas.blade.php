<x-app-layout>
    <div class=" container">
        <div class="col-12 row">
            @foreach ($listaBebidas as $bebida)
                <div class="card producto" style="width: 18rem;">
                    <img class="card-img-top" src="{{ $bebida->img }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title text-center text-white">{{ $bebida->nombre }}  {{ $bebida->precio }} €</h5>
                        <a href="#" class="btn btntabern col-12">Añadir a la bandeja</a>
                    </div>
                </div>    
            @endforeach
        </div>
    </div>
</x-app-layout>