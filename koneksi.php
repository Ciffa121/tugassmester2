<?php
session_start();
class koneksi{
    funcion getkoneksi(){
return new PDO("mysql:host=localhost;dbname=datasiswa","root","");

}
}