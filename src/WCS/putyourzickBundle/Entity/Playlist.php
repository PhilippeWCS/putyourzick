<?php

namespace WCS\putyourzickBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Playlist
 *
 * @ORM\Table(name="playlist")
 * @ORM\Entity(repositoryClass="WCS\putyourzickBundle\Repository\PlaylistRepository")
 */
class Playlist
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
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="theme", type="string", length=255)
     */
    private $theme;

    /**
     * @var string
     *
     * @ORM\Column(name="proprietaire", type="string", length=255)
     */
    private $proprietaire;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="playlist")
     */
    private $user;

    /**
     * @ORM\OneToMany(targetEntity="Invite", mappedBy="playlist")
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
     * Set titre
     *
     * @param string $titre
     *
     * @return Playlist
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

    /**
     * Set theme
     *
     * @param string $theme
     *
     * @return Playlist
     */
    public function setTheme($theme)
    {
        $this->theme = $theme;

        return $this;
    }

    /**
     * Get theme
     *
     * @return string
     */
    public function getTheme()
    {
        return $this->theme;
    }

    /**
     * Set proprietaire
     *
     * @param string $proprietaire
     *
     * @return Playlist
     */
    public function setProprietaire($proprietaire)
    {
        $this->proprietaire = $proprietaire;

        return $this;
    }

    /**
     * Get proprietaire
     *
     * @return string
     */
    public function getProprietaire()
    {
        return $this->proprietaire;
    }

    /**
     * Set users
     *
     * @param \WCS\putyourzickBundle\Entity\User $users
     *
     * @return Playlist
     */
    public function setUsers(\WCS\putyourzickBundle\Entity\User $users = null)
    {
        $this->users = $users;

        return $this;
    }

    /**
     * Get users
     *
     * @return \WCS\putyourzickBundle\Entity\User
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * Set user
     *
     * @param \WCS\putyourzickBundle\Entity\User $user
     *
     * @return Playlist
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
     * Constructor
     */
    public function __construct()
    {
        $this->playlist = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add playlist
     *
     * @param \WCS\putyourzickBundle\Entity\Invite $playlist
     *
     * @return Playlist
     */
    public function addPlaylist(\WCS\putyourzickBundle\Entity\Invite $playlist)
    {
        $this->playlist[] = $playlist;

        return $this;
    }

    /**
     * Remove playlist
     *
     * @param \WCS\putyourzickBundle\Entity\Invite $playlist
     */
    public function removePlaylist(\WCS\putyourzickBundle\Entity\Invite $playlist)
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
     * Get playlists
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPlaylists()
    {
        return $this->playlists;
    }

    /**
     * Set likeplaylist
     *
     * @param \WCS\putyourzickBundle\Entity\LikePlaylist $likeplaylist
     *
     * @return Playlist
     */
    public function setLikeplaylist(\WCS\putyourzickBundle\Entity\LikePlaylist $likeplaylist = null)
    {
        $this->likeplaylist = $likeplaylist;

        return $this;
    }

    /**
     * Get likeplaylist
     *
     * @return \WCS\putyourzickBundle\Entity\LikePlaylist
     */
    public function getLikeplaylist()
    {
        return $this->likeplaylist;
    }
}
