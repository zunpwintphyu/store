<h1>Book List</h1>
<?php include("confs/config.php");
$result = mysqli_query($conn,"SELECT books.*,categories.name FROM books LEFT JOIN categories ON books.category_id =categories.id ORDER BY books.created_date DESC");
?>
<ul class="books">
<?php while($row=mysqli_fetch_assoc($result)): ?>
	<li>
		<img src="covers/<?php echo $row['cover']?>" alt="" align="right" height="140">
		<b><?php echo $row ['title']?></b>
		<i>by<?php echo $row['author']?></i>
		<small>(in <?php echo $row['name']?>)</small>
		<span>$<?php echo $row['price']?></span>
		<div><?php echo $row['summary']?></div>,
     [<a href="book_del.php? id=<?php echo $row ['id']?>" class="del">del</a>]
     [<a href="book_edit.php? id=<?php echo $row ['id']?>">edit</a>]
	</li>
<?php endwhile; ?>
</ul>
<a href="book_new.php" class="new">New Book</a>