<?php

namespace AppDataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Groups
 *
 * @ORM\Table(name="Groups")
 * @ORM\Entity
 */
class Groups
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=50, nullable=false)
     */

    /**
     * @Assert\NotBlank()
     */

    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set name
     *
     * @param string $name
     * @return Groups
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    public function  setId($id)
    {
        $this->id = $id;

        return $this;
    }

    private $numberOfSubscribers;

    /**
     * Get numberOfSubscribers
     *
     * @return integer
     */

    public function getNumberOfSubscribers()
    {
       return $this->numberOfSubscribers;
    }

    public function setNumberOfSubscribers($number)
    {
        $this->numberOfSubscribers = $number;
        return $this;
    }

}
