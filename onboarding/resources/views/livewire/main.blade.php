<div class="justify-evenly">
    <div
        class="flex-col justify-center text-center shrink-0 grow-0 basis-0 leading-tight py-12 md:px-16">
        {{--Inicio Título--}}
        <h1 class="mb-4 text-2xl font-semibold">
            {{ $title }}
        </h1>
        {{--Fin Título--}}
        {{--inicio subtitulo--}}
        <p class="font-[400] md:text-2xl sm:text-md leading-4 p-6">{{ $subtext }}</p>
        {{--fin subtitulo--}}
        {{--Inicio Formulario--}}
        <form class="w-full text-xl my-6 space-y-8 pb-2" wire:submit.prevent="save">
            <div class="grid justify-center">
                <div class="grid md:grid-cols-4 grid-cols-2 gap-4 md:gap-10 mx-4">
                    <!-- Este codigo debe ser usado con los datos que se han de obtener de la DB para crear la lista de opciones-->
                    {{--@foreach ($profiles as $profile)

                        <div
                        class="border-gray-300 border rounded-lg hover:border-[#3b71ca] p-4 cursor-pointer"
                        type="button" wire:key="profile-{{ $profile->id }}>
                        <div class="flex flex-col flex-wrap sm:grow-0 sm:shrink-0 sm:basis-1/4">
                            <img class="rounded-t-sm sm:max-w-screen-sm md:max-w-screen-md"
                                 src="{{$profile->img}}" alt="{{$profile->name}}">
                        </div>
                        <div class="mt-4">
                            <p class="text-sm text-black font-medium" wire:model="{{$profile->name}}"></p>
                        </div>
                    </div>

                    @endforeach--}}

                    <!-- Ejemplo de como se debería mostrar-->
                    <div
                        class="border-gray-300 border rounded-lg hover:border-[#1e293b] active:border-[#3b71ca] focus:outline-none focus:ring focus:border-blue-700 p-4 cursor-pointer"
                        type="submit" wire:click="save">
                        <div class="flex flex-col flex-wrap sm:grow-0 sm:shrink-0 sm:basis-1/4">
                            <img class="rounded-t-sm sm:max-w-screen-sm md:max-w-screen-md"
                                 src="{{url('/img/Desktop/Step1/tipo-19.svg')}}" alt="Autónomo / Empresa">
                        </div>
                        <div class="mt-4">
                            <p class="sm:text-xs md:text-sm text-black font-medium">Autónomo / Empresa</p>
                        </div>
                    </div>
                    <div
                        class="border-gray-300 border rounded-lg hover:border-[#1e293b] active:border-[#3b71ca] focus:outline-none focus:ring focus:border-blue-700 p-4 cursor-pointer"
                        type="submit" wire:click="save">
                        <div class="flex flex-col flex-wrap sm:grow-0 sm:shrink-0 sm:basis-1/4">
                            <img class="rounded-t-sm sm:max-w-screen-sm md:max-w-screen-md"
                                 src="{{url('/img/Desktop/Step1/tipo-18.svg')}}" alt="Community Manager">
                        </div>
                        <div class="mt-4">
                            <p class="text-sm text-black font-medium">Community Manager</p>
                        </div>
                    </div>
                    <div
                        class="border-gray-300 border rounded-lg hover:border-[#1e293b] active:border-[#3b71ca] focus:outline-none focus:ring focus:border-blue-700 p-4 cursor-pointer"
                        type="submit" wire:click="save">
                        <div class="flex flex-col flex-wrap sm:grow-0 sm:shrink-0 sm:basis-1/4">
                            <img class="rounded-t-sm sm:max-w-screen-sm md:max-w-screen-md"
                                 src="{{url('/img/Desktop/Step1/tipo-16.svg')}}" alt="Agencia">
                        </div>
                        <div class="mt-4">
                            <p class="text-sm text-black font-medium">Agencia</p>
                        </div>
                    </div>
                    <div
                        class="border-gray-300 border rounded-lg hover:border-[#1e293b] active:border-[#3b71ca] focus:outline-none focus:ring focus:border-blue-700 p-4 cursor-pointer"
                        type="submit" wire:click="save">
                        <div class="flex flex-col flex-wrap sm:grow-0 sm:shrink-0 sm:basis-1/4">
                            <img class="rounded-t-sm sm:max-w-screen-sm md:max-w-screen-md"
                                 src="{{url('/img/Desktop/Step1/tipo-17.svg')}}" alt="Otro">
                        </div>
                        <div class="mt-4">
                            <p class="text-sm text-black font-medium">Otro</p>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        {{--Fin Formulario--}}
    </div>
</div>
