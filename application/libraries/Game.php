<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Game extends CI_Controller {

	public function __construct()
	{
		$CI =& get_instance();
		/**
		 *  FlameCMS | Load helpers
		 */
	    $CI->load->helper('language');
	    $CI->load->helper('url');
		
		/**
		 *  FlameCMS | Load other libraries
		 */
	}
}