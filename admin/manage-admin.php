<?php include('partials/menu.php'); ?>
    <!-- Mean Section End -->

    <!-- Mean Content Starts -->
    <div class="main-content">
        <div class="wrapper">
            <h1> Manage Admin </h1>
            <br/><br/><br/>

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
                <tr>
                    <td>1.</td>
                    <td>Karan</td>
                    <td>KKA</td>
                    <td>
                    <a href="#" class="btn-secondary">Update Admin</a>
                    <a href="#" class="btn-danger">Delete admin</a> 
                    </td>
                </tr>
                <tr>
                    <td>2.</td>
                    <td>Harsh</td>
                    <td>Ghoda</td>
                    <td>
                    <a href="#" class="btn-secondary">Update Admin</a>
                    <a href="#" class="btn-danger">Delete admin</a> 
                    </td>
                </tr>
                <tr>
                    <td>3.</td>
                    <td>Yash</td>
                    <td>Yashu</td>
                    <td>
                    <a href="#" class="btn-secondary">Update Admin</a>
                    <a href="#" class="btn-danger">Delete admin</a> 
                    </td>
                </tr>
            </table>
            
        
        
    </div>


    <!-- Mean Content End -->

    <!-- Mean Footer Starts -->
    <?php include('partials/footer.php'); ?>