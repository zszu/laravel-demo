<?php
namespace App\Tools;
/**
 * 验证码 类
 * @param $num 验证码个数
 * @param $codeType 验证码类型
 * @param $width 宽度
 * @param $height 高度
 * @param $image 图像资源
 * @param $code 验证码
 */

class Code
{
    protected $num;
    protected $codeType;
    protected $width;
    protected $height;
    protected $image;
    protected $code;

    public function __construct($num = 4 , $codeType = 2 , $width = 100 , $height = 50){
        $this->num = $num;
        $this->codeType = $codeType;
        $this->width = $width;
        $this->height = $height;

        $this->code = $this->createCode();
        // echo $this->code;
    }
    public function __destruct(){
        imagedestroy($this->image);
    }
    // public function __get($name){
    //     return $this->$name;
    // }
    //生成验证码
    protected function createCode(){
        //通过验证码类型 生成 不同的 验证码
        switch ($this->codeType){
            case 0: //纯数字
                $code = $this->getNumberCode();
                break;
            case 1: //纯字符串
                $code = $this->getCharCode();
                break;
            case 2://字母和数字组合
                $code = $this->getNumberCharCode();
                break;
            default :
                die('该验证码类型不支持！');
        }
        return $code;
    }
    protected function getNumberCode(){
        $str = join('' ,range(0 ,9));
        return substr(str_shuffle($str) , 0 , $this->num);
    }  
    protected function getCharCode(){
        $str = join('' , range('a' , 'z'));
        $str .= $str.strtoupper($str);
        return substr(str_shuffle($str) , 0 , $this->num);
    }  
    protected function getNumberCharCode(){
        $numStr = join('' ,range(0 ,9));
        $str = join('' , range('a' , 'z'));
        $str = $numStr.$str.strtoupper($str);
        return substr(str_shuffle($str) , 0 , $this->num);
    }   
    //创建画布
    protected function createImage(){
        $this->image = imagecreatetruecolor($this->width , $this->height);

    }
    //填充背景
    protected function fillBack(){
        imagefill($this->image , 0 , 0 , $this->lightColor());
    }
    //创建背景颜色
    protected function lightColor(){
        return imagecolorallocate($this->image , mt_rand(130 , 255) , mt_rand(130 ,255) , mt_rand(130 , 255));
    }
    protected function darkColor(){
        return imagecolorallocate($this->image , mt_rand(0 , 120) , mt_rand(0 ,120) , mt_rand(0 , 120));
    }
    //添加验证码 到 画布中
    protected function drawChar(){
        $width = ceil($this->width / $this->num );

        for($i = 0 ; $i < $this->num ; $i++){
            $x = mt_rand($i * $width + 5 ,  ($i + 1) * $width - 10);
            $y = mt_rand(0 , $this->height - 25);

            imagechar($this->image , 5 , $x , $y , $this->code[$i] , $this->darkColor());
        }
    }
    //添加干扰
    protected function drawDisturb(){
        for($i = 0 ; $i < 150 ; $i ++){
            $x = mt_rand(0 , $this->width);
            $y = mt_rand(0 , $this->height);
            imagesetpixel($this->image , $x , $y , $this->lightColor());
        }
    }
    //输出 显示
    protected function show(){
        header('Content-type: image/jpeg');
        imagepng($this->image);
        // imagepng($this->image , './1.png');

    }

    public function outImage(){
        //创建画布
        $this->createImage();
        //填充背景色
        $this->fillBack();
        //验证码填充画布中
        $this->drawChar();
        //添加干扰元素
        $this->drawDisturb();
        //输出显示
        $this->show();

    }

}
