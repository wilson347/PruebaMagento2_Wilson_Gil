<?php

namespace Hiberus\Gil\Api\Data;

interface ExamInterface extends \Magento\Framework\Api\ExtensibleDataInterface
{

    public const TABLE_NAME = 'hiberus_exam';
    public const COLUMN_ID = 'id_exam';

    /**
     * @return int
     */
    public function getIdExam();

    /**
     * @param int $idExam
     * @return $this
     */
    public function setIdExam($idExam);

    /**
     * @return string
     */
    public function getFirstName();

    /**
     * @param string $name
     * @return $this
     */
    public function setFirstName($name);

    /**
     * @return string
     */
    public function getLastName();

    /**
     * @param string $lastname
     * @return $this
     */
    public function setLastName($lastname);

    /**
     * @return int
     */
    public function getMark();

    /**
     * @param float $mark
     * @return $this
     */
    public function setMark($mark);

}
