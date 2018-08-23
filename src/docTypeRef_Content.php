<?php

namespace DHLExpress;

/**
 * Class docTypeRef_Content
 *
 * @package DHLExpress
 */
class docTypeRef_Content
{

	/**
	 * @var ContentID $ContentID
	 */
	protected $ContentID;

	/**
	 * @var DryIceTotalNetWeight $DryIceTotalNetWeight
	 */
	protected $DryIceTotalNetWeight;

	/**
	 * @var UNCode $UNCode
	 */
	protected $UNCode;

	/**
	 * @param ContentID $ContentID
	 * @param DryIceTotalNetWeight $DryIceTotalNetWeight
	 * @param UNCode $UNCode
	 */
	public function __construct($ContentID, $DryIceTotalNetWeight, $UNCode)
	{
		$this->ContentID = $ContentID;
		$this->DryIceTotalNetWeight = $DryIceTotalNetWeight;
		$this->UNCode = $UNCode;
	}

	/**
	 * @return ContentID
	 */
	public function getContentID()
	{
		return $this->ContentID;
	}

	/**
	 * @param ContentID $ContentID
	 * @return \DHLExpress\docTypeRef_Content
	 */
	public function setContentID($ContentID)
	{
		$this->ContentID = $ContentID;
		return $this;
	}

	/**
	 * @return DryIceTotalNetWeight
	 */
	public function getDryIceTotalNetWeight()
	{
		return $this->DryIceTotalNetWeight;
	}

	/**
	 * @param DryIceTotalNetWeight $DryIceTotalNetWeight
	 * @return \DHLExpress\docTypeRef_Content
	 */
	public function setDryIceTotalNetWeight($DryIceTotalNetWeight)
	{
		$this->DryIceTotalNetWeight = $DryIceTotalNetWeight;
		return $this;
	}

	/**
	 * @return UNCode
	 */
	public function getUNCode()
	{
		return $this->UNCode;
	}

	/**
	 * @param UNCode $UNCode
	 * @return \DHLExpress\docTypeRef_Content
	 */
	public function setUNCode($UNCode)
	{
		$this->UNCode = $UNCode;
		return $this;
	}

}
