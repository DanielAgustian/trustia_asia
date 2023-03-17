<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    function homepage(){
        $prods= array(
            (object)[
                'title' => 'ACE AUS 32',
                'image' => 'ace-aus-32'
            ],

            (object)[
                'title' => 'ACE AUS 40',
                'image' => 'ace-aus-40'
            ],
            (object)[
                'title' => 'ACE AUS 50',
                'image' => 'ace-aus-50'
            ],
            (object)[
                'title' => 'TAC Standard Biuret',
                'image' => 'tac-standard-biuret'
            ],
            (object)[
                'title' => 'TAC Low Biuret',
                'image' => 'tac-low-biuret'
            ],
            (object)[
                'title' => 'Coffee Beans',
                'image' => 'coffee-beans'
            ],
        );

        
        return view('pages.homepage', compact('prods'));
    }
    function aboutUs(){
        $prods= array(
            (object)[
                'title' => 'ACE AUS 32',
                'image' => 'ace-aus',
                'desc' => 'ACE AUS 32 is a diesel emission fluid that functions to reduce NOx emissions for diesel engines with SCR (Selective Catalytic Reduction) technology where NOx will be converted to nitrogen and water to achieve Euro 5 exhaust emission standards.'
            ],
            (object)[
                'title' => 'ACE AUS 40',
                'image' => 'ace-aus',
                'desc' => 'Aqueous Urea Solution (AUS) 40 is the other type of DEF (Diesel Exhaust Fluid) usually used for ship. It reduce Nitrogen Oxide (NOx) emissions from vessels and sometimes from the other diesel engine exhaust systems.'
            ],
            (object)[
                'title' => 'ACE AUS 50',
                'image' => 'ace-aus',
                'desc' => 'AUS 50 offers a 50% aqueous solution of urea. By choosing a higher concentration of urea, it will take up less volume, which means smaller storage vessels can be used.'
            ],
            (object)[
                'title' => 'TAC Standard Biuret',
                'image' => 'urea',
                'desc' => 'The main nitrogen-containing substance in mammalian urine and plays an important role in the metabolism of nitrogen-containing compounds by animals.'
            ],
            (object)[
                'title' => 'TAC Low Biuret',
                'image' => 'urea',
                'desc' => 'Manufactured by compressing pure urea crystals in a pelletizing process which avoids the melting and heating of the urea where the majority of biuret is formed'
            ],
            // (object)[
            //     'title' => 'Liquid Ammonia',
            //     'image' => 'liquid',
            //     'desc' => 'Liquid Ammonia is a heavy liquid that has a high vapor pressure at ordinary temperatures.'
            // ],
            // (object)[
            //     'title' => 'AdBlue',
            //     'image' => 'adblue',
            //     'desc' => 'a clear mixture of demineralised water and pure urea (32.5%) and is also referred to as Diesel Exhaust Fluid or AUS 32.'
            // ],
            // (object)[
            //     'title' => 'Coal',
            //     'image' => 'coal',
            //     'desc' => 'Coal is primarily composed of carbon, with trace amounts of other elements such as hydrogen, sulfur, oxygen, and nitrogen.'
            // ],
            // (object)[
            //     'title' => 'Sorghum Wood Pellets',
            //     'image' => 'wood',
            //     'desc' => 'Palletization is a technique for compacting biomass into granules with high energy density known as pellets.'
            // ],
            (object)[
                'title' => 'Coffee Beans',
                'image' => 'coffee',
                'desc' => 'There are numerous Indonesian coffee brands that represent various distinguished regions.'
            ],
        );
        return view('pages.about-us', compact('prods'));
    }
    function ourPartner(){
        
        $array = [
            (object)[
                'title' => 'PT Bhanda Ghara Reksa (Persero)',
                'logo' => 'bgr',
                
            ],
            (object)[
                'title' => 'Wan Hai Lines',
                'logo' => 'wanhai',
                
            ],
            (object)[
                'title' => 'Evergreen Marine Corporation',
                'logo' => 'evergreen',
            ],
            (object)[
                'title' => 'PT. Otten Coffee Indonesia',
                'logo' => 'otten',
            ],
            // (object)[
            //     'title' => 'Martin Jati Lawyers',
            //     'logo' => 'martin',
            // ],
            (object)[
                'title' => 'Bank Central Asia',
                'logo' => 'bca',
            ],
            (object)[
                'title' => 'Bank Rakyat Indonesia',
                'logo' => 'bri',
            ],
            (object)[
                'title' => 'Bank Negara Indonesia',
                'logo' => 'bni',
            ]
            ,(object)[
                'title' => 'OCBC Bank Singapore',
                'logo' => '',
            ],
        ];
        $count = count($array);
        return view('pages.our-partner', compact('array', 'count'));
    }

    function ourProduct(){
        $listProds= array(
            (object)[
                'title' => 'ACE AUS 32',
                'image' => 'ace-aus-32'
            ],

            (object)[
                'title' => 'ACE AUS 40',
                'image' => 'ace-aus-40'
            ],
            (object)[
                'title' => 'ACE AUS 50',
                'image' => 'ace-aus-50'
            ],
            (object)[
                'title' => 'TAC Standard Biuret',
                'image' => 'tac-standard-biuret'
            ],
            (object)[
                'title' => 'TAC Low Biuret',
                'image' => 'tac-low-biuret'
            ],
            (object)[
                'title' => 'Coffee Beans',
                'image' => 'coffee-beans'
            ],
        );
        return view('pages.product', compact('listProds'));
    }
    function contactUs(){
        return view('pages.contact-us');
    }
    function  productDetail($slug){
        $listProds= array(
            (object)[
                'title' => 'ACE AUS 32',
                'image' => 'ace-aus-32'
            ],

            (object)[
                'title' => 'ACE AUS 40',
                'image' => 'ace-aus-40'
            ],
            (object)[
                'title' => 'ACE AUS 50',
                'image' => 'ace-aus-50'
            ],
            (object)[
                'title' => 'TAC Standard Biuret',
                'image' => 'tac-standard-biuret'
            ],
            (object)[
                'title' => 'TAC Low Biuret',
                'image' => 'tac-low-biuret'
            ],
            (object)[
                'title' => 'Coffee Beans',
                'image' => 'coffee-beans'
            ],
        );
         if($slug == 'tac-standard-biuret'){
            return view('pages.product-detail.urea', compact('listProds'));
        }else if ($slug == 'tac-low-biuret'){
            return view('pages.product-detail.tac-urea-low-biuret', compact('listProds'));
        }else if ($slug == 'coffee-beans'){
            return view('pages.product-detail.coffee', compact('listProds'));
        }else if ($slug == 'ace-aus-32'){
            return view('pages.product-detail.ace-aus-32', compact('listProds'));
        }else if ($slug == 'ace-aus-40'){
            return view('pages.product-detail.ace-aus-40', compact('listProds'));
        }else if ($slug == 'ace-aus-50'){
            return view('pages.product-detail.ace-aus-50', compact('listProds'));
        }
        abort(404);
    }
}
