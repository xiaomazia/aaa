<?php
  namespace api\controller;
  use thinkphp\controller;
  class Index extends controller{
      public function __construct(App $app = null)
    {
        parent::__construct($app);
    }
    public function Index(){
      $res = 查询出来的内容;
      $this->assign('res',$res);
      return $this->fetch();
    }
    public function detils(){
      
    }
  }
