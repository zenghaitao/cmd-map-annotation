<?php
declare(strict_types=1);

namespace ZenStudio\CmdMapAnnotation;

use Hyperf\Di\Annotation\AbstractAnnotation;

/**
 * @Annotation
 * @Target({"METHOD"})
 */
class CmdMapping extends AbstractAnnotation
{
    /**
     * cmd命令
     * @var int
     */
    public int $cmd;
    /**
     * 上行数据类名称
     * @var string
     */
    public string $request;
    /**
     * 绑定的类
     * @var string
     */
    public string $class;
    /**
     * 绑定的方法
     * @var string
     */
    public string $method;

}