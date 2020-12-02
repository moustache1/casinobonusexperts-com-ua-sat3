<?php
// GET
//  /record/active?tag_names[]=pcdn-bdsm 

$REF_LINK = 'fap_ref-link-here'; // reflink
$URLS_TO_REDIRECT = ["/go-casino","/gocasino", "/go/casino"]; // url to redirect
$TAG_NAMES = 'tag-name-here'; // test tag name
// Tagnames for projects (choose one)
// seo-satellite-vulkan-mirror
// seo-satellite-vulkan24-mirror
// seo-satellite-eldoclub-mirror
// seo-satellite-elslots-mirror
// seo-satellite-pmcasino-mirror
$DS_TOKEN = '8BB1649DBED7F92D'; // X-Service-Token (do not change)

$redirector = new Redirector($TAG_NAMES, $URLS_TO_REDIRECT, $REF_LINK, $DS_TOKEN);
$redirector->init(); 


class API
{
    function __construct($domain, $DS_TOKEN)
    {
        $this->domain = $domain;
        $this->request_headers[] = "Accept: application/json;q=0.9,text/plain";
        $this->request_headers[] = "X-Service-Token: $DS_TOKEN";
    }

    public function get()
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://domain.multiwl.com/record/active?tag_names[]=$this->domain");
        curl_setopt($ch, CURLOPT_HTTPHEADER, $this->request_headers);
        curl_setopt($ch, CURLOPT_FRESH_CONNECT, TRUE);
        
        //return the transfer as a string
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($ch);

        // close curl resource to free up system resources
        curl_close($ch);
        return  json_decode($output);
    }
}

class Redirector
{

    function __construct($tag_names, $URLS_TO_REDIRECT, $ref_link, $DS_TOKEN)
    {
        $this->ref_link = $ref_link;
        $this->URLS_TO_REDIRECT = $URLS_TO_REDIRECT;
        $this->tag_names = $tag_names;
        $this->DS_TOKEN = $DS_TOKEN;
    }
    
    public function init()
    {
        $userrequest = str_ireplace(get_option('home'), '', $this->get_address());
        $userrequest = rtrim($userrequest, '/');
        // If current url is redirectable 
        if (in_array($userrequest, $this->URLS_TO_REDIRECT)) {
            // get data from dns
            $data = new API($this->tag_names, $this->DS_TOKEN);
            // redirector domain (ex. vulcanmania.com)
            $redirector = $data->get()[0];
            
            // redirect
            $this->redirect($redirector);
        }
    }

    function get_address()
    {
        // return the full address
        return $this->get_protocol() . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    }

    function get_protocol()
    {
        // Set the base protocol to http
        $protocol = 'http';
        // check for https
        if (isset($_SERVER["HTTPS"]) && strtolower($_SERVER["HTTPS"]) == "on") {
            $protocol .= "s";
        }
        return $protocol;
    }

    private function redirect($redirector)
    {
        header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
        header("Cache-Control: post-check=0, pre-check=0", false);
        header("Pragma: no-cache");
        header("Location: https://$redirector?ref=$this->ref_link", true, 302);
        die();
    }
}