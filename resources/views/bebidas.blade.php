<x-app-layout>
    @foreach ($listaBebidas as $bebida)
        <div class="container">
            <div class="producto row m-3">
                <div class="col m-2">
                    <img class="rounded-3" width="100px" src="{{ $bebida->img }}">
                </div>
                <div class="col m-2">
                    <p class="text-white">{{ $bebida->nombre }}  {{ $bebida->precio }}€</p>
                </div>
                <div class="col m-2">
                    <button class="btntabern">Añadir a la cesta</button>
                </div>
            </div>
        </div>
    @endforeach
</x-app-layout>