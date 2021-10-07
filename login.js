function validate()
{
    var username = document.getElementById("name").value;
    var password = document.getElementById("password").value;
    
    if(username == "admin" || password == "user")
    {  
      
        
        window.location.replace("form-save.txt");
}
       
    else
    {
          alert("Login Failed");
         
        
        
    }
}