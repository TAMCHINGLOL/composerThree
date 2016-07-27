<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px } a,a:hover{color:blue;}</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>版本 V{$Think.version}</div><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_55e75dfae343f5a1"></thinkad><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
    }
    public function display(){
        echo 'Home Controller';
    }
    //页面跳转 第一个参数表示提示信息，第二个参数表示跳转地址，第三个参数是跳转时间（单位为秒）
    public function changeHtml(){
//        $result = true;
//        if($result){
//            $this->sucess('新增成功','https://www.baidu.com',30);
//        }else{
//            $this->error('新增失败');
//        }
//        $this->redirect('New/category', array('cate_id' => 2), 5, '页面跳转中...');    //只能跳转内置模板
        redirect('http://www.baidu.com');       //纯粹跳转页面
    }
    //动态配置
    public function saveConfig(){
//       C('URL_MODEL',2);
        //动态生成控制器类/模型类
        Build::buildController('Home','UserDisplay');
        Build::buildModel('User','UserDisplay');
    }
    //读取配置
    public function readConfig(){
        $model = C('URL_MODEL');
        print($model);
    }
    //数据库连接
    public function conndatabase(){
        //实例化连接数据表user的对象$user
//        $user = new Model('User','tp_','mysql://root:@localhost/tp');      //由于配置了数据库表前缀，直接实例化user表，建议首字母大写User
//        $user = M('User');            //建议:使用于CURD等数据库基本操作 M()调用父类/基类Model 性能更高
        //使用原生SQL语句操作数据库
//        $user = M();                    //空M()方法
//        var_dump($user->query('select * from tp_user'));  //执行sql语句
//        $user = new UserModel();      //建议:只有当存在独立的业务逻辑或属性
        $user = D('User');              //建议:当使用具体的模型类时 D()调用父类UserModel    跨模块调用(格式D(User/User))/智能加载(加载顺序:Home/当前模块->Common模块->基类Model)
//        $user = D('User','Service');    //实例化UserService,它继承Model类
        var_dump($user->select());
        echo "连接数据库操作<br>";
    }

    //查询语句
    public function selectSql(){
        $user1 =  M('User');
        //直接赋值查询
//        var_dump($user1->where('name="路飞"')->select());         //安全性不高

        //数组索引查询
//        $condition['id'] = 2;
//        $condition['name'] = '索隆';
//        $condition['_logic'] = 'OR';                             //默认为AND,现改为OR
//        var_dump($user1->where($condition)->select());           //自动转换，安全性更高

        //对象方式查询
//        $condition = new \stdClass();           //PHP内置对象,理解为空对象
//        $condition->id = '2';
//        $condition->name = '路飞';
//        $condition->_logic = 'OR';
//        var_dump($user1->where($condition)->select());
        //where条件
//        $condition['id'] = array('EQ',1);   //id=1
        $condition['id'] = array('GT',1);   //id>1
        //其他的对应关系:NEQ不等于/EGT大于等于/LT小于/ELT小于等于/[NOT]LIKE模糊查询/[NOT]BETWEEN(不在6间查询/[NOT]IN(不在)in查询/EXP表达式查询 呃呃饿饿呃额饿额头天体战士再三再四再三再四再三再四zs,,,,,,,,,,,,,,,

        var_dump($user1->where($condition)->select());
    }
}