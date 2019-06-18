<?php
namespace app\model;

class  emailbase extends \app\model{
    public  $errno = 0;
    public $errmsg = "";

    public function send($toemail, $title, $content){
        
        //发邮件
        $mail = new \Nette\Mail\Message;
        $mail->setFrom('xcm <2329237005@qq.com>')
            ->addTo( $toemail )
            ->setSubject( $title )
            ->setBody($content);

        $mailer = new \Nette\Mail\SmtpMailer([
            'host' => 'smtp.qq.com',
            'username' => '2329237005@qq.com',
            'password' => 'klfanxqypahtdigj', /* smtp独立密码 */
            'secure' => 'ssl',
        ]);
        $res = $mailer->send($mail);
        return $this;

    }

    public static function run(){
        echo 123;
    }
}