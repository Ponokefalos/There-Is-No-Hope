<!DOCTYPE html>


<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Προσθήκη νέου χρήστη</title>

    <link href="../css/bootstrap.min.css" rel="stylesheet"/>
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/navbar.css" rel="stylesheet">

    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <link href="../css/globalShadowBoxStyle.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="mainstyle.css">

    <?php
    include('includes/header.php');
    include('includes/navbar.php');
    include('RegisterConnectToDB.php');

    ?>

</head>

<body style="background-color:#D7D7D7">
<br>
<br>
<br>
<br>

<div id="conteinerMarketing" class="container marketing shadowStyle">

    <div class="head_title">

        <h2><i> Προσθήκη νέου χρήστη</i></h2>
        <hr class="featurette-divider">

    </div>

    <div class="container marketing">
        <form role="form" action="adminAddUser.php" method="post" enctype="multipart/form-data">
            <div class="form-group" id="personal-info">
                <label>Προσωπικά Στοιχεία</label>

                <div class="form-group" id="userType">
                    <br>
                    <label for="inputUserType">Τύπος χρήστη</label>
                    <input type="number" name="userType" class="form-control" id="inputUserType"
                           placeholder="0 για admin, 1 για απλό χρήστη, 2 για ξενοδόχο">
                </div>

                <div class="form-group" id="sex">
                    <label>Φύλο</label>
                    <label class="radio-inline">
                        <input type="radio" name="sexMale" id="male" value="1"> Άρρεν
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="sexFemale" id="female" value="1"> Θύλη
                    </label>
                </div>
                <div class="form-group" id="name">
                    <input type="text" name="inputName" class="form-control" id="inputname" placeholder="Όνομα">
                </div>
                <div class="form-group" id="surname">
                    <input type="text" name="inputSurname" class="form-control" id="inputsurname" placeholder="Επίθετο">
                </div>
                <div class="form-group" id="dateofbirth">
                    <label for="inputdate">Ημερομηνία Γέννησης</label>
                    <input type="date" name="birthDate" class="form-control" id="inputdate">
                </div>
                <div class="form-group" id="email">
                    <label for="inputdate">Ηλεκτρονική Διεύθυνση</label>
                    <input type="email" name="email" class="form-control" id="inputemail"
                           placeholder="Ηλεκτρονική Διεύθυνση">
                </div>
            </div>

            <div class="form-group" id="companyinfo">
                <label>Στοιχεία Εταιρείας</label>

                <div class="form-group" id="companyname">
                    <input type="text" name="companyName" class="form-control" id="inputcompanyname"
                           placeholder="Επωνυμία Εταιρείας">
                </div>
            </div>

            <div class="form-group" id="options">
                <div class="form-group" id="newsletter">
                    <label for="input-newsletter">Ενημερωτικό Δελτίο</label>
                    <input type="checkbox" name="newsletter" id="input-newsletter">
                </div>
            </div>

            <div class="form-group" id="user_name">
                <label for="inputUsername">Username</label>
                <input type="text" name="username" class="form-control" id="user_name" placeholder="Username">
            </div>

            <div class="form-group" id="password">
                <label for="input-pswd">Κωδικός Πρόσβασης</label>
                <input type="password" name="password" class="form-control" id="input-pswd">

                <label for="input-confirm-pswd">Επιβεβαίωση Κωδικού</label>
                <input type="password" name="confirmPassword" class="form-control" id="input-confirm-pswd">
            </div>
            <div class="form-group" id="file">
                <label for="input-photo">Φωτογραφία προφίλ</label>
                <input type="file" name="image" id="image"/>

            </div>


            <div class="form-group" id="extra">
                <div class="form-group" id="hoteladmin">
                    <label for="input-hotel-admin">Είστε Διαχειριστής κάποιου Ξενοδοχείου:</label>
                    <input type="checkbox" name="hotelAdmin" id="input-hotel-admin">
                </div>
            </div>
            <button type="submit" name="adminRegisterUser" class="btn btn-primary">Εγγραφή</button>
        </form>
    </div>
