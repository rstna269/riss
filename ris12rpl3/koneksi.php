<?php
//belum jalan/hancaa
$konek = mysqli_connect("127.0.0.1", "root", "passwd48", "ukk_2020_p2");

if ($konek) {
    print "terhubung";
} else {
    print "tidak terhubung...";
}