<?php

    function get_Date(){
        date_default_timezone_get();
        $date = date('m/d/Y h:i:s a', time());
        return $date;
    }

    function validate()
    {
            $options=$_GET["options"];
            $Birthdate=$_GET["Birthdate"];
            $options1=$_GET["options1"];
            $options2=$_GET["options2"];
            if($options==""||$Birthdate==""||$options1==""||$options2=="")
            {
                return false;
            }
            else{
                return true;
            } 
    
    }

    function insert_quest(){
        $db = new PDO("mysql:host=localhost;dbname=masr_adaha","root","12345678");
        if(isset($_COOKIE["latitude"]) && isset($_COOKIE["longitude"])){
            $lon=$_COOKIE["longitude"];
            $lat=$_COOKIE["latitude"];
        }
        else{
            $lon="none";
            $lat="none";
        }
        $ip= getUserIp();
        $options=$_GET["options"];
        $Birthdate=$_GET["Birthdate"];
        $options1=$_GET["options1"];
        $options2=$_GET["options2"];

        $custom1=$_GET["custom1"];
        if(empty($custom1)){
            $custom1A = "لا شيء مما ذكر";
        }else{
            $custom1A = implode(";",$custom1);
            
        }
        $custom2=$_GET["custom2"];
        if(empty($custom2)){
            $custom2A = "لا شيء مما ذكر";
        }else{
            $custom2A = implode(";",$custom2);
            //print($custom2A);
        }

        $options3=$_GET["options3"];
        if($options3=="")
        {
            $options3="لا";
        }
        $options4=$_GET["options4"];
        if($options4=="")
        {
            $options4="لا";
        }
        $options5=$_GET["options5"];
        if($options5=="")
        {
            $options5="لا";
        }
        $options6=$_GET["options6"];
        if($options6=="")
        {
            $options6="لا";
        }
        $options7=$_GET["options7"];
        if($options7=="")
        {
            $options7="لا";
        }
        $options8=$_GET["options8"];
        if($options8=="")
        {
            $options8="لا";
        }
        $options9=$_GET["options9"];
        if($options9=="")
        {
            $options9="لا";
        }
        $options10=$_GET["options10"];
        if($options10=="")
        {
            $options10="لا";
        }


        if($ip=="")
        {
            $ip="none";
        }
        $date = get_Date();
        
        $sql="INSERT INTO `tbl_ex_results`(`Quest_ID`, `ResultValue`, `UserIP`, `Lat`, `Lon`, `TimeSt`) VALUES (1,'".$options."','".$ip."','".$lat."','".$lon."','".$date."')";
        if($db->exec($sql))
            {
            }
            else{
                echo "<script>alter('Something Went Wrong');</script>";
            }
        
        $sql="INSERT INTO `tbl_ex_results`(`Quest_ID`, `ResultValue`, `UserIP`, `Lat`, `Lon`, `TimeSt`) VALUES (2,'".$Birthdate."','".$ip."','".$lat."','".$lon."','".$date."')";
        if($db->exec($sql))
            {
            }
            else{
                echo "<script>alter('Something Went Wrong');</script>";
            }


        $sql="INSERT INTO `tbl_ex_results`(`Quest_ID`, `ResultValue`, `UserIP`, `Lat`, `Lon`, `TimeSt`) VALUES (3,'".$options1."','".$ip."','".$lat."','".$lon."','".$date."')";
        if($db->exec($sql))
            {
            }
            else{
                echo "<script>alter('Something Went Wrong');</script>";
            }
        $sql="INSERT INTO `tbl_ex_results`(`Quest_ID`, `ResultValue`, `UserIP`, `Lat`, `Lon`, `TimeSt`) VALUES (6,'".$options2."','".$ip."','".$lat."','".$lon."','".$date."')";
        if($db->exec($sql))
            {
            }
            else{
                echo "<script>alter('Something Went Wrong');</script>";
            }
        
        


        $sql="INSERT INTO `tbl_ex_results`(`Quest_ID`, `ResultValue`, `UserIP`, `Lat`, `Lon`, `TimeSt`) VALUES (8,'".$custom1A."','".$ip."','".$lat."','".$lon."','".$date."')";
        if($db->exec($sql))
            {
            }
            else{
                echo "<script>alter('Something Went Wrong');</script>";
            }
        $sql="INSERT INTO `tbl_ex_results`(`Quest_ID`, `ResultValue`, `UserIP`, `Lat`, `Lon`, `TimeSt`) VALUES (9,'".$custom2A."','".$ip."','".$lat."','".$lon."','".$date."')";
        if($db->exec($sql))
            {
            }
            else{
                echo "<script>alter('Something Went Wrong');</script>";
            }
        


        $sql="INSERT INTO `tbl_ex_results`(`Quest_ID`, `ResultValue`, `UserIP`, `Lat`, `Lon`, `TimeSt`) VALUES (10,'".$options3."','".$ip."','".$lat."','".$lon."','".$date."')";
        if($db->exec($sql))
            {
            }
            else{
                echo "<script>alter('Something Went Wrong');</script>";
            }
        
        $sql="INSERT INTO `tbl_ex_results`(`Quest_ID`, `ResultValue`, `UserIP`, `Lat`, `Lon`, `TimeSt`) VALUES (11,'".$options4."','".$ip."','".$lat."','".$lon."','".$date."')";
        if($db->exec($sql))
            {
            }
            else{
                echo "<script>alter('Something Went Wrong');</script>";
            }
        
        $sql="INSERT INTO `tbl_ex_results`(`Quest_ID`, `ResultValue`, `UserIP`, `Lat`, `Lon`, `TimeSt`) VALUES (12,'".$options5."','".$ip."','".$lat."','".$lon."','".$date."')";
        if($db->exec($sql))
            {
            }
            else{
                echo "<script>alter('Something Went Wrong');</script>";
            }
        
        $sql="INSERT INTO `tbl_ex_results`(`Quest_ID`, `ResultValue`, `UserIP`, `Lat`, `Lon`, `TimeSt`) VALUES (13,'".$options6."','".$ip."','".$lat."','".$lon."','".$date."')";
        if($db->exec($sql))
            {
            }
            else{
                echo "<script>alter('Something Went Wrong');</script>";
            }
        
        $sql="INSERT INTO `tbl_ex_results`(`Quest_ID`, `ResultValue`, `UserIP`, `Lat`, `Lon`, `TimeSt`) VALUES (14,'".$options7."','".$ip."','".$lat."','".$lon."','".$date."')";
        if($db->exec($sql))
            {
            }
            else{
                echo "<script>alter('Something Went Wrong');</script>";
            }
        
        $sql="INSERT INTO `tbl_ex_results`(`Quest_ID`, `ResultValue`, `UserIP`, `Lat`, `Lon`, `TimeSt`) VALUES (15,'".$options8."','".$ip."','".$lat."','".$lon."','".$date."')";
        if($db->exec($sql))
            {
            }
            else{
                echo "<script>alter('Something Went Wrong');</script>";
            }
        
        $sql="INSERT INTO `tbl_ex_results`(`Quest_ID`, `ResultValue`, `UserIP`, `Lat`, `Lon`, `TimeSt`) VALUES (16,'".$options9."','".$ip."','".$lat."','".$lon."','".$date."')";
        if($db->exec($sql))
            {
            }
            else{
                echo "<script>alter('Something Went Wrong');</script>";
            }
        
        $sql="INSERT INTO `tbl_ex_results`(`Quest_ID`, `ResultValue`, `UserIP`, `Lat`, `Lon`, `TimeSt`) VALUES (17,'".$options10."','".$ip."','".$lat."','".$lon."','".$date."')";
        if($db->exec($sql))
            {
            }
            else{
                echo "<script>alter('Something Went Wrong');</script>";
            }
            
}
    

    function calc_results()
    {

        $checked_count=0;
        if(!empty($_GET['custom1'])) $checked_count = count($_GET['custom1'])*5;
        if(!empty($_GET['custom2']))$checked_count += count($_GET['custom2'])*2;
        if($_GET['options3']=="نعم")$checked_count +=10;
        if($_GET['options4']=="نعم")$checked_count +=5;
        if($_GET['options5']=="نعم")$checked_count +=10;
        if($_GET['options6']=="نعم")$checked_count +=5;
        if($_GET['options7']=="نعم")$checked_count +=5;
        if($_GET['options8']=="نعم")$checked_count +=2;
        if($_GET['options9']=="نعم")$checked_count +=2;
        if($_GET['options10']=="نعم")$checked_count +=1;
        $healthResult=$checked_count/100;
        return $healthResult ;
    }
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