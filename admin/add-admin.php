<?php include('partials/menu.php'); ?>


<div class="main-content">
    <div class="wrapper">
        <h1>Add Admin</h1>

</br></br>
        <?php
            if(isset($_SESSION['add']))
            {
                echo $_SESSION['add'];
                unset($_SESSION['add']);
            }
        ?>




        <form action=""method="POST">
            <table class="tbl-30">
                <tr>
                    <td>Full Name:</td>
                    <td><input type="text" name="full_name" placeholder="Enter Your Name"></td>
                </tr>

                <tr>
                    <td>Username:</td>
                    <td><input type="text" name="username" placeholder="Enter Your Username"></td>
                </tr>

                <tr>
                    <td>Password:</td>
                    <td><input type="password" name="password" placeholder="Enter Your Password"></td>
                </tr>

                <tr>
                <td colspan="2">
                    <input type="submit" name="submit" value="Add Admin" class= "btn-secondary"></td>
                </tr>
            </table>
        </form>
</div>



<?php include('partials/footer.php'); ?>

<?php
    //Process The Value from form and save it in database
    //check whether the button is clicked or not 
    if(isset($_POST['submit']))
     { 
        // Buttom Clicked
        //echo"Button clicked ";
        // 1 .get the data from form
        $full_name = $_POST['full_name'];
        $username = $_POST['username'];
        $password = md5($_POST['password']); //password encryption with md5
        // 2 .SQL Query to save the data into database
        $sql = "INSERT INTO tbl_admin SET
            full_name='$full_name',
            username='$username',
            password='$password'
        ";
        // 3 .Execute Query and save data in database
        
        $res = mysqli_query($conn, $sql) or die(mysqli_error());
        if($res==TRUE)
        {
            //data inserted
            //  echo "data insereted";
            //create a session variable to display message
            $_SESSION['add'] = "Admin Added Successfully";
            //Redirect Page manage admin
            header("location:".SITEURL.'admin/manage-admin.php');
        }
        else
        {
            //Failed to insert data
            //echo "Failed to insert data";
            //create a session variable to display message
            $_SESSION['add'] = "fail to Add Admin ";
            //Redirect Page manage admin
            header("location:".SITEURL.'admin/add-admin.php');

        }


     }
    ?>