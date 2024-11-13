<script src="../jquery/jquery-3.7.1.js"></script>
$(document).ready(function () {
    $("button").click(function(){
        for(let i = 0; i < $("input").length; i++)
            if($("input").val()=="")
                $("#" + i).html("Debe rellenar este campo");
       
    });
});