<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
<?php 
    $server_name = "localhost";
    $db_username = "root";
    $db_password = ""; //Add Password
    $db_name = "selecao";
    $connection = mysqli_connect($server_name,$db_username,$db_password);
    $dbconfig = mysqli_select_db($connection, $db_name);

    if($dbconfig)
    {
        // echo "Database Connected";
    }
    else
    {
        echo '
            <div class="container">
                <div class="row">
                    <div class="col-md-8 mr-auto ml-auto text-center py-5 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h1 class="card-title bg-danger text-white">DataBase Connection Failed</h1>
                                <h2 class="card-title">DataBase Failure</h2>
                                <p class="card-text">Please check Your DataBase Connection.</p>
                                <a href="#" class="btn btn-secondary">:(</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        ';
    }
?>
</body>
</html>