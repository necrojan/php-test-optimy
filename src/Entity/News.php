<?php declare(strict_types=1);

namespace TestOptimy\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'news')]
class News
{
    #[ORM\Id]
    #[ORM\Column(type: 'integer')]
    #[ORM\GeneratedValue]
    protected $id;

    #[ORM\Column(type: Types::STRING)]
    protected $title;

    #[ORM\Column(type: Types::STRING)]
    protected $body;

    #[ORM\Column(name: 'created_at', type: 'datetime')]
    protected $createdAt;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id): News
    {
        $this->id = $id;

        return $this;
    }

    public function getTitle()
    {
        return $this->title;
    }


    public function setTitle($title): News
    {
        $this->title = $title;

        return $this;
    }

    public function getBody()
    {
        return $this->body;
    }

    public function setBody($body): News
    {
        $this->body = $body;

        return $this;
    }

    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    public function setCreatedAt($createdAt): News
    {
        $this->createdAt = $createdAt;

        return $this;
    }
}