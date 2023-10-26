<div class="flex justify-center">
    <div
        class="sm:w-full xl:w-[75%] overflow-hidden py-12 md:px-16">
        <div class="flex flex-wrap justify-center items-center shrink-0 grow-0 basis-auto leading-loose py-12 sm:px-16 lg:p-0">
            {{--Inicio Título--}}
            <h1 class="mb-4 text-2xl text-center font-semibold">
                {{ $title }}
            </h1>
            {{--Fin Título--}}
            {{--Inicio Formulario--}}
            <form class="w-full place-items-center text-xl text-center my-6 pb-2" wire:submit.prevent="save">

                {{-- Acá debe colocarse el foreach con los servicios ha solicitar llenar por el usuario --}}
                {{-- @foreach($type_Contact as $contact)
                     <div wire:key="{{$contact->id}}" class="grid lg:grid-cols-4 sm:grid-cols-2 px-6 gap-4 md:gap-8 group">
                         <div class="sm:w-50% md:w-full bg-white p-6 bg-white border border-gray-200 rounded-lg focus:border-gray-500 hover:border-gray-500">
                             <div class="flex flex-col items-center">
                                <img class="w-16 h-16 mb-3" src="{{asset('img/{url}/{$contact->id')}}" alt="{{$contact->name}}">
                             </div>
                             <div class="ml-2 text-medium">
                                 <span class="font-bold text-gray-900">{{$contact->title}}</span>
                             </div>
                         </div>
                     </div>
                 @endforeach--}}

                {{--Codigo ejemplo para visualizar el resultado final--}}
                <div class="grid md:grid-cols-4 grid-cols-2 px-6 gap-4 md:gap-8 group">
                    <div
                        class="sm:w-50% md:w-full bg-white p-6 bg-white border border-gray-200 rounded-lg text-sm sm:text-base focus:border-gray-500 hover:border-gray-500">
                        <div class="flex flex-col items-center">
                            <img class="w-16 h-16 mb-3" src="{{asset('img/Desktop/Step5/Google.svg')}}"
                                 alt="Google">
                        </div>
                        <div class="ml-2">
                            <span class="font-bold text-gray-900">Google</span>
                        </div>
                    </div>
                    <div
                        class="sm:w-50% md:w-full bg-white p-6 bg-white border border-gray-200 rounded-lg text-sm sm:text-base focus:border-gray-500 hover:border-gray-500">
                        <div class="flex flex-col items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class=" w-16 h-16 mb-3 " height="64px" viewBox="0 0 512 512">
                                <style>svg {
                                        fill: #1877f2
                                    }</style>
                                <path
                                    d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"/>
                            </svg>
                        </div>
                        <div class="ml-2">
                            <span class="font-bold text-gray-900">Facebook</span>
                        </div>
                    </div>
                    <div
                        class="sm:w-50% md:w-full bg-white p-6 bg-white border border-gray-200 rounded-lg text-sm sm:text-base focus:border-gray-500 hover:border-gray-500">
                        <div class="flex flex-col items-center">
                            <img class="w-16 h-16 mb-3" src="{{asset('img/Desktop/Step5/X.svg')}}"
                                 alt="Twitter">
                        </div>
                        <div class="ml-2">
                            <span class="font-bold text-gray-900">Twitter</span>
                        </div>
                    </div>
                    <div
                        class="sm:w-50% md:w-full bg-white p-6 bg-white border border-gray-200 rounded-lg text-sm sm:text-base focus:border-gray-500 hover:border-gray-500">
                        <div class="flex flex-col items-center">
                            <img class="w-16 h-16 mb-3" src="{{asset('img/Desktop/Step5/Ig.svg')}}"
                                 alt="Instagram">
                        </div>
                        <div class="ml-2">
                            <span class="font-bold text-gray-900">Instagram</span>
                        </div>
                    </div>
                    <div
                        class="sm:w-50% md:w-full bg-white p-6 bg-white border border-gray-200 rounded-lg text-sm sm:text-base focus:border-gray-500 hover:border-gray-500">
                        <div class="flex flex-col items-center">
                            <img class="w-16 h-16 mb-3" src="{{asset('img/Desktop/Step5/Linkedin.svg')}}"
                                 alt="Linkedin">
                        </div>
                        <div class="ml-2">
                            <span class="font-bold text-gray-900">Linkedin</span>
                        </div>
                    </div>
                    <div
                        class="sm:w-50% md:w-full bg-white p-6 bg-white border border-gray-200 text-sm sm:text-base rounded-lg focus:border-gray-500 hover:border-gray-500">
                        <div class="flex flex-col items-center">
                            <img class="w-16 h-16 mb-3" src="{{asset('img/Desktop/Step5/Gmail.svg')}}"
                                 alt="Email">
                        </div>
                        <div class="ml-2">
                            <span class="font-bold text-gray-900">Email</span>
                        </div>
                    </div>
                    <div
                        class="sm:w-50% md:w-full bg-white p-6 bg-white border border-gray-200 rounded-lg text-sm sm:text-base focus:border-gray-500 hover:border-gray-500">
                        <div class="flex flex-col items-center">
                            <img class="w-16 h-16 mb-3" src="{{asset('img/Desktop/Step5/Friend.svg')}}"
                                 alt="Friend">
                        </div>
                        <div class="ml-2">
                            <span class="font-bold text-gray-900">Por un amigo</span>
                        </div>
                    </div>
                    <div
                        class="sm:w-50% md:w-full bg-white p-6 bg-white border border-gray-200 rounded-lg text-sm sm:text-base focus:border-gray-500 hover:border-gray-500">
                        <div class="flex flex-col items-center">
                            <img class="w-16 h-16 mb-3" src="{{asset('img/Desktop/Step5/Other.svg')}}" alt="Salud">
                        </div>
                        <div class="ml-2">
                            <span class="font-bold text-gray-900">Otro canal</span>
                        </div>
                    </div>
                </div>

            </form>
            {{--Fin Formulario--}}
            {{--Inicio botones--}}
            <div class="grid lg:grid-cols-2 sm:grid-cols-1 mt-4 w-full gap-8 px-4">
                <a wire:click="before()" type="button"
                   class="inline-flex justify-center items-center align-middle px-3 py-2 select-none cursor-pointer text-md border border-gray-900 focus:outline-none focus:border-blue-500 hover:border-blue-500 text-center align-middle rounded">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1"
                         stroke="currentColor" class="w-10 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M19.5 12h-15m0 0l6.75 6.75M4.5 12l6.75-6.75"/>
                    </svg>
                    {{$before}}
                </a>
                {{--función que active las clases focus, hover y shadow del botón --}}

            {{--Fin botones--}}
        </div>
    </div>
</div>
