<?php

namespace yeh110\worker;

use think\Service as BaseService;

class Service extends BaseService
{
    public function register()
    {
        $this->commands([
            'worker'         => '\\yeh110\\worker\\command\\Worker',
            'worker:server'  => '\\yeh110\\worker\\command\\Server',
            'worker:gateway' => '\\yeh110\\worker\\command\\GatewayWorker',
        ]);
    }
}
