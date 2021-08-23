<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monitoring | NizarHome</title>
    <script src="https://kit.fontawesome.com/f8b76f4be7.js" crossorigin="anonymous"></script>
</head>
<body>
    <style>
    * {
        padding: 0;
        margin: 0;
        background-color: black;
        color: white;
    }

    body {
        font-family: poppins;
        /* color: white; */
    }

    .container {
        /* max-width: 600px; */
        margin: 2rem auto auto auto;
        width: 700px;
        padding: 2rem 1rem 2rem 1rem;
        /* background-color: #f5f5f5ee; */
    }

    .bd {
        border: 1px solid;
    }


    .judul {
        text-align: center;
        /* margin: 0 0 1.5rem 0; */
        margin: 2rem 0 4rem 0;
    }

    a.cekbtnn {
        text-decoration:none;
    }
    </style>


<!-- engine -->
<?php

        // config web
            $web1 = 'http://nizarhome.rf.gd';
            $web2 = 'http://arsip-nizarhome.rf.gd';
            $web3 = 'http://nizarwiki.rf.gd';
            $web4 = 'http://weta.epizy.com';
            $web5 = 'http://nhome.rf.gd';
            $web6 = 'http://pcfr.rf.gd';
            $web7 = 'http://pesannizar.ga';
            $web8 = 'https://nizarshop.ga/';
            $web9 = 'https://nizarmaps.ga/';
            $web10 = 'http://nizarkarya.rf.gd';
            $web11 = 'https://www.nizarmedium.ga/';
            $web12 = 'https://nizargallery.wordpress.com/';
            $web13 = '';
            $web14 = '';
            $web15 = '';

            $up = '<div style="text-align:center">up</div>';
            $down = '<div style="text-align:center">down</div>';
        // end config



function isDomainAvailible($domain){
    if(!filter_var($domain, FILTER_VALIDATE_URL)){
        return false;
    }
 
    $curlInit = curl_init($domain);
    curl_setopt($curlInit,CURLOPT_CONNECTTIMEOUT,10);
    curl_setopt($curlInit,CURLOPT_HEADER,true);
    curl_setopt($curlInit,CURLOPT_NOBODY,true);
    curl_setopt($curlInit,CURLOPT_RETURNTRANSFER,true);
 
    $response = curl_exec($curlInit);
 
    curl_close($curlInit);
 
    if ($response) return true;
 
    return false;
}
?>
<!-- end engine -->






<div class="container bdd">


    <!-- 1 judul -->
<div class="judul">
    <h2 style="
    line-height: 0;
">Monitoring</h2><br>
    <p style="
    line-height: 0;
">NizarHome</p>
</div>
<!-- end 1 judul -->

<!-- 2 kontrol -->
<!-- row 1 -->
<style>
.tabel {
    display:flex;
    margin: 2rem 0 0 0;
}
</style>
<div class="tabel">
    <style>
    table {
        margin: 0 auto;
        border-collapse: collapse;
    }
    
    table tr td {
        padding: 0.4rem;
    }

    table thead th {
        padding: 0 0.5rem 0 0.5rem;
    }

    caption {
        margin:  0 0 0.5rem 0;
        padding: 0.3rem;
        background-color: rgb(0, 128, 128);
        font-weight: 600;
        color: rgb(255, 255, 255);
    }

    table a.cekbtn {
        padding: 0.4rem;
        border-radius: 8px;
        text-decoration: none;
        display: block;
        text-align: center;
        background-color: red;
        color: white;
    }
    </style>

