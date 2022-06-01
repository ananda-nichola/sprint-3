 <?php

class Persegi{


    public function __construct()
    {
        echo "========================================\n";
        echo "==   Progam Menghitung Bangun Datar   ==\n";
        echo "========================================\n";
        
        echo "1.Persegi\n";
        echo "2.Segitiga\n";
        echo "3.Lingkaran\n";
        echo "4.Trapesium\n";
        echo "5.Jajargenjang\n";
        echo "0. Keluar\n";

        echo "Pilih :";
        $menu = trim(fgets(STDIN));

        if ( $menu == 1 ) {
            Persegi::persegi();

        } else if ( $menu == 2 ) {
            Persegi::segitiga();
        } else if ( $menu == 3 ) {
            Persegi::lingkaran();
        } else if ( $menu == 4 ) {
            Persegi::trapesium();
        } else if ( $menu == 5 ) {
            Persegi::jajargenjang();
        }  else if ( $menu == 0) {
            echo "Keluar Progam...";
        } else {
            echo "Pilihan Tidak Ada\n";
            echo Persegi:: __construct();
        }
    
    }

    public function persegi()
    {
        echo "Menghitung Persegi\n";
        echo "1. Luas\n";
        echo "2. Keliling\n";
        echo "9. Kembali\n";
        echo "0. keluar\n";
        
        echo "Pilih : ";
        $menu = trim(fgets(STDIN));

        if ($menu == 1) {
            echo Persegi::luaspersegi();
        } else if ($menu == 2) {
            echo Persegi::kelilingpersegi();
        }  else if ($menu == 9) {
            $loop = new Persegi;
        } else if ($menu == 0) {
             echo "Keluar Program ...";
        } else {
            echo "Pilihan Tidak Ada, Silahkan Pilih Yang Ada\n";
            echo Persegi:: __construct();
            
        }
    }

    public function luaspersegi()
    {
        echo   " ==========                ==========\n";
        echo   " ==     Menghitung Luas Persegi    ==\n";
        echo   " ==========                ==========\n";
        echo " Masukkan Sisi: \n";

        $sisi = trim(fgets(STDIN));
        $result = $sisi**2;
        echo "Hasil = $result\n";

        echo "\n";
        echo "9. Kembali\n";
        echo "0. keluar\n";

        echo "Pilih : ";
        $menu = trim(fgets(STDIN));

        if ($menu == 1) {
            echo Persegi::luaspersegi();
        }  else if ($menu == 2) {
            Persegi::kelilingpersegi();
        } else if ($menu == 9) {
            $loop = new Persegi;
        } else if ($menu == 0) {
             echo "Keluar Program ...";
        } else {
            echo "Pilihan Tidak Ada, Silahkan Pilih Yang Ada\n";
            echo Persegi:: __construct(); 
        }

     
 
    }

    public function kelilingpersegi()
    {
        echo   " ==========                ==========\n";
        echo   " ==   Menghitung Keliling Persegi! ==\n";
        echo   " ==========                ==========\n";
        echo   " Masukkan Sisi: \n";

        $sisi = trim(fgets(STDIN));

        $result = $sisi * 4;

        echo "Hasil = $result\n";

        echo "\n";
        echo "9. Kembali\n";
        echo "0. keluar\n";

        echo "PILIH : ";
        $menu = trim(fgets(STDIN));

        if ($menu == 1) {
            Persegi::luaspersegi();
        } else if ($menu == 2) {
            Persegi::kelilingpersegi();
        } else if ($menu == 9) {
            Persegi::__construct();
        } else if ($menu == 0) {
             echo "Keluar Program ...";
        } else {
            echo "Pilihan Tidak Ada, Silahkan Pilih Yang Ada\n";
            echo Persegi:: __construct();
            
        }

    }

    public function segitiga()
    {
        echo "Menghitung Segitiga\n";
        echo "1. Luas\n";
        echo "2. Keliling\n";
        echo "9. Kembali\n";
        echo "0. keluar\n";
        
        echo "Pilih : ";
        $menu = trim(fgets(STDIN));

        if ($menu == 1) {
            echo Persegi::luassegitiga();
        } else if ($menu == 2) {
            echo Persegi::kelilingsegitiga();
        }  else if ($menu == 9) {
            $loop = new Persegi;
        } else if ($menu == 0) {
             echo "Keluar Program ...";
        } else {
            echo "Pilihan Tidak Ada, Silahkan Pilih Yang Ada\n";
            echo Persegi:: __construct();
            
        }
    }

