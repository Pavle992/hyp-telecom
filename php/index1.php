<?php 

include "Assistance.php";

function vrati_assistance($id){
		$con=new mysqli("localhost","root","","hyptelecom");
		if($con->connect_errno){
			echo "Connection error (".$con->connect_errno."): $con->connect_errno";
		}
		else{
				// $res je rezultat izvrsenja upita
	        $res = $con->query("select * from ASSISTANCE where id='$id'");
	        if ($res)
	        {
	            // fetch_assoc() pribavlja jedan po jedan red iz rezulata
	            // u redosledu u kom ga je vratio db server i pakuje vrednosti u
	            // niz objekata
	            $asstances=array();
	            while ($row = $res->fetch_assoc())
	            {
	            	// $indks=$row['indeks'];

	                $asstance = new ASSISTANCE($row['id'],
	                        $row['name'], $row['description'],$row['highlight_flag']);

	                $asstances[0]=$asstance;
	            }
	            // zatvaranje objekta koji cuva rezultat
	            $res->close();
	            // return $kaf;
	            if(empty($asstances))
	            	return null;
	            else
	            	return $asstances[0];
	        }
	        else
	        {
	            print ("Query failed ");
	        }
	    }
}

$assistance=vrati_assistance(5);

echo json_encode($assistance);

?>