<?php

namespace app\admin\model\user;

use tools\traits\ModelTrait;
use tools\basic\BaseModel;

/**
 * 用户通知查看 model
 * Class UserNoticeSee
 * @package app\admin\model\user
 */
class UserNoticeSee extends BaseModel
{

    /**
     * 数据表主键
     * @var string
     */
    protected $pk = 'id';

    /**
     * 模型名称
     * @var string
     */
    protected $name = 'user_notice_see';

    use ModelTrait;
}