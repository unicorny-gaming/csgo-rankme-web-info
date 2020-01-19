<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rankme
 *
 * @ORM\Table(name="rankme", uniqueConstraints={@ORM\UniqueConstraint(name="steam", columns={"steam"})})
 * @ORM\Entity
 */
class Rankme
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="steam", type="string", length=40, nullable=true)
     */
    private $steam;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="text", length=65535, nullable=true)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lastip", type="text", length=65535, nullable=true)
     */
    private $lastip;

    /**
     * @var string|null
     *
     * @ORM\Column(name="score", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $score;

    /**
     * @var string|null
     *
     * @ORM\Column(name="kills", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $kills;

    /**
     * @var string|null
     *
     * @ORM\Column(name="deaths", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $deaths;

    /**
     * @var string|null
     *
     * @ORM\Column(name="assists", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $assists;

    /**
     * @var string|null
     *
     * @ORM\Column(name="suicides", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $suicides;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tk", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $tk;

    /**
     * @var string|null
     *
     * @ORM\Column(name="shots", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $shots;

    /**
     * @var string|null
     *
     * @ORM\Column(name="hits", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $hits;

    /**
     * @var string|null
     *
     * @ORM\Column(name="headshots", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $headshots;

    /**
     * @var string|null
     *
     * @ORM\Column(name="connected", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $connected;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rounds_tr", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $roundsTr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rounds_ct", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $roundsCt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lastconnect", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $lastconnect;

    /**
     * @var string|null
     *
     * @ORM\Column(name="knife", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $knife;

    /**
     * @var string|null
     *
     * @ORM\Column(name="glock", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $glock;

    /**
     * @var string|null
     *
     * @ORM\Column(name="hkp2000", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $hkp2000;

    /**
     * @var string|null
     *
     * @ORM\Column(name="usp_silencer", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $uspSilencer;

    /**
     * @var string|null
     *
     * @ORM\Column(name="p250", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $p250;

    /**
     * @var string|null
     *
     * @ORM\Column(name="deagle", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $deagle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="elite", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $elite;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fiveseven", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $fiveseven;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tec9", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $tec9;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cz75a", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $cz75a;

    /**
     * @var string|null
     *
     * @ORM\Column(name="revolver", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $revolver;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nova", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $nova;

    /**
     * @var string|null
     *
     * @ORM\Column(name="xm1014", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $xm1014;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mag7", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $mag7;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sawedoff", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $sawedoff;

    /**
     * @var string|null
     *
     * @ORM\Column(name="bizon", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $bizon;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mac10", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $mac10;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mp9", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $mp9;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mp7", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $mp7;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ump45", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $ump45;

    /**
     * @var string|null
     *
     * @ORM\Column(name="p90", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $p90;

    /**
     * @var string|null
     *
     * @ORM\Column(name="galilar", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $galilar;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ak47", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $ak47;

    /**
     * @var string|null
     *
     * @ORM\Column(name="scar20", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $scar20;

    /**
     * @var string|null
     *
     * @ORM\Column(name="famas", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $famas;

    /**
     * @var string|null
     *
     * @ORM\Column(name="m4a1", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $m4a1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="m4a1_silencer", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $m4a1Silencer;

    /**
     * @var string|null
     *
     * @ORM\Column(name="aug", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $aug;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ssg08", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $ssg08;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sg556", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $sg556;

    /**
     * @var string|null
     *
     * @ORM\Column(name="awp", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $awp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="g3sg1", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $g3sg1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="m249", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $m249;

    /**
     * @var string|null
     *
     * @ORM\Column(name="negev", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $negev;

    /**
     * @var string|null
     *
     * @ORM\Column(name="hegrenade", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $hegrenade;

    /**
     * @var string|null
     *
     * @ORM\Column(name="flashbang", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $flashbang;

    /**
     * @var string|null
     *
     * @ORM\Column(name="smokegrenade", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $smokegrenade;

    /**
     * @var string|null
     *
     * @ORM\Column(name="inferno", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $inferno;

    /**
     * @var string|null
     *
     * @ORM\Column(name="decoy", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $decoy;

    /**
     * @var string|null
     *
     * @ORM\Column(name="taser", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $taser;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mp5sd", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $mp5sd;

    /**
     * @var string|null
     *
     * @ORM\Column(name="breachcharge", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $breachcharge;

    /**
     * @var string|null
     *
     * @ORM\Column(name="head", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $head;

    /**
     * @var string|null
     *
     * @ORM\Column(name="chest", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $chest;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stomach", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $stomach;

    /**
     * @var string|null
     *
     * @ORM\Column(name="left_arm", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $leftArm;

    /**
     * @var string|null
     *
     * @ORM\Column(name="right_arm", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $rightArm;

    /**
     * @var string|null
     *
     * @ORM\Column(name="left_leg", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $leftLeg;

    /**
     * @var string|null
     *
     * @ORM\Column(name="right_leg", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $rightLeg;

    /**
     * @var string|null
     *
     * @ORM\Column(name="c4_planted", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $c4Planted;

    /**
     * @var string|null
     *
     * @ORM\Column(name="c4_exploded", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $c4Exploded;

    /**
     * @var string|null
     *
     * @ORM\Column(name="c4_defused", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $c4Defused;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ct_win", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $ctWin;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tr_win", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $trWin;

    /**
     * @var string|null
     *
     * @ORM\Column(name="hostages_rescued", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $hostagesRescued;

    /**
     * @var string|null
     *
     * @ORM\Column(name="vip_killed", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $vipKilled;

    /**
     * @var string|null
     *
     * @ORM\Column(name="vip_escaped", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $vipEscaped;

    /**
     * @var string|null
     *
     * @ORM\Column(name="vip_played", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $vipPlayed;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mvp", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $mvp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="damage", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $damage;

    /**
     * @var string|null
     *
     * @ORM\Column(name="match_win", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $matchWin;

    /**
     * @var string|null
     *
     * @ORM\Column(name="match_draw", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $matchDraw;

    /**
     * @var string|null
     *
     * @ORM\Column(name="match_lose", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $matchLose;

    /**
     * @var string|null
     *
     * @ORM\Column(name="first_blood", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $firstBlood;

    /**
     * @var string|null
     *
     * @ORM\Column(name="no_scope", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $noScope;

    /**
     * @var string|null
     *
     * @ORM\Column(name="no_scope_dis", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $noScopeDis;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSteam(): ?string
    {
        return $this->steam;
    }

    public function setSteam(?string $steam): self
    {
        $this->steam = $steam;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getLastip(): ?string
    {
        return $this->lastip;
    }

    public function setLastip(?string $lastip): self
    {
        $this->lastip = $lastip;

        return $this;
    }

    public function getScore(): ?string
    {
        return $this->score;
    }

    public function setScore(?string $score): self
    {
        $this->score = $score;

        return $this;
    }

    public function getKills(): ?string
    {
        return $this->kills;
    }

    public function setKills(?string $kills): self
    {
        $this->kills = $kills;

        return $this;
    }

    public function getDeaths(): ?string
    {
        return $this->deaths;
    }

    public function setDeaths(?string $deaths): self
    {
        $this->deaths = $deaths;

        return $this;
    }

    public function getAssists(): ?string
    {
        return $this->assists;
    }

    public function setAssists(?string $assists): self
    {
        $this->assists = $assists;

        return $this;
    }

    public function getSuicides(): ?string
    {
        return $this->suicides;
    }

    public function setSuicides(?string $suicides): self
    {
        $this->suicides = $suicides;

        return $this;
    }

    public function getTk(): ?string
    {
        return $this->tk;
    }

    public function setTk(?string $tk): self
    {
        $this->tk = $tk;

        return $this;
    }

    public function getShots(): ?string
    {
        return $this->shots;
    }

    public function setShots(?string $shots): self
    {
        $this->shots = $shots;

        return $this;
    }

    public function getHits(): ?string
    {
        return $this->hits;
    }

    public function setHits(?string $hits): self
    {
        $this->hits = $hits;

        return $this;
    }

    public function getHeadshots(): ?string
    {
        return $this->headshots;
    }

    public function setHeadshots(?string $headshots): self
    {
        $this->headshots = $headshots;

        return $this;
    }

    public function getConnected(): ?string
    {
        return $this->connected;
    }

    public function setConnected(?string $connected): self
    {
        $this->connected = $connected;

        return $this;
    }

    public function getRoundsTr(): ?string
    {
        return $this->roundsTr;
    }

    public function setRoundsTr(?string $roundsTr): self
    {
        $this->roundsTr = $roundsTr;

        return $this;
    }

    public function getRoundsCt(): ?string
    {
        return $this->roundsCt;
    }

    public function setRoundsCt(?string $roundsCt): self
    {
        $this->roundsCt = $roundsCt;

        return $this;
    }

    public function getLastconnect(): ?string
    {
        return $this->lastconnect;
    }

    public function setLastconnect(?string $lastconnect): self
    {
        $this->lastconnect = $lastconnect;

        return $this;
    }

    public function getKnife(): ?string
    {
        return $this->knife;
    }

    public function setKnife(?string $knife): self
    {
        $this->knife = $knife;

        return $this;
    }

    public function getGlock(): ?string
    {
        return $this->glock;
    }

    public function setGlock(?string $glock): self
    {
        $this->glock = $glock;

        return $this;
    }

    public function getHkp2000(): ?string
    {
        return $this->hkp2000;
    }

    public function setHkp2000(?string $hkp2000): self
    {
        $this->hkp2000 = $hkp2000;

        return $this;
    }

    public function getUspSilencer(): ?string
    {
        return $this->uspSilencer;
    }

    public function setUspSilencer(?string $uspSilencer): self
    {
        $this->uspSilencer = $uspSilencer;

        return $this;
    }

    public function getP250(): ?string
    {
        return $this->p250;
    }

    public function setP250(?string $p250): self
    {
        $this->p250 = $p250;

        return $this;
    }

    public function getDeagle(): ?string
    {
        return $this->deagle;
    }

    public function setDeagle(?string $deagle): self
    {
        $this->deagle = $deagle;

        return $this;
    }

    public function getElite(): ?string
    {
        return $this->elite;
    }

    public function setElite(?string $elite): self
    {
        $this->elite = $elite;

        return $this;
    }

    public function getFiveseven(): ?string
    {
        return $this->fiveseven;
    }

    public function setFiveseven(?string $fiveseven): self
    {
        $this->fiveseven = $fiveseven;

        return $this;
    }

    public function getTec9(): ?string
    {
        return $this->tec9;
    }

    public function setTec9(?string $tec9): self
    {
        $this->tec9 = $tec9;

        return $this;
    }

    public function getCz75a(): ?string
    {
        return $this->cz75a;
    }

    public function setCz75a(?string $cz75a): self
    {
        $this->cz75a = $cz75a;

        return $this;
    }

    public function getRevolver(): ?string
    {
        return $this->revolver;
    }

    public function setRevolver(?string $revolver): self
    {
        $this->revolver = $revolver;

        return $this;
    }

    public function getNova(): ?string
    {
        return $this->nova;
    }

    public function setNova(?string $nova): self
    {
        $this->nova = $nova;

        return $this;
    }

    public function getXm1014(): ?string
    {
        return $this->xm1014;
    }

    public function setXm1014(?string $xm1014): self
    {
        $this->xm1014 = $xm1014;

        return $this;
    }

    public function getMag7(): ?string
    {
        return $this->mag7;
    }

    public function setMag7(?string $mag7): self
    {
        $this->mag7 = $mag7;

        return $this;
    }

    public function getSawedoff(): ?string
    {
        return $this->sawedoff;
    }

    public function setSawedoff(?string $sawedoff): self
    {
        $this->sawedoff = $sawedoff;

        return $this;
    }

    public function getBizon(): ?string
    {
        return $this->bizon;
    }

    public function setBizon(?string $bizon): self
    {
        $this->bizon = $bizon;

        return $this;
    }

    public function getMac10(): ?string
    {
        return $this->mac10;
    }

    public function setMac10(?string $mac10): self
    {
        $this->mac10 = $mac10;

        return $this;
    }

    public function getMp9(): ?string
    {
        return $this->mp9;
    }

    public function setMp9(?string $mp9): self
    {
        $this->mp9 = $mp9;

        return $this;
    }

    public function getMp7(): ?string
    {
        return $this->mp7;
    }

    public function setMp7(?string $mp7): self
    {
        $this->mp7 = $mp7;

        return $this;
    }

    public function getUmp45(): ?string
    {
        return $this->ump45;
    }

    public function setUmp45(?string $ump45): self
    {
        $this->ump45 = $ump45;

        return $this;
    }

    public function getP90(): ?string
    {
        return $this->p90;
    }

    public function setP90(?string $p90): self
    {
        $this->p90 = $p90;

        return $this;
    }

    public function getGalilar(): ?string
    {
        return $this->galilar;
    }

    public function setGalilar(?string $galilar): self
    {
        $this->galilar = $galilar;

        return $this;
    }

    public function getAk47(): ?string
    {
        return $this->ak47;
    }

    public function setAk47(?string $ak47): self
    {
        $this->ak47 = $ak47;

        return $this;
    }

    public function getScar20(): ?string
    {
        return $this->scar20;
    }

    public function setScar20(?string $scar20): self
    {
        $this->scar20 = $scar20;

        return $this;
    }

    public function getFamas(): ?string
    {
        return $this->famas;
    }

    public function setFamas(?string $famas): self
    {
        $this->famas = $famas;

        return $this;
    }

    public function getM4a1(): ?string
    {
        return $this->m4a1;
    }

    public function setM4a1(?string $m4a1): self
    {
        $this->m4a1 = $m4a1;

        return $this;
    }

    public function getM4a1Silencer(): ?string
    {
        return $this->m4a1Silencer;
    }

    public function setM4a1Silencer(?string $m4a1Silencer): self
    {
        $this->m4a1Silencer = $m4a1Silencer;

        return $this;
    }

    public function getAug(): ?string
    {
        return $this->aug;
    }

    public function setAug(?string $aug): self
    {
        $this->aug = $aug;

        return $this;
    }

    public function getSsg08(): ?string
    {
        return $this->ssg08;
    }

    public function setSsg08(?string $ssg08): self
    {
        $this->ssg08 = $ssg08;

        return $this;
    }

    public function getSg556(): ?string
    {
        return $this->sg556;
    }

    public function setSg556(?string $sg556): self
    {
        $this->sg556 = $sg556;

        return $this;
    }

    public function getAwp(): ?string
    {
        return $this->awp;
    }

    public function setAwp(?string $awp): self
    {
        $this->awp = $awp;

        return $this;
    }

    public function getG3sg1(): ?string
    {
        return $this->g3sg1;
    }

    public function setG3sg1(?string $g3sg1): self
    {
        $this->g3sg1 = $g3sg1;

        return $this;
    }

    public function getM249(): ?string
    {
        return $this->m249;
    }

    public function setM249(?string $m249): self
    {
        $this->m249 = $m249;

        return $this;
    }

    public function getNegev(): ?string
    {
        return $this->negev;
    }

    public function setNegev(?string $negev): self
    {
        $this->negev = $negev;

        return $this;
    }

    public function getHegrenade(): ?string
    {
        return $this->hegrenade;
    }

    public function setHegrenade(?string $hegrenade): self
    {
        $this->hegrenade = $hegrenade;

        return $this;
    }

    public function getFlashbang(): ?string
    {
        return $this->flashbang;
    }

    public function setFlashbang(?string $flashbang): self
    {
        $this->flashbang = $flashbang;

        return $this;
    }

    public function getSmokegrenade(): ?string
    {
        return $this->smokegrenade;
    }

    public function setSmokegrenade(?string $smokegrenade): self
    {
        $this->smokegrenade = $smokegrenade;

        return $this;
    }

    public function getInferno(): ?string
    {
        return $this->inferno;
    }

    public function setInferno(?string $inferno): self
    {
        $this->inferno = $inferno;

        return $this;
    }

    public function getDecoy(): ?string
    {
        return $this->decoy;
    }

    public function setDecoy(?string $decoy): self
    {
        $this->decoy = $decoy;

        return $this;
    }

    public function getTaser(): ?string
    {
        return $this->taser;
    }

    public function setTaser(?string $taser): self
    {
        $this->taser = $taser;

        return $this;
    }

    public function getMp5sd(): ?string
    {
        return $this->mp5sd;
    }

    public function setMp5sd(?string $mp5sd): self
    {
        $this->mp5sd = $mp5sd;

        return $this;
    }

    public function getBreachcharge(): ?string
    {
        return $this->breachcharge;
    }

    public function setBreachcharge(?string $breachcharge): self
    {
        $this->breachcharge = $breachcharge;

        return $this;
    }

    public function getHead(): ?string
    {
        return $this->head;
    }

    public function setHead(?string $head): self
    {
        $this->head = $head;

        return $this;
    }

    public function getChest(): ?string
    {
        return $this->chest;
    }

    public function setChest(?string $chest): self
    {
        $this->chest = $chest;

        return $this;
    }

    public function getStomach(): ?string
    {
        return $this->stomach;
    }

    public function setStomach(?string $stomach): self
    {
        $this->stomach = $stomach;

        return $this;
    }

    public function getLeftArm(): ?string
    {
        return $this->leftArm;
    }

    public function setLeftArm(?string $leftArm): self
    {
        $this->leftArm = $leftArm;

        return $this;
    }

    public function getRightArm(): ?string
    {
        return $this->rightArm;
    }

    public function setRightArm(?string $rightArm): self
    {
        $this->rightArm = $rightArm;

        return $this;
    }

    public function getLeftLeg(): ?string
    {
        return $this->leftLeg;
    }

    public function setLeftLeg(?string $leftLeg): self
    {
        $this->leftLeg = $leftLeg;

        return $this;
    }

    public function getRightLeg(): ?string
    {
        return $this->rightLeg;
    }

    public function setRightLeg(?string $rightLeg): self
    {
        $this->rightLeg = $rightLeg;

        return $this;
    }

    public function getC4Planted(): ?string
    {
        return $this->c4Planted;
    }

    public function setC4Planted(?string $c4Planted): self
    {
        $this->c4Planted = $c4Planted;

        return $this;
    }

    public function getC4Exploded(): ?string
    {
        return $this->c4Exploded;
    }

    public function setC4Exploded(?string $c4Exploded): self
    {
        $this->c4Exploded = $c4Exploded;

        return $this;
    }

    public function getC4Defused(): ?string
    {
        return $this->c4Defused;
    }

    public function setC4Defused(?string $c4Defused): self
    {
        $this->c4Defused = $c4Defused;

        return $this;
    }

    public function getCtWin(): ?string
    {
        return $this->ctWin;
    }

    public function setCtWin(?string $ctWin): self
    {
        $this->ctWin = $ctWin;

        return $this;
    }

    public function getTrWin(): ?string
    {
        return $this->trWin;
    }

    public function setTrWin(?string $trWin): self
    {
        $this->trWin = $trWin;

        return $this;
    }

    public function getHostagesRescued(): ?string
    {
        return $this->hostagesRescued;
    }

    public function setHostagesRescued(?string $hostagesRescued): self
    {
        $this->hostagesRescued = $hostagesRescued;

        return $this;
    }

    public function getVipKilled(): ?string
    {
        return $this->vipKilled;
    }

    public function setVipKilled(?string $vipKilled): self
    {
        $this->vipKilled = $vipKilled;

        return $this;
    }

    public function getVipEscaped(): ?string
    {
        return $this->vipEscaped;
    }

    public function setVipEscaped(?string $vipEscaped): self
    {
        $this->vipEscaped = $vipEscaped;

        return $this;
    }

    public function getVipPlayed(): ?string
    {
        return $this->vipPlayed;
    }

    public function setVipPlayed(?string $vipPlayed): self
    {
        $this->vipPlayed = $vipPlayed;

        return $this;
    }

    public function getMvp(): ?string
    {
        return $this->mvp;
    }

    public function setMvp(?string $mvp): self
    {
        $this->mvp = $mvp;

        return $this;
    }

    public function getDamage(): ?string
    {
        return $this->damage;
    }

    public function setDamage(?string $damage): self
    {
        $this->damage = $damage;

        return $this;
    }

    public function getMatchWin(): ?string
    {
        return $this->matchWin;
    }

    public function setMatchWin(?string $matchWin): self
    {
        $this->matchWin = $matchWin;

        return $this;
    }

    public function getMatchDraw(): ?string
    {
        return $this->matchDraw;
    }

    public function setMatchDraw(?string $matchDraw): self
    {
        $this->matchDraw = $matchDraw;

        return $this;
    }

    public function getMatchLose(): ?string
    {
        return $this->matchLose;
    }

    public function setMatchLose(?string $matchLose): self
    {
        $this->matchLose = $matchLose;

        return $this;
    }

    public function getFirstBlood(): ?string
    {
        return $this->firstBlood;
    }

    public function setFirstBlood(?string $firstBlood): self
    {
        $this->firstBlood = $firstBlood;

        return $this;
    }

    public function getNoScope(): ?string
    {
        return $this->noScope;
    }

    public function setNoScope(?string $noScope): self
    {
        $this->noScope = $noScope;

        return $this;
    }

    public function getNoScopeDis(): ?string
    {
        return $this->noScopeDis;
    }

    public function setNoScopeDis(?string $noScopeDis): self
    {
        $this->noScopeDis = $noScopeDis;

        return $this;
    }


}
