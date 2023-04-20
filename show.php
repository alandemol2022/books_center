<?php

include "db_conn.php";

$sql="SELECT * FROM `books`";
$result = mysqli_query($conn,$sql);

if ($result->num_rows >0) {
    while ($row = mysqli_fetch_assoc($result)) {
     ?>
     <tr>
         <td><?php echo $row['title'];?></td>
         <td><?php echo $row['isbn'];?></td>
         <td><?php echo $row['author'];?></td>
         <td><?php echo $row['date'];?></td>
         <td><?php echo $row['publisher'];?></td>
         <td><?php echo $row['category'];?></td>
         <td>
            <button class="btn btn-primary"
            data-bs-toggle="modal" 
            data-bs-target="#view_modal" 
            data-id="<?= $row['id']; ?>" 
            data-title="<?= $row['title'];?>"
            data-isbn="<?= $row['isbn'];?>" 
            data-author="<?= $row['author'];?>" 
            data-date="<?= $row['date'];?>" 
            data-publisher="<?= $row['publisher'];?>" 
            data-category="<?= $row['category'];?>">View</button>
            <button class="btn btn-warning"
            data-bs-toggle="modal" 
            data-bs-target="#edit_modal" 
            data-id="<?= $row['id']; ?>" 
            data-title="<?= $row['title'];?>" 
            data-isbn="<?= $row['isbn'];?>"
            data-author="<?= $row['author'];?>" 
            data-date="<?= $row['date'];?>" 
            data-publisher="<?= $row['publisher'];?>" 
            data-category="<?= $row['category'];?>">Edit</button>
            <button class="btn btn-danger" id="delete" data-id="<?=$row['id'];?>">Delete</button>
         </td>
     </tr>
    

     <?php 
    }
} else {
    echo "<tr><td colspan='6' style='text-align:center;'>Book not found</td></tr>";
}
?>