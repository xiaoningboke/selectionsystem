<?php
    class StudentAction extends Action{


        public function index(){
            $user=M('Course');
            $i=$_SESSION['username'];
            $data=$user->select();
            $this->assign('name',$data);
            $m=M('Sc');
            $datas=$m->where("Sno=$i")->select();
            $this->assign('datas',$datas);
            $this->display();
        }


        public function xk(){
            $user=M('Sc');
            $data['Cno'] = $_POST['distinguish'];
            $data['Sno']=$_SESSION['username'];
            $s=$user->add($data);
            if($s>0){
                $this->success("选课成功");
            }else{
                $this->error("选课失败");
            }
        }


        public function show(){
            $user=M('Course');
            $s=$_GET['id'];
            $data=$user->where("Cno=$s")->find();
            $this->assign('data',$data);
            $this->display();
        }


        public function delete(){
            $user=M('Sc');
            $s=$_GET['id'];
            $a=$user->where("Id=$s")->delete();
            if($a>0){
                $this->success("退选成功");
            }else{
                $this->error("退选失败");
            }

        }


        public function quit(){
         session('username',null);
        $this->success('退出成功',U('Login/index'));
    }

        public function achange(){
            $this->display();
        }

        public function changepass(){
             $student=M('Student');
             $Sno =$_POST['sss'];
             $username = session('username');
             $oldpassword = $_POST['oldpassword'];
             $newpassword = $_POST['newpassword'];
            $where['Sname']=$username;
            $where['password']=$oldpassword;
                $i=$student->where($where)->count();
                if($i>0){
            $datas['Sname'] =$username;
            $datas['password'] =$newpassword;
                $c=$student->where("Sno=Sno")->save($datas);
                    if ($c>0) {
                       $this->success('修改成功',U('Student/index'));
                    } else {
                        $this->error("修改密码失败，内部错误!");
                    }

            }else{

                         $this->error("修改密码失败，原密码错误!");
            }
            // $s=$user->add($data);
        }
  }
