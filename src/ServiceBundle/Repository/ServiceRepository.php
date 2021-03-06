<?php

namespace ServiceBundle\Repository;
use ServiceBundle\Entity\ServiceProvider;

/**
 * ServiceRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ServiceRepository extends \Doctrine\ORM\EntityRepository
{
    public function findByDiscount(ServiceProvider $serviceProvider)
    {
        $qb = $this
            ->createQueryBuilder('s')
            ->select('s')
            ->where('s.service_provider = :service_provider_id')
            ->orderBy('s.discount', 'DESC')
            ->setParameter('service_provider_id', $serviceProvider->getId());
        return $qb->getQuery()->getResult();
    }

    public function findByLikes(ServiceProvider $serviceProvider)
    {
        $qb = $this
            ->createQueryBuilder('s')
            ->select('s')
            ->where('s.service_provider = :service_provider_id')
            ->orderBy('s.likes', 'DESC')
            ->setParameter('service_provider_id', $serviceProvider->getId());
        return $qb->getQuery()->getResult();
    }

    public function findByCategory(ServiceProvider $serviceProvider)
    {
        $qb = $this
            ->createQueryBuilder('s')
            ->select('s')
            ->where('s.service_provider = :service_provider_id')
            ->orderBy('s.category', 'ASC')
            ->setParameter('service_provider_id', $serviceProvider->getId());
        return $qb->getQuery()->getResult();
    }

    public function findBySpecialOffer(ServiceProvider $serviceProvider)
    {
        $qb = $this
            ->createQueryBuilder('s')
            ->select('s')
            ->where('s.service_provider = :service_provider_id')
            ->orderBy('s.specialOffer', 'DESC')
            ->setParameter('service_provider_id', $serviceProvider->getId());
        return $qb->getQuery()->getResult();
    }
}
