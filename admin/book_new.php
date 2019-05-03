<h1>New Book</h1>
<form action="book_add.php" method="post" encrype="multipart/form-data">
<label for="title">Book Title</label>
<input type="text" name="title" id="title">
<lable for="author">Author</lable>
<input type="text" name="author" id="author">
<label for="summary">Summary</label>
<textarea name="summary" id="summary"></textarea>
<label for="price">Price</label>
<input type="text" name="price" id="price">
<label for="categories">Category</label>
<select name="category_id" id="categories">
	<option value="0">--Choice--</option>
	<?php 
	 include("confs/config.php");
	 $result=mysqli_query($conn,"SELECT id,name FORM books");
	 while($row=mysql_fetch_assoc($result));
	 ?>
	 <option value="<?php echo $row['id']?>"> <?php echo $row['name'] ?>
	 	
	 </option>
</select>
<label for="cover">Cover</label>
<input type="file" name="cover" id="cover"><br><br>
<input type="submit" value="Add Book">
<a href="bool_list.php" class="back">Back</a>
</form>