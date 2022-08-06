$(document).ready(function(){
    $("#reminderbtn").click(function(){
        sendRm();
    });
    $("#unset").click(function(){
        unsetRm();
    });
    $("#clearhistorybtn").click(function(){
        clearhistoryfunction();
    });
    $("#adminSendRmBtn").click(function(){
        adminSendRmFn();
    });
    $("#unsetepi").click(function(){
        unsetepi();
    });
    
    });
    
    function clearhistoryfunction(){
        var method = 'clearhistoryfunc';
        var data = "Method=" + method;
    
    
        $.ajax({
            cache:false,
            url:"reminder_func.php",
            type:"post",
            data: data,
            success: function(phpresponse){
                alert(phpresponse);
            }
    
        });
    }

    function sendRm(){
        var method = 'getReminderBtn';
        var data = "Method=" + method;
    
    
        $.ajax({
            cache:false,
            url:"reminder_func.php",
            type:"post",
            data: data,
            success: function(phpresponse){
                alert(phpresponse);
            }
    
        });
    }
    
    
    function unsetRm(){
        var method = 'clearBtn';
        var data = "Method=" + method;
    
    
        $.ajax({
            cache:false,
            url:"reminder_func.php",
            type:"post",
            data: data,
            success: function(phpresponse){
                alert(phpresponse);
            }
    
        });
    }
    function adminSendRmFn(){
        var method = 'sendEmailReminder';
        var data = "Method=" + method;
    
    
        $.ajax({
            cache:false,
            url:"admin_send_reminder_code.php",
            type:"post",
            data: data,
            success: function(phpresponse){
                alert(phpresponse);
            }
    
        });
    }


    function unsetepi(){
        var method = 'unsetepisession';
        var data = "Method=" + method;
    
    
        $.ajax({
            cache:false,
            url:"epiFunc.php",
            type:"post",
            data: data,
            success: function(phpresponse){
                alert(phpresponse);
            }
    
        });
    }

