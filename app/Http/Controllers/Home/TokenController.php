<?php
namespace App\Http\Controllers\Home;
use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;


class TokenController extends BaseController{
    /**
     * @var \App\Service\TokenService
     */
    private $tokenService;
    public function __construct() 
    { 
        $this->tokenService = app('\App\Service\TokenService');
    }
    public function page(Request $request){
        return $this -> render('static_pages/token_detail',['data'=>[],'token'=>''],__('dujiaoka.page-title.token_detail'));
    }
    public function token(Request $request){
        $toekn = $request->input('token');
        $list = $this -> tokenService -> getDetalByToken($toekn);
        return $this -> render('static_pages/token_detail',['data'=>$list,'token'=>$toekn],__('dujiaoka.page-title.token_detail'));
    }
}