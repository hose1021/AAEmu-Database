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
        $characters_list=$this->character_list($user);
        return view('auth.profile',['characters' => $characters_list]);
    }

    public function user_array($user_info,$items)
    {
        $k=0;
        while($k<count($user_info)){
            for($i=0; $i<count($items['data']); $i++) { 
                if ($items['data'][$i]['idx'] == $user_info[$k]['template_id']){
                    $owner['id'] = $user_info[$k]['owner'];
                    $owner['name'] = $user_info[$k]['name'];
                    $owner['money'] = $user_info[$k]['money'];
                    $owner['account_id'] = $user_info[$k]['account_id'];
                    $user_info[$k]['picture'] = substr($items['data'][$i]['filename'], 0, -4) . '.png';
                    $user_info[$k]['name_ru'] = $items['data'][$i]['ru'];
                    $user_info[$k]['name_en'] = $items['data'][$i]['en_us'];
                    $user_info[$k]['description'] = $items['data'][$i]['description'];
                    continue;
                }
            }
            $k++;
        }
        $owner['money'] = $this->money($owner['money']);
        $owner=array_values($owner);
        return array('user_info' => $user_info, 'owner' => $owner);
    }

    public function UserProfile($user)
    {
    	$data=DB::connection('mysql')->table('users')->select('items.template_id', 'items.count', 'items.slot_type', 'items.owner', 'characters.account_id', 'characters.name', 'characters.id','items.slot', 'money')
    		->join('characters', 'characters.account_id', '=', 'users.id')
    		->join('items', 'items.owner', '=', 'characters.id')
            ->where('characters.id', $user)->orderby('items.slot')->get();
        return json_decode(json_encode($data, true), true);
    }

    // money from int to array

	public function money($money)
    {
     	$i=number_format($money, 0, '', ' ');
     	$digits = preg_split('/ /', $i, -1, PREG_SPLIT_NO_EMPTY);
     	return $digits;
    }

    public function character_list($id)
    {
        $data=DB::connection('mysql')->table('characters')->select('characters.id','characters.level','characters.race','characters.name', 'characters.gender','characters.race')
            ->join('users', 'users.id', '=', 'characters.account_id')
            ->where('users.id', $id)->get();
        return json_decode(json_encode($data, true), true);
    }

    public function character($id)
    {
        $user = $id;
        $user_info=$this->UserProfile($user);
        $items = $this->itemsController->List();
        $result=$this->user_array($user_info,$items);
        if (Auth::getUser()->id == $result['owner'][3]) {
            return view('auth.test', ['user_info' => $result['user_info'], 'owner' => $result['owner']]);
        } else {
            abort(404);
        }
    }

}

