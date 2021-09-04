<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mail;
use Illuminate\Support\Facades\Storage;
class Customer extends Model
{
    use HasFactory;

    public static function sendCustomerEmail($customer, $pdf)
    {       
       
        $path = 'public/uploads/'.'-'.rand() .'_'.time(). '.'.'pdf';  
        Storage::put($path, $pdf->output());

        $viewData['fname']              = $customer->fname;
        $viewData['lname']              = $customer->lname;
        $viewData['email']              = $customer->email;
        Mail::send('email_templates.email_customer_detail', $viewData, function ($m) use ($customer, $pdf, $path) {
            $m->from('abnation553@gmail.com', env('APP_NAME'));
            $m->to('abnation553@gmail.com', $customer->email)->subject('Customer Details');
            $m->to($customer->email, $customer["email"])
            ->subject($customer->fname)
            ->attachData($pdf->output(), $path);
        });
    }
}
