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
    <title>Suspicious Transaction</title>
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
    
    $stmt = $pdo->prepare("INSERT INTO suspitxn (
        country,
        le_book,
        business_date,
        fraud_report_type,
        fraud_sequence,
        vision_ouc,
        account_number,
        surname,
        first_name,
        middle_name,
        postal_address,
        date_of_birth,
        passport_number,
        occupation,
        identity_verified,
        relationship_report_entity,
        action_taken,
        resignation_date,
        transaction_date,
        transaction_narration,
        currency,
        fraud_amount_fcy,
        fraud_amount_lcy,
        amount_paid_fcy,
        amount_paid_lcy,
        source_of_fund,
        destination_fund,
        basis_of_suspicion,
        material_impact,
        impact_description,
        authority,
        how_notified,
        other_action,
        reporting_officer_name,
        reporting_officer_position,
        feed_date,
        feed_status
            ) VALUES (
                :country,
                :le_book,
                :business_date,
                :fraud_report_type,
                :fraud_sequence,
                :vision_ouc,
                :account_number,
                :surname,
                :first_name,
                :middle_name,
                :postal_address,
                :date_of_birth,
                :passport_number,
                :occupation,
                :identity_verified,
                :relationship_report_entity,
                :action_taken,
                :resignation_date,
                :transaction_date,
                :transaction_narration,
                :currency,
                :fraud_amount_fcy,
                :fraud_amount_lcy,
                :amount_paid_fcy,
                :amount_paid_lcy,
                :source_of_fund,
                :destination_fund,
                :basis_of_suspicion,
                :material_impact,
                :impact_description,
                :authority,
                :how_notified,
                :other_action,
                :reporting_officer_name,
                :reporting_officer_position,
                :feed_date,
                :feed_status)");
    $stmt->bindParam(':country', $country);
    $stmt->bindParam(':le_book', $le_book);
    $stmt->bindParam(':business_date', $business_date);
    $stmt->bindParam(':fraud_report_type', $fraud_report_type);
    $stmt->bindParam(':fraud_sequence', $fraud_sequence);
    $stmt->bindParam(':vision_ouc', $vision_ouc);
    $stmt->bindParam(':account_number', $account_number);
    $stmt->bindParam(':surname', $surname);
    $stmt->bindParam(':first_name', $first_name);
    $stmt->bindParam(':middle_name', $middle_name);
    $stmt->bindParam(':postal_address', $postal_address);
    $stmt->bindParam(':date_of_birth', $date_of_birth);
    $stmt->bindParam(':passport_number', $passport_number);
    $stmt->bindParam(':occupation', $occupation);
    $stmt->bindParam(':identity_verified', $identity_verified);
    $stmt->bindParam(':relationship_report_entity', $relationship_report_entity);
    $stmt->bindParam(':action_taken', $action_taken);
    $stmt->bindParam(':resignation_date', $resignation_date);
    $stmt->bindParam(':transaction_date', $transaction_date);
    $stmt->bindParam(':transaction_narration', $transaction_narration);
    $stmt->bindParam(':currency', $currency);
    $stmt->bindParam(':fraud_amount_fcy', $fraud_amount_fcy);
    $stmt->bindParam(':fraud_amount_lcy', $fraud_amount_lcy);
    $stmt->bindParam(':amount_paid_fcy', $amount_paid_fcy);
    $stmt->bindParam(':amount_paid_lcy', $amount_paid_lcy);
    $stmt->bindParam(':source_of_fund', $source_of_fund);
    $stmt->bindParam(':destination_fund', $destination_fund);
    $stmt->bindParam(':basis_of_suspicion', $basis_of_suspicion);
    $stmt->bindParam(':material_impact', $material_impact);
    $stmt->bindParam(':impact_description', $impact_description);
    $stmt->bindParam(':authority', $authority);
    $stmt->bindParam(':how_notified', $how_notified);
    $stmt->bindParam(':other_action', $other_action);
    $stmt->bindParam(':reporting_officer_name', $reporting_officer_name);
    $stmt->bindParam(':reporting_officer_position', $reporting_officer_position);
    $stmt->bindParam(':feed_date', $feed_date);
    $stmt->bindParam(':feed_status', $feed_status);
    
    // insert one row
    $country = $_POST['country'];
    $le_book = $_POST['le_book'];
    $business_date = $_POST['business_date'];
    $fraud_report_type = $_POST['fraud_report_type'];
    $fraud_sequence = $_POST['fraud_sequence'];
    $vision_ouc = $_POST['vision_ouc'];    
    $account_number = $_POST['account_number'];
    $surname = $_POST['surname'];
    $first_name = $_POST['firstname'];
    $middle_name = $_POST['middle_name'];
    $postal_address = $_POST['postal_address'];
    $date_of_birth = $_POST['date_of_birth'];
    $passport_number = $_POST['passport_number'];
    $occupation = $_POST['occupation'];
    $identity_verified = $_POST['identity_verified'];
    $relationship_report_entity = $_POST['relationship_report_entity'];
    $action_taken = $_POST['action_taken'];
    $resignation_date = $_POST['resignation_date'];
    $transaction_date = $_POST['transaction_date'];
    $transaction_narration = $_POST['transaction_narration'];
    $currency = $_POST['currency'];
    $fraud_amount_fcy = $_POST['fraud_amount_fcy'];
    $fraud_amount_lcy = $_POST['fraud_amount_lcy'];
    $amount_paid_fcy = $_POST['amount_paid_fcy'];
    $amount_paid_lcy = $_POST['amount_paid_lcy'];
    $source_of_fund = $_POST['source_of_fund'];
    $destination_fund = $_POST['destination_fund'];
    $basis_of_suspicion = $_POST['basis_of_suspicion'];
    $material_impact = $_POST['material_impact'];
    $impact_description = $_POST['impact_description'];
    $authority = $_POST['authority'];
    $how_notified = $_POST['how_notified'];
    $other_action = $_POST['other_action'];
    $reporting_officer_name = $_POST['reporting_officer_name'];
    $reporting_officer_position = $_POST['reporting_officer_position'];
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

