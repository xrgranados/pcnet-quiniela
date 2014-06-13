<?php

/**
 * Gets traduction line in lang file
 * If line not defined, returns a warning string
 * 
 * @param unknown_type $language_key
 * @return string
 * @autor @xrgranados
 * Date 03/05/2014
 */
function _lang($language_key=""){
	$CI = &get_instance();
	if($CI->lang->line($language_key)){
		return $CI->lang->line($language_key); 
	}
	return "Traduction not defined";
}


/**
 * Return a array element or $default value in case index is not set
 * 
 * @param unknown_type $index
 * @param Array  $array
 * @param String $default
 * @autor @xrgranados
 * Date 3/09/2013
 */
function element($index, &$array, $default=""){
	if(isset($array) && !empty($array[$index])){
		return $array[$index];
	}
	
	return $default;
}

/**
 * Return a date in spasish format
 * 
 * @param unknown_type $date
 * @autor @xrgranados
 * Date 27/08/2013
 */
function format_date_es($date){
	return format_date($date, 'd-m-Y');
}

/**
 * Return a date in english format (database format)
 * 
 * @param unknown_type $date
 * @autor @xrgranados
 * Date 27/08/2013
 */
function format_date_en($date){
	return format_date($date, 'Y-m-d');
}

function format_datetime_en($datetime, $all_day=FALSE){
	if($all_day)
		return format_date($datetime, 'Y-m-d 23:59:59');
		
	return format_date($datetime, 'Y-m-d H:m:i');
}
	
/**	  
 * Get a date as string and return the date in the specif format
 * @param $date
 * @param $format
 * Return date object or NULL
 */
function format_date($date, $format){
	if(!is_date($date))
		return NULL;
	
	$new_date = new DateTime($date);
	$new_date = $new_date->format($format);
	return $new_date;
}
	

/**
 * Check if date is valid
 *
 * @param $str
 * @return boolea
 * @date 03/05/2014
 */
function is_date( $str ){
	$stamp = strtotime( $str );
	 
	if (!is_numeric($stamp)) {
		return FALSE;
	}
	$month = date( 'm', $stamp );
	$day   = date( 'd', $stamp );
	$year  = date( 'Y', $stamp );
	 
	if (checkdate($month, $day, $year)) {
		return TRUE;
	}
	return FALSE;
}

/**
 * Format money to guatemalan format (thousands separated by "," and decimals separted by ".")
 * Return a number with 2 decimals
 * If second parameter is set, concat currency symbol before number
 * @param unknown_type $number
 * @param unknown_type $currency
 * @autor @xrgranados
 * Date 03/05/2014
 */
function format_money($number, $currency=false){
	if ($currency){
		return $currency." ".number_format($number, 2);
	}
	return number_format($number, 2);
}

/**
 * Load script tag
 * @param unknown_type $src
 * @autor @xrgranados
 * Date 03/05/2014
 */

if ( ! function_exists('script_tag')) {
    function script_tag($src = '', $language = 'javascript', $type = 'text/javascript', $index_page = FALSE) {
        
        $CI =& get_instance();
        $script = '<script';

        if (is_array($src)) {
            foreach ($src as $k=>$v) {
                if ($k == 'src' AND strpos($v, '://') === FALSE) {
                    if ($index_page === TRUE) {
                        $script .= ' src="'.$CI->config->site_url($v).'"';
                    } else {
                        $script .= ' src="'.$CI->config->slash_item('base_url').$v.'"';
                    }
                } else {
                    $script .= "$k=\"$v\"";
                }
            }
            
            $script .= "></script>\n";

        } else {
            if ( strpos($src, '://') !== FALSE) {
                $script .= ' src="'.$src.'" ';
            } elseif ($index_page === TRUE) {
                $script .= ' src="'.$CI->config->site_url($src).'" ';
            } else {
                $script .= ' src="'.$CI->config->slash_item('base_url').$src.'" ';
            }
                
            $script .= 'language="'.$language.'" type="'.$type.'"';
            $script .= '></script>'."\n";
        }

        return $script;

    }

}

/**
 * Load constant file
 * @param unknown_type $file
 * @autor @xrgranados
 * Date 03/05/2014
 */

if ( ! function_exists('load_file_constants')) {
	function load_file_constants($file) {
		include('./application/config/db_constants/' . $file . '.php');
	}
}


/**
 * Load assets on header
 * @param unknown_type $src
 * @autor @xrgranados
 * Date 03/05/2014
 */

if (!function_exists('load_css')) {

    function load_css($array_files) {

        $CI = &get_instance();

        if ($array_files) {
            foreach ($array_files as $key => $file) {
                echo link_tag($file);
            }
        }

    }

}

/* End of file cgl_base_helper.php */
/* Location: ./application/helpers/cgl_base_helper.php */