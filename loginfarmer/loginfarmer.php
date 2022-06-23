<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- jQuery -->
  <script src="js/jquery.js"></script>

<!-- Script -->
<script type="text/javascript">
          $(document).ready(function(){

       $("#login").click(function(){

        mail=$("#mail").val();
        password=$("#password").val();
         $.ajax({
          type: "POST",
          url: "pfcheck.php",
          data: "mail="+mail+"&password="+password,
          success: function(html){
            if(html=='true')
            {

              $("#add_err2").html('<div class="alert alert-success"> \
                        <strong>Authenticated</strong> \ \
                      </div>');

            window.location.href = "landing page.php";

            } else if (html=='false') {
              $("#add_err2").html('<div class="alert alert-danger"> \
                        <strong>Authentication</strong> failure. \ \
                      </div>');


            } else {
              $("#add_err2").html('<div class="alert alert-danger"> \
                        <strong>Error</strong> processing request. Please try again. \ \
                      </div>');
            }
          },
          beforeSend:function()
          {
                          $("#add_err2").html("loading...");
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
  body{
            background-image: url('loginbackground.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size:100% 100% ;
		}
       
        .column1 {
           float: left;
           width: 75%;
           padding: 5px;
           position:absolute;
        }
        .column2 {
           float: right;
           top: 0%;
           right: 0%;
           padding: 5px;
        }
       
  
  </style>
</head>

<body>

<center>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
    LOGIN
  </button>
 
<?php
if(isset($_GET["logout"])){
  if($_GET["logout"]=="true")
  {?>
    <div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <b>You have been logged out of the system.</b></div>
      <?php }
}
    ?>
  <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title"><h2><strong>Login</strong></h2>
<div id="add_err2"></div>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
      <form>
                  <table>
                    <tr>
                      <td><b>Email:</b></td><td><input type="email" id="mail" name="mail"class="form-control" ></td>
                    </tr>
                    <tr>
                      <td><b>Password:</b></td><td><input type="password" maxlength="15" id="password" name="password" class="form-control"></td>
                    </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>
                      <button type="submit" id="login" class="btn btn-light"><b>Login</b></button></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
             <td><a href="loginformf.php"><button type="button" class="btn btn-light"><b>Not a Member? Register here</b></button></a></td>
           </tr>
                </table>
              </form>
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>

      </div>
    </div>
  </div>

</center>

<div class="column1">
        <img src="MIT.png"  float="right" width="125px" height="125px" >
    </div>
   <div class="column2">
    <img src="CSE.jpg"  float="left" width="125px" height="125px"  >
   </div>
</body>
</html>
