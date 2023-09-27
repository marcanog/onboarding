<div>
    <div class="md:flex flex-wrap items-center min-h-screen py-6 mx-auto justify-center relative overflow-hidden sm:py-12">
        <div class="w-full shrink-0 grow-0 basis-auto lg:w-6/12 xl:w-6/10 leading-tight px-6 py-12 md:px-12">

            <h1 class="mb-4 text-5xl font-semibold">¡
                <span
                    class="bg-gradient-to-r from-blue-600 via-green-500 to-pink-500 inline-block text-transparent bg-clip-text">
                    {{ $customer }}</span>{{ $title }}
            </h1>
            <p class="font-semibold text-2xl">{{ $subtext }}</p>
            <form class="text-xl my-6" wire:submit="save">
                <ul role="list" class="space-y-2">
                    <!-- Este codigo debe ser usado con los datos que se han de obtener de la DB para crear la lista de opciones-->
                    {{--@foreach ($profiles as $profile)

                        <li wire:key="profile-{{ $profile->id }}">{{ $profile }}</li>

                    @endforeach--}}
                    <!-- Ejemplo de como se debería mostrar-->
                    <li>Autónomo/Empresa</li>
                    <li>Community Manager</li>
                    <li>Agencia</li>
                    <li>Otro Usuario</li>

                </ul>
            </form>
        </div>

        <div class="shrink-0 grow-0 basis-auto md:w-96 lg:flex lg:w-6/12 xl:w-6/10">
            <img src="{{asset('img/Tablet_login.svg')}}" alt="user profile"
                 class="rounded-t-lg lg:rounded-tr-none lg:rounded-bl-lg"
            />
        </div>

    </div>
</div>
