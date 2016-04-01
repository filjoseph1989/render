<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class My_Controller Defined as the extension of some classes in the contrllers directory
 *
 * Maps to the following URL
 * 		http://your-website.com/your-conttroller
 *
 * @author fil josepn elman
 * @email filjoseph22@gmail.com
 * @date Dec 10, 2015
 * @date Mar 31, 2016
 * @since 1.0.0
 * @version 1.0.0
 */
class My_Controller extends CI_Controller {
  private $template         = "template".D;
  private $content          = "content".D;
  private $fragment         = "fragments".D;
  private $modal            = "modals".D;
  private $content_variable = array ();

  /**
	 * Include the parent's contructor to inhirit all the function
	 */
  public function __construct () {
    parent::__construct ();
  }

  /**
	 * This method is responsible for showing the entire htnl layout
   * to the web browser.
   * @param array $data - accepts data from the controller use for html content
	 * @return none
	 */
  protected function render ($data=array()) {
    $this->content_variable ($data);
    $this->get_header ();
    $this->get_fragment ();
    $this->get_content ();
    $this->get_footer ();
  }

  /**
	 * This method is responsible for creating a variable use for view
   * @param array $data - accept data
	 */
  protected function content_variable ($data=array()) {
    $this->content_variable = $data;
  }

  /**
	 * Include the header file
	 */
  protected function get_header () {
    $header = $this->fragment.'header';
    $this->load->view($header, $this->content_variable);
  }

  /**
	 * Include the content file
	 */
  protected function get_content () {
    if (isset($this->content_variable['content'])) {
      $filename = $this->content . $this->content_variable['content'];
      unset ($this->content_variable['content']);
      $this->load->view ($filename, $this->content_variable);
    }
  }

  /**
	 * This method is responsible for rendering the footer.php
   * into the browser.
   * @return none
	 */
  protected function get_footer () {
    $footer = $this->fragment.'footer';
    $this->load->view ($footer, $this->content_variable);
  }

  /**
	 * This method is responsible for including the fragments
   * and modal into the header.php, content/*, and footer.php
   * @return none
	 */
  protected function get_fragment () {
    foreach ($this->content_variable as $key => $value) {
      if (!is_array($value)) {
        $filename = VIEWPATH . $this->fragment . $value;
        if (file_exists($filename.'.php')) {
          $filename = $this->fragment.$value;
          $this->content_variable[$key] = $this->load->view ($filename, $this->content_variable, TRUE);
        }
        $filename = VIEWPATH . $this->modal . $value;
        if (file_exists($filename.'.php')) {
          $filename = $this->modal.$value;
          $this->content_variable[$key] = $this->load->view ($filename, $this->content_variable, TRUE);
        }
      }
    }
  }

}
