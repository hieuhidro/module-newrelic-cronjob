<?php

namespace Hidro\NewrelicCronjob\Preference;

class ProcessCronQueueObserver extends \Magento\Cron\Observer\ProcessCronQueueObserver
{
    protected function _runJob($scheduledTime, $currentTime, $jobConfig, $schedule, $groupId)
    {
        if (extension_loaded('newrelic')) {
            newrelic_end_transaction();
            newrelic_background_job();
            newrelic_set_appname(ini_get("newrelic.appname"), '', true);
            newrelic_name_transaction("/cron/run/" . $schedule->getJobCode());
        }

        parent::_runJob($scheduledTime, $currentTime, $jobConfig, $schedule, $groupId);
    }
}
