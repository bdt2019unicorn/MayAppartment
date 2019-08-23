function AjaxServerPOST(url, data)
{
    var ajax = new Object(); 
    $.ajax
    (
        {
            url: url,
            data: data, 
            dataType: "text",
            method: "get",
            async: false,
            success: function(result)
            {
                try
                {
                    ajax = JSON.parse(result); 
                }
                catch
                {
                    ajax = result; 
                }
            },
            error: function(error)
            {
                ajax = error; 
            }
        }
    ); 
    return ajax; 
}

function AjaxServerGET(url)
{
    var ajax = new Object(); 
    $.ajax
    (
        {
            url: url,
            method: "get",
            async: false,
            success: function(result)
            {
                try
                {
                    ajax = JSON.parse(result); 
                }
                catch
                {
                    ajax = result; 
                }
            },
            error: function(error)
            {
                ajax = error; 
            }
        }
    ); 
    return ajax; 
}

function StopEnterKey(event)
{
    var tag = event.target.tagName; 
    if(tag=="INPUT" && event.keyCode==13)
    {
        return false;
    }
}

function FormInputKeyPressEnter(formID, submitButtonID)
{
    document.onkeypress = StopEnterKey; 
    var input = $("#"+formID+" input"); 
    input.each 
    (
        function()
        {
            this.addEventListener
            (
                "keypress",
                function(event)
                {
                    if(event.keyCode===13)
                    {
                        event.preventDefault();
                        document.getElementById(submitButtonID).click(); 
                    }
                }
            );
        }
    );
}