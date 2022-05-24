<x-app-layout>
    @foreach ($listaNovedades as $novedad)
        <div class="container">
            <div class="producto row m-3">
                <div class="col m-2">
                    <img class="rounded-3" width="100px" src="{{ $novedad->img }}">
                </div>
                <div class="col m-2">
                    <p class="text-white">{{ $novedad->nombre }}  {{ $novedad->precio }}€</p>
                </div>
                <div class="col m-2">
                    <button class="btntabern">Añadir a la cesta</button>
                    <button class="btntabern">Añadir a la cesta</button>
                </div>
            </div>
        </div>
    @endforeach
</x-app-layout>