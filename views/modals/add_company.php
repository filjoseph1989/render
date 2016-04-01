<div class="modal fade" id="add-checklist" role="dialog">
  <div class="modal-dialog modal-default">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 id="modal-user-profile" class="modal-title">Add Companylist</h4>
      </div>
      <div class="modal-body">
        <?php echo form_open('company/add_company', array('class'=>'form-horizontal')); ?>
          <div class="form-group">
            <div class="col-sm-12">
              <input type="text" class="form-control" id="companyname" placeholder="Company Name" name="company_name">
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-12">
              <input type="text" class="form-control" id="streetAdd" placeholder="Street Address" name="company_street">
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-12">
              <input type="text" class="form-control" id="city" placeholder="City" name="company_city">
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-12">
              <input type="text" class="form-control" id="telno" placeholder="Tel. No." name="company_tel">
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-12">
              <input type="text" class="form-control" id="faxno" placeholder="Fax No." name="company_fax">
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-12">
              <input type="text" class="form-control" id="web" placeholder="Website" name="company_web">
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-12">
              <input type="text" class="form-control" id="tinno" placeholder="TIN No." name="company_tin">
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
              <button type="submit" class="btn btn-default create">Add</button>
            </div>
          </div>
        <!-- </form> -->
        <?php echo form_close();; ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
