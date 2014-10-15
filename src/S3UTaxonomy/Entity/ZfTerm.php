<?php
namespace S3UTaxonomy\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
* @ORM\Entity
* @ORM\Table(name="zf_term")
*/
class ZfTerm
{
	/**
	* @ORM\Column(type="bigint",length=20)
	* @ORM\Id
	* @ORM\GeneratedValue
	*/
	private $term_id;

	/**
	 * @ORM\Column(length=200)
	 */
	private $name;

	/**
	 * @ORM\Column(length=200)
	 */
	private $slug;

	/**
	 * @ORM\Column(type="bigint",length=10)
	 */
	private $term_group;

	public function getTermId()
	{
		return $this->term_id;
	}

	public function setName($name)
	{
		$this->name=$name;
	}

	public function getName()
	{
		return $this->name;
	}

	public function setSlug($slug)
	{
		$this->slug=$slug;
	}

	public function getSlug()
	{
		return $this->slug;
	}

	public function setTermGroup($term_group)
	{
		$this->term_group=$term_group;
	}

	public function getTermGroup()
	{
		return $this->term_group;
	}

}
?>