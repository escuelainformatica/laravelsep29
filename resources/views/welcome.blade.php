<h1>ejemplo</h1>

<!-- blade -->

<b>{{ $name }}</b>   el valor es parseado<br>
<b>{!! $name !!}</b> el valor no parseado<br>

<!-- @@funcion -->

{{$paises[0]}}<br>

@foreach($paises as $pais)
    {{$pais}}<br>
@endforeach

<hr>
{{$precio}}<br>
{{$precio>500
    ?'el precio es caro'
    :'el precio es economico'}}

@if($precio>500)
    El precio es caro<br>
@else
    El precio es economico<br>
@endif



@dump($paises)

{{$apellido??"No hay un apellido"}}
{{!isset($apellido)?"No hay un apellido":$apellido}}
