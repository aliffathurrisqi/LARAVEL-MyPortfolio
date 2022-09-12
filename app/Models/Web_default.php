<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class Web extends Model
// {
//     use HasFactory;
// }

class Web
{

    private static $webs = [
        [
            "name" => "Lobby Forum",
            "slug" => "lobby-forum",
            "keterangan" => "Website Forum Diskusi Mobile Legends",
            "build" => "HTML, PHP, Javascript, Bootstrap",
            "link" => "https://lobby.alfaristudio.my.id/login.php"
        ],
        [
            "name" => "Beautyfinder",
            "slug" => "beautyfinder",
            "keterangan" => "Webview Pencarian Toko Kebutuhan Wanita di Yogyakarta",
            "build" => "HTML, PHP, Javascript, Bootstrap, Google Map API, Kotlin, Android Studio",
            "link" => "https://beautyfinder.alfaristudio.my.id/login.php"
        ],
    ];

    public static function getWeb()
    {
        return collect(self::$webs);
    }

    public static function getFindWeb($slug)
    {
        $webs = static::getWeb();
        return $webs->firstWhere('slug', $slug);
    }
}
