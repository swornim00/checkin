<?php 

require('connect.php'); 
if(isset($_POST['token'])){
    $token = $_POST['token'];
    if($token == "lovestory0626life"){
        $query = "SELECT * FROM `records`";
        $data = array();
        if($result = $con->query($query)){
        $i = 0;
        while($result_array= mysqli_fetch_row($result)){
            $data[$i] = $result_array;
            $i++;
        }
        echo(json_encode($data));
       
        }
    }else{
        echo(json_encode(array('Error' => 'Invalid Token')));
    }
    
}else{
    echo(json_encode(array('Error' => 'Invalid Token')));
}