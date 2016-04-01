<!-- Update user modal -->
         <div class="modal" id="update_user_modal<?php echo $user->id ?>" role="dialog">
                <div class="modal-dialog modal-default">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 id="modal-user-profile" class="modal-title">Update User</h4>
                    </div>
                    
                    <div class="modal-body">
                    <?php echo validation_errors(); ?>
                      <?php echo form_open("users/update_user");?>
                      <?php echo form_input(['name' => 'id', 'class' => 'hidden','value' => $user->id]); ?>
                        <div class="form-group">
                            <label for="first_name" class="col-sm-3 control-label">First Name
                            </label>
                            <div class="col-sm-9">
                                <?php echo form_input(['id' => 'first_name', 'name' => 'first_name', 
                                  'class' => 'form-control', 'placeholder' => 'Firstname',
                                  'value' => $user->first_name]); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="last_name" class="col-sm-3 control-label">Last Name</label>
                            <div class="col-sm-9">
                                <?php echo form_input(['id' => 'last_name', 'name' => 'last_name', 
                                  'class' => 'form-control', 'required' => 'required', 'placeholder' => 'Lastname',
                                  'value' => $user->last_name]); ?>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="phone" class="col-sm-3 control-label">Contact No.</label>
                            <div class="col-sm-9">
                                <?php echo form_input(['id' => 'phone', 'name' => 'phone', 
                                  'class' => 'form-control', 'required' => 'required', 'placeholder' => 'Phone',
                                  'value' => $user->phone]); ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-sm-3 control-label">Email</label>
                            <div class="col-sm-9">
                                <?php echo form_input(['id' => 'email', 'name' => 'email', 'type' => 'email',
                                  'class' => 'form-control', 'required' => 'required', 'placeholder' => 'Email',
                                  'value' => $user->email]); ?>
                            </div>
                        </div>
                            <div class="form-group">
                              <label for="group_name" class="col-sm-3 control-label">Group</label>
                                <div class="col-sm-9">
                                    <select class="form-control" id="group_name" name="group_name">
                                        <option value="1">Admin</option>
                                        <option value="2">Client</option>
                                        <option value="3">BIR</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                              <label for="status" class="col-sm-3 control-label">Status</label>
                                <div class="col-sm-9">
                                    <select class="form-control" id="status">
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
                                </div>
                            </div>
                             
                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-9">
                                    <button id="create-user" type="submit" class="btn btn-primary">Update User</button>
                                </div>
                            </div>   
                      <?php echo form_close();?>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
            </div>