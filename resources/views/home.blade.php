@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <dashboard-menu></dashboard-menu>
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ $title }}</div>
                <div class="card-body">
                    <{{ $component }}></{{ $component }}/>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
