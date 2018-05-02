
Hello <?php echo $data['name']?>

<br><br>
<b>User Details</b>
<br>
<?php
    if(is_array($data['details'])){
        foreach ($data['details'] as $key => $value){
            echo $key . ':' . $value . '<br>';
        }
    }else{
        echo $data['details'];
    }
?>