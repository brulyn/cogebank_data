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
    <title>Shareholder Percentage</title>
</head>
<body>
<?php
    require_once('../header.php');
    ?>
    <div class="container">
        <h1>Shareholder Percentage</h1>

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
                        <label for="shareholder_sequence">Shareholder Sequence</label>
                        <input type="number" class="form-control" maxlength="6" required="true" name="shareholder_sequence">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-4">
                        <label for="shareholder_name">Shareholder Name</label>
                        <input type="text" class="form-control" maxlength="40" required="true" name="shareholder_name">
                    </div>
                    <div class="col col-md-4">
                        <label for="total_shareholding_lcy">Total Shareholding LCY</label>
                        <input type="number" class="form-control" maxlength="4" name="total_shareholding_lcy">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-4">
                        <label for="percentage_of_shares">Percentage of shares</label>
                        <input type="text" class="form-control" maxlength="20" required="true" name="percentage_of_shares">
                    </div>
                    <div class="col col-md-4">
                        <label for="phone_number">Phone Number</label>
                        <input type="text" class="form-control" maxlength="20" name="phone_number">
                    </div>
                </div>

                <div class="row form-group">
            
                    <div class="col col-md-4">
                        <label for="feed_date">Feed Date</label>
                        <input type="date" class="form-control" required="true" name="feed_date">
                    </div>

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