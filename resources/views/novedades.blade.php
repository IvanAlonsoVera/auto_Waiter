<x-app-layout>
    <section class="carousel" aria-label="Gallery">
        <ol class="carousel__viewport">
            @foreach ($listaNovedades as $novedad)
            @endforeach
        </ol>
    </section>
</x-app-layout>