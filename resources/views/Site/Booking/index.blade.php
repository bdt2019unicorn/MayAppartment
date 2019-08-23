@extends('Layout/site')

@section("contents")

<div class="content">
    <div class="row">

        <div class="col-lg-1">
        </div>

        <div class="col-lg-7">

            <div id="RoomsList" class="row">

                <div class="col-lg-4 mb-5 mb-lg-0">

                    <section class="blog_item_img">
                        <br>
                        <a href="#" class="blog_item">
                            <div>
                                <img class="card-img rounded-0" src="https://images.unsplash.com/photo-1522708323590-d24dbb6b0267?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80" alt="">
                                <h4 style="position: absolute; top: 15%; left: 10%;">Room name</h4>
                            </div>
                        </a>

                    </section>
                </div>

            </div>

            <div class="row">

                <nav class="col-lg-12 blog-pagination justify-content-center d-flex">
                    <ul class="pagination">

                        <li class="page-item">
                            <a href="#" class="page-link" aria-label="Previous">
                                <i class="ti-angle-left"></i>
                            </a>
                        </li>

                        <li class="page-item">
                            <a href="#" class="page-link" aria-label="Next">
                                <i class="ti-angle-right"></i>
                            </a>
                        </li>

                    </ul>
                </nav>

            </div>

        </div>

        <div class="col-lg-4">
            <div class="blog_right_sidebar">

                <aside class="single_sidebar_widget search_widget">
                    <form id="SearchForm" action="#">

                        <div class="form-group">
                            <div class="input-group mb-3">
                                <input type="hidden" name="appartment_id">
                                <input type="text" name="name" class="form-control">

                                <div class="input-group-append">
                                    <button class="btn" type="button" onclick="SearchAction()"><i class="ti-search"></i></button>
                                </div>
                            </div>
                        </div>

                        <button id="SearchButton" class="button rounded-0 primary-bg text-white w-100" type="button" onclick="SearchAction()">Search</button>

                    </form>
                </aside>

                <aside class="single_sidebar_widget popular_post_widget">
                    <a href="javascript:AppartmentHref('');">
                        <h3 class="widget_title">Appartments</h3>
                    </a>
                    <div id="AppartmentsList">
                        <div class="media post_item">
                                <img style="width: 30%; height: 30%;" src="https://images.unsplash.com/photo-1522708323590-d24dbb6b0267?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80">   

                                <div class="media-body">
                                    <a href="#">
                                        <h3>Appartment 1</h3>
                                    </a>
                                </div>
                        </div>

                    </div>  
                </aside>

            </div>
        </div>

    </div>
</div>


<script src="<?php echo url('resources/views/Site/Booking');?>/index.js"></script>
<script type="text/javascript">
    jQuery
    (
        function()
        {
            RoomsListFunction();
            AppartmentsListFunction(); 
            SearchFormActions(); 
        }
    );

    function RoomsListFunction()
    {
        var url = "<?php echo url('/Booking/RoomsList');?>";
        var data = SearchQuery(); 
        var list = AjaxServerPOST(url, data); 
        var html = ""; 

        list.forEach
        (
            element=>
            {
                html+=RoomDiv(element); 
            }
        );
        $("#RoomsList").html(html); 

    }

    function AppartmentsListFunction()
    {
        var url = "<?php echo url('/Booking/AppartmentsList');?>";
        var list = AjaxServerGET(url); 
        var html=""; 
        list.forEach 
        (
            element=>
            {
                html+= AppartmentDiv(element); 
            }
        );

        $("#AppartmentsList").html(html); 
    }


</script>
@endsection