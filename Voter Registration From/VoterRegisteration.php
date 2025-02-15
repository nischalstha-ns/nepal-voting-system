<?php
// Connect to the database
$conn = mysqli_connect('localhost', 'root', 'your_password', 'voterdatabase');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve form data
    $name = $_POST['name'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $gender = $_POST['gender'];
    $image = $_FILES['photo']['name'];
    $tmp_name = $_FILES['photo']['tmp_name'];
    $idtype = $_POST['idtype'];
    $cnic = $_POST['cnic'];
    $issue = $_POST['issue'];
    $expire = $_POST['expire'];
    $pass = $_POST['pass'];
    $cpass = $_POST['cpass'];

    // Check if passwords match
    if ($pass == $cpass) {
        // Move the uploaded image to the specified directory
        if (move_uploaded_file($tmp_name, "../VoterImage/$image")) {
            // Insert the data into the database
            $insert = mysqli_query($conn, "INSERT INTO VOTERREGISTRATION(name, dob, email, gender, photo, idtype, cnic, issue, expire, pass, cpass, status, votes) 
                                          VALUES ('$name', '$dob', '$email', '$mobile', '$image', '$idtype', '$cnic', '$issue', '$expire', '$pass', '$cpass', 0, 0)");

            echo '
            <script>
            alert("Form submitted successfully!");
            location="../Voter login Form/index.html";  
            </script>
            ';
        } else {
            echo '<script>alert("Error uploading the image!");</script>';
        }
    } else {
        echo '
        <script>
        alert("Password and Confirm password do not match!");
        </script>
        ';
    }
}
?>

<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <title>Responsive Registration Form</title> 
</head>
<body>
    <div class="container">
        <header>Registration Form</header>

        <form action="" method="post" enctype="multipart/form-data">
            <div class="form first">
                <div class="details personal">
                    <span class="title" style="color: green;">Personal Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Full Name <span style="color: red;">*</span></label>
                            <input type="text" placeholder="Enter your name" name="name" required>
                        </div>

                        <div class="input-field">
                            <label>Date of Birth <span style="color: red;">*</span></label>
                            <input type="date" placeholder="Enter birth date" name="dob" required>
                        </div>

                        <div class="input-field">
                            <label>Email <span style="color: gray; font-size:10px;">(optional)</span></label>
                            <input type="text" placeholder="Enter your email" name="email">
                        </div>

                        <div class="input-field">
                            <label>Mobile Number <span style="color: red;">*</span></label>
                            <input type="number" placeholder="Enter mobile number" name="mobile" required>
                        </div>

                        <div class="input-field">
                            <label>Gender <span style="color: red;">*</span></label>
                            <select required name="gender">
                                <option disabled selected>Select gender</option>
                                <option>Male</option>
                                <option>Female</option>
                                <option>Others</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Upload Your Image  <span style="color: red;">*</span></label>
                            <input type="file" name="photo">
                        </div>
                    </div>
                </div>

                <div class="details ID">
                    <span class="title" style="color: green;">Identity Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>ID Type <span style="color: gray; font-size:10px;">(optional)</span></label>
                            <input type="text" placeholder="Enter ID type" name="idtype">
                        </div>

                        <div class="input-field">
                            <label>Cnic Number <span style="color: red;">*</span></label>
                            <input type="number" placeholder="Enter ID number" name="cnic" required>
                        </div>

                        <div class="input-field">
                            <label>Issued Date <span style="color: red;">*</span></label>
                            <input type="date" placeholder="Enter your issued date" name="issue" required>
                        </div>

                        <div class="input-field">
                            <label>Expiry Date <span style="color: gray; font-size:10px;">(optional)</span></label>
                            <input type="date" placeholder="Enter expiry date" name="expire">
                        </div>

                        <div class="input-field">
                            <label>Create Password  <span style="color: red;">*</span></label>
                            <input type="password" placeholder="Create Password" name="pass" required>
                        </div>

                        <div class="input-field">
                            <label>Confirm Password <span style="color: red;">*</span></label>
                            <input type="password" placeholder="Confirm Password" name="cpass" required>
                        </div>
                    </div>

                    <button class="submit" type="submit">
                        <span class="btnText">Submit</span>
                        <i class="uil uil-navigator"></i>
                    </button>
                </div> 
            </div>
        </form>
    </div>

    <script src="script.js"></script>
</body>
</html>
