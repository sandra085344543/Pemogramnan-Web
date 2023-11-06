<?php

namespace App\Models;

class Movie
{

    private static $movieData = [
        [
            'id' => 'tt1746090',
            'judul' => 'Immortal Samsara',
            'sinopsis' => 'Yan Dan and her twin sister, Zhi Xi, are the sole descendants of the ancient tribe the Four-Leaved Lotus. Yan Dan’s entire being is a treasure trove of medicines. She and twin sister Zhi Xi transformed into human form a century before while attending the Queen Mothers Feast, but Yan Dan faced the greatest trial of her life - the love trial.',
            'tahun' => 2022,
            'pemain' => ['Yang Zi', 'Cheng Yi', 'Ray Chang'],
            'foto_sampul' => 'immortal.jpg',
        ],
        [
            'id' => 'tt2567856',
            'judul' => 'Till the End Of The Moon',
            'sinopsis' => 'In an era when demons have dominion over cultivators and mortals, the cultivator elders believe it is imperative to send someone back in time to discover the origin of the demon lord and prevent his resurrection. Li Su Su accepts the mission and assumes the identity of mortal Ye Xi Wu, the second daughter of General Ye.',
            'tahun' => 2023,
            'pemain' => ['Tom Cruise', 'Hayley Atwell', 'Ving Rhames'],
            'foto_sampul' => 'ttetom.jpeg',
        ],
        [
            'id' => 'tt1745564',
            'judul' => 'Openheimer',
            'sinopsis' => 'The story of American scientist, J. Robert Oppenheimer, and his role in the development of the atomic bomb.',
            'tahun' => 2023,
            'pemain' => ['	Cillian Murphy', 'Emily Blunt', 'Robert Downey Jr.'],
            'foto_sampul' => 'Lyst.jpg',
        ],
        [
            'id' => 'tt1745960',
            'judul' => 'Top Gun: Maverick',
            'sinopsis' => 'After thirty years, Maverick is still pushing the envelope as a top naval aviator, but must confront ghosts of his past when he leads TOP GUNs elite graduates on a mission that demands the ultimate sacrifice from those chosen to fly it.',
            'tahun' => 2022,
            'pemain' => ['Tom Cruise', 'Jennifer Connelly', 'Miles Teller'],
            'foto_sampul' => 'bftb.jpg',
        ],
        [
            'id' => 'tt3345340',
            'judul' => 'The Love You Give Me',
            'sinopsis' => 'Five years ago, a young woman named Min Hui accidentally fell for a young man named Xin Qi. But things between them were complicated because Min Hui was pretending to be Xin Qi’s long lost childhood friend in a misguided way to help the friend who had died suddenly.',
            'tahun' => 2023,
            'pemain' => ['Wang yu wen', 'Wang Ziqi', 'Cui Yi Xin'],
            'foto_sampul' => 'The Love You Give Me.jpg',
        ],
        [
            'id' => 'tt3345567',
            'judul' => 'Hidden Love',
            'sinopsis' => 'Sang Zhi falls in love with Duan Jia Xu, the boy who often comes to her house to play games in her older brothers room He is five years older than her. Sang Zhi had a crush on Duan Jia Xu when she was young, but they lost contact with each other for some reason.',
            'tahun' => 2023,
            'pemain' => ['Zhao Lusi', 'Chen Yuan', 'Victor Ma'],
            'foto_sampul' => 'Hidden-Love.jpg',
        ],
        [
            'id' => 'tt3346678',
            'judul' => 'Cute Programmer',
            'sinopsis' => 'After falling in love with genius programmer Jiang Yi Cheng, Lu Li enrolls into the school he once studied at, and also took up the same major - computer programming. Setting Jiang Yi Cheng as her role model in her heart, she achieves good grades in school.',
            'tahun' => 2023,
            'pemain' => ['Xing Zhao Lin', 'Zhu Xu Dan', 'Yi Da Qian'],
            'foto_sampul' => 'CuteProgrammer.jpg',
        ],
        [
            'id' => 'tt3346667',
            'judul' => 'Start Up',
            'sinopsis' => 'Seo Dal-mi (Bae Suzy) is a bright and ambitious young woman who dreams of become Korea Steve Jobs. Dal-mi doesnt have fancy background but shes passionate about her work.She has bright energy and is person of great vitality.',
            'tahun' => 2023,
            'pemain' => ['Bae Suzy ', 'Nam Joo-hyuk', 'Kim Seon-ho ','Kang Han-na  '],
            'foto_sampul' => 'ST.jpg',
        ],

    ];

    public static function all(){
        // pakai method collection
        return collect(self::$movieData);
    }

    public static function find($id){
        // panggil method all()
        $movie = static::all();
        return $movie->firstWhere('id', $id);
    }
}
