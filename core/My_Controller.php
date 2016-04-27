<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Class My_Controller
 *
 * @author filjoseph elman, dindo gaitmaitan
 * @email fil.elman@greyandgreentech.com
 * @email dindogaitmaitan@greyandgreentech.com
 * @date 04-25-2016
 * @date 04-26-2016
 * @since 1.0.0
 * @version 1.0.0
 */
abstract class MY_Controller extends CI_Controller {
	protected $title    = 'Sample Title';
  protected $sections = array();
	protected $class		= array();
	protected $js	  		= array();

	/**
	 * A constructor of a class which prepare My_controller as an object
	 * @return none
	 */
  public function __construct () {
		parent::__construct();
		$sections = array(
			'content' 	 => null,
			'title'   	 => $this->title,
			'css'				 => $this->class,
      'js' 				 => $this->js
		);
		$this->sections = $sections;
	}

	/**
	 * This method is responsible for rendering the html page
	 * @param string $template, The given filename of file inside template directory
	 * @param array $sections, The given data
	 */
	public function render ($template_name, $sections = array()) {
		$this->sections = array_merge($this->sections, $sections);
		$this->get_fragment ();
    $this->get_content ();
    $this->get_header ();
    $this->get_footer ();
		$this->load->view('templates/'.$template_name, $this->sections);
	}

	/**
	 * This method is responsible for getting the fragments/ files
	 * or templates/files if exist
   * @return none
	 */
  protected function get_fragment () {
		if (isset($this->sections['fragments'])) {
			foreach ($this->sections['fragments'] as $key => $value) {
				if (!is_array($value)) {
					$filename = VIEWPATH . 'fragments/' . $value;
					if (file_exists($filename.'.php')) {
						$filename = 'fragments/'.$value;
						if (strpos($value, '/') !== false) {
				      $index = basename($value);
							$this->sections[$index] = $this->load->view ($filename, $this->sections, TRUE);
						} else {
							$this->sections[$value] = $this->load->view ($filename, $this->sections, TRUE);
						}
					}
				}
			}
		}
  }

  /**
	 * Include the content file
	 */
  protected function get_content () {
		if (isset($this->sections['content'])) {
			$filename = 'content/'.$this->sections['content'];
			$this->sections['content'] = $this->load->view ($filename, $this->sections, true);
		}
  }

	/**
	 * The the content of the header
	 * @param string $string, path to header
	 * @return none
	 */
	protected function get_header ($header=null) {
		if (isset($header)) {
			$header = "fragments/$header";
			$this->sections['header'] = $this->load->view ($header, $this->sections, TRUE);
		} else {
			$header = "fragments/main/header";
			$this->sections['header'] = $this->load->view ($header, $this->sections, TRUE);
		}
	}

	/**
	 * The the content of the header
	 * @param string $string, path to header
	 * @return none
	 */
	protected function get_footer ($footer=null) {
		if (isset($footer)) {
			$footer = "fragments/$footer";
			$this->sections['footer'] = $this->load->view ($footer, $this->sections, TRUE);
		} else {
			$footer = "fragments/main/footer";
			$this->sections['footer'] = $this->load->view ($footer, $this->sections, TRUE);
		}
	}

  public function set_title ($title, $short_title = null) {
    $this->title       = $this->title;
    $this->short_title = $title;
    if ($short_title  != null) {
      $this->short_title = $short_title;
    }
  }

  protected function check_admin () {
    if (!$this->auth->user_access('admin'))
    redirect('home');
  }

  protected function check_user() {
    if (!$this->auth->user_is_logged())
    redirect('home');
  }

  protected function get_active_nav() {
    return $this->active_nav;
  }

  protected function set_active_nav($nav) {
    $this->active_nav = strtolower($nav);
  }
}
