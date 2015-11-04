<?php

namespace AppBundle\Controller;

use AppBundle\Entity\cart_entries;
use AppBundle\Entity\CartItem;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {

        $db_items = $this->getDoctrine()
            ->getRepository('AppBundle:CartItem')
            ->findAll();

        $cart_items = $this->getDoctrine()
            ->getRepository('AppBundle:cart_entries')
            ->findBy(
                array('cartId'=> '1')
            );

        $wish_cart_items = $this->getDoctrine()
            ->getRepository('AppBundle:cart_entries')
            ->findBy(
                array('cartId'=> '2')
            );

        $cart_count = 0;
        foreach ($cart_items as $item) {
            $cart_count = $cart_count + (int)$item->getQuantity();
        }

        $wish_cart_count = 0;
        foreach ($wish_cart_items as $item) {
            $wish_cart_count+= (int)$item->getQuantity();
        }

        return $this->render('default/index.html.twig', array(
			'items_list' => $db_items ,
            'cart_count' => $cart_count ,
            'wish_count' => $wish_cart_count
        ));
    }

    /**
     * @Route("/add_to_cart/{id}")
     */
    public function add_to_cart($id){

        $em = $this->getDoctrine()->getManager();
        $selected_item_in_table = $this->getDoctrine()
            ->getRepository('AppBundle:cart_entries')
            ->findOneBy(
                array('itemId' => $id , 'cartId'=> '1')
            );
        dump($selected_item_in_table); dump($selected_item_in_table->getQuantity()+1); die;
        if($selected_item_in_table){
            // update table

            $selected_item_in_table->setQuantity($selected_item_in_table->getQuantity()+1);
            $em->flush();

        }else{
            // insert table
            $inserted_item = new cart_entries();
            $inserted_item->setItemId($id);
            $inserted_item->setCartId(1);
            $inserted_item->setQuantity(1);


            $em->persist($inserted_item);
            $em->flush();
        }
        return $this->redirectToRoute('homepage');
    }

    /**
     * @Route("/add_to_wish_list/{id}")
     */
    public function add_to_wish_list($id){

        $em = $this->getDoctrine()->getManager();
        $selected_item_in_table = $this->getDoctrine()
            ->getRepository('AppBundle:cart_entries')
            ->findOneBy(
                array('itemId' => $id , 'cartId'=> '2')
            );

       // dump($selected_item_in_table); dump($selected_item_in_table->getQuantity()+1); die;

        if($selected_item_in_table){
            // update table
            //$selected_item_in_table->setQuantity($selected_item_in_table->getQuantity()+1);
            //$em->flush();
        }else{
            // insert table

            $inserted_item = new cart_entries();
            $inserted_item->setItemId($id);
            $inserted_item->setCartId(2);
            $inserted_item->setQuantity(1);

            $em = $this->getDoctrine()->getManager();

            $em->persist($inserted_item);
            $em->flush();
        }
        return $this->redirectToRoute('homepage');
    }


    /**
     * @Route("/cart_list/{id}")
     */
    public function cart_list($id){
        $em = $this->getDoctrine()->getManager();
        /** @var cart_entries $cart_items */
        $cart_items = $this->getDoctrine()
            ->getRepository('AppBundle:cart_entries')
            ->findBy(
                array('cartId'=> $id)
            );
//        dump($cart_items);die;
//$cart_items->getCartId();

        //getCartItems($id);
        //$query = $em->createQuery("SELECT u, a FROM User u JOIN u.address a WHERE a.city = 'Berlin'");
        //$users = $query->getResult();
        //=================

        /*$items = $em->createQueryBuilder('v')
            ->add('select', 'v, c')
            ->add('from', 'AppBundle:cart_entries v')
            ->innerJoin('AppBundle:CartItem', 'c')
            ->where('v.itemId = c.id')
            ->where('v.cartId = 1')
            ->getQuery()
            ->getResult();

echo var_dump($items); */

        return $this->render('default/view_cart.html.twig', array(
            'cart_items' => $cart_items ,
        ));
    }


    public function getCartItems($cart_id) {
        $qb = $this->entityManager->createQueryBuilder();

        $qb
            ->select('entry', 'item')
            ->from('AppBundle\Entity\cart_entries', 'entry')
            ->leftJoin(
                'AppBundle\Entity\item',
                'item',
                \Doctrine\ORM\Query\Expr\Join::WITH,
                'entry.item_id = item.id'
            )
            ->where('entry = :cart_id')
            ->setParameter('cart_id', $cart_id);

        $result =  $qb->getQuery()->getResult();

        echo var_dump($result);

    }
}



