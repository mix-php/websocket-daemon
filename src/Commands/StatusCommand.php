<?php

namespace Mix\WebSocket\Daemon\Commands;

/**
 * Class StatusCommand
 * @package Mix\WebSocket\Daemon\Commands\Service
 * @author liu,jian <coder.keda@gmail.com>
 */
class StatusCommand extends BaseCommand
{

    /**
     * 主函数
     */
    public function main()
    {
        $pid = $this->getServicePid();
        if (!$pid) {
            println(self::NOT_RUNNING);
            return;
        }
        println(sprintf(self::IS_RUNNING, $pid));
    }

}
