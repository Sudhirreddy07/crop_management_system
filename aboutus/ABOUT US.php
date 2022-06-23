<!doctype html>
<html lang="en">
    <head>
        <title>ABOUT US</title>
    <style> 
   body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 100px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}
input[type=submit] {
               background-color: #264ea5;
               color: white;
               padding: 12px 20px;
               border: none;
               border-radius: 4px;
               cursor: pointer;
               float: right;
        }
            input[type=submit]:hover {
               background-color: #264ea5;
.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
   
    </style>    
    </head>
    
    <div class="about-section"> <h3><a href="../../cms"><input type="submit" name="view" value="BACK" class="btn-login"  /></a></h3>
        <h1>About Us </h1> 
        <p>Here You Know The Team Member Of Our Project</p>
       
      </div>
      
      <h2 style="text-align:center">Our Team</h2>
      <div class="row">
        <div class="column">
          <div class="card">
            <img src="Aboutus1.jpg" alt="Sudhir" style="width:100%">
            <div class="container">
              <h3>Sudhir Vardhan Reddy H</h3>
              <h3>4MH19CS102</h3>
              <p class="title">MIT Student</p>
              <p>Department Of Computer Science and Engineering </p>
              <p><a href="mailto:yourmail@gmail.com" title="Send me an email">
                sudhirvardhanreddyh@gmail.com</a></p>
              <p><button class="button">Contact</button></p>
            </div>
          </div>
        </div>
      
        <div class="column">
          <div class="card">
            <img src="Aboutus2.jpg" alt="Sanjay" style="width:100%">
            <div class="container">
              <h3>Sanjay H S</h3>
              <h3>4MH19CS089</h3>
              <p class="title">MIT Student</p>
              <p>Department Of Computer Science and Engineering </p>
              <p><a href="mailto:yourmail@gmail.com" title="Send me an email">
                sanjayhs345@gmail.com</a></p>
              <p><button class="button">Contact</button></p>
            </div>
          </div>
        </div>
      <div class="row">
        <div class="column">
          <div class="card">
            <img src="Aboutus3.jpg" alt="pratap" style="width:100%">
            <div class="container">
              <h3>Prof Pratap M S</h3>
              <h3>Team Guide</h3>
              <p class="title">MIT Professor</p>
              <p>Department Of Computer Science and Engineering </p>
              <p><a href="mailto:yourmail@gmail.com" title="Send me an email">
                pratapms@mitm.in</a></p>
              <p><button class="button">Contact</button></p>
            </div>
          </div>
        </div>
    </div>    
      
</html>    