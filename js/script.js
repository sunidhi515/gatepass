(function () {
    var form = document.getElementById("regForm");
    form.addEventListener('submit', checkForm);
    function checkForm(event) {
      event.preventDefault();
      console.log(event);
      myform = event.target.value;
  
      var password = document.getElementById("password").value;
      var confirmpassword = document.getElementById("confirmpassword").value;
      var pno = document.getElementById("pno").value;
      var mno = document.getElementById("mno").value;
  
      if (pno.toString().length != 6) {
        alert("Invalid pno");
        return false;
      }
      if (mno.toString().length != 10) {
        alert("Invalid mobile number");
        return false;
      }
      else if (password != confirmpassword) {
        alert("Please check password and confirmpassword");
        return false;
      } else {
       event.target.submit();
      }
    }
  })();