<?php include 'includes/header.php' ?>
<?php
$db= new Database();
//chcking if form is submitted
  if(isset($_POST['submit'])){
  //aasing some of the post variable
    $name = mysqli_real_escape_string($db->link,$_POST['name']);

      //simple validation
      if($name == '' ){
     //set an error
     $error = 'Please fill out all required fields';
   }

     else{
       $query =" INSERT INTO categories (name)
         VALUES ('$name')";

         $insert_row = $db->insert($query);
     }

  }
 ?>



<form method="post" action="add_category.php" >
  <div class="form-group">
    <label>Category Name</label>
    <input name="name" type="text" class="form-control"  placeholder="Enter Name">
  </div>


<input name ="submit" type="submit" class="btn btn-primary" value="submit" />
<a href="index.php" class="btn btn-secondary">Cancel</a>
</form>

<?php include 'includes/footer.php' ?>
