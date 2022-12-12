<?php
require_once('config.php');

?>
<?php
    if(isset($_POST)){
        $name       = $_POST['name'];
        $username   = $_POST['username'];
        $password   = $_POST['password'];

        $sql = "INSERT INTO tbl_user (name, username, password) VALUES (?,?,?)";
        $stmtinsert = $db->prepare($sql);
        $result = $stmtinsert->execute([$name, $username, $password]);

        if($result){
            echo 'Successfully Saved!';
        }else{
            echo 'Error!';
        }
}else{
    echo 'No Data';
}
?>