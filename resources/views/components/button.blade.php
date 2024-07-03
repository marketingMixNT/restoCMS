@props(['class'=>''])

<button {{$attributes}} class="px-10 py-3 uppercase text-lg bg-black hover:bg-primary-400 duration-500 text-white rounded-md {{$class}}" >{{$slot}}</button>
