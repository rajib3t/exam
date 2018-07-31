<?php
require_once PLUGIN_INC.'admin_cssjs.php';
require_once CLASSES.'custom_post/init.php';
require_once CLASSES.'class-quiz-meta.php';
$quiz = new Custom_post_type('quiz', 'Quiz', array('title','editor'));
$question = new Custom_post_type('question', 'Question');
