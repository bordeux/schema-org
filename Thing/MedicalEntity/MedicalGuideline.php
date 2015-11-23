<?php

namespace Bordeux\SchemaOrg\Thing\MedicalEntity;

/**
 * Generated by bordeux/schema
 *
 * @author Krzysztof Bednarczyk <schema@bordeux.net>
 * @link http://schema.org/MedicalGuideline
 *
 *
 * -------------------------------- EvidenceLevel ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\MedicalEvidenceLevel EvidenceLevel
 *
 * @method \Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\MedicalEvidenceLevel getEvidenceLevel() Strength of evidence of the data used to formulate the guideline (enumerated).
 *
 * @method MedicalGuideline setEvidenceLevel(\Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\MedicalEvidenceLevel $evidenceLevel )Strength of evidence of the data used to formulate the guideline (enumerated).
 *
 *
 * -------------------------------- EvidenceOrigin ---------------------------------------------
 *
 * @property string EvidenceOrigin
 *
 * @method string getEvidenceOrigin() Source of the data used to formulate the guidance, e.g. RCT, consensus opinion, etc.
 *
 * @method MedicalGuideline setEvidenceOrigin(string $evidenceOrigin )Source of the data used to formulate the guidance, e.g. RCT, consensus opinion, etc.
 *
 *
 * -------------------------------- GuidelineDate ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\SchemaDateTime GuidelineDate
 *
 * @method \Bordeux\SchemaOrg\SchemaDateTime getGuidelineDate() Date on which this guideline's recommendation was made.
 *
 * @method MedicalGuideline setGuidelineDate(\Bordeux\SchemaOrg\SchemaDateTime $guidelineDate )Date on which this guideline's recommendation was made.
 *
 *
 * -------------------------------- GuidelineSubject ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\MedicalEntity GuidelineSubject
 *
 * @method \Bordeux\SchemaOrg\Thing\MedicalEntity getGuidelineSubject() The medical conditions, treatments, etc. that are the subject of the guideline.
 *
 * @method MedicalGuideline setGuidelineSubject(\Bordeux\SchemaOrg\Thing\MedicalEntity $guidelineSubject )The medical conditions, treatments, etc. that are the subject of the guideline.
 *
 *
 */
class MedicalGuideline extends \Bordeux\SchemaOrg\Thing\MedicalEntity
{
}
