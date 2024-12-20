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
                        <h6 class="panel-title txt-dark">edit purchase Form</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper collapse in">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-12 col-xs-12">
                                <div class="form-wrap">
                                    <form class="form-horizontal" method="post"
                                        action="{{route('purchase.update', $purchase->id)}}">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group">
                                            <label for="exampleInputuname_4" class="col-sm-3 control-label">item_name</label>
                                            <div class="col-sm-9">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" name="item_name"
                                                        id="exampleInputuname_4" value="{{$purchase->item_name}}"
                                                        placeholder="Enter your item name">
                                                    <div class="input-group-addon"><i class="icon-user"></i></div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label for="exampleInputuname_4"
                                                class="col-sm-3 control-label">Quantity</label>
                                            <div class="col-sm-9">
                                                <div class="input-group">
                                                    <input type="text" value="{{$purchase->quantity}}"
                                                        class="form-control" name="quantity" id="exampleInputuname_4"
                                                        placeholder="Enter your Quantity">
                                                    <div class="input-group-addon"><i class="icon-user"></i></div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputuname_4"
                                                class="col-sm-3 control-label">purchase price</label>
                                            <div class="col-sm-9">
                                                <div class="input-group">
                                                    <input type="text" value="{{$purchase->purchase_price}}"
                                                        class="form-control" name="purchase_price"
                                                        id="exampleInputuname_4" placeholder="Enter your purchase price">
                                                    <div class="input-group-addon"><i class="icon-user"></i></div>
                                                </div>
                                            </div>
                                        </div>

                                        

                                        <div class="form-group">
                                            <label for="exampleInputuname_4"
                                                class="col-sm-3 control-label">purchase_date</label>
                                            <div class="col-sm-9">
                                                <div class="input-group">
                                                    <input type="text" value="{{$purchase->purchase_date}}" class="form-control"
                                                        name="price" id="exampleInputuname_4" placeholder="Enter your  purchase date">
                                                    <div class="input-group-addon"><i class="icon-user"></i></div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label for="exampleInputuname_4"
                                                class="col-sm-3 control-label">supplier_name</label>
                                            <div class="col-sm-9">
                                                <div class="input-group">
                                                    <input type="text" value="{{$purchase->supplier_name}}"
                                                        class="form-control" name="supplier_name"
                                                        id="exampleInputuname_4" placeholder="Enter your supplier name">
                                                    <div class="input-group-addon"><i class="icon-user"></i></div>
                                                </div>
                                            </div>
                                        </div>


                                       


                                        <div class="form-group">
                                            <label for="exampleInputuname_4"
                                                class="col-sm-3 control-label">Category</label>
                                            <div class="col-sm-9">
                                                <select name="category_id" id="" class="form-control">
                                                    <option value="">Select one</option>
                                                    @foreach($categories as $category)	
                                                        <option value="{{$category->id}}"
                                                            @selected(old('category_id') == $category->id)>
                                                            {{$category->name}}
                                                        </option>

                                                        <option value="{{$category->id}}" @selected(old('category_id') ?? $purchase->category_id == $category->id)>
                                                            {{$purchase->category->name}}
                                                        </option>
                                                    @endforeach

                                                </select>
                                                @error('category_id')
                                                    <div class="alert alert-danger">{{$message}}</div>
                                                @enderror
                                            </div>




                                            <div class="form-group mb-0">
                                                <div class="col-sm-offset-3 col-sm-9">
                                                    <button type="submit" class="btn btn-info ">Update</button>
                                                    <button type="reset" class="btn btn-info ">cancel</button>
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