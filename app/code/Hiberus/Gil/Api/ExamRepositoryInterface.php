<?php

namespace Hiberus\Gil\Api;

use \Hiberus\Gil\Api\Data\ExamInterface;

interface ExamRepositoryInterface {

    /**
     * @param ExamInterface $examInterface
     * @return ExamInterface
     */
    public function save(ExamInterface $examInterface);

    /**
     * @param $idExam
     * @return ExamInterface
     */
    public function getById($idExam);

    /**
     * @param ExamInterface $examInterface
     * @return bool
     */
    public function delete(ExamInterface $examInterface);

    /**
     * @param $idExam
     * @return bool
     */
    public function deleteById($idExam);
}
