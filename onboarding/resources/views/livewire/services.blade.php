<div class="flex justify-center">
    <div
        class="grid md:grid-cols-2 sm:grid-cols-1 gap-2 w-full overflow-hidden py-12 md:px-16">
        <div class="flex-wrap w-full shrink-0 grow-0 basis-auto leading-loose py-12 sm:px-16">
            {{--Inicio Título--}}
            <h1 class="mb-4 text-2xl font-semibold px-6">
                {{ $title }}&nbsp;
            </h1>
            {{--Fin Título--}}
            {{--Inicio Formulario--}}
            <form class="justify-center w-full my-6 space-y-6 pb-2 mb-8 px-4" wire:submit.prevent="save">
                {{-- loops para almacenar los servicios indicados por el usuario --}}
                {{--@foreach($services as $service)
                    <div wire:key="services{{ $services->id }}">
                         <label for="{{$services->id}}"
                           class="block text-sm font-bold text-gray-900 leading-loose @required('$fservice')">{{ $fservice }}</label>
                    <input type="text" id="service1" placeholder="{{$phrase}}"
                           class="w-full bg-[transparent] text-md rounded border border-gray-700 text-gray-900 focus:outline-none focus:border-blue-500 invalid:border-red-500 required:border-red-500 p-2"
                           wire:model="services.services1">
                    </div>
                @endforeach--}}
                {{-- Acá debe colocarse el foreach con los servicios ha solicitar llenar por el usuario --}}
                <div class="mb-6">
                    <label for="service1"
                           class="block text-sm font-bold text-gray-900 leading-loose @required('$fservice')">{{ $fservice }}</label>
                    <input type="text" id="service1" placeholder="{{$phrase}}"
                           class="w-full bg-[transparent] text-md rounded border border-gray-700 text-gray-900 focus:outline-none focus:border-blue-500 invalid:border-red-500 required:border-red-500 p-2"
                           wire:model="services.services1">
                </div>
                <div class="mb-6">
                    <label for="service2"
                           class="block text-sm font-bold text-gray-900 leading-loose @required('$sservice')">{{ $sservice }}</label>
                    <input type="text" id="service2" placeholder="{{$phrase}}"
                           class="w-full bg-[transparent] text-md rounded border border-gray-700 text-gray-900 focus:outline-none focus:border-blue-500 invalid:border-red-500 required:border-red-500 p-2"
                           wire:model="services.services2">
                </div>
                <div class="mb-6">
                    <label for="service3"
                           class="block text-sm font-bold text-gray-900 leading-loose @required('$tservice')">{{ $tservice }}</label>
                    <input type="text" id="service3" placeholder="{{$phrase}}"
                           class="w-full bg-[transparent] text-md rounded border border-gray-700 text-gray-900 focus:outline-none focus:border-blue-500 invalid:border-red-500 required:border-red-500 p-2"
                           wire:model="services.services3">
                </div>
            </form>
            {{--Fin Formulario--}}
            {{--Inicio botones--}}
            <div class="flex grid md:grid-cols-2 sm:grid-cols-1 mt-4 md:justify-between gap-4 md:gap-8 px-4">
                <a wire:click="before()" type="button"
                   class="inline-flex justify-center items-center align-middle px-3 py-2 md:w-full select-none cursor-pointer text-md border border-gray-900 focus:outline-none focus:border-blue-500 hover:border-blue-500 text-center align-middle rounded">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1"
                         stroke="currentColor" class="w-10 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M19.5 12h-15m0 0l6.75 6.75M4.5 12l6.75-6.75"/>
                    </svg>
                    {{$before}}
                </a>
                {{--función que active las clases focus, hover y shadow del botón --}}
                <a wire:click="next()" type="button"
                   class="inline-flex justify-center items-center align-middle px-3 py-2 md:w-full select-none {{--bg-black border border-gray-900 focus:outline-none focus:border-blue-500 focus:bg-[#00AAE3] focus:shadow-[0_0_0_1px] hover:border-gray-500 shadow-[0_4px_9px_-4px_#cbcbcb] transition-all duration-150 ease hover:shadow-[-3px_-5px_5px_-1px_rgba(0,0,0,.2),_3px_5px_5px_0px_rgba(0,0,0,.2)] hover:outline-none--}} text-white bg-gray-300 cursor-pointer text-center text-white text-sm font-bold align-middle rounded appearance-none disabled">
                    {{$next}}
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1"
                         stroke="currentColor" class="w-10 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"/>
                    </svg>
                </a>
            </div>
            {{--Fin botones--}}
        </div>
        <div class="flex w-full justify-center shrink-0 grow-0 basis-auto sm:px-6 py-12 md:px-12">
            <img src="{{asset('img/onboarding-29.svg')}}" alt="user profile"
                 class="rounded-t-lg lg:rounded-tr-none lg:rounded-bl-lg"
            />
        </div>
    </div>
</div>
