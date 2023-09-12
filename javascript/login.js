ocument.getElementById("to-login-form").addEventListener("click", function(event) {
    event.preventDefault();
    document.getElementById("register-form").style.display = "none";
    document.getElementById("login-form").style.display = "block";
  });
  
  document.getElementById("to-register-form").addEventListener("click", function(event) {
    event.preventDefault();
    document.getElementById("login-form").style.display = "none";
    document.getElementById("register-form").style.display = "block";
  });