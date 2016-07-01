<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class My_Controller
 *
 * @author filjoseph elman
 * @author dindo gatmaitan
 * @email fil.elman@greyandgreentech.com
 * @email dindo@greyandgreentech.com
 * @date 04-25-2016
 * @date 06/10/2016
 * @since 1.0.0
 * @version 1.1.2
 */
abstract class MY_Controller extends CI_Controller {
	protected $title     = COMPANY_NAME;
  protected $content   = null;
  protected $sections  = array();
	protected $css       = array();
	protected $js        = array();

	/**
	 * A constructor of a class which prepare My_controller as an object
	 * @return none
	 */
  public function __construct () {
		parent::__construct();

		$this->sections = array(
			'content' 	 => $this->content,
			'title'   	 => $this->title,
			'css'				 => $this->css,
      'js' 				 => $this->js,
			'user'			 => $this->ion_auth->user()->row() # Should not belong to sections, but to data
		);
	}

	/**
	 * This method is responsible for rendering the html page
	 * @param string $template, The given filename of file inside template directory
	 * @param array $sections, The given data
	 */
	public function render ($template_name, $sections = array()) {
		$this->sections = array_merge($this->sections, $sections);
		$this->get_fragment ();
		$this->get_modals ();
    $this->get_content ();
    $this->get_header ();
    $this->get_footer ();
    $this->set_version ();

		$this->load->view('templates'.DIRECTORY_SEPARATOR.$template_name, $this->sections);
	}

	/**
	 * This method is responsible for getting the fragments/ files
	 * or templates/files if exist
	 *
   * @return none
	 */
  protected function get_fragment () {
		if (isset($this->sections['fragments'])) {
			foreach ($this->sections['fragments'] as $key => $value) {
				if (!is_array($value)) {
					$filename = VIEWPATH . 'fragments'.DIRECTORY_SEPARATOR . $value;
					if (file_exists($filename.'.php')) {
						$filename = 'fragments'.DIRECTORY_SEPARATOR.$value;
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
	 * Get the html modal from the directory view/content/
	 *
	 * Usage: Controller
	 * 	$data['modals'] = array('Checklists/modals/index');
	 *
	 * Usage: View
	 * 	echo $index;
	 *
	 * @param string $string, path to header
	 * @return none
	 */
	protected function get_modals () {
		if (isset($this->sections['modals'])) {
			foreach ($this->sections['modals'] as $key => $value) {
				if (!is_array($value)) {
					$filename = VIEWPATH . 'content'.DIRECTORY_SEPARATOR . $value;
					if (file_exists($filename.'.php')) {
						$filename = 'content'.DIRECTORY_SEPARATOR.$value;
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
	 *
	 * @return none
	 */
  protected function get_content () {
		if (! is_null($this->sections['content'])) {
			$filename = 'content'.DIRECTORY_SEPARATOR.$this->sections['content'];
			$this->sections['content'] = $this->load->view ($filename, $this->sections, true);
		}
  }

	/**
	 * The the content of the header
	 *
	 * @param string $string, path to header
	 * @return none
	 */
	protected function get_header ($header=null) {
		if (isset($header)) {
			$header = "fragments".DIRECTORY_SEPARATOR.$header;
			$this->sections['header'] = $this->load->view ($header, $this->sections, TRUE);
		} else {
			$header = "fragments".DIRECTORY_SEPARATOR."main".DIRECTORY_SEPARATOR."header";
			$this->sections['header'] = $this->load->view ($header, $this->sections, TRUE);
		}
	}

	/**
	 * The the content of the header
	 *
	 * @param string $string, path to header
	 * @return none
	 */
	protected function get_footer ($footer=null) {
		if (isset($footer)) {
			$footer = "fragments".DIRECTORY_SEPARATOR.$footer;
			$this->sections['footer'] = $this->load->view ($footer, $this->sections, TRUE);
		} else {
			$footer = "fragments".DIRECTORY_SEPARATOR."main".DIRECTORY_SEPARATOR."footer";
			$this->sections['footer'] = $this->load->view ($footer, $this->sections, TRUE);
		}
	}

	/**
   * Return values assign to $this->sections, based on the given index
	 *
	 * @author fil joseph elman
	 * @param array
	 */
	protected function get_section ( $array_index ) {
		return $this->sections[$array_index];
	}

	/**
	 * Set version on css and js
	 *
	 * @author fil joseph elman
	 * @param string $string, path to header
	 * @return none
	 */
	protected function set_version () {
		self::set_version__split($this->sections['css'], 'css');
		self::set_version__split($this->sections['js'], 'js');
	}

	/**
   * Find the string "?v=" if exist in $value,
   * if found, separate version from $value,
	 *
	 * Use: to set version in your controller
	 * 	$data[css] = array ('custom.css?v=1.1.1');
	 *
	 * @author fil joseph elman
	 * @param array
	 */
	private function set_version__split ( $arr = array(), $index='', $version = true ) {
		foreach ($arr as $key => $value) {
			$temp = explode('?', $value);
			if (($pos = strpos($value, '?v=')) !== false) {
				$this->sections[$index][$key] = array($temp[0], "?".$temp[1]);
			} else {
				if ( $version === true ) {
					$this->sections[$index][$key] = array($temp[0], "?v=".CI_VERSION);
				} else {
					$this->sections[$index][$key] = array($temp[0], "");
				}
			}
		}
	}

  protected function set_title ($title, $short_title = null) {
    $this->title       = $this->title;
    $this->short_title = $title;
    if ($short_title  != null) {
      $this->short_title = $short_title;
    }
  }

  protected function user_info ($field=null) {

    $user_id = $this->session->userdata('user_id');

    if ($field=='id' OR $field=='user_id') {
      return $user_id;

    } else {
      // can be changed to use ion_auth
      $this->load->model('user_model', 'Users');
      $user = $this->Users->find('id='.$user_id);

      if (empty($field)) {
        return $user;
      } else {
        return (isset($user[$field])) ? $user[$field] : FALSE;
      }
    }

  }

  protected function check_admin () {

    if (!$this->ion_auth->is_admin()) {
      $this->session->set_flashdata('message', 'You do not have access rights to acces the page.');
      redirect('account');
    }

  }

  protected function check_user() {
    if (!$this->ion_auth->logged_in()) {
      $this->session->set_flashdata('message', 'You must be an admin to view this page');
      redirect('main');
    }
  }

  protected function get_active_nav() {
    return $this->active_nav;
  }

  protected function set_active_nav($nav) {
    $this->active_nav = strtolower($nav);
  }

	protected function path () {
		if (DIRECTORY_SEPARATOR == '\\') {
			return '/';
		}
	}

}
# vim: ts=4 sw=4 smartindent
