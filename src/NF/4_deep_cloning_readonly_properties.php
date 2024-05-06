<?php


readonly class Post {
    public function __construct(
        public DateTime $createdAt
    ) {}

    public function __clone(): void {
        $this->createdAt = clone $this->createdAt;
    }
}

$instance = new Post(new DateTime());
$cloned = clone $instance;

$cloned->createdAt->add(new DateInterval("P2D"));