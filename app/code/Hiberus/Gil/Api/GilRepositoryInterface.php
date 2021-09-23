<?php

namespace Hiberus\Gil\Api;

interface GilRepositoryInterface
{
    /**
     * @param Data\GilInterface $gilInterface
     * @return mixed
     */
    public function save(\Hiberus\Gil\Api\Data\GilInterface $gilInterface);

    /**
     * @param $idExam
     * @return \Hiberus\Gil\Api\Data\GilInterface
     */
    public function getById($idExam);

    /**
     * @param Data\GilInterface $gilInterface
     * @return boolean
     */
    public function delete(\Hiberus\Gil\Api\Data\GilInterface $gilInterface);

    /**
     * @param $idExam
     * @return boolean
     */
    public function deleteById($idExam);
}
