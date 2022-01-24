<?php 
    $img=$_FILES['img'];
    $imgName=$img['name'];
    $imtType=$img['type'];
    $imtTmpName=$img['tmp_name'];
    $imgError=$img['error'];
    $imgSize=$img['size'];
    //move_uploaded_file($imtTmpName,"assets/uploads/user/$imgName");
$f=explode('.',$imgName);
$fileExt=strtolower($f[1]);

$allowedExt=array('jpg','jpeg','png');
if(in_array($fileExt,$allowedExt)){
    if($imgSize<200000000000){
        move_uploaded_file($imgTmgName, "assets/uploads/user/$imgName");
        header('Location:index.php?sucess=true');

    }else{
        echo "File size exceeded";
    }


}else{
    echo "File Type Not supported";
}

?>            