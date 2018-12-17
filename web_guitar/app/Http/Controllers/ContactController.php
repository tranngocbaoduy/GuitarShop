<?php

namespace App\Http\Controllers;
include 'PHPMailer-master/src/Exception.php';
include 'PHPMailer-master/src/OAuth.php';
include 'PHPMailer-master/src/PHPMailer.php';
include 'PHPMailer-master/src/POP3.php';
include 'PHPMailer-master/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Mail;


class ContactController extends Controller
{
    //
    public function addFeedback(Request $request)
    {
        $input = $request->all();
        $mail = new PHPMailer(true);                              // Passing `true` enables exceptions

        try {
            //Server settings
            $mail->SMTPDebug = 2;                                 // Enable verbose debug output
            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = 'tranngocbaoduy88@example.com';                 // SMTP username
            $mail->Password = 'mushroomzz99';                           // SMTP password
            $mail->SMTPSecure = 'tls ssl';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 587;                                    // TCP port to connect to

            //Recipients
            $mail->setFrom('tranngocbaoduy88@gmail.com', 'Mailer');
            $mail->addAddress('tranngocbaoduy88@gmail.com', 'Joe User');     // Add a recipient
            $mail->addAddress('tranngocbaoduy88@gmail.com');               // Name is optional
            $mail->addReplyTo('tranngocbaoduy88@gmail.com', 'Information');
            $mail->addCC('cc@example.com');
            $mail->addBCC('bcc@example.com');

            //Attachments
//            $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//            $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

            //Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'Here is the subject';
            $mail->Body = 'This is the HTML message body <b>in bold!</b>';
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';


            if (true) {
                $msg = array(
                    'status' => true,
                    'message' => 'Send Comment Success',
                );
                return response()->json($msg);
            }
            $mail->send();

        } catch (Exception $e) {

            $msg = array(
                'status' => false,
                'message' => 'Send Comment Success',
                'response' => 'Message could not be sent. Mailer Error: ' + $mail->ErrorInfo,
            );
            return response()->json($msg);

        }

        $msg = array(
            'status' => true,
            'message' => 'Send Comment Success',
        );
        return response()->json($msg);

//send mail stmp
//
////        Mail::send('mailfb', array('name' => $input["phone"], 'email' => $input["email"], 'content' => $input['comment']), function ($message) {
////            $message->to('baoduy19971997@gmail.com', 'Visitor')->subject('Visitor Feedback!');
////        });
////        Session::flash('flash_message', 'Send message successfully!');
//
//        return view('/user/contactPage');
////
//        $msg = array(
//            'status' => true,
//            'message' => 'Get Group Product By Group Id Success',
////            'response' => $mail_sent,
//        );
//        return response()->json($msg);
    }


}