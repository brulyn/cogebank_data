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
    
    $stmt = $pdo->prepare("INSERT INTO fraudtxn (
        country,
        le_book,
        business_date,
        fraud_by,
        vision_ouc,
        fraud_sequence,
        fraud_scheme,
        description_of_fraud,
        fraud_txn_status,
        currency,
        fraud_amount_fcy,
        fraud_amount_lcy,
        amount_paid_fcy,
        amount_paid_lcy,
        adopt_to_avoid,
        feed_date,
        feed_status
            ) VALUES (
                :country, 
                :le_book,
                :business_date,
                :fraud_by,
                :vision_ouc,
                :fraud_sequence,
                :fraud_scheme,
                :description_of_fraud,
                :fraud_txn_status,
                :currency,
                :fraud_amount_fcy,
                :fraud_amount_lcy,
                :amount_paid_fcy,
                :amount_paid_lcy,
                :adopt_to_avoid,
                :feed_date,
                :feed_status)");
    $stmt->bindParam(':country', $country);
    $stmt->bindParam(':le_book', $le_book);
    $stmt->bindParam(':business_date', $business_date);
    $stmt->bindParam(':fraud_by', $fraud_by);
    $stmt->bindParam(':vision_ouc', $vision_ouc);
    $stmt->bindParam(':fraud_sequence', $fraud_sequence);
    $stmt->bindParam(':fraud_scheme', $fraud_scheme);
    $stmt->bindParam(':description_of_fraud', $description_of_fraud);
    $stmt->bindParam(':fraud_txn_status', $fraud_txn_status);
    $stmt->bindParam(':currency', $currency);
    $stmt->bindParam(':fraud_amount_fcy', $fraud_amount_fcy);
    $stmt->bindParam(':fraud_amount_lcy', $fraud_amount_lcy);
    $stmt->bindParam(':amount_paid_fcy', $amount_paid_fcy);
    $stmt->bindParam(':amount_paid_lcy', $amount_paid_lcy);
    $stmt->bindParam(':adopt_to_avoid', $adopt_to_avoid);
    $stmt->bindParam(':feed_date', $feed_date);
    $stmt->bindParam(':feed_status', $feed_status);
    
    // insert one row
    $country = $_POST['country'];
    $le_book = $_POST['le_book'];
    $business_date = $_POST['business_date'];
    $fraud_by = $_POST['fraud_by'];
    $vision_ouc = $_POST['vision_ouc'];
    $fraud_sequence = $_POST['fraud_sequence'];
    $fraud_scheme = $_POST['fraud_scheme'];
    $description_of_fraud = $_POST['description_of_fraud'];
    $fraud_txn_status = $_POST['fraud_txn_status'];
    $currency = $_POST['currency'];
    $fraud_amount_fcy = $_POST['fraud_amount_fcy'];
    $fraud_amount_lcy = $_POST['fraud_amount_lcy'];
    $amount_paid_fcy = $_POST['amount_paid_fcy'];
    $amount_paid_lcy = $_POST['amount_paid_lcy'];
    $adopt_to_avoid = $_POST['adopt_to_avoid'];
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

