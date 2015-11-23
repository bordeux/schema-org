<?php

namespace Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalProcedure;

/**
 * Generated by bordeux/schema
 *
 * @author Krzysztof Bednarczyk <schema@bordeux.net>
 * @link http://schema.org/PalliativeProcedure
 *
 *
 * -------------------------------- AdverseOutcome ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\MedicalEntity AdverseOutcome
 *
 * @method \Bordeux\SchemaOrg\Thing\MedicalEntity getAdverseOutcome() A possible complication and/or side effect of this therapy. If it is known that an adverse outcome is serious (resulting in death, disability, or permanent damage; requiring hospitalization; or is otherwise life-threatening or requires immediate medical attention), tag it as a seriouseAdverseOutcome instead.
 *
 * @method PalliativeProcedure setAdverseOutcome(\Bordeux\SchemaOrg\Thing\MedicalEntity $adverseOutcome )A possible complication and/or side effect of this therapy. If it is known that an adverse outcome is serious (resulting in death, disability, or permanent damage; requiring hospitalization; or is otherwise life-threatening or requires immediate medical attention), tag it as a seriouseAdverseOutcome instead.
 *
 *
 * -------------------------------- Contraindication ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalContraindication Contraindication
 *
 * @method \Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalContraindication getContraindication() A contraindication for this therapy.
 *
 * @method PalliativeProcedure setContraindication(\Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalContraindication $contraindication )A contraindication for this therapy.
 *
 *
 * -------------------------------- DuplicateTherapy ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalTherapy DuplicateTherapy
 *
 * @method \Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalTherapy getDuplicateTherapy() A therapy that duplicates or overlaps this one.
 *
 * @method PalliativeProcedure setDuplicateTherapy(\Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalTherapy $duplicateTherapy )A therapy that duplicates or overlaps this one.
 *
 *
 * -------------------------------- Indication ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalIndication Indication
 *
 * @method \Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalIndication getIndication() A factor that indicates use of this therapy for treatment and/or prevention of a condition, symptom, etc. For therapies such as drugs, indications can include both officially-approved indications as well as off-label uses. These can be distinguished by using the ApprovedIndication subtype of MedicalIndication.
 *
 * @method PalliativeProcedure setIndication(\Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalIndication $indication )A factor that indicates use of this therapy for treatment and/or prevention of a condition, symptom, etc. For therapies such as drugs, indications can include both officially-approved indications as well as off-label uses. These can be distinguished by using the ApprovedIndication subtype of MedicalIndication.
 *
 *
 * -------------------------------- SeriousAdverseOutcome ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\MedicalEntity SeriousAdverseOutcome
 *
 * @method \Bordeux\SchemaOrg\Thing\MedicalEntity getSeriousAdverseOutcome() A possible serious complication and/or serious side effect of this therapy. Serious adverse outcomes include those that are life-threatening; result in death, disability, or permanent damage; require hospitalization or prolong existing hospitalization; cause congenital anomalies or birth defects; or jeopardize the patient and may require medical or surgical intervention to prevent one of the outcomes in this definition.
 *
 * @method PalliativeProcedure setSeriousAdverseOutcome(\Bordeux\SchemaOrg\Thing\MedicalEntity $seriousAdverseOutcome )A possible serious complication and/or serious side effect of this therapy. Serious adverse outcomes include those that are life-threatening; result in death, disability, or permanent damage; require hospitalization or prolong existing hospitalization; cause congenital anomalies or birth defects; or jeopardize the patient and may require medical or surgical intervention to prevent one of the outcomes in this definition.
 *
 *
 */
class PalliativeProcedure extends \Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalProcedure
{
}
