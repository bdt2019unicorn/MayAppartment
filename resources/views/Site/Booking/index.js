function AppartmentDiv(element)
{
	var html = 
	`
		<div class="media post_item">
		    <img style="width: 30%; height: 30%;" src="https://images.unsplash.com/photo-1522708323590-d24dbb6b0267?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80">   

		    <div class="media-body">
		        <a href="javascript:AppartmentHref('`+ element['id']+ `');">
		            <h3>`+ element['name'] + `</h3>
		        </a>
		    </div>
		</div>
	`;
	return html; 
}


function AppartmentHref(id)
{
    $("#SearchForm input[name='appartment_id']").val(id); 
    SearchAction(); 
}


function RoomDiv(element)
{
	var html = 
	`

        <div class="col-lg-4 mb-5 mb-lg-0">

            <section class="blog_item_img">
                <br>
                <a href="javascript:RoomHref('`+ element['id']+ `');" class="blog_item">
                    <div>
                        <img class="card-img rounded-0" src="https://images.unsplash.com/photo-1522708323590-d24dbb6b0267?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80" alt="">
                        <h4 style="position: absolute; top: 15%; left: 10%;">`+element['name']+`</h4>
                    </div>
                </a>

            </section>
        </div>
                
	`;
	return html; 
}

function RoomHref(id)
{
    console.log(id); 
}

function SearchQuery()
{
    let search = window.location.search.substring(1); 
    let param = new URLSearchParams(search);
    var query = new Object(); 
    param.forEach 
    (
        (value,key)=>
        {
            query[key] = value; 
        }
    );
    return query; 
}

function SearchFormValues()
{
    var query = SearchQuery(); 
    for(var key of Object.keys(query))
    {
        $('#SearchForm input[name="'+key+'"]').val(query[key]); 
    }
}

function SearchFormActions()
{
	SearchFormValues(); 
	FormInputKeyPressEnter("SearchForm", "SearchButton");
}

function SearchAction()
{
    GetURL:
    {
        var url = window.location.href; 

        let index = url.lastIndexOf('?'); 
        if(index>0)
        {
            url= url.slice(0,index); 
        }
    }
    url+="?";

    AssignQueryValuesURL:
    {
        let input = $("#SearchForm input"); 
        input.each
        (
            function()
            {
                var name = $(this).attr("name"); 
                var value = this.value.trim();
                if(value!="")
                {
                    url+=name+"="+value+"&";
                }
            }
        );
    }
    window.location.href = url; 
}