</div>


<?php
include('includes/footer.php');
?>
</body>
</html>

<?php

if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['adminRegisterUser'])) {

    $errorState = 0;
    $femaleSex = 0;
    $maleSex = 0;

    $maleSex = mysqli_real_escape_string($link, $_POST['sexMale']);
    $userType = mysqli_real_escape_string($link, $_POST['userType']);
    $femaleSex = mysqli_real_escape_string($link, $_POST['sexFemale']);
    $name = mysqli_real_escape_string($link, $_POST['inputName']);
    $surname = mysqli_real_escape_string($link, $_POST['inputSurname']);
    $birthDate = mysqli_real_escape_string($link, $_POST['birthDate']);
    $eMail = mysqli_real_escape_string($link, $_POST['email']);
    $companyName = mysqli_real_escape_string($link, $_POST['companyName']);
    $newsletter = mysqli_real_escape_string($link, $_POST['newsletter']);
    $username = mysqli_real_escape_string($link, $_POST['username']);
    $password = mysqli_real_escape_string($link, $_POST['password']);
    $confirmPassword = mysqli_real_escape_string($link, $_POST['confirmPassword']);
    $hotelAdmin = mysqli_real_escape_string($link, $_POST['hotelAdmin']);
    $file = $_FILES['image']['tmp_name'];

    if (empty($file)) {
        $errorState = 1;
    } else {
        $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
        $image_name = addslashes($_FILES['image']['name']);
        $image_size = getimagesize($_FILES['image']['tmp_name']);
    }

    if (empty($name) || empty($surname) || (empty($birthDate)) || empty($eMail) || empty($companyName) || empty($username) || empty($password) || empty($confirmPassword || empty($userType))) {
        $errorState = 1;
    }

    if (empty($image)) {
        $errorState = 1;
    }

    $gender = 0;

    if ((empty($maleSex) && empty($femaleSex)) || ($maleSex == 1 && $femaleSex == 1)) {
        $errorState = 1;
    } else if ($maleSex == 1) {
        $gender = 0;
    } else {
        $gender = 1;
    }

    if (empty($newsletter)) {
        settype($newsletter, "integer");
        $newsletter = 0;
    } else {
        settype($newsletter, "integer");
        $newsletter = 1;
    }

    if (empty($hotelAdmin)) {
        settype($hotelAdmin, "integer");
        $hotelAdmin = 0;
    } else {
        settype($hotelAdmin, "integer");
        $hotelAdmin = 1;
    }

    if ($password != $confirmPassword) {
        $errorState = 1;
    }

    if (checkIfUserNameExists($username, $link)) {
        $errorState = 2;
    }

    if (checkIfUserEmailExists($eMail, $link)) {
        $errorState = 4;
    }

    if ($image_size == FALSE) {
        $errorState = 3;
    }
    if ($errorState == 0) {
        $password = md5($password);
        saveNewUserOnDatabase($userType, $name, $surname, $birthDate, $eMail, $companyName, $newsletter, $password, $username, $gender, $link, $image);
        header("Location: admin.php");
        exit();

    } else if ($errorState == 1) {
        showAlertDialog("Παρακαλώ συμπληρώστε κατάλληλα όλα τα πεδία.");
    } else if ($errorState == 2) {
        showAlertDialog("To username υπάρχει. Δοκιμάστε διαφορετικό username.");
    } else if ($errorState == 3) {
        showAlertDialog("Το αρχείο που επιλέξατε δεν είναι εικόνα. Παρακαλώ επιλέξτε μια εικόνα");
    } else if ($errorState == 4) {
        showAlertDialog("To e-mail υπάρχει. Δοκιμάστε διαφορετικό e-mail.");
    }

}
?>

