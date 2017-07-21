<?php

namespace BlogBundle\Entity;

use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Picture
 */
class Picture
{
	/**
	 * @var UploadedFile $file
	 */
	private $file;

	/**
	 * Attribut permettant de stocker le nom de mon fichier en preRemove
	 * @var string $tempName
	 */
	private $tempName;

	/**
	 * @return UploadedFile
	 */
	public function getFile()
	{
		return $this->file;
	}

	/**
	 * @param UploadedFile $file
	 */
	public function setFile(UploadedFile $file)
	{
		$this->file = $file;
	}

	/**
	 * @ORM\PrePersist
	 */
	public function preUpload()
	{
		// On donne un nom unique au fichier grâce a uniqudId et on récupère l'extension
		$this->src = uniqid() . '.' . $this->file->guessExtension();
		// Définition de la balise alt
		$alt = $this->file->getClientOriginalName();
		$ext = $this->file->guessExtension();
		$this->alt = str_replace('.'.$ext, '', $alt);
	}

	/**
	 * @ORM\PostPersist
	 */
	public function upload()
	{
		$this->file->move($this->getUploadDir(), $this->src);
	}

	/**
	 * @ORM\PreRemove
	 */
	public function preRemove()
	{
		$this->tempName = $this->src;
	}

	/**
	 * @ORM\PostRemove
	 */
	public function remove()
	{
		unlink($this->getUploadDir() . $this->src);
	}

	private function getUploadDir()
	{
		return __DIR__ . '/../../../web/uploads/images/';
	}

	// GENERATED CODE

    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $src;

    /**
     * @var string
     */
    private $alt;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set src
     *
     * @param string $src
     *
     * @return Picture
     */
    public function setSrc($src)
    {
        $this->src = $src;

        return $this;
    }

    /**
     * Get src
     *
     * @return string
     */
    public function getSrc()
    {
        return $this->src;
    }

    /**
     * Set alt
     *
     * @param string $alt
     *
     * @return Picture
     */
    public function setAlt($alt)
    {
        $this->alt = $alt;

        return $this;
    }

    /**
     * Get alt
     *
     * @return string
     */
    public function getAlt()
    {
        return $this->alt;
    }
}
