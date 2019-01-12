function checkField() {
        var name=document.getElementById("name").value;
        var email=document.getElementById("email").value;
        var number=document.getElementById("number").value;
        var msg=document.getElementById("msg").value;

     if(name==""|| email==""|| number=="" || msg=="")
    {
        document.getElementById("alertBox").style.display="block";
    }
        
    
    }