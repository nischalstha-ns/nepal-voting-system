<?php
$conn = mysqli_connect('localhost', 'root', '', 'votersdatabase');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Avoid undefined index errors
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $dob = isset($_POST['dob']) ? $_POST['dob'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $mobile = isset($_POST['mobile']) ? $_POST['mobile'] : '';
    $gender = isset($_POST['gender']) ? $_POST['gender'] : '';
    $idtype = isset($_POST['idtype']) ? $_POST['idtype'] : '';
    $cnic = isset($_POST['cnic']) ? $_POST['cnic'] : '';
    $issue = isset($_POST['issue']) ? $_POST['issue'] : '';
    $expire = isset($_POST['expire']) ? $_POST['expire'] : '';
    $pass = isset($_POST['pass']) ? $_POST['pass'] : '';
    $cpass = isset($_POST['cpass']) ? $_POST['cpass'] : '';

    // Check if file is uploaded
    if (isset($_FILES['photo']) && $_FILES['photo']['error'] == 0) {
        $image_name = $_FILES['photo']['name'];
        $image_tmp = $_FILES['photo']['tmp_name'];
        $image_folder = "../VoterImg/" . basename($image_name);
    } else {
        $image_name = "";
        $image_tmp = "";
        $image_folder = "";
    }

    // Check password match
    if ($pass == $cpass) {
        if (!empty($image_tmp) && move_uploaded_file($image_tmp, $image_folder)) {
            // Secure password storage
            $hashed_pass = password_hash($pass, PASSWORD_DEFAULT);

            $insert = mysqli_query($conn, "INSERT INTO VOTERSREGISTRATION 
                (name, dob, email, mobile, gender, photo, idtype, cnic, issue, expire, pass, status, votes) 
                VALUES ('$name', '$dob', '$email', '$mobile', '$gender', '$image_name', '$idtype', '$cnic', '$issue', '$expire', '$hashed_pass', 0, 0)");

            if ($insert) {
                echo '
                <script>
                    alert("Registration successful!");
                    location="../Voter login Form/index.html";
                </script>
                ';
            } else {
                echo "Error: " . mysqli_error($conn);
            }
        } else {
            echo '
            <script>
                alert("File upload failed.");
            </script>
            ';
        }
    } else {
        echo '
        <script>
            alert("Passwords do not match. Please try again.");
        </script>
        ';
    }
}

mysqli_close($conn);
?>
