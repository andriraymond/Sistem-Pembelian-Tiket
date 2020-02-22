<?php 
// to read a POST parameter sent by form use the $_POST global array. 
// the index of the $_POST is the name of the HTML element we want to read. 

// the above line reads the value in the HTML element named 'full_name'. 
 
// let's print the value of $full_name variable using echo() function. 

//get nama
$full_name = $_POST['full_name']; 
//echo("Nama :<b>{$full_name}</b> <br>");

//get email
$email = $_POST['email'];
//echo ("Email : <b>{$email}</b> <br>");

//get Jenis Kelamin
$gender = $_POST['gender'];
//echo ("Jenis Kelamin : <b>{$gender}</b> <br>");

//get No Telepon
$phone = $_POST['phone'];
//echo ("No Telepon : <b>{$phone}</b> <br>");


//get Kota Asal
$asal = $_POST['asal']; 
//echo("Kota Asal :<b>{$asal}</b> <br>");

//get Kota Tujuan
$tujuan = $_POST['tujuan']; 
//echo("Kota Tujuan :<b>{$tujuan}</br>");

// get hari

$day = $_POST['day'];
//echo("Tanggal Berangkat: <b>{$day}</b>");

// get bulan
$month = $_POST['month'];
//echo (" <b>{$month}</b>");

// get tahun
$year = $_POST['year'];
//echo (" <b>{$year}</b> <br>");

//echo("Jumlah Pesanan<br>");

//get Jumlah
$adulth_amount = $_POST['adulth_amount'];
//echo (" Dewasa : <b>{$adulth_amount}</b> <br>");

//get Jumlah
$child_amount = $_POST['child_amount'];
//echo (" Anak-anak :<b>{$child_amount}</b> <br>");