<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Shop extends CI_Controller
{
	function __construct()
	{
		$CI =& get_instance();
		
		/**
		 *  FlameCMS | Load helpers
		 */
	    $CI->load->helper('language');
	    $CI->load->helper('url');
	}
	function product($world,$id='',$type='',$page=0,$max_items=10){
		$CI =& get_instance();
		if($id!='')
		{
			if(is_int($id))
			{
				/*
				 |
				 |
				 | Flame_CMS : 
				 | Get Item description, price, etc...
				 | 
				 */
			}
		}
		else {
			
		/**
		 *  FlameCMS | get product list with spefications
		 */
		}
	}
}
