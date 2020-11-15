<?php include 'includes/header.php' ?>
<?php
   $id=$_GET['id'];

$db= new Database();
//create query
$query= "select*from categories where id = ".$id;
//run query
$category=$db->select($query)->fetch_assoc();

//create query
$query= "select*from categories";
//run query
$categories=$db->select($query);

?>


<?php

if(isset($_POST['submit'])){
//aasing some of the post variable
    $name= mysqli_real_escape_string($db->link,$_POST['name']);

    //simple validation
    if($name == ''){
   //set an error
   $error = 'Please fill out all required fields';
 }

   else{
     $query =" UPDATE categories
            SET
              name = '$name'
              where id =".$id;

       $update_row = $db->update($query);
   }

}
 ?>

 <?php

  if(isset($_POST['delete'])){
    $query="DELETE from categories where id = ".$id;
     $delete_row = $db->delete($query);
   }
 ?>


<form method="post" action="edit_category.php?id=<?php echo $id; ?>" >
  <div class="form-group">
    <label>Category Name</label>
    <input name="name" type="text" class="form-control"
    value="<?php echo  $category['name']; ?>" placeholder="Enter Name">
  </div>


  <input name ="submit" type="submit" class="btn btn-primary" value="submit" />
  <a href="index.php" class="btn btn-secondary">Cancel</a>
 <input name ="delete" type="submit" class="btn btn-danger" value="delete" />
</form>



<?php include 'includes/footer.php' ?>
