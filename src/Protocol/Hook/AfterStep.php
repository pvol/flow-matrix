<?php

namespace Pvol\FlowMatrix\Protocol\Hook;

use Pvol\FlowMatrix\Protocol\Hook;

abstract class AfterStep extends Hook
{
    
    public abstract function action($flow_id, $step_id, $step_mame, $status);
  
}
