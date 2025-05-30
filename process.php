<?php
include 'db.php' ;//include connection
if(isset($_POST['submit'])){
    $surname= $_POST['sname'];
    $firstname= $_POST['fname'];
    $othername= $_POST['other_name'];
    $passportphoto= $_POST['pass_port'];
    if (isset($_FILES['pass_port']) && $_FILES['pass_port']['error'] === 0) {
        $allowed_types = ['jpg', 'jpeg', 'png', 'gif'];
        $file_info = pathinfo($_FILES['pass_port']['name']);
        $file_ext = strtolower($file_info['extension']);
        $file_size = $_FILES['pass_port']['size'];
        $max_size = 2 * 1024 * 1024; // 2MB

        if (!in_array($file_ext, $allowed_types)) {
            echo "<script>alert('Invalid file type. Only JPG, JPEG, PNG, and GIF are allowed.');</script>";
            exit;
        }
        if ($file_size > $max_size) {
            echo "<script>alert('File size exceeds 2MB limit.');</script>";
            exit;
        }

        if (!is_dir('uploads')) {
            mkdir('uploads', 0777, true);
        }

        $passportphoto = uniqid('passport_', true) . '.' . $file_ext;
        $destination = 'uploads/' . $passportphoto;

        if (!move_uploaded_file($_FILES['pass_port']['tmp_name'], $destination)) {
            echo "<script>alert('Failed to upload file.');</script>";
            exit;
        }
    } else {
        echo "<script>alert('Please upload a passport photo.');</script>";
        exit;
    }

    $desktop= $_POST['desktop'];
    $graphic= $_POST['graphic'];
    $computer= $_POST['computer'];
    $web= $_POST['web'];
    $morning= $_POST['morning'];
    $afteernoon= $_POST['afternoon'];
    $evening= $_POST['evening'];
    $address= $_POST['address'];
    $studentphonenum= $_POST['phoneno'];
    $email= $_POST['mail'];
    $gender= $_POST['gender'];
    $nationality= $_POST['nationality'];
    $localgov= $_POST['lga'];
    $stateoforigin= $_POST['origin'];
    $maritalstatus= $_POST['marital_status'];
    $dateofbirth= $_POST['dob'];
    $parentphone= $_POST['parent_no'];
    $religion= $_POST['religion'];
    $education= $_POST['education_qualification'];
    $sickness= $_POST['sickness'];
    $audience = $_POST['audience'];  
    $others_specify= $_POST['others'];
    $declaration= $_POST['declaration'];


$sql="INSERT INTO  registration (surname, first_name, other_names, passport,    desktop_publishing,  graphics,   web_design,  morning, afternoon,   evening, address,phone_no,    e_mail,  nationality, local_govt, state_origin,    marital_status,  dob, parent_no,   religion,    education,   sickness, audience, others_specify,  declaration )
VALUES ('$surname','$firstname','$othername','$passportphoto','$desktop','$graphic','$web','$morning','$afteernoon','$evening','$address','$studentphonenum','$email','$nationality','$localgov','$stateoforigin','$maritalstatus','$dateofbirth','$parentphone','$religion','$education','$sickness','$audience','$others_specify','$declaration')";
    
    if(mysqli_query($con, $sql)){
    echo "<script> alert('registration successful'); </script>";
    echo "<script>window.location.href='index.php'; </script>";
    }


    else{
        echo "error" . mysql_error($con);
    }    

}


?>