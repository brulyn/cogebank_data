
--fraudtxn table creation
CREATE TABLE fraudtxn (
    country varchar(2),
    le_book varchar(2),
    business_date varchar(10),
    fraud_by varchar(10),
    vision_ouc varchar(10),
    fraud_sequence int,
    fraud_scheme int,
    description_of_fraud varchar(3),
    fraud_txn_status int,
    currency varchar(3),
    fraud_amount_fcy int,
    fraud_amount_lcy int,
    amount_paid_fcy int,
    amount_paid_lcy int,
    adopt_to_avoid varchar(100),
    feed_date varchar(10),
    feed_status varchar(2)
);

--mgtinfo table creation
CREATE TABLE mgtinfo(
    country varchar(2),
    le_book varchar(3),
    year_month int,
    staff_id varchar(10),
    mgt_member_type int,
    executive_flag varchar(1),
    company_name_01 varchar(100),
    company_name_02 varchar(100),
    company_name_03 varchar(100),
    broad_committee_01 varchar(80),
    broad_committee_02 varchar(80),
    broad_committee_03 varchar(80),
    broad_committee_04 varchar(80),
    mgt_committee_01 varchar(80),
    mgt_committee_02 varchar(80),
    mgt_committee_03 varchar(80),
    mgt_committee_04 varchar(80),
    feed_date varchar(10),
    feed_status varchar(2)
);

--shmembers table creation
CREATE TABLE shmembers(
    country varchar(2),
    le_book varchar(3),
    year_month int,
    shareholder_sequence int,
    shareholder_name varchar(40),
    total_shareholding_lcy float(23,5),
    percentage_of_shares float(10,5),
    phone_number varchar(20),
    feed_date varchar(10),
    feed_status varchar(2)
);