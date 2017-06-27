<?php
// 本类由系统自动生成，仅供测试用途
class TeacherAction extends Action {
    public function _before_index(){
        //做判断，如果没有登录，跳转到登录页面
        if(!isset( $_SESSION['username']) || $_SESSION['username'] ==''){
            $this->redirect('Login/index');
        }
    }
    public function index(){

        $this->display();
    }
    /*
    修改个人信息
     */
    public function message(){
        $i=$_SESSION['username'];
        $user=M('Teacher');
        $message=$user->where("Tno=$i")->find();
        $this->assign('message',$message);
        $tcc=M('Tc');
        $s=$message['Tno'];
        $name=$tcc->where("Tno=$s")->find();
        $a=$name['Cno'];
        $scc=M('Course');
        $cour=$scc->where("Cno=$a")->find();
        $this->assign('cour',$cour);
         $this->display();
    }
    public function editmess(){
        $user=M('Teacher');
        $data['Tname'] =$_POST['name'];
        $data['Tsex'] =$_POST['sex'];
        $i=$_SESSION['username'];
        $message=$user->where("Tno=$i")->find();
        $b=$user->where("Tno=$i")->save($data);
         $tcc=M('Tc');
        $s=$message['Tno'];
        $name=$tcc->where("Tno=$s")->find();
       // var_dump($s);
        $a=$name[Cno];
        $scc=M('Course');
        $datas['Cno'] =$_POST['cnum'];
        $datas['Cname'] =$_POST['cna'];
        $datas['Ccredit'] =$_POST['cd'];
        $c=$scc->where("Cno=$a")->save($datas);
        if($b>0||$c>0){
            $this->success('修改成功',U('Teacher/index'));
        }else{
            $this->error('修改失败');
        }

    }
    public function score(){
        $s=$_SESSION['username'];
        $m=M('Tc');
        $s=$m->where("Tno=$s")->find();
        $a=$s['Cno'];
        $user=M('Sc');
        $data=$user->where("Cno=$a")->select();
        $this->assign('data',$data);
        $this->display();
        // var_dump($a);
        // var_dump($data);
    }
    public function scor(){
        $id=$_POST['id'];
        $m=M('Sc');
        $data['grade'] = $_POST['sco'];
        $i=$m->where("Id=$id")->save($data);
         if($i>0){
            $this->success('修改成功',U('Teacher/index'));
        }else{
            $this->error('修改失败');
        }
    }
     public function achange(){
            $this->display();
        }

        public function changepass(){
             $teacher=M('Teacher');
             $Sno =$_POST['sss'];
             $username = session('username');
             $oldpassword = $_POST['oldpassword'];
             $newpassword = $_POST['newpassword'];
            $where['Tname']=$username;
            $where['password']=$oldpassword;
                $i=$teacher->where($where)->count();
                if($i>0){
            $datas['Tname'] =$username;
            $datas['password'] =$newpassword;
                $c=$teacher->where("Tno=$Sno")->save($datas);
                    if ($c>0) {
                       $this->success('修改成功',U('Teacher/index'));
                    } else {
                        $this->error("修改密码失败，内部错误!");
                    }

            }else{

                         $this->error("修改密码失败，原密码错误!");
            }
            // $s=$user->add($data);
        }
    public function quit(){
         session('username',null);
        $this->success('退出成功',U('Login/index'));
    }
}
