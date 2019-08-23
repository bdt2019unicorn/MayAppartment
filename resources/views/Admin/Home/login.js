jQuery
(
    function()
    {
        $("#LoginForm").validate
        (
            {
                rules: 
                {
                    username:
                    {
                        required: true
                    },
                    password:
                    {
                        required: true
                    }
                }
            }
        ); 
    }
); 