@extends('layouts.backend.base')
@section('base.content')
    @include('layouts.backend.partials.header')
    @include('layouts.backend.partials.sidebar')
    <div class="content-wrapper">
    @yield('master.content')
    </div>
    @include('layouts.backend.partials.footer')

@endsection
