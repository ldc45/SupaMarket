<?php

namespace App\EntityListener;

class UserListener {

public function prePersist(User $user) 
{

}

public function preUpdate(User $user)
{

}

public function encodePassword(User $user)
{
    if($user)
}