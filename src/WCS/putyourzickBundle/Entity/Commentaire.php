<?php

namespace WCS\putyourzickBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commentaire
 *
 * @ORM\Table(name="commentaire")
 * @ORM\Entity(repositoryClass="WCS\putyourzickBundle\Repository\CommentaireRepository")
 */
class Commentaire
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
     * @ORM\Column(name="commentaire", type="text")
     */
    private $commentaire;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="commentaire")
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity="media", inversedBy="commentaire")
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
     * Set commentaire
     *
     * @param string $commentaire
     *
     * @return Commentaire
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    /**
     * Get commentaire
     *
     * @return string
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }

    /**
     * Set user
     *
     * @param \WCS\putyourzickBundle\Entity\User $user
     *
     * @return Commentaire
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
     * @param \WCS\putyourzickBundle\Entity\media $media
     *
     * @return Commentaire
     */
    public function setMedia(\WCS\putyourzickBundle\Entity\media $media = null)
    {
        $this->media = $media;

        return $this;
    }

    /**
     * Get media
     *
     * @return \WCS\putyourzickBundle\Entity\media
     */
    public function getMedia()
    {
        return $this->media;
    }
}
