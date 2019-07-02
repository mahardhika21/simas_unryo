<?php 
namespace App\Http\Repository;

class CurlOpenRepo
{
	public function curl_get_data($url)
	{
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json', 'Connection: Keep-Alive'));
		curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "GET");
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
		$result = curl_exec($curl);
		curl_close($curl);

		return $result;
	}

	 function get_province()
    {
        $url    = "http://dev.farizdotid.com/api/daerahindonesia/provinsi";
        $result = $this->curl_get_data($url);
        return json_decode($result, TRUE);
    }


    function get_city($id)
    {
        $url    = "http://dev.farizdotid.com/api/daerahindonesia/provinsi/".$id."/kabupaten";
        $result = $this->curl_get_data($url);
        return json_decode($result, TRUE);   
    }
	
}