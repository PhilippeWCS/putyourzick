<?php

namespace WCS\putyourzickBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LikeMedia
 *
 * @ORM\Table(name="like_media")
 * @ORM\Entity(repositoryClass="WCS\putyourzickBundle\Repository\LikeMediaRepository")
 */
class LikeMedia
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
     * @var int
     *
     * @ORM\Column(name="nombre", type="integer")
     */
    private $nombre;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="likeMedia")
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity="Media", inversedBy="likeMedia")
     */
    private $media;


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
     * Set nombre
     *
     * @param integer $nombre
     *
     * @return LikeMedia
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return int
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set user
     *
     * @param \WCS\putyourzickBundle\Entity\User $user
     *
     * @return LikeMedia
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
     * Set media
     *
     * @param \WCS\putyourzickBundle\Entity\Media $media
     *
     * @return LikeMedia
     */
    public function setMedia(\WCS\putyourzickBundle\Entity\Media $media = null)
    {
        $this->media = $media;

        return $this;
    }

    /**
     * Get media
     *
     * @return \WCS\putyourzickBundle\Entity\Media
     */
    public function getMedia()
    {
        return $this->media;
    }
}
