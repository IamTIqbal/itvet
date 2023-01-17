<?php
    include("source.php");

    $objectAitvetAdmin = new itvetApp();

    $students = $objectAitvetAdmin->display_data();

    if(isset($_GET['id'])){
            $id = $_GET['id'];
            $returndata= $objectAitvetAdmin->display_data_by_id($id);
        }
    if(isset($_POST['edit_btn'])){
        $return_msg =$objectAitvetAdmin->update_data($_POST);
    }
    if(isset($_GET['delete_id'])){
        $delete_id = $_GET['delete_id'];
        $delete_msg = $objectAitvetAdmin->delete_data($delete_id);
    }
    include_once("includes/head.php");
?>
<div class=container>
        <form class="d-flex" action="" method="GET">
            <input class="btn form-control-sm btn-outline-secondary"  type="search" name="id" placeholder="Admission ID" aria-label="Find">
            <button class="btn btn-success" type="submit">Search</button>
        </form>
    <table class="table table-borderless form-group">
        <h1 class="fs-2 text-center">Update Information</h1>
        <p class="fs-4 ba-text text-center" style="color:green;"> <?php if(isset($return_msg)){echo $return_msg;} ?>
        </p>
        <p class="fs-4 ba-text text-center" style="color:red;">  <?php if(isset($delete_msg)){echo $delete_msg;} ?>
        </p>
        <tbody>
        <form action="" method="POST" enctype="multipart/form-data">
        <tr class="lead ">
        <td colspan="3">
           Application ID
        </td>
        <td  colspan="3" >
            <?php if(isset($returndata['id'])){echo $returndata['id'];} ?>
            <input type="hidden" name="suid" value="<?php if(isset($returndata['id'])){echo $returndata['id'];} ?>">
        </td>
        <td colspan="4">
        Campus: <?php if(isset($returndata['campus'])){echo $returndata['campus'];} ?>
        </td>
        <td colspan="2" rowspan="3">
            <input type="file" name="uphoto" class="form-control-file" accept="image/*" onchange="loadFile(event)"><br>
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
        <tr class="lead ">
            <td  colspan=3>
                Session
            </td>
            <td  colspan=3>
                <?php if(isset($returndata['session'])){echo $returndata['session'];} ?>
            </td>
            <td  colspan=4 >
                Department: <?php if(isset($returndata['department'])){echo $returndata['department'];} ?>  
            </td>
        </tr>
        <tr class="lead ">
            <td  colspan=3>
                Date Of Birth 
            </td>
            <td  colspan=3>
                <?php if(isset($returndata['date_of_birth'])){echo $returndata['date_of_birth'];} ?>
            </td>
            <td  colspan=4 >
                Section: <?php if(isset($returndata['shift'])){echo $returndata['shift'];} ?>
            </td>
        </tr >
        <tr class="lead ">
            <td  colspan=3>
                Student Name
            </td>
            <td  colspan=3>
                <input  type="text"  style="border:1px solid;" name="uname" class="form-control" value="<?php if(isset($returndata['name'])){echo $returndata['name'];} ?>" >
            </td>
            <td  colspan=6>
            </td>
        </tr>
        <tr class="lead ">
            <td  colspan=3>
                Father's Name
            </td>
            <td  colspan=3>
                <input type="text"  style="border:1px solid;" name="ufname" class="form-control" value="<?php if(isset($returndata['father_name'])){echo $returndata['father_name'];} ?>">
            </td>
            <td  colspan=3 >
                Phone Number
            </td>
            <td  colspan=3>
                <input type="tel"  style="border:1px solid;"  name="uphone" class="form-control" value="<?php if(isset($returndata['parent_phone_1'])){echo $returndata['parent_phone_1'];} ?>">
            </td>
        </tr>
        <tr class="lead ">
            <td  colspan=3>
                Mother's Name
            </td>
            <td  colspan=3>
                <input type="text"  style="border:1px solid;" name="umname" class="form-control" value="<?php if(isset($returndata['mother_name'])){echo $returndata['mother_name'];} ?>">
            </td>
            <td  colspan=3 >
                Phone Number
            </td>
            <td  colspan=3>
                <input type="tel"  style="border:1px solid;" name="umcall" class="form-control" value="<?php if(isset($returndata['parent_phone_2'])){echo $returndata['parent_phone_2'];} ?>">
            </td>
        </tr>
        <tr class="lead ">
            <td  colspan=3>
                Guardian Name
            </td>
            <td  colspan=3>
                <input type="text"  style="border:1px solid;" name="ugname" class="form-control" value="<?php if(isset($returndata['guardian_name'])){echo $returndata['guardian_name'];} ?>">
            </td>
            <td  colspan=3 >
                Guardian Relation
            </td>
            <td  colspan=3>
                <input type="text"  style="border:1px solid;" name="ugrel" class="form-control" value="<?php if(isset($returndata['guardian_rel'])){echo $returndata['guardian_rel'];} ?>">
            </td>
        </tr>
        <tr class="lead ">
            <td  colspan=3>
                Student Phone
            </td>
            <td  colspan=3>
                <input type="text"  style="border:1px solid;" name="ustudentphn" class="form-control" value="<?php if(isset($returndata['std_phone'])){echo $returndata['std_phone'];} ?>">
            </td>
            <td  colspan=3 >
                Blood Group
            </td>
            <td  colspan=3>
                <input type="text"  style="border:1px solid;" name="ublood" class="form-control" value="<?php if(isset($returndata['blood_group'])){echo $returndata['blood_group'];} ?>">
            </td>
        </tr>
        <tr class="lead ">
            <td  colspan=3>
                SSC Broad Roll
            </td>
            <td  colspan=3>
                <input type="number"  style="border:1px solid;" name="usscroll" class="form-control" value="<?php if(isset($returndata['ssc_roll'])){echo $returndata['ssc_roll'];} ?>">
            </td>
            <td  colspan=3 >
                SSC Registration No.
            </td>
            <td  colspan=3>
                <input type="number"  style="border:1px solid;" name="usscreg" class="form-control" value="<?php if(isset($returndata['ssc_reg'])){echo $returndata['ssc_reg'];} ?>">
            </td>
        </tr>
        <tr class="lead ">
            <td  colspan=3>
                Board
            </td>
            <td  colspan=3>
                <input type=text class="form-control col-12" name="ueduboard" value="<?php if(isset($returndata['ssc_board'])){echo $returndata['ssc_board'];} ?>" style="border:1px solid;">
            </td>
            <td  colspan=3 >
                SSC Department
            </td>
            <td  colspan=3>
                <input type=text  style="border:1px solid;" class="form-control col-12" value="<?php if(isset($returndata['ssc_dpt'])){echo $returndata['ssc_dpt'];} ?>" name="usscdpt">

            </td>
        </tr>
        <tr class="lead ">
            <td  colspan=3>
                GPA
            </td>
            <td  colspan=3>
                <input type="text"  style="border:1px solid;" name="usscgpa" class="form-control" value="<?php if(isset($returndata['ssc_gpa'])){echo $returndata['ssc_gpa'];} ?>">
            </td>
            <td  colspan=3 >
                Passing Year
            </td>
            <td  colspan=3>
                <input type="year"  style="border:1px solid;" name="usscpass" class="form-control" value="<?php if(isset($returndata['ssc_pass'])){echo $returndata['ssc_pass'];} ?>">
            </td>
        </tr>
        <tr class="lead">
            <td  colspan=3>
            </td>
            <td  colspan=3>
                <input type="submit" name="edit_btn" class="btn btn-primary" value="Update">
                </form>
            </td>
            <td  colspan=3 >
                <form action="" method="get">
                    <input type="hidden" name="delete_id" value="<?php if(isset($returndata['id'])){echo $returndata['id'];} ?>">
                    <input type="submit" name="delete_btn" class="btn btn-primary" value="Delete">
                </form>              
            </td>
            <td  colspan=3>
            </td>
        </tr>
        <tr>
            <td>
    
            </td>
            </tr>
        </tbody>
    </table>
</div>
    <?php
    include_once("includes/footer.php");
    ?>
</body>
</html>