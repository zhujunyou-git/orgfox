<?php
namespace Home\Controller;

use Library\Industry;
use Think\Controller;


class IndustryController extends BaseController
{
    /*
     * 初始化
     */
    public function _initialize()
    {
        parent::_initialize();
        $this->indus = new Industry();
    }

    /*
     * 二级行业
     */
    public function one_indus(){
        if(IS_AJAX){
            $array=I('post.one_id');
            foreach($array as $key=>$val) {
                $two_indus[$key]['name']=$this->indus->oneindus('industry_id='.$val,'industry_name')['industry_name'];
                $two_indus[$key]['list']=$this->indus->allindus('industry_pid='.$val);
                }
            $this->ajaxreturn($two_indus);
        }
    }
    public function two_indus(){
        if(IS_AJAX){
            $array=I('post.two_id');
            foreach($array as $key=>$val) {
                $two_indus[$key]['name']=$this->indus->oneindus('industry_id='.$val,'industry_name')['industry_name'];
                $two_indus[$key]['list']=$this->indus->allindus('industry_pid='.$val);
            }
            $this->ajaxreturn($two_indus);
        }
    }

}