<!-- inodes -->
    <table border="1" cellspacing="0">
        <caption class="bd">Ino</caption>
        <thead>
            <th>Web</th>
            <th>Status</th>
        </thead>
    
        <tbody>
            <tr>
                <td>nizarhome.rf.gd</td>
                <td><a class="cekbtn" href="http://nizarhome.rf.gd/statistic.php">cek</a></td>
            </tr>
            <tr>
                <td>arsip-nizarhome.rf.gd</td>
                <td><a class="cekbtn" href="http://arsip-nizarhome.rf.gd/statistic.php">cek</i></a></td>
            </tr>
            <tr>
                <td>weta.epizy.com</td>
                <td><a class="cekbtn" href="http://weta.epizy.com/statistic.php">cek</a></td>
            </tr>
            <tr>
                <td>nhome.rf.gd</td>
                <td><a class="cekbtn" href="http://nhome.rf.gd/statistic.php">cek</a></td>
            </tr>
            <tr>
                <td>pcfr.rf.gd</td>
                <td><a class="cekbtn" href="http://pcfr.rf.gd/statistic.php">cek</a></td>
            </tr>
            
        </tbody>
    </table>
<!-- end inodes -->


    <!-- peprustakaan -->
    <table border="1" cellspacing="0">
        <caption class="bd">Library</caption>
        <thead>
            <th>Web</th>
            <th>Status</th>
        </thead>
    
        <tbody>
            <tr>
                <td>nizarhome.rf.gd</td>
                <td><a class="cekbtn" href="http://nizarhome.rf.gd/hai.php">cek</a></td>
            </tr>
            <!-- <tr>
                <td>arsip-nizarhome.rf.gd</td>
                <td><a href="http://arsip-nizarhome.rf.gd/statistic.php">cek</a></td>
            </tr> -->
            <!-- <tr>
                <td>weta.epizy.com</td>
                <td><a href="http://weta.epizy.com/statistic.php">cek</a></td>
            </tr> -->
            <tr>
                <td>nhome.rf.gd</td>
                <td><a class="cekbtn" href="http://nhome.rf.gd/">cek</a></td>
            </tr>
            
        </tbody>
    </table>
<!-- end perpustakaan -->

</div>
<!-- end row 1 -->

<!-- row 2 -->
<div class="tabel bdd">

