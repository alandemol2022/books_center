<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books_center</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

</head>

<body style="background-color: #808080;">
    <div class="container p-4 mt-4 rounded">
        <br>
     <div class="row justify-content-end align-items-end">
    <h2 class="col-9">Books Center</h2>
    <button class="col-3 btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#add_modal">Add new books</button>
   
</div>


        <div>
            <br>
            <table class="table table-bordered">
                <thead class="bg-success text-black">
                    <tr>
                        <th>Title</th>
                        <th>ISBN</th>
                        <th>Author</th>
                        <th>Year Published</th>
                        <th>Publisher</th>
                        <th>Category</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody id="table">
                    <!-- Data -->
                </tbody>
            </table>
        </div>
        <!--Add new books modal-->
        <div class="modal fade" id="add_modal" role="dialog">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header bg-success text-white">
                        <div class="modal-title">
                            <h5>Add New Books</h5>
                        </div>
                    </div>
                    <div class="modal-body">
                        <form>
                            <label>Title:</label>
                            <input type="text" name="add_title" id="add_title" class="form-control" required>
                            <label>ISBN:</label>
                            <input type="text" name="add_isbn" id="add_isbn" class="form-control" required>
                            <label>Author:</label>
                            <input type="text" name="add_author" id="add_author" class="form-control" required>
                            <label>Year Published:</label>
                            <input type="number" min="1900" max="2023" step="1" value="2023" name="add_date" id="add_date" class="form-control" required>
                            <label>Publisher:</label>
                            <input type="text" name="add_publisher" id="add_publisher" class="form-control" required>
                            <label>Category:</label>
                            <select type="text" name="add_category" id="add_category" class="form-control" required>
                                <option value="Romance">Romance</option>
                                <option value="Comedy">Comedy</option>
                                <option value="Drama">Drama</option>
                                <option value="Mystery">Mystery</option>
                                <option value="Thriller">Thriller</option>
                                <option value="Action">Action</option>
                                <option value="Adventure">Adventure</option>
                                <option value="Fantasy">Fantasy</option>
                                <option value="Sci-Fi">Sci-Fi</option>
                                <option value="Horror">Horror</option>
                                <option value="Biography">Biography</option>
                                <option value="History">History</option>
                                <option value="Science">Science</option>
                                <option value="Self-Help">Self-Help</option>
                                <option value="Travel">Travel</option>
                                <option value="Fiction">Fiction</option>
                                <option value="Politics">Politics</option>
                                <option value="Business">Business</option>
                            </select>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success" name="add_save" id="add_save">Save</button>
                        <button type="submit" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!--End of add modal-->

        <!-- View Modal -->
        <div class="modal fade" id="view_modal" role="dialog">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header bg-primary text-white">
                        <div class="modal-title">
                            <h5>View Book Details </h5>
                        </div>
                    </div>
                    <div class="modal-body">
                        <form>
                            <label>Title:</label>
                            <input type="text" name="view_title" id="view_title" class="form-control" disabled>
                            <label>ISBN:</label>
                            <input type="text" name="view_isbn" id="view_isbn" class="form-control" disabled>
                            <label>Author:</label>
                            <input type="text" name="view_author" id="view_author" class="form-control" disabled>
                            <label>Year Published:</label>
                            <input type="number" name="view_date" id="view_date" class="form-control" disabled>
                            <label>Publisher:</label>
                            <input type="text" name="view_publisher" id="view_publisher" class="form-control" disabled>
                            <label>Category:</label>
                            <select type="text" name="view_category" id="view_category" class="form-control" disabled>
                                <option value="Romance">Romance</option>
                                <option value="Comedy">Comedy</option>
                                <option value="Drama">Drama</option>
                                <option value="Mystery">Mystery</option>
                                <option value="Thriller">Thriller</option>
                                <option value="Action">Action</option>
                                <option value="Adventure">Adventure</option>
                                <option value="Fantasy">Fantasy</option>
                                <option value="Sci-Fi">Sci-Fi</option>
                                <option value="Horror">Horror</option>
                                <option value="Biography">Biography</option>
                                <option value="History">History</option>
                                <option value="Science">Science</option>
                                <option value="Self-Help">Self-Help</option>
                                <option value="Travel">Travel</option>
                                <option value="Fiction">Fiction</option>
                                <option value="Politics">Politics</option>
                                <option value="Business">Business</option>
                            </select>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of View modal -->
        <!-- Edit modal -->
        <div class="modal fade" id="edit_modal" role="dialog">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header bg-warning">
                        <div class="modal-title">
                            <h5>Edit Book Details </h5>
                        </div>
                    </div>
                    <div class="modal-body">
                        <form>
                            <input type="hidden" name="edit_id" id="edit_id">
                            <label>Title:</label>
                            <input type="text" name="edit_title" id="edit_title" class="form-control" required>
                            <label>ISBN:</label>
                            <input type="text" name="edit_isbn" id="edit_isbn" class="form-control" required>
                            <label>Author:</label>
                            <input type="text" name="edit_author" id="edit_author" class="form-control" required>
                            <label>Year Published:</label>
                            <input type="number" name="edit_date" id="edit_date" class="form-control" required>
                            <label>Publisher:</label>
                            <input type="text" name="edit_publisher" id="edit_publisher" class="form-control" required>
                            <label>Category:</label>
                            <select type="text" name="edit_category" id="edit_category" class="form-control" required>
                                <option value="Romance">Romance</option>
                                <option value="Comedy">Comedy</option>
                                <option value="Drama">Drama</option>
                                <option value="Mystery">Mystery</option>
                                <option value="Thriller">Thriller</option>
                                <option value="Action">Action</option>
                                <option value="Adventure">Adventure</option>
                                <option value="Fantasy">Fantasy</option>
                                <option value="Sci-Fi">Sci-Fi</option>
                                <option value="Horror">Horror</option>
                                <option value="Biography">Biography</option>
                                <option value="History">History</option>
                                <option value="Science">Science</option>
                                <option value="Self-Help">Self-Help</option>
                                <option value="Travel">Travel</option>
                                <option value="Fiction">Fiction</option>
                                <option value="Politics">Politics</option>
                                <option value="Business">Business</option>
                            </select>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success" name="edit_save" id="edit_save">Save</button>
                        <button type="submit" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- End of Edit modal -->
    </div>
</body>

</html>
<?php include "ajax.php"; ?>