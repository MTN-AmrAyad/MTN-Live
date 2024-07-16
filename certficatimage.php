<?php 

        require_once 'model/userData.php';
            $certificate_name= $_GET['name'];
            $courseid = $_GET['courseid'];

        

        if($courseid==6){

            header('content-type:image/jpeg');
            $font="view/font/bernhardmodernbt.TTF";
            $image=imagecreatefromjpeg("view/imgs/cretifcat/EBT1.jpeg");
            $color=imagecolorallocate($image,19,21,22);
            imagettftext($image,35,0,300,730,$color,$font,$certificate_name);
            imagepng($image);
            imagedestroy($image);
                        
        }
          elseif($courseid==7){

            header('content-type:image/jpeg');
            $font="view/font/bernhardmodernbt.TTF";
            $image=imagecreatefromjpeg("view/imgs/cretifcat/EBT2.jpeg");
            $color=imagecolorallocate($image,19,21,22);
            imagettftext($image,35,0,300,730,$color,$font,$certificate_name);
            imagepng($image);
            imagedestroy($image);
                        
        }  elseif($courseid==10){

            header('content-type:image/jpeg');
            $font="view/font/bernhardmodernbt.TTF";
            $image=imagecreatefromjpeg("view/imgs/cretifcat/ctrlorganic.jpeg");
            $color=imagecolorallocate($image,19,21,22);
            imagettftext($image,35,0,300,730,$color,$font,$certificate_name);
            imagepng($image);
            imagedestroy($image);
                        
        }elseif($courseid==1){

            header('content-type:image/jpeg');
            $font="view/font/bernhardmodernbt.TTF";
            $image=imagecreatefromjpeg("view/imgs/cretifcat/BrainCTscan.jpeg");
            $color=imagecolorallocate($image,19,21,22);
            imagettftext($image,35,0,300,730,$color,$font,$certificate_name);
            imagepng($image);

            // imagejpeg($image);
            imagedestroy($image);
                        
        }elseif($courseid==19){

            header('content-type:image/jpeg');
            $font="view/font/bernhardmodernbt.TTF";
            $image=imagecreatefromjpeg("view/imgs/cretifcat/ctrlanatomical.jpeg");
            $color=imagecolorallocate($image,19,21,22);
            imagettftext($image,35,0,300,730,$color,$font,$certificate_name);
            imagepng($image);
            imagedestroy($image);
                        
        }elseif($courseid==8){

            header('content-type:image/jpeg');
            $font="view/font/bernhardmodernbt.TTF";
            $image=imagecreatefromjpeg("view/imgs/cretifcat/adamandeve.jpeg");
            $color=imagecolorallocate($image,19,21,22);
            imagettftext($image,35,0,300,730,$color,$font,$certificate_name);
            imagepng($image);
            imagedestroy($image);
                        
        }
        elseif($courseid==18){

            header('content-type:image/jpeg');
            $font="view/font/bernhardmodernbt.TTF";
            $image=imagecreatefromjpeg("view/imgs/cretifcat/ctrlphyscoo.jpeg");
            $color=imagecolorallocate($image,19,21,22);
            imagettftext($image,35,0,300,730,$color,$font,$certificate_name);
            imagepng($image);
            imagedestroy($image);
                        
        }
         elseif($courseid==9){

            header('content-type:image/jpeg');
            $font="view/font/bernhardmodernbt.TTF";
            $image=imagecreatefromjpeg("view/imgs/cretifcat/Adam & eve marriage.jpeg");
            $color=imagecolorallocate($image,19,21,22);
            imagettftext($image,35,0,300,730,$color,$font,$certificate_name);
            imagepng($image);
            imagedestroy($image);
                        
        }
         elseif($courseid==2){

            header('content-type:image/jpeg');
            $font="view/font/bernhardmodernbt.TTF";
            $image=imagecreatefromjpeg("view/imgs/cretifcat/Communication-Between-Male-and-Female.jpeg");
            $color=imagecolorallocate($image,19,21,22);
            imagettftext($image,35,0,300,730,$color,$font,$certificate_name);
            imagepng($image);
            imagedestroy($image);
                        
        }  elseif($courseid==12){

            header('content-type:image/jpeg');
            $font="view/font/bernhardmodernbt.TTF";
            $image=imagecreatefromjpeg("view/imgs/cretifcat/Lüschertemplate.jpeg");
            $color=imagecolorallocate($image,19,21,22);
            imagettftext($image,35,0,300,730,$color,$font,$certificate_name);
            imagepng($image);
            imagedestroy($image);
                        
        }
        elseif($courseid==15){

            header('content-type:image/jpeg');
            $font="view/font/bernhardmodernbt.TTF";
            $image=imagecreatefromjpeg("view/imgs/cretifcat/EBTAdvanced.jpeg");
            $color=imagecolorallocate($image,19,21,22);
            imagettftext($image,35,0,300,730,$color,$font,$certificate_name);
            imagepng($image);
            imagedestroy($image);
                        
        }
        
        //CPC
        elseif($courseid==13){

            header('content-type:image/jpeg');
            $font="view/font/bernhardmodernbt.TTF";
            $image=imagecreatefromjpeg("view/imgs/cretifcat/CPC.jpeg");
            $color=imagecolorallocate($image,19,21,22);
            imagettftext($image,35,0,300,730,$color,$font,$certificate_name);
            imagepng($image);
            imagedestroy($image);
                        
        }
        
        


  
?>
