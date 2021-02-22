<?php
namespace FedEx\UploadDocumentServicev17\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Specifies the way in which base charges for a Freight shipment or shipment leg are calculated.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
 */
class FreightBaseChargeCalculationType extends AbstractSimpleType
{
    const _BEYOND = 'BEYOND';
    const _LINE_ITEMS = 'LINE_ITEMS';
    const _UNIT_PRICING = 'UNIT_PRICING';
}
