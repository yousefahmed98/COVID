<?php
    // Get Title of Pages
    function getTitle(){
        global $PageTitle;
        if(isset($PageTitle)){
            echo $PageTitle;
        }else{
            echo 'Default';
        }
    }
    //debug function
    function debug($data) {
        $output = $data;
        if (is_array($output))
            $output = implode(',', $output);
    
        echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
    }
    // get user IP
    function getUserIp(){
        //print("<script>console.log('getUserIp1');</script>");
        if(!empty($_SERVER['HTTP_CLIENT_IP'])){
            //ip from share internet
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
            //ip pass from proxy
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        }else{
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        return $ip;
    }

    // get user adress
    function getAddress($latitude,$longitude){
        if(!empty($latitude) && !empty($longitude)){
            //Send request and receive json data by address
            $queryString = http_build_query([
                'access_key' => 'a7ceb1189a28d7b65a2134cb1d7fead9',
                'query' => '29.9088201,31.274070199999997',
                'language' => 'ES',
              ]);
              $ch = curl_init(sprintf('%s?%s', 'https://api.positionstack.com/v1/reverse', $queryString));
              curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
              $json = curl_exec($ch);
              
              curl_close($ch);
              
              $apiResult = json_decode($json, true);
              print_r($apiResult);
    }
} 
?>