<?php session_start();?>
<?php include"include/header.php";?>
<?php include"include/topbar.php";?>
<?php include"include/sidebar.php";?>




  
   
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">

       

          <div class="col-12">
          <?php 
if (isset($_SESSION['error'])) {
  echo "
    <div id='alert' class='alert alert-danger alert-dismissible'>
      <button class='close' type='button' data-dismiss='alert' aria-hidden='true'>&times;</button>
      <h4><i class='icon fa fa-warning'></i> Error!</h4>
      ".$_SESSION['error']."
    </div>";
  unset($_SESSION['error']);
}

if (isset($_SESSION['success'])) {
  echo "
    <div id='alert' class='alert alert-success alert-dismissible'>
      <button class='close' type='button' data-dismiss='alert' aria-hidden='true'>&times;</button>
      <h4><i class='icon fa fa-check'></i> Success!</h4>
      ".$_SESSION['success']."
    </div>";
  unset($_SESSION['success']);
}
?>


            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped dt-responsive nowrap" cellspacing="0" width="100%">
                    <thead>
                <tr>
                    <th>Firs Name</th>
                    <th>Middle Name</th>
                    <th>Last Name</th>
                    <th>Phone Number</th>
                    <th>Email</th>
                    <th>Date</th>
                    <th>Actions</th>
                  </tr>
                  </thead>
                  <tbody>
                 <?php 
                 require_once "conn.php";
                 
                 $sql = "SELECT * FROM booking_record";
                 $query = $conn->query($sql);
                 while($row = $query->fetch_assoc()){
                 ?>
                    <tr>
                        <td><?php echo  $row['firstName'];?></td>
                        <td><?php echo  $row['middleName'];?></td>
                        <td><?php echo  $row['lastName'];?></td>
                        <td><?php echo  $row['phone'];?></td>
                        <td><?php echo  $row['email'];?></td>
                        <td><?php echo  $row['date'];?></td>
                        <td>
                            <a href="" data-id="<?php echo $row['id']?>" class="btn btn-info btn-sm info">VIEW</a>
                            <a href="" data-id="<?php echo $row['id'];?>"  class="btn btn-success btn-sm edit"><i class="fa fa-edit"></i>EDIT</a>
                            <a href="" data-id="<?php echo $row['id'];?>" class="btn btn-danger btn-sm delete"><i class="fa fa-trash"></i> DELETE</a>
                        </td>
                    </tr>
                 


                 <?php
                 }
                 ?>
                  </tbody>
                 
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="assets/plugins/jszip/jszip.min.js"></script>
<script src="assets/plugins/pdfmake/pdfmake.min.js"></script>
<script src="assets/plugins/pdfmake/vfs_fonts.js"></script>
<script src="assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="assets/dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
$(function () {
    $("#example1").DataTable({
        "responsive": true,
        "lengthChange": true, // Enable length change
        "lengthMenu": [ 25, 50, 100 ], // Define options for the "Show x entries" dropdown
        "pageLength": 25, // Set default page length to 25
        "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    
    $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
    });
});

</script>
<?php
 include'booking-modal.php';
 ?>
 <script>
    $(function(){
        $('.edit').click(function(e){
            e.preventDefault();
            $('#edit').modal('show');
            var id = $(this).data('id');
            getRow(id);
        });
    });

    $(function(){
        $('.delete').click(function(e){
            e.preventDefault();
            $('#delete').modal('show');
            var id = $(this).data('id');
            getRow(id);
        });
    });

    $(function(){
        $('.info').click(function(e){
            e.preventDefault();
            $('#info').modal('show');
            var id = $(this).data('id');
            getRow(id);
        });
    });

    function getRow(id){
      $.ajax({
        type: 'POST',
        url: 'booking-row.php',
        data:{id:id},
        dataType: 'json',
        success: function(response){
          $('.cust_id').val(response.id);
          $('.customer_id').html(response.id);
          $('.trackcode').html(response.AUTONUM);
          $('.del_customer_name').html(response.firstName+' '+response.middleName+' '+response.lastName);
          $('#edit_firstname').val(response.firstName);
          $('#edit_middlename').val(response.middleName);
          $('#edit_lastname').val(response.lastName);
          $('#edit_phone').val(response.phone);
          $('#edit_email').val(response.email);

          $('.view_firstname').html(response.firstName);
          $('.view_middlename').html(response.middleName);
          $('.view_lastname').html(response.lastName);
          $('.view_phone').html(response.phone);
          $('.view_email').html(response.email);
        }
      });
    }
 </script>

 <script>
  $(document).ready(function(){
    window.setTimeout(function(){
      $("#alert").fadeTo(1000, 0).slideUp(1000,function(){
        $(this).remove();
      });
    }, 16000);
  });
 </script>
</body>
</html>
