$(document).ready(function(){ 
 
})
  

function _(v){
    return document.getElementById(v)
}

function login(){ 
    var uname = _("uname").value;
    var pword = _("pword").value;    
var dataString = 'uname=' + uname + '&pword=' + pword;
    $.ajax({
        type:"post",
        url:"../lib/ff.php?fm=1",
        data: dataString,
        cache:false,
        success: function(html){
        window.location.assign(html)
        }
    })
    return false;
}
