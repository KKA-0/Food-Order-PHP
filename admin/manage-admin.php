<?php include('partials/menu.php'); ?>
    <!-- Mean Section End -->

    <!-- Mean Content Starts -->
    <div class="main-content">
        <div class="wrapper">
            <h1> Manage Admin </h1>
            <br/><br/><br/>


            <?php
                if(isset($_SESSION['add']))
                {
                    echo $_SESSION['add'];//displaying session message
                    unset($_SESSION['add']);//Removing session messsage
                }
            ?>



    
        <!--Button to Add Admin -->
        <a href="add-admin.php" class="btn-primary">Add Admin</a>
        <br/><br/><br/>
            <table class="tbl-full">
                <tr>
                        <th>S.N.</th>
                        <th>Full Name</th>
                        <th>Username</th>
                        <th>Actions</th>
                        
                
                </tr> 

                <?php
                //query to get all admin
                    $sql = "SELECT * FROM tbl_admin";
                    //excute the query
                    $res = mysqli_query($conn,$sql);

                    //check whether the query is excuted or not
                    if($res==TRUE)
                    {
                        // Count Rows to check whether we have data in database or not
                        $count = mysqli_num_rows($res);
                        
                        $sn=1; 

                        if ($count>0)
                        {
                            //we do not have data in database
                            while($rows=mysqli_fetch_assoc($res))
                            {
                                //using while loop to get all the data from database.
                                //and while loop will run as long as we have data in database

                                //get individual data
                                $id=$rows['id'];
                                $full_name=$rows['full_name'];
                                $username=$rows['username'];

                                //display the value in our table
                                ?>
                                <tr>
                                <td><?php echo $sn++; ?></td>
                                <td><?php echo $full_name; ?></td>
                                <td><?php echo $username; ?></td>
                                <td>
                                    <a href="#" class="btn-secondary">Update Admin</a>
                                    <a href="<?php echo SITEURL; ?>admin/delete-admin.php" class="btn-danger">Delete admin</a> 
                                </td>
                                </tr>      





                                <?php

                                                  


                            }
                        }
                        else
                        {
                            //we do not have data in database
                        }
                    }

                    ?>
                
            </table>
            
        
        
    </div>


    <!-- Mean Content End -->

    <!-- Mean Footer Starts -->
    <?php include('partials/footer.php'); ?>