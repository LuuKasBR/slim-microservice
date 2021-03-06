<?php
namespace App\Models\Entity;
/**
 * @Entity @Table(name="books")
 **/
class Book {
    /**
     * @var int
     * @Id @Column(type="integer") 
     * @GeneratedValue
     */
    public $id;
    /**
     * @var string
     * @Column(type="string") 
     */
    public $name;
    /**
     * @var string
     * @Column(type="string") 
     */
    public $author;
    /**
     * @return int id
     */
  

    public function getId(){
        return $this->id;
    }
    /**
     * @return string name
     */
    public function getName(){
        return $this->name;
    }
    /**
     * @return string author
     */
    public function getAuthor() {
        return $this->author;
    }    
    /**
     * @return Book()
     */
  


     /**
     * @return App\Models\Entity\Book
     */
    public function setName($name){

        if (!$name && !is_string($name)) {
            throw new \InvalidArgumentException("É necessário passar o nome do livro.", 400);
        }

        $this->name = $name;
        return $this;  
    }

     /**
     * @return App\Models\Entity\Book
     */
    public function setAuthor($author) {

        if (!$author && !is_string($author)) {
            throw new \InvalidArgumentException("Autor é necessário.", 400);
        }

        $this->author = $author;
        return $this;
    }
}