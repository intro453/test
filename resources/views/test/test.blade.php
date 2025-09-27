<!DOCTYPE html>
<html>
Hello

//info() - только логи
//dd() - вывод с остановкой
//dump() - вывод без остановки

ссылка {{ route('tasks.task1') }}
echo {{$test}}
echo {!! $test !!} без экранирования

Названия в массивах через _
(gist - хранилище функций github)

// of?????
$result = Str::of($start)->finish('/')->toString();
к названиям контроллеров Controller
Request $request
dd($request->input('address',1));
return redirect()->route('form.show')->with('message', 'Спасибо');
php the right way ()
carbon - класс для работы и времени now();
Carbon now();
Carbon::createFromFormat('d.m.Y H:i','15.09.2025 12:20')
$dt->format('Y H')
todatetimestring
Carbon::parse('15.09.2025 12:20');
$dt->locale('en')->translatedFormat('l');
config.app
$dt->copy()->addDays(7);
lessThanOrEqualTo lte() // сравнение
$dt ->diffInSeconds ($dt,false)
7,9


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



