<?php

namespace DHLExpress;

/**
 * Class docTypeRef_ShipmentDetailType
 *
 * @package DHLExpress
 */
class docTypeRef_ShipmentDetailType
{

	/**
	 * @var docTypeRef_NotificationType2[] $Notification
	 */
	protected $Notification;

	/**
	 * @var docTypeRef_PackagesResultsType $PackagesResult
	 */
	protected $PackagesResult;

	/**
	 * @var docTypeRef_LabelImageType[] $LabelImage
	 */
	protected $LabelImage;

	/**
	 * @var ShipmentIdentificationNumber3 $ShipmentIdentificationNumber
	 */
	protected $ShipmentIdentificationNumber;

	/**
	 * @var string $DispatchConfirmationNumber
	 */
	protected $DispatchConfirmationNumber;

	/**
	 * @param docTypeRef_NotificationType2[] $Notification
	 */
	public function __construct(array $Notification)
	{
		$this->Notification = $Notification;
	}

	/**
	 * @return docTypeRef_NotificationType2[]
	 */
	public function getNotification()
	{
		return $this->Notification;
	}

	/**
	 * @param docTypeRef_NotificationType2[] $Notification
	 * @return \DHLExpress\docTypeRef_ShipmentDetailType
	 */
	public function setNotification(array $Notification)
	{
		$this->Notification = $Notification;
		return $this;
	}

	/**
	 * @return docTypeRef_PackagesResultsType
	 */
	public function getPackagesResult()
	{
		return $this->PackagesResult;
	}

	/**
	 * @param docTypeRef_PackagesResultsType $PackagesResult
	 * @return \DHLExpress\docTypeRef_ShipmentDetailType
	 */
	public function setPackagesResult($PackagesResult)
	{
		$this->PackagesResult = $PackagesResult;
		return $this;
	}

	/**
	 * @return docTypeRef_LabelImageType[]
	 */
	public function getLabelImage()
	{
		return $this->LabelImage;
	}

	/**
	 * @param docTypeRef_LabelImageType[] $LabelImage
	 * @return \DHLExpress\docTypeRef_ShipmentDetailType
	 */
	public function setLabelImage(array $LabelImage = null)
	{
		$this->LabelImage = $LabelImage;
		return $this;
	}

	/**
	 * @return ShipmentIdentificationNumber3
	 */
	public function getShipmentIdentificationNumber()
	{
		return $this->ShipmentIdentificationNumber;
	}

	/**
	 * @param ShipmentIdentificationNumber3 $ShipmentIdentificationNumber
	 * @return \DHLExpress\docTypeRef_ShipmentDetailType
	 */
	public function setShipmentIdentificationNumber($ShipmentIdentificationNumber)
	{
		$this->ShipmentIdentificationNumber = $ShipmentIdentificationNumber;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getDispatchConfirmationNumber()
	{
		return $this->DispatchConfirmationNumber;
	}

	/**
	 * @param string $DispatchConfirmationNumber
	 * @return \DHLExpress\docTypeRef_ShipmentDetailType
	 */
	public function setDispatchConfirmationNumber($DispatchConfirmationNumber)
	{
		$this->DispatchConfirmationNumber = $DispatchConfirmationNumber;
		return $this;
	}

}
