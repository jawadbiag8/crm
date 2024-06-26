<?php 
include "header.php"; 
if(isset($_SESSION['merchant'])){
  $vendor_data=$_SESSION['merchant'];
  $vendor_id = $_SESSION['merchant']['merchant_id'];
?>
<script src="//cdn.ckeditor.com/4.11.1/standard/ckeditor.js"></script>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <?php
  include('top-bar.php');
  ?>
  <!-- Main Sidebar Container -->
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
                <h4 class="h4 text-center p-3 bg-info">Notifications To User/Applicants</h4>
              </div>
              <div class="card-body">
              <div class="form-row">
                <div class="col-md-12">
                    <button class="btn btn-sm btn-info float-right" data-toggle="modal" data-target="#addStaff"><i class="fa fa-plus"></i></button>
                </div>
              </div>
                <div class="table-responsive">
                  <table class="table table-striped table-sm table-hover table-bordered table-condenced" id="datatable">
                    <thead>
                      <th>s#.</th>
                      <th>Notice</th>  
                      <th>Action</th>
                    </thead>
                    <tbody>
                      <?php
                      $count=0;
                      $res=$conn->query("SELECT * FROM `tbl_notice`");
                      while($rows=$res->fetch_assoc()):
                        $count++;
                      ?>
                      <tr>
                      <td><?=$count;?></td>
                      <td><?=$rows['notice'];?></td>
                      <td>
                       <button value="<?=$rows['notice_id']?>" class="btn btn-sm btn-info"
                       onclick="delete_member_data(this.value);">
                       <i class="fa fa-trash"></i></button>
                       </td>
                      </tr>
                      <?php
                      endwhile;
                      
                      ?>
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
          <h4 class="modal-title">Edit Member information</h4>  
          <button type="button" class="close" data-dismiss="modal">×</button>  
        </div>  
        <form action="action.php" enctype="multipart/form-data" method="POST" >
        <div class="modal-body" id="edit_data">  
      
        </div>  
        </form>
      </div>  
    </div>  
  </div> 

<!-- add staff -->
  <div class="modal fade" id="addStaff" role="dialog">  
    <div class="modal-dialog modal-lg">  
      <div class="modal-content">
      <form action="action.php" method="POST" enctype="multipart/form-data">
        <div class="modal-header">  
          <h4 class="modal-title">Add Notifications</h4>  
          <button type="button" class="close" data-dismiss="modal">×</button>  
        </div>  
        <div class="modal-body"> 
            <div class="form-row">
            <!-- <div class="form-group col-md-12">
                <label for="name">Select Course</label>
               <select name="course_id" class="form-control input-group input-group-sm select2" style="width: 100%;" >
                      <option value="">Choose Course</option>
                      <?php 
                      $res=$conn->query("SELECT * FROM `tbl_courses`");
                      while($rows=$res->fetch_assoc()){
                            ?>
                        <option value="<?=$rows['course_id'];?>"><?=$rows['course_title'];?></option>
                            <?php
                      }
                      
                      ?>
               </select>
            </div> -->
            </div> 
            <div class="form-row">
            <div class="form-group col-md-12">
                <label for="name">Message</label>
                <textarea id='long_desc' name="message"  cols="10" class="form-control" rows="3"></textarea>
            </div>
        </div>
           
        <!-- <div class="form-row">
            <div class="form-group col-md-12">
                <label for="name">Status</label>
              <select name="status" id="" class="form-control">
                      <option value="1">Active</option>
                      <option value="0">Inactive</option>
              </select>
            </div>
        </div> -->
        </div>  
        <div class="modal-footer">  
          <button type="button" class="btn btn-info btn-sm" data-dismiss="modal">Close</button>
          <button type="submit" name="add_notification" class="btn btn-success btn-sm ">Add Notification</button>
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

}else{
    unset($_SESSION['admin']);
    header('location:login.php');
    ob_end_flush();
}
?>
<script>
CKEDITOR.replace('long_desc'); 

function editmemberdetails(id){
  // alert(id);
  // $("#editmember").modal("show");

  $.ajax({
            url: 'action.php',
            method: 'POST',
            data: {edit_member: id},
            success:function(data){
                // $('#EditStafinf').html(data);
             $("#edit_data").html(data);
           
              // console.log(data);
            },
            error:function(err){
              Swal.fire({
                  icon: 'error',
                  text: 'Somthing Went Wrong! Try Again',
                  footer: '<a href>Edmy</a>'
                });

            }
        });


}
function delete_member_data(id){
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
    url:"action.php",
    method:"POST",
    data:{delete_notice:id},
    success:function(data){
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
</script>

