function checkPassword(){
    if(document.getElementById("Fname").value == false)
    {
        alert("Enter the Name!");
    }
    else{
        if (document.getElementById("club-pass").value == false)
         {
               alert("enter the password !");
           }
        else{

                if(document.getElementById("club-pass").value.length < 8 ) {
                alert ("Your password is too weak...!");
            }
                else if (document.getElementById("club-pass").value != document.getElementById("club-pass-conf").value) {
                    alert ("confirm password is not match !");
                }

              
        }
        }
    }
