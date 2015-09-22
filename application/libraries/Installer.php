<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Installer extends CI_Controller
{
	public function __construct()
	{
		$CI =& get_instance();
		/**
		 *  FlameCMS | Load helpers
		 */
	    $CI->load->helper('language');
	    $CI->load->helper('url');
		$db['local']['db_debug'] = FALSE;
		if($CI->load->database() === FALSE)
		$this->check_is_installed();
		
		/**
		 *  FlameCMS | Load other libraries
		 */
	}
	function check_is_installed()
	{
		$CI =& get_instance();
		/**
		 *  FlameCMS | triger error not installed
		 */
	}
}
