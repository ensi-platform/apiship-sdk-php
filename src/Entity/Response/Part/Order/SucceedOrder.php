<?php

namespace Apiship\Entity\Response\Part\Order;

use Apiship\Entity\AbstractResponsePart;

class SucceedOrder extends AbstractResponsePart
{
    /**
     * @var OrderInfo
     */
    protected $orderInfo;
    /**
     * @var OrderStatus
     */
    protected $status;

    /**
     * @return OrderInfo
     */
    public function getOrderInfo()
    {
        return $this->orderInfo;
    }

    /**
     * @param OrderInfo $orderInfo
     *
     * @return $this
     */
    public function setOrderInfo(OrderInfo $orderInfo)
    {
        $this->orderInfo = $orderInfo;
        return $this;
    }

    /**
     * @return OrderStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param OrderStatus $status
     *
     * @return $this
     */
    public function setStatus(OrderStatus $status)
    {
        $this->status = $status;
        return $this;
    }
}