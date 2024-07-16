<?php
class User{
   public function profile(){
      return new Profile;
   }
}
class Profile{
   public function employment(){
      return 'web developer';
   }
}
$user = new User;
echo $user->profile()?->employment() ?? 'not provided';


