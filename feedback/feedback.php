<!DOCTYPE html>
<html>
  <head>
    <style>
      input[type=text], input[type=mail], select, textarea {
  width: 100%; 
  padding: 12px; 
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical 
}


input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {    
  border-radius: 5px;    
  background-color: #f2f2f2;    
  padding: 5px;
  position: absolute;
    top: 50%;
    left: 50%;
    height: 475px;
    transform: translate(-50%, -50%); 
    width: 800px;  
  
}   

h1 {
            background-color: #171e2e;
            padding: 12px;
            text-align: left;
            font-size: 35px;
            color: rgb(255, 255, 255);
            text-decoration: aqua;
    } 
body{
        background-image: url('FEEDBACK.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size:100% 100% ;
    }                
    </style>
  </head>
  <h1>FEED BACK FORM</h1>   <h3><a href="../../cms" ><input type="submit" name="view" value="BACK" class="btn-login"  /></a></h3>   
  <h3><a href="feedbackinfo.php"><input type="submit" name="view" value=" VIEW" class="btn-login"  /></a></h3>
  <div class="container" >
    <form action="insertfeedback.php" method="post" > 
  
      <label>User Id</label>
      <input type="text" id="userid" name="userid" placeholder="Your userid">

      <label>Name</label>
      <input type="text" id="name" name="name" placeholder="Your name">
  
      <label>Email</label>
      <input type="mail" id="mail" name="mail" placeholder="Your mail name">
       
      <label>Subject</label>
      <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
  
      <input type="submit" value="Submit">
  
    </form>
   
  </div>
</html>
