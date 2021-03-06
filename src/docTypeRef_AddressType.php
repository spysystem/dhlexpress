<?php
namespace DHLExpress;


/**
 * Class docTypeRef_AddressType
 */
class docTypeRef_AddressType
{

	/**
	 * @var string $StreetLines
	 */
	protected $StreetLines;

	/**
	 * @var null|string $StreetName
	 */
	protected $StreetName;

	/**
	 * @var null|string $StreetNumber
	 */
	protected $StreetNumber;

	/**
	 * @var null|string $StreetLines2
	 */
	protected $StreetLines2;

	/**
	 * @var null|string $StreetLines3
	 */
	protected $StreetLines3;

	/**
	 * @var string $City
	 */
	protected $City;

	/**
	 * @var null|string $StateOrProvinceCode
	 */
	protected $StateOrProvinceCode;

	/**
	 * @var string $PostalCode
	 */
	protected $PostalCode;

	/**
	 * @var string $CountryCode
	 */
	protected $CountryCode;

	/**
	 * @param string $StreetLines
	 * @param string $City
	 * @param string $PostalCode
	 * @param string $CountryCode
	 */
	public function __construct(string $StreetLines, string $City, string $PostalCode, string $CountryCode)
	{
		$this->StreetLines = $StreetLines;
		$this->City = $City;
		$this->PostalCode = $PostalCode;
		$this->CountryCode = $CountryCode;
	}

	/**
	 * @return string
	 */
	public function getStreetLines(): ?string
	{
		return $this->StreetLines;
	}

	/**
	 * @param string $StreetLines
	 * @return docTypeRef_AddressType
	 */
	public function setStreetLines(string $StreetLines): docTypeRef_AddressType
	{
		$this->StreetLines = $StreetLines;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getStreetName(): ?string
	{
		return $this->StreetName;
	}

	/**
	 * @param null|string $StreetName
	 * @return docTypeRef_AddressType
	 */
	public function setStreetName(?string $StreetName = null): docTypeRef_AddressType
	{
		$this->StreetName = $StreetName;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getStreetNumber(): ?string
	{
		return $this->StreetNumber;
	}

	/**
	 * @param null|string $StreetNumber
	 * @return docTypeRef_AddressType
	 */
	public function setStreetNumber(?string $StreetNumber = null): docTypeRef_AddressType
	{
		$this->StreetNumber = $StreetNumber;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getStreetLines2(): ?string
	{
		return $this->StreetLines2;
	}

	/**
	 * @param null|string $StreetLines2
	 * @return docTypeRef_AddressType
	 */
	public function setStreetLines2(?string $StreetLines2 = null): docTypeRef_AddressType
	{
		$this->StreetLines2 = $StreetLines2;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getStreetLines3(): ?string
	{
		return $this->StreetLines3;
	}

	/**
	 * @param null|string $StreetLines3
	 * @return docTypeRef_AddressType
	 */
	public function setStreetLines3(?string $StreetLines3 = null): docTypeRef_AddressType
	{
		$this->StreetLines3 = $StreetLines3;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getCity(): ?string
	{
		return $this->City;
	}

	/**
	 * @param string $City
	 * @return docTypeRef_AddressType
	 */
	public function setCity(string $City): docTypeRef_AddressType
	{
		$this->City = $City;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getStateOrProvinceCode(): ?string
	{
		return $this->StateOrProvinceCode;
	}

	/**
	 * @param null|string $StateOrProvinceCode
	 * @return docTypeRef_AddressType
	 */
	public function setStateOrProvinceCode(?string $StateOrProvinceCode = null): docTypeRef_AddressType
	{
		$this->StateOrProvinceCode = $StateOrProvinceCode;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getPostalCode(): ?string
	{
		return $this->PostalCode;
	}

	/**
	 * @param string $PostalCode
	 * @return docTypeRef_AddressType
	 */
	public function setPostalCode(string $PostalCode): docTypeRef_AddressType
	{
		$this->PostalCode = $PostalCode;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getCountryCode(): ?string
	{
		return $this->CountryCode;
	}

	/**
	 * @param string $CountryCode
	 * @return docTypeRef_AddressType
	 */
	public function setCountryCode(string $CountryCode): docTypeRef_AddressType
	{
		$this->CountryCode = $CountryCode;
		return $this;
	}

}
