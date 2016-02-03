<?php

namespace Pagekit\todobd\Model;

use Pagekit\Application as App;
use Pagekit\Database\ORM\ModelTrait;

/**
 * @Entity(tableClass="anj_todobd")
 */
class TestBD implements \JsonSerializable {
    use ModelTrait;
    
/* --------------- FIELDS --------------- */    
    /** @Column(type="integer") @Id */
    public $ID;

    /** @Column(type="string") */
    public $NAME;

    /** @Column(type="string") */
    public $FIELD1;
 
	  /**
	   * {@inheritdoc}
	   */
    public function jsonSerialize () {
        return $this->toArray([]);
    }
}
