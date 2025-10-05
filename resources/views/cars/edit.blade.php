<h3>Редактирование Машина #{{ $car->id }}</h3>

@foreach ($errors->all() as $message)
    {{ $message }}
@endforeach

<form method="post" action="{{ route('cars.update', [$car->id]) }}">
    @csrf
    @method('put')
    <table border="1">
        <thead>
        <tr>
            <th>Марка</th>
            <th>Модель</th>
            <th>Год</th>
            <th>Цвет</th>
            <th>Статус</th>
            <th>Описание</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td><input type="text" value="{{ old('make', $car->make) }}" name="make"></td>
                <td><input type="text" value="{{ old('model', $car->model) }}" name="model"></td>
                <td><input type="text" value="{{ old('year', $car->year) }}" name="year"></td>
                <td><input type="text" value="{{ old('color', $car->color) }}" name="color"></td>
                <td>
                    <select name="is_sold">
                        <option value="1" @if(old('is_sold', $car->is_sold) == 1) selected @endif>Продан</option>
                        <option value="0" @if(old('is_sold', $car->is_sold) == 0) selected @endif>В наличии</option>
                    </select>
                </td>
                <td><textarea name="description">{{ $car->description }}</textarea></td>
            </tr>
        </tbody>
    </table>
    <input type="submit" value="Сохранить">
</form>
<br><br>
@if(session('message'))
    <p>{{ session('message') }}</p>
@endif
<br><br>

<a href="{{route('cars.index')}}">назад</a>
