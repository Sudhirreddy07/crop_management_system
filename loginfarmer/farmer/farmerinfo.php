<!doctype html>
<html lang="en">
    <head>
        <title>FARMER INFO</title>
        <style>
         body{
            background-image: url('farmerbackground.png');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size:100% 100% ;
		}
        header{
            background-color: #171e2e;
            padding: 12px;
            text-align: left;
            font-size: 35px;
            color: rgb(255, 255, 255);
            text-decoration: aqua;
        }
    
      input[type=text], input[type=number],input[type=file] {
  width: 10%; 
  padding: 8px; 
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical 
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
        </style>
    </head>
    <body>
  
        <header> INSERT THE FARMER DETAILS </header> <h3><a href="../../loginfarmer/landing page.php"style="float: right;"><input type="submit" name="view" value="BACK" class="btn-login"  /></a></h3>
             <div class="topnav">
             </div>
            <form action="insertfarmerinfo.php" method="post">  
                <div class="form_text">
                <h1> Enter The Farmer UserId</h1> <input type="text" id="userid" name="userid" placeholder="userid"  style="animation: reverse;" required>
                    <h1> Enter The Farmer Name</h1> <input type="text" id="name" name="name" placeholder="Name"  style="animation: reverse;" required>
                    <h1> Enter The Farmer Phone Number</h1> <input type="number" id="phonenumber" name="phonenumber" placeholder="Phone Number"  style="animation: reverse;" required>
                    <h1> Enter The Farmer Address</h1> <input type="text" id="Address" name="Address" placeholder="Address"  style="animation: reverse;" required>
                    <h1> Enter The Farmer Image</h1> <input type="file"  id="image" name="image" placeholder="Add image"  style="animation: reverse;" required>
                    <input type="submit" name="submit" value="SUBMIT" class="btn-login" />
                </div>
            </form>
     
              
         </div>
     </body>        
     </html>