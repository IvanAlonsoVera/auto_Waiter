<x-app-layout>
    <div>
        no estas dentro
        @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Entrar</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline"><img src="img/entrar.jpg" width="200px" height="50px"></a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline"><img src="img/registrar.png" width="200px" height="50px"></a>
                        @endif
                    @endauth
                </div>
            @endif
    </div>
</x-app-layout>
