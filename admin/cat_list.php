<h1>Categories List</h1>
<?php 
 include ("confs/config.php");
 $result = mysqli_query($conn, "SELECT * FROM categories");
 ?>
 <ul>
 <?php while($row = mysqli_fetch_assoc($result)): ?>
 	<li title="<?php echo $row['remark'] ?>">
 	[<a href="cat_del.php?id=<?php echo $row['id']?>">X</a>]
    [<a href="cat_edit.php?id=<?php echo $row['id']?>">edit</a>]
    <?php echo $row['name'] ?>
    </li>
<?php endwhile; ?>
 </ul>
 <a href="cat_new.php" class="new">New Category</a>