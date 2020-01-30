@extends('layouts.backend.base')
@section('base.content')
    @include('layouts.backend.partials.header')
    @include('layouts.backend.partials.sidebar')
        @yield('master.content')
    @include('layouts.backend.partials.footer')

@endsection
