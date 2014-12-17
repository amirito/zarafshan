<?php

class Contacts{
	
	public function addRow($tbl_name,$inputArray){
		$column = '';
		$values = '';
		 
		 foreach($inputArray as $key=>$value){
				 if(!next($inputArray) === false){
					 $column .='`'.$key.'` ,';
					 $values .='\''.$value.'\' ,';
				 }else{
					 $column .='`'.$key.'` ';
					 $values .='\''.$value.'\' ';
					 }
			 }
		 $query = "INSERT INTO `$tbl_name`( $column ) VALUES ( $values ) ; ";
		 return(DatabaseHandler::Execute($query));
		}
		
	public function deleteRow($tbl_name,$id){
			$query = "DELETE FROM `$tbl_name` WHERE id='$id' ; ";
			return(DatabaseHandler::Execute($query));
		}
	
	public function updateRow($tbl_name,$inputArray,$id){
		$update = '';
		 
		 foreach($inputArray as $key=>$value){
				 if(!next($inputArray) === false){
					 $update .= '`'.$key.'`'.' = '.'\' '.$value.'\' ,';
				 }else{
					$update .= '`'.$key.'`'.' = '.'\' '.$value.'\'';
					 }
			 }
		 $query = "UPDATE `$tbl_name` SET $update WHERE id = '$id' ; ";
		 return(DatabaseHandler::Execute($query));
		}

}

