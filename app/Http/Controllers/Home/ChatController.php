<?php
namespace App\Http\Controllers\Home;
use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;
class ChatController extends BaseController{
    /**
     * @var \App\Service\TokenService
     */
    private $tokenService;
    public function __construct() 
    { 
        $this->tokenService = app('\App\Service\TokenService');
    }
    /**
     * chat功能
     */
    public function index(Request $request){
        // $chatUrl = $this -> tokenService -> getChatUrl();
        $chatUrl = dujiaoka_config_get('gptUrl');
        return $this -> render('static_pages/chat',['chatUrl'=> $chatUrl]);
    }
    /**
     * 文档功能
     */
    public function prjDocPdf(Request $request){
        $docUrl = dujiaoka_config_get('doc');
        return $this -> render('static_pages/chat',['chatUrl'=> $docUrl]);
    }
}