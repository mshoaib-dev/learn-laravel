@props(["urlCheck" => false, "type" =>"a"])
{{--this code is true even if above line is comment out as that will be treated as attributes instead of prop--}}
@if($type == "a")
    <a class= "{{$urlCheck ? 'bg-gray-900 text-white': 'text-gray-300 hover:bg-gray-700 hover:text-white'}} rounded-md px-3 py-2 text-sm font-medium text-white"
       {{--above code checking validity for current page   --}}

       {{--have to use the keyword explicitly to access the attributes being set, that's enabling active prop to be set as attribute--}}
       {{$attributes}}
       aria-current="{{$urlCheck ? 'page': 'false'}}">{{$slot}}</a>
@else
    <button class= "{{$urlCheck ? 'bg-gray-900 text-white': 'text-gray-300 hover:bg-gray-700 hover:text-white'}} rounded-md px-3 py-2 text-sm font-medium text-white"
       {{$attributes}}
       aria-current="{{$urlCheck ? 'page': 'false'}}">{{$slot}}</button>
@endif
