<?php
//echo "<pre>";
//print_r($_REQUEST); die;


function set_body($a,$params=array(),$format='json'){
  //echo "<pre>";
  //print_r($a);print_r($params); die;
        $curl   = curl_init();
        $url    = $a['api_server']."/format/{$format}";
        curl_setopt($curl, CURLOPT_URL,$url);
        curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_DIGEST);
        curl_setopt($curl, CURLOPT_USERPWD, "".$a['api_http_user'].":".$a['api_http_pass']."");
        curl_setopt($curl, CURLOPT_HTTPHEADER, array("".$a['chave_name'].":".$a['chave_acesso'].""));
        curl_setopt($curl, CURLOPT_NOBODY, 1);
        curl_exec($curl);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_HEADER, 0);
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($params));
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
  return  curl_exec($curl);
}

if(!isset($_REQUEST['server'])){
  $a  = array();
  $a['api_server']   = 'http://ead.portalava.com.br'.$_REQUEST['method'];
  $a['api_http_user'] = '1590e99c63d124e374345de71205ddb7c63a0b8d';
  $a['api_http_pass'] = 'afb94979f63f3038b84344d7ac37febe39748167';
  $a['chave_acesso']  = 'cd85461d4e581a6920595fcc73b6b138';
  $a['chave_name']    = 'EAD-API-KEY';
  echo  set_body($a, (array)json_decode($_REQUEST['data']) );
}else
  echo  set_body($_REQUEST['server'],$_REQUEST['data']);
die;

?>
