<?php
namespace App\Service;

use DB;

class TokenService {
    /**
     * 获取token使用日志
     */
    public function getDetalByToken(string $toekn) {
        // 校验token必填
         if (!$toekn) {
            return [];
         }
        //$toeknConfig = DB::select('select * from common c where c.config_type = ?',['TOKEN_URL']);//-> WHERE c.config_type = 'TOKEN_URL'`,[0]);
        //$reqUrl = $toeknConfig[0]->config;
        $reqUrl = dujiaoka_config_get('tokenUrl');
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
    /**
     * 获取chat地址
     */
    public function getChatUrl() {
        $chatConfig = DB::select('select * from common c where c.config_type = ?',['CHAT_URL']);
        $cahtUrl = $chatConfig[0]->config;
        return $cahtUrl;
    }
}