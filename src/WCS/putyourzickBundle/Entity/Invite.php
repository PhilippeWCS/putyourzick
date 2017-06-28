<?php

namespace WCS\putyourzickBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Invite
 *
 * @ORM\Table(name="invite")
 * @ORM\Entity(repositoryClass="WCS\putyourzickBundle\Repository\InviteRepository")
 */
class Invite
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
     * @ORM\ManyToOne(targetEntity="User", inversedBy="invite")
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity="Playlist", inversedBy="invite")
     */
    private $playlist;

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
     * Set user
     *
     * @param \WCS\putyourzickBundle\Entity\User $user
     *
     * @return Invite
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
     * @return Invite
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
}
