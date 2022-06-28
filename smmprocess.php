<?php 
include ('dbconnect.php');

//retrieve the data from form and session

$fsl=$_POST['fsl']; 
$fkp=$_POST['fkp'];
$fnm =$_POST['fnm'];
$ftal=$_POST['ftal'];
$ftel=$_POST['ftel'];
$fj=$_POST['fj'];
$fk=$_POST['fk'];
$fw=$_POST['fw'];
$fnea=$_POST['fnea'];
$fsek=$_POST['fsek'];
$fd=$_POST['fd'];
$fdsk=$_POST['fdsk'];
$fskn=$_POST['fskn'];
$fnk=$_POST['fnk'];
$fgk=$_POST['fgk'];

$faoa=$_POST['faoa'];
$fspk=$_POST['fspk'];
$fspbt=$_POST['fspbt'];
$fay=$_POST['fay'];
$fp=$_POST['fp'];
$fps=$_POST['fps'];
$fmknn=$_POST['fmknn'];
$fll=$_POST['fll'];
$fnyll=$_POST['fnyll'];
$fasr=$_POST['fasr'];
$fb=$_POST['fb'];
$fjb=$_POST['fjb'];
$fny=$_POST['fny'];


$fswa=$_POST['fswa'];
$fsmu=$_POST['fsmu'];
$fnwa=$_POST['fnwa'];
$fkpw=$_POST['fkpw'];
$falwa=$_POST['falwa'];
$fpos=$_POST['fpos'];
$fbndr=$_POST['fbndr'];
$fngri=$_POST['fngri'];
$fbtgn=$_POST['fbtgn'];
$fntel=$_POST['fntel'];
$famaj=$_POST['famaj'];
$fpenb=$_POST['fpenb'];
$fpekrjb=$_POST['fpekrjb'];
$fpeni=$_POST['fpeni'];
$fpekrji=$_POST['fpekrji'];
$fpenp=$_POST['fpenp'];
$fpekrjp=$_POST['fpekrjp'];
$fjump=$_POST['fjump'];
$fperkpit=$_POST['fperkpit'];

//insert new booking into table
$sql = "INSERT INTO tb_smmlama(sl,kp,nm,tal,tel,j,k,w,nea,sek,d,dsk,skn,nk,gk,aoa,spk,spbt,ay,p,ps,mknn,ll,nyll,asr,b,jb,ny,swa,smu,nwa,kpw,alwa,pos,bndr,ngri,btgn,ntel,amaj,penb,pekrjb,peni,pekrji,penp,pekrjp,jump,perkpit)
        VALUES ('$fsl','$fkp','$fnm','$ftal','$ftel','$fj','$fk','$fw','$fnea','$fsek','$fd','$fdsk','$fskn','$fnk','$fgk','$faoa','$fspk','$fspbt','$fay','$fp','$fps','$fmknn','$fll','$fnyll','$fasr','$fb','$fjb','$fny','$fswa','$fsmu','$fnwa','$fkpw','$falwa','$fpos','$fbndr','$fngri','$fbtgn','$fntel','$famaj','$fpenb','$fpekrjb','$fpeni','$fpekrji','$fpenp','$fpekrjp','$fjump','$fperkpit')";

//check sql output
//var_dump($sql);

// execute SQL
$result= mysqli_query($con,$sql);

// close
mysqli_close($con);

header('Location: borg.php?id='.$fsl);

?>