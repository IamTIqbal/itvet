<?php
    include("source.php");

    $objitvetAdmin = new itvetApp();

    $students = $objitvetAdmin->display_data();

    if(isset($_GET['id'])){
            $id = $_GET['id'];
            $returndata= $objitvetAdmin->display_data_by_id($id);
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information | Ahsanullah Institute of Technical &amp; Vocational Education &amp; Training</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
</head>
<body>
    <div class="container">
        <div class="top_container">
            <div class="top_menu">
                <nav id="nav420">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="">Student Information</a></li>
                        <li><a href="update.php">Update Information</a></li>
                        <li><a href="about-us.php">About AITVET</a></li>
                        <li><a href="admission.php">Admission</a></li>
                    </ul>
                </nav> 
            </div>
            <div class="logo_container">
                <div class="logo_container_left">
                    <div class="logo"><img src="img/logo.png"></div>
                    <div class="logoname">
                        <div class="logo_name1">Ahsanullah Institute of Technical &amp; Vocational Education &amp; Training</div>
                        <div class="logo_name2">AITVET<span style="white-space:nowrap;font-size:18px;color:#000;font-weight: bold;">Since 1995</span></div>
                        <div class="logo_name3">Professional Education</div>
                    </div>
                </div>
                <div class="logo_container_right">
                    <div class="searchArea">
                        <div class="serch_right">
                            <form method="get" id="search" action="">
                                <input type="text" class="field" name="id" id="uname" placeholder="Admission Roll">
                                <button type="submit" class="submit" id="searchbtn">Submit</button>
                            </form>
                        </div>	
                    </div>
                </div>
            </div>
        </div>
        <div class=Iqbal201>
            <table class=IqbalTable201 border=0 cellspacing=0 cellpadding=0 width=744>
            <tbody>                         <!--Student Information-->
                <tr style=height:100px;width:100px;>
                    <td width=96 style='width:71.85pt;height:100px;width:100px;'>
                        <img width=74 height=96 src="img/aitvet.png" align=center hspace=12>
                    </td>
                    <td width=547 align=center colspan=10 style='width:500pt;height:100px;width:100px;'><br/>
                        <span style='font-size:20pt;font-family:"Times New Roman",serif'><b>Ahsanullah Institute of</span><br/><span style='font-size:14pt;font-family:"Times New Roman",serif'>Technical &amp; Vocational Education &amp; Training</b></span><br><span style='font-size:15.0pt;font-family:"Times New Roman",serif'> (AITVET)</span><br/><span style='font-size:10.0pt;font-family:"Times New Roman",serif'>ASister Concern of Ahsanullah University of Science of Technology<br>Sponsored by Dhaka Ahsania Mission and affiliated with Bangladesh Technical Education Board</span>
                    </td>
                    <td width=101 style='width:75.8pt;height:100px;width:100px;'>
                        <img width=77 height=96 src="img/dam.png">
                    </td>
                </tr>
                <tr style='height:36.45pt'>
                    <td width=744 align=center colspan=12 style='width:7.75in;height:36.45pt'>
                        <b><u><span style='font-size:16.50pt;font-family:"Monotype Corsiva";'>Student Information</span></u></b><br/>
                        <b><span style='font-size:10pt;font-family:"Times New Roman",serif'>DIPLOMA - IN - ENGINEERING (Duration 4 Years)</span></b>
                    </td>
                </tr>
                <tr style='height:22.3pt'>
                    <td width=143 colspan=3 style='width:107.25pt;'>
                        <span>Admission ID</span>
                    </td>
                    <td width=271 colspan=3 style='width:203.5pt;'>
                        <b><span><?php if(isset($returndata['id'])){echo $returndata['id'];} ?></span></b>
                    </td>
                    <td width=210 colspan=4 style='width:157.25pt;'>
                        <span>Campus:<b> <?php if(isset($returndata['campus'])){echo $returndata['campus'];} ?></b></span>
                    </td>
                    <td width=120 colspan=2 rowspan=3 style='width:1.25in;'>
                        <img width=96 height=96 src="img/<?php if(isset($returndata['photo'])){echo $returndata['photo'];} ?>">
                    </td>
                </tr>
                <tr style='height:22.0pt'>
                    <td width=143 colspan=3 id=td-101>
                        <span>Session</span>
                    </td>
                    <td width=271 colspan=3 id=size-101>
                        <b><span><?php if(isset($returndata['session'])){echo $returndata['session'];} ?></span></b>
                    </td>
                    <td width=210 colspan=4 style='width:157.25pt;'>
                        <span>Current Semester:<b>First </b></span>
                    </td>
                </tr>
                <tr style='height:22.0pt'>
                    <td width=143 colspan=3 id=td-101>
                        <span>Department</span>
                    </td>
                    <td width=271 colspan=3 id=size-101>
                        <b><span><?php if(isset($returndata['department'])){echo $returndata['department'];} ?></span></b>
                    </td>
                    <td width=210 colspan=4 style='width:157.25pt;'>
                        <span>Section:<b> <?php if(isset($returndata['shift'])){echo $returndata['shift'];} ?></b></span>
                    </td>
                </tr>
                <tr style='height:22.0pt'>
                    <td width=143 colspan=3 id=td-101>
                        <span>Student Name</span>
                    </td>
                    <td width=271 colspan=3 id=size-101>
                        <b><span><?php if(isset($returndata['name'])){echo $returndata['name'];} ?></span></b>
                    </td>
                    <td width=330 colspan=6 style='width:247.25pt;'>
                    </td>
                </tr>
                <tr style='height:22.0pt'>
                    <td width=143 colspan=3 id=td-101>
                        <span>Father's Name</span>
                    </td>
                    <td width=271 colspan=3 id=size-101>
                        <b><span><?php if(isset($returndata['father_name'])){echo $returndata['father_name'];} ?></span></b>
                    </td>
                    <td width=137 colspan=3 id=size-103>
                        <span>Phone Number</span>
                    </td>
                    <td width=193 colspan=3 style='width:144.6pt;'>
                        <b><span><?php if(isset($returndata['parent_phone_1'])){echo $returndata['parent_phone_1'];} ?></span></b>
                    </td>
                </tr>
                <tr style='height:22.0pt'>
                    <td width=143 colspan=3 id=td-101>
                        <span>Mother's Name</span>
                    </td>
                    <td width=271 colspan=3 id=size-101>
                        <b><span><?php if(isset($returndata['mother_name'])){echo $returndata['mother_name'];} ?></span></b>
                    </td>
                    <td width=137 colspan=3 id=size-103>
                        <span>Phone Number</span>
                    </td>
                    <td width=193 colspan=3 style='width:144.6pt;'>
                        <b><span><?php if(isset($returndata['parent_phone_2'])){echo $returndata['parent_phone_2'];} ?></span></b>
                    </td>
                    </tr>
                    <tr style='height:22.0pt'>
                        <td width=143 colspan=3 id=td-101>
                            <span>Guardian Name</span>
                        </td>
                        <td width=271 colspan=3 id=size-101>
                            <b><span><?php if(isset($returndata['guardian_name'])){echo $returndata['guardian_name'];} ?></span></b>
                        </td>
                        <td width=137 colspan=3 id=size-103>
                        <span>Guardian Relation</span>
                        </td>
                        <td width=193 colspan=3 style='width:144.6pt;'>
                            <b><span><?php if(isset($returndata['guardian_rel'])){echo $returndata['guardian_rel'];} ?></span></b>
                        </td>
                    </tr>
                    <tr style='height:22.0pt'>
                        <td width=143 colspan=3 id=td-101>
                            <span>Student Phone</span>
                        </td>
                        <td width=271 colspan=3 id=size-101>
                            <b><span><?php if(isset($returndata['std_phone'])){echo $returndata['std_phone'];} ?></span></b>
                        </td>
                        <td width=137 colspan=3 id=size-103>
                            <span>Blood Group</span>
                        </td>
                        <td width=193 colspan=3 style='width:144.6pt;'>
                            <b><span><?php if(isset($returndata['blood_group'])){echo $returndata['blood_group'];} ?></span></b>
                        </td>
                    </tr>
                    <tr style='height:22.0pt'>
                        <td width=143 colspan=3 id=td-101>
                            <span>SSC Broad Roll</span>
                        </td>
                        <td width=271 colspan=3 id=size-101>
                            <b><span><?php if(isset($returndata['ssc_roll'])){echo $returndata['ssc_roll'];} ?></span></b>
                        </td>
                        <td width=137 colspan=3 id=size-103>
                            <span>SSC Registration No.</span>
                        </td>
                        <td width=193 colspan=3 style='width:144.6pt;'>
                            <b><span><?php if(isset($returndata['ssc_reg'])){echo $returndata['ssc_reg'];} ?></span></b>
                        </td>
                    </tr>
                    <tr style='height:22.0pt'>
                        <td width=143 colspan=3 id=td-101>
                            <span>Guide Techer</span>
                        </td>
                        <td width=271 colspan=3 id=size-101>
                            <b><span>Shirin Akter</span></b>
                        </td>
                        <td width=137 colspan=3 id=size-103>
                            <span>Department Head</span>
                        </td>
                        <td width=193 colspan=3 style='width:144.6pt;'>
                            <b><span>Mostafizur Rahman</span></b>
                        </td>
                    </tr>
                    <tr style='height:22.0pt'>
                        <td width=143 colspan=3 id=td-101>
                        </td>
                        <td width=271 colspan=3 id=size-101>
                        </td>
                        <td width=137 colspan=3 id=size-103>              
                        </td>
                        <td width=193 colspan=3 style='width:144.6pt;'>
                        </td>
                    </tr>
                    </tbody>
            </table>
        </div>
    </div>
    <div class="develop_container">
        <div class="reserved">©2022 AITVET All Right Reserved.</div>
        <div class="developed">Design and Developed by <span class="style7"><a href="https://iit.akbor.org/" target="_blank">Akbor IIT</a></span></div>
    </div>
</body>
</html>