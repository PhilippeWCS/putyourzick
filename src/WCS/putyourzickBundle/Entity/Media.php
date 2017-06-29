<?php

namespace WCS\putyourzickBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * Media
 *
 * @ORM\Table(name="media")
 * @ORM\Entity(repositoryClass="WCS\putyourzickBundle\Repository\MediaRepository")
 */
class Media
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255)
     * @Assert\NotBlank()
     * @Assert\Type("string")
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255)
     * @Assert\NotBlank()
     * @Assert\Type("string")
     */
    private $url;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     * @Assert\NotBlank()
     * @Assert\Type("dateTime")
     */
    private $date;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="media")
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity="Playlist", inversedBy="media")
     */
    private $playlist;

    /**
     * @ORM\OneToMany(targetEntity="LikeMedia", mappedBy="media")
     */
    private $likeMedia;

    /**
     * @ORM\OneToMany(targetEntity="Commentaire", mappedBy="media")
     */
    private $commentaire;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set url
     *
     * @param string $url
     *
     * @return Media
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Media
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set user
     *
     * @param \WCS\putyourzickBundle\Entity\User $user
     *
     * @return Media
     */
    public function setUser(\WCS\putyourzickBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \WCS\putyourzickBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set playlist
     *
     * @param \WCS\putyourzickBundle\Entity\Playlist $playlist
     *
     * @return Media
     */
    public function setPlaylist(\WCS\putyourzickBundle\Entity\Playlist $playlist = null)
    {
        $this->playlist = $playlist;

        return $this;
    }

    /**
     * Get playlist
     *
     * @return \WCS\putyourzickBundle\Entity\Playlist
     */
    public function getPlaylist()
    {
        return $this->playlist;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->likeMedia = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add likeMedia
     *
     * @param \WCS\putyourzickBundle\Entity\LikeMedia $likeMedia
     *
     * @return Media
     */
    public function addLikeMedia(\WCS\putyourzickBundle\Entity\LikeMedia $likeMedia)
    {
        $this->likeMedia[] = $likeMedia;

        return $this;
    }

    /**
     * Remove likeMedia
     *
     * @param \WCS\putyourzickBundle\Entity\LikeMedia $likeMedia
     */
    public function removeLikeMedia(\WCS\putyourzickBundle\Entity\LikeMedia $likeMedia)
    {
        $this->likeMedia->removeElement($likeMedia);
    }

    /**
     * Get likeMedia
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLikeMedia()
    {
        return $this->likeMedia;
    }

    /**
     * Add commentaire
     *
     * @param \WCS\putyourzickBundle\Entity\Commentaire $commentaire
     *
     * @return Media
     */
    public function addCommentaire(\WCS\putyourzickBundle\Entity\Commentaire $commentaire)
    {
        $this->commentaire[] = $commentaire;

        return $this;
    }

    /**
     * Remove commentaire
     *
     * @param \WCS\putyourzickBundle\Entity\Commentaire $commentaire
     */
    public function removeCommentaire(\WCS\putyourzickBundle\Entity\Commentaire $commentaire)
    {
        $this->commentaire->removeElement($commentaire);
    }

    /**
     * Get commentaire
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }

    /**
     * Set titre
     *
     * @param string $titre
     *
     * @return Media
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }
}
