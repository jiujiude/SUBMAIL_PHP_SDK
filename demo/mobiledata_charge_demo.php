<?PHP
    /*
     | Submail mobiledata/charge API demo
     | SUBMAIL SDK Version 2.3 --PHP
     | copyright 2011 - 2016 SUBMAIL
     |--------------------------------------------------------------------------
     */
    
    /*
     |载入 app_config 文件
     |--------------------------------------------------------------------------
     */
    require '../app_config.php';
    
    /*
     |载入 SUBMAILAutoload 文件
     |--------------------------------------------------------------------------
     */
    
    require_once('../SUBMAILAutoload.php');
    
    /*
     |初始化 MOBILEDATACharge 类
     |--------------------------------------------------------------------------
     */
    
    $submail=new MOBILEDATACharge($mobiledata_configs);
    
    /*
     |可选参数
     |--------------------------------------------------------------------------
     |设置移动号段手机流量包类型
     |如果您提交的号码中包含中国移动号段，则此参数必选
     |--------------------------------------------------------------------------
     */
    
    $submail->SetCM('cm10');
    
    /*
     |可选参数
     |--------------------------------------------------------------------------
     |设置联通号段手机流量包类型
     |如果您提交的号码中包含中国联通号段，则此参数必选
     |--------------------------------------------------------------------------
     */
    
    $submail->SetCU('cu20');
    
    /*
     |可选参数
     |--------------------------------------------------------------------------
     |设置电信号段手机流量包类型
     |如果您提交的号码中包含中国电信号段，则此参数必选
     |--------------------------------------------------------------------------
     */
    
    $submail->SetCT('ct10');
    
    /*
     |可选参数
     |--------------------------------------------------------------------------
     |添加运营商查询11位手机号码
     |多号码请重复执行 AddTo 方法
     |addTO和addressbook二选一，每次请求必须传递至少一个手机号码或地址簿中包含的手机号码
     |--------------------------------------------------------------------------
     */
    
    $submail->AddTo('13*********');
    
    
    /*
     |可选参数
     |--------------------------------------------------------------------------
     |添加地址薄标识
     |可多次调用
     |addTO和addressbook二选一，每次请求必须传递至少一个手机号码或地址簿中包含的手机号码
     |--------------------------------------------------------------------------
     */
    
    $submail->AddAddressbook('subscribe');
    
    
    /*
     |调用 TOService 方法获取手机运营商分类
     |--------------------------------------------------------------------------
     */
    
    $charge=$submail->charge();
    
    
    /*
     |打印服务器返回值
     |--------------------------------------------------------------------------
     */
    
    print_r($charge);