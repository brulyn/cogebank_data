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
    <title>Suspicious Transactions</title>
</head>
<body>
<?php
    require_once('../header.php');
    ?>
    <div class="container">
        <h1>Suspicious Transactions</h1>

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
                        <label for="fraud_report_type">Fraud Report Type</label>
                        <select name="fraud_report_type" class="form-control">
                            <option value="I">Initial Report</option>
                            <option value="A">Amended Report</option>
                            <option value="S">Supplemental Report</option>
                        </select>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-4">
                        <label for="fraud_sequence">Fraud Sequence</label>
                        <input type="number" class="form-control" maxlength="4" required="true" name="fraud_sequence">
                    </div>
                    <div class="col col-md-4">
                        <label for="vision_ouc">Vision_OUC</label>
                        <input type="text" class="form-control" maxlength="10" required="true" name="vision_ouc">
                    </div>
                    
                </div>

                <div class="row form-group">
                    <div class="col col-md-4">
                        <label for="account_number">Account Number</label>
                        <input type="text" class="form-control" maxlength="20" required="true" name="account_number">
                    </div>
                    <div class="col col-md-4">
                        <label for="surname">Surname</label>
                        <input type="text" class="form-control" maxlength="80" required="true" name="surname">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-4">
                        <label for="firstname">First Name</label>
                        <input type="text" class="form-control" maxlength="80" required="true" name="firstname">
                    </div>
                    <div class="col col-md-4">
                        <label for="middle_name">Middle Name</label>
                        <input type="text" class="form-control" maxlength="80" required="true" name="middle_name">
                    </div>
                </div>


                <div class="row form-group">
                    <div class="col col-md-4">
                        <label for="postal_address">Postal Address</label>
                        <textarea name="postal_address" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <div class="col col-md-4">
                        <label for="date_of_birth">Date Of birth</label>
                        <input type="date" class="form-control" required="true" name="date_of_birth">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-4">
                        <label for="passport_number">Passport Number</label>
                        <input type="text" name="passport_number" maxlength="10" class="form-control">
                    </div>

                    <div class="col col-md-4">
                        <label for="occupation">Occupation</label>
                        <select name="occupation" class="form-control">
                            <option value="1">Chief Executives</option>
                            <option value="2">General and Operations Managers</option>
                            <option value="3">Marketing and Sales Managers</option>
                            <option value="4">Computer and Information Systems Managers</option>
                            <option value="5">Financial Managers</option>
                            <option value="6">Human Resources, training and labor Relations Specialists</option>
                            <option value="7">Management Analysts</option>
                            <option value="8">Accountants and Auditors</option>
                            <option value="9">Credit Analysts</option>
                            <option value="10">Financial Analysts</option>
                            <option value="11">Personal Financial Advisors</option>
                            <option value="12">Loan Counselors</option>
                            <option value="13">Loan Officers</option>
                            <option value="14">Professional and Related Occupations</option>
                            <option value="15">Computer Programmers</option>
                            <option value="16">Computer Software Engineers</option>
                            <option value="17">Computer Support Specialists</option>
                            <option value="18">Computer Systems Analysts</option>
                            <option value="19">Sales and Related Occupations</option>
                            <option value="20">Sucurities, Commodities, and Financial Services Sales Agents</option>
                            <option value="21">Office and Administrative Support Occupations</option>
                            <option value="22">First-Line Supervisors/Managers of Office and Administrative Support Workers</option>
                            <option value="23">Bill and Account Collectors</option>
                            <option value="24">Bookkeeping, Accounting and Auditing Clerks</option>
                            <option value="25">Tellers</option>
                            <option value="26">Credit Authorizers, Checkers and Clerks</option>
                            <option value="27">Customer Serice Representatives</option>
                            <option value="28">Loan Interviewers and Clerks</option>
                            <option value="29">New Accounts Clerks</option>
                            <option value="30">Executive Secretaries and Administrative Assistants</option>
                            <option value="31">Secretaries, Except Legal, Medical and Executive</option>
                            <option value="32">Office Clerks</option>
                            <option value="33">General</option>
                            <option value="9999">Not Applicable</option>
                            <option value="8888">Invalid value</option>
                        </select>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-4">
                        <label for="identity_verified">Identity Verified</label>
                        <select name="identity_verified" class="form-control">
                            <option value="P">Passport Number</option>
                            <option value="I">ID Number</option>
                            <option value="O">Other</option>
                            <option value="IN">Incorporation Number</option>
                            <option value="D">Date and Place Issued</option>
                            <option value="N">Not applicable</option>
                        </select>
                    </div>
                    <div class="col col-md-4">
                        <label for="relationship_report_entity">Relationship with Report Entity</label>
                        <input type="text" maxlength="45" name="relationship_report_entity" class="form-control">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-4">
                        <label for="action_taken">Action Taken</label>
                        <select name="action_taken" class="form-control">
                            <option value="N">No</option>
                            <option value="R">Resigned</option>
                            <option value="S">Suspended</option>
                            <option value="T">Terminated</option>
                        </select>
                    </div>
                    <div class="col col-md-4">
                        <label for="resignation_date">Resigantion date</label>
                        <input type="date" class="form-control" required="true" name="resignation_date">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-4">
                        <label for="transaction_date">Transaction Date</label>
                        <input type="date" class="form-control" required="true" name="transaction_date">
                    </div>

                    <div class="col col-md-4">
                        <label for="transaction_type">Transaction Type</label>
                        <select name="transaction_type" id="" class="form-control">
                            <option value="C">Cash</option>
                            <option value="T">Transfer</option>
                            <option value="O">Clearing</option>
                        </select>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-4">
                        <label for="transaction_narration">Transaction Narration</label>
                        <textarea name="transaction_narration" cols="30" rows="10" class="form-control"></textarea>
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
                        <label for="source_of_fund">Source of Fund</label>
                        <input type="text" class="form-control" maxlength="45" required="true" name="source_of_fund">
                    </div>
                    <div class="col col-md-4">
                        <label for="destination_fund">Source of Fund</label>
                        <input type="text" class="form-control" maxlength="45" required="true" name="destination_fund">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-4">
                        <label for="basis_of_suspicion">Basis of suspicion</label>
                        <input type="text" class="form-control" maxlength="45" required="true" name="basis_of_suspicion">
                    </div>
                    <div class="col col-md-4">
                        <label for="material_impact">Material Impact</label>
                        <select name="material_impact" id="" class="form-control">
                            <option value="Y">Yes</option>
                            <option value="N">No</option>
                        </select>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-4">
                        <label for="impact_description">Impact Description</label>
                        <textarea name="impact_description" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <div class="col col-md-4">
                        <label for="authority">Authority</label>
                        <input type="text" maxlength="45" required="true" name="authority" class="form-control">
                    </div>
                </div>

                <div class="row form-group">
                    
                    <div class="col col-md-4">
                        <label for="how_notified">How notified</label>
                        <input type="text" maxlength="45" required="true" name="how_notified" class="form-control">
                    </div>

                    <div class="col col-md-4">
                        <label for="other_action">Other action by report Entity</label>
                        <input type="text" maxlength="45" required="true" name="other_action" class="form-control">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-4">
                        <label for="reporting_officer_name">Reporting-Officer name</label>
                        <input type="text" maxlength="45" required="true" name="reporting_officer_name" class="form-control">
                    </div>

                    <div class="col col-md-4">
                        <label for="reporting_officer_position">Reporting-Officer Position</label>
                        <input type="text" maxlength="45" required="true" name="reporting_officer_position" class="form-control">
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