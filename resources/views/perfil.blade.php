@extends ('layout.master') @section('title', 'Perfil OPEDLeiria')
@section('styles') @vite('resources/css/app.css') @endsection
@section('classes_body') bg-[#eaeaea] font-poppins @endsection
@section('content')
<div
    class="flex m-auto justify-center items-center flex-col md:max-w-[1200px] max-w-[95%]"
>
    <div class="md:w-1/2 w-full m-auto">
        <h1 class="text-4xl font-bold md:my-24 my-12 text-center">
            Perfil do Utilizador
        </h1>
        <div class="card-body">
            <form
                method="POST"
                action="{{ route('updatePerfil') }}"
                class="form-group"
                enctype="multipart/form-data"
            >
                @csrf @method('PUT') @if ($user->photo)
                <img
                    src="{{ asset('storage/users_photos/' . $user->photo) }}"
                    alt="User photo"
                    width="200"
                    class="mt-1 mb-3"
                />
                @endif

                <div class="form-group flex gap-2">
                    <div class="w-full">
                        <label
                            for="inputFullname"
                            class="block my-2 text-sm font-medium text-gray-900"
                            >Nome</label
                        >
                        <div class="relative mb-6">
                            <div
                                class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none"
                            >
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="lucide lucide-user-round w-5 h-5 text-gray-500"
                                >
                                    <circle cx="12" cy="8" r="5" />
                                    <path d="M20 21a8 8 0 0 0-16 0" />
                                </svg>
                            </div>
                            <input
                                type="text"
                                class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-xl focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 @error('name') is-invalid @enderror"
                                name="name"
                                id="inputFullname"
                                value="{{old('name',$user->name)}}"
                            />
                        </div>
                    </div>
                    <div class="w-full">
                        <label
                            for="inputNif"
                            class="block my-2 text-sm font-medium text-gray-900"
                            >NIF</label
                        >
                        <div class="relative mb-6">
                            <div
                                class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none"
                            >
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="lucide lucide-credit-card w-5 h-5 text-gray-500"
                                >
                                    <rect
                                        width="20"
                                        height="14"
                                        x="2"
                                        y="5"
                                        rx="2"
                                    />
                                    <line x1="2" x2="22" y1="10" y2="10" />
                                </svg>
                            </div>
                            <input
                                type="text"
                                class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-xl focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 @error('nif') is-invalid @enderror"
                                name="nif"
                                id="inputNif"
                                value="{{old('nif',$user->nif)}}"
                            />
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label
                        for="inputEmail"
                        class="block my-2 text-sm font-medium text-gray-900"
                        >E-mail</label
                    >
                    <div class="relative mb-6">
                        <div
                            class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none"
                        >
                            <svg
                                class="w-5 h-5 text-gray-500"
                                xmlns="http://www.w3.org/2000/svg"
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                class="lucide lucide-mail"
                            >
                                <rect
                                    width="20"
                                    height="16"
                                    x="2"
                                    y="4"
                                    rx="2"
                                />
                                <path
                                    d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"
                                />
                            </svg>
                        </div>
                        <input
                            type="text"
                            class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-xl focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 @error('email') is-invalid @enderror"
                            name="email"
                            id="inputEmail"
                            placeholder="exemplo@gmail.com"
                            value="{{old('email',$user->email)}}"
                        />
                    </div>
                </div>
                <div class="form-group mb-4">
                    <label
                        for="inputM"
                        class="block my-2 text-sm font-medium text-gray-900"
                        >Morada</label
                    >

                    <textarea
                        type="text"
                        class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-xl focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 @error('morada') is-invalid @enderror"
                        name="morada"
                        id="inputM"
                        >{{old('morada',$user->morada)}}</textarea
                    >
                </div>
                <div class="form-group flex gap-2">
                    <div class="w-full">
                        <label
                            for="inputCP"
                            class="block my-2 text-sm font-medium text-gray-900"
                            >Codigo-Postal</label
                        >
                        <div class="relative mb-6">
                            <div
                                class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none"
                            >
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="lucide lucide-home w-5 h-5 text-gray-500"
                                >
                                    <path
                                        d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"
                                    />
                                    <polyline points="9 22 9 12 15 12 15 22" />
                                </svg>
                            </div>
                            <input
                                type="text"
                                class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-xl focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 @error('cod_postal') is-invalid @enderror"
                                name="cod_postal"
                                id="inputCP"
                                value="{{old('cod_postal',$user->cod_postal)}}"
                            />
                        </div>
                    </div>
                    <div class="w-full">
                        <label
                            for="inputGenero"
                            class="block my-2 text-sm font-medium text-gray-900"
                            >Género</label
                        >
                        <div class="relative mb-6">
                            <div
                                class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none"
                            >
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="lucide lucide-person-standing w-5 h-5 text-gray-500"
                                >
                                    <circle cx="12" cy="5" r="1" />
                                    <path d="m9 20 3-6 3 6" />
                                    <path d="m6 8 6 2 6-2" />
                                    <path d="M12 10v4" />
                                </svg>
                            </div>

                            <select
                                type="text"
                                class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-xl focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 @error('email') is-invalid @enderror"
                                name="genero"
                                id="inputGenero"
                                value="{{old('genero',$user->genero)}}"
                            >
                                <option>Masculino</option>
                                <option>Feminino</option>
                            </select>
                        </div>
                    </div>
                </div>

                {{-- Acabar Tabela --}}

                <div class="form-group mb-6 flex gap-2">
                    <div class="w-full">
                        <label
                            for="inputPhoto"
                            class="block my-2 text-sm font-medium text-gray-900"
                            >Foto</label
                        >
                        <div class="relative">
                            <div
                                class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none"
                            >
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="lucide lucide-camera w-5 h-5 text-gray-500"
                                >
                                    <path
                                        d="M14.5 4h-5L7 7H4a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2h-3l-2.5-3z"
                                    />
                                    <circle cx="12" cy="13" r="3" />
                                </svg>
                            </div>
                            <input
                                type="file"
                                class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-xl focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 @error('photo') is-invalid @enderror"
                                name="photo"
                                id="inputPhoto"
                                aria-describedby="fileHelp"
                            />
                        </div>
                        <small id="fileHelp" class="text-gray-500 text-xs">
                            O tamanho da imagem não deve exceder 2MB.
                        </small>
                    </div>
                    <div class="w-full">
                        <label
                            for="inputTelefone"
                            class="block my-2 text-sm font-medium text-gray-900"
                            >Telefone</label
                        >
                        <div class="relative mb-6">
                            <div
                                class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none"
                            >
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="lucide lucide-contact-2 w-5 h-5 text-gray-500"
                                >
                                    <path d="M16 18a4 4 0 0 0-8 0" />
                                    <circle cx="12" cy="11" r="3" />
                                    <rect
                                        width="18"
                                        height="18"
                                        x="3"
                                        y="4"
                                        rx="2"
                                    />
                                    <line x1="8" x2="8" y1="2" y2="4" />
                                    <line x1="16" x2="16" y1="2" y2="4" />
                                </svg>
                            </div>
                            <input
                                type="phone"
                                class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-xl focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 @error('email') is-invalid @enderror"
                                name="telefone"
                                id="inputTelefone"
                                value="{{old('telefone',$user->telefone)}}"
                            />
                        </div>
                    </div>
                </div>

                <div class="form-group flex gap-2">
                    <button
                        type="submit"
                        class="my-2 w-full bg-primary-600 hover:bg-primary-500 focus:ring-4 focus:ring-blue-300 font-medium rounded-xl text-md px-5 py-2.5 text-center flex items-center justify-center text-white gap-2"
                        name="ok"
                    >
                        Guardar Alterações
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="20"
                            height="20"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.8"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            class="lucide lucide-save w-5 h-5"
                        >
                            <path
                                d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z"
                            />
                            <polyline points="17 21 17 13 7 13 7 21" />
                            <polyline points="7 3 7 8 15 8" />
                        </svg>
                    </button>
                    <a
                        href="{{
                            route('admin.users.sendActivationEmail', $user)
                        }}"
                        class="my-2 w-full bg-primary-800 hover:bg-primary-700 focus:ring-4 focus:ring-blue-300 font-medium rounded-xl text-md px-5 py-2.5 text-center flex items-center justify-center text-white gap-2"
                        >Verificar Email
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            class="lucide lucide-shield-check h-5 w-5"
                        >
                            <path
                                d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10"
                            />
                            <path d="m9 12 2 2 4-4" />
                        </svg>
                    </a>
                </div>
            </form>
            @if ($user->photo)
            <form
                method="POST"
                action="{{ route('admin.users.destroyPhoto', $user) }}"
                class="inline"
            >
                @csrf @method('DELETE')
                <button type="submit" class="btn btn-danger">
                    Apagar foto
                </button>
            </form>
            @endif
        </div>
    </div>
</div>
@endsection
