
<x-app-layout>
    @foreach ($listaBebidas as $bebida)
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <div class="max-w-sm rounded overflow-hidden shadow-lg">
                          <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2">{{ $prem->anio }}</div>
                            <p class="text-gray-500 text-base">{{ $prem->comic }}</p>
                            <p class="text-gray-700 text-base">{{ $prem->autor }}</p>
                          </div>
                          <div class="px-6 pt-4 pb-2">
                            <x-button class="ml-4" onclick="window.location.href='{{ url('/borrar/'.$prem->id)}}'">{{__('Borrar')}}</x-button>
                            <x-button class="ml-4" onclick="window.location.href='{{ url('/modificar/'.$prem->id)}}'">{{__('Modificar')}}</x-button>
                          </div>
                        </div>                    
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</x-app-layout>