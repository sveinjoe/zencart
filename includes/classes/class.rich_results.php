<?php

/** 
 * File contains just the rich_results class
 *
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: DrByte 2020 Jul 10 Modified in v1.5.8-alpha $
 * @author sveinjoe <sveinjoe@gmail.com>
 */

/**
 * class rich_results is a  class to generate ld+json rich results for google by schema.org 
 *
 */

class rich_results{
    private $arrResult = array();
    public function __construct() {
        $this->arrResult["@context"] = "http://schema.org";
        $this->arrResult["@type"] = "Product";
    }
    public function set_sku($sku){
        $this->arrResult["sku"] = $sku;
    }

    public function set_images($arrImages){
        $this->arrResult["image"] = $arrImages;
    }

    public function set_name($name){
        $name = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
        $this->arrResult["name"] = $name;
    }

    public function set_url($url){
        if(filter_var($url, FILTER_VALIDATE_URL)){
            $this->arrResult["url"] = $url;
        }
    }

    public function set_color($color){
        $this->arrResult["color"] = $color;
    }

    public function set_category($category){
        $category = htmlspecialchars($category, ENT_QUOTES, 'UTF-8');
        $this->arrResult["category"] = $category;
    }

    public function set_description($description){
        $description = strip_tags($description);
        $description = htmlspecialchars($description, ENT_QUOTES, 'UTF-8');
        $this->arrResult["description"] = $description;
    }

    public function set_aggregateRating($ratingValue, $reviewCount){
        $this->arrResult["aggregateRating"] = array(
            "@type"=> "AggregateRating",
            "ratingValue" => $ratingValue,
            "reviewCount"=> $reviewCount
        );
    }

    public function set_rand_aggregateRating($str){
        $str = md5($str);
        $str = substr($str,0,8);
        $seed = hexdec($str);
        mt_srand($seed);
        // 生成一个0到1之间的随机浮点数  
        $randomFloat = mt_rand() / mt_getrandmax();
        // 缩放和平移随机数到所需的范围  
        $min = 4.3; $max = 4.8;
        $ratingValue = $randomFloat * ($max - $min) + $min;  
        $reviewCount = mt_rand(10, 55);
        $this->set_aggregateRating($ratingValue, $reviewCount);
    }
    

    /**
     * @param array $offers = array(
     *  "currency" => 'USD',
     *  "price" => '170',
     *  "availability" => "InStock",
     * )
     */
    public function set_offers($offers){
        if(empty( $offers['currency'] ) || empty($offers['price'])) {
            return;
        }
        $this->arrResult["offers"]["@type"] = "Offer";
        $this->arrResult["offers"]["priceCurrency"] = $offers['currency'];
        $this->arrResult["offers"]["price"] = $offers['price'];
        if(!empty($offers['availability'])){
            $this->arrResult['offers']['availability'] = $offers['availability'];
        }
    }

    public function get_json(){
        if(!empty($this->arrResult['name'])){
            $json = json_encode( $this->arrResult );
            return $json;
        }else{
            return false;
        }
    }

    public function get_ld_json_script(){
        $json = $this->get_json();
        if($json){
            return '<script data-rh="true" type="application/ld+json">' . $json . '</script>';
        }
        return false;
    }
    public function getHomePageUrl($url)
    {
        $parsedUrl = parse_url($url);

        // 确保我们有一个有效的URL  
        if ($parsedUrl === false) {
            return false;
        }

        // 提取协议和主机名  
        $scheme = $parsedUrl['scheme'] ?? '';
        $host = $parsedUrl['host'] ?? '';

        // 如果URL包含端口，则添加端口  
        $port = isset($parsedUrl['port']) ? ':' . $parsedUrl['port'] : '';

        // 组合基础URL  
        $homePageUrl = "{$scheme}://{$host}{$port}/";

        return $homePageUrl;
    }

    public function getCurrentSchema() {  
        if (( !empty($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS']) !== 'off') 
        || ( isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https' ) 
        || ( !empty($_SERVER['HTTP_FRONT_END_HTTPS']) && strtolower($_SERVER['HTTP_FRONT_END_HTTPS']) !== 'off')) {
            return 'https';
        }
        return 'http';
    }  
}