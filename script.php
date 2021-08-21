
<!-- engine -->
<?php

        // config web
            $web1 = 'http://example.com';
            $web2 = 'http://example2.com';
      
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






<!-- menampilkan hasil, bisa ditaruh dimanapun dan dicpopy -->
<!-- tinggal dirubah $ sesuai config diatas -->

<!-- untuk web 1 -->
<?php
if (isDomainAvailible($web1)){
      echo $up;
}else{
      echo $down;
}
?>
<!-- end web 1 -->

<!-- untuk web 2 -->
<?php
if (isDomainAvailible($web2)){
      echo $up;
}else{
      echo $down;
}
?>
<!-- end web 2 -->
