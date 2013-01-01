<?php $this->cache['en']['enrol_self'] = array (
  'customwelcomemessage' => 'Custom welcome message',
  'customwelcomemessage_help' => 'A custom welcome message may be added as plain text or Moodle-auto format, including HTML tags and multi-lang tags.

The following placeholders may be included in the message:

* Course name {$a->coursename}
* Link to user\'s profile page {$a->profileurl}',
  'defaultrole' => 'Default role assignment',
  'defaultrole_desc' => 'Select role which should be assigned to users during self enrolment',
  'editenrolment' => 'Edit enrolment',
  'enrolenddate' => 'End date',
  'enrolenddate_help' => 'If enabled, users can enrol themselves until this date only.',
  'enrolenddaterror' => 'Enrolment end date cannot be earlier than start date',
  'enrolme' => 'Enrol me',
  'enrolperiod' => 'Enrolment duration',
  'enrolperiod_desc' => 'Default length of time that the enrolment is valid (in seconds). If set to zero, the enrolment duration will be unlimited by default.',
  'enrolperiod_help' => 'Length of time that the enrolment is valid, starting with the moment the user enrols themselves. If disabled, the enrolment duration will be unlimited.',
  'enrolstartdate' => 'Start date',
  'enrolstartdate_help' => 'If enabled, users can enrol themselves from this date onward only.',
  'groupkey' => 'Use group enrolment keys',
  'groupkey_desc' => 'Use group enrolment keys by default.',
  'groupkey_help' => 'In addition to restricting access to the course to only those who know the key, use of a group enrolment key means users are automatically added to the group when they enrol in the course.

To use a group enrolment key, an enrolment key must be specified in the course settings as well as the group enrolment key in the group settings.',
  'longtimenosee' => 'Unenrol inactive after',
  'longtimenosee_help' => 'If users haven\'t accessed a course for a long time, then they are automatically unenrolled. This parameter specifies that time limit.',
  'maxenrolled' => 'Max enrolled users',
  'maxenrolled_help' => 'Specifies the maximum number of users that can self enrol. 0 means no limit.',
  'maxenrolledreached' => 'Maximum number of users allowed to self-enrol was already reached.',
  'nopassword' => 'No enrolment key required.',
  'password' => 'Enrolment key',
  'password_help' => 'An enrolment key enables access to the course to be restricted to only those who know the key.

If the field is left blank, any user may enrol in the course.

If an enrolment key is specified, any user attempting to enrol in the course will be required to supply the key. Note that a user only needs to supply the enrolment key ONCE, when they enrol in the course.',
  'passwordinvalid' => 'Incorrect enrolment key, please try again',
  'passwordinvalidhint' => 'That enrolment key was incorrect, please try again<br />
(Here\'s a hint - it starts with \'{$a}\')',
  'pluginname' => 'Self enrolment',
  'pluginname_desc' => 'The self enrolment plugin allows users to choose which courses they want to participate in. The courses may be protected by an enrolment key. Internally the enrolment is done via the manual enrolment plugin which has to be enabled in the same course.',
  'requirepassword' => 'Require enrolment key',
  'requirepassword_desc' => 'Require enrolment key in new courses and prevent removing of enrolment key from existing courses.',
  'role' => 'Default assigned role',
  'self:config' => 'Configure self enrol instances',
  'self:manage' => 'Manage enrolled users',
  'self:unenrol' => 'Unenrol users from course',
  'self:unenrolself' => 'Unenrol self from the course',
  'sendcoursewelcomemessage' => 'Send course welcome message',
  'sendcoursewelcomemessage_help' => 'If enabled, users receive a welcome message via email when they self-enrol in a course.',
  'showhint' => 'Show hint',
  'showhint_desc' => 'Show first letter of the guest access key.',
  'status' => 'Allow self enrolments',
  'status_desc' => 'Allow users to self enrol into course by default.',
  'status_help' => 'This setting determines whether a user can enrol (and also unenrol if they have the appropriate permission) themselves from the course.',
  'unenrol' => 'Unenrol user',
  'unenrolselfconfirm' => 'Do you really want to unenrol yourself from course "{$a}"?',
  'unenroluser' => 'Do you really want to unenrol "{$a->user}" from course "{$a->course}"?',
  'usepasswordpolicy' => 'Use password policy',
  'usepasswordpolicy_desc' => 'Use standard password policy for enrolment keys.',
  'welcometocourse' => 'Welcome to {$a}',
  'welcometocoursetext' => 'Welcome to {$a->coursename}!

If you have not done so already, you should edit your profile page so that we can learn more about you:

  {$a->profileurl}',
);