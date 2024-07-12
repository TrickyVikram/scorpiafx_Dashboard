@extends('layouts/contentNavbarLayout')

@section('title', 'Details')

@section('vendor-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/apex-charts/apex-charts.css') }}">
@endsection

@section('vendor-script')
    <script src="{{ asset('assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>
@endsection

@section('page-script')
    <script src="{{ asset('assets/js/dashboards-analytics.js') }}"></script>
@endsection

@section('content')


    @if ($results->count() > 0)
        <ul>
            @foreach ($results as $result)
                <a href="{{ $result->object }}">
                    <p>{{ $result->object }}</p>
                </a>
            @endforeach
        </ul>
    @else
        <p>No results found.</p>
    @endif


@endsection
