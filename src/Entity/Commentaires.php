<?php

namespace App\Entity;

use App\Repository\CommentairesRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=CommentairesRepository::class)
 */
class Commentaires
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $pseudo;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="text")
     * @Assert\Length(min=20,max=500, minMessage="Le commentaire doit avoir au moins 20 caractères", maxMessage="Max 500 caractères")
     */
    private $contenu;

    /**
     * @ORM\ManyToOne(targetEntity=Articles::class, inversedBy="commentaires", cascade={"persist"} )
     * @ORM\JoinColumn(name="article_id",referencedColumnName="id", nullable=true, onDelete="CASCADE")
     */
    private $articles;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPseudo(): ?string
    {
        return $this->pseudo;
    }

    public function setPseudo(string $pseudo): self
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getContenu(): ?string
    {
        return $this->contenu;
    }

    public function setContenu(string $contenu): self
    {
        $this->contenu = $contenu;

        return $this;
    }

    public function getArticles(): ?Articles
    {
        return $this->articles;
    }

    public function setArticles(?Articles $articles): self
    {
        $this->articles = $articles;

        return $this;
    }
}
