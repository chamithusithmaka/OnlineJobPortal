function valid() {

  var topic = document.getElementById('topic').value;
  var email = document.getElementById('Attendee-mail').value;
  var time = document.getElementById('Time').value;
  var password = document.getElementById('Meet_pwd').value;

  var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;                   // Email pattern: example@nativeL.com
  var timePattern = /^\d{2}:\d{2}$/;                           // included time format: HH:MM


  if (topic.trim() === '') {        
    alert('Please enter a topic...');
    return false;
  }

  if (!emailPattern.test(email)) {
    alert('Please enter a valid email address..!');
    return false;
  }


  if (!timePattern.test(time)) {
    alert('Please enter a valid time in the format HH:MM.');
    return false;
  }

  if (password.trim() === '') {
    alert('Please enter a meeting password...');
    return false;
  }


  return true;  // submit the form
}