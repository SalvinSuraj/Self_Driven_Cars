function validate()
{
    var username = document.getElementById("name").value;
    var password = document.getElementById("password").value;
    
    if(username == "admin" || password == "user")
    {  
      
        cy.window.location="http://sidanmor.com";}
       
    else
    {
        //  alert("Login Failed");
         
        
        
    }
}