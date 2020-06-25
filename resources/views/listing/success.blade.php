@extends('layouts.master')

@section('content')

    <!-- /slider -->

    <div class="single_listing_slider slider">
        @foreach($listing->images as $image)
            <div class="single_listing-box">
                <img src="{{url('')}}/images/listings/l_{{$image->name}}" alt="">
            </div>
        @endforeach
    </div>
    <!-- /slider -->

    <style>

        /* CSS for Credit Card Payment form */
        .credit-card-box .panel-title {
            display: inline;
            font-weight: bold;
        }
        .credit-card-box .form-control.error {
            border-color: red;
            outline: 0;
            box-shadow: inset 0 1px 1px rgba(0,0,0,0.075),0 0 8px rgba(255,0,0,0.6);
        }
        .credit-card-box label.error {
            font-weight: bold;
            color: red;
            padding: 2px 8px;
            margin-top: 2px;
        }
        .credit-card-box .payment-errors {
            font-weight: bold;
            color: red;
            padding: 2px 8px;
            margin-top: 2px;
        }
        .credit-card-box label {
            display: block;
        }
        /* The old "center div vertically" hack */
        .credit-card-box .display-table {
            display: table;
        }
        .credit-card-box .display-tr {
            display: table-row;
        }
        .credit-card-box .display-td {
            display: table-cell;
            vertical-align: middle;
            width: 50%;
        }
        /* Just looks nicer */
        .credit-card-box .panel-heading img {
            min-width: 180px;
        }
    </style>


    <div class="single_listing_contant">
        <div class="container">
            <div class="row">

                <div class="container">
                    <div class="row">

                        @if(session('Success'))
                            <p class="alert alert-success">
                                <strong>Success!</strong> {{session('Success') }}
                            </p>
                        @endif



                        @if(session('Error'))
                            <p class="alert alert-danger">
                                <strong>Danger!</strong>{{ session('Error') }}.
                            </p>
                        @endif
                    </div>


                </div>
            </div>
        </div>


        @endsection

        @section('scripts')
            <script>


            </script>
@endsection