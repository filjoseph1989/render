<!-- Add user modal -->
         <div class="modal fade" id="add-user" role="dialog">
                <div class="modal-dialog modal-default">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 id="modal-user-profile" class="modal-title">Add User</h4>
                    </div>
                    <div class="modal-body">
                    <?php echo form_open('users/create_user', ['class' => 'form-horizontal', 'role' => 'form']); ?>
                  <div class="form-group">
                    <label for="first_name" class="col-sm-2 control-label">First Name</label>
                    <div class="col-sm-10">
                        <?php echo form_input($first_name);?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="password" class="col-sm-2 control-label">Password</label>
                    <div class="col-sm-10">
                      <?php echo form_password(['name' => 'password', 'id' => 'password', 'class' => 'form-control', 'placeholder' => 'Password']); ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="password" class="col-sm-2 control-label">Confirm Password</label>
                    <div class="col-sm-10">
                      <?php echo form_password(['name' => 'password_confirm', 'id' => 'password_confirm', 'class' => 'form-control', 'value' => set_value('password_confirm'), 'placeholder' => 'Confirm Password']); ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-10">
                      <?php echo form_input(['name' => 'email', 'id' => 'email', 'class' => 'form-control', 'value' => set_value('email'), 'placeholder' => 'Email']); ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">Contact No</label>
                    <div class="col-sm-10">
                      <?php echo form_input(['name' => 'contact', 'id' => 'contact', 'class' => 'form-control', 'value' => set_value('contact'), 'placeholder' => 'Contact']); ?>
                    </div>
                  </div>
                  <div class="form-group">
                  <label for="status" class="col-sm-2 control-label">Group</label>
                  <div class="col-sm-10">
                    <select class="form-control" id="group">
                        <option>--</option>
                        <option>Admin</option>
                        <option>Client</option>
                        <option>BIR</option>
                    </select>
                    </div>
                  </div>
                  <div class="form-group">
                  <label for="status" class="col-sm-2 control-label">Status</label>
                  <div class="col-sm-10">
                    <select class="form-control" id="status">
                        <option>--</option>
                        <option>Active</option>
                        <option>Inactive</option>
                    </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-default create-user">Create</button>
                      <button type="button" class="btn btn-danger create">Cancel</button>
                    </div>
                  </div>
                <?php echo form_close(); ?>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
            </div>