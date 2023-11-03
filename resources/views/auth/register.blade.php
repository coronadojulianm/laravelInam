@extends('layouts.app')

@section('titulo')
    Registro Desde <span class="text-green-600 uppercase">Inam</span>
@endsection

@section('contenido')
    <div class="md:flex">
        <div class="md:w-6/12 p-5">
            <img src="{{ asset('img/logoinam.png') }}" alt="Imagen de registro">
        </div>

        <div class="md:w-1/2 bg-white p-6 rounded-lg shadow-xl">
            <form action="" method="post">
                @csrf {{--Etiqueta para evitar cross site request--}}
                <div class="mb-5">
                    <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">Nombre</label>
                    <input id="name" name="name" type="text" class="border p-3 w-full rounded-lg" placeholder="Nombre">
                    @error('name')
                        <p class="bg-red-500 text-white my-2 rounded text-sm p-2 text-center"> {{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="username" class="mb-2 block uppercase text-gray-500 font-bold">Username</label>
                    <input id="username" name="username" type="text" class="border p-3 w-full rounded-lg" placeholder="Username">
                    @error('username')
                    <p class="bg-red-500 text-white my-2 rounded text-sm p-2 text-center"> {{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">email</label>
                    <input id="email" name="email" type="email" class="border p-3 w-full rounded-lg" placeholder="E-Mail">
                    @error('email')
                    <p class="bg-red-500 text-white my-2 rounded text-sm p-2 text-center"> {{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">password</label>
                    <input id="password" name="password" type="password" class="border p-3 w-full rounded-lg" placeholder="Password">
                    @error('password')
                    <p class="bg-red-500 text-white my-2 rounded text-sm p-2 text-center"> {{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="password_confirmation" class="mb-2 block uppercase text-gray-500 font-bold">Repetir password</label>
                    <input id="password_confirmation" name="password_confirmation" type="password" class="border p-3 w-full rounded-lg" placeholder="Confirma la contraseña">
                </div>
                {{--BOTON de crear cuenta--}}
                <div class="mb-5">
                    <input type="submit" value="Crear cuenta" class="bg-green-600 hover:bg-green-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-xl">
                </div>
            </form>
        </div>
    </div>
@endsection
