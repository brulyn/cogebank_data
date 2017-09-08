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
    <title>Management Info</title>
</head>
<body>
    <?php
        require_once('../header.php');
    ?>
    <div class="container">
    
        <h1>Management Info</h1>

        <div class="card">
            <div class="card-body">
            <form action="insert.php" method="post">
                <div class="row form-group">
                    <div class="col col-md-4">
                        <label for="country">Country</label>
                        <input type="text" class="form-control" maxlength="2" required="true" name="country">
                    </div>
                    <div class="col col-md-4">
                        <label for="le_book">LE_Book</label>
                        <input type="text" class="form-control" maxlength="3" required="true" name="le_book">
                    </div>
                </div>  

                <div class="row form-group">
                    <div class="col col-md-4">
                        <label for="year_month">Year-Month</label>
                        <input type="number" class="form-control" maxlength="6" required="true" name="year_month">
                    </div>
                    <div class="col col-md-4">
                        <label for="staff_id">Staff ID</label>
                        <input type="text" class="form-control" maxlength="10" required="true" name="staff_id">
                    </div>
                </div>   

                <div class="row form-group">
                    <div class="col col-md-4">
                        <label for="mgt_member_type">MGT Member Type</label>
                        <select name="mgt_member_type" class="form-control">
                            <option value="1">Board Member</option>
                            <option value="2">Other Directorship</option>
                        </select>
                    </div>
                    <div class="col col-md-4">
                        <label for="executive_flag">Executive Flag</label>
                        <select name="executive_flag" class="form-control">
                            <option value="Y">Y</option>
                            <option value="N">N</option>
                        </select>
                    </div>
                </div> 

                <div class="row form-group">
                    <div class="col col-md-4">
                        <label for="company_name_01">Company Name 01</label>
                        <input type="text" class="form-control" maxlength="100" name="company_name_01">
                    </div>
                    <div class="col col-md-4">
                        <label for="company_name_02">Company Name 02</label>
                        <input type="text" class="form-control" maxlength="100" name="company_name_02">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-4">
                        <label for="company_name_03">Company Name 03</label>
                        <input type="text" class="form-control" maxlength="100" name="company_name_03">
                    </div>
                    <div class="col col-md-4">
                        <label for="broad_committee_01">Broad Committee 01</label>
                        <input type="text" class="form-control" maxlength="100" name="broad_committee_01">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-4">
                        <label for="broad_committee_02">Broad Committee 02</label>
                        <input type="text" class="form-control" maxlength="100" name="broad_committee_02">
                    </div>
                    <div class="col col-md-4">
                        <label for="broad_committee_03">Broad Committee 03</label>
                        <input type="text" class="form-control" maxlength="100" name="broad_committee_03">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-4">
                        <label for="broad_committee_04">Broad Committee 04</label>
                        <input type="text" class="form-control" maxlength="100" name="broad_committee_04">
                    </div>
                    <div class="col col-md-4">
                        <label for="management_committee_01">Management Committee 01</label>
                        <input type="text" class="form-control" maxlength="100" name="mgt_committee_01">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-4">
                        <label for="management_committee_02">Management Committee 02</label>
                        <input type="text" class="form-control" maxlength="100" name="mgt_committee_02">
                    </div>
                    <div class="col col-md-4">
                        <label for="management_committee_03">Management Committee 03</label>
                        <input type="text" class="form-control" maxlength="100" name="mgt_committee_03">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-4">
                        <label for="management_committee_04">Management Committee 04</label>
                        <input type="text" class="form-control" maxlength="100" name="mgt_committee_04">
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