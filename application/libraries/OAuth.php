<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class OAuth extends CI_Controller
{
	public function __construct()
	{
		$CI =& get_instance();
		/**
		 *  FlameCMS | Load helpers
		 */
	    $CI->load->helper('language');
	    $CI->load->helper('url');
		$CI->load->library('installer');
		$CI->load->database();
		
		/**
		 *  FlameCMS | Load other libraries
		 */
	}
}
