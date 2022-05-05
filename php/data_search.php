<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">  
        <title>Keresés</title>
        <link rel="shortcut icon" href="../img/favicon.jpg" type="image/x-icon">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        <script defer src="https://pro.fontawesome.com/releases/v5.10.0/js/all.js" integrity="sha384-G/ZR3ntz68JZrH4pfPJyRbjW+c0+ojii5f+GYiYwldYU69A+Ejat6yIfLSxljXxD" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="../css/products.css">
        <link rel="stylesheet" href="../css/footer.css">
    </head>
    <body>
    <nav class="navbar navbar-expand-lg bar sticky-top nav font-weight-bolder m-auto">
        <a class="navbar-brand a" href="fooldal.php">Főoldal</a>
        <a class="navbar-brand a" href="aruhazak.php">Áruházak</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon icon"></span>
        </button>
        <span class="navbar-text navbar-nav ml-auto">Találja meg az önnek megfelelő árut</span>
    </nav>
    <center>
        <h1>Keress a boltok termékei között</h1>
        <form action="" method="POST">
            <input type="text" name="id" placeholder="Keress rá a kívánt termékre"><br>
            <input type="submit" name="search" id="button" value="Keresés">
        </form>

<?php 
$connection = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connection, 'vasarlas');

if(isset($_POST['search']))
{
    $id = $_POST['id'];
    $query = "SELECT termék.termekNev, bolt_cég.boltNev, település.telepulesNev, ar
    FROM település
    INNER JOIN bolt ON bolt.telepulesId = település.telepulesId
    INNER JOIN bolt_cég ON bolt_cég.btId = bolt.btId
    INNER JOIN `bolt-termék` ON `bolt-termék`.boltId = bolt.boltId
    INNER JOIN termék ON `bolt-termék`.termekId = termék.termekId
    WHERE termekNev LIKE '%$id%'";
    $query_run = mysqli_query($connection, $query);
    
    while($row = mysqli_fetch_array($query_run))
    {
        ?>
        <form action="" method="POST">
            <input readonly id="result" type="text" name="termekNev" value="<?php echo $row['termekNev'] ?>"> 
            <input readonly id="result" type="text" name="boltNev" value="<?php echo $row['boltNev'] ?>"> 
            <input readonly id="result" type="text" name="telepulesNev" value="<?php echo $row['telepulesNev'] ?>"> 
            <input readonly id="result" type="text" name="ar" value="<?php echo $row['ar'] ?>">
        </form>
        <?php
    }
}

?>            
    </center>
<script 
    src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF"
    crossorigin="anonymous"
></script>
<script 
    src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" 
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" 
    crossorigin="anonymous"
></script>
</body>
</html>

