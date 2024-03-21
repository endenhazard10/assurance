@extends('admin.master', ['title' => 'Detail apporter'])
@section('content')
    <div class="col-md-12">
        @livewire('dashboard-detail', ['id' => $id,'mois' => $mois,'years' => $years])
    </div>
@stop
