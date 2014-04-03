<?php
App::uses('CakeEmail', 'Network/Email');

$email = new CakeEmail('gmail');
$content = array (
    'to_name'  => '名前',
    'address'  => '住所',
    'send_msg' => '問い合わせ内容'
);
$email
    ->template('/Layouts/Emails/text/e_text_mail')
    ->viewVars($content)
    ->to('*****@******.com')
    ->subject('タイトルです')
    ->send();
