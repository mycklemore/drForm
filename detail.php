<?php

//GET INCOMING ID'S
$patient_id = $_GET[id];


//connect to Database
require_once('vars.php');
$dbconnection = mysqli_connect(HOST,USERNAME,PASSWORD,DB_NAME) or die ('connection failed');

//BUILD THE QUERY
$query = "SELECT * FROM patients WHERE id=$patient_id";

//NOW TRY AND TALK TO THE DATABASE
$result = mysqli_query($dbconnection,$query) or die ('query failed');

//PUT THE RESULTS IN A VARIABLE
$found = mysqli_fetch_array($result);


?>







<?php

//DISPLAY THE DATA
echo '<h2 class="patientName">Information For: '.$found['patient1'] .'</h2>';


?>






<style>
    body{margin: 0px;}

    .patientName {
        margin-bottom: -10px;
        background-color: #eee;
        position: relative;
        z-index: 3;
        text-align: center;
        padding: 5px;
    }
    ::placeholder{
        color: #aaa;
        font-size: 8px;
    }
</style>
<html>
<head>
    <meta http-equiv=Content-Type content="text/html; charset=UTF-8">
    <style type="text/css">
        <!--
        span.cls_002{font-family:"Century",serif;font-size:16.1px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
        div.cls_002{font-family:"Century",serif;font-size:16.1px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
        span.cls_003{font-family:"Century",serif;font-size:11.1px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
        div.cls_003{font-family:"Century",serif;font-size:11.1px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
        span.cls_005{font-family:"Century",serif;font-size:12.1px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
        div.cls_005{font-family:"Century",serif;font-size:12.1px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
        span.cls_016{font-family:"Century Schoolbook Bold",serif;font-size:12.1px;color:rgb(0,0,0);font-weight:bold;font-style:normal;text-decoration: underline}
        div.cls_016{font-family:"Century Schoolbook Bold",serif;font-size:12.1px;color:rgb(0,0,0);font-weight:bold;font-style:normal;text-decoration: none}
        span.cls_006{font-family:"Century Schoolbook Bold",serif;font-size:12.1px;color:rgb(0,0,0);font-weight:bold;font-style:normal;text-decoration: none}
        div.cls_006{font-family:"Century Schoolbook Bold",serif;font-size:12.1px;color:rgb(0,0,0);font-weight:bold;font-style:normal;text-decoration: none}
        span.cls_017{font-family:"Century Schoolbook Bold Italic",serif;font-size:12.1px;color:rgb(0,0,0);font-weight:bold;font-style:italic;text-decoration: underline}
        div.cls_017{font-family:"Century Schoolbook Bold Italic",serif;font-size:12.1px;color:rgb(0,0,0);font-weight:bold;font-style:italic;text-decoration: none}
        span.cls_018{font-family:"Century Schoolbook Bold",serif;font-size:15.1px;color:rgb(0,0,0);font-weight:bold;font-style:normal;text-decoration: underline}
        div.cls_018{font-family:"Century Schoolbook Bold",serif;font-size:15.1px;color:rgb(0,0,0);font-weight:bold;font-style:normal;text-decoration: none}
        span.cls_019{font-family:"Century",serif;font-size:11.1px;color:rgb(0,0,255);font-weight:normal;font-style:normal;text-decoration: underline}
        div.cls_019{font-family:"Century",serif;font-size:11.1px;color:rgb(0,0,255);font-weight:normal;font-style:normal;text-decoration: none}
        span.cls_012{font-family:"Century",serif;font-size:10.1px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
        div.cls_012{font-family:"Century",serif;font-size:10.1px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
        span.cls_010{font-family:"Century",serif;font-size:9.1px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
        div.cls_010{font-family:"Century",serif;font-size:9.1px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
        span.cls_013{font-family:"Century Schoolbook Bold",serif;font-size:9.1px;color:rgb(0,0,0);font-weight:bold;font-style:normal;text-decoration: none}
        div.cls_013{font-family:"Century Schoolbook Bold",serif;font-size:9.1px;color:rgb(0,0,0);font-weight:bold;font-style:normal;text-decoration: none}
        span.cls_020{font-family:"Century",serif;font-size:9.1px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: underline}
        div.cls_020{font-family:"Century",serif;font-size:9.1px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
        span.cls_021{font-family:"Century",serif;font-size:11.1px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: underline}
        div.cls_021{font-family:"Century",serif;font-size:11.1px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
        span.cls_022{font-family:"Century Schoolbook Bold",serif;font-size:11.1px;color:rgb(0,0,0);font-weight:bold;font-style:normal;text-decoration: underline}
        div.cls_022{font-family:"Century Schoolbook Bold",serif;font-size:11.1px;color:rgb(0,0,0);font-weight:bold;font-style:normal;text-decoration: none}
        span.cls_015{font-family:"Century",serif;font-size:14.1px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
        div.cls_015{font-family:"Century",serif;font-size:14.1px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}

        body{
            zoom: 1.5;
        }


        input{
            height: 14px;
            font-size: 10px;
            background: #eef;
            margin-left: 2px;
        }
        input[type="checkbox"] {
            height: 8px;
            margin-left: 0px;
            position: relative;
            top: -1px;
        }

        .submit{
            height: auto;
            font-size: 11px;
            border-radius: 5px;
            background-color: transparent;
            color: #172349;
            border:solid 1px #172349;
            cursor: pointer;
            transition: background-color .3s ease-in-out, color .3s ease-in-out;
            -webkit-transition: background-color .3s ease-in-out, color .3s ease-in-out;
        }

        .submit:hover{
            border:solid 1px #172349;
            background-color: #172349;
            color: white;
        }

        .backToHome{
            margin: 5px 10px;
            position: relative;
            z-index: 4;
            background: white;
            top: -22px;
        }

    </style>
    <link rel="stylesheet" type="text/css" href="print.css" media="print">
    <!--    <script type="text/javascript" src="6a154374-c817-11e7-9f8d-0cc47a792c0a_id_NEWPAPERWORK2017_files/wz_jsgraphics.js"></script>-->
</head>
<body>



<!--CONTENT-------------------------------------------------------------------------------------->
<a href="admin.php"><button class="submit backToHome">BACK TO ADMIN PAGE</button></a>
<button onClick="window.print()" style="right: 20px;" class="submit backToHome">PRINT FORM</button>




<form method="post" action="addToDatabase.php" enctype="multipart/form-data" name="form">

    <!--PAGE 1--------------------------------------------------------------------------------------->

    <div style="position:absolute;left:50%;margin-left:-306px;top:0px;width:612px;height:792px;border-style:outset;overflow:hidden">



        <div style="position:absolute;left:36.00px;top:46.00px" class="cls_002">
            <span class="cls_002">DOUG CHUNG, DDS</span>
        </div>
        <div style="position:absolute;left:324.00px;top:46.00px" class="cls_003">
            <span class="cls_003"><a HREF="">chungoffice@gmail.com</a></span>
        </div>
        <div style="position:absolute;left:504.00px;top:46.00px" class="cls_002">
            <span class="cls_002">PAGE 1</span>
        </div>
        <div style="position:absolute;left:36.00px;top:68.00px" class="cls_005">
            <span class="cls_005">DENTAL ANESTHESIOLOGY  PO BOX 1058 DRAPER, UT 84020  (801) 571-5665   FAX (801)572-9491</span>
        </div>
        <div style="position:absolute;left:36.00px;top:123.00px" class="cls_005">
            <span class="cls_005">COMPLETE AND SIGN THIS PAPERWORK ~ THEN SEND BY CLICKING THE SUBMIT BUTTON AT THE BOTTOM OF PAGE TWO. </span>
        </div>




        <!--FORM 1--------------------------------------------------------------------------->

        <div style="position:absolute;left:36.00px;top:178.00px" class="cls_005">
        <span class="cls_005">
            Patient<input type="text" name="patient1" style="width: 300px;" value="<?php echo $found['patient1'];?>">
            Birthdate <input type="date" name="birthdate" style="width: 125px;" value="<?php echo $found['birthdate'];?>">
        </span>
        </div>

        <div style="position:absolute;left:36.00px;top:208.00px" class="cls_006">
            <span class="cls_006">Person Responsible For Account:</span>
        </div>
        <div style="position:absolute;left:36.00px;top:223.00px" class="cls_005">
        <span class="cls_005">
            Name<input type="text" name="name" style="width: 293px;" value="<?php echo $found['name'];?>">
            Social Security # <input type="text" value="<?php echo $found['social'];?>" name="social" style="width: 101px;">
        </span>
        </div>
        <div style="position:absolute;left:36.00px;top:240.00px" class="cls_005"><span class="cls_005">
        Street Address<input type="text" name="address" style="width: 447px;" value="<?php echo $found['address'];?>"></span>
        </div>
        <div style="position:absolute;left:36.00px;top:257.00px" class="cls_005">
        <span class="cls_005">
            City<input type="text" name="city" style="width: 214px;" value="<?php echo $found['city'];?>">
            State<input type="text" name="state" style="width: 40px;" value="<?php echo $found['state'];?>">
            Zip<input type="text" name="zip" style="width: 50px;" value="<?php echo $found['zip'];?>">
            Phone#<input type="text" name="phone" style="width: 97px;" value="<?php echo $found['phone'];?>">
        </span>
        </div>
        <div style="position:absolute;left:36.00px;top:273.00px" class="cls_005">
        <span class="cls_005">
            Birthdate<input type="date" name="birthdate2" style="width: 125px;" value="<?php echo $found['birthdate2'];?>">
            Employer<input type="text" name="employer" style="width: 120px;" value="<?php echo $found['employer'];?>">
            Bus Phone#<input type="text" name="busPhone" placeholder="801-555-5555" style="width: 100px;" value="<?php echo $found['busPhone'];?>">
        </span>
        </div>
        <div style="position:absolute;left:36.00px;top:291.00px" class="cls_005">
            <span class="cls_005">If guardian, relationship to patient<input type="text" name="relationToPatient" style="width: 150px;" value="<?php echo $found['relationToPatient'];?>"></span>
        </div>
        <div style="position:absolute;left:36.00px;top:310.00px" class="cls_005">
            <span class="cls_005">In Case of Emergency; Closest Relative Not Living With You:</span>
        </div>
        <div style="position:absolute;left:36.00px;top:326.00px" class="cls_005">
        <span class="cls_005">
            Name<input type="text" name="emergencyName" style="width: 300px;" value="<?php echo $found['emergencyName'];?>">
            Phone#<input type="text" name="emergencyPhone" style="width: 150px;" value="<?php echo $found['emergencyPhone'];?>">
        </span>
        </div>

        <!--END FORM 1--------------------------------------------------------------------------->


        <!--INFO--------------------------------------------------------------------------->

        <div style="position:absolute;left:36.00px;top:358.00px" class="cls_005"><span class="cls_005">A $100 nonrefundable deposit is </span><span class="cls_017">required to schedule</span><span class="cls_005"> your anesthesia appointment. The</span></div>
        <div style="position:absolute;left:36.00px;top:373.00px" class="cls_005"><span class="cls_005">deposit is applied to the anesthesia fee the day of service.  The deposit can be paid with</span></div>
        <div style="position:absolute;left:36.00px;top:388.00px" class="cls_005"><span class="cls_005">credit card over the phone.</span></div>
        <div style="position:absolute;left:36.00px;top:403.00px" class="cls_016"><span class="cls_016">THE REMAINING BALANCE IS DUE THE DAY OF SERVICE.</span></div>
        <div style="position:absolute;left:36.00px;top:418.00px" class="cls_005"><span class="cls_005">Payment can be made with cash, money order, or credit card. Credit cards accepted: Visa,</span></div>
        <div style="position:absolute;left:36.00px;top:433.00px" class="cls_005"><span class="cls_005">Discover, MasterCard, and American Express.</span></div>
        <div style="position:absolute;left:36.00px;top:463.00px" class="cls_018"><span class="cls_018">NO CHECKS ACCEPTED!</span></div>
        <div style="position:absolute;left:36.00px;top:496.00px" class="cls_005"><span class="cls_005">We accept </span><span class="cls_006">Care Credit</span><span class="cls_005"> with “No interest” payment plans - available upon approved credit.</span></div>
        <div style="position:absolute;left:36.00px;top:511.00px" class="cls_005"><span class="cls_005">To apply go to care credit.com</span></div>
        <div style="position:absolute;left:36.00px;top:541.00px" class="cls_005"><span class="cls_005">Insurance Info: We will provide you with an insurance form the day of service. You will need</span></div>
        <div style="position:absolute;left:36.00px;top:556.00px" class="cls_005"><span class="cls_005">to sign and date it, and submit it to your insurance company. Any reimbursement should go</span></div>
        <div style="position:absolute;left:36.00px;top:571.00px" class="cls_005"><span class="cls_005">directly to you.</span></div>
        <div style="position:absolute;left:36.00px;top:616.00px" class="cls_005"><span class="cls_005">Typing your name below indicates that you understand, agree with, and give permission to</span></div>
        <div style="position:absolute;left:36.00px;top:631.00px" class="cls_005"><span class="cls_005">the above policies, and that you have answered all the information contained herein truthfully.</span></div>

        <!--END INFO--------------------------------------------------------------------------->


        <div style="position:absolute;left:36.00px;top:676.00px" class="cls_005">
        <span class="cls_005">
            Signature<input type="text" name="signature" style="width: 315px;" value="<?php echo $found['signature'];?>">
            Date<input type="text" name="signDate" style="width: 125px;" value="<?php echo $found['signDate'];?>">
        </span>
        </div>
        <div style="position:absolute;left:159.20px;top:691.00px" class="cls_003"><span class="cls_003">patient/parent/spouse/guardian</span></div>
    </div>


    <!--END PAGE 1--------------------------------------------------------------------------->




    <!--PAGE 2--------------------------------------------------------------------------->


    <div style="position:absolute;left:50%;margin-left:-306px;top:802px;width:612px;height:792px;border-style:outset;overflow:hidden">
        <div style="position:absolute;left:36.00px;top:18.00px" class="cls_002">
            <span class="cls_002">DOUG CHUNG, DDS</span>
        </div>
        <div style="position:absolute;left:331.73px;top:18.00px" class="cls_019">
            <span class="cls_019"></span><a HREF="">chungoffice@gmail.com</a>
        </div>
        <div style="position:absolute;left:510.29px;top:18.00px" class="cls_002">
            <span class="cls_002">PAGE 2</span>
        </div>
        <div style="position:absolute;left:36.00px;top:41.00px" class="cls_005">
            <span class="cls_005">DENTAL ANESTHESIOLOGY  PO BOX 1058 DRAPER, UT 84020  (801) 571-5665   FAX (801)572-9491</span>
        </div>



        <div style="position:absolute;left:36.00px;top:67.00px" class="cls_012">
        <span class="cls_012">
            Patient’s name<input type="text" name="patient2" style="width: 250px;" value="<?php echo $found['patient2'];?>">
        </span>
        </div>
        <div style="position:absolute;left:362.40px;top:62.00px" class="cls_012">
        <span class="cls_012">
            Male<input type="radio" name="gender" value="male" value="<?php echo $found['gender'];?>">
            Female<input type="radio" name="gender" value="female" value="<?php echo $found['gender'];?>">
            Weight<input type="text" name="weight" style="width: 35px;" value="<?php echo $found['weight'];?>">
            Height<input type="text" name="height" style="width: 35px;" pattern="[1-9 ]{1,4}" value="<?php echo $found['height'];?>">
        </span>
        </div>
        <div style="position:absolute;left:116.00px;top:94.00px" class="cls_003">
            <span class="cls_003">Answer each of the following questions (this information is confidential):</span>
        </div>
        <div style="position:absolute;left:36.00px;top:108.00px" class="cls_010">
        <span class="cls_010">
            <input type="radio" name="yn1" value="yes1" value="<?php echo $found['yn1'];?>">YES
            <input type="radio" name="yn1" value="no1" value="<?php echo $found['yn1'];?>" checked> NO
            Are you under the care of a physician? If yes, who:<input type="text" name="ynQ1" style="width: 250px; height: 12px; font-size: 8px;" value="<?php echo $found['ynQ1'];?>">
        </span>
        </div>
        <div style="position:absolute;left:36.00px;top:122.00px" class="cls_010">
        <span class="cls_010">
            <input type="radio" name="yn2" value="yes2" value="<?php echo $found['yn2'];?>" checked>YES
            <input type="radio" name="yn2" value="no2" value="<?php echo $found['yn2'];?>"> NO
            Currently taking any medications? If yes LIST:<input type="text" name="ynQ2" style="width: 262px; height: 12px; font-size: 8px;" value="<?php echo $found['ynQ2'];?>">
        </span>
        </div>
        <div style="position:absolute;left:36.00px;top:136.00px" class="cls_010">
        <span class="cls_010">
            <input type="radio" name="yn3" value="yes3" value="<?php echo $found['yn3'];?>">YES
            <input type="radio" name="yn3" value="no3" value="<?php echo $found['yn3'];?>" checked> NO
            Any drug allergies/sensitivities? If yes LIST:<input type="text" name="ynQ3" style="width: 274px; height: 12px; font-size: 8px;" value="<?php echo $found['ynQ3'];?>">
        </span>
        </div>
        <div style="position:absolute;left:36.00px;top:150.00px" class="cls_010">
        <span class="cls_010">
            <input type="radio" name="yn4" value="yes4" value="<?php echo $found['yn4'];?>">YES
            <input type="radio" name="yn4" value="no4" value="<?php echo $found['yn4'];?>" checked> NO
            Hospitalized in past 5 years? If yes LIST:<input type="text" name="ynQ4" style="width: 288px; height: 12px; font-size: 8px;"value="<?php echo $found['ynQ4'];?>"></span>
        </div>
        <div style="position:absolute;left:36.00px;top:165.00px" class="cls_010">
        <span class="cls_010">
            <input type="radio" name="yn5" value="yes5" value="<?php echo $found['yn5'];?>">YES
            <input type="radio" name="yn5" value="no5" value="<?php echo $found['yn5'];?>" checked> NO
            Have you ever had anesthesia for surgery? If yes LIST:<input type="text" name="ynQ5" style="width: 231px; height: 12px; font-size: 8px;" value="<?php echo $found['ynQ5'];?>">
        </span>
        </div>




        <!-- Checklist Table -->
        <div style="position:absolute;left:36.00px;top:190.00px" class="cls_003">
        <span class="cls_003">
            Check any of the following which you have had in the past or have presently:
        </span>
        </div>
        <div style="position:absolute;left:36.00px;top:209.00px" class="cls_012">
            <span class="cls_012"><input type="checkbox" name="heartProblem" value="yes" value="<?php echo $found['heartProblem'];?>">Heart Problems|</span>
        </div>
        <div style="position:absolute;left:128.73px;top:209.00px" class="cls_012">
            <span class="cls_012"><input type="checkbox" name="stroke" value="yes" value="<?php echo $found['stroke'];?>" checked>Stroke|</span>
        </div>
        <div style="position:absolute;left:185.54px;top:209.00px" class="cls_012">
            <span class="cls_012"><input type="checkbox" name="asthma" value="yes" value="<?php echo $found['asthma'];?>">Asthma|</span>
        </div>
        <div style="position:absolute;left:252.00px;top:209.00px" class="cls_012">
        <span class="cls_012">
            <input type="checkbox" name="diabetes" value="yes" value="<?php echo $found['diabetes'];?>">Diabetes Type I or II|
            <input type="checkbox" name="psychiatric" value="yes" value="<?php echo $found['psychiatric'];?>">Psychiatric Treatment|
            <input type="checkbox" name="bleeding" value="yes" value="<?php echo $found['bleeding'];?>">Excessive Bleeding
        </span>
        </div>
        <div style="position:absolute;left:36.00px;top:221.00px" class="cls_012">
            <span class="cls_012"><input type="checkbox" name="kidney" value="yes" value="<?php echo $found['kidney'];?>">Kidney Disease|</span>
        </div>
        <div style="position:absolute;left:127.91px;top:221.00px" class="cls_012">
            <span class="cls_012"><input type="checkbox" name="anemia" value="yes" value="<?php echo $found['anemia'];?>">Anemia|</span>
        </div>
        <div style="position:absolute;left:185.54px;top:221.00px" class="cls_012">
            <span class="cls_012"><input type="checkbox" name="aids" value="yes" value="<?php echo $found['aids'];?>">AIDS|</span>
        </div>
        <div style="position:absolute;left:252.00px;top:221.00px" class="cls_012">
            <span class="cls_012"><input type="checkbox" name="emphysema" value="yes" value="<?php echo $found['emphysema'];?>">Emphysema|</span>
        </div>
        <div style="position:absolute;left:360.00px;top:221.00px" class="cls_012">
            <span class="cls_012"><input type="checkbox" name="bloodPressure" value="yes" value="<?php echo $found['bloodPressure'];?>" checked>High Blood Pressure|</span>
        </div>
        <div style="position:absolute;left:479.54px;top:221.00px" class="cls_012">
            <span class="cls_012"><input type="checkbox" name="rheumatic" value="yes" value="<?php echo $found['rheumatic'];?>">Rheumatic Fever</span>
        </div>
        <div style="position:absolute;left:36.00px;top:233.00px" class="cls_012">
        <span class="cls_012">
            <input type="checkbox" name="venereal" value="yes" value="<?php echo $found['venereal'];?>">Venereal Disease|
            <input type="checkbox" name="cancer" value="yes" value="<?php echo $found['cancer'];?>">Cancer|
        </span>
        </div>
        <div style="position:absolute;left:194.54px;top:233.00px" class="cls_012">
            <span class="cls_012"><input type="checkbox" name="ulcers" value="yes" value="<?php echo $found['ulcers'];?>">Ulcers|</span>
        </div>
        <div style="position:absolute;left:252.00px;top:233.00px" class="cls_012">
            <span class="cls_012"><input type="checkbox" name="hepatitis" value="yes" value="<?php echo $found['hepatitis'];?>">Hepatitis A B C ?|</span>
        </div>
        <div style="position:absolute;left:360.00px;top:233.00px" class="cls_012">
            <span class="cls_012"><input type="checkbox" name="addiction" value="yes" value="<?php echo $found['addiction'];?>">Drug Addiction|</span>
        </div>
        <div style="position:absolute;left:473.54px;top:233.00px" class="cls_012">
            <span class="cls_012"><input type="checkbox" name="murmur" value="yes" value="<?php echo $found['murmur'];?>" checked>Heart Murmur</span>
        </div>
        <div style="position:absolute;left:36.00px;top:245.00px" class="cls_012">
            <span class="cls_012"><input type="checkbox" name="liverDisease" value="yes" value="<?php echo $found['liverDisease'];?>">Liver Disease|</span>
        </div>
        <div style="position:absolute;left:127.38px;top:245.00px" class="cls_012">
        <span class="cls_012">
            <input type="checkbox" name="glaucoma" value="yes" value="<?php echo $found['glaucoma'];?>" checked>Glaucoma|
            <input type="checkbox" name="smoker" value="yes" value="<?php echo $found['smoker'];?>">Smoker|
        </span>
        </div>
        <div style="position:absolute;left:252.00px;top:245.00px" class="cls_012">
            <span class="cls_012"><input type="checkbox" name="tuberculosis" value="yes" value="<?php echo $found['tubercluosis'];?>">Tuberculosis|</span>
        </div>
        <div style="position:absolute;left:353.00px;top:245.00px" class="cls_012">
            <span class="cls_012"><input type="checkbox" name="fainting" value="yes" value="<?php echo $found['fainting'];?>" checked>Fainting or Dizziness|</span>
        </div>
        <div style="position:absolute;left:473.54px;top:245.00px" class="cls_012">
            <span class="cls_012"><input type="checkbox" name="epilepsy" value="yes" value="<?php echo $found['epilepsy'];?>">Epilepsy/Seizures</span>
        </div>
        <div style="position:absolute;left:36.00px;top:257.00px" class="cls_012">
            <span class="cls_012"><input type="checkbox" name="thyroid" value="yes" value="<?php echo $found['thyroid'];?>">Thyroid Disease|</span>
        </div>
        <div style="position:absolute;left:130.47px;top:257.00px" class="cls_012">
            <span class="cls_012"><input type="checkbox" name="arthritis" value="yes" value="<?php echo $found['arthritis'];?>">Arthritis|</span>
        </div>
        <div style="position:absolute;left:193.54px;top:257.00px" class="cls_012">
        <span class="cls_012">
            <input type="checkbox" name="chestPain" value="yes" value="<?php echo $found['chestPain'];?>" checked>Chest Pains|
            <input type="checkbox" name="fenPhen" value="yes" value="<?php echo $found['fenPhen'];?>">Fen-PHen Diet|
        </span>
        </div>
        <div style="position:absolute;left:368.00px;top:257.00px" class="cls_012">
            <span class="cls_012"><input type="checkbox" name="echocardiogram" value="yes" value="<?php echo $found['echocardiogram'];?>">Echocardiogram|</span>
        </div>
        <div style="position:absolute;left:473.54px;top:257.00px" class="cls_012">
            <span class="cls_012"><input type="checkbox" name="hiv" value="yes" value="<?php echo $found['hiv'];?>">HIV Positive</span>
        </div>
        <div style="position:absolute;left:36.00px;top:269.00px" class="cls_012">
            <span class="cls_012"><input type="checkbox" name="fibromyalgia" value="yes" value="<?php echo $found['fibromyalgia'];?>">Fibromyalgia|</span>
        </div>
        <div style="position:absolute;left:127.38px;top:269.00px" class="cls_012">
            <span class="cls_012"><input type="checkbox" name="anxiety" value="yes" value="<?php echo $found['anxiety'];?>">Anxiety|</span>
        </div>
        <div style="position:absolute;left:200.54px;top:269.00px" class="cls_012">
        <span class="cls_012">
            <input type="checkbox" name="depression" value="yes" value="<?php echo $found['depression'];?>">Depression|
            <input type="checkbox" name="bipolar" value="yes" value="<?php echo $found['bipolar'];?>">Bipolar|
        </span>
        </div>
        <div style="position:absolute;left:340.00px;top:269.00px" class="cls_012">
            <span class="cls_012"><input type="checkbox" name="aad" value="yes" value="<?php echo $found['aad'];?>" checked>ADD or ADHD|</span>
        </div>
        <div style="position:absolute;left:433.54px;top:269.00px" class="cls_012">
            <span class="cls_012"><input type="checkbox" name="autism" value="yes" value="<?php echo $found['autism'];?>">Autism</span>
        </div>





        <div style="position:absolute;left:36.00px;top:283.00px" class="cls_010">
        <span class="cls_010">
            <input type="radio" name="yn6" value="yes6" value="<?php echo $found['yn6'];?>">YES
            <input type="radio" name="yn6" value="no6" value="<?php echo $found['yn6'];?>" checked> NO
            Any mental or physical disabilities? If yes LIST:<input type="text" name="ynQ6" style="width: 257px; height: 12px; font-size: 8px;" value="<?php echo $found['ynQ6'];?>"></span></div>
        <div style="position:absolute;left:36.00px;top:298.00px" class="cls_010">
        <span class="cls_010">
            Do you Snore?
            <input type="radio" name="yn7" value="yes7" value="<?php echo $found['yn7'];?>" checked>YES
            <input type="radio" name="yn7" value="no7" value="<?php echo $found['yn7'];?>"> NO
            Do you have Sleep Apnea ?
            <input type="radio" name="yn8" value="yes8" value="<?php echo $found['yn8'];?>">YES
            <input type="radio" name="yn8" value="no8" value="<?php echo $found['yn8'];?>" checked> NO
        </span>
        </div>
        <div style="position:absolute;left:370.00px;top:298.00px" class="cls_010">
        <span class="cls_010">
            Do you use a CPAP/BiPAP machine?
            <input type="radio" name="yn9" value="yes9" value="<?php echo $found['yn9'];?>">YES
            <input type="radio" name="yn9" value="no9" value="<?php echo $found['yn9'];?>" checked> NO
        </span>
        </div>
        <div style="position:absolute;left:36.00px;top:312.00px" class="cls_010">
        <span class="cls_010">
            Do you wear contacts?
            <input type="radio" name="yn10" value="yes10" value="<?php echo $found['yn10'];?>">YES
            <input type="radio" name="yn10" value="no10" value="<?php echo $found['yn10'];?>" checked> NO
            If yes - Do you take naps or sleep with them in?
            <input type="radio" name="yn11" value="yes11" value="<?php echo $found['yn11'];?>">YES
            <input type="radio" name="yn11" value="no11" value="<?php echo $found['yn11'];?>" checked> NO
        </span>
        </div>
        <div style="position:absolute;left:36.00px;top:324.00px" class="cls_010">
        <span class="cls_010">
            Are you very anxious/nervous about dental treatment?
            <input type="radio" name="yn12" value="yes12" value="<?php echo $found['yn12'];?>" checked>YES
            <input type="radio" name="yn12" value="no12" value="<?php echo $found['yn12'];?>"> NO
        </span>
        </div>
        <div style="position:absolute;left:36.00px;top:338.00px" class="cls_010">
        <span class="cls_010">
            WOMEN: Are you pregnant?
            <input type="radio" name="preg" value="yesPreg" value="<?php echo $found['preg'];?>">YES
            <input type="radio" name="preg" value="noPreg" value="<?php echo $found['preg'];?>"> NO
        </span>
        </div>
        <div style="position:absolute;left:236.78px;top:338.00px" class="cls_010">
        <span class="cls_010">
            Are you nursing?
            <input type="radio" name="nursing" value="yesNursing" value="<?php echo $found['nursing'];?>">YES
            <input type="radio" name="nursing" value="noNursing" value="<?php echo $found['nursing'];?>"> NO
        </span>
        </div>
        <div style="position:absolute;left:36.00px;top:362.00px" class="cls_012">
        <span class="cls_012">
            SIGNATURE<input type="text" name="signature2" style="width: 275px;" value="<?php echo $found['signature2'];?>">
            Date<input type="text" name="dateSign2" style="width: 150px;" value="<?php echo $found['dateSign2'];?>">
        </span>
        </div>
        <div style="position:absolute;left:36.00px;top:390.00px" class="cls_012">
            </span>
            SIGNATURE<input type="text" name="signature3" style="width: 275px;" readonly value="Doug Chung">
            Date<input type="text" name="dateSign3" style="width: 150px;"  value="<?php echo $found['dateSign3'];?>">
            </span>
        </div>
        <div style="position:absolute;left:99.80px;top:375.00px" class="cls_010"><span class="cls_010">patient/parent/spouse/guardian</span></div>
        <div style="position:absolute;left:99.80px;top:402.00px" class="cls_010"><span class="cls_010">Dentist Anesthesiologist</span></div>



        <div style="position:absolute;left:232.59px;top:410.00px" class="cls_005"><span class="cls_005">Consent for Anesthesia</span></div>
        <div style="position:absolute;left:36.00px;top:432.00px" class="cls_010"><span class="cls_010">I hereby consent to, and request Doug Chung, DDS to perform the anesthesia technique explained to me, and any</span></div>
        <div style="position:absolute;left:36.00px;top:443.00px" class="cls_010"><span class="cls_010">other procedure deemed necessary, or advisable relative to the planned anesthesia. It is the understanding of the</span></div>
        <div style="position:absolute;left:36.00px;top:454.00px" class="cls_010"><span class="cls_010">undersigned that Dr Chung will have full charge of the administration, and maintenance of the anesthesia, and that this</span></div>
        <div style="position:absolute;left:36.00px;top:465.00px" class="cls_010"><span class="cls_010">is an independent function from the surgery/dentistry. Anesthesia provided will either be intramuscular (IM) and/or</span></div>
        <div style="position:absolute;left:36.00px;top:476.00px" class="cls_010"><span class="cls_010">intravenously (IV), orally (premedication) or local anesthesia, and by inhalation (nasally - Nitrous Oxide and Oxygen).</span></div>
        <div style="position:absolute;left:36.00px;top:487.00px" class="cls_010"><span class="cls_010">Dr Chung practices dental anesthesiology with a Class IV anesthesia permit issued by the State of Utah. Monitoring during</span></div>
        <div style="position:absolute;left:36.00px;top:498.00px" class="cls_010"><span class="cls_010">the anesthetic will include automatic blood pressure cuff, EKG (heart), pulse oximeter (blood oxygen levels), capnography</span></div>
        <div style="position:absolute;left:36.00px;top:509.00px" class="cls_010"><span class="cls_010">(CO2 levels), temperature, precordial stethoscope, and observation.</span></div>
        <div style="position:absolute;left:36.00px;top:531.00px" class="cls_010"><span class="cls_010">I have been informed and understand that occasionally complications of the drugs and anesthesia occur, including, but</span></div>
        <div style="position:absolute;left:36.00px;top:542.00px" class="cls_010"><span class="cls_010">not limited to: tenderness, bruising, nausea, vomiting, swelling, bleeding, infection, numbness, allergic reaction, stroke, and</span></div>
        <div style="position:absolute;left:36.00px;top:553.00px" class="cls_010"><span class="cls_010">heart attack. Some of these complications may require hospitalization and may even result in death.</span></div>
        <div style="position:absolute;left:36.00px;top:564.00px" class="cls_013"><span class="cls_013">Severe complications are rare.</span></div>
        <div style="position:absolute;left:36.00px;top:586.00px" class="cls_010"><span class="cls_010">WOMEN: I understand that anesthetics, medications, and drugs may be harmful to the unborn child, and may cause birth</span></div>
        <div style="position:absolute;left:36.00px;top:597.00px" class="cls_010"><span class="cls_010">defects or spontaneous abortion (miscarriage), and I accept full responsibility for informing the anesthesiologist of a</span></div>
        <div style="position:absolute;left:36.00px;top:608.00px" class="cls_010"><span class="cls_010">suspected or confirmed pregnancy.</span></div>
        <div style="position:absolute;left:36.00px;top:630.00px" class="cls_010"><span class="cls_010">I have had an opportunity to ask questions relative to my specific treatment, and had them answered to my satisfaction.</span></div>
        <div style="position:absolute;left:36.00px;top:641.00px" class="cls_020"><span class="cls_020">I understand for the safety and protection of the patient that no family or friends are allowed in the operatory during the</span></div>
        <div style="position:absolute;left:36.00px;top:652.00px" class="cls_020"><span class="cls_020">surgery</span><span class="cls_010">.</span></div>
        <div style="position:absolute;left:36.00px;top:663.00px" class="cls_010"><span class="cls_010">I understand that this is not a release of liability form, but a consent to receive anesthesia, understanding that there are risks</span></div>
        <div style="position:absolute;left:36.00px;top:674.00px" class="cls_010"><span class="cls_010">involved. I acknowledge the receipt of and understand both the preoperative and postoperative anesthesia instructions.</span></div>



        <div style="position:absolute;left:36.00px;top:700.00px" class="cls_012">
        <span class="cls_012">
            SIGNATURE<input type="text" name="signature4" style="width: 275px;" value="<?php echo $found['signature4'];?>">
            Date<input type="text" name="dateSign4" style="width: 150px;" value="<?php echo $found['dateSign4'];?>">
        </span>
        </div>
        <div style="position:absolute;left:36.00px;top:730.00px" class="cls_012">
            </span>
            SIGNATURE<input type="text" name="signature5" style="width: 275px;" readonly value="Doug Chung">
            Date<input type="text" name="dateSign5" style="width: 150px;" readonly value="<?php echo $found['dateSign5'];?>">
            </span>
        </div>
        <div style="position:absolute;left:99.80px;top:713.00px" class="cls_010"><span class="cls_010">patient/parent/spouse/guardian</span></div>
        <div style="position:absolute;left:99.80px;top:744.00px" class="cls_010"><span class="cls_010">Dentist Anesthesiologist</span></div>


        <!-- SUMBIT BUTTON --------------------------------------------------------------------->


<!--        <div style="position:absolute;left:200.80px;top:760.00px">-->
<!--            <button class="submit" style="margin: 5px 10px;">CANCEL</button>-->
<!--            <input type="submit" name="submit" class="submit" style="margin: 5px 10px;" value="SUBMIT FORM">-->
<!--        </div>-->


    </div>
</form>


<!---------PAGE 3----------------------------------------------------------------------------------------->

<div style="position:absolute;left:50%;margin-left:-306px;top:1604px;width:612px;height:792px;border-style:outset;overflow:hidden">
    <div style="position:absolute;left:36.00px;top:18.00px" class="cls_002"><span class="cls_002">DOUG CHUNG, DDS</span></div>
    <div style="position:absolute;left:288.00px;top:18.00px" class="cls_019"><span class="cls_019"> </span><A HREF="">chungoffice@gmail.com</A> </div>
    <div style="position:absolute;left:476.80px;top:18.00px" class="cls_002"><span class="cls_002">PAGE 3</span></div>
    <div style="position:absolute;left:36.00px;top:41.00px" class="cls_005"><span class="cls_005">DENTAL ANESTHESIOLOGY  PO BOX 1058 DRAPER, UT 84020  (801) 571-5665   FAX (801)572-9491</span></div>
    <div style="position:absolute;left:36.00px;top:76.00px" class="cls_006"><span class="cls_006">Instructions For patients Prior To Anesthesia</span></div>
    <div style="position:absolute;left:36.00px;top:105.00px" class="cls_003"><span class="cls_003">Eating and Drinking:</span></div>
    <div style="position:absolute;left:180.00px;top:105.00px" class="cls_021"><span class="cls_021">Morning Appointment</span><span class="cls_003"> - NO food after midnight, clear liquids are</span></div>
    <div style="position:absolute;left:180.00px;top:118.00px" class="cls_003"><span class="cls_003">fine up to 2 hours before appointment time</span></div>
    <div style="position:absolute;left:180.00px;top:144.00px" class="cls_021"><span class="cls_021">Afternoon Appointment</span><span class="cls_003"> - A </span><span class="cls_022">light</span><span class="cls_003"> breakfast is fine - carbohydrates </span><span class="cls_022">only</span></div>
    <div style="position:absolute;left:180.00px;top:157.00px" class="cls_003"><span class="cls_003">(cereal, toast, oatmeal) - </span><span class="cls_022">no</span><span class="cls_003"> protein (no eggs, bacon, meats), must be</span></div>
    <div style="position:absolute;left:180.00px;top:170.00px" class="cls_003"><span class="cls_003">finished by 6 hours before appointment time.</span></div>
    <div style="position:absolute;left:180.00px;top:183.00px" class="cls_022"><span class="cls_022">Clear</span><span class="cls_003"> liquids are fine up to 2 hours before appointment time.</span></div>
    <div style="position:absolute;left:36.00px;top:209.00px" class="cls_003"><span class="cls_003">Medications:</span></div>
    <div style="position:absolute;left:180.00px;top:209.00px" class="cls_003"><span class="cls_003">Discuss with Dr Chung which of your normal medications to take</span></div>
    <div style="position:absolute;left:180.00px;top:222.00px" class="cls_003"><span class="cls_003">the day of the appointment.</span></div>
    <div style="position:absolute;left:36.00px;top:248.00px" class="cls_003"><span class="cls_003">Change of Health:</span></div>
    <div style="position:absolute;left:180.00px;top:248.00px" class="cls_003"><span class="cls_003">A change in health can affect the anesthesia, </span><span class="cls_022">please call us as</span></div>
    <div style="position:absolute;left:180.00px;top:261.00px" class="cls_022"><span class="cls_022">soon as possible</span><span class="cls_003"> to evaluate.</span></div>
    <div style="position:absolute;left:36.00px;top:287.00px" class="cls_003"><span class="cls_003">Clothing:</span></div>
    <div style="position:absolute;left:180.00px;top:287.00px" class="cls_003"><span class="cls_003">Wear comfortable, loose fitting clothes. Short sleeves please.</span></div>
    <div style="position:absolute;left:36.00px;top:313.00px" class="cls_003"><span class="cls_003">Arriving:</span></div>
    <div style="position:absolute;left:180.00px;top:313.00px" class="cls_003"><span class="cls_003">A responsible adult must drive you to the appointment.</span></div>
    <div style="position:absolute;left:36.00px;top:342.00px" class="cls_006"><span class="cls_006">Instructions For Patients Following Anesthesia</span></div>
    <div style="position:absolute;left:36.00px;top:371.00px" class="cls_003"><span class="cls_003">Returning Home:</span></div>
    <div style="position:absolute;left:180.00px;top:371.00px" class="cls_021"><span class="cls_021">The patient must be accompanied by a responsible adult at the</span></div>
    <div style="position:absolute;left:180.00px;top:384.00px" class="cls_021"><span class="cls_021">time of discharge</span><span class="cls_003">. Postoperatively the patient cannot drive, take</span></div>
    <div style="position:absolute;left:180.00px;top:397.00px" class="cls_003"><span class="cls_003">a bus, or a taxi to return home. Patient cannot drive for 24 hours.</span></div>
    <div style="position:absolute;left:36.00px;top:423.00px" class="cls_003"><span class="cls_003">Pain Management:</span></div>
    <div style="position:absolute;left:180.00px;top:423.00px" class="cls_003"><span class="cls_003">Sensitivity, tenderness, or pain in the mouth can be expected after</span></div>
    <div style="position:absolute;left:180.00px;top:436.00px" class="cls_003"><span class="cls_003">the treatment. Your dentist will prescribe any needed pain meds.</span></div>
    <div style="position:absolute;left:180.00px;top:449.00px" class="cls_003"><span class="cls_003">Tenderness or bruising at the IM/IV site is possible, and if uncom-</span></div>
    <div style="position:absolute;left:180.00px;top:462.00px" class="cls_003"><span class="cls_003">fortable can be treated with applying warm moist heat to the site,</span></div>
    <div style="position:absolute;left:180.00px;top:475.00px" class="cls_003"><span class="cls_003">and taking Ibuprofen. Take pain meds with food in the stomach.</span></div>
    <div style="position:absolute;left:36.00px;top:501.00px" class="cls_003"><span class="cls_003">Eating and Drinking:</span></div>
    <div style="position:absolute;left:180.00px;top:501.00px" class="cls_003"><span class="cls_003">Eating and drinking may be attempted whenever the patient desires</span></div>
    <div style="position:absolute;left:180.00px;top:514.00px" class="cls_003"><span class="cls_003">(asks for). Start out easy with small amounts of clear liquids,</span></div>
    <div style="position:absolute;left:180.00px;top:527.00px" class="cls_003"><span class="cls_003">and then soft foods when ready. No alcohol for 24 hours after anesthesia.</span></div>
    <div style="position:absolute;left:36.00px;top:553.00px" class="cls_003"><span class="cls_003">Nausea and Vomiting:</span></div>
    <div style="position:absolute;left:180.00px;top:553.00px" class="cls_003"><span class="cls_003">Some nausea or vomiting can occur postoperatively. The most common</span></div>
    <div style="position:absolute;left:180.00px;top:566.00px" class="cls_003"><span class="cls_003">cause is movement while the patient is still dizzy (like motion sickness). Try</span></div>
    <div style="position:absolute;left:180.00px;top:579.00px" class="cls_003"><span class="cls_003">to limit the patient’s movement until the dizziness is gone. Eating too much</span></div>
    <div style="position:absolute;left:180.00px;top:592.00px" class="cls_003"><span class="cls_003">food, too soon, can upset the patients stomach also. Swallowing blood</span></div>
    <div style="position:absolute;left:180.00px;top:605.00px" class="cls_003"><span class="cls_003">and pain pills on an empty stomach will cause nausea/vomiting.</span></div>
    <div style="position:absolute;left:36.00px;top:631.00px" class="cls_003"><span class="cls_003">Activity:</span></div>
    <div style="position:absolute;left:180.00px;top:631.00px" class="cls_003"><span class="cls_003">After returning home the patient should rest for the first day and be</span></div>
    <div style="position:absolute;left:180.00px;top:644.00px" class="cls_003"><span class="cls_003">attended by someone responsible. Keep the patient’s head propped up</span></div>
    <div style="position:absolute;left:180.00px;top:657.00px" class="cls_003"><span class="cls_003">on a pillow, and remove any gauze packs upon returning home.</span></div>
    <div style="position:absolute;left:36.00px;top:698.00px" class="cls_015"><span class="cls_015">If you have any questions or concerns call Dr Chung (801) 571-5665</span></div>
</div>

</body>
</html>



