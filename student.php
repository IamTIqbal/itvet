<?php
    include("source.php");

    $objectAitvetAdmin = new itvetApp();

    $admission = $objectAitvetAdmin->display_data();

    if(isset($_GET['id'])){
            $id = $_GET['id'];
            $returndata= $objectAitvetAdmin->display_data_by_id($id);
        }

    include_once("includes/head.php");
?>
<div class="container">
<?php if(isset($returndata['id'])){?>
    <h3 class="text-center">Ahsanullah Institute of Technical & Vocational Education & Training</h3>
    <h4 class="text-center">(AITVET)</h4>
    <p class="lead text-center">A Sister Concern of Ahsanullah University of Science of Technology <br>
    Sponsored by Dhaka Ahsania Mission and affiliated with Bangladesh Technical Education Board	</p>
    <br>
    <br>
    <h4 class="text-center"><u>Student Information</u></h4>
    <p class="h6 text-center">DIPLOMA - IN - ENGINEERING (Duration 4 Years)</p>
</div>
<div class="container">
    <table class="table table-borderless">
        <tbody>
            <tr class=lead>
                <td colspan=3 >Admission ID</td>
                <td colspan=3><?php if(isset($returndata['id'])){echo $returndata['id'];} ?></td>
                <td colspan=4>Campus: <?php if(isset($returndata['campus'])){echo $returndata['campus'];} ?></td>
                <td colspan=2 rowspan=3><img width=96 height=96 src="img/<?php if(isset($returndata['photo'])){echo $returndata['photo'];} ?>"></td>
            </tr>
            <tr class=lead>
                <td colspan=3 >Session</td>
                <td colspan=3><?php if(isset($returndata['session'])){echo $returndata['session'];} ?></td>
                <td colspan=4>Current Semester: <?php if(isset($returndata['campus'])){echo "First";} ?></td>
                
            </tr>
            <tr class=lead>
                <td colspan=3 >Department</td>
                <td colspan=3><?php if(isset($returndata['department'])){echo $returndata['department'];} ?></td>
                <td colspan=4>Shift: <?php if(isset($returndata['shift'])){echo $returndata['shift'];} ?></td>
                
            </tr>
            <tr class=lead>
                <td colspan=3 >Student Name</td>
                <td colspan=3><?php if(isset($returndata['name'])){echo $returndata['name'];} ?></td>
                <td colspan=4></td>
                <td colspan=2 rowspan=3></td>
            </tr>
            <tr class=lead>
                <td colspan=3 >Father's Name</td>
                <td colspan=3><?php if(isset($returndata['father_name'])){echo $returndata['father_name'];} ?></td>
                <td colspan=4>Phone Number</td>
                <td colspan=2 rowspan=3><?php if(isset($returndata['parent_phone_1'])){echo $returndata['parent_phone_1'];} ?></td>
            </tr>
            <tr class=lead>
                <td colspan=3 >Mother's Name</td>
                <td colspan=3><?php if(isset($returndata['mother_name'])){echo $returndata['mother_name'];} ?></td>
                <td colspan=4>Phone Number</td>
                <td colspan=2 rowspan=3><?php if(isset($returndata['parent_phone_2'])){echo $returndata['parent_phone_2'];} ?></td>
            </tr>
            <tr class=lead>
                <td colspan=3 >Guardian Name</td>
                <td colspan=3><?php if(isset($returndata['guardian_name'])){echo $returndata['guardian_name'];} ?></td>
                <td colspan=4>Guardian Relation</td>
                <td colspan=2 rowspan=3><?php if(isset($returndata['guardian_rel'])){echo $returndata['guardian_rel'];} ?></td>
            </tr>
            <tr class=lead>
                <td colspan=3 >Student Phone</td>
                <td colspan=3><?php if(isset($returndata['std_phone'])){echo $returndata['std_phone'];} ?></td>
                <td colspan=4>Blood Group</td>
                <td colspan=2 rowspan=3><?php if(isset($returndata['blood_group'])){echo $returndata['blood_group'];} ?></td>
            </tr>
            <tr class=lead>
                <td colspan=3 >SSC Board Roll</td>
                <td colspan=3><?php if(isset($returndata['ssc_roll'])){echo $returndata['ssc_roll'];} ?></td>
                <td colspan=4>SSC Registration No.</td>
                <td colspan=2 rowspan=3><?php if(isset($returndata['ssc_reg'])){echo $returndata['ssc_reg'];} ?></td>
            </tr>
            <tr class=lead>
                <td colspan=3>Guide Teacher</td>
                <td colspan=3><?php if(isset($returndata['campus'])){echo "Shirin Akter";} ?></td>
                <td colspan=4>Department Head</td>
                <td colspan=2 rowspan=3><?php if(isset($returndata['campus'])){echo "Mostafizur Rahman";} ?></td>
            </tr>
        </tbody>
    </table>
</div>
<?php }
    else{?>
    <div class="container" style="height:500px">
        <p class="h1 text-center" style="color:red;">Enter a valid Admission ID</p>
    </div>
    <?php }?>
    <?php
    include_once("includes/footer.php");
    ?>
</body>
</html>