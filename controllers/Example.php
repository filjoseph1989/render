<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Class Example 
 *
 *
 * @author fil josepn elman
 * @email fil.elman@greyandgreentech.com
 * @date 03-28-2016
 * @date 03-31-2016
 * @since 1.0.0
 * @version 1.0.0
 */
class Example extends My_Controller {

  function __construct() {
    parent::__construct();
  }

  /**
  * This method is responsible for rendering the
  * list of company to the browser.
  * @return none
  */
  public function view_company ($option=array()) {
    if (!$this->ion_auth->logged_in()) {
      redirect('main', 'refresh');
    } else {
      $data = array (
      'title'         => COMPANY_NAME.' - '.'Company List',
      'heading'       => 'Company',
      'navigation'    => 'navigation',
      'content'       => 'company'.D.'company_list',
      'company_list'  => $this->company_model->get_company_list(),
      'add_company'   => 'add_company',
      'edit_company'  => 'edit_company'
      );
      # merge option and data
      $data = array_merge($data, $option);
      parent::render($data);
    }
  }

}

?>
