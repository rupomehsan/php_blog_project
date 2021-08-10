<?php include'inc/header.php';?>
<?php include'inc/sitebar.php';?>


<?php 


if (!Session::get('userRole')=='0') {
     echo "<script>window.location = 'index.php';</script>";
}
?>


        <div class="grid_10">
		
            <div class="box round first grid">
                <h2>Add New User</h2>
               <div class="block copyblock"> 


     <?php 

     if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $username = $fm->validation($_POST['username']);
        $password = $fm->validation(md5($_POST['password']));
        $role     = $fm->validation($_POST['role']);
        $email    = $fm->validation($_POST['email']);


        $username = mysqli_real_escape_string($db->link,$username);
        $password = mysqli_real_escape_string($db->link,$password);
        $role = mysqli_real_escape_string($db->link,$role);
        $email = mysqli_real_escape_string($db->link,$email);

        if (empty($username) || empty($password) ||  empty($role) ||  empty($email)) {
            echo "<span style='color:red;font-size:16px;'>Field must not be empty..</span>";
        }

        $mailquery= "select * from tbl_user where email ='$email' limit 1 ";
        $mailchechk = $db->select($mailquery);
        if ($mailchechk != false) {

           echo "<span style='color:red;font-size:16px;'>eamil already exist</span>"; 
       
       } else{

            $query= " INSERT INTO tbl_user (username,password,role,email) VALUES ('$username','$password','$role','$email')";
            $catinsert= $db->insert($query);
            if ($catinsert) {
                
                echo "<span style='color:green;font-size:18px;'> User create  successfully</span>";
            }else{

               echo "<span style='color:red;font-size:18px;'> User not create  successfully</span>";
             }
           }
         }
        ?>


                 <form action="" method="post">
                    <table class="form">

                        <tr>
                            <td>
                                <label>Username</label>
                            </td>
                            <td>
                                <input type="text" placeholder="Enter Category Name..." class="medium" name="username" />
                            </td>
                        </tr>

                         <tr>
                            <td>
                                <label>Password</label>
                            </td>
                            <td>
                                <input type="password" placeholder="" class="medium" name="password" />
                            </td>
                        </tr>
                         <tr>
                            <td>
                                <label>Emial</label>
                            </td>
                            <td>
                                <input type="email" placeholder="" class="medium" name="email" />
                            </td>
                        </tr>

                         <tr>
                            <td>
                                <label>User role</label>
                            </td>
                            <td>
                                <select type="password" placeholder="" class="medium" name="role">
                                
                                    <option>Select user role</option>
                                    <option value="0">Admin</option>
                                    <option value="1">Author</option>
                                    <option value="2">Editor</option>
                                 


                                </select>
                            </td>
                        </tr>

						<tr> 
                            <td>
                                
                            </td>
                            <td>
                                <input type="submit" name="submit" Value="Save" />
                            </td>
                        </tr>
                    </table>
                    </form>
                </div>
            </div>
        </div>

<?php include'inc/footer.php';?>