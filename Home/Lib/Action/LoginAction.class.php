<?php
    class LoginAction extends Action{
        public function index(){
            $this->display();

        }
        public function do_login(){
            $username=$_POST['username'];
            $password=$_POST['password'];
            $distinguish=$_POST['distinguish'];

            if($distinguish==0){
                $user=M('Teacher');
                $where['Sname']=$username;
                $where['password']=$password;
                $i=$user->where($where)->count();
                if($i>0){
                         $_SESSION['username']=$username;
                         $this->redirect('Teacher/index');
                }else{
                             $this->error("账号或密码错误");
                }
            }elseif($distinguish==1){
                $users=M('Student');
                $where['Sname']=$username;
                $where['password']=$password;
                $i=$users->where($where)->count();
                if($i>0){
                        $_SESSION['username']=$username;
                        $this->redirect('Student/index');
                }else{
                            $this->error("账号或密码错误");
                }
            }else{
                $this->error("请选择身份");
            }


        }
    }
