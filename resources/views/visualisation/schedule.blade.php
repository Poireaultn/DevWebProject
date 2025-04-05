@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <h2 class="mb-4">Emploi du temps des salles</h2>

    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th style="width: 100px;">Horaire</th>
                    @foreach($rooms as $room)
                    <th>{{ $room->room_name }}</th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                @foreach($timeSlots as $slot)
                <tr>
                    <td class="font-weight-bold">{{ $slot['start'] }} - {{ $slot['end'] }}</td>
                    @foreach($rooms as $room)
                        @php
                            $course = $schedule[$room->room_name][$slot['start']] ?? null;
                        @endphp
                        <td class="{{ $course ? 'bg-primary text-white' : '' }}" style="height: 80px; vertical-align: middle;">
                            @if($course)
                                <div class="text-center">
                                    <strong>{{ $course->subject }}</strong><br>
                                    <small>{{ $course->teacher }}</small>
                                </div>
                            @endif
                        </td>
                    @endforeach
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<style>
.table th {
    text-align: center;
    background-color: #f8f9fa;
}
.table td.bg-primary {
    background-color: #007bff !important;
}
.table td {
    text-align: center;
}
</style>
@endsection 