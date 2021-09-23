<?php

namespace Hiberus\Gil\Model\ResourceModel;

use Hiberus\Gil\Api\Data\GilInterface;
use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Gil extends AbstractDb
{
    /**
     * @var \Magento\Framework\MetadatPoll|\Magento\Framework\EntityManager\MetadataPool
     */
    private \Magento\Framework\MetadatPoll $metadataPool;
    /**
     * @var \Magento\Framework\EntityManager|\Magento\Framework\EntityManager\EntityManager
     */
    private \Magento\Framework\EntityManager $entityManager;

    /**
     * @param \Magento\Framework\Model\ResourceModel\Db\Context $context
     * @param \Magento\Framework\EntityManager\MetadataPool $metadataPool
     * @param \Magento\Framework\EntityManager\EntityManager $entityManager
     * @param null $connectionName
     */
    public function __construct(
        \Magento\Framework\Model\ResourceModel\Db\Context $context,
        \Magento\Framework\EntityManager\MetadataPool $metadataPool,
        \Magento\Framework\EntityManager\EntityManager $entityManager,
        $connectionName = null
    )
    {
        $this->metadataPool = $metadataPool;
        $this->entityManager = $entityManager;

        parent::__construct($context,$connectionName);

    }

    /**
     * @inheridoc
     */
    protected function _construct()
    {
        $this->_init(GilInterface::TABLE_NAME, GilInterface::COLUMN_ID);
    }

    /**
     * @param \Magento\Framework\Model\AbstractModel $object
     * @return $this|AbstractDb
     * @throws \Exception
     */
    public function save(\Magento\Framework\Model\AbstractModel $object)
    {
        $this->entityManager->save($object);
        return $this;
    }

    /**
     * @param \Magento\Framework\Model\AbstractModel $object
     * @param mixed $value
     * @param null $field
     * @return AbstractDb|void
     */
    public function load(\Magento\Framework\Model\AbstractModel $object, $value, $field = null)
    {
        $this->entityManager->load($object, $value);
    }

    /**
     * @param \Magento\Framework\Model\AbstractModel $object
     * @return AbstractDb|void
     * @throws \Exception
     */
    public function delete(\Magento\Framework\Model\AbstractModel $object)
    {
        $this->entityManager->delete($object);
    }
}
