<div class="flex space-x-1 justify-around">
{{--    @if ($tabla==="super")--}}
{{--        @if (Auth::user()->is_admin==2)--}}
{{--            <a href="{{route('conceder', $id)}}" class=" m-2 transition duration-700 ease-in-out bg-white-600 hover:bg-red-600 transform hover:-translate-y-1 hover:scale-110 center">--}}
{{--                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 34 24" stroke="currentColor">--}}
{{--                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 11l7-7 7 7M5 19l7-7 7 7" />--}}
{{--                </svg>--}}
{{--            </a>--}}
{{--        @endif--}}

    <a
        {{--            href="{{ route('editar', ['id'=>$id,'modo'=>1]) }}"--}}

        class="p-1 text-blue-600 hover:bg-blue-600 hover:text-white rounded">
        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
        </svg>
    </a>
    <a
        {{--            href="{{ route('editar', ['id'=>$id,'modo'=>1]) }}"--}}

        class="p-1 text-blue-600 hover:bg-blue-600 hover:text-white rounded">

        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
        </svg>
    </a>
    {{--    @endif--}}
</div>
