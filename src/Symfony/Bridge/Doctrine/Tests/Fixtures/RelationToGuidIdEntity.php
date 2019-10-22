<?php

namespace Symfony\Bridge\Doctrine\Tests\Fixtures;

use Doctrine\ORM\Mapping as ORM;

/** @ORM\Entity() */
class RelationToGuidIdEntity
{
    /** @ORM\Id()
     * @ORM\Column(type="integer")
     */
    public $id;

    /**
     * @ORM\ManyToOne(targetEntity="GuidIdEntity")
     */
    public $guidIdEntity;

    /**
     * @ORM\Column(type="string")
     */
    public $someStringField;
}
