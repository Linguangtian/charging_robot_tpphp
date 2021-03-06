<?php
//消息相关控制器
Class RobotAction extends CommonAction{


    public function index(){
        $user_id=session('mid');
        $count = M('order') ->where(array('user_id'=>$user_id,'zt'=>1))->count();
        $minfo = M('member')->where(array('id'=>$user_id))->find();
        $this -> assign('minfo',$minfo);
        $this -> assign('count',$count);
        $this->display();
    }
    //商品详情
    public function pcontent(){

        $product = M("product");
        $typeData = $product -> where("is_on = 0") ->order("id asc") -> select();
        $this->assign("typeData",$typeData);


        $this->display();
    }

    //订单提交
    public function buy(){

        $id =  I('get.id',0,'intval');
        $product = M("product");

        //查询5G服务器信息
        $data = $product -> find($id);
        if(empty($data)){
            alert('5G服务器不存在',U('Robot/index'));
        }

        $letter = M('type')->where(array('id'=>$data['tid']))->getField('name');
        //判断 是否已经达到限购数量"user_id = {$user_id} and zt = {$zt}"
        $where_data=array("user"=>session('username'),"sid"=>$id);
        $where_data['end_time']=['gt',time()];
        $my_gounum=M("order")->where($where_data)->count();

        if($my_gounum >=$data['xiangou']){
            echo '<script>alert("已经达到当前5G服务器的上线！");window.history.back(-1);</script>';
            die;
        }
        if($data['stock'] < 1){
            echo '<script>alert("5G服务器已经购买完毕，请改日再来！");window.history.back(-1);</script>';
            die;
        }


        $where_data=array("user"=>session('username'));
        $where_data['end_time']=['gt',time()];
        $my_gounum_total=M("order")->where($where_data)->count();

        $user_id=M('member')->where(['username'=>session('username')])->getField('id');
        $is_linxiu= is_linxiu($user_id);

        $my_zhitui=$is_linxiu['zhitui'];

        $xiangou_menber1 = C('xiangou_menber1');
        $xiangou_menber2 = C('xiangou_menber2');
        $xiangou_menber3 = C('xiangou_menber3');
        $xiangou_menber4 = C('xiangou_menber4');

        $xiangou_num1 = C('xiangou_num1');
        $xiangou_num2 = C('xiangou_num2');
        $xiangou_num3 = C('xiangou_num3');
        $xiangou_num4 = C('xiangou_num4');


        if($xiangou_menber4<=$my_zhitui){
            if($my_gounum_total>=$xiangou_num4){
                echo '<script>alert("已经达到当前5G服务器的上线！");window.history.back(-1);</script>';
                die;
            }

        }elseif($xiangou_menber3<=$my_zhitui){
            if($my_gounum_total>=$xiangou_num3){
                echo '<script>alert("已经达到当前5G服务器的上线！");window.history.back(-1);</script>';
                die;
            }
        }elseif($xiangou_menber2<=$my_zhitui){
            if($my_gounum_total>=$xiangou_num2){
                echo '<script>alert("已经达到当前5G服务器的上线！");window.history.back(-1);</script>';
                die;
            }
        }elseif($xiangou_menber1<=$my_zhitui){
            if($my_gounum_total>=$xiangou_num1){
                echo '<script>alert("已经达到当前5G服务器的上线！");window.history.back(-1);</script>';
                die;
            }
        }



        $faquan = C('faquan');

        $username = session('username');
        $tuijian = M('member')->where(array('username'=>$username))->getField('parent');



        if($id == $faquan) {
            $jifen = M('member')->where(array('username' => $username))->getField('jifen');
            if ($jifen < $data['price']) {
                alert('账户金币不足,快去赚取金币吧！', U('task/index'));
            }

            M("member")->where(array('username' => session('username')))->setDec('jifen', $data['price']);
            $map = array();
            $map['kjbh'] = $letter . date('d') . substr(time(), -5) . sprintf('%02d', rand(0, 99));
            $map['user'] = $username;
            $map['user_id'] = session('mid');
            $map['project'] = $data['title'];
            $map['sid'] = $data['id'];
            $map['yxzq'] = $data['yxzq'];
            $map['shouyi'] = $data['shouyi'];
            $map['sumprice'] = $data['price'];
            $map['addtime'] = date('Y-m-d H:i:s');
            $map['imagepath'] = $data['thumb'];
            $map['zt'] = 1;
            $map['UG_getTime'] = time();
            if (M('order')->add($map)) {
                M('member')->where(array('username' => $username))->setInc('robotcount');
            }
        }else {


            $jinbi = getMemberField('money');
            if ($jinbi < $data['price']) {
                alert('账户余额不足,请先进行充值', U('wallet/onlinerecharge'));
            }

            M("member")->where(array('username' => session('username')))->setDec('money', $data['price']);
            account_log(session('username'), $data['price'], '购买' . $data['title'], 0);
            $map = array();
            $map['kjbh'] = $letter . date('d') . substr(time(), -5) . sprintf('%02d', rand(0, 99));
            $map['user'] = $username;
            $map['tuijian'] = $tuijian;
            $map['user_id'] = session('mid');
            $map['project'] = $data['title'];
            $map['sid'] = $data['id'];
            $map['yxzq'] = $data['yxzq'];
            $map['shouyi'] = $data['shouyi'];
            $map['sumprice'] = $data['price'];
            $map['addtime'] = date('Y-m-d H:i:s');
            $map['imagepath'] = $data['thumb'];
            $map['zt'] = 1;
            $map['UG_getTime'] = time();
            $map['end_time'] = time() + $data['yxzq'] * 3600;
            if (M('order')->add($map)) {
                M('member')->where(array('username' => $username))->setInc('robotcount');
                $one = C('ONE')/ 100 * $data['price'];
                $two = C('TWO')/ 100 * $data['price'];
                $three = C('THREE')/ 100 * $data['price'];
                $ones = C('ONES')/ 100 * $data['price'];
                $twos = C('TWOS')/ 100 * $data['price'];
                $threes = C('THREES')/ 100 * $data['price'];
                $parent = getMemberField('parent');
                $parent1 = M('member')->where(array('username' => $parent))->getField('parent');
                $parent2 = M('member')->where(array('username' => $parent1))->getField('parent');

                $parentcount = M('order')->where(array('user' => $parent))->count();
                $parentcount1 = M('order')->where(array('user' => $parent1))->count();
                $parentcount2 = M('order')->where(array('user' => $parent2))->count();


                if ($parentcount > 0) {

                    M("member")->where(array('username' => $parent))->setInc('money', $one);
                    account_log($parent, $one, '1级购买奖励', 1, 2, 1, 0, $username);

                } else {
                    M("member")->where(array('username' => $parent))->setInc('money', $ones);
                    account_log($parent, $ones, '1级购买奖励', 1, 2, 1, 0, $username);
                }





                if ($parentcount1 > 0) {
                    M("member")->where(array('username' => $parent1))->setInc('money', $two);
                    account_log($parent1, $two, '2级购买奖励', 1, 2, 1, 0, $username);

                } else {
                    M("member")->where(array('username' => $parent1))->setInc('money', $twos);
                    account_log($parent1, $twos, '2级购买奖励', 1, 2, 1, 0, $username);
                }



                if ($parentcount2 > 0) {
                    M("member")->where(array('username' => $parent2))->setInc('money', $three);
                    account_log($parent2, $three, '3级购买奖励', 1, 2, 1, 0, $username);

                } else {
                    M("member")->where(array('username' => $parent2))->setInc('money', $threes);
                    account_log($parent2, $threes, '3级购买奖励', 1, 2, 1, 0, $username);
                }




                /*---------------------------------领袖---------------*/
                $one = C('lxOne_shop_reward');
                $two = C('lxTwo_shop_reward');
                $three = C('lxThree_shop_reward');
                $lxOne_son_num = C('lxThree_son_num');
                $lxTwo_son_num = C('lxTwo_son_num');
                $lxThree_son_num = C('lxThree_son_num');
                $parentpath = getMemberField('parentpath');
                $parent_s = explode('|', $parentpath);
                $parent_num = count($parent_s) - 1;//父类人数 就是多少级
                unset($parent_s[$parent_num]);

                foreach ($parent_s as $li) {
                    $linxiu = is_linxiu($li);
                    if ($linxiu['linxiu'] == 0) {
                        continue;
                    }
                    if ($linxiu['linxiu'] == 1) {
                        $money = $lxOne_son_num >= $parent_num ? $one / 100 * $data['price'] : 0;
                    } elseif ($linxiu['linxiu'] == 2) {
                        $money = $lxTwo_son_num >= $parent_num ? $two / 100 * $data['price'] : 0;
                    } elseif ($linxiu['linxiu'] == 3) {
                        $money = $lxThree_son_num >= $parent_num ? $three / 100 * $data['price'] : 0;
                    }
                    if ($money > 0) {
                        $member = M('member');
                        $minfo = $member->where(array('id' => $li))->find();
                        M("member")->where(array('username' => $minfo['username']))->setInc('money', $money);
                        account_log($minfo['username'], $money, $parent_num . '级会员购买奖励[领袖奖励]', 1, 2, 1, 0, $username);

                    }

                    //代1
                    $parent_num--;
                }
                /*---------------------------------领袖end------------*/


            }
        }
        $user_id = session('mid');
        $p_id=M('member')->where("id = {$user_id}")->getField('parent_id');
        $daishu=C('daishu');

        if(!empty($p_id)){
            for($i=1;$i<=$daishu;$i++){
                $p_userinfo=M('member')->where("id = {$p_id}")->find();
                if(!empty($p_userinfo)){
                    if($p_userinfo['level'] == 1 ){//判断是否是城主
                        $buyjj=C('buyjj');
                        M('member')->where("id = {$p_id}")->setInc("money",$buyjj);

                        account_log($p_userinfo['username'],$buyjj,$i.'代/ID号'.$user_id,1,2);
                    }
                    $p_id=$p_userinfo['parent_id'];
                    if(empty($p_id)){
                        break;
                    }
                }else{

                    break;
                }
            }
        }


        $product->where(array("id" => $id))->setDec("stock");
        alert('5G服务器购买成功', U('Robot/robot'));
    }
    public function rank(){
        $list = M('member')->order('robotcount desc')->limit(3)->select();

        $lists = M('member')->order('robotcount desc')->limit(3,27)->select();
        $this->assign('list',$list);
        $this->assign('lists',$lists);
        $this->display();
    }

    public function robot(){
        $nowtime=time();
        $zt=I('get.zt',1,'intval');
        $user_id=session('mid');
        $order = M("order");
        import("ORG.Util.Page");
        $count = $order ->where("user_id = {$user_id}  and end_time>{$nowtime}" )->count();
        $count1 = $order ->where("user_id = {$user_id}  and end_time>{$nowtime}" )->count();
        $Page       = new Page($count,8);
        $Page->setConfig('theme', '%first% %upPage% %linkPage% %downPage% %end%');
        $show = $Page -> show();
        $jiesuan_time = C('jiesuan_time');

        $orders = $order->where("user_id = {$user_id}  and end_time>={$nowtime}" ) ->order('id desc') -> select();

        $now_day_start=date('Y-m-d',time());

        foreach($orders as $k=>&$v){

            if($v['qiandao_date']==$now_day_start){
                $v['today_sign']=1;
            }


        }

        $sum = $order ->where(array('user_id'=>$user_id))->sum('already_profit');
        $rwsm = C('rwsm');

        $mrkd = C('mrkd');
        $time = time();








        $this -> assign("jiesuan_time",$jiesuan_time);
        $this -> assign("count1",$count1);
        $this -> assign("sum",$sum);
        $this->assign('time',$time);
        $this->assign('mrkd',$mrkd);
        $this->assign('rwsm',$rwsm);
        $this -> assign("page",$show);
        $this -> assign("zt",$zt);
        $this -> assign("orders",$orders);





        $xiangou_menber1 = C('xiangou_menber1');
        $xiangou_menber2 = C('xiangou_menber2');
        $xiangou_menber3 = C('xiangou_menber3');
        $xiangou_menber4 = C('xiangou_menber4');

        $xiangou_num1 = C('xiangou_num1');
        $xiangou_num2 = C('xiangou_num2');
        $xiangou_num3 = C('xiangou_num3');
        $xiangou_num4 = C('xiangou_num4');

        $xiaolv1 = C('xiaolv1');
        $xiaolv2 = C('xiaolv2');
        $xiaolv3 = C('xiaolv3');
        $xiaolv4 = C('xiaolv4');
        $add_xiaolv = C('add_xiaolv');
        $user_id=M('member')->where(['username'=>session('username')])->getField('id');

        $is_linxiu= is_linxiu($user_id);

        $my_zhitui=$is_linxiu['zhitui'];

        $context='';
        if($xiangou_menber4<$my_zhitui){
            $add_num=$my_zhitui-$xiangou_menber4;
            $currt_xiaolv=($xiaolv4+$add_num*$add_xiaolv);
            $context='当前服务器工作效率('.$currt_xiaolv.'%),直推每增加一人工作效率增加'.$add_xiaolv.'%';
        }elseif($xiangou_menber4==$my_zhitui){
            $currt_xiaolv=$xiaolv4;
            $context='当前服务器工作效率('.$currt_xiaolv.'%),直推每增加一人工作效率增加'.$add_xiaolv.'%';
        }elseif($xiangou_menber3<=$my_zhitui){
            $currt_xiaolv=$xiaolv3;
            $xiaji_num=$xiangou_menber4-$xiangou_menber3;
            $context='当前服务器工作效率('.$currt_xiaolv.'%),直推增加（'.$xiaji_num.'人）,工作效率('.$xiaolv4.'%),直推'.$xiangou_menber4.'人以上,直推每增加一人工作效率增加'.$add_xiaolv.'%';
        }elseif($xiangou_menber2<=$my_zhitui){
            $currt_xiaolv=$xiaolv2;
            $xiaji_num=$xiangou_menber3-$xiangou_menber2;
            $context='当前服务器工作效率('.$currt_xiaolv.'%),直推增加（'.$xiaji_num.'人）,工作效率('.$xiaolv3.'%),直推('.$xiangou_menber4.'人)，工作效率('.$xiaolv4.') %,直推'.$xiangou_menber4.'人以上,直推每增加一人工作效率增加'.$add_xiaolv.'%';

        }elseif($xiangou_menber1<=$my_zhitui){
            $currt_xiaolv=$xiaolv1;
            $xiaji_num=$xiangou_menber2-$xiangou_menber1;
            $context='当前服务器工作效率('.$currt_xiaolv.'%),直推增加（'.$xiaji_num.'人）,工作效率('.$xiaolv2.'%),直推('.$xiangou_menber3.'人),工作效率('.$xiaolv3.')%,直推('.$xiangou_menber4.'人)，工作效率'.$xiaolv4.' %,直推'.$xiangou_menber4.'人以上,直推每增加一人工作效率增加'.$add_xiaolv.'%';

        }

        $this -> assign("context",$context);






        $this -> display();


    }


    public function jiesuan(){

        $id=I('get.id',0,'intval');

        $user_id=session('mid');
        $username=session('username');
        if(empty($id)){
            alert('参数丢失！',U('Robot/robot'));
        }
        $nowtime=time();
        $order=M('order')->where("id = {$id}  and user_id = {$user_id} and end_time>{$nowtime}")->find();

        if(empty($order)){
            alert('该5G服务器不存在！',U('Robot/robot'));exit;
            $this->ajaxReturn(array('result'=>0,'info'=>'该5G服务器不存在！'));
        }
        /*
         *
         * 上次领取收益时间
         *
         * $order['UG_getTime']  时间戳
         * */

        //判断与上次结算时间有没有达到24小时

        /*   if(time()-$order['UG_getTime'] < $jiesuan_time*3600){
            alert('领取收益间隔不到'.$jiesuan_time.'小时！',U('Robot/robot'));
        }*/



        $now_day_start=date('Y-m-d',time());

        //可以签到
        $n_time=0;
        if(!$order['qiandao_date']||$order['qiandao_date']<$now_day_start){
            $n_time=24*3600;

        }else{
            alert('今日已签到！',U('Robot/robot'));exit;
            $this->ajaxReturn(array('result'=>0,'info'=>'今日已签到！'));
        }

        /*
                    if($now_day_start<=$order['UG_getTime']){
                        //上次领取是今天  $order['UG_getTime']
                        //从上次领取时间到  这次要结算的时间
                        $jiesuan_time=$order['end_time']>time()?time():$order['end_time'];

                        $n_time=$jiesuan_time-$order['UG_getTime'];//$a_time


                    }else{
                        //上次领取是昨天 $now_day_start
                        $n_time=time()-$now_day_start;

                    }*/
        $shouyi=$n_time*$order['shouyi']/3600;//本次收益
        $data['qiandao_date']=$now_day_start;
        if($order['end_time']<=time()){
            $data['zt']=2;   //运行结束
            $is_over=0;
        }


        /*直推XX人 收益百分*/

        $xiangou_menber1 = C('xiangou_menber1');
        $xiangou_menber2 = C('xiangou_menber2');
        $xiangou_menber3 = C('xiangou_menber3');
        $xiangou_menber4 = C('xiangou_menber4');
        $xiaolv1 = C('xiaolv1');
        $xiaolv2 = C('xiaolv2');
        $xiaolv3 = C('xiaolv3');
        $xiaolv4 = C('xiaolv4');
        $add_xiaolv = C('add_xiaolv');

        $context='';
        $currt_xiaolv='';
        $user_id=M('member')->where(['username'=>session('username')])->getField('id');
        $is_linxiu= is_linxiu($user_id);
        $my_zhitui=$is_linxiu['zhitui'];
        if($xiangou_menber4<$my_zhitui){
            $add_num=$my_zhitui-$xiangou_menber4;
            $currt_xiaolv=($xiaolv4+$add_num*$add_xiaolv);
            $shouyi=$shouyi*$currt_xiaolv/100;

        }elseif($xiangou_menber4==$my_zhitui){
            $currt_xiaolv=$xiaolv4;
            $shouyi=$shouyi*$currt_xiaolv/100;

        }elseif($xiangou_menber3<=$my_zhitui){
            $currt_xiaolv=$xiaolv3;
            $shouyi=$shouyi*$currt_xiaolv/100;
        }elseif($xiangou_menber2<=$my_zhitui){
            $currt_xiaolv=$xiaolv2;
            $shouyi=$shouyi*$currt_xiaolv/100;
        }elseif($xiangou_menber1<=$my_zhitui){
            $currt_xiaolv=$xiaolv1;
            $shouyi=$shouyi*$currt_xiaolv/100;
        }
        if($currt_xiaolv){
            $context=',[当前工作效率'.$currt_xiaolv.'%]';
        }


        M('order')->where("id = {$id} and user_id = {$user_id}")->setInc('already_profit',$shouyi);
        M('order')->where("id = {$id}  and user_id = {$user_id}")->save($data);

        M('member')->where("id = {$user_id}")->setInc("money",$shouyi);
        account_log($username,$shouyi,'5G服务器签到收益'.$context,1,1,1,$order['id']);
        $shou1 = $shouyi * C('shou1');
        $shou2 = $shouyi * C('shou2');
        $shou3 = $shouyi * C('shou3');
        $parent = M('member')->where(array('username' => $username))->getField('parent');
        $parent1 = M('member')->where(array('username' => $parent))->getField('parent');
        $parent2 = M('member')->where(array('username' => $parent1))->getField('parent');


        if($parent&&$shou1>0){
            M("member")->where(array('username' => $parent))->setInc('money', $shou1);
            account_log($parent, $shou1, '1级签到收益奖励', 1, 2, 1, 0, $username);

        }
        if($parent1&&$shou2>0) {
            M("member")->where(array('username' => $parent1))->setInc('money', $shou2);
            account_log($parent1, $shou2, '2级签到收益奖励', 1, 2, 1, 0, $username);
        }
        if($parent2&&$shou3>0) {
            M("member")->where(array('username' => $parent2))->setInc('money', $shou3);
            account_log($parent2, $shou3, '3级签到收益奖励', 1, 2, 1, 0, $username);
        }
        $p_id=M('member')->where("id = {$user_id}")->getField('parent_id');

        $daishu=C('daishu');
        if(!empty($p_id)){
            for($i=1;$i<=$daishu;$i++){
                $p_userinfo=M('member')->where("id = {$p_id}")->find();
                if(!empty($p_userinfo)){//$p_userinfo['level']
                    if($p_userinfo['level'] == 1 ){//判断是否是城主

                        $p_shouyi=C('shoujj');
                        M('member')->where("id = {$p_id}")->setInc("money",$p_shouyi);
                        account_log($p_userinfo['username'],$p_shouyi,$i.'代/ID号'.$user_id,1,2);
                    }
                    $p_id=$p_userinfo['parent_id'];
                    if(empty($p_id)){
                        break;
                    }
                }else{
                    break;
                }
            }
        }
        alert('5G服务器收益领取成功！',U('Robot/robot'));
    }

}
?>