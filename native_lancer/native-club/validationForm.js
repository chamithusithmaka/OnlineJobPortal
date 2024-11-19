function valid(){
    var topic = document.getElementById("topic").value;
    var cMail = document.getElementById("Attendee-mail").value;
    var date = document.getElementById("date").value;
    var time = document.getElementById("Time").value;
    var password = document.getElementById("Meet_pwd").value;
    // Perform client-side form validation
    if (topic === "" || cMail === "" || date === ""|| time === ""||password === "" ) {
        alert("please fill the all the input area!");
        return;
    }
    else if (!emailRegex.test(cMail)) {
        document.getElementById("Attendee-mail").textContent = "Invalid email format";
    }
    else{
        window.location.assign("edit_inv.html");
    }
}
