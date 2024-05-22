<?php
$path=$_SERVER['DOCUMENT_ROOT'];
require_once $path."/attendanceapp/database/database.php";
require_once $path."/attendanceapp/database/sessionDetails.php";
require_once $path."/attendanceapp/database/facultyDetails.php";
require_once $path."/attendanceapp/database/courseRegistrationDetails.php";
require_once $path."/attendanceapp/database/attendanceDetails.php";
function createCSVReport($list,$filename)
{
    $error=0;
    $path=$_SERVER['DOCUMENT_ROOT'];
    $finalFileName=$path.$filename;
    try{
        $fp=fopen($finalFileName,"w");
        foreach($list as $line)
        {
            fputcsv($fp,$line);
        }
    }
    catch(Exception $e)
    {
         $error=1;
    }
}
if(isset($_REQUEST['action']))
{
    $action=$_REQUEST['action'];
    if($action=="getSession")
    {
         
         $dbo=new Database();
         $sobj=new SessionDetails();
         $rv=$sobj->getSessions($dbo);
         
         echo json_encode($rv);
    }
    //data:{facid:facid,sessionid:sessionid,action:"getFacultyCourses"},
    if($action=="getFacultyCourses")
    {
       
         $facid=$_POST['facid'];
         $sessionid=$_POST['sessionid'];
         $dbo=new Database();
         $fo=new faculty_details();
         $rv=$fo->getCoursesInASession($dbo,$sessionid,$facid);
         //$rv=[];
         echo json_encode($rv);
    }
    //data:{facid:facid,ondate:ondate,sessionid:sessionid,
    //classid:classid,action:"getStudentList"},
    if($action=="getStudentList")
    {
        
         $classid=$_POST['classid'];
         $sessionid=$_POST['sessionid'];
         $facid=$_POST['facid'];
         $ondate=$_POST['ondate'];
         $dbo=new Database();
        $crgo=new CourseRegistrationDetails();
        $allstudents=$crgo->getRegisteredStudents($dbo,$sessionid,$classid);
      
        $ado=new attendanceDetails();
        $presentStudents=$ado->getPresentListOfAClassByAFacOnADate($dbo,$sessionid,$classid,$facid,$ondate);
       
        for($i=0;$i<count($allstudents);$i++)
        {
            $allstudents[$i]['isPresent']='NO';//by default NO
            for($j=0;$j<count($presentStudents);$j++)
            {
                if($allstudents[$i]['id']==$presentStudents[$j]['student_id'])
                {
                    $allstudents[$i]['isPresent']='YES';
                    break;
                }
            }
        }
         //$rv=[];
         echo json_encode($allstudents);
    }
    
    if($action=="saveattendance")
    {
        //fetch the courses taken by fac in sess
         $courseid=$_POST['courseid'];
         $sessionid=$_POST['sessionid'];
         $studentid=$_POST['studentid'];
         $facultyid=$_POST['facultyid'];
         $ondate=$_POST['ondate'];
         $status=$_POST['ispresent'];
         $dbo=new Database();
        $ado=new attendanceDetails();
        $rv=$ado->saveAttendance($dbo,$sessionid,$courseid,$facultyid,$studentid,$ondate,$status);
         //$rv=[];
         echo json_encode($rv);
    }

    //data:{sessionid:sessionid,classid:classid,
    //facid:facid,action:"downloadReport"},
    if($action=="downloadReport")
    {
    
         $courseid=$_POST['classid'];
         $sessionid=$_POST['sessionid'];
         $facultyid=$_POST['facid'];
        
         $dbo=new Database();
        $ado=new attendanceDetails();
        //$rv=$ado->saveAttendance($dbo,$sessionid,$courseid,$facultyid,$studentid,$ondate,$status);
         //$rv=[];
        
         
         $list=[
            [1,"A",20.00],
            [2,"B",30.00],
            [3,"C",40.00]
         ];
         $list=$ado->getAttenDanceReport($dbo,$sessionid,$courseid,$facultyid);
        
         $filename="/attendanceapp/report.csv";
         $rv=["filename"=>$filename];
         createCSVReport($list,$filename);
         echo json_encode($rv);
    }
}
?>