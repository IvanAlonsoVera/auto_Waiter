<x-app-layout>
    <div id="carouselExampleControls" class="carousel slide mx-auto w-75 mt-3 mb-3 producto" data-ride="carousel">
        <div class="carousel-inner">
            @foreach ($listaNovedades as $novedad)    
                <div class="carousel-item">
                    <img class="d-block w-100 d-block img-fluid" src="{{ $novedad->img }}" alt="Novedades">
                </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>        
</x-app-layout>