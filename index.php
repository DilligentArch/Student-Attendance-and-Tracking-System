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
  
<header class="container mx-auto">
<h1 class="text-[#131313]  lg:text-[50px] m-10 font-bold text-center ">Welcome to the <span class="text-[#023e8a]">Metropolitan</span> University <br> Attendance Management System</h1>
<marquee class="text-2xl text-center text-[#d90429]">Our Attendance Management System is designed to streamline the process of recording and managing student attendance. By leveraging technology,  <br> <span class="text-[#5c677d]"> we aim to reduce the administrative burden on educators and provide real-time, reliable attendance data.</span></marquee>

<!-- Banner Section -->
<div class="container mx-auto mt-10">
            <div class="carousel h-[400px] lg:h-[700px] rounded-md">
                <div id="slide1" class="carousel-item relative w-full">
                  <img src="MU1.jpg" class="w-full" />
                  <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                    <a href="#slide4" class="btn btn-circle">❮</a> 
                    <a href="#slide2" class="btn btn-circle">❯</a>
                  </div>
                </div> 
                <div id="slide2" class="carousel-item relative w-full">
                  <img src="MU2.jpg" class="w-full" />
                  <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                    <a href="#slide1" class="btn btn-circle">❮</a> 
                    <a href="#slide3" class="btn btn-circle">❯</a>
                  </div>
                </div> 
                <div id="slide3" class="carousel-item relative w-full">
                  <img src="MU3.jpg" class="w-full" />
                  <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                    <a href="#slide2" class="btn btn-circle">❮</a> 
                    <a href="#slide4" class="btn btn-circle">❯</a>
                  </div>
                </div> 
                <div id="slide4" class="carousel-item relative w-full">
                  <img src="metro4.jpg" class="w-full" />
                  <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                    <a href="#slide3" class="btn btn-circle">❮</a> 
                    <a href="#slide1" class="btn btn-circle">❯</a>
                  </div>
                </div>
              </div>
        </div>

        <!-- Faculty section: -->

        <h1 class="text-center mt-20 text-3xl font-bold">Faculty Members</h1>
        <div class="mt-20 flex flex-col lg:flex-row  gap-20 ml-[50px] lg:ml-[200px]">
          <div class="card card-compact w-[300px] bg-slate-100 shadow-xl p-5 hover:border-2 border-black">
            <figure><img src="Image/Yousuf Sir.png" alt="Shoes" /></figure>
            <div class="card-body">
              
              <p class="ml-10">Professor Dr. Yousuf M Islam</p>
              <p class="ml-20 mb-5">Professor</p>
            </div>
           
          </div>
          <div class="card card-compact w-[300px] bg-slate-100 shadow-xl p-5 hover:border-2 border-black">
            <figure><img src="Image/Nazrul sir.png" alt="Shoes" /></figure>
            <div class="card-body">
              
              <p class="">  Professor Dr. Md. Nazrul Haque Chowdhury</p>
               <p class="">Dean, School of Science & Technology</p>
            </div>
          </div>
          <div class="card card-compact w-[300px] bg-slate-100 shadow-xl p-5 hover:border-2 border-black">
            <figure><img src="Image/Mukammel sir.png" alt="Shoes" /></figure>
            <div class="card-body">
              
              <p class="">   Choudhury M. Mukammel Wahid</p>
               <p class="">Professor, Department of CSE, Metropolitan University</p>
            </div>
          </div>
        </div>

        <div class="mt-20 flex flex-col lg:flex-row  gap-20 ml-[50px] lg:ml-[200px]">
          <div class="card card-compact w-[300px] bg-slate-100 shadow-xl p-5 hover:border-2 border-black">
            <figure><img src="Image/Mahfuj Sir.jpg" alt="Shoes" /></figure>
            <div class="card-body">
              
              <p class="ml-10">Md. Mahfujul Hasan</p>
              <p class=" mb-5">Associate Professor Head, Dept. of CSE</p>
            </div>
           
          </div>
          <div class="card card-compact w-[300px] bg-slate-100 shadow-xl p-5 hover:border-2 border-black">
            <figure><img src="Image/Safwan Sir.jpg" alt="Shoes" /></figure>
            <div class="card-body">
              
              <p class="ml-12">  Safwan Uddin Ahmed</p>
               <p class="ml-12 mb-5">Assistant Professor</p>
            </div>
          </div>
          <div class="card card-compact w-[300px] bg-slate-100 shadow-xl p-5 hover:border-2 border-black">
            <figure><img src="Image/Ananna Mam.jpg" alt="Shoes" /></figure>
            <div class="card-body">
              
              <p class="ml-12"> Tajkia Nuri Ananna</p>
               <p class="ml-20 mb-5">Lecturer</p>
            </div>
          </div>
        </div>
	

        <div class="mt-20 flex flex-col lg:flex-row  gap-20 ml-[50px] lg:ml-[200px]">
          <div class="card card-compact w-[300px] bg-slate-100 shadow-xl p-5 hover:border-2 border-black">
            <figure><img src="Image/Archi Mam.jpg" alt="Shoes" /></figure>
            <div class="card-body">
              
              <p class="ml-14">Archi Arani Basak</p>
              <p class="ml-20 mb-5">Lecturer</p>
            </div>
           
          </div>
          <div class="card card-compact w-[300px] bg-slate-100 shadow-xl p-5 hover:border-2 border-black">
            <figure><img src="Image/Rafee Sir.png" alt="Shoes" /></figure>
            <div class="card-body">
              
              <p class="ml-6">  Md. Mushtaq Shahriyar Rafee</p>
               <p class="ml-20 mb-5">Lecturer</p>
            </div>
          </div>
          <div class="card card-compact w-[300px] bg-slate-100 shadow-xl p-5 hover:border-2 border-black">
            <figure><img class="w-[150px]" src="Image/Anwara Mam.png" alt="Shoes" /></figure>
            <div class="card-body">
              
              <p class="ml-10">Khudeja Khanom Anwara</p>
               <p class="ml-20 mb-5">Lecturer</p>
            </div>
          </div>
        </div>
	

        <div class="mt-20 flex flex-col lg:flex-row  gap-20 ml-[50px] lg:ml-[200px]">
          <div class="card card-compact w-[300px] bg-slate-100 shadow-xl p-5 hover:border-2 border-black">
            <figure><img src="Image/Limon Sir.jpg" alt="Shoes" /></figure>
            <div class="card-body">
              
              <p class="ml-6">   Md. Shamihul Islam Khan Limon</p>
              <p class="ml-20 mb-5">Lecturer</p>
            </div>
           
          </div>
          <div class="card card-compact w-[300px] bg-slate-100 shadow-xl p-5 hover:border-2 border-black">
            <figure><img src="Image/Rifa Mam.jpg" alt="Shoes" /></figure>
            <div class="card-body">
              
              <p class="ml-14">  Nabila Jannat Rifa</p>
               <p class="ml-20 mb-5">Lecturer</p>
            </div>
          </div>
          <div class="card card-compact w-[300px] bg-slate-100 shadow-xl p-5 hover:border-2 border-black">
            <figure><img  src="Image/Nasif Sir.jpg" alt="Shoes" /></figure>
            <div class="card-body">
              
              <p class="ml-14"> Nasif Istiak Remon</p>
               <p class="ml-20 mb-5">Lecturer</p>
            </div>
          </div>
        </div>
	
        <div class="mt-20 flex flex-col lg:flex-row gap-20 ml-[50px] lg:ml-[200px]">
          <div class="card card-compact w-[300px] bg-slate-100 shadow-xl p-5 hover:border-2 border-black">
            <figure><img src="Image/Pulok sir.jpg" alt="Shoes" /></figure>
            <div class="card-body">
              
              <p class="ml-14">Rishad Amin Pulok</p>
              <p class="ml-20 mb-5">Lecturer</p>
            </div>
           
          </div>
          <div class="card card-compact w-[300px] bg-slate-100 shadow-xl p-5 hover:border-2 border-black">
            <figure><img src="Image/Iftekhar sir.jpg" alt="Shoes" /></figure>
            <div class="card-body">
              
              <p class="ml-16">Iftekhar Hussain</p>
               <p class="ml-20 mb-5">Lecturer</p>
            </div>
          </div>
          <div class="card card-compact w-[300px] bg-slate-100 shadow-xl p-5 hover:border-2 border-black">
            <figure><img class="w-[150px]"  src="Image/Muhtasim Sir.jpg" alt="Shoes" /></figure>
            <div class="card-body">
              
              <p class="ml-12">Dewan Ahmed Muhtasim</p>
               <p class="ml-20 mb-5">Lecturer</p>
            </div>
          </div>
        </div>
	

        <div class="mt-20 flex flex-col lg:flex-row gap-20 ml-[50px] lg:ml-[200px]">
          <div class="card card-compact w-[300px] bg-slate-100 shadow-xl p-5 hover:border-2 border-black">
            <figure><img src="Image/Jakaria Sir.jpg" alt="Shoes" /></figure>
            <div class="card-body">
              
              <p class="ml-14">Abu Jafar Md Jakaria</p>
              <p class="ml-20 mb-5">Lecturer</p>
            </div>
           
          </div>
          <div class="card card-compact w-[300px] bg-slate-100 shadow-xl p-5 hover:border-2 border-black">
            <figure><img src="Image/Mayami Mam.jpg" alt="Shoes" /></figure>
            <div class="card-body">
              
              <p class="ml-5">Mayami Das Purkayastha Purba</p>
               <p class="ml-20 mb-5">Lecturer</p>
            </div>
          </div>
          <div class="card card-compact w-[300px] bg-slate-100 shadow-xl p-5 hover:border-2 border-black">
            <figure><img  src="Image/Bushra Mam.jpg" alt="Shoes" /></figure>
            <div class="card-body">
              
              <p class="ml-12"> Bushra Azmat Hussain</p>
               <p class="ml-20 mb-5">Lecturer</p>
            </div>
          </div>
        </div>
	

        <div class="mt-20 flex flex-col lg:flex-row  gap-20 ml-[50px] lg:ml-[200px]">
          <div class="card card-compact w-[300px] bg-slate-100 shadow-xl p-5 hover:border-2 border-black">
            <figure><img src="Image/Mostafiz Sir.jpg" alt="Shoes" /></figure>
            <div class="card-body">
              
              <p class="ml-10"> H M Mostafizur Rahman</p>
              <p class="ml-20 mb-5">Lecturer</p>
            </div>
           
          </div>
          <div class="card card-compact w-[300px] bg-slate-100 shadow-xl p-5 hover:border-2 border-black">
            <figure><img src="Image/Ruma Mam.jpg" alt="Shoes" /></figure>
            <div class="card-body">
              
              <p class="ml-20">  Ruma Das</p>
               <p class="ml-20 mb-5">Lecturer</p>
            </div>
          </div>
          <div class="card card-compact w-[300px] bg-slate-100 shadow-xl p-5 hover:border-2 border-black">
            <figure><img  src="Image/Sakib Sir.jpg" alt="Shoes" /></figure>
            <div class="card-body">
              
              <p class="ml-10">    Md. Fahmidur Rahman Sakib</p>
               <p class="ml-20 mb-5">Lecturer</p>
            </div>
          </div>
        </div>
	

        <div class="mt-20 flex flex-col lg:flex-row  gap-20 ml-[50px] lg:ml-[200px]">
          <div class="card card-compact w-[300px] bg-slate-100 shadow-xl p-5 hover:border-2 border-black">
            <figure><img src="Image/Mumu Mam.jpg" alt="Shoes" /></figure>
            <div class="card-body">
              
              <p class="ml-10">Tanjina Ahmed Mumu</p>
              <p class="ml-20 mb-5">Lecturer</p>
            </div>
           
          </div>
          <div class="card card-compact w-[300px] bg-slate-100 shadow-xl p-5 hover:border-2 border-black">
            <figure><img src="Image/Muzammil Sir.jpg" alt="Shoes" /></figure>
            <div class="card-body">
              
              <p class="ml-10">  Muhammad Muzammil</p>
               <p class="ml-20 mb-5">Lecturer</p>
            </div>
          </div>
          <div class="card card-compact w-[300px] bg-slate-100 shadow-xl p-5 hover:border-2 border-black">
            <figure><img  src="Image/Moshiur Sir.jpg" alt="Shoes" /></figure>
            <div class="card-body">
              
              <p class="ml-14">  Moshiur Ahmed</p>
               <p class="ml-20 mb-5">Lecturer</p>
            </div>
          </div>
        </div>
	

        <div class="mt-20 flex flex-col lg:flex-row  gap-20 ml-[50px] lg:ml-[200px]">
          <div class="card card-compact w-[300px] bg-slate-100 shadow-xl p-5 hover:border-2 border-black">
            <figure><img class="w-[120px]" src="Image/Rima Mam.jpg" alt="Shoes" /></figure>
            <div class="card-body">
              
              <p class="ml-10">Samia Rahman Rima</p>
              <p class="ml-20 mb-5">Lecturer</p>
            </div>
           
          </div>
          <div class="card card-compact w-[300px] bg-slate-100 shadow-xl p-5 hover:border-2 border-black">
            <figure><img class="w-[120px]" src="Image/Ruhul Sir.jpg" alt="Shoes" /></figure>
            <div class="card-body">
              
              <p class="ml-[70px]"> Ruhul Amin</p>
               <p class="ml-20 mb-5">Lecturer</p>
            </div>
          </div>
          <div class="card card-compact w-[300px] bg-slate-100 shadow-xl p-5 hover:border-2 border-black">
            <figure><img  src="Image/Nazrul sir1.jpg" alt="Shoes" /></figure>
            <div class="card-body">
              
              <p class="ml-14"> Nazrul Islam</p>
               <p class="ml-20 mb-5">Lecturer</p>
            </div>
          </div>
        </div>
	

        <div class="mt-20 flex flex-col lg:flex-row  gap-20 ml-[50px] lg:ml-[200px]">
          <div class="card card-compact w-[300px] bg-slate-100 shadow-xl p-5 hover:border-2 border-black">
            <figure><img class="w-[120px]" src="Image/Tajbin Mam.jpg" alt="Shoes" /></figure>
            <div class="card-body">
              
              <p class="ml-[70px]">   Tajbin Jahan</p>
              <p class="ml-20 mb-5">Lecturer</p>
            </div>
           
          </div>
          <div class="card card-compact w-[300px] bg-slate-100 shadow-xl p-5 hover:border-2 border-black">
            <figure><img class="w-[120px]" src="Image/Naeem Sir.jpg" alt="Shoes" /></figure>
            <div class="card-body">
              
              <p class="ml-10"> Golam Mostofa Naeem</p>
               <p class="ml-16 mb-5">Teaching Assistant</p>
            </div>
          </div>
          <div class="card card-compact w-[300px] bg-slate-100 shadow-xl p-5 hover:border-2 border-black">
            <figure><img class="w-[120px]" src="Image/Shakib Sir.jpg" alt="Shoes" /></figure>
            <div class="card-body">
              
              <p class="ml-14">Abdul Wadud Shakib</p>
               <p class="ml-16 mb-5">Teaching Assistant</p>
            </div>
          </div>
        </div>

        <div class="mt-10 ml-[50px] lg:ml-[580px] hover:border-2 border-black w-[310px]">
          <div class="card card-compact w-[300px] bg-slate-100 shadow-xl p-5">
            <figure><img class="w-[120px]" src="Image/Nowshin Mam.jpg" alt="Shoes" /></figure>
            <div class="card-body">
              
              <p class="ml-14">Nowshin Sharmin</p>
               <p class="ml-14 mb-5">Teaching Assistant</p>
            </div>
          </div>
        </div>
	
</header>


	

</body>