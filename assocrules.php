<?php
include 'koneksi.php';
	$item = file ('item.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
	$belian = file ('belian.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
	$item_array = array();
	
	foreach ($item as $value) {
		$total_per_item[$value] = 0;
		foreach ($belian as $item_belian ) {
			if(strpos($item_belian, $value) !== False){
				$total_per_item[$value]++;
				
			}
		}
	}
		echo "<pre>";
	echo "\r\n ITEM BARANG \r\n";
	print_r($item); 
	echo "\r\n PEMBELIAN BARANG \r\n";
	print_r($belian);
	
	echo "<pre>";
	echo "\r\nStep 1 :jumlah Mengikuti Item \r \n";
	print_r($total_per_item);
	
	$item1 = count($item)-1;
	$item2 = count($item);

	for($i = 0 ; $i <$item1 ; $i++){
		for( $j=$i+1 ; $j <$item2 ; $j++){
			$item_array[$item[$i].'-'.$item[$j]] = 0;
			
			foreach ($belian as $item_belian) {
					if((strpos($item_belian, $item[$i]) !== false) && (strpos($item_belian, $item[$j]) !== false)){
						$item_array[$item[$i].'-'.$item[$j]]++;
					}
				}
			}	
		}


	echo "<pre>";
	echo "\r\nStep 2 : Jumlah Gabungan Item \r \n";
	print_r($item_array);
	
	$item3 = count ($total_per_item);
	
	echo "\r\nStep 3 : Nilai Support \r\n";
	foreach ($item_array as $ia_key => $ia_value) {
			
		echo "[+] $ia_key($ia_value) --> $item3 =>".$ia_value /$item3 ."\r\n";
		list ($itemx, $itemy) = explode ('-',$ia_key);
				if ($itemx == $item3){
					$theitem = $itemy;
				}
				else{$theitem = $itemx;
				}
	echo "	".round($ia_value / $item3 *100 , 2)."%\r\n\r\n";
		
			
		}

	echo "\r\nStep 4 : Nilai Confindence \r \n";
	foreach ($item_array as $ia_key => $ia_value) {
		foreach ($total_per_item as $tpi_key => $tpi_value) {
			if((strpos($ia_key, $tpi_key) !== false)) {
		echo "[+] $ia_key($ia_value) --> $tpi_key($tpi_value) =>".$ia_value /$tpi_value ."\r\n";
		list ($itemx, $itemy) = explode ('-',$ia_key);
				if ($itemx == $tpi_key){
					$theitem = $itemy;
				}
				else{$theitem = $itemx;
				}
	echo "	".round($ia_value / $tpi_value *100 , 2)."% yang membeli $tpi_key juga membeli $theitem \r\n\r\n";
			}		
		}
	}
	

echo "<a href = index.php ><center> TABEL BARANG </center></a>";
	echo "</pre>";exit(); 
	
	?>


	