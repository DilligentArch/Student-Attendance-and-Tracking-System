<?php

$path=$_SERVER['DOCUMENT_ROOT'];
require_once $path."/attendanceapp/database/database.php";
function clearTable($dbo,$tabName)
{
    $c="delete from :tabname";
    $s=$dbo->conn->prepare($c);
    try{
    $s->execute([":tabname"=>$tabName]);
    }
    catch(PDOException $oo)
    {

    }
}
$dbo=new Database();
$c="create table student_details
(
    id int auto_increment primary key,
    roll_no varchar(20) unique,
    name varchar(50)
)";
$s=$dbo->conn->prepare($c);
try{
$s->execute();
echo("<br>student_details created");
}
catch(PDOException $o)
{
echo("<br>student_details not created");
}

$c="create table course_details
(
    id int auto_increment primary key,
    code varchar(20) unique,
    title varchar(50)
    
)";
$s=$dbo->conn->prepare($c);
try{
$s->execute();
echo("<br>course_details created");
}
catch(PDOException $o)
{
echo("<br>course_details not created");
}


$c="create table faculty_details
(
    id int auto_increment primary key,
    user_name varchar(20) unique,
    name varchar(100),
    password varchar(50)
)";
$s=$dbo->conn->prepare($c);
try{
$s->execute();
echo("<br>faculty_details created");
}
catch(PDOException $o)
{
echo("<br>faculty_details not created");
}


$c="create table session_details
(
    id int auto_increment primary key,
    year int,
    term varchar(50),
    unique (year,term)
)";
$s=$dbo->conn->prepare($c);
try{
$s->execute();
echo("<br>session_details created");
}
catch(PDOException $o)
{
echo("<br>session_details not created");
}



$c="create table course_registration
(
    student_id int,
    course_id int,
    session_id int,
    primary key (student_id,course_id,session_id)
)";
$s=$dbo->conn->prepare($c);
try{
$s->execute();
echo("<br>course_registration created");
}
catch(PDOException $o)
{
echo("<br>course_registration not created");
}

$c="create table course_allotment
(
    faculty_id int,
    course_id int,
    session_id int,
    primary key (faculty_id,course_id,session_id)
)";
$s=$dbo->conn->prepare($c);
try{
$s->execute();
echo("<br>course_allotment created");
}
catch(PDOException $o)
{
echo("<br>course_allotment not created");
}

$c="create table attendance_details
(
    faculty_id int,
    course_id int,
    session_id int,
    student_id int,
    on_date date,
    status varchar(10),
    primary key (faculty_id,course_id,session_id,student_id,on_date)
)";
$s=$dbo->conn->prepare($c);
try{
$s->execute();
echo("<br>attendance_details created");
}
catch(PDOException $o)
{
echo("<br>attendance_details not created");
}

$c="insert into student_details
(id,roll_no,name)
values
  (1,'221-115-003','Nayem Ahmed '),
  (2,'221-115-004','Amrul Hussain'),
  (3,'221-115-006','Nafisa Yesmin'),
  (4,'221-115-009','Dewan Saadat Raja'),
  (5,'221-115-013','Hafiza Jui'),
  (6,'221-115-015','Mis. Abida Waris'),
  (7,'221-115-017','Nipon Kanti Paul'),
  (8,'221-115-032','Koushik Roy'),
  (9,'221-115-043','Proyash Das'),
  (10,'221-115-051','Kazi Tanzina Akter Hridika'),
  (11,'221-115-065','Syed Mushfiqur Rahman Nahin '),
  (12,'221-115-068','Arnab Chowdhury'),

  (13,'221-115-082','Nowshin Ahmed'),
  (14,'221-115-089','Mashiat Jarin'),
  (15,'221-115-092','Azra Sharmila Tasnim '),
  (16,'221-115-095','Nurun Nahar Anika'),
  (17,'221-115-096','Sutopa Dey'),
  (18,'221-115-097','Nayeb Ahmed Qureshi'),
  (19,'221-115-100','Anamika Chowdhury'),
  (20,'221-115-105','Koron Chowdhury'),
  (21,'221-115-106','Prohor Paul'),
  (22,'221-115-115','Bibek Das'),
  (23,'221-115-118','Ashraful Quaiyum  Chowdhury Shafi'),
  (24,'221-115-120','Mahbuba Akther Liza '),
  (25,'221-115-124',' Jarin Tasnim Ahmed'),
  (26,'221-115-131','Muddabir Hussain')";

  $s=$dbo->conn->prepare($c);
  try{
    $s->execute();
  }
  catch(PDOException $o)
  {
    echo("<br>duplicate entry");
  }


  $c="insert into faculty_details
