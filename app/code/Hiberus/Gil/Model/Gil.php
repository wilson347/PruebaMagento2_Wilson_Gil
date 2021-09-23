<?php

namespace Hiberus\Gil\Model;
use Hiberus\Gil\Api\Data\GilInterface;

class Gil extends \Magento\Framework\Model\AbstractModel implements  \Hiberus\Gil\Api\Data\GilInterface
{
    protected function _construct()
    {
        $this->_init(\Hiberus\Gil\Model\ResourceModel\Gil::class);
    }

    public function getIdExam()
    {
       return $this->getData('id_exam');
    }

    public function setIdExam($idExam)
    {
        return $this->setData('id_exam',$idExam);
    }

    public function getFirstName()
    {
        return $this->getData('first_name');
    }

    public function setFirstName($name)
    {
        return $this->setData('first_name',$name);
    }

    public function getLastName()
    {
        return $this->getData('last_name');
    }

    public function setLastName($lastname)
    {
        return $this->setData('last_name',$lastname);
    }

    public function getMark()
    {
        return $this->getData('mark');
    }

    public function setMark($mark)
    {
        return $this->setData('mark',$mark);
    }
}
