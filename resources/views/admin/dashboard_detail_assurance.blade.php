@extends('admin.master', ['title' => 'Detail Assurance'])
@section('content')
    <div class="col-md-12">
        @livewire('dashboard-detail-assurance', ['id' => $id])
    </div>
@stop