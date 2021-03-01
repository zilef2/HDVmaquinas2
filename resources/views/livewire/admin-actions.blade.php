<div class="flex space-x-1 justify-around">
    @if ($tabla==="HDV_Down")
{{--        @if (Auth::user()->is_admin==2)--}}
{{--            <a href="{{route('conceder', $id)}}" class=" m-2 transition duration-700 ease-in-out bg-white-600 hover:bg-red-600 transform hover:-translate-y-1 hover:scale-110 center">--}}
{{--                <svg class="w-8 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 34 24" stroke="currentColor">--}}
{{--                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 11l7-7 7 7M5 19l7-7 7 7" />--}}
{{--                </svg>--}}
{{--            </a>--}}
{{--        @endif--}}

    <div x-data="{ tooltip: false }" class="relative z-30 inline-flex">
        <a x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false"
                        href="{{ route('informeHDV', ['id_a'=>$id]) }}"
            class="p-1 text-blue-600 hover:bg-blue-600 hover:text-white rounded">
            <svg class="w-8 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
            </svg>
        </a>
        <div class="relative" x-cloak x-show.transition.origin.top="tooltip">
            <div class="absolute top-0 z-15 w-32 p-5 -mt-1 text-sm leading-tight text-white transform -translate-x-1/2 -translate-y-full bg-yellow-500 rounded-lg shadow-lg">
                Ver hoja de vida
            </div>
            <svg class="absolute z-10 w-6 h-6 text-orange-500 transform -translate-x-8 -translate-y-3 fill-current stroke-current" width="8" height="8">
                <rect x="12" y="-10" width="8" height="8" transform="rotate(45)" />
            </svg>
        </div>
    </div>

    <div x-data="{ tooltip: false }" class="relative z-30 inline-flex">
        <a x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false"
                href="{{route('descargarequipo',['id'=>$id])}}"
                class="p-1 text-blue-600 hover:bg-blue-600 hover:text-white rounded">
                <svg class="w-8 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                </svg>
        </a>
        <div class="relative" x-cloak x-show.transition.origin.top="tooltip">
            <div class="absolute top-0 z-15 w-32 p-5 -mt-1 text-sm leading-tight text-white transform -translate-x-1/2 -translate-y-full bg-yellow-500 rounded-lg shadow-lg">
                Descargar hoja de vida
            </div>
            <svg class="absolute z-10 w-6 h-6 text-orange-500 transform -translate-x-8 -translate-y-3 fill-current stroke-current" width="8" height="8">
                <rect x="12" y="-10" width="8" height="8" transform="rotate(45)" />
            </svg>
        </div>
    </div>




{{--    <a href="{{ route('editar_acta', [$id,1]) }}" class="p-1 text-blue-600 hover:bg-blue-600 hover:text-white rounded">--}}

    <script>
        {{--alertify.confirm('Equipos próximos', 'Los siguientes equipos estan por vencerce <br>' +--}}
        {{--    '{{ config('app.name', 'Laravel') }}',--}}
        {{--    function(){--}}
        {{--        alertify.success('Ok')--}}
        {{--    },--}}
        {{--    function(){--}}
        {{--        alertify.error('Cancel')--}}
        {{--    });--}}

    </script>
    @endif

    @if ($tabla==="programa_registrar")

            <div x-data="{ tooltip: false }" class="relative z-30 inline-flex">
                <a x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false"
                   class="p-1 text-blue-600 hover:bg-blue-600 hover:text-white rounded">
                    <svg class="w-8 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </a>
                <div class="relative" x-cloak x-show.transition.origin.top="tooltip">
                    <div class="absolute top-0 z-15 w-32 p-5 -mt-1 text-sm leading-tight text-white transform -translate-x-1/2 -translate-y-full bg-yellow-500 rounded-lg shadow-lg">
                        Programar mantenimiento
                    </div>
                </div>
            </div>

            <div x-data="{ tooltip: false }" class="relative z-30 inline-flex">
                <a x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false"
                   class="p-1 text-blue-600 hover:bg-blue-600 hover:text-white rounded">
                    <svg class="h-8 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                    </svg>
                </a>
                <div class="relative" x-cloak x-show.transition.origin.top="tooltip">
                    <div class="absolute top-0 z-15 w-32 p-5 -mt-1 -ml-14 text-sm leading-tight text-white transform -translate-x-1/2 -translate-y-full bg-yellow-500 rounded-lg shadow-lg">
                        Ver Historico de mantenimientos
                    </div>
                </div>
            </div>

    @endif


</div>
