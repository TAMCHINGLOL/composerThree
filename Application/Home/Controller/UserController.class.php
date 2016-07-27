<?php
/**
 * Created by PhpStorm.
 * User: TAM_CHING_LOL
 * Date: 2016/7/20
 * Time: 1:06
 */

namespace Home\Controller;
//use Home\Model\UserModel;
use Think\Build;
use Think\Controller;
use Think\Model;

class UserController extends Controller
{
    public function index(){
        echo 'Home UserController index';
    }
    public function display(){
        echo 'Home Controller display';
    }
    public function personal($name,$age){
        echo $name.' has been '.$age." in the year";
    }
}