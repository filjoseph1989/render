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
  *
  * @return none
  */
  public function view () {
    $data = array (
      'title'         => 'Example of the title',
      'heading'       => 'Example',
      'navigation'    => 'navigation',
      'content'       => 'example',
    );
    parent::render($data);
  }
}

?>
