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
            <td>{{ $car->make }}</td>
            <td>{{ $car->model }}</td>
            <td>{{ $car->year }}</td>
            <td>{{ $car->color }}</td>
            <td>
                @if($car->is_sold)
                    <span class="text-danger">Продан</span>
                @else
                    <span class="text-success">В наличии</span>
                @endif
            </td>
            <td>{{ $car->description }}</td>
        </tr>

    </tbody>
</table>
<br><br>
@if(session('message'))
    <p>{{ session('message') }}</p>
@endif
<br><br>

<a href="{{route('cars.index')}}">назад</a>
