<?php


$iddir = 'cards';
$idtem = (int) ucwords($_POST['idno']) ;

$idnumber = substr($idtem,0,1).' '.substr($idtem,1,4).' '.substr($idtem,5,5).' '.substr($idtem,10,2).' '.substr($idtem,12,1);
$title;
$titleEN;
switch (ucwords($_POST['title'])) {
	case "1":
		$title = 'นาย';
		$titleEN = 'Mr.';
	  break;
	  case "2":
		$title = 'นาง';
		$titleEN = 'Miss.';
	  break;
	  case "3":
		$title = 'นางสาว';
		$titleEN = 'Ms.';
	  break;
  }
$firstname = ucwords($_POST['firstname']); // Participant Name
$lastname = ucwords($_POST['lastname']); // Participant Name
$firstnameEN = ucwords($_POST['firstnameEN']); // Participant Name
$lastnameEN = ucwords($_POST['lastnameEN']); // Participant Name
$idbelow = ucwords($_POST['idbelow']); // Participant Name
// $text = ucwords($_POST['firstname']); // Participant Name

$profileimage = 'img/43806.jpg';   // QT Code Image
$font_size = 13;               // Font size is in pixels.
$font_file = 'img/fb.otf';         // path to your font file
$img = 'final.png';            // path to temporary image
$birthtmp = $_POST['dateinput'];
$thaimonth = ["", "ม.ค.", "ก.พ.", "มี.ค.", "เม.ย.", "พ.ค.", "มิ.ย.", "ก.ค.", "ส.ค.", "ก.ย.", "ต.ค.", "พ.ย.","ธ.ค."];
$engmonth = ['', 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
$birthday = (int)substr($birthtmp,8,2).' '.$thaimonth[(int)substr($birthtmp,5,2)].' '.((int)substr($birthtmp,0,4)+543);
$birthdayEN = (int)substr($birthtmp,8,2).' '.$engmonth[(int)substr($birthtmp,5,2)].' '.substr($birthtmp,0,4); 
list($monthofdate, $dayofdate, $yearofdate) = explode(' ', $birthday);
// $age = date("Y") - $yearofdate ;

// path & name of the image to save on server
$img2 = $iddir.'/'.strtolower(preg_replace('#[^0-9a-zA-z]#','',$idnumber)).'.png'; 

//creates 'cards' folder if not exists
if(!file_exists($iddir)){
	mkdir($iddir, 0777, true);
}

$backgroundimage = imagecreatefrompng('img/id.png');// Load the stamp and the photo to apply the watermark to
// $profilestamp = imagecreatefromjpeg('tmp.jpg'); // First we create our stamp image manually from GD

// Set the margins for the stamp and get the height/width of the stamp image
$marge_right = 307;
$marge_bottom = 44;


// Save the image to file and free memory
imagepng($backgroundimage, 'final.png');
imagedestroy($backgroundimage);

$im = imagecreatefrompng($img); // get the image in php
$textcolor = imagecolorallocate($im, 0, 0, 0); // text color
$textcolor2 = imagecolorallocate($im, 37, 34, 102); // text color

// Get image Width and Height of Temporary Image
$image_width = imagesx($im);  
$image_height = imagesy($im);

imagettftext($im, 22, 0, 210, 48, $textcolor, $font_file, $idnumber); // Add ID Number to image:
imagettftext($im, 24, 0, 139, 75, $textcolor, $font_file, $title.' '.$firstname.' '.$lastname); // Add Name to image:
imagettftext($im, 18, 0, 190, 93, $textcolor2, $font_file, $titleEN.' '.$firstnameEN); // Add Name to image:
imagettftext($im, 18, 0, 215, 110, $textcolor2, $font_file, $lastnameEN); // Add Name to image:

imagettftext($im, 14, 0, 160, 130, $textcolor, $font_file, 'เกิดวันที่'); 
imagettftext($im, 18, 0, 208, 130, $textcolor, $font_file, $birthday); 
imagettftext($im, 14, 0, 160, 150, $textcolor2, $font_file, 'Date of Birth'); 
imagettftext($im, 18, 0, 232, 150, $textcolor2, $font_file, $birthdayEN); 
imagettftext($im, 14, 0, 352, 248, $textcolor, $font_file, $idbelow); 

// imagettftext($im, 20, 0, 300, 212, $textcolor, $font_file, date('F j, Y')); // Add Date Issued to image:

imagepng($im, $img2, 9); // save the image on server
imagedestroy($im); // Destroy image in memory to free-up resources:

unlink('final.png');//Remove Temporary Background Image
// unlink('tmp.jpg');//Remove Temporary Profile Image
?>