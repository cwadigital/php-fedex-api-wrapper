<?php
namespace FedEx\UploadDocumentServicev17\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Specifies the types of Estimated Duties and Taxes to be included in a rate quotation for an international shipment.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
 */
class EdtRequestType extends AbstractSimpleType
{
    const _ALL = 'ALL';
    const _NONE = 'NONE';
}
