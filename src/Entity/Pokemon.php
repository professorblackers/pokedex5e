<?php

namespace App\Entity;

use App\Repository\PokemonRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PokemonRepository::class)]
class Pokemon
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    public $id;

    #[ORM\Column(type: 'string', length: 255)]
    public $pokedexNumber;

    #[ORM\Column(type: 'string', length: 255)]
    public $name;

    #[ORM\Column(type: 'string', length: 255)]
    public $primaryType;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    public $secondaryType;

    #[ORM\Column(type: 'integer')]
    public $stage;

    #[ORM\Column(type: 'integer')]
    public $maxStage;

    #[ORM\Column(type: 'float')]
    public $speciesRating;

    #[ORM\Column(type: 'integer')]
    public $armorClass;

    #[ORM\Column(type: 'integer')]
    public $hitDice;

    #[ORM\Column(type: 'integer')]
    public $hitPoints;

    #[ORM\Column(type: 'integer')]
    public $asiPoints;

    #[ORM\Column(type: 'integer', nullable: true)]
    public $walkingSpeed;

    #[ORM\Column(type: 'integer', nullable: true)]
    public $swimmingSpeed;

    #[ORM\Column(type: 'integer', nullable: true)]
    public $flyingSpeed;

    #[ORM\Column(type: 'integer', nullable: true)]
    public $climbingSpeed;

    #[ORM\Column(type: 'integer', nullable: true)]
    public $burrowingSpeed;

    #[ORM\Column(type: 'text', nullable: true)]
    public $senses;

    #[ORM\Column(type: 'integer')]
    public $strength;

    #[ORM\Column(type: 'integer')]
    public $dexterity;

    #[ORM\Column(type: 'integer')]
    public $constitution;

    #[ORM\Column(type: 'integer')]
    public $intelligence;

    #[ORM\Column(type: 'integer')]
    public $wisdom;

    #[ORM\Column(type: 'integer')]
    public $charisma;

    #[ORM\Column(type: 'integer')]
    public $minimumLevel;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    public $evolveForm;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    public $savingThrowOne;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    public $savingThrowTwo;
	
	#[ORM\Column(type: 'string', length: 255, nullable: true)]
    public $savingThrowThree;

    #[ORM\Column(type: 'text', nullable: true)]
    public $skills;

    #[ORM\Column(type: 'text', nullable: true)]
    public $resistance;

    #[ORM\Column(type: 'text')]
    public $vulnerable;

    #[ORM\Column(type: 'text', nullable: true)]
    public $immune;

    #[ORM\Column(type: 'string', length: 255)]
    public $abilityOne;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    public $abilityTwo;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    public $hiddenAbility;

    #[ORM\Column(type: 'text')]
    public $startingMoves;

    #[ORM\Column(type: 'text', nullable: true)]
    public $levelTwoMoves;

    #[ORM\Column(type: 'text', nullable: true)]
    public $levelSixMoves;

    #[ORM\Column(type: 'text', nullable: true)]
    public $levelTenMoves;

    #[ORM\Column(type: 'text', nullable: true)]
    public $levelFourteenMoves;

    #[ORM\Column(type: 'text', nullable: true)]
    public $levelEighteenMoves;

    #[ORM\Column(type: 'text', nullable: true)]
    public $evolutionDetails;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPokedexNumber(): ?string
    {
        return $this->pokedexNumber;
    }

    public function setPokedexNumber(string $pokedexNumber): self
    {
        $this->pokedexNumber = $pokedexNumber;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getPrimaryType(): ?string
    {
        return $this->primaryType;
    }

    public function setPrimaryType(string $primaryType): self
    {
        $this->primaryType = $primaryType;

        return $this;
    }

    public function getSecondaryType(): ?string
    {
        return $this->secondaryType;
    }

    public function setSecondaryType(?string $secondaryType): self
    {
        $this->secondaryType = $secondaryType;

        return $this;
    }

    public function getStage(): ?int
    {
        return $this->stage;
    }

    public function setStage(int $stage): self
    {
        $this->stage = $stage;

        return $this;
    }

    public function getMaxStage(): ?int
    {
        return $this->maxStage;
    }

    public function setMaxStage(int $maxStage): self
    {
        $this->maxStage = $maxStage;

        return $this;
    }

    public function getSpeciesRating(): ?float
    {
        return $this->speciesRating;
    }

    public function setSpeciesRating(float $speciesRating): self
    {
        $this->speciesRating = $speciesRating;

        return $this;
    }

    public function getArmorClass(): ?int
    {
        return $this->armorClass;
    }

    public function setArmorClass(int $armorClass): self
    {
        $this->armorClass = $armorClass;

        return $this;
    }

    public function getHitDice(): ?int
    {
        return $this->hitDice;
    }

    public function setHitDice(int $hitDice): self
    {
        $this->hitDice = $hitDice;

        return $this;
    }

    public function getHitPoints(): ?int
    {
        return $this->hitPoints;
    }

    public function setHitPoints(int $hitPoints): self
    {
        $this->hitPoints = $hitPoints;

        return $this;
    }

    public function getAsiPoints(): ?int
    {
        return $this->asiPoints;
    }

    public function setAsiPoints(int $asiPoints): self
    {
        $this->asiPoints = $asiPoints;

        return $this;
    }

    public function getWalkingSpeed(): ?int
    {
        return $this->walkingSpeed;
    }

    public function setWalkingSpeed(?int $walkingSpeed): self
    {
        $this->walkingSpeed = $walkingSpeed;

        return $this;
    }

    public function getSwimmingSpeed(): ?int
    {
        return $this->swimmingSpeed;
    }

    public function setSwimmingSpeed(?int $swimmingSpeed): self
    {
        $this->swimmingSpeed = $swimmingSpeed;

        return $this;
    }

    public function getFlyingSpeed(): ?int
    {
        return $this->flyingSpeed;
    }

    public function setFlyingSpeed(?int $flyingSpeed): self
    {
        $this->flyingSpeed = $flyingSpeed;

        return $this;
    }

    public function getClimbingSpeed(): ?int
    {
        return $this->climbingSpeed;
    }

    public function setClimbingSpeed(?int $climbingSpeed): self
    {
        $this->climbingSpeed = $climbingSpeed;

        return $this;
    }

    public function getBurrowingSpeed(): ?int
    {
        return $this->burrowingSpeed;
    }

    public function setBurrowingSpeed(?int $burrowingSpeed): self
    {
        $this->burrowingSpeed = $burrowingSpeed;

        return $this;
    }

    public function getSenses(): ?string
    {
        return $this->senses;
    }

    public function setSenses(?string $senses): self
    {
        $this->senses = $senses;

        return $this;
    }

    public function getStrength(): ?int
    {
        return $this->strength;
    }

    public function setStrength(int $strength): self
    {
        $this->strength = $strength;

        return $this;
    }

    public function getDexterity(): ?int
    {
        return $this->dexterity;
    }

    public function setDexterity(int $dexterity): self
    {
        $this->dexterity = $dexterity;

        return $this;
    }

    public function getConstitution(): ?int
    {
        return $this->constitution;
    }

    public function setConstitution(int $constitution): self
    {
        $this->constitution = $constitution;

        return $this;
    }

    public function getIntelligence(): ?int
    {
        return $this->intelligence;
    }

    public function setIntelligence(int $intelligence): self
    {
        $this->intelligence = $intelligence;

        return $this;
    }

    public function getWisdom(): ?int
    {
        return $this->wisdom;
    }

    public function setWisdom(int $wisdom): self
    {
        $this->wisdom = $wisdom;

        return $this;
    }

    public function getCharisma(): ?int
    {
        return $this->charisma;
    }

    public function setCharisma(int $charisma): self
    {
        $this->charisma = $charisma;

        return $this;
    }

    public function getMinimumLevel(): ?int
    {
        return $this->minimumLevel;
    }

    public function setMinimumLevel(int $minimumLevel): self
    {
        $this->minimumLevel = $minimumLevel;

        return $this;
    }

    public function getEvolveForm(): ?string
    {
        return $this->evolveForm;
    }

    public function setEvolveForm(?string $evolveForm): self
    {
        $this->evolveForm = $evolveForm;

        return $this;
    }

    public function getSavingThrowOne(): ?string
    {
        return $this->savingThrowOne;
    }

    public function setSavingThrowOne(?string $savingThrowOne): self
    {
        $this->savingThrowOne = $savingThrowOne;

        return $this;
    }

    public function getSavingThrowTwo(): ?string
    {
        return $this->savingThrowTwo;
    }

    public function setSavingThrowTwo(?string $savingThrowTwo): self
    {
        $this->savingThrowTwo = $savingThrowTwo;

        return $this;
    }
	
	 public function getSavingThrowThree(): ?string
    {
        return $this->savingThrowThree;
    }

    public function setSavingThrowThree(?string $savingThrowThree): self
    {
        $this->savingThrowThree = $savingThrowThree;

        return $this;
    }

    public function getSkills(): ?string
    {
        return $this->skills;
    }

    public function setSkills(?string $skills): self
    {
        $this->skills = $skills;

        return $this;
    }

    public function getResistance(): ?string
    {
        return $this->resistance;
    }

    public function setResistance(?string $resistance): self
    {
        $this->resistance = $resistance;

        return $this;
    }

    public function getVulnerable(): ?string
    {
        return $this->vulnerable;
    }

    public function setVulnerable(string $vulnerable): self
    {
        $this->vulnerable = $vulnerable;

        return $this;
    }

    public function getImmune(): ?string
    {
        return $this->immune;
    }

    public function setImmune(?string $immune): self
    {
        $this->immune = $immune;

        return $this;
    }

    public function getAbilityOne(): ?string
    {
        return $this->abilityOne;
    }

    public function setAbilityOne(string $abilityOne): self
    {
        $this->abilityOne = $abilityOne;

        return $this;
    }

    public function getAbilityTwo(): ?string
    {
        return $this->abilityTwo;
    }

    public function setAbilityTwo(?string $abilityTwo): self
    {
        $this->abilityTwo = $abilityTwo;

        return $this;
    }

    public function getHiddenAbility(): ?string
    {
        return $this->hiddenAbility;
    }

    public function setHiddenAbility(?string $hiddenAbility): self
    {
        $this->hiddenAbility = $hiddenAbility;

        return $this;
    }

    public function getStartingMoves(): ?string
    {
        return $this->startingMoves;
    }

    public function setStartingMoves(string $startingMoves): self
    {
        $this->startingMoves = $startingMoves;

        return $this;
    }

    public function getLevelTwoMoves(): ?string
    {
        return $this->levelTwoMoves;
    }

    public function setLevelTwoMoves(?string $levelTwoMoves): self
    {
        $this->levelTwoMoves = $levelTwoMoves;

        return $this;
    }

    public function getLevelSixMoves(): ?string
    {
        return $this->levelSixMoves;
    }

    public function setLevelSixMoves(?string $levelSixMoves): self
    {
        $this->levelSixMoves = $levelSixMoves;

        return $this;
    }

    public function getLevelTenMoves(): ?string
    {
        return $this->levelTenMoves;
    }

    public function setLevelTenMoves(?string $levelTenMoves): self
    {
        $this->levelTenMoves = $levelTenMoves;

        return $this;
    }

    public function getLevelFourteenMoves(): ?string
    {
        return $this->levelFourteenMoves;
    }

    public function setLevelFourteenMoves(?string $levelFourteenMoves): self
    {
        $this->levelFourteenMoves = $levelFourteenMoves;

        return $this;
    }

    public function getLevelEighteenMoves(): ?string
    {
        return $this->levelEighteenMoves;
    }

    public function setLevelEighteenMoves(?string $levelEighteenMoves): self
    {
        $this->levelEighteenMoves = $levelEighteenMoves;

        return $this;
    }

    public function getEvolutionDetails(): ?string
    {
        return $this->evolutionDetails;
    }

    public function setEvolutionDetails(?string $evolutionDetails): self
    {
        $this->evolutionDetails = $evolutionDetails;

        return $this;
    }
}
