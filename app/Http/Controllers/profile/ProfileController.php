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
    				$user_info[$k]['picture'] = substr($items['data'][$i]['filename'], 0, -4) . '.png';
    				$user_info[$k]['name_ru'] = $items['data'][$i]['ru'];
    				$user_info[$k]['name_en'] = $items['data'][$i]['en_us'];
    				$user_info[$k]['description'] = $items['data'][$i]['description'];
    				continue;
    			}
    		}
    		$k++;
    	}
        return view('auth.profile', ['user_info' => $user_info]);
    }

    public function UserProfile($user)
    {
    	$data=DB::connection('mysql')->table('users')->select('items.template_id', 'items.count', 'items.slot_type', 'items.owner')
    		->join('items', 'users.id', '=', 'items.owner')
            ->where('users.id', $user)->orderby('items.template_id')->get();
        return json_decode(json_encode($data, true), true);
    }
}

