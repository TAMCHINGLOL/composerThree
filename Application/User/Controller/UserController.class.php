<?php
/**
 * Created by PhpStorm.
 * User: TAM_CHING_LOL
 * Date: 2016/7/20
 * Time: 1:06
 */

namespace User\Controller;


use Think\Controller;

class UserController extends Controller
{
    public function index(){
        echo 'User Controller Index';
    }

    public function display(){
        echo 'User Controller Display';
    }
}