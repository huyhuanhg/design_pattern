<?php

include_once '../../helper/index.php';

abstract class BookPrototype {
    protected $title;
    protected $topic;
    abstract function __clone();
    function getTitle() {
        return $this->title;
    }
    function setTitle($titleIn) {
        $this->title = $titleIn;
    }
    function getTopic() {
        return $this->topic;
    }
}

class PHPBookPrototype extends BookPrototype {
    function __construct() {
        $this->topic = 'PHP';
    }
    function __clone() {
        // $this->title = clone $this->title;
    }
}

class SQLBookPrototype extends BookPrototype {
    function __construct() {
        $this->topic = 'SQL';
    }
    function __clone() {
        // $this->title = clone $this->title;
    }
}

  writeln('BEGIN TESTING PROTOTYPE PATTERN');
  writeln('');

  $phpProto = new PHPBookPrototype();
  $sqlProto = new SQLBookPrototype();

  $book1 = clone $sqlProto;
  $book1->setTitle('SQL For Cats');
  writeln('Book 1 topic: '.$book1->getTopic());
  writeln('Book 1 title: '.$book1->getTitle());
  writeln('sqlProto 1 title: '.$sqlProto->getTitle());
  writeln('');

  $book2 = clone $phpProto;
  $book2->setTitle('OReilly Learning PHP 5');
  writeln('Book 2 topic: '.$book2->getTopic());
  writeln('Book 2 title: '.$book2->getTitle());
  writeln('phpProto 2 title: '.$phpProto->getTitle());
  writeln('');

  $book3 = clone $sqlProto;
  $book3->setTitle('OReilly Learning SQL');
  writeln('Book 3 topic: '.$book3->getTopic());
  writeln('Book 3 title: '.$book3->getTitle());
  writeln('sqlProto 3 title: '.$sqlProto->getTitle());
  writeln('');

  writeln('END TESTING PROTOTYPE PATTERN');

?>


<?php


/**
 * The example class that has cloning ability. We'll see how the values of field
 * with different types will be cloned.
 */
class Prototype
{
    public $primitive;
    public $component;
    public $circularReference;

    /**
     * PHP has built-in cloning support. You can `clone` an object without
     * defining any special methods as long as it has fields of primitive types.
     * Fields containing objects retain their references in a cloned object.
     * Therefore, in some cases, you might want to clone those referenced
     * objects as well. You can do this in a special `__clone()` method.
     */
    public function __clone()
    {
        $this->component = clone $this->component;

        // Cloning an object that has a nested object with backreference
        // requires special treatment. After the cloning is completed, the
        // nested object should point to the cloned object, instead of the
        // original object.
        $this->circularReference = clone $this->circularReference;
        $this->circularReference->prototype = $this;
    }
}

class ComponentWithBackReference
{
    public $prototype;

    /**
     * Note that the constructor won't be executed during cloning. If you have
     * complex logic inside the constructor, you may need to execute it in the
     * `__clone` method as well.
     */
    public function __construct(Prototype $prototype)
    {
        $this->prototype = $prototype;
    }
}

/**
 * The client code.
 */
function clientCode()
{
    $p1 = new Prototype();
    $p1->primitive = 245;
    $p1->component = new \DateTime();
    $p1->circularReference = new ComponentWithBackReference($p1);
    $p2 = clone $p1;


    if ($p1->primitive === $p2->primitive) {
        d_strong('Primitive field values have been carried over to a clone. Yay!');
    } else {
        d_strong('Primitive field values have not been copied. Booo!');
    }

    dump($p1->component, $p2->component);

    if ($p1->component === $p2->component) {
        d_strong('Simple component has not been cloned. Booo!');
    } else {
        d_strong('Simple component has been cloned. Yay!');
    }

    dump($p1->circularReference, $p2->circularReference);

    if ($p1->circularReference === $p2->circularReference) {
        d_strong('Component with back reference has not been cloned. Booo!');
    } else {
        d_strong('Component with back reference has been cloned. Yay!');
        echo "<b></b><br />";
    }

    dump($p1->circularReference->prototype, $p2->circularReference->prototype);

    if ($p1->circularReference->prototype === $p2->circularReference->prototype) {
        d_strong('Component with back reference is linked to original object. Booo!');
    } else {
        d_strong('Component with back reference is linked to the clone. Yay!');
    }
}

clientCode();
