<?php 

class database
{
    public static function getDB(){
        // return mysqli_connect('localhost' , 'root' , '', 'equity');
        return mysqli_connect('equitycoaching.com.pk' , 'equityco_user' , 'Vb]isDrRI(VU', 'equityco_main');
        
    }
}