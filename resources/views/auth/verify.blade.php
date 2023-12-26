@extends ('layout.master') @section('title', 'Verificar Endereço Email
OPEDLeiria') @section('styles') @vite('resources/css/app.css') @endsection
@section('classes_body') bg-[#eaeaea] font-poppins @endsection
@section('content')

<div
    class="flex m-auto justify-center items-center flex-col md:max-w-[1200px] max-w-[95%]"
>
    <div class="md:w-1/2 w-full m-auto">
        <h1 class="text-4xl font-bold md:my-24 my-12 text-center">
            {{ __("Verificar Endereço Email") }}
        </h1>
        @if (session('resent'))
        <div class="alert alert-success" role="alert">
            {{
                __(
                    "Foi enviado um link para o seu endereço email, para recuperar a sua palavra-passe."
                )
            }}
        </div>
        @endif
        {{
            __(
                "Antes de continuar, verifique seu e-mail para obter um link de verificação."
            )
        }}
        {{ __("Se você não recebeu o e-mail") }},
        <form
            class="my-8"
            method="POST"
            action="{{ route('verification.resend') }}"
        >
            @csrf
            <button
                type="submit"
                class="my-2 w-full bg-primary-600 hover:bg-primary-500 focus:ring-4 focus:ring-blue-300 font-medium rounded-xl text-md px-5 py-2.5 text-center flex items-center justify-center text-white gap-2"
            >
                {{ __("Enviar novamente") }}
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
        </form>
    </div>
</div>

@endsection
