
<div class="modal fade " id="edit-list<?php echo $value['id']; ?>" role="dialog">
  <div class="modal-dialog modal-default">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 id="modal-user-profile" class="modal-title">Add Companylist</h4>
      </div>
      <div class="modal-body">
        <?php echo form_open('company/edit_company', array('class'=>'form-horizontal')); ?>
          <div class="form-group">
            <div class="col-sm-12">
              <input type="text" class="hidden" id="companyname" placeholder="Company Name" name="id" value="<?php echo $value['id']; ?>">
              <input type="text" class="form-control" id="companyname" placeholder="Company Name" name="company_name" value="<?php echo $value['company_name']; ?>">
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-12">
              <input type="text" class="form-control" id="streetAdd" placeholder="Street Address" name="company_street" value="<?php echo $value['company_street']; ?>">
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-12">
              <input type="text" class="form-control" id="city" placeholder="City" name="company_city" value="<?php echo $value['company_city']; ?>">
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-12">
              <input type="text" class="form-control" id="telno" placeholder="Tel. No." name="company_tel" value="<?php echo $value['company_tel']; ?>">
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-12">
              <input type="text" class="form-control" id="faxno" placeholder="Fax No." name="company_fax" value="<?php echo $value['company_fax']; ?>">
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-12">
              <input type="text" class="form-control" id="web" placeholder="Website" name="company_web" value="<?php echo $value['company_website']; ?>">
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-12">
              <input type="text" class="form-control" id="tinno" placeholder="TIN No." name="company_tin" value="<?php echo $value['company_tin']; ?>">
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-12">
              <select class="form-control" id="status" name="company_line">
                <option>Line of Business</option>
                <option>Industrial</option>
                <option>Technology</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-12">
              <button type="submit" class="btn btn-default create">Update</button>
            </div>
          </div>
        <?php echo form_close();; ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
