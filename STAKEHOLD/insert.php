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
    
    $stmt = $pdo->prepare("INSERT INTO stakehold (
        country,
        le_book,
        year_month,
        postal_address,
        physical_address,
        telephone,
        email,
        fax,
        registration_date,
        commencement_date,
        date_of_first_license,
        last_license_renewal,
        license_number,
        feed_date,
        feed_status
            ) VALUES (
                :country,
                :le_book,
                :year_month,
                :postal_address,
                :physical_address,
                :telephone,
                :email,
                :fax,
                :registration_date,
                :commencement_date,
                :date_of_first_license,
                :last_license_renewal,
                :license_number,
                :feed_date,
                :feed_status)");
    $stmt->bindParam(':country', $country);
    $stmt->bindParam(':le_book', $le_book);
    $stmt->bindParam(':year_month', $year_month);
    $stmt->bindParam(':postal_address', $postal_address);
    $stmt->bindParam(':physical_address', $physical_address);
    $stmt->bindParam(':telephone', $telephone);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':fax', $fax);
    $stmt->bindParam(':registration_date', $registration_date);
    $stmt->bindParam(':commencement_date', $commencement_date);
    $stmt->bindParam(':date_of_first_license', $date_of_first_license);
    $stmt->bindParam(':last_license_renewal', $last_license_renewal);
    $stmt->bindParam(':license_number', $license_number);
    $stmt->bindParam(':feed_date', $feed_date);
    $stmt->bindParam(':feed_status', $feed_status);
    
    // insert one row
    $country = $_POST['country'];
    $le_book = $_POST['le_book'];
    $year_month = $_POST['year_month'];
    $postal_address = $_POST['postal_address'];
    $physical_address = $_POST['physical_address'];
    $telephone = $_POST['telephone'];
    $email = $_POST['email'];
    $fax = $_POST['fax'];
    $registration_date = $_POST['registration_date'];
    $commencement_date = $_POST['commencement_date'];
    $date_of_first_license = $_POST['date_of_first_license'];
    $last_license_renewal = $_POST['last_license_renewal'];
    $license_number = $_POST['license_number'];
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

