<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class Person extends Model
// {
//     use HasFactory;
// }

class Person
{

    private static $profiles = [
        [
            "name" => "Aliffathur Risqi Hidayat",
            "job" => "Web Programmer, Graphics Designer",
            "summary" => "Saya adalah seorang Fresh-graduated S1 Informatika pada tahun 2022. Keahlian Saya berfokus pada
            Web Programming khususnya bahasa pemrograman PHP. Saya juga merupakan seorang freelancer Desain Grafis
            yang mengerjakan berbagai bentuk desain jersey, logo, poster, dsb. Saya menyukai hal-hal baru terutama
            yang mengacu pada kreativitas individu.",
            "foto" => "myfoto.jpg",
            "linkedin" => "https://www.linkedin.com/in/aliffathurrisqi/",
            "github" => "https://github.com/aliffathurrisqi/",
            "instagram" => "/",
            "whatsapp" => "https://wa.me/6282322442293"
        ]
    ];

    private static $skill_languages = [
        [
            "name" => "HTML"
        ],
        [
            "name" => "CSS"
        ],
        [
            "name" => "Javascript"
        ],
        [
            "name" => "PHP"
        ],
    ];

    private static $skill_apps = [
        [
            "name" => "Adobe Photoshop",
            "icon" => "adobe-photoshop-white.png"
        ],
        [
            "name" => "Adobe Ilustrator",
            "icon" => "adobe-ilustrator-white.png"
        ],
        [
            "name" => "Adobe XD",
            "icon" => "adobe-xd-white.png"
        ],
        [
            "name" => "Corel Draw",
            "icon" => "corel-draw-white.png"
        ],
    ];

    private static $skill_tools = [
        [
            "name" => "Visual Studio Code",
            "icon" => "vscode-white.png"
        ],
        [
            "name" => "Bootstrap",
            "icon" => "bootstrap.png"
        ],
        [
            "name" => "Laravel",
            "icon" => "laravel.png"
        ],
    ];


    public static function getProfile()
    {
        return collect(self::$profiles);
    }

    public static function getSkillLanguages()
    {
        return collect(self::$skill_languages);
    }

    public static function getSkillApps()
    {
        return collect(self::$skill_apps);
    }

    public static function getSkillTools()
    {
        return collect(self::$skill_tools);
    }
}
