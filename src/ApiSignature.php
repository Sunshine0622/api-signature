<?php

namespace ApiSignature;

/**
 * 用户生成流行API数据签名
 * @package App\Services
 * @version 1.0
 * @author liuchao
 */
class ApiSignature
{
    //构造函数
    public function __construct()
    {
    }

    /**
     * 生成Md5签名
     *
     * @param array $params 需要签名的参数集合
     * @param string $key 签名密钥
     * @return string 返回签名值
     * @author liuchao
     */
    public static function generateMd5Sign(array $params, string $key): string
    {
        // 1. 过滤值为空的参数
        $filteredParams = array_filter($params, 'strlen');

        // 2. 按照ASCII码小到大排序
        ksort($filteredParams);

        // 3. 拼接参数为key=value形式，并用&连接
        $stringA = urldecode(http_build_query($filteredParams, '', '&'));

        // 4. 在字符串末尾拼接密钥
        $stringSignTemp = $stringA . "&key=" . $key;

        // 5. 进行MD5加密并转换为大写
        return strtoupper(md5($stringSignTemp));
    }

}
