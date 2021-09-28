<?php

namespace Hiberus\Gil\Model\ResourceModel\Exam;
use \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
class Collection extends AbstractCollection
{
    /**
     * Define resource model     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Hiberus\Gil\Model\Exam', 'Hiberus\Gil\Model\ResourceModel\Exam');
    }
}
