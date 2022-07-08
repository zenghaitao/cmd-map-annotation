<?php
declare(strict_types=1);

namespace ZenStudio\CmdMapAnnotation\Contract;

use ZenStudio\CmdMapAnnotation\CmdMapping;

interface ICmdRouter
{
    /**
     * 依据cmd获取CmdMapping配置数据
     * @param int $cmd
     * @return CmdMapping|null
     */
    public function get(int $cmd): ?CmdMapping;
}