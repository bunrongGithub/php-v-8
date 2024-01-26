<?php
class Users{
   
   public function __construct(protected $name){
   }
}
class Plan{
   public function __construct(protected string $name = 'monthly'){

   }
}
class Signup{
   public function __construct( protected Users $user,protected Plan $plan){
   }
}
$user = new Users('Jonh_doe');
$plan = new Plan();
$singup = new Signup($user,$plan);
var_dump($singup);