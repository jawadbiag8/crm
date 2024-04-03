<?php
include "header.php";
if (isset($_SESSION['vendor'])) {
    $vendor_data = $_SESSION['vendor'];
    $vendor_id = $_SESSION['vendor']['vendor_id'];
?>

    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">
            <?php
            include('top-bar.php');
            ?>
            <!-- Main Sidebar  Container -->
            <?php
            include "navbar.php"
            ?>
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-heading">
                                        <h4 class="h4 text-center p-3 bg-info">All Products Information</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-row">
                                            <div class="col-md-12">
                                                <button class="btn btn-sm btn-info float-right" data-toggle="modal" data-target="#addStaff"><i class="fa fa-plus"></i></button>
                                            </div>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table table-striped table-sm table-hover table-bordered table-condenced" id="table_">
                                                <thead>
                                                    <th>s#.</th>
                                                    <th>Product Name</th>
                                                    <th>Price</th>
                                                    <th>Product Status</th>
                                                    <th>Quantity</th>
                                                    <th>Product Feature Image</th>
                                                    <th>Action</th>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $userdata = $conn->query("SELECT * FROM `tbl_products` where product_status = 'pending' AND vendor_id='$vendor_id'");
                                                    $count = 0;
                                                    while ($row = $userdata->fetch_assoc()) :
                                                        $count++;
                                                    ?>
                                                        <tr>
                                                            <td><?= $count; ?></td>
                                                            <td><?= $row['product_name']; ?></td>
                                                            <td><?= $row['vendor_price']; ?></td>
                                                            <td><?= $row['product_status']; ?></td>
                                                            <td><?= $row['product_quantity']; ?></td>
                                                            <td><img src="../common/dist/img/<?= $row['product_feature_image']; ?>" alt="Image" width="70px"></td>
                                                            <td>
                                                                <button class="btn btn-info btn-sm" value="<?= $row['product_id']; ?>" onclick="editorledetails(this.value);">Edit</button>
                                                                <button class="btn btn-info btn-sm" value="<?= $row['product_id']; ?>" onclick="delete_member_data(this.value);">Delete</button>

                                                            </td>
                                                        </tr>
                                                    <?php endwhile; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.row -->
                    </div><!-- /.container-fluid -->
                </div>
                <!-- /.content-header -->
            </div>
            <div class="modal fade" id="editmember" role="dialog">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Edit Product information</h4>
                            <button type="button" class="close" data-dismiss="modal">×</button>
                        </div>
                        <form action="action.php" enctype="multipart/form-data" method="POST">
                            <div class="modal-body" id="edit_data">
                                <div class="modal-body">
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <input type="hidden" name="id" id="e_id" value="">
                                            <label for="name">Full Name</label>
                                            <input type="text" name="full_name" id="e_fullname" readonly value="" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="name"> Price:</label>
                                            <input type="text" name="price" id="e_price" value="" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="name">Quantity</label>
                                            <input type="text" name="product_quantity" id="e_qty" value="" class="form-control">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="name">Remarks</label>
                                            <input type="text" readonly name="product_remarks" id="e_remarks" value="" class="form-control">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="pdfpath">PDF File path</label>
                                            <input type="text" name="pdfpath" id="pdfpath" value="" class="form-control">

                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="name">Descirption</label>

                                            <textarea name="product_desc" id="e_editor" cols="10" rows="3" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group  col-md-6">
                                            <label for="name">Update Product Feature Image</label>
                                            <input type="file" name="feature_images" class="form-control">
                                        </div>
                                        <div class="form-group  col-md-6">
                                            <label for="name">Update Product Gallery</label>
                                            <input type="file" name="product_gallery[]" multiple class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-info btn-sm" data-dismiss="modal">Close</button>
                                    <button type="submit" name="update_product" class="btn btn-success btn-sm"> Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- add .staff -->
            <div class="modal fade" id="addStaff" role="dialog">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <form action="action.php" method="POST" enctype="multipart/form-data">
                            <div class="modal-header">
                                <h4 class="modal-title">Add Product information</h4>


                                <button type="button" class="close" data-dismiss="modal">×</button>
                            </div>
                            <div class="modal-body">
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <input type="hidden" name="vender_id" value="<?php echo $vendor_id; ?>">
                                        <label for="name">Product Name</label>
                                        <input type="text" name="name" class="form-control">
                                    </div>
                                </div>
                                <!-- <div class="form-row">
                                <div class="form-group col-md-6">
                                        <label for="name">Mobile Number</label>
                                        <input type="text" name="mobile_number"  class="form-control" >
                                </div>
                                <div class="form-group col-md-6">
                                        <label for="name">Email</label>
                                        <input type="email" name="email"  class="form-control" >
                                </div>
                                </div> -->
                                <div class="form-row">
                                    <div class="form-group  col-md-6">
                                        <label for="name">Price</label>
                                        <input type="text" name="price" class="form-control">
                                    </div>
                                    <div class="form-group  col-md-6">
                                        <label for="name">Product Feature Imges (270x303)</label>
                                        <input type="file" name="product_image" class="form-control">
                                    </div>

                                </div>
                                <div class="form-row">
                                    <div class="form-group  col-md-6">
                                        <label for="name">Category</label>
                                        <select name="cat_id" id="" class="form-control" required onchange="get_sub_cat(this.value)">
                                            <option value="">Choose Category</option>
                                            <?php
                                            $userdata = $conn->query("SELECT `cat_id`, `cat_name`, `cat_feature_image`, `cat_unique_id`, `created_at` FROM `tbl_categories` ");
                                            $count = 0;
                                            while ($row = $userdata->fetch_assoc()) {
                                            ?>
                                                <option value="<?= $row['cat_id']; ?>"><?= $row['cat_name']; ?></option>

                                            <?php
                                            }
                                            ?>

                                        </select>
                                    </div>
                                    <div class="form-group  col-md-6">
                                        <label for="name">Sub Category</label>
                                        <select name="sub_cat_id" id="sub_cat_data" class="form-control">
                                            <option value="">Choose SubCategory</option>
                                        </select>
                                    </div>

                                </div>

                                <div class="form-row">
                                    <div class="form-group  col-md-6">
                                        <label for="name">Your Store Exist In</label><br>
                                        <input type="hidden" name="city_id" id="city_values" value="">
                                        <select id="city_id" multiple="multiple" style="display: none" class="form-control" required>
                                            <?php
                                            $userdata = $conn->query("SELECT * FROM `tbl_cities`");
                                            $count = 0;
                                            while ($row = $userdata->fetch_assoc()) {
                                            ?>
                                                <option value="<?= $row['cities_id']; ?>"><?= $row['cities_name']; ?></option>

                                            <?php
                                            }
                                            ?>

                                        </select>
                                    </div>
                                    <div class="form-group  col-md-6">
                                        <label for="name">Product Gallery (1138*1584)</label>
                                        <input type="file" name="product_gallery[]" multiple class="form-control">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group  col-md-6">
                                        <label for="name">Product Remarks</label>
                                        <input type="text" name="remarks" class="form-control">
                                    </div>
                                    <div class="form-group  col-md-6">
                                        <label for="name">Quantity</label>
                                        <input type="text" name="quantity" class="form-control">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="pdfpath">PDF File path</label>
                                        <input type="text" name="pdfpath" value="" class="form-control">

                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="name">Descirption</label>
                                        <textarea name="product_desc" id="editor" cols="10" rows="3" class="form-control"></textarea>
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-info btn-sm" data-dismiss="modal">Close</button>
                                <button type="submit" name="add_product" class="btn btn-success btn-sm ">Add Product</button>

                            </div>
                        </form>

                    </div>

                </div>
            </div>
            <!-- /.content-wrapper -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->
        </div>
        <!-- ./wrapper -->
    </body>
    <?php include "footer.php";
    ?>
<?php
} else {
    unset($_SESSION['admin']);
    header('location:login.php');
    ob_end_flush();
}
?>
<script src="https://cdn.ckeditor.com/ckeditor5/17.0.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create(document.querySelector('#editor'))
        .catch(error => {
            console.error(error);
        });
    ClassicEditor
        .create(document.querySelector('#e_editor'))
        .then(editor => {
            window.editor = editor;
            YourEditor = editor;
        })
        .catch(error => {
            console.error(error);
        });
