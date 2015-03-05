This file contains details about the file-structure and organization.

Well, despite saying that, there really is no 'structure' at the moment. All files are in the root folder. The 'old' folder contains the previous version of the site.

#Pages

##index.php

As usual, the main page of the site. For now, it just has some introductory stuff. In future, it'll be a bulletin board for any announcements posted there.

##about.php

Contains the Requirements document about the application. All details of functionalities that will be supported by the application can be found here. Links to the file 'RequirementsDoc.html'.

##comments.php

Allows for testers/users to send comments to us, the development team. Bug reports and feature requests can be handled more easily this way.

##news.php

A running update of features that have been added to the application.

##whoami.php

Details about the development team.

##welcome.php

The dashboard once the user logs in. Links to the pages faculty_class_page.php, faculty_lab_page.php, faculty_settings.php, faculty_planner.php and faculty_stats.php.

##faculty_class_page.php

Dashboard for all class-related actions like coursework entry/updates, attendance, assignments and stats for that class.

##faculty_lab_page.php

Dashboard for all lab-related actions like record/observation work entry/updates, attendance, and stats for that lab.

##faculty_settings.php

Settings page to upload course-plans, semester time table, change your password and some other stuff.

##faculty_stats.php

An overview of a bunch of statistics about classes, labs, overall performance, etc.
Some supported stats include:
+ Average attendance per class
+ Average Intended:Actual time taken ratio per class
+ Percentage of syllabus covered per class
+ Average rate of completion per class
+ Estimated completion date at this rate per class

##faculty_planner.php

A corner teachers can use to organize themselves. Contains the semester's timetable, a to-do list thing and stuff. Not sure if we're going to keep this.

#Source files

HTML files linked into other files.

##RequirementsDoc.html

Contains the requirements document for 'about.php'.

##headertext.html

Contains the text for the header of the site. Just to make it easy to change later.

##footertext.html

Contains the text for the footer of the site. Also just to make it easy to change later.

##nav.htm

Contains the links for the nav-bar in the site. Same reason as above.

##news.html

Contains the text for 'news.php'.

#Stylesheets

##index.css

The main stylesheet that just about all pages are linked to. Defines the style for all major elements in the site like the header, footer, nav and main blocks.

##nav.css

Stylesheet exclusively for the 'nav.htm' file. Defines the button shape and size and stuff.

##buttons.css

Defines a set of buttons for use in the main section of the site. Those buttons tend to have different styles from the nav buttons.

#Other files

##list_of_pages.txt

A checklist of all pages in the site required to be made.

##readme.mkd

Hey, you're right here!
