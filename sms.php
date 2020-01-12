<?php
changes in sms
 $id   = get_company_pref('1st4connect_account_id');
 $pass = get_company_pref('1st4connect_account_password');

 
  // Data for text message
  $lang = 'ENGLISH';
  $mask = 'SAFASHA'; 
  $type = 'JSON'; 
  $to = '923025199794';
  $message = $data['message'];
  $message = urlencode($message);
  
  // Prepare data for POST request 
  $data = "id=".$id."&pass=".$pass."&msg=".$message."&to=".$to."&lang=".$lang."&mask=".$mask."&type=".$type;   
  
  // Send the POST request with cURL 
  $ch = curl_init('http://www.outreach.pk/api/sendsms.php/sendsms/url');
  curl_setopt($ch, CURLOPT_POST, true);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $result = curl_exec($ch); 

   $result = json_decode($result);
   print_r($result);

?>