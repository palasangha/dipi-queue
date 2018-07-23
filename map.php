<?php

$MAP["QuestionQualifyOldStudent"] = array("type" => "optionbool", "field" => "a_old", "table" => "dh_applicant");
$MAP["QuestionQualifySitOrServe"] = array("type" => "option", "field" => "a_type", "table" => "dh_applicant");
$MAP["QuestionQualifyGender"] = array("type" => "option", "field" => "a_gender", "table" => "dh_applicant");
$MAP["QuestionProfileAddressCountry"] = array("type" => "country", "field" => "a_country", "table" => "dh_applicant");
$MAP["QuestionProfileNameGiven"] = array("type" => "string", "field" => "a_f_name", "table" => "dh_applicant");
$MAP["QuestionProfileNameLast"] = array("type" => "string", "field" => "a_l_name", "table" => "dh_applicant");
//$MAP["QuestionProfileAge"] = array("type" => "integer", "field" => "a_age", "table" => "dh_applicant");
$MAP["QuestionProfileDateOfBirth"] = array("type" => "date", "field" => "a_dob", "table" => "dh_applicant");
$MAP["QuestionProfileOccupation"] = array("type" => "string", "field" => "a_occupation", "table" => "dh_applicant");
$MAP["QuestionProfileEducation"] = array("type" => "string", "field" => "a_education", "table" => "dh_applicant");
$MAP["QuestionProfileCompanyName2"] = array("type" => "string", "field" => "a_company", "table" => "dh_applicant");
$MAP["QuestionProfileDepartment"] = array("type" => "string", "field" => "a_department", "table" => "dh_applicant");
$MAP["QuestionProfileDesignation"] = array("type" => "string", "field" => "a_designation", "table" => "dh_applicant");
$MAP["QuestionProfileAddressStreet1"] = array("type" => "string", "field" => "a_address", "table" => "dh_applicant");
$MAP["QuestionProfileAddressCity"] = array("type" => "string", "field" => "a_city_str", "table" => "dh_applicant");
$MAP["QuestionProfileAddressProvinceState"] = array("type" => "state", "field" => "a_state", "table" => "dh_applicant");
$MAP["QuestionProfileAddressPostalCode"] = array("type" => "string", "field" => "a_zip", "table" => "dh_applicant");
$MAP["QuestionProfileLanguagePrimary"] = array("type" => "language", "field" => "a_lang_1", "table" => "dh_applicant");
$MAP["QuestionProfileLanguageOther"] = array("type" => "string", "field" => "a_langs", "table" => "dh_applicant");
$MAP["QuestionProfileEmail"] = array("type" => "string", "field" => "a_email", "table" => "dh_applicant");
$MAP["QuestionProfilePhoneHome"] = array("type" => "string", "field" => "a_phone_home", "table" => "dh_applicant");
$MAP["QuestionProfilePhoneMobile"] = array("type" => "string", "field" => "a_phone_mobile", "table" => "dh_applicant");
$MAP["QuestionProfilePhoneWork"] = array("type" => "string", "field" => "a_phone_office", "table" => "dh_applicant");
$MAP["QuestionLearnAboutVipassana"] = array("type" => "string", "field" => "a_learn_about_vip", "table" => "dh_applicant");
$MAP["QuestionPriorExperience"] = array("type" => "optionbool", "field" => "a_other_technique", "table" => "dh_applicant");
$MAP["QuestionPriorExperienceDetails"] = array("type" => "text", "field" => "ae_desc_other_technique", "table" => "dh_applicant_extra");
$MAP["QuestionTeachOthersNewStudent"] = array("type" => "optionbool", "field" => "a_teach_others", "table" => "dh_applicant");
$MAP["QuestionTeachOthersNewDetails"] = array("type" => "text", "field" => "ae_teach_other_details", "table" => "dh_applicant_extra");
$MAP["QuestionPhysicalHealth"] = array("type" => "optionbool", "field" => "a_problem_physical", "table" => "dh_applicant");
$MAP["QuestionPhysicalHealthDetails"] = array("type" => "text", "field" => "ae_desc_physical", "table" => "dh_applicant_extra");
$MAP["QuestionMentalHealth"] = array("type" => "optionbool", "field" => "a_problem_mental", "table" => "dh_applicant");
$MAP["QuestionMentalHealthDetails"] = array("type" => "text", "field" => "ae_desc_mental", "table" => "dh_applicant_extra");
$MAP["QuestionMedication"] = array("type" => "optionbool", "field" => "a_medication", "table" => "dh_applicant");
$MAP["QuestionMedicationDetails"] = array("type" => "text", "field" => "ae_desc_medication", "table" => "dh_applicant_extra");
$MAP["QuestionDrugs"] = array("type" => "optionbool", "field" => "a_addiction_current", "table" => "dh_applicant");
$MAP["QuestionDrugsDetails"] = array("type" => "text", "field" => "ae_desc_addiction_current", "table" => "dh_applicant_extra");
$MAP["QuestionFriendsOrFamiliy"] = array("type" => "optionbool", "field" => "a_friend_family", "table" => "dh_applicant");
$MAP["QuestionFriendsOrFamiliyDetails"] = array("type" => "text", "field" => "a_friend_family_details", "table" => "dh_applicant");
$MAP["QuestionCheckHereIfWillingToServe"] = array("type" => "checkbox", "field" => "a_willing_to_serve", "table" => "dh_applicant");
$MAP["QuestionCheckHereIfHelpSetup"] = array("type" => "checkbox", "field" => "a_willing_to_help", "table" => "dh_applicant");
$MAP["QuestionAdditionalInformation"] = array("type" => "text", "field" => "a_extra", "table" => "dh_applicant");
$MAP["QuestionSignatureName"] = array("type" => "string", "field" => "a_signature_name", "table" => "dh_applicant");
$MAP["QuestionSignatureDate"] = array("type" => "date", "field" => "a_signature_date", "table" => "dh_applicant");
$MAP["QuestionPregnant"] = array("type" => "optionbool", "field" => "ae_pregnant", "table" => "dh_applicant_extra");
$MAP["QuestionPregnantMonths"] = array("type" => "integer", "field" => "ae_pregnant_detail", "table" => "dh_applicant_extra");
$MAP["QuestionProfileCourseFirst10DaySatDate"] = array("type" => "string", "field" => "ac_first_year", "table" => "dh_applicant_course");
$MAP["QuestionProfileCourseFirst10DaySatLocation"] = array("type" => "string", "field" => "ac_first_location_str", "table" => "dh_applicant_course");
$MAP["QuestionProfileCourseFirst10DaySatTeachers"] = array("type" => "string", "field" => "ac_first_teacher_str", "table" => "dh_applicant_course");
$MAP["QuestionProfileCourseLast10DaySatDate"] = array("type" => "string", "field" => "ac_last_year", "table" => "dh_applicant_course");
$MAP["QuestionProfileCourseLast10DaySatLocation"] = array("type" => "string", "field" => "ac_last_location_str", "table" => "dh_applicant_course");
$MAP["QuestionProfileCourseLast10DaySatTeachers"] = array("type" => "string", "field" => "ac_last_teacher_str", "table" => "dh_applicant_course");
$MAP["QuestionProfileCourseTotalSat10Day"] = array("type" => "integer", "field" => "ac_10d", "table" => "dh_applicant_course");
$MAP["QuestionProfileCourseNumberServed"] = array("type" => "integer", "field" => "ac_service", "table" => "dh_applicant_course");
$MAP["QuestionOtherTechniques"] = array("type" => "optionbool", "field" => "a_other_technique_old", "table" => "dh_applicant");
$MAP["QuestionOtherTechniquesDetails"] = array("type" => "text", "field" => "ae_desc_other_technique_old", "table" => "dh_applicant_extra");
$MAP["QuestionMaintainedPractice"] = array("type" => "optionbool", "field" => "ac_practice", "table" => "dh_applicant_course");
$MAP["QuestionMaintainedPracticeDetails"] = array("type" => "text", "field" => "ac_practice_details", "table" => "dh_applicant_course");
$MAP["QuestionProfileCourseTotalSatSatipatthana"] = array("type" => "integer", "field" => "ac_stp", "table" => "dh_applicant_course");
$MAP["QuestionProfileCourseTotalSat20Day"] = array("type" => "integer", "field" => "ac_20d", "table" => "dh_applicant_course");
$MAP["QuestionProfileCourseTotalSat30Day"] = array("type" => "integer", "field" => "ac_30d", "table" => "dh_applicant_course");
$MAP["QuestionProfileCourseTotalSat45Day"] = array("type" => "integer", "field" => "ac_45d", "table" => "dh_applicant_course");
$MAP["QuestionProfileCourseTotalSat60Day"] = array("type" => "integer", "field" => "ac_60d", "table" => "dh_applicant_course");
$MAP["QuestionProfileCourseTotalSat10DaySpecial"] = array("type" => "integer", "field" => "ac_spl", "table" => "dh_applicant_course");
$MAP["QuestionProfileCourseTotalSatTSC"] = array("type" => "integer", "field" => "ac_tsc", "table" => "dh_applicant_course");
$MAP["InstructionLanguageProficiency"] = array("type" => "proficiency_multi", "field" => "a_lang", "table" => "dh_applicant");

