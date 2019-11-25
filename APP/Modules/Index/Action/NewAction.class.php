<?php  
	
	Class NewAction extends Action{

		//资讯详细页
		public function index(){
            $db     =   Db::getInstance(C('RBAC_DB_DSN'));
		    $gonggao = C('gonggao');
			$banner = M('banner')->order('addtime desc')->select();
            $mai_log=M('order')->field('user,addtime,project')->order('id desc')->select();
			
			$username = session('username');
			if($username == ""){
				
					$status = 0;
				}else{
					$status = 1;
					$shouyi = M('jinbidetail')->where(array('member'=>$username))->sum('adds');
					$liuliang = M('jinbidetail')->where(array('member'=>$username,'type'=>1))->sum('adds');
					$tuiguang = M('jinbidetail')->where(array('member'=>$username,'type'=>2))->sum('adds');
					 $shouyi = sprintf('%.2f',$shouyi);
					$liuliang = sprintf('%.2f',$liuliang);
					$tuiguang = sprintf('%.2f',$tuiguang);
					$this->assign('shouyi',$shouyi);
					$this->assign('tuiguang',$tuiguang);
					$this->assign('liuliang',$liuliang);
				
			}

            $this->assign('is_notis',$_SESSION['is_notis']);
            if(!isset($_SESSION['is_notis'])){
                $_SESSION['is_notis']=1;
            }

            $user = M("banner");
            $banner = $user ->order('id asc') -> select();

            $this -> assign("banner",$banner);



            $wechat = C('wechat');
            $gonggao = C('gonggao');
            $notice=[
              'title'=>C('notice_wechat'),
              'content'=>C('notice_content')

            ];
            $this->assign('notice',$notice);
		/*	$product = M("product");
            $typeData = $product -> where("is_on = 0") ->order("id asc") -> select();*/

            $sql='select *,IFNULL(total,0) as have ,(xiangou - IFNULL(total,0) ) as unhave from ds_product as a'.
                    ' left join (select count(1) as total,sid from ds_order where user='.$username.' and zt = 1 group by sid ) as b'
/*                    ' left join (select count(1) as total,sid from ds_order where user='.$username.' and zt = 1 and UG_getTime >\''.time().'\' group by sid ) as b'*/
                    .' on b.sid=a.id '
                .' where a.is_on = 0 order by a.id asc';
            $typeData=$db->query($sql);


            $this->assign("typeData",$typeData);

            $this->assign('status',$status);
            $this->assign('mai_log',$mai_log);
			$this->assign('banner',$banner);
			$this->assign('gonggao',$gonggao);
			$this->display();
		}

        public function xiangmu(){

            $new=M('xiangmu')->where(array('id'=>1))->find();
            $this->assign('new',$new);

            $this->display();

        }

		public function help(){
            $ann = M('xiangmu')->where(array('id'=>1))->find();
            $this->assign('ann',$ann);


			$this->display();

		}
        public function video(){

            $this->display();

        }
        public function gonggao(){
		    $gonggao = C('gonggao');
            $this->assign('gonggao',$gonggao);
            $this->display();

        }
		public function xiangqing(){
            $id=I('get.id',0,'intval');

            if(empty($id)){
                $this->error('页面不存在！');
            }
            $new=M('announce')->where(array('id'=>$id))->find();
            $this->assign('new',$new);

			$this->display();

		}


	}