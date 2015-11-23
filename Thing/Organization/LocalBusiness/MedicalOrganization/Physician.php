<?php

namespace Bordeux\SchemaOrg\Thing\Organization\LocalBusiness\MedicalOrganization;

/**
 * Generated by bordeux/schema
 *
 * @author Krzysztof Bednarczyk <schema@bordeux.net>
 * @link http://schema.org/Physician
 *
 *
 * -------------------------------- AvailableService ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalTest|\Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalProcedure|\Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalTherapy AvailableService
 *
 * @method \Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalTest|\Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalProcedure|\Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalTherapy getAvailableService() A medical service available from this provider.
 *
 * @method Physician setAvailableService(\Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalTest $availableService ) setAvailableService(\Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalProcedure $availableService ) setAvailableService(\Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalTherapy $availableService )A medical service available from this provider.
 *
 *
 * -------------------------------- HospitalAffiliation ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Place\CivicStructure\Hospital HospitalAffiliation
 *
 * @method \Bordeux\SchemaOrg\Thing\Place\CivicStructure\Hospital getHospitalAffiliation() A hospital with which the physician or office is affiliated.
 *
 * @method Physician setHospitalAffiliation(\Bordeux\SchemaOrg\Thing\Place\CivicStructure\Hospital $hospitalAffiliation )A hospital with which the physician or office is affiliated.
 *
 *
 * -------------------------------- MedicalSpecialty ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\MedicalSpecialty MedicalSpecialty
 *
 * @method \Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\MedicalSpecialty getMedicalSpecialty() A medical specialty of the provider.
 *
 * @method Physician setMedicalSpecialty(\Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\MedicalSpecialty $medicalSpecialty )A medical specialty of the provider.
 *
 *
 */
class Physician extends \Bordeux\SchemaOrg\Thing\Organization\LocalBusiness\MedicalOrganization
{
}
