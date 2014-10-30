<?php
namespace Taxonomy\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
* @ORM\Entity
* @ORM\Table(name="term_taxonomy")
*/
class TermTaxonomy
{
	/**
	* @ORM\Column(name="term_taxonomy_id", type="integer")
	* @ORM\Id
	* @ORM\GeneratedValue
	*/
	private $id;

	/**
	* @ORM\ManyToOne(targetEntity="Taxonomy\Entity\Term", cascade={"persist"})
	* @ORM\JoinColumn(name="term_id", referencedColumnName="term_id")
	*/
	private $term;

	/**
	 * @ORM\Column(length=200)
	 */
	private $taxonomy;

	/**
	 * @ORM\Column(type="text")
	 */
	private $description;

	/**
	* @ORM\ManyToOne(targetEntity="Taxonomy\Entity\TermTaxonomy")
	* @ORM\JoinColumn(name="parent", referencedColumnName="term_taxonomy_id")
	*/
	private $parent;

	/**
	* @ORM\Column(type="integer")
	*/
	private $count='';

	private $level;


	public function getId()
	{
		return $this->id;
	}

	public function setTerm($term)
	{
		$this->term = $term;
		return $this;
	}

	public function getTerm()
	{
		return $this->term;
	}

	public function setTaxonomy($taxonomy)
	{
		$this->taxonomy = $taxonomy;
		return $this;
	}

	public function getTaxonomy()
	{
		return $this->taxonomy;
	}

	public function setDescription($description)
	{
		$this->description = $description;
		return $this;
	}

	public function getDescription()
	{
		return $this->description;
	}

	public function setParent($parent)
	{
		$this->parent = $parent;
		return $this;
	}

	public function getParent()
	{
		return $this->parent;
	}

	public function setCount($count)
	{
		$this->count = $count;
		return $this;
	}

	public function getCount()
	{
		return $this->count;
	}

	public function setLevel($level){
		$this->level = $level;
		return $this;
	}

	public function getLevel(){
		return $this->level;
	}
}
?>