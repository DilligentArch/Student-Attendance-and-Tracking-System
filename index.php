<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
<link href="https://cdn.jsdelivr.net/npm/daisyui@4.11.1/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css" >
</head>
<body class="bg-[#83c5be]"> 
    <!-- Navbar -->
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
    
<marquee class="text-2xl text-center text-[#d90429]">Our Attendance Management System is designed to streamline the process of recording and managing student attendance. By leveraging technology,  <br> <span class="text-[#5c677d]"> we aim to reduce the administrative burden on educators and provide real-time, reliable attendance data.</span></marquee>



</body>