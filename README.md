#INCOGNITO

Online Treasure Hunt with Facebook Integration

##Important

- Place UserID of SuperAdmin in application/config/decepto.php
- Place AppID and AppSecret in application/config/facebook.php
- Configure the database connection settings in application/config/database.php
- Setup the database with the given tables.sql
- Manually set the status as admin for first time


##User Side

- Facebook Login.
- Questions as Images.
- Special Clues can be placed in HTML, Cookies, Page Title and Text Box.
- Support for story mode, a part of the story is enabled on completion of a level.

##Admin Side

- Monitoring of all the cracked, active and inactive levels.
- Monitoring of answer logs for a single user and for a whole level.
- Facility to add, delete, edit, activate, deactivate and swap levels.
- Facility to block a user
- Facility to deactivate the site.
- Facility to Upgrade all users to a specific level.
- Facility to Downgrade all users above a certain level to that level
- Facility to add story images to be activated after a particular level
- Facility for admin users to add other admins.
- Facility for master admin to remove admin users.
- Faciltiy to test any level from admin side.

## Notes

### these two modules needs to be installed with apache2

- mod_rewrite
- headers

### Modify these files

```
cp application/config/database.php.example application/config/database.php
cp application/config/facebook.php.example application/config/facebook.php
cp application/config/decepto.php.example application/config/decepto.php
cp application/config/config.php.example application/config/config.php
cp application/views/templates/analyticstracking.php.example application/views/templates/analyticstracking.php
```
