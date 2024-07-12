@extends('layouts/contentNavbarLayout')

@section('title', 'Challenge')

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

    <div>

        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">Challenge</h4>

            </div>

        </div>
    </div>
@endsection
