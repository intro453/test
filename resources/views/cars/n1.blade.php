@foreach($cars as $car)
    <p>{{$car->make}},{{$car->user?->name}},{{$car->user?->company?->name}},</p>
@endforeach
