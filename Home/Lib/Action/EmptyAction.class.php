<?php
class EmptyAction extends Action{
        function index(){
            $city=M('City');
            $arr=$city->select();
            $this->assign('list',$arr);
            $name=MODULE_NAME;
            $this->display("City:$name");
        }
    }
