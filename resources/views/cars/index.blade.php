

{{__('my.greeting')}}

<table border="1">
    <thead>
    <tr>
        <th>Марка</th>
        <th>Модель</th>
        <th>Год</th>
        <th>Цвет</th>
        <th>Статус</th>
        <th>Описание</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    @foreach($cars as $car)
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
            <td><a href="{{route('cars.show',$car?->id)}}">посмотреть</a></td>
            <td><a href="{{route('cars.edit',$car?->id)}}">редактировать</a></td>

            @if(!$car->trashed())
            <td><a href="{{route('cars.destroy',[$car?->id,'soft_delete'])}}">удалить</a></td>
            @else
            <td><a href="{{route('cars.destroy',[$car?->id,'repair'])}}">восстановить</a></td>
            @endif
            <td><a href="{{route('cars.destroy',[$car?->id,'hard_delete'])}}">удалить полностью</a></td>
        </tr>
    @endforeach
    </tbody>
</table>
@if(session('message'))
    <p>{{ session('message') }}</p>
@endif
<a href="{{route('cars.create')}}">Добавить машину</a>
