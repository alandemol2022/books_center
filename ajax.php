
<script>
    // show existing data
    $(document).ready(function () {
        $.ajax({
            type: "POST",
            url: "show.php",//file sql
            cache: false,
            success: function (data) {
                $('#table').html(data); // Pass the data argument to the html() method
                //console.log(data);
            }
        });

        //save new data
        $('#add_save').on('click', function () {
            var add_title = $('#add_title').val();
            var add_isbn =$('#add_isbn').val();
            var add_author = $('#add_author').val();
            var add_date = $('#add_date').val();
            var add_publisher = $('#add_publisher').val();
            var add_category = $('#add_category').val();

            if (add_title != "" && add_isbn && add_author != "" && add_date != "" && add_publisher != "" && add_category != "" &&) {
                $.ajax({
                    type: "POST",
                    url: "add.php",//file sql
                    cache: false,
                    data: {
                        add_title: add_title,
                        add_isbn: add_isbn,
                        add_author: add_author,
                        add_date: add_date,
                        add_publisher: add_publisher,
                        add_category: add_category
                    },
                    success: function (dataResult) {
                        var data = JSON.parse(dataResult);
                        if (data.statusCode == 200) {
                            alert("Book added successfully");
                            location.reload();
                        } else if (data.statusCode == 201) {
                            alert("error!");
                        }
                    }
                });
            } else {
                alert("empty");
            }
        });

        //view data
        $(function () {
            $('#view_modal').on('show.bs.modal', function (e) {
                var button = $(e.relatedTarget);
                var view_id = button.data('id');
                var view_title = button.data('title');
                var view_isbn = button.data('isbn');
                var view_author = button.data('author');
                var view_date = button.data('date');
                var view_publisher = button.data('publisher');
                var view_category = button.data('category');
                var modal = $(this);
                modal.find('#view_title').val(view_title);
                modal.find('#view_isbn').val(view_isbn);
                modal.find('#view_author').val(view_author);
                modal.find('#view_date').val(view_date);
                modal.find('#view_publisher').val(view_publisher);
                modal.find('#view_category').val(view_category);

            })
        });

        //edit data
        $(function () {
            $('#edit_modal').on('show.bs.modal', function (e) {
                var button = $(e.relatedTarget);
                var edit_id = button.data('id');
                var edit_title = button.data('title');
                var edit_isbn = button.data('isbn');
                var edit_author = button.data('author');
                var edit_date = button.data('date');
                var edit_publisher = button.data('publisher');
                var edit_category = button.data('category');
                var modal = $(this);
                modal.find('#edit_id').val(edit_id);
                modal.find('#edit_title').val(edit_title);
                modal.find('#edit_isbn').val(edit_isbn);
                modal.find('#edit_author').val(edit_author);
                modal.find('#edit_date').val(edit_date);
                modal.find('#edit_publisher').val(edit_publisher);
                modal.find('#edit_category').val(edit_category);

            })
        });

        //edit data - save changes
        $(document).on('click', '#edit_save', function () {
            $.ajax({
                url: "edit.php",
                type: "POST",
                cache: false,
                data: {
                    edit_id: $('#edit_id').val(),
                    edit_title: $('#edit_title').val(),
                    edit_isbn:$('#edit_isbn').val(),
                    edit_author: $('#edit_author').val(),
                    edit_date: $('#edit_date').val(),
                    edit_publisher: $('#edit_publisher').val(),
                    edit_category: $('#edit_category').val()
                },
                success: function (dataResult) {
                    var data = JSON.parse(dataResult);
                    if (data.statusCode == 200) {
                        alert("Book updated successfully");
                        location.reload();
                    } else if (data.statusCode == 201) {
                        alert("error!");
                    }
                }
            })
        });

        //delete button
        $(document).on('click', '#delete', function () {
            var $rowtodelete = $(this).parent().parent();
            $.ajax({
                url: "delete.php",
                type: "POST",
                cache: false,
                data: {
                    delete_item: $(this).attr('data-id')
                },
                success: function (dataResult) {
                    var data = JSON.parse(dataResult);
                    if (data.statusCode == 200) {
                        $rowtodelete.fadeOut();
                        // alert("Book deleted successfully");
                        // location.reload(); 
                    } else if (data.statusCode == 201) {
                        alert("error!");
                    }
                }
            })
        });

        //Search 
        $(document).ready(function () {
            $("#searchBook").on("keyup", function () {
                var value = $(this).val().toLowerCase();
                $("#table tr").filter(function () {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });

        //overall closing
    });
</script>