<?php
    Class itvetApp{
        private $conn;
        public function __construct()
        {
            #database host, database user, database pass, database name
            $dbhost = 'localhost';
            $dbuser = 'root';
            $dbpass = "";
            $dbname = 'itvet';

            $this->conn= mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
            
            if(!$this->conn){
                die("Database Connection Error!!");
            }
        }
        public function add_data($data){
            $std_id = $data['std_id'];
            $session = $data['session'];
            $campus = $data['campus'];
            $department = $data['dpt'];
            $name = $data['name'];
            $father_name = $data['fname'];
            $mother_name = $data['mname'];
            $photo = $_FILES['photo']['name'];
            $shift = $data['section'];
            $date_of_birth = $data['dob'];
            $parent_phone_1 = $data['phone'];
            $parent_phone_2 = $data['mcall'];
            $guardian_name = $data['gname'];
            $guardian_rel = $data['grel'];
            $std_phone = $data['studentphn'];
            $blood_group = $data['blood'];
            $ssc_roll = $data['sscroll'];
            $ssc_reg = $data['sscreg'];
            $ssc_board = $data['eduboard'];
            $ssc_dpt = $data['sscdpt'];
            $ssc_gpa = $data['sscgpa'];
            $ssc_pass = $data['sscpass'];
            $tmp_name = $_FILES['photo']['tmp_name'];
            $std_photo =$std_id . '_' .$photo ;

            $query = "INSERT INTO admission(id, session, campus, department, name, father_name, mother_name, photo, shift, date_of_birth, parent_phone_1, parent_phone_2, guardian_name, guardian_rel, std_phone, blood_group, ssc_roll, ssc_reg, ssc_board, ssc_dpt, ssc_gpa, ssc_pass) VALUES ('$std_id','$session','$campus','$department','$name','$father_name','$mother_name','$std_photo','$shift','$date_of_birth','$parent_phone_1','$parent_phone_2','$guardian_name','$guardian_rel ','$std_phone','$blood_group','$ssc_roll','$ssc_reg','$ssc_board','$ssc_dpt','$ssc_gpa','$ssc_pass')";

            if(mysqli_query($this->conn, $query)){
                move_uploaded_file($tmp_name, 'img/'.$std_photo);
                return "Information Added Successfully";
            }
        } 
        public function display_data(){
            $query = "SELECT * FROM admission";
            if(mysqli_query($this->conn, $query)){
                $returndata = mysqli_query($this->conn, $query);
                return $returndata;
            }
        }
        public function display_data_by_id($id){
            $query = "SELECT * FROM admission WHERE id=$id";
            if(mysqli_query($this->conn, $query)){
                $returndata = mysqli_query($this->conn, $query);
                $studentData = mysqli_fetch_assoc($returndata);
                return $studentData;
            }
        }
        public function update_data($data){
            $std_id = $data['suid'];
            $name = $data['uname'];
            $father_name = $data['ufname'];
            $mother_name = $data['umname'];
            $photo = $_FILES['uphoto']['name'];
            $parent_phone_1 = $data['uphone'];
            $parent_phone_2 = $data['umcall'];
            $guardian_name = $data['ugname'];
            $guardian_rel = $data['ugrel'];
            $std_phone = $data['ustudentphn'];
            $blood_group = $data['ublood'];
            $ssc_roll = $data['usscroll'];
            $ssc_reg = $data['usscreg'];
            $ssc_board = $data['ueduboard'];
            $ssc_dpt = $data['usscdpt'];
            $ssc_gpa = $data['usscgpa'];
            $ssc_pass = $data['usscpass'];
            $tmp_name = $_FILES['uphoto']['tmp_name'];
            $std_photo =$std_id . '_' .$photo ;

            $query ="UPDATE admission SET id='$std_id', name='$name', father_name='$father_name',mother_name='$mother_name', photo='$std_photo', parent_phone_1='$parent_phone_1',parent_phone_2='$parent_phone_2', guardian_name='$guardian_name',guardian_rel='$guardian_rel', std_phone='$std_phone', blood_group='$blood_group',ssc_roll='$ssc_roll', ssc_reg='$ssc_reg', ssc_board='$ssc_board', ssc_dpt='$ssc_dpt',ssc_gpa='$ssc_gpa', ssc_pass='$ssc_pass' WHERE id=$std_id";

            if(mysqli_query($this->conn, $query)){
                move_uploaded_file($tmp_name, 'img/'.$std_photo);
                return "Information Updated Successfully!";
            }
        }
        public function delete_data($delete_id){
            $catch_img = "SELECT * FROM admission WHERE id=$delete_id";
            $delete_std_info = mysqli_query($this->conn, $catch_img);
            $std_infoDle = mysqli_fetch_assoc($delete_std_info);
            $deleteImg_data = $std_infoDle['photo'];
            $query = "DELETE FROM admission WHERE id=$delete_id";
            if(mysqli_query($this->conn, $query)){
                if(isset($std_infoDle['std_photo'])){
                    unlink('img/'.$deleteImg_data);
                }
                return "Deleted Successfully";
            }
        }
        
    }
?>