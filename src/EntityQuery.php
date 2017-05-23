<?php

declare(strict_types=1);

namespace UselessSoft\Queries\Doctrine;

use Kdyby\StrictObjects\Scream;

/**
 * @author David Matejka
 */
class EntityQuery implements QueryInterface
{
    use Scream;

	/** @var string */
	private $entityName;

	/** @var mixed */
	private $id;


	/**
	 * @param string
	 * @param int|mixed
	 */
	public function __construct(string $entityName, $id)
	{
		$this->entityName = $entityName;
		$this->id = $id;
	}

    /**
     * @return string
     */
    public function getEntityName() : string
    {
        return $this->entityName;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

}
