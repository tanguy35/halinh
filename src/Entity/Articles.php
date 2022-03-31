<?php

namespace App\Entity;

use App\Repository\ArticlesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;


/**
 * @ORM\Entity(repositoryClass=ArticlesRepository::class)
 * @Vich\Uploadable
 * @UniqueEntity(fields={"titre"}, message="Cet article existe déja")
 */
class Articles
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(min=3,max=100, minMessage="L'article doit avoir 3 caracteres", maxMessage="Max 100 caracteres")
     */
    private $titre;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $poster;

    /**
     * @ORM\Column(type="text")
     */
    private $content;



    /**
     * @Vich\UploadableField(mapping="article_image", fileNameProperty="poster")
     * @var File|null
     */
    private $imageFile;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     * @var \DateTime
     */
    private $updatedAt;

    private $published;

    /**
     * @ORM\ManyToOne(targetEntity=Categories::class, inversedBy="articles")
     */
    private $categories;

    /**
     * @ORM\OneToMany(targetEntity=Commentaires::class, mappedBy="articles")
     */
    private $commentaires;

    public function __construct()
    {
        $this->commentaires = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getPoster(): ?string
    {
        return $this->poster;
    }

    public function setPoster(?string $poster): self
    {
        $this->poster = $poster;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getPublished(): ?\DateTimeInterface
    {
        return $this->published;
    }

    public function setPublished(?\DateTimeInterface $published): self
    {
        $this->published = $published;

        return $this;
    }

    /**
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile|null $image
     */

    public function setImageFile(File $image = null)
    {
        $this->imageFile = $image;

        // VERY IMPORTANT:
        // It is required that at least one field changes if you are using Doctrine,
        // otherwise the event listeners won't be called and the file is lost
        if ($image) {
            // if 'updatedAt' is not defined in your entity, use another property
            $this->updatedAt = new \DateTime('now');
        }
    }

    public function getImageFile()
    {
        return $this->imageFile;
    }

//    public function setImage($image)
//    {
//        $this->image = $image;
//    }
//
//    public function getImage()
//    {
//        return $this->image;
//    }

public function getCategories(): ?Categories
{
    return $this->categories;
}

public function setCategories(?Categories $categories): self
{
    $this->categories = $categories;

    return $this;
}

/**
 * @return Collection|Commentaires[]
 */
public function getCommentaires(): Collection
{
    return $this->commentaires;
}

public function addCommentaire(Commentaires $commentaire): self
{
    if (!$this->commentaires->contains($commentaire)) {
        $this->commentaires[] = $commentaire;
        $commentaire->setArticles($this);
    }

    return $this;
}

public function removeCommentaire(Commentaires $commentaire): self
{
    if ($this->commentaires->removeElement($commentaire)) {
        // set the owning side to null (unless already changed)
        if ($commentaire->getArticles() === $this) {
            $commentaire->setArticles(null);
        }
    }

    return $this;
}
}
