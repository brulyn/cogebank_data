<?php

?>
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
    <title>Stakehold Details</title>
</head>
<body>
<?php
    require_once('../header.php');
    ?>
    <div class="container">
        <h1>Sharehold Details</h1>

        <div class="card">
            <div class="card-body">
            <form action="insert.php" method="post">
                <div class="row form-group">
                    <div class="col col-md-4">
                        <label for="country">Country</label>
                        <input type="text" class="form-control" maxlength="2" value="RW" required="true" name="country">
                    </div>
                    <div class="col col-md-4">
                        <label for="le_book">LE_Book</label>
                        <input type="text" class="form-control" maxlength="3" value="030" required="true" name="le_book">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-4">
                        <label for="year_month">Year-Month</label>
                        <input type="number" class="form-control" maxlength="6" required="true" name="year_month">
                    </div>
                    
                    <div class="col col-md-4">
                        <label for="postal_address">Postal Address</label>
                        <input type="text" class="form-control" maxlength="6" required="true" name="postal_address">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-4">
                        <label for="physical_address">Physical Address</label>
                        <input type="text" class="form-control" maxlength="40" required="true" name="physical_address">
                    </div>
                    <div class="col col-md-4">
                        <label for="telephone">Telephone</label>
                        <input type="number" class="form-control" maxlength="20" name="telephone">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-4">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" maxlength="80" required="true" name="email">
                    </div>
                    <div class="col col-md-4">
                        <label for="fax">Fax</label>
                        <input type="text" class="form-control" maxlength="80" required="true" name="fax">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-4">
                        <label for="registration_date">Registration Date</label>
                        <input type="text" class="form-control" maxlength="80" required="true" name="registration_date">
                    </div>
                    <div class="col col-md-4">
                        <label for="commencent_date">Commencement date</label>
                        <input type="text" class="form-control" maxlength="80" required="true" name="commencent_date">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-4">
                        <label for="date_of_first_license">Date of 1st License</label>
                        <input type="text" class="form-control" maxlength="80" name="date_of_first_license">
                    </div>
                    <div class="col col-md-4">
                        <label for="last_license_renewal">Last License Renewal</label>
                        <input type="text" class="form-control" maxlength="80" name="last_license_renewal">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-4">
                        <label for="license_no">License Number</label>
                        <input type="text" class="form-control" maxlength="30" required="true" name="license_no">
                    </div>

                    <div class="col col-md-4">
                        <label for="feed_date">Feed Date</label>
                        <input type="date" class="form-control" required="true" name="feed_date">
                    </div>
                </div>

                <div class="row form-group">
        
                    <div class="col col-md-4">
                        <label for="feed_status">Feed Status</label>
                        <input type="text" class="form-control" maxlength="2" required="true" name="feed_status">
                    </div>
                </div>

                <div class="form-group">
                    <button class="btn btn-primary">Submit</button>
                </div>
                
            </form>
                
            </div>
        </div>
    </div>
</body>
</html>