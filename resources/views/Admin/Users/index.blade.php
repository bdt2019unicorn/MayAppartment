@extends('Layout/admin')

@section("contents")
<div class="body">
    <div class="breadcomb-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcomb-list">

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="breadcomb-wp">
                                    <div class="breadcomb-icon">
                                        <i class="notika-icon notika-house"></i>
                                    </div>
                                    <div class="breadcomb-ctn">
                                        <h2>Registed Users</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
                                <div class="breadcomb-report">
                                <button class="btn notika-btn-blue waves-effect" onclick="Add()">
                                    <i class="notika-icon notika-sent"></i>
                                      Add 
                                </button>
                                </div>
                            </div>
                        </div>

                        <div class="form-example-wrap mg-t-30">
                            <div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-example-int form-example-st">
                                        <div class="form-group">
                                            <div class="nk-int-st">
                                                <input type="text" id="search_name" name="name" class="form-control input-sm" placeholder="Name">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-example-int">
                                        <button class="btn btn-success notika-btn-success waves-effect">Search</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="visitor-sv-tm-area">
        <div class="container">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="normal-table-list mg-t-30">
                    <br>
                    <div class="bsc-tbl-hvr">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Phone number</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="MainList">
                                <tr>
                                    
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include("Admin/Users/add_edit")
</div>


<script src="<?php echo url('resources/views/Admin/Users');?>/index.js"></script>
<script>
    jQuery
    (
        function()
        {
            var url = "<?php echo url('Admin/Users/GetList'); ?>"; 
            MainListFunction(url); 
        }
    );
</script>

@endsection