<?php
declare(strict_types=1);

namespace ZenStudio\CmdMapAnnotation;

use Hyperf\Di\Annotation\AnnotationCollector;
use ZenStudio\CmdMapAnnotation\Contract\ICmdRouter;

class CmdRouter implements ICmdRouter
{
    /**
     * @var CmdMapping[]
     */
    protected array $mapping;

    public function __construct()
    {
        $list = AnnotationCollector::getMethodsByAnnotation(CmdMapping::class);
        foreach ($list as $row){
            /**@var CmdMapping $WsMapping*/
            $WsMapping = $row['annotation'];
            $WsMapping->class = $row['class'];
            $WsMapping->method = $row['method'];

            $this->mapping[$WsMapping->cmd] = $WsMapping;
        }
    }

    /**
     * @param int $cmd
     * @return CmdMapping|null
     */
    public function get(int $cmd): ?CmdMapping
    {
        if(empty($this->mapping[$cmd])){
            return null;
        }
        return $this->mapping[$cmd];
    }

}