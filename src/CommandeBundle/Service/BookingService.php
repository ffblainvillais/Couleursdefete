<?php

namespace CommandeBundle\Service;

use Doctrine\ORM\EntityManagerInterface;

use ArticleBundle\Entity\Reservation;
use CommandeBundle\Entity\Commande;
use ArticleBundle\Entity\Article;

class BookingService{

    protected $em;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->em = $entityManager;
    }

    /**
     * Begin of reservation process when an Order is payed
     *
     * @param Commande $commande
     * @return bool
     */
    public function bookingPayedOrder(Commande $commande)
    {
        $commandeArticles = $this->em->getRepository('AppBundle:CommandeArticle')->findBy(['commande' => $commande]);

        foreach ($commandeArticles as $commandeArticle) {

            $article    = $commandeArticle->getArticle();
            $quantite   = $commandeArticle->getQuantite();

            $booking = $this->verificationBooking($article, $commande, $quantite);

            $this->em->persist($booking);
        }

        $commandeLots = $this->em->getRepository('AppBundle:CommandeLot')->findBy(['commande' => $commande]);

        foreach ($commandeLots as $commandeLot) {

            $lot            = $commandeLot->getLot();
            $quantityLot    = $commandeLot->getQuantite();
            $articlesLot    = $this->em->getRepository('ArticleBundle:LotArticle')->findBy(['lot' => $lot]);

            foreach($articlesLot as $articleLot) {

                $booking = $this->verificationBooking($articleLot->getArticle(), $commande, $articleLot->getQuantite() * $quantityLot);

                $this->em->persist($booking);

            }
        }

        $this->em->flush();

        return true;
    }

    /**
     * Modify the number of Article reserved for an Order or create a reservation for this Order
     *
     * @param Article $article
     * @param Commande $commande
     * @param number $quantity
     * @return Reservation|mixed
     */
    public function verificationBooking(Article $article, Commande $commande, $quantity)
    {
        $reservation = $this->getBookingByArticleAndDate($article, $commande->getDateEvenement());

        if($reservation){

            return $this->modificationBooking($reservation, $quantity);
        }

        return $this->createBooking($article, $commande->getDateEvenement(), $quantity);
    }

    /**
     * Create a Booking and return it
     *
     * @param Article $article
     * @param $dateEvenement
     * @param number $quantity
     * @return Reservation
     */
    public function createBooking(Article $article, $dateEvenement, $quantity)
    {
        $booking = new Reservation();

        $booking->setArticle($article);
        $booking->setDate($dateEvenement);
        $booking->setQuantite($quantity);

        return $booking;
    }

    /**
     * Modify the quantity of Article in one Booking and return it
     *
     * @param Reservation $booking
     * @param number $quantity
     * @return Reservation
     */
    public function modificationBooking(Reservation $booking, $quantity)
    {
        $quantityBooking = $quantity + $booking->getQuantite();

        $booking->setQuantite($quantityBooking);

        return $booking;
    }

    /**
     * Reduces the amount of an Article booked for an Order
     *
     * @param Article $article
     * @param date $date
     * @param number $quantity
     * @return bool|Reservation|object
     */
    public function removeQuantityBooking(Article $article, $date, $quantity)
    {
        $booking = $this->getBookingByArticleAndDate($article, $date);

        if ($booking) {

            if ($booking->getQuantite() == $quantity){

                $this->em->remove($booking);

            } else {

                $booking->setQuantite($booking->getQuantite() - $quantity);

                $this->em->persist($booking);
            }

            $this->em->flush();

            return $booking;
        }

        return false;
    }

    /**
     * Find a Booking with article and date and return it
     *
     * @param Article $article
     * @param date $date
     * @return Reservation|object
     */
    public function getBookingByArticleAndDate(Article $article, $date)
    {
        return $this->em->getRepository(Reservation::class)->findOneBy(["article" => $article, "date" => $date]);
    }


}