<!-- inodes -->
    <table border="1" cellspacing="0">
        <caption class="bd">Dev</caption>
        <thead>
            <th>Web</th>
            <th>L1</th>
            <th>L2</th>
            <th>L3</th>
            <th>Status</th>
        </thead>
    
        <tbody>
            <tr>
                <td>nizarhome.rf.gd</td>
                <td>/pustaka</td>
                <td>/bc or /backup</td>
                <td>/hai.p</td>
                <td>
                    <a class="cekbtnn" href="#">
                        <?php
                        // Menampilkan status website
                        if (isDomainAvailible($web1)){
                            echo $up;
                        }else{
                            echo $down;
                        }
                        ?>
                    </a>
                </td>
            </tr>
            <tr>
                <td>arsip-nizarhome.rf.gd</td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <a class="cekbtnn" href="#">
                        <?php
                        if (isDomainAvailible($web2)){
                            echo $up;
                        }else{
                            echo $down;
                        }
                        ?>
                    </a>
                </td>
            </tr>
            <tr>
                <td>nizarwiki.rf.gd</td>
                <td>nizarwiki.ga</td>
                <td></td>
                <td></td>
                <td>
                <a class="cekbtnn" href="#">
                        <?php
                        if (isDomainAvailible($web3)){
                            echo $up;
                        }else{
                            echo $down;
                        }
                        ?>
                    </a>
                </td>
            </tr>
            <tr>
                <td>weta.epizy.com</td>
                <td>weta-nizarwiki.ga</td>
                <td></td>
                <td></td>
                <td>
                <a class="cekbtnn" href="#">
                        <?php
                        if (isDomainAvailible($web4)){
                            echo $up;
                        }else{
                            echo $down;
                        }
                        ?>
                    </a>
                </td>
            </tr>
            <tr>
                <td>nhome.rf.gd</td>
                <td>/pustaka</td>
                <td>/hai.p ->nhome.rf.gd</td>
                <td>/ngobrol or /ngobrolsantai</td>
                <td>
                <a class="cekbtnn" href="#">
                        <?php
                        if (isDomainAvailible($web5)){
                            echo $up;
                        }else{
                            echo $down;
                        }
                        ?>
                    </a>
                </td>
            </tr>
            <tr>
                <td>pcfr.rf.gd</td>
                <td>chat</td>
                <td></td>
                <td></td>
                <td>
                <a class="cekbtnn" href="#">
                        <?php
                        if (isDomainAvailible($web6)){
                            echo $up;
                        }else{
                            echo $down;
                        }
                        ?>
                    </a>
                </td>
            </tr>
            <tr>
                <td>pesannizar.ga</td>
                <td>chat</td>
                <td></td>
                <td></td>
                <td>
                <a class="cekbtnn" href="#">
                        <?php
                        if (isDomainAvailible($web7)){
                            echo $up;
                        }else{
                            echo $down;
                        }
                        ?>
                    </a>
                </td>
            </tr>
            <tr>
                <td>nizarshop.ga</td>
                <td>gameshop</td>
                <td></td>
                <td></td>
                <td>
                <a class="cekbtnn" href="#">
                        <?php
                        if (isDomainAvailible($web8)){
                            echo $up;
                        }else{
                            echo $down;
                        }
                        ?>
                    </a>
                </td>
            </tr>
            <tr>
                <td>nizarmaps.ga</td>
                <td>map</td>
                <td></td>
                <td></td>
                <td>
                <a class="cekbtnn" href="#">
                        <?php
                        if (isDomainAvailible($web9)){
                            echo $up;
                        }else{
                            echo $down;
                        }
                        ?>
                    </a>
                </td>
            </tr>
            <tr>
                <td>nizarkarya.rf.gd</td>
                <td>personal</td>
                <td></td>
                <td></td>
                <td>
                <a class="cekbtnn" href="#">
                        <?php
                        if (isDomainAvailible($web10)){
                            echo $up;
                        }else{
                            echo $down;
                        }
                        ?>
                    </a>
                </td>
            </tr>
            <tr>
                <td>nizarmedium.ga</td>
                <td>blog</td>
                <td></td>
                <td></td>
                <td>
                <a class="cekbtnn" href="#">
                        <?php
                        if (isDomainAvailible($web11)){
                            echo $up;
                        }else{
                            echo $down;
                        }
                        ?>
                    </a>
                </td>
            </tr>
            <tr>
                <td>nizargallery.wp.com</td>
                <td>galeri</td>
                <td></td>
                <td></td>
                <td>
                <a class="cekbtnn" href="#">
                        <?php
                        if (isDomainAvailible($web12)){
                            echo $up;
                        }else{
                            echo $down;
                        }
                        ?>
                    </a>
                </td>
            </tr>
            


            
        </tbody>
    </table>
<!-- end inodes -->


    <!-- peprustakaan -->
    <!-- <table border="1" cellspacing="0">
        <caption class="bd">Perpustakaan</caption>
        <thead>
            <th>Web</th>
            <th>Status</th>
        </thead>
    
        <tbody>
            <tr>
                <td>nizarhome.rf.gd</td>
                <td><a class="cekbtn" href="http://nizarhome.rf.gd/hai.php"><i class="fas fa-server"></i></a></td>
            </tr>
            <tr>
                <td>arsip-nizarhome.rf.gd</td>
                <td><a href="http://arsip-nizarhome.rf.gd/statistic.php">cek</a></td>
            </tr>
            <tr>
                <td>weta.epizy.com</td>
                <td><a href="http://weta.epizy.com/statistic.php">cek</a></td>
            </tr>
            <tr>
                <td>nhome.rf.gd</td>
                <td><a class="cekbtn" href="http://nhome.rf.gd/"><i class="fas fa-server"></i></a></td>
            </tr>
            
        </tbody>
    </table> -->
<!-- end perpustakaan -->

</div>
<!-- end row 2 -->











<!-- 3 footer -->
<style>
    footer {
        width: 100%;
        margin: 2rem 0 0 0;
    }

    footer p {
        /* justify-content: center; */
        text-align: center;
        font-size: small;
    }

</style>
<footer class="bbd">
    <p>Copyright &copy; <script>document.write(new Date().getFullYear())</script> NizarHome <br> All Rights Reserved</p>
</footer>


<!-- end 3 footer -->








</div>



</body>
</html>
