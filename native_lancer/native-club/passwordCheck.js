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
        else {
                if (document.getElementById("club-pass").value != document.getElementById("club-pass-conf").value) {
                    nValid();
                    alert ("confirm password is not match !");
                }          
                else {
                    valid();
                    alert("valided");
               
                 } 
            }
        }
    }

    function valid() {
        window.location.assign("../LAnd/native-club/NativeClub_index.html");
      }
    function nValid(){
        window.location.assign("index.html");
    }