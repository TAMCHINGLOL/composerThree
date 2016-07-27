<?php
return array(
	//'配置项'=>'配置值'

    /*  不常用的配置项
    //禁止模块访问(默认Common和Runtime禁止访问)
    'MODULE_DENY_LIST'=>array('Common','Runtime'),
    //允许模块访问(默认创建程序模块[如User]是允许访问的)
    'MODULE_ALLOW_LIST'=>array('User','Home'),
    //设置默认初始加载模块(默认为Home模块)
    'DEFAULT_MODULE'=>'User',
    //单模块设置
    'MULTI_MODULE' => false,
    //设置PATHINFO(url模式)键值对分隔符 如:index.php/Home_User_display
    'URL_PATHINFO_DEPR' => '_',
    //修改m(模块) c(控制器) a(方法)的名称 如index.php?module=Home&controller=User&action=personal
    'VAR_MODULE' => 'module',
    'VAR_CONTROLLER' => 'controller',
    'VAR_ACTION' => 'action',
     */

    //配置连接MYSQL全局定义(数据库名,用户,密码等)
    'DB_TYPE' => 'mysql',       //数据库类型
    'DB_HOST' => 'localhost',   //服务器地址
    'DB_NAME' => 'tp',          //数据库名称
    'DB_USER' => 'root',        //用户名
    'DB_PWD' => '',             //密码
    'DB_PORT' => '3306',        //端口
    'DB_PREFIX' => 'tp_',       //数据库表前缀
//    //配置连接PDO全局定义(专用)tp3.2.2版本取消了PDO设置(默认开启) DB_DSN也是默认开启
//    'DB_TYPE' => 'pdo',         //数据库类型
//    'DB_DSN' => 'mysql:host=localhost;dbname=tp;charset=UTF8',  //连接数据库

    //页面调试工具trace
    'SHOW_PAGE_TRACE' => true,

    //配置/修改默认的模型层Model
//    'DEFAULT_M_LAYER' => 'Logic',
    //配置/修改默认的视图层View
//    'DEFAULT_V_LAYER' => 'Mobile',
    //配置/修改默认的控制器层Controller
//    'DEFAULT_C_LAYER' => 'Event',

    //配置行为绑定 行为定义class TestBehavior(extends Behavior)完成后，就需要绑定到某个标签位置才能生效，否则是不会执行的。建议写在tag.php(自动加载)配置
//    'app_init'=>array(
//        'Home\Behavior\CheckLang',
//        'Home\Behavior\CronRun',
//        '_overlay' => true,                 //覆盖系统的行为定义
//    ),
    //配置类库映射 建议写在alias.php(模块配置目录下创建(Application/Common/Conf/alias.php)/系统会自动加载)
//    'Think\Log'        =>    THINK_PATH.'Think\Log.php',
//    'Org\Util\Array'   =>    THINK_PATH.'Org\Util\Array.php'
    //配置变量过滤
//    'DEFAULT_FILTER' => 'strip_tag,htmlspecialchars',   //默认过滤方法为htmlspecialchars
    //配置伪静态后缀(默认为html)
//    'URL_HTML_SUFFIX' => 'html|shtml|xml',
//    //配置禁止url后缀 (优先级>URL_HTML_SUFFIX)
//    'URL_DENY_SUFFIX' => 'pdf|ico|png|gif',
);