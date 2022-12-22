<?php
    include("source.php");

    $objitvetAdmin = new itvetApp();

    if(isset($_POST['add_info'])){
        $return_msg = $objitvetAdmin->add_data($_POST);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission | Ahsanullah Institute of Technical &amp; Vocational Education &amp; Training</title>
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
                        <li><a href="update.php">Update Information</a></li>
                        <li><a href="about-us.php">About AITVET</a></li>
                        <li><a href="">Admission</a></li>
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
                            <form method="get" id="search" action="student.php">
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
                        <h1 style="text-align: center;">Admission Form</h1>
                        <?php if(isset($return_msg)){echo $return_msg;} ?>
                    </th>
                </tr>
                <tr style="height:22.3pt">
                    <td colspan="3">
                        <span>Application ID</span>
                    </td>
                    <td  colspan="3" >
                        <b><span>
                        <input name="std_id" id="uid" readonly value="<?php
                            function uid() {
                                $alphabet = "0123456789";
                                $pass = array(); //remember to declare $pass as an array
                                $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
                                for ($i = 0; $i < 7; $i++) {
                                    $n = rand(0, $alphaLength);
                                    $pass[] = $alphabet[$n];
                                }
                                return implode($pass); //turn the array into a string
                            }

                            echo uid();
                            ?>" type="text">
                        </span></b>
                    </td>
                    <td colspan="4">
                        <span>Campus:</span>
                        <select name="campus" id="dbox" style='width:60%;'>
                            <option value="Karwan Bazar">Karwan Bazar</option>
                            <option value="Ashulia">Ashulia</option>
                        </select>
                    </td>
                    <td colspan="2" rowspan="3">
                        <input type="file" name="photo" accept="image/*" onchange="loadFile(event)">
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
                    <input type="text" name="session" readonly id="session" value="2022-2023">
                    </td>
                    <td  colspan=4 >
                        <span>Department</span>
                        <select name="dpt" id="dbox" style='width:50%;'>
                            <option value="Architecture">Architecture</option>
                            <option value="Civil">Civil</option>
                            <option value="Computer">Computer</option>
                            <option value="Electrical">Electrical</option>
                            <option value="Electronics">Electronics</option>
                            <option value="Chemical">Chemical</option>
                            <option value="Textile">Textile</option>
                        </select>
                        </td>
                </tr>
                <tr style='height:22.0pt'>
                    <td  colspan=3 id=td-101>
                        <span>Date Of Birth </span>
                    </td>
                    <td  colspan=3 id=size-101>
                        <input type="date" name="dob" id="dob" placeholder="Date Of Birth">
                    </td>
                    <td  colspan=4 >
                        <span>Section:</span>
                        <select name="section" id="dbox" style='width:50%;'>
                            <option value="Day">Day</option>
                            <option value="Morning">Morning</option>
                        </select>
                    </td>
                </tr>
                <tr style='height:22.0pt'>
                    <td  colspan=3 id=td-101>
                        <span>Student Name</span>
                    </td>
                    <td  colspan=3 id=size-101>
                        <input type="text" name="name" id="name" placeholder="Student Name">
                    </td>
                    <td  colspan=6>
                    </td>
                </tr>
                <tr style='height:22.0pt'>
                    <td  colspan=3 id=td-101>
                        <span>Father's Name</span>
                    </td>
                    <td  colspan=3 id=size-101>
                        <input type="text" name="fname" id="fname" placeholder="Father's Name">
                    </td>
                    <td  colspan=3 id=size-103>
                        <span>Phone Number</span>
                    </td>
                    <td  colspan=3>
                        <input type="tel" name="phone" id="phone" placeholder="Contact Number">
                    </td>
                </tr>
                <tr style='height:22.0pt'>
                    <td  colspan=3 id=td-101>
                        <span>Mother's Name</span>
                    </td>
                    <td  colspan=3 id=size-101>
                        <input type="text" name="mname" id="mname" placeholder="Mother's Name">
                    </td>
                    <td  colspan=3 id=size-103>
                        <span>Phone Number</span>
                    </td>
                    <td  colspan=3>
                        <input type="tel" name="mcall" id="mcall" placeholder="Mother's Phone">
                    </td>
                    </tr>
                    <tr style='height:22.0pt'>
                        <td  colspan=3 id=td-101>
                            <span>Guardian Name</span>
                        </td>
                        <td  colspan=3 id=size-101>
                            <input type="text" name="gname" id="gname" placeholder="If Need or N/A">
                        </td>
                        <td  colspan=3 id=size-103>
                        <span>Guardian Relation</span>
                        </td>
                        <td  colspan=3>
                            <input type="text" name="grel" id="grel" placeholder="If need or N/A">
                        </td>
                    </tr>
                    <tr style='height:22.0pt'>
                        <td  colspan=3 id=td-101>
                            <span>Student Phone</span>
                        </td>
                        <td  colspan=3 id=size-101>
                            <input type="text" name="studentphn" id="studentphn" placeholder="Student's Phone">
                        </td>
                        <td  colspan=3 id=size-103>
                            <span>Blood Group</span>
                        </td>
                        <td  colspan=3>
                            <input type="text" name="blood" id="blood" placeholder="Blood Group">
                        </td>
                    </tr>
                    <tr style='height:22.0pt'>
                        <td  colspan=3 id=td-101>
                            <span>SSC Broad Roll</span>
                        </td>
                        <td  colspan=3 id=size-101>
                            <input type="number" name="sscroll" id="roll" placeholder="S.S.C or Equivalent">
                        </td>
                        <td  colspan=3 id=size-103>
                            <span>SSC Registration No.</span>
                        </td>
                        <td  colspan=3>
                            <input type="number" name="sscreg" id="reg" placeholder="Registration No.">
                        </td>
                    </tr>
                    <tr style='height:22.0pt'>
                        <td  colspan=3 id=td-101>
                            <span>Board</span>
                        </td>
                        <td  colspan=3 id=size-101>
                            <select name="eduboard" id="dbox" style='width:65%;'>
                                <option value="Barisal">Barisal</option>
                                <option value="Chittagong">Chittagong</option>
                                <option value="Comilla">Comilla</option>
                                <option value="Dinajpur">Dinajpur</option>
                                <option value="Dhaka">Dhaka</option>
                                <option value="Jessore">Jessore</option>
                                <option value="Mymensingh">Mymensingh</option>
                                <option value="Sylhet">Sylhet</option>
                                <option value="Rajshahi">Rajshahi</option>
                                <option value="Madrasha">Madrasha</option>
                                <option value="Technical">Technical</option>
                            </select>
                        </td>
                        <td  colspan=3 id=size-103>
                            <span>SSC Depernment</span>
                        </td>
                        <td  colspan=3>
                            <select name="sscdpt" id="dbox" style='width:65%;'>
                                <option value="Arts">Arts</option>
                                <option value="Commerce_BS">Commerce/Business Studies</option>
                                <option value="Science">Science</option>
                                <option value="Vocational">Vocational</option>
                                <option value="Madrasah">Madrasah</option>
                                <option value="O Level">O Level</option>
                            </select>
                        </td>
                    </tr>
                    <tr style='height:22.0pt'>
                        <td  colspan=3 id=td-101>
                            <span>GPA</span>
                        </td>
                        <td  colspan=3 id=size-101>
                            <input type="text" name="sscgpa" id="gpa" placeholder="GPA out of 5">
                        </td>
                        <td  colspan=3 id=size-103>
                            <span>Passing Year</span>
                        </td>
                        <td  colspan=3>
                            <input type="year" name="sscpass" id="passing year" placeholder="Passing Year">
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
                            <input type="submit" name="add_info" class="updatebtn" value="Submit">
                        </td>
                    </tr>
                </tbody>
                </form>
            </table>
    </div>
    <div class="develop_container">
        <div class="reserved">©2022 AITVET All Right Reserved.</div>
        <div class="developed">Design and Developed by <span class="style7"><a href="https://iit.akbor.org/" target="_blank">Akbor IIT</a></span></div>
    </div>  
</body>
</html>