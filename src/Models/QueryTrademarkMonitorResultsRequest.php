<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models;

use AlibabaCloud\Tea\Model;

class QueryTrademarkMonitorResultsRequest extends Model
{
    /**
     * @var int
     */
    public $actionType;

    /**
     * @var string
     */
    public $applyYear;

    /**
     * @var string
     */
    public $classification;

    /**
     * @var int
     */
    public $pageNum;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $procedureStatus;

    /**
     * @var string
     */
    public $registrationNumber;

    /**
     * @var int
     */
    public $ruleId;

    /**
     * @var string
     */
    public $tmName;
    protected $_name = [
        'actionType'         => 'ActionType',
        'applyYear'          => 'ApplyYear',
        'classification'     => 'Classification',
        'pageNum'            => 'PageNum',
        'pageSize'           => 'PageSize',
        'procedureStatus'    => 'ProcedureStatus',
        'registrationNumber' => 'RegistrationNumber',
        'ruleId'             => 'RuleId',
        'tmName'             => 'TmName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actionType) {
            $res['ActionType'] = $this->actionType;
        }
        if (null !== $this->applyYear) {
            $res['ApplyYear'] = $this->applyYear;
        }
        if (null !== $this->classification) {
            $res['Classification'] = $this->classification;
        }
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->procedureStatus) {
            $res['ProcedureStatus'] = $this->procedureStatus;
        }
        if (null !== $this->registrationNumber) {
            $res['RegistrationNumber'] = $this->registrationNumber;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->tmName) {
            $res['TmName'] = $this->tmName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryTrademarkMonitorResultsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActionType'])) {
            $model->actionType = $map['ActionType'];
        }
        if (isset($map['ApplyYear'])) {
            $model->applyYear = $map['ApplyYear'];
        }
        if (isset($map['Classification'])) {
            $model->classification = $map['Classification'];
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ProcedureStatus'])) {
            $model->procedureStatus = $map['ProcedureStatus'];
        }
        if (isset($map['RegistrationNumber'])) {
            $model->registrationNumber = $map['RegistrationNumber'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['TmName'])) {
            $model->tmName = $map['TmName'];
        }

        return $model;
    }
}
