<?php declare(strict_types=1);

namespace Lifeformwp\PHPPUBG\DTO\MatchData\Match;

/**
 * Class MatchAttributes
 *
 * @author Serhii Kondratiuk <vielon.indie@gmail.com>
 * @package Lifeformwp\PHPPUBG\DTO\MatchData\Match
 * @since 1.1.0
 */
class MatchAttributes
{
    /**
     * @var \DateTimeImmutable|null
     */
    public $createdAt;
    /**
     * @var int|null
     */
    public $duration;
    /**
     * @var null|string
     */
    public $gameMode;
    /**
     * @var null|string
     */
    public $patchVersion;
    /**
     * @var null|string
     */
    public $shardId;
    /**
     * @var null|string
     */
    public $stats;
    /**
     * @var null|string
     */
    public $tags;
    /**
     * @var null|string
     */
    public $titleId;

    /**
     * MatchAttributes constructor.
     *
     * @param \DateTimeImmutable|null $createdAt
     * @param int|null $duration
     * @param null|string $gameMode
     * @param null|string $patchVersion
     * @param null|string $shardId
     * @param null|string $stats
     * @param null|string $tags
     * @param null|string $titleId
     */
    public function __construct(
        ?\DateTimeImmutable $createdAt,
        ?int $duration,
        ?string $gameMode,
        ?string $patchVersion,
        ?string $shardId,
        ?string $stats,
        ?string $tags,
        ?string $titleId
    ) {
        $this->createdAt = $createdAt;
        $this->duration = $duration;
        $this->gameMode = $gameMode;
        $this->patchVersion = $patchVersion;
        $this->shardId = $shardId;
        $this->stats = $stats;
        $this->tags = $tags;
        $this->titleId = $titleId;
    }

    /**
     * @param array $data
     *
     * @return MatchAttributes
     */
    public static function createFromResponse(array $data): self
    {
        return new self(
            new \DateTimeImmutable($data['createdAt']),
            $data['duration'],
            $data['gameMode'],
            $data['patchVersion'],
            $data['shardId'],
            $data['stats'],
            $data['tags'],
            $data['titleId']
        );
    }
}