<?php

namespace WCS\putyourzickBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

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
     * @Assert\NotBlank()
     * @Assert\Type("string")
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="theme", type="string", length=255)
     * @Assert\NotBlank()
     * @Assert\Type("string")
     */
    private $theme;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="playlist")
     */
    private $user;

    /**
     * @ORM\OneToMany(targetEntity="Invite", mappedBy="playlist")
     */
    private $invite;

    /**
     * @ORM\OneToMany(targetEntity="LikePlaylist", mappedBy="playlist")
     */
    private $likePlaylist;

    /**
     * @ORM\OneToMany(targetEntity="Media", mappedBy="playlist")
     */
    private $media;

    public function setId($id)
    {
        $this->id = $id;
    }

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

    /**
     * Add likeplaylist
     *
     * @param \WCS\putyourzickBundle\Entity\LikePlaylist $likeplaylist
     *
     * @return Playlist
     */
    public function addLikeplaylist(\WCS\putyourzickBundle\Entity\LikePlaylist $likeplaylist)
    {
        $this->likeplaylist[] = $likeplaylist;

        return $this;
    }

    /**
     * Remove likeplaylist
     *
     * @param \WCS\putyourzickBundle\Entity\LikePlaylist $likeplaylist
     */
    public function removeLikeplaylist(\WCS\putyourzickBundle\Entity\LikePlaylist $likeplaylist)
    {
        $this->likeplaylist->removeElement($likeplaylist);
    }

    /**
     * Add invite
     *
     * @param \WCS\putyourzickBundle\Entity\Invite $invite
     *
     * @return Playlist
     */
    public function addInvite(\WCS\putyourzickBundle\Entity\Invite $invite)
    {
        $this->invite[] = $invite;

        return $this;
    }

    /**
     * Remove invite
     *
     * @param \WCS\putyourzickBundle\Entity\Invite $invite
     */
    public function removeInvite(\WCS\putyourzickBundle\Entity\Invite $invite)
    {
        $this->invite->removeElement($invite);
    }

    /**
     * Get invite
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getInvite()
    {
        return $this->invite;
    }

    /**
     * Add medium
     *
     * @param \WCS\putyourzickBundle\Entity\Media $medium
     *
     * @return Playlist
     */
    public function addMedia(\WCS\putyourzickBundle\Entity\Media $medium)
    {
        $this->media[] = $medium;

        return $this;
    }

    /**
     * Remove medium
     *
     * @param \WCS\putyourzickBundle\Entity\Media $medium
     */
    public function removeMedia(\WCS\putyourzickBundle\Entity\Media $medium)
    {
        $this->media->removeElement($medium);
    }

    /**
     * Get media
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMedia()
    {
        return $this->media;
    }
}
