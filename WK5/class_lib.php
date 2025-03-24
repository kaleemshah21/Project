<?php 

	//defines the person class
	class person {
		//property called name is defined
		var $name; 
		//method to set the name (setter)
		function set_name($new_name) { 
			$this->name = $new_name;  
 		}
		
		//method to get the name (getter)
   		function get_name() {
			return $this->name;
		}
	} 
?>