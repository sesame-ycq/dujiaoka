<?php
namespace App\Service;

use App\Exceptions\RuleValidationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DB;

class TokenService {

    public function getDetalByToken(string $toekn) {
        // 校验token必填
         if (!$toekn) {
            return [];
         }
        $toeknConfig = DB::select('select * from common c where c.config_type = ?',['TOKEN_URL']);//-> WHERE c.config_type = 'TOKEN_URL'`,[0]);
        $reqUrl = $toeknConfig[0]->config;
        // 查询token使用详情
        // 创建一个请求实例
        $client = new \GuzzleHttp\Client();
        $response = $client->get($reqUrl,[
            'query'=>[
                'key'=> $toekn
            ]
        ]);
        $json = json_decode($response->getBody(),true);
        return $json['data'];
    }
}