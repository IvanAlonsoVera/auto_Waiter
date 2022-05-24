<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>AutoWaiter</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            <nav class="nav nav-pills negro p-2">
                <a class=" flex-sm-fill text-sm-center nav-link" href="../index.html"><img src="../img/buha.png" width="100px"></a>
                <a class="mt-2 menu flex-sm-fill text-sm-center nav-link naranja" href="bebidas">Bebidas</a>
                <a class="mt-2 menu flex-sm-fill text-sm-center nav-link naranja" href="picoteo">Picoteo</a>
                <a class="mt-2 menu flex-sm-fill text-sm-center nav-link naranja" href="carta">Carta</a>
                <a class="mt-2 menu flex-sm-fill text-sm-center nav-link naranja" href="novedades">Novedades</a>
                @if (Request::route()->getName() == 'index')
                    <button class="mt-2 menu flex-sm-fill text-sm-center nav-link naranja" type="button" data-bs-toggle="modal" data-bs-target="#loginmodal">Login</button>
                @else
                <a class="mt-2 menu flex-sm-fill text-sm-center nav-link naranja" href="{{route('logout')}}">LogOut</a>
                @endif    
            </nav>
<!--____________________________________________________MODAL LOGIN_________________________________________________________-->
            <div class="modal fade" id="loginmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title tnara">La Buha</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
<!--_________________________________________________________Form____________________________________________________________-->
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div>
                                <x-label class="tnara col-4" for="email" :value="__('Correo:')" />
                                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                            </div>
                            <div class="mt-4">
                                <x-label class="tnara col-4" for="password" :value="__('Contraseña:')" />
                                <x-input id="password" class="block mt-1 w-full"
                                                type="password"
                                                name="password"
                                                required autocomplete="current-password" />
                            </div>
                            <div class="block mt-4">
                                <label for="remember_me" class="inline-flex items-center">
                                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                                    <span class="tnara col-4">{{ __('Recuerdame') }}</span>
                                </label>
                            </div>
                            <div class="flex items-center justify-end mt-4">
                                @if (Route::has('password.request'))
                                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                        {{ __('¿Has olvidado tu contraseña?') }}
                                    </a>
                                @endif
                                <button class="mt-2 col-6 text-black menu flex-sm-fill text-sm-center nav-link naranja btnf" type="button" data-bs-toggle="modal" data-bs-target="#registromodal">¿Aun no tienes cuenta?</button>
                                <button class="mt-2 col-6 text-black menu flex-sm-fill text-sm-center nav-link naranja btnf">{{ __('Log in') }}</button>
                            </div>
                        </form>
                    </div>
                    </div>
                </div>
                </div>
<!--____________________________________________________MODAL Registro____________________________________________________________-->
                <div class="modal fade" id="registromodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title tnara">La Buha</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
<!--_________________________________________________________Form____________________________________________________________-->
                            <form method="POST" action="{{ route('register') }}">
                                        @csrf
                                        <div class="mt-4">
                                            <x-label class="tnara col-4" for="name" :value="__('Nombre')" />
                                            <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required />
                                        </div>
                                        <div class="mt-4">
                                            <x-label class="tnara col-4" for="email" :value="__('Email')" />
                                            <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                                        </div>
                                        <div class="mt-4">
                                            <x-label class="tnara col-4" for="password" :value="__('Contraseña')" />
                                            <x-input id="password" class="block mt-1 w-full"
                                                            type="password"
                                                            name="password"
                                                            required autocomplete="new-password" />
                                        </div>
                                        <div class="mt-4">
                                            <x-label class="tnara col-4" for="password_confirmation" :value="__('Confirmar Contraseña')" />
                                            <x-input id="password_confirmation" class="block mt-1 w-full"
                                                            type="password"
                                                            name="password_confirmation" required />
                                        </div>
                                        <div class="flex items-center justify-end mt-4">
                                            <button class="mt-2 col-6 text-black menu flex-sm-fill text-sm-center nav-link naranja btnf">
                                                {{ __('Registrarse') }}
                                            </button>
                                        </div>
            
                                    </form>
                                </div>
                            </div>
                        </div>
                </div>
            <main>
                {{ $slot }}
            </main>
            <footer id="footer"> 
<!--________________________________________________________Footer____________________________________________________________-->
            <div class=" container">
                    <div class="row">
                            <div class=" col-md-4 col-sm-4 col-xs-4 text-white">
                                <p>© Copyright 2022 Grupo El Buo. Todos los derechos reservados. <br />Artwork: <a class="text-white" href="http://www.creativesamlab.com" target="_blank">www.creativesamlab.com</a></p>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-4 redes-sociales-footer">
                                <h5 class="mb-sm text-white">Redes Sociales</h5>
                                <a class="text-white" href="https://www.facebook.com/tabernaselbuo.tabernaslabuha" >Facebook</a>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-4">
                                <p><a href="politica-de-cookies" class="text-white">Política de cookies</a></p>
                            </div>
                            </div>
                    </div>
            </div>
        </footer>
        </div>
    </body>
</html>
