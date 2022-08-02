<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    function homepage(){
        $prods= array(
            (object)[
                'title' => 'Urea AUS 40',
                'image' => 'urea-aus-40'
            ],
            (object)[
                'title' => 'Urea',
                'image' => 'urea'
            ],
            (object)[
                'title' => 'TAC Urea Low Biuret',
                'image' => 'tac-urea-low-biuret'
            ],
            (object)[
                'title' => 'Liquid Ammonia',
                'image' => 'liquid-ammonia'
            ],
            (object)[
                'title' => 'AdBlue',
                'image' => 'adblue'
            ],
            (object)[
                'title' => 'Coal',
                'image' => 'coal'
            ],
            (object)[
                'title' => 'Sorghum Wood Pellets',
                'image' => 'sorghum-wood-pellets'
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
                'title' => 'Urea AUS 40',
                'image' => 'urea',
                'desc' => 'Marine urea of the AUS 40 grade is manufactured to strict quality standards specified and it will help the catalyst in the SCR system last longer.'
            ],
            (object)[
                'title' => 'Urea',
                'image' => 'urea',
                'desc' => 'The main nitrogen-containing substance in mammalian urine and plays an important role in the metabolism of nitrogen-containing compounds by animals.'
            ],
            (object)[
                'title' => 'TAC Low Biuret',
                'image' => 'urea',
                'desc' => 'Manufactured by compressing pure urea crystals in a pelletizing process which avoids the melting and heating of the urea where the majority of biuret is formed'
            ],
            (object)[
                'title' => 'Liquid Ammonia',
                'image' => 'liquid',
                'desc' => 'Liquid Ammonia is a heavy liquid that has a high vapor pressure at ordinary temperatures.'
            ],
            (object)[
                'title' => 'AdBlue',
                'image' => 'adblue',
                'desc' => 'a clear mixture of demineralised water and pure urea (32.5%) and is also referred to as Diesel Exhaust Fluid or AUS 32.'
            ],
            (object)[
                'title' => 'Coal',
                'image' => 'coal',
                'desc' => 'Coal is primarily composed of carbon, with trace amounts of other elements such as hydrogen, sulfur, oxygen, and nitrogen.'
            ],
            (object)[
                'title' => 'Sorghum Wood Pellets',
                'image' => 'wood',
                'desc' => 'Palletization is a technique for compacting biomass into granules with high energy density known as pellets.'
            ],
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
            (object)[
                'title' => 'J-blue Oita Co., Ltd.',
                'logo' => 'j-blue',
            ],
            (object)[
                'title' => 'Martin Jati Lawyers',
                'logo' => 'martin',
            ],
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
        $listProds = array(
            (object)[
                'title' => 'Urea AUS 40',
                'image' => 'urea-aus-40'
            ],
            (object)[
                'title' => 'Urea',
                'image' => 'urea'
            ],
            (object)[
                'title' => 'TAC Urea Low Biuret',
                'image' => 'tac-urea-low-biuret'
            ],
            (object)[
                'title' => 'Liquid Ammonia',
                'image' => 'liquid-ammonia'
            ],
            (object)[
                'title' => 'AdBlue',
                'image' => 'adblue'
            ],
            (object)[
                'title' => 'Coal',
                'image' => 'coal'
            ],
            (object)[
                'title' => 'Sorghum Wood Pellets',
                'image' => 'sorghum-wood-pellets'
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
        $listProds = array(
            (object)[
                'title' => 'Urea AUS 40',
                'image' => 'urea-aus-40'
            ],
            (object)[
                'title' => 'Urea',
                'image' => 'urea'
            ],
            (object)[
                'title' => 'TAC Urea Low Biuret',
                'image' => 'tac-urea-low-biuret'
            ],
            (object)[
                'title' => 'Liquid Ammonia',
                'image' => 'liquid-ammonia'
            ],
            (object)[
                'title' => 'AdBlue',
                'image' => 'adblue'
            ],
            (object)[
                'title' => 'Coal',
                'image' => 'coal'
            ],
            (object)[
                'title' => 'Sorghum Wood Pellets',
                'image' => 'sorghum-wood-pellets'
            ],
            (object)[
                'title' => 'Coffee Beans',
                'image' => 'coffee-beans'
            ],
        );
        if ($slug == 'urea-aus-40') {
            # code...
            return view('pages.product-detail.urea-aus-40', compact('listProds'));
        }else if($slug == 'urea'){
            return view('pages.product-detail.urea', compact('listProds'));
        }else if ($slug == 'tac-urea-low-biuret'){
            return view('pages.product-detail.tac-urea-low-biuret', compact('listProds'));
        }else if ($slug == 'adblue'){
            return view('pages.product-detail.adblue', compact('listProds'));
        }else if ($slug == 'liquid-ammonia'){
            return view('pages.product-detail.ammonia', compact('listProds'));
        }else if ($slug == 'coal'){
            return view('pages.product-detail.coal', compact('listProds'));
        }else if ($slug == 'sorghum-wood-pellets'){
            return view('pages.product-detail.sorghum', compact('listProds'));
        }else if ($slug == 'coffee-beans'){
            return view('pages.product-detail.coffee', compact('listProds'));
        }
       
    }
}
