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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .box {

            border: 2px dotted rgb(193, 187, 187);
            border-radius: 10px;
            height: 100px;
            width: 252px;

        }

        .main_1 {

            margin-left: 65px;
            margin-top: 133px;
            display: flex
        }

        .h1 {
            color: rgb(248, 82, 170);
        }

        .span1 {

            color: aliceblue;
            margin-left: 61px;
            margin-top: 10px;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-size: 25px;
        }

        .span2 {
            color: aqua;

            margin-top: 10px;
            margin-left: 87px;
        }

        .hr1 {
            height: 10px;
            background: #767070;
        }

        .btn_credentials {
            text-decoration: none;

            width: auto;
            height: auto;
            background-image: linear-gradient(158deg, #281F30 0%, #383838 97%);
            margin-left: 740px;
            margin-top: -81px;
        }

        .latest_movements_confirmed {
            text-align: center;
            width: 159px;
            color: rgb(42, 230, 183);
            border: 2px solid rgb(42, 230, 183);
            ;
            border-radius: 10px;

        }

        .latest_movements_field {
            text-align: center;
            width: 159px;
            color: rgb(252, 35, 15);
            border: 2px solid rgb(42, 230, 183);
            ;
            border-radius: 10px;

        }

        .mt1 {
            margin-left: 14px;
            margin-top: 45px;
        }

        .mtl {
            margin-top: 20px;
        }

        .icon_h {
            height: 48px;
        }
    </style>

    <div class="">
        <h1 class="h1">Challenge Add-ons</h1>
    </div>


    <div class="main_1">




        <!-- Congratulations card -->
        <div class=" div_1   col-lg-4">
            <div class="box">
                <div class="mtl">
                    <span class="span1"> Al Analytics </span>
                    <span class="span2">Included <i class="fa fa-check-circle" aria-hidden="true"></i> </span>

                </div>

            </div>

        </div>
        <div class=" div_1   col-lg-4">
            <div class="box">

                <div class="mtl"> <span class="span1"> EA Allowed </span>
                    <span class="span2">Included <i class="fa fa-check-circle" aria-hidden="true"></i> </span>
                </div>


            </div>

        </div>
        <div class=" div_1  col-lg-4">
            <div class="box">

                <div class="mtl">
                    <span class="span1"> Overnight Allowed </span>
                    <span class="span2">Included <i class="fa fa-check-circle" aria-hidden="true"></i> </span>

                </div>


            </div>

        </div>



    </div>
    <br>
    <hr>


    <div class="mt1">
        <h1>Trading Account</h1>
        <p> My trading account details</p>
        <button class=" btn btn_credentials" id="see-credentials-btn"> <span style="color: rgb(255, 255, 255)"> See
                credentials</span> </button>
    </div>
    <hr>
    <div class="mt1">

        <h1>Latest Movements</h1>
        <br>
        <div style="display: flex">
            <p class="latest_movements_confirmed"> CONFIRMED</p>
            <span style="margin-left: 5px;"> 13 Mar 2024 | US $1408.26 to your account</span>
        </div>

        <div style="display: flex">
            <p class="latest_movements_field"> Failed</p>
            <span style="margin-left: 5px;"> 14 Mar 2024 | US $1608.26 to your account</span>
        </div>


    </div>

    {{-- *************** --}}

    <div>



        <!-- Modal HTML structure -->
        <div class="modal fade" id="credentials-modal" tabindex="-1" role="dialog"
            aria-labelledby="credentials-modal-title" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="credentials-modal-title">We need to confirm your identity to show you
                            the trading account credentials</h5>

                    </div>
                    <div class="modal-body">
                        <form action="">

                            <div class="input-group mb-2 ">

                                <div class="input-group-append  ">
                                    <span class="input-group-text   icon_h  "><i class="fa fa-user"
                                            aria-hidden="true"></i></span>
                                </div>

                                <input type="text" name="" class="form-control input_pass" value=""
                                    placeholder="username">
                            </div>

                            <div class="input-group mb-2   ">

                                <div class="input-group-append  ">
                                    <span class="input-group-text  icon_h  "><i class="fa fa-lock"
                                            aria-hidden="true"></i></span>

                                </div>

                                <input type="password" name="" class="form-control input_pass" value=""
                                    placeholder="password">
                            </div>



                            <div class="modal-footer">

                                <button type="button" class="btn btn-secondary" id="see-credentials-modal-btn"
                                    data-dismiss="modal"> <span aria-hidden="true">Close</span> </button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">See
                                    credentials</button>


                            </div>



                        </form>
                    </div>


                </div>
            </div>
        </div>




        <script>
            // JavaScript to handle button click event and show the modal
            document.addEventListener('DOMContentLoaded', function() {
                const seeCredentialsBtn = document.getElementById('see-credentials-btn');
                const credentialsModal = document.getElementById('credentials-modal');

                seeCredentialsBtn.addEventListener('click', function() {
                    $('#credentials-modal').modal('show');
                });

                // Add event listener to the "See credentials" button inside the modal body
                const seeCredentialsModalBtn = document.getElementById('see-credentials-modal-btn');
                seeCredentialsModalBtn.addEventListener('click', function() {
                    $('#credentials-modal').modal('hide'); // Hide the modal
                });
            });
        </script>





    </div>


@endsection
