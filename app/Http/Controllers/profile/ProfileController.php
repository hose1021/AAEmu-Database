<?php

namespace App\Http\Controllers\profile;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\ItemsController;
use Auth;

class ProfileController extends Controller
{

	private $itemsController;

	public function __construct(ItemsController $itemsController)
	{
	    $this->itemsController = $itemsController;
	}

    public function view()
    {
    	$user = Auth::getUser()->id;
    	$user_info=$this->UserProfile($user);
    	$items = $this->itemsController->List();
    	$k=0;
    	while($k<count($user_info)){
    		for($i=0; $i<count($items['data']); $i++) { 
    			if ($items['data'][$i]['idx'] == $user_info[$k]['template_id']){
    				$owner[$k]['id'] = $user_info[$k]['owner'];
    				$owner[$k]['name'] = $user_info[$k]['name'];
    				$owner[$k]['money'] = $user_info[$k]['money'];
    				$user_info[$k]['picture'] = substr($items['data'][$i]['filename'], 0, -4) . '.png';
    				$user_info[$k]['name_ru'] = $items['data'][$i]['ru'];
    				$user_info[$k]['name_en'] = $items['data'][$i]['en_us'];
    				$user_info[$k]['description'] = $items['data'][$i]['description'];
    				continue;
    			}
    		}
    		$k++;
    	}
    	$owner=$this->unique_multidim_array($owner,'id');
    	for ($i=0; $i < count($owner) ; $i++) { 
    		$owner[$i]['money'] = $this->money($owner[$i]['money']);
    	}
    	$owner=array_values($owner);
        return view('auth.profile', ['user_info' => $user_info, 'owner' => $owner]);
    }

    public function UserProfile($user)
    {
    	$data=DB::connection('mysql')->table('users')->select('items.template_id', 'items.count', 'items.slot_type', 'items.owner', 'characters.name', 'items.slot', 'money')
    		->join('characters', 'characters.account_id', '=', 'users.id')
    		->join('items', 'items.owner', '=', 'characters.id')
            ->where('users.id', $user)->orderby('items.slot')->get();
        return json_decode(json_encode($data, true), true);
    }

    public function unique_multidim_array($array, $key) { 
    $temp_array = array(); 
    $i = 0; 
    $key_array = array(); 
    
    foreach($array as $val) { 
        if (!in_array($val[$key], $key_array)) { 
            $key_array[$i] = $val[$key]; 
            $temp_array[$i] = $val; 
        } 
        $i++; 
    } 
    return $temp_array; 
	}

	public function money($money)
	 {
	 	$i=number_format($money, 0, '', ' ');
	 	$digits = preg_split('/ /', $i, -1, PREG_SPLIT_NO_EMPTY);
	 	return $digits;
	 } 
}

