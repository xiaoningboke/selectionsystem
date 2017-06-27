<?php
class CityAction extends Action{
    public function bj(){
       $vo=new IndexAction();
       $vo->index();
    }
    public function sh(){
        $vo=new IndexAction();
        $vo->index();
    }
    public function lc(){
        $vo=new IndexAction();
        $vo->index();
    }
    function _empty($name){
        $this->show("$name 不存在 <a href='__APP__/Index/index'>返回首页</a>");
    }
}
