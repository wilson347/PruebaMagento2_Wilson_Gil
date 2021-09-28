<?php

namespace Hiberus\Gil\Block;

use Hiberus\Gil\Api\ExamRepositoryInterface;
use Hiberus\Gil\Model\ResourceModel\Exam as ResourceExam;
use Hiberus\Gil\Model\Exam;
use Hiberus\Gil\Api\Data\ExamInterfaceFactory;
use \Magento\Framework\View\Element\Template\Context;
use \Magento\Framework\Registry;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Store\Model\ScopeInterface;

class Index extends \Magento\Framework\View\Element\Template
{
    protected Registry $registry;

    protected Exam $exam;

    protected ExamRepositoryInterface $examRepository;

    protected ExamInterfaceFactory $examInterfaceFactory;

    protected ResourceExam $examResource;


    public function __construct(Context $context,
                                Registry $registry,
                                Exam $exam,
                                ExamRepositoryInterface $examRepository,
                                ExamInterfaceFactory  $examInterfaceFactory,
                                ResourceExam   $examResource,
                                array $data = []
    ) {
        $this->registry = $registry;
        $this->exam = $exam;
        $this->examRepository = $examRepository;
        $this->examInterfaceFactory = $examInterfaceFactory;
        $this->examResource = $examResource;

        parent::__construct($context, $data);
    }

    public function getAlumno() {
        $crearAlumno = $this->examInterfaceFactory->create();
        return $crearAlumno->getCollection();

    }
    public function getMarks(){
        $resultPage = $this->examInterfaceFactory->create();
        $total = $resultPage->getCollection();
        $exam = [];
        foreach ($total as $item){
            $exam[] = $item->getMark();
        }
        $avgExam = array_sum($exam)/count($exam);
        return $avgExam;
    }
}
