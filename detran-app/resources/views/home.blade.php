<h1>
    Hello
</h1>
<hr>

{{ date('d/m/y') }}

<hr>

@php

    $lista_fruta = array(
        'abacaxi',
        'Melancia',
        'Maçã',
        'Pera',
        'Banana'
    );

    $valor = 22;

@endphp

@if($valor < 10)
    Valor menor que 10

@elseif($valor > 10)

    Valor maior que 10

@endif

<hr>

@empty($caixa)

    Não tem nada
    
@endempty

<hr>

@foreach ($lista_fruta as $item)

    {{ $item }}
    <br>
    
@endforeach