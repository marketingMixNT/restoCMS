@props(['size','class'=>''])

@php
    
   
    
    $style = match ($size) {
        'h1' => 'text-4xl sm:text-5xl 2xl:text-6xl max:text-7xl uppercase tracking-wider',
        'h2' => 'text-4xl uppercase',
        'h3' => 'text-xl sm:text-2xl uppercase',
        'h4' => 'h4',
        'h5' => 'h5',
        'h6' => 'h6',
    };

    $type = match ($size ) {
        'h1' => 'h1',
        'h2' => 'h2',
        'h3' => 'h3',
        'h4' => 'h4',
        'h5' => 'h5',
        'h6' => 'h6',
       
        
    };
    
@endphp


<{{$type}} class="{{$style}} {{$class}}">{{$slot}}</{{$type}}>