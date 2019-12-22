<?php  
	/**
	 * 自动统计
	 */



	Class AutoAction extends Action{




        public function index(){



            //删除前天的每日收益记录
            $db     =   Db::getInstance(C('RBAC_DB_DSN'));
            $qiantian=date("Y-m-d",strtotime("-2 day"));
            $sql='delete from ds_todate_income_money where time< \''.$qiantian.'\'';
           $db-> query($sql);



            $todate=date("Y-m-d",time());
            $sql='select * from ds_todate_income_money  where  time=\''.$todate.'\' ';
            $member_list=$db-> query($sql);


            $one = C('lxOne_day_reward');
            $two = C('lxTwo_day_reward');
            $three = C('lxThree_shop_reward');


            $lxOne_son_num = C('lxOne_son_num');
            $lxTwo_son_num= C('lxTwo_son_num');
            $lxThree_son_num = C('lxThree_son_num');




           foreach ($member_list as $key=>$item){

               $price=$item['income_money'];//用户今日收益
                 $sql='select * from ds_member  where  username='.  $item['member'];
                 $member_info=$db-> query($sql)['0'];//用户信息


                 if(!empty($member_info['parentpath'])){
                     $parent_s=explode('|',$member_info['parentpath']);
                     $parent_num =count($parent_s)-1;//父类人数 就是多少级
                     unset($parent_s[$parent_num]);

                        /*$parent_s用户所有上级*/

                     foreach ($parent_s as $li){
                         $linxiu=is_linxiu($li) ;
                         if($linxiu['linxiu']==0){
                             continue;
                         }

                         if($linxiu['linxiu']==1){

                             $money= $lxOne_son_num>=$parent_num?$one/100*$price:0;


                         }elseif($linxiu['linxiu']==2){
                             $money= $lxTwo_son_num>=$parent_num?$two/100*$price:0;


                         }elseif($linxiu['linxiu']==3){
                             $money= $lxThree_son_num>=$parent_num?$three/100*$price:0;
                         }

                         if($money>0){


                             $member = M('member');
                             $minfo = $member->where(array('id'=>$li))->find();

                             M("member")->where(array('username' => $minfo['username']))->setInc('money', $money);
                             account_log($minfo['username'], $money, $parent_num.'级会员每日收益分成', 1, 999, 1, 0, $member_info['username']);
                             var_dump($minfo);exit;
                         }



                         //代1
                         $parent_num--;
                     }

                 }




           }
        }

    }
?>