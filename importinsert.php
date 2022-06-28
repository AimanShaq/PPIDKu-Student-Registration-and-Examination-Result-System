<?php
    try
    {
      $inputfiletype = PHPExcel_IOFactory::identify($inputfilename);
      $objReader = PHPExcel_IOFactory::createReader($inputfiletype);
      $objPHPExcel = $objReader->load($inputfilename);
    }
    catch(Exception $e)
    {
      die('Error loading file "'.pathinfo($inputfilename,PATHINFO_BASENAME).'": '.$e->getMessage());
    }

    $sheet = $objPHPExcel->getSheet(0);
    $highestRow = $sheet->getHighestRow();
    $highestColumn = $sheet->getHighestColumn();
    $count=0;
    
    ini_set('max_execution_time', 0); // 0 = Unlimited
    date_default_timezone_set('Asia/Singapore');
    $tahun=date('Y');
    $tarikh=date('Y-m-d');
             
      

      for($row1=3; $row1<=$highestRow; $row1++)
      {

      	$rowData = $sheet->rangeToArray('A' . $row1 . ':' . $highestColumn . $row1, NULL, TRUE, FALSE);

      	//insert to tb_student
      	
      	$sql = 'INSERT INTO tb_student (studIC, studName, studNameJawi, studSB, studGender, studStatus, studSchool, studYear)
              VALUES ("'.$rowData[0][9].'", "'.$rowData[0][7].'", "'.$rowData[0][51].'", "'.$rowData[0][8].'",  "'.$rowData[0][6].'", "1", "'.$schidassign.'","'.$tahun.'")';
              //$sqltrimic = 'UPDATE tb_student SET studIC = TRIM("'.$rowData[0][9].'")';

        //insert student std
        if ($rowData[0][2]=="")
        	$sqlstd = 'UPDATE tb_student SET studStd = "0" WHERE studIC="'.$rowData[0][9].'"';
        else
        	$sqlstd = 'UPDATE tb_student SET studStd = LEFT("'.$rowData[0][2].'",1) WHERE studIC="'.$rowData[0][9].'" AND studYear="'.$tahun.'"';


        //insert to tb_placement
        $sql0 = 'INSERT INTO tb_placement (plcStud, plcRoom, plcStd, plcClass, plcTime, plcAP, plcTeacher, plcYearResult, plcSchool, plcYear,plcDate)
              VALUES ("'.$rowData[0][9].'", "'.$rowData[0][61].'", "'.$rowData[0][67].'", "'.$rowData[0][72].'",  "'.$rowData[0][73].'",  "'.$rowData[0][74].'",  "'.$rowData[0][75].'",  "'.$rowData[0][63].'", "'.$schidassign.'","'.$tahun.'","'.$tarikh.'")';
              

       	$sqlcikgu = 'INSERT INTO tb_teacher(tchName,tchCode,tchSchool,tchYear)
       	SELECT "'.$rowData[0][75].'","'.$rowData[0][71].'","'.$schidassign.'","'.$tahun.'" FROM dual
   		WHERE NOT EXISTS (SELECT tchName FROM tb_teacher WHERE tchName="'.$rowData[0][75].'")';

   		$sqlkelas = 'INSERT INTO tb_class(classNo, className, classCode,classTeacher,classColor,classTime,classSchool,classYear)
   		SELECT "'.$rowData[0][61].'","'.$rowData[0][62].'","'.$rowData[0][68].'","'.$rowData[0][75].'","#00ffff","'.$rowData[0][73].'","'.$schidassign.'","'.$tahun.'" FROM dual
   		WHERE NOT EXISTS (SELECT classNo, className, classTeacher, classTime FROM tb_class 
   		WHERE classNo="'.$rowData[0][61].'" AND className="'.$rowData[0][62].'" AND classTeacher="'.$rowData[0][75].'" AND classTime="'.$rowData[0][73].'")';

        //insert to tb_resultstud
        
      	$sql00 = 'INSERT INTO tb_resultstud(markStud,markDate,markYear,markStd) VALUES ("'.$rowData[0][9].'","'.$tarikh.'","'.$tahun.'",LEFT("'.$rowData[0][2].'",1))';

      	//$sqllast1 = 'UPDATE tb_resultstud SET markDate="'.$tarikh.'" WHERE markStud="'.$rowData[0][9].'"';

      	//$sqllast2 = 'UPDATE tb_resultstud SET markYear="'.$tahun.'" WHERE markStud="'.$rowData[0][9].'"';

      	//$sqllast3 = 'UPDATE tb_resultstud SET markStd=LEFT("'.$rowData[0][2].'",1) WHERE markStud="'.$rowData[0][9].'"';

      	//$sqllast = 'UPDATE tb_school SET schDate="'.$tarikh.'" WHERE schID="'.$schidassign.'"';

        if ($rowData[0][10] == "")
          $sql1 = 'UPDATE tb_resultstud SET markAfaal ="0" WHERE markStud="'.$rowData[0][9].'"';
        else
          $sql1 = 'UPDATE tb_resultstud SET markAfaal ="'.$rowData[0][10].'" WHERE markStud="'.$rowData[0][9].'"';

        if ($rowData[0][12] == "")
          $sql2 = 'UPDATE tb_resultstud SET markAqwal = "0" WHERE markStud="'.$rowData[0][9].'"';
        else
          $sql2 = 'UPDATE tb_resultstud SET  markAqwal="'.$rowData[0][12].'" WHERE markStud="'.$rowData[0][9].'"';

        if ($rowData[0][14] == "")
          $sql3 = 'UPDATE tb_resultstud SET markBacaan ="0"WHERE markStud="'.$rowData[0][9].'"';
        else
          $sql3 = 'UPDATE tb_resultstud SET markBacaan ="'.$rowData[0][14].'"WHERE markStud="'.$rowData[0][9].'"';

        if ($rowData[0][16] == "")
          $sql4 = 'UPDATE tb_resultstud SET markHafazan="0"WHERE markStud="'.$rowData[0][9].'"';
        else
          $sql4 = 'UPDATE tb_resultstud SET markHafazan="'.$rowData[0][16].'"WHERE markStud="'.$rowData[0][9].'"';

        if ($rowData[0][18] == "")
          $sql5 = 'UPDATE tb_resultstud SET markAlquran ="0"WHERE markStud="'.$rowData[0][9].'"';
        else
          $sql5 = 'UPDATE tb_resultstud SET markAlquran="'.$rowData[0][18].'"WHERE markStud="'.$rowData[0][9].'"';

        if ($rowData[0][20] == "")
          $sql6 = 'UPDATE tb_resultstud SET markTauhid="0"WHERE markStud="'.$rowData[0][9].'"';
        else
          $sql6 = 'UPDATE tb_resultstud SET markTauhid="'.$rowData[0][20].'"WHERE markStud="'.$rowData[0][9].'"';

        if ($rowData[0][22] == "")
          $sql7 = 'UPDATE tb_resultstud SET markIbadat="0" WHERE markStud="'.$rowData[0][9].'"';
        else
          $sql7 = 'UPDATE tb_resultstud SET markIbadat="'.$rowData[0][22].'" WHERE markStud="'.$rowData[0][9].'"';

        if ($rowData[0][24] == "")
          $sql8 = 'UPDATE tb_resultstud SET markAkhlak="0"WHERE markStud="'.$rowData[0][9].'"';
        else
          $sql8 = 'UPDATE tb_resultstud SET markAkhlak ="'.$rowData[0][24].'"WHERE markStud="'.$rowData[0][9].'"';

        if ($rowData[0][26] == "")
          $sql9 = 'UPDATE tb_resultstud SET  markSirah="0"WHERE markStud="'.$rowData[0][9].'"';
        else
          $sql9 = 'UPDATE tb_resultstud SET markSirah="'.$rowData[0][26].'"WHERE markStud="'.$rowData[0][9].'"';

        if ($rowData[0][28] == "")
          $sql10 = 'UPDATE tb_resultstud SET markArab="0"WHERE markStud="'.$rowData[0][9].'"';
        else
          $sql10 = 'UPDATE tb_resultstud SET markArab="'.$rowData[0][28].'"WHERE markStud="'.$rowData[0][9].'"';

        if ($rowData[0][30] == "")
          $sql11 = 'UPDATE tb_resultstud SET markJawi="0"WHERE markStud="'.$rowData[0][9].'"';
        else
          $sql11 = 'UPDATE tb_resultstud SET markJawi="'.$rowData[0][30].'"WHERE markStud="'.$rowData[0][9].'"';

        if ($rowData[0][32] == "")
          $sql12 = 'UPDATE tb_resultstud SET markTajwid="0"WHERE markStud="'.$rowData[0][9].'"';
        else
          $sql12 = 'UPDATE tb_resultstud SET markTajwid="'.$rowData[0][32].'"WHERE markStud="'.$rowData[0][9].'"';

        if ($rowData[0][34] == "")
          $sql13 = 'UPDATE tb_resultstud SET markTafsir="0"WHERE markStud="'.$rowData[0][9].'"';
        else
          $sql13 = 'UPDATE tb_resultstud SET markTafsir="'.$rowData[0][34].'"WHERE markStud="'.$rowData[0][9].'"';

        if ($rowData[0][36] == "")
          $sql14 = 'UPDATE tb_resultstud SET markIbadat2="0"WHERE markStud="'.$rowData[0][9].'"';
        else
          $sql14 = 'UPDATE tb_resultstud SET markIbadat2="'.$rowData[0][36].'"WHERE markStud="'.$rowData[0][9].'"';

        if ($rowData[0][38] == "")
          $sql15 = 'UPDATE tb_resultstud SET markMuamalat ="0"WHERE markStud="'.$rowData[0][9].'"';
        else
          $sql15= 'UPDATE tb_resultstud SET markMuamalat="'.$rowData[0][38].'"WHERE markStud="'.$rowData[0][9].'"';

        if ($rowData[0][40] == "")
          $sql16 = 'UPDATE tb_resultstud SET markMunakahat="0"WHERE markStud="'.$rowData[0][9].'"';
        else
          $sql16 = 'UPDATE tb_resultstud SET markMunakahat="'.$rowData[0][40].'"WHERE markStud="'.$rowData[0][9].'"';

        if ($rowData[0][42] == "")
          $sql17 = 'UPDATE tb_resultstud SET markJenayat="0"WHERE markStud="'.$rowData[0][9].'"';
        else
          $sql17= 'UPDATE tb_resultstud SET markJenayat="'.$rowData[0][42].'"WHERE markStud="'.$rowData[0][9].'"';

        if ($rowData[0][44] == "")
          $sql18= 'UPDATE tb_resultstud SET markFaraid="0"WHERE markStud="'.$rowData[0][9].'"';
        else
          $sql18= 'UPDATE tb_resultstud SET markFaraid="'.$rowData[0][44].'"WHERE markStud="'.$rowData[0][9].'"';

        if ($rowData[0][46] == "")
          $sql19= 'UPDATE tb_resultstud SET markJumlah="0"WHERE markStud="'.$rowData[0][9].'"';
        else
          $sql19= 'UPDATE tb_resultstud SET markJumlah="'.$rowData[0][46].'"WHERE markStud="'.$rowData[0][9].'"';

        if ($rowData[0][47] == "")
          $sql20= 'UPDATE tb_resultstud SET markRankClass="0"WHERE markStud="'.$rowData[0][9].'"';
        else
          $sql20= 'UPDATE tb_resultstud SET markRankClass="'.$rowData[0][47].'"WHERE markStud="'.$rowData[0][9].'"';

        if ($rowData[0][48] == "")
          $sql21= 'UPDATE tb_resultstud SET markPercent="0"WHERE markStud="'.$rowData[0][9].'"';
        else
          $sql21= 'UPDATE tb_resultstud SET markPercent="'.$rowData[0][48].'"WHERE markStud="'.$rowData[0][9].'"';

        if ($rowData[0][49] == "")
          $sql22= 'UPDATE tb_resultstud SET markGred= "0"WHERE markStud="'.$rowData[0][9].'"';
        else
          $sql22= 'UPDATE tb_resultstud SET markGred= "'.$rowData[0][49].'"WHERE markStud="'.$rowData[0][9].'"';

        if ($rowData[0][50] == "")
          $sql23= 'UPDATE tb_resultstud SET markKeputusan = "0"WHERE markStud="'.$rowData[0][9].'"';
        else
          $sql23= 'UPDATE tb_resultstud SET markKeputusan = "'.$rowData[0][50].'"WHERE markStud="'.$rowData[0][9].'"';
      	$sql24= 'UPDATE tb_resultstud SET markSchool="'.$schidassign.'" WHERE markStud="'.$rowData[0][9].'"';

      	/*if (mysqli_query($conn, $sqllast)) {
	      $exceldata[] = $rowData[0];
	      }else{
	      echo "<br>Error sqllast: " . $sqllast . "<br>" . mysqli_error($conn);
	      }

	      if (mysqli_query($conn, $sqllast1)) {
	      $exceldata[] = $rowData[0];
	      }else{
	      echo "<br>Error sqllast1: " . $sqllast1 . "<br>" . mysqli_error($conn);
	      }

		  if (mysqli_query($conn, $sqllast2)) {
	      $exceldata[] = $rowData[0];
	      }else{
	      echo "<br>Error sqllast2: " . $sqllast2 . "<br>" . mysqli_error($conn);
	      }
	      if (mysqli_query($conn, $sqllast3)) {
	      $exceldata[] = $rowData[0];
	      }else{
	      echo "<br>Error sqllast3: " . $sqllast3 . "<br>" . mysqli_error($conn);
	      }*/

      	  if (mysqli_query($conn, $sqlcikgu)) {
	      $exceldata[] = $rowData[0];
	      }else{
	      echo "<br>Error sqlcikgu: " . $sqlcikgu . "<br>" . mysqli_error($conn);
	      }

      	  if (mysqli_query($conn, $sql)) {
	      $exceldata[] = $rowData[0];
	      }else{
	      echo "<br>Error sql: " . $sql . "<br>" . mysqli_error($conn);
	      }

	      if (mysqli_query($conn, $sqlstd)) {
	      $exceldata[] = $rowData[0];
	      }else{
	      echo "<br>Error sqlstd: " . $sqlstd . "<br>" . mysqli_error($conn);
	      }

	      if (mysqli_query($conn, $sql0)) {
	      $exceldata[] = $rowData[0];
	      }else{
	      echo "<br>Error sql0: " . $sql . "<br>" . mysqli_error($conn);
	      }

      	if (mysqli_query($conn, $sql00)) {
	      $exceldata[] = $rowData[0];
	      }else{
	      echo "<br>Error sql00: " . $sql00 . "<br>" . mysqli_error($conn);
	      }

      	if (mysqli_query($conn, $sql1)) {
	      $exceldata[] = $rowData[0];
	      }else{
	      echo "<br>Error sql1: " . $sql1 . "<br>" . mysqli_error($conn);
	      }
	      
	      if (mysqli_query($conn, $sql2)) {
	      $exceldata[] = $rowData[0];
	      }else{
	      echo "<br>Error sql2: " . $sql2 . "<br>" . mysqli_error($conn);
	      }
	      
	      if (mysqli_query($conn, $sql3)) {
	      $exceldata[] = $rowData[0];
	      }else{
	      echo "<br>Error sql3: " . $sql3 . "<br>" . mysqli_error($conn);
	      }
	      
	      if (mysqli_query($conn, $sql4)) {
	      $exceldata[] = $rowData[0];
	      }else{
	      echo "<br>Error sql4: " . $sql4 . "<br>" . mysqli_error($conn);
	      }
	      
	      if (mysqli_query($conn, $sql5)) {
	      $exceldata[] = $rowData[0];
	      }else{
	      echo "<br>Error sql5: " . $sql5 . "<br>" . mysqli_error($conn);
	      }
	      
	      if (mysqli_query($conn, $sql6)) {
	      $exceldata[] = $rowData[0];
	      }else{
	      echo "<br>Error sql6: " . $sql6 . "<br>" . mysqli_error($conn);
	      }

	      if (mysqli_query($conn, $sql7)) {
	      $exceldata[] = $rowData[0];
	      }else{
	      echo "<br>Error sql7: " . $sql7 . "<br>" . mysqli_error($conn);
	      }

	      if (mysqli_query($conn, $sql8)) {
	      $exceldata[] = $rowData[0];
	      }else{
	      echo "<br>Error sql8: " . $sql8 . "<br>" . mysqli_error($conn);
	      }

	      if (mysqli_query($conn, $sql9)) {
	      $exceldata[] = $rowData[0];
	      }else{
	      echo "<br>Error sql9: " . $sql9 . "<br>" . mysqli_error($conn);
	      }

	      if (mysqli_query($conn, $sql10)) {
	      $exceldata[] = $rowData[0];
	      }else{
	      echo "<br>Error sql10: " . $sql10 . "<br>" . mysqli_error($conn);
	      }


	      if (mysqli_query($conn, $sql11)) {
	      $exceldata[] = $rowData[0];
	      }else{
	      echo "<br>Error sql11: " . $sql11 . "<br>" . mysqli_error($conn);
	      }
	      
	      if (mysqli_query($conn, $sql12)) {
	      $exceldata[] = $rowData[0];
	      }else{
	      echo "<br>Error sql12: " . $sql12 . "<br>" . mysqli_error($conn);
	      }
	      
	      if (mysqli_query($conn, $sql13)) {
	      $exceldata[] = $rowData[0];
	      }else{
	      echo "<br>Error sql13: " . $sql13 . "<br>" . mysqli_error($conn);
	      }
	      
	      if (mysqli_query($conn, $sql14)) {
	      $exceldata[] = $rowData[0];
	      }else{
	      echo "<br>Error sql14: " . $sql14 . "<br>" . mysqli_error($conn);
	      }
	      
	      if (mysqli_query($conn, $sql15)) {
	      $exceldata[] = $rowData[0];
	      }else{
	      echo "<br>Error sql15: " . $sql15 . "<br>" . mysqli_error($conn);
	      }
	      
	      if (mysqli_query($conn, $sql16)) {
	      $exceldata[] = $rowData[0];
	      }else{
	      echo "<br>Error sql16: " . $sql16 . "<br>" . mysqli_error($conn);
	      }

	      if (mysqli_query($conn, $sql17)) {
	      $exceldata[] = $rowData[0];
	      }else{
	      echo "<br>Error sql17: " . $sql17 . "<br>" . mysqli_error($conn);
	      }

	      if (mysqli_query($conn, $sql18)) {
	      $exceldata[] = $rowData[0];
	      }else{
	      echo "<br>Error sql18: " . $sql18 . "<br>" . mysqli_error($conn);
	      }

	      if (mysqli_query($conn, $sql19)) {
	      $exceldata[] = $rowData[0];
	      }else{
	      echo "<br>Error sql19: " . $sql19 . "<br>" . mysqli_error($conn);
	      }

	      if (mysqli_query($conn, $sql20)) {
	      $exceldata[] = $rowData[0];
	      }else{
	      echo "<br>Error sql20: " . $sql20 . "<br>" . mysqli_error($conn);
	      }

	      if (mysqli_query($conn, $sql21)) {
	      $exceldata[] = $rowData[0];
	      }else{
	      echo "<br>Error sql21: " . $sql21 . "<br>" . mysqli_error($conn);
	      }
	      
	      if (mysqli_query($conn, $sql22)) {
	      $exceldata[] = $rowData[0];
	      }else{
	      echo "<br>Error sql22: " . $sql22 . "<br>" . mysqli_error($conn);
	      }
	      
	      if (mysqli_query($conn, $sql23)) {
	      $exceldata[] = $rowData[0];
	      }else{
	      echo "<br>Error sql23: " . $sql23 . "<br>" . mysqli_error($conn);
	  		}

	      if (mysqli_query($conn, $sql24)) {
	      $exceldata[] = $rowData[0];
	      }else{
	      echo "<br>Error sql24: " . $sql24 . "<br>" . mysqli_error($conn);
	      }
      
   		  if (mysqli_query($conn, $sqlcikgu)) {
	      $exceldata[] = $rowData[0];
	      }else{
	      echo "<br>Error sqlcikgu: " . $sqlcikgu . "<br>" . mysqli_error($conn);
	      }
	      if (mysqli_query($conn, $sqlkelas)) {
	      $exceldata[] = $rowData[0];
	      }else{
	      echo "<br>Error sqlkelas: " . $sqlkelas . "<br>" . mysqli_error($conn);
	      }
  	}
?>