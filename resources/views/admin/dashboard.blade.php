@extends('layouts.adminApp')
@section('title')Dashboard - {{ config('app.name') }}@endsection


@push('styles')
    {{-- <link href="{{ asset('admin/admin-custom-styles.css') }}" rel="stylesheet"> --}}
@endpush


@section('content')

    <div class="container-fluid">


        <div class="row">

            <div class="col-xl-3 col-md-6">
            	<h4>Hi, This is Admin Dashboard</h4>
            </div>

            <div class="col-xl-3 col-md-6">
            	<a class="text-custom" title="Logout" href="{{ route('logout') }}" onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </div>
    </div>

@endsection


@push('scripts')

    {{-- <script src="{{ asset('admin/admin-custom-js.js') }}"></script> --}}

@endpush