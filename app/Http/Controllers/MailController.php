<?php
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use App\Mail\DemoEmail;
use Illuminate\Support\Facades\Mail;
 
class MailController extends Controller
{
    public function send()
    {
        $objDemo = new \stdClass();
        $objDemo->demo_one = 'Dogs';
        $objDemo->demo_two = 'Cats';
        $objDemo->sender = 'Bukharbayeva Arna';
        $objDemo->receiver = 'Arna Bukharbayeva';
 
        Mail::to("190103318@stu.sdu.edu.kz")->send(new DemoEmail($objDemo));
    }
}