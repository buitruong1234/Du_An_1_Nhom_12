<?php
function loadAll_user(){
    $sql="select * from user order by id_user ASC"; 
    $listtk=pdo_query($sql);
    return $listtk;
}
function insert_user($email,$username,$password){
    $sql ="insert into user(email,username,password) values('$email','$username','$password')";
    pdo_execute($sql);
}
function checkuser($user,$pass){
    $sql="select * from user where user='".$user."' AND pass='".$pass."'";
    $sp = pdo_query_one($sql);
    return $sp;
}
function checkmail($email){
    $sql="select * from user where email='".$email."'";
    $sp = pdo_query_one($sql);
    return $sp;
}
function update_taikhoan($id,$username,$password,$email,$address,$phone){
    $sql="update user set user='".$username."', pass='".$password."', email='".$email."', address='".$address."', tel='".$phone."' where id=".$id;
    pdo_execute($sql);
}
function delete_user($id){
    $sql="delete from user where id_user=".$id;
    pdo_execute($sql);
}
?>