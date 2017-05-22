<?php
namespace LibretteTests\Doctrine\Queries\Model;

use Doctrine\ORM\Mapping as ORM;
use Kdyby\Doctrine\Entities\Attributes\Identifier;
use Kdyby\Doctrine\Entities\BaseEntity;

/**
 * @ORM\Entity
 */
class User
{
	use Identifier;


	/**
	 * @var string
	 * @ORM\Column(type="string")
	 */
	protected $name;


	public function __construct($name)
	{
		$this->name = $name;
	}

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

}
