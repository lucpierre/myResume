<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;

/**
 * SkillRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class SkillRepository extends \Doctrine\ORM\EntityRepository
{
	public function countSkills()
	{
		$qb = $this->createQueryBuilder('s');
		$qb->count();
		
	}
}
