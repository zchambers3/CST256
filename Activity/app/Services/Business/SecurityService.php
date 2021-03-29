<?php
//Zack Chambers
//This is my own work
namespace App\Services\Business;
use App\Services\Data\SecurityDAO;
use App\Models\UserModel;
class SecurityService{
    public function login($user){
        return (new SecurityDAO)->findByUser($user);
    }
}
?>
