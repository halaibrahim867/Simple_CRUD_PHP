<?php
function getUsers(){
    return json_decode(file_get_contents(__DIR__ . '/users.json'),true);

}

function getUserById($id)
{
    $users=getUsers();
    foreach ($users as $user){
        if ($user['id'] == $id){
            return $user;
        }
    }
    
}
function createUser($data){
    
}

function updateUser($data, $id)
{
    $updateUser=[];
  $users=getUsers();
  foreach ($users as $i=> $user){
        if ($user['id'] == $id){
            $users[$i]= $updateUser=array_merge($user, $data);
        }
  }
  file_put_contents(__DIR__ . '/users.json',json_encode($users, JSON_PRETTY_PRINT));

  return $updateUser;
}

function deleteUser($id){

}

function uploadImage($file,$user ){
    if (!is_dir(__DIR__."/images")){
        mkdir(__DIR__."/images");
    }
    $fileName=$file['name'];
    $dotPosition=strpos($fileName,'.');
    $extension=substr($fileName,$dotPosition + 1);
    move_uploaded_file($file['tmp_name'],__DIR__."/images/${user['id']}.$extension");

    $user['extension']=$extension;
    updateUser($user, $user['id']);
}