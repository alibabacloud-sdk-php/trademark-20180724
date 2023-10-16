<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models\QueryCredentialsInfoResponseBody;

use AlibabaCloud\Tea\Model;

class credentialsInfo extends Model
{
    /**
     * @var string
     */
    public $address;

    /**
     * @var string
     */
    public $cardNumber;

    /**
     * @var string
     */
    public $companyName;

    /**
     * @var string
     */
    public $personName;

    /**
     * @var string
     */
    public $province;
    protected $_name = [
        'address'     => 'Address',
        'cardNumber'  => 'CardNumber',
        'companyName' => 'CompanyName',
        'personName'  => 'PersonName',
        'province'    => 'Province',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }
        if (null !== $this->cardNumber) {
            $res['CardNumber'] = $this->cardNumber;
        }
        if (null !== $this->companyName) {
            $res['CompanyName'] = $this->companyName;
        }
        if (null !== $this->personName) {
            $res['PersonName'] = $this->personName;
        }
        if (null !== $this->province) {
            $res['Province'] = $this->province;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return credentialsInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }
        if (isset($map['CardNumber'])) {
            $model->cardNumber = $map['CardNumber'];
        }
        if (isset($map['CompanyName'])) {
            $model->companyName = $map['CompanyName'];
        }
        if (isset($map['PersonName'])) {
            $model->personName = $map['PersonName'];
        }
        if (isset($map['Province'])) {
            $model->province = $map['Province'];
        }

        return $model;
    }
}
