<?php
// 类库名称：聚合综合类库
// +----------------------------------------------------------------------
// | PHP version 5.6+
// +----------------------------------------------------------------------
// | Copyright (c) 2012-2014 http://www.myzy.com.cn, All rights reserved.
// +----------------------------------------------------------------------
// | Author: 阶级娃儿 <262877348@qq.com> 群：304104682
// +----------------------------------------------------------------------

namespace think;

use Pheanstalk\Pheanstalk;

class Push
{
    public function TplNotice(array $data = [], $tube_name = 'default')
    {
        $pheanstalk = new Pheanstalk('127.0.0.1',11300);

        return $result     = $pheanstalk->putInTube($tube_name, json_encode($data), Pheanstalk::DEFAULT_PRIORITY, Pheanstalk::DEFAULT_DELAY, Pheanstalk::DEFAULT_TTR);
    }
}