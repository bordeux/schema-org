<?php

namespace Bordeux\SchemaOrg\Thing\Intangible;

/**
 * Generated by bordeux/schema
 *
 * @author Krzysztof Bednarczyk <schema@bordeux.net>
 * @link http://schema.org/JobPosting
 *
 *
 * -------------------------------- BaseSalary ---------------------------------------------
 *
 * @property Number BaseSalary
 *
 * @method Number getBaseSalary() The base salary of the job.
 *
 * @method JobPosting setBaseSalary(Number $baseSalary )The base salary of the job.
 *
 *
 * -------------------------------- Benefits ---------------------------------------------
 *
 * @property string Benefits
 *
 * @method string getBenefits() Description of benefits associated with the job.
 *
 * @method JobPosting setBenefits(string $benefits )Description of benefits associated with the job.
 *
 *
 * -------------------------------- DatePosted ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\SchemaDateTime DatePosted
 *
 * @method \Bordeux\SchemaOrg\SchemaDateTime getDatePosted() Publication date for the job posting.
 *
 * @method JobPosting setDatePosted(\Bordeux\SchemaOrg\SchemaDateTime $datePosted )Publication date for the job posting.
 *
 *
 * -------------------------------- EducationRequirements ---------------------------------------------
 *
 * @property string EducationRequirements
 *
 * @method string getEducationRequirements() Educational background needed for the position.
 *
 * @method JobPosting setEducationRequirements(string $educationRequirements )Educational background needed for the position.
 *
 *
 * -------------------------------- EmploymentType ---------------------------------------------
 *
 * @property string EmploymentType
 *
 * @method string getEmploymentType() Type of employment (e.g. full-time, part-time, contract, temporary, seasonal, internship).
 *
 * @method JobPosting setEmploymentType(string $employmentType )Type of employment (e.g. full-time, part-time, contract, temporary, seasonal, internship).
 *
 *
 * -------------------------------- ExperienceRequirements ---------------------------------------------
 *
 * @property string ExperienceRequirements
 *
 * @method string getExperienceRequirements() Description of skills and experience needed for the position.
 *
 * @method JobPosting setExperienceRequirements(string $experienceRequirements )Description of skills and experience needed for the position.
 *
 *
 * -------------------------------- HiringOrganization ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Organization HiringOrganization
 *
 * @method \Bordeux\SchemaOrg\Thing\Organization getHiringOrganization() Organization offering the job position.
 *
 * @method JobPosting setHiringOrganization(\Bordeux\SchemaOrg\Thing\Organization $hiringOrganization )Organization offering the job position.
 *
 *
 * -------------------------------- Incentives ---------------------------------------------
 *
 * @property string Incentives
 *
 * @method string getIncentives() Description of bonus and commission compensation aspects of the job.
 *
 * @method JobPosting setIncentives(string $incentives )Description of bonus and commission compensation aspects of the job.
 *
 *
 * -------------------------------- Industry ---------------------------------------------
 *
 * @property string Industry
 *
 * @method string getIndustry() The industry associated with the job position.
 *
 * @method JobPosting setIndustry(string $industry )The industry associated with the job position.
 *
 *
 * -------------------------------- JobLocation ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Place JobLocation
 *
 * @method \Bordeux\SchemaOrg\Thing\Place getJobLocation() A (typically single) geographic location associated with the job position.
 *
 * @method JobPosting setJobLocation(\Bordeux\SchemaOrg\Thing\Place $jobLocation )A (typically single) geographic location associated with the job position.
 *
 *
 * -------------------------------- OccupationalCategory ---------------------------------------------
 *
 * @property string OccupationalCategory
 *
 * @method string getOccupationalCategory() Category or categories describing the job. Use BLS O*NET-SOC taxonomy: http://www.onetcenter.org/taxonomy.html. Ideally includes textual label and formal code, with the property repeated for each applicable value.
 *
 * @method JobPosting setOccupationalCategory(string $occupationalCategory )Category or categories describing the job. Use BLS O*NET-SOC taxonomy: http://www.onetcenter.org/taxonomy.html. Ideally includes textual label and formal code, with the property repeated for each applicable value.
 *
 *
 * -------------------------------- Qualifications ---------------------------------------------
 *
 * @property string Qualifications
 *
 * @method string getQualifications() Specific qualifications required for this role.
 *
 * @method JobPosting setQualifications(string $qualifications )Specific qualifications required for this role.
 *
 *
 * -------------------------------- Responsibilities ---------------------------------------------
 *
 * @property string Responsibilities
 *
 * @method string getResponsibilities() Responsibilities associated with this role.
 *
 * @method JobPosting setResponsibilities(string $responsibilities )Responsibilities associated with this role.
 *
 *
 * -------------------------------- SalaryCurrency ---------------------------------------------
 *
 * @property string SalaryCurrency
 *
 * @method string getSalaryCurrency() The currency (coded using ISO 4217, http://en.wikipedia.org/wiki/ISO_4217 used for the main salary information in this job posting.
 *
 * @method JobPosting setSalaryCurrency(string $salaryCurrency )The currency (coded using ISO 4217, http://en.wikipedia.org/wiki/ISO_4217 used for the main salary information in this job posting.
 *
 *
 * -------------------------------- Skills ---------------------------------------------
 *
 * @property string Skills
 *
 * @method string getSkills() Skills required to fulfill this role.
 *
 * @method JobPosting setSkills(string $skills )Skills required to fulfill this role.
 *
 *
 * -------------------------------- SpecialCommitments ---------------------------------------------
 *
 * @property string SpecialCommitments
 *
 * @method string getSpecialCommitments() Any special commitments associated with this job posting. Valid entries include VeteranCommit, MilitarySpouseCommit, etc.
 *
 * @method JobPosting setSpecialCommitments(string $specialCommitments )Any special commitments associated with this job posting. Valid entries include VeteranCommit, MilitarySpouseCommit, etc.
 *
 *
 * -------------------------------- Title ---------------------------------------------
 *
 * @property string Title
 *
 * @method string getTitle() The title of the job.
 *
 * @method JobPosting setTitle(string $title )The title of the job.
 *
 *
 * -------------------------------- WorkHours ---------------------------------------------
 *
 * @property string WorkHours
 *
 * @method string getWorkHours() The typical working hours for this job (e.g. 1st shift, night shift, 8am-5pm).
 *
 * @method JobPosting setWorkHours(string $workHours )The typical working hours for this job (e.g. 1st shift, night shift, 8am-5pm).
 *
 *
 */
class JobPosting extends \Bordeux\SchemaOrg\Thing\Intangible
{
}