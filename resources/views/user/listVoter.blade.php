@extends('layouts.master')

@section('title')
    List Voter
@endsection

@section('middle-content')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                @if (count($errors) > 0)
                    <div class="alert alert-danger alert-dismissable">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if(Session::has('message'))
                    <div class="row">
                        <div class="col-md-12">
                            <div class="alert alert-success alert-dismissable">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                <strong>{{session('message')}}</strong>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
        <div class="">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>All Voter
                            </h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                       aria-expanded="false"><i class="fa fa-wrench"></i></a>

                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>Profile Picture</th>
                                    <th>Name</th>
                                    <th>Date of Birth</th>
                                    <th>National ID</th>
                                    <th>Gender</th>
                                    <th>Address</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($voters as $voter)
                                    <tr>
                                        <th scope="row"><img height="60px" width="60px" src="{{url(asset($voter->pic_location))}}" alt=""></th>
                                        <td>{{$voter->name}}</td>
                                        <td>{{$voter->date_of_birth}}</td>
                                        <td>{{$voter->national_id}}</td>
                                        <td>{{$voter->gender}}</td>
                                        <td>{{$voter->address}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /page content -->
@endsection
@section('extra-script')
    <!-- bootstrap-daterangepicker -->
    <script>
        $(document).ready(function () {
            $('#birthday').daterangepicker({
                singleDatePicker: true,
                calender_style: "picker_4"
            }, function (start, end, label) {
                console.log(start.toISOString(), end.toISOString(), label);
            });
        });
    </script>
    <!-- /bootstrap-daterangepicker -->
@endsection