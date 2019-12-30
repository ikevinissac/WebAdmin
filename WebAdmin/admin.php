<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/carousel/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body class="container">
<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="#">Karunya</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>
    
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Departments
            </a>
            <?php  
                $servername = "localhost:3306";
                $username = "root";
                $password = "1091998";
                $dbname = "webadmin";

                $conn = mysqli_connect($servername, $username, $password, $dbname);

                $sql = "SELECT name FROM department";
                $result = mysqli_query($conn, $sql);
                
                if (mysqli_num_rows($result) > 0) {
                    echo '<div class="dropdown-menu" aria-labelledby="navbarDropdown">';
                    while($row = mysqli_fetch_assoc($result)) {
                        echo "<a class='dropdown-item' href='./dept.php?name={$row['name']}'>".$row['name']."</a>";
                    }
                    echo '</div>';
                }
            ?>
            
        </li>
      </ul>

    </div>
  </nav>
</header>

    <br><br><br><br>
    <section class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <form method="POST" class="card-body">
                    <b>Add Department</b>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Head of the Dept</label>
                        <input name="hod" type="text" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword2">Department</label>
                        <input name="dept" type="text" class="form-control" id="exampleInputPassword2">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

                    <?php
                        $dept = $_REQUEST["dept"];
                        $hod = $_REQUEST["hod"];
                        if($dept != null && $hod != null){
                            $sql = "INSERT INTO department (name, hod) VALUES ('{$dept}', '{$hod}')";
                        
                            if (mysqli_query($conn, $sql)) {
                                echo "New record created successfully";
                                header("Location: admin.php");
                                exit;
                            } else {
                                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                            }
                        }
                        
                    ?>

                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <form method="POST" class="card-body">
                    <b>Add Faculty</b>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input name="teacher" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Department</label>
                        <input name="dept" type="text" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword2">Subject</label>
                        <input name="sub" type="text" class="form-control" id="exampleInputPassword2">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

                    <?php
                        $dept = $_REQUEST["dept"];
                        $teacher = $_REQUEST["teacher"];
                        $sub = $_REQUEST["sub"];
                        
                        if($dept != null && $teacher != null && $sub != null){
                            $sql2 = "INSERT INTO faculty (name, dept, subject) VALUES ('{$teacher}', '{$dept}', '{$sub}')";
                        
                            if (mysqli_query($conn, $sql2)) {
                                echo "New record created successfully";
                                header("Location: admin.php");
                                exit;
                            } else {
                                echo "Error: " . $sql2 . "<br>" . mysqli_error($conn);
                            }
                        }
                        
                    ?>

                </div>
            </div>
        </div>
        <br><br>
        <div class="card">
        <div class="card-body">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Insert</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Update</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Delete</a>
            </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <form method="POST">
                    <b>Upload Post</b>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Heading</label>
                        <input name="heading" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Sub Heading</label>
                        <input name="subhead" type="text" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword2">Image</label>
                        <input name="image" type="text" class="form-control" id="exampleInputPassword2">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Upload Post</button>
                    </form>

                    <?php
                        $heading = $_REQUEST["heading"];
                        $subhead = $_REQUEST["subhead"];
                        $image = $_REQUEST["image"];

                        if($heading != "" && $subhead != "" && $image != ""){
                            $sql3 = "INSERT INTO body_table (heading, subheading, image) VALUES ('{$heading}', '{$subhead}', '{$image}')";
                        
                        
                            if (mysqli_query($conn, $sql3)) {
                                echo "New record created successfully";
                                header("Location: admin.php");
                            } else {
                                echo "Error: " . $sql3 . "<br>" . mysqli_error($conn);
                            }
                        }
                        
                    ?>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
            <form method="POST">
                    <b>Update Post</b>
                    <div class="form-group">
                        <label for="exampleInputEmail1">ID</label>
                        <input name="id" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Heading</label>
                        <input name="heading" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Sub Heading</label>
                        <input name="subhead" type="text" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword2">Image</label>
                        <input name="image" type="text" class="form-control" id="exampleInputPassword2">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Update Post</button>
                    </form>

                    <?php
                        $id = $_REQUEST["id"];
                        $heading = $_REQUEST["heading"];
                        $subhead = $_REQUEST["subhead"];
                        $image = $_REQUEST["image"];

                        if($heading != null){
                            $sql4 = "UPDATE body_table SET heading='{$heading}' WHERE id={$id}";
                            if (mysqli_query($conn, $sql4)) {
                                echo "New record created successfully";
                                header("Location: admin.php");
                                exit;
                            } else {
                                echo "Error: " . $sql4 . "<br>" . mysqli_error($conn);
                            }
                        }else if($subhead != null){
                            $sql4 = "UPDATE body_table SET subheading='{$subhead}' WHERE id={$id}";
                            if (mysqli_query($conn, $sql4)) {
                                echo "New record created successfully";
                                header("Location: admin.php");
                                exit;
                            } else {
                                echo "Error: " . $sql4 . "<br>" . mysqli_error($conn);
                            }
                        }else if($image != null){
                            $sql4 = "UPDATE body_table SET image='{$image}' WHERE id={$id}";
                            if (mysqli_query($conn, $sql4)) {
                                echo "New record created successfully";
                                header("Location: admin.php");
                                exit;
                            } else {
                                echo "Error: " . $sql4 . "<br>" . mysqli_error($conn);
                            }
                        }else{
                            echo "Error: " . $sql4 . "<br>" . mysqli_error($conn);
                        }
                                        
                    ?>
            </div>
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
            <form method="POST">
                    <b>Delete Post</b>
                    <div class="form-group">
                        <label for="exampleInputEmail1">ID</label>
                        <input name="id" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>    
                    <button type="submit" class="btn btn-danger">Delete Post</button>
                    </form>

                    <?php
                        $id = $_REQUEST["id"];
                       
                        $sql5 = "DELETE FROM body_table WHERE id={$id}";

                        if (mysqli_query($conn, $sql5)) {
                            echo "Record deleted successfully";
                        } else {
                            echo "Error deleting record: " . mysqli_error($conn);
                        }
                    ?>

            </div>
            </div>
        </div>
                
                </div>
        <br>
        <div class="card">
            <div class="card-body">
            <h3>Posts</h3>
            <?php
            $sql1 = 'SELECT heading, subheading, image FROM body_table';
            $result1 = mysqli_query($conn, $sql1);

            if (mysqli_num_rows($result1) > 0) {
                    while($row1 = mysqli_fetch_assoc($result1)) {
                        echo '
                            <div class="row featurette">
                            <div class="col-md-7 order-md-2">
                            <h2 class="featurette-heading">'.$row1['heading'].'</h2>
                            <p class="lead">'.$row1['subheading'].'</p>
                            </div>
                            <div class="col-md-5 order-md-1">
                            <img class="" width="100%" height="100%" src='.$row1['image'].'>
                            </div>
                            </div>
                        
                            <hr class="featurette-divider">
                        ';
                    }
            }
        ?>
        </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>