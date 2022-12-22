<?php
    include("source.php");

    $objitvetAdmin = new itvetApp();

    $students = $objitvetAdmin->display_data();

    if(isset($_GET['id'])){
            $id = $_GET['id'];
            $returndata= $objitvetAdmin->display_data_by_id($id);
        }
    if(isset($_POST['edit_btn'])){
        $return_msg =$objitvetAdmin->update_data($_POST);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Information | Ahsanullah Institute of Technical &amp; Vocational Education &amp; Training</title>
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
                        <li><a href="student.php">Student Information</a></li>
                        <li><a href="">Update Information</a></li>
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
            <form action="" method="post" enctype="multipart/form-data">
            <tbody>                         <!--Student Information-->
                <tr style='height:auto'>
                    <th colspan="12"> 
                        <h1 style="text-align: center;">Update Admission Information</h1>
                        <?php if(isset($return_msg)){echo $return_msg;} ?>
                    </th>
                </tr>
                <tr style="height:22.3pt">
                    <td colspan="3">
                        <span>Application ID</span>
                    </td>
                    <td  colspan="3" >
                        <b><span>
                        <input type="number" name="ustd_id" id="dbox" readonly value="<?php if(isset($returndata['id'])){echo $returndata['id'];} ?>" type="text">
                        </span></b>
                    </td>
                    <td colspan="4">
                        <span>Campus:</span>
                        <input type=text name="ucampus" id="dbox" value="<?php if(isset($returndata['campus'])){echo $returndata['campus'];} ?>" style='width:60%;'>
                    </td>
                    <td colspan="2" rowspan="3">
                        <input type="file" name="uphoto" accept="image/*" onchange="loadFile(event)">
                        <img height="100px" id="output" />
                        <script>
                        var loadFile = function(event) {
                            var output = document.getElementById('output');
                            output.src = URL.createObjectURL(event.target.files[0]);
                            output.onload = function() {
                            URL.revokeObjectURL(output.src)
                            }
                        };
                        </script>
                    </td>
                </tr>
                <tr style='height:22.0pt'>
                    <td  colspan=3 id=td-101>
                        <span>Session</span>
                    </td>
                    <td  colspan=3 id=size-101>
                    <input type="text" name="usession" readonly id="dbox" value="<?php if(isset($returndata['session'])){echo $returndata['session'];} ?>">
                    </td>
                    <td  colspan=4 >
                        <span>Department</span>
                        <input type="text" name="udpt" id="dbox" readonly value="<?php if(isset($returndata['department'])){echo $returndata['department'];} ?>" style='width:50%;'>
                        </td>
                </tr>
                <tr style='height:22.0pt'>
                    <td  colspan=3 id=td-101>
                        <span>Date Of Birth </span>
                    </td>
                    <td  colspan=3 id=size-101>
                        <input type="date" name="udob" id="dob" value="<?php if(isset($returndata['date_of_birth'])){echo $returndata['date_of_birth'];} ?>">
                    </td>
                    <td  colspan=4 >
                        <span>Section:</span>
                        <input type=text name="usection" readonly value="<?php if(isset($returndata['shift'])){echo $returndata['shift'];} ?>" id="dbox" style='width:50%;'>
                    </td>
                </tr>
                <tr style='height:22.0pt'>
                    <td  colspan=3 id=td-101>
                        <span>Student Name</span>
                    </td>
                    <td  colspan=3 id=size-101>
                        <input type="text" name="uname" id="name" value="<?php if(isset($returndata['name'])){echo $returndata['name'];} ?>">
                    </td>
                    <td  colspan=6>
                    </td>
                </tr>
                <tr style='height:22.0pt'>
                    <td  colspan=3 id=td-101>
                        <span>Father's Name</span>
                    </td>
                    <td  colspan=3 id=size-101>
                        <input type="text" name="ufname" id="fname" value="<?php if(isset($returndata['father_name'])){echo $returndata['father_name'];} ?>">
                    </td>
                    <td  colspan=3 id=size-103>
                        <span>Phone Number</span>
                    </td>
                    <td  colspan=3>
                        <input type="tel" name="uphone" id="phone" value="<?php if(isset($returndata['parent_phone_1'])){echo $returndata['parent_phone_1'];} ?>">
                    </td>
                </tr>
                <tr style='height:22.0pt'>
                    <td  colspan=3 id=td-101>
                        <span>Mother's Name</span>
                    </td>
                    <td  colspan=3 id=size-101>
                        <input type="text" name="umname" id="mname" value="<?php if(isset($returndata['mother_name'])){echo $returndata['mother_name'];} ?>">
                    </td>
                    <td  colspan=3 id=size-103>
                        <span>Phone Number</span>
                    </td>
                    <td  colspan=3>
                        <input type="tel" name="umcall" id="mcall" value="<?php if(isset($returndata['parent_phone_2'])){echo $returndata['parent_phone_2'];} ?>">
                    </td>
                    </tr>
                    <tr style='height:22.0pt'>
                        <td  colspan=3 id=td-101>
                            <span>Guardian Name</span>
                        </td>
                        <td  colspan=3 id=size-101>
                            <input type="text" name="ugname" id="gname" value="<?php if(isset($returndata['guardian_name'])){echo $returndata['guardian_name'];} ?>">
                        </td>
                        <td  colspan=3 id=size-103>
                        <span>Guardian Relation</span>
                        </td>
                        <td  colspan=3>
                            <input type="text" name="ugrel" id="grel" value="<?php if(isset($$returndata['guardian_rel'])){echo $returndata['guardian_rel'];} ?>">
                        </td>
                    </tr>
                    <tr style='height:22.0pt'>
                        <td  colspan=3 id=td-101>
                            <span>Student Phone</span>
                        </td>
                        <td  colspan=3 id=size-101>
                            <input type="text" name="ustudentphn" id="studentphn" value="<?php if(isset($returndata['std_phone'])){echo $returndata['std_phone'];} ?>">
                        </td>
                        <td  colspan=3 id=size-103>
                            <span>Blood Group</span>
                        </td>
                        <td  colspan=3>
                            <input type="text" name="ublood" id="blood" value="<?php if(isset($returndata['blood_group'])){echo $returndata['blood_group'];} ?>">
                        </td>
                    </tr>
                    <tr style='height:22.0pt'>
                        <td  colspan=3 id=td-101>
                            <span>SSC Broad Roll</span>
                        </td>
                        <td  colspan=3 id=size-101>
                            <input type="number" name="usscroll" readonly value="<?php if(isset($returndata['ssc_roll'])){echo $returndata['ssc_roll'];} ?>" id="dbox">
                        </td>
                        <td  colspan=3 id=size-103>
                            <span>SSC Registration No.</span>
                        </td>
                        <td  colspan=3>
                            <input type="number" name="usscreg" value="<?php if(isset($returndata['ssc_reg'])){echo $returndata['ssc_reg'];} ?>" readonly id="dbox">
                        </td>
                    </tr>
                    <tr style='height:22.0pt'>
                        <td  colspan=3 id=td-101>
                            <span>Board</span>
                        </td>
                        <td  colspan=3 id=size-101>
                            <input type="text" value="<?php if(isset($returndata['ssc_board'])){echo $returndata['ssc_board'];} ?>" readonly name="ueduboard" id="dbox" style='width:65%;'>
                        </td>
                        <td  colspan=3 id=size-103>
                            <span>SSC Depernment</span>
                        </td>
                        <td  colspan=3>
                            <input type=text value="<?php if(isset($returndata['ssc_dpt'])){echo $returndata['ssc_dpt'];} ?>" readonly name="usscdpt" id="dbox" style='width:65%;'>
                        </td>
                    </tr>
                    <tr style='height:22.0pt'>
                        <td  colspan=3 id=td-101>
                            <span>GPA</span>
                        </td>
                        <td  colspan=3 id=size-101>
                            <input type="text" name="usscgpa" value="<?php if(isset($returndata['ssc_gpa'])){echo $returndata['ssc_gpa'];} ?>" readonly id="dbox">
                        </td>
                        <td  colspan=3 id=size-103>
                            <span>Passing Year</span>
                        </td>
                        <td  colspan=3>
                            <input type="number" value="<?php if(isset($returndata['ssc_pass'])){echo $returndata['ssc_pass'];} ?>" name="usscpass">
                        </td>
                    </tr>
                    <tr style='height:22.0pt'>
                        <td  colspan=3 id=td-101>
                        </td>
                        <td  colspan=3 id=size-101>
                        </td>
                        <td  colspan=3 id=size-103>              
                        </td>
                        <td  colspan=3>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" name="edit_btn" class="updatebtn" value="Submit">
                        </td>
                    </tr>
                </tbody>
                </form>
            </table>
    </div>
    </div>
    <div class="develop_container">
        <div class="reserved">©2022 AITVET All Right Reserved.</div>
        <div class="developed">Design and Developed by <span class="style7"><a href="https://iit.akbor.org/" target="_blank">Akbor IIT</a></span></div>
    </div>
</body>
</html>