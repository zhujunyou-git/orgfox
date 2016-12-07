<?php
namespace Admin\Controller;
use Library\Industry;
use Think\Controller;
class IndustryController extends BaseController{
    public function _initialize()
    {
        parent::_initialize();
        $this->indus    = new Industry();
    }
    /*
     * 添加行业
     */
    public function indus(){
        if(IS_POST){
            if ($_FILES['file']['name'][0]) {
                if (I('post.industry_id') != 0) {
                    $this->error('不是一级栏目不需要图片');
                } else {
                    $upload = new \Think\Upload();// 实例化上传类
                    $upload->maxSize = 3145728;// 设置附件上传大小
                    $upload->exts = array('jpg', 'gif', 'png', 'jpeg','rar','zip');// 设置附件上传类型
                    $upload->rootPath = './Uploads/industry/'; // 设置附件上传根目录
                    $upload->savePath = ''; // 设置附件上传（子）目录
                    $pic = '/Uploads/industry/';
                    // 上传文件
                    $info = $upload->upload();
                    if (!$info) {// 上传错误提示错误信息
                        $this->error($upload->getError());
                    } else {// 上传成功 获取上传文件信息
                        foreach ($info as $file) {
                            $pic .= $file['savepath'] . $file['savename'];
                        }
                    }
                }
            }
            $data=I('post.');
            $data['time']=time();
            $data['pic']=$pic;
            //如果有id表示修改栏目更新就好
            if($data['industry_id']){
                //如果上传新的图片就把老的图片删除
                if($data['pic']){
                    $pic1=$this->indus->oneIndus('industry_id='.$data['industry_id'],'pic')['pic'];
                    unlink($_SERVER['DOCUMENT_ROOT'].$pic1);
                }
                if($this->indus->save('industry_id='.$data['industry_id'],$data)){
                    $this->success('修改成功');
                }else{
                    $this->error('修改失败');
                }
            }else{
                //新添加的数据
                if($data['industry_name']){
                    if($this->indus->add($data)){
                        $this->success('添加成功');
                    }else{
                        $this->error('添加失败');
                    }
                }else{
                    $this->error('行业名称不能为空');
                }
            }
        }
    }
    /*
     * 删除行业信息
     */
    public function del($industry_id)
    {
        if ($this->indus->del('industry_id=' . $industry_id)) {
            $this->success('删除成功');
        } else {
            $this->error('删除失败');
        }
    }

}