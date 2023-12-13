@extends ('layout.master') @section('title', 'Recuperar Palavra-Passe
OPEDLeiria') @section('styles') @vite('resources/css/app.css') @endsection
@section('classes_body') bg-[#eaeaea] font-poppins @endsection
@section('content')

<div
    class="flex m-auto justify-center items-center flex-col md:max-w-[1200px] max-w-[95%]"
>
    <div class="md:w-1/2 w-full m-auto">
        <h1 class="text-4xl font-bold md:my-24 my-12 text-center">
            {{ __("Recuperar Palavra-Passe") }}
        </h1>
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session("status") }}
        </div>
        @endif
        <form class="my-8" method="POST" action="{{ route('password.email') }}">
            @csrf
            <label
                for="email"
                class="block my-2 text-sm font-medium text-gray-900"
                >{{ __("Endereço Email") }}</label
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
                        <rect width="20" height="16" x="2" y="4" rx="2" />
                        <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7" />
                    </svg>
                </div>
                <input
                    type="email"
                    id="email"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-xl focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 @error('email') is-invalid @enderror"
                    name="email"
                    value="{{ old('email') }}"
                    required
                    autocomplete="email"
                    autofocus
                    placeholder="valentim@opedleiria.pt"
                />
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </form>
        <button
            type="submit"
            class="my-2 w-full bg-primary-600 hover:bg-primary-500 focus:ring-4 focus:ring-blue-300 font-medium rounded-xl text-md px-5 py-2.5 text-center flex items-center justify-center text-white gap-2"
        >
            {{ __("Recuperar Palavra-passe") }}
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
                class="lucide lucide-log-in"
            >
                <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4" />
                <polyline points="10 17 15 12 10 7" />
                <line x1="15" x2="3" y1="12" y2="12" />
            </svg>
        </button>
        <div class="text-center">
            Ainda não tem conta?
            <a href="{{ url('register') }}" class="underline text-blue-600"
                >Registe-se</a
            >
            ou
            <a href="{{ url('login') }}" class="underline text-blue-600"
                >Entre na sua Conta</a
            >
        </div>
    </div>
</div>

@endsection
