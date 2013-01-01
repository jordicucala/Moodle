<?php $this->cache['en']['enrol_database'] = array (
  'database:unenrol' => 'Unenrol suspended users',
  'dbencoding' => 'Database encoding',
  'dbhost' => 'Database host',
  'dbhost_desc' => 'Type database server IP address or host name',
  'dbname' => 'Database name',
  'dbpass' => 'Database password',
  'dbsetupsql' => 'Database setup command',
  'dbsetupsql_desc' => 'SQL command for special database setup, often used to setup communication encoding - example for MySQL and PostgreSQL: <em>SET NAMES \'utf8\'</em>',
  'dbsybasequoting' => 'Use sybase quotes',
  'dbsybasequoting_desc' => 'Sybase style single quote escaping - needed for Oracle, MS SQL and some other databases. Do not use for MySQL!',
  'dbtype' => 'Database driver',
  'dbtype_desc' => 'ADOdb database driver name, type of the external database engine.',
  'dbuser' => 'Database user',
  'debugdb' => 'Debug ADOdb',
  'debugdb_desc' => 'Debug ADOdb connection to external database - use when getting empty page during login. Not suitable for production sites!',
  'defaultcategory' => 'Default new course category',
  'defaultcategory_desc' => 'The default category for auto-created courses. Used when no new category id specified or not found.',
  'defaultrole' => 'Default role',
  'defaultrole_desc' => 'The role that will be assigned by default if no other role is specified in external table.',
  'ignorehiddencourses' => 'Ignore hidden courses',
  'ignorehiddencourses_desc' => 'If enabled users will not be enrolled on courses that are set to be unavailable to students.',
  'localcategoryfield' => 'Local category field',
  'localcoursefield' => 'Local course field',
  'localrolefield' => 'Local role field',
  'localuserfield' => 'Local user field',
  'newcoursetable' => 'Remote new courses table',
  'newcoursetable_desc' => 'Specify of the name of the table that contains list of courses that should be created automatically. Empty means no courses are created.',
  'newcoursecategory' => 'New course category field',
  'newcoursefullname' => 'New course full name field',
  'newcourseidnumber' => 'New course ID number field',
  'newcourseshortname' => 'New course short name field',
  'pluginname' => 'External database',
  'pluginname_desc' => 'You can use an external database (of nearly any kind) to control your enrolments. It is assumed your external database contains at least a field containing a course ID, and a field containing a user ID. These are compared against fields that you choose in the local course and user tables.',
  'remotecoursefield' => 'Remote course field',
  'remotecoursefield_desc' => 'The name of the field in the remote table that we are using to match entries in the course table.',
  'remoteenroltable' => 'Remote user enrolment table',
  'remoteenroltable_desc' => 'Specify the name of the table that contains list of user enrolments. Empty means no user enrolment sync.',
  'remoterolefield' => 'Remote role field',
  'remoterolefield_desc' => 'The name of the field in the remote table that we are using to match entries in the roles table.',
  'remoteuserfield' => 'Remote user field',
  'settingsheaderdb' => 'External database connection',
  'settingsheaderlocal' => 'Local field mapping',
  'settingsheaderremote' => 'Remote enrolment sync',
  'settingsheadernewcourses' => 'Creation of new courses',
  'remoteuserfield_desc' => 'The name of the field in the remote table that we are using to match entries in the user table.',
  'templatecourse' => 'New course template',
  'templatecourse_desc' => 'Optional: auto-created courses can copy their settings from a template course. Type here the shortname of the template course.',
);