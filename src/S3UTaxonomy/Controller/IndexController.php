<?php namespace S3UTaxonomy\Controller;

 use Zend\Mvc\Controller\AbstractActionController;
 use Zend\View\Model\ViewModel;
 use S3UTaxonomy\Entity\ZfTerm;
 use S3UTaxonomy\Entity\ZfTermTaxonomy;
 use Zend\ServiceManager\ServiceManager;

 class IndexController extends AbstractActionController
 {
 	 private $entityManager;

     public function getEntityManager()
     {
        if(!$this->entityManager)
        {
          $this->entityManager=$this->getServiceLocator()->get('Doctrine\ORM\EntityManager');
        }
        return $this->entityManager;
    }
 	public function indexAction()
 	{
 		$objectManager=$this->getEntityManager();
 		$zfterms=$objectManager->getRepository('S3UTaxonomy\Entity\ZfTerm')->findAll();

 		return array('zfTerms'=>$zfterms);
 	}

 	public function addAction()
 	{
 	}

 	public function editAction()
 	{
 	}

 	public function deleteAction()
 	{
 	}
 }
?>