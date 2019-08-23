function MainListFunction(url)
{
    var searchQuery = window.location.search; 
    url+=searchQuery; 
    var list = AjaxServerGET(url); 
    var html = "";

    list.forEach
    (
        element => 
        {
            html+="<tr>";
            html+="<td>"+ element["name"]+ "</td>"; 
            html+=HtmlAction(element, url); 
            html+="</tr>"; 
        }
    );

    $("#MainList").html(html); 
}

function HtmlAction(element, MainListURL)
{
    GetURL:
    {
        var url = window.location.href; 
        let slashIdex = url.lastIndexOf("Units"); 
        try
        {
            url = url.slice(0,slashIdex) + "Units/"; 
        }
        catch (e)
        {
        }        
    }

    var html = "<td>"; 
    let urlDelete = url+"Delete"; 
    html+='<button type="button" class="btn notika-btn-red waves-effect" value ="'+ urlDelete +'" data-id="'+element['id']+'" data-mainList="'+ MainListURL +'" onclick="Delete(this)">Delete</button>'; 
    html+="</td>";
    return html; 
}

function Delete(button)
{
    var url = button.value; 
    var data =
    {
        id: $(button).attr('data-id')
    }

    var action = $(button).text(); 
    var result = AjaxServerPOST(url, data); 
    if(result===true)
    {
        alert(action+ " Success"); 
        var MainListURL = $(button).attr("data-mainList"); 
        MainListFunction(MainListURL); 
    }
    else 
    {
        alert(action + " Fails"); 
    }

}

function Reset()
{
    $("#ActionForm input, textarea").val('');
    $("#ActionForm input[type='number']").val(0); 
}

function Submit(FormID, button)
{
    var validation = NameValidation(); 
    if(!validation)
    {
        return; 
    }

    var url = $("#"+FormID).attr("action"); 

    var data = new Object(); 
    var input = $("#"+FormID+" input, textarea"); 
    for(var field of input)
    {
        data[field.name] = field.value; 
    }

    var result = AjaxServerPOST(url, data); 
    if(result===true)
    {
        var action = $(button).text(); 
        alert(action+" Item Success");

        if(action=="Add")
        {
            Reset(); 
        }
    }
    else
    {
        alert("There are trouble in executing the action"); 
    }
}

