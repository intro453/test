<!DOCTYPE html>
<html>
Hello

//info() - только логи
//dd() - вывод с остановкой
//dump() - вывод без остановки

ссылка {{ route('tasks.task1') }}
echo {{$test}}
echo {!! $test !!} без экранирования

@if(1==2)
    1
@else
    2
@endif

@foreach($prducts as $product)
    @if($product['price']) @endif
@endforeach

@foreach($prducts as $index=>$product)
    @if($product['price']) @endif
@endforeach

@php
    $test=123;
@endphp

@for ($i = 0; $i < 5; $i++)
    <li>Элемент № {{ $i }}</li>
@endfor

</html>



