$(document).ready(function() {
    //refer-and-earn form validation
    $(".form1-btn").on('click', function() {
        var letters = /^[A-Za-z ]+$/;
        var validemail = /^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$/;
        var number = /^[0-9]+$/;
    
       
    
        if( document.form1.name.value == "" ) {
          document.getElementById("errorBox1").innerHTML = "Enter the Full Name";
          document.getElementById("name1").focus();
          $('#errorBox1').show();
          return false;
        }else if( document.form1.name.value.match(letters)){
          $('#errorBox1').hide();
        }else{
          document.getElementById("errorBox1").innerHTML = "Enter only letters";
          document.getElementById("name1").focus();
          $('#errorBox1').show();
          return false;
        }
    
        if( document.form1.phone.value == "" ) {
          document.getElementById("errorBox2").innerHTML = "Enter the phone";
          document.getElementById("phone1").focus();
          $('#errorBox2').show();
          return false;
        }else if( document.form1.phone.value.match(number) ) {
          $('#errorBox2').hide();
        }else{
          document.getElementById("errorBox2").innerHTML = "Enter only numbers";
          document.getElementById("phone1").focus();
          $('#errorBox2').show();
          return false;
        }
        


        if( document.form1.email.value == "" ) {
          document.getElementById("errorBox3").innerHTML = "Enter the Email";
          document.getElementById("email1").focus();
          $('#errorBox3').show();
          return false;
        }else if( document.form1.email.value.match(validemail) ) {
          $('#errorBox3').hide();
        }else{
          document.getElementById("errorBox3").innerHTML = "Enter valid Email";
          document.getElementById("email1").focus();
          $('#errorBox3').show();
          return false;
        }
    
        if( document.form1.zipcode.value == "" ) {
            document.getElementById("errorBox4").innerHTML = "Enter the zipcode";
            document.getElementById("zipcode1").focus();
            $('#errorBox4').show();
            return false;
          }else if( document.form1.zipcode.value.match(number) ) {
            $('#errorBox4').hide();
          }else{
            document.getElementById("errorBox4").innerHTML = "Enter only digits";
            document.getElementById("zipcode1").focus();
            $('#errorBox4').show();
            return false;
          }

          if( document.form1.menu_product.value == "---Select Product---" ) {
            document.getElementById("errorBox5").innerHTML = "Select any one product";
            document.getElementById("menu_product1").focus();
            $('#errorBox5').show();
            return false;
          }
          else  {
                $('#errorBox5').hide();
              }
    
        return true; 
    });
    
});


$(document).ready(function() {
  //refer-and-earn form validation
  $(".form2-btn").on('click', function() {
      var letters = /^[A-Za-z ]+$/;
      var validemail = /^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$/;
      var number = /^[0-9]+$/;
  
     
  
      if( document.form2.name.value == "" ) {
        document.getElementById("errorBox6").innerHTML = "Enter the Full Name";
        document.getElementById("name2").focus();
        $('#errorBox6').show();
        return false;
      }else if( document.form2.name.value.match(letters)){
        $('#errorBox6').hide();
      }else{
        document.getElementById("errorBox6").innerHTML = "Enter only letters";
        document.getElementById("name2").focus();
        $('#errorBox6').show();
        return false;
      }
  
      if( document.form2.phone.value == "" ) {
        document.getElementById("errorBox7").innerHTML = "Enter the phone";
        document.getElementById("phone2").focus();
        $('#errorBox7').show();
        return false;
      }else if( document.form2.phone.value.match(number) ) {
        $('#errorBox7').hide();
      }else{
        document.getElementById("errorBox7").innerHTML = "Enter only numbers";
        document.getElementById("phone2").focus();
        $('#errorBox7').show();
        return false;
      }
      


      if( document.form2.email.value == "" ) {
        document.getElementById("errorBox8").innerHTML = "Enter the Email";
        document.getElementById("email2").focus();
        $('#errorBox8').show();
        return false;
      }else if( document.form2.email.value.match(validemail) ) {
        $('#errorBox8').hide();
      }else{
        document.getElementById("errorBox8").innerHTML = "Enter valid Email";
        document.getElementById("email2").focus();
        $('#errorBox8').show();
        return false;
      }
  
      if( document.form2.zipcode.value == "" ) {
          document.getElementById("errorBox9").innerHTML = "Enter the zipcode";
          document.getElementById("zipcode2").focus();
          $('#errorBox9').show();
          return false;
        }else if( document.form2.zipcode.value.match(number) ) {
          $('#errorBox9').hide();
        }else{
          document.getElementById("errorBox9").innerHTML = "Enter only digits";
          document.getElementById("zipcode2").focus();
          $('#errorBox9').show();
          return false;
        }

        if( document.form2.menu_product.value == "---Select Product---" ) {
          document.getElementById("errorBox10").innerHTML = "Select any one product";
          document.getElementById("menu_product2").focus();
          $('#errorBox10').show();
          return false;
        }
        else  {
              $('#errorBox10').hide();
            }
  
      return true; 
  });
  
});