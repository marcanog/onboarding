<div>
    <div
        class="md:flex flex-wrap items-center min-h-screen py-6 mx-auto justify-center relative overflow-hidden sm:py-12">
        <div class="w-full shrink-0 grow-0 basis-auto lg:w-6/12 xl:w-6/10 leading-tight px-6 py-12 md:px-12">

            <h1 class="mb-4 text-4xl font-semibold">¡
                <span
                    class="bg-gradient-to-r from-blue-600 via-green-500 to-pink-500 inline-block text-transparent bg-clip-text">
                    {{ $customer }}</span>,&nbsp;{{ $title }}
            </h1>
            <p class="font-semibold text-2xl">{{ $subtext }}</p>

            <form class="text-xl my-6" wire:submit="save">

                <ul role="list" class="space-y-2">
                    <!-- Este codigo debe ser usado con los datos que se han de obtener de la DB para crear la lista de opciones-->
                    {{--@foreach ($profiles as $profile)

                        <li wire:key="profile-{{ $profile->id }}">
                        <input id={{ $profile->name }} type="radio" value="" name"{{ $profile }}"
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                        <label for="{{$profile->name}}" class="ml-2 text-md font-medium text-gray-900">{{$profile->name}}</label>
                        </li>

                    @endforeach--}}
                    <!-- Ejemplo de como se debería mostrar-->
                    <li>
                        <input id="Autonomo" type="radio" value="" name="Autonomo"
                               class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                        <label for="Autonomo" class="ml-2 text-md font-medium text-gray-900">Autónomo/Empresa</label>
                    </li>
                    <li>
                        <input id="Community" type="radio" value="" name="Autonomo"
                               class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                        <label for="Community" class="ml-2 text-md font-medium text-gray-900">Community Manager</label>
                    </li>
                    <li>
                        <input id="Agencia" type="radio" value="" name="Autonomo"
                               class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                        <label for="Agencia" class="ml-2 text-md font-medium text-gray-900">Agencia</label>
                    </li>
                    <li>
                        <input id="Otro" type="radio" value="" name="Autonomo"
                               class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                        <label for="Otro" class="ml-2 text-md font-medium text-gray-900">Otro Usuario</label>
                    </li>

                </ul>

            </form>
            <div class="my-6 lg:justify-between min-w-full">
                {{--Esta parte comentada es por si el usuario venia desde otra parte del formulario--}}
                {{--<button wire:click="before" class="w-[30%] px-3 py-2 bg-red-600 text-white hover:bg-red-600 hover:text-red-400 rounded">
                    Anterior
                </button>--}}
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
