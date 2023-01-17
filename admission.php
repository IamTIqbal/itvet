<?php
    include("source.php");

    $objectAitvetAdmin = new itvetApp();

    if(isset($_POST['add_info'])){
        $return_msg = $objectAitvetAdmin->add_data($_POST);
    }
?>
<?php
    include_once("includes/head.php");
    ?>
<div class=container>
    <table class="table table-borderless form-group">
    <form action="" method="post" enctype="multipart/form-data">
<h1 class="fs-2 text-center">Admission Form</h1>
               <p class="fs-2 text-center" style="color:green;"> <?php if(isset($return_msg)){echo $return_msg;} ?></p>
        <tbody>
        <tr class="lead ">
        <td colspan="3">
           Application ID
        </td>
        <td  colspan="3" >
            <input name="std_id" class="form-control" readonly value="<?php
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
            echo uid();?>" type="text">
        </td>
        <td colspan="4">
        <div class="input-group mb-3">
  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">Campus</label>
  </div>
  <select class="form-control"  style="border:1px solid;" name="campus" id="inputGroupSelect01">
    <option selected>Choose Campus</option>
    <option value="Karwan Bazar">Karwan Bazar</option>
    <option value="Ashulia">Ashulia</option>
  </select>
  </div>
</td>
<td colspan="2" rowspan="3">
<input type="file" name="photo" class="form-control-file" accept="image/*" onchange="loadFile(event)"><br>
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
<span>Session</span>
</td>
<td  colspan=3>
<input class="form-control" type="text" name="session" readonly value="2022-2023">
</td>
<td  colspan=4 >
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">Department</label>
  </div>
  <select class="form-control"  style="border:1px solid;" name="dpt" id="inputGroupSelect01">
    <option selected>Choose Department</option>
    <option value="Architecture">Architecture</option>
    <option value="Civil">Civil</option>
    <option value="Computer">Computer</option>
    <option value="Electrical">Electrical</option>
    <option value="Electronics">Electronics</option>
    <option value="Chemical">Chemical</option>
    <option value="Textile">Textile</option>
</select>
</div>
</td>
</tr>
<tr class="lead ">
<td  colspan=3>
<span>Date Of Birth </span>
</td>
<td  colspan=3>
<input  style="border:1px solid;" class="form-control" type="date" name=dob>
</td>
<td  colspan=4 ><div class="input-group mb-3">
  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">Section</label>
  </div>
  <select class="form-control form-control-sm"  style="border:1px solid;" name="section" id="inputGroupSelect01">
    <option value="Day">Day</option>
    <option value="Morning">Morning</option>
</select>
</div>
</td>
</tr >
<tr class="lead ">
<td  colspan=3>
<span>Student Name</span>
</td>
<td  colspan=3>
<input  type="text"  style="border:1px solid;" name="name" class="form-control" placeholder="Student Name">
</td>
<td  colspan=6>
</td>
</tr>
<tr class="lead ">
<td  colspan=3>
<span>Father's Name</span>
</td>
<td  colspan=3>
<input type="text"  style="border:1px solid;" name="fname" class="form-control" placeholder="Father's Name">
</td>
<td  colspan=3 >
<span>Phone Number</span>
</td>
<td  colspan=3>
<input type="tel"  style="border:1px solid;"  name="phone" class="form-control" placeholder="Contact Number">
</td>
</tr>
<tr class="lead ">
<td  colspan=3>
<span>Mother's Name</span>
</td>
<td  colspan=3>
<input type="text"  style="border:1px solid;" name="mname" class="form-control" placeholder="Mother's Name">
</td>
<td  colspan=3 >
<span>Phone Number</span>
</td>
<td  colspan=3>
<input type="tel"  style="border:1px solid;" name="mcall" class="form-control" placeholder="Mother's Phone">
</td>
</tr>
<tr class="lead ">
<td  colspan=3>
    <span>Guardian Name</span>
</td>
<td  colspan=3>
    <input type="text"  style="border:1px solid;" name="gname" class="form-control" placeholder="If Need or N/A">
</td>
<td  colspan=3 >
<span>Guardian Relation</span>
</td>
<td  colspan=3>
    <input type="text"  style="border:1px solid;" name="grel" class="form-control" placeholder="If need or N/A">
</td>
</tr>
<tr class="lead ">
<td  colspan=3>
    <span>Student Phone</span>
</td>
<td  colspan=3>
    <input type="text"  style="border:1px solid;" name="studentphn" class="form-control" placeholder="Student's Phone">
</td>
<td  colspan=3 >
    <span>Blood Group</span>
</td>
<td  colspan=3>
    <input type="text"  style="border:1px solid;" name="blood" class="form-control" placeholder="Blood Group">
</td>
</tr>
<tr class="lead ">
<td  colspan=3>
    <span>SSC Broad Roll</span>
</td>
<td  colspan=3>
    <input type="number"  style="border:1px solid;" name="sscroll" class="form-control" placeholder="S.S.C or Equivalent">
</td>
<td  colspan=3 >
    <span>SSC Registration No.</span>
</td>
<td  colspan=3>
    <input type="number"  style="border:1px solid;" name="sscreg" class="form-control" placeholder="Registration No.">
</td>
</tr>
<tr class="lead ">
<td  colspan=3>
    <span>Board</span>
</td>
<td  colspan=3>
<div class="input-group mb-3">
<select class="form-control col-12" name="eduboard"  style="border:1px solid;">
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
</div>
</td>
<td  colspan=3 >
    <span>SSC Department</span>
</td>
<td  colspan=3>
<div class="input-group mb-3">
<select  style="border:1px solid;" class="form-control col-12" name="sscdpt">
 <option value="Arts">Arts</option>
 <option value="Commerce_BS">Commerce/Business Studies</option>
 <option value="Science">Science</option>
 <option value="Vocational">Vocational</option>
 <option value="Madrasah">Madrasah</option>
 <option value="O Level">O Level</option>
 </select>
 </div>
</td>
</tr>
<tr class="lead ">
<td  colspan=3>
    <span>GPA</span>
</td>
<td  colspan=3>
    <input type="text"  style="border:1px solid;" name="sscgpa" class="form-control" placeholder="GPA out of 5">
</td>
<td  colspan=3 >
    <span>Passing Year</span>
</td>
<td  colspan=3>
    <input type="year"  style="border:1px solid;" name="sscpass" class="form-control" placeholder="Passing Year">
</td>
</tr>
<tr class="lead">
<td  colspan=3>
</td>
<td  colspan=3>
<input type="submit" name="add_info" class="btn btn-primary" value="Send Application">
</form>
</td>
<td  colspan=3 >              
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