<?php include 'includes/header.php' ?>

<?php
   $id=$_GET['id'];

$db= new Database();
//create query
$query= "select*from posts where id = ".$id;
//run query
$post=$db->select($query)->fetch_assoc();

//create query
$query= "select*from categories";
//run query
$categories=$db->select($query);

?>

<?php

if(isset($_POST['submit'])){
//aasing some of the post variable
    $title= mysqli_real_escape_string($db->link,$_POST['title']);
    $body= mysqli_real_escape_string($db->link,$_POST['body']);
    $category= mysqli_real_escape_string($db->link,$_POST['category']);
    $author= mysqli_real_escape_string($db->link,$_POST['author']);
    $tags= mysqli_real_escape_string($db->link,$_POST['tags']);
    //simple validation
    if($title == '' || $body == ''||  $category == '' || $author== '' ){
   //set an error
   $error = 'Please fill out all required fields';
 }

   else{
     $query =" UPDATE posts
            SET
              title = '$title',
              body = '$body',
              category = '$category',
              author = '$author',
              tags = '$tags'
              where id =".$id;

       $update_row = $db->update($query);
   }
}
?>
  <!-- delete -->
<?php

 if(isset($_POST['delete'])){
   $query="DELETE from posts where id = ".$id;
    $delete_row = $db->delete($query);
  }
?>

<form method="post" action="edit_post.php?id=<?php echo $id; ?>">
  <div class="form-group">
    <label>Post Title</label>
    <input name="title" type="text" class="form-control"
    value="<?php echo $post['title'] ?>" placeholder="Enter Title">
  </div>


  <div class="form-group">
    <label>Post Body</label>
    <textarea name="body" type="text" class="form-control"placeholder="Enter post body">
    <?php echo $post['body']; ?>
    </textarea>
  </div>

  <div class="form-group">
    <label>Category</label>
    <select name="category" class="form-control">
      <?php while($row = $categories->fetch_Assoc()) : ?>
        <?php if($row['id'] == $post['category']){
             $selected = 'selected';
           } else{
             $selected = '';
           }

           ?>
      <option value="<?php echo $row['id']; ?>"<?php echo $selected; ?> > <?php echo $row['name']; ?></option>
    <?php endwhile; ?>
    </select>
  </div>

  <div class="form-group">
    <label>Author</label>
    <input name="author" type="text" class="form-control"
      value="<?php echo $post['author'] ?>" placeholder="Enter Author name">
  </div>

  <div class="form-group">
    <label>Tags</label>
    <input name="tags" type="text" class="form-control"
      value="<?php echo $post['tags'] ?>" placeholder="Enter tags">
  </div>

  <input name ="submit" type="submit" class="btn btn-primary" value="submit" />
  <a href="index.php" class="btn btn-secondary">Cancel</a>
 <input name ="delete" type="submit" class="btn btn-danger" value="delete" />

</form>




<?php include 'includes/footer.php' ?>
