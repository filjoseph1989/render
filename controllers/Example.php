<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Class Example
 *
 *
 * @author fil josepn elman
 * @email fil.elman@greyandgreentech.com
 * @date 03-28-2016
 * @date 04-26-2016
 * @since 1.0.0
 * @version 1.0.0
 */
class Example extends My_Controller {

  function __construct() {
    parent::__construct();
  }

 /**
  * Example of the method view
  * @return none
  */
  public function view () {
    $data = array (
      'title'     => 'Example of the title',
      'content'   => 'example/view',
      'css'       => array (),
      'js'        => array (),
      'fragments' => array ('navigation','breadcrumb','modals/modal_sample')
    );
    parent::render('main', $data);
  }
}

?>
