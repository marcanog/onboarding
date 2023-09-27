<div>
    <div
        class="md:flex flex-wrap items-center min-h-screen py-6 mx-auto justify-center relative overflow-hidden sm:py-12">
        <div class="w-full shrink-0 grow-0 basis-auto lg:w-6/12 xl:w-6/10 leading-tight px-6 py-12 md:px-12">
            <h1 class="mb-4 text-4xl font-semibold">Escribe
                <span
                    class="bg-gradient-to-r from-blue-600 via-green-500 to-pink-500 inline-block text-transparent bg-clip-text">{{ $title }}</span>&nbsp;{{$subtext}}
            </h1>

            <form class="min-w-full text-xl my-6 space-y-12 pb-2" wire:submit.prevent="save">
                {{-- loops para almacenar los servicios indicados por el usuario --}}
                {{--@foreach($services as $service)
                    <div wire:key="services{{ $services->id }}">
                        <input type="text" placeholder="Servicio" class="w-[60%] border-t-0 border-x-0 bg-[transparent] border-b border-gray-300 text-gray-900 focus:outline-none" wire:model="services.{{$service}}">
                    </div>
                @endforeach--}}
                {{-- Acá debe colocarse el foreach con los servicios ha solicitar llenar por el usuario --}}

                <input type="text" id="service" placeholder="Servicio 1" class="w-[60%] border-t-0 border-x-0 bg-[transparent] border-b border-gray-300 text-gray-900 focus:outline-none" wire:model="services.services1">

                <input type="text" id="service" placeholder="Servicio 2" class="w-[60%] bg-[transparent] border-x-0 border-t-0 border-b  border-gray-300 text-gray-900 focus:outline-none" wire:model="services.services2">

                <input type="text" id="service" placeholder="Servicio 3" class="w-[60%] bg-[transparent] border-x-0 border-t-0 border-b  border-gray-300 text-gray-900 focus:outline-none" wire:model="services.services3">


            </form>
            <div class="my-6 lg:justify-between min-w-full">
                <button wire:click="before" class="w-[30%] px-3 py-2 bg-red-600 text-white hover:bg-red-600 hover:text-red-400 rounded">
                    Anterior
                </button>
                <button wire:click="next()" class="w-[30%] px-3 py-2 bg-blue-600 text-white hover:bg-blue-500 hover:text-blue-400 rounded">
                    Siguiente
                </button>
            </div>

        </div>
        <div class="shrink-0 grow-0 basis-auto md:w-96 lg:flex lg:w-6/12 xl:w-6/10">
            <img src="{{asset('img/Tablet_login.svg')}}" alt="user profile"
                 class="rounded-t-lg lg:rounded-tr-none lg:rounded-bl-lg"
            />
        </div>
    </div>
</div>
