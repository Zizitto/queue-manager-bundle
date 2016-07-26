<?php
/**
 * Created by mcfedr on 11/06/2016 11:12
 */

namespace Mcfedr\QueueManagerBundle\Queue;

abstract class AbstractRetryableJob extends AbstractJob implements RetryableJob
{
    /**
     * @var int
     */
    private $retryCount;

    public function __construct($name, array $arguments, array $options, $retryCount)
    {
        parent::__construct($name, $arguments, $options);
        $this->retryCount = $retryCount;
    }

    /**
     * Used to count retries
     *
     * @return int
     */
    public function getRetryCount()
    {
        return $this->retryCount;
    }
}
