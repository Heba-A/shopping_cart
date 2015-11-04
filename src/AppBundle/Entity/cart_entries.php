<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * cart_entries
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class cart_entries
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="Cart", inversedBy="id")
     * @ORM\JoinColumn(name="cartId", referencedColumnName="id")
     *
     *
     **/
    private $cartId;

    /**
     * @var integer
     *
     *
     * @ORM\ManyToOne(targetEntity="CartItem", inversedBy="id")
     * @ORM\JoinColumn(name="itemId", referencedColumnName="id")
     */
    private $itemId;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantity", type="integer")
     */
    private $quantity;


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
     * Set cartId
     *
     * @param integer $cartId
     *
     * @return cart_entries
     */
    public function setCartId($cartId)
    {
        $this->cartId = $cartId;

        return $this;
    }

    /**
     * Get cartId
     *
     * @return integer
     */
    public function getCartId()
    {
        return $this->cartId;
    }

    /**
     * Set itemId
     *
     * @param integer $itemId
     *
     * @return cart_entries
     */
    public function setItemId($itemId)
    {
        $this->itemId = $itemId;

        return $this;
    }

    /**
     * Get itemId
     *
     * @return integer
     */
    public function getItemId()
    {
        return $this->itemId;
    }

    /**
     * Set quantity
     *
     * @param integer $quantity
     *
     * @return cart_entries
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return integer
     */
    public function getQuantity()
    {
        return $this->quantity;
    }
}

