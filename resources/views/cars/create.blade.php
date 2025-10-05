<h1>Добавить машину</h1>

@foreach ($errors->all() as $message)
    {{ $message }}
@endforeach

<form action="{{route('cars.store')}}" method="POST">
    Марка <input type="text" name="make" value="{{ old('make','Toyota') }}"><br>
    Модель <input type="text" name="model" value="{{ old('model') }}"><br>
    Год <input type="text" name="year" value="{{ old('year') }}"><br>
    <input type="submit" value="Добавить">
    @csrf
</form>


<a href="{{route('cars.index')}}">назад</a>
