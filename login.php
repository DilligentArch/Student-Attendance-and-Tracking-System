<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/loader.css">
    <title>LoginPage</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.11.1/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

<Navbar>
       <div class="container mx-auto">
        <div class="navbar bg-slate-700">
            <div class="navbar-start">
              <div class="dropdown">
                <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /></svg>
                </div>
                <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
                  <li >
                    <a  href="/attendanceapp/index.php">Home</a>
                </li>
              
                  <li>
                    <a  href="/attendanceapp/about.php">About Us</a>
                  </li>
                  <li>
                    <a  href="/attendanceapp/attendance.php">Attendance</a>
                  </li>
                  
                </ul>
              </div>
              <a class="btn btn-ghost text-xl text-white">MetroPolitan</a>
            </div>
            <div class="navbar-center hidden lg:flex">
              <ul class="menu menu-horizontal px-1">
                <li>
                    <a class="text-white" href="/attendanceapp/index.php">Home</a>
                </li>
              
                <li>
                    <a class="text-white" href="/attendanceapp/about.php">About Us</a>
                </li>
                
                
                <li>
                    <a class="text-white" href="/attendanceapp/attendance.php">Attendance</a>
                  </li>
              </ul>
            </div>
            <div class="navbar-end flex gp-4">
            <button class="px-3 py-3 w-[80px] bg-white text-black rounded-xl "> <a href="/attendanceapp/login.php" class="">Login</a></button>
         
            
             
            </div>
          </div>
       </div>
     
       
    </Navbar>
    <h1 class="text-2xl text-center mt-10 mr-[80px]">Login Now!</h1>
    <div class="loginform ml-[700px] mt-10">
       
             <div class="inputgroup topmarginlarge">
                    <input type="text" id="txtUsername" required>
                    <label for="txtUsername" id="lblUsername">USER NAME</label>
             </div>

             <div class="inputgroup topmarginlarge">
                    <input type="password" id="txtPassword" required>
                    <label for="txtPassword" id="lblPassword">PASSWORD</label>
             </div>
             <div class="divcallforaction topmarginlarge">
                <button class="btnlogin inactivecolor" id="btnLogin">LOGIN</button>
             </div>  
             
             <div class="diverror topmarginlarge" id="diverror">
              <label class="errormessage" id="errormessage">ERROR GOES HERE</label>
             </div>
    </div>
    <div class="lockscreen" id="lockscreen">
       <div class="spinner" id="spinner"></div>
         <lable class="lblwait topmargin" id="lblwait">PLEASE WAIT</lable>
    </div>
    <Footer class="mt-10 bg-[#030712]">
      
      <div class="container">
        <div class="p-10">
          <h1 class="text-white text-center lg:ml-[370px]">Attendance Management System</h1>
          <div class="col-md-4 lg:ml-[750px] leading-10 text-white">
            <h5 class="text-white ml-[130px]">Contact Us</h5>
            <p class="ml-[60px]">Email: shafichy1400@gmail.com</p>
          
          
          </div>
          <div class="col-md-4 text-center  text-white lg:ml-[330px] mt-10">
            <h5 class="lg:ml-[50px]">Quick Links</h5>
            <ul class="flex gap-6 ml-5 lg:ml-[450px] mt-5">
              <li><a href="/attendanceapp/index.php">Home</a></li>
              <li><a href="/attendanceapp/about.php">About Us</a></li>
              <li><a href="/attendanceapp/login.php">Login</a></li>
              <li><a href="/attendanceapp/register.php">Register</a></li>
            </ul>
          </div>
          <div class="col-md-4 text-center lg:ml-[300px] mt-8 text-white">
            <h5 class=" lg:ml-[90px]">Connect With Us</h5>
            <ul class="social-media flex ml-[100px] lg:ml-[570px] gap-8 mt-4">
              <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
              <li><a href="#"><i class="fab fa-twitter"></i></a></li>
              <li><a href="#"><i class="fab fa-facebook"></i></a></li>
            </ul>
          </div>
        </div>
        <hr class="ml-4 lg:ml-[500px] w-[350px] lg:w-[900px]">
        <div class="row p-8">
          <div class="col-md-6 text-white text-center  lg:ml-[400px]">
            <p>&copy; 2024 AttendEase. All Rights Reserved.</p>
          </div>
          <div class="col-md-6 text-white text-center lg:ml-[400px] mt-3">
            <p>Terms of Service | Privacy Policy</p>
          </div>
        </div>
      </div>
 
    
  </Footer>

         <script src="js/jquery.js"></script>
        <script src="js/login.js"></script>
</body>
</html>