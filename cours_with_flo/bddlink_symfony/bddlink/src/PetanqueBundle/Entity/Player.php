<?php

namespace PetanqueBundle\Entity;

/**
 * Player
 */
class Player
{


    /*****************************************************************************/

   
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var \PetanqueBundle\Entity\Team
     */
    private $team;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $tournaments;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->tournaments = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Player
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set team
     *
     * @param \PetanqueBundle\Entity\Team $team
     *
     * @return Player
     */
    public function setTeam(\PetanqueBundle\Entity\Team $team = null)
    {
        $this->team = $team;

        return $this;
    }

    /**
     * Get team
     *
     * @return \PetanqueBundle\Entity\Team
     */
    public function getTeam()
    {
        return $this->team;
    }

    /**
     * Add tournament
     *
     * @param \PetanqueBundle\Entity\Tournament $tournament
     *
     * @return Player
     */
    public function addTournament(\PetanqueBundle\Entity\Tournament $tournament)
    {
        $this->tournaments[] = $tournament;

        return $this;
    }

    /**
     * Remove tournament
     *
     * @param \PetanqueBundle\Entity\Tournament $tournament
     */
    public function removeTournament(\PetanqueBundle\Entity\Tournament $tournament)
    {
        $this->tournaments->removeElement($tournament);
    }

    /**
     * Get tournaments
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTournaments()
    {
        return $this->tournaments;
    }
}
