<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

/**
 * Enable, adjust and copy this code for each store you run
 *
 * Store #0, default one
 *
 * if (isHttpHost("example.com")) {
 *    $_SERVER["MAGE_RUN_CODE"] = "default";
 *    $_SERVER["MAGE_RUN_TYPE"] = "store";
 * }
 *
 * @param string $host
 * @return bool
 */
function isHttpHost(string $host): bool
{
    if (!isset($_SERVER['HTTP_HOST'])) {
        return false;
    }
    return $_SERVER['HTTP_HOST'] === $host;
}

if (isHttpHost("mcloud-na-preprod.oxo.com") ||
    isHttpHost("mcloud-na-stage.oxo.com") ||
    isHttpHost("mcloud-na.oxo.com") ||
    isHttpHost("oxo-gold.local.heledigital.com") ||
    isHttpHost("www.oxo.com") ||
    isHttpHost("oxo.com")
) {
    $_SERVER["MAGE_RUN_CODE"] = "oxo";
    $_SERVER["MAGE_RUN_TYPE"] = "website";
}

if (isHttpHost("mcloud-na-preprod.hydroflask.com") ||
    isHttpHost("mcloud-na-stage.hydroflask.com") ||
    isHttpHost("mcloud-na.hydroflask.com") ||
    isHttpHost("hf-gold.local.heledigital.com") ||
    isHttpHost("www.hydroflask.com") ||
    isHttpHost("hydroflask.com")
) {
    $_SERVER["MAGE_RUN_CODE"] = "hydro";
    $_SERVER["MAGE_RUN_TYPE"] = "website";
}

if (isHttpHost("mcloud-na-preprod.drybar.com") ||
    isHttpHost("mcloud-na-stage.drybar.com") ||
    isHttpHost("mcloud-na-stage3.drybar.com") ||
    isHttpHost("mcloud-na.drybar.com") ||
    isHttpHost("drybar-gold.local.heledigital.com") ||
    isHttpHost("www.drybar.com") ||
    isHttpHost("drybar.com")
) {
    $_SERVER["MAGE_RUN_CODE"] = "drybar";
    $_SERVER["MAGE_RUN_TYPE"] = "website";
}

if (isHttpHost("mcloud-na-stage3.osprey.com") ||
    isHttpHost("mcloud-na.osprey.com") ||
    isHttpHost("osprey-gold.local.heledigital.com") ||
    isHttpHost("www.osprey.com") ||
    isHttpHost("osprey.com")
) {
    $_SERVER["MAGE_RUN_CODE"] = "ospreyusen";
    $_SERVER["MAGE_RUN_TYPE"] = "store";

    $ospreyUSStores = [
        'ospreyusen',
        'ospreyuses',
        'ospreyaren',
        'ospreyares',
        'ospreyauen',
        'ospreybren',
        'ospreycaen',
        'ospreycafr',
        'ospreyclen',
        'ospreycles',
        'ospreycnen',
        'ospreyecen',
        'ospreyeces',
        'ospreyhken',
        'ospreyiden',
        'ospreyjpen',
        'ospreymyen',
        'ospreymxen',
        'ospreymxes',
        'ospreynzen',
        'ospreypyen',
        'ospreypyes',
        'ospreyphen',
        'ospreysgen',
        'ospreykren',
        'ospreytwen',
        'ospreythen',
        'ospreyuyen',
        'ospreyuyes',
    ];
    $uri = explode('/', $_SERVER['REQUEST_URI']);
    if (isset($uri[1]) && isset($uri[2])) {
        $storeName = 'osprey'.trim(strtolower($uri[1])).trim(strtolower($uri[2]));
        if (in_array($storeName, $ospreyUSStores)) {
            $_SERVER["MAGE_RUN_CODE"] = $storeName;
            $_SERVER['REQUEST_URI'] = str_replace('/'.$uri[1].'/'.$uri[2],'',$_SERVER['REQUEST_URI']);
        }
    }
}

if (isHttpHost("emea-stage.hele.digital") ||
    isHttpHost("emea-preprod.hele.digital") ||
    isHttpHost("emea.hele.digital") ||
    isHttpHost("www.ospreyeurope.com") ||
    isHttpHost("osprey-emea.local.heledigital.com") ||
    isHttpHost("ospreyeurope.com")
) {
    $_SERVER["MAGE_RUN_CODE"] = "ospreyuken";
    $_SERVER["MAGE_RUN_TYPE"] = "store";

    $uri = explode('/', $_SERVER['REQUEST_URI']);
    if (isset($uri[1])) {
        switch($uri[1])
        {
            case 'gb':
                $_SERVER['REQUEST_URI'] = str_replace('/'.$uri[1],'',$_SERVER['REQUEST_URI']);
                $_SERVER["MAGE_RUN_CODE"] = "ospreyuken";
                break;
            case 'se_sv':
                $_SERVER['REQUEST_URI'] = str_replace('/'.$uri[1],'',$_SERVER['REQUEST_URI']);
                $_SERVER["MAGE_RUN_CODE"] = "ospreyseksv";
                break;
            case 'che_fr':
                $_SERVER['REQUEST_URI'] = str_replace('/'.$uri[1],'',$_SERVER['REQUEST_URI']);
                $_SERVER["MAGE_RUN_CODE"] = "ospreychffr";
                break;
            case 'che_de':
                $_SERVER['REQUEST_URI'] = str_replace('/'.$uri[1],'',$_SERVER['REQUEST_URI']);
                $_SERVER["MAGE_RUN_CODE"] = "ospreychfde";
                break;
            case 'che_it':
                $_SERVER['REQUEST_URI'] = str_replace('/'.$uri[1],'',$_SERVER['REQUEST_URI']);
                $_SERVER["MAGE_RUN_CODE"] = "ospreychfit";
                break;
            case 'dk_en':
                $_SERVER['REQUEST_URI'] = str_replace('/'.$uri[1],'',$_SERVER['REQUEST_URI']);
                $_SERVER["MAGE_RUN_CODE"] = "ospreydkken";
                break;
            case 'no_nb':
                $_SERVER['REQUEST_URI'] = str_replace('/'.$uri[1],'',$_SERVER['REQUEST_URI']);
                $_SERVER["MAGE_RUN_CODE"] = "ospreynoknn";
                break;
            case 'fr':
                $_SERVER['REQUEST_URI'] = str_replace('/'.$uri[1],'',$_SERVER['REQUEST_URI']);
                $_SERVER["MAGE_RUN_CODE"] = "ospreyeufr";
                break;
            case 'it':
                $_SERVER['REQUEST_URI'] = str_replace('/'.$uri[1],'',$_SERVER['REQUEST_URI']);
                $_SERVER["MAGE_RUN_CODE"] = "ospreyeuit";
                break;
            case 'es':
                $_SERVER['REQUEST_URI'] = str_replace('/'.$uri[1],'',$_SERVER['REQUEST_URI']);
                $_SERVER["MAGE_RUN_CODE"] = "ospreyeues";
                break;
            case 'de':
                $_SERVER['REQUEST_URI'] = str_replace('/'.$uri[1],'',$_SERVER['REQUEST_URI']);
                $_SERVER["MAGE_RUN_CODE"] = "ospreyeude";
                break;
            case 'eu':
                $_SERVER['REQUEST_URI'] = str_replace('/'.$uri[1],'',$_SERVER['REQUEST_URI']);
                $_SERVER["MAGE_RUN_CODE"] = "ospreyeuen";
                break;
            default:
                $_SERVER["MAGE_RUN_CODE"] = "ospreyuken";
                break;
        }
    }
}