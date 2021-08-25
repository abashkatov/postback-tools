<?php

declare(strict_types=1);

namespace App\Entity;

use App\Repository\PostbackRepository;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @ORM\Entity(repositoryClass=PostbackRepository::class)
 */
class Postback
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private int $id;

    /**
     * @ORM\Column(type="text")
     */
    private string $conversionType;

    /**
     * @ORM\Column(type="text")
     */
    private string $conversionStatus;

    /**
     * @ORM\Column(type="text")
     */
    private string $conversionResult;

    /**
     * @ORM\Column(type="text")
     */
    private string $subAffId;

    /**
     * @ORM\Column(type="text")
     */
    private string $subId1;

    /**
     * @ORM\Column(type="text")
     */
    private string $subId2;

    /**
     * @ORM\Column(type="text")
     */
    private string $subId3;

    /**
     * @ORM\Column(type="text")
     */
    private string $subId4;

    /**
     * @ORM\Column(type="text")
     */
    private string $subId5;

    /**
     * @ORM\Column(type="text")
     */
    private string $subId6;

    /**
     * @ORM\Column(type="datetime")
     */
    private \DateTime $conversionTime;

    /**
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(type="datetime", nullable=true)
     */
    private \DateTime $createdAt;

    /**
     * @ORM\Column(type="json")
     */
    private array $params = [];

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getConversionType(): string {
      return $this->conversionType;
    }

    public function setConversionType(string $conversionType): self {
      $this->conversionType = $conversionType;
      return $this;
    }

    public function getConversionStatus(): string {
      return $this->conversionStatus;
    }

    public function setConversionStatus(string $conversionStatus): self {
      $this->conversionStatus = $conversionStatus;
      return $this;
    }

    public function getConversionResult(): string {
      return $this->conversionResult;
    }

    public function setConversionResult(string $conversionResult): self {
      $this->conversionResult = $conversionResult;
      return $this;
    }

    public function getSubAffId(): string {
      return $this->subAffId;
    }

    public function setSubAffId(string $subAffId): self {
      $this->subAffId = $subAffId;
      return $this;
    }

    public function getSubId1(): string {
      return $this->subId1;
    }

    public function setSubId1(string $subId1): self {
      $this->subId1 = $subId1;
      return $this;
    }

    public function getSubId2(): string {
      return $this->subId2;
    }

    public function setSubId2(string $subId2): self {
      $this->subId2 = $subId2;
      return $this;
    }

    public function getSubId3(): string {
      return $this->subId3;
    }

    public function setSubId3(string $subId3): self {
      $this->subId3 = $subId3;
      return $this;
    }

    public function getSubId4(): string {
      return $this->subId4;
    }

    public function setSubId4(string $subId4): self {
      $this->subId4 = $subId4;
      return $this;
    }

    public function getSubId5(): string {
      return $this->subId5;
    }

    public function setSubId5(string $subId5): self {
      $this->subId5 = $subId5;
      return $this;
    }

    public function getSubId6(): string {
      return $this->subId6;
    }

    public function setSubId6(string $subId6): self {
      $this->subId6 = $subId6;
      return $this;
    }

    public function getConversionTime(): \DateTime {
      return $this->conversionTime;
    }

    public function setConversionTime(\DateTime $conversionTime): self {
      $this->conversionTime = $conversionTime;
      return $this;
    }

    public function getParams(): ?array
    {
        return $this->params;
    }

    public function setParams(array $params): self
    {
        $this->params = $params;
        return $this;
    }

    public function getCreatedAt(): \DateTime {
      return $this->createdAt;
    }

    public function setCreatedAt(\DateTime $createdAt): self {
      $this->createdAt = $createdAt;
      return $this;
    }
}
