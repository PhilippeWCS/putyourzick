<?php

namespace WCS\putyourzickBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="WCS\putyourzickBundle\Repository\UserRepository")
 * @UniqueEntity(fields="email", message="Email already taken")
 * @UniqueEntity(fields="pseudo", message="Pseudo already taken")
 *
 */
class User
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
     * @ORM\Column(name="pseudo", type="string", length=255, unique=true)
     * @Assert\NotBlank()
     * @Assert\Type("string")
     */
    private $pseudo;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=true)
     * @Assert\Type("string")
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255, nullable=true)
     * @Assert\Type("string")
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, unique=true)
     * @Assert\NotBlank()
     * @Assert\Email()
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="motDePasse", type="string", length=64)
     */
    private $motDePasse;

    /**
     * @ORM\OneToMany(targetEntity="Playlist", mappedBy="user")
     */
    private $playlist;

    /**
     * @ORM\OneToMany(targetEntity="Invite", mappedBy="user")
     */
    private $invite;

    /**
     * @ORM\OneToMany(targetEntity="LikePlaylist", mappedBy="user")
     */
    private $likePlaylist;

    /**
     * @ORM\OneToMany(targetEntity="Media", mappedBy="user")
     */
    private $media;

    /**
     * @ORM\OneToMany(targetEntity="LikeMedia", mappedBy="user")
     */
    private $likeMedia;

    /**
     * @ORM\OneToMany(targetEntity="Commentaire", mappedBy="user")
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
     * Set pseudo
     *
     * @param string $pseudo
     *
     * @return User
     */
    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    /**
     * Get pseudo
     *
     * @return string
     */
    public function getPseudo()
    {
        return $this->pseudo;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return User
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return User
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set motDePasse
     *
     * @param string $motDePasse
     *
     * @return User
     */
    public function setMotDePasse($motDePasse)
    {
        $this->motDePasse = $motDePasse;

        return $this;
    }

    /**
     * Get motDePasse
     *
     * @return string
     */
    public function getMotDePasse()
    {
        return $this->motDePasse;
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
     * @return User
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
     * Add invite
     *
     * @param \WCS\putyourzickBundle\Entity\Invite $invite
     *
     * @return User
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
     * @param \WCS\putyourzickBundle\Entity\LikePlaylist $likePlaylist
     *
     * @return User
     */
    public function addLikePlaylist(\WCS\putyourzickBundle\Entity\LikePlaylist $likePlaylist)
    {
        $this->likePlaylist[] = $likePlaylist;

        return $this;
    }

    /**
     * Remove likePlaylist
     *
     * @param \WCS\putyourzickBundle\Entity\LikePlaylist $likePlaylist
     */
    public function removeLikePlaylist(\WCS\putyourzickBundle\Entity\LikePlaylist $likePlaylist)
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
     * @return User
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
     * Add likeMedia
     *
     * @param \WCS\putyourzickBundle\Entity\LikeMedia $likeMedia
     *
     * @return User
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
     * @return User
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
}
