<div class="flex justify-evenly">
    <div
        class="flex text-center gap-2 overflow-hidden justify-center py-12 md:px-16">
        <div class="flex-wrap w-full shrink-0 grow-0 basis-auto leading-tight py-12 lg:px-16">
            {{--Inicio Título--}}
            <h1 class="mb-4 text-2xl font-semibold">
                {{ $title }}
            </h1>
            {{--Fin Título--}}
            {{--Inicio Formulario--}}
            <form class="w-full text-xl my-6 space-y-8 pb-2 px-4" wire:submit.prevent="save">

                {{-- Acá debe colocarse el foreach con los servicios ha solicitar llenar por el usuario --}}
                {{-- @foreach($bussines_areas as $areas)
                     <div wire:key="{{$areas->id}}" class="grid md:grid-cols-3 sm:grid-cols-2 gap-2 group">
                         <div class="max-w-sm bg-white p-6 bg-white border border-gray-200 rounded-lg focus:border-blue-500 hover:border-blue-500">
                             <div class="flex flex-col items-center">
                                <img class="w-16 h-16 mb-3" src="{{asset('img/{url}/{area->id')}}" alt="{{$areas->name}}">
                             </div>
                             <div class="ml-2 text-sm">
                                 <span class="font-bold text-gray-900">{{$areas->title}}</span>
                                 <p class="text-xs font-normal text-gray-500">{{$areas->descripction}}</p>
                             </div>
                         </div>
                     </div>
                 @endforeach--}}

                {{--Codigo ejemplo para visualizar el resultado final--}}
                <div class="grid md:grid-cols-3 grid-cols-2 md:gap-8 gap-2 group">
                    <div
                        class="max-w-sm bg-white p-6 bg-white border border-gray-200 rounded-lg focus:border-gray-500 hover:border-gray-500">
                        <div class="flex flex-col items-center">
                            <img class="w-16 h-16 mb-3" src="{{asset('img/Desktop/Step4/Perfil-10.svg')}}"
                                 alt="Comercio">
                        </div>
                        <div class="ml-2 text-sm">
                            <span class="font-bold text-gray-900">Tiendas, comercio y bienes
                                físicos</span>
                            <p class="text-xs font-normal text-gray-500">Productos materiales,
                                ropa, regalos, artículos para mascotas, lencería,
                                droguería, etc.</p>
                        </div>
                    </div>
                    <div
                        class="max-w-sm bg-white p-6 bg-white border border-gray-200 rounded-lg focus:border-gray-500 hover:border-gray-500">
                        <div class="flex flex-col items-center">
                            <img class="w-16 h-16 mb-3" src="{{asset('img/Desktop/Step4/Perfil-11.svg')}}"
                                 alt="Ciencia">
                        </div>
                        <div class="ml-2 text-sm">
                            <span class="font-bold text-gray-900">Ciencia, tecnología e ingeniería</span>
                            <p class="text-xs font-normal text-gray-500">Productos digitales, diseño web, ecommerce,
                                plataformas online, robótica, etc</p>
                        </div>
                    </div>
                    <div
                        class="max-w-sm bg-white p-6 bg-white border border-gray-200 rounded-lg focus:border-gray-500 hover:border-gray-500">
                        <div class="flex flex-col items-center">
                            <img class="w-16 h-16 mb-3" src="{{asset('img/Desktop/Step4/Perfil-12.svg')}}"
                                 alt="Construcción">
                        </div>
                        <div class="ml-2 text-sm">
                            <span class="font-bold text-gray-900">Construcción e industria</span>
                            <p class="text-xs font-normal text-gray-500">Construcción, alquiler de maquinaria, obras
                                materiales, domótica, instalaciones, etc.</p>
                        </div>
                    </div>
                    <div
                        class="max-w-sm bg-white p-6 bg-white border border-gray-200 rounded-lg focus:border-gray-500 hover:border-gray-500">
                        <div class="flex flex-col items-center">
                            <img class="w-16 h-16 mb-3" src="{{asset('img/Desktop/Step4/Perfil-14.svg')}}" alt="Ocio">
                        </div>
                        <div class="ml-2 text-sm">
                            <span class="font-bold text-gray-900">Ocio y turismo</span>
                            <p class="text-xs font-normal text-gray-500">Restaurante, bar, spa, turismo, alojamiento,
                                comida, agencia de viajes, etc.</p>
                        </div>
                    </div>
                    <div
                        class="max-w-sm bg-white p-6 bg-white border border-gray-200 rounded-lg focus:border-gray-500 hover:border-gray-500">
                        <div class="flex flex-col items-center">
                            <img class="w-16 h-16 mb-3" src="{{asset('img/Desktop/Step4/Perfil-13.svg')}}"
                                 alt="Profesional">
                        </div>
                        <div class="ml-2 text-sm">
                            <span class="font-bold text-gray-900">Servicios profesionales</span>
                            <p class="text-xs font-normal text-gray-500">Electricidad, fontanería, transporte, abogado,
                                publicidad, inmobiliaria, jardinería, etc.</p>
                        </div>
                    </div>
                    <div
                        class="max-w-sm bg-white p-6 bg-white border border-gray-200 rounded-lg focus:border-gray-500 hover:border-gray-500">
                        <div class="flex flex-col items-center">
                            <img class="w-16 h-16 mb-3" src="{{asset('img/Desktop/Step4/Perfil-15.svg')}}" alt="Salud">
                        </div>
                        <div class="ml-2 text-sm">
                            <span class="font-bold text-gray-900">Medicina, salud y belleza</span>
                            <p class="text-xs font-normal text-gray-500">Clínica dental, clínica médica, podología,
                                salón de belleza, peluquería, óptica, etc.</p>
                        </div>
                    </div>
                    <div class="w-full md:col-span-3 col-span-2">
                        <div class="relative h-10 w-full">
                            <input
                                class="peer h-full w-full rounded-[7px] border border-gray-200 border-t-transparent bg-transparent px-3 py-2.5 text-sm font-bold text-gray-900 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-gray-200 placeholder-shown:border-t-gray-200 focus:border-1 focus:border-gray-500 focus:border-t-transparent focus:outline-0 disabled:border-0 disabled:bg-gray-50"
                                placeholder=" "
                            />
                            <label class="before:content[' '] after:content[' '] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none text-[11px] font-bold leading-tight text-gray-900 transition-all before:pointer-events-none before:mt-[6.5px] before:mr-1 before:box-border before:block before:h-1.5 before:w-2.5 before:rounded-tl-md before:border-t before:border-l before:border-gray-200 before:transition-all after:pointer-events-none after:mt-[6.5px] after:ml-1 after:box-border after:block after:h-1.5 after:w-2.5 after:flex-grow after:rounded-tr-md after:border-t after:border-r after:border-gray-200 after:transition-all peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[3.75] peer-placeholder-shown:text-gray-900 peer-placeholder-shown:before:border-transparent peer-placeholder-shown:after:border-transparent peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-gray-900 peer-focus:before:border-t-1 peer-focus:before:border-l-1 peer-focus:before:border-gray-500 peer-focus:after:border-t-1 peer-focus:after:border-r-1 peer-focus:after:border-gray-500 peer-disabled:text-transparent peer-disabled:before:border-transparent peer-disabled:after:border-transparent peer-disabled:peer-placeholder-shown:text-gray-500">
                                Otro
                            </label>
                        </div>
                    </div>
                </div>

            </form>
            {{--Fin Formulario--}}
            {{--Inicio botones--}}
            <div class="flex grid md:grid-cols-2 sm:grid-cols-1 mt-4 gap-4 md:gap-8 px-4">
                <a wire:click="before()" type="button"
                   class="inline-flex justify-center items-center align-middle px-3 py-2 select-none cursor-pointer text-md border border-gray-900 focus:outline-none focus:border-blue-500 hover:border-blue-500 text-center align-middle rounded">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1"
                         stroke="currentColor" class="w-10 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M19.5 12h-15m0 0l6.75 6.75M4.5 12l6.75-6.75"/>
                    </svg>
                    {{$before}}
                </a>

                <a wire:click="next()" type="button"
                   class="inline-flex justify-center items-center align-middle px-3 py-2 select-none {{--bg-black border border-gray-900 focus:outline-none focus:border-blue-500 focus:bg-[#00AAE3] focus:shadow-[0_0_0_1px] hover:border-gray-500 shadow-[0_4px_9px_-4px_#cbcbcb] transition-all duration-150 ease hover:shadow-[-3px_-5px_5px_-1px_rgba(0,0,0,.2),_3px_5px_5px_0px_rgba(0,0,0,.2)] hover:outline-none--}} text-white bg-gray-300 cursor-pointer text-sm font-bold align-middle rounded appearance-none disabled">
                    {{$next}}
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1"
                         stroke="currentColor" class="w-10 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"/>
                    </svg>
                </a>
                {{--función que active las clases focus, hover y shadow del botón --}}
            </div>
            {{--Fin botones--}}
        </div>
    </div>
</div>
