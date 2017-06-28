<?php

namespace WCS\putyourzickBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LikePlaylist
 *
 * @ORM\Table(name="like_playlist")
 * @ORM\Entity(repositoryClass="WCS\putyourzickBundle\Repository\LikePlaylistRepository")
 */
class LikePlaylist
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
     * @ORM\ManyToOne(targetEntity="Playlist", inversedBy="likePlaylist")
     */
    private $playlist;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="likePlaylist")
     */
    private $user;

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
     * @return LikePlaylist
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
     * Set likeplaylist
     *
     * @param \WCS\putyourzickBundle\Entity\Playlist $likeplaylist
     *
     * @return LikePlaylist
     */
    public function setLikeplaylist(\WCS\putyourzickBundle\Entity\Playlist $likeplaylist = null)
    {
        $this->likeplaylist = $likeplaylist;

        return $this;
    }

    /**
     * Get likeplaylist
     *
     * @return \WCS\putyourzickBundle\Entity\Playlist
     */
    public function getLikeplaylist()
    {
        return $this->likeplaylist;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->playlist = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add playlist
     *
     * @param \WCS\putyourzickBundle\Entity\Playlist $playlist
     *
     * @return LikePlaylist
     */
    public function addPlaylist(\WCS\putyourzickBundle\Entity\Playlist $playlist)
    {
        $this->playlist[] = $playlist;

        return $this;
    }

    /**
     * Remove playlist
     *
     * @param \WCS\putyourzickBundle\Entity\Playlist $playlist
     */
    public function removePlaylist(\WCS\putyourzickBundle\Entity\Playlist $playlist)
    {
        $this->playlist->removeElement($playlist);
    }

    /**
     * Get playlist
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPlaylist()
    {
        return $this->playlist;
    }

    /**
     * Set playlist
     *
     * @param \WCS\putyourzickBundle\Entity\Playlist $playlist
     *
     * @return LikePlaylist
     */
    public function setPlaylist(\WCS\putyourzickBundle\Entity\Playlist $playlist = null)
    {
        $this->playlist = $playlist;

        return $this;
    }

    /**
     * Set user
     *
     * @param \WCS\putyourzickBundle\Entity\User $user
     *
     * @return LikePlaylist
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
}
