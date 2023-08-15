<?php

namespace App\Controllers;

class SendEmail extends BaseController
{
    public function sendEmail($email, $nama, $asalkota, $umur, $password)
    {
        $emailService = \Config\Services::email();
        $emailService->setTo($email);
        $emailService->setFrom('admin@virtualtour.com', 'CodeIgniter 4 email');
        $emailService->setSubject('Registrasi Akun Baru');
        $message = "Selamat datang, $nama! \n\n" .
            "Akun Anda berhasil terdaftar. Berikut ini adalah detail akun Anda: \n\n" .
            "Email: $email \n" .
            "Nama: $nama \n" .
            "Asal Kota: $asalkota \n" .
            "Umur: $umur \n" .
            "Password: $password \n\n" .
            "Terima kasih telah bergabung dengan Virtual Tour!";
        $emailService->setMessage($message);

        if ($emailService->send()) {
            return true;
        } else {
            $data = $emailService->printDebugger(['headers']);
            print_r($data);
            return false;
        }
    }
}
