<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class Job extends Model
// {
//     use HasFactory;
// }

class Job
{

    private static $portofolios = [
        [
            "icon" => "bi bi-window",
            "name" => "Web Programing",
            "slug" => "web-programming",
            "summary" => "Menggunakan HTML, CSS, Javascript dan PHP Saya telah membuat berbagai proyek. Memanfaatkan framework Bootstrap dan Laravel memaksimalkan tampilan dan fungsi pada website Saya telah mengerjakan proyek selama kuliah maupun secara freelancer."
        ],
        [
            "icon" => "bi bi-palette",
            "name" => "Graphics Design",
            "slug" => "graphics-design",
            "summary" => "Menggunakan perangkat lunak seperti Photoshop, Ilustrator dan Corel Draw Saya mampu
            membuat berbagai jenis desain. Selama menjadi freelancer Saya telah menyelesaikan berbagai jenis desain
            logo, jersey, poster, brosur dan masih banyak lagi"
        ]
    ];


    public static function getJob()
    {
        return collect(self::$portofolios);
    }
}
