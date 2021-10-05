function validate()
{
    var username = document.getElementById("name").value;
    var password = document.getElementById("password").value;
    
    if(username == "admin" || password == "user")
    {  
      
        alert("Login Successful")}
       
    else
    {
          alert("Login Failed");
         
        
        
    }
}