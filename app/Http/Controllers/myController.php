<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class myController extends Controller
{
    

    public $articoli = [
            [
                "id" => 1,
                "nome" => "Razer Viper",
                "descrizione"=> "Mouse da gaming con 8.000 Hz di polling rate",
                "prezzo"=> "99,99 $",
                "foto"=> "https://assets3.razerzone.com/pY56Nm_6T-Hcu4W14csRLXf5chw=/500x500/https%3A%2F%2Fhybrismediaprod.blob.core.windows.net%2Fsys-master-phoenix-images-container%2Fh34%2Fh51%2F9594596884510%2Fviper-8khz-2-500x500.png",
                "categoria"=> "mouse",
                "marca"=> "razer"
            ],

            [
                "id" => 2,
                "nome" => "Razer BlackWidow",
                "descrizione"=> "Tastiera meccanica da gaming con Razer Chroma",
                "prezzo"=> "269,99 $",
                "foto"=> "https://assets3.razerzone.com/pAYbv__1hDknbv0Jj5-Rw39CrRw=/500x500/https%3A%2F%2Fhybrismediaprod.blob.core.windows.net%2Fsys-master-phoenix-images-container%2Fh2a%2Fhd3%2F9538807103518%2Fblackwidow-v3-black-5-500x500.png",
                "categoria"=> "tastiera",
                "marca"=> "razer"
            ],

            [
                "id" => 3,
                "nome" => "LOGITECH ZONE VIBE WIRELESS",
                "descrizione"=> "Cuffia con microfono USB con driver audio di qualità premium",
                "prezzo"=> "139,99 $",
                "foto"=> "https://resource.logitech.com/w_386,ar_1.0,c_limit,f_auto,q_auto,dpr_2.0/d_transparent.gif/content/dam/logitech/en/products/headsets/zone-750/gallery/logitech-zone-750-gallery-1.png?v=1",
                "categoria"=> "cuffia",
                "marca"=> "logitech"
            ],

            [
                "id" => 4,
                "nome" => "MEG 342C QD-OLED",
                "descrizione"=> "La serie MEG si rivela come una leggenda che rappresenta la massima eleganza nel gioco",
                "prezzo"=> "420,99 $",
                "foto"=> "https://asset.msi.com/resize/image/global/product/product_1675308041a3b535db30a68581eacfd9b44bdda7af.png62405b38c58fe0f07fcef2367d8a9ba1/400.png",
                "categoria"=> "monitor",
                "marca"=> "msi"
            ],

            [
                "id" => 5,
                "nome" => "Razer Barracuda X",
                "descrizione"=> "Cuffie wireless mobile e da gaming multipiattaforma",
                "prezzo"=> "99$",
                "foto"=> "https://assets3.razerzone.com/mLNtHPtS8BHBzUQS5oxn-a7yJQ0=/500x500/https%3A%2F%2Fhybrismediaprod.blob.core.windows.net%2Fsys-master-phoenix-images-container%2Fhf9%2Fha0%2F9593488834590%2Fbarracuda-x-pubg-500x500.png",
                "categoria"=> "cuffia",
                "marca"=> "razer"
            ],

            [
                "id" => 6,
                "nome" => "IMMERSE GH61",
                "descrizione"=> "Cuffie 7.1 immersive",
                "prezzo"=> "169,99 €",
                "foto"=> "https://asset.msi.com/resize/image/global/product/product_0_20200925101736_5f6d53407b9a7.png62405b38c58fe0f07fcef2367d8a9ba1/400.png",
                "categoria"=> "cuffia",
                "marca"=> "msi"
            ],

            [
                "id" => 7,
                "nome" => "G915",
                "descrizione"=> "Tastiera gaming meccanica wireless LIGHTSPEED RGB",
                "prezzo"=> "239,00 €",
                "foto"=> "https://resource.logitechg.com/w_386,ar_1.0,c_limit,f_auto,q_auto,dpr_2.0/d_transparent.gif/content/dam/gaming/en/products/g915/g915-gallery/pan-g915-wireless-gallery-topdown.png?v=1",
                "categoria"=> "tastiera",
                "marca"=> "logitech"
            ],

            [
                "id" => 8,
                "nome" => "G502 HERO",
                "descrizione"=> "Mouse gaming dalle prestazioni elevate",
                "prezzo"=> "61,99 $",
                "foto"=> "https://resource.logitechg.com/w_386,ar_1.0,c_limit,f_auto,q_auto,dpr_2.0/d_transparent.gif/content/dam/gaming/en/non-braid/hyjal-g502-hero/g502-hero-gallery-1-nb.png?v=1",
                "categoria"=> "mouse",
                "marca"=> "msi"
            ],

        ];



public $marche = [
'razer',
'msi',
'logitech'


];

public $categorie = [
    'mouse',
    'tastiera',
    'cuffia',
    'monitor'
];


public $saldo = [




    [
        "id" => 1,
        "nome" => "Razer Viper",
        "descrizione"=> "Mouse da gaming con 8.000 Hz di polling rate",
        "prezzo"=> "99$",
        "foto"=> "https://storage-asset.msi.com/frontend/imgs/products/desktop/Which-game-do-you-like-m_02.jpg",
        "categoria"=> "mouse",
        "marca"=> "razer"
    ],

    [
        "id" => 2,
        "nome" => "Razer BlackWidow",
        "descrizione"=> "Tastiera meccanica da gaming con Razer Chroma",
        "prezzo"=> "269$",
        "foto"=> "https://sm.ign.com/t/ign_it/screenshot/default/msi-titan-gt77-hx-13v-hero_adjz.1280.jpg",
        "categoria"=> "tastiera",
        "marca"=> "razer"
    ],

    [
        "id" => 3,
        "nome" => "LOGITECH ZONE VIBE WIRELESS",
        "descrizione"=> "Cuffia con microfono USB con driver audio di qualità premium",
        "prezzo"=> "139$",
        "foto"=> "https://multiplayer.net-cdn.it/thumbs/images/2023/02/28/titan_gt77hxcut_jpg_1200x0_crop_q85.jpg",
        "categoria"=> "cuffia",
        "marca"=> "logitech"
    ],

    [
        "id" => 4,
        "nome" => "MEG 342C QD-OLED",
        "descrizione"=> "La serie MEG si rivela come una leggenda che rappresenta la massima eleganza nel gioco",
        "prezzo"=> "400$",
        "foto"=> "https://www.hwupgrade.it/i/n/msi-amg-mercedes_720.jpg",
        "categoria"=> "monitor",
        "marca"=> "msi"
    ],

    [
        "id" => 5,
        "nome" => "LOGITECH ZONE VIBE WIRELESS",
        "descrizione"=> "Cuffia con microfono USB con driver audio di qualità premium",
        "prezzo"=> "139$",
        "foto"=> "https://it.msi.com/frontend/imgs/nb/A.jpg",
        "categoria"=> "cuffia",
        "marca"=> "logitech"
    ],

    [
        "id" => 6,
        "nome" => "MEG 342C QD-OLED",
        "descrizione"=> "La serie MEG si rivela come una leggenda che rappresenta la massima eleganza nel gioco",
        "prezzo"=> "400$",
        "foto"=> "https://storage-asset.msi.com/global/picture/image/feature/monitor/MEG-342C-QD-OLED/kv-pd.png",
        "categoria"=> "monitor",
        "marca"=> "msi"
    ],









];





public function welcome() {
    return view('welcome', [
        'categorieDamostrare' => $this->categorie,
        'marcheDamostrare' => $this->marche,
    ]);
}

public function shopping() {
    return view('store',['categorieDamostrare' => $this->categorie,
    'marcheDamostrare' => $this->marche,
    'mostraArticoli' => $this->articoli,
    'mostraSaldo'=> $this->saldo
]);
}



public function sceltaCategorie($nomeCate) {
    $artCategory = [];

    foreach ($this->articoli as $article) {
        if ($nomeCate == $article['categoria']) {
            array_push($artCategory, $article);
        }
    }
    
    return view('categorie', [
        'artCat' => $artCategory, 
        'categorieDamostrare' => $this->categorie,
        'marcheDamostrare' => $this->marche
    ]);
}



public function sceltaMarca($nomeMarca) {
    $artMarca = [];

    foreach ($this->articoli as $article) {
        if ($nomeMarca == $article['marca']) {
            array_push($artMarca, $article);
        }
    }
    
    return view('marche', [
        'artMarc' => $artMarca, 
        'categorieDamostrare' => $this->categorie,
        'marcheDamostrare' => $this->marche
    ]);
}








}




