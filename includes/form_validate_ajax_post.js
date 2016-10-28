/* $(document).ready(function(){
     var sub = document.getElementById("submit");
     sub.onclick = function(){
         console.log("btn click!");
         $.post("includes/up_comment.php",{name:$("#name").val(), email:$("#email").val(), comment:$("#comment").val()},function(data, textStatus){
         alert(data)},"text");
     };
     
});*/
    $(function(){

    var valname = false;
    var valemail = false;
    var valcomment = false;
    
    $('input[name="name"]').focus(function(){
        $(this).next().text("用户名应该为3-20位之间").removeClass("state1").addClass("state2");
        valname = false;
    }).blur(function(){
        console.log("lose point");
        if($(this).val().length >=3 && $(this).val().length <=20 && $(this).val()!=""){
            $(this).next().html("<img src=\"resource/img/check.png\" alt=\"checkicon\"/>").removeClass('state1').addClass('state4');
            valname = true;
        }
        else{
            $(this).next().html("<img src=\"resource/img/times.png\" alt=\"timesicon\"/>").removeClass('state1').addClass('state3');
        }
    });
    $('input[name="email"]').focus(function(){
        $(this).next().text("请按正确的email格式输入").removeClass('state1').addClass('state2');
        valemail = false;
    }).blur(function(){
        if($(this).val().search(/\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/)==-1){
            $(this).next().html("<img src=\"resource/img/times.png\" alt=\"timesicon\"/>").removeClass('state1').addClass('state3');
        }
        else{
            $(this).next().html("<img src=\"resource/img/check.png\" alt=\"checkicon\"/>").removeClass('state1').addClass('state4');
            valemail = true;
        }
    });
     
     $('textarea[name="comment"]').focus(function(){
        $(this).next().text("评论字数必须要5个字以上").removeClass("state1").addClass("state2");
        valcomment = false;
    }).blur(function(){
        if($(this).val().length >5 && $(this).val()!=""){
            $(this).next().html("<img src=\"resource/img/check.png\" alt=\"checkicon\"/>").removeClass('state1').addClass('state4');
            valname = true;
        }
        else{
            $(this).next().html("<img src=\"resource/img/times.png\" alt=\"timesicon\"/>").removeClass('state1').addClass('state3');
        } 
         
     });
     
     $("#submit").click(function(){
         console.log("btn click!");
         if(valemail==true && valname==true){
            console.log("Ajax prepare");
            $.post("includes/up_comment.php",{name:$("#name").val(), email:$("#email").val(), comment:$("#comment").val()},function(data, textStatus){
            alert(data)},"text");
            console.log("Ajax post!");
         }
         else{
             alert("验证未通过，无法提交！");
         }
     });
        
    
        
    });