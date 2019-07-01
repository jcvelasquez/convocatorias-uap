 <?php
    function asset_url($src)
    {
  		return base_url().'assets/'.$src;

  		//return 'http://convocatorias.uap.edu.pe/'.'assets/'.$src;
    }


	function formatDatepickerToMySql($date) {

        if ($date != FALSE) {
	        $dateArr = explode("/", $date);
	        $newDate = $dateArr[2] . '-' . $dateArr[1] . '-' . $dateArr[0];
	        return $newDate;
	    }

	    return FALSE;
	
	}

?>