<?php
class Rest {
    //put your code here
    
    var $CI;
    var $_formats = array(
        'xml'=>'application/xml',
        'json'=>'application/json'
    );
    function Rest() {
        $this->CI =&get_instance();
    }
    function request($url, $method ='GET',$data =NULL){
        switch ($method){
            case 'GET':
				if($data !=NULL){
					if(is_array($data)){
						$data = http_build_query($data);
						
					}
					$url .='?'.$data;

				}
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				curl_setopt($ch, CURLOPT_USERAGENT, "MozillaXYZ/1.0");
                curl_setopt($ch,CURLOPT_HEADER,0);
                $data = curl_exec($ch);curl_close($ch);
				//echo $data;
                return $data;
                break;
            case 'PUT':
                if($data==NULL){
                    $response=array(
                        'error'=>'you cannot perform a POST request with no data'
                    );
                    $this->response($response);
                }else{
                   
		    $field_string = http_build_query($data);
		    $ch =  curl_init($url);
		    curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);				
		    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
			curl_setopt($ch, CURLOPT_USERAGENT, "MozillaXYZ/1.0");
		    curl_setopt($ch, CURLOPT_POSTFIELDS, $field_string);
		    $data = curl_exec($ch);
		    curl_close($ch);
	           
	            return $data;
                }
                break;
			case 'PUT_BATCH':
				
                if($data==NULL){
                    $response=array(
                        'error'=>'you cannot perform a POST request with no data'
                    );
                    $this->response($response);
                }else{
                   
				$fields_string = http_build_query($data);
				$ch =  curl_init($url);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);	
				curl_setopt($ch,CURLOPT_HTTPHEADER,array('RTYPE: PUT_BATCH'));
				curl_setopt($ch, CURLOPT_USERAGENT, "MozillaXYZ/1.0");				
				curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
				curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
				$data = curl_exec($ch);
				curl_close($ch);
	           
	            return $data;
                }
                break;
            case 'POST':
                if($data === NULL)
                {
                        $response = "You cannot perform a POST request with no data!";
                        $this->response($response);
                }
                else
                {
                      
			$fields_string = http_build_query($data);
		        $ch = curl_init($url);		        
		        curl_setopt($ch,CURLOPT_POST,count($data));
				curl_setopt($ch, CURLOPT_USERAGENT, "MozillaXYZ/1.0");
		        curl_setopt($ch,CURLOPT_POSTFIELDS,$fields_string);
		        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		        $data = curl_exec($ch);
		        curl_close($ch);

		        
		        return $data;
                }

                break;
            case 'DELETE':			
                $ch =  curl_init($url);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
				curl_setopt($ch, CURLOPT_USERAGENT, "MozillaXYZ/1.0");
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'DELETE');
                curl_setopt($ch, CURLOPT_HEADER, 0);
                $data = curl_exec($ch);
                curl_close($ch);
                break;
        }
    }
    
    function response($data, $http_status=200,$format='xml'){
        if(empty($data)){
            $this->output->set_status_header(404);
            return;
        }
        
        $this->output->set_status_header($http_status);
        
        if(method_exists($this, '_format_'.$format)){
            $this->output->set_header('Content-type: '.$this->_formats[$format]);
            $final_data =  $this->{'_format_'.$format}($data);
            $this->output->set_output($final_data);
        }
        else{
            $this->output->set_output($data);
        }
    }
    
    function _format_xml($data){ 
       
       $xml = new XmlWriter();
        $xml->openMemory();
        $xml->startDocument('1.0', 'UTF-8');
        $xml->startElement('root');
	
        function write(XMLWriter $xml, $data)
        {
	 foreach($data as $key => $value)
                {
                if(is_array($value))
                        {
                                if(is_numeric($key))
                                {
                                        $key = 'ids';
                                }
                    $xml->startElement($key);
                    write($xml, $value);
                    $xml->endElement();
                    continue;
                }
                $xml->writeElement($key, $value);
            }
           
        }
        write($xml, $data);

        $xml->endElement();
        $xml->endDocument();
         
     //  echo $xml->outputMemory();
      echo $xml->flush();
   
   }


   function _format_json($data){
        return json_encode($data);
    }
}
