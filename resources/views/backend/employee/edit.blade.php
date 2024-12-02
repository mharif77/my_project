@extends('backend.layouts.app')
@section('css')

@endsection

<!-- Favicon -->
<link rel="shortcut icon" href="favicon.ico">
<link rel="icon" href="favicon.ico" type="image/x-icon">
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="http://www.datatables.net/rss.xml">
<!-- Data table CSS -->
<link href="{{asset('vendors/bower_components/datatables/media/css/jquery.dataTables.min.css')}}" rel="stylesheet"
    type="text/css" />

<!-- Custom CSS -->
<link href="{{asset('dist/css/style.css')}}" rel="stylesheet" type="text/css">
@section('js')
<!-- jQuery -->
<script src="{{asset('vendors/bower_components/jquery/dist/jquery.min.js')}}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{asset('vendors/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>

<!-- Data table JavaScript -->
<script src="{{asset('vendors/bower_components/datatables/media/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('vendors/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('vendors/bower_components/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
<script src="{{asset('vendors/bower_components/jszip/dist/jszip.min.js')}}"></script>
<script src="{{asset('vendors/bower_components/pdfmake/build/pdfmake.min.js')}}"></script>
<script src="{{asset('vendors/bower_components/pdfmake/build/vfs_fonts.js')}}"></script>

<script src="{{asset('vendors/bower_components/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('vendors/bower_components/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('dist/js/export-table-data.js')}}"></script>
<!-- Slimscroll JavaScript -->
<script src="{{asset('dist/js/jquery.slimscroll.js')}}"></script>

<!-- Fancy Dropdown JS -->
<script src="{{asset('dist/js/dropdown-bootstrap-extended.js')}}"></script>
<!-- Init JavaScript -->
<script src="{{asset('dist/js/init.js')}}"></script>
@endsection

@section('content')

<div class="container-fluid">

    <!-- Title -->
    <div class="row heading-bg bg-green">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h5 class="txt-light">Export</h5>
        </div>
        <!-- Breadcrumb -->
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="index.html">Dashboard</a></li>
                <li><a href="#"><span>table</span></a></li>
                <li class="active"><span>Export</span></li>
            </ol>
        </div>
        <!-- /Breadcrumb -->
    </div>
    <!-- /Title -->

    <!-- Row -->
    <div class="row">


        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default card-view">
                <div class="panel-heading">
                    <div class="pull-left">
                        <h6 class="panel-title txt-dark">edit product Form</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper collapse in">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-12 col-xs-12">
                                <div class="form-wrap">
                                    <form class="form-horizontal" method="post"
                                        action="{{route('employee.update', $employee->id)}}">
                                        @csrf
                                        @method ('PUT')
                                        <div class="form-group">
                                            <label for="exampleInputuname_4"
                                                class="col-sm-3 control-label">Name</label>
                                            <div class="col-sm-9">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" name="name"
                                                        value="{{$employee->name}}" id="exampleInputuname_4"
                                                        placeholder="Username">
                                                    <div class="input-group-addon"><i class="icon-user"></i></div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label for="exampleInputuname_4"
                                                class="col-sm-3 control-label">phone</label>
                                            <div class="col-sm-9">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" name="phone"
                                                        value="{{$employee->phone}}" id="exampleInputuname_4"
                                                        placeholder="Username">
                                                    <div class="input-group-addon"><i class="icon-user"></i></div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputuname_4"
                                                class="col-sm-3 control-label">photo</label>
                                            <div class="col-sm-9">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" name="photo"
                                                        value="{{$employee->photo}}" id="exampleInputuname_4"
                                                        placeholder="Username">
                                                    <div class="input-group-addon"><i class="icon-user"></i></div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputuname_4"
                                                class="col-sm-3 control-label">Email</label>
                                            <div class="col-sm-9">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" name="email"
                                                        value="{{$employee->Email}}" id="exampleInputuname_4"
                                                        placeholder="Username">
                                                    <div class="input-group-addon"><i class="icon-user"></i></div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputuname_4"
                                                class="col-sm-3 control-label">password</label>
                                            <div class="col-sm-9">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" name="password"
                                                        value="{{$employee->password}}" id="exampleInputuname_4"
                                                        placeholder="Username">
                                                    <div class="input-group-addon"><i class="icon-user"></i></div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputuname_4"
                                                class="col-sm-3 control-label">address</label>
                                            <div class="col-sm-9">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" name="address"
                                                        value="{{$employee->address}}" id="exampleInputuname_4"
                                                        placeholder="Username">
                                                    <div class="input-group-addon"><i class="icon-user"></i></div>
                                                </div>
                                            </div>
                                        </div>

                                       
                                        

                                        <div class="form-group mb-0">
                                            <div class="col-sm-offset-3 col-sm-9">
                                                <button type="submit" class="btn btn-info ">UPDATE</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Row -->
</div>
@endsection