$MAP["QuestionLanguageDiscourse"] = array("type" => "proficiency", "field" => "al_lang_discourse", "table" => "dh_applicant_lc");
$MAP["QuestionProfileATYesNo"] = array("type" => "optionbool", "field" => "ac_teacher", "table" => "dh_applicant_course");
$MAP["QuestionProfileATYearAppointed"] = array("type" => "integer", "field" => "al_at_year", "table" => "dh_applicant_lc");
$MAP["ImageApplicantPicture"] = array("type" => "image", "field" => "a_photo", "table" => "dh_applicant");
$MAP["EmergencyContactName"] = array("type" => "string", "field" => "a_emergency_name", "table" => "dh_applicant");
$MAP["EmergencyContactPhone"] = array("type" => "string", "field" => "a_emergency_num", "table" => "dh_applicant");
$MAP["EmergencyContactRelationship"] = array("type" => "string", "field" => "a_emergency_relation", "table" => "dh_applicant");
$MAP["QuestionFullyCommitted"] = array("type" => "optionbool", "field" => "al_committed", "table" => "dh_applicant_lc");
$MAP["QuestionExclusiveTwoYears"] = array("type" => "optionbool", "field" => "al_exclusive_2yrs", "table" => "dh_applicant_lc");
$MAP["QuestionDailyPractice"] = array("type" => "integer", "field" => "al_daily_practice_yrs", "table" => "dh_applicant_lc");
$MAP["QuestionDailyPracticeDetails"] = array("type" => "text", "field" => "al_daily_practice_details", "table" => "dh_applicant_lc");
$MAP["QuestionFivePrecepts"] = array("type" => "optionbool", "field" => "al_5_precepts", "table" => "dh_applicant_lc");
$MAP["QuestionIntoxicants"] = array("type" => "optionbool", "field" => "al_intoxicants", "table" => "dh_applicant_lc");
$MAP["QuestionSexualMisconduct"] = array("type" => "optionbool", "field" => "al_sexual_misconduct", "table" => "dh_applicant_lc");
$MAP["QuestionProfileCourseMostRecentSatType"] = array("type" => "eventtype", "field" => "al_recent_sat_type", "table" => "dh_applicant_lc");
$MAP["QuestionProfileCourseLastLongSatType"] = array("type" => "eventtype", "field" => "al_last_lc_type", "table" => "dh_applicant_lc");
$MAP["QuestionProfileCourseLastLongSatDate"] = array("type" => "string", "field" => "al_last_lc_date", "table" => "dh_applicant_lc");
$MAP["QuestionProfileCourseLastLongSatLocation"] = array("type" => "string", "field" => "al_last_lc_location", "table" => "dh_applicant_lc");
$MAP["QuestionProfileCourseLastLongSatTeachers"] = array("type" => "string", "field" => "al_last_lc_teacher", "table" => "dh_applicant_lc");
$MAP["QuestionProfileCourseServedOther"] = array("type" => "string", "field" => "al_served_other", "table" => "dh_applicant_lc");
$MAP["QuestionRelationship"] = array("type" => "optionbool", "field" => "al_relationship", "table" => "dh_applicant_lc");
$MAP["QuestionRelationshipCommitted"] = array("type" => "optionbool", "field" => "al_relationship_lifelong", "table" => "dh_applicant_lc");
$MAP["QuestionSpouseName"] = array("type" => "text", "field" => "al_spouse_name", "table" => "dh_applicant_lc");
$MAP["QuestionRelationshipHaronious"] = array("type" => "optionbool", "field" => "al_relation_harmonious", "table" => "dh_applicant_lc");
$MAP["QuestionSpouseInFavor"] = array("type" => "optionbool", "field" => "al_spouse_approve", "table" => "dh_applicant_lc");
$MAP["QuestionSpouseMeditator"] = array("type" => "optionbool", "field" => "al_spouse_meditator", "table" => "dh_applicant_lc");
$MAP["QuestionSpouseOtherTechniques"] = array("type" => "optionbool", "field" => "al_spouse_other_technique", "table" => "dh_applicant_lc");
$MAP["QuestionLeaveCourse"] = array("type" => "optionbool", "field" => "al_left_course", "table" => "dh_applicant_lc");
$MAP["QuestionLeaveCourseDetails"] = array("type" => "text", "field" => "al_left_course_details", "table" => "dh_applicant_lc");
$MAP["QuestionReduceMeditating"] = array("type" => "optionbool", "field" => "al_reduce_practice", "table" => "dh_applicant_lc");
$MAP["QuestionReduceMeditatingDetails"] = array("type" => "text", "field" => "al_reduce_practice_details", "table" => "dh_applicant_lc");
$MAP["QuestionPersonalTragedy"] = array("type" => "optionbool", "field" => "al_personal_tragedy", "table" => "dh_applicant_lc");
$MAP["QuestionPersonalTragedyDetails"] = array("type" => "text", "field" => "al_personal_tragedy_details", "table" => "dh_applicant_lc");
$MAP["QuestionDifficultiesInCourse"] = array("type" => "optionbool", "field" => "al_difficulty", "table" => "dh_applicant_lc");
$MAP["QuestionDifficultiesInCourseDetails"] = array("type" => "text", "field" => "al_difficulty_details", "table" => "dh_applicant_lc");
$MAP["QuestionSpecialRequirment"] = array("type" => "optionbool", "field" => "al_special_req", "table" => "dh_applicant_lc");
$MAP["QuestionSpecialRequirmentsAdditionalInfo"] = array("type" => "text", "field" => "al_special_req_details", "table" => "dh_applicant_lc");
$MAP["QuestionAdditionalInformationYesNoDetails"] = array("type" => "text", "field" => "al_additional_info", "table" => "dh_applicant_lc");
$MAP["QuestionArriveLongCourse"] = array("type" => "string", "field" => "al_arrival", "table" => "dh_applicant_lc");
$MAP["ApplicationNotesTable"] = array("type" => "notes", "field" => "al_", "table" => "dh_applicant_lc");

?>
