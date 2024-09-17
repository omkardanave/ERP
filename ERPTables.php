<?php session_start();
    require 'Connect.php';
     $statements=[
        'CREATE TABLE StudentDetail_1(
            Id VARCHAR(10) PRIMARY KEY,
            APPLICATIONFOR VARCHAR(50),
            ADMISSIONTO VARCHAR(50),
            BRANCH VARCHAR(50),
            ADMISSIONYEAR VARCHAR(50),
            FIRSTNAME VARCHAR(20),
            MIDDELNAME VARCHAR(20),
            LASTNAME VARCHAR(20),
            DOB VARCHAR(20),
            BIRTHPLACE VARCHAR(30),
            ADHARID VARCHAR(12),
            PANNO VARCHAR(20),
            EMAIL VARCHAR(30),
            MOBILENO VARCHAR(10),
            PASS VARCHAR(8)
        )',

        'CREATE TABLE StudentDetail_2(
            RELIGION VARCHAR(20),
            CASTE VARCHAR(20),
            ADMISSIONCATEGORY VARCHAR(20),
            BLOODGROUP VARCHAR(10),
            ISHANDICAPED VARCHAR(10),
            ID VARCHAR(10),
            FOREIGN KEY (ID) REFERENCES StudentDetail_1(ID)
        )',

        'CREATE TABLE STUDENTBANKDETAIL(
            ACCOUNTNO VARCHAR(20),
            BANKNAME VARCHAR(20),
            BRANCHNAME VARCHAR(20),
            BRANCHCODE VARCHAR(20),
            IFSCCODE VARCHAR(20),
            ACCOUNTLINKED VARCHAR(20),
            ID VARCHAR(10),
            FOREIGN KEY (ID) REFERENCES StudentDetail_1(ID)
        )',

        'CREATE TABLE FamilyDetails(
            FATHERSFIRSTNAME VARCHAR(20),
            FATHERSLASTNAME VARCHAR(20),
            FATHERSMIDDELNAME VARCHAR(20),
            MOTHERSFIRSTNAME VARCHAR(20),
            MOTHERSLASTNAME VARCHAR(20),
            MOTHERSMIDDELNAME VARCHAR(20),
            FATHERSPROFESSION VARCHAR(30),
            MOTHERSPROFESSION VARCHAR(30),
            PARENTSEMAIL VARCHAR(50),
            PARENTSMOBNUMBER VARCHAR(10),
            ID VARCHAR(10),
            FOREIGN KEY (ID) REFERENCES StudentDetail_1(ID)
        )',

        'CREATE TABLE AddressDetails(
            STATES VARCHAR(30),
            DISTRICT VARCHAR(30),
            TALUKA VARCHAR(30),
            PINCODE VARCHAR(6),
            ID VARCHAR(10),
            FOREIGN KEY (ID) REFERENCES StudentDetail_1(ID)
        )',

        'CREATE TABLE GuardianDetails(
            GUARDIANNAME VARCHAR(30),
            RELATIONSHIP VARCHAR(30),
            MOBILENO VARCHAR(10),
            EMAIL VARCHAR(30),
            ID VARCHAR(10),
            FOREIGN KEY (ID) REFERENCES StudentDetail_1(ID)
        )',

        'CREATE TABLE SSCDetails(
            BOARD VARCHAR(100),
            SCHOOL VARCHAR(100),
            PASSMONTH VARCHAR(10),
            PASSYEAR VARCHAR(10),
            SEATNO VARCHAR(10),
            MARKS VARCHAR(10),
            OUTOFF VARCHAR(10),
            PER VARCHAR(10),
            RESULT VARCHAR(20),
            MATHMARKS VARCHAR(10),
            GENERALSCIENCE VARCHAR(10),
            ENGLISH VARCHAR(10),
            ID VARCHAR(10),
            FOREIGN KEY (ID) REFERENCES StudentDetail_1(ID) 
        )',

        'CREATE TABLE HSCDetails(
            BOARD VARCHAR(100),
            SCHOOL VARCHAR(100),
            PASSMONTH VARCHAR(10),
            PASSYEAR VARCHAR(10),
            SEATNO VARCHAR(10),
            MARKS VARCHAR(10),
            OUTOFF VARCHAR(10),
            PER VARCHAR(10),
            RESULT VARCHAR(20),
            MATHMARKS VARCHAR(10),
            PHYSICS VARCHAR(10),
            CHEMISTRY VARCHAR(10),
            PREVIOUSSCHOOLNAME VARCHAR(100),
            PREVIOUSSCHOOLADD VARCHAR(100),
            ID VARCHAR(10),
            FOREIGN KEY (ID) REFERENCES StudentDetail_1(ID) 
        )',

        'CREATE TABLE DocumenDetails(
            PASSPORTSIZEPHOTO LONGBLOB,
            ALLOTMENTLETTER LONGBLOB,
            ARCCONFIRMATION LONGBLOB,
            HSCMARKSHEET LONGBLOB,
            SSCMARKSHEET LONGBLOB,
            LEAVINGCERTIFICATE LONGBLOB,
            DOMACILE LONGBLOB,
            ADHARCARD LONGBLOB,
            CASTCERTIFICATE LONGBLOB,
            CASTVALIDITY LONGBLOB,
            NONCRIMILIAR LONGBLOB,
            INCOME LONGBLOB,
            EWS LONGBLOB,
            DEFENCE LONGBLOB,
            BANKPASSBOOK LONGBLOB,
            GAPCERTIFICATE LONGBLOB,
            OTHER LONGBLOB,
            ID VARCHAR(10),
            FOREIGN KEY (ID) REFERENCES StudentDetail_1(ID)
        )'
        
    ];
    foreach ($statements as $statement) {
        if ($mysqli->query($statement)) {
            printf("Table created successfully.<br />");
         }
         if ($mysqli->errno) {
            printf("Could not create table: %s<br />", $mysqli->error);
         }

    }
?>