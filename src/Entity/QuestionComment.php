<?php

namespace App\Entity;

use App\Repository\QuestionCommentRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="question_comment")
 * @ORM\Entity(repositoryClass=QuestionCommentRepository::class)
 */
class QuestionComment
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
     * @var question
     *
     * @ORM\ManyToOne(targetEntity="Question")
     * @ORM\JoinColumn(name="question_id", referencedColumnName="id")
     */
    private $questionId;

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

    public function getQuestionId()
    {
        return $this->questionId;
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
