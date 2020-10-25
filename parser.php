<?php
/**
Febrian Ardi Pangestu
https://mujur.id
https://www.facebook.com/MujurdotID
https://instagram.com/idradiation
**/
echo "RAW QRIS= \n";
$qris_ori = trim(fgets(STDIN));

$panjang_qris_ori_untuk_statis = strlen($qris_ori);
$qris_untuk_statis = $qris_ori;

while (1){
	$start = substr($qris_untuk_statis,0,2);
	if ($start>="00" AND $start<="63"){
		$objek_["$start"] = $start;
		$panjang_objek_["$start"] = substr($qris_untuk_statis,2,2);
		$nilai_objek_["$start"] = substr($qris_untuk_statis,4,$panjang_objek_["$start"]);
		
		$panjang_qris_sisa_mulai = 4 + $panjang_objek_["$start"];
		$panjang_qris_sisa_akhir = $panjang_qris_ori_untuk_statis - $panjang_qris_sisa_mulai;

		$qris_untuk_statis = substr($qris_untuk_statis,$panjang_qris_sisa_mulai,$panjang_qris_sisa_akhir);
		
		echo "objek_$start= ".$objek_["$start"].$panjang_objek_["$start"].$nilai_objek_["$start"]."\n";
	}	
	else{
		break;
	}
}

exit();
?>
