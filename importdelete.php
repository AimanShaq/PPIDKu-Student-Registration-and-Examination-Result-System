<?php 
    $deleterecords = "DELETE FROM tb_student WHERE studSchool='$schidassign' AND studYear='$tahun'" ;
    mysqli_query( $conn, $deleterecords );

    $deleterecords = "DELETE FROM tb_resultstud WHERE markSchool='$schidassign'AND markYear='$tahun'" ;
    mysqli_query( $conn, $deleterecords );

    $deleterecords = "DELETE FROM tb_placement WHERE plcSchool='$schidassign'AND plcYear='$tahun'" ;
    mysqli_query( $conn, $deleterecords );

    $deleterecords = "DELETE FROM tb_teacher WHERE tchSchool='$schidassign'" ;
    mysqli_query( $conn, $deleterecords );

    $deleterecords = "DELETE FROM tb_class WHERE classSchool='$schidassign'" ;
    mysqli_query( $conn, $deleterecords );

    /*
        $deleterecords = "DELETE FROM tb_student WHERE studSchool='$schidassign'" ;
    mysqli_query( $conn, $deleterecords );

    $deleterecords = "DELETE FROM tb_resultstud WHERE markSchool='$schidassign'" ;
    mysqli_query( $conn, $deleterecords );

    $deleterecords = "DELETE FROM tb_placement WHERE plcSchool='$schidassign'" ;
    mysqli_query( $conn, $deleterecords );

	*/
?>