@extends('layouts.app')

@section('titulo')
    Editar Perfil: <span class="font-normal">{{Auth::user()->username}}</span>

    @section('contenido')
        <div class="md:flex md:justify-center">
            <div class="md:w-1/2 bg-white shadow p-6">
                <form method="POST" action="{{route('perfil.store')}}" class="mt-10 md:mt-0" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-5">
                        <label for="username" class="mb-2 block uppercase text-gray-500 font-bold">
                            Username
                        </label>
                        <input 
                            id="username"
                            name="username"
                            type="text"
                            placeholder="Tu Nombre de Usuario"
                            class="border p-2 w-full rounded-lg @error('username') border-red-500 @enderror"
                            value="{{ Auth::user()->username }}"
                        >
                        @error('username')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                    <div class="mb-5">
                        <label for="imagen" class="mb-2 block uppercase text-gray-500 font-bold">
                            Imgen Perfil
                        </label>
                        <input 
                            id="imagen"
                            name="imagen"
                            type="file"
                            class="border p-2 w-full rounded-lg @error('imagen') border-red-500 @enderror"
                            value=""
                            accept=".jpg, .jpeg, .png"
                        >
                    </div>

                    <input 
                    type="submit"
                    value="Guardar Cambios"
                    class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg"
                    >
                </form>
            </div>
        </div>
    @endsection
@endsection