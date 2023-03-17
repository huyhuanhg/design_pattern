<?php

use DesignPatterns\Behavioral\Iterator\IteratorTest;

require_once '../../core/index.php';

IteratorTest::testCanAddBookToList();
IteratorTest::testCanIterateOverBookList();
IteratorTest::testCanIterateOverBookListAfterRemovingBook();
IteratorTest::testCanRemoveBookFromList();
