<?php
//belum jalan/hancaa
$konek = mysqli_connect("127.0.0.1", "root", "", "ukk2022");

if ($konek) {
    print "terhubung";
} else {
    print "tidak terhubung...";
}