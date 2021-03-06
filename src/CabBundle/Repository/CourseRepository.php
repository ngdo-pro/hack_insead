<?php

namespace CabBundle\Repository;

use CabBundle\Entity\Course;

/**
 * CourseRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CourseRepository extends \Doctrine\ORM\EntityRepository
{
    public function findByDestinationDate(Course $course)
    {
        $date = new \DateTime();
        $timestamp = strtotime($course->getDepartureDate());
        $date->setTimestamp($timestamp);
        $date->setTime(0,0,0);
        $course->setDepartureDate($date);
        $qb = $this->createQueryBuilder('c')
            ->select('c')
            ->where('c.departure = :from')
            ->andWhere('c.arrival = :to')
            ->andWhere('c.departureDate = :date')
            ->setParameter('from', $course->getDeparture())
            ->setParameter('to', $course->getArrival())
            ->setParameter('date', $course->getDepartureDate());
        return $qb->getQuery()->getResult();
    }
}
