@extends ('layout.master') @section('title', 'Registar OPEDLeiria')
@section('styles') @vite('resources/css/app.css') @endsection
@section('classes_body') bg-[#eaeaea] font-poppins @endsection
@section('content')

<div
    class="flex m-auto justify-center items-center flex-col md:max-w-[1200px] max-w-[95%]"
>
    <div class="md:w-1/2 w-full m-auto">
        <h1 class="text-4xl font-bold md:my-24 my-12 text-center">
            Registar Conta
        </h1>
        <form class="my-8" method="POST" action="{{ route('register') }}">
            @csrf
            <div class="flex justify-between gap-2 md:flex-row flex-col">
                <div class="w-full">
                    <label
                        for=""
                        class="block my-2 text-sm font-medium text-gray-900"
                        >Nome</label
                    >
                    <div class="relative mb-2">
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
                                class="lucide lucide-user-2"
                            >
                                <circle cx="12" cy="8" r="5" />
                                <path d="M20 21a8 8 0 1 0-16 0" />
                            </svg>
                        </div>
                        <input
                            type="text"
                            id=""
                            name="name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-xl focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5"
                            placeholder="Valentim"
                        />
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
            </div>
            <label for="" class="block my-2 text-sm font-medium text-gray-900"
                >Endereço Email</label
            >
            <div class="relative mb-2">
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
                        <rect width="20" height="16" x="2" y="4" rx="2" />
                        <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7" />
                    </svg>
                </div>
                <input
                    type="text"
                    id=""
                    name="email"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-xl focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5"
                    placeholder="valentim@opedleiria.pt"
                />
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="flex justify-between gap-2 md:flex-row flex-col">
                <div class="w-full">
                    <label
                        for=""
                        class="block my-2 text-sm font-medium text-gray-900"
                        >Palavra-Passe</label
                    >
                    <div class="relative mb-2">
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
                                class="lucide lucide-key-round"
                            >
                                <path
                                    d="M2 18v3c0 .6.4 1 1 1h4v-3h3v-3h2l1.4-1.4a6.5 6.5 0 1 0-4-4Z"
                                />
                                <circle cx="16.5" cy="7.5" r=".5" />
                            </svg>
                        </div>
                        <input
                            type="password"
                            id="password"
                            name="password"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-xl focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5"
                            placeholder="***************"
                        />
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="w-full">
                    <label
                        for=""
                        class="block my-2 text-sm font-medium text-gray-900"
                        >Confirmar Palavra-Passe</label
                    >
                    <div class="relative mb-2">
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
                                class="lucide lucide-key-round"
                            >
                                <path
                                    d="M2 18v3c0 .6.4 1 1 1h4v-3h3v-3h2l1.4-1.4a6.5 6.5 0 1 0-4-4Z"
                                />
                                <circle cx="16.5" cy="7.5" r=".5" />
                            </svg>
                        </div>
                        <input
                            type="password"
                            id=""
                            name="password_confirmation"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-xl focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5"
                            placeholder="***************"
                        />
                    </div>
                </div>
            </div>
            <div
                class="my-2 w-full bg-primary-600 hover:bg-primary-500 focus:ring-4 focus:ring-blue-300 font-medium rounded-xl text-md px-5 py-2.5 text-center flex items-center justify-center text-white gap-2"
            >
                <button type="submit">{{ __("Registar") }}</button>
                <svg
                    class="w-5 h-5"
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    class="lucide lucide-check"
                >
                    <path d="M20 6 9 17l-5-5" />
                </svg>
            </div>
        </form>
        <div class="text-center">
            Já é utilizador?
            <a href="{{ url('login') }}" class="underline text-blue-600"
                >Entre na sua conta</a
            >
        </div>
    </div>
</div>

@endsection @section('scripts')
<!-- opcional-->
@endsection
