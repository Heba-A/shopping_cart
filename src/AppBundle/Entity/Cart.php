<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cart
 *
 * @ORM\Table()
 * @ORM\Entity
 */


//$conn = $em->getConnection();
//$conn->getDatabasePlatform()->registerDoctrineTypeMapping('enum', 'string');


class Cart
{

//    const TYPE_ORDER = 'order';
//    const TYPE_WISHLIST = 'wishlist';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     *
     */
    private $id;


    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string")
     */
    private $type;


    /**
     * @var
     * @ORM\OneToMany(targetEntity="cart_entries", mappedBy="cartId")
     *
     */
    private $cartEntity;

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {

//        if (!in_array($type, array(self::TYPE_ORDER, self::TYPE_WISHLIST))) {
//            throw new \InvalidArgumentException("Invalid cart type");
//        }

        /** @Column(type="string", columnDefinition="ENUM('order', 'wish')") */
        $this->type = $type;
    }


    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
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

    /**
     * @return mixed
     */
    public function getCartEntity()
    {
        return $this->cartEntity;
    }

    /**
     * @param mixed $cartEntity
     */
    public function setCartEntity($cartEntity)
    {
        $this->cartEntity = $cartEntity;
    }


}

