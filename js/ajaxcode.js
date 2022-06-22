$(document).ready(function(){
    $("#reminderbtn").click(function(){
        sendRm();
    });
    $("#unset").click(function(){
        unsetRm();
    });
    $("#adminSendRmBtn").click(function(){
        adminSendRmFn();
    });
    });
    
    
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