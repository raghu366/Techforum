<?php

namespace App\Entity;

use App\Repository\AnswerCommentRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="answer_comment")
 * @ORM\Entity(repositoryClass=AnswerCommentRepository::class)
 */
class AnswerComment
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var text $body
     *
     * @ORM\Column(name="body", type="text", nullable=false)
     */
    private $body;

    /**
     * @var answer
     *
     * @ORM\ManyToOne(targetEntity="Answer")
     * @ORM\JoinColumn(name="answer_id", referencedColumnName="id")
     */
    private $answerId;

    /**
     * @var Users
     *
     * @ORM\ManyToOne(targetEntity="Users")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $userId;

    /**
     * @var datetime $createdAt
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     */
    private $createdAt;

    /**
     * @var datetime $updatedAt
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=false)
     */
    private $updatedAt;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBody()
    {
        return $this->body;
    }
    public function setBody($body)
    {

        $this->body=$body;
    }

    public function getUserId()
    {
        return $this->userId;
    }

    public function getAnserId()
    {
        return $this->answerId;
    }

    public function getCreatedAt()
    {
        return $this->createdAt;
    }
    public function setCreatedAt($created_at)
    {

        $this->createdAt=$created_at;
    }

    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }
    public function setUpdatedAt($updated_at)
    {

        $this->updatedAt=$updated_at;
    }
}
