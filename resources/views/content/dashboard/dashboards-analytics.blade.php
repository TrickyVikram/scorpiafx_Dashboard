@extends('layouts/contentNavbarLayout')

@section('title', 'Home')

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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .div_1 {
            p top: 46px;

        }

        .text_1 {
            position: relative;
            color: rgb(248, 82, 170);
            margin: 55px;


        }

        .text_2 {

            color: rgb(248, 82, 170);
            margin-left: 44px;
            margin-top: 22px
        }

        h3 {
            margin-bottom: 3px;
            margin-top: 32px;
        }


        .box {

            border: 2px dotted rgb(193, 187, 187);
            border-radius: 10px;
            height: 224px;
            width: 376px;

        }

        .LT {

            margin-left: 384px;
            margin-top: -225px;
        }

        .div_2 p {
            margin-top: 74px;
            margin-left: 109px;
            height: 100px;
        }

        .main_1 {

            position: relative;
            margin-left: 125px;
            margin-top: 133px;

        }

        .active {
            font-family: Arial, Helvetica, sans-serif;
            color: darkgreen;
            margin-left: 261px;

        }

        .deactive {
            font-family: Arial, Helvetica, sans-serif;
            color: rgb(125, 3, 3);
            margin-left: 261px;

        }

        .equity {
            margin-left: 52px;
        }
    </style>


    <div class="">
        <h1 class="text_1">Latest Challenges</h1>
    </div>

    <div class="main_1">




        <!-- Congratulations card -->
        <div class=" div_1  col-md-12 col-lg-4">
            <div class="box">


                <h1 class="text_2">100K Express</h1>

                <div class="equity">
                    <h3>Current Equity</h3>
                    <p>$18,0000.27</p>
                </div>

                @foreach ($user_ips as $ip)
                    @if ($ip['ip'] == $client_ip)
                        <div class="active">Activate  </div>
                    @else
                        <div class="deactive">Dectivate  </div>
                    @endif
                @endforeach

            </div>

        </div>

        <div class="div_2  box LT ">


            <p> <a class="" href="https://www.scorpiafx.com"> <i style="font-size: 65px;" class="fa fa-cart-plus"></i>
                    Buy Challenge
                </a>

            </p>


        </div>


    </div>

    <!--/ Congratulations card -->



    {{-- <div class="row gy-4"> 



     <!-- Transactions -->
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center justify-content-between">
                        <h5 class="card-title m-0 me-2">Transactions</h5>
                        <div class="dropdown">
                            <button class="btn p-0" type="button" id="transactionID" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="mdi mdi-dots-vertical mdi-24px"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="transactionID">
                                <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                                <a class="dropdown-item" href="javascript:void(0);">Share</a>
                                <a class="dropdown-item" href="javascript:void(0);">Update</a>
                            </div>
                        </div>
                    </div>
                    <p class="mt-3"><span class="fw-medium">Total 48.5% growth</span> 😎 this month</p>
                </div>
                <div class="card-body">
                    <div class="row g-3">
                        <div class="col-md-3 col-6">
                            <div class="d-flex align-items-center">
                                <div class="avatar">
                                    <div class="avatar-initial bg-primary rounded shadow">
                                        <i class="mdi mdi-trending-up mdi-24px"></i>
                                    </div>
                                </div>
                                <div class="ms-3">
                                    <div class="small mb-1">Sales</div>
                                    <h5 class="mb-0">245k</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="d-flex align-items-center">
                                <div class="avatar">
                                    <div class="avatar-initial bg-success rounded shadow">
                                        <i class="mdi mdi-account-outline mdi-24px"></i>
                                    </div>
                                </div>
                                <div class="ms-3">
                                    <div class="small mb-1">Customers</div>
                                    <h5 class="mb-0">12.5k</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="d-flex align-items-center">
                                <div class="avatar">
                                    <div class="avatar-initial bg-warning rounded shadow">
                                        <i class="mdi mdi-cellphone-link mdi-24px"></i>
                                    </div>
                                </div>
                                <div class="ms-3">
                                    <div class="small mb-1">Product</div>
                                    <h5 class="mb-0">1.54k</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="d-flex align-items-center">
                                <div class="avatar">
                                    <div class="avatar-initial bg-info rounded shadow">
                                        <i class="mdi mdi-currency-usd mdi-24px"></i>
                                    </div>
                                </div>
                                <div class="ms-3">
                                    <div class="small mb-1">Revenue</div>
                                    <h5 class="mb-0">$88k</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Transactions --> --}}


    <!--/ Data Tables -->
    {{-- </div> --}}





@endsection
