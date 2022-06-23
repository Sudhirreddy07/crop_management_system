<!doctype html>
<html lang="en">
    <head>
        <title>crops</title>
    <style> 
    body{
        background-image: url('cropbackground.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size:100% 100% ;
    }
    header {
            background-color: #171e2e;
            padding: 12px;
            text-align: left;
            font-size: 35px;
            color: rgb(255, 255, 255);
            text-decoration: aqua;
        }
       
        .form {
            position: absolute;
            top: 40%;
            left: 70%;
            height: 300px;
            transform: translate(-50%, -50%); 
            width: 800px;
            background: #ddd;
            border-bottom: 1px soild silver;
            }
            input[type=submit] {
               background-color: #264ea5;
               color: white;
               padding: 12px 20px;
               border: none;
               border-radius: 4px;
               cursor: pointer;
               
        }
            input[type=submit]:hover {
               background-color: #264ea5;
        }
        input[type=text], input[type=date],input[type=file] {
                width: 10%; 
                padding: 5px; 
                border-radius: 4px;
                box-sizing: border-box;
                margin-top: 6px;
                margin-bottom: 16px;
                resize: vertical 
                }
        
       
    </style>    
    </head>
<body>
   <header>INSERT THE CROP DETAILS</header>  <h3><a href="../../loginfarmer/landing page.php" style="float:right;"><input type="submit" name="view" value="BACK" class="btn-login"  /></a></h3>
  
        <div class="container">
        </div>
 
            <form  action="insertcrop.php" method="post">
                <div class="form_text">
                <h1> Enter The Crop ID</h1> <input type="text" id="cropid" name="cropid" placeholder="ID"  style="animation: reverse;" required>
                <h1> Enter The Farmer User ID</h1> <input type="text" id="userid" name="userid" placeholder="ID"  style="animation: reverse;" required>
                    <h1> Enter The Crop Name</h1> <input type="text" id="name" name="name" placeholder="Name"  style="animation: reverse;" required>
                    <h1> Enter The Crop Available Period</h1> <input type="date" id="sdate" name="sdate" placeholder="Period"  style="animation: reverse;" required> 
                    <input type="date" id="edate" name="edate" placeholder="Period"  style="animation: reverse;" required>
                    <h1> Enter The Crop Discription</h1> <input type="text"  id="cdiscription" name="cdiscription" style="height:50px" placeholder="discription"  style="animation: reverse;" required>
                    <h1> Enter The Crop Image</h1> <input type="file"  id="image" name="image" placeholder="Add image"  style="animation: reverse;" required>
                    <input type="submit"  name="submit" value="submit" class="btn-login" />
                 </div>
            </form>


    <div><h3 class="form">
            <form >
               <table width="800" border="5" cellspacing="6" cellpadding="1" >

        <tr>
		<td>NAME</td>
        <td>CROP ID</td>
        </tr>
        <tr>                        
		<td>PADDY</td>
		<td> 001 </td>
        </tr>
        <tr>
		<td>MANGO</td>
		<td> 002 </td>
        </tr>
        <tr>
		<td>POTATO</td>
		<td> 003 </td>
        </tr>
        <tr>
		<td>COTTON</td>
		<td> 004 </td>
        </tr>
        <tr>
		<td>SUGARCANE</td>
		<td> 005 </td>
        </tr>
        <tr>
		<td>WHEAT</td>
		<td> 006 </td>
        </tr>
        <tr>
		<td>MILLETS</td>
		<td> 007 </td>
        </tr>
        <tr>
		<td>TEA AND COFFEE</td>
		<td> 008 </td>
        </tr>
    </form> 
   
</h3> </div>
    
</body>        
</html>


