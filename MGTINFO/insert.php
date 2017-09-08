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
    <title>MGT INFO</title>
</head>
<body>
<div class="container">
<?php
    //DB Connection
    require_once('../dbconnect.php');
    
    //Insert Data
    
    $stmt = $pdo->prepare("INSERT INTO mgtinfo (
        country,
        le_book,
        year_month,
        staff_id,
        mgt_member_type,
        executive_flag,
        company_name_01,
        company_name_02,
        company_name_03,
        broad_committee_01,
        broad_committee_02,
        broad_committee_03,
        broad_committee_04,
        mgt_committee_01,
        mgt_committee_02,
        mgt_committee_03,
        mgt_committee_04,
        feed_date,
        feed_status
            ) VALUES (
                :country, 
                :le_book,
                :year_month,
                :staff_id,
                :mgt_member_type,
                :executive_flag,
                :company_name_01,
                :company_name_02,
                :company_name_03,
                :broad_committee_01,
                :broad_committee_02,
                :broad_committee_03,
                :broad_committee_04,
                :mgt_committee_01,
                :mgt_committee_02,
                :mgt_committee_03,
                :mgt_committee_04,
                :feed_date,
                :feed_status)");
    $stmt->bindParam(':country', $country);
    $stmt->bindParam(':le_book', $le_book);
    $stmt->bindParam(':year_month', $year_month);
    $stmt->bindParam(':staff_id', $staff_id);
    $stmt->bindParam(':mgt_member_type', $mgt_member_type);
    $stmt->bindParam(':executive_flag', $executive_flag);
    $stmt->bindParam(':company_name_01', $company_name_01);
    $stmt->bindParam(':company_name_02', $company_name_02);
    $stmt->bindParam(':company_name_03', $company_name_03);
    $stmt->bindParam(':broad_committee_01', $broad_committee_01);
    $stmt->bindParam(':broad_committee_02', $broad_committee_02);
    $stmt->bindParam(':broad_committee_03', $broad_committee_03);
    $stmt->bindParam(':broad_committee_04', $broad_committee_04);
    $stmt->bindParam(':mgt_committee_01', $mgt_committee_01);
    $stmt->bindParam(':mgt_committee_02', $mgt_committee_02);
    $stmt->bindParam(':mgt_committee_03', $mgt_committee_03);
    $stmt->bindParam(':mgt_committee_04', $mgt_committee_04);
    $stmt->bindParam(':feed_date', $feed_date);
    $stmt->bindParam(':feed_status', $feed_status);
    
    // insert one row
    $country = $_POST['country'];
    $le_book = $_POST['le_book'];
    $year_month = $_POST['year_month'];
    $staff_id = $_POST['staff_id'];
    $mgt_member_type = $_POST['mgt_member_type'];
    $executive_flag = $_POST['executive_flag'];
    $company_name_01 = $_POST['company_name_01'];
    $company_name_02 = $_POST['company_name_02'];
    $company_name_03 = $_POST['company_name_03'];
    $broad_committee_01 = $_POST['broad_committee_01'];
    $broad_committee_02 = $_POST['broad_committee_02'];
    $broad_committee_03 = $_POST['broad_committee_03'];
    $broad_committee_04 = $_POST['broad_committee_04'];
    $mgt_committee_01 = $_POST['mgt_committee_01'];
    $mgt_committee_02 = $_POST['mgt_committee_02'];
    $mgt_committee_03 = $_POST['mgt_committee_03'];
    $mgt_committee_04 = $_POST['mgt_committee_04'];
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



