<div class="block px-4 py-2 text-xs text-gray-400">{{ __('Funciones de administrador') }}</div>
{{--<x-jet-dropdown-link href="{{ route('register')}}">--}}
{{--            {{ __('Nuevo usuario') }}--}}
{{--</x-jet-dropdown-link>--}}
{{--<x-jet-dropdown-link href="{{ route('subirarchivos')}}">--}}
{{--            {{ __('Subir archivos') }}--}}
{{--</x-jet-dropdown-link>--}}
{{--<div class="block px-4 py-2 text-xs text-gray-400">{{ __('Modificación') }}</div>--}}
{{--<x-jet-dropdown-link href="{{ route('edicion_emproy')}}">--}}
{{--            {{ __('Edición') }}--}}
{{--</x-jet-dropdown-link>--}}
<div class="block px-4 py-2 text-xs text-gray-400">{{ __('Base de Datos') }}</div>
<x-jet-dropdown-link href="{{ route('export2')}}">
            {{ __('Descargar BD') }}
</x-jet-dropdown-link>
