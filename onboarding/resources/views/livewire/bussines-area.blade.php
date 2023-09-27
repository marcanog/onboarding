<div>
    <div
        class="md:flex flex-wrap items-center w-full min-h-screen py-6 mx-auto justify-center relative overflow-hidden sm:py-12">
        <div class="shrink-0 grow-0 basis-auto lg:w-9/12 xl:w-9/10 leading-tight px-6 py-12 md:px-12">
            <h1 class="mb-4 text-4xl font-semibold">¿
                <span
                    class="bg-gradient-to-r from-blue-600 via-green-500 to-pink-500 inline-block text-transparent bg-clip-text">{{ $title }}</span>&nbsp;{{$subtext}}
                ?
            </h1>

            <form class="min-w-full text-xl my-6 space-y-12 pb-2" wire:submit="save">

                {{-- Acá debe colocarse el foreach con los servicios ha solicitar llenar por el usuario --}}
                {{-- @foreach($bussines_areas as $areas)
                     <div wire:key="{{$areas->id}}" class="grid grid-cols-2 gap-2">
                         <div class="block h-auto max-w-full p-6 bg-white border border-gray-200 rounded-lg focus:border-blue-500 hover:border-blue-500 shadow-[0_0px_3px_0_rgba(0,0,0,0.07),0_2px_2px_0_rgba(0,0,0,0.04)] ">
                             <div class="flex items-center justify-end h-5">
                                 <input id="helper-radio" aria-describedby="helper-radio-text" type="radio" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                             </div>
                             <div class="ml-2 text-sm">
                                 <label for="helper-radio" class="font-medium text-gray-900">{{$areas->title}}</label>
                                 <p id="helper-radio-text" class="text-xs font-normal text-gray-500">{{$areas->descripction}}</p>
                             </div>
                         </div>
                     </div>
                 @endforeach--}}

                {{--Codigo ejemplo para visualizar el resultado final--}}
                <div class="grid grid-cols-2 gap-2">
                    <div
                        class="block h-auto max-w-full p-6 bg-white border border-gray-200 rounded-lg focus:border-blue-500 hover:border-blue-500 shadow-[0_0px_3px_0_rgba(0,0,0,0.07),0_2px_2px_0_rgba(0,0,0,0.04)] ">
                        <div class="flex items-center justify-end h-5">
                            <input id="helper-radio" aria-describedby="helper-radio-text" type="radio" value=""
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                        </div>
                        <div class="ml-2 text-sm">
                            <label for="helper-radio" class="font-medium text-gray-900">Tiendas, comercio y bienes
                                físicos</label>
                            <p id="helper-radio-text" class="text-xs font-normal text-gray-500">Productos materiales,
                                ropa, reglas, artículos para mascotas, tienda de productos, bicicletas, lencería,
                                droguería, entre otros.</p>
                        </div>
                    </div>
                    <div
                        class="block h-auto max-w-full p-6 bg-white border border-gray-200 rounded-lg focus:border-blue-500 hover:border-blue-500 shadow-[0_0px_3px_0_rgba(0,0,0,0.07),0_2px_2px_0_rgba(0,0,0,0.04)] ">
                        <div class="flex items-center justify-end h-5">
                            <input id="helper-radio" aria-describedby="helper-radio-text" type="radio" value=""
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                        </div>
                        <div class="ml-2 text-sm">
                            <label for="helper-radio" class="font-medium text-gray-900">Tiendas, comercio y bienes
                                físicos</label>
                            <p id="helper-radio-text" class="text-xs font-normal text-gray-500">Productos materiales,
                                ropa, reglas, artículos para mascotas, tienda de productos, bicicletas, lencería,
                                droguería, entre otros.</p>
                        </div>
                    </div>
                    <div
                        class="block h-auto max-w-full p-6 bg-white border border-gray-200 rounded-lg focus:border-blue-500 hover:border-blue-500 shadow-[0_0px_3px_0_rgba(0,0,0,0.07),0_2px_2px_0_rgba(0,0,0,0.04)] ">
                        <div class="flex items-center justify-end h-5">
                            <input id="helper-radio" aria-describedby="helper-radio-text" type="radio" value=""
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                        </div>
                        <div class="ml-2 text-sm">
                            <label for="helper-radio" class="font-medium text-gray-900">Tiendas, comercio y bienes
                                físicos</label>
                            <p id="helper-radio-text" class="text-xs font-normal text-gray-500">Productos materiales,
                                ropa, reglas, artículos para mascotas, tienda de productos, bicicletas, lencería,
                                droguería, entre otros.</p>
                        </div>
                    </div>
                    <div
                        class="block h-auto max-w-full p-6 bg-white border border-gray-200 rounded-lg focus:border-blue-500 hover:border-blue-500 shadow-[0_0px_3px_0_rgba(0,0,0,0.07),0_2px_2px_0_rgba(0,0,0,0.04)] ">
                        <div class="flex items-center justify-end h-5">
                            <input id="helper-radio" aria-describedby="helper-radio-text" type="radio" value=""
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                        </div>
                        <div class="ml-2 text-sm">
                            <label for="helper-radio" class="font-medium text-gray-900">Tiendas, comercio y bienes
                                físicos</label>
                            <p id="helper-radio-text" class="text-xs font-normal text-gray-500">Productos materiales,
                                ropa, reglas, artículos para mascotas, tienda de productos, bicicletas, lencería,
                                droguería, entre otros.</p>
                        </div>
                    </div>
                </div>

            </form>
            <div class="lg:flex my-6 lg:justify-between w-auto space-x-4">
                <button wire:click="before"
                        class="w-[50%] p-2 bg-red-600 text-white hover:bg-red-600 hover:text-red-400 rounded">
                    Anterior
                </button>
                <button wire:click="next()"
                        class="w-[50%] p-2 bg-blue-600 text-white hover:bg-blue-500 hover:text-blue-400 rounded">
                    Siguiente
                </button>
            </div>

        </div>
    </div>
</div>
