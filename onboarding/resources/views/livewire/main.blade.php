<div>
    <div
        class="text-center shrink-0 grow-0 basis-0 h-leading-loose py-32 md:px-16">
        <h1 class="text-4xl font-[900] leading-9 gap-10 py-6">
            {{ $title }}
        </h1>
        <p class="font-[400] md:text-2xl sm:text-md leading-4 p-6">{{ $subtext }}</p>
        <form class="md:text-xl sm:text-base my-6 leading-loose" wire:submit="save">
            <div class="grid justify-center">
                <div class="grid md:grid-cols-4 sm:grid-cols-2 gap-10">
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
    </div>
</div>