(id,user_name,password,name)
values
(1,'MMH','123','Md. Mahfuzul Hasan'),
(2,'SRR','123','Samia Rahman Rima'),
(3,'FRS','123','MD. Fahmida Rahman Sakib'),
(4,'NIR','123','Nasif Istiak Remon')";

  $s=$dbo->conn->prepare($c);
  try{
    $s->execute();
  }
  catch(PDOException $o)
  {
    echo("<br>duplicate entry");
  }


  $c="insert into session_details
(id,year,term)
values
(1,2022,'56(A-B)'),
(2,2022,'56(C-D)')";

  $s=$dbo->conn->prepare($c);
  try{
    $s->execute();
  }
  catch(PDOException $o)
  {
    echo("<br>duplicate entry");
  }


  $c="insert into course_details
(id,title,code)
values
  (1,'Communication Engineering','CSE 215'),
  (2,'Computer Organization & Architecture','CSE 213'),
  (3,'Microprocessor & Interfacing','CSE 237'),
  (4,'Microprocessor & Interfacing Lab','CSE 238 '),
  (5,'Numerical Methods  ','MAT 235'),
  (6,'Web programing ','CSE 323')";
  $s=$dbo->conn->prepare($c);
  try{
    $s->execute();
  }
  catch(PDOException $o)
  {
    echo("<br>duplicate entry");
  }


  clearTable($dbo,"course_registration");
  $c="insert into course_registration
  (student_id,course_id,session_id)
  values
  (:sid,:cid,:sessid)";
  $s=$dbo->conn->prepare($c);
 

  for($i=1;$i<=26;$i++)
  {
    for($j=0;$j<3;$j++)
    {
        $cid=rand(1,6);
       
        try{
           $s->execute([":sid"=>$i,":cid"=>$cid,":sessid"=>1]); 
        }
        catch(PDOException $pe)
        {

        }

        
        $cid=rand(1,6);
        
        try{
           $s->execute([":sid"=>$i,":cid"=>$cid,":sessid"=>2]); 
        }
        catch(PDOException $pe)
        {

        }
    }
  }


  clearTable($dbo,"course_allotment");
  $c="insert into course_allotment
  (faculty_id,course_id,session_id)
  values
  (:fid,:cid,:sessid)";
  $s=$dbo->conn->prepare($c);
   
  try{
    $s->execute([":fid"=>1,":cid"=>1,":sessid"=>1]); 
 }
 catch(PDOException $pe)
 {

 }


 $cid=rand(1,4);
 
 try{
    $s->execute([":fid"=>1,":cid"=>1,":sessid"=>2]); 
 }
 catch(PDOException $pe)
 {

 }
 try{
  $s->execute([":fid"=>2,":cid"=>2,":sessid"=>1]); 
}
catch(PDOException $pe)
{

}


$cid=rand(1,4);

try{
  $s->execute([":fid"=>2,":cid"=>2,":sessid"=>2]); 
}
catch(PDOException $pe)
{

}
try{
  $s->execute([":fid"=>3,":cid"=>3,":sessid"=>1]); 
}
catch(PDOException $pe)
{

}


$cid=rand(1,4);

try{
  $s->execute([":fid"=>3,":cid"=>4,":sessid"=>1]); 
}
catch(PDOException $pe)
{

}
try{
  $s->execute([":fid"=>3,":cid"=>5,":sessid"=>1]); 
}
catch(PDOException $pe)
{

}


$cid=rand(1,4);

try{
  $s->execute([":fid"=>3,":cid"=>5,":sessid"=>2]); 
}
catch(PDOException $pe)
{

}
try{
  $s->execute([":fid"=>4,":cid"=>6,":sessid"=>1]); 
}
catch(PDOException $pe)
{

}


