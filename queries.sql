
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


--stakehold table creation
CREATE TABLE stakehold(
        country varchar(2),
        le_book varchar(3),
        year_month int,
        postal_address varchar(300),
        physical_address varchar(300),
        telephone varchar(20), 
        email varchar(80),
        fax varchar(80),
        registration_date varchar(20),
        commencement_date varchar(20),
        date_of_first_license varchar(20),
        last_license_renewal varchar(20),
        license_number varchar(30),
        feed_date varchar(20),
        feed_status varchar(2)
);


--ntwrkperf table creation
CREATE TABLE ntwrkperf(
        country varchar(2),
        le_book varchar(3),
        year_month int,
        switch_session_category int,
        network_breakdown_hours int,
        comm_breakdown_hours int,
        total_hours int,
        feed_date varchar(20),
        feed_status varchar(2)
);


--suspitxn table creation
CREATE TABLE suspitxn(
        country varchar(2),
        le_book varchar(3),
        business_date varchar(20),
        fraud_report_type varchar(10),
        fraud_sequence int,
        vision_ouc varchar(10),
        account_number varchar(20),
        surname varchar(80),
        first_name varchar(80),
        middle_name varchar(80),
        postal_address varchar(250),
        date_of_birth varchar(20),
        passport_number varchar(10),
        occupation int,
        identity_verified varchar(10),
        relationship_report_entity varchar(10),
        action_taken varchar(10),
        resignation_date varchar(20),
        transaction_date varchar(20),
        transaction_narration varchar(45),
        currency varchar(3),
        currency varchar(3),
        fraud_amount_fcy int,
        fraud_amount_lcy int,
        amount_paid_fcy int,
        amount_paid_lcy int,
        source_of_fund varchar(45),
        destination_fund varchar(45),
        basis_of_suspicion varchar(45),
        material_impact varchar(10),
        impact_description varchar(45),
        authority varchar(45),
        how_notified varchar(45),
        other_action varchar(45),
        reporting_officer_name varchar(45),
        reporting_officer_position varchar(45),
        feed_date varchar(20),
        feed_status varchar(2)
);

