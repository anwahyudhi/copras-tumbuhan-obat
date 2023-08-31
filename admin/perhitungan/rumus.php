<?php 
//per penyakit
$total = 0;
$total1 = "SELECT * FROM tumbuhan_obat";
foreach ($dbh -> query($total1) as $totalan) {
	$total++;

}


//Diare
$diare1 = 0;
$diare2 = 0;
$diare3 = 0;
$diare4 = 0;
//--------
$diare5 = 0;
$diare6 = 0;
$diare7 = 0;
$diare8 = 0;
$diare9 = 0;
//-------
$diare11 = 0;
$diare12 = 0;
$diare13 = 0;
$diare14 = 0;
$diare15 = 0;
$diare16 = 0;
$diare17 = 0;
$diare18 = 0;
$diare19 = 0;
$diare20 = 0;
$diare21 = 0;

//------

$diare22 = 0;
$diare23 = 0;
$diare24 = 0;
$diare25 = 0;
$diare26 = 0;
//ahp

$ahp1 = "SELECT * FROM tumbuhan_obat";
foreach ($dbh->query($ahp1) as $data) :
	
	if ($data['cara_pengolahan'] == "Langsung") {
		$diare1++;
		
	}elseif ($data['cara_pengolahan'] == "Dihaluskan") {
		$diare2++;
		
	}elseif ($data['cara_pengolahan'] == "Direbus") {
		$diare3++;
		
	}


	if ($data['cara_penggunaan'] == "Diminum" ) {
		$diare5++;
		
	}elseif ($data['cara_penggunaan'] == "Dimakan") {
		$diare6++;
		
	}elseif ($data['cara_penggunaan'] == "Dioles") {
		$diare7++;
		
	}elseif ($data['cara_penggunaan'] == "Dikumur") {
		$diare8++;
		
	}


	if ($data['bagian_tumbuhan'] == "Akar" ) {
		$diare11++;

	}elseif ($data['bagian_tumbuhan'] == "Umbi") {
		$diare12++;

		
	}elseif ($data['bagian_tumbuhan'] == "Semua") {
		$diare13++;

		
	}elseif ($data['bagian_tumbuhan'] == "Kulit Buah") {
		$diare14++;

		
	}elseif ($data['bagian_tumbuhan'] == "Kulit Batang") {
		$diare15++;

		
	}elseif ($data['bagian_tumbuhan'] == "Daun") {
		$diare16++;

		
	}elseif ($data['bagian_tumbuhan'] == "Batang") {
		$diare17++;

		
	}elseif ($data['bagian_tumbuhan'] == "Getah") {
		$diare18++;

		
	}elseif ($data['bagian_tumbuhan'] == "Bunga") {
		$diare19++;

		
	}elseif ($data['bagian_tumbuhan'] == "Biji") {
		$diare20++;

		
	}elseif ($data['bagian_tumbuhan'] == "Buah") {
		$diare21++;
		
	}	


	if ($data['jenis_tumbuhan'] == "Pohon") {
		$diare22++;
	}elseif ($data['jenis_tumbuhan'] == "Liana") {
		$diare23++;
	}
	elseif ($data['jenis_tumbuhan'] == "Herba") {
		$diare24++;
	}
	elseif ($data['jenis_tumbuhan'] == "Perdu") {
		$diare25++;
	}
	elseif ($data['jenis_tumbuhan'] == "Semak") {
		$diare26++;
	}


endforeach;

	$ahp1 = array();
    $ahp2 = array();
    $ahp3 = array();
    $ahp4 = array();
    $tahp = array();
                            
    //bobot default
    $total1 = "SELECT * FROM bobot where id=1";
    foreach ($dbh -> query($total1) as $totalan) :
                            
    $ahp1[0] = $totalan['a11'];
    $ahp1[1] = $totalan['a12'];
    $ahp1[2] = $totalan['a13'];
    $ahp1[3] = $totalan['a14'];

    $ahp2[0] = $totalan['a21'];
    $ahp2[1] = $totalan['a22'];
    $ahp2[2] = $totalan['a23'];
    $ahp2[3] = $totalan['a24'];

    $ahp3[0] = $totalan['a31'];
    $ahp3[1] = $totalan['a32'];
    $ahp3[2] = $totalan['a33'];
    $ahp3[3] = $totalan['a34'];

    $ahp4[0] = $totalan['a41'];
    $ahp4[1] = $totalan['a42'];
    $ahp4[2] = $totalan['a43'];
    $ahp4[3] = $totalan['a44'];

    $tahp[0] = $ahp1[0]+$ahp2[0]+$ahp3[0]+$ahp4[0];
    $tahp[1] = $ahp1[1]+$ahp2[1]+$ahp3[1]+$ahp4[1];
    $tahp[2] = $ahp1[2]+$ahp2[2]+$ahp3[2]+$ahp4[2];
    $tahp[3] = $ahp1[3]+$ahp2[3]+$ahp3[3]+$ahp4[3];



endforeach;


 ?>