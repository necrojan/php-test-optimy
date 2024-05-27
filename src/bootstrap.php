<?php
/**
 * This file is responsible for setting up the application.
 */
declare(strict_types=1);

use Dotenv\Dotenv;
use TestOptimy\Entity\Comment;
use TestOptimy\Entity\News;

define('ROOT_DIR', dirname(__DIR__));

require ROOT_DIR . '/vendor/autoload.php';

Tracy\Debugger::enable();

$dotenv = Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

$entityManager = require __DIR__ . '/config/database.php';

$newsRepository = $entityManager->getRepository(News::class);
$commentsRepository = $entityManager->getRepository(Comment::class);

$news = $newsRepository->findAll();
$comments = $commentsRepository->findAll();

foreach ($news as $n) {
    echo("############ NEWS " . $n->getTitle() . " ############\n");
    echo $n->getBody() . "\n";
    foreach ($comments as $comment) {
        if ($comment->getNewsId() == $n->getId()) {
            echo("Comment " . $comment->getId() . " : " . $comment->getBody() . "\n");
        }
    }
}
