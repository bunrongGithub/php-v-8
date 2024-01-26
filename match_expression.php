<?php

/////////// PHP 7 //////////////
class Conversation
{
}
$obj = new Conversation;

// switch($obj::class){
//    case 'Conversation':
//       $type = 'start_convesations';
//       break;
//    case 'Reply':
//       $type = 'replied_to_conversations';
//       break;
//    case 'Comment':
//       $type = 'comment_on_lession';
//       break;
// }
// echo $type;
///////////////// PHP 8 /////////////////

$type =  match ($obj::class) {
   'Conversation' => 'started_conversation',
   'Reply' => 'replied_to _conversation',
   'Comment' => 'commented_on_lesson'
};
echo $type;
