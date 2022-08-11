@push('custom-styles')
    <link rel="stylesheet" href="{{ mix('css/login.css') }}">
@endpush

@extends('layouts.main')
@section('content')
    <div class="login">
        <div class="card shadow">
            <img src="{{ asset('img/store.jpg') }}" class="img" />
            <form method="POST" action="{{ route('auth-action-login') }}">
                <div class="card-body m-0">
                    @include('modules.auth.form')
                </div>
                <div class="card-footer p-0">
                    <button type="submit" class="btn btn-primary w-100">
                        Guardar
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
