<?php

use LDAP\Result;

    $path = $_SERVER['DOCUMENT_ROOT'];
    require_once $path."/attendanceapp/database/database.php";
    //require_once $path."/attendanceapp/database/facultyDetails.php";

    function register() {
        $name = $_POST["name"];
        $username = $_POST["username"];
        $password = $_POST["password"];
        $course1 = $_POST["course1"];
        $code1 =$_POST["code1"];
        $session1=$_POST["session1"];
       


        if(empty($name) || empty($username) || empty($password)) {
            echo "Please Fill Out The Form!";
            exit;
        }
        if(empty($course1) || empty($code1) || empty($session1)){
            echo "Please Fill Out at least one course";
            exit;
       }

       $dbo = new Database();
       $query = "SELECT * FROM faculty_details WHERE user_name = :username";
       $stmt = $dbo->conn->prepare($query);
       $stmt->bindParam(':username', $username);

       try {
           $stmt->execute();
           if ($stmt->rowCount() > 0) {
               echo json_encode(["status" => "Username Has Already Taken"]);
               exit;
           }
       } catch (PDOException $e) {
           echo "Error: " . $e->getMessage();
           exit;
       }

       $query = "INSERT INTO faculty_details (user_name, password, name) VALUES (:username, :password, :name)";
       $stmt = $dbo->conn->prepare($query);
       $stmt->bindParam(':username', $username);
       $stmt->bindParam(':password', $password);
       $stmt->bindParam(':name', $name);

       try {
           $stmt->execute();
           echo "Registration successful";
       } catch (PDOException $e) {
           echo "Error: " . $e->getMessage();
           exit;
       }

       // Insert course details
       $query = "INSERT INTO course_details (title, code) VALUES (:title, :code)";
       $stmt = $dbo->conn->prepare($query);
       $stmt->bindParam(':title', $course1);
       $stmt->bindParam(':code', $code1);

       try {
           $stmt->execute();
       } catch (PDOException $e) {
           echo "Error: " . $e->getMessage();
           exit;
       }

       // Retrieve faculty ID
       $query = "SELECT id FROM faculty_details WHERE user_name = :username";
       $stmt = $dbo->conn->prepare($query);
       $stmt->bindParam(':username', $username);
       try {
           $stmt->execute();
           $result = $stmt->fetch(PDO::FETCH_ASSOC);
           $FID = $result['id'];
       } catch (PDOException $e) {
           echo "Error: " . $e->getMessage();
           exit;
       }

       // Retrieve course ID
       $query = "SELECT id FROM course_details WHERE code = :code";
       $stmt = $dbo->conn->prepare($query);
       $stmt->bindParam(':code', $code1);
       try {
           $stmt->execute();
           $result = $stmt->fetch(PDO::FETCH_ASSOC);
           $CID = $result['id'];
       } catch (PDOException $e) {
           echo "Error: " . $e->getMessage();
           exit;
       }

       // Retrieve session ID
       $query = "SELECT id FROM session_details WHERE term = :session1";
       $stmt = $dbo->conn->prepare($query);
       $stmt->bindParam(':session1', $session1);
       try {
           $stmt->execute();
           $result = $stmt->fetch(PDO::FETCH_ASSOC);
           $ses = $result['id'];
       } catch (PDOException $e) {
           echo "Error: " . $e->getMessage();
           exit;
       }

       // Insert into course allotment
       $query = "INSERT INTO course_allotment (faculty_id, course_id, session_id) VALUES (:fid, :cid, :sessid)";
       $stmt = $dbo->conn->prepare($query);
       $stmt->bindParam(':fid', $FID);
       $stmt->bindParam(':cid', $CID);
       $stmt->bindParam(':sessid', $ses);

       try {
           $stmt->execute();
           //echo "Course allotment successful";
       } catch (PDOException $e) {
           echo "Error: " . $e->getMessage();
           exit;
           
       }
       $query = "SELECT COUNT(student_id) FROM course_registration WHERE session_id = :sessid";
$stmt = $dbo->conn->prepare($query);
$stmt->bindParam(':sessid', $ses);
       try {
           $stmt->execute();
           $result = $stmt->fetch(PDO::FETCH_ASSOC);
           $n= $result['COUNT(student_id)'];
       } catch (PDOException $e) {
           echo "Error: " . $e->getMessage();
           exit;
       }
       $c = "INSERT INTO course_registration (student_id, course_id, session_id) VALUES (:sid, :cid, :sessid)";
$s = $dbo->conn->prepare($c);
if ($ses === 1) {
    for ($i = 1; $i <= 12; $i++) {
        for ($j = 0; $j < $n; $j++) {
            try {
                $s->execute(["sid" => $i, "cid" => $CID, "sessid" => 1]);
            } catch (PDOException $pe) {
                
            }
        }
    }
} else {
    for ($i = 12; $i <= 26; $i++) {
        for ($j = 0; $j < $n; $j++) {
            try {
                $s->execute(["sid" => $i, "cid" => $CID, "sessid" => 2]);
            } catch (PDOException $pe) {
                
            }
        }
    }
}
   
   }

   if (isset($_POST["action"]) && $_POST["action"] == "register") {
       register();
   }
?>