    public function luassegitiga()
    {

        echo   " ==========                     ==========\n";
        echo   " ==       Menghitung Luassegitiga!      ==\n";
        echo   " ==========                     ==========\n";
        

        echo "Masukkan Alas : ";
        $alas = trim(fgets(STDIN));
        echo "Masukka Tinggi : ";
        $tinggi = trim(fgets(STDIN));
        $result = 0.5 * $alas * $tinggi;
        echo "Hasil = $result\n";

        echo "\n";
        echo "9. Kembali\n";
        echo "0. keluar\n";

        echo "Pilih : ";
        $menu = trim(fgets(STDIN));

        if ($menu == 3) {
            Persegi::luassegitiga();

        } else if ($menu == 4) {
            Persegi::kelilingsegitiga();
        } else if ($menu == 9) {
            Persegi::__construct();
        } else if ($menu == 0) {
             echo "Keluar Program ...";
        } else {
            echo "Pilihan Tidak Ada, Silahkan Pilih Yang Ada\n";
            echo Persegi:: __construct();
            
        }
    }
  

    public function kelilingsegitiga() 
    {

    echo    " ==========                     ==========\n";
    echo    " ==    Menghitung Keliling Segitiga!    ==\n";
    echo    " ==========                     ==========\n";
    echo    " Masukkan Sisi: \n";

    echo "Masukkan Alas : ";
    $alas = trim(fgets(STDIN));
    echo "Masukan sisi kanan : ";
    $sisi1 = trim(fgets(STDIN));
    echo "Masukkan sisi kiri : ";
    $sisi2 = trim(fgets(STDIN));
    $result = $alas + $sisi1 + $sisi2;
    echo "Hasil = $result\n";

    echo "\n";
    echo "9. Kembali\n";
    echo "0. keluar\n";

    echo "Pilih : ";
    $menu = trim(fgets(STDIN));

    if ($menu == 9) {
        Persegi::__construct();
    } else if ($menu == 0) {
        echo "Keluar Program ...";
    } else {
        echo "Pilihan Tidak Ada";
    }
    
    }

    public function lingkaran()
    {
        echo "Menghitung Lingkaran\n";
        echo "1. Luas\n";
        echo "2. Keliling\n";
        echo "9. Kembali\n";
        echo "0. keluar\n";
        
        echo "Pilih : ";
        $menu = trim(fgets(STDIN));

        if ($menu == 1) {
            echo Persegi::luaslingkaran();
        } else if ($menu == 2) {
            echo Persegi::kelilinglingkaran();
        }  else if ($menu == 9) {
            $loop = new Persegi;
        } else if ($menu == 0) {
             echo "Keluar Program ...";
        } else {
            echo "Pilihan Tidak Ada, Silahkan Pilih Yang Ada\n";
            echo Persegi:: __construct();
            
        }
    }

    public function luaslingkaran() {

        echo    " ==========                 ==========\n";
        echo    " ==    Menghitung Luas lingkaran!   ==\n";
        echo    " ==========                 ==========\n";
        echo " Masukkan Jari-jari\n";

        $jari2 = trim(fgets(STDIN));
        $result = pi() * (pow($jari2,2));


        echo "Hasil = $result\n";

        echo "\n";
        echo "9. Kembali\n";
        echo "0. keluar\n";

        echo "Pilih : ";
        $menu = trim(fgets(STDIN));

        if ($menu == 9) {
            Persegi::__construct();
        } else if ($menu == 0) {
            echo "Keluar Program ...";
        } else {
            echo "Pilihan Tidak Ada";
        }

    }

    public function kelilinglingkaran() {
        echo   " ==========                 ==========\n";
        echo   " ==   Menghitung Luas lingkaran!    ==\n";
        echo   " ==========                 ==========\n";
        echo " Masukkan Diameter\n";

        $diameter = trim(fgets(STDIN));

        $result = $diameter * pi();
        echo "Hasil = $result\n";

        echo "\n";
        echo "9. Kembali\n";
        echo "0. keluar\n";

        echo "Pilih : ";
        $menu = trim(fgets(STDIN));
        if ($menu == 9) {
            Persegi::__construct();
        } else if ($menu == 0) {
            echo "Keluar Program ...";
        } else {
            echo "Pilihan Tidak Ada";
        }
    }

    public function trapesium()
    {
        echo "Menghitung Trapesium\n";
        echo "1. Luas\n";
        echo "2. Keliling\n";
        echo "9. Kembali\n";
        echo "0. keluar\n";
        
        echo "Pilih : ";
        $menu = trim(fgets(STDIN));

        if ($menu == 1) {
            echo Persegi::luastrapesium();
        } else if ($menu == 2) {
            echo Persegi::kelilingtrapesium();
        }  else if ($menu == 9) {
            $loop = new Persegi;
        } else if ($menu == 0) {
             echo "Keluar Program ...";
        } else {
            echo "Pilihan Tidak Ada, Silahkan Pilih Yang Ada\n";
            echo Persegi:: __construct();
            
        }
    }


