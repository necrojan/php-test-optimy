<?php declare(strict_types=1);

namespace TestOptimy\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'comment')]
class Comment
{
    #[ORM\Id]
    #[ORM\Column(type: 'integer')]
    #[ORM\GeneratedValue]
    protected $id;

    #[ORM\Column(type: Types::STRING)]
    protected $body;

    #[ORM\Column(name: 'created_at', type: 'datetime')]
    protected $createdAt;

    #[ORM\Column( name: 'news_id', type: Types::INTEGER)]
    protected $newsId;

    public function setId($id): Comment
    {
        $this->id = $id;

        return $this;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setBody($body): Comment
    {
        $this->body = $body;

        return $this;
    }

    public function getBody()
    {
        return $this->body;
    }

    public function setCreatedAt($createdAt): Comment
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    public function getNewsId()
    {
        return $this->newsId;
    }

    public function setNewsId($newsId): Comment
    {
        $this->newsId = $newsId;

        return $this;
    }
}