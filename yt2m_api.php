<?php
class YT2MAPI
{
    public $type;
    public $format;
    public $id;                  // the x coordinate of this Point.
    public $url_gen=array();                  // the x coordinate of this Point.
    public $api_server='https://yt2m.pro/api/?';

    /*
     * use the x and y variables inherited from Point.php.
     */
    public function __construct($id, $format='mp3', $type='iframe')
    {
        if (isset($id)){
        $this->id = $id;
        }
        $this->format = $format;
        $this->type = $type;
    }

    /*
     * the (String) representation of this Point as "Point3D(x, y, z)".
     */
    public function api()
    {
        if (isset($this->id) || isset($this->id)!=''){
           $url_gen=array('id'=>$this->id,'type'=>$this->type,'format',$this->format) ;
           $url_query=http_build_query($url_gen);
           $jsonData = file_get_contents($this->api_server.$url_query);
           $response = json_decode($jsonData,TRUE);
           if (isset($jsonData)){
               if (isset($response['api'])){
           $result=$response['api'];    
           return $result;
           } else {
               return 'Unable to Retrive API data!<br>';
           }
            } else {
               return 'Unable to connect API server!<br>';
           }
            
            
        }
    }
}

?>