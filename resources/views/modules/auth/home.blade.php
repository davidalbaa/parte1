@push('custom-styles')
    <style>
        .img {
            height: 300px;
        }

        .card {
            width: 50%;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
@endpush
@extends('layouts.main')
@section('content')
    <div class="d-flex">
        <div class="card shadow">
            <div class="card-header text-center">
                {{ config('app.name') }}
            </div>
            <img src="{{ asset('img/store.jpg') }}" class="img mx-auto" />
        </div>
    </div>
@endsection
