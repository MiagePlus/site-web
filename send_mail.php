<?php
    $to = 'joseph@donge.fr';
    $reply_to = 'test@donge.fr';
    
    if (empty($_POST['user']) || empty($_POST['mail']) || empty($_POST['subject']) || empty($_POST['message'])) {
        return FALSE;
    } else {
        $user = $_POST['user'];
        $mail = $_POST['mail'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        
        $headers = array(
            'From' => $user.' <'.$mail.'>',
            'Reply-To' => $reply_to,
        );
    
        mail($to, $subject, $message, $headers);
    }
?>