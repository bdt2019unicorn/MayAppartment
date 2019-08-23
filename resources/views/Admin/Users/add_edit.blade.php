<style type="text/css">
            #AddEditDiv
            {
                width: 100%;
                height: 100%;
                opacity: .95;
                top: 0;
                left: 0;
                display: none;
                position: fixed;
                background-color: #313131;
                overflow: auto
            }

            div#AddEditForm 
            {
                position:absolute;
                width: 40%;
                top:40%;
                left: 30%;
                background-color: white; 
            }
</style>

<div id="AddEditDiv">
    <div id="AddEditForm" class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="header">
                    <h2 id="ActionTitle">
                        Action
                    </h2>
                </div>
                <div class="body">
                    <form id="ActionForm" method="post">

                        <label for="ID" class="hidden">ID</label>
                        <div class="form-group hidden">
                            <div class="form-line">
                                <input type="text" id="ID" name="ID" class="form-control" placeholder="ID" readonly="readonly">
                            </div>
                        </div>	

                        <label for="name">Name</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" id="name" name="name" class="form-control" placeholder="Campaign Name" onchange="NameValidation()">
								<p style="color:red; display: block;" id="name_require">Please enter unit name</p>
                                <p style="color:red; display: none;" id="name_unique">This name is existed in the system</p>
                            </div>
                        </div>

						<button type="button" id="btnAction" class="btn btn-primary m-t-15 waves-effect" onclick="Submit('ActionForm', this)">Add/Edit</button>
						<button type="button" class="btn m-t-15 bg-grey waves-effect" onclick="Cancel()">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function Add()
    {
        $("#AddEditDiv").css("display","block"); 
        $("#ActionTitle").text("Add New Item"); 
        $("#ActionForm").attr("action","<?php echo url('Admin/Users/Add'); ?>"); 
        $("#btnAction").text("Add"); 
    }

    function Edit(button)
    {
        $("#AddEditDiv").css("display","block"); 
        $("#ActionTitle").text("Edit Item Information"); 
        $("#ActionForm").attr("action","<?php echo url('Admin/Users/Edit'); ?>"); 
        $("#btnAction").text("Edit"); 
    }

    function Cancel()
    {
        Reset(); 

        var url = "<?php echo url('Admin/Users/GetList'); ?>"; 
        MainListFunction(url); 

        $("#AddEditDiv").css("display","none"); 
    }


    function NameValidation()
    {
        var check = true; 
        var url = "<?php echo url('Admin/Users/GetList'); ?>"; 
        var name = $("#name").val().trim(); 
        if(name!="")
        {
            $("#name_require").css("display","none"); 
        }
        else 
        {
            $("#name_require").css("display","block");
            return false; 
        }
        url+="?name="+name+"&"; 
        var list = AjaxServerGET(url); 
        if(list.length==0)
        {
            $("#name_unique").css("display","none"); 
        }
        else 
        {
            $("#name_unique").css("display","block"); 
            check = false; 
        }
        return check; 
    }
</script>
