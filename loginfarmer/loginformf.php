<!DOCTYPE html>
<html>
<head>
  <title>New Register</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="js/jquery.js"></script>
  <script type="text/javascript">
  $(document).ready(function(){
    $("#register").click(function(){
      userid=$("#userid").val();
      fname=$("#fname").val();
      phonenumber=$("#phonenumber").val();
      Address=$("#Address").val();
      mail=$("#mail").val();
      password=$("#password").val();
      $.ajax({
        type:"POST",
        url:"addfarmer.php",
        data:"userid="+userid+"&fname="+fname+"&phonenumber="+phonenumber+"&Address="+Address+"&mail="+mail+"&password="+password,
        success:function(html){
          if(html=='true'){
            $("#add_err2").html('<div class="alert alert-success"\Account Processed.\\</div>');
            window.location.href="loginfarmer.php";
          }
          else if(html=='false'){
            $("#add_err2").html('<div class="alert alert-danger">\Email address already in system.\\</div>');
          }
          else if(html=='userid'){
           $("#add_err2").html('<div class="alert alert-danger">\User Id required\</div>');
        }
        else if(html=='fname'){
            $("#add_err2").html('<div class="alert alert-danger">\First name required\</div>');
         }
         else if(html=='phonenumber'){
            $("#add_err2").html('<div class="alert alert-danger">\Phone Number required\</div>');
         }
         else if(html=='Address'){
            $("#add_err2").html('<div class="alert alert-danger">\Address required\</div>');
         }
        else if(html=='eshort'){
          $("#add_err2").html('<div class="alert alert-danger">\Mail required\</div>');
       }
       else if(html=='pshort'){
         $("#add_err2").html('<div class="alert alert-danger">\password required\</div>');
      }
      else{
        $("#add_err2").html('<div class="alert alert-danger">\Error\</div>');
     }
    },
    beforeSend:function(){
      $("#add_err2").html("<div class='alert alert-success'>\Loading......</div>");
    }
  });
  return false;
});
});
</script>
<style>
div.new{
 width:500px;
  margin-top: 150px;
}
</style>
</head>
<body>
  <center>

  <div class="new">
      <form> <h3>Form Register</h3>

<div id="add_err2"></div>

    <table>
    <tr>
        <td>User Id:</td><td><input type="text" maxlength="25" id="userid" name="userid" class="form-control"></td>
      </tr>
      <h5>NOTE:User Id And Name Must Be Same</h5>
      <tr>
        <td>Name:</td><td><input type="text" maxlength="25" id="fname" name="fname"  class="form-control"></td>
      </tr>
      <tr>
        <td>Phone Number:</td><td><input type="number" maxlength="25" id="phonenumber" name="phonenumber"  class="form-control"></td>
      </tr>
      <tr>
        <td>Address:</td><td><input type="text" maxlength="100" id="Address" name="Address"  class="form-control"></td>
      </tr>
      <tr>
        <td>Email:</td><td><input type="email" maxlength="25" id="mail" name="mail"class="form-control" ></td>
      </tr>
      <tr>
        <td>Password:</td><td><input type="password" maxlength="15" id="password" name="password" class="form-control"></td>
      </tr>
      <tr>
        <td>&nbsp;</td><td><input type="submit"  id="register" value="submit" class="btn btn-light"></td>
      </tr>
    </table>
  </form>
</div>
</center>
</body>
</html>
