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
    <title>Fraud Transactions</title>
</head>
<body>
<?php
    require_once('../header.php');
    ?>
    <div class="container">
        <h1>Fraud Transactions</h1>

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
                        <label for="business_date">Business Date</label>
                        <input type="date" class="form-control" placeholder="Business date" required="true" name="business_date">
                    </div>
                    <div class="col col-md-4">
                        <label for="fraud_by">Fraud By</label>
                        <select name="fraud_by" class="form-control">
                            <option value="S">Staff</option>
                            <option value="E">External</option>
                            <option value="H">Hybdrid</option>
                        </select>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-4">
                        <label for="vision_ouc">Vision_OUC</label>
                        <input type="text" class="form-control" maxlength="10" required="true" name="vision_ouc">
                    </div>
                    <div class="col col-md-4">
                        <label for="fraud_sequence">Fraud Sequence</label>
                        <input type="number" class="form-control" maxlength="4" required="true" name="fraud_sequence">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-4">
                        <label for="fraud_scheme">Fraud Scheme</label>
                        <select name="fraud_scheme" class="form-control">
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="31">31</option>
                            <option value="32">32</option>
                            <option value="33">33</option>
                            <option value="34">34</option>
                            <option value="41">41</option>
                            <option value="42">42</option>
                            <option value="43">43</option>
                            <option value="51">51</option>
                            <option value="61">61</option>
                            <option value="71">71</option>
                            <option value="81">81</option>
                            <option value="82">82</option>
                            <option value="9999">9999</option>
                            <option value="8888">8888</option>
                        </select>
                    </div>
                    <div class="col col-md-4">
                        <label for="description_of_fraud">Description Of Fraud</label>
                        <input type="text" class="form-control" maxlength="20" required="true" name="description_of_fraud">
                    </div>
                </div>


                <div class="row form-group">
                    <div class="col col-md-4">
                        <label for="fraud_txn_status">Fraud Txn Status</label>
                        <select name="fraud_txn_status" class="form-control">
                            <option value="0">Success</option>
                            <option value="1">Attempted</option>
                        </select>
                    </div>
                    <div class="col col-md-4">
                        <label for="currency">Currency</label>
                        <select name="currency" class="form-control">
                            <option value="RWF">RWF</option>
                            <option value="USD">USD</option>
                            <option value="GBP">GBP</option>
                            <option value="EURO">EURO</option>
                        </select>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-4">
                        <label for="fraud_amount_fcy">Fraud Amount FCY</label>
                        <input type="number" class="form-control" maxlength="23" required="true" name="fraud_amount_fcy">
                    </div>
                    <div class="col col-md-4">
                        <label for="fraud_amount_lcy">Fraud Amount LCY</label>
                        <input type="number" class="form-control" maxlength="23" required="true" name="fraud_amount_lcy">
                    </div>
                </div>
                
                <div class="row form-group">
                    <div class="col col-md-4">
                        <label for="amount_paid_fcy">Amount Paid FCY</label>
                        <input type="number" class="form-control" maxlength="23" required="true" name="amount_paid_fcy">
                    </div>
                    <div class="col col-md-4">
                        <label for="amount_paid_lcy">Amount Paid LCY</label>
                        <input type="number" class="form-control" maxlength="23" required="true" name="amount_paid_lcy">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-4">
                        <label for="adopt_to_avoid">Adopt to Avoid</label>
                        <input type="text" class="form-control" maxlength="100" required="true" name="adopt_to_avoid">
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