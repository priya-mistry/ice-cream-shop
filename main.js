function validate(form1) {
  var email = form1.email.value.trim();

  // Proper email regex pattern
  var reg =/(\w+)\@(\w+)\.[a-zA-Z]/;;
  
  if (!reg.test(email)) {
    alert("Please enter a valid email address, like example@gmail.com");
    return false; // prevent form submission
  }

  //alert("Valid email address ");
  return true; // allow form submission
}
