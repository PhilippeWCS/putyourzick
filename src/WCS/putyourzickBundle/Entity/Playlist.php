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
     * @ORM\OneToMany(targetEntity="likePlaylist", mappedBy="playlist")
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
     * Set user
     *
     * @param \WCS\putyourzickBundle\Entity\User $user
     *
     * @return Playlist
     */
    public function setuser(\WCS\putyourzickBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \WCS\putyourzickBundle\Entity\User
     */
    public function getuser()
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
    public function getplaylist()
    {
        return $this->playlist;
    }
    

    /**
     * Set likePlaylist
     *
     * @param \WCS\putyourzickBundle\Entity\likePlaylist $likePlaylist
     *
     * @return Playlist
     */
    public function setlikePlaylist(\WCS\putyourzickBundle\Entity\likePlaylist $likePlaylist = null)
    {
        $this->likePlaylist = $likePlaylist;

        return $this;
    }

    /**
     * Get likePlaylist
     *
     * @return \WCS\putyourzickBundle\Entity\likePlaylist
     */
    public function getlikePlaylist()
    {
        return $this->likePlaylist;
    }

    /**
     * Add likePlaylist
     *
     * @param \WCS\putyourzickBundle\Entity\likePlaylist $likePlaylist
     *
     * @return Playlist
     */
    public function addlikePlaylist(\WCS\putyourzickBundle\Entity\likePlaylist $likePlaylist)
    {
        $this->likePlaylist[] = $likePlaylist;

        return $this;
    }

    /**
     * Remove likePlaylist
     *
     * @param \WCS\putyourzickBundle\Entity\likePlaylist $likePlaylist
     */
    public function removelikePlaylist(\WCS\putyourzickBundle\Entity\likePlaylist $likePlaylist)
    {
        $this->likePlaylist->removeElement($likePlaylist);
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
