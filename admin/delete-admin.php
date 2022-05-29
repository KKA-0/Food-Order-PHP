<?php
    //include constants.php dile here
    include('../config/constants.php');
    // 1. get the ID of admin to be deleted
    $id = $_GET[ 'id' ];
    //2. create sql query to delete admin
    $sql = "DELETE FROM tbl_admin WHERE id=$id";

    //execute the query
    $res = mysqli_query($conn, $sql);


    //check whether the query exected successfully or not
    if($res==TRUE)
    {
        //query exected successfully and admin deleted
        echo "admin deleted";
    }
    else
    {
        //failed to delete admin
        echo "failed the delete admin";
    }
//3. redirect to manage admin page with message (success)

?>
<?php include('partials/footer.php'); ?>