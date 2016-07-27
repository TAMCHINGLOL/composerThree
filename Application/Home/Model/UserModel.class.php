<?php
/**
 * Created by PhpStorm.
 * User: TAM_CHING_LOL
 * Date: 2016/7/22
 * Time: 1:25
 */
namespace Home\Model;
use Think\Model;

//UserModel前缀必须与表名一一对应 (这种模式类并非必须定义的,只有当存在独立的业务逻辑或者属性的时候才需要)
class UserModel extends Model{
    /*
     * 不建议使用
    protected $tablePrefix = 'thinkphp_';       //更改表前缀
    protected $tableName = 'abc';               //更改表名
    protected $trueTableName = 'thinkphp_abc';  //同时更改表前缀和表名
    protected $dbName = 'kubi';                 //更改数据库
    */
    //UserModel覆盖了基类Model的构造函数：自动连接数据库操作,所以必须加上 parent::__construct()执行数据库连接
    public function __construct()
    {
        parent::__construct();          //Model的__construct()用于连接数据库的
        echo 'Home\Model\UserModel<br>';
    }
}