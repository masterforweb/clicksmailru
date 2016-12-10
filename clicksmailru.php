<?php

 class clicksmail {

 
 	function __construct($id) {
 		$this->id = $id	
 	}

 	function find($find, $period=2) {

    	$url = 'https://top.mail.ru/json/pages?id='.$this->id.'&period='.$period.'&date=&pp=20&filter_type=0&filter='.$find;
    	$value = file_get_contents($url, false, $ctx);
    	if ($value !== FALSE) {
    		$data = json_decode($value, True);
    	   	if (isset($data['total']))
    		  $total += $data['total'];
    	} 
	
    	return (int)$total;

	}
	

}	