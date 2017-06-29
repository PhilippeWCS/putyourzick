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
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255)
     * @Assert\NotBlank()
     * @Assert\Type("string")
     */
    private $url;


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

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->invite = new \Doctrine\Common\Collections\ArrayCollection();
        $this->likePlaylist = new \Doctrine\Common\Collections\ArrayCollection();
        $this->media = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * Get id
     *
     * @return integer
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
     * Add likePlaylist
     *
     * @param \WCS\putyourzickBundle\Entity\likePlaylist $likePlaylist
     *
     * @return Playlist
     */
    public function addLikePlaylist(\WCS\putyourzickBundle\Entity\likePlaylist $likePlaylist)
    {
        $this->likePlaylist[] = $likePlaylist;

        return $this;
    }

    /**
     * Remove likePlaylist
     *
     * @param \WCS\putyourzickBundle\Entity\likePlaylist $likePlaylist
     */
    public function removeLikePlaylist(\WCS\putyourzickBundle\Entity\likePlaylist $likePlaylist)
    {
        $this->likePlaylist->removeElement($likePlaylist);
    }

    /**
     * Get likePlaylist
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLikePlaylist()
    {
        return $this->likePlaylist;
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

    /**
     * Set url
     *
     * @param string $url
     *
     * @return Playlist
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
}