</script>
<!-- Initialize the plugin: -->
<script type="text/javascript">
    $(document).ready(function() {
        $('#city_id').multiselect({
            allSelectedText: 'All',
            maxHeight: 200,
            includeSelectAllOption: true
        });
        $("#city_id").change(function() {
            $("#city_values").val($("#city_id").val().toString());
        });
    });
</script>
<script>
    function get_sub_cat(id) {

        $.ajax({
            url: "action.php",
            method: "POST",
            data: {
                get_sub_category: id
            },
            success: function(data) {

                $('#sub_cat_data').html(data);
            },
            error: function() {
                $("#sub_cat_data").html("No Data Found Error");
            }
        });
    }

    function editorledetails(id) {
        // alert(id);
        $("#editmember").modal("show");
        $.ajax({
            url: 'action.php',
            method: 'POST',
            data: {
                edit_product: id
            },
            success: function(dataset) {
                var data = JSON.parse(dataset);
                $('#e_id').val(data.product_id);
                $('#e_fullname').val(data.product_name);
                $('#e_price').val(data.vendor_price);
                $('#e_qty').val(data.product_quantity);
                $('#e_remarks').val(data.product_remarks);
                $('#pdfpath').val(data.product_dics_pdf_path);
                YourEditor.setData(data.product_desc);
                //                $('#e_editor').value(data.product_desc);
                //$("#edit_data").html(data);
                //                debugger;
                // console.log(data);
            },
            error: function(err) {
                Swal.fire({
                    icon: 'error',
                    text: 'Somthing Went Wrong! Try Again',
                    footer: '<a href>Real Estate Portal</a>'
                });

            }
        });


    }

    function delete_member_data(id) {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {

            if (result.isConfirmed) {
                $.ajax({
                    url: "action.php",
                    method: "POST",
                    data: {
                        delete_product: id
                    },
                    success: function(data) {
                        Swal.fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                        );
                        location.reload(true);
                    },
                    error: function() {
                        Swal.fire(
                            'Deleted!',
                            'Data Not Deleted.',
                            'error'
                        );
                    }
                });

            }
        })
    }

    $(function() {
        $("#table_").DataTable({
            "dom": '<"dt-buttons"Bf><"clear">lirtp',
            "paging": true,
            "autoWidth": true,
            "buttons": [

                {
                    text: 'Generate Excel',
                    extend: 'excel',
                    filename: 'merchant_record',

                },
                // {
                //     text:'take print',
                //     extend:'print',
                //     file_name:'Print_customer_date'
                // }

            ]
        });
    })
</script>