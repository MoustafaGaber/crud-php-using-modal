<!-- - edit Modal --> 

<div class="modal fade" id="editexampleModal<?php echo $row["id_book"] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header alert alert-info ">
        <h1 class="modal-title fs-5 p " id="exampleModalLabel">Edit Book</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body ">
             
      <form action="edit.php" method="POST">
        
        <div class="mb-3">
            <label for="Book Titile" class="form-label">Book Titile</label>
            <input type="text" class="form-control"  name="title_book" value="<?php echo $row["title_book"] ?>">
        </div>
        <div class="mb-3">
            <label for="DOE OF Book" class="form-label">DOE of Book</label>
            <input type="text" class="form-control"  name="doe_book" value="<?php echo $row["doe_book"] ?>">
        </div>
        <div class="mb-3">
            <label for="Number of Copies" class="form-label">Number of copies</label>
            <input type="text" class="form-control"  name="copies_book" value="<?= $row["copies_book"] ?>">
        </div>
        <input type="text" hidden name="id" value="<?php echo $row["id_book"] ;?>">


      </div>
      <div class="modal-footer ">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit"  name="edit" class="btn btn-primary">Update</button>
      </div>
         </form>
    </div>
  </div>
</div>


<!-- - Delete Modal --> 
<div class="modal fade" id="exampleModal<?php echo $row["id_book"] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Book</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="delete.php" method="POST">
        Are Yuo shur To delete this book (
      <?php 
       $id =  $row["id_book"] . " " . $row["title_book"]; 
         echo $id   
      
      ?> 
       ? )
        
      </div>
      <div class="modal-footer">
      <input type="text" hidden name="id" value="<?php echo $row["id_book"] ;?>">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit"  name="delete" class="btn btn-danger">Delete</button>
      </div>
      </form>
    </div>
  </div>
</div>


<!--add Modal -->
<div class="modal fade" id="addexampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">add Book</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
             
      <form action="add-new.php" method="POST">
        
        <div class="mb-3">
            <label for="Book Titile" class="form-label">Book Titile</label>
            <input type="text" class="form-control"  name="title_book" >
        </div>
        <div class="mb-3">
            <label for="DOE OF Book" class="form-label">DOE of Book</label>
            <input type="text" class="form-control"  name="doe_book" >
        </div>
        <div class="mb-3">
            <label for="Number of Copies" class="form-label">Number of copies</label>
            <input type="text" class="form-control"  name="copies_book" >
        </div>
       
      </div>
      <div class="modal-footer">
      <button type="submit" class="btn btn-success" name="submit">Save</button>
               <a href="index.php" class="btn btn-danger">Cancel</a>
      </div>
         </form>
    </div>
  </div>
</div>