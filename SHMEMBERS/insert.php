<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="../images/logo.png" type="image/x-icon" />
    <!-- Latest compiled and minified CSS -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://bootswatch.com/simplex/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
  <?php
    require_once('../header.php');
    ?>
  <div class="container">
  <?php
    //DB Connection
    require_once('../dbconnect.php');
    
    //Insert Data
    
    $stmt = $pdo->prepare("INSERT INTO shmembers (
        country,
        le_book,
        year_month,
        shareholder_sequence,
        shareholder_name,
        total_shareholding_lcy,
        percentage_of_shares,
        phone_number,
        feed_date,
        feed_status
            ) VALUES (
                :country, 
                :le_book,
                :year_month,
                :shareholder_sequence,
                :shareholder_name,
                :total_shareholding_lcy,
                :percentage_of_shares,
                :phone_number,
                :feed_date,
                :feed_status)");
    $stmt->bindParam(':country', $country);
    $stmt->bindParam(':le_book', $le_book);
    $stmt->bindParam(':year_month', $year_month);
    $stmt->bindParam(':shareholder_sequence', $shareholder_sequence);
    $stmt->bindParam(':shareholder_name', $shareholder_name);
    $stmt->bindParam(':total_shareholding_lcy', $total_shareholding_lcy);
    $stmt->bindParam(':percentage_of_shares', $percentage_of_shares);
    $stmt->bindParam(':phone_number', $phone_number);
    $stmt->bindParam(':feed_date', $feed_date);
    $stmt->bindParam(':feed_status', $feed_status);
    
    // insert one row
    $country = $_POST['country'];
    $le_book = $_POST['le_book'];
    $year_month = $_POST['year_month'];
    $shareholder_sequence = $_POST['shareholder_sequence'];
    $shareholder_name = $_POST['shareholder_name'];
    $total_shareholding_lcy = $_POST['total_shareholding_lcy'];
    $percentage_of_shares = $_POST['percentage_of_shares'];
    $phone_number = $_POST['phone_number'];
    $feed_date = $_POST['feed_date'];
    $feed_status = $_POST['feed_status'];
    $country = $_POST['country'];
    if(isset($_POST['country'])){
        $stmt->execute();
        ?>
        <br>
        <br>
        <br>
        <div class="container"> 
            <div class="alert alert-success" role="alert">
                Successfull. <br>
                <a href="index.php" class="btn btn-primary">Back to form</a>
            </div>
        </div>


        <?php
        // print_r($_POST);
    }
    

    //redirect back to index page
    //header("Location: index.php");
    // die();
?>
  </div>  
</body>
</html>

