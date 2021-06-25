<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2021/3/26
 * Time: 15:07
 */

namespace app\common;

/**
 * 谷歌翻译类
 * Class GoogleTranslate
 * @package app\common
 */
class GoogleTranslate
{

    /**
     * @param string $text 翻译原文
     * @param string $source 源语言
     * @param string $target 目标语言
     * @return string
     */
    public static function api($text = '', $source = 'en', $target = 'zh-CN')
    {
        require_once ROOT_PATH . 'vendor/GoogleTranslateClass-master/google.translate.class.php';
        $trans = new \GoogleTranslate();
        if (!$text) {
            $text = 'GoogleTranslate';
        }
        $result = $trans->translate($source, $target, $text, $type = 'cn');
        return $result;
    }
}