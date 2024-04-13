<?php
if (empty($_POST['Username'])||empty($_POST['pass'])) {
    header("Location:kosong.php");
}else {
        /* deklarasi username dan password yang benar */
        $logins = [ 
            'Username' => 'jopan', 
            'pass' => '123' 
          ];         
        
        /* cek username sama seperti yang sudah ditetapkan */            
        if ( $logins['pass'] !== $_POST['pass'] || $logins['Username'] !== $_POST['Username'] ){  
            /*Unsuccessful attempt: Set error message */  
            echo "<h1 style='color:red'>Invalid Login Details</h1>";        
            
        } else {            
            echo "<h1 style = color:cyan >== Data Berhasil Dikirim ==</h1> ";
            echo "<pre>";    
            echo "Nama                : Jovanni G.N. <br />";
            echo "Email               : jovannigabriel23203@gmail.com <br />";
            echo "Hari Tanggal,Waktu  : ".date('l, d F Y, H:i:s')."<br />";
        }
}
    