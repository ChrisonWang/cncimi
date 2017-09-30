<?php	if(!defined('IN_PHPMYWIND')) exit('Request Error!');
/**
 * Created by PhpStorm.
 * User: ChrisonWang
 * Date: 2017/9/25
 * Time: 15:33
 */
$wechatClass = new Wechat();

class Wechat
{
    private $app_id = '';
    private $app_secret = '';

    /*
     * 创建唯一ID
     */
    public function genUnionCode($len = 16, $prefix='')
    {
        $chars = 'ABCDEFGHIJKLMNOPQRSTUVWYZ0123456789';
        $code = $prefix;
        $length = $len - strlen($prefix);
        for ($i = 0; $i < $length; $i++) {
            $code .= $chars[ mt_rand(0, strlen($chars) - 1) ];
        }
        return $code;
    }

    public function qrcode($url, $code, $errorCorrectionLevel='M', $matrixPointSize='6', $inter_image='')
    {
        $path = 'uploads/qrcode/'.date('Ymd', time()).'/';
        //$path = 'uploads/image/'.date('Ymd', time()).'/';
        if (!file_exists('../'.$path)){
            mkdir('../'.$path);
        }
        $native_photo = '../'.$path.$code.'.png';
        QRcode::png($url, $native_photo, $errorCorrectionLevel, $matrixPointSize, 2);
        $QR = imagecreatefromstring(file_get_contents($native_photo));
        $logo = empty($inter_image) ? './templates/images/dfthumb.png' : '../'.$inter_image;    //准备好的logo图片

        if ($logo !== FALSE) {
            $logo = imagecreatefromstring(file_get_contents($logo));
            $QR_width = imagesx($QR);   //二维码图片宽度
            $QR_height = imagesy($QR);  //二维码图片高度
            $logo_width = imagesx($logo);   //logo图片宽度
            $logo_height = imagesy($logo);  //logo图片高度
            $logo_qr_width = $QR_width / 5;
            $scale = $logo_width/$logo_qr_width;
            $logo_qr_height = $logo_height/$scale;
            $from_width = ($QR_width - $logo_qr_width) / 2;
            //重新组合图片并调整大小
            imagecopyresampled($QR, $logo, $from_width, $from_width, 0, 0, $logo_qr_width, $logo_qr_height, $logo_width, $logo_height);
        }
        imagepng($QR, $native_photo);
        return $path.$code.'.png';
    }

}