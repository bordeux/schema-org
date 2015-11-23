<?php

namespace Bordeux\SchemaOrg\Thing\CreativeWork;

/**
 * Generated by bordeux/schema
 *
 * @author Krzysztof Bednarczyk <schema@bordeux.net>
 * @link http://schema.org/Diet
 *
 *
 * -------------------------------- Code ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalCode Code
 *
 * @method \Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalCode getCode() A medical code for the entity, taken from a controlled vocabulary or ontology such as ICD-9, DiseasesDB, MeSH, SNOMED-CT, RxNorm, etc.
 *
 * @method Diet setCode(\Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalCode $code )A medical code for the entity, taken from a controlled vocabulary or ontology such as ICD-9, DiseasesDB, MeSH, SNOMED-CT, RxNorm, etc.
 *
 *
 * -------------------------------- Guideline ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalGuideline Guideline
 *
 * @method \Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalGuideline getGuideline() A medical guideline related to this entity.
 *
 * @method Diet setGuideline(\Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalGuideline $guideline )A medical guideline related to this entity.
 *
 *
 * -------------------------------- MedicineSystem ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\MedicineSystem MedicineSystem
 *
 * @method \Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\MedicineSystem getMedicineSystem() The system of medicine that includes this MedicalEntity, for example 'evidence-based', 'homeopathic', 'chiropractic', etc.
 *
 * @method Diet setMedicineSystem(\Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\MedicineSystem $medicineSystem )The system of medicine that includes this MedicalEntity, for example 'evidence-based', 'homeopathic', 'chiropractic', etc.
 *
 *
 * -------------------------------- RecognizingAuthority ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Organization RecognizingAuthority
 *
 * @method \Bordeux\SchemaOrg\Thing\Organization getRecognizingAuthority() If applicable, the organization that officially recognizes this entity as part of its endorsed system of medicine.
 *
 * @method Diet setRecognizingAuthority(\Bordeux\SchemaOrg\Thing\Organization $recognizingAuthority )If applicable, the organization that officially recognizes this entity as part of its endorsed system of medicine.
 *
 *
 * -------------------------------- RelevantSpecialty ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\MedicalSpecialty RelevantSpecialty
 *
 * @method \Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\MedicalSpecialty getRelevantSpecialty() If applicable, a medical specialty in which this entity is relevant.
 *
 * @method Diet setRelevantSpecialty(\Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalEnumeration\MedicalSpecialty $relevantSpecialty )If applicable, a medical specialty in which this entity is relevant.
 *
 *
 * -------------------------------- Study ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalStudy Study
 *
 * @method \Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalStudy getStudy() A medical study or trial related to this entity.
 *
 * @method Diet setStudy(\Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalStudy $study )A medical study or trial related to this entity.
 *
 *
 * -------------------------------- AdverseOutcome ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\MedicalEntity AdverseOutcome
 *
 * @method \Bordeux\SchemaOrg\Thing\MedicalEntity getAdverseOutcome() A possible complication and/or side effect of this therapy. If it is known that an adverse outcome is serious (resulting in death, disability, or permanent damage; requiring hospitalization; or is otherwise life-threatening or requires immediate medical attention), tag it as a seriouseAdverseOutcome instead.
 *
 * @method Diet setAdverseOutcome(\Bordeux\SchemaOrg\Thing\MedicalEntity $adverseOutcome )A possible complication and/or side effect of this therapy. If it is known that an adverse outcome is serious (resulting in death, disability, or permanent damage; requiring hospitalization; or is otherwise life-threatening or requires immediate medical attention), tag it as a seriouseAdverseOutcome instead.
 *
 *
 * -------------------------------- Contraindication ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalContraindication Contraindication
 *
 * @method \Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalContraindication getContraindication() A contraindication for this therapy.
 *
 * @method Diet setContraindication(\Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalContraindication $contraindication )A contraindication for this therapy.
 *
 *
 * -------------------------------- DuplicateTherapy ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalTherapy DuplicateTherapy
 *
 * @method \Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalTherapy getDuplicateTherapy() A therapy that duplicates or overlaps this one.
 *
 * @method Diet setDuplicateTherapy(\Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalTherapy $duplicateTherapy )A therapy that duplicates or overlaps this one.
 *
 *
 * -------------------------------- Indication ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalIndication Indication
 *
 * @method \Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalIndication getIndication() A factor that indicates use of this therapy for treatment and/or prevention of a condition, symptom, etc. For therapies such as drugs, indications can include both officially-approved indications as well as off-label uses. These can be distinguished by using the ApprovedIndication subtype of MedicalIndication.
 *
 * @method Diet setIndication(\Bordeux\SchemaOrg\Thing\MedicalEntity\MedicalIndication $indication )A factor that indicates use of this therapy for treatment and/or prevention of a condition, symptom, etc. For therapies such as drugs, indications can include both officially-approved indications as well as off-label uses. These can be distinguished by using the ApprovedIndication subtype of MedicalIndication.
 *
 *
 * -------------------------------- SeriousAdverseOutcome ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\MedicalEntity SeriousAdverseOutcome
 *
 * @method \Bordeux\SchemaOrg\Thing\MedicalEntity getSeriousAdverseOutcome() A possible serious complication and/or serious side effect of this therapy. Serious adverse outcomes include those that are life-threatening; result in death, disability, or permanent damage; require hospitalization or prolong existing hospitalization; cause congenital anomalies or birth defects; or jeopardize the patient and may require medical or surgical intervention to prevent one of the outcomes in this definition.
 *
 * @method Diet setSeriousAdverseOutcome(\Bordeux\SchemaOrg\Thing\MedicalEntity $seriousAdverseOutcome )A possible serious complication and/or serious side effect of this therapy. Serious adverse outcomes include those that are life-threatening; result in death, disability, or permanent damage; require hospitalization or prolong existing hospitalization; cause congenital anomalies or birth defects; or jeopardize the patient and may require medical or surgical intervention to prevent one of the outcomes in this definition.
 *
 *
 * -------------------------------- DietFeatures ---------------------------------------------
 *
 * @property string DietFeatures
 *
 * @method string getDietFeatures() Nutritional information specific to the dietary plan. May include dietary recommendations on what foods to avoid, what foods to consume, and specific alterations/deviations from the USDA or other regulatory body's approved dietary guidelines.
 *
 * @method Diet setDietFeatures(string $dietFeatures )Nutritional information specific to the dietary plan. May include dietary recommendations on what foods to avoid, what foods to consume, and specific alterations/deviations from the USDA or other regulatory body's approved dietary guidelines.
 *
 *
 * -------------------------------- Endorsers ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Organization|\Bordeux\SchemaOrg\Thing\Person Endorsers
 *
 * @method \Bordeux\SchemaOrg\Thing\Organization|\Bordeux\SchemaOrg\Thing\Person getEndorsers() People or organizations that endorse the plan.
 *
 * @method Diet setEndorsers(\Bordeux\SchemaOrg\Thing\Organization $endorsers ) setEndorsers(\Bordeux\SchemaOrg\Thing\Person $endorsers )People or organizations that endorse the plan.
 *
 *
 * -------------------------------- ExpertConsiderations ---------------------------------------------
 *
 * @property string ExpertConsiderations
 *
 * @method string getExpertConsiderations() Medical expert advice related to the plan.
 *
 * @method Diet setExpertConsiderations(string $expertConsiderations )Medical expert advice related to the plan.
 *
 *
 * -------------------------------- Overview ---------------------------------------------
 *
 * @property string Overview
 *
 * @method string getOverview() Descriptive information establishing the overarching theory/philosophy of the plan. May include the rationale for the name, the population where the plan first came to prominence, etc.
 *
 * @method Diet setOverview(string $overview )Descriptive information establishing the overarching theory/philosophy of the plan. May include the rationale for the name, the population where the plan first came to prominence, etc.
 *
 *
 * -------------------------------- PhysiologicalBenefits ---------------------------------------------
 *
 * @property string PhysiologicalBenefits
 *
 * @method string getPhysiologicalBenefits() Specific physiologic benefits associated to the plan.
 *
 * @method Diet setPhysiologicalBenefits(string $physiologicalBenefits )Specific physiologic benefits associated to the plan.
 *
 *
 * -------------------------------- ProprietaryName ---------------------------------------------
 *
 * @property string ProprietaryName
 *
 * @method string getProprietaryName() Proprietary name given to the diet plan, typically by its originator or creator.
 *
 * @method Diet setProprietaryName(string $proprietaryName )Proprietary name given to the diet plan, typically by its originator or creator.
 *
 *
 * -------------------------------- Risks ---------------------------------------------
 *
 * @property string Risks
 *
 * @method string getRisks() Specific physiologic risks associated to the plan.
 *
 * @method Diet setRisks(string $risks )Specific physiologic risks associated to the plan.
 *
 *
 */
class Diet extends \Bordeux\SchemaOrg\Thing\CreativeWork
{
}