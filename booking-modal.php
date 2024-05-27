<div class="modal fade" id="edit">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-tittle">
                    EDIT: <span class="del_customer_name"></span>
                   
                </h5>
                <button class='close' type='button' data-dismiss='modal' aria-label="close" aria-hidden='true'>&times;</button>
            </div>
            <form action="booking_edit_save.php" method="post">
            <div class="modal-body">
                <input type="hidden" class="cust_id" name="id">

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="">First Name</label>
                        <input type="text" class="form-control" id="edit_firstname" name="firstName">
                    </div>
                    <div class="form-group">
                        <label for="">Middle Name</label>
                        <input type="text" class="form-control" id="edit_middlename" name="middleName">
                    </div>
                    <div class="form-group">
                        <label for="">Last Name</label>
                        <input type="text" class="form-control" id="edit_lastname" name="lastName">
                    </div>
                    <div class="form-group">
                        <label for="">Phone</label>
                        <input type="text" class="form-control" id="edit_phone" name="phone">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="text" class="form-control" id="edit_email" name="email">
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal"> Close</button>
                <button type="submit" class="btn btn-primary" name="submit">Save Changes</button>
            </div>
            </form>
        </div>

    </div>
</div>

<div class="modal fade" id="delete">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Please Confirm</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="booking_delete_record.php" method="post">
                    <input hidden  class="cust_id" name="id">
            <div class="modal-body">
                

                    <center>
                            <p>Are you sure you want to delete this record?</p><br>
                   Track Code: <span class="customer_id"></span><br>
                    Name: <span class="del_customer_name"></span>
                    </center>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning" data-dismiss="modal"><i class="fa fa-close"></i> No</button>
                <button type="submit" name="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Yes</button>
            </div>
                </form>
        </div>
    </div>
</div>

<div class="modal fade" id="info">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Information</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
           
            <div class="modal-body">
                <center>
                    <h3 class="media-heading"><span class="del_customer_name"></span></h3>
                </center>
                <center>
                <p class="text-left"><strong>trackcode:</strong><span class="customer_id"></span></p>
                

                <p class="text-left"><strong>First Name:</strong> <span class="view_firstname"></span></p>
               

                <p class="text-left"><strong>Middle Name:</strong><span class="view_middlename"></span></p>
                

                <p class="text-left"><strong>Last Name:</strong><span class="view_lastname"></span></p>
                

                <p class="text-left"><strong>Phone:</strong> <span class="view_phone"></span></p>
               
                
                <p class="text-left"><strong>Email:</strong><span class="view_email"></span></p>
                
                </center>
               
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning" data-dismiss="modal"><i class="fa fa-close"></i> No</button>
                
            </div>
                </form>
        </div>
    </div>
</div>
