
<?php  include('includes\db.php')  ?>

<?php




    $uid= $_POST['uid'];

    $sql= "DELETE FROM students WHERE id =$uid ";

    if($db->query($sql)== TRUE)
    echo "Data Added Successfully";
    else 
    echo "Fail to inser data !! Try again";
    header("Location:index.php"); 
  
    exit; 














?>