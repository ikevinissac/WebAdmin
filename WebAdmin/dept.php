<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/carousel/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="carousel.css" rel="stylesheet">
</head>
<body>
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
        <li class="nav-item">
          <a class="nav-link" href="login.php">Login</a>
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

        <?php 

        $url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $url_components = parse_url($url); 
        parse_str($url_components['query'], $params); 

        echo '
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-4">'.$params['name'].'</h1>
        ';

        $sql1 = 'SELECT hod FROM department where name="'.$params['name'].'"';
        $result1 = mysqli_query($conn, $sql1);

        if (mysqli_num_rows($result1) > 0) {
                while($row1 = mysqli_fetch_assoc($result1)) {
                    echo "<p>Head of the Department: ".$row1['hod']."
                        </p></div>
                    </div>
                    ";
                }
        }
        
        echo "<div class='container'><h3>Teachers in CSE<h3>";
        $sql2 = 'SELECT id, name, dept, subject FROM faculty where dept="'.$params['name'].'"';
        $result2 = mysqli_query($conn, $sql2);
                
        if (mysqli_num_rows($result2) > 0) {
            echo '<table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Dept</th>
                <th scope="col">Subject</th>
            </tr>
            </thead>
            <tbody>';
                while($row2 = mysqli_fetch_assoc($result2)) {
                    echo "
                    <tr>
                        <th scope='row'>".$row2['id']."</th>
                        <td>".$row2['name']."</td>
                        <td>".$row2['dept']."</td>
                        <td>".$row2['subject']."</td>
                    </tr>
                    ";
                }
            echo '</tbody></table></div>';
        }

        ?> 

</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>