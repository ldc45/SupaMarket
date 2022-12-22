<?php

namespace App\EntityListener;

use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;


class UserListener {
    
private UserPasswordHasherInterface $hasher;


public function __construct(UserPasswordHasherInterface $hasher)
{
    $this->faker = Factory::create('fr_FR');
    $this->hasher =$hasher;
}
public function prePersist(User $user) 
{

}

public function preUpdate(User $user)
{

}

public function encodePassword(User $user)
{
    if($user->getPlainPassword()=== null){
        return;
    }
     
    $user->setPassword(
        $this->
    )
}