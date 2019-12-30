<html>
<head>
    <title></title>
</head>
<body>
    <?php
        $email = $_REQUEST['inputEmail'];
        $pwd = $_REQUEST['inputPassword'];

        $servername = "localhost:3306";
        $username = "root";
        $password = "1091998";
        $dbname = "student";

        $conn = mysqli_connect($servername, $username, $password, $dbname);

        $q = "select * from admin_login where email='{$email}' and password='{$pwd}'";
        $r = mysqli_query($conn, $q);
        if(mysqli_num_rows($r)>0){
            header("location:admin.php");
        }
        else{
            header("location:login.php");
        }

    ?>
</body>
</html>