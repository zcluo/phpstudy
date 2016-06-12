/**
 * Created by zcluo on 2016/6/12.
 */
$(document).ready(function(){
    $("#users").on("change",function () {
        var value = $(this).val();
        var url="http://localhost:63342/www/getuser.php";
        url=url+"?q="+value;
        url=url+"&sid="+Math.random();
        $.ajax(url,{
            dataType:'html',
            //data:para,
            //jsonpCallback: 'JsonpCallback',
            contentType: 'application/text;charset=UTF-8',
            success:function (data) {
                console.log(data);
                $("#txtHint").html(data);


            }
        });

    })

});