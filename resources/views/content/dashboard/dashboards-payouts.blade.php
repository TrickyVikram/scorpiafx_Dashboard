@extends('layouts/contentNavbarLayout')

@section('title', 'payouts')

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/apex-charts/apex-charts.css')}}">
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/apex-charts/apexcharts.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('assets/js/dashboards-analytics.js')}}"></script>
@endsection

@section('content')

<div class="row gy-4">

  <div class="col-md-12 col-lg-4">
    <div class="card">
      <div class="card-body">
      <h1>payouts Content</h1>
        </div>
      </div>
    </div>
  </div>



@endsection