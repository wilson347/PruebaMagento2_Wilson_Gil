<?php

namespace Hiberus\Gil\Model;

use Hiberus\Gil\Api\ExamRepositoryInterface;
use Hiberus\Gil\Api\Data\ExamInterface;
use Magento\Framework\Exception\CouldNotSaveException;

class ExamRepository implements ExamRepositoryInterface
{

    protected ResourceModel\Exam $resourceExam;
    protected ExamRepositoryInterface $examRepository;

    /**
     * @param ResourceModel\Exam $resourceExam
     * @param ExamRepositoryInterface $examRepository
     */
    public function __construct(
        \Hiberus\Gil\Model\ResourceModel\Exam $resourceExam,
        \Hiberus\Gil\Api\Data\ExamInterfaceFactory $examInterfaceFactory
    ) {
        $this->resourceExam = $resourceExam;
        $this->examInterfaceFactory = $examInterfaceFactory;
    }

    /**
     * @param ExamInterface $exam
     * @return ExamInterface
     * @throws CouldNotSaveException
     */
    public function save(ExamInterface $exam) {

        try {
            $this->resourceExam->save($exam);
        } catch(\Exception $e) {
            throw new CouldNotSaveException(__($e->getMessage()));
        }

        return $exam;

    }

    /**
     * @param $examId
     * @return mixed
     */
    public function getById($examId)
    {
        try {
            $exam = $this->examInterfaceFactory->create();
            $exam->setIdExam($examId);
            $this->resourceExam->load($exam, $examId);
        } catch (\Exception $e) {
            $exam = $this->examInterfaceFactory->create();
        }

        return $exam;
    }

    /**
     * @param ExamInterface $exam
     * @return bool
     */
    public function delete(ExamInterface $exam)
    {
        try {
            $this->resourceExam->delete($exam);
        } catch (\Exception $e) {

            return false;
        }

        return true;
    }

    /**
     * @param int $examId
     * @return bool
     */
    public function deleteById($examId)
    {
        return $this->delete($this->getById($examId));
    }

}