    public function luastrapesium() {

        echo  " ==========                 ==========\n";
        echo  " ==    Menghitung Luas Trapesium!   ==\n";
        echo  " ==========                 ==========\n";

        echo " Masukkan Rusuk 1 : \n";
        $rusuk1 = trim(fgets(STDIN));
        echo " Masukkan Rusuk 2 : ";
        $rusuk2 = trim(fgets(STDIN));
        echo "Masukkan Tinggi : ";
        $tinggi = trim(fgets(STDIN));
        $result = 0.5 * ($rusuk1+$rusuk2) * $tinggi;
        echo "Hasil = $result\n";

        echo "\n";
        echo "9. Kembali\n";
        echo "0. Keluar\n";

        echo "Pilih : ";
        $menu = trim(fgets(STDIN));

        if ($menu == 9) {
            Persegi::__construct();
        } else if ($menu == 0) {
            echo "Keluar Program ...";
        } else {
            echo "Pilihan Tidak Ada";
        }

    }

    public  function kelilingtrapesium() {

        echo   " ==========                 ==========\n";
        echo   " ==  Menghitung Keliling Trapesium! ==\n";
        echo   " ==========                 ==========\n";

        echo "Masukkan Sisi 1 : ";
        $sisi1 = trim(fgets(STDIN));
        echo "Masukkann Sisi 2 : ";
        $sisi2 = trim(fgets(STDIN));
        echo "Masukkan Sisi 3 : ";
        $sisi3 = trim(fgets(STDIN));
        echo "Masukkan Sisi 4 : ";
        $sisi4 = trim(fgets(STDIN));
        $result = $sisi1 + $sisi2 + $sisi3 + $sisi4;
        echo "Hasil = $result\n";

        echo "\n";
        echo "9. Kembali\n";
        echo "0. keluar\n";

        echo "Pilih : ";

        $menu = trim(fgets(STDIN));
        if ($menu == 9) {
            Persegi::__construct();
       } else if ($menu == 0) {
           echo "Keluar Program ...";
       } else {
            echo "Pilihan Tidak Ada";
    }
} 

public function jajargenjang()
{
    echo "Menghitung Jajargnjang\n";
    echo "1. Luas\n";
    echo "2. Keliling\n";
    echo "9. Kembali\n";
    echo "0. keluar\n";
    
    echo "Pilih : ";
    $menu = trim(fgets(STDIN));

    if ($menu == 1) {
        echo Persegi::luasjajargenjang();
    } else if ($menu == 2) {
        echo Persegi::kelilingjajargenjang();
    }  else if ($menu == 9) {
        $loop = new Persegi;
    } else if ($menu == 0) {
         echo "Keluar Program ...";
    } else {
        echo "Pilihan Tidak Ada, Silahkan Pilih Yang Ada\n";
        echo Persegi:: __construct();
        
    }
}

public function luasjajargenjang() {

    echo   " ==========                 ==========\n";
    echo   " ==  Menghitung Luas Jajargenjang!  ==\n";
    echo   " ==========                 ==========\n";

    echo "Masukkan Alas : ";
    $alas = trim(fgets(STDIN));

    echo "Masukkan Tinggi : ";
    $tinggi = trim(fgets(STDIN));

    $result = $alas * $tinggi;
    echo "Hasil = $result\n";

    echo "\n";
    echo "9. Kembali\n";
    echo "0. keluar\n";

    echo "PILIH : ";
    $menu = trim(fgets(STDIN));
    if ($menu == 9) {
        Persegi::__construct();
    } else if ($menu == 0) {
        echo "Keluar Program ...";
    } else {
        echo "Pilihan Tidak Ada";
    }
}

public function kelilingjajargenjang() {

    echo     " ==========                 ==========\n";
    echo     " ==Menghitung Keliling Jajargenjang!==\n";
    echo     " ==========                 ==========\n";

    echo "Masukkan Panjang : ";
    $panjang = trim(fgets(STDIN));

    echo "Masukkan Lebar : ";
    $lebar = trim(fgets(STDIN));
        
    $result = 2 * $panjang + 2 * $lebar;
    echo "Hasil = $result\n";

    echo "\n";
    echo "9. Kembali\n";
    echo "0. keluar\n";

    echo "Pilih : ";
    $menu = trim(fgets(STDIN));
    if ($menu == 9) {
        Persegi::__construct();
    } else if ($menu == 0) {
        echo "Keluar Program ...";
    } else {
        echo "Pilihan Tidak Ada";
    }

}
    
}

$loop = new Persegi;